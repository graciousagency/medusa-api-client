<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminInvitesGetResponse200 extends \ArrayObject
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
     * The maximum number of items retrieved.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The number of items skipped before the returned items.
     *
     * @var float|null
     */
    protected $offset;
    /**
     * The total number of items.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of invites.
     *
     * @var list<AdminInvite>|null
     */
    protected $invites;
    /**
     * The maximum number of items retrieved.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of items retrieved.
     *
     * @param float|null $limit
     *
     * @return self
     */
    public function setLimit(?float $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * The number of items skipped before the returned items.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of items skipped before the returned items.
     *
     * @param float|null $offset
     *
     * @return self
     */
    public function setOffset(?float $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;
        return $this;
    }
    /**
     * The total number of items.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total number of items.
     *
     * @param float|null $count
     *
     * @return self
     */
    public function setCount(?float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * The list of invites.
     *
     * @return list<AdminInvite>|null
     */
    public function getInvites(): ?array
    {
        return $this->invites;
    }
    /**
     * The list of invites.
     *
     * @param list<AdminInvite>|null $invites
     *
     * @return self
     */
    public function setInvites(?array $invites): self
    {
        $this->initialized['invites'] = true;
        $this->invites = $invites;
        return $this;
    }
}