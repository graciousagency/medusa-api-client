<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTransaction extends \ArrayObject
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
     * The transaction's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the store credit account that the transaction belongs to.
     *
     * @var string|null
     */
    protected $accountId;
    /**
     * The ID of the transaction group that the transaction belongs to.
     *
     * @var string|null
     */
    protected $transactionGroupId;
    /**
     * The transaction's type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The transaction's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The store credit account's details.
     *
     * @var AdminStoreCreditAccount|null
     */
    protected $account;
    /**
     * The transaction's note.
     *
     * @var string|null
     */
    protected $note;
    /**
     * The transaction's reference.
     *
     * @var string|null
     */
    protected $reference;
    /**
     * The transaction's reference ID.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * The transaction's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the transaction was created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the transaction was updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The transaction's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The transaction's ID.
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
     * The ID of the store credit account that the transaction belongs to.
     *
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * The ID of the store credit account that the transaction belongs to.
     *
     * @param string|null $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * The ID of the transaction group that the transaction belongs to.
     *
     * @return string|null
     */
    public function getTransactionGroupId(): ?string
    {
        return $this->transactionGroupId;
    }
    /**
     * The ID of the transaction group that the transaction belongs to.
     *
     * @param string|null $transactionGroupId
     *
     * @return self
     */
    public function setTransactionGroupId(?string $transactionGroupId): self
    {
        $this->initialized['transactionGroupId'] = true;
        $this->transactionGroupId = $transactionGroupId;
        return $this;
    }
    /**
     * The transaction's type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The transaction's type.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The transaction's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The transaction's amount.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * The store credit account's details.
     *
     * @return AdminStoreCreditAccount|null
     */
    public function getAccount(): ?AdminStoreCreditAccount
    {
        return $this->account;
    }
    /**
     * The store credit account's details.
     *
     * @param AdminStoreCreditAccount|null $account
     *
     * @return self
     */
    public function setAccount(?AdminStoreCreditAccount $account): self
    {
        $this->initialized['account'] = true;
        $this->account = $account;
        return $this;
    }
    /**
     * The transaction's note.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * The transaction's note.
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * The transaction's reference.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * The transaction's reference.
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
     * The transaction's reference ID.
     *
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * The transaction's reference ID.
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
     * The transaction's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The transaction's metadata, can hold custom key-value pairs.
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
     * The date the transaction was created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the transaction was created at.
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
     * The date the transaction was updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the transaction was updated at.
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