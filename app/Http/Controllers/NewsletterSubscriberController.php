<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSubscriptionConfirmation;
use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;

class NewsletterSubscriberController extends Controller
{
    public function index()
    {
        return NewsletterSubscriber::latest()->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|distinct',
        ]);

        $newsletterSubscriber = NewsletterSubscriber::create([
            'email' => $request->input('email'),
            'token' => str_random(60),
        ]);

        Mail::to($newsletterSubscriber)->send(new NewsletterSubscriptionConfirmation($newsletterSubscriber));

        return back()->with('message', 'Thanks for subscribing for our newsletter. Now go to your inbox to confirm your email address.');
    }

    public function confirm($token)
    {
        $newsletterSubscriber = NewsletterSubscriber::whereToken($token)->firstOrFail();
        $newsletterSubscriber->verified = true;
        $newsletterSubscriber->token = null;
        $newsletterSubscriber->save();

        return redirect('/')->with('message', 'You are confirmed. Now you can receive our weekly newsletter.');
    }

}
