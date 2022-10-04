<?php

namespace App\Notifications;

use App\TuChance\Models\Bidder;

class BidderWelcome extends BaseNotification
{
    /**
     * The folder the messages for this notifications are stored
     * @var string
     */
    protected $translations = 'bidder/welcome';

    /**
     * Bidder created
     * @var \App\TuChance\Models\Bidder
     */
    protected $bidder;

    /**
     * Create a new event instance.
     * @param  \App\TuChance\Models\Bidder $bidder
     * @return void
     */
    public function __construct(Bidder $bidder)
    {
        $this->bidder = $bidder;
    }
}
