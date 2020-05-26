<?php
/**
 * Created by PhpStorm.
 * User: zed
 * Date: 17-12-10
 * Time: 下午1:22
 */

namespace Dezsidog\Laraliyun\Test;


use Illuminate\Config\Repository;
use Orchestra\Testbench\TestCase;

class BaseTestCase extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        /**
         * @var Repository $config
         */
        $config = $this->app->make('config');

        $config->set('laraliyun', require('src/config.php'));
    }
}