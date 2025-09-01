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
class AdminCreateWorkflowsAsyncResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('transaction_id', $data) && $data['transaction_id'] !== null) {
            $object->setTransactionId($data['transaction_id']);
            unset($data['transaction_id']);
        }
        elseif (\array_key_exists('transaction_id', $data) && $data['transaction_id'] === null) {
            $object->setTransactionId(null);
        }
        if (\array_key_exists('step_id', $data) && $data['step_id'] !== null) {
            $object->setStepId($data['step_id']);
            unset($data['step_id']);
        }
        elseif (\array_key_exists('step_id', $data) && $data['step_id'] === null) {
            $object->setStepId(null);
        }
        if (\array_key_exists('response', $data) && $data['response'] !== null) {
            $object->setResponse($data['response']);
            unset($data['response']);
        }
        elseif (\array_key_exists('response', $data) && $data['response'] === null) {
            $object->setResponse(null);
        }
        if (\array_key_exists('compensate_input', $data) && $data['compensate_input'] !== null) {
            $object->setCompensateInput($data['compensate_input']);
            unset($data['compensate_input']);
        }
        elseif (\array_key_exists('compensate_input', $data) && $data['compensate_input'] === null) {
            $object->setCompensateInput(null);
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $object->setAction($data['action']);
            unset($data['action']);
        }
        elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->setAction(null);
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
        $dataArray['transaction_id'] = $data->getTransactionId();
        $dataArray['step_id'] = $data->getStepId();
        if ($data->isInitialized('response') && null !== $data->getResponse()) {
            $dataArray['response'] = $data->getResponse();
        }
        if ($data->isInitialized('compensateInput') && null !== $data->getCompensateInput()) {
            $dataArray['compensate_input'] = $data->getCompensateInput();
        }
        if ($data->isInitialized('action') && null !== $data->getAction()) {
            $dataArray['action'] = $data->getAction();
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse::class => false];
    }
}