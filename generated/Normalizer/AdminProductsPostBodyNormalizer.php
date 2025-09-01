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
class AdminProductsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminProductsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminProductsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminProductsPostBody();
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
        if (\array_key_exists('is_giftcard', $data) && \is_int($data['is_giftcard'])) {
            $data['is_giftcard'] = (bool) $data['is_giftcard'];
        }
        if (\array_key_exists('discountable', $data) && \is_int($data['discountable'])) {
            $data['discountable'] = (bool) $data['discountable'];
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
        if (\array_key_exists('subtitle', $data) && $data['subtitle'] !== null) {
            $object->setSubtitle($data['subtitle']);
            unset($data['subtitle']);
        }
        elseif (\array_key_exists('subtitle', $data) && $data['subtitle'] === null) {
            $object->setSubtitle(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('is_giftcard', $data) && $data['is_giftcard'] !== null) {
            $object->setIsGiftcard($data['is_giftcard']);
            unset($data['is_giftcard']);
        }
        elseif (\array_key_exists('is_giftcard', $data) && $data['is_giftcard'] === null) {
            $object->setIsGiftcard(null);
        }
        if (\array_key_exists('discountable', $data) && $data['discountable'] !== null) {
            $object->setDiscountable($data['discountable']);
            unset($data['discountable']);
        }
        elseif (\array_key_exists('discountable', $data) && $data['discountable'] === null) {
            $object->setDiscountable(null);
        }
        if (\array_key_exists('images', $data) && $data['images'] !== null) {
            $values = [];
            foreach ($data['images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminCreateProductImagesItem::class, 'json', $context);
            }
            $object->setImages($values);
            unset($data['images']);
        }
        elseif (\array_key_exists('images', $data) && $data['images'] === null) {
            $object->setImages(null);
        }
        if (\array_key_exists('thumbnail', $data) && $data['thumbnail'] !== null) {
            $object->setThumbnail($data['thumbnail']);
            unset($data['thumbnail']);
        }
        elseif (\array_key_exists('thumbnail', $data) && $data['thumbnail'] === null) {
            $object->setThumbnail(null);
        }
        if (\array_key_exists('handle', $data) && $data['handle'] !== null) {
            $object->setHandle($data['handle']);
            unset($data['handle']);
        }
        elseif (\array_key_exists('handle', $data) && $data['handle'] === null) {
            $object->setHandle(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('type_id', $data) && $data['type_id'] !== null) {
            $object->setTypeId($data['type_id']);
            unset($data['type_id']);
        }
        elseif (\array_key_exists('type_id', $data) && $data['type_id'] === null) {
            $object->setTypeId(null);
        }
        if (\array_key_exists('collection_id', $data) && $data['collection_id'] !== null) {
            $object->setCollectionId($data['collection_id']);
            unset($data['collection_id']);
        }
        elseif (\array_key_exists('collection_id', $data) && $data['collection_id'] === null) {
            $object->setCollectionId(null);
        }
        if (\array_key_exists('categories', $data) && $data['categories'] !== null) {
            $values_1 = [];
            foreach ($data['categories'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminCreateProductCategoriesItem::class, 'json', $context);
            }
            $object->setCategories($values_1);
            unset($data['categories']);
        }
        elseif (\array_key_exists('categories', $data) && $data['categories'] === null) {
            $object->setCategories(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_2 = [];
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\AdminCreateProductTagsItem::class, 'json', $context);
            }
            $object->setTags($values_2);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $values_3 = [];
            foreach ($data['options'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Gracious\MedusaApiClientBundle\Model\AdminCreateProductOption::class, 'json', $context);
            }
            $object->setOptions($values_3);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('variants', $data) && $data['variants'] !== null) {
            $values_4 = [];
            foreach ($data['variants'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariant::class, 'json', $context);
            }
            $object->setVariants($values_4);
            unset($data['variants']);
        }
        elseif (\array_key_exists('variants', $data) && $data['variants'] === null) {
            $object->setVariants(null);
        }
        if (\array_key_exists('sales_channels', $data) && $data['sales_channels'] !== null) {
            $values_5 = [];
            foreach ($data['sales_channels'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Gracious\MedusaApiClientBundle\Model\AdminCreateProductSalesChannelsItem::class, 'json', $context);
            }
            $object->setSalesChannels($values_5);
            unset($data['sales_channels']);
        }
        elseif (\array_key_exists('sales_channels', $data) && $data['sales_channels'] === null) {
            $object->setSalesChannels(null);
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
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_6) {
                $values_6[$key] = $value_6;
            }
            $object->setMetadata($values_6);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('external_id', $data) && $data['external_id'] !== null) {
            $object->setExternalId($data['external_id']);
            unset($data['external_id']);
        }
        elseif (\array_key_exists('external_id', $data) && $data['external_id'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('shipping_profile_id', $data) && $data['shipping_profile_id'] !== null) {
            $object->setShippingProfileId($data['shipping_profile_id']);
            unset($data['shipping_profile_id']);
        }
        elseif (\array_key_exists('shipping_profile_id', $data) && $data['shipping_profile_id'] === null) {
            $object->setShippingProfileId(null);
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $values_7 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additional_data'] as $key_1 => $value_7) {
                $values_7[$key_1] = $value_7;
            }
            $object->setAdditionalData($values_7);
            unset($data['additional_data']);
        }
        elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        foreach ($data as $key_2 => $value_8) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_8;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['title'] = $data->getTitle();
        if ($data->isInitialized('subtitle') && null !== $data->getSubtitle()) {
            $dataArray['subtitle'] = $data->getSubtitle();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('isGiftcard') && null !== $data->getIsGiftcard()) {
            $dataArray['is_giftcard'] = $data->getIsGiftcard();
        }
        if ($data->isInitialized('discountable') && null !== $data->getDiscountable()) {
            $dataArray['discountable'] = $data->getDiscountable();
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $values = [];
            foreach ($data->getImages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['images'] = $values;
        }
        if ($data->isInitialized('thumbnail') && null !== $data->getThumbnail()) {
            $dataArray['thumbnail'] = $data->getThumbnail();
        }
        if ($data->isInitialized('handle') && null !== $data->getHandle()) {
            $dataArray['handle'] = $data->getHandle();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('typeId') && null !== $data->getTypeId()) {
            $dataArray['type_id'] = $data->getTypeId();
        }
        if ($data->isInitialized('collectionId') && null !== $data->getCollectionId()) {
            $dataArray['collection_id'] = $data->getCollectionId();
        }
        if ($data->isInitialized('categories') && null !== $data->getCategories()) {
            $values_1 = [];
            foreach ($data->getCategories() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['categories'] = $values_1;
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_2 = [];
            foreach ($data->getTags() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['tags'] = $values_2;
        }
        $values_3 = [];
        foreach ($data->getOptions() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $dataArray['options'] = $values_3;
        if ($data->isInitialized('variants') && null !== $data->getVariants()) {
            $values_4 = [];
            foreach ($data->getVariants() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['variants'] = $values_4;
        }
        if ($data->isInitialized('salesChannels') && null !== $data->getSalesChannels()) {
            $values_5 = [];
            foreach ($data->getSalesChannels() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['sales_channels'] = $values_5;
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
        if ($data->isInitialized('hsCode') && null !== $data->getHsCode()) {
            $dataArray['hs_code'] = $data->getHsCode();
        }
        if ($data->isInitialized('midCode') && null !== $data->getMidCode()) {
            $dataArray['mid_code'] = $data->getMidCode();
        }
        if ($data->isInitialized('originCountry') && null !== $data->getOriginCountry()) {
            $dataArray['origin_country'] = $data->getOriginCountry();
        }
        if ($data->isInitialized('material') && null !== $data->getMaterial()) {
            $dataArray['material'] = $data->getMaterial();
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_6 = [];
            foreach ($data->getMetadata() as $key => $value_6) {
                $values_6[$key] = $value_6;
            }
            $dataArray['metadata'] = $values_6;
        }
        if ($data->isInitialized('externalId') && null !== $data->getExternalId()) {
            $dataArray['external_id'] = $data->getExternalId();
        }
        if ($data->isInitialized('shippingProfileId') && null !== $data->getShippingProfileId()) {
            $dataArray['shipping_profile_id'] = $data->getShippingProfileId();
        }
        if ($data->isInitialized('additionalData') && null !== $data->getAdditionalData()) {
            $values_7 = [];
            foreach ($data->getAdditionalData() as $key_1 => $value_7) {
                $values_7[$key_1] = $value_7;
            }
            $dataArray['additional_data'] = $values_7;
        }
        foreach ($data as $key_2 => $value_8) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminProductsPostBody::class => false];
    }
}