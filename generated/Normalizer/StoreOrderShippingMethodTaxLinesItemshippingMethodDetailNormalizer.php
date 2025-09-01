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
class StoreOrderShippingMethodTaxLinesItemshippingMethodDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodDetail();
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
        if (\array_key_exists('shipping_method_id', $data) && $data['shipping_method_id'] !== null) {
            $object->setShippingMethodId($data['shipping_method_id']);
            unset($data['shipping_method_id']);
        }
        elseif (\array_key_exists('shipping_method_id', $data) && $data['shipping_method_id'] === null) {
            $object->setShippingMethodId(null);
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
        if (\array_key_exists('claim_id', $data) && $data['claim_id'] !== null) {
            $object->setClaimId($data['claim_id']);
            unset($data['claim_id']);
        }
        elseif (\array_key_exists('claim_id', $data) && $data['claim_id'] === null) {
            $object->setClaimId(null);
        }
        if (\array_key_exists('exchange_id', $data) && $data['exchange_id'] !== null) {
            $object->setExchangeId($data['exchange_id']);
            unset($data['exchange_id']);
        }
        elseif (\array_key_exists('exchange_id', $data) && $data['exchange_id'] === null) {
            $object->setExchangeId(null);
        }
        if (\array_key_exists('return_id', $data) && $data['return_id'] !== null) {
            $object->setReturnId($data['return_id']);
            unset($data['return_id']);
        }
        elseif (\array_key_exists('return_id', $data) && $data['return_id'] === null) {
            $object->setReturnId(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['shipping_method_id'] = $data->getShippingMethodId();
        $values = [];
        foreach ($data->getShippingMethod() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['shipping_method'] = $values;
        if ($data->isInitialized('claimId') && null !== $data->getClaimId()) {
            $dataArray['claim_id'] = $data->getClaimId();
        }
        if ($data->isInitialized('exchangeId') && null !== $data->getExchangeId()) {
            $dataArray['exchange_id'] = $data->getExchangeId();
        }
        if ($data->isInitialized('returnId') && null !== $data->getReturnId()) {
            $dataArray['return_id'] = $data->getReturnId();
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
        return [\Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodDetail::class => false];
    }
}
