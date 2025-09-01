<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostReturnsConfirmRequestReqSchema extends \ArrayObject
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
     * Whether to send the customer a notification about the confirmation.
     *
     * @var bool|null
     */
    protected $noNotification;
    /**
     * Whether to send the customer a notification about the confirmation.
     *
     * @return bool|null
     */
    public function getNoNotification(): ?bool
    {
        return $this->noNotification;
    }
    /**
     * Whether to send the customer a notification about the confirmation.
     *
     * @param bool|null $noNotification
     *
     * @return self
     */
    public function setNoNotification(?bool $noNotification): self
    {
        $this->initialized['noNotification'] = true;
        $this->noNotification = $noNotification;
        return $this;
    }
}