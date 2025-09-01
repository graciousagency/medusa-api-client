<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateSalesChannel extends \ArrayObject
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
     * The sales channel's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The sales channel's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Whether the sales channel is disabled.
     *
     * @var bool|null
     */
    protected $isDisabled;
    /**
     * The sales channel's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The sales channel's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The sales channel's name.
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
     * The sales channel's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The sales channel's description.
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
     * Whether the sales channel is disabled.
     *
     * @return bool|null
     */
    public function getIsDisabled(): ?bool
    {
        return $this->isDisabled;
    }
    /**
     * Whether the sales channel is disabled.
     *
     * @param bool|null $isDisabled
     *
     * @return self
     */
    public function setIsDisabled(?bool $isDisabled): self
    {
        $this->initialized['isDisabled'] = true;
        $this->isDisabled = $isDisabled;
        return $this;
    }
    /**
     * The sales channel's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The sales channel's metadata, can hold custom key-value pairs.
     *
     * @param array<string, mixed>|null $metadata
     *
     * @return self
     */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
}