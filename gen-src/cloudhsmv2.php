<?hh // strict
namespace slack\aws\cloudhsmv2;

interface CloudHSM V2 {
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function RestoreBackup(RestoreBackupRequest) Awaitable<Errors\Result<RestoreBackupResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function CopyBackupToRegion(CopyBackupToRegionRequest) Awaitable<Errors\Result<CopyBackupToRegionResponse>>;
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResponse>>;
  public function DeleteCluster(DeleteClusterRequest) Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DescribeClusters(DescribeClustersRequest) Awaitable<Errors\Result<DescribeClustersResponse>>;
  public function InitializeCluster(InitializeClusterRequest) Awaitable<Errors\Result<InitializeClusterResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CreateHsm(CreateHsmRequest) Awaitable<Errors\Result<CreateHsmResponse>>;
  public function DeleteBackup(DeleteBackupRequest) Awaitable<Errors\Result<DeleteBackupResponse>>;
  public function DeleteHsm(DeleteHsmRequest) Awaitable<Errors\Result<DeleteHsmResponse>>;
  public function DescribeBackups(DescribeBackupsRequest) Awaitable<Errors\Result<DescribeBackupsResponse>>;
}

class CloudHsmServiceException {
  public errorMessage $message;
}

class RestoreBackupRequest {
  public BackupId $backup_id;
}

class TagList {
}

class Backup {
  public BackupId $backup_id;
  public Timestamp $create_timestamp;
  public Timestamp $copy_timestamp;
  public Region $source_region;
  public ClusterId $source_cluster;
  public BackupState $backup_state;
  public ClusterId $cluster_id;
  public BackupId $source_backup;
  public Timestamp $delete_timestamp;
  public TagList $tag_list;
}

class Cert {
}

class ListTagsResponse {
  public TagList $tag_list;
  public NextToken $next_token;
}

class UntagResourceRequest {
  public ResourceId $resource_id;
  public TagKeyList $tag_key_list;
}

class VpcId {
}

class CloudHsmInvalidRequestException {
  public errorMessage $message;
}

class CopyBackupToRegionResponse {
  public DestinationBackup $destination_backup;
}

class DeleteHsmResponse {
  public HsmId $hsm_id;
}

class BackupState {
}

class Certificates {
  public Cert $cluster_csr;
  public Cert $hsm_certificate;
  public Cert $aws_hardware_certificate;
  public Cert $manufacturer_hardware_certificate;
  public Cert $cluster_certificate;
}

class DescribeBackupsResponse {
  public NextToken $next_token;
  public Backups $backups;
}

class PreCoPassword {
}

class SubnetId {
}

class EniId {
}

class ExternalSubnetMapping {
}

class CloudHsmAccessDeniedException {
  public errorMessage $message;
}

class CloudHsmResourceNotFoundException {
  public errorMessage $message;
}

class Cluster {
  public BackupPolicy $backup_policy;
  public PreCoPassword $pre_co_password;
  public SecurityGroup $security_group;
  public BackupId $source_backup_id;
  public ClusterState $state;
  public Certificates $certificates;
  public VpcId $vpc_id;
  public TagList $tag_list;
  public ClusterId $cluster_id;
  public Timestamp $create_timestamp;
  public Hsms $hsms;
  public StateMessage $state_message;
  public ExternalSubnetMapping $subnet_mapping;
  public HsmType $hsm_type;
}

class Clusters {
}

class CreateClusterResponse {
  public Cluster $cluster;
}

class DestinationBackup {
  public Region $source_region;
  public BackupId $source_backup;
  public ClusterId $source_cluster;
  public Timestamp $create_timestamp;
}

class Hsm {
  public EniId $eni_id;
  public IpAddress $eni_ip;
  public HsmId $hsm_id;
  public HsmState $state;
  public string $state_message;
  public ExternalAz $availability_zone;
  public ClusterId $cluster_id;
  public SubnetId $subnet_id;
}

class ListTagsRequest {
  public MaxSize $max_results;
  public ResourceId $resource_id;
  public NextToken $next_token;
}

class Region {
}

class ClusterState {
}

class IpAddress {
}

class ResourceId {
}

class DeleteHsmRequest {
  public HsmId $hsm_id;
  public EniId $eni_id;
  public IpAddress $eni_ip;
  public ClusterId $cluster_id;
}

class Field {
}

class TagKey {
}

class UntagResourceResponse {
}

class CreateClusterRequest {
  public TagList $tag_list;
  public SubnetIds $subnet_ids;
  public HsmType $hsm_type;
  public BackupId $source_backup_id;
}

class CreateHsmResponse {
  public Hsm $hsm;
}

class DescribeClustersRequest {
  public Filters $filters;
  public NextToken $next_token;
  public MaxSize $max_results;
}

class ExternalAz {
}

class SubnetIds {
}

class TagResourceRequest {
  public ResourceId $resource_id;
  public TagList $tag_list;
}

class DeleteBackupRequest {
  public BackupId $backup_id;
}

class Filters {
}

class HsmType {
}

class Strings {
}

class TagValue {
}

class Timestamp {
}

class ClusterId {
}

class CreateHsmRequest {
  public ExternalAz $availability_zone;
  public IpAddress $ip_address;
  public ClusterId $cluster_id;
}

class DescribeBackupsRequest {
  public NextToken $next_token;
  public MaxSize $max_results;
  public Filters $filters;
  public boolean $sort_ascending;
}

class HsmState {
}

class InitializeClusterResponse {
  public ClusterState $state;
  public StateMessage $state_message;
}

class StateMessage {
}

class MaxSize {
}

class NextToken {
}

class DeleteClusterRequest {
  public ClusterId $cluster_id;
}

class DescribeClustersResponse {
  public Clusters $clusters;
  public NextToken $next_token;
}

class HsmId {
}

class CopyBackupToRegionRequest {
  public Region $destination_region;
  public BackupId $backup_id;
  public TagList $tag_list;
}

class DeleteBackupResponse {
  public Backup $backup;
}

class InitializeClusterRequest {
  public ClusterId $cluster_id;
  public Cert $signed_cert;
  public Cert $trust_anchor;
}

class BackupPolicy {
}

class String {
}

class TagKeyList {
}

class CloudHsmTagException {
  public errorMessage $message;
}

class DeleteClusterResponse {
  public Cluster $cluster;
}

class Hsms {
}

class SecurityGroup {
}

class errorMessage {
}

class TagResourceResponse {
}

class BackupId {
}

class Backups {
}

class Boolean {
}

class CloudHsmInternalFailureException {
  public errorMessage $message;
}

class RestoreBackupResponse {
  public Backup $backup;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

