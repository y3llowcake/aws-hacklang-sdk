<?hh // strict
namespace slack\aws\elasticache;

interface ElastiCache {
  public function AddTagsToResource(AddTagsToResourceMessage): Awaitable<Errors\Result<TagListMessage>>;
  public function AuthorizeCacheSecurityGroupIngress(AuthorizeCacheSecurityGroupIngressMessage): Awaitable<Errors\Result<AuthorizeCacheSecurityGroupIngressResult>>;
  public function BatchApplyUpdateAction(BatchApplyUpdateActionMessage): Awaitable<Errors\Result<UpdateActionResultsMessage>>;
  public function BatchStopUpdateAction(BatchStopUpdateActionMessage): Awaitable<Errors\Result<UpdateActionResultsMessage>>;
  public function CompleteMigration(CompleteMigrationMessage): Awaitable<Errors\Result<CompleteMigrationResponse>>;
  public function CopySnapshot(CopySnapshotMessage): Awaitable<Errors\Result<CopySnapshotResult>>;
  public function CreateCacheCluster(CreateCacheClusterMessage): Awaitable<Errors\Result<CreateCacheClusterResult>>;
  public function CreateCacheParameterGroup(CreateCacheParameterGroupMessage): Awaitable<Errors\Result<CreateCacheParameterGroupResult>>;
  public function CreateCacheSecurityGroup(CreateCacheSecurityGroupMessage): Awaitable<Errors\Result<CreateCacheSecurityGroupResult>>;
  public function CreateCacheSubnetGroup(CreateCacheSubnetGroupMessage): Awaitable<Errors\Result<CreateCacheSubnetGroupResult>>;
  public function CreateGlobalReplicationGroup(CreateGlobalReplicationGroupMessage): Awaitable<Errors\Result<CreateGlobalReplicationGroupResult>>;
  public function CreateReplicationGroup(CreateReplicationGroupMessage): Awaitable<Errors\Result<CreateReplicationGroupResult>>;
  public function CreateSnapshot(CreateSnapshotMessage): Awaitable<Errors\Result<CreateSnapshotResult>>;
  public function DecreaseNodeGroupsInGlobalReplicationGroup(DecreaseNodeGroupsInGlobalReplicationGroupMessage): Awaitable<Errors\Result<DecreaseNodeGroupsInGlobalReplicationGroupResult>>;
  public function DecreaseReplicaCount(DecreaseReplicaCountMessage): Awaitable<Errors\Result<DecreaseReplicaCountResult>>;
  public function DeleteCacheCluster(DeleteCacheClusterMessage): Awaitable<Errors\Result<DeleteCacheClusterResult>>;
  public function DeleteCacheParameterGroup(DeleteCacheParameterGroupMessage): Awaitable<Errors\Error>;
  public function DeleteCacheSecurityGroup(DeleteCacheSecurityGroupMessage): Awaitable<Errors\Error>;
  public function DeleteCacheSubnetGroup(DeleteCacheSubnetGroupMessage): Awaitable<Errors\Error>;
  public function DeleteGlobalReplicationGroup(DeleteGlobalReplicationGroupMessage): Awaitable<Errors\Result<DeleteGlobalReplicationGroupResult>>;
  public function DeleteReplicationGroup(DeleteReplicationGroupMessage): Awaitable<Errors\Result<DeleteReplicationGroupResult>>;
  public function DeleteSnapshot(DeleteSnapshotMessage): Awaitable<Errors\Result<DeleteSnapshotResult>>;
  public function DescribeCacheClusters(DescribeCacheClustersMessage): Awaitable<Errors\Result<CacheClusterMessage>>;
  public function DescribeCacheEngineVersions(DescribeCacheEngineVersionsMessage): Awaitable<Errors\Result<CacheEngineVersionMessage>>;
  public function DescribeCacheParameterGroups(DescribeCacheParameterGroupsMessage): Awaitable<Errors\Result<CacheParameterGroupsMessage>>;
  public function DescribeCacheParameters(DescribeCacheParametersMessage): Awaitable<Errors\Result<CacheParameterGroupDetails>>;
  public function DescribeCacheSecurityGroups(DescribeCacheSecurityGroupsMessage): Awaitable<Errors\Result<CacheSecurityGroupMessage>>;
  public function DescribeCacheSubnetGroups(DescribeCacheSubnetGroupsMessage): Awaitable<Errors\Result<CacheSubnetGroupMessage>>;
  public function DescribeEngineDefaultParameters(DescribeEngineDefaultParametersMessage): Awaitable<Errors\Result<DescribeEngineDefaultParametersResult>>;
  public function DescribeEvents(DescribeEventsMessage): Awaitable<Errors\Result<EventsMessage>>;
  public function DescribeGlobalReplicationGroups(DescribeGlobalReplicationGroupsMessage): Awaitable<Errors\Result<DescribeGlobalReplicationGroupsResult>>;
  public function DescribeReplicationGroups(DescribeReplicationGroupsMessage): Awaitable<Errors\Result<ReplicationGroupMessage>>;
  public function DescribeReservedCacheNodes(DescribeReservedCacheNodesMessage): Awaitable<Errors\Result<ReservedCacheNodeMessage>>;
  public function DescribeReservedCacheNodesOfferings(DescribeReservedCacheNodesOfferingsMessage): Awaitable<Errors\Result<ReservedCacheNodesOfferingMessage>>;
  public function DescribeServiceUpdates(DescribeServiceUpdatesMessage): Awaitable<Errors\Result<ServiceUpdatesMessage>>;
  public function DescribeSnapshots(DescribeSnapshotsMessage): Awaitable<Errors\Result<DescribeSnapshotsListMessage>>;
  public function DescribeUpdateActions(DescribeUpdateActionsMessage): Awaitable<Errors\Result<UpdateActionsMessage>>;
  public function DisassociateGlobalReplicationGroup(DisassociateGlobalReplicationGroupMessage): Awaitable<Errors\Result<DisassociateGlobalReplicationGroupResult>>;
  public function FailoverGlobalReplicationGroup(FailoverGlobalReplicationGroupMessage): Awaitable<Errors\Result<FailoverGlobalReplicationGroupResult>>;
  public function IncreaseNodeGroupsInGlobalReplicationGroup(IncreaseNodeGroupsInGlobalReplicationGroupMessage): Awaitable<Errors\Result<IncreaseNodeGroupsInGlobalReplicationGroupResult>>;
  public function IncreaseReplicaCount(IncreaseReplicaCountMessage): Awaitable<Errors\Result<IncreaseReplicaCountResult>>;
  public function ListAllowedNodeTypeModifications(ListAllowedNodeTypeModificationsMessage): Awaitable<Errors\Result<AllowedNodeTypeModificationsMessage>>;
  public function ListTagsForResource(ListTagsForResourceMessage): Awaitable<Errors\Result<TagListMessage>>;
  public function ModifyCacheCluster(ModifyCacheClusterMessage): Awaitable<Errors\Result<ModifyCacheClusterResult>>;
  public function ModifyCacheParameterGroup(ModifyCacheParameterGroupMessage): Awaitable<Errors\Result<CacheParameterGroupNameMessage>>;
  public function ModifyCacheSubnetGroup(ModifyCacheSubnetGroupMessage): Awaitable<Errors\Result<ModifyCacheSubnetGroupResult>>;
  public function ModifyGlobalReplicationGroup(ModifyGlobalReplicationGroupMessage): Awaitable<Errors\Result<ModifyGlobalReplicationGroupResult>>;
  public function ModifyReplicationGroup(ModifyReplicationGroupMessage): Awaitable<Errors\Result<ModifyReplicationGroupResult>>;
  public function ModifyReplicationGroupShardConfiguration(ModifyReplicationGroupShardConfigurationMessage): Awaitable<Errors\Result<ModifyReplicationGroupShardConfigurationResult>>;
  public function PurchaseReservedCacheNodesOffering(PurchaseReservedCacheNodesOfferingMessage): Awaitable<Errors\Result<PurchaseReservedCacheNodesOfferingResult>>;
  public function RebalanceSlotsInGlobalReplicationGroup(RebalanceSlotsInGlobalReplicationGroupMessage): Awaitable<Errors\Result<RebalanceSlotsInGlobalReplicationGroupResult>>;
  public function RebootCacheCluster(RebootCacheClusterMessage): Awaitable<Errors\Result<RebootCacheClusterResult>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceMessage): Awaitable<Errors\Result<TagListMessage>>;
  public function ResetCacheParameterGroup(ResetCacheParameterGroupMessage): Awaitable<Errors\Result<CacheParameterGroupNameMessage>>;
  public function RevokeCacheSecurityGroupIngress(RevokeCacheSecurityGroupIngressMessage): Awaitable<Errors\Result<RevokeCacheSecurityGroupIngressResult>>;
  public function StartMigration(StartMigrationMessage): Awaitable<Errors\Result<StartMigrationResponse>>;
  public function TestFailover(TestFailoverMessage): Awaitable<Errors\Result<TestFailoverResult>>;
}

class APICallRateForCustomerExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AZMode = string;

class AddTagsToResourceMessage {
  public string $resource_name;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_name' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_name = $resource_name ?? ;
    $this->tags = $tags ?? ;
  }
}

type AllowedNodeGroupId = string;

class AllowedNodeTypeModificationsMessage {
  public NodeTypeList $scale_down_modifications;
  public NodeTypeList $scale_up_modifications;

  public function __construct(shape(
  ?'scale_down_modifications' => NodeTypeList,
  ?'scale_up_modifications' => NodeTypeList,
  ) $s = shape()) {
    $this->scale_down_modifications = $scale_down_modifications ?? ;
    $this->scale_up_modifications = $scale_up_modifications ?? ;
  }
}

type AuthTokenUpdateStatus = string;

type AuthTokenUpdateStrategyType = string;

class AuthorizationAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AuthorizationNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AuthorizeCacheSecurityGroupIngressMessage {
  public string $cache_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;

  public function __construct(shape(
  ?'cache_security_group_name' => string,
  ?'ec_2_security_group_name' => string,
  ?'ec_2_security_group_owner_id' => string,
  ) $s = shape()) {
    $this->cache_security_group_name = $cache_security_group_name ?? ;
    $this->ec_2_security_group_name = $ec_2_security_group_name ?? ;
    $this->ec_2_security_group_owner_id = $ec_2_security_group_owner_id ?? ;
  }
}

class AuthorizeCacheSecurityGroupIngressResult {
  public CacheSecurityGroup $cache_security_group;

  public function __construct(shape(
  ?'cache_security_group' => CacheSecurityGroup,
  ) $s = shape()) {
    $this->cache_security_group = $cache_security_group ?? null;
  }
}

type AutomaticFailoverStatus = string;

class AvailabilityZone {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type AvailabilityZonesList = vec<String>;

type AwsQueryErrorMessage = string;

class BatchApplyUpdateActionMessage {
  public CacheClusterIdList $cache_cluster_ids;
  public ReplicationGroupIdList $replication_group_ids;
  public string $service_update_name;

  public function __construct(shape(
  ?'cache_cluster_ids' => CacheClusterIdList,
  ?'replication_group_ids' => ReplicationGroupIdList,
  ?'service_update_name' => string,
  ) $s = shape()) {
    $this->cache_cluster_ids = $cache_cluster_ids ?? ;
    $this->replication_group_ids = $replication_group_ids ?? ;
    $this->service_update_name = $service_update_name ?? ;
  }
}

class BatchStopUpdateActionMessage {
  public CacheClusterIdList $cache_cluster_ids;
  public ReplicationGroupIdList $replication_group_ids;
  public string $service_update_name;

  public function __construct(shape(
  ?'cache_cluster_ids' => CacheClusterIdList,
  ?'replication_group_ids' => ReplicationGroupIdList,
  ?'service_update_name' => string,
  ) $s = shape()) {
    $this->cache_cluster_ids = $cache_cluster_ids ?? ;
    $this->replication_group_ids = $replication_group_ids ?? ;
    $this->service_update_name = $service_update_name ?? ;
  }
}

type Boolean = bool;

type BooleanOptional = bool;

class CacheCluster {
  public BooleanOptional $at_rest_encryption_enabled;
  public BooleanOptional $auth_token_enabled;
  public TStamp $auth_token_last_modified_date;
  public boolean $auto_minor_version_upgrade;
  public TStamp $cache_cluster_create_time;
  public string $cache_cluster_id;
  public string $cache_cluster_status;
  public string $cache_node_type;
  public CacheNodeList $cache_nodes;
  public CacheParameterGroupStatus $cache_parameter_group;
  public CacheSecurityGroupMembershipList $cache_security_groups;
  public string $cache_subnet_group_name;
  public string $client_download_landing_page;
  public Endpoint $configuration_endpoint;
  public string $engine;
  public string $engine_version;
  public NotificationConfiguration $notification_configuration;
  public IntegerOptional $num_cache_nodes;
  public PendingModifiedValues $pending_modified_values;
  public string $preferred_availability_zone;
  public string $preferred_maintenance_window;
  public string $replication_group_id;
  public SecurityGroupMembershipList $security_groups;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_window;
  public BooleanOptional $transit_encryption_enabled;

  public function __construct(shape(
  ?'at_rest_encryption_enabled' => BooleanOptional,
  ?'auth_token_enabled' => BooleanOptional,
  ?'auth_token_last_modified_date' => TStamp,
  ?'auto_minor_version_upgrade' => boolean,
  ?'cache_cluster_create_time' => TStamp,
  ?'cache_cluster_id' => string,
  ?'cache_cluster_status' => string,
  ?'cache_node_type' => string,
  ?'cache_nodes' => CacheNodeList,
  ?'cache_parameter_group' => CacheParameterGroupStatus,
  ?'cache_security_groups' => CacheSecurityGroupMembershipList,
  ?'cache_subnet_group_name' => string,
  ?'client_download_landing_page' => string,
  ?'configuration_endpoint' => Endpoint,
  ?'engine' => string,
  ?'engine_version' => string,
  ?'notification_configuration' => NotificationConfiguration,
  ?'num_cache_nodes' => IntegerOptional,
  ?'pending_modified_values' => PendingModifiedValues,
  ?'preferred_availability_zone' => string,
  ?'preferred_maintenance_window' => string,
  ?'replication_group_id' => string,
  ?'security_groups' => SecurityGroupMembershipList,
  ?'snapshot_retention_limit' => IntegerOptional,
  ?'snapshot_window' => string,
  ?'transit_encryption_enabled' => BooleanOptional,
  ) $s = shape()) {
    $this->at_rest_encryption_enabled = $at_rest_encryption_enabled ?? ;
    $this->auth_token_enabled = $auth_token_enabled ?? ;
    $this->auth_token_last_modified_date = $auth_token_last_modified_date ?? ;
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->cache_cluster_create_time = $cache_cluster_create_time ?? ;
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_cluster_status = $cache_cluster_status ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->cache_nodes = $cache_nodes ?? ;
    $this->cache_parameter_group = $cache_parameter_group ?? null;
    $this->cache_security_groups = $cache_security_groups ?? [];
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
    $this->client_download_landing_page = $client_download_landing_page ?? ;
    $this->configuration_endpoint = $configuration_endpoint ?? ;
    $this->engine = $engine ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->notification_configuration = $notification_configuration ?? null;
    $this->num_cache_nodes = $num_cache_nodes ?? ;
    $this->pending_modified_values = $pending_modified_values ?? null;
    $this->preferred_availability_zone = $preferred_availability_zone ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->security_groups = $security_groups ?? ;
    $this->snapshot_retention_limit = $snapshot_retention_limit ?? ;
    $this->snapshot_window = $snapshot_window ?? ;
    $this->transit_encryption_enabled = $transit_encryption_enabled ?? ;
  }
}

class CacheClusterAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CacheClusterIdList = vec<String>;

type CacheClusterList = vec<CacheCluster>;

class CacheClusterMessage {
  public CacheClusterList $cache_clusters;
  public string $marker;

  public function __construct(shape(
  ?'cache_clusters' => CacheClusterList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cache_clusters = $cache_clusters ?? ;
    $this->marker = $marker ?? ;
  }
}

class CacheClusterNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheEngineVersion {
  public string $cache_engine_description;
  public string $cache_engine_version_description;
  public string $cache_parameter_group_family;
  public string $engine;
  public string $engine_version;

  public function __construct(shape(
  ?'cache_engine_description' => string,
  ?'cache_engine_version_description' => string,
  ?'cache_parameter_group_family' => string,
  ?'engine' => string,
  ?'engine_version' => string,
  ) $s = shape()) {
    $this->cache_engine_description = $cache_engine_description ?? ;
    $this->cache_engine_version_description = $cache_engine_version_description ?? ;
    $this->cache_parameter_group_family = $cache_parameter_group_family ?? ;
    $this->engine = $engine ?? ;
    $this->engine_version = $engine_version ?? ;
  }
}

type CacheEngineVersionList = vec<CacheEngineVersion>;

class CacheEngineVersionMessage {
  public CacheEngineVersionList $cache_engine_versions;
  public string $marker;

  public function __construct(shape(
  ?'cache_engine_versions' => CacheEngineVersionList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cache_engine_versions = $cache_engine_versions ?? ;
    $this->marker = $marker ?? ;
  }
}

class CacheNode {
  public TStamp $cache_node_create_time;
  public string $cache_node_id;
  public string $cache_node_status;
  public string $customer_availability_zone;
  public Endpoint $endpoint;
  public string $parameter_group_status;
  public string $source_cache_node_id;

  public function __construct(shape(
  ?'cache_node_create_time' => TStamp,
  ?'cache_node_id' => string,
  ?'cache_node_status' => string,
  ?'customer_availability_zone' => string,
  ?'endpoint' => Endpoint,
  ?'parameter_group_status' => string,
  ?'source_cache_node_id' => string,
  ) $s = shape()) {
    $this->cache_node_create_time = $cache_node_create_time ?? ;
    $this->cache_node_id = $cache_node_id ?? ;
    $this->cache_node_status = $cache_node_status ?? ;
    $this->customer_availability_zone = $customer_availability_zone ?? ;
    $this->endpoint = $endpoint ?? null;
    $this->parameter_group_status = $parameter_group_status ?? ;
    $this->source_cache_node_id = $source_cache_node_id ?? ;
  }
}

type CacheNodeIdsList = vec<String>;

type CacheNodeList = vec<CacheNode>;

class CacheNodeTypeSpecificParameter {
  public string $allowed_values;
  public CacheNodeTypeSpecificValueList $cache_node_type_specific_values;
  public ChangeType $change_type;
  public string $data_type;
  public string $description;
  public boolean $is_modifiable;
  public string $minimum_engine_version;
  public string $parameter_name;
  public string $source;

  public function __construct(shape(
  ?'allowed_values' => string,
  ?'cache_node_type_specific_values' => CacheNodeTypeSpecificValueList,
  ?'change_type' => ChangeType,
  ?'data_type' => string,
  ?'description' => string,
  ?'is_modifiable' => boolean,
  ?'minimum_engine_version' => string,
  ?'parameter_name' => string,
  ?'source' => string,
  ) $s = shape()) {
    $this->allowed_values = $allowed_values ?? ;
    $this->cache_node_type_specific_values = $cache_node_type_specific_values ?? ;
    $this->change_type = $change_type ?? "";
    $this->data_type = $data_type ?? ;
    $this->description = $description ?? ;
    $this->is_modifiable = $is_modifiable ?? ;
    $this->minimum_engine_version = $minimum_engine_version ?? ;
    $this->parameter_name = $parameter_name ?? ;
    $this->source = $source ?? ;
  }
}

type CacheNodeTypeSpecificParametersList = vec<CacheNodeTypeSpecificParameter>;

class CacheNodeTypeSpecificValue {
  public string $cache_node_type;
  public string $value;

  public function __construct(shape(
  ?'cache_node_type' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->cache_node_type = $cache_node_type ?? ;
    $this->value = $value ?? ;
  }
}

type CacheNodeTypeSpecificValueList = vec<CacheNodeTypeSpecificValue>;

class CacheNodeUpdateStatus {
  public string $cache_node_id;
  public TStamp $node_deletion_date;
  public TStamp $node_update_end_date;
  public NodeUpdateInitiatedBy $node_update_initiated_by;
  public TStamp $node_update_initiated_date;
  public TStamp $node_update_start_date;
  public NodeUpdateStatus $node_update_status;
  public TStamp $node_update_status_modified_date;

  public function __construct(shape(
  ?'cache_node_id' => string,
  ?'node_deletion_date' => TStamp,
  ?'node_update_end_date' => TStamp,
  ?'node_update_initiated_by' => NodeUpdateInitiatedBy,
  ?'node_update_initiated_date' => TStamp,
  ?'node_update_start_date' => TStamp,
  ?'node_update_status' => NodeUpdateStatus,
  ?'node_update_status_modified_date' => TStamp,
  ) $s = shape()) {
    $this->cache_node_id = $cache_node_id ?? ;
    $this->node_deletion_date = $node_deletion_date ?? ;
    $this->node_update_end_date = $node_update_end_date ?? ;
    $this->node_update_initiated_by = $node_update_initiated_by ?? "";
    $this->node_update_initiated_date = $node_update_initiated_date ?? ;
    $this->node_update_start_date = $node_update_start_date ?? ;
    $this->node_update_status = $node_update_status ?? "";
    $this->node_update_status_modified_date = $node_update_status_modified_date ?? ;
  }
}

type CacheNodeUpdateStatusList = vec<CacheNodeUpdateStatus>;

class CacheParameterGroup {
  public string $cache_parameter_group_family;
  public string $cache_parameter_group_name;
  public string $description;
  public boolean $is_global;

  public function __construct(shape(
  ?'cache_parameter_group_family' => string,
  ?'cache_parameter_group_name' => string,
  ?'description' => string,
  ?'is_global' => boolean,
  ) $s = shape()) {
    $this->cache_parameter_group_family = $cache_parameter_group_family ?? ;
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->description = $description ?? ;
    $this->is_global = $is_global ?? ;
  }
}

class CacheParameterGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheParameterGroupDetails {
  public CacheNodeTypeSpecificParametersList $cache_node_type_specific_parameters;
  public string $marker;
  public ParametersList $parameters;

  public function __construct(shape(
  ?'cache_node_type_specific_parameters' => CacheNodeTypeSpecificParametersList,
  ?'marker' => string,
  ?'parameters' => ParametersList,
  ) $s = shape()) {
    $this->cache_node_type_specific_parameters = $cache_node_type_specific_parameters ?? ;
    $this->marker = $marker ?? ;
    $this->parameters = $parameters ?? ;
  }
}

type CacheParameterGroupList = vec<CacheParameterGroup>;

class CacheParameterGroupNameMessage {
  public string $cache_parameter_group_name;

  public function __construct(shape(
  ?'cache_parameter_group_name' => string,
  ) $s = shape()) {
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
  }
}

class CacheParameterGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheParameterGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheParameterGroupStatus {
  public CacheNodeIdsList $cache_node_ids_to_reboot;
  public string $cache_parameter_group_name;
  public string $parameter_apply_status;

  public function __construct(shape(
  ?'cache_node_ids_to_reboot' => CacheNodeIdsList,
  ?'cache_parameter_group_name' => string,
  ?'parameter_apply_status' => string,
  ) $s = shape()) {
    $this->cache_node_ids_to_reboot = $cache_node_ids_to_reboot ?? ;
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->parameter_apply_status = $parameter_apply_status ?? ;
  }
}

class CacheParameterGroupsMessage {
  public CacheParameterGroupList $cache_parameter_groups;
  public string $marker;

  public function __construct(shape(
  ?'cache_parameter_groups' => CacheParameterGroupList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cache_parameter_groups = $cache_parameter_groups ?? ;
    $this->marker = $marker ?? ;
  }
}

class CacheSecurityGroup {
  public string $cache_security_group_name;
  public string $description;
  public EC2SecurityGroupList $ec_2_security_groups;
  public string $owner_id;

  public function __construct(shape(
  ?'cache_security_group_name' => string,
  ?'description' => string,
  ?'ec_2_security_groups' => EC2SecurityGroupList,
  ?'owner_id' => string,
  ) $s = shape()) {
    $this->cache_security_group_name = $cache_security_group_name ?? ;
    $this->description = $description ?? ;
    $this->ec_2_security_groups = $ec_2_security_groups ?? ;
    $this->owner_id = $owner_id ?? ;
  }
}

class CacheSecurityGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheSecurityGroupMembership {
  public string $cache_security_group_name;
  public string $status;

  public function __construct(shape(
  ?'cache_security_group_name' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->cache_security_group_name = $cache_security_group_name ?? ;
    $this->status = $status ?? ;
  }
}

type CacheSecurityGroupMembershipList = vec<CacheSecurityGroupMembership>;

class CacheSecurityGroupMessage {
  public CacheSecurityGroups $cache_security_groups;
  public string $marker;

  public function __construct(shape(
  ?'cache_security_groups' => CacheSecurityGroups,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cache_security_groups = $cache_security_groups ?? [];
    $this->marker = $marker ?? ;
  }
}

type CacheSecurityGroupNameList = vec<String>;

class CacheSecurityGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheSecurityGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CacheSecurityGroups = vec<CacheSecurityGroup>;

class CacheSubnetGroup {
  public string $cache_subnet_group_description;
  public string $cache_subnet_group_name;
  public SubnetList $subnets;
  public string $vpc_id;

  public function __construct(shape(
  ?'cache_subnet_group_description' => string,
  ?'cache_subnet_group_name' => string,
  ?'subnets' => SubnetList,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cache_subnet_group_description = $cache_subnet_group_description ?? ;
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
    $this->subnets = $subnets ?? ;
    $this->vpc_id = $vpc_id ?? ;
  }
}

class CacheSubnetGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheSubnetGroupInUse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheSubnetGroupMessage {
  public CacheSubnetGroups $cache_subnet_groups;
  public string $marker;

  public function __construct(shape(
  ?'cache_subnet_groups' => CacheSubnetGroups,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cache_subnet_groups = $cache_subnet_groups ?? [];
    $this->marker = $marker ?? ;
  }
}

class CacheSubnetGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CacheSubnetGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CacheSubnetGroups = vec<CacheSubnetGroup>;

class CacheSubnetQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ChangeType = string;

type ClusterIdList = vec<String>;

class ClusterQuotaForCustomerExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CompleteMigrationMessage {
  public boolean $force;
  public string $replication_group_id;

  public function __construct(shape(
  ?'force' => boolean,
  ?'replication_group_id' => string,
  ) $s = shape()) {
    $this->force = $force ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
  }
}

class CompleteMigrationResponse {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

class ConfigureShard {
  public int $new_replica_count;
  public AllowedNodeGroupId $node_group_id;
  public PreferredAvailabilityZoneList $preferred_availability_zones;

  public function __construct(shape(
  ?'new_replica_count' => int,
  ?'node_group_id' => AllowedNodeGroupId,
  ?'preferred_availability_zones' => PreferredAvailabilityZoneList,
  ) $s = shape()) {
    $this->new_replica_count = $new_replica_count ?? ;
    $this->node_group_id = $node_group_id ?? ;
    $this->preferred_availability_zones = $preferred_availability_zones ?? ;
  }
}

class CopySnapshotMessage {
  public string $kms_key_id;
  public string $source_snapshot_name;
  public string $target_bucket;
  public string $target_snapshot_name;

  public function __construct(shape(
  ?'kms_key_id' => string,
  ?'source_snapshot_name' => string,
  ?'target_bucket' => string,
  ?'target_snapshot_name' => string,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? ;
    $this->source_snapshot_name = $source_snapshot_name ?? ;
    $this->target_bucket = $target_bucket ?? ;
    $this->target_snapshot_name = $target_snapshot_name ?? ;
  }
}

class CopySnapshotResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class CreateCacheClusterMessage {
  public AZMode $az_mode;
  public string $auth_token;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $cache_cluster_id;
  public string $cache_node_type;
  public string $cache_parameter_group_name;
  public CacheSecurityGroupNameList $cache_security_group_names;
  public string $cache_subnet_group_name;
  public string $engine;
  public string $engine_version;
  public string $notification_topic_arn;
  public IntegerOptional $num_cache_nodes;
  public IntegerOptional $port;
  public string $preferred_availability_zone;
  public PreferredAvailabilityZoneList $preferred_availability_zones;
  public string $preferred_maintenance_window;
  public string $replication_group_id;
  public SecurityGroupIdsList $security_group_ids;
  public SnapshotArnsList $snapshot_arns;
  public string $snapshot_name;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_window;
  public TagList $tags;

  public function __construct(shape(
  ?'az_mode' => AZMode,
  ?'auth_token' => string,
  ?'auto_minor_version_upgrade' => BooleanOptional,
  ?'cache_cluster_id' => string,
  ?'cache_node_type' => string,
  ?'cache_parameter_group_name' => string,
  ?'cache_security_group_names' => CacheSecurityGroupNameList,
  ?'cache_subnet_group_name' => string,
  ?'engine' => string,
  ?'engine_version' => string,
  ?'notification_topic_arn' => string,
  ?'num_cache_nodes' => IntegerOptional,
  ?'port' => IntegerOptional,
  ?'preferred_availability_zone' => string,
  ?'preferred_availability_zones' => PreferredAvailabilityZoneList,
  ?'preferred_maintenance_window' => string,
  ?'replication_group_id' => string,
  ?'security_group_ids' => SecurityGroupIdsList,
  ?'snapshot_arns' => SnapshotArnsList,
  ?'snapshot_name' => string,
  ?'snapshot_retention_limit' => IntegerOptional,
  ?'snapshot_window' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->az_mode = $az_mode ?? "";
    $this->auth_token = $auth_token ?? ;
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->cache_security_group_names = $cache_security_group_names ?? ;
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
    $this->engine = $engine ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->notification_topic_arn = $notification_topic_arn ?? ;
    $this->num_cache_nodes = $num_cache_nodes ?? ;
    $this->port = $port ?? ;
    $this->preferred_availability_zone = $preferred_availability_zone ?? ;
    $this->preferred_availability_zones = $preferred_availability_zones ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->snapshot_arns = $snapshot_arns ?? ;
    $this->snapshot_name = $snapshot_name ?? ;
    $this->snapshot_retention_limit = $snapshot_retention_limit ?? ;
    $this->snapshot_window = $snapshot_window ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateCacheClusterResult {
  public CacheCluster $cache_cluster;

  public function __construct(shape(
  ?'cache_cluster' => CacheCluster,
  ) $s = shape()) {
    $this->cache_cluster = $cache_cluster ?? null;
  }
}

class CreateCacheParameterGroupMessage {
  public string $cache_parameter_group_family;
  public string $cache_parameter_group_name;
  public string $description;

  public function __construct(shape(
  ?'cache_parameter_group_family' => string,
  ?'cache_parameter_group_name' => string,
  ?'description' => string,
  ) $s = shape()) {
    $this->cache_parameter_group_family = $cache_parameter_group_family ?? ;
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->description = $description ?? ;
  }
}

class CreateCacheParameterGroupResult {
  public CacheParameterGroup $cache_parameter_group;

  public function __construct(shape(
  ?'cache_parameter_group' => CacheParameterGroup,
  ) $s = shape()) {
    $this->cache_parameter_group = $cache_parameter_group ?? null;
  }
}

class CreateCacheSecurityGroupMessage {
  public string $cache_security_group_name;
  public string $description;

  public function __construct(shape(
  ?'cache_security_group_name' => string,
  ?'description' => string,
  ) $s = shape()) {
    $this->cache_security_group_name = $cache_security_group_name ?? ;
    $this->description = $description ?? ;
  }
}

class CreateCacheSecurityGroupResult {
  public CacheSecurityGroup $cache_security_group;

  public function __construct(shape(
  ?'cache_security_group' => CacheSecurityGroup,
  ) $s = shape()) {
    $this->cache_security_group = $cache_security_group ?? null;
  }
}

class CreateCacheSubnetGroupMessage {
  public string $cache_subnet_group_description;
  public string $cache_subnet_group_name;
  public SubnetIdentifierList $subnet_ids;

  public function __construct(shape(
  ?'cache_subnet_group_description' => string,
  ?'cache_subnet_group_name' => string,
  ?'subnet_ids' => SubnetIdentifierList,
  ) $s = shape()) {
    $this->cache_subnet_group_description = $cache_subnet_group_description ?? ;
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
  }
}

class CreateCacheSubnetGroupResult {
  public CacheSubnetGroup $cache_subnet_group;

  public function __construct(shape(
  ?'cache_subnet_group' => CacheSubnetGroup,
  ) $s = shape()) {
    $this->cache_subnet_group = $cache_subnet_group ?? null;
  }
}

class CreateGlobalReplicationGroupMessage {
  public string $global_replication_group_description;
  public string $global_replication_group_id_suffix;
  public string $primary_replication_group_id;

  public function __construct(shape(
  ?'global_replication_group_description' => string,
  ?'global_replication_group_id_suffix' => string,
  ?'primary_replication_group_id' => string,
  ) $s = shape()) {
    $this->global_replication_group_description = $global_replication_group_description ?? ;
    $this->global_replication_group_id_suffix = $global_replication_group_id_suffix ?? ;
    $this->primary_replication_group_id = $primary_replication_group_id ?? ;
  }
}

class CreateGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;

  public function __construct(shape(
  ?'global_replication_group' => GlobalReplicationGroup,
  ) $s = shape()) {
    $this->global_replication_group = $global_replication_group ?? null;
  }
}

class CreateReplicationGroupMessage {
  public BooleanOptional $at_rest_encryption_enabled;
  public string $auth_token;
  public BooleanOptional $auto_minor_version_upgrade;
  public BooleanOptional $automatic_failover_enabled;
  public string $cache_node_type;
  public string $cache_parameter_group_name;
  public CacheSecurityGroupNameList $cache_security_group_names;
  public string $cache_subnet_group_name;
  public string $engine;
  public string $engine_version;
  public string $global_replication_group_id;
  public string $kms_key_id;
  public NodeGroupConfigurationList $node_group_configuration;
  public string $notification_topic_arn;
  public IntegerOptional $num_cache_clusters;
  public IntegerOptional $num_node_groups;
  public IntegerOptional $port;
  public AvailabilityZonesList $preferred_cache_cluster_a_zs;
  public string $preferred_maintenance_window;
  public string $primary_cluster_id;
  public IntegerOptional $replicas_per_node_group;
  public string $replication_group_description;
  public string $replication_group_id;
  public SecurityGroupIdsList $security_group_ids;
  public SnapshotArnsList $snapshot_arns;
  public string $snapshot_name;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_window;
  public TagList $tags;
  public BooleanOptional $transit_encryption_enabled;

  public function __construct(shape(
  ?'at_rest_encryption_enabled' => BooleanOptional,
  ?'auth_token' => string,
  ?'auto_minor_version_upgrade' => BooleanOptional,
  ?'automatic_failover_enabled' => BooleanOptional,
  ?'cache_node_type' => string,
  ?'cache_parameter_group_name' => string,
  ?'cache_security_group_names' => CacheSecurityGroupNameList,
  ?'cache_subnet_group_name' => string,
  ?'engine' => string,
  ?'engine_version' => string,
  ?'global_replication_group_id' => string,
  ?'kms_key_id' => string,
  ?'node_group_configuration' => NodeGroupConfigurationList,
  ?'notification_topic_arn' => string,
  ?'num_cache_clusters' => IntegerOptional,
  ?'num_node_groups' => IntegerOptional,
  ?'port' => IntegerOptional,
  ?'preferred_cache_cluster_a_zs' => AvailabilityZonesList,
  ?'preferred_maintenance_window' => string,
  ?'primary_cluster_id' => string,
  ?'replicas_per_node_group' => IntegerOptional,
  ?'replication_group_description' => string,
  ?'replication_group_id' => string,
  ?'security_group_ids' => SecurityGroupIdsList,
  ?'snapshot_arns' => SnapshotArnsList,
  ?'snapshot_name' => string,
  ?'snapshot_retention_limit' => IntegerOptional,
  ?'snapshot_window' => string,
  ?'tags' => TagList,
  ?'transit_encryption_enabled' => BooleanOptional,
  ) $s = shape()) {
    $this->at_rest_encryption_enabled = $at_rest_encryption_enabled ?? ;
    $this->auth_token = $auth_token ?? ;
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->automatic_failover_enabled = $automatic_failover_enabled ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->cache_security_group_names = $cache_security_group_names ?? ;
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
    $this->engine = $engine ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->node_group_configuration = $node_group_configuration ?? null;
    $this->notification_topic_arn = $notification_topic_arn ?? ;
    $this->num_cache_clusters = $num_cache_clusters ?? ;
    $this->num_node_groups = $num_node_groups ?? ;
    $this->port = $port ?? ;
    $this->preferred_cache_cluster_a_zs = $preferred_cache_cluster_a_zs ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->primary_cluster_id = $primary_cluster_id ?? ;
    $this->replicas_per_node_group = $replicas_per_node_group ?? ;
    $this->replication_group_description = $replication_group_description ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->snapshot_arns = $snapshot_arns ?? ;
    $this->snapshot_name = $snapshot_name ?? ;
    $this->snapshot_retention_limit = $snapshot_retention_limit ?? ;
    $this->snapshot_window = $snapshot_window ?? ;
    $this->tags = $tags ?? ;
    $this->transit_encryption_enabled = $transit_encryption_enabled ?? ;
  }
}

class CreateReplicationGroupResult {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

class CreateSnapshotMessage {
  public string $cache_cluster_id;
  public string $kms_key_id;
  public string $replication_group_id;
  public string $snapshot_name;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'kms_key_id' => string,
  ?'replication_group_id' => string,
  ?'snapshot_name' => string,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->snapshot_name = $snapshot_name ?? ;
  }
}

class CreateSnapshotResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class CustomerNodeEndpoint {
  public string $address;
  public IntegerOptional $port;

  public function __construct(shape(
  ?'address' => string,
  ?'port' => IntegerOptional,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->port = $port ?? ;
  }
}

type CustomerNodeEndpointList = vec<CustomerNodeEndpoint>;

class DecreaseNodeGroupsInGlobalReplicationGroupMessage {
  public boolean $apply_immediately;
  public GlobalNodeGroupIdList $global_node_groups_to_remove;
  public GlobalNodeGroupIdList $global_node_groups_to_retain;
  public string $global_replication_group_id;
  public int $node_group_count;

  public function __construct(shape(
  ?'apply_immediately' => boolean,
  ?'global_node_groups_to_remove' => GlobalNodeGroupIdList,
  ?'global_node_groups_to_retain' => GlobalNodeGroupIdList,
  ?'global_replication_group_id' => string,
  ?'node_group_count' => int,
  ) $s = shape()) {
    $this->apply_immediately = $apply_immediately ?? ;
    $this->global_node_groups_to_remove = $global_node_groups_to_remove ?? ;
    $this->global_node_groups_to_retain = $global_node_groups_to_retain ?? ;
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->node_group_count = $node_group_count ?? ;
  }
}

class DecreaseNodeGroupsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;

  public function __construct(shape(
  ?'global_replication_group' => GlobalReplicationGroup,
  ) $s = shape()) {
    $this->global_replication_group = $global_replication_group ?? null;
  }
}

class DecreaseReplicaCountMessage {
  public boolean $apply_immediately;
  public IntegerOptional $new_replica_count;
  public ReplicaConfigurationList $replica_configuration;
  public RemoveReplicasList $replicas_to_remove;
  public string $replication_group_id;

  public function __construct(shape(
  ?'apply_immediately' => boolean,
  ?'new_replica_count' => IntegerOptional,
  ?'replica_configuration' => ReplicaConfigurationList,
  ?'replicas_to_remove' => RemoveReplicasList,
  ?'replication_group_id' => string,
  ) $s = shape()) {
    $this->apply_immediately = $apply_immediately ?? ;
    $this->new_replica_count = $new_replica_count ?? ;
    $this->replica_configuration = $replica_configuration ?? ;
    $this->replicas_to_remove = $replicas_to_remove ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
  }
}

class DecreaseReplicaCountResult {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

class DeleteCacheClusterMessage {
  public string $cache_cluster_id;
  public string $final_snapshot_identifier;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'final_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->final_snapshot_identifier = $final_snapshot_identifier ?? ;
  }
}

class DeleteCacheClusterResult {
  public CacheCluster $cache_cluster;

  public function __construct(shape(
  ?'cache_cluster' => CacheCluster,
  ) $s = shape()) {
    $this->cache_cluster = $cache_cluster ?? null;
  }
}

class DeleteCacheParameterGroupMessage {
  public string $cache_parameter_group_name;

  public function __construct(shape(
  ?'cache_parameter_group_name' => string,
  ) $s = shape()) {
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
  }
}

class DeleteCacheSecurityGroupMessage {
  public string $cache_security_group_name;

  public function __construct(shape(
  ?'cache_security_group_name' => string,
  ) $s = shape()) {
    $this->cache_security_group_name = $cache_security_group_name ?? ;
  }
}

class DeleteCacheSubnetGroupMessage {
  public string $cache_subnet_group_name;

  public function __construct(shape(
  ?'cache_subnet_group_name' => string,
  ) $s = shape()) {
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
  }
}

class DeleteGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public boolean $retain_primary_replication_group;

  public function __construct(shape(
  ?'global_replication_group_id' => string,
  ?'retain_primary_replication_group' => boolean,
  ) $s = shape()) {
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->retain_primary_replication_group = $retain_primary_replication_group ?? ;
  }
}

class DeleteGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;

  public function __construct(shape(
  ?'global_replication_group' => GlobalReplicationGroup,
  ) $s = shape()) {
    $this->global_replication_group = $global_replication_group ?? null;
  }
}

class DeleteReplicationGroupMessage {
  public string $final_snapshot_identifier;
  public string $replication_group_id;
  public BooleanOptional $retain_primary_cluster;

  public function __construct(shape(
  ?'final_snapshot_identifier' => string,
  ?'replication_group_id' => string,
  ?'retain_primary_cluster' => BooleanOptional,
  ) $s = shape()) {
    $this->final_snapshot_identifier = $final_snapshot_identifier ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->retain_primary_cluster = $retain_primary_cluster ?? ;
  }
}

class DeleteReplicationGroupResult {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

class DeleteSnapshotMessage {
  public string $snapshot_name;

  public function __construct(shape(
  ?'snapshot_name' => string,
  ) $s = shape()) {
    $this->snapshot_name = $snapshot_name ?? ;
  }
}

class DeleteSnapshotResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class DescribeCacheClustersMessage {
  public string $cache_cluster_id;
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $show_cache_clusters_not_in_replication_groups;
  public BooleanOptional $show_cache_node_info;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'show_cache_clusters_not_in_replication_groups' => BooleanOptional,
  ?'show_cache_node_info' => BooleanOptional,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->show_cache_clusters_not_in_replication_groups = $show_cache_clusters_not_in_replication_groups ?? ;
    $this->show_cache_node_info = $show_cache_node_info ?? ;
  }
}

class DescribeCacheEngineVersionsMessage {
  public string $cache_parameter_group_family;
  public boolean $default_only;
  public string $engine;
  public string $engine_version;
  public string $marker;
  public IntegerOptional $max_records;

  public function __construct(shape(
  ?'cache_parameter_group_family' => string,
  ?'default_only' => boolean,
  ?'engine' => string,
  ?'engine_version' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ) $s = shape()) {
    $this->cache_parameter_group_family = $cache_parameter_group_family ?? ;
    $this->default_only = $default_only ?? ;
    $this->engine = $engine ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
  }
}

class DescribeCacheParameterGroupsMessage {
  public string $cache_parameter_group_name;
  public string $marker;
  public IntegerOptional $max_records;

  public function __construct(shape(
  ?'cache_parameter_group_name' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ) $s = shape()) {
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
  }
}

class DescribeCacheParametersMessage {
  public string $cache_parameter_group_name;
  public string $marker;
  public IntegerOptional $max_records;
  public string $source;

  public function __construct(shape(
  ?'cache_parameter_group_name' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'source' => string,
  ) $s = shape()) {
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->source = $source ?? ;
  }
}

class DescribeCacheSecurityGroupsMessage {
  public string $cache_security_group_name;
  public string $marker;
  public IntegerOptional $max_records;

  public function __construct(shape(
  ?'cache_security_group_name' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ) $s = shape()) {
    $this->cache_security_group_name = $cache_security_group_name ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
  }
}

class DescribeCacheSubnetGroupsMessage {
  public string $cache_subnet_group_name;
  public string $marker;
  public IntegerOptional $max_records;

  public function __construct(shape(
  ?'cache_subnet_group_name' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ) $s = shape()) {
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
  }
}

class DescribeEngineDefaultParametersMessage {
  public string $cache_parameter_group_family;
  public string $marker;
  public IntegerOptional $max_records;

  public function __construct(shape(
  ?'cache_parameter_group_family' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ) $s = shape()) {
    $this->cache_parameter_group_family = $cache_parameter_group_family ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
  }
}

class DescribeEngineDefaultParametersResult {
  public EngineDefaults $engine_defaults;

  public function __construct(shape(
  ?'engine_defaults' => EngineDefaults,
  ) $s = shape()) {
    $this->engine_defaults = $engine_defaults ?? null;
  }
}

class DescribeEventsMessage {
  public IntegerOptional $duration;
  public TStamp $end_time;
  public string $marker;
  public IntegerOptional $max_records;
  public string $source_identifier;
  public SourceType $source_type;
  public TStamp $start_time;

  public function __construct(shape(
  ?'duration' => IntegerOptional,
  ?'end_time' => TStamp,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'source_identifier' => string,
  ?'source_type' => SourceType,
  ?'start_time' => TStamp,
  ) $s = shape()) {
    $this->duration = $duration ?? ;
    $this->end_time = $end_time ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->source_identifier = $source_identifier ?? ;
    $this->source_type = $source_type ?? "";
    $this->start_time = $start_time ?? ;
  }
}

class DescribeGlobalReplicationGroupsMessage {
  public string $global_replication_group_id;
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $show_member_info;

  public function __construct(shape(
  ?'global_replication_group_id' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'show_member_info' => BooleanOptional,
  ) $s = shape()) {
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->show_member_info = $show_member_info ?? ;
  }
}

class DescribeGlobalReplicationGroupsResult {
  public GlobalReplicationGroupList $global_replication_groups;
  public string $marker;

  public function __construct(shape(
  ?'global_replication_groups' => GlobalReplicationGroupList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->global_replication_groups = $global_replication_groups ?? ;
    $this->marker = $marker ?? ;
  }
}

class DescribeReplicationGroupsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $replication_group_id;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'replication_group_id' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
  }
}

class DescribeReservedCacheNodesMessage {
  public string $cache_node_type;
  public string $duration;
  public string $marker;
  public IntegerOptional $max_records;
  public string $offering_type;
  public string $product_description;
  public string $reserved_cache_node_id;
  public string $reserved_cache_nodes_offering_id;

  public function __construct(shape(
  ?'cache_node_type' => string,
  ?'duration' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'offering_type' => string,
  ?'product_description' => string,
  ?'reserved_cache_node_id' => string,
  ?'reserved_cache_nodes_offering_id' => string,
  ) $s = shape()) {
    $this->cache_node_type = $cache_node_type ?? ;
    $this->duration = $duration ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->offering_type = $offering_type ?? ;
    $this->product_description = $product_description ?? ;
    $this->reserved_cache_node_id = $reserved_cache_node_id ?? ;
    $this->reserved_cache_nodes_offering_id = $reserved_cache_nodes_offering_id ?? ;
  }
}

class DescribeReservedCacheNodesOfferingsMessage {
  public string $cache_node_type;
  public string $duration;
  public string $marker;
  public IntegerOptional $max_records;
  public string $offering_type;
  public string $product_description;
  public string $reserved_cache_nodes_offering_id;

  public function __construct(shape(
  ?'cache_node_type' => string,
  ?'duration' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'offering_type' => string,
  ?'product_description' => string,
  ?'reserved_cache_nodes_offering_id' => string,
  ) $s = shape()) {
    $this->cache_node_type = $cache_node_type ?? ;
    $this->duration = $duration ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->offering_type = $offering_type ?? ;
    $this->product_description = $product_description ?? ;
    $this->reserved_cache_nodes_offering_id = $reserved_cache_nodes_offering_id ?? ;
  }
}

class DescribeServiceUpdatesMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $service_update_name;
  public ServiceUpdateStatusList $service_update_status;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'service_update_name' => string,
  ?'service_update_status' => ServiceUpdateStatusList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->service_update_name = $service_update_name ?? ;
    $this->service_update_status = $service_update_status ?? "";
  }
}

class DescribeSnapshotsListMessage {
  public string $marker;
  public SnapshotList $snapshots;

  public function __construct(shape(
  ?'marker' => string,
  ?'snapshots' => SnapshotList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->snapshots = $snapshots ?? ;
  }
}

class DescribeSnapshotsMessage {
  public string $cache_cluster_id;
  public string $marker;
  public IntegerOptional $max_records;
  public string $replication_group_id;
  public BooleanOptional $show_node_group_config;
  public string $snapshot_name;
  public string $snapshot_source;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'replication_group_id' => string,
  ?'show_node_group_config' => BooleanOptional,
  ?'snapshot_name' => string,
  ?'snapshot_source' => string,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->show_node_group_config = $show_node_group_config ?? ;
    $this->snapshot_name = $snapshot_name ?? ;
    $this->snapshot_source = $snapshot_source ?? ;
  }
}

class DescribeUpdateActionsMessage {
  public CacheClusterIdList $cache_cluster_ids;
  public string $engine;
  public string $marker;
  public IntegerOptional $max_records;
  public ReplicationGroupIdList $replication_group_ids;
  public string $service_update_name;
  public ServiceUpdateStatusList $service_update_status;
  public TimeRangeFilter $service_update_time_range;
  public BooleanOptional $show_node_level_update_status;
  public UpdateActionStatusList $update_action_status;

  public function __construct(shape(
  ?'cache_cluster_ids' => CacheClusterIdList,
  ?'engine' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'replication_group_ids' => ReplicationGroupIdList,
  ?'service_update_name' => string,
  ?'service_update_status' => ServiceUpdateStatusList,
  ?'service_update_time_range' => TimeRangeFilter,
  ?'show_node_level_update_status' => BooleanOptional,
  ?'update_action_status' => UpdateActionStatusList,
  ) $s = shape()) {
    $this->cache_cluster_ids = $cache_cluster_ids ?? ;
    $this->engine = $engine ?? ;
    $this->marker = $marker ?? ;
    $this->max_records = $max_records ?? ;
    $this->replication_group_ids = $replication_group_ids ?? ;
    $this->service_update_name = $service_update_name ?? ;
    $this->service_update_status = $service_update_status ?? "";
    $this->service_update_time_range = $service_update_time_range ?? ;
    $this->show_node_level_update_status = $show_node_level_update_status ?? ;
    $this->update_action_status = $update_action_status ?? "";
  }
}

class DisassociateGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public string $replication_group_id;
  public string $replication_group_region;

  public function __construct(shape(
  ?'global_replication_group_id' => string,
  ?'replication_group_id' => string,
  ?'replication_group_region' => string,
  ) $s = shape()) {
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->replication_group_region = $replication_group_region ?? ;
  }
}

class DisassociateGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;

  public function __construct(shape(
  ?'global_replication_group' => GlobalReplicationGroup,
  ) $s = shape()) {
    $this->global_replication_group = $global_replication_group ?? null;
  }
}

type Double = float;

class EC2SecurityGroup {
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $status;

  public function __construct(shape(
  ?'ec_2_security_group_name' => string,
  ?'ec_2_security_group_owner_id' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->ec_2_security_group_name = $ec_2_security_group_name ?? ;
    $this->ec_2_security_group_owner_id = $ec_2_security_group_owner_id ?? ;
    $this->status = $status ?? ;
  }
}

type EC2SecurityGroupList = vec<EC2SecurityGroup>;

class Endpoint {
  public string $address;
  public int $port;

  public function __construct(shape(
  ?'address' => string,
  ?'port' => int,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->port = $port ?? ;
  }
}

class EngineDefaults {
  public CacheNodeTypeSpecificParametersList $cache_node_type_specific_parameters;
  public string $cache_parameter_group_family;
  public string $marker;
  public ParametersList $parameters;

  public function __construct(shape(
  ?'cache_node_type_specific_parameters' => CacheNodeTypeSpecificParametersList,
  ?'cache_parameter_group_family' => string,
  ?'marker' => string,
  ?'parameters' => ParametersList,
  ) $s = shape()) {
    $this->cache_node_type_specific_parameters = $cache_node_type_specific_parameters ?? ;
    $this->cache_parameter_group_family = $cache_parameter_group_family ?? ;
    $this->marker = $marker ?? ;
    $this->parameters = $parameters ?? ;
  }
}

class Event {
  public TStamp $date;
  public string $message;
  public string $source_identifier;
  public SourceType $source_type;

  public function __construct(shape(
  ?'date' => TStamp,
  ?'message' => string,
  ?'source_identifier' => string,
  ?'source_type' => SourceType,
  ) $s = shape()) {
    $this->date = $date ?? ;
    $this->message = $message ?? ;
    $this->source_identifier = $source_identifier ?? ;
    $this->source_type = $source_type ?? "";
  }
}

type EventList = vec<Event>;

class EventsMessage {
  public EventList $events;
  public string $marker;

  public function __construct(shape(
  ?'events' => EventList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->events = $events ?? ;
    $this->marker = $marker ?? ;
  }
}

class FailoverGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public string $primary_region;
  public string $primary_replication_group_id;

  public function __construct(shape(
  ?'global_replication_group_id' => string,
  ?'primary_region' => string,
  ?'primary_replication_group_id' => string,
  ) $s = shape()) {
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->primary_region = $primary_region ?? ;
    $this->primary_replication_group_id = $primary_replication_group_id ?? ;
  }
}

class FailoverGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;

  public function __construct(shape(
  ?'global_replication_group' => GlobalReplicationGroup,
  ) $s = shape()) {
    $this->global_replication_group = $global_replication_group ?? null;
  }
}

class GlobalNodeGroup {
  public string $global_node_group_id;
  public string $slots;

  public function __construct(shape(
  ?'global_node_group_id' => string,
  ?'slots' => string,
  ) $s = shape()) {
    $this->global_node_group_id = $global_node_group_id ?? ;
    $this->slots = $slots ?? ;
  }
}

type GlobalNodeGroupIdList = vec<String>;

type GlobalNodeGroupList = vec<GlobalNodeGroup>;

class GlobalReplicationGroup {
  public BooleanOptional $at_rest_encryption_enabled;
  public BooleanOptional $auth_token_enabled;
  public string $cache_node_type;
  public BooleanOptional $cluster_enabled;
  public string $engine;
  public string $engine_version;
  public GlobalNodeGroupList $global_node_groups;
  public string $global_replication_group_description;
  public string $global_replication_group_id;
  public GlobalReplicationGroupMemberList $members;
  public string $status;
  public BooleanOptional $transit_encryption_enabled;

  public function __construct(shape(
  ?'at_rest_encryption_enabled' => BooleanOptional,
  ?'auth_token_enabled' => BooleanOptional,
  ?'cache_node_type' => string,
  ?'cluster_enabled' => BooleanOptional,
  ?'engine' => string,
  ?'engine_version' => string,
  ?'global_node_groups' => GlobalNodeGroupList,
  ?'global_replication_group_description' => string,
  ?'global_replication_group_id' => string,
  ?'members' => GlobalReplicationGroupMemberList,
  ?'status' => string,
  ?'transit_encryption_enabled' => BooleanOptional,
  ) $s = shape()) {
    $this->at_rest_encryption_enabled = $at_rest_encryption_enabled ?? ;
    $this->auth_token_enabled = $auth_token_enabled ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->cluster_enabled = $cluster_enabled ?? ;
    $this->engine = $engine ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->global_node_groups = $global_node_groups ?? ;
    $this->global_replication_group_description = $global_replication_group_description ?? ;
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->members = $members ?? ;
    $this->status = $status ?? ;
    $this->transit_encryption_enabled = $transit_encryption_enabled ?? ;
  }
}

class GlobalReplicationGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GlobalReplicationGroupInfo {
  public string $global_replication_group_id;
  public string $global_replication_group_member_role;

  public function __construct(shape(
  ?'global_replication_group_id' => string,
  ?'global_replication_group_member_role' => string,
  ) $s = shape()) {
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->global_replication_group_member_role = $global_replication_group_member_role ?? ;
  }
}

type GlobalReplicationGroupList = vec<GlobalReplicationGroup>;

class GlobalReplicationGroupMember {
  public AutomaticFailoverStatus $automatic_failover;
  public string $replication_group_id;
  public string $replication_group_region;
  public string $role;
  public string $status;

  public function __construct(shape(
  ?'automatic_failover' => AutomaticFailoverStatus,
  ?'replication_group_id' => string,
  ?'replication_group_region' => string,
  ?'role' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->automatic_failover = $automatic_failover ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->replication_group_region = $replication_group_region ?? ;
    $this->role = $role ?? ;
    $this->status = $status ?? ;
  }
}

type GlobalReplicationGroupMemberList = vec<GlobalReplicationGroupMember>;

class GlobalReplicationGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IncreaseNodeGroupsInGlobalReplicationGroupMessage {
  public boolean $apply_immediately;
  public string $global_replication_group_id;
  public int $node_group_count;
  public RegionalConfigurationList $regional_configurations;

  public function __construct(shape(
  ?'apply_immediately' => boolean,
  ?'global_replication_group_id' => string,
  ?'node_group_count' => int,
  ?'regional_configurations' => RegionalConfigurationList,
  ) $s = shape()) {
    $this->apply_immediately = $apply_immediately ?? ;
    $this->global_replication_group_id = $global_replication_group_id ?? ;
    $this->node_group_count = $node_group_count ?? ;
    $this->regional_configurations = $regional_configurations ?? ;
  }
}

class IncreaseNodeGroupsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;

  public function __construct(shape(
  ?'global_replication_group' => GlobalReplicationGroup,
  ) $s = shape()) {
    $this->global_replication_group = $global_replication_group ?? null;
  }
}

class IncreaseReplicaCountMessage {
  public boolean $apply_immediately;
  public IntegerOptional $new_replica_count;
  public ReplicaConfigurationList $replica_configuration;
  public string $replication_group_id;

  public function __construct(shape(
  ?'apply_immediately' => boolean,
  ?'new_replica_count' => IntegerOptional,
  ?'replica_configuration' => ReplicaConfigurationList,
  ?'replication_group_id' => string,
  ) $s = shape()) {
    $this->apply_immediately = $apply_immediately ?? ;
    $this->new_replica_count = $new_replica_count ?? ;
    $this->replica_configuration = $replica_configuration ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
  }
}

class IncreaseReplicaCountResult {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

class InsufficientCacheClusterCapacityFault {

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

class InvalidCacheClusterStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidCacheParameterGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidCacheSecurityGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidGlobalReplicationGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidKMSKeyFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameterCombinationException {
  public AwsQueryErrorMessage $message;

  public function __construct(shape(
  ?'message' => AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterValueException {
  public AwsQueryErrorMessage $message;

  public function __construct(shape(
  ?'message' => AwsQueryErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidReplicationGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSnapshotStateFault {

  public function __construct(shape(
  ) $s = shape()) {
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

type KeyList = vec<String>;

class ListAllowedNodeTypeModificationsMessage {
  public string $cache_cluster_id;
  public string $replication_group_id;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'replication_group_id' => string,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
  }
}

class ListTagsForResourceMessage {
  public string $resource_name;

  public function __construct(shape(
  ?'resource_name' => string,
  ) $s = shape()) {
    $this->resource_name = $resource_name ?? ;
  }
}

class ModifyCacheClusterMessage {
  public AZMode $az_mode;
  public boolean $apply_immediately;
  public string $auth_token;
  public AuthTokenUpdateStrategyType $auth_token_update_strategy;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $cache_cluster_id;
  public CacheNodeIdsList $cache_node_ids_to_remove;
  public string $cache_node_type;
  public string $cache_parameter_group_name;
  public CacheSecurityGroupNameList $cache_security_group_names;
  public string $engine_version;
  public PreferredAvailabilityZoneList $new_availability_zones;
  public string $notification_topic_arn;
  public string $notification_topic_status;
  public IntegerOptional $num_cache_nodes;
  public string $preferred_maintenance_window;
  public SecurityGroupIdsList $security_group_ids;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_window;

  public function __construct(shape(
  ?'az_mode' => AZMode,
  ?'apply_immediately' => boolean,
  ?'auth_token' => string,
  ?'auth_token_update_strategy' => AuthTokenUpdateStrategyType,
  ?'auto_minor_version_upgrade' => BooleanOptional,
  ?'cache_cluster_id' => string,
  ?'cache_node_ids_to_remove' => CacheNodeIdsList,
  ?'cache_node_type' => string,
  ?'cache_parameter_group_name' => string,
  ?'cache_security_group_names' => CacheSecurityGroupNameList,
  ?'engine_version' => string,
  ?'new_availability_zones' => PreferredAvailabilityZoneList,
  ?'notification_topic_arn' => string,
  ?'notification_topic_status' => string,
  ?'num_cache_nodes' => IntegerOptional,
  ?'preferred_maintenance_window' => string,
  ?'security_group_ids' => SecurityGroupIdsList,
  ?'snapshot_retention_limit' => IntegerOptional,
  ?'snapshot_window' => string,
  ) $s = shape()) {
    $this->az_mode = $az_mode ?? "";
    $this->apply_immediately = $apply_immediately ?? ;
    $this->auth_token = $auth_token ?? ;
    $this->auth_token_update_strategy = $auth_token_update_strategy ?? ;
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_node_ids_to_remove = $cache_node_ids_to_remove ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->cache_security_group_names = $cache_security_group_names ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->new_availability_zones = $new_availability_zones ?? ;
    $this->notification_topic_arn = $notification_topic_arn ?? ;
    $this->notification_topic_status = $notification_topic_status ?? ;
    $this->num_cache_nodes = $num_cache_nodes ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->snapshot_retention_limit = $snapshot_retention_limit ?? ;
    $this->snapshot_window = $snapshot_window ?? ;
  }
}

class ModifyCacheClusterResult {
  public CacheCluster $cache_cluster;

  public function __construct(shape(
  ?'cache_cluster' => CacheCluster,
  ) $s = shape()) {
    $this->cache_cluster = $cache_cluster ?? null;
  }
}

class ModifyCacheParameterGroupMessage {
  public string $cache_parameter_group_name;
  public ParameterNameValueList $parameter_name_values;

  public function __construct(shape(
  ?'cache_parameter_group_name' => string,
  ?'parameter_name_values' => ParameterNameValueList,
  ) $s = shape()) {
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->parameter_name_values = $parameter_name_values ?? ;
  }
}

class ModifyCacheSubnetGroupMessage {
  public string $cache_subnet_group_description;
  public string $cache_subnet_group_name;
  public SubnetIdentifierList $subnet_ids;

  public function __construct(shape(
  ?'cache_subnet_group_description' => string,
  ?'cache_subnet_group_name' => string,
  ?'subnet_ids' => SubnetIdentifierList,
  ) $s = shape()) {
    $this->cache_subnet_group_description = $cache_subnet_group_description ?? ;
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
  }
}

class ModifyCacheSubnetGroupResult {
  public CacheSubnetGroup $cache_subnet_group;

  public function __construct(shape(
  ?'cache_subnet_group' => CacheSubnetGroup,
  ) $s = shape()) {
    $this->cache_subnet_group = $cache_subnet_group ?? null;
  }
}

class ModifyGlobalReplicationGroupMessage {
  public boolean $apply_immediately;
  public BooleanOptional $automatic_failover_enabled;
  public string $cache_node_type;
  public string $engine_version;
  public string $global_replication_group_description;
  public string $global_replication_group_id;

  public function __construct(shape(
  ?'apply_immediately' => boolean,
  ?'automatic_failover_enabled' => BooleanOptional,
  ?'cache_node_type' => string,
  ?'engine_version' => string,
  ?'global_replication_group_description' => string,
  ?'global_replication_group_id' => string,
  ) $s = shape()) {
    $this->apply_immediately = $apply_immediately ?? ;
    $this->automatic_failover_enabled = $automatic_failover_enabled ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->global_replication_group_description = $global_replication_group_description ?? ;
    $this->global_replication_group_id = $global_replication_group_id ?? ;
  }
}

class ModifyGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;

  public function __construct(shape(
  ?'global_replication_group' => GlobalReplicationGroup,
  ) $s = shape()) {
    $this->global_replication_group = $global_replication_group ?? null;
  }
}

class ModifyReplicationGroupMessage {
  public boolean $apply_immediately;
  public string $auth_token;
  public AuthTokenUpdateStrategyType $auth_token_update_strategy;
  public BooleanOptional $auto_minor_version_upgrade;
  public BooleanOptional $automatic_failover_enabled;
  public string $cache_node_type;
  public string $cache_parameter_group_name;
  public CacheSecurityGroupNameList $cache_security_group_names;
  public string $engine_version;
  public string $node_group_id;
  public string $notification_topic_arn;
  public string $notification_topic_status;
  public string $preferred_maintenance_window;
  public string $primary_cluster_id;
  public string $replication_group_description;
  public string $replication_group_id;
  public SecurityGroupIdsList $security_group_ids;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_window;
  public string $snapshotting_cluster_id;

  public function __construct(shape(
  ?'apply_immediately' => boolean,
  ?'auth_token' => string,
  ?'auth_token_update_strategy' => AuthTokenUpdateStrategyType,
  ?'auto_minor_version_upgrade' => BooleanOptional,
  ?'automatic_failover_enabled' => BooleanOptional,
  ?'cache_node_type' => string,
  ?'cache_parameter_group_name' => string,
  ?'cache_security_group_names' => CacheSecurityGroupNameList,
  ?'engine_version' => string,
  ?'node_group_id' => string,
  ?'notification_topic_arn' => string,
  ?'notification_topic_status' => string,
  ?'preferred_maintenance_window' => string,
  ?'primary_cluster_id' => string,
  ?'replication_group_description' => string,
  ?'replication_group_id' => string,
  ?'security_group_ids' => SecurityGroupIdsList,
  ?'snapshot_retention_limit' => IntegerOptional,
  ?'snapshot_window' => string,
  ?'snapshotting_cluster_id' => string,
  ) $s = shape()) {
    $this->apply_immediately = $apply_immediately ?? ;
    $this->auth_token = $auth_token ?? ;
    $this->auth_token_update_strategy = $auth_token_update_strategy ?? ;
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->automatic_failover_enabled = $automatic_failover_enabled ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->cache_security_group_names = $cache_security_group_names ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->node_group_id = $node_group_id ?? ;
    $this->notification_topic_arn = $notification_topic_arn ?? ;
    $this->notification_topic_status = $notification_topic_status ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->primary_cluster_id = $primary_cluster_id ?? ;
    $this->replication_group_description = $replication_group_description ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->snapshot_retention_limit = $snapshot_retention_limit ?? ;
    $this->snapshot_window = $snapshot_window ?? ;
    $this->snapshotting_cluster_id = $snapshotting_cluster_id ?? ;
  }
}

class ModifyReplicationGroupResult {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

class ModifyReplicationGroupShardConfigurationMessage {
  public boolean $apply_immediately;
  public int $node_group_count;
  public NodeGroupsToRemoveList $node_groups_to_remove;
  public NodeGroupsToRetainList $node_groups_to_retain;
  public string $replication_group_id;
  public ReshardingConfigurationList $resharding_configuration;

  public function __construct(shape(
  ?'apply_immediately' => boolean,
  ?'node_group_count' => int,
  ?'node_groups_to_remove' => NodeGroupsToRemoveList,
  ?'node_groups_to_retain' => NodeGroupsToRetainList,
  ?'replication_group_id' => string,
  ?'resharding_configuration' => ReshardingConfigurationList,
  ) $s = shape()) {
    $this->apply_immediately = $apply_immediately ?? ;
    $this->node_group_count = $node_group_count ?? ;
    $this->node_groups_to_remove = $node_groups_to_remove ?? ;
    $this->node_groups_to_retain = $node_groups_to_retain ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->resharding_configuration = $resharding_configuration ?? null;
  }
}

class ModifyReplicationGroupShardConfigurationResult {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

class NoOperationFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NodeGroup {
  public string $node_group_id;
  public NodeGroupMemberList $node_group_members;
  public Endpoint $primary_endpoint;
  public Endpoint $reader_endpoint;
  public string $slots;
  public string $status;

  public function __construct(shape(
  ?'node_group_id' => string,
  ?'node_group_members' => NodeGroupMemberList,
  ?'primary_endpoint' => Endpoint,
  ?'reader_endpoint' => Endpoint,
  ?'slots' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->node_group_id = $node_group_id ?? ;
    $this->node_group_members = $node_group_members ?? ;
    $this->primary_endpoint = $primary_endpoint ?? ;
    $this->reader_endpoint = $reader_endpoint ?? ;
    $this->slots = $slots ?? ;
    $this->status = $status ?? ;
  }
}

class NodeGroupConfiguration {
  public AllowedNodeGroupId $node_group_id;
  public string $primary_availability_zone;
  public AvailabilityZonesList $replica_availability_zones;
  public IntegerOptional $replica_count;
  public string $slots;

  public function __construct(shape(
  ?'node_group_id' => AllowedNodeGroupId,
  ?'primary_availability_zone' => string,
  ?'replica_availability_zones' => AvailabilityZonesList,
  ?'replica_count' => IntegerOptional,
  ?'slots' => string,
  ) $s = shape()) {
    $this->node_group_id = $node_group_id ?? ;
    $this->primary_availability_zone = $primary_availability_zone ?? ;
    $this->replica_availability_zones = $replica_availability_zones ?? ;
    $this->replica_count = $replica_count ?? ;
    $this->slots = $slots ?? ;
  }
}

type NodeGroupConfigurationList = vec<NodeGroupConfiguration>;

type NodeGroupList = vec<NodeGroup>;

class NodeGroupMember {
  public string $cache_cluster_id;
  public string $cache_node_id;
  public string $current_role;
  public string $preferred_availability_zone;
  public Endpoint $read_endpoint;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'cache_node_id' => string,
  ?'current_role' => string,
  ?'preferred_availability_zone' => string,
  ?'read_endpoint' => Endpoint,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_node_id = $cache_node_id ?? ;
    $this->current_role = $current_role ?? ;
    $this->preferred_availability_zone = $preferred_availability_zone ?? ;
    $this->read_endpoint = $read_endpoint ?? ;
  }
}

type NodeGroupMemberList = vec<NodeGroupMember>;

class NodeGroupMemberUpdateStatus {
  public string $cache_cluster_id;
  public string $cache_node_id;
  public TStamp $node_deletion_date;
  public TStamp $node_update_end_date;
  public NodeUpdateInitiatedBy $node_update_initiated_by;
  public TStamp $node_update_initiated_date;
  public TStamp $node_update_start_date;
  public NodeUpdateStatus $node_update_status;
  public TStamp $node_update_status_modified_date;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'cache_node_id' => string,
  ?'node_deletion_date' => TStamp,
  ?'node_update_end_date' => TStamp,
  ?'node_update_initiated_by' => NodeUpdateInitiatedBy,
  ?'node_update_initiated_date' => TStamp,
  ?'node_update_start_date' => TStamp,
  ?'node_update_status' => NodeUpdateStatus,
  ?'node_update_status_modified_date' => TStamp,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_node_id = $cache_node_id ?? ;
    $this->node_deletion_date = $node_deletion_date ?? ;
    $this->node_update_end_date = $node_update_end_date ?? ;
    $this->node_update_initiated_by = $node_update_initiated_by ?? "";
    $this->node_update_initiated_date = $node_update_initiated_date ?? ;
    $this->node_update_start_date = $node_update_start_date ?? ;
    $this->node_update_status = $node_update_status ?? "";
    $this->node_update_status_modified_date = $node_update_status_modified_date ?? ;
  }
}

type NodeGroupMemberUpdateStatusList = vec<NodeGroupMemberUpdateStatus>;

class NodeGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NodeGroupUpdateStatus {
  public string $node_group_id;
  public NodeGroupMemberUpdateStatusList $node_group_member_update_status;

  public function __construct(shape(
  ?'node_group_id' => string,
  ?'node_group_member_update_status' => NodeGroupMemberUpdateStatusList,
  ) $s = shape()) {
    $this->node_group_id = $node_group_id ?? ;
    $this->node_group_member_update_status = $node_group_member_update_status ?? null;
  }
}

type NodeGroupUpdateStatusList = vec<NodeGroupUpdateStatus>;

class NodeGroupsPerReplicationGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type NodeGroupsToRemoveList = vec<AllowedNodeGroupId>;

type NodeGroupsToRetainList = vec<AllowedNodeGroupId>;

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

class NodeSnapshot {
  public string $cache_cluster_id;
  public TStamp $cache_node_create_time;
  public string $cache_node_id;
  public string $cache_size;
  public NodeGroupConfiguration $node_group_configuration;
  public string $node_group_id;
  public TStamp $snapshot_create_time;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'cache_node_create_time' => TStamp,
  ?'cache_node_id' => string,
  ?'cache_size' => string,
  ?'node_group_configuration' => NodeGroupConfiguration,
  ?'node_group_id' => string,
  ?'snapshot_create_time' => TStamp,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_node_create_time = $cache_node_create_time ?? ;
    $this->cache_node_id = $cache_node_id ?? ;
    $this->cache_size = $cache_size ?? ;
    $this->node_group_configuration = $node_group_configuration ?? null;
    $this->node_group_id = $node_group_id ?? ;
    $this->snapshot_create_time = $snapshot_create_time ?? ;
  }
}

type NodeSnapshotList = vec<NodeSnapshot>;

type NodeTypeList = vec<String>;

type NodeUpdateInitiatedBy = string;

type NodeUpdateStatus = string;

class NotificationConfiguration {
  public string $topic_arn;
  public string $topic_status;

  public function __construct(shape(
  ?'topic_arn' => string,
  ?'topic_status' => string,
  ) $s = shape()) {
    $this->topic_arn = $topic_arn ?? ;
    $this->topic_status = $topic_status ?? ;
  }
}

class Parameter {
  public string $allowed_values;
  public ChangeType $change_type;
  public string $data_type;
  public string $description;
  public boolean $is_modifiable;
  public string $minimum_engine_version;
  public string $parameter_name;
  public string $parameter_value;
  public string $source;

  public function __construct(shape(
  ?'allowed_values' => string,
  ?'change_type' => ChangeType,
  ?'data_type' => string,
  ?'description' => string,
  ?'is_modifiable' => boolean,
  ?'minimum_engine_version' => string,
  ?'parameter_name' => string,
  ?'parameter_value' => string,
  ?'source' => string,
  ) $s = shape()) {
    $this->allowed_values = $allowed_values ?? ;
    $this->change_type = $change_type ?? "";
    $this->data_type = $data_type ?? ;
    $this->description = $description ?? ;
    $this->is_modifiable = $is_modifiable ?? ;
    $this->minimum_engine_version = $minimum_engine_version ?? ;
    $this->parameter_name = $parameter_name ?? ;
    $this->parameter_value = $parameter_value ?? ;
    $this->source = $source ?? ;
  }
}

class ParameterNameValue {
  public string $parameter_name;
  public string $parameter_value;

  public function __construct(shape(
  ?'parameter_name' => string,
  ?'parameter_value' => string,
  ) $s = shape()) {
    $this->parameter_name = $parameter_name ?? ;
    $this->parameter_value = $parameter_value ?? ;
  }
}

type ParameterNameValueList = vec<ParameterNameValue>;

type ParametersList = vec<Parameter>;

type PendingAutomaticFailoverStatus = string;

class PendingModifiedValues {
  public AuthTokenUpdateStatus $auth_token_status;
  public CacheNodeIdsList $cache_node_ids_to_remove;
  public string $cache_node_type;
  public string $engine_version;
  public IntegerOptional $num_cache_nodes;

  public function __construct(shape(
  ?'auth_token_status' => AuthTokenUpdateStatus,
  ?'cache_node_ids_to_remove' => CacheNodeIdsList,
  ?'cache_node_type' => string,
  ?'engine_version' => string,
  ?'num_cache_nodes' => IntegerOptional,
  ) $s = shape()) {
    $this->auth_token_status = $auth_token_status ?? ;
    $this->cache_node_ids_to_remove = $cache_node_ids_to_remove ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->num_cache_nodes = $num_cache_nodes ?? ;
  }
}

type PreferredAvailabilityZoneList = vec<String>;

class ProcessedUpdateAction {
  public string $cache_cluster_id;
  public string $replication_group_id;
  public string $service_update_name;
  public UpdateActionStatus $update_action_status;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'replication_group_id' => string,
  ?'service_update_name' => string,
  ?'update_action_status' => UpdateActionStatus,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->service_update_name = $service_update_name ?? ;
    $this->update_action_status = $update_action_status ?? "";
  }
}

type ProcessedUpdateActionList = vec<ProcessedUpdateAction>;

class PurchaseReservedCacheNodesOfferingMessage {
  public IntegerOptional $cache_node_count;
  public string $reserved_cache_node_id;
  public string $reserved_cache_nodes_offering_id;

  public function __construct(shape(
  ?'cache_node_count' => IntegerOptional,
  ?'reserved_cache_node_id' => string,
  ?'reserved_cache_nodes_offering_id' => string,
  ) $s = shape()) {
    $this->cache_node_count = $cache_node_count ?? ;
    $this->reserved_cache_node_id = $reserved_cache_node_id ?? ;
    $this->reserved_cache_nodes_offering_id = $reserved_cache_nodes_offering_id ?? ;
  }
}

class PurchaseReservedCacheNodesOfferingResult {
  public ReservedCacheNode $reserved_cache_node;

  public function __construct(shape(
  ?'reserved_cache_node' => ReservedCacheNode,
  ) $s = shape()) {
    $this->reserved_cache_node = $reserved_cache_node ?? null;
  }
}

class RebalanceSlotsInGlobalReplicationGroupMessage {
  public boolean $apply_immediately;
  public string $global_replication_group_id;

  public function __construct(shape(
  ?'apply_immediately' => boolean,
  ?'global_replication_group_id' => string,
  ) $s = shape()) {
    $this->apply_immediately = $apply_immediately ?? ;
    $this->global_replication_group_id = $global_replication_group_id ?? ;
  }
}

class RebalanceSlotsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;

  public function __construct(shape(
  ?'global_replication_group' => GlobalReplicationGroup,
  ) $s = shape()) {
    $this->global_replication_group = $global_replication_group ?? null;
  }
}

class RebootCacheClusterMessage {
  public string $cache_cluster_id;
  public CacheNodeIdsList $cache_node_ids_to_reboot;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'cache_node_ids_to_reboot' => CacheNodeIdsList,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_node_ids_to_reboot = $cache_node_ids_to_reboot ?? ;
  }
}

class RebootCacheClusterResult {
  public CacheCluster $cache_cluster;

  public function __construct(shape(
  ?'cache_cluster' => CacheCluster,
  ) $s = shape()) {
    $this->cache_cluster = $cache_cluster ?? null;
  }
}

class RecurringCharge {
  public Double $recurring_charge_amount;
  public string $recurring_charge_frequency;

  public function __construct(shape(
  ?'recurring_charge_amount' => Double,
  ?'recurring_charge_frequency' => string,
  ) $s = shape()) {
    $this->recurring_charge_amount = $recurring_charge_amount ?? ;
    $this->recurring_charge_frequency = $recurring_charge_frequency ?? ;
  }
}

type RecurringChargeList = vec<RecurringCharge>;

class RegionalConfiguration {
  public string $replication_group_id;
  public string $replication_group_region;
  public ReshardingConfigurationList $resharding_configuration;

  public function __construct(shape(
  ?'replication_group_id' => string,
  ?'replication_group_region' => string,
  ?'resharding_configuration' => ReshardingConfigurationList,
  ) $s = shape()) {
    $this->replication_group_id = $replication_group_id ?? ;
    $this->replication_group_region = $replication_group_region ?? ;
    $this->resharding_configuration = $resharding_configuration ?? null;
  }
}

type RegionalConfigurationList = vec<RegionalConfiguration>;

type RemoveReplicasList = vec<String>;

class RemoveTagsFromResourceMessage {
  public string $resource_name;
  public KeyList $tag_keys;

  public function __construct(shape(
  ?'resource_name' => string,
  ?'tag_keys' => KeyList,
  ) $s = shape()) {
    $this->resource_name = $resource_name ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

type ReplicaConfigurationList = vec<ConfigureShard>;

class ReplicationGroup {
  public BooleanOptional $at_rest_encryption_enabled;
  public BooleanOptional $auth_token_enabled;
  public TStamp $auth_token_last_modified_date;
  public AutomaticFailoverStatus $automatic_failover;
  public string $cache_node_type;
  public BooleanOptional $cluster_enabled;
  public Endpoint $configuration_endpoint;
  public string $description;
  public GlobalReplicationGroupInfo $global_replication_group_info;
  public string $kms_key_id;
  public ClusterIdList $member_clusters;
  public NodeGroupList $node_groups;
  public ReplicationGroupPendingModifiedValues $pending_modified_values;
  public string $replication_group_id;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_window;
  public string $snapshotting_cluster_id;
  public string $status;
  public BooleanOptional $transit_encryption_enabled;

  public function __construct(shape(
  ?'at_rest_encryption_enabled' => BooleanOptional,
  ?'auth_token_enabled' => BooleanOptional,
  ?'auth_token_last_modified_date' => TStamp,
  ?'automatic_failover' => AutomaticFailoverStatus,
  ?'cache_node_type' => string,
  ?'cluster_enabled' => BooleanOptional,
  ?'configuration_endpoint' => Endpoint,
  ?'description' => string,
  ?'global_replication_group_info' => GlobalReplicationGroupInfo,
  ?'kms_key_id' => string,
  ?'member_clusters' => ClusterIdList,
  ?'node_groups' => NodeGroupList,
  ?'pending_modified_values' => ReplicationGroupPendingModifiedValues,
  ?'replication_group_id' => string,
  ?'snapshot_retention_limit' => IntegerOptional,
  ?'snapshot_window' => string,
  ?'snapshotting_cluster_id' => string,
  ?'status' => string,
  ?'transit_encryption_enabled' => BooleanOptional,
  ) $s = shape()) {
    $this->at_rest_encryption_enabled = $at_rest_encryption_enabled ?? ;
    $this->auth_token_enabled = $auth_token_enabled ?? ;
    $this->auth_token_last_modified_date = $auth_token_last_modified_date ?? ;
    $this->automatic_failover = $automatic_failover ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->cluster_enabled = $cluster_enabled ?? ;
    $this->configuration_endpoint = $configuration_endpoint ?? ;
    $this->description = $description ?? ;
    $this->global_replication_group_info = $global_replication_group_info ?? null;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->member_clusters = $member_clusters ?? ;
    $this->node_groups = $node_groups ?? ;
    $this->pending_modified_values = $pending_modified_values ?? null;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->snapshot_retention_limit = $snapshot_retention_limit ?? ;
    $this->snapshot_window = $snapshot_window ?? ;
    $this->snapshotting_cluster_id = $snapshotting_cluster_id ?? ;
    $this->status = $status ?? ;
    $this->transit_encryption_enabled = $transit_encryption_enabled ?? ;
  }
}

class ReplicationGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReplicationGroupAlreadyUnderMigrationFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReplicationGroupIdList = vec<String>;

type ReplicationGroupList = vec<ReplicationGroup>;

class ReplicationGroupMessage {
  public string $marker;
  public ReplicationGroupList $replication_groups;

  public function __construct(shape(
  ?'marker' => string,
  ?'replication_groups' => ReplicationGroupList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->replication_groups = $replication_groups ?? ;
  }
}

class ReplicationGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReplicationGroupNotUnderMigrationFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReplicationGroupPendingModifiedValues {
  public AuthTokenUpdateStatus $auth_token_status;
  public PendingAutomaticFailoverStatus $automatic_failover_status;
  public string $primary_cluster_id;
  public ReshardingStatus $resharding;

  public function __construct(shape(
  ?'auth_token_status' => AuthTokenUpdateStatus,
  ?'automatic_failover_status' => PendingAutomaticFailoverStatus,
  ?'primary_cluster_id' => string,
  ?'resharding' => ReshardingStatus,
  ) $s = shape()) {
    $this->auth_token_status = $auth_token_status ?? ;
    $this->automatic_failover_status = $automatic_failover_status ?? "";
    $this->primary_cluster_id = $primary_cluster_id ?? ;
    $this->resharding = $resharding ?? ;
  }
}

class ReservedCacheNode {
  public int $cache_node_count;
  public string $cache_node_type;
  public int $duration;
  public Double $fixed_price;
  public string $offering_type;
  public string $product_description;
  public RecurringChargeList $recurring_charges;
  public string $reservation_arn;
  public string $reserved_cache_node_id;
  public string $reserved_cache_nodes_offering_id;
  public TStamp $start_time;
  public string $state;
  public Double $usage_price;

  public function __construct(shape(
  ?'cache_node_count' => int,
  ?'cache_node_type' => string,
  ?'duration' => int,
  ?'fixed_price' => Double,
  ?'offering_type' => string,
  ?'product_description' => string,
  ?'recurring_charges' => RecurringChargeList,
  ?'reservation_arn' => string,
  ?'reserved_cache_node_id' => string,
  ?'reserved_cache_nodes_offering_id' => string,
  ?'start_time' => TStamp,
  ?'state' => string,
  ?'usage_price' => Double,
  ) $s = shape()) {
    $this->cache_node_count = $cache_node_count ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->duration = $duration ?? ;
    $this->fixed_price = $fixed_price ?? ;
    $this->offering_type = $offering_type ?? ;
    $this->product_description = $product_description ?? ;
    $this->recurring_charges = $recurring_charges ?? ;
    $this->reservation_arn = $reservation_arn ?? ;
    $this->reserved_cache_node_id = $reserved_cache_node_id ?? ;
    $this->reserved_cache_nodes_offering_id = $reserved_cache_nodes_offering_id ?? ;
    $this->start_time = $start_time ?? ;
    $this->state = $state ?? ;
    $this->usage_price = $usage_price ?? ;
  }
}

class ReservedCacheNodeAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReservedCacheNodeList = vec<ReservedCacheNode>;

class ReservedCacheNodeMessage {
  public string $marker;
  public ReservedCacheNodeList $reserved_cache_nodes;

  public function __construct(shape(
  ?'marker' => string,
  ?'reserved_cache_nodes' => ReservedCacheNodeList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->reserved_cache_nodes = $reserved_cache_nodes ?? ;
  }
}

class ReservedCacheNodeNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedCacheNodeQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedCacheNodesOffering {
  public string $cache_node_type;
  public int $duration;
  public Double $fixed_price;
  public string $offering_type;
  public string $product_description;
  public RecurringChargeList $recurring_charges;
  public string $reserved_cache_nodes_offering_id;
  public Double $usage_price;

  public function __construct(shape(
  ?'cache_node_type' => string,
  ?'duration' => int,
  ?'fixed_price' => Double,
  ?'offering_type' => string,
  ?'product_description' => string,
  ?'recurring_charges' => RecurringChargeList,
  ?'reserved_cache_nodes_offering_id' => string,
  ?'usage_price' => Double,
  ) $s = shape()) {
    $this->cache_node_type = $cache_node_type ?? ;
    $this->duration = $duration ?? ;
    $this->fixed_price = $fixed_price ?? ;
    $this->offering_type = $offering_type ?? ;
    $this->product_description = $product_description ?? ;
    $this->recurring_charges = $recurring_charges ?? ;
    $this->reserved_cache_nodes_offering_id = $reserved_cache_nodes_offering_id ?? ;
    $this->usage_price = $usage_price ?? ;
  }
}

type ReservedCacheNodesOfferingList = vec<ReservedCacheNodesOffering>;

class ReservedCacheNodesOfferingMessage {
  public string $marker;
  public ReservedCacheNodesOfferingList $reserved_cache_nodes_offerings;

  public function __construct(shape(
  ?'marker' => string,
  ?'reserved_cache_nodes_offerings' => ReservedCacheNodesOfferingList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->reserved_cache_nodes_offerings = $reserved_cache_nodes_offerings ?? ;
  }
}

class ReservedCacheNodesOfferingNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResetCacheParameterGroupMessage {
  public string $cache_parameter_group_name;
  public ParameterNameValueList $parameter_name_values;
  public boolean $reset_all_parameters;

  public function __construct(shape(
  ?'cache_parameter_group_name' => string,
  ?'parameter_name_values' => ParameterNameValueList,
  ?'reset_all_parameters' => boolean,
  ) $s = shape()) {
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->parameter_name_values = $parameter_name_values ?? ;
    $this->reset_all_parameters = $reset_all_parameters ?? ;
  }
}

class ReshardingConfiguration {
  public AllowedNodeGroupId $node_group_id;
  public AvailabilityZonesList $preferred_availability_zones;

  public function __construct(shape(
  ?'node_group_id' => AllowedNodeGroupId,
  ?'preferred_availability_zones' => AvailabilityZonesList,
  ) $s = shape()) {
    $this->node_group_id = $node_group_id ?? ;
    $this->preferred_availability_zones = $preferred_availability_zones ?? ;
  }
}

type ReshardingConfigurationList = vec<ReshardingConfiguration>;

class ReshardingStatus {
  public SlotMigration $slot_migration;

  public function __construct(shape(
  ?'slot_migration' => SlotMigration,
  ) $s = shape()) {
    $this->slot_migration = $slot_migration ?? null;
  }
}

class RevokeCacheSecurityGroupIngressMessage {
  public string $cache_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;

  public function __construct(shape(
  ?'cache_security_group_name' => string,
  ?'ec_2_security_group_name' => string,
  ?'ec_2_security_group_owner_id' => string,
  ) $s = shape()) {
    $this->cache_security_group_name = $cache_security_group_name ?? ;
    $this->ec_2_security_group_name = $ec_2_security_group_name ?? ;
    $this->ec_2_security_group_owner_id = $ec_2_security_group_owner_id ?? ;
  }
}

class RevokeCacheSecurityGroupIngressResult {
  public CacheSecurityGroup $cache_security_group;

  public function __construct(shape(
  ?'cache_security_group' => CacheSecurityGroup,
  ) $s = shape()) {
    $this->cache_security_group = $cache_security_group ?? null;
  }
}

type SecurityGroupIdsList = vec<String>;

class SecurityGroupMembership {
  public string $security_group_id;
  public string $status;

  public function __construct(shape(
  ?'security_group_id' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->security_group_id = $security_group_id ?? ;
    $this->status = $status ?? ;
  }
}

type SecurityGroupMembershipList = vec<SecurityGroupMembership>;

class ServiceLinkedRoleNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ServiceUpdate {
  public BooleanOptional $auto_update_after_recommended_apply_by_date;
  public string $engine;
  public string $engine_version;
  public string $estimated_update_time;
  public string $service_update_description;
  public TStamp $service_update_end_date;
  public string $service_update_name;
  public TStamp $service_update_recommended_apply_by_date;
  public TStamp $service_update_release_date;
  public ServiceUpdateSeverity $service_update_severity;
  public ServiceUpdateStatus $service_update_status;
  public ServiceUpdateType $service_update_type;

  public function __construct(shape(
  ?'auto_update_after_recommended_apply_by_date' => BooleanOptional,
  ?'engine' => string,
  ?'engine_version' => string,
  ?'estimated_update_time' => string,
  ?'service_update_description' => string,
  ?'service_update_end_date' => TStamp,
  ?'service_update_name' => string,
  ?'service_update_recommended_apply_by_date' => TStamp,
  ?'service_update_release_date' => TStamp,
  ?'service_update_severity' => ServiceUpdateSeverity,
  ?'service_update_status' => ServiceUpdateStatus,
  ?'service_update_type' => ServiceUpdateType,
  ) $s = shape()) {
    $this->auto_update_after_recommended_apply_by_date = $auto_update_after_recommended_apply_by_date ?? ;
    $this->engine = $engine ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->estimated_update_time = $estimated_update_time ?? ;
    $this->service_update_description = $service_update_description ?? ;
    $this->service_update_end_date = $service_update_end_date ?? ;
    $this->service_update_name = $service_update_name ?? ;
    $this->service_update_recommended_apply_by_date = $service_update_recommended_apply_by_date ?? ;
    $this->service_update_release_date = $service_update_release_date ?? ;
    $this->service_update_severity = $service_update_severity ?? "";
    $this->service_update_status = $service_update_status ?? "";
    $this->service_update_type = $service_update_type ?? "";
  }
}

type ServiceUpdateList = vec<ServiceUpdate>;

class ServiceUpdateNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ServiceUpdateSeverity = string;

type ServiceUpdateStatus = string;

type ServiceUpdateStatusList = vec<ServiceUpdateStatus>;

type ServiceUpdateType = string;

class ServiceUpdatesMessage {
  public string $marker;
  public ServiceUpdateList $service_updates;

  public function __construct(shape(
  ?'marker' => string,
  ?'service_updates' => ServiceUpdateList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->service_updates = $service_updates ?? ;
  }
}

type SlaMet = string;

class SlotMigration {
  public Double $progress_percentage;

  public function __construct(shape(
  ?'progress_percentage' => Double,
  ) $s = shape()) {
    $this->progress_percentage = $progress_percentage ?? ;
  }
}

class Snapshot {
  public boolean $auto_minor_version_upgrade;
  public AutomaticFailoverStatus $automatic_failover;
  public TStamp $cache_cluster_create_time;
  public string $cache_cluster_id;
  public string $cache_node_type;
  public string $cache_parameter_group_name;
  public string $cache_subnet_group_name;
  public string $engine;
  public string $engine_version;
  public string $kms_key_id;
  public NodeSnapshotList $node_snapshots;
  public IntegerOptional $num_cache_nodes;
  public IntegerOptional $num_node_groups;
  public IntegerOptional $port;
  public string $preferred_availability_zone;
  public string $preferred_maintenance_window;
  public string $replication_group_description;
  public string $replication_group_id;
  public string $snapshot_name;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_source;
  public string $snapshot_status;
  public string $snapshot_window;
  public string $topic_arn;
  public string $vpc_id;

  public function __construct(shape(
  ?'auto_minor_version_upgrade' => boolean,
  ?'automatic_failover' => AutomaticFailoverStatus,
  ?'cache_cluster_create_time' => TStamp,
  ?'cache_cluster_id' => string,
  ?'cache_node_type' => string,
  ?'cache_parameter_group_name' => string,
  ?'cache_subnet_group_name' => string,
  ?'engine' => string,
  ?'engine_version' => string,
  ?'kms_key_id' => string,
  ?'node_snapshots' => NodeSnapshotList,
  ?'num_cache_nodes' => IntegerOptional,
  ?'num_node_groups' => IntegerOptional,
  ?'port' => IntegerOptional,
  ?'preferred_availability_zone' => string,
  ?'preferred_maintenance_window' => string,
  ?'replication_group_description' => string,
  ?'replication_group_id' => string,
  ?'snapshot_name' => string,
  ?'snapshot_retention_limit' => IntegerOptional,
  ?'snapshot_source' => string,
  ?'snapshot_status' => string,
  ?'snapshot_window' => string,
  ?'topic_arn' => string,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $auto_minor_version_upgrade ?? ;
    $this->automatic_failover = $automatic_failover ?? ;
    $this->cache_cluster_create_time = $cache_cluster_create_time ?? ;
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_node_type = $cache_node_type ?? ;
    $this->cache_parameter_group_name = $cache_parameter_group_name ?? ;
    $this->cache_subnet_group_name = $cache_subnet_group_name ?? ;
    $this->engine = $engine ?? ;
    $this->engine_version = $engine_version ?? ;
    $this->kms_key_id = $kms_key_id ?? ;
    $this->node_snapshots = $node_snapshots ?? ;
    $this->num_cache_nodes = $num_cache_nodes ?? ;
    $this->num_node_groups = $num_node_groups ?? ;
    $this->port = $port ?? ;
    $this->preferred_availability_zone = $preferred_availability_zone ?? ;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? ;
    $this->replication_group_description = $replication_group_description ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->snapshot_name = $snapshot_name ?? ;
    $this->snapshot_retention_limit = $snapshot_retention_limit ?? ;
    $this->snapshot_source = $snapshot_source ?? ;
    $this->snapshot_status = $snapshot_status ?? ;
    $this->snapshot_window = $snapshot_window ?? ;
    $this->topic_arn = $topic_arn ?? ;
    $this->vpc_id = $vpc_id ?? ;
  }
}

class SnapshotAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SnapshotArnsList = vec<String>;

class SnapshotFeatureNotSupportedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SnapshotList = vec<Snapshot>;

class SnapshotNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SourceType = string;

class StartMigrationMessage {
  public CustomerNodeEndpointList $customer_node_endpoint_list;
  public string $replication_group_id;

  public function __construct(shape(
  ?'customer_node_endpoint_list' => CustomerNodeEndpointList,
  ?'replication_group_id' => string,
  ) $s = shape()) {
    $this->customer_node_endpoint_list = $customer_node_endpoint_list ?? [];
    $this->replication_group_id = $replication_group_id ?? ;
  }
}

class StartMigrationResponse {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

type String = string;

class Subnet {
  public AvailabilityZone $subnet_availability_zone;
  public string $subnet_identifier;

  public function __construct(shape(
  ?'subnet_availability_zone' => AvailabilityZone,
  ?'subnet_identifier' => string,
  ) $s = shape()) {
    $this->subnet_availability_zone = $subnet_availability_zone ?? ;
    $this->subnet_identifier = $subnet_identifier ?? ;
  }
}

type SubnetIdentifierList = vec<String>;

class SubnetInUse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SubnetList = vec<Subnet>;

type TStamp = int;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
  ?'key' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagList = vec<Tag>;

class TagListMessage {
  public TagList $tag_list;

  public function __construct(shape(
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->tag_list = $tag_list ?? [];
  }
}

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

class TestFailoverMessage {
  public AllowedNodeGroupId $node_group_id;
  public string $replication_group_id;

  public function __construct(shape(
  ?'node_group_id' => AllowedNodeGroupId,
  ?'replication_group_id' => string,
  ) $s = shape()) {
    $this->node_group_id = $node_group_id ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
  }
}

class TestFailoverNotAvailableFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TestFailoverResult {
  public ReplicationGroup $replication_group;

  public function __construct(shape(
  ?'replication_group' => ReplicationGroup,
  ) $s = shape()) {
    $this->replication_group = $replication_group ?? null;
  }
}

class TimeRangeFilter {
  public TStamp $end_time;
  public TStamp $start_time;

  public function __construct(shape(
  ?'end_time' => TStamp,
  ?'start_time' => TStamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class UnprocessedUpdateAction {
  public string $cache_cluster_id;
  public string $error_message;
  public string $error_type;
  public string $replication_group_id;
  public string $service_update_name;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'error_message' => string,
  ?'error_type' => string,
  ?'replication_group_id' => string,
  ?'service_update_name' => string,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->error_message = $error_message ?? ;
    $this->error_type = $error_type ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->service_update_name = $service_update_name ?? ;
  }
}

type UnprocessedUpdateActionList = vec<UnprocessedUpdateAction>;

class UpdateAction {
  public string $cache_cluster_id;
  public CacheNodeUpdateStatusList $cache_node_update_status;
  public string $engine;
  public string $estimated_update_time;
  public NodeGroupUpdateStatusList $node_group_update_status;
  public string $nodes_updated;
  public string $replication_group_id;
  public string $service_update_name;
  public TStamp $service_update_recommended_apply_by_date;
  public TStamp $service_update_release_date;
  public ServiceUpdateSeverity $service_update_severity;
  public ServiceUpdateStatus $service_update_status;
  public ServiceUpdateType $service_update_type;
  public SlaMet $sla_met;
  public TStamp $update_action_available_date;
  public UpdateActionStatus $update_action_status;
  public TStamp $update_action_status_modified_date;

  public function __construct(shape(
  ?'cache_cluster_id' => string,
  ?'cache_node_update_status' => CacheNodeUpdateStatusList,
  ?'engine' => string,
  ?'estimated_update_time' => string,
  ?'node_group_update_status' => NodeGroupUpdateStatusList,
  ?'nodes_updated' => string,
  ?'replication_group_id' => string,
  ?'service_update_name' => string,
  ?'service_update_recommended_apply_by_date' => TStamp,
  ?'service_update_release_date' => TStamp,
  ?'service_update_severity' => ServiceUpdateSeverity,
  ?'service_update_status' => ServiceUpdateStatus,
  ?'service_update_type' => ServiceUpdateType,
  ?'sla_met' => SlaMet,
  ?'update_action_available_date' => TStamp,
  ?'update_action_status' => UpdateActionStatus,
  ?'update_action_status_modified_date' => TStamp,
  ) $s = shape()) {
    $this->cache_cluster_id = $cache_cluster_id ?? ;
    $this->cache_node_update_status = $cache_node_update_status ?? null;
    $this->engine = $engine ?? ;
    $this->estimated_update_time = $estimated_update_time ?? ;
    $this->node_group_update_status = $node_group_update_status ?? null;
    $this->nodes_updated = $nodes_updated ?? ;
    $this->replication_group_id = $replication_group_id ?? ;
    $this->service_update_name = $service_update_name ?? ;
    $this->service_update_recommended_apply_by_date = $service_update_recommended_apply_by_date ?? ;
    $this->service_update_release_date = $service_update_release_date ?? ;
    $this->service_update_severity = $service_update_severity ?? "";
    $this->service_update_status = $service_update_status ?? "";
    $this->service_update_type = $service_update_type ?? "";
    $this->sla_met = $sla_met ?? "";
    $this->update_action_available_date = $update_action_available_date ?? ;
    $this->update_action_status = $update_action_status ?? "";
    $this->update_action_status_modified_date = $update_action_status_modified_date ?? ;
  }
}

type UpdateActionList = vec<UpdateAction>;

class UpdateActionResultsMessage {
  public ProcessedUpdateActionList $processed_update_actions;
  public UnprocessedUpdateActionList $unprocessed_update_actions;

  public function __construct(shape(
  ?'processed_update_actions' => ProcessedUpdateActionList,
  ?'unprocessed_update_actions' => UnprocessedUpdateActionList,
  ) $s = shape()) {
    $this->processed_update_actions = $processed_update_actions ?? ;
    $this->unprocessed_update_actions = $unprocessed_update_actions ?? ;
  }
}

type UpdateActionStatus = string;

type UpdateActionStatusList = vec<UpdateActionStatus>;

class UpdateActionsMessage {
  public string $marker;
  public UpdateActionList $update_actions;

  public function __construct(shape(
  ?'marker' => string,
  ?'update_actions' => UpdateActionList,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->update_actions = $update_actions ?? ;
  }
}

