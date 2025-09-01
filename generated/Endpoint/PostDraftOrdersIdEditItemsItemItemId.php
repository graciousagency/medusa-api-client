<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostDraftOrdersIdEditItemsItemItemId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $item_id;
    protected $accept;
    /**
     * Update an existing item in a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param string $itemId The item's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem $requestBody 
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, string $itemId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem $requestBody = null, array $accept = [])
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
        return str_replace(['{id}', '{item_id}'], [$this->id, $this->item_id], '/admin/draft-orders/{id}/edit/items/item/{item_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem) {
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}