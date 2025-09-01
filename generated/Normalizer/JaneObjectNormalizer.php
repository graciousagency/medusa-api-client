<?php

namespace Gracious\MedusaApiClientBundle\Normalizer;

use Gracious\MedusaApiClientBundle\Runtime\Normalizer\CheckArray;
use Gracious\MedusaApiClientBundle\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderItems::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminAddDraftOrderItemsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderItemsItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminAddDraftOrderItemsItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderPromotions::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminAddDraftOrderPromotionsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminAddDraftOrderShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminApiKey::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminApiKeyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminApiKeyResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminApiKeyResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminApplicationMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminApplicationMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchCreateInventoryItemsLocationLevels::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchCreateInventoryItemsLocationLevelsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevel::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchInventoryItemLocationsLevelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevelCreateItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchInventoryItemLocationsLevelCreateItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevelUpdateItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchInventoryItemLocationsLevelUpdateItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevels::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchInventoryItemsLocationLevelsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevelsResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchInventoryItemsLocationLevelsResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchProductRequest::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchProductRequestNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchProductResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchProductResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchProductResponseDeleted::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchProductResponseDeletedNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantRequest::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchProductVariantRequestNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchProductVariantResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantResponseDeleted::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchProductVariantResponseDeletedNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateInventoryItemsLocationLevels::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchUpdateInventoryItemsLocationLevelsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchUpdateProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductImagesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchUpdateProductImagesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductCategoriesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchUpdateProductCategoriesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductTagsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchUpdateProductTagsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductSalesChannelsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchUpdateProductSalesChannelsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminBatchUpdateProductVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaign::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignBudget::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignBudgetNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminClaim::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminClaimNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminClaimDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminClaimDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminClaimListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminClaimListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminClaimOrderResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminClaimOrderResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminClaimPreviewResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminClaimRequestResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminClaimRequestResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminClaimResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminClaimResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminClaimReturnPreviewResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminClaimReturnPreviewResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCollection::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCollectionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCollectionDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCollectionDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCollectionListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCollectionListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCollectionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCollectionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateApiKey::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateApiKeyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateCustomerGroup::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateCustomerGroupNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillment::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateFulfillmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentDeliveryAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateFulfillmentDeliveryAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateFulfillmentItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentLabelsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateFulfillmentLabelsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentSetServiceZones::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateFulfillmentSetServiceZonesNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateGiftCardParams::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateGiftCardParamsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateInventoryItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateInventoryItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateInventoryLocationLevel::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateInventoryLocationLevelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateOrderCreditLines::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateOrderCreditLinesNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentCapture::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreatePaymentCaptureNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentCollection::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreatePaymentCollectionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentRefund::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreatePaymentRefundNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreatePriceList::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreatePriceListNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreatePriceListPricesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreatePriceListPricesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreatePricePreference::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreatePricePreferenceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductImagesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductImagesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductCategoriesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductCategoriesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductTagsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductTagsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductSalesChannelsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductSalesChannelsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductCategory::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductCategoryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductTag::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductTagNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductType::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariantInventoryKit::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductVariantInventoryKitNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariantPrice::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductVariantPriceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariantPriceRules::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateProductVariantPriceRulesNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreatePromotionRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreatePromotionRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateRefundReason::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateRefundReasonNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateRegion::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateRegionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateReservation::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateReservationNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateReturnReason::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateReturnReasonNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateSalesChannel::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateSalesChannelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateShipment::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateShipmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateShipmentLabelsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateShipmentLabelsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateShippingOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateShippingOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateShippingOptionRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateShippingOptionRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateShippingOptionType::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateShippingOptionTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateShippingProfile::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateShippingProfileNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateStockLocation::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateStockLocationNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateStockLocationFulfillmentSet::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateStockLocationFulfillmentSetNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateStoreCreditAccount::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateStoreCreditAccountNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRate::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateTaxRateNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRateRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateTaxRateRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRegion::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateTaxRegionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRegionDefaultTaxRate::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateTaxRegionDefaultTaxRateNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateVariantInventoryItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateVariantInventoryItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateWorkflowsAsyncResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsRun::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCreateWorkflowsRunNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCurrency::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCurrencyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCurrencyListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCurrencyListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCurrencyResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCurrencyResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomer::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerAddressResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerAddressResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroup::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerGroupNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerGroupResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerInGroupFilters::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerInGroupFiltersNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerInGroupFiltersCreatedAt::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerInGroupFiltersCreatedAtNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerInGroupFiltersUpdatedAt::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerInGroupFiltersUpdatedAtNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerInGroupFiltersDeletedAt::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerInGroupFiltersDeletedAtNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDeletePaymentCollectionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDeletePaymentCollectionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrder::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrderListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreview::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrderPreviewNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrderPreviewItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewShippingMethodsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrderPreviewShippingMethodsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrderPreviewResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrderResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExchange::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExchangeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExchangeDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExchangeDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExchangeOrderResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExchangeOrderResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExchangePreviewResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExchangeRequestResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExchangeRequestResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExchangeResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExchangeResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExchangeReturnResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExportProductResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExportProductResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFile::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFileNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFileListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFileListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFileResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFileResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillment::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentLabel::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentLabelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProvider::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentProviderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProviderListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentProviderListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProviderOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentProviderOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProviderOptionsListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentProviderOptionsListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSet::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentSetNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSetDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentSetDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSetResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminFulfillmentSetResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminGeoZone::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminGeoZoneNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminGiftCard::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminGiftCardNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminGiftCardResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminGiftCardResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminGiftCardsResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminGiftCardsResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminImportProductRequest::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminImportProductRequestNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminImportProductResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminImportProductResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminImportProductResponseSummary::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminImportProductResponseSummaryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminImportProducts::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminImportProductsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInventoryItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInventoryItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInventoryItemResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInventoryLevel::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInventoryLevelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInvite::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInviteNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInviteAccept::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInviteAcceptNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInviteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInviteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminLinkPriceListProducts::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminLinkPriceListProductsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminMarkPaymentCollectionPaid::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminMarkPaymentCollectionPaidNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminNotification::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminNotificationNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminNotificationListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminNotificationListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminNotificationResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminNotificationResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrder::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderChange::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderChangeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderChangeAction::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderChangeActionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderChangesResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderChangesResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderEditPreviewResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderEditResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderEditResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderFulfillment::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderFulfillmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderItemHistory::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderItemHistoryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderItemHistoryVersion::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderItemHistoryVersionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderLineItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderLineItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderPreview::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderPreviewNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderPreviewItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderPreviewItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderPreviewShippingMethodsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderPreviewShippingMethodsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderPreviewResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderPreviewResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderReturnResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderReturnResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPayment::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPaymentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPaymentCollection::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPaymentCollectionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPaymentCollectionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPaymentCollectionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPaymentProvider::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPaymentProviderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPaymentResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPaymentResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPaymentSession::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPaymentSessionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPlugin::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPluginNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPluginsListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPluginsListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostCancelClaimReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostCancelClaimReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostCancelExchangeReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostCancelExchangeReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostCancelReturnReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostCancelReturnReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostClaimItemsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostClaimItemsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostClaimItemsReqSchemaItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostClaimItemsReqSchemaItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsAddItemsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostClaimsAddItemsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsAddItemsReqSchemaItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostClaimsAddItemsReqSchemaItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsItemsActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostClaimsItemsActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostClaimsShippingActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostClaimsShippingReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostExchangesAddItemsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchemaItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostExchangesAddItemsReqSchemaItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesItemsActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostExchangesItemsActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesRequestItemsReturnActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostExchangesRequestItemsReturnActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostExchangesReturnRequestItemsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchemaItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostExchangesReturnRequestItemsReqSchemaItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostExchangesShippingActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostExchangesShippingReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderClaimsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderClaimsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsAddItemsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderEditsAddItemsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsAddItemsReqSchemaItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderEditsAddItemsReqSchemaItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsItemsActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderEditsItemsActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderEditsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsShippingActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderEditsShippingActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsShippingReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderEditsShippingReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsUpdateItemQuantityReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderEditsUpdateItemQuantityReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostOrderExchangesReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostOrderExchangesReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReceiveReturnsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReceiveReturnsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsConfirmRequestReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsConfirmRequestReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsDismissItemsActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsDismissItemsActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsReceiveItemsActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsReceiveItemsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsReqSchemaItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsReceiveItemsReqSchemaItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsRequestItemsActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsRequestItemsReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsReqSchemaItemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsRequestItemsReqSchemaItemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReturnReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsReturnReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingActionReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsShippingActionReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingReqSchema::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPostReturnsShippingReqSchemaNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPrice::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceList::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListBatchResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListBatchResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListBatchResponseDeleted::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListBatchResponseDeletedNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListPrice::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListPriceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPricePreference::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPricePreferenceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPricePreferenceDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPricePreferenceListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPricePreferenceResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductCategory::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductCategoryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductCategoryDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductCategoryDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductCategoryListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductCategoryListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductCategoryResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductCategoryResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductImage::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductImageNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductOptionDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductOptionDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductOptionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductOptionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductOptionValue::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductOptionValueNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductTag::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductTagNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductTagDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductTagDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductTagListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductTagListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductTagResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductTagResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductType::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductTypeDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductTypeDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductTypeListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductTypeListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductTypeResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductTypeResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryBatchResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantInventoryBatchResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryItemLink::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantInventoryItemLinkNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLink::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantInventoryLinkNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantInventoryLinkProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkInventory::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantInventoryLinkInventoryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantInventoryLinkDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotion::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRedeemGiftCard::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRedeemGiftCardNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRefund::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRefundNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRefundReason::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRefundReasonNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRegion::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRegionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRegionCountry::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRegionCountryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRegionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRegionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRemoveDraftOrderPromotions::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRemoveDraftOrderPromotionsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReservation::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReservationNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReservationResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReservationResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturn::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnPreviewResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnReason::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnReasonNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnReasonDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnReasonDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnReasonListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnReasonListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnReasonResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnReasonResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRevokeApiKey::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRevokeApiKeyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRuleAttributeOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRuleAttributeOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRuleValueOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRuleValueOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminSalesChannel::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminSalesChannelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminSalesChannelDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminSalesChannelDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminSalesChannelResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminSalesChannelResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminServiceZone::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminServiceZoneNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminServiceZoneDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminServiceZoneDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminServiceZoneResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminServiceZoneResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionPrice::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionPriceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionPriceRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionPriceRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionType::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingProfile::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingProfileNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingProfileDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingProfileDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingProfileResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingProfileResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStockLocation::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStockLocationNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStockLocationAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStockLocationAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStockLocationDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStockLocationDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStockLocationListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStockLocationListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStockLocationResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStockLocationResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStore::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStoreNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccount::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStoreCreditAccountNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStoreCreditAccountResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStoreCreditAccountsResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStoreCurrency::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStoreCurrencyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStoreListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStoreListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStoreResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStoreResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxProvider::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxProviderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRate::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRateNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRateDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRateDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRateResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRateResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRateRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRateRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRegion::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRegionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRegionDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRegionDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRegionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRegionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTransaction::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTransactionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTransactionGroup::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTransactionGroupNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTransactionGroupsResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTransactionGroupsResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTransactionsResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTransactionsResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTransferOrder::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTransferOrderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateApiKey::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateApiKeyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateCustomerGroup::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateCustomerGroupNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrder::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateDraftOrderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateDraftOrderShippingAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderBillingAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateDraftOrderBillingAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderActionShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateDraftOrderActionShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateDraftOrderItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateDraftOrderShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateFulfillmentSetServiceZones::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateFulfillmentSetServiceZonesNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateGiftCardParams::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateGiftCardParamsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateInventoryItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryLocationLevel::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateInventoryLocationLevelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateOrder::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateOrderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateOrderShippingAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateOrderShippingAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateOrderBillingAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateOrderBillingAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdatePaymentRefundReason::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdatePaymentRefundReasonNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdatePriceList::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdatePriceListNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdatePricePreference::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdatePricePreferenceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductImagesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductImagesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductCategoriesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductCategoriesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductTagsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductTagsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductSalesChannelsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductSalesChannelsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductCategory::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductCategoryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductTag::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductTagNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductType::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateProductVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdatePromotionRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdatePromotionRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateRegion::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateRegionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateReservation::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateReservationNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateReturnReason::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateReturnReasonNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateSalesChannel::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateSalesChannelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOption::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateShippingOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOptionType::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateShippingOptionTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOptionRule::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateShippingOptionRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingProfile::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateShippingProfileNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateStockLocation::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateStockLocationNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateStockLocationAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateStockLocationAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateStore::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateStoreNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateStoreSupportedCurrenciesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateStoreSupportedCurrenciesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRate::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateTaxRateNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRateRulesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateTaxRateRulesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRegion::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateTaxRegionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateUser::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateUserNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpdateVariantInventoryItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpdateVariantInventoryItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUploadPreSignedUrl::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUploadPreSignedUrlNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUploadPreSignedUrlResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUploadPreSignedUrlResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUpsertStockLocationAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUpsertStockLocationAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUser::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUserNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUserDeleteResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUserDeleteResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUserListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUserListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUserResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUserResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecution::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowExecutionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecution::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowExecutionExecutionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowExecutionExecutionStepsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemInvoke::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowExecutionExecutionStepsItemInvokeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemDefinition::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowExecutionExecutionStepsItemDefinitionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemCompensate::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowExecutionExecutionStepsItemCompensateNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowExecutionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\ApiKeyResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\ApiKeyResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AuthAdminSessionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AuthAdminSessionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AuthCallbackResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AuthCallbackResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AuthResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AuthResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AuthStoreSessionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\AuthStoreSessionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseCalculatedPriceSet::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseCalculatedPriceSetNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseCapture::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseCaptureNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseCart::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseCartNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseCartLineItem::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseCartLineItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseCartShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseCartShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseClaimItem::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseClaimItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseClaimItemRawQuantity::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseClaimItemRawQuantityNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseCollection::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseCollectionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseExchangeItem::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseExchangeItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseFulfillmentProvider::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseFulfillmentProviderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseLineItemAdjustment::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseLineItemAdjustmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseLineItemTaxLine::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseLineItemTaxLineNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrder::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderFulfillment::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderFulfillmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderItemDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderItemDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderLineItem::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderLineItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderLineItemAdjustment::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderLineItemAdjustmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderLineItemTaxLine::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderLineItemTaxLineNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderShippingDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingMethodAdjustment::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderShippingMethodAdjustmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingMethodTaxLine::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderShippingMethodTaxLineNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderSummary::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderSummaryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseOrderTransaction::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseOrderTransactionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BasePayment::class => \Gracious\MedusaApiClientBundle\Normalizer\BasePaymentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BasePaymentCollection::class => \Gracious\MedusaApiClientBundle\Normalizer\BasePaymentCollectionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BasePaymentProvider::class => \Gracious\MedusaApiClientBundle\Normalizer\BasePaymentProviderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BasePaymentSession::class => \Gracious\MedusaApiClientBundle\Normalizer\BasePaymentSessionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseProductCategory::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseProductCategoryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseProductImage::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseProductImageNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseProductOption::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseProductOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseProductOptionValue::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseProductOptionValueNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseProductTag::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseProductTagNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseProductType::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseProductTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseProductVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseProductVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BasePromotionRuleValue::class => \Gracious\MedusaApiClientBundle\Normalizer\BasePromotionRuleValueNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseRefund::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseRefundNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseRegion::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseRegionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseRegionCountry::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseRegionCountryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseRuleOperatorOptions::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseRuleOperatorOptionsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseShippingMethodAdjustment::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseShippingMethodAdjustmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\BaseShippingMethodTaxLine::class => \Gracious\MedusaApiClientBundle\Normalizer\BaseShippingMethodTaxLineNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\CampaignResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\CampaignResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\CampaignResponseBudget::class => \Gracious\MedusaApiClientBundle\Normalizer\CampaignResponseBudgetNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\CreateAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\CreateAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFilters::class => \Gracious\MedusaApiClientBundle\Normalizer\CustomerGroupInCustomerFiltersNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersCreatedAt::class => \Gracious\MedusaApiClientBundle\Normalizer\CustomerGroupInCustomerFiltersCreatedAtNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersUpdatedAt::class => \Gracious\MedusaApiClientBundle\Normalizer\CustomerGroupInCustomerFiltersUpdatedAtNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersDeletedAt::class => \Gracious\MedusaApiClientBundle\Normalizer\CustomerGroupInCustomerFiltersDeletedAtNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\Error::class => \Gracious\MedusaApiClientBundle\Normalizer\ErrorNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\InventoryLevel::class => \Gracious\MedusaApiClientBundle\Normalizer\InventoryLevelNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\Order::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderSummary::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderSummaryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderChange::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderChangeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderChangeAction::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderChangeActionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderClaim::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderClaimNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderCreditLine::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderCreditLineNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderExchange::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderExchangeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderItem::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderLineItem::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderLineItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderLineItemAdjustment::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderLineItemAdjustmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderLineItemTaxLine::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderLineItemTaxLineNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderReturnItem::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderReturnItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderShippingMethodAdjustment::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderShippingMethodAdjustmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderShippingMethodTaxLine::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderShippingMethodTaxLineNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\OrderTransaction::class => \Gracious\MedusaApiClientBundle\Normalizer\OrderTransactionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\RefundReason::class => \Gracious\MedusaApiClientBundle\Normalizer\RefundReasonNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\RefundReasonResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\RefundReasonResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\_Return::class => \Gracious\MedusaApiClientBundle\Normalizer\ReturnNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreAcceptOrderTransfer::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreAcceptOrderTransferNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreAddCartLineItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreAddCartLineItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreAddCartShippingMethods::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreAddCartShippingMethodsNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreAddGiftCardToCart::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreAddGiftCardToCartNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreAddStoreCreditsToCart::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreAddStoreCreditsToCartNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPrice::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCalculatedPriceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPriceCalculatedPrice::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCalculatedPriceCalculatedPriceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPriceOriginalPrice::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCalculatedPriceOriginalPriceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCart::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartAddPromotion::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartAddPromotionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartLineItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartLineItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartLineItemTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartLineItemTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartLineItemAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartLineItemAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartPromotion::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartPromotionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartPromotionApplicationMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartPromotionApplicationMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartRemovePromotion::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartRemovePromotionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartShippingMethodTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartShippingMethodTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartShippingMethodAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartShippingMethodAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOption::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartShippingOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOptionProvider::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartShippingOptionProviderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOptionType::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCartShippingOptionTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCollection::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCollectionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCollectionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCollectionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCreateCart::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCreateCartNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCreateCustomer::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCreateCustomerNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCreateCustomerAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCreateCustomerAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCreatePaymentCollection::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCreatePaymentCollectionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCreateReturn::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCreateReturnNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCreateReturnItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCreateReturnItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCreateReturnShipping::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCreateReturnShippingNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCurrency::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCurrencyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCurrencyListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCurrencyListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCurrencyResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCurrencyResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCustomer::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCustomerNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCustomerAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCustomerAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCustomerAddressListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCustomerAddressListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCustomerAddressResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCustomerAddressResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreCustomerResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreCustomerResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreDeclineOrderTransferRequest::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreDeclineOrderTransferRequestNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreGiftCard::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreGiftCardNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreGiftCardResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreGiftCardResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreInitializePaymentSession::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreInitializePaymentSessionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrder::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderFulfillment::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderFulfillmentNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemTaxLinesItemitemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemTaxLinesItemitemVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemTaxLinesItemitemProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemTaxLinesItemitemTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemTaxLinesItemitemAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemTaxLinesItemitemDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemAdjustmentsItemitemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemAdjustmentsItemitemVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemAdjustmentsItemitemProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemAdjustmentsItemitemTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemAdjustmentsItemitemAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemAdjustmentsItemitemDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemDetailitemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemDetailitemVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemDetailitemProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemDetailitemTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemDetailitemAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderLineItemDetailitemDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodTaxLinesItemshippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodTaxLinesItemshippingMethodAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodTaxLinesItemshippingMethodDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItemshippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodAdjustmentsItemshippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItemshippingMethodTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodAdjustmentsItemshippingMethodTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItemshippingMethodAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodAdjustmentsItemshippingMethodAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItemshippingMethodDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodAdjustmentsItemshippingMethodDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodDetailshippingMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodTaxLinesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodDetailshippingMethodTaxLinesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodAdjustmentsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodDetailshippingMethodAdjustmentsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodDetail::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreOrderShippingMethodDetailshippingMethodDetailNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StorePaymentCollection::class => \Gracious\MedusaApiClientBundle\Normalizer\StorePaymentCollectionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StorePaymentCollectionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StorePaymentCollectionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StorePaymentProvider::class => \Gracious\MedusaApiClientBundle\Normalizer\StorePaymentProviderNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StorePaymentSession::class => \Gracious\MedusaApiClientBundle\Normalizer\StorePaymentSessionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StorePrice::class => \Gracious\MedusaApiClientBundle\Normalizer\StorePriceNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StorePriceRule::class => \Gracious\MedusaApiClientBundle\Normalizer\StorePriceRuleNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProduct::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductCategory::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductCategoryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductCategoryListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductCategoryListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductCategoryResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductCategoryResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductImage::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductImageNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductOption::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductOptionValue::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductOptionValueNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductTag::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductTagNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductTagListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductTagListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductTagResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductTagResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductType::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductTypeListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductTypeListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductTypeResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductTypeResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreProductVariant::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreProductVariantNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreRegion::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreRegionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreRegionCountry::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreRegionCountryNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreRemoveGiftCardFromCart::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreRemoveGiftCardFromCartNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreRequestOrderTransfer::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreRequestOrderTransferNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreReturn::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreReturnNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreReturnItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreReturnItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreReturnReason::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreReturnReasonNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreReturnReasonResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreReturnReasonResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreReturnResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreReturnResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreShippingOption::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreShippingOptionNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreShippingOptionListResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreShippingOptionListResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreShippingOptionResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreShippingOptionResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreShippingOptionType::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreShippingOptionTypeNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreStoreCreditAccount::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreStoreCreditAccountNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreStoreCreditAccountResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreStoreCreditAccountResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreStoreCreditAccountsResponse::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreStoreCreditAccountsResponseNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreTransactionGroup::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreTransactionGroupNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreUpdateCartLineItem::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreUpdateCartLineItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreUpdateCustomer::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreUpdateCustomerNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\StoreUpdateCustomerAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\StoreUpdateCustomerAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\UpdateAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\UpdateAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\UpdateCartData::class => \Gracious\MedusaApiClientBundle\Normalizer\UpdateCartDataNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContext::class => \Gracious\MedusaApiClientBundle\Normalizer\WorkflowExecutionContextNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextData::class => \Gracious\MedusaApiClientBundle\Normalizer\WorkflowExecutionContextDataNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextDataInvokeItem::class => \Gracious\MedusaApiClientBundle\Normalizer\WorkflowExecutionContextDataInvokeItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextDataInvokeItemOutput::class => \Gracious\MedusaApiClientBundle\Normalizer\WorkflowExecutionContextDataInvokeItemOutputNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextErrorsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\WorkflowExecutionContextErrorsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminApiKeysGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminApiKeysGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminApiKeysIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminApiKeysIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminApiKeysIdSalesChannelsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminApiKeysIdSalesChannelsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsPostBodybudget::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsPostBodybudgetNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsPostBodypromotionsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsPostBodypromotionsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsIdPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBodybudget::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsIdPostBodybudgetNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBodypromotionsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsIdPostBodypromotionsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPromotionsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCampaignsIdPromotionsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCollectionsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCollectionsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCollectionsIdPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCollectionsIdPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCollectionsIdProductsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCollectionsIdProductsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerGroupsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerGroupsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsIdCustomersPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomerGroupsIdCustomersPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersIdPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersIdAddressesGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersIdAddressesPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesAddressIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersIdAddressesAddressIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesAddressIdPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersIdAddressesAddressIdPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdCustomerGroupsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminCustomersIdCustomerGroupsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrdersPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodybillingAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrdersPostBodybillingAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyshippingAddress::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrdersPostBodyshippingAddressNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyitemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrdersPostBodyitemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyshippingMethodsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminDraftOrdersPostBodyshippingMethodsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminExchangesGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminExchangesGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInventoryItemsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInventoryItemsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdLocationLevelsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInventoryItemsIdLocationLevelsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdLocationLevelsLocationIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInventoryItemsIdLocationLevelsLocationIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInvitesGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInvitesGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInvitesPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInvitesPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminInvitesIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminInvitesIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrderEditsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrderEditsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdCompletePostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersIdCompletePostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersIdFulfillmentsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsPostBodyitemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersIdFulfillmentsPostBodyitemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdCancelPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersIdFulfillmentsFulfillmentIdCancelPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodyitemsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodyitemsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodylabelsItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodylabelsItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdLineItemsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminOrdersIdLineItemsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPaymentsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPaymentsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPaymentsPaymentProvidersGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPaymentsPaymentProvidersGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListsIdPricesBatchPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListsIdPricesBatchPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListsIdPricesBatchPostBodyCreateItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListsIdPricesBatchPostBodyCreateItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPriceListsIdPricesBatchPostBodyUpdateItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPriceListsIdPricesBatchPostBodyUpdateItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductCategoriesIdProductsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductCategoriesIdProductsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductVariantsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductVariantsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdOptionsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdOptionsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsOptionIdPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdOptionsOptionIdPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdVariantsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdVariantsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdVariantsInventoryItemsBatchPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyUpdateItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdVariantsInventoryItemsBatchPostBodyUpdateItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyDeleteItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdVariantsInventoryItemsBatchPostBodyDeleteItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsVariantIdPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminProductsIdVariantsVariantIdPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaign::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsPostBodycampaignNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaignBudget::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsPostBodycampaignBudgetNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsPostBodyapplicationMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethodTargetRulesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsPostBodyapplicationMethodTargetRulesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethodBuyRulesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsPostBodyapplicationMethodBuyRulesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyrulesItem::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsPostBodyrulesItemNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleAttributeOptionsRuleTypeGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsRuleAttributeOptionsRuleTypeGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleValueOptionsRuleTypeRuleAttributeIdGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsRuleValueOptionsRuleTypeRuleAttributeIdGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBodyapplicationMethod::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdPostBodyapplicationMethodNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdBuyRulesBatchPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdBuyRulesBatchPostResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostResponse200Deleted::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdBuyRulesBatchPostResponse200DeletedNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdRulesBatchPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdRulesBatchPostResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostResponse200Deleted::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdRulesBatchPostResponse200DeletedNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdTargetRulesBatchPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdTargetRulesBatchPostResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostResponse200Deleted::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdTargetRulesBatchPostResponse200DeletedNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRuleTypeGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminPromotionsIdRuleTypeGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRefundReasonsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRefundReasonsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRefundReasonsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRefundReasonsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRegionsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRegionsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminRegionsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminRegionsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReservationsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReservationsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReservationsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReservationsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnsIdReceiveDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnsIdReceiveDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminReturnsIdRequestDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminReturnsIdRequestDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminSalesChannelsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminSalesChannelsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminSalesChannelsIdProductsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminSalesChannelsIdProductsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionsIdRulesBatchPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionsIdRulesBatchPostResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostResponse200Deleted::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingOptionsIdRulesBatchPostResponse200DeletedNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminShippingProfilesGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminShippingProfilesGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStockLocationsIdFulfillmentProvidersPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStockLocationsIdFulfillmentProvidersPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminStockLocationsIdSalesChannelsPostBody::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminStockLocationsIdSalesChannelsPostBodyNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxProvidersGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxProvidersGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRatesGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRatesGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRatesIdRulesRuleIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRatesIdRulesRuleIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminTaxRegionsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminTaxRegionsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminUploadsIdDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminUploadsIdDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsGetResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowsExecutionsGetResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200AcknowledgementNormalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdStepsFailurePostResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowsExecutionsWorkflowIdStepsFailurePostResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdStepsSuccessPostResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AdminWorkflowsExecutionsWorkflowIdStepsSuccessPostResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AuthSessionDeleteResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AuthSessionDeleteResponse200Normalizer::class,
        
        \Gracious\MedusaApiClientBundle\Model\AuthUserAuthProviderUpdatePostResponse200::class => \Gracious\MedusaApiClientBundle\Normalizer\AuthUserAuthProviderUpdatePostResponse200Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Gracious\MedusaApiClientBundle\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderItems::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderItemsItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderPromotions::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminAddDraftOrderShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminApiKey::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminApiKeyResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminApplicationMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchCreateInventoryItemsLocationLevels::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevel::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevelCreateItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemLocationsLevelUpdateItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevels::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchInventoryItemsLocationLevelsResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchProductRequest::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchProductResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchProductResponseDeleted::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantRequest::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchProductVariantResponseDeleted::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateInventoryItemsLocationLevels::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductImagesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductCategoriesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductTagsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductSalesChannelsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminBatchUpdateProductVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaign::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignBudget::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminClaim::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminClaimDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminClaimListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminClaimOrderResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminClaimPreviewResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminClaimRequestResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminClaimResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminClaimReturnPreviewResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCollection::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCollectionDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCollectionListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCollectionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateApiKey::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateCustomerGroup::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillment::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentDeliveryAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentLabelsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateFulfillmentSetServiceZones::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateGiftCardParams::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateInventoryItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateInventoryLocationLevel::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateOrderCreditLines::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentCapture::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentCollection::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreatePaymentRefund::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreatePriceList::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreatePriceListPricesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreatePricePreference::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductImagesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductCategoriesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductTagsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductSalesChannelsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductCategory::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductTag::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductType::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariantInventoryKit::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariantPrice::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateProductVariantPriceRules::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreatePromotionRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateRefundReason::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateRegion::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateReservation::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateReturnReason::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateSalesChannel::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateShipment::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateShipmentLabelsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateShippingOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateShippingOptionRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateShippingOptionType::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateShippingProfile::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateStockLocation::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateStockLocationFulfillmentSet::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateStoreCreditAccount::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRate::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRateRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRegion::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateTaxRegionDefaultTaxRate::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateVariantInventoryItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsAsyncResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCreateWorkflowsRun::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCurrency::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCurrencyListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCurrencyResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomer::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerAddressResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroup::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerInGroupFilters::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerInGroupFiltersCreatedAt::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerInGroupFiltersUpdatedAt::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerInGroupFiltersDeletedAt::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDeletePaymentCollectionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrder::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreview::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewShippingMethodsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderPreviewResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrderResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExchange::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExchangeDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExchangeOrderResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExchangePreviewResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExchangeRequestResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExchangeResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExchangeReturnResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExportProductResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFile::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFileListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFileResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillment::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentLabel::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProvider::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProviderListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProviderOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentProviderOptionsListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSet::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSetDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminFulfillmentSetResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminGeoZone::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminGiftCard::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminGiftCardResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminGiftCardsResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminImportProductRequest::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminImportProductResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminImportProductResponseSummary::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminImportProducts::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInventoryItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInventoryLevel::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInvite::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInviteAccept::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInviteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminLinkPriceListProducts::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminMarkPaymentCollectionPaid::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminNotification::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminNotificationListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminNotificationResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrder::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderChange::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderChangeAction::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderChangesResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderEditPreviewResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderEditResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderFulfillment::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderItemHistory::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderItemHistoryVersion::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderLineItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderPreview::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderPreviewItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderPreviewShippingMethodsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderPreviewResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderReturnResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPayment::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPaymentCollection::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPaymentCollectionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPaymentProvider::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPaymentResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPaymentSession::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPlugin::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPluginsListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostCancelClaimReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostCancelExchangeReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostCancelReturnReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostClaimItemsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostClaimItemsReqSchemaItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsAddItemsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsAddItemsReqSchemaItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsItemsActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostClaimsShippingReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesAddItemsReqSchemaItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesItemsActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesRequestItemsReturnActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesReturnRequestItemsReqSchemaItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostExchangesShippingReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderClaimsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsAddItemsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsAddItemsReqSchemaItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsItemsActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsShippingActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsShippingReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderEditsUpdateItemQuantityReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostOrderExchangesReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReceiveReturnsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsConfirmRequestReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsDismissItemsActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReceiveItemsReqSchemaItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsRequestItemsReqSchemaItemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsReturnReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingActionReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPostReturnsShippingReqSchema::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPrice::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceList::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListBatchResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListBatchResponseDeleted::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListPrice::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPricePreference::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPricePreferenceResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductCategory::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductCategoryDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductCategoryListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductCategoryResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductImage::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductOptionDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductOptionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductOptionValue::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductTag::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductTagDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductTagListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductTagResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductType::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductTypeDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductTypeListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductTypeResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryBatchResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryItemLink::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLink::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkInventory::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantInventoryLinkDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotion::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRedeemGiftCard::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRefund::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRefundReason::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRegion::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRegionCountry::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRegionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRemoveDraftOrderPromotions::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReservation::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReservationResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturn::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnPreviewResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnReason::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnReasonDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnReasonListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnReasonResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRevokeApiKey::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRuleAttributeOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRuleValueOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminSalesChannel::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminSalesChannelDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminSalesChannelResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminServiceZone::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminServiceZoneDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminServiceZoneResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionPrice::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionPriceRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionType::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingProfile::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingProfileDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingProfileResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStockLocation::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStockLocationAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStockLocationDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStockLocationListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStockLocationResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStore::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccount::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStoreCreditAccountsResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStoreCurrency::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStoreListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStoreResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxProvider::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRate::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRateDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRateResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRateRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRegion::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRegionDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRegionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTransaction::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTransactionGroup::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTransactionGroupsResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTransactionsResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTransferOrder::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateApiKey::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateCustomerGroup::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrder::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderBillingAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderActionShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateDraftOrderShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateFulfillmentSetServiceZones::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateGiftCardParams::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateInventoryLocationLevel::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateOrder::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateOrderShippingAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateOrderBillingAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdatePaymentRefundReason::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdatePriceList::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdatePricePreference::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductImagesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductCategoriesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductTagsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductSalesChannelsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductCategory::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductTag::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductType::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateProductVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdatePromotionRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateRegion::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateReservation::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateReturnReason::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateSalesChannel::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOptionType::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingOptionRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateShippingProfile::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateStockLocation::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateStockLocationAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateStore::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateStoreSupportedCurrenciesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRate::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRateRulesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateTaxRegion::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateUser::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpdateVariantInventoryItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUploadPreSignedUrl::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUploadPreSignedUrlResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUpsertStockLocationAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUser::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUserDeleteResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUserListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUserResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecution::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecution::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemInvoke::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemDefinition::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionExecutionStepsItemCompensate::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowExecutionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\ApiKeyResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AuthAdminSessionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AuthCallbackResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AuthResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\AuthStoreSessionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseCalculatedPriceSet::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseCapture::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseCart::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseCartLineItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseCartShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseClaimItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseClaimItemRawQuantity::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseCollection::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseExchangeItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseFulfillmentProvider::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseLineItemAdjustment::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseLineItemTaxLine::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrder::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderFulfillment::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderItemDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderLineItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderLineItemAdjustment::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderLineItemTaxLine::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingMethodAdjustment::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderShippingMethodTaxLine::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderSummary::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseOrderTransaction::class => false,
            \Gracious\MedusaApiClientBundle\Model\BasePayment::class => false,
            \Gracious\MedusaApiClientBundle\Model\BasePaymentCollection::class => false,
            \Gracious\MedusaApiClientBundle\Model\BasePaymentProvider::class => false,
            \Gracious\MedusaApiClientBundle\Model\BasePaymentSession::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseProductCategory::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseProductImage::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseProductOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseProductOptionValue::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseProductTag::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseProductType::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseProductVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\BasePromotionRuleValue::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseRefund::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseRegion::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseRegionCountry::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseRuleOperatorOptions::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseShippingMethodAdjustment::class => false,
            \Gracious\MedusaApiClientBundle\Model\BaseShippingMethodTaxLine::class => false,
            \Gracious\MedusaApiClientBundle\Model\CampaignResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\CampaignResponseBudget::class => false,
            \Gracious\MedusaApiClientBundle\Model\CreateAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFilters::class => false,
            \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersCreatedAt::class => false,
            \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersUpdatedAt::class => false,
            \Gracious\MedusaApiClientBundle\Model\CustomerGroupInCustomerFiltersDeletedAt::class => false,
            \Gracious\MedusaApiClientBundle\Model\Error::class => false,
            \Gracious\MedusaApiClientBundle\Model\InventoryLevel::class => false,
            \Gracious\MedusaApiClientBundle\Model\Order::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderSummary::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderChange::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderChangeAction::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderClaim::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderCreditLine::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderExchange::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderLineItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderLineItemAdjustment::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderLineItemTaxLine::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderReturnItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderShippingMethodAdjustment::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderShippingMethodTaxLine::class => false,
            \Gracious\MedusaApiClientBundle\Model\OrderTransaction::class => false,
            \Gracious\MedusaApiClientBundle\Model\RefundReason::class => false,
            \Gracious\MedusaApiClientBundle\Model\RefundReasonResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\_Return::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreAcceptOrderTransfer::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreAddCartLineItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreAddCartShippingMethods::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreAddGiftCardToCart::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreAddStoreCreditsToCart::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPrice::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPriceCalculatedPrice::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCalculatedPriceOriginalPrice::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCart::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartAddPromotion::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartLineItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartLineItemTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartLineItemAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartPromotion::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartPromotionApplicationMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartRemovePromotion::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartShippingMethodTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartShippingMethodAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOptionProvider::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCartShippingOptionType::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCollection::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCollectionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCreateCart::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCreateCustomer::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCreateCustomerAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCreatePaymentCollection::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCreateReturn::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCreateReturnItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCreateReturnShipping::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCurrency::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCurrencyListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCurrencyResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCustomer::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCustomerAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCustomerAddressListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCustomerAddressResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreCustomerResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreDeclineOrderTransferRequest::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreGiftCard::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreGiftCardResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreInitializePaymentSession::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrder::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderFulfillment::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemTaxLinesItemitemDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemAdjustmentsItemitemDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderLineItemDetailitemDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodTaxLinesItemshippingMethodDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItemshippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItemshippingMethodTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItemshippingMethodAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodAdjustmentsItemshippingMethodDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodTaxLinesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodAdjustmentsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreOrderShippingMethodDetailshippingMethodDetail::class => false,
            \Gracious\MedusaApiClientBundle\Model\StorePaymentCollection::class => false,
            \Gracious\MedusaApiClientBundle\Model\StorePaymentCollectionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StorePaymentProvider::class => false,
            \Gracious\MedusaApiClientBundle\Model\StorePaymentSession::class => false,
            \Gracious\MedusaApiClientBundle\Model\StorePrice::class => false,
            \Gracious\MedusaApiClientBundle\Model\StorePriceRule::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProduct::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductCategory::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductCategoryListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductCategoryResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductImage::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductOptionValue::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductTag::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductTagListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductTagResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductType::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductTypeListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductTypeResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreProductVariant::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreRegion::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreRegionCountry::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreRemoveGiftCardFromCart::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreRequestOrderTransfer::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreReturn::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreReturnItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreReturnReason::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreReturnReasonResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreReturnResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreShippingOption::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreShippingOptionListResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreShippingOptionResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreShippingOptionType::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreStoreCreditAccount::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreStoreCreditAccountResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreStoreCreditAccountsResponse::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreTransactionGroup::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreUpdateCartLineItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreUpdateCustomer::class => false,
            \Gracious\MedusaApiClientBundle\Model\StoreUpdateCustomerAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\UpdateAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\UpdateCartData::class => false,
            \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContext::class => false,
            \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextData::class => false,
            \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextDataInvokeItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextDataInvokeItemOutput::class => false,
            \Gracious\MedusaApiClientBundle\Model\WorkflowExecutionContextErrorsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminApiKeysGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminApiKeysIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminApiKeysIdSalesChannelsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsPostBodybudget::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsPostBodypromotionsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBodybudget::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPostBodypromotionsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCampaignsIdPromotionsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCollectionsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCollectionsIdPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCollectionsIdProductsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomerGroupsIdCustomersPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesAddressIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdAddressesAddressIdPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminCustomersIdCustomerGroupsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodybillingAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyshippingAddress::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyitemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminDraftOrdersPostBodyshippingMethodsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminExchangesGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdLocationLevelsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInventoryItemsIdLocationLevelsLocationIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInvitesGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInvitesPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminInvitesIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrderEditsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdCompletePostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsPostBodyitemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdCancelPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodyitemsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodylabelsItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminOrdersIdLineItemsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPaymentsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPaymentsPaymentProvidersGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListsIdPricesBatchPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListsIdPricesBatchPostBodyCreateItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPriceListsIdPricesBatchPostBodyUpdateItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductCategoriesIdProductsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductVariantsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdOptionsOptionIdPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyUpdateItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsInventoryItemsBatchPostBodyDeleteItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminProductsIdVariantsVariantIdPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaign::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodycampaignBudget::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethodTargetRulesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyapplicationMethodBuyRulesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsPostBodyrulesItem::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleAttributeOptionsRuleTypeGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsRuleValueOptionsRuleTypeRuleAttributeIdGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdPostBodyapplicationMethod::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdBuyRulesBatchPostResponse200Deleted::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRulesBatchPostResponse200Deleted::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdTargetRulesBatchPostResponse200Deleted::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminPromotionsIdRuleTypeGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRefundReasonsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRefundReasonsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRegionsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminRegionsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReservationsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReservationsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnsIdReceiveDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminReturnsIdRequestDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminSalesChannelsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminSalesChannelsIdProductsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingOptionsIdRulesBatchPostResponse200Deleted::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminShippingProfilesGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStockLocationsIdFulfillmentProvidersPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminStockLocationsIdSalesChannelsPostBody::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxProvidersGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRatesGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRatesIdRulesRuleIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminTaxRegionsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminUploadsIdDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsGetResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdStepsFailurePostResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AdminWorkflowsExecutionsWorkflowIdStepsSuccessPostResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AuthSessionDeleteResponse200::class => false,
            \Gracious\MedusaApiClientBundle\Model\AuthUserAuthProviderUpdatePostResponse200::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}