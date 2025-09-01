<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdatePriceList extends \ArrayObject
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
     * The date the price list starts.
     *
     * @var string|null
     */
    protected $startsAt;
    /**
     * The date the price list ends.
     *
     * @var string|null
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
     * The date the price list starts.
     *
     * @return string|null
     */
    public function getStartsAt(): ?string
    {
        return $this->startsAt;
    }
    /**
     * The date the price list starts.
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
     * The date the price list ends.
     *
     * @return string|null
     */
    public function getEndsAt(): ?string
    {
        return $this->endsAt;
    }
    /**
     * The date the price list ends.
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
}