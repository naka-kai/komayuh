<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendMailmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $tel;
    private $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->name = $inputs['name'];
        $this->email = $inputs['email'];
        $this->tel = $inputs['tel'];
        $this->content = $inputs['content'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('skai.bluesea@gmail.com')
            ->subject('自動送信メール')
            ->view('contacts.mail.mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'tel' => $this->tel,
                'content' => $this->content,
            ]);
    }
}
