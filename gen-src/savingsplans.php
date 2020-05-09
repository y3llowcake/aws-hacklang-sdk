<?hh // strict
namespace slack\aws\savingsplans;

interface savingsplans {
  public function CreateSavingsPlan(CreateSavingsPlanRequest) Awaitable<Errors\Result<CreateSavingsPlanResponse>>;
  public function DescribeSavingsPlanRates(DescribeSavingsPlanRatesRequest) Awaitable<Errors\Result<DescribeSavingsPlanRatesResponse>>;
  public function DescribeSavingsPlans(DescribeSavingsPlansRequest) Awaitable<Errors\Result<DescribeSavingsPlansResponse>>;
  public function DescribeSavingsPlansOfferingRates(DescribeSavingsPlansOfferingRatesRequest) Awaitable<Errors\Result<DescribeSavingsPlansOfferingRatesResponse>>;
  public function DescribeSavingsPlansOfferings(DescribeSavingsPlansOfferingsRequest) Awaitable<Errors\Result<DescribeSavingsPlansOfferingsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class Amount {
}

class ClientToken {
}

class CreateSavingsPlanRequest {
  public ClientToken $client_token;
  public Amount $commitment;
  public SavingsPlanOfferingId $savings_plan_offering_id;
  public TagMap $tags;
  public Amount $upfront_payment_amount;
}

class CreateSavingsPlanResponse {
  public SavingsPlanId $savings_plan_id;
}

class CurrencyCode {
}

class CurrencyList {
}

class DescribeSavingsPlanRatesRequest {
  public SavingsPlanRateFilterList $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public SavingsPlanId $savings_plan_id;
}

class DescribeSavingsPlanRatesResponse {
  public PaginationToken $next_token;
  public SavingsPlanId $savings_plan_id;
  public SavingsPlanRateList $search_results;
}

class DescribeSavingsPlansOfferingRatesRequest {
  public SavingsPlanOfferingRateFiltersList $filters;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public SavingsPlanRateOperationList $operations;
  public SavingsPlanProductTypeList $products;
  public UUIDs $savings_plan_offering_ids;
  public SavingsPlanPaymentOptionList $savings_plan_payment_options;
  public SavingsPlanTypeList $savings_plan_types;
  public SavingsPlanRateServiceCodeList $service_codes;
  public SavingsPlanRateUsageTypeList $usage_types;
}

class DescribeSavingsPlansOfferingRatesResponse {
  public PaginationToken $next_token;
  public SavingsPlanOfferingRatesList $search_results;
}

class DescribeSavingsPlansOfferingsRequest {
  public CurrencyList $currencies;
  public SavingsPlanDescriptionsList $descriptions;
  public DurationsList $durations;
  public SavingsPlanOfferingFiltersList $filters;
  public PageSize $max_results;
  public PaginationToken $next_token;
  public UUIDs $offering_ids;
  public SavingsPlanOperationList $operations;
  public SavingsPlanPaymentOptionList $payment_options;
  public SavingsPlanTypeList $plan_types;
  public SavingsPlanProductType $product_type;
  public SavingsPlanServiceCodeList $service_codes;
  public SavingsPlanUsageTypeList $usage_types;
}

class DescribeSavingsPlansOfferingsResponse {
  public PaginationToken $next_token;
  public SavingsPlanOfferingsList $search_results;
}

class DescribeSavingsPlansRequest {
  public SavingsPlanFilterList $filters;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public SavingsPlanArnList $savings_plan_arns;
  public SavingsPlanIdList $savings_plan_ids;
  public SavingsPlanStateList $states;
}

class DescribeSavingsPlansResponse {
  public PaginationToken $next_token;
  public SavingsPlanList $savings_plans;
}

class DurationsList {
}

class EC2InstanceFamily {
}

class FilterValuesList {
}

class InternalServerException {
  public string $message;
}

class JsonSafeFilterValueString {
}

class ListOfStrings {
}

class ListTagsForResourceRequest {
  public SavingsPlanArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class MaxResults {
}

class PageSize {
}

class PaginationToken {
}

class ParentSavingsPlanOffering {
  public CurrencyCode $currency;
  public SavingsPlansDuration $duration_seconds;
  public UUID $offering_id;
  public SavingsPlanPaymentOption $payment_option;
  public SavingsPlanDescription $plan_description;
  public SavingsPlanType $plan_type;
}

class Region {
}

class ResourceNotFoundException {
  public string $message;
}

class SavingsPlan {
  public Amount $commitment;
  public CurrencyCode $currency;
  public string $description;
  public EC2InstanceFamily $ec_2_instance_family;
  public string $end;
  public SavingsPlanOfferingId $offering_id;
  public SavingsPlanPaymentOption $payment_option;
  public SavingsPlanProductTypeList $product_types;
  public Amount $recurring_payment_amount;
  public Region $region;
  public SavingsPlanArn $savings_plan_arn;
  public SavingsPlanId $savings_plan_id;
  public SavingsPlanType $savings_plan_type;
  public string $start;
  public SavingsPlanState $state;
  public TagMap $tags;
  public TermDurationInSeconds $term_duration_in_seconds;
  public Amount $upfront_payment_amount;
}

class SavingsPlanArn {
}

class SavingsPlanArnList {
}

class SavingsPlanDescription {
}

class SavingsPlanDescriptionsList {
}

class SavingsPlanFilter {
  public SavingsPlansFilterName $name;
  public ListOfStrings $values;
}

class SavingsPlanFilterList {
}

class SavingsPlanId {
}

class SavingsPlanIdList {
}

class SavingsPlanList {
}

class SavingsPlanOffering {
  public CurrencyCode $currency;
  public SavingsPlanDescription $description;
  public SavingsPlansDuration $duration_seconds;
  public UUID $offering_id;
  public SavingsPlanOperation $operation;
  public SavingsPlanPaymentOption $payment_option;
  public SavingsPlanType $plan_type;
  public SavingsPlanProductTypeList $product_types;
  public SavingsPlanOfferingPropertyList $properties;
  public SavingsPlanServiceCode $service_code;
  public SavingsPlanUsageType $usage_type;
}

class SavingsPlanOfferingFilterAttribute {
}

class SavingsPlanOfferingFilterElement {
  public SavingsPlanOfferingFilterAttribute $name;
  public FilterValuesList $values;
}

class SavingsPlanOfferingFiltersList {
}

class SavingsPlanOfferingId {
}

class SavingsPlanOfferingProperty {
  public SavingsPlanOfferingPropertyKey $name;
  public JsonSafeFilterValueString $value;
}

class SavingsPlanOfferingPropertyKey {
}

class SavingsPlanOfferingPropertyList {
}

class SavingsPlanOfferingRate {
  public SavingsPlanRateOperation $operation;
  public SavingsPlanProductType $product_type;
  public SavingsPlanOfferingRatePropertyList $properties;
  public SavingsPlanRatePricePerUnit $rate;
  public ParentSavingsPlanOffering $savings_plan_offering;
  public SavingsPlanRateServiceCode $service_code;
  public SavingsPlanRateUnit $unit;
  public SavingsPlanRateUsageType $usage_type;
}

class SavingsPlanOfferingRateFilterElement {
  public SavingsPlanRateFilterAttribute $name;
  public FilterValuesList $values;
}

class SavingsPlanOfferingRateFiltersList {
}

class SavingsPlanOfferingRateProperty {
  public JsonSafeFilterValueString $name;
  public JsonSafeFilterValueString $value;
}

class SavingsPlanOfferingRatePropertyList {
}

class SavingsPlanOfferingRatesList {
}

class SavingsPlanOfferingsList {
}

class SavingsPlanOperation {
}

class SavingsPlanOperationList {
}

class SavingsPlanPaymentOption {
}

class SavingsPlanPaymentOptionList {
}

class SavingsPlanProductType {
}

class SavingsPlanProductTypeList {
}

class SavingsPlanRate {
  public CurrencyCode $currency;
  public SavingsPlanRateOperation $operation;
  public SavingsPlanProductType $product_type;
  public SavingsPlanRatePropertyList $properties;
  public Amount $rate;
  public SavingsPlanRateServiceCode $service_code;
  public SavingsPlanRateUnit $unit;
  public SavingsPlanRateUsageType $usage_type;
}

class SavingsPlanRateFilter {
  public SavingsPlanRateFilterName $name;
  public ListOfStrings $values;
}

class SavingsPlanRateFilterAttribute {
}

class SavingsPlanRateFilterList {
}

class SavingsPlanRateFilterName {
}

class SavingsPlanRateList {
}

class SavingsPlanRateOperation {
}

class SavingsPlanRateOperationList {
}

class SavingsPlanRatePricePerUnit {
}

class SavingsPlanRateProperty {
  public SavingsPlanRatePropertyKey $name;
  public JsonSafeFilterValueString $value;
}

class SavingsPlanRatePropertyKey {
}

class SavingsPlanRatePropertyList {
}

class SavingsPlanRateServiceCode {
}

class SavingsPlanRateServiceCodeList {
}

class SavingsPlanRateUnit {
}

class SavingsPlanRateUsageType {
}

class SavingsPlanRateUsageTypeList {
}

class SavingsPlanServiceCode {
}

class SavingsPlanServiceCodeList {
}

class SavingsPlanState {
}

class SavingsPlanStateList {
}

class SavingsPlanType {
}

class SavingsPlanTypeList {
}

class SavingsPlanUsageType {
}

class SavingsPlanUsageTypeList {
}

class SavingsPlansDuration {
}

class SavingsPlansFilterName {
}

class ServiceQuotaExceededException {
  public string $message;
}

class String {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public SavingsPlanArn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TermDurationInSeconds {
}

class UUID {
}

class UUIDs {
}

class UntagResourceRequest {
  public SavingsPlanArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class ValidationException {
  public string $message;
}

