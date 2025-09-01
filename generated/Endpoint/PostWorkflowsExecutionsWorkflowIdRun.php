<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostWorkflowsExecutionsWorkflowIdRun extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $workflow_id;
    protected $accept;
    /**
     * Execute a workflow by its ID.
     *
     * @param string $workflowId The workflow's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsRun $requestBody 
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $workflowId, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsRun $requestBody = null, array $accept = [])
    {
        $this->workflow_id = $workflowId;
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
        return str_replace(['{workflow_id}'], [$this->workflow_id], '/admin/workflows-executions/{workflow_id}/run');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsRun) {
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}