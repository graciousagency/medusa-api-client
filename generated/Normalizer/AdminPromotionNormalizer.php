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
class AdminPromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPromotion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPromotion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPromotion();
        if (\array_key_exists('is_automatic', $data) && \is_int($data['is_automatic'])) {
            $data['is_automatic'] = (bool) $data['is_automatic'];
        }
        if (\array_key_exists('is_tax_inclusive', $data) && \is_int($data['is_tax_inclusive'])) {
            $data['is_tax_inclusive'] = (bool) $data['is_tax_inclusive'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('application_method', $data) && $data['application_method'] !== null) {
            $object->setApplicationMethod($this->denormalizer->denormalize($data['application_method'], \Gracious\MedusaApiClientBundle\Model\AdminApplicationMethod::class, 'json', $context));
            unset($data['application_method']);
        }
        elseif (\array_key_exists('application_method', $data) && $data['application_method'] === null) {
            $object->setApplicationMethod(null);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values = [];
            foreach ($data['rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminPromotionRule::class, 'json', $context);
            }
            $object->setRules($values);
            unset($data['rules']);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('is_automatic', $data) && $data['is_automatic'] !== null) {
            $object->setIsAutomatic($data['is_automatic']);
            unset($data['is_automatic']);
        }
        elseif (\array_key_exists('is_automatic', $data) && $data['is_automatic'] === null) {
            $object->setIsAutomatic(null);
        }
        if (\array_key_exists('campaign_id', $data) && $data['campaign_id'] !== null) {
            $object->setCampaignId($data['campaign_id']);
            unset($data['campaign_id']);
        }
        elseif (\array_key_exists('campaign_id', $data) && $data['campaign_id'] === null) {
            $object->setCampaignId(null);
        }
        if (\array_key_exists('campaign', $data) && $data['campaign'] !== null) {
            $object->setCampaign($this->denormalizer->denormalize($data['campaign'], \Gracious\MedusaApiClientBundle\Model\AdminCampaign::class, 'json', $context));
            unset($data['campaign']);
        }
        elseif (\array_key_exists('campaign', $data) && $data['campaign'] === null) {
            $object->setCampaign(null);
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
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] !== null) {
            $object->setIsTaxInclusive($data['is_tax_inclusive']);
            unset($data['is_tax_inclusive']);
        }
        elseif (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] === null) {
            $object->setIsTaxInclusive(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('applicationMethod') && null !== $data->getApplicationMethod()) {
            $dataArray['application_method'] = $this->normalizer->normalize($data->getApplicationMethod(), 'json', $context);
        }
        if ($data->isInitialized('rules') && null !== $data->getRules()) {
            $values = [];
            foreach ($data->getRules() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['rules'] = $values;
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('isAutomatic') && null !== $data->getIsAutomatic()) {
            $dataArray['is_automatic'] = $data->getIsAutomatic();
        }
        if ($data->isInitialized('campaignId') && null !== $data->getCampaignId()) {
            $dataArray['campaign_id'] = $data->getCampaignId();
        }
        if ($data->isInitialized('campaign') && null !== $data->getCampaign()) {
            $dataArray['campaign'] = $this->normalizer->normalize($data->getCampaign(), 'json', $context);
        }
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('isTaxInclusive') && null !== $data->getIsTaxInclusive()) {
            $dataArray['is_tax_inclusive'] = $data->getIsTaxInclusive();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPromotion::class => false];
    }
}
