<?php

namespace Gracious\MedusaApiClientBundle\Model;

class ApiKeyResponse extends \ArrayObject
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
     * The API key's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The API key's token.
     *
     * @var string|null
     */
    protected $token;
    /**
     * The redacted form of the API key's token. This is useful when showing portion of the token. For example `sk_...123`.
     *
     * @var string|null
     */
    protected $redacted;
    /**
     * The API key's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The API key's type. `secret` API keys are used for authenticating admin users, and `publishable` API key are used for storefronts and similar clients to scope requests to sales channels.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The date the API key was last used.
     *
     * @var \DateTime|null
     */
    protected $lastUsedAt;
    /**
     * The ID of the user that created the API key.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The date the API key was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The ID of the user that revoked the API key.
     *
     * @var string|null
     */
    protected $revokedBy;
    /**
     * The date the API key was revoked.
     *
     * @var \DateTime|null
     */
    protected $revokedAt;
    /**
     * The API key's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The API key's ID.
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
     * The API key's token.
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * The API key's token.
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
     * The redacted form of the API key's token. This is useful when showing portion of the token. For example `sk_...123`.
     *
     * @return string|null
     */
    public function getRedacted(): ?string
    {
        return $this->redacted;
    }
    /**
     * The redacted form of the API key's token. This is useful when showing portion of the token. For example `sk_...123`.
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
     * The API key's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The API key's title.
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
     * The API key's type. `secret` API keys are used for authenticating admin users, and `publishable` API key are used for storefronts and similar clients to scope requests to sales channels.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The API key's type. `secret` API keys are used for authenticating admin users, and `publishable` API key are used for storefronts and similar clients to scope requests to sales channels.
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
     * The date the API key was last used.
     *
     * @return \DateTime|null
     */
    public function getLastUsedAt(): ?\DateTime
    {
        return $this->lastUsedAt;
    }
    /**
     * The date the API key was last used.
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
     * The ID of the user that created the API key.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created the API key.
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
     * The date the API key was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the API key was created.
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
     * The ID of the user that revoked the API key.
     *
     * @return string|null
     */
    public function getRevokedBy(): ?string
    {
        return $this->revokedBy;
    }
    /**
     * The ID of the user that revoked the API key.
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
     * The date the API key was revoked.
     *
     * @return \DateTime|null
     */
    public function getRevokedAt(): ?\DateTime
    {
        return $this->revokedAt;
    }
    /**
     * The date the API key was revoked.
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
}