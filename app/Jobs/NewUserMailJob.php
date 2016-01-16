<?php

namespace DHI\Jobs;

use Mail;
use DHI\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class NewUserMailJob extends Job implements SelfHandling
{
    /**                                                                                                            O
     * Create a new job instance.
     *
     */
    protected $data = array();

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        $this->data = $this->data[0];
//        $user=$this->data['user'];
        $email = $this->data['email'];
        $name = $this->data['name'] . ' ' . $this->data['lastname'];

//        dd($this->data);
        Mail::send('emails.welcome', ['data' => $this->data], function ($message) use ($email, $name) {
            $message->from('servers@dreamhouseinternational.com', 'Dream House International');
            $message->to($email, $name)->subject('Confirmacion de registro');
        });
    }
}
