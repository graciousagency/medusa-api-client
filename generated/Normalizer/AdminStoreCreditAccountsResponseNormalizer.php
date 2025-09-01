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
class AdminStoreCreditAccountsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse();
        if (\array_key_exists('limit', $data) && \is_int($data['limit'])) {
            $data['limit'] = (double) $data['limit'];
        }
        if (\array_key_exists('offset', $data) && \is_int($data['offset'])) {
            $data['offset'] = (double) $data['offset'];
        }
        if (\array_key_exists('count', $data) && \is_int($data['count'])) {
            $data['count'] = (double) $data['count'];
        }
        if (\array_key_exists('estimate_count', $data) && \is_int($data['estimate_count'])) {
            $data['estimate_count'] = (double) $data['estimate_count'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
            $object->setLimit($data['limit']);
            unset($data['limit']);
        }
        elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
            $object->setLimit(null);
        }
        if (\array_key_exists('offset', $data) && $data['offset'] !== null) {
            $object->setOffset($data['offset']);
            unset($data['offset']);
        }
        elseif (\array_key_exists('offset', $data) && $data['offset'] === null) {
            $object->setOffset(null);
        }
        if (\array_key_exists('count', $data) && $data['count'] !== null) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        elseif (\array_key_exists('count', $data) && $data['count'] === null) {
            $object->setCount(null);
        }
        if (\array_key_exists('store_credit_accounts', $data) && $data['store_credit_accounts'] !== null) {
            $values = [];
            foreach ($data['store_credit_accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccount::class, 'json', $context);
            }
            $object->setStoreCreditAccounts($values);
            unset($data['store_credit_accounts']);
        }
        elseif (\array_key_exists('store_credit_accounts', $data) && $data['store_credit_accounts'] === null) {
            $object->setStoreCreditAccounts(null);
        }
        if (\array_key_exists('estimate_count', $data) && $data['estimate_count'] !== null) {
            $object->setEstimateCount($data['estimate_count']);
            unset($data['estimate_count']);
        }
        elseif (\array_key_exists('estimate_count', $data) && $data['estimate_count'] === null) {
            $object->setEstimateCount(null);
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
        $dataArray['limit'] = $data->getLimit();
        $dataArray['offset'] = $data->getOffset();
        $dataArray['count'] = $data->getCount();
        $values = [];
        foreach ($data->getStoreCreditAccounts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['store_credit_accounts'] = $values;
        if ($data->isInitialized('estimateCount') && null !== $data->getEstimateCount()) {
            $dataArray['estimate_count'] = $data->getEstimateCount();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse::class => false];
    }
}