<?php

namespace App\Mail;

use App\Models\ContactUsForm;
use http\Message\Body;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The support ticket instance.
     *
     * @var \App\Models\ContactUsForm
     */
    public $form;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactUsForm $form)
    {
        $this->locale = $form->locale;
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (in_array($this->form->service, array_keys(config('mail.dynamis-recipients')))) {
            $replyTo = [config('mail.dynamis-recipients')[$this->form->service]['email'], config('mail.dynamis-recipients')[$this->form->service]['name']];
        } else {
            $replyTo = ['contact@argonstudio.ch', 'Argon Studio'];
        }

        return $this->to($this->form->email)
            ->replyTo($replyTo[0], $replyTo[1])
            ->subject(__('mailable.contact-us-confirmation-mail.subject'))
            ->view('mailable.contactUsConfimation');
    }
}
