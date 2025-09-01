<?php

namespace Gracious\MedusaApiClientBundle\Model;

class CampaignResponse extends \ArrayObject
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
     * The campaign's campaign identifier.
     *
     * @var string|null
     */
    protected $campaignIdentifier;
    /**
     * The campaign's starts at.
     *
     * @var string|null
     */
    protected $startsAt;
    /**
     * The campaign's ends at.
     *
     * @var string|null
     */
    protected $endsAt;
    /**
     * The campaign's budget.
     *
     * @var CampaignResponseBudget|null
     */
    protected $budget;
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
     * The campaign's campaign identifier.
     *
     * @return string|null
     */
    public function getCampaignIdentifier(): ?string
    {
        return $this->campaignIdentifier;
    }
    /**
     * The campaign's campaign identifier.
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
     * The campaign's starts at.
     *
     * @return string|null
     */
    public function getStartsAt(): ?string
    {
        return $this->startsAt;
    }
    /**
     * The campaign's starts at.
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
     * The campaign's ends at.
     *
     * @return string|null
     */
    public function getEndsAt(): ?string
    {
        return $this->endsAt;
    }
    /**
     * The campaign's ends at.
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
     * @return CampaignResponseBudget|null
     */
    public function getBudget(): ?CampaignResponseBudget
    {
        return $this->budget;
    }
    /**
     * The campaign's budget.
     *
     * @param CampaignResponseBudget|null $budget
     *
     * @return self
     */
    public function setBudget(?CampaignResponseBudget $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;
        return $this;
    }
}