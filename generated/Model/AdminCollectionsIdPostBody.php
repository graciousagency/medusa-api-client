<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCollectionsIdPostBody extends \ArrayObject
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
     * The collection's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The collection's handle.
     *
     * @var string|null
     */
    protected $handle;
    /**
     * The collection's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @var array<string, mixed>|null
     */
    protected $additionalData;
    /**
     * The collection's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The collection's title.
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
     * The collection's handle.
     *
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }
    /**
     * The collection's handle.
     *
     * @param string|null $handle
     *
     * @return self
     */
    public function setHandle(?string $handle): self
    {
        $this->initialized['handle'] = true;
        $this->handle = $handle;
        return $this;
    }
    /**
     * The collection's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The collection's metadata.
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
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @return array<string, mixed>|null
     */
    public function getAdditionalData(): ?iterable
    {
        return $this->additionalData;
    }
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @param array<string, mixed>|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?iterable $additionalData): self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
}