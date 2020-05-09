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

class ServiceNamespace {
}

class UpdateScalingPlanRequest {
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ApplicationSource $application_source;
  public ScalingInstructions $scaling_instructions;
}

class Cooldown {
}

class DescribeScalingPlanResourcesResponse {
  public ScalingPlanResources $scaling_plan_resources;
  public NextToken $next_token;
}

class ObjectNotFoundException {
  public ErrorMessage $message;
}

class ScalingPlans {
}

class TagValues {
}

class ApplicationSources {
}

class CustomizedScalingMetricSpecification {
  public MetricDimensions $dimensions;
  public MetricStatistic $statistic;
  public MetricUnit $unit;
  public MetricName $metric_name;
  public MetricNamespace $namespace;
}

class ScalingPlanNames {
}

class TargetTrackingConfiguration {
  public DisableScaleIn $disable_scale_in;
  public Cooldown $scale_out_cooldown;
  public Cooldown $scale_in_cooldown;
  public Cooldown $estimated_instance_warmup;
  public PredefinedScalingMetricSpecification $predefined_scaling_metric_specification;
  public CustomizedScalingMetricSpecification $customized_scaling_metric_specification;
  public MetricScale $target_value;
}

class PredictiveScalingMode {
}

class ScalingPolicies {
}

class TimestampType {
}

class ForecastDataType {
}

class MaxResults {
}

class MetricUnit {
}

class PolicyType {
}

class PredictiveScalingMaxCapacityBehavior {
}

class ResourceCapacity {
}

class ScalingPlanResource {
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public ScalingPolicies $scaling_policies;
  public ScalingStatusCode $scaling_status_code;
  public XmlString $scaling_status_message;
}

class DisableDynamicScaling {
}

class DisableScaleIn {
}

class GetScalingPlanResourceForecastDataResponse {
  public Datapoints $datapoints;
}

class LoadMetricType {
}

class MetricNamespace {
}

class GetScalingPlanResourceForecastDataRequest {
  public XmlString $resource_id;
  public ScalableDimension $scalable_dimension;
  public ForecastDataType $forecast_data_type;
  public TimestampType $start_time;
  public TimestampType $end_time;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ServiceNamespace $service_namespace;
}

class ScalingPlan {
  public ScalingPlanStatusCode $status_code;
  public XmlString $status_message;
  public TimestampType $status_start_time;
  public TimestampType $creation_time;
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public ApplicationSource $application_source;
  public ScalingInstructions $scaling_instructions;
}

class ScalingPolicyUpdateBehavior {
}

class PredefinedLoadMetricSpecification {
  public LoadMetricType $predefined_load_metric_type;
  public ResourceLabel $resource_label;
}

class ResourceIdMaxLen1600 {
}

class ResourceLabel {
}

class ApplicationSource {
  public XmlString $cloud_formation_stack_arn;
  public TagFilters $tag_filters;
}

class CreateScalingPlanResponse {
  public ScalingPlanVersion $scaling_plan_version;
}

class Datapoints {
}

class DescribeScalingPlansResponse {
  public ScalingPlans $scaling_plans;
  public NextToken $next_token;
}

class MetricDimensionValue {
}

class ScalingInstructions {
}

class TargetTrackingConfigurations {
}

class XmlString {
}

class CreateScalingPlanRequest {
  public ScalingPlanName $scaling_plan_name;
  public ApplicationSource $application_source;
  public ScalingInstructions $scaling_instructions;
}

class InvalidNextTokenException {
  public ErrorMessage $message;
}

class MetricDimensions {
}

class MetricStatistic {
}

class ScalingPlanName {
}

class TagFilters {
}

class ValidationException {
  public ErrorMessage $message;
}

class DeleteScalingPlanRequest {
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
}

class DeleteScalingPlanResponse {
}

class MetricDimension {
  public MetricDimensionName $name;
  public MetricDimensionValue $value;
}

class MetricScale {
}

class ScalingPlanVersion {
}

class ConcurrentUpdateException {
  public ErrorMessage $message;
}

class NextToken {
}

class XmlStringMaxLen128 {
}

class ScalableDimension {
}

class ScalingPlanStatusCode {
}

class ScalingPolicy {
  public PolicyName $policy_name;
  public PolicyType $policy_type;
  public TargetTrackingConfiguration $target_tracking_configuration;
}

class CustomizedLoadMetricSpecification {
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricDimensions $dimensions;
  public MetricStatistic $statistic;
  public MetricUnit $unit;
}

class DescribeScalingPlansRequest {
  public ScalingPlanNames $scaling_plan_names;
  public ScalingPlanVersion $scaling_plan_version;
  public ApplicationSources $application_sources;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ErrorMessage {
}

class PredefinedScalingMetricSpecification {
  public ScalingMetricType $predefined_scaling_metric_type;
  public ResourceLabel $resource_label;
}

class ScalingMetricType {
}

class InternalServiceException {
  public ErrorMessage $message;
}

class XmlStringMaxLen256 {
}

class Datapoint {
  public TimestampType $timestamp;
  public MetricScale $value;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class MetricName {
}

class ScalingPlanResources {
}

class ScalingStatusCode {
}

class ScalingInstruction {
  public ServiceNamespace $service_namespace;
  public ResourceIdMaxLen1600 $resource_id;
  public ScalableDimension $scalable_dimension;
  public PredefinedLoadMetricSpecification $predefined_load_metric_specification;
  public ScheduledActionBufferTime $scheduled_action_buffer_time;
  public DisableDynamicScaling $disable_dynamic_scaling;
  public TargetTrackingConfigurations $target_tracking_configurations;
  public PredictiveScalingMaxCapacityBehavior $predictive_scaling_max_capacity_behavior;
  public PredictiveScalingMode $predictive_scaling_mode;
  public ResourceCapacity $min_capacity;
  public CustomizedLoadMetricSpecification $customized_load_metric_specification;
  public ScalingPolicyUpdateBehavior $scaling_policy_update_behavior;
  public ResourceCapacity $max_capacity;
  public ResourceCapacity $predictive_scaling_max_capacity_buffer;
}

class UpdateScalingPlanResponse {
}

class DescribeScalingPlanResourcesRequest {
  public ScalingPlanName $scaling_plan_name;
  public ScalingPlanVersion $scaling_plan_version;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class MetricDimensionName {
}

class PolicyName {
}

class ScheduledActionBufferTime {
}

class TagFilter {
  public XmlStringMaxLen128 $key;
  public TagValues $values;
}

