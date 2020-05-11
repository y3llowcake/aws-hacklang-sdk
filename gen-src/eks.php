<?hh // strict
namespace slack\aws\eks;

interface EKS {
  public function CreateCluster(CreateClusterRequest): Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateFargateProfile(CreateFargateProfileRequest): Awaitable<Errors\Result<CreateFargateProfileResponse>>;
  public function CreateNodegroup(CreateNodegroupRequest): Awaitable<Errors\Result<CreateNodegroupResponse>>;
  public function DeleteCluster(DeleteClusterRequest): Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DeleteFargateProfile(DeleteFargateProfileRequest): Awaitable<Errors\Result<DeleteFargateProfileResponse>>;
  public function DeleteNodegroup(DeleteNodegroupRequest): Awaitable<Errors\Result<DeleteNodegroupResponse>>;
  public function DescribeCluster(DescribeClusterRequest): Awaitable<Errors\Result<DescribeClusterResponse>>;
  public function DescribeFargateProfile(DescribeFargateProfileRequest): Awaitable<Errors\Result<DescribeFargateProfileResponse>>;
  public function DescribeNodegroup(DescribeNodegroupRequest): Awaitable<Errors\Result<DescribeNodegroupResponse>>;
  public function DescribeUpdate(DescribeUpdateRequest): Awaitable<Errors\Result<DescribeUpdateResponse>>;
  public function ListClusters(ListClustersRequest): Awaitable<Errors\Result<ListClustersResponse>>;
  public function ListFargateProfiles(ListFargateProfilesRequest): Awaitable<Errors\Result<ListFargateProfilesResponse>>;
  public function ListNodegroups(ListNodegroupsRequest): Awaitable<Errors\Result<ListNodegroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUpdates(ListUpdatesRequest): Awaitable<Errors\Result<ListUpdatesResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateClusterConfig(UpdateClusterConfigRequest): Awaitable<Errors\Result<UpdateClusterConfigResponse>>;
  public function UpdateClusterVersion(UpdateClusterVersionRequest): Awaitable<Errors\Result<UpdateClusterVersionResponse>>;
  public function UpdateNodegroupConfig(UpdateNodegroupConfigRequest): Awaitable<Errors\Result<UpdateNodegroupConfigResponse>>;
  public function UpdateNodegroupVersion(UpdateNodegroupVersionRequest): Awaitable<Errors\Result<UpdateNodegroupVersionResponse>>;
}

type AMITypes = string;

class AutoScalingGroup {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type AutoScalingGroupList = vec<AutoScalingGroup>;

class BadRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Boolean = bool;

type BoxedBoolean = bool;

type BoxedInteger = int;

type Capacity = int;

class Certificate {
  public string $data;

  public function __construct(shape(
  ?'data' => string,
  ) $s = shape()) {
    $this->data = $data ?? ;
  }
}

class ClientException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'message' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->message = $message ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class Cluster {
  public string $arn;
  public Certificate $certificate_authority;
  public string $client_request_token;
  public Timestamp $created_at;
  public EncryptionConfigList $encryption_config;
  public string $endpoint;
  public Identity $identity;
  public Logging $logging;
  public string $name;
  public string $platform_version;
  public VpcConfigResponse $resources_vpc_config;
  public string $role_arn;
  public ClusterStatus $status;
  public TagMap $tags;
  public string $version;

  public function __construct(shape(
  ?'arn' => string,
  ?'certificate_authority' => Certificate,
  ?'client_request_token' => string,
  ?'created_at' => Timestamp,
  ?'encryption_config' => EncryptionConfigList,
  ?'endpoint' => string,
  ?'identity' => Identity,
  ?'logging' => Logging,
  ?'name' => string,
  ?'platform_version' => string,
  ?'resources_vpc_config' => VpcConfigResponse,
  ?'role_arn' => string,
  ?'status' => ClusterStatus,
  ?'tags' => TagMap,
  ?'version' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->certificate_authority = $certificate_authority ?? ;
    $this->client_request_token = $client_request_token ?? ;
    $this->created_at = $created_at ?? ;
    $this->encryption_config = $encryption_config ?? ;
    $this->endpoint = $endpoint ?? ;
    $this->identity = $identity ?? ;
    $this->logging = $logging ?? ;
    $this->name = $name ?? ;
    $this->platform_version = $platform_version ?? ;
    $this->resources_vpc_config = $resources_vpc_config ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->status = $status ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

type ClusterName = string;

type ClusterStatus = string;

class CreateClusterRequest {
  public string $client_request_token;
  public EncryptionConfigList $encryption_config;
  public Logging $logging;
  public ClusterName $name;
  public VpcConfigRequest $resources_vpc_config;
  public string $role_arn;
  public TagMap $tags;
  public string $version;

  public function __construct(shape(
  ?'client_request_token' => string,
  ?'encryption_config' => EncryptionConfigList,
  ?'logging' => Logging,
  ?'name' => ClusterName,
  ?'resources_vpc_config' => VpcConfigRequest,
  ?'role_arn' => string,
  ?'tags' => TagMap,
  ?'version' => string,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->encryption_config = $encryption_config ?? ;
    $this->logging = $logging ?? ;
    $this->name = $name ?? ;
    $this->resources_vpc_config = $resources_vpc_config ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

class CreateClusterResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? ;
  }
}

class CreateFargateProfileRequest {
  public string $client_request_token;
  public string $cluster_name;
  public string $fargate_profile_name;
  public string $pod_execution_role_arn;
  public FargateProfileSelectors $selectors;
  public StringList $subnets;
  public TagMap $tags;

  public function __construct(shape(
  ?'client_request_token' => string,
  ?'cluster_name' => string,
  ?'fargate_profile_name' => string,
  ?'pod_execution_role_arn' => string,
  ?'selectors' => FargateProfileSelectors,
  ?'subnets' => StringList,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->cluster_name = $cluster_name ?? ;
    $this->fargate_profile_name = $fargate_profile_name ?? ;
    $this->pod_execution_role_arn = $pod_execution_role_arn ?? ;
    $this->selectors = $selectors ?? ;
    $this->subnets = $subnets ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateFargateProfileResponse {
  public FargateProfile $fargate_profile;

  public function __construct(shape(
  ?'fargate_profile' => FargateProfile,
  ) $s = shape()) {
    $this->fargate_profile = $fargate_profile ?? ;
  }
}

class CreateNodegroupRequest {
  public AMITypes $ami_type;
  public string $client_request_token;
  public string $cluster_name;
  public BoxedInteger $disk_size;
  public StringList $instance_types;
  public labelsMap $labels;
  public string $node_role;
  public string $nodegroup_name;
  public string $release_version;
  public RemoteAccessConfig $remote_access;
  public NodegroupScalingConfig $scaling_config;
  public StringList $subnets;
  public TagMap $tags;
  public string $version;

  public function __construct(shape(
  ?'ami_type' => AMITypes,
  ?'client_request_token' => string,
  ?'cluster_name' => string,
  ?'disk_size' => BoxedInteger,
  ?'instance_types' => StringList,
  ?'labels' => labelsMap,
  ?'node_role' => string,
  ?'nodegroup_name' => string,
  ?'release_version' => string,
  ?'remote_access' => RemoteAccessConfig,
  ?'scaling_config' => NodegroupScalingConfig,
  ?'subnets' => StringList,
  ?'tags' => TagMap,
  ?'version' => string,
  ) $s = shape()) {
    $this->ami_type = $ami_type ?? ;
    $this->client_request_token = $client_request_token ?? ;
    $this->cluster_name = $cluster_name ?? ;
    $this->disk_size = $disk_size ?? ;
    $this->instance_types = $instance_types ?? ;
    $this->labels = $labels ?? ;
    $this->node_role = $node_role ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
    $this->release_version = $release_version ?? ;
    $this->remote_access = $remote_access ?? ;
    $this->scaling_config = $scaling_config ?? ;
    $this->subnets = $subnets ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

class CreateNodegroupResponse {
  public Nodegroup $nodegroup;

  public function __construct(shape(
  ?'nodegroup' => Nodegroup,
  ) $s = shape()) {
    $this->nodegroup = $nodegroup ?? ;
  }
}

class DeleteClusterRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DeleteClusterResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? ;
  }
}

class DeleteFargateProfileRequest {
  public string $cluster_name;
  public string $fargate_profile_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'fargate_profile_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->fargate_profile_name = $fargate_profile_name ?? ;
  }
}

class DeleteFargateProfileResponse {
  public FargateProfile $fargate_profile;

  public function __construct(shape(
  ?'fargate_profile' => FargateProfile,
  ) $s = shape()) {
    $this->fargate_profile = $fargate_profile ?? ;
  }
}

class DeleteNodegroupRequest {
  public string $cluster_name;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class DeleteNodegroupResponse {
  public Nodegroup $nodegroup;

  public function __construct(shape(
  ?'nodegroup' => Nodegroup,
  ) $s = shape()) {
    $this->nodegroup = $nodegroup ?? ;
  }
}

class DescribeClusterRequest {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DescribeClusterResponse {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? ;
  }
}

class DescribeFargateProfileRequest {
  public string $cluster_name;
  public string $fargate_profile_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'fargate_profile_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->fargate_profile_name = $fargate_profile_name ?? ;
  }
}

class DescribeFargateProfileResponse {
  public FargateProfile $fargate_profile;

  public function __construct(shape(
  ?'fargate_profile' => FargateProfile,
  ) $s = shape()) {
    $this->fargate_profile = $fargate_profile ?? ;
  }
}

class DescribeNodegroupRequest {
  public string $cluster_name;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class DescribeNodegroupResponse {
  public Nodegroup $nodegroup;

  public function __construct(shape(
  ?'nodegroup' => Nodegroup,
  ) $s = shape()) {
    $this->nodegroup = $nodegroup ?? ;
  }
}

class DescribeUpdateRequest {
  public string $name;
  public string $nodegroup_name;
  public string $update_id;

  public function __construct(shape(
  ?'name' => string,
  ?'nodegroup_name' => string,
  ?'update_id' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
    $this->update_id = $update_id ?? ;
  }
}

class DescribeUpdateResponse {
  public Update $update;

  public function __construct(shape(
  ?'update' => Update,
  ) $s = shape()) {
    $this->update = $update ?? ;
  }
}

class EncryptionConfig {
  public Provider $provider;
  public StringList $resources;

  public function __construct(shape(
  ?'provider' => Provider,
  ?'resources' => StringList,
  ) $s = shape()) {
    $this->provider = $provider ?? ;
    $this->resources = $resources ?? ;
  }
}

type EncryptionConfigList = vec<EncryptionConfig>;

type ErrorCode = string;

class ErrorDetail {
  public ErrorCode $error_code;
  public string $error_message;
  public StringList $resource_ids;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => string,
  ?'resource_ids' => StringList,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? ;
    $this->resource_ids = $resource_ids ?? ;
  }
}

type ErrorDetails = vec<ErrorDetail>;

class FargateProfile {
  public string $cluster_name;
  public Timestamp $created_at;
  public string $fargate_profile_arn;
  public string $fargate_profile_name;
  public string $pod_execution_role_arn;
  public FargateProfileSelectors $selectors;
  public FargateProfileStatus $status;
  public StringList $subnets;
  public TagMap $tags;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'created_at' => Timestamp,
  ?'fargate_profile_arn' => string,
  ?'fargate_profile_name' => string,
  ?'pod_execution_role_arn' => string,
  ?'selectors' => FargateProfileSelectors,
  ?'status' => FargateProfileStatus,
  ?'subnets' => StringList,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->created_at = $created_at ?? ;
    $this->fargate_profile_arn = $fargate_profile_arn ?? ;
    $this->fargate_profile_name = $fargate_profile_name ?? ;
    $this->pod_execution_role_arn = $pod_execution_role_arn ?? ;
    $this->selectors = $selectors ?? ;
    $this->status = $status ?? ;
    $this->subnets = $subnets ?? ;
    $this->tags = $tags ?? ;
  }
}

type FargateProfileLabel = dict<String, String>;

class FargateProfileSelector {
  public FargateProfileLabel $labels;
  public string $namespace;

  public function __construct(shape(
  ?'labels' => FargateProfileLabel,
  ?'namespace' => string,
  ) $s = shape()) {
    $this->labels = $labels ?? ;
    $this->namespace = $namespace ?? ;
  }
}

type FargateProfileSelectors = vec<FargateProfileSelector>;

type FargateProfileStatus = string;

type FargateProfilesRequestMaxResults = int;

class Identity {
  public OIDC $oidc;

  public function __construct(shape(
  ?'oidc' => OIDC,
  ) $s = shape()) {
    $this->oidc = $oidc ?? ;
  }
}

class InvalidParameterException {
  public string $cluster_name;
  public string $fargate_profile_name;
  public string $message;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'fargate_profile_name' => string,
  ?'message' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->fargate_profile_name = $fargate_profile_name ?? ;
    $this->message = $message ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class InvalidRequestException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'message' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->message = $message ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class Issue {
  public NodegroupIssueCode $code;
  public string $message;
  public StringList $resource_ids;

  public function __construct(shape(
  ?'code' => NodegroupIssueCode,
  ?'message' => string,
  ?'resource_ids' => StringList,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
    $this->resource_ids = $resource_ids ?? ;
  }
}

type IssueList = vec<Issue>;

class ListClustersRequest {
  public ListClustersRequestMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => ListClustersRequestMaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type ListClustersRequestMaxResults = int;

class ListClustersResponse {
  public StringList $clusters;
  public string $next_token;

  public function __construct(shape(
  ?'clusters' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->clusters = $clusters ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListFargateProfilesRequest {
  public string $cluster_name;
  public FargateProfilesRequestMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'max_results' => FargateProfilesRequestMaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListFargateProfilesResponse {
  public StringList $fargate_profile_names;
  public string $next_token;

  public function __construct(shape(
  ?'fargate_profile_names' => StringList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->fargate_profile_names = $fargate_profile_names ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListNodegroupsRequest {
  public string $cluster_name;
  public ListNodegroupsRequestMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'max_results' => ListNodegroupsRequestMaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type ListNodegroupsRequestMaxResults = int;

class ListNodegroupsResponse {
  public string $next_token;
  public StringList $nodegroups;

  public function __construct(shape(
  ?'next_token' => string,
  ?'nodegroups' => StringList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->nodegroups = $nodegroups ?? ;
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public TagMap $tags;

  public function __construct(shape(
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

class ListUpdatesRequest {
  public ListUpdatesRequestMaxResults $max_results;
  public string $name;
  public string $next_token;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'max_results' => ListUpdatesRequestMaxResults,
  ?'name' => string,
  ?'next_token' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->name = $name ?? ;
    $this->next_token = $next_token ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

type ListUpdatesRequestMaxResults = int;

class ListUpdatesResponse {
  public string $next_token;
  public StringList $update_ids;

  public function __construct(shape(
  ?'next_token' => string,
  ?'update_ids' => StringList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->update_ids = $update_ids ?? ;
  }
}

class LogSetup {
  public BoxedBoolean $enabled;
  public LogTypes $types;

  public function __construct(shape(
  ?'enabled' => BoxedBoolean,
  ?'types' => LogTypes,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->types = $types ?? ;
  }
}

type LogSetups = vec<LogSetup>;

type LogType = string;

type LogTypes = vec<LogType>;

class Logging {
  public LogSetups $cluster_logging;

  public function __construct(shape(
  ?'cluster_logging' => LogSetups,
  ) $s = shape()) {
    $this->cluster_logging = $cluster_logging ?? ;
  }
}

class Nodegroup {
  public AMITypes $ami_type;
  public string $cluster_name;
  public Timestamp $created_at;
  public BoxedInteger $disk_size;
  public NodegroupHealth $health;
  public StringList $instance_types;
  public labelsMap $labels;
  public Timestamp $modified_at;
  public string $node_role;
  public string $nodegroup_arn;
  public string $nodegroup_name;
  public string $release_version;
  public RemoteAccessConfig $remote_access;
  public NodegroupResources $resources;
  public NodegroupScalingConfig $scaling_config;
  public NodegroupStatus $status;
  public StringList $subnets;
  public TagMap $tags;
  public string $version;

  public function __construct(shape(
  ?'ami_type' => AMITypes,
  ?'cluster_name' => string,
  ?'created_at' => Timestamp,
  ?'disk_size' => BoxedInteger,
  ?'health' => NodegroupHealth,
  ?'instance_types' => StringList,
  ?'labels' => labelsMap,
  ?'modified_at' => Timestamp,
  ?'node_role' => string,
  ?'nodegroup_arn' => string,
  ?'nodegroup_name' => string,
  ?'release_version' => string,
  ?'remote_access' => RemoteAccessConfig,
  ?'resources' => NodegroupResources,
  ?'scaling_config' => NodegroupScalingConfig,
  ?'status' => NodegroupStatus,
  ?'subnets' => StringList,
  ?'tags' => TagMap,
  ?'version' => string,
  ) $s = shape()) {
    $this->ami_type = $ami_type ?? ;
    $this->cluster_name = $cluster_name ?? ;
    $this->created_at = $created_at ?? ;
    $this->disk_size = $disk_size ?? ;
    $this->health = $health ?? ;
    $this->instance_types = $instance_types ?? ;
    $this->labels = $labels ?? ;
    $this->modified_at = $modified_at ?? ;
    $this->node_role = $node_role ?? ;
    $this->nodegroup_arn = $nodegroup_arn ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
    $this->release_version = $release_version ?? ;
    $this->remote_access = $remote_access ?? ;
    $this->resources = $resources ?? ;
    $this->scaling_config = $scaling_config ?? ;
    $this->status = $status ?? ;
    $this->subnets = $subnets ?? ;
    $this->tags = $tags ?? ;
    $this->version = $version ?? ;
  }
}

class NodegroupHealth {
  public IssueList $issues;

  public function __construct(shape(
  ?'issues' => IssueList,
  ) $s = shape()) {
    $this->issues = $issues ?? ;
  }
}

type NodegroupIssueCode = string;

class NodegroupResources {
  public AutoScalingGroupList $auto_scaling_groups;
  public string $remote_access_security_group;

  public function __construct(shape(
  ?'auto_scaling_groups' => AutoScalingGroupList,
  ?'remote_access_security_group' => string,
  ) $s = shape()) {
    $this->auto_scaling_groups = $auto_scaling_groups ?? ;
    $this->remote_access_security_group = $remote_access_security_group ?? ;
  }
}

class NodegroupScalingConfig {
  public Capacity $desired_size;
  public Capacity $max_size;
  public Capacity $min_size;

  public function __construct(shape(
  ?'desired_size' => Capacity,
  ?'max_size' => Capacity,
  ?'min_size' => Capacity,
  ) $s = shape()) {
    $this->desired_size = $desired_size ?? ;
    $this->max_size = $max_size ?? ;
    $this->min_size = $min_size ?? ;
  }
}

type NodegroupStatus = string;

class NotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class OIDC {
  public string $issuer;

  public function __construct(shape(
  ?'issuer' => string,
  ) $s = shape()) {
    $this->issuer = $issuer ?? ;
  }
}

class Provider {
  public string $key_arn;

  public function __construct(shape(
  ?'key_arn' => string,
  ) $s = shape()) {
    $this->key_arn = $key_arn ?? ;
  }
}

class RemoteAccessConfig {
  public string $ec_2_ssh_key;
  public StringList $source_security_groups;

  public function __construct(shape(
  ?'ec_2_ssh_key' => string,
  ?'source_security_groups' => StringList,
  ) $s = shape()) {
    $this->ec_2_ssh_key = $ec_2_ssh_key ?? ;
    $this->source_security_groups = $source_security_groups ?? ;
  }
}

class ResourceInUseException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'message' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->message = $message ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class ResourceLimitExceededException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'message' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->message = $message ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class ResourceNotFoundException {
  public string $cluster_name;
  public string $fargate_profile_name;
  public string $message;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'fargate_profile_name' => string,
  ?'message' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->fargate_profile_name = $fargate_profile_name ?? ;
    $this->message = $message ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class ServerException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'message' => string,
  ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->message = $message ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
  }
}

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type String = string;

type StringList = vec<String>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public string $resource_arn;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Timestamp = int;

class UnsupportedAvailabilityZoneException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;
  public StringList $valid_zones;

  public function __construct(shape(
  ?'cluster_name' => string,
  ?'message' => string,
  ?'nodegroup_name' => string,
  ?'valid_zones' => StringList,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->message = $message ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
    $this->valid_zones = $valid_zones ?? ;
  }
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Update {
  public Timestamp $created_at;
  public ErrorDetails $errors;
  public string $id;
  public UpdateParams $params;
  public UpdateStatus $status;
  public UpdateType $type;

  public function __construct(shape(
  ?'created_at' => Timestamp,
  ?'errors' => ErrorDetails,
  ?'id' => string,
  ?'params' => UpdateParams,
  ?'status' => UpdateStatus,
  ?'type' => UpdateType,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->errors = $errors ?? ;
    $this->id = $id ?? ;
    $this->params = $params ?? ;
    $this->status = $status ?? ;
    $this->type = $type ?? ;
  }
}

class UpdateClusterConfigRequest {
  public string $client_request_token;
  public Logging $logging;
  public string $name;
  public VpcConfigRequest $resources_vpc_config;

  public function __construct(shape(
  ?'client_request_token' => string,
  ?'logging' => Logging,
  ?'name' => string,
  ?'resources_vpc_config' => VpcConfigRequest,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->logging = $logging ?? ;
    $this->name = $name ?? ;
    $this->resources_vpc_config = $resources_vpc_config ?? ;
  }
}

class UpdateClusterConfigResponse {
  public Update $update;

  public function __construct(shape(
  ?'update' => Update,
  ) $s = shape()) {
    $this->update = $update ?? ;
  }
}

class UpdateClusterVersionRequest {
  public string $client_request_token;
  public string $name;
  public string $version;

  public function __construct(shape(
  ?'client_request_token' => string,
  ?'name' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->name = $name ?? ;
    $this->version = $version ?? ;
  }
}

class UpdateClusterVersionResponse {
  public Update $update;

  public function __construct(shape(
  ?'update' => Update,
  ) $s = shape()) {
    $this->update = $update ?? ;
  }
}

class UpdateLabelsPayload {
  public labelsMap $add_or_update_labels;
  public labelsKeyList $remove_labels;

  public function __construct(shape(
  ?'add_or_update_labels' => labelsMap,
  ?'remove_labels' => labelsKeyList,
  ) $s = shape()) {
    $this->add_or_update_labels = $add_or_update_labels ?? ;
    $this->remove_labels = $remove_labels ?? ;
  }
}

class UpdateNodegroupConfigRequest {
  public string $client_request_token;
  public string $cluster_name;
  public UpdateLabelsPayload $labels;
  public string $nodegroup_name;
  public NodegroupScalingConfig $scaling_config;

  public function __construct(shape(
  ?'client_request_token' => string,
  ?'cluster_name' => string,
  ?'labels' => UpdateLabelsPayload,
  ?'nodegroup_name' => string,
  ?'scaling_config' => NodegroupScalingConfig,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->cluster_name = $cluster_name ?? ;
    $this->labels = $labels ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
    $this->scaling_config = $scaling_config ?? ;
  }
}

class UpdateNodegroupConfigResponse {
  public Update $update;

  public function __construct(shape(
  ?'update' => Update,
  ) $s = shape()) {
    $this->update = $update ?? ;
  }
}

class UpdateNodegroupVersionRequest {
  public string $client_request_token;
  public string $cluster_name;
  public boolean $force;
  public string $nodegroup_name;
  public string $release_version;
  public string $version;

  public function __construct(shape(
  ?'client_request_token' => string,
  ?'cluster_name' => string,
  ?'force' => boolean,
  ?'nodegroup_name' => string,
  ?'release_version' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->cluster_name = $cluster_name ?? ;
    $this->force = $force ?? ;
    $this->nodegroup_name = $nodegroup_name ?? ;
    $this->release_version = $release_version ?? ;
    $this->version = $version ?? ;
  }
}

class UpdateNodegroupVersionResponse {
  public Update $update;

  public function __construct(shape(
  ?'update' => Update,
  ) $s = shape()) {
    $this->update = $update ?? ;
  }
}

class UpdateParam {
  public UpdateParamType $type;
  public string $value;

  public function __construct(shape(
  ?'type' => UpdateParamType,
  ?'value' => string,
  ) $s = shape()) {
    $this->type = $type ?? ;
    $this->value = $value ?? ;
  }
}

type UpdateParamType = string;

type UpdateParams = vec<UpdateParam>;

type UpdateStatus = string;

type UpdateType = string;

class VpcConfigRequest {
  public BoxedBoolean $endpoint_private_access;
  public BoxedBoolean $endpoint_public_access;
  public StringList $public_access_cidrs;
  public StringList $security_group_ids;
  public StringList $subnet_ids;

  public function __construct(shape(
  ?'endpoint_private_access' => BoxedBoolean,
  ?'endpoint_public_access' => BoxedBoolean,
  ?'public_access_cidrs' => StringList,
  ?'security_group_ids' => StringList,
  ?'subnet_ids' => StringList,
  ) $s = shape()) {
    $this->endpoint_private_access = $endpoint_private_access ?? ;
    $this->endpoint_public_access = $endpoint_public_access ?? ;
    $this->public_access_cidrs = $public_access_cidrs ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
  }
}

class VpcConfigResponse {
  public string $cluster_security_group_id;
  public boolean $endpoint_private_access;
  public boolean $endpoint_public_access;
  public StringList $public_access_cidrs;
  public StringList $security_group_ids;
  public StringList $subnet_ids;
  public string $vpc_id;

  public function __construct(shape(
  ?'cluster_security_group_id' => string,
  ?'endpoint_private_access' => boolean,
  ?'endpoint_public_access' => boolean,
  ?'public_access_cidrs' => StringList,
  ?'security_group_ids' => StringList,
  ?'subnet_ids' => StringList,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cluster_security_group_id = $cluster_security_group_id ?? ;
    $this->endpoint_private_access = $endpoint_private_access ?? ;
    $this->endpoint_public_access = $endpoint_public_access ?? ;
    $this->public_access_cidrs = $public_access_cidrs ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->vpc_id = $vpc_id ?? ;
  }
}

type labelKey = string;

type labelValue = string;

type labelsKeyList = vec<String>;

type labelsMap = dict<labelKey, labelValue>;

