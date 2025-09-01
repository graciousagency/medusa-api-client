<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFulfillmentLabel extends \ArrayObject
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
     * The label's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The label's tracking number.
     *
     * @var string|null
     */
    protected $trackingNumber;
    /**
     * The label's tracking URL.
     *
     * @var string|null
     */
    protected $trackingUrl;
    /**
     * The label's URL.
     *
     * @var string|null
     */
    protected $labelUrl;
    /**
     * The ID of the fulfillment the label is associated with.
     *
     * @var string|null
     */
    protected $fulfillmentId;
    /**
     * The date the label was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the label was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the label was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The label's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The label's ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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
     * The label's tracking URL.
     *
     * @return string|null
     */
    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }
    /**
     * The label's tracking URL.
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
     * The label's URL.
     *
     * @return string|null
     */
    public function getLabelUrl(): ?string
    {
        return $this->labelUrl;
    }
    /**
     * The label's URL.
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
    /**
     * The ID of the fulfillment the label is associated with.
     *
     * @return string|null
     */
    public function getFulfillmentId(): ?string
    {
        return $this->fulfillmentId;
    }
    /**
     * The ID of the fulfillment the label is associated with.
     *
     * @param string|null $fulfillmentId
     *
     * @return self
     */
    public function setFulfillmentId(?string $fulfillmentId): self
    {
        $this->initialized['fulfillmentId'] = true;
        $this->fulfillmentId = $fulfillmentId;
        return $this;
    }
    /**
     * The date the label was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the label was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The date the label was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the label was updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The date the label was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the label was deleted.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}