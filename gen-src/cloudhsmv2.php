<?hh // strict
namespace slack\aws\cloudhsmv2;

interface CloudHSM V2 {
  public function CopyBackupToRegion(CopyBackupToRegionRequest): Awaitable<Errors\Result<CopyBackupToRegionResponse>>;
  public function CreateCluster(CreateClusterRequest): Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateHsm(CreateHsmRequest): Awaitable<Errors\Result<CreateHsmResponse>>;
  public function DeleteBackup(DeleteBackupRequest): Awaitable<Errors\Result<DeleteBackupResponse>>;
  public function DeleteCluster(DeleteClusterRequest): Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DeleteHsm(DeleteHsmRequest): Awaitable<Errors\Result<DeleteHsmResponse>>;
  public function DescribeBackups(DescribeBackupsRequest): Awaitable<Errors\Result<DescribeBackupsResponse>>;
  public function DescribeClusters(DescribeClustersRequest): Awaitable<Errors\Result<DescribeClustersResponse>>;
  public function InitializeCluster(InitializeClusterRequest): Awaitable<Errors\Result<InitializeClusterResponse>>;
  public function ListTags(ListTagsRequest): Awaitable<Errors\Result<ListTagsResponse>>;
  public function RestoreBackup(RestoreBackupRequest): Awaitable<Errors\Result<RestoreBackupResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
}

class Backup {
  public BackupId $backup_id;
  public BackupState $backup_state;
  public ClusterId $cluster_id;
  public Timestamp $copy_timestamp;
  public Timestamp $create_timestamp;
  public Timestamp $delete_timestamp;
  public BackupId $source_backup;
  public ClusterId $source_cluster;
  public Region $source_region;
  public TagList $tag_list;
}

class BackupId {
}

class BackupPolicy {
}

class BackupState {
}

class Backups {
}

class Boolean {
}

class Cert {
}

class Certificates {
  public Cert $aws_hardware_certificate;
  public Cert $cluster_certificate;
  public Cert $cluster_csr;
  public Cert $hsm_certificate;
  public Cert $manufacturer_hardware_certificate;
}

class CloudHsmAccessDeniedException {
  public errorMessage $message;
}

class CloudHsmInternalFailureException {
  public errorMessage $message;
}

class CloudHsmInvalidRequestException {
  public errorMessage $message;
}

class CloudHsmResourceNotFoundException {
  public errorMessage $message;
}

class CloudHsmServiceException {
  public errorMessage $message;
}

class CloudHsmTagException {
  public errorMessage $message;
}

class Cluster {
  public BackupPolicy $backup_policy;
  public Certificates $certificates;
  public ClusterId $cluster_id;
  public Timestamp $create_timestamp;
  public HsmType $hsm_type;
  public Hsms $hsms;
  public PreCoPassword $pre_co_password;
  public SecurityGroup $security_group;
  public BackupId $source_backup_id;
  public ClusterState $state;
  public StateMessage $state_message;
  public ExternalSubnetMapping $subnet_mapping;
  public TagList $tag_list;
  public VpcId $vpc_id;
}

class ClusterId {
}

class ClusterState {
}

class Clusters {
}

class CopyBackupToRegionRequest {
  public BackupId $backup_id;
  public Region $destination_region;
  public TagList $tag_list;
}

class CopyBackupToRegionResponse {
  public DestinationBackup $destination_backup;
}

class CreateClusterRequest {
  public HsmType $hsm_type;
  public BackupId $source_backup_id;
  public SubnetIds $subnet_ids;
  public TagList $tag_list;
}

class CreateClusterResponse {
  public Cluster $cluster;
}

class CreateHsmRequest {
  public ExternalAz $availability_zone;
  public ClusterId $cluster_id;
  public IpAddress $ip_address;
}

class CreateHsmResponse {
  public Hsm $hsm;
}

class DeleteBackupRequest {
  public BackupId $backup_id;
}

class DeleteBackupResponse {
  public Backup $backup;
}

class DeleteClusterRequest {
  public ClusterId $cluster_id;
}

class DeleteClusterResponse {
  public Cluster $cluster;
}

class DeleteHsmRequest {
  public ClusterId $cluster_id;
  public EniId $eni_id;
  public IpAddress $eni_ip;
  public HsmId $hsm_id;
}

class DeleteHsmResponse {
  public HsmId $hsm_id;
}

class DescribeBackupsRequest {
  public Filters $filters;
  public MaxSize $max_results;
  public NextToken $next_token;
  public boolean $sort_ascending;
}

class DescribeBackupsResponse {
  public Backups $backups;
  public NextToken $next_token;
}

class DescribeClustersRequest {
  public Filters $filters;
  public MaxSize $max_results;
  public NextToken $next_token;
}

class DescribeClustersResponse {
  public Clusters $clusters;
  public NextToken $next_token;
}

class DestinationBackup {
  public Timestamp $create_timestamp;
  public BackupId $source_backup;
  public ClusterId $source_cluster;
  public Region $source_region;
}

class EniId {
}

class ExternalAz {
}

class ExternalSubnetMapping {
}

class Field {
}

class Filters {
}

class Hsm {
  public ExternalAz $availability_zone;
  public ClusterId $cluster_id;
  public EniId $eni_id;
  public IpAddress $eni_ip;
  public HsmId $hsm_id;
  public HsmState $state;
  public string $state_message;
  public SubnetId $subnet_id;
}

class HsmId {
}

class HsmState {
}

class HsmType {
}

class Hsms {
}

class InitializeClusterRequest {
  public ClusterId $cluster_id;
  public Cert $signed_cert;
  public Cert $trust_anchor;
}

class InitializeClusterResponse {
  public ClusterState $state;
  public StateMessage $state_message;
}

class IpAddress {
}

class ListTagsRequest {
  public MaxSize $max_results;
  public NextToken $next_token;
  public ResourceId $resource_id;
}

class ListTagsResponse {
  public NextToken $next_token;
  public TagList $tag_list;
}

class MaxSize {
}

class NextToken {
}

class PreCoPassword {
}

class Region {
}

class ResourceId {
}

class RestoreBackupRequest {
  public BackupId $backup_id;
}

class RestoreBackupResponse {
  public Backup $backup;
}

class SecurityGroup {
}

class StateMessage {
}

class String {
}

class Strings {
}

class SubnetId {
}

class SubnetIds {
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

class TagResourceRequest {
  public ResourceId $resource_id;
  public TagList $tag_list;
}

class TagResourceResponse {
}

class TagValue {
}

class Timestamp {
}

class UntagResourceRequest {
  public ResourceId $resource_id;
  public TagKeyList $tag_key_list;
}

class UntagResourceResponse {
}

class VpcId {
}

class errorMessage {
}

