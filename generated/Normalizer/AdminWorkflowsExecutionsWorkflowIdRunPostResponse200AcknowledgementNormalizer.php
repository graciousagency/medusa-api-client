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
class AdminWorkflowsExecutionsWorkflowIdRunPostResponse200AcknowledgementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement();
        if (\array_key_exists('hasFinished', $data) && \is_int($data['hasFinished'])) {
            $data['hasFinished'] = (bool) $data['hasFinished'];
        }
        if (\array_key_exists('hasFailed', $data) && \is_int($data['hasFailed'])) {
            $data['hasFailed'] = (bool) $data['hasFailed'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('workflowId', $data) && $data['workflowId'] !== null) {
            $object->setWorkflowId($data['workflowId']);
            unset($data['workflowId']);
        }
        elseif (\array_key_exists('workflowId', $data) && $data['workflowId'] === null) {
            $object->setWorkflowId(null);
        }
        if (\array_key_exists('transactionId', $data) && $data['transactionId'] !== null) {
            $object->setTransactionId($data['transactionId']);
            unset($data['transactionId']);
        }
        elseif (\array_key_exists('transactionId', $data) && $data['transactionId'] === null) {
            $object->setTransactionId(null);
        }
        if (\array_key_exists('parentStepIdempotencyKey', $data) && $data['parentStepIdempotencyKey'] !== null) {
            $object->setParentStepIdempotencyKey($data['parentStepIdempotencyKey']);
            unset($data['parentStepIdempotencyKey']);
        }
        elseif (\array_key_exists('parentStepIdempotencyKey', $data) && $data['parentStepIdempotencyKey'] === null) {
            $object->setParentStepIdempotencyKey(null);
        }
        if (\array_key_exists('hasFinished', $data) && $data['hasFinished'] !== null) {
            $object->setHasFinished($data['hasFinished']);
            unset($data['hasFinished']);
        }
        elseif (\array_key_exists('hasFinished', $data) && $data['hasFinished'] === null) {
            $object->setHasFinished(null);
        }
        if (\array_key_exists('hasFailed', $data) && $data['hasFailed'] !== null) {
            $object->setHasFailed($data['hasFailed']);
            unset($data['hasFailed']);
        }
        elseif (\array_key_exists('hasFailed', $data) && $data['hasFailed'] === null) {
            $object->setHasFailed(null);
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
        $dataArray['workflowId'] = $data->getWorkflowId();
        $dataArray['transactionId'] = $data->getTransactionId();
        if ($data->isInitialized('parentStepIdempotencyKey') && null !== $data->getParentStepIdempotencyKey()) {
            $dataArray['parentStepIdempotencyKey'] = $data->getParentStepIdempotencyKey();
        }
        $dataArray['hasFinished'] = $data->getHasFinished();
        $dataArray['hasFailed'] = $data->getHasFailed();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement::class => false];
    }
}