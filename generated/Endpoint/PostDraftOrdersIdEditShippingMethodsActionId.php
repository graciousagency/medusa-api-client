<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostDraftOrdersIdEditShippingMethodsActionId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $action_id;
    protected $accept;
    /**
    * Update a new shipping method that was added to a draft order edit using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The draft order's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderActionShippingMethod $requestBody 
    * @param array $accept Accept content header application/json|text/plain
    */
    public function __construct(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderActionShippingMethod $requestBody = null, array $accept = [])
    {
        $this->id = $id;
        $this->action_id = $actionId;
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
        return str_replace(['{id}', '{action_id}'], [$this->id, $this->action_id], '/admin/draft-orders/{id}/edit/shipping-methods/{action_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderActionShippingMethod) {
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdInternalServerErrorException
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
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}