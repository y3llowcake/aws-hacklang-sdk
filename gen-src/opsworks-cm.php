<?hh // strict
namespace slack\aws\opsworks-cm;

interface OpsWorksCM {
  public function AssociateNode(AssociateNodeRequest $in): Awaitable<\Errors\Result<AssociateNodeResponse>>;
  public function CreateBackup(CreateBackupRequest $in): Awaitable<\Errors\Result<CreateBackupResponse>>;
  public function CreateServer(CreateServerRequest $in): Awaitable<\Errors\Result<CreateServerResponse>>;
  public function DeleteBackup(DeleteBackupRequest $in): Awaitable<\Errors\Result<DeleteBackupResponse>>;
  public function DeleteServer(DeleteServerRequest $in): Awaitable<\Errors\Result<DeleteServerResponse>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesRequest $in): Awaitable<\Errors\Result<DescribeAccountAttributesResponse>>;
  public function DescribeBackups(DescribeBackupsRequest $in): Awaitable<\Errors\Result<DescribeBackupsResponse>>;
  public function DescribeEvents(DescribeEventsRequest $in): Awaitable<\Errors\Result<DescribeEventsResponse>>;
  public function DescribeNodeAssociationStatus(DescribeNodeAssociationStatusRequest $in): Awaitable<\Errors\Result<DescribeNodeAssociationStatusResponse>>;
  public function DescribeServers(DescribeServersRequest $in): Awaitable<\Errors\Result<DescribeServersResponse>>;
  public function DisassociateNode(DisassociateNodeRequest $in): Awaitable<\Errors\Result<DisassociateNodeResponse>>;
  public function ExportServerEngineAttribute(ExportServerEngineAttributeRequest $in): Awaitable<\Errors\Result<ExportServerEngineAttributeResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function RestoreServer(RestoreServerRequest $in): Awaitable<\Errors\Result<RestoreServerResponse>>;
  public function StartMaintenance(StartMaintenanceRequest $in): Awaitable<\Errors\Result<StartMaintenanceResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateServer(UpdateServerRequest $in): Awaitable<\Errors\Result<UpdateServerResponse>>;
  public function UpdateServerEngineAttributes(UpdateServerEngineAttributesRequest $in): Awaitable<\Errors\Result<UpdateServerEngineAttributesResponse>>;
}

type AWSOpsWorksCMResourceArn = string;

class AccountAttribute {
  public int $maximum;
  public string $name;
  public int $used;

  public function __construct(shape(
    ?'maximum' => int,
    ?'name' => string,
    ?'used' => int,
  ) $s = shape()) {
    $this->maximum = $s['maximum'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->used = $s['used'] ?? 0;
  }
}

type AccountAttributes = vec<AccountAttribute>;

class AssociateNodeRequest {
  public ?EngineAttributes $engine_attributes;
  public ?NodeName $node_name;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'engine_attributes' => ?EngineAttributes,
    ?'node_name' => ?NodeName,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->engine_attributes = $s['engine_attributes'] ?? vec[];
    $this->node_name = $s['node_name'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class AssociateNodeResponse {
  public ?NodeAssociationStatusToken $node_association_status_token;

  public function __construct(shape(
    ?'node_association_status_token' => ?NodeAssociationStatusToken,
  ) $s = shape()) {
    $this->node_association_status_token = $s['node_association_status_token'] ?? '';
  }
}

type AttributeName = string;

type AttributeValue = string;

class Backup {
  public string $backup_arn;
  public ?BackupId $backup_id;
  public ?BackupType $backup_type;
  public ?Timestamp $created_at;
  public string $description;
  public string $engine;
  public string $engine_model;
  public string $engine_version;
  public string $instance_profile_arn;
  public string $instance_type;
  public string $key_pair;
  public ?TimeWindowDefinition $preferred_backup_window;
  public ?TimeWindowDefinition $preferred_maintenance_window;
  public int $s_3_data_size;
  public string $s_3_data_url;
  public string $s_3_log_url;
  public ?Strings $security_group_ids;
  public ?ServerName $server_name;
  public string $service_role_arn;
  public ?BackupStatus $status;
  public string $status_description;
  public ?Strings $subnet_ids;
  public string $tools_version;
  public string $user_arn;

  public function __construct(shape(
    ?'backup_arn' => string,
    ?'backup_id' => ?BackupId,
    ?'backup_type' => ?BackupType,
    ?'created_at' => ?Timestamp,
    ?'description' => string,
    ?'engine' => string,
    ?'engine_model' => string,
    ?'engine_version' => string,
    ?'instance_profile_arn' => string,
    ?'instance_type' => string,
    ?'key_pair' => string,
    ?'preferred_backup_window' => ?TimeWindowDefinition,
    ?'preferred_maintenance_window' => ?TimeWindowDefinition,
    ?'s_3_data_size' => int,
    ?'s_3_data_url' => string,
    ?'s_3_log_url' => string,
    ?'security_group_ids' => ?Strings,
    ?'server_name' => ?ServerName,
    ?'service_role_arn' => string,
    ?'status' => ?BackupStatus,
    ?'status_description' => string,
    ?'subnet_ids' => ?Strings,
    ?'tools_version' => string,
    ?'user_arn' => string,
  ) $s = shape()) {
    $this->backup_arn = $s['backup_arn'] ?? '';
    $this->backup_id = $s['backup_id'] ?? '';
    $this->backup_type = $s['backup_type'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_model = $s['engine_model'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->instance_profile_arn = $s['instance_profile_arn'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->key_pair = $s['key_pair'] ?? '';
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->s_3_data_size = $s['s_3_data_size'] ?? 0;
    $this->s_3_data_url = $s['s_3_data_url'] ?? '';
    $this->s_3_log_url = $s['s_3_log_url'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->server_name = $s['server_name'] ?? '';
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_description = $s['status_description'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tools_version = $s['tools_version'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

type BackupId = string;

type BackupRetentionCountDefinition = int;

type BackupStatus = string;

type BackupType = string;

type Backups = vec<Backup>;

type Boolean = bool;

class CreateBackupRequest {
  public string $description;
  public ?ServerName $server_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => string,
    ?'server_name' => ?ServerName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateBackupResponse {
  public ?Backup $backup;

  public function __construct(shape(
    ?'backup' => ?Backup,
  ) $s = shape()) {
    $this->backup = $s['backup'] ?? null;
  }
}

class CreateServerRequest {
  public bool $associate_public_ip_address;
  public ?BackupId $backup_id;
  public ?BackupRetentionCountDefinition $backup_retention_count;
  public ?CustomCertificate $custom_certificate;
  public ?CustomDomain $custom_domain;
  public ?CustomPrivateKey $custom_private_key;
  public bool $disable_automated_backup;
  public string $engine;
  public ?EngineAttributes $engine_attributes;
  public string $engine_model;
  public string $engine_version;
  public ?InstanceProfileArn $instance_profile_arn;
  public string $instance_type;
  public ?KeyPair $key_pair;
  public ?TimeWindowDefinition $preferred_backup_window;
  public ?TimeWindowDefinition $preferred_maintenance_window;
  public ?Strings $security_group_ids;
  public ?ServerName $server_name;
  public ?ServiceRoleArn $service_role_arn;
  public ?Strings $subnet_ids;
  public ?TagList $tags;

  public function __construct(shape(
    ?'associate_public_ip_address' => bool,
    ?'backup_id' => ?BackupId,
    ?'backup_retention_count' => ?BackupRetentionCountDefinition,
    ?'custom_certificate' => ?CustomCertificate,
    ?'custom_domain' => ?CustomDomain,
    ?'custom_private_key' => ?CustomPrivateKey,
    ?'disable_automated_backup' => bool,
    ?'engine' => string,
    ?'engine_attributes' => ?EngineAttributes,
    ?'engine_model' => string,
    ?'engine_version' => string,
    ?'instance_profile_arn' => ?InstanceProfileArn,
    ?'instance_type' => string,
    ?'key_pair' => ?KeyPair,
    ?'preferred_backup_window' => ?TimeWindowDefinition,
    ?'preferred_maintenance_window' => ?TimeWindowDefinition,
    ?'security_group_ids' => ?Strings,
    ?'server_name' => ?ServerName,
    ?'service_role_arn' => ?ServiceRoleArn,
    ?'subnet_ids' => ?Strings,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->associate_public_ip_address = $s['associate_public_ip_address'] ?? false;
    $this->backup_id = $s['backup_id'] ?? '';
    $this->backup_retention_count = $s['backup_retention_count'] ?? 0;
    $this->custom_certificate = $s['custom_certificate'] ?? '';
    $this->custom_domain = $s['custom_domain'] ?? '';
    $this->custom_private_key = $s['custom_private_key'] ?? '';
    $this->disable_automated_backup = $s['disable_automated_backup'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_attributes = $s['engine_attributes'] ?? vec[];
    $this->engine_model = $s['engine_model'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->instance_profile_arn = $s['instance_profile_arn'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->key_pair = $s['key_pair'] ?? '';
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->server_name = $s['server_name'] ?? '';
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateServerResponse {
  public ?Server $server;

  public function __construct(shape(
    ?'server' => ?Server,
  ) $s = shape()) {
    $this->server = $s['server'] ?? null;
  }
}

type CustomCertificate = string;

type CustomDomain = string;

type CustomPrivateKey = string;

class DeleteBackupRequest {
  public ?BackupId $backup_id;

  public function __construct(shape(
    ?'backup_id' => ?BackupId,
  ) $s = shape()) {
    $this->backup_id = $s['backup_id'] ?? '';
  }
}

class DeleteBackupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteServerRequest {
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->server_name = $s['server_name'] ?? '';
  }
}

class DeleteServerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountAttributesRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountAttributesResponse {
  public ?AccountAttributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?AccountAttributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class DescribeBackupsRequest {
  public ?BackupId $backup_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'backup_id' => ?BackupId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->backup_id = $s['backup_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class DescribeBackupsResponse {
  public ?Backups $backups;
  public string $next_token;

  public function __construct(shape(
    ?'backups' => ?Backups,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->backups = $s['backups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEventsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class DescribeEventsResponse {
  public string $next_token;
  public ?ServerEvents $server_events;

  public function __construct(shape(
    ?'next_token' => string,
    ?'server_events' => ?ServerEvents,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->server_events = $s['server_events'] ?? vec[];
  }
}

class DescribeNodeAssociationStatusRequest {
  public ?NodeAssociationStatusToken $node_association_status_token;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'node_association_status_token' => ?NodeAssociationStatusToken,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->node_association_status_token = $s['node_association_status_token'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class DescribeNodeAssociationStatusResponse {
  public ?EngineAttributes $engine_attributes;
  public ?NodeAssociationStatus $node_association_status;

  public function __construct(shape(
    ?'engine_attributes' => ?EngineAttributes,
    ?'node_association_status' => ?NodeAssociationStatus,
  ) $s = shape()) {
    $this->engine_attributes = $s['engine_attributes'] ?? vec[];
    $this->node_association_status = $s['node_association_status'] ?? '';
  }
}

class DescribeServersRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class DescribeServersResponse {
  public string $next_token;
  public ?Servers $servers;

  public function __construct(shape(
    ?'next_token' => string,
    ?'servers' => ?Servers,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->servers = $s['servers'] ?? vec[];
  }
}

class DisassociateNodeRequest {
  public ?EngineAttributes $engine_attributes;
  public ?NodeName $node_name;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'engine_attributes' => ?EngineAttributes,
    ?'node_name' => ?NodeName,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->engine_attributes = $s['engine_attributes'] ?? vec[];
    $this->node_name = $s['node_name'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class DisassociateNodeResponse {
  public ?NodeAssociationStatusToken $node_association_status_token;

  public function __construct(shape(
    ?'node_association_status_token' => ?NodeAssociationStatusToken,
  ) $s = shape()) {
    $this->node_association_status_token = $s['node_association_status_token'] ?? '';
  }
}

class EngineAttribute {
  public ?EngineAttributeName $name;
  public ?EngineAttributeValue $value;

  public function __construct(shape(
    ?'name' => ?EngineAttributeName,
    ?'value' => ?EngineAttributeValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type EngineAttributeName = string;

type EngineAttributeValue = string;

type EngineAttributes = vec<EngineAttribute>;

class ExportServerEngineAttributeRequest {
  public string $export_attribute_name;
  public ?EngineAttributes $input_attributes;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'export_attribute_name' => string,
    ?'input_attributes' => ?EngineAttributes,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->export_attribute_name = $s['export_attribute_name'] ?? '';
    $this->input_attributes = $s['input_attributes'] ?? vec[];
    $this->server_name = $s['server_name'] ?? '';
  }
}

class ExportServerEngineAttributeResponse {
  public ?EngineAttribute $engine_attribute;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'engine_attribute' => ?EngineAttribute,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->engine_attribute = $s['engine_attribute'] ?? null;
    $this->server_name = $s['server_name'] ?? '';
  }
}

type InstanceProfileArn = string;

type Integer = int;

class InvalidNextTokenException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidStateException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type KeyPair = string;

class LimitExceededException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?AWSOpsWorksCMResourceArn $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'resource_arn' => ?AWSOpsWorksCMResourceArn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?NextToken $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type MaintenanceStatus = string;

type MaxResults = int;

type NextToken = string;

type NodeAssociationStatus = string;

type NodeAssociationStatusToken = string;

type NodeName = string;

class ResourceAlreadyExistsException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RestoreServerRequest {
  public ?BackupId $backup_id;
  public string $instance_type;
  public ?KeyPair $key_pair;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'backup_id' => ?BackupId,
    ?'instance_type' => string,
    ?'key_pair' => ?KeyPair,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->backup_id = $s['backup_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->key_pair = $s['key_pair'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class RestoreServerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Server {
  public bool $associate_public_ip_address;
  public int $backup_retention_count;
  public string $cloud_formation_stack_arn;
  public ?Timestamp $created_at;
  public ?CustomDomain $custom_domain;
  public bool $disable_automated_backup;
  public string $endpoint;
  public string $engine;
  public ?EngineAttributes $engine_attributes;
  public string $engine_model;
  public string $engine_version;
  public string $instance_profile_arn;
  public string $instance_type;
  public string $key_pair;
  public ?MaintenanceStatus $maintenance_status;
  public ?TimeWindowDefinition $preferred_backup_window;
  public ?TimeWindowDefinition $preferred_maintenance_window;
  public ?Strings $security_group_ids;
  public string $server_arn;
  public string $server_name;
  public string $service_role_arn;
  public ?ServerStatus $status;
  public string $status_reason;
  public ?Strings $subnet_ids;

  public function __construct(shape(
    ?'associate_public_ip_address' => bool,
    ?'backup_retention_count' => int,
    ?'cloud_formation_stack_arn' => string,
    ?'created_at' => ?Timestamp,
    ?'custom_domain' => ?CustomDomain,
    ?'disable_automated_backup' => bool,
    ?'endpoint' => string,
    ?'engine' => string,
    ?'engine_attributes' => ?EngineAttributes,
    ?'engine_model' => string,
    ?'engine_version' => string,
    ?'instance_profile_arn' => string,
    ?'instance_type' => string,
    ?'key_pair' => string,
    ?'maintenance_status' => ?MaintenanceStatus,
    ?'preferred_backup_window' => ?TimeWindowDefinition,
    ?'preferred_maintenance_window' => ?TimeWindowDefinition,
    ?'security_group_ids' => ?Strings,
    ?'server_arn' => string,
    ?'server_name' => string,
    ?'service_role_arn' => string,
    ?'status' => ?ServerStatus,
    ?'status_reason' => string,
    ?'subnet_ids' => ?Strings,
  ) $s = shape()) {
    $this->associate_public_ip_address = $s['associate_public_ip_address'] ?? false;
    $this->backup_retention_count = $s['backup_retention_count'] ?? 0;
    $this->cloud_formation_stack_arn = $s['cloud_formation_stack_arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->custom_domain = $s['custom_domain'] ?? '';
    $this->disable_automated_backup = $s['disable_automated_backup'] ?? false;
    $this->endpoint = $s['endpoint'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_attributes = $s['engine_attributes'] ?? vec[];
    $this->engine_model = $s['engine_model'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->instance_profile_arn = $s['instance_profile_arn'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->key_pair = $s['key_pair'] ?? '';
    $this->maintenance_status = $s['maintenance_status'] ?? '';
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->server_arn = $s['server_arn'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class ServerEvent {
  public ?Timestamp $created_at;
  public string $log_url;
  public string $message;
  public string $server_name;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'log_url' => string,
    ?'message' => string,
    ?'server_name' => string,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->log_url = $s['log_url'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

type ServerEvents = vec<ServerEvent>;

type ServerName = string;

type ServerStatus = string;

type Servers = vec<Server>;

type ServiceRoleArn = string;

class StartMaintenanceRequest {
  public ?EngineAttributes $engine_attributes;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'engine_attributes' => ?EngineAttributes,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->engine_attributes = $s['engine_attributes'] ?? vec[];
    $this->server_name = $s['server_name'] ?? '';
  }
}

class StartMaintenanceResponse {
  public ?Server $server;

  public function __construct(shape(
    ?'server' => ?Server,
  ) $s = shape()) {
    $this->server = $s['server'] ?? null;
  }
}

type String = string;

type Strings = vec<String>;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?AWSOpsWorksCMResourceArn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?AWSOpsWorksCMResourceArn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TimeWindowDefinition = string;

type Timestamp = int;

class UntagResourceRequest {
  public ?AWSOpsWorksCMResourceArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?AWSOpsWorksCMResourceArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateServerEngineAttributesRequest {
  public ?AttributeName $attribute_name;
  public ?AttributeValue $attribute_value;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'attribute_name' => ?AttributeName,
    ?'attribute_value' => ?AttributeValue,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_value = $s['attribute_value'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class UpdateServerEngineAttributesResponse {
  public ?Server $server;

  public function __construct(shape(
    ?'server' => ?Server,
  ) $s = shape()) {
    $this->server = $s['server'] ?? null;
  }
}

class UpdateServerRequest {
  public int $backup_retention_count;
  public bool $disable_automated_backup;
  public ?TimeWindowDefinition $preferred_backup_window;
  public ?TimeWindowDefinition $preferred_maintenance_window;
  public ?ServerName $server_name;

  public function __construct(shape(
    ?'backup_retention_count' => int,
    ?'disable_automated_backup' => bool,
    ?'preferred_backup_window' => ?TimeWindowDefinition,
    ?'preferred_maintenance_window' => ?TimeWindowDefinition,
    ?'server_name' => ?ServerName,
  ) $s = shape()) {
    $this->backup_retention_count = $s['backup_retention_count'] ?? 0;
    $this->disable_automated_backup = $s['disable_automated_backup'] ?? false;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
  }
}

class UpdateServerResponse {
  public ?Server $server;

  public function __construct(shape(
    ?'server' => ?Server,
  ) $s = shape()) {
    $this->server = $s['server'] ?? null;
  }
}

class ValidationException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

