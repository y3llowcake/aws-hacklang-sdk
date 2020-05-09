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

class AdjustmentType {
}

class Alarm {
  public ResourceId $alarm_arn;
  public ResourceId $alarm_name;
}

class Alarms {
}

class ConcurrentUpdateException {
  public ErrorMessage $message;
}

class Cooldown {
}

class CustomizedMetricSpecification {
  public MetricDimensions $dimensions;
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricStatistic $statistic;
  public MetricUnit $unit;
}

class DeleteScalingPolicyRequest {
  public ResourceIdMaxLen1600 $policy_name;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
}

class DeleteScalingPolicyResponse {
}

class DeleteScheduledActionRequest {
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ResourceIdMaxLen1600 $scheduled_action_name;
  public ServiceNamespace $service_namespace;
}

class DeleteScheduledActionResponse {
}

class DeregisterScalableTargetRequest {
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
}

class DeregisterScalableTargetResponse {
}

class DescribeScalableTargetsRequest {
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdsMaxLen1600 $resource_ids;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
}

class DescribeScalableTargetsResponse {
  public XmlString $next_token;
  public ScalableTargets $scalable_targets;
}

class DescribeScalingActivitiesRequest {
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
}

class DescribeScalingActivitiesResponse {
  public XmlString $next_token;
  public ScalingActivities $scaling_activities;
}

class DescribeScalingPoliciesRequest {
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdsMaxLen1600 $policy_names;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
}

class DescribeScalingPoliciesResponse {
  public XmlString $next_token;
  public ScalingPolicies $scaling_policies;
}

class DescribeScheduledActionsRequest {
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ResourceIdsMaxLen1600 $scheduled_action_names;
  public ServiceNamespace $service_namespace;
}

class DescribeScheduledActionsResponse {
  public XmlString $next_token;
  public ScheduledActions $scheduled_actions;
}

class DisableScaleIn {
}

class ErrorMessage {
}

class FailedResourceAccessException {
  public ErrorMessage $message;
}

class InternalServiceException {
  public ErrorMessage $message;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class MaxResults {
}

class MetricAggregationType {
}

class MetricDimension {
  public MetricDimensionName $name;
  public MetricDimensionValue $value;
}

class MetricDimensionName {
}

class MetricDimensionValue {
}

class MetricDimensions {
}

class MetricName {
}

class MetricNamespace {
}

class MetricScale {
}

class MetricStatistic {
}

class MetricType {
}

class MetricUnit {
}

class MinAdjustmentMagnitude {
}

class ObjectNotFoundException {
  public ErrorMessage $message;
}

class PolicyName {
}

class PolicyType {
}

class PredefinedMetricSpecification {
  public MetricType $predefined_metric_type;
  public ResourceLabel $resource_label;
}

class PutScalingPolicyRequest {
  public PolicyName $policy_name;
  public PolicyType $policy_type;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
  public StepScalingPolicyConfiguration $step_scaling_policy_configuration;
  public TargetTrackingScalingPolicyConfiguration $target_tracking_scaling_policy_configuration;
}

class PutScalingPolicyResponse {
  public Alarms $alarms;
  public ResourceIdMaxLen1600 $policy_arn;
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
}

class PutScheduledActionResponse {
}

class RegisterScalableTargetRequest {
  public ResourceCapacity $max_capacity;
  public ResourceCapacity $min_capacity;
  public ResourceIdMaxLen1600 $resource_id;
  public ResourceIdMaxLen1600 $role_arn;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
  public SuspendedState $suspended_state;
}

class RegisterScalableTargetResponse {
}

class ResourceCapacity {
}

class ResourceId {
}

class ResourceIdMaxLen1600 {
}

class ResourceIdsMaxLen1600 {
}

class ResourceLabel {
}

class ScalableDimension {
}

class ScalableTarget {
  public TimestampType $creation_time;
  public ResourceCapacity $max_capacity;
  public ResourceCapacity $min_capacity;
  public ResourceIdMaxLen1600 $resource_id;
  public ResourceIdMaxLen1600 $role_arn;
  public ScalableDimension $scalable_dimension;
  public ServiceNamespace $service_namespace;
  public SuspendedState $suspended_state;
}

class ScalableTargetAction {
  public ResourceCapacity $max_capacity;
  public ResourceCapacity $min_capacity;
}

class ScalableTargets {
}

class ScalingActivities {
}

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
}

class ScalingActivityStatusCode {
}

class ScalingAdjustment {
}

class ScalingPolicies {
}

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
}

class ScalingSuspended {
}

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
}

class ScheduledActionName {
}

class ScheduledActions {
}

class ServiceNamespace {
}

class StepAdjustment {
  public MetricScale $metric_interval_lower_bound;
  public MetricScale $metric_interval_upper_bound;
  public ScalingAdjustment $scaling_adjustment;
}

class StepAdjustments {
}

class StepScalingPolicyConfiguration {
  public AdjustmentType $adjustment_type;
  public Cooldown $cooldown;
  public MetricAggregationType $metric_aggregation_type;
  public MinAdjustmentMagnitude $min_adjustment_magnitude;
  public StepAdjustments $step_adjustments;
}

class SuspendedState {
  public ScalingSuspended $dynamic_scaling_in_suspended;
  public ScalingSuspended $dynamic_scaling_out_suspended;
  public ScalingSuspended $scheduled_scaling_suspended;
}

class TargetTrackingScalingPolicyConfiguration {
  public CustomizedMetricSpecification $customized_metric_specification;
  public DisableScaleIn $disable_scale_in;
  public PredefinedMetricSpecification $predefined_metric_specification;
  public Cooldown $scale_in_cooldown;
  public Cooldown $scale_out_cooldown;
  public MetricScale $target_value;
}

class TimestampType {
}

class ValidationException {
  public ErrorMessage $message;
}

class XmlString {
}

