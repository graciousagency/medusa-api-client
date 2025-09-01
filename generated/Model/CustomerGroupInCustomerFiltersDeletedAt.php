<?php

namespace Gracious\MedusaApiClientBundle\Model;

class CustomerGroupInCustomerFiltersDeletedAt extends \ArrayObject
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
     * Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $dollarAnd;
    /**
     * Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $dollarOr;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $dollarEq;
    /**
     * Filter by values not equal to this parameter.
     *
     * @var string|null
     */
    protected $dollarNe;
    /**
     * Filter by values in this array.
     *
     * @var list<string>|null
     */
    protected $dollarIn;
    /**
     * Filter by values not in this array.
     *
     * @var list<string>|null
     */
    protected $dollarNin;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $dollarNot;
    /**
     * Filter by values greater than this parameter. Useful for numbers and dates only.
     *
     * @var string|null
     */
    protected $dollarGt;
    /**
     * Filter by values greater than or equal to this parameter. Useful for numbers and dates only.
     *
     * @var string|null
     */
    protected $dollarGte;
    /**
     * Filter by values less than this parameter. Useful for numbers and dates only.
     *
     * @var string|null
     */
    protected $dollarLt;
    /**
     * Filter by values less than or equal to this parameter. Useful for numbers and dates only.
     *
     * @var string|null
     */
    protected $dollarLte;
    /**
     * Apply a `like` filter. Useful for strings only.
     *
     * @var string|null
     */
    protected $dollarLike;
    /**
     * Apply a regex filter. Useful for strings only.
     *
     * @var string|null
     */
    protected $dollarRe;
    /**
     * Apply a case-insensitive `like` filter. Useful for strings only.
     *
     * @var string|null
     */
    protected $dollarIlike;
    /**
     * Filter to apply on full-text properties.
     *
     * @var string|null
     */
    protected $dollarFulltext;
    /**
     * Filter arrays that have overlapping values with this parameter.
     *
     * @var list<string>|null
     */
    protected $dollarOverlap;
    /**
     * Filter arrays that contain some of the values of this parameter.
     *
     * @var list<string>|null
     */
    protected $dollarContains;
    /**
     * Filter arrays that contain all values of this parameter.
     *
     * @var list<string>|null
     */
    protected $dollarContained;
    /**
     * Filter by whether a value for this parameter exists (not `null`).
     *
     * @var bool|null
     */
    protected $dollarExists;
    /**
     * Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getDollarAnd(): ?array
    {
        return $this->dollarAnd;
    }
    /**
     * Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *
     * @param list<array<string, mixed>>|null $dollarAnd
     *
     * @return self
     */
    public function setDollarAnd(?array $dollarAnd): self
    {
        $this->initialized['dollarAnd'] = true;
        $this->dollarAnd = $dollarAnd;
        return $this;
    }
    /**
     * Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getDollarOr(): ?array
    {
        return $this->dollarOr;
    }
    /**
     * Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *
     * @param list<array<string, mixed>>|null $dollarOr
     *
     * @return self
     */
    public function setDollarOr(?array $dollarOr): self
    {
        $this->initialized['dollarOr'] = true;
        $this->dollarOr = $dollarOr;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDollarEq()
    {
        return $this->dollarEq;
    }
    /**
     * 
     *
     * @param mixed $dollarEq
     *
     * @return self
     */
    public function setDollarEq($dollarEq): self
    {
        $this->initialized['dollarEq'] = true;
        $this->dollarEq = $dollarEq;
        return $this;
    }
    /**
     * Filter by values not equal to this parameter.
     *
     * @return string|null
     */
    public function getDollarNe(): ?string
    {
        return $this->dollarNe;
    }
    /**
     * Filter by values not equal to this parameter.
     *
     * @param string|null $dollarNe
     *
     * @return self
     */
    public function setDollarNe(?string $dollarNe): self
    {
        $this->initialized['dollarNe'] = true;
        $this->dollarNe = $dollarNe;
        return $this;
    }
    /**
     * Filter by values in this array.
     *
     * @return list<string>|null
     */
    public function getDollarIn(): ?array
    {
        return $this->dollarIn;
    }
    /**
     * Filter by values in this array.
     *
     * @param list<string>|null $dollarIn
     *
     * @return self
     */
    public function setDollarIn(?array $dollarIn): self
    {
        $this->initialized['dollarIn'] = true;
        $this->dollarIn = $dollarIn;
        return $this;
    }
    /**
     * Filter by values not in this array.
     *
     * @return list<string>|null
     */
    public function getDollarNin(): ?array
    {
        return $this->dollarNin;
    }
    /**
     * Filter by values not in this array.
     *
     * @param list<string>|null $dollarNin
     *
     * @return self
     */
    public function setDollarNin(?array $dollarNin): self
    {
        $this->initialized['dollarNin'] = true;
        $this->dollarNin = $dollarNin;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDollarNot()
    {
        return $this->dollarNot;
    }
    /**
     * 
     *
     * @param mixed $dollarNot
     *
     * @return self
     */
    public function setDollarNot($dollarNot): self
    {
        $this->initialized['dollarNot'] = true;
        $this->dollarNot = $dollarNot;
        return $this;
    }
    /**
     * Filter by values greater than this parameter. Useful for numbers and dates only.
     *
     * @return string|null
     */
    public function getDollarGt(): ?string
    {
        return $this->dollarGt;
    }
    /**
     * Filter by values greater than this parameter. Useful for numbers and dates only.
     *
     * @param string|null $dollarGt
     *
     * @return self
     */
    public function setDollarGt(?string $dollarGt): self
    {
        $this->initialized['dollarGt'] = true;
        $this->dollarGt = $dollarGt;
        return $this;
    }
    /**
     * Filter by values greater than or equal to this parameter. Useful for numbers and dates only.
     *
     * @return string|null
     */
    public function getDollarGte(): ?string
    {
        return $this->dollarGte;
    }
    /**
     * Filter by values greater than or equal to this parameter. Useful for numbers and dates only.
     *
     * @param string|null $dollarGte
     *
     * @return self
     */
    public function setDollarGte(?string $dollarGte): self
    {
        $this->initialized['dollarGte'] = true;
        $this->dollarGte = $dollarGte;
        return $this;
    }
    /**
     * Filter by values less than this parameter. Useful for numbers and dates only.
     *
     * @return string|null
     */
    public function getDollarLt(): ?string
    {
        return $this->dollarLt;
    }
    /**
     * Filter by values less than this parameter. Useful for numbers and dates only.
     *
     * @param string|null $dollarLt
     *
     * @return self
     */
    public function setDollarLt(?string $dollarLt): self
    {
        $this->initialized['dollarLt'] = true;
        $this->dollarLt = $dollarLt;
        return $this;
    }
    /**
     * Filter by values less than or equal to this parameter. Useful for numbers and dates only.
     *
     * @return string|null
     */
    public function getDollarLte(): ?string
    {
        return $this->dollarLte;
    }
    /**
     * Filter by values less than or equal to this parameter. Useful for numbers and dates only.
     *
     * @param string|null $dollarLte
     *
     * @return self
     */
    public function setDollarLte(?string $dollarLte): self
    {
        $this->initialized['dollarLte'] = true;
        $this->dollarLte = $dollarLte;
        return $this;
    }
    /**
     * Apply a `like` filter. Useful for strings only.
     *
     * @return string|null
     */
    public function getDollarLike(): ?string
    {
        return $this->dollarLike;
    }
    /**
     * Apply a `like` filter. Useful for strings only.
     *
     * @param string|null $dollarLike
     *
     * @return self
     */
    public function setDollarLike(?string $dollarLike): self
    {
        $this->initialized['dollarLike'] = true;
        $this->dollarLike = $dollarLike;
        return $this;
    }
    /**
     * Apply a regex filter. Useful for strings only.
     *
     * @return string|null
     */
    public function getDollarRe(): ?string
    {
        return $this->dollarRe;
    }
    /**
     * Apply a regex filter. Useful for strings only.
     *
     * @param string|null $dollarRe
     *
     * @return self
     */
    public function setDollarRe(?string $dollarRe): self
    {
        $this->initialized['dollarRe'] = true;
        $this->dollarRe = $dollarRe;
        return $this;
    }
    /**
     * Apply a case-insensitive `like` filter. Useful for strings only.
     *
     * @return string|null
     */
    public function getDollarIlike(): ?string
    {
        return $this->dollarIlike;
    }
    /**
     * Apply a case-insensitive `like` filter. Useful for strings only.
     *
     * @param string|null $dollarIlike
     *
     * @return self
     */
    public function setDollarIlike(?string $dollarIlike): self
    {
        $this->initialized['dollarIlike'] = true;
        $this->dollarIlike = $dollarIlike;
        return $this;
    }
    /**
     * Filter to apply on full-text properties.
     *
     * @return string|null
     */
    public function getDollarFulltext(): ?string
    {
        return $this->dollarFulltext;
    }
    /**
     * Filter to apply on full-text properties.
     *
     * @param string|null $dollarFulltext
     *
     * @return self
     */
    public function setDollarFulltext(?string $dollarFulltext): self
    {
        $this->initialized['dollarFulltext'] = true;
        $this->dollarFulltext = $dollarFulltext;
        return $this;
    }
    /**
     * Filter arrays that have overlapping values with this parameter.
     *
     * @return list<string>|null
     */
    public function getDollarOverlap(): ?array
    {
        return $this->dollarOverlap;
    }
    /**
     * Filter arrays that have overlapping values with this parameter.
     *
     * @param list<string>|null $dollarOverlap
     *
     * @return self
     */
    public function setDollarOverlap(?array $dollarOverlap): self
    {
        $this->initialized['dollarOverlap'] = true;
        $this->dollarOverlap = $dollarOverlap;
        return $this;
    }
    /**
     * Filter arrays that contain some of the values of this parameter.
     *
     * @return list<string>|null
     */
    public function getDollarContains(): ?array
    {
        return $this->dollarContains;
    }
    /**
     * Filter arrays that contain some of the values of this parameter.
     *
     * @param list<string>|null $dollarContains
     *
     * @return self
     */
    public function setDollarContains(?array $dollarContains): self
    {
        $this->initialized['dollarContains'] = true;
        $this->dollarContains = $dollarContains;
        return $this;
    }
    /**
     * Filter arrays that contain all values of this parameter.
     *
     * @return list<string>|null
     */
    public function getDollarContained(): ?array
    {
        return $this->dollarContained;
    }
    /**
     * Filter arrays that contain all values of this parameter.
     *
     * @param list<string>|null $dollarContained
     *
     * @return self
     */
    public function setDollarContained(?array $dollarContained): self
    {
        $this->initialized['dollarContained'] = true;
        $this->dollarContained = $dollarContained;
        return $this;
    }
    /**
     * Filter by whether a value for this parameter exists (not `null`).
     *
     * @return bool|null
     */
    public function getDollarExists(): ?bool
    {
        return $this->dollarExists;
    }
    /**
     * Filter by whether a value for this parameter exists (not `null`).
     *
     * @param bool|null $dollarExists
     *
     * @return self
     */
    public function setDollarExists(?bool $dollarExists): self
    {
        $this->initialized['dollarExists'] = true;
        $this->dollarExists = $dollarExists;
        return $this;
    }
}