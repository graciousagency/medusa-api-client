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
class AdminOrderChangeActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminOrderChangeAction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminOrderChangeAction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminOrderChangeAction();
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
        if (\array_key_exists('order_change_id', $data) && $data['order_change_id'] !== null) {
            $object->setOrderChangeId($data['order_change_id']);
            unset($data['order_change_id']);
        }
        elseif (\array_key_exists('order_change_id', $data) && $data['order_change_id'] === null) {
            $object->setOrderChangeId(null);
        }
        if (\array_key_exists('order_change', $data) && $data['order_change'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['order_change'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOrderChange($values);
            unset($data['order_change']);
        }
        elseif (\array_key_exists('order_change', $data) && $data['order_change'] === null) {
            $object->setOrderChange(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
            unset($data['order_id']);
        }
        elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('return_id', $data) && $data['return_id'] !== null) {
            $object->setReturnId($data['return_id']);
            unset($data['return_id']);
        }
        elseif (\array_key_exists('return_id', $data) && $data['return_id'] === null) {
            $object->setReturnId(null);
        }
        if (\array_key_exists('claim_id', $data) && $data['claim_id'] !== null) {
            $object->setClaimId($data['claim_id']);
            unset($data['claim_id']);
        }
        elseif (\array_key_exists('claim_id', $data) && $data['claim_id'] === null) {
            $object->setClaimId(null);
        }
        if (\array_key_exists('exchange_id', $data) && $data['exchange_id'] !== null) {
            $object->setExchangeId($data['exchange_id']);
            unset($data['exchange_id']);
        }
        elseif (\array_key_exists('exchange_id', $data) && $data['exchange_id'] === null) {
            $object->setExchangeId(null);
        }
        if (\array_key_exists('order', $data) && $data['order'] !== null) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Gracious\MedusaApiClientBundle\Model\AdminOrder::class, 'json', $context));
            unset($data['order']);
        }
        elseif (\array_key_exists('order', $data) && $data['order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('reference', $data) && $data['reference'] !== null) {
            $object->setReference($data['reference']);
            unset($data['reference']);
        }
        elseif (\array_key_exists('reference', $data) && $data['reference'] === null) {
            $object->setReference(null);
        }
        if (\array_key_exists('reference_id', $data) && $data['reference_id'] !== null) {
            $object->setReferenceId($data['reference_id']);
            unset($data['reference_id']);
        }
        elseif (\array_key_exists('reference_id', $data) && $data['reference_id'] === null) {
            $object->setReferenceId(null);
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $object->setAction($data['action']);
            unset($data['action']);
        }
        elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->setAction(null);
        }
        if (\array_key_exists('details', $data) && $data['details'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['details'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setDetails($values_1);
            unset($data['details']);
        }
        elseif (\array_key_exists('details', $data) && $data['details'] === null) {
            $object->setDetails(null);
        }
        if (\array_key_exists('internal_note', $data) && $data['internal_note'] !== null) {
            $object->setInternalNote($data['internal_note']);
            unset($data['internal_note']);
        }
        elseif (\array_key_exists('internal_note', $data) && $data['internal_note'] === null) {
            $object->setInternalNote(null);
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
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['order_change_id'] = $data->getOrderChangeId();
        $values = [];
        foreach ($data->getOrderChange() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['order_change'] = $values;
        $dataArray['order_id'] = $data->getOrderId();
        $dataArray['return_id'] = $data->getReturnId();
        $dataArray['claim_id'] = $data->getClaimId();
        $dataArray['exchange_id'] = $data->getExchangeId();
        $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        $dataArray['reference'] = $data->getReference();
        $dataArray['reference_id'] = $data->getReferenceId();
        $dataArray['action'] = $data->getAction();
        $values_1 = [];
        foreach ($data->getDetails() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $dataArray['details'] = $values_1;
        $dataArray['internal_note'] = $data->getInternalNote();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminOrderChangeAction::class => false];
    }
}
