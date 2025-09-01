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
class AdminPromotionsIdPostBodyapplicationMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBodyapplicationMethod::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBodyapplicationMethod::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBodyapplicationMethod();
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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
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
        if (\array_key_exists('max_quantity', $data) && $data['max_quantity'] !== null) {
            $object->setMaxQuantity($data['max_quantity']);
            unset($data['max_quantity']);
        }
        elseif (\array_key_exists('max_quantity', $data) && $data['max_quantity'] === null) {
            $object->setMaxQuantity(null);
        }
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
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
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('value') && null !== $data->getValue()) {
            $dataArray['value'] = $data->getValue();
        }
        $dataArray['max_quantity'] = $data->getMaxQuantity();
        $dataArray['currency_code'] = $data->getCurrencyCode();
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('targetType') && null !== $data->getTargetType()) {
            $dataArray['target_type'] = $data->getTargetType();
        }
        if ($data->isInitialized('allocation') && null !== $data->getAllocation()) {
            $dataArray['allocation'] = $data->getAllocation();
        }
        $dataArray['apply_to_quantity'] = $data->getApplyToQuantity();
        $dataArray['buy_rules_min_quantity'] = $data->getBuyRulesMinQuantity();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBodyapplicationMethod::class => false];
    }
}