<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostOrderEditsAddItemsReqSchema extends \ArrayObject
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
     * The details of items to be edited.
     *
     * @var list<AdminPostOrderEditsAddItemsReqSchemaItemsItem>|null
     */
    protected $items;
    /**
     * The details of items to be edited.
     *
     * @return list<AdminPostOrderEditsAddItemsReqSchemaItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The details of items to be edited.
     *
     * @param list<AdminPostOrderEditsAddItemsReqSchemaItemsItem>|null $items
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