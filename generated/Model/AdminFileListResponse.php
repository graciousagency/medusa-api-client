<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFileListResponse extends \ArrayObject
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
     * The list of uploaded files.
     *
     * @var list<AdminFile>|null
     */
    protected $files;
    /**
     * The list of uploaded files.
     *
     * @return list<AdminFile>|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }
    /**
     * The list of uploaded files.
     *
     * @param list<AdminFile>|null $files
     *
     * @return self
     */
    public function setFiles(?array $files): self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
}