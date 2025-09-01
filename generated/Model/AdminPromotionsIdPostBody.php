<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsIdPostBody extends \ArrayObject
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
     * The promotion's code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Whether the promotion is applied automatically.
     *
     * @var bool|null
     */
    protected $isAutomatic;
    /**
     * The promotion's type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The ID of the campaign that the promotion belongs to.
     *
     * @var string|null
     */
    protected $campaignId;
    /**
     * The properties to update in the application method.
     *
     * @var AdminPromotionsIdPostBodyapplicationMethod|null
     */
    protected $applicationMethod;
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @var array<string, mixed>|null
     */
    protected $additionalData;
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
     * Whether the promotion is applied automatically.
     *
     * @return bool|null
     */
    public function getIsAutomatic(): ?bool
    {
        return $this->isAutomatic;
    }
    /**
     * Whether the promotion is applied automatically.
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
     * The promotion's type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The promotion's type.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The ID of the campaign that the promotion belongs to.
     *
     * @return string|null
     */
    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }
    /**
     * The ID of the campaign that the promotion belongs to.
     *
     * @param string|null $campaignId
     *
     * @return self
     */
    public function setCampaignId(?string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;
        return $this;
    }
    /**
     * The properties to update in the application method.
     *
     * @return AdminPromotionsIdPostBodyapplicationMethod|null
     */
    public function getApplicationMethod(): ?AdminPromotionsIdPostBodyapplicationMethod
    {
        return $this->applicationMethod;
    }
    /**
     * The properties to update in the application method.
     *
     * @param AdminPromotionsIdPostBodyapplicationMethod|null $applicationMethod
     *
     * @return self
     */
    public function setApplicationMethod(?AdminPromotionsIdPostBodyapplicationMethod $applicationMethod): self
    {
        $this->initialized['applicationMethod'] = true;
        $this->applicationMethod = $applicationMethod;
        return $this;
    }
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @return array<string, mixed>|null
     */
    public function getAdditionalData(): ?iterable
    {
        return $this->additionalData;
    }
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @param array<string, mixed>|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?iterable $additionalData): self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
}