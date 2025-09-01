<?php

namespace Gracious\MedusaApiClientBundle\Exception;

class GetWorkflowsExecutionsWorkflowIdTransactionIdNotFoundException extends NotFoundException
{
    /**
     * @var \Gracious\MedusaApiClientBundle\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Gracious\MedusaApiClientBundle\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found Error');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError(): \Gracious\MedusaApiClientBundle\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}