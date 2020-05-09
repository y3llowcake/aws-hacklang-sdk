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

class AWSOpsWorksCMResourceArn {
}

class AccountAttribute {
  public int $maximum;
  public string $name;
  public int $used;
}

class AccountAttributes {
}

class AssociateNodeRequest {
  public EngineAttributes $engine_attributes;
  public NodeName $node_name;
  public ServerName $server_name;
}

class AssociateNodeResponse {
  public NodeAssociationStatusToken $node_association_status_token;
}

class AttributeName {
}

class AttributeValue {
}

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
}

class BackupId {
}

class BackupRetentionCountDefinition {
}

class BackupStatus {
}

class BackupType {
}

class Backups {
}

class Boolean {
}

class CreateBackupRequest {
  public string $description;
  public ServerName $server_name;
  public TagList $tags;
}

class CreateBackupResponse {
  public Backup $backup;
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
}

class CreateServerResponse {
  public Server $server;
}

class CustomCertificate {
}

class CustomDomain {
}

class CustomPrivateKey {
}

class DeleteBackupRequest {
  public BackupId $backup_id;
}

class DeleteBackupResponse {
}

class DeleteServerRequest {
  public ServerName $server_name;
}

class DeleteServerResponse {
}

class DescribeAccountAttributesRequest {
}

class DescribeAccountAttributesResponse {
  public AccountAttributes $attributes;
}

class DescribeBackupsRequest {
  public BackupId $backup_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServerName $server_name;
}

class DescribeBackupsResponse {
  public Backups $backups;
  public string $next_token;
}

class DescribeEventsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServerName $server_name;
}

class DescribeEventsResponse {
  public string $next_token;
  public ServerEvents $server_events;
}

class DescribeNodeAssociationStatusRequest {
  public NodeAssociationStatusToken $node_association_status_token;
  public ServerName $server_name;
}

class DescribeNodeAssociationStatusResponse {
  public EngineAttributes $engine_attributes;
  public NodeAssociationStatus $node_association_status;
}

class DescribeServersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServerName $server_name;
}

class DescribeServersResponse {
  public string $next_token;
  public Servers $servers;
}

class DisassociateNodeRequest {
  public EngineAttributes $engine_attributes;
  public NodeName $node_name;
  public ServerName $server_name;
}

class DisassociateNodeResponse {
  public NodeAssociationStatusToken $node_association_status_token;
}

class EngineAttribute {
  public EngineAttributeName $name;
  public EngineAttributeValue $value;
}

class EngineAttributeName {
}

class EngineAttributeValue {
}

class EngineAttributes {
}

class ExportServerEngineAttributeRequest {
  public string $export_attribute_name;
  public EngineAttributes $input_attributes;
  public ServerName $server_name;
}

class ExportServerEngineAttributeResponse {
  public EngineAttribute $engine_attribute;
  public ServerName $server_name;
}

class InstanceProfileArn {
}

class Integer {
}

class InvalidNextTokenException {
  public string $message;
}

class InvalidStateException {
  public string $message;
}

class KeyPair {
}

class LimitExceededException {
  public string $message;
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public AWSOpsWorksCMResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class MaintenanceStatus {
}

class MaxResults {
}

class NextToken {
}

class NodeAssociationStatus {
}

class NodeAssociationStatusToken {
}

class NodeName {
}

class ResourceAlreadyExistsException {
  public string $message;
}

class ResourceNotFoundException {
  public string $message;
}

class RestoreServerRequest {
  public BackupId $backup_id;
  public string $instance_type;
  public KeyPair $key_pair;
  public ServerName $server_name;
}

class RestoreServerResponse {
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
}

class ServerEvent {
  public Timestamp $created_at;
  public string $log_url;
  public string $message;
  public string $server_name;
}

class ServerEvents {
}

class ServerName {
}

class ServerStatus {
}

class Servers {
}

class ServiceRoleArn {
}

class StartMaintenanceRequest {
  public EngineAttributes $engine_attributes;
  public ServerName $server_name;
}

class StartMaintenanceResponse {
  public Server $server;
}

class String {
}

class Strings {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public AWSOpsWorksCMResourceArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TimeWindowDefinition {
}

class Timestamp {
}

class UntagResourceRequest {
  public AWSOpsWorksCMResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateServerEngineAttributesRequest {
  public AttributeName $attribute_name;
  public AttributeValue $attribute_value;
  public ServerName $server_name;
}

class UpdateServerEngineAttributesResponse {
  public Server $server;
}

class UpdateServerRequest {
  public int $backup_retention_count;
  public boolean $disable_automated_backup;
  public TimeWindowDefinition $preferred_backup_window;
  public TimeWindowDefinition $preferred_maintenance_window;
  public ServerName $server_name;
}

class UpdateServerResponse {
  public Server $server;
}

class ValidationException {
  public string $message;
}

