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
class AdminTaxRegionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminTaxRegion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminTaxRegion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminTaxRegion();
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
        if (\array_key_exists('country_code', $data) && $data['country_code'] !== null) {
            $object->setCountryCode($data['country_code']);
            unset($data['country_code']);
        }
        elseif (\array_key_exists('country_code', $data) && $data['country_code'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('province_code', $data) && $data['province_code'] !== null) {
            $object->setProvinceCode($data['province_code']);
            unset($data['province_code']);
        }
        elseif (\array_key_exists('province_code', $data) && $data['province_code'] === null) {
            $object->setProvinceCode(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
            unset($data['parent_id']);
        }
        elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
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
        if (\array_key_exists('created_by', $data) && $data['created_by'] !== null) {
            $object->setCreatedBy($data['created_by']);
            unset($data['created_by']);
        }
        elseif (\array_key_exists('created_by', $data) && $data['created_by'] === null) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('tax_rates', $data) && $data['tax_rates'] !== null) {
            $values_1 = [];
            foreach ($data['tax_rates'] as $value_1) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setTaxRates($values_1);
            unset($data['tax_rates']);
        }
        elseif (\array_key_exists('tax_rates', $data) && $data['tax_rates'] === null) {
            $object->setTaxRates(null);
        }
        if (\array_key_exists('parent', $data) && $data['parent'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['parent'] as $key_2 => $value_3) {
                $values_3[$key_2] = $value_3;
            }
            $object->setParent($values_3);
            unset($data['parent']);
        }
        elseif (\array_key_exists('parent', $data) && $data['parent'] === null) {
            $object->setParent(null);
        }
        if (\array_key_exists('children', $data) && $data['children'] !== null) {
            $values_4 = [];
            foreach ($data['children'] as $value_4) {
                $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_4 as $key_3 => $value_5) {
                    $values_5[$key_3] = $value_5;
                }
                $values_4[] = $values_5;
            }
            $object->setChildren($values_4);
            unset($data['children']);
        }
        elseif (\array_key_exists('children', $data) && $data['children'] === null) {
            $object->setChildren(null);
        }
        foreach ($data as $key_4 => $value_6) {
            if (preg_match('/.*/', (string) $key_4)) {
                $object[$key_4] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['country_code'] = $data->getCountryCode();
        $dataArray['province_code'] = $data->getProvinceCode();
        $values = [];
        foreach ($data->getMetadata() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['metadata'] = $values;
        $dataArray['parent_id'] = $data->getParentId();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['created_by'] = $data->getCreatedBy();
        $values_1 = [];
        foreach ($data->getTaxRates() as $value_1) {
            $values_2 = [];
            foreach ($value_1 as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $values_1[] = $values_2;
        }
        $dataArray['tax_rates'] = $values_1;
        $values_3 = [];
        foreach ($data->getParent() as $key_2 => $value_3) {
            $values_3[$key_2] = $value_3;
        }
        $dataArray['parent'] = $values_3;
        $values_4 = [];
        foreach ($data->getChildren() as $value_4) {
            $values_5 = [];
            foreach ($value_4 as $key_3 => $value_5) {
                $values_5[$key_3] = $value_5;
            }
            $values_4[] = $values_5;
        }
        $dataArray['children'] = $values_4;
        foreach ($data as $key_4 => $value_6) {
            if (preg_match('/.*/', (string) $key_4)) {
                $dataArray[$key_4] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminTaxRegion::class => false];
    }
}
