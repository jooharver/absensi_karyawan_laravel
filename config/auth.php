<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a good start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'admin', // Ubah guard default ke 'admin'
        'passwords' => 'admins', // Ubah password provider default ke 'admins'
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Here you may define every guard for your application. A default
    | configuration has been defined for you which uses session storage
    | and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how
    | the users are actually retrieved out of your database or other
    | storage mechanisms used by this application.
    |
    */

    'guards' => [

        'admin' => [
            'driver' => 'session', // Gunakan session untuk guard ini
            'provider' => 'admins', // Provider yang digunakan
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how
    | the users are actually retrieved out of your database or other
    | storage mechanisms used by this application.
    |
    | If you have multiple user tables or models you can configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    */

    'providers' => [

        'admins' => [
            'driver' => 'eloquent', // Gunakan Eloquent sebagai driver
            'model' => App\Models\Admin::class, // Model yang digunakan
        ],

        // Anda juga bisa menambahkan provider lain di sini jika diperlukan
        // 'users' => [
        //     'driver' => 'database',
        //     'model' => App\Models\User::class,
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Here you may set the options for password reset for each of the
    | user providers. The expire time is the number of minutes that
    | the reset token should be considered valid.
    |
    | You may also set the password broker options for each of the
    | user types you have defined.
    |
    */

    'passwords' => [

        'admins' => [
            'provider' => 'admins', // Provider yang digunakan
            'table' => 'password_resets', // Tabel untuk reset password
            'expire' => 60, // Token berlaku selama 60 menit
            'throttle' => 60, // Throttle selama 60 menit
        ],

    ],

];
