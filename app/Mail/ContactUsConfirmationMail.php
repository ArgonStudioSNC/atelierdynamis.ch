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

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactUsForm $form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->form->email)
                    ->replyTo('sophie.charriere@atelierdynamis.ch', 'Sophie Charriere')
                    ->subject('my subject')
                    ->view('mailable.contactUsConfimation');
    }
}
