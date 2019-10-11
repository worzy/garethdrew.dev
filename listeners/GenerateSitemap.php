<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

class GenerateSitemap
{
    public function handle(Jigsaw $jigsaw)
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');
        $ignoredPaths = $jigsaw->getConfig('ignoredPaths')->all();
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())->each(function ($path) use ($baseUrl, $sitemap, $ignoredPaths) {

            if (!$this->isAsset($path) && !$this->isInIgnoreList($path, $ignoredPaths)) {
                $sitemap->addItem($baseUrl . $path, time(), Sitemap::DAILY);
            }
        });

        $sitemap->write();
    }

    private function isAsset($path)
    {
        return starts_with($path, '/assets');
    }

    private function isInIgnoreList($path, $ignoredPaths)
    {
        return in_array($path, $ignoredPaths);
    }
}
