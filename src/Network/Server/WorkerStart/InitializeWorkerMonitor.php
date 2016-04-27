<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/26
 * Time: 下午2:08
 */

namespace Zan\Framework\Network\Server\WorkerStart;

use Zan\Framework\Contract\Network\Bootable;
use Zan\Framework\Foundation\Core\Config;
use Zan\Framework\Network\Monitor\Worker;

class InitializeWorkerMonitor implements Bootable
{
    public function bootstrap($server)
    {
        $config = Config::get('server.monitor');
        Worker::getInstance()->init($server,$config);
    }

}