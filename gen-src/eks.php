<?hh // strict
namespace slack\aws\eks;

interface EKS {
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateNodegroup(CreateNodegroupRequest) Awaitable<Errors\Result<CreateNodegroupResponse>>;
  public function DeleteCluster(DeleteClusterRequest) Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DescribeNodegroup(DescribeNodegroupRequest) Awaitable<Errors\Result<DescribeNodegroupResponse>>;
  public function DescribeUpdate(DescribeUpdateRequest) Awaitable<Errors\Result<DescribeUpdateResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUpdates(ListUpdatesRequest) Awaitable<Errors\Result<ListUpdatesResponse>>;
  public function DescribeFargateProfile(DescribeFargateProfileRequest) Awaitable<Errors\Result<DescribeFargateProfileResponse>>;
  public function ListFargateProfiles(ListFargateProfilesRequest) Awaitable<Errors\Result<ListFargateProfilesResponse>>;
  public function UpdateClusterConfig(UpdateClusterConfigRequest) Awaitable<Errors\Result<UpdateClusterConfigResponse>>;
  public function UpdateNodegroupVersion(UpdateNodegroupVersionRequest) Awaitable<Errors\Result<UpdateNodegroupVersionResponse>>;
  public function CreateFargateProfile(CreateFargateProfileRequest) Awaitable<Errors\Result<CreateFargateProfileResponse>>;
  public function DeleteFargateProfile(DeleteFargateProfileRequest) Awaitable<Errors\Result<DeleteFargateProfileResponse>>;
  public function DescribeCluster(DescribeClusterRequest) Awaitable<Errors\Result<DescribeClusterResponse>>;
  public function ListClusters(ListClustersRequest) Awaitable<Errors\Result<ListClustersResponse>>;
  public function ListNodegroups(ListNodegroupsRequest) Awaitable<Errors\Result<ListNodegroupsResponse>>;
  public function UpdateClusterVersion(UpdateClusterVersionRequest) Awaitable<Errors\Result<UpdateClusterVersionResponse>>;
  public function DeleteNodegroup(DeleteNodegroupRequest) Awaitable<Errors\Result<DeleteNodegroupResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateNodegroupConfig(UpdateNodegroupConfigRequest) Awaitable<Errors\Result<UpdateNodegroupConfigResponse>>;
}

class IssueList {
}

class ServerException {
  public string $message;
  public string $cluster_name;
  public string $nodegroup_name;
}

class DescribeNodegroupResponse {
  public Nodegroup $nodegroup;
}

class FargateProfileLabel {
}

class ListNodegroupsRequest {
  public string $cluster_name;
  public ListNodegroupsRequestMaxResults $max_results;
  public string $next_token;
}

class ResourceNotFoundException {
  public string $cluster_name;
  public string $nodegroup_name;
  public string $fargate_profile_name;
  public string $message;
}

class ServiceUnavailableException {
  public string $message;
}

class UntagResourceResponse {
}

class AMITypes {
}

class BadRequestException {
  public string $message;
}

class TagResourceRequest {
  public TagMap $tags;
  public string $resource_arn;
}

class BoxedInteger {
}

class CreateFargateProfileResponse {
  public FargateProfile $fargate_profile;
}

class CreateNodegroupRequest {
  public string $nodegroup_name;
  public AMITypes $ami_type;
  public string $node_role;
  public string $release_version;
  public NodegroupScalingConfig $scaling_config;
  public BoxedInteger $disk_size;
  public labelsMap $labels;
  public string $client_request_token;
  public TagMap $tags;
  public string $version;
  public string $cluster_name;
  public StringList $subnets;
  public StringList $instance_types;
  public RemoteAccessConfig $remote_access;
}

class UpdateClusterConfigRequest {
  public string $name;
  public VpcConfigRequest $resources_vpc_config;
  public Logging $logging;
  public string $client_request_token;
}

class UpdateParamType {
}

class EncryptionConfigList {
}

class TagKey {
}

class Timestamp {
}

class UpdateClusterVersionResponse {
  public Update $update;
}

class Identity {
  public OIDC $oidc;
}

class ListNodegroupsRequestMaxResults {
}

class NotFoundException {
  public string $message;
}

class UpdateClusterVersionRequest {
  public string $version;
  public string $client_request_token;
  public string $name;
}

class Certificate {
  public string $data;
}

class NodegroupHealth {
  public IssueList $issues;
}

class ResourceLimitExceededException {
  public string $nodegroup_name;
  public string $message;
  public string $cluster_name;
}

class String {
}

class TagValue {
}

class labelsKeyList {
}

class DescribeFargateProfileRequest {
  public string $cluster_name;
  public string $fargate_profile_name;
}

class ListClustersResponse {
  public StringList $clusters;
  public string $next_token;
}

class UpdateNodegroupVersionResponse {
  public Update $update;
}

class UpdateParams {
}

class BoxedBoolean {
}

class CreateFargateProfileRequest {
  public FargateProfileSelectors $selectors;
  public string $client_request_token;
  public TagMap $tags;
  public string $fargate_profile_name;
  public string $cluster_name;
  public string $pod_execution_role_arn;
  public StringList $subnets;
}

class ListFargateProfilesRequest {
  public string $cluster_name;
  public FargateProfilesRequestMaxResults $max_results;
  public string $next_token;
}

class LogSetups {
}

class Nodegroup {
  public BoxedInteger $disk_size;
  public NodegroupHealth $health;
  public string $nodegroup_arn;
  public NodegroupStatus $status;
  public RemoteAccessConfig $remote_access;
  public AMITypes $ami_type;
  public string $node_role;
  public labelsMap $labels;
  public string $nodegroup_name;
  public string $cluster_name;
  public string $version;
  public Timestamp $created_at;
  public StringList $instance_types;
  public TagMap $tags;
  public Timestamp $modified_at;
  public NodegroupResources $resources;
  public string $release_version;
  public NodegroupScalingConfig $scaling_config;
  public StringList $subnets;
}

class RemoteAccessConfig {
  public string $ec_2_ssh_key;
  public StringList $source_security_groups;
}

class UpdateLabelsPayload {
  public labelsMap $add_or_update_labels;
  public labelsKeyList $remove_labels;
}

class UpdateNodegroupConfigRequest {
  public UpdateLabelsPayload $labels;
  public NodegroupScalingConfig $scaling_config;
  public string $client_request_token;
  public string $cluster_name;
  public string $nodegroup_name;
}

class Cluster {
  public VpcConfigResponse $resources_vpc_config;
  public Identity $identity;
  public EncryptionConfigList $encryption_config;
  public string $version;
  public Certificate $certificate_authority;
  public string $arn;
  public Timestamp $created_at;
  public string $endpoint;
  public Logging $logging;
  public string $client_request_token;
  public string $platform_version;
  public TagMap $tags;
  public string $name;
  public ClusterStatus $status;
  public string $role_arn;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class TagKeyList {
}

class DeleteNodegroupRequest {
  public string $cluster_name;
  public string $nodegroup_name;
}

class DescribeClusterResponse {
  public Cluster $cluster;
}

class DescribeClusterRequest {
  public string $name;
}

class InvalidRequestException {
  public string $message;
  public string $cluster_name;
  public string $nodegroup_name;
}

class VpcConfigRequest {
  public StringList $subnet_ids;
  public StringList $security_group_ids;
  public BoxedBoolean $endpoint_public_access;
  public BoxedBoolean $endpoint_private_access;
  public StringList $public_access_cidrs;
}

class FargateProfile {
  public string $fargate_profile_arn;
  public Timestamp $created_at;
  public StringList $subnets;
  public FargateProfileSelectors $selectors;
  public TagMap $tags;
  public string $fargate_profile_name;
  public string $cluster_name;
  public string $pod_execution_role_arn;
  public FargateProfileStatus $status;
}

class UpdateClusterConfigResponse {
  public Update $update;
}

class Update {
  public string $id;
  public UpdateStatus $status;
  public UpdateType $type;
  public UpdateParams $params;
  public Timestamp $created_at;
  public ErrorDetails $errors;
}

class ListClustersRequest {
  public string $next_token;
  public ListClustersRequestMaxResults $max_results;
}

class NodegroupStatus {
}

class CreateClusterResponse {
  public Cluster $cluster;
}

class FargateProfileSelector {
  public FargateProfileLabel $labels;
  public string $namespace;
}

class ClusterStatus {
}

class DeleteClusterResponse {
  public Cluster $cluster;
}

class ListUpdatesRequest {
  public string $name;
  public string $nodegroup_name;
  public string $next_token;
  public ListUpdatesRequestMaxResults $max_results;
}

class LogType {
}

class UpdateNodegroupConfigResponse {
  public Update $update;
}

class UpdateType {
}

class DeleteNodegroupResponse {
  public Nodegroup $nodegroup;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class TagResourceResponse {
}

class ListNodegroupsResponse {
  public StringList $nodegroups;
  public string $next_token;
}

class TagMap {
}

class DeleteFargateProfileResponse {
  public FargateProfile $fargate_profile;
}

class Logging {
  public LogSetups $cluster_logging;
}

class Boolean {
}

class DeleteFargateProfileRequest {
  public string $cluster_name;
  public string $fargate_profile_name;
}

class FargateProfilesRequestMaxResults {
}

class NodegroupScalingConfig {
  public Capacity $min_size;
  public Capacity $max_size;
  public Capacity $desired_size;
}

class labelValue {
}

class ErrorDetail {
  public StringList $resource_ids;
  public ErrorCode $error_code;
  public string $error_message;
}

class FargateProfileStatus {
}

class DescribeUpdateRequest {
  public string $nodegroup_name;
  public string $name;
  public string $update_id;
}

class LogSetup {
  public LogTypes $types;
  public BoxedBoolean $enabled;
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_keys;
}

class UpdateStatus {
}

class VpcConfigResponse {
  public string $vpc_id;
  public boolean $endpoint_public_access;
  public boolean $endpoint_private_access;
  public StringList $public_access_cidrs;
  public StringList $subnet_ids;
  public StringList $security_group_ids;
  public string $cluster_security_group_id;
}

class Capacity {
}

class CreateClusterRequest {
  public string $client_request_token;
  public TagMap $tags;
  public EncryptionConfigList $encryption_config;
  public ClusterName $name;
  public string $version;
  public string $role_arn;
  public VpcConfigRequest $resources_vpc_config;
  public Logging $logging;
}

class UpdateParam {
  public UpdateParamType $type;
  public string $value;
}

class DescribeUpdateResponse {
  public Update $update;
}

class UpdateNodegroupVersionRequest {
  public string $release_version;
  public boolean $force;
  public string $client_request_token;
  public string $cluster_name;
  public string $nodegroup_name;
  public string $version;
}

class ErrorDetails {
}

class Issue {
  public NodegroupIssueCode $code;
  public string $message;
  public StringList $resource_ids;
}

class ListUpdatesRequestMaxResults {
}

class ListUpdatesResponse {
  public StringList $update_ids;
  public string $next_token;
}

class DescribeFargateProfileResponse {
  public FargateProfile $fargate_profile;
}

class EncryptionConfig {
  public StringList $resources;
  public Provider $provider;
}

class ErrorCode {
}

class FargateProfileSelectors {
}

class labelKey {
}

class labelsMap {
}

class ClusterName {
}

class CreateNodegroupResponse {
  public Nodegroup $nodegroup;
}

class ListFargateProfilesResponse {
  public StringList $fargate_profile_names;
  public string $next_token;
}

class OIDC {
  public string $issuer;
}

class Provider {
  public string $key_arn;
}

class ResourceInUseException {
  public string $cluster_name;
  public string $nodegroup_name;
  public string $message;
}

class DescribeNodegroupRequest {
  public string $cluster_name;
  public string $nodegroup_name;
}

class ListClustersRequestMaxResults {
}

class LogTypes {
}

class NodegroupIssueCode {
}

class UnsupportedAvailabilityZoneException {
  public string $message;
  public string $cluster_name;
  public string $nodegroup_name;
  public StringList $valid_zones;
}

class AutoScalingGroup {
  public string $name;
}

class InvalidParameterException {
  public string $cluster_name;
  public string $nodegroup_name;
  public string $fargate_profile_name;
  public string $message;
}

class DeleteClusterRequest {
  public string $name;
}

class NodegroupResources {
  public AutoScalingGroupList $auto_scaling_groups;
  public string $remote_access_security_group;
}

class ClientException {
  public string $message;
  public string $cluster_name;
  public string $nodegroup_name;
}

class AutoScalingGroupList {
}

class StringList {
}

