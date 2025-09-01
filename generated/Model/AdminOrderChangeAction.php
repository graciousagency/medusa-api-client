<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderChangeAction extends \ArrayObject
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
     * The action's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the order change that the action belongs to.
     *
     * @var string|null
     */
    protected $orderChangeId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $orderChange;
    /**
     * The ID of the order the associated change is for.
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
     * The ID of the associated claim.
     *
     * @var string|null
     */
    protected $claimId;
    /**
     * The ID of the associated exchange.
     *
     * @var string|null
     */
    protected $exchangeId;
    /**
     * The order's details.
     *
     * @var AdminOrder|null
     */
    protected $order;
    /**
     * The name of the table this action applies on.
     *
     * @var string|null
     */
    protected $reference;
    /**
     * The ID of the record in the referenced table.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * The applied action.
     *
     * @var string|null
     */
    protected $action;
    /**
     * The action's details.
     *
     * @var array<string, mixed>|null
     */
    protected $details;
    /**
     * A note that's viewed only by admin users.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * The date the action was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the action was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The action's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The action's ID.
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
     * The ID of the order change that the action belongs to.
     *
     * @return string|null
     */
    public function getOrderChangeId(): ?string
    {
        return $this->orderChangeId;
    }
    /**
     * The ID of the order change that the action belongs to.
     *
     * @param string|null $orderChangeId
     *
     * @return self
     */
    public function setOrderChangeId(?string $orderChangeId): self
    {
        $this->initialized['orderChangeId'] = true;
        $this->orderChangeId = $orderChangeId;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getOrderChange(): ?iterable
    {
        return $this->orderChange;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $orderChange
     *
     * @return self
     */
    public function setOrderChange(?iterable $orderChange): self
    {
        $this->initialized['orderChange'] = true;
        $this->orderChange = $orderChange;
        return $this;
    }
    /**
     * The ID of the order the associated change is for.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order the associated change is for.
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
     * The name of the table this action applies on.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * The name of the table this action applies on.
     *
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * The ID of the record in the referenced table.
     *
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * The ID of the record in the referenced table.
     *
     * @param string|null $referenceId
     *
     * @return self
     */
    public function setReferenceId(?string $referenceId): self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * The applied action.
     *
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * The applied action.
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
     * The action's details.
     *
     * @return array<string, mixed>|null
     */
    public function getDetails(): ?iterable
    {
        return $this->details;
    }
    /**
     * The action's details.
     *
     * @param array<string, mixed>|null $details
     *
     * @return self
     */
    public function setDetails(?iterable $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
    /**
     * A note that's viewed only by admin users.
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * A note that's viewed only by admin users.
     *
     * @param string|null $internalNote
     *
     * @return self
     */
    public function setInternalNote(?string $internalNote): self
    {
        $this->initialized['internalNote'] = true;
        $this->internalNote = $internalNote;
        return $this;
    }
    /**
     * The date the action was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the action was created.
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
     * The date the action was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the action was updated.
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