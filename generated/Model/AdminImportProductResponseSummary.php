<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminImportProductResponseSummary extends \ArrayObject
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
     * The number of products that will be created by this import.
     *
     * @var float|null
     */
    protected $toCreate;
    /**
     * The number of products that will be updated by this import.
     *
     * @var float|null
     */
    protected $toUpdate;
    /**
     * The number of products that will be created by this import.
     *
     * @return float|null
     */
    public function getToCreate(): ?float
    {
        return $this->toCreate;
    }
    /**
     * The number of products that will be created by this import.
     *
     * @param float|null $toCreate
     *
     * @return self
     */
    public function setToCreate(?float $toCreate): self
    {
        $this->initialized['toCreate'] = true;
        $this->toCreate = $toCreate;
        return $this;
    }
    /**
     * The number of products that will be updated by this import.
     *
     * @return float|null
     */
    public function getToUpdate(): ?float
    {
        return $this->toUpdate;
    }
    /**
     * The number of products that will be updated by this import.
     *
     * @param float|null $toUpdate
     *
     * @return self
     */
    public function setToUpdate(?float $toUpdate): self
    {
        $this->initialized['toUpdate'] = true;
        $this->toUpdate = $toUpdate;
        return $this;
    }
}