<?hh // strict
namespace slack\aws\qldb;

interface QLDB {
  public function CreateLedger(CreateLedgerRequest) Awaitable<Errors\Result<CreateLedgerResponse>>;
  public function DeleteLedger(DeleteLedgerRequest) Awaitable<Errors\Error>;
  public function DescribeJournalS3Export(DescribeJournalS3ExportRequest) Awaitable<Errors\Result<DescribeJournalS3ExportResponse>>;
  public function DescribeLedger(DescribeLedgerRequest) Awaitable<Errors\Result<DescribeLedgerResponse>>;
  public function ExportJournalToS3(ExportJournalToS3Request) Awaitable<Errors\Result<ExportJournalToS3Response>>;
  public function GetBlock(GetBlockRequest) Awaitable<Errors\Result<GetBlockResponse>>;
  public function GetDigest(GetDigestRequest) Awaitable<Errors\Result<GetDigestResponse>>;
  public function GetRevision(GetRevisionRequest) Awaitable<Errors\Result<GetRevisionResponse>>;
  public function ListJournalS3Exports(ListJournalS3ExportsRequest) Awaitable<Errors\Result<ListJournalS3ExportsResponse>>;
  public function ListJournalS3ExportsForLedger(ListJournalS3ExportsForLedgerRequest) Awaitable<Errors\Result<ListJournalS3ExportsForLedgerResponse>>;
  public function ListLedgers(ListLedgersRequest) Awaitable<Errors\Result<ListLedgersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateLedger(UpdateLedgerRequest) Awaitable<Errors\Result<UpdateLedgerResponse>>;
}

class Arn {
}

class CreateLedgerRequest {
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
  public PermissionsMode $permissions_mode;
  public Tags $tags;
}

class CreateLedgerResponse {
  public Arn $arn;
  public Timestamp $creation_date_time;
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
  public LedgerState $state;
}

class DeleteLedgerRequest {
  public LedgerName $name;
}

class DeletionProtection {
}

class DescribeJournalS3ExportRequest {
  public UniqueId $export_id;
  public LedgerName $name;
}

class DescribeJournalS3ExportResponse {
  public JournalS3ExportDescription $export_description;
}

class DescribeLedgerRequest {
  public LedgerName $name;
}

class DescribeLedgerResponse {
  public Arn $arn;
  public Timestamp $creation_date_time;
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
  public LedgerState $state;
}

class Digest {
}

class ErrorMessage {
}

class ExportJournalToS3Request {
  public Timestamp $exclusive_end_time;
  public Timestamp $inclusive_start_time;
  public LedgerName $name;
  public Arn $role_arn;
  public S3ExportConfiguration $s_3_export_configuration;
}

class ExportJournalToS3Response {
  public UniqueId $export_id;
}

class ExportStatus {
}

class GetBlockRequest {
  public ValueHolder $block_address;
  public ValueHolder $digest_tip_address;
  public LedgerName $name;
}

class GetBlockResponse {
  public ValueHolder $block;
  public ValueHolder $proof;
}

class GetDigestRequest {
  public LedgerName $name;
}

class GetDigestResponse {
  public Digest $digest;
  public ValueHolder $digest_tip_address;
}

class GetRevisionRequest {
  public ValueHolder $block_address;
  public ValueHolder $digest_tip_address;
  public UniqueId $document_id;
  public LedgerName $name;
}

class GetRevisionResponse {
  public ValueHolder $proof;
  public ValueHolder $revision;
}

class InvalidParameterException {
  public ErrorMessage $message;
  public ParameterName $parameter_name;
}

class IonText {
}

class JournalS3ExportDescription {
  public Timestamp $exclusive_end_time;
  public Timestamp $export_creation_time;
  public UniqueId $export_id;
  public Timestamp $inclusive_start_time;
  public LedgerName $ledger_name;
  public Arn $role_arn;
  public S3ExportConfiguration $s_3_export_configuration;
  public ExportStatus $status;
}

class JournalS3ExportList {
}

class LedgerList {
}

class LedgerName {
}

class LedgerState {
}

class LedgerSummary {
  public Timestamp $creation_date_time;
  public LedgerName $name;
  public LedgerState $state;
}

class LimitExceededException {
  public ErrorMessage $message;
  public ResourceType $resource_type;
}

class ListJournalS3ExportsForLedgerRequest {
  public MaxResults $max_results;
  public LedgerName $name;
  public NextToken $next_token;
}

class ListJournalS3ExportsForLedgerResponse {
  public JournalS3ExportList $journal_s_3_exports;
  public NextToken $next_token;
}

class ListJournalS3ExportsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListJournalS3ExportsResponse {
  public JournalS3ExportList $journal_s_3_exports;
  public NextToken $next_token;
}

class ListLedgersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListLedgersResponse {
  public LedgerList $ledgers;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class MaxResults {
}

class NextToken {
}

class ParameterName {
}

class PermissionsMode {
}

class ResourceAlreadyExistsException {
  public ErrorMessage $message;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
}

class ResourceInUseException {
  public ErrorMessage $message;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
}

class ResourceName {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
}

class ResourcePreconditionNotMetException {
  public ErrorMessage $message;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
}

class ResourceType {
}

class S3Bucket {
}

class S3EncryptionConfiguration {
  public Arn $kms_key_arn;
  public S3ObjectEncryptionType $object_encryption_type;
}

class S3ExportConfiguration {
  public S3Bucket $bucket;
  public S3EncryptionConfiguration $encryption_configuration;
  public S3Prefix $prefix;
}

class S3ObjectEncryptionType {
}

class S3Prefix {
}

class TagKey {
}

class TagKeyList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public Tags $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Tags {
}

class Timestamp {
}

class UniqueId {
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateLedgerRequest {
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
}

class UpdateLedgerResponse {
  public Arn $arn;
  public Timestamp $creation_date_time;
  public DeletionProtection $deletion_protection;
  public LedgerName $name;
  public LedgerState $state;
}

class ValueHolder {
  public IonText $ion_text;
}

