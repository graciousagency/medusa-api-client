<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreatePricePreference extends \ArrayObject
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
     * The name of the attribute the price preference applies on.
     *
     * @var string|null
     */
    protected $attribute;
    /**
     * The attribute's value.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Whether the price is tax inclusive if the value of the specified attribute matches the specified value.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The name of the attribute the price preference applies on.
     *
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * The name of the attribute the price preference applies on.
     *
     * @param string|null $attribute
     *
     * @return self
     */
    public function setAttribute(?string $attribute): self
    {
        $this->initialized['attribute'] = true;
        $this->attribute = $attribute;
        return $this;
    }
    /**
     * The attribute's value.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * The attribute's value.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Whether the price is tax inclusive if the value of the specified attribute matches the specified value.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * Whether the price is tax inclusive if the value of the specified attribute matches the specified value.
     *
     * @param bool|null $isTaxInclusive
     *
     * @return self
     */
    public function setIsTaxInclusive(?bool $isTaxInclusive): self
    {
        $this->initialized['isTaxInclusive'] = true;
        $this->isTaxInclusive = $isTaxInclusive;
        return $this;
    }
}