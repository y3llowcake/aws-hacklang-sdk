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

type AWSAccountId = string;

class ActiveDirectoryBackupAttributes {
  public DirectoryId $active_directory_id;
  public ActiveDirectoryFullyQualifiedName $domain_name;

  public function __construct(shape(
  ?'active_directory_id' => DirectoryId,
  ?'domain_name' => ActiveDirectoryFullyQualifiedName,
  ) $s = shape()) {
    $this->active_directory_id = $active_directory_id ?? "";
    $this->domain_name = $domain_name ?? "";
  }
}

class ActiveDirectoryError {
  public DirectoryId $active_directory_id;
  public ErrorMessage $message;
  public ActiveDirectoryErrorType $type;

  public function __construct(shape(
  ?'active_directory_id' => DirectoryId,
  ?'message' => ErrorMessage,
  ?'type' => ActiveDirectoryErrorType,
  ) $s = shape()) {
    $this->active_directory_id = $active_directory_id ?? "";
    $this->message = $message ?? "";
    $this->type = $type ?? "";
  }
}

type ActiveDirectoryErrorType = string;

type ActiveDirectoryFullyQualifiedName = string;

type ArchivePath = string;

type AutomaticBackupRetentionDays = int;

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

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ?'creation_time' => CreationTime,
  ?'directory_information' => ActiveDirectoryBackupAttributes,
  ?'failure_details' => BackupFailureDetails,
  ?'file_system' => FileSystem,
  ?'kms_key_id' => KmsKeyId,
  ?'lifecycle' => BackupLifecycle,
  ?'progress_percent' => ProgressPercent,
  ?'resource_arn' => ResourceARN,
  ?'tags' => Tags,
  ?'type' => BackupType,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->directory_information = $directory_information ?? null;
    $this->failure_details = $failure_details ?? null;
    $this->file_system = $file_system ?? null;
    $this->kms_key_id = $kms_key_id ?? "";
    $this->lifecycle = $lifecycle ?? "";
    $this->progress_percent = $progress_percent ?? 0;
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
  }
}

class BackupFailureDetails {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type BackupId = string;

type BackupIds = vec<BackupId>;

class BackupInProgress {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type BackupLifecycle = string;

class BackupNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class BackupRestoring {
  public FileSystemId $file_system_id;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->message = $message ?? "";
  }
}

type BackupType = string;

type Backups = vec<Backup>;

class BadRequest {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CancelDataRepositoryTaskRequest {
  public TaskId $task_id;

  public function __construct(shape(
  ?'task_id' => TaskId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? "";
  }
}

class CancelDataRepositoryTaskResponse {
  public DataRepositoryTaskLifecycle $lifecycle;
  public TaskId $task_id;

  public function __construct(shape(
  ?'lifecycle' => DataRepositoryTaskLifecycle,
  ?'task_id' => TaskId,
  ) $s = shape()) {
    $this->lifecycle = $lifecycle ?? "";
    $this->task_id = $task_id ?? "";
  }
}

type ClientRequestToken = string;

class CompletionReport {
  public Flag $enabled;
  public ReportFormat $format;
  public ArchivePath $path;
  public ReportScope $scope;

  public function __construct(shape(
  ?'enabled' => Flag,
  ?'format' => ReportFormat,
  ?'path' => ArchivePath,
  ?'scope' => ReportScope,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
    $this->format = $format ?? "";
    $this->path = $path ?? "";
    $this->scope = $scope ?? "";
  }
}

class CreateBackupRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemId $file_system_id;
  public Tags $tags;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'file_system_id' => FileSystemId,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->tags = $tags ?? [];
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

class CreateDataRepositoryTaskRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemId $file_system_id;
  public DataRepositoryTaskPaths $paths;
  public CompletionReport $report;
  public Tags $tags;
  public DataRepositoryTaskType $type;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'file_system_id' => FileSystemId,
  ?'paths' => DataRepositoryTaskPaths,
  ?'report' => CompletionReport,
  ?'tags' => Tags,
  ?'type' => DataRepositoryTaskType,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->paths = $paths ?? [];
    $this->report = $report ?? null;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
  }
}

class CreateDataRepositoryTaskResponse {
  public DataRepositoryTask $data_repository_task;

  public function __construct(shape(
  ?'data_repository_task' => DataRepositoryTask,
  ) $s = shape()) {
    $this->data_repository_task = $data_repository_task ?? null;
  }
}

class CreateFileSystemFromBackupRequest {
  public BackupId $backup_id;
  public ClientRequestToken $client_request_token;
  public SecurityGroupIds $security_group_ids;
  public StorageType $storage_type;
  public SubnetIds $subnet_ids;
  public Tags $tags;
  public CreateFileSystemWindowsConfiguration $windows_configuration;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ?'client_request_token' => ClientRequestToken,
  ?'security_group_ids' => SecurityGroupIds,
  ?'storage_type' => StorageType,
  ?'subnet_ids' => SubnetIds,
  ?'tags' => Tags,
  ?'windows_configuration' => CreateFileSystemWindowsConfiguration,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
    $this->client_request_token = $client_request_token ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->storage_type = $storage_type ?? "";
    $this->subnet_ids = $subnet_ids ?? [];
    $this->tags = $tags ?? [];
    $this->windows_configuration = $windows_configuration ?? null;
  }
}

class CreateFileSystemFromBackupResponse {
  public FileSystem $file_system;

  public function __construct(shape(
  ?'file_system' => FileSystem,
  ) $s = shape()) {
    $this->file_system = $file_system ?? null;
  }
}

class CreateFileSystemLustreConfiguration {
  public LustreDeploymentType $deployment_type;
  public ArchivePath $export_path;
  public ArchivePath $import_path;
  public Megabytes $imported_file_chunk_size;
  public PerUnitStorageThroughput $per_unit_storage_throughput;
  public WeeklyTime $weekly_maintenance_start_time;

  public function __construct(shape(
  ?'deployment_type' => LustreDeploymentType,
  ?'export_path' => ArchivePath,
  ?'import_path' => ArchivePath,
  ?'imported_file_chunk_size' => Megabytes,
  ?'per_unit_storage_throughput' => PerUnitStorageThroughput,
  ?'weekly_maintenance_start_time' => WeeklyTime,
  ) $s = shape()) {
    $this->deployment_type = $deployment_type ?? "";
    $this->export_path = $export_path ?? "";
    $this->import_path = $import_path ?? "";
    $this->imported_file_chunk_size = $imported_file_chunk_size ?? 0;
    $this->per_unit_storage_throughput = $per_unit_storage_throughput ?? 0;
    $this->weekly_maintenance_start_time = $weekly_maintenance_start_time ?? "";
  }
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

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'file_system_type' => FileSystemType,
  ?'kms_key_id' => KmsKeyId,
  ?'lustre_configuration' => CreateFileSystemLustreConfiguration,
  ?'security_group_ids' => SecurityGroupIds,
  ?'storage_capacity' => StorageCapacity,
  ?'storage_type' => StorageType,
  ?'subnet_ids' => SubnetIds,
  ?'tags' => Tags,
  ?'windows_configuration' => CreateFileSystemWindowsConfiguration,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->file_system_type = $file_system_type ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->lustre_configuration = $lustre_configuration ?? null;
    $this->security_group_ids = $security_group_ids ?? [];
    $this->storage_capacity = $storage_capacity ?? 0;
    $this->storage_type = $storage_type ?? "";
    $this->subnet_ids = $subnet_ids ?? [];
    $this->tags = $tags ?? [];
    $this->windows_configuration = $windows_configuration ?? null;
  }
}

class CreateFileSystemResponse {
  public FileSystem $file_system;

  public function __construct(shape(
  ?'file_system' => FileSystem,
  ) $s = shape()) {
    $this->file_system = $file_system ?? null;
  }
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

  public function __construct(shape(
  ?'active_directory_id' => DirectoryId,
  ?'automatic_backup_retention_days' => AutomaticBackupRetentionDays,
  ?'copy_tags_to_backups' => Flag,
  ?'daily_automatic_backup_start_time' => DailyTime,
  ?'deployment_type' => WindowsDeploymentType,
  ?'preferred_subnet_id' => SubnetId,
  ?'self_managed_active_directory_configuration' => SelfManagedActiveDirectoryConfiguration,
  ?'throughput_capacity' => MegabytesPerSecond,
  ?'weekly_maintenance_start_time' => WeeklyTime,
  ) $s = shape()) {
    $this->active_directory_id = $active_directory_id ?? "";
    $this->automatic_backup_retention_days = $automatic_backup_retention_days ?? 0;
    $this->copy_tags_to_backups = $copy_tags_to_backups ?? false;
    $this->daily_automatic_backup_start_time = $daily_automatic_backup_start_time ?? "";
    $this->deployment_type = $deployment_type ?? "";
    $this->preferred_subnet_id = $preferred_subnet_id ?? "";
    $this->self_managed_active_directory_configuration = $self_managed_active_directory_configuration ?? null;
    $this->throughput_capacity = $throughput_capacity ?? 0;
    $this->weekly_maintenance_start_time = $weekly_maintenance_start_time ?? "";
  }
}

type CreationTime = int;

type DNSName = string;

type DailyTime = string;

class DataRepositoryConfiguration {
  public ArchivePath $export_path;
  public ArchivePath $import_path;
  public Megabytes $imported_file_chunk_size;

  public function __construct(shape(
  ?'export_path' => ArchivePath,
  ?'import_path' => ArchivePath,
  ?'imported_file_chunk_size' => Megabytes,
  ) $s = shape()) {
    $this->export_path = $export_path ?? "";
    $this->import_path = $import_path ?? "";
    $this->imported_file_chunk_size = $imported_file_chunk_size ?? 0;
  }
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

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'end_time' => EndTime,
  ?'failure_details' => DataRepositoryTaskFailureDetails,
  ?'file_system_id' => FileSystemId,
  ?'lifecycle' => DataRepositoryTaskLifecycle,
  ?'paths' => DataRepositoryTaskPaths,
  ?'report' => CompletionReport,
  ?'resource_arn' => ResourceARN,
  ?'start_time' => StartTime,
  ?'status' => DataRepositoryTaskStatus,
  ?'tags' => Tags,
  ?'task_id' => TaskId,
  ?'type' => DataRepositoryTaskType,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->end_time = $end_time ?? 0;
    $this->failure_details = $failure_details ?? null;
    $this->file_system_id = $file_system_id ?? "";
    $this->lifecycle = $lifecycle ?? "";
    $this->paths = $paths ?? [];
    $this->report = $report ?? null;
    $this->resource_arn = $resource_arn ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? null;
    $this->tags = $tags ?? [];
    $this->task_id = $task_id ?? "";
    $this->type = $type ?? "";
  }
}

class DataRepositoryTaskEnded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DataRepositoryTaskExecuting {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DataRepositoryTaskFailureDetails {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DataRepositoryTaskFilter {
  public DataRepositoryTaskFilterName $name;
  public DataRepositoryTaskFilterValues $values;

  public function __construct(shape(
  ?'name' => DataRepositoryTaskFilterName,
  ?'values' => DataRepositoryTaskFilterValues,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type DataRepositoryTaskFilterName = string;

type DataRepositoryTaskFilterValue = string;

type DataRepositoryTaskFilterValues = vec<DataRepositoryTaskFilterValue>;

type DataRepositoryTaskFilters = vec<DataRepositoryTaskFilter>;

type DataRepositoryTaskLifecycle = string;

class DataRepositoryTaskNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DataRepositoryTaskPath = string;

type DataRepositoryTaskPaths = vec<DataRepositoryTaskPath>;

class DataRepositoryTaskStatus {
  public FailedCount $failed_count;
  public LastUpdatedTime $last_updated_time;
  public SucceededCount $succeeded_count;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'failed_count' => FailedCount,
  ?'last_updated_time' => LastUpdatedTime,
  ?'succeeded_count' => SucceededCount,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->failed_count = $failed_count ?? 0;
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->succeeded_count = $succeeded_count ?? 0;
    $this->total_count = $total_count ?? 0;
  }
}

type DataRepositoryTaskType = string;

type DataRepositoryTasks = vec<DataRepositoryTask>;

class DeleteBackupRequest {
  public BackupId $backup_id;
  public ClientRequestToken $client_request_token;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ?'client_request_token' => ClientRequestToken,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
    $this->client_request_token = $client_request_token ?? "";
  }
}

class DeleteBackupResponse {
  public BackupId $backup_id;
  public BackupLifecycle $lifecycle;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ?'lifecycle' => BackupLifecycle,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
    $this->lifecycle = $lifecycle ?? "";
  }
}

class DeleteFileSystemRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemId $file_system_id;
  public DeleteFileSystemWindowsConfiguration $windows_configuration;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'file_system_id' => FileSystemId,
  ?'windows_configuration' => DeleteFileSystemWindowsConfiguration,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->windows_configuration = $windows_configuration ?? null;
  }
}

class DeleteFileSystemResponse {
  public FileSystemId $file_system_id;
  public FileSystemLifecycle $lifecycle;
  public DeleteFileSystemWindowsResponse $windows_response;

  public function __construct(shape(
  ?'file_system_id' => FileSystemId,
  ?'lifecycle' => FileSystemLifecycle,
  ?'windows_response' => DeleteFileSystemWindowsResponse,
  ) $s = shape()) {
    $this->file_system_id = $file_system_id ?? "";
    $this->lifecycle = $lifecycle ?? "";
    $this->windows_response = $windows_response ?? null;
  }
}

class DeleteFileSystemWindowsConfiguration {
  public Tags $final_backup_tags;
  public Flag $skip_final_backup;

  public function __construct(shape(
  ?'final_backup_tags' => Tags,
  ?'skip_final_backup' => Flag,
  ) $s = shape()) {
    $this->final_backup_tags = $final_backup_tags ?? [];
    $this->skip_final_backup = $skip_final_backup ?? false;
  }
}

class DeleteFileSystemWindowsResponse {
  public BackupId $final_backup_id;
  public Tags $final_backup_tags;

  public function __construct(shape(
  ?'final_backup_id' => BackupId,
  ?'final_backup_tags' => Tags,
  ) $s = shape()) {
    $this->final_backup_id = $final_backup_id ?? "";
    $this->final_backup_tags = $final_backup_tags ?? [];
  }
}

class DescribeBackupsRequest {
  public BackupIds $backup_ids;
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'backup_ids' => BackupIds,
  ?'filters' => Filters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->backup_ids = $backup_ids ?? [];
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeBackupsResponse {
  public Backups $backups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'backups' => Backups,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->backups = $backups ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeDataRepositoryTasksRequest {
  public DataRepositoryTaskFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public TaskIds $task_ids;

  public function __construct(shape(
  ?'filters' => DataRepositoryTaskFilters,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'task_ids' => TaskIds,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->task_ids = $task_ids ?? [];
  }
}

class DescribeDataRepositoryTasksResponse {
  public DataRepositoryTasks $data_repository_tasks;
  public NextToken $next_token;

  public function __construct(shape(
  ?'data_repository_tasks' => DataRepositoryTasks,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->data_repository_tasks = $data_repository_tasks ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeFileSystemsRequest {
  public FileSystemIds $file_system_ids;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'file_system_ids' => FileSystemIds,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->file_system_ids = $file_system_ids ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeFileSystemsResponse {
  public FileSystems $file_systems;
  public NextToken $next_token;

  public function __construct(shape(
  ?'file_systems' => FileSystems,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->file_systems = $file_systems ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type DirectoryId = string;

type DirectoryPassword = string;

type DirectoryUserName = string;

type DnsIps = vec<IpAddress>;

type EndTime = int;

type ErrorMessage = string;

type FailedCount = int;

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

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'dns_name' => DNSName,
  ?'failure_details' => FileSystemFailureDetails,
  ?'file_system_id' => FileSystemId,
  ?'file_system_type' => FileSystemType,
  ?'kms_key_id' => KmsKeyId,
  ?'lifecycle' => FileSystemLifecycle,
  ?'lustre_configuration' => LustreFileSystemConfiguration,
  ?'network_interface_ids' => NetworkInterfaceIds,
  ?'owner_id' => AWSAccountId,
  ?'resource_arn' => ResourceARN,
  ?'storage_capacity' => StorageCapacity,
  ?'storage_type' => StorageType,
  ?'subnet_ids' => SubnetIds,
  ?'tags' => Tags,
  ?'vpc_id' => VpcId,
  ?'windows_configuration' => WindowsFileSystemConfiguration,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->dns_name = $dns_name ?? "";
    $this->failure_details = $failure_details ?? null;
    $this->file_system_id = $file_system_id ?? "";
    $this->file_system_type = $file_system_type ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->lifecycle = $lifecycle ?? "";
    $this->lustre_configuration = $lustre_configuration ?? null;
    $this->network_interface_ids = $network_interface_ids ?? [];
    $this->owner_id = $owner_id ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->storage_capacity = $storage_capacity ?? 0;
    $this->storage_type = $storage_type ?? "";
    $this->subnet_ids = $subnet_ids ?? [];
    $this->tags = $tags ?? [];
    $this->vpc_id = $vpc_id ?? "";
    $this->windows_configuration = $windows_configuration ?? null;
  }
}

type FileSystemAdministratorsGroupName = string;

class FileSystemFailureDetails {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type FileSystemId = string;

type FileSystemIds = vec<FileSystemId>;

type FileSystemLifecycle = string;

type FileSystemMaintenanceOperation = string;

type FileSystemMaintenanceOperations = vec<FileSystemMaintenanceOperation>;

class FileSystemNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type FileSystemType = string;

type FileSystems = vec<FileSystem>;

class Filter {
  public FilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'name' => FilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type FilterName = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

type Filters = vec<Filter>;

type Flag = bool;

class IncompatibleParameterError {
  public ErrorMessage $message;
  public Parameter $parameter;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'parameter' => Parameter,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->parameter = $parameter ?? "";
  }
}

class InternalServerError {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidExportPath {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidImportPath {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNetworkSettings {
  public SecurityGroupId $invalid_security_group_id;
  public SubnetId $invalid_subnet_id;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'invalid_security_group_id' => SecurityGroupId,
  ?'invalid_subnet_id' => SubnetId,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->invalid_security_group_id = $invalid_security_group_id ?? "";
    $this->invalid_subnet_id = $invalid_subnet_id ?? "";
    $this->message = $message ?? "";
  }
}

class InvalidPerUnitStorageThroughput {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type IpAddress = string;

type KmsKeyId = string;

type LastUpdatedTime = int;

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceARN $resource_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource_arn' => ResourceARN,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
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

type LustreDeploymentType = string;

class LustreFileSystemConfiguration {
  public DataRepositoryConfiguration $data_repository_configuration;
  public LustreDeploymentType $deployment_type;
  public LustreFileSystemMountName $mount_name;
  public PerUnitStorageThroughput $per_unit_storage_throughput;
  public WeeklyTime $weekly_maintenance_start_time;

  public function __construct(shape(
  ?'data_repository_configuration' => DataRepositoryConfiguration,
  ?'deployment_type' => LustreDeploymentType,
  ?'mount_name' => LustreFileSystemMountName,
  ?'per_unit_storage_throughput' => PerUnitStorageThroughput,
  ?'weekly_maintenance_start_time' => WeeklyTime,
  ) $s = shape()) {
    $this->data_repository_configuration = $data_repository_configuration ?? null;
    $this->deployment_type = $deployment_type ?? "";
    $this->mount_name = $mount_name ?? "";
    $this->per_unit_storage_throughput = $per_unit_storage_throughput ?? 0;
    $this->weekly_maintenance_start_time = $weekly_maintenance_start_time ?? "";
  }
}

type LustreFileSystemMountName = string;

type MaxResults = int;

type Megabytes = int;

type MegabytesPerSecond = int;

class MissingFileSystemConfiguration {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type NetworkInterfaceId = string;

type NetworkInterfaceIds = vec<NetworkInterfaceId>;

type NextToken = string;

class NotServiceResourceError {
  public ErrorMessage $message;
  public ResourceARN $resource_arn;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_arn' => ResourceARN,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

type OrganizationalUnitDistinguishedName = string;

type Parameter = string;

type PerUnitStorageThroughput = int;

type ProgressPercent = int;

type ReportFormat = string;

type ReportScope = string;

type ResourceARN = string;

class ResourceDoesNotSupportTagging {
  public ErrorMessage $message;
  public ResourceARN $resource_arn;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_arn' => ResourceARN,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ResourceNotFound {
  public ErrorMessage $message;
  public ResourceARN $resource_arn;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_arn' => ResourceARN,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

type SecurityGroupId = string;

type SecurityGroupIds = vec<SecurityGroupId>;

class SelfManagedActiveDirectoryAttributes {
  public DnsIps $dns_ips;
  public ActiveDirectoryFullyQualifiedName $domain_name;
  public FileSystemAdministratorsGroupName $file_system_administrators_group;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;
  public DirectoryUserName $user_name;

  public function __construct(shape(
  ?'dns_ips' => DnsIps,
  ?'domain_name' => ActiveDirectoryFullyQualifiedName,
  ?'file_system_administrators_group' => FileSystemAdministratorsGroupName,
  ?'organizational_unit_distinguished_name' => OrganizationalUnitDistinguishedName,
  ?'user_name' => DirectoryUserName,
  ) $s = shape()) {
    $this->dns_ips = $dns_ips ?? [];
    $this->domain_name = $domain_name ?? "";
    $this->file_system_administrators_group = $file_system_administrators_group ?? "";
    $this->organizational_unit_distinguished_name = $organizational_unit_distinguished_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class SelfManagedActiveDirectoryConfiguration {
  public DnsIps $dns_ips;
  public ActiveDirectoryFullyQualifiedName $domain_name;
  public FileSystemAdministratorsGroupName $file_system_administrators_group;
  public OrganizationalUnitDistinguishedName $organizational_unit_distinguished_name;
  public DirectoryPassword $password;
  public DirectoryUserName $user_name;

  public function __construct(shape(
  ?'dns_ips' => DnsIps,
  ?'domain_name' => ActiveDirectoryFullyQualifiedName,
  ?'file_system_administrators_group' => FileSystemAdministratorsGroupName,
  ?'organizational_unit_distinguished_name' => OrganizationalUnitDistinguishedName,
  ?'password' => DirectoryPassword,
  ?'user_name' => DirectoryUserName,
  ) $s = shape()) {
    $this->dns_ips = $dns_ips ?? [];
    $this->domain_name = $domain_name ?? "";
    $this->file_system_administrators_group = $file_system_administrators_group ?? "";
    $this->organizational_unit_distinguished_name = $organizational_unit_distinguished_name ?? "";
    $this->password = $password ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class SelfManagedActiveDirectoryConfigurationUpdates {
  public DnsIps $dns_ips;
  public DirectoryPassword $password;
  public DirectoryUserName $user_name;

  public function __construct(shape(
  ?'dns_ips' => DnsIps,
  ?'password' => DirectoryPassword,
  ?'user_name' => DirectoryUserName,
  ) $s = shape()) {
    $this->dns_ips = $dns_ips ?? [];
    $this->password = $password ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type ServiceLimit = string;

class ServiceLimitExceeded {
  public ServiceLimit $limit;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'limit' => ServiceLimit,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->limit = $limit ?? "";
    $this->message = $message ?? "";
  }
}

type StartTime = int;

type StorageCapacity = int;

type StorageType = string;

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

type SucceededCount = int;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeys = vec<TagKey>;

class TagResourceRequest {
  public ResourceARN $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Tags = vec<Tag>;

type TaskId = string;

type TaskIds = vec<TaskId>;

type TotalCount = int;

class UnsupportedOperation {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagResourceRequest {
  public ResourceARN $resource_arn;
  public TagKeys $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ?'tag_keys' => TagKeys,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateFileSystemLustreConfiguration {
  public WeeklyTime $weekly_maintenance_start_time;

  public function __construct(shape(
  ?'weekly_maintenance_start_time' => WeeklyTime,
  ) $s = shape()) {
    $this->weekly_maintenance_start_time = $weekly_maintenance_start_time ?? "";
  }
}

class UpdateFileSystemRequest {
  public ClientRequestToken $client_request_token;
  public FileSystemId $file_system_id;
  public UpdateFileSystemLustreConfiguration $lustre_configuration;
  public UpdateFileSystemWindowsConfiguration $windows_configuration;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'file_system_id' => FileSystemId,
  ?'lustre_configuration' => UpdateFileSystemLustreConfiguration,
  ?'windows_configuration' => UpdateFileSystemWindowsConfiguration,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->file_system_id = $file_system_id ?? "";
    $this->lustre_configuration = $lustre_configuration ?? null;
    $this->windows_configuration = $windows_configuration ?? null;
  }
}

class UpdateFileSystemResponse {
  public FileSystem $file_system;

  public function __construct(shape(
  ?'file_system' => FileSystem,
  ) $s = shape()) {
    $this->file_system = $file_system ?? null;
  }
}

class UpdateFileSystemWindowsConfiguration {
  public AutomaticBackupRetentionDays $automatic_backup_retention_days;
  public DailyTime $daily_automatic_backup_start_time;
  public SelfManagedActiveDirectoryConfigurationUpdates $self_managed_active_directory_configuration;
  public WeeklyTime $weekly_maintenance_start_time;

  public function __construct(shape(
  ?'automatic_backup_retention_days' => AutomaticBackupRetentionDays,
  ?'daily_automatic_backup_start_time' => DailyTime,
  ?'self_managed_active_directory_configuration' => SelfManagedActiveDirectoryConfigurationUpdates,
  ?'weekly_maintenance_start_time' => WeeklyTime,
  ) $s = shape()) {
    $this->automatic_backup_retention_days = $automatic_backup_retention_days ?? 0;
    $this->daily_automatic_backup_start_time = $daily_automatic_backup_start_time ?? "";
    $this->self_managed_active_directory_configuration = $self_managed_active_directory_configuration ?? null;
    $this->weekly_maintenance_start_time = $weekly_maintenance_start_time ?? "";
  }
}

type VpcId = string;

type WeeklyTime = string;

type WindowsDeploymentType = string;

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

  public function __construct(shape(
  ?'active_directory_id' => DirectoryId,
  ?'automatic_backup_retention_days' => AutomaticBackupRetentionDays,
  ?'copy_tags_to_backups' => Flag,
  ?'daily_automatic_backup_start_time' => DailyTime,
  ?'deployment_type' => WindowsDeploymentType,
  ?'maintenance_operations_in_progress' => FileSystemMaintenanceOperations,
  ?'preferred_file_server_ip' => IpAddress,
  ?'preferred_subnet_id' => SubnetId,
  ?'remote_administration_endpoint' => DNSName,
  ?'self_managed_active_directory_configuration' => SelfManagedActiveDirectoryAttributes,
  ?'throughput_capacity' => MegabytesPerSecond,
  ?'weekly_maintenance_start_time' => WeeklyTime,
  ) $s = shape()) {
    $this->active_directory_id = $active_directory_id ?? "";
    $this->automatic_backup_retention_days = $automatic_backup_retention_days ?? 0;
    $this->copy_tags_to_backups = $copy_tags_to_backups ?? false;
    $this->daily_automatic_backup_start_time = $daily_automatic_backup_start_time ?? "";
    $this->deployment_type = $deployment_type ?? "";
    $this->maintenance_operations_in_progress = $maintenance_operations_in_progress ?? [];
    $this->preferred_file_server_ip = $preferred_file_server_ip ?? "";
    $this->preferred_subnet_id = $preferred_subnet_id ?? "";
    $this->remote_administration_endpoint = $remote_administration_endpoint ?? "";
    $this->self_managed_active_directory_configuration = $self_managed_active_directory_configuration ?? null;
    $this->throughput_capacity = $throughput_capacity ?? 0;
    $this->weekly_maintenance_start_time = $weekly_maintenance_start_time ?? "";
  }
}

