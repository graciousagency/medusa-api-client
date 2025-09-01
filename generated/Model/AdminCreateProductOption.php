<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateProductOption extends \ArrayObject
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
     * The product option's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The product option's values.
     *
     * @var list<string>|null
     */
    protected $values;
    /**
     * The product option's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The product option's title.
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
     * The product option's values.
     *
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * The product option's values.
     *
     * @param list<string>|null $values
     *
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}