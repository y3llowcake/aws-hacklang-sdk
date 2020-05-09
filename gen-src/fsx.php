<?hh // strict
namespace slack\aws\fsx;

interface FSx {
  public function UpdateFileSystem(UpdateFileSystemRequest) Awaitable<Errors\Result<UpdateFileSystemResponse>>;
  public function DescribeBackups(DescribeBackupsRequest) Awaitable<Errors\Result<DescribeBackupsResponse>>;
  public function CreateFileSystem(CreateFileSystemRequest) Awaitable<Errors\Result<CreateFileSystemResponse>>;
  public function DeleteBackup(DeleteBackupRequest) Awaitable<Errors\Result<DeleteBackupResponse>>;
  public function DeleteFileSystem(DeleteFileSystemRequest) Awaitable<Errors\Result<DeleteFileSystemResponse>>;
  public function CreateDataRepositoryTask(CreateDataRepositoryTaskRequest) Awaitable<Errors\Result<CreateDataRepositoryTaskResponse>>;
  public function DescribeFileSystems(DescribeFileSystemsRequest) Awaitable<Errors\Result<DescribeFileSystemsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CancelDataRepositoryTask(CancelDataRepositoryTaskRequest) Awaitable<Errors\Result<CancelDataRepositoryTaskResponse>>;
  public function CreateFileSystemFromBackup(CreateFileSystemFromBackupRequest) Awaitable<Errors\Result<CreateFileSystemFromBackupResponse>>;
  public function DescribeDataRepositoryTasks(DescribeDataRepositoryTasksRequest) Awaitable<Errors\Result<DescribeDataRepositoryTasksResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function CreateBackup(CreateBackupRequest) Awaitable<Errors\Result<CreateBackupResponse>>;
}

class DataRepositoryConfiguration {
  public Megabytes $imported_file_chunk_size;
  public ArchivePath $import_path;
  public ArchivePath $export_path;
}

class FileSystemId {
}

class KmsKeyId {
}

class BackupId {
}

class LustreFileSystemConfiguration {
  public PerUnitStorageThroughput $per_unit_storage_throughput;
  public LustreFileSystemMountName $mount_name;
  public WeeklyTime $weekly_maintenance_start_time;
  public DataRepositoryConfiguration $data_repository_configuration;
  public LustreDeploymentType $deployment_type;
}

class TagKeys {
}

class TagValue {
}

class AWSAccountId {
}

class SelfManagedActiveDirectoryConfigurationUpdates {
  public DirectoryUserName $user_name;
  public DirectoryPassword $password;
  public DnsIps $dns_ips;
}

class UntagResourceResponse {
}

class CreateDataRepositoryTaskResponse {
  public DataRepositoryTask $data_repository_task;
}

class ServiceLimitExceeded {
  public ServiceLimit $limit;
  public ErrorMessage $message;
}

class CreateFileSystemRequest {
  public StorageCapacity $storage_capacity;
  public StorageType $storage_type;
  public SubnetIds $subnet_ids;
  public KmsKeyId $kms_key_id;
  public FileSystemType $file_system_type;
  public SecurityGroupIds $security_group_ids;
  public Tags $tags;
  public CreateFileSystemWindowsConfiguration $windows_configuration;
  public CreateFileSystemLustreConfiguration $lustre_configuration;
  public ClientRequestToken $client_request_token;
}

class DescribeBackupsResponse {
  public Backups $backups;
  public NextToken $next_token;
}

class NetworkInterfaceId {
}

class ReportScope {
}

class ActiveDirectoryFullyQualifiedName {
}

class DirectoryId {
}

class DirectoryPassword {
}

class MissingFileSystemConfiguration {
  public ErrorMessage $message;
}

class WindowsDeploymentType {
}

class DNSName {
}

class DescribeFileSystemsResponse {
  public FileSystems $file_systems;
  public NextToken $next_token;
}

class FileSystemIds {
}

class FileSystemLifecycle {
}

class FilterValue {
}

class ResourceARN {
}

class UpdateFileSystemLustreConfiguration {
  public WeeklyTime $weekly_maintenance_start_time;
}

class CancelDataRepositoryTaskRequest {
  public TaskId $task_id;
}

class IpAddress {
}

class LastUpdatedTime {
}

class Tag {
  public TagValue $value;
  public TagKey $key;
}

class UpdateFileSystemResponse {
  public FileSystem $file_system;
}

class Parameter {
}

class SubnetId {
}

class DescribeBackupsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public BackupIds $backup_ids;
}

class FileSystemMaintenanceOperations {
}

class FileSystemNotFound {
  public ErrorMessage $message;
}

class FilterName {
}

class StorageCapacity {
}

class TagKey {
}

class TagResourceResponse {
}

class ActiveDirectoryBackupAttributes {
  public ActiveDirectoryFullyQualifiedName $domain_name;
  public DirectoryId $active_directory_id;
}

class CancelDataRepositoryTaskResponse {
  public DataRepositoryTaskLifecycle $lifecycle;
  public TaskId $task_id;
}

class CreateFileSystemFromBackupResponse {
  public FileSystem $file_system;
}

class UntagResourceRequest {
  public ResourceARN $resource_arn;
  public TagKeys $tag_keys;
}

class CreateBackupResponse {
  public Backup $backup;
}

class DeleteFileSystemWindowsConfiguration {
  public Flag $skip_final_backup;
  public Tags $final_backup_tags;
}

class SecurityGroupIds {
}

class SelfManagedActiveDirectoryAttributes {
  public ActiveDirectoryFullyQualifiedName $domain_name;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;
  public FileSystemAdministratorsGroupName $file_system_administrators_group;
  public DirectoryUserName $user_name;
  public DnsIps $dns_ips;
}

class TagResourceRequest {
  public ResourceARN $resource_arn;
  public Tags $tags;
}

class TaskIds {
}

class UpdateFileSystemRequest {
  public FileSystemId $file_system_id;
  public ClientRequestToken $client_request_token;
  public UpdateFileSystemWindowsConfiguration $windows_configuration;
  public UpdateFileSystemLustreConfiguration $lustre_configuration;
}

class AutomaticBackupRetentionDays {
}

class BadRequest {
  public ErrorMessage $message;
}

class CreateBackupRequest {
  public FileSystemId $file_system_id;
  public ClientRequestToken $client_request_token;
  public Tags $tags;
}

class DirectoryUserName {
}

class DnsIps {
}

class ListTagsForResourceRequest {
  public ResourceARN $resource_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class SucceededCount {
}

class DeleteBackupRequest {
  public BackupId $backup_id;
  public ClientRequestToken $client_request_token;
}

class DeleteFileSystemRequest {
  public ClientRequestToken $client_request_token;
  public DeleteFileSystemWindowsConfiguration $windows_configuration;
  public FileSystemId $file_system_id;
}

class Filters {
}

class MegabytesPerSecond {
}

class ClientRequestToken {
}

class DataRepositoryTaskPaths {
}

class FileSystems {
}

class MaxResults {
}

class SubnetIds {
}

class LustreDeploymentType {
}

class BackupFailureDetails {
  public ErrorMessage $message;
}

class BackupNotFound {
  public ErrorMessage $message;
}

class DataRepositoryTaskEnded {
  public ErrorMessage $message;
}

class DataRepositoryTaskNotFound {
  public ErrorMessage $message;
}

class DeleteBackupResponse {
  public BackupId $backup_id;
  public BackupLifecycle $lifecycle;
}

class InvalidImportPath {
  public ErrorMessage $message;
}

class InvalidNetworkSettings {
  public ErrorMessage $message;
  public SubnetId $invalid_subnet_id;
  public SecurityGroupId $invalid_security_group_id;
}

class CreateFileSystemResponse {
  public FileSystem $file_system;
}

class DataRepositoryTaskFilterValues {
}

class InvalidPerUnitStorageThroughput {
  public ErrorMessage $message;
}

class Megabytes {
}

class Tags {
}

class ArchivePath {
}

class DataRepositoryTaskType {
}

class FileSystemType {
}

class FilterValues {
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public Tags $tags;
}

class UpdateFileSystemWindowsConfiguration {
  public WeeklyTime $weekly_maintenance_start_time;
  public DailyTime $daily_automatic_backup_start_time;
  public AutomaticBackupRetentionDays $automatic_backup_retention_days;
  public SelfManagedActiveDirectoryConfigurationUpdates $self_managed_active_directory_configuration;
}

class DeleteFileSystemResponse {
  public FileSystemId $file_system_id;
  public FileSystemLifecycle $lifecycle;
  public DeleteFileSystemWindowsResponse $windows_response;
}

class FileSystemFailureDetails {
  public ErrorMessage $message;
}

class ActiveDirectoryError {
  public DirectoryId $active_directory_id;
  public ActiveDirectoryErrorType $type;
  public ErrorMessage $message;
}

class DataRepositoryTaskStatus {
  public FailedCount $failed_count;
  public LastUpdatedTime $last_updated_time;
  public TotalCount $total_count;
  public SucceededCount $succeeded_count;
}

class FileSystemAdministratorsGroupName {
}

class ResourceNotFound {
  public ResourceARN $resource_arn;
  public ErrorMessage $message;
}

class CreateDataRepositoryTaskRequest {
  public Tags $tags;
  public DataRepositoryTaskType $type;
  public DataRepositoryTaskPaths $paths;
  public FileSystemId $file_system_id;
  public CompletionReport $report;
  public ClientRequestToken $client_request_token;
}

class CreateFileSystemWindowsConfiguration {
  public DirectoryId $active_directory_id;
  public DailyTime $daily_automatic_backup_start_time;
  public Flag $copy_tags_to_backups;
  public MegabytesPerSecond $throughput_capacity;
  public WeeklyTime $weekly_maintenance_start_time;
  public AutomaticBackupRetentionDays $automatic_backup_retention_days;
  public SelfManagedActiveDirectoryConfiguration $self_managed_active_directory_configuration;
  public WindowsDeploymentType $deployment_type;
  public SubnetId $preferred_subnet_id;
}

class DataRepositoryTaskFilter {
  public DataRepositoryTaskFilterName $name;
  public DataRepositoryTaskFilterValues $values;
}

class InvalidExportPath {
  public ErrorMessage $message;
}

class CreateFileSystemFromBackupRequest {
  public BackupId $backup_id;
  public ClientRequestToken $client_request_token;
  public SubnetIds $subnet_ids;
  public SecurityGroupIds $security_group_ids;
  public Tags $tags;
  public CreateFileSystemWindowsConfiguration $windows_configuration;
  public StorageType $storage_type;
}

class DataRepositoryTaskExecuting {
  public ErrorMessage $message;
}

class DataRepositoryTaskLifecycle {
}

class DescribeDataRepositoryTasksResponse {
  public DataRepositoryTasks $data_repository_tasks;
  public NextToken $next_token;
}

class DescribeFileSystemsRequest {
  public FileSystemIds $file_system_ids;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class OrganizationalUnitDistinguishedName {
}

class WindowsFileSystemConfiguration {
  public MegabytesPerSecond $throughput_capacity;
  public WeeklyTime $weekly_maintenance_start_time;
  public SelfManagedActiveDirectoryAttributes $self_managed_active_directory_configuration;
  public SubnetId $preferred_subnet_id;
  public IpAddress $preferred_file_server_ip;
  public FileSystemMaintenanceOperations $maintenance_operations_in_progress;
  public DailyTime $daily_automatic_backup_start_time;
  public AutomaticBackupRetentionDays $automatic_backup_retention_days;
  public Flag $copy_tags_to_backups;
  public DirectoryId $active_directory_id;
  public WindowsDeploymentType $deployment_type;
  public DNSName $remote_administration_endpoint;
}

class DataRepositoryTaskFilters {
}

class FileSystemMaintenanceOperation {
}

class WeeklyTime {
}

class BackupIds {
}

class CompletionReport {
  public ArchivePath $path;
  public ReportFormat $format;
  public ReportScope $scope;
  public Flag $enabled;
}

class DataRepositoryTaskFilterName {
}

class ErrorMessage {
}

class SecurityGroupId {
}

class TotalCount {
}

class BackupInProgress {
  public ErrorMessage $message;
}

class NetworkInterfaceIds {
}

class NextToken {
}

class SelfManagedActiveDirectoryConfiguration {
  public DirectoryPassword $password;
  public DnsIps $dns_ips;
  public ActiveDirectoryFullyQualifiedName $domain_name;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;
  public FileSystemAdministratorsGroupName $file_system_administrators_group;
  public DirectoryUserName $user_name;
}

class Backup {
  public BackupType $type;
  public ProgressPercent $progress_percent;
  public CreationTime $creation_time;
  public Tags $tags;
  public FileSystem $file_system;
  public ActiveDirectoryBackupAttributes $directory_information;
  public BackupId $backup_id;
  public BackupLifecycle $lifecycle;
  public BackupFailureDetails $failure_details;
  public KmsKeyId $kms_key_id;
  public ResourceARN $resource_arn;
}

class BackupType {
}

class DataRepositoryTaskPath {
}

class DescribeDataRepositoryTasksRequest {
  public DataRepositoryTaskFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TaskIds $task_ids;
}

class EndTime {
}

class Filter {
  public FilterName $name;
  public FilterValues $values;
}

class ReportFormat {
}

class StartTime {
}

class TaskId {
}

class BackupRestoring {
  public ErrorMessage $message;
  public FileSystemId $file_system_id;
}

class IncompatibleParameterError {
  public Parameter $parameter;
  public ErrorMessage $message;
}

class VpcId {
}

class ActiveDirectoryErrorType {
}

class CreateFileSystemLustreConfiguration {
  public Megabytes $imported_file_chunk_size;
  public LustreDeploymentType $deployment_type;
  public PerUnitStorageThroughput $per_unit_storage_throughput;
  public WeeklyTime $weekly_maintenance_start_time;
  public ArchivePath $import_path;
  public ArchivePath $export_path;
}

class CreationTime {
}

class DeleteFileSystemWindowsResponse {
  public BackupId $final_backup_id;
  public Tags $final_backup_tags;
}

class FileSystem {
  public AWSAccountId $owner_id;
  public CreationTime $creation_time;
  public StorageCapacity $storage_capacity;
  public NetworkInterfaceIds $network_interface_ids;
  public KmsKeyId $kms_key_id;
  public ResourceARN $resource_arn;
  public Tags $tags;
  public FileSystemId $file_system_id;
  public FileSystemLifecycle $lifecycle;
  public FileSystemFailureDetails $failure_details;
  public StorageType $storage_type;
  public LustreFileSystemConfiguration $lustre_configuration;
  public SubnetIds $subnet_ids;
  public DNSName $dns_name;
  public WindowsFileSystemConfiguration $windows_configuration;
  public FileSystemType $file_system_type;
  public VpcId $vpc_id;
}

class PerUnitStorageThroughput {
}

class ProgressPercent {
}

class BackupLifecycle {
}

class Backups {
}

class DataRepositoryTask {
  public CreationTime $creation_time;
  public FileSystemId $file_system_id;
  public DataRepositoryTaskStatus $status;
  public CompletionReport $report;
  public EndTime $end_time;
  public ResourceARN $resource_arn;
  public Tags $tags;
  public DataRepositoryTaskPaths $paths;
  public TaskId $task_id;
  public DataRepositoryTaskLifecycle $lifecycle;
  public DataRepositoryTaskType $type;
  public StartTime $start_time;
  public DataRepositoryTaskFailureDetails $failure_details;
}

class FailedCount {
}

class Flag {
}

class LustreFileSystemMountName {
}

class NotServiceResourceError {
  public ResourceARN $resource_arn;
  public ErrorMessage $message;
}

class DataRepositoryTaskFilterValue {
}

class DailyTime {
}

class ResourceDoesNotSupportTagging {
  public ResourceARN $resource_arn;
  public ErrorMessage $message;
}

class DataRepositoryTaskFailureDetails {
  public ErrorMessage $message;
}

class DataRepositoryTasks {
}

class InternalServerError {
  public ErrorMessage $message;
}

class ServiceLimit {
}

class StorageType {
}

class UnsupportedOperation {
  public ErrorMessage $message;
}

