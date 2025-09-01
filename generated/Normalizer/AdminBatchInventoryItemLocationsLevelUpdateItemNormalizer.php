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
class AdminBatchInventoryItemLocationsLevelUpdateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevelUpdateItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevelUpdateItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevelUpdateItem();
        if (\array_key_exists('stocked_quantity', $data) && \is_int($data['stocked_quantity'])) {
            $data['stocked_quantity'] = (double) $data['stocked_quantity'];
        }
        if (\array_key_exists('incoming_quantity', $data) && \is_int($data['incoming_quantity'])) {
            $data['incoming_quantity'] = (double) $data['incoming_quantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stocked_quantity', $data) && $data['stocked_quantity'] !== null) {
            $object->setStockedQuantity($data['stocked_quantity']);
            unset($data['stocked_quantity']);
        }
        elseif (\array_key_exists('stocked_quantity', $data) && $data['stocked_quantity'] === null) {
            $object->setStockedQuantity(null);
        }
        if (\array_key_exists('incoming_quantity', $data) && $data['incoming_quantity'] !== null) {
            $object->setIncomingQuantity($data['incoming_quantity']);
            unset($data['incoming_quantity']);
        }
        elseif (\array_key_exists('incoming_quantity', $data) && $data['incoming_quantity'] === null) {
            $object->setIncomingQuantity(null);
        }
        if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
            $object->setLocationId($data['location_id']);
            unset($data['location_id']);
        }
        elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
            $object->setLocationId(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
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
        if ($data->isInitialized('stockedQuantity') && null !== $data->getStockedQuantity()) {
            $dataArray['stocked_quantity'] = $data->getStockedQuantity();
        }
        if ($data->isInitialized('incomingQuantity') && null !== $data->getIncomingQuantity()) {
            $dataArray['incoming_quantity'] = $data->getIncomingQuantity();
        }
        $dataArray['location_id'] = $data->getLocationId();
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevelUpdateItem::class => false];
    }
}