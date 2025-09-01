<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class PostInvitesAccept extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * Accept an invite and create a new user.
    Since the user isn't created yet, the JWT token used in the authorization header is retrieved from the `/auth/user/emailpass/register` API route (or a provider other than `emailpass`). The user can then authenticate using the `/auth/user/emailpass` API route.
    
    *
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminInviteAccept $requestBody 
    * @param array $accept Accept content header application/json|text/plain
    */
    public function __construct(?\Gracious\MedusaApiClientBundle\Model\AdminInviteAccept $requestBody = null, array $accept = [])
    {
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
        return '/admin/invites/accept';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Gracious\MedusaApiClientBundle\Model\AdminInviteAccept) {
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['cookie_auth', 'jwt_token'];
    }
}