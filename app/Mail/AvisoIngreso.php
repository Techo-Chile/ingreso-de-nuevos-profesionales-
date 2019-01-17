<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AvisoIngreso extends Mailable
{
    use Queueable, SerializesModels;
    public $url_base;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$url_base)
    {
        $this->data =$data;
        $this->url_base = $url_base;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $tokken = $this->data;
        $base = $this->url_base;
        return $this->view('mail.ingreso')->with(['tokken' =>$tokken,'base'=>$base]);
    }
}
