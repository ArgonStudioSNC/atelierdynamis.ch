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
        $recipient = 'contact@argonstudio.ch';
        $subject = 'atelier dynamis contact form - something went wrong';
        switch ($this->form->service) {
            case 'cranio':
                $recipient = 'mail@sarah-meier.ch';
                $subject = __('mailable.contact-us-mail.contact-form').' - '.__('mailable.services.cranio').' - '.$this->form->firstName.' '.$this->form->lastName;
                break;
            case 'physio':
                $recipient = 'loic@argonstudio.ch';//'sophie@atelierdynamis.ch';
                $subject = __('mailable.contact-us-mail.contact-form').' - '.__('mailable.services.physio').' - '.$this->form->firstName.' '.$this->form->lastName;
                break;
            case 'courses':
                $recipient = 'sophie@atelierdynamis.ch';
                $subject = __('mailable.contact-us-mail.contact-form').' - '.__('mailable.services.courses').' - '.$this->form->firstName.' '.$this->form->lastName;
                break;
            default:
        }
        return $this->to($recipient)
                    ->subject($subject)
                    ->view('mailable.contactUsMail');
    }
}
