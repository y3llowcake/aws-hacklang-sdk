<?hh // strict
namespace slack\aws\autoscaling-plans;

interface AutoScalingPlans {
  public function CreateScalingPlan(CreateScalingPlanRequest $in): Awaitable<\Errors\Result<CreateScalingPlanResponse>>;
  public function DeleteScalingPlan(DeleteScalingPlanRequest $in): Awaitable<\Errors\Result<DeleteScalingPlanResponse>>;
  public function DescribeScalingPlanResources(DescribeScalingPlanResourcesRequest $in): Awaitable<\Errors\Result<DescribeScalingPlanResourcesResponse>>;
  public function DescribeScalingPlans(DescribeScalingPlansRequest $in): Awaitable<\Errors\Result<DescribeScalingPlansResponse>>;
  public function GetScalingPlanResourceForecastData(GetScalingPlanResourceForecastDataRequest $in): Awaitable<\Errors\Result<GetScalingPlanResourceForecastDataResponse>>;
  public function UpdateScalingPlan(UpdateScalingPlanRequest $in): Awaitable<\Errors\Result<UpdateScalingPlanResponse>>;
}

class ApplicationSource {
  public ?XmlString $cloud_formation_stack_arn;
  public ?TagFilters $tag_filters;

  public function __construct(shape(
    ?'cloud_formation_stack_arn' => ?XmlString,
    ?'tag_filters' => ?TagFilters,
  ) $s = shape()) {
    $this->cloud_formation_stack_arn = $s['cloud_formation_stack_arn'] ?? '';
    $this->tag_filters = $s['tag_filters'] ?? vec[];
  }
}

type ApplicationSources = vec<ApplicationSource>;

class ConcurrentUpdateException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Cooldown = int;

class CreateScalingPlanRequest {
  public ?ApplicationSource $application_source;
  public ?ScalingInstructions $scaling_instructions;
  public ?ScalingPlanName $scaling_plan_name;

  public function __construct(shape(
    ?'application_source' => ?ApplicationSource,
    ?'scaling_instructions' => ?ScalingInstructions,
    ?'scaling_plan_name' => ?ScalingPlanName,
  ) $s = shape()) {
    $this->application_source = $s['application_source'] ?? null;
    $this->scaling_instructions = $s['scaling_instructions'] ?? vec[];
    $this->scaling_plan_name = $s['scaling_plan_name'] ?? '';
  }
}

class CreateScalingPlanResponse {
  public ?ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
    ?'scaling_plan_version' => ?ScalingPlanVersion,
  ) $s = shape()) {
    $this->scaling_plan_version = $s['scaling_plan_version'] ?? 0;
  }
}

class CustomizedLoadMetricSpecification {
  public ?MetricDimensions $dimensions;
  public ?MetricName $metric_name;
  public ?MetricNamespace $namespace;
  public ?MetricStatistic $statistic;
  public ?MetricUnit $unit;

  public function __construct(shape(
    ?'dimensions' => ?MetricDimensions,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?MetricNamespace,
    ?'statistic' => ?MetricStatistic,
    ?'unit' => ?MetricUnit,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->statistic = $s['statistic'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

class CustomizedScalingMetricSpecification {
  public ?MetricDimensions $dimensions;
  public ?MetricName $metric_name;
  public ?MetricNamespace $namespace;
  public ?MetricStatistic $statistic;
  public ?MetricUnit $unit;

  public function __construct(shape(
    ?'dimensions' => ?MetricDimensions,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?MetricNamespace,
    ?'statistic' => ?MetricStatistic,
    ?'unit' => ?MetricUnit,
  ) $s = shape()) {
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->statistic = $s['statistic'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

class Datapoint {
  public ?TimestampType $timestamp;
  public ?MetricScale $value;

  public function __construct(shape(
    ?'timestamp' => ?TimestampType,
    ?'value' => ?MetricScale,
  ) $s = shape()) {
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->value = $s['value'] ?? 0.0;
  }
}

type Datapoints = vec<Datapoint>;

class DeleteScalingPlanRequest {
  public ?ScalingPlanName $scaling_plan_name;
  public ?ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
    ?'scaling_plan_name' => ?ScalingPlanName,
    ?'scaling_plan_version' => ?ScalingPlanVersion,
  ) $s = shape()) {
    $this->scaling_plan_name = $s['scaling_plan_name'] ?? '';
    $this->scaling_plan_version = $s['scaling_plan_version'] ?? 0;
  }
}

class DeleteScalingPlanResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeScalingPlanResourcesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ScalingPlanName $scaling_plan_name;
  public ?ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'scaling_plan_name' => ?ScalingPlanName,
    ?'scaling_plan_version' => ?ScalingPlanVersion,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->scaling_plan_name = $s['scaling_plan_name'] ?? '';
    $this->scaling_plan_version = $s['scaling_plan_version'] ?? 0;
  }
}

class DescribeScalingPlanResourcesResponse {
  public ?NextToken $next_token;
  public ?ScalingPlanResources $scaling_plan_resources;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'scaling_plan_resources' => ?ScalingPlanResources,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->scaling_plan_resources = $s['scaling_plan_resources'] ?? vec[];
  }
}

class DescribeScalingPlansRequest {
  public ?ApplicationSources $application_sources;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ScalingPlanNames $scaling_plan_names;
  public ?ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
    ?'application_sources' => ?ApplicationSources,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'scaling_plan_names' => ?ScalingPlanNames,
    ?'scaling_plan_version' => ?ScalingPlanVersion,
  ) $s = shape()) {
    $this->application_sources = $s['application_sources'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->scaling_plan_names = $s['scaling_plan_names'] ?? vec[];
    $this->scaling_plan_version = $s['scaling_plan_version'] ?? 0;
  }
}

class DescribeScalingPlansResponse {
  public ?NextToken $next_token;
  public ?ScalingPlans $scaling_plans;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'scaling_plans' => ?ScalingPlans,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->scaling_plans = $s['scaling_plans'] ?? vec[];
  }
}

type DisableDynamicScaling = bool;

type DisableScaleIn = bool;

type ErrorMessage = string;

type ForecastDataType = string;

class GetScalingPlanResourceForecastDataRequest {
  public ?TimestampType $end_time;
  public ?ForecastDataType $forecast_data_type;
  public ?XmlString $resource_id;
  public ?ScalableDimension $scalable_dimension;
  public ?ScalingPlanName $scaling_plan_name;
  public ?ScalingPlanVersion $scaling_plan_version;
  public ?ServiceNamespace $service_namespace;
  public ?TimestampType $start_time;

  public function __construct(shape(
    ?'end_time' => ?TimestampType,
    ?'forecast_data_type' => ?ForecastDataType,
    ?'resource_id' => ?XmlString,
    ?'scalable_dimension' => ?ScalableDimension,
    ?'scaling_plan_name' => ?ScalingPlanName,
    ?'scaling_plan_version' => ?ScalingPlanVersion,
    ?'service_namespace' => ?ServiceNamespace,
    ?'start_time' => ?TimestampType,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->forecast_data_type = $s['forecast_data_type'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->scalable_dimension = $s['scalable_dimension'] ?? '';
    $this->scaling_plan_name = $s['scaling_plan_name'] ?? '';
    $this->scaling_plan_version = $s['scaling_plan_version'] ?? 0;
    $this->service_namespace = $s['service_namespace'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetScalingPlanResourceForecastDataResponse {
  public ?Datapoints $datapoints;

  public function __construct(shape(
    ?'datapoints' => ?Datapoints,
  ) $s = shape()) {
    $this->datapoints = $s['datapoints'] ?? vec[];
  }
}

class InternalServiceException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
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

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LoadMetricType = string;

type MaxResults = int;

class MetricDimension {
  public ?MetricDimensionName $name;
  public ?MetricDimensionValue $value;

  public function __construct(shape(
    ?'name' => ?MetricDimensionName,
    ?'value' => ?MetricDimensionValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type MetricDimensionName = string;

type MetricDimensionValue = string;

type MetricDimensions = vec<MetricDimension>;

type MetricName = string;

type MetricNamespace = string;

type MetricScale = float;

type MetricStatistic = string;

type MetricUnit = string;

type NextToken = string;

class ObjectNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PolicyName = string;

type PolicyType = string;

class PredefinedLoadMetricSpecification {
  public ?LoadMetricType $predefined_load_metric_type;
  public ?ResourceLabel $resource_label;

  public function __construct(shape(
    ?'predefined_load_metric_type' => ?LoadMetricType,
    ?'resource_label' => ?ResourceLabel,
  ) $s = shape()) {
    $this->predefined_load_metric_type = $s['predefined_load_metric_type'] ?? '';
    $this->resource_label = $s['resource_label'] ?? '';
  }
}

class PredefinedScalingMetricSpecification {
  public ?ScalingMetricType $predefined_scaling_metric_type;
  public ?ResourceLabel $resource_label;

  public function __construct(shape(
    ?'predefined_scaling_metric_type' => ?ScalingMetricType,
    ?'resource_label' => ?ResourceLabel,
  ) $s = shape()) {
    $this->predefined_scaling_metric_type = $s['predefined_scaling_metric_type'] ?? '';
    $this->resource_label = $s['resource_label'] ?? '';
  }
}

type PredictiveScalingMaxCapacityBehavior = string;

type PredictiveScalingMode = string;

type ResourceCapacity = int;

type ResourceIdMaxLen1600 = string;

type ResourceLabel = string;

type ScalableDimension = string;

class ScalingInstruction {
  public ?CustomizedLoadMetricSpecification $customized_load_metric_specification;
  public ?DisableDynamicScaling $disable_dynamic_scaling;
  public ?ResourceCapacity $max_capacity;
  public ?ResourceCapacity $min_capacity;
  public ?PredefinedLoadMetricSpecification $predefined_load_metric_specification;
  public ?PredictiveScalingMaxCapacityBehavior $predictive_scaling_max_capacity_behavior;
  public ?ResourceCapacity $predictive_scaling_max_capacity_buffer;
  public ?PredictiveScalingMode $predictive_scaling_mode;
  public ?ResourceIdMaxLen1600 $resource_id;
  public ?ScalableDimension $scalable_dimension;
  public ?ScalingPolicyUpdateBehavior $scaling_policy_update_behavior;
  public ?ScheduledActionBufferTime $scheduled_action_buffer_time;
  public ?ServiceNamespace $service_namespace;
  public ?TargetTrackingConfigurations $target_tracking_configurations;

  public function __construct(shape(
    ?'customized_load_metric_specification' => ?CustomizedLoadMetricSpecification,
    ?'disable_dynamic_scaling' => ?DisableDynamicScaling,
    ?'max_capacity' => ?ResourceCapacity,
    ?'min_capacity' => ?ResourceCapacity,
    ?'predefined_load_metric_specification' => ?PredefinedLoadMetricSpecification,
    ?'predictive_scaling_max_capacity_behavior' => ?PredictiveScalingMaxCapacityBehavior,
    ?'predictive_scaling_max_capacity_buffer' => ?ResourceCapacity,
    ?'predictive_scaling_mode' => ?PredictiveScalingMode,
    ?'resource_id' => ?ResourceIdMaxLen1600,
    ?'scalable_dimension' => ?ScalableDimension,
    ?'scaling_policy_update_behavior' => ?ScalingPolicyUpdateBehavior,
    ?'scheduled_action_buffer_time' => ?ScheduledActionBufferTime,
    ?'service_namespace' => ?ServiceNamespace,
    ?'target_tracking_configurations' => ?TargetTrackingConfigurations,
  ) $s = shape()) {
    $this->customized_load_metric_specification = $s['customized_load_metric_specification'] ?? null;
    $this->disable_dynamic_scaling = $s['disable_dynamic_scaling'] ?? false;
    $this->max_capacity = $s['max_capacity'] ?? 0;
    $this->min_capacity = $s['min_capacity'] ?? 0;
    $this->predefined_load_metric_specification = $s['predefined_load_metric_specification'] ?? null;
    $this->predictive_scaling_max_capacity_behavior = $s['predictive_scaling_max_capacity_behavior'] ?? '';
    $this->predictive_scaling_max_capacity_buffer = $s['predictive_scaling_max_capacity_buffer'] ?? 0;
    $this->predictive_scaling_mode = $s['predictive_scaling_mode'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->scalable_dimension = $s['scalable_dimension'] ?? '';
    $this->scaling_policy_update_behavior = $s['scaling_policy_update_behavior'] ?? '';
    $this->scheduled_action_buffer_time = $s['scheduled_action_buffer_time'] ?? 0;
    $this->service_namespace = $s['service_namespace'] ?? '';
    $this->target_tracking_configurations = $s['target_tracking_configurations'] ?? vec[];
  }
}

type ScalingInstructions = vec<ScalingInstruction>;

type ScalingMetricType = string;

class ScalingPlan {
  public ?ApplicationSource $application_source;
  public ?TimestampType $creation_time;
  public ?ScalingInstructions $scaling_instructions;
  public ?ScalingPlanName $scaling_plan_name;
  public ?ScalingPlanVersion $scaling_plan_version;
  public ?ScalingPlanStatusCode $status_code;
  public ?XmlString $status_message;
  public ?TimestampType $status_start_time;

  public function __construct(shape(
    ?'application_source' => ?ApplicationSource,
    ?'creation_time' => ?TimestampType,
    ?'scaling_instructions' => ?ScalingInstructions,
    ?'scaling_plan_name' => ?ScalingPlanName,
    ?'scaling_plan_version' => ?ScalingPlanVersion,
    ?'status_code' => ?ScalingPlanStatusCode,
    ?'status_message' => ?XmlString,
    ?'status_start_time' => ?TimestampType,
  ) $s = shape()) {
    $this->application_source = $s['application_source'] ?? null;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->scaling_instructions = $s['scaling_instructions'] ?? vec[];
    $this->scaling_plan_name = $s['scaling_plan_name'] ?? '';
    $this->scaling_plan_version = $s['scaling_plan_version'] ?? 0;
    $this->status_code = $s['status_code'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->status_start_time = $s['status_start_time'] ?? 0;
  }
}

type ScalingPlanName = string;

type ScalingPlanNames = vec<ScalingPlanName>;

class ScalingPlanResource {
  public ?ResourceIdMaxLen1600 $resource_id;
  public ?ScalableDimension $scalable_dimension;
  public ?ScalingPlanName $scaling_plan_name;
  public ?ScalingPlanVersion $scaling_plan_version;
  public ?ScalingPolicies $scaling_policies;
  public ?ScalingStatusCode $scaling_status_code;
  public ?XmlString $scaling_status_message;
  public ?ServiceNamespace $service_namespace;

  public function __construct(shape(
    ?'resource_id' => ?ResourceIdMaxLen1600,
    ?'scalable_dimension' => ?ScalableDimension,
    ?'scaling_plan_name' => ?ScalingPlanName,
    ?'scaling_plan_version' => ?ScalingPlanVersion,
    ?'scaling_policies' => ?ScalingPolicies,
    ?'scaling_status_code' => ?ScalingStatusCode,
    ?'scaling_status_message' => ?XmlString,
    ?'service_namespace' => ?ServiceNamespace,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->scalable_dimension = $s['scalable_dimension'] ?? '';
    $this->scaling_plan_name = $s['scaling_plan_name'] ?? '';
    $this->scaling_plan_version = $s['scaling_plan_version'] ?? 0;
    $this->scaling_policies = $s['scaling_policies'] ?? vec[];
    $this->scaling_status_code = $s['scaling_status_code'] ?? '';
    $this->scaling_status_message = $s['scaling_status_message'] ?? '';
    $this->service_namespace = $s['service_namespace'] ?? '';
  }
}

type ScalingPlanResources = vec<ScalingPlanResource>;

type ScalingPlanStatusCode = string;

type ScalingPlanVersion = int;

type ScalingPlans = vec<ScalingPlan>;

type ScalingPolicies = vec<ScalingPolicy>;

class ScalingPolicy {
  public ?PolicyName $policy_name;
  public ?PolicyType $policy_type;
  public ?TargetTrackingConfiguration $target_tracking_configuration;

  public function __construct(shape(
    ?'policy_name' => ?PolicyName,
    ?'policy_type' => ?PolicyType,
    ?'target_tracking_configuration' => ?TargetTrackingConfiguration,
  ) $s = shape()) {
    $this->policy_name = $s['policy_name'] ?? '';
    $this->policy_type = $s['policy_type'] ?? '';
    $this->target_tracking_configuration = $s['target_tracking_configuration'] ?? null;
  }
}

type ScalingPolicyUpdateBehavior = string;

type ScalingStatusCode = string;

type ScheduledActionBufferTime = int;

type ServiceNamespace = string;

class TagFilter {
  public ?XmlStringMaxLen128 $key;
  public ?TagValues $values;

  public function __construct(shape(
    ?'key' => ?XmlStringMaxLen128,
    ?'values' => ?TagValues,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type TagFilters = vec<TagFilter>;

type TagValues = vec<XmlStringMaxLen256>;

class TargetTrackingConfiguration {
  public ?CustomizedScalingMetricSpecification $customized_scaling_metric_specification;
  public ?DisableScaleIn $disable_scale_in;
  public ?Cooldown $estimated_instance_warmup;
  public ?PredefinedScalingMetricSpecification $predefined_scaling_metric_specification;
  public ?Cooldown $scale_in_cooldown;
  public ?Cooldown $scale_out_cooldown;
  public ?MetricScale $target_value;

  public function __construct(shape(
    ?'customized_scaling_metric_specification' => ?CustomizedScalingMetricSpecification,
    ?'disable_scale_in' => ?DisableScaleIn,
    ?'estimated_instance_warmup' => ?Cooldown,
    ?'predefined_scaling_metric_specification' => ?PredefinedScalingMetricSpecification,
    ?'scale_in_cooldown' => ?Cooldown,
    ?'scale_out_cooldown' => ?Cooldown,
    ?'target_value' => ?MetricScale,
  ) $s = shape()) {
    $this->customized_scaling_metric_specification = $s['customized_scaling_metric_specification'] ?? null;
    $this->disable_scale_in = $s['disable_scale_in'] ?? false;
    $this->estimated_instance_warmup = $s['estimated_instance_warmup'] ?? 0;
    $this->predefined_scaling_metric_specification = $s['predefined_scaling_metric_specification'] ?? null;
    $this->scale_in_cooldown = $s['scale_in_cooldown'] ?? 0;
    $this->scale_out_cooldown = $s['scale_out_cooldown'] ?? 0;
    $this->target_value = $s['target_value'] ?? 0.0;
  }
}

type TargetTrackingConfigurations = vec<TargetTrackingConfiguration>;

type TimestampType = int;

class UpdateScalingPlanRequest {
  public ?ApplicationSource $application_source;
  public ?ScalingInstructions $scaling_instructions;
  public ?ScalingPlanName $scaling_plan_name;
  public ?ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
    ?'application_source' => ?ApplicationSource,
    ?'scaling_instructions' => ?ScalingInstructions,
    ?'scaling_plan_name' => ?ScalingPlanName,
    ?'scaling_plan_version' => ?ScalingPlanVersion,
  ) $s = shape()) {
    $this->application_source = $s['application_source'] ?? null;
    $this->scaling_instructions = $s['scaling_instructions'] ?? vec[];
    $this->scaling_plan_name = $s['scaling_plan_name'] ?? '';
    $this->scaling_plan_version = $s['scaling_plan_version'] ?? 0;
  }
}

class UpdateScalingPlanResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ValidationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type XmlString = string;

type XmlStringMaxLen128 = string;

type XmlStringMaxLen256 = string;

