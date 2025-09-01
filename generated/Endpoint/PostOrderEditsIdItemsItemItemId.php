<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostOrderEditsIdItemsItemItemId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $item_id;
    protected $accept;
    /**
    * Update an existing order item's quantity of an order edit.
    You can also use this API route to remove an item from an order by setting its quantity to `0`.
    
    *
    * @param string $id The order edit's ID.
    * @param string $itemId The order edit's item id.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsUpdateItemQuantityReqSchema $requestBody 
    * @param array $accept Accept content header application/json|text/plain
    */
    public function __construct(string $id, string $itemId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsUpdateItemQuantityReqSchema $requestBody = null, array $accept = [])
    {
        $this->id = $id;
        $this->item_id = $itemId;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{item_id}'], [$this->id, $this->item_id], '/admin/order-edits/{id}/items/item/{item_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsUpdateItemQuantityReqSchema) {
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
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}