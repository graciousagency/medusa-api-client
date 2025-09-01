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
class AdminNotificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\AdminNotification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\AdminNotification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\AdminNotification();
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
        if (\array_key_exists('to', $data) && $data['to'] !== null) {
            $object->setTo($data['to']);
            unset($data['to']);
        }
        elseif (\array_key_exists('to', $data) && $data['to'] === null) {
            $object->setTo(null);
        }
        if (\array_key_exists('channel', $data) && $data['channel'] !== null) {
            $object->setChannel($data['channel']);
            unset($data['channel']);
        }
        elseif (\array_key_exists('channel', $data) && $data['channel'] === null) {
            $object->setChannel(null);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->setTemplate($data['template']);
            unset($data['template']);
        }
        elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->setTemplate(null);
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
        if (\array_key_exists('trigger_type', $data) && $data['trigger_type'] !== null) {
            $object->setTriggerType($data['trigger_type']);
            unset($data['trigger_type']);
        }
        elseif (\array_key_exists('trigger_type', $data) && $data['trigger_type'] === null) {
            $object->setTriggerType(null);
        }
        if (\array_key_exists('resource_id', $data) && $data['resource_id'] !== null) {
            $object->setResourceId($data['resource_id']);
            unset($data['resource_id']);
        }
        elseif (\array_key_exists('resource_id', $data) && $data['resource_id'] === null) {
            $object->setResourceId(null);
        }
        if (\array_key_exists('resource_type', $data) && $data['resource_type'] !== null) {
            $object->setResourceType($data['resource_type']);
            unset($data['resource_type']);
        }
        elseif (\array_key_exists('resource_type', $data) && $data['resource_type'] === null) {
            $object->setResourceType(null);
        }
        if (\array_key_exists('receiver_id', $data) && $data['receiver_id'] !== null) {
            $object->setReceiverId($data['receiver_id']);
            unset($data['receiver_id']);
        }
        elseif (\array_key_exists('receiver_id', $data) && $data['receiver_id'] === null) {
            $object->setReceiverId(null);
        }
        if (\array_key_exists('original_notification_id', $data) && $data['original_notification_id'] !== null) {
            $object->setOriginalNotificationId($data['original_notification_id']);
            unset($data['original_notification_id']);
        }
        elseif (\array_key_exists('original_notification_id', $data) && $data['original_notification_id'] === null) {
            $object->setOriginalNotificationId(null);
        }
        if (\array_key_exists('external_id', $data) && $data['external_id'] !== null) {
            $object->setExternalId($data['external_id']);
            unset($data['external_id']);
        }
        elseif (\array_key_exists('external_id', $data) && $data['external_id'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('provider_id', $data) && $data['provider_id'] !== null) {
            $object->setProviderId($data['provider_id']);
            unset($data['provider_id']);
        }
        elseif (\array_key_exists('provider_id', $data) && $data['provider_id'] === null) {
            $object->setProviderId(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['created_at']));
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
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
        $dataArray['to'] = $data->getTo();
        $dataArray['channel'] = $data->getChannel();
        $dataArray['template'] = $data->getTemplate();
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $values = [];
            foreach ($data->getData() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['data'] = $values;
        }
        if ($data->isInitialized('triggerType') && null !== $data->getTriggerType()) {
            $dataArray['trigger_type'] = $data->getTriggerType();
        }
        if ($data->isInitialized('resourceId') && null !== $data->getResourceId()) {
            $dataArray['resource_id'] = $data->getResourceId();
        }
        if ($data->isInitialized('resourceType') && null !== $data->getResourceType()) {
            $dataArray['resource_type'] = $data->getResourceType();
        }
        if ($data->isInitialized('receiverId') && null !== $data->getReceiverId()) {
            $dataArray['receiver_id'] = $data->getReceiverId();
        }
        if ($data->isInitialized('originalNotificationId') && null !== $data->getOriginalNotificationId()) {
            $dataArray['original_notification_id'] = $data->getOriginalNotificationId();
        }
        if ($data->isInitialized('externalId') && null !== $data->getExternalId()) {
            $dataArray['external_id'] = $data->getExternalId();
        }
        $dataArray['provider_id'] = $data->getProviderId();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:s.u\Z');
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\AdminNotification::class => false];
    }
}
