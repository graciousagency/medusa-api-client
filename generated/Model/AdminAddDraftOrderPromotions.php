<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminAddDraftOrderPromotions extends \ArrayObject
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
     * The list promotion codes to add to the draft order.
     *
     * @var list<string>|null
     */
    protected $promoCodes;
    /**
     * The list promotion codes to add to the draft order.
     *
     * @return list<string>|null
     */
    public function getPromoCodes(): ?array
    {
        return $this->promoCodes;
    }
    /**
     * The list promotion codes to add to the draft order.
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