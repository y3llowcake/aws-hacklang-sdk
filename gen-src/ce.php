<?hh // strict
namespace slack\aws\ce;

interface Cost Explorer {
  public function CreateCostCategoryDefinition(CreateCostCategoryDefinitionRequest): Awaitable<Errors\Result<CreateCostCategoryDefinitionResponse>>;
  public function DeleteCostCategoryDefinition(DeleteCostCategoryDefinitionRequest): Awaitable<Errors\Result<DeleteCostCategoryDefinitionResponse>>;
  public function DescribeCostCategoryDefinition(DescribeCostCategoryDefinitionRequest): Awaitable<Errors\Result<DescribeCostCategoryDefinitionResponse>>;
  public function GetCostAndUsage(GetCostAndUsageRequest): Awaitable<Errors\Result<GetCostAndUsageResponse>>;
  public function GetCostAndUsageWithResources(GetCostAndUsageWithResourcesRequest): Awaitable<Errors\Result<GetCostAndUsageWithResourcesResponse>>;
  public function GetCostForecast(GetCostForecastRequest): Awaitable<Errors\Result<GetCostForecastResponse>>;
  public function GetDimensionValues(GetDimensionValuesRequest): Awaitable<Errors\Result<GetDimensionValuesResponse>>;
  public function GetReservationCoverage(GetReservationCoverageRequest): Awaitable<Errors\Result<GetReservationCoverageResponse>>;
  public function GetReservationPurchaseRecommendation(GetReservationPurchaseRecommendationRequest): Awaitable<Errors\Result<GetReservationPurchaseRecommendationResponse>>;
  public function GetReservationUtilization(GetReservationUtilizationRequest): Awaitable<Errors\Result<GetReservationUtilizationResponse>>;
  public function GetRightsizingRecommendation(GetRightsizingRecommendationRequest): Awaitable<Errors\Result<GetRightsizingRecommendationResponse>>;
  public function GetSavingsPlansCoverage(GetSavingsPlansCoverageRequest): Awaitable<Errors\Result<GetSavingsPlansCoverageResponse>>;
  public function GetSavingsPlansPurchaseRecommendation(GetSavingsPlansPurchaseRecommendationRequest): Awaitable<Errors\Result<GetSavingsPlansPurchaseRecommendationResponse>>;
  public function GetSavingsPlansUtilization(GetSavingsPlansUtilizationRequest): Awaitable<Errors\Result<GetSavingsPlansUtilizationResponse>>;
  public function GetSavingsPlansUtilizationDetails(GetSavingsPlansUtilizationDetailsRequest): Awaitable<Errors\Result<GetSavingsPlansUtilizationDetailsResponse>>;
  public function GetTags(GetTagsRequest): Awaitable<Errors\Result<GetTagsResponse>>;
  public function GetUsageForecast(GetUsageForecastRequest): Awaitable<Errors\Result<GetUsageForecastResponse>>;
  public function ListCostCategoryDefinitions(ListCostCategoryDefinitionsRequest): Awaitable<Errors\Result<ListCostCategoryDefinitionsResponse>>;
  public function UpdateCostCategoryDefinition(UpdateCostCategoryDefinitionRequest): Awaitable<Errors\Result<UpdateCostCategoryDefinitionResponse>>;
}

class AccountScope {
}

class AmortizedRecurringFee {
}

class AmortizedUpfrontFee {
}

class Arn {
}

class AttributeType {
}

class AttributeValue {
}

class Attributes {
}

class BillExpirationException {
  public ErrorMessage $message;
}

class Context {
}

class CostCategory {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_end;
  public ZonedDateTime $effective_start;
  public CostCategoryName $name;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;
}

class CostCategoryMaxResults {
}

class CostCategoryName {
}

class CostCategoryReference {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_end;
  public ZonedDateTime $effective_start;
  public CostCategoryName $name;
  public NonNegativeInteger $number_of_rules;
}

class CostCategoryReferencesList {
}

class CostCategoryRule {
  public Expression $rule;
  public CostCategoryValue $value;
}

class CostCategoryRuleVersion {
}

class CostCategoryRulesList {
}

class CostCategoryValue {
}

class CostCategoryValues {
  public CostCategoryName $key;
  public Values $values;
}

class Coverage {
  public CoverageCost $coverage_cost;
  public CoverageHours $coverage_hours;
  public CoverageNormalizedUnits $coverage_normalized_units;
}

class CoverageByTime {
  public ReservationCoverageGroups $groups;
  public DateInterval $time_period;
  public Coverage $total;
}

class CoverageCost {
  public OnDemandCost $on_demand_cost;
}

class CoverageHours {
  public CoverageHoursPercentage $coverage_hours_percentage;
  public OnDemandHours $on_demand_hours;
  public ReservedHours $reserved_hours;
  public TotalRunningHours $total_running_hours;
}

class CoverageHoursPercentage {
}

class CoverageNormalizedUnits {
  public CoverageNormalizedUnitsPercentage $coverage_normalized_units_percentage;
  public OnDemandNormalizedUnits $on_demand_normalized_units;
  public ReservedNormalizedUnits $reserved_normalized_units;
  public TotalRunningNormalizedUnits $total_running_normalized_units;
}

class CoverageNormalizedUnitsPercentage {
}

class CoveragesByTime {
}

class CreateCostCategoryDefinitionRequest {
  public CostCategoryName $name;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;
}

class CreateCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_start;
}

class CurrentInstance {
  public GenericString $currency_code;
  public GenericString $monthly_cost;
  public GenericString $on_demand_hours_in_lookback_period;
  public GenericString $reservation_covered_hours_in_lookback_period;
  public ResourceDetails $resource_details;
  public GenericString $resource_id;
  public ResourceUtilization $resource_utilization;
  public GenericString $savings_plans_covered_hours_in_lookback_period;
  public TagValuesList $tags;
  public GenericString $total_running_hours_in_lookback_period;
}

class DataUnavailableException {
  public ErrorMessage $message;
}

class DateInterval {
  public YearMonthDay $end;
  public YearMonthDay $start;
}

class DeleteCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;
}

class DeleteCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_end;
}

class DescribeCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_on;
}

class DescribeCostCategoryDefinitionResponse {
  public CostCategory $cost_category;
}

class Dimension {
}

class DimensionValues {
  public Dimension $key;
  public MatchOptions $match_options;
  public Values $values;
}

class DimensionValuesWithAttributes {
  public Attributes $attributes;
  public Value $value;
}

class DimensionValuesWithAttributesList {
}

class EC2InstanceDetails {
  public GenericString $availability_zone;
  public GenericBoolean $current_generation;
  public GenericString $family;
  public GenericString $instance_type;
  public GenericString $platform;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;
  public GenericString $tenancy;
}

class EC2ResourceDetails {
  public GenericString $hourly_on_demand_rate;
  public GenericString $instance_type;
  public GenericString $memory;
  public GenericString $network_performance;
  public GenericString $platform;
  public GenericString $region;
  public GenericString $sku;
  public GenericString $storage;
  public GenericString $vcpu;
}

class EC2ResourceUtilization {
  public GenericString $max_cpu_utilization_percentage;
  public GenericString $max_memory_utilization_percentage;
  public GenericString $max_storage_utilization_percentage;
}

class EC2Specification {
  public OfferingClass $offering_class;
}

class ESInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericString $instance_class;
  public GenericString $instance_size;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;
}

class ElastiCacheInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericString $family;
  public GenericString $node_type;
  public GenericString $product_description;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;
}

class Entity {
}

class ErrorMessage {
}

class Estimated {
}

class Expression {
  public Expressions $and;
  public CostCategoryValues $cost_categories;
  public DimensionValues $dimensions;
  public Expression $not;
  public Expressions $or;
  public TagValues $tags;
}

class Expressions {
}

class ForecastResult {
  public GenericString $mean_value;
  public GenericString $prediction_interval_lower_bound;
  public GenericString $prediction_interval_upper_bound;
  public DateInterval $time_period;
}

class ForecastResultsByTime {
}

class GenericBoolean {
}

class GenericString {
}

class GetCostAndUsageRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public MetricNames $metrics;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;
}

class GetCostAndUsageResponse {
  public GroupDefinitions $group_definitions;
  public NextPageToken $next_page_token;
  public ResultsByTime $results_by_time;
}

class GetCostAndUsageWithResourcesRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public MetricNames $metrics;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;
}

class GetCostAndUsageWithResourcesResponse {
  public GroupDefinitions $group_definitions;
  public NextPageToken $next_page_token;
  public ResultsByTime $results_by_time;
}

class GetCostForecastRequest {
  public Expression $filter;
  public Granularity $granularity;
  public Metric $metric;
  public PredictionIntervalLevel $prediction_interval_level;
  public DateInterval $time_period;
}

class GetCostForecastResponse {
  public ForecastResultsByTime $forecast_results_by_time;
  public MetricValue $total;
}

class GetDimensionValuesRequest {
  public Context $context;
  public Dimension $dimension;
  public NextPageToken $next_page_token;
  public SearchString $search_string;
  public DateInterval $time_period;
}

class GetDimensionValuesResponse {
  public DimensionValuesWithAttributesList $dimension_values;
  public NextPageToken $next_page_token;
  public PageSize $return_size;
  public PageSize $total_size;
}

class GetReservationCoverageRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public MetricNames $metrics;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;
}

class GetReservationCoverageResponse {
  public CoveragesByTime $coverages_by_time;
  public NextPageToken $next_page_token;
  public Coverage $total;
}

class GetReservationPurchaseRecommendationRequest {
  public GenericString $account_id;
  public AccountScope $account_scope;
  public LookbackPeriodInDays $lookback_period_in_days;
  public NextPageToken $next_page_token;
  public NonNegativeInteger $page_size;
  public PaymentOption $payment_option;
  public GenericString $service;
  public ServiceSpecification $service_specification;
  public TermInYears $term_in_years;
}

class GetReservationPurchaseRecommendationResponse {
  public ReservationPurchaseRecommendationMetadata $metadata;
  public NextPageToken $next_page_token;
  public ReservationPurchaseRecommendations $recommendations;
}

class GetReservationUtilizationRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;
}

class GetReservationUtilizationResponse {
  public NextPageToken $next_page_token;
  public ReservationAggregates $total;
  public UtilizationsByTime $utilizations_by_time;
}

class GetRightsizingRecommendationRequest {
  public RightsizingRecommendationConfiguration $configuration;
  public Expression $filter;
  public NextPageToken $next_page_token;
  public NonNegativeInteger $page_size;
  public GenericString $service;
}

class GetRightsizingRecommendationResponse {
  public RightsizingRecommendationConfiguration $configuration;
  public RightsizingRecommendationMetadata $metadata;
  public NextPageToken $next_page_token;
  public RightsizingRecommendationList $rightsizing_recommendations;
  public RightsizingRecommendationSummary $summary;
}

class GetSavingsPlansCoverageRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public MaxResults $max_results;
  public MetricNames $metrics;
  public NextPageToken $next_token;
  public DateInterval $time_period;
}

class GetSavingsPlansCoverageResponse {
  public NextPageToken $next_token;
  public SavingsPlansCoverages $savings_plans_coverages;
}

class GetSavingsPlansPurchaseRecommendationRequest {
  public AccountScope $account_scope;
  public Expression $filter;
  public LookbackPeriodInDays $lookback_period_in_days;
  public NextPageToken $next_page_token;
  public NonNegativeInteger $page_size;
  public PaymentOption $payment_option;
  public SupportedSavingsPlansType $savings_plans_type;
  public TermInYears $term_in_years;
}

class GetSavingsPlansPurchaseRecommendationResponse {
  public SavingsPlansPurchaseRecommendationMetadata $metadata;
  public NextPageToken $next_page_token;
  public SavingsPlansPurchaseRecommendation $savings_plans_purchase_recommendation;
}

class GetSavingsPlansUtilizationDetailsRequest {
  public Expression $filter;
  public MaxResults $max_results;
  public NextPageToken $next_token;
  public DateInterval $time_period;
}

class GetSavingsPlansUtilizationDetailsResponse {
  public NextPageToken $next_token;
  public SavingsPlansUtilizationDetails $savings_plans_utilization_details;
  public DateInterval $time_period;
  public SavingsPlansUtilizationAggregates $total;
}

class GetSavingsPlansUtilizationRequest {
  public Expression $filter;
  public Granularity $granularity;
  public DateInterval $time_period;
}

class GetSavingsPlansUtilizationResponse {
  public SavingsPlansUtilizationsByTime $savings_plans_utilizations_by_time;
  public SavingsPlansUtilizationAggregates $total;
}

class GetTagsRequest {
  public NextPageToken $next_page_token;
  public SearchString $search_string;
  public TagKey $tag_key;
  public DateInterval $time_period;
}

class GetTagsResponse {
  public NextPageToken $next_page_token;
  public PageSize $return_size;
  public TagList $tags;
  public PageSize $total_size;
}

class GetUsageForecastRequest {
  public Expression $filter;
  public Granularity $granularity;
  public Metric $metric;
  public PredictionIntervalLevel $prediction_interval_level;
  public DateInterval $time_period;
}

class GetUsageForecastResponse {
  public ForecastResultsByTime $forecast_results_by_time;
  public MetricValue $total;
}

class Granularity {
}

class Group {
  public Keys $keys;
  public Metrics $metrics;
}

class GroupDefinition {
  public GroupDefinitionKey $key;
  public GroupDefinitionType $type;
}

class GroupDefinitionKey {
}

class GroupDefinitionType {
}

class GroupDefinitions {
}

class Groups {
}

class InstanceDetails {
  public EC2InstanceDetails $ec_2_instance_details;
  public ESInstanceDetails $es_instance_details;
  public ElastiCacheInstanceDetails $elasti_cache_instance_details;
  public RDSInstanceDetails $rds_instance_details;
  public RedshiftInstanceDetails $redshift_instance_details;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class Key {
}

class Keys {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListCostCategoryDefinitionsRequest {
  public ZonedDateTime $effective_on;
  public CostCategoryMaxResults $max_results;
  public NextPageToken $next_token;
}

class ListCostCategoryDefinitionsResponse {
  public CostCategoryReferencesList $cost_category_references;
  public NextPageToken $next_token;
}

class LookbackPeriodInDays {
}

class MatchOption {
}

class MatchOptions {
}

class MaxResults {
}

class Metric {
}

class MetricAmount {
}

class MetricName {
}

class MetricNames {
}

class MetricUnit {
}

class MetricValue {
  public MetricAmount $amount;
  public MetricUnit $unit;
}

class Metrics {
}

class ModifyRecommendationDetail {
  public TargetInstancesList $target_instances;
}

class NetRISavings {
}

class NextPageToken {
}

class NonNegativeInteger {
}

class OfferingClass {
}

class OnDemandCost {
}

class OnDemandCostOfRIHoursUsed {
}

class OnDemandHours {
}

class OnDemandNormalizedUnits {
}

class PageSize {
}

class PaymentOption {
}

class PredictionIntervalLevel {
}

class PurchasedHours {
}

class PurchasedUnits {
}

class RDSInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericString $database_edition;
  public GenericString $database_engine;
  public GenericString $deployment_option;
  public GenericString $family;
  public GenericString $instance_type;
  public GenericString $license_model;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;
}

class RecommendationTarget {
}

class RedshiftInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericString $family;
  public GenericString $node_type;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;
}

class RequestChangedException {
  public ErrorMessage $message;
}

class ReservationAggregates {
  public AmortizedRecurringFee $amortized_recurring_fee;
  public AmortizedUpfrontFee $amortized_upfront_fee;
  public NetRISavings $net_ri_savings;
  public OnDemandCostOfRIHoursUsed $on_demand_cost_of_ri_hours_used;
  public PurchasedHours $purchased_hours;
  public PurchasedUnits $purchased_units;
  public TotalActualHours $total_actual_hours;
  public TotalActualUnits $total_actual_units;
  public TotalAmortizedFee $total_amortized_fee;
  public TotalPotentialRISavings $total_potential_ri_savings;
  public UnusedHours $unused_hours;
  public UnusedUnits $unused_units;
  public UtilizationPercentage $utilization_percentage;
  public UtilizationPercentageInUnits $utilization_percentage_in_units;
}

class ReservationCoverageGroup {
  public Attributes $attributes;
  public Coverage $coverage;
}

class ReservationCoverageGroups {
}

class ReservationGroupKey {
}

class ReservationGroupValue {
}

class ReservationPurchaseRecommendation {
  public AccountScope $account_scope;
  public LookbackPeriodInDays $lookback_period_in_days;
  public PaymentOption $payment_option;
  public ReservationPurchaseRecommendationDetails $recommendation_details;
  public ReservationPurchaseRecommendationSummary $recommendation_summary;
  public ServiceSpecification $service_specification;
  public TermInYears $term_in_years;
}

class ReservationPurchaseRecommendationDetail {
  public GenericString $account_id;
  public GenericString $average_normalized_units_used_per_hour;
  public GenericString $average_number_of_instances_used_per_hour;
  public GenericString $average_utilization;
  public GenericString $currency_code;
  public GenericString $estimated_break_even_in_months;
  public GenericString $estimated_monthly_on_demand_cost;
  public GenericString $estimated_monthly_savings_amount;
  public GenericString $estimated_monthly_savings_percentage;
  public GenericString $estimated_reservation_cost_for_lookback_period;
  public InstanceDetails $instance_details;
  public GenericString $maximum_normalized_units_used_per_hour;
  public GenericString $maximum_number_of_instances_used_per_hour;
  public GenericString $minimum_normalized_units_used_per_hour;
  public GenericString $minimum_number_of_instances_used_per_hour;
  public GenericString $recommended_normalized_units_to_purchase;
  public GenericString $recommended_number_of_instances_to_purchase;
  public GenericString $recurring_standard_monthly_cost;
  public GenericString $upfront_cost;
}

class ReservationPurchaseRecommendationDetails {
}

class ReservationPurchaseRecommendationMetadata {
  public GenericString $generation_timestamp;
  public GenericString $recommendation_id;
}

class ReservationPurchaseRecommendationSummary {
  public GenericString $currency_code;
  public GenericString $total_estimated_monthly_savings_amount;
  public GenericString $total_estimated_monthly_savings_percentage;
}

class ReservationPurchaseRecommendations {
}

class ReservationUtilizationGroup {
  public Attributes $attributes;
  public ReservationGroupKey $key;
  public ReservationAggregates $utilization;
  public ReservationGroupValue $value;
}

class ReservationUtilizationGroups {
}

class ReservedHours {
}

class ReservedNormalizedUnits {
}

class ResourceDetails {
  public EC2ResourceDetails $ec_2_resource_details;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ResourceUtilization {
  public EC2ResourceUtilization $ec_2_resource_utilization;
}

class ResultByTime {
  public Estimated $estimated;
  public Groups $groups;
  public DateInterval $time_period;
  public Metrics $total;
}

class ResultsByTime {
}

class RightsizingRecommendation {
  public GenericString $account_id;
  public CurrentInstance $current_instance;
  public ModifyRecommendationDetail $modify_recommendation_detail;
  public RightsizingType $rightsizing_type;
  public TerminateRecommendationDetail $terminate_recommendation_detail;
}

class RightsizingRecommendationConfiguration {
  public GenericBoolean $benefits_considered;
  public RecommendationTarget $recommendation_target;
}

class RightsizingRecommendationList {
}

class RightsizingRecommendationMetadata {
  public GenericString $generation_timestamp;
  public LookbackPeriodInDays $lookback_period_in_days;
  public GenericString $recommendation_id;
}

class RightsizingRecommendationSummary {
  public GenericString $estimated_total_monthly_savings_amount;
  public GenericString $savings_currency_code;
  public GenericString $savings_percentage;
  public GenericString $total_recommendation_count;
}

class RightsizingType {
}

class SavingsPlanArn {
}

class SavingsPlansAmortizedCommitment {
  public GenericString $amortized_recurring_commitment;
  public GenericString $amortized_upfront_commitment;
  public GenericString $total_amortized_commitment;
}

class SavingsPlansCoverage {
  public Attributes $attributes;
  public SavingsPlansCoverageData $coverage;
  public DateInterval $time_period;
}

class SavingsPlansCoverageData {
  public GenericString $coverage_percentage;
  public GenericString $on_demand_cost;
  public GenericString $spend_covered_by_savings_plans;
  public GenericString $total_cost;
}

class SavingsPlansCoverages {
}

class SavingsPlansDetails {
  public GenericString $instance_family;
  public GenericString $offering_id;
  public GenericString $region;
}

class SavingsPlansPurchaseRecommendation {
  public AccountScope $account_scope;
  public LookbackPeriodInDays $lookback_period_in_days;
  public PaymentOption $payment_option;
  public SavingsPlansPurchaseRecommendationDetailList $savings_plans_purchase_recommendation_details;
  public SavingsPlansPurchaseRecommendationSummary $savings_plans_purchase_recommendation_summary;
  public SupportedSavingsPlansType $savings_plans_type;
  public TermInYears $term_in_years;
}

class SavingsPlansPurchaseRecommendationDetail {
  public GenericString $account_id;
  public GenericString $currency_code;
  public GenericString $current_average_hourly_on_demand_spend;
  public GenericString $current_maximum_hourly_on_demand_spend;
  public GenericString $current_minimum_hourly_on_demand_spend;
  public GenericString $estimated_average_utilization;
  public GenericString $estimated_monthly_savings_amount;
  public GenericString $estimated_on_demand_cost;
  public GenericString $estimated_on_demand_cost_with_current_commitment;
  public GenericString $estimated_roi;
  public GenericString $estimated_sp_cost;
  public GenericString $estimated_savings_amount;
  public GenericString $estimated_savings_percentage;
  public GenericString $hourly_commitment_to_purchase;
  public SavingsPlansDetails $savings_plans_details;
  public GenericString $upfront_cost;
}

class SavingsPlansPurchaseRecommendationDetailList {
}

class SavingsPlansPurchaseRecommendationMetadata {
  public GenericString $generation_timestamp;
  public GenericString $recommendation_id;
}

class SavingsPlansPurchaseRecommendationSummary {
  public GenericString $currency_code;
  public GenericString $current_on_demand_spend;
  public GenericString $daily_commitment_to_purchase;
  public GenericString $estimated_monthly_savings_amount;
  public GenericString $estimated_on_demand_cost_with_current_commitment;
  public GenericString $estimated_roi;
  public GenericString $estimated_savings_amount;
  public GenericString $estimated_savings_percentage;
  public GenericString $estimated_total_cost;
  public GenericString $hourly_commitment_to_purchase;
  public GenericString $total_recommendation_count;
}

class SavingsPlansSavings {
  public GenericString $net_savings;
  public GenericString $on_demand_cost_equivalent;
}

class SavingsPlansUtilization {
  public GenericString $total_commitment;
  public GenericString $unused_commitment;
  public GenericString $used_commitment;
  public GenericString $utilization_percentage;
}

class SavingsPlansUtilizationAggregates {
  public SavingsPlansAmortizedCommitment $amortized_commitment;
  public SavingsPlansSavings $savings;
  public SavingsPlansUtilization $utilization;
}

class SavingsPlansUtilizationByTime {
  public SavingsPlansAmortizedCommitment $amortized_commitment;
  public SavingsPlansSavings $savings;
  public DateInterval $time_period;
  public SavingsPlansUtilization $utilization;
}

class SavingsPlansUtilizationDetail {
  public SavingsPlansAmortizedCommitment $amortized_commitment;
  public Attributes $attributes;
  public SavingsPlansSavings $savings;
  public SavingsPlanArn $savings_plan_arn;
  public SavingsPlansUtilization $utilization;
}

class SavingsPlansUtilizationDetails {
}

class SavingsPlansUtilizationsByTime {
}

class SearchString {
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;
}

class ServiceSpecification {
  public EC2Specification $ec_2_specification;
}

class SupportedSavingsPlansType {
}

class TagKey {
}

class TagList {
}

class TagValues {
  public TagKey $key;
  public MatchOptions $match_options;
  public Values $values;
}

class TagValuesList {
}

class TargetInstance {
  public GenericString $currency_code;
  public GenericBoolean $default_target_instance;
  public GenericString $estimated_monthly_cost;
  public GenericString $estimated_monthly_savings;
  public ResourceUtilization $expected_resource_utilization;
  public ResourceDetails $resource_details;
}

class TargetInstancesList {
}

class TermInYears {
}

class TerminateRecommendationDetail {
  public GenericString $currency_code;
  public GenericString $estimated_monthly_savings;
}

class TotalActualHours {
}

class TotalActualUnits {
}

class TotalAmortizedFee {
}

class TotalPotentialRISavings {
}

class TotalRunningHours {
}

class TotalRunningNormalizedUnits {
}

class UnresolvableUsageUnitException {
  public ErrorMessage $message;
}

class UnusedHours {
}

class UnusedUnits {
}

class UpdateCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;
}

class UpdateCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_start;
}

class UtilizationByTime {
  public ReservationUtilizationGroups $groups;
  public DateInterval $time_period;
  public ReservationAggregates $total;
}

class UtilizationPercentage {
}

class UtilizationPercentageInUnits {
}

class UtilizationsByTime {
}

class Value {
}

class Values {
}

class YearMonthDay {
}

class ZonedDateTime {
}

