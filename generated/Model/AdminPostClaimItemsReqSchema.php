<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostClaimItemsReqSchema extends \ArrayObject
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
     * The item's details.
     *
     * @var list<AdminPostClaimItemsReqSchemaItemsItem>|null
     */
    protected $items;
    /**
     * The item's details.
     *
     * @return list<AdminPostClaimItemsReqSchemaItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The item's details.
     *
     * @param list<AdminPostClaimItemsReqSchemaItemsItem>|null $items
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