<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostReturnsRequestItemsReqSchema extends \ArrayObject
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
     * The items' details.
     *
     * @var list<AdminPostReturnsRequestItemsReqSchemaItemsItem>|null
     */
    protected $items;
    /**
     * The items' details.
     *
     * @return list<AdminPostReturnsRequestItemsReqSchemaItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The items' details.
     *
     * @param list<AdminPostReturnsRequestItemsReqSchemaItemsItem>|null $items
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