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
class OrderClaimNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\OrderClaim::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\OrderClaim::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\OrderClaim();
        if (\array_key_exists('refund_amount', $data) && \is_int($data['refund_amount'])) {
            $data['refund_amount'] = (double) $data['refund_amount'];
        }
        if (\array_key_exists('display_id', $data) && \is_int($data['display_id'])) {
            $data['display_id'] = (double) $data['display_id'];
        }
        if (\array_key_exists('order_version', $data) && \is_int($data['order_version'])) {
            $data['order_version'] = (double) $data['order_version'];
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
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
            unset($data['order_id']);
        }
        elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('claim_items', $data) && $data['claim_items'] !== null) {
            $values = [];
            foreach ($data['claim_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\BaseClaimItem::class, 'json', $context);
            }
            $object->setClaimItems($values);
            unset($data['claim_items']);
        }
        elseif (\array_key_exists('claim_items', $data) && $data['claim_items'] === null) {
            $object->setClaimItems(null);
        }
        if (\array_key_exists('additional_items', $data) && $data['additional_items'] !== null) {
            $values_1 = [];
            foreach ($data['additional_items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\BaseClaimItem::class, 'json', $context);
            }
            $object->setAdditionalItems($values_1);
            unset($data['additional_items']);
        }
        elseif (\array_key_exists('additional_items', $data) && $data['additional_items'] === null) {
            $object->setAdditionalItems(null);
        }
        if (\array_key_exists('return', $data) && $data['return'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['return'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setReturn($values_2);
            unset($data['return']);
        }
        elseif (\array_key_exists('return', $data) && $data['return'] === null) {
            $object->setReturn(null);
        }
        if (\array_key_exists('return_id', $data) && $data['return_id'] !== null) {
            $object->setReturnId($data['return_id']);
            unset($data['return_id']);
        }
        elseif (\array_key_exists('return_id', $data) && $data['return_id'] === null) {
            $object->setReturnId(null);
        }
        if (\array_key_exists('no_notification', $data) && $data['no_notification'] !== null) {
            $object->setNoNotification($data['no_notification']);
            unset($data['no_notification']);
        }
        elseif (\array_key_exists('no_notification', $data) && $data['no_notification'] === null) {
            $object->setNoNotification(null);
        }
        if (\array_key_exists('refund_amount', $data) && $data['refund_amount'] !== null) {
            $object->setRefundAmount($data['refund_amount']);
            unset($data['refund_amount']);
        }
        elseif (\array_key_exists('refund_amount', $data) && $data['refund_amount'] === null) {
            $object->setRefundAmount(null);
        }
        if (\array_key_exists('display_id', $data) && $data['display_id'] !== null) {
            $object->setDisplayId($data['display_id']);
            unset($data['display_id']);
        }
        elseif (\array_key_exists('display_id', $data) && $data['display_id'] === null) {
            $object->setDisplayId(null);
        }
        if (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] !== null) {
            $values_3 = [];
            foreach ($data['shipping_methods'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Gracious\MedusaApiClientBundle\Model\OrderShippingMethod::class, 'json', $context);
            }
            $object->setShippingMethods($values_3);
            unset($data['shipping_methods']);
        }
        elseif (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] === null) {
            $object->setShippingMethods(null);
        }
        if (\array_key_exists('transactions', $data) && $data['transactions'] !== null) {
            $values_4 = [];
            foreach ($data['transactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Gracious\MedusaApiClientBundle\Model\OrderTransaction::class, 'json', $context);
            }
            $object->setTransactions($values_4);
            unset($data['transactions']);
        }
        elseif (\array_key_exists('transactions', $data) && $data['transactions'] === null) {
            $object->setTransactions(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_5) {
                $values_5[$key_1] = $value_5;
            }
            $object->setMetadata($values_5);
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
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('order', $data) && $data['order'] !== null) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Gracious\MedusaApiClientBundle\Model\Order::class, 'json', $context));
            unset($data['order']);
        }
        elseif (\array_key_exists('order', $data) && $data['order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('order_version', $data) && $data['order_version'] !== null) {
            $object->setOrderVersion($data['order_version']);
            unset($data['order_version']);
        }
        elseif (\array_key_exists('order_version', $data) && $data['order_version'] === null) {
            $object->setOrderVersion(null);
        }
        if (\array_key_exists('raw_refund_amount', $data) && $data['raw_refund_amount'] !== null) {
            $object->setRawRefundAmount($data['raw_refund_amount']);
            unset($data['raw_refund_amount']);
        }
        elseif (\array_key_exists('raw_refund_amount', $data) && $data['raw_refund_amount'] === null) {
            $object->setRawRefundAmount(null);
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
        if (\array_key_exists('canceled_at', $data) && $data['canceled_at'] !== null) {
            $object->setCanceledAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['canceled_at']));
            unset($data['canceled_at']);
        }
        elseif (\array_key_exists('canceled_at', $data) && $data['canceled_at'] === null) {
            $object->setCanceledAt(null);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['order_id'] = $data->getOrderId();
        $values = [];
        foreach ($data->getClaimItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['claim_items'] = $values;
        $values_1 = [];
        foreach ($data->getAdditionalItems() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['additional_items'] = $values_1;
        if ($data->isInitialized('return') && null !== $data->getReturn()) {
            $values_2 = [];
            foreach ($data->getReturn() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['return'] = $values_2;
        }
        if ($data->isInitialized('returnId') && null !== $data->getReturnId()) {
            $dataArray['return_id'] = $data->getReturnId();
        }
        if ($data->isInitialized('noNotification') && null !== $data->getNoNotification()) {
            $dataArray['no_notification'] = $data->getNoNotification();
        }
        if ($data->isInitialized('refundAmount') && null !== $data->getRefundAmount()) {
            $dataArray['refund_amount'] = $data->getRefundAmount();
        }
        $dataArray['display_id'] = $data->getDisplayId();
        if ($data->isInitialized('shippingMethods') && null !== $data->getShippingMethods()) {
            $values_3 = [];
            foreach ($data->getShippingMethods() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['shipping_methods'] = $values_3;
        }
        if ($data->isInitialized('transactions') && null !== $data->getTransactions()) {
            $values_4 = [];
            foreach ($data->getTransactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['transactions'] = $values_4;
        }
        $values_5 = [];
        foreach ($data->getMetadata() as $key_1 => $value_5) {
            $values_5[$key_1] = $value_5;
        }
        $dataArray['metadata'] = $values_5;
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        }
        $dataArray['order_version'] = $data->getOrderVersion();
        if ($data->isInitialized('rawRefundAmount') && null !== $data->getRawRefundAmount()) {
            $dataArray['raw_refund_amount'] = $data->getRawRefundAmount();
        }
        if ($data->isInitialized('createdBy') && null !== $data->getCreatedBy()) {
            $dataArray['created_by'] = $data->getCreatedBy();
        }
        if ($data->isInitialized('deletedAt') && null !== $data->getDeletedAt()) {
            $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('canceledAt') && null !== $data->getCanceledAt()) {
            $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\OrderClaim::class => false];
    }
}
