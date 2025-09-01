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
class BaseOrderFulfillmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\BaseOrderFulfillment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\BaseOrderFulfillment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\BaseOrderFulfillment();
        if (\array_key_exists('requires_shipping', $data) && \is_int($data['requires_shipping'])) {
            $data['requires_shipping'] = (bool) $data['requires_shipping'];
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
        if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
            $object->setLocationId($data['location_id']);
            unset($data['location_id']);
        }
        elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
            $object->setLocationId(null);
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
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['data'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setData($values);
            unset($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
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
        if (\array_key_exists('requires_shipping', $data) && $data['requires_shipping'] !== null) {
            $object->setRequiresShipping($data['requires_shipping']);
            unset($data['requires_shipping']);
        }
        elseif (\array_key_exists('requires_shipping', $data) && $data['requires_shipping'] === null) {
            $object->setRequiresShipping(null);
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
        $dataArray['location_id'] = $data->getLocationId();
        $dataArray['packed_at'] = $data->getPackedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['shipped_at'] = $data->getShippedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['delivered_at'] = $data->getDeliveredAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
        $values = [];
        foreach ($data->getData() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['data'] = $values;
        $dataArray['provider_id'] = $data->getProviderId();
        $dataArray['shipping_option_id'] = $data->getShippingOptionId();
        $values_1 = [];
        foreach ($data->getMetadata() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $dataArray['metadata'] = $values_1;
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['requires_shipping'] = $data->getRequiresShipping();
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\BaseOrderFulfillment::class => false];
    }
}
