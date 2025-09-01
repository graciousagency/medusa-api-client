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
class AdminPromotionsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBody();
        if (\array_key_exists('is_automatic', $data) && \is_int($data['is_automatic'])) {
            $data['is_automatic'] = (bool) $data['is_automatic'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('is_automatic', $data) && $data['is_automatic'] !== null) {
            $object->setIsAutomatic($data['is_automatic']);
            unset($data['is_automatic']);
        }
        elseif (\array_key_exists('is_automatic', $data) && $data['is_automatic'] === null) {
            $object->setIsAutomatic(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('campaign_id', $data) && $data['campaign_id'] !== null) {
            $object->setCampaignId($data['campaign_id']);
            unset($data['campaign_id']);
        }
        elseif (\array_key_exists('campaign_id', $data) && $data['campaign_id'] === null) {
            $object->setCampaignId(null);
        }
        if (\array_key_exists('campaign', $data) && $data['campaign'] !== null) {
            $object->setCampaign($this->denormalizer->denormalize($data['campaign'], \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaign::class, 'json', $context));
            unset($data['campaign']);
        }
        elseif (\array_key_exists('campaign', $data) && $data['campaign'] === null) {
            $object->setCampaign(null);
        }
        if (\array_key_exists('application_method', $data) && $data['application_method'] !== null) {
            $object->setApplicationMethod($this->denormalizer->denormalize($data['application_method'], \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethod::class, 'json', $context));
            unset($data['application_method']);
        }
        elseif (\array_key_exists('application_method', $data) && $data['application_method'] === null) {
            $object->setApplicationMethod(null);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values = [];
            foreach ($data['rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyrulesItem::class, 'json', $context);
            }
            $object->setRules($values);
            unset($data['rules']);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additional_data'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setAdditionalData($values_1);
            unset($data['additional_data']);
        }
        elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
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
        $dataArray['code'] = $data->getCode();
        if ($data->isInitialized('isAutomatic') && null !== $data->getIsAutomatic()) {
            $dataArray['is_automatic'] = $data->getIsAutomatic();
        }
        $dataArray['type'] = $data->getType();
        $dataArray['campaign_id'] = $data->getCampaignId();
        if ($data->isInitialized('campaign') && null !== $data->getCampaign()) {
            $dataArray['campaign'] = $this->normalizer->normalize($data->getCampaign(), 'json', $context);
        }
        $dataArray['application_method'] = $this->normalizer->normalize($data->getApplicationMethod(), 'json', $context);
        if ($data->isInitialized('rules') && null !== $data->getRules()) {
            $values = [];
            foreach ($data->getRules() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['rules'] = $values;
        }
        if ($data->isInitialized('additionalData') && null !== $data->getAdditionalData()) {
            $values_1 = [];
            foreach ($data->getAdditionalData() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['additional_data'] = $values_1;
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBody::class => false];
    }
}