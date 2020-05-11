<?hh // strict
namespace slack\aws\opsworks-cm;

interface OpsWorksCM {
  public function AssociateNode(AssociateNodeRequest): Awaitable<Errors\Result<AssociateNodeResponse>>;
  public function CreateBackup(CreateBackupRequest): Awaitable<Errors\Result<CreateBackupResponse>>;
  public function CreateServer(CreateServerRequest): Awaitable<Errors\Result<CreateServerResponse>>;
  public function DeleteBackup(DeleteBackupRequest): Awaitable<Errors\Result<DeleteBackupResponse>>;
  public function DeleteServer(DeleteServerRequest): Awaitable<Errors\Result<DeleteServerResponse>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesRequest): Awaitable<Errors\Result<DescribeAccountAttributesResponse>>;
  public function DescribeBackups(DescribeBackupsRequest): Awaitable<Errors\Result<DescribeBackupsResponse>>;
  public function DescribeEvents(DescribeEventsRequest): Awaitable<Errors\Result<DescribeEventsResponse>>;
  public function DescribeNodeAssociationStatus(DescribeNodeAssociationStatusRequest): Awaitable<Errors\Result<DescribeNodeAssociationStatusResponse>>;
  public function DescribeServers(DescribeServersRequest): Awaitable<Errors\Result<DescribeServersResponse>>;
  public function DisassociateNode(DisassociateNodeRequest): Awaitable<Errors\Result<DisassociateNodeResponse>>;
  public function ExportServerEngineAttribute(ExportServerEngineAttributeRequest): Awaitable<Errors\Result<ExportServerEngineAttributeResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function RestoreServer(RestoreServerRequest): Awaitable<Errors\Result<RestoreServerResponse>>;
  public function StartMaintenance(StartMaintenanceRequest): Awaitable<Errors\Result<StartMaintenanceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateServer(UpdateServerRequest): Awaitable<Errors\Result<UpdateServerResponse>>;
  public function UpdateServerEngineAttributes(UpdateServerEngineAttributesRequest): Awaitable<Errors\Result<UpdateServerEngineAttributesResponse>>;
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
    $this->maximum = $maximum ?? ;
    $this->name = $name ?? ;
    $this->used = $used ?? ;
  }
}

type AccountAttributes = vec<AccountAttribute>;

class AssociateNodeRequest {
  public EngineAttributes $engine_attributes;
  public NodeName $node_name;
  public ServerName $server_name;

  public function __construct(shape(
  ?'engine_attributes' => EngineAttributes,
  ?'node_name' => NodeName,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->engine_attributes = $engine_attributes ?? [];
    $this->node_name = $node_name ?? "";
    $this->server_name = $server_name ?? "";
  }
}

class AssociateNodeResponse {
  public NodeAssociationStatusToken $node_association_status_token;

  public function __construct(shape(
  ?'node_association_status_token' => NodeAssociationStatusToken,
  ) $s = shape()) {
    $this->node_association_status_token = $node_association_status_token ?? "";
  }
}

type AttributeName = string;

type AttributeValue = string;

class Backup {
  public string $backup_arn;
  public BackupId $backup_id;
  public BackupType $backup_type;
  public Timestamp $created_at;
  public string $description;
  public string $engine;
  public string $engine_model;
  public string $engine_version;
  public string $instance_profile_arn;
  public string $instance_type;
  public string $key_pair;
  public TimeWindowDefinition $preferred_backup_window;
  public TimeWindowDefinition $preferred_maintenance_window;
  public int $s_3_data_size;
  public string $s_3_data_url;
  public string $s_3_log_url;
  public Strings $security_group_ids;
  public ServerName $server_name;
  public string $service_role_arn;
  public BackupStatus $status;
  public string $status_description;
  public Strings $subnet_ids;
  public string $tools_version;
  public string $user_arn;

  public function __construct(shape(
  ?'backup_arn' => string,
  ?'backup_id' => BackupId,
  ?'backup_type' => BackupType,
  ?'created_at' => Timestamp,
  ?'description' => string,
  ?'engine' => string,
  ?'engine_model' => string,
  ?'engine_version' => string,
  ?'instance_profile_arn' => string,
  ?'instance_type' => string,
  ?'key_pair' => string,
  ?'preferred_backup_window' => TimeWindowDefinition,
  ?'preferred_maintenance_window' => TimeWindowDefinition,
  ?'s_3_data_size' => int,
  ?'s_3_data_url' => string,
  ?'s_3_log_url' => string,
  ?'security_group_ids' => Strings,
  ?'server_name' => ServerName,
  ?'service_role_arn' => string,
  ?'status' => BackupStatus,
  ?'status_description' => string,
  ?'subnet_ids' => Strings,
  ?'tools_version' => string,
  ?'user_arn' => string,
  ) $s = shape()) {
    $this->backup_arn = $backup_arn ?? ;
    $this->backup_id = $backup_id ?? "";
    $this->backup_type = $backup_type ?? "";
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? ;
    $this->engine = $engine ?? ;
    $this->engine_model = $engine_model ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->instance_profile_arn = $instance_profile_arn ?? "";
    $this->instance_type = $instance_type ?? ;
    $this->key_pair = $key_pair ?? "";
    $this->preferred_backup_window = $preferred_backup_window ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->s_3_data_size = $s_3_data_size ?? ;
    $this->s_3_data_url = $s_3_data_url ?? ;
    $this->s_3_log_url = $s_3_log_url ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->server_name = $server_name ?? "";
    $this->service_role_arn = $service_role_arn ?? "";
    $this->status = $status ?? ;
    $this->status_description = $status_description ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tools_version = $tools_version ?? ;
    $this->user_arn = $user_arn ?? ;
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
  public ServerName $server_name;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => string,
  ?'server_name' => ServerName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->server_name = $server_name ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateBackupResponse {
  public Backup $backup;

  public function __construct(shape(
  ?'backup' => Backup,
  ) $s = shape()) {
    $this->backup = $backup ?? null;
  }
}

class CreateServerRequest {
  public boolean $associate_public_ip_address;
  public BackupId $backup_id;
  public BackupRetentionCountDefinition $backup_retention_count;
  public CustomCertificate $custom_certificate;
  public CustomDomain $custom_domain;
  public CustomPrivateKey $custom_private_key;
  public boolean $disable_automated_backup;
  public string $engine;
  public EngineAttributes $engine_attributes;
  public string $engine_model;
  public string $engine_version;
  public InstanceProfileArn $instance_profile_arn;
  public string $instance_type;
  public KeyPair $key_pair;
  public TimeWindowDefinition $preferred_backup_window;
  public TimeWindowDefinition $preferred_maintenance_window;
  public Strings $security_group_ids;
  public ServerName $server_name;
  public ServiceRoleArn $service_role_arn;
  public Strings $subnet_ids;
  public TagList $tags;

  public function __construct(shape(
  ?'associate_public_ip_address' => boolean,
  ?'backup_id' => BackupId,
  ?'backup_retention_count' => BackupRetentionCountDefinition,
  ?'custom_certificate' => CustomCertificate,
  ?'custom_domain' => CustomDomain,
  ?'custom_private_key' => CustomPrivateKey,
  ?'disable_automated_backup' => boolean,
  ?'engine' => string,
  ?'engine_attributes' => EngineAttributes,
  ?'engine_model' => string,
  ?'engine_version' => string,
  ?'instance_profile_arn' => InstanceProfileArn,
  ?'instance_type' => string,
  ?'key_pair' => KeyPair,
  ?'preferred_backup_window' => TimeWindowDefinition,
  ?'preferred_maintenance_window' => TimeWindowDefinition,
  ?'security_group_ids' => Strings,
  ?'server_name' => ServerName,
  ?'service_role_arn' => ServiceRoleArn,
  ?'subnet_ids' => Strings,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->associate_public_ip_address = $associate_public_ip_address ?? ;
    $this->backup_id = $backup_id ?? "";
    $this->backup_retention_count = $backup_retention_count ?? ;
    $this->custom_certificate = $custom_certificate ?? "";
    $this->custom_domain = $custom_domain ?? "";
    $this->custom_private_key = $custom_private_key ?? "";
    $this->disable_automated_backup = $disable_automated_backup ?? ;
    $this->engine = $engine ?? ;
    $this->engine_attributes = $engine_attributes ?? [];
    $this->engine_model = $engine_model ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->instance_profile_arn = $instance_profile_arn ?? "";
    $this->instance_type = $instance_type ?? ;
    $this->key_pair = $key_pair ?? "";
    $this->preferred_backup_window = $preferred_backup_window ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->server_name = $server_name ?? "";
    $this->service_role_arn = $service_role_arn ?? "";
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateServerResponse {
  public Server $server;

  public function __construct(shape(
  ?'server' => Server,
  ) $s = shape()) {
    $this->server = $server ?? null;
  }
}

type CustomCertificate = string;

type CustomDomain = string;

type CustomPrivateKey = string;

class DeleteBackupRequest {
  public BackupId $backup_id;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
  }
}

class DeleteBackupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteServerRequest {
  public ServerName $server_name;

  public function __construct(shape(
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->server_name = $server_name ?? "";
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
  public AccountAttributes $attributes;

  public function __construct(shape(
  ?'attributes' => AccountAttributes,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
  }
}

class DescribeBackupsRequest {
  public BackupId $backup_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServerName $server_name;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->server_name = $server_name ?? "";
  }
}

class DescribeBackupsResponse {
  public Backups $backups;
  public string $next_token;

  public function __construct(shape(
  ?'backups' => Backups,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->backups = $backups ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeEventsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServerName $server_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->server_name = $server_name ?? "";
  }
}

class DescribeEventsResponse {
  public string $next_token;
  public ServerEvents $server_events;

  public function __construct(shape(
  ?'next_token' => string,
  ?'server_events' => ServerEvents,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->server_events = $server_events ?? [];
  }
}

class DescribeNodeAssociationStatusRequest {
  public NodeAssociationStatusToken $node_association_status_token;
  public ServerName $server_name;

  public function __construct(shape(
  ?'node_association_status_token' => NodeAssociationStatusToken,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->node_association_status_token = $node_association_status_token ?? "";
    $this->server_name = $server_name ?? "";
  }
}

class DescribeNodeAssociationStatusResponse {
  public EngineAttributes $engine_attributes;
  public NodeAssociationStatus $node_association_status;

  public function __construct(shape(
  ?'engine_attributes' => EngineAttributes,
  ?'node_association_status' => NodeAssociationStatus,
  ) $s = shape()) {
    $this->engine_attributes = $engine_attributes ?? [];
    $this->node_association_status = $node_association_status ?? "";
  }
}

class DescribeServersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServerName $server_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->server_name = $server_name ?? "";
  }
}

class DescribeServersResponse {
  public string $next_token;
  public Servers $servers;

  public function __construct(shape(
  ?'next_token' => string,
  ?'servers' => Servers,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->servers = $servers ?? [];
  }
}

class DisassociateNodeRequest {
  public EngineAttributes $engine_attributes;
  public NodeName $node_name;
  public ServerName $server_name;

  public function __construct(shape(
  ?'engine_attributes' => EngineAttributes,
  ?'node_name' => NodeName,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->engine_attributes = $engine_attributes ?? [];
    $this->node_name = $node_name ?? "";
    $this->server_name = $server_name ?? "";
  }
}

class DisassociateNodeResponse {
  public NodeAssociationStatusToken $node_association_status_token;

  public function __construct(shape(
  ?'node_association_status_token' => NodeAssociationStatusToken,
  ) $s = shape()) {
    $this->node_association_status_token = $node_association_status_token ?? "";
  }
}

class EngineAttribute {
  public EngineAttributeName $name;
  public EngineAttributeValue $value;

  public function __construct(shape(
  ?'name' => EngineAttributeName,
  ?'value' => EngineAttributeValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

type EngineAttributeName = string;

type EngineAttributeValue = string;

type EngineAttributes = vec<EngineAttribute>;

class ExportServerEngineAttributeRequest {
  public string $export_attribute_name;
  public EngineAttributes $input_attributes;
  public ServerName $server_name;

  public function __construct(shape(
  ?'export_attribute_name' => string,
  ?'input_attributes' => EngineAttributes,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->export_attribute_name = $export_attribute_name ?? ;
    $this->input_attributes = $input_attributes ?? ;
    $this->server_name = $server_name ?? "";
  }
}

class ExportServerEngineAttributeResponse {
  public EngineAttribute $engine_attribute;
  public ServerName $server_name;

  public function __construct(shape(
  ?'engine_attribute' => EngineAttribute,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->engine_attribute = $engine_attribute ?? null;
    $this->server_name = $server_name ?? "";
  }
}

type InstanceProfileArn = string;

type Integer = int;

class InvalidNextTokenException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidStateException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type KeyPair = string;

class LimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public AWSOpsWorksCMResourceArn $resource_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource_arn' => AWSOpsWorksCMResourceArn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? ;
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
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class RestoreServerRequest {
  public BackupId $backup_id;
  public string $instance_type;
  public KeyPair $key_pair;
  public ServerName $server_name;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ?'instance_type' => string,
  ?'key_pair' => KeyPair,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
    $this->instance_type = $instance_type ?? ;
    $this->key_pair = $key_pair ?? "";
    $this->server_name = $server_name ?? "";
  }
}

class RestoreServerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Server {
  public boolean $associate_public_ip_address;
  public int $backup_retention_count;
  public string $cloud_formation_stack_arn;
  public Timestamp $created_at;
  public CustomDomain $custom_domain;
  public boolean $disable_automated_backup;
  public string $endpoint;
  public string $engine;
  public EngineAttributes $engine_attributes;
  public string $engine_model;
  public string $engine_version;
  public string $instance_profile_arn;
  public string $instance_type;
  public string $key_pair;
  public MaintenanceStatus $maintenance_status;
  public TimeWindowDefinition $preferred_backup_window;
  public TimeWindowDefinition $preferred_maintenance_window;
  public Strings $security_group_ids;
  public string $server_arn;
  public string $server_name;
  public string $service_role_arn;
  public ServerStatus $status;
  public string $status_reason;
  public Strings $subnet_ids;

  public function __construct(shape(
  ?'associate_public_ip_address' => boolean,
  ?'backup_retention_count' => int,
  ?'cloud_formation_stack_arn' => string,
  ?'created_at' => Timestamp,
  ?'custom_domain' => CustomDomain,
  ?'disable_automated_backup' => boolean,
  ?'endpoint' => string,
  ?'engine' => string,
  ?'engine_attributes' => EngineAttributes,
  ?'engine_model' => string,
  ?'engine_version' => string,
  ?'instance_profile_arn' => string,
  ?'instance_type' => string,
  ?'key_pair' => string,
  ?'maintenance_status' => MaintenanceStatus,
  ?'preferred_backup_window' => TimeWindowDefinition,
  ?'preferred_maintenance_window' => TimeWindowDefinition,
  ?'security_group_ids' => Strings,
  ?'server_arn' => string,
  ?'server_name' => string,
  ?'service_role_arn' => string,
  ?'status' => ServerStatus,
  ?'status_reason' => string,
  ?'subnet_ids' => Strings,
  ) $s = shape()) {
    $this->associate_public_ip_address = $associate_public_ip_address ?? ;
    $this->backup_retention_count = $backup_retention_count ?? ;
    $this->cloud_formation_stack_arn = $cloud_formation_stack_arn ?? ;
    $this->created_at = $created_at ?? ;
    $this->custom_domain = $custom_domain ?? "";
    $this->disable_automated_backup = $disable_automated_backup ?? ;
    $this->endpoint = $endpoint ?? ;
    $this->engine = $engine ?? ;
    $this->engine_attributes = $engine_attributes ?? [];
    $this->engine_model = $engine_model ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->instance_profile_arn = $instance_profile_arn ?? "";
    $this->instance_type = $instance_type ?? ;
    $this->key_pair = $key_pair ?? "";
    $this->maintenance_status = $maintenance_status ?? "";
    $this->preferred_backup_window = $preferred_backup_window ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->server_arn = $server_arn ?? ;
    $this->server_name = $server_name ?? "";
    $this->service_role_arn = $service_role_arn ?? "";
    $this->status = $status ?? ;
    $this->status_reason = $status_reason ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
  }
}

class ServerEvent {
  public Timestamp $created_at;
  public string $log_url;
  public string $message;
  public string $server_name;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'log_url' => string,
  ?'message' => string,
  ?'server_name' => string,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->log_url = $log_url ?? ;
    $this->message = $message ?? ;
    $this->server_name = $server_name ?? "";
  }
}

type ServerEvents = vec<ServerEvent>;

type ServerName = string;

type ServerStatus = string;

type Servers = vec<Server>;

type ServiceRoleArn = string;

class StartMaintenanceRequest {
  public EngineAttributes $engine_attributes;
  public ServerName $server_name;

  public function __construct(shape(
  ?'engine_attributes' => EngineAttributes,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->engine_attributes = $engine_attributes ?? [];
    $this->server_name = $server_name ?? "";
  }
}

class StartMaintenanceResponse {
  public Server $server;

  public function __construct(shape(
  ?'server' => Server,
  ) $s = shape()) {
    $this->server = $server ?? null;
  }
}

type String = string;

type Strings = vec<String>;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public AWSOpsWorksCMResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AWSOpsWorksCMResourceArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
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
  public AWSOpsWorksCMResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AWSOpsWorksCMResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateServerEngineAttributesRequest {
  public AttributeName $attribute_name;
  public AttributeValue $attribute_value;
  public ServerName $server_name;

  public function __construct(shape(
  ?'attribute_name' => AttributeName,
  ?'attribute_value' => AttributeValue,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->attribute_name = $attribute_name ?? "";
    $this->attribute_value = $attribute_value ?? "";
    $this->server_name = $server_name ?? "";
  }
}

class UpdateServerEngineAttributesResponse {
  public Server $server;

  public function __construct(shape(
  ?'server' => Server,
  ) $s = shape()) {
    $this->server = $server ?? null;
  }
}

class UpdateServerRequest {
  public int $backup_retention_count;
  public boolean $disable_automated_backup;
  public TimeWindowDefinition $preferred_backup_window;
  public TimeWindowDefinition $preferred_maintenance_window;
  public ServerName $server_name;

  public function __construct(shape(
  ?'backup_retention_count' => int,
  ?'disable_automated_backup' => boolean,
  ?'preferred_backup_window' => TimeWindowDefinition,
  ?'preferred_maintenance_window' => TimeWindowDefinition,
  ?'server_name' => ServerName,
  ) $s = shape()) {
    $this->backup_retention_count = $backup_retention_count ?? ;
    $this->disable_automated_backup = $disable_automated_backup ?? ;
    $this->preferred_backup_window = $preferred_backup_window ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->server_name = $server_name ?? "";
  }
}

class UpdateServerResponse {
  public Server $server;

  public function __construct(shape(
  ?'server' => Server,
  ) $s = shape()) {
    $this->server = $server ?? null;
  }
}

class ValidationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

