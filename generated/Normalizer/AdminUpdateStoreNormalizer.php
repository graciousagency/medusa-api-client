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
class AdminUpdateStoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminUpdateStore::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminUpdateStore::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminUpdateStore();
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
        if (\array_key_exists('supported_currencies', $data) && $data['supported_currencies'] !== null) {
            $values = [];
            foreach ($data['supported_currencies'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminUpdateStoreSupportedCurrenciesItem::class, 'json', $context);
            }
            $object->setSupportedCurrencies($values);
            unset($data['supported_currencies']);
        }
        elseif (\array_key_exists('supported_currencies', $data) && $data['supported_currencies'] === null) {
            $object->setSupportedCurrencies(null);
        }
        if (\array_key_exists('default_sales_channel_id', $data) && $data['default_sales_channel_id'] !== null) {
            $object->setDefaultSalesChannelId($data['default_sales_channel_id']);
            unset($data['default_sales_channel_id']);
        }
        elseif (\array_key_exists('default_sales_channel_id', $data) && $data['default_sales_channel_id'] === null) {
            $object->setDefaultSalesChannelId(null);
        }
        if (\array_key_exists('default_region_id', $data) && $data['default_region_id'] !== null) {
            $object->setDefaultRegionId($data['default_region_id']);
            unset($data['default_region_id']);
        }
        elseif (\array_key_exists('default_region_id', $data) && $data['default_region_id'] === null) {
            $object->setDefaultRegionId(null);
        }
        if (\array_key_exists('default_location_id', $data) && $data['default_location_id'] !== null) {
            $object->setDefaultLocationId($data['default_location_id']);
            unset($data['default_location_id']);
        }
        elseif (\array_key_exists('default_location_id', $data) && $data['default_location_id'] === null) {
            $object->setDefaultLocationId(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setMetadata($values_1);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('supportedCurrencies') && null !== $data->getSupportedCurrencies()) {
            $values = [];
            foreach ($data->getSupportedCurrencies() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['supported_currencies'] = $values;
        }
        if ($data->isInitialized('defaultSalesChannelId') && null !== $data->getDefaultSalesChannelId()) {
            $dataArray['default_sales_channel_id'] = $data->getDefaultSalesChannelId();
        }
        if ($data->isInitialized('defaultRegionId') && null !== $data->getDefaultRegionId()) {
            $dataArray['default_region_id'] = $data->getDefaultRegionId();
        }
        if ($data->isInitialized('defaultLocationId') && null !== $data->getDefaultLocationId()) {
            $dataArray['default_location_id'] = $data->getDefaultLocationId();
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_1 = [];
            foreach ($data->getMetadata() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['metadata'] = $values_1;
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminUpdateStore::class => false];
    }
}