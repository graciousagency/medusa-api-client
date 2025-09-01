<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class GetWorkflowsExecutionsWorkflowIdTransactionId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $workflow_id;
    protected $transaction_id;
    protected $accept;
    /**
     * Get the details of the workflow's execution.
     *
     * @param string $workflowId The workflows execution's workflow id.
     * @param string $transactionId The workflows execution's transaction id.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $workflowId, string $transactionId, array $queryParameters = [], array $accept = [])
    {
        $this->workflow_id = $workflowId;
        $this->transaction_id = $transactionId;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{workflow_id}', '{transaction_id}'], [$this->workflow_id, $this->transaction_id], '/admin/workflows-executions/{workflow_id}/{transaction_id}');
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}