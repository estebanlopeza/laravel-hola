<?php

namespace App\Listeners;

use App\Mail\WelcomeNewClienteMail;
use App\Events\NewClienteHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeNewClienteListener implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  NewClienteHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewClienteHasRegisteredEvent $event)
    {
        sleep(10);

        Mail::to($event->cliente->email)->send(new WelcomeNewClienteMail());
    }
}
