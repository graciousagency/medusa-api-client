<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowExecutionExecutionStepsItemDefinition extends \ArrayObject
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
     * Whether the step is async.
     *
     * @var bool|null
     */
    protected $async;
    /**
     * Whether the compensation function of the step is async.
     *
     * @var bool|null
     */
    protected $compensateAsync;
    /**
     * Whether the step doesn't have a compensation function.
     *
     * @var bool|null
     */
    protected $noCompensation;
    /**
     * Whether the workflow should continue executing even if its status is changed to failed.
     *
     * @var bool|null
     */
    protected $continueOnPermanentFailure;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $skipOnPermanentFailure;
    /**
     * The maximum number of times to retry the step.
     *
     * @var float|null
     */
    protected $maxRetries;
    /**
     * Whether the workflow shouldn't wait for the step to finish before moving to the next step.
     *
     * @var bool|null
     */
    protected $noWait = false;
    /**
     * The interval in seconds between retry attempts when the step fails.
     *
     * @var float|null
     */
    protected $retryInterval;
    /**
     * The interval in seconds to retry a step even if its status is `waiting_response`.
     *
     * @var float|null
     */
    protected $retryIntervalAwaiting;
    /**
     * Whether the step's response is stored.
     *
     * @var bool|null
     */
    protected $saveResponse;
    /**
     * The maximum time in seconds to wait for this step to complete. If the step exceeds this time, the step's state is changed to `timeout`, but the step continues executing.
     *
     * @var float|null
     */
    protected $timeout;
    /**
     * Whether the step is async.
     *
     * @return bool|null
     */
    public function getAsync(): ?bool
    {
        return $this->async;
    }
    /**
     * Whether the step is async.
     *
     * @param bool|null $async
     *
     * @return self
     */
    public function setAsync(?bool $async): self
    {
        $this->initialized['async'] = true;
        $this->async = $async;
        return $this;
    }
    /**
     * Whether the compensation function of the step is async.
     *
     * @return bool|null
     */
    public function getCompensateAsync(): ?bool
    {
        return $this->compensateAsync;
    }
    /**
     * Whether the compensation function of the step is async.
     *
     * @param bool|null $compensateAsync
     *
     * @return self
     */
    public function setCompensateAsync(?bool $compensateAsync): self
    {
        $this->initialized['compensateAsync'] = true;
        $this->compensateAsync = $compensateAsync;
        return $this;
    }
    /**
     * Whether the step doesn't have a compensation function.
     *
     * @return bool|null
     */
    public function getNoCompensation(): ?bool
    {
        return $this->noCompensation;
    }
    /**
     * Whether the step doesn't have a compensation function.
     *
     * @param bool|null $noCompensation
     *
     * @return self
     */
    public function setNoCompensation(?bool $noCompensation): self
    {
        $this->initialized['noCompensation'] = true;
        $this->noCompensation = $noCompensation;
        return $this;
    }
    /**
     * Whether the workflow should continue executing even if its status is changed to failed.
     *
     * @return bool|null
     */
    public function getContinueOnPermanentFailure(): ?bool
    {
        return $this->continueOnPermanentFailure;
    }
    /**
     * Whether the workflow should continue executing even if its status is changed to failed.
     *
     * @param bool|null $continueOnPermanentFailure
     *
     * @return self
     */
    public function setContinueOnPermanentFailure(?bool $continueOnPermanentFailure): self
    {
        $this->initialized['continueOnPermanentFailure'] = true;
        $this->continueOnPermanentFailure = $continueOnPermanentFailure;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSkipOnPermanentFailure()
    {
        return $this->skipOnPermanentFailure;
    }
    /**
     * 
     *
     * @param mixed $skipOnPermanentFailure
     *
     * @return self
     */
    public function setSkipOnPermanentFailure($skipOnPermanentFailure): self
    {
        $this->initialized['skipOnPermanentFailure'] = true;
        $this->skipOnPermanentFailure = $skipOnPermanentFailure;
        return $this;
    }
    /**
     * The maximum number of times to retry the step.
     *
     * @return float|null
     */
    public function getMaxRetries(): ?float
    {
        return $this->maxRetries;
    }
    /**
     * The maximum number of times to retry the step.
     *
     * @param float|null $maxRetries
     *
     * @return self
     */
    public function setMaxRetries(?float $maxRetries): self
    {
        $this->initialized['maxRetries'] = true;
        $this->maxRetries = $maxRetries;
        return $this;
    }
    /**
     * Whether the workflow shouldn't wait for the step to finish before moving to the next step.
     *
     * @return bool|null
     */
    public function getNoWait(): ?bool
    {
        return $this->noWait;
    }
    /**
     * Whether the workflow shouldn't wait for the step to finish before moving to the next step.
     *
     * @param bool|null $noWait
     *
     * @return self
     */
    public function setNoWait(?bool $noWait): self
    {
        $this->initialized['noWait'] = true;
        $this->noWait = $noWait;
        return $this;
    }
    /**
     * The interval in seconds between retry attempts when the step fails.
     *
     * @return float|null
     */
    public function getRetryInterval(): ?float
    {
        return $this->retryInterval;
    }
    /**
     * The interval in seconds between retry attempts when the step fails.
     *
     * @param float|null $retryInterval
     *
     * @return self
     */
    public function setRetryInterval(?float $retryInterval): self
    {
        $this->initialized['retryInterval'] = true;
        $this->retryInterval = $retryInterval;
        return $this;
    }
    /**
     * The interval in seconds to retry a step even if its status is `waiting_response`.
     *
     * @return float|null
     */
    public function getRetryIntervalAwaiting(): ?float
    {
        return $this->retryIntervalAwaiting;
    }
    /**
     * The interval in seconds to retry a step even if its status is `waiting_response`.
     *
     * @param float|null $retryIntervalAwaiting
     *
     * @return self
     */
    public function setRetryIntervalAwaiting(?float $retryIntervalAwaiting): self
    {
        $this->initialized['retryIntervalAwaiting'] = true;
        $this->retryIntervalAwaiting = $retryIntervalAwaiting;
        return $this;
    }
    /**
     * Whether the step's response is stored.
     *
     * @return bool|null
     */
    public function getSaveResponse(): ?bool
    {
        return $this->saveResponse;
    }
    /**
     * Whether the step's response is stored.
     *
     * @param bool|null $saveResponse
     *
     * @return self
     */
    public function setSaveResponse(?bool $saveResponse): self
    {
        $this->initialized['saveResponse'] = true;
        $this->saveResponse = $saveResponse;
        return $this;
    }
    /**
     * The maximum time in seconds to wait for this step to complete. If the step exceeds this time, the step's state is changed to `timeout`, but the step continues executing.
     *
     * @return float|null
     */
    public function getTimeout(): ?float
    {
        return $this->timeout;
    }
    /**
     * The maximum time in seconds to wait for this step to complete. If the step exceeds this time, the step's state is changed to `timeout`, but the step continues executing.
     *
     * @param float|null $timeout
     *
     * @return self
     */
    public function setTimeout(?float $timeout): self
    {
        $this->initialized['timeout'] = true;
        $this->timeout = $timeout;
        return $this;
    }
}