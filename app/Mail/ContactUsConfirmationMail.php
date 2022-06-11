<?php

namespace App\Mail;

use App\Models\ContactUsForm;
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
        $replyTo = ['contact@argonstudio.ch', 'Argon Studio'];
        switch ($this->form->service) {
            case 'cranio':
                $replyTo = ['mail@sarah-meier.ch', 'Sarah Meier'];
                break;
            case 'physio':
                $replyTo = ['sophie.charriere@atelierdynamis.ch', 'Sophie Charrière'];
                break;
            case 'courses':
                $replyTo = ['sophie.charriere@atelierdynamis.ch', 'Sophie Charrière'];
                break;
            default:
        }
        return $this->to($this->form->email)
                    ->replyTo($replyTo[0], $replyTo[1])
                    ->subject(__('mailable.contact-us-confirmation-mail.subject'))
                    ->view('mailable.contactUsConfimation');
    }
}
