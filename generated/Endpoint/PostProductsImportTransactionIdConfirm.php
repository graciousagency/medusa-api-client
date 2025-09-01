<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostProductsImportTransactionIdConfirm extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $transaction_id;
    protected $accept;
    /**
     * Confirm that a created product import should start importing the products into Medusa.
     *
     * @param string $transactionId The ID of the transaction returned when the product import was created.
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $transactionId, array $accept = [])
    {
        $this->transaction_id = $transactionId;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{transaction_id}'], [$this->transaction_id], '/admin/products/import/{transaction_id}/confirm');
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}