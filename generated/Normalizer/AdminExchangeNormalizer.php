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
class AdminExchangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminExchange::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminExchange::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminExchange();
        if (\array_key_exists('difference_due', $data) && \is_int($data['difference_due'])) {
            $data['difference_due'] = (double) $data['difference_due'];
        }
        if (\array_key_exists('no_notification', $data) && \is_int($data['no_notification'])) {
            $data['no_notification'] = (bool) $data['no_notification'];
        }
        if (\array_key_exists('allow_backorder', $data) && \is_int($data['allow_backorder'])) {
            $data['allow_backorder'] = (bool) $data['allow_backorder'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
            unset($data['order_id']);
        }
        elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('return_items', $data) && $data['return_items'] !== null) {
            $values = [];
            foreach ($data['return_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminReturnItem::class, 'json', $context);
            }
            $object->setReturnItems($values);
            unset($data['return_items']);
        }
        elseif (\array_key_exists('return_items', $data) && $data['return_items'] === null) {
            $object->setReturnItems(null);
        }
        if (\array_key_exists('additional_items', $data) && $data['additional_items'] !== null) {
            $values_1 = [];
            foreach ($data['additional_items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\BaseExchangeItem::class, 'json', $context);
            }
            $object->setAdditionalItems($values_1);
            unset($data['additional_items']);
        }
        elseif (\array_key_exists('additional_items', $data) && $data['additional_items'] === null) {
            $object->setAdditionalItems(null);
        }
        if (\array_key_exists('no_notification', $data) && $data['no_notification'] !== null) {
            $object->setNoNotification($data['no_notification']);
            unset($data['no_notification']);
        }
        elseif (\array_key_exists('no_notification', $data) && $data['no_notification'] === null) {
            $object->setNoNotification(null);
        }
        if (\array_key_exists('difference_due', $data) && $data['difference_due'] !== null) {
            $object->setDifferenceDue($data['difference_due']);
            unset($data['difference_due']);
        }
        elseif (\array_key_exists('difference_due', $data) && $data['difference_due'] === null) {
            $object->setDifferenceDue(null);
        }
        if (\array_key_exists('return', $data) && $data['return'] !== null) {
            $object->setReturn($this->denormalizer->denormalize($data['return'], \Gracious\MedusaApiClientBundle\Model\AdminReturn::class, 'json', $context));
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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('display_id', $data) && $data['display_id'] !== null) {
            $object->setDisplayId($data['display_id']);
            unset($data['display_id']);
        }
        elseif (\array_key_exists('display_id', $data) && $data['display_id'] === null) {
            $object->setDisplayId(null);
        }
        if (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] !== null) {
            $values_2 = [];
            foreach ($data['shipping_methods'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingMethod::class, 'json', $context);
            }
            $object->setShippingMethods($values_2);
            unset($data['shipping_methods']);
        }
        elseif (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] === null) {
            $object->setShippingMethods(null);
        }
        if (\array_key_exists('transactions', $data) && $data['transactions'] !== null) {
            $values_3 = [];
            foreach ($data['transactions'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Gracious\MedusaApiClientBundle\Model\BaseOrderTransaction::class, 'json', $context);
            }
            $object->setTransactions($values_3);
            unset($data['transactions']);
        }
        elseif (\array_key_exists('transactions', $data) && $data['transactions'] === null) {
            $object->setTransactions(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $object->setMetadata($values_4);
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
        if (\array_key_exists('order_version', $data) && $data['order_version'] !== null) {
            $object->setOrderVersion($data['order_version']);
            unset($data['order_version']);
        }
        elseif (\array_key_exists('order_version', $data) && $data['order_version'] === null) {
            $object->setOrderVersion(null);
        }
        if (\array_key_exists('created_by', $data) && $data['created_by'] !== null) {
            $object->setCreatedBy($data['created_by']);
            unset($data['created_by']);
        }
        elseif (\array_key_exists('created_by', $data) && $data['created_by'] === null) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('canceled_at', $data) && $data['canceled_at'] !== null) {
            $object->setCanceledAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['canceled_at']));
            unset($data['canceled_at']);
        }
        elseif (\array_key_exists('canceled_at', $data) && $data['canceled_at'] === null) {
            $object->setCanceledAt(null);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        if (\array_key_exists('order', $data) && $data['order'] !== null) {
            $object->setOrder($this->denormalizer->denormalize($data['order'], \Gracious\MedusaApiClientBundle\Model\BaseOrder::class, 'json', $context));
            unset($data['order']);
        }
        elseif (\array_key_exists('order', $data) && $data['order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('allow_backorder', $data) && $data['allow_backorder'] !== null) {
            $object->setAllowBackorder($data['allow_backorder']);
            unset($data['allow_backorder']);
        }
        elseif (\array_key_exists('allow_backorder', $data) && $data['allow_backorder'] === null) {
            $object->setAllowBackorder(null);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['order_id'] = $data->getOrderId();
        $values = [];
        foreach ($data->getReturnItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['return_items'] = $values;
        $values_1 = [];
        foreach ($data->getAdditionalItems() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['additional_items'] = $values_1;
        if ($data->isInitialized('noNotification') && null !== $data->getNoNotification()) {
            $dataArray['no_notification'] = $data->getNoNotification();
        }
        if ($data->isInitialized('differenceDue') && null !== $data->getDifferenceDue()) {
            $dataArray['difference_due'] = $data->getDifferenceDue();
        }
        if ($data->isInitialized('return') && null !== $data->getReturn()) {
            $dataArray['return'] = $this->normalizer->normalize($data->getReturn(), 'json', $context);
        }
        if ($data->isInitialized('returnId') && null !== $data->getReturnId()) {
            $dataArray['return_id'] = $data->getReturnId();
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('displayId') && null !== $data->getDisplayId()) {
            $dataArray['display_id'] = $data->getDisplayId();
        }
        if ($data->isInitialized('shippingMethods') && null !== $data->getShippingMethods()) {
            $values_2 = [];
            foreach ($data->getShippingMethods() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['shipping_methods'] = $values_2;
        }
        if ($data->isInitialized('transactions') && null !== $data->getTransactions()) {
            $values_3 = [];
            foreach ($data->getTransactions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['transactions'] = $values_3;
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_4 = [];
            foreach ($data->getMetadata() as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $dataArray['metadata'] = $values_4;
        }
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        if ($data->isInitialized('orderVersion') && null !== $data->getOrderVersion()) {
            $dataArray['order_version'] = $data->getOrderVersion();
        }
        if ($data->isInitialized('createdBy') && null !== $data->getCreatedBy()) {
            $dataArray['created_by'] = $data->getCreatedBy();
        }
        $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['order'] = $this->normalizer->normalize($data->getOrder(), 'json', $context);
        }
        if ($data->isInitialized('allowBackorder') && null !== $data->getAllowBackorder()) {
            $dataArray['allow_backorder'] = $data->getAllowBackorder();
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminExchange::class => false];
    }
}
