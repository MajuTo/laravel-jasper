<?php

use MajuTo\LaravelJasper\Jasper;

if (!function_exists('jasper')) {
    /**
     * @param string $config
     * @return Jasper
     * @throws Exception
     */
    function jasper($config = 'default')
    {
        if( ! file_exists(config_path('jasper.php')) ) {
            throw new Exception('jasper.php config file not found');
        }

        if ($config === 'default')
            $config = config('jasper.default');

        $config = config('jasper.' . $config);

        return app('jasper', $config);
    }
}