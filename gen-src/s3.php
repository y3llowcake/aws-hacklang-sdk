<?hh // strict
namespace slack\aws\s3;

interface S3 {
  public function AbortMultipartUpload(AbortMultipartUploadRequest): Awaitable<Errors\Result<AbortMultipartUploadOutput>>;
  public function CompleteMultipartUpload(CompleteMultipartUploadRequest): Awaitable<Errors\Result<CompleteMultipartUploadOutput>>;
  public function CopyObject(CopyObjectRequest): Awaitable<Errors\Result<CopyObjectOutput>>;
  public function CreateBucket(CreateBucketRequest): Awaitable<Errors\Result<CreateBucketOutput>>;
  public function CreateMultipartUpload(CreateMultipartUploadRequest): Awaitable<Errors\Result<CreateMultipartUploadOutput>>;
  public function DeleteBucket(DeleteBucketRequest): Awaitable<Errors\Error>;
  public function DeleteBucketAnalyticsConfiguration(DeleteBucketAnalyticsConfigurationRequest): Awaitable<Errors\Error>;
  public function DeleteBucketCors(DeleteBucketCorsRequest): Awaitable<Errors\Error>;
  public function DeleteBucketEncryption(DeleteBucketEncryptionRequest): Awaitable<Errors\Error>;
  public function DeleteBucketInventoryConfiguration(DeleteBucketInventoryConfigurationRequest): Awaitable<Errors\Error>;
  public function DeleteBucketLifecycle(DeleteBucketLifecycleRequest): Awaitable<Errors\Error>;
  public function DeleteBucketMetricsConfiguration(DeleteBucketMetricsConfigurationRequest): Awaitable<Errors\Error>;
  public function DeleteBucketPolicy(DeleteBucketPolicyRequest): Awaitable<Errors\Error>;
  public function DeleteBucketReplication(DeleteBucketReplicationRequest): Awaitable<Errors\Error>;
  public function DeleteBucketTagging(DeleteBucketTaggingRequest): Awaitable<Errors\Error>;
  public function DeleteBucketWebsite(DeleteBucketWebsiteRequest): Awaitable<Errors\Error>;
  public function DeleteObject(DeleteObjectRequest): Awaitable<Errors\Result<DeleteObjectOutput>>;
  public function DeleteObjectTagging(DeleteObjectTaggingRequest): Awaitable<Errors\Result<DeleteObjectTaggingOutput>>;
  public function DeleteObjects(DeleteObjectsRequest): Awaitable<Errors\Result<DeleteObjectsOutput>>;
  public function DeletePublicAccessBlock(DeletePublicAccessBlockRequest): Awaitable<Errors\Error>;
  public function GetBucketAccelerateConfiguration(GetBucketAccelerateConfigurationRequest): Awaitable<Errors\Result<GetBucketAccelerateConfigurationOutput>>;
  public function GetBucketAcl(GetBucketAclRequest): Awaitable<Errors\Result<GetBucketAclOutput>>;
  public function GetBucketAnalyticsConfiguration(GetBucketAnalyticsConfigurationRequest): Awaitable<Errors\Result<GetBucketAnalyticsConfigurationOutput>>;
  public function GetBucketCors(GetBucketCorsRequest): Awaitable<Errors\Result<GetBucketCorsOutput>>;
  public function GetBucketEncryption(GetBucketEncryptionRequest): Awaitable<Errors\Result<GetBucketEncryptionOutput>>;
  public function GetBucketInventoryConfiguration(GetBucketInventoryConfigurationRequest): Awaitable<Errors\Result<GetBucketInventoryConfigurationOutput>>;
  public function GetBucketLifecycle(GetBucketLifecycleRequest): Awaitable<Errors\Result<GetBucketLifecycleOutput>>;
  public function GetBucketLifecycleConfiguration(GetBucketLifecycleConfigurationRequest): Awaitable<Errors\Result<GetBucketLifecycleConfigurationOutput>>;
  public function GetBucketLocation(GetBucketLocationRequest): Awaitable<Errors\Result<GetBucketLocationOutput>>;
  public function GetBucketLogging(GetBucketLoggingRequest): Awaitable<Errors\Result<GetBucketLoggingOutput>>;
  public function GetBucketMetricsConfiguration(GetBucketMetricsConfigurationRequest): Awaitable<Errors\Result<GetBucketMetricsConfigurationOutput>>;
  public function GetBucketNotification(GetBucketNotificationConfigurationRequest): Awaitable<Errors\Result<NotificationConfigurationDeprecated>>;
  public function GetBucketNotificationConfiguration(GetBucketNotificationConfigurationRequest): Awaitable<Errors\Result<NotificationConfiguration>>;
  public function GetBucketPolicy(GetBucketPolicyRequest): Awaitable<Errors\Result<GetBucketPolicyOutput>>;
  public function GetBucketPolicyStatus(GetBucketPolicyStatusRequest): Awaitable<Errors\Result<GetBucketPolicyStatusOutput>>;
  public function GetBucketReplication(GetBucketReplicationRequest): Awaitable<Errors\Result<GetBucketReplicationOutput>>;
  public function GetBucketRequestPayment(GetBucketRequestPaymentRequest): Awaitable<Errors\Result<GetBucketRequestPaymentOutput>>;
  public function GetBucketTagging(GetBucketTaggingRequest): Awaitable<Errors\Result<GetBucketTaggingOutput>>;
  public function GetBucketVersioning(GetBucketVersioningRequest): Awaitable<Errors\Result<GetBucketVersioningOutput>>;
  public function GetBucketWebsite(GetBucketWebsiteRequest): Awaitable<Errors\Result<GetBucketWebsiteOutput>>;
  public function GetObject(GetObjectRequest): Awaitable<Errors\Result<GetObjectOutput>>;
  public function GetObjectAcl(GetObjectAclRequest): Awaitable<Errors\Result<GetObjectAclOutput>>;
  public function GetObjectLegalHold(GetObjectLegalHoldRequest): Awaitable<Errors\Result<GetObjectLegalHoldOutput>>;
  public function GetObjectLockConfiguration(GetObjectLockConfigurationRequest): Awaitable<Errors\Result<GetObjectLockConfigurationOutput>>;
  public function GetObjectRetention(GetObjectRetentionRequest): Awaitable<Errors\Result<GetObjectRetentionOutput>>;
  public function GetObjectTagging(GetObjectTaggingRequest): Awaitable<Errors\Result<GetObjectTaggingOutput>>;
  public function GetObjectTorrent(GetObjectTorrentRequest): Awaitable<Errors\Result<GetObjectTorrentOutput>>;
  public function GetPublicAccessBlock(GetPublicAccessBlockRequest): Awaitable<Errors\Result<GetPublicAccessBlockOutput>>;
  public function HeadBucket(HeadBucketRequest): Awaitable<Errors\Error>;
  public function HeadObject(HeadObjectRequest): Awaitable<Errors\Result<HeadObjectOutput>>;
  public function ListBucketAnalyticsConfigurations(ListBucketAnalyticsConfigurationsRequest): Awaitable<Errors\Result<ListBucketAnalyticsConfigurationsOutput>>;
  public function ListBucketInventoryConfigurations(ListBucketInventoryConfigurationsRequest): Awaitable<Errors\Result<ListBucketInventoryConfigurationsOutput>>;
  public function ListBucketMetricsConfigurations(ListBucketMetricsConfigurationsRequest): Awaitable<Errors\Result<ListBucketMetricsConfigurationsOutput>>;
  public function ListBuckets(): Awaitable<Errors\Result<ListBucketsOutput>>;
  public function ListMultipartUploads(ListMultipartUploadsRequest): Awaitable<Errors\Result<ListMultipartUploadsOutput>>;
  public function ListObjectVersions(ListObjectVersionsRequest): Awaitable<Errors\Result<ListObjectVersionsOutput>>;
  public function ListObjects(ListObjectsRequest): Awaitable<Errors\Result<ListObjectsOutput>>;
  public function ListObjectsV2(ListObjectsV2Request): Awaitable<Errors\Result<ListObjectsV2Output>>;
  public function ListParts(ListPartsRequest): Awaitable<Errors\Result<ListPartsOutput>>;
  public function PutBucketAccelerateConfiguration(PutBucketAccelerateConfigurationRequest): Awaitable<Errors\Error>;
  public function PutBucketAcl(PutBucketAclRequest): Awaitable<Errors\Error>;
  public function PutBucketAnalyticsConfiguration(PutBucketAnalyticsConfigurationRequest): Awaitable<Errors\Error>;
  public function PutBucketCors(PutBucketCorsRequest): Awaitable<Errors\Error>;
  public function PutBucketEncryption(PutBucketEncryptionRequest): Awaitable<Errors\Error>;
  public function PutBucketInventoryConfiguration(PutBucketInventoryConfigurationRequest): Awaitable<Errors\Error>;
  public function PutBucketLifecycle(PutBucketLifecycleRequest): Awaitable<Errors\Error>;
  public function PutBucketLifecycleConfiguration(PutBucketLifecycleConfigurationRequest): Awaitable<Errors\Error>;
  public function PutBucketLogging(PutBucketLoggingRequest): Awaitable<Errors\Error>;
  public function PutBucketMetricsConfiguration(PutBucketMetricsConfigurationRequest): Awaitable<Errors\Error>;
  public function PutBucketNotification(PutBucketNotificationRequest): Awaitable<Errors\Error>;
  public function PutBucketNotificationConfiguration(PutBucketNotificationConfigurationRequest): Awaitable<Errors\Error>;
  public function PutBucketPolicy(PutBucketPolicyRequest): Awaitable<Errors\Error>;
  public function PutBucketReplication(PutBucketReplicationRequest): Awaitable<Errors\Error>;
  public function PutBucketRequestPayment(PutBucketRequestPaymentRequest): Awaitable<Errors\Error>;
  public function PutBucketTagging(PutBucketTaggingRequest): Awaitable<Errors\Error>;
  public function PutBucketVersioning(PutBucketVersioningRequest): Awaitable<Errors\Error>;
  public function PutBucketWebsite(PutBucketWebsiteRequest): Awaitable<Errors\Error>;
  public function PutObject(PutObjectRequest): Awaitable<Errors\Result<PutObjectOutput>>;
  public function PutObjectAcl(PutObjectAclRequest): Awaitable<Errors\Result<PutObjectAclOutput>>;
  public function PutObjectLegalHold(PutObjectLegalHoldRequest): Awaitable<Errors\Result<PutObjectLegalHoldOutput>>;
  public function PutObjectLockConfiguration(PutObjectLockConfigurationRequest): Awaitable<Errors\Result<PutObjectLockConfigurationOutput>>;
  public function PutObjectRetention(PutObjectRetentionRequest): Awaitable<Errors\Result<PutObjectRetentionOutput>>;
  public function PutObjectTagging(PutObjectTaggingRequest): Awaitable<Errors\Result<PutObjectTaggingOutput>>;
  public function PutPublicAccessBlock(PutPublicAccessBlockRequest): Awaitable<Errors\Error>;
  public function RestoreObject(RestoreObjectRequest): Awaitable<Errors\Result<RestoreObjectOutput>>;
  public function SelectObjectContent(SelectObjectContentRequest): Awaitable<Errors\Result<SelectObjectContentOutput>>;
  public function UploadPart(UploadPartRequest): Awaitable<Errors\Result<UploadPartOutput>>;
  public function UploadPartCopy(UploadPartCopyRequest): Awaitable<Errors\Result<UploadPartCopyOutput>>;
}

class AbortDate {
}

class AbortIncompleteMultipartUpload {
  public DaysAfterInitiation $days_after_initiation;
}

class AbortMultipartUploadOutput {
  public RequestCharged $request_charged;
}

class AbortMultipartUploadRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public MultipartUploadId $upload_id;
}

class AbortRuleId {
}

class AccelerateConfiguration {
  public BucketAccelerateStatus $status;
}

class AcceptRanges {
}

class AccessControlPolicy {
  public Grants $grants;
  public Owner $owner;
}

class AccessControlTranslation {
  public OwnerOverride $owner;
}

class AccountId {
}

class AllowQuotedRecordDelimiter {
}

class AllowedHeader {
}


class AllowedMethod {
}


class AllowedOrigin {
}


class AnalyticsAndOperator {
  public Prefix $prefix;
  public TagSet $tags;
}

class AnalyticsConfiguration {
  public AnalyticsFilter $filter;
  public AnalyticsId $id;
  public StorageClassAnalysis $storage_class_analysis;
}


class AnalyticsExportDestination {
  public AnalyticsS3BucketDestination $s_3_bucket_destination;
}

class AnalyticsFilter {
  public AnalyticsAndOperator $and;
  public Prefix $prefix;
  public Tag $tag;
}

class AnalyticsId {
}

class AnalyticsS3BucketDestination {
  public BucketName $bucket;
  public AccountId $bucket_account_id;
  public AnalyticsS3ExportFileFormat $format;
  public Prefix $prefix;
}

class AnalyticsS3ExportFileFormat {
}

class Body {
}

class Bucket {
  public CreationDate $creation_date;
  public BucketName $name;
}

class BucketAccelerateStatus {
}

class BucketAlreadyExists {
}

class BucketAlreadyOwnedByYou {
}

class BucketCannedACL {
}

class BucketLifecycleConfiguration {
  public LifecycleRules $rules;
}

class BucketLocationConstraint {
}

class BucketLoggingStatus {
  public LoggingEnabled $logging_enabled;
}

class BucketLogsPermission {
}

class BucketName {
}

class BucketVersioningStatus {
}

class Buckets {
}

class BypassGovernanceRetention {
}

class BytesProcessed {
}

class BytesReturned {
}

class BytesScanned {
}

class CORSConfiguration {
  public CORSRules $cors_rules;
}

class CORSRule {
  public AllowedHeaders $allowed_headers;
  public AllowedMethods $allowed_methods;
  public AllowedOrigins $allowed_origins;
  public ExposeHeaders $expose_headers;
  public MaxAgeSeconds $max_age_seconds;
}


class CSVInput {
  public AllowQuotedRecordDelimiter $allow_quoted_record_delimiter;
  public Comments $comments;
  public FieldDelimiter $field_delimiter;
  public FileHeaderInfo $file_header_info;
  public QuoteCharacter $quote_character;
  public QuoteEscapeCharacter $quote_escape_character;
  public RecordDelimiter $record_delimiter;
}

class CSVOutput {
  public FieldDelimiter $field_delimiter;
  public QuoteCharacter $quote_character;
  public QuoteEscapeCharacter $quote_escape_character;
  public QuoteFields $quote_fields;
  public RecordDelimiter $record_delimiter;
}

class CacheControl {
}

class CloudFunction {
}

class CloudFunctionConfiguration {
  public CloudFunction $cloud_function;
  public Event $event;
  public EventList $events;
  public NotificationId $id;
  public CloudFunctionInvocationRole $invocation_role;
}

class CloudFunctionInvocationRole {
}

class Code {
}

class Comments {
}

class CommonPrefix {
  public Prefix $prefix;
}


class CompleteMultipartUploadOutput {
  public BucketName $bucket;
  public ETag $e_tag;
  public Expiration $expiration;
  public ObjectKey $key;
  public Location $location;
  public RequestCharged $request_charged;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public ObjectVersionId $version_id;
}

class CompleteMultipartUploadRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public CompletedMultipartUpload $multipart_upload;
  public RequestPayer $request_payer;
  public MultipartUploadId $upload_id;
}

class CompletedMultipartUpload {
  public CompletedPartList $parts;
}

class CompletedPart {
  public ETag $e_tag;
  public PartNumber $part_number;
}


class CompressionType {
}

class Condition {
  public HttpErrorCodeReturnedEquals $http_error_code_returned_equals;
  public KeyPrefixEquals $key_prefix_equals;
}

class ConfirmRemoveSelfBucketAccess {
}

class ContentDisposition {
}

class ContentEncoding {
}

class ContentLanguage {
}

class ContentLength {
}

class ContentMD5 {
}

class ContentRange {
}

class ContentType {
}

class ContinuationEvent {
}

class CopyObjectOutput {
  public CopyObjectResult $copy_object_result;
  public CopySourceVersionId $copy_source_version_id;
  public Expiration $expiration;
  public RequestCharged $request_charged;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSEncryptionContext $ssekms_encryption_context;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public ObjectVersionId $version_id;
}

class CopyObjectRequest {
  public ObjectCannedACL $acl;
  public BucketName $bucket;
  public CacheControl $cache_control;
  public ContentDisposition $content_disposition;
  public ContentEncoding $content_encoding;
  public ContentLanguage $content_language;
  public ContentType $content_type;
  public CopySource $copy_source;
  public CopySourceIfMatch $copy_source_if_match;
  public CopySourceIfModifiedSince $copy_source_if_modified_since;
  public CopySourceIfNoneMatch $copy_source_if_none_match;
  public CopySourceIfUnmodifiedSince $copy_source_if_unmodified_since;
  public CopySourceSSECustomerAlgorithm $copy_source_sse_customer_algorithm;
  public CopySourceSSECustomerKey $copy_source_sse_customer_key;
  public CopySourceSSECustomerKeyMD5 $copy_source_sse_customer_key_md_5;
  public Expires $expires;
  public GrantFullControl $grant_full_control;
  public GrantRead $grant_read;
  public GrantReadACP $grant_read_acp;
  public GrantWriteACP $grant_write_acp;
  public ObjectKey $key;
  public Metadata $metadata;
  public MetadataDirective $metadata_directive;
  public ObjectLockLegalHoldStatus $object_lock_legal_hold_status;
  public ObjectLockMode $object_lock_mode;
  public ObjectLockRetainUntilDate $object_lock_retain_until_date;
  public RequestPayer $request_payer;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKey $sse_customer_key;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSEncryptionContext $ssekms_encryption_context;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public StorageClass $storage_class;
  public TaggingHeader $tagging;
  public TaggingDirective $tagging_directive;
  public WebsiteRedirectLocation $website_redirect_location;
}

class CopyObjectResult {
  public ETag $e_tag;
  public LastModified $last_modified;
}

class CopyPartResult {
  public ETag $e_tag;
  public LastModified $last_modified;
}

class CopySource {
}

class CopySourceIfMatch {
}

class CopySourceIfModifiedSince {
}

class CopySourceIfNoneMatch {
}

class CopySourceIfUnmodifiedSince {
}

class CopySourceRange {
}

class CopySourceSSECustomerAlgorithm {
}

class CopySourceSSECustomerKey {
}

class CopySourceSSECustomerKeyMD5 {
}

class CopySourceVersionId {
}

class CreateBucketConfiguration {
  public BucketLocationConstraint $location_constraint;
}

class CreateBucketOutput {
  public Location $location;
}

class CreateBucketRequest {
  public BucketCannedACL $acl;
  public BucketName $bucket;
  public CreateBucketConfiguration $create_bucket_configuration;
  public GrantFullControl $grant_full_control;
  public GrantRead $grant_read;
  public GrantReadACP $grant_read_acp;
  public GrantWrite $grant_write;
  public GrantWriteACP $grant_write_acp;
  public ObjectLockEnabledForBucket $object_lock_enabled_for_bucket;
}

class CreateMultipartUploadOutput {
  public AbortDate $abort_date;
  public AbortRuleId $abort_rule_id;
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestCharged $request_charged;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSEncryptionContext $ssekms_encryption_context;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public MultipartUploadId $upload_id;
}

class CreateMultipartUploadRequest {
  public ObjectCannedACL $acl;
  public BucketName $bucket;
  public CacheControl $cache_control;
  public ContentDisposition $content_disposition;
  public ContentEncoding $content_encoding;
  public ContentLanguage $content_language;
  public ContentType $content_type;
  public Expires $expires;
  public GrantFullControl $grant_full_control;
  public GrantRead $grant_read;
  public GrantReadACP $grant_read_acp;
  public GrantWriteACP $grant_write_acp;
  public ObjectKey $key;
  public Metadata $metadata;
  public ObjectLockLegalHoldStatus $object_lock_legal_hold_status;
  public ObjectLockMode $object_lock_mode;
  public ObjectLockRetainUntilDate $object_lock_retain_until_date;
  public RequestPayer $request_payer;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKey $sse_customer_key;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSEncryptionContext $ssekms_encryption_context;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public StorageClass $storage_class;
  public TaggingHeader $tagging;
  public WebsiteRedirectLocation $website_redirect_location;
}

class CreationDate {
}

class Date {
}

class Days {
}

class DaysAfterInitiation {
}

class DefaultRetention {
  public Days $days;
  public ObjectLockRetentionMode $mode;
  public Years $years;
}

class Delete {
  public ObjectIdentifierList $objects;
  public Quiet $quiet;
}

class DeleteBucketAnalyticsConfigurationRequest {
  public BucketName $bucket;
  public AnalyticsId $id;
}

class DeleteBucketCorsRequest {
  public BucketName $bucket;
}

class DeleteBucketEncryptionRequest {
  public BucketName $bucket;
}

class DeleteBucketInventoryConfigurationRequest {
  public BucketName $bucket;
  public InventoryId $id;
}

class DeleteBucketLifecycleRequest {
  public BucketName $bucket;
}

class DeleteBucketMetricsConfigurationRequest {
  public BucketName $bucket;
  public MetricsId $id;
}

class DeleteBucketPolicyRequest {
  public BucketName $bucket;
}

class DeleteBucketReplicationRequest {
  public BucketName $bucket;
}

class DeleteBucketRequest {
  public BucketName $bucket;
}

class DeleteBucketTaggingRequest {
  public BucketName $bucket;
}

class DeleteBucketWebsiteRequest {
  public BucketName $bucket;
}

class DeleteMarker {
}

class DeleteMarkerEntry {
  public IsLatest $is_latest;
  public ObjectKey $key;
  public LastModified $last_modified;
  public Owner $owner;
  public ObjectVersionId $version_id;
}

class DeleteMarkerReplication {
  public DeleteMarkerReplicationStatus $status;
}

class DeleteMarkerReplicationStatus {
}

class DeleteMarkerVersionId {
}


class DeleteObjectOutput {
  public DeleteMarker $delete_marker;
  public RequestCharged $request_charged;
  public ObjectVersionId $version_id;
}

class DeleteObjectRequest {
  public BucketName $bucket;
  public BypassGovernanceRetention $bypass_governance_retention;
  public ObjectKey $key;
  public MFA $mfa;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;
}

class DeleteObjectTaggingOutput {
  public ObjectVersionId $version_id;
}

class DeleteObjectTaggingRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public ObjectVersionId $version_id;
}

class DeleteObjectsOutput {
  public DeletedObjects $deleted;
  public Errors $errors;
  public RequestCharged $request_charged;
}

class DeleteObjectsRequest {
  public BucketName $bucket;
  public BypassGovernanceRetention $bypass_governance_retention;
  public Delete $delete;
  public MFA $mfa;
  public RequestPayer $request_payer;
}

class DeletePublicAccessBlockRequest {
  public BucketName $bucket;
}

class DeletedObject {
  public DeleteMarker $delete_marker;
  public DeleteMarkerVersionId $delete_marker_version_id;
  public ObjectKey $key;
  public ObjectVersionId $version_id;
}


class Delimiter {
}

class Description {
}

class Destination {
  public AccessControlTranslation $access_control_translation;
  public AccountId $account;
  public BucketName $bucket;
  public EncryptionConfiguration $encryption_configuration;
  public Metrics $metrics;
  public ReplicationTime $replication_time;
  public StorageClass $storage_class;
}

class DisplayName {
}

class ETag {
}

class EmailAddress {
}

class EnableRequestProgress {
}

class EncodingType {
}

class Encryption {
  public ServerSideEncryption $encryption_type;
  public KMSContext $kms_context;
  public SSEKMSKeyId $kms_key_id;
}

class EncryptionConfiguration {
  public ReplicaKmsKeyID $replica_kms_key_id;
}

class End {
}

class EndEvent {
}

class Error {
  public Code $code;
  public ObjectKey $key;
  public Message $message;
  public ObjectVersionId $version_id;
}

class ErrorDocument {
  public ObjectKey $key;
}


class Event {
}


class ExistingObjectReplication {
  public ExistingObjectReplicationStatus $status;
}

class ExistingObjectReplicationStatus {
}

class Expiration {
}

class ExpirationStatus {
}

class ExpiredObjectDeleteMarker {
}

class Expires {
}

class ExposeHeader {
}


class Expression {
}

class ExpressionType {
}

class FetchOwner {
}

class FieldDelimiter {
}

class FileHeaderInfo {
}

class FilterRule {
  public FilterRuleName $name;
  public FilterRuleValue $value;
}


class FilterRuleName {
}

class FilterRuleValue {
}

class GetBucketAccelerateConfigurationOutput {
  public BucketAccelerateStatus $status;
}

class GetBucketAccelerateConfigurationRequest {
  public BucketName $bucket;
}

class GetBucketAclOutput {
  public Grants $grants;
  public Owner $owner;
}

class GetBucketAclRequest {
  public BucketName $bucket;
}

class GetBucketAnalyticsConfigurationOutput {
  public AnalyticsConfiguration $analytics_configuration;
}

class GetBucketAnalyticsConfigurationRequest {
  public BucketName $bucket;
  public AnalyticsId $id;
}

class GetBucketCorsOutput {
  public CORSRules $cors_rules;
}

class GetBucketCorsRequest {
  public BucketName $bucket;
}

class GetBucketEncryptionOutput {
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;
}

class GetBucketEncryptionRequest {
  public BucketName $bucket;
}

class GetBucketInventoryConfigurationOutput {
  public InventoryConfiguration $inventory_configuration;
}

class GetBucketInventoryConfigurationRequest {
  public BucketName $bucket;
  public InventoryId $id;
}

class GetBucketLifecycleConfigurationOutput {
  public LifecycleRules $rules;
}

class GetBucketLifecycleConfigurationRequest {
  public BucketName $bucket;
}

class GetBucketLifecycleOutput {
  public Rules $rules;
}

class GetBucketLifecycleRequest {
  public BucketName $bucket;
}

class GetBucketLocationOutput {
  public BucketLocationConstraint $location_constraint;
}

class GetBucketLocationRequest {
  public BucketName $bucket;
}

class GetBucketLoggingOutput {
  public LoggingEnabled $logging_enabled;
}

class GetBucketLoggingRequest {
  public BucketName $bucket;
}

class GetBucketMetricsConfigurationOutput {
  public MetricsConfiguration $metrics_configuration;
}

class GetBucketMetricsConfigurationRequest {
  public BucketName $bucket;
  public MetricsId $id;
}

class GetBucketNotificationConfigurationRequest {
  public BucketName $bucket;
}

class GetBucketPolicyOutput {
  public Policy $policy;
}

class GetBucketPolicyRequest {
  public BucketName $bucket;
}

class GetBucketPolicyStatusOutput {
  public PolicyStatus $policy_status;
}

class GetBucketPolicyStatusRequest {
  public BucketName $bucket;
}

class GetBucketReplicationOutput {
  public ReplicationConfiguration $replication_configuration;
}

class GetBucketReplicationRequest {
  public BucketName $bucket;
}

class GetBucketRequestPaymentOutput {
  public Payer $payer;
}

class GetBucketRequestPaymentRequest {
  public BucketName $bucket;
}

class GetBucketTaggingOutput {
  public TagSet $tag_set;
}

class GetBucketTaggingRequest {
  public BucketName $bucket;
}

class GetBucketVersioningOutput {
  public MFADeleteStatus $mfa_delete;
  public BucketVersioningStatus $status;
}

class GetBucketVersioningRequest {
  public BucketName $bucket;
}

class GetBucketWebsiteOutput {
  public ErrorDocument $error_document;
  public IndexDocument $index_document;
  public RedirectAllRequestsTo $redirect_all_requests_to;
  public RoutingRules $routing_rules;
}

class GetBucketWebsiteRequest {
  public BucketName $bucket;
}

class GetObjectAclOutput {
  public Grants $grants;
  public Owner $owner;
  public RequestCharged $request_charged;
}

class GetObjectAclRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;
}

class GetObjectLegalHoldOutput {
  public ObjectLockLegalHold $legal_hold;
}

class GetObjectLegalHoldRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;
}

class GetObjectLockConfigurationOutput {
  public ObjectLockConfiguration $object_lock_configuration;
}

class GetObjectLockConfigurationRequest {
  public BucketName $bucket;
}

class GetObjectOutput {
  public AcceptRanges $accept_ranges;
  public Body $body;
  public CacheControl $cache_control;
  public ContentDisposition $content_disposition;
  public ContentEncoding $content_encoding;
  public ContentLanguage $content_language;
  public ContentLength $content_length;
  public ContentRange $content_range;
  public ContentType $content_type;
  public DeleteMarker $delete_marker;
  public ETag $e_tag;
  public Expiration $expiration;
  public Expires $expires;
  public LastModified $last_modified;
  public Metadata $metadata;
  public MissingMeta $missing_meta;
  public ObjectLockLegalHoldStatus $object_lock_legal_hold_status;
  public ObjectLockMode $object_lock_mode;
  public ObjectLockRetainUntilDate $object_lock_retain_until_date;
  public PartsCount $parts_count;
  public ReplicationStatus $replication_status;
  public RequestCharged $request_charged;
  public Restore $restore;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public StorageClass $storage_class;
  public TagCount $tag_count;
  public ObjectVersionId $version_id;
  public WebsiteRedirectLocation $website_redirect_location;
}

class GetObjectRequest {
  public BucketName $bucket;
  public IfMatch $if_match;
  public IfModifiedSince $if_modified_since;
  public IfNoneMatch $if_none_match;
  public IfUnmodifiedSince $if_unmodified_since;
  public ObjectKey $key;
  public PartNumber $part_number;
  public Range $range;
  public RequestPayer $request_payer;
  public ResponseCacheControl $response_cache_control;
  public ResponseContentDisposition $response_content_disposition;
  public ResponseContentEncoding $response_content_encoding;
  public ResponseContentLanguage $response_content_language;
  public ResponseContentType $response_content_type;
  public ResponseExpires $response_expires;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKey $sse_customer_key;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public ObjectVersionId $version_id;
}

class GetObjectRetentionOutput {
  public ObjectLockRetention $retention;
}

class GetObjectRetentionRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;
}

class GetObjectTaggingOutput {
  public TagSet $tag_set;
  public ObjectVersionId $version_id;
}

class GetObjectTaggingRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public ObjectVersionId $version_id;
}

class GetObjectTorrentOutput {
  public Body $body;
  public RequestCharged $request_charged;
}

class GetObjectTorrentRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
}

class GetPublicAccessBlockOutput {
  public PublicAccessBlockConfiguration $public_access_block_configuration;
}

class GetPublicAccessBlockRequest {
  public BucketName $bucket;
}

class GlacierJobParameters {
  public Tier $tier;
}

class Grant {
  public Grantee $grantee;
  public Permission $permission;
}

class GrantFullControl {
}

class GrantRead {
}

class GrantReadACP {
}

class GrantWrite {
}

class GrantWriteACP {
}

class Grantee {
  public DisplayName $display_name;
  public EmailAddress $email_address;
  public ID $id;
  public Type $type;
  public URI $uri;
}

class Grants {
}

class HeadBucketRequest {
  public BucketName $bucket;
}

class HeadObjectOutput {
  public AcceptRanges $accept_ranges;
  public CacheControl $cache_control;
  public ContentDisposition $content_disposition;
  public ContentEncoding $content_encoding;
  public ContentLanguage $content_language;
  public ContentLength $content_length;
  public ContentType $content_type;
  public DeleteMarker $delete_marker;
  public ETag $e_tag;
  public Expiration $expiration;
  public Expires $expires;
  public LastModified $last_modified;
  public Metadata $metadata;
  public MissingMeta $missing_meta;
  public ObjectLockLegalHoldStatus $object_lock_legal_hold_status;
  public ObjectLockMode $object_lock_mode;
  public ObjectLockRetainUntilDate $object_lock_retain_until_date;
  public PartsCount $parts_count;
  public ReplicationStatus $replication_status;
  public RequestCharged $request_charged;
  public Restore $restore;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public StorageClass $storage_class;
  public ObjectVersionId $version_id;
  public WebsiteRedirectLocation $website_redirect_location;
}

class HeadObjectRequest {
  public BucketName $bucket;
  public IfMatch $if_match;
  public IfModifiedSince $if_modified_since;
  public IfNoneMatch $if_none_match;
  public IfUnmodifiedSince $if_unmodified_since;
  public ObjectKey $key;
  public PartNumber $part_number;
  public Range $range;
  public RequestPayer $request_payer;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKey $sse_customer_key;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public ObjectVersionId $version_id;
}

class HostName {
}

class HttpErrorCodeReturnedEquals {
}

class HttpRedirectCode {
}

class ID {
}

class IfMatch {
}

class IfModifiedSince {
}

class IfNoneMatch {
}

class IfUnmodifiedSince {
}

class IndexDocument {
  public Suffix $suffix;
}

class Initiated {
}

class Initiator {
  public DisplayName $display_name;
  public ID $id;
}

class InputSerialization {
  public CSVInput $csv;
  public CompressionType $compression_type;
  public JSONInput $json;
  public ParquetInput $parquet;
}

class InventoryConfiguration {
  public InventoryDestination $destination;
  public InventoryFilter $filter;
  public InventoryId $id;
  public InventoryIncludedObjectVersions $included_object_versions;
  public IsEnabled $is_enabled;
  public InventoryOptionalFields $optional_fields;
  public InventorySchedule $schedule;
}


class InventoryDestination {
  public InventoryS3BucketDestination $s_3_bucket_destination;
}

class InventoryEncryption {
  public SSEKMS $ssekms;
  public SSES3 $sses_3;
}

class InventoryFilter {
  public Prefix $prefix;
}

class InventoryFormat {
}

class InventoryFrequency {
}

class InventoryId {
}

class InventoryIncludedObjectVersions {
}

class InventoryOptionalField {
}

class InventoryOptionalFields {
}

class InventoryS3BucketDestination {
  public AccountId $account_id;
  public BucketName $bucket;
  public InventoryEncryption $encryption;
  public InventoryFormat $format;
  public Prefix $prefix;
}

class InventorySchedule {
  public InventoryFrequency $frequency;
}

class IsEnabled {
}

class IsLatest {
}

class IsPublic {
}

class IsTruncated {
}

class JSONInput {
  public JSONType $type;
}

class JSONOutput {
  public RecordDelimiter $record_delimiter;
}

class JSONType {
}

class KMSContext {
}

class KeyCount {
}

class KeyMarker {
}

class KeyPrefixEquals {
}

class LambdaFunctionArn {
}

class LambdaFunctionConfiguration {
  public EventList $events;
  public NotificationConfigurationFilter $filter;
  public NotificationId $id;
  public LambdaFunctionArn $lambda_function_arn;
}


class LastModified {
}

class LifecycleConfiguration {
  public Rules $rules;
}

class LifecycleExpiration {
  public Date $date;
  public Days $days;
  public ExpiredObjectDeleteMarker $expired_object_delete_marker;
}

class LifecycleRule {
  public AbortIncompleteMultipartUpload $abort_incomplete_multipart_upload;
  public LifecycleExpiration $expiration;
  public LifecycleRuleFilter $filter;
  public ID $id;
  public NoncurrentVersionExpiration $noncurrent_version_expiration;
  public NoncurrentVersionTransitionList $noncurrent_version_transitions;
  public Prefix $prefix;
  public ExpirationStatus $status;
  public TransitionList $transitions;
}

class LifecycleRuleAndOperator {
  public Prefix $prefix;
  public TagSet $tags;
}

class LifecycleRuleFilter {
  public LifecycleRuleAndOperator $and;
  public Prefix $prefix;
  public Tag $tag;
}


class ListBucketAnalyticsConfigurationsOutput {
  public AnalyticsConfigurationList $analytics_configuration_list;
  public Token $continuation_token;
  public IsTruncated $is_truncated;
  public NextToken $next_continuation_token;
}

class ListBucketAnalyticsConfigurationsRequest {
  public BucketName $bucket;
  public Token $continuation_token;
}

class ListBucketInventoryConfigurationsOutput {
  public Token $continuation_token;
  public InventoryConfigurationList $inventory_configuration_list;
  public IsTruncated $is_truncated;
  public NextToken $next_continuation_token;
}

class ListBucketInventoryConfigurationsRequest {
  public BucketName $bucket;
  public Token $continuation_token;
}

class ListBucketMetricsConfigurationsOutput {
  public Token $continuation_token;
  public IsTruncated $is_truncated;
  public MetricsConfigurationList $metrics_configuration_list;
  public NextToken $next_continuation_token;
}

class ListBucketMetricsConfigurationsRequest {
  public BucketName $bucket;
  public Token $continuation_token;
}

class ListBucketsOutput {
  public Buckets $buckets;
  public Owner $owner;
}

class ListMultipartUploadsOutput {
  public BucketName $bucket;
  public CommonPrefixList $common_prefixes;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public IsTruncated $is_truncated;
  public KeyMarker $key_marker;
  public MaxUploads $max_uploads;
  public NextKeyMarker $next_key_marker;
  public NextUploadIdMarker $next_upload_id_marker;
  public Prefix $prefix;
  public UploadIdMarker $upload_id_marker;
  public MultipartUploadList $uploads;
}

class ListMultipartUploadsRequest {
  public BucketName $bucket;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public KeyMarker $key_marker;
  public MaxUploads $max_uploads;
  public Prefix $prefix;
  public UploadIdMarker $upload_id_marker;
}

class ListObjectVersionsOutput {
  public CommonPrefixList $common_prefixes;
  public DeleteMarkers $delete_markers;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public IsTruncated $is_truncated;
  public KeyMarker $key_marker;
  public MaxKeys $max_keys;
  public BucketName $name;
  public NextKeyMarker $next_key_marker;
  public NextVersionIdMarker $next_version_id_marker;
  public Prefix $prefix;
  public VersionIdMarker $version_id_marker;
  public ObjectVersionList $versions;
}

class ListObjectVersionsRequest {
  public BucketName $bucket;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public KeyMarker $key_marker;
  public MaxKeys $max_keys;
  public Prefix $prefix;
  public VersionIdMarker $version_id_marker;
}

class ListObjectsOutput {
  public CommonPrefixList $common_prefixes;
  public ObjectList $contents;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public IsTruncated $is_truncated;
  public Marker $marker;
  public MaxKeys $max_keys;
  public BucketName $name;
  public NextMarker $next_marker;
  public Prefix $prefix;
}

class ListObjectsRequest {
  public BucketName $bucket;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public Marker $marker;
  public MaxKeys $max_keys;
  public Prefix $prefix;
  public RequestPayer $request_payer;
}

class ListObjectsV2Output {
  public CommonPrefixList $common_prefixes;
  public ObjectList $contents;
  public Token $continuation_token;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public IsTruncated $is_truncated;
  public KeyCount $key_count;
  public MaxKeys $max_keys;
  public BucketName $name;
  public NextToken $next_continuation_token;
  public Prefix $prefix;
  public StartAfter $start_after;
}

class ListObjectsV2Request {
  public BucketName $bucket;
  public Token $continuation_token;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public FetchOwner $fetch_owner;
  public MaxKeys $max_keys;
  public Prefix $prefix;
  public RequestPayer $request_payer;
  public StartAfter $start_after;
}

class ListPartsOutput {
  public AbortDate $abort_date;
  public AbortRuleId $abort_rule_id;
  public BucketName $bucket;
  public Initiator $initiator;
  public IsTruncated $is_truncated;
  public ObjectKey $key;
  public MaxParts $max_parts;
  public NextPartNumberMarker $next_part_number_marker;
  public Owner $owner;
  public PartNumberMarker $part_number_marker;
  public Parts $parts;
  public RequestCharged $request_charged;
  public StorageClass $storage_class;
  public MultipartUploadId $upload_id;
}

class ListPartsRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public MaxParts $max_parts;
  public PartNumberMarker $part_number_marker;
  public RequestPayer $request_payer;
  public MultipartUploadId $upload_id;
}

class Location {
}

class LocationPrefix {
}

class LoggingEnabled {
  public TargetBucket $target_bucket;
  public TargetGrants $target_grants;
  public TargetPrefix $target_prefix;
}

class MFA {
}

class MFADelete {
}

class MFADeleteStatus {
}

class Marker {
}

class MaxAgeSeconds {
}

class MaxKeys {
}

class MaxParts {
}

class MaxUploads {
}

class Message {
}

class Metadata {
}

class MetadataDirective {
}

class MetadataEntry {
  public MetadataKey $name;
  public MetadataValue $value;
}

class MetadataKey {
}

class MetadataValue {
}

class Metrics {
  public ReplicationTimeValue $event_threshold;
  public MetricsStatus $status;
}

class MetricsAndOperator {
  public Prefix $prefix;
  public TagSet $tags;
}

class MetricsConfiguration {
  public MetricsFilter $filter;
  public MetricsId $id;
}


class MetricsFilter {
  public MetricsAndOperator $and;
  public Prefix $prefix;
  public Tag $tag;
}

class MetricsId {
}

class MetricsStatus {
}

class Minutes {
}

class MissingMeta {
}

class MultipartUpload {
  public Initiated $initiated;
  public Initiator $initiator;
  public ObjectKey $key;
  public Owner $owner;
  public StorageClass $storage_class;
  public MultipartUploadId $upload_id;
}

class MultipartUploadId {
}


class NextKeyMarker {
}

class NextMarker {
}

class NextPartNumberMarker {
}

class NextToken {
}

class NextUploadIdMarker {
}

class NextVersionIdMarker {
}

class NoSuchBucket {
}

class NoSuchKey {
}

class NoSuchUpload {
}

class NoncurrentVersionExpiration {
  public Days $noncurrent_days;
}

class NoncurrentVersionTransition {
  public Days $noncurrent_days;
  public TransitionStorageClass $storage_class;
}


class NotificationConfiguration {
  public LambdaFunctionConfigurationList $lambda_function_configurations;
  public QueueConfigurationList $queue_configurations;
  public TopicConfigurationList $topic_configurations;
}

class NotificationConfigurationDeprecated {
  public CloudFunctionConfiguration $cloud_function_configuration;
  public QueueConfigurationDeprecated $queue_configuration;
  public TopicConfigurationDeprecated $topic_configuration;
}

class NotificationConfigurationFilter {
  public S3KeyFilter $key;
}

class NotificationId {
}

class Object {
  public ETag $e_tag;
  public ObjectKey $key;
  public LastModified $last_modified;
  public Owner $owner;
  public Size $size;
  public ObjectStorageClass $storage_class;
}

class ObjectAlreadyInActiveTierError {
}

class ObjectCannedACL {
}

class ObjectIdentifier {
  public ObjectKey $key;
  public ObjectVersionId $version_id;
}


class ObjectKey {
}


class ObjectLockConfiguration {
  public ObjectLockEnabled $object_lock_enabled;
  public ObjectLockRule $rule;
}

class ObjectLockEnabled {
}

class ObjectLockEnabledForBucket {
}

class ObjectLockLegalHold {
  public ObjectLockLegalHoldStatus $status;
}

class ObjectLockLegalHoldStatus {
}

class ObjectLockMode {
}

class ObjectLockRetainUntilDate {
}

class ObjectLockRetention {
  public ObjectLockRetentionMode $mode;
  public Date $retain_until_date;
}

class ObjectLockRetentionMode {
}

class ObjectLockRule {
  public DefaultRetention $default_retention;
}

class ObjectLockToken {
}

class ObjectNotInActiveTierError {
}

class ObjectStorageClass {
}

class ObjectVersion {
  public ETag $e_tag;
  public IsLatest $is_latest;
  public ObjectKey $key;
  public LastModified $last_modified;
  public Owner $owner;
  public Size $size;
  public ObjectVersionStorageClass $storage_class;
  public ObjectVersionId $version_id;
}

class ObjectVersionId {
}


class ObjectVersionStorageClass {
}

class OutputLocation {
  public S3Location $s_3;
}

class OutputSerialization {
  public CSVOutput $csv;
  public JSONOutput $json;
}

class Owner {
  public DisplayName $display_name;
  public ID $id;
}

class OwnerOverride {
}

class ParquetInput {
}

class Part {
  public ETag $e_tag;
  public LastModified $last_modified;
  public PartNumber $part_number;
  public Size $size;
}

class PartNumber {
}

class PartNumberMarker {
}


class PartsCount {
}

class Payer {
}

class Permission {
}

class Policy {
}

class PolicyStatus {
  public IsPublic $is_public;
}

class Prefix {
}

class Priority {
}

class Progress {
  public BytesProcessed $bytes_processed;
  public BytesReturned $bytes_returned;
  public BytesScanned $bytes_scanned;
}

class ProgressEvent {
  public Progress $details;
}

class Protocol {
}

class PublicAccessBlockConfiguration {
  public Setting $block_public_acls;
  public Setting $block_public_policy;
  public Setting $ignore_public_acls;
  public Setting $restrict_public_buckets;
}

class PutBucketAccelerateConfigurationRequest {
  public AccelerateConfiguration $accelerate_configuration;
  public BucketName $bucket;
}

class PutBucketAclRequest {
  public BucketCannedACL $acl;
  public AccessControlPolicy $access_control_policy;
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public GrantFullControl $grant_full_control;
  public GrantRead $grant_read;
  public GrantReadACP $grant_read_acp;
  public GrantWrite $grant_write;
  public GrantWriteACP $grant_write_acp;
}

class PutBucketAnalyticsConfigurationRequest {
  public AnalyticsConfiguration $analytics_configuration;
  public BucketName $bucket;
  public AnalyticsId $id;
}

class PutBucketCorsRequest {
  public BucketName $bucket;
  public CORSConfiguration $cors_configuration;
  public ContentMD5 $content_md_5;
}

class PutBucketEncryptionRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;
}

class PutBucketInventoryConfigurationRequest {
  public BucketName $bucket;
  public InventoryId $id;
  public InventoryConfiguration $inventory_configuration;
}

class PutBucketLifecycleConfigurationRequest {
  public BucketName $bucket;
  public BucketLifecycleConfiguration $lifecycle_configuration;
}

class PutBucketLifecycleRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public LifecycleConfiguration $lifecycle_configuration;
}

class PutBucketLoggingRequest {
  public BucketName $bucket;
  public BucketLoggingStatus $bucket_logging_status;
  public ContentMD5 $content_md_5;
}

class PutBucketMetricsConfigurationRequest {
  public BucketName $bucket;
  public MetricsId $id;
  public MetricsConfiguration $metrics_configuration;
}

class PutBucketNotificationConfigurationRequest {
  public BucketName $bucket;
  public NotificationConfiguration $notification_configuration;
}

class PutBucketNotificationRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public NotificationConfigurationDeprecated $notification_configuration;
}

class PutBucketPolicyRequest {
  public BucketName $bucket;
  public ConfirmRemoveSelfBucketAccess $confirm_remove_self_bucket_access;
  public ContentMD5 $content_md_5;
  public Policy $policy;
}

class PutBucketReplicationRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ReplicationConfiguration $replication_configuration;
  public ObjectLockToken $token;
}

class PutBucketRequestPaymentRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public RequestPaymentConfiguration $request_payment_configuration;
}

class PutBucketTaggingRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public Tagging $tagging;
}

class PutBucketVersioningRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public MFA $mfa;
  public VersioningConfiguration $versioning_configuration;
}

class PutBucketWebsiteRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public WebsiteConfiguration $website_configuration;
}

class PutObjectAclOutput {
  public RequestCharged $request_charged;
}

class PutObjectAclRequest {
  public ObjectCannedACL $acl;
  public AccessControlPolicy $access_control_policy;
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public GrantFullControl $grant_full_control;
  public GrantRead $grant_read;
  public GrantReadACP $grant_read_acp;
  public GrantWrite $grant_write;
  public GrantWriteACP $grant_write_acp;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;
}

class PutObjectLegalHoldOutput {
  public RequestCharged $request_charged;
}

class PutObjectLegalHoldRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ObjectKey $key;
  public ObjectLockLegalHold $legal_hold;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;
}

class PutObjectLockConfigurationOutput {
  public RequestCharged $request_charged;
}

class PutObjectLockConfigurationRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ObjectLockConfiguration $object_lock_configuration;
  public RequestPayer $request_payer;
  public ObjectLockToken $token;
}

class PutObjectOutput {
  public ETag $e_tag;
  public Expiration $expiration;
  public RequestCharged $request_charged;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSEncryptionContext $ssekms_encryption_context;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public ObjectVersionId $version_id;
}

class PutObjectRequest {
  public ObjectCannedACL $acl;
  public Body $body;
  public BucketName $bucket;
  public CacheControl $cache_control;
  public ContentDisposition $content_disposition;
  public ContentEncoding $content_encoding;
  public ContentLanguage $content_language;
  public ContentLength $content_length;
  public ContentMD5 $content_md_5;
  public ContentType $content_type;
  public Expires $expires;
  public GrantFullControl $grant_full_control;
  public GrantRead $grant_read;
  public GrantReadACP $grant_read_acp;
  public GrantWriteACP $grant_write_acp;
  public ObjectKey $key;
  public Metadata $metadata;
  public ObjectLockLegalHoldStatus $object_lock_legal_hold_status;
  public ObjectLockMode $object_lock_mode;
  public ObjectLockRetainUntilDate $object_lock_retain_until_date;
  public RequestPayer $request_payer;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKey $sse_customer_key;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSEncryptionContext $ssekms_encryption_context;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
  public StorageClass $storage_class;
  public TaggingHeader $tagging;
  public WebsiteRedirectLocation $website_redirect_location;
}

class PutObjectRetentionOutput {
  public RequestCharged $request_charged;
}

class PutObjectRetentionRequest {
  public BucketName $bucket;
  public BypassGovernanceRetention $bypass_governance_retention;
  public ContentMD5 $content_md_5;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectLockRetention $retention;
  public ObjectVersionId $version_id;
}

class PutObjectTaggingOutput {
  public ObjectVersionId $version_id;
}

class PutObjectTaggingRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ObjectKey $key;
  public Tagging $tagging;
  public ObjectVersionId $version_id;
}

class PutPublicAccessBlockRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public PublicAccessBlockConfiguration $public_access_block_configuration;
}

class QueueArn {
}

class QueueConfiguration {
  public EventList $events;
  public NotificationConfigurationFilter $filter;
  public NotificationId $id;
  public QueueArn $queue_arn;
}

class QueueConfigurationDeprecated {
  public Event $event;
  public EventList $events;
  public NotificationId $id;
  public QueueArn $queue;
}


class Quiet {
}

class QuoteCharacter {
}

class QuoteEscapeCharacter {
}

class QuoteFields {
}

class Range {
}

class RecordDelimiter {
}

class RecordsEvent {
  public Body $payload;
}

class Redirect {
  public HostName $host_name;
  public HttpRedirectCode $http_redirect_code;
  public Protocol $protocol;
  public ReplaceKeyPrefixWith $replace_key_prefix_with;
  public ReplaceKeyWith $replace_key_with;
}

class RedirectAllRequestsTo {
  public HostName $host_name;
  public Protocol $protocol;
}

class ReplaceKeyPrefixWith {
}

class ReplaceKeyWith {
}

class ReplicaKmsKeyID {
}

class ReplicationConfiguration {
  public Role $role;
  public ReplicationRules $rules;
}

class ReplicationRule {
  public DeleteMarkerReplication $delete_marker_replication;
  public Destination $destination;
  public ExistingObjectReplication $existing_object_replication;
  public ReplicationRuleFilter $filter;
  public ID $id;
  public Prefix $prefix;
  public Priority $priority;
  public SourceSelectionCriteria $source_selection_criteria;
  public ReplicationRuleStatus $status;
}

class ReplicationRuleAndOperator {
  public Prefix $prefix;
  public TagSet $tags;
}

class ReplicationRuleFilter {
  public ReplicationRuleAndOperator $and;
  public Prefix $prefix;
  public Tag $tag;
}

class ReplicationRuleStatus {
}


class ReplicationStatus {
}

class ReplicationTime {
  public ReplicationTimeStatus $status;
  public ReplicationTimeValue $time;
}

class ReplicationTimeStatus {
}

class ReplicationTimeValue {
  public Minutes $minutes;
}

class RequestCharged {
}

class RequestPayer {
}

class RequestPaymentConfiguration {
  public Payer $payer;
}

class RequestProgress {
  public EnableRequestProgress $enabled;
}

class ResponseCacheControl {
}

class ResponseContentDisposition {
}

class ResponseContentEncoding {
}

class ResponseContentLanguage {
}

class ResponseContentType {
}

class ResponseExpires {
}

class Restore {
}

class RestoreObjectOutput {
  public RequestCharged $request_charged;
  public RestoreOutputPath $restore_output_path;
}

class RestoreObjectRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public RestoreRequest $restore_request;
  public ObjectVersionId $version_id;
}

class RestoreOutputPath {
}

class RestoreRequest {
  public Days $days;
  public Description $description;
  public GlacierJobParameters $glacier_job_parameters;
  public OutputLocation $output_location;
  public SelectParameters $select_parameters;
  public Tier $tier;
  public RestoreRequestType $type;
}

class RestoreRequestType {
}

class Role {
}

class RoutingRule {
  public Condition $condition;
  public Redirect $redirect;
}

class RoutingRules {
}

class Rule {
  public AbortIncompleteMultipartUpload $abort_incomplete_multipart_upload;
  public LifecycleExpiration $expiration;
  public ID $id;
  public NoncurrentVersionExpiration $noncurrent_version_expiration;
  public NoncurrentVersionTransition $noncurrent_version_transition;
  public Prefix $prefix;
  public ExpirationStatus $status;
  public Transition $transition;
}


class S3KeyFilter {
  public FilterRuleList $filter_rules;
}

class S3Location {
  public Grants $access_control_list;
  public BucketName $bucket_name;
  public ObjectCannedACL $canned_acl;
  public Encryption $encryption;
  public LocationPrefix $prefix;
  public StorageClass $storage_class;
  public Tagging $tagging;
  public UserMetadata $user_metadata;
}

class SSECustomerAlgorithm {
}

class SSECustomerKey {
}

class SSECustomerKeyMD5 {
}

class SSEKMS {
  public SSEKMSKeyId $key_id;
}

class SSEKMSEncryptionContext {
}

class SSEKMSKeyId {
}

class SSES3 {
}

class ScanRange {
  public End $end;
  public Start $start;
}

class SelectObjectContentEventStream {
  public ContinuationEvent $cont;
  public EndEvent $end;
  public ProgressEvent $progress;
  public RecordsEvent $records;
  public StatsEvent $stats;
}

class SelectObjectContentOutput {
  public SelectObjectContentEventStream $payload;
}

class SelectObjectContentRequest {
  public BucketName $bucket;
  public Expression $expression;
  public ExpressionType $expression_type;
  public InputSerialization $input_serialization;
  public ObjectKey $key;
  public OutputSerialization $output_serialization;
  public RequestProgress $request_progress;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKey $sse_customer_key;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public ScanRange $scan_range;
}

class SelectParameters {
  public Expression $expression;
  public ExpressionType $expression_type;
  public InputSerialization $input_serialization;
  public OutputSerialization $output_serialization;
}

class ServerSideEncryption {
}

class ServerSideEncryptionByDefault {
  public SSEKMSKeyId $kms_master_key_id;
  public ServerSideEncryption $sse_algorithm;
}

class ServerSideEncryptionConfiguration {
  public ServerSideEncryptionRules $rules;
}

class ServerSideEncryptionRule {
  public ServerSideEncryptionByDefault $apply_server_side_encryption_by_default;
}


class Setting {
}

class Size {
}

class SourceSelectionCriteria {
  public SseKmsEncryptedObjects $sse_kms_encrypted_objects;
}

class SseKmsEncryptedObjects {
  public SseKmsEncryptedObjectsStatus $status;
}

class SseKmsEncryptedObjectsStatus {
}

class Start {
}

class StartAfter {
}

class Stats {
  public BytesProcessed $bytes_processed;
  public BytesReturned $bytes_returned;
  public BytesScanned $bytes_scanned;
}

class StatsEvent {
  public Stats $details;
}

class StorageClass {
}

class StorageClassAnalysis {
  public StorageClassAnalysisDataExport $data_export;
}

class StorageClassAnalysisDataExport {
  public AnalyticsExportDestination $destination;
  public StorageClassAnalysisSchemaVersion $output_schema_version;
}

class StorageClassAnalysisSchemaVersion {
}

class Suffix {
}

class Tag {
  public ObjectKey $key;
  public Value $value;
}

class TagCount {
}

class TagSet {
}

class Tagging {
  public TagSet $tag_set;
}

class TaggingDirective {
}

class TaggingHeader {
}

class TargetBucket {
}

class TargetGrant {
  public Grantee $grantee;
  public BucketLogsPermission $permission;
}

class TargetGrants {
}

class TargetPrefix {
}

class Tier {
}

class Token {
}

class TopicArn {
}

class TopicConfiguration {
  public EventList $events;
  public NotificationConfigurationFilter $filter;
  public NotificationId $id;
  public TopicArn $topic_arn;
}

class TopicConfigurationDeprecated {
  public Event $event;
  public EventList $events;
  public NotificationId $id;
  public TopicArn $topic;
}


class Transition {
  public Date $date;
  public Days $days;
  public TransitionStorageClass $storage_class;
}


class TransitionStorageClass {
}

class Type {
}

class URI {
}

class UploadIdMarker {
}

class UploadPartCopyOutput {
  public CopyPartResult $copy_part_result;
  public CopySourceVersionId $copy_source_version_id;
  public RequestCharged $request_charged;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
}

class UploadPartCopyRequest {
  public BucketName $bucket;
  public CopySource $copy_source;
  public CopySourceIfMatch $copy_source_if_match;
  public CopySourceIfModifiedSince $copy_source_if_modified_since;
  public CopySourceIfNoneMatch $copy_source_if_none_match;
  public CopySourceIfUnmodifiedSince $copy_source_if_unmodified_since;
  public CopySourceRange $copy_source_range;
  public CopySourceSSECustomerAlgorithm $copy_source_sse_customer_algorithm;
  public CopySourceSSECustomerKey $copy_source_sse_customer_key;
  public CopySourceSSECustomerKeyMD5 $copy_source_sse_customer_key_md_5;
  public ObjectKey $key;
  public PartNumber $part_number;
  public RequestPayer $request_payer;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKey $sse_customer_key;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public MultipartUploadId $upload_id;
}

class UploadPartOutput {
  public ETag $e_tag;
  public RequestCharged $request_charged;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;
}

class UploadPartRequest {
  public Body $body;
  public BucketName $bucket;
  public ContentLength $content_length;
  public ContentMD5 $content_md_5;
  public ObjectKey $key;
  public PartNumber $part_number;
  public RequestPayer $request_payer;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKey $sse_customer_key;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public MultipartUploadId $upload_id;
}

class UserMetadata {
}

class Value {
}

class VersionIdMarker {
}

class VersioningConfiguration {
  public MFADelete $mfa_delete;
  public BucketVersioningStatus $status;
}

class WebsiteConfiguration {
  public ErrorDocument $error_document;
  public IndexDocument $index_document;
  public RedirectAllRequestsTo $redirect_all_requests_to;
  public RoutingRules $routing_rules;
}

class WebsiteRedirectLocation {
}

class Years {
}

