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
class StoreOrderLineItemDetailitemVariantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemVariant::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemVariant::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemVariant();
        if (\array_key_exists('length', $data) && \is_int($data['length'])) {
            $data['length'] = (double) $data['length'];
        }
        if (\array_key_exists('width', $data) && \is_int($data['width'])) {
            $data['width'] = (double) $data['width'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (double) $data['weight'];
        }
        if (\array_key_exists('height', $data) && \is_int($data['height'])) {
            $data['height'] = (double) $data['height'];
        }
        if (\array_key_exists('inventory_quantity', $data) && \is_int($data['inventory_quantity'])) {
            $data['inventory_quantity'] = (double) $data['inventory_quantity'];
        }
        if (\array_key_exists('variant_rank', $data) && \is_int($data['variant_rank'])) {
            $data['variant_rank'] = (double) $data['variant_rank'];
        }
        if (\array_key_exists('allow_backorder', $data) && \is_int($data['allow_backorder'])) {
            $data['allow_backorder'] = (bool) $data['allow_backorder'];
        }
        if (\array_key_exists('manage_inventory', $data) && \is_int($data['manage_inventory'])) {
            $data['manage_inventory'] = (bool) $data['manage_inventory'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $values = [];
            foreach ($data['options'] as $value) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setOptions($values);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('product', $data) && $data['product'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['product'] as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->setProduct($values_2);
            unset($data['product']);
        }
        elseif (\array_key_exists('product', $data) && $data['product'] === null) {
            $object->setProduct(null);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
            unset($data['length']);
        }
        elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_2 => $value_3) {
                $values_3[$key_2] = $value_3;
            }
            $object->setMetadata($values_3);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
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
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
            unset($data['product_id']);
        }
        elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->setWidth($data['width']);
            unset($data['width']);
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->setWidth(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
            unset($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->setHeight($data['height']);
            unset($data['height']);
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('origin_country', $data) && $data['origin_country'] !== null) {
            $object->setOriginCountry($data['origin_country']);
            unset($data['origin_country']);
        }
        elseif (\array_key_exists('origin_country', $data) && $data['origin_country'] === null) {
            $object->setOriginCountry(null);
        }
        if (\array_key_exists('hs_code', $data) && $data['hs_code'] !== null) {
            $object->setHsCode($data['hs_code']);
            unset($data['hs_code']);
        }
        elseif (\array_key_exists('hs_code', $data) && $data['hs_code'] === null) {
            $object->setHsCode(null);
        }
        if (\array_key_exists('mid_code', $data) && $data['mid_code'] !== null) {
            $object->setMidCode($data['mid_code']);
            unset($data['mid_code']);
        }
        elseif (\array_key_exists('mid_code', $data) && $data['mid_code'] === null) {
            $object->setMidCode(null);
        }
        if (\array_key_exists('material', $data) && $data['material'] !== null) {
            $object->setMaterial($data['material']);
            unset($data['material']);
        }
        elseif (\array_key_exists('material', $data) && $data['material'] === null) {
            $object->setMaterial(null);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
            unset($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('barcode', $data) && $data['barcode'] !== null) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        }
        elseif (\array_key_exists('barcode', $data) && $data['barcode'] === null) {
            $object->setBarcode(null);
        }
        if (\array_key_exists('ean', $data) && $data['ean'] !== null) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        }
        elseif (\array_key_exists('ean', $data) && $data['ean'] === null) {
            $object->setEan(null);
        }
        if (\array_key_exists('upc', $data) && $data['upc'] !== null) {
            $object->setUpc($data['upc']);
            unset($data['upc']);
        }
        elseif (\array_key_exists('upc', $data) && $data['upc'] === null) {
            $object->setUpc(null);
        }
        if (\array_key_exists('allow_backorder', $data) && $data['allow_backorder'] !== null) {
            $object->setAllowBackorder($data['allow_backorder']);
            unset($data['allow_backorder']);
        }
        elseif (\array_key_exists('allow_backorder', $data) && $data['allow_backorder'] === null) {
            $object->setAllowBackorder(null);
        }
        if (\array_key_exists('manage_inventory', $data) && $data['manage_inventory'] !== null) {
            $object->setManageInventory($data['manage_inventory']);
            unset($data['manage_inventory']);
        }
        elseif (\array_key_exists('manage_inventory', $data) && $data['manage_inventory'] === null) {
            $object->setManageInventory(null);
        }
        if (\array_key_exists('inventory_quantity', $data) && $data['inventory_quantity'] !== null) {
            $object->setInventoryQuantity($data['inventory_quantity']);
            unset($data['inventory_quantity']);
        }
        elseif (\array_key_exists('inventory_quantity', $data) && $data['inventory_quantity'] === null) {
            $object->setInventoryQuantity(null);
        }
        if (\array_key_exists('variant_rank', $data) && $data['variant_rank'] !== null) {
            $object->setVariantRank($data['variant_rank']);
            unset($data['variant_rank']);
        }
        elseif (\array_key_exists('variant_rank', $data) && $data['variant_rank'] === null) {
            $object->setVariantRank(null);
        }
        if (\array_key_exists('calculated_price', $data) && $data['calculated_price'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['calculated_price'] as $key_3 => $value_4) {
                $values_4[$key_3] = $value_4;
            }
            $object->setCalculatedPrice($values_4);
            unset($data['calculated_price']);
        }
        elseif (\array_key_exists('calculated_price', $data) && $data['calculated_price'] === null) {
            $object->setCalculatedPrice(null);
        }
        foreach ($data as $key_4 => $value_5) {
            if (preg_match('/.*/', (string) $key_4)) {
                $object[$key_4] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getOptions() as $value) {
            $values_1 = [];
            foreach ($value as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $values[] = $values_1;
        }
        $dataArray['options'] = $values;
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $values_2 = [];
            foreach ($data->getProduct() as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $dataArray['product'] = $values_2;
        }
        $dataArray['length'] = $data->getLength();
        $dataArray['title'] = $data->getTitle();
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_3 = [];
            foreach ($data->getMetadata() as $key_2 => $value_3) {
                $values_3[$key_2] = $value_3;
            }
            $dataArray['metadata'] = $values_3;
        }
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        if ($data->isInitialized('productId') && null !== $data->getProductId()) {
            $dataArray['product_id'] = $data->getProductId();
        }
        $dataArray['width'] = $data->getWidth();
        $dataArray['weight'] = $data->getWeight();
        $dataArray['height'] = $data->getHeight();
        $dataArray['origin_country'] = $data->getOriginCountry();
        $dataArray['hs_code'] = $data->getHsCode();
        $dataArray['mid_code'] = $data->getMidCode();
        $dataArray['material'] = $data->getMaterial();
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['sku'] = $data->getSku();
        $dataArray['barcode'] = $data->getBarcode();
        $dataArray['ean'] = $data->getEan();
        $dataArray['upc'] = $data->getUpc();
        $dataArray['allow_backorder'] = $data->getAllowBackorder();
        $dataArray['manage_inventory'] = $data->getManageInventory();
        if ($data->isInitialized('inventoryQuantity') && null !== $data->getInventoryQuantity()) {
            $dataArray['inventory_quantity'] = $data->getInventoryQuantity();
        }
        if ($data->isInitialized('variantRank') && null !== $data->getVariantRank()) {
            $dataArray['variant_rank'] = $data->getVariantRank();
        }
        if ($data->isInitialized('calculatedPrice') && null !== $data->getCalculatedPrice()) {
            $values_4 = [];
            foreach ($data->getCalculatedPrice() as $key_3 => $value_4) {
                $values_4[$key_3] = $value_4;
            }
            $dataArray['calculated_price'] = $values_4;
        }
        foreach ($data as $key_4 => $value_5) {
            if (preg_match('/.*/', (string) $key_4)) {
                $dataArray[$key_4] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemVariant::class => false];
    }
}
