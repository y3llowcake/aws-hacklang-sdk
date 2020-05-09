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

class ActionOnFailure {
}

class AddInstanceFleetInput {
  public XmlStringMaxLen256 $cluster_id;
  public InstanceFleetConfig $instance_fleet;
}

class AddInstanceFleetOutput {
  public ArnType $cluster_arn;
  public XmlStringMaxLen256 $cluster_id;
  public InstanceFleetId $instance_fleet_id;
}

class AddInstanceGroupsInput {
  public InstanceGroupConfigList $instance_groups;
  public XmlStringMaxLen256 $job_flow_id;
}

class AddInstanceGroupsOutput {
  public ArnType $cluster_arn;
  public InstanceGroupIdsList $instance_group_ids;
  public XmlStringMaxLen256 $job_flow_id;
}

class AddJobFlowStepsInput {
  public XmlStringMaxLen256 $job_flow_id;
  public StepConfigList $steps;
}

class AddJobFlowStepsOutput {
  public StepIdsList $step_ids;
}

class AddTagsInput {
  public ResourceId $resource_id;
  public TagList $tags;
}

class AddTagsOutput {
}

class AdjustmentType {
}

class Application {
  public StringMap $additional_info;
  public StringList $args;
  public string $name;
  public string $version;
}

class ApplicationList {
}

class ArnType {
}

class AutoScalingPolicy {
  public ScalingConstraints $constraints;
  public ScalingRuleList $rules;
}

class AutoScalingPolicyDescription {
  public ScalingConstraints $constraints;
  public ScalingRuleList $rules;
  public AutoScalingPolicyStatus $status;
}

class AutoScalingPolicyState {
}

class AutoScalingPolicyStateChangeReason {
  public AutoScalingPolicyStateChangeReasonCode $code;
  public string $message;
}

class AutoScalingPolicyStateChangeReasonCode {
}

class AutoScalingPolicyStatus {
  public AutoScalingPolicyState $state;
  public AutoScalingPolicyStateChangeReason $state_change_reason;
}

class BlockPublicAccessConfiguration {
  public boolean $block_public_security_group_rules;
  public PortRanges $permitted_public_security_group_rule_ranges;
}

class BlockPublicAccessConfigurationMetadata {
  public ArnType $created_by_arn;
  public Date $creation_date_time;
}

class Boolean {
}

class BooleanObject {
}

class BootstrapActionConfig {
  public XmlStringMaxLen256 $name;
  public ScriptBootstrapActionConfig $script_bootstrap_action;
}

class BootstrapActionConfigList {
}

class BootstrapActionDetail {
  public BootstrapActionConfig $bootstrap_action_config;
}

class BootstrapActionDetailList {
}

class CancelStepsInfo {
  public string $reason;
  public CancelStepsRequestStatus $status;
  public StepId $step_id;
}

class CancelStepsInfoList {
}

class CancelStepsInput {
  public XmlStringMaxLen256 $cluster_id;
  public StepCancellationOption $step_cancellation_option;
  public StepIdsList $step_ids;
}

class CancelStepsOutput {
  public CancelStepsInfoList $cancel_steps_info_list;
}

class CancelStepsRequestStatus {
}

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
}

class ClusterId {
}

class ClusterState {
}

class ClusterStateChangeReason {
  public ClusterStateChangeReasonCode $code;
  public string $message;
}

class ClusterStateChangeReasonCode {
}

class ClusterStateList {
}

class ClusterStatus {
  public ClusterState $state;
  public ClusterStateChangeReason $state_change_reason;
  public ClusterTimeline $timeline;
}

class ClusterSummary {
  public ArnType $cluster_arn;
  public ClusterId $id;
  public string $name;
  public int $normalized_instance_hours;
  public OptionalArnType $outpost_arn;
  public ClusterStatus $status;
}

class ClusterSummaryList {
}

class ClusterTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $ready_date_time;
}

class Command {
  public StringList $args;
  public string $name;
  public string $script_path;
}

class CommandList {
}

class ComparisonOperator {
}

class ComputeLimits {
  public int $maximum_capacity_units;
  public int $maximum_on_demand_capacity_units;
  public int $minimum_capacity_units;
  public ComputeLimitsUnitType $unit_type;
}

class ComputeLimitsUnitType {
}

class Configuration {
  public string $classification;
  public ConfigurationList $configurations;
  public StringMap $properties;
}

class ConfigurationList {
}

class CreateSecurityConfigurationInput {
  public XmlString $name;
  public string $security_configuration;
}

class CreateSecurityConfigurationOutput {
  public Date $creation_date_time;
  public XmlString $name;
}

class Date {
}

class DeleteSecurityConfigurationInput {
  public XmlString $name;
}

class DeleteSecurityConfigurationOutput {
}

class DescribeClusterInput {
  public ClusterId $cluster_id;
}

class DescribeClusterOutput {
  public Cluster $cluster;
}

class DescribeJobFlowsInput {
  public Date $created_after;
  public Date $created_before;
  public XmlStringList $job_flow_ids;
  public JobFlowExecutionStateList $job_flow_states;
}

class DescribeJobFlowsOutput {
  public JobFlowDetailList $job_flows;
}

class DescribeSecurityConfigurationInput {
  public XmlString $name;
}

class DescribeSecurityConfigurationOutput {
  public Date $creation_date_time;
  public XmlString $name;
  public string $security_configuration;
}

class DescribeStepInput {
  public ClusterId $cluster_id;
  public StepId $step_id;
}

class DescribeStepOutput {
  public Step $step;
}

class EC2InstanceIdsList {
}

class EC2InstanceIdsToTerminateList {
}

class EbsBlockDevice {
  public string $device;
  public VolumeSpecification $volume_specification;
}

class EbsBlockDeviceConfig {
  public VolumeSpecification $volume_specification;
  public int $volumes_per_instance;
}

class EbsBlockDeviceConfigList {
}

class EbsBlockDeviceList {
}

class EbsConfiguration {
  public EbsBlockDeviceConfigList $ebs_block_device_configs;
  public BooleanObject $ebs_optimized;
}

class EbsVolume {
  public string $device;
  public string $volume_id;
}

class EbsVolumeList {
}

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
}

class ErrorCode {
}

class ErrorMessage {
}

class FailureDetails {
  public string $log_file;
  public string $message;
  public string $reason;
}

class GetBlockPublicAccessConfigurationInput {
}

class GetBlockPublicAccessConfigurationOutput {
  public BlockPublicAccessConfiguration $block_public_access_configuration;
  public BlockPublicAccessConfigurationMetadata $block_public_access_configuration_metadata;
}

class GetManagedScalingPolicyInput {
  public ClusterId $cluster_id;
}

class GetManagedScalingPolicyOutput {
  public ManagedScalingPolicy $managed_scaling_policy;
}

class HadoopJarStepConfig {
  public XmlStringList $args;
  public XmlString $jar;
  public XmlString $main_class;
  public KeyValueList $properties;
}

class HadoopStepConfig {
  public StringList $args;
  public string $jar;
  public string $main_class;
  public StringMap $properties;
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
}

class InstanceCollectionType {
}

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
}

class InstanceFleetConfig {
  public InstanceFleetType $instance_fleet_type;
  public InstanceTypeConfigList $instance_type_configs;
  public InstanceFleetProvisioningSpecifications $launch_specifications;
  public XmlStringMaxLen256 $name;
  public WholeNumber $target_on_demand_capacity;
  public WholeNumber $target_spot_capacity;
}

class InstanceFleetConfigList {
}

class InstanceFleetId {
}

class InstanceFleetList {
}

class InstanceFleetModifyConfig {
  public InstanceFleetId $instance_fleet_id;
  public WholeNumber $target_on_demand_capacity;
  public WholeNumber $target_spot_capacity;
}

class InstanceFleetProvisioningSpecifications {
  public SpotProvisioningSpecification $spot_specification;
}

class InstanceFleetState {
}

class InstanceFleetStateChangeReason {
  public InstanceFleetStateChangeReasonCode $code;
  public string $message;
}

class InstanceFleetStateChangeReasonCode {
}

class InstanceFleetStatus {
  public InstanceFleetState $state;
  public InstanceFleetStateChangeReason $state_change_reason;
  public InstanceFleetTimeline $timeline;
}

class InstanceFleetTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $ready_date_time;
}

class InstanceFleetType {
}

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
}

class InstanceGroupConfigList {
}

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
}

class InstanceGroupDetailList {
}

class InstanceGroupId {
}

class InstanceGroupIdsList {
}

class InstanceGroupList {
}

class InstanceGroupModifyConfig {
  public ConfigurationList $configurations;
  public EC2InstanceIdsToTerminateList $ec_2_instance_ids_to_terminate;
  public int $instance_count;
  public XmlStringMaxLen256 $instance_group_id;
  public ShrinkPolicy $shrink_policy;
}

class InstanceGroupModifyConfigList {
}

class InstanceGroupState {
}

class InstanceGroupStateChangeReason {
  public InstanceGroupStateChangeReasonCode $code;
  public string $message;
}

class InstanceGroupStateChangeReasonCode {
}

class InstanceGroupStatus {
  public InstanceGroupState $state;
  public InstanceGroupStateChangeReason $state_change_reason;
  public InstanceGroupTimeline $timeline;
}

class InstanceGroupTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $ready_date_time;
}

class InstanceGroupType {
}

class InstanceGroupTypeList {
}

class InstanceId {
}

class InstanceList {
}

class InstanceResizePolicy {
  public int $instance_termination_timeout;
  public EC2InstanceIdsList $instances_to_protect;
  public EC2InstanceIdsList $instances_to_terminate;
}

class InstanceRoleType {
}

class InstanceState {
}

class InstanceStateChangeReason {
  public InstanceStateChangeReasonCode $code;
  public string $message;
}

class InstanceStateChangeReasonCode {
}

class InstanceStateList {
}

class InstanceStatus {
  public InstanceState $state;
  public InstanceStateChangeReason $state_change_reason;
  public InstanceTimeline $timeline;
}

class InstanceTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $ready_date_time;
}

class InstanceType {
}

class InstanceTypeConfig {
  public XmlStringMaxLen256 $bid_price;
  public NonNegativeDouble $bid_price_as_percentage_of_on_demand_price;
  public ConfigurationList $configurations;
  public EbsConfiguration $ebs_configuration;
  public InstanceType $instance_type;
  public WholeNumber $weighted_capacity;
}

class InstanceTypeConfigList {
}

class InstanceTypeSpecification {
  public XmlStringMaxLen256 $bid_price;
  public NonNegativeDouble $bid_price_as_percentage_of_on_demand_price;
  public ConfigurationList $configurations;
  public EbsBlockDeviceList $ebs_block_devices;
  public BooleanObject $ebs_optimized;
  public InstanceType $instance_type;
  public WholeNumber $weighted_capacity;
}

class InstanceTypeSpecificationList {
}

class Integer {
}

class InternalServerError {
}

class InternalServerException {
  public ErrorMessage $message;
}

class InvalidRequestException {
  public ErrorCode $error_code;
  public ErrorMessage $message;
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
}

class JobFlowDetailList {
}

class JobFlowExecutionState {
}

class JobFlowExecutionStateList {
}

class JobFlowExecutionStatusDetail {
  public Date $creation_date_time;
  public Date $end_date_time;
  public XmlString $last_state_change_reason;
  public Date $ready_date_time;
  public Date $start_date_time;
  public JobFlowExecutionState $state;
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
}

class KerberosAttributes {
  public XmlStringMaxLen256 $ad_domain_join_password;
  public XmlStringMaxLen256 $ad_domain_join_user;
  public XmlStringMaxLen256 $cross_realm_trust_principal_password;
  public XmlStringMaxLen256 $kdc_admin_password;
  public XmlStringMaxLen256 $realm;
}

class KeyValue {
  public XmlString $key;
  public XmlString $value;
}

class KeyValueList {
}

class ListBootstrapActionsInput {
  public ClusterId $cluster_id;
  public Marker $marker;
}

class ListBootstrapActionsOutput {
  public CommandList $bootstrap_actions;
  public Marker $marker;
}

class ListClustersInput {
  public ClusterStateList $cluster_states;
  public Date $created_after;
  public Date $created_before;
  public Marker $marker;
}

class ListClustersOutput {
  public ClusterSummaryList $clusters;
  public Marker $marker;
}

class ListInstanceFleetsInput {
  public ClusterId $cluster_id;
  public Marker $marker;
}

class ListInstanceFleetsOutput {
  public InstanceFleetList $instance_fleets;
  public Marker $marker;
}

class ListInstanceGroupsInput {
  public ClusterId $cluster_id;
  public Marker $marker;
}

class ListInstanceGroupsOutput {
  public InstanceGroupList $instance_groups;
  public Marker $marker;
}

class ListInstancesInput {
  public ClusterId $cluster_id;
  public InstanceFleetId $instance_fleet_id;
  public InstanceFleetType $instance_fleet_type;
  public InstanceGroupId $instance_group_id;
  public InstanceGroupTypeList $instance_group_types;
  public InstanceStateList $instance_states;
  public Marker $marker;
}

class ListInstancesOutput {
  public InstanceList $instances;
  public Marker $marker;
}

class ListSecurityConfigurationsInput {
  public Marker $marker;
}

class ListSecurityConfigurationsOutput {
  public Marker $marker;
  public SecurityConfigurationList $security_configurations;
}

class ListStepsInput {
  public ClusterId $cluster_id;
  public Marker $marker;
  public XmlStringList $step_ids;
  public StepStateList $step_states;
}

class ListStepsOutput {
  public Marker $marker;
  public StepSummaryList $steps;
}

class Long {
}

class ManagedScalingPolicy {
  public ComputeLimits $compute_limits;
}

class Marker {
}

class MarketType {
}

class MetricDimension {
  public string $key;
  public string $value;
}

class MetricDimensionList {
}

class ModifyClusterInput {
  public string $cluster_id;
  public int $step_concurrency_level;
}

class ModifyClusterOutput {
  public int $step_concurrency_level;
}

class ModifyInstanceFleetInput {
  public ClusterId $cluster_id;
  public InstanceFleetModifyConfig $instance_fleet;
}

class ModifyInstanceGroupsInput {
  public ClusterId $cluster_id;
  public InstanceGroupModifyConfigList $instance_groups;
}

class NewSupportedProductsList {
}

class NonNegativeDouble {
}

class OptionalArnType {
}

class PlacementType {
  public XmlString $availability_zone;
  public XmlStringMaxLen256List $availability_zones;
}

class Port {
}

class PortRange {
  public Port $max_range;
  public Port $min_range;
}

class PortRanges {
}

class PutAutoScalingPolicyInput {
  public AutoScalingPolicy $auto_scaling_policy;
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;
}

class PutAutoScalingPolicyOutput {
  public AutoScalingPolicyDescription $auto_scaling_policy;
  public ArnType $cluster_arn;
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;
}

class PutBlockPublicAccessConfigurationInput {
  public BlockPublicAccessConfiguration $block_public_access_configuration;
}

class PutBlockPublicAccessConfigurationOutput {
}

class PutManagedScalingPolicyInput {
  public ClusterId $cluster_id;
  public ManagedScalingPolicy $managed_scaling_policy;
}

class PutManagedScalingPolicyOutput {
}

class RemoveAutoScalingPolicyInput {
  public ClusterId $cluster_id;
  public InstanceGroupId $instance_group_id;
}

class RemoveAutoScalingPolicyOutput {
}

class RemoveManagedScalingPolicyInput {
  public ClusterId $cluster_id;
}

class RemoveManagedScalingPolicyOutput {
}

class RemoveTagsInput {
  public ResourceId $resource_id;
  public StringList $tag_keys;
}

class RemoveTagsOutput {
}

class RepoUpgradeOnBoot {
}

class ResourceId {
}

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
}

class RunJobFlowOutput {
  public ArnType $cluster_arn;
  public XmlStringMaxLen256 $job_flow_id;
}

class ScaleDownBehavior {
}

class ScalingAction {
  public MarketType $market;
  public SimpleScalingPolicyConfiguration $simple_scaling_policy_configuration;
}

class ScalingConstraints {
  public int $max_capacity;
  public int $min_capacity;
}

class ScalingRule {
  public ScalingAction $action;
  public string $description;
  public string $name;
  public ScalingTrigger $trigger;
}

class ScalingRuleList {
}

class ScalingTrigger {
  public CloudWatchAlarmDefinition $cloud_watch_alarm_definition;
}

class ScriptBootstrapActionConfig {
  public XmlStringList $args;
  public XmlString $path;
}

class SecurityConfigurationList {
}

class SecurityConfigurationSummary {
  public Date $creation_date_time;
  public XmlString $name;
}

class SecurityGroupsList {
}

class SetTerminationProtectionInput {
  public XmlStringList $job_flow_ids;
  public boolean $termination_protected;
}

class SetVisibleToAllUsersInput {
  public XmlStringList $job_flow_ids;
  public boolean $visible_to_all_users;
}

class ShrinkPolicy {
  public int $decommission_timeout;
  public InstanceResizePolicy $instance_resize_policy;
}

class SimpleScalingPolicyConfiguration {
  public AdjustmentType $adjustment_type;
  public int $cool_down;
  public int $scaling_adjustment;
}

class SpotProvisioningSpecification {
  public WholeNumber $block_duration_minutes;
  public SpotProvisioningTimeoutAction $timeout_action;
  public WholeNumber $timeout_duration_minutes;
}

class SpotProvisioningTimeoutAction {
}

class Statistic {
}

class Step {
  public ActionOnFailure $action_on_failure;
  public HadoopStepConfig $config;
  public StepId $id;
  public string $name;
  public StepStatus $status;
}

class StepCancellationOption {
}

class StepConfig {
  public ActionOnFailure $action_on_failure;
  public HadoopJarStepConfig $hadoop_jar_step;
  public XmlStringMaxLen256 $name;
}

class StepConfigList {
}

class StepDetail {
  public StepExecutionStatusDetail $execution_status_detail;
  public StepConfig $step_config;
}

class StepDetailList {
}

class StepExecutionState {
}

class StepExecutionStatusDetail {
  public Date $creation_date_time;
  public Date $end_date_time;
  public XmlString $last_state_change_reason;
  public Date $start_date_time;
  public StepExecutionState $state;
}

class StepId {
}

class StepIdsList {
}

class StepState {
}

class StepStateChangeReason {
  public StepStateChangeReasonCode $code;
  public string $message;
}

class StepStateChangeReasonCode {
}

class StepStateList {
}

class StepStatus {
  public FailureDetails $failure_details;
  public StepState $state;
  public StepStateChangeReason $state_change_reason;
  public StepTimeline $timeline;
}

class StepSummary {
  public ActionOnFailure $action_on_failure;
  public HadoopStepConfig $config;
  public StepId $id;
  public string $name;
  public StepStatus $status;
}

class StepSummaryList {
}

class StepTimeline {
  public Date $creation_date_time;
  public Date $end_date_time;
  public Date $start_date_time;
}

class String {
}

class StringList {
}

class StringMap {
}

class SupportedProductConfig {
  public XmlStringList $args;
  public XmlStringMaxLen256 $name;
}

class SupportedProductsList {
}

class Tag {
  public string $key;
  public string $value;
}

class TagList {
}

class TerminateJobFlowsInput {
  public XmlStringList $job_flow_ids;
}

class Unit {
}

class VolumeSpecification {
  public int $iops;
  public int $size_in_gb;
  public string $volume_type;
}

class WholeNumber {
}

class XmlString {
}

class XmlStringList {
}

class XmlStringMaxLen256 {
}

class XmlStringMaxLen256List {
}

