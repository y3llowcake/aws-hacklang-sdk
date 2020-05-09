<?hh // strict
namespace slack\aws\mgh;

interface Migration Hub {
  public function AssociateCreatedArtifact(AssociateCreatedArtifactRequest) Awaitable<Errors\Result<AssociateCreatedArtifactResult>>;
  public function ListCreatedArtifacts(ListCreatedArtifactsRequest) Awaitable<Errors\Result<ListCreatedArtifactsResult>>;
  public function ListMigrationTasks(ListMigrationTasksRequest) Awaitable<Errors\Result<ListMigrationTasksResult>>;
  public function DeleteProgressUpdateStream(DeleteProgressUpdateStreamRequest) Awaitable<Errors\Result<DeleteProgressUpdateStreamResult>>;
  public function DescribeApplicationState(DescribeApplicationStateRequest) Awaitable<Errors\Result<DescribeApplicationStateResult>>;
  public function ListDiscoveredResources(ListDiscoveredResourcesRequest) Awaitable<Errors\Result<ListDiscoveredResourcesResult>>;
  public function AssociateDiscoveredResource(AssociateDiscoveredResourceRequest) Awaitable<Errors\Result<AssociateDiscoveredResourceResult>>;
  public function ImportMigrationTask(ImportMigrationTaskRequest) Awaitable<Errors\Result<ImportMigrationTaskResult>>;
  public function ListProgressUpdateStreams(ListProgressUpdateStreamsRequest) Awaitable<Errors\Result<ListProgressUpdateStreamsResult>>;
  public function PutResourceAttributes(PutResourceAttributesRequest) Awaitable<Errors\Result<PutResourceAttributesResult>>;
  public function CreateProgressUpdateStream(CreateProgressUpdateStreamRequest) Awaitable<Errors\Result<CreateProgressUpdateStreamResult>>;
  public function DescribeMigrationTask(DescribeMigrationTaskRequest) Awaitable<Errors\Result<DescribeMigrationTaskResult>>;
  public function DisassociateCreatedArtifact(DisassociateCreatedArtifactRequest) Awaitable<Errors\Result<DisassociateCreatedArtifactResult>>;
  public function DisassociateDiscoveredResource(DisassociateDiscoveredResourceRequest) Awaitable<Errors\Result<DisassociateDiscoveredResourceResult>>;
  public function ListApplicationStates(ListApplicationStatesRequest) Awaitable<Errors\Result<ListApplicationStatesResult>>;
  public function NotifyApplicationState(NotifyApplicationStateRequest) Awaitable<Errors\Result<NotifyApplicationStateResult>>;
  public function NotifyMigrationTaskState(NotifyMigrationTaskStateRequest) Awaitable<Errors\Result<NotifyMigrationTaskStateResult>>;
}

class AssociateDiscoveredResourceResult {
}

class CreateProgressUpdateStreamRequest {
  public ProgressUpdateStream $progress_update_stream_name;
  public DryRun $dry_run;
}

class CreatedArtifactList {
}

class DescribeMigrationTaskRequest {
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
}

class DryRunOperation {
  public ErrorMessage $message;
}

class ListMigrationTasksResult {
  public Token $next_token;
  public MigrationTaskSummaryList $migration_task_summary_list;
}

class ProgressUpdateStreamSummaryList {
}

class PutResourceAttributesResult {
}

class InvalidInputException {
  public ErrorMessage $message;
}

class LatestResourceAttributeList {
}

class PutResourceAttributesRequest {
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
  public ResourceAttributeList $resource_attribute_list;
  public DryRun $dry_run;
}

class ApplicationIds {
}

class DeleteProgressUpdateStreamResult {
}

class InternalServerError {
  public ErrorMessage $message;
}

class ListApplicationStatesResult {
  public ApplicationStateList $application_state_list;
  public Token $next_token;
}

class ListCreatedArtifactsResult {
  public Token $next_token;
  public CreatedArtifactList $created_artifact_list;
}

class ListMigrationTasksRequest {
  public Token $next_token;
  public MaxResults $max_results;
  public ResourceName $resource_name;
}

class MigrationTaskName {
}

class CreatedArtifactDescription {
}

class DiscoveredResourceDescription {
}

class DiscoveredResourceList {
}

class ImportMigrationTaskResult {
}

class NotifyApplicationStateResult {
}

class NotifyMigrationTaskStateResult {
}

class ProgressUpdateStreamSummary {
  public ProgressUpdateStream $progress_update_stream_name;
}

class Task {
  public Status $status;
  public StatusDetail $status_detail;
  public ProgressPercent $progress_percent;
}

class UpdateDateTime {
}

class ConfigurationId {
}

class CreatedArtifact {
  public CreatedArtifactName $name;
  public CreatedArtifactDescription $description;
}

class DescribeApplicationStateRequest {
  public ApplicationId $application_id;
}

class ListCreatedArtifactsRequest {
  public Token $next_token;
  public MaxResultsCreatedArtifacts $max_results;
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
}

class PolicyErrorException {
  public ErrorMessage $message;
}

class StatusDetail {
}

class ErrorMessage {
}

class ImportMigrationTaskRequest {
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
  public DryRun $dry_run;
}

class MigrationTaskSummaryList {
}

class NotifyMigrationTaskStateRequest {
  public Task $task;
  public UpdateDateTime $update_date_time;
  public NextUpdateSeconds $next_update_seconds;
  public DryRun $dry_run;
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
}

class ResourceAttributeValue {
}

class ThrottlingException {
  public ErrorMessage $message;
  public RetryAfterSeconds $retry_after_seconds;
}

class UnauthorizedOperation {
  public ErrorMessage $message;
}

class ApplicationStateList {
}

class AssociateCreatedArtifactRequest {
  public MigrationTaskName $migration_task_name;
  public CreatedArtifact $created_artifact;
  public DryRun $dry_run;
  public ProgressUpdateStream $progress_update_stream;
}

class CreateProgressUpdateStreamResult {
}

class HomeRegionNotSetException {
  public ErrorMessage $message;
}

class ProgressUpdateStream {
}

class Token {
}

class ApplicationStatus {
}

class AssociateDiscoveredResourceRequest {
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
  public DiscoveredResource $discovered_resource;
  public DryRun $dry_run;
}

class DescribeMigrationTaskResult {
  public MigrationTask $migration_task;
}

class MigrationTask {
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
  public Task $task;
  public UpdateDateTime $update_date_time;
  public LatestResourceAttributeList $resource_attribute_list;
}

class Status {
}

class ApplicationId {
}

class NextUpdateSeconds {
}

class DeleteProgressUpdateStreamRequest {
  public ProgressUpdateStream $progress_update_stream_name;
  public DryRun $dry_run;
}

class DiscoveredResource {
  public DiscoveredResourceDescription $description;
  public ConfigurationId $configuration_id;
}

class ListProgressUpdateStreamsRequest {
  public Token $next_token;
  public MaxResults $max_results;
}

class MaxResultsResources {
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class DryRun {
}

class ListApplicationStatesRequest {
  public ApplicationIds $application_ids;
  public Token $next_token;
  public MaxResults $max_results;
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class ApplicationState {
  public ApplicationId $application_id;
  public ApplicationStatus $application_status;
  public UpdateDateTime $last_updated_time;
}

class AssociateCreatedArtifactResult {
}

class CreatedArtifactName {
}

class DisassociateDiscoveredResourceRequest {
  public DryRun $dry_run;
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
  public ConfigurationId $configuration_id;
}

class DisassociateDiscoveredResourceResult {
}

class ListDiscoveredResourcesRequest {
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
  public Token $next_token;
  public MaxResultsResources $max_results;
}

class MaxResultsCreatedArtifacts {
}

class MigrationTaskSummary {
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
  public Status $status;
  public ProgressPercent $progress_percent;
  public StatusDetail $status_detail;
  public UpdateDateTime $update_date_time;
}

class NotifyApplicationStateRequest {
  public DryRun $dry_run;
  public ApplicationId $application_id;
  public ApplicationStatus $status;
  public UpdateDateTime $update_date_time;
}

class ResourceAttributeList {
}

class DisassociateCreatedArtifactRequest {
  public ProgressUpdateStream $progress_update_stream;
  public MigrationTaskName $migration_task_name;
  public CreatedArtifactName $created_artifact_name;
  public DryRun $dry_run;
}

class RetryAfterSeconds {
}

class ListProgressUpdateStreamsResult {
  public ProgressUpdateStreamSummaryList $progress_update_stream_summary_list;
  public Token $next_token;
}

class MaxResults {
}

class ResourceAttributeType {
}

class ResourceName {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class DescribeApplicationStateResult {
  public ApplicationStatus $application_status;
  public UpdateDateTime $last_updated_time;
}

class DisassociateCreatedArtifactResult {
}

class ListDiscoveredResourcesResult {
  public Token $next_token;
  public DiscoveredResourceList $discovered_resource_list;
}

class ProgressPercent {
}

class ResourceAttribute {
  public ResourceAttributeValue $value;
  public ResourceAttributeType $type;
}

