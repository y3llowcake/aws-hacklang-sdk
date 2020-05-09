<?hh // strict
namespace slack\aws\ce;

interface Cost Explorer {
  public function GetReservationUtilization(GetReservationUtilizationRequest) Awaitable<Errors\Result<GetReservationUtilizationResponse>>;
  public function GetRightsizingRecommendation(GetRightsizingRecommendationRequest) Awaitable<Errors\Result<GetRightsizingRecommendationResponse>>;
  public function GetTags(GetTagsRequest) Awaitable<Errors\Result<GetTagsResponse>>;
  public function GetCostAndUsage(GetCostAndUsageRequest) Awaitable<Errors\Result<GetCostAndUsageResponse>>;
  public function GetReservationPurchaseRecommendation(GetReservationPurchaseRecommendationRequest) Awaitable<Errors\Result<GetReservationPurchaseRecommendationResponse>>;
  public function GetSavingsPlansUtilizationDetails(GetSavingsPlansUtilizationDetailsRequest) Awaitable<Errors\Result<GetSavingsPlansUtilizationDetailsResponse>>;
  public function ListCostCategoryDefinitions(ListCostCategoryDefinitionsRequest) Awaitable<Errors\Result<ListCostCategoryDefinitionsResponse>>;
  public function UpdateCostCategoryDefinition(UpdateCostCategoryDefinitionRequest) Awaitable<Errors\Result<UpdateCostCategoryDefinitionResponse>>;
  public function CreateCostCategoryDefinition(CreateCostCategoryDefinitionRequest) Awaitable<Errors\Result<CreateCostCategoryDefinitionResponse>>;
  public function GetDimensionValues(GetDimensionValuesRequest) Awaitable<Errors\Result<GetDimensionValuesResponse>>;
  public function GetCostAndUsageWithResources(GetCostAndUsageWithResourcesRequest) Awaitable<Errors\Result<GetCostAndUsageWithResourcesResponse>>;
  public function GetReservationCoverage(GetReservationCoverageRequest) Awaitable<Errors\Result<GetReservationCoverageResponse>>;
  public function GetSavingsPlansCoverage(GetSavingsPlansCoverageRequest) Awaitable<Errors\Result<GetSavingsPlansCoverageResponse>>;
  public function GetSavingsPlansPurchaseRecommendation(GetSavingsPlansPurchaseRecommendationRequest) Awaitable<Errors\Result<GetSavingsPlansPurchaseRecommendationResponse>>;
  public function GetSavingsPlansUtilization(GetSavingsPlansUtilizationRequest) Awaitable<Errors\Result<GetSavingsPlansUtilizationResponse>>;
  public function GetUsageForecast(GetUsageForecastRequest) Awaitable<Errors\Result<GetUsageForecastResponse>>;
  public function DeleteCostCategoryDefinition(DeleteCostCategoryDefinitionRequest) Awaitable<Errors\Result<DeleteCostCategoryDefinitionResponse>>;
  public function DescribeCostCategoryDefinition(DescribeCostCategoryDefinitionRequest) Awaitable<Errors\Result<DescribeCostCategoryDefinitionResponse>>;
  public function GetCostForecast(GetCostForecastRequest) Awaitable<Errors\Result<GetCostForecastResponse>>;
}

class OnDemandHours {
}

class ReservationPurchaseRecommendation {
  public ReservationPurchaseRecommendationSummary $recommendation_summary;
  public AccountScope $account_scope;
  public LookbackPeriodInDays $lookback_period_in_days;
  public TermInYears $term_in_years;
  public PaymentOption $payment_option;
  public ServiceSpecification $service_specification;
  public ReservationPurchaseRecommendationDetails $recommendation_details;
}

class CostCategoryValues {
  public CostCategoryName $key;
  public Values $values;
}

class CoverageCost {
  public OnDemandCost $on_demand_cost;
}

class ESInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericBoolean $size_flex_eligible;
  public GenericString $instance_class;
  public GenericString $instance_size;
  public GenericString $region;
}

class Estimated {
}

class GetCostAndUsageRequest {
  public DateInterval $time_period;
  public Granularity $granularity;
  public Expression $filter;
  public MetricNames $metrics;
  public GroupDefinitions $group_by;
  public NextPageToken $next_page_token;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ReservationUtilizationGroup {
  public Attributes $attributes;
  public ReservationAggregates $utilization;
  public ReservationGroupKey $key;
  public ReservationGroupValue $value;
}

class SavingsPlansPurchaseRecommendationSummary {
  public GenericString $total_recommendation_count;
  public GenericString $daily_commitment_to_purchase;
  public GenericString $hourly_commitment_to_purchase;
  public GenericString $estimated_savings_percentage;
  public GenericString $estimated_roi;
  public GenericString $estimated_total_cost;
  public GenericString $estimated_savings_amount;
  public GenericString $estimated_on_demand_cost_with_current_commitment;
  public GenericString $currency_code;
  public GenericString $current_on_demand_spend;
  public GenericString $estimated_monthly_savings_amount;
}

class SavingsPlansUtilizationAggregates {
  public SavingsPlansUtilization $utilization;
  public SavingsPlansSavings $savings;
  public SavingsPlansAmortizedCommitment $amortized_commitment;
}

class DescribeCostCategoryDefinitionResponse {
  public CostCategory $cost_category;
}

class GetDimensionValuesResponse {
  public DimensionValuesWithAttributesList $dimension_values;
  public PageSize $return_size;
  public PageSize $total_size;
  public NextPageToken $next_page_token;
}

class ReservationPurchaseRecommendations {
}

class GroupDefinitionType {
}

class ModifyRecommendationDetail {
  public TargetInstancesList $target_instances;
}

class PurchasedUnits {
}

class SavingsPlansPurchaseRecommendationDetail {
  public GenericString $estimated_on_demand_cost;
  public GenericString $hourly_commitment_to_purchase;
  public GenericString $upfront_cost;
  public GenericString $estimated_savings_amount;
  public GenericString $currency_code;
  public GenericString $estimated_sp_cost;
  public GenericString $estimated_on_demand_cost_with_current_commitment;
  public GenericString $estimated_savings_percentage;
  public GenericString $estimated_average_utilization;
  public GenericString $estimated_monthly_savings_amount;
  public GenericString $current_minimum_hourly_on_demand_spend;
  public SavingsPlansDetails $savings_plans_details;
  public GenericString $current_maximum_hourly_on_demand_spend;
  public GenericString $estimated_roi;
  public GenericString $current_average_hourly_on_demand_spend;
  public GenericString $account_id;
}

class SavingsPlansPurchaseRecommendationDetailList {
}

class CostCategoryName {
}

class MetricName {
}

class NonNegativeInteger {
}

class ReservationCoverageGroup {
  public Attributes $attributes;
  public Coverage $coverage;
}

class TagValuesList {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class UpdateCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_start;
}

class AmortizedRecurringFee {
}

class DeleteCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;
}

class GetCostForecastRequest {
  public Metric $metric;
  public Granularity $granularity;
  public Expression $filter;
  public PredictionIntervalLevel $prediction_interval_level;
  public DateInterval $time_period;
}

class GetSavingsPlansUtilizationDetailsRequest {
  public Expression $filter;
  public NextPageToken $next_token;
  public MaxResults $max_results;
  public DateInterval $time_period;
}

class RequestChangedException {
  public ErrorMessage $message;
}

class ReservedNormalizedUnits {
}

class DimensionValues {
  public MatchOptions $match_options;
  public Dimension $key;
  public Values $values;
}

class NextPageToken {
}

class PageSize {
}

class PurchasedHours {
}

class RightsizingRecommendationConfiguration {
  public GenericBoolean $benefits_considered;
  public RecommendationTarget $recommendation_target;
}

class RightsizingRecommendationMetadata {
  public GenericString $recommendation_id;
  public GenericString $generation_timestamp;
  public LookbackPeriodInDays $lookback_period_in_days;
}

class SavingsPlansUtilizationByTime {
  public DateInterval $time_period;
  public SavingsPlansUtilization $utilization;
  public SavingsPlansSavings $savings;
  public SavingsPlansAmortizedCommitment $amortized_commitment;
}

class SavingsPlansUtilizationDetail {
  public SavingsPlansUtilization $utilization;
  public SavingsPlansSavings $savings;
  public SavingsPlansAmortizedCommitment $amortized_commitment;
  public SavingsPlanArn $savings_plan_arn;
  public Attributes $attributes;
}

class CoverageByTime {
  public DateInterval $time_period;
  public ReservationCoverageGroups $groups;
  public Coverage $total;
}

class Dimension {
}

class GetSavingsPlansUtilizationRequest {
  public Granularity $granularity;
  public Expression $filter;
  public DateInterval $time_period;
}

class GroupDefinition {
  public GroupDefinitionType $type;
  public GroupDefinitionKey $key;
}

class LookbackPeriodInDays {
}

class SavingsPlansAmortizedCommitment {
  public GenericString $amortized_upfront_commitment;
  public GenericString $total_amortized_commitment;
  public GenericString $amortized_recurring_commitment;
}

class UtilizationsByTime {
}

class AttributeValue {
}

class GetCostAndUsageWithResourcesRequest {
  public Expression $filter;
  public MetricNames $metrics;
  public GroupDefinitions $group_by;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;
  public Granularity $granularity;
}

class OfferingClass {
}

class ResourceDetails {
  public EC2ResourceDetails $ec_2_resource_details;
}

class UpdateCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;
}

class Context {
}

class GroupDefinitions {
}

class Keys {
}

class SavingsPlansCoverageData {
  public GenericString $spend_covered_by_savings_plans;
  public GenericString $on_demand_cost;
  public GenericString $total_cost;
  public GenericString $coverage_percentage;
}

class TagList {
}

class TagValues {
  public TagKey $key;
  public Values $values;
  public MatchOptions $match_options;
}

class Arn {
}

class Coverage {
  public CoverageHours $coverage_hours;
  public CoverageNormalizedUnits $coverage_normalized_units;
  public CoverageCost $coverage_cost;
}

class PredictionIntervalLevel {
}

class RightsizingType {
}

class SavingsPlansPurchaseRecommendationMetadata {
  public GenericString $recommendation_id;
  public GenericString $generation_timestamp;
}

class ZonedDateTime {
}

class AccountScope {
}

class CoverageNormalizedUnitsPercentage {
}

class DeleteCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_end;
}

class Expressions {
}

class ListCostCategoryDefinitionsRequest {
  public ZonedDateTime $effective_on;
  public NextPageToken $next_token;
  public CostCategoryMaxResults $max_results;
}

class TerminateRecommendationDetail {
  public GenericString $estimated_monthly_savings;
  public GenericString $currency_code;
}

class ReservationPurchaseRecommendationDetails {
}

class UtilizationPercentageInUnits {
}

class Group {
  public Metrics $metrics;
  public Keys $keys;
}

class Groups {
}

class ListCostCategoryDefinitionsResponse {
  public CostCategoryReferencesList $cost_category_references;
  public NextPageToken $next_token;
}

class MatchOptions {
}

class Metric {
}

class ReservationAggregates {
  public UtilizationPercentageInUnits $utilization_percentage_in_units;
  public TotalAmortizedFee $total_amortized_fee;
  public PurchasedHours $purchased_hours;
  public TotalActualHours $total_actual_hours;
  public UnusedHours $unused_hours;
  public NetRISavings $net_ri_savings;
  public AmortizedUpfrontFee $amortized_upfront_fee;
  public AmortizedRecurringFee $amortized_recurring_fee;
  public UtilizationPercentage $utilization_percentage;
  public TotalActualUnits $total_actual_units;
  public UnusedUnits $unused_units;
  public OnDemandCostOfRIHoursUsed $on_demand_cost_of_ri_hours_used;
  public PurchasedUnits $purchased_units;
  public TotalPotentialRISavings $total_potential_ri_savings;
}

class GetCostAndUsageResponse {
  public ResultsByTime $results_by_time;
  public NextPageToken $next_page_token;
  public GroupDefinitions $group_definitions;
}

class OnDemandNormalizedUnits {
}

class RDSInstanceDetails {
  public GenericString $region;
  public GenericString $database_engine;
  public GenericString $database_edition;
  public GenericString $instance_type;
  public GenericString $deployment_option;
  public GenericString $license_model;
  public GenericBoolean $current_generation;
  public GenericBoolean $size_flex_eligible;
  public GenericString $family;
}

class TargetInstancesList {
}

class Values {
}

class CostCategoryRule {
  public CostCategoryValue $value;
  public Expression $rule;
}

class CreateCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_start;
}

class Expression {
  public CostCategoryValues $cost_categories;
  public Expressions $or;
  public Expressions $and;
  public Expression $not;
  public DimensionValues $dimensions;
  public TagValues $tags;
}

class GetUsageForecastResponse {
  public MetricValue $total;
  public ForecastResultsByTime $forecast_results_by_time;
}

class OnDemandCostOfRIHoursUsed {
}

class TotalRunningHours {
}

class GenericBoolean {
}

class GetReservationUtilizationRequest {
  public DateInterval $time_period;
  public GroupDefinitions $group_by;
  public Granularity $granularity;
  public Expression $filter;
  public NextPageToken $next_page_token;
}

class ReservationPurchaseRecommendationSummary {
  public GenericString $currency_code;
  public GenericString $total_estimated_monthly_savings_amount;
  public GenericString $total_estimated_monthly_savings_percentage;
}

class ReservationUtilizationGroups {
}

class SavingsPlansUtilizationDetails {
}

class SavingsPlansUtilizationsByTime {
}

class OnDemandCost {
}

class ResourceUtilization {
  public EC2ResourceUtilization $ec_2_resource_utilization;
}

class CoverageNormalizedUnits {
  public OnDemandNormalizedUnits $on_demand_normalized_units;
  public ReservedNormalizedUnits $reserved_normalized_units;
  public TotalRunningNormalizedUnits $total_running_normalized_units;
  public CoverageNormalizedUnitsPercentage $coverage_normalized_units_percentage;
}

class Entity {
}

class GenericString {
}

class GetDimensionValuesRequest {
  public NextPageToken $next_page_token;
  public SearchString $search_string;
  public DateInterval $time_period;
  public Dimension $dimension;
  public Context $context;
}

class GetSavingsPlansUtilizationResponse {
  public SavingsPlansUtilizationAggregates $total;
  public SavingsPlansUtilizationsByTime $savings_plans_utilizations_by_time;
}

class MatchOption {
}

class TermInYears {
}

class DimensionValuesWithAttributes {
  public Value $value;
  public Attributes $attributes;
}

class DimensionValuesWithAttributesList {
}

class GetTagsRequest {
  public SearchString $search_string;
  public DateInterval $time_period;
  public TagKey $tag_key;
  public NextPageToken $next_page_token;
}

class SavingsPlansCoverages {
}

class ServiceSpecification {
  public EC2Specification $ec_2_specification;
}

class CurrentInstance {
  public GenericString $resource_id;
  public ResourceDetails $resource_details;
  public GenericString $reservation_covered_hours_in_lookback_period;
  public GenericString $on_demand_hours_in_lookback_period;
  public TagValuesList $tags;
  public ResourceUtilization $resource_utilization;
  public GenericString $savings_plans_covered_hours_in_lookback_period;
  public GenericString $total_running_hours_in_lookback_period;
  public GenericString $monthly_cost;
  public GenericString $currency_code;
}

class EC2Specification {
  public OfferingClass $offering_class;
}

class GetReservationPurchaseRecommendationRequest {
  public GenericString $service;
  public AccountScope $account_scope;
  public LookbackPeriodInDays $lookback_period_in_days;
  public TermInYears $term_in_years;
  public ServiceSpecification $service_specification;
  public NextPageToken $next_page_token;
  public GenericString $account_id;
  public PaymentOption $payment_option;
  public NonNegativeInteger $page_size;
}

class GetRightsizingRecommendationResponse {
  public RightsizingRecommendationList $rightsizing_recommendations;
  public NextPageToken $next_page_token;
  public RightsizingRecommendationConfiguration $configuration;
  public RightsizingRecommendationMetadata $metadata;
  public RightsizingRecommendationSummary $summary;
}

class GroupDefinitionKey {
}

class MetricValue {
  public MetricAmount $amount;
  public MetricUnit $unit;
}

class CostCategoryMaxResults {
}

class MaxResults {
}

class NetRISavings {
}

class RightsizingRecommendationSummary {
  public GenericString $total_recommendation_count;
  public GenericString $estimated_total_monthly_savings_amount;
  public GenericString $savings_currency_code;
  public GenericString $savings_percentage;
}

class UnresolvableUsageUnitException {
  public ErrorMessage $message;
}

class UnusedUnits {
}

class CostCategory {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_start;
  public ZonedDateTime $effective_end;
  public CostCategoryName $name;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;
}

class GetReservationPurchaseRecommendationResponse {
  public ReservationPurchaseRecommendationMetadata $metadata;
  public ReservationPurchaseRecommendations $recommendations;
  public NextPageToken $next_page_token;
}

class SavingsPlansPurchaseRecommendation {
  public SavingsPlansPurchaseRecommendationSummary $savings_plans_purchase_recommendation_summary;
  public AccountScope $account_scope;
  public SupportedSavingsPlansType $savings_plans_type;
  public TermInYears $term_in_years;
  public PaymentOption $payment_option;
  public LookbackPeriodInDays $lookback_period_in_days;
  public SavingsPlansPurchaseRecommendationDetailList $savings_plans_purchase_recommendation_details;
}

class RightsizingRecommendationList {
}

class SavingsPlansUtilization {
  public GenericString $unused_commitment;
  public GenericString $utilization_percentage;
  public GenericString $total_commitment;
  public GenericString $used_commitment;
}

class AmortizedUpfrontFee {
}

class CostCategoryReference {
  public ZonedDateTime $effective_start;
  public ZonedDateTime $effective_end;
  public NonNegativeInteger $number_of_rules;
  public Arn $cost_category_arn;
  public CostCategoryName $name;
}

class CostCategoryRuleVersion {
}

class CoverageHours {
  public OnDemandHours $on_demand_hours;
  public ReservedHours $reserved_hours;
  public TotalRunningHours $total_running_hours;
  public CoverageHoursPercentage $coverage_hours_percentage;
}

class GetReservationCoverageRequest {
  public Granularity $granularity;
  public Expression $filter;
  public MetricNames $metrics;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;
  public GroupDefinitions $group_by;
}

class InstanceDetails {
  public EC2InstanceDetails $ec_2_instance_details;
  public RDSInstanceDetails $rds_instance_details;
  public RedshiftInstanceDetails $redshift_instance_details;
  public ElastiCacheInstanceDetails $elasti_cache_instance_details;
  public ESInstanceDetails $es_instance_details;
}

class SearchString {
}

class SupportedSavingsPlansType {
}

class TagKey {
}

class TotalActualUnits {
}

class GetSavingsPlansUtilizationDetailsResponse {
  public SavingsPlansUtilizationDetails $savings_plans_utilization_details;
  public SavingsPlansUtilizationAggregates $total;
  public DateInterval $time_period;
  public NextPageToken $next_token;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class PaymentOption {
}

class ReservationPurchaseRecommendationDetail {
  public GenericString $estimated_reservation_cost_for_lookback_period;
  public GenericString $recommended_normalized_units_to_purchase;
  public GenericString $minimum_number_of_instances_used_per_hour;
  public GenericString $average_number_of_instances_used_per_hour;
  public InstanceDetails $instance_details;
  public GenericString $recommended_number_of_instances_to_purchase;
  public GenericString $maximum_number_of_instances_used_per_hour;
  public GenericString $average_utilization;
  public GenericString $currency_code;
  public GenericString $estimated_monthly_savings_amount;
  public GenericString $estimated_monthly_savings_percentage;
  public GenericString $upfront_cost;
  public GenericString $account_id;
  public GenericString $minimum_normalized_units_used_per_hour;
  public GenericString $recurring_standard_monthly_cost;
  public GenericString $estimated_break_even_in_months;
  public GenericString $estimated_monthly_on_demand_cost;
  public GenericString $maximum_normalized_units_used_per_hour;
  public GenericString $average_normalized_units_used_per_hour;
}

class YearMonthDay {
}

class DateInterval {
  public YearMonthDay $start;
  public YearMonthDay $end;
}

class GetSavingsPlansCoverageRequest {
  public NextPageToken $next_token;
  public MaxResults $max_results;
  public DateInterval $time_period;
  public GroupDefinitions $group_by;
  public Granularity $granularity;
  public Expression $filter;
  public MetricNames $metrics;
}

class Attributes {
}

class BillExpirationException {
  public ErrorMessage $message;
}

class ErrorMessage {
}

class Granularity {
}

class ReservationPurchaseRecommendationMetadata {
  public GenericString $recommendation_id;
  public GenericString $generation_timestamp;
}

class ForecastResultsByTime {
}

class GetSavingsPlansPurchaseRecommendationResponse {
  public SavingsPlansPurchaseRecommendationMetadata $metadata;
  public SavingsPlansPurchaseRecommendation $savings_plans_purchase_recommendation;
  public NextPageToken $next_page_token;
}

class CostCategoryValue {
}

class CoverageHoursPercentage {
}

class CreateCostCategoryDefinitionRequest {
  public CostCategoryName $name;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;
}

class EC2InstanceDetails {
  public GenericString $platform;
  public GenericString $tenancy;
  public GenericBoolean $current_generation;
  public GenericBoolean $size_flex_eligible;
  public GenericString $family;
  public GenericString $instance_type;
  public GenericString $region;
  public GenericString $availability_zone;
}

class ElastiCacheInstanceDetails {
  public GenericString $node_type;
  public GenericString $region;
  public GenericString $product_description;
  public GenericBoolean $current_generation;
  public GenericBoolean $size_flex_eligible;
  public GenericString $family;
}

class ForecastResult {
  public DateInterval $time_period;
  public GenericString $mean_value;
  public GenericString $prediction_interval_lower_bound;
  public GenericString $prediction_interval_upper_bound;
}

class RightsizingRecommendation {
  public GenericString $account_id;
  public CurrentInstance $current_instance;
  public RightsizingType $rightsizing_type;
  public ModifyRecommendationDetail $modify_recommendation_detail;
  public TerminateRecommendationDetail $terminate_recommendation_detail;
}

class SavingsPlansDetails {
  public GenericString $region;
  public GenericString $instance_family;
  public GenericString $offering_id;
}

class CostCategoryReferencesList {
}

class DataUnavailableException {
  public ErrorMessage $message;
}

class SavingsPlansCoverage {
  public SavingsPlansCoverageData $coverage;
  public DateInterval $time_period;
  public Attributes $attributes;
}

class Value {
}

class GetReservationUtilizationResponse {
  public ReservationAggregates $total;
  public NextPageToken $next_page_token;
  public UtilizationsByTime $utilizations_by_time;
}

class GetTagsResponse {
  public NextPageToken $next_page_token;
  public TagList $tags;
  public PageSize $return_size;
  public PageSize $total_size;
}

class GetUsageForecastRequest {
  public DateInterval $time_period;
  public Metric $metric;
  public Granularity $granularity;
  public Expression $filter;
  public PredictionIntervalLevel $prediction_interval_level;
}

class RecommendationTarget {
}

class RedshiftInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericBoolean $size_flex_eligible;
  public GenericString $family;
  public GenericString $node_type;
  public GenericString $region;
}

class GetCostForecastResponse {
  public MetricValue $total;
  public ForecastResultsByTime $forecast_results_by_time;
}

class MetricNames {
}

class MetricUnit {
}

class GetSavingsPlansCoverageResponse {
  public SavingsPlansCoverages $savings_plans_coverages;
  public NextPageToken $next_token;
}

class Metrics {
}

class UtilizationPercentage {
}

class SavingsPlanArn {
}

class TotalAmortizedFee {
}

class DescribeCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_on;
}

class EC2ResourceDetails {
  public GenericString $instance_type;
  public GenericString $platform;
  public GenericString $region;
  public GenericString $network_performance;
  public GenericString $storage;
  public GenericString $vcpu;
  public GenericString $hourly_on_demand_rate;
  public GenericString $sku;
  public GenericString $memory;
}

class GetCostAndUsageWithResourcesResponse {
  public NextPageToken $next_page_token;
  public GroupDefinitions $group_definitions;
  public ResultsByTime $results_by_time;
}

class GetSavingsPlansPurchaseRecommendationRequest {
  public NextPageToken $next_page_token;
  public NonNegativeInteger $page_size;
  public LookbackPeriodInDays $lookback_period_in_days;
  public Expression $filter;
  public SupportedSavingsPlansType $savings_plans_type;
  public TermInYears $term_in_years;
  public PaymentOption $payment_option;
  public AccountScope $account_scope;
}

class Key {
}

class MetricAmount {
}

class ResultByTime {
  public DateInterval $time_period;
  public Metrics $total;
  public Groups $groups;
  public Estimated $estimated;
}

class ResultsByTime {
}

class AttributeType {
}

class CostCategoryRulesList {
}

class EC2ResourceUtilization {
  public GenericString $max_cpu_utilization_percentage;
  public GenericString $max_memory_utilization_percentage;
  public GenericString $max_storage_utilization_percentage;
}

class GetReservationCoverageResponse {
  public CoveragesByTime $coverages_by_time;
  public Coverage $total;
  public NextPageToken $next_page_token;
}

class ReservationCoverageGroups {
}

class ReservationGroupValue {
}

class UnusedHours {
}

class UtilizationByTime {
  public DateInterval $time_period;
  public ReservationUtilizationGroups $groups;
  public ReservationAggregates $total;
}

class TargetInstance {
  public GenericString $estimated_monthly_savings;
  public GenericString $currency_code;
  public GenericBoolean $default_target_instance;
  public ResourceDetails $resource_details;
  public ResourceUtilization $expected_resource_utilization;
  public GenericString $estimated_monthly_cost;
}

class TotalActualHours {
}

class CoveragesByTime {
}

class GetRightsizingRecommendationRequest {
  public RightsizingRecommendationConfiguration $configuration;
  public GenericString $service;
  public NonNegativeInteger $page_size;
  public NextPageToken $next_page_token;
  public Expression $filter;
}

class ReservationGroupKey {
}

class ReservedHours {
}

class SavingsPlansSavings {
  public GenericString $net_savings;
  public GenericString $on_demand_cost_equivalent;
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;
}

class TotalPotentialRISavings {
}

class TotalRunningNormalizedUnits {
}

