<?hh // strict
namespace slack\aws\data.jobs.iot;

interface IoT Jobs Data Plane {
  public function DescribeJobExecution(DescribeJobExecutionRequest): Awaitable<Errors\Result<DescribeJobExecutionResponse>>;
  public function GetPendingJobExecutions(GetPendingJobExecutionsRequest): Awaitable<Errors\Result<GetPendingJobExecutionsResponse>>;
  public function StartNextPendingJobExecution(StartNextPendingJobExecutionRequest): Awaitable<Errors\Result<StartNextPendingJobExecutionResponse>>;
  public function UpdateJobExecution(UpdateJobExecutionRequest): Awaitable<Errors\Result<UpdateJobExecutionResponse>>;
}

class ApproximateSecondsBeforeTimedOut {
}

class BinaryBlob {
}

class CertificateValidationException {
  public errorMessage $message;
}

class DescribeJobExecutionJobId {
}

class DescribeJobExecutionRequest {
  public ExecutionNumber $execution_number;
  public IncludeJobDocument $include_job_document;
  public DescribeJobExecutionJobId $job_id;
  public ThingName $thing_name;
}

class DescribeJobExecutionResponse {
  public JobExecution $execution;
}

class DetailsKey {
}

class DetailsMap {
}

class DetailsValue {
}

class ExecutionNumber {
}

class ExpectedVersion {
}

class GetPendingJobExecutionsRequest {
  public ThingName $thing_name;
}

class GetPendingJobExecutionsResponse {
  public JobExecutionSummaryList $in_progress_jobs;
  public JobExecutionSummaryList $queued_jobs;
}

class IncludeExecutionState {
}

class IncludeJobDocument {
}

class InvalidRequestException {
  public errorMessage $message;
}

class InvalidStateTransitionException {
  public errorMessage $message;
}

class JobDocument {
}

class JobExecution {
  public ApproximateSecondsBeforeTimedOut $approximate_seconds_before_timed_out;
  public ExecutionNumber $execution_number;
  public JobDocument $job_document;
  public JobId $job_id;
  public LastUpdatedAt $last_updated_at;
  public QueuedAt $queued_at;
  public StartedAt $started_at;
  public JobExecutionStatus $status;
  public DetailsMap $status_details;
  public ThingName $thing_name;
  public VersionNumber $version_number;
}

class JobExecutionState {
  public JobExecutionStatus $status;
  public DetailsMap $status_details;
  public VersionNumber $version_number;
}

class JobExecutionStatus {
}

class JobExecutionSummary {
  public ExecutionNumber $execution_number;
  public JobId $job_id;
  public LastUpdatedAt $last_updated_at;
  public QueuedAt $queued_at;
  public StartedAt $started_at;
  public VersionNumber $version_number;
}

class JobExecutionSummaryList {
}

class JobId {
}

class LastUpdatedAt {
}

class QueuedAt {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class StartNextPendingJobExecutionRequest {
  public DetailsMap $status_details;
  public StepTimeoutInMinutes $step_timeout_in_minutes;
  public ThingName $thing_name;
}

class StartNextPendingJobExecutionResponse {
  public JobExecution $execution;
}

class StartedAt {
}

class StepTimeoutInMinutes {
}

class TerminalStateException {
  public errorMessage $message;
}

class ThingName {
}

class ThrottlingException {
  public errorMessage $message;
  public BinaryBlob $payload;
}

class UpdateJobExecutionRequest {
  public ExecutionNumber $execution_number;
  public ExpectedVersion $expected_version;
  public IncludeJobDocument $include_job_document;
  public IncludeExecutionState $include_job_execution_state;
  public JobId $job_id;
  public JobExecutionStatus $status;
  public DetailsMap $status_details;
  public StepTimeoutInMinutes $step_timeout_in_minutes;
  public ThingName $thing_name;
}

class UpdateJobExecutionResponse {
  public JobExecutionState $execution_state;
  public JobDocument $job_document;
}

class VersionNumber {
}

class errorMessage {
}

