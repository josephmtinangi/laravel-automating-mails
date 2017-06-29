@component('mail::message')
# Hello

We just need you to confirm your newsletter subscription

@component('mail::button', ['url' => route('newsletter-subscribers.confirm', $newsletterSubscriber->token)])
    Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
