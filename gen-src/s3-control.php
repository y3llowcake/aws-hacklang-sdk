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
}

class AccessPointList {
}

class AccessPointName {
}

class AccountId {
}

class BadRequestException {
  public ExceptionMessage $message;
}

class Boolean {
}

class BucketName {
}

class ConfirmationRequired {
}

class CreateAccessPointRequest {
  public AccountId $account_id;
  public BucketName $bucket;
  public AccessPointName $name;
  public PublicAccessBlockConfiguration $public_access_block_configuration;
  public VpcConfiguration $vpc_configuration;
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
}

class CreateJobResult {
  public JobId $job_id;
}

class CreationDate {
}

class DeleteAccessPointPolicyRequest {
  public AccountId $account_id;
  public AccessPointName $name;
}

class DeleteAccessPointRequest {
  public AccountId $account_id;
  public AccessPointName $name;
}

class DeleteJobTaggingRequest {
  public AccountId $account_id;
  public JobId $job_id;
}

class DeleteJobTaggingResult {
}

class DeletePublicAccessBlockRequest {
  public AccountId $account_id;
}

class DescribeJobRequest {
  public AccountId $account_id;
  public JobId $job_id;
}

class DescribeJobResult {
  public JobDescriptor $job;
}

class ExceptionMessage {
}

class GetAccessPointPolicyRequest {
  public AccountId $account_id;
  public AccessPointName $name;
}

class GetAccessPointPolicyResult {
  public Policy $policy;
}

class GetAccessPointPolicyStatusRequest {
  public AccountId $account_id;
  public AccessPointName $name;
}

class GetAccessPointPolicyStatusResult {
  public PolicyStatus $policy_status;
}

class GetAccessPointRequest {
  public AccountId $account_id;
  public AccessPointName $name;
}

class GetAccessPointResult {
  public BucketName $bucket;
  public CreationDate $creation_date;
  public AccessPointName $name;
  public NetworkOrigin $network_origin;
  public PublicAccessBlockConfiguration $public_access_block_configuration;
  public VpcConfiguration $vpc_configuration;
}

class GetJobTaggingRequest {
  public AccountId $account_id;
  public JobId $job_id;
}

class GetJobTaggingResult {
  public S3TagSet $tags;
}

class GetPublicAccessBlockOutput {
  public PublicAccessBlockConfiguration $public_access_block_configuration;
}

class GetPublicAccessBlockRequest {
  public AccountId $account_id;
}

class IAMRoleArn {
}

class IdempotencyException {
  public ExceptionMessage $message;
}

class InternalServiceException {
  public ExceptionMessage $message;
}

class InvalidNextTokenException {
  public ExceptionMessage $message;
}

class InvalidRequestException {
  public ExceptionMessage $message;
}

class IsPublic {
}

class JobArn {
}

class JobCreationTime {
}

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
}

class JobFailure {
  public JobFailureCode $failure_code;
  public JobFailureReason $failure_reason;
}

class JobFailureCode {
}

class JobFailureList {
}

class JobFailureReason {
}

class JobId {
}

class JobListDescriptor {
  public JobCreationTime $creation_time;
  public NonEmptyMaxLength256String $description;
  public JobId $job_id;
  public OperationName $operation;
  public JobPriority $priority;
  public JobProgressSummary $progress_summary;
  public JobStatus $status;
  public JobTerminationDate $termination_date;
}

class JobListDescriptorList {
}

class JobManifest {
  public JobManifestLocation $location;
  public JobManifestSpec $spec;
}

class JobManifestFieldList {
}

class JobManifestFieldName {
}

class JobManifestFormat {
}

class JobManifestLocation {
  public NonEmptyMaxLength1024String $e_tag;
  public S3KeyArnString $object_arn;
  public S3ObjectVersionId $object_version_id;
}

class JobManifestSpec {
  public JobManifestFieldList $fields;
  public JobManifestFormat $format;
}

class JobNumberOfTasksFailed {
}

class JobNumberOfTasksSucceeded {
}

class JobOperation {
  public LambdaInvokeOperation $lambda_invoke;
  public S3InitiateRestoreObjectOperation $s_3_initiate_restore_object;
  public S3SetObjectAclOperation $s_3_put_object_acl;
  public S3CopyObjectOperation $s_3_put_object_copy;
  public S3SetObjectTaggingOperation $s_3_put_object_tagging;
}

class JobPriority {
}

class JobProgressSummary {
  public JobNumberOfTasksFailed $number_of_tasks_failed;
  public JobNumberOfTasksSucceeded $number_of_tasks_succeeded;
  public JobTotalNumberOfTasks $total_number_of_tasks;
}

class JobReport {
  public S3BucketArnString $bucket;
  public boolean $enabled;
  public JobReportFormat $format;
  public ReportPrefixString $prefix;
  public JobReportScope $report_scope;
}

class JobReportFormat {
}

class JobReportScope {
}

class JobStatus {
}

class JobStatusException {
  public ExceptionMessage $message;
}

class JobStatusList {
}

class JobStatusUpdateReason {
}

class JobTerminationDate {
}

class JobTotalNumberOfTasks {
}

class KmsKeyArnString {
}

class LambdaInvokeOperation {
  public NonEmptyMaxLength1024String $function_arn;
}

class ListAccessPointsRequest {
  public AccountId $account_id;
  public BucketName $bucket;
  public MaxResults $max_results;
  public NonEmptyMaxLength1024String $next_token;
}

class ListAccessPointsResult {
  public AccessPointList $access_point_list;
  public NonEmptyMaxLength1024String $next_token;
}

class ListJobsRequest {
  public AccountId $account_id;
  public JobStatusList $job_statuses;
  public MaxResults $max_results;
  public NonEmptyMaxLength1024String $next_token;
}

class ListJobsResult {
  public JobListDescriptorList $jobs;
  public NonEmptyMaxLength1024String $next_token;
}

class MaxLength1024String {
}

class MaxResults {
}

class NetworkOrigin {
}

class NoSuchPublicAccessBlockConfiguration {
  public NoSuchPublicAccessBlockConfigurationMessage $message;
}

class NoSuchPublicAccessBlockConfigurationMessage {
}

class NonEmptyMaxLength1024String {
}

class NonEmptyMaxLength2048String {
}

class NonEmptyMaxLength256String {
}

class NonEmptyMaxLength64String {
}

class NotFoundException {
  public ExceptionMessage $message;
}

class OperationName {
}

class Policy {
}

class PolicyStatus {
  public IsPublic $is_public;
}

class PublicAccessBlockConfiguration {
  public Setting $block_public_acls;
  public Setting $block_public_policy;
  public Setting $ignore_public_acls;
  public Setting $restrict_public_buckets;
}

class PutAccessPointPolicyRequest {
  public AccountId $account_id;
  public AccessPointName $name;
  public Policy $policy;
}

class PutJobTaggingRequest {
  public AccountId $account_id;
  public JobId $job_id;
  public S3TagSet $tags;
}

class PutJobTaggingResult {
}

class PutPublicAccessBlockRequest {
  public AccountId $account_id;
  public PublicAccessBlockConfiguration $public_access_block_configuration;
}

class ReportPrefixString {
}

class RequestedJobStatus {
}

class S3AccessControlList {
  public S3GrantList $grants;
  public S3ObjectOwner $owner;
}

class S3AccessControlPolicy {
  public S3AccessControlList $access_control_list;
  public S3CannedAccessControlList $canned_access_control_list;
}

class S3BucketArnString {
}

class S3CannedAccessControlList {
}

class S3ContentLength {
}

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
}

class S3ExpirationInDays {
}

class S3GlacierJobTier {
}

class S3Grant {
  public S3Grantee $grantee;
  public S3Permission $permission;
}

class S3GrantList {
}

class S3Grantee {
  public NonEmptyMaxLength1024String $display_name;
  public NonEmptyMaxLength1024String $identifier;
  public S3GranteeTypeIdentifier $type_identifier;
}

class S3GranteeTypeIdentifier {
}

class S3InitiateRestoreObjectOperation {
  public S3ExpirationInDays $expiration_in_days;
  public S3GlacierJobTier $glacier_job_tier;
}

class S3KeyArnString {
}

class S3MetadataDirective {
}

class S3ObjectLockLegalHoldStatus {
}

class S3ObjectLockMode {
}

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
}

class S3ObjectOwner {
  public NonEmptyMaxLength1024String $display_name;
  public NonEmptyMaxLength1024String $id;
}

class S3ObjectVersionId {
}

class S3Permission {
}

class S3SSEAlgorithm {
}

class S3SetObjectAclOperation {
  public S3AccessControlPolicy $access_control_policy;
}

class S3SetObjectTaggingOperation {
  public S3TagSet $tag_set;
}

class S3StorageClass {
}

class S3Tag {
  public NonEmptyMaxLength1024String $key;
  public MaxLength1024String $value;
}

class S3TagSet {
}

class S3UserMetadata {
}

class Setting {
}

class SuspendedCause {
}

class SuspendedDate {
}

class TimeStamp {
}

class TooManyRequestsException {
  public ExceptionMessage $message;
}

class TooManyTagsException {
  public ExceptionMessage $message;
}

class UpdateJobPriorityRequest {
  public AccountId $account_id;
  public JobId $job_id;
  public JobPriority $priority;
}

class UpdateJobPriorityResult {
  public JobId $job_id;
  public JobPriority $priority;
}

class UpdateJobStatusRequest {
  public AccountId $account_id;
  public JobId $job_id;
  public RequestedJobStatus $requested_job_status;
  public JobStatusUpdateReason $status_update_reason;
}

class UpdateJobStatusResult {
  public JobId $job_id;
  public JobStatus $status;
  public JobStatusUpdateReason $status_update_reason;
}

class VpcConfiguration {
  public VpcId $vpc_id;
}

class VpcId {
}

