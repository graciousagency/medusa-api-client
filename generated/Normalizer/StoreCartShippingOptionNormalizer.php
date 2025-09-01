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
class StoreCartShippingOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOption::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOption::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOption();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
        }
        if (\array_key_exists('insufficient_inventory', $data) && \is_int($data['insufficient_inventory'])) {
            $data['insufficient_inventory'] = (bool) $data['insufficient_inventory'];
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
            $object->setProvider($this->denormalizer->denormalize($data['provider'], \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOptionProvider::class, 'json', $context));
            unset($data['provider']);
        }
        elseif (\array_key_exists('provider', $data) && $data['provider'] === null) {
            $object->setProvider(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($this->denormalizer->denormalize($data['type'], \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOptionType::class, 'json', $context));
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
        if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
            $values_1 = [];
            foreach ($data['prices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\StorePrice::class, 'json', $context);
            }
            $object->setPrices($values_1);
            unset($data['prices']);
        }
        elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
            $object->setPrices(null);
        }
        if (\array_key_exists('calculated_price', $data) && $data['calculated_price'] !== null) {
            $object->setCalculatedPrice($this->denormalizer->denormalize($data['calculated_price'], \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPrice::class, 'json', $context));
            unset($data['calculated_price']);
        }
        elseif (\array_key_exists('calculated_price', $data) && $data['calculated_price'] === null) {
            $object->setCalculatedPrice(null);
        }
        if (\array_key_exists('insufficient_inventory', $data) && $data['insufficient_inventory'] !== null) {
            $object->setInsufficientInventory($data['insufficient_inventory']);
            unset($data['insufficient_inventory']);
        }
        elseif (\array_key_exists('insufficient_inventory', $data) && $data['insufficient_inventory'] === null) {
            $object->setInsufficientInventory(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['price_type'] = $data->getPriceType();
        $dataArray['service_zone_id'] = $data->getServiceZoneId();
        $dataArray['provider_id'] = $data->getProviderId();
        $dataArray['provider'] = $this->normalizer->normalize($data->getProvider(), 'json', $context);
        $dataArray['type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        $dataArray['shipping_profile_id'] = $data->getShippingProfileId();
        $dataArray['amount'] = $data->getAmount();
        $values = [];
        foreach ($data->getData() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['data'] = $values;
        $values_1 = [];
        foreach ($data->getPrices() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['prices'] = $values_1;
        $dataArray['calculated_price'] = $this->normalizer->normalize($data->getCalculatedPrice(), 'json', $context);
        $dataArray['insufficient_inventory'] = $data->getInsufficientInventory();
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreCartShippingOption::class => false];
    }
}