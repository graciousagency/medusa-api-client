<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCalculatedPriceOriginalPrice extends \ArrayObject
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
     * The ID of the price.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the associated price list.
     *
     * @var string|null
     */
    protected $priceListId;
    /**
     * The price list's type. For example, `sale` or `override`.
     *
     * @var string|null
     */
    protected $priceListType;
    /**
     * The minimum quantity required in the cart for the price to apply.
     *
     * @var float|null
     */
    protected $minQuantity;
    /**
     * The maximum quantity required in the cart for the price to apply.
     *
     * @var float|null
     */
    protected $maxQuantity;
    /**
     * The ID of the price.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The ID of the price.
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
     * The ID of the associated price list.
     *
     * @return string|null
     */
    public function getPriceListId(): ?string
    {
        return $this->priceListId;
    }
    /**
     * The ID of the associated price list.
     *
     * @param string|null $priceListId
     *
     * @return self
     */
    public function setPriceListId(?string $priceListId): self
    {
        $this->initialized['priceListId'] = true;
        $this->priceListId = $priceListId;
        return $this;
    }
    /**
     * The price list's type. For example, `sale` or `override`.
     *
     * @return string|null
     */
    public function getPriceListType(): ?string
    {
        return $this->priceListType;
    }
    /**
     * The price list's type. For example, `sale` or `override`.
     *
     * @param string|null $priceListType
     *
     * @return self
     */
    public function setPriceListType(?string $priceListType): self
    {
        $this->initialized['priceListType'] = true;
        $this->priceListType = $priceListType;
        return $this;
    }
    /**
     * The minimum quantity required in the cart for the price to apply.
     *
     * @return float|null
     */
    public function getMinQuantity(): ?float
    {
        return $this->minQuantity;
    }
    /**
     * The minimum quantity required in the cart for the price to apply.
     *
     * @param float|null $minQuantity
     *
     * @return self
     */
    public function setMinQuantity(?float $minQuantity): self
    {
        $this->initialized['minQuantity'] = true;
        $this->minQuantity = $minQuantity;
        return $this;
    }
    /**
     * The maximum quantity required in the cart for the price to apply.
     *
     * @return float|null
     */
    public function getMaxQuantity(): ?float
    {
        return $this->maxQuantity;
    }
    /**
     * The maximum quantity required in the cart for the price to apply.
     *
     * @param float|null $maxQuantity
     *
     * @return self
     */
    public function setMaxQuantity(?float $maxQuantity): self
    {
        $this->initialized['maxQuantity'] = true;
        $this->maxQuantity = $maxQuantity;
        return $this;
    }
}