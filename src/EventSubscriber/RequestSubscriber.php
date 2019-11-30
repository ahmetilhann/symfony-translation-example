<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class RequestSubscriber implements EventSubscriberInterface
{
    public function onRequestEvent(RequestEvent $event)
    {
        $locale = $event->getRequest()->headers->get('Accept-Language', 'tr');
        $event->getRequest()->setLocale($locale);
    }

    public static function getSubscribedEvents()
    {
        return [
            RequestEvent::class => ['onRequestEvent', 20],
        ];
    }
}
