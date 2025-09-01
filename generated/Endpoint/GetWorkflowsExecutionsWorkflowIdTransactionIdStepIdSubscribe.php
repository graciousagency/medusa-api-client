<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribe extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $workflow_id;
    protected $transaction_id;
    protected $step_id;
    protected $accept;
    /**
    * Subscribe to a step in a workflow's execution to receive real-time information about its status and data.
    This route returns an event stream that you can consume using the [EventSource API](https://developer.mozilla.org/en-US/docs/Web/API/EventSource).
    
    *
    * @param string $workflowId The workflows execution's workflow id.
    * @param string $transactionId The workflows execution's transaction id.
    * @param string $stepId The workflows execution's step id.
    * @param array $accept Accept content header text/event-stream|application/json|text/plain
    */
    public function __construct(string $workflowId, string $transactionId, string $stepId, array $accept = [])
    {
        $this->workflow_id = $workflowId;
        $this->transaction_id = $transactionId;
        $this->step_id = $stepId;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{workflow_id}', '{transaction_id}', '{step_id}'], [$this->workflow_id, $this->transaction_id, $this->step_id], '/admin/workflows-executions/{workflow_id}/{transaction_id}/{step_id}/subscribe');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['text/event-stream', 'application/json', 'text/plain']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}