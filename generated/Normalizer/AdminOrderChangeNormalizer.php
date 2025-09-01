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
class AdminOrderChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminOrderChange::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminOrderChange::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminOrderChange();
        if (\array_key_exists('version', $data) && \is_int($data['version'])) {
            $data['version'] = (double) $data['version'];
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
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('change_type', $data) && $data['change_type'] !== null) {
            $object->setChangeType($data['change_type']);
            unset($data['change_type']);
        }
        elseif (\array_key_exists('change_type', $data) && $data['change_type'] === null) {
            $object->setChangeType(null);
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
        if (\array_key_exists('exchange_id', $data) && $data['exchange_id'] !== null) {
            $object->setExchangeId($data['exchange_id']);
            unset($data['exchange_id']);
        }
        elseif (\array_key_exists('exchange_id', $data) && $data['exchange_id'] === null) {
            $object->setExchangeId(null);
        }
        if (\array_key_exists('claim_id', $data) && $data['claim_id'] !== null) {
            $object->setClaimId($data['claim_id']);
            unset($data['claim_id']);
        }
        elseif (\array_key_exists('claim_id', $data) && $data['claim_id'] === null) {
            $object->setClaimId(null);
        }
        if (\array_key_exists('order', $data) && $data['order'] !== null) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Gracious\MedusaApiClientBundle\Model\AdminOrder::class, 'json', $context));
            unset($data['order']);
        }
        elseif (\array_key_exists('order', $data) && $data['order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('return_order', $data) && $data['return_order'] !== null) {
            $object->setReturnOrder($this->denormalizer->denormalize($data['return_order'], \Gracious\MedusaApiClientBundle\Model\AdminReturn::class, 'json', $context));
            unset($data['return_order']);
        }
        elseif (\array_key_exists('return_order', $data) && $data['return_order'] === null) {
            $object->setReturnOrder(null);
        }
        if (\array_key_exists('exchange', $data) && $data['exchange'] !== null) {
            $object->setExchange($this->denormalizer->denormalize($data['exchange'], \Gracious\MedusaApiClientBundle\Model\AdminExchange::class, 'json', $context));
            unset($data['exchange']);
        }
        elseif (\array_key_exists('exchange', $data) && $data['exchange'] === null) {
            $object->setExchange(null);
        }
        if (\array_key_exists('claim', $data) && $data['claim'] !== null) {
            $object->setClaim($this->denormalizer->denormalize($data['claim'], \Gracious\MedusaApiClientBundle\Model\AdminClaim::class, 'json', $context));
            unset($data['claim']);
        }
        elseif (\array_key_exists('claim', $data) && $data['claim'] === null) {
            $object->setClaim(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values = [];
            foreach ($data['actions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminOrderChangeAction::class, 'json', $context);
            }
            $object->setActions($values);
            unset($data['actions']);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('requested_by', $data) && $data['requested_by'] !== null) {
            $object->setRequestedBy($data['requested_by']);
            unset($data['requested_by']);
        }
        elseif (\array_key_exists('requested_by', $data) && $data['requested_by'] === null) {
            $object->setRequestedBy(null);
        }
        if (\array_key_exists('requested_at', $data) && $data['requested_at'] !== null) {
            $object->setRequestedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['requested_at']));
            unset($data['requested_at']);
        }
        elseif (\array_key_exists('requested_at', $data) && $data['requested_at'] === null) {
            $object->setRequestedAt(null);
        }
        if (\array_key_exists('confirmed_by', $data) && $data['confirmed_by'] !== null) {
            $object->setConfirmedBy($data['confirmed_by']);
            unset($data['confirmed_by']);
        }
        elseif (\array_key_exists('confirmed_by', $data) && $data['confirmed_by'] === null) {
            $object->setConfirmedBy(null);
        }
        if (\array_key_exists('confirmed_at', $data) && $data['confirmed_at'] !== null) {
            $object->setConfirmedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['confirmed_at']));
            unset($data['confirmed_at']);
        }
        elseif (\array_key_exists('confirmed_at', $data) && $data['confirmed_at'] === null) {
            $object->setConfirmedAt(null);
        }
        if (\array_key_exists('declined_by', $data) && $data['declined_by'] !== null) {
            $object->setDeclinedBy($data['declined_by']);
            unset($data['declined_by']);
        }
        elseif (\array_key_exists('declined_by', $data) && $data['declined_by'] === null) {
            $object->setDeclinedBy(null);
        }
        if (\array_key_exists('declined_reason', $data) && $data['declined_reason'] !== null) {
            $object->setDeclinedReason($data['declined_reason']);
            unset($data['declined_reason']);
        }
        elseif (\array_key_exists('declined_reason', $data) && $data['declined_reason'] === null) {
            $object->setDeclinedReason(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setMetadata($values_1);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('declined_at', $data) && $data['declined_at'] !== null) {
            $object->setDeclinedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['declined_at']));
            unset($data['declined_at']);
        }
        elseif (\array_key_exists('declined_at', $data) && $data['declined_at'] === null) {
            $object->setDeclinedAt(null);
        }
        if (\array_key_exists('canceled_by', $data) && $data['canceled_by'] !== null) {
            $object->setCanceledBy($data['canceled_by']);
            unset($data['canceled_by']);
        }
        elseif (\array_key_exists('canceled_by', $data) && $data['canceled_by'] === null) {
            $object->setCanceledBy(null);
        }
        if (\array_key_exists('canceled_at', $data) && $data['canceled_at'] !== null) {
            $object->setCanceledAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['canceled_at']));
            unset($data['canceled_at']);
        }
        elseif (\array_key_exists('canceled_at', $data) && $data['canceled_at'] === null) {
            $object->setCanceledAt(null);
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
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['version'] = $data->getVersion();
        if ($data->isInitialized('changeType') && null !== $data->getChangeType()) {
            $dataArray['change_type'] = $data->getChangeType();
        }
        $dataArray['order_id'] = $data->getOrderId();
        $dataArray['return_id'] = $data->getReturnId();
        $dataArray['exchange_id'] = $data->getExchangeId();
        $dataArray['claim_id'] = $data->getClaimId();
        $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        $dataArray['return_order'] = $this->normalizer->normalize($data->getReturnOrder(), 'json', $context);
        $dataArray['exchange'] = $this->normalizer->normalize($data->getExchange(), 'json', $context);
        $dataArray['claim'] = $this->normalizer->normalize($data->getClaim(), 'json', $context);
        $values = [];
        foreach ($data->getActions() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['actions'] = $values;
        $dataArray['status'] = $data->getStatus();
        $dataArray['requested_by'] = $data->getRequestedBy();
        $dataArray['requested_at'] = $data->getRequestedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['confirmed_by'] = $data->getConfirmedBy();
        $dataArray['confirmed_at'] = $data->getConfirmedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['declined_by'] = $data->getDeclinedBy();
        $dataArray['declined_reason'] = $data->getDeclinedReason();
        $values_1 = [];
        foreach ($data->getMetadata() as $key => $value_1) {
            $values_1[$key] = $value_1;
        }
        $dataArray['metadata'] = $values_1;
        $dataArray['declined_at'] = $data->getDeclinedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['canceled_by'] = $data->getCanceledBy();
        $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminOrderChange::class => false];
    }
}
