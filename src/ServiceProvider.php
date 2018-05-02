<?php
/**
 * Created by PhpStorm.
 * User: zed
 * Date: 17-12-10
 * Time: 下午12:58
 */

namespace Dezsidog\Laraliyun;


use Dezsidog\AliyunSDK\Core\ClientFactory;
use Dezsidog\AliyunSDK\Core\Config;
use Dezsidog\AliyunSDK\Core\DefaultAcsClient;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->singleton(DefaultAcsClient::class, function ($app) {
            Config::load();
            return ClientFactory::getClient(config('laraliyun'));
        });
    }

    public function boot()
    {
        if ($this->app instanceof Application) {
            $this->publishes([
                __DIR__.'/config.php' => config_path('laraliyun.php'),
            ]);
        }

        $this->mergeConfigFrom(__DIR__.'/config.php', 'laraliyun');
    }
}