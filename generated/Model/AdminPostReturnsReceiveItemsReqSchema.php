<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostReturnsReceiveItemsReqSchema extends \ArrayObject
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
     * The items details.
     *
     * @var list<AdminPostReturnsReceiveItemsReqSchemaItemsItem>|null
     */
    protected $items;
    /**
     * The items details.
     *
     * @return list<AdminPostReturnsReceiveItemsReqSchemaItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The items details.
     *
     * @param list<AdminPostReturnsReceiveItemsReqSchemaItemsItem>|null $items
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