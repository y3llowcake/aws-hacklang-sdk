<?hh // strict
namespace slack\aws\application-autoscaling;

interface Application Auto Scaling {
  public function DescribeScalingActivities(DescribeScalingActivitiesRequest) Awaitable<Errors\Result<DescribeScalingActivitiesResponse>>;
  public function DescribeScalingPolicies(DescribeScalingPoliciesRequest) Awaitable<Errors\Result<DescribeScalingPoliciesResponse>>;
  public function PutScalingPolicy(PutScalingPolicyRequest) Awaitable<Errors\Result<PutScalingPolicyResponse>>;
  public function PutScheduledAction(PutScheduledActionRequest) Awaitable<Errors\Result<PutScheduledActionResponse>>;
  public function DeleteScalingPolicy(DeleteScalingPolicyRequest) Awaitable<Errors\Result<DeleteScalingPolicyResponse>>;
  public function DeregisterScalableTarget(DeregisterScalableTargetRequest) Awaitable<Errors\Result<DeregisterScalableTargetResponse>>;
  public function DescribeScalableTargets(DescribeScalableTargetsRequest) Awaitable<Errors\Result<DescribeScalableTargetsResponse>>;
  public function DescribeScheduledActions(DescribeScheduledActionsRequest) Awaitable<Errors\Result<DescribeScheduledActionsResponse>>;
  public function RegisterScalableTarget(RegisterScalableTargetRequest) Awaitable<Errors\Result<RegisterScalableTargetResponse>>;
  public function DeleteScheduledAction(DeleteScheduledActionRequest) Awaitable<Errors\Result<DeleteScheduledActionResponse>>;
}

class AdjustmentType {
}

class DescribeScalableTargetsRequest {
  public XmlString $next_token;
  public ServiceNamespace $service_namespace;
  public ResourceIdsMaxLen1600 $resource_ids;
  public ScalableDimension $scalable_dimension;
  public MaxResults $max_results;
}

class DescribeScalingActivitiesResponse {
  public ScalingActivities $scaling_activities;
  public XmlString $next_token;
}

class ScalingPolicies {
}

class StepScalingPolicyConfiguration {
  public MetricAggregationType $metric_aggregation_type;
  public AdjustmentType $adjustment_type;
  public StepAdjustments $step_adjustments;
  public MinAdjustmentMagnitude $min_adjustment_magnitude;
  public Cooldown $cooldown;
}

class ScalingActivities {
}

class ScalingPolicy {
  public PolicyName $policy_name;
  public ServiceNamespace $service_namespace;
  public ScalableDimension $scalable_dimension;
  public TimestampType $creation_time;
  public ResourceIdMaxLen1600 $policy_arn;
  public ResourceIdMaxLen1600 $resource_id;
  public PolicyType $policy_type;
  public StepScalingPolicyConfiguration $step_scaling_policy_configuration;
  public TargetTrackingScalingPolicyConfiguration $target_tracking_scaling_policy_configuration;
  public Alarms $alarms;
}

class ScheduledActions {
}

class DeregisterScalableTargetRequest {
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
}

class MetricStatistic {
}

class ResourceIdsMaxLen1600 {
}

class ResourceLabel {
}

class ScalableDimension {
}

class DescribeScheduledActionsResponse {
  public ScheduledActions $scheduled_actions;
  public XmlString $next_token;
}

class DisableScaleIn {
}

class MetricScale {
}

class MetricUnit {
}

class DescribeScalableTargetsResponse {
  public ScalableTargets $scalable_targets;
  public XmlString $next_token;
}

class FailedResourceAccessException {
  public ErrorMessage $message;
}

class PolicyName {
}

class ServiceNamespace {
}

class StepAdjustment {
  public MetricScale $metric_interval_lower_bound;
  public MetricScale $metric_interval_upper_bound;
  public ScalingAdjustment $scaling_adjustment;
}

class MaxResults {
}

class MetricDimensionName {
}

class MetricDimensionValue {
}

class ScalableTarget {
  public SuspendedState $suspended_state;
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ResourceCapacity $min_capacity;
  public ResourceCapacity $max_capacity;
  public ResourceIdMaxLen1600 $role_arn;
  public TimestampType $creation_time;
}

class ScalingAdjustment {
}

class DescribeScalingPoliciesResponse {
  public ScalingPolicies $scaling_policies;
  public XmlString $next_token;
}

class MetricDimension {
  public MetricDimensionName $name;
  public MetricDimensionValue $value;
}

class PutScalingPolicyRequest {
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public PolicyType $policy_type;
  public StepScalingPolicyConfiguration $step_scaling_policy_configuration;
  public TargetTrackingScalingPolicyConfiguration $target_tracking_scaling_policy_configuration;
  public PolicyName $policy_name;
}

class TimestampType {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class MetricDimensions {
}

class PutScheduledActionRequest {
  public TimestampType $start_time;
  public TimestampType $end_time;
  public ScalableTargetAction $scalable_target_action;
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $schedule;
  public ScheduledActionName $scheduled_action_name;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
}

class Alarm {
  public ResourceId $alarm_name;
  public ResourceId $alarm_arn;
}

class Alarms {
}

class DeleteScheduledActionRequest {
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $scheduled_action_name;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
}

class DescribeScalingPoliciesRequest {
  public ScalableDimension $scalable_dimension;
  public MaxResults $max_results;
  public XmlString $next_token;
  public ResourceIdsMaxLen1600 $policy_names;
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class ScalableTargetAction {
  public ResourceCapacity $min_capacity;
  public ResourceCapacity $max_capacity;
}

class InternalServiceException {
  public ErrorMessage $message;
}

class MetricAggregationType {
}

class ScalingActivity {
  public ResourceId $activity_id;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalingActivityStatusCode $status_code;
  public XmlString $status_message;
  public XmlString $details;
  public ServiceNamespace $service_namespace;
  public XmlString $description;
  public XmlString $cause;
  public TimestampType $start_time;
  public TimestampType $end_time;
}

class ScheduledActionName {
}

class SuspendedState {
  public ScalingSuspended $scheduled_scaling_suspended;
  public ScalingSuspended $dynamic_scaling_in_suspended;
  public ScalingSuspended $dynamic_scaling_out_suspended;
}

class MetricNamespace {
}

class ObjectNotFoundException {
  public ErrorMessage $message;
}

class PutScheduledActionResponse {
}

class RegisterScalableTargetResponse {
}

class XmlString {
}

class Cooldown {
}

class DeregisterScalableTargetResponse {
}

class DescribeScheduledActionsRequest {
  public ResourceIdsMaxLen1600 $scheduled_action_names;
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public MaxResults $max_results;
  public XmlString $next_token;
}

class MetricType {
}

class PutScalingPolicyResponse {
  public ResourceIdMaxLen1600 $policy_arn;
  public Alarms $alarms;
}

class ConcurrentUpdateException {
  public ErrorMessage $message;
}

class PolicyType {
}

class ResourceCapacity {
}

class ResourceIdMaxLen1600 {
}

class ScheduledAction {
  public TimestampType $end_time;
  public ScalableTargetAction $scalable_target_action;
  public ScheduledActionName $scheduled_action_name;
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public TimestampType $start_time;
  public TimestampType $creation_time;
  public ResourceIdMaxLen1600 $scheduled_action_arn;
  public ResourceIdMaxLen1600 $schedule;
}

class DeleteScalingPolicyRequest {
  public ResourceIdMaxLen1600 $policy_name;
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
}

class MinAdjustmentMagnitude {
}

class CustomizedMetricSpecification {
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricDimensions $dimensions;
  public MetricStatistic $statistic;
  public MetricUnit $unit;
}

class MetricName {
}

class PredefinedMetricSpecification {
  public MetricType $predefined_metric_type;
  public ResourceLabel $resource_label;
}

class StepAdjustments {
}

class ErrorMessage {
}

class ScalingSuspended {
}

class DescribeScalingActivitiesRequest {
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public MaxResults $max_results;
  public XmlString $next_token;
}

class ScalableTargets {
}

class ScalingActivityStatusCode {
}

class ValidationException {
  public ErrorMessage $message;
}

class DeleteScalingPolicyResponse {
}

class DeleteScheduledActionResponse {
}

class RegisterScalableTargetRequest {
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ResourceCapacity $min_capacity;
  public ResourceCapacity $max_capacity;
  public ResourceIdMaxLen1600 $role_arn;
  public SuspendedState $suspended_state;
  public ServiceNamespace $service_namespace;
}

class ResourceId {
}

class TargetTrackingScalingPolicyConfiguration {
  public Cooldown $scale_in_cooldown;
  public DisableScaleIn $disable_scale_in;
  public MetricScale $target_value;
  public PredefinedMetricSpecification $predefined_metric_specification;
  public CustomizedMetricSpecification $customized_metric_specification;
  public Cooldown $scale_out_cooldown;
}

