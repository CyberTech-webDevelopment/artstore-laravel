<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\OrderNotification;
use App\Models\Users;

class SendOrderNotification
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
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        return $event;
//        $sending_user = Users::find($event->sending_user_id);
//        $sending_user->notify(new OrderNotification($event->order,$event->sending_user_id));
//        Notification::send($sending_user,new OrderNotification($event->order,$event->sending_user_id));
    }
}
