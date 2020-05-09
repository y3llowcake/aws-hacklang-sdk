<?hh // strict
namespace slack\aws\dax;

interface DAX {
  public function DescribeParameterGroups(DescribeParameterGroupsRequest) Awaitable<Errors\Result<DescribeParameterGroupsResponse>>;
  public function DescribeSubnetGroups(DescribeSubnetGroupsRequest) Awaitable<Errors\Result<DescribeSubnetGroupsResponse>>;
  public function RebootNode(RebootNodeRequest) Awaitable<Errors\Result<RebootNodeResponse>>;
  public function UpdateParameterGroup(UpdateParameterGroupRequest) Awaitable<Errors\Result<UpdateParameterGroupResponse>>;
  public function DeleteCluster(DeleteClusterRequest) Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DescribeClusters(DescribeClustersRequest) Awaitable<Errors\Result<DescribeClustersResponse>>;
  public function DescribeDefaultParameters(DescribeDefaultParametersRequest) Awaitable<Errors\Result<DescribeDefaultParametersResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateSubnetGroup(UpdateSubnetGroupRequest) Awaitable<Errors\Result<UpdateSubnetGroupResponse>>;
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateSubnetGroup(CreateSubnetGroupRequest) Awaitable<Errors\Result<CreateSubnetGroupResponse>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function IncreaseReplicationFactor(IncreaseReplicationFactorRequest) Awaitable<Errors\Result<IncreaseReplicationFactorResponse>>;
  public function UpdateCluster(UpdateClusterRequest) Awaitable<Errors\Result<UpdateClusterResponse>>;
  public function DecreaseReplicationFactor(DecreaseReplicationFactorRequest) Awaitable<Errors\Result<DecreaseReplicationFactorResponse>>;
  public function DeleteParameterGroup(DeleteParameterGroupRequest) Awaitable<Errors\Result<DeleteParameterGroupResponse>>;
  public function DeleteSubnetGroup(DeleteSubnetGroupRequest) Awaitable<Errors\Result<DeleteSubnetGroupResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CreateParameterGroup(CreateParameterGroupRequest) Awaitable<Errors\Result<CreateParameterGroupResponse>>;
  public function DescribeEvents(DescribeEventsRequest) Awaitable<Errors\Result<DescribeEventsResponse>>;
  public function DescribeParameters(DescribeParametersRequest) Awaitable<Errors\Result<DescribeParametersResponse>>;
}

class DescribeSubnetGroupsResponse {
  public string $next_token;
  public SubnetGroupList $subnet_groups;
}

class String {
}

class TagResourceResponse {
  public TagList $tags;
}

class UpdateParameterGroupResponse {
  public ParameterGroup $parameter_group;
}

class AwsQueryErrorMessage {
}

class SSESpecification {
  public SSEEnabled $enabled;
}

class SubnetGroupNotFoundFault {
}

class TagQuotaPerResourceExceeded {
}

class DeleteParameterGroupRequest {
  public string $parameter_group_name;
}

class DeleteParameterGroupResponse {
  public string $deletion_message;
}

class ParameterType {
}

class UpdateClusterRequest {
  public string $parameter_group_name;
  public SecurityGroupIdentifierList $security_group_ids;
  public string $cluster_name;
  public string $description;
  public string $preferred_maintenance_window;
  public string $notification_topic_arn;
  public string $notification_topic_status;
}

class DescribeEventsRequest {
  public TStamp $end_time;
  public IntegerOptional $duration;
  public IntegerOptional $max_results;
  public string $next_token;
  public string $source_name;
  public SourceType $source_type;
  public TStamp $start_time;
}

class SSEDescription {
  public SSEStatus $status;
}

class UntagResourceRequest {
  public string $resource_name;
  public KeyList $tag_keys;
}

class NodeTypeSpecificValueList {
}

class NotificationConfiguration {
  public string $topic_arn;
  public string $topic_status;
}

class NodeNotFoundFault {
}

class ParameterNameValueList {
}

class CreateSubnetGroupRequest {
  public string $subnet_group_name;
  public string $description;
  public SubnetIdentifierList $subnet_ids;
}

class DescribeSubnetGroupsRequest {
  public SubnetGroupNameList $subnet_group_names;
  public IntegerOptional $max_results;
  public string $next_token;
}

class Integer {
}

class ParameterList {
}

class InvalidARNFault {
}

class InvalidParameterGroupStateFault {
}

class ParameterGroupList {
}

class Cluster {
  public IntegerOptional $active_nodes;
  public string $preferred_maintenance_window;
  public string $subnet_group;
  public IntegerOptional $total_nodes;
  public string $node_type;
  public NodeList $nodes;
  public NotificationConfiguration $notification_configuration;
  public string $iam_role_arn;
  public ParameterGroupStatus $parameter_group;
  public string $description;
  public string $cluster_arn;
  public Endpoint $cluster_discovery_endpoint;
  public NodeIdentifierList $node_ids_to_remove;
  public SecurityGroupMembershipList $security_groups;
  public SSEDescription $sse_description;
  public string $cluster_name;
  public string $status;
}

class DeleteSubnetGroupResponse {
  public string $deletion_message;
}

class ParameterGroupAlreadyExistsFault {
}

class ListTagsResponse {
  public TagList $tags;
  public string $next_token;
}

class UntagResourceResponse {
  public TagList $tags;
}

class UpdateClusterResponse {
  public Cluster $cluster;
}

class ClusterNameList {
}

class ClusterNotFoundFault {
}

class InsufficientClusterCapacityFault {
}

class SubnetInUse {
}

class SubnetQuotaExceededFault {
}

class ClusterQuotaForCustomerExceededFault {
}

class ParameterGroupNotFoundFault {
}

class SecurityGroupMembership {
  public string $security_group_identifier;
  public string $status;
}

class DescribeClustersRequest {
  public IntegerOptional $max_results;
  public string $next_token;
  public ClusterNameList $cluster_names;
}

class SSEStatus {
}

class SubnetGroupQuotaExceededFault {
}

class NodeQuotaForClusterExceededFault {
}

class NodeQuotaForCustomerExceededFault {
}

class SecurityGroupMembershipList {
}

class ParameterGroupQuotaExceededFault {
}

class RebootNodeResponse {
  public Cluster $cluster;
}

class TagNotFoundFault {
}

class AvailabilityZoneList {
}

class CreateSubnetGroupResponse {
  public SubnetGroup $subnet_group;
}

class DescribeDefaultParametersRequest {
  public IntegerOptional $max_results;
  public string $next_token;
}

class NodeIdentifierList {
}

class SubnetList {
}

class UpdateSubnetGroupRequest {
  public SubnetIdentifierList $subnet_ids;
  public string $subnet_group_name;
  public string $description;
}

class UpdateSubnetGroupResponse {
  public SubnetGroup $subnet_group;
}

class DecreaseReplicationFactorResponse {
  public Cluster $cluster;
}

class EventList {
}

class IntegerOptional {
}

class ServiceLinkedRoleNotFoundFault {
}

class TStamp {
}

class IncreaseReplicationFactorResponse {
  public Cluster $cluster;
}

class KeyList {
}

class SubnetIdentifierList {
}

class ClusterAlreadyExistsFault {
}

class DescribeParameterGroupsResponse {
  public string $next_token;
  public ParameterGroupList $parameter_groups;
}

class RebootNodeRequest {
  public string $cluster_name;
  public string $node_id;
}

class SourceType {
}

class SubnetGroupInUseFault {
}

class ChangeType {
}

class DescribeParametersRequest {
  public string $parameter_group_name;
  public string $source;
  public IntegerOptional $max_results;
  public string $next_token;
}

class InvalidParameterValueException {
  public AwsQueryErrorMessage $message;
}

class InvalidParameterCombinationException {
  public AwsQueryErrorMessage $message;
}

class NodeList {
}

class CreateClusterResponse {
  public Cluster $cluster;
}

class DescribeClustersResponse {
  public string $next_token;
  public ClusterList $clusters;
}

class NodeTypeSpecificValue {
  public string $node_type;
  public string $value;
}

class IncreaseReplicationFactorRequest {
  public int $new_replication_factor;
  public AvailabilityZoneList $availability_zones;
  public string $cluster_name;
}

class CreateParameterGroupRequest {
  public string $parameter_group_name;
  public string $description;
}

class DeleteClusterResponse {
  public Cluster $cluster;
}

class DeleteSubnetGroupRequest {
  public string $subnet_group_name;
}

class SubnetGroupNameList {
}

class Tag {
  public string $key;
  public string $value;
}

class DecreaseReplicationFactorRequest {
  public int $new_replication_factor;
  public AvailabilityZoneList $availability_zones;
  public NodeIdentifierList $node_ids_to_remove;
  public string $cluster_name;
}

class Endpoint {
  public int $port;
  public string $address;
}

class InvalidSubnet {
}

class Event {
  public string $source_name;
  public SourceType $source_type;
  public string $message;
  public TStamp $date;
}

class ParameterNameValue {
  public string $parameter_name;
  public string $parameter_value;
}

class Subnet {
  public string $subnet_identifier;
  public string $subnet_availability_zone;
}

class SubnetGroup {
  public string $description;
  public string $vpc_id;
  public SubnetList $subnets;
  public string $subnet_group_name;
}

class DescribeDefaultParametersResponse {
  public string $next_token;
  public ParameterList $parameters;
}

class ListTagsRequest {
  public string $resource_name;
  public string $next_token;
}

class ParameterGroupStatus {
  public string $parameter_group_name;
  public string $parameter_apply_status;
  public NodeIdentifierList $node_ids_to_reboot;
}

class DescribeEventsResponse {
  public string $next_token;
  public EventList $events;
}

class SSEEnabled {
}

class UpdateParameterGroupRequest {
  public string $parameter_group_name;
  public ParameterNameValueList $parameter_name_values;
}

class InvalidClusterStateFault {
}

class IsModifiable {
}

class ParameterGroup {
  public string $parameter_group_name;
  public string $description;
}

class DescribeParameterGroupsRequest {
  public ParameterGroupNameList $parameter_group_names;
  public IntegerOptional $max_results;
  public string $next_token;
}

class Node {
  public string $node_id;
  public Endpoint $endpoint;
  public TStamp $node_create_time;
  public string $availability_zone;
  public string $node_status;
  public string $parameter_group_status;
}

class TagList {
}

class ClusterList {
}

class CreateClusterRequest {
  public string $node_type;
  public string $description;
  public int $replication_factor;
  public string $preferred_maintenance_window;
  public string $iam_role_arn;
  public SSESpecification $sse_specification;
  public TagList $tags;
  public string $cluster_name;
  public AvailabilityZoneList $availability_zones;
  public string $subnet_group_name;
  public SecurityGroupIdentifierList $security_group_ids;
  public string $notification_topic_arn;
  public string $parameter_group_name;
}

class CreateParameterGroupResponse {
  public ParameterGroup $parameter_group;
}

class SubnetGroupAlreadyExistsFault {
}

class ParameterGroupNameList {
}

class DescribeParametersResponse {
  public string $next_token;
  public ParameterList $parameters;
}

class InvalidVPCNetworkStateFault {
}

class SubnetGroupList {
}

class TagResourceRequest {
  public string $resource_name;
  public TagList $tags;
}

class DeleteClusterRequest {
  public string $cluster_name;
}

class Parameter {
  public ParameterType $parameter_type;
  public string $parameter_value;
  public string $source;
  public string $data_type;
  public ChangeType $change_type;
  public string $parameter_name;
  public NodeTypeSpecificValueList $node_type_specific_values;
  public string $description;
  public string $allowed_values;
  public IsModifiable $is_modifiable;
}

class SecurityGroupIdentifierList {
}

