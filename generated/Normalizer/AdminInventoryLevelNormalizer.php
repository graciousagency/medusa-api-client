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
class AdminInventoryLevelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminInventoryLevel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminInventoryLevel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminInventoryLevel();
        if (\array_key_exists('stocked_quantity', $data) && \is_int($data['stocked_quantity'])) {
            $data['stocked_quantity'] = (double) $data['stocked_quantity'];
        }
        if (\array_key_exists('reserved_quantity', $data) && \is_int($data['reserved_quantity'])) {
            $data['reserved_quantity'] = (double) $data['reserved_quantity'];
        }
        if (\array_key_exists('incoming_quantity', $data) && \is_int($data['incoming_quantity'])) {
            $data['incoming_quantity'] = (double) $data['incoming_quantity'];
        }
        if (\array_key_exists('available_quantity', $data) && \is_int($data['available_quantity'])) {
            $data['available_quantity'] = (double) $data['available_quantity'];
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
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['created_at']));
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['updated_at']));
            unset($data['updated_at']);
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
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
        if (\array_key_exists('inventory_item', $data) && $data['inventory_item'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['inventory_item'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setInventoryItem($values_1);
            unset($data['inventory_item']);
        }
        elseif (\array_key_exists('inventory_item', $data) && $data['inventory_item'] === null) {
            $object->setInventoryItem(null);
        }
        if (\array_key_exists('available_quantity', $data) && $data['available_quantity'] !== null) {
            $object->setAvailableQuantity($data['available_quantity']);
            unset($data['available_quantity']);
        }
        elseif (\array_key_exists('available_quantity', $data) && $data['available_quantity'] === null) {
            $object->setAvailableQuantity(null);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['inventory_item_id'] = $data->getInventoryItemId();
        $dataArray['location_id'] = $data->getLocationId();
        $dataArray['stocked_quantity'] = $data->getStockedQuantity();
        $dataArray['reserved_quantity'] = $data->getReservedQuantity();
        $dataArray['incoming_quantity'] = $data->getIncomingQuantity();
        $values = [];
        foreach ($data->getMetadata() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['metadata'] = $values;
        if ($data->isInitialized('inventoryItem') && null !== $data->getInventoryItem()) {
            $values_1 = [];
            foreach ($data->getInventoryItem() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['inventory_item'] = $values_1;
        }
        $dataArray['available_quantity'] = $data->getAvailableQuantity();
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminInventoryLevel::class => false];
    }
}
