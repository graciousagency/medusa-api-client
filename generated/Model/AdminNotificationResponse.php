<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminNotificationResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The notification's details.
     *
     * @var AdminNotification|null
     */
    protected $notification;
    /**
     * The notification's details.
     *
     * @return AdminNotification|null
     */
    public function getNotification(): ?AdminNotification
    {
        return $this->notification;
    }
    /**
     * The notification's details.
     *
     * @param AdminNotification|null $notification
     *
     * @return self
     */
    public function setNotification(?AdminNotification $notification): self
    {
        $this->initialized['notification'] = true;
        $this->notification = $notification;
        return $this;
    }
}