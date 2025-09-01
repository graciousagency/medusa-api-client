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
class AdminPriceListPriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPriceListPrice::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPriceListPrice::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPriceListPrice();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
        }
        if (\array_key_exists('min_quantity', $data) && \is_int($data['min_quantity'])) {
            $data['min_quantity'] = (double) $data['min_quantity'];
        }
        if (\array_key_exists('max_quantity', $data) && \is_int($data['max_quantity'])) {
            $data['max_quantity'] = (double) $data['max_quantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('variant_id', $data) && $data['variant_id'] !== null) {
            $object->setVariantId($data['variant_id']);
            unset($data['variant_id']);
        }
        elseif (\array_key_exists('variant_id', $data) && $data['variant_id'] === null) {
            $object->setVariantId(null);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['rules'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setRules($values);
            unset($data['rules']);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
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
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('raw_amount', $data) && $data['raw_amount'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_amount'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setRawAmount($values_1);
            unset($data['raw_amount']);
        }
        elseif (\array_key_exists('raw_amount', $data) && $data['raw_amount'] === null) {
            $object->setRawAmount(null);
        }
        if (\array_key_exists('min_quantity', $data) && $data['min_quantity'] !== null) {
            $object->setMinQuantity($data['min_quantity']);
            unset($data['min_quantity']);
        }
        elseif (\array_key_exists('min_quantity', $data) && $data['min_quantity'] === null) {
            $object->setMinQuantity(null);
        }
        if (\array_key_exists('max_quantity', $data) && $data['max_quantity'] !== null) {
            $object->setMaxQuantity($data['max_quantity']);
            unset($data['max_quantity']);
        }
        elseif (\array_key_exists('max_quantity', $data) && $data['max_quantity'] === null) {
            $object->setMaxQuantity(null);
        }
        if (\array_key_exists('price_set_id', $data) && $data['price_set_id'] !== null) {
            $object->setPriceSetId($data['price_set_id']);
            unset($data['price_set_id']);
        }
        elseif (\array_key_exists('price_set_id', $data) && $data['price_set_id'] === null) {
            $object->setPriceSetId(null);
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
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['variant_id'] = $data->getVariantId();
        $values = [];
        foreach ($data->getRules() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['rules'] = $values;
        $dataArray['id'] = $data->getId();
        $dataArray['title'] = $data->getTitle();
        $dataArray['currency_code'] = $data->getCurrencyCode();
        $dataArray['amount'] = $data->getAmount();
        $values_1 = [];
        foreach ($data->getRawAmount() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $dataArray['raw_amount'] = $values_1;
        $dataArray['min_quantity'] = $data->getMinQuantity();
        $dataArray['max_quantity'] = $data->getMaxQuantity();
        $dataArray['price_set_id'] = $data->getPriceSetId();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPriceListPrice::class => false];
    }
}
