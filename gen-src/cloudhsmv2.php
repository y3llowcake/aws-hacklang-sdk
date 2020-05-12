<?hh // strict
namespace slack\aws\cloudhsmv2;

interface CloudHSMV2 {
  public function CopyBackupToRegion(CopyBackupToRegionRequest $in): Awaitable<\Errors\Result<CopyBackupToRegionResponse>>;
  public function CreateCluster(CreateClusterRequest $in): Awaitable<\Errors\Result<CreateClusterResponse>>;
  public function CreateHsm(CreateHsmRequest $in): Awaitable<\Errors\Result<CreateHsmResponse>>;
  public function DeleteBackup(DeleteBackupRequest $in): Awaitable<\Errors\Result<DeleteBackupResponse>>;
  public function DeleteCluster(DeleteClusterRequest $in): Awaitable<\Errors\Result<DeleteClusterResponse>>;
  public function DeleteHsm(DeleteHsmRequest $in): Awaitable<\Errors\Result<DeleteHsmResponse>>;
  public function DescribeBackups(DescribeBackupsRequest $in): Awaitable<\Errors\Result<DescribeBackupsResponse>>;
  public function DescribeClusters(DescribeClustersRequest $in): Awaitable<\Errors\Result<DescribeClustersResponse>>;
  public function InitializeCluster(InitializeClusterRequest $in): Awaitable<\Errors\Result<InitializeClusterResponse>>;
  public function ListTags(ListTagsRequest $in): Awaitable<\Errors\Result<ListTagsResponse>>;
  public function RestoreBackup(RestoreBackupRequest $in): Awaitable<\Errors\Result<RestoreBackupResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
}

class Backup {
  public ?BackupId $backup_id;
  public ?BackupState $backup_state;
  public ?ClusterId $cluster_id;
  public ?Timestamp $copy_timestamp;
  public ?Timestamp $create_timestamp;
  public ?Timestamp $delete_timestamp;
  public ?BackupId $source_backup;
  public ?ClusterId $source_cluster;
  public ?Region $source_region;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'backup_id' => ?BackupId,
    ?'backup_state' => ?BackupState,
    ?'cluster_id' => ?ClusterId,
    ?'copy_timestamp' => ?Timestamp,
    ?'create_timestamp' => ?Timestamp,
    ?'delete_timestamp' => ?Timestamp,
    ?'source_backup' => ?BackupId,
    ?'source_cluster' => ?ClusterId,
    ?'source_region' => ?Region,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->backup_id = $s['backup_id'] ?? '';
    $this->backup_state = $s['backup_state'] ?? '';
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->copy_timestamp = $s['copy_timestamp'] ?? 0;
    $this->create_timestamp = $s['create_timestamp'] ?? 0;
    $this->delete_timestamp = $s['delete_timestamp'] ?? 0;
    $this->source_backup = $s['source_backup'] ?? '';
    $this->source_cluster = $s['source_cluster'] ?? '';
    $this->source_region = $s['source_region'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

type BackupId = string;

type BackupPolicy = string;

type BackupState = string;

type Backups = vec<Backup>;

type Boolean = bool;

type Cert = string;

class Certificates {
  public ?Cert $aws_hardware_certificate;
  public ?Cert $cluster_certificate;
  public ?Cert $cluster_csr;
  public ?Cert $hsm_certificate;
  public ?Cert $manufacturer_hardware_certificate;

  public function __construct(shape(
    ?'aws_hardware_certificate' => ?Cert,
    ?'cluster_certificate' => ?Cert,
    ?'cluster_csr' => ?Cert,
    ?'hsm_certificate' => ?Cert,
    ?'manufacturer_hardware_certificate' => ?Cert,
  ) $s = shape()) {
    $this->aws_hardware_certificate = $s['aws_hardware_certificate'] ?? '';
    $this->cluster_certificate = $s['cluster_certificate'] ?? '';
    $this->cluster_csr = $s['cluster_csr'] ?? '';
    $this->hsm_certificate = $s['hsm_certificate'] ?? '';
    $this->manufacturer_hardware_certificate = $s['manufacturer_hardware_certificate'] ?? '';
  }
}

class CloudHsmAccessDeniedException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CloudHsmInternalFailureException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CloudHsmInvalidRequestException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CloudHsmResourceNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CloudHsmServiceException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CloudHsmTagException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Cluster {
  public ?BackupPolicy $backup_policy;
  public ?Certificates $certificates;
  public ?ClusterId $cluster_id;
  public ?Timestamp $create_timestamp;
  public ?HsmType $hsm_type;
  public ?Hsms $hsms;
  public ?PreCoPassword $pre_co_password;
  public ?SecurityGroup $security_group;
  public ?BackupId $source_backup_id;
  public ?ClusterState $state;
  public ?StateMessage $state_message;
  public ?ExternalSubnetMapping $subnet_mapping;
  public ?TagList $tag_list;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'backup_policy' => ?BackupPolicy,
    ?'certificates' => ?Certificates,
    ?'cluster_id' => ?ClusterId,
    ?'create_timestamp' => ?Timestamp,
    ?'hsm_type' => ?HsmType,
    ?'hsms' => ?Hsms,
    ?'pre_co_password' => ?PreCoPassword,
    ?'security_group' => ?SecurityGroup,
    ?'source_backup_id' => ?BackupId,
    ?'state' => ?ClusterState,
    ?'state_message' => ?StateMessage,
    ?'subnet_mapping' => ?ExternalSubnetMapping,
    ?'tag_list' => ?TagList,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->backup_policy = $s['backup_policy'] ?? '';
    $this->certificates = $s['certificates'] ?? null;
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->create_timestamp = $s['create_timestamp'] ?? 0;
    $this->hsm_type = $s['hsm_type'] ?? '';
    $this->hsms = $s['hsms'] ?? vec[];
    $this->pre_co_password = $s['pre_co_password'] ?? '';
    $this->security_group = $s['security_group'] ?? '';
    $this->source_backup_id = $s['source_backup_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->state_message = $s['state_message'] ?? '';
    $this->subnet_mapping = $s['subnet_mapping'] ?? dict[];
    $this->tag_list = $s['tag_list'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type ClusterId = string;

type ClusterState = string;

type Clusters = vec<Cluster>;

class CopyBackupToRegionRequest {
  public ?BackupId $backup_id;
  public ?Region $destination_region;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'backup_id' => ?BackupId,
    ?'destination_region' => ?Region,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->backup_id = $s['backup_id'] ?? '';
    $this->destination_region = $s['destination_region'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class CopyBackupToRegionResponse {
  public ?DestinationBackup $destination_backup;

  public function __construct(shape(
    ?'destination_backup' => ?DestinationBackup,
  ) $s = shape()) {
    $this->destination_backup = $s['destination_backup'] ?? null;
  }
}

class CreateClusterRequest {
  public ?HsmType $hsm_type;
  public ?BackupId $source_backup_id;
  public ?SubnetIds $subnet_ids;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'hsm_type' => ?HsmType,
    ?'source_backup_id' => ?BackupId,
    ?'subnet_ids' => ?SubnetIds,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->hsm_type = $s['hsm_type'] ?? '';
    $this->source_backup_id = $s['source_backup_id'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class CreateClusterResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class CreateHsmRequest {
  public ?ExternalAz $availability_zone;
  public ?ClusterId $cluster_id;
  public ?IpAddress $ip_address;

  public function __construct(shape(
    ?'availability_zone' => ?ExternalAz,
    ?'cluster_id' => ?ClusterId,
    ?'ip_address' => ?IpAddress,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
  }
}

class CreateHsmResponse {
  public ?Hsm $hsm;

  public function __construct(shape(
    ?'hsm' => ?Hsm,
  ) $s = shape()) {
    $this->hsm = $s['hsm'] ?? null;
  }
}

class DeleteBackupRequest {
  public ?BackupId $backup_id;

  public function __construct(shape(
    ?'backup_id' => ?BackupId,
  ) $s = shape()) {
    $this->backup_id = $s['backup_id'] ?? '';
  }
}

class DeleteBackupResponse {
  public ?Backup $backup;

  public function __construct(shape(
    ?'backup' => ?Backup,
  ) $s = shape()) {
    $this->backup = $s['backup'] ?? null;
  }
}

class DeleteClusterRequest {
  public ?ClusterId $cluster_id;

  public function __construct(shape(
    ?'cluster_id' => ?ClusterId,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
  }
}

class DeleteClusterResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class DeleteHsmRequest {
  public ?ClusterId $cluster_id;
  public ?EniId $eni_id;
  public ?IpAddress $eni_ip;
  public ?HsmId $hsm_id;

  public function __construct(shape(
    ?'cluster_id' => ?ClusterId,
    ?'eni_id' => ?EniId,
    ?'eni_ip' => ?IpAddress,
    ?'hsm_id' => ?HsmId,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->eni_id = $s['eni_id'] ?? '';
    $this->eni_ip = $s['eni_ip'] ?? '';
    $this->hsm_id = $s['hsm_id'] ?? '';
  }
}

class DeleteHsmResponse {
  public ?HsmId $hsm_id;

  public function __construct(shape(
    ?'hsm_id' => ?HsmId,
  ) $s = shape()) {
    $this->hsm_id = $s['hsm_id'] ?? '';
  }
}

class DescribeBackupsRequest {
  public ?Filters $filters;
  public ?MaxSize $max_results;
  public ?NextToken $next_token;
  public bool $sort_ascending;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxSize,
    ?'next_token' => ?NextToken,
    ?'sort_ascending' => bool,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? dict[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_ascending = $s['sort_ascending'] ?? false;
  }
}

class DescribeBackupsResponse {
  public ?Backups $backups;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'backups' => ?Backups,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->backups = $s['backups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClustersRequest {
  public ?Filters $filters;
  public ?MaxSize $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxSize,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? dict[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClustersResponse {
  public ?Clusters $clusters;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'clusters' => ?Clusters,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->clusters = $s['clusters'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DestinationBackup {
  public ?Timestamp $create_timestamp;
  public ?BackupId $source_backup;
  public ?ClusterId $source_cluster;
  public ?Region $source_region;

  public function __construct(shape(
    ?'create_timestamp' => ?Timestamp,
    ?'source_backup' => ?BackupId,
    ?'source_cluster' => ?ClusterId,
    ?'source_region' => ?Region,
  ) $s = shape()) {
    $this->create_timestamp = $s['create_timestamp'] ?? 0;
    $this->source_backup = $s['source_backup'] ?? '';
    $this->source_cluster = $s['source_cluster'] ?? '';
    $this->source_region = $s['source_region'] ?? '';
  }
}

type EniId = string;

type ExternalAz = string;

type ExternalSubnetMapping = dict<ExternalAz, SubnetId>;

type Field = string;

type Filters = dict<Field, Strings>;

class Hsm {
  public ?ExternalAz $availability_zone;
  public ?ClusterId $cluster_id;
  public ?EniId $eni_id;
  public ?IpAddress $eni_ip;
  public ?HsmId $hsm_id;
  public ?HsmState $state;
  public string $state_message;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'availability_zone' => ?ExternalAz,
    ?'cluster_id' => ?ClusterId,
    ?'eni_id' => ?EniId,
    ?'eni_ip' => ?IpAddress,
    ?'hsm_id' => ?HsmId,
    ?'state' => ?HsmState,
    ?'state_message' => string,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->eni_id = $s['eni_id'] ?? '';
    $this->eni_ip = $s['eni_ip'] ?? '';
    $this->hsm_id = $s['hsm_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->state_message = $s['state_message'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type HsmId = string;

type HsmState = string;

type HsmType = string;

type Hsms = vec<Hsm>;

class InitializeClusterRequest {
  public ?ClusterId $cluster_id;
  public ?Cert $signed_cert;
  public ?Cert $trust_anchor;

  public function __construct(shape(
    ?'cluster_id' => ?ClusterId,
    ?'signed_cert' => ?Cert,
    ?'trust_anchor' => ?Cert,
  ) $s = shape()) {
    $this->cluster_id = $s['cluster_id'] ?? '';
    $this->signed_cert = $s['signed_cert'] ?? '';
    $this->trust_anchor = $s['trust_anchor'] ?? '';
  }
}

class InitializeClusterResponse {
  public ?ClusterState $state;
  public ?StateMessage $state_message;

  public function __construct(shape(
    ?'state' => ?ClusterState,
    ?'state_message' => ?StateMessage,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->state_message = $s['state_message'] ?? '';
  }
}

type IpAddress = string;

class ListTagsRequest {
  public ?MaxSize $max_results;
  public ?NextToken $next_token;
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'max_results' => ?MaxSize,
    ?'next_token' => ?NextToken,
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class ListTagsResponse {
  public ?NextToken $next_token;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

type MaxSize = int;

type NextToken = string;

type PreCoPassword = string;

type Region = string;

type ResourceId = string;

class RestoreBackupRequest {
  public ?BackupId $backup_id;

  public function __construct(shape(
    ?'backup_id' => ?BackupId,
  ) $s = shape()) {
    $this->backup_id = $s['backup_id'] ?? '';
  }
}

class RestoreBackupResponse {
  public ?Backup $backup;

  public function __construct(shape(
    ?'backup' => ?Backup,
  ) $s = shape()) {
    $this->backup = $s['backup'] ?? null;
  }
}

type SecurityGroup = string;

type StateMessage = string;

type String = string;

type Strings = vec<String>;

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

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

class TagResourceRequest {
  public ?ResourceId $resource_id;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Timestamp = int;

class UntagResourceRequest {
  public ?ResourceId $resource_id;
  public ?TagKeyList $tag_key_list;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
    ?'tag_key_list' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tag_key_list = $s['tag_key_list'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VpcId = string;

type errorMessage = string;

