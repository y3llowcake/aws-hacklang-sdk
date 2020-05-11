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

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ?'backup_state' => BackupState,
  ?'cluster_id' => ClusterId,
  ?'copy_timestamp' => Timestamp,
  ?'create_timestamp' => Timestamp,
  ?'delete_timestamp' => Timestamp,
  ?'source_backup' => BackupId,
  ?'source_cluster' => ClusterId,
  ?'source_region' => Region,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
    $this->backup_state = $backup_state ?? "";
    $this->cluster_id = $cluster_id ?? "";
    $this->copy_timestamp = $copy_timestamp ?? 0;
    $this->create_timestamp = $create_timestamp ?? 0;
    $this->delete_timestamp = $delete_timestamp ?? 0;
    $this->source_backup = $source_backup ?? "";
    $this->source_cluster = $source_cluster ?? "";
    $this->source_region = $source_region ?? "";
    $this->tag_list = $tag_list ?? [];
  }
}

type BackupId = string;

type BackupPolicy = string;

type BackupState = string;

type Backups = vec<Backup>;

type Boolean = bool;

type Cert = string;

class Certificates {
  public Cert $aws_hardware_certificate;
  public Cert $cluster_certificate;
  public Cert $cluster_csr;
  public Cert $hsm_certificate;
  public Cert $manufacturer_hardware_certificate;

  public function __construct(shape(
  ?'aws_hardware_certificate' => Cert,
  ?'cluster_certificate' => Cert,
  ?'cluster_csr' => Cert,
  ?'hsm_certificate' => Cert,
  ?'manufacturer_hardware_certificate' => Cert,
  ) $s = shape()) {
    $this->aws_hardware_certificate = $aws_hardware_certificate ?? "";
    $this->cluster_certificate = $cluster_certificate ?? "";
    $this->cluster_csr = $cluster_csr ?? "";
    $this->hsm_certificate = $hsm_certificate ?? "";
    $this->manufacturer_hardware_certificate = $manufacturer_hardware_certificate ?? "";
  }
}

class CloudHsmAccessDeniedException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmInternalFailureException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmInvalidRequestException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmResourceNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmServiceException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CloudHsmTagException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'backup_policy' => BackupPolicy,
  ?'certificates' => Certificates,
  ?'cluster_id' => ClusterId,
  ?'create_timestamp' => Timestamp,
  ?'hsm_type' => HsmType,
  ?'hsms' => Hsms,
  ?'pre_co_password' => PreCoPassword,
  ?'security_group' => SecurityGroup,
  ?'source_backup_id' => BackupId,
  ?'state' => ClusterState,
  ?'state_message' => StateMessage,
  ?'subnet_mapping' => ExternalSubnetMapping,
  ?'tag_list' => TagList,
  ?'vpc_id' => VpcId,
  ) $s = shape()) {
    $this->backup_policy = $backup_policy ?? "";
    $this->certificates = $certificates ?? null;
    $this->cluster_id = $cluster_id ?? "";
    $this->create_timestamp = $create_timestamp ?? 0;
    $this->hsm_type = $hsm_type ?? "";
    $this->hsms = $hsms ?? [];
    $this->pre_co_password = $pre_co_password ?? "";
    $this->security_group = $security_group ?? "";
    $this->source_backup_id = $source_backup_id ?? "";
    $this->state = $state ?? "";
    $this->state_message = $state_message ?? "";
    $this->subnet_mapping = $subnet_mapping ?? [];
    $this->tag_list = $tag_list ?? [];
    $this->vpc_id = $vpc_id ?? "";
  }
}

type ClusterId = string;

type ClusterState = string;

type Clusters = vec<Cluster>;

class CopyBackupToRegionRequest {
  public BackupId $backup_id;
  public Region $destination_region;
  public TagList $tag_list;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ?'destination_region' => Region,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
    $this->destination_region = $destination_region ?? "";
    $this->tag_list = $tag_list ?? [];
  }
}

class CopyBackupToRegionResponse {
  public DestinationBackup $destination_backup;

  public function __construct(shape(
  ?'destination_backup' => DestinationBackup,
  ) $s = shape()) {
    $this->destination_backup = $destination_backup ?? null;
  }
}

class CreateClusterRequest {
  public HsmType $hsm_type;
  public BackupId $source_backup_id;
  public SubnetIds $subnet_ids;
  public TagList $tag_list;

  public function __construct(shape(
  ?'hsm_type' => HsmType,
  ?'source_backup_id' => BackupId,
  ?'subnet_ids' => SubnetIds,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->hsm_type = $hsm_type ?? "";
    $this->source_backup_id = $source_backup_id ?? "";
    $this->subnet_ids = $subnet_ids ?? [];
    $this->tag_list = $tag_list ?? [];
  }
}

class CreateClusterResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class CreateHsmRequest {
  public ExternalAz $availability_zone;
  public ClusterId $cluster_id;
  public IpAddress $ip_address;

  public function __construct(shape(
  ?'availability_zone' => ExternalAz,
  ?'cluster_id' => ClusterId,
  ?'ip_address' => IpAddress,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->cluster_id = $cluster_id ?? "";
    $this->ip_address = $ip_address ?? "";
  }
}

class CreateHsmResponse {
  public Hsm $hsm;

  public function __construct(shape(
  ?'hsm' => Hsm,
  ) $s = shape()) {
    $this->hsm = $hsm ?? null;
  }
}

class DeleteBackupRequest {
  public BackupId $backup_id;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
  }
}

class DeleteBackupResponse {
  public Backup $backup;

  public function __construct(shape(
  ?'backup' => Backup,
  ) $s = shape()) {
    $this->backup = $backup ?? null;
  }
}

class DeleteClusterRequest {
  public ClusterId $cluster_id;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
  }
}

class DeleteClusterResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class DeleteHsmRequest {
  public ClusterId $cluster_id;
  public EniId $eni_id;
  public IpAddress $eni_ip;
  public HsmId $hsm_id;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'eni_id' => EniId,
  ?'eni_ip' => IpAddress,
  ?'hsm_id' => HsmId,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->eni_id = $eni_id ?? "";
    $this->eni_ip = $eni_ip ?? "";
    $this->hsm_id = $hsm_id ?? "";
  }
}

class DeleteHsmResponse {
  public HsmId $hsm_id;

  public function __construct(shape(
  ?'hsm_id' => HsmId,
  ) $s = shape()) {
    $this->hsm_id = $hsm_id ?? "";
  }
}

class DescribeBackupsRequest {
  public Filters $filters;
  public MaxSize $max_results;
  public NextToken $next_token;
  public boolean $sort_ascending;

  public function __construct(shape(
  ?'filters' => Filters,
  ?'max_results' => MaxSize,
  ?'next_token' => NextToken,
  ?'sort_ascending' => boolean,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_ascending = $sort_ascending ?? false;
  }
}

class DescribeBackupsResponse {
  public Backups $backups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'backups' => Backups,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->backups = $backups ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeClustersRequest {
  public Filters $filters;
  public MaxSize $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => Filters,
  ?'max_results' => MaxSize,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeClustersResponse {
  public Clusters $clusters;
  public NextToken $next_token;

  public function __construct(shape(
  ?'clusters' => Clusters,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->clusters = $clusters ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DestinationBackup {
  public Timestamp $create_timestamp;
  public BackupId $source_backup;
  public ClusterId $source_cluster;
  public Region $source_region;

  public function __construct(shape(
  ?'create_timestamp' => Timestamp,
  ?'source_backup' => BackupId,
  ?'source_cluster' => ClusterId,
  ?'source_region' => Region,
  ) $s = shape()) {
    $this->create_timestamp = $create_timestamp ?? 0;
    $this->source_backup = $source_backup ?? "";
    $this->source_cluster = $source_cluster ?? "";
    $this->source_region = $source_region ?? "";
  }
}

type EniId = string;

type ExternalAz = string;

type ExternalSubnetMapping = dict<ExternalAz, SubnetId>;

type Field = string;

type Filters = dict<Field, Strings>;

class Hsm {
  public ExternalAz $availability_zone;
  public ClusterId $cluster_id;
  public EniId $eni_id;
  public IpAddress $eni_ip;
  public HsmId $hsm_id;
  public HsmState $state;
  public string $state_message;
  public SubnetId $subnet_id;

  public function __construct(shape(
  ?'availability_zone' => ExternalAz,
  ?'cluster_id' => ClusterId,
  ?'eni_id' => EniId,
  ?'eni_ip' => IpAddress,
  ?'hsm_id' => HsmId,
  ?'state' => HsmState,
  ?'state_message' => string,
  ?'subnet_id' => SubnetId,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->cluster_id = $cluster_id ?? "";
    $this->eni_id = $eni_id ?? "";
    $this->eni_ip = $eni_ip ?? "";
    $this->hsm_id = $hsm_id ?? "";
    $this->state = $state ?? "";
    $this->state_message = $state_message ?? "";
    $this->subnet_id = $subnet_id ?? "";
  }
}

type HsmId = string;

type HsmState = string;

type HsmType = string;

type Hsms = vec<Hsm>;

class InitializeClusterRequest {
  public ClusterId $cluster_id;
  public Cert $signed_cert;
  public Cert $trust_anchor;

  public function __construct(shape(
  ?'cluster_id' => ClusterId,
  ?'signed_cert' => Cert,
  ?'trust_anchor' => Cert,
  ) $s = shape()) {
    $this->cluster_id = $cluster_id ?? "";
    $this->signed_cert = $signed_cert ?? "";
    $this->trust_anchor = $trust_anchor ?? "";
  }
}

class InitializeClusterResponse {
  public ClusterState $state;
  public StateMessage $state_message;

  public function __construct(shape(
  ?'state' => ClusterState,
  ?'state_message' => StateMessage,
  ) $s = shape()) {
    $this->state = $state ?? "";
    $this->state_message = $state_message ?? "";
  }
}

type IpAddress = string;

class ListTagsRequest {
  public MaxSize $max_results;
  public NextToken $next_token;
  public ResourceId $resource_id;

  public function __construct(shape(
  ?'max_results' => MaxSize,
  ?'next_token' => NextToken,
  ?'resource_id' => ResourceId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class ListTagsResponse {
  public NextToken $next_token;
  public TagList $tag_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tag_list = $tag_list ?? [];
  }
}

type MaxSize = int;

type NextToken = string;

type PreCoPassword = string;

type Region = string;

type ResourceId = string;

class RestoreBackupRequest {
  public BackupId $backup_id;

  public function __construct(shape(
  ?'backup_id' => BackupId,
  ) $s = shape()) {
    $this->backup_id = $backup_id ?? "";
  }
}

class RestoreBackupResponse {
  public Backup $backup;

  public function __construct(shape(
  ?'backup' => Backup,
  ) $s = shape()) {
    $this->backup = $backup ?? null;
  }
}

type SecurityGroup = string;

type StateMessage = string;

type String = string;

type Strings = vec<String>;

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

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

class TagResourceRequest {
  public ResourceId $resource_id;
  public TagList $tag_list;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->tag_list = $tag_list ?? [];
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
  public ResourceId $resource_id;
  public TagKeyList $tag_key_list;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'tag_key_list' => TagKeyList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->tag_key_list = $tag_key_list ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VpcId = string;

type errorMessage = string;

