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

type AccountScope = string;

type AmortizedRecurringFee = string;

type AmortizedUpfrontFee = string;

type Arn = string;

type AttributeType = string;

type AttributeValue = string;

type Attributes = dict<AttributeType, AttributeValue>;

class BillExpirationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Context = string;

class CostCategory {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_end;
  public ZonedDateTime $effective_start;
  public CostCategoryName $name;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;

  public function __construct(shape(
  ?'cost_category_arn' => Arn,
  ?'effective_end' => ZonedDateTime,
  ?'effective_start' => ZonedDateTime,
  ?'name' => CostCategoryName,
  ?'rule_version' => CostCategoryRuleVersion,
  ?'rules' => CostCategoryRulesList,
  ) $s = shape()) {
    $this->cost_category_arn = $cost_category_arn ?? "";
    $this->effective_end = $effective_end ?? "";
    $this->effective_start = $effective_start ?? "";
    $this->name = $name ?? "";
    $this->rule_version = $rule_version ?? "";
    $this->rules = $rules ?? [];
  }
}

type CostCategoryMaxResults = int;

type CostCategoryName = string;

class CostCategoryReference {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_end;
  public ZonedDateTime $effective_start;
  public CostCategoryName $name;
  public NonNegativeInteger $number_of_rules;

  public function __construct(shape(
  ?'cost_category_arn' => Arn,
  ?'effective_end' => ZonedDateTime,
  ?'effective_start' => ZonedDateTime,
  ?'name' => CostCategoryName,
  ?'number_of_rules' => NonNegativeInteger,
  ) $s = shape()) {
    $this->cost_category_arn = $cost_category_arn ?? "";
    $this->effective_end = $effective_end ?? "";
    $this->effective_start = $effective_start ?? "";
    $this->name = $name ?? "";
    $this->number_of_rules = $number_of_rules ?? 0;
  }
}

type CostCategoryReferencesList = vec<CostCategoryReference>;

class CostCategoryRule {
  public Expression $rule;
  public CostCategoryValue $value;

  public function __construct(shape(
  ?'rule' => Expression,
  ?'value' => CostCategoryValue,
  ) $s = shape()) {
    $this->rule = $rule ?? null;
    $this->value = $value ?? "";
  }
}

type CostCategoryRuleVersion = string;

type CostCategoryRulesList = vec<CostCategoryRule>;

type CostCategoryValue = string;

class CostCategoryValues {
  public CostCategoryName $key;
  public Values $values;

  public function __construct(shape(
  ?'key' => CostCategoryName,
  ?'values' => Values,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

class Coverage {
  public CoverageCost $coverage_cost;
  public CoverageHours $coverage_hours;
  public CoverageNormalizedUnits $coverage_normalized_units;

  public function __construct(shape(
  ?'coverage_cost' => CoverageCost,
  ?'coverage_hours' => CoverageHours,
  ?'coverage_normalized_units' => CoverageNormalizedUnits,
  ) $s = shape()) {
    $this->coverage_cost = $coverage_cost ?? null;
    $this->coverage_hours = $coverage_hours ?? null;
    $this->coverage_normalized_units = $coverage_normalized_units ?? null;
  }
}

class CoverageByTime {
  public ReservationCoverageGroups $groups;
  public DateInterval $time_period;
  public Coverage $total;

  public function __construct(shape(
  ?'groups' => ReservationCoverageGroups,
  ?'time_period' => DateInterval,
  ?'total' => Coverage,
  ) $s = shape()) {
    $this->groups = $groups ?? [];
    $this->time_period = $time_period ?? null;
    $this->total = $total ?? null;
  }
}

class CoverageCost {
  public OnDemandCost $on_demand_cost;

  public function __construct(shape(
  ?'on_demand_cost' => OnDemandCost,
  ) $s = shape()) {
    $this->on_demand_cost = $on_demand_cost ?? "";
  }
}

class CoverageHours {
  public CoverageHoursPercentage $coverage_hours_percentage;
  public OnDemandHours $on_demand_hours;
  public ReservedHours $reserved_hours;
  public TotalRunningHours $total_running_hours;

  public function __construct(shape(
  ?'coverage_hours_percentage' => CoverageHoursPercentage,
  ?'on_demand_hours' => OnDemandHours,
  ?'reserved_hours' => ReservedHours,
  ?'total_running_hours' => TotalRunningHours,
  ) $s = shape()) {
    $this->coverage_hours_percentage = $coverage_hours_percentage ?? "";
    $this->on_demand_hours = $on_demand_hours ?? "";
    $this->reserved_hours = $reserved_hours ?? "";
    $this->total_running_hours = $total_running_hours ?? "";
  }
}

type CoverageHoursPercentage = string;

class CoverageNormalizedUnits {
  public CoverageNormalizedUnitsPercentage $coverage_normalized_units_percentage;
  public OnDemandNormalizedUnits $on_demand_normalized_units;
  public ReservedNormalizedUnits $reserved_normalized_units;
  public TotalRunningNormalizedUnits $total_running_normalized_units;

  public function __construct(shape(
  ?'coverage_normalized_units_percentage' => CoverageNormalizedUnitsPercentage,
  ?'on_demand_normalized_units' => OnDemandNormalizedUnits,
  ?'reserved_normalized_units' => ReservedNormalizedUnits,
  ?'total_running_normalized_units' => TotalRunningNormalizedUnits,
  ) $s = shape()) {
    $this->coverage_normalized_units_percentage = $coverage_normalized_units_percentage ?? "";
    $this->on_demand_normalized_units = $on_demand_normalized_units ?? "";
    $this->reserved_normalized_units = $reserved_normalized_units ?? "";
    $this->total_running_normalized_units = $total_running_normalized_units ?? "";
  }
}

type CoverageNormalizedUnitsPercentage = string;

type CoveragesByTime = vec<CoverageByTime>;

class CreateCostCategoryDefinitionRequest {
  public CostCategoryName $name;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;

  public function __construct(shape(
  ?'name' => CostCategoryName,
  ?'rule_version' => CostCategoryRuleVersion,
  ?'rules' => CostCategoryRulesList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->rule_version = $rule_version ?? "";
    $this->rules = $rules ?? [];
  }
}

class CreateCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_start;

  public function __construct(shape(
  ?'cost_category_arn' => Arn,
  ?'effective_start' => ZonedDateTime,
  ) $s = shape()) {
    $this->cost_category_arn = $cost_category_arn ?? "";
    $this->effective_start = $effective_start ?? "";
  }
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

  public function __construct(shape(
  ?'currency_code' => GenericString,
  ?'monthly_cost' => GenericString,
  ?'on_demand_hours_in_lookback_period' => GenericString,
  ?'reservation_covered_hours_in_lookback_period' => GenericString,
  ?'resource_details' => ResourceDetails,
  ?'resource_id' => GenericString,
  ?'resource_utilization' => ResourceUtilization,
  ?'savings_plans_covered_hours_in_lookback_period' => GenericString,
  ?'tags' => TagValuesList,
  ?'total_running_hours_in_lookback_period' => GenericString,
  ) $s = shape()) {
    $this->currency_code = $currency_code ?? "";
    $this->monthly_cost = $monthly_cost ?? "";
    $this->on_demand_hours_in_lookback_period = $on_demand_hours_in_lookback_period ?? "";
    $this->reservation_covered_hours_in_lookback_period = $reservation_covered_hours_in_lookback_period ?? "";
    $this->resource_details = $resource_details ?? null;
    $this->resource_id = $resource_id ?? "";
    $this->resource_utilization = $resource_utilization ?? null;
    $this->savings_plans_covered_hours_in_lookback_period = $savings_plans_covered_hours_in_lookback_period ?? "";
    $this->tags = $tags ?? [];
    $this->total_running_hours_in_lookback_period = $total_running_hours_in_lookback_period ?? "";
  }
}

class DataUnavailableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DateInterval {
  public YearMonthDay $end;
  public YearMonthDay $start;

  public function __construct(shape(
  ?'end' => YearMonthDay,
  ?'start' => YearMonthDay,
  ) $s = shape()) {
    $this->end = $end ?? "";
    $this->start = $start ?? "";
  }
}

class DeleteCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;

  public function __construct(shape(
  ?'cost_category_arn' => Arn,
  ) $s = shape()) {
    $this->cost_category_arn = $cost_category_arn ?? "";
  }
}

class DeleteCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_end;

  public function __construct(shape(
  ?'cost_category_arn' => Arn,
  ?'effective_end' => ZonedDateTime,
  ) $s = shape()) {
    $this->cost_category_arn = $cost_category_arn ?? "";
    $this->effective_end = $effective_end ?? "";
  }
}

class DescribeCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_on;

  public function __construct(shape(
  ?'cost_category_arn' => Arn,
  ?'effective_on' => ZonedDateTime,
  ) $s = shape()) {
    $this->cost_category_arn = $cost_category_arn ?? "";
    $this->effective_on = $effective_on ?? "";
  }
}

class DescribeCostCategoryDefinitionResponse {
  public CostCategory $cost_category;

  public function __construct(shape(
  ?'cost_category' => CostCategory,
  ) $s = shape()) {
    $this->cost_category = $cost_category ?? null;
  }
}

type Dimension = string;

class DimensionValues {
  public Dimension $key;
  public MatchOptions $match_options;
  public Values $values;

  public function __construct(shape(
  ?'key' => Dimension,
  ?'match_options' => MatchOptions,
  ?'values' => Values,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->match_options = $match_options ?? [];
    $this->values = $values ?? [];
  }
}

class DimensionValuesWithAttributes {
  public Attributes $attributes;
  public Value $value;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'value' => Value,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->value = $value ?? "";
  }
}

type DimensionValuesWithAttributesList = vec<DimensionValuesWithAttributes>;

class EC2InstanceDetails {
  public GenericString $availability_zone;
  public GenericBoolean $current_generation;
  public GenericString $family;
  public GenericString $instance_type;
  public GenericString $platform;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;
  public GenericString $tenancy;

  public function __construct(shape(
  ?'availability_zone' => GenericString,
  ?'current_generation' => GenericBoolean,
  ?'family' => GenericString,
  ?'instance_type' => GenericString,
  ?'platform' => GenericString,
  ?'region' => GenericString,
  ?'size_flex_eligible' => GenericBoolean,
  ?'tenancy' => GenericString,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->current_generation = $current_generation ?? false;
    $this->family = $family ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->platform = $platform ?? "";
    $this->region = $region ?? "";
    $this->size_flex_eligible = $size_flex_eligible ?? false;
    $this->tenancy = $tenancy ?? "";
  }
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

  public function __construct(shape(
  ?'hourly_on_demand_rate' => GenericString,
  ?'instance_type' => GenericString,
  ?'memory' => GenericString,
  ?'network_performance' => GenericString,
  ?'platform' => GenericString,
  ?'region' => GenericString,
  ?'sku' => GenericString,
  ?'storage' => GenericString,
  ?'vcpu' => GenericString,
  ) $s = shape()) {
    $this->hourly_on_demand_rate = $hourly_on_demand_rate ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->memory = $memory ?? "";
    $this->network_performance = $network_performance ?? "";
    $this->platform = $platform ?? "";
    $this->region = $region ?? "";
    $this->sku = $sku ?? "";
    $this->storage = $storage ?? "";
    $this->vcpu = $vcpu ?? "";
  }
}

class EC2ResourceUtilization {
  public GenericString $max_cpu_utilization_percentage;
  public GenericString $max_memory_utilization_percentage;
  public GenericString $max_storage_utilization_percentage;

  public function __construct(shape(
  ?'max_cpu_utilization_percentage' => GenericString,
  ?'max_memory_utilization_percentage' => GenericString,
  ?'max_storage_utilization_percentage' => GenericString,
  ) $s = shape()) {
    $this->max_cpu_utilization_percentage = $max_cpu_utilization_percentage ?? "";
    $this->max_memory_utilization_percentage = $max_memory_utilization_percentage ?? "";
    $this->max_storage_utilization_percentage = $max_storage_utilization_percentage ?? "";
  }
}

class EC2Specification {
  public OfferingClass $offering_class;

  public function __construct(shape(
  ?'offering_class' => OfferingClass,
  ) $s = shape()) {
    $this->offering_class = $offering_class ?? "";
  }
}

class ESInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericString $instance_class;
  public GenericString $instance_size;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;

  public function __construct(shape(
  ?'current_generation' => GenericBoolean,
  ?'instance_class' => GenericString,
  ?'instance_size' => GenericString,
  ?'region' => GenericString,
  ?'size_flex_eligible' => GenericBoolean,
  ) $s = shape()) {
    $this->current_generation = $current_generation ?? false;
    $this->instance_class = $instance_class ?? "";
    $this->instance_size = $instance_size ?? "";
    $this->region = $region ?? "";
    $this->size_flex_eligible = $size_flex_eligible ?? false;
  }
}

class ElastiCacheInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericString $family;
  public GenericString $node_type;
  public GenericString $product_description;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;

  public function __construct(shape(
  ?'current_generation' => GenericBoolean,
  ?'family' => GenericString,
  ?'node_type' => GenericString,
  ?'product_description' => GenericString,
  ?'region' => GenericString,
  ?'size_flex_eligible' => GenericBoolean,
  ) $s = shape()) {
    $this->current_generation = $current_generation ?? false;
    $this->family = $family ?? "";
    $this->node_type = $node_type ?? "";
    $this->product_description = $product_description ?? "";
    $this->region = $region ?? "";
    $this->size_flex_eligible = $size_flex_eligible ?? false;
  }
}

type Entity = string;

type ErrorMessage = string;

type Estimated = bool;

class Expression {
  public Expressions $and;
  public CostCategoryValues $cost_categories;
  public DimensionValues $dimensions;
  public Expression $not;
  public Expressions $or;
  public TagValues $tags;

  public function __construct(shape(
  ?'and' => Expressions,
  ?'cost_categories' => CostCategoryValues,
  ?'dimensions' => DimensionValues,
  ?'not' => Expression,
  ?'or' => Expressions,
  ?'tags' => TagValues,
  ) $s = shape()) {
    $this->and = $and ?? [];
    $this->cost_categories = $cost_categories ?? null;
    $this->dimensions = $dimensions ?? null;
    $this->not = $not ?? null;
    $this->or = $or ?? [];
    $this->tags = $tags ?? null;
  }
}

type Expressions = vec<Expression>;

class ForecastResult {
  public GenericString $mean_value;
  public GenericString $prediction_interval_lower_bound;
  public GenericString $prediction_interval_upper_bound;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'mean_value' => GenericString,
  ?'prediction_interval_lower_bound' => GenericString,
  ?'prediction_interval_upper_bound' => GenericString,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->mean_value = $mean_value ?? "";
    $this->prediction_interval_lower_bound = $prediction_interval_lower_bound ?? "";
    $this->prediction_interval_upper_bound = $prediction_interval_upper_bound ?? "";
    $this->time_period = $time_period ?? null;
  }
}

type ForecastResultsByTime = vec<ForecastResult>;

type GenericBoolean = bool;

type GenericString = string;

class GetCostAndUsageRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public MetricNames $metrics;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'granularity' => Granularity,
  ?'group_by' => GroupDefinitions,
  ?'metrics' => MetricNames,
  ?'next_page_token' => NextPageToken,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->granularity = $granularity ?? "";
    $this->group_by = $group_by ?? [];
    $this->metrics = $metrics ?? [];
    $this->next_page_token = $next_page_token ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetCostAndUsageResponse {
  public GroupDefinitions $group_definitions;
  public NextPageToken $next_page_token;
  public ResultsByTime $results_by_time;

  public function __construct(shape(
  ?'group_definitions' => GroupDefinitions,
  ?'next_page_token' => NextPageToken,
  ?'results_by_time' => ResultsByTime,
  ) $s = shape()) {
    $this->group_definitions = $group_definitions ?? [];
    $this->next_page_token = $next_page_token ?? "";
    $this->results_by_time = $results_by_time ?? [];
  }
}

class GetCostAndUsageWithResourcesRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public MetricNames $metrics;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'granularity' => Granularity,
  ?'group_by' => GroupDefinitions,
  ?'metrics' => MetricNames,
  ?'next_page_token' => NextPageToken,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->granularity = $granularity ?? "";
    $this->group_by = $group_by ?? [];
    $this->metrics = $metrics ?? [];
    $this->next_page_token = $next_page_token ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetCostAndUsageWithResourcesResponse {
  public GroupDefinitions $group_definitions;
  public NextPageToken $next_page_token;
  public ResultsByTime $results_by_time;

  public function __construct(shape(
  ?'group_definitions' => GroupDefinitions,
  ?'next_page_token' => NextPageToken,
  ?'results_by_time' => ResultsByTime,
  ) $s = shape()) {
    $this->group_definitions = $group_definitions ?? [];
    $this->next_page_token = $next_page_token ?? "";
    $this->results_by_time = $results_by_time ?? [];
  }
}

class GetCostForecastRequest {
  public Expression $filter;
  public Granularity $granularity;
  public Metric $metric;
  public PredictionIntervalLevel $prediction_interval_level;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'granularity' => Granularity,
  ?'metric' => Metric,
  ?'prediction_interval_level' => PredictionIntervalLevel,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->granularity = $granularity ?? "";
    $this->metric = $metric ?? "";
    $this->prediction_interval_level = $prediction_interval_level ?? 0;
    $this->time_period = $time_period ?? null;
  }
}

class GetCostForecastResponse {
  public ForecastResultsByTime $forecast_results_by_time;
  public MetricValue $total;

  public function __construct(shape(
  ?'forecast_results_by_time' => ForecastResultsByTime,
  ?'total' => MetricValue,
  ) $s = shape()) {
    $this->forecast_results_by_time = $forecast_results_by_time ?? [];
    $this->total = $total ?? null;
  }
}

class GetDimensionValuesRequest {
  public Context $context;
  public Dimension $dimension;
  public NextPageToken $next_page_token;
  public SearchString $search_string;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'context' => Context,
  ?'dimension' => Dimension,
  ?'next_page_token' => NextPageToken,
  ?'search_string' => SearchString,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->context = $context ?? "";
    $this->dimension = $dimension ?? "";
    $this->next_page_token = $next_page_token ?? "";
    $this->search_string = $search_string ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetDimensionValuesResponse {
  public DimensionValuesWithAttributesList $dimension_values;
  public NextPageToken $next_page_token;
  public PageSize $return_size;
  public PageSize $total_size;

  public function __construct(shape(
  ?'dimension_values' => DimensionValuesWithAttributesList,
  ?'next_page_token' => NextPageToken,
  ?'return_size' => PageSize,
  ?'total_size' => PageSize,
  ) $s = shape()) {
    $this->dimension_values = $dimension_values ?? [];
    $this->next_page_token = $next_page_token ?? "";
    $this->return_size = $return_size ?? 0;
    $this->total_size = $total_size ?? 0;
  }
}

class GetReservationCoverageRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public MetricNames $metrics;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'granularity' => Granularity,
  ?'group_by' => GroupDefinitions,
  ?'metrics' => MetricNames,
  ?'next_page_token' => NextPageToken,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->granularity = $granularity ?? "";
    $this->group_by = $group_by ?? [];
    $this->metrics = $metrics ?? [];
    $this->next_page_token = $next_page_token ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetReservationCoverageResponse {
  public CoveragesByTime $coverages_by_time;
  public NextPageToken $next_page_token;
  public Coverage $total;

  public function __construct(shape(
  ?'coverages_by_time' => CoveragesByTime,
  ?'next_page_token' => NextPageToken,
  ?'total' => Coverage,
  ) $s = shape()) {
    $this->coverages_by_time = $coverages_by_time ?? [];
    $this->next_page_token = $next_page_token ?? "";
    $this->total = $total ?? null;
  }
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

  public function __construct(shape(
  ?'account_id' => GenericString,
  ?'account_scope' => AccountScope,
  ?'lookback_period_in_days' => LookbackPeriodInDays,
  ?'next_page_token' => NextPageToken,
  ?'page_size' => NonNegativeInteger,
  ?'payment_option' => PaymentOption,
  ?'service' => GenericString,
  ?'service_specification' => ServiceSpecification,
  ?'term_in_years' => TermInYears,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->account_scope = $account_scope ?? "";
    $this->lookback_period_in_days = $lookback_period_in_days ?? "";
    $this->next_page_token = $next_page_token ?? "";
    $this->page_size = $page_size ?? 0;
    $this->payment_option = $payment_option ?? "";
    $this->service = $service ?? "";
    $this->service_specification = $service_specification ?? null;
    $this->term_in_years = $term_in_years ?? "";
  }
}

class GetReservationPurchaseRecommendationResponse {
  public ReservationPurchaseRecommendationMetadata $metadata;
  public NextPageToken $next_page_token;
  public ReservationPurchaseRecommendations $recommendations;

  public function __construct(shape(
  ?'metadata' => ReservationPurchaseRecommendationMetadata,
  ?'next_page_token' => NextPageToken,
  ?'recommendations' => ReservationPurchaseRecommendations,
  ) $s = shape()) {
    $this->metadata = $metadata ?? null;
    $this->next_page_token = $next_page_token ?? "";
    $this->recommendations = $recommendations ?? [];
  }
}

class GetReservationUtilizationRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public NextPageToken $next_page_token;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'granularity' => Granularity,
  ?'group_by' => GroupDefinitions,
  ?'next_page_token' => NextPageToken,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->granularity = $granularity ?? "";
    $this->group_by = $group_by ?? [];
    $this->next_page_token = $next_page_token ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetReservationUtilizationResponse {
  public NextPageToken $next_page_token;
  public ReservationAggregates $total;
  public UtilizationsByTime $utilizations_by_time;

  public function __construct(shape(
  ?'next_page_token' => NextPageToken,
  ?'total' => ReservationAggregates,
  ?'utilizations_by_time' => UtilizationsByTime,
  ) $s = shape()) {
    $this->next_page_token = $next_page_token ?? "";
    $this->total = $total ?? null;
    $this->utilizations_by_time = $utilizations_by_time ?? [];
  }
}

class GetRightsizingRecommendationRequest {
  public RightsizingRecommendationConfiguration $configuration;
  public Expression $filter;
  public NextPageToken $next_page_token;
  public NonNegativeInteger $page_size;
  public GenericString $service;

  public function __construct(shape(
  ?'configuration' => RightsizingRecommendationConfiguration,
  ?'filter' => Expression,
  ?'next_page_token' => NextPageToken,
  ?'page_size' => NonNegativeInteger,
  ?'service' => GenericString,
  ) $s = shape()) {
    $this->configuration = $configuration ?? null;
    $this->filter = $filter ?? null;
    $this->next_page_token = $next_page_token ?? "";
    $this->page_size = $page_size ?? 0;
    $this->service = $service ?? "";
  }
}

class GetRightsizingRecommendationResponse {
  public RightsizingRecommendationConfiguration $configuration;
  public RightsizingRecommendationMetadata $metadata;
  public NextPageToken $next_page_token;
  public RightsizingRecommendationList $rightsizing_recommendations;
  public RightsizingRecommendationSummary $summary;

  public function __construct(shape(
  ?'configuration' => RightsizingRecommendationConfiguration,
  ?'metadata' => RightsizingRecommendationMetadata,
  ?'next_page_token' => NextPageToken,
  ?'rightsizing_recommendations' => RightsizingRecommendationList,
  ?'summary' => RightsizingRecommendationSummary,
  ) $s = shape()) {
    $this->configuration = $configuration ?? null;
    $this->metadata = $metadata ?? null;
    $this->next_page_token = $next_page_token ?? "";
    $this->rightsizing_recommendations = $rightsizing_recommendations ?? [];
    $this->summary = $summary ?? null;
  }
}

class GetSavingsPlansCoverageRequest {
  public Expression $filter;
  public Granularity $granularity;
  public GroupDefinitions $group_by;
  public MaxResults $max_results;
  public MetricNames $metrics;
  public NextPageToken $next_token;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'granularity' => Granularity,
  ?'group_by' => GroupDefinitions,
  ?'max_results' => MaxResults,
  ?'metrics' => MetricNames,
  ?'next_token' => NextPageToken,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->granularity = $granularity ?? "";
    $this->group_by = $group_by ?? [];
    $this->max_results = $max_results ?? 0;
    $this->metrics = $metrics ?? [];
    $this->next_token = $next_token ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetSavingsPlansCoverageResponse {
  public NextPageToken $next_token;
  public SavingsPlansCoverages $savings_plans_coverages;

  public function __construct(shape(
  ?'next_token' => NextPageToken,
  ?'savings_plans_coverages' => SavingsPlansCoverages,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->savings_plans_coverages = $savings_plans_coverages ?? [];
  }
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

  public function __construct(shape(
  ?'account_scope' => AccountScope,
  ?'filter' => Expression,
  ?'lookback_period_in_days' => LookbackPeriodInDays,
  ?'next_page_token' => NextPageToken,
  ?'page_size' => NonNegativeInteger,
  ?'payment_option' => PaymentOption,
  ?'savings_plans_type' => SupportedSavingsPlansType,
  ?'term_in_years' => TermInYears,
  ) $s = shape()) {
    $this->account_scope = $account_scope ?? "";
    $this->filter = $filter ?? null;
    $this->lookback_period_in_days = $lookback_period_in_days ?? "";
    $this->next_page_token = $next_page_token ?? "";
    $this->page_size = $page_size ?? 0;
    $this->payment_option = $payment_option ?? "";
    $this->savings_plans_type = $savings_plans_type ?? "";
    $this->term_in_years = $term_in_years ?? "";
  }
}

class GetSavingsPlansPurchaseRecommendationResponse {
  public SavingsPlansPurchaseRecommendationMetadata $metadata;
  public NextPageToken $next_page_token;
  public SavingsPlansPurchaseRecommendation $savings_plans_purchase_recommendation;

  public function __construct(shape(
  ?'metadata' => SavingsPlansPurchaseRecommendationMetadata,
  ?'next_page_token' => NextPageToken,
  ?'savings_plans_purchase_recommendation' => SavingsPlansPurchaseRecommendation,
  ) $s = shape()) {
    $this->metadata = $metadata ?? null;
    $this->next_page_token = $next_page_token ?? "";
    $this->savings_plans_purchase_recommendation = $savings_plans_purchase_recommendation ?? null;
  }
}

class GetSavingsPlansUtilizationDetailsRequest {
  public Expression $filter;
  public MaxResults $max_results;
  public NextPageToken $next_token;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'max_results' => MaxResults,
  ?'next_token' => NextPageToken,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetSavingsPlansUtilizationDetailsResponse {
  public NextPageToken $next_token;
  public SavingsPlansUtilizationDetails $savings_plans_utilization_details;
  public DateInterval $time_period;
  public SavingsPlansUtilizationAggregates $total;

  public function __construct(shape(
  ?'next_token' => NextPageToken,
  ?'savings_plans_utilization_details' => SavingsPlansUtilizationDetails,
  ?'time_period' => DateInterval,
  ?'total' => SavingsPlansUtilizationAggregates,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->savings_plans_utilization_details = $savings_plans_utilization_details ?? [];
    $this->time_period = $time_period ?? null;
    $this->total = $total ?? null;
  }
}

class GetSavingsPlansUtilizationRequest {
  public Expression $filter;
  public Granularity $granularity;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'granularity' => Granularity,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->granularity = $granularity ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetSavingsPlansUtilizationResponse {
  public SavingsPlansUtilizationsByTime $savings_plans_utilizations_by_time;
  public SavingsPlansUtilizationAggregates $total;

  public function __construct(shape(
  ?'savings_plans_utilizations_by_time' => SavingsPlansUtilizationsByTime,
  ?'total' => SavingsPlansUtilizationAggregates,
  ) $s = shape()) {
    $this->savings_plans_utilizations_by_time = $savings_plans_utilizations_by_time ?? [];
    $this->total = $total ?? null;
  }
}

class GetTagsRequest {
  public NextPageToken $next_page_token;
  public SearchString $search_string;
  public TagKey $tag_key;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'next_page_token' => NextPageToken,
  ?'search_string' => SearchString,
  ?'tag_key' => TagKey,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->next_page_token = $next_page_token ?? "";
    $this->search_string = $search_string ?? "";
    $this->tag_key = $tag_key ?? "";
    $this->time_period = $time_period ?? null;
  }
}

class GetTagsResponse {
  public NextPageToken $next_page_token;
  public PageSize $return_size;
  public TagList $tags;
  public PageSize $total_size;

  public function __construct(shape(
  ?'next_page_token' => NextPageToken,
  ?'return_size' => PageSize,
  ?'tags' => TagList,
  ?'total_size' => PageSize,
  ) $s = shape()) {
    $this->next_page_token = $next_page_token ?? "";
    $this->return_size = $return_size ?? 0;
    $this->tags = $tags ?? [];
    $this->total_size = $total_size ?? 0;
  }
}

class GetUsageForecastRequest {
  public Expression $filter;
  public Granularity $granularity;
  public Metric $metric;
  public PredictionIntervalLevel $prediction_interval_level;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'filter' => Expression,
  ?'granularity' => Granularity,
  ?'metric' => Metric,
  ?'prediction_interval_level' => PredictionIntervalLevel,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->granularity = $granularity ?? "";
    $this->metric = $metric ?? "";
    $this->prediction_interval_level = $prediction_interval_level ?? 0;
    $this->time_period = $time_period ?? null;
  }
}

class GetUsageForecastResponse {
  public ForecastResultsByTime $forecast_results_by_time;
  public MetricValue $total;

  public function __construct(shape(
  ?'forecast_results_by_time' => ForecastResultsByTime,
  ?'total' => MetricValue,
  ) $s = shape()) {
    $this->forecast_results_by_time = $forecast_results_by_time ?? [];
    $this->total = $total ?? null;
  }
}

type Granularity = string;

class Group {
  public Keys $keys;
  public Metrics $metrics;

  public function __construct(shape(
  ?'keys' => Keys,
  ?'metrics' => Metrics,
  ) $s = shape()) {
    $this->keys = $keys ?? [];
    $this->metrics = $metrics ?? [];
  }
}

class GroupDefinition {
  public GroupDefinitionKey $key;
  public GroupDefinitionType $type;

  public function __construct(shape(
  ?'key' => GroupDefinitionKey,
  ?'type' => GroupDefinitionType,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? "";
  }
}

type GroupDefinitionKey = string;

type GroupDefinitionType = string;

type GroupDefinitions = vec<GroupDefinition>;

type Groups = vec<Group>;

class InstanceDetails {
  public EC2InstanceDetails $ec_2_instance_details;
  public ESInstanceDetails $es_instance_details;
  public ElastiCacheInstanceDetails $elasti_cache_instance_details;
  public RDSInstanceDetails $rds_instance_details;
  public RedshiftInstanceDetails $redshift_instance_details;

  public function __construct(shape(
  ?'ec_2_instance_details' => EC2InstanceDetails,
  ?'es_instance_details' => ESInstanceDetails,
  ?'elasti_cache_instance_details' => ElastiCacheInstanceDetails,
  ?'rds_instance_details' => RDSInstanceDetails,
  ?'redshift_instance_details' => RedshiftInstanceDetails,
  ) $s = shape()) {
    $this->ec_2_instance_details = $ec_2_instance_details ?? null;
    $this->es_instance_details = $es_instance_details ?? null;
    $this->elasti_cache_instance_details = $elasti_cache_instance_details ?? null;
    $this->rds_instance_details = $rds_instance_details ?? null;
    $this->redshift_instance_details = $redshift_instance_details ?? null;
  }
}

class InvalidNextTokenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Key = string;

type Keys = vec<Key>;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListCostCategoryDefinitionsRequest {
  public ZonedDateTime $effective_on;
  public CostCategoryMaxResults $max_results;
  public NextPageToken $next_token;

  public function __construct(shape(
  ?'effective_on' => ZonedDateTime,
  ?'max_results' => CostCategoryMaxResults,
  ?'next_token' => NextPageToken,
  ) $s = shape()) {
    $this->effective_on = $effective_on ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListCostCategoryDefinitionsResponse {
  public CostCategoryReferencesList $cost_category_references;
  public NextPageToken $next_token;

  public function __construct(shape(
  ?'cost_category_references' => CostCategoryReferencesList,
  ?'next_token' => NextPageToken,
  ) $s = shape()) {
    $this->cost_category_references = $cost_category_references ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type LookbackPeriodInDays = string;

type MatchOption = string;

type MatchOptions = vec<MatchOption>;

type MaxResults = int;

type Metric = string;

type MetricAmount = string;

type MetricName = string;

type MetricNames = vec<MetricName>;

type MetricUnit = string;

class MetricValue {
  public MetricAmount $amount;
  public MetricUnit $unit;

  public function __construct(shape(
  ?'amount' => MetricAmount,
  ?'unit' => MetricUnit,
  ) $s = shape()) {
    $this->amount = $amount ?? "";
    $this->unit = $unit ?? "";
  }
}

type Metrics = dict<MetricName, MetricValue>;

class ModifyRecommendationDetail {
  public TargetInstancesList $target_instances;

  public function __construct(shape(
  ?'target_instances' => TargetInstancesList,
  ) $s = shape()) {
    $this->target_instances = $target_instances ?? [];
  }
}

type NetRISavings = string;

type NextPageToken = string;

type NonNegativeInteger = int;

type OfferingClass = string;

type OnDemandCost = string;

type OnDemandCostOfRIHoursUsed = string;

type OnDemandHours = string;

type OnDemandNormalizedUnits = string;

type PageSize = int;

type PaymentOption = string;

type PredictionIntervalLevel = int;

type PurchasedHours = string;

type PurchasedUnits = string;

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

  public function __construct(shape(
  ?'current_generation' => GenericBoolean,
  ?'database_edition' => GenericString,
  ?'database_engine' => GenericString,
  ?'deployment_option' => GenericString,
  ?'family' => GenericString,
  ?'instance_type' => GenericString,
  ?'license_model' => GenericString,
  ?'region' => GenericString,
  ?'size_flex_eligible' => GenericBoolean,
  ) $s = shape()) {
    $this->current_generation = $current_generation ?? false;
    $this->database_edition = $database_edition ?? "";
    $this->database_engine = $database_engine ?? "";
    $this->deployment_option = $deployment_option ?? "";
    $this->family = $family ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->license_model = $license_model ?? "";
    $this->region = $region ?? "";
    $this->size_flex_eligible = $size_flex_eligible ?? false;
  }
}

type RecommendationTarget = string;

class RedshiftInstanceDetails {
  public GenericBoolean $current_generation;
  public GenericString $family;
  public GenericString $node_type;
  public GenericString $region;
  public GenericBoolean $size_flex_eligible;

  public function __construct(shape(
  ?'current_generation' => GenericBoolean,
  ?'family' => GenericString,
  ?'node_type' => GenericString,
  ?'region' => GenericString,
  ?'size_flex_eligible' => GenericBoolean,
  ) $s = shape()) {
    $this->current_generation = $current_generation ?? false;
    $this->family = $family ?? "";
    $this->node_type = $node_type ?? "";
    $this->region = $region ?? "";
    $this->size_flex_eligible = $size_flex_eligible ?? false;
  }
}

class RequestChangedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'amortized_recurring_fee' => AmortizedRecurringFee,
  ?'amortized_upfront_fee' => AmortizedUpfrontFee,
  ?'net_ri_savings' => NetRISavings,
  ?'on_demand_cost_of_ri_hours_used' => OnDemandCostOfRIHoursUsed,
  ?'purchased_hours' => PurchasedHours,
  ?'purchased_units' => PurchasedUnits,
  ?'total_actual_hours' => TotalActualHours,
  ?'total_actual_units' => TotalActualUnits,
  ?'total_amortized_fee' => TotalAmortizedFee,
  ?'total_potential_ri_savings' => TotalPotentialRISavings,
  ?'unused_hours' => UnusedHours,
  ?'unused_units' => UnusedUnits,
  ?'utilization_percentage' => UtilizationPercentage,
  ?'utilization_percentage_in_units' => UtilizationPercentageInUnits,
  ) $s = shape()) {
    $this->amortized_recurring_fee = $amortized_recurring_fee ?? "";
    $this->amortized_upfront_fee = $amortized_upfront_fee ?? "";
    $this->net_ri_savings = $net_ri_savings ?? "";
    $this->on_demand_cost_of_ri_hours_used = $on_demand_cost_of_ri_hours_used ?? "";
    $this->purchased_hours = $purchased_hours ?? "";
    $this->purchased_units = $purchased_units ?? "";
    $this->total_actual_hours = $total_actual_hours ?? "";
    $this->total_actual_units = $total_actual_units ?? "";
    $this->total_amortized_fee = $total_amortized_fee ?? "";
    $this->total_potential_ri_savings = $total_potential_ri_savings ?? "";
    $this->unused_hours = $unused_hours ?? "";
    $this->unused_units = $unused_units ?? "";
    $this->utilization_percentage = $utilization_percentage ?? "";
    $this->utilization_percentage_in_units = $utilization_percentage_in_units ?? "";
  }
}

class ReservationCoverageGroup {
  public Attributes $attributes;
  public Coverage $coverage;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'coverage' => Coverage,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->coverage = $coverage ?? null;
  }
}

type ReservationCoverageGroups = vec<ReservationCoverageGroup>;

type ReservationGroupKey = string;

type ReservationGroupValue = string;

class ReservationPurchaseRecommendation {
  public AccountScope $account_scope;
  public LookbackPeriodInDays $lookback_period_in_days;
  public PaymentOption $payment_option;
  public ReservationPurchaseRecommendationDetails $recommendation_details;
  public ReservationPurchaseRecommendationSummary $recommendation_summary;
  public ServiceSpecification $service_specification;
  public TermInYears $term_in_years;

  public function __construct(shape(
  ?'account_scope' => AccountScope,
  ?'lookback_period_in_days' => LookbackPeriodInDays,
  ?'payment_option' => PaymentOption,
  ?'recommendation_details' => ReservationPurchaseRecommendationDetails,
  ?'recommendation_summary' => ReservationPurchaseRecommendationSummary,
  ?'service_specification' => ServiceSpecification,
  ?'term_in_years' => TermInYears,
  ) $s = shape()) {
    $this->account_scope = $account_scope ?? "";
    $this->lookback_period_in_days = $lookback_period_in_days ?? "";
    $this->payment_option = $payment_option ?? "";
    $this->recommendation_details = $recommendation_details ?? [];
    $this->recommendation_summary = $recommendation_summary ?? null;
    $this->service_specification = $service_specification ?? null;
    $this->term_in_years = $term_in_years ?? "";
  }
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

  public function __construct(shape(
  ?'account_id' => GenericString,
  ?'average_normalized_units_used_per_hour' => GenericString,
  ?'average_number_of_instances_used_per_hour' => GenericString,
  ?'average_utilization' => GenericString,
  ?'currency_code' => GenericString,
  ?'estimated_break_even_in_months' => GenericString,
  ?'estimated_monthly_on_demand_cost' => GenericString,
  ?'estimated_monthly_savings_amount' => GenericString,
  ?'estimated_monthly_savings_percentage' => GenericString,
  ?'estimated_reservation_cost_for_lookback_period' => GenericString,
  ?'instance_details' => InstanceDetails,
  ?'maximum_normalized_units_used_per_hour' => GenericString,
  ?'maximum_number_of_instances_used_per_hour' => GenericString,
  ?'minimum_normalized_units_used_per_hour' => GenericString,
  ?'minimum_number_of_instances_used_per_hour' => GenericString,
  ?'recommended_normalized_units_to_purchase' => GenericString,
  ?'recommended_number_of_instances_to_purchase' => GenericString,
  ?'recurring_standard_monthly_cost' => GenericString,
  ?'upfront_cost' => GenericString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->average_normalized_units_used_per_hour = $average_normalized_units_used_per_hour ?? "";
    $this->average_number_of_instances_used_per_hour = $average_number_of_instances_used_per_hour ?? "";
    $this->average_utilization = $average_utilization ?? "";
    $this->currency_code = $currency_code ?? "";
    $this->estimated_break_even_in_months = $estimated_break_even_in_months ?? "";
    $this->estimated_monthly_on_demand_cost = $estimated_monthly_on_demand_cost ?? "";
    $this->estimated_monthly_savings_amount = $estimated_monthly_savings_amount ?? "";
    $this->estimated_monthly_savings_percentage = $estimated_monthly_savings_percentage ?? "";
    $this->estimated_reservation_cost_for_lookback_period = $estimated_reservation_cost_for_lookback_period ?? "";
    $this->instance_details = $instance_details ?? null;
    $this->maximum_normalized_units_used_per_hour = $maximum_normalized_units_used_per_hour ?? "";
    $this->maximum_number_of_instances_used_per_hour = $maximum_number_of_instances_used_per_hour ?? "";
    $this->minimum_normalized_units_used_per_hour = $minimum_normalized_units_used_per_hour ?? "";
    $this->minimum_number_of_instances_used_per_hour = $minimum_number_of_instances_used_per_hour ?? "";
    $this->recommended_normalized_units_to_purchase = $recommended_normalized_units_to_purchase ?? "";
    $this->recommended_number_of_instances_to_purchase = $recommended_number_of_instances_to_purchase ?? "";
    $this->recurring_standard_monthly_cost = $recurring_standard_monthly_cost ?? "";
    $this->upfront_cost = $upfront_cost ?? "";
  }
}

type ReservationPurchaseRecommendationDetails = vec<ReservationPurchaseRecommendationDetail>;

class ReservationPurchaseRecommendationMetadata {
  public GenericString $generation_timestamp;
  public GenericString $recommendation_id;

  public function __construct(shape(
  ?'generation_timestamp' => GenericString,
  ?'recommendation_id' => GenericString,
  ) $s = shape()) {
    $this->generation_timestamp = $generation_timestamp ?? "";
    $this->recommendation_id = $recommendation_id ?? "";
  }
}

class ReservationPurchaseRecommendationSummary {
  public GenericString $currency_code;
  public GenericString $total_estimated_monthly_savings_amount;
  public GenericString $total_estimated_monthly_savings_percentage;

  public function __construct(shape(
  ?'currency_code' => GenericString,
  ?'total_estimated_monthly_savings_amount' => GenericString,
  ?'total_estimated_monthly_savings_percentage' => GenericString,
  ) $s = shape()) {
    $this->currency_code = $currency_code ?? "";
    $this->total_estimated_monthly_savings_amount = $total_estimated_monthly_savings_amount ?? "";
    $this->total_estimated_monthly_savings_percentage = $total_estimated_monthly_savings_percentage ?? "";
  }
}

type ReservationPurchaseRecommendations = vec<ReservationPurchaseRecommendation>;

class ReservationUtilizationGroup {
  public Attributes $attributes;
  public ReservationGroupKey $key;
  public ReservationAggregates $utilization;
  public ReservationGroupValue $value;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'key' => ReservationGroupKey,
  ?'utilization' => ReservationAggregates,
  ?'value' => ReservationGroupValue,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->key = $key ?? "";
    $this->utilization = $utilization ?? null;
    $this->value = $value ?? "";
  }
}

type ReservationUtilizationGroups = vec<ReservationUtilizationGroup>;

type ReservedHours = string;

type ReservedNormalizedUnits = string;

class ResourceDetails {
  public EC2ResourceDetails $ec_2_resource_details;

  public function __construct(shape(
  ?'ec_2_resource_details' => EC2ResourceDetails,
  ) $s = shape()) {
    $this->ec_2_resource_details = $ec_2_resource_details ?? null;
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceUtilization {
  public EC2ResourceUtilization $ec_2_resource_utilization;

  public function __construct(shape(
  ?'ec_2_resource_utilization' => EC2ResourceUtilization,
  ) $s = shape()) {
    $this->ec_2_resource_utilization = $ec_2_resource_utilization ?? null;
  }
}

class ResultByTime {
  public Estimated $estimated;
  public Groups $groups;
  public DateInterval $time_period;
  public Metrics $total;

  public function __construct(shape(
  ?'estimated' => Estimated,
  ?'groups' => Groups,
  ?'time_period' => DateInterval,
  ?'total' => Metrics,
  ) $s = shape()) {
    $this->estimated = $estimated ?? false;
    $this->groups = $groups ?? [];
    $this->time_period = $time_period ?? null;
    $this->total = $total ?? [];
  }
}

type ResultsByTime = vec<ResultByTime>;

class RightsizingRecommendation {
  public GenericString $account_id;
  public CurrentInstance $current_instance;
  public ModifyRecommendationDetail $modify_recommendation_detail;
  public RightsizingType $rightsizing_type;
  public TerminateRecommendationDetail $terminate_recommendation_detail;

  public function __construct(shape(
  ?'account_id' => GenericString,
  ?'current_instance' => CurrentInstance,
  ?'modify_recommendation_detail' => ModifyRecommendationDetail,
  ?'rightsizing_type' => RightsizingType,
  ?'terminate_recommendation_detail' => TerminateRecommendationDetail,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->current_instance = $current_instance ?? null;
    $this->modify_recommendation_detail = $modify_recommendation_detail ?? null;
    $this->rightsizing_type = $rightsizing_type ?? "";
    $this->terminate_recommendation_detail = $terminate_recommendation_detail ?? null;
  }
}

class RightsizingRecommendationConfiguration {
  public GenericBoolean $benefits_considered;
  public RecommendationTarget $recommendation_target;

  public function __construct(shape(
  ?'benefits_considered' => GenericBoolean,
  ?'recommendation_target' => RecommendationTarget,
  ) $s = shape()) {
    $this->benefits_considered = $benefits_considered ?? false;
    $this->recommendation_target = $recommendation_target ?? "";
  }
}

type RightsizingRecommendationList = vec<RightsizingRecommendation>;

class RightsizingRecommendationMetadata {
  public GenericString $generation_timestamp;
  public LookbackPeriodInDays $lookback_period_in_days;
  public GenericString $recommendation_id;

  public function __construct(shape(
  ?'generation_timestamp' => GenericString,
  ?'lookback_period_in_days' => LookbackPeriodInDays,
  ?'recommendation_id' => GenericString,
  ) $s = shape()) {
    $this->generation_timestamp = $generation_timestamp ?? "";
    $this->lookback_period_in_days = $lookback_period_in_days ?? "";
    $this->recommendation_id = $recommendation_id ?? "";
  }
}

class RightsizingRecommendationSummary {
  public GenericString $estimated_total_monthly_savings_amount;
  public GenericString $savings_currency_code;
  public GenericString $savings_percentage;
  public GenericString $total_recommendation_count;

  public function __construct(shape(
  ?'estimated_total_monthly_savings_amount' => GenericString,
  ?'savings_currency_code' => GenericString,
  ?'savings_percentage' => GenericString,
  ?'total_recommendation_count' => GenericString,
  ) $s = shape()) {
    $this->estimated_total_monthly_savings_amount = $estimated_total_monthly_savings_amount ?? "";
    $this->savings_currency_code = $savings_currency_code ?? "";
    $this->savings_percentage = $savings_percentage ?? "";
    $this->total_recommendation_count = $total_recommendation_count ?? "";
  }
}

type RightsizingType = string;

type SavingsPlanArn = string;

class SavingsPlansAmortizedCommitment {
  public GenericString $amortized_recurring_commitment;
  public GenericString $amortized_upfront_commitment;
  public GenericString $total_amortized_commitment;

  public function __construct(shape(
  ?'amortized_recurring_commitment' => GenericString,
  ?'amortized_upfront_commitment' => GenericString,
  ?'total_amortized_commitment' => GenericString,
  ) $s = shape()) {
    $this->amortized_recurring_commitment = $amortized_recurring_commitment ?? "";
    $this->amortized_upfront_commitment = $amortized_upfront_commitment ?? "";
    $this->total_amortized_commitment = $total_amortized_commitment ?? "";
  }
}

class SavingsPlansCoverage {
  public Attributes $attributes;
  public SavingsPlansCoverageData $coverage;
  public DateInterval $time_period;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'coverage' => SavingsPlansCoverageData,
  ?'time_period' => DateInterval,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->coverage = $coverage ?? null;
    $this->time_period = $time_period ?? null;
  }
}

class SavingsPlansCoverageData {
  public GenericString $coverage_percentage;
  public GenericString $on_demand_cost;
  public GenericString $spend_covered_by_savings_plans;
  public GenericString $total_cost;

  public function __construct(shape(
  ?'coverage_percentage' => GenericString,
  ?'on_demand_cost' => GenericString,
  ?'spend_covered_by_savings_plans' => GenericString,
  ?'total_cost' => GenericString,
  ) $s = shape()) {
    $this->coverage_percentage = $coverage_percentage ?? "";
    $this->on_demand_cost = $on_demand_cost ?? "";
    $this->spend_covered_by_savings_plans = $spend_covered_by_savings_plans ?? "";
    $this->total_cost = $total_cost ?? "";
  }
}

type SavingsPlansCoverages = vec<SavingsPlansCoverage>;

class SavingsPlansDetails {
  public GenericString $instance_family;
  public GenericString $offering_id;
  public GenericString $region;

  public function __construct(shape(
  ?'instance_family' => GenericString,
  ?'offering_id' => GenericString,
  ?'region' => GenericString,
  ) $s = shape()) {
    $this->instance_family = $instance_family ?? "";
    $this->offering_id = $offering_id ?? "";
    $this->region = $region ?? "";
  }
}

class SavingsPlansPurchaseRecommendation {
  public AccountScope $account_scope;
  public LookbackPeriodInDays $lookback_period_in_days;
  public PaymentOption $payment_option;
  public SavingsPlansPurchaseRecommendationDetailList $savings_plans_purchase_recommendation_details;
  public SavingsPlansPurchaseRecommendationSummary $savings_plans_purchase_recommendation_summary;
  public SupportedSavingsPlansType $savings_plans_type;
  public TermInYears $term_in_years;

  public function __construct(shape(
  ?'account_scope' => AccountScope,
  ?'lookback_period_in_days' => LookbackPeriodInDays,
  ?'payment_option' => PaymentOption,
  ?'savings_plans_purchase_recommendation_details' => SavingsPlansPurchaseRecommendationDetailList,
  ?'savings_plans_purchase_recommendation_summary' => SavingsPlansPurchaseRecommendationSummary,
  ?'savings_plans_type' => SupportedSavingsPlansType,
  ?'term_in_years' => TermInYears,
  ) $s = shape()) {
    $this->account_scope = $account_scope ?? "";
    $this->lookback_period_in_days = $lookback_period_in_days ?? "";
    $this->payment_option = $payment_option ?? "";
    $this->savings_plans_purchase_recommendation_details = $savings_plans_purchase_recommendation_details ?? [];
    $this->savings_plans_purchase_recommendation_summary = $savings_plans_purchase_recommendation_summary ?? null;
    $this->savings_plans_type = $savings_plans_type ?? "";
    $this->term_in_years = $term_in_years ?? "";
  }
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

  public function __construct(shape(
  ?'account_id' => GenericString,
  ?'currency_code' => GenericString,
  ?'current_average_hourly_on_demand_spend' => GenericString,
  ?'current_maximum_hourly_on_demand_spend' => GenericString,
  ?'current_minimum_hourly_on_demand_spend' => GenericString,
  ?'estimated_average_utilization' => GenericString,
  ?'estimated_monthly_savings_amount' => GenericString,
  ?'estimated_on_demand_cost' => GenericString,
  ?'estimated_on_demand_cost_with_current_commitment' => GenericString,
  ?'estimated_roi' => GenericString,
  ?'estimated_sp_cost' => GenericString,
  ?'estimated_savings_amount' => GenericString,
  ?'estimated_savings_percentage' => GenericString,
  ?'hourly_commitment_to_purchase' => GenericString,
  ?'savings_plans_details' => SavingsPlansDetails,
  ?'upfront_cost' => GenericString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->currency_code = $currency_code ?? "";
    $this->current_average_hourly_on_demand_spend = $current_average_hourly_on_demand_spend ?? "";
    $this->current_maximum_hourly_on_demand_spend = $current_maximum_hourly_on_demand_spend ?? "";
    $this->current_minimum_hourly_on_demand_spend = $current_minimum_hourly_on_demand_spend ?? "";
    $this->estimated_average_utilization = $estimated_average_utilization ?? "";
    $this->estimated_monthly_savings_amount = $estimated_monthly_savings_amount ?? "";
    $this->estimated_on_demand_cost = $estimated_on_demand_cost ?? "";
    $this->estimated_on_demand_cost_with_current_commitment = $estimated_on_demand_cost_with_current_commitment ?? "";
    $this->estimated_roi = $estimated_roi ?? "";
    $this->estimated_sp_cost = $estimated_sp_cost ?? "";
    $this->estimated_savings_amount = $estimated_savings_amount ?? "";
    $this->estimated_savings_percentage = $estimated_savings_percentage ?? "";
    $this->hourly_commitment_to_purchase = $hourly_commitment_to_purchase ?? "";
    $this->savings_plans_details = $savings_plans_details ?? null;
    $this->upfront_cost = $upfront_cost ?? "";
  }
}

type SavingsPlansPurchaseRecommendationDetailList = vec<SavingsPlansPurchaseRecommendationDetail>;

class SavingsPlansPurchaseRecommendationMetadata {
  public GenericString $generation_timestamp;
  public GenericString $recommendation_id;

  public function __construct(shape(
  ?'generation_timestamp' => GenericString,
  ?'recommendation_id' => GenericString,
  ) $s = shape()) {
    $this->generation_timestamp = $generation_timestamp ?? "";
    $this->recommendation_id = $recommendation_id ?? "";
  }
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

  public function __construct(shape(
  ?'currency_code' => GenericString,
  ?'current_on_demand_spend' => GenericString,
  ?'daily_commitment_to_purchase' => GenericString,
  ?'estimated_monthly_savings_amount' => GenericString,
  ?'estimated_on_demand_cost_with_current_commitment' => GenericString,
  ?'estimated_roi' => GenericString,
  ?'estimated_savings_amount' => GenericString,
  ?'estimated_savings_percentage' => GenericString,
  ?'estimated_total_cost' => GenericString,
  ?'hourly_commitment_to_purchase' => GenericString,
  ?'total_recommendation_count' => GenericString,
  ) $s = shape()) {
    $this->currency_code = $currency_code ?? "";
    $this->current_on_demand_spend = $current_on_demand_spend ?? "";
    $this->daily_commitment_to_purchase = $daily_commitment_to_purchase ?? "";
    $this->estimated_monthly_savings_amount = $estimated_monthly_savings_amount ?? "";
    $this->estimated_on_demand_cost_with_current_commitment = $estimated_on_demand_cost_with_current_commitment ?? "";
    $this->estimated_roi = $estimated_roi ?? "";
    $this->estimated_savings_amount = $estimated_savings_amount ?? "";
    $this->estimated_savings_percentage = $estimated_savings_percentage ?? "";
    $this->estimated_total_cost = $estimated_total_cost ?? "";
    $this->hourly_commitment_to_purchase = $hourly_commitment_to_purchase ?? "";
    $this->total_recommendation_count = $total_recommendation_count ?? "";
  }
}

class SavingsPlansSavings {
  public GenericString $net_savings;
  public GenericString $on_demand_cost_equivalent;

  public function __construct(shape(
  ?'net_savings' => GenericString,
  ?'on_demand_cost_equivalent' => GenericString,
  ) $s = shape()) {
    $this->net_savings = $net_savings ?? "";
    $this->on_demand_cost_equivalent = $on_demand_cost_equivalent ?? "";
  }
}

class SavingsPlansUtilization {
  public GenericString $total_commitment;
  public GenericString $unused_commitment;
  public GenericString $used_commitment;
  public GenericString $utilization_percentage;

  public function __construct(shape(
  ?'total_commitment' => GenericString,
  ?'unused_commitment' => GenericString,
  ?'used_commitment' => GenericString,
  ?'utilization_percentage' => GenericString,
  ) $s = shape()) {
    $this->total_commitment = $total_commitment ?? "";
    $this->unused_commitment = $unused_commitment ?? "";
    $this->used_commitment = $used_commitment ?? "";
    $this->utilization_percentage = $utilization_percentage ?? "";
  }
}

class SavingsPlansUtilizationAggregates {
  public SavingsPlansAmortizedCommitment $amortized_commitment;
  public SavingsPlansSavings $savings;
  public SavingsPlansUtilization $utilization;

  public function __construct(shape(
  ?'amortized_commitment' => SavingsPlansAmortizedCommitment,
  ?'savings' => SavingsPlansSavings,
  ?'utilization' => SavingsPlansUtilization,
  ) $s = shape()) {
    $this->amortized_commitment = $amortized_commitment ?? null;
    $this->savings = $savings ?? null;
    $this->utilization = $utilization ?? null;
  }
}

class SavingsPlansUtilizationByTime {
  public SavingsPlansAmortizedCommitment $amortized_commitment;
  public SavingsPlansSavings $savings;
  public DateInterval $time_period;
  public SavingsPlansUtilization $utilization;

  public function __construct(shape(
  ?'amortized_commitment' => SavingsPlansAmortizedCommitment,
  ?'savings' => SavingsPlansSavings,
  ?'time_period' => DateInterval,
  ?'utilization' => SavingsPlansUtilization,
  ) $s = shape()) {
    $this->amortized_commitment = $amortized_commitment ?? null;
    $this->savings = $savings ?? null;
    $this->time_period = $time_period ?? null;
    $this->utilization = $utilization ?? null;
  }
}

class SavingsPlansUtilizationDetail {
  public SavingsPlansAmortizedCommitment $amortized_commitment;
  public Attributes $attributes;
  public SavingsPlansSavings $savings;
  public SavingsPlanArn $savings_plan_arn;
  public SavingsPlansUtilization $utilization;

  public function __construct(shape(
  ?'amortized_commitment' => SavingsPlansAmortizedCommitment,
  ?'attributes' => Attributes,
  ?'savings' => SavingsPlansSavings,
  ?'savings_plan_arn' => SavingsPlanArn,
  ?'utilization' => SavingsPlansUtilization,
  ) $s = shape()) {
    $this->amortized_commitment = $amortized_commitment ?? null;
    $this->attributes = $attributes ?? [];
    $this->savings = $savings ?? null;
    $this->savings_plan_arn = $savings_plan_arn ?? "";
    $this->utilization = $utilization ?? null;
  }
}

type SavingsPlansUtilizationDetails = vec<SavingsPlansUtilizationDetail>;

type SavingsPlansUtilizationsByTime = vec<SavingsPlansUtilizationByTime>;

type SearchString = string;

class ServiceQuotaExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ServiceSpecification {
  public EC2Specification $ec_2_specification;

  public function __construct(shape(
  ?'ec_2_specification' => EC2Specification,
  ) $s = shape()) {
    $this->ec_2_specification = $ec_2_specification ?? null;
  }
}

type SupportedSavingsPlansType = string;

type TagKey = string;

type TagList = vec<Entity>;

class TagValues {
  public TagKey $key;
  public MatchOptions $match_options;
  public Values $values;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'match_options' => MatchOptions,
  ?'values' => Values,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->match_options = $match_options ?? [];
    $this->values = $values ?? [];
  }
}

type TagValuesList = vec<TagValues>;

class TargetInstance {
  public GenericString $currency_code;
  public GenericBoolean $default_target_instance;
  public GenericString $estimated_monthly_cost;
  public GenericString $estimated_monthly_savings;
  public ResourceUtilization $expected_resource_utilization;
  public ResourceDetails $resource_details;

  public function __construct(shape(
  ?'currency_code' => GenericString,
  ?'default_target_instance' => GenericBoolean,
  ?'estimated_monthly_cost' => GenericString,
  ?'estimated_monthly_savings' => GenericString,
  ?'expected_resource_utilization' => ResourceUtilization,
  ?'resource_details' => ResourceDetails,
  ) $s = shape()) {
    $this->currency_code = $currency_code ?? "";
    $this->default_target_instance = $default_target_instance ?? false;
    $this->estimated_monthly_cost = $estimated_monthly_cost ?? "";
    $this->estimated_monthly_savings = $estimated_monthly_savings ?? "";
    $this->expected_resource_utilization = $expected_resource_utilization ?? null;
    $this->resource_details = $resource_details ?? null;
  }
}

type TargetInstancesList = vec<TargetInstance>;

type TermInYears = string;

class TerminateRecommendationDetail {
  public GenericString $currency_code;
  public GenericString $estimated_monthly_savings;

  public function __construct(shape(
  ?'currency_code' => GenericString,
  ?'estimated_monthly_savings' => GenericString,
  ) $s = shape()) {
    $this->currency_code = $currency_code ?? "";
    $this->estimated_monthly_savings = $estimated_monthly_savings ?? "";
  }
}

type TotalActualHours = string;

type TotalActualUnits = string;

type TotalAmortizedFee = string;

type TotalPotentialRISavings = string;

type TotalRunningHours = string;

type TotalRunningNormalizedUnits = string;

class UnresolvableUsageUnitException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type UnusedHours = string;

type UnusedUnits = string;

class UpdateCostCategoryDefinitionRequest {
  public Arn $cost_category_arn;
  public CostCategoryRuleVersion $rule_version;
  public CostCategoryRulesList $rules;

  public function __construct(shape(
  ?'cost_category_arn' => Arn,
  ?'rule_version' => CostCategoryRuleVersion,
  ?'rules' => CostCategoryRulesList,
  ) $s = shape()) {
    $this->cost_category_arn = $cost_category_arn ?? "";
    $this->rule_version = $rule_version ?? "";
    $this->rules = $rules ?? [];
  }
}

class UpdateCostCategoryDefinitionResponse {
  public Arn $cost_category_arn;
  public ZonedDateTime $effective_start;

  public function __construct(shape(
  ?'cost_category_arn' => Arn,
  ?'effective_start' => ZonedDateTime,
  ) $s = shape()) {
    $this->cost_category_arn = $cost_category_arn ?? "";
    $this->effective_start = $effective_start ?? "";
  }
}

class UtilizationByTime {
  public ReservationUtilizationGroups $groups;
  public DateInterval $time_period;
  public ReservationAggregates $total;

  public function __construct(shape(
  ?'groups' => ReservationUtilizationGroups,
  ?'time_period' => DateInterval,
  ?'total' => ReservationAggregates,
  ) $s = shape()) {
    $this->groups = $groups ?? [];
    $this->time_period = $time_period ?? null;
    $this->total = $total ?? null;
  }
}

type UtilizationPercentage = string;

type UtilizationPercentageInUnits = string;

type UtilizationsByTime = vec<UtilizationByTime>;

type Value = string;

type Values = vec<Value>;

type YearMonthDay = string;

type ZonedDateTime = string;

