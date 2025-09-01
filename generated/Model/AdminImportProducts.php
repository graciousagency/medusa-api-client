<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminImportProducts extends \ArrayObject
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
     * The name of the file as stored in the configured File Module Provider.
     *
     * @var string|null
     */
    protected $fileKey;
    /**
     * The file's original name.
     *
     * @var string|null
     */
    protected $originalname;
    /**
     * The file's extension.
     *
     * @var string|null
     */
    protected $extension;
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
     * The name of the file as stored in the configured File Module Provider.
     *
     * @return string|null
     */
    public function getFileKey(): ?string
    {
        return $this->fileKey;
    }
    /**
     * The name of the file as stored in the configured File Module Provider.
     *
     * @param string|null $fileKey
     *
     * @return self
     */
    public function setFileKey(?string $fileKey): self
    {
        $this->initialized['fileKey'] = true;
        $this->fileKey = $fileKey;
        return $this;
    }
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
     * The file's extension.
     *
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }
    /**
     * The file's extension.
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension): self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
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
}