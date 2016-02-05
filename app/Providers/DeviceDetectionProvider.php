<?php namespace App\Providers;

use Mobile_Detect;

class DeviceDetectionProvider extends ServiceProvider
{
    public function register()
    {
        $this->container['device'] = function () {
            return new Mobile_Detect;
        };
    }
}