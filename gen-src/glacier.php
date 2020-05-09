<?hh // strict
namespace slack\aws\glacier;

interface Glacier {
  public function AddTagsToVault(AddTagsToVaultInput) Awaitable<Errors\Error>;
  public function CreateVault(CreateVaultInput) Awaitable<Errors\Result<CreateVaultOutput>>;
  public function DeleteArchive(DeleteArchiveInput) Awaitable<Errors\Error>;
  public function ListParts(ListPartsInput) Awaitable<Errors\Result<ListPartsOutput>>;
  public function UploadMultipartPart(UploadMultipartPartInput) Awaitable<Errors\Result<UploadMultipartPartOutput>>;
  public function AbortMultipartUpload(AbortMultipartUploadInput) Awaitable<Errors\Error>;
  public function DescribeVault(DescribeVaultInput) Awaitable<Errors\Result<DescribeVaultOutput>>;
  public function GetDataRetrievalPolicy(GetDataRetrievalPolicyInput) Awaitable<Errors\Result<GetDataRetrievalPolicyOutput>>;
  public function PurchaseProvisionedCapacity(PurchaseProvisionedCapacityInput) Awaitable<Errors\Result<PurchaseProvisionedCapacityOutput>>;
  public function DeleteVaultAccessPolicy(DeleteVaultAccessPolicyInput) Awaitable<Errors\Error>;
  public function DeleteVaultNotifications(DeleteVaultNotificationsInput) Awaitable<Errors\Error>;
  public function ListJobs(ListJobsInput) Awaitable<Errors\Result<ListJobsOutput>>;
  public function RemoveTagsFromVault(RemoveTagsFromVaultInput) Awaitable<Errors\Error>;
  public function SetDataRetrievalPolicy(SetDataRetrievalPolicyInput) Awaitable<Errors\Error>;
  public function CompleteVaultLock(CompleteVaultLockInput) Awaitable<Errors\Error>;
  public function GetJobOutput(GetJobOutputInput) Awaitable<Errors\Result<GetJobOutputOutput>>;
  public function InitiateMultipartUpload(InitiateMultipartUploadInput) Awaitable<Errors\Result<InitiateMultipartUploadOutput>>;
  public function ListProvisionedCapacity(ListProvisionedCapacityInput) Awaitable<Errors\Result<ListProvisionedCapacityOutput>>;
  public function DeleteVault(DeleteVaultInput) Awaitable<Errors\Error>;
  public function ListTagsForVault(ListTagsForVaultInput) Awaitable<Errors\Result<ListTagsForVaultOutput>>;
  public function SetVaultNotifications(SetVaultNotificationsInput) Awaitable<Errors\Error>;
  public function DescribeJob(DescribeJobInput) Awaitable<Errors\Result<GlacierJobDescription>>;
  public function GetVaultAccessPolicy(GetVaultAccessPolicyInput) Awaitable<Errors\Result<GetVaultAccessPolicyOutput>>;
  public function InitiateJob(InitiateJobInput) Awaitable<Errors\Result<InitiateJobOutput>>;
  public function SetVaultAccessPolicy(SetVaultAccessPolicyInput) Awaitable<Errors\Error>;
  public function UploadArchive(UploadArchiveInput) Awaitable<Errors\Result<ArchiveCreationOutput>>;
  public function ListVaults(ListVaultsInput) Awaitable<Errors\Result<ListVaultsOutput>>;
  public function AbortVaultLock(AbortVaultLockInput) Awaitable<Errors\Error>;
  public function CompleteMultipartUpload(CompleteMultipartUploadInput) Awaitable<Errors\Result<ArchiveCreationOutput>>;
  public function GetVaultLock(GetVaultLockInput) Awaitable<Errors\Result<GetVaultLockOutput>>;
  public function InitiateVaultLock(InitiateVaultLockInput) Awaitable<Errors\Result<InitiateVaultLockOutput>>;
  public function ListMultipartUploads(ListMultipartUploadsInput) Awaitable<Errors\Result<ListMultipartUploadsOutput>>;
  public function GetVaultNotifications(GetVaultNotificationsInput) Awaitable<Errors\Result<GetVaultNotificationsOutput>>;
}

class GetDataRetrievalPolicyOutput {
  public DataRetrievalPolicy $policy;
}

class JobList {
}

class TagKeyList {
}

class UploadMultipartPartInput {
  public string $vault_name;
  public string $upload_id;
  public string $checksum;
  public string $range;
  public Stream $body;
  public string $account_id;
}

class AbortMultipartUploadInput {
  public string $upload_id;
  public string $account_id;
  public string $vault_name;
}

class ListProvisionedCapacityOutput {
  public ProvisionedCapacityList $provisioned_capacity_list;
}

class PurchaseProvisionedCapacityInput {
  public string $account_id;
}

class TagKey {
}

class DataRetrievalRule {
  public NullableLong $bytes_per_hour;
  public string $strategy;
}

class DateTime {
}

class ListMultipartUploadsOutput {
  public UploadsList $uploads_list;
  public string $marker;
}

class GlacierJobDescription {
  public StatusCode $status_code;
  public string $status_message;
  public Size $inventory_size_in_bytes;
  public string $sns_topic;
  public string $tier;
  public string $job_id;
  public string $vault_arn;
  public string $creation_date;
  public InventoryRetrievalJobDescription $inventory_retrieval_parameters;
  public OutputLocation $output_location;
  public string $archive_sha_256_tree_hash;
  public SelectParameters $select_parameters;
  public string $sha_256_tree_hash;
  public string $job_description;
  public string $archive_id;
  public string $completion_date;
  public string $retrieval_byte_range;
  public string $job_output_path;
  public ActionCode $action;
  public boolean $completed;
  public Size $archive_size_in_bytes;
}

class InitiateMultipartUploadOutput {
  public string $location;
  public string $upload_id;
}

class JobParameters {
  public string $sns_topic;
  public InventoryRetrievalJobInput $inventory_retrieval_parameters;
  public string $format;
  public string $archive_id;
  public string $description;
  public string $retrieval_byte_range;
  public string $tier;
  public SelectParameters $select_parameters;
  public OutputLocation $output_location;
  public string $type;
}

class NullableLong {
}

class RequestTimeoutException {
  public string $type;
  public string $code;
  public string $message;
}

class AbortVaultLockInput {
  public string $account_id;
  public string $vault_name;
}

class CompleteMultipartUploadInput {
  public string $upload_id;
  public string $archive_size;
  public string $checksum;
  public string $account_id;
  public string $vault_name;
}

class ExpressionType {
}

class VaultLockPolicy {
  public string $policy;
}

class UploadArchiveInput {
  public Stream $body;
  public string $vault_name;
  public string $account_id;
  public string $archive_description;
  public string $checksum;
}

class InventoryRetrievalJobInput {
  public string $start_date;
  public string $end_date;
  public string $limit;
  public string $marker;
}

class ListVaultsOutput {
  public VaultList $vault_list;
  public string $marker;
}

class PartListElement {
  public string $sha_256_tree_hash;
  public string $range_in_bytes;
}

class ArchiveCreationOutput {
  public string $location;
  public string $checksum;
  public string $archive_id;
}

class ListPartsOutput {
  public string $marker;
  public string $multipart_upload_id;
  public string $vault_arn;
  public string $archive_description;
  public long $part_size_in_bytes;
  public string $creation_date;
  public PartList $parts;
}

class ActionCode {
}

class GetDataRetrievalPolicyInput {
  public string $account_id;
}

class ServiceUnavailableException {
  public string $type;
  public string $code;
  public string $message;
}

class Size {
}

class DescribeJobInput {
  public string $account_id;
  public string $vault_name;
  public string $job_id;
}

class ListMultipartUploadsInput {
  public string $limit;
  public string $account_id;
  public string $vault_name;
  public string $marker;
}

class ListProvisionedCapacityInput {
  public string $account_id;
}

class InitiateJobInput {
  public JobParameters $job_parameters;
  public string $account_id;
  public string $vault_name;
}

class DataRetrievalPolicy {
  public DataRetrievalRulesList $rules;
}

class long {
}

class ListJobsInput {
  public string $statuscode;
  public string $completed;
  public string $account_id;
  public string $vault_name;
  public string $limit;
  public string $marker;
}

class CompleteVaultLockInput {
  public string $lock_id;
  public string $account_id;
  public string $vault_name;
}

class DeleteVaultInput {
  public string $vault_name;
  public string $account_id;
}

class Encryption {
  public EncryptionType $encryption_type;
  public string $kms_key_id;
  public string $kms_context;
}

class ListTagsForVaultInput {
  public string $account_id;
  public string $vault_name;
}

class SelectParameters {
  public ExpressionType $expression_type;
  public string $expression;
  public OutputSerialization $output_serialization;
  public InputSerialization $input_serialization;
}

class UploadListElement {
  public string $creation_date;
  public string $multipart_upload_id;
  public string $vault_arn;
  public string $archive_description;
  public long $part_size_in_bytes;
}

class AddTagsToVaultInput {
  public string $account_id;
  public string $vault_name;
  public TagMap $tags;
}

class CSVOutput {
  public string $quote_character;
  public QuoteFields $quote_fields;
  public string $quote_escape_character;
  public string $record_delimiter;
  public string $field_delimiter;
}

class InputSerialization {
  public CSVInput $csv;
}

class StorageClass {
}

class Stream {
}

class DataRetrievalRulesList {
}

class EncryptionType {
}

class SetVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;
  public VaultNotificationConfig $vault_notification_config;
}

class QuoteFields {
}

class RemoveTagsFromVaultInput {
  public string $account_id;
  public string $vault_name;
  public TagKeyList $tag_keys;
}

class InitiateJobOutput {
  public string $job_id;
  public string $job_output_path;
  public string $location;
}

class OutputLocation {
  public S3Location $s_3;
}

class OutputSerialization {
  public CSVOutput $csv;
}

class ResourceNotFoundException {
  public string $type;
  public string $code;
  public string $message;
}

class S3Location {
  public hashmap $tagging;
  public hashmap $user_metadata;
  public StorageClass $storage_class;
  public string $bucket_name;
  public string $prefix;
  public Encryption $encryption;
  public CannedACL $canned_acl;
  public AccessControlPolicyList $access_control_list;
}

class DeleteVaultAccessPolicyInput {
  public string $account_id;
  public string $vault_name;
}

class GetVaultLockInput {
  public string $account_id;
  public string $vault_name;
}

class ListVaultsInput {
  public string $account_id;
  public string $marker;
  public string $limit;
}

class SetVaultAccessPolicyInput {
  public string $account_id;
  public string $vault_name;
  public VaultAccessPolicy $policy;
}

class StatusCode {
}

class UploadsList {
}

class ListJobsOutput {
  public JobList $job_list;
  public string $marker;
}

class LimitExceededException {
  public string $type;
  public string $code;
  public string $message;
}

class CreateVaultOutput {
  public string $location;
}

class DescribeVaultOutput {
  public long $number_of_archives;
  public long $size_in_bytes;
  public string $vault_arn;
  public string $vault_name;
  public string $creation_date;
  public string $last_inventory_date;
}

class hashmap {
}

class DescribeVaultInput {
  public string $account_id;
  public string $vault_name;
}

class GetVaultAccessPolicyOutput {
  public VaultAccessPolicy $policy;
}

class PartList {
}

class Type {
}

class string {
}

class CannedACL {
}

class DeleteVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;
}

class PolicyEnforcedException {
  public string $type;
  public string $code;
  public string $message;
}

class ListTagsForVaultOutput {
  public TagMap $tags;
}

class VaultNotificationConfig {
  public string $sns_topic;
  public NotificationEventList $events;
}

class ProvisionedCapacityDescription {
  public string $capacity_id;
  public string $start_date;
  public string $expiration_date;
}

class PurchaseProvisionedCapacityOutput {
  public string $capacity_id;
}

class GetVaultAccessPolicyInput {
  public string $account_id;
  public string $vault_name;
}

class GetVaultNotificationsOutput {
  public VaultNotificationConfig $vault_notification_config;
}

class InsufficientCapacityException {
  public string $type;
  public string $code;
  public string $message;
}

class CSVInput {
  public string $field_delimiter;
  public string $quote_character;
  public FileHeaderInfo $file_header_info;
  public string $comments;
  public string $quote_escape_character;
  public string $record_delimiter;
}

class GetVaultLockOutput {
  public string $state;
  public string $expiration_date;
  public string $creation_date;
  public string $policy;
}

class VaultAccessPolicy {
  public string $policy;
}

class VaultList {
}

class Grant {
  public Grantee $grantee;
  public Permission $permission;
}

class Permission {
}

class UploadMultipartPartOutput {
  public string $checksum;
}

class AccessControlPolicyList {
}

class InitiateVaultLockInput {
  public string $account_id;
  public string $vault_name;
  public VaultLockPolicy $policy;
}

class httpstatus {
}

class InvalidParameterValueException {
  public string $message;
  public string $type;
  public string $code;
}

class FileHeaderInfo {
}

class InitiateMultipartUploadInput {
  public string $archive_description;
  public string $part_size;
  public string $account_id;
  public string $vault_name;
}

class InitiateVaultLockOutput {
  public string $lock_id;
}

class InventoryRetrievalJobDescription {
  public DateTime $start_date;
  public DateTime $end_date;
  public string $limit;
  public string $marker;
  public string $format;
}

class CreateVaultInput {
  public string $vault_name;
  public string $account_id;
}

class GetJobOutputInput {
  public string $account_id;
  public string $vault_name;
  public string $job_id;
  public string $range;
}

class Grantee {
  public string $id;
  public string $email_address;
  public Type $type;
  public string $display_name;
  public string $uri;
}

class TagValue {
}

class GetJobOutputOutput {
  public Stream $body;
  public string $checksum;
  public httpstatus $status;
  public string $content_range;
  public string $accept_ranges;
  public string $content_type;
  public string $archive_description;
}

class GetVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;
}

class TagMap {
}

class MissingParameterValueException {
  public string $type;
  public string $code;
  public string $message;
}

class SetDataRetrievalPolicyInput {
  public string $account_id;
  public DataRetrievalPolicy $policy;
}

class boolean {
}

class NotificationEventList {
}

class ProvisionedCapacityList {
}

class DeleteArchiveInput {
  public string $vault_name;
  public string $archive_id;
  public string $account_id;
}

class ListPartsInput {
  public string $upload_id;
  public string $marker;
  public string $limit;
  public string $account_id;
  public string $vault_name;
}

