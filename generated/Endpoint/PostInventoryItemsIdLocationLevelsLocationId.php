<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostInventoryItemsIdLocationLevelsLocationId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $location_id;
    protected $accept;
    /**
     * Updates the details of an inventory item's inventory level using its associated location ID.
     *
     * @param string $id The inventory item's ID.
     * @param string $locationId The ID of the location associated with the inventory level.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryLocationLevel $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, string $locationId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryLocationLevel $requestBody = null, array $queryParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->location_id = $locationId;
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
        return str_replace(['{id}', '{location_id}'], [$this->id, $this->location_id], '/admin/inventory-items/{id}/location-levels/{location_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryLocationLevel) {
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}