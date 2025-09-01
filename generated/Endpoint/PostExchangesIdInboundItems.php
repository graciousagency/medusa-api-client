<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostExchangesIdInboundItems extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Add inbound (or return) items to an exchange. These inbound items will have the action `RETURN_ITEM`.
     *
     * @param string $id The exchange's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchema $requestBody 
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchema $requestBody = null, array $accept = [])
    {
        $this->id = $id;
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
        return str_replace(['{id}'], [$this->id], '/admin/exchanges/{id}/inbound/items');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchema) {
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsInternalServerErrorException
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
            throw new \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}