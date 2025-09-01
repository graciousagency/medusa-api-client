<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCurrency extends \ArrayObject
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
     * The currency's code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The currency's symbol.
     *
     * @var string|null
     */
    protected $symbol;
    /**
     * The currency's symbol native.
     *
     * @var string|null
     */
    protected $symbolNative;
    /**
     * The currency's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The currency's decimal digits.
     *
     * @var float|null
     */
    protected $decimalDigits;
    /**
     * The currency's rounding.
     *
     * @var float|null
     */
    protected $rounding;
    /**
     * The date the currency was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the currency was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the currency was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The currency's code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The currency's code.
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
     * The currency's symbol.
     *
     * @return string|null
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }
    /**
     * The currency's symbol.
     *
     * @param string|null $symbol
     *
     * @return self
     */
    public function setSymbol(?string $symbol): self
    {
        $this->initialized['symbol'] = true;
        $this->symbol = $symbol;
        return $this;
    }
    /**
     * The currency's symbol native.
     *
     * @return string|null
     */
    public function getSymbolNative(): ?string
    {
        return $this->symbolNative;
    }
    /**
     * The currency's symbol native.
     *
     * @param string|null $symbolNative
     *
     * @return self
     */
    public function setSymbolNative(?string $symbolNative): self
    {
        $this->initialized['symbolNative'] = true;
        $this->symbolNative = $symbolNative;
        return $this;
    }
    /**
     * The currency's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The currency's name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The currency's decimal digits.
     *
     * @return float|null
     */
    public function getDecimalDigits(): ?float
    {
        return $this->decimalDigits;
    }
    /**
     * The currency's decimal digits.
     *
     * @param float|null $decimalDigits
     *
     * @return self
     */
    public function setDecimalDigits(?float $decimalDigits): self
    {
        $this->initialized['decimalDigits'] = true;
        $this->decimalDigits = $decimalDigits;
        return $this;
    }
    /**
     * The currency's rounding.
     *
     * @return float|null
     */
    public function getRounding(): ?float
    {
        return $this->rounding;
    }
    /**
     * The currency's rounding.
     *
     * @param float|null $rounding
     *
     * @return self
     */
    public function setRounding(?float $rounding): self
    {
        $this->initialized['rounding'] = true;
        $this->rounding = $rounding;
        return $this;
    }
    /**
     * The date the currency was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the currency was created.
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
     * The date the currency was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the currency was updated.
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
     * The date the currency was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the currency was deleted.
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