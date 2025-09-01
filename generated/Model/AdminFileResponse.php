<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFileResponse extends \ArrayObject
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
     * A file's details.
     *
     * @var AdminFile|null
     */
    protected $file;
    /**
     * A file's details.
     *
     * @return AdminFile|null
     */
    public function getFile(): ?AdminFile
    {
        return $this->file;
    }
    /**
     * A file's details.
     *
     * @param AdminFile|null $file
     *
     * @return self
     */
    public function setFile(?AdminFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
}