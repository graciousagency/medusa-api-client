<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class DeleteDraftOrdersIdEditShippingMethodsActionId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $action_id;
    protected $accept;
    /**
    * Remove a shipping method that was added to a draft order edit using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The draft order's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param array $accept Accept content header application/json|text/plain
    */
    public function __construct(string $id, string $actionId, array $accept = [])
    {
        $this->id = $id;
        $this->action_id = $actionId;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{action_id}'], [$this->id, $this->action_id], '/admin/draft-orders/{id}/edit/shipping-methods/{action_id}');
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
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdInternalServerErrorException
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
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}