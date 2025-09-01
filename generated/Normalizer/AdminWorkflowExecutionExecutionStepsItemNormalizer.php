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
class AdminWorkflowExecutionExecutionStepsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItem();
        if (\array_key_exists('depth', $data) && \is_int($data['depth'])) {
            $data['depth'] = (double) $data['depth'];
        }
        if (\array_key_exists('startedAt', $data) && \is_int($data['startedAt'])) {
            $data['startedAt'] = (double) $data['startedAt'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('invoke', $data) && $data['invoke'] !== null) {
            $object->setInvoke($this->denormalizer->denormalize($data['invoke'], \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemInvoke::class, 'json', $context));
            unset($data['invoke']);
        }
        elseif (\array_key_exists('invoke', $data) && $data['invoke'] === null) {
            $object->setInvoke(null);
        }
        if (\array_key_exists('definition', $data) && $data['definition'] !== null) {
            $object->setDefinition($this->denormalizer->denormalize($data['definition'], \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemDefinition::class, 'json', $context));
            unset($data['definition']);
        }
        elseif (\array_key_exists('definition', $data) && $data['definition'] === null) {
            $object->setDefinition(null);
        }
        if (\array_key_exists('compensate', $data) && $data['compensate'] !== null) {
            $object->setCompensate($this->denormalizer->denormalize($data['compensate'], \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemCompensate::class, 'json', $context));
            unset($data['compensate']);
        }
        elseif (\array_key_exists('compensate', $data) && $data['compensate'] === null) {
            $object->setCompensate(null);
        }
        if (\array_key_exists('depth', $data) && $data['depth'] !== null) {
            $object->setDepth($data['depth']);
            unset($data['depth']);
        }
        elseif (\array_key_exists('depth', $data) && $data['depth'] === null) {
            $object->setDepth(null);
        }
        if (\array_key_exists('startedAt', $data) && $data['startedAt'] !== null) {
            $object->setStartedAt($data['startedAt']);
            unset($data['startedAt']);
        }
        elseif (\array_key_exists('startedAt', $data) && $data['startedAt'] === null) {
            $object->setStartedAt(null);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('invoke') && null !== $data->getInvoke()) {
            $dataArray['invoke'] = $this->normalizer->normalize($data->getInvoke(), 'json', $context);
        }
        if ($data->isInitialized('definition') && null !== $data->getDefinition()) {
            $dataArray['definition'] = $this->normalizer->normalize($data->getDefinition(), 'json', $context);
        }
        if ($data->isInitialized('compensate') && null !== $data->getCompensate()) {
            $dataArray['compensate'] = $this->normalizer->normalize($data->getCompensate(), 'json', $context);
        }
        if ($data->isInitialized('depth') && null !== $data->getDepth()) {
            $dataArray['depth'] = $data->getDepth();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['startedAt'] = $data->getStartedAt();
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItem::class => false];
    }
}