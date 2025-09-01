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
class OrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\Order::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\Order::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\Order();
        if (\array_key_exists('version', $data) && \is_int($data['version'])) {
            $data['version'] = (double) $data['version'];
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
        if (\array_key_exists('discount_subtotal', $data) && \is_int($data['discount_subtotal'])) {
            $data['discount_subtotal'] = (double) $data['discount_subtotal'];
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
        if (\array_key_exists('display_id', $data) && \is_int($data['display_id'])) {
            $data['display_id'] = (double) $data['display_id'];
        }
        if (\array_key_exists('credit_line_total', $data) && \is_int($data['credit_line_total'])) {
            $data['credit_line_total'] = (double) $data['credit_line_total'];
        }
        if (\array_key_exists('is_draft_order', $data) && \is_int($data['is_draft_order'])) {
            $data['is_draft_order'] = (bool) $data['is_draft_order'];
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
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
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
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('shipping_address', $data) && $data['shipping_address'] !== null) {
            $object->setShippingAddress($this->denormalizer->denormalize($data['shipping_address'], \Gracious\MedusaApiClientBundle\Model\OrderAddress::class, 'json', $context));
            unset($data['shipping_address']);
        }
        elseif (\array_key_exists('shipping_address', $data) && $data['shipping_address'] === null) {
            $object->setShippingAddress(null);
        }
        if (\array_key_exists('billing_address', $data) && $data['billing_address'] !== null) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billing_address'], \Gracious\MedusaApiClientBundle\Model\OrderAddress::class, 'json', $context));
            unset($data['billing_address']);
        }
        elseif (\array_key_exists('billing_address', $data) && $data['billing_address'] === null) {
            $object->setBillingAddress(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values_1 = [];
            foreach ($data['items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\OrderLineItem::class, 'json', $context);
            }
            $object->setItems($values_1);
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('shipping_methods', $data) && $data['shipping_methods'] !== null) {
            $values_2 = [];
            foreach ($data['shipping_methods'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\OrderShippingMethod::class, 'json', $context);
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
                $values_3[] = $this->denormalizer->denormalize($value_3, \Gracious\MedusaApiClientBundle\Model\OrderTransaction::class, 'json', $context);
            }
            $object->setTransactions($values_3);
            unset($data['transactions']);
        }
        elseif (\array_key_exists('transactions', $data) && $data['transactions'] === null) {
            $object->setTransactions(null);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($this->denormalizer->denormalize($data['summary'], \Gracious\MedusaApiClientBundle\Model\OrderSummary::class, 'json', $context));
            unset($data['summary']);
        }
        elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_4) {
                $values_4[$key_1] = $value_4;
            }
            $object->setMetadata($values_4);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
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
        if (\array_key_exists('discount_subtotal', $data) && $data['discount_subtotal'] !== null) {
            $object->setDiscountSubtotal($data['discount_subtotal']);
            unset($data['discount_subtotal']);
        }
        elseif (\array_key_exists('discount_subtotal', $data) && $data['discount_subtotal'] === null) {
            $object->setDiscountSubtotal(null);
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
        if (\array_key_exists('display_id', $data) && $data['display_id'] !== null) {
            $object->setDisplayId($data['display_id']);
            unset($data['display_id']);
        }
        elseif (\array_key_exists('display_id', $data) && $data['display_id'] === null) {
            $object->setDisplayId(null);
        }
        if (\array_key_exists('credit_lines', $data) && $data['credit_lines'] !== null) {
            $values_5 = [];
            foreach ($data['credit_lines'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Gracious\MedusaApiClientBundle\Model\OrderCreditLine::class, 'json', $context);
            }
            $object->setCreditLines($values_5);
            unset($data['credit_lines']);
        }
        elseif (\array_key_exists('credit_lines', $data) && $data['credit_lines'] === null) {
            $object->setCreditLines(null);
        }
        if (\array_key_exists('is_draft_order', $data) && $data['is_draft_order'] !== null) {
            $object->setIsDraftOrder($data['is_draft_order']);
            unset($data['is_draft_order']);
        }
        elseif (\array_key_exists('is_draft_order', $data) && $data['is_draft_order'] === null) {
            $object->setIsDraftOrder(null);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        if (\array_key_exists('credit_line_total', $data) && $data['credit_line_total'] !== null) {
            $object->setCreditLineTotal($data['credit_line_total']);
            unset($data['credit_line_total']);
        }
        elseif (\array_key_exists('credit_line_total', $data) && $data['credit_line_total'] === null) {
            $object->setCreditLineTotal(null);
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
        $dataArray['version'] = $data->getVersion();
        if ($data->isInitialized('orderChange') && null !== $data->getOrderChange()) {
            $values = [];
            foreach ($data->getOrderChange() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['order_change'] = $values;
        }
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('regionId') && null !== $data->getRegionId()) {
            $dataArray['region_id'] = $data->getRegionId();
        }
        if ($data->isInitialized('customerId') && null !== $data->getCustomerId()) {
            $dataArray['customer_id'] = $data->getCustomerId();
        }
        if ($data->isInitialized('salesChannelId') && null !== $data->getSalesChannelId()) {
            $dataArray['sales_channel_id'] = $data->getSalesChannelId();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        $dataArray['currency_code'] = $data->getCurrencyCode();
        if ($data->isInitialized('shippingAddress') && null !== $data->getShippingAddress()) {
            $dataArray['shipping_address'] = $this->normalizer->normalize($data->getShippingAddress(), 'json', $context);
        }
        if ($data->isInitialized('billingAddress') && null !== $data->getBillingAddress()) {
            $dataArray['billing_address'] = $this->normalizer->normalize($data->getBillingAddress(), 'json', $context);
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values_1 = [];
            foreach ($data->getItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['items'] = $values_1;
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
        if ($data->isInitialized('summary') && null !== $data->getSummary()) {
            $dataArray['summary'] = $this->normalizer->normalize($data->getSummary(), 'json', $context);
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_4 = [];
            foreach ($data->getMetadata() as $key_1 => $value_4) {
                $values_4[$key_1] = $value_4;
            }
            $dataArray['metadata'] = $values_4;
        }
        if ($data->isInitialized('canceledAt') && null !== $data->getCanceledAt()) {
            $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
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
        $dataArray['discount_subtotal'] = $data->getDiscountSubtotal();
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
        $dataArray['display_id'] = $data->getDisplayId();
        if ($data->isInitialized('creditLines') && null !== $data->getCreditLines()) {
            $values_5 = [];
            foreach ($data->getCreditLines() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['credit_lines'] = $values_5;
        }
        if ($data->isInitialized('isDraftOrder') && null !== $data->getIsDraftOrder()) {
            $dataArray['is_draft_order'] = $data->getIsDraftOrder();
        }
        if ($data->isInitialized('deletedAt') && null !== $data->getDeletedAt()) {
            $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        $dataArray['credit_line_total'] = $data->getCreditLineTotal();
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\Order::class => false];
    }
}
