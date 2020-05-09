<?hh // strict
namespace slack\aws\data.jobs.iot;

interface IoT Jobs Data Plane {
  public function DescribeJobExecution(DescribeJobExecutionRequest) Awaitable<Errors\Result<DescribeJobExecutionResponse>>;
  public function GetPendingJobExecutions(GetPendingJobExecutionsRequest) Awaitable<Errors\Result<GetPendingJobExecutionsResponse>>;
  public function StartNextPendingJobExecution(StartNextPendingJobExecutionRequest) Awaitable<Errors\Result<StartNextPendingJobExecutionResponse>>;
  public function UpdateJobExecution(UpdateJobExecutionRequest) Awaitable<Errors\Result<UpdateJobExecutionResponse>>;
}

class IncludeJobDocument {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class StartNextPendingJobExecutionResponse {
  public JobExecution $execution;
}

class UpdateJobExecutionResponse {
  public JobDocument $job_document;
  public JobExecutionState $execution_state;
}

class DetailsMap {
}

class ExpectedVersion {
}

class JobExecutionSummary {
  public JobId $job_id;
  public QueuedAt $queued_at;
  public StartedAt $started_at;
  public LastUpdatedAt $last_updated_at;
  public VersionNumber $version_number;
  public ExecutionNumber $execution_number;
}

class LastUpdatedAt {
}

class QueuedAt {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class UpdateJobExecutionRequest {
  public IncludeJobDocument $include_job_document;
  public ThingName $thing_name;
  public JobExecutionStatus $status;
  public StepTimeoutInMinutes $step_timeout_in_minutes;
  public IncludeExecutionState $include_job_execution_state;
  public ExecutionNumber $execution_number;
  public JobId $job_id;
  public DetailsMap $status_details;
  public ExpectedVersion $expected_version;
}

class CertificateValidationException {
  public errorMessage $message;
}

class IncludeExecutionState {
}

class InvalidRequestException {
  public errorMessage $message;
}

class JobExecutionState {
  public JobExecutionStatus $status;
  public DetailsMap $status_details;
  public VersionNumber $version_number;
}

class StartedAt {
}

class DescribeJobExecutionRequest {
  public DescribeJobExecutionJobId $job_id;
  public ThingName $thing_name;
  public IncludeJobDocument $include_job_document;
  public ExecutionNumber $execution_number;
}

class JobExecution {
  public StartedAt $started_at;
  public ApproximateSecondsBeforeTimedOut $approximate_seconds_before_timed_out;
  public VersionNumber $version_number;
  public LastUpdatedAt $last_updated_at;
  public ExecutionNumber $execution_number;
  public JobDocument $job_document;
  public JobId $job_id;
  public ThingName $thing_name;
  public JobExecutionStatus $status;
  public DetailsMap $status_details;
  public QueuedAt $queued_at;
}

class JobExecutionStatus {
}

class DetailsValue {
}

class GetPendingJobExecutionsResponse {
  public JobExecutionSummaryList $in_progress_jobs;
  public JobExecutionSummaryList $queued_jobs;
}

class ThrottlingException {
  public errorMessage $message;
  public BinaryBlob $payload;
}

class errorMessage {
}

class ApproximateSecondsBeforeTimedOut {
}

class DescribeJobExecutionJobId {
}

class DescribeJobExecutionResponse {
  public JobExecution $execution;
}

class ExecutionNumber {
}

class JobExecutionSummaryList {
}

class JobId {
}

class VersionNumber {
}

class TerminalStateException {
  public errorMessage $message;
}

class BinaryBlob {
}

class DetailsKey {
}

class GetPendingJobExecutionsRequest {
  public ThingName $thing_name;
}

class InvalidStateTransitionException {
  public errorMessage $message;
}

class JobDocument {
}

class StartNextPendingJobExecutionRequest {
  public StepTimeoutInMinutes $step_timeout_in_minutes;
  public ThingName $thing_name;
  public DetailsMap $status_details;
}

class StepTimeoutInMinutes {
}

class ThingName {
}

