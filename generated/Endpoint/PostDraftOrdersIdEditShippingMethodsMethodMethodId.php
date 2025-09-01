<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostDraftOrdersIdEditShippingMethodsMethodMethodId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $method_id;
    protected $accept;
    /**
     * Update an existing shipping method in a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param string $methodId The ID of the shipping method.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingMethod $requestBody 
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, string $methodId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingMethod $requestBody = null, array $accept = [])
    {
        $this->id = $id;
        $this->method_id = $methodId;
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
        return str_replace(['{id}', '{method_id}'], [$this->id, $this->method_id], '/admin/draft-orders/{id}/edit/shipping-methods/method/{method_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingMethod) {
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdInternalServerErrorException
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
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}