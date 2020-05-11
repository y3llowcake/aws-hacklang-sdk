<?hh // strict
namespace slack\aws\data.jobs.iot;

interface IoT Jobs Data Plane {
  public function DescribeJobExecution(DescribeJobExecutionRequest): Awaitable<Errors\Result<DescribeJobExecutionResponse>>;
  public function GetPendingJobExecutions(GetPendingJobExecutionsRequest): Awaitable<Errors\Result<GetPendingJobExecutionsResponse>>;
  public function StartNextPendingJobExecution(StartNextPendingJobExecutionRequest): Awaitable<Errors\Result<StartNextPendingJobExecutionResponse>>;
  public function UpdateJobExecution(UpdateJobExecutionRequest): Awaitable<Errors\Result<UpdateJobExecutionResponse>>;
}

type ApproximateSecondsBeforeTimedOut = int;

type BinaryBlob = string;

class CertificateValidationException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type DescribeJobExecutionJobId = string;

class DescribeJobExecutionRequest {
  public ExecutionNumber $execution_number;
  public IncludeJobDocument $include_job_document;
  public DescribeJobExecutionJobId $job_id;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'execution_number' => ExecutionNumber,
  ?'include_job_document' => IncludeJobDocument,
  ?'job_id' => DescribeJobExecutionJobId,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->execution_number = $execution_number ?? ;
    $this->include_job_document = $include_job_document ?? ;
    $this->job_id = $job_id ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class DescribeJobExecutionResponse {
  public JobExecution $execution;

  public function __construct(shape(
  ?'execution' => JobExecution,
  ) $s = shape()) {
    $this->execution = $execution ?? ;
  }
}

type DetailsKey = string;

type DetailsMap = dict<DetailsKey, DetailsValue>;

type DetailsValue = string;

type ExecutionNumber = int;

type ExpectedVersion = int;

class GetPendingJobExecutionsRequest {
  public ThingName $thing_name;

  public function __construct(shape(
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->thing_name = $thing_name ?? ;
  }
}

class GetPendingJobExecutionsResponse {
  public JobExecutionSummaryList $in_progress_jobs;
  public JobExecutionSummaryList $queued_jobs;

  public function __construct(shape(
  ?'in_progress_jobs' => JobExecutionSummaryList,
  ?'queued_jobs' => JobExecutionSummaryList,
  ) $s = shape()) {
    $this->in_progress_jobs = $in_progress_jobs ?? ;
    $this->queued_jobs = $queued_jobs ?? ;
  }
}

type IncludeExecutionState = bool;

type IncludeJobDocument = bool;

class InvalidRequestException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidStateTransitionException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type JobDocument = string;

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

  public function __construct(shape(
  ?'approximate_seconds_before_timed_out' => ApproximateSecondsBeforeTimedOut,
  ?'execution_number' => ExecutionNumber,
  ?'job_document' => JobDocument,
  ?'job_id' => JobId,
  ?'last_updated_at' => LastUpdatedAt,
  ?'queued_at' => QueuedAt,
  ?'started_at' => StartedAt,
  ?'status' => JobExecutionStatus,
  ?'status_details' => DetailsMap,
  ?'thing_name' => ThingName,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->approximate_seconds_before_timed_out = $approximate_seconds_before_timed_out ?? ;
    $this->execution_number = $execution_number ?? ;
    $this->job_document = $job_document ?? ;
    $this->job_id = $job_id ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->queued_at = $queued_at ?? ;
    $this->started_at = $started_at ?? ;
    $this->status = $status ?? ;
    $this->status_details = $status_details ?? ;
    $this->thing_name = $thing_name ?? ;
    $this->version_number = $version_number ?? ;
  }
}

class JobExecutionState {
  public JobExecutionStatus $status;
  public DetailsMap $status_details;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'status' => JobExecutionStatus,
  ?'status_details' => DetailsMap,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->status = $status ?? ;
    $this->status_details = $status_details ?? ;
    $this->version_number = $version_number ?? ;
  }
}

type JobExecutionStatus = string;

class JobExecutionSummary {
  public ExecutionNumber $execution_number;
  public JobId $job_id;
  public LastUpdatedAt $last_updated_at;
  public QueuedAt $queued_at;
  public StartedAt $started_at;
  public VersionNumber $version_number;

  public function __construct(shape(
  ?'execution_number' => ExecutionNumber,
  ?'job_id' => JobId,
  ?'last_updated_at' => LastUpdatedAt,
  ?'queued_at' => QueuedAt,
  ?'started_at' => StartedAt,
  ?'version_number' => VersionNumber,
  ) $s = shape()) {
    $this->execution_number = $execution_number ?? ;
    $this->job_id = $job_id ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->queued_at = $queued_at ?? ;
    $this->started_at = $started_at ?? ;
    $this->version_number = $version_number ?? ;
  }
}

type JobExecutionSummaryList = vec<JobExecutionSummary>;

type JobId = string;

type LastUpdatedAt = int;

type QueuedAt = int;

class ResourceNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ServiceUnavailableException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class StartNextPendingJobExecutionRequest {
  public DetailsMap $status_details;
  public StepTimeoutInMinutes $step_timeout_in_minutes;
  public ThingName $thing_name;

  public function __construct(shape(
  ?'status_details' => DetailsMap,
  ?'step_timeout_in_minutes' => StepTimeoutInMinutes,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->status_details = $status_details ?? ;
    $this->step_timeout_in_minutes = $step_timeout_in_minutes ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class StartNextPendingJobExecutionResponse {
  public JobExecution $execution;

  public function __construct(shape(
  ?'execution' => JobExecution,
  ) $s = shape()) {
    $this->execution = $execution ?? ;
  }
}

type StartedAt = int;

type StepTimeoutInMinutes = int;

class TerminalStateException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ThingName = string;

class ThrottlingException {
  public errorMessage $message;
  public BinaryBlob $payload;

  public function __construct(shape(
  ?'message' => errorMessage,
  ?'payload' => BinaryBlob,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->payload = $payload ?? ;
  }
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

  public function __construct(shape(
  ?'execution_number' => ExecutionNumber,
  ?'expected_version' => ExpectedVersion,
  ?'include_job_document' => IncludeJobDocument,
  ?'include_job_execution_state' => IncludeExecutionState,
  ?'job_id' => JobId,
  ?'status' => JobExecutionStatus,
  ?'status_details' => DetailsMap,
  ?'step_timeout_in_minutes' => StepTimeoutInMinutes,
  ?'thing_name' => ThingName,
  ) $s = shape()) {
    $this->execution_number = $execution_number ?? ;
    $this->expected_version = $expected_version ?? ;
    $this->include_job_document = $include_job_document ?? ;
    $this->include_job_execution_state = $include_job_execution_state ?? ;
    $this->job_id = $job_id ?? ;
    $this->status = $status ?? ;
    $this->status_details = $status_details ?? ;
    $this->step_timeout_in_minutes = $step_timeout_in_minutes ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class UpdateJobExecutionResponse {
  public JobExecutionState $execution_state;
  public JobDocument $job_document;

  public function __construct(shape(
  ?'execution_state' => JobExecutionState,
  ?'job_document' => JobDocument,
  ) $s = shape()) {
    $this->execution_state = $execution_state ?? ;
    $this->job_document = $job_document ?? ;
  }
}

type VersionNumber = int;

type errorMessage = string;

