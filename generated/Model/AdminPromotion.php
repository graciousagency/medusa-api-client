<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotion extends \ArrayObject
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
     * The application method's details.
     *
     * @var AdminApplicationMethod|null
     */
    protected $applicationMethod;
    /**
     * The promotion's rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $rules;
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
     * The promotion's type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Whether the promotion is applied on a cart automatically if it matches the promotion's rules.
     *
     * @var bool|null
     */
    protected $isAutomatic;
    /**
     * The ID of the campaign this promotion belongs to.
     *
     * @var string|null
     */
    protected $campaignId;
    /**
     * The campaign's details.
     *
     * @var AdminCampaign|null
     */
    protected $campaign;
    /**
     * The date the promotion was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the promotion was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the promotion was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The promotion's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Whether the promotion is tax inclusive. If enabled, the promotion is applied after tax is calculated.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The application method's details.
     *
     * @return AdminApplicationMethod|null
     */
    public function getApplicationMethod(): ?AdminApplicationMethod
    {
        return $this->applicationMethod;
    }
    /**
     * The application method's details.
     *
     * @param AdminApplicationMethod|null $applicationMethod
     *
     * @return self
     */
    public function setApplicationMethod(?AdminApplicationMethod $applicationMethod): self
    {
        $this->initialized['applicationMethod'] = true;
        $this->applicationMethod = $applicationMethod;
        return $this;
    }
    /**
     * The promotion's rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * The promotion's rules.
     *
     * @param list<AdminPromotionRule>|null $rules
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
     * Whether the promotion is applied on a cart automatically if it matches the promotion's rules.
     *
     * @return bool|null
     */
    public function getIsAutomatic(): ?bool
    {
        return $this->isAutomatic;
    }
    /**
     * Whether the promotion is applied on a cart automatically if it matches the promotion's rules.
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
     * The ID of the campaign this promotion belongs to.
     *
     * @return string|null
     */
    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }
    /**
     * The ID of the campaign this promotion belongs to.
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
     * The campaign's details.
     *
     * @return AdminCampaign|null
     */
    public function getCampaign(): ?AdminCampaign
    {
        return $this->campaign;
    }
    /**
     * The campaign's details.
     *
     * @param AdminCampaign|null $campaign
     *
     * @return self
     */
    public function setCampaign(?AdminCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * The date the promotion was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the promotion was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The date the promotion was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the promotion was updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The date the promotion was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the promotion was deleted.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * The promotion's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The promotion's status.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Whether the promotion is tax inclusive. If enabled, the promotion is applied after tax is calculated.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * Whether the promotion is tax inclusive. If enabled, the promotion is applied after tax is calculated.
     *
     * @param bool|null $isTaxInclusive
     *
     * @return self
     */
    public function setIsTaxInclusive(?bool $isTaxInclusive): self
    {
        $this->initialized['isTaxInclusive'] = true;
        $this->isTaxInclusive = $isTaxInclusive;
        return $this;
    }
}