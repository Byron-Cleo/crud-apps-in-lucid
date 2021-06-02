<?php

namespace App\Domains\Tour\Jobs;

use Lucid\Units\Job;
use App\Data\Models\Tour;

class ListToursJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
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
        $tours = Tour::all()->sortByDesc('id');
        return $tours;
    }
}
