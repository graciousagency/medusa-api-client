<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class GetStoreCreditAccounts extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * Retrieve a list of store credit accounts. The store credit accounts can be filtered by fields such as `id`. The store credit accounts can also be sorted or paginated.
    *
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    The fields and relations to retrieve separated by commas.
    
    Learn more in the [API reference](https://docs.medusajs.com/api/store#select-fields-and-relations).
    *     @var string $id Filter by the store credit account's ID.
    *     @var string $customer_id Filter by customer ID(s) to retrieve their store credit accounts.
    *     @var string $transaction_group_id Filter by the associated transaction group's ID.
    *     @var string $currency_code Filter by currency code(s) to retrieve store credit accounts in specific currencies.
    *     @var string $created_at Filter by a store credit account's creation date.
    *     @var string $updated_at Filter by a store credit account's update date.
    *     @var array $$and An array of filters to apply on the entity, where each item in the array is joined with an "and" condition.
    *     @var array $$or An array of filters to apply on the entity, where each item in the array is joined with an "or" condition.
    *     @var float $limit Limit the number of items returned in the list.
    *     @var float $offset The number of items to skip when retrieving a list.
    *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
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
        return '/admin/store-credit-accounts';
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
        $optionsResolver->setDefined(['fields', 'id', 'customer_id', 'transaction_group_id', 'currency_code', 'created_at', 'updated_at', '$and', '$or', 'limit', 'offset', 'order']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('fields', ['string']);
        $optionsResolver->addAllowedTypes('created_at', ['string']);
        $optionsResolver->addAllowedTypes('updated_at', ['string']);
        $optionsResolver->addAllowedTypes('$and', ['array']);
        $optionsResolver->addAllowedTypes('$or', ['array']);
        $optionsResolver->addAllowedTypes('limit', ['float']);
        $optionsResolver->addAllowedTypes('offset', ['float']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}