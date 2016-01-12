<?php

namespace DHI\Jobs;

use Mail;
use DHI\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserMailJob extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
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
        $this->data = $this->data[0];
//        $user=$this->data['user'];
        $email = $this->data['email'];
        $name = $this->data['name'] . ' ' . $this->data['lastname'];

//        dd($this->data);
        Mail::send('emails.welcome',['data' => $this->data] , function ($message) use($email,$name)   {
            $message->from('servers@dreamhouseinternational.com', 'Dream House International');
            $message->to($email, $name)->subject('Confirmacion de registro');
        });
    }
}
