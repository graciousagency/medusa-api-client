<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTaxRateRule extends \ArrayObject
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
     * The name of the table this rule references.
     *
     * @var string|null
     */
    protected $reference;
    /**
     * The ID of a record in the table that this rule references.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * The name of the table this rule references.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * The name of the table this rule references.
     *
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * The ID of a record in the table that this rule references.
     *
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * The ID of a record in the table that this rule references.
     *
     * @param string|null $referenceId
     *
     * @return self
     */
    public function setReferenceId(?string $referenceId): self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
}