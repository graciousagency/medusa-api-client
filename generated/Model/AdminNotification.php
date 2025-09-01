<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminNotification extends \ArrayObject
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
     * The notification's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Where to send the notification to. For example, if `channel` is `email`, this can be an email number.
     *
     * @var string|null
     */
    protected $to;
    /**
     * Through which channel is the notification sent through.
     *
     * @var string|null
     */
    protected $channel;
    /**
     * The ID of the template in a third-party service used as the notification's shape.
     *
     * @var string|null
     */
    protected $template;
    /**
     * Data payload to send with the notification.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * What triggered this notification.
     *
     * @var string|null
     */
    protected $triggerType;
    /**
     * The ID of the associated resource. For example, if the notification was triggered because an order was created, this would be the ID of the order.
     *
     * @var string|null
     */
    protected $resourceId;
    /**
     * The type of the resource that triggered the notification.
     *
     * @var string|null
     */
    protected $resourceType;
    /**
     * The ID of the user or customer that's receiving this notification.
     *
     * @var string|null
     */
    protected $receiverId;
    /**
     * The ID of the original notification, if this notification is resent.
     *
     * @var string|null
     */
    protected $originalNotificationId;
    /**
     * The ID of the notification in an external or third-party system.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * The ID of the provider used to send the notification.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The date the notification was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The notification's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The notification's ID.
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
     * Where to send the notification to. For example, if `channel` is `email`, this can be an email number.
     *
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Where to send the notification to. For example, if `channel` is `email`, this can be an email number.
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
    /**
     * Through which channel is the notification sent through.
     *
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }
    /**
     * Through which channel is the notification sent through.
     *
     * @param string|null $channel
     *
     * @return self
     */
    public function setChannel(?string $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;
        return $this;
    }
    /**
     * The ID of the template in a third-party service used as the notification's shape.
     *
     * @return string|null
     */
    public function getTemplate(): ?string
    {
        return $this->template;
    }
    /**
     * The ID of the template in a third-party service used as the notification's shape.
     *
     * @param string|null $template
     *
     * @return self
     */
    public function setTemplate(?string $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
        return $this;
    }
    /**
     * Data payload to send with the notification.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * Data payload to send with the notification.
     *
     * @param array<string, mixed>|null $data
     *
     * @return self
     */
    public function setData(?iterable $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * What triggered this notification.
     *
     * @return string|null
     */
    public function getTriggerType(): ?string
    {
        return $this->triggerType;
    }
    /**
     * What triggered this notification.
     *
     * @param string|null $triggerType
     *
     * @return self
     */
    public function setTriggerType(?string $triggerType): self
    {
        $this->initialized['triggerType'] = true;
        $this->triggerType = $triggerType;
        return $this;
    }
    /**
     * The ID of the associated resource. For example, if the notification was triggered because an order was created, this would be the ID of the order.
     *
     * @return string|null
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }
    /**
     * The ID of the associated resource. For example, if the notification was triggered because an order was created, this would be the ID of the order.
     *
     * @param string|null $resourceId
     *
     * @return self
     */
    public function setResourceId(?string $resourceId): self
    {
        $this->initialized['resourceId'] = true;
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * The type of the resource that triggered the notification.
     *
     * @return string|null
     */
    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }
    /**
     * The type of the resource that triggered the notification.
     *
     * @param string|null $resourceType
     *
     * @return self
     */
    public function setResourceType(?string $resourceType): self
    {
        $this->initialized['resourceType'] = true;
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * The ID of the user or customer that's receiving this notification.
     *
     * @return string|null
     */
    public function getReceiverId(): ?string
    {
        return $this->receiverId;
    }
    /**
     * The ID of the user or customer that's receiving this notification.
     *
     * @param string|null $receiverId
     *
     * @return self
     */
    public function setReceiverId(?string $receiverId): self
    {
        $this->initialized['receiverId'] = true;
        $this->receiverId = $receiverId;
        return $this;
    }
    /**
     * The ID of the original notification, if this notification is resent.
     *
     * @return string|null
     */
    public function getOriginalNotificationId(): ?string
    {
        return $this->originalNotificationId;
    }
    /**
     * The ID of the original notification, if this notification is resent.
     *
     * @param string|null $originalNotificationId
     *
     * @return self
     */
    public function setOriginalNotificationId(?string $originalNotificationId): self
    {
        $this->initialized['originalNotificationId'] = true;
        $this->originalNotificationId = $originalNotificationId;
        return $this;
    }
    /**
     * The ID of the notification in an external or third-party system.
     *
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * The ID of the notification in an external or third-party system.
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * The ID of the provider used to send the notification.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the provider used to send the notification.
     *
     * @param string|null $providerId
     *
     * @return self
     */
    public function setProviderId(?string $providerId): self
    {
        $this->initialized['providerId'] = true;
        $this->providerId = $providerId;
        return $this;
    }
    /**
     * The date the notification was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the notification was created.
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
}