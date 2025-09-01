<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateTaxRateRule extends \ArrayObject
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
     * The name of a table in the database that this rule points to.
     *
     * @var string|null
     */
    protected $reference;
    /**
     * The ID of a record in the table specified in reference.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * The name of a table in the database that this rule points to.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * The name of a table in the database that this rule points to.
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
     * The ID of a record in the table specified in reference.
     *
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * The ID of a record in the table specified in reference.
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