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
class AdminDraftOrderPreviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreview::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreview::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreview();
        if (\array_key_exists('return_requested_total', $data) && \is_int($data['return_requested_total'])) {
            $data['return_requested_total'] = (double) $data['return_requested_total'];
        }
        if (\array_key_exists('version', $data) && \is_int($data['version'])) {
            $data['version'] = (double) $data['version'];
        }
        if (\array_key_exists('display_id', $data) && \is_int($data['display_id'])) {
            $data['display_id'] = (double) $data['display_id'];
        }
        if (\array_key_exists('original_item_total', $data) && \is_int($data['original_item_total'])) {
            $data['original_item_total'] = (double) $data['original_item_total'];
        }
        if (\array_key_exists('original_item_subtotal', $data) && \is_int($data['original_item_subtotal'])) {
            $data['original_item_subtotal'] = (double) $data['original_item_subtotal'];
        }
        if (\array_key_exists('original_item_tax_total', $data) && \is_int($data['original_item_tax_total'])) {
            $data['original_item_tax_total'] = (double) $data['original_item_tax_total'];
        }
        if (\array_key_exists('item_total', $data) && \is_int($data['item_total'])) {
            $data['item_total'] = (double) $data['item_total'];
        }
        if (\array_key_exists('item_subtotal', $data) && \is_int($data['item_subtotal'])) {
            $data['item_subtotal'] = (double) $data['item_subtotal'];
        }
        if (\array_key_exists('item_tax_total', $data) && \is_int($data['item_tax_total'])) {
            $data['item_tax_total'] = (double) $data['item_tax_total'];
        }
        if (\array_key_exists('original_total', $data) && \is_int($data['original_total'])) {
            $data['original_total'] = (double) $data['original_total'];
        }
        if (\array_key_exists('original_subtotal', $data) && \is_int($data['original_subtotal'])) {
            $data['original_subtotal'] = (double) $data['original_subtotal'];
        }
        if (\array_key_exists('original_tax_total', $data) && \is_int($data['original_tax_total'])) {
            $data['original_tax_total'] = (double) $data['original_tax_total'];
        }
        if (\array_key_exists('total', $data) && \is_int($data['total'])) {
            $data['total'] = (double) $data['total'];
        }
        if (\array_key_exists('subtotal', $data) && \is_int($data['subtotal'])) {
            $data['subtotal'] = (double) $data['subtotal'];
        }
        if (\array_key_exists('tax_total', $data) && \is_int($data['tax_total'])) {
            $data['tax_total'] = (double) $data['tax_total'];
        }
        if (\array_key_exists('discount_total', $data) && \is_int($data['discount_total'])) {
            $data['discount_total'] = (double) $data['discount_total'];
        }
        if (\array_key_exists('discount_tax_total', $data) && \is_int($data['discount_tax_total'])) {
            $data['discount_tax_total'] = (double) $data['discount_tax_total'];
        }
        if (\array_key_exists('gift_card_total', $data) && \is_int($data['gift_card_total'])) {
            $data['gift_card_total'] = (double) $data['gift_card_total'];
        }
        if (\array_key_exists('gift_card_tax_total', $data) && \is_int($data['gift_card_tax_total'])) {
            $data['gift_card_tax_total'] = (double) $data['gift_card_tax_total'];
        }
        if (\array_key_exists('shipping_total', $data) && \is_int($data['shipping_total'])) {
            $data['shipping_total'] = (double) $data['shipping_total'];
        }
        if (\array_key_exists('shipping_subtotal', $data) && \is_int($data['shipping_subtotal'])) {
            $data['shipping_subtotal'] = (double) $data['shipping_subtotal'];
        }
        if (\array_key_exists('shipping_tax_total', $data) && \is_int($data['shipping_tax_total'])) {
            $data['shipping_tax_total'] = (double) $data['shipping_tax_total'];
        }
        if (\array_key_exists('original_shipping_total', $data) && \is_int($data['original_shipping_total'])) {
            $data['original_shipping_total'] = (double) $data['original_shipping_total'];
        }
        if (\array_key_exists('original_shipping_subtotal', $data) && \is_int($data['original_shipping_subtotal'])) {
            $data['original_shipping_subtotal'] = (double) $data['original_shipping_subtotal'];
        }
        if (\array_key_exists('original_shipping_tax_total', $data) && \is_int($data['original_shipping_tax_total'])) {
            $data['original_shipping_tax_total'] = (double) $data['original_shipping_tax_total'];
        }
        if (\array_key_exists('credit_line_total', $data) && \is_int($data['credit_line_total'])) {
            $data['credit_line_total'] = (double) $data['credit_line_total'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('return_requested_total', $data) && $data['return_requested_total'] !== null) {
            $object->setReturnRequestedTotal($data['return_requested_total']);
            unset($data['return_requested_total']);
        }
        elseif (\array_key_exists('return_requested_total', $data) && $data['return_requested_total'] === null) {
            $object->setReturnRequestedTotal(null);
        }
        if (\array_key_exists('order_change', $data) && $data['order_change'] !== null) {
            $object->setOrderChange($this->denormalizer->denormalize($data['order_change'], \Gracious\MedusaApiClientBundle\Model\AdminOrderChange::class, 'json', $context));
            unset($data['order_change']);
        }
        elseif (\array_key_exists('order_change', $data) && $data['order_change'] === null) {
            $object->setOrderChange(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewItemsItem::class, 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewShippingMethodsItem::class, 'json', $context);
            }
            $object->setShippingMethods($values_1);
            unset($data['shipping_methods']);
        }
        elseif (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] === null) {
            $object->setShippingMethods(null);
        }
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('region_id', $data) && $data['region_id'] !== null) {
            $object->setRegionId($data['region_id']);
            unset($data['region_id']);
        }
        elseif (\array_key_exists('region_id', $data) && $data['region_id'] === null) {
            $object->setRegionId(null);
        }
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
            unset($data['customer_id']);
        }
        elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
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
        if (\array_key_exists('display_id', $data) && $data['display_id'] !== null) {
            $object->setDisplayId($data['display_id']);
            unset($data['display_id']);
        }
        elseif (\array_key_exists('display_id', $data) && $data['display_id'] === null) {
            $object->setDisplayId(null);
        }
        if (\array_key_exists('shipping_address', $data) && $data['shipping_address'] !== null) {
            $object->setShippingAddress($this->denormalizer->denormalize($data['shipping_address'], \Gracious\MedusaApiClientBundle\Model\AdminOrderAddress::class, 'json', $context));
            unset($data['shipping_address']);
        }
        elseif (\array_key_exists('shipping_address', $data) && $data['shipping_address'] === null) {
            $object->setShippingAddress(null);
        }
        if (\array_key_exists('billing_address', $data) && $data['billing_address'] !== null) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], \Gracious\MedusaApiClientBundle\Model\AdminOrderAddress::class, 'json', $context));
            unset($data['billing_address']);
        }
        elseif (\array_key_exists('billing_address', $data) && $data['billing_address'] === null) {
            $object->setBillingAddress(null);
        }
        if (\array_key_exists('payment_collections', $data) && $data['payment_collections'] !== null) {
            $values_2 = [];
            foreach ($data['payment_collections'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\AdminPaymentCollection::class, 'json', $context);
            }
            $object->setPaymentCollections($values_2);
            unset($data['payment_collections']);
        }
        elseif (\array_key_exists('payment_collections', $data) && $data['payment_collections'] === null) {
            $object->setPaymentCollections(null);
        }
        if (\array_key_exists('payment_status', $data) && $data['payment_status'] !== null) {
            $object->setPaymentStatus($data['payment_status']);
            unset($data['payment_status']);
        }
        elseif (\array_key_exists('payment_status', $data) && $data['payment_status'] === null) {
            $object->setPaymentStatus(null);
        }
        if (\array_key_exists('fulfillments', $data) && $data['fulfillments'] !== null) {
            $values_3 = [];
            foreach ($data['fulfillments'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Gracious\MedusaApiClientBundle\Model\AdminOrderFulfillment::class, 'json', $context);
            }
            $object->setFulfillments($values_3);
            unset($data['fulfillments']);
        }
        elseif (\array_key_exists('fulfillments', $data) && $data['fulfillments'] === null) {
            $object->setFulfillments(null);
        }
        if (\array_key_exists('fulfillment_status', $data) && $data['fulfillment_status'] !== null) {
            $object->setFulfillmentStatus($data['fulfillment_status']);
            unset($data['fulfillment_status']);
        }
        elseif (\array_key_exists('fulfillment_status', $data) && $data['fulfillment_status'] === null) {
            $object->setFulfillmentStatus(null);
        }
        if (\array_key_exists('transactions', $data) && $data['transactions'] !== null) {
            $values_4 = [];
            foreach ($data['transactions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Gracious\MedusaApiClientBundle\Model\BaseOrderTransaction::class, 'json', $context);
            }
            $object->setTransactions($values_4);
            unset($data['transactions']);
        }
        elseif (\array_key_exists('transactions', $data) && $data['transactions'] === null) {
            $object->setTransactions(null);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($this->denormalizer->denormalize($data['summary'], \Gracious\MedusaApiClientBundle\Model\BaseOrderSummary::class, 'json', $context));
            unset($data['summary']);
        }
        elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value_5) {
                $values_5[$key] = $value_5;
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
        if (\array_key_exists('original_item_total', $data) && $data['original_item_total'] !== null) {
            $object->setOriginalItemTotal($data['original_item_total']);
            unset($data['original_item_total']);
        }
        elseif (\array_key_exists('original_item_total', $data) && $data['original_item_total'] === null) {
            $object->setOriginalItemTotal(null);
        }
        if (\array_key_exists('original_item_subtotal', $data) && $data['original_item_subtotal'] !== null) {
            $object->setOriginalItemSubtotal($data['original_item_subtotal']);
            unset($data['original_item_subtotal']);
        }
        elseif (\array_key_exists('original_item_subtotal', $data) && $data['original_item_subtotal'] === null) {
            $object->setOriginalItemSubtotal(null);
        }
        if (\array_key_exists('original_item_tax_total', $data) && $data['original_item_tax_total'] !== null) {
            $object->setOriginalItemTaxTotal($data['original_item_tax_total']);
            unset($data['original_item_tax_total']);
        }
        elseif (\array_key_exists('original_item_tax_total', $data) && $data['original_item_tax_total'] === null) {
            $object->setOriginalItemTaxTotal(null);
        }
        if (\array_key_exists('item_total', $data) && $data['item_total'] !== null) {
            $object->setItemTotal($data['item_total']);
            unset($data['item_total']);
        }
        elseif (\array_key_exists('item_total', $data) && $data['item_total'] === null) {
            $object->setItemTotal(null);
        }
        if (\array_key_exists('item_subtotal', $data) && $data['item_subtotal'] !== null) {
            $object->setItemSubtotal($data['item_subtotal']);
            unset($data['item_subtotal']);
        }
        elseif (\array_key_exists('item_subtotal', $data) && $data['item_subtotal'] === null) {
            $object->setItemSubtotal(null);
        }
        if (\array_key_exists('item_tax_total', $data) && $data['item_tax_total'] !== null) {
            $object->setItemTaxTotal($data['item_tax_total']);
            unset($data['item_tax_total']);
        }
        elseif (\array_key_exists('item_tax_total', $data) && $data['item_tax_total'] === null) {
            $object->setItemTaxTotal(null);
        }
        if (\array_key_exists('original_total', $data) && $data['original_total'] !== null) {
            $object->setOriginalTotal($data['original_total']);
            unset($data['original_total']);
        }
        elseif (\array_key_exists('original_total', $data) && $data['original_total'] === null) {
            $object->setOriginalTotal(null);
        }
        if (\array_key_exists('original_subtotal', $data) && $data['original_subtotal'] !== null) {
            $object->setOriginalSubtotal($data['original_subtotal']);
            unset($data['original_subtotal']);
        }
        elseif (\array_key_exists('original_subtotal', $data) && $data['original_subtotal'] === null) {
            $object->setOriginalSubtotal(null);
        }
        if (\array_key_exists('original_tax_total', $data) && $data['original_tax_total'] !== null) {
            $object->setOriginalTaxTotal($data['original_tax_total']);
            unset($data['original_tax_total']);
        }
        elseif (\array_key_exists('original_tax_total', $data) && $data['original_tax_total'] === null) {
            $object->setOriginalTaxTotal(null);
        }
        if (\array_key_exists('total', $data) && $data['total'] !== null) {
            $object->setTotal($data['total']);
            unset($data['total']);
        }
        elseif (\array_key_exists('total', $data) && $data['total'] === null) {
            $object->setTotal(null);
        }
        if (\array_key_exists('subtotal', $data) && $data['subtotal'] !== null) {
            $object->setSubtotal($data['subtotal']);
            unset($data['subtotal']);
        }
        elseif (\array_key_exists('subtotal', $data) && $data['subtotal'] === null) {
            $object->setSubtotal(null);
        }
        if (\array_key_exists('tax_total', $data) && $data['tax_total'] !== null) {
            $object->setTaxTotal($data['tax_total']);
            unset($data['tax_total']);
        }
        elseif (\array_key_exists('tax_total', $data) && $data['tax_total'] === null) {
            $object->setTaxTotal(null);
        }
        if (\array_key_exists('discount_total', $data) && $data['discount_total'] !== null) {
            $object->setDiscountTotal($data['discount_total']);
            unset($data['discount_total']);
        }
        elseif (\array_key_exists('discount_total', $data) && $data['discount_total'] === null) {
            $object->setDiscountTotal(null);
        }
        if (\array_key_exists('discount_tax_total', $data) && $data['discount_tax_total'] !== null) {
            $object->setDiscountTaxTotal($data['discount_tax_total']);
            unset($data['discount_tax_total']);
        }
        elseif (\array_key_exists('discount_tax_total', $data) && $data['discount_tax_total'] === null) {
            $object->setDiscountTaxTotal(null);
        }
        if (\array_key_exists('gift_card_total', $data) && $data['gift_card_total'] !== null) {
            $object->setGiftCardTotal($data['gift_card_total']);
            unset($data['gift_card_total']);
        }
        elseif (\array_key_exists('gift_card_total', $data) && $data['gift_card_total'] === null) {
            $object->setGiftCardTotal(null);
        }
        if (\array_key_exists('gift_card_tax_total', $data) && $data['gift_card_tax_total'] !== null) {
            $object->setGiftCardTaxTotal($data['gift_card_tax_total']);
            unset($data['gift_card_tax_total']);
        }
        elseif (\array_key_exists('gift_card_tax_total', $data) && $data['gift_card_tax_total'] === null) {
            $object->setGiftCardTaxTotal(null);
        }
        if (\array_key_exists('shipping_total', $data) && $data['shipping_total'] !== null) {
            $object->setShippingTotal($data['shipping_total']);
            unset($data['shipping_total']);
        }
        elseif (\array_key_exists('shipping_total', $data) && $data['shipping_total'] === null) {
            $object->setShippingTotal(null);
        }
        if (\array_key_exists('shipping_subtotal', $data) && $data['shipping_subtotal'] !== null) {
            $object->setShippingSubtotal($data['shipping_subtotal']);
            unset($data['shipping_subtotal']);
        }
        elseif (\array_key_exists('shipping_subtotal', $data) && $data['shipping_subtotal'] === null) {
            $object->setShippingSubtotal(null);
        }
        if (\array_key_exists('shipping_tax_total', $data) && $data['shipping_tax_total'] !== null) {
            $object->setShippingTaxTotal($data['shipping_tax_total']);
            unset($data['shipping_tax_total']);
        }
        elseif (\array_key_exists('shipping_tax_total', $data) && $data['shipping_tax_total'] === null) {
            $object->setShippingTaxTotal(null);
        }
        if (\array_key_exists('original_shipping_total', $data) && $data['original_shipping_total'] !== null) {
            $object->setOriginalShippingTotal($data['original_shipping_total']);
            unset($data['original_shipping_total']);
        }
        elseif (\array_key_exists('original_shipping_total', $data) && $data['original_shipping_total'] === null) {
            $object->setOriginalShippingTotal(null);
        }
        if (\array_key_exists('original_shipping_subtotal', $data) && $data['original_shipping_subtotal'] !== null) {
            $object->setOriginalShippingSubtotal($data['original_shipping_subtotal']);
            unset($data['original_shipping_subtotal']);
        }
        elseif (\array_key_exists('original_shipping_subtotal', $data) && $data['original_shipping_subtotal'] === null) {
            $object->setOriginalShippingSubtotal(null);
        }
        if (\array_key_exists('original_shipping_tax_total', $data) && $data['original_shipping_tax_total'] !== null) {
            $object->setOriginalShippingTaxTotal($data['original_shipping_tax_total']);
            unset($data['original_shipping_tax_total']);
        }
        elseif (\array_key_exists('original_shipping_tax_total', $data) && $data['original_shipping_tax_total'] === null) {
            $object->setOriginalShippingTaxTotal(null);
        }
        if (\array_key_exists('customer', $data) && $data['customer'] !== null) {
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], \Gracious\MedusaApiClientBundle\Model\AdminCustomer::class, 'json', $context));
            unset($data['customer']);
        }
        elseif (\array_key_exists('customer', $data) && $data['customer'] === null) {
            $object->setCustomer(null);
        }
        if (\array_key_exists('sales_channel', $data) && $data['sales_channel'] !== null) {
            $object->setSalesChannel($this->denormalizer->denormalize($data['sales_channel'], \Gracious\MedusaApiClientBundle\Model\AdminSalesChannel::class, 'json', $context));
            unset($data['sales_channel']);
        }
        elseif (\array_key_exists('sales_channel', $data) && $data['sales_channel'] === null) {
            $object->setSalesChannel(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $object->setRegion($this->denormalizer->denormalize($data['region'], \Gracious\MedusaApiClientBundle\Model\AdminRegion::class, 'json', $context));
            unset($data['region']);
        }
        elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('credit_lines', $data) && $data['credit_lines'] !== null) {
            $values_6 = [];
            foreach ($data['credit_lines'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Gracious\MedusaApiClientBundle\Model\OrderCreditLine::class, 'json', $context);
            }
            $object->setCreditLines($values_6);
            unset($data['credit_lines']);
        }
        elseif (\array_key_exists('credit_lines', $data) && $data['credit_lines'] === null) {
            $object->setCreditLines(null);
        }
        if (\array_key_exists('credit_line_total', $data) && $data['credit_line_total'] !== null) {
            $object->setCreditLineTotal($data['credit_line_total']);
            unset($data['credit_line_total']);
        }
        elseif (\array_key_exists('credit_line_total', $data) && $data['credit_line_total'] === null) {
            $object->setCreditLineTotal(null);
        }
        foreach ($data as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['return_requested_total'] = $data->getReturnRequestedTotal();
        $dataArray['order_change'] = $this->normalizer->normalize($data->getOrderChange(), 'json', $context);
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values = [];
            foreach ($data->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['items'] = $values;
        }
        if ($data->isInitialized('shippingMethods') && null !== $data->getShippingMethods()) {
            $values_1 = [];
            foreach ($data->getShippingMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['shipping_methods'] = $values_1;
        }
        $dataArray['currency_code'] = $data->getCurrencyCode();
        $dataArray['version'] = $data->getVersion();
        $dataArray['id'] = $data->getId();
        $dataArray['region_id'] = $data->getRegionId();
        $dataArray['customer_id'] = $data->getCustomerId();
        $dataArray['sales_channel_id'] = $data->getSalesChannelId();
        $dataArray['email'] = $data->getEmail();
        if ($data->isInitialized('displayId') && null !== $data->getDisplayId()) {
            $dataArray['display_id'] = $data->getDisplayId();
        }
        if ($data->isInitialized('shippingAddress') && null !== $data->getShippingAddress()) {
            $dataArray['shipping_address'] = $this->normalizer->normalize($data->getShippingAddress(), 'json', $context);
        }
        if ($data->isInitialized('billingAddress') && null !== $data->getBillingAddress()) {
            $dataArray['billing_address'] = $this->normalizer->normalize($data->getBillingAddress(), 'json', $context);
        }
        $values_2 = [];
        foreach ($data->getPaymentCollections() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['payment_collections'] = $values_2;
        $dataArray['payment_status'] = $data->getPaymentStatus();
        if ($data->isInitialized('fulfillments') && null !== $data->getFulfillments()) {
            $values_3 = [];
            foreach ($data->getFulfillments() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['fulfillments'] = $values_3;
        }
        $dataArray['fulfillment_status'] = $data->getFulfillmentStatus();
        if ($data->isInitialized('transactions') && null !== $data->getTransactions()) {
            $values_4 = [];
            foreach ($data->getTransactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['transactions'] = $values_4;
        }
        $dataArray['summary'] = $this->normalizer->normalize($data->getSummary(), 'json', $context);
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_5 = [];
            foreach ($data->getMetadata() as $key => $value_5) {
                $values_5[$key] = $value_5;
            }
            $dataArray['metadata'] = $values_5;
        }
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['original_item_total'] = $data->getOriginalItemTotal();
        $dataArray['original_item_subtotal'] = $data->getOriginalItemSubtotal();
        $dataArray['original_item_tax_total'] = $data->getOriginalItemTaxTotal();
        $dataArray['item_total'] = $data->getItemTotal();
        $dataArray['item_subtotal'] = $data->getItemSubtotal();
        $dataArray['item_tax_total'] = $data->getItemTaxTotal();
        $dataArray['original_total'] = $data->getOriginalTotal();
        $dataArray['original_subtotal'] = $data->getOriginalSubtotal();
        $dataArray['original_tax_total'] = $data->getOriginalTaxTotal();
        $dataArray['total'] = $data->getTotal();
        $dataArray['subtotal'] = $data->getSubtotal();
        $dataArray['tax_total'] = $data->getTaxTotal();
        $dataArray['discount_total'] = $data->getDiscountTotal();
        $dataArray['discount_tax_total'] = $data->getDiscountTaxTotal();
        $dataArray['gift_card_total'] = $data->getGiftCardTotal();
        $dataArray['gift_card_tax_total'] = $data->getGiftCardTaxTotal();
        $dataArray['shipping_total'] = $data->getShippingTotal();
        $dataArray['shipping_subtotal'] = $data->getShippingSubtotal();
        $dataArray['shipping_tax_total'] = $data->getShippingTaxTotal();
        $dataArray['original_shipping_total'] = $data->getOriginalShippingTotal();
        $dataArray['original_shipping_subtotal'] = $data->getOriginalShippingSubtotal();
        $dataArray['original_shipping_tax_total'] = $data->getOriginalShippingTaxTotal();
        if ($data->isInitialized('customer') && null !== $data->getCustomer()) {
            $dataArray['customer'] = $this->normalizer->normalize($data->getCustomer(), 'json', $context);
        }
        if ($data->isInitialized('salesChannel') && null !== $data->getSalesChannel()) {
            $dataArray['sales_channel'] = $this->normalizer->normalize($data->getSalesChannel(), 'json', $context);
        }
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $this->normalizer->normalize($data->getRegion(), 'json', $context);
        }
        if ($data->isInitialized('creditLines') && null !== $data->getCreditLines()) {
            $values_6 = [];
            foreach ($data->getCreditLines() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['credit_lines'] = $values_6;
        }
        $dataArray['credit_line_total'] = $data->getCreditLineTotal();
        foreach ($data as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreview::class => false];
    }
}
