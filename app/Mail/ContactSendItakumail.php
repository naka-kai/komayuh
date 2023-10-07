<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendItakumail extends Mailable
{
    use Queueable, SerializesModels;

    private $entry_event;
    private $name;
    private $address;
    private $email;
    private $tel;
    private $shop_name;
    private $genre;
    private $new_file_name;
    private $extension;
    private $entry_market;
    private $visited_market;
    private $questions;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->entry_event = $inputs['entry_event'];
        $this->name = $inputs['name'];
        $this->address = $inputs['address'];
        $this->email = $inputs['email'];
        $this->tel = $inputs['tel'];
        $this->shop_name = $inputs['shop_name'];
        $this->genre = $inputs['genre'];
        $this->new_file_name = $inputs['new_file_name'];
        $this->extension = $inputs['extension'];
        $this->entry_market = $inputs['entry_market'];
        $this->visited_market = $inputs['visited_market'];
        $this->questions = $inputs['questions'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd(public_path().'/'.$this->new_file_name);
        return $this
            ->from('skai.bluesea@gmail.com')
            ->subject('自動送信メール')
            ->view('contacts.itaku.mail')
            ->with([
                'entry_event' => $this->entry_event,
                'name' => $this->name,
                'address' => $this->address,
                'email' => $this->email,
                'tel' => $this->tel,
                'shop_name' => $this->shop_name,
                'genre' => $this->genre,
                'entry_market' => $this->entry_market,
                'visited_market' => $this->visited_market,
                'questions' => $this->questions,
            ])
            ->attach(public_path('storage/contact/' . $this->new_file_name));
    }
}
