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
}

class AZMode {
}

class AddTagsToResourceMessage {
  public string $resource_name;
  public TagList $tags;
}

class AllowedNodeGroupId {
}

class AllowedNodeTypeModificationsMessage {
  public NodeTypeList $scale_down_modifications;
  public NodeTypeList $scale_up_modifications;
}

class AuthTokenUpdateStatus {
}

class AuthTokenUpdateStrategyType {
}

class AuthorizationAlreadyExistsFault {
}

class AuthorizationNotFoundFault {
}

class AuthorizeCacheSecurityGroupIngressMessage {
  public string $cache_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
}

class AuthorizeCacheSecurityGroupIngressResult {
  public CacheSecurityGroup $cache_security_group;
}

class AutomaticFailoverStatus {
}

class AvailabilityZone {
  public string $name;
}

class AvailabilityZonesList {
}

class AwsQueryErrorMessage {
}

class BatchApplyUpdateActionMessage {
  public CacheClusterIdList $cache_cluster_ids;
  public ReplicationGroupIdList $replication_group_ids;
  public string $service_update_name;
}

class BatchStopUpdateActionMessage {
  public CacheClusterIdList $cache_cluster_ids;
  public ReplicationGroupIdList $replication_group_ids;
  public string $service_update_name;
}

class Boolean {
}

class BooleanOptional {
}

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
}

class CacheClusterAlreadyExistsFault {
}

class CacheClusterIdList {
}

class CacheClusterList {
}

class CacheClusterMessage {
  public CacheClusterList $cache_clusters;
  public string $marker;
}

class CacheClusterNotFoundFault {
}

class CacheEngineVersion {
  public string $cache_engine_description;
  public string $cache_engine_version_description;
  public string $cache_parameter_group_family;
  public string $engine;
  public string $engine_version;
}

class CacheEngineVersionList {
}

class CacheEngineVersionMessage {
  public CacheEngineVersionList $cache_engine_versions;
  public string $marker;
}

class CacheNode {
  public TStamp $cache_node_create_time;
  public string $cache_node_id;
  public string $cache_node_status;
  public string $customer_availability_zone;
  public Endpoint $endpoint;
  public string $parameter_group_status;
  public string $source_cache_node_id;
}

class CacheNodeIdsList {
}

class CacheNodeList {
}

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
}

class CacheNodeTypeSpecificParametersList {
}

class CacheNodeTypeSpecificValue {
  public string $cache_node_type;
  public string $value;
}

class CacheNodeTypeSpecificValueList {
}

class CacheNodeUpdateStatus {
  public string $cache_node_id;
  public TStamp $node_deletion_date;
  public TStamp $node_update_end_date;
  public NodeUpdateInitiatedBy $node_update_initiated_by;
  public TStamp $node_update_initiated_date;
  public TStamp $node_update_start_date;
  public NodeUpdateStatus $node_update_status;
  public TStamp $node_update_status_modified_date;
}

class CacheNodeUpdateStatusList {
}

class CacheParameterGroup {
  public string $cache_parameter_group_family;
  public string $cache_parameter_group_name;
  public string $description;
  public boolean $is_global;
}

class CacheParameterGroupAlreadyExistsFault {
}

class CacheParameterGroupDetails {
  public CacheNodeTypeSpecificParametersList $cache_node_type_specific_parameters;
  public string $marker;
  public ParametersList $parameters;
}

class CacheParameterGroupList {
}

class CacheParameterGroupNameMessage {
  public string $cache_parameter_group_name;
}

class CacheParameterGroupNotFoundFault {
}

class CacheParameterGroupQuotaExceededFault {
}

class CacheParameterGroupStatus {
  public CacheNodeIdsList $cache_node_ids_to_reboot;
  public string $cache_parameter_group_name;
  public string $parameter_apply_status;
}

class CacheParameterGroupsMessage {
  public CacheParameterGroupList $cache_parameter_groups;
  public string $marker;
}

class CacheSecurityGroup {
  public string $cache_security_group_name;
  public string $description;
  public EC2SecurityGroupList $ec_2_security_groups;
  public string $owner_id;
}

class CacheSecurityGroupAlreadyExistsFault {
}

class CacheSecurityGroupMembership {
  public string $cache_security_group_name;
  public string $status;
}

class CacheSecurityGroupMembershipList {
}

class CacheSecurityGroupMessage {
  public CacheSecurityGroups $cache_security_groups;
  public string $marker;
}

class CacheSecurityGroupNameList {
}

class CacheSecurityGroupNotFoundFault {
}

class CacheSecurityGroupQuotaExceededFault {
}

class CacheSecurityGroups {
}

class CacheSubnetGroup {
  public string $cache_subnet_group_description;
  public string $cache_subnet_group_name;
  public SubnetList $subnets;
  public string $vpc_id;
}

class CacheSubnetGroupAlreadyExistsFault {
}

class CacheSubnetGroupInUse {
}

class CacheSubnetGroupMessage {
  public CacheSubnetGroups $cache_subnet_groups;
  public string $marker;
}

class CacheSubnetGroupNotFoundFault {
}

class CacheSubnetGroupQuotaExceededFault {
}

class CacheSubnetGroups {
}

class CacheSubnetQuotaExceededFault {
}

class ChangeType {
}

class ClusterIdList {
}

class ClusterQuotaForCustomerExceededFault {
}

class CompleteMigrationMessage {
  public boolean $force;
  public string $replication_group_id;
}

class CompleteMigrationResponse {
  public ReplicationGroup $replication_group;
}

class ConfigureShard {
  public int $new_replica_count;
  public AllowedNodeGroupId $node_group_id;
  public PreferredAvailabilityZoneList $preferred_availability_zones;
}

class CopySnapshotMessage {
  public string $kms_key_id;
  public string $source_snapshot_name;
  public string $target_bucket;
  public string $target_snapshot_name;
}

class CopySnapshotResult {
  public Snapshot $snapshot;
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
}

class CreateCacheClusterResult {
  public CacheCluster $cache_cluster;
}

class CreateCacheParameterGroupMessage {
  public string $cache_parameter_group_family;
  public string $cache_parameter_group_name;
  public string $description;
}

class CreateCacheParameterGroupResult {
  public CacheParameterGroup $cache_parameter_group;
}

class CreateCacheSecurityGroupMessage {
  public string $cache_security_group_name;
  public string $description;
}

class CreateCacheSecurityGroupResult {
  public CacheSecurityGroup $cache_security_group;
}

class CreateCacheSubnetGroupMessage {
  public string $cache_subnet_group_description;
  public string $cache_subnet_group_name;
  public SubnetIdentifierList $subnet_ids;
}

class CreateCacheSubnetGroupResult {
  public CacheSubnetGroup $cache_subnet_group;
}

class CreateGlobalReplicationGroupMessage {
  public string $global_replication_group_description;
  public string $global_replication_group_id_suffix;
  public string $primary_replication_group_id;
}

class CreateGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
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
}

class CreateReplicationGroupResult {
  public ReplicationGroup $replication_group;
}

class CreateSnapshotMessage {
  public string $cache_cluster_id;
  public string $kms_key_id;
  public string $replication_group_id;
  public string $snapshot_name;
}

class CreateSnapshotResult {
  public Snapshot $snapshot;
}

class CustomerNodeEndpoint {
  public string $address;
  public IntegerOptional $port;
}

class CustomerNodeEndpointList {
}

class DecreaseNodeGroupsInGlobalReplicationGroupMessage {
  public boolean $apply_immediately;
  public GlobalNodeGroupIdList $global_node_groups_to_remove;
  public GlobalNodeGroupIdList $global_node_groups_to_retain;
  public string $global_replication_group_id;
  public int $node_group_count;
}

class DecreaseNodeGroupsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class DecreaseReplicaCountMessage {
  public boolean $apply_immediately;
  public IntegerOptional $new_replica_count;
  public ReplicaConfigurationList $replica_configuration;
  public RemoveReplicasList $replicas_to_remove;
  public string $replication_group_id;
}

class DecreaseReplicaCountResult {
  public ReplicationGroup $replication_group;
}

class DeleteCacheClusterMessage {
  public string $cache_cluster_id;
  public string $final_snapshot_identifier;
}

class DeleteCacheClusterResult {
  public CacheCluster $cache_cluster;
}

class DeleteCacheParameterGroupMessage {
  public string $cache_parameter_group_name;
}

class DeleteCacheSecurityGroupMessage {
  public string $cache_security_group_name;
}

class DeleteCacheSubnetGroupMessage {
  public string $cache_subnet_group_name;
}

class DeleteGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public boolean $retain_primary_replication_group;
}

class DeleteGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class DeleteReplicationGroupMessage {
  public string $final_snapshot_identifier;
  public string $replication_group_id;
  public BooleanOptional $retain_primary_cluster;
}

class DeleteReplicationGroupResult {
  public ReplicationGroup $replication_group;
}

class DeleteSnapshotMessage {
  public string $snapshot_name;
}

class DeleteSnapshotResult {
  public Snapshot $snapshot;
}

class DescribeCacheClustersMessage {
  public string $cache_cluster_id;
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $show_cache_clusters_not_in_replication_groups;
  public BooleanOptional $show_cache_node_info;
}

class DescribeCacheEngineVersionsMessage {
  public string $cache_parameter_group_family;
  public boolean $default_only;
  public string $engine;
  public string $engine_version;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeCacheParameterGroupsMessage {
  public string $cache_parameter_group_name;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeCacheParametersMessage {
  public string $cache_parameter_group_name;
  public string $marker;
  public IntegerOptional $max_records;
  public string $source;
}

class DescribeCacheSecurityGroupsMessage {
  public string $cache_security_group_name;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeCacheSubnetGroupsMessage {
  public string $cache_subnet_group_name;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeEngineDefaultParametersMessage {
  public string $cache_parameter_group_family;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeEngineDefaultParametersResult {
  public EngineDefaults $engine_defaults;
}

class DescribeEventsMessage {
  public IntegerOptional $duration;
  public TStamp $end_time;
  public string $marker;
  public IntegerOptional $max_records;
  public string $source_identifier;
  public SourceType $source_type;
  public TStamp $start_time;
}

class DescribeGlobalReplicationGroupsMessage {
  public string $global_replication_group_id;
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $show_member_info;
}

class DescribeGlobalReplicationGroupsResult {
  public GlobalReplicationGroupList $global_replication_groups;
  public string $marker;
}

class DescribeReplicationGroupsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $replication_group_id;
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
}

class DescribeReservedCacheNodesOfferingsMessage {
  public string $cache_node_type;
  public string $duration;
  public string $marker;
  public IntegerOptional $max_records;
  public string $offering_type;
  public string $product_description;
  public string $reserved_cache_nodes_offering_id;
}

class DescribeServiceUpdatesMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $service_update_name;
  public ServiceUpdateStatusList $service_update_status;
}

class DescribeSnapshotsListMessage {
  public string $marker;
  public SnapshotList $snapshots;
}

class DescribeSnapshotsMessage {
  public string $cache_cluster_id;
  public string $marker;
  public IntegerOptional $max_records;
  public string $replication_group_id;
  public BooleanOptional $show_node_group_config;
  public string $snapshot_name;
  public string $snapshot_source;
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
}

class DisassociateGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public string $replication_group_id;
  public string $replication_group_region;
}

class DisassociateGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class Double {
}

class EC2SecurityGroup {
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $status;
}

class EC2SecurityGroupList {
}

class Endpoint {
  public string $address;
  public int $port;
}

class EngineDefaults {
  public CacheNodeTypeSpecificParametersList $cache_node_type_specific_parameters;
  public string $cache_parameter_group_family;
  public string $marker;
  public ParametersList $parameters;
}

class Event {
  public TStamp $date;
  public string $message;
  public string $source_identifier;
  public SourceType $source_type;
}

class EventList {
}

class EventsMessage {
  public EventList $events;
  public string $marker;
}

class FailoverGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public string $primary_region;
  public string $primary_replication_group_id;
}

class FailoverGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class GlobalNodeGroup {
  public string $global_node_group_id;
  public string $slots;
}

class GlobalNodeGroupIdList {
}

class GlobalNodeGroupList {
}

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
}

class GlobalReplicationGroupAlreadyExistsFault {
}

class GlobalReplicationGroupInfo {
  public string $global_replication_group_id;
  public string $global_replication_group_member_role;
}

class GlobalReplicationGroupList {
}

class GlobalReplicationGroupMember {
  public AutomaticFailoverStatus $automatic_failover;
  public string $replication_group_id;
  public string $replication_group_region;
  public string $role;
  public string $status;
}

class GlobalReplicationGroupMemberList {
}

class GlobalReplicationGroupNotFoundFault {
}

class IncreaseNodeGroupsInGlobalReplicationGroupMessage {
  public boolean $apply_immediately;
  public string $global_replication_group_id;
  public int $node_group_count;
  public RegionalConfigurationList $regional_configurations;
}

class IncreaseNodeGroupsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class IncreaseReplicaCountMessage {
  public boolean $apply_immediately;
  public IntegerOptional $new_replica_count;
  public ReplicaConfigurationList $replica_configuration;
  public string $replication_group_id;
}

class IncreaseReplicaCountResult {
  public ReplicationGroup $replication_group;
}

class InsufficientCacheClusterCapacityFault {
}

class Integer {
}

class IntegerOptional {
}

class InvalidARNFault {
}

class InvalidCacheClusterStateFault {
}

class InvalidCacheParameterGroupStateFault {
}

class InvalidCacheSecurityGroupStateFault {
}

class InvalidGlobalReplicationGroupStateFault {
}

class InvalidKMSKeyFault {
}

class InvalidParameterCombinationException {
  public AwsQueryErrorMessage $message;
}

class InvalidParameterValueException {
  public AwsQueryErrorMessage $message;
}

class InvalidReplicationGroupStateFault {
}

class InvalidSnapshotStateFault {
}

class InvalidSubnet {
}

class InvalidVPCNetworkStateFault {
}

class KeyList {
}

class ListAllowedNodeTypeModificationsMessage {
  public string $cache_cluster_id;
  public string $replication_group_id;
}

class ListTagsForResourceMessage {
  public string $resource_name;
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
}

class ModifyCacheClusterResult {
  public CacheCluster $cache_cluster;
}

class ModifyCacheParameterGroupMessage {
  public string $cache_parameter_group_name;
  public ParameterNameValueList $parameter_name_values;
}

class ModifyCacheSubnetGroupMessage {
  public string $cache_subnet_group_description;
  public string $cache_subnet_group_name;
  public SubnetIdentifierList $subnet_ids;
}

class ModifyCacheSubnetGroupResult {
  public CacheSubnetGroup $cache_subnet_group;
}

class ModifyGlobalReplicationGroupMessage {
  public boolean $apply_immediately;
  public BooleanOptional $automatic_failover_enabled;
  public string $cache_node_type;
  public string $engine_version;
  public string $global_replication_group_description;
  public string $global_replication_group_id;
}

class ModifyGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
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
}

class ModifyReplicationGroupResult {
  public ReplicationGroup $replication_group;
}

class ModifyReplicationGroupShardConfigurationMessage {
  public boolean $apply_immediately;
  public int $node_group_count;
  public NodeGroupsToRemoveList $node_groups_to_remove;
  public NodeGroupsToRetainList $node_groups_to_retain;
  public string $replication_group_id;
  public ReshardingConfigurationList $resharding_configuration;
}

class ModifyReplicationGroupShardConfigurationResult {
  public ReplicationGroup $replication_group;
}

class NoOperationFault {
}

class NodeGroup {
  public string $node_group_id;
  public NodeGroupMemberList $node_group_members;
  public Endpoint $primary_endpoint;
  public Endpoint $reader_endpoint;
  public string $slots;
  public string $status;
}

class NodeGroupConfiguration {
  public AllowedNodeGroupId $node_group_id;
  public string $primary_availability_zone;
  public AvailabilityZonesList $replica_availability_zones;
  public IntegerOptional $replica_count;
  public string $slots;
}

class NodeGroupConfigurationList {
}

class NodeGroupList {
}

class NodeGroupMember {
  public string $cache_cluster_id;
  public string $cache_node_id;
  public string $current_role;
  public string $preferred_availability_zone;
  public Endpoint $read_endpoint;
}

class NodeGroupMemberList {
}

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
}

class NodeGroupMemberUpdateStatusList {
}

class NodeGroupNotFoundFault {
}

class NodeGroupUpdateStatus {
  public string $node_group_id;
  public NodeGroupMemberUpdateStatusList $node_group_member_update_status;
}

class NodeGroupUpdateStatusList {
}

class NodeGroupsPerReplicationGroupQuotaExceededFault {
}

class NodeGroupsToRemoveList {
}

class NodeGroupsToRetainList {
}

class NodeQuotaForClusterExceededFault {
}

class NodeQuotaForCustomerExceededFault {
}

class NodeSnapshot {
  public string $cache_cluster_id;
  public TStamp $cache_node_create_time;
  public string $cache_node_id;
  public string $cache_size;
  public NodeGroupConfiguration $node_group_configuration;
  public string $node_group_id;
  public TStamp $snapshot_create_time;
}

class NodeSnapshotList {
}

class NodeTypeList {
}

class NodeUpdateInitiatedBy {
}

class NodeUpdateStatus {
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
  public boolean $is_modifiable;
  public string $minimum_engine_version;
  public string $parameter_name;
  public string $parameter_value;
  public string $source;
}

class ParameterNameValue {
  public string $parameter_name;
  public string $parameter_value;
}

class ParameterNameValueList {
}

class ParametersList {
}

class PendingAutomaticFailoverStatus {
}

class PendingModifiedValues {
  public AuthTokenUpdateStatus $auth_token_status;
  public CacheNodeIdsList $cache_node_ids_to_remove;
  public string $cache_node_type;
  public string $engine_version;
  public IntegerOptional $num_cache_nodes;
}

class PreferredAvailabilityZoneList {
}

class ProcessedUpdateAction {
  public string $cache_cluster_id;
  public string $replication_group_id;
  public string $service_update_name;
  public UpdateActionStatus $update_action_status;
}

class ProcessedUpdateActionList {
}

class PurchaseReservedCacheNodesOfferingMessage {
  public IntegerOptional $cache_node_count;
  public string $reserved_cache_node_id;
  public string $reserved_cache_nodes_offering_id;
}

class PurchaseReservedCacheNodesOfferingResult {
  public ReservedCacheNode $reserved_cache_node;
}

class RebalanceSlotsInGlobalReplicationGroupMessage {
  public boolean $apply_immediately;
  public string $global_replication_group_id;
}

class RebalanceSlotsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class RebootCacheClusterMessage {
  public string $cache_cluster_id;
  public CacheNodeIdsList $cache_node_ids_to_reboot;
}

class RebootCacheClusterResult {
  public CacheCluster $cache_cluster;
}

class RecurringCharge {
  public Double $recurring_charge_amount;
  public string $recurring_charge_frequency;
}

class RecurringChargeList {
}

class RegionalConfiguration {
  public string $replication_group_id;
  public string $replication_group_region;
  public ReshardingConfigurationList $resharding_configuration;
}

class RegionalConfigurationList {
}

class RemoveReplicasList {
}

class RemoveTagsFromResourceMessage {
  public string $resource_name;
  public KeyList $tag_keys;
}

class ReplicaConfigurationList {
}

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
}

class ReplicationGroupAlreadyExistsFault {
}

class ReplicationGroupAlreadyUnderMigrationFault {
}

class ReplicationGroupIdList {
}

class ReplicationGroupList {
}

class ReplicationGroupMessage {
  public string $marker;
  public ReplicationGroupList $replication_groups;
}

class ReplicationGroupNotFoundFault {
}

class ReplicationGroupNotUnderMigrationFault {
}

class ReplicationGroupPendingModifiedValues {
  public AuthTokenUpdateStatus $auth_token_status;
  public PendingAutomaticFailoverStatus $automatic_failover_status;
  public string $primary_cluster_id;
  public ReshardingStatus $resharding;
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
}

class ReservedCacheNodeAlreadyExistsFault {
}

class ReservedCacheNodeList {
}

class ReservedCacheNodeMessage {
  public string $marker;
  public ReservedCacheNodeList $reserved_cache_nodes;
}

class ReservedCacheNodeNotFoundFault {
}

class ReservedCacheNodeQuotaExceededFault {
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
}

class ReservedCacheNodesOfferingList {
}

class ReservedCacheNodesOfferingMessage {
  public string $marker;
  public ReservedCacheNodesOfferingList $reserved_cache_nodes_offerings;
}

class ReservedCacheNodesOfferingNotFoundFault {
}

class ResetCacheParameterGroupMessage {
  public string $cache_parameter_group_name;
  public ParameterNameValueList $parameter_name_values;
  public boolean $reset_all_parameters;
}

class ReshardingConfiguration {
  public AllowedNodeGroupId $node_group_id;
  public AvailabilityZonesList $preferred_availability_zones;
}

class ReshardingConfigurationList {
}

class ReshardingStatus {
  public SlotMigration $slot_migration;
}

class RevokeCacheSecurityGroupIngressMessage {
  public string $cache_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
}

class RevokeCacheSecurityGroupIngressResult {
  public CacheSecurityGroup $cache_security_group;
}

class SecurityGroupIdsList {
}

class SecurityGroupMembership {
  public string $security_group_id;
  public string $status;
}

class SecurityGroupMembershipList {
}

class ServiceLinkedRoleNotFoundFault {
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
}

class ServiceUpdateList {
}

class ServiceUpdateNotFoundFault {
}

class ServiceUpdateSeverity {
}

class ServiceUpdateStatus {
}

class ServiceUpdateStatusList {
}

class ServiceUpdateType {
}

class ServiceUpdatesMessage {
  public string $marker;
  public ServiceUpdateList $service_updates;
}

class SlaMet {
}

class SlotMigration {
  public Double $progress_percentage;
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
}

class SnapshotAlreadyExistsFault {
}

class SnapshotArnsList {
}

class SnapshotFeatureNotSupportedFault {
}

class SnapshotList {
}

class SnapshotNotFoundFault {
}

class SnapshotQuotaExceededFault {
}

class SourceType {
}

class StartMigrationMessage {
  public CustomerNodeEndpointList $customer_node_endpoint_list;
  public string $replication_group_id;
}

class StartMigrationResponse {
  public ReplicationGroup $replication_group;
}

class String {
}

class Subnet {
  public AvailabilityZone $subnet_availability_zone;
  public string $subnet_identifier;
}

class SubnetIdentifierList {
}

class SubnetInUse {
}

class SubnetList {
}

class TStamp {
}

class Tag {
  public string $key;
  public string $value;
}

class TagList {
}

class TagListMessage {
  public TagList $tag_list;
}

class TagNotFoundFault {
}

class TagQuotaPerResourceExceeded {
}

class TestFailoverMessage {
  public AllowedNodeGroupId $node_group_id;
  public string $replication_group_id;
}

class TestFailoverNotAvailableFault {
}

class TestFailoverResult {
  public ReplicationGroup $replication_group;
}

class TimeRangeFilter {
  public TStamp $end_time;
  public TStamp $start_time;
}

class UnprocessedUpdateAction {
  public string $cache_cluster_id;
  public string $error_message;
  public string $error_type;
  public string $replication_group_id;
  public string $service_update_name;
}

class UnprocessedUpdateActionList {
}

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
}

class UpdateActionList {
}

class UpdateActionResultsMessage {
  public ProcessedUpdateActionList $processed_update_actions;
  public UnprocessedUpdateActionList $unprocessed_update_actions;
}

class UpdateActionStatus {
}

class UpdateActionStatusList {
}

class UpdateActionsMessage {
  public string $marker;
  public UpdateActionList $update_actions;
}

