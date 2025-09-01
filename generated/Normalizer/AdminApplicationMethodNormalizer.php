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
class AdminApplicationMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminApplicationMethod::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminApplicationMethod::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminApplicationMethod();
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (double) $data['value'];
        }
        if (\array_key_exists('max_quantity', $data) && \is_int($data['max_quantity'])) {
            $data['max_quantity'] = (double) $data['max_quantity'];
        }
        if (\array_key_exists('buy_rules_min_quantity', $data) && \is_int($data['buy_rules_min_quantity'])) {
            $data['buy_rules_min_quantity'] = (double) $data['buy_rules_min_quantity'];
        }
        if (\array_key_exists('apply_to_quantity', $data) && \is_int($data['apply_to_quantity'])) {
            $data['apply_to_quantity'] = (double) $data['apply_to_quantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('promotion', $data) && $data['promotion'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['promotion'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPromotion($values);
            unset($data['promotion']);
        }
        elseif (\array_key_exists('promotion', $data) && $data['promotion'] === null) {
            $object->setPromotion(null);
        }
        if (\array_key_exists('target_rules', $data) && $data['target_rules'] !== null) {
            $values_1 = [];
            foreach ($data['target_rules'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminPromotionRule::class, 'json', $context);
            }
            $object->setTargetRules($values_1);
            unset($data['target_rules']);
        }
        elseif (\array_key_exists('target_rules', $data) && $data['target_rules'] === null) {
            $object->setTargetRules(null);
        }
        if (\array_key_exists('buy_rules', $data) && $data['buy_rules'] !== null) {
            $values_2 = [];
            foreach ($data['buy_rules'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\AdminPromotionRule::class, 'json', $context);
            }
            $object->setBuyRules($values_2);
            unset($data['buy_rules']);
        }
        elseif (\array_key_exists('buy_rules', $data) && $data['buy_rules'] === null) {
            $object->setBuyRules(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('target_type', $data) && $data['target_type'] !== null) {
            $object->setTargetType($data['target_type']);
            unset($data['target_type']);
        }
        elseif (\array_key_exists('target_type', $data) && $data['target_type'] === null) {
            $object->setTargetType(null);
        }
        if (\array_key_exists('allocation', $data) && $data['allocation'] !== null) {
            $object->setAllocation($data['allocation']);
            unset($data['allocation']);
        }
        elseif (\array_key_exists('allocation', $data) && $data['allocation'] === null) {
            $object->setAllocation(null);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
        }
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('max_quantity', $data) && $data['max_quantity'] !== null) {
            $object->setMaxQuantity($data['max_quantity']);
            unset($data['max_quantity']);
        }
        elseif (\array_key_exists('max_quantity', $data) && $data['max_quantity'] === null) {
            $object->setMaxQuantity(null);
        }
        if (\array_key_exists('buy_rules_min_quantity', $data) && $data['buy_rules_min_quantity'] !== null) {
            $object->setBuyRulesMinQuantity($data['buy_rules_min_quantity']);
            unset($data['buy_rules_min_quantity']);
        }
        elseif (\array_key_exists('buy_rules_min_quantity', $data) && $data['buy_rules_min_quantity'] === null) {
            $object->setBuyRulesMinQuantity(null);
        }
        if (\array_key_exists('apply_to_quantity', $data) && $data['apply_to_quantity'] !== null) {
            $object->setApplyToQuantity($data['apply_to_quantity']);
            unset($data['apply_to_quantity']);
        }
        elseif (\array_key_exists('apply_to_quantity', $data) && $data['apply_to_quantity'] === null) {
            $object->setApplyToQuantity(null);
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
        if ($data->isInitialized('promotion') && null !== $data->getPromotion()) {
            $values = [];
            foreach ($data->getPromotion() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['promotion'] = $values;
        }
        if ($data->isInitialized('targetRules') && null !== $data->getTargetRules()) {
            $values_1 = [];
            foreach ($data->getTargetRules() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['target_rules'] = $values_1;
        }
        if ($data->isInitialized('buyRules') && null !== $data->getBuyRules()) {
            $values_2 = [];
            foreach ($data->getBuyRules() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['buy_rules'] = $values_2;
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('targetType') && null !== $data->getTargetType()) {
            $dataArray['target_type'] = $data->getTargetType();
        }
        if ($data->isInitialized('allocation') && null !== $data->getAllocation()) {
            $dataArray['allocation'] = $data->getAllocation();
        }
        if ($data->isInitialized('value') && null !== $data->getValue()) {
            $dataArray['value'] = $data->getValue();
        }
        if ($data->isInitialized('currencyCode') && null !== $data->getCurrencyCode()) {
            $dataArray['currency_code'] = $data->getCurrencyCode();
        }
        if ($data->isInitialized('maxQuantity') && null !== $data->getMaxQuantity()) {
            $dataArray['max_quantity'] = $data->getMaxQuantity();
        }
        if ($data->isInitialized('buyRulesMinQuantity') && null !== $data->getBuyRulesMinQuantity()) {
            $dataArray['buy_rules_min_quantity'] = $data->getBuyRulesMinQuantity();
        }
        if ($data->isInitialized('applyToQuantity') && null !== $data->getApplyToQuantity()) {
            $dataArray['apply_to_quantity'] = $data->getApplyToQuantity();
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminApplicationMethod::class => false];
    }
}