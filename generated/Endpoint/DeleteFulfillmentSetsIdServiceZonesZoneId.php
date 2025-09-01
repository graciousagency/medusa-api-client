<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class DeleteFulfillmentSetsIdServiceZonesZoneId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $zone_id;
    protected $accept;
    /**
     * Remove a service zone that belongs to a fulfillment set.
     *
     * @param string $id The fulfillment set's ID.
     * @param string $zoneId The service zone's ID.
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, string $zoneId, array $accept = [])
    {
        $this->id = $id;
        $this->zone_id = $zoneId;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{zone_id}'], [$this->id, $this->zone_id], '/admin/fulfillment-sets/{id}/service-zones/{zone_id}');
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminServiceZoneDeleteResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminServiceZoneDeleteResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}