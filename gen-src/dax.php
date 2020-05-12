<?hh // strict
namespace slack\aws\dax;

interface DAX {
  public function CreateCluster(CreateClusterRequest $in): Awaitable<\Errors\Result<CreateClusterResponse>>;
  public function CreateParameterGroup(CreateParameterGroupRequest $in): Awaitable<\Errors\Result<CreateParameterGroupResponse>>;
  public function CreateSubnetGroup(CreateSubnetGroupRequest $in): Awaitable<\Errors\Result<CreateSubnetGroupResponse>>;
  public function DecreaseReplicationFactor(DecreaseReplicationFactorRequest $in): Awaitable<\Errors\Result<DecreaseReplicationFactorResponse>>;
  public function DeleteCluster(DeleteClusterRequest $in): Awaitable<\Errors\Result<DeleteClusterResponse>>;
  public function DeleteParameterGroup(DeleteParameterGroupRequest $in): Awaitable<\Errors\Result<DeleteParameterGroupResponse>>;
  public function DeleteSubnetGroup(DeleteSubnetGroupRequest $in): Awaitable<\Errors\Result<DeleteSubnetGroupResponse>>;
  public function DescribeClusters(DescribeClustersRequest $in): Awaitable<\Errors\Result<DescribeClustersResponse>>;
  public function DescribeDefaultParameters(DescribeDefaultParametersRequest $in): Awaitable<\Errors\Result<DescribeDefaultParametersResponse>>;
  public function DescribeEvents(DescribeEventsRequest $in): Awaitable<\Errors\Result<DescribeEventsResponse>>;
  public function DescribeParameterGroups(DescribeParameterGroupsRequest $in): Awaitable<\Errors\Result<DescribeParameterGroupsResponse>>;
  public function DescribeParameters(DescribeParametersRequest $in): Awaitable<\Errors\Result<DescribeParametersResponse>>;
  public function DescribeSubnetGroups(DescribeSubnetGroupsRequest $in): Awaitable<\Errors\Result<DescribeSubnetGroupsResponse>>;
  public function IncreaseReplicationFactor(IncreaseReplicationFactorRequest $in): Awaitable<\Errors\Result<IncreaseReplicationFactorResponse>>;
  public function ListTags(ListTagsRequest $in): Awaitable<\Errors\Result<ListTagsResponse>>;
  public function RebootNode(RebootNodeRequest $in): Awaitable<\Errors\Result<RebootNodeResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateCluster(UpdateClusterRequest $in): Awaitable<\Errors\Result<UpdateClusterResponse>>;
  public function UpdateParameterGroup(UpdateParameterGroupRequest $in): Awaitable<\Errors\Result<UpdateParameterGroupResponse>>;
  public function UpdateSubnetGroup(UpdateSubnetGroupRequest $in): Awaitable<\Errors\Result<UpdateSubnetGroupResponse>>;
}

type AvailabilityZoneList = vec<String>;

type AwsQueryErrorMessage = string;

type ChangeType = string;

class Cluster {
  public ?IntegerOptional $active_nodes;
  public string $cluster_arn;
  public ?Endpoint $cluster_discovery_endpoint;
  public string $cluster_name;
  public string $description;
  public string $iam_role_arn;
  public ?NodeIdentifierList $node_ids_to_remove;
  public string $node_type;
  public ?NodeList $nodes;
  public ?NotificationConfiguration $notification_configuration;
  public ?ParameterGroupStatus $parameter_group;
  public string $preferred_maintenance_window;
  public ?SSEDescription $sse_description;
  public ?SecurityGroupMembershipList $security_groups;
  public string $status;
  public string $subnet_group;
  public ?IntegerOptional $total_nodes;

  public function __construct(shape(
    ?'active_nodes' => ?IntegerOptional,
    ?'cluster_arn' => string,
    ?'cluster_discovery_endpoint' => ?Endpoint,
    ?'cluster_name' => string,
    ?'description' => string,
    ?'iam_role_arn' => string,
    ?'node_ids_to_remove' => ?NodeIdentifierList,
    ?'node_type' => string,
    ?'nodes' => ?NodeList,
    ?'notification_configuration' => ?NotificationConfiguration,
    ?'parameter_group' => ?ParameterGroupStatus,
    ?'preferred_maintenance_window' => string,
    ?'sse_description' => ?SSEDescription,
    ?'security_groups' => ?SecurityGroupMembershipList,
    ?'status' => string,
    ?'subnet_group' => string,
    ?'total_nodes' => ?IntegerOptional,
  ) $s = shape()) {
    $this->active_nodes = $s['active_nodes'] ?? 0;
    $this->cluster_arn = $s['cluster_arn'] ?? '';
    $this->cluster_discovery_endpoint = $s['cluster_discovery_endpoint'] ?? null;
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->node_ids_to_remove = $s['node_ids_to_remove'] ?? vec[];
    $this->node_type = $s['node_type'] ?? '';
    $this->nodes = $s['nodes'] ?? vec[];
    $this->notification_configuration = $s['notification_configuration'] ?? null;
    $this->parameter_group = $s['parameter_group'] ?? null;
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->sse_description = $s['sse_description'] ?? null;
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->subnet_group = $s['subnet_group'] ?? '';
    $this->total_nodes = $s['total_nodes'] ?? 0;
  }
}

class ClusterAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ClusterList = vec<Cluster>;

type ClusterNameList = vec<String>;

class ClusterNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterQuotaForCustomerExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateClusterRequest {
  public ?AvailabilityZoneList $availability_zones;
  public string $cluster_name;
  public string $description;
  public string $iam_role_arn;
  public string $node_type;
  public string $notification_topic_arn;
  public string $parameter_group_name;
  public string $preferred_maintenance_window;
  public int $replication_factor;
  public ?SSESpecification $sse_specification;
  public ?SecurityGroupIdentifierList $security_group_ids;
  public string $subnet_group_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneList,
    ?'cluster_name' => string,
    ?'description' => string,
    ?'iam_role_arn' => string,
    ?'node_type' => string,
    ?'notification_topic_arn' => string,
    ?'parameter_group_name' => string,
    ?'preferred_maintenance_window' => string,
    ?'replication_factor' => int,
    ?'sse_specification' => ?SSESpecification,
    ?'security_group_ids' => ?SecurityGroupIdentifierList,
    ?'subnet_group_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->notification_topic_arn = $s['notification_topic_arn'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->replication_factor = $s['replication_factor'] ?? 0;
    $this->sse_specification = $s['sse_specification'] ?? null;
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_group_name = $s['subnet_group_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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

class CreateParameterGroupRequest {
  public string $description;
  public string $parameter_group_name;

  public function __construct(shape(
    ?'description' => string,
    ?'parameter_group_name' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
  }
}

class CreateParameterGroupResponse {
  public ?ParameterGroup $parameter_group;

  public function __construct(shape(
    ?'parameter_group' => ?ParameterGroup,
  ) $s = shape()) {
    $this->parameter_group = $s['parameter_group'] ?? null;
  }
}

class CreateSubnetGroupRequest {
  public string $description;
  public string $subnet_group_name;
  public ?SubnetIdentifierList $subnet_ids;

  public function __construct(shape(
    ?'description' => string,
    ?'subnet_group_name' => string,
    ?'subnet_ids' => ?SubnetIdentifierList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->subnet_group_name = $s['subnet_group_name'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class CreateSubnetGroupResponse {
  public ?SubnetGroup $subnet_group;

  public function __construct(shape(
    ?'subnet_group' => ?SubnetGroup,
  ) $s = shape()) {
    $this->subnet_group = $s['subnet_group'] ?? null;
  }
}

class DecreaseReplicationFactorRequest {
  public ?AvailabilityZoneList $availability_zones;
  public string $cluster_name;
  public int $new_replication_factor;
  public ?NodeIdentifierList $node_ids_to_remove;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneList,
    ?'cluster_name' => string,
    ?'new_replication_factor' => int,
    ?'node_ids_to_remove' => ?NodeIdentifierList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->new_replication_factor = $s['new_replication_factor'] ?? 0;
    $this->node_ids_to_remove = $s['node_ids_to_remove'] ?? vec[];
  }
}

class DecreaseReplicationFactorResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class DeleteClusterRequest {
  public string $cluster_name;

  public function __construct(shape(
    ?'cluster_name' => string,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
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

class DeleteParameterGroupRequest {
  public string $parameter_group_name;

  public function __construct(shape(
    ?'parameter_group_name' => string,
  ) $s = shape()) {
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
  }
}

class DeleteParameterGroupResponse {
  public string $deletion_message;

  public function __construct(shape(
    ?'deletion_message' => string,
  ) $s = shape()) {
    $this->deletion_message = $s['deletion_message'] ?? '';
  }
}

class DeleteSubnetGroupRequest {
  public string $subnet_group_name;

  public function __construct(shape(
    ?'subnet_group_name' => string,
  ) $s = shape()) {
    $this->subnet_group_name = $s['subnet_group_name'] ?? '';
  }
}

class DeleteSubnetGroupResponse {
  public string $deletion_message;

  public function __construct(shape(
    ?'deletion_message' => string,
  ) $s = shape()) {
    $this->deletion_message = $s['deletion_message'] ?? '';
  }
}

class DescribeClustersRequest {
  public ?ClusterNameList $cluster_names;
  public ?IntegerOptional $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'cluster_names' => ?ClusterNameList,
    ?'max_results' => ?IntegerOptional,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->cluster_names = $s['cluster_names'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClustersResponse {
  public ?ClusterList $clusters;
  public string $next_token;

  public function __construct(shape(
    ?'clusters' => ?ClusterList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->clusters = $s['clusters'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeDefaultParametersRequest {
  public ?IntegerOptional $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?IntegerOptional,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeDefaultParametersResponse {
  public string $next_token;
  public ?ParameterList $parameters;

  public function __construct(shape(
    ?'next_token' => string,
    ?'parameters' => ?ParameterList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

class DescribeEventsRequest {
  public ?IntegerOptional $duration;
  public ?TStamp $end_time;
  public ?IntegerOptional $max_results;
  public string $next_token;
  public string $source_name;
  public ?SourceType $source_type;
  public ?TStamp $start_time;

  public function __construct(shape(
    ?'duration' => ?IntegerOptional,
    ?'end_time' => ?TStamp,
    ?'max_results' => ?IntegerOptional,
    ?'next_token' => string,
    ?'source_name' => string,
    ?'source_type' => ?SourceType,
    ?'start_time' => ?TStamp,
  ) $s = shape()) {
    $this->duration = $s['duration'] ?? 0;
    $this->end_time = $s['end_time'] ?? 0;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->source_name = $s['source_name'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeEventsResponse {
  public ?EventList $events;
  public string $next_token;

  public function __construct(shape(
    ?'events' => ?EventList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeParameterGroupsRequest {
  public ?IntegerOptional $max_results;
  public string $next_token;
  public ?ParameterGroupNameList $parameter_group_names;

  public function __construct(shape(
    ?'max_results' => ?IntegerOptional,
    ?'next_token' => string,
    ?'parameter_group_names' => ?ParameterGroupNameList,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->parameter_group_names = $s['parameter_group_names'] ?? vec[];
  }
}

class DescribeParameterGroupsResponse {
  public string $next_token;
  public ?ParameterGroupList $parameter_groups;

  public function __construct(shape(
    ?'next_token' => string,
    ?'parameter_groups' => ?ParameterGroupList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->parameter_groups = $s['parameter_groups'] ?? vec[];
  }
}

class DescribeParametersRequest {
  public ?IntegerOptional $max_results;
  public string $next_token;
  public string $parameter_group_name;
  public string $source;

  public function __construct(shape(
    ?'max_results' => ?IntegerOptional,
    ?'next_token' => string,
    ?'parameter_group_name' => string,
    ?'source' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->source = $s['source'] ?? '';
  }
}

class DescribeParametersResponse {
  public string $next_token;
  public ?ParameterList $parameters;

  public function __construct(shape(
    ?'next_token' => string,
    ?'parameters' => ?ParameterList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

class DescribeSubnetGroupsRequest {
  public ?IntegerOptional $max_results;
  public string $next_token;
  public ?SubnetGroupNameList $subnet_group_names;

  public function __construct(shape(
    ?'max_results' => ?IntegerOptional,
    ?'next_token' => string,
    ?'subnet_group_names' => ?SubnetGroupNameList,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->subnet_group_names = $s['subnet_group_names'] ?? vec[];
  }
}

class DescribeSubnetGroupsResponse {
  public string $next_token;
  public ?SubnetGroupList $subnet_groups;

  public function __construct(shape(
    ?'next_token' => string,
    ?'subnet_groups' => ?SubnetGroupList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->subnet_groups = $s['subnet_groups'] ?? vec[];
  }
}

class Endpoint {
  public string $address;
  public int $port;

  public function __construct(shape(
    ?'address' => string,
    ?'port' => int,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

class Event {
  public ?TStamp $date;
  public string $message;
  public string $source_name;
  public ?SourceType $source_type;

  public function __construct(shape(
    ?'date' => ?TStamp,
    ?'message' => string,
    ?'source_name' => string,
    ?'source_type' => ?SourceType,
  ) $s = shape()) {
    $this->date = $s['date'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->source_name = $s['source_name'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
  }
}

type EventList = vec<Event>;

class IncreaseReplicationFactorRequest {
  public ?AvailabilityZoneList $availability_zones;
  public string $cluster_name;
  public int $new_replication_factor;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneList,
    ?'cluster_name' => string,
    ?'new_replication_factor' => int,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->new_replication_factor = $s['new_replication_factor'] ?? 0;
  }
}

class IncreaseReplicationFactorResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class InsufficientClusterCapacityFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Integer = int;

type IntegerOptional = int;

class InvalidARNFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClusterStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameterCombinationException {
  public ?AwsQueryErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameterValueException {
  public ?AwsQueryErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSubnet {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidVPCNetworkStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type IsModifiable = string;

type KeyList = vec<String>;

class ListTagsRequest {
  public string $next_token;
  public string $resource_name;

  public function __construct(shape(
    ?'next_token' => string,
    ?'resource_name' => string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class ListTagsResponse {
  public string $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class Node {
  public string $availability_zone;
  public ?Endpoint $endpoint;
  public ?TStamp $node_create_time;
  public string $node_id;
  public string $node_status;
  public string $parameter_group_status;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'endpoint' => ?Endpoint,
    ?'node_create_time' => ?TStamp,
    ?'node_id' => string,
    ?'node_status' => string,
    ?'parameter_group_status' => string,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->endpoint = $s['endpoint'] ?? null;
    $this->node_create_time = $s['node_create_time'] ?? 0;
    $this->node_id = $s['node_id'] ?? '';
    $this->node_status = $s['node_status'] ?? '';
    $this->parameter_group_status = $s['parameter_group_status'] ?? '';
  }
}

type NodeIdentifierList = vec<String>;

type NodeList = vec<Node>;

class NodeNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NodeQuotaForClusterExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NodeQuotaForCustomerExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NodeTypeSpecificValue {
  public string $node_type;
  public string $value;

  public function __construct(shape(
    ?'node_type' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->node_type = $s['node_type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type NodeTypeSpecificValueList = vec<NodeTypeSpecificValue>;

class NotificationConfiguration {
  public string $topic_arn;
  public string $topic_status;

  public function __construct(shape(
    ?'topic_arn' => string,
    ?'topic_status' => string,
  ) $s = shape()) {
    $this->topic_arn = $s['topic_arn'] ?? '';
    $this->topic_status = $s['topic_status'] ?? '';
  }
}

class Parameter {
  public string $allowed_values;
  public ?ChangeType $change_type;
  public string $data_type;
  public string $description;
  public ?IsModifiable $is_modifiable;
  public ?NodeTypeSpecificValueList $node_type_specific_values;
  public string $parameter_name;
  public ?ParameterType $parameter_type;
  public string $parameter_value;
  public string $source;

  public function __construct(shape(
    ?'allowed_values' => string,
    ?'change_type' => ?ChangeType,
    ?'data_type' => string,
    ?'description' => string,
    ?'is_modifiable' => ?IsModifiable,
    ?'node_type_specific_values' => ?NodeTypeSpecificValueList,
    ?'parameter_name' => string,
    ?'parameter_type' => ?ParameterType,
    ?'parameter_value' => string,
    ?'source' => string,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? '';
    $this->change_type = $s['change_type'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->is_modifiable = $s['is_modifiable'] ?? '';
    $this->node_type_specific_values = $s['node_type_specific_values'] ?? vec[];
    $this->parameter_name = $s['parameter_name'] ?? '';
    $this->parameter_type = $s['parameter_type'] ?? '';
    $this->parameter_value = $s['parameter_value'] ?? '';
    $this->source = $s['source'] ?? '';
  }
}

class ParameterGroup {
  public string $description;
  public string $parameter_group_name;

  public function __construct(shape(
    ?'description' => string,
    ?'parameter_group_name' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
  }
}

class ParameterGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ParameterGroupList = vec<ParameterGroup>;

type ParameterGroupNameList = vec<String>;

class ParameterGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ParameterGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ParameterGroupStatus {
  public ?NodeIdentifierList $node_ids_to_reboot;
  public string $parameter_apply_status;
  public string $parameter_group_name;

  public function __construct(shape(
    ?'node_ids_to_reboot' => ?NodeIdentifierList,
    ?'parameter_apply_status' => string,
    ?'parameter_group_name' => string,
  ) $s = shape()) {
    $this->node_ids_to_reboot = $s['node_ids_to_reboot'] ?? vec[];
    $this->parameter_apply_status = $s['parameter_apply_status'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
  }
}

type ParameterList = vec<Parameter>;

class ParameterNameValue {
  public string $parameter_name;
  public string $parameter_value;

  public function __construct(shape(
    ?'parameter_name' => string,
    ?'parameter_value' => string,
  ) $s = shape()) {
    $this->parameter_name = $s['parameter_name'] ?? '';
    $this->parameter_value = $s['parameter_value'] ?? '';
  }
}

type ParameterNameValueList = vec<ParameterNameValue>;

type ParameterType = string;

class RebootNodeRequest {
  public string $cluster_name;
  public string $node_id;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'node_id' => string,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->node_id = $s['node_id'] ?? '';
  }
}

class RebootNodeResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class SSEDescription {
  public ?SSEStatus $status;

  public function __construct(shape(
    ?'status' => ?SSEStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

type SSEEnabled = bool;

class SSESpecification {
  public ?SSEEnabled $enabled;

  public function __construct(shape(
    ?'enabled' => ?SSEEnabled,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

type SSEStatus = string;

type SecurityGroupIdentifierList = vec<String>;

class SecurityGroupMembership {
  public string $security_group_identifier;
  public string $status;

  public function __construct(shape(
    ?'security_group_identifier' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->security_group_identifier = $s['security_group_identifier'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type SecurityGroupMembershipList = vec<SecurityGroupMembership>;

class ServiceLinkedRoleNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SourceType = string;

type String = string;

class Subnet {
  public string $subnet_availability_zone;
  public string $subnet_identifier;

  public function __construct(shape(
    ?'subnet_availability_zone' => string,
    ?'subnet_identifier' => string,
  ) $s = shape()) {
    $this->subnet_availability_zone = $s['subnet_availability_zone'] ?? '';
    $this->subnet_identifier = $s['subnet_identifier'] ?? '';
  }
}

class SubnetGroup {
  public string $description;
  public string $subnet_group_name;
  public ?SubnetList $subnets;
  public string $vpc_id;

  public function __construct(shape(
    ?'description' => string,
    ?'subnet_group_name' => string,
    ?'subnets' => ?SubnetList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->subnet_group_name = $s['subnet_group_name'] ?? '';
    $this->subnets = $s['subnets'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class SubnetGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SubnetGroupInUseFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SubnetGroupList = vec<SubnetGroup>;

type SubnetGroupNameList = vec<String>;

class SubnetGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SubnetGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SubnetIdentifierList = vec<String>;

class SubnetInUse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SubnetList = vec<Subnet>;

class SubnetQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TStamp = int;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
    ?'key' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagList = vec<Tag>;

class TagNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TagQuotaPerResourceExceeded {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TagResourceRequest {
  public string $resource_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_name = $s['resource_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class UntagResourceRequest {
  public string $resource_name;
  public ?KeyList $tag_keys;

  public function __construct(shape(
    ?'resource_name' => string,
    ?'tag_keys' => ?KeyList,
  ) $s = shape()) {
    $this->resource_name = $s['resource_name'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class UpdateClusterRequest {
  public string $cluster_name;
  public string $description;
  public string $notification_topic_arn;
  public string $notification_topic_status;
  public string $parameter_group_name;
  public string $preferred_maintenance_window;
  public ?SecurityGroupIdentifierList $security_group_ids;

  public function __construct(shape(
    ?'cluster_name' => string,
    ?'description' => string,
    ?'notification_topic_arn' => string,
    ?'notification_topic_status' => string,
    ?'parameter_group_name' => string,
    ?'preferred_maintenance_window' => string,
    ?'security_group_ids' => ?SecurityGroupIdentifierList,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->notification_topic_arn = $s['notification_topic_arn'] ?? '';
    $this->notification_topic_status = $s['notification_topic_status'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
  }
}

class UpdateClusterResponse {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class UpdateParameterGroupRequest {
  public string $parameter_group_name;
  public ?ParameterNameValueList $parameter_name_values;

  public function __construct(shape(
    ?'parameter_group_name' => string,
    ?'parameter_name_values' => ?ParameterNameValueList,
  ) $s = shape()) {
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->parameter_name_values = $s['parameter_name_values'] ?? vec[];
  }
}

class UpdateParameterGroupResponse {
  public ?ParameterGroup $parameter_group;

  public function __construct(shape(
    ?'parameter_group' => ?ParameterGroup,
  ) $s = shape()) {
    $this->parameter_group = $s['parameter_group'] ?? null;
  }
}

class UpdateSubnetGroupRequest {
  public string $description;
  public string $subnet_group_name;
  public ?SubnetIdentifierList $subnet_ids;

  public function __construct(shape(
    ?'description' => string,
    ?'subnet_group_name' => string,
    ?'subnet_ids' => ?SubnetIdentifierList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->subnet_group_name = $s['subnet_group_name'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class UpdateSubnetGroupResponse {
  public ?SubnetGroup $subnet_group;

  public function __construct(shape(
    ?'subnet_group' => ?SubnetGroup,
  ) $s = shape()) {
    $this->subnet_group = $s['subnet_group'] ?? null;
  }
}

