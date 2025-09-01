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
class AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem();
        if (\array_key_exists('required_quantity', $data) && \is_int($data['required_quantity'])) {
            $data['required_quantity'] = (double) $data['required_quantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('required_quantity', $data) && $data['required_quantity'] !== null) {
            $object->setRequiredQuantity($data['required_quantity']);
            unset($data['required_quantity']);
        }
        elseif (\array_key_exists('required_quantity', $data) && $data['required_quantity'] === null) {
            $object->setRequiredQuantity(null);
        }
        if (\array_key_exists('inventory_item_id', $data) && $data['inventory_item_id'] !== null) {
            $object->setInventoryItemId($data['inventory_item_id']);
            unset($data['inventory_item_id']);
        }
        elseif (\array_key_exists('inventory_item_id', $data) && $data['inventory_item_id'] === null) {
            $object->setInventoryItemId(null);
        }
        if (\array_key_exists('variant_id', $data) && $data['variant_id'] !== null) {
            $object->setVariantId($data['variant_id']);
            unset($data['variant_id']);
        }
        elseif (\array_key_exists('variant_id', $data) && $data['variant_id'] === null) {
            $object->setVariantId(null);
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
        $dataArray['required_quantity'] = $data->getRequiredQuantity();
        $dataArray['inventory_item_id'] = $data->getInventoryItemId();
        $dataArray['variant_id'] = $data->getVariantId();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem::class => false];
    }
}