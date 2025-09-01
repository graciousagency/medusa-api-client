<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCreateReturnShipping extends \ArrayObject
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
     * The ID of the shipping option to use.
     *
     * @var string|null
     */
    protected $optionId;
    /**
     * The shipping's price.
     *
     * @var float|null
     */
    protected $price;
    /**
     * The ID of the shipping option to use.
     *
     * @return string|null
     */
    public function getOptionId(): ?string
    {
        return $this->optionId;
    }
    /**
     * The ID of the shipping option to use.
     *
     * @param string|null $optionId
     *
     * @return self
     */
    public function setOptionId(?string $optionId): self
    {
        $this->initialized['optionId'] = true;
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * The shipping's price.
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * The shipping's price.
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}