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

type Activities = vec<Activity>;

class ActivitiesType {
  public Activities $activities;
  public XmlString $next_token;

  public function __construct(shape(
  ?'activities' => Activities,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->activities = $activities ?? [];
    $this->next_token = $next_token ?? "";
  }
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

  public function __construct(shape(
  ?'activity_id' => XmlString,
  ?'auto_scaling_group_name' => XmlStringMaxLen255,
  ?'cause' => XmlStringMaxLen1023,
  ?'description' => XmlString,
  ?'details' => XmlString,
  ?'end_time' => TimestampType,
  ?'progress' => Progress,
  ?'start_time' => TimestampType,
  ?'status_code' => ScalingActivityStatusCode,
  ?'status_message' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->activity_id = $activity_id ?? "";
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->cause = $cause ?? "";
    $this->description = $description ?? "";
    $this->details = $details ?? "";
    $this->end_time = $end_time ?? 0;
    $this->progress = $progress ?? 0;
    $this->start_time = $start_time ?? 0;
    $this->status_code = $status_code ?? "";
    $this->status_message = $status_message ?? "";
  }
}

type ActivityIds = vec<XmlString>;

class ActivityType {
  public Activity $activity;

  public function __construct(shape(
  ?'activity' => Activity,
  ) $s = shape()) {
    $this->activity = $activity ?? null;
  }
}

class AdjustmentType {
  public XmlStringMaxLen255 $adjustment_type;

  public function __construct(shape(
  ?'adjustment_type' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->adjustment_type = $adjustment_type ?? "";
  }
}

type AdjustmentTypes = vec<AdjustmentType>;

class Alarm {
  public ResourceName $alarm_arn;
  public XmlStringMaxLen255 $alarm_name;

  public function __construct(shape(
  ?'alarm_arn' => ResourceName,
  ?'alarm_name' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->alarm_arn = $alarm_arn ?? "";
    $this->alarm_name = $alarm_name ?? "";
  }
}

type Alarms = vec<Alarm>;

class AlreadyExistsFault {
  public XmlStringMaxLen255 $message;

  public function __construct(shape(
  ?'message' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AsciiStringMaxLen255 = string;

type AssociatePublicIpAddress = bool;

class AttachInstancesQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'instance_ids' => InstanceIds,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->instance_ids = $instance_ids ?? [];
  }
}

class AttachLoadBalancerTargetGroupsResultType {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AttachLoadBalancerTargetGroupsType {
  public ResourceName $auto_scaling_group_name;
  public TargetGroupARNs $target_group_ar_ns;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'target_group_ar_ns' => TargetGroupARNs,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->target_group_ar_ns = $target_group_ar_ns ?? [];
  }
}

class AttachLoadBalancersResultType {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AttachLoadBalancersType {
  public ResourceName $auto_scaling_group_name;
  public LoadBalancerNames $load_balancer_names;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'load_balancer_names' => LoadBalancerNames,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->load_balancer_names = $load_balancer_names ?? [];
  }
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

  public function __construct(shape(
  ?'auto_scaling_group_arn' => ResourceName,
  ?'auto_scaling_group_name' => XmlStringMaxLen255,
  ?'availability_zones' => AvailabilityZones,
  ?'created_time' => TimestampType,
  ?'default_cooldown' => Cooldown,
  ?'desired_capacity' => AutoScalingGroupDesiredCapacity,
  ?'enabled_metrics' => EnabledMetrics,
  ?'health_check_grace_period' => HealthCheckGracePeriod,
  ?'health_check_type' => XmlStringMaxLen32,
  ?'instances' => Instances,
  ?'launch_configuration_name' => XmlStringMaxLen255,
  ?'launch_template' => LaunchTemplateSpecification,
  ?'load_balancer_names' => LoadBalancerNames,
  ?'max_instance_lifetime' => MaxInstanceLifetime,
  ?'max_size' => AutoScalingGroupMaxSize,
  ?'min_size' => AutoScalingGroupMinSize,
  ?'mixed_instances_policy' => MixedInstancesPolicy,
  ?'new_instances_protected_from_scale_in' => InstanceProtected,
  ?'placement_group' => XmlStringMaxLen255,
  ?'service_linked_role_arn' => ResourceName,
  ?'status' => XmlStringMaxLen255,
  ?'suspended_processes' => SuspendedProcesses,
  ?'tags' => TagDescriptionList,
  ?'target_group_ar_ns' => TargetGroupARNs,
  ?'termination_policies' => TerminationPolicies,
  ?'vpc_zone_identifier' => XmlStringMaxLen2047,
  ) $s = shape()) {
    $this->auto_scaling_group_arn = $auto_scaling_group_arn ?? "";
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->availability_zones = $availability_zones ?? [];
    $this->created_time = $created_time ?? 0;
    $this->default_cooldown = $default_cooldown ?? 0;
    $this->desired_capacity = $desired_capacity ?? 0;
    $this->enabled_metrics = $enabled_metrics ?? [];
    $this->health_check_grace_period = $health_check_grace_period ?? 0;
    $this->health_check_type = $health_check_type ?? "";
    $this->instances = $instances ?? [];
    $this->launch_configuration_name = $launch_configuration_name ?? "";
    $this->launch_template = $launch_template ?? null;
    $this->load_balancer_names = $load_balancer_names ?? [];
    $this->max_instance_lifetime = $max_instance_lifetime ?? 0;
    $this->max_size = $max_size ?? 0;
    $this->min_size = $min_size ?? 0;
    $this->mixed_instances_policy = $mixed_instances_policy ?? null;
    $this->new_instances_protected_from_scale_in = $new_instances_protected_from_scale_in ?? false;
    $this->placement_group = $placement_group ?? "";
    $this->service_linked_role_arn = $service_linked_role_arn ?? "";
    $this->status = $status ?? "";
    $this->suspended_processes = $suspended_processes ?? [];
    $this->tags = $tags ?? [];
    $this->target_group_ar_ns = $target_group_ar_ns ?? [];
    $this->termination_policies = $termination_policies ?? [];
    $this->vpc_zone_identifier = $vpc_zone_identifier ?? "";
  }
}

type AutoScalingGroupDesiredCapacity = int;

type AutoScalingGroupMaxSize = int;

type AutoScalingGroupMinSize = int;

type AutoScalingGroupNames = vec<ResourceName>;

class AutoScalingGroupNamesType {
  public AutoScalingGroupNames $auto_scaling_group_names;
  public MaxRecords $max_records;
  public XmlString $next_token;

  public function __construct(shape(
  ?'auto_scaling_group_names' => AutoScalingGroupNames,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->auto_scaling_group_names = $auto_scaling_group_names ?? [];
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

type AutoScalingGroups = vec<AutoScalingGroup>;

class AutoScalingGroupsType {
  public AutoScalingGroups $auto_scaling_groups;
  public XmlString $next_token;

  public function __construct(shape(
  ?'auto_scaling_groups' => AutoScalingGroups,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->auto_scaling_groups = $auto_scaling_groups ?? [];
    $this->next_token = $next_token ?? "";
  }
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

  public function __construct(shape(
  ?'auto_scaling_group_name' => XmlStringMaxLen255,
  ?'availability_zone' => XmlStringMaxLen255,
  ?'health_status' => XmlStringMaxLen32,
  ?'instance_id' => XmlStringMaxLen19,
  ?'instance_type' => XmlStringMaxLen255,
  ?'launch_configuration_name' => XmlStringMaxLen255,
  ?'launch_template' => LaunchTemplateSpecification,
  ?'lifecycle_state' => XmlStringMaxLen32,
  ?'protected_from_scale_in' => InstanceProtected,
  ?'weighted_capacity' => XmlStringMaxLen32,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->availability_zone = $availability_zone ?? "";
    $this->health_status = $health_status ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->launch_configuration_name = $launch_configuration_name ?? "";
    $this->launch_template = $launch_template ?? null;
    $this->lifecycle_state = $lifecycle_state ?? "";
    $this->protected_from_scale_in = $protected_from_scale_in ?? false;
    $this->weighted_capacity = $weighted_capacity ?? "";
  }
}

type AutoScalingInstances = vec<AutoScalingInstanceDetails>;

class AutoScalingInstancesType {
  public AutoScalingInstances $auto_scaling_instances;
  public XmlString $next_token;

  public function __construct(shape(
  ?'auto_scaling_instances' => AutoScalingInstances,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->auto_scaling_instances = $auto_scaling_instances ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type AutoScalingNotificationTypes = vec<XmlStringMaxLen255>;

type AvailabilityZones = vec<XmlStringMaxLen255>;

class BatchDeleteScheduledActionAnswer {
  public FailedScheduledUpdateGroupActionRequests $failed_scheduled_actions;

  public function __construct(shape(
  ?'failed_scheduled_actions' => FailedScheduledUpdateGroupActionRequests,
  ) $s = shape()) {
    $this->failed_scheduled_actions = $failed_scheduled_actions ?? [];
  }
}

class BatchDeleteScheduledActionType {
  public ResourceName $auto_scaling_group_name;
  public ScheduledActionNames $scheduled_action_names;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'scheduled_action_names' => ScheduledActionNames,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->scheduled_action_names = $scheduled_action_names ?? [];
  }
}

class BatchPutScheduledUpdateGroupActionAnswer {
  public FailedScheduledUpdateGroupActionRequests $failed_scheduled_update_group_actions;

  public function __construct(shape(
  ?'failed_scheduled_update_group_actions' => FailedScheduledUpdateGroupActionRequests,
  ) $s = shape()) {
    $this->failed_scheduled_update_group_actions = $failed_scheduled_update_group_actions ?? [];
  }
}

class BatchPutScheduledUpdateGroupActionType {
  public ResourceName $auto_scaling_group_name;
  public ScheduledUpdateGroupActionRequests $scheduled_update_group_actions;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'scheduled_update_group_actions' => ScheduledUpdateGroupActionRequests,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->scheduled_update_group_actions = $scheduled_update_group_actions ?? [];
  }
}

type BlockDeviceEbsDeleteOnTermination = bool;

type BlockDeviceEbsEncrypted = bool;

type BlockDeviceEbsIops = int;

type BlockDeviceEbsVolumeSize = int;

type BlockDeviceEbsVolumeType = string;

class BlockDeviceMapping {
  public XmlStringMaxLen255 $device_name;
  public Ebs $ebs;
  public NoDevice $no_device;
  public XmlStringMaxLen255 $virtual_name;

  public function __construct(shape(
  ?'device_name' => XmlStringMaxLen255,
  ?'ebs' => Ebs,
  ?'no_device' => NoDevice,
  ?'virtual_name' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->device_name = $device_name ?? "";
    $this->ebs = $ebs ?? null;
    $this->no_device = $no_device ?? false;
    $this->virtual_name = $virtual_name ?? "";
  }
}

type BlockDeviceMappings = vec<BlockDeviceMapping>;

type ClassicLinkVPCSecurityGroups = vec<XmlStringMaxLen255>;

class CompleteLifecycleActionAnswer {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CompleteLifecycleActionType {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen19 $instance_id;
  public LifecycleActionResult $lifecycle_action_result;
  public LifecycleActionToken $lifecycle_action_token;
  public AsciiStringMaxLen255 $lifecycle_hook_name;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'instance_id' => XmlStringMaxLen19,
  ?'lifecycle_action_result' => LifecycleActionResult,
  ?'lifecycle_action_token' => LifecycleActionToken,
  ?'lifecycle_hook_name' => AsciiStringMaxLen255,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->lifecycle_action_result = $lifecycle_action_result ?? "";
    $this->lifecycle_action_token = $lifecycle_action_token ?? "";
    $this->lifecycle_hook_name = $lifecycle_hook_name ?? "";
  }
}

type Cooldown = int;

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

  public function __construct(shape(
  ?'auto_scaling_group_name' => XmlStringMaxLen255,
  ?'availability_zones' => AvailabilityZones,
  ?'default_cooldown' => Cooldown,
  ?'desired_capacity' => AutoScalingGroupDesiredCapacity,
  ?'health_check_grace_period' => HealthCheckGracePeriod,
  ?'health_check_type' => XmlStringMaxLen32,
  ?'instance_id' => XmlStringMaxLen19,
  ?'launch_configuration_name' => ResourceName,
  ?'launch_template' => LaunchTemplateSpecification,
  ?'lifecycle_hook_specification_list' => LifecycleHookSpecifications,
  ?'load_balancer_names' => LoadBalancerNames,
  ?'max_instance_lifetime' => MaxInstanceLifetime,
  ?'max_size' => AutoScalingGroupMaxSize,
  ?'min_size' => AutoScalingGroupMinSize,
  ?'mixed_instances_policy' => MixedInstancesPolicy,
  ?'new_instances_protected_from_scale_in' => InstanceProtected,
  ?'placement_group' => XmlStringMaxLen255,
  ?'service_linked_role_arn' => ResourceName,
  ?'tags' => Tags,
  ?'target_group_ar_ns' => TargetGroupARNs,
  ?'termination_policies' => TerminationPolicies,
  ?'vpc_zone_identifier' => XmlStringMaxLen2047,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->availability_zones = $availability_zones ?? [];
    $this->default_cooldown = $default_cooldown ?? 0;
    $this->desired_capacity = $desired_capacity ?? 0;
    $this->health_check_grace_period = $health_check_grace_period ?? 0;
    $this->health_check_type = $health_check_type ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->launch_configuration_name = $launch_configuration_name ?? "";
    $this->launch_template = $launch_template ?? null;
    $this->lifecycle_hook_specification_list = $lifecycle_hook_specification_list ?? [];
    $this->load_balancer_names = $load_balancer_names ?? [];
    $this->max_instance_lifetime = $max_instance_lifetime ?? 0;
    $this->max_size = $max_size ?? 0;
    $this->min_size = $min_size ?? 0;
    $this->mixed_instances_policy = $mixed_instances_policy ?? null;
    $this->new_instances_protected_from_scale_in = $new_instances_protected_from_scale_in ?? false;
    $this->placement_group = $placement_group ?? "";
    $this->service_linked_role_arn = $service_linked_role_arn ?? "";
    $this->tags = $tags ?? [];
    $this->target_group_ar_ns = $target_group_ar_ns ?? [];
    $this->termination_policies = $termination_policies ?? [];
    $this->vpc_zone_identifier = $vpc_zone_identifier ?? "";
  }
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

  public function __construct(shape(
  ?'associate_public_ip_address' => AssociatePublicIpAddress,
  ?'block_device_mappings' => BlockDeviceMappings,
  ?'classic_link_vpc_id' => XmlStringMaxLen255,
  ?'classic_link_vpc_security_groups' => ClassicLinkVPCSecurityGroups,
  ?'ebs_optimized' => EbsOptimized,
  ?'iam_instance_profile' => XmlStringMaxLen1600,
  ?'image_id' => XmlStringMaxLen255,
  ?'instance_id' => XmlStringMaxLen19,
  ?'instance_monitoring' => InstanceMonitoring,
  ?'instance_type' => XmlStringMaxLen255,
  ?'kernel_id' => XmlStringMaxLen255,
  ?'key_name' => XmlStringMaxLen255,
  ?'launch_configuration_name' => XmlStringMaxLen255,
  ?'placement_tenancy' => XmlStringMaxLen64,
  ?'ramdisk_id' => XmlStringMaxLen255,
  ?'security_groups' => SecurityGroups,
  ?'spot_price' => SpotPrice,
  ?'user_data' => XmlStringUserData,
  ) $s = shape()) {
    $this->associate_public_ip_address = $associate_public_ip_address ?? false;
    $this->block_device_mappings = $block_device_mappings ?? [];
    $this->classic_link_vpc_id = $classic_link_vpc_id ?? "";
    $this->classic_link_vpc_security_groups = $classic_link_vpc_security_groups ?? [];
    $this->ebs_optimized = $ebs_optimized ?? false;
    $this->iam_instance_profile = $iam_instance_profile ?? "";
    $this->image_id = $image_id ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->instance_monitoring = $instance_monitoring ?? null;
    $this->instance_type = $instance_type ?? "";
    $this->kernel_id = $kernel_id ?? "";
    $this->key_name = $key_name ?? "";
    $this->launch_configuration_name = $launch_configuration_name ?? "";
    $this->placement_tenancy = $placement_tenancy ?? "";
    $this->ramdisk_id = $ramdisk_id ?? "";
    $this->security_groups = $security_groups ?? [];
    $this->spot_price = $spot_price ?? "";
    $this->user_data = $user_data ?? "";
  }
}

class CreateOrUpdateTagsType {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

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

class DeleteAutoScalingGroupType {
  public ResourceName $auto_scaling_group_name;
  public ForceDelete $force_delete;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'force_delete' => ForceDelete,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->force_delete = $force_delete ?? false;
  }
}

class DeleteLifecycleHookAnswer {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteLifecycleHookType {
  public ResourceName $auto_scaling_group_name;
  public AsciiStringMaxLen255 $lifecycle_hook_name;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'lifecycle_hook_name' => AsciiStringMaxLen255,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->lifecycle_hook_name = $lifecycle_hook_name ?? "";
  }
}

class DeleteNotificationConfigurationType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $topic_arn;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'topic_arn' => ResourceName,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->topic_arn = $topic_arn ?? "";
  }
}

class DeletePolicyType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $policy_name;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'policy_name' => ResourceName,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class DeleteScheduledActionType {
  public ResourceName $auto_scaling_group_name;
  public ResourceName $scheduled_action_name;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'scheduled_action_name' => ResourceName,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
  }
}

class DeleteTagsType {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class DescribeAccountLimitsAnswer {
  public MaxNumberOfAutoScalingGroups $max_number_of_auto_scaling_groups;
  public MaxNumberOfLaunchConfigurations $max_number_of_launch_configurations;
  public NumberOfAutoScalingGroups $number_of_auto_scaling_groups;
  public NumberOfLaunchConfigurations $number_of_launch_configurations;

  public function __construct(shape(
  ?'max_number_of_auto_scaling_groups' => MaxNumberOfAutoScalingGroups,
  ?'max_number_of_launch_configurations' => MaxNumberOfLaunchConfigurations,
  ?'number_of_auto_scaling_groups' => NumberOfAutoScalingGroups,
  ?'number_of_launch_configurations' => NumberOfLaunchConfigurations,
  ) $s = shape()) {
    $this->max_number_of_auto_scaling_groups = $max_number_of_auto_scaling_groups ?? 0;
    $this->max_number_of_launch_configurations = $max_number_of_launch_configurations ?? 0;
    $this->number_of_auto_scaling_groups = $number_of_auto_scaling_groups ?? 0;
    $this->number_of_launch_configurations = $number_of_launch_configurations ?? 0;
  }
}

class DescribeAdjustmentTypesAnswer {
  public AdjustmentTypes $adjustment_types;

  public function __construct(shape(
  ?'adjustment_types' => AdjustmentTypes,
  ) $s = shape()) {
    $this->adjustment_types = $adjustment_types ?? [];
  }
}

class DescribeAutoScalingInstancesType {
  public InstanceIds $instance_ids;
  public MaxRecords $max_records;
  public XmlString $next_token;

  public function __construct(shape(
  ?'instance_ids' => InstanceIds,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->instance_ids = $instance_ids ?? [];
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAutoScalingNotificationTypesAnswer {
  public AutoScalingNotificationTypes $auto_scaling_notification_types;

  public function __construct(shape(
  ?'auto_scaling_notification_types' => AutoScalingNotificationTypes,
  ) $s = shape()) {
    $this->auto_scaling_notification_types = $auto_scaling_notification_types ?? [];
  }
}

class DescribeLifecycleHookTypesAnswer {
  public AutoScalingNotificationTypes $lifecycle_hook_types;

  public function __construct(shape(
  ?'lifecycle_hook_types' => AutoScalingNotificationTypes,
  ) $s = shape()) {
    $this->lifecycle_hook_types = $lifecycle_hook_types ?? [];
  }
}

class DescribeLifecycleHooksAnswer {
  public LifecycleHooks $lifecycle_hooks;

  public function __construct(shape(
  ?'lifecycle_hooks' => LifecycleHooks,
  ) $s = shape()) {
    $this->lifecycle_hooks = $lifecycle_hooks ?? [];
  }
}

class DescribeLifecycleHooksType {
  public ResourceName $auto_scaling_group_name;
  public LifecycleHookNames $lifecycle_hook_names;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'lifecycle_hook_names' => LifecycleHookNames,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->lifecycle_hook_names = $lifecycle_hook_names ?? [];
  }
}

class DescribeLoadBalancerTargetGroupsRequest {
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
  public XmlString $next_token;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeLoadBalancerTargetGroupsResponse {
  public LoadBalancerTargetGroupStates $load_balancer_target_groups;
  public XmlString $next_token;

  public function __construct(shape(
  ?'load_balancer_target_groups' => LoadBalancerTargetGroupStates,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->load_balancer_target_groups = $load_balancer_target_groups ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeLoadBalancersRequest {
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
  public XmlString $next_token;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeLoadBalancersResponse {
  public LoadBalancerStates $load_balancers;
  public XmlString $next_token;

  public function __construct(shape(
  ?'load_balancers' => LoadBalancerStates,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->load_balancers = $load_balancers ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeMetricCollectionTypesAnswer {
  public MetricGranularityTypes $granularities;
  public MetricCollectionTypes $metrics;

  public function __construct(shape(
  ?'granularities' => MetricGranularityTypes,
  ?'metrics' => MetricCollectionTypes,
  ) $s = shape()) {
    $this->granularities = $granularities ?? [];
    $this->metrics = $metrics ?? [];
  }
}

class DescribeNotificationConfigurationsAnswer {
  public XmlString $next_token;
  public NotificationConfigurations $notification_configurations;

  public function __construct(shape(
  ?'next_token' => XmlString,
  ?'notification_configurations' => NotificationConfigurations,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->notification_configurations = $notification_configurations ?? [];
  }
}

class DescribeNotificationConfigurationsType {
  public AutoScalingGroupNames $auto_scaling_group_names;
  public MaxRecords $max_records;
  public XmlString $next_token;

  public function __construct(shape(
  ?'auto_scaling_group_names' => AutoScalingGroupNames,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->auto_scaling_group_names = $auto_scaling_group_names ?? [];
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribePoliciesType {
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
  public XmlString $next_token;
  public PolicyNames $policy_names;
  public PolicyTypes $policy_types;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ?'policy_names' => PolicyNames,
  ?'policy_types' => PolicyTypes,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
    $this->policy_names = $policy_names ?? [];
    $this->policy_types = $policy_types ?? [];
  }
}

class DescribeScalingActivitiesType {
  public ActivityIds $activity_ids;
  public ResourceName $auto_scaling_group_name;
  public MaxRecords $max_records;
  public XmlString $next_token;

  public function __construct(shape(
  ?'activity_ids' => ActivityIds,
  ?'auto_scaling_group_name' => ResourceName,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->activity_ids = $activity_ids ?? [];
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeScheduledActionsType {
  public ResourceName $auto_scaling_group_name;
  public TimestampType $end_time;
  public MaxRecords $max_records;
  public XmlString $next_token;
  public ScheduledActionNames $scheduled_action_names;
  public TimestampType $start_time;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'end_time' => TimestampType,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ?'scheduled_action_names' => ScheduledActionNames,
  ?'start_time' => TimestampType,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->end_time = $end_time ?? 0;
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
    $this->scheduled_action_names = $scheduled_action_names ?? [];
    $this->start_time = $start_time ?? 0;
  }
}

class DescribeTagsType {
  public Filters $filters;
  public MaxRecords $max_records;
  public XmlString $next_token;

  public function __construct(shape(
  ?'filters' => Filters,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeTerminationPolicyTypesAnswer {
  public TerminationPolicies $termination_policy_types;

  public function __construct(shape(
  ?'termination_policy_types' => TerminationPolicies,
  ) $s = shape()) {
    $this->termination_policy_types = $termination_policy_types ?? [];
  }
}

class DetachInstancesAnswer {
  public Activities $activities;

  public function __construct(shape(
  ?'activities' => Activities,
  ) $s = shape()) {
    $this->activities = $activities ?? [];
  }
}

class DetachInstancesQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'instance_ids' => InstanceIds,
  ?'should_decrement_desired_capacity' => ShouldDecrementDesiredCapacity,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->instance_ids = $instance_ids ?? [];
    $this->should_decrement_desired_capacity = $should_decrement_desired_capacity ?? false;
  }
}

class DetachLoadBalancerTargetGroupsResultType {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DetachLoadBalancerTargetGroupsType {
  public ResourceName $auto_scaling_group_name;
  public TargetGroupARNs $target_group_ar_ns;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'target_group_ar_ns' => TargetGroupARNs,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->target_group_ar_ns = $target_group_ar_ns ?? [];
  }
}

class DetachLoadBalancersResultType {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DetachLoadBalancersType {
  public ResourceName $auto_scaling_group_name;
  public LoadBalancerNames $load_balancer_names;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'load_balancer_names' => LoadBalancerNames,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->load_balancer_names = $load_balancer_names ?? [];
  }
}

class DisableMetricsCollectionQuery {
  public ResourceName $auto_scaling_group_name;
  public Metrics $metrics;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'metrics' => Metrics,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->metrics = $metrics ?? [];
  }
}

type DisableScaleIn = bool;

class Ebs {
  public BlockDeviceEbsDeleteOnTermination $delete_on_termination;
  public BlockDeviceEbsEncrypted $encrypted;
  public BlockDeviceEbsIops $iops;
  public XmlStringMaxLen255 $snapshot_id;
  public BlockDeviceEbsVolumeSize $volume_size;
  public BlockDeviceEbsVolumeType $volume_type;

  public function __construct(shape(
  ?'delete_on_termination' => BlockDeviceEbsDeleteOnTermination,
  ?'encrypted' => BlockDeviceEbsEncrypted,
  ?'iops' => BlockDeviceEbsIops,
  ?'snapshot_id' => XmlStringMaxLen255,
  ?'volume_size' => BlockDeviceEbsVolumeSize,
  ?'volume_type' => BlockDeviceEbsVolumeType,
  ) $s = shape()) {
    $this->delete_on_termination = $delete_on_termination ?? false;
    $this->encrypted = $encrypted ?? false;
    $this->iops = $iops ?? 0;
    $this->snapshot_id = $snapshot_id ?? "";
    $this->volume_size = $volume_size ?? 0;
    $this->volume_type = $volume_type ?? "";
  }
}

type EbsOptimized = bool;

class EnableMetricsCollectionQuery {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen255 $granularity;
  public Metrics $metrics;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'granularity' => XmlStringMaxLen255,
  ?'metrics' => Metrics,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->granularity = $granularity ?? "";
    $this->metrics = $metrics ?? [];
  }
}

class EnabledMetric {
  public XmlStringMaxLen255 $granularity;
  public XmlStringMaxLen255 $metric;

  public function __construct(shape(
  ?'granularity' => XmlStringMaxLen255,
  ?'metric' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->granularity = $granularity ?? "";
    $this->metric = $metric ?? "";
  }
}

type EnabledMetrics = vec<EnabledMetric>;

class EnterStandbyAnswer {
  public Activities $activities;

  public function __construct(shape(
  ?'activities' => Activities,
  ) $s = shape()) {
    $this->activities = $activities ?? [];
  }
}

class EnterStandbyQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'instance_ids' => InstanceIds,
  ?'should_decrement_desired_capacity' => ShouldDecrementDesiredCapacity,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->instance_ids = $instance_ids ?? [];
    $this->should_decrement_desired_capacity = $should_decrement_desired_capacity ?? false;
  }
}

type EstimatedInstanceWarmup = int;

class ExecutePolicyType {
  public ResourceName $auto_scaling_group_name;
  public MetricScale $breach_threshold;
  public HonorCooldown $honor_cooldown;
  public MetricScale $metric_value;
  public ResourceName $policy_name;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'breach_threshold' => MetricScale,
  ?'honor_cooldown' => HonorCooldown,
  ?'metric_value' => MetricScale,
  ?'policy_name' => ResourceName,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->breach_threshold = $breach_threshold ?? 0.0;
    $this->honor_cooldown = $honor_cooldown ?? false;
    $this->metric_value = $metric_value ?? 0.0;
    $this->policy_name = $policy_name ?? "";
  }
}

class ExitStandbyAnswer {
  public Activities $activities;

  public function __construct(shape(
  ?'activities' => Activities,
  ) $s = shape()) {
    $this->activities = $activities ?? [];
  }
}

class ExitStandbyQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'instance_ids' => InstanceIds,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->instance_ids = $instance_ids ?? [];
  }
}

class FailedScheduledUpdateGroupActionRequest {
  public XmlStringMaxLen64 $error_code;
  public XmlString $error_message;
  public XmlStringMaxLen255 $scheduled_action_name;

  public function __construct(shape(
  ?'error_code' => XmlStringMaxLen64,
  ?'error_message' => XmlString,
  ?'scheduled_action_name' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
  }
}

type FailedScheduledUpdateGroupActionRequests = vec<FailedScheduledUpdateGroupActionRequest>;

class Filter {
  public XmlString $name;
  public Values $values;

  public function __construct(shape(
  ?'name' => XmlString,
  ?'values' => Values,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type Filters = vec<Filter>;

type ForceDelete = bool;

type GlobalTimeout = int;

type HealthCheckGracePeriod = int;

type HeartbeatTimeout = int;

type HonorCooldown = bool;

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

  public function __construct(shape(
  ?'availability_zone' => XmlStringMaxLen255,
  ?'health_status' => XmlStringMaxLen32,
  ?'instance_id' => XmlStringMaxLen19,
  ?'instance_type' => XmlStringMaxLen255,
  ?'launch_configuration_name' => XmlStringMaxLen255,
  ?'launch_template' => LaunchTemplateSpecification,
  ?'lifecycle_state' => LifecycleState,
  ?'protected_from_scale_in' => InstanceProtected,
  ?'weighted_capacity' => XmlStringMaxLen32,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->health_status = $health_status ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->launch_configuration_name = $launch_configuration_name ?? "";
    $this->launch_template = $launch_template ?? null;
    $this->lifecycle_state = $lifecycle_state ?? "";
    $this->protected_from_scale_in = $protected_from_scale_in ?? false;
    $this->weighted_capacity = $weighted_capacity ?? "";
  }
}

type InstanceIds = vec<XmlStringMaxLen19>;

class InstanceMonitoring {
  public MonitoringEnabled $enabled;

  public function __construct(shape(
  ?'enabled' => MonitoringEnabled,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
  }
}

type InstanceProtected = bool;

type Instances = vec<Instance>;

class InstancesDistribution {
  public XmlString $on_demand_allocation_strategy;
  public OnDemandBaseCapacity $on_demand_base_capacity;
  public OnDemandPercentageAboveBaseCapacity $on_demand_percentage_above_base_capacity;
  public XmlString $spot_allocation_strategy;
  public SpotInstancePools $spot_instance_pools;
  public MixedInstanceSpotPrice $spot_max_price;

  public function __construct(shape(
  ?'on_demand_allocation_strategy' => XmlString,
  ?'on_demand_base_capacity' => OnDemandBaseCapacity,
  ?'on_demand_percentage_above_base_capacity' => OnDemandPercentageAboveBaseCapacity,
  ?'spot_allocation_strategy' => XmlString,
  ?'spot_instance_pools' => SpotInstancePools,
  ?'spot_max_price' => MixedInstanceSpotPrice,
  ) $s = shape()) {
    $this->on_demand_allocation_strategy = $on_demand_allocation_strategy ?? "";
    $this->on_demand_base_capacity = $on_demand_base_capacity ?? 0;
    $this->on_demand_percentage_above_base_capacity = $on_demand_percentage_above_base_capacity ?? 0;
    $this->spot_allocation_strategy = $spot_allocation_strategy ?? "";
    $this->spot_instance_pools = $spot_instance_pools ?? 0;
    $this->spot_max_price = $spot_max_price ?? "";
  }
}

class InvalidNextToken {
  public XmlStringMaxLen255 $message;

  public function __construct(shape(
  ?'message' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'associate_public_ip_address' => AssociatePublicIpAddress,
  ?'block_device_mappings' => BlockDeviceMappings,
  ?'classic_link_vpc_id' => XmlStringMaxLen255,
  ?'classic_link_vpc_security_groups' => ClassicLinkVPCSecurityGroups,
  ?'created_time' => TimestampType,
  ?'ebs_optimized' => EbsOptimized,
  ?'iam_instance_profile' => XmlStringMaxLen1600,
  ?'image_id' => XmlStringMaxLen255,
  ?'instance_monitoring' => InstanceMonitoring,
  ?'instance_type' => XmlStringMaxLen255,
  ?'kernel_id' => XmlStringMaxLen255,
  ?'key_name' => XmlStringMaxLen255,
  ?'launch_configuration_arn' => ResourceName,
  ?'launch_configuration_name' => XmlStringMaxLen255,
  ?'placement_tenancy' => XmlStringMaxLen64,
  ?'ramdisk_id' => XmlStringMaxLen255,
  ?'security_groups' => SecurityGroups,
  ?'spot_price' => SpotPrice,
  ?'user_data' => XmlStringUserData,
  ) $s = shape()) {
    $this->associate_public_ip_address = $associate_public_ip_address ?? false;
    $this->block_device_mappings = $block_device_mappings ?? [];
    $this->classic_link_vpc_id = $classic_link_vpc_id ?? "";
    $this->classic_link_vpc_security_groups = $classic_link_vpc_security_groups ?? [];
    $this->created_time = $created_time ?? 0;
    $this->ebs_optimized = $ebs_optimized ?? false;
    $this->iam_instance_profile = $iam_instance_profile ?? "";
    $this->image_id = $image_id ?? "";
    $this->instance_monitoring = $instance_monitoring ?? null;
    $this->instance_type = $instance_type ?? "";
    $this->kernel_id = $kernel_id ?? "";
    $this->key_name = $key_name ?? "";
    $this->launch_configuration_arn = $launch_configuration_arn ?? "";
    $this->launch_configuration_name = $launch_configuration_name ?? "";
    $this->placement_tenancy = $placement_tenancy ?? "";
    $this->ramdisk_id = $ramdisk_id ?? "";
    $this->security_groups = $security_groups ?? [];
    $this->spot_price = $spot_price ?? "";
    $this->user_data = $user_data ?? "";
  }
}

class LaunchConfigurationNameType {
  public ResourceName $launch_configuration_name;

  public function __construct(shape(
  ?'launch_configuration_name' => ResourceName,
  ) $s = shape()) {
    $this->launch_configuration_name = $launch_configuration_name ?? "";
  }
}

type LaunchConfigurationNames = vec<ResourceName>;

class LaunchConfigurationNamesType {
  public LaunchConfigurationNames $launch_configuration_names;
  public MaxRecords $max_records;
  public XmlString $next_token;

  public function __construct(shape(
  ?'launch_configuration_names' => LaunchConfigurationNames,
  ?'max_records' => MaxRecords,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->launch_configuration_names = $launch_configuration_names ?? [];
    $this->max_records = $max_records ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

type LaunchConfigurations = vec<LaunchConfiguration>;

class LaunchConfigurationsType {
  public LaunchConfigurations $launch_configurations;
  public XmlString $next_token;

  public function __construct(shape(
  ?'launch_configurations' => LaunchConfigurations,
  ?'next_token' => XmlString,
  ) $s = shape()) {
    $this->launch_configurations = $launch_configurations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class LaunchTemplate {
  public LaunchTemplateSpecification $launch_template_specification;
  public Overrides $overrides;

  public function __construct(shape(
  ?'launch_template_specification' => LaunchTemplateSpecification,
  ?'overrides' => Overrides,
  ) $s = shape()) {
    $this->launch_template_specification = $launch_template_specification ?? null;
    $this->overrides = $overrides ?? [];
  }
}

type LaunchTemplateName = string;

class LaunchTemplateOverrides {
  public XmlStringMaxLen255 $instance_type;
  public XmlStringMaxLen32 $weighted_capacity;

  public function __construct(shape(
  ?'instance_type' => XmlStringMaxLen255,
  ?'weighted_capacity' => XmlStringMaxLen32,
  ) $s = shape()) {
    $this->instance_type = $instance_type ?? "";
    $this->weighted_capacity = $weighted_capacity ?? "";
  }
}

class LaunchTemplateSpecification {
  public XmlStringMaxLen255 $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public XmlStringMaxLen255 $version;

  public function __construct(shape(
  ?'launch_template_id' => XmlStringMaxLen255,
  ?'launch_template_name' => LaunchTemplateName,
  ?'version' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->launch_template_id = $launch_template_id ?? "";
    $this->launch_template_name = $launch_template_name ?? "";
    $this->version = $version ?? "";
  }
}

type LifecycleActionResult = string;

type LifecycleActionToken = string;

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

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'default_result' => LifecycleActionResult,
  ?'global_timeout' => GlobalTimeout,
  ?'heartbeat_timeout' => HeartbeatTimeout,
  ?'lifecycle_hook_name' => AsciiStringMaxLen255,
  ?'lifecycle_transition' => LifecycleTransition,
  ?'notification_metadata' => XmlStringMaxLen1023,
  ?'notification_target_arn' => ResourceName,
  ?'role_arn' => ResourceName,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->default_result = $default_result ?? "";
    $this->global_timeout = $global_timeout ?? 0;
    $this->heartbeat_timeout = $heartbeat_timeout ?? 0;
    $this->lifecycle_hook_name = $lifecycle_hook_name ?? "";
    $this->lifecycle_transition = $lifecycle_transition ?? "";
    $this->notification_metadata = $notification_metadata ?? "";
    $this->notification_target_arn = $notification_target_arn ?? "";
    $this->role_arn = $role_arn ?? "";
  }
}

type LifecycleHookNames = vec<AsciiStringMaxLen255>;

class LifecycleHookSpecification {
  public LifecycleActionResult $default_result;
  public HeartbeatTimeout $heartbeat_timeout;
  public AsciiStringMaxLen255 $lifecycle_hook_name;
  public LifecycleTransition $lifecycle_transition;
  public XmlStringMaxLen1023 $notification_metadata;
  public NotificationTargetResourceName $notification_target_arn;
  public ResourceName $role_arn;

  public function __construct(shape(
  ?'default_result' => LifecycleActionResult,
  ?'heartbeat_timeout' => HeartbeatTimeout,
  ?'lifecycle_hook_name' => AsciiStringMaxLen255,
  ?'lifecycle_transition' => LifecycleTransition,
  ?'notification_metadata' => XmlStringMaxLen1023,
  ?'notification_target_arn' => NotificationTargetResourceName,
  ?'role_arn' => ResourceName,
  ) $s = shape()) {
    $this->default_result = $default_result ?? "";
    $this->heartbeat_timeout = $heartbeat_timeout ?? 0;
    $this->lifecycle_hook_name = $lifecycle_hook_name ?? "";
    $this->lifecycle_transition = $lifecycle_transition ?? "";
    $this->notification_metadata = $notification_metadata ?? "";
    $this->notification_target_arn = $notification_target_arn ?? "";
    $this->role_arn = $role_arn ?? "";
  }
}

type LifecycleHookSpecifications = vec<LifecycleHookSpecification>;

type LifecycleHooks = vec<LifecycleHook>;

type LifecycleState = string;

type LifecycleTransition = string;

class LimitExceededFault {
  public XmlStringMaxLen255 $message;

  public function __construct(shape(
  ?'message' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LoadBalancerNames = vec<XmlStringMaxLen255>;

class LoadBalancerState {
  public XmlStringMaxLen255 $load_balancer_name;
  public XmlStringMaxLen255 $state;

  public function __construct(shape(
  ?'load_balancer_name' => XmlStringMaxLen255,
  ?'state' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->load_balancer_name = $load_balancer_name ?? "";
    $this->state = $state ?? "";
  }
}

type LoadBalancerStates = vec<LoadBalancerState>;

class LoadBalancerTargetGroupState {
  public XmlStringMaxLen511 $load_balancer_target_group_arn;
  public XmlStringMaxLen255 $state;

  public function __construct(shape(
  ?'load_balancer_target_group_arn' => XmlStringMaxLen511,
  ?'state' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->load_balancer_target_group_arn = $load_balancer_target_group_arn ?? "";
    $this->state = $state ?? "";
  }
}

type LoadBalancerTargetGroupStates = vec<LoadBalancerTargetGroupState>;

type MaxInstanceLifetime = int;

type MaxNumberOfAutoScalingGroups = int;

type MaxNumberOfLaunchConfigurations = int;

type MaxRecords = int;

class MetricCollectionType {
  public XmlStringMaxLen255 $metric;

  public function __construct(shape(
  ?'metric' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->metric = $metric ?? "";
  }
}

type MetricCollectionTypes = vec<MetricCollectionType>;

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

class MetricGranularityType {
  public XmlStringMaxLen255 $granularity;

  public function __construct(shape(
  ?'granularity' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->granularity = $granularity ?? "";
  }
}

type MetricGranularityTypes = vec<MetricGranularityType>;

type MetricName = string;

type MetricNamespace = string;

type MetricScale = float;

type MetricStatistic = string;

type MetricType = string;

type MetricUnit = string;

type Metrics = vec<XmlStringMaxLen255>;

type MinAdjustmentMagnitude = int;

type MinAdjustmentStep = int;

type MixedInstanceSpotPrice = string;

class MixedInstancesPolicy {
  public InstancesDistribution $instances_distribution;
  public LaunchTemplate $launch_template;

  public function __construct(shape(
  ?'instances_distribution' => InstancesDistribution,
  ?'launch_template' => LaunchTemplate,
  ) $s = shape()) {
    $this->instances_distribution = $instances_distribution ?? null;
    $this->launch_template = $launch_template ?? null;
  }
}

type MonitoringEnabled = bool;

type NoDevice = bool;

class NotificationConfiguration {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen255 $notification_type;
  public ResourceName $topic_arn;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'notification_type' => XmlStringMaxLen255,
  ?'topic_arn' => ResourceName,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->notification_type = $notification_type ?? "";
    $this->topic_arn = $topic_arn ?? "";
  }
}

type NotificationConfigurations = vec<NotificationConfiguration>;

type NotificationTargetResourceName = string;

type NumberOfAutoScalingGroups = int;

type NumberOfLaunchConfigurations = int;

type OnDemandBaseCapacity = int;

type OnDemandPercentageAboveBaseCapacity = int;

type Overrides = vec<LaunchTemplateOverrides>;

class PoliciesType {
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

class PolicyARNType {
  public Alarms $alarms;
  public ResourceName $policy_arn;

  public function __construct(shape(
  ?'alarms' => Alarms,
  ?'policy_arn' => ResourceName,
  ) $s = shape()) {
    $this->alarms = $alarms ?? [];
    $this->policy_arn = $policy_arn ?? "";
  }
}

type PolicyIncrement = int;

type PolicyNames = vec<ResourceName>;

type PolicyTypes = vec<XmlStringMaxLen64>;

class PredefinedMetricSpecification {
  public MetricType $predefined_metric_type;
  public XmlStringMaxLen1023 $resource_label;

  public function __construct(shape(
  ?'predefined_metric_type' => MetricType,
  ?'resource_label' => XmlStringMaxLen1023,
  ) $s = shape()) {
    $this->predefined_metric_type = $predefined_metric_type ?? "";
    $this->resource_label = $resource_label ?? "";
  }
}

type ProcessNames = vec<XmlStringMaxLen255>;

class ProcessType {
  public XmlStringMaxLen255 $process_name;

  public function __construct(shape(
  ?'process_name' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->process_name = $process_name ?? "";
  }
}

type Processes = vec<ProcessType>;

class ProcessesType {
  public Processes $processes;

  public function __construct(shape(
  ?'processes' => Processes,
  ) $s = shape()) {
    $this->processes = $processes ?? [];
  }
}

type Progress = int;

type PropagateAtLaunch = bool;

type ProtectedFromScaleIn = bool;

class PutLifecycleHookAnswer {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'default_result' => LifecycleActionResult,
  ?'heartbeat_timeout' => HeartbeatTimeout,
  ?'lifecycle_hook_name' => AsciiStringMaxLen255,
  ?'lifecycle_transition' => LifecycleTransition,
  ?'notification_metadata' => XmlStringMaxLen1023,
  ?'notification_target_arn' => NotificationTargetResourceName,
  ?'role_arn' => ResourceName,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->default_result = $default_result ?? "";
    $this->heartbeat_timeout = $heartbeat_timeout ?? 0;
    $this->lifecycle_hook_name = $lifecycle_hook_name ?? "";
    $this->lifecycle_transition = $lifecycle_transition ?? "";
    $this->notification_metadata = $notification_metadata ?? "";
    $this->notification_target_arn = $notification_target_arn ?? "";
    $this->role_arn = $role_arn ?? "";
  }
}

class PutNotificationConfigurationType {
  public ResourceName $auto_scaling_group_name;
  public AutoScalingNotificationTypes $notification_types;
  public ResourceName $topic_arn;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'notification_types' => AutoScalingNotificationTypes,
  ?'topic_arn' => ResourceName,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->notification_types = $notification_types ?? [];
    $this->topic_arn = $topic_arn ?? "";
  }
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

  public function __construct(shape(
  ?'adjustment_type' => XmlStringMaxLen255,
  ?'auto_scaling_group_name' => ResourceName,
  ?'cooldown' => Cooldown,
  ?'enabled' => ScalingPolicyEnabled,
  ?'estimated_instance_warmup' => EstimatedInstanceWarmup,
  ?'metric_aggregation_type' => XmlStringMaxLen32,
  ?'min_adjustment_magnitude' => MinAdjustmentMagnitude,
  ?'min_adjustment_step' => MinAdjustmentStep,
  ?'policy_name' => XmlStringMaxLen255,
  ?'policy_type' => XmlStringMaxLen64,
  ?'scaling_adjustment' => PolicyIncrement,
  ?'step_adjustments' => StepAdjustments,
  ?'target_tracking_configuration' => TargetTrackingConfiguration,
  ) $s = shape()) {
    $this->adjustment_type = $adjustment_type ?? "";
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->cooldown = $cooldown ?? 0;
    $this->enabled = $enabled ?? false;
    $this->estimated_instance_warmup = $estimated_instance_warmup ?? 0;
    $this->metric_aggregation_type = $metric_aggregation_type ?? "";
    $this->min_adjustment_magnitude = $min_adjustment_magnitude ?? 0;
    $this->min_adjustment_step = $min_adjustment_step ?? 0;
    $this->policy_name = $policy_name ?? "";
    $this->policy_type = $policy_type ?? "";
    $this->scaling_adjustment = $scaling_adjustment ?? 0;
    $this->step_adjustments = $step_adjustments ?? [];
    $this->target_tracking_configuration = $target_tracking_configuration ?? null;
  }
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

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'desired_capacity' => AutoScalingGroupDesiredCapacity,
  ?'end_time' => TimestampType,
  ?'max_size' => AutoScalingGroupMaxSize,
  ?'min_size' => AutoScalingGroupMinSize,
  ?'recurrence' => XmlStringMaxLen255,
  ?'scheduled_action_name' => XmlStringMaxLen255,
  ?'start_time' => TimestampType,
  ?'time' => TimestampType,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->desired_capacity = $desired_capacity ?? 0;
    $this->end_time = $end_time ?? 0;
    $this->max_size = $max_size ?? 0;
    $this->min_size = $min_size ?? 0;
    $this->recurrence = $recurrence ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->start_time = $start_time ?? 0;
    $this->time = $time ?? 0;
  }
}

class RecordLifecycleActionHeartbeatAnswer {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RecordLifecycleActionHeartbeatType {
  public ResourceName $auto_scaling_group_name;
  public XmlStringMaxLen19 $instance_id;
  public LifecycleActionToken $lifecycle_action_token;
  public AsciiStringMaxLen255 $lifecycle_hook_name;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'instance_id' => XmlStringMaxLen19,
  ?'lifecycle_action_token' => LifecycleActionToken,
  ?'lifecycle_hook_name' => AsciiStringMaxLen255,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->lifecycle_action_token = $lifecycle_action_token ?? "";
    $this->lifecycle_hook_name = $lifecycle_hook_name ?? "";
  }
}

class ResourceContentionFault {
  public XmlStringMaxLen255 $message;

  public function __construct(shape(
  ?'message' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceInUseFault {
  public XmlStringMaxLen255 $message;

  public function __construct(shape(
  ?'message' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceName = string;

class ScalingActivityInProgressFault {
  public XmlStringMaxLen255 $message;

  public function __construct(shape(
  ?'message' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ScalingActivityStatusCode = string;

type ScalingPolicies = vec<ScalingPolicy>;

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

  public function __construct(shape(
  ?'adjustment_type' => XmlStringMaxLen255,
  ?'alarms' => Alarms,
  ?'auto_scaling_group_name' => XmlStringMaxLen255,
  ?'cooldown' => Cooldown,
  ?'enabled' => ScalingPolicyEnabled,
  ?'estimated_instance_warmup' => EstimatedInstanceWarmup,
  ?'metric_aggregation_type' => XmlStringMaxLen32,
  ?'min_adjustment_magnitude' => MinAdjustmentMagnitude,
  ?'min_adjustment_step' => MinAdjustmentStep,
  ?'policy_arn' => ResourceName,
  ?'policy_name' => XmlStringMaxLen255,
  ?'policy_type' => XmlStringMaxLen64,
  ?'scaling_adjustment' => PolicyIncrement,
  ?'step_adjustments' => StepAdjustments,
  ?'target_tracking_configuration' => TargetTrackingConfiguration,
  ) $s = shape()) {
    $this->adjustment_type = $adjustment_type ?? "";
    $this->alarms = $alarms ?? [];
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->cooldown = $cooldown ?? 0;
    $this->enabled = $enabled ?? false;
    $this->estimated_instance_warmup = $estimated_instance_warmup ?? 0;
    $this->metric_aggregation_type = $metric_aggregation_type ?? "";
    $this->min_adjustment_magnitude = $min_adjustment_magnitude ?? 0;
    $this->min_adjustment_step = $min_adjustment_step ?? 0;
    $this->policy_arn = $policy_arn ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->policy_type = $policy_type ?? "";
    $this->scaling_adjustment = $scaling_adjustment ?? 0;
    $this->step_adjustments = $step_adjustments ?? [];
    $this->target_tracking_configuration = $target_tracking_configuration ?? null;
  }
}

type ScalingPolicyEnabled = bool;

class ScalingProcessQuery {
  public ResourceName $auto_scaling_group_name;
  public ProcessNames $scaling_processes;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'scaling_processes' => ProcessNames,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->scaling_processes = $scaling_processes ?? [];
  }
}

type ScheduledActionNames = vec<ResourceName>;

class ScheduledActionsType {
  public XmlString $next_token;
  public ScheduledUpdateGroupActions $scheduled_update_group_actions;

  public function __construct(shape(
  ?'next_token' => XmlString,
  ?'scheduled_update_group_actions' => ScheduledUpdateGroupActions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->scheduled_update_group_actions = $scheduled_update_group_actions ?? [];
  }
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

  public function __construct(shape(
  ?'auto_scaling_group_name' => XmlStringMaxLen255,
  ?'desired_capacity' => AutoScalingGroupDesiredCapacity,
  ?'end_time' => TimestampType,
  ?'max_size' => AutoScalingGroupMaxSize,
  ?'min_size' => AutoScalingGroupMinSize,
  ?'recurrence' => XmlStringMaxLen255,
  ?'scheduled_action_arn' => ResourceName,
  ?'scheduled_action_name' => XmlStringMaxLen255,
  ?'start_time' => TimestampType,
  ?'time' => TimestampType,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->desired_capacity = $desired_capacity ?? 0;
    $this->end_time = $end_time ?? 0;
    $this->max_size = $max_size ?? 0;
    $this->min_size = $min_size ?? 0;
    $this->recurrence = $recurrence ?? "";
    $this->scheduled_action_arn = $scheduled_action_arn ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->start_time = $start_time ?? 0;
    $this->time = $time ?? 0;
  }
}

class ScheduledUpdateGroupActionRequest {
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public TimestampType $end_time;
  public AutoScalingGroupMaxSize $max_size;
  public AutoScalingGroupMinSize $min_size;
  public XmlStringMaxLen255 $recurrence;
  public XmlStringMaxLen255 $scheduled_action_name;
  public TimestampType $start_time;

  public function __construct(shape(
  ?'desired_capacity' => AutoScalingGroupDesiredCapacity,
  ?'end_time' => TimestampType,
  ?'max_size' => AutoScalingGroupMaxSize,
  ?'min_size' => AutoScalingGroupMinSize,
  ?'recurrence' => XmlStringMaxLen255,
  ?'scheduled_action_name' => XmlStringMaxLen255,
  ?'start_time' => TimestampType,
  ) $s = shape()) {
    $this->desired_capacity = $desired_capacity ?? 0;
    $this->end_time = $end_time ?? 0;
    $this->max_size = $max_size ?? 0;
    $this->min_size = $min_size ?? 0;
    $this->recurrence = $recurrence ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

type ScheduledUpdateGroupActionRequests = vec<ScheduledUpdateGroupActionRequest>;

type ScheduledUpdateGroupActions = vec<ScheduledUpdateGroupAction>;

type SecurityGroups = vec<XmlString>;

class ServiceLinkedRoleFailure {
  public XmlStringMaxLen255 $message;

  public function __construct(shape(
  ?'message' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SetDesiredCapacityType {
  public ResourceName $auto_scaling_group_name;
  public AutoScalingGroupDesiredCapacity $desired_capacity;
  public HonorCooldown $honor_cooldown;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'desired_capacity' => AutoScalingGroupDesiredCapacity,
  ?'honor_cooldown' => HonorCooldown,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->desired_capacity = $desired_capacity ?? 0;
    $this->honor_cooldown = $honor_cooldown ?? false;
  }
}

class SetInstanceHealthQuery {
  public XmlStringMaxLen32 $health_status;
  public XmlStringMaxLen19 $instance_id;
  public ShouldRespectGracePeriod $should_respect_grace_period;

  public function __construct(shape(
  ?'health_status' => XmlStringMaxLen32,
  ?'instance_id' => XmlStringMaxLen19,
  ?'should_respect_grace_period' => ShouldRespectGracePeriod,
  ) $s = shape()) {
    $this->health_status = $health_status ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->should_respect_grace_period = $should_respect_grace_period ?? false;
  }
}

class SetInstanceProtectionAnswer {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SetInstanceProtectionQuery {
  public ResourceName $auto_scaling_group_name;
  public InstanceIds $instance_ids;
  public ProtectedFromScaleIn $protected_from_scale_in;

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'instance_ids' => InstanceIds,
  ?'protected_from_scale_in' => ProtectedFromScaleIn,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->instance_ids = $instance_ids ?? [];
    $this->protected_from_scale_in = $protected_from_scale_in ?? false;
  }
}

type ShouldDecrementDesiredCapacity = bool;

type ShouldRespectGracePeriod = bool;

type SpotInstancePools = int;

type SpotPrice = string;

class StepAdjustment {
  public MetricScale $metric_interval_lower_bound;
  public MetricScale $metric_interval_upper_bound;
  public PolicyIncrement $scaling_adjustment;

  public function __construct(shape(
  ?'metric_interval_lower_bound' => MetricScale,
  ?'metric_interval_upper_bound' => MetricScale,
  ?'scaling_adjustment' => PolicyIncrement,
  ) $s = shape()) {
    $this->metric_interval_lower_bound = $metric_interval_lower_bound ?? 0.0;
    $this->metric_interval_upper_bound = $metric_interval_upper_bound ?? 0.0;
    $this->scaling_adjustment = $scaling_adjustment ?? 0;
  }
}

type StepAdjustments = vec<StepAdjustment>;

class SuspendedProcess {
  public XmlStringMaxLen255 $process_name;
  public XmlStringMaxLen255 $suspension_reason;

  public function __construct(shape(
  ?'process_name' => XmlStringMaxLen255,
  ?'suspension_reason' => XmlStringMaxLen255,
  ) $s = shape()) {
    $this->process_name = $process_name ?? "";
    $this->suspension_reason = $suspension_reason ?? "";
  }
}

type SuspendedProcesses = vec<SuspendedProcess>;

class Tag {
  public TagKey $key;
  public PropagateAtLaunch $propagate_at_launch;
  public XmlString $resource_id;
  public XmlString $resource_type;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'propagate_at_launch' => PropagateAtLaunch,
  ?'resource_id' => XmlString,
  ?'resource_type' => XmlString,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->propagate_at_launch = $propagate_at_launch ?? false;
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->value = $value ?? "";
  }
}

class TagDescription {
  public TagKey $key;
  public PropagateAtLaunch $propagate_at_launch;
  public XmlString $resource_id;
  public XmlString $resource_type;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'propagate_at_launch' => PropagateAtLaunch,
  ?'resource_id' => XmlString,
  ?'resource_type' => XmlString,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->propagate_at_launch = $propagate_at_launch ?? false;
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->value = $value ?? "";
  }
}

type TagDescriptionList = vec<TagDescription>;

type TagKey = string;

type TagValue = string;

type Tags = vec<Tag>;

class TagsType {
  public XmlString $next_token;
  public TagDescriptionList $tags;

  public function __construct(shape(
  ?'next_token' => XmlString,
  ?'tags' => TagDescriptionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

type TargetGroupARNs = vec<XmlStringMaxLen511>;

class TargetTrackingConfiguration {
  public CustomizedMetricSpecification $customized_metric_specification;
  public DisableScaleIn $disable_scale_in;
  public PredefinedMetricSpecification $predefined_metric_specification;
  public MetricScale $target_value;

  public function __construct(shape(
  ?'customized_metric_specification' => CustomizedMetricSpecification,
  ?'disable_scale_in' => DisableScaleIn,
  ?'predefined_metric_specification' => PredefinedMetricSpecification,
  ?'target_value' => MetricScale,
  ) $s = shape()) {
    $this->customized_metric_specification = $customized_metric_specification ?? null;
    $this->disable_scale_in = $disable_scale_in ?? false;
    $this->predefined_metric_specification = $predefined_metric_specification ?? null;
    $this->target_value = $target_value ?? 0.0;
  }
}

class TerminateInstanceInAutoScalingGroupType {
  public XmlStringMaxLen19 $instance_id;
  public ShouldDecrementDesiredCapacity $should_decrement_desired_capacity;

  public function __construct(shape(
  ?'instance_id' => XmlStringMaxLen19,
  ?'should_decrement_desired_capacity' => ShouldDecrementDesiredCapacity,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->should_decrement_desired_capacity = $should_decrement_desired_capacity ?? false;
  }
}

type TerminationPolicies = vec<XmlStringMaxLen1600>;

type TimestampType = int;

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

  public function __construct(shape(
  ?'auto_scaling_group_name' => ResourceName,
  ?'availability_zones' => AvailabilityZones,
  ?'default_cooldown' => Cooldown,
  ?'desired_capacity' => AutoScalingGroupDesiredCapacity,
  ?'health_check_grace_period' => HealthCheckGracePeriod,
  ?'health_check_type' => XmlStringMaxLen32,
  ?'launch_configuration_name' => ResourceName,
  ?'launch_template' => LaunchTemplateSpecification,
  ?'max_instance_lifetime' => MaxInstanceLifetime,
  ?'max_size' => AutoScalingGroupMaxSize,
  ?'min_size' => AutoScalingGroupMinSize,
  ?'mixed_instances_policy' => MixedInstancesPolicy,
  ?'new_instances_protected_from_scale_in' => InstanceProtected,
  ?'placement_group' => XmlStringMaxLen255,
  ?'service_linked_role_arn' => ResourceName,
  ?'termination_policies' => TerminationPolicies,
  ?'vpc_zone_identifier' => XmlStringMaxLen2047,
  ) $s = shape()) {
    $this->auto_scaling_group_name = $auto_scaling_group_name ?? "";
    $this->availability_zones = $availability_zones ?? [];
    $this->default_cooldown = $default_cooldown ?? 0;
    $this->desired_capacity = $desired_capacity ?? 0;
    $this->health_check_grace_period = $health_check_grace_period ?? 0;
    $this->health_check_type = $health_check_type ?? "";
    $this->launch_configuration_name = $launch_configuration_name ?? "";
    $this->launch_template = $launch_template ?? null;
    $this->max_instance_lifetime = $max_instance_lifetime ?? 0;
    $this->max_size = $max_size ?? 0;
    $this->min_size = $min_size ?? 0;
    $this->mixed_instances_policy = $mixed_instances_policy ?? null;
    $this->new_instances_protected_from_scale_in = $new_instances_protected_from_scale_in ?? false;
    $this->placement_group = $placement_group ?? "";
    $this->service_linked_role_arn = $service_linked_role_arn ?? "";
    $this->termination_policies = $termination_policies ?? [];
    $this->vpc_zone_identifier = $vpc_zone_identifier ?? "";
  }
}

type Values = vec<XmlString>;

type XmlString = string;

type XmlStringMaxLen1023 = string;

type XmlStringMaxLen1600 = string;

type XmlStringMaxLen19 = string;

type XmlStringMaxLen2047 = string;

type XmlStringMaxLen255 = string;

type XmlStringMaxLen32 = string;

type XmlStringMaxLen511 = string;

type XmlStringMaxLen64 = string;

type XmlStringUserData = string;

