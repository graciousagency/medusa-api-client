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
class AdminBatchInventoryItemsLocationLevelsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevels::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevels::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevels();
        if (\array_key_exists('force', $data) && \is_int($data['force'])) {
            $data['force'] = (bool) $data['force'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('create', $data) && $data['create'] !== null) {
            $values = [];
            foreach ($data['create'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminBatchCreateInventoryItemsLocationLevels::class, 'json', $context);
            }
            $object->setCreate($values);
            unset($data['create']);
        }
        elseif (\array_key_exists('create', $data) && $data['create'] === null) {
            $object->setCreate(null);
        }
        if (\array_key_exists('update', $data) && $data['update'] !== null) {
            $values_1 = [];
            foreach ($data['update'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateInventoryItemsLocationLevels::class, 'json', $context);
            }
            $object->setUpdate($values_1);
            unset($data['update']);
        }
        elseif (\array_key_exists('update', $data) && $data['update'] === null) {
            $object->setUpdate(null);
        }
        if (\array_key_exists('delete', $data) && $data['delete'] !== null) {
            $values_2 = [];
            foreach ($data['delete'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setDelete($values_2);
            unset($data['delete']);
        }
        elseif (\array_key_exists('delete', $data) && $data['delete'] === null) {
            $object->setDelete(null);
        }
        if (\array_key_exists('force', $data) && $data['force'] !== null) {
            $object->setForce($data['force']);
            unset($data['force']);
        }
        elseif (\array_key_exists('force', $data) && $data['force'] === null) {
            $object->setForce(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getCreate() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['create'] = $values;
        $values_1 = [];
        foreach ($data->getUpdate() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['update'] = $values_1;
        $values_2 = [];
        foreach ($data->getDelete() as $value_2) {
            $values_2[] = $value_2;
        }
        $dataArray['delete'] = $values_2;
        if ($data->isInitialized('force') && null !== $data->getForce()) {
            $dataArray['force'] = $data->getForce();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevels::class => false];
    }
}