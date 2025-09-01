<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostOrdersIdFulfillmentsFulfillmentIdShipments extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $fulfillment_id;
    protected $accept;
    /**
     * Create a shipment for an order's fulfillment.
     *
     * @param string $id The order's ID.
     * @param string $fulfillmentId The fulfillment's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, string $fulfillmentId, ?\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBody $requestBody = null, array $queryParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->fulfillment_id = $fulfillmentId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{fulfillment_id}'], [$this->id, $this->fulfillment_id], '/admin/orders/{id}/fulfillments/{fulfillment_id}/shipments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
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
        $optionsResolver->setDefined(['fields']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('fields', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminOrderResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}