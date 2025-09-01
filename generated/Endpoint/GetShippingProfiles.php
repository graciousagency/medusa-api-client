<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class GetShippingProfiles extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Retrieve a list of shipping profiles. The shipping profiles can be filtered by fields such as `id`. The shipping profiles can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var string $q Search term to filter the shipping profile's searchable properties.
     *     @var string $type Filter by a shipping profile's type.
     *     @var string $name Filter by a shipping profile's name.
     *     @var string $created_at Filter by a shipping profile's creation date.
     *     @var string $updated_at Filter by a shipping profile's update date.
     *     @var string $deleted_at Filter by a shipping profile's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/admin/shipping-profiles';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'text/plain']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['fields', 'offset', 'limit', 'order', 'id', 'q', 'type', 'name', 'created_at', 'updated_at', 'deleted_at', '$and', '$or', 'with_deleted']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('fields', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['float']);
        $optionsResolver->addAllowedTypes('limit', ['float']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('created_at', ['string']);
        $optionsResolver->addAllowedTypes('updated_at', ['string']);
        $optionsResolver->addAllowedTypes('deleted_at', ['string']);
        $optionsResolver->addAllowedTypes('$and', ['array']);
        $optionsResolver->addAllowedTypes('$or', ['array']);
        $optionsResolver->addAllowedTypes('with_deleted', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingProfilesGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminShippingProfilesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}