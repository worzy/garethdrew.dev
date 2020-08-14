<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;

class GenerateSitemap
{
    public function handle(Jigsaw $jigsaw)
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');
        $ignoredPaths = $jigsaw->getConfig('ignoredPaths')->all();
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())->each(function ($path) use ($baseUrl, $sitemap, $ignoredPaths) {

            if (!$this->isAsset($path) && !$this->isInIgnoreList($path, $ignoredPaths)) {
                $sitemap->addItem($baseUrl . $this->checkRootPath($path), time(), Sitemap::DAILY);
            }
        });

        $sitemap->write();
    }

    private function checkRootPath($path)
    {
        return $path == '/index.html' ? '/' : $path;
    }

    private function isAsset($path)
    {
        return Str::startsWith($path, '/assets');
    }

    private function isInIgnoreList($path, $ignoredPaths)
    {
        return in_array($path, $ignoredPaths);
    }
}
