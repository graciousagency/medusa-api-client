<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaign extends \ArrayObject
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
     * The campaign's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The campaign's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The campaign's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The campaign's currency.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * The campaign's identifier.
     *
     * @var string|null
     */
    protected $campaignIdentifier;
    /**
     * The date and time that the campaign starts.
     *
     * @var string|null
     */
    protected $startsAt;
    /**
     * The date and time that the campaign ends.
     *
     * @var string|null
     */
    protected $endsAt;
    /**
     * The campaign's budget.
     *
     * @var AdminCampaignBudget|null
     */
    protected $budget;
    /**
     * The date the campaign was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the campaign was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the campaign was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The campaign's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The campaign's ID.
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
     * The campaign's currency.
     *
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * The campaign's currency.
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
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
     * The date and time that the campaign starts.
     *
     * @return string|null
     */
    public function getStartsAt(): ?string
    {
        return $this->startsAt;
    }
    /**
     * The date and time that the campaign starts.
     *
     * @param string|null $startsAt
     *
     * @return self
     */
    public function setStartsAt(?string $startsAt): self
    {
        $this->initialized['startsAt'] = true;
        $this->startsAt = $startsAt;
        return $this;
    }
    /**
     * The date and time that the campaign ends.
     *
     * @return string|null
     */
    public function getEndsAt(): ?string
    {
        return $this->endsAt;
    }
    /**
     * The date and time that the campaign ends.
     *
     * @param string|null $endsAt
     *
     * @return self
     */
    public function setEndsAt(?string $endsAt): self
    {
        $this->initialized['endsAt'] = true;
        $this->endsAt = $endsAt;
        return $this;
    }
    /**
     * The campaign's budget.
     *
     * @return AdminCampaignBudget|null
     */
    public function getBudget(): ?AdminCampaignBudget
    {
        return $this->budget;
    }
    /**
     * The campaign's budget.
     *
     * @param AdminCampaignBudget|null $budget
     *
     * @return self
     */
    public function setBudget(?AdminCampaignBudget $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;
        return $this;
    }
    /**
     * The date the campaign was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the campaign was created.
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
     * The date the campaign was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the campaign was updated.
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
     * The date the campaign was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the campaign was deleted.
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
}