<?hh // strict
namespace slack\aws\qldb;

interface QLDB {
  public function CreateLedger(CreateLedgerRequest): Awaitable<Errors\Result<CreateLedgerResponse>>;
  public function DeleteLedger(DeleteLedgerRequest): Awaitable<Errors\Error>;
  public function DescribeJournalS3Export(DescribeJournalS3ExportRequest): Awaitable<Errors\Result<DescribeJournalS3ExportResponse>>;
  public function DescribeLedger(DescribeLedgerRequest): Awaitable<Errors\Result<DescribeLedgerResponse>>;
  public function ExportJournalToS3(ExportJournalToS3Request): Awaitable<Errors\Result<ExportJournalToS3Response>>;
  public function GetBlock(GetBlockRequest): Awaitable<Errors\Result<GetBlockResponse>>;
  public function GetDigest(GetDigestRequest): Awaitable<Errors\Result<GetDigestResponse>>;
  public function GetRevision(GetRevisionRequest): Awaitable<Errors\Result<GetRevisionResponse>>;
  public function ListJournalS3Exports(ListJournalS3ExportsRequest): Awaitable<Errors\Result<ListJournalS3ExportsResponse>>;
  public function ListJournalS3ExportsForLedger(ListJournalS3ExportsForLedgerRequest): Awaitable<Errors\Result<ListJournalS3ExportsForLedgerResponse>>;
  public function ListLedgers(ListLedgersRequest): Awaitable<Errors\Result<ListLedgersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateLedger(UpdateLedgerRequest): Awaitable<Errors\Result<UpdateLedgerResponse>>;
}

type Arn = string;

class CreateLedgerRequest {
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
  public PermissionsMode $permissions_mode;
  public Tags $tags;

  public function __construct(shape(
  ?'deletion_protection' => DeletionProtection,
  ?'name' => LedgerName,
  ?'permissions_mode' => PermissionsMode,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->deletion_protection = $deletion_protection ?? false;
    $this->name = $name ?? "";
    $this->permissions_mode = $permissions_mode ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateLedgerResponse {
  public Arn $arn;
  public Timestamp $creation_date_time;
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
  public LedgerState $state;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_date_time' => Timestamp,
  ?'deletion_protection' => DeletionProtection,
  ?'name' => LedgerName,
  ?'state' => LedgerState,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->deletion_protection = $deletion_protection ?? false;
    $this->name = $name ?? "";
    $this->state = $state ?? "";
  }
}

class DeleteLedgerRequest {
  public LedgerName $name;

  public function __construct(shape(
  ?'name' => LedgerName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type DeletionProtection = bool;

class DescribeJournalS3ExportRequest {
  public UniqueId $export_id;
  public LedgerName $name;

  public function __construct(shape(
  ?'export_id' => UniqueId,
  ?'name' => LedgerName,
  ) $s = shape()) {
    $this->export_id = $export_id ?? "";
    $this->name = $name ?? "";
  }
}

class DescribeJournalS3ExportResponse {
  public JournalS3ExportDescription $export_description;

  public function __construct(shape(
  ?'export_description' => JournalS3ExportDescription,
  ) $s = shape()) {
    $this->export_description = $export_description ?? null;
  }
}

class DescribeLedgerRequest {
  public LedgerName $name;

  public function __construct(shape(
  ?'name' => LedgerName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DescribeLedgerResponse {
  public Arn $arn;
  public Timestamp $creation_date_time;
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
  public LedgerState $state;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_date_time' => Timestamp,
  ?'deletion_protection' => DeletionProtection,
  ?'name' => LedgerName,
  ?'state' => LedgerState,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->deletion_protection = $deletion_protection ?? false;
    $this->name = $name ?? "";
    $this->state = $state ?? "";
  }
}

type Digest = string;

type ErrorMessage = string;

class ExportJournalToS3Request {
  public Timestamp $exclusive_end_time;
  public Timestamp $inclusive_start_time;
  public LedgerName $name;
  public Arn $role_arn;
  public S3ExportConfiguration $s_3_export_configuration;

  public function __construct(shape(
  ?'exclusive_end_time' => Timestamp,
  ?'inclusive_start_time' => Timestamp,
  ?'name' => LedgerName,
  ?'role_arn' => Arn,
  ?'s_3_export_configuration' => S3ExportConfiguration,
  ) $s = shape()) {
    $this->exclusive_end_time = $exclusive_end_time ?? 0;
    $this->inclusive_start_time = $inclusive_start_time ?? 0;
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->s_3_export_configuration = $s_3_export_configuration ?? null;
  }
}

class ExportJournalToS3Response {
  public UniqueId $export_id;

  public function __construct(shape(
  ?'export_id' => UniqueId,
  ) $s = shape()) {
    $this->export_id = $export_id ?? "";
  }
}

type ExportStatus = string;

class GetBlockRequest {
  public ValueHolder $block_address;
  public ValueHolder $digest_tip_address;
  public LedgerName $name;

  public function __construct(shape(
  ?'block_address' => ValueHolder,
  ?'digest_tip_address' => ValueHolder,
  ?'name' => LedgerName,
  ) $s = shape()) {
    $this->block_address = $block_address ?? null;
    $this->digest_tip_address = $digest_tip_address ?? null;
    $this->name = $name ?? "";
  }
}

class GetBlockResponse {
  public ValueHolder $block;
  public ValueHolder $proof;

  public function __construct(shape(
  ?'block' => ValueHolder,
  ?'proof' => ValueHolder,
  ) $s = shape()) {
    $this->block = $block ?? null;
    $this->proof = $proof ?? null;
  }
}

class GetDigestRequest {
  public LedgerName $name;

  public function __construct(shape(
  ?'name' => LedgerName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class GetDigestResponse {
  public Digest $digest;
  public ValueHolder $digest_tip_address;

  public function __construct(shape(
  ?'digest' => Digest,
  ?'digest_tip_address' => ValueHolder,
  ) $s = shape()) {
    $this->digest = $digest ?? "";
    $this->digest_tip_address = $digest_tip_address ?? null;
  }
}

class GetRevisionRequest {
  public ValueHolder $block_address;
  public ValueHolder $digest_tip_address;
  public UniqueId $document_id;
  public LedgerName $name;

  public function __construct(shape(
  ?'block_address' => ValueHolder,
  ?'digest_tip_address' => ValueHolder,
  ?'document_id' => UniqueId,
  ?'name' => LedgerName,
  ) $s = shape()) {
    $this->block_address = $block_address ?? null;
    $this->digest_tip_address = $digest_tip_address ?? null;
    $this->document_id = $document_id ?? "";
    $this->name = $name ?? "";
  }
}

class GetRevisionResponse {
  public ValueHolder $proof;
  public ValueHolder $revision;

  public function __construct(shape(
  ?'proof' => ValueHolder,
  ?'revision' => ValueHolder,
  ) $s = shape()) {
    $this->proof = $proof ?? null;
    $this->revision = $revision ?? null;
  }
}

class InvalidParameterException {
  public ErrorMessage $message;
  public ParameterName $parameter_name;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'parameter_name' => ParameterName,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->parameter_name = $parameter_name ?? "";
  }
}

type IonText = string;

class JournalS3ExportDescription {
  public Timestamp $exclusive_end_time;
  public Timestamp $export_creation_time;
  public UniqueId $export_id;
  public Timestamp $inclusive_start_time;
  public LedgerName $ledger_name;
  public Arn $role_arn;
  public S3ExportConfiguration $s_3_export_configuration;
  public ExportStatus $status;

  public function __construct(shape(
  ?'exclusive_end_time' => Timestamp,
  ?'export_creation_time' => Timestamp,
  ?'export_id' => UniqueId,
  ?'inclusive_start_time' => Timestamp,
  ?'ledger_name' => LedgerName,
  ?'role_arn' => Arn,
  ?'s_3_export_configuration' => S3ExportConfiguration,
  ?'status' => ExportStatus,
  ) $s = shape()) {
    $this->exclusive_end_time = $exclusive_end_time ?? 0;
    $this->export_creation_time = $export_creation_time ?? 0;
    $this->export_id = $export_id ?? "";
    $this->inclusive_start_time = $inclusive_start_time ?? 0;
    $this->ledger_name = $ledger_name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->s_3_export_configuration = $s_3_export_configuration ?? null;
    $this->status = $status ?? "";
  }
}

type JournalS3ExportList = vec<JournalS3ExportDescription>;

type LedgerList = vec<LedgerSummary>;

type LedgerName = string;

type LedgerState = string;

class LedgerSummary {
  public Timestamp $creation_date_time;
  public LedgerName $name;
  public LedgerState $state;

  public function __construct(shape(
  ?'creation_date_time' => Timestamp,
  ?'name' => LedgerName,
  ?'state' => LedgerState,
  ) $s = shape()) {
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->name = $name ?? "";
    $this->state = $state ?? "";
  }
}

class LimitExceededException {
  public ErrorMessage $message;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class ListJournalS3ExportsForLedgerRequest {
  public MaxResults $max_results;
  public LedgerName $name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name' => LedgerName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListJournalS3ExportsForLedgerResponse {
  public JournalS3ExportList $journal_s_3_exports;
  public NextToken $next_token;

  public function __construct(shape(
  ?'journal_s_3_exports' => JournalS3ExportList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->journal_s_3_exports = $journal_s_3_exports ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListJournalS3ExportsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListJournalS3ExportsResponse {
  public JournalS3ExportList $journal_s_3_exports;
  public NextToken $next_token;

  public function __construct(shape(
  ?'journal_s_3_exports' => JournalS3ExportList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->journal_s_3_exports = $journal_s_3_exports ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListLedgersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListLedgersResponse {
  public LedgerList $ledgers;
  public NextToken $next_token;

  public function __construct(shape(
  ?'ledgers' => LedgerList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->ledgers = $ledgers ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type MaxResults = int;

type NextToken = string;

type ParameterName = string;

type PermissionsMode = string;

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
  public ResourceName $resource_name;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class ResourceInUseException {
  public ErrorMessage $message;
  public ResourceName $resource_name;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceName = string;

class ResourceNotFoundException {
  public ErrorMessage $message;
  public ResourceName $resource_name;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class ResourcePreconditionNotMetException {
  public ErrorMessage $message;
  public ResourceName $resource_name;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_name' => ResourceName,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceType = string;

type S3Bucket = string;

class S3EncryptionConfiguration {
  public Arn $kms_key_arn;
  public S3ObjectEncryptionType $object_encryption_type;

  public function __construct(shape(
  ?'kms_key_arn' => Arn,
  ?'object_encryption_type' => S3ObjectEncryptionType,
  ) $s = shape()) {
    $this->kms_key_arn = $kms_key_arn ?? "";
    $this->object_encryption_type = $object_encryption_type ?? "";
  }
}

class S3ExportConfiguration {
  public S3Bucket $bucket;
  public S3EncryptionConfiguration $encryption_configuration;
  public S3Prefix $prefix;

  public function __construct(shape(
  ?'bucket' => S3Bucket,
  ?'encryption_configuration' => S3EncryptionConfiguration,
  ?'prefix' => S3Prefix,
  ) $s = shape()) {
    $this->bucket = $bucket ?? "";
    $this->encryption_configuration = $encryption_configuration ?? null;
    $this->prefix = $prefix ?? "";
  }
}

type S3ObjectEncryptionType = string;

type S3Prefix = string;

type TagKey = string;

type TagKeyList = vec<TagKey>;

class TagResourceRequest {
  public Arn $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

type Timestamp = int;

type UniqueId = string;

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateLedgerRequest {
  public DeletionProtection $deletion_protection;
  public LedgerName $name;

  public function __construct(shape(
  ?'deletion_protection' => DeletionProtection,
  ?'name' => LedgerName,
  ) $s = shape()) {
    $this->deletion_protection = $deletion_protection ?? false;
    $this->name = $name ?? "";
  }
}

class UpdateLedgerResponse {
  public Arn $arn;
  public Timestamp $creation_date_time;
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
  public LedgerState $state;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'creation_date_time' => Timestamp,
  ?'deletion_protection' => DeletionProtection,
  ?'name' => LedgerName,
  ?'state' => LedgerState,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_date_time = $creation_date_time ?? 0;
    $this->deletion_protection = $deletion_protection ?? false;
    $this->name = $name ?? "";
    $this->state = $state ?? "";
  }
}

class ValueHolder {
  public IonText $ion_text;

  public function __construct(shape(
  ?'ion_text' => IonText,
  ) $s = shape()) {
    $this->ion_text = $ion_text ?? "";
  }
}

