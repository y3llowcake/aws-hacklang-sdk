<?hh // strict
namespace slack\aws\snowball;

interface Snowball {
  public function CancelCluster(CancelClusterRequest $in): Awaitable<\Errors\Result<CancelClusterResult>>;
  public function CancelJob(CancelJobRequest $in): Awaitable<\Errors\Result<CancelJobResult>>;
  public function CreateAddress(CreateAddressRequest $in): Awaitable<\Errors\Result<CreateAddressResult>>;
  public function CreateCluster(CreateClusterRequest $in): Awaitable<\Errors\Result<CreateClusterResult>>;
  public function CreateJob(CreateJobRequest $in): Awaitable<\Errors\Result<CreateJobResult>>;
  public function DescribeAddress(DescribeAddressRequest $in): Awaitable<\Errors\Result<DescribeAddressResult>>;
  public function DescribeAddresses(DescribeAddressesRequest $in): Awaitable<\Errors\Result<DescribeAddressesResult>>;
  public function DescribeCluster(DescribeClusterRequest $in): Awaitable<\Errors\Result<DescribeClusterResult>>;
  public function DescribeJob(DescribeJobRequest $in): Awaitable<\Errors\Result<DescribeJobResult>>;
  public function GetJobManifest(GetJobManifestRequest $in): Awaitable<\Errors\Result<GetJobManifestResult>>;
  public function GetJobUnlockCode(GetJobUnlockCodeRequest $in): Awaitable<\Errors\Result<GetJobUnlockCodeResult>>;
  public function GetSnowballUsage(GetSnowballUsageRequest $in): Awaitable<\Errors\Result<GetSnowballUsageResult>>;
  public function GetSoftwareUpdates(GetSoftwareUpdatesRequest $in): Awaitable<\Errors\Result<GetSoftwareUpdatesResult>>;
  public function ListClusterJobs(ListClusterJobsRequest $in): Awaitable<\Errors\Result<ListClusterJobsResult>>;
  public function ListClusters(ListClustersRequest $in): Awaitable<\Errors\Result<ListClustersResult>>;
  public function ListCompatibleImages(ListCompatibleImagesRequest $in): Awaitable<\Errors\Result<ListCompatibleImagesResult>>;
  public function ListJobs(ListJobsRequest $in): Awaitable<\Errors\Result<ListJobsResult>>;
  public function UpdateCluster(UpdateClusterRequest $in): Awaitable<\Errors\Result<UpdateClusterResult>>;
  public function UpdateJob(UpdateJobRequest $in): Awaitable<\Errors\Result<UpdateJobResult>>;
}

class Address {
  public ?AddressId $address_id;
  public string $city;
  public string $company;
  public string $country;
  public bool $is_restricted;
  public string $landmark;
  public string $name;
  public string $phone_number;
  public string $postal_code;
  public string $prefecture_or_district;
  public string $state_or_province;
  public string $street_1;
  public string $street_2;
  public string $street_3;

  public function __construct(shape(
    ?'address_id' => ?AddressId,
    ?'city' => string,
    ?'company' => string,
    ?'country' => string,
    ?'is_restricted' => bool,
    ?'landmark' => string,
    ?'name' => string,
    ?'phone_number' => string,
    ?'postal_code' => string,
    ?'prefecture_or_district' => string,
    ?'state_or_province' => string,
    ?'street_1' => string,
    ?'street_2' => string,
    ?'street_3' => string,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
    $this->city = $s['city'] ?? '';
    $this->company = $s['company'] ?? '';
    $this->country = $s['country'] ?? '';
    $this->is_restricted = $s['is_restricted'] ?? false;
    $this->landmark = $s['landmark'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->postal_code = $s['postal_code'] ?? '';
    $this->prefecture_or_district = $s['prefecture_or_district'] ?? '';
    $this->state_or_province = $s['state_or_province'] ?? '';
    $this->street_1 = $s['street_1'] ?? '';
    $this->street_2 = $s['street_2'] ?? '';
    $this->street_3 = $s['street_3'] ?? '';
  }
}

type AddressId = string;

type AddressList = vec<Address>;

type AmiId = string;

type Boolean = bool;

class CancelClusterRequest {
  public ?ClusterId $cluster_id;

  public function __construct(shape(
    ?'cluster_id' => ?ClusterId,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
  }
}

class CancelClusterResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CancelJobRequest {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class CancelJobResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ClusterId = string;

class ClusterLimitExceededException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ClusterListEntry {
  public string $cluster_id;
  public ?ClusterState $cluster_state;
  public ?Timestamp $creation_date;
  public string $description;

  public function __construct(shape(
    ?'cluster_id' => string,
    ?'cluster_state' => ?ClusterState,
    ?'creation_date' => ?Timestamp,
    ?'description' => string,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->cluster_state = $s['cluster_state'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->description = $s['description'] ?? '';
  }
}

type ClusterListEntryList = vec<ClusterListEntry>;

class ClusterMetadata {
  public ?AddressId $address_id;
  public string $cluster_id;
  public ?ClusterState $cluster_state;
  public ?Timestamp $creation_date;
  public string $description;
  public ?AddressId $forwarding_address_id;
  public ?JobType $job_type;
  public ?KmsKeyARN $kms_key_arn;
  public ?Notification $notification;
  public ?JobResource $resources;
  public ?RoleARN $role_arn;
  public ?ShippingOption $shipping_option;
  public ?SnowballType $snowball_type;
  public ?TaxDocuments $tax_documents;

  public function __construct(shape(
    ?'address_id' => ?AddressId,
    ?'cluster_id' => string,
    ?'cluster_state' => ?ClusterState,
    ?'creation_date' => ?Timestamp,
    ?'description' => string,
    ?'forwarding_address_id' => ?AddressId,
    ?'job_type' => ?JobType,
    ?'kms_key_arn' => ?KmsKeyARN,
    ?'notification' => ?Notification,
    ?'resources' => ?JobResource,
    ?'role_arn' => ?RoleARN,
    ?'shipping_option' => ?ShippingOption,
    ?'snowball_type' => ?SnowballType,
    ?'tax_documents' => ?TaxDocuments,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->cluster_state = $s['cluster_state'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->forwarding_address_id = $s['forwarding_address_id'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->resources = $s['resources'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->shipping_option = $s['shipping_option'] ?? '';
    $this->snowball_type = $s['snowball_type'] ?? '';
    $this->tax_documents = $s['tax_documents'] ?? null;
  }
}

type ClusterState = string;

class CompatibleImage {
  public string $ami_id;
  public string $name;

  public function __construct(shape(
    ?'ami_id' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->ami_id = $s['ami_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type CompatibleImageList = vec<CompatibleImage>;

class CreateAddressRequest {
  public ?Address $address;

  public function __construct(shape(
    ?'address' => ?Address,
  ) $s = shape()) {
    $this->address = $s['address'] ?? null;
  }
}

class CreateAddressResult {
  public string $address_id;

  public function __construct(shape(
    ?'address_id' => string,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
  }
}

class CreateClusterRequest {
  public ?AddressId $address_id;
  public string $description;
  public ?AddressId $forwarding_address_id;
  public ?JobType $job_type;
  public ?KmsKeyARN $kms_key_arn;
  public ?Notification $notification;
  public ?JobResource $resources;
  public ?RoleARN $role_arn;
  public ?ShippingOption $shipping_option;
  public ?SnowballType $snowball_type;
  public ?TaxDocuments $tax_documents;

  public function __construct(shape(
    ?'address_id' => ?AddressId,
    ?'description' => string,
    ?'forwarding_address_id' => ?AddressId,
    ?'job_type' => ?JobType,
    ?'kms_key_arn' => ?KmsKeyARN,
    ?'notification' => ?Notification,
    ?'resources' => ?JobResource,
    ?'role_arn' => ?RoleARN,
    ?'shipping_option' => ?ShippingOption,
    ?'snowball_type' => ?SnowballType,
    ?'tax_documents' => ?TaxDocuments,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->forwarding_address_id = $s['forwarding_address_id'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->resources = $s['resources'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->shipping_option = $s['shipping_option'] ?? '';
    $this->snowball_type = $s['snowball_type'] ?? '';
    $this->tax_documents = $s['tax_documents'] ?? null;
  }
}

class CreateClusterResult {
  public ?ClusterId $cluster_id;

  public function __construct(shape(
    ?'cluster_id' => ?ClusterId,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
  }
}

class CreateJobRequest {
  public ?AddressId $address_id;
  public ?ClusterId $cluster_id;
  public string $description;
  public ?AddressId $forwarding_address_id;
  public ?JobType $job_type;
  public ?KmsKeyARN $kms_key_arn;
  public ?Notification $notification;
  public ?JobResource $resources;
  public ?RoleARN $role_arn;
  public ?ShippingOption $shipping_option;
  public ?SnowballCapacity $snowball_capacity_preference;
  public ?SnowballType $snowball_type;
  public ?TaxDocuments $tax_documents;

  public function __construct(shape(
    ?'address_id' => ?AddressId,
    ?'cluster_id' => ?ClusterId,
    ?'description' => string,
    ?'forwarding_address_id' => ?AddressId,
    ?'job_type' => ?JobType,
    ?'kms_key_arn' => ?KmsKeyARN,
    ?'notification' => ?Notification,
    ?'resources' => ?JobResource,
    ?'role_arn' => ?RoleARN,
    ?'shipping_option' => ?ShippingOption,
    ?'snowball_capacity_preference' => ?SnowballCapacity,
    ?'snowball_type' => ?SnowballType,
    ?'tax_documents' => ?TaxDocuments,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->forwarding_address_id = $s['forwarding_address_id'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->resources = $s['resources'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->shipping_option = $s['shipping_option'] ?? '';
    $this->snowball_capacity_preference = $s['snowball_capacity_preference'] ?? '';
    $this->snowball_type = $s['snowball_type'] ?? '';
    $this->tax_documents = $s['tax_documents'] ?? null;
  }
}

class CreateJobResult {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class DataTransfer {
  public ?Long $bytes_transferred;
  public ?Long $objects_transferred;
  public ?Long $total_bytes;
  public ?Long $total_objects;

  public function __construct(shape(
    ?'bytes_transferred' => ?Long,
    ?'objects_transferred' => ?Long,
    ?'total_bytes' => ?Long,
    ?'total_objects' => ?Long,
  ) $s = shape()) {
    $this->bytes_transferred = $s['bytes_transferred'] ?? 0;
    $this->objects_transferred = $s['objects_transferred'] ?? 0;
    $this->total_bytes = $s['total_bytes'] ?? 0;
    $this->total_objects = $s['total_objects'] ?? 0;
  }
}

class DescribeAddressRequest {
  public ?AddressId $address_id;

  public function __construct(shape(
    ?'address_id' => ?AddressId,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
  }
}

class DescribeAddressResult {
  public ?Address $address;

  public function __construct(shape(
    ?'address' => ?Address,
  ) $s = shape()) {
    $this->address = $s['address'] ?? null;
  }
}

class DescribeAddressesRequest {
  public ?ListLimit $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?ListLimit,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAddressesResult {
  public ?AddressList $addresses;
  public string $next_token;

  public function __construct(shape(
    ?'addresses' => ?AddressList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->addresses = $s['addresses'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClusterRequest {
  public ?ClusterId $cluster_id;

  public function __construct(shape(
    ?'cluster_id' => ?ClusterId,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
  }
}

class DescribeClusterResult {
  public ?ClusterMetadata $cluster_metadata;

  public function __construct(shape(
    ?'cluster_metadata' => ?ClusterMetadata,
  ) $s = shape()) {
    $this->cluster_metadata = $s['cluster_metadata'] ?? null;
  }
}

class DescribeJobRequest {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class DescribeJobResult {
  public ?JobMetadata $job_metadata;
  public ?JobMetadataList $sub_job_metadata;

  public function __construct(shape(
    ?'job_metadata' => ?JobMetadata,
    ?'sub_job_metadata' => ?JobMetadataList,
  ) $s = shape()) {
    $this->job_metadata = $s['job_metadata'] ?? null;
    $this->sub_job_metadata = $s['sub_job_metadata'] ?? vec[];
  }
}

class Ec2AmiResource {
  public ?AmiId $ami_id;
  public string $snowball_ami_id;

  public function __construct(shape(
    ?'ami_id' => ?AmiId,
    ?'snowball_ami_id' => string,
  ) $s = shape()) {
    $this->ami_id = $s['ami_id'] ?? '';
    $this->snowball_ami_id = $s['snowball_ami_id'] ?? '';
  }
}

type Ec2AmiResourceList = vec<Ec2AmiResource>;

class Ec2RequestFailedException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class EventTriggerDefinition {
  public ?ResourceARN $event_resource_arn;

  public function __construct(shape(
    ?'event_resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->event_resource_arn = $s['event_resource_arn'] ?? '';
  }
}

type EventTriggerDefinitionList = vec<EventTriggerDefinition>;

type GSTIN = string;

class GetJobManifestRequest {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetJobManifestResult {
  public string $manifest_uri;

  public function __construct(shape(
    ?'manifest_uri' => string,
  ) $s = shape()) {
    $this->manifest_uri = $s['manifest_uri'] ?? '';
  }
}

class GetJobUnlockCodeRequest {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetJobUnlockCodeResult {
  public string $unlock_code;

  public function __construct(shape(
    ?'unlock_code' => string,
  ) $s = shape()) {
    $this->unlock_code = $s['unlock_code'] ?? '';
  }
}

class GetSnowballUsageRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetSnowballUsageResult {
  public int $snowball_limit;
  public int $snowballs_in_use;

  public function __construct(shape(
    ?'snowball_limit' => int,
    ?'snowballs_in_use' => int,
  ) $s = shape()) {
    $this->snowball_limit = $s['snowball_limit'] ?? 0;
    $this->snowballs_in_use = $s['snowballs_in_use'] ?? 0;
  }
}

class GetSoftwareUpdatesRequest {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetSoftwareUpdatesResult {
  public string $updates_uri;

  public function __construct(shape(
    ?'updates_uri' => string,
  ) $s = shape()) {
    $this->updates_uri = $s['updates_uri'] ?? '';
  }
}

class INDTaxDocuments {
  public ?GSTIN $gstin;

  public function __construct(shape(
    ?'gstin' => ?GSTIN,
  ) $s = shape()) {
    $this->gstin = $s['gstin'] ?? '';
  }
}

type Integer = int;

class InvalidAddressException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputCombinationException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidJobStateException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidResourceException {
  public string $message;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type JobId = string;

class JobListEntry {
  public ?Timestamp $creation_date;
  public string $description;
  public bool $is_master;
  public string $job_id;
  public ?JobState $job_state;
  public ?JobType $job_type;
  public ?SnowballType $snowball_type;

  public function __construct(shape(
    ?'creation_date' => ?Timestamp,
    ?'description' => string,
    ?'is_master' => bool,
    ?'job_id' => string,
    ?'job_state' => ?JobState,
    ?'job_type' => ?JobType,
    ?'snowball_type' => ?SnowballType,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->is_master = $s['is_master'] ?? false;
    $this->job_id = $s['job_id'] ?? '';
    $this->job_state = $s['job_state'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->snowball_type = $s['snowball_type'] ?? '';
  }
}

type JobListEntryList = vec<JobListEntry>;

class JobLogs {
  public string $job_completion_report_uri;
  public string $job_failure_log_uri;
  public string $job_success_log_uri;

  public function __construct(shape(
    ?'job_completion_report_uri' => string,
    ?'job_failure_log_uri' => string,
    ?'job_success_log_uri' => string,
  ) $s = shape()) {
    $this->job_completion_report_uri = $s['job_completion_report_uri'] ?? '';
    $this->job_failure_log_uri = $s['job_failure_log_uri'] ?? '';
    $this->job_success_log_uri = $s['job_success_log_uri'] ?? '';
  }
}

class JobMetadata {
  public ?AddressId $address_id;
  public string $cluster_id;
  public ?Timestamp $creation_date;
  public ?DataTransfer $data_transfer_progress;
  public string $description;
  public ?AddressId $forwarding_address_id;
  public string $job_id;
  public ?JobLogs $job_log_info;
  public ?JobState $job_state;
  public ?JobType $job_type;
  public ?KmsKeyARN $kms_key_arn;
  public ?Notification $notification;
  public ?JobResource $resources;
  public ?RoleARN $role_arn;
  public ?ShippingDetails $shipping_details;
  public ?SnowballCapacity $snowball_capacity_preference;
  public ?SnowballType $snowball_type;
  public ?TaxDocuments $tax_documents;

  public function __construct(shape(
    ?'address_id' => ?AddressId,
    ?'cluster_id' => string,
    ?'creation_date' => ?Timestamp,
    ?'data_transfer_progress' => ?DataTransfer,
    ?'description' => string,
    ?'forwarding_address_id' => ?AddressId,
    ?'job_id' => string,
    ?'job_log_info' => ?JobLogs,
    ?'job_state' => ?JobState,
    ?'job_type' => ?JobType,
    ?'kms_key_arn' => ?KmsKeyARN,
    ?'notification' => ?Notification,
    ?'resources' => ?JobResource,
    ?'role_arn' => ?RoleARN,
    ?'shipping_details' => ?ShippingDetails,
    ?'snowball_capacity_preference' => ?SnowballCapacity,
    ?'snowball_type' => ?SnowballType,
    ?'tax_documents' => ?TaxDocuments,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->data_transfer_progress = $s['data_transfer_progress'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->forwarding_address_id = $s['forwarding_address_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->job_log_info = $s['job_log_info'] ?? null;
    $this->job_state = $s['job_state'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->resources = $s['resources'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->shipping_details = $s['shipping_details'] ?? null;
    $this->snowball_capacity_preference = $s['snowball_capacity_preference'] ?? '';
    $this->snowball_type = $s['snowball_type'] ?? '';
    $this->tax_documents = $s['tax_documents'] ?? null;
  }
}

type JobMetadataList = vec<JobMetadata>;

class JobResource {
  public ?Ec2AmiResourceList $ec_2_ami_resources;
  public ?LambdaResourceList $lambda_resources;
  public ?S3ResourceList $s_3_resources;

  public function __construct(shape(
    ?'ec_2_ami_resources' => ?Ec2AmiResourceList,
    ?'lambda_resources' => ?LambdaResourceList,
    ?'s_3_resources' => ?S3ResourceList,
  ) $s = shape()) {
    $this->ec_2_ami_resources = $s['ec_2_ami_resources'] ?? vec[];
    $this->lambda_resources = $s['lambda_resources'] ?? vec[];
    $this->s_3_resources = $s['s_3_resources'] ?? vec[];
  }
}

type JobState = string;

type JobStateList = vec<JobState>;

type JobType = string;

class KMSRequestFailedException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KeyRange {
  public string $begin_marker;
  public string $end_marker;

  public function __construct(shape(
    ?'begin_marker' => string,
    ?'end_marker' => string,
  ) $s = shape()) {
    $this->begin_marker = $s['begin_marker'] ?? '';
    $this->end_marker = $s['end_marker'] ?? '';
  }
}

type KmsKeyARN = string;

class LambdaResource {
  public ?EventTriggerDefinitionList $event_triggers;
  public ?ResourceARN $lambda_arn;

  public function __construct(shape(
    ?'event_triggers' => ?EventTriggerDefinitionList,
    ?'lambda_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->event_triggers = $s['event_triggers'] ?? vec[];
    $this->lambda_arn = $s['lambda_arn'] ?? '';
  }
}

type LambdaResourceList = vec<LambdaResource>;

class ListClusterJobsRequest {
  public ?ClusterId $cluster_id;
  public ?ListLimit $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'cluster_id' => ?ClusterId,
    ?'max_results' => ?ListLimit,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListClusterJobsResult {
  public ?JobListEntryList $job_list_entries;
  public string $next_token;

  public function __construct(shape(
    ?'job_list_entries' => ?JobListEntryList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->job_list_entries = $s['job_list_entries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListClustersRequest {
  public ?ListLimit $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?ListLimit,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListClustersResult {
  public ?ClusterListEntryList $cluster_list_entries;
  public string $next_token;

  public function __construct(shape(
    ?'cluster_list_entries' => ?ClusterListEntryList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_list_entries = $s['cluster_list_entries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCompatibleImagesRequest {
  public ?ListLimit $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?ListLimit,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCompatibleImagesResult {
  public ?CompatibleImageList $compatible_images;
  public string $next_token;

  public function __construct(shape(
    ?'compatible_images' => ?CompatibleImageList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->compatible_images = $s['compatible_images'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsRequest {
  public ?ListLimit $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?ListLimit,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsResult {
  public ?JobListEntryList $job_list_entries;
  public string $next_token;

  public function __construct(shape(
    ?'job_list_entries' => ?JobListEntryList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->job_list_entries = $s['job_list_entries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListLimit = int;

type Long = int;

class Notification {
  public ?JobStateList $job_states_to_notify;
  public bool $notify_all;
  public ?SnsTopicARN $sns_topic_arn;

  public function __construct(shape(
    ?'job_states_to_notify' => ?JobStateList,
    ?'notify_all' => bool,
    ?'sns_topic_arn' => ?SnsTopicARN,
  ) $s = shape()) {
    $this->job_states_to_notify = $s['job_states_to_notify'] ?? vec[];
    $this->notify_all = $s['notify_all'] ?? false;
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
  }
}

type ResourceARN = string;

type RoleARN = string;

class S3Resource {
  public ?ResourceARN $bucket_arn;
  public ?KeyRange $key_range;

  public function __construct(shape(
    ?'bucket_arn' => ?ResourceARN,
    ?'key_range' => ?KeyRange,
  ) $s = shape()) {
    $this->bucket_arn = $s['bucket_arn'] ?? '';
    $this->key_range = $s['key_range'] ?? null;
  }
}

type S3ResourceList = vec<S3Resource>;

class Shipment {
  public string $status;
  public string $tracking_number;

  public function __construct(shape(
    ?'status' => string,
    ?'tracking_number' => string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
    $this->tracking_number = $s['tracking_number'] ?? '';
  }
}

class ShippingDetails {
  public ?Shipment $inbound_shipment;
  public ?Shipment $outbound_shipment;
  public ?ShippingOption $shipping_option;

  public function __construct(shape(
    ?'inbound_shipment' => ?Shipment,
    ?'outbound_shipment' => ?Shipment,
    ?'shipping_option' => ?ShippingOption,
  ) $s = shape()) {
    $this->inbound_shipment = $s['inbound_shipment'] ?? null;
    $this->outbound_shipment = $s['outbound_shipment'] ?? null;
    $this->shipping_option = $s['shipping_option'] ?? '';
  }
}

type ShippingOption = string;

type SnowballCapacity = string;

type SnowballType = string;

type SnsTopicARN = string;

type String = string;

class TaxDocuments {
  public ?INDTaxDocuments $ind;

  public function __construct(shape(
    ?'ind' => ?INDTaxDocuments,
  ) $s = shape()) {
    $this->ind = $s['ind'] ?? null;
  }
}

type Timestamp = int;

class UnsupportedAddressException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateClusterRequest {
  public ?AddressId $address_id;
  public ?ClusterId $cluster_id;
  public string $description;
  public ?AddressId $forwarding_address_id;
  public ?Notification $notification;
  public ?JobResource $resources;
  public ?RoleARN $role_arn;
  public ?ShippingOption $shipping_option;

  public function __construct(shape(
    ?'address_id' => ?AddressId,
    ?'cluster_id' => ?ClusterId,
    ?'description' => string,
    ?'forwarding_address_id' => ?AddressId,
    ?'notification' => ?Notification,
    ?'resources' => ?JobResource,
    ?'role_arn' => ?RoleARN,
    ?'shipping_option' => ?ShippingOption,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->forwarding_address_id = $s['forwarding_address_id'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->resources = $s['resources'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->shipping_option = $s['shipping_option'] ?? '';
  }
}

class UpdateClusterResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateJobRequest {
  public ?AddressId $address_id;
  public string $description;
  public ?AddressId $forwarding_address_id;
  public ?JobId $job_id;
  public ?Notification $notification;
  public ?JobResource $resources;
  public ?RoleARN $role_arn;
  public ?ShippingOption $shipping_option;
  public ?SnowballCapacity $snowball_capacity_preference;

  public function __construct(shape(
    ?'address_id' => ?AddressId,
    ?'description' => string,
    ?'forwarding_address_id' => ?AddressId,
    ?'job_id' => ?JobId,
    ?'notification' => ?Notification,
    ?'resources' => ?JobResource,
    ?'role_arn' => ?RoleARN,
    ?'shipping_option' => ?ShippingOption,
    ?'snowball_capacity_preference' => ?SnowballCapacity,
  ) $s = shape()) {
    $this->address_id = $s['address_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->forwarding_address_id = $s['forwarding_address_id'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->resources = $s['resources'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->shipping_option = $s['shipping_option'] ?? '';
    $this->snowball_capacity_preference = $s['snowball_capacity_preference'] ?? '';
  }
}

class UpdateJobResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

