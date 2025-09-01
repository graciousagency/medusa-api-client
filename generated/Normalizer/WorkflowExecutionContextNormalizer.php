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
class WorkflowExecutionContextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContext::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContext::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContext();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $object->setData($this->denormalizer->denormalize($data['data'], \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextData::class, 'json', $context));
            unset($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('compensate', $data) && $data['compensate'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['compensate'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCompensate($values);
            unset($data['compensate']);
        }
        elseif (\array_key_exists('compensate', $data) && $data['compensate'] === null) {
            $object->setCompensate(null);
        }
        if (\array_key_exists('errors', $data) && $data['errors'] !== null) {
            $values_1 = [];
            foreach ($data['errors'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextErrorsItem::class, 'json', $context);
            }
            $object->setErrors($values_1);
            unset($data['errors']);
        }
        elseif (\array_key_exists('errors', $data) && $data['errors'] === null) {
            $object->setErrors(null);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $dataArray['data'] = $this->normalizer->normalize($data->getData(), 'json', $context);
        }
        $values = [];
        foreach ($data->getCompensate() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['compensate'] = $values;
        $values_1 = [];
        foreach ($data->getErrors() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['errors'] = $values_1;
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContext::class => false];
    }
}