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
class AdminCustomersIdAddressesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesPostBody();
        if (\array_key_exists('is_default_shipping', $data) && \is_int($data['is_default_shipping'])) {
            $data['is_default_shipping'] = (bool) $data['is_default_shipping'];
        }
        if (\array_key_exists('is_default_billing', $data) && \is_int($data['is_default_billing'])) {
            $data['is_default_billing'] = (bool) $data['is_default_billing'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address_name', $data) && $data['address_name'] !== null) {
            $object->setAddressName($data['address_name']);
            unset($data['address_name']);
        }
        elseif (\array_key_exists('address_name', $data) && $data['address_name'] === null) {
            $object->setAddressName(null);
        }
        if (\array_key_exists('is_default_shipping', $data) && $data['is_default_shipping'] !== null) {
            $object->setIsDefaultShipping($data['is_default_shipping']);
            unset($data['is_default_shipping']);
        }
        elseif (\array_key_exists('is_default_shipping', $data) && $data['is_default_shipping'] === null) {
            $object->setIsDefaultShipping(null);
        }
        if (\array_key_exists('is_default_billing', $data) && $data['is_default_billing'] !== null) {
            $object->setIsDefaultBilling($data['is_default_billing']);
            unset($data['is_default_billing']);
        }
        elseif (\array_key_exists('is_default_billing', $data) && $data['is_default_billing'] === null) {
            $object->setIsDefaultBilling(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $object->setFirstName($data['first_name']);
            unset($data['first_name']);
        }
        elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && $data['last_name'] !== null) {
            $object->setLastName($data['last_name']);
            unset($data['last_name']);
        }
        elseif (\array_key_exists('last_name', $data) && $data['last_name'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('address_1', $data) && $data['address_1'] !== null) {
            $object->setAddress1($data['address_1']);
            unset($data['address_1']);
        }
        elseif (\array_key_exists('address_1', $data) && $data['address_1'] === null) {
            $object->setAddress1(null);
        }
        if (\array_key_exists('address_2', $data) && $data['address_2'] !== null) {
            $object->setAddress2($data['address_2']);
            unset($data['address_2']);
        }
        elseif (\array_key_exists('address_2', $data) && $data['address_2'] === null) {
            $object->setAddress2(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('country_code', $data) && $data['country_code'] !== null) {
            $object->setCountryCode($data['country_code']);
            unset($data['country_code']);
        }
        elseif (\array_key_exists('country_code', $data) && $data['country_code'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('province', $data) && $data['province'] !== null) {
            $object->setProvince($data['province']);
            unset($data['province']);
        }
        elseif (\array_key_exists('province', $data) && $data['province'] === null) {
            $object->setProvince(null);
        }
        if (\array_key_exists('postal_code', $data) && $data['postal_code'] !== null) {
            $object->setPostalCode($data['postal_code']);
            unset($data['postal_code']);
        }
        elseif (\array_key_exists('postal_code', $data) && $data['postal_code'] === null) {
            $object->setPostalCode(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
            unset($data['phone']);
        }
        elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
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
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additional_data'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setAdditionalData($values_1);
            unset($data['additional_data']);
        }
        elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
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
        $dataArray['address_name'] = $data->getAddressName();
        if ($data->isInitialized('isDefaultShipping') && null !== $data->getIsDefaultShipping()) {
            $dataArray['is_default_shipping'] = $data->getIsDefaultShipping();
        }
        if ($data->isInitialized('isDefaultBilling') && null !== $data->getIsDefaultBilling()) {
            $dataArray['is_default_billing'] = $data->getIsDefaultBilling();
        }
        $dataArray['company'] = $data->getCompany();
        $dataArray['first_name'] = $data->getFirstName();
        $dataArray['last_name'] = $data->getLastName();
        $dataArray['address_1'] = $data->getAddress1();
        $dataArray['address_2'] = $data->getAddress2();
        $dataArray['city'] = $data->getCity();
        $dataArray['country_code'] = $data->getCountryCode();
        $dataArray['province'] = $data->getProvince();
        $dataArray['postal_code'] = $data->getPostalCode();
        $dataArray['phone'] = $data->getPhone();
        $values = [];
        foreach ($data->getMetadata() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['metadata'] = $values;
        if ($data->isInitialized('additionalData') && null !== $data->getAdditionalData()) {
            $values_1 = [];
            foreach ($data->getAdditionalData() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['additional_data'] = $values_1;
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesPostBody::class => false];
    }
}