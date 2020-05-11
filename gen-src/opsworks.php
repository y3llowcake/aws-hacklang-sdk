<?hh // strict
namespace slack\aws\opsworks;

interface OpsWorks {
  public function AssignInstance(AssignInstanceRequest): Awaitable<Errors\Error>;
  public function AssignVolume(AssignVolumeRequest): Awaitable<Errors\Error>;
  public function AssociateElasticIp(AssociateElasticIpRequest): Awaitable<Errors\Error>;
  public function AttachElasticLoadBalancer(AttachElasticLoadBalancerRequest): Awaitable<Errors\Error>;
  public function CloneStack(CloneStackRequest): Awaitable<Errors\Result<CloneStackResult>>;
  public function CreateApp(CreateAppRequest): Awaitable<Errors\Result<CreateAppResult>>;
  public function CreateDeployment(CreateDeploymentRequest): Awaitable<Errors\Result<CreateDeploymentResult>>;
  public function CreateInstance(CreateInstanceRequest): Awaitable<Errors\Result<CreateInstanceResult>>;
  public function CreateLayer(CreateLayerRequest): Awaitable<Errors\Result<CreateLayerResult>>;
  public function CreateStack(CreateStackRequest): Awaitable<Errors\Result<CreateStackResult>>;
  public function CreateUserProfile(CreateUserProfileRequest): Awaitable<Errors\Result<CreateUserProfileResult>>;
  public function DeleteApp(DeleteAppRequest): Awaitable<Errors\Error>;
  public function DeleteInstance(DeleteInstanceRequest): Awaitable<Errors\Error>;
  public function DeleteLayer(DeleteLayerRequest): Awaitable<Errors\Error>;
  public function DeleteStack(DeleteStackRequest): Awaitable<Errors\Error>;
  public function DeleteUserProfile(DeleteUserProfileRequest): Awaitable<Errors\Error>;
  public function DeregisterEcsCluster(DeregisterEcsClusterRequest): Awaitable<Errors\Error>;
  public function DeregisterElasticIp(DeregisterElasticIpRequest): Awaitable<Errors\Error>;
  public function DeregisterInstance(DeregisterInstanceRequest): Awaitable<Errors\Error>;
  public function DeregisterRdsDbInstance(DeregisterRdsDbInstanceRequest): Awaitable<Errors\Error>;
  public function DeregisterVolume(DeregisterVolumeRequest): Awaitable<Errors\Error>;
  public function DescribeAgentVersions(DescribeAgentVersionsRequest): Awaitable<Errors\Result<DescribeAgentVersionsResult>>;
  public function DescribeApps(DescribeAppsRequest): Awaitable<Errors\Result<DescribeAppsResult>>;
  public function DescribeCommands(DescribeCommandsRequest): Awaitable<Errors\Result<DescribeCommandsResult>>;
  public function DescribeDeployments(DescribeDeploymentsRequest): Awaitable<Errors\Result<DescribeDeploymentsResult>>;
  public function DescribeEcsClusters(DescribeEcsClustersRequest): Awaitable<Errors\Result<DescribeEcsClustersResult>>;
  public function DescribeElasticIps(DescribeElasticIpsRequest): Awaitable<Errors\Result<DescribeElasticIpsResult>>;
  public function DescribeElasticLoadBalancers(DescribeElasticLoadBalancersRequest): Awaitable<Errors\Result<DescribeElasticLoadBalancersResult>>;
  public function DescribeInstances(DescribeInstancesRequest): Awaitable<Errors\Result<DescribeInstancesResult>>;
  public function DescribeLayers(DescribeLayersRequest): Awaitable<Errors\Result<DescribeLayersResult>>;
  public function DescribeLoadBasedAutoScaling(DescribeLoadBasedAutoScalingRequest): Awaitable<Errors\Result<DescribeLoadBasedAutoScalingResult>>;
  public function DescribeMyUserProfile(): Awaitable<Errors\Result<DescribeMyUserProfileResult>>;
  public function DescribeOperatingSystems(): Awaitable<Errors\Result<DescribeOperatingSystemsResponse>>;
  public function DescribePermissions(DescribePermissionsRequest): Awaitable<Errors\Result<DescribePermissionsResult>>;
  public function DescribeRaidArrays(DescribeRaidArraysRequest): Awaitable<Errors\Result<DescribeRaidArraysResult>>;
  public function DescribeRdsDbInstances(DescribeRdsDbInstancesRequest): Awaitable<Errors\Result<DescribeRdsDbInstancesResult>>;
  public function DescribeServiceErrors(DescribeServiceErrorsRequest): Awaitable<Errors\Result<DescribeServiceErrorsResult>>;
  public function DescribeStackProvisioningParameters(DescribeStackProvisioningParametersRequest): Awaitable<Errors\Result<DescribeStackProvisioningParametersResult>>;
  public function DescribeStackSummary(DescribeStackSummaryRequest): Awaitable<Errors\Result<DescribeStackSummaryResult>>;
  public function DescribeStacks(DescribeStacksRequest): Awaitable<Errors\Result<DescribeStacksResult>>;
  public function DescribeTimeBasedAutoScaling(DescribeTimeBasedAutoScalingRequest): Awaitable<Errors\Result<DescribeTimeBasedAutoScalingResult>>;
  public function DescribeUserProfiles(DescribeUserProfilesRequest): Awaitable<Errors\Result<DescribeUserProfilesResult>>;
  public function DescribeVolumes(DescribeVolumesRequest): Awaitable<Errors\Result<DescribeVolumesResult>>;
  public function DetachElasticLoadBalancer(DetachElasticLoadBalancerRequest): Awaitable<Errors\Error>;
  public function DisassociateElasticIp(DisassociateElasticIpRequest): Awaitable<Errors\Error>;
  public function GetHostnameSuggestion(GetHostnameSuggestionRequest): Awaitable<Errors\Result<GetHostnameSuggestionResult>>;
  public function GrantAccess(GrantAccessRequest): Awaitable<Errors\Result<GrantAccessResult>>;
  public function ListTags(ListTagsRequest): Awaitable<Errors\Result<ListTagsResult>>;
  public function RebootInstance(RebootInstanceRequest): Awaitable<Errors\Error>;
  public function RegisterEcsCluster(RegisterEcsClusterRequest): Awaitable<Errors\Result<RegisterEcsClusterResult>>;
  public function RegisterElasticIp(RegisterElasticIpRequest): Awaitable<Errors\Result<RegisterElasticIpResult>>;
  public function RegisterInstance(RegisterInstanceRequest): Awaitable<Errors\Result<RegisterInstanceResult>>;
  public function RegisterRdsDbInstance(RegisterRdsDbInstanceRequest): Awaitable<Errors\Error>;
  public function RegisterVolume(RegisterVolumeRequest): Awaitable<Errors\Result<RegisterVolumeResult>>;
  public function SetLoadBasedAutoScaling(SetLoadBasedAutoScalingRequest): Awaitable<Errors\Error>;
  public function SetPermission(SetPermissionRequest): Awaitable<Errors\Error>;
  public function SetTimeBasedAutoScaling(SetTimeBasedAutoScalingRequest): Awaitable<Errors\Error>;
  public function StartInstance(StartInstanceRequest): Awaitable<Errors\Error>;
  public function StartStack(StartStackRequest): Awaitable<Errors\Error>;
  public function StopInstance(StopInstanceRequest): Awaitable<Errors\Error>;
  public function StopStack(StopStackRequest): Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UnassignInstance(UnassignInstanceRequest): Awaitable<Errors\Error>;
  public function UnassignVolume(UnassignVolumeRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateApp(UpdateAppRequest): Awaitable<Errors\Error>;
  public function UpdateElasticIp(UpdateElasticIpRequest): Awaitable<Errors\Error>;
  public function UpdateInstance(UpdateInstanceRequest): Awaitable<Errors\Error>;
  public function UpdateLayer(UpdateLayerRequest): Awaitable<Errors\Error>;
  public function UpdateMyUserProfile(UpdateMyUserProfileRequest): Awaitable<Errors\Error>;
  public function UpdateRdsDbInstance(UpdateRdsDbInstanceRequest): Awaitable<Errors\Error>;
  public function UpdateStack(UpdateStackRequest): Awaitable<Errors\Error>;
  public function UpdateUserProfile(UpdateUserProfileRequest): Awaitable<Errors\Error>;
  public function UpdateVolume(UpdateVolumeRequest): Awaitable<Errors\Error>;
}

class AgentVersion {
  public StackConfigurationManager $configuration_manager;
  public string $version;

  public function __construct(shape(
  ?'configuration_manager' => StackConfigurationManager,
  ?'version' => string,
  ) $s = shape()) {
    $this->configuration_manager = $configuration_manager ?? ;
    $this->version = $version ?? ;
  }
}

type AgentVersions = vec<AgentVersion>;

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

  public function __construct(shape(
  ?'app_id' => string,
  ?'app_source' => Source,
  ?'attributes' => AppAttributes,
  ?'created_at' => string,
  ?'data_sources' => DataSources,
  ?'description' => string,
  ?'domains' => Strings,
  ?'enable_ssl' => boolean,
  ?'environment' => EnvironmentVariables,
  ?'name' => string,
  ?'shortname' => string,
  ?'ssl_configuration' => SslConfiguration,
  ?'stack_id' => string,
  ?'type' => AppType,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->app_source = $app_source ?? ;
    $this->attributes = $attributes ?? ;
    $this->created_at = $created_at ?? ;
    $this->data_sources = $data_sources ?? [];
    $this->description = $description ?? ;
    $this->domains = $domains ?? ;
    $this->enable_ssl = $enable_ssl ?? ;
    $this->environment = $environment ?? ;
    $this->name = $name ?? ;
    $this->shortname = $shortname ?? ;
    $this->ssl_configuration = $ssl_configuration ?? null;
    $this->stack_id = $stack_id ?? ;
    $this->type = $type ?? ;
  }
}

type AppAttributes = dict<AppAttributesKeys, String>;

type AppAttributesKeys = string;

type AppType = string;

type Apps = vec<App>;

type Architecture = string;

class AssignInstanceRequest {
  public string $instance_id;
  public Strings $layer_ids;

  public function __construct(shape(
  ?'instance_id' => string,
  ?'layer_ids' => Strings,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
    $this->layer_ids = $layer_ids ?? ;
  }
}

class AssignVolumeRequest {
  public string $instance_id;
  public string $volume_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ?'volume_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
    $this->volume_id = $volume_id ?? ;
  }
}

class AssociateElasticIpRequest {
  public string $elastic_ip;
  public string $instance_id;

  public function __construct(shape(
  ?'elastic_ip' => string,
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->elastic_ip = $elastic_ip ?? null;
    $this->instance_id = $instance_id ?? ;
  }
}

class AttachElasticLoadBalancerRequest {
  public string $elastic_load_balancer_name;
  public string $layer_id;

  public function __construct(shape(
  ?'elastic_load_balancer_name' => string,
  ?'layer_id' => string,
  ) $s = shape()) {
    $this->elastic_load_balancer_name = $elastic_load_balancer_name ?? ;
    $this->layer_id = $layer_id ?? ;
  }
}

class AutoScalingThresholds {
  public Strings $alarms;
  public Double $cpu_threshold;
  public Minute $ignore_metrics_time;
  public int $instance_count;
  public Double $load_threshold;
  public Double $memory_threshold;
  public Minute $thresholds_wait_time;

  public function __construct(shape(
  ?'alarms' => Strings,
  ?'cpu_threshold' => Double,
  ?'ignore_metrics_time' => Minute,
  ?'instance_count' => int,
  ?'load_threshold' => Double,
  ?'memory_threshold' => Double,
  ?'thresholds_wait_time' => Minute,
  ) $s = shape()) {
    $this->alarms = $alarms ?? ;
    $this->cpu_threshold = $cpu_threshold ?? ;
    $this->ignore_metrics_time = $ignore_metrics_time ?? ;
    $this->instance_count = $instance_count ?? ;
    $this->load_threshold = $load_threshold ?? ;
    $this->memory_threshold = $memory_threshold ?? ;
    $this->thresholds_wait_time = $thresholds_wait_time ?? ;
  }
}

type AutoScalingType = string;

class BlockDeviceMapping {
  public string $device_name;
  public EbsBlockDevice $ebs;
  public string $no_device;
  public string $virtual_name;

  public function __construct(shape(
  ?'device_name' => string,
  ?'ebs' => EbsBlockDevice,
  ?'no_device' => string,
  ?'virtual_name' => string,
  ) $s = shape()) {
    $this->device_name = $device_name ?? ;
    $this->ebs = $ebs ?? ;
    $this->no_device = $no_device ?? ;
    $this->virtual_name = $virtual_name ?? ;
  }
}

type BlockDeviceMappings = vec<BlockDeviceMapping>;

type Boolean = bool;

class ChefConfiguration {
  public string $berkshelf_version;
  public boolean $manage_berkshelf;

  public function __construct(shape(
  ?'berkshelf_version' => string,
  ?'manage_berkshelf' => boolean,
  ) $s = shape()) {
    $this->berkshelf_version = $berkshelf_version ?? ;
    $this->manage_berkshelf = $manage_berkshelf ?? ;
  }
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

  public function __construct(shape(
  ?'agent_version' => string,
  ?'attributes' => StackAttributes,
  ?'chef_configuration' => ChefConfiguration,
  ?'clone_app_ids' => Strings,
  ?'clone_permissions' => boolean,
  ?'configuration_manager' => StackConfigurationManager,
  ?'custom_cookbooks_source' => Source,
  ?'custom_json' => string,
  ?'default_availability_zone' => string,
  ?'default_instance_profile_arn' => string,
  ?'default_os' => string,
  ?'default_root_device_type' => RootDeviceType,
  ?'default_ssh_key_name' => string,
  ?'default_subnet_id' => string,
  ?'hostname_theme' => string,
  ?'name' => string,
  ?'region' => string,
  ?'service_role_arn' => string,
  ?'source_stack_id' => string,
  ?'use_custom_cookbooks' => boolean,
  ?'use_opsworks_security_groups' => boolean,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->agent_version = $agent_version ?? null;
    $this->attributes = $attributes ?? ;
    $this->chef_configuration = $chef_configuration ?? null;
    $this->clone_app_ids = $clone_app_ids ?? ;
    $this->clone_permissions = $clone_permissions ?? ;
    $this->configuration_manager = $configuration_manager ?? ;
    $this->custom_cookbooks_source = $custom_cookbooks_source ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->default_availability_zone = $default_availability_zone ?? ;
    $this->default_instance_profile_arn = $default_instance_profile_arn ?? ;
    $this->default_os = $default_os ?? ;
    $this->default_root_device_type = $default_root_device_type ?? ;
    $this->default_ssh_key_name = $default_ssh_key_name ?? ;
    $this->default_subnet_id = $default_subnet_id ?? ;
    $this->hostname_theme = $hostname_theme ?? ;
    $this->name = $name ?? ;
    $this->region = $region ?? ;
    $this->service_role_arn = $service_role_arn ?? ;
    $this->source_stack_id = $source_stack_id ?? ;
    $this->use_custom_cookbooks = $use_custom_cookbooks ?? ;
    $this->use_opsworks_security_groups = $use_opsworks_security_groups ?? ;
    $this->vpc_id = $vpc_id ?? ;
  }
}

class CloneStackResult {
  public string $stack_id;

  public function __construct(shape(
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? ;
  }
}

class CloudWatchLogsConfiguration {
  public boolean $enabled;
  public CloudWatchLogsLogStreams $log_streams;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'log_streams' => CloudWatchLogsLogStreams,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->log_streams = $log_streams ?? ;
  }
}

type CloudWatchLogsEncoding = string;

type CloudWatchLogsInitialPosition = string;

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

  public function __construct(shape(
  ?'batch_count' => int,
  ?'batch_size' => int,
  ?'buffer_duration' => int,
  ?'datetime_format' => string,
  ?'encoding' => CloudWatchLogsEncoding,
  ?'file' => string,
  ?'file_fingerprint_lines' => string,
  ?'initial_position' => CloudWatchLogsInitialPosition,
  ?'log_group_name' => string,
  ?'multi_line_start_pattern' => string,
  ?'time_zone' => CloudWatchLogsTimeZone,
  ) $s = shape()) {
    $this->batch_count = $batch_count ?? ;
    $this->batch_size = $batch_size ?? ;
    $this->buffer_duration = $buffer_duration ?? ;
    $this->datetime_format = $datetime_format ?? ;
    $this->encoding = $encoding ?? ;
    $this->file = $file ?? ;
    $this->file_fingerprint_lines = $file_fingerprint_lines ?? ;
    $this->initial_position = $initial_position ?? ;
    $this->log_group_name = $log_group_name ?? ;
    $this->multi_line_start_pattern = $multi_line_start_pattern ?? ;
    $this->time_zone = $time_zone ?? ;
  }
}

type CloudWatchLogsLogStreams = vec<CloudWatchLogsLogStream>;

type CloudWatchLogsTimeZone = string;

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

  public function __construct(shape(
  ?'acknowledged_at' => DateTime,
  ?'command_id' => string,
  ?'completed_at' => DateTime,
  ?'created_at' => DateTime,
  ?'deployment_id' => string,
  ?'exit_code' => int,
  ?'instance_id' => string,
  ?'log_url' => string,
  ?'status' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->acknowledged_at = $acknowledged_at ?? ;
    $this->command_id = $command_id ?? ;
    $this->completed_at = $completed_at ?? ;
    $this->created_at = $created_at ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->exit_code = $exit_code ?? ;
    $this->instance_id = $instance_id ?? ;
    $this->log_url = $log_url ?? ;
    $this->status = $status ?? ;
    $this->type = $type ?? ;
  }
}

type Commands = vec<Command>;

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

  public function __construct(shape(
  ?'app_source' => Source,
  ?'attributes' => AppAttributes,
  ?'data_sources' => DataSources,
  ?'description' => string,
  ?'domains' => Strings,
  ?'enable_ssl' => boolean,
  ?'environment' => EnvironmentVariables,
  ?'name' => string,
  ?'shortname' => string,
  ?'ssl_configuration' => SslConfiguration,
  ?'stack_id' => string,
  ?'type' => AppType,
  ) $s = shape()) {
    $this->app_source = $app_source ?? ;
    $this->attributes = $attributes ?? ;
    $this->data_sources = $data_sources ?? [];
    $this->description = $description ?? ;
    $this->domains = $domains ?? ;
    $this->enable_ssl = $enable_ssl ?? ;
    $this->environment = $environment ?? ;
    $this->name = $name ?? ;
    $this->shortname = $shortname ?? ;
    $this->ssl_configuration = $ssl_configuration ?? null;
    $this->stack_id = $stack_id ?? ;
    $this->type = $type ?? ;
  }
}

class CreateAppResult {
  public string $app_id;

  public function __construct(shape(
  ?'app_id' => string,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class CreateDeploymentRequest {
  public string $app_id;
  public DeploymentCommand $command;
  public string $comment;
  public string $custom_json;
  public Strings $instance_ids;
  public Strings $layer_ids;
  public string $stack_id;

  public function __construct(shape(
  ?'app_id' => string,
  ?'command' => DeploymentCommand,
  ?'comment' => string,
  ?'custom_json' => string,
  ?'instance_ids' => Strings,
  ?'layer_ids' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->command = $command ?? null;
    $this->comment = $comment ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->instance_ids = $instance_ids ?? ;
    $this->layer_ids = $layer_ids ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class CreateDeploymentResult {
  public string $deployment_id;

  public function __construct(shape(
  ?'deployment_id' => string,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
  }
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

  public function __construct(shape(
  ?'agent_version' => string,
  ?'ami_id' => string,
  ?'architecture' => Architecture,
  ?'auto_scaling_type' => AutoScalingType,
  ?'availability_zone' => string,
  ?'block_device_mappings' => BlockDeviceMappings,
  ?'ebs_optimized' => boolean,
  ?'hostname' => string,
  ?'install_updates_on_boot' => boolean,
  ?'instance_type' => string,
  ?'layer_ids' => Strings,
  ?'os' => string,
  ?'root_device_type' => RootDeviceType,
  ?'ssh_key_name' => string,
  ?'stack_id' => string,
  ?'subnet_id' => string,
  ?'tenancy' => string,
  ?'virtualization_type' => string,
  ) $s = shape()) {
    $this->agent_version = $agent_version ?? null;
    $this->ami_id = $ami_id ?? ;
    $this->architecture = $architecture ?? "";
    $this->auto_scaling_type = $auto_scaling_type ?? "";
    $this->availability_zone = $availability_zone ?? ;
    $this->block_device_mappings = $block_device_mappings ?? [];
    $this->ebs_optimized = $ebs_optimized ?? ;
    $this->hostname = $hostname ?? ;
    $this->install_updates_on_boot = $install_updates_on_boot ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->layer_ids = $layer_ids ?? ;
    $this->os = $os ?? ;
    $this->root_device_type = $root_device_type ?? "";
    $this->ssh_key_name = $ssh_key_name ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->subnet_id = $subnet_id ?? ;
    $this->tenancy = $tenancy ?? ;
    $this->virtualization_type = $virtualization_type ?? "";
  }
}

class CreateInstanceResult {
  public string $instance_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
  }
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

  public function __construct(shape(
  ?'attributes' => LayerAttributes,
  ?'auto_assign_elastic_ips' => boolean,
  ?'auto_assign_public_ips' => boolean,
  ?'cloud_watch_logs_configuration' => CloudWatchLogsConfiguration,
  ?'custom_instance_profile_arn' => string,
  ?'custom_json' => string,
  ?'custom_recipes' => Recipes,
  ?'custom_security_group_ids' => Strings,
  ?'enable_auto_healing' => boolean,
  ?'install_updates_on_boot' => boolean,
  ?'lifecycle_event_configuration' => LifecycleEventConfiguration,
  ?'name' => string,
  ?'packages' => Strings,
  ?'shortname' => string,
  ?'stack_id' => string,
  ?'type' => LayerType,
  ?'use_ebs_optimized_instances' => boolean,
  ?'volume_configurations' => VolumeConfigurations,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->auto_assign_elastic_ips = $auto_assign_elastic_ips ?? ;
    $this->auto_assign_public_ips = $auto_assign_public_ips ?? ;
    $this->cloud_watch_logs_configuration = $cloud_watch_logs_configuration ?? null;
    $this->custom_instance_profile_arn = $custom_instance_profile_arn ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->custom_recipes = $custom_recipes ?? ;
    $this->custom_security_group_ids = $custom_security_group_ids ?? ;
    $this->enable_auto_healing = $enable_auto_healing ?? ;
    $this->install_updates_on_boot = $install_updates_on_boot ?? ;
    $this->lifecycle_event_configuration = $lifecycle_event_configuration ?? null;
    $this->name = $name ?? ;
    $this->packages = $packages ?? ;
    $this->shortname = $shortname ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->type = $type ?? ;
    $this->use_ebs_optimized_instances = $use_ebs_optimized_instances ?? ;
    $this->volume_configurations = $volume_configurations ?? [];
  }
}

class CreateLayerResult {
  public string $layer_id;

  public function __construct(shape(
  ?'layer_id' => string,
  ) $s = shape()) {
    $this->layer_id = $layer_id ?? ;
  }
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

  public function __construct(shape(
  ?'agent_version' => string,
  ?'attributes' => StackAttributes,
  ?'chef_configuration' => ChefConfiguration,
  ?'configuration_manager' => StackConfigurationManager,
  ?'custom_cookbooks_source' => Source,
  ?'custom_json' => string,
  ?'default_availability_zone' => string,
  ?'default_instance_profile_arn' => string,
  ?'default_os' => string,
  ?'default_root_device_type' => RootDeviceType,
  ?'default_ssh_key_name' => string,
  ?'default_subnet_id' => string,
  ?'hostname_theme' => string,
  ?'name' => string,
  ?'region' => string,
  ?'service_role_arn' => string,
  ?'use_custom_cookbooks' => boolean,
  ?'use_opsworks_security_groups' => boolean,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->agent_version = $agent_version ?? null;
    $this->attributes = $attributes ?? ;
    $this->chef_configuration = $chef_configuration ?? null;
    $this->configuration_manager = $configuration_manager ?? ;
    $this->custom_cookbooks_source = $custom_cookbooks_source ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->default_availability_zone = $default_availability_zone ?? ;
    $this->default_instance_profile_arn = $default_instance_profile_arn ?? ;
    $this->default_os = $default_os ?? ;
    $this->default_root_device_type = $default_root_device_type ?? ;
    $this->default_ssh_key_name = $default_ssh_key_name ?? ;
    $this->default_subnet_id = $default_subnet_id ?? ;
    $this->hostname_theme = $hostname_theme ?? ;
    $this->name = $name ?? ;
    $this->region = $region ?? ;
    $this->service_role_arn = $service_role_arn ?? ;
    $this->use_custom_cookbooks = $use_custom_cookbooks ?? ;
    $this->use_opsworks_security_groups = $use_opsworks_security_groups ?? ;
    $this->vpc_id = $vpc_id ?? ;
  }
}

class CreateStackResult {
  public string $stack_id;

  public function __construct(shape(
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? ;
  }
}

class CreateUserProfileRequest {
  public boolean $allow_self_management;
  public string $iam_user_arn;
  public string $ssh_public_key;
  public string $ssh_username;

  public function __construct(shape(
  ?'allow_self_management' => boolean,
  ?'iam_user_arn' => string,
  ?'ssh_public_key' => string,
  ?'ssh_username' => string,
  ) $s = shape()) {
    $this->allow_self_management = $allow_self_management ?? ;
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->ssh_username = $ssh_username ?? ;
  }
}

class CreateUserProfileResult {
  public string $iam_user_arn;

  public function __construct(shape(
  ?'iam_user_arn' => string,
  ) $s = shape()) {
    $this->iam_user_arn = $iam_user_arn ?? ;
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
    $this->arn = $arn ?? ;
    $this->database_name = $database_name ?? ;
    $this->type = $type ?? ;
  }
}

type DataSources = vec<DataSource>;

type DateTime = string;

class DeleteAppRequest {
  public string $app_id;

  public function __construct(shape(
  ?'app_id' => string,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
  }
}

class DeleteInstanceRequest {
  public boolean $delete_elastic_ip;
  public boolean $delete_volumes;
  public string $instance_id;

  public function __construct(shape(
  ?'delete_elastic_ip' => boolean,
  ?'delete_volumes' => boolean,
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->delete_elastic_ip = $delete_elastic_ip ?? ;
    $this->delete_volumes = $delete_volumes ?? ;
    $this->instance_id = $instance_id ?? ;
  }
}

class DeleteLayerRequest {
  public string $layer_id;

  public function __construct(shape(
  ?'layer_id' => string,
  ) $s = shape()) {
    $this->layer_id = $layer_id ?? ;
  }
}

class DeleteStackRequest {
  public string $stack_id;

  public function __construct(shape(
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? ;
  }
}

class DeleteUserProfileRequest {
  public string $iam_user_arn;

  public function __construct(shape(
  ?'iam_user_arn' => string,
  ) $s = shape()) {
    $this->iam_user_arn = $iam_user_arn ?? ;
  }
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

  public function __construct(shape(
  ?'app_id' => string,
  ?'command' => DeploymentCommand,
  ?'comment' => string,
  ?'completed_at' => DateTime,
  ?'created_at' => DateTime,
  ?'custom_json' => string,
  ?'deployment_id' => string,
  ?'duration' => int,
  ?'iam_user_arn' => string,
  ?'instance_ids' => Strings,
  ?'stack_id' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->command = $command ?? null;
    $this->comment = $comment ?? ;
    $this->completed_at = $completed_at ?? ;
    $this->created_at = $created_at ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->duration = $duration ?? ;
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->instance_ids = $instance_ids ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->status = $status ?? ;
  }
}

class DeploymentCommand {
  public DeploymentCommandArgs $args;
  public DeploymentCommandName $name;

  public function __construct(shape(
  ?'args' => DeploymentCommandArgs,
  ?'name' => DeploymentCommandName,
  ) $s = shape()) {
    $this->args = $args ?? ;
    $this->name = $name ?? ;
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
    $this->ecs_cluster_arn = $ecs_cluster_arn ?? ;
  }
}

class DeregisterElasticIpRequest {
  public string $elastic_ip;

  public function __construct(shape(
  ?'elastic_ip' => string,
  ) $s = shape()) {
    $this->elastic_ip = $elastic_ip ?? null;
  }
}

class DeregisterInstanceRequest {
  public string $instance_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
  }
}

class DeregisterRdsDbInstanceRequest {
  public string $rds_db_instance_arn;

  public function __construct(shape(
  ?'rds_db_instance_arn' => string,
  ) $s = shape()) {
    $this->rds_db_instance_arn = $rds_db_instance_arn ?? ;
  }
}

class DeregisterVolumeRequest {
  public string $volume_id;

  public function __construct(shape(
  ?'volume_id' => string,
  ) $s = shape()) {
    $this->volume_id = $volume_id ?? ;
  }
}

class DescribeAgentVersionsRequest {
  public StackConfigurationManager $configuration_manager;
  public string $stack_id;

  public function __construct(shape(
  ?'configuration_manager' => StackConfigurationManager,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->configuration_manager = $configuration_manager ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeAgentVersionsResult {
  public AgentVersions $agent_versions;

  public function __construct(shape(
  ?'agent_versions' => AgentVersions,
  ) $s = shape()) {
    $this->agent_versions = $agent_versions ?? [];
  }
}

class DescribeAppsRequest {
  public Strings $app_ids;
  public string $stack_id;

  public function __construct(shape(
  ?'app_ids' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->app_ids = $app_ids ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeAppsResult {
  public Apps $apps;

  public function __construct(shape(
  ?'apps' => Apps,
  ) $s = shape()) {
    $this->apps = $apps ?? [];
  }
}

class DescribeCommandsRequest {
  public Strings $command_ids;
  public string $deployment_id;
  public string $instance_id;

  public function __construct(shape(
  ?'command_ids' => Strings,
  ?'deployment_id' => string,
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->command_ids = $command_ids ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->instance_id = $instance_id ?? ;
  }
}

class DescribeCommandsResult {
  public Commands $commands;

  public function __construct(shape(
  ?'commands' => Commands,
  ) $s = shape()) {
    $this->commands = $commands ?? [];
  }
}

class DescribeDeploymentsRequest {
  public string $app_id;
  public Strings $deployment_ids;
  public string $stack_id;

  public function __construct(shape(
  ?'app_id' => string,
  ?'deployment_ids' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->deployment_ids = $deployment_ids ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeDeploymentsResult {
  public Deployments $deployments;

  public function __construct(shape(
  ?'deployments' => Deployments,
  ) $s = shape()) {
    $this->deployments = $deployments ?? [];
  }
}

class DescribeEcsClustersRequest {
  public Strings $ecs_cluster_arns;
  public int $max_results;
  public string $next_token;
  public string $stack_id;

  public function __construct(shape(
  ?'ecs_cluster_arns' => Strings,
  ?'max_results' => int,
  ?'next_token' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arns = $ecs_cluster_arns ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeEcsClustersResult {
  public EcsClusters $ecs_clusters;
  public string $next_token;

  public function __construct(shape(
  ?'ecs_clusters' => EcsClusters,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->ecs_clusters = $ecs_clusters ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeElasticIpsRequest {
  public string $instance_id;
  public Strings $ips;
  public string $stack_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ?'ips' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
    $this->ips = $ips ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeElasticIpsResult {
  public ElasticIps $elastic_ips;

  public function __construct(shape(
  ?'elastic_ips' => ElasticIps,
  ) $s = shape()) {
    $this->elastic_ips = $elastic_ips ?? [];
  }
}

class DescribeElasticLoadBalancersRequest {
  public Strings $layer_ids;
  public string $stack_id;

  public function __construct(shape(
  ?'layer_ids' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->layer_ids = $layer_ids ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeElasticLoadBalancersResult {
  public ElasticLoadBalancers $elastic_load_balancers;

  public function __construct(shape(
  ?'elastic_load_balancers' => ElasticLoadBalancers,
  ) $s = shape()) {
    $this->elastic_load_balancers = $elastic_load_balancers ?? [];
  }
}

class DescribeInstancesRequest {
  public Strings $instance_ids;
  public string $layer_id;
  public string $stack_id;

  public function __construct(shape(
  ?'instance_ids' => Strings,
  ?'layer_id' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->instance_ids = $instance_ids ?? ;
    $this->layer_id = $layer_id ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeInstancesResult {
  public Instances $instances;

  public function __construct(shape(
  ?'instances' => Instances,
  ) $s = shape()) {
    $this->instances = $instances ?? [];
  }
}

class DescribeLayersRequest {
  public Strings $layer_ids;
  public string $stack_id;

  public function __construct(shape(
  ?'layer_ids' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->layer_ids = $layer_ids ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeLayersResult {
  public Layers $layers;

  public function __construct(shape(
  ?'layers' => Layers,
  ) $s = shape()) {
    $this->layers = $layers ?? [];
  }
}

class DescribeLoadBasedAutoScalingRequest {
  public Strings $layer_ids;

  public function __construct(shape(
  ?'layer_ids' => Strings,
  ) $s = shape()) {
    $this->layer_ids = $layer_ids ?? ;
  }
}

class DescribeLoadBasedAutoScalingResult {
  public LoadBasedAutoScalingConfigurations $load_based_auto_scaling_configurations;

  public function __construct(shape(
  ?'load_based_auto_scaling_configurations' => LoadBasedAutoScalingConfigurations,
  ) $s = shape()) {
    $this->load_based_auto_scaling_configurations = $load_based_auto_scaling_configurations ?? [];
  }
}

class DescribeMyUserProfileResult {
  public SelfUserProfile $user_profile;

  public function __construct(shape(
  ?'user_profile' => SelfUserProfile,
  ) $s = shape()) {
    $this->user_profile = $user_profile ?? null;
  }
}

class DescribeOperatingSystemsResponse {
  public OperatingSystems $operating_systems;

  public function __construct(shape(
  ?'operating_systems' => OperatingSystems,
  ) $s = shape()) {
    $this->operating_systems = $operating_systems ?? [];
  }
}

class DescribePermissionsRequest {
  public string $iam_user_arn;
  public string $stack_id;

  public function __construct(shape(
  ?'iam_user_arn' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribePermissionsResult {
  public Permissions $permissions;

  public function __construct(shape(
  ?'permissions' => Permissions,
  ) $s = shape()) {
    $this->permissions = $permissions ?? [];
  }
}

class DescribeRaidArraysRequest {
  public string $instance_id;
  public Strings $raid_array_ids;
  public string $stack_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ?'raid_array_ids' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
    $this->raid_array_ids = $raid_array_ids ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeRaidArraysResult {
  public RaidArrays $raid_arrays;

  public function __construct(shape(
  ?'raid_arrays' => RaidArrays,
  ) $s = shape()) {
    $this->raid_arrays = $raid_arrays ?? [];
  }
}

class DescribeRdsDbInstancesRequest {
  public Strings $rds_db_instance_arns;
  public string $stack_id;

  public function __construct(shape(
  ?'rds_db_instance_arns' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->rds_db_instance_arns = $rds_db_instance_arns ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeRdsDbInstancesResult {
  public RdsDbInstances $rds_db_instances;

  public function __construct(shape(
  ?'rds_db_instances' => RdsDbInstances,
  ) $s = shape()) {
    $this->rds_db_instances = $rds_db_instances ?? [];
  }
}

class DescribeServiceErrorsRequest {
  public string $instance_id;
  public Strings $service_error_ids;
  public string $stack_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ?'service_error_ids' => Strings,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
    $this->service_error_ids = $service_error_ids ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeServiceErrorsResult {
  public ServiceErrors $service_errors;

  public function __construct(shape(
  ?'service_errors' => ServiceErrors,
  ) $s = shape()) {
    $this->service_errors = $service_errors ?? [];
  }
}

class DescribeStackProvisioningParametersRequest {
  public string $stack_id;

  public function __construct(shape(
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeStackProvisioningParametersResult {
  public string $agent_installer_url;
  public Parameters $parameters;

  public function __construct(shape(
  ?'agent_installer_url' => string,
  ?'parameters' => Parameters,
  ) $s = shape()) {
    $this->agent_installer_url = $agent_installer_url ?? ;
    $this->parameters = $parameters ?? [];
  }
}

class DescribeStackSummaryRequest {
  public string $stack_id;

  public function __construct(shape(
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? ;
  }
}

class DescribeStackSummaryResult {
  public StackSummary $stack_summary;

  public function __construct(shape(
  ?'stack_summary' => StackSummary,
  ) $s = shape()) {
    $this->stack_summary = $stack_summary ?? null;
  }
}

class DescribeStacksRequest {
  public Strings $stack_ids;

  public function __construct(shape(
  ?'stack_ids' => Strings,
  ) $s = shape()) {
    $this->stack_ids = $stack_ids ?? ;
  }
}

class DescribeStacksResult {
  public Stacks $stacks;

  public function __construct(shape(
  ?'stacks' => Stacks,
  ) $s = shape()) {
    $this->stacks = $stacks ?? [];
  }
}

class DescribeTimeBasedAutoScalingRequest {
  public Strings $instance_ids;

  public function __construct(shape(
  ?'instance_ids' => Strings,
  ) $s = shape()) {
    $this->instance_ids = $instance_ids ?? ;
  }
}

class DescribeTimeBasedAutoScalingResult {
  public TimeBasedAutoScalingConfigurations $time_based_auto_scaling_configurations;

  public function __construct(shape(
  ?'time_based_auto_scaling_configurations' => TimeBasedAutoScalingConfigurations,
  ) $s = shape()) {
    $this->time_based_auto_scaling_configurations = $time_based_auto_scaling_configurations ?? [];
  }
}

class DescribeUserProfilesRequest {
  public Strings $iam_user_arns;

  public function __construct(shape(
  ?'iam_user_arns' => Strings,
  ) $s = shape()) {
    $this->iam_user_arns = $iam_user_arns ?? ;
  }
}

class DescribeUserProfilesResult {
  public UserProfiles $user_profiles;

  public function __construct(shape(
  ?'user_profiles' => UserProfiles,
  ) $s = shape()) {
    $this->user_profiles = $user_profiles ?? [];
  }
}

class DescribeVolumesRequest {
  public string $instance_id;
  public string $raid_array_id;
  public string $stack_id;
  public Strings $volume_ids;

  public function __construct(shape(
  ?'instance_id' => string,
  ?'raid_array_id' => string,
  ?'stack_id' => string,
  ?'volume_ids' => Strings,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
    $this->raid_array_id = $raid_array_id ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->volume_ids = $volume_ids ?? ;
  }
}

class DescribeVolumesResult {
  public Volumes $volumes;

  public function __construct(shape(
  ?'volumes' => Volumes,
  ) $s = shape()) {
    $this->volumes = $volumes ?? [];
  }
}

class DetachElasticLoadBalancerRequest {
  public string $elastic_load_balancer_name;
  public string $layer_id;

  public function __construct(shape(
  ?'elastic_load_balancer_name' => string,
  ?'layer_id' => string,
  ) $s = shape()) {
    $this->elastic_load_balancer_name = $elastic_load_balancer_name ?? ;
    $this->layer_id = $layer_id ?? ;
  }
}

class DisassociateElasticIpRequest {
  public string $elastic_ip;

  public function __construct(shape(
  ?'elastic_ip' => string,
  ) $s = shape()) {
    $this->elastic_ip = $elastic_ip ?? null;
  }
}

type Double = float;

class EbsBlockDevice {
  public boolean $delete_on_termination;
  public int $iops;
  public string $snapshot_id;
  public int $volume_size;
  public VolumeType $volume_type;

  public function __construct(shape(
  ?'delete_on_termination' => boolean,
  ?'iops' => int,
  ?'snapshot_id' => string,
  ?'volume_size' => int,
  ?'volume_type' => VolumeType,
  ) $s = shape()) {
    $this->delete_on_termination = $delete_on_termination ?? ;
    $this->iops = $iops ?? ;
    $this->snapshot_id = $snapshot_id ?? ;
    $this->volume_size = $volume_size ?? ;
    $this->volume_type = $volume_type ?? "";
  }
}

class EcsCluster {
  public string $ecs_cluster_arn;
  public string $ecs_cluster_name;
  public DateTime $registered_at;
  public string $stack_id;

  public function __construct(shape(
  ?'ecs_cluster_arn' => string,
  ?'ecs_cluster_name' => string,
  ?'registered_at' => DateTime,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arn = $ecs_cluster_arn ?? ;
    $this->ecs_cluster_name = $ecs_cluster_name ?? ;
    $this->registered_at = $registered_at ?? ;
    $this->stack_id = $stack_id ?? ;
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
    $this->domain = $domain ?? ;
    $this->instance_id = $instance_id ?? ;
    $this->ip = $ip ?? ;
    $this->name = $name ?? ;
    $this->region = $region ?? ;
  }
}

type ElasticIps = vec<ElasticIp>;

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

  public function __construct(shape(
  ?'availability_zones' => Strings,
  ?'dns_name' => string,
  ?'ec_2_instance_ids' => Strings,
  ?'elastic_load_balancer_name' => string,
  ?'layer_id' => string,
  ?'region' => string,
  ?'stack_id' => string,
  ?'subnet_ids' => Strings,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->availability_zones = $availability_zones ?? ;
    $this->dns_name = $dns_name ?? ;
    $this->ec_2_instance_ids = $ec_2_instance_ids ?? ;
    $this->elastic_load_balancer_name = $elastic_load_balancer_name ?? ;
    $this->layer_id = $layer_id ?? ;
    $this->region = $region ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->vpc_id = $vpc_id ?? ;
  }
}

type ElasticLoadBalancers = vec<ElasticLoadBalancer>;

class EnvironmentVariable {
  public string $key;
  public boolean $secure;
  public string $value;

  public function __construct(shape(
  ?'key' => string,
  ?'secure' => boolean,
  ?'value' => string,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->secure = $secure ?? ;
    $this->value = $value ?? ;
  }
}

type EnvironmentVariables = vec<EnvironmentVariable>;

class GetHostnameSuggestionRequest {
  public string $layer_id;

  public function __construct(shape(
  ?'layer_id' => string,
  ) $s = shape()) {
    $this->layer_id = $layer_id ?? ;
  }
}

class GetHostnameSuggestionResult {
  public string $hostname;
  public string $layer_id;

  public function __construct(shape(
  ?'hostname' => string,
  ?'layer_id' => string,
  ) $s = shape()) {
    $this->hostname = $hostname ?? ;
    $this->layer_id = $layer_id ?? ;
  }
}

class GrantAccessRequest {
  public string $instance_id;
  public ValidForInMinutes $valid_for_in_minutes;

  public function __construct(shape(
  ?'instance_id' => string,
  ?'valid_for_in_minutes' => ValidForInMinutes,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
    $this->valid_for_in_minutes = $valid_for_in_minutes ?? 0;
  }
}

class GrantAccessResult {
  public TemporaryCredential $temporary_credential;

  public function __construct(shape(
  ?'temporary_credential' => TemporaryCredential,
  ) $s = shape()) {
    $this->temporary_credential = $temporary_credential ?? null;
  }
}

type Hour = string;

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

  public function __construct(shape(
  ?'agent_version' => string,
  ?'ami_id' => string,
  ?'architecture' => Architecture,
  ?'arn' => string,
  ?'auto_scaling_type' => AutoScalingType,
  ?'availability_zone' => string,
  ?'block_device_mappings' => BlockDeviceMappings,
  ?'created_at' => DateTime,
  ?'ebs_optimized' => boolean,
  ?'ec_2_instance_id' => string,
  ?'ecs_cluster_arn' => string,
  ?'ecs_container_instance_arn' => string,
  ?'elastic_ip' => string,
  ?'hostname' => string,
  ?'infrastructure_class' => string,
  ?'install_updates_on_boot' => boolean,
  ?'instance_id' => string,
  ?'instance_profile_arn' => string,
  ?'instance_type' => string,
  ?'last_service_error_id' => string,
  ?'layer_ids' => Strings,
  ?'os' => string,
  ?'platform' => string,
  ?'private_dns' => string,
  ?'private_ip' => string,
  ?'public_dns' => string,
  ?'public_ip' => string,
  ?'registered_by' => string,
  ?'reported_agent_version' => string,
  ?'reported_os' => ReportedOs,
  ?'root_device_type' => RootDeviceType,
  ?'root_device_volume_id' => string,
  ?'security_group_ids' => Strings,
  ?'ssh_host_dsa_key_fingerprint' => string,
  ?'ssh_host_rsa_key_fingerprint' => string,
  ?'ssh_key_name' => string,
  ?'stack_id' => string,
  ?'status' => string,
  ?'subnet_id' => string,
  ?'tenancy' => string,
  ?'virtualization_type' => VirtualizationType,
  ) $s = shape()) {
    $this->agent_version = $agent_version ?? null;
    $this->ami_id = $ami_id ?? ;
    $this->architecture = $architecture ?? "";
    $this->arn = $arn ?? ;
    $this->auto_scaling_type = $auto_scaling_type ?? "";
    $this->availability_zone = $availability_zone ?? ;
    $this->block_device_mappings = $block_device_mappings ?? [];
    $this->created_at = $created_at ?? ;
    $this->ebs_optimized = $ebs_optimized ?? ;
    $this->ec_2_instance_id = $ec_2_instance_id ?? ;
    $this->ecs_cluster_arn = $ecs_cluster_arn ?? ;
    $this->ecs_container_instance_arn = $ecs_container_instance_arn ?? ;
    $this->elastic_ip = $elastic_ip ?? null;
    $this->hostname = $hostname ?? ;
    $this->infrastructure_class = $infrastructure_class ?? ;
    $this->install_updates_on_boot = $install_updates_on_boot ?? ;
    $this->instance_id = $instance_id ?? ;
    $this->instance_profile_arn = $instance_profile_arn ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->last_service_error_id = $last_service_error_id ?? ;
    $this->layer_ids = $layer_ids ?? ;
    $this->os = $os ?? ;
    $this->platform = $platform ?? ;
    $this->private_dns = $private_dns ?? ;
    $this->private_ip = $private_ip ?? ;
    $this->public_dns = $public_dns ?? ;
    $this->public_ip = $public_ip ?? ;
    $this->registered_by = $registered_by ?? ;
    $this->reported_agent_version = $reported_agent_version ?? ;
    $this->reported_os = $reported_os ?? null;
    $this->root_device_type = $root_device_type ?? "";
    $this->root_device_volume_id = $root_device_volume_id ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->ssh_host_dsa_key_fingerprint = $ssh_host_dsa_key_fingerprint ?? ;
    $this->ssh_host_rsa_key_fingerprint = $ssh_host_rsa_key_fingerprint ?? ;
    $this->ssh_key_name = $ssh_key_name ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->status = $status ?? ;
    $this->subnet_id = $subnet_id ?? ;
    $this->tenancy = $tenancy ?? ;
    $this->virtualization_type = $virtualization_type ?? "";
  }
}

class InstanceIdentity {
  public string $document;
  public string $signature;

  public function __construct(shape(
  ?'document' => string,
  ?'signature' => string,
  ) $s = shape()) {
    $this->document = $document ?? ;
    $this->signature = $signature ?? ;
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
    $this->assigning = $assigning ?? ;
    $this->booting = $booting ?? ;
    $this->connection_lost = $connection_lost ?? ;
    $this->deregistering = $deregistering ?? ;
    $this->online = $online ?? ;
    $this->pending = $pending ?? ;
    $this->rebooting = $rebooting ?? ;
    $this->registered = $registered ?? ;
    $this->registering = $registering ?? ;
    $this->requested = $requested ?? ;
    $this->running_setup = $running_setup ?? ;
    $this->setup_failed = $setup_failed ?? ;
    $this->shutting_down = $shutting_down ?? ;
    $this->start_failed = $start_failed ?? ;
    $this->stop_failed = $stop_failed ?? ;
    $this->stopped = $stopped ?? ;
    $this->stopping = $stopping ?? ;
    $this->terminated = $terminated ?? ;
    $this->terminating = $terminating ?? ;
    $this->unassigning = $unassigning ?? ;
  }
}

type Integer = int;

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

  public function __construct(shape(
  ?'arn' => string,
  ?'attributes' => LayerAttributes,
  ?'auto_assign_elastic_ips' => boolean,
  ?'auto_assign_public_ips' => boolean,
  ?'cloud_watch_logs_configuration' => CloudWatchLogsConfiguration,
  ?'created_at' => DateTime,
  ?'custom_instance_profile_arn' => string,
  ?'custom_json' => string,
  ?'custom_recipes' => Recipes,
  ?'custom_security_group_ids' => Strings,
  ?'default_recipes' => Recipes,
  ?'default_security_group_names' => Strings,
  ?'enable_auto_healing' => boolean,
  ?'install_updates_on_boot' => boolean,
  ?'layer_id' => string,
  ?'lifecycle_event_configuration' => LifecycleEventConfiguration,
  ?'name' => string,
  ?'packages' => Strings,
  ?'shortname' => string,
  ?'stack_id' => string,
  ?'type' => LayerType,
  ?'use_ebs_optimized_instances' => boolean,
  ?'volume_configurations' => VolumeConfigurations,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->attributes = $attributes ?? ;
    $this->auto_assign_elastic_ips = $auto_assign_elastic_ips ?? ;
    $this->auto_assign_public_ips = $auto_assign_public_ips ?? ;
    $this->cloud_watch_logs_configuration = $cloud_watch_logs_configuration ?? null;
    $this->created_at = $created_at ?? ;
    $this->custom_instance_profile_arn = $custom_instance_profile_arn ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->custom_recipes = $custom_recipes ?? ;
    $this->custom_security_group_ids = $custom_security_group_ids ?? ;
    $this->default_recipes = $default_recipes ?? ;
    $this->default_security_group_names = $default_security_group_names ?? ;
    $this->enable_auto_healing = $enable_auto_healing ?? ;
    $this->install_updates_on_boot = $install_updates_on_boot ?? ;
    $this->layer_id = $layer_id ?? ;
    $this->lifecycle_event_configuration = $lifecycle_event_configuration ?? null;
    $this->name = $name ?? ;
    $this->packages = $packages ?? ;
    $this->shortname = $shortname ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->type = $type ?? ;
    $this->use_ebs_optimized_instances = $use_ebs_optimized_instances ?? ;
    $this->volume_configurations = $volume_configurations ?? [];
  }
}

type LayerAttributes = dict<LayerAttributesKeys, String>;

type LayerAttributesKeys = string;

type LayerType = string;

type Layers = vec<Layer>;

class LifecycleEventConfiguration {
  public ShutdownEventConfiguration $shutdown;

  public function __construct(shape(
  ?'shutdown' => ShutdownEventConfiguration,
  ) $s = shape()) {
    $this->shutdown = $shutdown ?? ;
  }
}

class ListTagsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsResult {
  public NextToken $next_token;
  public Tags $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? [];
  }
}

class LoadBasedAutoScalingConfiguration {
  public AutoScalingThresholds $down_scaling;
  public boolean $enable;
  public string $layer_id;
  public AutoScalingThresholds $up_scaling;

  public function __construct(shape(
  ?'down_scaling' => AutoScalingThresholds,
  ?'enable' => boolean,
  ?'layer_id' => string,
  ?'up_scaling' => AutoScalingThresholds,
  ) $s = shape()) {
    $this->down_scaling = $down_scaling ?? ;
    $this->enable = $enable ?? ;
    $this->layer_id = $layer_id ?? ;
    $this->up_scaling = $up_scaling ?? ;
  }
}

type LoadBasedAutoScalingConfigurations = vec<LoadBasedAutoScalingConfiguration>;

type MaxResults = int;

type Minute = int;

type NextToken = string;

class OperatingSystem {
  public OperatingSystemConfigurationManagers $configuration_managers;
  public string $id;
  public string $name;
  public string $reported_name;
  public string $reported_version;
  public boolean $supported;
  public string $type;

  public function __construct(shape(
  ?'configuration_managers' => OperatingSystemConfigurationManagers,
  ?'id' => string,
  ?'name' => string,
  ?'reported_name' => string,
  ?'reported_version' => string,
  ?'supported' => boolean,
  ?'type' => string,
  ) $s = shape()) {
    $this->configuration_managers = $configuration_managers ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->reported_name = $reported_name ?? ;
    $this->reported_version = $reported_version ?? ;
    $this->supported = $supported ?? ;
    $this->type = $type ?? ;
  }
}

class OperatingSystemConfigurationManager {
  public string $name;
  public string $version;

  public function __construct(shape(
  ?'name' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->version = $version ?? ;
  }
}

type OperatingSystemConfigurationManagers = vec<OperatingSystemConfigurationManager>;

type OperatingSystems = vec<OperatingSystem>;

type Parameters = dict<String, String>;

class Permission {
  public boolean $allow_ssh;
  public boolean $allow_sudo;
  public string $iam_user_arn;
  public string $level;
  public string $stack_id;

  public function __construct(shape(
  ?'allow_ssh' => boolean,
  ?'allow_sudo' => boolean,
  ?'iam_user_arn' => string,
  ?'level' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->allow_ssh = $allow_ssh ?? ;
    $this->allow_sudo = $allow_sudo ?? ;
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->level = $level ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

type Permissions = vec<Permission>;

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

  public function __construct(shape(
  ?'availability_zone' => string,
  ?'created_at' => DateTime,
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
    $this->availability_zone = $availability_zone ?? ;
    $this->created_at = $created_at ?? ;
    $this->device = $device ?? ;
    $this->instance_id = $instance_id ?? ;
    $this->iops = $iops ?? ;
    $this->mount_point = $mount_point ?? ;
    $this->name = $name ?? ;
    $this->number_of_disks = $number_of_disks ?? ;
    $this->raid_array_id = $raid_array_id ?? ;
    $this->raid_level = $raid_level ?? ;
    $this->size = $size ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->volume_type = $volume_type ?? "";
  }
}

type RaidArrays = vec<RaidArray>;

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

  public function __construct(shape(
  ?'address' => string,
  ?'db_instance_identifier' => string,
  ?'db_password' => string,
  ?'db_user' => string,
  ?'engine' => string,
  ?'missing_on_rds' => boolean,
  ?'rds_db_instance_arn' => string,
  ?'region' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->db_instance_identifier = $db_instance_identifier ?? ;
    $this->db_password = $db_password ?? ;
    $this->db_user = $db_user ?? ;
    $this->engine = $engine ?? ;
    $this->missing_on_rds = $missing_on_rds ?? ;
    $this->rds_db_instance_arn = $rds_db_instance_arn ?? ;
    $this->region = $region ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

type RdsDbInstances = vec<RdsDbInstance>;

class RebootInstanceRequest {
  public string $instance_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
  }
}

class Recipes {
  public Strings $configure;
  public Strings $deploy;
  public Strings $setup;
  public Strings $shutdown;
  public Strings $undeploy;

  public function __construct(shape(
  ?'configure' => Strings,
  ?'deploy' => Strings,
  ?'setup' => Strings,
  ?'shutdown' => Strings,
  ?'undeploy' => Strings,
  ) $s = shape()) {
    $this->configure = $configure ?? ;
    $this->deploy = $deploy ?? ;
    $this->setup = $setup ?? ;
    $this->shutdown = $shutdown ?? ;
    $this->undeploy = $undeploy ?? ;
  }
}

class RegisterEcsClusterRequest {
  public string $ecs_cluster_arn;
  public string $stack_id;

  public function __construct(shape(
  ?'ecs_cluster_arn' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arn = $ecs_cluster_arn ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class RegisterEcsClusterResult {
  public string $ecs_cluster_arn;

  public function __construct(shape(
  ?'ecs_cluster_arn' => string,
  ) $s = shape()) {
    $this->ecs_cluster_arn = $ecs_cluster_arn ?? ;
  }
}

class RegisterElasticIpRequest {
  public string $elastic_ip;
  public string $stack_id;

  public function __construct(shape(
  ?'elastic_ip' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->elastic_ip = $elastic_ip ?? null;
    $this->stack_id = $stack_id ?? ;
  }
}

class RegisterElasticIpResult {
  public string $elastic_ip;

  public function __construct(shape(
  ?'elastic_ip' => string,
  ) $s = shape()) {
    $this->elastic_ip = $elastic_ip ?? null;
  }
}

class RegisterInstanceRequest {
  public string $hostname;
  public InstanceIdentity $instance_identity;
  public string $private_ip;
  public string $public_ip;
  public string $rsa_public_key;
  public string $rsa_public_key_fingerprint;
  public string $stack_id;

  public function __construct(shape(
  ?'hostname' => string,
  ?'instance_identity' => InstanceIdentity,
  ?'private_ip' => string,
  ?'public_ip' => string,
  ?'rsa_public_key' => string,
  ?'rsa_public_key_fingerprint' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->hostname = $hostname ?? ;
    $this->instance_identity = $instance_identity ?? null;
    $this->private_ip = $private_ip ?? ;
    $this->public_ip = $public_ip ?? ;
    $this->rsa_public_key = $rsa_public_key ?? ;
    $this->rsa_public_key_fingerprint = $rsa_public_key_fingerprint ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class RegisterInstanceResult {
  public string $instance_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
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
    $this->db_password = $db_password ?? ;
    $this->db_user = $db_user ?? ;
    $this->rds_db_instance_arn = $rds_db_instance_arn ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class RegisterVolumeRequest {
  public string $ec_2_volume_id;
  public string $stack_id;

  public function __construct(shape(
  ?'ec_2_volume_id' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->ec_2_volume_id = $ec_2_volume_id ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class RegisterVolumeResult {
  public string $volume_id;

  public function __construct(shape(
  ?'volume_id' => string,
  ) $s = shape()) {
    $this->volume_id = $volume_id ?? ;
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
    $this->family = $family ?? ;
    $this->name = $name ?? ;
    $this->version = $version ?? ;
  }
}

type ResourceArn = string;

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
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
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->name = $name ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->ssh_username = $ssh_username ?? ;
  }
}

class ServiceError {
  public DateTime $created_at;
  public string $instance_id;
  public string $message;
  public string $service_error_id;
  public string $stack_id;
  public string $type;

  public function __construct(shape(
  ?'created_at' => DateTime,
  ?'instance_id' => string,
  ?'message' => string,
  ?'service_error_id' => string,
  ?'stack_id' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->instance_id = $instance_id ?? ;
    $this->message = $message ?? ;
    $this->service_error_id = $service_error_id ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->type = $type ?? ;
  }
}

type ServiceErrors = vec<ServiceError>;

class SetLoadBasedAutoScalingRequest {
  public AutoScalingThresholds $down_scaling;
  public boolean $enable;
  public string $layer_id;
  public AutoScalingThresholds $up_scaling;

  public function __construct(shape(
  ?'down_scaling' => AutoScalingThresholds,
  ?'enable' => boolean,
  ?'layer_id' => string,
  ?'up_scaling' => AutoScalingThresholds,
  ) $s = shape()) {
    $this->down_scaling = $down_scaling ?? ;
    $this->enable = $enable ?? ;
    $this->layer_id = $layer_id ?? ;
    $this->up_scaling = $up_scaling ?? ;
  }
}

class SetPermissionRequest {
  public boolean $allow_ssh;
  public boolean $allow_sudo;
  public string $iam_user_arn;
  public string $level;
  public string $stack_id;

  public function __construct(shape(
  ?'allow_ssh' => boolean,
  ?'allow_sudo' => boolean,
  ?'iam_user_arn' => string,
  ?'level' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->allow_ssh = $allow_ssh ?? ;
    $this->allow_sudo = $allow_sudo ?? ;
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->level = $level ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

class SetTimeBasedAutoScalingRequest {
  public WeeklyAutoScalingSchedule $auto_scaling_schedule;
  public string $instance_id;

  public function __construct(shape(
  ?'auto_scaling_schedule' => WeeklyAutoScalingSchedule,
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->auto_scaling_schedule = $auto_scaling_schedule ?? ;
    $this->instance_id = $instance_id ?? ;
  }
}

class ShutdownEventConfiguration {
  public boolean $delay_until_elb_connections_drained;
  public int $execution_timeout;

  public function __construct(shape(
  ?'delay_until_elb_connections_drained' => boolean,
  ?'execution_timeout' => int,
  ) $s = shape()) {
    $this->delay_until_elb_connections_drained = $delay_until_elb_connections_drained ?? ;
    $this->execution_timeout = $execution_timeout ?? ;
  }
}

class Source {
  public string $password;
  public string $revision;
  public string $ssh_key;
  public SourceType $type;
  public string $url;
  public string $username;

  public function __construct(shape(
  ?'password' => string,
  ?'revision' => string,
  ?'ssh_key' => string,
  ?'type' => SourceType,
  ?'url' => string,
  ?'username' => string,
  ) $s = shape()) {
    $this->password = $password ?? ;
    $this->revision = $revision ?? ;
    $this->ssh_key = $ssh_key ?? ;
    $this->type = $type ?? ;
    $this->url = $url ?? ;
    $this->username = $username ?? ;
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
    $this->certificate = $certificate ?? ;
    $this->chain = $chain ?? ;
    $this->private_key = $private_key ?? ;
  }
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

  public function __construct(shape(
  ?'agent_version' => string,
  ?'arn' => string,
  ?'attributes' => StackAttributes,
  ?'chef_configuration' => ChefConfiguration,
  ?'configuration_manager' => StackConfigurationManager,
  ?'created_at' => DateTime,
  ?'custom_cookbooks_source' => Source,
  ?'custom_json' => string,
  ?'default_availability_zone' => string,
  ?'default_instance_profile_arn' => string,
  ?'default_os' => string,
  ?'default_root_device_type' => RootDeviceType,
  ?'default_ssh_key_name' => string,
  ?'default_subnet_id' => string,
  ?'hostname_theme' => string,
  ?'name' => string,
  ?'region' => string,
  ?'service_role_arn' => string,
  ?'stack_id' => string,
  ?'use_custom_cookbooks' => boolean,
  ?'use_opsworks_security_groups' => boolean,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->agent_version = $agent_version ?? null;
    $this->arn = $arn ?? ;
    $this->attributes = $attributes ?? ;
    $this->chef_configuration = $chef_configuration ?? null;
    $this->configuration_manager = $configuration_manager ?? ;
    $this->created_at = $created_at ?? ;
    $this->custom_cookbooks_source = $custom_cookbooks_source ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->default_availability_zone = $default_availability_zone ?? ;
    $this->default_instance_profile_arn = $default_instance_profile_arn ?? ;
    $this->default_os = $default_os ?? ;
    $this->default_root_device_type = $default_root_device_type ?? ;
    $this->default_ssh_key_name = $default_ssh_key_name ?? ;
    $this->default_subnet_id = $default_subnet_id ?? ;
    $this->hostname_theme = $hostname_theme ?? ;
    $this->name = $name ?? ;
    $this->region = $region ?? ;
    $this->service_role_arn = $service_role_arn ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->use_custom_cookbooks = $use_custom_cookbooks ?? ;
    $this->use_opsworks_security_groups = $use_opsworks_security_groups ?? ;
    $this->vpc_id = $vpc_id ?? ;
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
    $this->name = $name ?? ;
    $this->version = $version ?? ;
  }
}

class StackSummary {
  public int $apps_count;
  public string $arn;
  public InstancesCount $instances_count;
  public int $layers_count;
  public string $name;
  public string $stack_id;

  public function __construct(shape(
  ?'apps_count' => int,
  ?'arn' => string,
  ?'instances_count' => InstancesCount,
  ?'layers_count' => int,
  ?'name' => string,
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->apps_count = $apps_count ?? ;
    $this->arn = $arn ?? ;
    $this->instances_count = $instances_count ?? null;
    $this->layers_count = $layers_count ?? ;
    $this->name = $name ?? ;
    $this->stack_id = $stack_id ?? ;
  }
}

type Stacks = vec<Stack>;

class StartInstanceRequest {
  public string $instance_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
  }
}

class StartStackRequest {
  public string $stack_id;

  public function __construct(shape(
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? ;
  }
}

class StopInstanceRequest {
  public boolean $force;
  public string $instance_id;

  public function __construct(shape(
  ?'force' => boolean,
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->force = $force ?? ;
    $this->instance_id = $instance_id ?? ;
  }
}

class StopStackRequest {
  public string $stack_id;

  public function __construct(shape(
  ?'stack_id' => string,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? ;
  }
}

type String = string;

type Strings = vec<String>;

type Switch = string;

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
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
    $this->instance_id = $instance_id ?? ;
    $this->password = $password ?? ;
    $this->username = $username ?? ;
    $this->valid_for_in_minutes = $valid_for_in_minutes ?? 0;
  }
}

class TimeBasedAutoScalingConfiguration {
  public WeeklyAutoScalingSchedule $auto_scaling_schedule;
  public string $instance_id;

  public function __construct(shape(
  ?'auto_scaling_schedule' => WeeklyAutoScalingSchedule,
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->auto_scaling_schedule = $auto_scaling_schedule ?? ;
    $this->instance_id = $instance_id ?? ;
  }
}

type TimeBasedAutoScalingConfigurations = vec<TimeBasedAutoScalingConfiguration>;

class UnassignInstanceRequest {
  public string $instance_id;

  public function __construct(shape(
  ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? ;
  }
}

class UnassignVolumeRequest {
  public string $volume_id;

  public function __construct(shape(
  ?'volume_id' => string,
  ) $s = shape()) {
    $this->volume_id = $volume_id ?? ;
  }
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
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

  public function __construct(shape(
  ?'app_id' => string,
  ?'app_source' => Source,
  ?'attributes' => AppAttributes,
  ?'data_sources' => DataSources,
  ?'description' => string,
  ?'domains' => Strings,
  ?'enable_ssl' => boolean,
  ?'environment' => EnvironmentVariables,
  ?'name' => string,
  ?'ssl_configuration' => SslConfiguration,
  ?'type' => AppType,
  ) $s = shape()) {
    $this->app_id = $app_id ?? ;
    $this->app_source = $app_source ?? ;
    $this->attributes = $attributes ?? ;
    $this->data_sources = $data_sources ?? [];
    $this->description = $description ?? ;
    $this->domains = $domains ?? ;
    $this->enable_ssl = $enable_ssl ?? ;
    $this->environment = $environment ?? ;
    $this->name = $name ?? ;
    $this->ssl_configuration = $ssl_configuration ?? null;
    $this->type = $type ?? ;
  }
}

class UpdateElasticIpRequest {
  public string $elastic_ip;
  public string $name;

  public function __construct(shape(
  ?'elastic_ip' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->elastic_ip = $elastic_ip ?? null;
    $this->name = $name ?? ;
  }
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

  public function __construct(shape(
  ?'agent_version' => string,
  ?'ami_id' => string,
  ?'architecture' => Architecture,
  ?'auto_scaling_type' => AutoScalingType,
  ?'ebs_optimized' => boolean,
  ?'hostname' => string,
  ?'install_updates_on_boot' => boolean,
  ?'instance_id' => string,
  ?'instance_type' => string,
  ?'layer_ids' => Strings,
  ?'os' => string,
  ?'ssh_key_name' => string,
  ) $s = shape()) {
    $this->agent_version = $agent_version ?? null;
    $this->ami_id = $ami_id ?? ;
    $this->architecture = $architecture ?? "";
    $this->auto_scaling_type = $auto_scaling_type ?? "";
    $this->ebs_optimized = $ebs_optimized ?? ;
    $this->hostname = $hostname ?? ;
    $this->install_updates_on_boot = $install_updates_on_boot ?? ;
    $this->instance_id = $instance_id ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->layer_ids = $layer_ids ?? ;
    $this->os = $os ?? ;
    $this->ssh_key_name = $ssh_key_name ?? ;
  }
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

  public function __construct(shape(
  ?'attributes' => LayerAttributes,
  ?'auto_assign_elastic_ips' => boolean,
  ?'auto_assign_public_ips' => boolean,
  ?'cloud_watch_logs_configuration' => CloudWatchLogsConfiguration,
  ?'custom_instance_profile_arn' => string,
  ?'custom_json' => string,
  ?'custom_recipes' => Recipes,
  ?'custom_security_group_ids' => Strings,
  ?'enable_auto_healing' => boolean,
  ?'install_updates_on_boot' => boolean,
  ?'layer_id' => string,
  ?'lifecycle_event_configuration' => LifecycleEventConfiguration,
  ?'name' => string,
  ?'packages' => Strings,
  ?'shortname' => string,
  ?'use_ebs_optimized_instances' => boolean,
  ?'volume_configurations' => VolumeConfigurations,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->auto_assign_elastic_ips = $auto_assign_elastic_ips ?? ;
    $this->auto_assign_public_ips = $auto_assign_public_ips ?? ;
    $this->cloud_watch_logs_configuration = $cloud_watch_logs_configuration ?? null;
    $this->custom_instance_profile_arn = $custom_instance_profile_arn ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->custom_recipes = $custom_recipes ?? ;
    $this->custom_security_group_ids = $custom_security_group_ids ?? ;
    $this->enable_auto_healing = $enable_auto_healing ?? ;
    $this->install_updates_on_boot = $install_updates_on_boot ?? ;
    $this->layer_id = $layer_id ?? ;
    $this->lifecycle_event_configuration = $lifecycle_event_configuration ?? null;
    $this->name = $name ?? ;
    $this->packages = $packages ?? ;
    $this->shortname = $shortname ?? ;
    $this->use_ebs_optimized_instances = $use_ebs_optimized_instances ?? ;
    $this->volume_configurations = $volume_configurations ?? [];
  }
}

class UpdateMyUserProfileRequest {
  public string $ssh_public_key;

  public function __construct(shape(
  ?'ssh_public_key' => string,
  ) $s = shape()) {
    $this->ssh_public_key = $ssh_public_key ?? ;
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
    $this->db_password = $db_password ?? ;
    $this->db_user = $db_user ?? ;
    $this->rds_db_instance_arn = $rds_db_instance_arn ?? ;
  }
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

  public function __construct(shape(
  ?'agent_version' => string,
  ?'attributes' => StackAttributes,
  ?'chef_configuration' => ChefConfiguration,
  ?'configuration_manager' => StackConfigurationManager,
  ?'custom_cookbooks_source' => Source,
  ?'custom_json' => string,
  ?'default_availability_zone' => string,
  ?'default_instance_profile_arn' => string,
  ?'default_os' => string,
  ?'default_root_device_type' => RootDeviceType,
  ?'default_ssh_key_name' => string,
  ?'default_subnet_id' => string,
  ?'hostname_theme' => string,
  ?'name' => string,
  ?'service_role_arn' => string,
  ?'stack_id' => string,
  ?'use_custom_cookbooks' => boolean,
  ?'use_opsworks_security_groups' => boolean,
  ) $s = shape()) {
    $this->agent_version = $agent_version ?? null;
    $this->attributes = $attributes ?? ;
    $this->chef_configuration = $chef_configuration ?? null;
    $this->configuration_manager = $configuration_manager ?? ;
    $this->custom_cookbooks_source = $custom_cookbooks_source ?? ;
    $this->custom_json = $custom_json ?? ;
    $this->default_availability_zone = $default_availability_zone ?? ;
    $this->default_instance_profile_arn = $default_instance_profile_arn ?? ;
    $this->default_os = $default_os ?? ;
    $this->default_root_device_type = $default_root_device_type ?? ;
    $this->default_ssh_key_name = $default_ssh_key_name ?? ;
    $this->default_subnet_id = $default_subnet_id ?? ;
    $this->hostname_theme = $hostname_theme ?? ;
    $this->name = $name ?? ;
    $this->service_role_arn = $service_role_arn ?? ;
    $this->stack_id = $stack_id ?? ;
    $this->use_custom_cookbooks = $use_custom_cookbooks ?? ;
    $this->use_opsworks_security_groups = $use_opsworks_security_groups ?? ;
  }
}

class UpdateUserProfileRequest {
  public boolean $allow_self_management;
  public string $iam_user_arn;
  public string $ssh_public_key;
  public string $ssh_username;

  public function __construct(shape(
  ?'allow_self_management' => boolean,
  ?'iam_user_arn' => string,
  ?'ssh_public_key' => string,
  ?'ssh_username' => string,
  ) $s = shape()) {
    $this->allow_self_management = $allow_self_management ?? ;
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->ssh_username = $ssh_username ?? ;
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
    $this->mount_point = $mount_point ?? ;
    $this->name = $name ?? ;
    $this->volume_id = $volume_id ?? ;
  }
}

class UserProfile {
  public boolean $allow_self_management;
  public string $iam_user_arn;
  public string $name;
  public string $ssh_public_key;
  public string $ssh_username;

  public function __construct(shape(
  ?'allow_self_management' => boolean,
  ?'iam_user_arn' => string,
  ?'name' => string,
  ?'ssh_public_key' => string,
  ?'ssh_username' => string,
  ) $s = shape()) {
    $this->allow_self_management = $allow_self_management ?? ;
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->name = $name ?? ;
    $this->ssh_public_key = $ssh_public_key ?? ;
    $this->ssh_username = $ssh_username ?? ;
  }
}

type UserProfiles = vec<UserProfile>;

type ValidForInMinutes = int;

class ValidationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type VirtualizationType = string;

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

  public function __construct(shape(
  ?'availability_zone' => string,
  ?'device' => string,
  ?'ec_2_volume_id' => string,
  ?'encrypted' => boolean,
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
    $this->availability_zone = $availability_zone ?? ;
    $this->device = $device ?? ;
    $this->ec_2_volume_id = $ec_2_volume_id ?? ;
    $this->encrypted = $encrypted ?? ;
    $this->instance_id = $instance_id ?? ;
    $this->iops = $iops ?? ;
    $this->mount_point = $mount_point ?? ;
    $this->name = $name ?? ;
    $this->raid_array_id = $raid_array_id ?? ;
    $this->region = $region ?? ;
    $this->size = $size ?? ;
    $this->status = $status ?? ;
    $this->volume_id = $volume_id ?? ;
    $this->volume_type = $volume_type ?? "";
  }
}

class VolumeConfiguration {
  public boolean $encrypted;
  public int $iops;
  public string $mount_point;
  public int $number_of_disks;
  public int $raid_level;
  public int $size;
  public string $volume_type;

  public function __construct(shape(
  ?'encrypted' => boolean,
  ?'iops' => int,
  ?'mount_point' => string,
  ?'number_of_disks' => int,
  ?'raid_level' => int,
  ?'size' => int,
  ?'volume_type' => string,
  ) $s = shape()) {
    $this->encrypted = $encrypted ?? ;
    $this->iops = $iops ?? ;
    $this->mount_point = $mount_point ?? ;
    $this->number_of_disks = $number_of_disks ?? ;
    $this->raid_level = $raid_level ?? ;
    $this->size = $size ?? ;
    $this->volume_type = $volume_type ?? "";
  }
}

type VolumeConfigurations = vec<VolumeConfiguration>;

type VolumeType = string;

type Volumes = vec<Volume>;

class WeeklyAutoScalingSchedule {
  public DailyAutoScalingSchedule $friday;
  public DailyAutoScalingSchedule $monday;
  public DailyAutoScalingSchedule $saturday;
  public DailyAutoScalingSchedule $sunday;
  public DailyAutoScalingSchedule $thursday;
  public DailyAutoScalingSchedule $tuesday;
  public DailyAutoScalingSchedule $wednesday;

  public function __construct(shape(
  ?'friday' => DailyAutoScalingSchedule,
  ?'monday' => DailyAutoScalingSchedule,
  ?'saturday' => DailyAutoScalingSchedule,
  ?'sunday' => DailyAutoScalingSchedule,
  ?'thursday' => DailyAutoScalingSchedule,
  ?'tuesday' => DailyAutoScalingSchedule,
  ?'wednesday' => DailyAutoScalingSchedule,
  ) $s = shape()) {
    $this->friday = $friday ?? ;
    $this->monday = $monday ?? ;
    $this->saturday = $saturday ?? ;
    $this->sunday = $sunday ?? ;
    $this->thursday = $thursday ?? ;
    $this->tuesday = $tuesday ?? ;
    $this->wednesday = $wednesday ?? ;
  }
}

