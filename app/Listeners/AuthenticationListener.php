<?php

namespace App\Listeners;

use App\Events\AuthenticationSuccess;
use App\Notifications\NotifyAuthenticationSuccess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class AuthenticationListener
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
        Log::info('Authentication listener');
        // Log::info($event);
        $user = "Simple user mail";
        Notification::send($user, new NotifyAuthenticationSuccess($event));
    }
}
