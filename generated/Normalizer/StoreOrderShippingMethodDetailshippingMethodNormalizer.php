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
class StoreOrderShippingMethodDetailshippingMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethod::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethod::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethod();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
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
        if (\array_key_exists('is_tax_inclusive', $data) && \is_int($data['is_tax_inclusive'])) {
            $data['is_tax_inclusive'] = (bool) $data['is_tax_inclusive'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tax_lines', $data) && $data['tax_lines'] !== null) {
            $values = [];
            foreach ($data['tax_lines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodTaxLinesItem::class, 'json', $context);
            }
            $object->setTaxLines($values);
            unset($data['tax_lines']);
        }
        elseif (\array_key_exists('tax_lines', $data) && $data['tax_lines'] === null) {
            $object->setTaxLines(null);
        }
        if (\array_key_exists('adjustments', $data) && $data['adjustments'] !== null) {
            $values_1 = [];
            foreach ($data['adjustments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodAdjustmentsItem::class, 'json', $context);
            }
            $object->setAdjustments($values_1);
            unset($data['adjustments']);
        }
        elseif (\array_key_exists('adjustments', $data) && $data['adjustments'] === null) {
            $object->setAdjustments(null);
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $object->setDetail($this->denormalizer->denormalize($data['detail'], \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodDetail::class, 'json', $context));
            unset($data['detail']);
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->setDetail(null);
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
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] !== null) {
            $object->setIsTaxInclusive($data['is_tax_inclusive']);
            unset($data['is_tax_inclusive']);
        }
        elseif (\array_key_exists('is_tax_inclusive', $data) && $data['is_tax_inclusive'] === null) {
            $object->setIsTaxInclusive(null);
        }
        if (\array_key_exists('shipping_option_id', $data) && $data['shipping_option_id'] !== null) {
            $object->setShippingOptionId($data['shipping_option_id']);
            unset($data['shipping_option_id']);
        }
        elseif (\array_key_exists('shipping_option_id', $data) && $data['shipping_option_id'] === null) {
            $object->setShippingOptionId(null);
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['data'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setData($values_2);
            unset($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setMetadata($values_3);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
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
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('taxLines') && null !== $data->getTaxLines()) {
            $values = [];
            foreach ($data->getTaxLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['tax_lines'] = $values;
        }
        if ($data->isInitialized('adjustments') && null !== $data->getAdjustments()) {
            $values_1 = [];
            foreach ($data->getAdjustments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['adjustments'] = $values_1;
        }
        if ($data->isInitialized('detail') && null !== $data->getDetail()) {
            $dataArray['detail'] = $this->normalizer->normalize($data->getDetail(), 'json', $context);
        }
        $dataArray['id'] = $data->getId();
        $dataArray['order_id'] = $data->getOrderId();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['amount'] = $data->getAmount();
        $dataArray['is_tax_inclusive'] = $data->getIsTaxInclusive();
        $dataArray['shipping_option_id'] = $data->getShippingOptionId();
        $values_2 = [];
        foreach ($data->getData() as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $dataArray['data'] = $values_2;
        $values_3 = [];
        foreach ($data->getMetadata() as $key_1 => $value_3) {
            $values_3[$key_1] = $value_3;
        }
        $dataArray['metadata'] = $values_3;
        $dataArray['original_total'] = $data->getOriginalTotal();
        $dataArray['original_subtotal'] = $data->getOriginalSubtotal();
        $dataArray['original_tax_total'] = $data->getOriginalTaxTotal();
        $dataArray['total'] = $data->getTotal();
        $dataArray['subtotal'] = $data->getSubtotal();
        $dataArray['tax_total'] = $data->getTaxTotal();
        $dataArray['discount_total'] = $data->getDiscountTotal();
        $dataArray['discount_tax_total'] = $data->getDiscountTaxTotal();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethod::class => false];
    }
}
