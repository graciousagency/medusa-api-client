<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFulfillmentProviderOption extends \ArrayObject
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
     * The fulfillment option's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Whether the fulfillment option is used for returns.
     *
     * @var bool|null
     */
    protected $isReturn;
    /**
     * The fulfillment option's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The fulfillment option's ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Whether the fulfillment option is used for returns.
     *
     * @return bool|null
     */
    public function getIsReturn(): ?bool
    {
        return $this->isReturn;
    }
    /**
     * Whether the fulfillment option is used for returns.
     *
     * @param bool|null $isReturn
     *
     * @return self
     */
    public function setIsReturn(?bool $isReturn): self
    {
        $this->initialized['isReturn'] = true;
        $this->isReturn = $isReturn;
        return $this;
    }
}