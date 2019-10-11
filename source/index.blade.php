@extends('_layouts.master')

@section('meta_title', 'Full Stack Laravel & PHP Developer - London | Gareth Drew')

@section('meta_description', 'A full stack web developer working with a number of technologies including PHP, Laravel, Vue.js. Currently based in London, UK.')

@section('body')
<div class="container mx-auto">
    <div class="pb-16 max-w-5xl mt-16 px-8">
        <h1>Hello, I'm Gareth, a full stack PHP & Laravel developer based in London, UK.</h1>
    </div>
</div>

<div class="bg-greylight">
    <div class="container mx-auto">
        <div class="max-w-4xl p-8">
            <h2>About me</h2>
            <p class="pt-8">I have over {{ Carbon\Carbon::now()->diffInYears(Carbon\Carbon::parse('2008-10-01 00:00:00')) }} experience in web technologies, delivering a variety of implementations across many different industries. My background is mainly in backend technologies, primarily PHP, most recently building Laravel applications for over {{ Carbon\Carbon::now()->diffInYears(Carbon\Carbon::parse('2012-01-01 00:00:00')) }} years.</p>
            <p class="pt-8">Along the way I've also worked across the entire stack of a web application from frontend development to design of hosting architecutre in AWS using an infrastructure as code approach with Terraform, Ansible and Puppet.</p>
            <p class="pt-8">Want to discuss working together? Then contact me on <a rel="noopener" target="_blank" href="https://www.linkedin.com/in/garethdrew/">LinkedIn</a>.</p>
        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="py-8 px-8">
        <h2>Technologies that I work with</h2>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 mb-4 mt-4">
                <h3>Backend</h3>
                <ul class="bullets-inline pl-0">
                    <li>Laravel</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Algolia</li>
                    <li>Elasticsearch</li>
                    <li>Redis</li>
                    <li>Memcached</li>
                    <li>CodeIgniter</li>
                    <li>SilverStripe</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 mb-4 mt-4">
                <h3>Frontend</h3>
                <ul class="bullets-inline pl-0">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>SASS</li>
                    <li>Tailwind CSS</li>
                    <li>Vue</li>
                    <li>React</li>
                    <li>npm</li>
                    <li>Yarn</li>
                    <li>Webpack</li>
                    <li>Bootstrap</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 mb-4 mt-4">
                <h3>DevOps</h3>
                <ul class="bullets-inline pl-0">
                    <li>AWS</li>
                    <li>Azure</li>
                    <li>Docker</li>
                    <li>Terraform</li>
                    <li>Ansible</li>
                    <li>Puppet</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 mb-4 mt-4">
                <h3>Services</h3>
                <ul class="bullets-inline pl-0">
                    <li>Stripe</li>
                    <li>SagePay</li>
                    <li>PayPal</li>
                    <li>Mailchimp</li>
                    <li>Mailgun</li>
                    <li>Sendgrid</li>
                    <li>Bugsnag</li>
                    <li>Sentry</li>
                    <li>Google Tag Manager</li>
                    <li>Google Analytics</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection