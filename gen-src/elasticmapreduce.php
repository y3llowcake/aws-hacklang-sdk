<?hh // strict
namespace slack\aws\elasticmapreduce;

interface EMR {
  public function AddInstanceFleet(AddInstanceFleetInput): Awaitable<Errors\Result<AddInstanceFleetOutput>>;
  public function AddInstanceGroups(AddInstanceGroupsInput): Awaitable<Errors\Result<AddInstanceGroupsOutput>>;
  public function AddJobFlowSteps(AddJobFlowStepsInput): Awaitable<Errors\Result<AddJobFlowStepsOutput>>;
  public function AddTags(AddTagsInput): Awaitable<Errors\Result<AddTagsOutput>>;
  public function CancelSteps(CancelStepsInput): Awaitable<Errors\Result<CancelStepsOutput>>;
  public function CreateSecurityConfiguration(CreateSecurityConfigurationInput): Awaitable<Errors\Result<CreateSecurityConfigurationOutput>>;
  public function DeleteSecurityConfiguration(DeleteSecurityConfigurationInput): Awaitable<Errors\Result<DeleteSecurityConfigurationOutput>>;
  public function DescribeCluster(DescribeClusterInput): Awaitable<Errors\Result<DescribeClusterOutput>>;
  public function DescribeJobFlows(DescribeJobFlowsInput): Awaitable<Errors\Result<DescribeJobFlowsOutput>>;
  public function DescribeSecurityConfiguration(DescribeSecurityConfigurationInput): Awaitable<Errors\Result<DescribeSecurityConfigurationOutput>>;
  public function DescribeStep(DescribeStepInput): Awaitable<Errors\Result<DescribeStepOutput>>;
  public function GetBlockPublicAccessConfiguration(GetBlockPublicAccessConfigurationInput): Awaitable<Errors\Result<GetBlockPublicAccessConfigurationOutput>>;
  public function GetManagedScalingPolicy(GetManagedScalingPolicyInput): Awaitable<Errors\Result<GetManagedScalingPolicyOutput>>;
  public function ListBootstrapActions(ListBootstrapActionsInput): Awaitable<Errors\Result<ListBootstrapActionsOutput>>;
  public function ListClusters(ListClustersInput): Awaitable<Errors\Result<ListClustersOutput>>;
  public function ListInstanceFleets(ListInstanceFleetsInput): Awaitable<Errors\Result<ListInstanceFleetsOutput>>;
  public function ListInstanceGroups(ListInstanceGroupsInput): Awaitable<Errors\Result<ListInstanceGroupsOutput>>;
  public function ListInstances(ListInstancesInput): Awaitable<Errors\Result<ListInstancesOutput>>;
  public function ListSecurityConfigurations(ListSecurityConfigurationsInput): Awaitable<Errors\Result<ListSecurityConfigurationsOutput>>;
  public function ListSteps(ListStepsInput): Awaitable<Errors\Result<ListStepsOutput>>;
  public function ModifyCluster(ModifyClusterInput): Awaitable<Errors\Result<ModifyClusterOutput>>;
  public function ModifyInstanceFleet(ModifyInstanceFleetInput): Awaitable<Errors\Error>;
  public function ModifyInstanceGroups(ModifyInstanceGroupsInput): Awaitable<Errors\Error>;
  public function PutAutoScalingPolicy(PutAutoScalingPolicyInput): Awaitable<Errors\Result<PutAutoScalingPolicyOutput>>;
  public function PutBlockPublicAccessConfiguration(PutBlockPublicAccessConfigurationInput): Awaitable<Errors\Result<PutBlockPublicAccessConfigurationOutput>>;
  public function PutManagedScalingPolicy(PutManagedScalingPolicyInput): Awaitable<Errors\Result<PutManagedScalingPolicyOutput>>;
  public function RemoveAutoScalingPolicy(RemoveAutoScalingPolicyInput): Awaitable<Errors\Result<RemoveAutoScalingPolicyOutput>>;
  public function RemoveManagedScalingPolicy(RemoveManagedScalingPolicyInput): Awaitable<Errors\Result<RemoveManagedScalingPolicyOutput>>;
  public function RemoveTags(RemoveTagsInput): Awaitable<Errors\Result<RemoveTagsOutput>>;
  public function RunJobFlow(RunJobFlowInput): Awaitable<Errors\Result<RunJobFlowOutput>>;
  public function SetTerminationProtection(SetTerminationProtectionInput): Awaitable<Errors\Error>;
  public function SetVisibleToAllUsers(SetVisibleToAllUsersInput): Awaitable<Errors\Error>;
  public function TerminateJobFlows(TerminateJobFlowsInput): Awaitable<Errors\Error>;
}

type ActionOnFailure = string;

class AddInstanceFleetInput {
  public XmlStringMaxLen256 $cluster_id;
  public InstanceFleetConfig $instance_fleet;

  public function __construct(shape(
  ?'cluster_id' => XmlStringMaxLen256,
  ?'instance_fleet' => InstanceFleetConfig,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->instance_fleet = $instance_fleet ?? null;
  }
}

class AddInstanceFleetOutput {
  public ArnType $cluster_arn;
  public XmlStringMaxLen256 $cluster_id;
  public InstanceFleetId $instance_fleet_id;

  public function __construct(shape(
  ?'cluster_arn' => ArnType,
  ?'cluster_id' => XmlStringMaxLen256,
  ?'instance_fleet_id' => InstanceFleetId,
  ) $s = shape()) {
    $this->cluster_arn = $cluster_arn ?? "";
    $this->cluster_id = $cluster_id ?? "";
    $this->instance_fleet_id = $instance_fleet_id ?? "";
  }
}

class AddInstanceGroupsInput {
  public InstanceGroupConfigList $instance_groups;
  public XmlStringMaxLen256 $job_flow_id;

  public function __construct(shape(
  ?'instance_groups' => InstanceGroupConfigList,
  ?'job_flow_id' => XmlStringMaxLen256,
  ) $s = shape()) {
    $this->instance_groups = $instance_groups ?? [];
    $this->job_flow_id = $job_flow_id ?? "";
  }
}

class AddInstanceGroupsOutput {
  public ArnType $cluster_arn;
  public InstanceGroupIdsList $instance_group_ids;
  public XmlStringMaxLen256 $job_flow_id;

  public function __construct(shape(
  ?'cluster_arn' => ArnType,
  ?'instance_group_ids' => InstanceGroupIdsList,
  ?'job_flow_id' => XmlStringMaxLen256,
  ) $s = shape()) {
    $this->cluster_arn = $cluster_arn ?? "";
    $this->instance_group_ids = $instance_group_ids ?? [];
    $this->job_flow_id = $job_flow_id ?? "";
  }
}

class AddJobFlowStepsInput {
  public XmlStringMaxLen256 $job_flow_id;
  public StepConfigList $steps;

  public function __construct(shape(
  ?'job_flow_id' => XmlStringMaxLen256,
  ?'steps' => StepConfigList,
  ) $s = shape()) {
    $this->job_flow_id = $job_flow_id ?? "";
    $this->steps = $steps ?? [];
  }
}

class AddJobFlowStepsOutput {
  public StepIdsList $step_ids;

  public function __construct(shape(
  ?'step_ids' => StepIdsList,
  ) $s = shape()) {
    $this->step_ids = $step_ids ?? [];
  }
}

class AddTagsInput {
  public ResourceId $resource_id;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->tags = $tags ?? [];
  }
}

class AddTagsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AdjustmentType = string;

class Application {
  public StringMap $additional_info;
  public StringList $args;
  public string $name;
  public string $version;

  public function __construct(shape(
  ?'additional_info' => StringMap,
  ?'args' => StringList,
  ?'name' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->additional_info = $additional_info ?? [];
    $this->args = $args ?? [];
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

type ApplicationList = vec<Application>;

type ArnType = string;

class AutoScalingPolicy {
  public ScalingConstraints $constraints;
  public ScalingRuleList $rules;

  public function __construct(shape(
  ?'constraints' => ScalingConstraints,
  ?'rules' => ScalingRuleList,
  ) $s = shape()) {
    $this->constraints = $constraints ?? null;
    $this->rules = $rules ?? [];
  }
}

class AutoScalingPolicyDescription {
  public ScalingConstraints $constraints;
  public ScalingRuleList $rules;
  public AutoScalingPolicyStatus $status;

  public function __construct(shape(
  ?'constraints' => ScalingConstraints,
  ?'rules' => ScalingRuleList,
  ?'status' => AutoScalingPolicyStatus,
  ) $s = shape()) {
    $this->constraints = $constraints ?? null;
    $this->rules = $rules ?? [];
    $this->status = $status ?? null;
  }
}

type AutoScalingPolicyState = string;

class AutoScalingPolicyStateChangeReason {
  public AutoScalingPolicyStateChangeReasonCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => AutoScalingPolicyStateChangeReasonCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type AutoScalingPolicyStateChangeReasonCode = string;

class AutoScalingPolicyStatus {
  public AutoScalingPolicyState $state;
  public AutoScalingPolicyStateChangeReason $state_change_reason;

  public function __construct(shape(
  ?'state' => AutoScalingPolicyState,
  ?'state_change_reason' => AutoScalingPolicyStateChangeReason,
  ) $s = shape()) {
    $this->state = $state ?? "";
    $this->state_change_reason = $state_change_reason ?? null;
  }
}

class BlockPublicAccessConfiguration {
  public boolean $block_public_security_group_rules;
  public PortRanges $permitted_public_security_group_rule_ranges;

  public function __construct(shape(
  ?'block_public_security_group_rules' => boolean,
  ?'permitted_public_security_group_rule_ranges' => PortRanges,
  ) $s = shape()) {
    $this->block_public_security_group_rules = $block_public_security_group_rules ?? false;
    $this->permitted_public_security_group_rule_ranges = $permitted_public_security_group_rule_ranges ?? [];
  }
}

class BlockPublicAccessConfigurationMetadata {
  public ArnType $created_by_arn;
  public Date $creation_date_time;

  public function __construct(shape(
  ?'created_by_arn' => ArnType,
  ?'creation_date_time' => Date,
  ) $s = shape()) {
    $this->created_by_arn = $created_by_arn ?? "";
    $this->creation_date_time = $creation_date_time ?? 0;
  }
}

type Boolean = bool;

type BooleanObject = bool;

class BootstrapActionConfig {
  public XmlStringMaxLen256 $name;
  public ScriptBootstrapActionConfig $script_bootstrap_action;

  public function __construct(shape(
  ?'name' => XmlStringMaxLen256,
  ?'script_bootstrap_action' => ScriptBootstrapActionConfig,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->script_bootstrap_action = $script_bootstrap_action ?? null;
  }
}

type BootstrapActionConfigList = vec<BootstrapActionConfig>;

class BootstrapActionDetail {
  public BootstrapActionConfig $bootstrap_action_config;

  public function __construct(shape(
  ?'bootstrap_action_config' => BootstrapActionConfig,
  ) $s = shape()) {
    $this->bootstrap_action_config = $bootstrap_action_config ?? null;
  }
}

type BootstrapActionDetailList = vec<BootstrapActionDetail>;

class CancelStepsInfo {
  public string $reason;
  public CancelStepsRequestStatus $status;
  public StepId $step_id;

  public function __construct(shape(
  ?'reason' => string,
  ?'status' => CancelStepsRequestStatus,
  ?'step_id' => StepId,
  ) $s = shape()) {
    $this->reason = $reason ?? "";
    $this->status = $status ?? "";
    $this->step_id = $step_id ?? "";
  }
}

type CancelStepsInfoList = vec<CancelStepsInfo>;

class CancelStepsInput {
  public XmlStringMaxLen256 $cluster_id;
  public StepCancellationOption $step_cancellation_option;
  public StepIdsList $step_ids;

  public function __construct(shape(
  ?'cluster_id' => XmlStringMaxLen256,
  ?'step_cancellation_option' => StepCancellationOption,
  ?'step_ids' => StepIdsList,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->step_cancellation_option = $step_cancellation_option ?? "";
    $this->step_ids = $step_ids ?? [];
  }
}

class CancelStepsOutput {
  public CancelStepsInfoList $cancel_steps_info_list;

  public function __construct(shape(
  ?'cancel_steps_info_list' => CancelStepsInfoList,
  ) $s = shape()) {
    $this->cancel_steps_info_list = $cancel_steps_info_list ?? [];
  }
}

type CancelStepsRequestStatus = string;

class CloudWatchAlarmDefinition {
  public ComparisonOperator $comparison_operator;
  public MetricDimensionList $dimensions;
  public int $evaluation_periods;
  public string $metric_name;
  public string $namespace;
  public int $period;
  public Statistic $statistic;
  public NonNegativeDouble $threshold;
  public Unit $unit;

  public function __construct(shape(
  ?'comparison_operator' => ComparisonOperator,
  ?'dimensions' => MetricDimensionList,
  ?'evaluation_periods' => int,
  ?'metric_name' => string,
  ?'namespace' => string,
  ?'period' => int,
  ?'statistic' => Statistic,
  ?'threshold' => NonNegativeDouble,
  ?'unit' => Unit,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? "";
    $this->dimensions = $dimensions ?? [];
    $this->evaluation_periods = $evaluation_periods ?? 0;
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->period = $period ?? 0;
    $this->statistic = $statistic ?? "";
    $this->threshold = $threshold ?? 0.0;
    $this->unit = $unit ?? "";
  }
}

class Cluster {
  public ApplicationList $applications;
  public XmlString $auto_scaling_role;
  public boolean $auto_terminate;
  public ArnType $cluster_arn;
  public ConfigurationList $configurations;
  public XmlStringMaxLen256 $custom_ami_id;
  public int $ebs_root_volume_size;
  public Ec2InstanceAttributes $ec_2_instance_attributes;
  public ClusterId $id;
  public InstanceCollectionType $instance_collection_type;
  public KerberosAttributes $kerberos_attributes;
  public string $log_uri;
  public string $master_public_dns_name;
  public string $name;
  public int $normalized_instance_hours;
  public OptionalArnType $outpost_arn;
  public string $release_label;
  public RepoUpgradeOnBoot $repo_upgrade_on_boot;
  public string $requested_ami_version;
  public string $running_ami_version;
  public ScaleDownBehavior $scale_down_behavior;
  public XmlString $security_configuration;
  public string $service_role;
  public ClusterStatus $status;
  public int $step_concurrency_level;
  public TagList $tags;
  public boolean $termination_protected;
  public boolean $visible_to_all_users;

  public function __construct(shape(
  ?'applications' => ApplicationList,
  ?'auto_scaling_role' => XmlString,
  ?'auto_terminate' => boolean,
  ?'cluster_arn' => ArnType,
  ?'configurations' => ConfigurationList,
  ?'custom_ami_id' => XmlStringMaxLen256,
  ?'ebs_root_volume_size' => int,
  ?'ec_2_instance_attributes' => Ec2InstanceAttributes,
  ?'id' => ClusterId,
  ?'instance_collection_type' => InstanceCollectionType,
  ?'kerberos_attributes' => KerberosAttributes,
  ?'log_uri' => string,
  ?'master_public_dns_name' => string,
  ?'name' => string,
  ?'normalized_instance_hours' => int,
  ?'outpost_arn' => OptionalArnType,
  ?'release_label' => string,
  ?'repo_upgrade_on_boot' => RepoUpgradeOnBoot,
  ?'requested_ami_version' => string,
  ?'running_ami_version' => string,
  ?'scale_down_behavior' => ScaleDownBehavior,
  ?'security_configuration' => XmlString,
  ?'service_role' => string,
  ?'status' => ClusterStatus,
  ?'step_concurrency_level' => int,
  ?'tags' => TagList,
  ?'termination_protected' => boolean,
  ?'visible_to_all_users' => boolean,
  ) $s = shape()) {
    $this->applications = $applications ?? [];
    $this->auto_scaling_role = $auto_scaling_role ?? "";
    $this->auto_terminate = $auto_terminate ?? false;
    $this->cluster_arn = $cluster_arn ?? "";
    $this->configurations = $configurations ?? [];
    $this->custom_ami_id = $custom_ami_id ?? "";
    $this->ebs_root_volume_size = $ebs_root_volume_size ?? 0;
    $this->ec_2_instance_attributes = $ec_2_instance_attributes ?? null;
    $this->id = $id ?? "";
    $this->instance_collection_type = $instance_collection_type ?? "";
    $this->kerberos_attributes = $kerberos_attributes ?? null;
    $this->log_uri = $log_uri ?? "";
    $this->master_public_dns_name = $master_public_dns_name ?? "";
    $this->name = $name ?? "";
    $this->normalized_instance_hours = $normalized_instance_hours ?? 0;
    $this->outpost_arn = $outpost_arn ?? "";
    $this->release_label = $release_label ?? "";
    $this->repo_upgrade_on_boot = $repo_upgrade_on_boot ?? "";
    $this->requested_ami_version = $requested_ami_version ?? "";
    $this->running_ami_version = $running_ami_version ?? "";
    $this->scale_down_behavior = $scale_down_behavior ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->service_role = $service_role ?? "";
    $this->status = $status ?? null;
    $this->step_concurrency_level = $step_concurrency_level ?? 0;
    $this->tags = $tags ?? [];
    $this->termination_protected = $termination_protected ?? false;
    $this->visible_to_all_users = $visible_to_all_users ?? false;
  }
}

type ClusterId = string;

type ClusterState = string;

class ClusterStateChangeReason {
  public ClusterStateChangeReasonCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ClusterStateChangeReasonCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type ClusterStateChangeReasonCode = string;

type ClusterStateList = vec<ClusterState>;

class ClusterStatus {
  public ClusterState $state;
  public ClusterStateChangeReason $state_change_reason;
  public ClusterTimeline $timeline;

  public function __construct(shape(
  ?'state' => ClusterState,
  ?'state_change_reason' => ClusterStateChangeReason,
  ?'timeline' => ClusterTimeline,
  ) $s = shape()) {
    $this->state = $state ?? "";
    $this->state_change_reason = $state_change_reason ?? null;
    $this->timeline = $timeline ?? null;
  }
}

class ClusterSummary {
  public ArnType $cluster_arn;
  public ClusterId $id;
  public string $name;
  public int $normalized_instance_hours;
  public OptionalArnType $outpost_arn;
  public ClusterStatus $status;

  public function __construct(shape(
  ?'cluster_arn' => ArnType,
  ?'id' => ClusterId,
  ?'name' => string,
  ?'normalized_instance_hours' => int,
  ?'outpost_arn' => OptionalArnType,
  ?'status' => ClusterStatus,
  ) $s = shape()) {
    $this->cluster_arn = $cluster_arn ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->normalized_instance_hours = $normalized_instance_hours ?? 0;
    $this->outpost_arn = $outpost_arn ?? "";
    $this->status = $status ?? null;
  }
}

type ClusterSummaryList = vec<ClusterSummary>;

class ClusterTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $ready_date_time;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'end_date_time' => Date,
  ?'ready_date_time' => Date,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->end_date_time = $end_date_time ?? 0;
    $this->ready_date_time = $ready_date_time ?? 0;
  }
}

class Command {
  public StringList $args;
  public string $name;
  public string $script_path;

  public function __construct(shape(
  ?'args' => StringList,
  ?'name' => string,
  ?'script_path' => string,
  ) $s = shape()) {
    $this->args = $args ?? [];
    $this->name = $name ?? "";
    $this->script_path = $script_path ?? "";
  }
}

type CommandList = vec<Command>;

type ComparisonOperator = string;

class ComputeLimits {
  public int $maximum_capacity_units;
  public int $maximum_on_demand_capacity_units;
  public int $minimum_capacity_units;
  public ComputeLimitsUnitType $unit_type;

  public function __construct(shape(
  ?'maximum_capacity_units' => int,
  ?'maximum_on_demand_capacity_units' => int,
  ?'minimum_capacity_units' => int,
  ?'unit_type' => ComputeLimitsUnitType,
  ) $s = shape()) {
    $this->maximum_capacity_units = $maximum_capacity_units ?? 0;
    $this->maximum_on_demand_capacity_units = $maximum_on_demand_capacity_units ?? 0;
    $this->minimum_capacity_units = $minimum_capacity_units ?? 0;
    $this->unit_type = $unit_type ?? "";
  }
}

type ComputeLimitsUnitType = string;

class Configuration {
  public string $classification;
  public ConfigurationList $configurations;
  public StringMap $properties;

  public function __construct(shape(
  ?'classification' => string,
  ?'configurations' => ConfigurationList,
  ?'properties' => StringMap,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->configurations = $configurations ?? [];
    $this->properties = $properties ?? [];
  }
}

type ConfigurationList = vec<Configuration>;

class CreateSecurityConfigurationInput {
  public XmlString $name;
  public string $security_configuration;

  public function __construct(shape(
  ?'name' => XmlString,
  ?'security_configuration' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->security_configuration = $security_configuration ?? "";
  }
}

class CreateSecurityConfigurationOutput {
  public Date $creation_date_time;
  public XmlString $name;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'name' => XmlString,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->name = $name ?? "";
  }
}

type Date = int;

class DeleteSecurityConfigurationInput {
  public XmlString $name;

  public function __construct(shape(
  ?'name' => XmlString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteSecurityConfigurationOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeClusterInput {
  public ClusterId $cluster_id;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
  }
}

class DescribeClusterOutput {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class DescribeJobFlowsInput {
  public Date $created_after;
  public Date $created_before;
  public XmlStringList $job_flow_ids;
  public JobFlowExecutionStateList $job_flow_states;

  public function __construct(shape(
  ?'created_after' => Date,
  ?'created_before' => Date,
  ?'job_flow_ids' => XmlStringList,
  ?'job_flow_states' => JobFlowExecutionStateList,
  ) $s = shape()) {
    $this->created_after = $created_after ?? 0;
    $this->created_before = $created_before ?? 0;
    $this->job_flow_ids = $job_flow_ids ?? [];
    $this->job_flow_states = $job_flow_states ?? [];
  }
}

class DescribeJobFlowsOutput {
  public JobFlowDetailList $job_flows;

  public function __construct(shape(
  ?'job_flows' => JobFlowDetailList,
  ) $s = shape()) {
    $this->job_flows = $job_flows ?? [];
  }
}

class DescribeSecurityConfigurationInput {
  public XmlString $name;

  public function __construct(shape(
  ?'name' => XmlString,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DescribeSecurityConfigurationOutput {
  public Date $creation_date_time;
  public XmlString $name;
  public string $security_configuration;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'name' => XmlString,
  ?'security_configuration' => string,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->name = $name ?? "";
    $this->security_configuration = $security_configuration ?? "";
  }
}

class DescribeStepInput {
  public ClusterId $cluster_id;
  public StepId $step_id;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'step_id' => StepId,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->step_id = $step_id ?? "";
  }
}

class DescribeStepOutput {
  public Step $step;

  public function __construct(shape(
  ?'step' => Step,
  ) $s = shape()) {
    $this->step = $step ?? null;
  }
}

type EC2InstanceIdsList = vec<InstanceId>;

type EC2InstanceIdsToTerminateList = vec<InstanceId>;

class EbsBlockDevice {
  public string $device;
  public VolumeSpecification $volume_specification;

  public function __construct(shape(
  ?'device' => string,
  ?'volume_specification' => VolumeSpecification,
  ) $s = shape()) {
    $this->device = $device ?? "";
    $this->volume_specification = $volume_specification ?? null;
  }
}

class EbsBlockDeviceConfig {
  public VolumeSpecification $volume_specification;
  public int $volumes_per_instance;

  public function __construct(shape(
  ?'volume_specification' => VolumeSpecification,
  ?'volumes_per_instance' => int,
  ) $s = shape()) {
    $this->volume_specification = $volume_specification ?? null;
    $this->volumes_per_instance = $volumes_per_instance ?? 0;
  }
}

type EbsBlockDeviceConfigList = vec<EbsBlockDeviceConfig>;

type EbsBlockDeviceList = vec<EbsBlockDevice>;

class EbsConfiguration {
  public EbsBlockDeviceConfigList $ebs_block_device_configs;
  public BooleanObject $ebs_optimized;

  public function __construct(shape(
  ?'ebs_block_device_configs' => EbsBlockDeviceConfigList,
  ?'ebs_optimized' => BooleanObject,
  ) $s = shape()) {
    $this->ebs_block_device_configs = $ebs_block_device_configs ?? [];
    $this->ebs_optimized = $ebs_optimized ?? false;
  }
}

class EbsVolume {
  public string $device;
  public string $volume_id;

  public function __construct(shape(
  ?'device' => string,
  ?'volume_id' => string,
  ) $s = shape()) {
    $this->device = $device ?? "";
    $this->volume_id = $volume_id ?? "";
  }
}

type EbsVolumeList = vec<EbsVolume>;

class Ec2InstanceAttributes {
  public StringList $additional_master_security_groups;
  public StringList $additional_slave_security_groups;
  public string $ec_2_availability_zone;
  public string $ec_2_key_name;
  public string $ec_2_subnet_id;
  public string $emr_managed_master_security_group;
  public string $emr_managed_slave_security_group;
  public string $iam_instance_profile;
  public XmlStringMaxLen256List $requested_ec_2_availability_zones;
  public XmlStringMaxLen256List $requested_ec_2_subnet_ids;
  public string $service_access_security_group;

  public function __construct(shape(
  ?'additional_master_security_groups' => StringList,
  ?'additional_slave_security_groups' => StringList,
  ?'ec_2_availability_zone' => string,
  ?'ec_2_key_name' => string,
  ?'ec_2_subnet_id' => string,
  ?'emr_managed_master_security_group' => string,
  ?'emr_managed_slave_security_group' => string,
  ?'iam_instance_profile' => string,
  ?'requested_ec_2_availability_zones' => XmlStringMaxLen256List,
  ?'requested_ec_2_subnet_ids' => XmlStringMaxLen256List,
  ?'service_access_security_group' => string,
  ) $s = shape()) {
    $this->additional_master_security_groups = $additional_master_security_groups ?? [];
    $this->additional_slave_security_groups = $additional_slave_security_groups ?? [];
    $this->ec_2_availability_zone = $ec_2_availability_zone ?? "";
    $this->ec_2_key_name = $ec_2_key_name ?? "";
    $this->ec_2_subnet_id = $ec_2_subnet_id ?? "";
    $this->emr_managed_master_security_group = $emr_managed_master_security_group ?? "";
    $this->emr_managed_slave_security_group = $emr_managed_slave_security_group ?? "";
    $this->iam_instance_profile = $iam_instance_profile ?? "";
    $this->requested_ec_2_availability_zones = $requested_ec_2_availability_zones ?? [];
    $this->requested_ec_2_subnet_ids = $requested_ec_2_subnet_ids ?? [];
    $this->service_access_security_group = $service_access_security_group ?? "";
  }
}

type ErrorCode = string;

type ErrorMessage = string;

class FailureDetails {
  public string $log_file;
  public string $message;
  public string $reason;

  public function __construct(shape(
  ?'log_file' => string,
  ?'message' => string,
  ?'reason' => string,
  ) $s = shape()) {
    $this->log_file = $log_file ?? "";
    $this->message = $message ?? "";
    $this->reason = $reason ?? "";
  }
}

class GetBlockPublicAccessConfigurationInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetBlockPublicAccessConfigurationOutput {
  public BlockPublicAccessConfiguration $block_public_access_configuration;
  public BlockPublicAccessConfigurationMetadata $block_public_access_configuration_metadata;

  public function __construct(shape(
  ?'block_public_access_configuration' => BlockPublicAccessConfiguration,
  ?'block_public_access_configuration_metadata' => BlockPublicAccessConfigurationMetadata,
  ) $s = shape()) {
    $this->block_public_access_configuration = $block_public_access_configuration ?? null;
    $this->block_public_access_configuration_metadata = $block_public_access_configuration_metadata ?? null;
  }
}

class GetManagedScalingPolicyInput {
  public ClusterId $cluster_id;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
  }
}

class GetManagedScalingPolicyOutput {
  public ManagedScalingPolicy $managed_scaling_policy;

  public function __construct(shape(
  ?'managed_scaling_policy' => ManagedScalingPolicy,
  ) $s = shape()) {
    $this->managed_scaling_policy = $managed_scaling_policy ?? null;
  }
}

class HadoopJarStepConfig {
  public XmlStringList $args;
  public XmlString $jar;
  public XmlString $main_class;
  public KeyValueList $properties;

  public function __construct(shape(
  ?'args' => XmlStringList,
  ?'jar' => XmlString,
  ?'main_class' => XmlString,
  ?'properties' => KeyValueList,
  ) $s = shape()) {
    $this->args = $args ?? [];
    $this->jar = $jar ?? "";
    $this->main_class = $main_class ?? "";
    $this->properties = $properties ?? [];
  }
}

class HadoopStepConfig {
  public StringList $args;
  public string $jar;
  public string $main_class;
  public StringMap $properties;

  public function __construct(shape(
  ?'args' => StringList,
  ?'jar' => string,
  ?'main_class' => string,
  ?'properties' => StringMap,
  ) $s = shape()) {
    $this->args = $args ?? [];
    $this->jar = $jar ?? "";
    $this->main_class = $main_class ?? "";
    $this->properties = $properties ?? [];
  }
}

class Instance {
  public EbsVolumeList $ebs_volumes;
  public InstanceId $ec_2_instance_id;
  public InstanceId $id;
  public InstanceFleetId $instance_fleet_id;
  public string $instance_group_id;
  public InstanceType $instance_type;
  public MarketType $market;
  public string $private_dns_name;
  public string $private_ip_address;
  public string $public_dns_name;
  public string $public_ip_address;
  public InstanceStatus $status;

  public function __construct(shape(
  ?'ebs_volumes' => EbsVolumeList,
  ?'ec_2_instance_id' => InstanceId,
  ?'id' => InstanceId,
  ?'instance_fleet_id' => InstanceFleetId,
  ?'instance_group_id' => string,
  ?'instance_type' => InstanceType,
  ?'market' => MarketType,
  ?'private_dns_name' => string,
  ?'private_ip_address' => string,
  ?'public_dns_name' => string,
  ?'public_ip_address' => string,
  ?'status' => InstanceStatus,
  ) $s = shape()) {
    $this->ebs_volumes = $ebs_volumes ?? [];
    $this->ec_2_instance_id = $ec_2_instance_id ?? "";
    $this->id = $id ?? "";
    $this->instance_fleet_id = $instance_fleet_id ?? "";
    $this->instance_group_id = $instance_group_id ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->market = $market ?? "";
    $this->private_dns_name = $private_dns_name ?? "";
    $this->private_ip_address = $private_ip_address ?? "";
    $this->public_dns_name = $public_dns_name ?? "";
    $this->public_ip_address = $public_ip_address ?? "";
    $this->status = $status ?? null;
  }
}

type InstanceCollectionType = string;

class InstanceFleet {
  public InstanceFleetId $id;
  public InstanceFleetType $instance_fleet_type;
  public InstanceTypeSpecificationList $instance_type_specifications;
  public InstanceFleetProvisioningSpecifications $launch_specifications;
  public XmlStringMaxLen256 $name;
  public WholeNumber $provisioned_on_demand_capacity;
  public WholeNumber $provisioned_spot_capacity;
  public InstanceFleetStatus $status;
  public WholeNumber $target_on_demand_capacity;
  public WholeNumber $target_spot_capacity;

  public function __construct(shape(
  ?'id' => InstanceFleetId,
  ?'instance_fleet_type' => InstanceFleetType,
  ?'instance_type_specifications' => InstanceTypeSpecificationList,
  ?'launch_specifications' => InstanceFleetProvisioningSpecifications,
  ?'name' => XmlStringMaxLen256,
  ?'provisioned_on_demand_capacity' => WholeNumber,
  ?'provisioned_spot_capacity' => WholeNumber,
  ?'status' => InstanceFleetStatus,
  ?'target_on_demand_capacity' => WholeNumber,
  ?'target_spot_capacity' => WholeNumber,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->instance_fleet_type = $instance_fleet_type ?? "";
    $this->instance_type_specifications = $instance_type_specifications ?? [];
    $this->launch_specifications = $launch_specifications ?? null;
    $this->name = $name ?? "";
    $this->provisioned_on_demand_capacity = $provisioned_on_demand_capacity ?? 0;
    $this->provisioned_spot_capacity = $provisioned_spot_capacity ?? 0;
    $this->status = $status ?? null;
    $this->target_on_demand_capacity = $target_on_demand_capacity ?? 0;
    $this->target_spot_capacity = $target_spot_capacity ?? 0;
  }
}

class InstanceFleetConfig {
  public InstanceFleetType $instance_fleet_type;
  public InstanceTypeConfigList $instance_type_configs;
  public InstanceFleetProvisioningSpecifications $launch_specifications;
  public XmlStringMaxLen256 $name;
  public WholeNumber $target_on_demand_capacity;
  public WholeNumber $target_spot_capacity;

  public function __construct(shape(
  ?'instance_fleet_type' => InstanceFleetType,
  ?'instance_type_configs' => InstanceTypeConfigList,
  ?'launch_specifications' => InstanceFleetProvisioningSpecifications,
  ?'name' => XmlStringMaxLen256,
  ?'target_on_demand_capacity' => WholeNumber,
  ?'target_spot_capacity' => WholeNumber,
  ) $s = shape()) {
    $this->instance_fleet_type = $instance_fleet_type ?? "";
    $this->instance_type_configs = $instance_type_configs ?? [];
    $this->launch_specifications = $launch_specifications ?? null;
    $this->name = $name ?? "";
    $this->target_on_demand_capacity = $target_on_demand_capacity ?? 0;
    $this->target_spot_capacity = $target_spot_capacity ?? 0;
  }
}

type InstanceFleetConfigList = vec<InstanceFleetConfig>;

type InstanceFleetId = string;

type InstanceFleetList = vec<InstanceFleet>;

class InstanceFleetModifyConfig {
  public InstanceFleetId $instance_fleet_id;
  public WholeNumber $target_on_demand_capacity;
  public WholeNumber $target_spot_capacity;

  public function __construct(shape(
  ?'instance_fleet_id' => InstanceFleetId,
  ?'target_on_demand_capacity' => WholeNumber,
  ?'target_spot_capacity' => WholeNumber,
  ) $s = shape()) {
    $this->instance_fleet_id = $instance_fleet_id ?? "";
    $this->target_on_demand_capacity = $target_on_demand_capacity ?? 0;
    $this->target_spot_capacity = $target_spot_capacity ?? 0;
  }
}

class InstanceFleetProvisioningSpecifications {
  public SpotProvisioningSpecification $spot_specification;

  public function __construct(shape(
  ?'spot_specification' => SpotProvisioningSpecification,
  ) $s = shape()) {
    $this->spot_specification = $spot_specification ?? null;
  }
}

type InstanceFleetState = string;

class InstanceFleetStateChangeReason {
  public InstanceFleetStateChangeReasonCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => InstanceFleetStateChangeReasonCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type InstanceFleetStateChangeReasonCode = string;

class InstanceFleetStatus {
  public InstanceFleetState $state;
  public InstanceFleetStateChangeReason $state_change_reason;
  public InstanceFleetTimeline $timeline;

  public function __construct(shape(
  ?'state' => InstanceFleetState,
  ?'state_change_reason' => InstanceFleetStateChangeReason,
  ?'timeline' => InstanceFleetTimeline,
  ) $s = shape()) {
    $this->state = $state ?? "";
    $this->state_change_reason = $state_change_reason ?? null;
    $this->timeline = $timeline ?? null;
  }
}

class InstanceFleetTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $ready_date_time;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'end_date_time' => Date,
  ?'ready_date_time' => Date,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->end_date_time = $end_date_time ?? 0;
    $this->ready_date_time = $ready_date_time ?? 0;
  }
}

type InstanceFleetType = string;

class InstanceGroup {
  public AutoScalingPolicyDescription $auto_scaling_policy;
  public string $bid_price;
  public ConfigurationList $configurations;
  public Long $configurations_version;
  public EbsBlockDeviceList $ebs_block_devices;
  public BooleanObject $ebs_optimized;
  public InstanceGroupId $id;
  public InstanceGroupType $instance_group_type;
  public InstanceType $instance_type;
  public ConfigurationList $last_successfully_applied_configurations;
  public Long $last_successfully_applied_configurations_version;
  public MarketType $market;
  public string $name;
  public int $requested_instance_count;
  public int $running_instance_count;
  public ShrinkPolicy $shrink_policy;
  public InstanceGroupStatus $status;

  public function __construct(shape(
  ?'auto_scaling_policy' => AutoScalingPolicyDescription,
  ?'bid_price' => string,
  ?'configurations' => ConfigurationList,
  ?'configurations_version' => Long,
  ?'ebs_block_devices' => EbsBlockDeviceList,
  ?'ebs_optimized' => BooleanObject,
  ?'id' => InstanceGroupId,
  ?'instance_group_type' => InstanceGroupType,
  ?'instance_type' => InstanceType,
  ?'last_successfully_applied_configurations' => ConfigurationList,
  ?'last_successfully_applied_configurations_version' => Long,
  ?'market' => MarketType,
  ?'name' => string,
  ?'requested_instance_count' => int,
  ?'running_instance_count' => int,
  ?'shrink_policy' => ShrinkPolicy,
  ?'status' => InstanceGroupStatus,
  ) $s = shape()) {
    $this->auto_scaling_policy = $auto_scaling_policy ?? null;
    $this->bid_price = $bid_price ?? "";
    $this->configurations = $configurations ?? [];
    $this->configurations_version = $configurations_version ?? 0;
    $this->ebs_block_devices = $ebs_block_devices ?? [];
    $this->ebs_optimized = $ebs_optimized ?? false;
    $this->id = $id ?? "";
    $this->instance_group_type = $instance_group_type ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->last_successfully_applied_configurations = $last_successfully_applied_configurations ?? [];
    $this->last_successfully_applied_configurations_version = $last_successfully_applied_configurations_version ?? 0;
    $this->market = $market ?? "";
    $this->name = $name ?? "";
    $this->requested_instance_count = $requested_instance_count ?? 0;
    $this->running_instance_count = $running_instance_count ?? 0;
    $this->shrink_policy = $shrink_policy ?? null;
    $this->status = $status ?? null;
  }
}

class InstanceGroupConfig {
  public AutoScalingPolicy $auto_scaling_policy;
  public XmlStringMaxLen256 $bid_price;
  public ConfigurationList $configurations;
  public EbsConfiguration $ebs_configuration;
  public int $instance_count;
  public InstanceRoleType $instance_role;
  public InstanceType $instance_type;
  public MarketType $market;
  public XmlStringMaxLen256 $name;

  public function __construct(shape(
  ?'auto_scaling_policy' => AutoScalingPolicy,
  ?'bid_price' => XmlStringMaxLen256,
  ?'configurations' => ConfigurationList,
  ?'ebs_configuration' => EbsConfiguration,
  ?'instance_count' => int,
  ?'instance_role' => InstanceRoleType,
  ?'instance_type' => InstanceType,
  ?'market' => MarketType,
  ?'name' => XmlStringMaxLen256,
  ) $s = shape()) {
    $this->auto_scaling_policy = $auto_scaling_policy ?? null;
    $this->bid_price = $bid_price ?? "";
    $this->configurations = $configurations ?? [];
    $this->ebs_configuration = $ebs_configuration ?? null;
    $this->instance_count = $instance_count ?? 0;
    $this->instance_role = $instance_role ?? "";
    $this->instance_type = $instance_type ?? "";
    $this->market = $market ?? "";
    $this->name = $name ?? "";
  }
}

type InstanceGroupConfigList = vec<InstanceGroupConfig>;

class InstanceGroupDetail {
  public XmlStringMaxLen256 $bid_price;
  public Date $creation_date_time;
  public Date $end_date_time;
  public XmlStringMaxLen256 $instance_group_id;
  public int $instance_request_count;
  public InstanceRoleType $instance_role;
  public int $instance_running_count;
  public InstanceType $instance_type;
  public XmlString $last_state_change_reason;
  public MarketType $market;
  public XmlStringMaxLen256 $name;
  public Date $ready_date_time;
  public Date $start_date_time;
  public InstanceGroupState $state;

  public function __construct(shape(
  ?'bid_price' => XmlStringMaxLen256,
  ?'creation_date_time' => Date,
  ?'end_date_time' => Date,
  ?'instance_group_id' => XmlStringMaxLen256,
  ?'instance_request_count' => int,
  ?'instance_role' => InstanceRoleType,
  ?'instance_running_count' => int,
  ?'instance_type' => InstanceType,
  ?'last_state_change_reason' => XmlString,
  ?'market' => MarketType,
  ?'name' => XmlStringMaxLen256,
  ?'ready_date_time' => Date,
  ?'start_date_time' => Date,
  ?'state' => InstanceGroupState,
  ) $s = shape()) {
    $this->bid_price = $bid_price ?? "";
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->end_date_time = $end_date_time ?? 0;
    $this->instance_group_id = $instance_group_id ?? "";
    $this->instance_request_count = $instance_request_count ?? 0;
    $this->instance_role = $instance_role ?? "";
    $this->instance_running_count = $instance_running_count ?? 0;
    $this->instance_type = $instance_type ?? "";
    $this->last_state_change_reason = $last_state_change_reason ?? "";
    $this->market = $market ?? "";
    $this->name = $name ?? "";
    $this->ready_date_time = $ready_date_time ?? 0;
    $this->start_date_time = $start_date_time ?? 0;
    $this->state = $state ?? "";
  }
}

type InstanceGroupDetailList = vec<InstanceGroupDetail>;

type InstanceGroupId = string;

type InstanceGroupIdsList = vec<XmlStringMaxLen256>;

type InstanceGroupList = vec<InstanceGroup>;

class InstanceGroupModifyConfig {
  public ConfigurationList $configurations;
  public EC2InstanceIdsToTerminateList $ec_2_instance_ids_to_terminate;
  public int $instance_count;
  public XmlStringMaxLen256 $instance_group_id;
  public ShrinkPolicy $shrink_policy;

  public function __construct(shape(
  ?'configurations' => ConfigurationList,
  ?'ec_2_instance_ids_to_terminate' => EC2InstanceIdsToTerminateList,
  ?'instance_count' => int,
  ?'instance_group_id' => XmlStringMaxLen256,
  ?'shrink_policy' => ShrinkPolicy,
  ) $s = shape()) {
    $this->configurations = $configurations ?? [];
    $this->ec_2_instance_ids_to_terminate = $ec_2_instance_ids_to_terminate ?? [];
    $this->instance_count = $instance_count ?? 0;
    $this->instance_group_id = $instance_group_id ?? "";
    $this->shrink_policy = $shrink_policy ?? null;
  }
}

type InstanceGroupModifyConfigList = vec<InstanceGroupModifyConfig>;

type InstanceGroupState = string;

class InstanceGroupStateChangeReason {
  public InstanceGroupStateChangeReasonCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => InstanceGroupStateChangeReasonCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type InstanceGroupStateChangeReasonCode = string;

class InstanceGroupStatus {
  public InstanceGroupState $state;
  public InstanceGroupStateChangeReason $state_change_reason;
  public InstanceGroupTimeline $timeline;

  public function __construct(shape(
  ?'state' => InstanceGroupState,
  ?'state_change_reason' => InstanceGroupStateChangeReason,
  ?'timeline' => InstanceGroupTimeline,
  ) $s = shape()) {
    $this->state = $state ?? "";
    $this->state_change_reason = $state_change_reason ?? null;
    $this->timeline = $timeline ?? null;
  }
}

class InstanceGroupTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $ready_date_time;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'end_date_time' => Date,
  ?'ready_date_time' => Date,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->end_date_time = $end_date_time ?? 0;
    $this->ready_date_time = $ready_date_time ?? 0;
  }
}

type InstanceGroupType = string;

type InstanceGroupTypeList = vec<InstanceGroupType>;

type InstanceId = string;

type InstanceList = vec<Instance>;

class InstanceResizePolicy {
  public int $instance_termination_timeout;
  public EC2InstanceIdsList $instances_to_protect;
  public EC2InstanceIdsList $instances_to_terminate;

  public function __construct(shape(
  ?'instance_termination_timeout' => int,
  ?'instances_to_protect' => EC2InstanceIdsList,
  ?'instances_to_terminate' => EC2InstanceIdsList,
  ) $s = shape()) {
    $this->instance_termination_timeout = $instance_termination_timeout ?? 0;
    $this->instances_to_protect = $instances_to_protect ?? [];
    $this->instances_to_terminate = $instances_to_terminate ?? [];
  }
}

type InstanceRoleType = string;

type InstanceState = string;

class InstanceStateChangeReason {
  public InstanceStateChangeReasonCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => InstanceStateChangeReasonCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type InstanceStateChangeReasonCode = string;

type InstanceStateList = vec<InstanceState>;

class InstanceStatus {
  public InstanceState $state;
  public InstanceStateChangeReason $state_change_reason;
  public InstanceTimeline $timeline;

  public function __construct(shape(
  ?'state' => InstanceState,
  ?'state_change_reason' => InstanceStateChangeReason,
  ?'timeline' => InstanceTimeline,
  ) $s = shape()) {
    $this->state = $state ?? "";
    $this->state_change_reason = $state_change_reason ?? null;
    $this->timeline = $timeline ?? null;
  }
}

class InstanceTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $ready_date_time;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'end_date_time' => Date,
  ?'ready_date_time' => Date,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->end_date_time = $end_date_time ?? 0;
    $this->ready_date_time = $ready_date_time ?? 0;
  }
}

type InstanceType = string;

class InstanceTypeConfig {
  public XmlStringMaxLen256 $bid_price;
  public NonNegativeDouble $bid_price_as_percentage_of_on_demand_price;
  public ConfigurationList $configurations;
  public EbsConfiguration $ebs_configuration;
  public InstanceType $instance_type;
  public WholeNumber $weighted_capacity;

  public function __construct(shape(
  ?'bid_price' => XmlStringMaxLen256,
  ?'bid_price_as_percentage_of_on_demand_price' => NonNegativeDouble,
  ?'configurations' => ConfigurationList,
  ?'ebs_configuration' => EbsConfiguration,
  ?'instance_type' => InstanceType,
  ?'weighted_capacity' => WholeNumber,
  ) $s = shape()) {
    $this->bid_price = $bid_price ?? "";
    $this->bid_price_as_percentage_of_on_demand_price = $bid_price_as_percentage_of_on_demand_price ?? 0.0;
    $this->configurations = $configurations ?? [];
    $this->ebs_configuration = $ebs_configuration ?? null;
    $this->instance_type = $instance_type ?? "";
    $this->weighted_capacity = $weighted_capacity ?? 0;
  }
}

type InstanceTypeConfigList = vec<InstanceTypeConfig>;

class InstanceTypeSpecification {
  public XmlStringMaxLen256 $bid_price;
  public NonNegativeDouble $bid_price_as_percentage_of_on_demand_price;
  public ConfigurationList $configurations;
  public EbsBlockDeviceList $ebs_block_devices;
  public BooleanObject $ebs_optimized;
  public InstanceType $instance_type;
  public WholeNumber $weighted_capacity;

  public function __construct(shape(
  ?'bid_price' => XmlStringMaxLen256,
  ?'bid_price_as_percentage_of_on_demand_price' => NonNegativeDouble,
  ?'configurations' => ConfigurationList,
  ?'ebs_block_devices' => EbsBlockDeviceList,
  ?'ebs_optimized' => BooleanObject,
  ?'instance_type' => InstanceType,
  ?'weighted_capacity' => WholeNumber,
  ) $s = shape()) {
    $this->bid_price = $bid_price ?? "";
    $this->bid_price_as_percentage_of_on_demand_price = $bid_price_as_percentage_of_on_demand_price ?? 0.0;
    $this->configurations = $configurations ?? [];
    $this->ebs_block_devices = $ebs_block_devices ?? [];
    $this->ebs_optimized = $ebs_optimized ?? false;
    $this->instance_type = $instance_type ?? "";
    $this->weighted_capacity = $weighted_capacity ?? 0;
  }
}

type InstanceTypeSpecificationList = vec<InstanceTypeSpecification>;

type Integer = int;

class InternalServerError {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InternalServerException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidRequestException {
  public ErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

class JobFlowDetail {
  public XmlStringMaxLen256 $ami_version;
  public XmlString $auto_scaling_role;
  public BootstrapActionDetailList $bootstrap_actions;
  public JobFlowExecutionStatusDetail $execution_status_detail;
  public JobFlowInstancesDetail $instances;
  public XmlStringMaxLen256 $job_flow_id;
  public XmlString $job_flow_role;
  public XmlString $log_uri;
  public XmlStringMaxLen256 $name;
  public ScaleDownBehavior $scale_down_behavior;
  public XmlString $service_role;
  public StepDetailList $steps;
  public SupportedProductsList $supported_products;
  public boolean $visible_to_all_users;

  public function __construct(shape(
  ?'ami_version' => XmlStringMaxLen256,
  ?'auto_scaling_role' => XmlString,
  ?'bootstrap_actions' => BootstrapActionDetailList,
  ?'execution_status_detail' => JobFlowExecutionStatusDetail,
  ?'instances' => JobFlowInstancesDetail,
  ?'job_flow_id' => XmlStringMaxLen256,
  ?'job_flow_role' => XmlString,
  ?'log_uri' => XmlString,
  ?'name' => XmlStringMaxLen256,
  ?'scale_down_behavior' => ScaleDownBehavior,
  ?'service_role' => XmlString,
  ?'steps' => StepDetailList,
  ?'supported_products' => SupportedProductsList,
  ?'visible_to_all_users' => boolean,
  ) $s = shape()) {
    $this->ami_version = $ami_version ?? "";
    $this->auto_scaling_role = $auto_scaling_role ?? "";
    $this->bootstrap_actions = $bootstrap_actions ?? [];
    $this->execution_status_detail = $execution_status_detail ?? null;
    $this->instances = $instances ?? null;
    $this->job_flow_id = $job_flow_id ?? "";
    $this->job_flow_role = $job_flow_role ?? "";
    $this->log_uri = $log_uri ?? "";
    $this->name = $name ?? "";
    $this->scale_down_behavior = $scale_down_behavior ?? "";
    $this->service_role = $service_role ?? "";
    $this->steps = $steps ?? [];
    $this->supported_products = $supported_products ?? [];
    $this->visible_to_all_users = $visible_to_all_users ?? false;
  }
}

type JobFlowDetailList = vec<JobFlowDetail>;

type JobFlowExecutionState = string;

type JobFlowExecutionStateList = vec<JobFlowExecutionState>;

class JobFlowExecutionStatusDetail {
  public Date $creation_date_time;
  public Date $end_date_time;
  public XmlString $last_state_change_reason;
  public Date $ready_date_time;
  public Date $start_date_time;
  public JobFlowExecutionState $state;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'end_date_time' => Date,
  ?'last_state_change_reason' => XmlString,
  ?'ready_date_time' => Date,
  ?'start_date_time' => Date,
  ?'state' => JobFlowExecutionState,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->end_date_time = $end_date_time ?? 0;
    $this->last_state_change_reason = $last_state_change_reason ?? "";
    $this->ready_date_time = $ready_date_time ?? 0;
    $this->start_date_time = $start_date_time ?? 0;
    $this->state = $state ?? "";
  }
}

class JobFlowInstancesConfig {
  public SecurityGroupsList $additional_master_security_groups;
  public SecurityGroupsList $additional_slave_security_groups;
  public XmlStringMaxLen256 $ec_2_key_name;
  public XmlStringMaxLen256 $ec_2_subnet_id;
  public XmlStringMaxLen256List $ec_2_subnet_ids;
  public XmlStringMaxLen256 $emr_managed_master_security_group;
  public XmlStringMaxLen256 $emr_managed_slave_security_group;
  public XmlStringMaxLen256 $hadoop_version;
  public int $instance_count;
  public InstanceFleetConfigList $instance_fleets;
  public InstanceGroupConfigList $instance_groups;
  public boolean $keep_job_flow_alive_when_no_steps;
  public InstanceType $master_instance_type;
  public PlacementType $placement;
  public XmlStringMaxLen256 $service_access_security_group;
  public InstanceType $slave_instance_type;
  public boolean $termination_protected;

  public function __construct(shape(
  ?'additional_master_security_groups' => SecurityGroupsList,
  ?'additional_slave_security_groups' => SecurityGroupsList,
  ?'ec_2_key_name' => XmlStringMaxLen256,
  ?'ec_2_subnet_id' => XmlStringMaxLen256,
  ?'ec_2_subnet_ids' => XmlStringMaxLen256List,
  ?'emr_managed_master_security_group' => XmlStringMaxLen256,
  ?'emr_managed_slave_security_group' => XmlStringMaxLen256,
  ?'hadoop_version' => XmlStringMaxLen256,
  ?'instance_count' => int,
  ?'instance_fleets' => InstanceFleetConfigList,
  ?'instance_groups' => InstanceGroupConfigList,
  ?'keep_job_flow_alive_when_no_steps' => boolean,
  ?'master_instance_type' => InstanceType,
  ?'placement' => PlacementType,
  ?'service_access_security_group' => XmlStringMaxLen256,
  ?'slave_instance_type' => InstanceType,
  ?'termination_protected' => boolean,
  ) $s = shape()) {
    $this->additional_master_security_groups = $additional_master_security_groups ?? [];
    $this->additional_slave_security_groups = $additional_slave_security_groups ?? [];
    $this->ec_2_key_name = $ec_2_key_name ?? "";
    $this->ec_2_subnet_id = $ec_2_subnet_id ?? "";
    $this->ec_2_subnet_ids = $ec_2_subnet_ids ?? [];
    $this->emr_managed_master_security_group = $emr_managed_master_security_group ?? "";
    $this->emr_managed_slave_security_group = $emr_managed_slave_security_group ?? "";
    $this->hadoop_version = $hadoop_version ?? "";
    $this->instance_count = $instance_count ?? 0;
    $this->instance_fleets = $instance_fleets ?? [];
    $this->instance_groups = $instance_groups ?? [];
    $this->keep_job_flow_alive_when_no_steps = $keep_job_flow_alive_when_no_steps ?? false;
    $this->master_instance_type = $master_instance_type ?? "";
    $this->placement = $placement ?? null;
    $this->service_access_security_group = $service_access_security_group ?? "";
    $this->slave_instance_type = $slave_instance_type ?? "";
    $this->termination_protected = $termination_protected ?? false;
  }
}

class JobFlowInstancesDetail {
  public XmlStringMaxLen256 $ec_2_key_name;
  public XmlStringMaxLen256 $ec_2_subnet_id;
  public XmlStringMaxLen256 $hadoop_version;
  public int $instance_count;
  public InstanceGroupDetailList $instance_groups;
  public boolean $keep_job_flow_alive_when_no_steps;
  public XmlString $master_instance_id;
  public InstanceType $master_instance_type;
  public XmlString $master_public_dns_name;
  public int $normalized_instance_hours;
  public PlacementType $placement;
  public InstanceType $slave_instance_type;
  public boolean $termination_protected;

  public function __construct(shape(
  ?'ec_2_key_name' => XmlStringMaxLen256,
  ?'ec_2_subnet_id' => XmlStringMaxLen256,
  ?'hadoop_version' => XmlStringMaxLen256,
  ?'instance_count' => int,
  ?'instance_groups' => InstanceGroupDetailList,
  ?'keep_job_flow_alive_when_no_steps' => boolean,
  ?'master_instance_id' => XmlString,
  ?'master_instance_type' => InstanceType,
  ?'master_public_dns_name' => XmlString,
  ?'normalized_instance_hours' => int,
  ?'placement' => PlacementType,
  ?'slave_instance_type' => InstanceType,
  ?'termination_protected' => boolean,
  ) $s = shape()) {
    $this->ec_2_key_name = $ec_2_key_name ?? "";
    $this->ec_2_subnet_id = $ec_2_subnet_id ?? "";
    $this->hadoop_version = $hadoop_version ?? "";
    $this->instance_count = $instance_count ?? 0;
    $this->instance_groups = $instance_groups ?? [];
    $this->keep_job_flow_alive_when_no_steps = $keep_job_flow_alive_when_no_steps ?? false;
    $this->master_instance_id = $master_instance_id ?? "";
    $this->master_instance_type = $master_instance_type ?? "";
    $this->master_public_dns_name = $master_public_dns_name ?? "";
    $this->normalized_instance_hours = $normalized_instance_hours ?? 0;
    $this->placement = $placement ?? null;
    $this->slave_instance_type = $slave_instance_type ?? "";
    $this->termination_protected = $termination_protected ?? false;
  }
}

class KerberosAttributes {
  public XmlStringMaxLen256 $ad_domain_join_password;
  public XmlStringMaxLen256 $ad_domain_join_user;
  public XmlStringMaxLen256 $cross_realm_trust_principal_password;
  public XmlStringMaxLen256 $kdc_admin_password;
  public XmlStringMaxLen256 $realm;

  public function __construct(shape(
  ?'ad_domain_join_password' => XmlStringMaxLen256,
  ?'ad_domain_join_user' => XmlStringMaxLen256,
  ?'cross_realm_trust_principal_password' => XmlStringMaxLen256,
  ?'kdc_admin_password' => XmlStringMaxLen256,
  ?'realm' => XmlStringMaxLen256,
  ) $s = shape()) {
    $this->ad_domain_join_password = $ad_domain_join_password ?? "";
    $this->ad_domain_join_user = $ad_domain_join_user ?? "";
    $this->cross_realm_trust_principal_password = $cross_realm_trust_principal_password ?? "";
    $this->kdc_admin_password = $kdc_admin_password ?? "";
    $this->realm = $realm ?? "";
  }
}

class KeyValue {
  public XmlString $key;
  public XmlString $value;

  public function __construct(shape(
  ?'key' => XmlString,
  ?'value' => XmlString,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type KeyValueList = vec<KeyValue>;

class ListBootstrapActionsInput {
  public ClusterId $cluster_id;
  public Marker $marker;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->marker = $marker ?? "";
  }
}

class ListBootstrapActionsOutput {
  public CommandList $bootstrap_actions;
  public Marker $marker;

  public function __construct(shape(
  ?'bootstrap_actions' => CommandList,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->bootstrap_actions = $bootstrap_actions ?? [];
    $this->marker = $marker ?? "";
  }
}

class ListClustersInput {
  public ClusterStateList $cluster_states;
  public Date $created_after;
  public Date $created_before;
  public Marker $marker;

  public function __construct(shape(
  ?'cluster_states' => ClusterStateList,
  ?'created_after' => Date,
  ?'created_before' => Date,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->cluster_states = $cluster_states ?? [];
    $this->created_after = $created_after ?? 0;
    $this->created_before = $created_before ?? 0;
    $this->marker = $marker ?? "";
  }
}

class ListClustersOutput {
  public ClusterSummaryList $clusters;
  public Marker $marker;

  public function __construct(shape(
  ?'clusters' => ClusterSummaryList,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->clusters = $clusters ?? [];
    $this->marker = $marker ?? "";
  }
}

class ListInstanceFleetsInput {
  public ClusterId $cluster_id;
  public Marker $marker;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->marker = $marker ?? "";
  }
}

class ListInstanceFleetsOutput {
  public InstanceFleetList $instance_fleets;
  public Marker $marker;

  public function __construct(shape(
  ?'instance_fleets' => InstanceFleetList,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->instance_fleets = $instance_fleets ?? [];
    $this->marker = $marker ?? "";
  }
}

class ListInstanceGroupsInput {
  public ClusterId $cluster_id;
  public Marker $marker;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->marker = $marker ?? "";
  }
}

class ListInstanceGroupsOutput {
  public InstanceGroupList $instance_groups;
  public Marker $marker;

  public function __construct(shape(
  ?'instance_groups' => InstanceGroupList,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->instance_groups = $instance_groups ?? [];
    $this->marker = $marker ?? "";
  }
}

class ListInstancesInput {
  public ClusterId $cluster_id;
  public InstanceFleetId $instance_fleet_id;
  public InstanceFleetType $instance_fleet_type;
  public InstanceGroupId $instance_group_id;
  public InstanceGroupTypeList $instance_group_types;
  public InstanceStateList $instance_states;
  public Marker $marker;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'instance_fleet_id' => InstanceFleetId,
  ?'instance_fleet_type' => InstanceFleetType,
  ?'instance_group_id' => InstanceGroupId,
  ?'instance_group_types' => InstanceGroupTypeList,
  ?'instance_states' => InstanceStateList,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->instance_fleet_id = $instance_fleet_id ?? "";
    $this->instance_fleet_type = $instance_fleet_type ?? "";
    $this->instance_group_id = $instance_group_id ?? "";
    $this->instance_group_types = $instance_group_types ?? [];
    $this->instance_states = $instance_states ?? [];
    $this->marker = $marker ?? "";
  }
}

class ListInstancesOutput {
  public InstanceList $instances;
  public Marker $marker;

  public function __construct(shape(
  ?'instances' => InstanceList,
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->instances = $instances ?? [];
    $this->marker = $marker ?? "";
  }
}

class ListSecurityConfigurationsInput {
  public Marker $marker;

  public function __construct(shape(
  ?'marker' => Marker,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
  }
}

class ListSecurityConfigurationsOutput {
  public Marker $marker;
  public SecurityConfigurationList $security_configurations;

  public function __construct(shape(
  ?'marker' => Marker,
  ?'security_configurations' => SecurityConfigurationList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->security_configurations = $security_configurations ?? [];
  }
}

class ListStepsInput {
  public ClusterId $cluster_id;
  public Marker $marker;
  public XmlStringList $step_ids;
  public StepStateList $step_states;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'marker' => Marker,
  ?'step_ids' => XmlStringList,
  ?'step_states' => StepStateList,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->marker = $marker ?? "";
    $this->step_ids = $step_ids ?? [];
    $this->step_states = $step_states ?? [];
  }
}

class ListStepsOutput {
  public Marker $marker;
  public StepSummaryList $steps;

  public function __construct(shape(
  ?'marker' => Marker,
  ?'steps' => StepSummaryList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->steps = $steps ?? [];
  }
}

type Long = int;

class ManagedScalingPolicy {
  public ComputeLimits $compute_limits;

  public function __construct(shape(
  ?'compute_limits' => ComputeLimits,
  ) $s = shape()) {
    $this->compute_limits = $compute_limits ?? null;
  }
}

type Marker = string;

type MarketType = string;

class MetricDimension {
  public string $key;
  public string $value;

  public function __construct(shape(
  ?'key' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type MetricDimensionList = vec<MetricDimension>;

class ModifyClusterInput {
  public string $cluster_id;
  public int $step_concurrency_level;

  public function __construct(shape(
  ?'cluster_id' => string,
  ?'step_concurrency_level' => int,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->step_concurrency_level = $step_concurrency_level ?? 0;
  }
}

class ModifyClusterOutput {
  public int $step_concurrency_level;

  public function __construct(shape(
  ?'step_concurrency_level' => int,
  ) $s = shape()) {
    $this->step_concurrency_level = $step_concurrency_level ?? 0;
  }
}

class ModifyInstanceFleetInput {
  public ClusterId $cluster_id;
  public InstanceFleetModifyConfig $instance_fleet;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'instance_fleet' => InstanceFleetModifyConfig,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->instance_fleet = $instance_fleet ?? null;
  }
}

class ModifyInstanceGroupsInput {
  public ClusterId $cluster_id;
  public InstanceGroupModifyConfigList $instance_groups;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'instance_groups' => InstanceGroupModifyConfigList,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->instance_groups = $instance_groups ?? [];
  }
}

type NewSupportedProductsList = vec<SupportedProductConfig>;

type NonNegativeDouble = float;

type OptionalArnType = string;

class PlacementType {
  public XmlString $availability_zone;
  public XmlStringMaxLen256List $availability_zones;

  public function __construct(shape(
  ?'availability_zone' => XmlString,
  ?'availability_zones' => XmlStringMaxLen256List,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->availability_zones = $availability_zones ?? [];
  }
}

type Port = int;

class PortRange {
  public Port $max_range;
  public Port $min_range;

  public function __construct(shape(
  ?'max_range' => Port,
  ?'min_range' => Port,
  ) $s = shape()) {
    $this->max_range = $max_range ?? 0;
    $this->min_range = $min_range ?? 0;
  }
}

type PortRanges = vec<PortRange>;

class PutAutoScalingPolicyInput {
  public AutoScalingPolicy $auto_scaling_policy;
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;

  public function __construct(shape(
  ?'auto_scaling_policy' => AutoScalingPolicy,
  ?'cluster_id' => ClusterId,
  ?'instance_group_id' => InstanceGroupId,
  ) $s = shape()) {
    $this->auto_scaling_policy = $auto_scaling_policy ?? null;
    $this->cluster_id = $cluster_id ?? "";
    $this->instance_group_id = $instance_group_id ?? "";
  }
}

class PutAutoScalingPolicyOutput {
  public AutoScalingPolicyDescription $auto_scaling_policy;
  public ArnType $cluster_arn;
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;

  public function __construct(shape(
  ?'auto_scaling_policy' => AutoScalingPolicyDescription,
  ?'cluster_arn' => ArnType,
  ?'cluster_id' => ClusterId,
  ?'instance_group_id' => InstanceGroupId,
  ) $s = shape()) {
    $this->auto_scaling_policy = $auto_scaling_policy ?? null;
    $this->cluster_arn = $cluster_arn ?? "";
    $this->cluster_id = $cluster_id ?? "";
    $this->instance_group_id = $instance_group_id ?? "";
  }
}

class PutBlockPublicAccessConfigurationInput {
  public BlockPublicAccessConfiguration $block_public_access_configuration;

  public function __construct(shape(
  ?'block_public_access_configuration' => BlockPublicAccessConfiguration,
  ) $s = shape()) {
    $this->block_public_access_configuration = $block_public_access_configuration ?? null;
  }
}

class PutBlockPublicAccessConfigurationOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutManagedScalingPolicyInput {
  public ClusterId $cluster_id;
  public ManagedScalingPolicy $managed_scaling_policy;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'managed_scaling_policy' => ManagedScalingPolicy,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->managed_scaling_policy = $managed_scaling_policy ?? null;
  }
}

class PutManagedScalingPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemoveAutoScalingPolicyInput {
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'instance_group_id' => InstanceGroupId,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->instance_group_id = $instance_group_id ?? "";
  }
}

class RemoveAutoScalingPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemoveManagedScalingPolicyInput {
  public ClusterId $cluster_id;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
  }
}

class RemoveManagedScalingPolicyOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemoveTagsInput {
  public ResourceId $resource_id;
  public StringList $tag_keys;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'tag_keys' => StringList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class RemoveTagsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RepoUpgradeOnBoot = string;

type ResourceId = string;

class RunJobFlowInput {
  public XmlString $additional_info;
  public XmlStringMaxLen256 $ami_version;
  public ApplicationList $applications;
  public XmlString $auto_scaling_role;
  public BootstrapActionConfigList $bootstrap_actions;
  public ConfigurationList $configurations;
  public XmlStringMaxLen256 $custom_ami_id;
  public int $ebs_root_volume_size;
  public JobFlowInstancesConfig $instances;
  public XmlString $job_flow_role;
  public KerberosAttributes $kerberos_attributes;
  public XmlString $log_uri;
  public ManagedScalingPolicy $managed_scaling_policy;
  public XmlStringMaxLen256 $name;
  public NewSupportedProductsList $new_supported_products;
  public XmlStringMaxLen256 $release_label;
  public RepoUpgradeOnBoot $repo_upgrade_on_boot;
  public ScaleDownBehavior $scale_down_behavior;
  public XmlString $security_configuration;
  public XmlString $service_role;
  public int $step_concurrency_level;
  public StepConfigList $steps;
  public SupportedProductsList $supported_products;
  public TagList $tags;
  public boolean $visible_to_all_users;

  public function __construct(shape(
  ?'additional_info' => XmlString,
  ?'ami_version' => XmlStringMaxLen256,
  ?'applications' => ApplicationList,
  ?'auto_scaling_role' => XmlString,
  ?'bootstrap_actions' => BootstrapActionConfigList,
  ?'configurations' => ConfigurationList,
  ?'custom_ami_id' => XmlStringMaxLen256,
  ?'ebs_root_volume_size' => int,
  ?'instances' => JobFlowInstancesConfig,
  ?'job_flow_role' => XmlString,
  ?'kerberos_attributes' => KerberosAttributes,
  ?'log_uri' => XmlString,
  ?'managed_scaling_policy' => ManagedScalingPolicy,
  ?'name' => XmlStringMaxLen256,
  ?'new_supported_products' => NewSupportedProductsList,
  ?'release_label' => XmlStringMaxLen256,
  ?'repo_upgrade_on_boot' => RepoUpgradeOnBoot,
  ?'scale_down_behavior' => ScaleDownBehavior,
  ?'security_configuration' => XmlString,
  ?'service_role' => XmlString,
  ?'step_concurrency_level' => int,
  ?'steps' => StepConfigList,
  ?'supported_products' => SupportedProductsList,
  ?'tags' => TagList,
  ?'visible_to_all_users' => boolean,
  ) $s = shape()) {
    $this->additional_info = $additional_info ?? "";
    $this->ami_version = $ami_version ?? "";
    $this->applications = $applications ?? [];
    $this->auto_scaling_role = $auto_scaling_role ?? "";
    $this->bootstrap_actions = $bootstrap_actions ?? [];
    $this->configurations = $configurations ?? [];
    $this->custom_ami_id = $custom_ami_id ?? "";
    $this->ebs_root_volume_size = $ebs_root_volume_size ?? 0;
    $this->instances = $instances ?? null;
    $this->job_flow_role = $job_flow_role ?? "";
    $this->kerberos_attributes = $kerberos_attributes ?? null;
    $this->log_uri = $log_uri ?? "";
    $this->managed_scaling_policy = $managed_scaling_policy ?? null;
    $this->name = $name ?? "";
    $this->new_supported_products = $new_supported_products ?? [];
    $this->release_label = $release_label ?? "";
    $this->repo_upgrade_on_boot = $repo_upgrade_on_boot ?? "";
    $this->scale_down_behavior = $scale_down_behavior ?? "";
    $this->security_configuration = $security_configuration ?? "";
    $this->service_role = $service_role ?? "";
    $this->step_concurrency_level = $step_concurrency_level ?? 0;
    $this->steps = $steps ?? [];
    $this->supported_products = $supported_products ?? [];
    $this->tags = $tags ?? [];
    $this->visible_to_all_users = $visible_to_all_users ?? false;
  }
}

class RunJobFlowOutput {
  public ArnType $cluster_arn;
  public XmlStringMaxLen256 $job_flow_id;

  public function __construct(shape(
  ?'cluster_arn' => ArnType,
  ?'job_flow_id' => XmlStringMaxLen256,
  ) $s = shape()) {
    $this->cluster_arn = $cluster_arn ?? "";
    $this->job_flow_id = $job_flow_id ?? "";
  }
}

type ScaleDownBehavior = string;

class ScalingAction {
  public MarketType $market;
  public SimpleScalingPolicyConfiguration $simple_scaling_policy_configuration;

  public function __construct(shape(
  ?'market' => MarketType,
  ?'simple_scaling_policy_configuration' => SimpleScalingPolicyConfiguration,
  ) $s = shape()) {
    $this->market = $market ?? "";
    $this->simple_scaling_policy_configuration = $simple_scaling_policy_configuration ?? null;
  }
}

class ScalingConstraints {
  public int $max_capacity;
  public int $min_capacity;

  public function __construct(shape(
  ?'max_capacity' => int,
  ?'min_capacity' => int,
  ) $s = shape()) {
    $this->max_capacity = $max_capacity ?? 0;
    $this->min_capacity = $min_capacity ?? 0;
  }
}

class ScalingRule {
  public ScalingAction $action;
  public string $description;
  public string $name;
  public ScalingTrigger $trigger;

  public function __construct(shape(
  ?'action' => ScalingAction,
  ?'description' => string,
  ?'name' => string,
  ?'trigger' => ScalingTrigger,
  ) $s = shape()) {
    $this->action = $action ?? null;
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->trigger = $trigger ?? null;
  }
}

type ScalingRuleList = vec<ScalingRule>;

class ScalingTrigger {
  public CloudWatchAlarmDefinition $cloud_watch_alarm_definition;

  public function __construct(shape(
  ?'cloud_watch_alarm_definition' => CloudWatchAlarmDefinition,
  ) $s = shape()) {
    $this->cloud_watch_alarm_definition = $cloud_watch_alarm_definition ?? null;
  }
}

class ScriptBootstrapActionConfig {
  public XmlStringList $args;
  public XmlString $path;

  public function __construct(shape(
  ?'args' => XmlStringList,
  ?'path' => XmlString,
  ) $s = shape()) {
    $this->args = $args ?? [];
    $this->path = $path ?? "";
  }
}

type SecurityConfigurationList = vec<SecurityConfigurationSummary>;

class SecurityConfigurationSummary {
  public Date $creation_date_time;
  public XmlString $name;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'name' => XmlString,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->name = $name ?? "";
  }
}

type SecurityGroupsList = vec<XmlStringMaxLen256>;

class SetTerminationProtectionInput {
  public XmlStringList $job_flow_ids;
  public boolean $termination_protected;

  public function __construct(shape(
  ?'job_flow_ids' => XmlStringList,
  ?'termination_protected' => boolean,
  ) $s = shape()) {
    $this->job_flow_ids = $job_flow_ids ?? [];
    $this->termination_protected = $termination_protected ?? false;
  }
}

class SetVisibleToAllUsersInput {
  public XmlStringList $job_flow_ids;
  public boolean $visible_to_all_users;

  public function __construct(shape(
  ?'job_flow_ids' => XmlStringList,
  ?'visible_to_all_users' => boolean,
  ) $s = shape()) {
    $this->job_flow_ids = $job_flow_ids ?? [];
    $this->visible_to_all_users = $visible_to_all_users ?? false;
  }
}

class ShrinkPolicy {
  public int $decommission_timeout;
  public InstanceResizePolicy $instance_resize_policy;

  public function __construct(shape(
  ?'decommission_timeout' => int,
  ?'instance_resize_policy' => InstanceResizePolicy,
  ) $s = shape()) {
    $this->decommission_timeout = $decommission_timeout ?? 0;
    $this->instance_resize_policy = $instance_resize_policy ?? null;
  }
}

class SimpleScalingPolicyConfiguration {
  public AdjustmentType $adjustment_type;
  public int $cool_down;
  public int $scaling_adjustment;

  public function __construct(shape(
  ?'adjustment_type' => AdjustmentType,
  ?'cool_down' => int,
  ?'scaling_adjustment' => int,
  ) $s = shape()) {
    $this->adjustment_type = $adjustment_type ?? "";
    $this->cool_down = $cool_down ?? 0;
    $this->scaling_adjustment = $scaling_adjustment ?? 0;
  }
}

class SpotProvisioningSpecification {
  public WholeNumber $block_duration_minutes;
  public SpotProvisioningTimeoutAction $timeout_action;
  public WholeNumber $timeout_duration_minutes;

  public function __construct(shape(
  ?'block_duration_minutes' => WholeNumber,
  ?'timeout_action' => SpotProvisioningTimeoutAction,
  ?'timeout_duration_minutes' => WholeNumber,
  ) $s = shape()) {
    $this->block_duration_minutes = $block_duration_minutes ?? 0;
    $this->timeout_action = $timeout_action ?? "";
    $this->timeout_duration_minutes = $timeout_duration_minutes ?? 0;
  }
}

type SpotProvisioningTimeoutAction = string;

type Statistic = string;

class Step {
  public ActionOnFailure $action_on_failure;
  public HadoopStepConfig $config;
  public StepId $id;
  public string $name;
  public StepStatus $status;

  public function __construct(shape(
  ?'action_on_failure' => ActionOnFailure,
  ?'config' => HadoopStepConfig,
  ?'id' => StepId,
  ?'name' => string,
  ?'status' => StepStatus,
  ) $s = shape()) {
    $this->action_on_failure = $action_on_failure ?? "";
    $this->config = $config ?? null;
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? null;
  }
}

type StepCancellationOption = string;

class StepConfig {
  public ActionOnFailure $action_on_failure;
  public HadoopJarStepConfig $hadoop_jar_step;
  public XmlStringMaxLen256 $name;

  public function __construct(shape(
  ?'action_on_failure' => ActionOnFailure,
  ?'hadoop_jar_step' => HadoopJarStepConfig,
  ?'name' => XmlStringMaxLen256,
  ) $s = shape()) {
    $this->action_on_failure = $action_on_failure ?? "";
    $this->hadoop_jar_step = $hadoop_jar_step ?? null;
    $this->name = $name ?? "";
  }
}

type StepConfigList = vec<StepConfig>;

class StepDetail {
  public StepExecutionStatusDetail $execution_status_detail;
  public StepConfig $step_config;

  public function __construct(shape(
  ?'execution_status_detail' => StepExecutionStatusDetail,
  ?'step_config' => StepConfig,
  ) $s = shape()) {
    $this->execution_status_detail = $execution_status_detail ?? null;
    $this->step_config = $step_config ?? null;
  }
}

type StepDetailList = vec<StepDetail>;

type StepExecutionState = string;

class StepExecutionStatusDetail {
  public Date $creation_date_time;
  public Date $end_date_time;
  public XmlString $last_state_change_reason;
  public Date $start_date_time;
  public StepExecutionState $state;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'end_date_time' => Date,
  ?'last_state_change_reason' => XmlString,
  ?'start_date_time' => Date,
  ?'state' => StepExecutionState,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->end_date_time = $end_date_time ?? 0;
    $this->last_state_change_reason = $last_state_change_reason ?? "";
    $this->start_date_time = $start_date_time ?? 0;
    $this->state = $state ?? "";
  }
}

type StepId = string;

type StepIdsList = vec<XmlStringMaxLen256>;

type StepState = string;

class StepStateChangeReason {
  public StepStateChangeReasonCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => StepStateChangeReasonCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type StepStateChangeReasonCode = string;

type StepStateList = vec<StepState>;

class StepStatus {
  public FailureDetails $failure_details;
  public StepState $state;
  public StepStateChangeReason $state_change_reason;
  public StepTimeline $timeline;

  public function __construct(shape(
  ?'failure_details' => FailureDetails,
  ?'state' => StepState,
  ?'state_change_reason' => StepStateChangeReason,
  ?'timeline' => StepTimeline,
  ) $s = shape()) {
    $this->failure_details = $failure_details ?? null;
    $this->state = $state ?? "";
    $this->state_change_reason = $state_change_reason ?? null;
    $this->timeline = $timeline ?? null;
  }
}

class StepSummary {
  public ActionOnFailure $action_on_failure;
  public HadoopStepConfig $config;
  public StepId $id;
  public string $name;
  public StepStatus $status;

  public function __construct(shape(
  ?'action_on_failure' => ActionOnFailure,
  ?'config' => HadoopStepConfig,
  ?'id' => StepId,
  ?'name' => string,
  ?'status' => StepStatus,
  ) $s = shape()) {
    $this->action_on_failure = $action_on_failure ?? "";
    $this->config = $config ?? null;
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? null;
  }
}

type StepSummaryList = vec<StepSummary>;

class StepTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $start_date_time;

  public function __construct(shape(
  ?'creation_date_time' => Date,
  ?'end_date_time' => Date,
  ?'start_date_time' => Date,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->end_date_time = $end_date_time ?? 0;
    $this->start_date_time = $start_date_time ?? 0;
  }
}

type String = string;

type StringList = vec<String>;

type StringMap = dict<String, String>;

class SupportedProductConfig {
  public XmlStringList $args;
  public XmlStringMaxLen256 $name;

  public function __construct(shape(
  ?'args' => XmlStringList,
  ?'name' => XmlStringMaxLen256,
  ) $s = shape()) {
    $this->args = $args ?? [];
    $this->name = $name ?? "";
  }
}

type SupportedProductsList = vec<XmlStringMaxLen256>;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
  ?'key' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagList = vec<Tag>;

class TerminateJobFlowsInput {
  public XmlStringList $job_flow_ids;

  public function __construct(shape(
  ?'job_flow_ids' => XmlStringList,
  ) $s = shape()) {
    $this->job_flow_ids = $job_flow_ids ?? [];
  }
}

type Unit = string;

class VolumeSpecification {
  public int $iops;
  public int $size_in_gb;
  public string $volume_type;

  public function __construct(shape(
  ?'iops' => int,
  ?'size_in_gb' => int,
  ?'volume_type' => string,
  ) $s = shape()) {
    $this->iops = $iops ?? 0;
    $this->size_in_gb = $size_in_gb ?? 0;
    $this->volume_type = $volume_type ?? "";
  }
}

type WholeNumber = int;

type XmlString = string;

type XmlStringList = vec<XmlString>;

type XmlStringMaxLen256 = string;

type XmlStringMaxLen256List = vec<XmlStringMaxLen256>;

