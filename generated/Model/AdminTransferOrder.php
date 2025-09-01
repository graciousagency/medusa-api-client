<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTransferOrder extends \ArrayObject
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
     * The ID of the customer to transfer the order to.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The description of the order transfer, which can be shown to the customer receiving the order transfer request.
     *
     * @var string|null
     */
    protected $description;
    /**
     * An internal note viewable only by admin users.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * The ID of the customer to transfer the order to.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer to transfer the order to.
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The description of the order transfer, which can be shown to the customer receiving the order transfer request.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The description of the order transfer, which can be shown to the customer receiving the order transfer request.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * An internal note viewable only by admin users.
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * An internal note viewable only by admin users.
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
}