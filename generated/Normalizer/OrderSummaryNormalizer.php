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
class OrderSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\OrderSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\OrderSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\OrderSummary();
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
        if (\array_key_exists('paid_total', $data) && \is_int($data['paid_total'])) {
            $data['paid_total'] = (double) $data['paid_total'];
        }
        if (\array_key_exists('refunded_total', $data) && \is_int($data['refunded_total'])) {
            $data['refunded_total'] = (double) $data['refunded_total'];
        }
        if (\array_key_exists('credit_line_total', $data) && \is_int($data['credit_line_total'])) {
            $data['credit_line_total'] = (double) $data['credit_line_total'];
        }
        if (\array_key_exists('accounting_total', $data) && \is_int($data['accounting_total'])) {
            $data['accounting_total'] = (double) $data['accounting_total'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('credit_line_total', $data) && $data['credit_line_total'] !== null) {
            $object->setCreditLineTotal($data['credit_line_total']);
            unset($data['credit_line_total']);
        }
        elseif (\array_key_exists('credit_line_total', $data) && $data['credit_line_total'] === null) {
            $object->setCreditLineTotal(null);
        }
        if (\array_key_exists('accounting_total', $data) && $data['accounting_total'] !== null) {
            $object->setAccountingTotal($data['accounting_total']);
            unset($data['accounting_total']);
        }
        elseif (\array_key_exists('accounting_total', $data) && $data['accounting_total'] === null) {
            $object->setAccountingTotal(null);
        }
        if (\array_key_exists('raw_pending_difference', $data) && $data['raw_pending_difference'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_pending_difference'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setRawPendingDifference($values);
            unset($data['raw_pending_difference']);
        }
        elseif (\array_key_exists('raw_pending_difference', $data) && $data['raw_pending_difference'] === null) {
            $object->setRawPendingDifference(null);
        }
        if (\array_key_exists('raw_current_order_total', $data) && $data['raw_current_order_total'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_current_order_total'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setRawCurrentOrderTotal($values_1);
            unset($data['raw_current_order_total']);
        }
        elseif (\array_key_exists('raw_current_order_total', $data) && $data['raw_current_order_total'] === null) {
            $object->setRawCurrentOrderTotal(null);
        }
        if (\array_key_exists('raw_original_order_total', $data) && $data['raw_original_order_total'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_original_order_total'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setRawOriginalOrderTotal($values_2);
            unset($data['raw_original_order_total']);
        }
        elseif (\array_key_exists('raw_original_order_total', $data) && $data['raw_original_order_total'] === null) {
            $object->setRawOriginalOrderTotal(null);
        }
        if (\array_key_exists('raw_transaction_total', $data) && $data['raw_transaction_total'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_transaction_total'] as $key_3 => $value_3) {
                $values_3[$key_3] = $value_3;
            }
            $object->setRawTransactionTotal($values_3);
            unset($data['raw_transaction_total']);
        }
        elseif (\array_key_exists('raw_transaction_total', $data) && $data['raw_transaction_total'] === null) {
            $object->setRawTransactionTotal(null);
        }
        if (\array_key_exists('raw_paid_total', $data) && $data['raw_paid_total'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_paid_total'] as $key_4 => $value_4) {
                $values_4[$key_4] = $value_4;
            }
            $object->setRawPaidTotal($values_4);
            unset($data['raw_paid_total']);
        }
        elseif (\array_key_exists('raw_paid_total', $data) && $data['raw_paid_total'] === null) {
            $object->setRawPaidTotal(null);
        }
        if (\array_key_exists('raw_refunded_total', $data) && $data['raw_refunded_total'] !== null) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_refunded_total'] as $key_5 => $value_5) {
                $values_5[$key_5] = $value_5;
            }
            $object->setRawRefundedTotal($values_5);
            unset($data['raw_refunded_total']);
        }
        elseif (\array_key_exists('raw_refunded_total', $data) && $data['raw_refunded_total'] === null) {
            $object->setRawRefundedTotal(null);
        }
        if (\array_key_exists('raw_credit_line_total', $data) && $data['raw_credit_line_total'] !== null) {
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_credit_line_total'] as $key_6 => $value_6) {
                $values_6[$key_6] = $value_6;
            }
            $object->setRawCreditLineTotal($values_6);
            unset($data['raw_credit_line_total']);
        }
        elseif (\array_key_exists('raw_credit_line_total', $data) && $data['raw_credit_line_total'] === null) {
            $object->setRawCreditLineTotal(null);
        }
        if (\array_key_exists('raw_accounting_total', $data) && $data['raw_accounting_total'] !== null) {
            $values_7 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['raw_accounting_total'] as $key_7 => $value_7) {
                $values_7[$key_7] = $value_7;
            }
            $object->setRawAccountingTotal($values_7);
            unset($data['raw_accounting_total']);
        }
        elseif (\array_key_exists('raw_accounting_total', $data) && $data['raw_accounting_total'] === null) {
            $object->setRawAccountingTotal(null);
        }
        foreach ($data as $key_8 => $value_8) {
            if (preg_match('/.*/', (string) $key_8)) {
                $object[$key_8] = $value_8;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['pending_difference'] = $data->getPendingDifference();
        $dataArray['current_order_total'] = $data->getCurrentOrderTotal();
        $dataArray['original_order_total'] = $data->getOriginalOrderTotal();
        $dataArray['transaction_total'] = $data->getTransactionTotal();
        $dataArray['paid_total'] = $data->getPaidTotal();
        $dataArray['refunded_total'] = $data->getRefundedTotal();
        $dataArray['credit_line_total'] = $data->getCreditLineTotal();
        $dataArray['accounting_total'] = $data->getAccountingTotal();
        $values = [];
        foreach ($data->getRawPendingDifference() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['raw_pending_difference'] = $values;
        $values_1 = [];
        foreach ($data->getRawCurrentOrderTotal() as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $dataArray['raw_current_order_total'] = $values_1;
        $values_2 = [];
        foreach ($data->getRawOriginalOrderTotal() as $key_2 => $value_2) {
            $values_2[$key_2] = $value_2;
        }
        $dataArray['raw_original_order_total'] = $values_2;
        $values_3 = [];
        foreach ($data->getRawTransactionTotal() as $key_3 => $value_3) {
            $values_3[$key_3] = $value_3;
        }
        $dataArray['raw_transaction_total'] = $values_3;
        $values_4 = [];
        foreach ($data->getRawPaidTotal() as $key_4 => $value_4) {
            $values_4[$key_4] = $value_4;
        }
        $dataArray['raw_paid_total'] = $values_4;
        $values_5 = [];
        foreach ($data->getRawRefundedTotal() as $key_5 => $value_5) {
            $values_5[$key_5] = $value_5;
        }
        $dataArray['raw_refunded_total'] = $values_5;
        $values_6 = [];
        foreach ($data->getRawCreditLineTotal() as $key_6 => $value_6) {
            $values_6[$key_6] = $value_6;
        }
        $dataArray['raw_credit_line_total'] = $values_6;
        $values_7 = [];
        foreach ($data->getRawAccountingTotal() as $key_7 => $value_7) {
            $values_7[$key_7] = $value_7;
        }
        $dataArray['raw_accounting_total'] = $values_7;
        foreach ($data as $key_8 => $value_8) {
            if (preg_match('/.*/', (string) $key_8)) {
                $dataArray[$key_8] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\OrderSummary::class => false];
    }
}