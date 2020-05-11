<?hh // strict
namespace slack\aws\application-autoscaling;

interface Application Auto Scaling {
  public function DeleteScalingPolicy(DeleteScalingPolicyRequest): Awaitable<Errors\Result<DeleteScalingPolicyResponse>>;
  public function DeleteScheduledAction(DeleteScheduledActionRequest): Awaitable<Errors\Result<DeleteScheduledActionResponse>>;
  public function DeregisterScalableTarget(DeregisterScalableTargetRequest): Awaitable<Errors\Result<DeregisterScalableTargetResponse>>;
  public function DescribeScalableTargets(DescribeScalableTargetsRequest): Awaitable<Errors\Result<DescribeScalableTargetsResponse>>;
  public function DescribeScalingActivities(DescribeScalingActivitiesRequest): Awaitable<Errors\Result<DescribeScalingActivitiesResponse>>;
  public function DescribeScalingPolicies(DescribeScalingPoliciesRequest): Awaitable<Errors\Result<DescribeScalingPoliciesResponse>>;
  public function DescribeScheduledActions(DescribeScheduledActionsRequest): Awaitable<Errors\Result<DescribeScheduledActionsResponse>>;
  public function PutScalingPolicy(PutScalingPolicyRequest): Awaitable<Errors\Result<PutScalingPolicyResponse>>;
  public function PutScheduledAction(PutScheduledActionRequest): Awaitable<Errors\Result<PutScheduledActionResponse>>;
  public function RegisterScalableTarget(RegisterScalableTargetRequest): Awaitable<Errors\Result<RegisterScalableTargetResponse>>;
}

type AdjustmentType = string;

class Alarm {
  public ResourceId $alarm_arn;
  public ResourceId $alarm_name;

  public function __construct(shape(
  ?'alarm_arn' => ResourceId,
  ?'alarm_name' => ResourceId,
  ) $s = shape()) {
    $this->alarm_arn = $alarm_arn ?? "";
    $this->alarm_name = $alarm_name ?? "";
  }
}

type Alarms = vec<Alarm>;

class ConcurrentUpdateException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Cooldown = int;

class CustomizedMetricSpecification {
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
    $this->dimensions = $dimensions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->statistic = $statistic ?? "";
    $this->unit = $unit ?? "";
  }
}

class DeleteScalingPolicyRequest {
  public ResourceIdMaxLen1600 $policy_name;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;

  public function __construct(shape(
  ?'policy_name' => ResourceIdMaxLen1600,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
  }
}

class DeleteScalingPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteScheduledActionRequest {
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ResourceIdMaxLen1600 $scheduled_action_name;
  public ServiceNamespace $service_namespace;

  public function __construct(shape(
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'scheduled_action_name' => ResourceIdMaxLen1600,
  ?'service_namespace' => ServiceNamespace,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->service_namespace = $service_namespace ?? "";
  }
}

class DeleteScheduledActionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterScalableTargetRequest {
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;

  public function __construct(shape(
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
  }
}

class DeregisterScalableTargetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeScalableTargetsRequest {
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdsMaxLen1600 $resource_ids;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => XmlString,
  ?'resource_ids' => ResourceIdsMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_ids = $resource_ids ?? [];
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
  }
}

class DescribeScalableTargetsResponse {
  public XmlString $next_token;
  public ScalableTargets $scalable_targets;

  public function __construct(shape(
  ?'next_token' => XmlString,
  ?'scalable_targets' => ScalableTargets,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->scalable_targets = $scalable_targets ?? [];
  }
}

class DescribeScalingActivitiesRequest {
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => XmlString,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
  }
}

class DescribeScalingActivitiesResponse {
  public XmlString $next_token;
  public ScalingActivities $scaling_activities;

  public function __construct(shape(
  ?'next_token' => XmlString,
  ?'scaling_activities' => ScalingActivities,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->scaling_activities = $scaling_activities ?? [];
  }
}

class DescribeScalingPoliciesRequest {
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdsMaxLen1600 $policy_names;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => XmlString,
  ?'policy_names' => ResourceIdsMaxLen1600,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->policy_names = $policy_names ?? [];
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
  }
}

class DescribeScalingPoliciesResponse {
  public XmlString $next_token;
  public ScalingPolicies $scaling_policies;

  public function __construct(shape(
  ?'next_token' => XmlString,
  ?'scaling_policies' => ScalingPolicies,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->scaling_policies = $scaling_policies ?? [];
  }
}

class DescribeScheduledActionsRequest {
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ResourceIdsMaxLen1600 $scheduled_action_names;
  public ServiceNamespace $service_namespace;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => XmlString,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'scheduled_action_names' => ResourceIdsMaxLen1600,
  ?'service_namespace' => ServiceNamespace,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->scheduled_action_names = $scheduled_action_names ?? [];
    $this->service_namespace = $service_namespace ?? "";
  }
}

class DescribeScheduledActionsResponse {
  public XmlString $next_token;
  public ScheduledActions $scheduled_actions;

  public function __construct(shape(
  ?'next_token' => XmlString,
  ?'scheduled_actions' => ScheduledActions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->scheduled_actions = $scheduled_actions ?? [];
  }
}

type DisableScaleIn = bool;

type ErrorMessage = string;

class FailedResourceAccessException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InternalServiceException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
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

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type MaxResults = int;

type MetricAggregationType = string;

class MetricDimension {
  public MetricDimensionName $name;
  public MetricDimensionValue $value;

  public function __construct(shape(
  ?'name' => MetricDimensionName,
  ?'value' => MetricDimensionValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type MetricDimensionName = string;

type MetricDimensionValue = string;

type MetricDimensions = vec<MetricDimension>;

type MetricName = string;

type MetricNamespace = string;

type MetricScale = float;

type MetricStatistic = string;

type MetricType = string;

type MetricUnit = string;

type MinAdjustmentMagnitude = int;

class ObjectNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PolicyName = string;

type PolicyType = string;

class PredefinedMetricSpecification {
  public MetricType $predefined_metric_type;
  public ResourceLabel $resource_label;

  public function __construct(shape(
  ?'predefined_metric_type' => MetricType,
  ?'resource_label' => ResourceLabel,
  ) $s = shape()) {
    $this->predefined_metric_type = $predefined_metric_type ?? "";
    $this->resource_label = $resource_label ?? "";
  }
}

class PutScalingPolicyRequest {
  public PolicyName $policy_name;
  public PolicyType $policy_type;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
  public StepScalingPolicyConfiguration $step_scaling_policy_configuration;
  public TargetTrackingScalingPolicyConfiguration $target_tracking_scaling_policy_configuration;

  public function __construct(shape(
  ?'policy_name' => PolicyName,
  ?'policy_type' => PolicyType,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ?'step_scaling_policy_configuration' => StepScalingPolicyConfiguration,
  ?'target_tracking_scaling_policy_configuration' => TargetTrackingScalingPolicyConfiguration,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? "";
    $this->policy_type = $policy_type ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->step_scaling_policy_configuration = $step_scaling_policy_configuration ?? null;
    $this->target_tracking_scaling_policy_configuration = $target_tracking_scaling_policy_configuration ?? null;
  }
}

class PutScalingPolicyResponse {
  public Alarms $alarms;
  public ResourceIdMaxLen1600 $policy_arn;

  public function __construct(shape(
  ?'alarms' => Alarms,
  ?'policy_arn' => ResourceIdMaxLen1600,
  ) $s = shape()) {
    $this->alarms = $alarms ?? [];
    $this->policy_arn = $policy_arn ?? "";
  }
}

class PutScheduledActionRequest {
  public TimestampType $end_time;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalableTargetAction $scalable_target_action;
  public ResourceIdMaxLen1600 $schedule;
  public ScheduledActionName $scheduled_action_name;
  public ServiceNamespace $service_namespace;
  public TimestampType $start_time;

  public function __construct(shape(
  ?'end_time' => TimestampType,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'scalable_target_action' => ScalableTargetAction,
  ?'schedule' => ResourceIdMaxLen1600,
  ?'scheduled_action_name' => ScheduledActionName,
  ?'service_namespace' => ServiceNamespace,
  ?'start_time' => TimestampType,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->scalable_target_action = $scalable_target_action ?? null;
    $this->schedule = $schedule ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class PutScheduledActionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RegisterScalableTargetRequest {
  public ResourceCapacity $max_capacity;
  public ResourceCapacity $min_capacity;
  public ResourceIdMaxLen1600 $resource_id;
  public ResourceIdMaxLen1600 $role_arn;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
  public SuspendedState $suspended_state;

  public function __construct(shape(
  ?'max_capacity' => ResourceCapacity,
  ?'min_capacity' => ResourceCapacity,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'role_arn' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ?'suspended_state' => SuspendedState,
  ) $s = shape()) {
    $this->max_capacity = $max_capacity ?? 0;
    $this->min_capacity = $min_capacity ?? 0;
    $this->resource_id = $resource_id ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->suspended_state = $suspended_state ?? null;
  }
}

class RegisterScalableTargetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ResourceCapacity = int;

type ResourceId = string;

type ResourceIdMaxLen1600 = string;

type ResourceIdsMaxLen1600 = vec<ResourceIdMaxLen1600>;

type ResourceLabel = string;

type ScalableDimension = string;

class ScalableTarget {
  public TimestampType $creation_time;
  public ResourceCapacity $max_capacity;
  public ResourceCapacity $min_capacity;
  public ResourceIdMaxLen1600 $resource_id;
  public ResourceIdMaxLen1600 $role_arn;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
  public SuspendedState $suspended_state;

  public function __construct(shape(
  ?'creation_time' => TimestampType,
  ?'max_capacity' => ResourceCapacity,
  ?'min_capacity' => ResourceCapacity,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'role_arn' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ?'suspended_state' => SuspendedState,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->max_capacity = $max_capacity ?? 0;
    $this->min_capacity = $min_capacity ?? 0;
    $this->resource_id = $resource_id ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->suspended_state = $suspended_state ?? null;
  }
}

class ScalableTargetAction {
  public ResourceCapacity $max_capacity;
  public ResourceCapacity $min_capacity;

  public function __construct(shape(
  ?'max_capacity' => ResourceCapacity,
  ?'min_capacity' => ResourceCapacity,
  ) $s = shape()) {
    $this->max_capacity = $max_capacity ?? 0;
    $this->min_capacity = $min_capacity ?? 0;
  }
}

type ScalableTargets = vec<ScalableTarget>;

type ScalingActivities = vec<ScalingActivity>;

class ScalingActivity {
  public ResourceId $activity_id;
  public XmlString $cause;
  public XmlString $description;
  public XmlString $details;
  public TimestampType $end_time;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
  public TimestampType $start_time;
  public ScalingActivityStatusCode $status_code;
  public XmlString $status_message;

  public function __construct(shape(
  ?'activity_id' => ResourceId,
  ?'cause' => XmlString,
  ?'description' => XmlString,
  ?'details' => XmlString,
  ?'end_time' => TimestampType,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ?'start_time' => TimestampType,
  ?'status_code' => ScalingActivityStatusCode,
  ?'status_message' => XmlString,
  ) $s = shape()) {
    $this->activity_id = $activity_id ?? "";
    $this->cause = $cause ?? "";
    $this->description = $description ?? "";
    $this->details = $details ?? "";
    $this->end_time = $end_time ?? 0;
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status_code = $status_code ?? "";
    $this->status_message = $status_message ?? "";
  }
}

type ScalingActivityStatusCode = string;

type ScalingAdjustment = int;

type ScalingPolicies = vec<ScalingPolicy>;

class ScalingPolicy {
  public Alarms $alarms;
  public TimestampType $creation_time;
  public ResourceIdMaxLen1600 $policy_arn;
  public PolicyName $policy_name;
  public PolicyType $policy_type;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
  public StepScalingPolicyConfiguration $step_scaling_policy_configuration;
  public TargetTrackingScalingPolicyConfiguration $target_tracking_scaling_policy_configuration;

  public function __construct(shape(
  ?'alarms' => Alarms,
  ?'creation_time' => TimestampType,
  ?'policy_arn' => ResourceIdMaxLen1600,
  ?'policy_name' => PolicyName,
  ?'policy_type' => PolicyType,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'service_namespace' => ServiceNamespace,
  ?'step_scaling_policy_configuration' => StepScalingPolicyConfiguration,
  ?'target_tracking_scaling_policy_configuration' => TargetTrackingScalingPolicyConfiguration,
  ) $s = shape()) {
    $this->alarms = $alarms ?? [];
    $this->creation_time = $creation_time ?? 0;
    $this->policy_arn = $policy_arn ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->policy_type = $policy_type ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->step_scaling_policy_configuration = $step_scaling_policy_configuration ?? null;
    $this->target_tracking_scaling_policy_configuration = $target_tracking_scaling_policy_configuration ?? null;
  }
}

type ScalingSuspended = bool;

class ScheduledAction {
  public TimestampType $creation_time;
  public TimestampType $end_time;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalableTargetAction $scalable_target_action;
  public ResourceIdMaxLen1600 $schedule;
  public ResourceIdMaxLen1600 $scheduled_action_arn;
  public ScheduledActionName $scheduled_action_name;
  public ServiceNamespace $service_namespace;
  public TimestampType $start_time;

  public function __construct(shape(
  ?'creation_time' => TimestampType,
  ?'end_time' => TimestampType,
  ?'resource_id' => ResourceIdMaxLen1600,
  ?'scalable_dimension' => ScalableDimension,
  ?'scalable_target_action' => ScalableTargetAction,
  ?'schedule' => ResourceIdMaxLen1600,
  ?'scheduled_action_arn' => ResourceIdMaxLen1600,
  ?'scheduled_action_name' => ScheduledActionName,
  ?'service_namespace' => ServiceNamespace,
  ?'start_time' => TimestampType,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->end_time = $end_time ?? 0;
    $this->resource_id = $resource_id ?? "";
    $this->scalable_dimension = $scalable_dimension ?? "";
    $this->scalable_target_action = $scalable_target_action ?? null;
    $this->schedule = $schedule ?? "";
    $this->scheduled_action_arn = $scheduled_action_arn ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

type ScheduledActionName = string;

type ScheduledActions = vec<ScheduledAction>;

type ServiceNamespace = string;

class StepAdjustment {
  public MetricScale $metric_interval_lower_bound;
  public MetricScale $metric_interval_upper_bound;
  public ScalingAdjustment $scaling_adjustment;

  public function __construct(shape(
  ?'metric_interval_lower_bound' => MetricScale,
  ?'metric_interval_upper_bound' => MetricScale,
  ?'scaling_adjustment' => ScalingAdjustment,
  ) $s = shape()) {
    $this->metric_interval_lower_bound = $metric_interval_lower_bound ?? 0.0;
    $this->metric_interval_upper_bound = $metric_interval_upper_bound ?? 0.0;
    $this->scaling_adjustment = $scaling_adjustment ?? 0;
  }
}

type StepAdjustments = vec<StepAdjustment>;

class StepScalingPolicyConfiguration {
  public AdjustmentType $adjustment_type;
  public Cooldown $cooldown;
  public MetricAggregationType $metric_aggregation_type;
  public MinAdjustmentMagnitude $min_adjustment_magnitude;
  public StepAdjustments $step_adjustments;

  public function __construct(shape(
  ?'adjustment_type' => AdjustmentType,
  ?'cooldown' => Cooldown,
  ?'metric_aggregation_type' => MetricAggregationType,
  ?'min_adjustment_magnitude' => MinAdjustmentMagnitude,
  ?'step_adjustments' => StepAdjustments,
  ) $s = shape()) {
    $this->adjustment_type = $adjustment_type ?? "";
    $this->cooldown = $cooldown ?? 0;
    $this->metric_aggregation_type = $metric_aggregation_type ?? "";
    $this->min_adjustment_magnitude = $min_adjustment_magnitude ?? 0;
    $this->step_adjustments = $step_adjustments ?? [];
  }
}

class SuspendedState {
  public ScalingSuspended $dynamic_scaling_in_suspended;
  public ScalingSuspended $dynamic_scaling_out_suspended;
  public ScalingSuspended $scheduled_scaling_suspended;

  public function __construct(shape(
  ?'dynamic_scaling_in_suspended' => ScalingSuspended,
  ?'dynamic_scaling_out_suspended' => ScalingSuspended,
  ?'scheduled_scaling_suspended' => ScalingSuspended,
  ) $s = shape()) {
    $this->dynamic_scaling_in_suspended = $dynamic_scaling_in_suspended ?? false;
    $this->dynamic_scaling_out_suspended = $dynamic_scaling_out_suspended ?? false;
    $this->scheduled_scaling_suspended = $scheduled_scaling_suspended ?? false;
  }
}

class TargetTrackingScalingPolicyConfiguration {
  public CustomizedMetricSpecification $customized_metric_specification;
  public DisableScaleIn $disable_scale_in;
  public PredefinedMetricSpecification $predefined_metric_specification;
  public Cooldown $scale_in_cooldown;
  public Cooldown $scale_out_cooldown;
  public MetricScale $target_value;

  public function __construct(shape(
  ?'customized_metric_specification' => CustomizedMetricSpecification,
  ?'disable_scale_in' => DisableScaleIn,
  ?'predefined_metric_specification' => PredefinedMetricSpecification,
  ?'scale_in_cooldown' => Cooldown,
  ?'scale_out_cooldown' => Cooldown,
  ?'target_value' => MetricScale,
  ) $s = shape()) {
    $this->customized_metric_specification = $customized_metric_specification ?? null;
    $this->disable_scale_in = $disable_scale_in ?? false;
    $this->predefined_metric_specification = $predefined_metric_specification ?? null;
    $this->scale_in_cooldown = $scale_in_cooldown ?? 0;
    $this->scale_out_cooldown = $scale_out_cooldown ?? 0;
    $this->target_value = $target_value ?? 0.0;
  }
}

type TimestampType = int;

class ValidationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type XmlString = string;

