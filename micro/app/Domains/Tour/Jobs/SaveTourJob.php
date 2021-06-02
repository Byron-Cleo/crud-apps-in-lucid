<?php

namespace App\Domains\Tour\Jobs;

use Lucid\Units\Job;
use App\Data\Models\Tour;

class SaveTourJob extends Job
{
    // private $tour_name;
    // private $location;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    // public function __construct(string $tour_name, string $location)
    // {
    //     //
    //      $this->tour_name = $tour_name;
    //      $this->location = $location;
    // }

    public function __construct(
        private string $tour_name,
        private string $location
    ){}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $attributes = [
            'tour_name' => $this->tour_name,
            'location' => $this->location,
        ];

        return tap(new Tour($attributes))->save();
    }
}
