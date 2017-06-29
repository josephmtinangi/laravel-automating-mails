<?php

namespace App\Listeners;

use App\Events\NewsletterPublished;
use App\Mail\Newsletter;
use App\Models\NewsletterSubscriber;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendNewsletterToSubscribers
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
     * @param  NewsletterPublished $event
     * @return void
     */
    public function handle(NewsletterPublished $event)
    {
        $newsletter = $event->newsletter;
        $newsletterSubscribers = NewsletterSubscriber::get();
        Mail::to($newsletterSubscribers)
            ->send(new Newsletter($newsletter));
    }
}
