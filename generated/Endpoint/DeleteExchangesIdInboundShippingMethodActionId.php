<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class DeleteExchangesIdInboundShippingMethodActionId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $action_id;
    protected $accept;
    /**
    * Remove the shipping method for returning items in the exchange using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
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
        return str_replace(['{id}', '{action_id}'], [$this->id, $this->action_id], '/admin/exchanges/{id}/inbound/shipping-method/{action_id}');
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}