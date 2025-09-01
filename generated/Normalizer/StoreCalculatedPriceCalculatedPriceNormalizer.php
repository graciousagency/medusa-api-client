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
class StoreCalculatedPriceCalculatedPriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPriceCalculatedPrice::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPriceCalculatedPrice::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPriceCalculatedPrice();
        if (\array_key_exists('min_quantity', $data) && \is_int($data['min_quantity'])) {
            $data['min_quantity'] = (double) $data['min_quantity'];
        }
        if (\array_key_exists('max_quantity', $data) && \is_int($data['max_quantity'])) {
            $data['max_quantity'] = (double) $data['max_quantity'];
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
        if (\array_key_exists('price_list_id', $data) && $data['price_list_id'] !== null) {
            $object->setPriceListId($data['price_list_id']);
            unset($data['price_list_id']);
        }
        elseif (\array_key_exists('price_list_id', $data) && $data['price_list_id'] === null) {
            $object->setPriceListId(null);
        }
        if (\array_key_exists('price_list_type', $data) && $data['price_list_type'] !== null) {
            $object->setPriceListType($data['price_list_type']);
            unset($data['price_list_type']);
        }
        elseif (\array_key_exists('price_list_type', $data) && $data['price_list_type'] === null) {
            $object->setPriceListType(null);
        }
        if (\array_key_exists('min_quantity', $data) && $data['min_quantity'] !== null) {
            $object->setMinQuantity($data['min_quantity']);
            unset($data['min_quantity']);
        }
        elseif (\array_key_exists('min_quantity', $data) && $data['min_quantity'] === null) {
            $object->setMinQuantity(null);
        }
        if (\array_key_exists('max_quantity', $data) && $data['max_quantity'] !== null) {
            $object->setMaxQuantity($data['max_quantity']);
            unset($data['max_quantity']);
        }
        elseif (\array_key_exists('max_quantity', $data) && $data['max_quantity'] === null) {
            $object->setMaxQuantity(null);
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
        $dataArray['price_list_id'] = $data->getPriceListId();
        $dataArray['price_list_type'] = $data->getPriceListType();
        $dataArray['min_quantity'] = $data->getMinQuantity();
        $dataArray['max_quantity'] = $data->getMaxQuantity();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreCalculatedPriceCalculatedPrice::class => false];
    }
}