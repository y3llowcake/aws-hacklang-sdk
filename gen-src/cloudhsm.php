<?hh // strict
namespace slack\aws\cloudhsm;

interface CloudHSM {
  public function AddTagsToResource(AddTagsToResourceRequest) Awaitable<Errors\Result<AddTagsToResourceResponse>>;
  public function CreateHapg(CreateHapgRequest) Awaitable<Errors\Result<CreateHapgResponse>>;
  public function CreateHsm(CreateHsmRequest) Awaitable<Errors\Result<CreateHsmResponse>>;
  public function DeleteHapg(DeleteHapgRequest) Awaitable<Errors\Result<DeleteHapgResponse>>;
  public function DeleteHsm(DeleteHsmRequest) Awaitable<Errors\Result<DeleteHsmResponse>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest) Awaitable<Errors\Result<RemoveTagsFromResourceResponse>>;
  public function ListHsms(ListHsmsRequest) Awaitable<Errors\Result<ListHsmsResponse>>;
  public function ListLunaClients(ListLunaClientsRequest) Awaitable<Errors\Result<ListLunaClientsResponse>>;
  public function ModifyHsm(ModifyHsmRequest) Awaitable<Errors\Result<ModifyHsmResponse>>;
  public function CreateLunaClient(CreateLunaClientRequest) Awaitable<Errors\Result<CreateLunaClientResponse>>;
  public function DescribeHapg(DescribeHapgRequest) Awaitable<Errors\Result<DescribeHapgResponse>>;
  public function GetConfig(GetConfigRequest) Awaitable<Errors\Result<GetConfigResponse>>;
  public function ListAvailableZones(ListAvailableZonesRequest) Awaitable<Errors\Result<ListAvailableZonesResponse>>;
  public function ListHapgs(ListHapgsRequest) Awaitable<Errors\Result<ListHapgsResponse>>;
  public function DeleteLunaClient(DeleteLunaClientRequest) Awaitable<Errors\Result<DeleteLunaClientResponse>>;
  public function DescribeHsm(DescribeHsmRequest) Awaitable<Errors\Result<DescribeHsmResponse>>;
  public function DescribeLunaClient(DescribeLunaClientRequest) Awaitable<Errors\Result<DescribeLunaClientResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyHapg(ModifyHapgRequest) Awaitable<Errors\Result<ModifyHapgResponse>>;
  public function ModifyLunaClient(ModifyLunaClientRequest) Awaitable<Errors\Result<ModifyLunaClientResponse>>;
}

class HsmList {
}

class ModifyLunaClientResponse {
  public ClientArn $client_arn;
}

class PaginationToken {
}

class PartitionSerial {
}

class CloudHsmObjectState {
}

class ExternalId {
}

class HapgList {
}

class HsmArn {
}

class ListHapgsResponse {
  public HapgList $hapg_list;
  public PaginationToken $next_token;
}

class TagKey {
}

class DescribeLunaClientRequest {
  public CertificateFingerprint $certificate_fingerprint;
  public ClientArn $client_arn;
}

class GetConfigRequest {
  public ClientVersion $client_version;
  public HapgList $hapg_list;
  public ClientArn $client_arn;
}

class GetConfigResponse {
  public string $config_type;
  public string $config_file;
  public string $config_cred;
}

class ClientToken {
}

class DeleteLunaClientRequest {
  public ClientArn $client_arn;
}

class DescribeHapgResponse {
  public HsmList $hsms_pending_deletion;
  public HapgArn $hapg_arn;
  public string $hapg_serial;
  public HsmList $hsms_last_action_failed;
  public HsmList $hsms_pending_registration;
  public Label $label;
  public Timestamp $last_modified_timestamp;
  public PartitionSerialList $partition_serial_list;
  public CloudHsmObjectState $state;
}

class ModifyHsmResponse {
  public HsmArn $hsm_arn;
}

class String {
}

class Boolean {
}

class ClientLabel {
}

class ClientList {
}

class ClientVersion {
}

class DescribeHapgRequest {
  public HapgArn $hapg_arn;
}

class IamRoleArn {
}

class ListAvailableZonesResponse {
  public AZList $az_list;
}

class ListLunaClientsRequest {
  public PaginationToken $next_token;
}

class AZ {
}

class AddTagsToResourceResponse {
  public string $status;
}

class CertificateFingerprint {
}

class ModifyHapgRequest {
  public HapgArn $hapg_arn;
  public Label $label;
  public PartitionSerialList $partition_serial_list;
}

class RemoveTagsFromResourceResponse {
  public string $status;
}

class TagKeyList {
}

class DescribeLunaClientResponse {
  public Timestamp $last_modified_timestamp;
  public Label $label;
  public ClientArn $client_arn;
  public Certificate $certificate;
  public CertificateFingerprint $certificate_fingerprint;
}

class Certificate {
}

class DeleteHsmRequest {
  public HsmArn $hsm_arn;
}

class DescribeHsmResponse {
  public string $hsm_type;
  public string $software_version;
  public Timestamp $ssh_key_last_updated;
  public string $server_cert_uri;
  public string $status_details;
  public Timestamp $subscription_start_date;
  public VpcId $vpc_id;
  public IamRoleArn $iam_role_arn;
  public PartitionList $partitions;
  public HsmSerialNumber $serial_number;
  public string $vendor_name;
  public HsmStatus $status;
  public AZ $availability_zone;
  public SubscriptionType $subscription_type;
  public SubnetId $subnet_id;
  public EniId $eni_id;
  public IpAddress $eni_ip;
  public Timestamp $subscription_end_date;
  public HsmArn $hsm_arn;
  public SshKey $ssh_public_key;
  public Timestamp $server_cert_last_updated;
}

class ListAvailableZonesRequest {
}

class ModifyHapgResponse {
  public HapgArn $hapg_arn;
}

class SshKey {
}

class RemoveTagsFromResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_key_list;
}

class HapgArn {
}

class InvalidRequestException {
}

class PartitionList {
}

class ListHsmsResponse {
  public HsmList $hsm_list;
  public PaginationToken $next_token;
}

class SubnetId {
}

class AZList {
}

class AddTagsToResourceRequest {
  public string $resource_arn;
  public TagList $tag_list;
}

class ListHsmsRequest {
  public PaginationToken $next_token;
}

class HsmSerialNumber {
}

class TagValue {
}

class CreateHapgRequest {
  public Label $label;
}

class CreateHsmResponse {
  public HsmArn $hsm_arn;
}

class DescribeHsmRequest {
  public HsmArn $hsm_arn;
  public HsmSerialNumber $hsm_serial_number;
}

class IpAddress {
}

class Label {
}

class ModifyHsmRequest {
  public IpAddress $eni_ip;
  public IamRoleArn $iam_role_arn;
  public ExternalId $external_id;
  public IpAddress $syslog_ip;
  public HsmArn $hsm_arn;
  public SubnetId $subnet_id;
}

class PartitionSerialList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class ClientArn {
}

class DeleteHapgRequest {
  public HapgArn $hapg_arn;
}

class EniId {
}

class CreateHsmRequest {
  public SubnetId $subnet_id;
  public SshKey $ssh_key;
  public IpAddress $eni_ip;
  public IamRoleArn $iam_role_arn;
  public ExternalId $external_id;
  public SubscriptionType $subscription_type;
  public ClientToken $client_token;
  public IpAddress $syslog_ip;
}

class CreateLunaClientResponse {
  public ClientArn $client_arn;
}

class ListTagsForResourceResponse {
  public TagList $tag_list;
}

class ListLunaClientsResponse {
  public ClientList $client_list;
  public PaginationToken $next_token;
}

class VpcId {
}

class CloudHsmInternalException {
}

class CreateLunaClientRequest {
  public ClientLabel $label;
  public Certificate $certificate;
}

class DeleteHapgResponse {
  public string $status;
}

class HsmStatus {
}

class PartitionArn {
}

class TagList {
}

class SubscriptionType {
}

class CloudHsmServiceException {
  public string $message;
  public boolean $retryable;
}

class ListHapgsRequest {
  public PaginationToken $next_token;
}

class ModifyLunaClientRequest {
  public ClientArn $client_arn;
  public Certificate $certificate;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class Timestamp {
}

class CreateHapgResponse {
  public HapgArn $hapg_arn;
}

class DeleteHsmResponse {
  public string $status;
}

class DeleteLunaClientResponse {
  public string $status;
}

