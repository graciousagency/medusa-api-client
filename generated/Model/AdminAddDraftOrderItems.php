<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminAddDraftOrderItems extends \ArrayObject
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
     * The items to add to the draft order.
     *
     * @var list<AdminAddDraftOrderItemsItemsItem>|null
     */
    protected $items;
    /**
     * The items to add to the draft order.
     *
     * @return list<AdminAddDraftOrderItemsItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The items to add to the draft order.
     *
     * @param list<AdminAddDraftOrderItemsItemsItem>|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}