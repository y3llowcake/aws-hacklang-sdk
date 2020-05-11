<?hh // strict
namespace slack\aws\mq;

interface mq {
  public function CreateBroker(CreateBrokerRequest): Awaitable<Errors\Result<CreateBrokerResponse>>;
  public function CreateConfiguration(CreateConfigurationRequest): Awaitable<Errors\Result<CreateConfigurationResponse>>;
  public function CreateTags(CreateTagsRequest): Awaitable<Errors\Error>;
  public function CreateUser(CreateUserRequest): Awaitable<Errors\Result<CreateUserResponse>>;
  public function DeleteBroker(DeleteBrokerRequest): Awaitable<Errors\Result<DeleteBrokerResponse>>;
  public function DeleteTags(DeleteTagsRequest): Awaitable<Errors\Error>;
  public function DeleteUser(DeleteUserRequest): Awaitable<Errors\Result<DeleteUserResponse>>;
  public function DescribeBroker(DescribeBrokerRequest): Awaitable<Errors\Result<DescribeBrokerResponse>>;
  public function DescribeBrokerEngineTypes(DescribeBrokerEngineTypesRequest): Awaitable<Errors\Result<DescribeBrokerEngineTypesResponse>>;
  public function DescribeBrokerInstanceOptions(DescribeBrokerInstanceOptionsRequest): Awaitable<Errors\Result<DescribeBrokerInstanceOptionsResponse>>;
  public function DescribeConfiguration(DescribeConfigurationRequest): Awaitable<Errors\Result<DescribeConfigurationResponse>>;
  public function DescribeConfigurationRevision(DescribeConfigurationRevisionRequest): Awaitable<Errors\Result<DescribeConfigurationRevisionResponse>>;
  public function DescribeUser(DescribeUserRequest): Awaitable<Errors\Result<DescribeUserResponse>>;
  public function ListBrokers(ListBrokersRequest): Awaitable<Errors\Result<ListBrokersResponse>>;
  public function ListConfigurationRevisions(ListConfigurationRevisionsRequest): Awaitable<Errors\Result<ListConfigurationRevisionsResponse>>;
  public function ListConfigurations(ListConfigurationsRequest): Awaitable<Errors\Result<ListConfigurationsResponse>>;
  public function ListTags(ListTagsRequest): Awaitable<Errors\Result<ListTagsResponse>>;
  public function ListUsers(ListUsersRequest): Awaitable<Errors\Result<ListUsersResponse>>;
  public function RebootBroker(RebootBrokerRequest): Awaitable<Errors\Result<RebootBrokerResponse>>;
  public function UpdateBroker(UpdateBrokerRequest): Awaitable<Errors\Result<UpdateBrokerResponse>>;
  public function UpdateConfiguration(UpdateConfigurationRequest): Awaitable<Errors\Result<UpdateConfigurationResponse>>;
  public function UpdateUser(UpdateUserRequest): Awaitable<Errors\Result<UpdateUserResponse>>;
}

class AvailabilityZone {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class BadRequestException {
  public __string $error_attribute;
  public __string $message;

  public function __construct(shape(
  ?'error_attribute' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_attribute = $error_attribute ?? ;
    $this->message = $message ?? ;
  }
}

class BrokerEngineType {
  public EngineType $engine_type;
  public __listOfEngineVersion $engine_versions;

  public function __construct(shape(
  ?'engine_type' => EngineType,
  ?'engine_versions' => __listOfEngineVersion,
  ) $s = shape()) {
    $this->engine_type = $engine_type ?? "";
    $this->engine_versions = $engine_versions ?? ;
  }
}

class BrokerEngineTypeOutput {
  public __listOfBrokerEngineType $broker_engine_types;
  public __integerMin5Max100 $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'broker_engine_types' => __listOfBrokerEngineType,
  ?'max_results' => __integerMin5Max100,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->broker_engine_types = $broker_engine_types ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class BrokerInstance {
  public __string $console_url;
  public __listOf__string $endpoints;
  public __string $ip_address;

  public function __construct(shape(
  ?'console_url' => __string,
  ?'endpoints' => __listOf__string,
  ?'ip_address' => __string,
  ) $s = shape()) {
    $this->console_url = $console_url ?? ;
    $this->endpoints = $endpoints ?? ;
    $this->ip_address = $ip_address ?? ;
  }
}

class BrokerInstanceOption {
  public __listOfAvailabilityZone $availability_zones;
  public EngineType $engine_type;
  public __string $host_instance_type;
  public BrokerStorageType $storage_type;
  public __listOfDeploymentMode $supported_deployment_modes;
  public __listOf__string $supported_engine_versions;

  public function __construct(shape(
  ?'availability_zones' => __listOfAvailabilityZone,
  ?'engine_type' => EngineType,
  ?'host_instance_type' => __string,
  ?'storage_type' => BrokerStorageType,
  ?'supported_deployment_modes' => __listOfDeploymentMode,
  ?'supported_engine_versions' => __listOf__string,
  ) $s = shape()) {
    $this->availability_zones = $availability_zones ?? ;
    $this->engine_type = $engine_type ?? "";
    $this->host_instance_type = $host_instance_type ?? ;
    $this->storage_type = $storage_type ?? ;
    $this->supported_deployment_modes = $supported_deployment_modes ?? ;
    $this->supported_engine_versions = $supported_engine_versions ?? ;
  }
}

class BrokerInstanceOptionsOutput {
  public __listOfBrokerInstanceOption $broker_instance_options;
  public __integerMin5Max100 $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'broker_instance_options' => __listOfBrokerInstanceOption,
  ?'max_results' => __integerMin5Max100,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->broker_instance_options = $broker_instance_options ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

type BrokerState = string;

type BrokerStorageType = string;

class BrokerSummary {
  public __string $broker_arn;
  public __string $broker_id;
  public __string $broker_name;
  public BrokerState $broker_state;
  public __timestampIso8601 $created;
  public DeploymentMode $deployment_mode;
  public __string $host_instance_type;

  public function __construct(shape(
  ?'broker_arn' => __string,
  ?'broker_id' => __string,
  ?'broker_name' => __string,
  ?'broker_state' => BrokerState,
  ?'created' => __timestampIso8601,
  ?'deployment_mode' => DeploymentMode,
  ?'host_instance_type' => __string,
  ) $s = shape()) {
    $this->broker_arn = $broker_arn ?? ;
    $this->broker_id = $broker_id ?? ;
    $this->broker_name = $broker_name ?? ;
    $this->broker_state = $broker_state ?? "";
    $this->created = $created ?? ;
    $this->deployment_mode = $deployment_mode ?? "";
    $this->host_instance_type = $host_instance_type ?? ;
  }
}

type ChangeType = string;

class Configuration {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $description;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'created' => __timestampIso8601,
  ?'description' => __string,
  ?'engine_type' => EngineType,
  ?'engine_version' => __string,
  ?'id' => __string,
  ?'latest_revision' => ConfigurationRevision,
  ?'name' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created = $created ?? ;
    $this->description = $description ?? ;
    $this->engine_type = $engine_type ?? "";
    $this->engine_version = $engine_version ?? null;
    $this->id = $id ?? ;
    $this->latest_revision = $latest_revision ?? ;
    $this->name = $name ?? ;
    $this->tags = $tags ?? null;
  }
}

class ConfigurationId {
  public __string $id;
  public __integer $revision;

  public function __construct(shape(
  ?'id' => __string,
  ?'revision' => __integer,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->revision = $revision ?? ;
  }
}

class ConfigurationRevision {
  public __timestampIso8601 $created;
  public __string $description;
  public __integer $revision;

  public function __construct(shape(
  ?'created' => __timestampIso8601,
  ?'description' => __string,
  ?'revision' => __integer,
  ) $s = shape()) {
    $this->created = $created ?? ;
    $this->description = $description ?? ;
    $this->revision = $revision ?? ;
  }
}

class Configurations {
  public ConfigurationId $current;
  public __listOfConfigurationId $history;
  public ConfigurationId $pending;

  public function __construct(shape(
  ?'current' => ConfigurationId,
  ?'history' => __listOfConfigurationId,
  ?'pending' => ConfigurationId,
  ) $s = shape()) {
    $this->current = $current ?? ;
    $this->history = $history ?? ;
    $this->pending = $pending ?? ;
  }
}

class ConflictException {
  public __string $error_attribute;
  public __string $message;

  public function __construct(shape(
  ?'error_attribute' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_attribute = $error_attribute ?? ;
    $this->message = $message ?? ;
  }
}

class CreateBrokerInput {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_name;
  public ConfigurationId $configuration;
  public __string $creator_request_id;
  public DeploymentMode $deployment_mode;
  public EncryptionOptions $encryption_options;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public WeeklyStartTime $maintenance_window_start_time;
  public __boolean $publicly_accessible;
  public __listOf__string $security_groups;
  public BrokerStorageType $storage_type;
  public __listOf__string $subnet_ids;
  public __mapOf__string $tags;
  public __listOfUser $users;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => __boolean,
  ?'broker_name' => __string,
  ?'configuration' => ConfigurationId,
  ?'creator_request_id' => __string,
  ?'deployment_mode' => DeploymentMode,
  ?'encryption_options' => EncryptionOptions,
  ?'engine_type' => EngineType,
  ?'engine_version' => __string,
  ?'host_instance_type' => __string,
  ?'logs' => Logs,
  ?'maintenance_window_start_time' => WeeklyStartTime,
  ?'publicly_accessible' => __boolean,
  ?'security_groups' => __listOf__string,
  ?'storage_type' => BrokerStorageType,
  ?'subnet_ids' => __listOf__string,
  ?'tags' => __mapOf__string,
  ?'users' => __listOfUser,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->broker_name = $broker_name ?? ;
    $this->configuration = $configuration ?? null;
    $this->creator_request_id = $creator_request_id ?? ;
    $this->deployment_mode = $deployment_mode ?? "";
    $this->encryption_options = $encryption_options ?? null;
    $this->engine_type = $engine_type ?? "";
    $this->engine_version = $engine_version ?? null;
    $this->host_instance_type = $host_instance_type ?? ;
    $this->logs = $logs ?? null;
    $this->maintenance_window_start_time = $maintenance_window_start_time ?? ;
    $this->publicly_accessible = $publicly_accessible ?? ;
    $this->security_groups = $security_groups ?? ;
    $this->storage_type = $storage_type ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? null;
    $this->users = $users ?? ;
  }
}

class CreateBrokerOutput {
  public __string $broker_arn;
  public __string $broker_id;

  public function __construct(shape(
  ?'broker_arn' => __string,
  ?'broker_id' => __string,
  ) $s = shape()) {
    $this->broker_arn = $broker_arn ?? ;
    $this->broker_id = $broker_id ?? ;
  }
}

class CreateBrokerRequest {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_name;
  public ConfigurationId $configuration;
  public __string $creator_request_id;
  public DeploymentMode $deployment_mode;
  public EncryptionOptions $encryption_options;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public WeeklyStartTime $maintenance_window_start_time;
  public __boolean $publicly_accessible;
  public __listOf__string $security_groups;
  public BrokerStorageType $storage_type;
  public __listOf__string $subnet_ids;
  public __mapOf__string $tags;
  public __listOfUser $users;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => __boolean,
  ?'broker_name' => __string,
  ?'configuration' => ConfigurationId,
  ?'creator_request_id' => __string,
  ?'deployment_mode' => DeploymentMode,
  ?'encryption_options' => EncryptionOptions,
  ?'engine_type' => EngineType,
  ?'engine_version' => __string,
  ?'host_instance_type' => __string,
  ?'logs' => Logs,
  ?'maintenance_window_start_time' => WeeklyStartTime,
  ?'publicly_accessible' => __boolean,
  ?'security_groups' => __listOf__string,
  ?'storage_type' => BrokerStorageType,
  ?'subnet_ids' => __listOf__string,
  ?'tags' => __mapOf__string,
  ?'users' => __listOfUser,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->broker_name = $broker_name ?? ;
    $this->configuration = $configuration ?? null;
    $this->creator_request_id = $creator_request_id ?? ;
    $this->deployment_mode = $deployment_mode ?? "";
    $this->encryption_options = $encryption_options ?? null;
    $this->engine_type = $engine_type ?? "";
    $this->engine_version = $engine_version ?? null;
    $this->host_instance_type = $host_instance_type ?? ;
    $this->logs = $logs ?? null;
    $this->maintenance_window_start_time = $maintenance_window_start_time ?? ;
    $this->publicly_accessible = $publicly_accessible ?? ;
    $this->security_groups = $security_groups ?? ;
    $this->storage_type = $storage_type ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? null;
    $this->users = $users ?? ;
  }
}

class CreateBrokerResponse {
  public __string $broker_arn;
  public __string $broker_id;

  public function __construct(shape(
  ?'broker_arn' => __string,
  ?'broker_id' => __string,
  ) $s = shape()) {
    $this->broker_arn = $broker_arn ?? ;
    $this->broker_id = $broker_id ?? ;
  }
}

class CreateConfigurationInput {
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $name;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'engine_type' => EngineType,
  ?'engine_version' => __string,
  ?'name' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->engine_type = $engine_type ?? "";
    $this->engine_version = $engine_version ?? null;
    $this->name = $name ?? ;
    $this->tags = $tags ?? null;
  }
}

class CreateConfigurationOutput {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;

  public function __construct(shape(
  ?'arn' => __string,
  ?'created' => __timestampIso8601,
  ?'id' => __string,
  ?'latest_revision' => ConfigurationRevision,
  ?'name' => __string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created = $created ?? ;
    $this->id = $id ?? ;
    $this->latest_revision = $latest_revision ?? ;
    $this->name = $name ?? ;
  }
}

class CreateConfigurationRequest {
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $name;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'engine_type' => EngineType,
  ?'engine_version' => __string,
  ?'name' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->engine_type = $engine_type ?? "";
    $this->engine_version = $engine_version ?? null;
    $this->name = $name ?? ;
    $this->tags = $tags ?? null;
  }
}

class CreateConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;

  public function __construct(shape(
  ?'arn' => __string,
  ?'created' => __timestampIso8601,
  ?'id' => __string,
  ?'latest_revision' => ConfigurationRevision,
  ?'name' => __string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created = $created ?? ;
    $this->id = $id ?? ;
    $this->latest_revision = $latest_revision ?? ;
    $this->name = $name ?? ;
  }
}

class CreateTagsRequest {
  public __string $resource_arn;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? null;
  }
}

class CreateUserInput {
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;

  public function __construct(shape(
  ?'console_access' => __boolean,
  ?'groups' => __listOf__string,
  ?'password' => __string,
  ) $s = shape()) {
    $this->console_access = $console_access ?? ;
    $this->groups = $groups ?? ;
    $this->password = $password ?? ;
  }
}

class CreateUserRequest {
  public __string $broker_id;
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;
  public __string $username;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'console_access' => __boolean,
  ?'groups' => __listOf__string,
  ?'password' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->console_access = $console_access ?? ;
    $this->groups = $groups ?? ;
    $this->password = $password ?? ;
    $this->username = $username ?? ;
  }
}

class CreateUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DayOfWeek = string;

class DeleteBrokerOutput {
  public __string $broker_id;

  public function __construct(shape(
  ?'broker_id' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
  }
}

class DeleteBrokerRequest {
  public __string $broker_id;

  public function __construct(shape(
  ?'broker_id' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
  }
}

class DeleteBrokerResponse {
  public __string $broker_id;

  public function __construct(shape(
  ?'broker_id' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
  }
}

class DeleteTagsRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tag_keys' => __listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class DeleteUserRequest {
  public __string $broker_id;
  public __string $username;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->username = $username ?? ;
  }
}

class DeleteUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentMode = string;

class DescribeBrokerEngineTypesRequest {
  public __string $engine_type;
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'engine_type' => __string,
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->engine_type = $engine_type ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeBrokerEngineTypesResponse {
  public __listOfBrokerEngineType $broker_engine_types;
  public __integerMin5Max100 $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'broker_engine_types' => __listOfBrokerEngineType,
  ?'max_results' => __integerMin5Max100,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->broker_engine_types = $broker_engine_types ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeBrokerInstanceOptionsRequest {
  public __string $engine_type;
  public __string $host_instance_type;
  public MaxResults $max_results;
  public __string $next_token;
  public __string $storage_type;

  public function __construct(shape(
  ?'engine_type' => __string,
  ?'host_instance_type' => __string,
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ?'storage_type' => __string,
  ) $s = shape()) {
    $this->engine_type = $engine_type ?? "";
    $this->host_instance_type = $host_instance_type ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->storage_type = $storage_type ?? ;
  }
}

class DescribeBrokerInstanceOptionsResponse {
  public __listOfBrokerInstanceOption $broker_instance_options;
  public __integerMin5Max100 $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'broker_instance_options' => __listOfBrokerInstanceOption,
  ?'max_results' => __integerMin5Max100,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->broker_instance_options = $broker_instance_options ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeBrokerOutput {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_arn;
  public __string $broker_id;
  public __listOfBrokerInstance $broker_instances;
  public __string $broker_name;
  public BrokerState $broker_state;
  public Configurations $configurations;
  public __timestampIso8601 $created;
  public DeploymentMode $deployment_mode;
  public EncryptionOptions $encryption_options;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $host_instance_type;
  public LogsSummary $logs;
  public WeeklyStartTime $maintenance_window_start_time;
  public __string $pending_engine_version;
  public __string $pending_host_instance_type;
  public __listOf__string $pending_security_groups;
  public __boolean $publicly_accessible;
  public __listOf__string $security_groups;
  public BrokerStorageType $storage_type;
  public __listOf__string $subnet_ids;
  public __mapOf__string $tags;
  public __listOfUserSummary $users;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => __boolean,
  ?'broker_arn' => __string,
  ?'broker_id' => __string,
  ?'broker_instances' => __listOfBrokerInstance,
  ?'broker_name' => __string,
  ?'broker_state' => BrokerState,
  ?'configurations' => Configurations,
  ?'created' => __timestampIso8601,
  ?'deployment_mode' => DeploymentMode,
  ?'encryption_options' => EncryptionOptions,
  ?'engine_type' => EngineType,
  ?'engine_version' => __string,
  ?'host_instance_type' => __string,
  ?'logs' => LogsSummary,
  ?'maintenance_window_start_time' => WeeklyStartTime,
  ?'pending_engine_version' => __string,
  ?'pending_host_instance_type' => __string,
  ?'pending_security_groups' => __listOf__string,
  ?'publicly_accessible' => __boolean,
  ?'security_groups' => __listOf__string,
  ?'storage_type' => BrokerStorageType,
  ?'subnet_ids' => __listOf__string,
  ?'tags' => __mapOf__string,
  ?'users' => __listOfUserSummary,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->broker_arn = $broker_arn ?? ;
    $this->broker_id = $broker_id ?? ;
    $this->broker_instances = $broker_instances ?? ;
    $this->broker_name = $broker_name ?? ;
    $this->broker_state = $broker_state ?? "";
    $this->configurations = $configurations ?? null;
    $this->created = $created ?? ;
    $this->deployment_mode = $deployment_mode ?? "";
    $this->encryption_options = $encryption_options ?? null;
    $this->engine_type = $engine_type ?? "";
    $this->engine_version = $engine_version ?? null;
    $this->host_instance_type = $host_instance_type ?? ;
    $this->logs = $logs ?? null;
    $this->maintenance_window_start_time = $maintenance_window_start_time ?? ;
    $this->pending_engine_version = $pending_engine_version ?? ;
    $this->pending_host_instance_type = $pending_host_instance_type ?? ;
    $this->pending_security_groups = $pending_security_groups ?? ;
    $this->publicly_accessible = $publicly_accessible ?? ;
    $this->security_groups = $security_groups ?? ;
    $this->storage_type = $storage_type ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? null;
    $this->users = $users ?? ;
  }
}

class DescribeBrokerRequest {
  public __string $broker_id;

  public function __construct(shape(
  ?'broker_id' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
  }
}

class DescribeBrokerResponse {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_arn;
  public __string $broker_id;
  public __listOfBrokerInstance $broker_instances;
  public __string $broker_name;
  public BrokerState $broker_state;
  public Configurations $configurations;
  public __timestampIso8601 $created;
  public DeploymentMode $deployment_mode;
  public EncryptionOptions $encryption_options;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $host_instance_type;
  public LogsSummary $logs;
  public WeeklyStartTime $maintenance_window_start_time;
  public __string $pending_engine_version;
  public __string $pending_host_instance_type;
  public __listOf__string $pending_security_groups;
  public __boolean $publicly_accessible;
  public __listOf__string $security_groups;
  public BrokerStorageType $storage_type;
  public __listOf__string $subnet_ids;
  public __mapOf__string $tags;
  public __listOfUserSummary $users;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => __boolean,
  ?'broker_arn' => __string,
  ?'broker_id' => __string,
  ?'broker_instances' => __listOfBrokerInstance,
  ?'broker_name' => __string,
  ?'broker_state' => BrokerState,
  ?'configurations' => Configurations,
  ?'created' => __timestampIso8601,
  ?'deployment_mode' => DeploymentMode,
  ?'encryption_options' => EncryptionOptions,
  ?'engine_type' => EngineType,
  ?'engine_version' => __string,
  ?'host_instance_type' => __string,
  ?'logs' => LogsSummary,
  ?'maintenance_window_start_time' => WeeklyStartTime,
  ?'pending_engine_version' => __string,
  ?'pending_host_instance_type' => __string,
  ?'pending_security_groups' => __listOf__string,
  ?'publicly_accessible' => __boolean,
  ?'security_groups' => __listOf__string,
  ?'storage_type' => BrokerStorageType,
  ?'subnet_ids' => __listOf__string,
  ?'tags' => __mapOf__string,
  ?'users' => __listOfUserSummary,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->broker_arn = $broker_arn ?? ;
    $this->broker_id = $broker_id ?? ;
    $this->broker_instances = $broker_instances ?? ;
    $this->broker_name = $broker_name ?? ;
    $this->broker_state = $broker_state ?? "";
    $this->configurations = $configurations ?? null;
    $this->created = $created ?? ;
    $this->deployment_mode = $deployment_mode ?? "";
    $this->encryption_options = $encryption_options ?? null;
    $this->engine_type = $engine_type ?? "";
    $this->engine_version = $engine_version ?? null;
    $this->host_instance_type = $host_instance_type ?? ;
    $this->logs = $logs ?? null;
    $this->maintenance_window_start_time = $maintenance_window_start_time ?? ;
    $this->pending_engine_version = $pending_engine_version ?? ;
    $this->pending_host_instance_type = $pending_host_instance_type ?? ;
    $this->pending_security_groups = $pending_security_groups ?? ;
    $this->publicly_accessible = $publicly_accessible ?? ;
    $this->security_groups = $security_groups ?? ;
    $this->storage_type = $storage_type ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? null;
    $this->users = $users ?? ;
  }
}

class DescribeConfigurationRequest {
  public __string $configuration_id;

  public function __construct(shape(
  ?'configuration_id' => __string,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? null;
  }
}

class DescribeConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $description;
  public EngineType $engine_type;
  public __string $engine_version;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'arn' => __string,
  ?'created' => __timestampIso8601,
  ?'description' => __string,
  ?'engine_type' => EngineType,
  ?'engine_version' => __string,
  ?'id' => __string,
  ?'latest_revision' => ConfigurationRevision,
  ?'name' => __string,
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created = $created ?? ;
    $this->description = $description ?? ;
    $this->engine_type = $engine_type ?? "";
    $this->engine_version = $engine_version ?? null;
    $this->id = $id ?? ;
    $this->latest_revision = $latest_revision ?? ;
    $this->name = $name ?? ;
    $this->tags = $tags ?? null;
  }
}

class DescribeConfigurationRevisionOutput {
  public __string $configuration_id;
  public __timestampIso8601 $created;
  public __string $data;
  public __string $description;

  public function __construct(shape(
  ?'configuration_id' => __string,
  ?'created' => __timestampIso8601,
  ?'data' => __string,
  ?'description' => __string,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? null;
    $this->created = $created ?? ;
    $this->data = $data ?? ;
    $this->description = $description ?? ;
  }
}

class DescribeConfigurationRevisionRequest {
  public __string $configuration_id;
  public __string $configuration_revision;

  public function __construct(shape(
  ?'configuration_id' => __string,
  ?'configuration_revision' => __string,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? null;
    $this->configuration_revision = $configuration_revision ?? null;
  }
}

class DescribeConfigurationRevisionResponse {
  public __string $configuration_id;
  public __timestampIso8601 $created;
  public __string $data;
  public __string $description;

  public function __construct(shape(
  ?'configuration_id' => __string,
  ?'created' => __timestampIso8601,
  ?'data' => __string,
  ?'description' => __string,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? null;
    $this->created = $created ?? ;
    $this->data = $data ?? ;
    $this->description = $description ?? ;
  }
}

class DescribeUserOutput {
  public __string $broker_id;
  public __boolean $console_access;
  public __listOf__string $groups;
  public UserPendingChanges $pending;
  public __string $username;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'console_access' => __boolean,
  ?'groups' => __listOf__string,
  ?'pending' => UserPendingChanges,
  ?'username' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->console_access = $console_access ?? ;
    $this->groups = $groups ?? ;
    $this->pending = $pending ?? ;
    $this->username = $username ?? ;
  }
}

class DescribeUserRequest {
  public __string $broker_id;
  public __string $username;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->username = $username ?? ;
  }
}

class DescribeUserResponse {
  public __string $broker_id;
  public __boolean $console_access;
  public __listOf__string $groups;
  public UserPendingChanges $pending;
  public __string $username;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'console_access' => __boolean,
  ?'groups' => __listOf__string,
  ?'pending' => UserPendingChanges,
  ?'username' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->console_access = $console_access ?? ;
    $this->groups = $groups ?? ;
    $this->pending = $pending ?? ;
    $this->username = $username ?? ;
  }
}

class EncryptionOptions {
  public __string $kms_key_id;
  public __boolean $use_aws_owned_key;

  public function __construct(shape(
  ?'kms_key_id' => __string,
  ?'use_aws_owned_key' => __boolean,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? ;
    $this->use_aws_owned_key = $use_aws_owned_key ?? ;
  }
}

type EngineType = string;

class EngineVersion {
  public __string $name;

  public function __construct(shape(
  ?'name' => __string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class Error {
  public __string $error_attribute;
  public __string $message;

  public function __construct(shape(
  ?'error_attribute' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_attribute = $error_attribute ?? ;
    $this->message = $message ?? ;
  }
}

class ForbiddenException {
  public __string $error_attribute;
  public __string $message;

  public function __construct(shape(
  ?'error_attribute' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_attribute = $error_attribute ?? ;
    $this->message = $message ?? ;
  }
}

class InternalServerErrorException {
  public __string $error_attribute;
  public __string $message;

  public function __construct(shape(
  ?'error_attribute' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_attribute = $error_attribute ?? ;
    $this->message = $message ?? ;
  }
}

class ListBrokersOutput {
  public __listOfBrokerSummary $broker_summaries;
  public __string $next_token;

  public function __construct(shape(
  ?'broker_summaries' => __listOfBrokerSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->broker_summaries = $broker_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListBrokersRequest {
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListBrokersResponse {
  public __listOfBrokerSummary $broker_summaries;
  public __string $next_token;

  public function __construct(shape(
  ?'broker_summaries' => __listOfBrokerSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->broker_summaries = $broker_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListConfigurationRevisionsOutput {
  public __string $configuration_id;
  public __integer $max_results;
  public __string $next_token;
  public __listOfConfigurationRevision $revisions;

  public function __construct(shape(
  ?'configuration_id' => __string,
  ?'max_results' => __integer,
  ?'next_token' => __string,
  ?'revisions' => __listOfConfigurationRevision,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->revisions = $revisions ?? ;
  }
}

class ListConfigurationRevisionsRequest {
  public __string $configuration_id;
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'configuration_id' => __string,
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListConfigurationRevisionsResponse {
  public __string $configuration_id;
  public __integer $max_results;
  public __string $next_token;
  public __listOfConfigurationRevision $revisions;

  public function __construct(shape(
  ?'configuration_id' => __string,
  ?'max_results' => __integer,
  ?'next_token' => __string,
  ?'revisions' => __listOfConfigurationRevision,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->revisions = $revisions ?? ;
  }
}

class ListConfigurationsOutput {
  public __listOfConfiguration $configurations;
  public __integer $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'configurations' => __listOfConfiguration,
  ?'max_results' => __integer,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->configurations = $configurations ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListConfigurationsRequest {
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListConfigurationsResponse {
  public __listOfConfiguration $configurations;
  public __integer $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'configurations' => __listOfConfiguration,
  ?'max_results' => __integer,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->configurations = $configurations ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListTagsRequest {
  public __string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsResponse {
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->tags = $tags ?? null;
  }
}

class ListUsersOutput {
  public __string $broker_id;
  public __integerMin5Max100 $max_results;
  public __string $next_token;
  public __listOfUserSummary $users;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'max_results' => __integerMin5Max100,
  ?'next_token' => __string,
  ?'users' => __listOfUserSummary,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->users = $users ?? ;
  }
}

class ListUsersRequest {
  public __string $broker_id;
  public MaxResults $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'max_results' => MaxResults,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListUsersResponse {
  public __string $broker_id;
  public __integerMin5Max100 $max_results;
  public __string $next_token;
  public __listOfUserSummary $users;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'max_results' => __integerMin5Max100,
  ?'next_token' => __string,
  ?'users' => __listOfUserSummary,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->users = $users ?? ;
  }
}

class Logs {
  public __boolean $audit;
  public __boolean $general;

  public function __construct(shape(
  ?'audit' => __boolean,
  ?'general' => __boolean,
  ) $s = shape()) {
    $this->audit = $audit ?? ;
    $this->general = $general ?? ;
  }
}

class LogsSummary {
  public __boolean $audit;
  public __string $audit_log_group;
  public __boolean $general;
  public __string $general_log_group;
  public PendingLogs $pending;

  public function __construct(shape(
  ?'audit' => __boolean,
  ?'audit_log_group' => __string,
  ?'general' => __boolean,
  ?'general_log_group' => __string,
  ?'pending' => PendingLogs,
  ) $s = shape()) {
    $this->audit = $audit ?? ;
    $this->audit_log_group = $audit_log_group ?? ;
    $this->general = $general ?? ;
    $this->general_log_group = $general_log_group ?? ;
    $this->pending = $pending ?? ;
  }
}

type MaxResults = int;

class NotFoundException {
  public __string $error_attribute;
  public __string $message;

  public function __construct(shape(
  ?'error_attribute' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_attribute = $error_attribute ?? ;
    $this->message = $message ?? ;
  }
}

class PendingLogs {
  public __boolean $audit;
  public __boolean $general;

  public function __construct(shape(
  ?'audit' => __boolean,
  ?'general' => __boolean,
  ) $s = shape()) {
    $this->audit = $audit ?? ;
    $this->general = $general ?? ;
  }
}

class RebootBrokerRequest {
  public __string $broker_id;

  public function __construct(shape(
  ?'broker_id' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
  }
}

class RebootBrokerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SanitizationWarning {
  public __string $attribute_name;
  public __string $element_name;
  public SanitizationWarningReason $reason;

  public function __construct(shape(
  ?'attribute_name' => __string,
  ?'element_name' => __string,
  ?'reason' => SanitizationWarningReason,
  ) $s = shape()) {
    $this->attribute_name = $attribute_name ?? ;
    $this->element_name = $element_name ?? ;
    $this->reason = $reason ?? ;
  }
}

type SanitizationWarningReason = string;

class Tags {
  public __mapOf__string $tags;

  public function __construct(shape(
  ?'tags' => __mapOf__string,
  ) $s = shape()) {
    $this->tags = $tags ?? null;
  }
}

class UnauthorizedException {
  public __string $error_attribute;
  public __string $message;

  public function __construct(shape(
  ?'error_attribute' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->error_attribute = $error_attribute ?? ;
    $this->message = $message ?? ;
  }
}

class UpdateBrokerInput {
  public __boolean $auto_minor_version_upgrade;
  public ConfigurationId $configuration;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public __listOf__string $security_groups;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => __boolean,
  ?'configuration' => ConfigurationId,
  ?'engine_version' => __string,
  ?'host_instance_type' => __string,
  ?'logs' => Logs,
  ?'security_groups' => __listOf__string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->configuration = $configuration ?? null;
    $this->engine_version = $engine_version ?? null;
    $this->host_instance_type = $host_instance_type ?? ;
    $this->logs = $logs ?? null;
    $this->security_groups = $security_groups ?? ;
  }
}

class UpdateBrokerOutput {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_id;
  public ConfigurationId $configuration;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public __listOf__string $security_groups;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => __boolean,
  ?'broker_id' => __string,
  ?'configuration' => ConfigurationId,
  ?'engine_version' => __string,
  ?'host_instance_type' => __string,
  ?'logs' => Logs,
  ?'security_groups' => __listOf__string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->broker_id = $broker_id ?? ;
    $this->configuration = $configuration ?? null;
    $this->engine_version = $engine_version ?? null;
    $this->host_instance_type = $host_instance_type ?? ;
    $this->logs = $logs ?? null;
    $this->security_groups = $security_groups ?? ;
  }
}

class UpdateBrokerRequest {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_id;
  public ConfigurationId $configuration;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public __listOf__string $security_groups;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => __boolean,
  ?'broker_id' => __string,
  ?'configuration' => ConfigurationId,
  ?'engine_version' => __string,
  ?'host_instance_type' => __string,
  ?'logs' => Logs,
  ?'security_groups' => __listOf__string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->broker_id = $broker_id ?? ;
    $this->configuration = $configuration ?? null;
    $this->engine_version = $engine_version ?? null;
    $this->host_instance_type = $host_instance_type ?? ;
    $this->logs = $logs ?? null;
    $this->security_groups = $security_groups ?? ;
  }
}

class UpdateBrokerResponse {
  public __boolean $auto_minor_version_upgrade;
  public __string $broker_id;
  public ConfigurationId $configuration;
  public __string $engine_version;
  public __string $host_instance_type;
  public Logs $logs;
  public __listOf__string $security_groups;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => __boolean,
  ?'broker_id' => __string,
  ?'configuration' => ConfigurationId,
  ?'engine_version' => __string,
  ?'host_instance_type' => __string,
  ?'logs' => Logs,
  ?'security_groups' => __listOf__string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->broker_id = $broker_id ?? ;
    $this->configuration = $configuration ?? null;
    $this->engine_version = $engine_version ?? null;
    $this->host_instance_type = $host_instance_type ?? ;
    $this->logs = $logs ?? null;
    $this->security_groups = $security_groups ?? ;
  }
}

class UpdateConfigurationInput {
  public __string $data;
  public __string $description;

  public function __construct(shape(
  ?'data' => __string,
  ?'description' => __string,
  ) $s = shape()) {
    $this->data = $data ?? ;
    $this->description = $description ?? ;
  }
}

class UpdateConfigurationOutput {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __listOfSanitizationWarning $warnings;

  public function __construct(shape(
  ?'arn' => __string,
  ?'created' => __timestampIso8601,
  ?'id' => __string,
  ?'latest_revision' => ConfigurationRevision,
  ?'name' => __string,
  ?'warnings' => __listOfSanitizationWarning,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created = $created ?? ;
    $this->id = $id ?? ;
    $this->latest_revision = $latest_revision ?? ;
    $this->name = $name ?? ;
    $this->warnings = $warnings ?? ;
  }
}

class UpdateConfigurationRequest {
  public __string $configuration_id;
  public __string $data;
  public __string $description;

  public function __construct(shape(
  ?'configuration_id' => __string,
  ?'data' => __string,
  ?'description' => __string,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? null;
    $this->data = $data ?? ;
    $this->description = $description ?? ;
  }
}

class UpdateConfigurationResponse {
  public __string $arn;
  public __timestampIso8601 $created;
  public __string $id;
  public ConfigurationRevision $latest_revision;
  public __string $name;
  public __listOfSanitizationWarning $warnings;

  public function __construct(shape(
  ?'arn' => __string,
  ?'created' => __timestampIso8601,
  ?'id' => __string,
  ?'latest_revision' => ConfigurationRevision,
  ?'name' => __string,
  ?'warnings' => __listOfSanitizationWarning,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created = $created ?? ;
    $this->id = $id ?? ;
    $this->latest_revision = $latest_revision ?? ;
    $this->name = $name ?? ;
    $this->warnings = $warnings ?? ;
  }
}

class UpdateUserInput {
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;

  public function __construct(shape(
  ?'console_access' => __boolean,
  ?'groups' => __listOf__string,
  ?'password' => __string,
  ) $s = shape()) {
    $this->console_access = $console_access ?? ;
    $this->groups = $groups ?? ;
    $this->password = $password ?? ;
  }
}

class UpdateUserRequest {
  public __string $broker_id;
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;
  public __string $username;

  public function __construct(shape(
  ?'broker_id' => __string,
  ?'console_access' => __boolean,
  ?'groups' => __listOf__string,
  ?'password' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->broker_id = $broker_id ?? ;
    $this->console_access = $console_access ?? ;
    $this->groups = $groups ?? ;
    $this->password = $password ?? ;
    $this->username = $username ?? ;
  }
}

class UpdateUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class User {
  public __boolean $console_access;
  public __listOf__string $groups;
  public __string $password;
  public __string $username;

  public function __construct(shape(
  ?'console_access' => __boolean,
  ?'groups' => __listOf__string,
  ?'password' => __string,
  ?'username' => __string,
  ) $s = shape()) {
    $this->console_access = $console_access ?? ;
    $this->groups = $groups ?? ;
    $this->password = $password ?? ;
    $this->username = $username ?? ;
  }
}

class UserPendingChanges {
  public __boolean $console_access;
  public __listOf__string $groups;
  public ChangeType $pending_change;

  public function __construct(shape(
  ?'console_access' => __boolean,
  ?'groups' => __listOf__string,
  ?'pending_change' => ChangeType,
  ) $s = shape()) {
    $this->console_access = $console_access ?? ;
    $this->groups = $groups ?? ;
    $this->pending_change = $pending_change ?? ;
  }
}

class UserSummary {
  public ChangeType $pending_change;
  public __string $username;

  public function __construct(shape(
  ?'pending_change' => ChangeType,
  ?'username' => __string,
  ) $s = shape()) {
    $this->pending_change = $pending_change ?? ;
    $this->username = $username ?? ;
  }
}

class WeeklyStartTime {
  public DayOfWeek $day_of_week;
  public __string $time_of_day;
  public __string $time_zone;

  public function __construct(shape(
  ?'day_of_week' => DayOfWeek,
  ?'time_of_day' => __string,
  ?'time_zone' => __string,
  ) $s = shape()) {
    $this->day_of_week = $day_of_week ?? "";
    $this->time_of_day = $time_of_day ?? ;
    $this->time_zone = $time_zone ?? ;
  }
}

type __boolean = bool;

type __double = float;

type __integer = int;

type __integerMin5Max100 = int;

type __listOfAvailabilityZone = vec<AvailabilityZone>;

type __listOfBrokerEngineType = vec<BrokerEngineType>;

type __listOfBrokerInstance = vec<BrokerInstance>;

type __listOfBrokerInstanceOption = vec<BrokerInstanceOption>;

type __listOfBrokerSummary = vec<BrokerSummary>;

type __listOfConfiguration = vec<Configuration>;

type __listOfConfigurationId = vec<ConfigurationId>;

type __listOfConfigurationRevision = vec<ConfigurationRevision>;

type __listOfDeploymentMode = vec<DeploymentMode>;

type __listOfEngineVersion = vec<EngineVersion>;

type __listOfSanitizationWarning = vec<SanitizationWarning>;

type __listOfUser = vec<User>;

type __listOfUserSummary = vec<UserSummary>;

type __listOf__string = vec<__string>;

type __long = int;

type __mapOf__string = dict<__string, __string>;

type __string = string;

type __timestampIso8601 = int;

type __timestampUnix = int;

