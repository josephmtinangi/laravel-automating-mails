<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSubscriptionConfirmation;
use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;

class NewsletterSubscriberController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|distinct',
        ]);

        $newsletterSubscriber = NewsletterSubscriber::create($request->only('email'));

        Mail::to($newsletterSubscriber)->send(new NewsletterSubscriptionConfirmation());

        return back()->with('message', 'Thanks for subscribing for our newsletter. Now go to your inbox to confirm your email address.');
    }
}
