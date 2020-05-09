<?hh // strict
namespace slack\aws\mgh;

interface Migration Hub {
  public function AssociateCreatedArtifact(AssociateCreatedArtifactRequest) Awaitable<Errors\Result<AssociateCreatedArtifactResult>>;
  public function AssociateDiscoveredResource(AssociateDiscoveredResourceRequest) Awaitable<Errors\Result<AssociateDiscoveredResourceResult>>;
  public function CreateProgressUpdateStream(CreateProgressUpdateStreamRequest) Awaitable<Errors\Result<CreateProgressUpdateStreamResult>>;
  public function DeleteProgressUpdateStream(DeleteProgressUpdateStreamRequest) Awaitable<Errors\Result<DeleteProgressUpdateStreamResult>>;
  public function DescribeApplicationState(DescribeApplicationStateRequest) Awaitable<Errors\Result<DescribeApplicationStateResult>>;
  public function DescribeMigrationTask(DescribeMigrationTaskRequest) Awaitable<Errors\Result<DescribeMigrationTaskResult>>;
  public function DisassociateCreatedArtifact(DisassociateCreatedArtifactRequest) Awaitable<Errors\Result<DisassociateCreatedArtifactResult>>;
  public function DisassociateDiscoveredResource(DisassociateDiscoveredResourceRequest) Awaitable<Errors\Result<DisassociateDiscoveredResourceResult>>;
  public function ImportMigrationTask(ImportMigrationTaskRequest) Awaitable<Errors\Result<ImportMigrationTaskResult>>;
  public function ListApplicationStates(ListApplicationStatesRequest) Awaitable<Errors\Result<ListApplicationStatesResult>>;
  public function ListCreatedArtifacts(ListCreatedArtifactsRequest) Awaitable<Errors\Result<ListCreatedArtifactsResult>>;
  public function ListDiscoveredResources(ListDiscoveredResourcesRequest) Awaitable<Errors\Result<ListDiscoveredResourcesResult>>;
  public function ListMigrationTasks(ListMigrationTasksRequest) Awaitable<Errors\Result<ListMigrationTasksResult>>;
  public function ListProgressUpdateStreams(ListProgressUpdateStreamsRequest) Awaitable<Errors\Result<ListProgressUpdateStreamsResult>>;
  public function NotifyApplicationState(NotifyApplicationStateRequest) Awaitable<Errors\Result<NotifyApplicationStateResult>>;
  public function NotifyMigrationTaskState(NotifyMigrationTaskStateRequest) Awaitable<Errors\Result<NotifyMigrationTaskStateResult>>;
  public function PutResourceAttributes(PutResourceAttributesRequest) Awaitable<Errors\Result<PutResourceAttributesResult>>;
}

class AccessDeniedException {
  public ErrorMessage $message;
}

class ApplicationId {
}

class ApplicationIds {
}

class ApplicationState {
  public ApplicationId $application_id;
  public ApplicationStatus $application_status;
  public UpdateDateTime $last_updated_time;
}

class ApplicationStateList {
}

class ApplicationStatus {
}

class AssociateCreatedArtifactRequest {
  public CreatedArtifact $created_artifact;
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
}

class AssociateCreatedArtifactResult {
}

class AssociateDiscoveredResourceRequest {
  public DiscoveredResource $discovered_resource;
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
}

class AssociateDiscoveredResourceResult {
}

class ConfigurationId {
}

class CreateProgressUpdateStreamRequest {
  public DryRun $dry_run;
  public ProgressUpdateStream $progress_update_stream_name;
}

class CreateProgressUpdateStreamResult {
}

class CreatedArtifact {
  public CreatedArtifactDescription $description;
  public CreatedArtifactName $name;
}

class CreatedArtifactDescription {
}

class CreatedArtifactList {
}

class CreatedArtifactName {
}

class DeleteProgressUpdateStreamRequest {
  public DryRun $dry_run;
  public ProgressUpdateStream $progress_update_stream_name;
}

class DeleteProgressUpdateStreamResult {
}

class DescribeApplicationStateRequest {
  public ApplicationId $application_id;
}

class DescribeApplicationStateResult {
  public ApplicationStatus $application_status;
  public UpdateDateTime $last_updated_time;
}

class DescribeMigrationTaskRequest {
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
}

class DescribeMigrationTaskResult {
  public MigrationTask $migration_task;
}

class DisassociateCreatedArtifactRequest {
  public CreatedArtifactName $created_artifact_name;
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
}

class DisassociateCreatedArtifactResult {
}

class DisassociateDiscoveredResourceRequest {
  public ConfigurationId $configuration_id;
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
}

class DisassociateDiscoveredResourceResult {
}

class DiscoveredResource {
  public ConfigurationId $configuration_id;
  public DiscoveredResourceDescription $description;
}

class DiscoveredResourceDescription {
}

class DiscoveredResourceList {
}

class DryRun {
}

class DryRunOperation {
  public ErrorMessage $message;
}

class ErrorMessage {
}

class HomeRegionNotSetException {
  public ErrorMessage $message;
}

class ImportMigrationTaskRequest {
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
}

class ImportMigrationTaskResult {
}

class InternalServerError {
  public ErrorMessage $message;
}

class InvalidInputException {
  public ErrorMessage $message;
}

class LatestResourceAttributeList {
}

class ListApplicationStatesRequest {
  public ApplicationIds $application_ids;
  public MaxResults $max_results;
  public Token $next_token;
}

class ListApplicationStatesResult {
  public ApplicationStateList $application_state_list;
  public Token $next_token;
}

class ListCreatedArtifactsRequest {
  public MaxResultsCreatedArtifacts $max_results;
  public MigrationTaskName $migration_task_name;
  public Token $next_token;
  public ProgressUpdateStream $progress_update_stream;
}

class ListCreatedArtifactsResult {
  public CreatedArtifactList $created_artifact_list;
  public Token $next_token;
}

class ListDiscoveredResourcesRequest {
  public MaxResultsResources $max_results;
  public MigrationTaskName $migration_task_name;
  public Token $next_token;
  public ProgressUpdateStream $progress_update_stream;
}

class ListDiscoveredResourcesResult {
  public DiscoveredResourceList $discovered_resource_list;
  public Token $next_token;
}

class ListMigrationTasksRequest {
  public MaxResults $max_results;
  public Token $next_token;
  public ResourceName $resource_name;
}

class ListMigrationTasksResult {
  public MigrationTaskSummaryList $migration_task_summary_list;
  public Token $next_token;
}

class ListProgressUpdateStreamsRequest {
  public MaxResults $max_results;
  public Token $next_token;
}

class ListProgressUpdateStreamsResult {
  public Token $next_token;
  public ProgressUpdateStreamSummaryList $progress_update_stream_summary_list;
}

class MaxResults {
}

class MaxResultsCreatedArtifacts {
}

class MaxResultsResources {
}

class MigrationTask {
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
  public LatestResourceAttributeList $resource_attribute_list;
  public Task $task;
  public UpdateDateTime $update_date_time;
}

class MigrationTaskName {
}

class MigrationTaskSummary {
  public MigrationTaskName $migration_task_name;
  public ProgressPercent $progress_percent;
  public ProgressUpdateStream $progress_update_stream;
  public Status $status;
  public StatusDetail $status_detail;
  public UpdateDateTime $update_date_time;
}

class MigrationTaskSummaryList {
}

class NextUpdateSeconds {
}

class NotifyApplicationStateRequest {
  public ApplicationId $application_id;
  public DryRun $dry_run;
  public ApplicationStatus $status;
  public UpdateDateTime $update_date_time;
}

class NotifyApplicationStateResult {
}

class NotifyMigrationTaskStateRequest {
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public NextUpdateSeconds $next_update_seconds;
  public ProgressUpdateStream $progress_update_stream;
  public Task $task;
  public UpdateDateTime $update_date_time;
}

class NotifyMigrationTaskStateResult {
}

class PolicyErrorException {
  public ErrorMessage $message;
}

class ProgressPercent {
}

class ProgressUpdateStream {
}

class ProgressUpdateStreamSummary {
  public ProgressUpdateStream $progress_update_stream_name;
}

class ProgressUpdateStreamSummaryList {
}

class PutResourceAttributesRequest {
  public DryRun $dry_run;
  public MigrationTaskName $migration_task_name;
  public ProgressUpdateStream $progress_update_stream;
  public ResourceAttributeList $resource_attribute_list;
}

class PutResourceAttributesResult {
}

class ResourceAttribute {
  public ResourceAttributeType $type;
  public ResourceAttributeValue $value;
}

class ResourceAttributeList {
}

class ResourceAttributeType {
}

class ResourceAttributeValue {
}

class ResourceName {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class RetryAfterSeconds {
}

class ServiceUnavailableException {
  public ErrorMessage $message;
}

class Status {
}

class StatusDetail {
}

class Task {
  public ProgressPercent $progress_percent;
  public Status $status;
  public StatusDetail $status_detail;
}

class ThrottlingException {
  public ErrorMessage $message;
  public RetryAfterSeconds $retry_after_seconds;
}

class Token {
}

class UnauthorizedOperation {
  public ErrorMessage $message;
}

class UpdateDateTime {
}

