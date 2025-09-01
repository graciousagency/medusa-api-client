<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostExchangesReturnRequestItemsReqSchema extends \ArrayObject
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
     * The details of the inbound (return) items.
     *
     * @var list<AdminPostExchangesReturnRequestItemsReqSchemaItemsItem>|null
     */
    protected $items;
    /**
     * The details of the inbound (return) items.
     *
     * @return list<AdminPostExchangesReturnRequestItemsReqSchemaItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The details of the inbound (return) items.
     *
     * @param list<AdminPostExchangesReturnRequestItemsReqSchemaItemsItem>|null $items
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