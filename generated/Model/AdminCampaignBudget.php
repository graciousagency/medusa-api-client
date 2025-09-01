<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaignBudget extends \ArrayObject
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
     * The budget's type. `spend` means the limit is set on the total amount discounted by the campaign's promotions; `usage` means the limit is set on the total number of times the campaign's promotions can be used.
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
     * How much of the budget has been used. If the limit is `spend`, this property holds the total amount discounted so far. If the limit is `usage`, it holds the number of times the campaign's promotions have been used so far.
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
     * The budget's type. `spend` means the limit is set on the total amount discounted by the campaign's promotions; `usage` means the limit is set on the total number of times the campaign's promotions can be used.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The budget's type. `spend` means the limit is set on the total amount discounted by the campaign's promotions; `usage` means the limit is set on the total number of times the campaign's promotions can be used.
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
     * How much of the budget has been used. If the limit is `spend`, this property holds the total amount discounted so far. If the limit is `usage`, it holds the number of times the campaign's promotions have been used so far.
     *
     * @return float|null
     */
    public function getUsed(): ?float
    {
        return $this->used;
    }
    /**
     * How much of the budget has been used. If the limit is `spend`, this property holds the total amount discounted so far. If the limit is `usage`, it holds the number of times the campaign's promotions have been used so far.
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