<?php

namespace LocalizedLeague\Event;

interface ListenerProviderInterface
{
    /**
     * Provide event
     *
     * @param ListenerAcceptorInterface $listenerAcceptor
     *
     * @return $this
     */
    public function provideListeners(ListenerAcceptorInterface $listenerAcceptor);
}
