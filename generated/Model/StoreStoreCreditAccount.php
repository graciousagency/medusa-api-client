<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreStoreCreditAccount extends \ArrayObject
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
     * The customer's details.
     *
     * @var StoreCustomer|null
     */
    protected $customer;
    /**
     * The store credit account's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the customer that the store credit account belongs to.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The store credit account's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The account's credits.
     *
     * @var float|null
     */
    protected $credits;
    /**
     * The account's debits.
     *
     * @var float|null
     */
    protected $debits;
    /**
     * The store credit account's balance.
     *
     * @var float|null
     */
    protected $balance;
    /**
     * The store credit account's transaction groups.
     *
     * @var list<StoreTransactionGroup>|null
     */
    protected $transactionGroups;
    /**
     * The store credit account's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the store credit account was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the store credit account was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The customer's details.
     *
     * @return StoreCustomer|null
     */
    public function getCustomer(): ?StoreCustomer
    {
        return $this->customer;
    }
    /**
     * The customer's details.
     *
     * @param StoreCustomer|null $customer
     *
     * @return self
     */
    public function setCustomer(?StoreCustomer $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * The store credit account's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The store credit account's ID.
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
     * The ID of the customer that the store credit account belongs to.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer that the store credit account belongs to.
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
     * The store credit account's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The store credit account's currency code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * The account's credits.
     *
     * @return float|null
     */
    public function getCredits(): ?float
    {
        return $this->credits;
    }
    /**
     * The account's credits.
     *
     * @param float|null $credits
     *
     * @return self
     */
    public function setCredits(?float $credits): self
    {
        $this->initialized['credits'] = true;
        $this->credits = $credits;
        return $this;
    }
    /**
     * The account's debits.
     *
     * @return float|null
     */
    public function getDebits(): ?float
    {
        return $this->debits;
    }
    /**
     * The account's debits.
     *
     * @param float|null $debits
     *
     * @return self
     */
    public function setDebits(?float $debits): self
    {
        $this->initialized['debits'] = true;
        $this->debits = $debits;
        return $this;
    }
    /**
     * The store credit account's balance.
     *
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }
    /**
     * The store credit account's balance.
     *
     * @param float|null $balance
     *
     * @return self
     */
    public function setBalance(?float $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;
        return $this;
    }
    /**
     * The store credit account's transaction groups.
     *
     * @return list<StoreTransactionGroup>|null
     */
    public function getTransactionGroups(): ?array
    {
        return $this->transactionGroups;
    }
    /**
     * The store credit account's transaction groups.
     *
     * @param list<StoreTransactionGroup>|null $transactionGroups
     *
     * @return self
     */
    public function setTransactionGroups(?array $transactionGroups): self
    {
        $this->initialized['transactionGroups'] = true;
        $this->transactionGroups = $transactionGroups;
        return $this;
    }
    /**
     * The store credit account's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The store credit account's metadata, can hold custom key-value pairs.
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
     * The date the store credit account was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the store credit account was created.
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
     * The date the store credit account was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the store credit account was updated.
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