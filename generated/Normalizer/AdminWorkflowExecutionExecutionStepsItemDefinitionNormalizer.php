<?php

namespace Gracious\MedusaApiClientBundle\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gracious\MedusaApiClientBundle\Runtime\Normalizer\CheckArray;
use Gracious\MedusaApiClientBundle\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AdminWorkflowExecutionExecutionStepsItemDefinitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemDefinition::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemDefinition::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemDefinition();
        if (\array_key_exists('maxRetries', $data) && \is_int($data['maxRetries'])) {
            $data['maxRetries'] = (double) $data['maxRetries'];
        }
        if (\array_key_exists('retryInterval', $data) && \is_int($data['retryInterval'])) {
            $data['retryInterval'] = (double) $data['retryInterval'];
        }
        if (\array_key_exists('retryIntervalAwaiting', $data) && \is_int($data['retryIntervalAwaiting'])) {
            $data['retryIntervalAwaiting'] = (double) $data['retryIntervalAwaiting'];
        }
        if (\array_key_exists('timeout', $data) && \is_int($data['timeout'])) {
            $data['timeout'] = (double) $data['timeout'];
        }
        if (\array_key_exists('async', $data) && \is_int($data['async'])) {
            $data['async'] = (bool) $data['async'];
        }
        if (\array_key_exists('compensateAsync', $data) && \is_int($data['compensateAsync'])) {
            $data['compensateAsync'] = (bool) $data['compensateAsync'];
        }
        if (\array_key_exists('noCompensation', $data) && \is_int($data['noCompensation'])) {
            $data['noCompensation'] = (bool) $data['noCompensation'];
        }
        if (\array_key_exists('continueOnPermanentFailure', $data) && \is_int($data['continueOnPermanentFailure'])) {
            $data['continueOnPermanentFailure'] = (bool) $data['continueOnPermanentFailure'];
        }
        if (\array_key_exists('noWait', $data) && \is_int($data['noWait'])) {
            $data['noWait'] = (bool) $data['noWait'];
        }
        if (\array_key_exists('saveResponse', $data) && \is_int($data['saveResponse'])) {
            $data['saveResponse'] = (bool) $data['saveResponse'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('async', $data) && $data['async'] !== null) {
            $object->setAsync($data['async']);
            unset($data['async']);
        }
        elseif (\array_key_exists('async', $data) && $data['async'] === null) {
            $object->setAsync(null);
        }
        if (\array_key_exists('compensateAsync', $data) && $data['compensateAsync'] !== null) {
            $object->setCompensateAsync($data['compensateAsync']);
            unset($data['compensateAsync']);
        }
        elseif (\array_key_exists('compensateAsync', $data) && $data['compensateAsync'] === null) {
            $object->setCompensateAsync(null);
        }
        if (\array_key_exists('noCompensation', $data) && $data['noCompensation'] !== null) {
            $object->setNoCompensation($data['noCompensation']);
            unset($data['noCompensation']);
        }
        elseif (\array_key_exists('noCompensation', $data) && $data['noCompensation'] === null) {
            $object->setNoCompensation(null);
        }
        if (\array_key_exists('continueOnPermanentFailure', $data) && $data['continueOnPermanentFailure'] !== null) {
            $object->setContinueOnPermanentFailure($data['continueOnPermanentFailure']);
            unset($data['continueOnPermanentFailure']);
        }
        elseif (\array_key_exists('continueOnPermanentFailure', $data) && $data['continueOnPermanentFailure'] === null) {
            $object->setContinueOnPermanentFailure(null);
        }
        if (\array_key_exists('skipOnPermanentFailure', $data) && $data['skipOnPermanentFailure'] !== null) {
            $object->setSkipOnPermanentFailure($data['skipOnPermanentFailure']);
            unset($data['skipOnPermanentFailure']);
        }
        elseif (\array_key_exists('skipOnPermanentFailure', $data) && $data['skipOnPermanentFailure'] === null) {
            $object->setSkipOnPermanentFailure(null);
        }
        if (\array_key_exists('maxRetries', $data) && $data['maxRetries'] !== null) {
            $object->setMaxRetries($data['maxRetries']);
            unset($data['maxRetries']);
        }
        elseif (\array_key_exists('maxRetries', $data) && $data['maxRetries'] === null) {
            $object->setMaxRetries(null);
        }
        if (\array_key_exists('noWait', $data) && $data['noWait'] !== null) {
            $object->setNoWait($data['noWait']);
            unset($data['noWait']);
        }
        elseif (\array_key_exists('noWait', $data) && $data['noWait'] === null) {
            $object->setNoWait(null);
        }
        if (\array_key_exists('retryInterval', $data) && $data['retryInterval'] !== null) {
            $object->setRetryInterval($data['retryInterval']);
            unset($data['retryInterval']);
        }
        elseif (\array_key_exists('retryInterval', $data) && $data['retryInterval'] === null) {
            $object->setRetryInterval(null);
        }
        if (\array_key_exists('retryIntervalAwaiting', $data) && $data['retryIntervalAwaiting'] !== null) {
            $object->setRetryIntervalAwaiting($data['retryIntervalAwaiting']);
            unset($data['retryIntervalAwaiting']);
        }
        elseif (\array_key_exists('retryIntervalAwaiting', $data) && $data['retryIntervalAwaiting'] === null) {
            $object->setRetryIntervalAwaiting(null);
        }
        if (\array_key_exists('saveResponse', $data) && $data['saveResponse'] !== null) {
            $object->setSaveResponse($data['saveResponse']);
            unset($data['saveResponse']);
        }
        elseif (\array_key_exists('saveResponse', $data) && $data['saveResponse'] === null) {
            $object->setSaveResponse(null);
        }
        if (\array_key_exists('timeout', $data) && $data['timeout'] !== null) {
            $object->setTimeout($data['timeout']);
            unset($data['timeout']);
        }
        elseif (\array_key_exists('timeout', $data) && $data['timeout'] === null) {
            $object->setTimeout(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('async') && null !== $data->getAsync()) {
            $dataArray['async'] = $data->getAsync();
        }
        if ($data->isInitialized('compensateAsync') && null !== $data->getCompensateAsync()) {
            $dataArray['compensateAsync'] = $data->getCompensateAsync();
        }
        if ($data->isInitialized('noCompensation') && null !== $data->getNoCompensation()) {
            $dataArray['noCompensation'] = $data->getNoCompensation();
        }
        if ($data->isInitialized('continueOnPermanentFailure') && null !== $data->getContinueOnPermanentFailure()) {
            $dataArray['continueOnPermanentFailure'] = $data->getContinueOnPermanentFailure();
        }
        if ($data->isInitialized('skipOnPermanentFailure') && null !== $data->getSkipOnPermanentFailure()) {
            $dataArray['skipOnPermanentFailure'] = $data->getSkipOnPermanentFailure();
        }
        if ($data->isInitialized('maxRetries') && null !== $data->getMaxRetries()) {
            $dataArray['maxRetries'] = $data->getMaxRetries();
        }
        if ($data->isInitialized('noWait') && null !== $data->getNoWait()) {
            $dataArray['noWait'] = $data->getNoWait();
        }
        if ($data->isInitialized('retryInterval') && null !== $data->getRetryInterval()) {
            $dataArray['retryInterval'] = $data->getRetryInterval();
        }
        if ($data->isInitialized('retryIntervalAwaiting') && null !== $data->getRetryIntervalAwaiting()) {
            $dataArray['retryIntervalAwaiting'] = $data->getRetryIntervalAwaiting();
        }
        if ($data->isInitialized('saveResponse') && null !== $data->getSaveResponse()) {
            $dataArray['saveResponse'] = $data->getSaveResponse();
        }
        if ($data->isInitialized('timeout') && null !== $data->getTimeout()) {
            $dataArray['timeout'] = $data->getTimeout();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemDefinition::class => false];
    }
}