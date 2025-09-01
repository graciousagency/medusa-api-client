<?php

namespace Gracious\MedusaApiClientBundle;

class Client extends \Gracious\MedusaApiClientBundle\Runtime\Client\Client
{
    /**
     * Retrieve a list of API keys. The API keys can be filtered by fields such as `id`. The API keys can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q A search term to search the API keys' searchable properties.
     *     @var string $id 
     *     @var string $title 
     *     @var string $token 
     *     @var string $type Filter by the API key's type.
     *     @var string $created_at Filter by the API key's creation date.
     *     @var string $updated_at Filter by the API key's update date.
     *     @var string $deleted_at Filter by the API key's deletion date.
     *     @var string $revoked_at Filter by the API key's revoke date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminApiKeysGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getApiKeys(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetApiKeys($queryParameters, $accept), $fetch);
    }
    /**
    * Create a secret or publishable API key.
    A secret API key is used for admin authentication.
    
    A publishable API key is used by client applications to set the scope of the request.
    
    *
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateApiKey $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminApiKeyResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postApiKeys(?\Gracious\MedusaApiClientBundle\Model\AdminCreateApiKey $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostApiKeys($requestBody, $accept), $fetch);
    }
    /**
     * Delete a publishable or secret API key.
     *
     * @param string $id The API key's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteApiKeysIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteApiKeysIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteApiKeysIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteApiKeysIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteApiKeysIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminApiKeysIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteApiKeysId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteApiKeysId($id, $accept), $fetch);
    }
    /**
     * Retrieve an API key by its ID. You can expand the API key's relations or select the fields that should be returned using the query parameters.
     *
     * @param string $id The API key's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetApiKeysIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminApiKeyResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getApiKeysId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetApiKeysId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update an API key's details.
     *
     * @param string $id The API key's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateApiKey $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminApiKeyResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postApiKeysId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateApiKey $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostApiKeysId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Revokes an API key. If the API key is a secret, it can't be used for authentication anymore. If it's publishable, it can't be used by client applications.
     *
     * @param string $id The API key's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminRevokeApiKey $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdRevokeBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdRevokeNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdRevokeConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdRevokeUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdRevokeInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminApiKeyResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postApiKeysIdRevoke(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminRevokeApiKey $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostApiKeysIdRevoke($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the sales channels of a publishable API key, either to associate them or remove them from the API key.
     *
     * @param string $id The API key's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminApiKeysIdSalesChannelsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdSalesChannelsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdSalesChannelsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdSalesChannelsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdSalesChannelsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostApiKeysIdSalesChannelsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminApiKeyResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postApiKeysIdSalesChannels(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminApiKeysIdSalesChannelsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostApiKeysIdSalesChannels($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of campaigns. The campaigns can be filtered by fields such as `id`. The campaigns can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaigns(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCampaigns($queryParameters, $accept), $fetch);
    }
    /**
     * Create a campaign.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCampaigns(?\Gracious\MedusaApiClientBundle\Model\AdminCampaignsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCampaigns($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a campaign by its ID. This doesn't delete promotions that belong to this campaign.
     *
     * @param string $id The campaign's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCampaignsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCampaignsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCampaignsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCampaignsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCampaignsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCampaignsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteCampaignsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a campaign by its ID. You can expand the campaign's relations or select the fields that should be returned using the query parameters.
     *
     * @param string $id The campaign's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCampaignsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaignsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCampaignsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a campaign's details.
     *
     * @param string $id The campaign's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCampaignsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCampaignsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the promotions of a campaign, either by adding them or removing them from the campaign.
     *
     * @param string $id The campaign's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPromotionsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdPromotionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdPromotionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdPromotionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdPromotionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCampaignsIdPromotionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCampaignResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCampaignsIdPromotions(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPromotionsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCampaignsIdPromotions($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of claims. The claims can be filtered by fields such as `id`. The claims can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $deleted_at The claim's deleted at.
     *     @var string $q The claim's q.
     *     @var string $id 
     *     @var string $order_id 
     *     @var string $status 
     *     @var string $created_at The claim's created at.
     *     @var string $updated_at The claim's updated at.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getClaims(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetClaims($queryParameters, $accept), $fetch);
    }
    /**
     * Create a claim. The claim is still in the request state, and the changes are only applied on the order once the claim is confirmed.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderClaimsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postClaims(?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderClaimsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaims($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a claim by its ID. You can expand the claim's relations or select the fields that should be returned using the query parameters.
     *
     * @param string $id The claim's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetClaimsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getClaimsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetClaimsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel a claim and its associated return.
     *
     * @param string $id The claim's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostCancelClaimReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdCancelBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdCancelNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdCancelConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdCancelUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdCancelInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postClaimsIdCancel(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostCancelClaimReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdCancel($id, $requestBody, $accept), $fetch);
    }
    /**
     * Add order items to a claim as claim items. These claim items will have the action `WRITE_OFF_ITEM`.
     *
     * @param string $id The claim's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostClaimItemsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postClaimsIdClaimItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostClaimItemsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdClaimItems($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove an order item from a claim by the ID of the item's `WRITE_OFF_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the order item's `WRITE_OFF_ITEM` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdClaimItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdClaimItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdClaimItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdClaimItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdClaimItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteClaimsIdClaimItemsActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteClaimsIdClaimItemsActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update an order item in a claim by the ID of the item's `WRITE_OFF_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the order item's `WRITE_OFF_ITEM` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsItemsActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdClaimItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postClaimsIdClaimItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsItemsActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdClaimItemsActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Add inbound (or return) items to a claim. These inbound items will have a `RETURN_ITEM` action.
     *
     * @param string $id The claim's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postClaimsIdInboundItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdInboundItems($id, $requestBody, $accept), $fetch);
    }
    /**
    * Remove an inbound (or return) item from a claim using the `ID` of the item's `RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the return item's `RETURN_ITEM` action.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteClaimsIdInboundItemsActionId(string $id, string $actionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteClaimsIdInboundItemsActionId($id, $actionId, $accept), $fetch);
    }
    /**
    * Update an inbound (or return) item of a claim using the `ID` of the item's `RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the return item's `RETURN_ITEM` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsActionReqSchema $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postClaimsIdInboundItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsActionReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdInboundItemsActionId($id, $actionId, $requestBody, $accept), $fetch);
    }
    /**
     * Add an inbound (or return) shipping method to a claim. The inbound shipping method will have a `SHIPPING_ADD` action.
     *
     * @param string $id The claim's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postClaimsIdInboundShippingMethod(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdInboundShippingMethod($id, $requestBody, $accept), $fetch);
    }
    /**
    * Remove the shipping method for returning items in the claim using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdInboundShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteClaimsIdInboundShippingMethodActionId(string $id, string $actionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteClaimsIdInboundShippingMethodActionId($id, $actionId, $accept), $fetch);
    }
    /**
    * Update the shipping method for returning items in the claim using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdInboundShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postClaimsIdInboundShippingMethodActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdInboundShippingMethodActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Add outbound (or new) items to a claim. These outbound items will have an `ITEM_ADD` action.
     *
     * @param string $id The claim's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsAddItemsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postClaimsIdOutboundItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsAddItemsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdOutboundItems($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove an outbound (or new) item from a claim using the `ID` of the item's `ITEM_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the new claim item's `ITEM_ADD` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteClaimsIdOutboundItemsActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteClaimsIdOutboundItemsActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update an outbound (or new) item of a claim using the `ID` of the item's `ITEM_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the new claim item's `ITEM_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsItemsActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postClaimsIdOutboundItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsItemsActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdOutboundItemsActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Add an outbound shipping method to a claim. The outbound shipping method will have a `SHIPPING_ADD` action.
     *
     * @param string $id The claim's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postClaimsIdOutboundShippingMethod(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdOutboundShippingMethod($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove the shipping method for delivering outbound items in the claim using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdOutboundShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteClaimsIdOutboundShippingMethodActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteClaimsIdOutboundShippingMethodActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update the shipping method for delivering outbound items in a claim using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The claim's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdOutboundShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postClaimsIdOutboundShippingMethodActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdOutboundShippingMethodActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel a requested claim.
     *
     * @param string $id The claim's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdRequestBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdRequestNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdRequestConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdRequestUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteClaimsIdRequestInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteClaimsIdRequest(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteClaimsIdRequest($id, $accept), $fetch);
    }
    /**
     * Confirm a claim request, applying its changes on the associated order.
     *
     * @param string $id The claim's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdRequestBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdRequestNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdRequestConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdRequestUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostClaimsIdRequestInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminClaimRequestResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postClaimsIdRequest(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostClaimsIdRequest($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of collections. The collections can be filtered by fields such as `id`. The collections can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $deleted_at Filter by the collection's deletion date.
     *     @var string $q Search term to filter the collection's searchable properties by.
     *     @var string $id 
     *     @var string $handle 
     *     @var string $title 
     *     @var string $created_at Filter by the collection's creation date.
     *     @var string $updated_at Filter by the collection's update date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCollections(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCollections($queryParameters, $accept), $fetch);
    }
    /**
     * Create a collection.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCollections(?\Gracious\MedusaApiClientBundle\Model\AdminCollectionsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCollections($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a product collection.
     *
     * @param string $id The collection's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCollectionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCollectionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCollectionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCollectionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCollectionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCollectionsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteCollectionsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a collection by its ID. You can expand the collection's relations or select the fields that should be returned using the query parameters.
     *
     * @param string $id The collection's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCollectionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCollectionsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCollectionsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a collection's details.
     *
     * @param string $id The collection's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionsIdPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCollectionsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCollectionsIdPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCollectionsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the products of a collection by adding or removing them from the collection.
     *
     * @param string $id The collection's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionsIdProductsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdProductsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdProductsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdProductsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdProductsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCollectionsIdProductsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCollectionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCollectionsIdProducts(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCollectionsIdProductsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCollectionsIdProducts($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of currencies. The currencies can be filtered by fields such as `id`. The currencies can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q The search term to filter the currency's searchable properties by.
     *     @var string $code 
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCurrencyListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrencies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCurrencies($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a currency by its code. You can expand the currency's relations or select the fields that should be returned using the query parameters.
     *
     * @param string $code The currency's code.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesCodeBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesCodeNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesCodeConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesCodeUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCurrenciesCodeInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCurrencyResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrenciesCode(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCurrenciesCode($code, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of customer groups. The customer groups can be filtered by fields such as `id`. The customer groups can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the customer group's searchable properties.
     *     @var string $id 
     *     @var string $name 
     *     @var string $customers 
     *     @var string $created_by 
     *     @var string $created_at Filter the customer group by its creation date.
     *     @var string $updated_at Filter the customer groups by their update date.
     *     @var string $deleted_at Filter the customer groups by their deletion date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerGroups(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCustomerGroups($queryParameters, $accept), $fetch);
    }
    /**
     * Create a customer group.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateCustomerGroup $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomerGroups(?\Gracious\MedusaApiClientBundle\Model\AdminCreateCustomerGroup $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCustomerGroups($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a customer group. Customers in the group aren't deleted.
     *
     * @param string $id The customer group's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomerGroupsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomerGroupsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomerGroupsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomerGroupsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomerGroupsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerGroupsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteCustomerGroupsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a customer group by its ID. You can expand the customer group's relations or select the fields that should be returned.
     *
     * @param string $id The customer group's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomerGroupsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerGroupsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCustomerGroupsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a customer group's details.
     *
     * @param string $id The customer group's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateCustomerGroup $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomerGroupsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateCustomerGroup $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCustomerGroupsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the customers of a group to add or remove them from the group.
     *
     * @param string $id The customer group's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsIdCustomersPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdCustomersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdCustomersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdCustomersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdCustomersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomerGroupsIdCustomersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomerGroupsIdCustomers(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsIdCustomersPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCustomerGroupsIdCustomers($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of customers. The customers can be filtered by fields such as `id`. The customers can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $groups 
     *     @var string $q Search term to filter the customer's searchable properties by.
     *     @var string $id 
     *     @var string $email 
     *     @var string $company_name 
     *     @var string $first_name 
     *     @var string $last_name 
     *     @var string $created_by 
     *     @var string $created_at Filter by the customer's creation date.
     *     @var string $updated_at Filter by a customer's update date.
     *     @var string $deleted_at Filter a customer by their deletion date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $has_account Filter by whether the customer is registered.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCustomers($queryParameters, $accept), $fetch);
    }
    /**
     * Create a customer.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomers(?\Gracious\MedusaApiClientBundle\Model\AdminCustomersPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCustomers($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a customer.
     *
     * @param string $id The customer's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomersId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteCustomersId($id, $accept), $fetch);
    }
    /**
     * Retrieve a customer by its ID. You can expand the customer's relations or select the fields that should be returned.
     *
     * @param string $id The customer's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCustomersId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a customer's details.
     *
     * @param string $id The customer's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomersId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCustomersId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of addresses in a customer. The addresses can be filtered by fields like `query`. The addresses can also be paginated.
     *
     * @param string $id The customer's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to apply on the address's searchable properties.
     *     @var string $company 
     *     @var string $city 
     *     @var string $country_code 
     *     @var string $province 
     *     @var string $postal_code 
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersIdAddresses(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCustomersIdAddresses($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Add an address to a customer.
     *
     * @param string $id The customer's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomersIdAddresses(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCustomersIdAddresses($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Remove a customer's address.
     *
     * @param string $id The customer's ID.
     * @param string $addressId The customer address's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdAddressesAddressIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdAddressesAddressIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdAddressesAddressIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdAddressesAddressIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteCustomersIdAddressesAddressIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesAddressIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomersIdAddressesAddressId(string $id, string $addressId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteCustomersIdAddressesAddressId($id, $addressId, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of a customer's addresses. The addresses can be filtered by fields like `company`. The addresses can also be paginated.
     *
     * @param string $id The customer's ID.
     * @param string $addressId The customer's address id.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesAddressIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesAddressIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesAddressIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesAddressIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetCustomersIdAddressesAddressIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerAddressResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomersIdAddressesAddressId(string $id, string $addressId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetCustomersIdAddressesAddressId($id, $addressId, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a customer address's details.
     *
     * @param string $id The customer's ID.
     * @param string $addressId The customer's address id.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesAddressIdPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesAddressIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesAddressIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesAddressIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesAddressIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdAddressesAddressIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postCustomersIdAddressesAddressId(string $id, string $addressId, ?\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesAddressIdPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCustomersIdAddressesAddressId($id, $addressId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Manage the customer groups of a customer, adding or removing the customer from those groups.
    *
    * @param string $id The customer's ID.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdCustomerGroupsPostBody $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in 
    the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdCustomerGroupsBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdCustomerGroupsNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdCustomerGroupsConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdCustomerGroupsUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostCustomersIdCustomerGroupsInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminCustomerResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postCustomersIdCustomerGroups(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCustomersIdCustomerGroupsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostCustomersIdCustomerGroups($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of draft orders. The draft orders can be filtered by fields such as `id`. The draft orders can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var string $status 
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var array $sales_channel_id Filter by the associated sales channels to retrieve its draft orders.
     *     @var string $region_id Filter by region IDs to retrieve their associated draft orders.
     *     @var string $q Search term to filter the order's searchable properties.
     *     @var string $created_at Filter by the draft order's creation date.
     *     @var string $updated_at Filter by the draft order's update date.
     *     @var string $customer_id 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminDraftOrderListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDraftOrders(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetDraftOrders($queryParameters, $accept), $fetch);
    }
    /**
     * Create a draft order. This creates an order with the `is_draft_order` property enabled. You can later convert the draft order to an order.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminDraftOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrders(?\Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrders($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a draft order.
     *
     * @param string $id The draft order's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDraftOrdersId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteDraftOrdersId($id, $accept), $fetch);
    }
    /**
    * Retrieve a draft order by its ID. You can expand the draft order's relations or select the fields that should be returned using the query parameters.
    *
    * @param string $id The draft order's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetDraftOrdersIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminDraftOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getDraftOrdersId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetDraftOrdersId($id, $queryParameters, $accept), $fetch);
    }
    /**
    * Update a draft order's details. This doesn't include updating the draft order's items, shipping methods, or promotions. To update those, you need to create an edit that you can later request or confirm.
    *
    * @param string $id The draft order's ID.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrder $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminDraftOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postDraftOrdersId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrder $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Convert a draft order to an order. This will finalize the draft order and create a new order with the same details.
    *
    * @param string $id The draft order's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdConvertToOrderBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdConvertToOrderNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdConvertToOrderConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdConvertToOrderUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdConvertToOrderInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postDraftOrdersIdConvertToOrder(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdConvertToOrder($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel an unconfirmed edit on a draft order.
     *
     * @param string $id The draft order's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDraftOrdersIdEdit(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteDraftOrdersIdEdit($id, $accept), $fetch);
    }
    /**
     * Create an edit on a draft order. This will allow you to make changes to the draft order's items, shipping methods, or promotions. Once you've made the necessar changes, you can later either request the edit (which requires a confirmation from the customer), or force-confirm the edit.
     *
     * @param string $id The draft order's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrdersIdEdit(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEdit($id, $accept), $fetch);
    }
    /**
     * Confirm an edit on a draft order. This will apply the changes made to the draft order.
     *
     * @param string $id The draft order's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditConfirmBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditConfirmNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditConfirmConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditConfirmUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditConfirmInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrdersIdEditConfirm(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditConfirm($id, $accept), $fetch);
    }
    /**
     * Add an item to a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderItems $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrdersIdEditItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderItems $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditItems($id, $requestBody, $accept), $fetch);
    }
    /**
     * Update an existing item in a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param string $itemId The item's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsItemItemIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrdersIdEditItemsItemItemId(string $id, string $itemId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditItemsItemItemId($id, $itemId, $requestBody, $accept), $fetch);
    }
    /**
    * Remove an order item from a draft order edit by the ID of the item's `ITEM_ADD` or `ITEM_UPDATE` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The draft order's ID.
    * @param string $actionId The ID of the order item's `ITEM_ADD` or `ITEM_UPDATE` action.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditItemsActionIdInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function deleteDraftOrdersIdEditItemsActionId(string $id, string $actionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteDraftOrdersIdEditItemsActionId($id, $actionId, $accept), $fetch);
    }
    /**
    * Update a new item that was added to a draft order edit by the ID of the item's `ITEM_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The draft order's ID.
    * @param string $actionId The ID of the item's `ITEM_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditItemsActionIdInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postDraftOrdersIdEditItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditItemsActionId($id, $actionId, $requestBody, $accept), $fetch);
    }
    /**
     * Remove specified promotions from a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminRemoveDraftOrderPromotions $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditPromotionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditPromotionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditPromotionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditPromotionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditPromotionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDraftOrdersIdEditPromotions(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminRemoveDraftOrderPromotions $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteDraftOrdersIdEditPromotions($id, $requestBody, $accept), $fetch);
    }
    /**
     * Add promotions to a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderPromotions $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditPromotionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditPromotionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditPromotionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditPromotionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditPromotionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrdersIdEditPromotions(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderPromotions $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditPromotions($id, $requestBody, $accept), $fetch);
    }
    /**
     * Change the status of a draft order's edit to be requested. Later, the edit can be confirmed or canceled.
     *
     * @param string $id The draft order's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditRequestBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditRequestNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditRequestConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditRequestUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditRequestInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrdersIdEditRequest(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditRequest($id, $accept), $fetch);
    }
    /**
     * Add a shipping method to a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderShippingMethod $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrdersIdEditShippingMethods(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderShippingMethod $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditShippingMethods($id, $requestBody, $accept), $fetch);
    }
    /**
     * Remove an existing shipping method from a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param string $methodId The shipping method's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsMethodMethodIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsMethodMethodIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsMethodMethodIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsMethodMethodIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsMethodMethodIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDraftOrdersIdEditShippingMethodsMethodMethodId(string $id, string $methodId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteDraftOrdersIdEditShippingMethodsMethodMethodId($id, $methodId, $accept), $fetch);
    }
    /**
     * Update an existing shipping method in a draft order edit.
     *
     * @param string $id The draft order's ID.
     * @param string $methodId The ID of the shipping method.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingMethod $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsMethodMethodIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDraftOrdersIdEditShippingMethodsMethodMethodId(string $id, string $methodId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingMethod $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditShippingMethodsMethodMethodId($id, $methodId, $requestBody, $accept), $fetch);
    }
    /**
    * Remove a shipping method that was added to a draft order edit using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The draft order's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteDraftOrdersIdEditShippingMethodsActionIdInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function deleteDraftOrdersIdEditShippingMethodsActionId(string $id, string $actionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteDraftOrdersIdEditShippingMethodsActionId($id, $actionId, $accept), $fetch);
    }
    /**
    * Update a new shipping method that was added to a draft order edit using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The draft order's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderActionShippingMethod $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostDraftOrdersIdEditShippingMethodsActionIdInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postDraftOrdersIdEditShippingMethodsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderActionShippingMethod $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostDraftOrdersIdEditShippingMethodsActionId($id, $actionId, $requestBody, $accept), $fetch);
    }
    /**
     * Retrieve a list of exchanges. The exchanges can be filtered by fields such as `id`. The exchanges can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $deleted_at Filter by an exchange's deletion date.
     *     @var string $id 
     *     @var string $order_id 
     *     @var string $status 
     *     @var string $created_at Filter by the exchange's creation date.
     *     @var string $updated_at Filter by the exchange's update date.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getExchanges(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetExchanges($queryParameters, $accept), $fetch);
    }
    /**
     * Create an exchange request. Its changes aren't applied on the order until the exchange is confirmed.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderExchangesReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postExchanges(?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderExchangesReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchanges($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve an exchange by its ID. You can expand the exchange's relations or select the fields that should be returned using query parameters.
     *
     * @param string $id The exchange's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetExchangesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getExchangesId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetExchangesId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel an exchange and its associated return.
     *
     * @param string $id The exchange's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostCancelExchangeReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdCancelBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdCancelNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdCancelConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdCancelUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdCancelInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postExchangesIdCancel(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostCancelExchangeReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdCancel($id, $requestBody, $accept), $fetch);
    }
    /**
     * Add inbound (or return) items to an exchange. These inbound items will have the action `RETURN_ITEM`.
     *
     * @param string $id The exchange's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postExchangesIdInboundItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdInboundItems($id, $requestBody, $accept), $fetch);
    }
    /**
    * Remove an inbound (or return) item from an exchange using the `ID` of the item's `RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
    * @param string $actionId The ID of the return item's `RETURN_ITEM` action.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteExchangesIdInboundItemsActionId(string $id, string $actionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteExchangesIdInboundItemsActionId($id, $actionId, $accept), $fetch);
    }
    /**
    * Update an inbound (or return) item from an exchange using the `ID` of the item's `RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
    * @param string $actionId The ID of the return item's `RETURN_ITEM` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesRequestItemsReturnActionReqSchema $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postExchangesIdInboundItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesRequestItemsReturnActionReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdInboundItemsActionId($id, $actionId, $requestBody, $accept), $fetch);
    }
    /**
     * Add an inbound (or return) shipping method to an exchange. The inbound shipping method will have a `SHIPPING_ADD` action.
     *
     * @param string $id The exchange's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postExchangesIdInboundShippingMethod(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdInboundShippingMethod($id, $requestBody, $accept), $fetch);
    }
    /**
    * Remove the shipping method for returning items in the exchange using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdInboundShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteExchangesIdInboundShippingMethodActionId(string $id, string $actionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteExchangesIdInboundShippingMethodActionId($id, $actionId, $accept), $fetch);
    }
    /**
    * Update the shipping method for returning items in the exchange using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdInboundShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postExchangesIdInboundShippingMethodActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdInboundShippingMethodActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Add outbound (or new) items to an exchange. These outbound items will have the action `ITEM_ADD`.
     *
     * @param string $id The exchange's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postExchangesIdOutboundItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdOutboundItems($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove an outbound (or new) item from an exchange using the `ID` of the item's `ITEM_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
    * @param string $actionId The ID of the new exchange item's `ITEM_ADD` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteExchangesIdOutboundItemsActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteExchangesIdOutboundItemsActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update an outbound (or new) item from an exchange using the `ID` of the item's `ITEM_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
    * @param string $actionId The ID of the new exchange item's `ITEM_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesItemsActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postExchangesIdOutboundItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesItemsActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdOutboundItemsActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Add an outbound shipping method to an exchange. The outbound shipping method will have a `SHIPPING_ADD` action.
     *
     * @param string $id The exchange's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postExchangesIdOutboundShippingMethod(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdOutboundShippingMethod($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove the shipping method for delivering outbound items in the exchange using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdOutboundShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteExchangesIdOutboundShippingMethodActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteExchangesIdOutboundShippingMethodActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update the shipping method for delivering outbound items in the exchange using the `ID` of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The exchange's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdOutboundShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postExchangesIdOutboundShippingMethodActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdOutboundShippingMethodActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel a requested exchange.
     *
     * @param string $id The exchange's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdRequestBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdRequestNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdRequestConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdRequestUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteExchangesIdRequestInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteExchangesIdRequest(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteExchangesIdRequest($id, $accept), $fetch);
    }
    /**
     * Confirm an exchange request, applying its changes on the associated order.
     *
     * @param string $id The exchange's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdRequestBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdRequestNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdRequestConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdRequestUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostExchangesIdRequestInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExchangeRequestResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postExchangesIdRequest(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostExchangesIdRequest($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of fulfillment providers. The fulfillment providers can be filtered by fields such as `id`. The fulfillment providers can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var bool $is_enabled Filter by whether the fulfillment provider is enabled.
     *     @var string $q Search term to filter a fulfillment provider's searchable properties.
     *     @var string $stock_location_id 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProviderListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getFulfillmentProviders(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetFulfillmentProviders($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve the list of fulfillment options of a fulfillment provider. These options may be retrieved from an integrated third-party service.
     *
     * @param string $id The fulfillment provider's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersIdOptionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersIdOptionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersIdOptionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersIdOptionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentProvidersIdOptionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProviderOptionsListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getFulfillmentProvidersIdOptions(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetFulfillmentProvidersIdOptions($id, $accept), $fetch);
    }
    /**
     * Delete a fulfillment set.
     *
     * @param string $id The fulfillment set's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSetDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFulfillmentSetsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteFulfillmentSetsId($id, $accept), $fetch);
    }
    /**
     * Add a service zone to a fulfillment set.
     *
     * @param string $id The fulfillment set's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentSetServiceZones $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSetResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postFulfillmentSetsIdServiceZones(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentSetServiceZones $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostFulfillmentSetsIdServiceZones($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Remove a service zone that belongs to a fulfillment set.
     *
     * @param string $id The fulfillment set's ID.
     * @param string $zoneId The service zone's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteFulfillmentSetsIdServiceZonesZoneIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminServiceZoneDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFulfillmentSetsIdServiceZonesZoneId(string $id, string $zoneId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteFulfillmentSetsIdServiceZonesZoneId($id, $zoneId, $accept), $fetch);
    }
    /**
     * Retrieve a service zone that belongs to a fulfillment set. be paginated.
     *
     * @param string $id The fulfillment set's ID.
     * @param string $zoneId The service zone's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentSetsIdServiceZonesZoneIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentSetsIdServiceZonesZoneIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentSetsIdServiceZonesZoneIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentSetsIdServiceZonesZoneIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetFulfillmentSetsIdServiceZonesZoneIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminServiceZoneResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getFulfillmentSetsIdServiceZonesZoneId(string $id, string $zoneId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetFulfillmentSetsIdServiceZonesZoneId($id, $zoneId, $queryParameters, $accept), $fetch);
    }
    /**
     * Update the details of a service zone in a fulfillment set.
     *
     * @param string $id The fulfillment set's ID.
     * @param string $zoneId The service zone's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateFulfillmentSetServiceZones $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesZoneIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesZoneIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesZoneIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesZoneIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentSetsIdServiceZonesZoneIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSetResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postFulfillmentSetsIdServiceZonesZoneId(string $id, string $zoneId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateFulfillmentSetServiceZones $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostFulfillmentSetsIdServiceZonesZoneId($id, $zoneId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Create a fulfillment for an order, return, exchange, and more.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillment $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFulfillmentResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postFulfillments(?\Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillment $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostFulfillments($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Cancel a fulfillment. The fulfillment can't be shipped or delivered.
    
    To cancel the fulfillment, the `cancelFulfillment` method of the associated fulfillment provider is used.
    
    *
    * @param string $id The fulfillment's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdCancelBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdCancelNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdCancelConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdCancelUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdCancelInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFulfillmentResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postFulfillmentsIdCancel(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostFulfillmentsIdCancel($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Create a shipment for a fulfillment. The fulfillment must not be shipped or canceled.
     *
     * @param string $id The fulfillment's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateShipment $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdShipmentBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdShipmentNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdShipmentConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdShipmentUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostFulfillmentsIdShipmentInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFulfillmentResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postFulfillmentsIdShipment(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateShipment $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostFulfillmentsIdShipment($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of gift cards. The gift cards can be filtered by fields such as `id`. The gift cards can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $id 
     *     @var string $customer_id 
     *     @var string $created_at Filter by a gift card's creation date.
     *     @var string $updated_at Filter by a gift card's update date.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $fields Comma-separated fields that should be included in the returned data. If a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. Without prefix it will replace the entire default fields.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminGiftCardsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getGiftCards(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetGiftCards($queryParameters, $accept), $fetch);
    }
    /**
    * Create a gift card.
    *
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateGiftCardParams $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminGiftCardResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postGiftCards(?\Gracious\MedusaApiClientBundle\Model\AdminCreateGiftCardParams $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostGiftCards($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Retrieve a gift card by its ID. You can expand the gift card's relations or select the fields that should be returned.
    *
    * @param string $id The gift card's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminGiftCardResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getGiftCardsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetGiftCardsId($id, $queryParameters, $accept), $fetch);
    }
    /**
    * Update a gift card's details.
    *
    * @param string $id The gift card's ID.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateGiftCardParams $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminGiftCardResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postGiftCardsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateGiftCardParams $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostGiftCardsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Retrieve the list of orders that a gift card was used in.
    *
    * @param string $id The gift card's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdOrdersBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdOrdersNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdOrdersConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdOrdersUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetGiftCardsIdOrdersInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getGiftCardsIdOrders(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetGiftCardsIdOrders($id, $queryParameters, $accept), $fetch);
    }
    /**
    * Redeem a gift card and add it to the customer's store credit account.
    *
    * @param string $id The gift card's ID.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminRedeemGiftCard $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdRedeemBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdRedeemNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdRedeemConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdRedeemUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostGiftCardsIdRedeemInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminGiftCardResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postGiftCardsIdRedeem(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminRedeemGiftCard $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostGiftCardsIdRedeem($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of inventory items. The inventory items can be filtered by fields such as `id`. The inventory items can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q The inventory item's q.
     *     @var string $id 
     *     @var string $sku 
     *     @var string $origin_country 
     *     @var string $mid_code 
     *     @var string $hs_code 
     *     @var string $material 
     *     @var bool $requires_shipping The inventory item's requires shipping.
     *     @var string $weight Filter the inventory item's weight.
     *     @var string $length Filter the inventory item's length.
     *     @var string $height Filter by the inventory item's height.
     *     @var string $width Filter by the inventory item's width.
     *     @var string $location_levels Filter by the inventory item's associated location IDs.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryItems(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetInventoryItems($queryParameters, $accept), $fetch);
    }
    /**
     * Create an inventory item.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateInventoryItem $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryItems(?\Gracious\MedusaApiClientBundle\Model\AdminCreateInventoryItem $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInventoryItems($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage inventory levels to create, update, or delete them.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevels $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsLocationLevelsBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsLocationLevelsBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsLocationLevelsBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsLocationLevelsBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsLocationLevelsBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevelsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryItemsLocationLevelsBatch(?\Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevels $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInventoryItemsLocationLevelsBatch($requestBody, $accept), $fetch);
    }
    /**
     * Delete an inventory item.
     *
     * @param string $id The inventory item's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInventoryItemsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteInventoryItemsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a inventory item by its ID. You can expand the inventory item's relations or select the fields that should be returned.
     *
     * @param string $id The inventory item's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryItemsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetInventoryItemsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update an inventory item's details.
     *
     * @param string $id The inventory item's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryItem $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryItemsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryItem $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInventoryItemsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of inventory levels associated with an inventory item. The inventory levels can be filtered by fields like `location_id`. The inventory levels can also be paginated.
     *
     * @param string $id The inventory item's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdLocationLevelsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdLocationLevelsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdLocationLevelsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdLocationLevelsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInventoryItemsIdLocationLevelsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdLocationLevelsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getInventoryItemsIdLocationLevels(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetInventoryItemsIdLocationLevels($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Create an inventory level for an inventory item.
     *
     * @param string $id The inventory item's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateInventoryLocationLevel $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryItemsIdLocationLevels(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateInventoryLocationLevel $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInventoryItemsIdLocationLevels($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the inventory levels of an inventory item to create or delete them.
     *
     * @param string $id The inventory item's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevel $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsBatchInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryItemsIdLocationLevelsBatch(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevel $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInventoryItemsIdLocationLevelsBatch($id, $requestBody, $accept), $fetch);
    }
    /**
    * Remove the inventory level of an inventory item.
    
    If the inventory level has reserved quantity greater than `0`, an error is thrown.
    
    *
    * @param string $id The inventory item's ID.
    * @param string $locationId The inventory item's location id.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdLocationLevelsLocationIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdLocationLevelsLocationIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdLocationLevelsLocationIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdLocationLevelsLocationIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInventoryItemsIdLocationLevelsLocationIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdLocationLevelsLocationIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function deleteInventoryItemsIdLocationLevelsLocationId(string $id, string $locationId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteInventoryItemsIdLocationLevelsLocationId($id, $locationId, $queryParameters, $accept), $fetch);
    }
    /**
     * Updates the details of an inventory item's inventory level using its associated location ID.
     *
     * @param string $id The inventory item's ID.
     * @param string $locationId The ID of the location associated with the inventory level.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryLocationLevel $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInventoryItemsIdLocationLevelsLocationIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postInventoryItemsIdLocationLevelsLocationId(string $id, string $locationId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryLocationLevel $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInventoryItemsIdLocationLevelsLocationId($id, $locationId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of invites. The invites can be filtered by fields such as `id`. The invites can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to apply on an invite's searchable properties.
     *     @var string $id 
     *     @var string $email 
     *     @var string $created_at Filter by the invite's creation date.
     *     @var string $updated_at Filter by the invite's update date.
     *     @var string $deleted_at Filter by the invite's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInvitesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getInvites(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetInvites($queryParameters, $accept), $fetch);
    }
    /**
     * Create a invite.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminInvitesPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInviteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postInvites(?\Gracious\MedusaApiClientBundle\Model\AdminInvitesPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInvites($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Accept an invite and create a new user.
    Since the user isn't created yet, the JWT token used in the authorization header is retrieved from the `/auth/user/emailpass/register` API route (or a provider other than `emailpass`). The user can then authenticate using the `/auth/user/emailpass` API route.
    
    *
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminInviteAccept $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesAcceptInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postInvitesAccept(?\Gracious\MedusaApiClientBundle\Model\AdminInviteAccept $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInvitesAccept($requestBody, $accept), $fetch);
    }
    /**
     * Delete an invite.
     *
     * @param string $id The invite's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInvitesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInvitesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInvitesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInvitesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteInvitesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInvitesIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInvitesId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteInvitesId($id, $accept), $fetch);
    }
    /**
     * Retrieve an invite by its ID. You can expand the invite's relations or select the fields that should be returned.
     *
     * @param string $id The invite's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetInvitesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInviteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getInvitesId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetInvitesId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Refresh the token of an invite.
     *
     * @param string $id The invite's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesIdResendBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesIdResendNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesIdResendConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesIdResendUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostInvitesIdResendInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminInviteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postInvitesIdResend(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostInvitesIdResend($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of notifications. The notifications can be filtered by fields such as `id`. The notifications can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to apply on the notification's searchable properties.
     *     @var string $id 
     *     @var string $channel 
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminNotificationListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getNotifications(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetNotifications($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a notification by its ID. You can expand the notification's relations or select the fields that should be returned.
     *
     * @param string $id The notification's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetNotificationsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminNotificationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getNotificationsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetNotificationsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Create an order edit.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrderEdits(?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrderEdits($requestBody, $accept), $fetch);
    }
    /**
     * Cancel a requested order edit.
     *
     * @param string $id The order edit's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrderEditsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteOrderEditsId($id, $accept), $fetch);
    }
    /**
     * Confirm an order edit request and apply the changes on the order.
     *
     * @param string $id The order edit's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdConfirmBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdConfirmNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdConfirmConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdConfirmUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdConfirmInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrderEditsIdConfirm(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrderEditsIdConfirm($id, $accept), $fetch);
    }
    /**
     * Add new items to an order edit. These items will have the action `ITEM_ADD`.
     *
     * @param string $id The order edit's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsAddItemsReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrderEditsIdItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsAddItemsReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrderEditsIdItems($id, $requestBody, $accept), $fetch);
    }
    /**
    * Update an existing order item's quantity of an order edit.
    You can also use this API route to remove an item from an order by setting its quantity to `0`.
    
    *
    * @param string $id The order edit's ID.
    * @param string $itemId The order edit's item id.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsUpdateItemQuantityReqSchema $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsItemItemIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrderEditsIdItemsItemItemId(string $id, string $itemId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsUpdateItemQuantityReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrderEditsIdItemsItemItemId($id, $itemId, $requestBody, $accept), $fetch);
    }
    /**
    * Remove an added item in the order edit by the ID of the item's `ITEM_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The order edit's ID.
    * @param string $actionId The ID of the new item's `ITEM_ADD` action.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteOrderEditsIdItemsActionId(string $id, string $actionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteOrderEditsIdItemsActionId($id, $actionId, $accept), $fetch);
    }
    /**
    * Update an added item in the order edit by the ID of the item's `ITEM_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The order edit's ID.
    * @param string $actionId The ID of the new item's `ITEM_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsItemsActionReqSchema $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrderEditsIdItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsItemsActionReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrderEditsIdItemsActionId($id, $actionId, $requestBody, $accept), $fetch);
    }
    /**
     * Change the status of an active order edit to requested.
     *
     * @param string $id The order edit's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdRequestBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdRequestNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdRequestConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdRequestUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdRequestInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrderEditsIdRequest(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrderEditsIdRequest($id, $accept), $fetch);
    }
    /**
     * Add a shipping method to an exchange. The shipping method will have a `SHIPPING_ADD` action.
     *
     * @param string $id The order edit's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsShippingReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrderEditsIdShippingMethod(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsShippingReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrderEditsIdShippingMethod($id, $requestBody, $accept), $fetch);
    }
    /**
    * Remove a shipping method in the order edit by the ID of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The order edit's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteOrderEditsIdShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteOrderEditsIdShippingMethodActionId(string $id, string $actionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteOrderEditsIdShippingMethodActionId($id, $actionId, $accept), $fetch);
    }
    /**
    * Update a shipping method in the order edit by the ID of the method's `SHIPPING_ADD` action.
    
    Every shipping method has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The order edit's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsShippingActionReqSchema $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrderEditsIdShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrderEditsIdShippingMethodActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsShippingActionReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrderEditsIdShippingMethodActionId($id, $actionId, $requestBody, $accept), $fetch);
    }
    /**
     * Retrieve a list of orders. The orders can be filtered by fields such as `id`. The orders can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var string $status 
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var array $sales_channel_id Filter by sales channel IDs to retrieve the orders associated with them.
     *     @var string $region_id Filter by region IDs to retrieve their associated orders.
     *     @var string $q Search term to filter the order's searchable properties.
     *     @var string $created_at Filter by the order's creation date.
     *     @var string $updated_at Filter by the order's update date.
     *     @var string $customer_id 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrdersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getOrders(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetOrders($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve an order by its ID. You can expand the order's relations or select the fields that should be returned.
     *
     * @param string $id The order's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var string $id 
     *     @var string $status 
     *     @var float $version The order's version.
     *     @var string $created_at 
     *     @var string $updated_at 
     *     @var string $deleted_at 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOrdersId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetOrdersId($id, $queryParameters, $accept), $fetch);
    }
    /**
    * Update an order's details.
    *
    * @param string $id The order's ID.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateOrder $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrdersId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateOrder $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Change the status of an order to archived.
     *
     * @param string $id The order's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdArchiveBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdArchiveNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdArchiveConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdArchiveUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdArchiveInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrdersIdArchive(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdArchive($id, $queryParameters, $accept), $fetch);
    }
    /**
    * Cancel an order. The cancelation fails if:
    - The order has captured payments.
    
    
    - The order has refund payments.
    
    
    - The order has fulfillments that aren't canceled.
    
    *
    * @param string $id The order's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCancelBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCancelNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCancelConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCancelUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCancelInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrdersIdCancel(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdCancel($id, $queryParameters, $accept), $fetch);
    }
    /**
    * Retrieve a list of changes made on an order, including returns, exchanges, etc...
    
    The changes can be filtered by fields like FILTER FIELDS. The changes can also be paginated.
    
    *
    * @param string $id The order's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdChangesBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdChangesNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdChangesConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdChangesUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdChangesInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderChangesResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getOrdersIdChanges(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetOrdersIdChanges($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Mark an order as completed.
     *
     * @param string $id The order's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdCompletePostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCompleteBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCompleteNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCompleteConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCompleteUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCompleteInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrdersIdComplete(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdCompletePostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdComplete($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Create a credit line for an order.
    *
    * @param string $id The order's ID.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateOrderCreditLines $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCreditLinesBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCreditLinesNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCreditLinesConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCreditLinesUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdCreditLinesInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrdersIdCreditLines(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateOrderCreditLines $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdCreditLines($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Create a fulfillment for an order. The creation fails if the order is canceled.
     *
     * @param string $id The order's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrdersIdFulfillments(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdFulfillments($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel an order's fulfillment. The fulfillment can't be canceled if it's shipped.
     *
     * @param string $id The order's ID.
     * @param string $fulfillmentId The order's fulfillment id.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdCancelPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdCancelBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdCancelNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdCancelConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdCancelUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdCancelInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrdersIdFulfillmentsFulfillmentIdCancel(string $id, string $fulfillmentId, ?\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdCancelPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdFulfillmentsFulfillmentIdCancel($id, $fulfillmentId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Mark an order's fulfillment as delivered.
    *
    * @param string $id The order's ID.
    * @param string $fulfillmentId The fulfillment's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    If a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    Without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdMarkAsDeliveredBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdMarkAsDeliveredNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdMarkAsDeliveredConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdMarkAsDeliveredUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdMarkAsDeliveredInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrdersIdFulfillmentsFulfillmentIdMarkAsDelivered(string $id, string $fulfillmentId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdFulfillmentsFulfillmentIdMarkAsDelivered($id, $fulfillmentId, $queryParameters, $accept), $fetch);
    }
    /**
     * Create a shipment for an order's fulfillment.
     *
     * @param string $id The order's ID.
     * @param string $fulfillmentId The fulfillment's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdFulfillmentsFulfillmentIdShipmentsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postOrdersIdFulfillmentsFulfillmentIdShipments(string $id, string $fulfillmentId, ?\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdFulfillmentsFulfillmentIdShipments($id, $fulfillmentId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Retrieve a list of line items in a order. The line items can be filtered by fields like FILTER FIELDS. The line items can also be paginated.
    *
    * @param string $id The order's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    *     @var string $id 
    *     @var string $item_id 
    *     @var string $order_id 
    *     @var string $version 
    *     @var float $limit Limit the number of items returned in the list.
    *     @var float $offset The number of items to skip when retrieving a list.
    *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdLineItemsBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdLineItemsNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdLineItemsConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdLineItemsUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdLineItemsInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrdersIdLineItemsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getOrdersIdLineItems(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetOrdersIdLineItems($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a preview of an order using its associated change, such as an edit.
     *
     * @param string $id The order's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdPreviewBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdPreviewNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdPreviewConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdPreviewUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetOrdersIdPreviewInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOrdersIdPreview(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetOrdersIdPreview($id, $accept), $fetch);
    }
    /**
    * Request an order to be transfered to another customer. The transfer is confirmed by sending a request to the [Accept Order Transfer](https://docs.medusajs.com/api/store#orders_postordersidtransferaccept) Store API route.
    *
    * @param string $id The order's ID.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminTransferOrder $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrdersIdTransfer(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminTransferOrder $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdTransfer($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Cancel a request to transfer an order to another customer.
    *
    * @param string $id The order's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferCancelBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferCancelNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferCancelConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferCancelUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostOrdersIdTransferCancelInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrdersIdTransferCancel(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostOrdersIdTransferCancel($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Create a payment collection.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentCollection $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPaymentCollectionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPaymentCollections(?\Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentCollection $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPaymentCollections($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a payment collection.
     *
     * @param string $id The payment collection's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePaymentCollectionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePaymentCollectionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePaymentCollectionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePaymentCollectionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePaymentCollectionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminDeletePaymentCollectionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deletePaymentCollectionsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeletePaymentCollectionsId($id, $accept), $fetch);
    }
    /**
     * Mark a payment collection as paid. This creates and authorizes a payment session, then capture its payment, using the manual payment provider.
     *
     * @param string $id The payment collection's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminMarkPaymentCollectionPaid $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsIdMarkAsPaidBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsIdMarkAsPaidNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsIdMarkAsPaidConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsIdMarkAsPaidUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentCollectionsIdMarkAsPaidInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPaymentCollectionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPaymentCollectionsIdMarkAsPaid(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminMarkPaymentCollectionPaid $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPaymentCollectionsIdMarkAsPaid($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of payments. The payments can be filtered by fields such as `id`. The payments can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the payment's searchable properties.
     *     @var string $id 
     *     @var string $payment_session_id 
     *     @var string $created_at Filter by the payment's creation date.
     *     @var string $updated_at Filter by the payment's update date.
     *     @var string $deleted_at Filter by the payment's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPaymentsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPayments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPayments($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of payment providers. The payment providers can be filtered by fields such as `id`. The payment providers can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var bool $is_enabled Filter by whether the payment provider is enabled.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsPaymentProvidersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsPaymentProvidersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsPaymentProvidersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsPaymentProvidersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsPaymentProvidersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPaymentsPaymentProvidersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentsPaymentProviders(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPaymentsPaymentProviders($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a payment by its ID. You can expand the payment's relations or select the fields that should be returned.
     *
     * @param string $id The payment's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPaymentsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPaymentResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPaymentsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPaymentsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Capture an amount of a payment. This uses the `capturePayment` method of the payment provider associated with the payment's collection.
     *
     * @param string $id The payment's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentCapture $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdCaptureBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdCaptureNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdCaptureConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdCaptureUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdCaptureInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPaymentResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPaymentsIdCapture(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentCapture $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPaymentsIdCapture($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Refund an amount of a payment. This uses the `refundPayment` method of the payment provider associated with the payment's collection.
     *
     * @param string $id The payment's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentRefund $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdRefundBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdRefundNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdRefundConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdRefundUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPaymentsIdRefundInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPaymentResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPaymentsIdRefund(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentRefund $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPaymentsIdRefund($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve the list of plugins installed in the Medusa application.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPluginsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPluginsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPluginsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPluginsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPluginsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPluginsListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPlugins(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPlugins($accept), $fetch);
    }
    /**
     * Retrieve a list of price lists. The price lists can be filtered by fields such as `id`. The price lists can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the price list's searchable properties.
     *     @var string $id 
     *     @var string $starts_at Filter by a price list's start date.
     *     @var string $ends_at Filter by the price list's end date.
     *     @var array $status Filter by the price list's status.
     *     @var array $rules_count Filter by the price list's rules count.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPriceListListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceLists(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPriceLists($queryParameters, $accept), $fetch);
    }
    /**
     * Create a price list.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreatePriceList $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPriceListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPriceLists(?\Gracious\MedusaApiClientBundle\Model\AdminCreatePriceList $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPriceLists($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a price list.
     *
     * @param string $id The price list's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePriceListsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePriceListsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePriceListsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePriceListsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePriceListsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPriceListDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deletePriceListsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeletePriceListsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a price list by its ID. You can expand the price list's relations or select the fields that should be returned.
     *
     * @param string $id The price list's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPriceListsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPriceListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceListsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPriceListsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a price list's details.
     *
     * @param string $id The price list's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdatePriceList $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPriceListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPriceListsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdatePriceList $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPriceListsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the prices of a price list to create, update, or delete them.
     *
     * @param string $id The price list's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPriceListsIdPricesBatchPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdPricesBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdPricesBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdPricesBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdPricesBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdPricesBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPriceListBatchResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPriceListsIdPricesBatch(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPriceListsIdPricesBatchPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPriceListsIdPricesBatch($id, $requestBody, $accept), $fetch);
    }
    /**
     * Remove products from a price list.
     *
     * @param string $id The price list's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminLinkPriceListProducts $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdProductsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdProductsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdProductsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdProductsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPriceListsIdProductsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPriceListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPriceListsIdProducts(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminLinkPriceListProducts $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPriceListsIdProducts($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of price preferences. The price preferences can be filtered by fields such as `id`. The price preferences can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var string $attribute 
     *     @var string $value 
     *     @var string $q Search term to apply on the price preference's searchable properties.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPricePreferences(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPricePreferences($queryParameters, $accept), $fetch);
    }
    /**
     * Create a price preference.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreatePricePreference $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPricePreferences(?\Gracious\MedusaApiClientBundle\Model\AdminCreatePricePreference $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPricePreferences($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a price preference.
     *
     * @param string $id The price preference's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePricePreferencesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePricePreferencesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePricePreferencesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePricePreferencesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePricePreferencesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deletePricePreferencesId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeletePricePreferencesId($id, $accept), $fetch);
    }
    /**
     * Retrieve a price preference by its ID. You can expand the price preference's relations or select the fields that should be returned.
     *
     * @param string $id The price preference's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPricePreferencesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPricePreferencesId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPricePreferencesId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a price preference's details.
     *
     * @param string $id The price preference's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdatePricePreference $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPricePreferencesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPricePreferencesId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdatePricePreference $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPricePreferencesId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of product categories. The product categories can be filtered by fields such as `id`. The product categories can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter on the product category's searchable properties.
     *     @var string $id 
     *     @var string $description 
     *     @var string $handle 
     *     @var string $parent_category_id 
     *     @var bool $include_ancestors_tree Whether to include the parent category of each category. If you enable this, add to the `fields` query parameter `parent_category` to set the parent of a category in this field. You can either pass `*parent_category` to retreieve the fields of all parent categories, or select specific fields to make the response size smaller. For example, `fields=parent_category.id,parent_category.name`.
     *     @var bool $include_descendants_tree Whether to include the child categories of each category. If you enable this, add to the `fields` query parameter `category_children` to set the children of a category in this field. You can either pass `*category_children` to retreieve the fields of all child categories, or select specific fields to make the response size smaller. For example, `fields=category_children.id,category_children.name`.
     *     @var bool $is_internal Filter by whether the category is internal.
     *     @var bool $is_active Filter by whether the category is active.
     *     @var string $created_at Filter by the category's creation date.
     *     @var string $updated_at Filter by the category's update date.
     *     @var string $deleted_at Filter by the category's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var string $name 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductCategoryListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductCategories(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductCategories($queryParameters, $accept), $fetch);
    }
    /**
     * Create a product category.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateProductCategory $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductCategoryResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductCategories(?\Gracious\MedusaApiClientBundle\Model\AdminCreateProductCategory $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductCategories($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a product category. This doesn't deleted products in that category.
     *
     * @param string $id The product category's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductCategoriesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductCategoriesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductCategoriesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductCategoriesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductCategoriesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductCategoryDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductCategoriesId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteProductCategoriesId($id, $accept), $fetch);
    }
    /**
     * Retrieve a product category by its ID. You can expand the product category's relations or select the fields that should be returned.
     *
     * @param string $id The product category's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     *     @var bool $include_ancestors_tree Whether to retrieve the category's parent. If you enable this, add to the `fields` query parameter `parent_category` to set the parent of a category in this field. You can either pass `*parent_category` to retreieve the fields of all parent categories, or select specific fields to make the response size smaller. For example, `fields=parent_category.id,parent_category.name`.
     *     @var bool $include_descendants_tree Whether to retrieve a list of child categories. If you enable this, add to the `fields` query parameter `category_children` to set the children of a category in this field. You can either pass `*category_children` to retreieve the fields of all child categories, or select specific fields to make the response size smaller. For example, `fields=category_children.id,category_children.name`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductCategoriesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductCategoryResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductCategoriesId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductCategoriesId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a product category's details.
     *
     * @param string $id The product category's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateProductCategory $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductCategoryResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductCategoriesId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateProductCategory $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductCategoriesId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage products of a category to add or remove them.
     *
     * @param string $id The product category's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminProductCategoriesIdProductsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields. This API route restricts the fields that can be selected. Learn how to override the retrievable fields in the [Retrieve Custom Links](https://docs.medusajs.com/learn/fundamentals/api-routes/retrieve-custom-links) documentation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdProductsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdProductsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdProductsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdProductsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductCategoriesIdProductsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductCategoryResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductCategoriesIdProducts(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminProductCategoriesIdProductsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductCategoriesIdProducts($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of product tags. The product tags can be filtered by fields such as `id`. The product tags can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the product tag's searchable properties.
     *     @var string $id 
     *     @var string $value 
     *     @var string $created_at Filter by the tag's creation date.
     *     @var string $updated_at Filter by the tag's update date.
     *     @var string $deleted_at Filter by the tag's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTagListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductTags(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductTags($queryParameters, $accept), $fetch);
    }
    /**
     * Create a product tag.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateProductTag $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTagResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductTags(?\Gracious\MedusaApiClientBundle\Model\AdminCreateProductTag $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductTags($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a product tag. This doesn't delete products using the tag.
     *
     * @param string $id The product tag's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTagsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTagsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTagsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTagsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTagsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTagDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductTagsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteProductTagsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a product tag by its ID. You can expand the product tag's relations or select the fields that should be returned.
     *
     * @param string $id The product tag's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTagsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTagResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductTagsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductTagsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a product tag's details.
     *
     * @param string $id The product tag's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateProductTag $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTagsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTagResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductTagsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateProductTag $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductTagsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of product types. The product types can be filtered by fields such as `id`. The product types can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the product type's searchable properties.
     *     @var string $id 
     *     @var string $value 
     *     @var string $created_at Filter by the type's creation date.
     *     @var string $updated_at Filter by the type's update date.
     *     @var string $deleted_at Filter by the type's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTypeListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductTypes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductTypes($queryParameters, $accept), $fetch);
    }
    /**
     * Create a product type.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateProductType $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTypeResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductTypes(?\Gracious\MedusaApiClientBundle\Model\AdminCreateProductType $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductTypes($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a product type. This doesn't delete products of this type.
     *
     * @param string $id The product type's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTypesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTypesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTypesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTypesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductTypesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTypeDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductTypesId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteProductTypesId($id, $accept), $fetch);
    }
    /**
     * Retrieve a product type by its ID. You can expand the product type's relations or select the fields that should be returned.
     *
     * @param string $id The product type's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductTypesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTypeResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductTypesId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductTypesId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a product type's details.
     *
     * @param string $id The product type's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateProductType $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductTypesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductTypeResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductTypesId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateProductType $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductTypesId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of product variants. The product variants can be filtered by fields such as `id`. The product variants can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the product variant's searchable properties.
     *     @var string $id 
     *     @var bool $manage_inventory Filter by whether a variant's `manage_inventory` is enabled.
     *     @var bool $allow_backorder Filter by whether backorder is allowed for a variant.
     *     @var string $created_at Filter by the product variant's creation date.
     *     @var string $updated_at Filter by the product variant's update date.
     *     @var string $deleted_at Filter by the product variant's deletion date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     *     @var string $ean 
     *     @var string $upc 
     *     @var string $barcode 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductVariantsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductVariantsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductVariantsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductVariantsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductVariantsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductVariantsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getProductVariants(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductVariants($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of products. The products can be filtered by fields such as `id`. The products can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $price_list_id 
     *     @var string $q Search term to filter a product's searchable properties.
     *     @var string $status 
     *     @var string $sales_channel_id 
     *     @var string $title 
     *     @var string $handle 
     *     @var string $id 
     *     @var bool $is_giftcard Filter by whether a product is a gift card.
     *     @var string $tags Filter by associated tags to retrieve their products.
     *     @var string $type_id 
     *     @var string $category_id 
     *     @var string $created_at Filter by a product's creation date.
     *     @var string $updated_at Filter by a product's update date.
     *     @var string $deleted_at Filter by a product's deletion date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var string $collection_id 
     *     @var string $variants Filter the retrieved products' variants.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getProducts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProducts($queryParameters, $accept), $fetch);
    }
    /**
     * Create a product.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminProductsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProducts(?\Gracious\MedusaApiClientBundle\Model\AdminProductsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProducts($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage products to create, update, or delete them.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminBatchProductRequest $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminBatchProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsBatch(?\Gracious\MedusaApiClientBundle\Model\AdminBatchProductRequest $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsBatch($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Start a product export process to retrieve a CSV of exported products.
    
    You'll receive in the response the transaction ID of the workflow generating the CSV file. To check the status of the execution, send a GET request to `/admin/workflows-executions/export-products/:transaction-id`.
    Once the execution finishes successfully, a notification is created for the export. You can retrieve the notifications using the `/admin/notification` API route to retrieve the file's download URL.
    
    *
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsExportBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsExportNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsExportConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsExportUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsExportInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminExportProductResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postProductsExport(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsExport($queryParameters, $accept), $fetch);
    }
    /**
     * Create a new product import process. The products aren't imported until the import is confirmed with the `/admin/products/:transaction-id/import` API route.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminImportProductRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminImportProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsImport(?\Gracious\MedusaApiClientBundle\Model\AdminImportProductRequest $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsImport($requestBody, $accept), $fetch);
    }
    /**
     * Confirm that a created product import should start importing the products into Medusa.
     *
     * @param string $transactionId The ID of the transaction returned when the product import was created.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportTransactionIdConfirmInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsImportTransactionIdConfirm(string $transactionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsImportTransactionIdConfirm($transactionId, $accept), $fetch);
    }
    /**
     * Create a new product import process. The products aren't imported until the import is confirmed with the `/admin/products/:transaction-id/imports` API route.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminImportProducts $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminImportProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsImports(?\Gracious\MedusaApiClientBundle\Model\AdminImportProducts $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsImports($requestBody, $accept), $fetch);
    }
    /**
     * Confirm that a created product import should start importing the products into Medusa.
     *
     * @param string $transactionId The product's transaction id.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsTransactionIdConfirmBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsTransactionIdConfirmNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsTransactionIdConfirmConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsTransactionIdConfirmUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsImportsTransactionIdConfirmInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsImportsTransactionIdConfirm(string $transactionId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsImportsTransactionIdConfirm($transactionId, $accept), $fetch);
    }
    /**
     * Delete a product.
     *
     * @param string $id The product's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteProductsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a product by its ID. You can expand the product's relations or select the fields that should be returned.
     *
     * @param string $id The product's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a product's details.
     *
     * @param string $id The product's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminProductsIdPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminProductsIdPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of options of a product. The options can be filtered by fields like `id`. The options can also be paginated.
     *
     * @param string $id The product's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the product option's searchable fields.
     *     @var string $id 
     *     @var string $title 
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsIdOptions(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductsIdOptions($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Create an option for a product.
     *
     * @param string $id The product's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsIdOptions(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsIdOptions($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Delete an option from a product.
    
    Values of this option in the product's variants are removed.
    
    *
    * @param string $id The product's ID.
    * @param string $optionId The product option's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdOptionsOptionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdOptionsOptionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdOptionsOptionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdOptionsOptionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdOptionsOptionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductOptionDeleteResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteProductsIdOptionsOptionId(string $id, string $optionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteProductsIdOptionsOptionId($id, $optionId, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a product's option by its ID.
     *
     * @param string $id The product's ID.
     * @param string $optionId The product's option id.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsOptionIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsOptionIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsOptionIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsOptionIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdOptionsOptionIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductOptionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsIdOptionsOptionId(string $id, string $optionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductsIdOptionsOptionId($id, $optionId, $queryParameters, $accept), $fetch);
    }
    /**
     * Update the details of a product option.
     *
     * @param string $id The product's ID.
     * @param string $optionId The option's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsOptionIdPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsOptionIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsOptionIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsOptionIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsOptionIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdOptionsOptionIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsIdOptionsOptionId(string $id, string $optionId, ?\Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsOptionIdPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsIdOptionsOptionId($id, $optionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of variants in a product. The variants can be filtered by fields like FILTER FIELDS. The variants can also be paginated.
     *
     * @param string $id The product's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the variant's search attributes.
     *     @var string $id 
     *     @var bool $manage_inventory Filter by whether a variant's `manage_inventory` property is enabled.
     *     @var bool $allow_backorder Filter by whether backorders are allowed for the variant.
     *     @var string $created_at Filter by the product's creation date.
     *     @var string $updated_at Filter by the product's update date.
     *     @var string $deleted_at Filter by the product's deletion date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     *     @var string $ean 
     *     @var string $upc 
     *     @var string $barcode 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsIdVariants(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductsIdVariants($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Create a variant for a product.
     *
     * @param string $id The product's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsIdVariants(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsIdVariants($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage variants in a product to create, update, or delete them.
     *
     * @param string $id The product's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantRequest $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsIdVariantsBatch(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantRequest $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsIdVariantsBatch($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage a product's variant's inventoris to associate them with inventory items, update their inventory items, or delete their association with inventory items.
     *
     * @param string $id The product's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsInventoryItemsBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsInventoryItemsBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsInventoryItemsBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsInventoryItemsBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsInventoryItemsBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryBatchResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsIdVariantsInventoryItemsBatch(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsIdVariantsInventoryItemsBatch($id, $requestBody, $accept), $fetch);
    }
    /**
     * Delete a variant of a product.
     *
     * @param string $id The product's ID.
     * @param string $variantId The product variant's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductVariantDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsIdVariantsVariantId(string $id, string $variantId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteProductsIdVariantsVariantId($id, $variantId, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a product's variant by its ID.
     *
     * @param string $id The product's ID.
     * @param string $variantId The variant's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsVariantIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsVariantIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsVariantIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsVariantIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetProductsIdVariantsVariantIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductVariantResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductsIdVariantsVariantId(string $id, string $variantId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetProductsIdVariantsVariantId($id, $variantId, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a variant's details.
     *
     * @param string $id The product's ID.
     * @param string $variantId The product's variant id.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsVariantIdPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsIdVariantsVariantId(string $id, string $variantId, ?\Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsVariantIdPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsIdVariantsVariantId($id, $variantId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Associate with a product variant an inventory item that manages its inventory details.
     *
     * @param string $id The product's ID.
     * @param string $variantId The variant's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateVariantInventoryItem $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductVariantResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsIdVariantsVariantIdInventoryItems(string $id, string $variantId, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateVariantInventoryItem $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsIdVariantsVariantIdInventoryItems($id, $variantId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Remove the association between an inventory item and its product variant.
     *
     * @param string $id The product's ID.
     * @param string $variantId The products variant's ID.
     * @param string $inventoryItemId The inventory item's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProductsIdVariantsVariantIdInventoryItemsInventoryItemId(string $id, string $variantId, string $inventoryItemId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteProductsIdVariantsVariantIdInventoryItemsInventoryItemId($id, $variantId, $inventoryItemId, $queryParameters, $accept), $fetch);
    }
    /**
     * Update the inventory item that manages the inventory details of a product variant.
     *
     * @param string $id The product's ID.
     * @param string $variantId The variant's ID.
     * @param string $inventoryItemId The inventory item's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateVariantInventoryItem $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsInventoryItemIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsInventoryItemIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsInventoryItemIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsInventoryItemIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostProductsIdVariantsVariantIdInventoryItemsInventoryItemIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminProductVariantResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductsIdVariantsVariantIdInventoryItemsInventoryItemId(string $id, string $variantId, string $inventoryItemId, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateVariantInventoryItem $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostProductsIdVariantsVariantIdInventoryItemsInventoryItemId($id, $variantId, $inventoryItemId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of promotions. The promotions can be filtered by fields such as `id`. The promotions can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the promotion's searchable attributes.
     *     @var string $code 
     *     @var string $campaign_id 
     *     @var string $application_method Apply filters on the application methods to retrieve the promotions of the matching application methods.
     *     @var string $created_at Filter by a promotion's creation date.
     *     @var string $updated_at Filter by a promotion's update date.
     *     @var string $deleted_at Filter by a promotion's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var string $currency_code 
     *     @var string $application_method_type 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPromotions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPromotions($queryParameters, $accept), $fetch);
    }
    /**
     * Create a promotion.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPromotions(?\Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPromotions($requestBody, $queryParameters, $accept), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleAttributeOptionsRuleTypeInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleAttributeOptionsRuleTypeGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getPromotionsRuleAttributeOptionsRuleType(string $ruleType, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPromotionsRuleAttributeOptionsRuleType($ruleType, $queryParameters, $accept), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleValueOptionsRuleTypeRuleAttributeIdGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getPromotionsRuleValueOptionsRuleTypeRuleAttributeId(string $ruleType, string $ruleAttributeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPromotionsRuleValueOptionsRuleTypeRuleAttributeId($ruleType, $ruleAttributeId, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a promotion.
     *
     * @param string $id The promotion's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePromotionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePromotionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePromotionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePromotionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeletePromotionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deletePromotionsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeletePromotionsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a promotion by its ID. You can expand the promotion's relations or select the fields that should be returned.
     *
     * @param string $id The promotion's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPromotionsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPromotionsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a promotion's details.
     *
     * @param string $id The promotion's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postPromotionsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPromotionsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the buy rules of a `buyget` promotion to create, update, or delete them.
     *
     * @param string $id The promotion's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdBuyRulesBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdBuyRulesBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdBuyRulesBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdBuyRulesBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdBuyRulesBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postPromotionsIdBuyRulesBatch(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPromotionsIdBuyRulesBatch($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the rules of a promotion to create, update, or delete them.
     *
     * @param string $id The promotion's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdRulesBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdRulesBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdRulesBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdRulesBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdRulesBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postPromotionsIdRulesBatch(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPromotionsIdRulesBatch($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the target rules of a promotion to create, update, or delete them.
     *
     * @param string $id The promotion's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdTargetRulesBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdTargetRulesBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdTargetRulesBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdTargetRulesBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostPromotionsIdTargetRulesBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postPromotionsIdTargetRulesBatch(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostPromotionsIdTargetRulesBatch($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Retrieve a list of rules in a promotion. The type of rules retrieved depend on the value of the `rule_type` path parameter:
    - If `rule_type` is `rules`, the promotion's rules are retrivied. - If `rule_type` is `target-rules`, the target rules of the promotion's application method are retrieved.
    
    - If `rule_type` is `buy-rules`, the buy rules of the promotion's application method are retrieved.
    
    *
    * @param string $id The promotion's ID.
    * @param string $ruleType The type of rules to retrieve.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdRuleTypeBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdRuleTypeNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdRuleTypeConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdRuleTypeUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetPromotionsIdRuleTypeInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRuleTypeGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getPromotionsIdRuleType(string $id, string $ruleType, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetPromotionsIdRuleType($id, $ruleType, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of refund reasons. The refund reasons can be filtered by fields such as `id`. The refund reasons can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var string $q Search term to filter the refund reason's searchable properties.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminRefundReasonsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRefundReasons(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetRefundReasons($queryParameters, $accept), $fetch);
    }
    /**
     * Create a refund reason.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateRefundReason $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\RefundReasonResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postRefundReasons(?\Gracious\MedusaApiClientBundle\Model\AdminCreateRefundReason $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostRefundReasons($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a refund reason.
     *
     * @param string $id The refund reason's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRefundReasonsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRefundReasonsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRefundReasonsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRefundReasonsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRefundReasonsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminRefundReasonsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRefundReasonsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteRefundReasonsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a refund reason by its ID. You can expand the refund reason's relations or select the fields that should be returned.
     *
     * @param string $id The refund reason's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRefundReasonsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\RefundReasonResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getRefundReasonsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetRefundReasonsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a refund reason's details.
     *
     * @param string $id The refund reason's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdatePaymentRefundReason $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRefundReasonsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\RefundReasonResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postRefundReasonsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdatePaymentRefundReason $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostRefundReasonsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of regions. The regions can be filtered by fields such as `id`. The regions can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the region's searchable properties.
     *     @var string $id 
     *     @var string $name 
     *     @var string $created_at Filter by a region's creation date.
     *     @var string $updated_at Filter by a region's update date.
     *     @var string $deleted_at Filter by a region's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var string $currency_code 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminRegionsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getRegions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetRegions($queryParameters, $accept), $fetch);
    }
    /**
     * Create a region.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateRegion $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminRegionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postRegions(?\Gracious\MedusaApiClientBundle\Model\AdminCreateRegion $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostRegions($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a region.
     *
     * @param string $id The region's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRegionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRegionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRegionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRegionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteRegionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminRegionsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRegionsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteRegionsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a region by its ID. You can expand the region's relations or select the fields that should be returned.
     *
     * @param string $id The region's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetRegionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminRegionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getRegionsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetRegionsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a region's details.
     *
     * @param string $id The region's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateRegion $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostRegionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminRegionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postRegionsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateRegion $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostRegionsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of reservations. The reservations can be filtered by fields such as `id`. The reservations can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $location_id 
     *     @var string $inventory_item_id 
     *     @var string $line_item_id 
     *     @var string $created_by 
     *     @var string $description 
     *     @var string $created_at Filter by a reservation's creation date.
     *     @var string $updated_at Filter by a reservation's update date.
     *     @var string $deleted_at Filter by a reservation's deletion date.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReservationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getReservations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetReservations($queryParameters, $accept), $fetch);
    }
    /**
     * Create a reservation.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateReservation $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReservationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReservations(?\Gracious\MedusaApiClientBundle\Model\AdminCreateReservation $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReservations($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a reservation.
     *
     * @param string $id The reservation's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReservationsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReservationsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReservationsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReservationsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReservationsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReservationsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReservationsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteReservationsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a reservation by its ID. You can expand the reservation's relations or select the fields that should be returned.
     *
     * @param string $id The reservation's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReservationsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReservationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getReservationsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetReservationsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a reservation's details.
     *
     * @param string $id The reservation's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateReservation $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReservationsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReservationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReservationsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateReservation $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReservationsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of return reasons. The return reasons can be filtered by fields such as `id`. The return reasons can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the return reason's searchable properties.
     *     @var string $id 
     *     @var string $value 
     *     @var string $label 
     *     @var string $description 
     *     @var string $parent_return_reason_id 
     *     @var string $created_at Filter by a return reason's creation date.
     *     @var string $updated_at Filter by a return reason's update date.
     *     @var string $deleted_at Filter by a return reason's deletion date.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnReasonListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getReturnReasons(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetReturnReasons($queryParameters, $accept), $fetch);
    }
    /**
     * Create a return reason.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateReturnReason $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnReasonResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnReasons(?\Gracious\MedusaApiClientBundle\Model\AdminCreateReturnReason $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnReasons($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a return reason.
     *
     * @param string $id The return reason's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnReasonsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnReasonsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnReasonsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnReasonsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnReasonsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnReasonDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReturnReasonsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteReturnReasonsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a return reason by its ID. You can expand the return reason's relations or select the fields that should be returned.
     *
     * @param string $id The return reason's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnReasonsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnReasonResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getReturnReasonsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetReturnReasonsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a return reason's details.
     *
     * @param string $id The return reason's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateReturnReason $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnReasonsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnReasonResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnReasonsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateReturnReason $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnReasonsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of returns. The returns can be filtered by fields such as `id`. The returns can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var string $status 
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var array $sales_channel_id Filter by sales channel IDs to retrieve their associated returns.
     *     @var string $region_id Filter by region IDs to retrieve their associated returns.
     *     @var string $q Search term to filter the return's searchable properties.
     *     @var string $created_at Filter by the return's creation date.
     *     @var string $updated_at Filter by the return's update date.
     *     @var string $customer_id 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getReturns(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetReturns($queryParameters, $accept), $fetch);
    }
    /**
     * Create a return. The return can later be requested or confirmed.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderReturnResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturns(?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturns($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a return by its ID. You can expand the return's relations or select the fields that should be returned.
     *
     * @param string $id The return's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetReturnsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getReturnsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetReturnsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a return's details.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReturnReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReturnReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel a return.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostCancelReturnReqSchema $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdCancelBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdCancelNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdCancelConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdCancelUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdCancelInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsIdCancel(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostCancelReturnReqSchema $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdCancel($id, $requestBody, $accept), $fetch);
    }
    /**
     * Add damaged items, whose quantity is to be dismissed, to a return. These items will have the action `RECEIVE_DAMAGED_RETURN_ITEM`.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsIdDismissItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdDismissItems($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove a damaged item, whose quantity is to be dismissed, in the return by the ID of the  item's `RECEIVE_DAMAGED_RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property. return.
    
    *
    * @param string $id The return's ID.
    * @param string $actionId The ID of the damaged item's `RECEIVE_DAMAGED_RETURN_ITEM` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdDismissItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdDismissItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdDismissItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdDismissItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdDismissItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteReturnsIdDismissItemsActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteReturnsIdDismissItemsActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update a damaged item, whose quantity is to be dismissed, in the return by the ID of the  item's `RECEIVE_DAMAGED_RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property. return.
    
    *
    * @param string $id The return's ID.
    * @param string $actionId The ID of the damaged item's `RECEIVE_DAMAGED_RETURN_ITEM` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsDismissItemsActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdDismissItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postReturnsIdDismissItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsDismissItemsActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdDismissItemsActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel the receival process previously started, and hasn't been confirmed, of a return.
     *
     * @param string $id The return's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnsIdReceiveDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReturnsIdReceive(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteReturnsIdReceive($id, $accept), $fetch);
    }
    /**
     * Start a return receival process to be later confirmed using the `/admin/returns/:id/receive/confirm` API route.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReceiveReturnsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminOrderReturnResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsIdReceive(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReceiveReturnsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdReceive($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Add received items in a return. These items will have the action `RECEIVE_RETURN_ITEM`.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsIdReceiveItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdReceiveItems($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove a received item in the return by the ID of the  item's `RECEIVE_RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property. return.
    
    *
    * @param string $id The return's ID.
    * @param string $actionId The ID of the received item's `RECEIVE_RETURN_ITEM` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdReceiveItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteReturnsIdReceiveItemsActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteReturnsIdReceiveItemsActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update a received item in the return by the ID of the  item's `RECEIVE_RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property. return.
    
    *
    * @param string $id The return's ID.
    * @param string $actionId The ID of the received item's `RECEIVE_RETURN_ITEM` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postReturnsIdReceiveItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdReceiveItemsActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Confirm that a return has been received. This updates the quantity of the items received, if not damaged, and  reflects the changes on the order.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsConfirmRequestReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveConfirmBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveConfirmNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveConfirmConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveConfirmUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdReceiveConfirmInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsIdReceiveConfirm(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsConfirmRequestReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdReceiveConfirm($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Cancel a requested return.
     *
     * @param string $id The return's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnsIdRequestDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReturnsIdRequest(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteReturnsIdRequest($id, $accept), $fetch);
    }
    /**
     * Confirm a requested return. The changes are applied on the inventory quantity and the order only after the return has been confirmed as received using the `/admin/returns/:id/received/confirm`.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsConfirmRequestReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsIdRequest(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsConfirmRequestReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdRequest($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Add items that are requested to be returned. These items will have the action `RETURN_ITEM`.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsIdRequestItems(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdRequestItems($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove a requested item to be returned by the ID of the item's `RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property. return.
    
    *
    * @param string $id The return's ID.
    * @param string $actionId The ID of the item's `RETURN_ITEM` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdRequestItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteReturnsIdRequestItemsActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteReturnsIdRequestItemsActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update a requested item to be returned by the ID of the  item's `RETURN_ITEM` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property. return.
    
    *
    * @param string $id The return's ID.
    * @param string $actionId The ID of the item's `RETURN_ITEM` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdRequestItemsActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postReturnsIdRequestItemsActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdRequestItemsActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Add a shipping method to a return. The shipping method will have a `SHIPPING_ADD` action.
     *
     * @param string $id The return's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingReqSchema $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postReturnsIdShippingMethod(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdShippingMethod($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Remove a shipping method of the return by the ID of the item's `SHIPPING_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The return's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteReturnsIdShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteReturnsIdShippingMethodActionId(string $id, string $actionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteReturnsIdShippingMethodActionId($id, $actionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Update a shipping method of the return by the ID of the item's `SHIPPING_ADD` action.
    
    Every item has an `actions` property, whose value is an array of actions. You can check the action's name using its `action` property, and use the value of the `id` property.
    
    *
    * @param string $id The return's ID.
    * @param string $actionId The ID of the shipping method's `SHIPPING_ADD` action.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingActionReqSchema $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodActionIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodActionIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodActionIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodActionIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostReturnsIdShippingMethodActionIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postReturnsIdShippingMethodActionId(string $id, string $actionId, ?\Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingActionReqSchema $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostReturnsIdShippingMethodActionId($id, $actionId, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of sales channels. The sales channels can be filtered by fields such as `id`. The sales channels can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the sales channel's searchable properties.
     *     @var string $id 
     *     @var string $name 
     *     @var string $description The sales channel's description.
     *     @var bool $is_disabled Filter by whether the sales channel is disabled.
     *     @var string $created_at Filter by a sales channel's creation date.
     *     @var string $updated_at Filter by a sales channel's update date.
     *     @var string $deleted_at Filter by a sales channel's deletion date.
     *     @var string $location_id 
     *     @var string $publishable_key_id 
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminSalesChannelsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesChannels(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetSalesChannels($queryParameters, $accept), $fetch);
    }
    /**
     * Create a sales channel.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateSalesChannel $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminSalesChannelResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesChannels(?\Gracious\MedusaApiClientBundle\Model\AdminCreateSalesChannel $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostSalesChannels($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a sales channel.
     *
     * @param string $id The sales channel's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSalesChannelsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSalesChannelsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSalesChannelsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSalesChannelsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSalesChannelsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminSalesChannelDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSalesChannelsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteSalesChannelsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a sales channel by its ID. You can expand the sales channel's relations or select the fields that should be returned.
     *
     * @param string $id The sales channel's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetSalesChannelsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminSalesChannelResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSalesChannelsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetSalesChannelsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a sales channel's details.
     *
     * @param string $id The sales channel's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateSalesChannel $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminSalesChannelResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesChannelsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateSalesChannel $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostSalesChannelsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage products in a sales channel to add or remove them from the channel.
     *
     * @param string $id The sales channel's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminSalesChannelsIdProductsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdProductsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdProductsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdProductsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdProductsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSalesChannelsIdProductsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminSalesChannelResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postSalesChannelsIdProducts(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminSalesChannelsIdProductsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostSalesChannelsIdProducts($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of shipping options. The shipping options can be filtered by fields such as `id`. The shipping options can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var string $q Search term to filter the shipping option's searchable properties.
     *     @var string $service_zone_id 
     *     @var string $shipping_profile_id 
     *     @var string $provider_id 
     *     @var string $shipping_option_type_id 
     *     @var string $created_at Filter by a shipping option's creation date.
     *     @var string $updated_at Filter by a shipping option's update date.
     *     @var string $deleted_at Filter by a shipping option's deletion date.
     *     @var string $stock_location_id 
     *     @var bool $is_return Filter by whether the shipping option is used for returns.
     *     @var bool $admin_only Filter by whether the shipping option is used by admin users only.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingOptions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetShippingOptions($queryParameters, $accept), $fetch);
    }
    /**
     * Create a shipping option.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateShippingOption $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingOptionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postShippingOptions(?\Gracious\MedusaApiClientBundle\Model\AdminCreateShippingOption $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostShippingOptions($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a shipping option.
     *
     * @param string $id The shipping option's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingOptionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingOptionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingOptionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingOptionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingOptionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingOptionDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShippingOptionsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteShippingOptionsId($id, $accept), $fetch);
    }
    /**
    * Retrieve a shipping option by its ID. You can expand the shipping option's relations or select the fields that should be returned.
    *
    * @param string $id The shipping option's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingOptionsIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingOptionResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getShippingOptionsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetShippingOptionsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a shipping option's details.
     *
     * @param string $id The shipping option's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOption $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingOptionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postShippingOptionsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOption $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostShippingOptionsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the rules of a shipping option to create, update, or delete them.
     *
     * @param string $id The shipping option's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdRulesBatchBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdRulesBatchNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdRulesBatchConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdRulesBatchUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingOptionsIdRulesBatchInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postShippingOptionsIdRulesBatch(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostShippingOptionsIdRulesBatch($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of shipping profiles. The shipping profiles can be filtered by fields such as `id`. The shipping profiles can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $id 
     *     @var string $q Search term to filter the shipping profile's searchable properties.
     *     @var string $type Filter by a shipping profile's type.
     *     @var string $name Filter by a shipping profile's name.
     *     @var string $created_at Filter by a shipping profile's creation date.
     *     @var string $updated_at Filter by a shipping profile's update date.
     *     @var string $deleted_at Filter by a shipping profile's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingProfilesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingProfiles(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetShippingProfiles($queryParameters, $accept), $fetch);
    }
    /**
     * Create a shipping profile.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateShippingProfile $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingProfileResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postShippingProfiles(?\Gracious\MedusaApiClientBundle\Model\AdminCreateShippingProfile $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostShippingProfiles($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a shipping profile.
     *
     * @param string $id The shipping profile's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingProfilesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingProfilesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingProfilesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingProfilesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteShippingProfilesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingProfileDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteShippingProfilesId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteShippingProfilesId($id, $accept), $fetch);
    }
    /**
     * Retrieve a shipping profile by its ID. You can expand the shipping profile's relations or select the fields that should be returned.
     *
     * @param string $id The shipping profile's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetShippingProfilesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingProfileResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getShippingProfilesId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetShippingProfilesId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a shipping profile's details.
     *
     * @param string $id The shipping profile's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingProfile $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostShippingProfilesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminShippingProfileResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postShippingProfilesId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingProfile $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostShippingProfilesId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of stock locations. The stock locations can be filtered by fields such as `id`. The stock locations can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the stock location's searchable properties.
     *     @var string $id 
     *     @var string $name 
     *     @var string $address_id 
     *     @var string $sales_channel_id 
     *     @var string $created_at Filter by a stock location's creation date.
     *     @var string $updated_at Filter by a stock location's update date.
     *     @var string $deleted_at Filter by a stock location's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getStockLocations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetStockLocations($queryParameters, $accept), $fetch);
    }
    /**
     * Create a stock location.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateStockLocation $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postStockLocations(?\Gracious\MedusaApiClientBundle\Model\AdminCreateStockLocation $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostStockLocations($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a stock location.
     *
     * @param string $id The stock location's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteStockLocationsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteStockLocationsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteStockLocationsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteStockLocationsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteStockLocationsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteStockLocationsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteStockLocationsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a stock location by its ID. You can expand the stock location's relations or select the fields that should be returned.
     *
     * @param string $id The stock location's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStockLocationsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getStockLocationsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetStockLocationsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a stock location's details.
     *
     * @param string $id The stock location's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateStockLocation $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postStockLocationsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateStockLocation $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostStockLocationsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the fulfillment providers to add or remove them from a stock location.
     *
     * @param string $id The stock location's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationsIdFulfillmentProvidersPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentProvidersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentProvidersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentProvidersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentProvidersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentProvidersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postStockLocationsIdFulfillmentProviders(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminStockLocationsIdFulfillmentProvidersPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostStockLocationsIdFulfillmentProviders($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Create and add a fulfillment set to a stock location.
     *
     * @param string $id The stock location's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateStockLocationFulfillmentSet $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentSetsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentSetsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentSetsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentSetsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdFulfillmentSetsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postStockLocationsIdFulfillmentSets(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateStockLocationFulfillmentSet $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostStockLocationsIdFulfillmentSets($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Manage the sales channels in a stock location by adding or removing them.
     *
     * @param string $id The stock location's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationsIdSalesChannelsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdSalesChannelsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdSalesChannelsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdSalesChannelsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdSalesChannelsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStockLocationsIdSalesChannelsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStockLocationResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postStockLocationsIdSalesChannels(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminStockLocationsIdSalesChannelsPostBody $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostStockLocationsIdSalesChannels($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Retrieve a list of store credit accounts. The store credit accounts can be filtered by fields such as `id`. The store credit accounts can also be sorted or paginated.
    *
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    The fields and relations to retrieve separated by commas.
    
    Learn more in the [API reference](https://docs.medusajs.com/api/store#select-fields-and-relations).
    *     @var string $id Filter by the store credit account's ID.
    *     @var string $customer_id Filter by customer ID(s) to retrieve their store credit accounts.
    *     @var string $transaction_group_id Filter by the associated transaction group's ID.
    *     @var string $currency_code Filter by currency code(s) to retrieve store credit accounts in specific currencies.
    *     @var string $created_at Filter by a store credit account's creation date.
    *     @var string $updated_at Filter by a store credit account's update date.
    *     @var array $$and An array of filters to apply on the entity, where each item in the array is joined with an "and" condition.
    *     @var array $$or An array of filters to apply on the entity, where each item in the array is joined with an "or" condition.
    *     @var float $limit Limit the number of items returned in the list.
    *     @var float $offset The number of items to skip when retrieving a list.
    *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getStoreCreditAccounts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetStoreCreditAccounts($queryParameters, $accept), $fetch);
    }
    /**
    * Create a store credit account.
    *
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateStoreCreditAccount $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoreCreditAccountsBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoreCreditAccountsNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoreCreditAccountsConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoreCreditAccountsUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoreCreditAccountsInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postStoreCreditAccounts(?\Gracious\MedusaApiClientBundle\Model\AdminCreateStoreCreditAccount $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostStoreCreditAccounts($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Retrieve a store credit account by its ID. You can expand the store credit account's relations or select the fields that should be returned.
    *
    * @param string $id The store credit account's ID.
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    The fields and relations to retrieve separated by commas.
    
    Learn more in the [API reference](https://docs.medusajs.com/api/store#select-fields-and-relations).
    *     @var string $id Filter by the store credit account's ID.
    *     @var string $customer_id Filter by customer ID(s) to retrieve their store credit accounts.
    *     @var string $transaction_group_id Filter by the associated transaction group's ID.
    *     @var string $currency_code Filter by currency code(s) to retrieve store credit accounts in specific currencies.
    *     @var string $created_at Filter by a store credit account's creation date.
    *     @var string $updated_at Filter by a store credit account's update date.
    *     @var array $$and An array of filters to apply on the entity, where each item in the array is joined with an "and" condition.
    *     @var array $$or An array of filters to apply on the entity, where each item in the array is joined with an "or" condition.
    *     @var float $limit Limit the number of items returned in the list.
    *     @var float $offset The number of items to skip when retrieving a list.
    *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getStoreCreditAccountsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetStoreCreditAccountsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of transactions in a store credit account. The transactions can be filtered by fields like FILTER FIELDS. The transactions can also be paginated.
     *
     * @param string $id The store credit account's ID.
     * @param array $queryParameters {
     *     @var string $id 
     *     @var string $transaction_group_id 
     *     @var string $created_at Filter by a transaction's creation date.
     *     @var string $updated_at Filter by a transaction's update date.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $fields Comma-separated fields that should be included in the returned data. If a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. Without prefix it will replace the entire default fields.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     *     @var string $q Search query to filter the transactions by their searchable fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdTransactionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdTransactionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdTransactionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdTransactionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoreCreditAccountsIdTransactionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTransactionsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getStoreCreditAccountsIdTransactions(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetStoreCreditAccountsIdTransactions($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of stores. The stores can be filtered by fields such as `id`. The stores can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter the store's searchable properties.
     *     @var string $id 
     *     @var string $name 
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStoreListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getStores(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetStores($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a store by its ID. You can expand the store's relations or select the fields that should be returned.
     *
     * @param string $id The store's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetStoresIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStoreResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getStoresId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetStoresId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a store's details.
     *
     * @param string $id The store's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateStore $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoresIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoresIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoresIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoresIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostStoresIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminStoreResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postStoresId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateStore $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostStoresId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * Retrieve a list of tax providers installed in the Medusa application through Tax Module Providers. The tax providers can be filtered by fields such as `id`. The tax providers can also be sorted or paginated.
    *
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    *     @var float $offset The number of items to skip when retrieving a list.
    *     @var float $limit Limit the number of items returned in the list.
    *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
    *     @var string $id 
    *     @var bool $is_enabled Filter by whether the tax provider is enabled.
    *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
    *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
    *     @var bool $with_deleted Whether to include deleted records in the result.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxProvidersBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxProvidersNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxProvidersConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxProvidersUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxProvidersInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxProvidersGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getTaxProviders(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetTaxProviders($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of tax rates. The tax rates can be filtered by fields such as `id`. The tax rates can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search terms to filter the tax rate's searchable properties.
     *     @var string $tax_region_id 
     *     @var string $is_default Filter by whether the tax rate is a default in its tax region.
     *     @var string $created_at Filter by a tax rate's creation date.
     *     @var string $updated_at Filter by a tax rate's update date.
     *     @var string $deleted_at Filter by a tax rate's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var string $service_zone_id Filter by a service zone's ID to retrieve its associated tax rates.
     *     @var string $shipping_profile_id Filter by a shipping profile's ID to retrieve its associated tax rates.
     *     @var string $provider_id Filter by a fulfillment provider's ID to retrieve its associated tax rates.
     *     @var string $shipping_option_type_id Filter by a shipping option type's ID to retrieve its associated tax rates.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRatesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxRates(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetTaxRates($queryParameters, $accept), $fetch);
    }
    /**
     * Create a tax rate.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRate $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postTaxRates(?\Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRate $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostTaxRates($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a tax rate.
     *
     * @param string $id The tax rate's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRateDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTaxRatesId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteTaxRatesId($id, $accept), $fetch);
    }
    /**
     * Retrieve a tax rate by its ID. You can expand the tax rate's relations or select the fields that should be returned.
     *
     * @param string $id The tax rate's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRatesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxRatesId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetTaxRatesId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a tax rate's details.
     *
     * @param string $id The tax rate's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRate $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postTaxRatesId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRate $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostTaxRatesId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Create a tax rule for a rate.
     *
     * @param string $id The tax rate's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRateRule $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdRulesBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdRulesNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdRulesConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdRulesUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRatesIdRulesInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postTaxRatesIdRules(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRateRule $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostTaxRatesIdRules($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Remove a tax rate's rule.
     *
     * @param string $id The tax rate's ID.
     * @param string $ruleId The tax rate rule's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdRulesRuleIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdRulesRuleIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdRulesRuleIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdRulesRuleIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRatesIdRulesRuleIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRatesIdRulesRuleIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTaxRatesIdRulesRuleId(string $id, string $ruleId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteTaxRatesIdRulesRuleId($id, $ruleId, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of tax regions. The tax regions can be filtered by fields such as `id`. The tax regions can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q Search term to filter a tax region's searchable properties.
     *     @var string $id 
     *     @var string $country_code 
     *     @var string $province_code 
     *     @var string $parent_id 
     *     @var string $created_by 
     *     @var string $created_at Filter by a tax region's creation date.
     *     @var string $updated_at Filter by a tax region's update date.
     *     @var string $deleted_at Filter by a tax region's deletion date.
     *     @var array $$and 
     *     @var array $$or 
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRegionsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxRegions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetTaxRegions($queryParameters, $accept), $fetch);
    }
    /**
     * Create a tax region.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRegion $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRegionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postTaxRegions(?\Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRegion $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostTaxRegions($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Delete a tax region.
     *
     * @param string $id The tax region's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRegionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRegionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRegionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRegionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteTaxRegionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRegionDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTaxRegionsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteTaxRegionsId($id, $accept), $fetch);
    }
    /**
     * Retrieve a tax region by its ID. You can expand the tax region's relations or select the fields that should be returned.
     *
     * @param string $id The tax region's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var string $province_code Filter by a tax region's province code.
     *     @var string $provider_id Filter by a tax provider ID to retrieve the tax regions using it.
     *     @var string $metadata Filter by a tax region's metadata. Refer to the [Object Query Parameter](https://docs.medusajs.com/api/admin#object) section to learn how to filter by object fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTaxRegionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRegionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getTaxRegionsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetTaxRegionsId($id, $queryParameters, $accept), $fetch);
    }
    /**
    * Update a tax region's details.
    *
    * @param string $id The tax region's ID.
    * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRegion $requestBody 
    * @param array $queryParameters {
    *     @var string $fields Comma-separated fields that should be included in the returned data.
    if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields.
    without prefix it will replace the entire default fields.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsIdBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsIdNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsIdConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsIdUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostTaxRegionsIdInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTaxRegionResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postTaxRegionsId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRegion $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostTaxRegionsId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of transaction groups. The transaction groups can be filtered by fields such as `id`. The transaction groups can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $id 
     *     @var string $code 
     *     @var string $created_at Filter by a transaction group's creation date.
     *     @var string $updated_at Filter by a transaction group's update date.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $fields Comma-separated fields that should be included in the returned data. If a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. Without prefix it will replace the entire default fields.
     *     @var array $$and Join query parameters with an AND condition. Each object's content is the same type as the expected query parameters.
     *     @var array $$or Join query parameters with an OR condition. Each object's content is the same type as the expected query parameters.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTransactionGroupsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTransactionGroupsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTransactionGroupsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTransactionGroupsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetTransactionGroupsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminTransactionGroupsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getTransactionGroups(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetTransactionGroups($queryParameters, $accept), $fetch);
    }
    /**
     * Upload files to the configured File Module Provider.
     *
     * @param null|mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFileListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postUploads($requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostUploads($requestBody, $accept), $fetch);
    }
    /**
     * Get a presigned URL for uploading a file to the configured File Module Provider. The presigned URL can be used to upload files directly to the third-party provider. This only works if your configured provider supports presigned URLs, such as the S3 provider.
     *
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUploadPreSignedUrl $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsPresignedUrlsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsPresignedUrlsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsPresignedUrlsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsPresignedUrlsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUploadsPresignedUrlsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminUploadPreSignedUrlResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postUploadsPresignedUrls(?\Gracious\MedusaApiClientBundle\Model\AdminUploadPreSignedUrl $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostUploadsPresignedUrls($requestBody, $accept), $fetch);
    }
    /**
     * Delete a file. Uses the installed file module provider to delete the file.
     *
     * @param string $id The file's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUploadsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUploadsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUploadsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUploadsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUploadsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminUploadsIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUploadsId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteUploadsId($id, $accept), $fetch);
    }
    /**
     * Retrieve an uploaded file by its ID. You can expand the file's relations or select the fields that should be returned.
     *
     * @param string $id The upload's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUploadsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUploadsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUploadsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUploadsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUploadsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminFileResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getUploadsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetUploadsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of users. The users can be filtered by fields such as `id`. The users can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $q The search term to filter the user's searchable properties.
     *     @var string $id 
     *     @var string $email Filter by an email.
     *     @var string $first_name Filter by a first name.
     *     @var string $last_name Filter by a last name.
     *     @var string $created_at Filter by a user's creation date.
     *     @var string $updated_at Filter by a user's update date.
     *     @var string $deleted_at Filter by a user's deletion date.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminUserListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getUsers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetUsers($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve the logged-in user's details.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersMeBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersMeNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersMeConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersMeUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersMeInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminUserResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersMe(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetUsersMe($queryParameters, $accept), $fetch);
    }
    /**
     * Delete a user.
     *
     * @param string $id The user's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUsersIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUsersIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUsersIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUsersIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteUsersIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminUserDeleteResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUsersId(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteUsersId($id, $accept), $fetch);
    }
    /**
     * Retrieve a user by its ID. You can expand the user's relations or select the fields that should be returned.
     *
     * @param string $id The user's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetUsersIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminUserResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetUsersId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Update a user's details.
     *
     * @param string $id The user's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminUpdateUser $requestBody 
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUsersIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUsersIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUsersIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUsersIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostUsersIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminUserResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postUsersId(string $id, ?\Gracious\MedusaApiClientBundle\Model\AdminUpdateUser $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostUsersId($id, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a list of workflows executions. The workflows executions can be filtered by fields such as `id`. The workflows executions can also be sorted or paginated.
     *
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     *     @var float $offset The number of items to skip when retrieving a list.
     *     @var float $limit Limit the number of items returned in the list.
     *     @var string $order The field to sort the data by. By default, the sort order is ascending. To change the order to descending, prefix the field name with `-`.
     *     @var string $transaction_id 
     *     @var string $workflow_id 
     *     @var string $q Search query to filter by a workflow execution's searchable fields.
     *     @var bool $with_deleted Whether to include deleted records in the result.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkflowsExecutions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetWorkflowsExecutions($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieve a workflows execution by its ID. You can expand the workflows execution's relations or select the fields that should be returned.
     *
     * @param string $id The workflows execution's ID.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkflowsExecutionsId(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetWorkflowsExecutionsId($id, $queryParameters, $accept), $fetch);
    }
    /**
     * Execute a workflow by its ID.
     *
     * @param string $workflowId The workflow's ID.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsRun $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdRunInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postWorkflowsExecutionsWorkflowIdRun(string $workflowId, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsRun $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostWorkflowsExecutionsWorkflowIdRun($workflowId, $requestBody, $accept), $fetch);
    }
    /**
     * Set the status of a step in a workflow's execution as failed. This is useful for long-running workflows.
     *
     * @param string $workflowId The workflows execution's workflow id.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsFailureBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsFailureNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsFailureConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsFailureUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsFailureInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdStepsFailurePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postWorkflowsExecutionsWorkflowIdStepsFailure(string $workflowId, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostWorkflowsExecutionsWorkflowIdStepsFailure($workflowId, $requestBody, $accept), $fetch);
    }
    /**
     * Set the status of a step in a workflow's execution as successful. This is useful for long-running workflows.
     *
     * @param string $workflowId The workflows execution's workflow id.
     * @param null|\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsSuccessBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsSuccessNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsSuccessConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsSuccessUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostWorkflowsExecutionsWorkflowIdStepsSuccessInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdStepsSuccessPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postWorkflowsExecutionsWorkflowIdStepsSuccess(string $workflowId, ?\Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostWorkflowsExecutionsWorkflowIdStepsSuccess($workflowId, $requestBody, $accept), $fetch);
    }
    /**
    * Subscribe to a workflow's execution to receive real-time information about its steps, status, and data.
    This route returns an event stream that you can consume using the [EventSource API](https://developer.mozilla.org/en-US/docs/Web/API/EventSource).
    
    *
    * @param string $workflowId The workflows execution's workflow id.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header text/event-stream|application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdSubscribeBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdSubscribeNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdSubscribeConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdSubscribeUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdSubscribeInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getWorkflowsExecutionsWorkflowIdSubscribe(string $workflowId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetWorkflowsExecutionsWorkflowIdSubscribe($workflowId, $accept), $fetch);
    }
    /**
     * Get the details of the workflow's execution.
     *
     * @param string $workflowId The workflows execution's workflow id.
     * @param string $transactionId The workflows execution's transaction id.
     * @param array $queryParameters {
     *     @var string $fields Comma-separated fields that should be included in the returned data. if a field is prefixed with `+` it will be added to the default fields, using `-` will remove it from the default fields. without prefix it will replace the entire default fields.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkflowsExecutionsWorkflowIdTransactionId(string $workflowId, string $transactionId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetWorkflowsExecutionsWorkflowIdTransactionId($workflowId, $transactionId, $queryParameters, $accept), $fetch);
    }
    /**
    * Subscribe to a step in a workflow's execution to receive real-time information about its status and data.
    This route returns an event stream that you can consume using the [EventSource API](https://developer.mozilla.org/en-US/docs/Web/API/EventSource).
    
    *
    * @param string $workflowId The workflows execution's workflow id.
    * @param string $transactionId The workflows execution's transaction id.
    * @param string $stepId The workflows execution's step id.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header text/event-stream|application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribeInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribe(string $workflowId, string $transactionId, string $stepId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\GetWorkflowsExecutionsWorkflowIdTransactionIdStepIdSubscribe($workflowId, $transactionId, $stepId, $accept), $fetch);
    }
    /**
     * Deletes the cookie session ID previously set for authentication.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSessionBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSessionNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSessionConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSessionUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\DeleteSessionInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AuthSessionDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSession(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\DeleteSession($accept), $fetch);
    }
    /**
     * Set the cookie session ID of an admin user. The admin must be previously authenticated with the `/auth/user/{provider}` API route first, as the JWT token is required in the header of the request.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSessionBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSessionNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSessionConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSessionUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostSessionInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AuthAdminSessionResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postSession(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostSession($accept), $fetch);
    }
    /**
     * Refresh the authentication token of a user. This is useful after authenticating a user with a third-party service to ensure the token holds the new user's details, or when you don't want users to re-login every day.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostAdminAuthTokenRefreshBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostAdminAuthTokenRefreshNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostAdminAuthTokenRefreshConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostAdminAuthTokenRefreshUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostAdminAuthTokenRefreshInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AuthResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAdminAuthTokenRefresh(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostAdminAuthTokenRefresh($accept), $fetch);
    }
    /**
    * Authenticate a user and receive the JWT token to be used in the header of subsequent requests.
    
    When used with a third-party provider, such as Google, the request returns a `location` property. You redirect to the specified URL in your frontend to continue authentication with the third-party service.
    
    *
    * @param string $authProvider The provider used for authentication.
    * @param null|\stdClass $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postActorTypeAuthProvider(string $authProvider, ?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostActorTypeAuthProvider($authProvider, $requestBody, $accept), $fetch);
    }
    /**
    * This API route is used by your dashboard or frontend application when a third-party provider redirects to it after authentication. It validates the authentication with the third-party provider and, if successful, returns an authentication token. All query parameters received from the third-party provider, such as `code`, `state`, and `error`, must be passed as query parameters to this route.
    
    You can decode the JWT token using libraries like [react-jwt](https://www.npmjs.com/package/react-jwt) in the frontend. If the decoded data doesn't  have an `actor_id` property, then you must create a user, typically using the Accept Invite route passing the token in the request's Authorization header.
    
    *
    * @param string $authProvider The provider used for authentication.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderCallbackBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderCallbackNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderCallbackConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderCallbackUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderCallbackInternalServerErrorException
    *
    * @return null|\Gracious\MedusaApiClientBundle\Model\AuthResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postActorTypeAuthProviderCallback(string $authProvider, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostActorTypeAuthProviderCallback($authProvider, $accept), $fetch);
    }
    /**
     * This API route retrieves a registration JWT token of a user that hasn't been registered yet. The token is used in the header of requests that create a user, such as the Accept Invite API route.
     *
     * @param string $authProvider The provider used for authentication.
     * @param null|\stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderRegisterBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderRegisterNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderRegisterConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderRegisterUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderRegisterInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AuthResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postActorTypeAuthProviderRegister(string $authProvider, ?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostActorTypeAuthProviderRegister($authProvider, $requestBody, $accept), $fetch);
    }
    /**
    * Generate a reset password token for an admin user. This API route doesn't reset the admin's password or send them the reset instructions in a notification.
    
    Instead, This API route emits the `auth.password_reset` event, passing it the token as a payload. You can listen to that event in a subscriber as explained in [this guide](https://docs.medusajs.com/resources/commerce-modules/auth/reset-password), then send the user a notification. The notification is sent using a [Notification Module Provider](https://docs.medusajs.com/resources/infrastructure-modules/notification), and it should have the URL to reset the password in the Medusa Admin dashboard, such as `http://localhost:9000/app/reset-password?token=123`.
    
    
    Use the generated token to update the user's password using the [Reset Password API route](https://docs.medusajs.com/api/admin#auth_postactor_typeauth_providerupdate).
    
    *
    * @param string $authProvider The provider used for authentication.
    * @param null|\stdClass $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|text/plain
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderResetPasswordBadRequestException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderResetPasswordNotFoundException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderResetPasswordConflictException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderResetPasswordUnprocessableEntityException
    * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderResetPasswordInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postActorTypeAuthProviderResetPassword(string $authProvider, ?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostActorTypeAuthProviderResetPassword($authProvider, $requestBody, $accept), $fetch);
    }
    /**
     * Reset an admin user's password using a reset-password token generated with the [Generate Reset Password Token API route](https://docs.medusajs.com/api/admin#auth_postactor_typeauth_providerresetpassword). You pass the token as a bearer token in the request's Authorization header.
     *
     * @param string $authProvider The provider used for authentication.
     * @param null|\stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|text/plain
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderUpdateBadRequestException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderUpdateNotFoundException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderUpdateConflictException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderUpdateUnprocessableEntityException
     * @throws \Gracious\MedusaApiClientBundle\Exception\PostActorTypeAuthProviderUpdateInternalServerErrorException
     *
     * @return null|\Gracious\MedusaApiClientBundle\Model\AuthUserAuthProviderUpdatePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postActorTypeAuthProviderUpdate(string $authProvider, ?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Gracious\MedusaApiClientBundle\Endpoint\PostActorTypeAuthProviderUpdate($authProvider, $requestBody, $accept), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('http://localhost');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Gracious\MedusaApiClientBundle\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}