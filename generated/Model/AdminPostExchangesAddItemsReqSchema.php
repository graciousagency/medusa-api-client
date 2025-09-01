<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostExchangesAddItemsReqSchema extends \ArrayObject
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
     * The details of outbound items.
     *
     * @var list<AdminPostExchangesAddItemsReqSchemaItemsItem>|null
     */
    protected $items;
    /**
     * The details of outbound items.
     *
     * @return list<AdminPostExchangesAddItemsReqSchemaItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The details of outbound items.
     *
     * @param list<AdminPostExchangesAddItemsReqSchemaItemsItem>|null $items
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