<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUploadPreSignedUrl extends \ArrayObject
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
     * The file's original name.
     *
     * @var string|null
     */
    protected $originalname;
    /**
     * The file's size in bytes.
     *
     * @var float|null
     */
    protected $size;
    /**
     * The file's mime type.
     *
     * @var string|null
     */
    protected $mimeType;
    /**
     * The access level of the file. If `private`, the file will not be publicly accessible. The default value depends on the configured File Module Provider.
     *
     * @var string|null
     */
    protected $access;
    /**
     * The file's original name.
     *
     * @return string|null
     */
    public function getOriginalname(): ?string
    {
        return $this->originalname;
    }
    /**
     * The file's original name.
     *
     * @param string|null $originalname
     *
     * @return self
     */
    public function setOriginalname(?string $originalname): self
    {
        $this->initialized['originalname'] = true;
        $this->originalname = $originalname;
        return $this;
    }
    /**
     * The file's size in bytes.
     *
     * @return float|null
     */
    public function getSize(): ?float
    {
        return $this->size;
    }
    /**
     * The file's size in bytes.
     *
     * @param float|null $size
     *
     * @return self
     */
    public function setSize(?float $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The file's mime type.
     *
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }
    /**
     * The file's mime type.
     *
     * @param string|null $mimeType
     *
     * @return self
     */
    public function setMimeType(?string $mimeType): self
    {
        $this->initialized['mimeType'] = true;
        $this->mimeType = $mimeType;
        return $this;
    }
    /**
     * The access level of the file. If `private`, the file will not be publicly accessible. The default value depends on the configured File Module Provider.
     *
     * @return string|null
     */
    public function getAccess(): ?string
    {
        return $this->access;
    }
    /**
     * The access level of the file. If `private`, the file will not be publicly accessible. The default value depends on the configured File Module Provider.
     *
     * @param string|null $access
     *
     * @return self
     */
    public function setAccess(?string $access): self
    {
        $this->initialized['access'] = true;
        $this->access = $access;
        return $this;
    }
}