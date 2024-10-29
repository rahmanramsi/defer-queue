<?php

namespace Rahmanramsi\DeferQueue;

use Illuminate\Queue\Connectors\ConnectorInterface;

class DeferConnector implements ConnectorInterface
{
    /**
     * Establish a queue connection.
     *
     * @param  array  $config
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
        return new DeferQueue();
    }
}
