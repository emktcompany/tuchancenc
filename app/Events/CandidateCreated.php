<?php

namespace App\Events;

use App\TuChance\Models\Candidate;
use Illuminate\Queue\SerializesModels;

class CandidateCreated
{
    use SerializesModels;

    /**
     * Candidate created
     * @var \App\TuChance\Models\Candidate
     */
    protected $candidate;

    /**
     * Create a new event instance.
     * @param  \App\TuChance\Models\Candidate $candidate
     * @return void
     */
    public function __construct(Candidate $candidate)
    {
        $this->candidate = $candidate;
    }

    /**
     * Get the candidate
     * @return \App\TuChance\Models\Candidate
     */
    public function getCandidate()
    {
        return $this->candidate;
    }
}
