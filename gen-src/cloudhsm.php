<?hh // strict
namespace slack\aws\cloudhsm;

interface CloudHSM {
  public function AddTagsToResource(AddTagsToResourceRequest): Awaitable<Errors\Result<AddTagsToResourceResponse>>;
  public function CreateHapg(CreateHapgRequest): Awaitable<Errors\Result<CreateHapgResponse>>;
  public function CreateHsm(CreateHsmRequest): Awaitable<Errors\Result<CreateHsmResponse>>;
  public function CreateLunaClient(CreateLunaClientRequest): Awaitable<Errors\Result<CreateLunaClientResponse>>;
  public function DeleteHapg(DeleteHapgRequest): Awaitable<Errors\Result<DeleteHapgResponse>>;
  public function DeleteHsm(DeleteHsmRequest): Awaitable<Errors\Result<DeleteHsmResponse>>;
  public function DeleteLunaClient(DeleteLunaClientRequest): Awaitable<Errors\Result<DeleteLunaClientResponse>>;
  public function DescribeHapg(DescribeHapgRequest): Awaitable<Errors\Result<DescribeHapgResponse>>;
  public function DescribeHsm(DescribeHsmRequest): Awaitable<Errors\Result<DescribeHsmResponse>>;
  public function DescribeLunaClient(DescribeLunaClientRequest): Awaitable<Errors\Result<DescribeLunaClientResponse>>;
  public function GetConfig(GetConfigRequest): Awaitable<Errors\Result<GetConfigResponse>>;
  public function ListAvailableZones(ListAvailableZonesRequest): Awaitable<Errors\Result<ListAvailableZonesResponse>>;
  public function ListHapgs(ListHapgsRequest): Awaitable<Errors\Result<ListHapgsResponse>>;
  public function ListHsms(ListHsmsRequest): Awaitable<Errors\Result<ListHsmsResponse>>;
  public function ListLunaClients(ListLunaClientsRequest): Awaitable<Errors\Result<ListLunaClientsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyHapg(ModifyHapgRequest): Awaitable<Errors\Result<ModifyHapgResponse>>;
  public function ModifyHsm(ModifyHsmRequest): Awaitable<Errors\Result<ModifyHsmResponse>>;
  public function ModifyLunaClient(ModifyLunaClientRequest): Awaitable<Errors\Result<ModifyLunaClientResponse>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest): Awaitable<Errors\Result<RemoveTagsFromResourceResponse>>;
}

type AZ = string;

type AZList = vec<AZ>;

class AddTagsToResourceRequest {
  public string $resource_arn;
  public TagList $tag_list;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_list = $tag_list ?? [];
  }
}

class AddTagsToResourceResponse {
  public string $status;

  public function __construct(shape(
  ?'status' => string,
  ) $s = shape()) {
    $this->status = $status ?? "";
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
  public boolean $retryable;

  public function __construct(shape(
  ?'message' => string,
  ?'retryable' => boolean,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->retryable = $retryable ?? false;
  }
}

class CreateHapgRequest {
  public Label $label;

  public function __construct(shape(
  ?'label' => Label,
  ) $s = shape()) {
    $this->label = $label ?? "";
  }
}

class CreateHapgResponse {
  public HapgArn $hapg_arn;

  public function __construct(shape(
  ?'hapg_arn' => HapgArn,
  ) $s = shape()) {
    $this->hapg_arn = $hapg_arn ?? "";
  }
}

class CreateHsmRequest {
  public ClientToken $client_token;
  public IpAddress $eni_ip;
  public ExternalId $external_id;
  public IamRoleArn $iam_role_arn;
  public SshKey $ssh_key;
  public SubnetId $subnet_id;
  public SubscriptionType $subscription_type;
  public IpAddress $syslog_ip;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'eni_ip' => IpAddress,
  ?'external_id' => ExternalId,
  ?'iam_role_arn' => IamRoleArn,
  ?'ssh_key' => SshKey,
  ?'subnet_id' => SubnetId,
  ?'subscription_type' => SubscriptionType,
  ?'syslog_ip' => IpAddress,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->eni_ip = $eni_ip ?? "";
    $this->external_id = $external_id ?? "";
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->ssh_key = $ssh_key ?? "";
    $this->subnet_id = $subnet_id ?? "";
    $this->subscription_type = $subscription_type ?? "";
    $this->syslog_ip = $syslog_ip ?? "";
  }
}

class CreateHsmResponse {
  public HsmArn $hsm_arn;

  public function __construct(shape(
  ?'hsm_arn' => HsmArn,
  ) $s = shape()) {
    $this->hsm_arn = $hsm_arn ?? "";
  }
}

class CreateLunaClientRequest {
  public Certificate $certificate;
  public ClientLabel $label;

  public function __construct(shape(
  ?'certificate' => Certificate,
  ?'label' => ClientLabel,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->label = $label ?? "";
  }
}

class CreateLunaClientResponse {
  public ClientArn $client_arn;

  public function __construct(shape(
  ?'client_arn' => ClientArn,
  ) $s = shape()) {
    $this->client_arn = $client_arn ?? "";
  }
}

class DeleteHapgRequest {
  public HapgArn $hapg_arn;

  public function __construct(shape(
  ?'hapg_arn' => HapgArn,
  ) $s = shape()) {
    $this->hapg_arn = $hapg_arn ?? "";
  }
}

class DeleteHapgResponse {
  public string $status;

  public function __construct(shape(
  ?'status' => string,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

class DeleteHsmRequest {
  public HsmArn $hsm_arn;

  public function __construct(shape(
  ?'hsm_arn' => HsmArn,
  ) $s = shape()) {
    $this->hsm_arn = $hsm_arn ?? "";
  }
}

class DeleteHsmResponse {
  public string $status;

  public function __construct(shape(
  ?'status' => string,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

class DeleteLunaClientRequest {
  public ClientArn $client_arn;

  public function __construct(shape(
  ?'client_arn' => ClientArn,
  ) $s = shape()) {
    $this->client_arn = $client_arn ?? "";
  }
}

class DeleteLunaClientResponse {
  public string $status;

  public function __construct(shape(
  ?'status' => string,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

class DescribeHapgRequest {
  public HapgArn $hapg_arn;

  public function __construct(shape(
  ?'hapg_arn' => HapgArn,
  ) $s = shape()) {
    $this->hapg_arn = $hapg_arn ?? "";
  }
}

class DescribeHapgResponse {
  public HapgArn $hapg_arn;
  public string $hapg_serial;
  public HsmList $hsms_last_action_failed;
  public HsmList $hsms_pending_deletion;
  public HsmList $hsms_pending_registration;
  public Label $label;
  public Timestamp $last_modified_timestamp;
  public PartitionSerialList $partition_serial_list;
  public CloudHsmObjectState $state;

  public function __construct(shape(
  ?'hapg_arn' => HapgArn,
  ?'hapg_serial' => string,
  ?'hsms_last_action_failed' => HsmList,
  ?'hsms_pending_deletion' => HsmList,
  ?'hsms_pending_registration' => HsmList,
  ?'label' => Label,
  ?'last_modified_timestamp' => Timestamp,
  ?'partition_serial_list' => PartitionSerialList,
  ?'state' => CloudHsmObjectState,
  ) $s = shape()) {
    $this->hapg_arn = $hapg_arn ?? "";
    $this->hapg_serial = $hapg_serial ?? "";
    $this->hsms_last_action_failed = $hsms_last_action_failed ?? [];
    $this->hsms_pending_deletion = $hsms_pending_deletion ?? [];
    $this->hsms_pending_registration = $hsms_pending_registration ?? [];
    $this->label = $label ?? "";
    $this->last_modified_timestamp = $last_modified_timestamp ?? "";
    $this->partition_serial_list = $partition_serial_list ?? [];
    $this->state = $state ?? "";
  }
}

class DescribeHsmRequest {
  public HsmArn $hsm_arn;
  public HsmSerialNumber $hsm_serial_number;

  public function __construct(shape(
  ?'hsm_arn' => HsmArn,
  ?'hsm_serial_number' => HsmSerialNumber,
  ) $s = shape()) {
    $this->hsm_arn = $hsm_arn ?? "";
    $this->hsm_serial_number = $hsm_serial_number ?? "";
  }
}

class DescribeHsmResponse {
  public AZ $availability_zone;
  public EniId $eni_id;
  public IpAddress $eni_ip;
  public HsmArn $hsm_arn;
  public string $hsm_type;
  public IamRoleArn $iam_role_arn;
  public PartitionList $partitions;
  public HsmSerialNumber $serial_number;
  public Timestamp $server_cert_last_updated;
  public string $server_cert_uri;
  public string $software_version;
  public Timestamp $ssh_key_last_updated;
  public SshKey $ssh_public_key;
  public HsmStatus $status;
  public string $status_details;
  public SubnetId $subnet_id;
  public Timestamp $subscription_end_date;
  public Timestamp $subscription_start_date;
  public SubscriptionType $subscription_type;
  public string $vendor_name;
  public VpcId $vpc_id;

  public function __construct(shape(
  ?'availability_zone' => AZ,
  ?'eni_id' => EniId,
  ?'eni_ip' => IpAddress,
  ?'hsm_arn' => HsmArn,
  ?'hsm_type' => string,
  ?'iam_role_arn' => IamRoleArn,
  ?'partitions' => PartitionList,
  ?'serial_number' => HsmSerialNumber,
  ?'server_cert_last_updated' => Timestamp,
  ?'server_cert_uri' => string,
  ?'software_version' => string,
  ?'ssh_key_last_updated' => Timestamp,
  ?'ssh_public_key' => SshKey,
  ?'status' => HsmStatus,
  ?'status_details' => string,
  ?'subnet_id' => SubnetId,
  ?'subscription_end_date' => Timestamp,
  ?'subscription_start_date' => Timestamp,
  ?'subscription_type' => SubscriptionType,
  ?'vendor_name' => string,
  ?'vpc_id' => VpcId,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->eni_id = $eni_id ?? "";
    $this->eni_ip = $eni_ip ?? "";
    $this->hsm_arn = $hsm_arn ?? "";
    $this->hsm_type = $hsm_type ?? "";
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->partitions = $partitions ?? [];
    $this->serial_number = $serial_number ?? "";
    $this->server_cert_last_updated = $server_cert_last_updated ?? "";
    $this->server_cert_uri = $server_cert_uri ?? "";
    $this->software_version = $software_version ?? "";
    $this->ssh_key_last_updated = $ssh_key_last_updated ?? "";
    $this->ssh_public_key = $ssh_public_key ?? "";
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->subnet_id = $subnet_id ?? "";
    $this->subscription_end_date = $subscription_end_date ?? "";
    $this->subscription_start_date = $subscription_start_date ?? "";
    $this->subscription_type = $subscription_type ?? "";
    $this->vendor_name = $vendor_name ?? "";
    $this->vpc_id = $vpc_id ?? "";
  }
}

class DescribeLunaClientRequest {
  public CertificateFingerprint $certificate_fingerprint;
  public ClientArn $client_arn;

  public function __construct(shape(
  ?'certificate_fingerprint' => CertificateFingerprint,
  ?'client_arn' => ClientArn,
  ) $s = shape()) {
    $this->certificate_fingerprint = $certificate_fingerprint ?? "";
    $this->client_arn = $client_arn ?? "";
  }
}

class DescribeLunaClientResponse {
  public Certificate $certificate;
  public CertificateFingerprint $certificate_fingerprint;
  public ClientArn $client_arn;
  public Label $label;
  public Timestamp $last_modified_timestamp;

  public function __construct(shape(
  ?'certificate' => Certificate,
  ?'certificate_fingerprint' => CertificateFingerprint,
  ?'client_arn' => ClientArn,
  ?'label' => Label,
  ?'last_modified_timestamp' => Timestamp,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->certificate_fingerprint = $certificate_fingerprint ?? "";
    $this->client_arn = $client_arn ?? "";
    $this->label = $label ?? "";
    $this->last_modified_timestamp = $last_modified_timestamp ?? "";
  }
}

type EniId = string;

type ExternalId = string;

class GetConfigRequest {
  public ClientArn $client_arn;
  public ClientVersion $client_version;
  public HapgList $hapg_list;

  public function __construct(shape(
  ?'client_arn' => ClientArn,
  ?'client_version' => ClientVersion,
  ?'hapg_list' => HapgList,
  ) $s = shape()) {
    $this->client_arn = $client_arn ?? "";
    $this->client_version = $client_version ?? "";
    $this->hapg_list = $hapg_list ?? [];
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
    $this->config_cred = $config_cred ?? "";
    $this->config_file = $config_file ?? "";
    $this->config_type = $config_type ?? "";
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
  public AZList $az_list;

  public function __construct(shape(
  ?'az_list' => AZList,
  ) $s = shape()) {
    $this->az_list = $az_list ?? [];
  }
}

class ListHapgsRequest {
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class ListHapgsResponse {
  public HapgList $hapg_list;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'hapg_list' => HapgList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->hapg_list = $hapg_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListHsmsRequest {
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class ListHsmsResponse {
  public HsmList $hsm_list;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'hsm_list' => HsmList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->hsm_list = $hsm_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListLunaClientsRequest {
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class ListLunaClientsResponse {
  public ClientList $client_list;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'client_list' => ClientList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->client_list = $client_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tag_list;

  public function __construct(shape(
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->tag_list = $tag_list ?? [];
  }
}

class ModifyHapgRequest {
  public HapgArn $hapg_arn;
  public Label $label;
  public PartitionSerialList $partition_serial_list;

  public function __construct(shape(
  ?'hapg_arn' => HapgArn,
  ?'label' => Label,
  ?'partition_serial_list' => PartitionSerialList,
  ) $s = shape()) {
    $this->hapg_arn = $hapg_arn ?? "";
    $this->label = $label ?? "";
    $this->partition_serial_list = $partition_serial_list ?? [];
  }
}

class ModifyHapgResponse {
  public HapgArn $hapg_arn;

  public function __construct(shape(
  ?'hapg_arn' => HapgArn,
  ) $s = shape()) {
    $this->hapg_arn = $hapg_arn ?? "";
  }
}

class ModifyHsmRequest {
  public IpAddress $eni_ip;
  public ExternalId $external_id;
  public HsmArn $hsm_arn;
  public IamRoleArn $iam_role_arn;
  public SubnetId $subnet_id;
  public IpAddress $syslog_ip;

  public function __construct(shape(
  ?'eni_ip' => IpAddress,
  ?'external_id' => ExternalId,
  ?'hsm_arn' => HsmArn,
  ?'iam_role_arn' => IamRoleArn,
  ?'subnet_id' => SubnetId,
  ?'syslog_ip' => IpAddress,
  ) $s = shape()) {
    $this->eni_ip = $eni_ip ?? "";
    $this->external_id = $external_id ?? "";
    $this->hsm_arn = $hsm_arn ?? "";
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->subnet_id = $subnet_id ?? "";
    $this->syslog_ip = $syslog_ip ?? "";
  }
}

class ModifyHsmResponse {
  public HsmArn $hsm_arn;

  public function __construct(shape(
  ?'hsm_arn' => HsmArn,
  ) $s = shape()) {
    $this->hsm_arn = $hsm_arn ?? "";
  }
}

class ModifyLunaClientRequest {
  public Certificate $certificate;
  public ClientArn $client_arn;

  public function __construct(shape(
  ?'certificate' => Certificate,
  ?'client_arn' => ClientArn,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->client_arn = $client_arn ?? "";
  }
}

class ModifyLunaClientResponse {
  public ClientArn $client_arn;

  public function __construct(shape(
  ?'client_arn' => ClientArn,
  ) $s = shape()) {
    $this->client_arn = $client_arn ?? "";
  }
}

type PaginationToken = string;

type PartitionArn = string;

type PartitionList = vec<PartitionArn>;

type PartitionSerial = string;

type PartitionSerialList = vec<PartitionSerial>;

class RemoveTagsFromResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_key_list;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tag_key_list' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_key_list = $tag_key_list ?? [];
  }
}

class RemoveTagsFromResourceResponse {
  public string $status;

  public function __construct(shape(
  ?'status' => string,
  ) $s = shape()) {
    $this->status = $status ?? "";
  }
}

type SshKey = string;

type String = string;

type SubnetId = string;

type SubscriptionType = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagValue = string;

type Timestamp = string;

type VpcId = string;

