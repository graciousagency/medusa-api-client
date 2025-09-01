<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodylabelsItem extends \ArrayObject
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
     * The label's tracking number.
     *
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * The label's tracking url.
     *
     * @var string|null
     */
    protected $trackingUrl;
    /**
     * The label's url.
     *
     * @var string|null
     */
    protected $labelUrl;
    /**
     * The label's tracking number.
     *
     * @return string|null
     */
    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }
    /**
     * The label's tracking number.
     *
     * @param string|null $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * The label's tracking url.
     *
     * @return string|null
     */
    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }
    /**
     * The label's tracking url.
     *
     * @param string|null $trackingUrl
     *
     * @return self
     */
    public function setTrackingUrl(?string $trackingUrl): self
    {
        $this->initialized['trackingUrl'] = true;
        $this->trackingUrl = $trackingUrl;
        return $this;
    }
    /**
     * The label's url.
     *
     * @return string|null
     */
    public function getLabelUrl(): ?string
    {
        return $this->labelUrl;
    }
    /**
     * The label's url.
     *
     * @param string|null $labelUrl
     *
     * @return self
     */
    public function setLabelUrl(?string $labelUrl): self
    {
        $this->initialized['labelUrl'] = true;
        $this->labelUrl = $labelUrl;
        return $this;
    }
}