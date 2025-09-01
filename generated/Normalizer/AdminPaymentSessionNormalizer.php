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
class AdminPaymentSessionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminPaymentSession::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminPaymentSession::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminPaymentSession();
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
        if (\array_key_exists('context', $data) && $data['context'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['context'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setContext($values_1);
            unset($data['context']);
        }
        elseif (\array_key_exists('context', $data) && $data['context'] === null) {
            $object->setContext(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('authorized_at', $data) && $data['authorized_at'] !== null) {
            $object->setAuthorizedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['authorized_at']));
            unset($data['authorized_at']);
        }
        elseif (\array_key_exists('authorized_at', $data) && $data['authorized_at'] === null) {
            $object->setAuthorizedAt(null);
        }
        if (\array_key_exists('payment_collection', $data) && $data['payment_collection'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['payment_collection'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setPaymentCollection($values_2);
            unset($data['payment_collection']);
        }
        elseif (\array_key_exists('payment_collection', $data) && $data['payment_collection'] === null) {
            $object->setPaymentCollection(null);
        }
        if (\array_key_exists('payment', $data) && $data['payment'] !== null) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Gracious\MedusaApiClientBundle\Model\BasePayment::class, 'json', $context));
            unset($data['payment']);
        }
        elseif (\array_key_exists('payment', $data) && $data['payment'] === null) {
            $object->setPayment(null);
        }
        foreach ($data as $key_3 => $value_3) {
            if (preg_match('/.*/', (string) $key_3)) {
                $object[$key_3] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['amount'] = $data->getAmount();
        $dataArray['currency_code'] = $data->getCurrencyCode();
        $dataArray['provider_id'] = $data->getProviderId();
        $values = [];
        foreach ($data->getData() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['data'] = $values;
        if ($data->isInitialized('context') && null !== $data->getContext()) {
            $values_1 = [];
            foreach ($data->getContext() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['context'] = $values_1;
        }
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('authorizedAt') && null !== $data->getAuthorizedAt()) {
            $dataArray['authorized_at'] = $data->getAuthorizedAt()?->format('Y-m-d\TH:i:s.u\Z');
        }
        if ($data->isInitialized('paymentCollection') && null !== $data->getPaymentCollection()) {
            $values_2 = [];
            foreach ($data->getPaymentCollection() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $dataArray['payment_collection'] = $values_2;
        }
        if ($data->isInitialized('payment') && null !== $data->getPayment()) {
            $dataArray['payment'] = $this->normalizer->normalize($data->getPayment(), 'json', $context);
        }
        foreach ($data as $key_3 => $value_3) {
            if (preg_match('/.*/', (string) $key_3)) {
                $dataArray[$key_3] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminPaymentSession::class => false];
    }
}
