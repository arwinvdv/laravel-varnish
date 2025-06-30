<?php

return [
    /*
     * The hostname(s) this Laravel app is listening to.
     */
    'host' => ['example.com'],

    /*
     * The location of the file containing the administrative password.
     */
    'administrative_secret' => '/etc/varnish/secret',

    /*
     * The port where the administrative tasks may be sent to.
     */
    'administrative_port' => 6082,

    /*
     * The IP address where the administrative tasks may be sent to.
     */
    'administrative_host' => '127.0.0.1',

    /*
     * Whether to use sudo when executing varnishadm commands.
     */
    'use_sudo' => true,

    /*
     * The default amount of minutes that content rendered using the `CacheWithVarnish`
     * middleware should be cached.
     */
    'cache_time_in_minutes' => 60 * 24,

    /*
     * The name of the header that triggers Varnish to cache the response.
     */
    'cacheable_header_name' => 'X-Cacheable',
];