<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Mail;

class SendPostCreatedNotification
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

    public function handle(PostCreated $event)
    {
        Mail::to($event->post->owner->email)->send(
            new \App\Mail\PostCreated($event->post)
        );
    }
}
