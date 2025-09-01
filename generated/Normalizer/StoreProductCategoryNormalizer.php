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
class StoreProductCategoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreProductCategory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreProductCategory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreProductCategory();
        if (\array_key_exists('rank', $data) && \is_int($data['rank'])) {
            $data['rank'] = (double) $data['rank'];
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
        if (\array_key_exists('handle', $data) && $data['handle'] !== null) {
            $object->setHandle($data['handle']);
            unset($data['handle']);
        }
        elseif (\array_key_exists('handle', $data) && $data['handle'] === null) {
            $object->setHandle(null);
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
        if (\array_key_exists('parent_category', $data) && $data['parent_category'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['parent_category'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setParentCategory($values);
            unset($data['parent_category']);
        }
        elseif (\array_key_exists('parent_category', $data) && $data['parent_category'] === null) {
            $object->setParentCategory(null);
        }
        if (\array_key_exists('category_children', $data) && $data['category_children'] !== null) {
            $values_1 = [];
            foreach ($data['category_children'] as $value_1) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key_1 => $value_2) {
                    $values_2[$key_1] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setCategoryChildren($values_1);
            unset($data['category_children']);
        }
        elseif (\array_key_exists('category_children', $data) && $data['category_children'] === null) {
            $object->setCategoryChildren(null);
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
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        if (\array_key_exists('products', $data) && $data['products'] !== null) {
            $values_4 = [];
            foreach ($data['products'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Gracious\MedusaApiClientBundle\Model\StoreProduct::class, 'json', $context);
            }
            $object->setProducts($values_4);
            unset($data['products']);
        }
        elseif (\array_key_exists('products', $data) && $data['products'] === null) {
            $object->setProducts(null);
        }
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['description'] = $data->getDescription();
        $dataArray['handle'] = $data->getHandle();
        $dataArray['rank'] = $data->getRank();
        $dataArray['parent_category_id'] = $data->getParentCategoryId();
        $values = [];
        foreach ($data->getParentCategory() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['parent_category'] = $values;
        $values_1 = [];
        foreach ($data->getCategoryChildren() as $value_1) {
            $values_2 = [];
            foreach ($value_1 as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $values_1[] = $values_2;
        }
        $dataArray['category_children'] = $values_1;
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_3 = [];
            foreach ($data->getMetadata() as $key_2 => $value_3) {
                $values_3[$key_2] = $value_3;
            }
            $dataArray['metadata'] = $values_3;
        }
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        if ($data->isInitialized('products') && null !== $data->getProducts()) {
            $values_4 = [];
            foreach ($data->getProducts() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['products'] = $values_4;
        }
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreProductCategory::class => false];
    }
}
