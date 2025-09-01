<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminRemoveDraftOrderPromotions extends \ArrayObject
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
     * The promotion codes to remove from the draft order.
     *
     * @var list<string>|null
     */
    protected $promoCodes;
    /**
     * The promotion codes to remove from the draft order.
     *
     * @return list<string>|null
     */
    public function getPromoCodes(): ?array
    {
        return $this->promoCodes;
    }
    /**
     * The promotion codes to remove from the draft order.
     *
     * @param list<string>|null $promoCodes
     *
     * @return self
     */
    public function setPromoCodes(?array $promoCodes): self
    {
        $this->initialized['promoCodes'] = true;
        $this->promoCodes = $promoCodes;
        return $this;
    }
}