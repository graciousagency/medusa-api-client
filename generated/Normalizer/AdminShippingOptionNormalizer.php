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
class AdminShippingOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminShippingOption::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminShippingOption::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminShippingOption();
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
        if (\array_key_exists('service_zone', $data) && $data['service_zone'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['service_zone'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setServiceZone($values);
            unset($data['service_zone']);
        }
        elseif (\array_key_exists('service_zone', $data) && $data['service_zone'] === null) {
            $object->setServiceZone(null);
        }
        if (\array_key_exists('provider_id', $data) && $data['provider_id'] !== null) {
            $object->setProviderId($data['provider_id']);
            unset($data['provider_id']);
        }
        elseif (\array_key_exists('provider_id', $data) && $data['provider_id'] === null) {
            $object->setProviderId(null);
        }
        if (\array_key_exists('provider', $data) && $data['provider'] !== null) {
            $object->setProvider($this->denormalizer->denormalize($data['provider'], \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProvider::class, 'json', $context));
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
            $object->setType($this->denormalizer->denormalize($data['type'], \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionType::class, 'json', $context));
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
        if (\array_key_exists('shipping_profile', $data) && $data['shipping_profile'] !== null) {
            $object->setShippingProfile($this->denormalizer->denormalize($data['shipping_profile'], \Gracious\MedusaApiClientBundle\Model\AdminShippingProfile::class, 'json', $context));
            unset($data['shipping_profile']);
        }
        elseif (\array_key_exists('shipping_profile', $data) && $data['shipping_profile'] === null) {
            $object->setShippingProfile(null);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values_1 = [];
            foreach ($data['rules'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionRule::class, 'json', $context);
            }
            $object->setRules($values_1);
            unset($data['rules']);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
        }
        if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
            $values_2 = [];
            foreach ($data['prices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionPrice::class, 'json', $context);
            }
            $object->setPrices($values_2);
            unset($data['prices']);
        }
        elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
            $object->setPrices(null);
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['data'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setData($values_3);
            unset($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_2 => $value_4) {
                $values_4[$key_2] = $value_4;
            }
            $object->setMetadata($values_4);
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
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_5;
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
        $values = [];
        foreach ($data->getServiceZone() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['service_zone'] = $values;
        $dataArray['provider_id'] = $data->getProviderId();
        $dataArray['provider'] = $this->normalizer->normalize($data->getProvider(), 'json', $context);
        $dataArray['shipping_option_type_id'] = $data->getShippingOptionTypeId();
        $dataArray['type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        $dataArray['shipping_profile_id'] = $data->getShippingProfileId();
        $dataArray['shipping_profile'] = $this->normalizer->normalize($data->getShippingProfile(), 'json', $context);
        $values_1 = [];
        foreach ($data->getRules() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['rules'] = $values_1;
        $values_2 = [];
        foreach ($data->getPrices() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['prices'] = $values_2;
        $values_3 = [];
        foreach ($data->getData() as $key_1 => $value_3) {
            $values_3[$key_1] = $value_3;
        }
        $dataArray['data'] = $values_3;
        $values_4 = [];
        foreach ($data->getMetadata() as $key_2 => $value_4) {
            $values_4[$key_2] = $value_4;
        }
        $dataArray['metadata'] = $values_4;
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminShippingOption::class => false];
    }
}
