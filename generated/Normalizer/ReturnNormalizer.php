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
class ReturnNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\_Return::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\_Return::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\_Return();
        if (\array_key_exists('refund_amount', $data) && \is_int($data['refund_amount'])) {
            $data['refund_amount'] = (double) $data['refund_amount'];
        }
        if (\array_key_exists('display_id', $data) && \is_int($data['display_id'])) {
            $data['display_id'] = (double) $data['display_id'];
        }
        if (\array_key_exists('no_notification', $data) && \is_int($data['no_notification'])) {
            $data['no_notification'] = (bool) $data['no_notification'];
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
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('refund_amount', $data) && $data['refund_amount'] !== null) {
            $object->setRefundAmount($data['refund_amount']);
            unset($data['refund_amount']);
        }
        elseif (\array_key_exists('refund_amount', $data) && $data['refund_amount'] === null) {
            $object->setRefundAmount(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
            unset($data['order_id']);
        }
        elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\OrderReturnItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] !== null) {
            $values_1 = [];
            foreach ($data['shipping_methods'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\OrderShippingMethod::class, 'json', $context);
            }
            $object->setShippingMethods($values_1);
            unset($data['shipping_methods']);
        }
        elseif (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] === null) {
            $object->setShippingMethods(null);
        }
        if (\array_key_exists('transactions', $data) && $data['transactions'] !== null) {
            $values_2 = [];
            foreach ($data['transactions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\OrderTransaction::class, 'json', $context);
            }
            $object->setTransactions($values_2);
            unset($data['transactions']);
        }
        elseif (\array_key_exists('transactions', $data) && $data['transactions'] === null) {
            $object->setTransactions(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_3) {
                $values_3[$key] = $value_3;
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
        if (\array_key_exists('canceled_at', $data) && $data['canceled_at'] !== null) {
            $object->setCanceledAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['canceled_at']));
            unset($data['canceled_at']);
        }
        elseif (\array_key_exists('canceled_at', $data) && $data['canceled_at'] === null) {
            $object->setCanceledAt(null);
        }
        if (\array_key_exists('raw_refund_amount', $data) && $data['raw_refund_amount'] !== null) {
            $object->setRawRefundAmount($data['raw_refund_amount']);
            unset($data['raw_refund_amount']);
        }
        elseif (\array_key_exists('raw_refund_amount', $data) && $data['raw_refund_amount'] === null) {
            $object->setRawRefundAmount(null);
        }
        if (\array_key_exists('order', $data) && $data['order'] !== null) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Gracious\MedusaApiClientBundle\Model\Order::class, 'json', $context));
            unset($data['order']);
        }
        elseif (\array_key_exists('order', $data) && $data['order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('exchange_id', $data) && $data['exchange_id'] !== null) {
            $object->setExchangeId($data['exchange_id']);
            unset($data['exchange_id']);
        }
        elseif (\array_key_exists('exchange_id', $data) && $data['exchange_id'] === null) {
            $object->setExchangeId(null);
        }
        if (\array_key_exists('exchange', $data) && $data['exchange'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['exchange'] as $key_1 => $value_4) {
                $values_4[$key_1] = $value_4;
            }
            $object->setExchange($values_4);
            unset($data['exchange']);
        }
        elseif (\array_key_exists('exchange', $data) && $data['exchange'] === null) {
            $object->setExchange(null);
        }
        if (\array_key_exists('claim_id', $data) && $data['claim_id'] !== null) {
            $object->setClaimId($data['claim_id']);
            unset($data['claim_id']);
        }
        elseif (\array_key_exists('claim_id', $data) && $data['claim_id'] === null) {
            $object->setClaimId(null);
        }
        if (\array_key_exists('claim', $data) && $data['claim'] !== null) {
            $object->setClaim($this->denormalizer->denormalize($data['claim'], \Gracious\MedusaApiClientBundle\Model\OrderClaim::class, 'json', $context));
            unset($data['claim']);
        }
        elseif (\array_key_exists('claim', $data) && $data['claim'] === null) {
            $object->setClaim(null);
        }
        if (\array_key_exists('display_id', $data) && $data['display_id'] !== null) {
            $object->setDisplayId($data['display_id']);
            unset($data['display_id']);
        }
        elseif (\array_key_exists('display_id', $data) && $data['display_id'] === null) {
            $object->setDisplayId(null);
        }
        if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
            $object->setLocationId($data['location_id']);
            unset($data['location_id']);
        }
        elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
            $object->setLocationId(null);
        }
        if (\array_key_exists('no_notification', $data) && $data['no_notification'] !== null) {
            $object->setNoNotification($data['no_notification']);
            unset($data['no_notification']);
        }
        elseif (\array_key_exists('no_notification', $data) && $data['no_notification'] === null) {
            $object->setNoNotification(null);
        }
        if (\array_key_exists('created_by', $data) && $data['created_by'] !== null) {
            $object->setCreatedBy($data['created_by']);
            unset($data['created_by']);
        }
        elseif (\array_key_exists('created_by', $data) && $data['created_by'] === null) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        if (\array_key_exists('requested_at', $data) && $data['requested_at'] !== null) {
            $object->setRequestedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['requested_at']));
            unset($data['requested_at']);
        }
        elseif (\array_key_exists('requested_at', $data) && $data['requested_at'] === null) {
            $object->setRequestedAt(null);
        }
        if (\array_key_exists('received_at', $data) && $data['received_at'] !== null) {
            $object->setReceivedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['received_at']));
            unset($data['received_at']);
        }
        elseif (\array_key_exists('received_at', $data) && $data['received_at'] === null) {
            $object->setReceivedAt(null);
        }
        foreach ($data as $key_2 => $value_5) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('refundAmount') && null !== $data->getRefundAmount()) {
            $dataArray['refund_amount'] = $data->getRefundAmount();
        }
        $dataArray['order_id'] = $data->getOrderId();
        $values = [];
        foreach ($data->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['items'] = $values;
        if ($data->isInitialized('shippingMethods') && null !== $data->getShippingMethods()) {
            $values_1 = [];
            foreach ($data->getShippingMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['shipping_methods'] = $values_1;
        }
        if ($data->isInitialized('transactions') && null !== $data->getTransactions()) {
            $values_2 = [];
            foreach ($data->getTransactions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['transactions'] = $values_2;
        }
        $values_3 = [];
        foreach ($data->getMetadata() as $key => $value_3) {
            $values_3[$key] = $value_3;
        }
        $dataArray['metadata'] = $values_3;
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('canceledAt') && null !== $data->getCanceledAt()) {
            $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('rawRefundAmount') && null !== $data->getRawRefundAmount()) {
            $dataArray['raw_refund_amount'] = $data->getRawRefundAmount();
        }
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        }
        if ($data->isInitialized('exchangeId') && null !== $data->getExchangeId()) {
            $dataArray['exchange_id'] = $data->getExchangeId();
        }
        if ($data->isInitialized('exchange') && null !== $data->getExchange()) {
            $values_4 = [];
            foreach ($data->getExchange() as $key_1 => $value_4) {
                $values_4[$key_1] = $value_4;
            }
            $dataArray['exchange'] = $values_4;
        }
        if ($data->isInitialized('claimId') && null !== $data->getClaimId()) {
            $dataArray['claim_id'] = $data->getClaimId();
        }
        if ($data->isInitialized('claim') && null !== $data->getClaim()) {
            $dataArray['claim'] = $this->normalizer->normalize($data->getClaim(), 'json', $context);
        }
        $dataArray['display_id'] = $data->getDisplayId();
        if ($data->isInitialized('locationId') && null !== $data->getLocationId()) {
            $dataArray['location_id'] = $data->getLocationId();
        }
        if ($data->isInitialized('noNotification') && null !== $data->getNoNotification()) {
            $dataArray['no_notification'] = $data->getNoNotification();
        }
        if ($data->isInitialized('createdBy') && null !== $data->getCreatedBy()) {
            $dataArray['created_by'] = $data->getCreatedBy();
        }
        if ($data->isInitialized('deletedAt') && null !== $data->getDeletedAt()) {
            $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('requestedAt') && null !== $data->getRequestedAt()) {
            $dataArray['requested_at'] = $data->getRequestedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('receivedAt') && null !== $data->getReceivedAt()) {
            $dataArray['received_at'] = $data->getReceivedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        foreach ($data as $key_2 => $value_5) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\_Return::class => false];
    }
}
