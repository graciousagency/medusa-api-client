<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class GetPromotionsRuleAttributeOptionsRuleType extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $rule_type;
    protected $accept;
    /**
    * Retrieve a list of potential rule attributes for the promotion and application method types specified in the query parameters.
    Only the attributes of the rule type specified in the path parameter are retrieved:
    - If `rule_type` is `rules`, the attributes of the promotion's type are retrieved.
    
    - If `rule_type` is `target-rules`, the target rules' attributes of the application method's type are retrieved.
    
    - If `rule_type` is `buy-rules`, the buy rules' attributes of the application method's type are retrieved.
    
    *
    * @param string $ruleType The rule type.
    * @param array $queryParameters {
    *     @var string $promotion_type The promotion type to retrieve rules for.
    *     @var string $application_method_type The application method type to retrieve rules for.
    * }
    * @param array $accept Accept content header application/json|text/plain
    */
    public function __construct(string $ruleType, array $queryParameters = [], array $accept = [])
    {
        $this->rule_type = $ruleType;
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
        return str_replace(['{rule_type}'], [$this->rule_type], '/admin/promotions/rule-attribute-options/{rule_type}');
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
        $optionsResolver->setDefined(['promotion_type', 'application_method_type']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('promotion_type', ['string']);
        $optionsResolver->addAllowedTypes('application_method_type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleAttributeOptionsRuleTypeGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleAttributeOptionsRuleTypeGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}