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
class AdminCampaignsIdPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBody();
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
        if (\array_key_exists('campaign_identifier', $data) && $data['campaign_identifier'] !== null) {
            $object->setCampaignIdentifier($data['campaign_identifier']);
            unset($data['campaign_identifier']);
        }
        elseif (\array_key_exists('campaign_identifier', $data) && $data['campaign_identifier'] === null) {
            $object->setCampaignIdentifier(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('budget', $data) && $data['budget'] !== null) {
            $object->setBudget($this->denormalizer->denormalize($data['budget'], \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBodybudget::class, 'json', $context));
            unset($data['budget']);
        }
        elseif (\array_key_exists('budget', $data) && $data['budget'] === null) {
            $object->setBudget(null);
        }
        if (\array_key_exists('starts_at', $data) && $data['starts_at'] !== null) {
            $object->setStartsAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['starts_at']));
            unset($data['starts_at']);
        }
        elseif (\array_key_exists('starts_at', $data) && $data['starts_at'] === null) {
            $object->setStartsAt(null);
        }
        if (\array_key_exists('ends_at', $data) && $data['ends_at'] !== null) {
            $object->setEndsAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['ends_at']));
            unset($data['ends_at']);
        }
        elseif (\array_key_exists('ends_at', $data) && $data['ends_at'] === null) {
            $object->setEndsAt(null);
        }
        if (\array_key_exists('promotions', $data) && $data['promotions'] !== null) {
            $values = [];
            foreach ($data['promotions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBodypromotionsItem::class, 'json', $context);
            }
            $object->setPromotions($values);
            unset($data['promotions']);
        }
        elseif (\array_key_exists('promotions', $data) && $data['promotions'] === null) {
            $object->setPromotions(null);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('campaignIdentifier') && null !== $data->getCampaignIdentifier()) {
            $dataArray['campaign_identifier'] = $data->getCampaignIdentifier();
        }
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('budget') && null !== $data->getBudget()) {
            $dataArray['budget'] = $this->normalizer->normalize($data->getBudget(), 'json', $context);
        }
        $dataArray['starts_at'] = $data->getStartsAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['ends_at'] = $data->getEndsAt()?->format('Y-m-d\TH:i:s.u\Z');
        if ($data->isInitialized('promotions') && null !== $data->getPromotions()) {
            $values = [];
            foreach ($data->getPromotions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['promotions'] = $values;
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBody::class => false];
    }
}
