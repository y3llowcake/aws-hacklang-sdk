<?hh // strict
namespace slack\aws\autoscaling;

interface Auto Scaling {
  public function AttachInstances(AttachInstancesQuery) Awaitable<Errors\Error>;
  public function AttachLoadBalancerTargetGroups(AttachLoadBalancerTargetGroupsType) Awaitable<Errors\Result<AttachLoadBalancerTargetGroupsResultType>>;
  public function DisableMetricsCollection(DisableMetricsCollectionQuery) Awaitable<Errors\Error>;
  public function DescribeMetricCollectionTypes() Awaitable<Errors\Result<DescribeMetricCollectionTypesAnswer>>;
  public function DeleteLifecycleHook(DeleteLifecycleHookType) Awaitable<Errors\Result<DeleteLifecycleHookAnswer>>;
  public function DescribeLoadBalancerTargetGroups(DescribeLoadBalancerTargetGroupsRequest) Awaitable<Errors\Result<DescribeLoadBalancerTargetGroupsResponse>>;
  public function DetachInstances(DetachInstancesQuery) Awaitable<Errors\Result<DetachInstancesAnswer>>;
  public function SuspendProcesses(ScalingProcessQuery) Awaitable<Errors\Error>;
  public function TerminateInstanceInAutoScalingGroup(TerminateInstanceInAutoScalingGroupType) Awaitable<Errors\Result<ActivityType>>;
  public function UpdateAutoScalingGroup(UpdateAutoScalingGroupType) Awaitable<Errors\Error>;
  public function DetachLoadBalancers(DetachLoadBalancersType) Awaitable<Errors\Result<DetachLoadBalancersResultType>>;
  public function EnableMetricsCollection(EnableMetricsCollectionQuery) Awaitable<Errors\Error>;
  public function AttachLoadBalancers(AttachLoadBalancersType) Awaitable<Errors\Result<AttachLoadBalancersResultType>>;
  public function BatchDeleteScheduledAction(BatchDeleteScheduledActionType) Awaitable<Errors\Result<BatchDeleteScheduledActionAnswer>>;
  public function CreateOrUpdateTags(CreateOrUpdateTagsType) Awaitable<Errors\Error>;
  public function DescribeTags(DescribeTagsType) Awaitable<Errors\Result<TagsType>>;
  public function PutScalingPolicy(PutScalingPolicyType) Awaitable<Errors\Result<PolicyARNType>>;
  public function CompleteLifecycleAction(CompleteLifecycleActionType) Awaitable<Errors\Result<CompleteLifecycleActionAnswer>>;
  public function DescribeAutoScalingInstances(DescribeAutoScalingInstancesType) Awaitable<Errors\Result<AutoScalingInstancesType>>;
  public function DescribeLifecycleHooks(DescribeLifecycleHooksType) Awaitable<Errors\Result<DescribeLifecycleHooksAnswer>>;
  public function DescribeNotificationConfigurations(DescribeNotificationConfigurationsType) Awaitable<Errors\Result<DescribeNotificationConfigurationsAnswer>>;
  public function EnterStandby(EnterStandbyQuery) Awaitable<Errors\Result<EnterStandbyAnswer>>;
  public function CreateLaunchConfiguration(CreateLaunchConfigurationType) Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsType) Awaitable<Errors\Error>;
  public function DescribeLifecycleHookTypes() Awaitable<Errors\Result<DescribeLifecycleHookTypesAnswer>>;
  public function PutScheduledUpdateGroupAction(PutScheduledUpdateGroupActionType) Awaitable<Errors\Error>;
  public function DeleteAutoScalingGroup(DeleteAutoScalingGroupType) Awaitable<Errors\Error>;
  public function DeleteLaunchConfiguration(LaunchConfigurationNameType) Awaitable<Errors\Error>;
  public function DetachLoadBalancerTargetGroups(DetachLoadBalancerTargetGroupsType) Awaitable<Errors\Result<DetachLoadBalancerTargetGroupsResultType>>;
  public function ExecutePolicy(ExecutePolicyType) Awaitable<Errors\Error>;
  public function DescribeAdjustmentTypes() Awaitable<Errors\Result<DescribeAdjustmentTypesAnswer>>;
  public function DescribeAutoScalingNotificationTypes() Awaitable<Errors\Result<DescribeAutoScalingNotificationTypesAnswer>>;
  public function DescribeScheduledActions(DescribeScheduledActionsType) Awaitable<Errors\Result<ScheduledActionsType>>;
  public function DescribeTerminationPolicyTypes() Awaitable<Errors\Result<DescribeTerminationPolicyTypesAnswer>>;
  public function ResumeProcesses(ScalingProcessQuery) Awaitable<Errors\Error>;
  public function SetInstanceHealth(SetInstanceHealthQuery) Awaitable<Errors\Error>;
  public function BatchPutScheduledUpdateGroupAction(BatchPutScheduledUpdateGroupActionType) Awaitable<Errors\Result<BatchPutScheduledUpdateGroupActionAnswer>>;
  public function DeleteScheduledAction(DeleteScheduledActionType) Awaitable<Errors\Error>;
  public function DescribeLaunchConfigurations(LaunchConfigurationNamesType) Awaitable<Errors\Result<LaunchConfigurationsType>>;
  public function DescribeLoadBalancers(DescribeLoadBalancersRequest) Awaitable<Errors\Result<DescribeLoadBalancersResponse>>;
  public function DescribeAutoScalingGroups(AutoScalingGroupNamesType) Awaitable<Errors\Result<AutoScalingGroupsType>>;
  public function SetInstanceProtection(SetInstanceProtectionQuery) Awaitable<Errors\Result<SetInstanceProtectionAnswer>>;
  public function CreateAutoScalingGroup(CreateAutoScalingGroupType) Awaitable<Errors\Error>;
  public function DescribePolicies(DescribePoliciesType) Awaitable<Errors\Result<PoliciesType>>;
  public function DescribeScalingProcessTypes() Awaitable<Errors\Result<ProcessesType>>;
  public function ExitStandby(ExitStandbyQuery) Awaitable<Errors\Result<ExitStandbyAnswer>>;
  public function PutNotificationConfiguration(PutNotificationConfigurationType) Awaitable<Errors\Error>;
  public function RecordLifecycleActionHeartbeat(RecordLifecycleActionHeartbeatType) Awaitable<Errors\Result<RecordLifecycleActionHeartbeatAnswer>>;
  public function DeleteNotificationConfiguration(DeleteNotificationConfigurationType) Awaitable<Errors\Error>;
  public function PutLifecycleHook(PutLifecycleHookType) Awaitable<Errors\Result<PutLifecycleHookAnswer>>;
  public function SetDesiredCapacity(SetDesiredCapacityType) Awaitable<Errors\Error>;
  public function DeletePolicy(DeletePolicyType) Awaitable<Errors\Error>;
  public function DescribeAccountLimits() Awaitable<Errors\Result<DescribeAccountLimitsAnswer>>;
  public function DescribeScalingActivities(DescribeScalingActivitiesType) Awaitable<Errors\Result<ActivitiesType>>;
}

class EnterStandbyQuery {
  public ResourceName $auto_scaling_group_name;
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;
  public InstanceIds $instance_ids;
}

class ProtectedFromScaleIn {
}

class DescribeAdjustmentTypesAnswer {
  public AdjustmentTypes $adjustment_types;
}

class DescribeLifecycleHooksType {
  public ResourceName $auto_scaling_group_name;
  public LifecycleHookNames $lifecycle_hook_names;
}

class FailedScheduledUpdateGroupActionRequest {
  public XmlStringMaxLen64 $error_code;
  public XmlString $error_message;
  public XmlStringMaxLen255 $scheduled_action_name;
}

class BatchDeleteScheduledActionType {
  public ResourceName $auto_scaling_group_name;
  public ScheduledActionNames $scheduled_action_names;
}

class CompleteLifecycleActionAnswer {
}

class MetricCollectionTypes {
}

class PutNotificationConfigurationType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $topic_arn;
  public AutoScalingNotificationTypes $notification_types;
}

class CreateOrUpdateTagsType {
  public Tags $tags;
}

class EbsOptimized {
}

class InstancesDistribution {
  public XmlString $on_demand_allocation_strategy;
  public OnDemandBaseCapacity $on_demand_base_capacity;
  public OnDemandPercentageAboveBaseCapacity $on_demand_percentage_above_base_capacity;
  public XmlString $spot_allocation_strategy;
  public SpotInstancePools $spot_instance_pools;
  public MixedInstanceSpotPrice $spot_max_price;
}

class MinAdjustmentStep {
}

class OnDemandBaseCapacity {
}

class AssociatePublicIpAddress {
}

class BlockDeviceEbsVolumeSize {
}

class BlockDeviceMapping {
  public XmlStringMaxLen255 $virtual_name;
  public XmlStringMaxLen255 $device_name;
  public Ebs $ebs;
  public NoDevice $no_device;
}

class MonitoringEnabled {
}

class DeleteLifecycleHookAnswer {
}

class NumberOfLaunchConfigurations {
}

class PolicyTypes {
}

class ProcessesType {
  public Processes $processes;
}

class ShouldRespectGracePeriod {
}

class SuspendedProcesses {
}

class BlockDeviceEbsEncrypted {
}

class CompleteLifecycleActionType {
  public ResourceName $auto_scaling_group_name;
  public LifecycleActionToken $lifecycle_action_token;
  public LifecycleActionResult $lifecycle_action_result;
  public XmlStringMaxLen19 $instance_id;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
}

class Tags {
}

class TerminationPolicies {
}

class MetricNamespace {
}

class TagsType {
  public XmlString $next_token;
  public TagDescriptionList $tags;
}

class Overrides {
}

class RecordLifecycleActionHeartbeatType {
  public LifecycleActionToken $lifecycle_action_token;
  public XmlStringMaxLen19 $instance_id;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public ResourceName $auto_scaling_group_name;
}

class ScalingPolicy {
  public MinAdjustmentStep $min_adjustment_step;
  public XmlStringMaxLen255 $policy_name;
  public ResourceName $policy_arn;
  public XmlStringMaxLen64 $policy_type;
  public XmlStringMaxLen255 $adjustment_type;
  public MinAdjustmentMagnitude $min_adjustment_magnitude;
  public XmlStringMaxLen32 $metric_aggregation_type;
  public EstimatedInstanceWarmup $estimated_instance_warmup;
  public Alarms $alarms;
  public TargetTrackingConfiguration $target_tracking_configuration;
  public Cooldown $cooldown;
  public StepAdjustments $step_adjustments;
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public PolicyIncrement $scaling_adjustment;
  public ScalingPolicyEnabled $enabled;
}

class AttachLoadBalancersResultType {
}

class EstimatedInstanceWarmup {
}

class BlockDeviceEbsDeleteOnTermination {
}

class DetachInstancesQuery {
  public InstanceIds $instance_ids;
  public ResourceName $auto_scaling_group_name;
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;
}

class AutoScalingGroup {
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public HealthCheckGracePeriod $health_check_grace_period;
  public MaxInstanceLifetime $max_instance_lifetime;
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public ResourceName $auto_scaling_group_arn;
  public TargetGroupARNs $target_group_ar_ns;
  public Instances $instances;
  public SuspendedProcesses $suspended_processes;
  public XmlStringMaxLen2047 $vpc_zone_identifier;
  public LaunchTemplateSpecification $launch_template;
  public Cooldown $default_cooldown;
  public AutoScalingGroupMinSize $min_size;
  public XmlStringMaxLen32 $health_check_type;
  public InstanceProtected $new_instances_protected_from_scale_in;
  public XmlStringMaxLen255 $launch_configuration_name;
  public MixedInstancesPolicy $mixed_instances_policy;
  public LoadBalancerNames $load_balancer_names;
  public TimestampType $created_time;
  public XmlStringMaxLen255 $placement_group;
  public EnabledMetrics $enabled_metrics;
  public XmlStringMaxLen255 $status;
  public TagDescriptionList $tags;
  public AutoScalingGroupMaxSize $max_size;
  public AvailabilityZones $availability_zones;
  public TerminationPolicies $termination_policies;
  public ResourceName $service_linked_role_arn;
}

class AutoScalingGroupNamesType {
  public AutoScalingGroupNames $auto_scaling_group_names;
  public XmlString $next_token;
  public MaxRecords $max_records;
}

class AsciiStringMaxLen255 {
}

class StepAdjustment {
  public MetricScale $metric_interval_lower_bound;
  public MetricScale $metric_interval_upper_bound;
  public PolicyIncrement $scaling_adjustment;
}

class XmlStringUserData {
}

class Activity {
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public TimestampType $start_time;
  public TimestampType $end_time;
  public XmlString $details;
  public XmlString $activity_id;
  public XmlString $description;
  public XmlStringMaxLen1023 $cause;
  public ScalingActivityStatusCode $status_code;
  public XmlStringMaxLen255 $status_message;
  public Progress $progress;
}

class AttachLoadBalancerTargetGroupsType {
  public ResourceName $auto_scaling_group_name;
  public TargetGroupARNs $target_group_ar_ns;
}

class ShouldDecrementDesiredCapacity {
}

class XmlStringMaxLen19 {
}

class MixedInstancesPolicy {
  public LaunchTemplate $launch_template;
  public InstancesDistribution $instances_distribution;
}

class ScalingActivityStatusCode {
}

class AttachInstancesQuery {
  public InstanceIds $instance_ids;
  public ResourceName $auto_scaling_group_name;
}

class DescribeLoadBalancerTargetGroupsRequest {
  public MaxRecords $max_records;
  public ResourceName $auto_scaling_group_name;
  public XmlString $next_token;
}

class AdjustmentType {
  public XmlStringMaxLen255 $adjustment_type;
}

class MetricUnit {
}

class ExecutePolicyType {
  public MetricScale $breach_threshold;
  public ResourceName $auto_scaling_group_name;
  public ResourceName $policy_name;
  public HonorCooldown $honor_cooldown;
  public MetricScale $metric_value;
}

class GlobalTimeout {
}

class LifecycleHookSpecification {
  public XmlStringMaxLen1023 $notification_metadata;
  public HeartbeatTimeout $heartbeat_timeout;
  public LifecycleActionResult $default_result;
  public NotificationTargetResourceName $notification_target_arn;
  public ResourceName $role_arn;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public LifecycleTransition $lifecycle_transition;
}

class NotificationTargetResourceName {
}

class ActivityType {
  public Activity $activity;
}

class BlockDeviceMappings {
}

class DeleteLifecycleHookType {
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public ResourceName $auto_scaling_group_name;
}

class DetachLoadBalancersType {
  public ResourceName $auto_scaling_group_name;
  public LoadBalancerNames $load_balancer_names;
}

class LaunchConfigurationNameType {
  public ResourceName $launch_configuration_name;
}

class MaxNumberOfAutoScalingGroups {
}

class SpotInstancePools {
}

class BatchPutScheduledUpdateGroupActionType {
  public ResourceName $auto_scaling_group_name;
  public ScheduledUpdateGroupActionRequests $scheduled_update_group_actions;
}

class HealthCheckGracePeriod {
}

class DescribeLoadBalancersResponse {
  public LoadBalancerStates $load_balancers;
  public XmlString $next_token;
}

class MetricGranularityTypes {
}

class Alarm {
  public XmlStringMaxLen255 $alarm_name;
  public ResourceName $alarm_arn;
}

class AutoScalingInstanceDetails {
  public XmlStringMaxLen19 $instance_id;
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public XmlStringMaxLen32 $lifecycle_state;
  public XmlStringMaxLen32 $health_status;
  public InstanceProtected $protected_from_scale_in;
  public XmlStringMaxLen32 $weighted_capacity;
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen255 $availability_zone;
  public XmlStringMaxLen255 $launch_configuration_name;
  public LaunchTemplateSpecification $launch_template;
}

class SecurityGroups {
}

class Activities {
}

class EnableMetricsCollectionQuery {
  public ResourceName $auto_scaling_group_name;
  public Metrics $metrics;
  public XmlStringMaxLen255 $granularity;
}

class BlockDeviceEbsVolumeType {
}

class LifecycleHook {
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public ResourceName $notification_target_arn;
  public HeartbeatTimeout $heartbeat_timeout;
  public ResourceName $auto_scaling_group_name;
  public LifecycleTransition $lifecycle_transition;
  public ResourceName $role_arn;
  public XmlStringMaxLen1023 $notification_metadata;
  public GlobalTimeout $global_timeout;
  public LifecycleActionResult $default_result;
}

class DescribeMetricCollectionTypesAnswer {
  public MetricGranularityTypes $granularities;
  public MetricCollectionTypes $metrics;
}

class LifecycleTransition {
}

class ScalingActivityInProgressFault {
  public XmlStringMaxLen255 $message;
}

class UpdateAutoScalingGroupType {
  public HealthCheckGracePeriod $health_check_grace_period;
  public XmlStringMaxLen255 $placement_group;
  public ResourceName $service_linked_role_arn;
  public ResourceName $auto_scaling_group_name;
  public AutoScalingGroupMaxSize $max_size;
  public XmlStringMaxLen32 $health_check_type;
  public AvailabilityZones $availability_zones;
  public TerminationPolicies $termination_policies;
  public LaunchTemplateSpecification $launch_template;
  public MixedInstancesPolicy $mixed_instances_policy;
  public Cooldown $default_cooldown;
  public MaxInstanceLifetime $max_instance_lifetime;
  public ResourceName $launch_configuration_name;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public XmlStringMaxLen2047 $vpc_zone_identifier;
  public AutoScalingGroupMinSize $min_size;
  public InstanceProtected $new_instances_protected_from_scale_in;
}

class AdjustmentTypes {
}

class DescribeAccountLimitsAnswer {
  public MaxNumberOfLaunchConfigurations $max_number_of_launch_configurations;
  public NumberOfAutoScalingGroups $number_of_auto_scaling_groups;
  public NumberOfLaunchConfigurations $number_of_launch_configurations;
  public MaxNumberOfAutoScalingGroups $max_number_of_auto_scaling_groups;
}

class DetachLoadBalancersResultType {
}

class ScalingPolicies {
}

class ScheduledUpdateGroupActionRequests {
}

class Alarms {
}

class DescribeTerminationPolicyTypesAnswer {
  public TerminationPolicies $termination_policy_types;
}

class DisableMetricsCollectionQuery {
  public ResourceName $auto_scaling_group_name;
  public Metrics $metrics;
}

class MetricDimensionValue {
}

class MetricName {
}

class NotificationConfiguration {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $topic_arn;
  public XmlStringMaxLen255 $notification_type;
}

class ServiceLinkedRoleFailure {
  public XmlStringMaxLen255 $message;
}

class TimestampType {
}

class CreateAutoScalingGroupType {
  public ResourceName $launch_configuration_name;
  public AutoScalingGroupMinSize $min_size;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public HealthCheckGracePeriod $health_check_grace_period;
  public MixedInstancesPolicy $mixed_instances_policy;
  public AutoScalingGroupMaxSize $max_size;
  public XmlStringMaxLen32 $health_check_type;
  public ResourceName $service_linked_role_arn;
  public Tags $tags;
  public XmlStringMaxLen19 $instance_id;
  public Cooldown $default_cooldown;
  public TargetGroupARNs $target_group_ar_ns;
  public LifecycleHookSpecifications $lifecycle_hook_specification_list;
  public XmlStringMaxLen255 $placement_group;
  public XmlStringMaxLen2047 $vpc_zone_identifier;
  public TerminationPolicies $termination_policies;
  public InstanceProtected $new_instances_protected_from_scale_in;
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public LaunchTemplateSpecification $launch_template;
  public AvailabilityZones $availability_zones;
  public LoadBalancerNames $load_balancer_names;
  public MaxInstanceLifetime $max_instance_lifetime;
}

class CustomizedMetricSpecification {
  public MetricStatistic $statistic;
  public MetricUnit $unit;
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricDimensions $dimensions;
}

class ResourceName {
}

class TagValue {
}

class DescribeNotificationConfigurationsType {
  public AutoScalingGroupNames $auto_scaling_group_names;
  public XmlString $next_token;
  public MaxRecords $max_records;
}

class LoadBalancerStates {
}

class LaunchConfigurationNames {
}

class LaunchConfigurations {
}

class MaxNumberOfLaunchConfigurations {
}

class DeleteScheduledActionType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $scheduled_action_name;
}

class Ebs {
  public XmlStringMaxLen255 $snapshot_id;
  public BlockDeviceEbsVolumeSize $volume_size;
  public BlockDeviceEbsVolumeType $volume_type;
  public BlockDeviceEbsDeleteOnTermination $delete_on_termination;
  public BlockDeviceEbsIops $iops;
  public BlockDeviceEbsEncrypted $encrypted;
}

class InvalidNextToken {
  public XmlStringMaxLen255 $message;
}

class LifecycleHooks {
}

class ScheduledActionNames {
}

class DisableScaleIn {
}

class InstanceIds {
}

class LaunchConfigurationNamesType {
  public LaunchConfigurationNames $launch_configuration_names;
  public XmlString $next_token;
  public MaxRecords $max_records;
}

class AutoScalingInstancesType {
  public AutoScalingInstances $auto_scaling_instances;
  public XmlString $next_token;
}

class ExitStandbyQuery {
  public InstanceIds $instance_ids;
  public ResourceName $auto_scaling_group_name;
}

class LoadBalancerState {
  public XmlStringMaxLen255 $state;
  public XmlStringMaxLen255 $load_balancer_name;
}

class MetricDimensionName {
}

class ExitStandbyAnswer {
  public Activities $activities;
}

class HonorCooldown {
}

class MaxRecords {
}

class MetricStatistic {
}

class BatchPutScheduledUpdateGroupActionAnswer {
  public FailedScheduledUpdateGroupActionRequests $failed_scheduled_update_group_actions;
}

class Cooldown {
}

class ScalingPolicyEnabled {
}

class XmlStringMaxLen2047 {
}

class DescribeLoadBalancersRequest {
  public ResourceName $auto_scaling_group_name;
  public XmlString $next_token;
  public MaxRecords $max_records;
}

class PolicyIncrement {
}

class TagDescriptionList {
}

class AlreadyExistsFault {
  public XmlStringMaxLen255 $message;
}

class NumberOfAutoScalingGroups {
}

class PolicyNames {
}

class PutLifecycleHookType {
  public LifecycleActionResult $default_result;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public ResourceName $auto_scaling_group_name;
  public LifecycleTransition $lifecycle_transition;
  public ResourceName $role_arn;
  public NotificationTargetResourceName $notification_target_arn;
  public XmlStringMaxLen1023 $notification_metadata;
  public HeartbeatTimeout $heartbeat_timeout;
}

class ResourceInUseFault {
  public XmlStringMaxLen255 $message;
}

class XmlString {
}

class ClassicLinkVPCSecurityGroups {
}

class EnabledMetrics {
}

class OnDemandPercentageAboveBaseCapacity {
}

class XmlStringMaxLen255 {
}

class AutoScalingGroupDesiredCapacity {
}

class LifecycleHookNames {
}

class PropagateAtLaunch {
}

class RecordLifecycleActionHeartbeatAnswer {
}

class EnterStandbyAnswer {
  public Activities $activities;
}

class Instance {
  public XmlStringMaxLen32 $weighted_capacity;
  public XmlStringMaxLen19 $instance_id;
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen255 $availability_zone;
  public XmlStringMaxLen32 $health_status;
  public InstanceProtected $protected_from_scale_in;
  public LifecycleState $lifecycle_state;
  public XmlStringMaxLen255 $launch_configuration_name;
  public LaunchTemplateSpecification $launch_template;
}

class PutScalingPolicyType {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen255 $policy_name;
  public PolicyIncrement $scaling_adjustment;
  public StepAdjustments $step_adjustments;
  public TargetTrackingConfiguration $target_tracking_configuration;
  public ScalingPolicyEnabled $enabled;
  public XmlStringMaxLen64 $policy_type;
  public XmlStringMaxLen255 $adjustment_type;
  public MinAdjustmentStep $min_adjustment_step;
  public MinAdjustmentMagnitude $min_adjustment_magnitude;
  public Cooldown $cooldown;
  public XmlStringMaxLen32 $metric_aggregation_type;
  public EstimatedInstanceWarmup $estimated_instance_warmup;
}

class LaunchConfiguration {
  public XmlStringMaxLen255 $ramdisk_id;
  public BlockDeviceMappings $block_device_mappings;
  public TimestampType $created_time;
  public XmlStringMaxLen64 $placement_tenancy;
  public XmlStringMaxLen255 $launch_configuration_name;
  public XmlStringMaxLen255 $classic_link_vpc_id;
  public XmlStringUserData $user_data;
  public SpotPrice $spot_price;
  public ResourceName $launch_configuration_arn;
  public SecurityGroups $security_groups;
  public XmlStringMaxLen255 $kernel_id;
  public AssociatePublicIpAddress $associate_public_ip_address;
  public XmlStringMaxLen255 $key_name;
  public ClassicLinkVPCSecurityGroups $classic_link_vpc_security_groups;
  public XmlStringMaxLen1600 $iam_instance_profile;
  public EbsOptimized $ebs_optimized;
  public XmlStringMaxLen255 $image_id;
  public XmlStringMaxLen255 $instance_type;
  public InstanceMonitoring $instance_monitoring;
}

class LaunchConfigurationsType {
  public LaunchConfigurations $launch_configurations;
  public XmlString $next_token;
}

class DescribeTagsType {
  public MaxRecords $max_records;
  public Filters $filters;
  public XmlString $next_token;
}

class MetricDimension {
  public MetricDimensionName $name;
  public MetricDimensionValue $value;
}

class EnabledMetric {
  public XmlStringMaxLen255 $metric;
  public XmlStringMaxLen255 $granularity;
}

class Filters {
}

class ForceDelete {
}

class LoadBalancerTargetGroupStates {
}

class BlockDeviceEbsIops {
}

class FailedScheduledUpdateGroupActionRequests {
}

class PutScheduledUpdateGroupActionType {
  public AutoScalingGroupMaxSize $max_size;
  public ResourceName $auto_scaling_group_name;
  public TimestampType $time;
  public TimestampType $start_time;
  public AutoScalingGroupMinSize $min_size;
  public XmlStringMaxLen255 $scheduled_action_name;
  public TimestampType $end_time;
  public XmlStringMaxLen255 $recurrence;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
}

class ScheduledActionsType {
  public ScheduledUpdateGroupActions $scheduled_update_group_actions;
  public XmlString $next_token;
}

class MetricType {
}

class MixedInstanceSpotPrice {
}

class DescribeAutoScalingNotificationTypesAnswer {
  public AutoScalingNotificationTypes $auto_scaling_notification_types;
}

class MinAdjustmentMagnitude {
}

class ScheduledUpdateGroupActionRequest {
  public XmlStringMaxLen255 $scheduled_action_name;
  public TimestampType $start_time;
  public TimestampType $end_time;
  public XmlStringMaxLen255 $recurrence;
  public AutoScalingGroupMinSize $min_size;
  public AutoScalingGroupMaxSize $max_size;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
}

class TargetGroupARNs {
}

class DeleteAutoScalingGroupType {
  public ResourceName $auto_scaling_group_name;
  public ForceDelete $force_delete;
}

class DeleteTagsType {
  public Tags $tags;
}

class NoDevice {
}

class SetDesiredCapacityType {
  public ResourceName $auto_scaling_group_name;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public HonorCooldown $honor_cooldown;
}

class AttachLoadBalancerTargetGroupsResultType {
}

class AutoScalingNotificationTypes {
}

class ScheduledUpdateGroupAction {
  public XmlStringMaxLen255 $recurrence;
  public AutoScalingGroupMinSize $min_size;
  public AutoScalingGroupMaxSize $max_size;
  public XmlStringMaxLen255 $scheduled_action_name;
  public ResourceName $scheduled_action_arn;
  public TimestampType $time;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public TimestampType $start_time;
  public TimestampType $end_time;
}

class LimitExceededFault {
  public XmlStringMaxLen255 $message;
}

class Progress {
}

class StepAdjustments {
}

class Values {
}

class InstanceMonitoring {
  public MonitoringEnabled $enabled;
}

class LaunchTemplateSpecification {
  public XmlStringMaxLen255 $version;
  public XmlStringMaxLen255 $launch_template_id;
  public LaunchTemplateName $launch_template_name;
}

class DeletePolicyType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $policy_name;
}

class TerminateInstanceInAutoScalingGroupType {
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;
  public XmlStringMaxLen19 $instance_id;
}

class AutoScalingGroupMinSize {
}

class DeleteNotificationConfigurationType {
  public ResourceName $topic_arn;
  public ResourceName $auto_scaling_group_name;
}

class SetInstanceProtectionAnswer {
}

class AutoScalingInstances {
}

class Filter {
  public XmlString $name;
  public Values $values;
}

class DescribeNotificationConfigurationsAnswer {
  public NotificationConfigurations $notification_configurations;
  public XmlString $next_token;
}

class LifecycleHookSpecifications {
}

class PredefinedMetricSpecification {
  public MetricType $predefined_metric_type;
  public XmlStringMaxLen1023 $resource_label;
}

class SuspendedProcess {
  public XmlStringMaxLen255 $process_name;
  public XmlStringMaxLen255 $suspension_reason;
}

class ActivitiesType {
  public Activities $activities;
  public XmlString $next_token;
}

class AutoScalingGroupsType {
  public AutoScalingGroups $auto_scaling_groups;
  public XmlString $next_token;
}

class Processes {
}

class LifecycleActionToken {
}

class LifecycleState {
}

class DescribeLifecycleHookTypesAnswer {
  public AutoScalingNotificationTypes $lifecycle_hook_types;
}

class TagKey {
}

class TargetTrackingConfiguration {
  public MetricScale $target_value;
  public DisableScaleIn $disable_scale_in;
  public PredefinedMetricSpecification $predefined_metric_specification;
  public CustomizedMetricSpecification $customized_metric_specification;
}

class XmlStringMaxLen64 {
}

class AutoScalingGroupMaxSize {
}

class BatchDeleteScheduledActionAnswer {
  public FailedScheduledUpdateGroupActionRequests $failed_scheduled_actions;
}

class ProcessType {
  public XmlStringMaxLen255 $process_name;
}

class LaunchTemplateName {
}

class LaunchTemplateOverrides {
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen32 $weighted_capacity;
}

class AutoScalingGroupNames {
}

class MetricDimensions {
}

class DescribeScalingActivitiesType {
  public XmlString $next_token;
  public ActivityIds $activity_ids;
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
}

class InstanceProtected {
}

class XmlStringMaxLen1600 {
}

class DescribeLoadBalancerTargetGroupsResponse {
  public LoadBalancerTargetGroupStates $load_balancer_target_groups;
  public XmlString $next_token;
}

class DescribePoliciesType {
  public ResourceName $auto_scaling_group_name;
  public PolicyNames $policy_names;
  public PolicyTypes $policy_types;
  public XmlString $next_token;
  public MaxRecords $max_records;
}

class MetricGranularityType {
  public XmlStringMaxLen255 $granularity;
}

class DetachLoadBalancerTargetGroupsType {
  public ResourceName $auto_scaling_group_name;
  public TargetGroupARNs $target_group_ar_ns;
}

class PoliciesType {
  public ScalingPolicies $scaling_policies;
  public XmlString $next_token;
}

class PutLifecycleHookAnswer {
}

class Tag {
  public TagValue $value;
  public PropagateAtLaunch $propagate_at_launch;
  public XmlString $resource_id;
  public XmlString $resource_type;
  public TagKey $key;
}

class XmlStringMaxLen1023 {
}

class AttachLoadBalancersType {
  public ResourceName $auto_scaling_group_name;
  public LoadBalancerNames $load_balancer_names;
}

class DetachInstancesAnswer {
  public Activities $activities;
}

class SetInstanceProtectionQuery {
  public InstanceIds $instance_ids;
  public ResourceName $auto_scaling_group_name;
  public ProtectedFromScaleIn $protected_from_scale_in;
}

class XmlStringMaxLen32 {
}

class LoadBalancerNames {
}

class MetricCollectionType {
  public XmlStringMaxLen255 $metric;
}

class ProcessNames {
}

class ScheduledUpdateGroupActions {
}

class DescribeLifecycleHooksAnswer {
  public LifecycleHooks $lifecycle_hooks;
}

class Instances {
}

class MaxInstanceLifetime {
}

class NotificationConfigurations {
}

class MetricScale {
}

class ScalingProcessQuery {
  public ResourceName $auto_scaling_group_name;
  public ProcessNames $scaling_processes;
}

class TagDescription {
  public XmlString $resource_type;
  public TagKey $key;
  public TagValue $value;
  public PropagateAtLaunch $propagate_at_launch;
  public XmlString $resource_id;
}

class LifecycleActionResult {
}

class LoadBalancerTargetGroupState {
  public XmlStringMaxLen255 $state;
  public XmlStringMaxLen511 $load_balancer_target_group_arn;
}

class CreateLaunchConfigurationType {
  public XmlStringMaxLen255 $instance_type;
  public SecurityGroups $security_groups;
  public XmlStringMaxLen255 $image_id;
  public XmlStringUserData $user_data;
  public XmlStringMaxLen255 $kernel_id;
  public XmlStringMaxLen1600 $iam_instance_profile;
  public EbsOptimized $ebs_optimized;
  public AssociatePublicIpAddress $associate_public_ip_address;
  public XmlStringMaxLen255 $launch_configuration_name;
  public XmlStringMaxLen19 $instance_id;
  public XmlStringMaxLen255 $ramdisk_id;
  public BlockDeviceMappings $block_device_mappings;
  public InstanceMonitoring $instance_monitoring;
  public XmlStringMaxLen255 $classic_link_vpc_id;
  public ClassicLinkVPCSecurityGroups $classic_link_vpc_security_groups;
  public SpotPrice $spot_price;
  public XmlStringMaxLen64 $placement_tenancy;
  public XmlStringMaxLen255 $key_name;
}

class DescribeScheduledActionsType {
  public ScheduledActionNames $scheduled_action_names;
  public TimestampType $start_time;
  public TimestampType $end_time;
  public XmlString $next_token;
  public MaxRecords $max_records;
  public ResourceName $auto_scaling_group_name;
}

class PolicyARNType {
  public ResourceName $policy_arn;
  public Alarms $alarms;
}

class AutoScalingGroups {
}

class DetachLoadBalancerTargetGroupsResultType {
}

class Metrics {
}

class ResourceContentionFault {
  public XmlStringMaxLen255 $message;
}

class SetInstanceHealthQuery {
  public XmlStringMaxLen19 $instance_id;
  public XmlStringMaxLen32 $health_status;
  public ShouldRespectGracePeriod $should_respect_grace_period;
}

class SpotPrice {
}

class ActivityIds {
}

class DescribeAutoScalingInstancesType {
  public MaxRecords $max_records;
  public XmlString $next_token;
  public InstanceIds $instance_ids;
}

class HeartbeatTimeout {
}

class XmlStringMaxLen511 {
}

class AvailabilityZones {
}

class LaunchTemplate {
  public LaunchTemplateSpecification $launch_template_specification;
  public Overrides $overrides;
}

