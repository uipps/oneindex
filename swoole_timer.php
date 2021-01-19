<?php
//定时更新oneindex数据
Swoole\Timer::tick(600000, function (int $timer_id) {
    Swoole\Coroutine\System::exec('php /usr/share/nginx/oneindex/0/one.php cache:refresh');
    echo 'ok';
});
