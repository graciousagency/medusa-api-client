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
class AdminCreateFulfillmentLabelsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentLabelsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentLabelsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentLabelsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tracking_number', $data) && $data['tracking_number'] !== null) {
            $object->setTrackingNumber($data['tracking_number']);
            unset($data['tracking_number']);
        }
        elseif (\array_key_exists('tracking_number', $data) && $data['tracking_number'] === null) {
            $object->setTrackingNumber(null);
        }
        if (\array_key_exists('tracking_url', $data) && $data['tracking_url'] !== null) {
            $object->setTrackingUrl($data['tracking_url']);
            unset($data['tracking_url']);
        }
        elseif (\array_key_exists('tracking_url', $data) && $data['tracking_url'] === null) {
            $object->setTrackingUrl(null);
        }
        if (\array_key_exists('label_url', $data) && $data['label_url'] !== null) {
            $object->setLabelUrl($data['label_url']);
            unset($data['label_url']);
        }
        elseif (\array_key_exists('label_url', $data) && $data['label_url'] === null) {
            $object->setLabelUrl(null);
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
        $dataArray['tracking_number'] = $data->getTrackingNumber();
        $dataArray['tracking_url'] = $data->getTrackingUrl();
        $dataArray['label_url'] = $data->getLabelUrl();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentLabelsItem::class => false];
    }
}