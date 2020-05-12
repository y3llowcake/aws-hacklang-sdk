<?hh // strict
namespace slack\aws\mq;

interface mq {
  public function CreateBroker(CreateBrokerRequest $in): Awaitable<\Errors\Result<CreateBrokerResponse>>;
  public function CreateConfiguration(CreateConfigurationRequest $in): Awaitable<\Errors\Result<CreateConfigurationResponse>>;
  public function CreateTags(CreateTagsRequest $in): Awaitable<\Errors\Error>;
  public function CreateUser(CreateUserRequest $in): Awaitable<\Errors\Result<CreateUserResponse>>;
  public function DeleteBroker(DeleteBrokerRequest $in): Awaitable<\Errors\Result<DeleteBrokerResponse>>;
  public function DeleteTags(DeleteTagsRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUser(DeleteUserRequest $in): Awaitable<\Errors\Result<DeleteUserResponse>>;
  public function DescribeBroker(DescribeBrokerRequest $in): Awaitable<\Errors\Result<DescribeBrokerResponse>>;
  public function DescribeBrokerEngineTypes(DescribeBrokerEngineTypesRequest $in): Awaitable<\Errors\Result<DescribeBrokerEngineTypesResponse>>;
  public function DescribeBrokerInstanceOptions(DescribeBrokerInstanceOptionsRequest $in): Awaitable<\Errors\Result<DescribeBrokerInstanceOptionsResponse>>;
  public function DescribeConfiguration(DescribeConfigurationRequest $in): Awaitable<\Errors\Result<DescribeConfigurationResponse>>;
  public function DescribeConfigurationRevision(DescribeConfigurationRevisionRequest $in): Awaitable<\Errors\Result<DescribeConfigurationRevisionResponse>>;
  public function DescribeUser(DescribeUserRequest $in): Awaitable<\Errors\Result<DescribeUserResponse>>;
  public function ListBrokers(ListBrokersRequest $in): Awaitable<\Errors\Result<ListBrokersResponse>>;
  public function ListConfigurationRevisions(ListConfigurationRevisionsRequest $in): Awaitable<\Errors\Result<ListConfigurationRevisionsResponse>>;
  public function ListConfigurations(ListConfigurationsRequest $in): Awaitable<\Errors\Result<ListConfigurationsResponse>>;
  public function ListTags(ListTagsRequest $in): Awaitable<\Errors\Result<ListTagsResponse>>;
  public function ListUsers(ListUsersRequest $in): Awaitable<\Errors\Result<ListUsersResponse>>;
  public function RebootBroker(RebootBrokerRequest $in): Awaitable<\Errors\Result<RebootBrokerResponse>>;
  public function UpdateBroker(UpdateBrokerRequest $in): Awaitable<\Errors\Result<UpdateBrokerResponse>>;
  public function UpdateConfiguration(UpdateConfigurationRequest $in): Awaitable<\Errors\Result<UpdateConfigurationResponse>>;
  public function UpdateUser(UpdateUserRequest $in): Awaitable<\Errors\Result<UpdateUserResponse>>;
}

class AvailabilityZone {
  public ?__string $name;

  public function __construct(shape(
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class BadRequestException {
  public ?__string $error_attribute;
  public ?__string $message;

  public function __construct(shape(
    ?'error_attribute' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_attribute = $s['error_attribute'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class BrokerEngineType {
  public ?EngineType $engine_type;
  public ?__listOfEngineVersion $engine_versions;

  public function __construct(shape(
    ?'engine_type' => ?EngineType,
    ?'engine_versions' => ?__listOfEngineVersion,
  ) $s = shape()) {
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_versions = $s['engine_versions'] ?? vec[];
  }
}

class BrokerEngineTypeOutput {
  public ?__listOfBrokerEngineType $broker_engine_types;
  public ?__integerMin5Max100 $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'broker_engine_types' => ?__listOfBrokerEngineType,
    ?'max_results' => ?__integerMin5Max100,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->broker_engine_types = $s['broker_engine_types'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class BrokerInstance {
  public ?__string $console_url;
  public ?__listOf__string $endpoints;
  public ?__string $ip_address;

  public function __construct(shape(
    ?'console_url' => ?__string,
    ?'endpoints' => ?__listOf__string,
    ?'ip_address' => ?__string,
  ) $s = shape()) {
    $this->console_url = $s['console_url'] ?? '';
    $this->endpoints = $s['endpoints'] ?? vec[];
    $this->ip_address = $s['ip_address'] ?? '';
  }
}

class BrokerInstanceOption {
  public ?__listOfAvailabilityZone $availability_zones;
  public ?EngineType $engine_type;
  public ?__string $host_instance_type;
  public ?BrokerStorageType $storage_type;
  public ?__listOfDeploymentMode $supported_deployment_modes;
  public ?__listOf__string $supported_engine_versions;

  public function __construct(shape(
    ?'availability_zones' => ?__listOfAvailabilityZone,
    ?'engine_type' => ?EngineType,
    ?'host_instance_type' => ?__string,
    ?'storage_type' => ?BrokerStorageType,
    ?'supported_deployment_modes' => ?__listOfDeploymentMode,
    ?'supported_engine_versions' => ?__listOf__string,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->engine_type = $s['engine_type'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->storage_type = $s['storage_type'] ?? '';
    $this->supported_deployment_modes = $s['supported_deployment_modes'] ?? vec[];
    $this->supported_engine_versions = $s['supported_engine_versions'] ?? vec[];
  }
}

class BrokerInstanceOptionsOutput {
  public ?__listOfBrokerInstanceOption $broker_instance_options;
  public ?__integerMin5Max100 $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'broker_instance_options' => ?__listOfBrokerInstanceOption,
    ?'max_results' => ?__integerMin5Max100,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->broker_instance_options = $s['broker_instance_options'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

type BrokerState = string;

type BrokerStorageType = string;

class BrokerSummary {
  public ?__string $broker_arn;
  public ?__string $broker_id;
  public ?__string $broker_name;
  public ?BrokerState $broker_state;
  public ?__timestampIso8601 $created;
  public ?DeploymentMode $deployment_mode;
  public ?__string $host_instance_type;

  public function __construct(shape(
    ?'broker_arn' => ?__string,
    ?'broker_id' => ?__string,
    ?'broker_name' => ?__string,
    ?'broker_state' => ?BrokerState,
    ?'created' => ?__timestampIso8601,
    ?'deployment_mode' => ?DeploymentMode,
    ?'host_instance_type' => ?__string,
  ) $s = shape()) {
    $this->broker_arn = $s['broker_arn'] ?? '';
    $this->broker_id = $s['broker_id'] ?? '';
    $this->broker_name = $s['broker_name'] ?? '';
    $this->broker_state = $s['broker_state'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->deployment_mode = $s['deployment_mode'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
  }
}

type ChangeType = string;

class Configuration {
  public ?__string $arn;
  public ?__timestampIso8601 $created;
  public ?__string $description;
  public ?EngineType $engine_type;
  public ?__string $engine_version;
  public ?__string $id;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created' => ?__timestampIso8601,
    ?'description' => ?__string,
    ?'engine_type' => ?EngineType,
    ?'engine_version' => ?__string,
    ?'id' => ?__string,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ConfigurationId {
  public ?__string $id;
  public ?__integer $revision;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'revision' => ?__integer,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->revision = $s['revision'] ?? 0;
  }
}

class ConfigurationRevision {
  public ?__timestampIso8601 $created;
  public ?__string $description;
  public ?__integer $revision;

  public function __construct(shape(
    ?'created' => ?__timestampIso8601,
    ?'description' => ?__string,
    ?'revision' => ?__integer,
  ) $s = shape()) {
    $this->created = $s['created'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->revision = $s['revision'] ?? 0;
  }
}

class Configurations {
  public ?ConfigurationId $current;
  public ?__listOfConfigurationId $history;
  public ?ConfigurationId $pending;

  public function __construct(shape(
    ?'current' => ?ConfigurationId,
    ?'history' => ?__listOfConfigurationId,
    ?'pending' => ?ConfigurationId,
  ) $s = shape()) {
    $this->current = $s['current'] ?? null;
    $this->history = $s['history'] ?? vec[];
    $this->pending = $s['pending'] ?? null;
  }
}

class ConflictException {
  public ?__string $error_attribute;
  public ?__string $message;

  public function __construct(shape(
    ?'error_attribute' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_attribute = $s['error_attribute'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class CreateBrokerInput {
  public ?__boolean $auto_minor_version_upgrade;
  public ?__string $broker_name;
  public ?ConfigurationId $configuration;
  public ?__string $creator_request_id;
  public ?DeploymentMode $deployment_mode;
  public ?EncryptionOptions $encryption_options;
  public ?EngineType $engine_type;
  public ?__string $engine_version;
  public ?__string $host_instance_type;
  public ?Logs $logs;
  public ?WeeklyStartTime $maintenance_window_start_time;
  public ?__boolean $publicly_accessible;
  public ?__listOf__string $security_groups;
  public ?BrokerStorageType $storage_type;
  public ?__listOf__string $subnet_ids;
  public ?__mapOf__string $tags;
  public ?__listOfUser $users;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?__boolean,
    ?'broker_name' => ?__string,
    ?'configuration' => ?ConfigurationId,
    ?'creator_request_id' => ?__string,
    ?'deployment_mode' => ?DeploymentMode,
    ?'encryption_options' => ?EncryptionOptions,
    ?'engine_type' => ?EngineType,
    ?'engine_version' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'logs' => ?Logs,
    ?'maintenance_window_start_time' => ?WeeklyStartTime,
    ?'publicly_accessible' => ?__boolean,
    ?'security_groups' => ?__listOf__string,
    ?'storage_type' => ?BrokerStorageType,
    ?'subnet_ids' => ?__listOf__string,
    ?'tags' => ?__mapOf__string,
    ?'users' => ?__listOfUser,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->broker_name = $s['broker_name'] ?? '';
    $this->configuration = $s['configuration'] ?? null;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->deployment_mode = $s['deployment_mode'] ?? '';
    $this->encryption_options = $s['encryption_options'] ?? null;
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->maintenance_window_start_time = $s['maintenance_window_start_time'] ?? null;
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->storage_type = $s['storage_type'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->users = $s['users'] ?? vec[];
  }
}

class CreateBrokerOutput {
  public ?__string $broker_arn;
  public ?__string $broker_id;

  public function __construct(shape(
    ?'broker_arn' => ?__string,
    ?'broker_id' => ?__string,
  ) $s = shape()) {
    $this->broker_arn = $s['broker_arn'] ?? '';
    $this->broker_id = $s['broker_id'] ?? '';
  }
}

class CreateBrokerRequest {
  public ?__boolean $auto_minor_version_upgrade;
  public ?__string $broker_name;
  public ?ConfigurationId $configuration;
  public ?__string $creator_request_id;
  public ?DeploymentMode $deployment_mode;
  public ?EncryptionOptions $encryption_options;
  public ?EngineType $engine_type;
  public ?__string $engine_version;
  public ?__string $host_instance_type;
  public ?Logs $logs;
  public ?WeeklyStartTime $maintenance_window_start_time;
  public ?__boolean $publicly_accessible;
  public ?__listOf__string $security_groups;
  public ?BrokerStorageType $storage_type;
  public ?__listOf__string $subnet_ids;
  public ?__mapOf__string $tags;
  public ?__listOfUser $users;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?__boolean,
    ?'broker_name' => ?__string,
    ?'configuration' => ?ConfigurationId,
    ?'creator_request_id' => ?__string,
    ?'deployment_mode' => ?DeploymentMode,
    ?'encryption_options' => ?EncryptionOptions,
    ?'engine_type' => ?EngineType,
    ?'engine_version' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'logs' => ?Logs,
    ?'maintenance_window_start_time' => ?WeeklyStartTime,
    ?'publicly_accessible' => ?__boolean,
    ?'security_groups' => ?__listOf__string,
    ?'storage_type' => ?BrokerStorageType,
    ?'subnet_ids' => ?__listOf__string,
    ?'tags' => ?__mapOf__string,
    ?'users' => ?__listOfUser,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->broker_name = $s['broker_name'] ?? '';
    $this->configuration = $s['configuration'] ?? null;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->deployment_mode = $s['deployment_mode'] ?? '';
    $this->encryption_options = $s['encryption_options'] ?? null;
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->maintenance_window_start_time = $s['maintenance_window_start_time'] ?? null;
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->storage_type = $s['storage_type'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->users = $s['users'] ?? vec[];
  }
}

class CreateBrokerResponse {
  public ?__string $broker_arn;
  public ?__string $broker_id;

  public function __construct(shape(
    ?'broker_arn' => ?__string,
    ?'broker_id' => ?__string,
  ) $s = shape()) {
    $this->broker_arn = $s['broker_arn'] ?? '';
    $this->broker_id = $s['broker_id'] ?? '';
  }
}

class CreateConfigurationInput {
  public ?EngineType $engine_type;
  public ?__string $engine_version;
  public ?__string $name;
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'engine_type' => ?EngineType,
    ?'engine_version' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateConfigurationOutput {
  public ?__string $arn;
  public ?__timestampIso8601 $created;
  public ?__string $id;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created' => ?__timestampIso8601,
    ?'id' => ?__string,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class CreateConfigurationRequest {
  public ?EngineType $engine_type;
  public ?__string $engine_version;
  public ?__string $name;
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'engine_type' => ?EngineType,
    ?'engine_version' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateConfigurationResponse {
  public ?__string $arn;
  public ?__timestampIso8601 $created;
  public ?__string $id;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created' => ?__timestampIso8601,
    ?'id' => ?__string,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class CreateTagsRequest {
  public ?__string $resource_arn;
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateUserInput {
  public ?__boolean $console_access;
  public ?__listOf__string $groups;
  public ?__string $password;

  public function __construct(shape(
    ?'console_access' => ?__boolean,
    ?'groups' => ?__listOf__string,
    ?'password' => ?__string,
  ) $s = shape()) {
    $this->console_access = $s['console_access'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->password = $s['password'] ?? '';
  }
}

class CreateUserRequest {
  public ?__string $broker_id;
  public ?__boolean $console_access;
  public ?__listOf__string $groups;
  public ?__string $password;
  public ?__string $username;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'console_access' => ?__boolean,
    ?'groups' => ?__listOf__string,
    ?'password' => ?__string,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->console_access = $s['console_access'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->password = $s['password'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class CreateUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DayOfWeek = string;

class DeleteBrokerOutput {
  public ?__string $broker_id;

  public function __construct(shape(
    ?'broker_id' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
  }
}

class DeleteBrokerRequest {
  public ?__string $broker_id;

  public function __construct(shape(
    ?'broker_id' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
  }
}

class DeleteBrokerResponse {
  public ?__string $broker_id;

  public function __construct(shape(
    ?'broker_id' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
  }
}

class DeleteTagsRequest {
  public ?__string $resource_arn;
  public ?__listOf__string $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tag_keys' => ?__listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class DeleteUserRequest {
  public ?__string $broker_id;
  public ?__string $username;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class DeleteUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentMode = string;

class DescribeBrokerEngineTypesRequest {
  public ?__string $engine_type;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'engine_type' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->engine_type = $s['engine_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeBrokerEngineTypesResponse {
  public ?__listOfBrokerEngineType $broker_engine_types;
  public ?__integerMin5Max100 $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'broker_engine_types' => ?__listOfBrokerEngineType,
    ?'max_results' => ?__integerMin5Max100,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->broker_engine_types = $s['broker_engine_types'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeBrokerInstanceOptionsRequest {
  public ?__string $engine_type;
  public ?__string $host_instance_type;
  public ?MaxResults $max_results;
  public ?__string $next_token;
  public ?__string $storage_type;

  public function __construct(shape(
    ?'engine_type' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
    ?'storage_type' => ?__string,
  ) $s = shape()) {
    $this->engine_type = $s['engine_type'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->storage_type = $s['storage_type'] ?? '';
  }
}

class DescribeBrokerInstanceOptionsResponse {
  public ?__listOfBrokerInstanceOption $broker_instance_options;
  public ?__integerMin5Max100 $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'broker_instance_options' => ?__listOfBrokerInstanceOption,
    ?'max_results' => ?__integerMin5Max100,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->broker_instance_options = $s['broker_instance_options'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeBrokerOutput {
  public ?__boolean $auto_minor_version_upgrade;
  public ?__string $broker_arn;
  public ?__string $broker_id;
  public ?__listOfBrokerInstance $broker_instances;
  public ?__string $broker_name;
  public ?BrokerState $broker_state;
  public ?Configurations $configurations;
  public ?__timestampIso8601 $created;
  public ?DeploymentMode $deployment_mode;
  public ?EncryptionOptions $encryption_options;
  public ?EngineType $engine_type;
  public ?__string $engine_version;
  public ?__string $host_instance_type;
  public ?LogsSummary $logs;
  public ?WeeklyStartTime $maintenance_window_start_time;
  public ?__string $pending_engine_version;
  public ?__string $pending_host_instance_type;
  public ?__listOf__string $pending_security_groups;
  public ?__boolean $publicly_accessible;
  public ?__listOf__string $security_groups;
  public ?BrokerStorageType $storage_type;
  public ?__listOf__string $subnet_ids;
  public ?__mapOf__string $tags;
  public ?__listOfUserSummary $users;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?__boolean,
    ?'broker_arn' => ?__string,
    ?'broker_id' => ?__string,
    ?'broker_instances' => ?__listOfBrokerInstance,
    ?'broker_name' => ?__string,
    ?'broker_state' => ?BrokerState,
    ?'configurations' => ?Configurations,
    ?'created' => ?__timestampIso8601,
    ?'deployment_mode' => ?DeploymentMode,
    ?'encryption_options' => ?EncryptionOptions,
    ?'engine_type' => ?EngineType,
    ?'engine_version' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'logs' => ?LogsSummary,
    ?'maintenance_window_start_time' => ?WeeklyStartTime,
    ?'pending_engine_version' => ?__string,
    ?'pending_host_instance_type' => ?__string,
    ?'pending_security_groups' => ?__listOf__string,
    ?'publicly_accessible' => ?__boolean,
    ?'security_groups' => ?__listOf__string,
    ?'storage_type' => ?BrokerStorageType,
    ?'subnet_ids' => ?__listOf__string,
    ?'tags' => ?__mapOf__string,
    ?'users' => ?__listOfUserSummary,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->broker_arn = $s['broker_arn'] ?? '';
    $this->broker_id = $s['broker_id'] ?? '';
    $this->broker_instances = $s['broker_instances'] ?? vec[];
    $this->broker_name = $s['broker_name'] ?? '';
    $this->broker_state = $s['broker_state'] ?? '';
    $this->configurations = $s['configurations'] ?? null;
    $this->created = $s['created'] ?? 0;
    $this->deployment_mode = $s['deployment_mode'] ?? '';
    $this->encryption_options = $s['encryption_options'] ?? null;
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->maintenance_window_start_time = $s['maintenance_window_start_time'] ?? null;
    $this->pending_engine_version = $s['pending_engine_version'] ?? '';
    $this->pending_host_instance_type = $s['pending_host_instance_type'] ?? '';
    $this->pending_security_groups = $s['pending_security_groups'] ?? vec[];
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->storage_type = $s['storage_type'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->users = $s['users'] ?? vec[];
  }
}

class DescribeBrokerRequest {
  public ?__string $broker_id;

  public function __construct(shape(
    ?'broker_id' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
  }
}

class DescribeBrokerResponse {
  public ?__boolean $auto_minor_version_upgrade;
  public ?__string $broker_arn;
  public ?__string $broker_id;
  public ?__listOfBrokerInstance $broker_instances;
  public ?__string $broker_name;
  public ?BrokerState $broker_state;
  public ?Configurations $configurations;
  public ?__timestampIso8601 $created;
  public ?DeploymentMode $deployment_mode;
  public ?EncryptionOptions $encryption_options;
  public ?EngineType $engine_type;
  public ?__string $engine_version;
  public ?__string $host_instance_type;
  public ?LogsSummary $logs;
  public ?WeeklyStartTime $maintenance_window_start_time;
  public ?__string $pending_engine_version;
  public ?__string $pending_host_instance_type;
  public ?__listOf__string $pending_security_groups;
  public ?__boolean $publicly_accessible;
  public ?__listOf__string $security_groups;
  public ?BrokerStorageType $storage_type;
  public ?__listOf__string $subnet_ids;
  public ?__mapOf__string $tags;
  public ?__listOfUserSummary $users;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?__boolean,
    ?'broker_arn' => ?__string,
    ?'broker_id' => ?__string,
    ?'broker_instances' => ?__listOfBrokerInstance,
    ?'broker_name' => ?__string,
    ?'broker_state' => ?BrokerState,
    ?'configurations' => ?Configurations,
    ?'created' => ?__timestampIso8601,
    ?'deployment_mode' => ?DeploymentMode,
    ?'encryption_options' => ?EncryptionOptions,
    ?'engine_type' => ?EngineType,
    ?'engine_version' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'logs' => ?LogsSummary,
    ?'maintenance_window_start_time' => ?WeeklyStartTime,
    ?'pending_engine_version' => ?__string,
    ?'pending_host_instance_type' => ?__string,
    ?'pending_security_groups' => ?__listOf__string,
    ?'publicly_accessible' => ?__boolean,
    ?'security_groups' => ?__listOf__string,
    ?'storage_type' => ?BrokerStorageType,
    ?'subnet_ids' => ?__listOf__string,
    ?'tags' => ?__mapOf__string,
    ?'users' => ?__listOfUserSummary,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->broker_arn = $s['broker_arn'] ?? '';
    $this->broker_id = $s['broker_id'] ?? '';
    $this->broker_instances = $s['broker_instances'] ?? vec[];
    $this->broker_name = $s['broker_name'] ?? '';
    $this->broker_state = $s['broker_state'] ?? '';
    $this->configurations = $s['configurations'] ?? null;
    $this->created = $s['created'] ?? 0;
    $this->deployment_mode = $s['deployment_mode'] ?? '';
    $this->encryption_options = $s['encryption_options'] ?? null;
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->maintenance_window_start_time = $s['maintenance_window_start_time'] ?? null;
    $this->pending_engine_version = $s['pending_engine_version'] ?? '';
    $this->pending_host_instance_type = $s['pending_host_instance_type'] ?? '';
    $this->pending_security_groups = $s['pending_security_groups'] ?? vec[];
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->storage_type = $s['storage_type'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->users = $s['users'] ?? vec[];
  }
}

class DescribeConfigurationRequest {
  public ?__string $configuration_id;

  public function __construct(shape(
    ?'configuration_id' => ?__string,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
  }
}

class DescribeConfigurationResponse {
  public ?__string $arn;
  public ?__timestampIso8601 $created;
  public ?__string $description;
  public ?EngineType $engine_type;
  public ?__string $engine_version;
  public ?__string $id;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created' => ?__timestampIso8601,
    ?'description' => ?__string,
    ?'engine_type' => ?EngineType,
    ?'engine_version' => ?__string,
    ?'id' => ?__string,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->engine_type = $s['engine_type'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DescribeConfigurationRevisionOutput {
  public ?__string $configuration_id;
  public ?__timestampIso8601 $created;
  public ?__string $data;
  public ?__string $description;

  public function __construct(shape(
    ?'configuration_id' => ?__string,
    ?'created' => ?__timestampIso8601,
    ?'data' => ?__string,
    ?'description' => ?__string,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->data = $s['data'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class DescribeConfigurationRevisionRequest {
  public ?__string $configuration_id;
  public ?__string $configuration_revision;

  public function __construct(shape(
    ?'configuration_id' => ?__string,
    ?'configuration_revision' => ?__string,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->configuration_revision = $s['configuration_revision'] ?? '';
  }
}

class DescribeConfigurationRevisionResponse {
  public ?__string $configuration_id;
  public ?__timestampIso8601 $created;
  public ?__string $data;
  public ?__string $description;

  public function __construct(shape(
    ?'configuration_id' => ?__string,
    ?'created' => ?__timestampIso8601,
    ?'data' => ?__string,
    ?'description' => ?__string,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->data = $s['data'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class DescribeUserOutput {
  public ?__string $broker_id;
  public ?__boolean $console_access;
  public ?__listOf__string $groups;
  public ?UserPendingChanges $pending;
  public ?__string $username;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'console_access' => ?__boolean,
    ?'groups' => ?__listOf__string,
    ?'pending' => ?UserPendingChanges,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->console_access = $s['console_access'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->pending = $s['pending'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

class DescribeUserRequest {
  public ?__string $broker_id;
  public ?__string $username;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class DescribeUserResponse {
  public ?__string $broker_id;
  public ?__boolean $console_access;
  public ?__listOf__string $groups;
  public ?UserPendingChanges $pending;
  public ?__string $username;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'console_access' => ?__boolean,
    ?'groups' => ?__listOf__string,
    ?'pending' => ?UserPendingChanges,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->console_access = $s['console_access'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->pending = $s['pending'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

class EncryptionOptions {
  public ?__string $kms_key_id;
  public ?__boolean $use_aws_owned_key;

  public function __construct(shape(
    ?'kms_key_id' => ?__string,
    ?'use_aws_owned_key' => ?__boolean,
  ) $s = shape()) {
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->use_aws_owned_key = $s['use_aws_owned_key'] ?? false;
  }
}

type EngineType = string;

class EngineVersion {
  public ?__string $name;

  public function __construct(shape(
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class Error {
  public ?__string $error_attribute;
  public ?__string $message;

  public function __construct(shape(
    ?'error_attribute' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_attribute = $s['error_attribute'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ForbiddenException {
  public ?__string $error_attribute;
  public ?__string $message;

  public function __construct(shape(
    ?'error_attribute' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_attribute = $s['error_attribute'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InternalServerErrorException {
  public ?__string $error_attribute;
  public ?__string $message;

  public function __construct(shape(
    ?'error_attribute' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_attribute = $s['error_attribute'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ListBrokersOutput {
  public ?__listOfBrokerSummary $broker_summaries;
  public ?__string $next_token;

  public function __construct(shape(
    ?'broker_summaries' => ?__listOfBrokerSummary,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->broker_summaries = $s['broker_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBrokersRequest {
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBrokersResponse {
  public ?__listOfBrokerSummary $broker_summaries;
  public ?__string $next_token;

  public function __construct(shape(
    ?'broker_summaries' => ?__listOfBrokerSummary,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->broker_summaries = $s['broker_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConfigurationRevisionsOutput {
  public ?__string $configuration_id;
  public ?__integer $max_results;
  public ?__string $next_token;
  public ?__listOfConfigurationRevision $revisions;

  public function __construct(shape(
    ?'configuration_id' => ?__string,
    ?'max_results' => ?__integer,
    ?'next_token' => ?__string,
    ?'revisions' => ?__listOfConfigurationRevision,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->revisions = $s['revisions'] ?? vec[];
  }
}

class ListConfigurationRevisionsRequest {
  public ?__string $configuration_id;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'configuration_id' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConfigurationRevisionsResponse {
  public ?__string $configuration_id;
  public ?__integer $max_results;
  public ?__string $next_token;
  public ?__listOfConfigurationRevision $revisions;

  public function __construct(shape(
    ?'configuration_id' => ?__string,
    ?'max_results' => ?__integer,
    ?'next_token' => ?__string,
    ?'revisions' => ?__listOfConfigurationRevision,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->revisions = $s['revisions'] ?? vec[];
  }
}

class ListConfigurationsOutput {
  public ?__listOfConfiguration $configurations;
  public ?__integer $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'configurations' => ?__listOfConfiguration,
    ?'max_results' => ?__integer,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->configurations = $s['configurations'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConfigurationsRequest {
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConfigurationsResponse {
  public ?__listOfConfiguration $configurations;
  public ?__integer $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'configurations' => ?__listOfConfiguration,
    ?'max_results' => ?__integer,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->configurations = $s['configurations'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsRequest {
  public ?__string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsResponse {
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListUsersOutput {
  public ?__string $broker_id;
  public ?__integerMin5Max100 $max_results;
  public ?__string $next_token;
  public ?__listOfUserSummary $users;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'max_results' => ?__integerMin5Max100,
    ?'next_token' => ?__string,
    ?'users' => ?__listOfUserSummary,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->users = $s['users'] ?? vec[];
  }
}

class ListUsersRequest {
  public ?__string $broker_id;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListUsersResponse {
  public ?__string $broker_id;
  public ?__integerMin5Max100 $max_results;
  public ?__string $next_token;
  public ?__listOfUserSummary $users;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'max_results' => ?__integerMin5Max100,
    ?'next_token' => ?__string,
    ?'users' => ?__listOfUserSummary,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->users = $s['users'] ?? vec[];
  }
}

class Logs {
  public ?__boolean $audit;
  public ?__boolean $general;

  public function __construct(shape(
    ?'audit' => ?__boolean,
    ?'general' => ?__boolean,
  ) $s = shape()) {
    $this->audit = $s['audit'] ?? false;
    $this->general = $s['general'] ?? false;
  }
}

class LogsSummary {
  public ?__boolean $audit;
  public ?__string $audit_log_group;
  public ?__boolean $general;
  public ?__string $general_log_group;
  public ?PendingLogs $pending;

  public function __construct(shape(
    ?'audit' => ?__boolean,
    ?'audit_log_group' => ?__string,
    ?'general' => ?__boolean,
    ?'general_log_group' => ?__string,
    ?'pending' => ?PendingLogs,
  ) $s = shape()) {
    $this->audit = $s['audit'] ?? false;
    $this->audit_log_group = $s['audit_log_group'] ?? '';
    $this->general = $s['general'] ?? false;
    $this->general_log_group = $s['general_log_group'] ?? '';
    $this->pending = $s['pending'] ?? null;
  }
}

type MaxResults = int;

class NotFoundException {
  public ?__string $error_attribute;
  public ?__string $message;

  public function __construct(shape(
    ?'error_attribute' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_attribute = $s['error_attribute'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class PendingLogs {
  public ?__boolean $audit;
  public ?__boolean $general;

  public function __construct(shape(
    ?'audit' => ?__boolean,
    ?'general' => ?__boolean,
  ) $s = shape()) {
    $this->audit = $s['audit'] ?? false;
    $this->general = $s['general'] ?? false;
  }
}

class RebootBrokerRequest {
  public ?__string $broker_id;

  public function __construct(shape(
    ?'broker_id' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
  }
}

class RebootBrokerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SanitizationWarning {
  public ?__string $attribute_name;
  public ?__string $element_name;
  public ?SanitizationWarningReason $reason;

  public function __construct(shape(
    ?'attribute_name' => ?__string,
    ?'element_name' => ?__string,
    ?'reason' => ?SanitizationWarningReason,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->element_name = $s['element_name'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type SanitizationWarningReason = string;

class Tags {
  public ?__mapOf__string $tags;

  public function __construct(shape(
    ?'tags' => ?__mapOf__string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class UnauthorizedException {
  public ?__string $error_attribute;
  public ?__string $message;

  public function __construct(shape(
    ?'error_attribute' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_attribute = $s['error_attribute'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class UpdateBrokerInput {
  public ?__boolean $auto_minor_version_upgrade;
  public ?ConfigurationId $configuration;
  public ?__string $engine_version;
  public ?__string $host_instance_type;
  public ?Logs $logs;
  public ?__listOf__string $security_groups;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?__boolean,
    ?'configuration' => ?ConfigurationId,
    ?'engine_version' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'logs' => ?Logs,
    ?'security_groups' => ?__listOf__string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->configuration = $s['configuration'] ?? null;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class UpdateBrokerOutput {
  public ?__boolean $auto_minor_version_upgrade;
  public ?__string $broker_id;
  public ?ConfigurationId $configuration;
  public ?__string $engine_version;
  public ?__string $host_instance_type;
  public ?Logs $logs;
  public ?__listOf__string $security_groups;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?__boolean,
    ?'broker_id' => ?__string,
    ?'configuration' => ?ConfigurationId,
    ?'engine_version' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'logs' => ?Logs,
    ?'security_groups' => ?__listOf__string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->broker_id = $s['broker_id'] ?? '';
    $this->configuration = $s['configuration'] ?? null;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class UpdateBrokerRequest {
  public ?__boolean $auto_minor_version_upgrade;
  public ?__string $broker_id;
  public ?ConfigurationId $configuration;
  public ?__string $engine_version;
  public ?__string $host_instance_type;
  public ?Logs $logs;
  public ?__listOf__string $security_groups;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?__boolean,
    ?'broker_id' => ?__string,
    ?'configuration' => ?ConfigurationId,
    ?'engine_version' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'logs' => ?Logs,
    ?'security_groups' => ?__listOf__string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->broker_id = $s['broker_id'] ?? '';
    $this->configuration = $s['configuration'] ?? null;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class UpdateBrokerResponse {
  public ?__boolean $auto_minor_version_upgrade;
  public ?__string $broker_id;
  public ?ConfigurationId $configuration;
  public ?__string $engine_version;
  public ?__string $host_instance_type;
  public ?Logs $logs;
  public ?__listOf__string $security_groups;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?__boolean,
    ?'broker_id' => ?__string,
    ?'configuration' => ?ConfigurationId,
    ?'engine_version' => ?__string,
    ?'host_instance_type' => ?__string,
    ?'logs' => ?Logs,
    ?'security_groups' => ?__listOf__string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->broker_id = $s['broker_id'] ?? '';
    $this->configuration = $s['configuration'] ?? null;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->host_instance_type = $s['host_instance_type'] ?? '';
    $this->logs = $s['logs'] ?? null;
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class UpdateConfigurationInput {
  public ?__string $data;
  public ?__string $description;

  public function __construct(shape(
    ?'data' => ?__string,
    ?'description' => ?__string,
  ) $s = shape()) {
    $this->data = $s['data'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class UpdateConfigurationOutput {
  public ?__string $arn;
  public ?__timestampIso8601 $created;
  public ?__string $id;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;
  public ?__listOfSanitizationWarning $warnings;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created' => ?__timestampIso8601,
    ?'id' => ?__string,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
    ?'warnings' => ?__listOfSanitizationWarning,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

class UpdateConfigurationRequest {
  public ?__string $configuration_id;
  public ?__string $data;
  public ?__string $description;

  public function __construct(shape(
    ?'configuration_id' => ?__string,
    ?'data' => ?__string,
    ?'description' => ?__string,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->data = $s['data'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class UpdateConfigurationResponse {
  public ?__string $arn;
  public ?__timestampIso8601 $created;
  public ?__string $id;
  public ?ConfigurationRevision $latest_revision;
  public ?__string $name;
  public ?__listOfSanitizationWarning $warnings;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'created' => ?__timestampIso8601,
    ?'id' => ?__string,
    ?'latest_revision' => ?ConfigurationRevision,
    ?'name' => ?__string,
    ?'warnings' => ?__listOfSanitizationWarning,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->latest_revision = $s['latest_revision'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

class UpdateUserInput {
  public ?__boolean $console_access;
  public ?__listOf__string $groups;
  public ?__string $password;

  public function __construct(shape(
    ?'console_access' => ?__boolean,
    ?'groups' => ?__listOf__string,
    ?'password' => ?__string,
  ) $s = shape()) {
    $this->console_access = $s['console_access'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->password = $s['password'] ?? '';
  }
}

class UpdateUserRequest {
  public ?__string $broker_id;
  public ?__boolean $console_access;
  public ?__listOf__string $groups;
  public ?__string $password;
  public ?__string $username;

  public function __construct(shape(
    ?'broker_id' => ?__string,
    ?'console_access' => ?__boolean,
    ?'groups' => ?__listOf__string,
    ?'password' => ?__string,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->broker_id = $s['broker_id'] ?? '';
    $this->console_access = $s['console_access'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->password = $s['password'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class UpdateUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class User {
  public ?__boolean $console_access;
  public ?__listOf__string $groups;
  public ?__string $password;
  public ?__string $username;

  public function __construct(shape(
    ?'console_access' => ?__boolean,
    ?'groups' => ?__listOf__string,
    ?'password' => ?__string,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->console_access = $s['console_access'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->password = $s['password'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class UserPendingChanges {
  public ?__boolean $console_access;
  public ?__listOf__string $groups;
  public ?ChangeType $pending_change;

  public function __construct(shape(
    ?'console_access' => ?__boolean,
    ?'groups' => ?__listOf__string,
    ?'pending_change' => ?ChangeType,
  ) $s = shape()) {
    $this->console_access = $s['console_access'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->pending_change = $s['pending_change'] ?? '';
  }
}

class UserSummary {
  public ?ChangeType $pending_change;
  public ?__string $username;

  public function __construct(shape(
    ?'pending_change' => ?ChangeType,
    ?'username' => ?__string,
  ) $s = shape()) {
    $this->pending_change = $s['pending_change'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class WeeklyStartTime {
  public ?DayOfWeek $day_of_week;
  public ?__string $time_of_day;
  public ?__string $time_zone;

  public function __construct(shape(
    ?'day_of_week' => ?DayOfWeek,
    ?'time_of_day' => ?__string,
    ?'time_zone' => ?__string,
  ) $s = shape()) {
    $this->day_of_week = $s['day_of_week'] ?? '';
    $this->time_of_day = $s['time_of_day'] ?? '';
    $this->time_zone = $s['time_zone'] ?? '';
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

