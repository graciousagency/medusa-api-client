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
class BaseCalculatedPriceSetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\BaseCalculatedPriceSet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\BaseCalculatedPriceSet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\BaseCalculatedPriceSet();
        if (\array_key_exists('calculated_amount', $data) && \is_int($data['calculated_amount'])) {
            $data['calculated_amount'] = (double) $data['calculated_amount'];
        }
        if (\array_key_exists('calculated_amount_with_tax', $data) && \is_int($data['calculated_amount_with_tax'])) {
            $data['calculated_amount_with_tax'] = (double) $data['calculated_amount_with_tax'];
        }
        if (\array_key_exists('calculated_amount_without_tax', $data) && \is_int($data['calculated_amount_without_tax'])) {
            $data['calculated_amount_without_tax'] = (double) $data['calculated_amount_without_tax'];
        }
        if (\array_key_exists('original_amount', $data) && \is_int($data['original_amount'])) {
            $data['original_amount'] = (double) $data['original_amount'];
        }
        if (\array_key_exists('original_amount_with_tax', $data) && \is_int($data['original_amount_with_tax'])) {
            $data['original_amount_with_tax'] = (double) $data['original_amount_with_tax'];
        }
        if (\array_key_exists('original_amount_without_tax', $data) && \is_int($data['original_amount_without_tax'])) {
            $data['original_amount_without_tax'] = (double) $data['original_amount_without_tax'];
        }
        if (\array_key_exists('is_calculated_price_price_list', $data) && \is_int($data['is_calculated_price_price_list'])) {
            $data['is_calculated_price_price_list'] = (bool) $data['is_calculated_price_price_list'];
        }
        if (\array_key_exists('is_calculated_price_tax_inclusive', $data) && \is_int($data['is_calculated_price_tax_inclusive'])) {
            $data['is_calculated_price_tax_inclusive'] = (bool) $data['is_calculated_price_tax_inclusive'];
        }
        if (\array_key_exists('is_original_price_price_list', $data) && \is_int($data['is_original_price_price_list'])) {
            $data['is_original_price_price_list'] = (bool) $data['is_original_price_price_list'];
        }
        if (\array_key_exists('is_original_price_tax_inclusive', $data) && \is_int($data['is_original_price_tax_inclusive'])) {
            $data['is_original_price_tax_inclusive'] = (bool) $data['is_original_price_tax_inclusive'];
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
        if (\array_key_exists('is_calculated_price_price_list', $data) && $data['is_calculated_price_price_list'] !== null) {
            $object->setIsCalculatedPricePriceList($data['is_calculated_price_price_list']);
            unset($data['is_calculated_price_price_list']);
        }
        elseif (\array_key_exists('is_calculated_price_price_list', $data) && $data['is_calculated_price_price_list'] === null) {
            $object->setIsCalculatedPricePriceList(null);
        }
        if (\array_key_exists('is_calculated_price_tax_inclusive', $data) && $data['is_calculated_price_tax_inclusive'] !== null) {
            $object->setIsCalculatedPriceTaxInclusive($data['is_calculated_price_tax_inclusive']);
            unset($data['is_calculated_price_tax_inclusive']);
        }
        elseif (\array_key_exists('is_calculated_price_tax_inclusive', $data) && $data['is_calculated_price_tax_inclusive'] === null) {
            $object->setIsCalculatedPriceTaxInclusive(null);
        }
        if (\array_key_exists('calculated_amount', $data) && $data['calculated_amount'] !== null) {
            $object->setCalculatedAmount($data['calculated_amount']);
            unset($data['calculated_amount']);
        }
        elseif (\array_key_exists('calculated_amount', $data) && $data['calculated_amount'] === null) {
            $object->setCalculatedAmount(null);
        }
        if (\array_key_exists('calculated_amount_with_tax', $data) && $data['calculated_amount_with_tax'] !== null) {
            $object->setCalculatedAmountWithTax($data['calculated_amount_with_tax']);
            unset($data['calculated_amount_with_tax']);
        }
        elseif (\array_key_exists('calculated_amount_with_tax', $data) && $data['calculated_amount_with_tax'] === null) {
            $object->setCalculatedAmountWithTax(null);
        }
        if (\array_key_exists('calculated_amount_without_tax', $data) && $data['calculated_amount_without_tax'] !== null) {
            $object->setCalculatedAmountWithoutTax($data['calculated_amount_without_tax']);
            unset($data['calculated_amount_without_tax']);
        }
        elseif (\array_key_exists('calculated_amount_without_tax', $data) && $data['calculated_amount_without_tax'] === null) {
            $object->setCalculatedAmountWithoutTax(null);
        }
        if (\array_key_exists('is_original_price_price_list', $data) && $data['is_original_price_price_list'] !== null) {
            $object->setIsOriginalPricePriceList($data['is_original_price_price_list']);
            unset($data['is_original_price_price_list']);
        }
        elseif (\array_key_exists('is_original_price_price_list', $data) && $data['is_original_price_price_list'] === null) {
            $object->setIsOriginalPricePriceList(null);
        }
        if (\array_key_exists('is_original_price_tax_inclusive', $data) && $data['is_original_price_tax_inclusive'] !== null) {
            $object->setIsOriginalPriceTaxInclusive($data['is_original_price_tax_inclusive']);
            unset($data['is_original_price_tax_inclusive']);
        }
        elseif (\array_key_exists('is_original_price_tax_inclusive', $data) && $data['is_original_price_tax_inclusive'] === null) {
            $object->setIsOriginalPriceTaxInclusive(null);
        }
        if (\array_key_exists('original_amount', $data) && $data['original_amount'] !== null) {
            $object->setOriginalAmount($data['original_amount']);
            unset($data['original_amount']);
        }
        elseif (\array_key_exists('original_amount', $data) && $data['original_amount'] === null) {
            $object->setOriginalAmount(null);
        }
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('calculated_price', $data) && $data['calculated_price'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['calculated_price'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCalculatedPrice($values);
            unset($data['calculated_price']);
        }
        elseif (\array_key_exists('calculated_price', $data) && $data['calculated_price'] === null) {
            $object->setCalculatedPrice(null);
        }
        if (\array_key_exists('original_price', $data) && $data['original_price'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['original_price'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setOriginalPrice($values_1);
            unset($data['original_price']);
        }
        elseif (\array_key_exists('original_price', $data) && $data['original_price'] === null) {
            $object->setOriginalPrice(null);
        }
        if (\array_key_exists('original_amount_with_tax', $data) && $data['original_amount_with_tax'] !== null) {
            $object->setOriginalAmountWithTax($data['original_amount_with_tax']);
            unset($data['original_amount_with_tax']);
        }
        elseif (\array_key_exists('original_amount_with_tax', $data) && $data['original_amount_with_tax'] === null) {
            $object->setOriginalAmountWithTax(null);
        }
        if (\array_key_exists('original_amount_without_tax', $data) && $data['original_amount_without_tax'] !== null) {
            $object->setOriginalAmountWithoutTax($data['original_amount_without_tax']);
            unset($data['original_amount_without_tax']);
        }
        elseif (\array_key_exists('original_amount_without_tax', $data) && $data['original_amount_without_tax'] === null) {
            $object->setOriginalAmountWithoutTax(null);
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
        if ($data->isInitialized('isCalculatedPricePriceList') && null !== $data->getIsCalculatedPricePriceList()) {
            $dataArray['is_calculated_price_price_list'] = $data->getIsCalculatedPricePriceList();
        }
        if ($data->isInitialized('isCalculatedPriceTaxInclusive') && null !== $data->getIsCalculatedPriceTaxInclusive()) {
            $dataArray['is_calculated_price_tax_inclusive'] = $data->getIsCalculatedPriceTaxInclusive();
        }
        $dataArray['calculated_amount'] = $data->getCalculatedAmount();
        if ($data->isInitialized('calculatedAmountWithTax') && null !== $data->getCalculatedAmountWithTax()) {
            $dataArray['calculated_amount_with_tax'] = $data->getCalculatedAmountWithTax();
        }
        if ($data->isInitialized('calculatedAmountWithoutTax') && null !== $data->getCalculatedAmountWithoutTax()) {
            $dataArray['calculated_amount_without_tax'] = $data->getCalculatedAmountWithoutTax();
        }
        if ($data->isInitialized('isOriginalPricePriceList') && null !== $data->getIsOriginalPricePriceList()) {
            $dataArray['is_original_price_price_list'] = $data->getIsOriginalPricePriceList();
        }
        if ($data->isInitialized('isOriginalPriceTaxInclusive') && null !== $data->getIsOriginalPriceTaxInclusive()) {
            $dataArray['is_original_price_tax_inclusive'] = $data->getIsOriginalPriceTaxInclusive();
        }
        $dataArray['original_amount'] = $data->getOriginalAmount();
        $dataArray['currency_code'] = $data->getCurrencyCode();
        if ($data->isInitialized('calculatedPrice') && null !== $data->getCalculatedPrice()) {
            $values = [];
            foreach ($data->getCalculatedPrice() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['calculated_price'] = $values;
        }
        if ($data->isInitialized('originalPrice') && null !== $data->getOriginalPrice()) {
            $values_1 = [];
            foreach ($data->getOriginalPrice() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['original_price'] = $values_1;
        }
        $dataArray['original_amount_with_tax'] = $data->getOriginalAmountWithTax();
        $dataArray['original_amount_without_tax'] = $data->getOriginalAmountWithoutTax();
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\BaseCalculatedPriceSet::class => false];
    }
}