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
class AdminUpdateProductVariantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductVariant::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductVariant::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductVariant();
        if (\array_key_exists('variant_rank', $data) && \is_int($data['variant_rank'])) {
            $data['variant_rank'] = (double) $data['variant_rank'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (double) $data['weight'];
        }
        if (\array_key_exists('length', $data) && \is_int($data['length'])) {
            $data['length'] = (double) $data['length'];
        }
        if (\array_key_exists('height', $data) && \is_int($data['height'])) {
            $data['height'] = (double) $data['height'];
        }
        if (\array_key_exists('width', $data) && \is_int($data['width'])) {
            $data['width'] = (double) $data['width'];
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
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
            unset($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
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
        if (\array_key_exists('barcode', $data) && $data['barcode'] !== null) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        }
        elseif (\array_key_exists('barcode', $data) && $data['barcode'] === null) {
            $object->setBarcode(null);
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
        if (\array_key_exists('variant_rank', $data) && $data['variant_rank'] !== null) {
            $object->setVariantRank($data['variant_rank']);
            unset($data['variant_rank']);
        }
        elseif (\array_key_exists('variant_rank', $data) && $data['variant_rank'] === null) {
            $object->setVariantRank(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
            unset($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
            unset($data['length']);
        }
        elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->setHeight($data['height']);
            unset($data['height']);
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->setWidth($data['width']);
            unset($data['width']);
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->setWidth(null);
        }
        if (\array_key_exists('origin_country', $data) && $data['origin_country'] !== null) {
            $object->setOriginCountry($data['origin_country']);
            unset($data['origin_country']);
        }
        elseif (\array_key_exists('origin_country', $data) && $data['origin_country'] === null) {
            $object->setOriginCountry(null);
        }
        if (\array_key_exists('material', $data) && $data['material'] !== null) {
            $object->setMaterial($data['material']);
            unset($data['material']);
        }
        elseif (\array_key_exists('material', $data) && $data['material'] === null) {
            $object->setMaterial(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
            $values_1 = [];
            foreach ($data['prices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariantPrice::class, 'json', $context);
            }
            $object->setPrices($values_1);
            unset($data['prices']);
        }
        elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
            $object->setPrices(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['options'] as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->setOptions($values_2);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        foreach ($data as $key_2 => $value_3) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('sku') && null !== $data->getSku()) {
            $dataArray['sku'] = $data->getSku();
        }
        if ($data->isInitialized('ean') && null !== $data->getEan()) {
            $dataArray['ean'] = $data->getEan();
        }
        if ($data->isInitialized('upc') && null !== $data->getUpc()) {
            $dataArray['upc'] = $data->getUpc();
        }
        if ($data->isInitialized('barcode') && null !== $data->getBarcode()) {
            $dataArray['barcode'] = $data->getBarcode();
        }
        if ($data->isInitialized('hsCode') && null !== $data->getHsCode()) {
            $dataArray['hs_code'] = $data->getHsCode();
        }
        if ($data->isInitialized('midCode') && null !== $data->getMidCode()) {
            $dataArray['mid_code'] = $data->getMidCode();
        }
        if ($data->isInitialized('allowBackorder') && null !== $data->getAllowBackorder()) {
            $dataArray['allow_backorder'] = $data->getAllowBackorder();
        }
        if ($data->isInitialized('manageInventory') && null !== $data->getManageInventory()) {
            $dataArray['manage_inventory'] = $data->getManageInventory();
        }
        if ($data->isInitialized('variantRank') && null !== $data->getVariantRank()) {
            $dataArray['variant_rank'] = $data->getVariantRank();
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['weight'] = $data->getWeight();
        }
        if ($data->isInitialized('length') && null !== $data->getLength()) {
            $dataArray['length'] = $data->getLength();
        }
        if ($data->isInitialized('height') && null !== $data->getHeight()) {
            $dataArray['height'] = $data->getHeight();
        }
        if ($data->isInitialized('width') && null !== $data->getWidth()) {
            $dataArray['width'] = $data->getWidth();
        }
        if ($data->isInitialized('originCountry') && null !== $data->getOriginCountry()) {
            $dataArray['origin_country'] = $data->getOriginCountry();
        }
        if ($data->isInitialized('material') && null !== $data->getMaterial()) {
            $dataArray['material'] = $data->getMaterial();
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values = [];
            foreach ($data->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['metadata'] = $values;
        }
        if ($data->isInitialized('prices') && null !== $data->getPrices()) {
            $values_1 = [];
            foreach ($data->getPrices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['prices'] = $values_1;
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $values_2 = [];
            foreach ($data->getOptions() as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $dataArray['options'] = $values_2;
        }
        foreach ($data as $key_2 => $value_3) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminUpdateProductVariant::class => false];
    }
}