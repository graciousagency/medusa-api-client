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
class AdminStockLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminStockLocation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminStockLocation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminStockLocation();
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
        if (\array_key_exists('address_id', $data) && $data['address_id'] !== null) {
            $object->setAddressId($data['address_id']);
            unset($data['address_id']);
        }
        elseif (\array_key_exists('address_id', $data) && $data['address_id'] === null) {
            $object->setAddressId(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Gracious\MedusaApiClientBundle\Model\AdminStockLocationAddress::class, 'json', $context));
            unset($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('sales_channels', $data) && $data['sales_channels'] !== null) {
            $values = [];
            foreach ($data['sales_channels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminSalesChannel::class, 'json', $context);
            }
            $object->setSalesChannels($values);
            unset($data['sales_channels']);
        }
        elseif (\array_key_exists('sales_channels', $data) && $data['sales_channels'] === null) {
            $object->setSalesChannels(null);
        }
        if (\array_key_exists('fulfillment_providers', $data) && $data['fulfillment_providers'] !== null) {
            $values_1 = [];
            foreach ($data['fulfillment_providers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProvider::class, 'json', $context);
            }
            $object->setFulfillmentProviders($values_1);
            unset($data['fulfillment_providers']);
        }
        elseif (\array_key_exists('fulfillment_providers', $data) && $data['fulfillment_providers'] === null) {
            $object->setFulfillmentProviders(null);
        }
        if (\array_key_exists('fulfillment_sets', $data) && $data['fulfillment_sets'] !== null) {
            $values_2 = [];
            foreach ($data['fulfillment_sets'] as $value_2) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_2 as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setFulfillmentSets($values_2);
            unset($data['fulfillment_sets']);
        }
        elseif (\array_key_exists('fulfillment_sets', $data) && $data['fulfillment_sets'] === null) {
            $object->setFulfillmentSets(null);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['address_id'] = $data->getAddressId();
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('salesChannels') && null !== $data->getSalesChannels()) {
            $values = [];
            foreach ($data->getSalesChannels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['sales_channels'] = $values;
        }
        if ($data->isInitialized('fulfillmentProviders') && null !== $data->getFulfillmentProviders()) {
            $values_1 = [];
            foreach ($data->getFulfillmentProviders() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['fulfillment_providers'] = $values_1;
        }
        if ($data->isInitialized('fulfillmentSets') && null !== $data->getFulfillmentSets()) {
            $values_2 = [];
            foreach ($data->getFulfillmentSets() as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $dataArray['fulfillment_sets'] = $values_2;
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminStockLocation::class => false];
    }
}