<?hh // strict
namespace slack\aws\eks;

interface EKS {
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateFargateProfile(CreateFargateProfileRequest) Awaitable<Errors\Result<CreateFargateProfileResponse>>;
  public function CreateNodegroup(CreateNodegroupRequest) Awaitable<Errors\Result<CreateNodegroupResponse>>;
  public function DeleteCluster(DeleteClusterRequest) Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DeleteFargateProfile(DeleteFargateProfileRequest) Awaitable<Errors\Result<DeleteFargateProfileResponse>>;
  public function DeleteNodegroup(DeleteNodegroupRequest) Awaitable<Errors\Result<DeleteNodegroupResponse>>;
  public function DescribeCluster(DescribeClusterRequest) Awaitable<Errors\Result<DescribeClusterResponse>>;
  public function DescribeFargateProfile(DescribeFargateProfileRequest) Awaitable<Errors\Result<DescribeFargateProfileResponse>>;
  public function DescribeNodegroup(DescribeNodegroupRequest) Awaitable<Errors\Result<DescribeNodegroupResponse>>;
  public function DescribeUpdate(DescribeUpdateRequest) Awaitable<Errors\Result<DescribeUpdateResponse>>;
  public function ListClusters(ListClustersRequest) Awaitable<Errors\Result<ListClustersResponse>>;
  public function ListFargateProfiles(ListFargateProfilesRequest) Awaitable<Errors\Result<ListFargateProfilesResponse>>;
  public function ListNodegroups(ListNodegroupsRequest) Awaitable<Errors\Result<ListNodegroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUpdates(ListUpdatesRequest) Awaitable<Errors\Result<ListUpdatesResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateClusterConfig(UpdateClusterConfigRequest) Awaitable<Errors\Result<UpdateClusterConfigResponse>>;
  public function UpdateClusterVersion(UpdateClusterVersionRequest) Awaitable<Errors\Result<UpdateClusterVersionResponse>>;
  public function UpdateNodegroupConfig(UpdateNodegroupConfigRequest) Awaitable<Errors\Result<UpdateNodegroupConfigResponse>>;
  public function UpdateNodegroupVersion(UpdateNodegroupVersionRequest) Awaitable<Errors\Result<UpdateNodegroupVersionResponse>>;
}

class AMITypes {
}

class AutoScalingGroup {
  public string $name;
}

class AutoScalingGroupList {
}

class BadRequestException {
  public string $message;
}

class Boolean {
}

class BoxedBoolean {
}

class BoxedInteger {
}

class Capacity {
}

class Certificate {
  public string $data;
}

class ClientException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;
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
}

class ClusterName {
}

class ClusterStatus {
}

class CreateClusterRequest {
  public string $client_request_token;
  public EncryptionConfigList $encryption_config;
  public Logging $logging;
  public ClusterName $name;
  public VpcConfigRequest $resources_vpc_config;
  public string $role_arn;
  public TagMap $tags;
  public string $version;
}

class CreateClusterResponse {
  public Cluster $cluster;
}

class CreateFargateProfileRequest {
  public string $client_request_token;
  public string $cluster_name;
  public string $fargate_profile_name;
  public string $pod_execution_role_arn;
  public FargateProfileSelectors $selectors;
  public StringList $subnets;
  public TagMap $tags;
}

class CreateFargateProfileResponse {
  public FargateProfile $fargate_profile;
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
}

class CreateNodegroupResponse {
  public Nodegroup $nodegroup;
}

class DeleteClusterRequest {
  public string $name;
}

class DeleteClusterResponse {
  public Cluster $cluster;
}

class DeleteFargateProfileRequest {
  public string $cluster_name;
  public string $fargate_profile_name;
}

class DeleteFargateProfileResponse {
  public FargateProfile $fargate_profile;
}

class DeleteNodegroupRequest {
  public string $cluster_name;
  public string $nodegroup_name;
}

class DeleteNodegroupResponse {
  public Nodegroup $nodegroup;
}

class DescribeClusterRequest {
  public string $name;
}

class DescribeClusterResponse {
  public Cluster $cluster;
}

class DescribeFargateProfileRequest {
  public string $cluster_name;
  public string $fargate_profile_name;
}

class DescribeFargateProfileResponse {
  public FargateProfile $fargate_profile;
}

class DescribeNodegroupRequest {
  public string $cluster_name;
  public string $nodegroup_name;
}

class DescribeNodegroupResponse {
  public Nodegroup $nodegroup;
}

class DescribeUpdateRequest {
  public string $name;
  public string $nodegroup_name;
  public string $update_id;
}

class DescribeUpdateResponse {
  public Update $update;
}

class EncryptionConfig {
  public Provider $provider;
  public StringList $resources;
}

class EncryptionConfigList {
}

class ErrorCode {
}

class ErrorDetail {
  public ErrorCode $error_code;
  public string $error_message;
  public StringList $resource_ids;
}

class ErrorDetails {
}

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
}

class FargateProfileLabel {
}

class FargateProfileSelector {
  public FargateProfileLabel $labels;
  public string $namespace;
}

class FargateProfileSelectors {
}

class FargateProfileStatus {
}

class FargateProfilesRequestMaxResults {
}

class Identity {
  public OIDC $oidc;
}

class InvalidParameterException {
  public string $cluster_name;
  public string $fargate_profile_name;
  public string $message;
  public string $nodegroup_name;
}

class InvalidRequestException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;
}

class Issue {
  public NodegroupIssueCode $code;
  public string $message;
  public StringList $resource_ids;
}

class IssueList {
}

class ListClustersRequest {
  public ListClustersRequestMaxResults $max_results;
  public string $next_token;
}

class ListClustersRequestMaxResults {
}

class ListClustersResponse {
  public StringList $clusters;
  public string $next_token;
}

class ListFargateProfilesRequest {
  public string $cluster_name;
  public FargateProfilesRequestMaxResults $max_results;
  public string $next_token;
}

class ListFargateProfilesResponse {
  public StringList $fargate_profile_names;
  public string $next_token;
}

class ListNodegroupsRequest {
  public string $cluster_name;
  public ListNodegroupsRequestMaxResults $max_results;
  public string $next_token;
}

class ListNodegroupsRequestMaxResults {
}

class ListNodegroupsResponse {
  public string $next_token;
  public StringList $nodegroups;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class ListUpdatesRequest {
  public ListUpdatesRequestMaxResults $max_results;
  public string $name;
  public string $next_token;
  public string $nodegroup_name;
}

class ListUpdatesRequestMaxResults {
}

class ListUpdatesResponse {
  public string $next_token;
  public StringList $update_ids;
}

class LogSetup {
  public BoxedBoolean $enabled;
  public LogTypes $types;
}

class LogSetups {
}

class LogType {
}

class LogTypes {
}

class Logging {
  public LogSetups $cluster_logging;
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
}

class NodegroupHealth {
  public IssueList $issues;
}

class NodegroupIssueCode {
}

class NodegroupResources {
  public AutoScalingGroupList $auto_scaling_groups;
  public string $remote_access_security_group;
}

class NodegroupScalingConfig {
  public Capacity $desired_size;
  public Capacity $max_size;
  public Capacity $min_size;
}

class NodegroupStatus {
}

class NotFoundException {
  public string $message;
}

class OIDC {
  public string $issuer;
}

class Provider {
  public string $key_arn;
}

class RemoteAccessConfig {
  public string $ec_2_ssh_key;
  public StringList $source_security_groups;
}

class ResourceInUseException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;
}

class ResourceLimitExceededException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;
}

class ResourceNotFoundException {
  public string $cluster_name;
  public string $fargate_profile_name;
  public string $message;
  public string $nodegroup_name;
}

class ServerException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;
}

class ServiceUnavailableException {
  public string $message;
}

class String {
}

class StringList {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public string $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Timestamp {
}

class UnsupportedAvailabilityZoneException {
  public string $cluster_name;
  public string $message;
  public string $nodegroup_name;
  public StringList $valid_zones;
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class Update {
  public Timestamp $created_at;
  public ErrorDetails $errors;
  public string $id;
  public UpdateParams $params;
  public UpdateStatus $status;
  public UpdateType $type;
}

class UpdateClusterConfigRequest {
  public string $client_request_token;
  public Logging $logging;
  public string $name;
  public VpcConfigRequest $resources_vpc_config;
}

class UpdateClusterConfigResponse {
  public Update $update;
}

class UpdateClusterVersionRequest {
  public string $client_request_token;
  public string $name;
  public string $version;
}

class UpdateClusterVersionResponse {
  public Update $update;
}

class UpdateLabelsPayload {
  public labelsMap $add_or_update_labels;
  public labelsKeyList $remove_labels;
}

class UpdateNodegroupConfigRequest {
  public string $client_request_token;
  public string $cluster_name;
  public UpdateLabelsPayload $labels;
  public string $nodegroup_name;
  public NodegroupScalingConfig $scaling_config;
}

class UpdateNodegroupConfigResponse {
  public Update $update;
}

class UpdateNodegroupVersionRequest {
  public string $client_request_token;
  public string $cluster_name;
  public boolean $force;
  public string $nodegroup_name;
  public string $release_version;
  public string $version;
}

class UpdateNodegroupVersionResponse {
  public Update $update;
}

class UpdateParam {
  public UpdateParamType $type;
  public string $value;
}

class UpdateParamType {
}

class UpdateParams {
}

class UpdateStatus {
}

class UpdateType {
}

class VpcConfigRequest {
  public BoxedBoolean $endpoint_private_access;
  public BoxedBoolean $endpoint_public_access;
  public StringList $public_access_cidrs;
  public StringList $security_group_ids;
  public StringList $subnet_ids;
}

class VpcConfigResponse {
  public string $cluster_security_group_id;
  public boolean $endpoint_private_access;
  public boolean $endpoint_public_access;
  public StringList $public_access_cidrs;
  public StringList $security_group_ids;
  public StringList $subnet_ids;
  public string $vpc_id;
}

class labelKey {
}

class labelValue {
}

class labelsKeyList {
}

class labelsMap {
}

