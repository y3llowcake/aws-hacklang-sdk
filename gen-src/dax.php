<?hh // strict
namespace slack\aws\dax;

interface DAX {
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResponse>>;
  public function CreateParameterGroup(CreateParameterGroupRequest) Awaitable<Errors\Result<CreateParameterGroupResponse>>;
  public function CreateSubnetGroup(CreateSubnetGroupRequest) Awaitable<Errors\Result<CreateSubnetGroupResponse>>;
  public function DecreaseReplicationFactor(DecreaseReplicationFactorRequest) Awaitable<Errors\Result<DecreaseReplicationFactorResponse>>;
  public function DeleteCluster(DeleteClusterRequest) Awaitable<Errors\Result<DeleteClusterResponse>>;
  public function DeleteParameterGroup(DeleteParameterGroupRequest) Awaitable<Errors\Result<DeleteParameterGroupResponse>>;
  public function DeleteSubnetGroup(DeleteSubnetGroupRequest) Awaitable<Errors\Result<DeleteSubnetGroupResponse>>;
  public function DescribeClusters(DescribeClustersRequest) Awaitable<Errors\Result<DescribeClustersResponse>>;
  public function DescribeDefaultParameters(DescribeDefaultParametersRequest) Awaitable<Errors\Result<DescribeDefaultParametersResponse>>;
  public function DescribeEvents(DescribeEventsRequest) Awaitable<Errors\Result<DescribeEventsResponse>>;
  public function DescribeParameterGroups(DescribeParameterGroupsRequest) Awaitable<Errors\Result<DescribeParameterGroupsResponse>>;
  public function DescribeParameters(DescribeParametersRequest) Awaitable<Errors\Result<DescribeParametersResponse>>;
  public function DescribeSubnetGroups(DescribeSubnetGroupsRequest) Awaitable<Errors\Result<DescribeSubnetGroupsResponse>>;
  public function IncreaseReplicationFactor(IncreaseReplicationFactorRequest) Awaitable<Errors\Result<IncreaseReplicationFactorResponse>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function RebootNode(RebootNodeRequest) Awaitable<Errors\Result<RebootNodeResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateCluster(UpdateClusterRequest) Awaitable<Errors\Result<UpdateClusterResponse>>;
  public function UpdateParameterGroup(UpdateParameterGroupRequest) Awaitable<Errors\Result<UpdateParameterGroupResponse>>;
  public function UpdateSubnetGroup(UpdateSubnetGroupRequest) Awaitable<Errors\Result<UpdateSubnetGroupResponse>>;
}

class AvailabilityZoneList {
}

class AwsQueryErrorMessage {
}

class ChangeType {
}

class Cluster {
  public IntegerOptional $active_nodes;
  public string $cluster_arn;
  public Endpoint $cluster_discovery_endpoint;
  public string $cluster_name;
  public string $description;
  public string $iam_role_arn;
  public NodeIdentifierList $node_ids_to_remove;
  public string $node_type;
  public NodeList $nodes;
  public NotificationConfiguration $notification_configuration;
  public ParameterGroupStatus $parameter_group;
  public string $preferred_maintenance_window;
  public SSEDescription $sse_description;
  public SecurityGroupMembershipList $security_groups;
  public string $status;
  public string $subnet_group;
  public IntegerOptional $total_nodes;
}

class ClusterAlreadyExistsFault {
}

class ClusterList {
}

class ClusterNameList {
}

class ClusterNotFoundFault {
}

class ClusterQuotaForCustomerExceededFault {
}

class CreateClusterRequest {
  public AvailabilityZoneList $availability_zones;
  public string $cluster_name;
  public string $description;
  public string $iam_role_arn;
  public string $node_type;
  public string $notification_topic_arn;
  public string $parameter_group_name;
  public string $preferred_maintenance_window;
  public int $replication_factor;
  public SSESpecification $sse_specification;
  public SecurityGroupIdentifierList $security_group_ids;
  public string $subnet_group_name;
  public TagList $tags;
}

class CreateClusterResponse {
  public Cluster $cluster;
}

class CreateParameterGroupRequest {
  public string $description;
  public string $parameter_group_name;
}

class CreateParameterGroupResponse {
  public ParameterGroup $parameter_group;
}

class CreateSubnetGroupRequest {
  public string $description;
  public string $subnet_group_name;
  public SubnetIdentifierList $subnet_ids;
}

class CreateSubnetGroupResponse {
  public SubnetGroup $subnet_group;
}

class DecreaseReplicationFactorRequest {
  public AvailabilityZoneList $availability_zones;
  public string $cluster_name;
  public int $new_replication_factor;
  public NodeIdentifierList $node_ids_to_remove;
}

class DecreaseReplicationFactorResponse {
  public Cluster $cluster;
}

class DeleteClusterRequest {
  public string $cluster_name;
}

class DeleteClusterResponse {
  public Cluster $cluster;
}

class DeleteParameterGroupRequest {
  public string $parameter_group_name;
}

class DeleteParameterGroupResponse {
  public string $deletion_message;
}

class DeleteSubnetGroupRequest {
  public string $subnet_group_name;
}

class DeleteSubnetGroupResponse {
  public string $deletion_message;
}

class DescribeClustersRequest {
  public ClusterNameList $cluster_names;
  public IntegerOptional $max_results;
  public string $next_token;
}

class DescribeClustersResponse {
  public ClusterList $clusters;
  public string $next_token;
}

class DescribeDefaultParametersRequest {
  public IntegerOptional $max_results;
  public string $next_token;
}

class DescribeDefaultParametersResponse {
  public string $next_token;
  public ParameterList $parameters;
}

class DescribeEventsRequest {
  public IntegerOptional $duration;
  public TStamp $end_time;
  public IntegerOptional $max_results;
  public string $next_token;
  public string $source_name;
  public SourceType $source_type;
  public TStamp $start_time;
}

class DescribeEventsResponse {
  public EventList $events;
  public string $next_token;
}

class DescribeParameterGroupsRequest {
  public IntegerOptional $max_results;
  public string $next_token;
  public ParameterGroupNameList $parameter_group_names;
}

class DescribeParameterGroupsResponse {
  public string $next_token;
  public ParameterGroupList $parameter_groups;
}

class DescribeParametersRequest {
  public IntegerOptional $max_results;
  public string $next_token;
  public string $parameter_group_name;
  public string $source;
}

class DescribeParametersResponse {
  public string $next_token;
  public ParameterList $parameters;
}

class DescribeSubnetGroupsRequest {
  public IntegerOptional $max_results;
  public string $next_token;
  public SubnetGroupNameList $subnet_group_names;
}

class DescribeSubnetGroupsResponse {
  public string $next_token;
  public SubnetGroupList $subnet_groups;
}

class Endpoint {
  public string $address;
  public int $port;
}

class Event {
  public TStamp $date;
  public string $message;
  public string $source_name;
  public SourceType $source_type;
}

class EventList {
}

class IncreaseReplicationFactorRequest {
  public AvailabilityZoneList $availability_zones;
  public string $cluster_name;
  public int $new_replication_factor;
}

class IncreaseReplicationFactorResponse {
  public Cluster $cluster;
}

class InsufficientClusterCapacityFault {
}

class Integer {
}

class IntegerOptional {
}

class InvalidARNFault {
}

class InvalidClusterStateFault {
}

class InvalidParameterCombinationException {
  public AwsQueryErrorMessage $message;
}

class InvalidParameterGroupStateFault {
}

class InvalidParameterValueException {
  public AwsQueryErrorMessage $message;
}

class InvalidSubnet {
}

class InvalidVPCNetworkStateFault {
}

class IsModifiable {
}

class KeyList {
}

class ListTagsRequest {
  public string $next_token;
  public string $resource_name;
}

class ListTagsResponse {
  public string $next_token;
  public TagList $tags;
}

class Node {
  public string $availability_zone;
  public Endpoint $endpoint;
  public TStamp $node_create_time;
  public string $node_id;
  public string $node_status;
  public string $parameter_group_status;
}

class NodeIdentifierList {
}

class NodeList {
}

class NodeNotFoundFault {
}

class NodeQuotaForClusterExceededFault {
}

class NodeQuotaForCustomerExceededFault {
}

class NodeTypeSpecificValue {
  public string $node_type;
  public string $value;
}

class NodeTypeSpecificValueList {
}

class NotificationConfiguration {
  public string $topic_arn;
  public string $topic_status;
}

class Parameter {
  public string $allowed_values;
  public ChangeType $change_type;
  public string $data_type;
  public string $description;
  public IsModifiable $is_modifiable;
  public NodeTypeSpecificValueList $node_type_specific_values;
  public string $parameter_name;
  public ParameterType $parameter_type;
  public string $parameter_value;
  public string $source;
}

class ParameterGroup {
  public string $description;
  public string $parameter_group_name;
}

class ParameterGroupAlreadyExistsFault {
}

class ParameterGroupList {
}

class ParameterGroupNameList {
}

class ParameterGroupNotFoundFault {
}

class ParameterGroupQuotaExceededFault {
}

class ParameterGroupStatus {
  public NodeIdentifierList $node_ids_to_reboot;
  public string $parameter_apply_status;
  public string $parameter_group_name;
}

class ParameterList {
}

class ParameterNameValue {
  public string $parameter_name;
  public string $parameter_value;
}

class ParameterNameValueList {
}

class ParameterType {
}

class RebootNodeRequest {
  public string $cluster_name;
  public string $node_id;
}

class RebootNodeResponse {
  public Cluster $cluster;
}

class SSEDescription {
  public SSEStatus $status;
}

class SSEEnabled {
}

class SSESpecification {
  public SSEEnabled $enabled;
}

class SSEStatus {
}

class SecurityGroupIdentifierList {
}

class SecurityGroupMembership {
  public string $security_group_identifier;
  public string $status;
}

class SecurityGroupMembershipList {
}

class ServiceLinkedRoleNotFoundFault {
}

class SourceType {
}

class String {
}

class Subnet {
  public string $subnet_availability_zone;
  public string $subnet_identifier;
}

class SubnetGroup {
  public string $description;
  public string $subnet_group_name;
  public SubnetList $subnets;
  public string $vpc_id;
}

class SubnetGroupAlreadyExistsFault {
}

class SubnetGroupInUseFault {
}

class SubnetGroupList {
}

class SubnetGroupNameList {
}

class SubnetGroupNotFoundFault {
}

class SubnetGroupQuotaExceededFault {
}

class SubnetIdentifierList {
}

class SubnetInUse {
}

class SubnetList {
}

class SubnetQuotaExceededFault {
}

class TStamp {
}

class Tag {
  public string $key;
  public string $value;
}

class TagList {
}

class TagNotFoundFault {
}

class TagQuotaPerResourceExceeded {
}

class TagResourceRequest {
  public string $resource_name;
  public TagList $tags;
}

class TagResourceResponse {
  public TagList $tags;
}

class UntagResourceRequest {
  public string $resource_name;
  public KeyList $tag_keys;
}

class UntagResourceResponse {
  public TagList $tags;
}

class UpdateClusterRequest {
  public string $cluster_name;
  public string $description;
  public string $notification_topic_arn;
  public string $notification_topic_status;
  public string $parameter_group_name;
  public string $preferred_maintenance_window;
  public SecurityGroupIdentifierList $security_group_ids;
}

class UpdateClusterResponse {
  public Cluster $cluster;
}

class UpdateParameterGroupRequest {
  public string $parameter_group_name;
  public ParameterNameValueList $parameter_name_values;
}

class UpdateParameterGroupResponse {
  public ParameterGroup $parameter_group;
}

class UpdateSubnetGroupRequest {
  public string $description;
  public string $subnet_group_name;
  public SubnetIdentifierList $subnet_ids;
}

class UpdateSubnetGroupResponse {
  public SubnetGroup $subnet_group;
}

