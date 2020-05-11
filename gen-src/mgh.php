<?hh // strict
namespace slack\aws\mgh;

interface Migration Hub {
  public function AssociateCreatedArtifact(AssociateCreatedArtifactRequest): Awaitable<Errors\Result<AssociateCreatedArtifactResult>>;
  public function AssociateDiscoveredResource(AssociateDiscoveredResourceRequest): Awaitable<Errors\Result<AssociateDiscoveredResourceResult>>;
  public function CreateProgressUpdateStream(CreateProgressUpdateStreamRequest): Awaitable<Errors\Result<CreateProgressUpdateStreamResult>>;
  public function DeleteProgressUpdateStream(DeleteProgressUpdateStreamRequest): Awaitable<Errors\Result<DeleteProgressUpdateStreamResult>>;
  public function DescribeApplicationState(DescribeApplicationStateRequest): Awaitable<Errors\Result<DescribeApplicationStateResult>>;
  public function DescribeMigrationTask(DescribeMigrationTaskRequest): Awaitable<Errors\Result<DescribeMigrationTaskResult>>;
  public function DisassociateCreatedArtifact(DisassociateCreatedArtifactRequest): Awaitable<Errors\Result<DisassociateCreatedArtifactResult>>;
  public function DisassociateDiscoveredResource(DisassociateDiscoveredResourceRequest): Awaitable<Errors\Result<DisassociateDiscoveredResourceResult>>;
  public function ImportMigrationTask(ImportMigrationTaskRequest): Awaitable<Errors\Result<ImportMigrationTaskResult>>;
  public function ListApplicationStates(ListApplicationStatesRequest): Awaitable<Errors\Result<ListApplicationStatesResult>>;
  public function ListCreatedArtifacts(ListCreatedArtifactsRequest): Awaitable<Errors\Result<ListCreatedArtifactsResult>>;
  public function ListDiscoveredResources(ListDiscoveredResourcesRequest): Awaitable<Errors\Result<ListDiscoveredResourcesResult>>;
  public function ListMigrationTasks(ListMigrationTasksRequest): Awaitable<Errors\Result<ListMigrationTasksResult>>;
  public function ListProgressUpdateStreams(ListProgressUpdateStreamsRequest): Awaitable<Errors\Result<ListProgressUpdateStreamsResult>>;
  public function NotifyApplicationState(NotifyApplicationStateRequest): Awaitable<Errors\Result<NotifyApplicationStateResult>>;
  public function NotifyMigrationTaskState(NotifyMigrationTaskStateRequest): Awaitable<Errors\Result<NotifyMigrationTaskStateResult>>;
  public function PutResourceAttributes(PutResourceAttributesRequest): Awaitable<Errors\Result<PutResourceAttributesResult>>;
}

class AccessDeniedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ApplicationId = string;

type ApplicationIds = vec<ApplicationId>;

class ApplicationState {
  public ApplicationId $application_id;
  public ApplicationStatus $application_status;
  public UpdateDateTime $last_updated_time;

  public function __construct(shape(
  ?'application_id' => ApplicationId,
  ?'application_status' => ApplicationStatus,
  ?'last_updated_time' => UpdateDateTime,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->application_status = $application_status ?? "";
    $this->last_updated_time = $last_updated_time ?? 0;
  }
}

type ApplicationStateList = vec<ApplicationState>;

type ApplicationStatus = string;

class AssociateCreatedArtifactRequest {
  public CreatedArtifact $created_artifact;
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
  ?'created_artifact' => CreatedArtifact,
  ?'dry_run' => DryRun,
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_update_stream' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->created_artifact = $created_artifact ?? null;
    $this->dry_run = $dry_run ?? false;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
  }
}

class AssociateCreatedArtifactResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateDiscoveredResourceRequest {
  public DiscoveredResource $discovered_resource;
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
  ?'discovered_resource' => DiscoveredResource,
  ?'dry_run' => DryRun,
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_update_stream' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->discovered_resource = $discovered_resource ?? null;
    $this->dry_run = $dry_run ?? false;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
  }
}

class AssociateDiscoveredResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ConfigurationId = string;

class CreateProgressUpdateStreamRequest {
  public DryRun $dry_run;
  public ProgressUpdateStream $progress_update_stream_name;

  public function __construct(shape(
  ?'dry_run' => DryRun,
  ?'progress_update_stream_name' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->dry_run = $dry_run ?? false;
    $this->progress_update_stream_name = $progress_update_stream_name ?? "";
  }
}

class CreateProgressUpdateStreamResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreatedArtifact {
  public CreatedArtifactDescription $description;
  public CreatedArtifactName $name;

  public function __construct(shape(
  ?'description' => CreatedArtifactDescription,
  ?'name' => CreatedArtifactName,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
  }
}

type CreatedArtifactDescription = string;

type CreatedArtifactList = vec<CreatedArtifact>;

type CreatedArtifactName = string;

class DeleteProgressUpdateStreamRequest {
  public DryRun $dry_run;
  public ProgressUpdateStream $progress_update_stream_name;

  public function __construct(shape(
  ?'dry_run' => DryRun,
  ?'progress_update_stream_name' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->dry_run = $dry_run ?? false;
    $this->progress_update_stream_name = $progress_update_stream_name ?? "";
  }
}

class DeleteProgressUpdateStreamResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeApplicationStateRequest {
  public ApplicationId $application_id;

  public function __construct(shape(
  ?'application_id' => ApplicationId,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
  }
}

class DescribeApplicationStateResult {
  public ApplicationStatus $application_status;
  public UpdateDateTime $last_updated_time;

  public function __construct(shape(
  ?'application_status' => ApplicationStatus,
  ?'last_updated_time' => UpdateDateTime,
  ) $s = shape()) {
    $this->application_status = $application_status ?? "";
    $this->last_updated_time = $last_updated_time ?? 0;
  }
}

class DescribeMigrationTaskRequest {
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_update_stream' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
  }
}

class DescribeMigrationTaskResult {
  public MigrationTask $migration_task;

  public function __construct(shape(
  ?'migration_task' => MigrationTask,
  ) $s = shape()) {
    $this->migration_task = $migration_task ?? null;
  }
}

class DisassociateCreatedArtifactRequest {
  public CreatedArtifactName $created_artifact_name;
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
  ?'created_artifact_name' => CreatedArtifactName,
  ?'dry_run' => DryRun,
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_update_stream' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->created_artifact_name = $created_artifact_name ?? "";
    $this->dry_run = $dry_run ?? false;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
  }
}

class DisassociateCreatedArtifactResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateDiscoveredResourceRequest {
  public ConfigurationId $configuration_id;
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
  ?'configuration_id' => ConfigurationId,
  ?'dry_run' => DryRun,
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_update_stream' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? "";
    $this->dry_run = $dry_run ?? false;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
  }
}

class DisassociateDiscoveredResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DiscoveredResource {
  public ConfigurationId $configuration_id;
  public DiscoveredResourceDescription $description;

  public function __construct(shape(
  ?'configuration_id' => ConfigurationId,
  ?'description' => DiscoveredResourceDescription,
  ) $s = shape()) {
    $this->configuration_id = $configuration_id ?? "";
    $this->description = $description ?? "";
  }
}

type DiscoveredResourceDescription = string;

type DiscoveredResourceList = vec<DiscoveredResource>;

type DryRun = bool;

class DryRunOperation {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ErrorMessage = string;

class HomeRegionNotSetException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ImportMigrationTaskRequest {
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
  ?'dry_run' => DryRun,
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_update_stream' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->dry_run = $dry_run ?? false;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
  }
}

class ImportMigrationTaskResult {

  public function __construct(shape(
  ) $s = shape()) {
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

class InvalidInputException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LatestResourceAttributeList = vec<ResourceAttribute>;

class ListApplicationStatesRequest {
  public ApplicationIds $application_ids;
  public MaxResults $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'application_ids' => ApplicationIds,
  ?'max_results' => MaxResults,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->application_ids = $application_ids ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListApplicationStatesResult {
  public ApplicationStateList $application_state_list;
  public Token $next_token;

  public function __construct(shape(
  ?'application_state_list' => ApplicationStateList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->application_state_list = $application_state_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListCreatedArtifactsRequest {
  public MaxResultsCreatedArtifacts $max_results;
  public MigrationTaskName $migration_task_name;
  public Token $next_token;
  public ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
  ?'max_results' => MaxResultsCreatedArtifacts,
  ?'migration_task_name' => MigrationTaskName,
  ?'next_token' => Token,
  ?'progress_update_stream' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->next_token = $next_token ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
  }
}

class ListCreatedArtifactsResult {
  public CreatedArtifactList $created_artifact_list;
  public Token $next_token;

  public function __construct(shape(
  ?'created_artifact_list' => CreatedArtifactList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->created_artifact_list = $created_artifact_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDiscoveredResourcesRequest {
  public MaxResultsResources $max_results;
  public MigrationTaskName $migration_task_name;
  public Token $next_token;
  public ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
  ?'max_results' => MaxResultsResources,
  ?'migration_task_name' => MigrationTaskName,
  ?'next_token' => Token,
  ?'progress_update_stream' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->next_token = $next_token ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
  }
}

class ListDiscoveredResourcesResult {
  public DiscoveredResourceList $discovered_resource_list;
  public Token $next_token;

  public function __construct(shape(
  ?'discovered_resource_list' => DiscoveredResourceList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->discovered_resource_list = $discovered_resource_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListMigrationTasksRequest {
  public MaxResults $max_results;
  public Token $next_token;
  public ResourceName $resource_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => Token,
  ?'resource_name' => ResourceName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

class ListMigrationTasksResult {
  public MigrationTaskSummaryList $migration_task_summary_list;
  public Token $next_token;

  public function __construct(shape(
  ?'migration_task_summary_list' => MigrationTaskSummaryList,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->migration_task_summary_list = $migration_task_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListProgressUpdateStreamsRequest {
  public MaxResults $max_results;
  public Token $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => Token,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListProgressUpdateStreamsResult {
  public Token $next_token;
  public ProgressUpdateStreamSummaryList $progress_update_stream_summary_list;

  public function __construct(shape(
  ?'next_token' => Token,
  ?'progress_update_stream_summary_list' => ProgressUpdateStreamSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->progress_update_stream_summary_list = $progress_update_stream_summary_list ?? [];
  }
}

type MaxResults = int;

type MaxResultsCreatedArtifacts = int;

type MaxResultsResources = int;

class MigrationTask {
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
  public LatestResourceAttributeList $resource_attribute_list;
  public Task $task;
  public UpdateDateTime $update_date_time;

  public function __construct(shape(
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_update_stream' => ProgressUpdateStream,
  ?'resource_attribute_list' => LatestResourceAttributeList,
  ?'task' => Task,
  ?'update_date_time' => UpdateDateTime,
  ) $s = shape()) {
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
    $this->resource_attribute_list = $resource_attribute_list ?? [];
    $this->task = $task ?? null;
    $this->update_date_time = $update_date_time ?? 0;
  }
}

type MigrationTaskName = string;

class MigrationTaskSummary {
  public MigrationTaskName $migration_task_name;
  public ProgressPercent $progress_percent;
  public ProgressUpdateStream $progress_update_stream;
  public Status $status;
  public StatusDetail $status_detail;
  public UpdateDateTime $update_date_time;

  public function __construct(shape(
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_percent' => ProgressPercent,
  ?'progress_update_stream' => ProgressUpdateStream,
  ?'status' => Status,
  ?'status_detail' => StatusDetail,
  ?'update_date_time' => UpdateDateTime,
  ) $s = shape()) {
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_percent = $progress_percent ?? 0;
    $this->progress_update_stream = $progress_update_stream ?? "";
    $this->status = $status ?? "";
    $this->status_detail = $status_detail ?? "";
    $this->update_date_time = $update_date_time ?? 0;
  }
}

type MigrationTaskSummaryList = vec<MigrationTaskSummary>;

type NextUpdateSeconds = int;

class NotifyApplicationStateRequest {
  public ApplicationId $application_id;
  public DryRun $dry_run;
  public ApplicationStatus $status;
  public UpdateDateTime $update_date_time;

  public function __construct(shape(
  ?'application_id' => ApplicationId,
  ?'dry_run' => DryRun,
  ?'status' => ApplicationStatus,
  ?'update_date_time' => UpdateDateTime,
  ) $s = shape()) {
    $this->application_id = $application_id ?? "";
    $this->dry_run = $dry_run ?? false;
    $this->status = $status ?? "";
    $this->update_date_time = $update_date_time ?? 0;
  }
}

class NotifyApplicationStateResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NotifyMigrationTaskStateRequest {
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public NextUpdateSeconds $next_update_seconds;
  public ProgressUpdateStream $progress_update_stream;
  public Task $task;
  public UpdateDateTime $update_date_time;

  public function __construct(shape(
  ?'dry_run' => DryRun,
  ?'migration_task_name' => MigrationTaskName,
  ?'next_update_seconds' => NextUpdateSeconds,
  ?'progress_update_stream' => ProgressUpdateStream,
  ?'task' => Task,
  ?'update_date_time' => UpdateDateTime,
  ) $s = shape()) {
    $this->dry_run = $dry_run ?? false;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->next_update_seconds = $next_update_seconds ?? 0;
    $this->progress_update_stream = $progress_update_stream ?? "";
    $this->task = $task ?? null;
    $this->update_date_time = $update_date_time ?? 0;
  }
}

class NotifyMigrationTaskStateResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PolicyErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ProgressPercent = int;

type ProgressUpdateStream = string;

class ProgressUpdateStreamSummary {
  public ProgressUpdateStream $progress_update_stream_name;

  public function __construct(shape(
  ?'progress_update_stream_name' => ProgressUpdateStream,
  ) $s = shape()) {
    $this->progress_update_stream_name = $progress_update_stream_name ?? "";
  }
}

type ProgressUpdateStreamSummaryList = vec<ProgressUpdateStreamSummary>;

class PutResourceAttributesRequest {
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
  public ResourceAttributeList $resource_attribute_list;

  public function __construct(shape(
  ?'dry_run' => DryRun,
  ?'migration_task_name' => MigrationTaskName,
  ?'progress_update_stream' => ProgressUpdateStream,
  ?'resource_attribute_list' => ResourceAttributeList,
  ) $s = shape()) {
    $this->dry_run = $dry_run ?? false;
    $this->migration_task_name = $migration_task_name ?? "";
    $this->progress_update_stream = $progress_update_stream ?? "";
    $this->resource_attribute_list = $resource_attribute_list ?? [];
  }
}

class PutResourceAttributesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceAttribute {
  public ResourceAttributeType $type;
  public ResourceAttributeValue $value;

  public function __construct(shape(
  ?'type' => ResourceAttributeType,
  ?'value' => ResourceAttributeValue,
  ) $s = shape()) {
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

type ResourceAttributeList = vec<ResourceAttribute>;

type ResourceAttributeType = string;

type ResourceAttributeValue = string;

type ResourceName = string;

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type RetryAfterSeconds = int;

class ServiceUnavailableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Status = string;

type StatusDetail = string;

class Task {
  public ProgressPercent $progress_percent;
  public Status $status;
  public StatusDetail $status_detail;

  public function __construct(shape(
  ?'progress_percent' => ProgressPercent,
  ?'status' => Status,
  ?'status_detail' => StatusDetail,
  ) $s = shape()) {
    $this->progress_percent = $progress_percent ?? 0;
    $this->status = $status ?? "";
    $this->status_detail = $status_detail ?? "";
  }
}

class ThrottlingException {
  public ErrorMessage $message;
  public RetryAfterSeconds $retry_after_seconds;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'retry_after_seconds' => RetryAfterSeconds,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->retry_after_seconds = $retry_after_seconds ?? 0;
  }
}

type Token = string;

class UnauthorizedOperation {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type UpdateDateTime = int;

