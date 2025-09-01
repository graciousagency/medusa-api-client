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
class StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem();
        if (\array_key_exists('total', $data) && \is_int($data['total'])) {
            $data['total'] = (double) $data['total'];
        }
        if (\array_key_exists('subtotal', $data) && \is_int($data['subtotal'])) {
            $data['subtotal'] = (double) $data['subtotal'];
        }
        if (\array_key_exists('rate', $data) && \is_int($data['rate'])) {
            $data['rate'] = (double) $data['rate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipping_method', $data) && $data['shipping_method'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['shipping_method'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setShippingMethod($values);
            unset($data['shipping_method']);
        }
        elseif (\array_key_exists('shipping_method', $data) && $data['shipping_method'] === null) {
            $object->setShippingMethod(null);
        }
        if (\array_key_exists('shipping_method_id', $data) && $data['shipping_method_id'] !== null) {
            $object->setShippingMethodId($data['shipping_method_id']);
            unset($data['shipping_method_id']);
        }
        elseif (\array_key_exists('shipping_method_id', $data) && $data['shipping_method_id'] === null) {
            $object->setShippingMethodId(null);
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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('tax_rate_id', $data) && $data['tax_rate_id'] !== null) {
            $object->setTaxRateId($data['tax_rate_id']);
            unset($data['tax_rate_id']);
        }
        elseif (\array_key_exists('tax_rate_id', $data) && $data['tax_rate_id'] === null) {
            $object->setTaxRateId(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('rate', $data) && $data['rate'] !== null) {
            $object->setRate($data['rate']);
            unset($data['rate']);
        }
        elseif (\array_key_exists('rate', $data) && $data['rate'] === null) {
            $object->setRate(null);
        }
        if (\array_key_exists('provider_id', $data) && $data['provider_id'] !== null) {
            $object->setProviderId($data['provider_id']);
            unset($data['provider_id']);
        }
        elseif (\array_key_exists('provider_id', $data) && $data['provider_id'] === null) {
            $object->setProviderId(null);
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
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getShippingMethod() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['shipping_method'] = $values;
        $dataArray['shipping_method_id'] = $data->getShippingMethodId();
        $dataArray['total'] = $data->getTotal();
        $dataArray['subtotal'] = $data->getSubtotal();
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('taxRateId') && null !== $data->getTaxRateId()) {
            $dataArray['tax_rate_id'] = $data->getTaxRateId();
        }
        $dataArray['code'] = $data->getCode();
        $dataArray['rate'] = $data->getRate();
        if ($data->isInitialized('providerId') && null !== $data->getProviderId()) {
            $dataArray['provider_id'] = $data->getProviderId();
        }
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem::class => false];
    }
}
