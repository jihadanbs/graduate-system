<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
use App\Filters\FilterMahasiswa;
use App\Filters\FilterStaf;
use App\Filters\FilterDosen;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filtermahasiswa' => FilterMahasiswa::class,
        'filterstaf' => FilterStaf::class,
        'filterdosen' => FilterDosen::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    public array $globals = [
        'before' => [
            'filtermahasiswa' => [
                'except' => [
                    'auth', 'auth/*',
                    'home', 'home/*',
                    '/'
                ]
            ],
            'filterstaf' => [
                'except' => [
                    'auth', 'auth/*',
                    'Home', 'Home/*',
                    '/'
                ]
            ],
            'filterdosen' => [
                'except' => [
                    'auth', 'auth/*',
                    'Home', 'Home/*',
                    '/'
                ]
            ],
        ],
        'after' => [
            'filtermahasiswa' => [
                'except' => [
                    'auth', 'auth/*',
                    'Home', 'Home/*',
                    '/',
                    'DashboardMahasiswa', 'DashboardMahasiswa/*',
                    'Pendaftaran', 'Pendaftaran/*',
                ]
            ],
            'filterstaf' => [
                'except' => [
                    'Auth', 'Auth/*',
                    'Home', 'Home/*',
                    '/',
                    'DashboardStaf', 'DashboardStaf/*',
                    'Persyaratan', 'Persyaratan/*',
                    'Dosen', 'Dosen/*',
                    'Mahasiswa', 'Mahasiswa/*',
                    'Staf', 'Staf/*',
                    'Berkas', 'Berkas/*',
                    'Tendik', 'Tendik/*',
                ]
            ],
            'filterdosen' => [
                'except' => [
                    'Auth', 'Auth/*',
                    'Home', 'Home/*',
                    '/',
                    'DashboardDosen', 'DashboardDosen/*',
                ]
            ],
            'toolbar',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}
