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
class AdminFulfillmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminFulfillment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminFulfillment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminFulfillment();
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
        if (\array_key_exists('shipping_option_id', $data) && $data['shipping_option_id'] !== null) {
            $object->setShippingOptionId($data['shipping_option_id']);
            unset($data['shipping_option_id']);
        }
        elseif (\array_key_exists('shipping_option_id', $data) && $data['shipping_option_id'] === null) {
            $object->setShippingOptionId(null);
        }
        if (\array_key_exists('provider', $data) && $data['provider'] !== null) {
            $object->setProvider($this->denormalizer->denormalize($data['provider'], \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProvider::class, 'json', $context));
            unset($data['provider']);
        }
        elseif (\array_key_exists('provider', $data) && $data['provider'] === null) {
            $object->setProvider(null);
        }
        if (\array_key_exists('delivery_address', $data) && $data['delivery_address'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['delivery_address'], \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentAddress::class, 'json', $context));
            unset($data['delivery_address']);
        }
        elseif (\array_key_exists('delivery_address', $data) && $data['delivery_address'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentItem::class, 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentLabel::class, 'json', $context);
            }
            $object->setLabels($values_1);
            unset($data['labels']);
        }
        elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('packed_at', $data) && $data['packed_at'] !== null) {
            $object->setPackedAt($data['packed_at']);
            unset($data['packed_at']);
        }
        elseif (\array_key_exists('packed_at', $data) && $data['packed_at'] === null) {
            $object->setPackedAt(null);
        }
        if (\array_key_exists('shipped_at', $data) && $data['shipped_at'] !== null) {
            $object->setShippedAt($data['shipped_at']);
            unset($data['shipped_at']);
        }
        elseif (\array_key_exists('shipped_at', $data) && $data['shipped_at'] === null) {
            $object->setShippedAt(null);
        }
        if (\array_key_exists('delivered_at', $data) && $data['delivered_at'] !== null) {
            $object->setDeliveredAt($data['delivered_at']);
            unset($data['delivered_at']);
        }
        elseif (\array_key_exists('delivered_at', $data) && $data['delivered_at'] === null) {
            $object->setDeliveredAt(null);
        }
        if (\array_key_exists('canceled_at', $data) && $data['canceled_at'] !== null) {
            $object->setCanceledAt($data['canceled_at']);
            unset($data['canceled_at']);
        }
        elseif (\array_key_exists('canceled_at', $data) && $data['canceled_at'] === null) {
            $object->setCanceledAt(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['location_id'] = $data->getLocationId();
        $dataArray['provider_id'] = $data->getProviderId();
        $dataArray['shipping_option_id'] = $data->getShippingOptionId();
        $dataArray['provider'] = $this->normalizer->normalize($data->getProvider(), 'json', $context);
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
        $dataArray['packed_at'] = $data->getPackedAt();
        $dataArray['shipped_at'] = $data->getShippedAt();
        $dataArray['delivered_at'] = $data->getDeliveredAt();
        $dataArray['canceled_at'] = $data->getCanceledAt();
        $values_2 = [];
        foreach ($data->getData() as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $dataArray['data'] = $values_2;
        $values_3 = [];
        foreach ($data->getMetadata() as $key_1 => $value_3) {
            $values_3[$key_1] = $value_3;
        }
        $dataArray['metadata'] = $values_3;
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminFulfillment::class => false];
    }
}
