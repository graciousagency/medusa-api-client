<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCartPromotion extends \ArrayObject
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
     * The promotion's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The promotion's code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The promotion's is automatic.
     *
     * @var bool|null
     */
    protected $isAutomatic;
    /**
     * The promotion's application method.
     *
     * @var StoreCartPromotionApplicationMethod|null
     */
    protected $applicationMethod;
    /**
     * The promotion's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The promotion's ID.
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
     * The promotion's code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The promotion's code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * The promotion's is automatic.
     *
     * @return bool|null
     */
    public function getIsAutomatic(): ?bool
    {
        return $this->isAutomatic;
    }
    /**
     * The promotion's is automatic.
     *
     * @param bool|null $isAutomatic
     *
     * @return self
     */
    public function setIsAutomatic(?bool $isAutomatic): self
    {
        $this->initialized['isAutomatic'] = true;
        $this->isAutomatic = $isAutomatic;
        return $this;
    }
    /**
     * The promotion's application method.
     *
     * @return StoreCartPromotionApplicationMethod|null
     */
    public function getApplicationMethod(): ?StoreCartPromotionApplicationMethod
    {
        return $this->applicationMethod;
    }
    /**
     * The promotion's application method.
     *
     * @param StoreCartPromotionApplicationMethod|null $applicationMethod
     *
     * @return self
     */
    public function setApplicationMethod(?StoreCartPromotionApplicationMethod $applicationMethod): self
    {
        $this->initialized['applicationMethod'] = true;
        $this->applicationMethod = $applicationMethod;
        return $this;
    }
}