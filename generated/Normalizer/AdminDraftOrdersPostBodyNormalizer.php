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
class AdminDraftOrdersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBody();
        if (\array_key_exists('no_notification_order', $data) && \is_int($data['no_notification_order'])) {
            $data['no_notification_order'] = (bool) $data['no_notification_order'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('sales_channel_id', $data) && $data['sales_channel_id'] !== null) {
            $object->setSalesChannelId($data['sales_channel_id']);
            unset($data['sales_channel_id']);
        }
        elseif (\array_key_exists('sales_channel_id', $data) && $data['sales_channel_id'] === null) {
            $object->setSalesChannelId(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
            unset($data['customer_id']);
        }
        elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('billing_address', $data) && $data['billing_address'] !== null) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodybillingAddress::class, 'json', $context));
            unset($data['billing_address']);
        }
        elseif (\array_key_exists('billing_address', $data) && $data['billing_address'] === null) {
            $object->setBillingAddress(null);
        }
        if (\array_key_exists('shipping_address', $data) && $data['shipping_address'] !== null) {
            $object->setShippingAddress($this->denormalizer->denormalize($data['shipping_address'], \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyshippingAddress::class, 'json', $context));
            unset($data['shipping_address']);
        }
        elseif (\array_key_exists('shipping_address', $data) && $data['shipping_address'] === null) {
            $object->setShippingAddress(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyitemsItem::class, 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('region_id', $data) && $data['region_id'] !== null) {
            $object->setRegionId($data['region_id']);
            unset($data['region_id']);
        }
        elseif (\array_key_exists('region_id', $data) && $data['region_id'] === null) {
            $object->setRegionId(null);
        }
        if (\array_key_exists('promo_codes', $data) && $data['promo_codes'] !== null) {
            $values_1 = [];
            foreach ($data['promo_codes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPromoCodes($values_1);
            unset($data['promo_codes']);
        }
        elseif (\array_key_exists('promo_codes', $data) && $data['promo_codes'] === null) {
            $object->setPromoCodes(null);
        }
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('no_notification_order', $data) && $data['no_notification_order'] !== null) {
            $object->setNoNotificationOrder($data['no_notification_order']);
            unset($data['no_notification_order']);
        }
        elseif (\array_key_exists('no_notification_order', $data) && $data['no_notification_order'] === null) {
            $object->setNoNotificationOrder(null);
        }
        if (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] !== null) {
            $values_2 = [];
            foreach ($data['shipping_methods'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyshippingMethodsItem::class, 'json', $context);
            }
            $object->setShippingMethods($values_2);
            unset($data['shipping_methods']);
        }
        elseif (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] === null) {
            $object->setShippingMethods(null);
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
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['additional_data'] as $key_1 => $value_4) {
                $values_4[$key_1] = $value_4;
            }
            $object->setAdditionalData($values_4);
            unset($data['additional_data']);
        }
        elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
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
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        $dataArray['sales_channel_id'] = $data->getSalesChannelId();
        $dataArray['email'] = $data->getEmail();
        $dataArray['customer_id'] = $data->getCustomerId();
        if ($data->isInitialized('billingAddress') && null !== $data->getBillingAddress()) {
            $dataArray['billing_address'] = $this->normalizer->normalize($data->getBillingAddress(), 'json', $context);
        }
        if ($data->isInitialized('shippingAddress') && null !== $data->getShippingAddress()) {
            $dataArray['shipping_address'] = $this->normalizer->normalize($data->getShippingAddress(), 'json', $context);
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values = [];
            foreach ($data->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['items'] = $values;
        }
        $dataArray['region_id'] = $data->getRegionId();
        if ($data->isInitialized('promoCodes') && null !== $data->getPromoCodes()) {
            $values_1 = [];
            foreach ($data->getPromoCodes() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['promo_codes'] = $values_1;
        }
        $dataArray['currency_code'] = $data->getCurrencyCode();
        if ($data->isInitialized('noNotificationOrder') && null !== $data->getNoNotificationOrder()) {
            $dataArray['no_notification_order'] = $data->getNoNotificationOrder();
        }
        $values_2 = [];
        foreach ($data->getShippingMethods() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['shipping_methods'] = $values_2;
        $values_3 = [];
        foreach ($data->getMetadata() as $key => $value_3) {
            $values_3[$key] = $value_3;
        }
        $dataArray['metadata'] = $values_3;
        if ($data->isInitialized('additionalData') && null !== $data->getAdditionalData()) {
            $values_4 = [];
            foreach ($data->getAdditionalData() as $key_1 => $value_4) {
                $values_4[$key_1] = $value_4;
            }
            $dataArray['additional_data'] = $values_4;
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
        return [\Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBody::class => false];
    }
}