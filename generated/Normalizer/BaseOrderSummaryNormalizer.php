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
class BaseOrderSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\BaseOrderSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\BaseOrderSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\BaseOrderSummary();
        if (\array_key_exists('paid_total', $data) && \is_int($data['paid_total'])) {
            $data['paid_total'] = (double) $data['paid_total'];
        }
        if (\array_key_exists('refunded_total', $data) && \is_int($data['refunded_total'])) {
            $data['refunded_total'] = (double) $data['refunded_total'];
        }
        if (\array_key_exists('pending_difference', $data) && \is_int($data['pending_difference'])) {
            $data['pending_difference'] = (double) $data['pending_difference'];
        }
        if (\array_key_exists('current_order_total', $data) && \is_int($data['current_order_total'])) {
            $data['current_order_total'] = (double) $data['current_order_total'];
        }
        if (\array_key_exists('original_order_total', $data) && \is_int($data['original_order_total'])) {
            $data['original_order_total'] = (double) $data['original_order_total'];
        }
        if (\array_key_exists('transaction_total', $data) && \is_int($data['transaction_total'])) {
            $data['transaction_total'] = (double) $data['transaction_total'];
        }
        if (\array_key_exists('accounting_total', $data) && \is_int($data['accounting_total'])) {
            $data['accounting_total'] = (double) $data['accounting_total'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('paid_total', $data) && $data['paid_total'] !== null) {
            $object->setPaidTotal($data['paid_total']);
            unset($data['paid_total']);
        }
        elseif (\array_key_exists('paid_total', $data) && $data['paid_total'] === null) {
            $object->setPaidTotal(null);
        }
        if (\array_key_exists('refunded_total', $data) && $data['refunded_total'] !== null) {
            $object->setRefundedTotal($data['refunded_total']);
            unset($data['refunded_total']);
        }
        elseif (\array_key_exists('refunded_total', $data) && $data['refunded_total'] === null) {
            $object->setRefundedTotal(null);
        }
        if (\array_key_exists('pending_difference', $data) && $data['pending_difference'] !== null) {
            $object->setPendingDifference($data['pending_difference']);
            unset($data['pending_difference']);
        }
        elseif (\array_key_exists('pending_difference', $data) && $data['pending_difference'] === null) {
            $object->setPendingDifference(null);
        }
        if (\array_key_exists('current_order_total', $data) && $data['current_order_total'] !== null) {
            $object->setCurrentOrderTotal($data['current_order_total']);
            unset($data['current_order_total']);
        }
        elseif (\array_key_exists('current_order_total', $data) && $data['current_order_total'] === null) {
            $object->setCurrentOrderTotal(null);
        }
        if (\array_key_exists('original_order_total', $data) && $data['original_order_total'] !== null) {
            $object->setOriginalOrderTotal($data['original_order_total']);
            unset($data['original_order_total']);
        }
        elseif (\array_key_exists('original_order_total', $data) && $data['original_order_total'] === null) {
            $object->setOriginalOrderTotal(null);
        }
        if (\array_key_exists('transaction_total', $data) && $data['transaction_total'] !== null) {
            $object->setTransactionTotal($data['transaction_total']);
            unset($data['transaction_total']);
        }
        elseif (\array_key_exists('transaction_total', $data) && $data['transaction_total'] === null) {
            $object->setTransactionTotal(null);
        }
        if (\array_key_exists('accounting_total', $data) && $data['accounting_total'] !== null) {
            $object->setAccountingTotal($data['accounting_total']);
            unset($data['accounting_total']);
        }
        elseif (\array_key_exists('accounting_total', $data) && $data['accounting_total'] === null) {
            $object->setAccountingTotal(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['paid_total'] = $data->getPaidTotal();
        $dataArray['refunded_total'] = $data->getRefundedTotal();
        $dataArray['pending_difference'] = $data->getPendingDifference();
        $dataArray['current_order_total'] = $data->getCurrentOrderTotal();
        $dataArray['original_order_total'] = $data->getOriginalOrderTotal();
        $dataArray['transaction_total'] = $data->getTransactionTotal();
        $dataArray['accounting_total'] = $data->getAccountingTotal();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\BaseOrderSummary::class => false];
    }
}