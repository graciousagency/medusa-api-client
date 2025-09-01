<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreatePriceList extends \ArrayObject
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
     * The price list's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The price list's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The date and time the price list starts at.
     *
     * @var \DateTime|null
     */
    protected $startsAt;
    /**
     * The date and time the price list ends at.
     *
     * @var \DateTime|null
     */
    protected $endsAt;
    /**
     * The price list's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The price list's type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The price list's rules.
     *
     * @var array<string, mixed>|null
     */
    protected $rules;
    /**
     * The price list's prices.
     *
     * @var list<AdminCreatePriceListPricesItem>|null
     */
    protected $prices;
    /**
     * The price list's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The price list's title.
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The price list's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The price list's description.
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
     * The date and time the price list starts at.
     *
     * @return \DateTime|null
     */
    public function getStartsAt(): ?\DateTime
    {
        return $this->startsAt;
    }
    /**
     * The date and time the price list starts at.
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
     * The date and time the price list ends at.
     *
     * @return \DateTime|null
     */
    public function getEndsAt(): ?\DateTime
    {
        return $this->endsAt;
    }
    /**
     * The date and time the price list ends at.
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
     * The price list's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The price list's status.
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
     * The price list's type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The price list's type.
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
     * The price list's rules.
     *
     * @return array<string, mixed>|null
     */
    public function getRules(): ?iterable
    {
        return $this->rules;
    }
    /**
     * The price list's rules.
     *
     * @param array<string, mixed>|null $rules
     *
     * @return self
     */
    public function setRules(?iterable $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * The price list's prices.
     *
     * @return list<AdminCreatePriceListPricesItem>|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     * The price list's prices.
     *
     * @param list<AdminCreatePriceListPricesItem>|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
}