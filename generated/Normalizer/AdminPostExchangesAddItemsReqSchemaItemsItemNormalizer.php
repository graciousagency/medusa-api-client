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
class AdminPostExchangesAddItemsReqSchemaItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchemaItemsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchemaItemsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchemaItemsItem();
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (double) $data['quantity'];
        }
        if (\array_key_exists('unit_price', $data) && \is_int($data['unit_price'])) {
            $data['unit_price'] = (double) $data['unit_price'];
        }
        if (\array_key_exists('allow_backorder', $data) && \is_int($data['allow_backorder'])) {
            $data['allow_backorder'] = (bool) $data['allow_backorder'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('variant_id', $data) && $data['variant_id'] !== null) {
            $object->setVariantId($data['variant_id']);
            unset($data['variant_id']);
        }
        elseif (\array_key_exists('variant_id', $data) && $data['variant_id'] === null) {
            $object->setVariantId(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('unit_price', $data) && $data['unit_price'] !== null) {
            $object->setUnitPrice($data['unit_price']);
            unset($data['unit_price']);
        }
        elseif (\array_key_exists('unit_price', $data) && $data['unit_price'] === null) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('internal_note', $data) && $data['internal_note'] !== null) {
            $object->setInternalNote($data['internal_note']);
            unset($data['internal_note']);
        }
        elseif (\array_key_exists('internal_note', $data) && $data['internal_note'] === null) {
            $object->setInternalNote(null);
        }
        if (\array_key_exists('allow_backorder', $data) && $data['allow_backorder'] !== null) {
            $object->setAllowBackorder($data['allow_backorder']);
            unset($data['allow_backorder']);
        }
        elseif (\array_key_exists('allow_backorder', $data) && $data['allow_backorder'] === null) {
            $object->setAllowBackorder(null);
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
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['variant_id'] = $data->getVariantId();
        $dataArray['quantity'] = $data->getQuantity();
        if ($data->isInitialized('unitPrice') && null !== $data->getUnitPrice()) {
            $dataArray['unit_price'] = $data->getUnitPrice();
        }
        if ($data->isInitialized('internalNote') && null !== $data->getInternalNote()) {
            $dataArray['internal_note'] = $data->getInternalNote();
        }
        if ($data->isInitialized('allowBackorder') && null !== $data->getAllowBackorder()) {
            $dataArray['allow_backorder'] = $data->getAllowBackorder();
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values = [];
            foreach ($data->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['metadata'] = $values;
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchemaItemsItem::class => false];
    }
}