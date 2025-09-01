<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaignsPostBody extends \ArrayObject
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
     * The campaign's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The campaign's identifier.
     *
     * @var string|null
     */
    protected $campaignIdentifier;
    /**
     * The campaign's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The campaign's budget which, when crossed, ends the campaign.
     *
     * @var AdminCampaignsPostBodybudget|null
     */
    protected $budget;
    /**
     * The campaign's start date.
     *
     * @var \DateTime|null
     */
    protected $startsAt;
    /**
     * The campaign's end date.
     *
     * @var \DateTime|null
     */
    protected $endsAt;
    /**
     * The campaign's promotions.
     *
     * @var list<AdminCampaignsPostBodypromotionsItem>|null
     */
    protected $promotions;
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @var array<string, mixed>|null
     */
    protected $additionalData;
    /**
     * The campaign's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The campaign's name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The campaign's identifier.
     *
     * @return string|null
     */
    public function getCampaignIdentifier(): ?string
    {
        return $this->campaignIdentifier;
    }
    /**
     * The campaign's identifier.
     *
     * @param string|null $campaignIdentifier
     *
     * @return self
     */
    public function setCampaignIdentifier(?string $campaignIdentifier): self
    {
        $this->initialized['campaignIdentifier'] = true;
        $this->campaignIdentifier = $campaignIdentifier;
        return $this;
    }
    /**
     * The campaign's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The campaign's description.
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
    /**
     * The campaign's budget which, when crossed, ends the campaign.
     *
     * @return AdminCampaignsPostBodybudget|null
     */
    public function getBudget(): ?AdminCampaignsPostBodybudget
    {
        return $this->budget;
    }
    /**
     * The campaign's budget which, when crossed, ends the campaign.
     *
     * @param AdminCampaignsPostBodybudget|null $budget
     *
     * @return self
     */
    public function setBudget(?AdminCampaignsPostBodybudget $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;
        return $this;
    }
    /**
     * The campaign's start date.
     *
     * @return \DateTime|null
     */
    public function getStartsAt(): ?\DateTime
    {
        return $this->startsAt;
    }
    /**
     * The campaign's start date.
     *
     * @param \DateTime|null $startsAt
     *
     * @return self
     */
    public function setStartsAt(?\DateTime $startsAt): self
    {
        $this->initialized['startsAt'] = true;
        $this->startsAt = $startsAt;
        return $this;
    }
    /**
     * The campaign's end date.
     *
     * @return \DateTime|null
     */
    public function getEndsAt(): ?\DateTime
    {
        return $this->endsAt;
    }
    /**
     * The campaign's end date.
     *
     * @param \DateTime|null $endsAt
     *
     * @return self
     */
    public function setEndsAt(?\DateTime $endsAt): self
    {
        $this->initialized['endsAt'] = true;
        $this->endsAt = $endsAt;
        return $this;
    }
    /**
     * The campaign's promotions.
     *
     * @return list<AdminCampaignsPostBodypromotionsItem>|null
     */
    public function getPromotions(): ?array
    {
        return $this->promotions;
    }
    /**
     * The campaign's promotions.
     *
     * @param list<AdminCampaignsPostBodypromotionsItem>|null $promotions
     *
     * @return self
     */
    public function setPromotions(?array $promotions): self
    {
        $this->initialized['promotions'] = true;
        $this->promotions = $promotions;
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