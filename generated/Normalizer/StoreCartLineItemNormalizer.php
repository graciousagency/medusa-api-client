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
class StoreCartLineItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreCartLineItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreCartLineItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreCartLineItem();
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (double) $data['quantity'];
        }
        if (\array_key_exists('compare_at_unit_price', $data) && \is_int($data['compare_at_unit_price'])) {
            $data['compare_at_unit_price'] = (double) $data['compare_at_unit_price'];
        }
        if (\array_key_exists('unit_price', $data) && \is_int($data['unit_price'])) {
            $data['unit_price'] = (double) $data['unit_price'];
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
        if (\array_key_exists('item_total', $data) && \is_int($data['item_total'])) {
            $data['item_total'] = (double) $data['item_total'];
        }
        if (\array_key_exists('item_subtotal', $data) && \is_int($data['item_subtotal'])) {
            $data['item_subtotal'] = (double) $data['item_subtotal'];
        }
        if (\array_key_exists('item_tax_total', $data) && \is_int($data['item_tax_total'])) {
            $data['item_tax_total'] = (double) $data['item_tax_total'];
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
        if (\array_key_exists('requires_shipping', $data) && \is_int($data['requires_shipping'])) {
            $data['requires_shipping'] = (bool) $data['requires_shipping'];
        }
        if (\array_key_exists('is_discountable', $data) && \is_int($data['is_discountable'])) {
            $data['is_discountable'] = (bool) $data['is_discountable'];
        }
        if (\array_key_exists('is_tax_inclusive', $data) && \is_int($data['is_tax_inclusive'])) {
            $data['is_tax_inclusive'] = (bool) $data['is_tax_inclusive'];
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
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('subtitle', $data) && $data['subtitle'] !== null) {
            $object->setSubtitle($data['subtitle']);
            unset($data['subtitle']);
        }
        elseif (\array_key_exists('subtitle', $data) && $data['subtitle'] === null) {
            $object->setSubtitle(null);
        }
        if (\array_key_exists('thumbnail', $data) && $data['thumbnail'] !== null) {
            $object->setThumbnail($data['thumbnail']);
            unset($data['thumbnail']);
        }
        elseif (\array_key_exists('thumbnail', $data) && $data['thumbnail'] === null) {
            $object->setThumbnail(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('product', $data) && $data['product'] !== null) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], \Gracious\MedusaApiClientBundle\Model\StoreProduct::class, 'json', $context));
            unset($data['product']);
        }
        elseif (\array_key_exists('product', $data) && $data['product'] === null) {
            $object->setProduct(null);
        }
        if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
            $object->setProductId($data['product_id']);
            unset($data['product_id']);
        }
        elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
            $object->setProductId(null);
        }
        if (\array_key_exists('product_title', $data) && $data['product_title'] !== null) {
            $object->setProductTitle($data['product_title']);
            unset($data['product_title']);
        }
        elseif (\array_key_exists('product_title', $data) && $data['product_title'] === null) {
            $object->setProductTitle(null);
        }
        if (\array_key_exists('product_description', $data) && $data['product_description'] !== null) {
            $object->setProductDescription($data['product_description']);
            unset($data['product_description']);
        }
        elseif (\array_key_exists('product_description', $data) && $data['product_description'] === null) {
            $object->setProductDescription(null);
        }
        if (\array_key_exists('product_subtitle', $data) && $data['product_subtitle'] !== null) {
            $object->setProductSubtitle($data['product_subtitle']);
            unset($data['product_subtitle']);
        }
        elseif (\array_key_exists('product_subtitle', $data) && $data['product_subtitle'] === null) {
            $object->setProductSubtitle(null);
        }
        if (\array_key_exists('product_type', $data) && $data['product_type'] !== null) {
            $object->setProductType($data['product_type']);
            unset($data['product_type']);
        }
        elseif (\array_key_exists('product_type', $data) && $data['product_type'] === null) {
            $object->setProductType(null);
        }
        if (\array_key_exists('product_collection', $data) && $data['product_collection'] !== null) {
            $object->setProductCollection($data['product_collection']);
            unset($data['product_collection']);
        }
        elseif (\array_key_exists('product_collection', $data) && $data['product_collection'] === null) {
            $object->setProductCollection(null);
        }
        if (\array_key_exists('product_handle', $data) && $data['product_handle'] !== null) {
            $object->setProductHandle($data['product_handle']);
            unset($data['product_handle']);
        }
        elseif (\array_key_exists('product_handle', $data) && $data['product_handle'] === null) {
            $object->setProductHandle(null);
        }
        if (\array_key_exists('variant', $data) && $data['variant'] !== null) {
            $object->setVariant($this->denormalizer->denormalize($data['variant'], \Gracious\MedusaApiClientBundle\Model\StoreProductVariant::class, 'json', $context));
            unset($data['variant']);
        }
        elseif (\array_key_exists('variant', $data) && $data['variant'] === null) {
            $object->setVariant(null);
        }
        if (\array_key_exists('variant_id', $data) && $data['variant_id'] !== null) {
            $object->setVariantId($data['variant_id']);
            unset($data['variant_id']);
        }
        elseif (\array_key_exists('variant_id', $data) && $data['variant_id'] === null) {
            $object->setVariantId(null);
        }
        if (\array_key_exists('variant_sku', $data) && $data['variant_sku'] !== null) {
            $object->setVariantSku($data['variant_sku']);
            unset($data['variant_sku']);
        }
        elseif (\array_key_exists('variant_sku', $data) && $data['variant_sku'] === null) {
            $object->setVariantSku(null);
        }
        if (\array_key_exists('variant_barcode', $data) && $data['variant_barcode'] !== null) {
            $object->setVariantBarcode($data['variant_barcode']);
            unset($data['variant_barcode']);
        }
        elseif (\array_key_exists('variant_barcode', $data) && $data['variant_barcode'] === null) {
            $object->setVariantBarcode(null);
        }
        if (\array_key_exists('variant_title', $data) && $data['variant_title'] !== null) {
            $object->setVariantTitle($data['variant_title']);
            unset($data['variant_title']);
        }
        elseif (\array_key_exists('variant_title', $data) && $data['variant_title'] === null) {
            $object->setVariantTitle(null);
        }
        if (\array_key_exists('variant_option_values', $data) && $data['variant_option_values'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['variant_option_values'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setVariantOptionValues($values);
            unset($data['variant_option_values']);
        }
        elseif (\array_key_exists('variant_option_values', $data) && $data['variant_option_values'] === null) {
            $object->setVariantOptionValues(null);
        }
        if (\array_key_exists('requires_shipping', $data) && $data['requires_shipping'] !== null) {
            $object->setRequiresShipping($data['requires_shipping']);
            unset($data['requires_shipping']);
        }
        elseif (\array_key_exists('requires_shipping', $data) && $data['requires_shipping'] === null) {
            $object->setRequiresShipping(null);
        }
        if (\array_key_exists('is_discountable', $data) && $data['is_discountable'] !== null) {
            $object->setIsDiscountable($data['is_discountable']);
            unset($data['is_discountable']);
        }
        elseif (\array_key_exists('is_discountable', $data) && $data['is_discountable'] === null) {
            $object->setIsDiscountable(null);
        }
        if (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] !== null) {
            $object->setIsTaxInclusive($data['is_tax_inclusive']);
            unset($data['is_tax_inclusive']);
        }
        elseif (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] === null) {
            $object->setIsTaxInclusive(null);
        }
        if (\array_key_exists('compare_at_unit_price', $data) && $data['compare_at_unit_price'] !== null) {
            $object->setCompareAtUnitPrice($data['compare_at_unit_price']);
            unset($data['compare_at_unit_price']);
        }
        elseif (\array_key_exists('compare_at_unit_price', $data) && $data['compare_at_unit_price'] === null) {
            $object->setCompareAtUnitPrice(null);
        }
        if (\array_key_exists('unit_price', $data) && $data['unit_price'] !== null) {
            $object->setUnitPrice($data['unit_price']);
            unset($data['unit_price']);
        }
        elseif (\array_key_exists('unit_price', $data) && $data['unit_price'] === null) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('tax_lines', $data) && $data['tax_lines'] !== null) {
            $values_1 = [];
            foreach ($data['tax_lines'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\StoreCartLineItemTaxLinesItem::class, 'json', $context);
            }
            $object->setTaxLines($values_1);
            unset($data['tax_lines']);
        }
        elseif (\array_key_exists('tax_lines', $data) && $data['tax_lines'] === null) {
            $object->setTaxLines(null);
        }
        if (\array_key_exists('adjustments', $data) && $data['adjustments'] !== null) {
            $values_2 = [];
            foreach ($data['adjustments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\StoreCartLineItemAdjustmentsItem::class, 'json', $context);
            }
            $object->setAdjustments($values_2);
            unset($data['adjustments']);
        }
        elseif (\array_key_exists('adjustments', $data) && $data['adjustments'] === null) {
            $object->setAdjustments(null);
        }
        if (\array_key_exists('cart', $data) && $data['cart'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['cart'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setCart($values_3);
            unset($data['cart']);
        }
        elseif (\array_key_exists('cart', $data) && $data['cart'] === null) {
            $object->setCart(null);
        }
        if (\array_key_exists('cart_id', $data) && $data['cart_id'] !== null) {
            $object->setCartId($data['cart_id']);
            unset($data['cart_id']);
        }
        elseif (\array_key_exists('cart_id', $data) && $data['cart_id'] === null) {
            $object->setCartId(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_2 => $value_4) {
                $values_4[$key_2] = $value_4;
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
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
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
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['title'] = $data->getTitle();
        if ($data->isInitialized('subtitle') && null !== $data->getSubtitle()) {
            $dataArray['subtitle'] = $data->getSubtitle();
        }
        if ($data->isInitialized('thumbnail') && null !== $data->getThumbnail()) {
            $dataArray['thumbnail'] = $data->getThumbnail();
        }
        $dataArray['quantity'] = $data->getQuantity();
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['product'] = $this->normalizer->normalize($data->getProduct(), 'json', $context);
        }
        if ($data->isInitialized('productId') && null !== $data->getProductId()) {
            $dataArray['product_id'] = $data->getProductId();
        }
        if ($data->isInitialized('productTitle') && null !== $data->getProductTitle()) {
            $dataArray['product_title'] = $data->getProductTitle();
        }
        if ($data->isInitialized('productDescription') && null !== $data->getProductDescription()) {
            $dataArray['product_description'] = $data->getProductDescription();
        }
        if ($data->isInitialized('productSubtitle') && null !== $data->getProductSubtitle()) {
            $dataArray['product_subtitle'] = $data->getProductSubtitle();
        }
        if ($data->isInitialized('productType') && null !== $data->getProductType()) {
            $dataArray['product_type'] = $data->getProductType();
        }
        if ($data->isInitialized('productCollection') && null !== $data->getProductCollection()) {
            $dataArray['product_collection'] = $data->getProductCollection();
        }
        if ($data->isInitialized('productHandle') && null !== $data->getProductHandle()) {
            $dataArray['product_handle'] = $data->getProductHandle();
        }
        if ($data->isInitialized('variant') && null !== $data->getVariant()) {
            $dataArray['variant'] = $this->normalizer->normalize($data->getVariant(), 'json', $context);
        }
        if ($data->isInitialized('variantId') && null !== $data->getVariantId()) {
            $dataArray['variant_id'] = $data->getVariantId();
        }
        if ($data->isInitialized('variantSku') && null !== $data->getVariantSku()) {
            $dataArray['variant_sku'] = $data->getVariantSku();
        }
        if ($data->isInitialized('variantBarcode') && null !== $data->getVariantBarcode()) {
            $dataArray['variant_barcode'] = $data->getVariantBarcode();
        }
        if ($data->isInitialized('variantTitle') && null !== $data->getVariantTitle()) {
            $dataArray['variant_title'] = $data->getVariantTitle();
        }
        if ($data->isInitialized('variantOptionValues') && null !== $data->getVariantOptionValues()) {
            $values = [];
            foreach ($data->getVariantOptionValues() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['variant_option_values'] = $values;
        }
        $dataArray['requires_shipping'] = $data->getRequiresShipping();
        $dataArray['is_discountable'] = $data->getIsDiscountable();
        $dataArray['is_tax_inclusive'] = $data->getIsTaxInclusive();
        if ($data->isInitialized('compareAtUnitPrice') && null !== $data->getCompareAtUnitPrice()) {
            $dataArray['compare_at_unit_price'] = $data->getCompareAtUnitPrice();
        }
        $dataArray['unit_price'] = $data->getUnitPrice();
        if ($data->isInitialized('taxLines') && null !== $data->getTaxLines()) {
            $values_1 = [];
            foreach ($data->getTaxLines() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['tax_lines'] = $values_1;
        }
        if ($data->isInitialized('adjustments') && null !== $data->getAdjustments()) {
            $values_2 = [];
            foreach ($data->getAdjustments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['adjustments'] = $values_2;
        }
        $values_3 = [];
        foreach ($data->getCart() as $key_1 => $value_3) {
            $values_3[$key_1] = $value_3;
        }
        $dataArray['cart'] = $values_3;
        $dataArray['cart_id'] = $data->getCartId();
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_4 = [];
            foreach ($data->getMetadata() as $key_2 => $value_4) {
                $values_4[$key_2] = $value_4;
            }
            $dataArray['metadata'] = $values_4;
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('deletedAt') && null !== $data->getDeletedAt()) {
            $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        $dataArray['original_total'] = $data->getOriginalTotal();
        $dataArray['original_subtotal'] = $data->getOriginalSubtotal();
        $dataArray['original_tax_total'] = $data->getOriginalTaxTotal();
        $dataArray['item_total'] = $data->getItemTotal();
        $dataArray['item_subtotal'] = $data->getItemSubtotal();
        $dataArray['item_tax_total'] = $data->getItemTaxTotal();
        $dataArray['total'] = $data->getTotal();
        $dataArray['subtotal'] = $data->getSubtotal();
        $dataArray['tax_total'] = $data->getTaxTotal();
        $dataArray['discount_total'] = $data->getDiscountTotal();
        $dataArray['discount_tax_total'] = $data->getDiscountTaxTotal();
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreCartLineItem::class => false];
    }
}
