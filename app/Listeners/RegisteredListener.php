<?php

namespace App\Listeners;

use App\Notifications\EmailVerificationNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisteredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 当事件被触发时，对应该事件的监听器的 handle() 方法就会被调用
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // 获取到刚刚注册的用户
        $user = $event->user;
        // 调用 notify 发送通知
        $user->notify(new EmailVerificationNotification());
    }
}
