<?hh // strict
namespace slack\aws\glacier;

interface Glacier {
  public function AbortMultipartUpload(AbortMultipartUploadInput): Awaitable<Errors\Error>;
  public function AbortVaultLock(AbortVaultLockInput): Awaitable<Errors\Error>;
  public function AddTagsToVault(AddTagsToVaultInput): Awaitable<Errors\Error>;
  public function CompleteMultipartUpload(CompleteMultipartUploadInput): Awaitable<Errors\Result<ArchiveCreationOutput>>;
  public function CompleteVaultLock(CompleteVaultLockInput): Awaitable<Errors\Error>;
  public function CreateVault(CreateVaultInput): Awaitable<Errors\Result<CreateVaultOutput>>;
  public function DeleteArchive(DeleteArchiveInput): Awaitable<Errors\Error>;
  public function DeleteVault(DeleteVaultInput): Awaitable<Errors\Error>;
  public function DeleteVaultAccessPolicy(DeleteVaultAccessPolicyInput): Awaitable<Errors\Error>;
  public function DeleteVaultNotifications(DeleteVaultNotificationsInput): Awaitable<Errors\Error>;
  public function DescribeJob(DescribeJobInput): Awaitable<Errors\Result<GlacierJobDescription>>;
  public function DescribeVault(DescribeVaultInput): Awaitable<Errors\Result<DescribeVaultOutput>>;
  public function GetDataRetrievalPolicy(GetDataRetrievalPolicyInput): Awaitable<Errors\Result<GetDataRetrievalPolicyOutput>>;
  public function GetJobOutput(GetJobOutputInput): Awaitable<Errors\Result<GetJobOutputOutput>>;
  public function GetVaultAccessPolicy(GetVaultAccessPolicyInput): Awaitable<Errors\Result<GetVaultAccessPolicyOutput>>;
  public function GetVaultLock(GetVaultLockInput): Awaitable<Errors\Result<GetVaultLockOutput>>;
  public function GetVaultNotifications(GetVaultNotificationsInput): Awaitable<Errors\Result<GetVaultNotificationsOutput>>;
  public function InitiateJob(InitiateJobInput): Awaitable<Errors\Result<InitiateJobOutput>>;
  public function InitiateMultipartUpload(InitiateMultipartUploadInput): Awaitable<Errors\Result<InitiateMultipartUploadOutput>>;
  public function InitiateVaultLock(InitiateVaultLockInput): Awaitable<Errors\Result<InitiateVaultLockOutput>>;
  public function ListJobs(ListJobsInput): Awaitable<Errors\Result<ListJobsOutput>>;
  public function ListMultipartUploads(ListMultipartUploadsInput): Awaitable<Errors\Result<ListMultipartUploadsOutput>>;
  public function ListParts(ListPartsInput): Awaitable<Errors\Result<ListPartsOutput>>;
  public function ListProvisionedCapacity(ListProvisionedCapacityInput): Awaitable<Errors\Result<ListProvisionedCapacityOutput>>;
  public function ListTagsForVault(ListTagsForVaultInput): Awaitable<Errors\Result<ListTagsForVaultOutput>>;
  public function ListVaults(ListVaultsInput): Awaitable<Errors\Result<ListVaultsOutput>>;
  public function PurchaseProvisionedCapacity(PurchaseProvisionedCapacityInput): Awaitable<Errors\Result<PurchaseProvisionedCapacityOutput>>;
  public function RemoveTagsFromVault(RemoveTagsFromVaultInput): Awaitable<Errors\Error>;
  public function SetDataRetrievalPolicy(SetDataRetrievalPolicyInput): Awaitable<Errors\Error>;
  public function SetVaultAccessPolicy(SetVaultAccessPolicyInput): Awaitable<Errors\Error>;
  public function SetVaultNotifications(SetVaultNotificationsInput): Awaitable<Errors\Error>;
  public function UploadArchive(UploadArchiveInput): Awaitable<Errors\Result<ArchiveCreationOutput>>;
  public function UploadMultipartPart(UploadMultipartPartInput): Awaitable<Errors\Result<UploadMultipartPartOutput>>;
}

class AbortMultipartUploadInput {
  public string $account_id;
  public string $upload_id;
  public string $vault_name;
}

class AbortVaultLockInput {
  public string $account_id;
  public string $vault_name;
}

class AccessControlPolicyList {
}

class ActionCode {
}

class AddTagsToVaultInput {
  public TagMap $tags;
  public string $account_id;
  public string $vault_name;
}

class ArchiveCreationOutput {
  public string $archive_id;
  public string $checksum;
  public string $location;
}

class CSVInput {
  public string $comments;
  public string $field_delimiter;
  public FileHeaderInfo $file_header_info;
  public string $quote_character;
  public string $quote_escape_character;
  public string $record_delimiter;
}

class CSVOutput {
  public string $field_delimiter;
  public string $quote_character;
  public string $quote_escape_character;
  public QuoteFields $quote_fields;
  public string $record_delimiter;
}

class CannedACL {
}

class CompleteMultipartUploadInput {
  public string $account_id;
  public string $archive_size;
  public string $checksum;
  public string $upload_id;
  public string $vault_name;
}

class CompleteVaultLockInput {
  public string $account_id;
  public string $lock_id;
  public string $vault_name;
}

class CreateVaultInput {
  public string $account_id;
  public string $vault_name;
}

class CreateVaultOutput {
  public string $location;
}

class DataRetrievalPolicy {
  public DataRetrievalRulesList $rules;
}

class DataRetrievalRule {
  public NullableLong $bytes_per_hour;
  public string $strategy;
}

class DataRetrievalRulesList {
}

class DateTime {
}

class DeleteArchiveInput {
  public string $account_id;
  public string $archive_id;
  public string $vault_name;
}

class DeleteVaultAccessPolicyInput {
  public string $account_id;
  public string $vault_name;
}

class DeleteVaultInput {
  public string $account_id;
  public string $vault_name;
}

class DeleteVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;
}

class DescribeJobInput {
  public string $account_id;
  public string $job_id;
  public string $vault_name;
}

class DescribeVaultInput {
  public string $account_id;
  public string $vault_name;
}

class DescribeVaultOutput {
  public string $creation_date;
  public string $last_inventory_date;
  public long $number_of_archives;
  public long $size_in_bytes;
  public string $vault_arn;
  public string $vault_name;
}

class Encryption {
  public EncryptionType $encryption_type;
  public string $kms_context;
  public string $kms_key_id;
}

class EncryptionType {
}

class ExpressionType {
}

class FileHeaderInfo {
}

class GetDataRetrievalPolicyInput {
  public string $account_id;
}

class GetDataRetrievalPolicyOutput {
  public DataRetrievalPolicy $policy;
}

class GetJobOutputInput {
  public string $account_id;
  public string $job_id;
  public string $range;
  public string $vault_name;
}

class GetJobOutputOutput {
  public string $accept_ranges;
  public string $archive_description;
  public Stream $body;
  public string $checksum;
  public string $content_range;
  public string $content_type;
  public httpstatus $status;
}

class GetVaultAccessPolicyInput {
  public string $account_id;
  public string $vault_name;
}

class GetVaultAccessPolicyOutput {
  public VaultAccessPolicy $policy;
}

class GetVaultLockInput {
  public string $account_id;
  public string $vault_name;
}

class GetVaultLockOutput {
  public string $creation_date;
  public string $expiration_date;
  public string $policy;
  public string $state;
}

class GetVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;
}

class GetVaultNotificationsOutput {
  public VaultNotificationConfig $vault_notification_config;
}

class GlacierJobDescription {
  public ActionCode $action;
  public string $archive_id;
  public string $archive_sha_256_tree_hash;
  public Size $archive_size_in_bytes;
  public boolean $completed;
  public string $completion_date;
  public string $creation_date;
  public InventoryRetrievalJobDescription $inventory_retrieval_parameters;
  public Size $inventory_size_in_bytes;
  public string $job_description;
  public string $job_id;
  public string $job_output_path;
  public OutputLocation $output_location;
  public string $retrieval_byte_range;
  public string $sha_256_tree_hash;
  public string $sns_topic;
  public SelectParameters $select_parameters;
  public StatusCode $status_code;
  public string $status_message;
  public string $tier;
  public string $vault_arn;
}

class Grant {
  public Grantee $grantee;
  public Permission $permission;
}

class Grantee {
  public string $display_name;
  public string $email_address;
  public string $id;
  public Type $type;
  public string $uri;
}

class InitiateJobInput {
  public string $account_id;
  public JobParameters $job_parameters;
  public string $vault_name;
}

class InitiateJobOutput {
  public string $job_id;
  public string $job_output_path;
  public string $location;
}

class InitiateMultipartUploadInput {
  public string $account_id;
  public string $archive_description;
  public string $part_size;
  public string $vault_name;
}

class InitiateMultipartUploadOutput {
  public string $location;
  public string $upload_id;
}

class InitiateVaultLockInput {
  public string $account_id;
  public VaultLockPolicy $policy;
  public string $vault_name;
}

class InitiateVaultLockOutput {
  public string $lock_id;
}

class InputSerialization {
  public CSVInput $csv;
}

class InsufficientCapacityException {
  public string $code;
  public string $message;
  public string $type;
}

class InvalidParameterValueException {
  public string $code;
  public string $message;
  public string $type;
}

class InventoryRetrievalJobDescription {
  public DateTime $end_date;
  public string $format;
  public string $limit;
  public string $marker;
  public DateTime $start_date;
}

class InventoryRetrievalJobInput {
  public string $end_date;
  public string $limit;
  public string $marker;
  public string $start_date;
}

class JobList {
}

class JobParameters {
  public string $archive_id;
  public string $description;
  public string $format;
  public InventoryRetrievalJobInput $inventory_retrieval_parameters;
  public OutputLocation $output_location;
  public string $retrieval_byte_range;
  public string $sns_topic;
  public SelectParameters $select_parameters;
  public string $tier;
  public string $type;
}

class LimitExceededException {
  public string $code;
  public string $message;
  public string $type;
}

class ListJobsInput {
  public string $account_id;
  public string $completed;
  public string $limit;
  public string $marker;
  public string $statuscode;
  public string $vault_name;
}

class ListJobsOutput {
  public JobList $job_list;
  public string $marker;
}

class ListMultipartUploadsInput {
  public string $account_id;
  public string $limit;
  public string $marker;
  public string $vault_name;
}

class ListMultipartUploadsOutput {
  public string $marker;
  public UploadsList $uploads_list;
}

class ListPartsInput {
  public string $account_id;
  public string $limit;
  public string $marker;
  public string $upload_id;
  public string $vault_name;
}

class ListPartsOutput {
  public string $archive_description;
  public string $creation_date;
  public string $marker;
  public string $multipart_upload_id;
  public long $part_size_in_bytes;
  public PartList $parts;
  public string $vault_arn;
}

class ListProvisionedCapacityInput {
  public string $account_id;
}

class ListProvisionedCapacityOutput {
  public ProvisionedCapacityList $provisioned_capacity_list;
}

class ListTagsForVaultInput {
  public string $account_id;
  public string $vault_name;
}

class ListTagsForVaultOutput {
  public TagMap $tags;
}

class ListVaultsInput {
  public string $account_id;
  public string $limit;
  public string $marker;
}

class ListVaultsOutput {
  public string $marker;
  public VaultList $vault_list;
}

class MissingParameterValueException {
  public string $code;
  public string $message;
  public string $type;
}

class NotificationEventList {
}

class NullableLong {
}

class OutputLocation {
  public S3Location $s_3;
}

class OutputSerialization {
  public CSVOutput $csv;
}

class PartList {
}

class PartListElement {
  public string $range_in_bytes;
  public string $sha_256_tree_hash;
}

class Permission {
}

class PolicyEnforcedException {
  public string $code;
  public string $message;
  public string $type;
}

class ProvisionedCapacityDescription {
  public string $capacity_id;
  public string $expiration_date;
  public string $start_date;
}

class ProvisionedCapacityList {
}

class PurchaseProvisionedCapacityInput {
  public string $account_id;
}

class PurchaseProvisionedCapacityOutput {
  public string $capacity_id;
}

class QuoteFields {
}

class RemoveTagsFromVaultInput {
  public TagKeyList $tag_keys;
  public string $account_id;
  public string $vault_name;
}

class RequestTimeoutException {
  public string $code;
  public string $message;
  public string $type;
}

class ResourceNotFoundException {
  public string $code;
  public string $message;
  public string $type;
}

class S3Location {
  public AccessControlPolicyList $access_control_list;
  public string $bucket_name;
  public CannedACL $canned_acl;
  public Encryption $encryption;
  public string $prefix;
  public StorageClass $storage_class;
  public hashmap $tagging;
  public hashmap $user_metadata;
}

class SelectParameters {
  public string $expression;
  public ExpressionType $expression_type;
  public InputSerialization $input_serialization;
  public OutputSerialization $output_serialization;
}

class ServiceUnavailableException {
  public string $code;
  public string $message;
  public string $type;
}

class SetDataRetrievalPolicyInput {
  public DataRetrievalPolicy $policy;
  public string $account_id;
}

class SetVaultAccessPolicyInput {
  public string $account_id;
  public VaultAccessPolicy $policy;
  public string $vault_name;
}

class SetVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;
  public VaultNotificationConfig $vault_notification_config;
}

class Size {
}

class StatusCode {
}

class StorageClass {
}

class Stream {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagValue {
}

class Type {
}

class UploadArchiveInput {
  public string $account_id;
  public string $archive_description;
  public Stream $body;
  public string $checksum;
  public string $vault_name;
}

class UploadListElement {
  public string $archive_description;
  public string $creation_date;
  public string $multipart_upload_id;
  public long $part_size_in_bytes;
  public string $vault_arn;
}

class UploadMultipartPartInput {
  public string $account_id;
  public Stream $body;
  public string $checksum;
  public string $range;
  public string $upload_id;
  public string $vault_name;
}

class UploadMultipartPartOutput {
  public string $checksum;
}

class UploadsList {
}

class VaultAccessPolicy {
  public string $policy;
}

class VaultList {
}

class VaultLockPolicy {
  public string $policy;
}

class VaultNotificationConfig {
  public NotificationEventList $events;
  public string $sns_topic;
}

class boolean {
}

class hashmap {
}

class httpstatus {
}

class long {
}

class string {
}

