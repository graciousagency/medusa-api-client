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
class BaseRefundNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\BaseRefund::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\BaseRefund::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\BaseRefund();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
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
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('refund_reason_id', $data) && $data['refund_reason_id'] !== null) {
            $object->setRefundReasonId($data['refund_reason_id']);
            unset($data['refund_reason_id']);
        }
        elseif (\array_key_exists('refund_reason_id', $data) && $data['refund_reason_id'] === null) {
            $object->setRefundReasonId(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['created_at']));
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('created_by', $data) && $data['created_by'] !== null) {
            $object->setCreatedBy($data['created_by']);
            unset($data['created_by']);
        }
        elseif (\array_key_exists('created_by', $data) && $data['created_by'] === null) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('payment', $data) && $data['payment'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['payment'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPayment($values);
            unset($data['payment']);
        }
        elseif (\array_key_exists('payment', $data) && $data['payment'] === null) {
            $object->setPayment(null);
        }
        if (\array_key_exists('refund_reason', $data) && $data['refund_reason'] !== null) {
            $object->setRefundReason($this->denormalizer->denormalize($data['refund_reason'], \Gracious\MedusaApiClientBundle\Model\RefundReason::class, 'json', $context));
            unset($data['refund_reason']);
        }
        elseif (\array_key_exists('refund_reason', $data) && $data['refund_reason'] === null) {
            $object->setRefundReason(null);
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
        $dataArray['amount'] = $data->getAmount();
        if ($data->isInitialized('refundReasonId') && null !== $data->getRefundReasonId()) {
            $dataArray['refund_reason_id'] = $data->getRefundReasonId();
        }
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        if ($data->isInitialized('createdBy') && null !== $data->getCreatedBy()) {
            $dataArray['created_by'] = $data->getCreatedBy();
        }
        $values = [];
        foreach ($data->getPayment() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['payment'] = $values;
        if ($data->isInitialized('refundReason') && null !== $data->getRefundReason()) {
            $dataArray['refund_reason'] = $this->normalizer->normalize($data->getRefundReason(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\BaseRefund::class => false];
    }
}
