<?php

namespace App\Domains\Tour\Jobs;

use Lucid\Units\Job;
use App\Data\Models\Tour;

class UpdateTourDetailsJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $id, string $tour_name, string $location)
    {
        $this->id = $id;
        $this->tour_name = $tour_name;
        $this->location = $location;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): bool
    {
        $tour = Tour::find($this->id);

        $tour->fill([
            'tour_name' => $this->tour_name,
            'location' => $this->location,
        ]);

        return $tour->save();
    }

}
