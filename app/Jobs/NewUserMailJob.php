<?php

namespace DHI\Jobs;

use DHI\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class NewUserMailJob extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
