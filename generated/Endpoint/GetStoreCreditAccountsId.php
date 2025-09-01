<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class GetStoreCreditAccountsId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
    * Retrieve a store credit account by its ID. You can expand the store credit account's relations or select the fields that should be returned.
    *
    * @param string $id The store credit account's ID.
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
    public function __construct(string $id, array $queryParameters = [], array $accept = [])
    {
        $this->id = $id;
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
        return str_replace(['{id}'], [$this->id], '/admin/store-credit-accounts/{id}');
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}