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
class BaseProductCategoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\BaseProductCategory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\BaseProductCategory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\BaseProductCategory();
        if (\array_key_exists('rank', $data) && \is_int($data['rank'])) {
            $data['rank'] = (double) $data['rank'];
        }
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (\array_key_exists('is_internal', $data) && \is_int($data['is_internal'])) {
            $data['is_internal'] = (bool) $data['is_internal'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('category_children', $data) && $data['category_children'] !== null) {
            $values = [];
            foreach ($data['category_children'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminProductCategory::class, 'json', $context);
            }
            $object->setCategoryChildren($values);
            unset($data['category_children']);
        }
        elseif (\array_key_exists('category_children', $data) && $data['category_children'] === null) {
            $object->setCategoryChildren(null);
        }
        if (\array_key_exists('parent_category', $data) && $data['parent_category'] !== null) {
            $object->setParentCategory($this->denormalizer->denormalize($data['parent_category'], \Gracious\MedusaApiClientBundle\Model\AdminProductCategory::class, 'json', $context));
            unset($data['parent_category']);
        }
        elseif (\array_key_exists('parent_category', $data) && $data['parent_category'] === null) {
            $object->setParentCategory(null);
        }
        if (\array_key_exists('products', $data) && $data['products'] !== null) {
            $values_1 = [];
            foreach ($data['products'] as $value_1) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setProducts($values_1);
            unset($data['products']);
        }
        elseif (\array_key_exists('products', $data) && $data['products'] === null) {
            $object->setProducts(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
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
        if (\array_key_exists('handle', $data) && $data['handle'] !== null) {
            $object->setHandle($data['handle']);
            unset($data['handle']);
        }
        elseif (\array_key_exists('handle', $data) && $data['handle'] === null) {
            $object->setHandle(null);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
            unset($data['is_active']);
        }
        elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('is_internal', $data) && $data['is_internal'] !== null) {
            $object->setIsInternal($data['is_internal']);
            unset($data['is_internal']);
        }
        elseif (\array_key_exists('is_internal', $data) && $data['is_internal'] === null) {
            $object->setIsInternal(null);
        }
        if (\array_key_exists('rank', $data) && $data['rank'] !== null) {
            $object->setRank($data['rank']);
            unset($data['rank']);
        }
        elseif (\array_key_exists('rank', $data) && $data['rank'] === null) {
            $object->setRank(null);
        }
        if (\array_key_exists('parent_category_id', $data) && $data['parent_category_id'] !== null) {
            $object->setParentCategoryId($data['parent_category_id']);
            unset($data['parent_category_id']);
        }
        elseif (\array_key_exists('parent_category_id', $data) && $data['parent_category_id'] === null) {
            $object->setParentCategoryId(null);
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getCategoryChildren() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['category_children'] = $values;
        $dataArray['parent_category'] = $this->normalizer->normalize($data->getParentCategory(), 'json', $context);
        if ($data->isInitialized('products') && null !== $data->getProducts()) {
            $values_1 = [];
            foreach ($data->getProducts() as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $dataArray['products'] = $values_1;
        }
        $dataArray['name'] = $data->getName();
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
        $dataArray['handle'] = $data->getHandle();
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['is_active'] = $data->getIsActive();
        $dataArray['is_internal'] = $data->getIsInternal();
        $dataArray['rank'] = $data->getRank();
        $dataArray['parent_category_id'] = $data->getParentCategoryId();
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\BaseProductCategory::class => false];
    }
}
