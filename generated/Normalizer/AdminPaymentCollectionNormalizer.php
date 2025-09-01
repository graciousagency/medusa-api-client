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
class AdminPaymentCollectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPaymentCollection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPaymentCollection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPaymentCollection();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
        }
        if (\array_key_exists('authorized_amount', $data) && \is_int($data['authorized_amount'])) {
            $data['authorized_amount'] = (double) $data['authorized_amount'];
        }
        if (\array_key_exists('captured_amount', $data) && \is_int($data['captured_amount'])) {
            $data['captured_amount'] = (double) $data['captured_amount'];
        }
        if (\array_key_exists('refunded_amount', $data) && \is_int($data['refunded_amount'])) {
            $data['refunded_amount'] = (double) $data['refunded_amount'];
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
        if (\array_key_exists('authorized_amount', $data) && $data['authorized_amount'] !== null) {
            $object->setAuthorizedAmount($data['authorized_amount']);
            unset($data['authorized_amount']);
        }
        elseif (\array_key_exists('authorized_amount', $data) && $data['authorized_amount'] === null) {
            $object->setAuthorizedAmount(null);
        }
        if (\array_key_exists('captured_amount', $data) && $data['captured_amount'] !== null) {
            $object->setCapturedAmount($data['captured_amount']);
            unset($data['captured_amount']);
        }
        elseif (\array_key_exists('captured_amount', $data) && $data['captured_amount'] === null) {
            $object->setCapturedAmount(null);
        }
        if (\array_key_exists('refunded_amount', $data) && $data['refunded_amount'] !== null) {
            $object->setRefundedAmount($data['refunded_amount']);
            unset($data['refunded_amount']);
        }
        elseif (\array_key_exists('refunded_amount', $data) && $data['refunded_amount'] === null) {
            $object->setRefundedAmount(null);
        }
        if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
            $object->setCompletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['completed_at']));
            unset($data['completed_at']);
        }
        elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
            $object->setCompletedAt(null);
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
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('payment_providers', $data) && $data['payment_providers'] !== null) {
            $values_1 = [];
            foreach ($data['payment_providers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\AdminPaymentProvider::class, 'json', $context);
            }
            $object->setPaymentProviders($values_1);
            unset($data['payment_providers']);
        }
        elseif (\array_key_exists('payment_providers', $data) && $data['payment_providers'] === null) {
            $object->setPaymentProviders(null);
        }
        if (\array_key_exists('payment_sessions', $data) && $data['payment_sessions'] !== null) {
            $values_2 = [];
            foreach ($data['payment_sessions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\AdminPaymentSession::class, 'json', $context);
            }
            $object->setPaymentSessions($values_2);
            unset($data['payment_sessions']);
        }
        elseif (\array_key_exists('payment_sessions', $data) && $data['payment_sessions'] === null) {
            $object->setPaymentSessions(null);
        }
        if (\array_key_exists('payments', $data) && $data['payments'] !== null) {
            $values_3 = [];
            foreach ($data['payments'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Gracious\MedusaApiClientBundle\Model\AdminPayment::class, 'json', $context);
            }
            $object->setPayments($values_3);
            unset($data['payments']);
        }
        elseif (\array_key_exists('payments', $data) && $data['payments'] === null) {
            $object->setPayments(null);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['currency_code'] = $data->getCurrencyCode();
        $dataArray['amount'] = $data->getAmount();
        if ($data->isInitialized('authorizedAmount') && null !== $data->getAuthorizedAmount()) {
            $dataArray['authorized_amount'] = $data->getAuthorizedAmount();
        }
        if ($data->isInitialized('capturedAmount') && null !== $data->getCapturedAmount()) {
            $dataArray['captured_amount'] = $data->getCapturedAmount();
        }
        if ($data->isInitialized('refundedAmount') && null !== $data->getRefundedAmount()) {
            $dataArray['refunded_amount'] = $data->getRefundedAmount();
        }
        if ($data->isInitialized('completedAt') && null !== $data->getCompletedAt()) {
            $dataArray['completed_at'] = $data->getCompletedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values = [];
            foreach ($data->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['metadata'] = $values;
        }
        $dataArray['status'] = $data->getStatus();
        $values_1 = [];
        foreach ($data->getPaymentProviders() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['payment_providers'] = $values_1;
        if ($data->isInitialized('paymentSessions') && null !== $data->getPaymentSessions()) {
            $values_2 = [];
            foreach ($data->getPaymentSessions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['payment_sessions'] = $values_2;
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $values_3 = [];
            foreach ($data->getPayments() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['payments'] = $values_3;
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPaymentCollection::class => false];
    }
}
