<?php

namespace App\Domains\Tour\Jobs;

use Lucid\Units\Job;
use App\Data\Models\Tour;

class GetTourDetailsJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $id)
    {
        //
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $tour = Tour::find($this->id);
        return $tour;
    }
}
