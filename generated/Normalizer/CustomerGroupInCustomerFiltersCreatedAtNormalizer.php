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
class CustomerGroupInCustomerFiltersCreatedAtNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersCreatedAt::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersCreatedAt::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersCreatedAt();
        if (\array_key_exists('$exists', $data) && \is_int($data['$exists'])) {
            $data['$exists'] = (bool) $data['$exists'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('$and', $data) && $data['$and'] !== null) {
            $values = [];
            foreach ($data['$and'] as $value) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDollarAnd($values);
            unset($data['$and']);
        }
        elseif (\array_key_exists('$and', $data) && $data['$and'] === null) {
            $object->setDollarAnd(null);
        }
        if (\array_key_exists('$or', $data) && $data['$or'] !== null) {
            $values_2 = [];
            foreach ($data['$or'] as $value_2) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_2 as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setDollarOr($values_2);
            unset($data['$or']);
        }
        elseif (\array_key_exists('$or', $data) && $data['$or'] === null) {
            $object->setDollarOr(null);
        }
        if (\array_key_exists('$eq', $data) && $data['$eq'] !== null) {
            $object->setDollarEq($data['$eq']);
            unset($data['$eq']);
        }
        elseif (\array_key_exists('$eq', $data) && $data['$eq'] === null) {
            $object->setDollarEq(null);
        }
        if (\array_key_exists('$ne', $data) && $data['$ne'] !== null) {
            $object->setDollarNe($data['$ne']);
            unset($data['$ne']);
        }
        elseif (\array_key_exists('$ne', $data) && $data['$ne'] === null) {
            $object->setDollarNe(null);
        }
        if (\array_key_exists('$in', $data) && $data['$in'] !== null) {
            $values_4 = [];
            foreach ($data['$in'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setDollarIn($values_4);
            unset($data['$in']);
        }
        elseif (\array_key_exists('$in', $data) && $data['$in'] === null) {
            $object->setDollarIn(null);
        }
        if (\array_key_exists('$nin', $data) && $data['$nin'] !== null) {
            $values_5 = [];
            foreach ($data['$nin'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setDollarNin($values_5);
            unset($data['$nin']);
        }
        elseif (\array_key_exists('$nin', $data) && $data['$nin'] === null) {
            $object->setDollarNin(null);
        }
        if (\array_key_exists('$not', $data) && $data['$not'] !== null) {
            $object->setDollarNot($data['$not']);
            unset($data['$not']);
        }
        elseif (\array_key_exists('$not', $data) && $data['$not'] === null) {
            $object->setDollarNot(null);
        }
        if (\array_key_exists('$gt', $data) && $data['$gt'] !== null) {
            $object->setDollarGt($data['$gt']);
            unset($data['$gt']);
        }
        elseif (\array_key_exists('$gt', $data) && $data['$gt'] === null) {
            $object->setDollarGt(null);
        }
        if (\array_key_exists('$gte', $data) && $data['$gte'] !== null) {
            $object->setDollarGte($data['$gte']);
            unset($data['$gte']);
        }
        elseif (\array_key_exists('$gte', $data) && $data['$gte'] === null) {
            $object->setDollarGte(null);
        }
        if (\array_key_exists('$lt', $data) && $data['$lt'] !== null) {
            $object->setDollarLt($data['$lt']);
            unset($data['$lt']);
        }
        elseif (\array_key_exists('$lt', $data) && $data['$lt'] === null) {
            $object->setDollarLt(null);
        }
        if (\array_key_exists('$lte', $data) && $data['$lte'] !== null) {
            $object->setDollarLte($data['$lte']);
            unset($data['$lte']);
        }
        elseif (\array_key_exists('$lte', $data) && $data['$lte'] === null) {
            $object->setDollarLte(null);
        }
        if (\array_key_exists('$like', $data) && $data['$like'] !== null) {
            $object->setDollarLike($data['$like']);
            unset($data['$like']);
        }
        elseif (\array_key_exists('$like', $data) && $data['$like'] === null) {
            $object->setDollarLike(null);
        }
        if (\array_key_exists('$re', $data) && $data['$re'] !== null) {
            $object->setDollarRe($data['$re']);
            unset($data['$re']);
        }
        elseif (\array_key_exists('$re', $data) && $data['$re'] === null) {
            $object->setDollarRe(null);
        }
        if (\array_key_exists('$ilike', $data) && $data['$ilike'] !== null) {
            $object->setDollarIlike($data['$ilike']);
            unset($data['$ilike']);
        }
        elseif (\array_key_exists('$ilike', $data) && $data['$ilike'] === null) {
            $object->setDollarIlike(null);
        }
        if (\array_key_exists('$fulltext', $data) && $data['$fulltext'] !== null) {
            $object->setDollarFulltext($data['$fulltext']);
            unset($data['$fulltext']);
        }
        elseif (\array_key_exists('$fulltext', $data) && $data['$fulltext'] === null) {
            $object->setDollarFulltext(null);
        }
        if (\array_key_exists('$overlap', $data) && $data['$overlap'] !== null) {
            $values_6 = [];
            foreach ($data['$overlap'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDollarOverlap($values_6);
            unset($data['$overlap']);
        }
        elseif (\array_key_exists('$overlap', $data) && $data['$overlap'] === null) {
            $object->setDollarOverlap(null);
        }
        if (\array_key_exists('$contains', $data) && $data['$contains'] !== null) {
            $values_7 = [];
            foreach ($data['$contains'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setDollarContains($values_7);
            unset($data['$contains']);
        }
        elseif (\array_key_exists('$contains', $data) && $data['$contains'] === null) {
            $object->setDollarContains(null);
        }
        if (\array_key_exists('$contained', $data) && $data['$contained'] !== null) {
            $values_8 = [];
            foreach ($data['$contained'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setDollarContained($values_8);
            unset($data['$contained']);
        }
        elseif (\array_key_exists('$contained', $data) && $data['$contained'] === null) {
            $object->setDollarContained(null);
        }
        if (\array_key_exists('$exists', $data) && $data['$exists'] !== null) {
            $object->setDollarExists($data['$exists']);
            unset($data['$exists']);
        }
        elseif (\array_key_exists('$exists', $data) && $data['$exists'] === null) {
            $object->setDollarExists(null);
        }
        foreach ($data as $key_2 => $value_9) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_9;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dollarAnd') && null !== $data->getDollarAnd()) {
            $values = [];
            foreach ($data->getDollarAnd() as $value) {
                $values_1 = [];
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $dataArray['$and'] = $values;
        }
        if ($data->isInitialized('dollarOr') && null !== $data->getDollarOr()) {
            $values_2 = [];
            foreach ($data->getDollarOr() as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $dataArray['$or'] = $values_2;
        }
        if ($data->isInitialized('dollarEq') && null !== $data->getDollarEq()) {
            $dataArray['$eq'] = $data->getDollarEq();
        }
        if ($data->isInitialized('dollarNe') && null !== $data->getDollarNe()) {
            $dataArray['$ne'] = $data->getDollarNe();
        }
        if ($data->isInitialized('dollarIn') && null !== $data->getDollarIn()) {
            $values_4 = [];
            foreach ($data->getDollarIn() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['$in'] = $values_4;
        }
        if ($data->isInitialized('dollarNin') && null !== $data->getDollarNin()) {
            $values_5 = [];
            foreach ($data->getDollarNin() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['$nin'] = $values_5;
        }
        if ($data->isInitialized('dollarNot') && null !== $data->getDollarNot()) {
            $dataArray['$not'] = $data->getDollarNot();
        }
        if ($data->isInitialized('dollarGt') && null !== $data->getDollarGt()) {
            $dataArray['$gt'] = $data->getDollarGt();
        }
        if ($data->isInitialized('dollarGte') && null !== $data->getDollarGte()) {
            $dataArray['$gte'] = $data->getDollarGte();
        }
        if ($data->isInitialized('dollarLt') && null !== $data->getDollarLt()) {
            $dataArray['$lt'] = $data->getDollarLt();
        }
        if ($data->isInitialized('dollarLte') && null !== $data->getDollarLte()) {
            $dataArray['$lte'] = $data->getDollarLte();
        }
        if ($data->isInitialized('dollarLike') && null !== $data->getDollarLike()) {
            $dataArray['$like'] = $data->getDollarLike();
        }
        if ($data->isInitialized('dollarRe') && null !== $data->getDollarRe()) {
            $dataArray['$re'] = $data->getDollarRe();
        }
        if ($data->isInitialized('dollarIlike') && null !== $data->getDollarIlike()) {
            $dataArray['$ilike'] = $data->getDollarIlike();
        }
        if ($data->isInitialized('dollarFulltext') && null !== $data->getDollarFulltext()) {
            $dataArray['$fulltext'] = $data->getDollarFulltext();
        }
        if ($data->isInitialized('dollarOverlap') && null !== $data->getDollarOverlap()) {
            $values_6 = [];
            foreach ($data->getDollarOverlap() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['$overlap'] = $values_6;
        }
        if ($data->isInitialized('dollarContains') && null !== $data->getDollarContains()) {
            $values_7 = [];
            foreach ($data->getDollarContains() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['$contains'] = $values_7;
        }
        if ($data->isInitialized('dollarContained') && null !== $data->getDollarContained()) {
            $values_8 = [];
            foreach ($data->getDollarContained() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['$contained'] = $values_8;
        }
        if ($data->isInitialized('dollarExists') && null !== $data->getDollarExists()) {
            $dataArray['$exists'] = $data->getDollarExists();
        }
        foreach ($data as $key_2 => $value_9) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_9;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersCreatedAt::class => false];
    }
}