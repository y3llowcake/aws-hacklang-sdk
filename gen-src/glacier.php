<?hh // strict
namespace slack\aws\glacier;

interface Glacier {
  public function AbortMultipartUpload(AbortMultipartUploadInput $in): Awaitable<\Errors\Error>;
  public function AbortVaultLock(AbortVaultLockInput $in): Awaitable<\Errors\Error>;
  public function AddTagsToVault(AddTagsToVaultInput $in): Awaitable<\Errors\Error>;
  public function CompleteMultipartUpload(CompleteMultipartUploadInput $in): Awaitable<\Errors\Result<ArchiveCreationOutput>>;
  public function CompleteVaultLock(CompleteVaultLockInput $in): Awaitable<\Errors\Error>;
  public function CreateVault(CreateVaultInput $in): Awaitable<\Errors\Result<CreateVaultOutput>>;
  public function DeleteArchive(DeleteArchiveInput $in): Awaitable<\Errors\Error>;
  public function DeleteVault(DeleteVaultInput $in): Awaitable<\Errors\Error>;
  public function DeleteVaultAccessPolicy(DeleteVaultAccessPolicyInput $in): Awaitable<\Errors\Error>;
  public function DeleteVaultNotifications(DeleteVaultNotificationsInput $in): Awaitable<\Errors\Error>;
  public function DescribeJob(DescribeJobInput $in): Awaitable<\Errors\Result<GlacierJobDescription>>;
  public function DescribeVault(DescribeVaultInput $in): Awaitable<\Errors\Result<DescribeVaultOutput>>;
  public function GetDataRetrievalPolicy(GetDataRetrievalPolicyInput $in): Awaitable<\Errors\Result<GetDataRetrievalPolicyOutput>>;
  public function GetJobOutput(GetJobOutputInput $in): Awaitable<\Errors\Result<GetJobOutputOutput>>;
  public function GetVaultAccessPolicy(GetVaultAccessPolicyInput $in): Awaitable<\Errors\Result<GetVaultAccessPolicyOutput>>;
  public function GetVaultLock(GetVaultLockInput $in): Awaitable<\Errors\Result<GetVaultLockOutput>>;
  public function GetVaultNotifications(GetVaultNotificationsInput $in): Awaitable<\Errors\Result<GetVaultNotificationsOutput>>;
  public function InitiateJob(InitiateJobInput $in): Awaitable<\Errors\Result<InitiateJobOutput>>;
  public function InitiateMultipartUpload(InitiateMultipartUploadInput $in): Awaitable<\Errors\Result<InitiateMultipartUploadOutput>>;
  public function InitiateVaultLock(InitiateVaultLockInput $in): Awaitable<\Errors\Result<InitiateVaultLockOutput>>;
  public function ListJobs(ListJobsInput $in): Awaitable<\Errors\Result<ListJobsOutput>>;
  public function ListMultipartUploads(ListMultipartUploadsInput $in): Awaitable<\Errors\Result<ListMultipartUploadsOutput>>;
  public function ListParts(ListPartsInput $in): Awaitable<\Errors\Result<ListPartsOutput>>;
  public function ListProvisionedCapacity(ListProvisionedCapacityInput $in): Awaitable<\Errors\Result<ListProvisionedCapacityOutput>>;
  public function ListTagsForVault(ListTagsForVaultInput $in): Awaitable<\Errors\Result<ListTagsForVaultOutput>>;
  public function ListVaults(ListVaultsInput $in): Awaitable<\Errors\Result<ListVaultsOutput>>;
  public function PurchaseProvisionedCapacity(PurchaseProvisionedCapacityInput $in): Awaitable<\Errors\Result<PurchaseProvisionedCapacityOutput>>;
  public function RemoveTagsFromVault(RemoveTagsFromVaultInput $in): Awaitable<\Errors\Error>;
  public function SetDataRetrievalPolicy(SetDataRetrievalPolicyInput $in): Awaitable<\Errors\Error>;
  public function SetVaultAccessPolicy(SetVaultAccessPolicyInput $in): Awaitable<\Errors\Error>;
  public function SetVaultNotifications(SetVaultNotificationsInput $in): Awaitable<\Errors\Error>;
  public function UploadArchive(UploadArchiveInput $in): Awaitable<\Errors\Result<ArchiveCreationOutput>>;
  public function UploadMultipartPart(UploadMultipartPartInput $in): Awaitable<\Errors\Result<UploadMultipartPartOutput>>;
}

class AbortMultipartUploadInput {
  public ?string $account_id;
  public ?string $upload_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'upload_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class AbortVaultLockInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

type AccessControlPolicyList = vec<Grant>;

type ActionCode = string;

class AddTagsToVaultInput {
  public ?TagMap $tags;
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'tags' => ?TagMap,
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class ArchiveCreationOutput {
  public ?string $archive_id;
  public ?string $checksum;
  public ?string $location;

  public function __construct(shape(
    ?'archive_id' => ?string,
    ?'checksum' => ?string,
    ?'location' => ?string,
  ) $s = shape()) {
    $this->archive_id = $s['archive_id'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->location = $s['location'] ?? '';
  }
}

class CSVInput {
  public ?string $comments;
  public ?string $field_delimiter;
  public ?FileHeaderInfo $file_header_info;
  public ?string $quote_character;
  public ?string $quote_escape_character;
  public ?string $record_delimiter;

  public function __construct(shape(
    ?'comments' => ?string,
    ?'field_delimiter' => ?string,
    ?'file_header_info' => ?FileHeaderInfo,
    ?'quote_character' => ?string,
    ?'quote_escape_character' => ?string,
    ?'record_delimiter' => ?string,
  ) $s = shape()) {
    $this->comments = $s['comments'] ?? '';
    $this->field_delimiter = $s['field_delimiter'] ?? '';
    $this->file_header_info = $s['file_header_info'] ?? '';
    $this->quote_character = $s['quote_character'] ?? '';
    $this->quote_escape_character = $s['quote_escape_character'] ?? '';
    $this->record_delimiter = $s['record_delimiter'] ?? '';
  }
}

class CSVOutput {
  public ?string $field_delimiter;
  public ?string $quote_character;
  public ?string $quote_escape_character;
  public ?QuoteFields $quote_fields;
  public ?string $record_delimiter;

  public function __construct(shape(
    ?'field_delimiter' => ?string,
    ?'quote_character' => ?string,
    ?'quote_escape_character' => ?string,
    ?'quote_fields' => ?QuoteFields,
    ?'record_delimiter' => ?string,
  ) $s = shape()) {
    $this->field_delimiter = $s['field_delimiter'] ?? '';
    $this->quote_character = $s['quote_character'] ?? '';
    $this->quote_escape_character = $s['quote_escape_character'] ?? '';
    $this->quote_fields = $s['quote_fields'] ?? '';
    $this->record_delimiter = $s['record_delimiter'] ?? '';
  }
}

type CannedACL = string;

class CompleteMultipartUploadInput {
  public ?string $account_id;
  public ?string $archive_size;
  public ?string $checksum;
  public ?string $upload_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'archive_size' => ?string,
    ?'checksum' => ?string,
    ?'upload_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->archive_size = $s['archive_size'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class CompleteVaultLockInput {
  public ?string $account_id;
  public ?string $lock_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'lock_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->lock_id = $s['lock_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class CreateVaultInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class CreateVaultOutput {
  public ?string $location;

  public function __construct(shape(
    ?'location' => ?string,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
  }
}

class DataRetrievalPolicy {
  public ?DataRetrievalRulesList $rules;

  public function __construct(shape(
    ?'rules' => ?DataRetrievalRulesList,
  ) $s = shape()) {
    $this->rules = $s['rules'] ?? vec[];
  }
}

class DataRetrievalRule {
  public ?NullableLong $bytes_per_hour;
  public ?string $strategy;

  public function __construct(shape(
    ?'bytes_per_hour' => ?NullableLong,
    ?'strategy' => ?string,
  ) $s = shape()) {
    $this->bytes_per_hour = $s['bytes_per_hour'] ?? 0;
    $this->strategy = $s['strategy'] ?? '';
  }
}

type DataRetrievalRulesList = vec<DataRetrievalRule>;

type DateTime = string;

class DeleteArchiveInput {
  public ?string $account_id;
  public ?string $archive_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'archive_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->archive_id = $s['archive_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class DeleteVaultAccessPolicyInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class DeleteVaultInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class DeleteVaultNotificationsInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class DescribeJobInput {
  public ?string $account_id;
  public ?string $job_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'job_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class DescribeVaultInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class DescribeVaultOutput {
  public ?string $creation_date;
  public ?string $last_inventory_date;
  public ?long $number_of_archives;
  public ?long $size_in_bytes;
  public ?string $vault_arn;
  public ?string $vault_name;

  public function __construct(shape(
    ?'creation_date' => ?string,
    ?'last_inventory_date' => ?string,
    ?'number_of_archives' => ?long,
    ?'size_in_bytes' => ?long,
    ?'vault_arn' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? '';
    $this->last_inventory_date = $s['last_inventory_date'] ?? '';
    $this->number_of_archives = $s['number_of_archives'] ?? 0;
    $this->size_in_bytes = $s['size_in_bytes'] ?? 0;
    $this->vault_arn = $s['vault_arn'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class Encryption {
  public ?EncryptionType $encryption_type;
  public ?string $kms_context;
  public ?string $kms_key_id;

  public function __construct(shape(
    ?'encryption_type' => ?EncryptionType,
    ?'kms_context' => ?string,
    ?'kms_key_id' => ?string,
  ) $s = shape()) {
    $this->encryption_type = $s['encryption_type'] ?? '';
    $this->kms_context = $s['kms_context'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
  }
}

type EncryptionType = string;

type ExpressionType = string;

type FileHeaderInfo = string;

class GetDataRetrievalPolicyInput {
  public ?string $account_id;

  public function __construct(shape(
    ?'account_id' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
  }
}

class GetDataRetrievalPolicyOutput {
  public ?DataRetrievalPolicy $policy;

  public function __construct(shape(
    ?'policy' => ?DataRetrievalPolicy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
  }
}

class GetJobOutputInput {
  public ?string $account_id;
  public ?string $job_id;
  public ?string $range;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'job_id' => ?string,
    ?'range' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->range = $s['range'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class GetJobOutputOutput {
  public ?string $accept_ranges;
  public ?string $archive_description;
  public ?Stream $body;
  public ?string $checksum;
  public ?string $content_range;
  public ?string $content_type;
  public ?httpstatus $status;

  public function __construct(shape(
    ?'accept_ranges' => ?string,
    ?'archive_description' => ?string,
    ?'body' => ?Stream,
    ?'checksum' => ?string,
    ?'content_range' => ?string,
    ?'content_type' => ?string,
    ?'status' => ?httpstatus,
  ) $s = shape()) {
    $this->accept_ranges = $s['accept_ranges'] ?? '';
    $this->archive_description = $s['archive_description'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->content_range = $s['content_range'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->status = $s['status'] ?? 0;
  }
}

class GetVaultAccessPolicyInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class GetVaultAccessPolicyOutput {
  public ?VaultAccessPolicy $policy;

  public function __construct(shape(
    ?'policy' => ?VaultAccessPolicy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
  }
}

class GetVaultLockInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class GetVaultLockOutput {
  public ?string $creation_date;
  public ?string $expiration_date;
  public ?string $policy;
  public ?string $state;

  public function __construct(shape(
    ?'creation_date' => ?string,
    ?'expiration_date' => ?string,
    ?'policy' => ?string,
    ?'state' => ?string,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? '';
    $this->expiration_date = $s['expiration_date'] ?? '';
    $this->policy = $s['policy'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class GetVaultNotificationsInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class GetVaultNotificationsOutput {
  public ?VaultNotificationConfig $vault_notification_config;

  public function __construct(shape(
    ?'vault_notification_config' => ?VaultNotificationConfig,
  ) $s = shape()) {
    $this->vault_notification_config = $s['vault_notification_config'] ?? null;
  }
}

class GlacierJobDescription {
  public ?ActionCode $action;
  public ?string $archive_id;
  public ?string $archive_sha_256_tree_hash;
  public ?Size $archive_size_in_bytes;
  public ?boolean $completed;
  public ?string $completion_date;
  public ?string $creation_date;
  public ?InventoryRetrievalJobDescription $inventory_retrieval_parameters;
  public ?Size $inventory_size_in_bytes;
  public ?string $job_description;
  public ?string $job_id;
  public ?string $job_output_path;
  public ?OutputLocation $output_location;
  public ?string $retrieval_byte_range;
  public ?string $sha_256_tree_hash;
  public ?string $sns_topic;
  public ?SelectParameters $select_parameters;
  public ?StatusCode $status_code;
  public ?string $status_message;
  public ?string $tier;
  public ?string $vault_arn;

  public function __construct(shape(
    ?'action' => ?ActionCode,
    ?'archive_id' => ?string,
    ?'archive_sha_256_tree_hash' => ?string,
    ?'archive_size_in_bytes' => ?Size,
    ?'completed' => ?boolean,
    ?'completion_date' => ?string,
    ?'creation_date' => ?string,
    ?'inventory_retrieval_parameters' => ?InventoryRetrievalJobDescription,
    ?'inventory_size_in_bytes' => ?Size,
    ?'job_description' => ?string,
    ?'job_id' => ?string,
    ?'job_output_path' => ?string,
    ?'output_location' => ?OutputLocation,
    ?'retrieval_byte_range' => ?string,
    ?'sha_256_tree_hash' => ?string,
    ?'sns_topic' => ?string,
    ?'select_parameters' => ?SelectParameters,
    ?'status_code' => ?StatusCode,
    ?'status_message' => ?string,
    ?'tier' => ?string,
    ?'vault_arn' => ?string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->archive_id = $s['archive_id'] ?? '';
    $this->archive_sha_256_tree_hash = $s['archive_sha_256_tree_hash'] ?? '';
    $this->archive_size_in_bytes = $s['archive_size_in_bytes'] ?? 0;
    $this->completed = $s['completed'] ?? false;
    $this->completion_date = $s['completion_date'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->inventory_retrieval_parameters = $s['inventory_retrieval_parameters'] ?? null;
    $this->inventory_size_in_bytes = $s['inventory_size_in_bytes'] ?? 0;
    $this->job_description = $s['job_description'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->job_output_path = $s['job_output_path'] ?? '';
    $this->output_location = $s['output_location'] ?? null;
    $this->retrieval_byte_range = $s['retrieval_byte_range'] ?? '';
    $this->sha_256_tree_hash = $s['sha_256_tree_hash'] ?? '';
    $this->sns_topic = $s['sns_topic'] ?? '';
    $this->select_parameters = $s['select_parameters'] ?? null;
    $this->status_code = $s['status_code'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tier = $s['tier'] ?? '';
    $this->vault_arn = $s['vault_arn'] ?? '';
  }
}

class Grant {
  public ?Grantee $grantee;
  public ?Permission $permission;

  public function __construct(shape(
    ?'grantee' => ?Grantee,
    ?'permission' => ?Permission,
  ) $s = shape()) {
    $this->grantee = $s['grantee'] ?? null;
    $this->permission = $s['permission'] ?? '';
  }
}

class Grantee {
  public ?string $display_name;
  public ?string $email_address;
  public ?string $id;
  public ?Type $type;
  public ?string $uri;

  public function __construct(shape(
    ?'display_name' => ?string,
    ?'email_address' => ?string,
    ?'id' => ?string,
    ?'type' => ?Type,
    ?'uri' => ?string,
  ) $s = shape()) {
    $this->display_name = $s['display_name'] ?? '';
    $this->email_address = $s['email_address'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->uri = $s['uri'] ?? '';
  }
}

class InitiateJobInput {
  public ?string $account_id;
  public ?JobParameters $job_parameters;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'job_parameters' => ?JobParameters,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->job_parameters = $s['job_parameters'] ?? null;
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class InitiateJobOutput {
  public ?string $job_id;
  public ?string $job_output_path;
  public ?string $location;

  public function __construct(shape(
    ?'job_id' => ?string,
    ?'job_output_path' => ?string,
    ?'location' => ?string,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->job_output_path = $s['job_output_path'] ?? '';
    $this->location = $s['location'] ?? '';
  }
}

class InitiateMultipartUploadInput {
  public ?string $account_id;
  public ?string $archive_description;
  public ?string $part_size;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'archive_description' => ?string,
    ?'part_size' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->archive_description = $s['archive_description'] ?? '';
    $this->part_size = $s['part_size'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class InitiateMultipartUploadOutput {
  public ?string $location;
  public ?string $upload_id;

  public function __construct(shape(
    ?'location' => ?string,
    ?'upload_id' => ?string,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
  }
}

class InitiateVaultLockInput {
  public ?string $account_id;
  public ?VaultLockPolicy $policy;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'policy' => ?VaultLockPolicy,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->policy = $s['policy'] ?? null;
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class InitiateVaultLockOutput {
  public ?string $lock_id;

  public function __construct(shape(
    ?'lock_id' => ?string,
  ) $s = shape()) {
    $this->lock_id = $s['lock_id'] ?? '';
  }
}

class InputSerialization {
  public ?CSVInput $csv;

  public function __construct(shape(
    ?'csv' => ?CSVInput,
  ) $s = shape()) {
    $this->csv = $s['csv'] ?? null;
  }
}

class InsufficientCapacityException {
  public ?string $code;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InvalidParameterValueException {
  public ?string $code;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InventoryRetrievalJobDescription {
  public ?DateTime $end_date;
  public ?string $format;
  public ?string $limit;
  public ?string $marker;
  public ?DateTime $start_date;

  public function __construct(shape(
    ?'end_date' => ?DateTime,
    ?'format' => ?string,
    ?'limit' => ?string,
    ?'marker' => ?string,
    ?'start_date' => ?DateTime,
  ) $s = shape()) {
    $this->end_date = $s['end_date'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->limit = $s['limit'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->start_date = $s['start_date'] ?? '';
  }
}

class InventoryRetrievalJobInput {
  public ?string $end_date;
  public ?string $limit;
  public ?string $marker;
  public ?string $start_date;

  public function __construct(shape(
    ?'end_date' => ?string,
    ?'limit' => ?string,
    ?'marker' => ?string,
    ?'start_date' => ?string,
  ) $s = shape()) {
    $this->end_date = $s['end_date'] ?? '';
    $this->limit = $s['limit'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->start_date = $s['start_date'] ?? '';
  }
}

type JobList = vec<GlacierJobDescription>;

class JobParameters {
  public ?string $archive_id;
  public ?string $description;
  public ?string $format;
  public ?InventoryRetrievalJobInput $inventory_retrieval_parameters;
  public ?OutputLocation $output_location;
  public ?string $retrieval_byte_range;
  public ?string $sns_topic;
  public ?SelectParameters $select_parameters;
  public ?string $tier;
  public ?string $type;

  public function __construct(shape(
    ?'archive_id' => ?string,
    ?'description' => ?string,
    ?'format' => ?string,
    ?'inventory_retrieval_parameters' => ?InventoryRetrievalJobInput,
    ?'output_location' => ?OutputLocation,
    ?'retrieval_byte_range' => ?string,
    ?'sns_topic' => ?string,
    ?'select_parameters' => ?SelectParameters,
    ?'tier' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->archive_id = $s['archive_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->inventory_retrieval_parameters = $s['inventory_retrieval_parameters'] ?? null;
    $this->output_location = $s['output_location'] ?? null;
    $this->retrieval_byte_range = $s['retrieval_byte_range'] ?? '';
    $this->sns_topic = $s['sns_topic'] ?? '';
    $this->select_parameters = $s['select_parameters'] ?? null;
    $this->tier = $s['tier'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class LimitExceededException {
  public ?string $code;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ListJobsInput {
  public ?string $account_id;
  public ?string $completed;
  public ?string $limit;
  public ?string $marker;
  public ?string $statuscode;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'completed' => ?string,
    ?'limit' => ?string,
    ?'marker' => ?string,
    ?'statuscode' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->completed = $s['completed'] ?? '';
    $this->limit = $s['limit'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->statuscode = $s['statuscode'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class ListJobsOutput {
  public ?JobList $job_list;
  public ?string $marker;

  public function __construct(shape(
    ?'job_list' => ?JobList,
    ?'marker' => ?string,
  ) $s = shape()) {
    $this->job_list = $s['job_list'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class ListMultipartUploadsInput {
  public ?string $account_id;
  public ?string $limit;
  public ?string $marker;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'limit' => ?string,
    ?'marker' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->limit = $s['limit'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class ListMultipartUploadsOutput {
  public ?string $marker;
  public ?UploadsList $uploads_list;

  public function __construct(shape(
    ?'marker' => ?string,
    ?'uploads_list' => ?UploadsList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->uploads_list = $s['uploads_list'] ?? vec[];
  }
}

class ListPartsInput {
  public ?string $account_id;
  public ?string $limit;
  public ?string $marker;
  public ?string $upload_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'limit' => ?string,
    ?'marker' => ?string,
    ?'upload_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->limit = $s['limit'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class ListPartsOutput {
  public ?string $archive_description;
  public ?string $creation_date;
  public ?string $marker;
  public ?string $multipart_upload_id;
  public ?long $part_size_in_bytes;
  public ?PartList $parts;
  public ?string $vault_arn;

  public function __construct(shape(
    ?'archive_description' => ?string,
    ?'creation_date' => ?string,
    ?'marker' => ?string,
    ?'multipart_upload_id' => ?string,
    ?'part_size_in_bytes' => ?long,
    ?'parts' => ?PartList,
    ?'vault_arn' => ?string,
  ) $s = shape()) {
    $this->archive_description = $s['archive_description'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->multipart_upload_id = $s['multipart_upload_id'] ?? '';
    $this->part_size_in_bytes = $s['part_size_in_bytes'] ?? 0;
    $this->parts = $s['parts'] ?? vec[];
    $this->vault_arn = $s['vault_arn'] ?? '';
  }
}

class ListProvisionedCapacityInput {
  public ?string $account_id;

  public function __construct(shape(
    ?'account_id' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
  }
}

class ListProvisionedCapacityOutput {
  public ?ProvisionedCapacityList $provisioned_capacity_list;

  public function __construct(shape(
    ?'provisioned_capacity_list' => ?ProvisionedCapacityList,
  ) $s = shape()) {
    $this->provisioned_capacity_list = $s['provisioned_capacity_list'] ?? vec[];
  }
}

class ListTagsForVaultInput {
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class ListTagsForVaultOutput {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListVaultsInput {
  public ?string $account_id;
  public ?string $limit;
  public ?string $marker;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'limit' => ?string,
    ?'marker' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->limit = $s['limit'] ?? '';
    $this->marker = $s['marker'] ?? '';
  }
}

class ListVaultsOutput {
  public ?string $marker;
  public ?VaultList $vault_list;

  public function __construct(shape(
    ?'marker' => ?string,
    ?'vault_list' => ?VaultList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->vault_list = $s['vault_list'] ?? vec[];
  }
}

class MissingParameterValueException {
  public ?string $code;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type NotificationEventList = vec<string>;

type NullableLong = int;

class OutputLocation {
  public ?S3Location $s_3;

  public function __construct(shape(
    ?'s_3' => ?S3Location,
  ) $s = shape()) {
    $this->s_3 = $s['s_3'] ?? null;
  }
}

class OutputSerialization {
  public ?CSVOutput $csv;

  public function __construct(shape(
    ?'csv' => ?CSVOutput,
  ) $s = shape()) {
    $this->csv = $s['csv'] ?? null;
  }
}

type PartList = vec<PartListElement>;

class PartListElement {
  public ?string $range_in_bytes;
  public ?string $sha_256_tree_hash;

  public function __construct(shape(
    ?'range_in_bytes' => ?string,
    ?'sha_256_tree_hash' => ?string,
  ) $s = shape()) {
    $this->range_in_bytes = $s['range_in_bytes'] ?? '';
    $this->sha_256_tree_hash = $s['sha_256_tree_hash'] ?? '';
  }
}

type Permission = string;

class PolicyEnforcedException {
  public ?string $code;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ProvisionedCapacityDescription {
  public ?string $capacity_id;
  public ?string $expiration_date;
  public ?string $start_date;

  public function __construct(shape(
    ?'capacity_id' => ?string,
    ?'expiration_date' => ?string,
    ?'start_date' => ?string,
  ) $s = shape()) {
    $this->capacity_id = $s['capacity_id'] ?? '';
    $this->expiration_date = $s['expiration_date'] ?? '';
    $this->start_date = $s['start_date'] ?? '';
  }
}

type ProvisionedCapacityList = vec<ProvisionedCapacityDescription>;

class PurchaseProvisionedCapacityInput {
  public ?string $account_id;

  public function __construct(shape(
    ?'account_id' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
  }
}

class PurchaseProvisionedCapacityOutput {
  public ?string $capacity_id;

  public function __construct(shape(
    ?'capacity_id' => ?string,
  ) $s = shape()) {
    $this->capacity_id = $s['capacity_id'] ?? '';
  }
}

type QuoteFields = string;

class RemoveTagsFromVaultInput {
  public ?TagKeyList $tag_keys;
  public ?string $account_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'tag_keys' => ?TagKeyList,
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class RequestTimeoutException {
  public ?string $code;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?string $code;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class S3Location {
  public ?AccessControlPolicyList $access_control_list;
  public ?string $bucket_name;
  public ?CannedACL $canned_acl;
  public ?Encryption $encryption;
  public ?string $prefix;
  public ?StorageClass $storage_class;
  public ?hashmap $tagging;
  public ?hashmap $user_metadata;

  public function __construct(shape(
    ?'access_control_list' => ?AccessControlPolicyList,
    ?'bucket_name' => ?string,
    ?'canned_acl' => ?CannedACL,
    ?'encryption' => ?Encryption,
    ?'prefix' => ?string,
    ?'storage_class' => ?StorageClass,
    ?'tagging' => ?hashmap,
    ?'user_metadata' => ?hashmap,
  ) $s = shape()) {
    $this->access_control_list = $s['access_control_list'] ?? vec[];
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->canned_acl = $s['canned_acl'] ?? '';
    $this->encryption = $s['encryption'] ?? null;
    $this->prefix = $s['prefix'] ?? '';
    $this->storage_class = $s['storage_class'] ?? '';
    $this->tagging = $s['tagging'] ?? dict[];
    $this->user_metadata = $s['user_metadata'] ?? dict[];
  }
}

class SelectParameters {
  public ?string $expression;
  public ?ExpressionType $expression_type;
  public ?InputSerialization $input_serialization;
  public ?OutputSerialization $output_serialization;

  public function __construct(shape(
    ?'expression' => ?string,
    ?'expression_type' => ?ExpressionType,
    ?'input_serialization' => ?InputSerialization,
    ?'output_serialization' => ?OutputSerialization,
  ) $s = shape()) {
    $this->expression = $s['expression'] ?? '';
    $this->expression_type = $s['expression_type'] ?? '';
    $this->input_serialization = $s['input_serialization'] ?? null;
    $this->output_serialization = $s['output_serialization'] ?? null;
  }
}

class ServiceUnavailableException {
  public ?string $code;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class SetDataRetrievalPolicyInput {
  public ?DataRetrievalPolicy $policy;
  public ?string $account_id;

  public function __construct(shape(
    ?'policy' => ?DataRetrievalPolicy,
    ?'account_id' => ?string,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
    $this->account_id = $s['account_id'] ?? '';
  }
}

class SetVaultAccessPolicyInput {
  public ?string $account_id;
  public ?VaultAccessPolicy $policy;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'policy' => ?VaultAccessPolicy,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->policy = $s['policy'] ?? null;
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class SetVaultNotificationsInput {
  public ?string $account_id;
  public ?string $vault_name;
  public ?VaultNotificationConfig $vault_notification_config;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'vault_name' => ?string,
    ?'vault_notification_config' => ?VaultNotificationConfig,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
    $this->vault_notification_config = $s['vault_notification_config'] ?? null;
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
  public ?string $account_id;
  public ?string $archive_description;
  public ?Stream $body;
  public ?string $checksum;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'archive_description' => ?string,
    ?'body' => ?Stream,
    ?'checksum' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->archive_description = $s['archive_description'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class UploadListElement {
  public ?string $archive_description;
  public ?string $creation_date;
  public ?string $multipart_upload_id;
  public ?long $part_size_in_bytes;
  public ?string $vault_arn;

  public function __construct(shape(
    ?'archive_description' => ?string,
    ?'creation_date' => ?string,
    ?'multipart_upload_id' => ?string,
    ?'part_size_in_bytes' => ?long,
    ?'vault_arn' => ?string,
  ) $s = shape()) {
    $this->archive_description = $s['archive_description'] ?? '';
    $this->creation_date = $s['creation_date'] ?? '';
    $this->multipart_upload_id = $s['multipart_upload_id'] ?? '';
    $this->part_size_in_bytes = $s['part_size_in_bytes'] ?? 0;
    $this->vault_arn = $s['vault_arn'] ?? '';
  }
}

class UploadMultipartPartInput {
  public ?string $account_id;
  public ?Stream $body;
  public ?string $checksum;
  public ?string $range;
  public ?string $upload_id;
  public ?string $vault_name;

  public function __construct(shape(
    ?'account_id' => ?string,
    ?'body' => ?Stream,
    ?'checksum' => ?string,
    ?'range' => ?string,
    ?'upload_id' => ?string,
    ?'vault_name' => ?string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->range = $s['range'] ?? '';
    $this->upload_id = $s['upload_id'] ?? '';
    $this->vault_name = $s['vault_name'] ?? '';
  }
}

class UploadMultipartPartOutput {
  public ?string $checksum;

  public function __construct(shape(
    ?'checksum' => ?string,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
  }
}

type UploadsList = vec<UploadListElement>;

class VaultAccessPolicy {
  public ?string $policy;

  public function __construct(shape(
    ?'policy' => ?string,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
  }
}

type VaultList = vec<DescribeVaultOutput>;

class VaultLockPolicy {
  public ?string $policy;

  public function __construct(shape(
    ?'policy' => ?string,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
  }
}

class VaultNotificationConfig {
  public ?NotificationEventList $events;
  public ?string $sns_topic;

  public function __construct(shape(
    ?'events' => ?NotificationEventList,
    ?'sns_topic' => ?string,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->sns_topic = $s['sns_topic'] ?? '';
  }
}

type boolean = bool;

type hashmap = dict<string, string>;

type httpstatus = int;

type long = int;

type string = string;

