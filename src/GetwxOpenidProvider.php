<?php

namespace Yuxiaoyang\GetwxOpenid;

use Illuminate\Support\ServiceProvider;

class GetwxOpenidProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('getwxopenid',function(){
            return new Getwxopenid();
        });//app('getwxopenid')
    }
}
