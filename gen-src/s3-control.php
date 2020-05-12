<?hh // strict
namespace slack\aws\s3-control;

interface S3Control {
  public function CreateAccessPoint(CreateAccessPointRequest $in): Awaitable<\Errors\Error>;
  public function CreateJob(CreateJobRequest $in): Awaitable<\Errors\Result<CreateJobResult>>;
  public function DeleteAccessPoint(DeleteAccessPointRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAccessPointPolicy(DeleteAccessPointPolicyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteJobTagging(DeleteJobTaggingRequest $in): Awaitable<\Errors\Result<DeleteJobTaggingResult>>;
  public function DeletePublicAccessBlock(DeletePublicAccessBlockRequest $in): Awaitable<\Errors\Error>;
  public function DescribeJob(DescribeJobRequest $in): Awaitable<\Errors\Result<DescribeJobResult>>;
  public function GetAccessPoint(GetAccessPointRequest $in): Awaitable<\Errors\Result<GetAccessPointResult>>;
  public function GetAccessPointPolicy(GetAccessPointPolicyRequest $in): Awaitable<\Errors\Result<GetAccessPointPolicyResult>>;
  public function GetAccessPointPolicyStatus(GetAccessPointPolicyStatusRequest $in): Awaitable<\Errors\Result<GetAccessPointPolicyStatusResult>>;
  public function GetJobTagging(GetJobTaggingRequest $in): Awaitable<\Errors\Result<GetJobTaggingResult>>;
  public function GetPublicAccessBlock(GetPublicAccessBlockRequest $in): Awaitable<\Errors\Result<GetPublicAccessBlockOutput>>;
  public function ListAccessPoints(ListAccessPointsRequest $in): Awaitable<\Errors\Result<ListAccessPointsResult>>;
  public function ListJobs(ListJobsRequest $in): Awaitable<\Errors\Result<ListJobsResult>>;
  public function PutAccessPointPolicy(PutAccessPointPolicyRequest $in): Awaitable<\Errors\Error>;
  public function PutJobTagging(PutJobTaggingRequest $in): Awaitable<\Errors\Result<PutJobTaggingResult>>;
  public function PutPublicAccessBlock(PutPublicAccessBlockRequest $in): Awaitable<\Errors\Error>;
  public function UpdateJobPriority(UpdateJobPriorityRequest $in): Awaitable<\Errors\Result<UpdateJobPriorityResult>>;
  public function UpdateJobStatus(UpdateJobStatusRequest $in): Awaitable<\Errors\Result<UpdateJobStatusResult>>;
}

class AccessPoint {
  public ?BucketName $bucket;
  public ?AccessPointName $name;
  public ?NetworkOrigin $network_origin;
  public ?VpcConfiguration $vpc_configuration;

  public function __construct(shape(
    ?'bucket' => ?BucketName,
    ?'name' => ?AccessPointName,
    ?'network_origin' => ?NetworkOrigin,
    ?'vpc_configuration' => ?VpcConfiguration,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->network_origin = $s['network_origin'] ?? '';
    $this->vpc_configuration = $s['vpc_configuration'] ?? null;
  }
}

type AccessPointList = vec<AccessPoint>;

type AccessPointName = string;

type AccountId = string;

class BadRequestException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Boolean = bool;

type BucketName = string;

type ConfirmationRequired = bool;

class CreateAccessPointRequest {
  public ?AccountId $account_id;
  public ?BucketName $bucket;
  public ?AccessPointName $name;
  public ?PublicAccessBlockConfiguration $public_access_block_configuration;
  public ?VpcConfiguration $vpc_configuration;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'bucket' => ?BucketName,
    ?'name' => ?AccessPointName,
    ?'public_access_block_configuration' => ?PublicAccessBlockConfiguration,
    ?'vpc_configuration' => ?VpcConfiguration,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->bucket = $s['bucket'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->public_access_block_configuration = $s['public_access_block_configuration'] ?? null;
    $this->vpc_configuration = $s['vpc_configuration'] ?? null;
  }
}

class CreateJobRequest {
  public ?AccountId $account_id;
  public ?NonEmptyMaxLength64String $client_request_token;
  public ?ConfirmationRequired $confirmation_required;
  public ?NonEmptyMaxLength256String $description;
  public ?JobManifest $manifest;
  public ?JobOperation $operation;
  public ?JobPriority $priority;
  public ?JobReport $report;
  public ?IAMRoleArn $role_arn;
  public ?S3TagSet $tags;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'client_request_token' => ?NonEmptyMaxLength64String,
    ?'confirmation_required' => ?ConfirmationRequired,
    ?'description' => ?NonEmptyMaxLength256String,
    ?'manifest' => ?JobManifest,
    ?'operation' => ?JobOperation,
    ?'priority' => ?JobPriority,
    ?'report' => ?JobReport,
    ?'role_arn' => ?IAMRoleArn,
    ?'tags' => ?S3TagSet,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->confirmation_required = $s['confirmation_required'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->manifest = $s['manifest'] ?? null;
    $this->operation = $s['operation'] ?? null;
    $this->priority = $s['priority'] ?? 0;
    $this->report = $s['report'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateJobResult {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

type CreationDate = int;

class DeleteAccessPointPolicyRequest {
  public ?AccountId $account_id;
  public ?AccessPointName $name;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'name' => ?AccessPointName,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DeleteAccessPointRequest {
  public ?AccountId $account_id;
  public ?AccessPointName $name;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'name' => ?AccessPointName,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DeleteJobTaggingRequest {
  public ?AccountId $account_id;
  public ?JobId $job_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class DeleteJobTaggingResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePublicAccessBlockRequest {
  public ?AccountId $account_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
  }
}

class DescribeJobRequest {
  public ?AccountId $account_id;
  public ?JobId $job_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class DescribeJobResult {
  public ?JobDescriptor $job;

  public function __construct(shape(
    ?'job' => ?JobDescriptor,
  ) $s = shape()) {
    $this->job = $s['job'] ?? null;
  }
}

type ExceptionMessage = string;

class GetAccessPointPolicyRequest {
  public ?AccountId $account_id;
  public ?AccessPointName $name;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'name' => ?AccessPointName,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GetAccessPointPolicyResult {
  public ?Policy $policy;

  public function __construct(shape(
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
  }
}

class GetAccessPointPolicyStatusRequest {
  public ?AccountId $account_id;
  public ?AccessPointName $name;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'name' => ?AccessPointName,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GetAccessPointPolicyStatusResult {
  public ?PolicyStatus $policy_status;

  public function __construct(shape(
    ?'policy_status' => ?PolicyStatus,
  ) $s = shape()) {
    $this->policy_status = $s['policy_status'] ?? null;
  }
}

class GetAccessPointRequest {
  public ?AccountId $account_id;
  public ?AccessPointName $name;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'name' => ?AccessPointName,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GetAccessPointResult {
  public ?BucketName $bucket;
  public ?CreationDate $creation_date;
  public ?AccessPointName $name;
  public ?NetworkOrigin $network_origin;
  public ?PublicAccessBlockConfiguration $public_access_block_configuration;
  public ?VpcConfiguration $vpc_configuration;

  public function __construct(shape(
    ?'bucket' => ?BucketName,
    ?'creation_date' => ?CreationDate,
    ?'name' => ?AccessPointName,
    ?'network_origin' => ?NetworkOrigin,
    ?'public_access_block_configuration' => ?PublicAccessBlockConfiguration,
    ?'vpc_configuration' => ?VpcConfiguration,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->network_origin = $s['network_origin'] ?? '';
    $this->public_access_block_configuration = $s['public_access_block_configuration'] ?? null;
    $this->vpc_configuration = $s['vpc_configuration'] ?? null;
  }
}

class GetJobTaggingRequest {
  public ?AccountId $account_id;
  public ?JobId $job_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetJobTaggingResult {
  public ?S3TagSet $tags;

  public function __construct(shape(
    ?'tags' => ?S3TagSet,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class GetPublicAccessBlockOutput {
  public ?PublicAccessBlockConfiguration $public_access_block_configuration;

  public function __construct(shape(
    ?'public_access_block_configuration' => ?PublicAccessBlockConfiguration,
  ) $s = shape()) {
    $this->public_access_block_configuration = $s['public_access_block_configuration'] ?? null;
  }
}

class GetPublicAccessBlockRequest {
  public ?AccountId $account_id;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
  }
}

type IAMRoleArn = string;

class IdempotencyException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InternalServiceException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IsPublic = bool;

type JobArn = string;

type JobCreationTime = int;

class JobDescriptor {
  public ?ConfirmationRequired $confirmation_required;
  public ?JobCreationTime $creation_time;
  public ?NonEmptyMaxLength256String $description;
  public ?JobFailureList $failure_reasons;
  public ?JobArn $job_arn;
  public ?JobId $job_id;
  public ?JobManifest $manifest;
  public ?JobOperation $operation;
  public ?JobPriority $priority;
  public ?JobProgressSummary $progress_summary;
  public ?JobReport $report;
  public ?IAMRoleArn $role_arn;
  public ?JobStatus $status;
  public ?JobStatusUpdateReason $status_update_reason;
  public ?SuspendedCause $suspended_cause;
  public ?SuspendedDate $suspended_date;
  public ?JobTerminationDate $termination_date;

  public function __construct(shape(
    ?'confirmation_required' => ?ConfirmationRequired,
    ?'creation_time' => ?JobCreationTime,
    ?'description' => ?NonEmptyMaxLength256String,
    ?'failure_reasons' => ?JobFailureList,
    ?'job_arn' => ?JobArn,
    ?'job_id' => ?JobId,
    ?'manifest' => ?JobManifest,
    ?'operation' => ?JobOperation,
    ?'priority' => ?JobPriority,
    ?'progress_summary' => ?JobProgressSummary,
    ?'report' => ?JobReport,
    ?'role_arn' => ?IAMRoleArn,
    ?'status' => ?JobStatus,
    ?'status_update_reason' => ?JobStatusUpdateReason,
    ?'suspended_cause' => ?SuspendedCause,
    ?'suspended_date' => ?SuspendedDate,
    ?'termination_date' => ?JobTerminationDate,
  ) $s = shape()) {
    $this->confirmation_required = $s['confirmation_required'] ?? false;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->failure_reasons = $s['failure_reasons'] ?? vec[];
    $this->job_arn = $s['job_arn'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->manifest = $s['manifest'] ?? null;
    $this->operation = $s['operation'] ?? null;
    $this->priority = $s['priority'] ?? 0;
    $this->progress_summary = $s['progress_summary'] ?? null;
    $this->report = $s['report'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_update_reason = $s['status_update_reason'] ?? '';
    $this->suspended_cause = $s['suspended_cause'] ?? '';
    $this->suspended_date = $s['suspended_date'] ?? 0;
    $this->termination_date = $s['termination_date'] ?? 0;
  }
}

class JobFailure {
  public ?JobFailureCode $failure_code;
  public ?JobFailureReason $failure_reason;

  public function __construct(shape(
    ?'failure_code' => ?JobFailureCode,
    ?'failure_reason' => ?JobFailureReason,
  ) $s = shape()) {
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
  }
}

type JobFailureCode = string;

type JobFailureList = vec<JobFailure>;

type JobFailureReason = string;

type JobId = string;

class JobListDescriptor {
  public ?JobCreationTime $creation_time;
  public ?NonEmptyMaxLength256String $description;
  public ?JobId $job_id;
  public ?OperationName $operation;
  public ?JobPriority $priority;
  public ?JobProgressSummary $progress_summary;
  public ?JobStatus $status;
  public ?JobTerminationDate $termination_date;

  public function __construct(shape(
    ?'creation_time' => ?JobCreationTime,
    ?'description' => ?NonEmptyMaxLength256String,
    ?'job_id' => ?JobId,
    ?'operation' => ?OperationName,
    ?'priority' => ?JobPriority,
    ?'progress_summary' => ?JobProgressSummary,
    ?'status' => ?JobStatus,
    ?'termination_date' => ?JobTerminationDate,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->operation = $s['operation'] ?? '';
    $this->priority = $s['priority'] ?? 0;
    $this->progress_summary = $s['progress_summary'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->termination_date = $s['termination_date'] ?? 0;
  }
}

type JobListDescriptorList = vec<JobListDescriptor>;

class JobManifest {
  public ?JobManifestLocation $location;
  public ?JobManifestSpec $spec;

  public function __construct(shape(
    ?'location' => ?JobManifestLocation,
    ?'spec' => ?JobManifestSpec,
  ) $s = shape()) {
    $this->location = $s['location'] ?? null;
    $this->spec = $s['spec'] ?? null;
  }
}

type JobManifestFieldList = vec<JobManifestFieldName>;

type JobManifestFieldName = string;

type JobManifestFormat = string;

class JobManifestLocation {
  public ?NonEmptyMaxLength1024String $e_tag;
  public ?S3KeyArnString $object_arn;
  public ?S3ObjectVersionId $object_version_id;

  public function __construct(shape(
    ?'e_tag' => ?NonEmptyMaxLength1024String,
    ?'object_arn' => ?S3KeyArnString,
    ?'object_version_id' => ?S3ObjectVersionId,
  ) $s = shape()) {
    $this->e_tag = $s['e_tag'] ?? '';
    $this->object_arn = $s['object_arn'] ?? '';
    $this->object_version_id = $s['object_version_id'] ?? '';
  }
}

class JobManifestSpec {
  public ?JobManifestFieldList $fields;
  public ?JobManifestFormat $format;

  public function __construct(shape(
    ?'fields' => ?JobManifestFieldList,
    ?'format' => ?JobManifestFormat,
  ) $s = shape()) {
    $this->fields = $s['fields'] ?? vec[];
    $this->format = $s['format'] ?? '';
  }
}

type JobNumberOfTasksFailed = int;

type JobNumberOfTasksSucceeded = int;

class JobOperation {
  public ?LambdaInvokeOperation $lambda_invoke;
  public ?S3InitiateRestoreObjectOperation $s_3_initiate_restore_object;
  public ?S3SetObjectAclOperation $s_3_put_object_acl;
  public ?S3CopyObjectOperation $s_3_put_object_copy;
  public ?S3SetObjectTaggingOperation $s_3_put_object_tagging;

  public function __construct(shape(
    ?'lambda_invoke' => ?LambdaInvokeOperation,
    ?'s_3_initiate_restore_object' => ?S3InitiateRestoreObjectOperation,
    ?'s_3_put_object_acl' => ?S3SetObjectAclOperation,
    ?'s_3_put_object_copy' => ?S3CopyObjectOperation,
    ?'s_3_put_object_tagging' => ?S3SetObjectTaggingOperation,
  ) $s = shape()) {
    $this->lambda_invoke = $s['lambda_invoke'] ?? null;
    $this->s_3_initiate_restore_object = $s['s_3_initiate_restore_object'] ?? null;
    $this->s_3_put_object_acl = $s['s_3_put_object_acl'] ?? null;
    $this->s_3_put_object_copy = $s['s_3_put_object_copy'] ?? null;
    $this->s_3_put_object_tagging = $s['s_3_put_object_tagging'] ?? null;
  }
}

type JobPriority = int;

class JobProgressSummary {
  public ?JobNumberOfTasksFailed $number_of_tasks_failed;
  public ?JobNumberOfTasksSucceeded $number_of_tasks_succeeded;
  public ?JobTotalNumberOfTasks $total_number_of_tasks;

  public function __construct(shape(
    ?'number_of_tasks_failed' => ?JobNumberOfTasksFailed,
    ?'number_of_tasks_succeeded' => ?JobNumberOfTasksSucceeded,
    ?'total_number_of_tasks' => ?JobTotalNumberOfTasks,
  ) $s = shape()) {
    $this->number_of_tasks_failed = $s['number_of_tasks_failed'] ?? 0;
    $this->number_of_tasks_succeeded = $s['number_of_tasks_succeeded'] ?? 0;
    $this->total_number_of_tasks = $s['total_number_of_tasks'] ?? 0;
  }
}

class JobReport {
  public ?S3BucketArnString $bucket;
  public bool $enabled;
  public ?JobReportFormat $format;
  public ?ReportPrefixString $prefix;
  public ?JobReportScope $report_scope;

  public function __construct(shape(
    ?'bucket' => ?S3BucketArnString,
    ?'enabled' => bool,
    ?'format' => ?JobReportFormat,
    ?'prefix' => ?ReportPrefixString,
    ?'report_scope' => ?JobReportScope,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->format = $s['format'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->report_scope = $s['report_scope'] ?? '';
  }
}

type JobReportFormat = string;

type JobReportScope = string;

type JobStatus = string;

class JobStatusException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type JobStatusList = vec<JobStatus>;

type JobStatusUpdateReason = string;

type JobTerminationDate = int;

type JobTotalNumberOfTasks = int;

type KmsKeyArnString = string;

class LambdaInvokeOperation {
  public ?NonEmptyMaxLength1024String $function_arn;

  public function __construct(shape(
    ?'function_arn' => ?NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->function_arn = $s['function_arn'] ?? '';
  }
}

class ListAccessPointsRequest {
  public ?AccountId $account_id;
  public ?BucketName $bucket;
  public ?MaxResults $max_results;
  public ?NonEmptyMaxLength1024String $next_token;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'bucket' => ?BucketName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->bucket = $s['bucket'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAccessPointsResult {
  public ?AccessPointList $access_point_list;
  public ?NonEmptyMaxLength1024String $next_token;

  public function __construct(shape(
    ?'access_point_list' => ?AccessPointList,
    ?'next_token' => ?NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->access_point_list = $s['access_point_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsRequest {
  public ?AccountId $account_id;
  public ?JobStatusList $job_statuses;
  public ?MaxResults $max_results;
  public ?NonEmptyMaxLength1024String $next_token;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'job_statuses' => ?JobStatusList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_statuses = $s['job_statuses'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsResult {
  public ?JobListDescriptorList $jobs;
  public ?NonEmptyMaxLength1024String $next_token;

  public function __construct(shape(
    ?'jobs' => ?JobListDescriptorList,
    ?'next_token' => ?NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->jobs = $s['jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type MaxLength1024String = string;

type MaxResults = int;

type NetworkOrigin = string;

class NoSuchPublicAccessBlockConfiguration {
  public ?NoSuchPublicAccessBlockConfigurationMessage $message;

  public function __construct(shape(
    ?'message' => ?NoSuchPublicAccessBlockConfigurationMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NoSuchPublicAccessBlockConfigurationMessage = string;

type NonEmptyMaxLength1024String = string;

type NonEmptyMaxLength2048String = string;

type NonEmptyMaxLength256String = string;

type NonEmptyMaxLength64String = string;

class NotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OperationName = string;

type Policy = string;

class PolicyStatus {
  public ?IsPublic $is_public;

  public function __construct(shape(
    ?'is_public' => ?IsPublic,
  ) $s = shape()) {
    $this->is_public = $s['is_public'] ?? false;
  }
}

class PublicAccessBlockConfiguration {
  public ?Setting $block_public_acls;
  public ?Setting $block_public_policy;
  public ?Setting $ignore_public_acls;
  public ?Setting $restrict_public_buckets;

  public function __construct(shape(
    ?'block_public_acls' => ?Setting,
    ?'block_public_policy' => ?Setting,
    ?'ignore_public_acls' => ?Setting,
    ?'restrict_public_buckets' => ?Setting,
  ) $s = shape()) {
    $this->block_public_acls = $s['block_public_acls'] ?? false;
    $this->block_public_policy = $s['block_public_policy'] ?? false;
    $this->ignore_public_acls = $s['ignore_public_acls'] ?? false;
    $this->restrict_public_buckets = $s['restrict_public_buckets'] ?? false;
  }
}

class PutAccessPointPolicyRequest {
  public ?AccountId $account_id;
  public ?AccessPointName $name;
  public ?Policy $policy;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'name' => ?AccessPointName,
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->policy = $s['policy'] ?? '';
  }
}

class PutJobTaggingRequest {
  public ?AccountId $account_id;
  public ?JobId $job_id;
  public ?S3TagSet $tags;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'job_id' => ?JobId,
    ?'tags' => ?S3TagSet,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class PutJobTaggingResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutPublicAccessBlockRequest {
  public ?AccountId $account_id;
  public ?PublicAccessBlockConfiguration $public_access_block_configuration;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'public_access_block_configuration' => ?PublicAccessBlockConfiguration,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->public_access_block_configuration = $s['public_access_block_configuration'] ?? null;
  }
}

type ReportPrefixString = string;

type RequestedJobStatus = string;

class S3AccessControlList {
  public ?S3GrantList $grants;
  public ?S3ObjectOwner $owner;

  public function __construct(shape(
    ?'grants' => ?S3GrantList,
    ?'owner' => ?S3ObjectOwner,
  ) $s = shape()) {
    $this->grants = $s['grants'] ?? vec[];
    $this->owner = $s['owner'] ?? null;
  }
}

class S3AccessControlPolicy {
  public ?S3AccessControlList $access_control_list;
  public ?S3CannedAccessControlList $canned_access_control_list;

  public function __construct(shape(
    ?'access_control_list' => ?S3AccessControlList,
    ?'canned_access_control_list' => ?S3CannedAccessControlList,
  ) $s = shape()) {
    $this->access_control_list = $s['access_control_list'] ?? null;
    $this->canned_access_control_list = $s['canned_access_control_list'] ?? '';
  }
}

type S3BucketArnString = string;

type S3CannedAccessControlList = string;

type S3ContentLength = int;

class S3CopyObjectOperation {
  public ?S3GrantList $access_control_grants;
  public ?S3CannedAccessControlList $canned_access_control_list;
  public ?S3MetadataDirective $metadata_directive;
  public ?TimeStamp $modified_since_constraint;
  public ?S3ObjectMetadata $new_object_metadata;
  public ?S3TagSet $new_object_tagging;
  public ?S3ObjectLockLegalHoldStatus $object_lock_legal_hold_status;
  public ?S3ObjectLockMode $object_lock_mode;
  public ?TimeStamp $object_lock_retain_until_date;
  public ?NonEmptyMaxLength2048String $redirect_location;
  public bool $requester_pays;
  public ?KmsKeyArnString $sse_aws_kms_key_id;
  public ?S3StorageClass $storage_class;
  public ?NonEmptyMaxLength1024String $target_key_prefix;
  public ?S3BucketArnString $target_resource;
  public ?TimeStamp $un_modified_since_constraint;

  public function __construct(shape(
    ?'access_control_grants' => ?S3GrantList,
    ?'canned_access_control_list' => ?S3CannedAccessControlList,
    ?'metadata_directive' => ?S3MetadataDirective,
    ?'modified_since_constraint' => ?TimeStamp,
    ?'new_object_metadata' => ?S3ObjectMetadata,
    ?'new_object_tagging' => ?S3TagSet,
    ?'object_lock_legal_hold_status' => ?S3ObjectLockLegalHoldStatus,
    ?'object_lock_mode' => ?S3ObjectLockMode,
    ?'object_lock_retain_until_date' => ?TimeStamp,
    ?'redirect_location' => ?NonEmptyMaxLength2048String,
    ?'requester_pays' => bool,
    ?'sse_aws_kms_key_id' => ?KmsKeyArnString,
    ?'storage_class' => ?S3StorageClass,
    ?'target_key_prefix' => ?NonEmptyMaxLength1024String,
    ?'target_resource' => ?S3BucketArnString,
    ?'un_modified_since_constraint' => ?TimeStamp,
  ) $s = shape()) {
    $this->access_control_grants = $s['access_control_grants'] ?? vec[];
    $this->canned_access_control_list = $s['canned_access_control_list'] ?? '';
    $this->metadata_directive = $s['metadata_directive'] ?? '';
    $this->modified_since_constraint = $s['modified_since_constraint'] ?? 0;
    $this->new_object_metadata = $s['new_object_metadata'] ?? null;
    $this->new_object_tagging = $s['new_object_tagging'] ?? vec[];
    $this->object_lock_legal_hold_status = $s['object_lock_legal_hold_status'] ?? '';
    $this->object_lock_mode = $s['object_lock_mode'] ?? '';
    $this->object_lock_retain_until_date = $s['object_lock_retain_until_date'] ?? 0;
    $this->redirect_location = $s['redirect_location'] ?? '';
    $this->requester_pays = $s['requester_pays'] ?? false;
    $this->sse_aws_kms_key_id = $s['sse_aws_kms_key_id'] ?? '';
    $this->storage_class = $s['storage_class'] ?? '';
    $this->target_key_prefix = $s['target_key_prefix'] ?? '';
    $this->target_resource = $s['target_resource'] ?? '';
    $this->un_modified_since_constraint = $s['un_modified_since_constraint'] ?? 0;
  }
}

type S3ExpirationInDays = int;

type S3GlacierJobTier = string;

class S3Grant {
  public ?S3Grantee $grantee;
  public ?S3Permission $permission;

  public function __construct(shape(
    ?'grantee' => ?S3Grantee,
    ?'permission' => ?S3Permission,
  ) $s = shape()) {
    $this->grantee = $s['grantee'] ?? null;
    $this->permission = $s['permission'] ?? '';
  }
}

type S3GrantList = vec<S3Grant>;

class S3Grantee {
  public ?NonEmptyMaxLength1024String $display_name;
  public ?NonEmptyMaxLength1024String $identifier;
  public ?S3GranteeTypeIdentifier $type_identifier;

  public function __construct(shape(
    ?'display_name' => ?NonEmptyMaxLength1024String,
    ?'identifier' => ?NonEmptyMaxLength1024String,
    ?'type_identifier' => ?S3GranteeTypeIdentifier,
  ) $s = shape()) {
    $this->display_name = $s['display_name'] ?? '';
    $this->identifier = $s['identifier'] ?? '';
    $this->type_identifier = $s['type_identifier'] ?? '';
  }
}

type S3GranteeTypeIdentifier = string;

class S3InitiateRestoreObjectOperation {
  public ?S3ExpirationInDays $expiration_in_days;
  public ?S3GlacierJobTier $glacier_job_tier;

  public function __construct(shape(
    ?'expiration_in_days' => ?S3ExpirationInDays,
    ?'glacier_job_tier' => ?S3GlacierJobTier,
  ) $s = shape()) {
    $this->expiration_in_days = $s['expiration_in_days'] ?? 0;
    $this->glacier_job_tier = $s['glacier_job_tier'] ?? '';
  }
}

type S3KeyArnString = string;

type S3MetadataDirective = string;

type S3ObjectLockLegalHoldStatus = string;

type S3ObjectLockMode = string;

class S3ObjectMetadata {
  public ?NonEmptyMaxLength1024String $cache_control;
  public ?NonEmptyMaxLength1024String $content_disposition;
  public ?NonEmptyMaxLength1024String $content_encoding;
  public ?NonEmptyMaxLength1024String $content_language;
  public ?S3ContentLength $content_length;
  public ?NonEmptyMaxLength1024String $content_md_5;
  public ?NonEmptyMaxLength1024String $content_type;
  public ?TimeStamp $http_expires_date;
  public bool $requester_charged;
  public ?S3SSEAlgorithm $sse_algorithm;
  public ?S3UserMetadata $user_metadata;

  public function __construct(shape(
    ?'cache_control' => ?NonEmptyMaxLength1024String,
    ?'content_disposition' => ?NonEmptyMaxLength1024String,
    ?'content_encoding' => ?NonEmptyMaxLength1024String,
    ?'content_language' => ?NonEmptyMaxLength1024String,
    ?'content_length' => ?S3ContentLength,
    ?'content_md_5' => ?NonEmptyMaxLength1024String,
    ?'content_type' => ?NonEmptyMaxLength1024String,
    ?'http_expires_date' => ?TimeStamp,
    ?'requester_charged' => bool,
    ?'sse_algorithm' => ?S3SSEAlgorithm,
    ?'user_metadata' => ?S3UserMetadata,
  ) $s = shape()) {
    $this->cache_control = $s['cache_control'] ?? '';
    $this->content_disposition = $s['content_disposition'] ?? '';
    $this->content_encoding = $s['content_encoding'] ?? '';
    $this->content_language = $s['content_language'] ?? '';
    $this->content_length = $s['content_length'] ?? 0;
    $this->content_md_5 = $s['content_md_5'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->http_expires_date = $s['http_expires_date'] ?? 0;
    $this->requester_charged = $s['requester_charged'] ?? false;
    $this->sse_algorithm = $s['sse_algorithm'] ?? '';
    $this->user_metadata = $s['user_metadata'] ?? dict[];
  }
}

class S3ObjectOwner {
  public ?NonEmptyMaxLength1024String $display_name;
  public ?NonEmptyMaxLength1024String $id;

  public function __construct(shape(
    ?'display_name' => ?NonEmptyMaxLength1024String,
    ?'id' => ?NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->display_name = $s['display_name'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

type S3ObjectVersionId = string;

type S3Permission = string;

type S3SSEAlgorithm = string;

class S3SetObjectAclOperation {
  public ?S3AccessControlPolicy $access_control_policy;

  public function __construct(shape(
    ?'access_control_policy' => ?S3AccessControlPolicy,
  ) $s = shape()) {
    $this->access_control_policy = $s['access_control_policy'] ?? null;
  }
}

class S3SetObjectTaggingOperation {
  public ?S3TagSet $tag_set;

  public function __construct(shape(
    ?'tag_set' => ?S3TagSet,
  ) $s = shape()) {
    $this->tag_set = $s['tag_set'] ?? vec[];
  }
}

type S3StorageClass = string;

class S3Tag {
  public ?NonEmptyMaxLength1024String $key;
  public ?MaxLength1024String $value;

  public function __construct(shape(
    ?'key' => ?NonEmptyMaxLength1024String,
    ?'value' => ?MaxLength1024String,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type S3TagSet = vec<S3Tag>;

type S3UserMetadata = dict<NonEmptyMaxLength1024String, MaxLength1024String>;

type Setting = bool;

type SuspendedCause = string;

type SuspendedDate = int;

type TimeStamp = int;

class TooManyRequestsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TooManyTagsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateJobPriorityRequest {
  public ?AccountId $account_id;
  public ?JobId $job_id;
  public ?JobPriority $priority;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'job_id' => ?JobId,
    ?'priority' => ?JobPriority,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->priority = $s['priority'] ?? 0;
  }
}

class UpdateJobPriorityResult {
  public ?JobId $job_id;
  public ?JobPriority $priority;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'priority' => ?JobPriority,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->priority = $s['priority'] ?? 0;
  }
}

class UpdateJobStatusRequest {
  public ?AccountId $account_id;
  public ?JobId $job_id;
  public ?RequestedJobStatus $requested_job_status;
  public ?JobStatusUpdateReason $status_update_reason;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'job_id' => ?JobId,
    ?'requested_job_status' => ?RequestedJobStatus,
    ?'status_update_reason' => ?JobStatusUpdateReason,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->requested_job_status = $s['requested_job_status'] ?? '';
    $this->status_update_reason = $s['status_update_reason'] ?? '';
  }
}

class UpdateJobStatusResult {
  public ?JobId $job_id;
  public ?JobStatus $status;
  public ?JobStatusUpdateReason $status_update_reason;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'status' => ?JobStatus,
    ?'status_update_reason' => ?JobStatusUpdateReason,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_update_reason = $s['status_update_reason'] ?? '';
  }
}

class VpcConfiguration {
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type VpcId = string;

