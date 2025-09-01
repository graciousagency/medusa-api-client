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
class AdminUpdateShippingOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOption::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOption::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
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
        if (\array_key_exists('price_type', $data) && $data['price_type'] !== null) {
            $object->setPriceType($data['price_type']);
            unset($data['price_type']);
        }
        elseif (\array_key_exists('price_type', $data) && $data['price_type'] === null) {
            $object->setPriceType(null);
        }
        if (\array_key_exists('provider_id', $data) && $data['provider_id'] !== null) {
            $object->setProviderId($data['provider_id']);
            unset($data['provider_id']);
        }
        elseif (\array_key_exists('provider_id', $data) && $data['provider_id'] === null) {
            $object->setProviderId(null);
        }
        if (\array_key_exists('shipping_profile_id', $data) && $data['shipping_profile_id'] !== null) {
            $object->setShippingProfileId($data['shipping_profile_id']);
            unset($data['shipping_profile_id']);
        }
        elseif (\array_key_exists('shipping_profile_id', $data) && $data['shipping_profile_id'] === null) {
            $object->setShippingProfileId(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($this->denormalizer->denormalize($data['type'], \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOptionType::class, 'json', $context));
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
            $values_1 = [];
            foreach ($data['prices'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPrices($values_1);
            unset($data['prices']);
        }
        elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
            $object->setPrices(null);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values_2 = [];
            foreach ($data['rules'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRules($values_2);
            unset($data['rules']);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $values = [];
            foreach ($data->getData() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['data'] = $values;
        }
        if ($data->isInitialized('priceType') && null !== $data->getPriceType()) {
            $dataArray['price_type'] = $data->getPriceType();
        }
        if ($data->isInitialized('providerId') && null !== $data->getProviderId()) {
            $dataArray['provider_id'] = $data->getProviderId();
        }
        if ($data->isInitialized('shippingProfileId') && null !== $data->getShippingProfileId()) {
            $dataArray['shipping_profile_id'] = $data->getShippingProfileId();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        }
        if ($data->isInitialized('prices') && null !== $data->getPrices()) {
            $values_1 = [];
            foreach ($data->getPrices() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['prices'] = $values_1;
        }
        if ($data->isInitialized('rules') && null !== $data->getRules()) {
            $values_2 = [];
            foreach ($data->getRules() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['rules'] = $values_2;
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOption::class => false];
    }
}