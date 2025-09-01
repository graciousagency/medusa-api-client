<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class GetCustomers extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Retrieve a list of customers. The customers can be filtered by fields such as `id`. The customers can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $groups 
     *     @var string $q Search term to filter the customer's searchable properties by.
     *     @var string $id 
     *     @var string $email 
     *     @var string $company_name 
     *     @var string $first_name 
     *     @var string $last_name 
     *     @var string $created_by 
     *     @var string $created_at Filter by the customer's creation date.
     *     @var string $updated_at Filter by a customer's update date.
     *     @var string $deleted_at Filter a customer by their deletion date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $has_account Filter by whether the customer is registered.
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
        return '/admin/customers';
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
        $optionsResolver->setDefined(['fields', 'offset', 'limit', 'order', 'groups', 'q', 'id', 'email', 'company_name', 'first_name', 'last_name', 'created_by', 'created_at', 'updated_at', 'deleted_at', '$and', '$or', 'has_account', 'with_deleted']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('fields', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['float']);
        $optionsResolver->addAllowedTypes('limit', ['float']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('created_at', ['string']);
        $optionsResolver->addAllowedTypes('updated_at', ['string']);
        $optionsResolver->addAllowedTypes('deleted_at', ['string']);
        $optionsResolver->addAllowedTypes('$and', ['array']);
        $optionsResolver->addAllowedTypes('$or', ['array']);
        $optionsResolver->addAllowedTypes('has_account', ['bool']);
        $optionsResolver->addAllowedTypes('with_deleted', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminCustomersGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetCustomersBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetCustomersNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetCustomersConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetCustomersUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetCustomersInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}