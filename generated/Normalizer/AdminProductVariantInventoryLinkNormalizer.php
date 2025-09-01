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
class AdminProductVariantInventoryLinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLink::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLink::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLink();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Product', $data) && $data['Product'] !== null) {
            $object->setProduct($this->denormalizer->denormalize($data['Product'], \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkProduct::class, 'json', $context));
            unset($data['Product']);
        }
        elseif (\array_key_exists('Product', $data) && $data['Product'] === null) {
            $object->setProduct(null);
        }
        if (\array_key_exists('Inventory', $data) && $data['Inventory'] !== null) {
            $object->setInventory($this->denormalizer->denormalize($data['Inventory'], \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkInventory::class, 'json', $context));
            unset($data['Inventory']);
        }
        elseif (\array_key_exists('Inventory', $data) && $data['Inventory'] === null) {
            $object->setInventory(null);
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
        $dataArray['Product'] = $this->normalizer->normalize($data->getProduct(), 'json', $context);
        $dataArray['Inventory'] = $this->normalizer->normalize($data->getInventory(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLink::class => false];
    }
}