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
class AdminPromotionsPostBodyapplicationMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethod::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethod::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethod();
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (double) $data['value'];
        }
        if (\array_key_exists('max_quantity', $data) && \is_int($data['max_quantity'])) {
            $data['max_quantity'] = (double) $data['max_quantity'];
        }
        if (\array_key_exists('apply_to_quantity', $data) && \is_int($data['apply_to_quantity'])) {
            $data['apply_to_quantity'] = (double) $data['apply_to_quantity'];
        }
        if (\array_key_exists('buy_rules_min_quantity', $data) && \is_int($data['buy_rules_min_quantity'])) {
            $data['buy_rules_min_quantity'] = (double) $data['buy_rules_min_quantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
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
        if (\array_key_exists('target_rules', $data) && $data['target_rules'] !== null) {
            $values = [];
            foreach ($data['target_rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethodTargetRulesItem::class, 'json', $context);
            }
            $object->setTargetRules($values);
            unset($data['target_rules']);
        }
        elseif (\array_key_exists('target_rules', $data) && $data['target_rules'] === null) {
            $object->setTargetRules(null);
        }
        if (\array_key_exists('buy_rules', $data) && $data['buy_rules'] !== null) {
            $values_1 = [];
            foreach ($data['buy_rules'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethodBuyRulesItem::class, 'json', $context);
            }
            $object->setBuyRules($values_1);
            unset($data['buy_rules']);
        }
        elseif (\array_key_exists('buy_rules', $data) && $data['buy_rules'] === null) {
            $object->setBuyRules(null);
        }
        if (\array_key_exists('apply_to_quantity', $data) && $data['apply_to_quantity'] !== null) {
            $object->setApplyToQuantity($data['apply_to_quantity']);
            unset($data['apply_to_quantity']);
        }
        elseif (\array_key_exists('apply_to_quantity', $data) && $data['apply_to_quantity'] === null) {
            $object->setApplyToQuantity(null);
        }
        if (\array_key_exists('buy_rules_min_quantity', $data) && $data['buy_rules_min_quantity'] !== null) {
            $object->setBuyRulesMinQuantity($data['buy_rules_min_quantity']);
            unset($data['buy_rules_min_quantity']);
        }
        elseif (\array_key_exists('buy_rules_min_quantity', $data) && $data['buy_rules_min_quantity'] === null) {
            $object->setBuyRulesMinQuantity(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['description'] = $data->getDescription();
        $dataArray['value'] = $data->getValue();
        $dataArray['currency_code'] = $data->getCurrencyCode();
        $dataArray['max_quantity'] = $data->getMaxQuantity();
        $dataArray['type'] = $data->getType();
        $dataArray['target_type'] = $data->getTargetType();
        if ($data->isInitialized('allocation') && null !== $data->getAllocation()) {
            $dataArray['allocation'] = $data->getAllocation();
        }
        if ($data->isInitialized('targetRules') && null !== $data->getTargetRules()) {
            $values = [];
            foreach ($data->getTargetRules() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['target_rules'] = $values;
        }
        if ($data->isInitialized('buyRules') && null !== $data->getBuyRules()) {
            $values_1 = [];
            foreach ($data->getBuyRules() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['buy_rules'] = $values_1;
        }
        $dataArray['apply_to_quantity'] = $data->getApplyToQuantity();
        $dataArray['buy_rules_min_quantity'] = $data->getBuyRulesMinQuantity();
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethod::class => false];
    }
}