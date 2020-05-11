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

type AbortDate = int;

class AbortIncompleteMultipartUpload {
  public DaysAfterInitiation $days_after_initiation;

  public function __construct(shape(
  ?'days_after_initiation' => DaysAfterInitiation,
  ) $s = shape()) {
    $this->days_after_initiation = $days_after_initiation ?? 0;
  }
}

class AbortMultipartUploadOutput {
  public RequestCharged $request_charged;

  public function __construct(shape(
  ?'request_charged' => RequestCharged,
  ) $s = shape()) {
    $this->request_charged = $request_charged ?? "";
  }
}

class AbortMultipartUploadRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public MultipartUploadId $upload_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'request_payer' => RequestPayer,
  ?'upload_id' => MultipartUploadId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

type AbortRuleId = string;

class AccelerateConfiguration {
  public BucketAccelerateStatus $status;

  public function __construct(shape(
  ?'status' => BucketAccelerateStatus,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type AcceptRanges = string;

class AccessControlPolicy {
  public Grants $grants;
  public Owner $owner;

  public function __construct(shape(
  ?'grants' => Grants,
  ?'owner' => Owner,
  ) $s = shape()) {
    $this->grants = $grants ?? [];
    $this->owner = $owner ?? null;
  }
}

class AccessControlTranslation {
  public OwnerOverride $owner;

  public function __construct(shape(
  ?'owner' => OwnerOverride,
  ) $s = shape()) {
    $this->owner = $owner ?? "";
  }
}

type AccountId = string;

type AllowQuotedRecordDelimiter = bool;

type AllowedHeader = string;

type AllowedHeaders = vec<AllowedHeader>;

type AllowedMethod = string;

type AllowedMethods = vec<AllowedMethod>;

type AllowedOrigin = string;

type AllowedOrigins = vec<AllowedOrigin>;

class AnalyticsAndOperator {
  public Prefix $prefix;
  public TagSet $tags;

  public function __construct(shape(
  ?'prefix' => Prefix,
  ?'tags' => TagSet,
  ) $s = shape()) {
    $this->prefix = $prefix ?? "";
    $this->tags = $tags ?? [];
  }
}

class AnalyticsConfiguration {
  public AnalyticsFilter $filter;
  public AnalyticsId $id;
  public StorageClassAnalysis $storage_class_analysis;

  public function __construct(shape(
  ?'filter' => AnalyticsFilter,
  ?'id' => AnalyticsId,
  ?'storage_class_analysis' => StorageClassAnalysis,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->id = $id ?? "";
    $this->storage_class_analysis = $storage_class_analysis ?? null;
  }
}

type AnalyticsConfigurationList = vec<AnalyticsConfiguration>;

class AnalyticsExportDestination {
  public AnalyticsS3BucketDestination $s_3_bucket_destination;

  public function __construct(shape(
  ?'s_3_bucket_destination' => AnalyticsS3BucketDestination,
  ) $s = shape()) {
    $this->s_3_bucket_destination = $s_3_bucket_destination ?? null;
  }
}

class AnalyticsFilter {
  public AnalyticsAndOperator $and;
  public Prefix $prefix;
  public Tag $tag;

  public function __construct(shape(
  ?'and' => AnalyticsAndOperator,
  ?'prefix' => Prefix,
  ?'tag' => Tag,
  ) $s = shape()) {
    $this->and = $and ?? null;
    $this->prefix = $prefix ?? "";
    $this->tag = $tag ?? null;
  }
}

type AnalyticsId = string;

class AnalyticsS3BucketDestination {
  public BucketName $bucket;
  public AccountId $bucket_account_id;
  public AnalyticsS3ExportFileFormat $format;
  public Prefix $prefix;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'bucket_account_id' => AccountId,
  ?'format' => AnalyticsS3ExportFileFormat,
  ?'prefix' => Prefix,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->bucket_account_id = $bucket_account_id ?? "";
    $this->format = $format ?? "";
    $this->prefix = $prefix ?? "";
  }
}

type AnalyticsS3ExportFileFormat = string;

type Body = string;

class Bucket {
  public CreationDate $creation_date;
  public BucketName $name;

  public function __construct(shape(
  ?'creation_date' => CreationDate,
  ?'name' => BucketName,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? 0;
    $this->name = $name ?? "";
  }
}

type BucketAccelerateStatus = string;

class BucketAlreadyExists {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BucketAlreadyOwnedByYou {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type BucketCannedACL = string;

class BucketLifecycleConfiguration {
  public LifecycleRules $rules;

  public function __construct(shape(
  ?'rules' => LifecycleRules,
  ) $s = shape()) {
    $this->rules = $rules ?? [];
  }
}

type BucketLocationConstraint = string;

class BucketLoggingStatus {
  public LoggingEnabled $logging_enabled;

  public function __construct(shape(
  ?'logging_enabled' => LoggingEnabled,
  ) $s = shape()) {
    $this->logging_enabled = $logging_enabled ?? null;
  }
}

type BucketLogsPermission = string;

type BucketName = string;

type BucketVersioningStatus = string;

type Buckets = vec<Bucket>;

type BypassGovernanceRetention = bool;

type BytesProcessed = int;

type BytesReturned = int;

type BytesScanned = int;

class CORSConfiguration {
  public CORSRules $cors_rules;

  public function __construct(shape(
  ?'cors_rules' => CORSRules,
  ) $s = shape()) {
    $this->cors_rules = $cors_rules ?? [];
  }
}

class CORSRule {
  public AllowedHeaders $allowed_headers;
  public AllowedMethods $allowed_methods;
  public AllowedOrigins $allowed_origins;
  public ExposeHeaders $expose_headers;
  public MaxAgeSeconds $max_age_seconds;

  public function __construct(shape(
  ?'allowed_headers' => AllowedHeaders,
  ?'allowed_methods' => AllowedMethods,
  ?'allowed_origins' => AllowedOrigins,
  ?'expose_headers' => ExposeHeaders,
  ?'max_age_seconds' => MaxAgeSeconds,
  ) $s = shape()) {
    $this->allowed_headers = $allowed_headers ?? [];
    $this->allowed_methods = $allowed_methods ?? [];
    $this->allowed_origins = $allowed_origins ?? [];
    $this->expose_headers = $expose_headers ?? [];
    $this->max_age_seconds = $max_age_seconds ?? 0;
  }
}

type CORSRules = vec<CORSRule>;

class CSVInput {
  public AllowQuotedRecordDelimiter $allow_quoted_record_delimiter;
  public Comments $comments;
  public FieldDelimiter $field_delimiter;
  public FileHeaderInfo $file_header_info;
  public QuoteCharacter $quote_character;
  public QuoteEscapeCharacter $quote_escape_character;
  public RecordDelimiter $record_delimiter;

  public function __construct(shape(
  ?'allow_quoted_record_delimiter' => AllowQuotedRecordDelimiter,
  ?'comments' => Comments,
  ?'field_delimiter' => FieldDelimiter,
  ?'file_header_info' => FileHeaderInfo,
  ?'quote_character' => QuoteCharacter,
  ?'quote_escape_character' => QuoteEscapeCharacter,
  ?'record_delimiter' => RecordDelimiter,
  ) $s = shape()) {
    $this->allow_quoted_record_delimiter = $allow_quoted_record_delimiter ?? false;
    $this->comments = $comments ?? "";
    $this->field_delimiter = $field_delimiter ?? "";
    $this->file_header_info = $file_header_info ?? "";
    $this->quote_character = $quote_character ?? "";
    $this->quote_escape_character = $quote_escape_character ?? "";
    $this->record_delimiter = $record_delimiter ?? "";
  }
}

class CSVOutput {
  public FieldDelimiter $field_delimiter;
  public QuoteCharacter $quote_character;
  public QuoteEscapeCharacter $quote_escape_character;
  public QuoteFields $quote_fields;
  public RecordDelimiter $record_delimiter;

  public function __construct(shape(
  ?'field_delimiter' => FieldDelimiter,
  ?'quote_character' => QuoteCharacter,
  ?'quote_escape_character' => QuoteEscapeCharacter,
  ?'quote_fields' => QuoteFields,
  ?'record_delimiter' => RecordDelimiter,
  ) $s = shape()) {
    $this->field_delimiter = $field_delimiter ?? "";
    $this->quote_character = $quote_character ?? "";
    $this->quote_escape_character = $quote_escape_character ?? "";
    $this->quote_fields = $quote_fields ?? "";
    $this->record_delimiter = $record_delimiter ?? "";
  }
}

type CacheControl = string;

type CloudFunction = string;

class CloudFunctionConfiguration {
  public CloudFunction $cloud_function;
  public Event $event;
  public EventList $events;
  public NotificationId $id;
  public CloudFunctionInvocationRole $invocation_role;

  public function __construct(shape(
  ?'cloud_function' => CloudFunction,
  ?'event' => Event,
  ?'events' => EventList,
  ?'id' => NotificationId,
  ?'invocation_role' => CloudFunctionInvocationRole,
  ) $s = shape()) {
    $this->cloud_function = $cloud_function ?? "";
    $this->event = $event ?? "";
    $this->events = $events ?? [];
    $this->id = $id ?? "";
    $this->invocation_role = $invocation_role ?? "";
  }
}

type CloudFunctionInvocationRole = string;

type Code = string;

type Comments = string;

class CommonPrefix {
  public Prefix $prefix;

  public function __construct(shape(
  ?'prefix' => Prefix,
  ) $s = shape()) {
    $this->prefix = $prefix ?? "";
  }
}

type CommonPrefixList = vec<CommonPrefix>;

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

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'e_tag' => ETag,
  ?'expiration' => Expiration,
  ?'key' => ObjectKey,
  ?'location' => Location,
  ?'request_charged' => RequestCharged,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->e_tag = $e_tag ?? "";
    $this->expiration = $expiration ?? "";
    $this->key = $key ?? "";
    $this->location = $location ?? "";
    $this->request_charged = $request_charged ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class CompleteMultipartUploadRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public CompletedMultipartUpload $multipart_upload;
  public RequestPayer $request_payer;
  public MultipartUploadId $upload_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'multipart_upload' => CompletedMultipartUpload,
  ?'request_payer' => RequestPayer,
  ?'upload_id' => MultipartUploadId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->multipart_upload = $multipart_upload ?? null;
    $this->request_payer = $request_payer ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

class CompletedMultipartUpload {
  public CompletedPartList $parts;

  public function __construct(shape(
  ?'parts' => CompletedPartList,
  ) $s = shape()) {
    $this->parts = $parts ?? [];
  }
}

class CompletedPart {
  public ETag $e_tag;
  public PartNumber $part_number;

  public function __construct(shape(
  ?'e_tag' => ETag,
  ?'part_number' => PartNumber,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? "";
    $this->part_number = $part_number ?? 0;
  }
}

type CompletedPartList = vec<CompletedPart>;

type CompressionType = string;

class Condition {
  public HttpErrorCodeReturnedEquals $http_error_code_returned_equals;
  public KeyPrefixEquals $key_prefix_equals;

  public function __construct(shape(
  ?'http_error_code_returned_equals' => HttpErrorCodeReturnedEquals,
  ?'key_prefix_equals' => KeyPrefixEquals,
  ) $s = shape()) {
    $this->http_error_code_returned_equals = $http_error_code_returned_equals ?? "";
    $this->key_prefix_equals = $key_prefix_equals ?? "";
  }
}

type ConfirmRemoveSelfBucketAccess = bool;

type ContentDisposition = string;

type ContentEncoding = string;

type ContentLanguage = string;

type ContentLength = int;

type ContentMD5 = string;

type ContentRange = string;

type ContentType = string;

class ContinuationEvent {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'copy_object_result' => CopyObjectResult,
  ?'copy_source_version_id' => CopySourceVersionId,
  ?'expiration' => Expiration,
  ?'request_charged' => RequestCharged,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_encryption_context' => SSEKMSEncryptionContext,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->copy_object_result = $copy_object_result ?? null;
    $this->copy_source_version_id = $copy_source_version_id ?? "";
    $this->expiration = $expiration ?? "";
    $this->request_charged = $request_charged ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_encryption_context = $ssekms_encryption_context ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->version_id = $version_id ?? "";
  }
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

  public function __construct(shape(
  ?'acl' => ObjectCannedACL,
  ?'bucket' => BucketName,
  ?'cache_control' => CacheControl,
  ?'content_disposition' => ContentDisposition,
  ?'content_encoding' => ContentEncoding,
  ?'content_language' => ContentLanguage,
  ?'content_type' => ContentType,
  ?'copy_source' => CopySource,
  ?'copy_source_if_match' => CopySourceIfMatch,
  ?'copy_source_if_modified_since' => CopySourceIfModifiedSince,
  ?'copy_source_if_none_match' => CopySourceIfNoneMatch,
  ?'copy_source_if_unmodified_since' => CopySourceIfUnmodifiedSince,
  ?'copy_source_sse_customer_algorithm' => CopySourceSSECustomerAlgorithm,
  ?'copy_source_sse_customer_key' => CopySourceSSECustomerKey,
  ?'copy_source_sse_customer_key_md_5' => CopySourceSSECustomerKeyMD5,
  ?'expires' => Expires,
  ?'grant_full_control' => GrantFullControl,
  ?'grant_read' => GrantRead,
  ?'grant_read_acp' => GrantReadACP,
  ?'grant_write_acp' => GrantWriteACP,
  ?'key' => ObjectKey,
  ?'metadata' => Metadata,
  ?'metadata_directive' => MetadataDirective,
  ?'object_lock_legal_hold_status' => ObjectLockLegalHoldStatus,
  ?'object_lock_mode' => ObjectLockMode,
  ?'object_lock_retain_until_date' => ObjectLockRetainUntilDate,
  ?'request_payer' => RequestPayer,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key' => SSECustomerKey,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_encryption_context' => SSEKMSEncryptionContext,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'storage_class' => StorageClass,
  ?'tagging' => TaggingHeader,
  ?'tagging_directive' => TaggingDirective,
  ?'website_redirect_location' => WebsiteRedirectLocation,
  ) $s = shape()) {
    $this->acl = $acl ?? "";
    $this->bucket = $bucket ?? "";
    $this->cache_control = $cache_control ?? "";
    $this->content_disposition = $content_disposition ?? "";
    $this->content_encoding = $content_encoding ?? "";
    $this->content_language = $content_language ?? "";
    $this->content_type = $content_type ?? "";
    $this->copy_source = $copy_source ?? "";
    $this->copy_source_if_match = $copy_source_if_match ?? "";
    $this->copy_source_if_modified_since = $copy_source_if_modified_since ?? 0;
    $this->copy_source_if_none_match = $copy_source_if_none_match ?? "";
    $this->copy_source_if_unmodified_since = $copy_source_if_unmodified_since ?? 0;
    $this->copy_source_sse_customer_algorithm = $copy_source_sse_customer_algorithm ?? "";
    $this->copy_source_sse_customer_key = $copy_source_sse_customer_key ?? "";
    $this->copy_source_sse_customer_key_md_5 = $copy_source_sse_customer_key_md_5 ?? "";
    $this->expires = $expires ?? 0;
    $this->grant_full_control = $grant_full_control ?? "";
    $this->grant_read = $grant_read ?? "";
    $this->grant_read_acp = $grant_read_acp ?? "";
    $this->grant_write_acp = $grant_write_acp ?? "";
    $this->key = $key ?? "";
    $this->metadata = $metadata ?? [];
    $this->metadata_directive = $metadata_directive ?? "";
    $this->object_lock_legal_hold_status = $object_lock_legal_hold_status ?? "";
    $this->object_lock_mode = $object_lock_mode ?? "";
    $this->object_lock_retain_until_date = $object_lock_retain_until_date ?? 0;
    $this->request_payer = $request_payer ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key = $sse_customer_key ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_encryption_context = $ssekms_encryption_context ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->storage_class = $storage_class ?? "";
    $this->tagging = $tagging ?? "";
    $this->tagging_directive = $tagging_directive ?? "";
    $this->website_redirect_location = $website_redirect_location ?? "";
  }
}

class CopyObjectResult {
  public ETag $e_tag;
  public LastModified $last_modified;

  public function __construct(shape(
  ?'e_tag' => ETag,
  ?'last_modified' => LastModified,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? "";
    $this->last_modified = $last_modified ?? 0;
  }
}

class CopyPartResult {
  public ETag $e_tag;
  public LastModified $last_modified;

  public function __construct(shape(
  ?'e_tag' => ETag,
  ?'last_modified' => LastModified,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? "";
    $this->last_modified = $last_modified ?? 0;
  }
}

type CopySource = string;

type CopySourceIfMatch = string;

type CopySourceIfModifiedSince = int;

type CopySourceIfNoneMatch = string;

type CopySourceIfUnmodifiedSince = int;

type CopySourceRange = string;

type CopySourceSSECustomerAlgorithm = string;

type CopySourceSSECustomerKey = string;

type CopySourceSSECustomerKeyMD5 = string;

type CopySourceVersionId = string;

class CreateBucketConfiguration {
  public BucketLocationConstraint $location_constraint;

  public function __construct(shape(
  ?'location_constraint' => BucketLocationConstraint,
  ) $s = shape()) {
    $this->location_constraint = $location_constraint ?? "";
  }
}

class CreateBucketOutput {
  public Location $location;

  public function __construct(shape(
  ?'location' => Location,
  ) $s = shape()) {
    $this->location = $location ?? "";
  }
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

  public function __construct(shape(
  ?'acl' => BucketCannedACL,
  ?'bucket' => BucketName,
  ?'create_bucket_configuration' => CreateBucketConfiguration,
  ?'grant_full_control' => GrantFullControl,
  ?'grant_read' => GrantRead,
  ?'grant_read_acp' => GrantReadACP,
  ?'grant_write' => GrantWrite,
  ?'grant_write_acp' => GrantWriteACP,
  ?'object_lock_enabled_for_bucket' => ObjectLockEnabledForBucket,
  ) $s = shape()) {
    $this->acl = $acl ?? "";
    $this->bucket = $bucket ?? "";
    $this->create_bucket_configuration = $create_bucket_configuration ?? null;
    $this->grant_full_control = $grant_full_control ?? "";
    $this->grant_read = $grant_read ?? "";
    $this->grant_read_acp = $grant_read_acp ?? "";
    $this->grant_write = $grant_write ?? "";
    $this->grant_write_acp = $grant_write_acp ?? "";
    $this->object_lock_enabled_for_bucket = $object_lock_enabled_for_bucket ?? false;
  }
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

  public function __construct(shape(
  ?'abort_date' => AbortDate,
  ?'abort_rule_id' => AbortRuleId,
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'request_charged' => RequestCharged,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_encryption_context' => SSEKMSEncryptionContext,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'upload_id' => MultipartUploadId,
  ) $s = shape()) {
    $this->abort_date = $abort_date ?? 0;
    $this->abort_rule_id = $abort_rule_id ?? "";
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->request_charged = $request_charged ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_encryption_context = $ssekms_encryption_context ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->upload_id = $upload_id ?? "";
  }
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

  public function __construct(shape(
  ?'acl' => ObjectCannedACL,
  ?'bucket' => BucketName,
  ?'cache_control' => CacheControl,
  ?'content_disposition' => ContentDisposition,
  ?'content_encoding' => ContentEncoding,
  ?'content_language' => ContentLanguage,
  ?'content_type' => ContentType,
  ?'expires' => Expires,
  ?'grant_full_control' => GrantFullControl,
  ?'grant_read' => GrantRead,
  ?'grant_read_acp' => GrantReadACP,
  ?'grant_write_acp' => GrantWriteACP,
  ?'key' => ObjectKey,
  ?'metadata' => Metadata,
  ?'object_lock_legal_hold_status' => ObjectLockLegalHoldStatus,
  ?'object_lock_mode' => ObjectLockMode,
  ?'object_lock_retain_until_date' => ObjectLockRetainUntilDate,
  ?'request_payer' => RequestPayer,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key' => SSECustomerKey,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_encryption_context' => SSEKMSEncryptionContext,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'storage_class' => StorageClass,
  ?'tagging' => TaggingHeader,
  ?'website_redirect_location' => WebsiteRedirectLocation,
  ) $s = shape()) {
    $this->acl = $acl ?? "";
    $this->bucket = $bucket ?? "";
    $this->cache_control = $cache_control ?? "";
    $this->content_disposition = $content_disposition ?? "";
    $this->content_encoding = $content_encoding ?? "";
    $this->content_language = $content_language ?? "";
    $this->content_type = $content_type ?? "";
    $this->expires = $expires ?? 0;
    $this->grant_full_control = $grant_full_control ?? "";
    $this->grant_read = $grant_read ?? "";
    $this->grant_read_acp = $grant_read_acp ?? "";
    $this->grant_write_acp = $grant_write_acp ?? "";
    $this->key = $key ?? "";
    $this->metadata = $metadata ?? [];
    $this->object_lock_legal_hold_status = $object_lock_legal_hold_status ?? "";
    $this->object_lock_mode = $object_lock_mode ?? "";
    $this->object_lock_retain_until_date = $object_lock_retain_until_date ?? 0;
    $this->request_payer = $request_payer ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key = $sse_customer_key ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_encryption_context = $ssekms_encryption_context ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->storage_class = $storage_class ?? "";
    $this->tagging = $tagging ?? "";
    $this->website_redirect_location = $website_redirect_location ?? "";
  }
}

type CreationDate = int;

type Date = int;

type Days = int;

type DaysAfterInitiation = int;

class DefaultRetention {
  public Days $days;
  public ObjectLockRetentionMode $mode;
  public Years $years;

  public function __construct(shape(
  ?'days' => Days,
  ?'mode' => ObjectLockRetentionMode,
  ?'years' => Years,
  ) $s = shape()) {
    $this->days = $days ?? 0;
    $this->mode = $mode ?? "";
    $this->years = $years ?? 0;
  }
}

class Delete {
  public ObjectIdentifierList $objects;
  public Quiet $quiet;

  public function __construct(shape(
  ?'objects' => ObjectIdentifierList,
  ?'quiet' => Quiet,
  ) $s = shape()) {
    $this->objects = $objects ?? [];
    $this->quiet = $quiet ?? false;
  }
}

class DeleteBucketAnalyticsConfigurationRequest {
  public BucketName $bucket;
  public AnalyticsId $id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'id' => AnalyticsId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
  }
}

class DeleteBucketCorsRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class DeleteBucketEncryptionRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class DeleteBucketInventoryConfigurationRequest {
  public BucketName $bucket;
  public InventoryId $id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'id' => InventoryId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
  }
}

class DeleteBucketLifecycleRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class DeleteBucketMetricsConfigurationRequest {
  public BucketName $bucket;
  public MetricsId $id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'id' => MetricsId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
  }
}

class DeleteBucketPolicyRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class DeleteBucketReplicationRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class DeleteBucketRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class DeleteBucketTaggingRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class DeleteBucketWebsiteRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

type DeleteMarker = bool;

class DeleteMarkerEntry {
  public IsLatest $is_latest;
  public ObjectKey $key;
  public LastModified $last_modified;
  public Owner $owner;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'is_latest' => IsLatest,
  ?'key' => ObjectKey,
  ?'last_modified' => LastModified,
  ?'owner' => Owner,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->is_latest = $is_latest ?? false;
    $this->key = $key ?? "";
    $this->last_modified = $last_modified ?? 0;
    $this->owner = $owner ?? null;
    $this->version_id = $version_id ?? "";
  }
}

class DeleteMarkerReplication {
  public DeleteMarkerReplicationStatus $status;

  public function __construct(shape(
  ?'status' => DeleteMarkerReplicationStatus,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type DeleteMarkerReplicationStatus = string;

type DeleteMarkerVersionId = string;

type DeleteMarkers = vec<DeleteMarkerEntry>;

class DeleteObjectOutput {
  public DeleteMarker $delete_marker;
  public RequestCharged $request_charged;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'delete_marker' => DeleteMarker,
  ?'request_charged' => RequestCharged,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->delete_marker = $delete_marker ?? false;
    $this->request_charged = $request_charged ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DeleteObjectRequest {
  public BucketName $bucket;
  public BypassGovernanceRetention $bypass_governance_retention;
  public ObjectKey $key;
  public MFA $mfa;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'bypass_governance_retention' => BypassGovernanceRetention,
  ?'key' => ObjectKey,
  ?'mfa' => MFA,
  ?'request_payer' => RequestPayer,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->bypass_governance_retention = $bypass_governance_retention ?? false;
    $this->key = $key ?? "";
    $this->mfa = $mfa ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DeleteObjectTaggingOutput {
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->version_id = $version_id ?? "";
  }
}

class DeleteObjectTaggingRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DeleteObjectsOutput {
  public DeletedObjects $deleted;
  public Errors $errors;
  public RequestCharged $request_charged;

  public function __construct(shape(
  ?'deleted' => DeletedObjects,
  ?'errors' => Errors,
  ?'request_charged' => RequestCharged,
  ) $s = shape()) {
    $this->deleted = $deleted ?? [];
    $this->errors = $errors ?? [];
    $this->request_charged = $request_charged ?? "";
  }
}

class DeleteObjectsRequest {
  public BucketName $bucket;
  public BypassGovernanceRetention $bypass_governance_retention;
  public Delete $delete;
  public MFA $mfa;
  public RequestPayer $request_payer;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'bypass_governance_retention' => BypassGovernanceRetention,
  ?'delete' => Delete,
  ?'mfa' => MFA,
  ?'request_payer' => RequestPayer,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->bypass_governance_retention = $bypass_governance_retention ?? false;
    $this->delete = $delete ?? null;
    $this->mfa = $mfa ?? "";
    $this->request_payer = $request_payer ?? "";
  }
}

class DeletePublicAccessBlockRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class DeletedObject {
  public DeleteMarker $delete_marker;
  public DeleteMarkerVersionId $delete_marker_version_id;
  public ObjectKey $key;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'delete_marker' => DeleteMarker,
  ?'delete_marker_version_id' => DeleteMarkerVersionId,
  ?'key' => ObjectKey,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->delete_marker = $delete_marker ?? false;
    $this->delete_marker_version_id = $delete_marker_version_id ?? "";
    $this->key = $key ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type DeletedObjects = vec<DeletedObject>;

type Delimiter = string;

type Description = string;

class Destination {
  public AccessControlTranslation $access_control_translation;
  public AccountId $account;
  public BucketName $bucket;
  public EncryptionConfiguration $encryption_configuration;
  public Metrics $metrics;
  public ReplicationTime $replication_time;
  public StorageClass $storage_class;

  public function __construct(shape(
  ?'access_control_translation' => AccessControlTranslation,
  ?'account' => AccountId,
  ?'bucket' => BucketName,
  ?'encryption_configuration' => EncryptionConfiguration,
  ?'metrics' => Metrics,
  ?'replication_time' => ReplicationTime,
  ?'storage_class' => StorageClass,
  ) $s = shape()) {
    $this->access_control_translation = $access_control_translation ?? null;
    $this->account = $account ?? "";
    $this->bucket = $bucket ?? "";
    $this->encryption_configuration = $encryption_configuration ?? null;
    $this->metrics = $metrics ?? null;
    $this->replication_time = $replication_time ?? null;
    $this->storage_class = $storage_class ?? "";
  }
}

type DisplayName = string;

type ETag = string;

type EmailAddress = string;

type EnableRequestProgress = bool;

type EncodingType = string;

class Encryption {
  public ServerSideEncryption $encryption_type;
  public KMSContext $kms_context;
  public SSEKMSKeyId $kms_key_id;

  public function __construct(shape(
  ?'encryption_type' => ServerSideEncryption,
  ?'kms_context' => KMSContext,
  ?'kms_key_id' => SSEKMSKeyId,
  ) $s = shape()) {
    $this->encryption_type = $encryption_type ?? "";
    $this->kms_context = $kms_context ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
  }
}

class EncryptionConfiguration {
  public ReplicaKmsKeyID $replica_kms_key_id;

  public function __construct(shape(
  ?'replica_kms_key_id' => ReplicaKmsKeyID,
  ) $s = shape()) {
    $this->replica_kms_key_id = $replica_kms_key_id ?? "";
  }
}

type End = int;

class EndEvent {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Error {
  public Code $code;
  public ObjectKey $key;
  public Message $message;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'code' => Code,
  ?'key' => ObjectKey,
  ?'message' => Message,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->key = $key ?? "";
    $this->message = $message ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class ErrorDocument {
  public ObjectKey $key;

  public function __construct(shape(
  ?'key' => ObjectKey,
  ) $s = shape()) {
    $this->key = $key ?? "";
  }
}

type Errors = vec<Error>;

type Event = string;

type EventList = vec<Event>;

class ExistingObjectReplication {
  public ExistingObjectReplicationStatus $status;

  public function __construct(shape(
  ?'status' => ExistingObjectReplicationStatus,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type ExistingObjectReplicationStatus = string;

type Expiration = string;

type ExpirationStatus = string;

type ExpiredObjectDeleteMarker = bool;

type Expires = int;

type ExposeHeader = string;

type ExposeHeaders = vec<ExposeHeader>;

type Expression = string;

type ExpressionType = string;

type FetchOwner = bool;

type FieldDelimiter = string;

type FileHeaderInfo = string;

class FilterRule {
  public FilterRuleName $name;
  public FilterRuleValue $value;

  public function __construct(shape(
  ?'name' => FilterRuleName,
  ?'value' => FilterRuleValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type FilterRuleList = vec<FilterRule>;

type FilterRuleName = string;

type FilterRuleValue = string;

class GetBucketAccelerateConfigurationOutput {
  public BucketAccelerateStatus $status;

  public function __construct(shape(
  ?'status' => BucketAccelerateStatus,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

class GetBucketAccelerateConfigurationRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketAclOutput {
  public Grants $grants;
  public Owner $owner;

  public function __construct(shape(
  ?'grants' => Grants,
  ?'owner' => Owner,
  ) $s = shape()) {
    $this->grants = $grants ?? [];
    $this->owner = $owner ?? null;
  }
}

class GetBucketAclRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketAnalyticsConfigurationOutput {
  public AnalyticsConfiguration $analytics_configuration;

  public function __construct(shape(
  ?'analytics_configuration' => AnalyticsConfiguration,
  ) $s = shape()) {
    $this->analytics_configuration = $analytics_configuration ?? null;
  }
}

class GetBucketAnalyticsConfigurationRequest {
  public BucketName $bucket;
  public AnalyticsId $id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'id' => AnalyticsId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
  }
}

class GetBucketCorsOutput {
  public CORSRules $cors_rules;

  public function __construct(shape(
  ?'cors_rules' => CORSRules,
  ) $s = shape()) {
    $this->cors_rules = $cors_rules ?? [];
  }
}

class GetBucketCorsRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketEncryptionOutput {
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;

  public function __construct(shape(
  ?'server_side_encryption_configuration' => ServerSideEncryptionConfiguration,
  ) $s = shape()) {
    $this->server_side_encryption_configuration = $server_side_encryption_configuration ?? null;
  }
}

class GetBucketEncryptionRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketInventoryConfigurationOutput {
  public InventoryConfiguration $inventory_configuration;

  public function __construct(shape(
  ?'inventory_configuration' => InventoryConfiguration,
  ) $s = shape()) {
    $this->inventory_configuration = $inventory_configuration ?? null;
  }
}

class GetBucketInventoryConfigurationRequest {
  public BucketName $bucket;
  public InventoryId $id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'id' => InventoryId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
  }
}

class GetBucketLifecycleConfigurationOutput {
  public LifecycleRules $rules;

  public function __construct(shape(
  ?'rules' => LifecycleRules,
  ) $s = shape()) {
    $this->rules = $rules ?? [];
  }
}

class GetBucketLifecycleConfigurationRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketLifecycleOutput {
  public Rules $rules;

  public function __construct(shape(
  ?'rules' => Rules,
  ) $s = shape()) {
    $this->rules = $rules ?? [];
  }
}

class GetBucketLifecycleRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketLocationOutput {
  public BucketLocationConstraint $location_constraint;

  public function __construct(shape(
  ?'location_constraint' => BucketLocationConstraint,
  ) $s = shape()) {
    $this->location_constraint = $location_constraint ?? "";
  }
}

class GetBucketLocationRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketLoggingOutput {
  public LoggingEnabled $logging_enabled;

  public function __construct(shape(
  ?'logging_enabled' => LoggingEnabled,
  ) $s = shape()) {
    $this->logging_enabled = $logging_enabled ?? null;
  }
}

class GetBucketLoggingRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketMetricsConfigurationOutput {
  public MetricsConfiguration $metrics_configuration;

  public function __construct(shape(
  ?'metrics_configuration' => MetricsConfiguration,
  ) $s = shape()) {
    $this->metrics_configuration = $metrics_configuration ?? null;
  }
}

class GetBucketMetricsConfigurationRequest {
  public BucketName $bucket;
  public MetricsId $id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'id' => MetricsId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
  }
}

class GetBucketNotificationConfigurationRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketPolicyOutput {
  public Policy $policy;

  public function __construct(shape(
  ?'policy' => Policy,
  ) $s = shape()) {
    $this->policy = $policy ?? "";
  }
}

class GetBucketPolicyRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketPolicyStatusOutput {
  public PolicyStatus $policy_status;

  public function __construct(shape(
  ?'policy_status' => PolicyStatus,
  ) $s = shape()) {
    $this->policy_status = $policy_status ?? null;
  }
}

class GetBucketPolicyStatusRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketReplicationOutput {
  public ReplicationConfiguration $replication_configuration;

  public function __construct(shape(
  ?'replication_configuration' => ReplicationConfiguration,
  ) $s = shape()) {
    $this->replication_configuration = $replication_configuration ?? null;
  }
}

class GetBucketReplicationRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketRequestPaymentOutput {
  public Payer $payer;

  public function __construct(shape(
  ?'payer' => Payer,
  ) $s = shape()) {
    $this->payer = $payer ?? "";
  }
}

class GetBucketRequestPaymentRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketTaggingOutput {
  public TagSet $tag_set;

  public function __construct(shape(
  ?'tag_set' => TagSet,
  ) $s = shape()) {
    $this->tag_set = $tag_set ?? [];
  }
}

class GetBucketTaggingRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketVersioningOutput {
  public MFADeleteStatus $mfa_delete;
  public BucketVersioningStatus $status;

  public function __construct(shape(
  ?'mfa_delete' => MFADeleteStatus,
  ?'status' => BucketVersioningStatus,
  ) $s = shape()) {
    $this->mfa_delete = $mfa_delete ?? "";
    $this->status = $status ?? "";
  }
}

class GetBucketVersioningRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetBucketWebsiteOutput {
  public ErrorDocument $error_document;
  public IndexDocument $index_document;
  public RedirectAllRequestsTo $redirect_all_requests_to;
  public RoutingRules $routing_rules;

  public function __construct(shape(
  ?'error_document' => ErrorDocument,
  ?'index_document' => IndexDocument,
  ?'redirect_all_requests_to' => RedirectAllRequestsTo,
  ?'routing_rules' => RoutingRules,
  ) $s = shape()) {
    $this->error_document = $error_document ?? null;
    $this->index_document = $index_document ?? null;
    $this->redirect_all_requests_to = $redirect_all_requests_to ?? null;
    $this->routing_rules = $routing_rules ?? [];
  }
}

class GetBucketWebsiteRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GetObjectAclOutput {
  public Grants $grants;
  public Owner $owner;
  public RequestCharged $request_charged;

  public function __construct(shape(
  ?'grants' => Grants,
  ?'owner' => Owner,
  ?'request_charged' => RequestCharged,
  ) $s = shape()) {
    $this->grants = $grants ?? [];
    $this->owner = $owner ?? null;
    $this->request_charged = $request_charged ?? "";
  }
}

class GetObjectAclRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'request_payer' => RequestPayer,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class GetObjectLegalHoldOutput {
  public ObjectLockLegalHold $legal_hold;

  public function __construct(shape(
  ?'legal_hold' => ObjectLockLegalHold,
  ) $s = shape()) {
    $this->legal_hold = $legal_hold ?? null;
  }
}

class GetObjectLegalHoldRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'request_payer' => RequestPayer,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class GetObjectLockConfigurationOutput {
  public ObjectLockConfiguration $object_lock_configuration;

  public function __construct(shape(
  ?'object_lock_configuration' => ObjectLockConfiguration,
  ) $s = shape()) {
    $this->object_lock_configuration = $object_lock_configuration ?? null;
  }
}

class GetObjectLockConfigurationRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
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

  public function __construct(shape(
  ?'accept_ranges' => AcceptRanges,
  ?'body' => Body,
  ?'cache_control' => CacheControl,
  ?'content_disposition' => ContentDisposition,
  ?'content_encoding' => ContentEncoding,
  ?'content_language' => ContentLanguage,
  ?'content_length' => ContentLength,
  ?'content_range' => ContentRange,
  ?'content_type' => ContentType,
  ?'delete_marker' => DeleteMarker,
  ?'e_tag' => ETag,
  ?'expiration' => Expiration,
  ?'expires' => Expires,
  ?'last_modified' => LastModified,
  ?'metadata' => Metadata,
  ?'missing_meta' => MissingMeta,
  ?'object_lock_legal_hold_status' => ObjectLockLegalHoldStatus,
  ?'object_lock_mode' => ObjectLockMode,
  ?'object_lock_retain_until_date' => ObjectLockRetainUntilDate,
  ?'parts_count' => PartsCount,
  ?'replication_status' => ReplicationStatus,
  ?'request_charged' => RequestCharged,
  ?'restore' => Restore,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'storage_class' => StorageClass,
  ?'tag_count' => TagCount,
  ?'version_id' => ObjectVersionId,
  ?'website_redirect_location' => WebsiteRedirectLocation,
  ) $s = shape()) {
    $this->accept_ranges = $accept_ranges ?? "";
    $this->body = $body ?? "";
    $this->cache_control = $cache_control ?? "";
    $this->content_disposition = $content_disposition ?? "";
    $this->content_encoding = $content_encoding ?? "";
    $this->content_language = $content_language ?? "";
    $this->content_length = $content_length ?? 0;
    $this->content_range = $content_range ?? "";
    $this->content_type = $content_type ?? "";
    $this->delete_marker = $delete_marker ?? false;
    $this->e_tag = $e_tag ?? "";
    $this->expiration = $expiration ?? "";
    $this->expires = $expires ?? 0;
    $this->last_modified = $last_modified ?? 0;
    $this->metadata = $metadata ?? [];
    $this->missing_meta = $missing_meta ?? 0;
    $this->object_lock_legal_hold_status = $object_lock_legal_hold_status ?? "";
    $this->object_lock_mode = $object_lock_mode ?? "";
    $this->object_lock_retain_until_date = $object_lock_retain_until_date ?? 0;
    $this->parts_count = $parts_count ?? 0;
    $this->replication_status = $replication_status ?? "";
    $this->request_charged = $request_charged ?? "";
    $this->restore = $restore ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->storage_class = $storage_class ?? "";
    $this->tag_count = $tag_count ?? 0;
    $this->version_id = $version_id ?? "";
    $this->website_redirect_location = $website_redirect_location ?? "";
  }
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

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'if_match' => IfMatch,
  ?'if_modified_since' => IfModifiedSince,
  ?'if_none_match' => IfNoneMatch,
  ?'if_unmodified_since' => IfUnmodifiedSince,
  ?'key' => ObjectKey,
  ?'part_number' => PartNumber,
  ?'range' => Range,
  ?'request_payer' => RequestPayer,
  ?'response_cache_control' => ResponseCacheControl,
  ?'response_content_disposition' => ResponseContentDisposition,
  ?'response_content_encoding' => ResponseContentEncoding,
  ?'response_content_language' => ResponseContentLanguage,
  ?'response_content_type' => ResponseContentType,
  ?'response_expires' => ResponseExpires,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key' => SSECustomerKey,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->if_match = $if_match ?? "";
    $this->if_modified_since = $if_modified_since ?? 0;
    $this->if_none_match = $if_none_match ?? "";
    $this->if_unmodified_since = $if_unmodified_since ?? 0;
    $this->key = $key ?? "";
    $this->part_number = $part_number ?? 0;
    $this->range = $range ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->response_cache_control = $response_cache_control ?? "";
    $this->response_content_disposition = $response_content_disposition ?? "";
    $this->response_content_encoding = $response_content_encoding ?? "";
    $this->response_content_language = $response_content_language ?? "";
    $this->response_content_type = $response_content_type ?? "";
    $this->response_expires = $response_expires ?? 0;
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key = $sse_customer_key ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class GetObjectRetentionOutput {
  public ObjectLockRetention $retention;

  public function __construct(shape(
  ?'retention' => ObjectLockRetention,
  ) $s = shape()) {
    $this->retention = $retention ?? null;
  }
}

class GetObjectRetentionRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'request_payer' => RequestPayer,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class GetObjectTaggingOutput {
  public TagSet $tag_set;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'tag_set' => TagSet,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->tag_set = $tag_set ?? [];
    $this->version_id = $version_id ?? "";
  }
}

class GetObjectTaggingRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class GetObjectTorrentOutput {
  public Body $body;
  public RequestCharged $request_charged;

  public function __construct(shape(
  ?'body' => Body,
  ?'request_charged' => RequestCharged,
  ) $s = shape()) {
    $this->body = $body ?? "";
    $this->request_charged = $request_charged ?? "";
  }
}

class GetObjectTorrentRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'request_payer' => RequestPayer,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->request_payer = $request_payer ?? "";
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
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
}

class GlacierJobParameters {
  public Tier $tier;

  public function __construct(shape(
  ?'tier' => Tier,
  ) $s = shape()) {
    $this->tier = $tier ?? "";
  }
}

class Grant {
  public Grantee $grantee;
  public Permission $permission;

  public function __construct(shape(
  ?'grantee' => Grantee,
  ?'permission' => Permission,
  ) $s = shape()) {
    $this->grantee = $grantee ?? null;
    $this->permission = $permission ?? "";
  }
}

type GrantFullControl = string;

type GrantRead = string;

type GrantReadACP = string;

type GrantWrite = string;

type GrantWriteACP = string;

class Grantee {
  public DisplayName $display_name;
  public EmailAddress $email_address;
  public ID $id;
  public Type $type;
  public URI $uri;

  public function __construct(shape(
  ?'display_name' => DisplayName,
  ?'email_address' => EmailAddress,
  ?'id' => ID,
  ?'type' => Type,
  ?'uri' => URI,
  ) $s = shape()) {
    $this->display_name = $display_name ?? "";
    $this->email_address = $email_address ?? "";
    $this->id = $id ?? "";
    $this->type = $type ?? "";
    $this->uri = $uri ?? "";
  }
}

type Grants = vec<Grant>;

class HeadBucketRequest {
  public BucketName $bucket;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
  }
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

  public function __construct(shape(
  ?'accept_ranges' => AcceptRanges,
  ?'cache_control' => CacheControl,
  ?'content_disposition' => ContentDisposition,
  ?'content_encoding' => ContentEncoding,
  ?'content_language' => ContentLanguage,
  ?'content_length' => ContentLength,
  ?'content_type' => ContentType,
  ?'delete_marker' => DeleteMarker,
  ?'e_tag' => ETag,
  ?'expiration' => Expiration,
  ?'expires' => Expires,
  ?'last_modified' => LastModified,
  ?'metadata' => Metadata,
  ?'missing_meta' => MissingMeta,
  ?'object_lock_legal_hold_status' => ObjectLockLegalHoldStatus,
  ?'object_lock_mode' => ObjectLockMode,
  ?'object_lock_retain_until_date' => ObjectLockRetainUntilDate,
  ?'parts_count' => PartsCount,
  ?'replication_status' => ReplicationStatus,
  ?'request_charged' => RequestCharged,
  ?'restore' => Restore,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'storage_class' => StorageClass,
  ?'version_id' => ObjectVersionId,
  ?'website_redirect_location' => WebsiteRedirectLocation,
  ) $s = shape()) {
    $this->accept_ranges = $accept_ranges ?? "";
    $this->cache_control = $cache_control ?? "";
    $this->content_disposition = $content_disposition ?? "";
    $this->content_encoding = $content_encoding ?? "";
    $this->content_language = $content_language ?? "";
    $this->content_length = $content_length ?? 0;
    $this->content_type = $content_type ?? "";
    $this->delete_marker = $delete_marker ?? false;
    $this->e_tag = $e_tag ?? "";
    $this->expiration = $expiration ?? "";
    $this->expires = $expires ?? 0;
    $this->last_modified = $last_modified ?? 0;
    $this->metadata = $metadata ?? [];
    $this->missing_meta = $missing_meta ?? 0;
    $this->object_lock_legal_hold_status = $object_lock_legal_hold_status ?? "";
    $this->object_lock_mode = $object_lock_mode ?? "";
    $this->object_lock_retain_until_date = $object_lock_retain_until_date ?? 0;
    $this->parts_count = $parts_count ?? 0;
    $this->replication_status = $replication_status ?? "";
    $this->request_charged = $request_charged ?? "";
    $this->restore = $restore ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->storage_class = $storage_class ?? "";
    $this->version_id = $version_id ?? "";
    $this->website_redirect_location = $website_redirect_location ?? "";
  }
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

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'if_match' => IfMatch,
  ?'if_modified_since' => IfModifiedSince,
  ?'if_none_match' => IfNoneMatch,
  ?'if_unmodified_since' => IfUnmodifiedSince,
  ?'key' => ObjectKey,
  ?'part_number' => PartNumber,
  ?'range' => Range,
  ?'request_payer' => RequestPayer,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key' => SSECustomerKey,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->if_match = $if_match ?? "";
    $this->if_modified_since = $if_modified_since ?? 0;
    $this->if_none_match = $if_none_match ?? "";
    $this->if_unmodified_since = $if_unmodified_since ?? 0;
    $this->key = $key ?? "";
    $this->part_number = $part_number ?? 0;
    $this->range = $range ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key = $sse_customer_key ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type HostName = string;

type HttpErrorCodeReturnedEquals = string;

type HttpRedirectCode = string;

type ID = string;

type IfMatch = string;

type IfModifiedSince = int;

type IfNoneMatch = string;

type IfUnmodifiedSince = int;

class IndexDocument {
  public Suffix $suffix;

  public function __construct(shape(
  ?'suffix' => Suffix,
  ) $s = shape()) {
    $this->suffix = $suffix ?? "";
  }
}

type Initiated = int;

class Initiator {
  public DisplayName $display_name;
  public ID $id;

  public function __construct(shape(
  ?'display_name' => DisplayName,
  ?'id' => ID,
  ) $s = shape()) {
    $this->display_name = $display_name ?? "";
    $this->id = $id ?? "";
  }
}

class InputSerialization {
  public CSVInput $csv;
  public CompressionType $compression_type;
  public JSONInput $json;
  public ParquetInput $parquet;

  public function __construct(shape(
  ?'csv' => CSVInput,
  ?'compression_type' => CompressionType,
  ?'json' => JSONInput,
  ?'parquet' => ParquetInput,
  ) $s = shape()) {
    $this->csv = $csv ?? null;
    $this->compression_type = $compression_type ?? "";
    $this->json = $json ?? null;
    $this->parquet = $parquet ?? null;
  }
}

class InventoryConfiguration {
  public InventoryDestination $destination;
  public InventoryFilter $filter;
  public InventoryId $id;
  public InventoryIncludedObjectVersions $included_object_versions;
  public IsEnabled $is_enabled;
  public InventoryOptionalFields $optional_fields;
  public InventorySchedule $schedule;

  public function __construct(shape(
  ?'destination' => InventoryDestination,
  ?'filter' => InventoryFilter,
  ?'id' => InventoryId,
  ?'included_object_versions' => InventoryIncludedObjectVersions,
  ?'is_enabled' => IsEnabled,
  ?'optional_fields' => InventoryOptionalFields,
  ?'schedule' => InventorySchedule,
  ) $s = shape()) {
    $this->destination = $destination ?? null;
    $this->filter = $filter ?? null;
    $this->id = $id ?? "";
    $this->included_object_versions = $included_object_versions ?? "";
    $this->is_enabled = $is_enabled ?? false;
    $this->optional_fields = $optional_fields ?? [];
    $this->schedule = $schedule ?? null;
  }
}

type InventoryConfigurationList = vec<InventoryConfiguration>;

class InventoryDestination {
  public InventoryS3BucketDestination $s_3_bucket_destination;

  public function __construct(shape(
  ?'s_3_bucket_destination' => InventoryS3BucketDestination,
  ) $s = shape()) {
    $this->s_3_bucket_destination = $s_3_bucket_destination ?? null;
  }
}

class InventoryEncryption {
  public SSEKMS $ssekms;
  public SSES3 $sses_3;

  public function __construct(shape(
  ?'ssekms' => SSEKMS,
  ?'sses_3' => SSES3,
  ) $s = shape()) {
    $this->ssekms = $ssekms ?? null;
    $this->sses_3 = $sses_3 ?? null;
  }
}

class InventoryFilter {
  public Prefix $prefix;

  public function __construct(shape(
  ?'prefix' => Prefix,
  ) $s = shape()) {
    $this->prefix = $prefix ?? "";
  }
}

type InventoryFormat = string;

type InventoryFrequency = string;

type InventoryId = string;

type InventoryIncludedObjectVersions = string;

type InventoryOptionalField = string;

type InventoryOptionalFields = vec<InventoryOptionalField>;

class InventoryS3BucketDestination {
  public AccountId $account_id;
  public BucketName $bucket;
  public InventoryEncryption $encryption;
  public InventoryFormat $format;
  public Prefix $prefix;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'bucket' => BucketName,
  ?'encryption' => InventoryEncryption,
  ?'format' => InventoryFormat,
  ?'prefix' => Prefix,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bucket = $bucket ?? "";
    $this->encryption = $encryption ?? null;
    $this->format = $format ?? "";
    $this->prefix = $prefix ?? "";
  }
}

class InventorySchedule {
  public InventoryFrequency $frequency;

  public function __construct(shape(
  ?'frequency' => InventoryFrequency,
  ) $s = shape()) {
    $this->frequency = $frequency ?? "";
  }
}

type IsEnabled = bool;

type IsLatest = bool;

type IsPublic = bool;

type IsTruncated = bool;

class JSONInput {
  public JSONType $type;

  public function __construct(shape(
  ?'type' => JSONType,
  ) $s = shape()) {
    $this->type = $type ?? "";
  }
}

class JSONOutput {
  public RecordDelimiter $record_delimiter;

  public function __construct(shape(
  ?'record_delimiter' => RecordDelimiter,
  ) $s = shape()) {
    $this->record_delimiter = $record_delimiter ?? "";
  }
}

type JSONType = string;

type KMSContext = string;

type KeyCount = int;

type KeyMarker = string;

type KeyPrefixEquals = string;

type LambdaFunctionArn = string;

class LambdaFunctionConfiguration {
  public EventList $events;
  public NotificationConfigurationFilter $filter;
  public NotificationId $id;
  public LambdaFunctionArn $lambda_function_arn;

  public function __construct(shape(
  ?'events' => EventList,
  ?'filter' => NotificationConfigurationFilter,
  ?'id' => NotificationId,
  ?'lambda_function_arn' => LambdaFunctionArn,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->filter = $filter ?? null;
    $this->id = $id ?? "";
    $this->lambda_function_arn = $lambda_function_arn ?? "";
  }
}

type LambdaFunctionConfigurationList = vec<LambdaFunctionConfiguration>;

type LastModified = int;

class LifecycleConfiguration {
  public Rules $rules;

  public function __construct(shape(
  ?'rules' => Rules,
  ) $s = shape()) {
    $this->rules = $rules ?? [];
  }
}

class LifecycleExpiration {
  public Date $date;
  public Days $days;
  public ExpiredObjectDeleteMarker $expired_object_delete_marker;

  public function __construct(shape(
  ?'date' => Date,
  ?'days' => Days,
  ?'expired_object_delete_marker' => ExpiredObjectDeleteMarker,
  ) $s = shape()) {
    $this->date = $date ?? 0;
    $this->days = $days ?? 0;
    $this->expired_object_delete_marker = $expired_object_delete_marker ?? false;
  }
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

  public function __construct(shape(
  ?'abort_incomplete_multipart_upload' => AbortIncompleteMultipartUpload,
  ?'expiration' => LifecycleExpiration,
  ?'filter' => LifecycleRuleFilter,
  ?'id' => ID,
  ?'noncurrent_version_expiration' => NoncurrentVersionExpiration,
  ?'noncurrent_version_transitions' => NoncurrentVersionTransitionList,
  ?'prefix' => Prefix,
  ?'status' => ExpirationStatus,
  ?'transitions' => TransitionList,
  ) $s = shape()) {
    $this->abort_incomplete_multipart_upload = $abort_incomplete_multipart_upload ?? null;
    $this->expiration = $expiration ?? null;
    $this->filter = $filter ?? null;
    $this->id = $id ?? "";
    $this->noncurrent_version_expiration = $noncurrent_version_expiration ?? null;
    $this->noncurrent_version_transitions = $noncurrent_version_transitions ?? [];
    $this->prefix = $prefix ?? "";
    $this->status = $status ?? "";
    $this->transitions = $transitions ?? [];
  }
}

class LifecycleRuleAndOperator {
  public Prefix $prefix;
  public TagSet $tags;

  public function __construct(shape(
  ?'prefix' => Prefix,
  ?'tags' => TagSet,
  ) $s = shape()) {
    $this->prefix = $prefix ?? "";
    $this->tags = $tags ?? [];
  }
}

class LifecycleRuleFilter {
  public LifecycleRuleAndOperator $and;
  public Prefix $prefix;
  public Tag $tag;

  public function __construct(shape(
  ?'and' => LifecycleRuleAndOperator,
  ?'prefix' => Prefix,
  ?'tag' => Tag,
  ) $s = shape()) {
    $this->and = $and ?? null;
    $this->prefix = $prefix ?? "";
    $this->tag = $tag ?? null;
  }
}

type LifecycleRules = vec<LifecycleRule>;

class ListBucketAnalyticsConfigurationsOutput {
  public AnalyticsConfigurationList $analytics_configuration_list;
  public Token $continuation_token;
  public IsTruncated $is_truncated;
  public NextToken $next_continuation_token;

  public function __construct(shape(
  ?'analytics_configuration_list' => AnalyticsConfigurationList,
  ?'continuation_token' => Token,
  ?'is_truncated' => IsTruncated,
  ?'next_continuation_token' => NextToken,
  ) $s = shape()) {
    $this->analytics_configuration_list = $analytics_configuration_list ?? [];
    $this->continuation_token = $continuation_token ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->next_continuation_token = $next_continuation_token ?? "";
  }
}

class ListBucketAnalyticsConfigurationsRequest {
  public BucketName $bucket;
  public Token $continuation_token;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'continuation_token' => Token,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->continuation_token = $continuation_token ?? "";
  }
}

class ListBucketInventoryConfigurationsOutput {
  public Token $continuation_token;
  public InventoryConfigurationList $inventory_configuration_list;
  public IsTruncated $is_truncated;
  public NextToken $next_continuation_token;

  public function __construct(shape(
  ?'continuation_token' => Token,
  ?'inventory_configuration_list' => InventoryConfigurationList,
  ?'is_truncated' => IsTruncated,
  ?'next_continuation_token' => NextToken,
  ) $s = shape()) {
    $this->continuation_token = $continuation_token ?? "";
    $this->inventory_configuration_list = $inventory_configuration_list ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->next_continuation_token = $next_continuation_token ?? "";
  }
}

class ListBucketInventoryConfigurationsRequest {
  public BucketName $bucket;
  public Token $continuation_token;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'continuation_token' => Token,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->continuation_token = $continuation_token ?? "";
  }
}

class ListBucketMetricsConfigurationsOutput {
  public Token $continuation_token;
  public IsTruncated $is_truncated;
  public MetricsConfigurationList $metrics_configuration_list;
  public NextToken $next_continuation_token;

  public function __construct(shape(
  ?'continuation_token' => Token,
  ?'is_truncated' => IsTruncated,
  ?'metrics_configuration_list' => MetricsConfigurationList,
  ?'next_continuation_token' => NextToken,
  ) $s = shape()) {
    $this->continuation_token = $continuation_token ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->metrics_configuration_list = $metrics_configuration_list ?? [];
    $this->next_continuation_token = $next_continuation_token ?? "";
  }
}

class ListBucketMetricsConfigurationsRequest {
  public BucketName $bucket;
  public Token $continuation_token;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'continuation_token' => Token,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->continuation_token = $continuation_token ?? "";
  }
}

class ListBucketsOutput {
  public Buckets $buckets;
  public Owner $owner;

  public function __construct(shape(
  ?'buckets' => Buckets,
  ?'owner' => Owner,
  ) $s = shape()) {
    $this->buckets = $buckets ?? [];
    $this->owner = $owner ?? null;
  }
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

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'common_prefixes' => CommonPrefixList,
  ?'delimiter' => Delimiter,
  ?'encoding_type' => EncodingType,
  ?'is_truncated' => IsTruncated,
  ?'key_marker' => KeyMarker,
  ?'max_uploads' => MaxUploads,
  ?'next_key_marker' => NextKeyMarker,
  ?'next_upload_id_marker' => NextUploadIdMarker,
  ?'prefix' => Prefix,
  ?'upload_id_marker' => UploadIdMarker,
  ?'uploads' => MultipartUploadList,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->common_prefixes = $common_prefixes ?? [];
    $this->delimiter = $delimiter ?? "";
    $this->encoding_type = $encoding_type ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->key_marker = $key_marker ?? "";
    $this->max_uploads = $max_uploads ?? 0;
    $this->next_key_marker = $next_key_marker ?? "";
    $this->next_upload_id_marker = $next_upload_id_marker ?? "";
    $this->prefix = $prefix ?? "";
    $this->upload_id_marker = $upload_id_marker ?? "";
    $this->uploads = $uploads ?? [];
  }
}

class ListMultipartUploadsRequest {
  public BucketName $bucket;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public KeyMarker $key_marker;
  public MaxUploads $max_uploads;
  public Prefix $prefix;
  public UploadIdMarker $upload_id_marker;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'delimiter' => Delimiter,
  ?'encoding_type' => EncodingType,
  ?'key_marker' => KeyMarker,
  ?'max_uploads' => MaxUploads,
  ?'prefix' => Prefix,
  ?'upload_id_marker' => UploadIdMarker,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->delimiter = $delimiter ?? "";
    $this->encoding_type = $encoding_type ?? "";
    $this->key_marker = $key_marker ?? "";
    $this->max_uploads = $max_uploads ?? 0;
    $this->prefix = $prefix ?? "";
    $this->upload_id_marker = $upload_id_marker ?? "";
  }
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

  public function __construct(shape(
  ?'common_prefixes' => CommonPrefixList,
  ?'delete_markers' => DeleteMarkers,
  ?'delimiter' => Delimiter,
  ?'encoding_type' => EncodingType,
  ?'is_truncated' => IsTruncated,
  ?'key_marker' => KeyMarker,
  ?'max_keys' => MaxKeys,
  ?'name' => BucketName,
  ?'next_key_marker' => NextKeyMarker,
  ?'next_version_id_marker' => NextVersionIdMarker,
  ?'prefix' => Prefix,
  ?'version_id_marker' => VersionIdMarker,
  ?'versions' => ObjectVersionList,
  ) $s = shape()) {
    $this->common_prefixes = $common_prefixes ?? [];
    $this->delete_markers = $delete_markers ?? [];
    $this->delimiter = $delimiter ?? "";
    $this->encoding_type = $encoding_type ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->key_marker = $key_marker ?? "";
    $this->max_keys = $max_keys ?? 0;
    $this->name = $name ?? "";
    $this->next_key_marker = $next_key_marker ?? "";
    $this->next_version_id_marker = $next_version_id_marker ?? "";
    $this->prefix = $prefix ?? "";
    $this->version_id_marker = $version_id_marker ?? "";
    $this->versions = $versions ?? [];
  }
}

class ListObjectVersionsRequest {
  public BucketName $bucket;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public KeyMarker $key_marker;
  public MaxKeys $max_keys;
  public Prefix $prefix;
  public VersionIdMarker $version_id_marker;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'delimiter' => Delimiter,
  ?'encoding_type' => EncodingType,
  ?'key_marker' => KeyMarker,
  ?'max_keys' => MaxKeys,
  ?'prefix' => Prefix,
  ?'version_id_marker' => VersionIdMarker,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->delimiter = $delimiter ?? "";
    $this->encoding_type = $encoding_type ?? "";
    $this->key_marker = $key_marker ?? "";
    $this->max_keys = $max_keys ?? 0;
    $this->prefix = $prefix ?? "";
    $this->version_id_marker = $version_id_marker ?? "";
  }
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

  public function __construct(shape(
  ?'common_prefixes' => CommonPrefixList,
  ?'contents' => ObjectList,
  ?'delimiter' => Delimiter,
  ?'encoding_type' => EncodingType,
  ?'is_truncated' => IsTruncated,
  ?'marker' => Marker,
  ?'max_keys' => MaxKeys,
  ?'name' => BucketName,
  ?'next_marker' => NextMarker,
  ?'prefix' => Prefix,
  ) $s = shape()) {
    $this->common_prefixes = $common_prefixes ?? [];
    $this->contents = $contents ?? [];
    $this->delimiter = $delimiter ?? "";
    $this->encoding_type = $encoding_type ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->max_keys = $max_keys ?? 0;
    $this->name = $name ?? "";
    $this->next_marker = $next_marker ?? "";
    $this->prefix = $prefix ?? "";
  }
}

class ListObjectsRequest {
  public BucketName $bucket;
  public Delimiter $delimiter;
  public EncodingType $encoding_type;
  public Marker $marker;
  public MaxKeys $max_keys;
  public Prefix $prefix;
  public RequestPayer $request_payer;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'delimiter' => Delimiter,
  ?'encoding_type' => EncodingType,
  ?'marker' => Marker,
  ?'max_keys' => MaxKeys,
  ?'prefix' => Prefix,
  ?'request_payer' => RequestPayer,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->delimiter = $delimiter ?? "";
    $this->encoding_type = $encoding_type ?? "";
    $this->marker = $marker ?? "";
    $this->max_keys = $max_keys ?? 0;
    $this->prefix = $prefix ?? "";
    $this->request_payer = $request_payer ?? "";
  }
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

  public function __construct(shape(
  ?'common_prefixes' => CommonPrefixList,
  ?'contents' => ObjectList,
  ?'continuation_token' => Token,
  ?'delimiter' => Delimiter,
  ?'encoding_type' => EncodingType,
  ?'is_truncated' => IsTruncated,
  ?'key_count' => KeyCount,
  ?'max_keys' => MaxKeys,
  ?'name' => BucketName,
  ?'next_continuation_token' => NextToken,
  ?'prefix' => Prefix,
  ?'start_after' => StartAfter,
  ) $s = shape()) {
    $this->common_prefixes = $common_prefixes ?? [];
    $this->contents = $contents ?? [];
    $this->continuation_token = $continuation_token ?? "";
    $this->delimiter = $delimiter ?? "";
    $this->encoding_type = $encoding_type ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->key_count = $key_count ?? 0;
    $this->max_keys = $max_keys ?? 0;
    $this->name = $name ?? "";
    $this->next_continuation_token = $next_continuation_token ?? "";
    $this->prefix = $prefix ?? "";
    $this->start_after = $start_after ?? "";
  }
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

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'continuation_token' => Token,
  ?'delimiter' => Delimiter,
  ?'encoding_type' => EncodingType,
  ?'fetch_owner' => FetchOwner,
  ?'max_keys' => MaxKeys,
  ?'prefix' => Prefix,
  ?'request_payer' => RequestPayer,
  ?'start_after' => StartAfter,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->continuation_token = $continuation_token ?? "";
    $this->delimiter = $delimiter ?? "";
    $this->encoding_type = $encoding_type ?? "";
    $this->fetch_owner = $fetch_owner ?? false;
    $this->max_keys = $max_keys ?? 0;
    $this->prefix = $prefix ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->start_after = $start_after ?? "";
  }
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

  public function __construct(shape(
  ?'abort_date' => AbortDate,
  ?'abort_rule_id' => AbortRuleId,
  ?'bucket' => BucketName,
  ?'initiator' => Initiator,
  ?'is_truncated' => IsTruncated,
  ?'key' => ObjectKey,
  ?'max_parts' => MaxParts,
  ?'next_part_number_marker' => NextPartNumberMarker,
  ?'owner' => Owner,
  ?'part_number_marker' => PartNumberMarker,
  ?'parts' => Parts,
  ?'request_charged' => RequestCharged,
  ?'storage_class' => StorageClass,
  ?'upload_id' => MultipartUploadId,
  ) $s = shape()) {
    $this->abort_date = $abort_date ?? 0;
    $this->abort_rule_id = $abort_rule_id ?? "";
    $this->bucket = $bucket ?? "";
    $this->initiator = $initiator ?? null;
    $this->is_truncated = $is_truncated ?? false;
    $this->key = $key ?? "";
    $this->max_parts = $max_parts ?? 0;
    $this->next_part_number_marker = $next_part_number_marker ?? 0;
    $this->owner = $owner ?? null;
    $this->part_number_marker = $part_number_marker ?? 0;
    $this->parts = $parts ?? [];
    $this->request_charged = $request_charged ?? "";
    $this->storage_class = $storage_class ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

class ListPartsRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public MaxParts $max_parts;
  public PartNumberMarker $part_number_marker;
  public RequestPayer $request_payer;
  public MultipartUploadId $upload_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'max_parts' => MaxParts,
  ?'part_number_marker' => PartNumberMarker,
  ?'request_payer' => RequestPayer,
  ?'upload_id' => MultipartUploadId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->max_parts = $max_parts ?? 0;
    $this->part_number_marker = $part_number_marker ?? 0;
    $this->request_payer = $request_payer ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

type Location = string;

type LocationPrefix = string;

class LoggingEnabled {
  public TargetBucket $target_bucket;
  public TargetGrants $target_grants;
  public TargetPrefix $target_prefix;

  public function __construct(shape(
  ?'target_bucket' => TargetBucket,
  ?'target_grants' => TargetGrants,
  ?'target_prefix' => TargetPrefix,
  ) $s = shape()) {
    $this->target_bucket = $target_bucket ?? "";
    $this->target_grants = $target_grants ?? [];
    $this->target_prefix = $target_prefix ?? "";
  }
}

type MFA = string;

type MFADelete = string;

type MFADeleteStatus = string;

type Marker = string;

type MaxAgeSeconds = int;

type MaxKeys = int;

type MaxParts = int;

type MaxUploads = int;

type Message = string;

type Metadata = dict<MetadataKey, MetadataValue>;

type MetadataDirective = string;

class MetadataEntry {
  public MetadataKey $name;
  public MetadataValue $value;

  public function __construct(shape(
  ?'name' => MetadataKey,
  ?'value' => MetadataValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type MetadataKey = string;

type MetadataValue = string;

class Metrics {
  public ReplicationTimeValue $event_threshold;
  public MetricsStatus $status;

  public function __construct(shape(
  ?'event_threshold' => ReplicationTimeValue,
  ?'status' => MetricsStatus,
  ) $s = shape()) {
    $this->event_threshold = $event_threshold ?? null;
    $this->status = $status ?? "";
  }
}

class MetricsAndOperator {
  public Prefix $prefix;
  public TagSet $tags;

  public function __construct(shape(
  ?'prefix' => Prefix,
  ?'tags' => TagSet,
  ) $s = shape()) {
    $this->prefix = $prefix ?? "";
    $this->tags = $tags ?? [];
  }
}

class MetricsConfiguration {
  public MetricsFilter $filter;
  public MetricsId $id;

  public function __construct(shape(
  ?'filter' => MetricsFilter,
  ?'id' => MetricsId,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->id = $id ?? "";
  }
}

type MetricsConfigurationList = vec<MetricsConfiguration>;

class MetricsFilter {
  public MetricsAndOperator $and;
  public Prefix $prefix;
  public Tag $tag;

  public function __construct(shape(
  ?'and' => MetricsAndOperator,
  ?'prefix' => Prefix,
  ?'tag' => Tag,
  ) $s = shape()) {
    $this->and = $and ?? null;
    $this->prefix = $prefix ?? "";
    $this->tag = $tag ?? null;
  }
}

type MetricsId = string;

type MetricsStatus = string;

type Minutes = int;

type MissingMeta = int;

class MultipartUpload {
  public Initiated $initiated;
  public Initiator $initiator;
  public ObjectKey $key;
  public Owner $owner;
  public StorageClass $storage_class;
  public MultipartUploadId $upload_id;

  public function __construct(shape(
  ?'initiated' => Initiated,
  ?'initiator' => Initiator,
  ?'key' => ObjectKey,
  ?'owner' => Owner,
  ?'storage_class' => StorageClass,
  ?'upload_id' => MultipartUploadId,
  ) $s = shape()) {
    $this->initiated = $initiated ?? 0;
    $this->initiator = $initiator ?? null;
    $this->key = $key ?? "";
    $this->owner = $owner ?? null;
    $this->storage_class = $storage_class ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

type MultipartUploadId = string;

type MultipartUploadList = vec<MultipartUpload>;

type NextKeyMarker = string;

type NextMarker = string;

type NextPartNumberMarker = int;

type NextToken = string;

type NextUploadIdMarker = string;

type NextVersionIdMarker = string;

class NoSuchBucket {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchKey {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoSuchUpload {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NoncurrentVersionExpiration {
  public Days $noncurrent_days;

  public function __construct(shape(
  ?'noncurrent_days' => Days,
  ) $s = shape()) {
    $this->noncurrent_days = $noncurrent_days ?? 0;
  }
}

class NoncurrentVersionTransition {
  public Days $noncurrent_days;
  public TransitionStorageClass $storage_class;

  public function __construct(shape(
  ?'noncurrent_days' => Days,
  ?'storage_class' => TransitionStorageClass,
  ) $s = shape()) {
    $this->noncurrent_days = $noncurrent_days ?? 0;
    $this->storage_class = $storage_class ?? "";
  }
}

type NoncurrentVersionTransitionList = vec<NoncurrentVersionTransition>;

class NotificationConfiguration {
  public LambdaFunctionConfigurationList $lambda_function_configurations;
  public QueueConfigurationList $queue_configurations;
  public TopicConfigurationList $topic_configurations;

  public function __construct(shape(
  ?'lambda_function_configurations' => LambdaFunctionConfigurationList,
  ?'queue_configurations' => QueueConfigurationList,
  ?'topic_configurations' => TopicConfigurationList,
  ) $s = shape()) {
    $this->lambda_function_configurations = $lambda_function_configurations ?? [];
    $this->queue_configurations = $queue_configurations ?? [];
    $this->topic_configurations = $topic_configurations ?? [];
  }
}

class NotificationConfigurationDeprecated {
  public CloudFunctionConfiguration $cloud_function_configuration;
  public QueueConfigurationDeprecated $queue_configuration;
  public TopicConfigurationDeprecated $topic_configuration;

  public function __construct(shape(
  ?'cloud_function_configuration' => CloudFunctionConfiguration,
  ?'queue_configuration' => QueueConfigurationDeprecated,
  ?'topic_configuration' => TopicConfigurationDeprecated,
  ) $s = shape()) {
    $this->cloud_function_configuration = $cloud_function_configuration ?? null;
    $this->queue_configuration = $queue_configuration ?? null;
    $this->topic_configuration = $topic_configuration ?? null;
  }
}

class NotificationConfigurationFilter {
  public S3KeyFilter $key;

  public function __construct(shape(
  ?'key' => S3KeyFilter,
  ) $s = shape()) {
    $this->key = $key ?? null;
  }
}

type NotificationId = string;

class Object {
  public ETag $e_tag;
  public ObjectKey $key;
  public LastModified $last_modified;
  public Owner $owner;
  public Size $size;
  public ObjectStorageClass $storage_class;

  public function __construct(shape(
  ?'e_tag' => ETag,
  ?'key' => ObjectKey,
  ?'last_modified' => LastModified,
  ?'owner' => Owner,
  ?'size' => Size,
  ?'storage_class' => ObjectStorageClass,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? "";
    $this->key = $key ?? "";
    $this->last_modified = $last_modified ?? 0;
    $this->owner = $owner ?? null;
    $this->size = $size ?? 0;
    $this->storage_class = $storage_class ?? "";
  }
}

class ObjectAlreadyInActiveTierError {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ObjectCannedACL = string;

class ObjectIdentifier {
  public ObjectKey $key;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'key' => ObjectKey,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type ObjectIdentifierList = vec<ObjectIdentifier>;

type ObjectKey = string;

type ObjectList = vec<Object>;

class ObjectLockConfiguration {
  public ObjectLockEnabled $object_lock_enabled;
  public ObjectLockRule $rule;

  public function __construct(shape(
  ?'object_lock_enabled' => ObjectLockEnabled,
  ?'rule' => ObjectLockRule,
  ) $s = shape()) {
    $this->object_lock_enabled = $object_lock_enabled ?? "";
    $this->rule = $rule ?? null;
  }
}

type ObjectLockEnabled = string;

type ObjectLockEnabledForBucket = bool;

class ObjectLockLegalHold {
  public ObjectLockLegalHoldStatus $status;

  public function __construct(shape(
  ?'status' => ObjectLockLegalHoldStatus,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type ObjectLockLegalHoldStatus = string;

type ObjectLockMode = string;

type ObjectLockRetainUntilDate = int;

class ObjectLockRetention {
  public ObjectLockRetentionMode $mode;
  public Date $retain_until_date;

  public function __construct(shape(
  ?'mode' => ObjectLockRetentionMode,
  ?'retain_until_date' => Date,
  ) $s = shape()) {
    $this->mode = $mode ?? "";
    $this->retain_until_date = $retain_until_date ?? 0;
  }
}

type ObjectLockRetentionMode = string;

class ObjectLockRule {
  public DefaultRetention $default_retention;

  public function __construct(shape(
  ?'default_retention' => DefaultRetention,
  ) $s = shape()) {
    $this->default_retention = $default_retention ?? null;
  }
}

type ObjectLockToken = string;

class ObjectNotInActiveTierError {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ObjectStorageClass = string;

class ObjectVersion {
  public ETag $e_tag;
  public IsLatest $is_latest;
  public ObjectKey $key;
  public LastModified $last_modified;
  public Owner $owner;
  public Size $size;
  public ObjectVersionStorageClass $storage_class;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'e_tag' => ETag,
  ?'is_latest' => IsLatest,
  ?'key' => ObjectKey,
  ?'last_modified' => LastModified,
  ?'owner' => Owner,
  ?'size' => Size,
  ?'storage_class' => ObjectVersionStorageClass,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? "";
    $this->is_latest = $is_latest ?? false;
    $this->key = $key ?? "";
    $this->last_modified = $last_modified ?? 0;
    $this->owner = $owner ?? null;
    $this->size = $size ?? 0;
    $this->storage_class = $storage_class ?? "";
    $this->version_id = $version_id ?? "";
  }
}

type ObjectVersionId = string;

type ObjectVersionList = vec<ObjectVersion>;

type ObjectVersionStorageClass = string;

class OutputLocation {
  public S3Location $s_3;

  public function __construct(shape(
  ?'s_3' => S3Location,
  ) $s = shape()) {
    $this->s_3 = $s_3 ?? null;
  }
}

class OutputSerialization {
  public CSVOutput $csv;
  public JSONOutput $json;

  public function __construct(shape(
  ?'csv' => CSVOutput,
  ?'json' => JSONOutput,
  ) $s = shape()) {
    $this->csv = $csv ?? null;
    $this->json = $json ?? null;
  }
}

class Owner {
  public DisplayName $display_name;
  public ID $id;

  public function __construct(shape(
  ?'display_name' => DisplayName,
  ?'id' => ID,
  ) $s = shape()) {
    $this->display_name = $display_name ?? "";
    $this->id = $id ?? "";
  }
}

type OwnerOverride = string;

class ParquetInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Part {
  public ETag $e_tag;
  public LastModified $last_modified;
  public PartNumber $part_number;
  public Size $size;

  public function __construct(shape(
  ?'e_tag' => ETag,
  ?'last_modified' => LastModified,
  ?'part_number' => PartNumber,
  ?'size' => Size,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? "";
    $this->last_modified = $last_modified ?? 0;
    $this->part_number = $part_number ?? 0;
    $this->size = $size ?? 0;
  }
}

type PartNumber = int;

type PartNumberMarker = int;

type Parts = vec<Part>;

type PartsCount = int;

type Payer = string;

type Permission = string;

type Policy = string;

class PolicyStatus {
  public IsPublic $is_public;

  public function __construct(shape(
  ?'is_public' => IsPublic,
  ) $s = shape()) {
    $this->is_public = $is_public ?? false;
  }
}

type Prefix = string;

type Priority = int;

class Progress {
  public BytesProcessed $bytes_processed;
  public BytesReturned $bytes_returned;
  public BytesScanned $bytes_scanned;

  public function __construct(shape(
  ?'bytes_processed' => BytesProcessed,
  ?'bytes_returned' => BytesReturned,
  ?'bytes_scanned' => BytesScanned,
  ) $s = shape()) {
    $this->bytes_processed = $bytes_processed ?? 0;
    $this->bytes_returned = $bytes_returned ?? 0;
    $this->bytes_scanned = $bytes_scanned ?? 0;
  }
}

class ProgressEvent {
  public Progress $details;

  public function __construct(shape(
  ?'details' => Progress,
  ) $s = shape()) {
    $this->details = $details ?? null;
  }
}

type Protocol = string;

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
    $this->block_public_acls = $block_public_acls ?? false;
    $this->block_public_policy = $block_public_policy ?? false;
    $this->ignore_public_acls = $ignore_public_acls ?? false;
    $this->restrict_public_buckets = $restrict_public_buckets ?? false;
  }
}

class PutBucketAccelerateConfigurationRequest {
  public AccelerateConfiguration $accelerate_configuration;
  public BucketName $bucket;

  public function __construct(shape(
  ?'accelerate_configuration' => AccelerateConfiguration,
  ?'bucket' => BucketName,
  ) $s = shape()) {
    $this->accelerate_configuration = $accelerate_configuration ?? null;
    $this->bucket = $bucket ?? "";
  }
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

  public function __construct(shape(
  ?'acl' => BucketCannedACL,
  ?'access_control_policy' => AccessControlPolicy,
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'grant_full_control' => GrantFullControl,
  ?'grant_read' => GrantRead,
  ?'grant_read_acp' => GrantReadACP,
  ?'grant_write' => GrantWrite,
  ?'grant_write_acp' => GrantWriteACP,
  ) $s = shape()) {
    $this->acl = $acl ?? "";
    $this->access_control_policy = $access_control_policy ?? null;
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->grant_full_control = $grant_full_control ?? "";
    $this->grant_read = $grant_read ?? "";
    $this->grant_read_acp = $grant_read_acp ?? "";
    $this->grant_write = $grant_write ?? "";
    $this->grant_write_acp = $grant_write_acp ?? "";
  }
}

class PutBucketAnalyticsConfigurationRequest {
  public AnalyticsConfiguration $analytics_configuration;
  public BucketName $bucket;
  public AnalyticsId $id;

  public function __construct(shape(
  ?'analytics_configuration' => AnalyticsConfiguration,
  ?'bucket' => BucketName,
  ?'id' => AnalyticsId,
  ) $s = shape()) {
    $this->analytics_configuration = $analytics_configuration ?? null;
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
  }
}

class PutBucketCorsRequest {
  public BucketName $bucket;
  public CORSConfiguration $cors_configuration;
  public ContentMD5 $content_md_5;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'cors_configuration' => CORSConfiguration,
  ?'content_md_5' => ContentMD5,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->cors_configuration = $cors_configuration ?? null;
    $this->content_md_5 = $content_md_5 ?? "";
  }
}

class PutBucketEncryptionRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ServerSideEncryptionConfiguration $server_side_encryption_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'server_side_encryption_configuration' => ServerSideEncryptionConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->server_side_encryption_configuration = $server_side_encryption_configuration ?? null;
  }
}

class PutBucketInventoryConfigurationRequest {
  public BucketName $bucket;
  public InventoryId $id;
  public InventoryConfiguration $inventory_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'id' => InventoryId,
  ?'inventory_configuration' => InventoryConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
    $this->inventory_configuration = $inventory_configuration ?? null;
  }
}

class PutBucketLifecycleConfigurationRequest {
  public BucketName $bucket;
  public BucketLifecycleConfiguration $lifecycle_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'lifecycle_configuration' => BucketLifecycleConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->lifecycle_configuration = $lifecycle_configuration ?? null;
  }
}

class PutBucketLifecycleRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public LifecycleConfiguration $lifecycle_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'lifecycle_configuration' => LifecycleConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->lifecycle_configuration = $lifecycle_configuration ?? null;
  }
}

class PutBucketLoggingRequest {
  public BucketName $bucket;
  public BucketLoggingStatus $bucket_logging_status;
  public ContentMD5 $content_md_5;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'bucket_logging_status' => BucketLoggingStatus,
  ?'content_md_5' => ContentMD5,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->bucket_logging_status = $bucket_logging_status ?? null;
    $this->content_md_5 = $content_md_5 ?? "";
  }
}

class PutBucketMetricsConfigurationRequest {
  public BucketName $bucket;
  public MetricsId $id;
  public MetricsConfiguration $metrics_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'id' => MetricsId,
  ?'metrics_configuration' => MetricsConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->id = $id ?? "";
    $this->metrics_configuration = $metrics_configuration ?? null;
  }
}

class PutBucketNotificationConfigurationRequest {
  public BucketName $bucket;
  public NotificationConfiguration $notification_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'notification_configuration' => NotificationConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->notification_configuration = $notification_configuration ?? null;
  }
}

class PutBucketNotificationRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public NotificationConfigurationDeprecated $notification_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'notification_configuration' => NotificationConfigurationDeprecated,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->notification_configuration = $notification_configuration ?? null;
  }
}

class PutBucketPolicyRequest {
  public BucketName $bucket;
  public ConfirmRemoveSelfBucketAccess $confirm_remove_self_bucket_access;
  public ContentMD5 $content_md_5;
  public Policy $policy;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'confirm_remove_self_bucket_access' => ConfirmRemoveSelfBucketAccess,
  ?'content_md_5' => ContentMD5,
  ?'policy' => Policy,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->confirm_remove_self_bucket_access = $confirm_remove_self_bucket_access ?? false;
    $this->content_md_5 = $content_md_5 ?? "";
    $this->policy = $policy ?? "";
  }
}

class PutBucketReplicationRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ReplicationConfiguration $replication_configuration;
  public ObjectLockToken $token;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'replication_configuration' => ReplicationConfiguration,
  ?'token' => ObjectLockToken,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->replication_configuration = $replication_configuration ?? null;
    $this->token = $token ?? "";
  }
}

class PutBucketRequestPaymentRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public RequestPaymentConfiguration $request_payment_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'request_payment_configuration' => RequestPaymentConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->request_payment_configuration = $request_payment_configuration ?? null;
  }
}

class PutBucketTaggingRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public Tagging $tagging;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'tagging' => Tagging,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->tagging = $tagging ?? null;
  }
}

class PutBucketVersioningRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public MFA $mfa;
  public VersioningConfiguration $versioning_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'mfa' => MFA,
  ?'versioning_configuration' => VersioningConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->mfa = $mfa ?? "";
    $this->versioning_configuration = $versioning_configuration ?? null;
  }
}

class PutBucketWebsiteRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public WebsiteConfiguration $website_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'website_configuration' => WebsiteConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->website_configuration = $website_configuration ?? null;
  }
}

class PutObjectAclOutput {
  public RequestCharged $request_charged;

  public function __construct(shape(
  ?'request_charged' => RequestCharged,
  ) $s = shape()) {
    $this->request_charged = $request_charged ?? "";
  }
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

  public function __construct(shape(
  ?'acl' => ObjectCannedACL,
  ?'access_control_policy' => AccessControlPolicy,
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'grant_full_control' => GrantFullControl,
  ?'grant_read' => GrantRead,
  ?'grant_read_acp' => GrantReadACP,
  ?'grant_write' => GrantWrite,
  ?'grant_write_acp' => GrantWriteACP,
  ?'key' => ObjectKey,
  ?'request_payer' => RequestPayer,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->acl = $acl ?? "";
    $this->access_control_policy = $access_control_policy ?? null;
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->grant_full_control = $grant_full_control ?? "";
    $this->grant_read = $grant_read ?? "";
    $this->grant_read_acp = $grant_read_acp ?? "";
    $this->grant_write = $grant_write ?? "";
    $this->grant_write_acp = $grant_write_acp ?? "";
    $this->key = $key ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class PutObjectLegalHoldOutput {
  public RequestCharged $request_charged;

  public function __construct(shape(
  ?'request_charged' => RequestCharged,
  ) $s = shape()) {
    $this->request_charged = $request_charged ?? "";
  }
}

class PutObjectLegalHoldRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ObjectKey $key;
  public ObjectLockLegalHold $legal_hold;
  public RequestPayer $request_payer;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'key' => ObjectKey,
  ?'legal_hold' => ObjectLockLegalHold,
  ?'request_payer' => RequestPayer,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->key = $key ?? "";
    $this->legal_hold = $legal_hold ?? null;
    $this->request_payer = $request_payer ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class PutObjectLockConfigurationOutput {
  public RequestCharged $request_charged;

  public function __construct(shape(
  ?'request_charged' => RequestCharged,
  ) $s = shape()) {
    $this->request_charged = $request_charged ?? "";
  }
}

class PutObjectLockConfigurationRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ObjectLockConfiguration $object_lock_configuration;
  public RequestPayer $request_payer;
  public ObjectLockToken $token;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'object_lock_configuration' => ObjectLockConfiguration,
  ?'request_payer' => RequestPayer,
  ?'token' => ObjectLockToken,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->object_lock_configuration = $object_lock_configuration ?? null;
    $this->request_payer = $request_payer ?? "";
    $this->token = $token ?? "";
  }
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

  public function __construct(shape(
  ?'e_tag' => ETag,
  ?'expiration' => Expiration,
  ?'request_charged' => RequestCharged,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_encryption_context' => SSEKMSEncryptionContext,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? "";
    $this->expiration = $expiration ?? "";
    $this->request_charged = $request_charged ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_encryption_context = $ssekms_encryption_context ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->version_id = $version_id ?? "";
  }
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

  public function __construct(shape(
  ?'acl' => ObjectCannedACL,
  ?'body' => Body,
  ?'bucket' => BucketName,
  ?'cache_control' => CacheControl,
  ?'content_disposition' => ContentDisposition,
  ?'content_encoding' => ContentEncoding,
  ?'content_language' => ContentLanguage,
  ?'content_length' => ContentLength,
  ?'content_md_5' => ContentMD5,
  ?'content_type' => ContentType,
  ?'expires' => Expires,
  ?'grant_full_control' => GrantFullControl,
  ?'grant_read' => GrantRead,
  ?'grant_read_acp' => GrantReadACP,
  ?'grant_write_acp' => GrantWriteACP,
  ?'key' => ObjectKey,
  ?'metadata' => Metadata,
  ?'object_lock_legal_hold_status' => ObjectLockLegalHoldStatus,
  ?'object_lock_mode' => ObjectLockMode,
  ?'object_lock_retain_until_date' => ObjectLockRetainUntilDate,
  ?'request_payer' => RequestPayer,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key' => SSECustomerKey,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_encryption_context' => SSEKMSEncryptionContext,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ?'storage_class' => StorageClass,
  ?'tagging' => TaggingHeader,
  ?'website_redirect_location' => WebsiteRedirectLocation,
  ) $s = shape()) {
    $this->acl = $acl ?? "";
    $this->body = $body ?? "";
    $this->bucket = $bucket ?? "";
    $this->cache_control = $cache_control ?? "";
    $this->content_disposition = $content_disposition ?? "";
    $this->content_encoding = $content_encoding ?? "";
    $this->content_language = $content_language ?? "";
    $this->content_length = $content_length ?? 0;
    $this->content_md_5 = $content_md_5 ?? "";
    $this->content_type = $content_type ?? "";
    $this->expires = $expires ?? 0;
    $this->grant_full_control = $grant_full_control ?? "";
    $this->grant_read = $grant_read ?? "";
    $this->grant_read_acp = $grant_read_acp ?? "";
    $this->grant_write_acp = $grant_write_acp ?? "";
    $this->key = $key ?? "";
    $this->metadata = $metadata ?? [];
    $this->object_lock_legal_hold_status = $object_lock_legal_hold_status ?? "";
    $this->object_lock_mode = $object_lock_mode ?? "";
    $this->object_lock_retain_until_date = $object_lock_retain_until_date ?? 0;
    $this->request_payer = $request_payer ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key = $sse_customer_key ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_encryption_context = $ssekms_encryption_context ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
    $this->storage_class = $storage_class ?? "";
    $this->tagging = $tagging ?? "";
    $this->website_redirect_location = $website_redirect_location ?? "";
  }
}

class PutObjectRetentionOutput {
  public RequestCharged $request_charged;

  public function __construct(shape(
  ?'request_charged' => RequestCharged,
  ) $s = shape()) {
    $this->request_charged = $request_charged ?? "";
  }
}

class PutObjectRetentionRequest {
  public BucketName $bucket;
  public BypassGovernanceRetention $bypass_governance_retention;
  public ContentMD5 $content_md_5;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public ObjectLockRetention $retention;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'bypass_governance_retention' => BypassGovernanceRetention,
  ?'content_md_5' => ContentMD5,
  ?'key' => ObjectKey,
  ?'request_payer' => RequestPayer,
  ?'retention' => ObjectLockRetention,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->bypass_governance_retention = $bypass_governance_retention ?? false;
    $this->content_md_5 = $content_md_5 ?? "";
    $this->key = $key ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->retention = $retention ?? null;
    $this->version_id = $version_id ?? "";
  }
}

class PutObjectTaggingOutput {
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->version_id = $version_id ?? "";
  }
}

class PutObjectTaggingRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public ObjectKey $key;
  public Tagging $tagging;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'key' => ObjectKey,
  ?'tagging' => Tagging,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->key = $key ?? "";
    $this->tagging = $tagging ?? null;
    $this->version_id = $version_id ?? "";
  }
}

class PutPublicAccessBlockRequest {
  public BucketName $bucket;
  public ContentMD5 $content_md_5;
  public PublicAccessBlockConfiguration $public_access_block_configuration;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'content_md_5' => ContentMD5,
  ?'public_access_block_configuration' => PublicAccessBlockConfiguration,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->content_md_5 = $content_md_5 ?? "";
    $this->public_access_block_configuration = $public_access_block_configuration ?? null;
  }
}

type QueueArn = string;

class QueueConfiguration {
  public EventList $events;
  public NotificationConfigurationFilter $filter;
  public NotificationId $id;
  public QueueArn $queue_arn;

  public function __construct(shape(
  ?'events' => EventList,
  ?'filter' => NotificationConfigurationFilter,
  ?'id' => NotificationId,
  ?'queue_arn' => QueueArn,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->filter = $filter ?? null;
    $this->id = $id ?? "";
    $this->queue_arn = $queue_arn ?? "";
  }
}

class QueueConfigurationDeprecated {
  public Event $event;
  public EventList $events;
  public NotificationId $id;
  public QueueArn $queue;

  public function __construct(shape(
  ?'event' => Event,
  ?'events' => EventList,
  ?'id' => NotificationId,
  ?'queue' => QueueArn,
  ) $s = shape()) {
    $this->event = $event ?? "";
    $this->events = $events ?? [];
    $this->id = $id ?? "";
    $this->queue = $queue ?? "";
  }
}

type QueueConfigurationList = vec<QueueConfiguration>;

type Quiet = bool;

type QuoteCharacter = string;

type QuoteEscapeCharacter = string;

type QuoteFields = string;

type Range = string;

type RecordDelimiter = string;

class RecordsEvent {
  public Body $payload;

  public function __construct(shape(
  ?'payload' => Body,
  ) $s = shape()) {
    $this->payload = $payload ?? "";
  }
}

class Redirect {
  public HostName $host_name;
  public HttpRedirectCode $http_redirect_code;
  public Protocol $protocol;
  public ReplaceKeyPrefixWith $replace_key_prefix_with;
  public ReplaceKeyWith $replace_key_with;

  public function __construct(shape(
  ?'host_name' => HostName,
  ?'http_redirect_code' => HttpRedirectCode,
  ?'protocol' => Protocol,
  ?'replace_key_prefix_with' => ReplaceKeyPrefixWith,
  ?'replace_key_with' => ReplaceKeyWith,
  ) $s = shape()) {
    $this->host_name = $host_name ?? "";
    $this->http_redirect_code = $http_redirect_code ?? "";
    $this->protocol = $protocol ?? "";
    $this->replace_key_prefix_with = $replace_key_prefix_with ?? "";
    $this->replace_key_with = $replace_key_with ?? "";
  }
}

class RedirectAllRequestsTo {
  public HostName $host_name;
  public Protocol $protocol;

  public function __construct(shape(
  ?'host_name' => HostName,
  ?'protocol' => Protocol,
  ) $s = shape()) {
    $this->host_name = $host_name ?? "";
    $this->protocol = $protocol ?? "";
  }
}

type ReplaceKeyPrefixWith = string;

type ReplaceKeyWith = string;

type ReplicaKmsKeyID = string;

class ReplicationConfiguration {
  public Role $role;
  public ReplicationRules $rules;

  public function __construct(shape(
  ?'role' => Role,
  ?'rules' => ReplicationRules,
  ) $s = shape()) {
    $this->role = $role ?? "";
    $this->rules = $rules ?? [];
  }
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

  public function __construct(shape(
  ?'delete_marker_replication' => DeleteMarkerReplication,
  ?'destination' => Destination,
  ?'existing_object_replication' => ExistingObjectReplication,
  ?'filter' => ReplicationRuleFilter,
  ?'id' => ID,
  ?'prefix' => Prefix,
  ?'priority' => Priority,
  ?'source_selection_criteria' => SourceSelectionCriteria,
  ?'status' => ReplicationRuleStatus,
  ) $s = shape()) {
    $this->delete_marker_replication = $delete_marker_replication ?? null;
    $this->destination = $destination ?? null;
    $this->existing_object_replication = $existing_object_replication ?? null;
    $this->filter = $filter ?? null;
    $this->id = $id ?? "";
    $this->prefix = $prefix ?? "";
    $this->priority = $priority ?? 0;
    $this->source_selection_criteria = $source_selection_criteria ?? null;
    $this->status = $status ?? "";
  }
}

class ReplicationRuleAndOperator {
  public Prefix $prefix;
  public TagSet $tags;

  public function __construct(shape(
  ?'prefix' => Prefix,
  ?'tags' => TagSet,
  ) $s = shape()) {
    $this->prefix = $prefix ?? "";
    $this->tags = $tags ?? [];
  }
}

class ReplicationRuleFilter {
  public ReplicationRuleAndOperator $and;
  public Prefix $prefix;
  public Tag $tag;

  public function __construct(shape(
  ?'and' => ReplicationRuleAndOperator,
  ?'prefix' => Prefix,
  ?'tag' => Tag,
  ) $s = shape()) {
    $this->and = $and ?? null;
    $this->prefix = $prefix ?? "";
    $this->tag = $tag ?? null;
  }
}

type ReplicationRuleStatus = string;

type ReplicationRules = vec<ReplicationRule>;

type ReplicationStatus = string;

class ReplicationTime {
  public ReplicationTimeStatus $status;
  public ReplicationTimeValue $time;

  public function __construct(shape(
  ?'status' => ReplicationTimeStatus,
  ?'time' => ReplicationTimeValue,
  ) $s = shape()) {
    $this->status = $status ?? "";
    $this->time = $time ?? null;
  }
}

type ReplicationTimeStatus = string;

class ReplicationTimeValue {
  public Minutes $minutes;

  public function __construct(shape(
  ?'minutes' => Minutes,
  ) $s = shape()) {
    $this->minutes = $minutes ?? 0;
  }
}

type RequestCharged = string;

type RequestPayer = string;

class RequestPaymentConfiguration {
  public Payer $payer;

  public function __construct(shape(
  ?'payer' => Payer,
  ) $s = shape()) {
    $this->payer = $payer ?? "";
  }
}

class RequestProgress {
  public EnableRequestProgress $enabled;

  public function __construct(shape(
  ?'enabled' => EnableRequestProgress,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
  }
}

type ResponseCacheControl = string;

type ResponseContentDisposition = string;

type ResponseContentEncoding = string;

type ResponseContentLanguage = string;

type ResponseContentType = string;

type ResponseExpires = int;

type Restore = string;

class RestoreObjectOutput {
  public RequestCharged $request_charged;
  public RestoreOutputPath $restore_output_path;

  public function __construct(shape(
  ?'request_charged' => RequestCharged,
  ?'restore_output_path' => RestoreOutputPath,
  ) $s = shape()) {
    $this->request_charged = $request_charged ?? "";
    $this->restore_output_path = $restore_output_path ?? "";
  }
}

class RestoreObjectRequest {
  public BucketName $bucket;
  public ObjectKey $key;
  public RequestPayer $request_payer;
  public RestoreRequest $restore_request;
  public ObjectVersionId $version_id;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key' => ObjectKey,
  ?'request_payer' => RequestPayer,
  ?'restore_request' => RestoreRequest,
  ?'version_id' => ObjectVersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->key = $key ?? "";
    $this->request_payer = $request_payer ?? "";
    $this->restore_request = $restore_request ?? null;
    $this->version_id = $version_id ?? "";
  }
}

type RestoreOutputPath = string;

class RestoreRequest {
  public Days $days;
  public Description $description;
  public GlacierJobParameters $glacier_job_parameters;
  public OutputLocation $output_location;
  public SelectParameters $select_parameters;
  public Tier $tier;
  public RestoreRequestType $type;

  public function __construct(shape(
  ?'days' => Days,
  ?'description' => Description,
  ?'glacier_job_parameters' => GlacierJobParameters,
  ?'output_location' => OutputLocation,
  ?'select_parameters' => SelectParameters,
  ?'tier' => Tier,
  ?'type' => RestoreRequestType,
  ) $s = shape()) {
    $this->days = $days ?? 0;
    $this->description = $description ?? "";
    $this->glacier_job_parameters = $glacier_job_parameters ?? null;
    $this->output_location = $output_location ?? null;
    $this->select_parameters = $select_parameters ?? null;
    $this->tier = $tier ?? "";
    $this->type = $type ?? "";
  }
}

type RestoreRequestType = string;

type Role = string;

class RoutingRule {
  public Condition $condition;
  public Redirect $redirect;

  public function __construct(shape(
  ?'condition' => Condition,
  ?'redirect' => Redirect,
  ) $s = shape()) {
    $this->condition = $condition ?? null;
    $this->redirect = $redirect ?? null;
  }
}

type RoutingRules = vec<RoutingRule>;

class Rule {
  public AbortIncompleteMultipartUpload $abort_incomplete_multipart_upload;
  public LifecycleExpiration $expiration;
  public ID $id;
  public NoncurrentVersionExpiration $noncurrent_version_expiration;
  public NoncurrentVersionTransition $noncurrent_version_transition;
  public Prefix $prefix;
  public ExpirationStatus $status;
  public Transition $transition;

  public function __construct(shape(
  ?'abort_incomplete_multipart_upload' => AbortIncompleteMultipartUpload,
  ?'expiration' => LifecycleExpiration,
  ?'id' => ID,
  ?'noncurrent_version_expiration' => NoncurrentVersionExpiration,
  ?'noncurrent_version_transition' => NoncurrentVersionTransition,
  ?'prefix' => Prefix,
  ?'status' => ExpirationStatus,
  ?'transition' => Transition,
  ) $s = shape()) {
    $this->abort_incomplete_multipart_upload = $abort_incomplete_multipart_upload ?? null;
    $this->expiration = $expiration ?? null;
    $this->id = $id ?? "";
    $this->noncurrent_version_expiration = $noncurrent_version_expiration ?? null;
    $this->noncurrent_version_transition = $noncurrent_version_transition ?? null;
    $this->prefix = $prefix ?? "";
    $this->status = $status ?? "";
    $this->transition = $transition ?? null;
  }
}

type Rules = vec<Rule>;

class S3KeyFilter {
  public FilterRuleList $filter_rules;

  public function __construct(shape(
  ?'filter_rules' => FilterRuleList,
  ) $s = shape()) {
    $this->filter_rules = $filter_rules ?? [];
  }
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

  public function __construct(shape(
  ?'access_control_list' => Grants,
  ?'bucket_name' => BucketName,
  ?'canned_acl' => ObjectCannedACL,
  ?'encryption' => Encryption,
  ?'prefix' => LocationPrefix,
  ?'storage_class' => StorageClass,
  ?'tagging' => Tagging,
  ?'user_metadata' => UserMetadata,
  ) $s = shape()) {
    $this->access_control_list = $access_control_list ?? [];
    $this->bucket_name = $bucket_name ?? "";
    $this->canned_acl = $canned_acl ?? "";
    $this->encryption = $encryption ?? null;
    $this->prefix = $prefix ?? "";
    $this->storage_class = $storage_class ?? "";
    $this->tagging = $tagging ?? null;
    $this->user_metadata = $user_metadata ?? [];
  }
}

type SSECustomerAlgorithm = string;

type SSECustomerKey = string;

type SSECustomerKeyMD5 = string;

class SSEKMS {
  public SSEKMSKeyId $key_id;

  public function __construct(shape(
  ?'key_id' => SSEKMSKeyId,
  ) $s = shape()) {
    $this->key_id = $key_id ?? "";
  }
}

type SSEKMSEncryptionContext = string;

type SSEKMSKeyId = string;

class SSES3 {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ScanRange {
  public End $end;
  public Start $start;

  public function __construct(shape(
  ?'end' => End,
  ?'start' => Start,
  ) $s = shape()) {
    $this->end = $end ?? 0;
    $this->start = $start ?? 0;
  }
}

class SelectObjectContentEventStream {
  public ContinuationEvent $cont;
  public EndEvent $end;
  public ProgressEvent $progress;
  public RecordsEvent $records;
  public StatsEvent $stats;

  public function __construct(shape(
  ?'cont' => ContinuationEvent,
  ?'end' => EndEvent,
  ?'progress' => ProgressEvent,
  ?'records' => RecordsEvent,
  ?'stats' => StatsEvent,
  ) $s = shape()) {
    $this->cont = $cont ?? null;
    $this->end = $end ?? null;
    $this->progress = $progress ?? null;
    $this->records = $records ?? null;
    $this->stats = $stats ?? null;
  }
}

class SelectObjectContentOutput {
  public SelectObjectContentEventStream $payload;

  public function __construct(shape(
  ?'payload' => SelectObjectContentEventStream,
  ) $s = shape()) {
    $this->payload = $payload ?? null;
  }
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

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'expression' => Expression,
  ?'expression_type' => ExpressionType,
  ?'input_serialization' => InputSerialization,
  ?'key' => ObjectKey,
  ?'output_serialization' => OutputSerialization,
  ?'request_progress' => RequestProgress,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key' => SSECustomerKey,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'scan_range' => ScanRange,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->expression = $expression ?? "";
    $this->expression_type = $expression_type ?? "";
    $this->input_serialization = $input_serialization ?? null;
    $this->key = $key ?? "";
    $this->output_serialization = $output_serialization ?? null;
    $this->request_progress = $request_progress ?? null;
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key = $sse_customer_key ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->scan_range = $scan_range ?? null;
  }
}

class SelectParameters {
  public Expression $expression;
  public ExpressionType $expression_type;
  public InputSerialization $input_serialization;
  public OutputSerialization $output_serialization;

  public function __construct(shape(
  ?'expression' => Expression,
  ?'expression_type' => ExpressionType,
  ?'input_serialization' => InputSerialization,
  ?'output_serialization' => OutputSerialization,
  ) $s = shape()) {
    $this->expression = $expression ?? "";
    $this->expression_type = $expression_type ?? "";
    $this->input_serialization = $input_serialization ?? null;
    $this->output_serialization = $output_serialization ?? null;
  }
}

type ServerSideEncryption = string;

class ServerSideEncryptionByDefault {
  public SSEKMSKeyId $kms_master_key_id;
  public ServerSideEncryption $sse_algorithm;

  public function __construct(shape(
  ?'kms_master_key_id' => SSEKMSKeyId,
  ?'sse_algorithm' => ServerSideEncryption,
  ) $s = shape()) {
    $this->kms_master_key_id = $kms_master_key_id ?? "";
    $this->sse_algorithm = $sse_algorithm ?? "";
  }
}

class ServerSideEncryptionConfiguration {
  public ServerSideEncryptionRules $rules;

  public function __construct(shape(
  ?'rules' => ServerSideEncryptionRules,
  ) $s = shape()) {
    $this->rules = $rules ?? [];
  }
}

class ServerSideEncryptionRule {
  public ServerSideEncryptionByDefault $apply_server_side_encryption_by_default;

  public function __construct(shape(
  ?'apply_server_side_encryption_by_default' => ServerSideEncryptionByDefault,
  ) $s = shape()) {
    $this->apply_server_side_encryption_by_default = $apply_server_side_encryption_by_default ?? null;
  }
}

type ServerSideEncryptionRules = vec<ServerSideEncryptionRule>;

type Setting = bool;

type Size = int;

class SourceSelectionCriteria {
  public SseKmsEncryptedObjects $sse_kms_encrypted_objects;

  public function __construct(shape(
  ?'sse_kms_encrypted_objects' => SseKmsEncryptedObjects,
  ) $s = shape()) {
    $this->sse_kms_encrypted_objects = $sse_kms_encrypted_objects ?? null;
  }
}

class SseKmsEncryptedObjects {
  public SseKmsEncryptedObjectsStatus $status;

  public function __construct(shape(
  ?'status' => SseKmsEncryptedObjectsStatus,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type SseKmsEncryptedObjectsStatus = string;

type Start = int;

type StartAfter = string;

class Stats {
  public BytesProcessed $bytes_processed;
  public BytesReturned $bytes_returned;
  public BytesScanned $bytes_scanned;

  public function __construct(shape(
  ?'bytes_processed' => BytesProcessed,
  ?'bytes_returned' => BytesReturned,
  ?'bytes_scanned' => BytesScanned,
  ) $s = shape()) {
    $this->bytes_processed = $bytes_processed ?? 0;
    $this->bytes_returned = $bytes_returned ?? 0;
    $this->bytes_scanned = $bytes_scanned ?? 0;
  }
}

class StatsEvent {
  public Stats $details;

  public function __construct(shape(
  ?'details' => Stats,
  ) $s = shape()) {
    $this->details = $details ?? null;
  }
}

type StorageClass = string;

class StorageClassAnalysis {
  public StorageClassAnalysisDataExport $data_export;

  public function __construct(shape(
  ?'data_export' => StorageClassAnalysisDataExport,
  ) $s = shape()) {
    $this->data_export = $data_export ?? null;
  }
}

class StorageClassAnalysisDataExport {
  public AnalyticsExportDestination $destination;
  public StorageClassAnalysisSchemaVersion $output_schema_version;

  public function __construct(shape(
  ?'destination' => AnalyticsExportDestination,
  ?'output_schema_version' => StorageClassAnalysisSchemaVersion,
  ) $s = shape()) {
    $this->destination = $destination ?? null;
    $this->output_schema_version = $output_schema_version ?? "";
  }
}

type StorageClassAnalysisSchemaVersion = string;

type Suffix = string;

class Tag {
  public ObjectKey $key;
  public Value $value;

  public function __construct(shape(
  ?'key' => ObjectKey,
  ?'value' => Value,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagCount = int;

type TagSet = vec<Tag>;

class Tagging {
  public TagSet $tag_set;

  public function __construct(shape(
  ?'tag_set' => TagSet,
  ) $s = shape()) {
    $this->tag_set = $tag_set ?? [];
  }
}

type TaggingDirective = string;

type TaggingHeader = string;

type TargetBucket = string;

class TargetGrant {
  public Grantee $grantee;
  public BucketLogsPermission $permission;

  public function __construct(shape(
  ?'grantee' => Grantee,
  ?'permission' => BucketLogsPermission,
  ) $s = shape()) {
    $this->grantee = $grantee ?? null;
    $this->permission = $permission ?? "";
  }
}

type TargetGrants = vec<TargetGrant>;

type TargetPrefix = string;

type Tier = string;

type Token = string;

type TopicArn = string;

class TopicConfiguration {
  public EventList $events;
  public NotificationConfigurationFilter $filter;
  public NotificationId $id;
  public TopicArn $topic_arn;

  public function __construct(shape(
  ?'events' => EventList,
  ?'filter' => NotificationConfigurationFilter,
  ?'id' => NotificationId,
  ?'topic_arn' => TopicArn,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->filter = $filter ?? null;
    $this->id = $id ?? "";
    $this->topic_arn = $topic_arn ?? "";
  }
}

class TopicConfigurationDeprecated {
  public Event $event;
  public EventList $events;
  public NotificationId $id;
  public TopicArn $topic;

  public function __construct(shape(
  ?'event' => Event,
  ?'events' => EventList,
  ?'id' => NotificationId,
  ?'topic' => TopicArn,
  ) $s = shape()) {
    $this->event = $event ?? "";
    $this->events = $events ?? [];
    $this->id = $id ?? "";
    $this->topic = $topic ?? "";
  }
}

type TopicConfigurationList = vec<TopicConfiguration>;

class Transition {
  public Date $date;
  public Days $days;
  public TransitionStorageClass $storage_class;

  public function __construct(shape(
  ?'date' => Date,
  ?'days' => Days,
  ?'storage_class' => TransitionStorageClass,
  ) $s = shape()) {
    $this->date = $date ?? 0;
    $this->days = $days ?? 0;
    $this->storage_class = $storage_class ?? "";
  }
}

type TransitionList = vec<Transition>;

type TransitionStorageClass = string;

type Type = string;

type URI = string;

type UploadIdMarker = string;

class UploadPartCopyOutput {
  public CopyPartResult $copy_part_result;
  public CopySourceVersionId $copy_source_version_id;
  public RequestCharged $request_charged;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;

  public function __construct(shape(
  ?'copy_part_result' => CopyPartResult,
  ?'copy_source_version_id' => CopySourceVersionId,
  ?'request_charged' => RequestCharged,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ) $s = shape()) {
    $this->copy_part_result = $copy_part_result ?? null;
    $this->copy_source_version_id = $copy_source_version_id ?? "";
    $this->request_charged = $request_charged ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
  }
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

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'copy_source' => CopySource,
  ?'copy_source_if_match' => CopySourceIfMatch,
  ?'copy_source_if_modified_since' => CopySourceIfModifiedSince,
  ?'copy_source_if_none_match' => CopySourceIfNoneMatch,
  ?'copy_source_if_unmodified_since' => CopySourceIfUnmodifiedSince,
  ?'copy_source_range' => CopySourceRange,
  ?'copy_source_sse_customer_algorithm' => CopySourceSSECustomerAlgorithm,
  ?'copy_source_sse_customer_key' => CopySourceSSECustomerKey,
  ?'copy_source_sse_customer_key_md_5' => CopySourceSSECustomerKeyMD5,
  ?'key' => ObjectKey,
  ?'part_number' => PartNumber,
  ?'request_payer' => RequestPayer,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key' => SSECustomerKey,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'upload_id' => MultipartUploadId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->copy_source = $copy_source ?? "";
    $this->copy_source_if_match = $copy_source_if_match ?? "";
    $this->copy_source_if_modified_since = $copy_source_if_modified_since ?? 0;
    $this->copy_source_if_none_match = $copy_source_if_none_match ?? "";
    $this->copy_source_if_unmodified_since = $copy_source_if_unmodified_since ?? 0;
    $this->copy_source_range = $copy_source_range ?? "";
    $this->copy_source_sse_customer_algorithm = $copy_source_sse_customer_algorithm ?? "";
    $this->copy_source_sse_customer_key = $copy_source_sse_customer_key ?? "";
    $this->copy_source_sse_customer_key_md_5 = $copy_source_sse_customer_key_md_5 ?? "";
    $this->key = $key ?? "";
    $this->part_number = $part_number ?? 0;
    $this->request_payer = $request_payer ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key = $sse_customer_key ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

class UploadPartOutput {
  public ETag $e_tag;
  public RequestCharged $request_charged;
  public SSECustomerAlgorithm $sse_customer_algorithm;
  public SSECustomerKeyMD5 $sse_customer_key_md_5;
  public SSEKMSKeyId $ssekms_key_id;
  public ServerSideEncryption $server_side_encryption;

  public function __construct(shape(
  ?'e_tag' => ETag,
  ?'request_charged' => RequestCharged,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'ssekms_key_id' => SSEKMSKeyId,
  ?'server_side_encryption' => ServerSideEncryption,
  ) $s = shape()) {
    $this->e_tag = $e_tag ?? "";
    $this->request_charged = $request_charged ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->ssekms_key_id = $ssekms_key_id ?? "";
    $this->server_side_encryption = $server_side_encryption ?? "";
  }
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

  public function __construct(shape(
  ?'body' => Body,
  ?'bucket' => BucketName,
  ?'content_length' => ContentLength,
  ?'content_md_5' => ContentMD5,
  ?'key' => ObjectKey,
  ?'part_number' => PartNumber,
  ?'request_payer' => RequestPayer,
  ?'sse_customer_algorithm' => SSECustomerAlgorithm,
  ?'sse_customer_key' => SSECustomerKey,
  ?'sse_customer_key_md_5' => SSECustomerKeyMD5,
  ?'upload_id' => MultipartUploadId,
  ) $s = shape()) {
    $this->body = $body ?? "";
    $this->bucket = $bucket ?? "";
    $this->content_length = $content_length ?? 0;
    $this->content_md_5 = $content_md_5 ?? "";
    $this->key = $key ?? "";
    $this->part_number = $part_number ?? 0;
    $this->request_payer = $request_payer ?? "";
    $this->sse_customer_algorithm = $sse_customer_algorithm ?? "";
    $this->sse_customer_key = $sse_customer_key ?? "";
    $this->sse_customer_key_md_5 = $sse_customer_key_md_5 ?? "";
    $this->upload_id = $upload_id ?? "";
  }
}

type UserMetadata = vec<MetadataEntry>;

type Value = string;

type VersionIdMarker = string;

class VersioningConfiguration {
  public MFADelete $mfa_delete;
  public BucketVersioningStatus $status;

  public function __construct(shape(
  ?'mfa_delete' => MFADelete,
  ?'status' => BucketVersioningStatus,
  ) $s = shape()) {
    $this->mfa_delete = $mfa_delete ?? "";
    $this->status = $status ?? "";
  }
}

class WebsiteConfiguration {
  public ErrorDocument $error_document;
  public IndexDocument $index_document;
  public RedirectAllRequestsTo $redirect_all_requests_to;
  public RoutingRules $routing_rules;

  public function __construct(shape(
  ?'error_document' => ErrorDocument,
  ?'index_document' => IndexDocument,
  ?'redirect_all_requests_to' => RedirectAllRequestsTo,
  ?'routing_rules' => RoutingRules,
  ) $s = shape()) {
    $this->error_document = $error_document ?? null;
    $this->index_document = $index_document ?? null;
    $this->redirect_all_requests_to = $redirect_all_requests_to ?? null;
    $this->routing_rules = $routing_rules ?? [];
  }
}

type WebsiteRedirectLocation = string;

type Years = int;

