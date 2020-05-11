<?hh // strict
namespace slack\aws\s3-control;

interface S3 Control {
  public function CreateAccessPoint(CreateAccessPointRequest): Awaitable<Errors\Error>;
  public function CreateJob(CreateJobRequest): Awaitable<Errors\Result<CreateJobResult>>;
  public function DeleteAccessPoint(DeleteAccessPointRequest): Awaitable<Errors\Error>;
  public function DeleteAccessPointPolicy(DeleteAccessPointPolicyRequest): Awaitable<Errors\Error>;
  public function DeleteJobTagging(DeleteJobTaggingRequest): Awaitable<Errors\Result<DeleteJobTaggingResult>>;
  public function DeletePublicAccessBlock(DeletePublicAccessBlockRequest): Awaitable<Errors\Error>;
  public function DescribeJob(DescribeJobRequest): Awaitable<Errors\Result<DescribeJobResult>>;
  public function GetAccessPoint(GetAccessPointRequest): Awaitable<Errors\Result<GetAccessPointResult>>;
  public function GetAccessPointPolicy(GetAccessPointPolicyRequest): Awaitable<Errors\Result<GetAccessPointPolicyResult>>;
  public function GetAccessPointPolicyStatus(GetAccessPointPolicyStatusRequest): Awaitable<Errors\Result<GetAccessPointPolicyStatusResult>>;
  public function GetJobTagging(GetJobTaggingRequest): Awaitable<Errors\Result<GetJobTaggingResult>>;
  public function GetPublicAccessBlock(GetPublicAccessBlockRequest): Awaitable<Errors\Result<GetPublicAccessBlockOutput>>;
  public function ListAccessPoints(ListAccessPointsRequest): Awaitable<Errors\Result<ListAccessPointsResult>>;
  public function ListJobs(ListJobsRequest): Awaitable<Errors\Result<ListJobsResult>>;
  public function PutAccessPointPolicy(PutAccessPointPolicyRequest): Awaitable<Errors\Error>;
  public function PutJobTagging(PutJobTaggingRequest): Awaitable<Errors\Result<PutJobTaggingResult>>;
  public function PutPublicAccessBlock(PutPublicAccessBlockRequest): Awaitable<Errors\Error>;
  public function UpdateJobPriority(UpdateJobPriorityRequest): Awaitable<Errors\Result<UpdateJobPriorityResult>>;
  public function UpdateJobStatus(UpdateJobStatusRequest): Awaitable<Errors\Result<UpdateJobStatusResult>>;
}

class AccessPoint {
  public BucketName $bucket;
  public AccessPointName $name;
  public NetworkOrigin $network_origin;
  public VpcConfiguration $vpc_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'name' => AccessPointName,
  ?'network_origin' => NetworkOrigin,
  ?'vpc_configuration' => VpcConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->name = $name ?? ;
    $this->network_origin = $network_origin ?? "";
    $this->vpc_configuration = $vpc_configuration ?? null;
  }
}

type AccessPointList = vec<AccessPoint>;

type AccessPointName = string;

type AccountId = string;

class BadRequestException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Boolean = bool;

type BucketName = string;

type ConfirmationRequired = bool;

class CreateAccessPointRequest {
  public AccountId $account_id;
  public BucketName $bucket;
  public AccessPointName $name;
  public PublicAccessBlockConfiguration $public_access_block_configuration;
  public VpcConfiguration $vpc_configuration;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'bucket' => BucketName,
  ?'name' => AccessPointName,
  ?'public_access_block_configuration' => PublicAccessBlockConfiguration,
  ?'vpc_configuration' => VpcConfiguration,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bucket = $bucket ?? ;
    $this->name = $name ?? ;
    $this->public_access_block_configuration = $public_access_block_configuration ?? null;
    $this->vpc_configuration = $vpc_configuration ?? null;
  }
}

class CreateJobRequest {
  public AccountId $account_id;
  public NonEmptyMaxLength64String $client_request_token;
  public ConfirmationRequired $confirmation_required;
  public NonEmptyMaxLength256String $description;
  public JobManifest $manifest;
  public JobOperation $operation;
  public JobPriority $priority;
  public JobReport $report;
  public IAMRoleArn $role_arn;
  public S3TagSet $tags;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'client_request_token' => NonEmptyMaxLength64String,
  ?'confirmation_required' => ConfirmationRequired,
  ?'description' => NonEmptyMaxLength256String,
  ?'manifest' => JobManifest,
  ?'operation' => JobOperation,
  ?'priority' => JobPriority,
  ?'report' => JobReport,
  ?'role_arn' => IAMRoleArn,
  ?'tags' => S3TagSet,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->client_request_token = $client_request_token ?? ;
    $this->confirmation_required = $confirmation_required ?? false;
    $this->description = $description ?? ;
    $this->manifest = $manifest ?? ;
    $this->operation = $operation ?? ;
    $this->priority = $priority ?? ;
    $this->report = $report ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateJobResult {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

type CreationDate = int;

class DeleteAccessPointPolicyRequest {
  public AccountId $account_id;
  public AccessPointName $name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'name' => AccessPointName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->name = $name ?? ;
  }
}

class DeleteAccessPointRequest {
  public AccountId $account_id;
  public AccessPointName $name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'name' => AccessPointName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->name = $name ?? ;
  }
}

class DeleteJobTaggingRequest {
  public AccountId $account_id;
  public JobId $job_id;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->job_id = $job_id ?? "";
  }
}

class DeleteJobTaggingResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePublicAccessBlockRequest {
  public AccountId $account_id;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
  }
}

class DescribeJobRequest {
  public AccountId $account_id;
  public JobId $job_id;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->job_id = $job_id ?? "";
  }
}

class DescribeJobResult {
  public JobDescriptor $job;

  public function __construct(shape(
  ?'job' => JobDescriptor,
  ) $s = shape()) {
    $this->job = $job ?? ;
  }
}

type ExceptionMessage = string;

class GetAccessPointPolicyRequest {
  public AccountId $account_id;
  public AccessPointName $name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'name' => AccessPointName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->name = $name ?? ;
  }
}

class GetAccessPointPolicyResult {
  public Policy $policy;

  public function __construct(shape(
  ?'policy' => Policy,
  ) $s = shape()) {
    $this->policy = $policy ?? "";
  }
}

class GetAccessPointPolicyStatusRequest {
  public AccountId $account_id;
  public AccessPointName $name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'name' => AccessPointName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->name = $name ?? ;
  }
}

class GetAccessPointPolicyStatusResult {
  public PolicyStatus $policy_status;

  public function __construct(shape(
  ?'policy_status' => PolicyStatus,
  ) $s = shape()) {
    $this->policy_status = $policy_status ?? null;
  }
}

class GetAccessPointRequest {
  public AccountId $account_id;
  public AccessPointName $name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'name' => AccessPointName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->name = $name ?? ;
  }
}

class GetAccessPointResult {
  public BucketName $bucket;
  public CreationDate $creation_date;
  public AccessPointName $name;
  public NetworkOrigin $network_origin;
  public PublicAccessBlockConfiguration $public_access_block_configuration;
  public VpcConfiguration $vpc_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'creation_date' => CreationDate,
  ?'name' => AccessPointName,
  ?'network_origin' => NetworkOrigin,
  ?'public_access_block_configuration' => PublicAccessBlockConfiguration,
  ?'vpc_configuration' => VpcConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->creation_date = $creation_date ?? 0;
    $this->name = $name ?? ;
    $this->network_origin = $network_origin ?? "";
    $this->public_access_block_configuration = $public_access_block_configuration ?? null;
    $this->vpc_configuration = $vpc_configuration ?? null;
  }
}

class GetJobTaggingRequest {
  public AccountId $account_id;
  public JobId $job_id;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->job_id = $job_id ?? "";
  }
}

class GetJobTaggingResult {
  public S3TagSet $tags;

  public function __construct(shape(
  ?'tags' => S3TagSet,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

class GetPublicAccessBlockOutput {
  public PublicAccessBlockConfiguration $public_access_block_configuration;

  public function __construct(shape(
  ?'public_access_block_configuration' => PublicAccessBlockConfiguration,
  ) $s = shape()) {
    $this->public_access_block_configuration = $public_access_block_configuration ?? null;
  }
}

class GetPublicAccessBlockRequest {
  public AccountId $account_id;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
  }
}

type IAMRoleArn = string;

class IdempotencyException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InternalServiceException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidNextTokenException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type IsPublic = bool;

type JobArn = string;

type JobCreationTime = int;

class JobDescriptor {
  public ConfirmationRequired $confirmation_required;
  public JobCreationTime $creation_time;
  public NonEmptyMaxLength256String $description;
  public JobFailureList $failure_reasons;
  public JobArn $job_arn;
  public JobId $job_id;
  public JobManifest $manifest;
  public JobOperation $operation;
  public JobPriority $priority;
  public JobProgressSummary $progress_summary;
  public JobReport $report;
  public IAMRoleArn $role_arn;
  public JobStatus $status;
  public JobStatusUpdateReason $status_update_reason;
  public SuspendedCause $suspended_cause;
  public SuspendedDate $suspended_date;
  public JobTerminationDate $termination_date;

  public function __construct(shape(
  ?'confirmation_required' => ConfirmationRequired,
  ?'creation_time' => JobCreationTime,
  ?'description' => NonEmptyMaxLength256String,
  ?'failure_reasons' => JobFailureList,
  ?'job_arn' => JobArn,
  ?'job_id' => JobId,
  ?'manifest' => JobManifest,
  ?'operation' => JobOperation,
  ?'priority' => JobPriority,
  ?'progress_summary' => JobProgressSummary,
  ?'report' => JobReport,
  ?'role_arn' => IAMRoleArn,
  ?'status' => JobStatus,
  ?'status_update_reason' => JobStatusUpdateReason,
  ?'suspended_cause' => SuspendedCause,
  ?'suspended_date' => SuspendedDate,
  ?'termination_date' => JobTerminationDate,
  ) $s = shape()) {
    $this->confirmation_required = $confirmation_required ?? false;
    $this->creation_time = $creation_time ?? ;
    $this->description = $description ?? ;
    $this->failure_reasons = $failure_reasons ?? ;
    $this->job_arn = $job_arn ?? "";
    $this->job_id = $job_id ?? "";
    $this->manifest = $manifest ?? ;
    $this->operation = $operation ?? ;
    $this->priority = $priority ?? ;
    $this->progress_summary = $progress_summary ?? ;
    $this->report = $report ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->status = $status ?? ;
    $this->status_update_reason = $status_update_reason ?? ;
    $this->suspended_cause = $suspended_cause ?? "";
    $this->suspended_date = $suspended_date ?? 0;
    $this->termination_date = $termination_date ?? ;
  }
}

class JobFailure {
  public JobFailureCode $failure_code;
  public JobFailureReason $failure_reason;

  public function __construct(shape(
  ?'failure_code' => JobFailureCode,
  ?'failure_reason' => JobFailureReason,
  ) $s = shape()) {
    $this->failure_code = $failure_code ?? ;
    $this->failure_reason = $failure_reason ?? ;
  }
}

type JobFailureCode = string;

type JobFailureList = vec<JobFailure>;

type JobFailureReason = string;

type JobId = string;

class JobListDescriptor {
  public JobCreationTime $creation_time;
  public NonEmptyMaxLength256String $description;
  public JobId $job_id;
  public OperationName $operation;
  public JobPriority $priority;
  public JobProgressSummary $progress_summary;
  public JobStatus $status;
  public JobTerminationDate $termination_date;

  public function __construct(shape(
  ?'creation_time' => JobCreationTime,
  ?'description' => NonEmptyMaxLength256String,
  ?'job_id' => JobId,
  ?'operation' => OperationName,
  ?'priority' => JobPriority,
  ?'progress_summary' => JobProgressSummary,
  ?'status' => JobStatus,
  ?'termination_date' => JobTerminationDate,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->description = $description ?? ;
    $this->job_id = $job_id ?? "";
    $this->operation = $operation ?? ;
    $this->priority = $priority ?? ;
    $this->progress_summary = $progress_summary ?? ;
    $this->status = $status ?? ;
    $this->termination_date = $termination_date ?? ;
  }
}

type JobListDescriptorList = vec<JobListDescriptor>;

class JobManifest {
  public JobManifestLocation $location;
  public JobManifestSpec $spec;

  public function __construct(shape(
  ?'location' => JobManifestLocation,
  ?'spec' => JobManifestSpec,
  ) $s = shape()) {
    $this->location = $location ?? ;
    $this->spec = $spec ?? ;
  }
}

type JobManifestFieldList = vec<JobManifestFieldName>;

type JobManifestFieldName = string;

type JobManifestFormat = string;

class JobManifestLocation {
  public NonEmptyMaxLength1024String $e_tag;
  public S3KeyArnString $object_arn;
  public S3ObjectVersionId $object_version_id;

  public function __construct(shape(
  ?'e_tag' => NonEmptyMaxLength1024String,
  ?'object_arn' => S3KeyArnString,
  ?'object_version_id' => S3ObjectVersionId,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? ;
    $this->object_arn = $object_arn ?? ;
    $this->object_version_id = $object_version_id ?? ;
  }
}

class JobManifestSpec {
  public JobManifestFieldList $fields;
  public JobManifestFormat $format;

  public function __construct(shape(
  ?'fields' => JobManifestFieldList,
  ?'format' => JobManifestFormat,
  ) $s = shape()) {
    $this->fields = $fields ?? ;
    $this->format = $format ?? ;
  }
}

type JobNumberOfTasksFailed = int;

type JobNumberOfTasksSucceeded = int;

class JobOperation {
  public LambdaInvokeOperation $lambda_invoke;
  public S3InitiateRestoreObjectOperation $s_3_initiate_restore_object;
  public S3SetObjectAclOperation $s_3_put_object_acl;
  public S3CopyObjectOperation $s_3_put_object_copy;
  public S3SetObjectTaggingOperation $s_3_put_object_tagging;

  public function __construct(shape(
  ?'lambda_invoke' => LambdaInvokeOperation,
  ?'s_3_initiate_restore_object' => S3InitiateRestoreObjectOperation,
  ?'s_3_put_object_acl' => S3SetObjectAclOperation,
  ?'s_3_put_object_copy' => S3CopyObjectOperation,
  ?'s_3_put_object_tagging' => S3SetObjectTaggingOperation,
  ) $s = shape()) {
    $this->lambda_invoke = $lambda_invoke ?? ;
    $this->s_3_initiate_restore_object = $s_3_initiate_restore_object ?? ;
    $this->s_3_put_object_acl = $s_3_put_object_acl ?? ;
    $this->s_3_put_object_copy = $s_3_put_object_copy ?? ;
    $this->s_3_put_object_tagging = $s_3_put_object_tagging ?? ;
  }
}

type JobPriority = int;

class JobProgressSummary {
  public JobNumberOfTasksFailed $number_of_tasks_failed;
  public JobNumberOfTasksSucceeded $number_of_tasks_succeeded;
  public JobTotalNumberOfTasks $total_number_of_tasks;

  public function __construct(shape(
  ?'number_of_tasks_failed' => JobNumberOfTasksFailed,
  ?'number_of_tasks_succeeded' => JobNumberOfTasksSucceeded,
  ?'total_number_of_tasks' => JobTotalNumberOfTasks,
  ) $s = shape()) {
    $this->number_of_tasks_failed = $number_of_tasks_failed ?? ;
    $this->number_of_tasks_succeeded = $number_of_tasks_succeeded ?? ;
    $this->total_number_of_tasks = $total_number_of_tasks ?? ;
  }
}

class JobReport {
  public S3BucketArnString $bucket;
  public boolean $enabled;
  public JobReportFormat $format;
  public ReportPrefixString $prefix;
  public JobReportScope $report_scope;

  public function __construct(shape(
  ?'bucket' => S3BucketArnString,
  ?'enabled' => boolean,
  ?'format' => JobReportFormat,
  ?'prefix' => ReportPrefixString,
  ?'report_scope' => JobReportScope,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->enabled = $enabled ?? ;
    $this->format = $format ?? ;
    $this->prefix = $prefix ?? ;
    $this->report_scope = $report_scope ?? ;
  }
}

type JobReportFormat = string;

type JobReportScope = string;

type JobStatus = string;

class JobStatusException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type JobStatusList = vec<JobStatus>;

type JobStatusUpdateReason = string;

type JobTerminationDate = int;

type JobTotalNumberOfTasks = int;

type KmsKeyArnString = string;

class LambdaInvokeOperation {
  public NonEmptyMaxLength1024String $function_arn;

  public function __construct(shape(
  ?'function_arn' => NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->function_arn = $function_arn ?? ;
  }
}

class ListAccessPointsRequest {
  public AccountId $account_id;
  public BucketName $bucket;
  public MaxResults $max_results;
  public NonEmptyMaxLength1024String $next_token;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'bucket' => BucketName,
  ?'max_results' => MaxResults,
  ?'next_token' => NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bucket = $bucket ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListAccessPointsResult {
  public AccessPointList $access_point_list;
  public NonEmptyMaxLength1024String $next_token;

  public function __construct(shape(
  ?'access_point_list' => AccessPointList,
  ?'next_token' => NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->access_point_list = $access_point_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListJobsRequest {
  public AccountId $account_id;
  public JobStatusList $job_statuses;
  public MaxResults $max_results;
  public NonEmptyMaxLength1024String $next_token;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'job_statuses' => JobStatusList,
  ?'max_results' => MaxResults,
  ?'next_token' => NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->job_statuses = $job_statuses ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListJobsResult {
  public JobListDescriptorList $jobs;
  public NonEmptyMaxLength1024String $next_token;

  public function __construct(shape(
  ?'jobs' => JobListDescriptorList,
  ?'next_token' => NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->jobs = $jobs ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type MaxLength1024String = string;

type MaxResults = int;

type NetworkOrigin = string;

class NoSuchPublicAccessBlockConfiguration {
  public NoSuchPublicAccessBlockConfigurationMessage $message;

  public function __construct(shape(
  ?'message' => NoSuchPublicAccessBlockConfigurationMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type NoSuchPublicAccessBlockConfigurationMessage = string;

type NonEmptyMaxLength1024String = string;

type NonEmptyMaxLength2048String = string;

type NonEmptyMaxLength256String = string;

type NonEmptyMaxLength64String = string;

class NotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OperationName = string;

type Policy = string;

class PolicyStatus {
  public IsPublic $is_public;

  public function __construct(shape(
  ?'is_public' => IsPublic,
  ) $s = shape()) {
    $this->is_public = $is_public ?? false;
  }
}

class PublicAccessBlockConfiguration {
  public Setting $block_public_acls;
  public Setting $block_public_policy;
  public Setting $ignore_public_acls;
  public Setting $restrict_public_buckets;

  public function __construct(shape(
  ?'block_public_acls' => Setting,
  ?'block_public_policy' => Setting,
  ?'ignore_public_acls' => Setting,
  ?'restrict_public_buckets' => Setting,
  ) $s = shape()) {
    $this->block_public_acls = $block_public_acls ?? ;
    $this->block_public_policy = $block_public_policy ?? ;
    $this->ignore_public_acls = $ignore_public_acls ?? ;
    $this->restrict_public_buckets = $restrict_public_buckets ?? ;
  }
}

class PutAccessPointPolicyRequest {
  public AccountId $account_id;
  public AccessPointName $name;
  public Policy $policy;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'name' => AccessPointName,
  ?'policy' => Policy,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->name = $name ?? ;
    $this->policy = $policy ?? "";
  }
}

class PutJobTaggingRequest {
  public AccountId $account_id;
  public JobId $job_id;
  public S3TagSet $tags;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'job_id' => JobId,
  ?'tags' => S3TagSet,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->job_id = $job_id ?? "";
    $this->tags = $tags ?? ;
  }
}

class PutJobTaggingResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutPublicAccessBlockRequest {
  public AccountId $account_id;
  public PublicAccessBlockConfiguration $public_access_block_configuration;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'public_access_block_configuration' => PublicAccessBlockConfiguration,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->public_access_block_configuration = $public_access_block_configuration ?? null;
  }
}

type ReportPrefixString = string;

type RequestedJobStatus = string;

class S3AccessControlList {
  public S3GrantList $grants;
  public S3ObjectOwner $owner;

  public function __construct(shape(
  ?'grants' => S3GrantList,
  ?'owner' => S3ObjectOwner,
  ) $s = shape()) {
    $this->grants = $grants ?? ;
    $this->owner = $owner ?? ;
  }
}

class S3AccessControlPolicy {
  public S3AccessControlList $access_control_list;
  public S3CannedAccessControlList $canned_access_control_list;

  public function __construct(shape(
  ?'access_control_list' => S3AccessControlList,
  ?'canned_access_control_list' => S3CannedAccessControlList,
  ) $s = shape()) {
    $this->access_control_list = $access_control_list ?? ;
    $this->canned_access_control_list = $canned_access_control_list ?? ;
  }
}

type S3BucketArnString = string;

type S3CannedAccessControlList = string;

type S3ContentLength = int;

class S3CopyObjectOperation {
  public S3GrantList $access_control_grants;
  public S3CannedAccessControlList $canned_access_control_list;
  public S3MetadataDirective $metadata_directive;
  public TimeStamp $modified_since_constraint;
  public S3ObjectMetadata $new_object_metadata;
  public S3TagSet $new_object_tagging;
  public S3ObjectLockLegalHoldStatus $object_lock_legal_hold_status;
  public S3ObjectLockMode $object_lock_mode;
  public TimeStamp $object_lock_retain_until_date;
  public NonEmptyMaxLength2048String $redirect_location;
  public boolean $requester_pays;
  public KmsKeyArnString $sse_aws_kms_key_id;
  public S3StorageClass $storage_class;
  public NonEmptyMaxLength1024String $target_key_prefix;
  public S3BucketArnString $target_resource;
  public TimeStamp $un_modified_since_constraint;

  public function __construct(shape(
  ?'access_control_grants' => S3GrantList,
  ?'canned_access_control_list' => S3CannedAccessControlList,
  ?'metadata_directive' => S3MetadataDirective,
  ?'modified_since_constraint' => TimeStamp,
  ?'new_object_metadata' => S3ObjectMetadata,
  ?'new_object_tagging' => S3TagSet,
  ?'object_lock_legal_hold_status' => S3ObjectLockLegalHoldStatus,
  ?'object_lock_mode' => S3ObjectLockMode,
  ?'object_lock_retain_until_date' => TimeStamp,
  ?'redirect_location' => NonEmptyMaxLength2048String,
  ?'requester_pays' => boolean,
  ?'sse_aws_kms_key_id' => KmsKeyArnString,
  ?'storage_class' => S3StorageClass,
  ?'target_key_prefix' => NonEmptyMaxLength1024String,
  ?'target_resource' => S3BucketArnString,
  ?'un_modified_since_constraint' => TimeStamp,
  ) $s = shape()) {
    $this->access_control_grants = $access_control_grants ?? ;
    $this->canned_access_control_list = $canned_access_control_list ?? ;
    $this->metadata_directive = $metadata_directive ?? ;
    $this->modified_since_constraint = $modified_since_constraint ?? ;
    $this->new_object_metadata = $new_object_metadata ?? ;
    $this->new_object_tagging = $new_object_tagging ?? ;
    $this->object_lock_legal_hold_status = $object_lock_legal_hold_status ?? ;
    $this->object_lock_mode = $object_lock_mode ?? ;
    $this->object_lock_retain_until_date = $object_lock_retain_until_date ?? ;
    $this->redirect_location = $redirect_location ?? ;
    $this->requester_pays = $requester_pays ?? ;
    $this->sse_aws_kms_key_id = $sse_aws_kms_key_id ?? ;
    $this->storage_class = $storage_class ?? ;
    $this->target_key_prefix = $target_key_prefix ?? ;
    $this->target_resource = $target_resource ?? ;
    $this->un_modified_since_constraint = $un_modified_since_constraint ?? ;
  }
}

type S3ExpirationInDays = int;

type S3GlacierJobTier = string;

class S3Grant {
  public S3Grantee $grantee;
  public S3Permission $permission;

  public function __construct(shape(
  ?'grantee' => S3Grantee,
  ?'permission' => S3Permission,
  ) $s = shape()) {
    $this->grantee = $grantee ?? ;
    $this->permission = $permission ?? ;
  }
}

type S3GrantList = vec<S3Grant>;

class S3Grantee {
  public NonEmptyMaxLength1024String $display_name;
  public NonEmptyMaxLength1024String $identifier;
  public S3GranteeTypeIdentifier $type_identifier;

  public function __construct(shape(
  ?'display_name' => NonEmptyMaxLength1024String,
  ?'identifier' => NonEmptyMaxLength1024String,
  ?'type_identifier' => S3GranteeTypeIdentifier,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->identifier = $identifier ?? ;
    $this->type_identifier = $type_identifier ?? ;
  }
}

type S3GranteeTypeIdentifier = string;

class S3InitiateRestoreObjectOperation {
  public S3ExpirationInDays $expiration_in_days;
  public S3GlacierJobTier $glacier_job_tier;

  public function __construct(shape(
  ?'expiration_in_days' => S3ExpirationInDays,
  ?'glacier_job_tier' => S3GlacierJobTier,
  ) $s = shape()) {
    $this->expiration_in_days = $expiration_in_days ?? ;
    $this->glacier_job_tier = $glacier_job_tier ?? ;
  }
}

type S3KeyArnString = string;

type S3MetadataDirective = string;

type S3ObjectLockLegalHoldStatus = string;

type S3ObjectLockMode = string;

class S3ObjectMetadata {
  public NonEmptyMaxLength1024String $cache_control;
  public NonEmptyMaxLength1024String $content_disposition;
  public NonEmptyMaxLength1024String $content_encoding;
  public NonEmptyMaxLength1024String $content_language;
  public S3ContentLength $content_length;
  public NonEmptyMaxLength1024String $content_md_5;
  public NonEmptyMaxLength1024String $content_type;
  public TimeStamp $http_expires_date;
  public boolean $requester_charged;
  public S3SSEAlgorithm $sse_algorithm;
  public S3UserMetadata $user_metadata;

  public function __construct(shape(
  ?'cache_control' => NonEmptyMaxLength1024String,
  ?'content_disposition' => NonEmptyMaxLength1024String,
  ?'content_encoding' => NonEmptyMaxLength1024String,
  ?'content_language' => NonEmptyMaxLength1024String,
  ?'content_length' => S3ContentLength,
  ?'content_md_5' => NonEmptyMaxLength1024String,
  ?'content_type' => NonEmptyMaxLength1024String,
  ?'http_expires_date' => TimeStamp,
  ?'requester_charged' => boolean,
  ?'sse_algorithm' => S3SSEAlgorithm,
  ?'user_metadata' => S3UserMetadata,
  ) $s = shape()) {
    $this->cache_control = $cache_control ?? ;
    $this->content_disposition = $content_disposition ?? ;
    $this->content_encoding = $content_encoding ?? ;
    $this->content_language = $content_language ?? ;
    $this->content_length = $content_length ?? ;
    $this->content_md_5 = $content_md_5 ?? ;
    $this->content_type = $content_type ?? ;
    $this->http_expires_date = $http_expires_date ?? ;
    $this->requester_charged = $requester_charged ?? ;
    $this->sse_algorithm = $sse_algorithm ?? ;
    $this->user_metadata = $user_metadata ?? ;
  }
}

class S3ObjectOwner {
  public NonEmptyMaxLength1024String $display_name;
  public NonEmptyMaxLength1024String $id;

  public function __construct(shape(
  ?'display_name' => NonEmptyMaxLength1024String,
  ?'id' => NonEmptyMaxLength1024String,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->id = $id ?? ;
  }
}

type S3ObjectVersionId = string;

type S3Permission = string;

type S3SSEAlgorithm = string;

class S3SetObjectAclOperation {
  public S3AccessControlPolicy $access_control_policy;

  public function __construct(shape(
  ?'access_control_policy' => S3AccessControlPolicy,
  ) $s = shape()) {
    $this->access_control_policy = $access_control_policy ?? ;
  }
}

class S3SetObjectTaggingOperation {
  public S3TagSet $tag_set;

  public function __construct(shape(
  ?'tag_set' => S3TagSet,
  ) $s = shape()) {
    $this->tag_set = $tag_set ?? ;
  }
}

type S3StorageClass = string;

class S3Tag {
  public NonEmptyMaxLength1024String $key;
  public MaxLength1024String $value;

  public function __construct(shape(
  ?'key' => NonEmptyMaxLength1024String,
  ?'value' => MaxLength1024String,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type S3TagSet = vec<S3Tag>;

type S3UserMetadata = dict<NonEmptyMaxLength1024String, MaxLength1024String>;

type Setting = bool;

type SuspendedCause = string;

type SuspendedDate = int;

type TimeStamp = int;

class TooManyRequestsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class TooManyTagsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UpdateJobPriorityRequest {
  public AccountId $account_id;
  public JobId $job_id;
  public JobPriority $priority;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'job_id' => JobId,
  ?'priority' => JobPriority,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->job_id = $job_id ?? "";
    $this->priority = $priority ?? ;
  }
}

class UpdateJobPriorityResult {
  public JobId $job_id;
  public JobPriority $priority;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'priority' => JobPriority,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->priority = $priority ?? ;
  }
}

class UpdateJobStatusRequest {
  public AccountId $account_id;
  public JobId $job_id;
  public RequestedJobStatus $requested_job_status;
  public JobStatusUpdateReason $status_update_reason;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'job_id' => JobId,
  ?'requested_job_status' => RequestedJobStatus,
  ?'status_update_reason' => JobStatusUpdateReason,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->job_id = $job_id ?? "";
    $this->requested_job_status = $requested_job_status ?? "";
    $this->status_update_reason = $status_update_reason ?? ;
  }
}

class UpdateJobStatusResult {
  public JobId $job_id;
  public JobStatus $status;
  public JobStatusUpdateReason $status_update_reason;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'status' => JobStatus,
  ?'status_update_reason' => JobStatusUpdateReason,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->status = $status ?? ;
    $this->status_update_reason = $status_update_reason ?? ;
  }
}

class VpcConfiguration {
  public VpcId $vpc_id;

  public function __construct(shape(
  ?'vpc_id' => VpcId,
  ) $s = shape()) {
    $this->vpc_id = $vpc_id ?? "";
  }
}

type VpcId = string;

