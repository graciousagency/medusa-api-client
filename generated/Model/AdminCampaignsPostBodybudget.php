<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaignsPostBodybudget extends \ArrayObject
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
     * The budget's type. This can't be edited later. Use `spend` to set a limit on the total amount discounted by the campaign's promotions. Use `usage` to set a limit on the total number of times the campaign's promotions can be used.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The campaign budget's limit.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The campaign budget's currency code. This can't be edited later.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The budget's type. This can't be edited later. Use `spend` to set a limit on the total amount discounted by the campaign's promotions. Use `usage` to set a limit on the total number of times the campaign's promotions can be used.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The budget's type. This can't be edited later. Use `spend` to set a limit on the total amount discounted by the campaign's promotions. Use `usage` to set a limit on the total number of times the campaign's promotions can be used.
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
     * The campaign budget's limit.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The campaign budget's limit.
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
     * The campaign budget's currency code. This can't be edited later.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The campaign budget's currency code. This can't be edited later.
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
}