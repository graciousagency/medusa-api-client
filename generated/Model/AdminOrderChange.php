<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderChange extends \ArrayObject
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
     * The order change's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The order change's version. This will be the order's version when the change is applied.
     *
     * @var float|null
     */
    protected $version;
    /**
     * The order change's type.
     *
     * @var string|null
     */
    protected $changeType;
    /**
     * The ID of the order this change applies on.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The ID of the associated return.
     *
     * @var string|null
     */
    protected $returnId;
    /**
     * The ID of the associated exchange.
     *
     * @var string|null
     */
    protected $exchangeId;
    /**
     * The ID of the associated claim.
     *
     * @var string|null
     */
    protected $claimId;
    /**
     * The order's details.
     *
     * @var AdminOrder|null
     */
    protected $order;
    /**
     * The return's details.
     *
     * @var AdminReturn|null
     */
    protected $returnOrder;
    /**
     * The exchange's details.
     *
     * @var AdminExchange|null
     */
    protected $exchange;
    /**
     * The claim's details.
     *
     * @var AdminClaim|null
     */
    protected $claim;
    /**
     * The order change's actions.
     *
     * @var list<AdminOrderChangeAction>|null
     */
    protected $actions;
    /**
     * The order change's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The ID of the user that requested the change.
     *
     * @var string|null
     */
    protected $requestedBy;
    /**
     * The date the order change was requested.
     *
     * @var \DateTime|null
     */
    protected $requestedAt;
    /**
     * The ID of the user that confirmed the order change.
     *
     * @var string|null
     */
    protected $confirmedBy;
    /**
     * The date the order change was confirmed.
     *
     * @var \DateTime|null
     */
    protected $confirmedAt;
    /**
     * The ID of the user that declined the order change.
     *
     * @var string|null
     */
    protected $declinedBy;
    /**
     * The reason the order change was declined.
     *
     * @var string|null
     */
    protected $declinedReason;
    /**
     * The order change's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the order change was declined.
     *
     * @var \DateTime|null
     */
    protected $declinedAt;
    /**
     * The ID of the user that canceled the order change.
     *
     * @var string|null
     */
    protected $canceledBy;
    /**
     * The date the order change was canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * The date the order change was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the order change was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The order change's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The order change's ID.
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
     * The order change's version. This will be the order's version when the change is applied.
     *
     * @return float|null
     */
    public function getVersion(): ?float
    {
        return $this->version;
    }
    /**
     * The order change's version. This will be the order's version when the change is applied.
     *
     * @param float|null $version
     *
     * @return self
     */
    public function setVersion(?float $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * The order change's type.
     *
     * @return string|null
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }
    /**
     * The order change's type.
     *
     * @param string|null $changeType
     *
     * @return self
     */
    public function setChangeType(?string $changeType): self
    {
        $this->initialized['changeType'] = true;
        $this->changeType = $changeType;
        return $this;
    }
    /**
     * The ID of the order this change applies on.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order this change applies on.
     *
     * @param string|null $orderId
     *
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * The ID of the associated return.
     *
     * @return string|null
     */
    public function getReturnId(): ?string
    {
        return $this->returnId;
    }
    /**
     * The ID of the associated return.
     *
     * @param string|null $returnId
     *
     * @return self
     */
    public function setReturnId(?string $returnId): self
    {
        $this->initialized['returnId'] = true;
        $this->returnId = $returnId;
        return $this;
    }
    /**
     * The ID of the associated exchange.
     *
     * @return string|null
     */
    public function getExchangeId(): ?string
    {
        return $this->exchangeId;
    }
    /**
     * The ID of the associated exchange.
     *
     * @param string|null $exchangeId
     *
     * @return self
     */
    public function setExchangeId(?string $exchangeId): self
    {
        $this->initialized['exchangeId'] = true;
        $this->exchangeId = $exchangeId;
        return $this;
    }
    /**
     * The ID of the associated claim.
     *
     * @return string|null
     */
    public function getClaimId(): ?string
    {
        return $this->claimId;
    }
    /**
     * The ID of the associated claim.
     *
     * @param string|null $claimId
     *
     * @return self
     */
    public function setClaimId(?string $claimId): self
    {
        $this->initialized['claimId'] = true;
        $this->claimId = $claimId;
        return $this;
    }
    /**
     * The order's details.
     *
     * @return AdminOrder|null
     */
    public function getOrder(): ?AdminOrder
    {
        return $this->order;
    }
    /**
     * The order's details.
     *
     * @param AdminOrder|null $order
     *
     * @return self
     */
    public function setOrder(?AdminOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * The return's details.
     *
     * @return AdminReturn|null
     */
    public function getReturnOrder(): ?AdminReturn
    {
        return $this->returnOrder;
    }
    /**
     * The return's details.
     *
     * @param AdminReturn|null $returnOrder
     *
     * @return self
     */
    public function setReturnOrder(?AdminReturn $returnOrder): self
    {
        $this->initialized['returnOrder'] = true;
        $this->returnOrder = $returnOrder;
        return $this;
    }
    /**
     * The exchange's details.
     *
     * @return AdminExchange|null
     */
    public function getExchange(): ?AdminExchange
    {
        return $this->exchange;
    }
    /**
     * The exchange's details.
     *
     * @param AdminExchange|null $exchange
     *
     * @return self
     */
    public function setExchange(?AdminExchange $exchange): self
    {
        $this->initialized['exchange'] = true;
        $this->exchange = $exchange;
        return $this;
    }
    /**
     * The claim's details.
     *
     * @return AdminClaim|null
     */
    public function getClaim(): ?AdminClaim
    {
        return $this->claim;
    }
    /**
     * The claim's details.
     *
     * @param AdminClaim|null $claim
     *
     * @return self
     */
    public function setClaim(?AdminClaim $claim): self
    {
        $this->initialized['claim'] = true;
        $this->claim = $claim;
        return $this;
    }
    /**
     * The order change's actions.
     *
     * @return list<AdminOrderChangeAction>|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }
    /**
     * The order change's actions.
     *
     * @param list<AdminOrderChangeAction>|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions): self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
    /**
     * The order change's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The order change's status.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The ID of the user that requested the change.
     *
     * @return string|null
     */
    public function getRequestedBy(): ?string
    {
        return $this->requestedBy;
    }
    /**
     * The ID of the user that requested the change.
     *
     * @param string|null $requestedBy
     *
     * @return self
     */
    public function setRequestedBy(?string $requestedBy): self
    {
        $this->initialized['requestedBy'] = true;
        $this->requestedBy = $requestedBy;
        return $this;
    }
    /**
     * The date the order change was requested.
     *
     * @return \DateTime|null
     */
    public function getRequestedAt(): ?\DateTime
    {
        return $this->requestedAt;
    }
    /**
     * The date the order change was requested.
     *
     * @param \DateTime|null $requestedAt
     *
     * @return self
     */
    public function setRequestedAt(?\DateTime $requestedAt): self
    {
        $this->initialized['requestedAt'] = true;
        $this->requestedAt = $requestedAt;
        return $this;
    }
    /**
     * The ID of the user that confirmed the order change.
     *
     * @return string|null
     */
    public function getConfirmedBy(): ?string
    {
        return $this->confirmedBy;
    }
    /**
     * The ID of the user that confirmed the order change.
     *
     * @param string|null $confirmedBy
     *
     * @return self
     */
    public function setConfirmedBy(?string $confirmedBy): self
    {
        $this->initialized['confirmedBy'] = true;
        $this->confirmedBy = $confirmedBy;
        return $this;
    }
    /**
     * The date the order change was confirmed.
     *
     * @return \DateTime|null
     */
    public function getConfirmedAt(): ?\DateTime
    {
        return $this->confirmedAt;
    }
    /**
     * The date the order change was confirmed.
     *
     * @param \DateTime|null $confirmedAt
     *
     * @return self
     */
    public function setConfirmedAt(?\DateTime $confirmedAt): self
    {
        $this->initialized['confirmedAt'] = true;
        $this->confirmedAt = $confirmedAt;
        return $this;
    }
    /**
     * The ID of the user that declined the order change.
     *
     * @return string|null
     */
    public function getDeclinedBy(): ?string
    {
        return $this->declinedBy;
    }
    /**
     * The ID of the user that declined the order change.
     *
     * @param string|null $declinedBy
     *
     * @return self
     */
    public function setDeclinedBy(?string $declinedBy): self
    {
        $this->initialized['declinedBy'] = true;
        $this->declinedBy = $declinedBy;
        return $this;
    }
    /**
     * The reason the order change was declined.
     *
     * @return string|null
     */
    public function getDeclinedReason(): ?string
    {
        return $this->declinedReason;
    }
    /**
     * The reason the order change was declined.
     *
     * @param string|null $declinedReason
     *
     * @return self
     */
    public function setDeclinedReason(?string $declinedReason): self
    {
        $this->initialized['declinedReason'] = true;
        $this->declinedReason = $declinedReason;
        return $this;
    }
    /**
     * The order change's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The order change's metadata, can hold custom key-value pairs.
     *
     * @param array<string, mixed>|null $metadata
     *
     * @return self
     */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * The date the order change was declined.
     *
     * @return \DateTime|null
     */
    public function getDeclinedAt(): ?\DateTime
    {
        return $this->declinedAt;
    }
    /**
     * The date the order change was declined.
     *
     * @param \DateTime|null $declinedAt
     *
     * @return self
     */
    public function setDeclinedAt(?\DateTime $declinedAt): self
    {
        $this->initialized['declinedAt'] = true;
        $this->declinedAt = $declinedAt;
        return $this;
    }
    /**
     * The ID of the user that canceled the order change.
     *
     * @return string|null
     */
    public function getCanceledBy(): ?string
    {
        return $this->canceledBy;
    }
    /**
     * The ID of the user that canceled the order change.
     *
     * @param string|null $canceledBy
     *
     * @return self
     */
    public function setCanceledBy(?string $canceledBy): self
    {
        $this->initialized['canceledBy'] = true;
        $this->canceledBy = $canceledBy;
        return $this;
    }
    /**
     * The date the order change was canceled.
     *
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }
    /**
     * The date the order change was canceled.
     *
     * @param \DateTime|null $canceledAt
     *
     * @return self
     */
    public function setCanceledAt(?\DateTime $canceledAt): self
    {
        $this->initialized['canceledAt'] = true;
        $this->canceledAt = $canceledAt;
        return $this;
    }
    /**
     * The date the order change was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the order change was created.
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
     * The date the order change was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the order change was updated.
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
}