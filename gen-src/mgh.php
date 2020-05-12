<?hh // strict
namespace slack\aws\mgh;

interface MigrationHub {
  public function AssociateCreatedArtifact(AssociateCreatedArtifactRequest $in): Awaitable<\Errors\Result<AssociateCreatedArtifactResult>>;
  public function AssociateDiscoveredResource(AssociateDiscoveredResourceRequest $in): Awaitable<\Errors\Result<AssociateDiscoveredResourceResult>>;
  public function CreateProgressUpdateStream(CreateProgressUpdateStreamRequest $in): Awaitable<\Errors\Result<CreateProgressUpdateStreamResult>>;
  public function DeleteProgressUpdateStream(DeleteProgressUpdateStreamRequest $in): Awaitable<\Errors\Result<DeleteProgressUpdateStreamResult>>;
  public function DescribeApplicationState(DescribeApplicationStateRequest $in): Awaitable<\Errors\Result<DescribeApplicationStateResult>>;
  public function DescribeMigrationTask(DescribeMigrationTaskRequest $in): Awaitable<\Errors\Result<DescribeMigrationTaskResult>>;
  public function DisassociateCreatedArtifact(DisassociateCreatedArtifactRequest $in): Awaitable<\Errors\Result<DisassociateCreatedArtifactResult>>;
  public function DisassociateDiscoveredResource(DisassociateDiscoveredResourceRequest $in): Awaitable<\Errors\Result<DisassociateDiscoveredResourceResult>>;
  public function ImportMigrationTask(ImportMigrationTaskRequest $in): Awaitable<\Errors\Result<ImportMigrationTaskResult>>;
  public function ListApplicationStates(ListApplicationStatesRequest $in): Awaitable<\Errors\Result<ListApplicationStatesResult>>;
  public function ListCreatedArtifacts(ListCreatedArtifactsRequest $in): Awaitable<\Errors\Result<ListCreatedArtifactsResult>>;
  public function ListDiscoveredResources(ListDiscoveredResourcesRequest $in): Awaitable<\Errors\Result<ListDiscoveredResourcesResult>>;
  public function ListMigrationTasks(ListMigrationTasksRequest $in): Awaitable<\Errors\Result<ListMigrationTasksResult>>;
  public function ListProgressUpdateStreams(ListProgressUpdateStreamsRequest $in): Awaitable<\Errors\Result<ListProgressUpdateStreamsResult>>;
  public function NotifyApplicationState(NotifyApplicationStateRequest $in): Awaitable<\Errors\Result<NotifyApplicationStateResult>>;
  public function NotifyMigrationTaskState(NotifyMigrationTaskStateRequest $in): Awaitable<\Errors\Result<NotifyMigrationTaskStateResult>>;
  public function PutResourceAttributes(PutResourceAttributesRequest $in): Awaitable<\Errors\Result<PutResourceAttributesResult>>;
}

class AccessDeniedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ApplicationId = string;

type ApplicationIds = vec<ApplicationId>;

class ApplicationState {
  public ?ApplicationId $application_id;
  public ?ApplicationStatus $application_status;
  public ?UpdateDateTime $last_updated_time;

  public function __construct(shape(
    ?'application_id' => ?ApplicationId,
    ?'application_status' => ?ApplicationStatus,
    ?'last_updated_time' => ?UpdateDateTime,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->application_status = $s['application_status'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
  }
}

type ApplicationStateList = vec<ApplicationState>;

type ApplicationStatus = string;

class AssociateCreatedArtifactRequest {
  public ?CreatedArtifact $created_artifact;
  public ?DryRun $dry_run;
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
    ?'created_artifact' => ?CreatedArtifact,
    ?'dry_run' => ?DryRun,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_update_stream' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->created_artifact = $s['created_artifact'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
  }
}

class AssociateCreatedArtifactResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateDiscoveredResourceRequest {
  public ?DiscoveredResource $discovered_resource;
  public ?DryRun $dry_run;
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
    ?'discovered_resource' => ?DiscoveredResource,
    ?'dry_run' => ?DryRun,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_update_stream' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->discovered_resource = $s['discovered_resource'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
  }
}

class AssociateDiscoveredResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ConfigurationId = string;

class CreateProgressUpdateStreamRequest {
  public ?DryRun $dry_run;
  public ?ProgressUpdateStream $progress_update_stream_name;

  public function __construct(shape(
    ?'dry_run' => ?DryRun,
    ?'progress_update_stream_name' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->progress_update_stream_name = $s['progress_update_stream_name'] ?? '';
  }
}

class CreateProgressUpdateStreamResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreatedArtifact {
  public ?CreatedArtifactDescription $description;
  public ?CreatedArtifactName $name;

  public function __construct(shape(
    ?'description' => ?CreatedArtifactDescription,
    ?'name' => ?CreatedArtifactName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type CreatedArtifactDescription = string;

type CreatedArtifactList = vec<CreatedArtifact>;

type CreatedArtifactName = string;

class DeleteProgressUpdateStreamRequest {
  public ?DryRun $dry_run;
  public ?ProgressUpdateStream $progress_update_stream_name;

  public function __construct(shape(
    ?'dry_run' => ?DryRun,
    ?'progress_update_stream_name' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->progress_update_stream_name = $s['progress_update_stream_name'] ?? '';
  }
}

class DeleteProgressUpdateStreamResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeApplicationStateRequest {
  public ?ApplicationId $application_id;

  public function __construct(shape(
    ?'application_id' => ?ApplicationId,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class DescribeApplicationStateResult {
  public ?ApplicationStatus $application_status;
  public ?UpdateDateTime $last_updated_time;

  public function __construct(shape(
    ?'application_status' => ?ApplicationStatus,
    ?'last_updated_time' => ?UpdateDateTime,
  ) $s = shape()) {
    $this->application_status = $s['application_status'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
  }
}

class DescribeMigrationTaskRequest {
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_update_stream' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
  }
}

class DescribeMigrationTaskResult {
  public ?MigrationTask $migration_task;

  public function __construct(shape(
    ?'migration_task' => ?MigrationTask,
  ) $s = shape()) {
    $this->migration_task = $s['migration_task'] ?? null;
  }
}

class DisassociateCreatedArtifactRequest {
  public ?CreatedArtifactName $created_artifact_name;
  public ?DryRun $dry_run;
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
    ?'created_artifact_name' => ?CreatedArtifactName,
    ?'dry_run' => ?DryRun,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_update_stream' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->created_artifact_name = $s['created_artifact_name'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
  }
}

class DisassociateCreatedArtifactResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateDiscoveredResourceRequest {
  public ?ConfigurationId $configuration_id;
  public ?DryRun $dry_run;
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
    ?'configuration_id' => ?ConfigurationId,
    ?'dry_run' => ?DryRun,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_update_stream' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
  }
}

class DisassociateDiscoveredResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DiscoveredResource {
  public ?ConfigurationId $configuration_id;
  public ?DiscoveredResourceDescription $description;

  public function __construct(shape(
    ?'configuration_id' => ?ConfigurationId,
    ?'description' => ?DiscoveredResourceDescription,
  ) $s = shape()) {
    $this->configuration_id = $s['configuration_id'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

type DiscoveredResourceDescription = string;

type DiscoveredResourceList = vec<DiscoveredResource>;

type DryRun = bool;

class DryRunOperation {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ErrorMessage = string;

class HomeRegionNotSetException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ImportMigrationTaskRequest {
  public ?DryRun $dry_run;
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
    ?'dry_run' => ?DryRun,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_update_stream' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
  }
}

class ImportMigrationTaskResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InternalServerError {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LatestResourceAttributeList = vec<ResourceAttribute>;

class ListApplicationStatesRequest {
  public ?ApplicationIds $application_ids;
  public ?MaxResults $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'application_ids' => ?ApplicationIds,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->application_ids = $s['application_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListApplicationStatesResult {
  public ?ApplicationStateList $application_state_list;
  public ?Token $next_token;

  public function __construct(shape(
    ?'application_state_list' => ?ApplicationStateList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->application_state_list = $s['application_state_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCreatedArtifactsRequest {
  public ?MaxResultsCreatedArtifacts $max_results;
  public ?MigrationTaskName $migration_task_name;
  public ?Token $next_token;
  public ?ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
    ?'max_results' => ?MaxResultsCreatedArtifacts,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'next_token' => ?Token,
    ?'progress_update_stream' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
  }
}

class ListCreatedArtifactsResult {
  public ?CreatedArtifactList $created_artifact_list;
  public ?Token $next_token;

  public function __construct(shape(
    ?'created_artifact_list' => ?CreatedArtifactList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->created_artifact_list = $s['created_artifact_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDiscoveredResourcesRequest {
  public ?MaxResultsResources $max_results;
  public ?MigrationTaskName $migration_task_name;
  public ?Token $next_token;
  public ?ProgressUpdateStream $progress_update_stream;

  public function __construct(shape(
    ?'max_results' => ?MaxResultsResources,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'next_token' => ?Token,
    ?'progress_update_stream' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
  }
}

class ListDiscoveredResourcesResult {
  public ?DiscoveredResourceList $discovered_resource_list;
  public ?Token $next_token;

  public function __construct(shape(
    ?'discovered_resource_list' => ?DiscoveredResourceList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->discovered_resource_list = $s['discovered_resource_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListMigrationTasksRequest {
  public ?MaxResults $max_results;
  public ?Token $next_token;
  public ?ResourceName $resource_name;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?Token,
    ?'resource_name' => ?ResourceName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class ListMigrationTasksResult {
  public ?MigrationTaskSummaryList $migration_task_summary_list;
  public ?Token $next_token;

  public function __construct(shape(
    ?'migration_task_summary_list' => ?MigrationTaskSummaryList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->migration_task_summary_list = $s['migration_task_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProgressUpdateStreamsRequest {
  public ?MaxResults $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProgressUpdateStreamsResult {
  public ?Token $next_token;
  public ?ProgressUpdateStreamSummaryList $progress_update_stream_summary_list;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'progress_update_stream_summary_list' => ?ProgressUpdateStreamSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->progress_update_stream_summary_list = $s['progress_update_stream_summary_list'] ?? vec[];
  }
}

type MaxResults = int;

type MaxResultsCreatedArtifacts = int;

type MaxResultsResources = int;

class MigrationTask {
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressUpdateStream $progress_update_stream;
  public ?LatestResourceAttributeList $resource_attribute_list;
  public ?Task $task;
  public ?UpdateDateTime $update_date_time;

  public function __construct(shape(
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_update_stream' => ?ProgressUpdateStream,
    ?'resource_attribute_list' => ?LatestResourceAttributeList,
    ?'task' => ?Task,
    ?'update_date_time' => ?UpdateDateTime,
  ) $s = shape()) {
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
    $this->resource_attribute_list = $s['resource_attribute_list'] ?? vec[];
    $this->task = $s['task'] ?? null;
    $this->update_date_time = $s['update_date_time'] ?? 0;
  }
}

type MigrationTaskName = string;

class MigrationTaskSummary {
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressPercent $progress_percent;
  public ?ProgressUpdateStream $progress_update_stream;
  public ?Status $status;
  public ?StatusDetail $status_detail;
  public ?UpdateDateTime $update_date_time;

  public function __construct(shape(
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_percent' => ?ProgressPercent,
    ?'progress_update_stream' => ?ProgressUpdateStream,
    ?'status' => ?Status,
    ?'status_detail' => ?StatusDetail,
    ?'update_date_time' => ?UpdateDateTime,
  ) $s = shape()) {
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_percent = $s['progress_percent'] ?? 0;
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_detail = $s['status_detail'] ?? '';
    $this->update_date_time = $s['update_date_time'] ?? 0;
  }
}

type MigrationTaskSummaryList = vec<MigrationTaskSummary>;

type NextUpdateSeconds = int;

class NotifyApplicationStateRequest {
  public ?ApplicationId $application_id;
  public ?DryRun $dry_run;
  public ?ApplicationStatus $status;
  public ?UpdateDateTime $update_date_time;

  public function __construct(shape(
    ?'application_id' => ?ApplicationId,
    ?'dry_run' => ?DryRun,
    ?'status' => ?ApplicationStatus,
    ?'update_date_time' => ?UpdateDateTime,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->status = $s['status'] ?? '';
    $this->update_date_time = $s['update_date_time'] ?? 0;
  }
}

class NotifyApplicationStateResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NotifyMigrationTaskStateRequest {
  public ?DryRun $dry_run;
  public ?MigrationTaskName $migration_task_name;
  public ?NextUpdateSeconds $next_update_seconds;
  public ?ProgressUpdateStream $progress_update_stream;
  public ?Task $task;
  public ?UpdateDateTime $update_date_time;

  public function __construct(shape(
    ?'dry_run' => ?DryRun,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'next_update_seconds' => ?NextUpdateSeconds,
    ?'progress_update_stream' => ?ProgressUpdateStream,
    ?'task' => ?Task,
    ?'update_date_time' => ?UpdateDateTime,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->next_update_seconds = $s['next_update_seconds'] ?? 0;
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
    $this->task = $s['task'] ?? null;
    $this->update_date_time = $s['update_date_time'] ?? 0;
  }
}

class NotifyMigrationTaskStateResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PolicyErrorException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ProgressPercent = int;

type ProgressUpdateStream = string;

class ProgressUpdateStreamSummary {
  public ?ProgressUpdateStream $progress_update_stream_name;

  public function __construct(shape(
    ?'progress_update_stream_name' => ?ProgressUpdateStream,
  ) $s = shape()) {
    $this->progress_update_stream_name = $s['progress_update_stream_name'] ?? '';
  }
}

type ProgressUpdateStreamSummaryList = vec<ProgressUpdateStreamSummary>;

class PutResourceAttributesRequest {
  public ?DryRun $dry_run;
  public ?MigrationTaskName $migration_task_name;
  public ?ProgressUpdateStream $progress_update_stream;
  public ?ResourceAttributeList $resource_attribute_list;

  public function __construct(shape(
    ?'dry_run' => ?DryRun,
    ?'migration_task_name' => ?MigrationTaskName,
    ?'progress_update_stream' => ?ProgressUpdateStream,
    ?'resource_attribute_list' => ?ResourceAttributeList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->migration_task_name = $s['migration_task_name'] ?? '';
    $this->progress_update_stream = $s['progress_update_stream'] ?? '';
    $this->resource_attribute_list = $s['resource_attribute_list'] ?? vec[];
  }
}

class PutResourceAttributesResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceAttribute {
  public ?ResourceAttributeType $type;
  public ?ResourceAttributeValue $value;

  public function __construct(shape(
    ?'type' => ?ResourceAttributeType,
    ?'value' => ?ResourceAttributeValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ResourceAttributeList = vec<ResourceAttribute>;

type ResourceAttributeType = string;

type ResourceAttributeValue = string;

type ResourceName = string;

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RetryAfterSeconds = int;

class ServiceUnavailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Status = string;

type StatusDetail = string;

class Task {
  public ?ProgressPercent $progress_percent;
  public ?Status $status;
  public ?StatusDetail $status_detail;

  public function __construct(shape(
    ?'progress_percent' => ?ProgressPercent,
    ?'status' => ?Status,
    ?'status_detail' => ?StatusDetail,
  ) $s = shape()) {
    $this->progress_percent = $s['progress_percent'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_detail = $s['status_detail'] ?? '';
  }
}

class ThrottlingException {
  public ?ErrorMessage $message;
  public ?RetryAfterSeconds $retry_after_seconds;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'retry_after_seconds' => ?RetryAfterSeconds,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? 0;
  }
}

type Token = string;

class UnauthorizedOperation {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type UpdateDateTime = int;

