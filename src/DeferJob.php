<?php

namespace Rahmanramsi\DeferQueue;

use Illuminate\Queue\Jobs\SyncJob;

class DeferJob extends SyncJob
{
    /**
     * Get the name of the queue the job belongs to.
     *
     * @return string
     */
    public function getQueue()
    {
        return 'defer';
    }
}
