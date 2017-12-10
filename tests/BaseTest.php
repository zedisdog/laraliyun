<?php
/**
 * Created by PhpStorm.
 * User: zed
 * Date: 17-12-10
 * Time: 下午1:32
 */

namespace Dezsidog\Laraliyun\Test;


use Dezsidog\AliyunSDK\Core\DefaultAcsClient;

class BaseTest extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return ['Dezsidog\Laraliyun\ServiceProvider'];
    }

    public function testInstantiation()
    {
        $client = $this->app->make(DefaultAcsClient::class);

        $this->assertInstanceOf(DefaultAcsClient::class,$client);
    }

}