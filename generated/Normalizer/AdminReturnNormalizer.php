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
class AdminReturnNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminReturn::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminReturn::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminReturn();
        if (\array_key_exists('refund_amount', $data) && \is_int($data['refund_amount'])) {
            $data['refund_amount'] = (double) $data['refund_amount'];
        }
        if (\array_key_exists('order_version', $data) && \is_int($data['order_version'])) {
            $data['order_version'] = (double) $data['order_version'];
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
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminReturnItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['created_at']));
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('canceled_at', $data) && $data['canceled_at'] !== null) {
            $object->setCanceledAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['canceled_at']));
            unset($data['canceled_at']);
        }
        elseif (\array_key_exists('canceled_at', $data) && $data['canceled_at'] === null) {
            $object->setCanceledAt(null);
        }
        if (\array_key_exists('exchange_id', $data) && $data['exchange_id'] !== null) {
            $object->setExchangeId($data['exchange_id']);
            unset($data['exchange_id']);
        }
        elseif (\array_key_exists('exchange_id', $data) && $data['exchange_id'] === null) {
            $object->setExchangeId(null);
        }
        if (\array_key_exists('location_id', $data) && $data['location_id'] !== null) {
            $object->setLocationId($data['location_id']);
            unset($data['location_id']);
        }
        elseif (\array_key_exists('location_id', $data) && $data['location_id'] === null) {
            $object->setLocationId(null);
        }
        if (\array_key_exists('claim_id', $data) && $data['claim_id'] !== null) {
            $object->setClaimId($data['claim_id']);
            unset($data['claim_id']);
        }
        elseif (\array_key_exists('claim_id', $data) && $data['claim_id'] === null) {
            $object->setClaimId(null);
        }
        if (\array_key_exists('order_version', $data) && $data['order_version'] !== null) {
            $object->setOrderVersion($data['order_version']);
            unset($data['order_version']);
        }
        elseif (\array_key_exists('order_version', $data) && $data['order_version'] === null) {
            $object->setOrderVersion(null);
        }
        if (\array_key_exists('display_id', $data) && $data['display_id'] !== null) {
            $object->setDisplayId($data['display_id']);
            unset($data['display_id']);
        }
        elseif (\array_key_exists('display_id', $data) && $data['display_id'] === null) {
            $object->setDisplayId(null);
        }
        if (\array_key_exists('no_notification', $data) && $data['no_notification'] !== null) {
            $object->setNoNotification($data['no_notification']);
            unset($data['no_notification']);
        }
        elseif (\array_key_exists('no_notification', $data) && $data['no_notification'] === null) {
            $object->setNoNotification(null);
        }
        if (\array_key_exists('received_at', $data) && $data['received_at'] !== null) {
            $object->setReceivedAt($data['received_at']);
            unset($data['received_at']);
        }
        elseif (\array_key_exists('received_at', $data) && $data['received_at'] === null) {
            $object->setReceivedAt(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('refundAmount') && null !== $data->getRefundAmount()) {
            $dataArray['refund_amount'] = $data->getRefundAmount();
        }
        $dataArray['order_id'] = $data->getOrderId();
        $values = [];
        foreach ($data->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['items'] = $values;
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
        if ($data->isInitialized('exchangeId') && null !== $data->getExchangeId()) {
            $dataArray['exchange_id'] = $data->getExchangeId();
        }
        if ($data->isInitialized('locationId') && null !== $data->getLocationId()) {
            $dataArray['location_id'] = $data->getLocationId();
        }
        if ($data->isInitialized('claimId') && null !== $data->getClaimId()) {
            $dataArray['claim_id'] = $data->getClaimId();
        }
        $dataArray['order_version'] = $data->getOrderVersion();
        $dataArray['display_id'] = $data->getDisplayId();
        if ($data->isInitialized('noNotification') && null !== $data->getNoNotification()) {
            $dataArray['no_notification'] = $data->getNoNotification();
        }
        $dataArray['received_at'] = $data->getReceivedAt();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminReturn::class => false];
    }
}
