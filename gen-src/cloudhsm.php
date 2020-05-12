<?hh // strict
namespace slack\aws\cloudhsm;

interface CloudHSM {
  public function AddTagsToResource(AddTagsToResourceRequest $in): Awaitable<\Errors\Result<AddTagsToResourceResponse>>;
  public function CreateHapg(CreateHapgRequest $in): Awaitable<\Errors\Result<CreateHapgResponse>>;
  public function CreateHsm(CreateHsmRequest $in): Awaitable<\Errors\Result<CreateHsmResponse>>;
  public function CreateLunaClient(CreateLunaClientRequest $in): Awaitable<\Errors\Result<CreateLunaClientResponse>>;
  public function DeleteHapg(DeleteHapgRequest $in): Awaitable<\Errors\Result<DeleteHapgResponse>>;
  public function DeleteHsm(DeleteHsmRequest $in): Awaitable<\Errors\Result<DeleteHsmResponse>>;
  public function DeleteLunaClient(DeleteLunaClientRequest $in): Awaitable<\Errors\Result<DeleteLunaClientResponse>>;
  public function DescribeHapg(DescribeHapgRequest $in): Awaitable<\Errors\Result<DescribeHapgResponse>>;
  public function DescribeHsm(DescribeHsmRequest $in): Awaitable<\Errors\Result<DescribeHsmResponse>>;
  public function DescribeLunaClient(DescribeLunaClientRequest $in): Awaitable<\Errors\Result<DescribeLunaClientResponse>>;
  public function GetConfig(GetConfigRequest $in): Awaitable<\Errors\Result<GetConfigResponse>>;
  public function ListAvailableZones(ListAvailableZonesRequest $in): Awaitable<\Errors\Result<ListAvailableZonesResponse>>;
  public function ListHapgs(ListHapgsRequest $in): Awaitable<\Errors\Result<ListHapgsResponse>>;
  public function ListHsms(ListHsmsRequest $in): Awaitable<\Errors\Result<ListHsmsResponse>>;
  public function ListLunaClients(ListLunaClientsRequest $in): Awaitable<\Errors\Result<ListLunaClientsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyHapg(ModifyHapgRequest $in): Awaitable<\Errors\Result<ModifyHapgResponse>>;
  public function ModifyHsm(ModifyHsmRequest $in): Awaitable<\Errors\Result<ModifyHsmResponse>>;
  public function ModifyLunaClient(ModifyLunaClientRequest $in): Awaitable<\Errors\Result<ModifyLunaClientResponse>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest $in): Awaitable<\Errors\Result<RemoveTagsFromResourceResponse>>;
}

type AZ = string;

type AZList = vec<AZ>;

class AddTagsToResourceRequest {
  public string $resource_arn;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class AddTagsToResourceResponse {
  public string $status;

  public function __construct(shape(
    ?'status' => string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

type Boolean = bool;

type Certificate = string;

type CertificateFingerprint = string;

type ClientArn = string;

type ClientLabel = string;

type ClientList = vec<ClientArn>;

type ClientToken = string;

type ClientVersion = string;

class CloudHsmInternalException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CloudHsmObjectState = string;

class CloudHsmServiceException {
  public string $message;
  public bool $retryable;

  public function __construct(shape(
    ?'message' => string,
    ?'retryable' => bool,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retryable = $s['retryable'] ?? false;
  }
}

class CreateHapgRequest {
  public ?Label $label;

  public function __construct(shape(
    ?'label' => ?Label,
  ) $s = shape()) {
    $this->label = $s['label'] ?? '';
  }
}

class CreateHapgResponse {
  public ?HapgArn $hapg_arn;

  public function __construct(shape(
    ?'hapg_arn' => ?HapgArn,
  ) $s = shape()) {
    $this->hapg_arn = $s['hapg_arn'] ?? '';
  }
}

class CreateHsmRequest {
  public ?ClientToken $client_token;
  public ?IpAddress $eni_ip;
  public ?ExternalId $external_id;
  public ?IamRoleArn $iam_role_arn;
  public ?SshKey $ssh_key;
  public ?SubnetId $subnet_id;
  public ?SubscriptionType $subscription_type;
  public ?IpAddress $syslog_ip;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'eni_ip' => ?IpAddress,
    ?'external_id' => ?ExternalId,
    ?'iam_role_arn' => ?IamRoleArn,
    ?'ssh_key' => ?SshKey,
    ?'subnet_id' => ?SubnetId,
    ?'subscription_type' => ?SubscriptionType,
    ?'syslog_ip' => ?IpAddress,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->eni_ip = $s['eni_ip'] ?? '';
    $this->external_id = $s['external_id'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->ssh_key = $s['ssh_key'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->subscription_type = $s['subscription_type'] ?? '';
    $this->syslog_ip = $s['syslog_ip'] ?? '';
  }
}

class CreateHsmResponse {
  public ?HsmArn $hsm_arn;

  public function __construct(shape(
    ?'hsm_arn' => ?HsmArn,
  ) $s = shape()) {
    $this->hsm_arn = $s['hsm_arn'] ?? '';
  }
}

class CreateLunaClientRequest {
  public ?Certificate $certificate;
  public ?ClientLabel $label;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
    ?'label' => ?ClientLabel,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
    $this->label = $s['label'] ?? '';
  }
}

class CreateLunaClientResponse {
  public ?ClientArn $client_arn;

  public function __construct(shape(
    ?'client_arn' => ?ClientArn,
  ) $s = shape()) {
    $this->client_arn = $s['client_arn'] ?? '';
  }
}

class DeleteHapgRequest {
  public ?HapgArn $hapg_arn;

  public function __construct(shape(
    ?'hapg_arn' => ?HapgArn,
  ) $s = shape()) {
    $this->hapg_arn = $s['hapg_arn'] ?? '';
  }
}

class DeleteHapgResponse {
  public string $status;

  public function __construct(shape(
    ?'status' => string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class DeleteHsmRequest {
  public ?HsmArn $hsm_arn;

  public function __construct(shape(
    ?'hsm_arn' => ?HsmArn,
  ) $s = shape()) {
    $this->hsm_arn = $s['hsm_arn'] ?? '';
  }
}

class DeleteHsmResponse {
  public string $status;

  public function __construct(shape(
    ?'status' => string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class DeleteLunaClientRequest {
  public ?ClientArn $client_arn;

  public function __construct(shape(
    ?'client_arn' => ?ClientArn,
  ) $s = shape()) {
    $this->client_arn = $s['client_arn'] ?? '';
  }
}

class DeleteLunaClientResponse {
  public string $status;

  public function __construct(shape(
    ?'status' => string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class DescribeHapgRequest {
  public ?HapgArn $hapg_arn;

  public function __construct(shape(
    ?'hapg_arn' => ?HapgArn,
  ) $s = shape()) {
    $this->hapg_arn = $s['hapg_arn'] ?? '';
  }
}

class DescribeHapgResponse {
  public ?HapgArn $hapg_arn;
  public string $hapg_serial;
  public ?HsmList $hsms_last_action_failed;
  public ?HsmList $hsms_pending_deletion;
  public ?HsmList $hsms_pending_registration;
  public ?Label $label;
  public ?Timestamp $last_modified_timestamp;
  public ?PartitionSerialList $partition_serial_list;
  public ?CloudHsmObjectState $state;

  public function __construct(shape(
    ?'hapg_arn' => ?HapgArn,
    ?'hapg_serial' => string,
    ?'hsms_last_action_failed' => ?HsmList,
    ?'hsms_pending_deletion' => ?HsmList,
    ?'hsms_pending_registration' => ?HsmList,
    ?'label' => ?Label,
    ?'last_modified_timestamp' => ?Timestamp,
    ?'partition_serial_list' => ?PartitionSerialList,
    ?'state' => ?CloudHsmObjectState,
  ) $s = shape()) {
    $this->hapg_arn = $s['hapg_arn'] ?? '';
    $this->hapg_serial = $s['hapg_serial'] ?? '';
    $this->hsms_last_action_failed = $s['hsms_last_action_failed'] ?? vec[];
    $this->hsms_pending_deletion = $s['hsms_pending_deletion'] ?? vec[];
    $this->hsms_pending_registration = $s['hsms_pending_registration'] ?? vec[];
    $this->label = $s['label'] ?? '';
    $this->last_modified_timestamp = $s['last_modified_timestamp'] ?? '';
    $this->partition_serial_list = $s['partition_serial_list'] ?? vec[];
    $this->state = $s['state'] ?? '';
  }
}

class DescribeHsmRequest {
  public ?HsmArn $hsm_arn;
  public ?HsmSerialNumber $hsm_serial_number;

  public function __construct(shape(
    ?'hsm_arn' => ?HsmArn,
    ?'hsm_serial_number' => ?HsmSerialNumber,
  ) $s = shape()) {
    $this->hsm_arn = $s['hsm_arn'] ?? '';
    $this->hsm_serial_number = $s['hsm_serial_number'] ?? '';
  }
}

class DescribeHsmResponse {
  public ?AZ $availability_zone;
  public ?EniId $eni_id;
  public ?IpAddress $eni_ip;
  public ?HsmArn $hsm_arn;
  public string $hsm_type;
  public ?IamRoleArn $iam_role_arn;
  public ?PartitionList $partitions;
  public ?HsmSerialNumber $serial_number;
  public ?Timestamp $server_cert_last_updated;
  public string $server_cert_uri;
  public string $software_version;
  public ?Timestamp $ssh_key_last_updated;
  public ?SshKey $ssh_public_key;
  public ?HsmStatus $status;
  public string $status_details;
  public ?SubnetId $subnet_id;
  public ?Timestamp $subscription_end_date;
  public ?Timestamp $subscription_start_date;
  public ?SubscriptionType $subscription_type;
  public string $vendor_name;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'availability_zone' => ?AZ,
    ?'eni_id' => ?EniId,
    ?'eni_ip' => ?IpAddress,
    ?'hsm_arn' => ?HsmArn,
    ?'hsm_type' => string,
    ?'iam_role_arn' => ?IamRoleArn,
    ?'partitions' => ?PartitionList,
    ?'serial_number' => ?HsmSerialNumber,
    ?'server_cert_last_updated' => ?Timestamp,
    ?'server_cert_uri' => string,
    ?'software_version' => string,
    ?'ssh_key_last_updated' => ?Timestamp,
    ?'ssh_public_key' => ?SshKey,
    ?'status' => ?HsmStatus,
    ?'status_details' => string,
    ?'subnet_id' => ?SubnetId,
    ?'subscription_end_date' => ?Timestamp,
    ?'subscription_start_date' => ?Timestamp,
    ?'subscription_type' => ?SubscriptionType,
    ?'vendor_name' => string,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->eni_id = $s['eni_id'] ?? '';
    $this->eni_ip = $s['eni_ip'] ?? '';
    $this->hsm_arn = $s['hsm_arn'] ?? '';
    $this->hsm_type = $s['hsm_type'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->partitions = $s['partitions'] ?? vec[];
    $this->serial_number = $s['serial_number'] ?? '';
    $this->server_cert_last_updated = $s['server_cert_last_updated'] ?? '';
    $this->server_cert_uri = $s['server_cert_uri'] ?? '';
    $this->software_version = $s['software_version'] ?? '';
    $this->ssh_key_last_updated = $s['ssh_key_last_updated'] ?? '';
    $this->ssh_public_key = $s['ssh_public_key'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_details = $s['status_details'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->subscription_end_date = $s['subscription_end_date'] ?? '';
    $this->subscription_start_date = $s['subscription_start_date'] ?? '';
    $this->subscription_type = $s['subscription_type'] ?? '';
    $this->vendor_name = $s['vendor_name'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DescribeLunaClientRequest {
  public ?CertificateFingerprint $certificate_fingerprint;
  public ?ClientArn $client_arn;

  public function __construct(shape(
    ?'certificate_fingerprint' => ?CertificateFingerprint,
    ?'client_arn' => ?ClientArn,
  ) $s = shape()) {
    $this->certificate_fingerprint = $s['certificate_fingerprint'] ?? '';
    $this->client_arn = $s['client_arn'] ?? '';
  }
}

class DescribeLunaClientResponse {
  public ?Certificate $certificate;
  public ?CertificateFingerprint $certificate_fingerprint;
  public ?ClientArn $client_arn;
  public ?Label $label;
  public ?Timestamp $last_modified_timestamp;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
    ?'certificate_fingerprint' => ?CertificateFingerprint,
    ?'client_arn' => ?ClientArn,
    ?'label' => ?Label,
    ?'last_modified_timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
    $this->certificate_fingerprint = $s['certificate_fingerprint'] ?? '';
    $this->client_arn = $s['client_arn'] ?? '';
    $this->label = $s['label'] ?? '';
    $this->last_modified_timestamp = $s['last_modified_timestamp'] ?? '';
  }
}

type EniId = string;

type ExternalId = string;

class GetConfigRequest {
  public ?ClientArn $client_arn;
  public ?ClientVersion $client_version;
  public ?HapgList $hapg_list;

  public function __construct(shape(
    ?'client_arn' => ?ClientArn,
    ?'client_version' => ?ClientVersion,
    ?'hapg_list' => ?HapgList,
  ) $s = shape()) {
    $this->client_arn = $s['client_arn'] ?? '';
    $this->client_version = $s['client_version'] ?? '';
    $this->hapg_list = $s['hapg_list'] ?? vec[];
  }
}

class GetConfigResponse {
  public string $config_cred;
  public string $config_file;
  public string $config_type;

  public function __construct(shape(
    ?'config_cred' => string,
    ?'config_file' => string,
    ?'config_type' => string,
  ) $s = shape()) {
    $this->config_cred = $s['config_cred'] ?? '';
    $this->config_file = $s['config_file'] ?? '';
    $this->config_type = $s['config_type'] ?? '';
  }
}

type HapgArn = string;

type HapgList = vec<HapgArn>;

type HsmArn = string;

type HsmList = vec<HsmArn>;

type HsmSerialNumber = string;

type HsmStatus = string;

type IamRoleArn = string;

class InvalidRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type IpAddress = string;

type Label = string;

class ListAvailableZonesRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListAvailableZonesResponse {
  public ?AZList $az_list;

  public function __construct(shape(
    ?'az_list' => ?AZList,
  ) $s = shape()) {
    $this->az_list = $s['az_list'] ?? vec[];
  }
}

class ListHapgsRequest {
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHapgsResponse {
  public ?HapgList $hapg_list;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'hapg_list' => ?HapgList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->hapg_list = $s['hapg_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHsmsRequest {
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHsmsResponse {
  public ?HsmList $hsm_list;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'hsm_list' => ?HsmList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->hsm_list = $s['hsm_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListLunaClientsRequest {
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListLunaClientsResponse {
  public ?ClientList $client_list;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'client_list' => ?ClientList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->client_list = $s['client_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class ModifyHapgRequest {
  public ?HapgArn $hapg_arn;
  public ?Label $label;
  public ?PartitionSerialList $partition_serial_list;

  public function __construct(shape(
    ?'hapg_arn' => ?HapgArn,
    ?'label' => ?Label,
    ?'partition_serial_list' => ?PartitionSerialList,
  ) $s = shape()) {
    $this->hapg_arn = $s['hapg_arn'] ?? '';
    $this->label = $s['label'] ?? '';
    $this->partition_serial_list = $s['partition_serial_list'] ?? vec[];
  }
}

class ModifyHapgResponse {
  public ?HapgArn $hapg_arn;

  public function __construct(shape(
    ?'hapg_arn' => ?HapgArn,
  ) $s = shape()) {
    $this->hapg_arn = $s['hapg_arn'] ?? '';
  }
}

class ModifyHsmRequest {
  public ?IpAddress $eni_ip;
  public ?ExternalId $external_id;
  public ?HsmArn $hsm_arn;
  public ?IamRoleArn $iam_role_arn;
  public ?SubnetId $subnet_id;
  public ?IpAddress $syslog_ip;

  public function __construct(shape(
    ?'eni_ip' => ?IpAddress,
    ?'external_id' => ?ExternalId,
    ?'hsm_arn' => ?HsmArn,
    ?'iam_role_arn' => ?IamRoleArn,
    ?'subnet_id' => ?SubnetId,
    ?'syslog_ip' => ?IpAddress,
  ) $s = shape()) {
    $this->eni_ip = $s['eni_ip'] ?? '';
    $this->external_id = $s['external_id'] ?? '';
    $this->hsm_arn = $s['hsm_arn'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->syslog_ip = $s['syslog_ip'] ?? '';
  }
}

class ModifyHsmResponse {
  public ?HsmArn $hsm_arn;

  public function __construct(shape(
    ?'hsm_arn' => ?HsmArn,
  ) $s = shape()) {
    $this->hsm_arn = $s['hsm_arn'] ?? '';
  }
}

class ModifyLunaClientRequest {
  public ?Certificate $certificate;
  public ?ClientArn $client_arn;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
    ?'client_arn' => ?ClientArn,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
    $this->client_arn = $s['client_arn'] ?? '';
  }
}

class ModifyLunaClientResponse {
  public ?ClientArn $client_arn;

  public function __construct(shape(
    ?'client_arn' => ?ClientArn,
  ) $s = shape()) {
    $this->client_arn = $s['client_arn'] ?? '';
  }
}

type PaginationToken = string;

type PartitionArn = string;

type PartitionList = vec<PartitionArn>;

type PartitionSerial = string;

type PartitionSerialList = vec<PartitionSerial>;

class RemoveTagsFromResourceRequest {
  public string $resource_arn;
  public ?TagKeyList $tag_key_list;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tag_key_list' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_key_list = $s['tag_key_list'] ?? vec[];
  }
}

class RemoveTagsFromResourceResponse {
  public string $status;

  public function __construct(shape(
    ?'status' => string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

type SshKey = string;

type String = string;

type SubnetId = string;

type SubscriptionType = string;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagValue = string;

type Timestamp = string;

type VpcId = string;

