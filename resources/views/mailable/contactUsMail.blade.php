<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <div>{{ __('mailable.contact-us-mail.new-message') }}</div>
    <div style="margin-top: 1rem;">
        <div>{{ __('mailable.first-name') }}: {!! $form->firstName !!}</div>
        <div>{{ __('mailable.last-name') }}: {!! $form->lastName !!}</div>
        <div>{{ __('mailable.phone') }}: {!! $form->phone !!}</div>
        <div>{{ __('mailable.email') }}: <a href="mailto:{!! $form->email !!}">{!! $form->email !!}</a></div>
    </div>
    <div style="font-style: italic; margin-top: 1rem;">{!! $form->message !!}</div>
</body>
</html>
