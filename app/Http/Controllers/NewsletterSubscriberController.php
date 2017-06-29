<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;

class NewsletterSubscriberController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email|distinct',
    	]);

    	NewsletterSubscriber::create($request->only('email'));

    	return back()->with('message', 'Thanks for subscribing for our newsletter. Now go to your inbox to confirm your email address.');
    }
}
