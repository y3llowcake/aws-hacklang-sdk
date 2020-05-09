<?hh // strict
namespace slack\aws\cloudhsm;

interface CloudHSM {
  public function AddTagsToResource(AddTagsToResourceRequest) Awaitable<Errors\Result<AddTagsToResourceResponse>>;
  public function CreateHapg(CreateHapgRequest) Awaitable<Errors\Result<CreateHapgResponse>>;
  public function CreateHsm(CreateHsmRequest) Awaitable<Errors\Result<CreateHsmResponse>>;
  public function CreateLunaClient(CreateLunaClientRequest) Awaitable<Errors\Result<CreateLunaClientResponse>>;
  public function DeleteHapg(DeleteHapgRequest) Awaitable<Errors\Result<DeleteHapgResponse>>;
  public function DeleteHsm(DeleteHsmRequest) Awaitable<Errors\Result<DeleteHsmResponse>>;
  public function DeleteLunaClient(DeleteLunaClientRequest) Awaitable<Errors\Result<DeleteLunaClientResponse>>;
  public function DescribeHapg(DescribeHapgRequest) Awaitable<Errors\Result<DescribeHapgResponse>>;
  public function DescribeHsm(DescribeHsmRequest) Awaitable<Errors\Result<DescribeHsmResponse>>;
  public function DescribeLunaClient(DescribeLunaClientRequest) Awaitable<Errors\Result<DescribeLunaClientResponse>>;
  public function GetConfig(GetConfigRequest) Awaitable<Errors\Result<GetConfigResponse>>;
  public function ListAvailableZones(ListAvailableZonesRequest) Awaitable<Errors\Result<ListAvailableZonesResponse>>;
  public function ListHapgs(ListHapgsRequest) Awaitable<Errors\Result<ListHapgsResponse>>;
  public function ListHsms(ListHsmsRequest) Awaitable<Errors\Result<ListHsmsResponse>>;
  public function ListLunaClients(ListLunaClientsRequest) Awaitable<Errors\Result<ListLunaClientsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyHapg(ModifyHapgRequest) Awaitable<Errors\Result<ModifyHapgResponse>>;
  public function ModifyHsm(ModifyHsmRequest) Awaitable<Errors\Result<ModifyHsmResponse>>;
  public function ModifyLunaClient(ModifyLunaClientRequest) Awaitable<Errors\Result<ModifyLunaClientResponse>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest) Awaitable<Errors\Result<RemoveTagsFromResourceResponse>>;
}

class AZ {
}

class AZList {
}

class AddTagsToResourceRequest {
  public string $resource_arn;
  public TagList $tag_list;
}

class AddTagsToResourceResponse {
  public string $status;
}

class Boolean {
}

class Certificate {
}

class CertificateFingerprint {
}

class ClientArn {
}

class ClientLabel {
}

class ClientList {
}

class ClientToken {
}

class ClientVersion {
}

class CloudHsmInternalException {
}

class CloudHsmObjectState {
}

class CloudHsmServiceException {
  public string $message;
  public boolean $retryable;
}

class CreateHapgRequest {
  public Label $label;
}

class CreateHapgResponse {
  public HapgArn $hapg_arn;
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
}

class CreateHsmResponse {
  public HsmArn $hsm_arn;
}

class CreateLunaClientRequest {
  public Certificate $certificate;
  public ClientLabel $label;
}

class CreateLunaClientResponse {
  public ClientArn $client_arn;
}

class DeleteHapgRequest {
  public HapgArn $hapg_arn;
}

class DeleteHapgResponse {
  public string $status;
}

class DeleteHsmRequest {
  public HsmArn $hsm_arn;
}

class DeleteHsmResponse {
  public string $status;
}

class DeleteLunaClientRequest {
  public ClientArn $client_arn;
}

class DeleteLunaClientResponse {
  public string $status;
}

class DescribeHapgRequest {
  public HapgArn $hapg_arn;
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
}

class DescribeHsmRequest {
  public HsmArn $hsm_arn;
  public HsmSerialNumber $hsm_serial_number;
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
}

class DescribeLunaClientRequest {
  public CertificateFingerprint $certificate_fingerprint;
  public ClientArn $client_arn;
}

class DescribeLunaClientResponse {
  public Certificate $certificate;
  public CertificateFingerprint $certificate_fingerprint;
  public ClientArn $client_arn;
  public Label $label;
  public Timestamp $last_modified_timestamp;
}

class EniId {
}

class ExternalId {
}

class GetConfigRequest {
  public ClientArn $client_arn;
  public ClientVersion $client_version;
  public HapgList $hapg_list;
}

class GetConfigResponse {
  public string $config_cred;
  public string $config_file;
  public string $config_type;
}

class HapgArn {
}

class HapgList {
}

class HsmArn {
}

class HsmList {
}

class HsmSerialNumber {
}

class HsmStatus {
}

class IamRoleArn {
}

class InvalidRequestException {
}

class IpAddress {
}

class Label {
}

class ListAvailableZonesRequest {
}

class ListAvailableZonesResponse {
  public AZList $az_list;
}

class ListHapgsRequest {
  public PaginationToken $next_token;
}

class ListHapgsResponse {
  public HapgList $hapg_list;
  public PaginationToken $next_token;
}

class ListHsmsRequest {
  public PaginationToken $next_token;
}

class ListHsmsResponse {
  public HsmList $hsm_list;
  public PaginationToken $next_token;
}

class ListLunaClientsRequest {
  public PaginationToken $next_token;
}

class ListLunaClientsResponse {
  public ClientList $client_list;
  public PaginationToken $next_token;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tag_list;
}

class ModifyHapgRequest {
  public HapgArn $hapg_arn;
  public Label $label;
  public PartitionSerialList $partition_serial_list;
}

class ModifyHapgResponse {
  public HapgArn $hapg_arn;
}

class ModifyHsmRequest {
  public IpAddress $eni_ip;
  public ExternalId $external_id;
  public HsmArn $hsm_arn;
  public IamRoleArn $iam_role_arn;
  public SubnetId $subnet_id;
  public IpAddress $syslog_ip;
}

class ModifyHsmResponse {
  public HsmArn $hsm_arn;
}

class ModifyLunaClientRequest {
  public Certificate $certificate;
  public ClientArn $client_arn;
}

class ModifyLunaClientResponse {
  public ClientArn $client_arn;
}

class PaginationToken {
}

class PartitionArn {
}

class PartitionList {
}

class PartitionSerial {
}

class PartitionSerialList {
}

class RemoveTagsFromResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_key_list;
}

class RemoveTagsFromResourceResponse {
  public string $status;
}

class SshKey {
}

class String {
}

class SubnetId {
}

class SubscriptionType {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagValue {
}

class Timestamp {
}

class VpcId {
}

