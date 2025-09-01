<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateDraftOrderShippingMethod extends \ArrayObject
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
     * The ID of the associated shipping option.
     *
     * @var string|null
     */
    protected $shippingOptionId;
    /**
     * The custom amount of the shipping method. If not provided, the shipping option's amount will be used.
     *
     * @var float|null
     */
    protected $customAmount;
    /**
     * A note viewed only by admin users about the shipping method.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * The ID of the associated shipping option.
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }
    /**
     * The ID of the associated shipping option.
     *
     * @param string|null $shippingOptionId
     *
     * @return self
     */
    public function setShippingOptionId(?string $shippingOptionId): self
    {
        $this->initialized['shippingOptionId'] = true;
        $this->shippingOptionId = $shippingOptionId;
        return $this;
    }
    /**
     * The custom amount of the shipping method. If not provided, the shipping option's amount will be used.
     *
     * @return float|null
     */
    public function getCustomAmount(): ?float
    {
        return $this->customAmount;
    }
    /**
     * The custom amount of the shipping method. If not provided, the shipping option's amount will be used.
     *
     * @param float|null $customAmount
     *
     * @return self
     */
    public function setCustomAmount(?float $customAmount): self
    {
        $this->initialized['customAmount'] = true;
        $this->customAmount = $customAmount;
        return $this;
    }
    /**
     * A note viewed only by admin users about the shipping method.
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * A note viewed only by admin users about the shipping method.
     *
     * @param string|null $internalNote
     *
     * @return self
     */
    public function setInternalNote(?string $internalNote): self
    {
        $this->initialized['internalNote'] = true;
        $this->internalNote = $internalNote;
        return $this;
    }
}