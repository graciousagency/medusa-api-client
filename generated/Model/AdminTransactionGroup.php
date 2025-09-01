<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTransactionGroup extends \ArrayObject
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
     * The transaction group's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The transaction group's code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The transaction group's credits.
     *
     * @var float|null
     */
    protected $credits;
    /**
     * The transaction group's debits.
     *
     * @var float|null
     */
    protected $debits;
    /**
     * The transaction group's balance.
     *
     * @var float|null
     */
    protected $balance;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $account;
    /**
     * The transaction group's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The transaction group's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The transaction group's ID.
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
     * The transaction group's code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The transaction group's code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * The transaction group's credits.
     *
     * @return float|null
     */
    public function getCredits(): ?float
    {
        return $this->credits;
    }
    /**
     * The transaction group's credits.
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
     * The transaction group's debits.
     *
     * @return float|null
     */
    public function getDebits(): ?float
    {
        return $this->debits;
    }
    /**
     * The transaction group's debits.
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
     * The transaction group's balance.
     *
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }
    /**
     * The transaction group's balance.
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
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getAccount(): ?iterable
    {
        return $this->account;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $account
     *
     * @return self
     */
    public function setAccount(?iterable $account): self
    {
        $this->initialized['account'] = true;
        $this->account = $account;
        return $this;
    }
    /**
     * The transaction group's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The transaction group's metadata, can hold custom key-value pairs.
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
}