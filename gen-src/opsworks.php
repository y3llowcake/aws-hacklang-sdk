<?hh // strict
namespace slack\aws\opsworks;

interface OpsWorks {
  public function AssignInstance(AssignInstanceRequest $in): Awaitable<\Errors\Error>;
  public function AssignVolume(AssignVolumeRequest $in): Awaitable<\Errors\Error>;
  public function AssociateElasticIp(AssociateElasticIpRequest $in): Awaitable<\Errors\Error>;
  public function AttachElasticLoadBalancer(AttachElasticLoadBalancerRequest $in): Awaitable<\Errors\Error>;
  public function CloneStack(CloneStackRequest $in): Awaitable<\Errors\Result<CloneStackResult>>;
  public function CreateApp(CreateAppRequest $in): Awaitable<\Errors\Result<CreateAppResult>>;
  public function CreateDeployment(CreateDeploymentRequest $in): Awaitable<\Errors\Result<CreateDeploymentResult>>;
  public function CreateInstance(CreateInstanceRequest $in): Awaitable<\Errors\Result<CreateInstanceResult>>;
  public function CreateLayer(CreateLayerRequest $in): Awaitable<\Errors\Result<CreateLayerResult>>;
  public function CreateStack(CreateStackRequest $in): Awaitable<\Errors\Result<CreateStackResult>>;
  public function CreateUserProfile(CreateUserProfileRequest $in): Awaitable<\Errors\Result<CreateUserProfileResult>>;
  public function DeleteApp(DeleteAppRequest $in): Awaitable<\Errors\Error>;
  public function DeleteInstance(DeleteInstanceRequest $in): Awaitable<\Errors\Error>;
  public function DeleteLayer(DeleteLayerRequest $in): Awaitable<\Errors\Error>;
  public function DeleteStack(DeleteStackRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUserProfile(DeleteUserProfileRequest $in): Awaitable<\Errors\Error>;
  public function DeregisterEcsCluster(DeregisterEcsClusterRequest $in): Awaitable<\Errors\Error>;
  public function DeregisterElasticIp(DeregisterElasticIpRequest $in): Awaitable<\Errors\Error>;
  public function DeregisterInstance(DeregisterInstanceRequest $in): Awaitable<\Errors\Error>;
  public function DeregisterRdsDbInstance(DeregisterRdsDbInstanceRequest $in): Awaitable<\Errors\Error>;
  public function DeregisterVolume(DeregisterVolumeRequest $in): Awaitable<\Errors\Error>;
  public function DescribeAgentVersions(DescribeAgentVersionsRequest $in): Awaitable<\Errors\Result<DescribeAgentVersionsResult>>;
  public function DescribeApps(DescribeAppsRequest $in): Awaitable<\Errors\Result<DescribeAppsResult>>;
  public function DescribeCommands(DescribeCommandsRequest $in): Awaitable<\Errors\Result<DescribeCommandsResult>>;
  public function DescribeDeployments(DescribeDeploymentsRequest $in): Awaitable<\Errors\Result<DescribeDeploymentsResult>>;
  public function DescribeEcsClusters(DescribeEcsClustersRequest $in): Awaitable<\Errors\Result<DescribeEcsClustersResult>>;
  public function DescribeElasticIps(DescribeElasticIpsRequest $in): Awaitable<\Errors\Result<DescribeElasticIpsResult>>;
  public function DescribeElasticLoadBalancers(DescribeElasticLoadBalancersRequest $in): Awaitable<\Errors\Result<DescribeElasticLoadBalancersResult>>;
  public function DescribeInstances(DescribeInstancesRequest $in): Awaitable<\Errors\Result<DescribeInstancesResult>>;
  public function DescribeLayers(DescribeLayersRequest $in): Awaitable<\Errors\Result<DescribeLayersResult>>;
  public function DescribeLoadBasedAutoScaling(DescribeLoadBasedAutoScalingRequest $in): Awaitable<\Errors\Result<DescribeLoadBasedAutoScalingResult>>;
  public function DescribeMyUserProfile( $in): Awaitable<\Errors\Result<DescribeMyUserProfileResult>>;
  public function DescribeOperatingSystems( $in): Awaitable<\Errors\Result<DescribeOperatingSystemsResponse>>;
  public function DescribePermissions(DescribePermissionsRequest $in): Awaitable<\Errors\Result<DescribePermissionsResult>>;
  public function DescribeRaidArrays(DescribeRaidArraysRequest $in): Awaitable<\Errors\Result<DescribeRaidArraysResult>>;
  public function DescribeRdsDbInstances(DescribeRdsDbInstancesRequest $in): Awaitable<\Errors\Result<DescribeRdsDbInstancesResult>>;
  public function DescribeServiceErrors(DescribeServiceErrorsRequest $in): Awaitable<\Errors\Result<DescribeServiceErrorsResult>>;
  public function DescribeStackProvisioningParameters(DescribeStackProvisioningParametersRequest $in): Awaitable<\Errors\Result<DescribeStackProvisioningParametersResult>>;
  public function DescribeStackSummary(DescribeStackSummaryRequest $in): Awaitable<\Errors\Result<DescribeStackSummaryResult>>;
  public function DescribeStacks(DescribeStacksRequest $in): Awaitable<\Errors\Result<DescribeStacksResult>>;
  public function DescribeTimeBasedAutoScaling(DescribeTimeBasedAutoScalingRequest $in): Awaitable<\Errors\Result<DescribeTimeBasedAutoScalingResult>>;
  public function DescribeUserProfiles(DescribeUserProfilesRequest $in): Awaitable<\Errors\Result<DescribeUserProfilesResult>>;
  public function DescribeVolumes(DescribeVolumesRequest $in): Awaitable<\Errors\Result<DescribeVolumesResult>>;
  public function DetachElasticLoadBalancer(DetachElasticLoadBalancerRequest $in): Awaitable<\Errors\Error>;
  public function DisassociateElasticIp(DisassociateElasticIpRequest $in): Awaitable<\Errors\Error>;
  public function GetHostnameSuggestion(GetHostnameSuggestionRequest $in): Awaitable<\Errors\Result<GetHostnameSuggestionResult>>;
  public function GrantAccess(GrantAccessRequest $in): Awaitable<\Errors\Result<GrantAccessResult>>;
  public function ListTags(ListTagsRequest $in): Awaitable<\Errors\Result<ListTagsResult>>;
  public function RebootInstance(RebootInstanceRequest $in): Awaitable<\Errors\Error>;
  public function RegisterEcsCluster(RegisterEcsClusterRequest $in): Awaitable<\Errors\Result<RegisterEcsClusterResult>>;
  public function RegisterElasticIp(RegisterElasticIpRequest $in): Awaitable<\Errors\Result<RegisterElasticIpResult>>;
  public function RegisterInstance(RegisterInstanceRequest $in): Awaitable<\Errors\Result<RegisterInstanceResult>>;
  public function RegisterRdsDbInstance(RegisterRdsDbInstanceRequest $in): Awaitable<\Errors\Error>;
  public function RegisterVolume(RegisterVolumeRequest $in): Awaitable<\Errors\Result<RegisterVolumeResult>>;
  public function SetLoadBasedAutoScaling(SetLoadBasedAutoScalingRequest $in): Awaitable<\Errors\Error>;
  public function SetPermission(SetPermissionRequest $in): Awaitable<\Errors\Error>;
  public function SetTimeBasedAutoScaling(SetTimeBasedAutoScalingRequest $in): Awaitable<\Errors\Error>;
  public function StartInstance(StartInstanceRequest $in): Awaitable<\Errors\Error>;
  public function StartStack(StartStackRequest $in): Awaitable<\Errors\Error>;
  public function StopInstance(StopInstanceRequest $in): Awaitable<\Errors\Error>;
  public function StopStack(StopStackRequest $in): Awaitable<\Errors\Error>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UnassignInstance(UnassignInstanceRequest $in): Awaitable<\Errors\Error>;
  public function UnassignVolume(UnassignVolumeRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateApp(UpdateAppRequest $in): Awaitable<\Errors\Error>;
  public function UpdateElasticIp(UpdateElasticIpRequest $in): Awaitable<\Errors\Error>;
  public function UpdateInstance(UpdateInstanceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateLayer(UpdateLayerRequest $in): Awaitable<\Errors\Error>;
  public function UpdateMyUserProfile(UpdateMyUserProfileRequest $in): Awaitable<\Errors\Error>;
  public function UpdateRdsDbInstance(UpdateRdsDbInstanceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateStack(UpdateStackRequest $in): Awaitable<\Errors\Error>;
  public function UpdateUserProfile(UpdateUserProfileRequest $in): Awaitable<\Errors\Error>;
  public function UpdateVolume(UpdateVolumeRequest $in): Awaitable<\Errors\Error>;
}

class AgentVersion {
  public ?StackConfigurationManager $configuration_manager;
  public string $version;

  public function __construct(shape(
    ?'configuration_manager' => ?StackConfigurationManager,
    ?'version' => string,
  ) $s = shape()) {
    $this->configuration_manager = $s['configuration_manager'] ?? null;
    $this->version = $s['version'] ?? '';
  }
}

type AgentVersions = vec<AgentVersion>;

class App {
  public string $app_id;
  public ?Source $app_source;
  public ?AppAttributes $attributes;
  public string $created_at;
  public ?DataSources $data_sources;
  public string $description;
  public ?Strings $domains;
  public bool $enable_ssl;
  public ?EnvironmentVariables $environment;
  public string $name;
  public string $shortname;
  public ?SslConfiguration $ssl_configuration;
  public string $stack_id;
  public ?AppType $type;

  public function __construct(shape(
    ?'app_id' => string,
    ?'app_source' => ?Source,
    ?'attributes' => ?AppAttributes,
    ?'created_at' => string,
    ?'data_sources' => ?DataSources,
    ?'description' => string,
    ?'domains' => ?Strings,
    ?'enable_ssl' => bool,
    ?'environment' => ?EnvironmentVariables,
    ?'name' => string,
    ?'shortname' => string,
    ?'ssl_configuration' => ?SslConfiguration,
    ?'stack_id' => string,
    ?'type' => ?AppType,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->app_source = $s['app_source'] ?? null;
    $this->attributes = $s['attributes'] ?? dict[];
    $this->created_at = $s['created_at'] ?? '';
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->domains = $s['domains'] ?? vec[];
    $this->enable_ssl = $s['enable_ssl'] ?? false;
    $this->environment = $s['environment'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->shortname = $s['shortname'] ?? '';
    $this->ssl_configuration = $s['ssl_configuration'] ?? null;
    $this->stack_id = $s['stack_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type AppAttributes = dict<AppAttributesKeys, String>;

type AppAttributesKeys = string;

type AppType = string;

type Apps = vec<App>;

type Architecture = string;

class AssignInstanceRequest {
  public string $instance_id;
  public ?Strings $layer_ids;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'layer_ids' => ?Strings,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->layer_ids = $s['layer_ids'] ?? vec[];
  }
}

class AssignVolumeRequest {
  public string $instance_id;
  public string $volume_id;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class AssociateElasticIpRequest {
  public string $elastic_ip;
  public string $instance_id;

  public function __construct(shape(
    ?'elastic_ip' => string,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->elastic_ip = $s['elastic_ip'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class AttachElasticLoadBalancerRequest {
  public string $elastic_load_balancer_name;
  public string $layer_id;

  public function __construct(shape(
    ?'elastic_load_balancer_name' => string,
    ?'layer_id' => string,
  ) $s = shape()) {
    $this->elastic_load_balancer_name = $s['elastic_load_balancer_name'] ?? '';
    $this->layer_id = $s['layer_id'] ?? '';
  }
}

class AutoScalingThresholds {
  public ?Strings $alarms;
  public ?Double $cpu_threshold;
  public ?Minute $ignore_metrics_time;
  public int $instance_count;
  public ?Double $load_threshold;
  public ?Double $memory_threshold;
  public ?Minute $thresholds_wait_time;

  public function __construct(shape(
    ?'alarms' => ?Strings,
    ?'cpu_threshold' => ?Double,
    ?'ignore_metrics_time' => ?Minute,
    ?'instance_count' => int,
    ?'load_threshold' => ?Double,
    ?'memory_threshold' => ?Double,
    ?'thresholds_wait_time' => ?Minute,
  ) $s = shape()) {
    $this->alarms = $s['alarms'] ?? vec[];
    $this->cpu_threshold = $s['cpu_threshold'] ?? 0.0;
    $this->ignore_metrics_time = $s['ignore_metrics_time'] ?? 0;
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->load_threshold = $s['load_threshold'] ?? 0.0;
    $this->memory_threshold = $s['memory_threshold'] ?? 0.0;
    $this->thresholds_wait_time = $s['thresholds_wait_time'] ?? 0;
  }
}

type AutoScalingType = string;

class BlockDeviceMapping {
  public string $device_name;
  public ?EbsBlockDevice $ebs;
  public string $no_device;
  public string $virtual_name;

  public function __construct(shape(
    ?'device_name' => string,
    ?'ebs' => ?EbsBlockDevice,
    ?'no_device' => string,
    ?'virtual_name' => string,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->ebs = $s['ebs'] ?? null;
    $this->no_device = $s['no_device'] ?? '';
    $this->virtual_name = $s['virtual_name'] ?? '';
  }
}

type BlockDeviceMappings = vec<BlockDeviceMapping>;

type Boolean = bool;

class ChefConfiguration {
  public string $berkshelf_version;
  public bool $manage_berkshelf;

  public function __construct(shape(
    ?'berkshelf_version' => string,
    ?'manage_berkshelf' => bool,
  ) $s = shape()) {
    $this->berkshelf_version = $s['berkshelf_version'] ?? '';
    $this->manage_berkshelf = $s['manage_berkshelf'] ?? false;
  }
}

class CloneStackRequest {
  public string $agent_version;
  public ?StackAttributes $attributes;
  public ?ChefConfiguration $chef_configuration;
  public ?Strings $clone_app_ids;
  public bool $clone_permissions;
  public ?StackConfigurationManager $configuration_manager;
  public ?Source $custom_cookbooks_source;
  public string $custom_json;
  public string $default_availability_zone;
  public string $default_instance_profile_arn;
  public string $default_os;
  public ?RootDeviceType $default_root_device_type;
  public string $default_ssh_key_name;
  public string $default_subnet_id;
  public string $hostname_theme;
  public string $name;
  public string $region;
  public string $service_role_arn;
  public string $source_stack_id;
  public bool $use_custom_cookbooks;
  public bool $use_opsworks_security_groups;
  public string $vpc_id;

  public function __construct(shape(
    ?'agent_version' => string,
    ?'attributes' => ?StackAttributes,
    ?'chef_configuration' => ?ChefConfiguration,
    ?'clone_app_ids' => ?Strings,
    ?'clone_permissions' => bool,
    ?'configuration_manager' => ?StackConfigurationManager,
    ?'custom_cookbooks_source' => ?Source,
    ?'custom_json' => string,
    ?'default_availability_zone' => string,
    ?'default_instance_profile_arn' => string,
    ?'default_os' => string,
    ?'default_root_device_type' => ?RootDeviceType,
    ?'default_ssh_key_name' => string,
    ?'default_subnet_id' => string,
    ?'hostname_theme' => string,
    ?'name' => string,
    ?'region' => string,
    ?'service_role_arn' => string,
    ?'source_stack_id' => string,
    ?'use_custom_cookbooks' => bool,
    ?'use_opsworks_security_groups' => bool,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->agent_version = $s['agent_version'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->chef_configuration = $s['chef_configuration'] ?? null;
    $this->clone_app_ids = $s['clone_app_ids'] ?? vec[];
    $this->clone_permissions = $s['clone_permissions'] ?? false;
    $this->configuration_manager = $s['configuration_manager'] ?? null;
    $this->custom_cookbooks_source = $s['custom_cookbooks_source'] ?? null;
    $this->custom_json = $s['custom_json'] ?? '';
    $this->default_availability_zone = $s['default_availability_zone'] ?? '';
    $this->default_instance_profile_arn = $s['default_instance_profile_arn'] ?? '';
    $this->default_os = $s['default_os'] ?? '';
    $this->default_root_device_type = $s['default_root_device_type'] ?? '';
    $this->default_ssh_key_name = $s['default_ssh_key_name'] ?? '';
    $this->default_subnet_id = $s['default_subnet_id'] ?? '';
    $this->hostname_theme = $s['hostname_theme'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->source_stack_id = $s['source_stack_id'] ?? '';
    $this->use_custom_cookbooks = $s['use_custom_cookbooks'] ?? false;
    $this->use_opsworks_security_groups = $s['use_opsworks_security_groups'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CloneStackResult {
  public string $stack_id;

  public function __construct(shape(
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class CloudWatchLogsConfiguration {
  public bool $enabled;
  public ?CloudWatchLogsLogStreams $log_streams;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'log_streams' => ?CloudWatchLogsLogStreams,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->log_streams = $s['log_streams'] ?? vec[];
  }
}

type CloudWatchLogsEncoding = string;

type CloudWatchLogsInitialPosition = string;

class CloudWatchLogsLogStream {
  public int $batch_count;
  public int $batch_size;
  public int $buffer_duration;
  public string $datetime_format;
  public ?CloudWatchLogsEncoding $encoding;
  public string $file;
  public string $file_fingerprint_lines;
  public ?CloudWatchLogsInitialPosition $initial_position;
  public string $log_group_name;
  public string $multi_line_start_pattern;
  public ?CloudWatchLogsTimeZone $time_zone;

  public function __construct(shape(
    ?'batch_count' => int,
    ?'batch_size' => int,
    ?'buffer_duration' => int,
    ?'datetime_format' => string,
    ?'encoding' => ?CloudWatchLogsEncoding,
    ?'file' => string,
    ?'file_fingerprint_lines' => string,
    ?'initial_position' => ?CloudWatchLogsInitialPosition,
    ?'log_group_name' => string,
    ?'multi_line_start_pattern' => string,
    ?'time_zone' => ?CloudWatchLogsTimeZone,
  ) $s = shape()) {
    $this->batch_count = $s['batch_count'] ?? 0;
    $this->batch_size = $s['batch_size'] ?? 0;
    $this->buffer_duration = $s['buffer_duration'] ?? 0;
    $this->datetime_format = $s['datetime_format'] ?? '';
    $this->encoding = $s['encoding'] ?? '';
    $this->file = $s['file'] ?? '';
    $this->file_fingerprint_lines = $s['file_fingerprint_lines'] ?? '';
    $this->initial_position = $s['initial_position'] ?? '';
    $this->log_group_name = $s['log_group_name'] ?? '';
    $this->multi_line_start_pattern = $s['multi_line_start_pattern'] ?? '';
    $this->time_zone = $s['time_zone'] ?? '';
  }
}

type CloudWatchLogsLogStreams = vec<CloudWatchLogsLogStream>;

type CloudWatchLogsTimeZone = string;

class Command {
  public ?DateTime $acknowledged_at;
  public string $command_id;
  public ?DateTime $completed_at;
  public ?DateTime $created_at;
  public string $deployment_id;
  public int $exit_code;
  public string $instance_id;
  public string $log_url;
  public string $status;
  public string $type;

  public function __construct(shape(
    ?'acknowledged_at' => ?DateTime,
    ?'command_id' => string,
    ?'completed_at' => ?DateTime,
    ?'created_at' => ?DateTime,
    ?'deployment_id' => string,
    ?'exit_code' => int,
    ?'instance_id' => string,
    ?'log_url' => string,
    ?'status' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->acknowledged_at = $s['acknowledged_at'] ?? '';
    $this->command_id = $s['command_id'] ?? '';
    $this->completed_at = $s['completed_at'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->exit_code = $s['exit_code'] ?? 0;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->log_url = $s['log_url'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type Commands = vec<Command>;

class CreateAppRequest {
  public ?Source $app_source;
  public ?AppAttributes $attributes;
  public ?DataSources $data_sources;
  public string $description;
  public ?Strings $domains;
  public bool $enable_ssl;
  public ?EnvironmentVariables $environment;
  public string $name;
  public string $shortname;
  public ?SslConfiguration $ssl_configuration;
  public string $stack_id;
  public ?AppType $type;

  public function __construct(shape(
    ?'app_source' => ?Source,
    ?'attributes' => ?AppAttributes,
    ?'data_sources' => ?DataSources,
    ?'description' => string,
    ?'domains' => ?Strings,
    ?'enable_ssl' => bool,
    ?'environment' => ?EnvironmentVariables,
    ?'name' => string,
    ?'shortname' => string,
    ?'ssl_configuration' => ?SslConfiguration,
    ?'stack_id' => string,
    ?'type' => ?AppType,
  ) $s = shape()) {
    $this->app_source = $s['app_source'] ?? null;
    $this->attributes = $s['attributes'] ?? dict[];
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->domains = $s['domains'] ?? vec[];
    $this->enable_ssl = $s['enable_ssl'] ?? false;
    $this->environment = $s['environment'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->shortname = $s['shortname'] ?? '';
    $this->ssl_configuration = $s['ssl_configuration'] ?? null;
    $this->stack_id = $s['stack_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class CreateAppResult {
  public string $app_id;

  public function __construct(shape(
    ?'app_id' => string,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class CreateDeploymentRequest {
  public string $app_id;
  public ?DeploymentCommand $command;
  public string $comment;
  public string $custom_json;
  public ?Strings $instance_ids;
  public ?Strings $layer_ids;
  public string $stack_id;

  public function __construct(shape(
    ?'app_id' => string,
    ?'command' => ?DeploymentCommand,
    ?'comment' => string,
    ?'custom_json' => string,
    ?'instance_ids' => ?Strings,
    ?'layer_ids' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->command = $s['command'] ?? null;
    $this->comment = $s['comment'] ?? '';
    $this->custom_json = $s['custom_json'] ?? '';
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->layer_ids = $s['layer_ids'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class CreateDeploymentResult {
  public string $deployment_id;

  public function __construct(shape(
    ?'deployment_id' => string,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

class CreateInstanceRequest {
  public string $agent_version;
  public string $ami_id;
  public ?Architecture $architecture;
  public ?AutoScalingType $auto_scaling_type;
  public string $availability_zone;
  public ?BlockDeviceMappings $block_device_mappings;
  public bool $ebs_optimized;
  public string $hostname;
  public bool $install_updates_on_boot;
  public string $instance_type;
  public ?Strings $layer_ids;
  public string $os;
  public ?RootDeviceType $root_device_type;
  public string $ssh_key_name;
  public string $stack_id;
  public string $subnet_id;
  public string $tenancy;
  public string $virtualization_type;

  public function __construct(shape(
    ?'agent_version' => string,
    ?'ami_id' => string,
    ?'architecture' => ?Architecture,
    ?'auto_scaling_type' => ?AutoScalingType,
    ?'availability_zone' => string,
    ?'block_device_mappings' => ?BlockDeviceMappings,
    ?'ebs_optimized' => bool,
    ?'hostname' => string,
    ?'install_updates_on_boot' => bool,
    ?'instance_type' => string,
    ?'layer_ids' => ?Strings,
    ?'os' => string,
    ?'root_device_type' => ?RootDeviceType,
    ?'ssh_key_name' => string,
    ?'stack_id' => string,
    ?'subnet_id' => string,
    ?'tenancy' => string,
    ?'virtualization_type' => string,
  ) $s = shape()) {
    $this->agent_version = $s['agent_version'] ?? '';
    $this->ami_id = $s['ami_id'] ?? '';
    $this->architecture = $s['architecture'] ?? '';
    $this->auto_scaling_type = $s['auto_scaling_type'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->hostname = $s['hostname'] ?? '';
    $this->install_updates_on_boot = $s['install_updates_on_boot'] ?? false;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->layer_ids = $s['layer_ids'] ?? vec[];
    $this->os = $s['os'] ?? '';
    $this->root_device_type = $s['root_device_type'] ?? '';
    $this->ssh_key_name = $s['ssh_key_name'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tenancy = $s['tenancy'] ?? '';
    $this->virtualization_type = $s['virtualization_type'] ?? '';
  }
}

class CreateInstanceResult {
  public string $instance_id;

  public function __construct(shape(
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class CreateLayerRequest {
  public ?LayerAttributes $attributes;
  public bool $auto_assign_elastic_ips;
  public bool $auto_assign_public_ips;
  public ?CloudWatchLogsConfiguration $cloud_watch_logs_configuration;
  public string $custom_instance_profile_arn;
  public string $custom_json;
  public ?Recipes $custom_recipes;
  public ?Strings $custom_security_group_ids;
  public bool $enable_auto_healing;
  public bool $install_updates_on_boot;
  public ?LifecycleEventConfiguration $lifecycle_event_configuration;
  public string $name;
  public ?Strings $packages;
  public string $shortname;
  public string $stack_id;
  public ?LayerType $type;
  public bool $use_ebs_optimized_instances;
  public ?VolumeConfigurations $volume_configurations;

  public function __construct(shape(
    ?'attributes' => ?LayerAttributes,
    ?'auto_assign_elastic_ips' => bool,
    ?'auto_assign_public_ips' => bool,
    ?'cloud_watch_logs_configuration' => ?CloudWatchLogsConfiguration,
    ?'custom_instance_profile_arn' => string,
    ?'custom_json' => string,
    ?'custom_recipes' => ?Recipes,
    ?'custom_security_group_ids' => ?Strings,
    ?'enable_auto_healing' => bool,
    ?'install_updates_on_boot' => bool,
    ?'lifecycle_event_configuration' => ?LifecycleEventConfiguration,
    ?'name' => string,
    ?'packages' => ?Strings,
    ?'shortname' => string,
    ?'stack_id' => string,
    ?'type' => ?LayerType,
    ?'use_ebs_optimized_instances' => bool,
    ?'volume_configurations' => ?VolumeConfigurations,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->auto_assign_elastic_ips = $s['auto_assign_elastic_ips'] ?? false;
    $this->auto_assign_public_ips = $s['auto_assign_public_ips'] ?? false;
    $this->cloud_watch_logs_configuration = $s['cloud_watch_logs_configuration'] ?? null;
    $this->custom_instance_profile_arn = $s['custom_instance_profile_arn'] ?? '';
    $this->custom_json = $s['custom_json'] ?? '';
    $this->custom_recipes = $s['custom_recipes'] ?? null;
    $this->custom_security_group_ids = $s['custom_security_group_ids'] ?? vec[];
    $this->enable_auto_healing = $s['enable_auto_healing'] ?? false;
    $this->install_updates_on_boot = $s['install_updates_on_boot'] ?? false;
    $this->lifecycle_event_configuration = $s['lifecycle_event_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->packages = $s['packages'] ?? vec[];
    $this->shortname = $s['shortname'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->use_ebs_optimized_instances = $s['use_ebs_optimized_instances'] ?? false;
    $this->volume_configurations = $s['volume_configurations'] ?? vec[];
  }
}

class CreateLayerResult {
  public string $layer_id;

  public function __construct(shape(
    ?'layer_id' => string,
  ) $s = shape()) {
    $this->layer_id = $s['layer_id'] ?? '';
  }
}

class CreateStackRequest {
  public string $agent_version;
  public ?StackAttributes $attributes;
  public ?ChefConfiguration $chef_configuration;
  public ?StackConfigurationManager $configuration_manager;
  public ?Source $custom_cookbooks_source;
  public string $custom_json;
  public string $default_availability_zone;
  public string $default_instance_profile_arn;
  public string $default_os;
  public ?RootDeviceType $default_root_device_type;
  public string $default_ssh_key_name;
  public string $default_subnet_id;
  public string $hostname_theme;
  public string $name;
  public string $region;
  public string $service_role_arn;
  public bool $use_custom_cookbooks;
  public bool $use_opsworks_security_groups;
  public string $vpc_id;

  public function __construct(shape(
    ?'agent_version' => string,
    ?'attributes' => ?StackAttributes,
    ?'chef_configuration' => ?ChefConfiguration,
    ?'configuration_manager' => ?StackConfigurationManager,
    ?'custom_cookbooks_source' => ?Source,
    ?'custom_json' => string,
    ?'default_availability_zone' => string,
    ?'default_instance_profile_arn' => string,
    ?'default_os' => string,
    ?'default_root_device_type' => ?RootDeviceType,
    ?'default_ssh_key_name' => string,
    ?'default_subnet_id' => string,
    ?'hostname_theme' => string,
    ?'name' => string,
    ?'region' => string,
    ?'service_role_arn' => string,
    ?'use_custom_cookbooks' => bool,
    ?'use_opsworks_security_groups' => bool,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->agent_version = $s['agent_version'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->chef_configuration = $s['chef_configuration'] ?? null;
    $this->configuration_manager = $s['configuration_manager'] ?? null;
    $this->custom_cookbooks_source = $s['custom_cookbooks_source'] ?? null;
    $this->custom_json = $s['custom_json'] ?? '';
    $this->default_availability_zone = $s['default_availability_zone'] ?? '';
    $this->default_instance_profile_arn = $s['default_instance_profile_arn'] ?? '';
    $this->default_os = $s['default_os'] ?? '';
    $this->default_root_device_type = $s['default_root_device_type'] ?? '';
    $this->default_ssh_key_name = $s['default_ssh_key_name'] ?? '';
    $this->default_subnet_id = $s['default_subnet_id'] ?? '';
    $this->hostname_theme = $s['hostname_theme'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->use_custom_cookbooks = $s['use_custom_cookbooks'] ?? false;
    $this->use_opsworks_security_groups = $s['use_opsworks_security_groups'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateStackResult {
  public string $stack_id;

  public function __construct(shape(
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class CreateUserProfileRequest {
  public bool $allow_self_management;
  public string $iam_user_arn;
  public string $ssh_public_key;
  public string $ssh_username;

  public function __construct(shape(
    ?'allow_self_management' => bool,
    ?'iam_user_arn' => string,
    ?'ssh_public_key' => string,
    ?'ssh_username' => string,
  ) $s = shape()) {
    $this->allow_self_management = $s['allow_self_management'] ?? false;
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->ssh_public_key = $s['ssh_public_key'] ?? '';
    $this->ssh_username = $s['ssh_username'] ?? '';
  }
}

class CreateUserProfileResult {
  public string $iam_user_arn;

  public function __construct(shape(
    ?'iam_user_arn' => string,
  ) $s = shape()) {
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
  }
}

type DailyAutoScalingSchedule = dict<Hour, Switch>;

class DataSource {
  public string $arn;
  public string $database_name;
  public string $type;

  public function __construct(shape(
    ?'arn' => string,
    ?'database_name' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type DataSources = vec<DataSource>;

type DateTime = string;

class DeleteAppRequest {
  public string $app_id;

  public function __construct(shape(
    ?'app_id' => string,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
  }
}

class DeleteInstanceRequest {
  public bool $delete_elastic_ip;
  public bool $delete_volumes;
  public string $instance_id;

  public function __construct(shape(
    ?'delete_elastic_ip' => bool,
    ?'delete_volumes' => bool,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->delete_elastic_ip = $s['delete_elastic_ip'] ?? false;
    $this->delete_volumes = $s['delete_volumes'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class DeleteLayerRequest {
  public string $layer_id;

  public function __construct(shape(
    ?'layer_id' => string,
  ) $s = shape()) {
    $this->layer_id = $s['layer_id'] ?? '';
  }
}

class DeleteStackRequest {
  public string $stack_id;

  public function __construct(shape(
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DeleteUserProfileRequest {
  public string $iam_user_arn;

  public function __construct(shape(
    ?'iam_user_arn' => string,
  ) $s = shape()) {
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
  }
}

class Deployment {
  public string $app_id;
  public ?DeploymentCommand $command;
  public string $comment;
  public ?DateTime $completed_at;
  public ?DateTime $created_at;
  public string $custom_json;
  public string $deployment_id;
  public int $duration;
  public string $iam_user_arn;
  public ?Strings $instance_ids;
  public string $stack_id;
  public string $status;

  public function __construct(shape(
    ?'app_id' => string,
    ?'command' => ?DeploymentCommand,
    ?'comment' => string,
    ?'completed_at' => ?DateTime,
    ?'created_at' => ?DateTime,
    ?'custom_json' => string,
    ?'deployment_id' => string,
    ?'duration' => int,
    ?'iam_user_arn' => string,
    ?'instance_ids' => ?Strings,
    ?'stack_id' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->command = $s['command'] ?? null;
    $this->comment = $s['comment'] ?? '';
    $this->completed_at = $s['completed_at'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->custom_json = $s['custom_json'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DeploymentCommand {
  public ?DeploymentCommandArgs $args;
  public ?DeploymentCommandName $name;

  public function __construct(shape(
    ?'args' => ?DeploymentCommandArgs,
    ?'name' => ?DeploymentCommandName,
  ) $s = shape()) {
    $this->args = $s['args'] ?? dict[];
    $this->name = $s['name'] ?? '';
  }
}

type DeploymentCommandArgs = dict<String, Strings>;

type DeploymentCommandName = string;

type Deployments = vec<Deployment>;

class DeregisterEcsClusterRequest {
  public string $ecs_cluster_arn;

  public function __construct(shape(
    ?'ecs_cluster_arn' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arn = $s['ecs_cluster_arn'] ?? '';
  }
}

class DeregisterElasticIpRequest {
  public string $elastic_ip;

  public function __construct(shape(
    ?'elastic_ip' => string,
  ) $s = shape()) {
    $this->elastic_ip = $s['elastic_ip'] ?? '';
  }
}

class DeregisterInstanceRequest {
  public string $instance_id;

  public function __construct(shape(
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class DeregisterRdsDbInstanceRequest {
  public string $rds_db_instance_arn;

  public function __construct(shape(
    ?'rds_db_instance_arn' => string,
  ) $s = shape()) {
    $this->rds_db_instance_arn = $s['rds_db_instance_arn'] ?? '';
  }
}

class DeregisterVolumeRequest {
  public string $volume_id;

  public function __construct(shape(
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class DescribeAgentVersionsRequest {
  public ?StackConfigurationManager $configuration_manager;
  public string $stack_id;

  public function __construct(shape(
    ?'configuration_manager' => ?StackConfigurationManager,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->configuration_manager = $s['configuration_manager'] ?? null;
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeAgentVersionsResult {
  public ?AgentVersions $agent_versions;

  public function __construct(shape(
    ?'agent_versions' => ?AgentVersions,
  ) $s = shape()) {
    $this->agent_versions = $s['agent_versions'] ?? vec[];
  }
}

class DescribeAppsRequest {
  public ?Strings $app_ids;
  public string $stack_id;

  public function __construct(shape(
    ?'app_ids' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->app_ids = $s['app_ids'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeAppsResult {
  public ?Apps $apps;

  public function __construct(shape(
    ?'apps' => ?Apps,
  ) $s = shape()) {
    $this->apps = $s['apps'] ?? vec[];
  }
}

class DescribeCommandsRequest {
  public ?Strings $command_ids;
  public string $deployment_id;
  public string $instance_id;

  public function __construct(shape(
    ?'command_ids' => ?Strings,
    ?'deployment_id' => string,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->command_ids = $s['command_ids'] ?? vec[];
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class DescribeCommandsResult {
  public ?Commands $commands;

  public function __construct(shape(
    ?'commands' => ?Commands,
  ) $s = shape()) {
    $this->commands = $s['commands'] ?? vec[];
  }
}

class DescribeDeploymentsRequest {
  public string $app_id;
  public ?Strings $deployment_ids;
  public string $stack_id;

  public function __construct(shape(
    ?'app_id' => string,
    ?'deployment_ids' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->deployment_ids = $s['deployment_ids'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeDeploymentsResult {
  public ?Deployments $deployments;

  public function __construct(shape(
    ?'deployments' => ?Deployments,
  ) $s = shape()) {
    $this->deployments = $s['deployments'] ?? vec[];
  }
}

class DescribeEcsClustersRequest {
  public ?Strings $ecs_cluster_arns;
  public int $max_results;
  public string $next_token;
  public string $stack_id;

  public function __construct(shape(
    ?'ecs_cluster_arns' => ?Strings,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arns = $s['ecs_cluster_arns'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeEcsClustersResult {
  public ?EcsClusters $ecs_clusters;
  public string $next_token;

  public function __construct(shape(
    ?'ecs_clusters' => ?EcsClusters,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->ecs_clusters = $s['ecs_clusters'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeElasticIpsRequest {
  public string $instance_id;
  public ?Strings $ips;
  public string $stack_id;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'ips' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->ips = $s['ips'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeElasticIpsResult {
  public ?ElasticIps $elastic_ips;

  public function __construct(shape(
    ?'elastic_ips' => ?ElasticIps,
  ) $s = shape()) {
    $this->elastic_ips = $s['elastic_ips'] ?? vec[];
  }
}

class DescribeElasticLoadBalancersRequest {
  public ?Strings $layer_ids;
  public string $stack_id;

  public function __construct(shape(
    ?'layer_ids' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->layer_ids = $s['layer_ids'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeElasticLoadBalancersResult {
  public ?ElasticLoadBalancers $elastic_load_balancers;

  public function __construct(shape(
    ?'elastic_load_balancers' => ?ElasticLoadBalancers,
  ) $s = shape()) {
    $this->elastic_load_balancers = $s['elastic_load_balancers'] ?? vec[];
  }
}

class DescribeInstancesRequest {
  public ?Strings $instance_ids;
  public string $layer_id;
  public string $stack_id;

  public function __construct(shape(
    ?'instance_ids' => ?Strings,
    ?'layer_id' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->layer_id = $s['layer_id'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeInstancesResult {
  public ?Instances $instances;

  public function __construct(shape(
    ?'instances' => ?Instances,
  ) $s = shape()) {
    $this->instances = $s['instances'] ?? vec[];
  }
}

class DescribeLayersRequest {
  public ?Strings $layer_ids;
  public string $stack_id;

  public function __construct(shape(
    ?'layer_ids' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->layer_ids = $s['layer_ids'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeLayersResult {
  public ?Layers $layers;

  public function __construct(shape(
    ?'layers' => ?Layers,
  ) $s = shape()) {
    $this->layers = $s['layers'] ?? vec[];
  }
}

class DescribeLoadBasedAutoScalingRequest {
  public ?Strings $layer_ids;

  public function __construct(shape(
    ?'layer_ids' => ?Strings,
  ) $s = shape()) {
    $this->layer_ids = $s['layer_ids'] ?? vec[];
  }
}

class DescribeLoadBasedAutoScalingResult {
  public ?LoadBasedAutoScalingConfigurations $load_based_auto_scaling_configurations;

  public function __construct(shape(
    ?'load_based_auto_scaling_configurations' => ?LoadBasedAutoScalingConfigurations,
  ) $s = shape()) {
    $this->load_based_auto_scaling_configurations = $s['load_based_auto_scaling_configurations'] ?? vec[];
  }
}

class DescribeMyUserProfileResult {
  public ?SelfUserProfile $user_profile;

  public function __construct(shape(
    ?'user_profile' => ?SelfUserProfile,
  ) $s = shape()) {
    $this->user_profile = $s['user_profile'] ?? null;
  }
}

class DescribeOperatingSystemsResponse {
  public ?OperatingSystems $operating_systems;

  public function __construct(shape(
    ?'operating_systems' => ?OperatingSystems,
  ) $s = shape()) {
    $this->operating_systems = $s['operating_systems'] ?? vec[];
  }
}

class DescribePermissionsRequest {
  public string $iam_user_arn;
  public string $stack_id;

  public function __construct(shape(
    ?'iam_user_arn' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribePermissionsResult {
  public ?Permissions $permissions;

  public function __construct(shape(
    ?'permissions' => ?Permissions,
  ) $s = shape()) {
    $this->permissions = $s['permissions'] ?? vec[];
  }
}

class DescribeRaidArraysRequest {
  public string $instance_id;
  public ?Strings $raid_array_ids;
  public string $stack_id;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'raid_array_ids' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->raid_array_ids = $s['raid_array_ids'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeRaidArraysResult {
  public ?RaidArrays $raid_arrays;

  public function __construct(shape(
    ?'raid_arrays' => ?RaidArrays,
  ) $s = shape()) {
    $this->raid_arrays = $s['raid_arrays'] ?? vec[];
  }
}

class DescribeRdsDbInstancesRequest {
  public ?Strings $rds_db_instance_arns;
  public string $stack_id;

  public function __construct(shape(
    ?'rds_db_instance_arns' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->rds_db_instance_arns = $s['rds_db_instance_arns'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeRdsDbInstancesResult {
  public ?RdsDbInstances $rds_db_instances;

  public function __construct(shape(
    ?'rds_db_instances' => ?RdsDbInstances,
  ) $s = shape()) {
    $this->rds_db_instances = $s['rds_db_instances'] ?? vec[];
  }
}

class DescribeServiceErrorsRequest {
  public string $instance_id;
  public ?Strings $service_error_ids;
  public string $stack_id;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'service_error_ids' => ?Strings,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->service_error_ids = $s['service_error_ids'] ?? vec[];
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeServiceErrorsResult {
  public ?ServiceErrors $service_errors;

  public function __construct(shape(
    ?'service_errors' => ?ServiceErrors,
  ) $s = shape()) {
    $this->service_errors = $s['service_errors'] ?? vec[];
  }
}

class DescribeStackProvisioningParametersRequest {
  public string $stack_id;

  public function __construct(shape(
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeStackProvisioningParametersResult {
  public string $agent_installer_url;
  public ?Parameters $parameters;

  public function __construct(shape(
    ?'agent_installer_url' => string,
    ?'parameters' => ?Parameters,
  ) $s = shape()) {
    $this->agent_installer_url = $s['agent_installer_url'] ?? '';
    $this->parameters = $s['parameters'] ?? dict[];
  }
}

class DescribeStackSummaryRequest {
  public string $stack_id;

  public function __construct(shape(
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class DescribeStackSummaryResult {
  public ?StackSummary $stack_summary;

  public function __construct(shape(
    ?'stack_summary' => ?StackSummary,
  ) $s = shape()) {
    $this->stack_summary = $s['stack_summary'] ?? null;
  }
}

class DescribeStacksRequest {
  public ?Strings $stack_ids;

  public function __construct(shape(
    ?'stack_ids' => ?Strings,
  ) $s = shape()) {
    $this->stack_ids = $s['stack_ids'] ?? vec[];
  }
}

class DescribeStacksResult {
  public ?Stacks $stacks;

  public function __construct(shape(
    ?'stacks' => ?Stacks,
  ) $s = shape()) {
    $this->stacks = $s['stacks'] ?? vec[];
  }
}

class DescribeTimeBasedAutoScalingRequest {
  public ?Strings $instance_ids;

  public function __construct(shape(
    ?'instance_ids' => ?Strings,
  ) $s = shape()) {
    $this->instance_ids = $s['instance_ids'] ?? vec[];
  }
}

class DescribeTimeBasedAutoScalingResult {
  public ?TimeBasedAutoScalingConfigurations $time_based_auto_scaling_configurations;

  public function __construct(shape(
    ?'time_based_auto_scaling_configurations' => ?TimeBasedAutoScalingConfigurations,
  ) $s = shape()) {
    $this->time_based_auto_scaling_configurations = $s['time_based_auto_scaling_configurations'] ?? vec[];
  }
}

class DescribeUserProfilesRequest {
  public ?Strings $iam_user_arns;

  public function __construct(shape(
    ?'iam_user_arns' => ?Strings,
  ) $s = shape()) {
    $this->iam_user_arns = $s['iam_user_arns'] ?? vec[];
  }
}

class DescribeUserProfilesResult {
  public ?UserProfiles $user_profiles;

  public function __construct(shape(
    ?'user_profiles' => ?UserProfiles,
  ) $s = shape()) {
    $this->user_profiles = $s['user_profiles'] ?? vec[];
  }
}

class DescribeVolumesRequest {
  public string $instance_id;
  public string $raid_array_id;
  public string $stack_id;
  public ?Strings $volume_ids;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'raid_array_id' => string,
    ?'stack_id' => string,
    ?'volume_ids' => ?Strings,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->raid_array_id = $s['raid_array_id'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->volume_ids = $s['volume_ids'] ?? vec[];
  }
}

class DescribeVolumesResult {
  public ?Volumes $volumes;

  public function __construct(shape(
    ?'volumes' => ?Volumes,
  ) $s = shape()) {
    $this->volumes = $s['volumes'] ?? vec[];
  }
}

class DetachElasticLoadBalancerRequest {
  public string $elastic_load_balancer_name;
  public string $layer_id;

  public function __construct(shape(
    ?'elastic_load_balancer_name' => string,
    ?'layer_id' => string,
  ) $s = shape()) {
    $this->elastic_load_balancer_name = $s['elastic_load_balancer_name'] ?? '';
    $this->layer_id = $s['layer_id'] ?? '';
  }
}

class DisassociateElasticIpRequest {
  public string $elastic_ip;

  public function __construct(shape(
    ?'elastic_ip' => string,
  ) $s = shape()) {
    $this->elastic_ip = $s['elastic_ip'] ?? '';
  }
}

type Double = float;

class EbsBlockDevice {
  public bool $delete_on_termination;
  public int $iops;
  public string $snapshot_id;
  public int $volume_size;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'delete_on_termination' => bool,
    ?'iops' => int,
    ?'snapshot_id' => string,
    ?'volume_size' => int,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class EcsCluster {
  public string $ecs_cluster_arn;
  public string $ecs_cluster_name;
  public ?DateTime $registered_at;
  public string $stack_id;

  public function __construct(shape(
    ?'ecs_cluster_arn' => string,
    ?'ecs_cluster_name' => string,
    ?'registered_at' => ?DateTime,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arn = $s['ecs_cluster_arn'] ?? '';
    $this->ecs_cluster_name = $s['ecs_cluster_name'] ?? '';
    $this->registered_at = $s['registered_at'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

type EcsClusters = vec<EcsCluster>;

class ElasticIp {
  public string $domain;
  public string $instance_id;
  public string $ip;
  public string $name;
  public string $region;

  public function __construct(shape(
    ?'domain' => string,
    ?'instance_id' => string,
    ?'ip' => string,
    ?'name' => string,
    ?'region' => string,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->ip = $s['ip'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->region = $s['region'] ?? '';
  }
}

type ElasticIps = vec<ElasticIp>;

class ElasticLoadBalancer {
  public ?Strings $availability_zones;
  public string $dns_name;
  public ?Strings $ec_2_instance_ids;
  public string $elastic_load_balancer_name;
  public string $layer_id;
  public string $region;
  public string $stack_id;
  public ?Strings $subnet_ids;
  public string $vpc_id;

  public function __construct(shape(
    ?'availability_zones' => ?Strings,
    ?'dns_name' => string,
    ?'ec_2_instance_ids' => ?Strings,
    ?'elastic_load_balancer_name' => string,
    ?'layer_id' => string,
    ?'region' => string,
    ?'stack_id' => string,
    ?'subnet_ids' => ?Strings,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->dns_name = $s['dns_name'] ?? '';
    $this->ec_2_instance_ids = $s['ec_2_instance_ids'] ?? vec[];
    $this->elastic_load_balancer_name = $s['elastic_load_balancer_name'] ?? '';
    $this->layer_id = $s['layer_id'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type ElasticLoadBalancers = vec<ElasticLoadBalancer>;

class EnvironmentVariable {
  public string $key;
  public bool $secure;
  public string $value;

  public function __construct(shape(
    ?'key' => string,
    ?'secure' => bool,
    ?'value' => string,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->secure = $s['secure'] ?? false;
    $this->value = $s['value'] ?? '';
  }
}

type EnvironmentVariables = vec<EnvironmentVariable>;

class GetHostnameSuggestionRequest {
  public string $layer_id;

  public function __construct(shape(
    ?'layer_id' => string,
  ) $s = shape()) {
    $this->layer_id = $s['layer_id'] ?? '';
  }
}

class GetHostnameSuggestionResult {
  public string $hostname;
  public string $layer_id;

  public function __construct(shape(
    ?'hostname' => string,
    ?'layer_id' => string,
  ) $s = shape()) {
    $this->hostname = $s['hostname'] ?? '';
    $this->layer_id = $s['layer_id'] ?? '';
  }
}

class GrantAccessRequest {
  public string $instance_id;
  public ?ValidForInMinutes $valid_for_in_minutes;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'valid_for_in_minutes' => ?ValidForInMinutes,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->valid_for_in_minutes = $s['valid_for_in_minutes'] ?? 0;
  }
}

class GrantAccessResult {
  public ?TemporaryCredential $temporary_credential;

  public function __construct(shape(
    ?'temporary_credential' => ?TemporaryCredential,
  ) $s = shape()) {
    $this->temporary_credential = $s['temporary_credential'] ?? null;
  }
}

type Hour = string;

class Instance {
  public string $agent_version;
  public string $ami_id;
  public ?Architecture $architecture;
  public string $arn;
  public ?AutoScalingType $auto_scaling_type;
  public string $availability_zone;
  public ?BlockDeviceMappings $block_device_mappings;
  public ?DateTime $created_at;
  public bool $ebs_optimized;
  public string $ec_2_instance_id;
  public string $ecs_cluster_arn;
  public string $ecs_container_instance_arn;
  public string $elastic_ip;
  public string $hostname;
  public string $infrastructure_class;
  public bool $install_updates_on_boot;
  public string $instance_id;
  public string $instance_profile_arn;
  public string $instance_type;
  public string $last_service_error_id;
  public ?Strings $layer_ids;
  public string $os;
  public string $platform;
  public string $private_dns;
  public string $private_ip;
  public string $public_dns;
  public string $public_ip;
  public string $registered_by;
  public string $reported_agent_version;
  public ?ReportedOs $reported_os;
  public ?RootDeviceType $root_device_type;
  public string $root_device_volume_id;
  public ?Strings $security_group_ids;
  public string $ssh_host_dsa_key_fingerprint;
  public string $ssh_host_rsa_key_fingerprint;
  public string $ssh_key_name;
  public string $stack_id;
  public string $status;
  public string $subnet_id;
  public string $tenancy;
  public ?VirtualizationType $virtualization_type;

  public function __construct(shape(
    ?'agent_version' => string,
    ?'ami_id' => string,
    ?'architecture' => ?Architecture,
    ?'arn' => string,
    ?'auto_scaling_type' => ?AutoScalingType,
    ?'availability_zone' => string,
    ?'block_device_mappings' => ?BlockDeviceMappings,
    ?'created_at' => ?DateTime,
    ?'ebs_optimized' => bool,
    ?'ec_2_instance_id' => string,
    ?'ecs_cluster_arn' => string,
    ?'ecs_container_instance_arn' => string,
    ?'elastic_ip' => string,
    ?'hostname' => string,
    ?'infrastructure_class' => string,
    ?'install_updates_on_boot' => bool,
    ?'instance_id' => string,
    ?'instance_profile_arn' => string,
    ?'instance_type' => string,
    ?'last_service_error_id' => string,
    ?'layer_ids' => ?Strings,
    ?'os' => string,
    ?'platform' => string,
    ?'private_dns' => string,
    ?'private_ip' => string,
    ?'public_dns' => string,
    ?'public_ip' => string,
    ?'registered_by' => string,
    ?'reported_agent_version' => string,
    ?'reported_os' => ?ReportedOs,
    ?'root_device_type' => ?RootDeviceType,
    ?'root_device_volume_id' => string,
    ?'security_group_ids' => ?Strings,
    ?'ssh_host_dsa_key_fingerprint' => string,
    ?'ssh_host_rsa_key_fingerprint' => string,
    ?'ssh_key_name' => string,
    ?'stack_id' => string,
    ?'status' => string,
    ?'subnet_id' => string,
    ?'tenancy' => string,
    ?'virtualization_type' => ?VirtualizationType,
  ) $s = shape()) {
    $this->agent_version = $s['agent_version'] ?? '';
    $this->ami_id = $s['ami_id'] ?? '';
    $this->architecture = $s['architecture'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->auto_scaling_type = $s['auto_scaling_type'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->created_at = $s['created_at'] ?? '';
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->ec_2_instance_id = $s['ec_2_instance_id'] ?? '';
    $this->ecs_cluster_arn = $s['ecs_cluster_arn'] ?? '';
    $this->ecs_container_instance_arn = $s['ecs_container_instance_arn'] ?? '';
    $this->elastic_ip = $s['elastic_ip'] ?? '';
    $this->hostname = $s['hostname'] ?? '';
    $this->infrastructure_class = $s['infrastructure_class'] ?? '';
    $this->install_updates_on_boot = $s['install_updates_on_boot'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_profile_arn = $s['instance_profile_arn'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->last_service_error_id = $s['last_service_error_id'] ?? '';
    $this->layer_ids = $s['layer_ids'] ?? vec[];
    $this->os = $s['os'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->private_dns = $s['private_dns'] ?? '';
    $this->private_ip = $s['private_ip'] ?? '';
    $this->public_dns = $s['public_dns'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
    $this->registered_by = $s['registered_by'] ?? '';
    $this->reported_agent_version = $s['reported_agent_version'] ?? '';
    $this->reported_os = $s['reported_os'] ?? null;
    $this->root_device_type = $s['root_device_type'] ?? '';
    $this->root_device_volume_id = $s['root_device_volume_id'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->ssh_host_dsa_key_fingerprint = $s['ssh_host_dsa_key_fingerprint'] ?? '';
    $this->ssh_host_rsa_key_fingerprint = $s['ssh_host_rsa_key_fingerprint'] ?? '';
    $this->ssh_key_name = $s['ssh_key_name'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tenancy = $s['tenancy'] ?? '';
    $this->virtualization_type = $s['virtualization_type'] ?? '';
  }
}

class InstanceIdentity {
  public string $document;
  public string $signature;

  public function __construct(shape(
    ?'document' => string,
    ?'signature' => string,
  ) $s = shape()) {
    $this->document = $s['document'] ?? '';
    $this->signature = $s['signature'] ?? '';
  }
}

type Instances = vec<Instance>;

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

  public function __construct(shape(
    ?'assigning' => int,
    ?'booting' => int,
    ?'connection_lost' => int,
    ?'deregistering' => int,
    ?'online' => int,
    ?'pending' => int,
    ?'rebooting' => int,
    ?'registered' => int,
    ?'registering' => int,
    ?'requested' => int,
    ?'running_setup' => int,
    ?'setup_failed' => int,
    ?'shutting_down' => int,
    ?'start_failed' => int,
    ?'stop_failed' => int,
    ?'stopped' => int,
    ?'stopping' => int,
    ?'terminated' => int,
    ?'terminating' => int,
    ?'unassigning' => int,
  ) $s = shape()) {
    $this->assigning = $s['assigning'] ?? 0;
    $this->booting = $s['booting'] ?? 0;
    $this->connection_lost = $s['connection_lost'] ?? 0;
    $this->deregistering = $s['deregistering'] ?? 0;
    $this->online = $s['online'] ?? 0;
    $this->pending = $s['pending'] ?? 0;
    $this->rebooting = $s['rebooting'] ?? 0;
    $this->registered = $s['registered'] ?? 0;
    $this->registering = $s['registering'] ?? 0;
    $this->requested = $s['requested'] ?? 0;
    $this->running_setup = $s['running_setup'] ?? 0;
    $this->setup_failed = $s['setup_failed'] ?? 0;
    $this->shutting_down = $s['shutting_down'] ?? 0;
    $this->start_failed = $s['start_failed'] ?? 0;
    $this->stop_failed = $s['stop_failed'] ?? 0;
    $this->stopped = $s['stopped'] ?? 0;
    $this->stopping = $s['stopping'] ?? 0;
    $this->terminated = $s['terminated'] ?? 0;
    $this->terminating = $s['terminating'] ?? 0;
    $this->unassigning = $s['unassigning'] ?? 0;
  }
}

type Integer = int;

class Layer {
  public string $arn;
  public ?LayerAttributes $attributes;
  public bool $auto_assign_elastic_ips;
  public bool $auto_assign_public_ips;
  public ?CloudWatchLogsConfiguration $cloud_watch_logs_configuration;
  public ?DateTime $created_at;
  public string $custom_instance_profile_arn;
  public string $custom_json;
  public ?Recipes $custom_recipes;
  public ?Strings $custom_security_group_ids;
  public ?Recipes $default_recipes;
  public ?Strings $default_security_group_names;
  public bool $enable_auto_healing;
  public bool $install_updates_on_boot;
  public string $layer_id;
  public ?LifecycleEventConfiguration $lifecycle_event_configuration;
  public string $name;
  public ?Strings $packages;
  public string $shortname;
  public string $stack_id;
  public ?LayerType $type;
  public bool $use_ebs_optimized_instances;
  public ?VolumeConfigurations $volume_configurations;

  public function __construct(shape(
    ?'arn' => string,
    ?'attributes' => ?LayerAttributes,
    ?'auto_assign_elastic_ips' => bool,
    ?'auto_assign_public_ips' => bool,
    ?'cloud_watch_logs_configuration' => ?CloudWatchLogsConfiguration,
    ?'created_at' => ?DateTime,
    ?'custom_instance_profile_arn' => string,
    ?'custom_json' => string,
    ?'custom_recipes' => ?Recipes,
    ?'custom_security_group_ids' => ?Strings,
    ?'default_recipes' => ?Recipes,
    ?'default_security_group_names' => ?Strings,
    ?'enable_auto_healing' => bool,
    ?'install_updates_on_boot' => bool,
    ?'layer_id' => string,
    ?'lifecycle_event_configuration' => ?LifecycleEventConfiguration,
    ?'name' => string,
    ?'packages' => ?Strings,
    ?'shortname' => string,
    ?'stack_id' => string,
    ?'type' => ?LayerType,
    ?'use_ebs_optimized_instances' => bool,
    ?'volume_configurations' => ?VolumeConfigurations,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->auto_assign_elastic_ips = $s['auto_assign_elastic_ips'] ?? false;
    $this->auto_assign_public_ips = $s['auto_assign_public_ips'] ?? false;
    $this->cloud_watch_logs_configuration = $s['cloud_watch_logs_configuration'] ?? null;
    $this->created_at = $s['created_at'] ?? '';
    $this->custom_instance_profile_arn = $s['custom_instance_profile_arn'] ?? '';
    $this->custom_json = $s['custom_json'] ?? '';
    $this->custom_recipes = $s['custom_recipes'] ?? null;
    $this->custom_security_group_ids = $s['custom_security_group_ids'] ?? vec[];
    $this->default_recipes = $s['default_recipes'] ?? null;
    $this->default_security_group_names = $s['default_security_group_names'] ?? vec[];
    $this->enable_auto_healing = $s['enable_auto_healing'] ?? false;
    $this->install_updates_on_boot = $s['install_updates_on_boot'] ?? false;
    $this->layer_id = $s['layer_id'] ?? '';
    $this->lifecycle_event_configuration = $s['lifecycle_event_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->packages = $s['packages'] ?? vec[];
    $this->shortname = $s['shortname'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->use_ebs_optimized_instances = $s['use_ebs_optimized_instances'] ?? false;
    $this->volume_configurations = $s['volume_configurations'] ?? vec[];
  }
}

type LayerAttributes = dict<LayerAttributesKeys, String>;

type LayerAttributesKeys = string;

type LayerType = string;

type Layers = vec<Layer>;

class LifecycleEventConfiguration {
  public ?ShutdownEventConfiguration $shutdown;

  public function __construct(shape(
    ?'shutdown' => ?ShutdownEventConfiguration,
  ) $s = shape()) {
    $this->shutdown = $s['shutdown'] ?? null;
  }
}

class ListTagsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsResult {
  public ?NextToken $next_token;
  public ?Tags $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class LoadBasedAutoScalingConfiguration {
  public ?AutoScalingThresholds $down_scaling;
  public bool $enable;
  public string $layer_id;
  public ?AutoScalingThresholds $up_scaling;

  public function __construct(shape(
    ?'down_scaling' => ?AutoScalingThresholds,
    ?'enable' => bool,
    ?'layer_id' => string,
    ?'up_scaling' => ?AutoScalingThresholds,
  ) $s = shape()) {
    $this->down_scaling = $s['down_scaling'] ?? null;
    $this->enable = $s['enable'] ?? false;
    $this->layer_id = $s['layer_id'] ?? '';
    $this->up_scaling = $s['up_scaling'] ?? null;
  }
}

type LoadBasedAutoScalingConfigurations = vec<LoadBasedAutoScalingConfiguration>;

type MaxResults = int;

type Minute = int;

type NextToken = string;

class OperatingSystem {
  public ?OperatingSystemConfigurationManagers $configuration_managers;
  public string $id;
  public string $name;
  public string $reported_name;
  public string $reported_version;
  public bool $supported;
  public string $type;

  public function __construct(shape(
    ?'configuration_managers' => ?OperatingSystemConfigurationManagers,
    ?'id' => string,
    ?'name' => string,
    ?'reported_name' => string,
    ?'reported_version' => string,
    ?'supported' => bool,
    ?'type' => string,
  ) $s = shape()) {
    $this->configuration_managers = $s['configuration_managers'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->reported_name = $s['reported_name'] ?? '';
    $this->reported_version = $s['reported_version'] ?? '';
    $this->supported = $s['supported'] ?? false;
    $this->type = $s['type'] ?? '';
  }
}

class OperatingSystemConfigurationManager {
  public string $name;
  public string $version;

  public function __construct(shape(
    ?'name' => string,
    ?'version' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type OperatingSystemConfigurationManagers = vec<OperatingSystemConfigurationManager>;

type OperatingSystems = vec<OperatingSystem>;

type Parameters = dict<String, String>;

class Permission {
  public bool $allow_ssh;
  public bool $allow_sudo;
  public string $iam_user_arn;
  public string $level;
  public string $stack_id;

  public function __construct(shape(
    ?'allow_ssh' => bool,
    ?'allow_sudo' => bool,
    ?'iam_user_arn' => string,
    ?'level' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->allow_ssh = $s['allow_ssh'] ?? false;
    $this->allow_sudo = $s['allow_sudo'] ?? false;
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->level = $s['level'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

type Permissions = vec<Permission>;

class RaidArray {
  public string $availability_zone;
  public ?DateTime $created_at;
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

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'created_at' => ?DateTime,
    ?'device' => string,
    ?'instance_id' => string,
    ?'iops' => int,
    ?'mount_point' => string,
    ?'name' => string,
    ?'number_of_disks' => int,
    ?'raid_array_id' => string,
    ?'raid_level' => int,
    ?'size' => int,
    ?'stack_id' => string,
    ?'volume_type' => string,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->device = $s['device'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->iops = $s['iops'] ?? 0;
    $this->mount_point = $s['mount_point'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->number_of_disks = $s['number_of_disks'] ?? 0;
    $this->raid_array_id = $s['raid_array_id'] ?? '';
    $this->raid_level = $s['raid_level'] ?? 0;
    $this->size = $s['size'] ?? 0;
    $this->stack_id = $s['stack_id'] ?? '';
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

type RaidArrays = vec<RaidArray>;

class RdsDbInstance {
  public string $address;
  public string $db_instance_identifier;
  public string $db_password;
  public string $db_user;
  public string $engine;
  public bool $missing_on_rds;
  public string $rds_db_instance_arn;
  public string $region;
  public string $stack_id;

  public function __construct(shape(
    ?'address' => string,
    ?'db_instance_identifier' => string,
    ?'db_password' => string,
    ?'db_user' => string,
    ?'engine' => string,
    ?'missing_on_rds' => bool,
    ?'rds_db_instance_arn' => string,
    ?'region' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_password = $s['db_password'] ?? '';
    $this->db_user = $s['db_user'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->missing_on_rds = $s['missing_on_rds'] ?? false;
    $this->rds_db_instance_arn = $s['rds_db_instance_arn'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

type RdsDbInstances = vec<RdsDbInstance>;

class RebootInstanceRequest {
  public string $instance_id;

  public function __construct(shape(
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class Recipes {
  public ?Strings $configure;
  public ?Strings $deploy;
  public ?Strings $setup;
  public ?Strings $shutdown;
  public ?Strings $undeploy;

  public function __construct(shape(
    ?'configure' => ?Strings,
    ?'deploy' => ?Strings,
    ?'setup' => ?Strings,
    ?'shutdown' => ?Strings,
    ?'undeploy' => ?Strings,
  ) $s = shape()) {
    $this->configure = $s['configure'] ?? vec[];
    $this->deploy = $s['deploy'] ?? vec[];
    $this->setup = $s['setup'] ?? vec[];
    $this->shutdown = $s['shutdown'] ?? vec[];
    $this->undeploy = $s['undeploy'] ?? vec[];
  }
}

class RegisterEcsClusterRequest {
  public string $ecs_cluster_arn;
  public string $stack_id;

  public function __construct(shape(
    ?'ecs_cluster_arn' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arn = $s['ecs_cluster_arn'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class RegisterEcsClusterResult {
  public string $ecs_cluster_arn;

  public function __construct(shape(
    ?'ecs_cluster_arn' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arn = $s['ecs_cluster_arn'] ?? '';
  }
}

class RegisterElasticIpRequest {
  public string $elastic_ip;
  public string $stack_id;

  public function __construct(shape(
    ?'elastic_ip' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->elastic_ip = $s['elastic_ip'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class RegisterElasticIpResult {
  public string $elastic_ip;

  public function __construct(shape(
    ?'elastic_ip' => string,
  ) $s = shape()) {
    $this->elastic_ip = $s['elastic_ip'] ?? '';
  }
}

class RegisterInstanceRequest {
  public string $hostname;
  public ?InstanceIdentity $instance_identity;
  public string $private_ip;
  public string $public_ip;
  public string $rsa_public_key;
  public string $rsa_public_key_fingerprint;
  public string $stack_id;

  public function __construct(shape(
    ?'hostname' => string,
    ?'instance_identity' => ?InstanceIdentity,
    ?'private_ip' => string,
    ?'public_ip' => string,
    ?'rsa_public_key' => string,
    ?'rsa_public_key_fingerprint' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->hostname = $s['hostname'] ?? '';
    $this->instance_identity = $s['instance_identity'] ?? null;
    $this->private_ip = $s['private_ip'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
    $this->rsa_public_key = $s['rsa_public_key'] ?? '';
    $this->rsa_public_key_fingerprint = $s['rsa_public_key_fingerprint'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class RegisterInstanceResult {
  public string $instance_id;

  public function __construct(shape(
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class RegisterRdsDbInstanceRequest {
  public string $db_password;
  public string $db_user;
  public string $rds_db_instance_arn;
  public string $stack_id;

  public function __construct(shape(
    ?'db_password' => string,
    ?'db_user' => string,
    ?'rds_db_instance_arn' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->db_password = $s['db_password'] ?? '';
    $this->db_user = $s['db_user'] ?? '';
    $this->rds_db_instance_arn = $s['rds_db_instance_arn'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class RegisterVolumeRequest {
  public string $ec_2_volume_id;
  public string $stack_id;

  public function __construct(shape(
    ?'ec_2_volume_id' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->ec_2_volume_id = $s['ec_2_volume_id'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class RegisterVolumeResult {
  public string $volume_id;

  public function __construct(shape(
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class ReportedOs {
  public string $family;
  public string $name;
  public string $version;

  public function __construct(shape(
    ?'family' => string,
    ?'name' => string,
    ?'version' => string,
  ) $s = shape()) {
    $this->family = $s['family'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type ResourceArn = string;

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RootDeviceType = string;

class SelfUserProfile {
  public string $iam_user_arn;
  public string $name;
  public string $ssh_public_key;
  public string $ssh_username;

  public function __construct(shape(
    ?'iam_user_arn' => string,
    ?'name' => string,
    ?'ssh_public_key' => string,
    ?'ssh_username' => string,
  ) $s = shape()) {
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->ssh_public_key = $s['ssh_public_key'] ?? '';
    $this->ssh_username = $s['ssh_username'] ?? '';
  }
}

class ServiceError {
  public ?DateTime $created_at;
  public string $instance_id;
  public string $message;
  public string $service_error_id;
  public string $stack_id;
  public string $type;

  public function __construct(shape(
    ?'created_at' => ?DateTime,
    ?'instance_id' => string,
    ?'message' => string,
    ?'service_error_id' => string,
    ?'stack_id' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->service_error_id = $s['service_error_id'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ServiceErrors = vec<ServiceError>;

class SetLoadBasedAutoScalingRequest {
  public ?AutoScalingThresholds $down_scaling;
  public bool $enable;
  public string $layer_id;
  public ?AutoScalingThresholds $up_scaling;

  public function __construct(shape(
    ?'down_scaling' => ?AutoScalingThresholds,
    ?'enable' => bool,
    ?'layer_id' => string,
    ?'up_scaling' => ?AutoScalingThresholds,
  ) $s = shape()) {
    $this->down_scaling = $s['down_scaling'] ?? null;
    $this->enable = $s['enable'] ?? false;
    $this->layer_id = $s['layer_id'] ?? '';
    $this->up_scaling = $s['up_scaling'] ?? null;
  }
}

class SetPermissionRequest {
  public bool $allow_ssh;
  public bool $allow_sudo;
  public string $iam_user_arn;
  public string $level;
  public string $stack_id;

  public function __construct(shape(
    ?'allow_ssh' => bool,
    ?'allow_sudo' => bool,
    ?'iam_user_arn' => string,
    ?'level' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->allow_ssh = $s['allow_ssh'] ?? false;
    $this->allow_sudo = $s['allow_sudo'] ?? false;
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->level = $s['level'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class SetTimeBasedAutoScalingRequest {
  public ?WeeklyAutoScalingSchedule $auto_scaling_schedule;
  public string $instance_id;

  public function __construct(shape(
    ?'auto_scaling_schedule' => ?WeeklyAutoScalingSchedule,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->auto_scaling_schedule = $s['auto_scaling_schedule'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class ShutdownEventConfiguration {
  public bool $delay_until_elb_connections_drained;
  public int $execution_timeout;

  public function __construct(shape(
    ?'delay_until_elb_connections_drained' => bool,
    ?'execution_timeout' => int,
  ) $s = shape()) {
    $this->delay_until_elb_connections_drained = $s['delay_until_elb_connections_drained'] ?? false;
    $this->execution_timeout = $s['execution_timeout'] ?? 0;
  }
}

class Source {
  public string $password;
  public string $revision;
  public string $ssh_key;
  public ?SourceType $type;
  public string $url;
  public string $username;

  public function __construct(shape(
    ?'password' => string,
    ?'revision' => string,
    ?'ssh_key' => string,
    ?'type' => ?SourceType,
    ?'url' => string,
    ?'username' => string,
  ) $s = shape()) {
    $this->password = $s['password'] ?? '';
    $this->revision = $s['revision'] ?? '';
    $this->ssh_key = $s['ssh_key'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->url = $s['url'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

type SourceType = string;

class SslConfiguration {
  public string $certificate;
  public string $chain;
  public string $private_key;

  public function __construct(shape(
    ?'certificate' => string,
    ?'chain' => string,
    ?'private_key' => string,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
    $this->chain = $s['chain'] ?? '';
    $this->private_key = $s['private_key'] ?? '';
  }
}

class Stack {
  public string $agent_version;
  public string $arn;
  public ?StackAttributes $attributes;
  public ?ChefConfiguration $chef_configuration;
  public ?StackConfigurationManager $configuration_manager;
  public ?DateTime $created_at;
  public ?Source $custom_cookbooks_source;
  public string $custom_json;
  public string $default_availability_zone;
  public string $default_instance_profile_arn;
  public string $default_os;
  public ?RootDeviceType $default_root_device_type;
  public string $default_ssh_key_name;
  public string $default_subnet_id;
  public string $hostname_theme;
  public string $name;
  public string $region;
  public string $service_role_arn;
  public string $stack_id;
  public bool $use_custom_cookbooks;
  public bool $use_opsworks_security_groups;
  public string $vpc_id;

  public function __construct(shape(
    ?'agent_version' => string,
    ?'arn' => string,
    ?'attributes' => ?StackAttributes,
    ?'chef_configuration' => ?ChefConfiguration,
    ?'configuration_manager' => ?StackConfigurationManager,
    ?'created_at' => ?DateTime,
    ?'custom_cookbooks_source' => ?Source,
    ?'custom_json' => string,
    ?'default_availability_zone' => string,
    ?'default_instance_profile_arn' => string,
    ?'default_os' => string,
    ?'default_root_device_type' => ?RootDeviceType,
    ?'default_ssh_key_name' => string,
    ?'default_subnet_id' => string,
    ?'hostname_theme' => string,
    ?'name' => string,
    ?'region' => string,
    ?'service_role_arn' => string,
    ?'stack_id' => string,
    ?'use_custom_cookbooks' => bool,
    ?'use_opsworks_security_groups' => bool,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->agent_version = $s['agent_version'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->chef_configuration = $s['chef_configuration'] ?? null;
    $this->configuration_manager = $s['configuration_manager'] ?? null;
    $this->created_at = $s['created_at'] ?? '';
    $this->custom_cookbooks_source = $s['custom_cookbooks_source'] ?? null;
    $this->custom_json = $s['custom_json'] ?? '';
    $this->default_availability_zone = $s['default_availability_zone'] ?? '';
    $this->default_instance_profile_arn = $s['default_instance_profile_arn'] ?? '';
    $this->default_os = $s['default_os'] ?? '';
    $this->default_root_device_type = $s['default_root_device_type'] ?? '';
    $this->default_ssh_key_name = $s['default_ssh_key_name'] ?? '';
    $this->default_subnet_id = $s['default_subnet_id'] ?? '';
    $this->hostname_theme = $s['hostname_theme'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->use_custom_cookbooks = $s['use_custom_cookbooks'] ?? false;
    $this->use_opsworks_security_groups = $s['use_opsworks_security_groups'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type StackAttributes = dict<StackAttributesKeys, String>;

type StackAttributesKeys = string;

class StackConfigurationManager {
  public string $name;
  public string $version;

  public function __construct(shape(
    ?'name' => string,
    ?'version' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class StackSummary {
  public int $apps_count;
  public string $arn;
  public ?InstancesCount $instances_count;
  public int $layers_count;
  public string $name;
  public string $stack_id;

  public function __construct(shape(
    ?'apps_count' => int,
    ?'arn' => string,
    ?'instances_count' => ?InstancesCount,
    ?'layers_count' => int,
    ?'name' => string,
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->apps_count = $s['apps_count'] ?? 0;
    $this->arn = $s['arn'] ?? '';
    $this->instances_count = $s['instances_count'] ?? null;
    $this->layers_count = $s['layers_count'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

type Stacks = vec<Stack>;

class StartInstanceRequest {
  public string $instance_id;

  public function __construct(shape(
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class StartStackRequest {
  public string $stack_id;

  public function __construct(shape(
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

class StopInstanceRequest {
  public bool $force;
  public string $instance_id;

  public function __construct(shape(
    ?'force' => bool,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->force = $s['force'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class StopStackRequest {
  public string $stack_id;

  public function __construct(shape(
    ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $s['stack_id'] ?? '';
  }
}

type String = string;

type Strings = vec<String>;

type Switch = string;

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

class TemporaryCredential {
  public string $instance_id;
  public string $password;
  public string $username;
  public int $valid_for_in_minutes;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'password' => string,
    ?'username' => string,
    ?'valid_for_in_minutes' => int,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->username = $s['username'] ?? '';
    $this->valid_for_in_minutes = $s['valid_for_in_minutes'] ?? 0;
  }
}

class TimeBasedAutoScalingConfiguration {
  public ?WeeklyAutoScalingSchedule $auto_scaling_schedule;
  public string $instance_id;

  public function __construct(shape(
    ?'auto_scaling_schedule' => ?WeeklyAutoScalingSchedule,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->auto_scaling_schedule = $s['auto_scaling_schedule'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

type TimeBasedAutoScalingConfigurations = vec<TimeBasedAutoScalingConfiguration>;

class UnassignInstanceRequest {
  public string $instance_id;

  public function __construct(shape(
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class UnassignVolumeRequest {
  public string $volume_id;

  public function __construct(shape(
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class UntagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_keys' => ?TagKeys,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateAppRequest {
  public string $app_id;
  public ?Source $app_source;
  public ?AppAttributes $attributes;
  public ?DataSources $data_sources;
  public string $description;
  public ?Strings $domains;
  public bool $enable_ssl;
  public ?EnvironmentVariables $environment;
  public string $name;
  public ?SslConfiguration $ssl_configuration;
  public ?AppType $type;

  public function __construct(shape(
    ?'app_id' => string,
    ?'app_source' => ?Source,
    ?'attributes' => ?AppAttributes,
    ?'data_sources' => ?DataSources,
    ?'description' => string,
    ?'domains' => ?Strings,
    ?'enable_ssl' => bool,
    ?'environment' => ?EnvironmentVariables,
    ?'name' => string,
    ?'ssl_configuration' => ?SslConfiguration,
    ?'type' => ?AppType,
  ) $s = shape()) {
    $this->app_id = $s['app_id'] ?? '';
    $this->app_source = $s['app_source'] ?? null;
    $this->attributes = $s['attributes'] ?? dict[];
    $this->data_sources = $s['data_sources'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->domains = $s['domains'] ?? vec[];
    $this->enable_ssl = $s['enable_ssl'] ?? false;
    $this->environment = $s['environment'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->ssl_configuration = $s['ssl_configuration'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

class UpdateElasticIpRequest {
  public string $elastic_ip;
  public string $name;

  public function __construct(shape(
    ?'elastic_ip' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->elastic_ip = $s['elastic_ip'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateInstanceRequest {
  public string $agent_version;
  public string $ami_id;
  public ?Architecture $architecture;
  public ?AutoScalingType $auto_scaling_type;
  public bool $ebs_optimized;
  public string $hostname;
  public bool $install_updates_on_boot;
  public string $instance_id;
  public string $instance_type;
  public ?Strings $layer_ids;
  public string $os;
  public string $ssh_key_name;

  public function __construct(shape(
    ?'agent_version' => string,
    ?'ami_id' => string,
    ?'architecture' => ?Architecture,
    ?'auto_scaling_type' => ?AutoScalingType,
    ?'ebs_optimized' => bool,
    ?'hostname' => string,
    ?'install_updates_on_boot' => bool,
    ?'instance_id' => string,
    ?'instance_type' => string,
    ?'layer_ids' => ?Strings,
    ?'os' => string,
    ?'ssh_key_name' => string,
  ) $s = shape()) {
    $this->agent_version = $s['agent_version'] ?? '';
    $this->ami_id = $s['ami_id'] ?? '';
    $this->architecture = $s['architecture'] ?? '';
    $this->auto_scaling_type = $s['auto_scaling_type'] ?? '';
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->hostname = $s['hostname'] ?? '';
    $this->install_updates_on_boot = $s['install_updates_on_boot'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->layer_ids = $s['layer_ids'] ?? vec[];
    $this->os = $s['os'] ?? '';
    $this->ssh_key_name = $s['ssh_key_name'] ?? '';
  }
}

class UpdateLayerRequest {
  public ?LayerAttributes $attributes;
  public bool $auto_assign_elastic_ips;
  public bool $auto_assign_public_ips;
  public ?CloudWatchLogsConfiguration $cloud_watch_logs_configuration;
  public string $custom_instance_profile_arn;
  public string $custom_json;
  public ?Recipes $custom_recipes;
  public ?Strings $custom_security_group_ids;
  public bool $enable_auto_healing;
  public bool $install_updates_on_boot;
  public string $layer_id;
  public ?LifecycleEventConfiguration $lifecycle_event_configuration;
  public string $name;
  public ?Strings $packages;
  public string $shortname;
  public bool $use_ebs_optimized_instances;
  public ?VolumeConfigurations $volume_configurations;

  public function __construct(shape(
    ?'attributes' => ?LayerAttributes,
    ?'auto_assign_elastic_ips' => bool,
    ?'auto_assign_public_ips' => bool,
    ?'cloud_watch_logs_configuration' => ?CloudWatchLogsConfiguration,
    ?'custom_instance_profile_arn' => string,
    ?'custom_json' => string,
    ?'custom_recipes' => ?Recipes,
    ?'custom_security_group_ids' => ?Strings,
    ?'enable_auto_healing' => bool,
    ?'install_updates_on_boot' => bool,
    ?'layer_id' => string,
    ?'lifecycle_event_configuration' => ?LifecycleEventConfiguration,
    ?'name' => string,
    ?'packages' => ?Strings,
    ?'shortname' => string,
    ?'use_ebs_optimized_instances' => bool,
    ?'volume_configurations' => ?VolumeConfigurations,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->auto_assign_elastic_ips = $s['auto_assign_elastic_ips'] ?? false;
    $this->auto_assign_public_ips = $s['auto_assign_public_ips'] ?? false;
    $this->cloud_watch_logs_configuration = $s['cloud_watch_logs_configuration'] ?? null;
    $this->custom_instance_profile_arn = $s['custom_instance_profile_arn'] ?? '';
    $this->custom_json = $s['custom_json'] ?? '';
    $this->custom_recipes = $s['custom_recipes'] ?? null;
    $this->custom_security_group_ids = $s['custom_security_group_ids'] ?? vec[];
    $this->enable_auto_healing = $s['enable_auto_healing'] ?? false;
    $this->install_updates_on_boot = $s['install_updates_on_boot'] ?? false;
    $this->layer_id = $s['layer_id'] ?? '';
    $this->lifecycle_event_configuration = $s['lifecycle_event_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->packages = $s['packages'] ?? vec[];
    $this->shortname = $s['shortname'] ?? '';
    $this->use_ebs_optimized_instances = $s['use_ebs_optimized_instances'] ?? false;
    $this->volume_configurations = $s['volume_configurations'] ?? vec[];
  }
}

class UpdateMyUserProfileRequest {
  public string $ssh_public_key;

  public function __construct(shape(
    ?'ssh_public_key' => string,
  ) $s = shape()) {
    $this->ssh_public_key = $s['ssh_public_key'] ?? '';
  }
}

class UpdateRdsDbInstanceRequest {
  public string $db_password;
  public string $db_user;
  public string $rds_db_instance_arn;

  public function __construct(shape(
    ?'db_password' => string,
    ?'db_user' => string,
    ?'rds_db_instance_arn' => string,
  ) $s = shape()) {
    $this->db_password = $s['db_password'] ?? '';
    $this->db_user = $s['db_user'] ?? '';
    $this->rds_db_instance_arn = $s['rds_db_instance_arn'] ?? '';
  }
}

class UpdateStackRequest {
  public string $agent_version;
  public ?StackAttributes $attributes;
  public ?ChefConfiguration $chef_configuration;
  public ?StackConfigurationManager $configuration_manager;
  public ?Source $custom_cookbooks_source;
  public string $custom_json;
  public string $default_availability_zone;
  public string $default_instance_profile_arn;
  public string $default_os;
  public ?RootDeviceType $default_root_device_type;
  public string $default_ssh_key_name;
  public string $default_subnet_id;
  public string $hostname_theme;
  public string $name;
  public string $service_role_arn;
  public string $stack_id;
  public bool $use_custom_cookbooks;
  public bool $use_opsworks_security_groups;

  public function __construct(shape(
    ?'agent_version' => string,
    ?'attributes' => ?StackAttributes,
    ?'chef_configuration' => ?ChefConfiguration,
    ?'configuration_manager' => ?StackConfigurationManager,
    ?'custom_cookbooks_source' => ?Source,
    ?'custom_json' => string,
    ?'default_availability_zone' => string,
    ?'default_instance_profile_arn' => string,
    ?'default_os' => string,
    ?'default_root_device_type' => ?RootDeviceType,
    ?'default_ssh_key_name' => string,
    ?'default_subnet_id' => string,
    ?'hostname_theme' => string,
    ?'name' => string,
    ?'service_role_arn' => string,
    ?'stack_id' => string,
    ?'use_custom_cookbooks' => bool,
    ?'use_opsworks_security_groups' => bool,
  ) $s = shape()) {
    $this->agent_version = $s['agent_version'] ?? '';
    $this->attributes = $s['attributes'] ?? dict[];
    $this->chef_configuration = $s['chef_configuration'] ?? null;
    $this->configuration_manager = $s['configuration_manager'] ?? null;
    $this->custom_cookbooks_source = $s['custom_cookbooks_source'] ?? null;
    $this->custom_json = $s['custom_json'] ?? '';
    $this->default_availability_zone = $s['default_availability_zone'] ?? '';
    $this->default_instance_profile_arn = $s['default_instance_profile_arn'] ?? '';
    $this->default_os = $s['default_os'] ?? '';
    $this->default_root_device_type = $s['default_root_device_type'] ?? '';
    $this->default_ssh_key_name = $s['default_ssh_key_name'] ?? '';
    $this->default_subnet_id = $s['default_subnet_id'] ?? '';
    $this->hostname_theme = $s['hostname_theme'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->stack_id = $s['stack_id'] ?? '';
    $this->use_custom_cookbooks = $s['use_custom_cookbooks'] ?? false;
    $this->use_opsworks_security_groups = $s['use_opsworks_security_groups'] ?? false;
  }
}

class UpdateUserProfileRequest {
  public bool $allow_self_management;
  public string $iam_user_arn;
  public string $ssh_public_key;
  public string $ssh_username;

  public function __construct(shape(
    ?'allow_self_management' => bool,
    ?'iam_user_arn' => string,
    ?'ssh_public_key' => string,
    ?'ssh_username' => string,
  ) $s = shape()) {
    $this->allow_self_management = $s['allow_self_management'] ?? false;
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->ssh_public_key = $s['ssh_public_key'] ?? '';
    $this->ssh_username = $s['ssh_username'] ?? '';
  }
}

class UpdateVolumeRequest {
  public string $mount_point;
  public string $name;
  public string $volume_id;

  public function __construct(shape(
    ?'mount_point' => string,
    ?'name' => string,
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->mount_point = $s['mount_point'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class UserProfile {
  public bool $allow_self_management;
  public string $iam_user_arn;
  public string $name;
  public string $ssh_public_key;
  public string $ssh_username;

  public function __construct(shape(
    ?'allow_self_management' => bool,
    ?'iam_user_arn' => string,
    ?'name' => string,
    ?'ssh_public_key' => string,
    ?'ssh_username' => string,
  ) $s = shape()) {
    $this->allow_self_management = $s['allow_self_management'] ?? false;
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->ssh_public_key = $s['ssh_public_key'] ?? '';
    $this->ssh_username = $s['ssh_username'] ?? '';
  }
}

type UserProfiles = vec<UserProfile>;

type ValidForInMinutes = int;

class ValidationException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type VirtualizationType = string;

class Volume {
  public string $availability_zone;
  public string $device;
  public string $ec_2_volume_id;
  public bool $encrypted;
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

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'device' => string,
    ?'ec_2_volume_id' => string,
    ?'encrypted' => bool,
    ?'instance_id' => string,
    ?'iops' => int,
    ?'mount_point' => string,
    ?'name' => string,
    ?'raid_array_id' => string,
    ?'region' => string,
    ?'size' => int,
    ?'status' => string,
    ?'volume_id' => string,
    ?'volume_type' => string,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->device = $s['device'] ?? '';
    $this->ec_2_volume_id = $s['ec_2_volume_id'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->iops = $s['iops'] ?? 0;
    $this->mount_point = $s['mount_point'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->raid_array_id = $s['raid_array_id'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->size = $s['size'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class VolumeConfiguration {
  public bool $encrypted;
  public int $iops;
  public string $mount_point;
  public int $number_of_disks;
  public int $raid_level;
  public int $size;
  public string $volume_type;

  public function __construct(shape(
    ?'encrypted' => bool,
    ?'iops' => int,
    ?'mount_point' => string,
    ?'number_of_disks' => int,
    ?'raid_level' => int,
    ?'size' => int,
    ?'volume_type' => string,
  ) $s = shape()) {
    $this->encrypted = $s['encrypted'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->mount_point = $s['mount_point'] ?? '';
    $this->number_of_disks = $s['number_of_disks'] ?? 0;
    $this->raid_level = $s['raid_level'] ?? 0;
    $this->size = $s['size'] ?? 0;
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

type VolumeConfigurations = vec<VolumeConfiguration>;

type VolumeType = string;

type Volumes = vec<Volume>;

class WeeklyAutoScalingSchedule {
  public ?DailyAutoScalingSchedule $friday;
  public ?DailyAutoScalingSchedule $monday;
  public ?DailyAutoScalingSchedule $saturday;
  public ?DailyAutoScalingSchedule $sunday;
  public ?DailyAutoScalingSchedule $thursday;
  public ?DailyAutoScalingSchedule $tuesday;
  public ?DailyAutoScalingSchedule $wednesday;

  public function __construct(shape(
    ?'friday' => ?DailyAutoScalingSchedule,
    ?'monday' => ?DailyAutoScalingSchedule,
    ?'saturday' => ?DailyAutoScalingSchedule,
    ?'sunday' => ?DailyAutoScalingSchedule,
    ?'thursday' => ?DailyAutoScalingSchedule,
    ?'tuesday' => ?DailyAutoScalingSchedule,
    ?'wednesday' => ?DailyAutoScalingSchedule,
  ) $s = shape()) {
    $this->friday = $s['friday'] ?? dict[];
    $this->monday = $s['monday'] ?? dict[];
    $this->saturday = $s['saturday'] ?? dict[];
    $this->sunday = $s['sunday'] ?? dict[];
    $this->thursday = $s['thursday'] ?? dict[];
    $this->tuesday = $s['tuesday'] ?? dict[];
    $this->wednesday = $s['wednesday'] ?? dict[];
  }
}

