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
class AdminPromotionsPostBodycampaignNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaign::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaign::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaign();
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
            $object->setBudget($this->denormalizer->denormalize($data['budget'], \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaignBudget::class, 'json', $context));
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
        $dataArray['name'] = $data->getName();
        $dataArray['campaign_identifier'] = $data->getCampaignIdentifier();
        $dataArray['description'] = $data->getDescription();
        $dataArray['budget'] = $this->normalizer->normalize($data->getBudget(), 'json', $context);
        $dataArray['starts_at'] = $data->getStartsAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['ends_at'] = $data->getEndsAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaign::class => false];
    }
}
