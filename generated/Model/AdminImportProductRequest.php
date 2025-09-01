<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminImportProductRequest extends \ArrayObject
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
     * A File to upload.
     *
     * @var array<string, mixed>|null
     */
    protected $file;
    /**
     * A File to upload.
     *
     * @return array<string, mixed>|null
     */
    public function getFile(): ?iterable
    {
        return $this->file;
    }
    /**
     * A File to upload.
     *
     * @param array<string, mixed>|null $file
     *
     * @return self
     */
    public function setFile(?iterable $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
}