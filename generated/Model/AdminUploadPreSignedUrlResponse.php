<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUploadPreSignedUrlResponse extends \ArrayObject
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
     * The file's pre-signed upload URL.
     *
     * @var string|null
     */
    protected $url;
    /**
     * The file's filename.
     *
     * @var string|null
     */
    protected $filename;
    /**
     * The file's orignal name.
     *
     * @var string|null
     */
    protected $originalname;
    /**
     * The file's mime type.
     *
     * @var string|null
     */
    protected $mimeType;
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
     * The file's pre-signed upload URL.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * The file's pre-signed upload URL.
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * The file's filename.
     *
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * The file's filename.
     *
     * @param string|null $filename
     *
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }
    /**
     * The file's orignal name.
     *
     * @return string|null
     */
    public function getOriginalname(): ?string
    {
        return $this->originalname;
    }
    /**
     * The file's orignal name.
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
}