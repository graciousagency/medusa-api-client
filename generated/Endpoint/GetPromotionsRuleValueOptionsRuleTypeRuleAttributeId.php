<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class GetPromotionsRuleValueOptionsRuleTypeRuleAttributeId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $rule_type;
    protected $rule_attribute_id;
    protected $accept;
    /**
    * Retrieve all potential values for promotion rules and target and buy rules based on the specified rule attribute and type.
    For example, if you provide the ID of the `currency_code` rule attribute, and set `rule_type` to `rules`, a list of currencies are retrieved in label-value pairs.
    
    *
    * @param string $ruleType The rule type.
    * @param string $ruleAttributeId The rule attribute's ID.
    * @param array $queryParameters {
    *     @var float $offset The number of items to skip when retrieving a list.
    *     @var float $limit Limit the number of items returned in the list.
    *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
    *     @var string $promotion_type The promotion type to retrieve rules for.
    *     @var string $application_method_type The application method type to retrieve rules for.
    *     @var bool $with_deleted Whether to include deleted records in the result.
    * }
    * @param array $accept Accept content header application/json|text/plain
    */
    public function __construct(string $ruleType, string $ruleAttributeId, array $queryParameters = [], array $accept = [])
    {
        $this->rule_type = $ruleType;
        $this->rule_attribute_id = $ruleAttributeId;
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
        return str_replace(['{rule_type}', '{rule_attribute_id}'], [$this->rule_type, $this->rule_attribute_id], '/admin/promotions/rule-value-options/{rule_type}/{rule_attribute_id}');
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
        $optionsResolver->setDefined(['offset', 'limit', 'order', 'promotion_type', 'application_method_type', 'with_deleted']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('offset', ['float']);
        $optionsResolver->addAllowedTypes('limit', ['float']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        $optionsResolver->addAllowedTypes('promotion_type', ['string']);
        $optionsResolver->addAllowedTypes('application_method_type', ['string']);
        $optionsResolver->addAllowedTypes('with_deleted', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleValueOptionsRuleTypeRuleAttributeIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleValueOptionsRuleTypeRuleAttributeIdGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}