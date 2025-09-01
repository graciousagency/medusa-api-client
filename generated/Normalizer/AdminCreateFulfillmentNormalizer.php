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
class AdminCreateFulfillmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
            $object->setLocationId($data['location_id']);
            unset($data['location_id']);
        }
        elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
            $object->setLocationId(null);
        }
        if (\array_key_exists('provider_id', $data) && $data['provider_id'] !== null) {
            $object->setProviderId($data['provider_id']);
            unset($data['provider_id']);
        }
        elseif (\array_key_exists('provider_id', $data) && $data['provider_id'] === null) {
            $object->setProviderId(null);
        }
        if (\array_key_exists('delivery_address', $data) && $data['delivery_address'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['delivery_address'], \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentDeliveryAddress::class, 'json', $context));
            unset($data['delivery_address']);
        }
        elseif (\array_key_exists('delivery_address', $data) && $data['delivery_address'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentItemsItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values_1 = [];
            foreach ($data['labels'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentLabelsItem::class, 'json', $context);
            }
            $object->setLabels($values_1);
            unset($data['labels']);
        }
        elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
            unset($data['order_id']);
        }
        elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('shipping_option_id', $data) && $data['shipping_option_id'] !== null) {
            $object->setShippingOptionId($data['shipping_option_id']);
            unset($data['shipping_option_id']);
        }
        elseif (\array_key_exists('shipping_option_id', $data) && $data['shipping_option_id'] === null) {
            $object->setShippingOptionId(null);
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['data'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setData($values_2);
            unset($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('packed_at', $data) && $data['packed_at'] !== null) {
            $object->setPackedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['packed_at']));
            unset($data['packed_at']);
        }
        elseif (\array_key_exists('packed_at', $data) && $data['packed_at'] === null) {
            $object->setPackedAt(null);
        }
        if (\array_key_exists('shipped_at', $data) && $data['shipped_at'] !== null) {
            $object->setShippedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['shipped_at']));
            unset($data['shipped_at']);
        }
        elseif (\array_key_exists('shipped_at', $data) && $data['shipped_at'] === null) {
            $object->setShippedAt(null);
        }
        if (\array_key_exists('delivered_at', $data) && $data['delivered_at'] !== null) {
            $object->setDeliveredAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['delivered_at']));
            unset($data['delivered_at']);
        }
        elseif (\array_key_exists('delivered_at', $data) && $data['delivered_at'] === null) {
            $object->setDeliveredAt(null);
        }
        if (\array_key_exists('canceled_at', $data) && $data['canceled_at'] !== null) {
            $object->setCanceledAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['canceled_at']));
            unset($data['canceled_at']);
        }
        elseif (\array_key_exists('canceled_at', $data) && $data['canceled_at'] === null) {
            $object->setCanceledAt(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setMetadata($values_3);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['location_id'] = $data->getLocationId();
        $dataArray['provider_id'] = $data->getProviderId();
        $dataArray['delivery_address'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        $values = [];
        foreach ($data->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['items'] = $values;
        $values_1 = [];
        foreach ($data->getLabels() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['labels'] = $values_1;
        $dataArray['order_id'] = $data->getOrderId();
        if ($data->isInitialized('shippingOptionId') && null !== $data->getShippingOptionId()) {
            $dataArray['shipping_option_id'] = $data->getShippingOptionId();
        }
        $values_2 = [];
        foreach ($data->getData() as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $dataArray['data'] = $values_2;
        if ($data->isInitialized('packedAt') && null !== $data->getPackedAt()) {
            $dataArray['packed_at'] = $data->getPackedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('shippedAt') && null !== $data->getShippedAt()) {
            $dataArray['shipped_at'] = $data->getShippedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('deliveredAt') && null !== $data->getDeliveredAt()) {
            $dataArray['delivered_at'] = $data->getDeliveredAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('canceledAt') && null !== $data->getCanceledAt()) {
            $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        $values_3 = [];
        foreach ($data->getMetadata() as $key_1 => $value_3) {
            $values_3[$key_1] = $value_3;
        }
        $dataArray['metadata'] = $values_3;
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillment::class => false];
    }
}
