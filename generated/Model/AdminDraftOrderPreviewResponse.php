<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminDraftOrderPreviewResponse extends \ArrayObject
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
     * The draft order preview's details.
     *
     * @var AdminDraftOrderPreview|null
     */
    protected $draftOrderPreview;
    /**
     * The draft order preview's details.
     *
     * @return AdminDraftOrderPreview|null
     */
    public function getDraftOrderPreview(): ?AdminDraftOrderPreview
    {
        return $this->draftOrderPreview;
    }
    /**
     * The draft order preview's details.
     *
     * @param AdminDraftOrderPreview|null $draftOrderPreview
     *
     * @return self
     */
    public function setDraftOrderPreview(?AdminDraftOrderPreview $draftOrderPreview): self
    {
        $this->initialized['draftOrderPreview'] = true;
        $this->draftOrderPreview = $draftOrderPreview;
        return $this;
    }
}