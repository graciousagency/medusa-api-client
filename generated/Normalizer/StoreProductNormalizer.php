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
class StoreProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreProduct::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreProduct::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreProduct();
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
        if (\array_key_exists('is_giftcard', $data) && \is_int($data['is_giftcard'])) {
            $data['is_giftcard'] = (bool) $data['is_giftcard'];
        }
        if (\array_key_exists('discountable', $data) && \is_int($data['discountable'])) {
            $data['discountable'] = (bool) $data['discountable'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('categories', $data) && $data['categories'] !== null) {
            $values = [];
            foreach ($data['categories'] as $value) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setCategories($values);
            unset($data['categories']);
        }
        elseif (\array_key_exists('categories', $data) && $data['categories'] === null) {
            $object->setCategories(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($this->denormalizer->denormalize($data['type'], \Gracious\MedusaApiClientBundle\Model\StoreProductType::class, 'json', $context));
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
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
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $values_2 = [];
            foreach ($data['options'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\StoreProductOption::class, 'json', $context);
            }
            $object->setOptions($values_2);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
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
            foreach ($data['metadata'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
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
        if (\array_key_exists('variants', $data) && $data['variants'] !== null) {
            $values_4 = [];
            foreach ($data['variants'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Gracious\MedusaApiClientBundle\Model\StoreProductVariant::class, 'json', $context);
            }
            $object->setVariants($values_4);
            unset($data['variants']);
        }
        elseif (\array_key_exists('variants', $data) && $data['variants'] === null) {
            $object->setVariants(null);
        }
        if (\array_key_exists('handle', $data) && $data['handle'] !== null) {
            $object->setHandle($data['handle']);
            unset($data['handle']);
        }
        elseif (\array_key_exists('handle', $data) && $data['handle'] === null) {
            $object->setHandle(null);
        }
        if (\array_key_exists('subtitle', $data) && $data['subtitle'] !== null) {
            $object->setSubtitle($data['subtitle']);
            unset($data['subtitle']);
        }
        elseif (\array_key_exists('subtitle', $data) && $data['subtitle'] === null) {
            $object->setSubtitle(null);
        }
        if (\array_key_exists('is_giftcard', $data) && $data['is_giftcard'] !== null) {
            $object->setIsGiftcard($data['is_giftcard']);
            unset($data['is_giftcard']);
        }
        elseif (\array_key_exists('is_giftcard', $data) && $data['is_giftcard'] === null) {
            $object->setIsGiftcard(null);
        }
        if (\array_key_exists('thumbnail', $data) && $data['thumbnail'] !== null) {
            $object->setThumbnail($data['thumbnail']);
            unset($data['thumbnail']);
        }
        elseif (\array_key_exists('thumbnail', $data) && $data['thumbnail'] === null) {
            $object->setThumbnail(null);
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
        if (\array_key_exists('collection', $data) && $data['collection'] !== null) {
            $object->setCollection($this->denormalizer->denormalize($data['collection'], \Gracious\MedusaApiClientBundle\Model\StoreCollection::class, 'json', $context));
            unset($data['collection']);
        }
        elseif (\array_key_exists('collection', $data) && $data['collection'] === null) {
            $object->setCollection(null);
        }
        if (\array_key_exists('collection_id', $data) && $data['collection_id'] !== null) {
            $object->setCollectionId($data['collection_id']);
            unset($data['collection_id']);
        }
        elseif (\array_key_exists('collection_id', $data) && $data['collection_id'] === null) {
            $object->setCollectionId(null);
        }
        if (\array_key_exists('type_id', $data) && $data['type_id'] !== null) {
            $object->setTypeId($data['type_id']);
            unset($data['type_id']);
        }
        elseif (\array_key_exists('type_id', $data) && $data['type_id'] === null) {
            $object->setTypeId(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_5 = [];
            foreach ($data['tags'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Gracious\MedusaApiClientBundle\Model\StoreProductTag::class, 'json', $context);
            }
            $object->setTags($values_5);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('images', $data) && $data['images'] !== null) {
            $values_6 = [];
            foreach ($data['images'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Gracious\MedusaApiClientBundle\Model\StoreProductImage::class, 'json', $context);
            }
            $object->setImages($values_6);
            unset($data['images']);
        }
        elseif (\array_key_exists('images', $data) && $data['images'] === null) {
            $object->setImages(null);
        }
        if (\array_key_exists('discountable', $data) && $data['discountable'] !== null) {
            $object->setDiscountable($data['discountable']);
            unset($data['discountable']);
        }
        elseif (\array_key_exists('discountable', $data) && $data['discountable'] === null) {
            $object->setDiscountable(null);
        }
        if (\array_key_exists('external_id', $data) && $data['external_id'] !== null) {
            $object->setExternalId($data['external_id']);
            unset($data['external_id']);
        }
        elseif (\array_key_exists('external_id', $data) && $data['external_id'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        foreach ($data as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('categories') && null !== $data->getCategories()) {
            $values = [];
            foreach ($data->getCategories() as $value) {
                $values_1 = [];
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $dataArray['categories'] = $values;
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        }
        $dataArray['length'] = $data->getLength();
        $dataArray['title'] = $data->getTitle();
        $dataArray['status'] = $data->getStatus();
        $values_2 = [];
        foreach ($data->getOptions() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['options'] = $values_2;
        $dataArray['description'] = $data->getDescription();
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_3 = [];
            foreach ($data->getMetadata() as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $dataArray['metadata'] = $values_3;
        }
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $values_4 = [];
        foreach ($data->getVariants() as $value_4) {
            $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
        }
        $dataArray['variants'] = $values_4;
        $dataArray['handle'] = $data->getHandle();
        $dataArray['subtitle'] = $data->getSubtitle();
        $dataArray['is_giftcard'] = $data->getIsGiftcard();
        $dataArray['thumbnail'] = $data->getThumbnail();
        $dataArray['width'] = $data->getWidth();
        $dataArray['weight'] = $data->getWeight();
        $dataArray['height'] = $data->getHeight();
        $dataArray['origin_country'] = $data->getOriginCountry();
        $dataArray['hs_code'] = $data->getHsCode();
        $dataArray['mid_code'] = $data->getMidCode();
        $dataArray['material'] = $data->getMaterial();
        if ($data->isInitialized('collection') && null !== $data->getCollection()) {
            $dataArray['collection'] = $this->normalizer->normalize($data->getCollection(), 'json', $context);
        }
        $dataArray['collection_id'] = $data->getCollectionId();
        $dataArray['type_id'] = $data->getTypeId();
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_5 = [];
            foreach ($data->getTags() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['tags'] = $values_5;
        }
        $values_6 = [];
        foreach ($data->getImages() as $value_6) {
            $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
        }
        $dataArray['images'] = $values_6;
        $dataArray['discountable'] = $data->getDiscountable();
        $dataArray['external_id'] = $data->getExternalId();
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreProduct::class => false];
    }
}
