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
class AdminPostOrderEditsItemsActionReqSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsItemsActionReqSchema::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsItemsActionReqSchema::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsItemsActionReqSchema();
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (double) $data['quantity'];
        }
        if (\array_key_exists('unit_price', $data) && \is_int($data['unit_price'])) {
            $data['unit_price'] = (double) $data['unit_price'];
        }
        if (\array_key_exists('compare_at_unit_price', $data) && \is_int($data['compare_at_unit_price'])) {
            $data['compare_at_unit_price'] = (double) $data['compare_at_unit_price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('internal_note', $data) && $data['internal_note'] !== null) {
            $object->setInternalNote($data['internal_note']);
            unset($data['internal_note']);
        }
        elseif (\array_key_exists('internal_note', $data) && $data['internal_note'] === null) {
            $object->setInternalNote(null);
        }
        if (\array_key_exists('unit_price', $data) && $data['unit_price'] !== null) {
            $object->setUnitPrice($data['unit_price']);
            unset($data['unit_price']);
        }
        elseif (\array_key_exists('unit_price', $data) && $data['unit_price'] === null) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('compare_at_unit_price', $data) && $data['compare_at_unit_price'] !== null) {
            $object->setCompareAtUnitPrice($data['compare_at_unit_price']);
            unset($data['compare_at_unit_price']);
        }
        elseif (\array_key_exists('compare_at_unit_price', $data) && $data['compare_at_unit_price'] === null) {
            $object->setCompareAtUnitPrice(null);
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
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('internalNote') && null !== $data->getInternalNote()) {
            $dataArray['internal_note'] = $data->getInternalNote();
        }
        if ($data->isInitialized('unitPrice') && null !== $data->getUnitPrice()) {
            $dataArray['unit_price'] = $data->getUnitPrice();
        }
        if ($data->isInitialized('compareAtUnitPrice') && null !== $data->getCompareAtUnitPrice()) {
            $dataArray['compare_at_unit_price'] = $data->getCompareAtUnitPrice();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsItemsActionReqSchema::class => false];
    }
}