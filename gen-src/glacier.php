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

  public function __construct(shape(
  ?'account_id' => string,
  ?'upload_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->upload_id = $upload_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class AbortVaultLockInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

type AccessControlPolicyList = vec<Grant>;

type ActionCode = string;

class AddTagsToVaultInput {
  public TagMap $tags;
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'tags' => TagMap,
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class ArchiveCreationOutput {
  public string $archive_id;
  public string $checksum;
  public string $location;

  public function __construct(shape(
  ?'archive_id' => string,
  ?'checksum' => string,
  ?'location' => string,
  ) $s = shape()) {
    $this->archive_id = $archive_id ?? ;
    $this->checksum = $checksum ?? ;
    $this->location = $location ?? ;
  }
}

class CSVInput {
  public string $comments;
  public string $field_delimiter;
  public FileHeaderInfo $file_header_info;
  public string $quote_character;
  public string $quote_escape_character;
  public string $record_delimiter;

  public function __construct(shape(
  ?'comments' => string,
  ?'field_delimiter' => string,
  ?'file_header_info' => FileHeaderInfo,
  ?'quote_character' => string,
  ?'quote_escape_character' => string,
  ?'record_delimiter' => string,
  ) $s = shape()) {
    $this->comments = $comments ?? ;
    $this->field_delimiter = $field_delimiter ?? ;
    $this->file_header_info = $file_header_info ?? "";
    $this->quote_character = $quote_character ?? ;
    $this->quote_escape_character = $quote_escape_character ?? ;
    $this->record_delimiter = $record_delimiter ?? ;
  }
}

class CSVOutput {
  public string $field_delimiter;
  public string $quote_character;
  public string $quote_escape_character;
  public QuoteFields $quote_fields;
  public string $record_delimiter;

  public function __construct(shape(
  ?'field_delimiter' => string,
  ?'quote_character' => string,
  ?'quote_escape_character' => string,
  ?'quote_fields' => QuoteFields,
  ?'record_delimiter' => string,
  ) $s = shape()) {
    $this->field_delimiter = $field_delimiter ?? ;
    $this->quote_character = $quote_character ?? ;
    $this->quote_escape_character = $quote_escape_character ?? ;
    $this->quote_fields = $quote_fields ?? "";
    $this->record_delimiter = $record_delimiter ?? ;
  }
}

type CannedACL = string;

class CompleteMultipartUploadInput {
  public string $account_id;
  public string $archive_size;
  public string $checksum;
  public string $upload_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'archive_size' => string,
  ?'checksum' => string,
  ?'upload_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->archive_size = $archive_size ?? ;
    $this->checksum = $checksum ?? ;
    $this->upload_id = $upload_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class CompleteVaultLockInput {
  public string $account_id;
  public string $lock_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'lock_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->lock_id = $lock_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class CreateVaultInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class CreateVaultOutput {
  public string $location;

  public function __construct(shape(
  ?'location' => string,
  ) $s = shape()) {
    $this->location = $location ?? ;
  }
}

class DataRetrievalPolicy {
  public DataRetrievalRulesList $rules;

  public function __construct(shape(
  ?'rules' => DataRetrievalRulesList,
  ) $s = shape()) {
    $this->rules = $rules ?? ;
  }
}

class DataRetrievalRule {
  public NullableLong $bytes_per_hour;
  public string $strategy;

  public function __construct(shape(
  ?'bytes_per_hour' => NullableLong,
  ?'strategy' => string,
  ) $s = shape()) {
    $this->bytes_per_hour = $bytes_per_hour ?? ;
    $this->strategy = $strategy ?? ;
  }
}

type DataRetrievalRulesList = vec<DataRetrievalRule>;

type DateTime = string;

class DeleteArchiveInput {
  public string $account_id;
  public string $archive_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'archive_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->archive_id = $archive_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class DeleteVaultAccessPolicyInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class DeleteVaultInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class DeleteVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class DescribeJobInput {
  public string $account_id;
  public string $job_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'job_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->job_id = $job_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class DescribeVaultInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class DescribeVaultOutput {
  public string $creation_date;
  public string $last_inventory_date;
  public long $number_of_archives;
  public long $size_in_bytes;
  public string $vault_arn;
  public string $vault_name;

  public function __construct(shape(
  ?'creation_date' => string,
  ?'last_inventory_date' => string,
  ?'number_of_archives' => long,
  ?'size_in_bytes' => long,
  ?'vault_arn' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->last_inventory_date = $last_inventory_date ?? ;
    $this->number_of_archives = $number_of_archives ?? ;
    $this->size_in_bytes = $size_in_bytes ?? ;
    $this->vault_arn = $vault_arn ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class Encryption {
  public EncryptionType $encryption_type;
  public string $kms_context;
  public string $kms_key_id;

  public function __construct(shape(
  ?'encryption_type' => EncryptionType,
  ?'kms_context' => string,
  ?'kms_key_id' => string,
  ) $s = shape()) {
    $this->encryption_type = $encryption_type ?? "";
    $this->kms_context = $kms_context ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
  }
}

type EncryptionType = string;

type ExpressionType = string;

type FileHeaderInfo = string;

class GetDataRetrievalPolicyInput {
  public string $account_id;

  public function __construct(shape(
  ?'account_id' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
  }
}

class GetDataRetrievalPolicyOutput {
  public DataRetrievalPolicy $policy;

  public function __construct(shape(
  ?'policy' => DataRetrievalPolicy,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
  }
}

class GetJobOutputInput {
  public string $account_id;
  public string $job_id;
  public string $range;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'job_id' => string,
  ?'range' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->job_id = $job_id ?? ;
    $this->range = $range ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class GetJobOutputOutput {
  public string $accept_ranges;
  public string $archive_description;
  public Stream $body;
  public string $checksum;
  public string $content_range;
  public string $content_type;
  public httpstatus $status;

  public function __construct(shape(
  ?'accept_ranges' => string,
  ?'archive_description' => string,
  ?'body' => Stream,
  ?'checksum' => string,
  ?'content_range' => string,
  ?'content_type' => string,
  ?'status' => httpstatus,
  ) $s = shape()) {
    $this->accept_ranges = $accept_ranges ?? ;
    $this->archive_description = $archive_description ?? ;
    $this->body = $body ?? ;
    $this->checksum = $checksum ?? ;
    $this->content_range = $content_range ?? ;
    $this->content_type = $content_type ?? ;
    $this->status = $status ?? ;
  }
}

class GetVaultAccessPolicyInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class GetVaultAccessPolicyOutput {
  public VaultAccessPolicy $policy;

  public function __construct(shape(
  ?'policy' => VaultAccessPolicy,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
  }
}

class GetVaultLockInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class GetVaultLockOutput {
  public string $creation_date;
  public string $expiration_date;
  public string $policy;
  public string $state;

  public function __construct(shape(
  ?'creation_date' => string,
  ?'expiration_date' => string,
  ?'policy' => string,
  ?'state' => string,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->expiration_date = $expiration_date ?? ;
    $this->policy = $policy ?? ;
    $this->state = $state ?? ;
  }
}

class GetVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class GetVaultNotificationsOutput {
  public VaultNotificationConfig $vault_notification_config;

  public function __construct(shape(
  ?'vault_notification_config' => VaultNotificationConfig,
  ) $s = shape()) {
    $this->vault_notification_config = $vault_notification_config ?? ;
  }
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

  public function __construct(shape(
  ?'action' => ActionCode,
  ?'archive_id' => string,
  ?'archive_sha_256_tree_hash' => string,
  ?'archive_size_in_bytes' => Size,
  ?'completed' => boolean,
  ?'completion_date' => string,
  ?'creation_date' => string,
  ?'inventory_retrieval_parameters' => InventoryRetrievalJobDescription,
  ?'inventory_size_in_bytes' => Size,
  ?'job_description' => string,
  ?'job_id' => string,
  ?'job_output_path' => string,
  ?'output_location' => OutputLocation,
  ?'retrieval_byte_range' => string,
  ?'sha_256_tree_hash' => string,
  ?'sns_topic' => string,
  ?'select_parameters' => SelectParameters,
  ?'status_code' => StatusCode,
  ?'status_message' => string,
  ?'tier' => string,
  ?'vault_arn' => string,
  ) $s = shape()) {
    $this->action = $action ?? ;
    $this->archive_id = $archive_id ?? ;
    $this->archive_sha_256_tree_hash = $archive_sha_256_tree_hash ?? ;
    $this->archive_size_in_bytes = $archive_size_in_bytes ?? ;
    $this->completed = $completed ?? ;
    $this->completion_date = $completion_date ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->inventory_retrieval_parameters = $inventory_retrieval_parameters ?? ;
    $this->inventory_size_in_bytes = $inventory_size_in_bytes ?? ;
    $this->job_description = $job_description ?? ;
    $this->job_id = $job_id ?? ;
    $this->job_output_path = $job_output_path ?? ;
    $this->output_location = $output_location ?? null;
    $this->retrieval_byte_range = $retrieval_byte_range ?? ;
    $this->sha_256_tree_hash = $sha_256_tree_hash ?? ;
    $this->sns_topic = $sns_topic ?? ;
    $this->select_parameters = $select_parameters ?? null;
    $this->status_code = $status_code ?? "";
    $this->status_message = $status_message ?? ;
    $this->tier = $tier ?? ;
    $this->vault_arn = $vault_arn ?? ;
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

class Grantee {
  public string $display_name;
  public string $email_address;
  public string $id;
  public Type $type;
  public string $uri;

  public function __construct(shape(
  ?'display_name' => string,
  ?'email_address' => string,
  ?'id' => string,
  ?'type' => Type,
  ?'uri' => string,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->email_address = $email_address ?? ;
    $this->id = $id ?? ;
    $this->type = $type ?? "";
    $this->uri = $uri ?? ;
  }
}

class InitiateJobInput {
  public string $account_id;
  public JobParameters $job_parameters;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'job_parameters' => JobParameters,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->job_parameters = $job_parameters ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class InitiateJobOutput {
  public string $job_id;
  public string $job_output_path;
  public string $location;

  public function __construct(shape(
  ?'job_id' => string,
  ?'job_output_path' => string,
  ?'location' => string,
  ) $s = shape()) {
    $this->job_id = $job_id ?? ;
    $this->job_output_path = $job_output_path ?? ;
    $this->location = $location ?? ;
  }
}

class InitiateMultipartUploadInput {
  public string $account_id;
  public string $archive_description;
  public string $part_size;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'archive_description' => string,
  ?'part_size' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->archive_description = $archive_description ?? ;
    $this->part_size = $part_size ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class InitiateMultipartUploadOutput {
  public string $location;
  public string $upload_id;

  public function __construct(shape(
  ?'location' => string,
  ?'upload_id' => string,
  ) $s = shape()) {
    $this->location = $location ?? ;
    $this->upload_id = $upload_id ?? ;
  }
}

class InitiateVaultLockInput {
  public string $account_id;
  public VaultLockPolicy $policy;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'policy' => VaultLockPolicy,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->policy = $policy ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class InitiateVaultLockOutput {
  public string $lock_id;

  public function __construct(shape(
  ?'lock_id' => string,
  ) $s = shape()) {
    $this->lock_id = $lock_id ?? ;
  }
}

class InputSerialization {
  public CSVInput $csv;

  public function __construct(shape(
  ?'csv' => CSVInput,
  ) $s = shape()) {
    $this->csv = $csv ?? ;
  }
}

class InsufficientCapacityException {
  public string $code;
  public string $message;
  public string $type;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

class InvalidParameterValueException {
  public string $code;
  public string $message;
  public string $type;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

class InventoryRetrievalJobDescription {
  public DateTime $end_date;
  public string $format;
  public string $limit;
  public string $marker;
  public DateTime $start_date;

  public function __construct(shape(
  ?'end_date' => DateTime,
  ?'format' => string,
  ?'limit' => string,
  ?'marker' => string,
  ?'start_date' => DateTime,
  ) $s = shape()) {
    $this->end_date = $end_date ?? ;
    $this->format = $format ?? ;
    $this->limit = $limit ?? ;
    $this->marker = $marker ?? ;
    $this->start_date = $start_date ?? ;
  }
}

class InventoryRetrievalJobInput {
  public string $end_date;
  public string $limit;
  public string $marker;
  public string $start_date;

  public function __construct(shape(
  ?'end_date' => string,
  ?'limit' => string,
  ?'marker' => string,
  ?'start_date' => string,
  ) $s = shape()) {
    $this->end_date = $end_date ?? ;
    $this->limit = $limit ?? ;
    $this->marker = $marker ?? ;
    $this->start_date = $start_date ?? ;
  }
}

type JobList = vec<GlacierJobDescription>;

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

  public function __construct(shape(
  ?'archive_id' => string,
  ?'description' => string,
  ?'format' => string,
  ?'inventory_retrieval_parameters' => InventoryRetrievalJobInput,
  ?'output_location' => OutputLocation,
  ?'retrieval_byte_range' => string,
  ?'sns_topic' => string,
  ?'select_parameters' => SelectParameters,
  ?'tier' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->archive_id = $archive_id ?? ;
    $this->description = $description ?? ;
    $this->format = $format ?? ;
    $this->inventory_retrieval_parameters = $inventory_retrieval_parameters ?? ;
    $this->output_location = $output_location ?? null;
    $this->retrieval_byte_range = $retrieval_byte_range ?? ;
    $this->sns_topic = $sns_topic ?? ;
    $this->select_parameters = $select_parameters ?? null;
    $this->tier = $tier ?? ;
    $this->type = $type ?? "";
  }
}

class LimitExceededException {
  public string $code;
  public string $message;
  public string $type;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

class ListJobsInput {
  public string $account_id;
  public string $completed;
  public string $limit;
  public string $marker;
  public string $statuscode;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'completed' => string,
  ?'limit' => string,
  ?'marker' => string,
  ?'statuscode' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->completed = $completed ?? ;
    $this->limit = $limit ?? ;
    $this->marker = $marker ?? ;
    $this->statuscode = $statuscode ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class ListJobsOutput {
  public JobList $job_list;
  public string $marker;

  public function __construct(shape(
  ?'job_list' => JobList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->job_list = $job_list ?? [];
    $this->marker = $marker ?? ;
  }
}

class ListMultipartUploadsInput {
  public string $account_id;
  public string $limit;
  public string $marker;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'limit' => string,
  ?'marker' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->limit = $limit ?? ;
    $this->marker = $marker ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class ListMultipartUploadsOutput {
  public string $marker;
  public UploadsList $uploads_list;

  public function __construct(shape(
  ?'marker' => string,
  ?'uploads_list' => UploadsList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->uploads_list = $uploads_list ?? [];
  }
}

class ListPartsInput {
  public string $account_id;
  public string $limit;
  public string $marker;
  public string $upload_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'limit' => string,
  ?'marker' => string,
  ?'upload_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->limit = $limit ?? ;
    $this->marker = $marker ?? ;
    $this->upload_id = $upload_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class ListPartsOutput {
  public string $archive_description;
  public string $creation_date;
  public string $marker;
  public string $multipart_upload_id;
  public long $part_size_in_bytes;
  public PartList $parts;
  public string $vault_arn;

  public function __construct(shape(
  ?'archive_description' => string,
  ?'creation_date' => string,
  ?'marker' => string,
  ?'multipart_upload_id' => string,
  ?'part_size_in_bytes' => long,
  ?'parts' => PartList,
  ?'vault_arn' => string,
  ) $s = shape()) {
    $this->archive_description = $archive_description ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->marker = $marker ?? ;
    $this->multipart_upload_id = $multipart_upload_id ?? ;
    $this->part_size_in_bytes = $part_size_in_bytes ?? ;
    $this->parts = $parts ?? ;
    $this->vault_arn = $vault_arn ?? ;
  }
}

class ListProvisionedCapacityInput {
  public string $account_id;

  public function __construct(shape(
  ?'account_id' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
  }
}

class ListProvisionedCapacityOutput {
  public ProvisionedCapacityList $provisioned_capacity_list;

  public function __construct(shape(
  ?'provisioned_capacity_list' => ProvisionedCapacityList,
  ) $s = shape()) {
    $this->provisioned_capacity_list = $provisioned_capacity_list ?? [];
  }
}

class ListTagsForVaultInput {
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class ListTagsForVaultOutput {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

class ListVaultsInput {
  public string $account_id;
  public string $limit;
  public string $marker;

  public function __construct(shape(
  ?'account_id' => string,
  ?'limit' => string,
  ?'marker' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->limit = $limit ?? ;
    $this->marker = $marker ?? ;
  }
}

class ListVaultsOutput {
  public string $marker;
  public VaultList $vault_list;

  public function __construct(shape(
  ?'marker' => string,
  ?'vault_list' => VaultList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->vault_list = $vault_list ?? [];
  }
}

class MissingParameterValueException {
  public string $code;
  public string $message;
  public string $type;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

type NotificationEventList = vec<string>;

type NullableLong = int;

class OutputLocation {
  public S3Location $s_3;

  public function __construct(shape(
  ?'s_3' => S3Location,
  ) $s = shape()) {
    $this->s_3 = $s_3 ?? ;
  }
}

class OutputSerialization {
  public CSVOutput $csv;

  public function __construct(shape(
  ?'csv' => CSVOutput,
  ) $s = shape()) {
    $this->csv = $csv ?? ;
  }
}

type PartList = vec<PartListElement>;

class PartListElement {
  public string $range_in_bytes;
  public string $sha_256_tree_hash;

  public function __construct(shape(
  ?'range_in_bytes' => string,
  ?'sha_256_tree_hash' => string,
  ) $s = shape()) {
    $this->range_in_bytes = $range_in_bytes ?? ;
    $this->sha_256_tree_hash = $sha_256_tree_hash ?? ;
  }
}

type Permission = string;

class PolicyEnforcedException {
  public string $code;
  public string $message;
  public string $type;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

class ProvisionedCapacityDescription {
  public string $capacity_id;
  public string $expiration_date;
  public string $start_date;

  public function __construct(shape(
  ?'capacity_id' => string,
  ?'expiration_date' => string,
  ?'start_date' => string,
  ) $s = shape()) {
    $this->capacity_id = $capacity_id ?? ;
    $this->expiration_date = $expiration_date ?? ;
    $this->start_date = $start_date ?? ;
  }
}

type ProvisionedCapacityList = vec<ProvisionedCapacityDescription>;

class PurchaseProvisionedCapacityInput {
  public string $account_id;

  public function __construct(shape(
  ?'account_id' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
  }
}

class PurchaseProvisionedCapacityOutput {
  public string $capacity_id;

  public function __construct(shape(
  ?'capacity_id' => string,
  ) $s = shape()) {
    $this->capacity_id = $capacity_id ?? ;
  }
}

type QuoteFields = string;

class RemoveTagsFromVaultInput {
  public TagKeyList $tag_keys;
  public string $account_id;
  public string $vault_name;

  public function __construct(shape(
  ?'tag_keys' => TagKeyList,
  ?'account_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->tag_keys = $tag_keys ?? ;
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class RequestTimeoutException {
  public string $code;
  public string $message;
  public string $type;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

class ResourceNotFoundException {
  public string $code;
  public string $message;
  public string $type;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
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

  public function __construct(shape(
  ?'access_control_list' => AccessControlPolicyList,
  ?'bucket_name' => string,
  ?'canned_acl' => CannedACL,
  ?'encryption' => Encryption,
  ?'prefix' => string,
  ?'storage_class' => StorageClass,
  ?'tagging' => hashmap,
  ?'user_metadata' => hashmap,
  ) $s = shape()) {
    $this->access_control_list = $access_control_list ?? ;
    $this->bucket_name = $bucket_name ?? ;
    $this->canned_acl = $canned_acl ?? "";
    $this->encryption = $encryption ?? null;
    $this->prefix = $prefix ?? ;
    $this->storage_class = $storage_class ?? "";
    $this->tagging = $tagging ?? ;
    $this->user_metadata = $user_metadata ?? ;
  }
}

class SelectParameters {
  public string $expression;
  public ExpressionType $expression_type;
  public InputSerialization $input_serialization;
  public OutputSerialization $output_serialization;

  public function __construct(shape(
  ?'expression' => string,
  ?'expression_type' => ExpressionType,
  ?'input_serialization' => InputSerialization,
  ?'output_serialization' => OutputSerialization,
  ) $s = shape()) {
    $this->expression = $expression ?? ;
    $this->expression_type = $expression_type ?? "";
    $this->input_serialization = $input_serialization ?? null;
    $this->output_serialization = $output_serialization ?? null;
  }
}

class ServiceUnavailableException {
  public string $code;
  public string $message;
  public string $type;

  public function __construct(shape(
  ?'code' => string,
  ?'message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->type = $type ?? ;
  }
}

class SetDataRetrievalPolicyInput {
  public DataRetrievalPolicy $policy;
  public string $account_id;

  public function __construct(shape(
  ?'policy' => DataRetrievalPolicy,
  ?'account_id' => string,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
    $this->account_id = $account_id ?? ;
  }
}

class SetVaultAccessPolicyInput {
  public string $account_id;
  public VaultAccessPolicy $policy;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'policy' => VaultAccessPolicy,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->policy = $policy ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class SetVaultNotificationsInput {
  public string $account_id;
  public string $vault_name;
  public VaultNotificationConfig $vault_notification_config;

  public function __construct(shape(
  ?'account_id' => string,
  ?'vault_name' => string,
  ?'vault_notification_config' => VaultNotificationConfig,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->vault_name = $vault_name ?? ;
    $this->vault_notification_config = $vault_notification_config ?? ;
  }
}

type Size = int;

type StatusCode = string;

type StorageClass = string;

type Stream = string;

type TagKey = string;

type TagKeyList = vec<string>;

type TagMap = dict<TagKey, TagValue>;

type TagValue = string;

type Type = string;

class UploadArchiveInput {
  public string $account_id;
  public string $archive_description;
  public Stream $body;
  public string $checksum;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'archive_description' => string,
  ?'body' => Stream,
  ?'checksum' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->archive_description = $archive_description ?? ;
    $this->body = $body ?? ;
    $this->checksum = $checksum ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class UploadListElement {
  public string $archive_description;
  public string $creation_date;
  public string $multipart_upload_id;
  public long $part_size_in_bytes;
  public string $vault_arn;

  public function __construct(shape(
  ?'archive_description' => string,
  ?'creation_date' => string,
  ?'multipart_upload_id' => string,
  ?'part_size_in_bytes' => long,
  ?'vault_arn' => string,
  ) $s = shape()) {
    $this->archive_description = $archive_description ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->multipart_upload_id = $multipart_upload_id ?? ;
    $this->part_size_in_bytes = $part_size_in_bytes ?? ;
    $this->vault_arn = $vault_arn ?? ;
  }
}

class UploadMultipartPartInput {
  public string $account_id;
  public Stream $body;
  public string $checksum;
  public string $range;
  public string $upload_id;
  public string $vault_name;

  public function __construct(shape(
  ?'account_id' => string,
  ?'body' => Stream,
  ?'checksum' => string,
  ?'range' => string,
  ?'upload_id' => string,
  ?'vault_name' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? ;
    $this->body = $body ?? ;
    $this->checksum = $checksum ?? ;
    $this->range = $range ?? ;
    $this->upload_id = $upload_id ?? ;
    $this->vault_name = $vault_name ?? ;
  }
}

class UploadMultipartPartOutput {
  public string $checksum;

  public function __construct(shape(
  ?'checksum' => string,
  ) $s = shape()) {
    $this->checksum = $checksum ?? ;
  }
}

type UploadsList = vec<UploadListElement>;

class VaultAccessPolicy {
  public string $policy;

  public function __construct(shape(
  ?'policy' => string,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
  }
}

type VaultList = vec<DescribeVaultOutput>;

class VaultLockPolicy {
  public string $policy;

  public function __construct(shape(
  ?'policy' => string,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
  }
}

class VaultNotificationConfig {
  public NotificationEventList $events;
  public string $sns_topic;

  public function __construct(shape(
  ?'events' => NotificationEventList,
  ?'sns_topic' => string,
  ) $s = shape()) {
    $this->events = $events ?? ;
    $this->sns_topic = $sns_topic ?? ;
  }
}

type boolean = bool;

type hashmap = dict<string, string>;

type httpstatus = int;

type long = int;

type string = string;

