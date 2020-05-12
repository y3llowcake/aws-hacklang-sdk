<?hh // strict
namespace slack\aws\eks;

interface EKS {
  public function CreateCluster(CreateClusterRequest $in): Awaitable<\Errors\Result<CreateClusterResponse>>;
  public function CreateFargateProfile(CreateFargateProfileRequest $in): Awaitable<\Errors\Result<CreateFargateProfileResponse>>;
  public function CreateNodegroup(CreateNodegroupRequest $in): Awaitable<\Errors\Result<CreateNodegroupResponse>>;
  public function DeleteCluster(DeleteClusterRequest $in): Awaitable<\Errors\Result<DeleteClusterResponse>>;
  public function DeleteFargateProfile(DeleteFargateProfileRequest $in): Awaitable<\Errors\Result<DeleteFargateProfileResponse>>;
  public function DeleteNodegroup(DeleteNodegroupRequest $in): Awaitable<\Errors\Result<DeleteNodegroupResponse>>;
  public function DescribeCluster(DescribeClusterRequest $in): Awaitable<\Errors\Result<DescribeClusterResponse>>;
  public function DescribeFargateProfile(DescribeFargateProfileRequest $in): Awaitable<\Errors\Result<DescribeFargateProfileResponse>>;
  public function DescribeNodegroup(DescribeNodegroupRequest $in): Awaitable<\Errors\Result<DescribeNodegroupResponse>>;
  public function DescribeUpdate(DescribeUpdateRequest $in): Awaitable<\Errors\Result<DescribeUpdateResponse>>;
  public function ListClusters(ListClustersRequest $in): Awaitable<\Errors\Result<ListClustersResponse>>;
  public function ListFargateProfiles(ListFargateProfilesRequest $in): Awaitable<\Errors\Result<ListFargateProfilesResponse>>;
  public function ListNodegroups(ListNodegroupsRequest $in): Awaitable<\Errors\Result<ListNodegroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListUpdates(ListUpdatesRequest $in): Awaitable<\Errors\Result<ListUpdatesResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateClusterConfig(UpdateClusterConfigRequest $in): Awaitable<\Errors\Result<UpdateClusterConfigResponse>>;
  public function UpdateClusterVersion(UpdateClusterVersionRequest $in): Awaitable<\Errors\Result<UpdateClusterVersionResponse>>;
  public function UpdateNodegroupConfig(UpdateNodegroupConfigRequest $in): Awaitable<\Errors\Result<UpdateNodegroupConfigResponse>>;
  public function UpdateNodegroupVersion(UpdateNodegroupVersionRequest $in): Awaitable<\Errors\Result<UpdateNodegroupVersionResponse>>;
}

type AMITypes = string;

class AutoScalingGroup {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type AutoScalingGroupList = vec<AutoScalingGroup>;

class BadRequestException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
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
    $this->data = $s['data'] ?? '';
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
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
  }
}

class Cluster {
  public string $arn;
  public ?Certificate $certificate_authority;
  public string $client_request_token;
  public ?Timestamp $created_at;
  public ?EncryptionConfigList $encryption_config;
  public string $endpoint;
  public ?Identity $identity;
  public ?Logging $logging;
  public string $name;
  public string $platform_version;
  public ?VpcConfigResponse $resources_vpc_config;
  public string $role_arn;
  public ?ClusterStatus $status;
  public ?TagMap $tags;
  public string $version;

  public function __construct(shape(
    ?'arn' => string,
    ?'certificate_authority' => ?Certificate,
    ?'client_request_token' => string,
    ?'created_at' => ?Timestamp,
    ?'encryption_config' => ?EncryptionConfigList,
    ?'endpoint' => string,
    ?'identity' => ?Identity,
    ?'logging' => ?Logging,
    ?'name' => string,
    ?'platform_version' => string,
    ?'resources_vpc_config' => ?VpcConfigResponse,
    ?'role_arn' => string,
    ?'status' => ?ClusterStatus,
    ?'tags' => ?TagMap,
    ?'version' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->certificate_authority = $s['certificate_authority'] ?? null;
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->encryption_config = $s['encryption_config'] ?? vec[];
    $this->endpoint = $s['endpoint'] ?? '';
    $this->identity = $s['identity'] ?? null;
    $this->logging = $s['logging'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->platform_version = $s['platform_version'] ?? '';
    $this->resources_vpc_config = $s['resources_vpc_config'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
  }
}

type ClusterName = string;

type ClusterStatus = string;

class CreateClusterRequest {
  public string $client_request_token;
  public ?EncryptionConfigList $encryption_config;
  public ?Logging $logging;
  public ?ClusterName $name;
  public ?VpcConfigRequest $resources_vpc_config;
  public string $role_arn;
  public ?TagMap $tags;
  public string $version;

  public function __construct(shape(
    ?'client_request_token' => string,
    ?'encryption_config' => ?EncryptionConfigList,
    ?'logging' => ?Logging,
    ?'name' => ?ClusterName,
    ?'resources_vpc_config' => ?VpcConfigRequest,
    ?'role_arn' => string,
    ?'tags' => ?TagMap,
    ?'version' => string,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->encryption_config = $s['encryption_config'] ?? vec[];
    $this->logging = $s['logging'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resources_vpc_config = $s['resources_vpc_config'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
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

class CreateFargateProfileRequest {
  public string $client_request_token;
  public string $cluster_name;
  public string $fargate_profile_name;
  public string $pod_execution_role_arn;
  public ?FargateProfileSelectors $selectors;
  public ?StringList $subnets;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'client_request_token' => string,
    ?'cluster_name' => string,
    ?'fargate_profile_name' => string,
    ?'pod_execution_role_arn' => string,
    ?'selectors' => ?FargateProfileSelectors,
    ?'subnets' => ?StringList,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->fargate_profile_name = $s['fargate_profile_name'] ?? '';
    $this->pod_execution_role_arn = $s['pod_execution_role_arn'] ?? '';
    $this->selectors = $s['selectors'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateFargateProfileResponse {
  public ?FargateProfile $fargate_profile;

  public function __construct(shape(
    ?'fargate_profile' => ?FargateProfile,
  ) $s = shape()) {
    $this->fargate_profile = $s['fargate_profile'] ?? null;
  }
}

class CreateNodegroupRequest {
  public ?AMITypes $ami_type;
  public string $client_request_token;
  public string $cluster_name;
  public ?BoxedInteger $disk_size;
  public ?StringList $instance_types;
  public ?labelsMap $labels;
  public string $node_role;
  public string $nodegroup_name;
  public string $release_version;
  public ?RemoteAccessConfig $remote_access;
  public ?NodegroupScalingConfig $scaling_config;
  public ?StringList $subnets;
  public ?TagMap $tags;
  public string $version;

  public function __construct(shape(
    ?'ami_type' => ?AMITypes,
    ?'client_request_token' => string,
    ?'cluster_name' => string,
    ?'disk_size' => ?BoxedInteger,
    ?'instance_types' => ?StringList,
    ?'labels' => ?labelsMap,
    ?'node_role' => string,
    ?'nodegroup_name' => string,
    ?'release_version' => string,
    ?'remote_access' => ?RemoteAccessConfig,
    ?'scaling_config' => ?NodegroupScalingConfig,
    ?'subnets' => ?StringList,
    ?'tags' => ?TagMap,
    ?'version' => string,
  ) $s = shape()) {
    $this->ami_type = $s['ami_type'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->disk_size = $s['disk_size'] ?? 0;
    $this->instance_types = $s['instance_types'] ?? vec[];
    $this->labels = $s['labels'] ?? dict[];
    $this->node_role = $s['node_role'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
    $this->release_version = $s['release_version'] ?? '';
    $this->remote_access = $s['remote_access'] ?? null;
    $this->scaling_config = $s['scaling_config'] ?? null;
    $this->subnets = $s['subnets'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
  }
}

class CreateNodegroupResponse {
  public ?Nodegroup $nodegroup;

  public function __construct(shape(
    ?'nodegroup' => ?Nodegroup,
  ) $s = shape()) {
    $this->nodegroup = $s['nodegroup'] ?? null;
  }
}

class DeleteClusterRequest {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
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

class DeleteFargateProfileRequest {
  public string $cluster_name;
  public string $fargate_profile_name;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'fargate_profile_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->fargate_profile_name = $s['fargate_profile_name'] ?? '';
  }
}

class DeleteFargateProfileResponse {
  public ?FargateProfile $fargate_profile;

  public function __construct(shape(
    ?'fargate_profile' => ?FargateProfile,
  ) $s = shape()) {
    $this->fargate_profile = $s['fargate_profile'] ?? null;
  }
}

class DeleteNodegroupRequest {
  public string $cluster_name;
  public string $nodegroup_name;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
  }
}

class DeleteNodegroupResponse {
  public ?Nodegroup $nodegroup;

  public function __construct(shape(
    ?'nodegroup' => ?Nodegroup,
  ) $s = shape()) {
    $this->nodegroup = $s['nodegroup'] ?? null;
  }
}

class DescribeClusterRequest {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DescribeClusterResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class DescribeFargateProfileRequest {
  public string $cluster_name;
  public string $fargate_profile_name;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'fargate_profile_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->fargate_profile_name = $s['fargate_profile_name'] ?? '';
  }
}

class DescribeFargateProfileResponse {
  public ?FargateProfile $fargate_profile;

  public function __construct(shape(
    ?'fargate_profile' => ?FargateProfile,
  ) $s = shape()) {
    $this->fargate_profile = $s['fargate_profile'] ?? null;
  }
}

class DescribeNodegroupRequest {
  public string $cluster_name;
  public string $nodegroup_name;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
  }
}

class DescribeNodegroupResponse {
  public ?Nodegroup $nodegroup;

  public function __construct(shape(
    ?'nodegroup' => ?Nodegroup,
  ) $s = shape()) {
    $this->nodegroup = $s['nodegroup'] ?? null;
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
    $this->name = $s['name'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
    $this->update_id = $s['update_id'] ?? '';
  }
}

class DescribeUpdateResponse {
  public ?Update $update;

  public function __construct(shape(
    ?'update' => ?Update,
  ) $s = shape()) {
    $this->update = $s['update'] ?? null;
  }
}

class EncryptionConfig {
  public ?Provider $provider;
  public ?StringList $resources;

  public function __construct(shape(
    ?'provider' => ?Provider,
    ?'resources' => ?StringList,
  ) $s = shape()) {
    $this->provider = $s['provider'] ?? null;
    $this->resources = $s['resources'] ?? vec[];
  }
}

type EncryptionConfigList = vec<EncryptionConfig>;

type ErrorCode = string;

class ErrorDetail {
  public ?ErrorCode $error_code;
  public string $error_message;
  public ?StringList $resource_ids;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => string,
    ?'resource_ids' => ?StringList,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->resource_ids = $s['resource_ids'] ?? vec[];
  }
}

type ErrorDetails = vec<ErrorDetail>;

class FargateProfile {
  public string $cluster_name;
  public ?Timestamp $created_at;
  public string $fargate_profile_arn;
  public string $fargate_profile_name;
  public string $pod_execution_role_arn;
  public ?FargateProfileSelectors $selectors;
  public ?FargateProfileStatus $status;
  public ?StringList $subnets;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'created_at' => ?Timestamp,
    ?'fargate_profile_arn' => string,
    ?'fargate_profile_name' => string,
    ?'pod_execution_role_arn' => string,
    ?'selectors' => ?FargateProfileSelectors,
    ?'status' => ?FargateProfileStatus,
    ?'subnets' => ?StringList,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->fargate_profile_arn = $s['fargate_profile_arn'] ?? '';
    $this->fargate_profile_name = $s['fargate_profile_name'] ?? '';
    $this->pod_execution_role_arn = $s['pod_execution_role_arn'] ?? '';
    $this->selectors = $s['selectors'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->subnets = $s['subnets'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

type FargateProfileLabel = dict<String, String>;

class FargateProfileSelector {
  public ?FargateProfileLabel $labels;
  public string $namespace;

  public function __construct(shape(
    ?'labels' => ?FargateProfileLabel,
    ?'namespace' => string,
  ) $s = shape()) {
    $this->labels = $s['labels'] ?? dict[];
    $this->namespace = $s['namespace'] ?? '';
  }
}

type FargateProfileSelectors = vec<FargateProfileSelector>;

type FargateProfileStatus = string;

type FargateProfilesRequestMaxResults = int;

class Identity {
  public ?OIDC $oidc;

  public function __construct(shape(
    ?'oidc' => ?OIDC,
  ) $s = shape()) {
    $this->oidc = $s['oidc'] ?? null;
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
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->fargate_profile_name = $s['fargate_profile_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
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
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
  }
}

class Issue {
  public ?NodegroupIssueCode $code;
  public string $message;
  public ?StringList $resource_ids;

  public function __construct(shape(
    ?'code' => ?NodegroupIssueCode,
    ?'message' => string,
    ?'resource_ids' => ?StringList,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->resource_ids = $s['resource_ids'] ?? vec[];
  }
}

type IssueList = vec<Issue>;

class ListClustersRequest {
  public ?ListClustersRequestMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?ListClustersRequestMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListClustersRequestMaxResults = int;

class ListClustersResponse {
  public ?StringList $clusters;
  public string $next_token;

  public function __construct(shape(
    ?'clusters' => ?StringList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->clusters = $s['clusters'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFargateProfilesRequest {
  public string $cluster_name;
  public ?FargateProfilesRequestMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'max_results' => ?FargateProfilesRequestMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFargateProfilesResponse {
  public ?StringList $fargate_profile_names;
  public string $next_token;

  public function __construct(shape(
    ?'fargate_profile_names' => ?StringList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->fargate_profile_names = $s['fargate_profile_names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListNodegroupsRequest {
  public string $cluster_name;
  public ?ListNodegroupsRequestMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'max_results' => ?ListNodegroupsRequestMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListNodegroupsRequestMaxResults = int;

class ListNodegroupsResponse {
  public string $next_token;
  public ?StringList $nodegroups;

  public function __construct(shape(
    ?'next_token' => string,
    ?'nodegroups' => ?StringList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->nodegroups = $s['nodegroups'] ?? vec[];
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
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListUpdatesRequest {
  public ?ListUpdatesRequestMaxResults $max_results;
  public string $name;
  public string $next_token;
  public string $nodegroup_name;

  public function __construct(shape(
    ?'max_results' => ?ListUpdatesRequestMaxResults,
    ?'name' => string,
    ?'next_token' => string,
    ?'nodegroup_name' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
  }
}

type ListUpdatesRequestMaxResults = int;

class ListUpdatesResponse {
  public string $next_token;
  public ?StringList $update_ids;

  public function __construct(shape(
    ?'next_token' => string,
    ?'update_ids' => ?StringList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->update_ids = $s['update_ids'] ?? vec[];
  }
}

class LogSetup {
  public ?BoxedBoolean $enabled;
  public ?LogTypes $types;

  public function __construct(shape(
    ?'enabled' => ?BoxedBoolean,
    ?'types' => ?LogTypes,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->types = $s['types'] ?? vec[];
  }
}

type LogSetups = vec<LogSetup>;

type LogType = string;

type LogTypes = vec<LogType>;

class Logging {
  public ?LogSetups $cluster_logging;

  public function __construct(shape(
    ?'cluster_logging' => ?LogSetups,
  ) $s = shape()) {
    $this->cluster_logging = $s['cluster_logging'] ?? vec[];
  }
}

class Nodegroup {
  public ?AMITypes $ami_type;
  public string $cluster_name;
  public ?Timestamp $created_at;
  public ?BoxedInteger $disk_size;
  public ?NodegroupHealth $health;
  public ?StringList $instance_types;
  public ?labelsMap $labels;
  public ?Timestamp $modified_at;
  public string $node_role;
  public string $nodegroup_arn;
  public string $nodegroup_name;
  public string $release_version;
  public ?RemoteAccessConfig $remote_access;
  public ?NodegroupResources $resources;
  public ?NodegroupScalingConfig $scaling_config;
  public ?NodegroupStatus $status;
  public ?StringList $subnets;
  public ?TagMap $tags;
  public string $version;

  public function __construct(shape(
    ?'ami_type' => ?AMITypes,
    ?'cluster_name' => string,
    ?'created_at' => ?Timestamp,
    ?'disk_size' => ?BoxedInteger,
    ?'health' => ?NodegroupHealth,
    ?'instance_types' => ?StringList,
    ?'labels' => ?labelsMap,
    ?'modified_at' => ?Timestamp,
    ?'node_role' => string,
    ?'nodegroup_arn' => string,
    ?'nodegroup_name' => string,
    ?'release_version' => string,
    ?'remote_access' => ?RemoteAccessConfig,
    ?'resources' => ?NodegroupResources,
    ?'scaling_config' => ?NodegroupScalingConfig,
    ?'status' => ?NodegroupStatus,
    ?'subnets' => ?StringList,
    ?'tags' => ?TagMap,
    ?'version' => string,
  ) $s = shape()) {
    $this->ami_type = $s['ami_type'] ?? '';
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->disk_size = $s['disk_size'] ?? 0;
    $this->health = $s['health'] ?? null;
    $this->instance_types = $s['instance_types'] ?? vec[];
    $this->labels = $s['labels'] ?? dict[];
    $this->modified_at = $s['modified_at'] ?? 0;
    $this->node_role = $s['node_role'] ?? '';
    $this->nodegroup_arn = $s['nodegroup_arn'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
    $this->release_version = $s['release_version'] ?? '';
    $this->remote_access = $s['remote_access'] ?? null;
    $this->resources = $s['resources'] ?? null;
    $this->scaling_config = $s['scaling_config'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->subnets = $s['subnets'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
  }
}

class NodegroupHealth {
  public ?IssueList $issues;

  public function __construct(shape(
    ?'issues' => ?IssueList,
  ) $s = shape()) {
    $this->issues = $s['issues'] ?? vec[];
  }
}

type NodegroupIssueCode = string;

class NodegroupResources {
  public ?AutoScalingGroupList $auto_scaling_groups;
  public string $remote_access_security_group;

  public function __construct(shape(
    ?'auto_scaling_groups' => ?AutoScalingGroupList,
    ?'remote_access_security_group' => string,
  ) $s = shape()) {
    $this->auto_scaling_groups = $s['auto_scaling_groups'] ?? vec[];
    $this->remote_access_security_group = $s['remote_access_security_group'] ?? '';
  }
}

class NodegroupScalingConfig {
  public ?Capacity $desired_size;
  public ?Capacity $max_size;
  public ?Capacity $min_size;

  public function __construct(shape(
    ?'desired_size' => ?Capacity,
    ?'max_size' => ?Capacity,
    ?'min_size' => ?Capacity,
  ) $s = shape()) {
    $this->desired_size = $s['desired_size'] ?? 0;
    $this->max_size = $s['max_size'] ?? 0;
    $this->min_size = $s['min_size'] ?? 0;
  }
}

type NodegroupStatus = string;

class NotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OIDC {
  public string $issuer;

  public function __construct(shape(
    ?'issuer' => string,
  ) $s = shape()) {
    $this->issuer = $s['issuer'] ?? '';
  }
}

class Provider {
  public string $key_arn;

  public function __construct(shape(
    ?'key_arn' => string,
  ) $s = shape()) {
    $this->key_arn = $s['key_arn'] ?? '';
  }
}

class RemoteAccessConfig {
  public string $ec_2_ssh_key;
  public ?StringList $source_security_groups;

  public function __construct(shape(
    ?'ec_2_ssh_key' => string,
    ?'source_security_groups' => ?StringList,
  ) $s = shape()) {
    $this->ec_2_ssh_key = $s['ec_2_ssh_key'] ?? '';
    $this->source_security_groups = $s['source_security_groups'] ?? vec[];
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
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
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
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
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
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->fargate_profile_name = $s['fargate_profile_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
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
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
  }
}

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type String = string;

type StringList = vec<String>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public string $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
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
  public ?StringList $valid_zones;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'message' => string,
    ?'nodegroup_name' => string,
    ?'valid_zones' => ?StringList,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
    $this->valid_zones = $s['valid_zones'] ?? vec[];
  }
}

class UntagResourceRequest {
  public string $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Update {
  public ?Timestamp $created_at;
  public ?ErrorDetails $errors;
  public string $id;
  public ?UpdateParams $params;
  public ?UpdateStatus $status;
  public ?UpdateType $type;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'errors' => ?ErrorDetails,
    ?'id' => string,
    ?'params' => ?UpdateParams,
    ?'status' => ?UpdateStatus,
    ?'type' => ?UpdateType,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->errors = $s['errors'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->params = $s['params'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class UpdateClusterConfigRequest {
  public string $client_request_token;
  public ?Logging $logging;
  public string $name;
  public ?VpcConfigRequest $resources_vpc_config;

  public function __construct(shape(
    ?'client_request_token' => string,
    ?'logging' => ?Logging,
    ?'name' => string,
    ?'resources_vpc_config' => ?VpcConfigRequest,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->logging = $s['logging'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resources_vpc_config = $s['resources_vpc_config'] ?? null;
  }
}

class UpdateClusterConfigResponse {
  public ?Update $update;

  public function __construct(shape(
    ?'update' => ?Update,
  ) $s = shape()) {
    $this->update = $s['update'] ?? null;
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
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdateClusterVersionResponse {
  public ?Update $update;

  public function __construct(shape(
    ?'update' => ?Update,
  ) $s = shape()) {
    $this->update = $s['update'] ?? null;
  }
}

class UpdateLabelsPayload {
  public ?labelsMap $add_or_update_labels;
  public ?labelsKeyList $remove_labels;

  public function __construct(shape(
    ?'add_or_update_labels' => ?labelsMap,
    ?'remove_labels' => ?labelsKeyList,
  ) $s = shape()) {
    $this->add_or_update_labels = $s['add_or_update_labels'] ?? dict[];
    $this->remove_labels = $s['remove_labels'] ?? vec[];
  }
}

class UpdateNodegroupConfigRequest {
  public string $client_request_token;
  public string $cluster_name;
  public ?UpdateLabelsPayload $labels;
  public string $nodegroup_name;
  public ?NodegroupScalingConfig $scaling_config;

  public function __construct(shape(
    ?'client_request_token' => string,
    ?'cluster_name' => string,
    ?'labels' => ?UpdateLabelsPayload,
    ?'nodegroup_name' => string,
    ?'scaling_config' => ?NodegroupScalingConfig,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->labels = $s['labels'] ?? null;
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
    $this->scaling_config = $s['scaling_config'] ?? null;
  }
}

class UpdateNodegroupConfigResponse {
  public ?Update $update;

  public function __construct(shape(
    ?'update' => ?Update,
  ) $s = shape()) {
    $this->update = $s['update'] ?? null;
  }
}

class UpdateNodegroupVersionRequest {
  public string $client_request_token;
  public string $cluster_name;
  public bool $force;
  public string $nodegroup_name;
  public string $release_version;
  public string $version;

  public function __construct(shape(
    ?'client_request_token' => string,
    ?'cluster_name' => string,
    ?'force' => bool,
    ?'nodegroup_name' => string,
    ?'release_version' => string,
    ?'version' => string,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->force = $s['force'] ?? false;
    $this->nodegroup_name = $s['nodegroup_name'] ?? '';
    $this->release_version = $s['release_version'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdateNodegroupVersionResponse {
  public ?Update $update;

  public function __construct(shape(
    ?'update' => ?Update,
  ) $s = shape()) {
    $this->update = $s['update'] ?? null;
  }
}

class UpdateParam {
  public ?UpdateParamType $type;
  public string $value;

  public function __construct(shape(
    ?'type' => ?UpdateParamType,
    ?'value' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type UpdateParamType = string;

type UpdateParams = vec<UpdateParam>;

type UpdateStatus = string;

type UpdateType = string;

class VpcConfigRequest {
  public ?BoxedBoolean $endpoint_private_access;
  public ?BoxedBoolean $endpoint_public_access;
  public ?StringList $public_access_cidrs;
  public ?StringList $security_group_ids;
  public ?StringList $subnet_ids;

  public function __construct(shape(
    ?'endpoint_private_access' => ?BoxedBoolean,
    ?'endpoint_public_access' => ?BoxedBoolean,
    ?'public_access_cidrs' => ?StringList,
    ?'security_group_ids' => ?StringList,
    ?'subnet_ids' => ?StringList,
  ) $s = shape()) {
    $this->endpoint_private_access = $s['endpoint_private_access'] ?? false;
    $this->endpoint_public_access = $s['endpoint_public_access'] ?? false;
    $this->public_access_cidrs = $s['public_access_cidrs'] ?? vec[];
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class VpcConfigResponse {
  public string $cluster_security_group_id;
  public bool $endpoint_private_access;
  public bool $endpoint_public_access;
  public ?StringList $public_access_cidrs;
  public ?StringList $security_group_ids;
  public ?StringList $subnet_ids;
  public string $vpc_id;

  public function __construct(shape(
    ?'cluster_security_group_id' => string,
    ?'endpoint_private_access' => bool,
    ?'endpoint_public_access' => bool,
    ?'public_access_cidrs' => ?StringList,
    ?'security_group_ids' => ?StringList,
    ?'subnet_ids' => ?StringList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cluster_security_group_id = $s['cluster_security_group_id'] ?? '';
    $this->endpoint_private_access = $s['endpoint_private_access'] ?? false;
    $this->endpoint_public_access = $s['endpoint_public_access'] ?? false;
    $this->public_access_cidrs = $s['public_access_cidrs'] ?? vec[];
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type labelKey = string;

type labelValue = string;

type labelsKeyList = vec<String>;

type labelsMap = dict<labelKey, labelValue>;

