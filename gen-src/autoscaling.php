<?hh // strict
namespace slack\aws\autoscaling;

interface Auto Scaling {
  public function AttachInstances(AttachInstancesQuery): Awaitable<Errors\Error>;
  public function AttachLoadBalancerTargetGroups(AttachLoadBalancerTargetGroupsType): Awaitable<Errors\Result<AttachLoadBalancerTargetGroupsResultType>>;
  public function AttachLoadBalancers(AttachLoadBalancersType): Awaitable<Errors\Result<AttachLoadBalancersResultType>>;
  public function BatchDeleteScheduledAction(BatchDeleteScheduledActionType): Awaitable<Errors\Result<BatchDeleteScheduledActionAnswer>>;
  public function BatchPutScheduledUpdateGroupAction(BatchPutScheduledUpdateGroupActionType): Awaitable<Errors\Result<BatchPutScheduledUpdateGroupActionAnswer>>;
  public function CompleteLifecycleAction(CompleteLifecycleActionType): Awaitable<Errors\Result<CompleteLifecycleActionAnswer>>;
  public function CreateAutoScalingGroup(CreateAutoScalingGroupType): Awaitable<Errors\Error>;
  public function CreateLaunchConfiguration(CreateLaunchConfigurationType): Awaitable<Errors\Error>;
  public function CreateOrUpdateTags(CreateOrUpdateTagsType): Awaitable<Errors\Error>;
  public function DeleteAutoScalingGroup(DeleteAutoScalingGroupType): Awaitable<Errors\Error>;
  public function DeleteLaunchConfiguration(LaunchConfigurationNameType): Awaitable<Errors\Error>;
  public function DeleteLifecycleHook(DeleteLifecycleHookType): Awaitable<Errors\Result<DeleteLifecycleHookAnswer>>;
  public function DeleteNotificationConfiguration(DeleteNotificationConfigurationType): Awaitable<Errors\Error>;
  public function DeletePolicy(DeletePolicyType): Awaitable<Errors\Error>;
  public function DeleteScheduledAction(DeleteScheduledActionType): Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsType): Awaitable<Errors\Error>;
  public function DescribeAccountLimits(): Awaitable<Errors\Result<DescribeAccountLimitsAnswer>>;
  public function DescribeAdjustmentTypes(): Awaitable<Errors\Result<DescribeAdjustmentTypesAnswer>>;
  public function DescribeAutoScalingGroups(AutoScalingGroupNamesType): Awaitable<Errors\Result<AutoScalingGroupsType>>;
  public function DescribeAutoScalingInstances(DescribeAutoScalingInstancesType): Awaitable<Errors\Result<AutoScalingInstancesType>>;
  public function DescribeAutoScalingNotificationTypes(): Awaitable<Errors\Result<DescribeAutoScalingNotificationTypesAnswer>>;
  public function DescribeLaunchConfigurations(LaunchConfigurationNamesType): Awaitable<Errors\Result<LaunchConfigurationsType>>;
  public function DescribeLifecycleHookTypes(): Awaitable<Errors\Result<DescribeLifecycleHookTypesAnswer>>;
  public function DescribeLifecycleHooks(DescribeLifecycleHooksType): Awaitable<Errors\Result<DescribeLifecycleHooksAnswer>>;
  public function DescribeLoadBalancerTargetGroups(DescribeLoadBalancerTargetGroupsRequest): Awaitable<Errors\Result<DescribeLoadBalancerTargetGroupsResponse>>;
  public function DescribeLoadBalancers(DescribeLoadBalancersRequest): Awaitable<Errors\Result<DescribeLoadBalancersResponse>>;
  public function DescribeMetricCollectionTypes(): Awaitable<Errors\Result<DescribeMetricCollectionTypesAnswer>>;
  public function DescribeNotificationConfigurations(DescribeNotificationConfigurationsType): Awaitable<Errors\Result<DescribeNotificationConfigurationsAnswer>>;
  public function DescribePolicies(DescribePoliciesType): Awaitable<Errors\Result<PoliciesType>>;
  public function DescribeScalingActivities(DescribeScalingActivitiesType): Awaitable<Errors\Result<ActivitiesType>>;
  public function DescribeScalingProcessTypes(): Awaitable<Errors\Result<ProcessesType>>;
  public function DescribeScheduledActions(DescribeScheduledActionsType): Awaitable<Errors\Result<ScheduledActionsType>>;
  public function DescribeTags(DescribeTagsType): Awaitable<Errors\Result<TagsType>>;
  public function DescribeTerminationPolicyTypes(): Awaitable<Errors\Result<DescribeTerminationPolicyTypesAnswer>>;
  public function DetachInstances(DetachInstancesQuery): Awaitable<Errors\Result<DetachInstancesAnswer>>;
  public function DetachLoadBalancerTargetGroups(DetachLoadBalancerTargetGroupsType): Awaitable<Errors\Result<DetachLoadBalancerTargetGroupsResultType>>;
  public function DetachLoadBalancers(DetachLoadBalancersType): Awaitable<Errors\Result<DetachLoadBalancersResultType>>;
  public function DisableMetricsCollection(DisableMetricsCollectionQuery): Awaitable<Errors\Error>;
  public function EnableMetricsCollection(EnableMetricsCollectionQuery): Awaitable<Errors\Error>;
  public function EnterStandby(EnterStandbyQuery): Awaitable<Errors\Result<EnterStandbyAnswer>>;
  public function ExecutePolicy(ExecutePolicyType): Awaitable<Errors\Error>;
  public function ExitStandby(ExitStandbyQuery): Awaitable<Errors\Result<ExitStandbyAnswer>>;
  public function PutLifecycleHook(PutLifecycleHookType): Awaitable<Errors\Result<PutLifecycleHookAnswer>>;
  public function PutNotificationConfiguration(PutNotificationConfigurationType): Awaitable<Errors\Error>;
  public function PutScalingPolicy(PutScalingPolicyType): Awaitable<Errors\Result<PolicyARNType>>;
  public function PutScheduledUpdateGroupAction(PutScheduledUpdateGroupActionType): Awaitable<Errors\Error>;
  public function RecordLifecycleActionHeartbeat(RecordLifecycleActionHeartbeatType): Awaitable<Errors\Result<RecordLifecycleActionHeartbeatAnswer>>;
  public function ResumeProcesses(ScalingProcessQuery): Awaitable<Errors\Error>;
  public function SetDesiredCapacity(SetDesiredCapacityType): Awaitable<Errors\Error>;
  public function SetInstanceHealth(SetInstanceHealthQuery): Awaitable<Errors\Error>;
  public function SetInstanceProtection(SetInstanceProtectionQuery): Awaitable<Errors\Result<SetInstanceProtectionAnswer>>;
  public function SuspendProcesses(ScalingProcessQuery): Awaitable<Errors\Error>;
  public function TerminateInstanceInAutoScalingGroup(TerminateInstanceInAutoScalingGroupType): Awaitable<Errors\Result<ActivityType>>;
  public function UpdateAutoScalingGroup(UpdateAutoScalingGroupType): Awaitable<Errors\Error>;
}

class Activities {
}

class ActivitiesType {
  public Activities $activities;
  public XmlString $next_token;
}

class Activity {
  public XmlString $activity_id;
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public XmlStringMaxLen1023 $cause;
  public XmlString $description;
  public XmlString $details;
  public TimestampType $end_time;
  public Progress $progress;
  public TimestampType $start_time;
  public ScalingActivityStatusCode $status_code;
  public XmlStringMaxLen255 $status_message;
}

class ActivityIds {
}

class ActivityType {
  public Activity $activity;
}

class AdjustmentType {
  public XmlStringMaxLen255 $adjustment_type;
}

class AdjustmentTypes {
}

class Alarm {
  public ResourceName $alarm_arn;
  public XmlStringMaxLen255 $alarm_name;
}

class Alarms {
}

class AlreadyExistsFault {
  public XmlStringMaxLen255 $message;
}

class AsciiStringMaxLen255 {
}

class AssociatePublicIpAddress {
}

class AttachInstancesQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;
}

class AttachLoadBalancerTargetGroupsResultType {
}

class AttachLoadBalancerTargetGroupsType {
  public ResourceName $auto_scaling_group_name;
  public TargetGroupARNs $target_group_ar_ns;
}

class AttachLoadBalancersResultType {
}

class AttachLoadBalancersType {
  public ResourceName $auto_scaling_group_name;
  public LoadBalancerNames $load_balancer_names;
}

class AutoScalingGroup {
  public ResourceName $auto_scaling_group_arn;
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public AvailabilityZones $availability_zones;
  public TimestampType $created_time;
  public Cooldown $default_cooldown;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public EnabledMetrics $enabled_metrics;
  public HealthCheckGracePeriod $health_check_grace_period;
  public XmlStringMaxLen32 $health_check_type;
  public Instances $instances;
  public XmlStringMaxLen255 $launch_configuration_name;
  public LaunchTemplateSpecification $launch_template;
  public LoadBalancerNames $load_balancer_names;
  public MaxInstanceLifetime $max_instance_lifetime;
  public AutoScalingGroupMaxSize $max_size;
  public AutoScalingGroupMinSize $min_size;
  public MixedInstancesPolicy $mixed_instances_policy;
  public InstanceProtected $new_instances_protected_from_scale_in;
  public XmlStringMaxLen255 $placement_group;
  public ResourceName $service_linked_role_arn;
  public XmlStringMaxLen255 $status;
  public SuspendedProcesses $suspended_processes;
  public TagDescriptionList $tags;
  public TargetGroupARNs $target_group_ar_ns;
  public TerminationPolicies $termination_policies;
  public XmlStringMaxLen2047 $vpc_zone_identifier;
}

class AutoScalingGroupDesiredCapacity {
}

class AutoScalingGroupMaxSize {
}

class AutoScalingGroupMinSize {
}

class AutoScalingGroupNames {
}

class AutoScalingGroupNamesType {
  public AutoScalingGroupNames $auto_scaling_group_names;
  public MaxRecords $max_records;
  public XmlString $next_token;
}

class AutoScalingGroups {
}

class AutoScalingGroupsType {
  public AutoScalingGroups $auto_scaling_groups;
  public XmlString $next_token;
}

class AutoScalingInstanceDetails {
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public XmlStringMaxLen255 $availability_zone;
  public XmlStringMaxLen32 $health_status;
  public XmlStringMaxLen19 $instance_id;
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen255 $launch_configuration_name;
  public LaunchTemplateSpecification $launch_template;
  public XmlStringMaxLen32 $lifecycle_state;
  public InstanceProtected $protected_from_scale_in;
  public XmlStringMaxLen32 $weighted_capacity;
}

class AutoScalingInstances {
}

class AutoScalingInstancesType {
  public AutoScalingInstances $auto_scaling_instances;
  public XmlString $next_token;
}

class AutoScalingNotificationTypes {
}

class AvailabilityZones {
}

class BatchDeleteScheduledActionAnswer {
  public FailedScheduledUpdateGroupActionRequests $failed_scheduled_actions;
}

class BatchDeleteScheduledActionType {
  public ResourceName $auto_scaling_group_name;
  public ScheduledActionNames $scheduled_action_names;
}

class BatchPutScheduledUpdateGroupActionAnswer {
  public FailedScheduledUpdateGroupActionRequests $failed_scheduled_update_group_actions;
}

class BatchPutScheduledUpdateGroupActionType {
  public ResourceName $auto_scaling_group_name;
  public ScheduledUpdateGroupActionRequests $scheduled_update_group_actions;
}

class BlockDeviceEbsDeleteOnTermination {
}

class BlockDeviceEbsEncrypted {
}

class BlockDeviceEbsIops {
}

class BlockDeviceEbsVolumeSize {
}

class BlockDeviceEbsVolumeType {
}

class BlockDeviceMapping {
  public XmlStringMaxLen255 $device_name;
  public Ebs $ebs;
  public NoDevice $no_device;
  public XmlStringMaxLen255 $virtual_name;
}

class BlockDeviceMappings {
}

class ClassicLinkVPCSecurityGroups {
}

class CompleteLifecycleActionAnswer {
}

class CompleteLifecycleActionType {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen19 $instance_id;
  public LifecycleActionResult $lifecycle_action_result;
  public LifecycleActionToken $lifecycle_action_token;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
}

class Cooldown {
}

class CreateAutoScalingGroupType {
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public AvailabilityZones $availability_zones;
  public Cooldown $default_cooldown;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public HealthCheckGracePeriod $health_check_grace_period;
  public XmlStringMaxLen32 $health_check_type;
  public XmlStringMaxLen19 $instance_id;
  public ResourceName $launch_configuration_name;
  public LaunchTemplateSpecification $launch_template;
  public LifecycleHookSpecifications $lifecycle_hook_specification_list;
  public LoadBalancerNames $load_balancer_names;
  public MaxInstanceLifetime $max_instance_lifetime;
  public AutoScalingGroupMaxSize $max_size;
  public AutoScalingGroupMinSize $min_size;
  public MixedInstancesPolicy $mixed_instances_policy;
  public InstanceProtected $new_instances_protected_from_scale_in;
  public XmlStringMaxLen255 $placement_group;
  public ResourceName $service_linked_role_arn;
  public Tags $tags;
  public TargetGroupARNs $target_group_ar_ns;
  public TerminationPolicies $termination_policies;
  public XmlStringMaxLen2047 $vpc_zone_identifier;
}

class CreateLaunchConfigurationType {
  public AssociatePublicIpAddress $associate_public_ip_address;
  public BlockDeviceMappings $block_device_mappings;
  public XmlStringMaxLen255 $classic_link_vpc_id;
  public ClassicLinkVPCSecurityGroups $classic_link_vpc_security_groups;
  public EbsOptimized $ebs_optimized;
  public XmlStringMaxLen1600 $iam_instance_profile;
  public XmlStringMaxLen255 $image_id;
  public XmlStringMaxLen19 $instance_id;
  public InstanceMonitoring $instance_monitoring;
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen255 $kernel_id;
  public XmlStringMaxLen255 $key_name;
  public XmlStringMaxLen255 $launch_configuration_name;
  public XmlStringMaxLen64 $placement_tenancy;
  public XmlStringMaxLen255 $ramdisk_id;
  public SecurityGroups $security_groups;
  public SpotPrice $spot_price;
  public XmlStringUserData $user_data;
}

class CreateOrUpdateTagsType {
  public Tags $tags;
}

class CustomizedMetricSpecification {
  public MetricDimensions $dimensions;
  public MetricName $metric_name;
  public MetricNamespace $namespace;
  public MetricStatistic $statistic;
  public MetricUnit $unit;
}

class DeleteAutoScalingGroupType {
  public ResourceName $auto_scaling_group_name;
  public ForceDelete $force_delete;
}

class DeleteLifecycleHookAnswer {
}

class DeleteLifecycleHookType {
  public ResourceName $auto_scaling_group_name;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
}

class DeleteNotificationConfigurationType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $topic_arn;
}

class DeletePolicyType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $policy_name;
}

class DeleteScheduledActionType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $scheduled_action_name;
}

class DeleteTagsType {
  public Tags $tags;
}

class DescribeAccountLimitsAnswer {
  public MaxNumberOfAutoScalingGroups $max_number_of_auto_scaling_groups;
  public MaxNumberOfLaunchConfigurations $max_number_of_launch_configurations;
  public NumberOfAutoScalingGroups $number_of_auto_scaling_groups;
  public NumberOfLaunchConfigurations $number_of_launch_configurations;
}

class DescribeAdjustmentTypesAnswer {
  public AdjustmentTypes $adjustment_types;
}

class DescribeAutoScalingInstancesType {
  public InstanceIds $instance_ids;
  public MaxRecords $max_records;
  public XmlString $next_token;
}

class DescribeAutoScalingNotificationTypesAnswer {
  public AutoScalingNotificationTypes $auto_scaling_notification_types;
}

class DescribeLifecycleHookTypesAnswer {
  public AutoScalingNotificationTypes $lifecycle_hook_types;
}

class DescribeLifecycleHooksAnswer {
  public LifecycleHooks $lifecycle_hooks;
}

class DescribeLifecycleHooksType {
  public ResourceName $auto_scaling_group_name;
  public LifecycleHookNames $lifecycle_hook_names;
}

class DescribeLoadBalancerTargetGroupsRequest {
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
  public XmlString $next_token;
}

class DescribeLoadBalancerTargetGroupsResponse {
  public LoadBalancerTargetGroupStates $load_balancer_target_groups;
  public XmlString $next_token;
}

class DescribeLoadBalancersRequest {
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
  public XmlString $next_token;
}

class DescribeLoadBalancersResponse {
  public LoadBalancerStates $load_balancers;
  public XmlString $next_token;
}

class DescribeMetricCollectionTypesAnswer {
  public MetricGranularityTypes $granularities;
  public MetricCollectionTypes $metrics;
}

class DescribeNotificationConfigurationsAnswer {
  public XmlString $next_token;
  public NotificationConfigurations $notification_configurations;
}

class DescribeNotificationConfigurationsType {
  public AutoScalingGroupNames $auto_scaling_group_names;
  public MaxRecords $max_records;
  public XmlString $next_token;
}

class DescribePoliciesType {
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
  public XmlString $next_token;
  public PolicyNames $policy_names;
  public PolicyTypes $policy_types;
}

class DescribeScalingActivitiesType {
  public ActivityIds $activity_ids;
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
  public XmlString $next_token;
}

class DescribeScheduledActionsType {
  public ResourceName $auto_scaling_group_name;
  public TimestampType $end_time;
  public MaxRecords $max_records;
  public XmlString $next_token;
  public ScheduledActionNames $scheduled_action_names;
  public TimestampType $start_time;
}

class DescribeTagsType {
  public Filters $filters;
  public MaxRecords $max_records;
  public XmlString $next_token;
}

class DescribeTerminationPolicyTypesAnswer {
  public TerminationPolicies $termination_policy_types;
}

class DetachInstancesAnswer {
  public Activities $activities;
}

class DetachInstancesQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;
}

class DetachLoadBalancerTargetGroupsResultType {
}

class DetachLoadBalancerTargetGroupsType {
  public ResourceName $auto_scaling_group_name;
  public TargetGroupARNs $target_group_ar_ns;
}

class DetachLoadBalancersResultType {
}

class DetachLoadBalancersType {
  public ResourceName $auto_scaling_group_name;
  public LoadBalancerNames $load_balancer_names;
}

class DisableMetricsCollectionQuery {
  public ResourceName $auto_scaling_group_name;
  public Metrics $metrics;
}

class DisableScaleIn {
}

class Ebs {
  public BlockDeviceEbsDeleteOnTermination $delete_on_termination;
  public BlockDeviceEbsEncrypted $encrypted;
  public BlockDeviceEbsIops $iops;
  public XmlStringMaxLen255 $snapshot_id;
  public BlockDeviceEbsVolumeSize $volume_size;
  public BlockDeviceEbsVolumeType $volume_type;
}

class EbsOptimized {
}

class EnableMetricsCollectionQuery {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen255 $granularity;
  public Metrics $metrics;
}

class EnabledMetric {
  public XmlStringMaxLen255 $granularity;
  public XmlStringMaxLen255 $metric;
}

class EnabledMetrics {
}

class EnterStandbyAnswer {
  public Activities $activities;
}

class EnterStandbyQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;
}

class EstimatedInstanceWarmup {
}

class ExecutePolicyType {
  public ResourceName $auto_scaling_group_name;
  public MetricScale $breach_threshold;
  public HonorCooldown $honor_cooldown;
  public MetricScale $metric_value;
  public ResourceName $policy_name;
}

class ExitStandbyAnswer {
  public Activities $activities;
}

class ExitStandbyQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;
}

class FailedScheduledUpdateGroupActionRequest {
  public XmlStringMaxLen64 $error_code;
  public XmlString $error_message;
  public XmlStringMaxLen255 $scheduled_action_name;
}

class FailedScheduledUpdateGroupActionRequests {
}

class Filter {
  public XmlString $name;
  public Values $values;
}

class Filters {
}

class ForceDelete {
}

class GlobalTimeout {
}

class HealthCheckGracePeriod {
}

class HeartbeatTimeout {
}

class HonorCooldown {
}

class Instance {
  public XmlStringMaxLen255 $availability_zone;
  public XmlStringMaxLen32 $health_status;
  public XmlStringMaxLen19 $instance_id;
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen255 $launch_configuration_name;
  public LaunchTemplateSpecification $launch_template;
  public LifecycleState $lifecycle_state;
  public InstanceProtected $protected_from_scale_in;
  public XmlStringMaxLen32 $weighted_capacity;
}

class InstanceIds {
}

class InstanceMonitoring {
  public MonitoringEnabled $enabled;
}

class InstanceProtected {
}

class Instances {
}

class InstancesDistribution {
  public XmlString $on_demand_allocation_strategy;
  public OnDemandBaseCapacity $on_demand_base_capacity;
  public OnDemandPercentageAboveBaseCapacity $on_demand_percentage_above_base_capacity;
  public XmlString $spot_allocation_strategy;
  public SpotInstancePools $spot_instance_pools;
  public MixedInstanceSpotPrice $spot_max_price;
}

class InvalidNextToken {
  public XmlStringMaxLen255 $message;
}

class LaunchConfiguration {
  public AssociatePublicIpAddress $associate_public_ip_address;
  public BlockDeviceMappings $block_device_mappings;
  public XmlStringMaxLen255 $classic_link_vpc_id;
  public ClassicLinkVPCSecurityGroups $classic_link_vpc_security_groups;
  public TimestampType $created_time;
  public EbsOptimized $ebs_optimized;
  public XmlStringMaxLen1600 $iam_instance_profile;
  public XmlStringMaxLen255 $image_id;
  public InstanceMonitoring $instance_monitoring;
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen255 $kernel_id;
  public XmlStringMaxLen255 $key_name;
  public ResourceName $launch_configuration_arn;
  public XmlStringMaxLen255 $launch_configuration_name;
  public XmlStringMaxLen64 $placement_tenancy;
  public XmlStringMaxLen255 $ramdisk_id;
  public SecurityGroups $security_groups;
  public SpotPrice $spot_price;
  public XmlStringUserData $user_data;
}

class LaunchConfigurationNameType {
  public ResourceName $launch_configuration_name;
}

class LaunchConfigurationNames {
}

class LaunchConfigurationNamesType {
  public LaunchConfigurationNames $launch_configuration_names;
  public MaxRecords $max_records;
  public XmlString $next_token;
}

class LaunchConfigurations {
}

class LaunchConfigurationsType {
  public LaunchConfigurations $launch_configurations;
  public XmlString $next_token;
}

class LaunchTemplate {
  public LaunchTemplateSpecification $launch_template_specification;
  public Overrides $overrides;
}

class LaunchTemplateName {
}

class LaunchTemplateOverrides {
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen32 $weighted_capacity;
}

class LaunchTemplateSpecification {
  public XmlStringMaxLen255 $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public XmlStringMaxLen255 $version;
}

class LifecycleActionResult {
}

class LifecycleActionToken {
}

class LifecycleHook {
  public ResourceName $auto_scaling_group_name;
  public LifecycleActionResult $default_result;
  public GlobalTimeout $global_timeout;
  public HeartbeatTimeout $heartbeat_timeout;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public LifecycleTransition $lifecycle_transition;
  public XmlStringMaxLen1023 $notification_metadata;
  public ResourceName $notification_target_arn;
  public ResourceName $role_arn;
}

class LifecycleHookNames {
}

class LifecycleHookSpecification {
  public LifecycleActionResult $default_result;
  public HeartbeatTimeout $heartbeat_timeout;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public LifecycleTransition $lifecycle_transition;
  public XmlStringMaxLen1023 $notification_metadata;
  public NotificationTargetResourceName $notification_target_arn;
  public ResourceName $role_arn;
}

class LifecycleHookSpecifications {
}

class LifecycleHooks {
}

class LifecycleState {
}

class LifecycleTransition {
}

class LimitExceededFault {
  public XmlStringMaxLen255 $message;
}

class LoadBalancerNames {
}

class LoadBalancerState {
  public XmlStringMaxLen255 $load_balancer_name;
  public XmlStringMaxLen255 $state;
}

class LoadBalancerStates {
}

class LoadBalancerTargetGroupState {
  public XmlStringMaxLen511 $load_balancer_target_group_arn;
  public XmlStringMaxLen255 $state;
}

class LoadBalancerTargetGroupStates {
}

class MaxInstanceLifetime {
}

class MaxNumberOfAutoScalingGroups {
}

class MaxNumberOfLaunchConfigurations {
}

class MaxRecords {
}

class MetricCollectionType {
  public XmlStringMaxLen255 $metric;
}

class MetricCollectionTypes {
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

class MetricGranularityType {
  public XmlStringMaxLen255 $granularity;
}

class MetricGranularityTypes {
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

class Metrics {
}

class MinAdjustmentMagnitude {
}

class MinAdjustmentStep {
}

class MixedInstanceSpotPrice {
}

class MixedInstancesPolicy {
  public InstancesDistribution $instances_distribution;
  public LaunchTemplate $launch_template;
}

class MonitoringEnabled {
}

class NoDevice {
}

class NotificationConfiguration {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen255 $notification_type;
  public ResourceName $topic_arn;
}

class NotificationConfigurations {
}

class NotificationTargetResourceName {
}

class NumberOfAutoScalingGroups {
}

class NumberOfLaunchConfigurations {
}

class OnDemandBaseCapacity {
}

class OnDemandPercentageAboveBaseCapacity {
}

class Overrides {
}

class PoliciesType {
  public XmlString $next_token;
  public ScalingPolicies $scaling_policies;
}

class PolicyARNType {
  public Alarms $alarms;
  public ResourceName $policy_arn;
}

class PolicyIncrement {
}

class PolicyNames {
}

class PolicyTypes {
}

class PredefinedMetricSpecification {
  public MetricType $predefined_metric_type;
  public XmlStringMaxLen1023 $resource_label;
}

class ProcessNames {
}

class ProcessType {
  public XmlStringMaxLen255 $process_name;
}

class Processes {
}

class ProcessesType {
  public Processes $processes;
}

class Progress {
}

class PropagateAtLaunch {
}

class ProtectedFromScaleIn {
}

class PutLifecycleHookAnswer {
}

class PutLifecycleHookType {
  public ResourceName $auto_scaling_group_name;
  public LifecycleActionResult $default_result;
  public HeartbeatTimeout $heartbeat_timeout;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public LifecycleTransition $lifecycle_transition;
  public XmlStringMaxLen1023 $notification_metadata;
  public NotificationTargetResourceName $notification_target_arn;
  public ResourceName $role_arn;
}

class PutNotificationConfigurationType {
  public ResourceName $auto_scaling_group_name;
  public AutoScalingNotificationTypes $notification_types;
  public ResourceName $topic_arn;
}

class PutScalingPolicyType {
  public XmlStringMaxLen255 $adjustment_type;
  public ResourceName $auto_scaling_group_name;
  public Cooldown $cooldown;
  public ScalingPolicyEnabled $enabled;
  public EstimatedInstanceWarmup $estimated_instance_warmup;
  public XmlStringMaxLen32 $metric_aggregation_type;
  public MinAdjustmentMagnitude $min_adjustment_magnitude;
  public MinAdjustmentStep $min_adjustment_step;
  public XmlStringMaxLen255 $policy_name;
  public XmlStringMaxLen64 $policy_type;
  public PolicyIncrement $scaling_adjustment;
  public StepAdjustments $step_adjustments;
  public TargetTrackingConfiguration $target_tracking_configuration;
}

class PutScheduledUpdateGroupActionType {
  public ResourceName $auto_scaling_group_name;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public TimestampType $end_time;
  public AutoScalingGroupMaxSize $max_size;
  public AutoScalingGroupMinSize $min_size;
  public XmlStringMaxLen255 $recurrence;
  public XmlStringMaxLen255 $scheduled_action_name;
  public TimestampType $start_time;
  public TimestampType $time;
}

class RecordLifecycleActionHeartbeatAnswer {
}

class RecordLifecycleActionHeartbeatType {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen19 $instance_id;
  public LifecycleActionToken $lifecycle_action_token;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
}

class ResourceContentionFault {
  public XmlStringMaxLen255 $message;
}

class ResourceInUseFault {
  public XmlStringMaxLen255 $message;
}

class ResourceName {
}

class ScalingActivityInProgressFault {
  public XmlStringMaxLen255 $message;
}

class ScalingActivityStatusCode {
}

class ScalingPolicies {
}

class ScalingPolicy {
  public XmlStringMaxLen255 $adjustment_type;
  public Alarms $alarms;
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public Cooldown $cooldown;
  public ScalingPolicyEnabled $enabled;
  public EstimatedInstanceWarmup $estimated_instance_warmup;
  public XmlStringMaxLen32 $metric_aggregation_type;
  public MinAdjustmentMagnitude $min_adjustment_magnitude;
  public MinAdjustmentStep $min_adjustment_step;
  public ResourceName $policy_arn;
  public XmlStringMaxLen255 $policy_name;
  public XmlStringMaxLen64 $policy_type;
  public PolicyIncrement $scaling_adjustment;
  public StepAdjustments $step_adjustments;
  public TargetTrackingConfiguration $target_tracking_configuration;
}

class ScalingPolicyEnabled {
}

class ScalingProcessQuery {
  public ResourceName $auto_scaling_group_name;
  public ProcessNames $scaling_processes;
}

class ScheduledActionNames {
}

class ScheduledActionsType {
  public XmlString $next_token;
  public ScheduledUpdateGroupActions $scheduled_update_group_actions;
}

class ScheduledUpdateGroupAction {
  public XmlStringMaxLen255 $auto_scaling_group_name;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public TimestampType $end_time;
  public AutoScalingGroupMaxSize $max_size;
  public AutoScalingGroupMinSize $min_size;
  public XmlStringMaxLen255 $recurrence;
  public ResourceName $scheduled_action_arn;
  public XmlStringMaxLen255 $scheduled_action_name;
  public TimestampType $start_time;
  public TimestampType $time;
}

class ScheduledUpdateGroupActionRequest {
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public TimestampType $end_time;
  public AutoScalingGroupMaxSize $max_size;
  public AutoScalingGroupMinSize $min_size;
  public XmlStringMaxLen255 $recurrence;
  public XmlStringMaxLen255 $scheduled_action_name;
  public TimestampType $start_time;
}

class ScheduledUpdateGroupActionRequests {
}

class ScheduledUpdateGroupActions {
}

class SecurityGroups {
}

class ServiceLinkedRoleFailure {
  public XmlStringMaxLen255 $message;
}

class SetDesiredCapacityType {
  public ResourceName $auto_scaling_group_name;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public HonorCooldown $honor_cooldown;
}

class SetInstanceHealthQuery {
  public XmlStringMaxLen32 $health_status;
  public XmlStringMaxLen19 $instance_id;
  public ShouldRespectGracePeriod $should_respect_grace_period;
}

class SetInstanceProtectionAnswer {
}

class SetInstanceProtectionQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;
  public ProtectedFromScaleIn $protected_from_scale_in;
}

class ShouldDecrementDesiredCapacity {
}

class ShouldRespectGracePeriod {
}

class SpotInstancePools {
}

class SpotPrice {
}

class StepAdjustment {
  public MetricScale $metric_interval_lower_bound;
  public MetricScale $metric_interval_upper_bound;
  public PolicyIncrement $scaling_adjustment;
}

class StepAdjustments {
}

class SuspendedProcess {
  public XmlStringMaxLen255 $process_name;
  public XmlStringMaxLen255 $suspension_reason;
}

class SuspendedProcesses {
}

class Tag {
  public TagKey $key;
  public PropagateAtLaunch $propagate_at_launch;
  public XmlString $resource_id;
  public XmlString $resource_type;
  public TagValue $value;
}

class TagDescription {
  public TagKey $key;
  public PropagateAtLaunch $propagate_at_launch;
  public XmlString $resource_id;
  public XmlString $resource_type;
  public TagValue $value;
}

class TagDescriptionList {
}

class TagKey {
}

class TagValue {
}

class Tags {
}

class TagsType {
  public XmlString $next_token;
  public TagDescriptionList $tags;
}

class TargetGroupARNs {
}

class TargetTrackingConfiguration {
  public CustomizedMetricSpecification $customized_metric_specification;
  public DisableScaleIn $disable_scale_in;
  public PredefinedMetricSpecification $predefined_metric_specification;
  public MetricScale $target_value;
}

class TerminateInstanceInAutoScalingGroupType {
  public XmlStringMaxLen19 $instance_id;
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;
}

class TerminationPolicies {
}

class TimestampType {
}

class UpdateAutoScalingGroupType {
  public ResourceName $auto_scaling_group_name;
  public AvailabilityZones $availability_zones;
  public Cooldown $default_cooldown;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public HealthCheckGracePeriod $health_check_grace_period;
  public XmlStringMaxLen32 $health_check_type;
  public ResourceName $launch_configuration_name;
  public LaunchTemplateSpecification $launch_template;
  public MaxInstanceLifetime $max_instance_lifetime;
  public AutoScalingGroupMaxSize $max_size;
  public AutoScalingGroupMinSize $min_size;
  public MixedInstancesPolicy $mixed_instances_policy;
  public InstanceProtected $new_instances_protected_from_scale_in;
  public XmlStringMaxLen255 $placement_group;
  public ResourceName $service_linked_role_arn;
  public TerminationPolicies $termination_policies;
  public XmlStringMaxLen2047 $vpc_zone_identifier;
}

class Values {
}

class XmlString {
}

class XmlStringMaxLen1023 {
}

class XmlStringMaxLen1600 {
}

class XmlStringMaxLen19 {
}

class XmlStringMaxLen2047 {
}

class XmlStringMaxLen255 {
}

class XmlStringMaxLen32 {
}

class XmlStringMaxLen511 {
}

class XmlStringMaxLen64 {
}

class XmlStringUserData {
}

