<?hh // strict
namespace slack\aws\elasticache;

interface ElastiCache {
  public function CompleteMigration(CompleteMigrationMessage) Awaitable<Errors\Result<CompleteMigrationResponse>>;
  public function CreateCacheSubnetGroup(CreateCacheSubnetGroupMessage) Awaitable<Errors\Result<CreateCacheSubnetGroupResult>>;
  public function CopySnapshot(CopySnapshotMessage) Awaitable<Errors\Result<CopySnapshotResult>>;
  public function CreateCacheParameterGroup(CreateCacheParameterGroupMessage) Awaitable<Errors\Result<CreateCacheParameterGroupResult>>;
  public function DeleteCacheCluster(DeleteCacheClusterMessage) Awaitable<Errors\Result<DeleteCacheClusterResult>>;
  public function FailoverGlobalReplicationGroup(FailoverGlobalReplicationGroupMessage) Awaitable<Errors\Result<FailoverGlobalReplicationGroupResult>>;
  public function RevokeCacheSecurityGroupIngress(RevokeCacheSecurityGroupIngressMessage) Awaitable<Errors\Result<RevokeCacheSecurityGroupIngressResult>>;
  public function DescribeCacheSubnetGroups(DescribeCacheSubnetGroupsMessage) Awaitable<Errors\Result<CacheSubnetGroupMessage>>;
  public function DescribeUpdateActions(DescribeUpdateActionsMessage) Awaitable<Errors\Result<UpdateActionsMessage>>;
  public function IncreaseReplicaCount(IncreaseReplicaCountMessage) Awaitable<Errors\Result<IncreaseReplicaCountResult>>;
  public function ModifyCacheParameterGroup(ModifyCacheParameterGroupMessage) Awaitable<Errors\Result<CacheParameterGroupNameMessage>>;
  public function PurchaseReservedCacheNodesOffering(PurchaseReservedCacheNodesOfferingMessage) Awaitable<Errors\Result<PurchaseReservedCacheNodesOfferingResult>>;
  public function AuthorizeCacheSecurityGroupIngress(AuthorizeCacheSecurityGroupIngressMessage) Awaitable<Errors\Result<AuthorizeCacheSecurityGroupIngressResult>>;
  public function CreateSnapshot(CreateSnapshotMessage) Awaitable<Errors\Result<CreateSnapshotResult>>;
  public function DeleteCacheParameterGroup(DeleteCacheParameterGroupMessage) Awaitable<Errors\Error>;
  public function DescribeReplicationGroups(DescribeReplicationGroupsMessage) Awaitable<Errors\Result<ReplicationGroupMessage>>;
  public function ModifyCacheSubnetGroup(ModifyCacheSubnetGroupMessage) Awaitable<Errors\Result<ModifyCacheSubnetGroupResult>>;
  public function DeleteCacheSecurityGroup(DeleteCacheSecurityGroupMessage) Awaitable<Errors\Error>;
  public function DescribeCacheSecurityGroups(DescribeCacheSecurityGroupsMessage) Awaitable<Errors\Result<CacheSecurityGroupMessage>>;
  public function ModifyReplicationGroup(ModifyReplicationGroupMessage) Awaitable<Errors\Result<ModifyReplicationGroupResult>>;
  public function ModifyGlobalReplicationGroup(ModifyGlobalReplicationGroupMessage) Awaitable<Errors\Result<ModifyGlobalReplicationGroupResult>>;
  public function ResetCacheParameterGroup(ResetCacheParameterGroupMessage) Awaitable<Errors\Result<CacheParameterGroupNameMessage>>;
  public function DeleteGlobalReplicationGroup(DeleteGlobalReplicationGroupMessage) Awaitable<Errors\Result<DeleteGlobalReplicationGroupResult>>;
  public function DescribeCacheClusters(DescribeCacheClustersMessage) Awaitable<Errors\Result<CacheClusterMessage>>;
  public function DescribeServiceUpdates(DescribeServiceUpdatesMessage) Awaitable<Errors\Result<ServiceUpdatesMessage>>;
  public function ModifyReplicationGroupShardConfiguration(ModifyReplicationGroupShardConfigurationMessage) Awaitable<Errors\Result<ModifyReplicationGroupShardConfigurationResult>>;
  public function TestFailover(TestFailoverMessage) Awaitable<Errors\Result<TestFailoverResult>>;
  public function DecreaseReplicaCount(DecreaseReplicaCountMessage) Awaitable<Errors\Result<DecreaseReplicaCountResult>>;
  public function DescribeEvents(DescribeEventsMessage) Awaitable<Errors\Result<EventsMessage>>;
  public function ModifyCacheCluster(ModifyCacheClusterMessage) Awaitable<Errors\Result<ModifyCacheClusterResult>>;
  public function CreateCacheCluster(CreateCacheClusterMessage) Awaitable<Errors\Result<CreateCacheClusterResult>>;
  public function DeleteReplicationGroup(DeleteReplicationGroupMessage) Awaitable<Errors\Result<DeleteReplicationGroupResult>>;
  public function DescribeCacheParameterGroups(DescribeCacheParameterGroupsMessage) Awaitable<Errors\Result<CacheParameterGroupsMessage>>;
  public function DescribeEngineDefaultParameters(DescribeEngineDefaultParametersMessage) Awaitable<Errors\Result<DescribeEngineDefaultParametersResult>>;
  public function DescribeReservedCacheNodesOfferings(DescribeReservedCacheNodesOfferingsMessage) Awaitable<Errors\Result<ReservedCacheNodesOfferingMessage>>;
  public function ListAllowedNodeTypeModifications(ListAllowedNodeTypeModificationsMessage) Awaitable<Errors\Result<AllowedNodeTypeModificationsMessage>>;
  public function BatchStopUpdateAction(BatchStopUpdateActionMessage) Awaitable<Errors\Result<UpdateActionResultsMessage>>;
  public function DeleteCacheSubnetGroup(DeleteCacheSubnetGroupMessage) Awaitable<Errors\Error>;
  public function DescribeCacheParameters(DescribeCacheParametersMessage) Awaitable<Errors\Result<CacheParameterGroupDetails>>;
  public function DescribeGlobalReplicationGroups(DescribeGlobalReplicationGroupsMessage) Awaitable<Errors\Result<DescribeGlobalReplicationGroupsResult>>;
  public function DeleteSnapshot(DeleteSnapshotMessage) Awaitable<Errors\Result<DeleteSnapshotResult>>;
  public function DescribeCacheEngineVersions(DescribeCacheEngineVersionsMessage) Awaitable<Errors\Result<CacheEngineVersionMessage>>;
  public function DescribeReservedCacheNodes(DescribeReservedCacheNodesMessage) Awaitable<Errors\Result<ReservedCacheNodeMessage>>;
  public function StartMigration(StartMigrationMessage) Awaitable<Errors\Result<StartMigrationResponse>>;
  public function CreateReplicationGroup(CreateReplicationGroupMessage) Awaitable<Errors\Result<CreateReplicationGroupResult>>;
  public function ListTagsForResource(ListTagsForResourceMessage) Awaitable<Errors\Result<TagListMessage>>;
  public function CreateGlobalReplicationGroup(CreateGlobalReplicationGroupMessage) Awaitable<Errors\Result<CreateGlobalReplicationGroupResult>>;
  public function DecreaseNodeGroupsInGlobalReplicationGroup(DecreaseNodeGroupsInGlobalReplicationGroupMessage) Awaitable<Errors\Result<DecreaseNodeGroupsInGlobalReplicationGroupResult>>;
  public function DescribeSnapshots(DescribeSnapshotsMessage) Awaitable<Errors\Result<DescribeSnapshotsListMessage>>;
  public function RebalanceSlotsInGlobalReplicationGroup(RebalanceSlotsInGlobalReplicationGroupMessage) Awaitable<Errors\Result<RebalanceSlotsInGlobalReplicationGroupResult>>;
  public function RebootCacheCluster(RebootCacheClusterMessage) Awaitable<Errors\Result<RebootCacheClusterResult>>;
  public function BatchApplyUpdateAction(BatchApplyUpdateActionMessage) Awaitable<Errors\Result<UpdateActionResultsMessage>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceMessage) Awaitable<Errors\Result<TagListMessage>>;
  public function DisassociateGlobalReplicationGroup(DisassociateGlobalReplicationGroupMessage) Awaitable<Errors\Result<DisassociateGlobalReplicationGroupResult>>;
  public function AddTagsToResource(AddTagsToResourceMessage) Awaitable<Errors\Result<TagListMessage>>;
  public function CreateCacheSecurityGroup(CreateCacheSecurityGroupMessage) Awaitable<Errors\Result<CreateCacheSecurityGroupResult>>;
  public function IncreaseNodeGroupsInGlobalReplicationGroup(IncreaseNodeGroupsInGlobalReplicationGroupMessage) Awaitable<Errors\Result<IncreaseNodeGroupsInGlobalReplicationGroupResult>>;
}

class CacheParameterGroupNameMessage {
  public string $cache_parameter_group_name;
}

class DeleteGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public boolean $retain_primary_replication_group;
}

class EC2SecurityGroup {
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $status;
}

class ModifyGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class ReshardingConfigurationList {
}

class SnapshotFeatureNotSupportedFault {
}

class AllowedNodeGroupId {
}

class CreateSnapshotMessage {
  public string $replication_group_id;
  public string $cache_cluster_id;
  public string $snapshot_name;
  public string $kms_key_id;
}

class DeleteCacheClusterMessage {
  public string $final_snapshot_identifier;
  public string $cache_cluster_id;
}

class GlobalReplicationGroupInfo {
  public string $global_replication_group_id;
  public string $global_replication_group_member_role;
}

class RevokeCacheSecurityGroupIngressMessage {
  public string $cache_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
}

class SnapshotQuotaExceededFault {
}

class AvailabilityZone {
  public string $name;
}

class ConfigureShard {
  public AllowedNodeGroupId $node_group_id;
  public int $new_replica_count;
  public PreferredAvailabilityZoneList $preferred_availability_zones;
}

class DescribeGlobalReplicationGroupsMessage {
  public string $marker;
  public BooleanOptional $show_member_info;
  public string $global_replication_group_id;
  public IntegerOptional $max_records;
}

class DescribeGlobalReplicationGroupsResult {
  public string $marker;
  public GlobalReplicationGroupList $global_replication_groups;
}

class BooleanOptional {
}

class CacheEngineVersionList {
}

class CacheNodeTypeSpecificParametersList {
}

class CreateSnapshotResult {
  public Snapshot $snapshot;
}

class NodeGroupsToRetainList {
}

class ReservedCacheNodeList {
}

class CreateCacheSubnetGroupResult {
  public CacheSubnetGroup $cache_subnet_group;
}

class FailoverGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class GlobalNodeGroup {
  public string $global_node_group_id;
  public string $slots;
}

class ModifyGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public boolean $apply_immediately;
  public string $cache_node_type;
  public string $engine_version;
  public string $global_replication_group_description;
  public BooleanOptional $automatic_failover_enabled;
}

class NodeGroupMemberList {
}

class AllowedNodeTypeModificationsMessage {
  public NodeTypeList $scale_up_modifications;
  public NodeTypeList $scale_down_modifications;
}

class BatchApplyUpdateActionMessage {
  public CacheClusterIdList $cache_cluster_ids;
  public string $service_update_name;
  public ReplicationGroupIdList $replication_group_ids;
}

class CacheParameterGroup {
  public string $cache_parameter_group_name;
  public string $cache_parameter_group_family;
  public string $description;
  public boolean $is_global;
}

class CacheSubnetGroup {
  public string $cache_subnet_group_name;
  public string $cache_subnet_group_description;
  public string $vpc_id;
  public SubnetList $subnets;
}

class DescribeReplicationGroupsMessage {
  public IntegerOptional $max_records;
  public string $marker;
  public string $replication_group_id;
}

class DisassociateGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class PendingModifiedValues {
  public IntegerOptional $num_cache_nodes;
  public CacheNodeIdsList $cache_node_ids_to_remove;
  public string $engine_version;
  public string $cache_node_type;
  public AuthTokenUpdateStatus $auth_token_status;
}

class RecurringChargeList {
}

class SnapshotList {
}

class TagQuotaPerResourceExceeded {
}

class NodeGroupUpdateStatus {
  public string $node_group_id;
  public NodeGroupMemberUpdateStatusList $node_group_member_update_status;
}

class RecurringCharge {
  public Double $recurring_charge_amount;
  public string $recurring_charge_frequency;
}

class ReplicaConfigurationList {
}

class CacheNodeTypeSpecificValue {
  public string $value;
  public string $cache_node_type;
}

class DecreaseReplicaCountResult {
  public ReplicationGroup $replication_group;
}

class NodeGroupNotFoundFault {
}

class RebalanceSlotsInGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public boolean $apply_immediately;
}

class ServiceUpdateNotFoundFault {
}

class TestFailoverMessage {
  public string $replication_group_id;
  public AllowedNodeGroupId $node_group_id;
}

class CacheClusterMessage {
  public string $marker;
  public CacheClusterList $cache_clusters;
}

class DescribeReservedCacheNodesMessage {
  public string $product_description;
  public string $offering_type;
  public IntegerOptional $max_records;
  public string $marker;
  public string $reserved_cache_node_id;
  public string $reserved_cache_nodes_offering_id;
  public string $cache_node_type;
  public string $duration;
}

class AddTagsToResourceMessage {
  public string $resource_name;
  public TagList $tags;
}

class CopySnapshotMessage {
  public string $source_snapshot_name;
  public string $target_snapshot_name;
  public string $target_bucket;
  public string $kms_key_id;
}

class CustomerNodeEndpoint {
  public string $address;
  public IntegerOptional $port;
}

class NodeGroupMemberUpdateStatus {
  public TStamp $node_update_end_date;
  public TStamp $node_update_status_modified_date;
  public string $cache_cluster_id;
  public TStamp $node_deletion_date;
  public TStamp $node_update_start_date;
  public NodeUpdateInitiatedBy $node_update_initiated_by;
  public TStamp $node_update_initiated_date;
  public string $cache_node_id;
  public NodeUpdateStatus $node_update_status;
}

class CacheSecurityGroups {
}

class CompleteMigrationMessage {
  public boolean $force;
  public string $replication_group_id;
}

class ServiceUpdate {
  public ServiceUpdateStatus $service_update_status;
  public ServiceUpdateType $service_update_type;
  public string $engine;
  public string $estimated_update_time;
  public BooleanOptional $auto_update_after_recommended_apply_by_date;
  public string $service_update_name;
  public TStamp $service_update_release_date;
  public TStamp $service_update_end_date;
  public ServiceUpdateSeverity $service_update_severity;
  public TStamp $service_update_recommended_apply_by_date;
  public string $service_update_description;
  public string $engine_version;
}

class ServiceUpdateList {
}

class GlobalReplicationGroupList {
}

class ReplicationGroupAlreadyExistsFault {
}

class TestFailoverResult {
  public ReplicationGroup $replication_group;
}

class RebalanceSlotsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class UnprocessedUpdateAction {
  public string $replication_group_id;
  public string $cache_cluster_id;
  public string $service_update_name;
  public string $error_type;
  public string $error_message;
}

class CacheSubnetQuotaExceededFault {
}

class ReplicationGroupMessage {
  public string $marker;
  public ReplicationGroupList $replication_groups;
}

class CreateCacheParameterGroupMessage {
  public string $cache_parameter_group_name;
  public string $cache_parameter_group_family;
  public string $description;
}

class NodeTypeList {
}

class CreateCacheClusterResult {
  public CacheCluster $cache_cluster;
}

class DescribeReservedCacheNodesOfferingsMessage {
  public string $cache_node_type;
  public string $duration;
  public string $product_description;
  public string $offering_type;
  public IntegerOptional $max_records;
  public string $marker;
  public string $reserved_cache_nodes_offering_id;
}

class RevokeCacheSecurityGroupIngressResult {
  public CacheSecurityGroup $cache_security_group;
}

class SubnetList {
}

class AutomaticFailoverStatus {
}

class AwsQueryErrorMessage {
}

class CacheNodeTypeSpecificParameter {
  public string $data_type;
  public string $allowed_values;
  public CacheNodeTypeSpecificValueList $cache_node_type_specific_values;
  public ChangeType $change_type;
  public string $parameter_name;
  public string $description;
  public string $source;
  public boolean $is_modifiable;
  public string $minimum_engine_version;
}

class CacheParameterGroupList {
}

class CreateGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class EventList {
}

class PreferredAvailabilityZoneList {
}

class CacheNodeTypeSpecificValueList {
}

class CacheSubnetGroupNotFoundFault {
}

class ModifyReplicationGroupShardConfigurationResult {
  public ReplicationGroup $replication_group;
}

class ReplicationGroupAlreadyUnderMigrationFault {
}

class ReservedCacheNodesOfferingMessage {
  public string $marker;
  public ReservedCacheNodesOfferingList $reserved_cache_nodes_offerings;
}

class SecurityGroupMembership {
  public string $status;
  public string $security_group_id;
}

class CacheSecurityGroupQuotaExceededFault {
}

class CacheSubnetGroupMessage {
  public string $marker;
  public CacheSubnetGroups $cache_subnet_groups;
}

class CompleteMigrationResponse {
  public ReplicationGroup $replication_group;
}

class DescribeCacheEngineVersionsMessage {
  public string $engine;
  public string $engine_version;
  public string $cache_parameter_group_family;
  public IntegerOptional $max_records;
  public string $marker;
  public boolean $default_only;
}

class GlobalNodeGroupIdList {
}

class UpdateActionList {
}

class CacheParameterGroupAlreadyExistsFault {
}

class Event {
  public string $source_identifier;
  public SourceType $source_type;
  public string $message;
  public TStamp $date;
}

class ReservedCacheNodesOfferingList {
}

class SnapshotNotFoundFault {
}

class DeleteReplicationGroupResult {
  public ReplicationGroup $replication_group;
}

class Integer {
}

class InvalidCacheClusterStateFault {
}

class NodeSnapshot {
  public TStamp $cache_node_create_time;
  public TStamp $snapshot_create_time;
  public string $cache_cluster_id;
  public string $node_group_id;
  public string $cache_node_id;
  public NodeGroupConfiguration $node_group_configuration;
  public string $cache_size;
}

class SubnetInUse {
}

class AZMode {
}

class CacheCluster {
  public string $cache_node_type;
  public string $preferred_maintenance_window;
  public NotificationConfiguration $notification_configuration;
  public string $snapshot_window;
  public BooleanOptional $transit_encryption_enabled;
  public BooleanOptional $at_rest_encryption_enabled;
  public IntegerOptional $num_cache_nodes;
  public CacheSecurityGroupMembershipList $cache_security_groups;
  public string $cache_subnet_group_name;
  public boolean $auto_minor_version_upgrade;
  public SecurityGroupMembershipList $security_groups;
  public TStamp $cache_cluster_create_time;
  public PendingModifiedValues $pending_modified_values;
  public CacheNodeList $cache_nodes;
  public string $cache_cluster_id;
  public Endpoint $configuration_endpoint;
  public string $client_download_landing_page;
  public string $engine_version;
  public string $preferred_availability_zone;
  public string $replication_group_id;
  public IntegerOptional $snapshot_retention_limit;
  public BooleanOptional $auth_token_enabled;
  public string $engine;
  public string $cache_cluster_status;
  public CacheParameterGroupStatus $cache_parameter_group;
  public TStamp $auth_token_last_modified_date;
}

class DescribeSnapshotsListMessage {
  public string $marker;
  public SnapshotList $snapshots;
}

class InvalidCacheParameterGroupStateFault {
}

class RebootCacheClusterMessage {
  public string $cache_cluster_id;
  public CacheNodeIdsList $cache_node_ids_to_reboot;
}

class ServiceUpdateSeverity {
}

class ServiceLinkedRoleNotFoundFault {
}

class ModifyCacheSubnetGroupMessage {
  public string $cache_subnet_group_name;
  public string $cache_subnet_group_description;
  public SubnetIdentifierList $subnet_ids;
}

class IncreaseNodeGroupsInGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public int $node_group_count;
  public RegionalConfigurationList $regional_configurations;
  public boolean $apply_immediately;
}

class UpdateActionsMessage {
  public string $marker;
  public UpdateActionList $update_actions;
}

class UpdateActionStatus {
}

class CacheParameterGroupDetails {
  public string $marker;
  public ParametersList $parameters;
  public CacheNodeTypeSpecificParametersList $cache_node_type_specific_parameters;
}

class CacheSubnetGroups {
}

class CreateCacheSecurityGroupResult {
  public CacheSecurityGroup $cache_security_group;
}

class CreateReplicationGroupMessage {
  public string $replication_group_id;
  public string $snapshot_name;
  public string $preferred_maintenance_window;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $global_replication_group_id;
  public string $cache_subnet_group_name;
  public string $replication_group_description;
  public IntegerOptional $num_node_groups;
  public string $cache_node_type;
  public string $engine_version;
  public TagList $tags;
  public string $engine;
  public string $cache_parameter_group_name;
  public BooleanOptional $at_rest_encryption_enabled;
  public IntegerOptional $snapshot_retention_limit;
  public string $auth_token;
  public string $kms_key_id;
  public BooleanOptional $automatic_failover_enabled;
  public IntegerOptional $replicas_per_node_group;
  public string $notification_topic_arn;
  public string $snapshot_window;
  public string $primary_cluster_id;
  public IntegerOptional $num_cache_clusters;
  public AvailabilityZonesList $preferred_cache_cluster_a_zs;
  public SecurityGroupIdsList $security_group_ids;
  public BooleanOptional $transit_encryption_enabled;
  public NodeGroupConfigurationList $node_group_configuration;
  public CacheSecurityGroupNameList $cache_security_group_names;
  public SnapshotArnsList $snapshot_arns;
  public IntegerOptional $port;
}

class DecreaseNodeGroupsInGlobalReplicationGroupMessage {
  public int $node_group_count;
  public GlobalNodeGroupIdList $global_node_groups_to_remove;
  public GlobalNodeGroupIdList $global_node_groups_to_retain;
  public boolean $apply_immediately;
  public string $global_replication_group_id;
}

class DeleteCacheSubnetGroupMessage {
  public string $cache_subnet_group_name;
}

class NodeQuotaForClusterExceededFault {
}

class ReplicationGroupList {
}

class CacheParameterGroupsMessage {
  public CacheParameterGroupList $cache_parameter_groups;
  public string $marker;
}

class CreateCacheClusterMessage {
  public string $cache_subnet_group_name;
  public CacheSecurityGroupNameList $cache_security_group_names;
  public string $snapshot_name;
  public AZMode $az_mode;
  public PreferredAvailabilityZoneList $preferred_availability_zones;
  public string $engine_version;
  public string $cache_parameter_group_name;
  public SecurityGroupIdsList $security_group_ids;
  public string $preferred_maintenance_window;
  public string $notification_topic_arn;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $cache_cluster_id;
  public string $replication_group_id;
  public string $cache_node_type;
  public IntegerOptional $snapshot_retention_limit;
  public string $auth_token;
  public string $snapshot_window;
  public IntegerOptional $num_cache_nodes;
  public string $engine;
  public IntegerOptional $port;
  public string $preferred_availability_zone;
  public TagList $tags;
  public SnapshotArnsList $snapshot_arns;
}

class ModifyCacheSubnetGroupResult {
  public CacheSubnetGroup $cache_subnet_group;
}

class PurchaseReservedCacheNodesOfferingResult {
  public ReservedCacheNode $reserved_cache_node;
}

class Tag {
  public string $value;
  public string $key;
}

class CacheSecurityGroupNotFoundFault {
}

class KeyList {
}

class SnapshotArnsList {
}

class SubnetIdentifierList {
}

class UpdateActionStatusList {
}

class CacheSecurityGroupMessage {
  public string $marker;
  public CacheSecurityGroups $cache_security_groups;
}

class InvalidSubnet {
}

class CacheNodeIdsList {
}

class CacheSecurityGroupMembershipList {
}

class InvalidReplicationGroupStateFault {
}

class ParametersList {
}

class ReplicationGroupNotUnderMigrationFault {
}

class String {
}

class CacheClusterAlreadyExistsFault {
}

class CacheSecurityGroupNameList {
}

class CreateCacheSecurityGroupMessage {
  public string $cache_security_group_name;
  public string $description;
}

class ModifyCacheClusterResult {
  public CacheCluster $cache_cluster;
}

class GlobalReplicationGroupAlreadyExistsFault {
}

class InvalidCacheSecurityGroupStateFault {
}

class ModifyReplicationGroupShardConfigurationMessage {
  public ReshardingConfigurationList $resharding_configuration;
  public NodeGroupsToRemoveList $node_groups_to_remove;
  public NodeGroupsToRetainList $node_groups_to_retain;
  public string $replication_group_id;
  public int $node_group_count;
  public boolean $apply_immediately;
}

class NodeUpdateStatus {
}

class UpdateAction {
  public TStamp $update_action_available_date;
  public CacheNodeUpdateStatusList $cache_node_update_status;
  public string $estimated_update_time;
  public ServiceUpdateSeverity $service_update_severity;
  public TStamp $service_update_recommended_apply_by_date;
  public string $nodes_updated;
  public TStamp $update_action_status_modified_date;
  public string $engine;
  public string $service_update_name;
  public SlaMet $sla_met;
  public ServiceUpdateType $service_update_type;
  public string $cache_cluster_id;
  public TStamp $service_update_release_date;
  public ServiceUpdateStatus $service_update_status;
  public UpdateActionStatus $update_action_status;
  public NodeGroupUpdateStatusList $node_group_update_status;
  public string $replication_group_id;
}

class ModifyCacheParameterGroupMessage {
  public string $cache_parameter_group_name;
  public ParameterNameValueList $parameter_name_values;
}

class ReservedCacheNodeNotFoundFault {
}

class Snapshot {
  public string $kms_key_id;
  public string $snapshot_name;
  public string $replication_group_id;
  public TStamp $cache_cluster_create_time;
  public string $cache_parameter_group_name;
  public string $vpc_id;
  public IntegerOptional $num_node_groups;
  public string $cache_cluster_id;
  public string $snapshot_source;
  public string $preferred_availability_zone;
  public string $preferred_maintenance_window;
  public string $topic_arn;
  public boolean $auto_minor_version_upgrade;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_window;
  public string $snapshot_status;
  public string $engine;
  public string $engine_version;
  public IntegerOptional $num_cache_nodes;
  public IntegerOptional $port;
  public AutomaticFailoverStatus $automatic_failover;
  public string $replication_group_description;
  public string $cache_node_type;
  public string $cache_subnet_group_name;
  public NodeSnapshotList $node_snapshots;
}

class AuthorizationNotFoundFault {
}

class AuthorizeCacheSecurityGroupIngressMessage {
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $cache_security_group_name;
}

class CacheSecurityGroupAlreadyExistsFault {
}

class DescribeCacheParametersMessage {
  public string $cache_parameter_group_name;
  public string $source;
  public IntegerOptional $max_records;
  public string $marker;
}

class DescribeEventsMessage {
  public string $source_identifier;
  public SourceType $source_type;
  public TStamp $start_time;
  public TStamp $end_time;
  public IntegerOptional $duration;
  public IntegerOptional $max_records;
  public string $marker;
}

class EventsMessage {
  public string $marker;
  public EventList $events;
}

class GlobalReplicationGroupNotFoundFault {
}

class NodeGroupMemberUpdateStatusList {
}

class ReservedCacheNodesOffering {
  public RecurringChargeList $recurring_charges;
  public string $reserved_cache_nodes_offering_id;
  public string $cache_node_type;
  public int $duration;
  public Double $fixed_price;
  public Double $usage_price;
  public string $product_description;
  public string $offering_type;
}

class AuthTokenUpdateStatus {
}

class CacheSubnetGroupInUse {
}

class CustomerNodeEndpointList {
}

class SecurityGroupMembershipList {
}

class TestFailoverNotAvailableFault {
}

class CacheClusterNotFoundFault {
}

class DeleteSnapshotMessage {
  public string $snapshot_name;
}

class Endpoint {
  public string $address;
  public int $port;
}

class NodeGroupConfigurationList {
}

class NodeUpdateInitiatedBy {
}

class ServiceUpdatesMessage {
  public string $marker;
  public ServiceUpdateList $service_updates;
}

class UnprocessedUpdateActionList {
}

class InvalidSnapshotStateFault {
}

class NodeGroupUpdateStatusList {
}

class ReshardingConfiguration {
  public AllowedNodeGroupId $node_group_id;
  public AvailabilityZonesList $preferred_availability_zones;
}

class CacheNodeList {
}

class ClusterQuotaForCustomerExceededFault {
}

class CopySnapshotResult {
  public Snapshot $snapshot;
}

class DeleteCacheParameterGroupMessage {
  public string $cache_parameter_group_name;
}

class DeleteCacheSecurityGroupMessage {
  public string $cache_security_group_name;
}

class ReservedCacheNodeMessage {
  public string $marker;
  public ReservedCacheNodeList $reserved_cache_nodes;
}

class TimeRangeFilter {
  public TStamp $start_time;
  public TStamp $end_time;
}

class IncreaseNodeGroupsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class InvalidParameterCombinationException {
  public AwsQueryErrorMessage $message;
}

class ModifyReplicationGroupMessage {
  public string $replication_group_description;
  public string $snapshotting_cluster_id;
  public CacheSecurityGroupNameList $cache_security_group_names;
  public BooleanOptional $auto_minor_version_upgrade;
  public IntegerOptional $snapshot_retention_limit;
  public AuthTokenUpdateStrategyType $auth_token_update_strategy;
  public string $node_group_id;
  public string $notification_topic_arn;
  public string $engine_version;
  public string $cache_node_type;
  public string $replication_group_id;
  public string $primary_cluster_id;
  public string $snapshot_window;
  public string $auth_token;
  public BooleanOptional $automatic_failover_enabled;
  public SecurityGroupIdsList $security_group_ids;
  public string $preferred_maintenance_window;
  public string $cache_parameter_group_name;
  public string $notification_topic_status;
  public boolean $apply_immediately;
}

class ProcessedUpdateActionList {
}

class ResetCacheParameterGroupMessage {
  public ParameterNameValueList $parameter_name_values;
  public string $cache_parameter_group_name;
  public boolean $reset_all_parameters;
}

class AuthTokenUpdateStrategyType {
}

class CacheParameterGroupNotFoundFault {
}

class GlobalReplicationGroupMember {
  public string $status;
  public string $replication_group_id;
  public string $replication_group_region;
  public string $role;
  public AutomaticFailoverStatus $automatic_failover;
}

class NodeGroup {
  public string $node_group_id;
  public string $status;
  public Endpoint $primary_endpoint;
  public Endpoint $reader_endpoint;
  public string $slots;
  public NodeGroupMemberList $node_group_members;
}

class NodeGroupsPerReplicationGroupQuotaExceededFault {
}

class RegionalConfiguration {
  public ReshardingConfigurationList $resharding_configuration;
  public string $replication_group_id;
  public string $replication_group_region;
}

class StartMigrationMessage {
  public string $replication_group_id;
  public CustomerNodeEndpointList $customer_node_endpoint_list;
}

class RemoveTagsFromResourceMessage {
  public string $resource_name;
  public KeyList $tag_keys;
}

class TagNotFoundFault {
}

class CacheEngineVersion {
  public string $cache_engine_version_description;
  public string $engine;
  public string $engine_version;
  public string $cache_parameter_group_family;
  public string $cache_engine_description;
}

class CreateGlobalReplicationGroupMessage {
  public string $global_replication_group_id_suffix;
  public string $global_replication_group_description;
  public string $primary_replication_group_id;
}

class DecreaseNodeGroupsInGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class EngineDefaults {
  public string $cache_parameter_group_family;
  public string $marker;
  public ParametersList $parameters;
  public CacheNodeTypeSpecificParametersList $cache_node_type_specific_parameters;
}

class GlobalReplicationGroup {
  public BooleanOptional $at_rest_encryption_enabled;
  public string $global_replication_group_id;
  public string $global_replication_group_description;
  public string $cache_node_type;
  public string $engine_version;
  public BooleanOptional $cluster_enabled;
  public BooleanOptional $transit_encryption_enabled;
  public string $status;
  public string $engine;
  public GlobalReplicationGroupMemberList $members;
  public GlobalNodeGroupList $global_node_groups;
  public BooleanOptional $auth_token_enabled;
}

class ReplicationGroup {
  public BooleanOptional $transit_encryption_enabled;
  public ReplicationGroupPendingModifiedValues $pending_modified_values;
  public string $status;
  public Endpoint $configuration_endpoint;
  public BooleanOptional $cluster_enabled;
  public string $kms_key_id;
  public string $replication_group_id;
  public ClusterIdList $member_clusters;
  public NodeGroupList $node_groups;
  public AutomaticFailoverStatus $automatic_failover;
  public TStamp $auth_token_last_modified_date;
  public GlobalReplicationGroupInfo $global_replication_group_info;
  public string $snapshotting_cluster_id;
  public IntegerOptional $snapshot_retention_limit;
  public string $snapshot_window;
  public string $cache_node_type;
  public BooleanOptional $auth_token_enabled;
  public BooleanOptional $at_rest_encryption_enabled;
  public string $description;
}

class SlaMet {
}

class CacheNodeUpdateStatus {
  public string $cache_node_id;
  public NodeUpdateStatus $node_update_status;
  public TStamp $node_deletion_date;
  public TStamp $node_update_start_date;
  public TStamp $node_update_end_date;
  public NodeUpdateInitiatedBy $node_update_initiated_by;
  public TStamp $node_update_initiated_date;
  public TStamp $node_update_status_modified_date;
}

class DescribeCacheSubnetGroupsMessage {
  public string $cache_subnet_group_name;
  public IntegerOptional $max_records;
  public string $marker;
}

class DisassociateGlobalReplicationGroupMessage {
  public string $replication_group_id;
  public string $replication_group_region;
  public string $global_replication_group_id;
}

class EC2SecurityGroupList {
}

class Parameter {
  public string $source;
  public string $data_type;
  public boolean $is_modifiable;
  public string $minimum_engine_version;
  public string $description;
  public string $parameter_value;
  public string $allowed_values;
  public ChangeType $change_type;
  public string $parameter_name;
}

class ReplicationGroupPendingModifiedValues {
  public AuthTokenUpdateStatus $auth_token_status;
  public string $primary_cluster_id;
  public PendingAutomaticFailoverStatus $automatic_failover_status;
  public ReshardingStatus $resharding;
}

class CacheParameterGroupQuotaExceededFault {
}

class CreateCacheSubnetGroupMessage {
  public string $cache_subnet_group_description;
  public SubnetIdentifierList $subnet_ids;
  public string $cache_subnet_group_name;
}

class DescribeEngineDefaultParametersMessage {
  public string $cache_parameter_group_family;
  public IntegerOptional $max_records;
  public string $marker;
}

class ListTagsForResourceMessage {
  public string $resource_name;
}

class ServiceUpdateStatus {
}

class ServiceUpdateStatusList {
}

class CacheNode {
  public string $cache_node_status;
  public TStamp $cache_node_create_time;
  public Endpoint $endpoint;
  public string $parameter_group_status;
  public string $source_cache_node_id;
  public string $customer_availability_zone;
  public string $cache_node_id;
}

class CacheSecurityGroup {
  public string $owner_id;
  public string $cache_security_group_name;
  public string $description;
  public EC2SecurityGroupList $ec_2_security_groups;
}

class DeleteSnapshotResult {
  public Snapshot $snapshot;
}

class NodeQuotaForCustomerExceededFault {
}

class PendingAutomaticFailoverStatus {
}

class ServiceUpdateType {
}

class IncreaseReplicaCountResult {
  public ReplicationGroup $replication_group;
}

class InvalidARNFault {
}

class ReplicationGroupIdList {
}

class CacheClusterIdList {
}

class CacheParameterGroupStatus {
  public CacheNodeIdsList $cache_node_ids_to_reboot;
  public string $cache_parameter_group_name;
  public string $parameter_apply_status;
}

class CacheSubnetGroupAlreadyExistsFault {
}

class CacheSubnetGroupQuotaExceededFault {
}

class DecreaseReplicaCountMessage {
  public string $replication_group_id;
  public IntegerOptional $new_replica_count;
  public ReplicaConfigurationList $replica_configuration;
  public RemoveReplicasList $replicas_to_remove;
  public boolean $apply_immediately;
}

class IntegerOptional {
}

class NotificationConfiguration {
  public string $topic_arn;
  public string $topic_status;
}

class ReshardingStatus {
  public SlotMigration $slot_migration;
}

class TagListMessage {
  public TagList $tag_list;
}

class APICallRateForCustomerExceededFault {
}

class CacheNodeUpdateStatusList {
}

class InvalidKMSKeyFault {
}

class NodeGroupMember {
  public string $cache_node_id;
  public Endpoint $read_endpoint;
  public string $preferred_availability_zone;
  public string $current_role;
  public string $cache_cluster_id;
}

class ReplicationGroupNotFoundFault {
}

class ReservedCacheNodeAlreadyExistsFault {
}

class IncreaseReplicaCountMessage {
  public IntegerOptional $new_replica_count;
  public ReplicaConfigurationList $replica_configuration;
  public boolean $apply_immediately;
  public string $replication_group_id;
}

class InvalidVPCNetworkStateFault {
}

class AuthorizationAlreadyExistsFault {
}

class Boolean {
}

class CreateCacheParameterGroupResult {
  public CacheParameterGroup $cache_parameter_group;
}

class DescribeUpdateActionsMessage {
  public string $engine;
  public TimeRangeFilter $service_update_time_range;
  public BooleanOptional $show_node_level_update_status;
  public string $marker;
  public ReplicationGroupIdList $replication_group_ids;
  public CacheClusterIdList $cache_cluster_ids;
  public UpdateActionStatusList $update_action_status;
  public IntegerOptional $max_records;
  public string $service_update_name;
  public ServiceUpdateStatusList $service_update_status;
}

class ModifyReplicationGroupResult {
  public ReplicationGroup $replication_group;
}

class NodeGroupList {
}

class NodeSnapshotList {
}

class ReservedCacheNode {
  public string $product_description;
  public string $state;
  public string $reserved_cache_node_id;
  public string $reserved_cache_nodes_offering_id;
  public string $cache_node_type;
  public Double $usage_price;
  public int $cache_node_count;
  public string $offering_type;
  public RecurringChargeList $recurring_charges;
  public string $reservation_arn;
  public TStamp $start_time;
  public int $duration;
  public Double $fixed_price;
}

class AvailabilityZonesList {
}

class ClusterIdList {
}

class FailoverGlobalReplicationGroupMessage {
  public string $global_replication_group_id;
  public string $primary_region;
  public string $primary_replication_group_id;
}

class GlobalNodeGroupList {
}

class Subnet {
  public string $subnet_identifier;
  public AvailabilityZone $subnet_availability_zone;
}

class BatchStopUpdateActionMessage {
  public ReplicationGroupIdList $replication_group_ids;
  public CacheClusterIdList $cache_cluster_ids;
  public string $service_update_name;
}

class CacheEngineVersionMessage {
  public string $marker;
  public CacheEngineVersionList $cache_engine_versions;
}

class CacheSecurityGroupMembership {
  public string $cache_security_group_name;
  public string $status;
}

class DescribeCacheSecurityGroupsMessage {
  public string $cache_security_group_name;
  public IntegerOptional $max_records;
  public string $marker;
}

class DescribeServiceUpdatesMessage {
  public string $service_update_name;
  public ServiceUpdateStatusList $service_update_status;
  public IntegerOptional $max_records;
  public string $marker;
}

class InvalidParameterValueException {
  public AwsQueryErrorMessage $message;
}

class ParameterNameValue {
  public string $parameter_name;
  public string $parameter_value;
}

class SlotMigration {
  public Double $progress_percentage;
}

class ParameterNameValueList {
}

class RemoveReplicasList {
}

class UpdateActionResultsMessage {
  public ProcessedUpdateActionList $processed_update_actions;
  public UnprocessedUpdateActionList $unprocessed_update_actions;
}

class CreateReplicationGroupResult {
  public ReplicationGroup $replication_group;
}

class DescribeEngineDefaultParametersResult {
  public EngineDefaults $engine_defaults;
}

class Double {
}

class NodeGroupConfiguration {
  public AllowedNodeGroupId $node_group_id;
  public string $slots;
  public IntegerOptional $replica_count;
  public string $primary_availability_zone;
  public AvailabilityZonesList $replica_availability_zones;
}

class RegionalConfigurationList {
}

class ReservedCacheNodesOfferingNotFoundFault {
}

class SecurityGroupIdsList {
}

class SnapshotAlreadyExistsFault {
}

class ChangeType {
}

class DeleteGlobalReplicationGroupResult {
  public GlobalReplicationGroup $global_replication_group;
}

class ModifyCacheClusterMessage {
  public IntegerOptional $num_cache_nodes;
  public AZMode $az_mode;
  public PreferredAvailabilityZoneList $new_availability_zones;
  public AuthTokenUpdateStrategyType $auth_token_update_strategy;
  public string $cache_cluster_id;
  public string $preferred_maintenance_window;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $cache_node_type;
  public CacheNodeIdsList $cache_node_ids_to_remove;
  public CacheSecurityGroupNameList $cache_security_group_names;
  public SecurityGroupIdsList $security_group_ids;
  public string $notification_topic_status;
  public string $engine_version;
  public IntegerOptional $snapshot_retention_limit;
  public string $notification_topic_arn;
  public string $cache_parameter_group_name;
  public boolean $apply_immediately;
  public string $snapshot_window;
  public string $auth_token;
}

class TagList {
}

class InvalidGlobalReplicationGroupStateFault {
}

class PurchaseReservedCacheNodesOfferingMessage {
  public string $reserved_cache_nodes_offering_id;
  public string $reserved_cache_node_id;
  public IntegerOptional $cache_node_count;
}

class ReservedCacheNodeQuotaExceededFault {
}

class StartMigrationResponse {
  public ReplicationGroup $replication_group;
}

class DescribeCacheParameterGroupsMessage {
  public string $marker;
  public string $cache_parameter_group_name;
  public IntegerOptional $max_records;
}

class NoOperationFault {
}

class NodeGroupsToRemoveList {
}

class ProcessedUpdateAction {
  public string $replication_group_id;
  public string $cache_cluster_id;
  public string $service_update_name;
  public UpdateActionStatus $update_action_status;
}

class TStamp {
}

class DeleteReplicationGroupMessage {
  public string $replication_group_id;
  public BooleanOptional $retain_primary_cluster;
  public string $final_snapshot_identifier;
}

class DescribeSnapshotsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $show_node_group_config;
  public string $replication_group_id;
  public string $cache_cluster_id;
  public string $snapshot_name;
  public string $snapshot_source;
}

class SourceType {
}

class AuthorizeCacheSecurityGroupIngressResult {
  public CacheSecurityGroup $cache_security_group;
}

class CacheClusterList {
}

class DeleteCacheClusterResult {
  public CacheCluster $cache_cluster;
}

class DescribeCacheClustersMessage {
  public string $marker;
  public BooleanOptional $show_cache_node_info;
  public BooleanOptional $show_cache_clusters_not_in_replication_groups;
  public string $cache_cluster_id;
  public IntegerOptional $max_records;
}

class GlobalReplicationGroupMemberList {
}

class InsufficientCacheClusterCapacityFault {
}

class ListAllowedNodeTypeModificationsMessage {
  public string $cache_cluster_id;
  public string $replication_group_id;
}

class RebootCacheClusterResult {
  public CacheCluster $cache_cluster;
}

