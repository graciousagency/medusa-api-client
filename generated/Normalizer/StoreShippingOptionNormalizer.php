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
class StoreShippingOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreShippingOption::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreShippingOption::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreShippingOption();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
        }
        if (\array_key_exists('is_tax_inclusive', $data) && \is_int($data['is_tax_inclusive'])) {
            $data['is_tax_inclusive'] = (bool) $data['is_tax_inclusive'];
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
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('price_type', $data) && $data['price_type'] !== null) {
            $object->setPriceType($data['price_type']);
            unset($data['price_type']);
        }
        elseif (\array_key_exists('price_type', $data) && $data['price_type'] === null) {
            $object->setPriceType(null);
        }
        if (\array_key_exists('service_zone_id', $data) && $data['service_zone_id'] !== null) {
            $object->setServiceZoneId($data['service_zone_id']);
            unset($data['service_zone_id']);
        }
        elseif (\array_key_exists('service_zone_id', $data) && $data['service_zone_id'] === null) {
            $object->setServiceZoneId(null);
        }
        if (\array_key_exists('provider_id', $data) && $data['provider_id'] !== null) {
            $object->setProviderId($data['provider_id']);
            unset($data['provider_id']);
        }
        elseif (\array_key_exists('provider_id', $data) && $data['provider_id'] === null) {
            $object->setProviderId(null);
        }
        if (\array_key_exists('provider', $data) && $data['provider'] !== null) {
            $object->setProvider($this->denormalizer->denormalize($data['provider'], \Gracious\MedusaApiClientBundle\Model\BaseFulfillmentProvider::class, 'json', $context));
            unset($data['provider']);
        }
        elseif (\array_key_exists('provider', $data) && $data['provider'] === null) {
            $object->setProvider(null);
        }
        if (\array_key_exists('shipping_option_type_id', $data) && $data['shipping_option_type_id'] !== null) {
            $object->setShippingOptionTypeId($data['shipping_option_type_id']);
            unset($data['shipping_option_type_id']);
        }
        elseif (\array_key_exists('shipping_option_type_id', $data) && $data['shipping_option_type_id'] === null) {
            $object->setShippingOptionTypeId(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($this->denormalizer->denormalize($data['type'], \Gracious\MedusaApiClientBundle\Model\StoreShippingOptionType::class, 'json', $context));
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('shipping_profile_id', $data) && $data['shipping_profile_id'] !== null) {
            $object->setShippingProfileId($data['shipping_profile_id']);
            unset($data['shipping_profile_id']);
        }
        elseif (\array_key_exists('shipping_profile_id', $data) && $data['shipping_profile_id'] === null) {
            $object->setShippingProfileId(null);
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] !== null) {
            $object->setIsTaxInclusive($data['is_tax_inclusive']);
            unset($data['is_tax_inclusive']);
        }
        elseif (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] === null) {
            $object->setIsTaxInclusive(null);
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
        $dataArray['name'] = $data->getName();
        $dataArray['price_type'] = $data->getPriceType();
        $dataArray['service_zone_id'] = $data->getServiceZoneId();
        $dataArray['provider_id'] = $data->getProviderId();
        $dataArray['provider'] = $this->normalizer->normalize($data->getProvider(), 'json', $context);
        $dataArray['shipping_option_type_id'] = $data->getShippingOptionTypeId();
        $dataArray['type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        $dataArray['shipping_profile_id'] = $data->getShippingProfileId();
        $dataArray['amount'] = $data->getAmount();
        $dataArray['is_tax_inclusive'] = $data->getIsTaxInclusive();
        $values = [];
        foreach ($data->getData() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['data'] = $values;
        $values_1 = [];
        foreach ($data->getMetadata() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $dataArray['metadata'] = $values_1;
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreShippingOption::class => false];
    }
}