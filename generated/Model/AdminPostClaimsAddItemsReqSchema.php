<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostClaimsAddItemsReqSchema extends \ArrayObject
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
     * The outbound item's details.
     *
     * @var list<AdminPostClaimsAddItemsReqSchemaItemsItem>|null
     */
    protected $items;
    /**
     * The outbound item's details.
     *
     * @return list<AdminPostClaimsAddItemsReqSchemaItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The outbound item's details.
     *
     * @param list<AdminPostClaimsAddItemsReqSchemaItemsItem>|null $items
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