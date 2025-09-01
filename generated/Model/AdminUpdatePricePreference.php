<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdatePricePreference extends \ArrayObject
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
     * The price preference's attribute.
     *
     * @var string|null
     */
    protected $attribute;
    /**
     * The price preference's value.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Whether prices are tax inclusive for this price preference.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The price preference's attribute.
     *
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * The price preference's attribute.
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
     * The price preference's value.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * The price preference's value.
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
     * Whether prices are tax inclusive for this price preference.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * Whether prices are tax inclusive for this price preference.
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