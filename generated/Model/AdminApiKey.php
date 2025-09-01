<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminApiKey extends \ArrayObject
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
     * The api key's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The api key's token.
     *
     * @var string|null
     */
    protected $token;
    /**
     * The redacted form of the API key's token. This is useful when showing portion of the token.
     *
     * @var string|null
     */
    protected $redacted;
    /**
     * The api key's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The api key's type. `secret` is used for a user's API key, whereas `publishable` is used for Publishable API keys.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The date and time the API key was last used.
     *
     * @var \DateTime|null
     */
    protected $lastUsedAt;
    /**
     * The ID of the user that created the API key, if available.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The date and time the API key was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The ID of the user that revoked the API key, if available.
     *
     * @var string|null
     */
    protected $revokedBy;
    /**
     * The date and time the API key was revoked. The API key is considered revoked when this property is set.
     *
     * @var \DateTime|null
     */
    protected $revokedAt;
    /**
     * The date the API key was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the API key was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The api key's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The api key's ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The api key's token.
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * The api key's token.
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * The redacted form of the API key's token. This is useful when showing portion of the token.
     *
     * @return string|null
     */
    public function getRedacted(): ?string
    {
        return $this->redacted;
    }
    /**
     * The redacted form of the API key's token. This is useful when showing portion of the token.
     *
     * @param string|null $redacted
     *
     * @return self
     */
    public function setRedacted(?string $redacted): self
    {
        $this->initialized['redacted'] = true;
        $this->redacted = $redacted;
        return $this;
    }
    /**
     * The api key's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The api key's title.
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
     * The api key's type. `secret` is used for a user's API key, whereas `publishable` is used for Publishable API keys.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The api key's type. `secret` is used for a user's API key, whereas `publishable` is used for Publishable API keys.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The date and time the API key was last used.
     *
     * @return \DateTime|null
     */
    public function getLastUsedAt(): ?\DateTime
    {
        return $this->lastUsedAt;
    }
    /**
     * The date and time the API key was last used.
     *
     * @param \DateTime|null $lastUsedAt
     *
     * @return self
     */
    public function setLastUsedAt(?\DateTime $lastUsedAt): self
    {
        $this->initialized['lastUsedAt'] = true;
        $this->lastUsedAt = $lastUsedAt;
        return $this;
    }
    /**
     * The ID of the user that created the API key, if available.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created the API key, if available.
     *
     * @param string|null $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * The date and time the API key was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date and time the API key was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The ID of the user that revoked the API key, if available.
     *
     * @return string|null
     */
    public function getRevokedBy(): ?string
    {
        return $this->revokedBy;
    }
    /**
     * The ID of the user that revoked the API key, if available.
     *
     * @param string|null $revokedBy
     *
     * @return self
     */
    public function setRevokedBy(?string $revokedBy): self
    {
        $this->initialized['revokedBy'] = true;
        $this->revokedBy = $revokedBy;
        return $this;
    }
    /**
     * The date and time the API key was revoked. The API key is considered revoked when this property is set.
     *
     * @return \DateTime|null
     */
    public function getRevokedAt(): ?\DateTime
    {
        return $this->revokedAt;
    }
    /**
     * The date and time the API key was revoked. The API key is considered revoked when this property is set.
     *
     * @param \DateTime|null $revokedAt
     *
     * @return self
     */
    public function setRevokedAt(?\DateTime $revokedAt): self
    {
        $this->initialized['revokedAt'] = true;
        $this->revokedAt = $revokedAt;
        return $this;
    }
    /**
     * The date the API key was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the API key was updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The date the API key was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the API key was deleted.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}