<?hh // strict
namespace slack\aws\autoscaling-plans;

interface Auto Scaling Plans {
  public function CreateScalingPlan(CreateScalingPlanRequest) Awaitable<Errors\Result<CreateScalingPlanResponse>>;
  public function DeleteScalingPlan(DeleteScalingPlanRequest) Awaitable<Errors\Result<DeleteScalingPlanResponse>>;
  public function DescribeScalingPlanResources(DescribeScalingPlanResourcesRequest) Awaitable<Errors\Result<DescribeScalingPlanResourcesResponse>>;
  public function DescribeScalingPlans(DescribeScalingPlansRequest) Awaitable<Errors\Result<DescribeScalingPlansResponse>>;
  public function GetScalingPlanResourceForecastData(GetScalingPlanResourceForecastDataRequest) Awaitable<Errors\Result<GetScalingPlanResourceForecastDataResponse>>;
  public function UpdateScalingPlan(UpdateScalingPlanRequest) Awaitable<Errors\Result<UpdateScalingPlanResponse>>;
}

class ApplicationSource {
  public XmlString $cloud_formation_stack_arn;
  public TagFilters $tag_filters;
}

class ApplicationSources {
}

class ConcurrentUpdateException {
  public ErrorMessage $message;
}

class Cooldown {
}

class CreateScalingPlanRequest {
  public ApplicationSource $application_source;
  public ScalingInstructions $scaling_instructions;
  public ScalingPlanName $scaling_plan_name;
}

class CreateScalingPlanResponse {
  public ScalingPlanVersion $scaling_plan_version;
}

class CustomizedLoadMetricSpecification {
  public MetricDimensions $dimensions;
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricStatistic $statistic;
  public MetricUnit $unit;
}

class CustomizedScalingMetricSpecification {
  public MetricDimensions $dimensions;
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricStatistic $statistic;
  public MetricUnit $unit;
}

class Datapoint {
  public TimestampType $timestamp;
  public MetricScale $value;
}

class Datapoints {
}

class DeleteScalingPlanRequest {
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
}

class DeleteScalingPlanResponse {
}

class DescribeScalingPlanResourcesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
}

class DescribeScalingPlanResourcesResponse {
  public NextToken $next_token;
  public ScalingPlanResources $scaling_plan_resources;
}

class DescribeScalingPlansRequest {
  public ApplicationSources $application_sources;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ScalingPlanNames $scaling_plan_names;
  public ScalingPlanVersion $scaling_plan_version;
}

class DescribeScalingPlansResponse {
  public NextToken $next_token;
  public ScalingPlans $scaling_plans;
}

class DisableDynamicScaling {
}

class DisableScaleIn {
}

class ErrorMessage {
}

class ForecastDataType {
}

class GetScalingPlanResourceForecastDataRequest {
  public TimestampType $end_time;
  public ForecastDataType $forecast_data_type;
  public XmlString $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ServiceNamespace $service_namespace;
  public TimestampType $start_time;
}

class GetScalingPlanResourceForecastDataResponse {
  public Datapoints $datapoints;
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

class LoadMetricType {
}

class MaxResults {
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

class MetricUnit {
}

class NextToken {
}

class ObjectNotFoundException {
  public ErrorMessage $message;
}

class PolicyName {
}

class PolicyType {
}

class PredefinedLoadMetricSpecification {
  public LoadMetricType $predefined_load_metric_type;
  public ResourceLabel $resource_label;
}

class PredefinedScalingMetricSpecification {
  public ScalingMetricType $predefined_scaling_metric_type;
  public ResourceLabel $resource_label;
}

class PredictiveScalingMaxCapacityBehavior {
}

class PredictiveScalingMode {
}

class ResourceCapacity {
}

class ResourceIdMaxLen1600 {
}

class ResourceLabel {
}

class ScalableDimension {
}

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
}

class ScalingInstructions {
}

class ScalingMetricType {
}

class ScalingPlan {
  public ApplicationSource $application_source;
  public TimestampType $creation_time;
  public ScalingInstructions $scaling_instructions;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ScalingPlanStatusCode $status_code;
  public XmlString $status_message;
  public TimestampType $status_start_time;
}

class ScalingPlanName {
}

class ScalingPlanNames {
}

class ScalingPlanResource {
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ScalingPolicies $scaling_policies;
  public ScalingStatusCode $scaling_status_code;
  public XmlString $scaling_status_message;
  public ServiceNamespace $service_namespace;
}

class ScalingPlanResources {
}

class ScalingPlanStatusCode {
}

class ScalingPlanVersion {
}

class ScalingPlans {
}

class ScalingPolicies {
}

class ScalingPolicy {
  public PolicyName $policy_name;
  public PolicyType $policy_type;
  public TargetTrackingConfiguration $target_tracking_configuration;
}

class ScalingPolicyUpdateBehavior {
}

class ScalingStatusCode {
}

class ScheduledActionBufferTime {
}

class ServiceNamespace {
}

class TagFilter {
  public XmlStringMaxLen128 $key;
  public TagValues $values;
}

class TagFilters {
}

class TagValues {
}

class TargetTrackingConfiguration {
  public CustomizedScalingMetricSpecification $customized_scaling_metric_specification;
  public DisableScaleIn $disable_scale_in;
  public Cooldown $estimated_instance_warmup;
  public PredefinedScalingMetricSpecification $predefined_scaling_metric_specification;
  public Cooldown $scale_in_cooldown;
  public Cooldown $scale_out_cooldown;
  public MetricScale $target_value;
}

class TargetTrackingConfigurations {
}

class TimestampType {
}

class UpdateScalingPlanRequest {
  public ApplicationSource $application_source;
  public ScalingInstructions $scaling_instructions;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
}

class UpdateScalingPlanResponse {
}

class ValidationException {
  public ErrorMessage $message;
}

class XmlString {
}

class XmlStringMaxLen128 {
}

class XmlStringMaxLen256 {
}

