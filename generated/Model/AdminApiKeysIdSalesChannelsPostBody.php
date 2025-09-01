<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminApiKeysIdSalesChannelsPostBody extends \ArrayObject
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
     * The sales channels to add to the publishable API key.
     *
     * @var list<string>|null
     */
    protected $add;
    /**
     * The sales channels to remove from the publishable API key.
     *
     * @var list<string>|null
     */
    protected $remove;
    /**
     * The sales channels to add to the publishable API key.
     *
     * @return list<string>|null
     */
    public function getAdd(): ?array
    {
        return $this->add;
    }
    /**
     * The sales channels to add to the publishable API key.
     *
     * @param list<string>|null $add
     *
     * @return self
     */
    public function setAdd(?array $add): self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * The sales channels to remove from the publishable API key.
     *
     * @return list<string>|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }
    /**
     * The sales channels to remove from the publishable API key.
     *
     * @param list<string>|null $remove
     *
     * @return self
     */
    public function setRemove(?array $remove): self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
}