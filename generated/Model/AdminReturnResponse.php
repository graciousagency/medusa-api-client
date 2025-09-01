<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminReturnResponse extends \ArrayObject
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
     * @var AdminReturn|null
     */
    protected $return;
    /**
     * The return's details.
     *
     * @return AdminReturn|null
     */
    public function getReturn(): ?AdminReturn
    {
        return $this->return;
    }
    /**
     * The return's details.
     *
     * @param AdminReturn|null $return
     *
     * @return self
     */
    public function setReturn(?AdminReturn $return): self
    {
        $this->initialized['return'] = true;
        $this->return = $return;
        return $this;
    }
}