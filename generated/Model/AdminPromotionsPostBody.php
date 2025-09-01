<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsPostBody extends \ArrayObject
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
     * The details of a campaign to create and add the promotion to it.
     *
     * @var AdminPromotionsPostBodycampaign|null
     */
    protected $campaign;
    /**
     * The promotion's application method.
     *
     * @var AdminPromotionsPostBodyapplicationMethod|null
     */
    protected $applicationMethod;
    /**
     * The promotion's rules.
     *
     * @var list<AdminPromotionsPostBodyrulesItem>|null
     */
    protected $rules;
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
     * The details of a campaign to create and add the promotion to it.
     *
     * @return AdminPromotionsPostBodycampaign|null
     */
    public function getCampaign(): ?AdminPromotionsPostBodycampaign
    {
        return $this->campaign;
    }
    /**
     * The details of a campaign to create and add the promotion to it.
     *
     * @param AdminPromotionsPostBodycampaign|null $campaign
     *
     * @return self
     */
    public function setCampaign(?AdminPromotionsPostBodycampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * The promotion's application method.
     *
     * @return AdminPromotionsPostBodyapplicationMethod|null
     */
    public function getApplicationMethod(): ?AdminPromotionsPostBodyapplicationMethod
    {
        return $this->applicationMethod;
    }
    /**
     * The promotion's application method.
     *
     * @param AdminPromotionsPostBodyapplicationMethod|null $applicationMethod
     *
     * @return self
     */
    public function setApplicationMethod(?AdminPromotionsPostBodyapplicationMethod $applicationMethod): self
    {
        $this->initialized['applicationMethod'] = true;
        $this->applicationMethod = $applicationMethod;
        return $this;
    }
    /**
     * The promotion's rules.
     *
     * @return list<AdminPromotionsPostBodyrulesItem>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * The promotion's rules.
     *
     * @param list<AdminPromotionsPostBodyrulesItem>|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
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