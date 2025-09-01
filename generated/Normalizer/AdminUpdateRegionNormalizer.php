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
class AdminUpdateRegionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminUpdateRegion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminUpdateRegion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminUpdateRegion();
        if (\array_key_exists('automatic_taxes', $data) && \is_int($data['automatic_taxes'])) {
            $data['automatic_taxes'] = (bool) $data['automatic_taxes'];
        }
        if (\array_key_exists('is_tax_inclusive', $data) && \is_int($data['is_tax_inclusive'])) {
            $data['is_tax_inclusive'] = (bool) $data['is_tax_inclusive'];
        }
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
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('countries', $data) && $data['countries'] !== null) {
            $values = [];
            foreach ($data['countries'] as $value) {
                $values[] = $value;
            }
            $object->setCountries($values);
            unset($data['countries']);
        }
        elseif (\array_key_exists('countries', $data) && $data['countries'] === null) {
            $object->setCountries(null);
        }
        if (\array_key_exists('automatic_taxes', $data) && $data['automatic_taxes'] !== null) {
            $object->setAutomaticTaxes($data['automatic_taxes']);
            unset($data['automatic_taxes']);
        }
        elseif (\array_key_exists('automatic_taxes', $data) && $data['automatic_taxes'] === null) {
            $object->setAutomaticTaxes(null);
        }
        if (\array_key_exists('payment_providers', $data) && $data['payment_providers'] !== null) {
            $values_1 = [];
            foreach ($data['payment_providers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPaymentProviders($values_1);
            unset($data['payment_providers']);
        }
        elseif (\array_key_exists('payment_providers', $data) && $data['payment_providers'] === null) {
            $object->setPaymentProviders(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setMetadata($values_2);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] !== null) {
            $object->setIsTaxInclusive($data['is_tax_inclusive']);
            unset($data['is_tax_inclusive']);
        }
        elseif (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] === null) {
            $object->setIsTaxInclusive(null);
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
        if ($data->isInitialized('currencyCode') && null !== $data->getCurrencyCode()) {
            $dataArray['currency_code'] = $data->getCurrencyCode();
        }
        if ($data->isInitialized('countries') && null !== $data->getCountries()) {
            $values = [];
            foreach ($data->getCountries() as $value) {
                $values[] = $value;
            }
            $dataArray['countries'] = $values;
        }
        if ($data->isInitialized('automaticTaxes') && null !== $data->getAutomaticTaxes()) {
            $dataArray['automatic_taxes'] = $data->getAutomaticTaxes();
        }
        if ($data->isInitialized('paymentProviders') && null !== $data->getPaymentProviders()) {
            $values_1 = [];
            foreach ($data->getPaymentProviders() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['payment_providers'] = $values_1;
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_2 = [];
            foreach ($data->getMetadata() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['metadata'] = $values_2;
        }
        if ($data->isInitialized('isTaxInclusive') && null !== $data->getIsTaxInclusive()) {
            $dataArray['is_tax_inclusive'] = $data->getIsTaxInclusive();
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminUpdateRegion::class => false];
    }
}