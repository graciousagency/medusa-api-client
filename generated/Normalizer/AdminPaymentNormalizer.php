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
class AdminPaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPayment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPayment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPayment();
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
        if (\array_key_exists('currency_code', $data) && $data['currency_code'] !== null) {
            $object->setCurrencyCode($data['currency_code']);
            unset($data['currency_code']);
        }
        elseif (\array_key_exists('currency_code', $data) && $data['currency_code'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('provider_id', $data) && $data['provider_id'] !== null) {
            $object->setProviderId($data['provider_id']);
            unset($data['provider_id']);
        }
        elseif (\array_key_exists('provider_id', $data) && $data['provider_id'] === null) {
            $object->setProviderId(null);
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['data'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setData($values);
            unset($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
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
        if (\array_key_exists('captured_at', $data) && $data['captured_at'] !== null) {
            $object->setCapturedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['captured_at']));
            unset($data['captured_at']);
        }
        elseif (\array_key_exists('captured_at', $data) && $data['captured_at'] === null) {
            $object->setCapturedAt(null);
        }
        if (\array_key_exists('canceled_at', $data) && $data['canceled_at'] !== null) {
            $object->setCanceledAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['canceled_at']));
            unset($data['canceled_at']);
        }
        elseif (\array_key_exists('canceled_at', $data) && $data['canceled_at'] === null) {
            $object->setCanceledAt(null);
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
        if (\array_key_exists('captures', $data) && $data['captures'] !== null) {
            $values_1 = [];
            foreach ($data['captures'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Gracious\MedusaApiClientBundle\Model\BaseCapture::class, 'json', $context);
            }
            $object->setCaptures($values_1);
            unset($data['captures']);
        }
        elseif (\array_key_exists('captures', $data) && $data['captures'] === null) {
            $object->setCaptures(null);
        }
        if (\array_key_exists('refunds', $data) && $data['refunds'] !== null) {
            $values_2 = [];
            foreach ($data['refunds'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Gracious\MedusaApiClientBundle\Model\AdminRefund::class, 'json', $context);
            }
            $object->setRefunds($values_2);
            unset($data['refunds']);
        }
        elseif (\array_key_exists('refunds', $data) && $data['refunds'] === null) {
            $object->setRefunds(null);
        }
        if (\array_key_exists('payment_collection', $data) && $data['payment_collection'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['payment_collection'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setPaymentCollection($values_3);
            unset($data['payment_collection']);
        }
        elseif (\array_key_exists('payment_collection', $data) && $data['payment_collection'] === null) {
            $object->setPaymentCollection(null);
        }
        if (\array_key_exists('payment_session', $data) && $data['payment_session'] !== null) {
            $object->setPaymentSession($this->denormalizer->denormalize($data['payment_session'], \Gracious\MedusaApiClientBundle\Model\AdminPaymentSession::class, 'json', $context));
            unset($data['payment_session']);
        }
        elseif (\array_key_exists('payment_session', $data) && $data['payment_session'] === null) {
            $object->setPaymentSession(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['amount'] = $data->getAmount();
        if ($data->isInitialized('authorizedAmount') && null !== $data->getAuthorizedAmount()) {
            $dataArray['authorized_amount'] = $data->getAuthorizedAmount();
        }
        $dataArray['currency_code'] = $data->getCurrencyCode();
        $dataArray['provider_id'] = $data->getProviderId();
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $values = [];
            foreach ($data->getData() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['data'] = $values;
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('capturedAt') && null !== $data->getCapturedAt()) {
            $dataArray['captured_at'] = $data->getCapturedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('canceledAt') && null !== $data->getCanceledAt()) {
            $dataArray['canceled_at'] = $data->getCanceledAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('capturedAmount') && null !== $data->getCapturedAmount()) {
            $dataArray['captured_amount'] = $data->getCapturedAmount();
        }
        if ($data->isInitialized('refundedAmount') && null !== $data->getRefundedAmount()) {
            $dataArray['refunded_amount'] = $data->getRefundedAmount();
        }
        if ($data->isInitialized('captures') && null !== $data->getCaptures()) {
            $values_1 = [];
            foreach ($data->getCaptures() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['captures'] = $values_1;
        }
        if ($data->isInitialized('refunds') && null !== $data->getRefunds()) {
            $values_2 = [];
            foreach ($data->getRefunds() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['refunds'] = $values_2;
        }
        if ($data->isInitialized('paymentCollection') && null !== $data->getPaymentCollection()) {
            $values_3 = [];
            foreach ($data->getPaymentCollection() as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $dataArray['payment_collection'] = $values_3;
        }
        if ($data->isInitialized('paymentSession') && null !== $data->getPaymentSession()) {
            $dataArray['payment_session'] = $this->normalizer->normalize($data->getPaymentSession(), 'json', $context);
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPayment::class => false];
    }
}
