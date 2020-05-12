<?hh // strict
namespace slack\aws\ce;

interface CostExplorer {
  public function CreateCostCategoryDefinition(CreateCostCategoryDefinitionRequest $in): Awaitable<\Errors\Result<CreateCostCategoryDefinitionResponse>>;
  public function DeleteCostCategoryDefinition(DeleteCostCategoryDefinitionRequest $in): Awaitable<\Errors\Result<DeleteCostCategoryDefinitionResponse>>;
  public function DescribeCostCategoryDefinition(DescribeCostCategoryDefinitionRequest $in): Awaitable<\Errors\Result<DescribeCostCategoryDefinitionResponse>>;
  public function GetCostAndUsage(GetCostAndUsageRequest $in): Awaitable<\Errors\Result<GetCostAndUsageResponse>>;
  public function GetCostAndUsageWithResources(GetCostAndUsageWithResourcesRequest $in): Awaitable<\Errors\Result<GetCostAndUsageWithResourcesResponse>>;
  public function GetCostForecast(GetCostForecastRequest $in): Awaitable<\Errors\Result<GetCostForecastResponse>>;
  public function GetDimensionValues(GetDimensionValuesRequest $in): Awaitable<\Errors\Result<GetDimensionValuesResponse>>;
  public function GetReservationCoverage(GetReservationCoverageRequest $in): Awaitable<\Errors\Result<GetReservationCoverageResponse>>;
  public function GetReservationPurchaseRecommendation(GetReservationPurchaseRecommendationRequest $in): Awaitable<\Errors\Result<GetReservationPurchaseRecommendationResponse>>;
  public function GetReservationUtilization(GetReservationUtilizationRequest $in): Awaitable<\Errors\Result<GetReservationUtilizationResponse>>;
  public function GetRightsizingRecommendation(GetRightsizingRecommendationRequest $in): Awaitable<\Errors\Result<GetRightsizingRecommendationResponse>>;
  public function GetSavingsPlansCoverage(GetSavingsPlansCoverageRequest $in): Awaitable<\Errors\Result<GetSavingsPlansCoverageResponse>>;
  public function GetSavingsPlansPurchaseRecommendation(GetSavingsPlansPurchaseRecommendationRequest $in): Awaitable<\Errors\Result<GetSavingsPlansPurchaseRecommendationResponse>>;
  public function GetSavingsPlansUtilization(GetSavingsPlansUtilizationRequest $in): Awaitable<\Errors\Result<GetSavingsPlansUtilizationResponse>>;
  public function GetSavingsPlansUtilizationDetails(GetSavingsPlansUtilizationDetailsRequest $in): Awaitable<\Errors\Result<GetSavingsPlansUtilizationDetailsResponse>>;
  public function GetTags(GetTagsRequest $in): Awaitable<\Errors\Result<GetTagsResponse>>;
  public function GetUsageForecast(GetUsageForecastRequest $in): Awaitable<\Errors\Result<GetUsageForecastResponse>>;
  public function ListCostCategoryDefinitions(ListCostCategoryDefinitionsRequest $in): Awaitable<\Errors\Result<ListCostCategoryDefinitionsResponse>>;
  public function UpdateCostCategoryDefinition(UpdateCostCategoryDefinitionRequest $in): Awaitable<\Errors\Result<UpdateCostCategoryDefinitionResponse>>;
}

type AccountScope = string;

type AmortizedRecurringFee = string;

type AmortizedUpfrontFee = string;

type Arn = string;

type AttributeType = string;

type AttributeValue = string;

type Attributes = dict<AttributeType, AttributeValue>;

class BillExpirationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Context = string;

class CostCategory {
  public ?Arn $cost_category_arn;
  public ?ZonedDateTime $effective_end;
  public ?ZonedDateTime $effective_start;
  public ?CostCategoryName $name;
  public ?CostCategoryRuleVersion $rule_version;
  public ?CostCategoryRulesList $rules;

  public function __construct(shape(
    ?'cost_category_arn' => ?Arn,
    ?'effective_end' => ?ZonedDateTime,
    ?'effective_start' => ?ZonedDateTime,
    ?'name' => ?CostCategoryName,
    ?'rule_version' => ?CostCategoryRuleVersion,
    ?'rules' => ?CostCategoryRulesList,
  ) $s = shape()) {
    $this->cost_category_arn = $s['cost_category_arn'] ?? '';
    $this->effective_end = $s['effective_end'] ?? '';
    $this->effective_start = $s['effective_start'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->rule_version = $s['rule_version'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

type CostCategoryMaxResults = int;

type CostCategoryName = string;

class CostCategoryReference {
  public ?Arn $cost_category_arn;
  public ?ZonedDateTime $effective_end;
  public ?ZonedDateTime $effective_start;
  public ?CostCategoryName $name;
  public ?NonNegativeInteger $number_of_rules;

  public function __construct(shape(
    ?'cost_category_arn' => ?Arn,
    ?'effective_end' => ?ZonedDateTime,
    ?'effective_start' => ?ZonedDateTime,
    ?'name' => ?CostCategoryName,
    ?'number_of_rules' => ?NonNegativeInteger,
  ) $s = shape()) {
    $this->cost_category_arn = $s['cost_category_arn'] ?? '';
    $this->effective_end = $s['effective_end'] ?? '';
    $this->effective_start = $s['effective_start'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->number_of_rules = $s['number_of_rules'] ?? 0;
  }
}

type CostCategoryReferencesList = vec<CostCategoryReference>;

class CostCategoryRule {
  public ?Expression $rule;
  public ?CostCategoryValue $value;

  public function __construct(shape(
    ?'rule' => ?Expression,
    ?'value' => ?CostCategoryValue,
  ) $s = shape()) {
    $this->rule = $s['rule'] ?? null;
    $this->value = $s['value'] ?? '';
  }
}

type CostCategoryRuleVersion = string;

type CostCategoryRulesList = vec<CostCategoryRule>;

type CostCategoryValue = string;

class CostCategoryValues {
  public ?CostCategoryName $key;
  public ?Values $values;

  public function __construct(shape(
    ?'key' => ?CostCategoryName,
    ?'values' => ?Values,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

class Coverage {
  public ?CoverageCost $coverage_cost;
  public ?CoverageHours $coverage_hours;
  public ?CoverageNormalizedUnits $coverage_normalized_units;

  public function __construct(shape(
    ?'coverage_cost' => ?CoverageCost,
    ?'coverage_hours' => ?CoverageHours,
    ?'coverage_normalized_units' => ?CoverageNormalizedUnits,
  ) $s = shape()) {
    $this->coverage_cost = $s['coverage_cost'] ?? null;
    $this->coverage_hours = $s['coverage_hours'] ?? null;
    $this->coverage_normalized_units = $s['coverage_normalized_units'] ?? null;
  }
}

class CoverageByTime {
  public ?ReservationCoverageGroups $groups;
  public ?DateInterval $time_period;
  public ?Coverage $total;

  public function __construct(shape(
    ?'groups' => ?ReservationCoverageGroups,
    ?'time_period' => ?DateInterval,
    ?'total' => ?Coverage,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->time_period = $s['time_period'] ?? null;
    $this->total = $s['total'] ?? null;
  }
}

class CoverageCost {
  public ?OnDemandCost $on_demand_cost;

  public function __construct(shape(
    ?'on_demand_cost' => ?OnDemandCost,
  ) $s = shape()) {
    $this->on_demand_cost = $s['on_demand_cost'] ?? '';
  }
}

class CoverageHours {
  public ?CoverageHoursPercentage $coverage_hours_percentage;
  public ?OnDemandHours $on_demand_hours;
  public ?ReservedHours $reserved_hours;
  public ?TotalRunningHours $total_running_hours;

  public function __construct(shape(
    ?'coverage_hours_percentage' => ?CoverageHoursPercentage,
    ?'on_demand_hours' => ?OnDemandHours,
    ?'reserved_hours' => ?ReservedHours,
    ?'total_running_hours' => ?TotalRunningHours,
  ) $s = shape()) {
    $this->coverage_hours_percentage = $s['coverage_hours_percentage'] ?? '';
    $this->on_demand_hours = $s['on_demand_hours'] ?? '';
    $this->reserved_hours = $s['reserved_hours'] ?? '';
    $this->total_running_hours = $s['total_running_hours'] ?? '';
  }
}

type CoverageHoursPercentage = string;

class CoverageNormalizedUnits {
  public ?CoverageNormalizedUnitsPercentage $coverage_normalized_units_percentage;
  public ?OnDemandNormalizedUnits $on_demand_normalized_units;
  public ?ReservedNormalizedUnits $reserved_normalized_units;
  public ?TotalRunningNormalizedUnits $total_running_normalized_units;

  public function __construct(shape(
    ?'coverage_normalized_units_percentage' => ?CoverageNormalizedUnitsPercentage,
    ?'on_demand_normalized_units' => ?OnDemandNormalizedUnits,
    ?'reserved_normalized_units' => ?ReservedNormalizedUnits,
    ?'total_running_normalized_units' => ?TotalRunningNormalizedUnits,
  ) $s = shape()) {
    $this->coverage_normalized_units_percentage = $s['coverage_normalized_units_percentage'] ?? '';
    $this->on_demand_normalized_units = $s['on_demand_normalized_units'] ?? '';
    $this->reserved_normalized_units = $s['reserved_normalized_units'] ?? '';
    $this->total_running_normalized_units = $s['total_running_normalized_units'] ?? '';
  }
}

type CoverageNormalizedUnitsPercentage = string;

type CoveragesByTime = vec<CoverageByTime>;

class CreateCostCategoryDefinitionRequest {
  public ?CostCategoryName $name;
  public ?CostCategoryRuleVersion $rule_version;
  public ?CostCategoryRulesList $rules;

  public function __construct(shape(
    ?'name' => ?CostCategoryName,
    ?'rule_version' => ?CostCategoryRuleVersion,
    ?'rules' => ?CostCategoryRulesList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->rule_version = $s['rule_version'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class CreateCostCategoryDefinitionResponse {
  public ?Arn $cost_category_arn;
  public ?ZonedDateTime $effective_start;

  public function __construct(shape(
    ?'cost_category_arn' => ?Arn,
    ?'effective_start' => ?ZonedDateTime,
  ) $s = shape()) {
    $this->cost_category_arn = $s['cost_category_arn'] ?? '';
    $this->effective_start = $s['effective_start'] ?? '';
  }
}

class CurrentInstance {
  public ?GenericString $currency_code;
  public ?GenericString $monthly_cost;
  public ?GenericString $on_demand_hours_in_lookback_period;
  public ?GenericString $reservation_covered_hours_in_lookback_period;
  public ?ResourceDetails $resource_details;
  public ?GenericString $resource_id;
  public ?ResourceUtilization $resource_utilization;
  public ?GenericString $savings_plans_covered_hours_in_lookback_period;
  public ?TagValuesList $tags;
  public ?GenericString $total_running_hours_in_lookback_period;

  public function __construct(shape(
    ?'currency_code' => ?GenericString,
    ?'monthly_cost' => ?GenericString,
    ?'on_demand_hours_in_lookback_period' => ?GenericString,
    ?'reservation_covered_hours_in_lookback_period' => ?GenericString,
    ?'resource_details' => ?ResourceDetails,
    ?'resource_id' => ?GenericString,
    ?'resource_utilization' => ?ResourceUtilization,
    ?'savings_plans_covered_hours_in_lookback_period' => ?GenericString,
    ?'tags' => ?TagValuesList,
    ?'total_running_hours_in_lookback_period' => ?GenericString,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->monthly_cost = $s['monthly_cost'] ?? '';
    $this->on_demand_hours_in_lookback_period = $s['on_demand_hours_in_lookback_period'] ?? '';
    $this->reservation_covered_hours_in_lookback_period = $s['reservation_covered_hours_in_lookback_period'] ?? '';
    $this->resource_details = $s['resource_details'] ?? null;
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_utilization = $s['resource_utilization'] ?? null;
    $this->savings_plans_covered_hours_in_lookback_period = $s['savings_plans_covered_hours_in_lookback_period'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->total_running_hours_in_lookback_period = $s['total_running_hours_in_lookback_period'] ?? '';
  }
}

class DataUnavailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DateInterval {
  public ?YearMonthDay $end;
  public ?YearMonthDay $start;

  public function __construct(shape(
    ?'end' => ?YearMonthDay,
    ?'start' => ?YearMonthDay,
  ) $s = shape()) {
    $this->end = $s['end'] ?? '';
    $this->start = $s['start'] ?? '';
  }
}

class DeleteCostCategoryDefinitionRequest {
  public ?Arn $cost_category_arn;

  public function __construct(shape(
    ?'cost_category_arn' => ?Arn,
  ) $s = shape()) {
    $this->cost_category_arn = $s['cost_category_arn'] ?? '';
  }
}

class DeleteCostCategoryDefinitionResponse {
  public ?Arn $cost_category_arn;
  public ?ZonedDateTime $effective_end;

  public function __construct(shape(
    ?'cost_category_arn' => ?Arn,
    ?'effective_end' => ?ZonedDateTime,
  ) $s = shape()) {
    $this->cost_category_arn = $s['cost_category_arn'] ?? '';
    $this->effective_end = $s['effective_end'] ?? '';
  }
}

class DescribeCostCategoryDefinitionRequest {
  public ?Arn $cost_category_arn;
  public ?ZonedDateTime $effective_on;

  public function __construct(shape(
    ?'cost_category_arn' => ?Arn,
    ?'effective_on' => ?ZonedDateTime,
  ) $s = shape()) {
    $this->cost_category_arn = $s['cost_category_arn'] ?? '';
    $this->effective_on = $s['effective_on'] ?? '';
  }
}

class DescribeCostCategoryDefinitionResponse {
  public ?CostCategory $cost_category;

  public function __construct(shape(
    ?'cost_category' => ?CostCategory,
  ) $s = shape()) {
    $this->cost_category = $s['cost_category'] ?? null;
  }
}

type Dimension = string;

class DimensionValues {
  public ?Dimension $key;
  public ?MatchOptions $match_options;
  public ?Values $values;

  public function __construct(shape(
    ?'key' => ?Dimension,
    ?'match_options' => ?MatchOptions,
    ?'values' => ?Values,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->match_options = $s['match_options'] ?? vec[];
    $this->values = $s['values'] ?? vec[];
  }
}

class DimensionValuesWithAttributes {
  public ?Attributes $attributes;
  public ?Value $value;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->value = $s['value'] ?? '';
  }
}

type DimensionValuesWithAttributesList = vec<DimensionValuesWithAttributes>;

class EC2InstanceDetails {
  public ?GenericString $availability_zone;
  public ?GenericBoolean $current_generation;
  public ?GenericString $family;
  public ?GenericString $instance_type;
  public ?GenericString $platform;
  public ?GenericString $region;
  public ?GenericBoolean $size_flex_eligible;
  public ?GenericString $tenancy;

  public function __construct(shape(
    ?'availability_zone' => ?GenericString,
    ?'current_generation' => ?GenericBoolean,
    ?'family' => ?GenericString,
    ?'instance_type' => ?GenericString,
    ?'platform' => ?GenericString,
    ?'region' => ?GenericString,
    ?'size_flex_eligible' => ?GenericBoolean,
    ?'tenancy' => ?GenericString,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->current_generation = $s['current_generation'] ?? false;
    $this->family = $s['family'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->size_flex_eligible = $s['size_flex_eligible'] ?? false;
    $this->tenancy = $s['tenancy'] ?? '';
  }
}

class EC2ResourceDetails {
  public ?GenericString $hourly_on_demand_rate;
  public ?GenericString $instance_type;
  public ?GenericString $memory;
  public ?GenericString $network_performance;
  public ?GenericString $platform;
  public ?GenericString $region;
  public ?GenericString $sku;
  public ?GenericString $storage;
  public ?GenericString $vcpu;

  public function __construct(shape(
    ?'hourly_on_demand_rate' => ?GenericString,
    ?'instance_type' => ?GenericString,
    ?'memory' => ?GenericString,
    ?'network_performance' => ?GenericString,
    ?'platform' => ?GenericString,
    ?'region' => ?GenericString,
    ?'sku' => ?GenericString,
    ?'storage' => ?GenericString,
    ?'vcpu' => ?GenericString,
  ) $s = shape()) {
    $this->hourly_on_demand_rate = $s['hourly_on_demand_rate'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->memory = $s['memory'] ?? '';
    $this->network_performance = $s['network_performance'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->sku = $s['sku'] ?? '';
    $this->storage = $s['storage'] ?? '';
    $this->vcpu = $s['vcpu'] ?? '';
  }
}

class EC2ResourceUtilization {
  public ?GenericString $max_cpu_utilization_percentage;
  public ?GenericString $max_memory_utilization_percentage;
  public ?GenericString $max_storage_utilization_percentage;

  public function __construct(shape(
    ?'max_cpu_utilization_percentage' => ?GenericString,
    ?'max_memory_utilization_percentage' => ?GenericString,
    ?'max_storage_utilization_percentage' => ?GenericString,
  ) $s = shape()) {
    $this->max_cpu_utilization_percentage = $s['max_cpu_utilization_percentage'] ?? '';
    $this->max_memory_utilization_percentage = $s['max_memory_utilization_percentage'] ?? '';
    $this->max_storage_utilization_percentage = $s['max_storage_utilization_percentage'] ?? '';
  }
}

class EC2Specification {
  public ?OfferingClass $offering_class;

  public function __construct(shape(
    ?'offering_class' => ?OfferingClass,
  ) $s = shape()) {
    $this->offering_class = $s['offering_class'] ?? '';
  }
}

class ESInstanceDetails {
  public ?GenericBoolean $current_generation;
  public ?GenericString $instance_class;
  public ?GenericString $instance_size;
  public ?GenericString $region;
  public ?GenericBoolean $size_flex_eligible;

  public function __construct(shape(
    ?'current_generation' => ?GenericBoolean,
    ?'instance_class' => ?GenericString,
    ?'instance_size' => ?GenericString,
    ?'region' => ?GenericString,
    ?'size_flex_eligible' => ?GenericBoolean,
  ) $s = shape()) {
    $this->current_generation = $s['current_generation'] ?? false;
    $this->instance_class = $s['instance_class'] ?? '';
    $this->instance_size = $s['instance_size'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->size_flex_eligible = $s['size_flex_eligible'] ?? false;
  }
}

class ElastiCacheInstanceDetails {
  public ?GenericBoolean $current_generation;
  public ?GenericString $family;
  public ?GenericString $node_type;
  public ?GenericString $product_description;
  public ?GenericString $region;
  public ?GenericBoolean $size_flex_eligible;

  public function __construct(shape(
    ?'current_generation' => ?GenericBoolean,
    ?'family' => ?GenericString,
    ?'node_type' => ?GenericString,
    ?'product_description' => ?GenericString,
    ?'region' => ?GenericString,
    ?'size_flex_eligible' => ?GenericBoolean,
  ) $s = shape()) {
    $this->current_generation = $s['current_generation'] ?? false;
    $this->family = $s['family'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->size_flex_eligible = $s['size_flex_eligible'] ?? false;
  }
}

type Entity = string;

type ErrorMessage = string;

type Estimated = bool;

class Expression {
  public ?Expressions $and;
  public ?CostCategoryValues $cost_categories;
  public ?DimensionValues $dimensions;
  public ?Expression $not;
  public ?Expressions $or;
  public ?TagValues $tags;

  public function __construct(shape(
    ?'and' => ?Expressions,
    ?'cost_categories' => ?CostCategoryValues,
    ?'dimensions' => ?DimensionValues,
    ?'not' => ?Expression,
    ?'or' => ?Expressions,
    ?'tags' => ?TagValues,
  ) $s = shape()) {
    $this->and = $s['and'] ?? vec[];
    $this->cost_categories = $s['cost_categories'] ?? null;
    $this->dimensions = $s['dimensions'] ?? null;
    $this->not = $s['not'] ?? null;
    $this->or = $s['or'] ?? vec[];
    $this->tags = $s['tags'] ?? null;
  }
}

type Expressions = vec<Expression>;

class ForecastResult {
  public ?GenericString $mean_value;
  public ?GenericString $prediction_interval_lower_bound;
  public ?GenericString $prediction_interval_upper_bound;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'mean_value' => ?GenericString,
    ?'prediction_interval_lower_bound' => ?GenericString,
    ?'prediction_interval_upper_bound' => ?GenericString,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->mean_value = $s['mean_value'] ?? '';
    $this->prediction_interval_lower_bound = $s['prediction_interval_lower_bound'] ?? '';
    $this->prediction_interval_upper_bound = $s['prediction_interval_upper_bound'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

type ForecastResultsByTime = vec<ForecastResult>;

type GenericBoolean = bool;

type GenericString = string;

class GetCostAndUsageRequest {
  public ?Expression $filter;
  public ?Granularity $granularity;
  public ?GroupDefinitions $group_by;
  public ?MetricNames $metrics;
  public ?NextPageToken $next_page_token;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'granularity' => ?Granularity,
    ?'group_by' => ?GroupDefinitions,
    ?'metrics' => ?MetricNames,
    ?'next_page_token' => ?NextPageToken,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->granularity = $s['granularity'] ?? '';
    $this->group_by = $s['group_by'] ?? vec[];
    $this->metrics = $s['metrics'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetCostAndUsageResponse {
  public ?GroupDefinitions $group_definitions;
  public ?NextPageToken $next_page_token;
  public ?ResultsByTime $results_by_time;

  public function __construct(shape(
    ?'group_definitions' => ?GroupDefinitions,
    ?'next_page_token' => ?NextPageToken,
    ?'results_by_time' => ?ResultsByTime,
  ) $s = shape()) {
    $this->group_definitions = $s['group_definitions'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->results_by_time = $s['results_by_time'] ?? vec[];
  }
}

class GetCostAndUsageWithResourcesRequest {
  public ?Expression $filter;
  public ?Granularity $granularity;
  public ?GroupDefinitions $group_by;
  public ?MetricNames $metrics;
  public ?NextPageToken $next_page_token;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'granularity' => ?Granularity,
    ?'group_by' => ?GroupDefinitions,
    ?'metrics' => ?MetricNames,
    ?'next_page_token' => ?NextPageToken,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->granularity = $s['granularity'] ?? '';
    $this->group_by = $s['group_by'] ?? vec[];
    $this->metrics = $s['metrics'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetCostAndUsageWithResourcesResponse {
  public ?GroupDefinitions $group_definitions;
  public ?NextPageToken $next_page_token;
  public ?ResultsByTime $results_by_time;

  public function __construct(shape(
    ?'group_definitions' => ?GroupDefinitions,
    ?'next_page_token' => ?NextPageToken,
    ?'results_by_time' => ?ResultsByTime,
  ) $s = shape()) {
    $this->group_definitions = $s['group_definitions'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->results_by_time = $s['results_by_time'] ?? vec[];
  }
}

class GetCostForecastRequest {
  public ?Expression $filter;
  public ?Granularity $granularity;
  public ?Metric $metric;
  public ?PredictionIntervalLevel $prediction_interval_level;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'granularity' => ?Granularity,
    ?'metric' => ?Metric,
    ?'prediction_interval_level' => ?PredictionIntervalLevel,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->granularity = $s['granularity'] ?? '';
    $this->metric = $s['metric'] ?? '';
    $this->prediction_interval_level = $s['prediction_interval_level'] ?? 0;
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetCostForecastResponse {
  public ?ForecastResultsByTime $forecast_results_by_time;
  public ?MetricValue $total;

  public function __construct(shape(
    ?'forecast_results_by_time' => ?ForecastResultsByTime,
    ?'total' => ?MetricValue,
  ) $s = shape()) {
    $this->forecast_results_by_time = $s['forecast_results_by_time'] ?? vec[];
    $this->total = $s['total'] ?? null;
  }
}

class GetDimensionValuesRequest {
  public ?Context $context;
  public ?Dimension $dimension;
  public ?NextPageToken $next_page_token;
  public ?SearchString $search_string;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'context' => ?Context,
    ?'dimension' => ?Dimension,
    ?'next_page_token' => ?NextPageToken,
    ?'search_string' => ?SearchString,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->context = $s['context'] ?? '';
    $this->dimension = $s['dimension'] ?? '';
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->search_string = $s['search_string'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetDimensionValuesResponse {
  public ?DimensionValuesWithAttributesList $dimension_values;
  public ?NextPageToken $next_page_token;
  public ?PageSize $return_size;
  public ?PageSize $total_size;

  public function __construct(shape(
    ?'dimension_values' => ?DimensionValuesWithAttributesList,
    ?'next_page_token' => ?NextPageToken,
    ?'return_size' => ?PageSize,
    ?'total_size' => ?PageSize,
  ) $s = shape()) {
    $this->dimension_values = $s['dimension_values'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->return_size = $s['return_size'] ?? 0;
    $this->total_size = $s['total_size'] ?? 0;
  }
}

class GetReservationCoverageRequest {
  public ?Expression $filter;
  public ?Granularity $granularity;
  public ?GroupDefinitions $group_by;
  public ?MetricNames $metrics;
  public ?NextPageToken $next_page_token;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'granularity' => ?Granularity,
    ?'group_by' => ?GroupDefinitions,
    ?'metrics' => ?MetricNames,
    ?'next_page_token' => ?NextPageToken,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->granularity = $s['granularity'] ?? '';
    $this->group_by = $s['group_by'] ?? vec[];
    $this->metrics = $s['metrics'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetReservationCoverageResponse {
  public ?CoveragesByTime $coverages_by_time;
  public ?NextPageToken $next_page_token;
  public ?Coverage $total;

  public function __construct(shape(
    ?'coverages_by_time' => ?CoveragesByTime,
    ?'next_page_token' => ?NextPageToken,
    ?'total' => ?Coverage,
  ) $s = shape()) {
    $this->coverages_by_time = $s['coverages_by_time'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->total = $s['total'] ?? null;
  }
}

class GetReservationPurchaseRecommendationRequest {
  public ?GenericString $account_id;
  public ?AccountScope $account_scope;
  public ?LookbackPeriodInDays $lookback_period_in_days;
  public ?NextPageToken $next_page_token;
  public ?NonNegativeInteger $page_size;
  public ?PaymentOption $payment_option;
  public ?GenericString $service;
  public ?ServiceSpecification $service_specification;
  public ?TermInYears $term_in_years;

  public function __construct(shape(
    ?'account_id' => ?GenericString,
    ?'account_scope' => ?AccountScope,
    ?'lookback_period_in_days' => ?LookbackPeriodInDays,
    ?'next_page_token' => ?NextPageToken,
    ?'page_size' => ?NonNegativeInteger,
    ?'payment_option' => ?PaymentOption,
    ?'service' => ?GenericString,
    ?'service_specification' => ?ServiceSpecification,
    ?'term_in_years' => ?TermInYears,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->account_scope = $s['account_scope'] ?? '';
    $this->lookback_period_in_days = $s['lookback_period_in_days'] ?? '';
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->payment_option = $s['payment_option'] ?? '';
    $this->service = $s['service'] ?? '';
    $this->service_specification = $s['service_specification'] ?? null;
    $this->term_in_years = $s['term_in_years'] ?? '';
  }
}

class GetReservationPurchaseRecommendationResponse {
  public ?ReservationPurchaseRecommendationMetadata $metadata;
  public ?NextPageToken $next_page_token;
  public ?ReservationPurchaseRecommendations $recommendations;

  public function __construct(shape(
    ?'metadata' => ?ReservationPurchaseRecommendationMetadata,
    ?'next_page_token' => ?NextPageToken,
    ?'recommendations' => ?ReservationPurchaseRecommendations,
  ) $s = shape()) {
    $this->metadata = $s['metadata'] ?? null;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->recommendations = $s['recommendations'] ?? vec[];
  }
}

class GetReservationUtilizationRequest {
  public ?Expression $filter;
  public ?Granularity $granularity;
  public ?GroupDefinitions $group_by;
  public ?NextPageToken $next_page_token;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'granularity' => ?Granularity,
    ?'group_by' => ?GroupDefinitions,
    ?'next_page_token' => ?NextPageToken,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->granularity = $s['granularity'] ?? '';
    $this->group_by = $s['group_by'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetReservationUtilizationResponse {
  public ?NextPageToken $next_page_token;
  public ?ReservationAggregates $total;
  public ?UtilizationsByTime $utilizations_by_time;

  public function __construct(shape(
    ?'next_page_token' => ?NextPageToken,
    ?'total' => ?ReservationAggregates,
    ?'utilizations_by_time' => ?UtilizationsByTime,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->total = $s['total'] ?? null;
    $this->utilizations_by_time = $s['utilizations_by_time'] ?? vec[];
  }
}

class GetRightsizingRecommendationRequest {
  public ?RightsizingRecommendationConfiguration $configuration;
  public ?Expression $filter;
  public ?NextPageToken $next_page_token;
  public ?NonNegativeInteger $page_size;
  public ?GenericString $service;

  public function __construct(shape(
    ?'configuration' => ?RightsizingRecommendationConfiguration,
    ?'filter' => ?Expression,
    ?'next_page_token' => ?NextPageToken,
    ?'page_size' => ?NonNegativeInteger,
    ?'service' => ?GenericString,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->filter = $s['filter'] ?? null;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->service = $s['service'] ?? '';
  }
}

class GetRightsizingRecommendationResponse {
  public ?RightsizingRecommendationConfiguration $configuration;
  public ?RightsizingRecommendationMetadata $metadata;
  public ?NextPageToken $next_page_token;
  public ?RightsizingRecommendationList $rightsizing_recommendations;
  public ?RightsizingRecommendationSummary $summary;

  public function __construct(shape(
    ?'configuration' => ?RightsizingRecommendationConfiguration,
    ?'metadata' => ?RightsizingRecommendationMetadata,
    ?'next_page_token' => ?NextPageToken,
    ?'rightsizing_recommendations' => ?RightsizingRecommendationList,
    ?'summary' => ?RightsizingRecommendationSummary,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->metadata = $s['metadata'] ?? null;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->rightsizing_recommendations = $s['rightsizing_recommendations'] ?? vec[];
    $this->summary = $s['summary'] ?? null;
  }
}

class GetSavingsPlansCoverageRequest {
  public ?Expression $filter;
  public ?Granularity $granularity;
  public ?GroupDefinitions $group_by;
  public ?MaxResults $max_results;
  public ?MetricNames $metrics;
  public ?NextPageToken $next_token;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'granularity' => ?Granularity,
    ?'group_by' => ?GroupDefinitions,
    ?'max_results' => ?MaxResults,
    ?'metrics' => ?MetricNames,
    ?'next_token' => ?NextPageToken,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->granularity = $s['granularity'] ?? '';
    $this->group_by = $s['group_by'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->metrics = $s['metrics'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetSavingsPlansCoverageResponse {
  public ?NextPageToken $next_token;
  public ?SavingsPlansCoverages $savings_plans_coverages;

  public function __construct(shape(
    ?'next_token' => ?NextPageToken,
    ?'savings_plans_coverages' => ?SavingsPlansCoverages,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->savings_plans_coverages = $s['savings_plans_coverages'] ?? vec[];
  }
}

class GetSavingsPlansPurchaseRecommendationRequest {
  public ?AccountScope $account_scope;
  public ?Expression $filter;
  public ?LookbackPeriodInDays $lookback_period_in_days;
  public ?NextPageToken $next_page_token;
  public ?NonNegativeInteger $page_size;
  public ?PaymentOption $payment_option;
  public ?SupportedSavingsPlansType $savings_plans_type;
  public ?TermInYears $term_in_years;

  public function __construct(shape(
    ?'account_scope' => ?AccountScope,
    ?'filter' => ?Expression,
    ?'lookback_period_in_days' => ?LookbackPeriodInDays,
    ?'next_page_token' => ?NextPageToken,
    ?'page_size' => ?NonNegativeInteger,
    ?'payment_option' => ?PaymentOption,
    ?'savings_plans_type' => ?SupportedSavingsPlansType,
    ?'term_in_years' => ?TermInYears,
  ) $s = shape()) {
    $this->account_scope = $s['account_scope'] ?? '';
    $this->filter = $s['filter'] ?? null;
    $this->lookback_period_in_days = $s['lookback_period_in_days'] ?? '';
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->payment_option = $s['payment_option'] ?? '';
    $this->savings_plans_type = $s['savings_plans_type'] ?? '';
    $this->term_in_years = $s['term_in_years'] ?? '';
  }
}

class GetSavingsPlansPurchaseRecommendationResponse {
  public ?SavingsPlansPurchaseRecommendationMetadata $metadata;
  public ?NextPageToken $next_page_token;
  public ?SavingsPlansPurchaseRecommendation $savings_plans_purchase_recommendation;

  public function __construct(shape(
    ?'metadata' => ?SavingsPlansPurchaseRecommendationMetadata,
    ?'next_page_token' => ?NextPageToken,
    ?'savings_plans_purchase_recommendation' => ?SavingsPlansPurchaseRecommendation,
  ) $s = shape()) {
    $this->metadata = $s['metadata'] ?? null;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->savings_plans_purchase_recommendation = $s['savings_plans_purchase_recommendation'] ?? null;
  }
}

class GetSavingsPlansUtilizationDetailsRequest {
  public ?Expression $filter;
  public ?MaxResults $max_results;
  public ?NextPageToken $next_token;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextPageToken,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetSavingsPlansUtilizationDetailsResponse {
  public ?NextPageToken $next_token;
  public ?SavingsPlansUtilizationDetails $savings_plans_utilization_details;
  public ?DateInterval $time_period;
  public ?SavingsPlansUtilizationAggregates $total;

  public function __construct(shape(
    ?'next_token' => ?NextPageToken,
    ?'savings_plans_utilization_details' => ?SavingsPlansUtilizationDetails,
    ?'time_period' => ?DateInterval,
    ?'total' => ?SavingsPlansUtilizationAggregates,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->savings_plans_utilization_details = $s['savings_plans_utilization_details'] ?? vec[];
    $this->time_period = $s['time_period'] ?? null;
    $this->total = $s['total'] ?? null;
  }
}

class GetSavingsPlansUtilizationRequest {
  public ?Expression $filter;
  public ?Granularity $granularity;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'granularity' => ?Granularity,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->granularity = $s['granularity'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetSavingsPlansUtilizationResponse {
  public ?SavingsPlansUtilizationsByTime $savings_plans_utilizations_by_time;
  public ?SavingsPlansUtilizationAggregates $total;

  public function __construct(shape(
    ?'savings_plans_utilizations_by_time' => ?SavingsPlansUtilizationsByTime,
    ?'total' => ?SavingsPlansUtilizationAggregates,
  ) $s = shape()) {
    $this->savings_plans_utilizations_by_time = $s['savings_plans_utilizations_by_time'] ?? vec[];
    $this->total = $s['total'] ?? null;
  }
}

class GetTagsRequest {
  public ?NextPageToken $next_page_token;
  public ?SearchString $search_string;
  public ?TagKey $tag_key;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'next_page_token' => ?NextPageToken,
    ?'search_string' => ?SearchString,
    ?'tag_key' => ?TagKey,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->search_string = $s['search_string'] ?? '';
    $this->tag_key = $s['tag_key'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetTagsResponse {
  public ?NextPageToken $next_page_token;
  public ?PageSize $return_size;
  public ?TagList $tags;
  public ?PageSize $total_size;

  public function __construct(shape(
    ?'next_page_token' => ?NextPageToken,
    ?'return_size' => ?PageSize,
    ?'tags' => ?TagList,
    ?'total_size' => ?PageSize,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->return_size = $s['return_size'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
    $this->total_size = $s['total_size'] ?? 0;
  }
}

class GetUsageForecastRequest {
  public ?Expression $filter;
  public ?Granularity $granularity;
  public ?Metric $metric;
  public ?PredictionIntervalLevel $prediction_interval_level;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'filter' => ?Expression,
    ?'granularity' => ?Granularity,
    ?'metric' => ?Metric,
    ?'prediction_interval_level' => ?PredictionIntervalLevel,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->granularity = $s['granularity'] ?? '';
    $this->metric = $s['metric'] ?? '';
    $this->prediction_interval_level = $s['prediction_interval_level'] ?? 0;
    $this->time_period = $s['time_period'] ?? null;
  }
}

class GetUsageForecastResponse {
  public ?ForecastResultsByTime $forecast_results_by_time;
  public ?MetricValue $total;

  public function __construct(shape(
    ?'forecast_results_by_time' => ?ForecastResultsByTime,
    ?'total' => ?MetricValue,
  ) $s = shape()) {
    $this->forecast_results_by_time = $s['forecast_results_by_time'] ?? vec[];
    $this->total = $s['total'] ?? null;
  }
}

type Granularity = string;

class Group {
  public ?Keys $keys;
  public ?Metrics $metrics;

  public function __construct(shape(
    ?'keys' => ?Keys,
    ?'metrics' => ?Metrics,
  ) $s = shape()) {
    $this->keys = $s['keys'] ?? vec[];
    $this->metrics = $s['metrics'] ?? dict[];
  }
}

class GroupDefinition {
  public ?GroupDefinitionKey $key;
  public ?GroupDefinitionType $type;

  public function __construct(shape(
    ?'key' => ?GroupDefinitionKey,
    ?'type' => ?GroupDefinitionType,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type GroupDefinitionKey = string;

type GroupDefinitionType = string;

type GroupDefinitions = vec<GroupDefinition>;

type Groups = vec<Group>;

class InstanceDetails {
  public ?EC2InstanceDetails $ec_2_instance_details;
  public ?ESInstanceDetails $es_instance_details;
  public ?ElastiCacheInstanceDetails $elasti_cache_instance_details;
  public ?RDSInstanceDetails $rds_instance_details;
  public ?RedshiftInstanceDetails $redshift_instance_details;

  public function __construct(shape(
    ?'ec_2_instance_details' => ?EC2InstanceDetails,
    ?'es_instance_details' => ?ESInstanceDetails,
    ?'elasti_cache_instance_details' => ?ElastiCacheInstanceDetails,
    ?'rds_instance_details' => ?RDSInstanceDetails,
    ?'redshift_instance_details' => ?RedshiftInstanceDetails,
  ) $s = shape()) {
    $this->ec_2_instance_details = $s['ec_2_instance_details'] ?? null;
    $this->es_instance_details = $s['es_instance_details'] ?? null;
    $this->elasti_cache_instance_details = $s['elasti_cache_instance_details'] ?? null;
    $this->rds_instance_details = $s['rds_instance_details'] ?? null;
    $this->redshift_instance_details = $s['redshift_instance_details'] ?? null;
  }
}

class InvalidNextTokenException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Key = string;

type Keys = vec<Key>;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListCostCategoryDefinitionsRequest {
  public ?ZonedDateTime $effective_on;
  public ?CostCategoryMaxResults $max_results;
  public ?NextPageToken $next_token;

  public function __construct(shape(
    ?'effective_on' => ?ZonedDateTime,
    ?'max_results' => ?CostCategoryMaxResults,
    ?'next_token' => ?NextPageToken,
  ) $s = shape()) {
    $this->effective_on = $s['effective_on'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCostCategoryDefinitionsResponse {
  public ?CostCategoryReferencesList $cost_category_references;
  public ?NextPageToken $next_token;

  public function __construct(shape(
    ?'cost_category_references' => ?CostCategoryReferencesList,
    ?'next_token' => ?NextPageToken,
  ) $s = shape()) {
    $this->cost_category_references = $s['cost_category_references'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
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
  public ?MetricAmount $amount;
  public ?MetricUnit $unit;

  public function __construct(shape(
    ?'amount' => ?MetricAmount,
    ?'unit' => ?MetricUnit,
  ) $s = shape()) {
    $this->amount = $s['amount'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

type Metrics = dict<MetricName, MetricValue>;

class ModifyRecommendationDetail {
  public ?TargetInstancesList $target_instances;

  public function __construct(shape(
    ?'target_instances' => ?TargetInstancesList,
  ) $s = shape()) {
    $this->target_instances = $s['target_instances'] ?? vec[];
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
  public ?GenericBoolean $current_generation;
  public ?GenericString $database_edition;
  public ?GenericString $database_engine;
  public ?GenericString $deployment_option;
  public ?GenericString $family;
  public ?GenericString $instance_type;
  public ?GenericString $license_model;
  public ?GenericString $region;
  public ?GenericBoolean $size_flex_eligible;

  public function __construct(shape(
    ?'current_generation' => ?GenericBoolean,
    ?'database_edition' => ?GenericString,
    ?'database_engine' => ?GenericString,
    ?'deployment_option' => ?GenericString,
    ?'family' => ?GenericString,
    ?'instance_type' => ?GenericString,
    ?'license_model' => ?GenericString,
    ?'region' => ?GenericString,
    ?'size_flex_eligible' => ?GenericBoolean,
  ) $s = shape()) {
    $this->current_generation = $s['current_generation'] ?? false;
    $this->database_edition = $s['database_edition'] ?? '';
    $this->database_engine = $s['database_engine'] ?? '';
    $this->deployment_option = $s['deployment_option'] ?? '';
    $this->family = $s['family'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->license_model = $s['license_model'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->size_flex_eligible = $s['size_flex_eligible'] ?? false;
  }
}

type RecommendationTarget = string;

class RedshiftInstanceDetails {
  public ?GenericBoolean $current_generation;
  public ?GenericString $family;
  public ?GenericString $node_type;
  public ?GenericString $region;
  public ?GenericBoolean $size_flex_eligible;

  public function __construct(shape(
    ?'current_generation' => ?GenericBoolean,
    ?'family' => ?GenericString,
    ?'node_type' => ?GenericString,
    ?'region' => ?GenericString,
    ?'size_flex_eligible' => ?GenericBoolean,
  ) $s = shape()) {
    $this->current_generation = $s['current_generation'] ?? false;
    $this->family = $s['family'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->size_flex_eligible = $s['size_flex_eligible'] ?? false;
  }
}

class RequestChangedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ReservationAggregates {
  public ?AmortizedRecurringFee $amortized_recurring_fee;
  public ?AmortizedUpfrontFee $amortized_upfront_fee;
  public ?NetRISavings $net_ri_savings;
  public ?OnDemandCostOfRIHoursUsed $on_demand_cost_of_ri_hours_used;
  public ?PurchasedHours $purchased_hours;
  public ?PurchasedUnits $purchased_units;
  public ?TotalActualHours $total_actual_hours;
  public ?TotalActualUnits $total_actual_units;
  public ?TotalAmortizedFee $total_amortized_fee;
  public ?TotalPotentialRISavings $total_potential_ri_savings;
  public ?UnusedHours $unused_hours;
  public ?UnusedUnits $unused_units;
  public ?UtilizationPercentage $utilization_percentage;
  public ?UtilizationPercentageInUnits $utilization_percentage_in_units;

  public function __construct(shape(
    ?'amortized_recurring_fee' => ?AmortizedRecurringFee,
    ?'amortized_upfront_fee' => ?AmortizedUpfrontFee,
    ?'net_ri_savings' => ?NetRISavings,
    ?'on_demand_cost_of_ri_hours_used' => ?OnDemandCostOfRIHoursUsed,
    ?'purchased_hours' => ?PurchasedHours,
    ?'purchased_units' => ?PurchasedUnits,
    ?'total_actual_hours' => ?TotalActualHours,
    ?'total_actual_units' => ?TotalActualUnits,
    ?'total_amortized_fee' => ?TotalAmortizedFee,
    ?'total_potential_ri_savings' => ?TotalPotentialRISavings,
    ?'unused_hours' => ?UnusedHours,
    ?'unused_units' => ?UnusedUnits,
    ?'utilization_percentage' => ?UtilizationPercentage,
    ?'utilization_percentage_in_units' => ?UtilizationPercentageInUnits,
  ) $s = shape()) {
    $this->amortized_recurring_fee = $s['amortized_recurring_fee'] ?? '';
    $this->amortized_upfront_fee = $s['amortized_upfront_fee'] ?? '';
    $this->net_ri_savings = $s['net_ri_savings'] ?? '';
    $this->on_demand_cost_of_ri_hours_used = $s['on_demand_cost_of_ri_hours_used'] ?? '';
    $this->purchased_hours = $s['purchased_hours'] ?? '';
    $this->purchased_units = $s['purchased_units'] ?? '';
    $this->total_actual_hours = $s['total_actual_hours'] ?? '';
    $this->total_actual_units = $s['total_actual_units'] ?? '';
    $this->total_amortized_fee = $s['total_amortized_fee'] ?? '';
    $this->total_potential_ri_savings = $s['total_potential_ri_savings'] ?? '';
    $this->unused_hours = $s['unused_hours'] ?? '';
    $this->unused_units = $s['unused_units'] ?? '';
    $this->utilization_percentage = $s['utilization_percentage'] ?? '';
    $this->utilization_percentage_in_units = $s['utilization_percentage_in_units'] ?? '';
  }
}

class ReservationCoverageGroup {
  public ?Attributes $attributes;
  public ?Coverage $coverage;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'coverage' => ?Coverage,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->coverage = $s['coverage'] ?? null;
  }
}

type ReservationCoverageGroups = vec<ReservationCoverageGroup>;

type ReservationGroupKey = string;

type ReservationGroupValue = string;

class ReservationPurchaseRecommendation {
  public ?AccountScope $account_scope;
  public ?LookbackPeriodInDays $lookback_period_in_days;
  public ?PaymentOption $payment_option;
  public ?ReservationPurchaseRecommendationDetails $recommendation_details;
  public ?ReservationPurchaseRecommendationSummary $recommendation_summary;
  public ?ServiceSpecification $service_specification;
  public ?TermInYears $term_in_years;

  public function __construct(shape(
    ?'account_scope' => ?AccountScope,
    ?'lookback_period_in_days' => ?LookbackPeriodInDays,
    ?'payment_option' => ?PaymentOption,
    ?'recommendation_details' => ?ReservationPurchaseRecommendationDetails,
    ?'recommendation_summary' => ?ReservationPurchaseRecommendationSummary,
    ?'service_specification' => ?ServiceSpecification,
    ?'term_in_years' => ?TermInYears,
  ) $s = shape()) {
    $this->account_scope = $s['account_scope'] ?? '';
    $this->lookback_period_in_days = $s['lookback_period_in_days'] ?? '';
    $this->payment_option = $s['payment_option'] ?? '';
    $this->recommendation_details = $s['recommendation_details'] ?? vec[];
    $this->recommendation_summary = $s['recommendation_summary'] ?? null;
    $this->service_specification = $s['service_specification'] ?? null;
    $this->term_in_years = $s['term_in_years'] ?? '';
  }
}

class ReservationPurchaseRecommendationDetail {
  public ?GenericString $account_id;
  public ?GenericString $average_normalized_units_used_per_hour;
  public ?GenericString $average_number_of_instances_used_per_hour;
  public ?GenericString $average_utilization;
  public ?GenericString $currency_code;
  public ?GenericString $estimated_break_even_in_months;
  public ?GenericString $estimated_monthly_on_demand_cost;
  public ?GenericString $estimated_monthly_savings_amount;
  public ?GenericString $estimated_monthly_savings_percentage;
  public ?GenericString $estimated_reservation_cost_for_lookback_period;
  public ?InstanceDetails $instance_details;
  public ?GenericString $maximum_normalized_units_used_per_hour;
  public ?GenericString $maximum_number_of_instances_used_per_hour;
  public ?GenericString $minimum_normalized_units_used_per_hour;
  public ?GenericString $minimum_number_of_instances_used_per_hour;
  public ?GenericString $recommended_normalized_units_to_purchase;
  public ?GenericString $recommended_number_of_instances_to_purchase;
  public ?GenericString $recurring_standard_monthly_cost;
  public ?GenericString $upfront_cost;

  public function __construct(shape(
    ?'account_id' => ?GenericString,
    ?'average_normalized_units_used_per_hour' => ?GenericString,
    ?'average_number_of_instances_used_per_hour' => ?GenericString,
    ?'average_utilization' => ?GenericString,
    ?'currency_code' => ?GenericString,
    ?'estimated_break_even_in_months' => ?GenericString,
    ?'estimated_monthly_on_demand_cost' => ?GenericString,
    ?'estimated_monthly_savings_amount' => ?GenericString,
    ?'estimated_monthly_savings_percentage' => ?GenericString,
    ?'estimated_reservation_cost_for_lookback_period' => ?GenericString,
    ?'instance_details' => ?InstanceDetails,
    ?'maximum_normalized_units_used_per_hour' => ?GenericString,
    ?'maximum_number_of_instances_used_per_hour' => ?GenericString,
    ?'minimum_normalized_units_used_per_hour' => ?GenericString,
    ?'minimum_number_of_instances_used_per_hour' => ?GenericString,
    ?'recommended_normalized_units_to_purchase' => ?GenericString,
    ?'recommended_number_of_instances_to_purchase' => ?GenericString,
    ?'recurring_standard_monthly_cost' => ?GenericString,
    ?'upfront_cost' => ?GenericString,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->average_normalized_units_used_per_hour = $s['average_normalized_units_used_per_hour'] ?? '';
    $this->average_number_of_instances_used_per_hour = $s['average_number_of_instances_used_per_hour'] ?? '';
    $this->average_utilization = $s['average_utilization'] ?? '';
    $this->currency_code = $s['currency_code'] ?? '';
    $this->estimated_break_even_in_months = $s['estimated_break_even_in_months'] ?? '';
    $this->estimated_monthly_on_demand_cost = $s['estimated_monthly_on_demand_cost'] ?? '';
    $this->estimated_monthly_savings_amount = $s['estimated_monthly_savings_amount'] ?? '';
    $this->estimated_monthly_savings_percentage = $s['estimated_monthly_savings_percentage'] ?? '';
    $this->estimated_reservation_cost_for_lookback_period = $s['estimated_reservation_cost_for_lookback_period'] ?? '';
    $this->instance_details = $s['instance_details'] ?? null;
    $this->maximum_normalized_units_used_per_hour = $s['maximum_normalized_units_used_per_hour'] ?? '';
    $this->maximum_number_of_instances_used_per_hour = $s['maximum_number_of_instances_used_per_hour'] ?? '';
    $this->minimum_normalized_units_used_per_hour = $s['minimum_normalized_units_used_per_hour'] ?? '';
    $this->minimum_number_of_instances_used_per_hour = $s['minimum_number_of_instances_used_per_hour'] ?? '';
    $this->recommended_normalized_units_to_purchase = $s['recommended_normalized_units_to_purchase'] ?? '';
    $this->recommended_number_of_instances_to_purchase = $s['recommended_number_of_instances_to_purchase'] ?? '';
    $this->recurring_standard_monthly_cost = $s['recurring_standard_monthly_cost'] ?? '';
    $this->upfront_cost = $s['upfront_cost'] ?? '';
  }
}

type ReservationPurchaseRecommendationDetails = vec<ReservationPurchaseRecommendationDetail>;

class ReservationPurchaseRecommendationMetadata {
  public ?GenericString $generation_timestamp;
  public ?GenericString $recommendation_id;

  public function __construct(shape(
    ?'generation_timestamp' => ?GenericString,
    ?'recommendation_id' => ?GenericString,
  ) $s = shape()) {
    $this->generation_timestamp = $s['generation_timestamp'] ?? '';
    $this->recommendation_id = $s['recommendation_id'] ?? '';
  }
}

class ReservationPurchaseRecommendationSummary {
  public ?GenericString $currency_code;
  public ?GenericString $total_estimated_monthly_savings_amount;
  public ?GenericString $total_estimated_monthly_savings_percentage;

  public function __construct(shape(
    ?'currency_code' => ?GenericString,
    ?'total_estimated_monthly_savings_amount' => ?GenericString,
    ?'total_estimated_monthly_savings_percentage' => ?GenericString,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->total_estimated_monthly_savings_amount = $s['total_estimated_monthly_savings_amount'] ?? '';
    $this->total_estimated_monthly_savings_percentage = $s['total_estimated_monthly_savings_percentage'] ?? '';
  }
}

type ReservationPurchaseRecommendations = vec<ReservationPurchaseRecommendation>;

class ReservationUtilizationGroup {
  public ?Attributes $attributes;
  public ?ReservationGroupKey $key;
  public ?ReservationAggregates $utilization;
  public ?ReservationGroupValue $value;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'key' => ?ReservationGroupKey,
    ?'utilization' => ?ReservationAggregates,
    ?'value' => ?ReservationGroupValue,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->key = $s['key'] ?? '';
    $this->utilization = $s['utilization'] ?? null;
    $this->value = $s['value'] ?? '';
  }
}

type ReservationUtilizationGroups = vec<ReservationUtilizationGroup>;

type ReservedHours = string;

type ReservedNormalizedUnits = string;

class ResourceDetails {
  public ?EC2ResourceDetails $ec_2_resource_details;

  public function __construct(shape(
    ?'ec_2_resource_details' => ?EC2ResourceDetails,
  ) $s = shape()) {
    $this->ec_2_resource_details = $s['ec_2_resource_details'] ?? null;
  }
}

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceUtilization {
  public ?EC2ResourceUtilization $ec_2_resource_utilization;

  public function __construct(shape(
    ?'ec_2_resource_utilization' => ?EC2ResourceUtilization,
  ) $s = shape()) {
    $this->ec_2_resource_utilization = $s['ec_2_resource_utilization'] ?? null;
  }
}

class ResultByTime {
  public ?Estimated $estimated;
  public ?Groups $groups;
  public ?DateInterval $time_period;
  public ?Metrics $total;

  public function __construct(shape(
    ?'estimated' => ?Estimated,
    ?'groups' => ?Groups,
    ?'time_period' => ?DateInterval,
    ?'total' => ?Metrics,
  ) $s = shape()) {
    $this->estimated = $s['estimated'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->time_period = $s['time_period'] ?? null;
    $this->total = $s['total'] ?? dict[];
  }
}

type ResultsByTime = vec<ResultByTime>;

class RightsizingRecommendation {
  public ?GenericString $account_id;
  public ?CurrentInstance $current_instance;
  public ?ModifyRecommendationDetail $modify_recommendation_detail;
  public ?RightsizingType $rightsizing_type;
  public ?TerminateRecommendationDetail $terminate_recommendation_detail;

  public function __construct(shape(
    ?'account_id' => ?GenericString,
    ?'current_instance' => ?CurrentInstance,
    ?'modify_recommendation_detail' => ?ModifyRecommendationDetail,
    ?'rightsizing_type' => ?RightsizingType,
    ?'terminate_recommendation_detail' => ?TerminateRecommendationDetail,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->current_instance = $s['current_instance'] ?? null;
    $this->modify_recommendation_detail = $s['modify_recommendation_detail'] ?? null;
    $this->rightsizing_type = $s['rightsizing_type'] ?? '';
    $this->terminate_recommendation_detail = $s['terminate_recommendation_detail'] ?? null;
  }
}

class RightsizingRecommendationConfiguration {
  public ?GenericBoolean $benefits_considered;
  public ?RecommendationTarget $recommendation_target;

  public function __construct(shape(
    ?'benefits_considered' => ?GenericBoolean,
    ?'recommendation_target' => ?RecommendationTarget,
  ) $s = shape()) {
    $this->benefits_considered = $s['benefits_considered'] ?? false;
    $this->recommendation_target = $s['recommendation_target'] ?? '';
  }
}

type RightsizingRecommendationList = vec<RightsizingRecommendation>;

class RightsizingRecommendationMetadata {
  public ?GenericString $generation_timestamp;
  public ?LookbackPeriodInDays $lookback_period_in_days;
  public ?GenericString $recommendation_id;

  public function __construct(shape(
    ?'generation_timestamp' => ?GenericString,
    ?'lookback_period_in_days' => ?LookbackPeriodInDays,
    ?'recommendation_id' => ?GenericString,
  ) $s = shape()) {
    $this->generation_timestamp = $s['generation_timestamp'] ?? '';
    $this->lookback_period_in_days = $s['lookback_period_in_days'] ?? '';
    $this->recommendation_id = $s['recommendation_id'] ?? '';
  }
}

class RightsizingRecommendationSummary {
  public ?GenericString $estimated_total_monthly_savings_amount;
  public ?GenericString $savings_currency_code;
  public ?GenericString $savings_percentage;
  public ?GenericString $total_recommendation_count;

  public function __construct(shape(
    ?'estimated_total_monthly_savings_amount' => ?GenericString,
    ?'savings_currency_code' => ?GenericString,
    ?'savings_percentage' => ?GenericString,
    ?'total_recommendation_count' => ?GenericString,
  ) $s = shape()) {
    $this->estimated_total_monthly_savings_amount = $s['estimated_total_monthly_savings_amount'] ?? '';
    $this->savings_currency_code = $s['savings_currency_code'] ?? '';
    $this->savings_percentage = $s['savings_percentage'] ?? '';
    $this->total_recommendation_count = $s['total_recommendation_count'] ?? '';
  }
}

type RightsizingType = string;

type SavingsPlanArn = string;

class SavingsPlansAmortizedCommitment {
  public ?GenericString $amortized_recurring_commitment;
  public ?GenericString $amortized_upfront_commitment;
  public ?GenericString $total_amortized_commitment;

  public function __construct(shape(
    ?'amortized_recurring_commitment' => ?GenericString,
    ?'amortized_upfront_commitment' => ?GenericString,
    ?'total_amortized_commitment' => ?GenericString,
  ) $s = shape()) {
    $this->amortized_recurring_commitment = $s['amortized_recurring_commitment'] ?? '';
    $this->amortized_upfront_commitment = $s['amortized_upfront_commitment'] ?? '';
    $this->total_amortized_commitment = $s['total_amortized_commitment'] ?? '';
  }
}

class SavingsPlansCoverage {
  public ?Attributes $attributes;
  public ?SavingsPlansCoverageData $coverage;
  public ?DateInterval $time_period;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'coverage' => ?SavingsPlansCoverageData,
    ?'time_period' => ?DateInterval,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->coverage = $s['coverage'] ?? null;
    $this->time_period = $s['time_period'] ?? null;
  }
}

class SavingsPlansCoverageData {
  public ?GenericString $coverage_percentage;
  public ?GenericString $on_demand_cost;
  public ?GenericString $spend_covered_by_savings_plans;
  public ?GenericString $total_cost;

  public function __construct(shape(
    ?'coverage_percentage' => ?GenericString,
    ?'on_demand_cost' => ?GenericString,
    ?'spend_covered_by_savings_plans' => ?GenericString,
    ?'total_cost' => ?GenericString,
  ) $s = shape()) {
    $this->coverage_percentage = $s['coverage_percentage'] ?? '';
    $this->on_demand_cost = $s['on_demand_cost'] ?? '';
    $this->spend_covered_by_savings_plans = $s['spend_covered_by_savings_plans'] ?? '';
    $this->total_cost = $s['total_cost'] ?? '';
  }
}

type SavingsPlansCoverages = vec<SavingsPlansCoverage>;

class SavingsPlansDetails {
  public ?GenericString $instance_family;
  public ?GenericString $offering_id;
  public ?GenericString $region;

  public function __construct(shape(
    ?'instance_family' => ?GenericString,
    ?'offering_id' => ?GenericString,
    ?'region' => ?GenericString,
  ) $s = shape()) {
    $this->instance_family = $s['instance_family'] ?? '';
    $this->offering_id = $s['offering_id'] ?? '';
    $this->region = $s['region'] ?? '';
  }
}

class SavingsPlansPurchaseRecommendation {
  public ?AccountScope $account_scope;
  public ?LookbackPeriodInDays $lookback_period_in_days;
  public ?PaymentOption $payment_option;
  public ?SavingsPlansPurchaseRecommendationDetailList $savings_plans_purchase_recommendation_details;
  public ?SavingsPlansPurchaseRecommendationSummary $savings_plans_purchase_recommendation_summary;
  public ?SupportedSavingsPlansType $savings_plans_type;
  public ?TermInYears $term_in_years;

  public function __construct(shape(
    ?'account_scope' => ?AccountScope,
    ?'lookback_period_in_days' => ?LookbackPeriodInDays,
    ?'payment_option' => ?PaymentOption,
    ?'savings_plans_purchase_recommendation_details' => ?SavingsPlansPurchaseRecommendationDetailList,
    ?'savings_plans_purchase_recommendation_summary' => ?SavingsPlansPurchaseRecommendationSummary,
    ?'savings_plans_type' => ?SupportedSavingsPlansType,
    ?'term_in_years' => ?TermInYears,
  ) $s = shape()) {
    $this->account_scope = $s['account_scope'] ?? '';
    $this->lookback_period_in_days = $s['lookback_period_in_days'] ?? '';
    $this->payment_option = $s['payment_option'] ?? '';
    $this->savings_plans_purchase_recommendation_details = $s['savings_plans_purchase_recommendation_details'] ?? vec[];
    $this->savings_plans_purchase_recommendation_summary = $s['savings_plans_purchase_recommendation_summary'] ?? null;
    $this->savings_plans_type = $s['savings_plans_type'] ?? '';
    $this->term_in_years = $s['term_in_years'] ?? '';
  }
}

class SavingsPlansPurchaseRecommendationDetail {
  public ?GenericString $account_id;
  public ?GenericString $currency_code;
  public ?GenericString $current_average_hourly_on_demand_spend;
  public ?GenericString $current_maximum_hourly_on_demand_spend;
  public ?GenericString $current_minimum_hourly_on_demand_spend;
  public ?GenericString $estimated_average_utilization;
  public ?GenericString $estimated_monthly_savings_amount;
  public ?GenericString $estimated_on_demand_cost;
  public ?GenericString $estimated_on_demand_cost_with_current_commitment;
  public ?GenericString $estimated_roi;
  public ?GenericString $estimated_sp_cost;
  public ?GenericString $estimated_savings_amount;
  public ?GenericString $estimated_savings_percentage;
  public ?GenericString $hourly_commitment_to_purchase;
  public ?SavingsPlansDetails $savings_plans_details;
  public ?GenericString $upfront_cost;

  public function __construct(shape(
    ?'account_id' => ?GenericString,
    ?'currency_code' => ?GenericString,
    ?'current_average_hourly_on_demand_spend' => ?GenericString,
    ?'current_maximum_hourly_on_demand_spend' => ?GenericString,
    ?'current_minimum_hourly_on_demand_spend' => ?GenericString,
    ?'estimated_average_utilization' => ?GenericString,
    ?'estimated_monthly_savings_amount' => ?GenericString,
    ?'estimated_on_demand_cost' => ?GenericString,
    ?'estimated_on_demand_cost_with_current_commitment' => ?GenericString,
    ?'estimated_roi' => ?GenericString,
    ?'estimated_sp_cost' => ?GenericString,
    ?'estimated_savings_amount' => ?GenericString,
    ?'estimated_savings_percentage' => ?GenericString,
    ?'hourly_commitment_to_purchase' => ?GenericString,
    ?'savings_plans_details' => ?SavingsPlansDetails,
    ?'upfront_cost' => ?GenericString,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->currency_code = $s['currency_code'] ?? '';
    $this->current_average_hourly_on_demand_spend = $s['current_average_hourly_on_demand_spend'] ?? '';
    $this->current_maximum_hourly_on_demand_spend = $s['current_maximum_hourly_on_demand_spend'] ?? '';
    $this->current_minimum_hourly_on_demand_spend = $s['current_minimum_hourly_on_demand_spend'] ?? '';
    $this->estimated_average_utilization = $s['estimated_average_utilization'] ?? '';
    $this->estimated_monthly_savings_amount = $s['estimated_monthly_savings_amount'] ?? '';
    $this->estimated_on_demand_cost = $s['estimated_on_demand_cost'] ?? '';
    $this->estimated_on_demand_cost_with_current_commitment = $s['estimated_on_demand_cost_with_current_commitment'] ?? '';
    $this->estimated_roi = $s['estimated_roi'] ?? '';
    $this->estimated_sp_cost = $s['estimated_sp_cost'] ?? '';
    $this->estimated_savings_amount = $s['estimated_savings_amount'] ?? '';
    $this->estimated_savings_percentage = $s['estimated_savings_percentage'] ?? '';
    $this->hourly_commitment_to_purchase = $s['hourly_commitment_to_purchase'] ?? '';
    $this->savings_plans_details = $s['savings_plans_details'] ?? null;
    $this->upfront_cost = $s['upfront_cost'] ?? '';
  }
}

type SavingsPlansPurchaseRecommendationDetailList = vec<SavingsPlansPurchaseRecommendationDetail>;

class SavingsPlansPurchaseRecommendationMetadata {
  public ?GenericString $generation_timestamp;
  public ?GenericString $recommendation_id;

  public function __construct(shape(
    ?'generation_timestamp' => ?GenericString,
    ?'recommendation_id' => ?GenericString,
  ) $s = shape()) {
    $this->generation_timestamp = $s['generation_timestamp'] ?? '';
    $this->recommendation_id = $s['recommendation_id'] ?? '';
  }
}

class SavingsPlansPurchaseRecommendationSummary {
  public ?GenericString $currency_code;
  public ?GenericString $current_on_demand_spend;
  public ?GenericString $daily_commitment_to_purchase;
  public ?GenericString $estimated_monthly_savings_amount;
  public ?GenericString $estimated_on_demand_cost_with_current_commitment;
  public ?GenericString $estimated_roi;
  public ?GenericString $estimated_savings_amount;
  public ?GenericString $estimated_savings_percentage;
  public ?GenericString $estimated_total_cost;
  public ?GenericString $hourly_commitment_to_purchase;
  public ?GenericString $total_recommendation_count;

  public function __construct(shape(
    ?'currency_code' => ?GenericString,
    ?'current_on_demand_spend' => ?GenericString,
    ?'daily_commitment_to_purchase' => ?GenericString,
    ?'estimated_monthly_savings_amount' => ?GenericString,
    ?'estimated_on_demand_cost_with_current_commitment' => ?GenericString,
    ?'estimated_roi' => ?GenericString,
    ?'estimated_savings_amount' => ?GenericString,
    ?'estimated_savings_percentage' => ?GenericString,
    ?'estimated_total_cost' => ?GenericString,
    ?'hourly_commitment_to_purchase' => ?GenericString,
    ?'total_recommendation_count' => ?GenericString,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->current_on_demand_spend = $s['current_on_demand_spend'] ?? '';
    $this->daily_commitment_to_purchase = $s['daily_commitment_to_purchase'] ?? '';
    $this->estimated_monthly_savings_amount = $s['estimated_monthly_savings_amount'] ?? '';
    $this->estimated_on_demand_cost_with_current_commitment = $s['estimated_on_demand_cost_with_current_commitment'] ?? '';
    $this->estimated_roi = $s['estimated_roi'] ?? '';
    $this->estimated_savings_amount = $s['estimated_savings_amount'] ?? '';
    $this->estimated_savings_percentage = $s['estimated_savings_percentage'] ?? '';
    $this->estimated_total_cost = $s['estimated_total_cost'] ?? '';
    $this->hourly_commitment_to_purchase = $s['hourly_commitment_to_purchase'] ?? '';
    $this->total_recommendation_count = $s['total_recommendation_count'] ?? '';
  }
}

class SavingsPlansSavings {
  public ?GenericString $net_savings;
  public ?GenericString $on_demand_cost_equivalent;

  public function __construct(shape(
    ?'net_savings' => ?GenericString,
    ?'on_demand_cost_equivalent' => ?GenericString,
  ) $s = shape()) {
    $this->net_savings = $s['net_savings'] ?? '';
    $this->on_demand_cost_equivalent = $s['on_demand_cost_equivalent'] ?? '';
  }
}

class SavingsPlansUtilization {
  public ?GenericString $total_commitment;
  public ?GenericString $unused_commitment;
  public ?GenericString $used_commitment;
  public ?GenericString $utilization_percentage;

  public function __construct(shape(
    ?'total_commitment' => ?GenericString,
    ?'unused_commitment' => ?GenericString,
    ?'used_commitment' => ?GenericString,
    ?'utilization_percentage' => ?GenericString,
  ) $s = shape()) {
    $this->total_commitment = $s['total_commitment'] ?? '';
    $this->unused_commitment = $s['unused_commitment'] ?? '';
    $this->used_commitment = $s['used_commitment'] ?? '';
    $this->utilization_percentage = $s['utilization_percentage'] ?? '';
  }
}

class SavingsPlansUtilizationAggregates {
  public ?SavingsPlansAmortizedCommitment $amortized_commitment;
  public ?SavingsPlansSavings $savings;
  public ?SavingsPlansUtilization $utilization;

  public function __construct(shape(
    ?'amortized_commitment' => ?SavingsPlansAmortizedCommitment,
    ?'savings' => ?SavingsPlansSavings,
    ?'utilization' => ?SavingsPlansUtilization,
  ) $s = shape()) {
    $this->amortized_commitment = $s['amortized_commitment'] ?? null;
    $this->savings = $s['savings'] ?? null;
    $this->utilization = $s['utilization'] ?? null;
  }
}

class SavingsPlansUtilizationByTime {
  public ?SavingsPlansAmortizedCommitment $amortized_commitment;
  public ?SavingsPlansSavings $savings;
  public ?DateInterval $time_period;
  public ?SavingsPlansUtilization $utilization;

  public function __construct(shape(
    ?'amortized_commitment' => ?SavingsPlansAmortizedCommitment,
    ?'savings' => ?SavingsPlansSavings,
    ?'time_period' => ?DateInterval,
    ?'utilization' => ?SavingsPlansUtilization,
  ) $s = shape()) {
    $this->amortized_commitment = $s['amortized_commitment'] ?? null;
    $this->savings = $s['savings'] ?? null;
    $this->time_period = $s['time_period'] ?? null;
    $this->utilization = $s['utilization'] ?? null;
  }
}

class SavingsPlansUtilizationDetail {
  public ?SavingsPlansAmortizedCommitment $amortized_commitment;
  public ?Attributes $attributes;
  public ?SavingsPlansSavings $savings;
  public ?SavingsPlanArn $savings_plan_arn;
  public ?SavingsPlansUtilization $utilization;

  public function __construct(shape(
    ?'amortized_commitment' => ?SavingsPlansAmortizedCommitment,
    ?'attributes' => ?Attributes,
    ?'savings' => ?SavingsPlansSavings,
    ?'savings_plan_arn' => ?SavingsPlanArn,
    ?'utilization' => ?SavingsPlansUtilization,
  ) $s = shape()) {
    $this->amortized_commitment = $s['amortized_commitment'] ?? null;
    $this->attributes = $s['attributes'] ?? dict[];
    $this->savings = $s['savings'] ?? null;
    $this->savings_plan_arn = $s['savings_plan_arn'] ?? '';
    $this->utilization = $s['utilization'] ?? null;
  }
}

type SavingsPlansUtilizationDetails = vec<SavingsPlansUtilizationDetail>;

type SavingsPlansUtilizationsByTime = vec<SavingsPlansUtilizationByTime>;

type SearchString = string;

class ServiceQuotaExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceSpecification {
  public ?EC2Specification $ec_2_specification;

  public function __construct(shape(
    ?'ec_2_specification' => ?EC2Specification,
  ) $s = shape()) {
    $this->ec_2_specification = $s['ec_2_specification'] ?? null;
  }
}

type SupportedSavingsPlansType = string;

type TagKey = string;

type TagList = vec<Entity>;

class TagValues {
  public ?TagKey $key;
  public ?MatchOptions $match_options;
  public ?Values $values;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'match_options' => ?MatchOptions,
    ?'values' => ?Values,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->match_options = $s['match_options'] ?? vec[];
    $this->values = $s['values'] ?? vec[];
  }
}

type TagValuesList = vec<TagValues>;

class TargetInstance {
  public ?GenericString $currency_code;
  public ?GenericBoolean $default_target_instance;
  public ?GenericString $estimated_monthly_cost;
  public ?GenericString $estimated_monthly_savings;
  public ?ResourceUtilization $expected_resource_utilization;
  public ?ResourceDetails $resource_details;

  public function __construct(shape(
    ?'currency_code' => ?GenericString,
    ?'default_target_instance' => ?GenericBoolean,
    ?'estimated_monthly_cost' => ?GenericString,
    ?'estimated_monthly_savings' => ?GenericString,
    ?'expected_resource_utilization' => ?ResourceUtilization,
    ?'resource_details' => ?ResourceDetails,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->default_target_instance = $s['default_target_instance'] ?? false;
    $this->estimated_monthly_cost = $s['estimated_monthly_cost'] ?? '';
    $this->estimated_monthly_savings = $s['estimated_monthly_savings'] ?? '';
    $this->expected_resource_utilization = $s['expected_resource_utilization'] ?? null;
    $this->resource_details = $s['resource_details'] ?? null;
  }
}

type TargetInstancesList = vec<TargetInstance>;

type TermInYears = string;

class TerminateRecommendationDetail {
  public ?GenericString $currency_code;
  public ?GenericString $estimated_monthly_savings;

  public function __construct(shape(
    ?'currency_code' => ?GenericString,
    ?'estimated_monthly_savings' => ?GenericString,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->estimated_monthly_savings = $s['estimated_monthly_savings'] ?? '';
  }
}

type TotalActualHours = string;

type TotalActualUnits = string;

type TotalAmortizedFee = string;

type TotalPotentialRISavings = string;

type TotalRunningHours = string;

type TotalRunningNormalizedUnits = string;

class UnresolvableUsageUnitException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type UnusedHours = string;

type UnusedUnits = string;

class UpdateCostCategoryDefinitionRequest {
  public ?Arn $cost_category_arn;
  public ?CostCategoryRuleVersion $rule_version;
  public ?CostCategoryRulesList $rules;

  public function __construct(shape(
    ?'cost_category_arn' => ?Arn,
    ?'rule_version' => ?CostCategoryRuleVersion,
    ?'rules' => ?CostCategoryRulesList,
  ) $s = shape()) {
    $this->cost_category_arn = $s['cost_category_arn'] ?? '';
    $this->rule_version = $s['rule_version'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class UpdateCostCategoryDefinitionResponse {
  public ?Arn $cost_category_arn;
  public ?ZonedDateTime $effective_start;

  public function __construct(shape(
    ?'cost_category_arn' => ?Arn,
    ?'effective_start' => ?ZonedDateTime,
  ) $s = shape()) {
    $this->cost_category_arn = $s['cost_category_arn'] ?? '';
    $this->effective_start = $s['effective_start'] ?? '';
  }
}

class UtilizationByTime {
  public ?ReservationUtilizationGroups $groups;
  public ?DateInterval $time_period;
  public ?ReservationAggregates $total;

  public function __construct(shape(
    ?'groups' => ?ReservationUtilizationGroups,
    ?'time_period' => ?DateInterval,
    ?'total' => ?ReservationAggregates,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->time_period = $s['time_period'] ?? null;
    $this->total = $s['total'] ?? null;
  }
}

type UtilizationPercentage = string;

type UtilizationPercentageInUnits = string;

type UtilizationsByTime = vec<UtilizationByTime>;

type Value = string;

type Values = vec<Value>;

type YearMonthDay = string;

type ZonedDateTime = string;

