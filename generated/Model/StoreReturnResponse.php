<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreReturnResponse extends \ArrayObject
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
     * The return's details.
     *
     * @var StoreReturn|null
     */
    protected $return;
    /**
     * The return's details.
     *
     * @return StoreReturn|null
     */
    public function getReturn(): ?StoreReturn
    {
        return $this->return;
    }
    /**
     * The return's details.
     *
     * @param StoreReturn|null $return
     *
     * @return self
     */
    public function setReturn(?StoreReturn $return): self
    {
        $this->initialized['return'] = true;
        $this->return = $return;
        return $this;
    }
}