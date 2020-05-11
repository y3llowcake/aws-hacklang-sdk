<?hh // strict
namespace slack\aws\autoscaling-plans;

interface Auto Scaling Plans {
  public function CreateScalingPlan(CreateScalingPlanRequest): Awaitable<Errors\Result<CreateScalingPlanResponse>>;
  public function DeleteScalingPlan(DeleteScalingPlanRequest): Awaitable<Errors\Result<DeleteScalingPlanResponse>>;
  public function DescribeScalingPlanResources(DescribeScalingPlanResourcesRequest): Awaitable<Errors\Result<DescribeScalingPlanResourcesResponse>>;
  public function DescribeScalingPlans(DescribeScalingPlansRequest): Awaitable<Errors\Result<DescribeScalingPlansResponse>>;
  public function GetScalingPlanResourceForecastData(GetScalingPlanResourceForecastDataRequest): Awaitable<Errors\Result<GetScalingPlanResourceForecastDataResponse>>;
  public function UpdateScalingPlan(UpdateScalingPlanRequest): Awaitable<Errors\Result<UpdateScalingPlanResponse>>;
}

class ApplicationSource {
  public XmlString $cloud_formation_stack_arn;
  public TagFilters $tag_filters;

  public function __construct(shape(
  ?'cloud_formation_stack_arn' => XmlString,
  ?'tag_filters' => TagFilters,
  ) $s = shape()) {
    $this->cloud_formation_stack_arn = $cloud_formation_stack_arn ?? ;
    $this->tag_filters = $tag_filters ?? [];
  }
}

type ApplicationSources = vec<ApplicationSource>;

class ConcurrentUpdateException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Cooldown = int;

class CreateScalingPlanRequest {
  public ApplicationSource $application_source;
  public ScalingInstructions $scaling_instructions;
  public ScalingPlanName $scaling_plan_name;

  public function __construct(shape(
  ?'application_source' => ApplicationSource,
  ?'scaling_instructions' => ScalingInstructions,
  ?'scaling_plan_name' => ScalingPlanName,
  ) $s = shape()) {
    $this->application_source = $application_source ?? null;
    $this->scaling_instructions = $scaling_instructions ?? [];
    $this->scaling_plan_name = $scaling_plan_name ?? "";
  }
}

class CreateScalingPlanResponse {
  public ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
  ?'scaling_plan_version' => ScalingPlanVersion,
  ) $s = shape()) {
    $this->scaling_plan_version = $scaling_plan_version ?? 0;
  }
}

class CustomizedLoadMetricSpecification {
  public MetricDimensions $dimensions;
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricStatistic $statistic;
  public MetricUnit $unit;

  public function __construct(shape(
  ?'dimensions' => MetricDimensions,
  ?'metric_name' => MetricName,
  ?'namespace' => MetricNamespace,
  ?'statistic' => MetricStatistic,
  ?'unit' => MetricUnit,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? ;
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? ;
    $this->statistic = $statistic ?? ;
    $this->unit = $unit ?? ;
  }
}

class CustomizedScalingMetricSpecification {
  public MetricDimensions $dimensions;
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricStatistic $statistic;
  public MetricUnit $unit;

  public function __construct(shape(
  ?'dimensions' => MetricDimensions,
  ?'metric_name' => MetricName,
  ?'namespace' => MetricNamespace,
  ?'statistic' => MetricStatistic,
  ?'unit' => MetricUnit,
  ) $s = shape()) {
    $this->dimensions = $dimensions ?? ;
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? ;
    $this->statistic = $statistic ?? ;
    $this->unit = $unit ?? ;
  }
}

class Datapoint {
  public TimestampType $timestamp;
  public MetricScale $value;

  public function __construct(shape(
  ?'timestamp' => TimestampType,
  ?'value' => MetricScale,
  ) $s = shape()) {
    $this->timestamp = $timestamp ?? ;
    $this->value = $value ?? ;
  }
}

type Datapoints = vec<Datapoint>;

class DeleteScalingPlanRequest {
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
  ?'scaling_plan_name' => ScalingPlanName,
  ?'scaling_plan_version' => ScalingPlanVersion,
  ) $s = shape()) {
    $this->scaling_plan_name = $scaling_plan_name ?? "";
    $this->scaling_plan_version = $scaling_plan_version ?? 0;
  }
}

class DeleteScalingPlanResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeScalingPlanResourcesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'scaling_plan_name' => ScalingPlanName,
  ?'scaling_plan_version' => ScalingPlanVersion,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->scaling_plan_name = $scaling_plan_name ?? "";
    $this->scaling_plan_version = $scaling_plan_version ?? 0;
  }
}

class DescribeScalingPlanResourcesResponse {
  public NextToken $next_token;
  public ScalingPlanResources $scaling_plan_resources;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'scaling_plan_resources' => ScalingPlanResources,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->scaling_plan_resources = $scaling_plan_resources ?? [];
  }
}

class DescribeScalingPlansRequest {
  public ApplicationSources $application_sources;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ScalingPlanNames $scaling_plan_names;
  public ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
  ?'application_sources' => ApplicationSources,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'scaling_plan_names' => ScalingPlanNames,
  ?'scaling_plan_version' => ScalingPlanVersion,
  ) $s = shape()) {
    $this->application_sources = $application_sources ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->scaling_plan_names = $scaling_plan_names ?? [];
    $this->scaling_plan_version = $scaling_plan_version ?? 0;
  }
}

class DescribeScalingPlansResponse {
  public NextToken $next_token;
  public ScalingPlans $scaling_plans;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'scaling_plans' => ScalingPlans,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->scaling_plans = $scaling_plans ?? [];
  }
}

type DisableDynamicScaling = bool;

type DisableScaleIn = bool;

type ErrorMessage = string;

type ForecastDataType = string;

class GetScalingPlanResourceForecastDataRequest {
  public TimestampType $end_time;
  public ForecastDataType $forecast_data_type;
  public XmlString $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ServiceNamespace $service_namespace;
  public TimestampType $start_time;

  public function __construct(shape(
  ?'end_time' => TimestampType,
  ?'forecast_data_type' => ForecastDataType,
  ?'resource_id' => XmlString,
  ?'scalable_dimension' => ScalableDimension,
  ?'scaling_plan_name' => ScalingPlanName,
  ?'scaling_plan_version' => ScalingPlanVersion,
  ?'service_namespace' => ServiceNamespace,
  ?'start_time' => TimestampType,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->forecast_data_type = $forecast_data_type ?? "";
    $this->resource_id = $resource_id ?? ;
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->scaling_plan_name = $scaling_plan_name ?? "";
    $this->scaling_plan_version = $scaling_plan_version ?? 0;
    $this->service_namespace = $service_namespace ?? "";
    $this->start_time = $start_time ?? ;
  }
}

class GetScalingPlanResourceForecastDataResponse {
  public Datapoints $datapoints;

  public function __construct(shape(
  ?'datapoints' => Datapoints,
  ) $s = shape()) {
    $this->datapoints = $datapoints ?? [];
  }
}

class InternalServiceException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidNextTokenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type LoadMetricType = string;

type MaxResults = int;

class MetricDimension {
  public MetricDimensionName $name;
  public MetricDimensionValue $value;

  public function __construct(shape(
  ?'name' => MetricDimensionName,
  ?'value' => MetricDimensionValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type PolicyName = string;

type PolicyType = string;

class PredefinedLoadMetricSpecification {
  public LoadMetricType $predefined_load_metric_type;
  public ResourceLabel $resource_label;

  public function __construct(shape(
  ?'predefined_load_metric_type' => LoadMetricType,
  ?'resource_label' => ResourceLabel,
  ) $s = shape()) {
    $this->predefined_load_metric_type = $predefined_load_metric_type ?? ;
    $this->resource_label = $resource_label ?? "";
  }
}

class PredefinedScalingMetricSpecification {
  public ScalingMetricType $predefined_scaling_metric_type;
  public ResourceLabel $resource_label;

  public function __construct(shape(
  ?'predefined_scaling_metric_type' => ScalingMetricType,
  ?'resource_label' => ResourceLabel,
  ) $s = shape()) {
    $this->predefined_scaling_metric_type = $predefined_scaling_metric_type ?? ;
    $this->resource_label = $resource_label ?? "";
  }
}

type PredictiveScalingMaxCapacityBehavior = string;

type PredictiveScalingMode = string;

type ResourceCapacity = int;

type ResourceIdMaxLen1600 = string;

type ResourceLabel = string;

type ScalableDimension = string;

class ScalingInstruction {
  public CustomizedLoadMetricSpecification $customized_load_metric_specification;
  public DisableDynamicScaling $disable_dynamic_scaling;
  public ResourceCapacity $max_capacity;
  public ResourceCapacity $min_capacity;
  public PredefinedLoadMetricSpecification $predefined_load_metric_specification;
  public PredictiveScalingMaxCapacityBehavior $predictive_scaling_max_capacity_behavior;
  public ResourceCapacity $predictive_scaling_max_capacity_buffer;
  public PredictiveScalingMode $predictive_scaling_mode;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalingPolicyUpdateBehavior $scaling_policy_update_behavior;
  public ScheduledActionBufferTime $scheduled_action_buffer_time;
  public ServiceNamespace $service_namespace;
  public TargetTrackingConfigurations $target_tracking_configurations;

  public function __construct(shape(
  ?'customized_load_metric_specification' => CustomizedLoadMetricSpecification,
  ?'disable_dynamic_scaling' => DisableDynamicScaling,
  ?'max_capacity' => ResourceCapacity,
  ?'min_capacity' => ResourceCapacity,
  ?'predefined_load_metric_specification' => PredefinedLoadMetricSpecification,
  ?'predictive_scaling_max_capacity_behavior' => PredictiveScalingMaxCapacityBehavior,
  ?'predictive_scaling_max_capacity_buffer' => ResourceCapacity,
  ?'predictive_scaling_mode' => PredictiveScalingMode,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'scaling_policy_update_behavior' => ScalingPolicyUpdateBehavior,
  ?'scheduled_action_buffer_time' => ScheduledActionBufferTime,
  ?'service_namespace' => ServiceNamespace,
  ?'target_tracking_configurations' => TargetTrackingConfigurations,
  ) $s = shape()) {
    $this->customized_load_metric_specification = $customized_load_metric_specification ?? null;
    $this->disable_dynamic_scaling = $disable_dynamic_scaling ?? false;
    $this->max_capacity = $max_capacity ?? ;
    $this->min_capacity = $min_capacity ?? ;
    $this->predefined_load_metric_specification = $predefined_load_metric_specification ?? null;
    $this->predictive_scaling_max_capacity_behavior = $predictive_scaling_max_capacity_behavior ?? "";
    $this->predictive_scaling_max_capacity_buffer = $predictive_scaling_max_capacity_buffer ?? ;
    $this->predictive_scaling_mode = $predictive_scaling_mode ?? "";
    $this->resource_id = $resource_id ?? ;
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->scaling_policy_update_behavior = $scaling_policy_update_behavior ?? "";
    $this->scheduled_action_buffer_time = $scheduled_action_buffer_time ?? 0;
    $this->service_namespace = $service_namespace ?? "";
    $this->target_tracking_configurations = $target_tracking_configurations ?? [];
  }
}

type ScalingInstructions = vec<ScalingInstruction>;

type ScalingMetricType = string;

class ScalingPlan {
  public ApplicationSource $application_source;
  public TimestampType $creation_time;
  public ScalingInstructions $scaling_instructions;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ScalingPlanStatusCode $status_code;
  public XmlString $status_message;
  public TimestampType $status_start_time;

  public function __construct(shape(
  ?'application_source' => ApplicationSource,
  ?'creation_time' => TimestampType,
  ?'scaling_instructions' => ScalingInstructions,
  ?'scaling_plan_name' => ScalingPlanName,
  ?'scaling_plan_version' => ScalingPlanVersion,
  ?'status_code' => ScalingPlanStatusCode,
  ?'status_message' => XmlString,
  ?'status_start_time' => TimestampType,
  ) $s = shape()) {
    $this->application_source = $application_source ?? null;
    $this->creation_time = $creation_time ?? ;
    $this->scaling_instructions = $scaling_instructions ?? [];
    $this->scaling_plan_name = $scaling_plan_name ?? "";
    $this->scaling_plan_version = $scaling_plan_version ?? 0;
    $this->status_code = $status_code ?? ;
    $this->status_message = $status_message ?? ;
    $this->status_start_time = $status_start_time ?? ;
  }
}

type ScalingPlanName = string;

type ScalingPlanNames = vec<ScalingPlanName>;

class ScalingPlanResource {
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ScalingPolicies $scaling_policies;
  public ScalingStatusCode $scaling_status_code;
  public XmlString $scaling_status_message;
  public ServiceNamespace $service_namespace;

  public function __construct(shape(
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'scaling_plan_name' => ScalingPlanName,
  ?'scaling_plan_version' => ScalingPlanVersion,
  ?'scaling_policies' => ScalingPolicies,
  ?'scaling_status_code' => ScalingStatusCode,
  ?'scaling_status_message' => XmlString,
  ?'service_namespace' => ServiceNamespace,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? ;
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->scaling_plan_name = $scaling_plan_name ?? "";
    $this->scaling_plan_version = $scaling_plan_version ?? 0;
    $this->scaling_policies = $scaling_policies ?? [];
    $this->scaling_status_code = $scaling_status_code ?? "";
    $this->scaling_status_message = $scaling_status_message ?? ;
    $this->service_namespace = $service_namespace ?? "";
  }
}

type ScalingPlanResources = vec<ScalingPlanResource>;

type ScalingPlanStatusCode = string;

type ScalingPlanVersion = int;

type ScalingPlans = vec<ScalingPlan>;

type ScalingPolicies = vec<ScalingPolicy>;

class ScalingPolicy {
  public PolicyName $policy_name;
  public PolicyType $policy_type;
  public TargetTrackingConfiguration $target_tracking_configuration;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'policy_type' => PolicyType,
  ?'target_tracking_configuration' => TargetTrackingConfiguration,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? "";
    $this->policy_type = $policy_type ?? "";
    $this->target_tracking_configuration = $target_tracking_configuration ?? null;
  }
}

type ScalingPolicyUpdateBehavior = string;

type ScalingStatusCode = string;

type ScheduledActionBufferTime = int;

type ServiceNamespace = string;

class TagFilter {
  public XmlStringMaxLen128 $key;
  public TagValues $values;

  public function __construct(shape(
  ?'key' => XmlStringMaxLen128,
  ?'values' => TagValues,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->values = $values ?? ;
  }
}

type TagFilters = vec<TagFilter>;

type TagValues = vec<XmlStringMaxLen256>;

class TargetTrackingConfiguration {
  public CustomizedScalingMetricSpecification $customized_scaling_metric_specification;
  public DisableScaleIn $disable_scale_in;
  public Cooldown $estimated_instance_warmup;
  public PredefinedScalingMetricSpecification $predefined_scaling_metric_specification;
  public Cooldown $scale_in_cooldown;
  public Cooldown $scale_out_cooldown;
  public MetricScale $target_value;

  public function __construct(shape(
  ?'customized_scaling_metric_specification' => CustomizedScalingMetricSpecification,
  ?'disable_scale_in' => DisableScaleIn,
  ?'estimated_instance_warmup' => Cooldown,
  ?'predefined_scaling_metric_specification' => PredefinedScalingMetricSpecification,
  ?'scale_in_cooldown' => Cooldown,
  ?'scale_out_cooldown' => Cooldown,
  ?'target_value' => MetricScale,
  ) $s = shape()) {
    $this->customized_scaling_metric_specification = $customized_scaling_metric_specification ?? null;
    $this->disable_scale_in = $disable_scale_in ?? false;
    $this->estimated_instance_warmup = $estimated_instance_warmup ?? ;
    $this->predefined_scaling_metric_specification = $predefined_scaling_metric_specification ?? null;
    $this->scale_in_cooldown = $scale_in_cooldown ?? ;
    $this->scale_out_cooldown = $scale_out_cooldown ?? ;
    $this->target_value = $target_value ?? ;
  }
}

type TargetTrackingConfigurations = vec<TargetTrackingConfiguration>;

type TimestampType = int;

class UpdateScalingPlanRequest {
  public ApplicationSource $application_source;
  public ScalingInstructions $scaling_instructions;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;

  public function __construct(shape(
  ?'application_source' => ApplicationSource,
  ?'scaling_instructions' => ScalingInstructions,
  ?'scaling_plan_name' => ScalingPlanName,
  ?'scaling_plan_version' => ScalingPlanVersion,
  ) $s = shape()) {
    $this->application_source = $application_source ?? null;
    $this->scaling_instructions = $scaling_instructions ?? [];
    $this->scaling_plan_name = $scaling_plan_name ?? "";
    $this->scaling_plan_version = $scaling_plan_version ?? 0;
  }
}

class UpdateScalingPlanResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ValidationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type XmlString = string;

type XmlStringMaxLen128 = string;

type XmlStringMaxLen256 = string;

