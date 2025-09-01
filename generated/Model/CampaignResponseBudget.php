<?php

namespace Gracious\MedusaApiClientBundle\Model;

class CampaignResponseBudget extends \ArrayObject
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
     * The budget's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * The budget's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The budget's limit.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The budget's used.
     *
     * @var float|null
     */
    protected $used;
    /**
     * The budget's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The budget's ID.
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
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
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
     * The budget's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The budget's currency code.
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
     * The budget's limit.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The budget's limit.
     *
     * @param float|null $limit
     *
     * @return self
     */
    public function setLimit(?float $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * The budget's used.
     *
     * @return float|null
     */
    public function getUsed(): ?float
    {
        return $this->used;
    }
    /**
     * The budget's used.
     *
     * @param float|null $used
     *
     * @return self
     */
    public function setUsed(?float $used): self
    {
        $this->initialized['used'] = true;
        $this->used = $used;
        return $this;
    }
}