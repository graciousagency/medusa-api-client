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
class StoreOrderLineItemAdjustmentsItemitemDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemDetail();
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (double) $data['quantity'];
        }
        if (\array_key_exists('fulfilled_quantity', $data) && \is_int($data['fulfilled_quantity'])) {
            $data['fulfilled_quantity'] = (double) $data['fulfilled_quantity'];
        }
        if (\array_key_exists('delivered_quantity', $data) && \is_int($data['delivered_quantity'])) {
            $data['delivered_quantity'] = (double) $data['delivered_quantity'];
        }
        if (\array_key_exists('shipped_quantity', $data) && \is_int($data['shipped_quantity'])) {
            $data['shipped_quantity'] = (double) $data['shipped_quantity'];
        }
        if (\array_key_exists('return_requested_quantity', $data) && \is_int($data['return_requested_quantity'])) {
            $data['return_requested_quantity'] = (double) $data['return_requested_quantity'];
        }
        if (\array_key_exists('return_received_quantity', $data) && \is_int($data['return_received_quantity'])) {
            $data['return_received_quantity'] = (double) $data['return_received_quantity'];
        }
        if (\array_key_exists('return_dismissed_quantity', $data) && \is_int($data['return_dismissed_quantity'])) {
            $data['return_dismissed_quantity'] = (double) $data['return_dismissed_quantity'];
        }
        if (\array_key_exists('written_off_quantity', $data) && \is_int($data['written_off_quantity'])) {
            $data['written_off_quantity'] = (double) $data['written_off_quantity'];
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
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
            unset($data['item_id']);
        }
        elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('item', $data) && $data['item'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['item'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setItem($values);
            unset($data['item']);
        }
        elseif (\array_key_exists('item', $data) && $data['item'] === null) {
            $object->setItem(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('fulfilled_quantity', $data) && $data['fulfilled_quantity'] !== null) {
            $object->setFulfilledQuantity($data['fulfilled_quantity']);
            unset($data['fulfilled_quantity']);
        }
        elseif (\array_key_exists('fulfilled_quantity', $data) && $data['fulfilled_quantity'] === null) {
            $object->setFulfilledQuantity(null);
        }
        if (\array_key_exists('delivered_quantity', $data) && $data['delivered_quantity'] !== null) {
            $object->setDeliveredQuantity($data['delivered_quantity']);
            unset($data['delivered_quantity']);
        }
        elseif (\array_key_exists('delivered_quantity', $data) && $data['delivered_quantity'] === null) {
            $object->setDeliveredQuantity(null);
        }
        if (\array_key_exists('shipped_quantity', $data) && $data['shipped_quantity'] !== null) {
            $object->setShippedQuantity($data['shipped_quantity']);
            unset($data['shipped_quantity']);
        }
        elseif (\array_key_exists('shipped_quantity', $data) && $data['shipped_quantity'] === null) {
            $object->setShippedQuantity(null);
        }
        if (\array_key_exists('return_requested_quantity', $data) && $data['return_requested_quantity'] !== null) {
            $object->setReturnRequestedQuantity($data['return_requested_quantity']);
            unset($data['return_requested_quantity']);
        }
        elseif (\array_key_exists('return_requested_quantity', $data) && $data['return_requested_quantity'] === null) {
            $object->setReturnRequestedQuantity(null);
        }
        if (\array_key_exists('return_received_quantity', $data) && $data['return_received_quantity'] !== null) {
            $object->setReturnReceivedQuantity($data['return_received_quantity']);
            unset($data['return_received_quantity']);
        }
        elseif (\array_key_exists('return_received_quantity', $data) && $data['return_received_quantity'] === null) {
            $object->setReturnReceivedQuantity(null);
        }
        if (\array_key_exists('return_dismissed_quantity', $data) && $data['return_dismissed_quantity'] !== null) {
            $object->setReturnDismissedQuantity($data['return_dismissed_quantity']);
            unset($data['return_dismissed_quantity']);
        }
        elseif (\array_key_exists('return_dismissed_quantity', $data) && $data['return_dismissed_quantity'] === null) {
            $object->setReturnDismissedQuantity(null);
        }
        if (\array_key_exists('written_off_quantity', $data) && $data['written_off_quantity'] !== null) {
            $object->setWrittenOffQuantity($data['written_off_quantity']);
            unset($data['written_off_quantity']);
        }
        elseif (\array_key_exists('written_off_quantity', $data) && $data['written_off_quantity'] === null) {
            $object->setWrittenOffQuantity(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setMetadata($values_1);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
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
        $dataArray['item_id'] = $data->getItemId();
        $values = [];
        foreach ($data->getItem() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['item'] = $values;
        $dataArray['quantity'] = $data->getQuantity();
        $dataArray['fulfilled_quantity'] = $data->getFulfilledQuantity();
        $dataArray['delivered_quantity'] = $data->getDeliveredQuantity();
        $dataArray['shipped_quantity'] = $data->getShippedQuantity();
        $dataArray['return_requested_quantity'] = $data->getReturnRequestedQuantity();
        $dataArray['return_received_quantity'] = $data->getReturnReceivedQuantity();
        $dataArray['return_dismissed_quantity'] = $data->getReturnDismissedQuantity();
        $dataArray['written_off_quantity'] = $data->getWrittenOffQuantity();
        $values_1 = [];
        foreach ($data->getMetadata() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $dataArray['metadata'] = $values_1;
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemDetail::class => false];
    }
}
