<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateShippingProfile extends \ArrayObject
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
     * The shipping profile's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The shipping profile's type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The shipping profile's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The shipping profile's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The shipping profile's name.
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
     * The shipping profile's type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The shipping profile's type.
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
     * The shipping profile's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The shipping profile's metadata, used to store custom key-value pairs.
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