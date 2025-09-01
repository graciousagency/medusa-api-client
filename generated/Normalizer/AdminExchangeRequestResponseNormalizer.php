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
class AdminExchangeRequestResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminExchangeRequestResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminExchangeRequestResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminExchangeRequestResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('return', $data) && $data['return'] !== null) {
            $object->setReturn($this->denormalizer->denormalize($data['return'], \Gracious\MedusaApiClientBundle\Model\AdminReturn::class, 'json', $context));
            unset($data['return']);
        }
        elseif (\array_key_exists('return', $data) && $data['return'] === null) {
            $object->setReturn(null);
        }
        if (\array_key_exists('order_preview', $data) && $data['order_preview'] !== null) {
            $object->setOrderPreview($this->denormalizer->denormalize($data['order_preview'], \Gracious\MedusaApiClientBundle\Model\AdminOrderPreview::class, 'json', $context));
            unset($data['order_preview']);
        }
        elseif (\array_key_exists('order_preview', $data) && $data['order_preview'] === null) {
            $object->setOrderPreview(null);
        }
        if (\array_key_exists('exchange', $data) && $data['exchange'] !== null) {
            $object->setExchange($this->denormalizer->denormalize($data['exchange'], \Gracious\MedusaApiClientBundle\Model\AdminExchange::class, 'json', $context));
            unset($data['exchange']);
        }
        elseif (\array_key_exists('exchange', $data) && $data['exchange'] === null) {
            $object->setExchange(null);
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
        $dataArray['return'] = $this->normalizer->normalize($data->getReturn(), 'json', $context);
        $dataArray['order_preview'] = $this->normalizer->normalize($data->getOrderPreview(), 'json', $context);
        $dataArray['exchange'] = $this->normalizer->normalize($data->getExchange(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminExchangeRequestResponse::class => false];
    }
}