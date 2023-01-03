<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/Post-Coursesx',
        '/Post-Jobs',
        '/send-data-to-offorbystudents',
        '/Whatsapp-set-token',
        '/Whatsapp-auth-token',
        '/Whatsapp-update-auth',
        '/Is-Login',
    ];
}