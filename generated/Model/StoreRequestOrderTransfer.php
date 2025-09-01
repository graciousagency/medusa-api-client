<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreRequestOrderTransfer extends \ArrayObject
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
     * The transfer's description, which can be shown to the other customer receiving the request.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The transfer's description, which can be shown to the other customer receiving the request.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The transfer's description, which can be shown to the other customer receiving the request.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}