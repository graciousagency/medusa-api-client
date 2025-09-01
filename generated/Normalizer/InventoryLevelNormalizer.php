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
class InventoryLevelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\InventoryLevel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\InventoryLevel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\InventoryLevel();
        if (\array_key_exists('stocked_quantity', $data) && \is_int($data['stocked_quantity'])) {
            $data['stocked_quantity'] = (double) $data['stocked_quantity'];
        }
        if (\array_key_exists('reserved_quantity', $data) && \is_int($data['reserved_quantity'])) {
            $data['reserved_quantity'] = (double) $data['reserved_quantity'];
        }
        if (\array_key_exists('available_quantity', $data) && \is_int($data['available_quantity'])) {
            $data['available_quantity'] = (double) $data['available_quantity'];
        }
        if (\array_key_exists('incoming_quantity', $data) && \is_int($data['incoming_quantity'])) {
            $data['incoming_quantity'] = (double) $data['incoming_quantity'];
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
        if (\array_key_exists('inventory_item_id', $data) && $data['inventory_item_id'] !== null) {
            $object->setInventoryItemId($data['inventory_item_id']);
            unset($data['inventory_item_id']);
        }
        elseif (\array_key_exists('inventory_item_id', $data) && $data['inventory_item_id'] === null) {
            $object->setInventoryItemId(null);
        }
        if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
            $object->setLocationId($data['location_id']);
            unset($data['location_id']);
        }
        elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
            $object->setLocationId(null);
        }
        if (\array_key_exists('stocked_quantity', $data) && $data['stocked_quantity'] !== null) {
            $object->setStockedQuantity($data['stocked_quantity']);
            unset($data['stocked_quantity']);
        }
        elseif (\array_key_exists('stocked_quantity', $data) && $data['stocked_quantity'] === null) {
            $object->setStockedQuantity(null);
        }
        if (\array_key_exists('reserved_quantity', $data) && $data['reserved_quantity'] !== null) {
            $object->setReservedQuantity($data['reserved_quantity']);
            unset($data['reserved_quantity']);
        }
        elseif (\array_key_exists('reserved_quantity', $data) && $data['reserved_quantity'] === null) {
            $object->setReservedQuantity(null);
        }
        if (\array_key_exists('available_quantity', $data) && $data['available_quantity'] !== null) {
            $object->setAvailableQuantity($data['available_quantity']);
            unset($data['available_quantity']);
        }
        elseif (\array_key_exists('available_quantity', $data) && $data['available_quantity'] === null) {
            $object->setAvailableQuantity(null);
        }
        if (\array_key_exists('incoming_quantity', $data) && $data['incoming_quantity'] !== null) {
            $object->setIncomingQuantity($data['incoming_quantity']);
            unset($data['incoming_quantity']);
        }
        elseif (\array_key_exists('incoming_quantity', $data) && $data['incoming_quantity'] === null) {
            $object->setIncomingQuantity(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['inventory_item_id'] = $data->getInventoryItemId();
        $dataArray['location_id'] = $data->getLocationId();
        $dataArray['stocked_quantity'] = $data->getStockedQuantity();
        $dataArray['reserved_quantity'] = $data->getReservedQuantity();
        $dataArray['available_quantity'] = $data->getAvailableQuantity();
        $dataArray['incoming_quantity'] = $data->getIncomingQuantity();
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values = [];
            foreach ($data->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['metadata'] = $values;
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\InventoryLevel::class => false];
    }
}