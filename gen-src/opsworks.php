<?hh // strict
namespace slack\aws\opsworks;

interface OpsWorks {
  public function AssignInstance(AssignInstanceRequest) Awaitable<Errors\Error>;
  public function AssignVolume(AssignVolumeRequest) Awaitable<Errors\Error>;
  public function AssociateElasticIp(AssociateElasticIpRequest) Awaitable<Errors\Error>;
  public function AttachElasticLoadBalancer(AttachElasticLoadBalancerRequest) Awaitable<Errors\Error>;
  public function CloneStack(CloneStackRequest) Awaitable<Errors\Result<CloneStackResult>>;
  public function CreateApp(CreateAppRequest) Awaitable<Errors\Result<CreateAppResult>>;
  public function CreateDeployment(CreateDeploymentRequest) Awaitable<Errors\Result<CreateDeploymentResult>>;
  public function CreateInstance(CreateInstanceRequest) Awaitable<Errors\Result<CreateInstanceResult>>;
  public function CreateLayer(CreateLayerRequest) Awaitable<Errors\Result<CreateLayerResult>>;
  public function CreateStack(CreateStackRequest) Awaitable<Errors\Result<CreateStackResult>>;
  public function CreateUserProfile(CreateUserProfileRequest) Awaitable<Errors\Result<CreateUserProfileResult>>;
  public function DeleteApp(DeleteAppRequest) Awaitable<Errors\Error>;
  public function DeleteInstance(DeleteInstanceRequest) Awaitable<Errors\Error>;
  public function DeleteLayer(DeleteLayerRequest) Awaitable<Errors\Error>;
  public function DeleteStack(DeleteStackRequest) Awaitable<Errors\Error>;
  public function DeleteUserProfile(DeleteUserProfileRequest) Awaitable<Errors\Error>;
  public function DeregisterEcsCluster(DeregisterEcsClusterRequest) Awaitable<Errors\Error>;
  public function DeregisterElasticIp(DeregisterElasticIpRequest) Awaitable<Errors\Error>;
  public function DeregisterInstance(DeregisterInstanceRequest) Awaitable<Errors\Error>;
  public function DeregisterRdsDbInstance(DeregisterRdsDbInstanceRequest) Awaitable<Errors\Error>;
  public function DeregisterVolume(DeregisterVolumeRequest) Awaitable<Errors\Error>;
  public function DescribeAgentVersions(DescribeAgentVersionsRequest) Awaitable<Errors\Result<DescribeAgentVersionsResult>>;
  public function DescribeApps(DescribeAppsRequest) Awaitable<Errors\Result<DescribeAppsResult>>;
  public function DescribeCommands(DescribeCommandsRequest) Awaitable<Errors\Result<DescribeCommandsResult>>;
  public function DescribeDeployments(DescribeDeploymentsRequest) Awaitable<Errors\Result<DescribeDeploymentsResult>>;
  public function DescribeEcsClusters(DescribeEcsClustersRequest) Awaitable<Errors\Result<DescribeEcsClustersResult>>;
  public function DescribeElasticIps(DescribeElasticIpsRequest) Awaitable<Errors\Result<DescribeElasticIpsResult>>;
  public function DescribeElasticLoadBalancers(DescribeElasticLoadBalancersRequest) Awaitable<Errors\Result<DescribeElasticLoadBalancersResult>>;
  public function DescribeInstances(DescribeInstancesRequest) Awaitable<Errors\Result<DescribeInstancesResult>>;
  public function DescribeLayers(DescribeLayersRequest) Awaitable<Errors\Result<DescribeLayersResult>>;
  public function DescribeLoadBasedAutoScaling(DescribeLoadBasedAutoScalingRequest) Awaitable<Errors\Result<DescribeLoadBasedAutoScalingResult>>;
  public function DescribeMyUserProfile() Awaitable<Errors\Result<DescribeMyUserProfileResult>>;
  public function DescribeOperatingSystems() Awaitable<Errors\Result<DescribeOperatingSystemsResponse>>;
  public function DescribePermissions(DescribePermissionsRequest) Awaitable<Errors\Result<DescribePermissionsResult>>;
  public function DescribeRaidArrays(DescribeRaidArraysRequest) Awaitable<Errors\Result<DescribeRaidArraysResult>>;
  public function DescribeRdsDbInstances(DescribeRdsDbInstancesRequest) Awaitable<Errors\Result<DescribeRdsDbInstancesResult>>;
  public function DescribeServiceErrors(DescribeServiceErrorsRequest) Awaitable<Errors\Result<DescribeServiceErrorsResult>>;
  public function DescribeStackProvisioningParameters(DescribeStackProvisioningParametersRequest) Awaitable<Errors\Result<DescribeStackProvisioningParametersResult>>;
  public function DescribeStackSummary(DescribeStackSummaryRequest) Awaitable<Errors\Result<DescribeStackSummaryResult>>;
  public function DescribeStacks(DescribeStacksRequest) Awaitable<Errors\Result<DescribeStacksResult>>;
  public function DescribeTimeBasedAutoScaling(DescribeTimeBasedAutoScalingRequest) Awaitable<Errors\Result<DescribeTimeBasedAutoScalingResult>>;
  public function DescribeUserProfiles(DescribeUserProfilesRequest) Awaitable<Errors\Result<DescribeUserProfilesResult>>;
  public function DescribeVolumes(DescribeVolumesRequest) Awaitable<Errors\Result<DescribeVolumesResult>>;
  public function DetachElasticLoadBalancer(DetachElasticLoadBalancerRequest) Awaitable<Errors\Error>;
  public function DisassociateElasticIp(DisassociateElasticIpRequest) Awaitable<Errors\Error>;
  public function GetHostnameSuggestion(GetHostnameSuggestionRequest) Awaitable<Errors\Result<GetHostnameSuggestionResult>>;
  public function GrantAccess(GrantAccessRequest) Awaitable<Errors\Result<GrantAccessResult>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResult>>;
  public function RebootInstance(RebootInstanceRequest) Awaitable<Errors\Error>;
  public function RegisterEcsCluster(RegisterEcsClusterRequest) Awaitable<Errors\Result<RegisterEcsClusterResult>>;
  public function RegisterElasticIp(RegisterElasticIpRequest) Awaitable<Errors\Result<RegisterElasticIpResult>>;
  public function RegisterInstance(RegisterInstanceRequest) Awaitable<Errors\Result<RegisterInstanceResult>>;
  public function RegisterRdsDbInstance(RegisterRdsDbInstanceRequest) Awaitable<Errors\Error>;
  public function RegisterVolume(RegisterVolumeRequest) Awaitable<Errors\Result<RegisterVolumeResult>>;
  public function SetLoadBasedAutoScaling(SetLoadBasedAutoScalingRequest) Awaitable<Errors\Error>;
  public function SetPermission(SetPermissionRequest) Awaitable<Errors\Error>;
  public function SetTimeBasedAutoScaling(SetTimeBasedAutoScalingRequest) Awaitable<Errors\Error>;
  public function StartInstance(StartInstanceRequest) Awaitable<Errors\Error>;
  public function StartStack(StartStackRequest) Awaitable<Errors\Error>;
  public function StopInstance(StopInstanceRequest) Awaitable<Errors\Error>;
  public function StopStack(StopStackRequest) Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UnassignInstance(UnassignInstanceRequest) Awaitable<Errors\Error>;
  public function UnassignVolume(UnassignVolumeRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateApp(UpdateAppRequest) Awaitable<Errors\Error>;
  public function UpdateElasticIp(UpdateElasticIpRequest) Awaitable<Errors\Error>;
  public function UpdateInstance(UpdateInstanceRequest) Awaitable<Errors\Error>;
  public function UpdateLayer(UpdateLayerRequest) Awaitable<Errors\Error>;
  public function UpdateMyUserProfile(UpdateMyUserProfileRequest) Awaitable<Errors\Error>;
  public function UpdateRdsDbInstance(UpdateRdsDbInstanceRequest) Awaitable<Errors\Error>;
  public function UpdateStack(UpdateStackRequest) Awaitable<Errors\Error>;
  public function UpdateUserProfile(UpdateUserProfileRequest) Awaitable<Errors\Error>;
  public function UpdateVolume(UpdateVolumeRequest) Awaitable<Errors\Error>;
}

class AgentVersion {
  public StackConfigurationManager $configuration_manager;
  public string $version;
}

class AgentVersions {
}

class App {
  public string $app_id;
  public Source $app_source;
  public AppAttributes $attributes;
  public string $created_at;
  public DataSources $data_sources;
  public string $description;
  public Strings $domains;
  public boolean $enable_ssl;
  public EnvironmentVariables $environment;
  public string $name;
  public string $shortname;
  public SslConfiguration $ssl_configuration;
  public string $stack_id;
  public AppType $type;
}

class AppAttributes {
}

class AppAttributesKeys {
}

class AppType {
}

class Apps {
}

class Architecture {
}

class AssignInstanceRequest {
  public string $instance_id;
  public Strings $layer_ids;
}

class AssignVolumeRequest {
  public string $instance_id;
  public string $volume_id;
}

class AssociateElasticIpRequest {
  public string $elastic_ip;
  public string $instance_id;
}

class AttachElasticLoadBalancerRequest {
  public string $elastic_load_balancer_name;
  public string $layer_id;
}

class AutoScalingThresholds {
  public Strings $alarms;
  public Double $cpu_threshold;
  public Minute $ignore_metrics_time;
  public int $instance_count;
  public Double $load_threshold;
  public Double $memory_threshold;
  public Minute $thresholds_wait_time;
}

class AutoScalingType {
}

class BlockDeviceMapping {
  public string $device_name;
  public EbsBlockDevice $ebs;
  public string $no_device;
  public string $virtual_name;
}

class BlockDeviceMappings {
}

class Boolean {
}

class ChefConfiguration {
  public string $berkshelf_version;
  public boolean $manage_berkshelf;
}

class CloneStackRequest {
  public string $agent_version;
  public StackAttributes $attributes;
  public ChefConfiguration $chef_configuration;
  public Strings $clone_app_ids;
  public boolean $clone_permissions;
  public StackConfigurationManager $configuration_manager;
  public Source $custom_cookbooks_source;
  public string $custom_json;
  public string $default_availability_zone;
  public string $default_instance_profile_arn;
  public string $default_os;
  public RootDeviceType $default_root_device_type;
  public string $default_ssh_key_name;
  public string $default_subnet_id;
  public string $hostname_theme;
  public string $name;
  public string $region;
  public string $service_role_arn;
  public string $source_stack_id;
  public boolean $use_custom_cookbooks;
  public boolean $use_opsworks_security_groups;
  public string $vpc_id;
}

class CloneStackResult {
  public string $stack_id;
}

class CloudWatchLogsConfiguration {
  public boolean $enabled;
  public CloudWatchLogsLogStreams $log_streams;
}

class CloudWatchLogsEncoding {
}

class CloudWatchLogsInitialPosition {
}

class CloudWatchLogsLogStream {
  public int $batch_count;
  public int $batch_size;
  public int $buffer_duration;
  public string $datetime_format;
  public CloudWatchLogsEncoding $encoding;
  public string $file;
  public string $file_fingerprint_lines;
  public CloudWatchLogsInitialPosition $initial_position;
  public string $log_group_name;
  public string $multi_line_start_pattern;
  public CloudWatchLogsTimeZone $time_zone;
}

class CloudWatchLogsLogStreams {
}

class CloudWatchLogsTimeZone {
}

class Command {
  public DateTime $acknowledged_at;
  public string $command_id;
  public DateTime $completed_at;
  public DateTime $created_at;
  public string $deployment_id;
  public int $exit_code;
  public string $instance_id;
  public string $log_url;
  public string $status;
  public string $type;
}

class Commands {
}

class CreateAppRequest {
  public Source $app_source;
  public AppAttributes $attributes;
  public DataSources $data_sources;
  public string $description;
  public Strings $domains;
  public boolean $enable_ssl;
  public EnvironmentVariables $environment;
  public string $name;
  public string $shortname;
  public SslConfiguration $ssl_configuration;
  public string $stack_id;
  public AppType $type;
}

class CreateAppResult {
  public string $app_id;
}

class CreateDeploymentRequest {
  public string $app_id;
  public DeploymentCommand $command;
  public string $comment;
  public string $custom_json;
  public Strings $instance_ids;
  public Strings $layer_ids;
  public string $stack_id;
}

class CreateDeploymentResult {
  public string $deployment_id;
}

class CreateInstanceRequest {
  public string $agent_version;
  public string $ami_id;
  public Architecture $architecture;
  public AutoScalingType $auto_scaling_type;
  public string $availability_zone;
  public BlockDeviceMappings $block_device_mappings;
  public boolean $ebs_optimized;
  public string $hostname;
  public boolean $install_updates_on_boot;
  public string $instance_type;
  public Strings $layer_ids;
  public string $os;
  public RootDeviceType $root_device_type;
  public string $ssh_key_name;
  public string $stack_id;
  public string $subnet_id;
  public string $tenancy;
  public string $virtualization_type;
}

class CreateInstanceResult {
  public string $instance_id;
}

class CreateLayerRequest {
  public LayerAttributes $attributes;
  public boolean $auto_assign_elastic_ips;
  public boolean $auto_assign_public_ips;
  public CloudWatchLogsConfiguration $cloud_watch_logs_configuration;
  public string $custom_instance_profile_arn;
  public string $custom_json;
  public Recipes $custom_recipes;
  public Strings $custom_security_group_ids;
  public boolean $enable_auto_healing;
  public boolean $install_updates_on_boot;
  public LifecycleEventConfiguration $lifecycle_event_configuration;
  public string $name;
  public Strings $packages;
  public string $shortname;
  public string $stack_id;
  public LayerType $type;
  public boolean $use_ebs_optimized_instances;
  public VolumeConfigurations $volume_configurations;
}

class CreateLayerResult {
  public string $layer_id;
}

class CreateStackRequest {
  public string $agent_version;
  public StackAttributes $attributes;
  public ChefConfiguration $chef_configuration;
  public StackConfigurationManager $configuration_manager;
  public Source $custom_cookbooks_source;
  public string $custom_json;
  public string $default_availability_zone;
  public string $default_instance_profile_arn;
  public string $default_os;
  public RootDeviceType $default_root_device_type;
  public string $default_ssh_key_name;
  public string $default_subnet_id;
  public string $hostname_theme;
  public string $name;
  public string $region;
  public string $service_role_arn;
  public boolean $use_custom_cookbooks;
  public boolean $use_opsworks_security_groups;
  public string $vpc_id;
}

class CreateStackResult {
  public string $stack_id;
}

class CreateUserProfileRequest {
  public boolean $allow_self_management;
  public string $iam_user_arn;
  public string $ssh_public_key;
  public string $ssh_username;
}

class CreateUserProfileResult {
  public string $iam_user_arn;
}

class DailyAutoScalingSchedule {
}

class DataSource {
  public string $arn;
  public string $database_name;
  public string $type;
}

class DataSources {
}

class DateTime {
}

class DeleteAppRequest {
  public string $app_id;
}

class DeleteInstanceRequest {
  public boolean $delete_elastic_ip;
  public boolean $delete_volumes;
  public string $instance_id;
}

class DeleteLayerRequest {
  public string $layer_id;
}

class DeleteStackRequest {
  public string $stack_id;
}

class DeleteUserProfileRequest {
  public string $iam_user_arn;
}

class Deployment {
  public string $app_id;
  public DeploymentCommand $command;
  public string $comment;
  public DateTime $completed_at;
  public DateTime $created_at;
  public string $custom_json;
  public string $deployment_id;
  public int $duration;
  public string $iam_user_arn;
  public Strings $instance_ids;
  public string $stack_id;
  public string $status;
}

class DeploymentCommand {
  public DeploymentCommandArgs $args;
  public DeploymentCommandName $name;
}

class DeploymentCommandArgs {
}

class DeploymentCommandName {
}

class Deployments {
}

class DeregisterEcsClusterRequest {
  public string $ecs_cluster_arn;
}

class DeregisterElasticIpRequest {
  public string $elastic_ip;
}

class DeregisterInstanceRequest {
  public string $instance_id;
}

class DeregisterRdsDbInstanceRequest {
  public string $rds_db_instance_arn;
}

class DeregisterVolumeRequest {
  public string $volume_id;
}

class DescribeAgentVersionsRequest {
  public StackConfigurationManager $configuration_manager;
  public string $stack_id;
}

class DescribeAgentVersionsResult {
  public AgentVersions $agent_versions;
}

class DescribeAppsRequest {
  public Strings $app_ids;
  public string $stack_id;
}

class DescribeAppsResult {
  public Apps $apps;
}

class DescribeCommandsRequest {
  public Strings $command_ids;
  public string $deployment_id;
  public string $instance_id;
}

class DescribeCommandsResult {
  public Commands $commands;
}

class DescribeDeploymentsRequest {
  public string $app_id;
  public Strings $deployment_ids;
  public string $stack_id;
}

class DescribeDeploymentsResult {
  public Deployments $deployments;
}

class DescribeEcsClustersRequest {
  public Strings $ecs_cluster_arns;
  public int $max_results;
  public string $next_token;
  public string $stack_id;
}

class DescribeEcsClustersResult {
  public EcsClusters $ecs_clusters;
  public string $next_token;
}

class DescribeElasticIpsRequest {
  public string $instance_id;
  public Strings $ips;
  public string $stack_id;
}

class DescribeElasticIpsResult {
  public ElasticIps $elastic_ips;
}

class DescribeElasticLoadBalancersRequest {
  public Strings $layer_ids;
  public string $stack_id;
}

class DescribeElasticLoadBalancersResult {
  public ElasticLoadBalancers $elastic_load_balancers;
}

class DescribeInstancesRequest {
  public Strings $instance_ids;
  public string $layer_id;
  public string $stack_id;
}

class DescribeInstancesResult {
  public Instances $instances;
}

class DescribeLayersRequest {
  public Strings $layer_ids;
  public string $stack_id;
}

class DescribeLayersResult {
  public Layers $layers;
}

class DescribeLoadBasedAutoScalingRequest {
  public Strings $layer_ids;
}

class DescribeLoadBasedAutoScalingResult {
  public LoadBasedAutoScalingConfigurations $load_based_auto_scaling_configurations;
}

class DescribeMyUserProfileResult {
  public SelfUserProfile $user_profile;
}

class DescribeOperatingSystemsResponse {
  public OperatingSystems $operating_systems;
}

class DescribePermissionsRequest {
  public string $iam_user_arn;
  public string $stack_id;
}

class DescribePermissionsResult {
  public Permissions $permissions;
}

class DescribeRaidArraysRequest {
  public string $instance_id;
  public Strings $raid_array_ids;
  public string $stack_id;
}

class DescribeRaidArraysResult {
  public RaidArrays $raid_arrays;
}

class DescribeRdsDbInstancesRequest {
  public Strings $rds_db_instance_arns;
  public string $stack_id;
}

class DescribeRdsDbInstancesResult {
  public RdsDbInstances $rds_db_instances;
}

class DescribeServiceErrorsRequest {
  public string $instance_id;
  public Strings $service_error_ids;
  public string $stack_id;
}

class DescribeServiceErrorsResult {
  public ServiceErrors $service_errors;
}

class DescribeStackProvisioningParametersRequest {
  public string $stack_id;
}

class DescribeStackProvisioningParametersResult {
  public string $agent_installer_url;
  public Parameters $parameters;
}

class DescribeStackSummaryRequest {
  public string $stack_id;
}

class DescribeStackSummaryResult {
  public StackSummary $stack_summary;
}

class DescribeStacksRequest {
  public Strings $stack_ids;
}

class DescribeStacksResult {
  public Stacks $stacks;
}

class DescribeTimeBasedAutoScalingRequest {
  public Strings $instance_ids;
}

class DescribeTimeBasedAutoScalingResult {
  public TimeBasedAutoScalingConfigurations $time_based_auto_scaling_configurations;
}

class DescribeUserProfilesRequest {
  public Strings $iam_user_arns;
}

class DescribeUserProfilesResult {
  public UserProfiles $user_profiles;
}

class DescribeVolumesRequest {
  public string $instance_id;
  public string $raid_array_id;
  public string $stack_id;
  public Strings $volume_ids;
}

class DescribeVolumesResult {
  public Volumes $volumes;
}

class DetachElasticLoadBalancerRequest {
  public string $elastic_load_balancer_name;
  public string $layer_id;
}

class DisassociateElasticIpRequest {
  public string $elastic_ip;
}

class Double {
}

class EbsBlockDevice {
  public boolean $delete_on_termination;
  public int $iops;
  public string $snapshot_id;
  public int $volume_size;
  public VolumeType $volume_type;
}

class EcsCluster {
  public string $ecs_cluster_arn;
  public string $ecs_cluster_name;
  public DateTime $registered_at;
  public string $stack_id;
}

class EcsClusters {
}

class ElasticIp {
  public string $domain;
  public string $instance_id;
  public string $ip;
  public string $name;
  public string $region;
}

class ElasticIps {
}

class ElasticLoadBalancer {
  public Strings $availability_zones;
  public string $dns_name;
  public Strings $ec_2_instance_ids;
  public string $elastic_load_balancer_name;
  public string $layer_id;
  public string $region;
  public string $stack_id;
  public Strings $subnet_ids;
  public string $vpc_id;
}

class ElasticLoadBalancers {
}

class EnvironmentVariable {
  public string $key;
  public boolean $secure;
  public string $value;
}

class EnvironmentVariables {
}

class GetHostnameSuggestionRequest {
  public string $layer_id;
}

class GetHostnameSuggestionResult {
  public string $hostname;
  public string $layer_id;
}

class GrantAccessRequest {
  public string $instance_id;
  public ValidForInMinutes $valid_for_in_minutes;
}

class GrantAccessResult {
  public TemporaryCredential $temporary_credential;
}

class Hour {
}

class Instance {
  public string $agent_version;
  public string $ami_id;
  public Architecture $architecture;
  public string $arn;
  public AutoScalingType $auto_scaling_type;
  public string $availability_zone;
  public BlockDeviceMappings $block_device_mappings;
  public DateTime $created_at;
  public boolean $ebs_optimized;
  public string $ec_2_instance_id;
  public string $ecs_cluster_arn;
  public string $ecs_container_instance_arn;
  public string $elastic_ip;
  public string $hostname;
  public string $infrastructure_class;
  public boolean $install_updates_on_boot;
  public string $instance_id;
  public string $instance_profile_arn;
  public string $instance_type;
  public string $last_service_error_id;
  public Strings $layer_ids;
  public string $os;
  public string $platform;
  public string $private_dns;
  public string $private_ip;
  public string $public_dns;
  public string $public_ip;
  public string $registered_by;
  public string $reported_agent_version;
  public ReportedOs $reported_os;
  public RootDeviceType $root_device_type;
  public string $root_device_volume_id;
  public Strings $security_group_ids;
  public string $ssh_host_dsa_key_fingerprint;
  public string $ssh_host_rsa_key_fingerprint;
  public string $ssh_key_name;
  public string $stack_id;
  public string $status;
  public string $subnet_id;
  public string $tenancy;
  public VirtualizationType $virtualization_type;
}

class InstanceIdentity {
  public string $document;
  public string $signature;
}

class Instances {
}

class InstancesCount {
  public int $assigning;
  public int $booting;
  public int $connection_lost;
  public int $deregistering;
  public int $online;
  public int $pending;
  public int $rebooting;
  public int $registered;
  public int $registering;
  public int $requested;
  public int $running_setup;
  public int $setup_failed;
  public int $shutting_down;
  public int $start_failed;
  public int $stop_failed;
  public int $stopped;
  public int $stopping;
  public int $terminated;
  public int $terminating;
  public int $unassigning;
}

class Integer {
}

class Layer {
  public string $arn;
  public LayerAttributes $attributes;
  public boolean $auto_assign_elastic_ips;
  public boolean $auto_assign_public_ips;
  public CloudWatchLogsConfiguration $cloud_watch_logs_configuration;
  public DateTime $created_at;
  public string $custom_instance_profile_arn;
  public string $custom_json;
  public Recipes $custom_recipes;
  public Strings $custom_security_group_ids;
  public Recipes $default_recipes;
  public Strings $default_security_group_names;
  public boolean $enable_auto_healing;
  public boolean $install_updates_on_boot;
  public string $layer_id;
  public LifecycleEventConfiguration $lifecycle_event_configuration;
  public string $name;
  public Strings $packages;
  public string $shortname;
  public string $stack_id;
  public LayerType $type;
  public boolean $use_ebs_optimized_instances;
  public VolumeConfigurations $volume_configurations;
}

class LayerAttributes {
}

class LayerAttributesKeys {
}

class LayerType {
}

class Layers {
}

class LifecycleEventConfiguration {
  public ShutdownEventConfiguration $shutdown;
}

class ListTagsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceArn $resource_arn;
}

class ListTagsResult {
  public NextToken $next_token;
  public Tags $tags;
}

class LoadBasedAutoScalingConfiguration {
  public AutoScalingThresholds $down_scaling;
  public boolean $enable;
  public string $layer_id;
  public AutoScalingThresholds $up_scaling;
}

class LoadBasedAutoScalingConfigurations {
}

class MaxResults {
}

class Minute {
}

class NextToken {
}

class OperatingSystem {
  public OperatingSystemConfigurationManagers $configuration_managers;
  public string $id;
  public string $name;
  public string $reported_name;
  public string $reported_version;
  public boolean $supported;
  public string $type;
}

class OperatingSystemConfigurationManager {
  public string $name;
  public string $version;
}

class OperatingSystemConfigurationManagers {
}

class OperatingSystems {
}

class Parameters {
}

class Permission {
  public boolean $allow_ssh;
  public boolean $allow_sudo;
  public string $iam_user_arn;
  public string $level;
  public string $stack_id;
}

class Permissions {
}

class RaidArray {
  public string $availability_zone;
  public DateTime $created_at;
  public string $device;
  public string $instance_id;
  public int $iops;
  public string $mount_point;
  public string $name;
  public int $number_of_disks;
  public string $raid_array_id;
  public int $raid_level;
  public int $size;
  public string $stack_id;
  public string $volume_type;
}

class RaidArrays {
}

class RdsDbInstance {
  public string $address;
  public string $db_instance_identifier;
  public string $db_password;
  public string $db_user;
  public string $engine;
  public boolean $missing_on_rds;
  public string $rds_db_instance_arn;
  public string $region;
  public string $stack_id;
}

class RdsDbInstances {
}

class RebootInstanceRequest {
  public string $instance_id;
}

class Recipes {
  public Strings $configure;
  public Strings $deploy;
  public Strings $setup;
  public Strings $shutdown;
  public Strings $undeploy;
}

class RegisterEcsClusterRequest {
  public string $ecs_cluster_arn;
  public string $stack_id;
}

class RegisterEcsClusterResult {
  public string $ecs_cluster_arn;
}

class RegisterElasticIpRequest {
  public string $elastic_ip;
  public string $stack_id;
}

class RegisterElasticIpResult {
  public string $elastic_ip;
}

class RegisterInstanceRequest {
  public string $hostname;
  public InstanceIdentity $instance_identity;
  public string $private_ip;
  public string $public_ip;
  public string $rsa_public_key;
  public string $rsa_public_key_fingerprint;
  public string $stack_id;
}

class RegisterInstanceResult {
  public string $instance_id;
}

class RegisterRdsDbInstanceRequest {
  public string $db_password;
  public string $db_user;
  public string $rds_db_instance_arn;
  public string $stack_id;
}

class RegisterVolumeRequest {
  public string $ec_2_volume_id;
  public string $stack_id;
}

class RegisterVolumeResult {
  public string $volume_id;
}

class ReportedOs {
  public string $family;
  public string $name;
  public string $version;
}

class ResourceArn {
}

class ResourceNotFoundException {
  public string $message;
}

class RootDeviceType {
}

class SelfUserProfile {
  public string $iam_user_arn;
  public string $name;
  public string $ssh_public_key;
  public string $ssh_username;
}

class ServiceError {
  public DateTime $created_at;
  public string $instance_id;
  public string $message;
  public string $service_error_id;
  public string $stack_id;
  public string $type;
}

class ServiceErrors {
}

class SetLoadBasedAutoScalingRequest {
  public AutoScalingThresholds $down_scaling;
  public boolean $enable;
  public string $layer_id;
  public AutoScalingThresholds $up_scaling;
}

class SetPermissionRequest {
  public boolean $allow_ssh;
  public boolean $allow_sudo;
  public string $iam_user_arn;
  public string $level;
  public string $stack_id;
}

class SetTimeBasedAutoScalingRequest {
  public WeeklyAutoScalingSchedule $auto_scaling_schedule;
  public string $instance_id;
}

class ShutdownEventConfiguration {
  public boolean $delay_until_elb_connections_drained;
  public int $execution_timeout;
}

class Source {
  public string $password;
  public string $revision;
  public string $ssh_key;
  public SourceType $type;
  public string $url;
  public string $username;
}

class SourceType {
}

class SslConfiguration {
  public string $certificate;
  public string $chain;
  public string $private_key;
}

class Stack {
  public string $agent_version;
  public string $arn;
  public StackAttributes $attributes;
  public ChefConfiguration $chef_configuration;
  public StackConfigurationManager $configuration_manager;
  public DateTime $created_at;
  public Source $custom_cookbooks_source;
  public string $custom_json;
  public string $default_availability_zone;
  public string $default_instance_profile_arn;
  public string $default_os;
  public RootDeviceType $default_root_device_type;
  public string $default_ssh_key_name;
  public string $default_subnet_id;
  public string $hostname_theme;
  public string $name;
  public string $region;
  public string $service_role_arn;
  public string $stack_id;
  public boolean $use_custom_cookbooks;
  public boolean $use_opsworks_security_groups;
  public string $vpc_id;
}

class StackAttributes {
}

class StackAttributesKeys {
}

class StackConfigurationManager {
  public string $name;
  public string $version;
}

class StackSummary {
  public int $apps_count;
  public string $arn;
  public InstancesCount $instances_count;
  public int $layers_count;
  public string $name;
  public string $stack_id;
}

class Stacks {
}

class StartInstanceRequest {
  public string $instance_id;
}

class StartStackRequest {
  public string $stack_id;
}

class StopInstanceRequest {
  public boolean $force;
  public string $instance_id;
}

class StopStackRequest {
  public string $stack_id;
}

class String {
}

class Strings {
}

class Switch {
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class TemporaryCredential {
  public string $instance_id;
  public string $password;
  public string $username;
  public int $valid_for_in_minutes;
}

class TimeBasedAutoScalingConfiguration {
  public WeeklyAutoScalingSchedule $auto_scaling_schedule;
  public string $instance_id;
}

class TimeBasedAutoScalingConfigurations {
}

class UnassignInstanceRequest {
  public string $instance_id;
}

class UnassignVolumeRequest {
  public string $volume_id;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeys $tag_keys;
}

class UpdateAppRequest {
  public string $app_id;
  public Source $app_source;
  public AppAttributes $attributes;
  public DataSources $data_sources;
  public string $description;
  public Strings $domains;
  public boolean $enable_ssl;
  public EnvironmentVariables $environment;
  public string $name;
  public SslConfiguration $ssl_configuration;
  public AppType $type;
}

class UpdateElasticIpRequest {
  public string $elastic_ip;
  public string $name;
}

class UpdateInstanceRequest {
  public string $agent_version;
  public string $ami_id;
  public Architecture $architecture;
  public AutoScalingType $auto_scaling_type;
  public boolean $ebs_optimized;
  public string $hostname;
  public boolean $install_updates_on_boot;
  public string $instance_id;
  public string $instance_type;
  public Strings $layer_ids;
  public string $os;
  public string $ssh_key_name;
}

class UpdateLayerRequest {
  public LayerAttributes $attributes;
  public boolean $auto_assign_elastic_ips;
  public boolean $auto_assign_public_ips;
  public CloudWatchLogsConfiguration $cloud_watch_logs_configuration;
  public string $custom_instance_profile_arn;
  public string $custom_json;
  public Recipes $custom_recipes;
  public Strings $custom_security_group_ids;
  public boolean $enable_auto_healing;
  public boolean $install_updates_on_boot;
  public string $layer_id;
  public LifecycleEventConfiguration $lifecycle_event_configuration;
  public string $name;
  public Strings $packages;
  public string $shortname;
  public boolean $use_ebs_optimized_instances;
  public VolumeConfigurations $volume_configurations;
}

class UpdateMyUserProfileRequest {
  public string $ssh_public_key;
}

class UpdateRdsDbInstanceRequest {
  public string $db_password;
  public string $db_user;
  public string $rds_db_instance_arn;
}

class UpdateStackRequest {
  public string $agent_version;
  public StackAttributes $attributes;
  public ChefConfiguration $chef_configuration;
  public StackConfigurationManager $configuration_manager;
  public Source $custom_cookbooks_source;
  public string $custom_json;
  public string $default_availability_zone;
  public string $default_instance_profile_arn;
  public string $default_os;
  public RootDeviceType $default_root_device_type;
  public string $default_ssh_key_name;
  public string $default_subnet_id;
  public string $hostname_theme;
  public string $name;
  public string $service_role_arn;
  public string $stack_id;
  public boolean $use_custom_cookbooks;
  public boolean $use_opsworks_security_groups;
}

class UpdateUserProfileRequest {
  public boolean $allow_self_management;
  public string $iam_user_arn;
  public string $ssh_public_key;
  public string $ssh_username;
}

class UpdateVolumeRequest {
  public string $mount_point;
  public string $name;
  public string $volume_id;
}

class UserProfile {
  public boolean $allow_self_management;
  public string $iam_user_arn;
  public string $name;
  public string $ssh_public_key;
  public string $ssh_username;
}

class UserProfiles {
}

class ValidForInMinutes {
}

class ValidationException {
  public string $message;
}

class VirtualizationType {
}

class Volume {
  public string $availability_zone;
  public string $device;
  public string $ec_2_volume_id;
  public boolean $encrypted;
  public string $instance_id;
  public int $iops;
  public string $mount_point;
  public string $name;
  public string $raid_array_id;
  public string $region;
  public int $size;
  public string $status;
  public string $volume_id;
  public string $volume_type;
}

class VolumeConfiguration {
  public boolean $encrypted;
  public int $iops;
  public string $mount_point;
  public int $number_of_disks;
  public int $raid_level;
  public int $size;
  public string $volume_type;
}

class VolumeConfigurations {
}

class VolumeType {
}

class Volumes {
}

class WeeklyAutoScalingSchedule {
  public DailyAutoScalingSchedule $friday;
  public DailyAutoScalingSchedule $monday;
  public DailyAutoScalingSchedule $saturday;
  public DailyAutoScalingSchedule $sunday;
  public DailyAutoScalingSchedule $thursday;
  public DailyAutoScalingSchedule $tuesday;
  public DailyAutoScalingSchedule $wednesday;
}

