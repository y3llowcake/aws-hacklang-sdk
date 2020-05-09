<?hh // strict
namespace slack\aws\elasticmapreduce;

interface EMR {
  public function AddInstanceGroups(AddInstanceGroupsInput) Awaitable<Errors\Result<AddInstanceGroupsOutput>>;
  public function AddJobFlowSteps(AddJobFlowStepsInput) Awaitable<Errors\Result<AddJobFlowStepsOutput>>;
  public function DeleteSecurityConfiguration(DeleteSecurityConfigurationInput) Awaitable<Errors\Result<DeleteSecurityConfigurationOutput>>;
  public function ListInstanceFleets(ListInstanceFleetsInput) Awaitable<Errors\Result<ListInstanceFleetsOutput>>;
  public function PutBlockPublicAccessConfiguration(PutBlockPublicAccessConfigurationInput) Awaitable<Errors\Result<PutBlockPublicAccessConfigurationOutput>>;
  public function SetTerminationProtection(SetTerminationProtectionInput) Awaitable<Errors\Error>;
  public function CancelSteps(CancelStepsInput) Awaitable<Errors\Result<CancelStepsOutput>>;
  public function DescribeCluster(DescribeClusterInput) Awaitable<Errors\Result<DescribeClusterOutput>>;
  public function ListInstanceGroups(ListInstanceGroupsInput) Awaitable<Errors\Result<ListInstanceGroupsOutput>>;
  public function RemoveManagedScalingPolicy(RemoveManagedScalingPolicyInput) Awaitable<Errors\Result<RemoveManagedScalingPolicyOutput>>;
  public function SetVisibleToAllUsers(SetVisibleToAllUsersInput) Awaitable<Errors\Error>;
  public function ListBootstrapActions(ListBootstrapActionsInput) Awaitable<Errors\Result<ListBootstrapActionsOutput>>;
  public function ModifyInstanceGroups(ModifyInstanceGroupsInput) Awaitable<Errors\Error>;
  public function AddTags(AddTagsInput) Awaitable<Errors\Result<AddTagsOutput>>;
  public function DescribeJobFlows(DescribeJobFlowsInput) Awaitable<Errors\Result<DescribeJobFlowsOutput>>;
  public function DescribeSecurityConfiguration(DescribeSecurityConfigurationInput) Awaitable<Errors\Result<DescribeSecurityConfigurationOutput>>;
  public function ListSecurityConfigurations(ListSecurityConfigurationsInput) Awaitable<Errors\Result<ListSecurityConfigurationsOutput>>;
  public function PutAutoScalingPolicy(PutAutoScalingPolicyInput) Awaitable<Errors\Result<PutAutoScalingPolicyOutput>>;
  public function AddInstanceFleet(AddInstanceFleetInput) Awaitable<Errors\Result<AddInstanceFleetOutput>>;
  public function ListInstances(ListInstancesInput) Awaitable<Errors\Result<ListInstancesOutput>>;
  public function ListSteps(ListStepsInput) Awaitable<Errors\Result<ListStepsOutput>>;
  public function ModifyInstanceFleet(ModifyInstanceFleetInput) Awaitable<Errors\Error>;
  public function RunJobFlow(RunJobFlowInput) Awaitable<Errors\Result<RunJobFlowOutput>>;
  public function TerminateJobFlows(TerminateJobFlowsInput) Awaitable<Errors\Error>;
  public function GetBlockPublicAccessConfiguration(GetBlockPublicAccessConfigurationInput) Awaitable<Errors\Result<GetBlockPublicAccessConfigurationOutput>>;
  public function GetManagedScalingPolicy(GetManagedScalingPolicyInput) Awaitable<Errors\Result<GetManagedScalingPolicyOutput>>;
  public function RemoveAutoScalingPolicy(RemoveAutoScalingPolicyInput) Awaitable<Errors\Result<RemoveAutoScalingPolicyOutput>>;
  public function CreateSecurityConfiguration(CreateSecurityConfigurationInput) Awaitable<Errors\Result<CreateSecurityConfigurationOutput>>;
  public function DescribeStep(DescribeStepInput) Awaitable<Errors\Result<DescribeStepOutput>>;
  public function ModifyCluster(ModifyClusterInput) Awaitable<Errors\Result<ModifyClusterOutput>>;
  public function ListClusters(ListClustersInput) Awaitable<Errors\Result<ListClustersOutput>>;
  public function PutManagedScalingPolicy(PutManagedScalingPolicyInput) Awaitable<Errors\Result<PutManagedScalingPolicyOutput>>;
  public function RemoveTags(RemoveTagsInput) Awaitable<Errors\Result<RemoveTagsOutput>>;
}

class InstanceFleetConfigList {
}

class InstanceList {
}

class InstanceCollectionType {
}

class SetVisibleToAllUsersInput {
  public XmlStringList $job_flow_ids;
  public boolean $visible_to_all_users;
}

class SpotProvisioningTimeoutAction {
}

class JobFlowExecutionState {
}

class ComputeLimits {
  public int $maximum_on_demand_capacity_units;
  public ComputeLimitsUnitType $unit_type;
  public int $minimum_capacity_units;
  public int $maximum_capacity_units;
}

class ArnType {
}

class GetManagedScalingPolicyInput {
  public ClusterId $cluster_id;
}

class NonNegativeDouble {
}

class SimpleScalingPolicyConfiguration {
  public AdjustmentType $adjustment_type;
  public int $scaling_adjustment;
  public int $cool_down;
}

class StepIdsList {
}

class StepState {
}

class StepSummaryList {
}

class EbsBlockDeviceConfigList {
}

class InstanceFleetId {
}

class ErrorMessage {
}

class InstanceGroupIdsList {
}

class SupportedProductConfig {
  public XmlStringMaxLen256 $name;
  public XmlStringList $args;
}

class BootstrapActionConfig {
  public XmlStringMaxLen256 $name;
  public ScriptBootstrapActionConfig $script_bootstrap_action;
}

class InstanceTypeConfig {
  public InstanceType $instance_type;
  public WholeNumber $weighted_capacity;
  public XmlStringMaxLen256 $bid_price;
  public NonNegativeDouble $bid_price_as_percentage_of_on_demand_price;
  public EbsConfiguration $ebs_configuration;
  public ConfigurationList $configurations;
}

class StepDetail {
  public StepConfig $step_config;
  public StepExecutionStatusDetail $execution_status_detail;
}

class InstanceFleetState {
}

class BlockPublicAccessConfiguration {
  public boolean $block_public_security_group_rules;
  public PortRanges $permitted_public_security_group_rule_ranges;
}

class ClusterStateChangeReasonCode {
}

class Command {
  public string $name;
  public string $script_path;
  public StringList $args;
}

class DescribeClusterOutput {
  public Cluster $cluster;
}

class InternalServerException {
  public ErrorMessage $message;
}

class ListInstancesOutput {
  public InstanceList $instances;
  public Marker $marker;
}

class ScalingTrigger {
  public CloudWatchAlarmDefinition $cloud_watch_alarm_definition;
}

class AddInstanceGroupsInput {
  public InstanceGroupConfigList $instance_groups;
  public XmlStringMaxLen256 $job_flow_id;
}

class InvalidRequestException {
  public ErrorCode $error_code;
  public ErrorMessage $message;
}

class ListInstanceFleetsOutput {
  public InstanceFleetList $instance_fleets;
  public Marker $marker;
}

class TagList {
}

class EbsConfiguration {
  public EbsBlockDeviceConfigList $ebs_block_device_configs;
  public BooleanObject $ebs_optimized;
}

class FailureDetails {
  public string $reason;
  public string $message;
  public string $log_file;
}

class StepStateChangeReason {
  public StepStateChangeReasonCode $code;
  public string $message;
}

class CreateSecurityConfigurationOutput {
  public XmlString $name;
  public Date $creation_date_time;
}

class SpotProvisioningSpecification {
  public SpotProvisioningTimeoutAction $timeout_action;
  public WholeNumber $block_duration_minutes;
  public WholeNumber $timeout_duration_minutes;
}

class EbsBlockDevice {
  public VolumeSpecification $volume_specification;
  public string $device;
}

class ListInstanceGroupsInput {
  public ClusterId $cluster_id;
  public Marker $marker;
}

class InstanceFleetType {
}

class ListSecurityConfigurationsInput {
  public Marker $marker;
}

class MarketType {
}

class GetBlockPublicAccessConfigurationInput {
}

class DescribeSecurityConfigurationOutput {
  public XmlString $name;
  public string $security_configuration;
  public Date $creation_date_time;
}

class XmlStringMaxLen256 {
}

class CancelStepsRequestStatus {
}

class GetManagedScalingPolicyOutput {
  public ManagedScalingPolicy $managed_scaling_policy;
}

class BlockPublicAccessConfigurationMetadata {
  public Date $creation_date_time;
  public ArnType $created_by_arn;
}

class JobFlowInstancesDetail {
  public XmlString $master_instance_id;
  public int $normalized_instance_hours;
  public XmlStringMaxLen256 $ec_2_key_name;
  public XmlStringMaxLen256 $hadoop_version;
  public InstanceType $master_instance_type;
  public XmlString $master_public_dns_name;
  public InstanceGroupDetailList $instance_groups;
  public XmlStringMaxLen256 $ec_2_subnet_id;
  public PlacementType $placement;
  public boolean $keep_job_flow_alive_when_no_steps;
  public boolean $termination_protected;
  public InstanceType $slave_instance_type;
  public int $instance_count;
}

class ModifyInstanceFleetInput {
  public ClusterId $cluster_id;
  public InstanceFleetModifyConfig $instance_fleet;
}

class PortRanges {
}

class TerminateJobFlowsInput {
  public XmlStringList $job_flow_ids;
}

class InstanceFleetStateChangeReason {
  public InstanceFleetStateChangeReasonCode $code;
  public string $message;
}

class ClusterStateList {
}

class EbsBlockDeviceList {
}

class InstanceTypeConfigList {
}

class ScalingRule {
  public string $description;
  public ScalingAction $action;
  public ScalingTrigger $trigger;
  public string $name;
}

class StringList {
}

class BootstrapActionDetail {
  public BootstrapActionConfig $bootstrap_action_config;
}

class InstanceGroupStatus {
  public InstanceGroupState $state;
  public InstanceGroupStateChangeReason $state_change_reason;
  public InstanceGroupTimeline $timeline;
}

class StepStateList {
}

class AutoScalingPolicyStateChangeReason {
  public AutoScalingPolicyStateChangeReasonCode $code;
  public string $message;
}

class Long {
}

class Statistic {
}

class String {
}

class Unit {
}

class InstanceFleetList {
}

class DeleteSecurityConfigurationInput {
  public XmlString $name;
}

class EbsVolumeList {
}

class PortRange {
  public Port $min_range;
  public Port $max_range;
}

class ScalingRuleList {
}

class AutoScalingPolicyStatus {
  public AutoScalingPolicyState $state;
  public AutoScalingPolicyStateChangeReason $state_change_reason;
}

class Marker {
}

class PutAutoScalingPolicyInput {
  public InstanceGroupId $instance_group_id;
  public AutoScalingPolicy $auto_scaling_policy;
  public ClusterId $cluster_id;
}

class InstanceGroupType {
}

class KeyValueList {
}

class ListClustersInput {
  public Date $created_after;
  public Date $created_before;
  public ClusterStateList $cluster_states;
  public Marker $marker;
}

class StepStatus {
  public StepState $state;
  public StepStateChangeReason $state_change_reason;
  public FailureDetails $failure_details;
  public StepTimeline $timeline;
}

class InstanceTypeSpecificationList {
}

class AdjustmentType {
}

class EbsVolume {
  public string $device;
  public string $volume_id;
}

class RemoveAutoScalingPolicyOutput {
}

class SupportedProductsList {
}

class XmlStringMaxLen256List {
}

class AddInstanceFleetOutput {
  public XmlStringMaxLen256 $cluster_id;
  public InstanceFleetId $instance_fleet_id;
  public ArnType $cluster_arn;
}

class MetricDimensionList {
}

class ErrorCode {
}

class DescribeClusterInput {
  public ClusterId $cluster_id;
}

class InstanceGroupList {
}

class StepCancellationOption {
}

class StepExecutionState {
}

class Date {
}

class InstanceResizePolicy {
  public EC2InstanceIdsList $instances_to_terminate;
  public EC2InstanceIdsList $instances_to_protect;
  public int $instance_termination_timeout;
}

class DescribeStepOutput {
  public Step $step;
}

class ListBootstrapActionsOutput {
  public CommandList $bootstrap_actions;
  public Marker $marker;
}

class PutBlockPublicAccessConfigurationInput {
  public BlockPublicAccessConfiguration $block_public_access_configuration;
}

class RemoveManagedScalingPolicyInput {
  public ClusterId $cluster_id;
}

class ComparisonOperator {
}

class OptionalArnType {
}

class JobFlowInstancesConfig {
  public XmlStringMaxLen256List $ec_2_subnet_ids;
  public int $instance_count;
  public InstanceFleetConfigList $instance_fleets;
  public XmlStringMaxLen256 $hadoop_version;
  public XmlStringMaxLen256 $ec_2_subnet_id;
  public boolean $keep_job_flow_alive_when_no_steps;
  public InstanceType $master_instance_type;
  public InstanceType $slave_instance_type;
  public InstanceGroupConfigList $instance_groups;
  public SecurityGroupsList $additional_slave_security_groups;
  public XmlStringMaxLen256 $emr_managed_slave_security_group;
  public XmlStringMaxLen256 $service_access_security_group;
  public SecurityGroupsList $additional_master_security_groups;
  public XmlStringMaxLen256 $ec_2_key_name;
  public PlacementType $placement;
  public boolean $termination_protected;
  public XmlStringMaxLen256 $emr_managed_master_security_group;
}

class InstanceFleetStatus {
  public InstanceFleetState $state;
  public InstanceFleetStateChangeReason $state_change_reason;
  public InstanceFleetTimeline $timeline;
}

class InstanceType {
}

class PutBlockPublicAccessConfigurationOutput {
}

class Ec2InstanceAttributes {
  public string $ec_2_availability_zone;
  public string $iam_instance_profile;
  public string $service_access_security_group;
  public StringList $additional_slave_security_groups;
  public string $ec_2_subnet_id;
  public XmlStringMaxLen256List $requested_ec_2_subnet_ids;
  public XmlStringMaxLen256List $requested_ec_2_availability_zones;
  public string $emr_managed_master_security_group;
  public string $emr_managed_slave_security_group;
  public StringList $additional_master_security_groups;
  public string $ec_2_key_name;
}

class EbsBlockDeviceConfig {
  public VolumeSpecification $volume_specification;
  public int $volumes_per_instance;
}

class JobFlowDetailList {
}

class XmlString {
}

class DescribeStepInput {
  public StepId $step_id;
  public ClusterId $cluster_id;
}

class ClusterStatus {
  public ClusterStateChangeReason $state_change_reason;
  public ClusterTimeline $timeline;
  public ClusterState $state;
}

class Instance {
  public string $private_dns_name;
  public string $instance_group_id;
  public MarketType $market;
  public EbsVolumeList $ebs_volumes;
  public InstanceId $id;
  public string $public_dns_name;
  public string $public_ip_address;
  public InstanceFleetId $instance_fleet_id;
  public InstanceType $instance_type;
  public InstanceId $ec_2_instance_id;
  public string $private_ip_address;
  public InstanceStatus $status;
}

class ListInstanceGroupsOutput {
  public InstanceGroupList $instance_groups;
  public Marker $marker;
}

class StepConfig {
  public XmlStringMaxLen256 $name;
  public ActionOnFailure $action_on_failure;
  public HadoopJarStepConfig $hadoop_jar_step;
}

class ClusterStateChangeReason {
  public ClusterStateChangeReasonCode $code;
  public string $message;
}

class ClusterTimeline {
  public Date $creation_date_time;
  public Date $ready_date_time;
  public Date $end_date_time;
}

class EC2InstanceIdsList {
}

class InstanceRoleType {
}

class StepStateChangeReasonCode {
}

class AddTagsOutput {
}

class GetBlockPublicAccessConfigurationOutput {
  public BlockPublicAccessConfiguration $block_public_access_configuration;
  public BlockPublicAccessConfigurationMetadata $block_public_access_configuration_metadata;
}

class JobFlowExecutionStateList {
}

class SecurityConfigurationList {
}

class StepExecutionStatusDetail {
  public StepExecutionState $state;
  public Date $creation_date_time;
  public Date $start_date_time;
  public Date $end_date_time;
  public XmlString $last_state_change_reason;
}

class CreateSecurityConfigurationInput {
  public XmlString $name;
  public string $security_configuration;
}

class InstanceTypeSpecification {
  public EbsBlockDeviceList $ebs_block_devices;
  public BooleanObject $ebs_optimized;
  public InstanceType $instance_type;
  public WholeNumber $weighted_capacity;
  public XmlStringMaxLen256 $bid_price;
  public NonNegativeDouble $bid_price_as_percentage_of_on_demand_price;
  public ConfigurationList $configurations;
}

class XmlStringList {
}

class ConfigurationList {
}

class InstanceGroupTimeline {
  public Date $creation_date_time;
  public Date $ready_date_time;
  public Date $end_date_time;
}

class InstanceStatus {
  public InstanceState $state;
  public InstanceStateChangeReason $state_change_reason;
  public InstanceTimeline $timeline;
}

class ClusterState {
}

class ListInstanceFleetsInput {
  public ClusterId $cluster_id;
  public Marker $marker;
}

class ListInstancesInput {
  public InstanceStateList $instance_states;
  public Marker $marker;
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;
  public InstanceGroupTypeList $instance_group_types;
  public InstanceFleetId $instance_fleet_id;
  public InstanceFleetType $instance_fleet_type;
}

class StringMap {
}

class BootstrapActionConfigList {
}

class BootstrapActionDetailList {
}

class DescribeJobFlowsInput {
  public Date $created_after;
  public Date $created_before;
  public XmlStringList $job_flow_ids;
  public JobFlowExecutionStateList $job_flow_states;
}

class InstanceFleet {
  public InstanceFleetType $instance_fleet_type;
  public WholeNumber $target_spot_capacity;
  public InstanceFleetProvisioningSpecifications $launch_specifications;
  public XmlStringMaxLen256 $name;
  public InstanceFleetStatus $status;
  public WholeNumber $provisioned_on_demand_capacity;
  public WholeNumber $provisioned_spot_capacity;
  public InstanceTypeSpecificationList $instance_type_specifications;
  public InstanceFleetId $id;
  public WholeNumber $target_on_demand_capacity;
}

class InstanceGroupModifyConfigList {
}

class ModifyClusterOutput {
  public int $step_concurrency_level;
}

class AutoScalingPolicyDescription {
  public AutoScalingPolicyStatus $status;
  public ScalingConstraints $constraints;
  public ScalingRuleList $rules;
}

class Tag {
  public string $value;
  public string $key;
}

class InstanceGroupTypeList {
}

class InstanceGroupConfigList {
}

class InternalServerError {
}

class InstanceFleetProvisioningSpecifications {
  public SpotProvisioningSpecification $spot_specification;
}

class ClusterSummary {
  public ClusterId $id;
  public string $name;
  public ClusterStatus $status;
  public int $normalized_instance_hours;
  public ArnType $cluster_arn;
  public OptionalArnType $outpost_arn;
}

class InstanceGroupDetailList {
}

class ScriptBootstrapActionConfig {
  public XmlString $path;
  public XmlStringList $args;
}

class CancelStepsOutput {
  public CancelStepsInfoList $cancel_steps_info_list;
}

class ListBootstrapActionsInput {
  public ClusterId $cluster_id;
  public Marker $marker;
}

class PlacementType {
  public XmlString $availability_zone;
  public XmlStringMaxLen256List $availability_zones;
}

class Port {
}

class RunJobFlowInput {
  public StepConfigList $steps;
  public XmlString $job_flow_role;
  public XmlStringMaxLen256 $custom_ami_id;
  public RepoUpgradeOnBoot $repo_upgrade_on_boot;
  public int $step_concurrency_level;
  public XmlStringMaxLen256 $name;
  public XmlStringMaxLen256 $ami_version;
  public XmlStringMaxLen256 $release_label;
  public boolean $visible_to_all_users;
  public TagList $tags;
  public XmlString $auto_scaling_role;
  public JobFlowInstancesConfig $instances;
  public BootstrapActionConfigList $bootstrap_actions;
  public SupportedProductsList $supported_products;
  public XmlString $security_configuration;
  public int $ebs_root_volume_size;
  public ManagedScalingPolicy $managed_scaling_policy;
  public ApplicationList $applications;
  public ConfigurationList $configurations;
  public XmlString $service_role;
  public ScaleDownBehavior $scale_down_behavior;
  public KerberosAttributes $kerberos_attributes;
  public XmlString $log_uri;
  public XmlString $additional_info;
  public NewSupportedProductsList $new_supported_products;
}

class InstanceGroupState {
}

class InstanceFleetStateChangeReasonCode {
}

class InstanceGroupModifyConfig {
  public XmlStringMaxLen256 $instance_group_id;
  public int $instance_count;
  public EC2InstanceIdsToTerminateList $ec_2_instance_ids_to_terminate;
  public ShrinkPolicy $shrink_policy;
  public ConfigurationList $configurations;
}

class InstanceGroupStateChangeReason {
  public InstanceGroupStateChangeReasonCode $code;
  public string $message;
}

class InstanceState {
}

class PutAutoScalingPolicyOutput {
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;
  public AutoScalingPolicyDescription $auto_scaling_policy;
  public ArnType $cluster_arn;
}

class RemoveTagsOutput {
}

class ShrinkPolicy {
  public int $decommission_timeout;
  public InstanceResizePolicy $instance_resize_policy;
}

class Configuration {
  public string $classification;
  public ConfigurationList $configurations;
  public StringMap $properties;
}

class PutManagedScalingPolicyInput {
  public ClusterId $cluster_id;
  public ManagedScalingPolicy $managed_scaling_policy;
}

class StepDetailList {
}

class InstanceFleetTimeline {
  public Date $creation_date_time;
  public Date $ready_date_time;
  public Date $end_date_time;
}

class MetricDimension {
  public string $key;
  public string $value;
}

class ScaleDownBehavior {
}

class CancelStepsInfoList {
}

class ClusterId {
}

class InstanceTimeline {
  public Date $creation_date_time;
  public Date $ready_date_time;
  public Date $end_date_time;
}

class StepId {
}

class CancelStepsInfo {
  public StepId $step_id;
  public CancelStepsRequestStatus $status;
  public string $reason;
}

class BooleanObject {
}

class CommandList {
}

class InstanceId {
}

class JobFlowDetail {
  public XmlStringMaxLen256 $job_flow_id;
  public XmlString $log_uri;
  public XmlStringMaxLen256 $ami_version;
  public StepDetailList $steps;
  public XmlString $job_flow_role;
  public XmlString $service_role;
  public XmlStringMaxLen256 $name;
  public JobFlowExecutionStatusDetail $execution_status_detail;
  public BootstrapActionDetailList $bootstrap_actions;
  public SupportedProductsList $supported_products;
  public XmlString $auto_scaling_role;
  public JobFlowInstancesDetail $instances;
  public boolean $visible_to_all_users;
  public ScaleDownBehavior $scale_down_behavior;
}

class ActionOnFailure {
}

class ListSecurityConfigurationsOutput {
  public Marker $marker;
  public SecurityConfigurationList $security_configurations;
}

class ManagedScalingPolicy {
  public ComputeLimits $compute_limits;
}

class ScalingAction {
  public MarketType $market;
  public SimpleScalingPolicyConfiguration $simple_scaling_policy_configuration;
}

class AddInstanceGroupsOutput {
  public InstanceGroupIdsList $instance_group_ids;
  public ArnType $cluster_arn;
  public XmlStringMaxLen256 $job_flow_id;
}

class ListStepsInput {
  public ClusterId $cluster_id;
  public StepStateList $step_states;
  public XmlStringList $step_ids;
  public Marker $marker;
}

class HadoopJarStepConfig {
  public XmlStringList $args;
  public KeyValueList $properties;
  public XmlString $jar;
  public XmlString $main_class;
}

class Cluster {
  public InstanceCollectionType $instance_collection_type;
  public boolean $auto_terminate;
  public XmlString $auto_scaling_role;
  public int $step_concurrency_level;
  public ClusterId $id;
  public XmlString $security_configuration;
  public int $ebs_root_volume_size;
  public RepoUpgradeOnBoot $repo_upgrade_on_boot;
  public string $requested_ami_version;
  public string $master_public_dns_name;
  public ScaleDownBehavior $scale_down_behavior;
  public string $log_uri;
  public boolean $termination_protected;
  public string $service_role;
  public XmlStringMaxLen256 $custom_ami_id;
  public KerberosAttributes $kerberos_attributes;
  public string $running_ami_version;
  public string $release_label;
  public int $normalized_instance_hours;
  public ArnType $cluster_arn;
  public ClusterStatus $status;
  public boolean $visible_to_all_users;
  public OptionalArnType $outpost_arn;
  public string $name;
  public Ec2InstanceAttributes $ec_2_instance_attributes;
  public TagList $tags;
  public ConfigurationList $configurations;
  public ApplicationList $applications;
}

class PutManagedScalingPolicyOutput {
}

class ListClustersOutput {
  public ClusterSummaryList $clusters;
  public Marker $marker;
}

class DescribeSecurityConfigurationInput {
  public XmlString $name;
}

class EC2InstanceIdsToTerminateList {
}

class ModifyClusterInput {
  public string $cluster_id;
  public int $step_concurrency_level;
}

class RemoveManagedScalingPolicyOutput {
}

class RepoUpgradeOnBoot {
}

class ClusterSummaryList {
}

class ListStepsOutput {
  public StepSummaryList $steps;
  public Marker $marker;
}

class RemoveAutoScalingPolicyInput {
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;
}

class RemoveTagsInput {
  public ResourceId $resource_id;
  public StringList $tag_keys;
}

class SecurityGroupsList {
}

class Step {
  public string $name;
  public HadoopStepConfig $config;
  public ActionOnFailure $action_on_failure;
  public StepStatus $status;
  public StepId $id;
}

class AutoScalingPolicyStateChangeReasonCode {
}

class KeyValue {
  public XmlString $key;
  public XmlString $value;
}

class ScalingConstraints {
  public int $min_capacity;
  public int $max_capacity;
}

class VolumeSpecification {
  public string $volume_type;
  public int $iops;
  public int $size_in_gb;
}

class InstanceFleetModifyConfig {
  public InstanceFleetId $instance_fleet_id;
  public WholeNumber $target_on_demand_capacity;
  public WholeNumber $target_spot_capacity;
}

class AddTagsInput {
  public ResourceId $resource_id;
  public TagList $tags;
}

class Boolean {
}

class InstanceStateList {
}

class StepTimeline {
  public Date $creation_date_time;
  public Date $start_date_time;
  public Date $end_date_time;
}

class AddInstanceFleetInput {
  public XmlStringMaxLen256 $cluster_id;
  public InstanceFleetConfig $instance_fleet;
}

class Application {
  public string $name;
  public string $version;
  public StringList $args;
  public StringMap $additional_info;
}

class HadoopStepConfig {
  public string $jar;
  public StringMap $properties;
  public string $main_class;
  public StringList $args;
}

class ModifyInstanceGroupsInput {
  public ClusterId $cluster_id;
  public InstanceGroupModifyConfigList $instance_groups;
}

class NewSupportedProductsList {
}

class ResourceId {
}

class AddJobFlowStepsInput {
  public StepConfigList $steps;
  public XmlStringMaxLen256 $job_flow_id;
}

class AutoScalingPolicyState {
}

class ComputeLimitsUnitType {
}

class InstanceGroupConfig {
  public EbsConfiguration $ebs_configuration;
  public InstanceRoleType $instance_role;
  public ConfigurationList $configurations;
  public XmlStringMaxLen256 $bid_price;
  public InstanceType $instance_type;
  public int $instance_count;
  public AutoScalingPolicy $auto_scaling_policy;
  public XmlStringMaxLen256 $name;
  public MarketType $market;
}

class Integer {
}

class SecurityConfigurationSummary {
  public XmlString $name;
  public Date $creation_date_time;
}

class AddJobFlowStepsOutput {
  public StepIdsList $step_ids;
}

class JobFlowExecutionStatusDetail {
  public XmlString $last_state_change_reason;
  public JobFlowExecutionState $state;
  public Date $creation_date_time;
  public Date $start_date_time;
  public Date $ready_date_time;
  public Date $end_date_time;
}

class InstanceStateChangeReasonCode {
}

class KerberosAttributes {
  public XmlStringMaxLen256 $kdc_admin_password;
  public XmlStringMaxLen256 $cross_realm_trust_principal_password;
  public XmlStringMaxLen256 $ad_domain_join_user;
  public XmlStringMaxLen256 $ad_domain_join_password;
  public XmlStringMaxLen256 $realm;
}

class RunJobFlowOutput {
  public XmlStringMaxLen256 $job_flow_id;
  public ArnType $cluster_arn;
}

class ApplicationList {
}

class InstanceGroupId {
}

class InstanceGroupStateChangeReasonCode {
}

class SetTerminationProtectionInput {
  public XmlStringList $job_flow_ids;
  public boolean $termination_protected;
}

class StepConfigList {
}

class WholeNumber {
}

class AutoScalingPolicy {
  public ScalingConstraints $constraints;
  public ScalingRuleList $rules;
}

class CloudWatchAlarmDefinition {
  public int $evaluation_periods;
  public string $metric_name;
  public int $period;
  public Unit $unit;
  public MetricDimensionList $dimensions;
  public ComparisonOperator $comparison_operator;
  public string $namespace;
  public Statistic $statistic;
  public NonNegativeDouble $threshold;
}

class InstanceGroupDetail {
  public Date $end_date_time;
  public XmlStringMaxLen256 $instance_group_id;
  public InstanceRoleType $instance_role;
  public InstanceType $instance_type;
  public int $instance_running_count;
  public XmlString $last_state_change_reason;
  public MarketType $market;
  public Date $creation_date_time;
  public Date $ready_date_time;
  public XmlStringMaxLen256 $name;
  public XmlStringMaxLen256 $bid_price;
  public int $instance_request_count;
  public InstanceGroupState $state;
  public Date $start_date_time;
}

class CancelStepsInput {
  public StepIdsList $step_ids;
  public StepCancellationOption $step_cancellation_option;
  public XmlStringMaxLen256 $cluster_id;
}

class InstanceStateChangeReason {
  public InstanceStateChangeReasonCode $code;
  public string $message;
}

class DescribeJobFlowsOutput {
  public JobFlowDetailList $job_flows;
}

class InstanceFleetConfig {
  public XmlStringMaxLen256 $name;
  public InstanceFleetType $instance_fleet_type;
  public WholeNumber $target_on_demand_capacity;
  public WholeNumber $target_spot_capacity;
  public InstanceTypeConfigList $instance_type_configs;
  public InstanceFleetProvisioningSpecifications $launch_specifications;
}

class InstanceGroup {
  public string $name;
  public string $bid_price;
  public InstanceGroupStatus $status;
  public EbsBlockDeviceList $ebs_block_devices;
  public BooleanObject $ebs_optimized;
  public MarketType $market;
  public InstanceType $instance_type;
  public ShrinkPolicy $shrink_policy;
  public InstanceGroupId $id;
  public int $requested_instance_count;
  public int $running_instance_count;
  public ConfigurationList $configurations;
  public ConfigurationList $last_successfully_applied_configurations;
  public InstanceGroupType $instance_group_type;
  public Long $configurations_version;
  public Long $last_successfully_applied_configurations_version;
  public AutoScalingPolicyDescription $auto_scaling_policy;
}

class StepSummary {
  public string $name;
  public HadoopStepConfig $config;
  public ActionOnFailure $action_on_failure;
  public StepStatus $status;
  public StepId $id;
}

class DeleteSecurityConfigurationOutput {
}

