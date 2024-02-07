<?php

namespace App\Mail;

use App\Models\ContactUsForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The support ticket instance.
     *
     * @var \App\Models\ContactUsForm
     */
    public $form;

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
            $recipient = config('mail.dynamis-recipients')[$this->form->service]['email'];
            $subject = __('mailable.contact-us-mail.contact-form') . ' - ' . $this->form->firstName . ' ' . $this->form->lastName;
        } else {
            $recipient = 'contact@argonstudio.ch';
            $subject = 'atelier dynamis contact form - something went wrong';
        }

        return $this->to($recipient)
            ->replyTo($this->form->email, $this->form->firstName . ' ' . $this->form->lastName)
            ->subject($subject)
            ->view('mailable.contactUsMail');
    }
}
