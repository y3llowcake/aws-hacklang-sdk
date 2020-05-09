<?hh // strict
namespace slack\aws\fsx;

interface FSx {
  public function CancelDataRepositoryTask(CancelDataRepositoryTaskRequest): Awaitable<Errors\Result<CancelDataRepositoryTaskResponse>>;
  public function CreateBackup(CreateBackupRequest): Awaitable<Errors\Result<CreateBackupResponse>>;
  public function CreateDataRepositoryTask(CreateDataRepositoryTaskRequest): Awaitable<Errors\Result<CreateDataRepositoryTaskResponse>>;
  public function CreateFileSystem(CreateFileSystemRequest): Awaitable<Errors\Result<CreateFileSystemResponse>>;
  public function CreateFileSystemFromBackup(CreateFileSystemFromBackupRequest): Awaitable<Errors\Result<CreateFileSystemFromBackupResponse>>;
  public function DeleteBackup(DeleteBackupRequest): Awaitable<Errors\Result<DeleteBackupResponse>>;
  public function DeleteFileSystem(DeleteFileSystemRequest): Awaitable<Errors\Result<DeleteFileSystemResponse>>;
  public function DescribeBackups(DescribeBackupsRequest): Awaitable<Errors\Result<DescribeBackupsResponse>>;
  public function DescribeDataRepositoryTasks(DescribeDataRepositoryTasksRequest): Awaitable<Errors\Result<DescribeDataRepositoryTasksResponse>>;
  public function DescribeFileSystems(DescribeFileSystemsRequest): Awaitable<Errors\Result<DescribeFileSystemsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateFileSystem(UpdateFileSystemRequest): Awaitable<Errors\Result<UpdateFileSystemResponse>>;
}

class AWSAccountId {
}

class ActiveDirectoryBackupAttributes {
  public DirectoryId $active_directory_id;
  public ActiveDirectoryFullyQualifiedName $domain_name;
}

class ActiveDirectoryError {
  public DirectoryId $active_directory_id;
  public ErrorMessage $message;
  public ActiveDirectoryErrorType $type;
}

class ActiveDirectoryErrorType {
}

class ActiveDirectoryFullyQualifiedName {
}

class ArchivePath {
}

class AutomaticBackupRetentionDays {
}

class Backup {
  public BackupId $backup_id;
  public CreationTime $creation_time;
  public ActiveDirectoryBackupAttributes $directory_information;
  public BackupFailureDetails $failure_details;
  public FileSystem $file_system;
  public KmsKeyId $kms_key_id;
  public BackupLifecycle $lifecycle;
  public ProgressPercent $progress_percent;
  public ResourceARN $resource_arn;
  public Tags $tags;
  public BackupType $type;
}

class BackupFailureDetails {
  public ErrorMessage $message;
}

class BackupId {
}

class BackupIds {
}

class BackupInProgress {
  public ErrorMessage $message;
}

class BackupLifecycle {
}

class BackupNotFound {
  public ErrorMessage $message;
}

class BackupRestoring {
  public FileSystemId $file_system_id;
  public ErrorMessage $message;
}

class BackupType {
}

class Backups {
}

class BadRequest {
  public ErrorMessage $message;
}

class CancelDataRepositoryTaskRequest {
  public TaskId $task_id;
}

class CancelDataRepositoryTaskResponse {
  public DataRepositoryTaskLifecycle $lifecycle;
  public TaskId $task_id;
}

class ClientRequestToken {
}

class CompletionReport {
  public Flag $enabled;
  public ReportFormat $format;
  public ArchivePath $path;
  public ReportScope $scope;
}

class CreateBackupRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemId $file_system_id;
  public Tags $tags;
}

class CreateBackupResponse {
  public Backup $backup;
}

class CreateDataRepositoryTaskRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemId $file_system_id;
  public DataRepositoryTaskPaths $paths;
  public CompletionReport $report;
  public Tags $tags;
  public DataRepositoryTaskType $type;
}

class CreateDataRepositoryTaskResponse {
  public DataRepositoryTask $data_repository_task;
}

class CreateFileSystemFromBackupRequest {
  public BackupId $backup_id;
  public ClientRequestToken $client_request_token;
  public SecurityGroupIds $security_group_ids;
  public StorageType $storage_type;
  public SubnetIds $subnet_ids;
  public Tags $tags;
  public CreateFileSystemWindowsConfiguration $windows_configuration;
}

class CreateFileSystemFromBackupResponse {
  public FileSystem $file_system;
}

class CreateFileSystemLustreConfiguration {
  public LustreDeploymentType $deployment_type;
  public ArchivePath $export_path;
  public ArchivePath $import_path;
  public Megabytes $imported_file_chunk_size;
  public PerUnitStorageThroughput $per_unit_storage_throughput;
  public WeeklyTime $weekly_maintenance_start_time;
}

class CreateFileSystemRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemType $file_system_type;
  public KmsKeyId $kms_key_id;
  public CreateFileSystemLustreConfiguration $lustre_configuration;
  public SecurityGroupIds $security_group_ids;
  public StorageCapacity $storage_capacity;
  public StorageType $storage_type;
  public SubnetIds $subnet_ids;
  public Tags $tags;
  public CreateFileSystemWindowsConfiguration $windows_configuration;
}

class CreateFileSystemResponse {
  public FileSystem $file_system;
}

class CreateFileSystemWindowsConfiguration {
  public DirectoryId $active_directory_id;
  public AutomaticBackupRetentionDays $automatic_backup_retention_days;
  public Flag $copy_tags_to_backups;
  public DailyTime $daily_automatic_backup_start_time;
  public WindowsDeploymentType $deployment_type;
  public SubnetId $preferred_subnet_id;
  public SelfManagedActiveDirectoryConfiguration $self_managed_active_directory_configuration;
  public MegabytesPerSecond $throughput_capacity;
  public WeeklyTime $weekly_maintenance_start_time;
}

class CreationTime {
}

class DNSName {
}

class DailyTime {
}

class DataRepositoryConfiguration {
  public ArchivePath $export_path;
  public ArchivePath $import_path;
  public Megabytes $imported_file_chunk_size;
}

class DataRepositoryTask {
  public CreationTime $creation_time;
  public EndTime $end_time;
  public DataRepositoryTaskFailureDetails $failure_details;
  public FileSystemId $file_system_id;
  public DataRepositoryTaskLifecycle $lifecycle;
  public DataRepositoryTaskPaths $paths;
  public CompletionReport $report;
  public ResourceARN $resource_arn;
  public StartTime $start_time;
  public DataRepositoryTaskStatus $status;
  public Tags $tags;
  public TaskId $task_id;
  public DataRepositoryTaskType $type;
}

class DataRepositoryTaskEnded {
  public ErrorMessage $message;
}

class DataRepositoryTaskExecuting {
  public ErrorMessage $message;
}

class DataRepositoryTaskFailureDetails {
  public ErrorMessage $message;
}

class DataRepositoryTaskFilter {
  public DataRepositoryTaskFilterName $name;
  public DataRepositoryTaskFilterValues $values;
}

class DataRepositoryTaskFilterName {
}

class DataRepositoryTaskFilterValue {
}

class DataRepositoryTaskFilterValues {
}

class DataRepositoryTaskFilters {
}

class DataRepositoryTaskLifecycle {
}

class DataRepositoryTaskNotFound {
  public ErrorMessage $message;
}

class DataRepositoryTaskPath {
}

class DataRepositoryTaskPaths {
}

class DataRepositoryTaskStatus {
  public FailedCount $failed_count;
  public LastUpdatedTime $last_updated_time;
  public SucceededCount $succeeded_count;
  public TotalCount $total_count;
}

class DataRepositoryTaskType {
}

class DataRepositoryTasks {
}

class DeleteBackupRequest {
  public BackupId $backup_id;
  public ClientRequestToken $client_request_token;
}

class DeleteBackupResponse {
  public BackupId $backup_id;
  public BackupLifecycle $lifecycle;
}

class DeleteFileSystemRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemId $file_system_id;
  public DeleteFileSystemWindowsConfiguration $windows_configuration;
}

class DeleteFileSystemResponse {
  public FileSystemId $file_system_id;
  public FileSystemLifecycle $lifecycle;
  public DeleteFileSystemWindowsResponse $windows_response;
}

class DeleteFileSystemWindowsConfiguration {
  public Tags $final_backup_tags;
  public Flag $skip_final_backup;
}

class DeleteFileSystemWindowsResponse {
  public BackupId $final_backup_id;
  public Tags $final_backup_tags;
}

class DescribeBackupsRequest {
  public BackupIds $backup_ids;
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeBackupsResponse {
  public Backups $backups;
  public NextToken $next_token;
}

class DescribeDataRepositoryTasksRequest {
  public DataRepositoryTaskFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TaskIds $task_ids;
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

class DescribeFileSystemsResponse {
  public FileSystems $file_systems;
  public NextToken $next_token;
}

class DirectoryId {
}

class DirectoryPassword {
}

class DirectoryUserName {
}

class DnsIps {
}

class EndTime {
}

class ErrorMessage {
}

class FailedCount {
}

class FileSystem {
  public CreationTime $creation_time;
  public DNSName $dns_name;
  public FileSystemFailureDetails $failure_details;
  public FileSystemId $file_system_id;
  public FileSystemType $file_system_type;
  public KmsKeyId $kms_key_id;
  public FileSystemLifecycle $lifecycle;
  public LustreFileSystemConfiguration $lustre_configuration;
  public NetworkInterfaceIds $network_interface_ids;
  public AWSAccountId $owner_id;
  public ResourceARN $resource_arn;
  public StorageCapacity $storage_capacity;
  public StorageType $storage_type;
  public SubnetIds $subnet_ids;
  public Tags $tags;
  public VpcId $vpc_id;
  public WindowsFileSystemConfiguration $windows_configuration;
}

class FileSystemAdministratorsGroupName {
}

class FileSystemFailureDetails {
  public ErrorMessage $message;
}

class FileSystemId {
}

class FileSystemIds {
}

class FileSystemLifecycle {
}

class FileSystemMaintenanceOperation {
}

class FileSystemMaintenanceOperations {
}

class FileSystemNotFound {
  public ErrorMessage $message;
}

class FileSystemType {
}

class FileSystems {
}

class Filter {
  public FilterName $name;
  public FilterValues $values;
}

class FilterName {
}

class FilterValue {
}

class FilterValues {
}

class Filters {
}

class Flag {
}

class IncompatibleParameterError {
  public ErrorMessage $message;
  public Parameter $parameter;
}

class InternalServerError {
  public ErrorMessage $message;
}

class InvalidExportPath {
  public ErrorMessage $message;
}

class InvalidImportPath {
  public ErrorMessage $message;
}

class InvalidNetworkSettings {
  public SecurityGroupId $invalid_security_group_id;
  public SubnetId $invalid_subnet_id;
  public ErrorMessage $message;
}

class InvalidPerUnitStorageThroughput {
  public ErrorMessage $message;
}

class IpAddress {
}

class KmsKeyId {
}

class LastUpdatedTime {
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceARN $resource_arn;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public Tags $tags;
}

class LustreDeploymentType {
}

class LustreFileSystemConfiguration {
  public DataRepositoryConfiguration $data_repository_configuration;
  public LustreDeploymentType $deployment_type;
  public LustreFileSystemMountName $mount_name;
  public PerUnitStorageThroughput $per_unit_storage_throughput;
  public WeeklyTime $weekly_maintenance_start_time;
}

class LustreFileSystemMountName {
}

class MaxResults {
}

class Megabytes {
}

class MegabytesPerSecond {
}

class MissingFileSystemConfiguration {
  public ErrorMessage $message;
}

class NetworkInterfaceId {
}

class NetworkInterfaceIds {
}

class NextToken {
}

class NotServiceResourceError {
  public ErrorMessage $message;
  public ResourceARN $resource_arn;
}

class OrganizationalUnitDistinguishedName {
}

class Parameter {
}

class PerUnitStorageThroughput {
}

class ProgressPercent {
}

class ReportFormat {
}

class ReportScope {
}

class ResourceARN {
}

class ResourceDoesNotSupportTagging {
  public ErrorMessage $message;
  public ResourceARN $resource_arn;
}

class ResourceNotFound {
  public ErrorMessage $message;
  public ResourceARN $resource_arn;
}

class SecurityGroupId {
}

class SecurityGroupIds {
}

class SelfManagedActiveDirectoryAttributes {
  public DnsIps $dns_ips;
  public ActiveDirectoryFullyQualifiedName $domain_name;
  public FileSystemAdministratorsGroupName $file_system_administrators_group;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;
  public DirectoryUserName $user_name;
}

class SelfManagedActiveDirectoryConfiguration {
  public DnsIps $dns_ips;
  public ActiveDirectoryFullyQualifiedName $domain_name;
  public FileSystemAdministratorsGroupName $file_system_administrators_group;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;
  public DirectoryPassword $password;
  public DirectoryUserName $user_name;
}

class SelfManagedActiveDirectoryConfigurationUpdates {
  public DnsIps $dns_ips;
  public DirectoryPassword $password;
  public DirectoryUserName $user_name;
}

class ServiceLimit {
}

class ServiceLimitExceeded {
  public ServiceLimit $limit;
  public ErrorMessage $message;
}

class StartTime {
}

class StorageCapacity {
}

class StorageType {
}

class SubnetId {
}

class SubnetIds {
}

class SucceededCount {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagResourceRequest {
  public ResourceARN $resource_arn;
  public Tags $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Tags {
}

class TaskId {
}

class TaskIds {
}

class TotalCount {
}

class UnsupportedOperation {
  public ErrorMessage $message;
}

class UntagResourceRequest {
  public ResourceARN $resource_arn;
  public TagKeys $tag_keys;
}

class UntagResourceResponse {
}

class UpdateFileSystemLustreConfiguration {
  public WeeklyTime $weekly_maintenance_start_time;
}

class UpdateFileSystemRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemId $file_system_id;
  public UpdateFileSystemLustreConfiguration $lustre_configuration;
  public UpdateFileSystemWindowsConfiguration $windows_configuration;
}

class UpdateFileSystemResponse {
  public FileSystem $file_system;
}

class UpdateFileSystemWindowsConfiguration {
  public AutomaticBackupRetentionDays $automatic_backup_retention_days;
  public DailyTime $daily_automatic_backup_start_time;
  public SelfManagedActiveDirectoryConfigurationUpdates $self_managed_active_directory_configuration;
  public WeeklyTime $weekly_maintenance_start_time;
}

class VpcId {
}

class WeeklyTime {
}

class WindowsDeploymentType {
}

class WindowsFileSystemConfiguration {
  public DirectoryId $active_directory_id;
  public AutomaticBackupRetentionDays $automatic_backup_retention_days;
  public Flag $copy_tags_to_backups;
  public DailyTime $daily_automatic_backup_start_time;
  public WindowsDeploymentType $deployment_type;
  public FileSystemMaintenanceOperations $maintenance_operations_in_progress;
  public IpAddress $preferred_file_server_ip;
  public SubnetId $preferred_subnet_id;
  public DNSName $remote_administration_endpoint;
  public SelfManagedActiveDirectoryAttributes $self_managed_active_directory_configuration;
  public MegabytesPerSecond $throughput_capacity;
  public WeeklyTime $weekly_maintenance_start_time;
}

