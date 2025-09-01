<?php

namespace Gracious\MedusaApiClientBundle\Endpoint;

class DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemId extends \Gracious\MedusaApiClientBundle\Runtime\Client\BaseEndpoint implements \Gracious\MedusaApiClientBundle\Runtime\Client\Endpoint
{
    protected $id;
    protected $variant_id;
    protected $inventory_item_id;
    protected $accept;
    /**
     * Remove the association between an inventory item and its product variant.
     *
     * @param string $id The product's ID.
     * @param string $variantId The products variant's ID.
     * @param string $inventoryItemId The inventory item's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, string $variantId, string $inventoryItemId, array $queryParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->variant_id = $variantId;
        $this->inventory_item_id = $inventoryItemId;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Gracious\MedusaApiClientBundle\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{variant_id}', '{inventory_item_id}'], [$this->id, $this->variant_id, $this->inventory_item_id], '/admin/products/{id}/variants/{variant_id}/inventory-items/{inventory_item_id}');
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
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkDeleteResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkDeleteResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdBadRequestException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdNotFoundException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdConflictException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdUnprocessableEntityException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdInternalServerErrorException($serializer->deserialize($body, 'Gracious\MedusaApiClientBundle\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_token', 'cookie_auth', 'jwt_token'];
    }
}