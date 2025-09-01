<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminApiKeysGetResponse200 extends \ArrayObject
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
     * The maximum number of items returned in the list.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The number of items skipped before retrieving the returned items.
     *
     * @var float|null
     */
    protected $offset;
    /**
     * The total count of items.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of API keys.
     *
     * @var list<ApiKeyResponse>|null
     */
    protected $apiKeys;
    /**
     * The maximum number of items returned in the list.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of items returned in the list.
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
     * The number of items skipped before retrieving the returned items.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of items skipped before retrieving the returned items.
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
     * The total count of items.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total count of items.
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
     * The list of API keys.
     *
     * @return list<ApiKeyResponse>|null
     */
    public function getApiKeys(): ?array
    {
        return $this->apiKeys;
    }
    /**
     * The list of API keys.
     *
     * @param list<ApiKeyResponse>|null $apiKeys
     *
     * @return self
     */
    public function setApiKeys(?array $apiKeys): self
    {
        $this->initialized['apiKeys'] = true;
        $this->apiKeys = $apiKeys;
        return $this;
    }
}