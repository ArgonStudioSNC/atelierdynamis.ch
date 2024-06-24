<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body style="font-size: 18px;font-family: Helvetica;width: 100%;height: 100%;overflow-x: hidden;margin: 0;padding: 0;font-weight: normal;line-height: 1.5;background: rgba(134, 134, 134, 0.07);color: #404040;">
    <div class="grid-container" style="max-width: 600px;padding-right: 1rem;padding-left: 1rem;margin-left: auto;margin-right: auto;">
        <div class="grid-x grid-margin-y" style="display: flex;flex-flow: row wrap;">
            <div class="cell text-center" style="flex: 0 0 auto;width: 100%;text-align: center;margin-top: 1rem;">
                <a href="https://atelierdynamis.ch/" target="_blank" style="text-decoration: none;cursor: pointer;background-color: transparent;">
                    <img src="{{ asset('storage/logo/atelier_dynamis.png') }}" style="max-width: 200px;display: inline-block;vertical-align: middle;height: auto;">
                </a>
            </div>
            <div class="cell" style="flex: 0 0 auto;width: 100%;margin-top: 1rem;">
                <div class="card card--dynamis-yellow" style="display: flex;flex-direction: column;flex-grow: 1;margin-bottom: 1rem;border: none;border-radius: 0 0 1.6rem 1.6rem;background: #fefefe;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1607843137);overflow: hidden;color: #666666;position: relative;z-index: 5;">
@if ($form->service == 'sarah')
    <div class="card-divider align-center" style="justify-content: center;display: flex;flex: 0 1 auto;padding: 1rem;background: #de1883;color: #fefefe;">
@elseif ($form->service == 'anja')
    <div class="card-divider align-center" style="justify-content: center;display: flex;flex: 0 1 auto;padding: 1rem;background: #fab216;color: #fefefe;">
@elseif ($form->service == 'dagmar')
    <div class="card-divider align-center" style="justify-content: center;display: flex;flex: 0 1 auto;padding: 1rem;background: #e64662;color: #fefefe;">
@else
    <div class="card-divider align-center" style="justify-content: center;display: flex;flex: 0 1 auto;padding: 1rem;background: #ffd100;color: #fefefe;">
@endif
                        <div style="font-size: 30px;text-transform: lowercase; text-align: center;">
                            @php
                            foreach (config('mail.dynamis-recipients')[$form->service]['activities'] as $activity){
                                echo __('mailable.activities.' . $activity) . "<br/>";
                            }
                            @endphp
                        </div>
                    </div>
                    <div class="card-section" style="flex: 1 0 auto;padding: 2.2rem 3.3rem;">
                        <p style="margin-bottom: 1rem;">
                            {{ __('mailable.contact-us-confirmation-mail.message') }}
                        </p>
                        <p style="font-style: italic;margin-bottom: 1rem;">{!! $form->message !!}</p>
                        <p style="margin-bottom: 1rem;">
                            {{ __('mailable.contact-us-confirmation-mail.greeting') }}<br>
                            <b style="font-weight: bold;">atelier dynamis</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="cell text-center" style="flex: 0 0 auto;width: 100%;text-align: center;margin-top: 1rem;">
                <a href="https://atelierdynamis.ch/" target="_blank" style="color: #868686;text-decoration: underline;font-size:16px; cursor: pointer;background-color: transparent;">
                    {{ __('mailable.contact-us-confirmation-mail.visit-our-website') }}
                </a>
                <hr style="clear: both;height: 0;margin: 1rem auto;border-top: 0;border-right: 0;border-bottom: 1px solid #868686;border-left: 0;box-sizing: content-box;overflow: visible;">
                <div style="font-size:12px; color: #868686;">
                    {{ __('mailable.contact-us-confirmation-mail.why-you-get-mail') }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
