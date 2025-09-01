<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodyitemsItem extends \ArrayObject
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
     * The item's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The item's quantity to ship.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The item's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The item's ID.
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
     * The item's quantity to ship.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The item's quantity to ship.
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}