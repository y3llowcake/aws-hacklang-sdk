<?hh // strict
namespace slack\aws\rds;

interface DocDB {
  public function DescribeDBClusterParameters(DescribeDBClusterParametersMessage) Awaitable<Errors\Result<DBClusterParameterGroupDetails>>;
  public function FailoverDBCluster(FailoverDBClusterMessage) Awaitable<Errors\Result<FailoverDBClusterResult>>;
  public function ModifyDBClusterParameterGroup(ModifyDBClusterParameterGroupMessage) Awaitable<Errors\Result<DBClusterParameterGroupNameMessage>>;
  public function StartDBCluster(StartDBClusterMessage) Awaitable<Errors\Result<StartDBClusterResult>>;
  public function StopDBCluster(StopDBClusterMessage) Awaitable<Errors\Result<StopDBClusterResult>>;
  public function DescribeDBClusterParameterGroups(DescribeDBClusterParameterGroupsMessage) Awaitable<Errors\Result<DBClusterParameterGroupsMessage>>;
  public function DescribeOrderableDBInstanceOptions(DescribeOrderableDBInstanceOptionsMessage) Awaitable<Errors\Result<OrderableDBInstanceOptionsMessage>>;
  public function DescribePendingMaintenanceActions(DescribePendingMaintenanceActionsMessage) Awaitable<Errors\Result<PendingMaintenanceActionsMessage>>;
  public function ListTagsForResource(ListTagsForResourceMessage) Awaitable<Errors\Result<TagListMessage>>;
  public function RestoreDBClusterFromSnapshot(RestoreDBClusterFromSnapshotMessage) Awaitable<Errors\Result<RestoreDBClusterFromSnapshotResult>>;
  public function RestoreDBClusterToPointInTime(RestoreDBClusterToPointInTimeMessage) Awaitable<Errors\Result<RestoreDBClusterToPointInTimeResult>>;
  public function DescribeCertificates(DescribeCertificatesMessage) Awaitable<Errors\Result<CertificateMessage>>;
  public function CreateDBCluster(CreateDBClusterMessage) Awaitable<Errors\Result<CreateDBClusterResult>>;
  public function DeleteDBClusterParameterGroup(DeleteDBClusterParameterGroupMessage) Awaitable<Errors\Error>;
  public function DeleteDBClusterSnapshot(DeleteDBClusterSnapshotMessage) Awaitable<Errors\Result<DeleteDBClusterSnapshotResult>>;
  public function DescribeDBClusters(DescribeDBClustersMessage) Awaitable<Errors\Result<DBClusterMessage>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage) Awaitable<Errors\Result<EventCategoriesMessage>>;
  public function ModifyDBClusterSnapshotAttribute(ModifyDBClusterSnapshotAttributeMessage) Awaitable<Errors\Result<ModifyDBClusterSnapshotAttributeResult>>;
  public function ApplyPendingMaintenanceAction(ApplyPendingMaintenanceActionMessage) Awaitable<Errors\Result<ApplyPendingMaintenanceActionResult>>;
  public function DescribeDBClusterSnapshots(DescribeDBClusterSnapshotsMessage) Awaitable<Errors\Result<DBClusterSnapshotMessage>>;
  public function DescribeDBEngineVersions(DescribeDBEngineVersionsMessage) Awaitable<Errors\Result<DBEngineVersionMessage>>;
  public function DescribeDBInstances(DescribeDBInstancesMessage) Awaitable<Errors\Result<DBInstanceMessage>>;
  public function DescribeDBSubnetGroups(DescribeDBSubnetGroupsMessage) Awaitable<Errors\Result<DBSubnetGroupMessage>>;
  public function ModifyDBInstance(ModifyDBInstanceMessage) Awaitable<Errors\Result<ModifyDBInstanceResult>>;
  public function CreateDBClusterParameterGroup(CreateDBClusterParameterGroupMessage) Awaitable<Errors\Result<CreateDBClusterParameterGroupResult>>;
  public function CreateDBInstance(CreateDBInstanceMessage) Awaitable<Errors\Result<CreateDBInstanceResult>>;
  public function CreateDBSubnetGroup(CreateDBSubnetGroupMessage) Awaitable<Errors\Result<CreateDBSubnetGroupResult>>;
  public function DeleteDBInstance(DeleteDBInstanceMessage) Awaitable<Errors\Result<DeleteDBInstanceResult>>;
  public function ModifyDBCluster(ModifyDBClusterMessage) Awaitable<Errors\Result<ModifyDBClusterResult>>;
  public function RebootDBInstance(RebootDBInstanceMessage) Awaitable<Errors\Result<RebootDBInstanceResult>>;
  public function ResetDBClusterParameterGroup(ResetDBClusterParameterGroupMessage) Awaitable<Errors\Result<DBClusterParameterGroupNameMessage>>;
  public function AddTagsToResource(AddTagsToResourceMessage) Awaitable<Errors\Error>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceMessage) Awaitable<Errors\Error>;
  public function ModifyDBSubnetGroup(ModifyDBSubnetGroupMessage) Awaitable<Errors\Result<ModifyDBSubnetGroupResult>>;
  public function DeleteDBSubnetGroup(DeleteDBSubnetGroupMessage) Awaitable<Errors\Error>;
  public function DescribeDBClusterSnapshotAttributes(DescribeDBClusterSnapshotAttributesMessage) Awaitable<Errors\Result<DescribeDBClusterSnapshotAttributesResult>>;
  public function DescribeEvents(DescribeEventsMessage) Awaitable<Errors\Result<EventsMessage>>;
  public function CopyDBClusterSnapshot(CopyDBClusterSnapshotMessage) Awaitable<Errors\Result<CopyDBClusterSnapshotResult>>;
  public function CreateDBClusterSnapshot(CreateDBClusterSnapshotMessage) Awaitable<Errors\Result<CreateDBClusterSnapshotResult>>;
  public function DeleteDBCluster(DeleteDBClusterMessage) Awaitable<Errors\Result<DeleteDBClusterResult>>;
  public function DescribeEngineDefaultClusterParameters(DescribeEngineDefaultClusterParametersMessage) Awaitable<Errors\Result<DescribeEngineDefaultClusterParametersResult>>;
  public function CopyDBClusterParameterGroup(CopyDBClusterParameterGroupMessage) Awaitable<Errors\Result<CopyDBClusterParameterGroupResult>>;
}

class DescribeDBClusterParameterGroupsMessage {
  public string $db_cluster_parameter_group_name;
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
}

class InsufficientStorageClusterCapacityFault {
}

class ApplyMethod {
}

class CreateDBClusterResult {
  public DBCluster $db_cluster;
}

class CreateDBSubnetGroupMessage {
  public string $db_subnet_group_name;
  public string $db_subnet_group_description;
  public SubnetIdentifierList $subnet_ids;
  public TagList $tags;
}

class DBClusterParameterGroupsMessage {
  public string $marker;
  public DBClusterParameterGroupList $db_cluster_parameter_groups;
}

class DBClusterSnapshotNotFoundFault {
}

class RestoreDBClusterToPointInTimeMessage {
  public TagList $tags;
  public string $kms_key_id;
  public BooleanOptional $deletion_protection;
  public boolean $use_latest_restorable_time;
  public IntegerOptional $port;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
  public string $db_subnet_group_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public string $db_cluster_identifier;
  public string $source_db_cluster_identifier;
  public TStamp $restore_to_time;
}

class StorageQuotaExceededFault {
}

class DeleteDBClusterSnapshotResult {
  public DBClusterSnapshot $db_cluster_snapshot;
}

class DeleteDBSubnetGroupMessage {
  public string $db_subnet_group_name;
}

class KeyList {
}

class ModifyDBSubnetGroupMessage {
  public SubnetIdentifierList $subnet_ids;
  public string $db_subnet_group_name;
  public string $db_subnet_group_description;
}

class OrderableDBInstanceOption {
  public string $db_instance_class;
  public string $license_model;
  public AvailabilityZoneList $availability_zones;
  public boolean $vpc;
  public string $engine;
  public string $engine_version;
}

class DBSubnetQuotaExceededFault {
}

class EventCategoriesMap {
  public string $source_type;
  public EventCategoriesList $event_categories;
}

class InvalidDBParameterGroupStateFault {
}

class DBClusterMemberList {
}

class DBEngineVersionList {
}

class DBInstanceList {
}

class DBInstanceMessage {
  public string $marker;
  public DBInstanceList $db_instances;
}

class DBParameterGroupNotFoundFault {
}

class PendingMaintenanceActions {
}

class SourceType {
}

class CreateDBSubnetGroupResult {
  public DBSubnetGroup $db_subnet_group;
}

class DBClusterParameterGroupNotFoundFault {
}

class DBClusterSnapshotAlreadyExistsFault {
}

class DescribeDBClusterSnapshotsMessage {
  public string $snapshot_type;
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
  public boolean $include_shared;
  public boolean $include_public;
  public string $db_cluster_identifier;
  public string $db_cluster_snapshot_identifier;
}

class InvalidDBSecurityGroupStateFault {
}

class DBSubnetGroupNotFoundFault {
}

class DescribeDBClusterSnapshotAttributesResult {
  public DBClusterSnapshotAttributesResult $db_cluster_snapshot_attributes_result;
}

class EngineDefaults {
  public string $db_parameter_group_family;
  public string $marker;
  public ParametersList $parameters;
}

class VpcSecurityGroupIdList {
}

class EventsMessage {
  public string $marker;
  public EventList $events;
}

class PendingCloudwatchLogsExports {
  public LogTypeList $log_types_to_enable;
  public LogTypeList $log_types_to_disable;
}

class RestoreDBClusterFromSnapshotMessage {
  public AvailabilityZones $availability_zones;
  public string $db_cluster_identifier;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public TagList $tags;
  public string $kms_key_id;
  public string $snapshot_identifier;
  public string $engine;
  public string $engine_version;
  public IntegerOptional $port;
  public string $db_subnet_group_name;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
  public BooleanOptional $deletion_protection;
}

class DescribeDBInstancesMessage {
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
  public string $db_instance_identifier;
}

class KMSKeyNotAccessibleFault {
}

class DBClusterParameterGroup {
  public string $db_parameter_group_family;
  public string $description;
  public string $db_cluster_parameter_group_arn;
  public string $db_cluster_parameter_group_name;
}

class DBEngineVersion {
  public string $engine_version;
  public string $db_parameter_group_family;
  public string $db_engine_description;
  public string $db_engine_version_description;
  public ValidUpgradeTargetList $valid_upgrade_target;
  public LogTypeList $exportable_log_types;
  public boolean $supports_log_exports_to_cloudwatch_logs;
  public string $engine;
}

class DBParameterGroupQuotaExceededFault {
}

class DBSubnetGroupAlreadyExistsFault {
}

class DescribeDBClusterSnapshotAttributesMessage {
  public string $db_cluster_snapshot_identifier;
}

class FilterValueList {
}

class InvalidSubnet {
}

class PendingMaintenanceActionsMessage {
  public string $marker;
  public PendingMaintenanceActions $pending_maintenance_actions;
}

class SharedSnapshotQuotaExceededFault {
}

class TagList {
}

class DBInstance {
  public string $db_instance_status;
  public string $db_cluster_identifier;
  public string $dbi_resource_id;
  public LogTypeList $enabled_cloudwatch_logs_exports;
  public boolean $publicly_accessible;
  public string $db_instance_class;
  public int $backup_retention_period;
  public VpcSecurityGroupMembershipList $vpc_security_groups;
  public TStamp $latest_restorable_time;
  public string $engine_version;
  public DBInstanceStatusInfoList $status_infos;
  public boolean $storage_encrypted;
  public string $kms_key_id;
  public Endpoint $endpoint;
  public TStamp $instance_create_time;
  public DBSubnetGroup $db_subnet_group;
  public string $preferred_maintenance_window;
  public PendingModifiedValues $pending_modified_values;
  public string $ca_certificate_identifier;
  public IntegerOptional $promotion_tier;
  public string $db_instance_arn;
  public string $db_instance_identifier;
  public string $engine;
  public string $preferred_backup_window;
  public string $availability_zone;
  public boolean $auto_minor_version_upgrade;
}

class DBInstanceAlreadyExistsFault {
}

class DescribePendingMaintenanceActionsMessage {
  public string $resource_identifier;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class RebootDBInstanceMessage {
  public string $db_instance_identifier;
  public BooleanOptional $force_failover;
}

class RebootDBInstanceResult {
  public DBInstance $db_instance;
}

class Tag {
  public string $key;
  public string $value;
}

class DBClusterQuotaExceededFault {
}

class DBSecurityGroupNotFoundFault {
}

class FailoverDBClusterMessage {
  public string $db_cluster_identifier;
  public string $target_db_instance_identifier;
}

class IntegerOptional {
}

class PendingMaintenanceActionDetails {
}

class AuthorizationNotFoundFault {
}

class BooleanOptional {
}

class DBClusterParameterGroupDetails {
  public ParametersList $parameters;
  public string $marker;
}

class DeleteDBInstanceResult {
  public DBInstance $db_instance;
}

class InvalidDBInstanceStateFault {
}

class Subnet {
  public string $subnet_identifier;
  public AvailabilityZone $subnet_availability_zone;
  public string $subnet_status;
}

class SubnetAlreadyInUse {
}

class DBClusterMessage {
  public DBClusterList $db_clusters;
  public string $marker;
}

class DBClusterRoles {
}

class EventCategoriesMessage {
  public EventCategoriesMapList $event_categories_map_list;
}

class InvalidDBSubnetStateFault {
}

class ModifyDBInstanceMessage {
  public string $ca_certificate_identifier;
  public IntegerOptional $promotion_tier;
  public string $db_instance_identifier;
  public string $db_instance_class;
  public boolean $apply_immediately;
  public string $preferred_maintenance_window;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $new_db_instance_identifier;
}

class EventCategoriesMapList {
}

class InsufficientDBInstanceCapacityFault {
}

class ModifyDBClusterMessage {
  public string $preferred_maintenance_window;
  public BooleanOptional $deletion_protection;
  public string $db_cluster_identifier;
  public string $new_db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
  public string $master_user_password;
  public string $preferred_backup_window;
  public boolean $apply_immediately;
  public IntegerOptional $backup_retention_period;
  public IntegerOptional $port;
  public CloudwatchLogsExportConfiguration $cloudwatch_logs_export_configuration;
  public string $engine_version;
}

class DBClusterAlreadyExistsFault {
}

class DBParameterGroupAlreadyExistsFault {
}

class DBSnapshotNotFoundFault {
}

class DeleteDBClusterSnapshotMessage {
  public string $db_cluster_snapshot_identifier;
}

class DescribeEngineDefaultClusterParametersResult {
  public EngineDefaults $engine_defaults;
}

class InvalidDBClusterStateFault {
}

class ModifyDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
  public ParametersList $parameters;
}

class RestoreDBClusterFromSnapshotResult {
  public DBCluster $db_cluster;
}

class CertificateMessage {
  public CertificateList $certificates;
  public string $marker;
}

class CopyDBClusterParameterGroupResult {
  public DBClusterParameterGroup $db_cluster_parameter_group;
}

class CopyDBClusterSnapshotResult {
  public DBClusterSnapshot $db_cluster_snapshot;
}

class DeleteDBClusterMessage {
  public string $db_cluster_identifier;
  public boolean $skip_final_snapshot;
  public string $final_db_snapshot_identifier;
}

class DescribeDBClustersMessage {
  public string $db_cluster_identifier;
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
}

class String {
}

class ApplyPendingMaintenanceActionMessage {
  public string $resource_identifier;
  public string $apply_action;
  public string $opt_in_type;
}

class CertificateList {
}

class EventCategoriesList {
}

class OrderableDBInstanceOptionsList {
}

class ParametersList {
}

class ModifyDBClusterSnapshotAttributeMessage {
  public string $db_cluster_snapshot_identifier;
  public string $attribute_name;
  public AttributeValueList $values_to_add;
  public AttributeValueList $values_to_remove;
}

class ModifyDBClusterSnapshotAttributeResult {
  public DBClusterSnapshotAttributesResult $db_cluster_snapshot_attributes_result;
}

class Parameter {
  public string $parameter_name;
  public string $parameter_value;
  public boolean $is_modifiable;
  public string $minimum_engine_version;
  public ApplyMethod $apply_method;
  public string $description;
  public string $source;
  public string $apply_type;
  public string $data_type;
  public string $allowed_values;
}

class AvailabilityZone {
  public string $name;
}

class CreateDBInstanceMessage {
  public string $engine;
  public TagList $tags;
  public string $db_instance_class;
  public string $availability_zone;
  public string $preferred_maintenance_window;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $db_cluster_identifier;
  public IntegerOptional $promotion_tier;
  public string $db_instance_identifier;
}

class DBCluster {
  public AvailabilityZones $availability_zones;
  public string $db_cluster_parameter_group;
  public DBClusterMemberList $db_cluster_members;
  public string $db_cluster_resource_id;
  public string $db_subnet_group;
  public TStamp $earliest_restorable_time;
  public string $engine;
  public string $engine_version;
  public TStamp $latest_restorable_time;
  public string $status;
  public string $percent_progress;
  public IntegerOptional $port;
  public LogTypeList $enabled_cloudwatch_logs_exports;
  public string $preferred_maintenance_window;
  public boolean $storage_encrypted;
  public string $db_cluster_arn;
  public DBClusterRoles $associated_roles;
  public boolean $deletion_protection;
  public IntegerOptional $backup_retention_period;
  public boolean $multi_az;
  public VpcSecurityGroupMembershipList $vpc_security_groups;
  public string $reader_endpoint;
  public string $hosted_zone_id;
  public TStamp $cluster_create_time;
  public string $db_cluster_identifier;
  public string $endpoint;
  public string $master_username;
  public string $preferred_backup_window;
  public string $kms_key_id;
}

class DBClusterSnapshot {
  public string $kms_key_id;
  public string $engine;
  public string $status;
  public boolean $storage_encrypted;
  public string $snapshot_type;
  public int $percent_progress;
  public TStamp $snapshot_create_time;
  public string $vpc_id;
  public TStamp $cluster_create_time;
  public string $db_cluster_snapshot_arn;
  public string $source_db_cluster_snapshot_arn;
  public AvailabilityZones $availability_zones;
  public string $db_cluster_snapshot_identifier;
  public string $master_username;
  public string $engine_version;
  public string $db_cluster_identifier;
  public int $port;
}

class InstanceQuotaExceededFault {
}

class StopDBClusterMessage {
  public string $db_cluster_identifier;
}

class ApplyPendingMaintenanceActionResult {
  public ResourcePendingMaintenanceActions $resource_pending_maintenance_actions;
}

class CopyDBClusterSnapshotMessage {
  public string $pre_signed_url;
  public BooleanOptional $copy_tags;
  public TagList $tags;
  public string $source_db_cluster_snapshot_identifier;
  public string $target_db_cluster_snapshot_identifier;
  public string $kms_key_id;
}

class DBInstanceStatusInfo {
  public string $status_type;
  public boolean $normal;
  public string $status;
  public string $message;
}

class OrderableDBInstanceOptionsMessage {
  public OrderableDBInstanceOptionsList $orderable_db_instance_options;
  public string $marker;
}

class DBSubnetGroupQuotaExceededFault {
}

class ModifyDBInstanceResult {
  public DBInstance $db_instance;
}

class ResetDBClusterParameterGroupMessage {
  public boolean $reset_all_parameters;
  public ParametersList $parameters;
  public string $db_cluster_parameter_group_name;
}

class EventList {
}

class FailoverDBClusterResult {
  public DBCluster $db_cluster;
}

class CertificateNotFoundFault {
}

class CloudwatchLogsExportConfiguration {
  public LogTypeList $enable_log_types;
  public LogTypeList $disable_log_types;
}

class DBClusterParameterGroupNameMessage {
  public string $db_cluster_parameter_group_name;
}

class DBSubnetGroupMessage {
  public string $marker;
  public DBSubnetGroups $db_subnet_groups;
}

class Event {
  public string $message;
  public EventCategoriesList $event_categories;
  public TStamp $date;
  public string $source_arn;
  public string $source_identifier;
  public SourceType $source_type;
}

class InvalidDBSubnetGroupStateFault {
}

class SubnetList {
}

class Certificate {
  public string $certificate_identifier;
  public string $certificate_type;
  public string $thumbprint;
  public TStamp $valid_from;
  public TStamp $valid_till;
  public string $certificate_arn;
}

class DBClusterRole {
  public string $role_arn;
  public string $status;
}

class DBSubnetGroups {
}

class DescribeDBEngineVersionsMessage {
  public string $engine;
  public string $marker;
  public BooleanOptional $list_supported_character_sets;
  public BooleanOptional $list_supported_timezones;
  public string $engine_version;
  public string $db_parameter_group_family;
  public FilterList $filters;
  public IntegerOptional $max_records;
  public boolean $default_only;
}

class DescribeOrderableDBInstanceOptionsMessage {
  public string $marker;
  public string $engine;
  public string $engine_version;
  public string $db_instance_class;
  public string $license_model;
  public BooleanOptional $vpc;
  public FilterList $filters;
  public IntegerOptional $max_records;
}

class AddTagsToResourceMessage {
  public string $resource_name;
  public TagList $tags;
}

class AvailabilityZoneList {
}

class AvailabilityZones {
}

class DBSubnetGroupDoesNotCoverEnoughAZs {
}

class DescribeEventCategoriesMessage {
  public string $source_type;
  public FilterList $filters;
}

class LogTypeList {
}

class SubnetIdentifierList {
}

class DBClusterSnapshotAttribute {
  public string $attribute_name;
  public AttributeValueList $attribute_values;
}

class DBClusterSnapshotAttributeList {
}

class DBInstanceNotFoundFault {
}

class DeleteDBInstanceMessage {
  public string $db_instance_identifier;
}

class ListTagsForResourceMessage {
  public string $resource_name;
  public FilterList $filters;
}

class CreateDBClusterSnapshotResult {
  public DBClusterSnapshot $db_cluster_snapshot;
}

class Integer {
}

class ResourcePendingMaintenanceActions {
  public string $resource_identifier;
  public PendingMaintenanceActionDetails $pending_maintenance_action_details;
}

class StartDBClusterResult {
  public DBCluster $db_cluster;
}

class CreateDBClusterMessage {
  public IntegerOptional $port;
  public string $preferred_backup_window;
  public TagList $tags;
  public AvailabilityZones $availability_zones;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
  public string $preferred_maintenance_window;
  public BooleanOptional $storage_encrypted;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public string $db_cluster_identifier;
  public string $engine_version;
  public BooleanOptional $deletion_protection;
  public string $engine;
  public string $kms_key_id;
  public string $db_subnet_group_name;
  public string $master_username;
  public string $master_user_password;
  public IntegerOptional $backup_retention_period;
  public string $db_cluster_parameter_group_name;
}

class CreateDBClusterParameterGroupMessage {
  public string $description;
  public TagList $tags;
  public string $db_cluster_parameter_group_name;
  public string $db_parameter_group_family;
}

class DBEngineVersionMessage {
  public string $marker;
  public DBEngineVersionList $db_engine_versions;
}

class Endpoint {
  public string $address;
  public int $port;
  public string $hosted_zone_id;
}

class CreateDBInstanceResult {
  public DBInstance $db_instance;
}

class DBClusterList {
}

class DBClusterSnapshotMessage {
  public string $marker;
  public DBClusterSnapshotList $db_cluster_snapshots;
}

class InvalidDBClusterSnapshotStateFault {
}

class DBInstanceStatusInfoList {
}

class DeleteDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
}

class DescribeEngineDefaultClusterParametersMessage {
  public string $marker;
  public string $db_parameter_group_family;
  public FilterList $filters;
  public IntegerOptional $max_records;
}

class Filter {
  public string $name;
  public FilterValueList $values;
}

class InsufficientDBClusterCapacityFault {
}

class RemoveTagsFromResourceMessage {
  public string $resource_name;
  public KeyList $tag_keys;
}

class Boolean {
}

class DBClusterMember {
  public string $db_instance_identifier;
  public boolean $is_cluster_writer;
  public string $db_cluster_parameter_group_status;
  public IntegerOptional $promotion_tier;
}

class DBClusterNotFoundFault {
}

class DBClusterSnapshotList {
}

class DBSnapshotAlreadyExistsFault {
}

class TagListMessage {
  public TagList $tag_list;
}

class VpcSecurityGroupMembership {
  public string $vpc_security_group_id;
  public string $status;
}

class DBClusterSnapshotAttributesResult {
  public string $db_cluster_snapshot_identifier;
  public DBClusterSnapshotAttributeList $db_cluster_snapshot_attributes;
}

class DescribeCertificatesMessage {
  public string $certificate_identifier;
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
}

class PendingMaintenanceAction {
  public TStamp $current_apply_date;
  public string $description;
  public string $action;
  public TStamp $auto_applied_after_date;
  public TStamp $forced_apply_date;
  public string $opt_in_status;
}

class StorageTypeNotSupportedFault {
}

class TStamp {
}

class AttributeValueList {
}

class DescribeDBSubnetGroupsMessage {
  public string $marker;
  public string $db_subnet_group_name;
  public FilterList $filters;
  public IntegerOptional $max_records;
}

class InvalidVPCNetworkStateFault {
}

class ModifyDBClusterResult {
  public DBCluster $db_cluster;
}

class PendingModifiedValues {
  public string $master_user_password;
  public string $engine_version;
  public string $license_model;
  public string $db_instance_identifier;
  public IntegerOptional $port;
  public IntegerOptional $backup_retention_period;
  public BooleanOptional $multi_az;
  public string $db_subnet_group_name;
  public PendingCloudwatchLogsExports $pending_cloudwatch_logs_exports;
  public string $db_instance_class;
  public IntegerOptional $allocated_storage;
  public IntegerOptional $iops;
  public string $storage_type;
  public string $ca_certificate_identifier;
}

class RestoreDBClusterToPointInTimeResult {
  public DBCluster $db_cluster;
}

class SnapshotQuotaExceededFault {
}

class CreateDBClusterParameterGroupResult {
  public DBClusterParameterGroup $db_cluster_parameter_group;
}

class DBClusterParameterGroupList {
}

class DeleteDBClusterResult {
  public DBCluster $db_cluster;
}

class DescribeDBClusterParametersMessage {
  public string $db_cluster_parameter_group_name;
  public string $source;
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
}

class ModifyDBSubnetGroupResult {
  public DBSubnetGroup $db_subnet_group;
}

class StartDBClusterMessage {
  public string $db_cluster_identifier;
}

class CreateDBClusterSnapshotMessage {
  public string $db_cluster_identifier;
  public TagList $tags;
  public string $db_cluster_snapshot_identifier;
}

class InvalidDBSnapshotStateFault {
}

class UpgradeTarget {
  public string $description;
  public boolean $auto_upgrade;
  public boolean $is_major_version_upgrade;
  public string $engine;
  public string $engine_version;
}

class ValidUpgradeTargetList {
}

class VpcSecurityGroupMembershipList {
}

class InvalidRestoreFault {
}

class ResourceNotFoundFault {
}

class StopDBClusterResult {
  public DBCluster $db_cluster;
}

class CopyDBClusterParameterGroupMessage {
  public string $target_db_cluster_parameter_group_identifier;
  public string $target_db_cluster_parameter_group_description;
  public TagList $tags;
  public string $source_db_cluster_parameter_group_identifier;
}

class DBSubnetGroup {
  public string $db_subnet_group_name;
  public string $db_subnet_group_description;
  public string $vpc_id;
  public string $subnet_group_status;
  public SubnetList $subnets;
  public string $db_subnet_group_arn;
}

class DBUpgradeDependencyFailureFault {
}

class DescribeEventsMessage {
  public string $source_identifier;
  public IntegerOptional $duration;
  public EventCategoriesList $event_categories;
  public FilterList $filters;
  public IntegerOptional $max_records;
  public SourceType $source_type;
  public TStamp $start_time;
  public TStamp $end_time;
  public string $marker;
}

class FilterList {
}

