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
class AdminReturnItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminReturnItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminReturnItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminReturnItem();
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (double) $data['quantity'];
        }
        if (\array_key_exists('received_quantity', $data) && \is_int($data['received_quantity'])) {
            $data['received_quantity'] = (double) $data['received_quantity'];
        }
        if (\array_key_exists('damaged_quantity', $data) && \is_int($data['damaged_quantity'])) {
            $data['damaged_quantity'] = (double) $data['damaged_quantity'];
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
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('received_quantity', $data) && $data['received_quantity'] !== null) {
            $object->setReceivedQuantity($data['received_quantity']);
            unset($data['received_quantity']);
        }
        elseif (\array_key_exists('received_quantity', $data) && $data['received_quantity'] === null) {
            $object->setReceivedQuantity(null);
        }
        if (\array_key_exists('damaged_quantity', $data) && $data['damaged_quantity'] !== null) {
            $object->setDamagedQuantity($data['damaged_quantity']);
            unset($data['damaged_quantity']);
        }
        elseif (\array_key_exists('damaged_quantity', $data) && $data['damaged_quantity'] === null) {
            $object->setDamagedQuantity(null);
        }
        if (\array_key_exists('reason_id', $data) && $data['reason_id'] !== null) {
            $object->setReasonId($data['reason_id']);
            unset($data['reason_id']);
        }
        elseif (\array_key_exists('reason_id', $data) && $data['reason_id'] === null) {
            $object->setReasonId(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('item_id', $data) && $data['item_id'] !== null) {
            $object->setItemId($data['item_id']);
            unset($data['item_id']);
        }
        elseif (\array_key_exists('item_id', $data) && $data['item_id'] === null) {
            $object->setItemId(null);
        }
        if (\array_key_exists('return_id', $data) && $data['return_id'] !== null) {
            $object->setReturnId($data['return_id']);
            unset($data['return_id']);
        }
        elseif (\array_key_exists('return_id', $data) && $data['return_id'] === null) {
            $object->setReturnId(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['quantity'] = $data->getQuantity();
        $dataArray['received_quantity'] = $data->getReceivedQuantity();
        $dataArray['damaged_quantity'] = $data->getDamagedQuantity();
        if ($data->isInitialized('reasonId') && null !== $data->getReasonId()) {
            $dataArray['reason_id'] = $data->getReasonId();
        }
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        $dataArray['item_id'] = $data->getItemId();
        $dataArray['return_id'] = $data->getReturnId();
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminReturnItem::class => false];
    }
}