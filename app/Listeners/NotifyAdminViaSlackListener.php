<?php

namespace App\Listeners;

use App\Events\NewClienteHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdminViaSlackListener
{

    /**
     * Handle the event.
     *
     * @param  NewClienteHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewClienteHasRegisteredEvent $event)
    {
        dump('Avisar al admin via slack');
    }
}
