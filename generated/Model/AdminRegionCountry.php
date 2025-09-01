<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminRegionCountry extends \ArrayObject
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
     * The country's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The country's iso 2.
     *
     * @var string|null
     */
    protected $iso2;
    /**
     * The country's iso 3.
     *
     * @var string|null
     */
    protected $iso3;
    /**
     * The country's num code.
     *
     * @var string|null
     */
    protected $numCode;
    /**
     * The country's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The country's display name.
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * The country's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The country's ID.
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
     * The country's iso 2.
     *
     * @return string|null
     */
    public function getIso2(): ?string
    {
        return $this->iso2;
    }
    /**
     * The country's iso 2.
     *
     * @param string|null $iso2
     *
     * @return self
     */
    public function setIso2(?string $iso2): self
    {
        $this->initialized['iso2'] = true;
        $this->iso2 = $iso2;
        return $this;
    }
    /**
     * The country's iso 3.
     *
     * @return string|null
     */
    public function getIso3(): ?string
    {
        return $this->iso3;
    }
    /**
     * The country's iso 3.
     *
     * @param string|null $iso3
     *
     * @return self
     */
    public function setIso3(?string $iso3): self
    {
        $this->initialized['iso3'] = true;
        $this->iso3 = $iso3;
        return $this;
    }
    /**
     * The country's num code.
     *
     * @return string|null
     */
    public function getNumCode(): ?string
    {
        return $this->numCode;
    }
    /**
     * The country's num code.
     *
     * @param string|null $numCode
     *
     * @return self
     */
    public function setNumCode(?string $numCode): self
    {
        $this->initialized['numCode'] = true;
        $this->numCode = $numCode;
        return $this;
    }
    /**
     * The country's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The country's name.
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
     * The country's display name.
     *
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }
    /**
     * The country's display name.
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
}