<?hh // strict
namespace slack\aws\rds;

interface RDS {
  public function AddRoleToDBCluster(AddRoleToDBClusterMessage): Awaitable<Errors\Error>;
  public function AddRoleToDBInstance(AddRoleToDBInstanceMessage): Awaitable<Errors\Error>;
  public function AddSourceIdentifierToSubscription(AddSourceIdentifierToSubscriptionMessage): Awaitable<Errors\Result<AddSourceIdentifierToSubscriptionResult>>;
  public function AddTagsToResource(AddTagsToResourceMessage): Awaitable<Errors\Error>;
  public function ApplyPendingMaintenanceAction(ApplyPendingMaintenanceActionMessage): Awaitable<Errors\Result<ApplyPendingMaintenanceActionResult>>;
  public function AuthorizeDBSecurityGroupIngress(AuthorizeDBSecurityGroupIngressMessage): Awaitable<Errors\Result<AuthorizeDBSecurityGroupIngressResult>>;
  public function BacktrackDBCluster(BacktrackDBClusterMessage): Awaitable<Errors\Result<DBClusterBacktrack>>;
  public function CancelExportTask(CancelExportTaskMessage): Awaitable<Errors\Result<ExportTask>>;
  public function CopyDBClusterParameterGroup(CopyDBClusterParameterGroupMessage): Awaitable<Errors\Result<CopyDBClusterParameterGroupResult>>;
  public function CopyDBClusterSnapshot(CopyDBClusterSnapshotMessage): Awaitable<Errors\Result<CopyDBClusterSnapshotResult>>;
  public function CopyDBParameterGroup(CopyDBParameterGroupMessage): Awaitable<Errors\Result<CopyDBParameterGroupResult>>;
  public function CopyDBSnapshot(CopyDBSnapshotMessage): Awaitable<Errors\Result<CopyDBSnapshotResult>>;
  public function CopyOptionGroup(CopyOptionGroupMessage): Awaitable<Errors\Result<CopyOptionGroupResult>>;
  public function CreateCustomAvailabilityZone(CreateCustomAvailabilityZoneMessage): Awaitable<Errors\Result<CreateCustomAvailabilityZoneResult>>;
  public function CreateDBCluster(CreateDBClusterMessage): Awaitable<Errors\Result<CreateDBClusterResult>>;
  public function CreateDBClusterEndpoint(CreateDBClusterEndpointMessage): Awaitable<Errors\Result<DBClusterEndpoint>>;
  public function CreateDBClusterParameterGroup(CreateDBClusterParameterGroupMessage): Awaitable<Errors\Result<CreateDBClusterParameterGroupResult>>;
  public function CreateDBClusterSnapshot(CreateDBClusterSnapshotMessage): Awaitable<Errors\Result<CreateDBClusterSnapshotResult>>;
  public function CreateDBInstance(CreateDBInstanceMessage): Awaitable<Errors\Result<CreateDBInstanceResult>>;
  public function CreateDBInstanceReadReplica(CreateDBInstanceReadReplicaMessage): Awaitable<Errors\Result<CreateDBInstanceReadReplicaResult>>;
  public function CreateDBParameterGroup(CreateDBParameterGroupMessage): Awaitable<Errors\Result<CreateDBParameterGroupResult>>;
  public function CreateDBProxy(CreateDBProxyRequest): Awaitable<Errors\Result<CreateDBProxyResponse>>;
  public function CreateDBSecurityGroup(CreateDBSecurityGroupMessage): Awaitable<Errors\Result<CreateDBSecurityGroupResult>>;
  public function CreateDBSnapshot(CreateDBSnapshotMessage): Awaitable<Errors\Result<CreateDBSnapshotResult>>;
  public function CreateDBSubnetGroup(CreateDBSubnetGroupMessage): Awaitable<Errors\Result<CreateDBSubnetGroupResult>>;
  public function CreateEventSubscription(CreateEventSubscriptionMessage): Awaitable<Errors\Result<CreateEventSubscriptionResult>>;
  public function CreateGlobalCluster(CreateGlobalClusterMessage): Awaitable<Errors\Result<CreateGlobalClusterResult>>;
  public function CreateOptionGroup(CreateOptionGroupMessage): Awaitable<Errors\Result<CreateOptionGroupResult>>;
  public function DeleteCustomAvailabilityZone(DeleteCustomAvailabilityZoneMessage): Awaitable<Errors\Result<DeleteCustomAvailabilityZoneResult>>;
  public function DeleteDBCluster(DeleteDBClusterMessage): Awaitable<Errors\Result<DeleteDBClusterResult>>;
  public function DeleteDBClusterEndpoint(DeleteDBClusterEndpointMessage): Awaitable<Errors\Result<DBClusterEndpoint>>;
  public function DeleteDBClusterParameterGroup(DeleteDBClusterParameterGroupMessage): Awaitable<Errors\Error>;
  public function DeleteDBClusterSnapshot(DeleteDBClusterSnapshotMessage): Awaitable<Errors\Result<DeleteDBClusterSnapshotResult>>;
  public function DeleteDBInstance(DeleteDBInstanceMessage): Awaitable<Errors\Result<DeleteDBInstanceResult>>;
  public function DeleteDBInstanceAutomatedBackup(DeleteDBInstanceAutomatedBackupMessage): Awaitable<Errors\Result<DeleteDBInstanceAutomatedBackupResult>>;
  public function DeleteDBParameterGroup(DeleteDBParameterGroupMessage): Awaitable<Errors\Error>;
  public function DeleteDBProxy(DeleteDBProxyRequest): Awaitable<Errors\Result<DeleteDBProxyResponse>>;
  public function DeleteDBSecurityGroup(DeleteDBSecurityGroupMessage): Awaitable<Errors\Error>;
  public function DeleteDBSnapshot(DeleteDBSnapshotMessage): Awaitable<Errors\Result<DeleteDBSnapshotResult>>;
  public function DeleteDBSubnetGroup(DeleteDBSubnetGroupMessage): Awaitable<Errors\Error>;
  public function DeleteEventSubscription(DeleteEventSubscriptionMessage): Awaitable<Errors\Result<DeleteEventSubscriptionResult>>;
  public function DeleteGlobalCluster(DeleteGlobalClusterMessage): Awaitable<Errors\Result<DeleteGlobalClusterResult>>;
  public function DeleteInstallationMedia(DeleteInstallationMediaMessage): Awaitable<Errors\Result<InstallationMedia>>;
  public function DeleteOptionGroup(DeleteOptionGroupMessage): Awaitable<Errors\Error>;
  public function DeregisterDBProxyTargets(DeregisterDBProxyTargetsRequest): Awaitable<Errors\Result<DeregisterDBProxyTargetsResponse>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesMessage): Awaitable<Errors\Result<AccountAttributesMessage>>;
  public function DescribeCertificates(DescribeCertificatesMessage): Awaitable<Errors\Result<CertificateMessage>>;
  public function DescribeCustomAvailabilityZones(DescribeCustomAvailabilityZonesMessage): Awaitable<Errors\Result<CustomAvailabilityZoneMessage>>;
  public function DescribeDBClusterBacktracks(DescribeDBClusterBacktracksMessage): Awaitable<Errors\Result<DBClusterBacktrackMessage>>;
  public function DescribeDBClusterEndpoints(DescribeDBClusterEndpointsMessage): Awaitable<Errors\Result<DBClusterEndpointMessage>>;
  public function DescribeDBClusterParameterGroups(DescribeDBClusterParameterGroupsMessage): Awaitable<Errors\Result<DBClusterParameterGroupsMessage>>;
  public function DescribeDBClusterParameters(DescribeDBClusterParametersMessage): Awaitable<Errors\Result<DBClusterParameterGroupDetails>>;
  public function DescribeDBClusterSnapshotAttributes(DescribeDBClusterSnapshotAttributesMessage): Awaitable<Errors\Result<DescribeDBClusterSnapshotAttributesResult>>;
  public function DescribeDBClusterSnapshots(DescribeDBClusterSnapshotsMessage): Awaitable<Errors\Result<DBClusterSnapshotMessage>>;
  public function DescribeDBClusters(DescribeDBClustersMessage): Awaitable<Errors\Result<DBClusterMessage>>;
  public function DescribeDBEngineVersions(DescribeDBEngineVersionsMessage): Awaitable<Errors\Result<DBEngineVersionMessage>>;
  public function DescribeDBInstanceAutomatedBackups(DescribeDBInstanceAutomatedBackupsMessage): Awaitable<Errors\Result<DBInstanceAutomatedBackupMessage>>;
  public function DescribeDBInstances(DescribeDBInstancesMessage): Awaitable<Errors\Result<DBInstanceMessage>>;
  public function DescribeDBLogFiles(DescribeDBLogFilesMessage): Awaitable<Errors\Result<DescribeDBLogFilesResponse>>;
  public function DescribeDBParameterGroups(DescribeDBParameterGroupsMessage): Awaitable<Errors\Result<DBParameterGroupsMessage>>;
  public function DescribeDBParameters(DescribeDBParametersMessage): Awaitable<Errors\Result<DBParameterGroupDetails>>;
  public function DescribeDBProxies(DescribeDBProxiesRequest): Awaitable<Errors\Result<DescribeDBProxiesResponse>>;
  public function DescribeDBProxyTargetGroups(DescribeDBProxyTargetGroupsRequest): Awaitable<Errors\Result<DescribeDBProxyTargetGroupsResponse>>;
  public function DescribeDBProxyTargets(DescribeDBProxyTargetsRequest): Awaitable<Errors\Result<DescribeDBProxyTargetsResponse>>;
  public function DescribeDBSecurityGroups(DescribeDBSecurityGroupsMessage): Awaitable<Errors\Result<DBSecurityGroupMessage>>;
  public function DescribeDBSnapshotAttributes(DescribeDBSnapshotAttributesMessage): Awaitable<Errors\Result<DescribeDBSnapshotAttributesResult>>;
  public function DescribeDBSnapshots(DescribeDBSnapshotsMessage): Awaitable<Errors\Result<DBSnapshotMessage>>;
  public function DescribeDBSubnetGroups(DescribeDBSubnetGroupsMessage): Awaitable<Errors\Result<DBSubnetGroupMessage>>;
  public function DescribeEngineDefaultClusterParameters(DescribeEngineDefaultClusterParametersMessage): Awaitable<Errors\Result<DescribeEngineDefaultClusterParametersResult>>;
  public function DescribeEngineDefaultParameters(DescribeEngineDefaultParametersMessage): Awaitable<Errors\Result<DescribeEngineDefaultParametersResult>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage): Awaitable<Errors\Result<EventCategoriesMessage>>;
  public function DescribeEventSubscriptions(DescribeEventSubscriptionsMessage): Awaitable<Errors\Result<EventSubscriptionsMessage>>;
  public function DescribeEvents(DescribeEventsMessage): Awaitable<Errors\Result<EventsMessage>>;
  public function DescribeExportTasks(DescribeExportTasksMessage): Awaitable<Errors\Result<ExportTasksMessage>>;
  public function DescribeGlobalClusters(DescribeGlobalClustersMessage): Awaitable<Errors\Result<GlobalClustersMessage>>;
  public function DescribeInstallationMedia(DescribeInstallationMediaMessage): Awaitable<Errors\Result<InstallationMediaMessage>>;
  public function DescribeOptionGroupOptions(DescribeOptionGroupOptionsMessage): Awaitable<Errors\Result<OptionGroupOptionsMessage>>;
  public function DescribeOptionGroups(DescribeOptionGroupsMessage): Awaitable<Errors\Result<OptionGroups>>;
  public function DescribeOrderableDBInstanceOptions(DescribeOrderableDBInstanceOptionsMessage): Awaitable<Errors\Result<OrderableDBInstanceOptionsMessage>>;
  public function DescribePendingMaintenanceActions(DescribePendingMaintenanceActionsMessage): Awaitable<Errors\Result<PendingMaintenanceActionsMessage>>;
  public function DescribeReservedDBInstances(DescribeReservedDBInstancesMessage): Awaitable<Errors\Result<ReservedDBInstanceMessage>>;
  public function DescribeReservedDBInstancesOfferings(DescribeReservedDBInstancesOfferingsMessage): Awaitable<Errors\Result<ReservedDBInstancesOfferingMessage>>;
  public function DescribeSourceRegions(DescribeSourceRegionsMessage): Awaitable<Errors\Result<SourceRegionMessage>>;
  public function DescribeValidDBInstanceModifications(DescribeValidDBInstanceModificationsMessage): Awaitable<Errors\Result<DescribeValidDBInstanceModificationsResult>>;
  public function DownloadDBLogFilePortion(DownloadDBLogFilePortionMessage): Awaitable<Errors\Result<DownloadDBLogFilePortionDetails>>;
  public function FailoverDBCluster(FailoverDBClusterMessage): Awaitable<Errors\Result<FailoverDBClusterResult>>;
  public function ImportInstallationMedia(ImportInstallationMediaMessage): Awaitable<Errors\Result<InstallationMedia>>;
  public function ListTagsForResource(ListTagsForResourceMessage): Awaitable<Errors\Result<TagListMessage>>;
  public function ModifyCertificates(ModifyCertificatesMessage): Awaitable<Errors\Result<ModifyCertificatesResult>>;
  public function ModifyCurrentDBClusterCapacity(ModifyCurrentDBClusterCapacityMessage): Awaitable<Errors\Result<DBClusterCapacityInfo>>;
  public function ModifyDBCluster(ModifyDBClusterMessage): Awaitable<Errors\Result<ModifyDBClusterResult>>;
  public function ModifyDBClusterEndpoint(ModifyDBClusterEndpointMessage): Awaitable<Errors\Result<DBClusterEndpoint>>;
  public function ModifyDBClusterParameterGroup(ModifyDBClusterParameterGroupMessage): Awaitable<Errors\Result<DBClusterParameterGroupNameMessage>>;
  public function ModifyDBClusterSnapshotAttribute(ModifyDBClusterSnapshotAttributeMessage): Awaitable<Errors\Result<ModifyDBClusterSnapshotAttributeResult>>;
  public function ModifyDBInstance(ModifyDBInstanceMessage): Awaitable<Errors\Result<ModifyDBInstanceResult>>;
  public function ModifyDBParameterGroup(ModifyDBParameterGroupMessage): Awaitable<Errors\Result<DBParameterGroupNameMessage>>;
  public function ModifyDBProxy(ModifyDBProxyRequest): Awaitable<Errors\Result<ModifyDBProxyResponse>>;
  public function ModifyDBProxyTargetGroup(ModifyDBProxyTargetGroupRequest): Awaitable<Errors\Result<ModifyDBProxyTargetGroupResponse>>;
  public function ModifyDBSnapshot(ModifyDBSnapshotMessage): Awaitable<Errors\Result<ModifyDBSnapshotResult>>;
  public function ModifyDBSnapshotAttribute(ModifyDBSnapshotAttributeMessage): Awaitable<Errors\Result<ModifyDBSnapshotAttributeResult>>;
  public function ModifyDBSubnetGroup(ModifyDBSubnetGroupMessage): Awaitable<Errors\Result<ModifyDBSubnetGroupResult>>;
  public function ModifyEventSubscription(ModifyEventSubscriptionMessage): Awaitable<Errors\Result<ModifyEventSubscriptionResult>>;
  public function ModifyGlobalCluster(ModifyGlobalClusterMessage): Awaitable<Errors\Result<ModifyGlobalClusterResult>>;
  public function ModifyOptionGroup(ModifyOptionGroupMessage): Awaitable<Errors\Result<ModifyOptionGroupResult>>;
  public function PromoteReadReplica(PromoteReadReplicaMessage): Awaitable<Errors\Result<PromoteReadReplicaResult>>;
  public function PromoteReadReplicaDBCluster(PromoteReadReplicaDBClusterMessage): Awaitable<Errors\Result<PromoteReadReplicaDBClusterResult>>;
  public function PurchaseReservedDBInstancesOffering(PurchaseReservedDBInstancesOfferingMessage): Awaitable<Errors\Result<PurchaseReservedDBInstancesOfferingResult>>;
  public function RebootDBInstance(RebootDBInstanceMessage): Awaitable<Errors\Result<RebootDBInstanceResult>>;
  public function RegisterDBProxyTargets(RegisterDBProxyTargetsRequest): Awaitable<Errors\Result<RegisterDBProxyTargetsResponse>>;
  public function RemoveFromGlobalCluster(RemoveFromGlobalClusterMessage): Awaitable<Errors\Result<RemoveFromGlobalClusterResult>>;
  public function RemoveRoleFromDBCluster(RemoveRoleFromDBClusterMessage): Awaitable<Errors\Error>;
  public function RemoveRoleFromDBInstance(RemoveRoleFromDBInstanceMessage): Awaitable<Errors\Error>;
  public function RemoveSourceIdentifierFromSubscription(RemoveSourceIdentifierFromSubscriptionMessage): Awaitable<Errors\Result<RemoveSourceIdentifierFromSubscriptionResult>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceMessage): Awaitable<Errors\Error>;
  public function ResetDBClusterParameterGroup(ResetDBClusterParameterGroupMessage): Awaitable<Errors\Result<DBClusterParameterGroupNameMessage>>;
  public function ResetDBParameterGroup(ResetDBParameterGroupMessage): Awaitable<Errors\Result<DBParameterGroupNameMessage>>;
  public function RestoreDBClusterFromS3(RestoreDBClusterFromS3Message): Awaitable<Errors\Result<RestoreDBClusterFromS3Result>>;
  public function RestoreDBClusterFromSnapshot(RestoreDBClusterFromSnapshotMessage): Awaitable<Errors\Result<RestoreDBClusterFromSnapshotResult>>;
  public function RestoreDBClusterToPointInTime(RestoreDBClusterToPointInTimeMessage): Awaitable<Errors\Result<RestoreDBClusterToPointInTimeResult>>;
  public function RestoreDBInstanceFromDBSnapshot(RestoreDBInstanceFromDBSnapshotMessage): Awaitable<Errors\Result<RestoreDBInstanceFromDBSnapshotResult>>;
  public function RestoreDBInstanceFromS3(RestoreDBInstanceFromS3Message): Awaitable<Errors\Result<RestoreDBInstanceFromS3Result>>;
  public function RestoreDBInstanceToPointInTime(RestoreDBInstanceToPointInTimeMessage): Awaitable<Errors\Result<RestoreDBInstanceToPointInTimeResult>>;
  public function RevokeDBSecurityGroupIngress(RevokeDBSecurityGroupIngressMessage): Awaitable<Errors\Result<RevokeDBSecurityGroupIngressResult>>;
  public function StartActivityStream(StartActivityStreamRequest): Awaitable<Errors\Result<StartActivityStreamResponse>>;
  public function StartDBCluster(StartDBClusterMessage): Awaitable<Errors\Result<StartDBClusterResult>>;
  public function StartDBInstance(StartDBInstanceMessage): Awaitable<Errors\Result<StartDBInstanceResult>>;
  public function StartExportTask(StartExportTaskMessage): Awaitable<Errors\Result<ExportTask>>;
  public function StopActivityStream(StopActivityStreamRequest): Awaitable<Errors\Result<StopActivityStreamResponse>>;
  public function StopDBCluster(StopDBClusterMessage): Awaitable<Errors\Result<StopDBClusterResult>>;
  public function StopDBInstance(StopDBInstanceMessage): Awaitable<Errors\Result<StopDBInstanceResult>>;
}

class AccountAttributesMessage {
  public AccountQuotaList $account_quotas;
}

class AccountQuota {
  public string $account_quota_name;
  public Long $max;
  public Long $used;
}

class AccountQuotaList {
}

class ActivityStreamMode {
}

class ActivityStreamStatus {
}

class AddRoleToDBClusterMessage {
  public string $db_cluster_identifier;
  public string $feature_name;
  public string $role_arn;
}

class AddRoleToDBInstanceMessage {
  public string $db_instance_identifier;
  public string $feature_name;
  public string $role_arn;
}

class AddSourceIdentifierToSubscriptionMessage {
  public string $source_identifier;
  public string $subscription_name;
}

class AddSourceIdentifierToSubscriptionResult {
  public EventSubscription $event_subscription;
}

class AddTagsToResourceMessage {
  public string $resource_name;
  public TagList $tags;
}

class ApplyMethod {
}

class ApplyPendingMaintenanceActionMessage {
  public string $apply_action;
  public string $opt_in_type;
  public string $resource_identifier;
}

class ApplyPendingMaintenanceActionResult {
  public ResourcePendingMaintenanceActions $resource_pending_maintenance_actions;
}

class AttributeValueList {
}

class AuthScheme {
}

class AuthorizationAlreadyExistsFault {
}

class AuthorizationNotFoundFault {
}

class AuthorizationQuotaExceededFault {
}

class AuthorizeDBSecurityGroupIngressMessage {
  public string $cidrip;
  public string $db_security_group_name;
  public string $ec_2_security_group_id;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
}

class AuthorizeDBSecurityGroupIngressResult {
  public DBSecurityGroup $db_security_group;
}

class AvailabilityZone {
  public string $name;
}

class AvailabilityZoneList {
}

class AvailabilityZones {
}

class AvailableProcessorFeature {
  public string $allowed_values;
  public string $default_value;
  public string $name;
}

class AvailableProcessorFeatureList {
}

class BacktrackDBClusterMessage {
  public TStamp $backtrack_to;
  public string $db_cluster_identifier;
  public BooleanOptional $force;
  public BooleanOptional $use_earliest_time_on_point_in_time_unavailable;
}

class BackupPolicyNotFoundFault {
}

class Boolean {
}

class BooleanOptional {
}

class CancelExportTaskMessage {
  public string $export_task_identifier;
}

class Certificate {
  public string $certificate_arn;
  public string $certificate_identifier;
  public string $certificate_type;
  public BooleanOptional $customer_override;
  public TStamp $customer_override_valid_till;
  public string $thumbprint;
  public TStamp $valid_from;
  public TStamp $valid_till;
}

class CertificateList {
}

class CertificateMessage {
  public CertificateList $certificates;
  public string $marker;
}

class CertificateNotFoundFault {
}

class CharacterSet {
  public string $character_set_description;
  public string $character_set_name;
}

class CloudwatchLogsExportConfiguration {
  public LogTypeList $disable_log_types;
  public LogTypeList $enable_log_types;
}

class ConnectionPoolConfiguration {
  public IntegerOptional $connection_borrow_timeout;
  public string $init_query;
  public IntegerOptional $max_connections_percent;
  public IntegerOptional $max_idle_connections_percent;
  public StringList $session_pinning_filters;
}

class ConnectionPoolConfigurationInfo {
  public int $connection_borrow_timeout;
  public string $init_query;
  public int $max_connections_percent;
  public int $max_idle_connections_percent;
  public StringList $session_pinning_filters;
}

class CopyDBClusterParameterGroupMessage {
  public string $source_db_cluster_parameter_group_identifier;
  public TagList $tags;
  public string $target_db_cluster_parameter_group_description;
  public string $target_db_cluster_parameter_group_identifier;
}

class CopyDBClusterParameterGroupResult {
  public DBClusterParameterGroup $db_cluster_parameter_group;
}

class CopyDBClusterSnapshotMessage {
  public BooleanOptional $copy_tags;
  public string $kms_key_id;
  public string $pre_signed_url;
  public string $source_db_cluster_snapshot_identifier;
  public TagList $tags;
  public string $target_db_cluster_snapshot_identifier;
}

class CopyDBClusterSnapshotResult {
  public DBClusterSnapshot $db_cluster_snapshot;
}

class CopyDBParameterGroupMessage {
  public string $source_db_parameter_group_identifier;
  public TagList $tags;
  public string $target_db_parameter_group_description;
  public string $target_db_parameter_group_identifier;
}

class CopyDBParameterGroupResult {
  public DBParameterGroup $db_parameter_group;
}

class CopyDBSnapshotMessage {
  public BooleanOptional $copy_tags;
  public string $kms_key_id;
  public string $option_group_name;
  public string $pre_signed_url;
  public string $source_db_snapshot_identifier;
  public TagList $tags;
  public string $target_db_snapshot_identifier;
}

class CopyDBSnapshotResult {
  public DBSnapshot $db_snapshot;
}

class CopyOptionGroupMessage {
  public string $source_option_group_identifier;
  public TagList $tags;
  public string $target_option_group_description;
  public string $target_option_group_identifier;
}

class CopyOptionGroupResult {
  public OptionGroup $option_group;
}

class CreateCustomAvailabilityZoneMessage {
  public string $custom_availability_zone_name;
  public string $existing_vpn_id;
  public string $new_vpn_tunnel_name;
  public string $vpn_tunnel_originator_ip;
}

class CreateCustomAvailabilityZoneResult {
  public CustomAvailabilityZone $custom_availability_zone;
}

class CreateDBClusterEndpointMessage {
  public string $db_cluster_endpoint_identifier;
  public string $db_cluster_identifier;
  public string $endpoint_type;
  public StringList $excluded_members;
  public StringList $static_members;
  public TagList $tags;
}

class CreateDBClusterMessage {
  public AvailabilityZones $availability_zones;
  public LongOptional $backtrack_window;
  public IntegerOptional $backup_retention_period;
  public string $character_set_name;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_subnet_group_name;
  public string $database_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_http_endpoint;
  public BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public string $engine_mode;
  public string $engine_version;
  public string $global_cluster_identifier;
  public string $kms_key_id;
  public string $master_user_password;
  public string $master_username;
  public string $option_group_name;
  public IntegerOptional $port;
  public string $pre_signed_url;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public string $replication_source_identifier;
  public ScalingConfiguration $scaling_configuration;
  public BooleanOptional $storage_encrypted;
  public TagList $tags;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class CreateDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
  public string $db_parameter_group_family;
  public string $description;
  public TagList $tags;
}

class CreateDBClusterParameterGroupResult {
  public DBClusterParameterGroup $db_cluster_parameter_group;
}

class CreateDBClusterResult {
  public DBCluster $db_cluster;
}

class CreateDBClusterSnapshotMessage {
  public string $db_cluster_identifier;
  public string $db_cluster_snapshot_identifier;
  public TagList $tags;
}

class CreateDBClusterSnapshotResult {
  public DBClusterSnapshot $db_cluster_snapshot;
}

class CreateDBInstanceMessage {
  public IntegerOptional $allocated_storage;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public IntegerOptional $backup_retention_period;
  public string $character_set_name;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_name;
  public string $db_parameter_group_name;
  public DBSecurityGroupNameList $db_security_groups;
  public string $db_subnet_group_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_iam_database_authentication;
  public BooleanOptional $enable_performance_insights;
  public string $engine;
  public string $engine_version;
  public IntegerOptional $iops;
  public string $kms_key_id;
  public string $license_model;
  public string $master_user_password;
  public string $master_username;
  public IntegerOptional $max_allocated_storage;
  public IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public BooleanOptional $multi_az;
  public string $option_group_name;
  public string $performance_insights_kms_key_id;
  public IntegerOptional $performance_insights_retention_period;
  public IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ProcessorFeatureList $processor_features;
  public IntegerOptional $promotion_tier;
  public BooleanOptional $publicly_accessible;
  public BooleanOptional $storage_encrypted;
  public string $storage_type;
  public TagList $tags;
  public string $tde_credential_arn;
  public string $tde_credential_password;
  public string $timezone;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class CreateDBInstanceReadReplicaMessage {
  public BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_parameter_group_name;
  public string $db_subnet_group_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_iam_database_authentication;
  public BooleanOptional $enable_performance_insights;
  public IntegerOptional $iops;
  public string $kms_key_id;
  public IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public BooleanOptional $multi_az;
  public string $option_group_name;
  public string $performance_insights_kms_key_id;
  public IntegerOptional $performance_insights_retention_period;
  public IntegerOptional $port;
  public string $pre_signed_url;
  public ProcessorFeatureList $processor_features;
  public BooleanOptional $publicly_accessible;
  public string $source_db_instance_identifier;
  public string $storage_type;
  public TagList $tags;
  public BooleanOptional $use_default_processor_features;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class CreateDBInstanceReadReplicaResult {
  public DBInstance $db_instance;
}

class CreateDBInstanceResult {
  public DBInstance $db_instance;
}

class CreateDBParameterGroupMessage {
  public string $db_parameter_group_family;
  public string $db_parameter_group_name;
  public string $description;
  public TagList $tags;
}

class CreateDBParameterGroupResult {
  public DBParameterGroup $db_parameter_group;
}

class CreateDBProxyRequest {
  public UserAuthConfigList $auth;
  public string $db_proxy_name;
  public boolean $debug_logging;
  public EngineFamily $engine_family;
  public IntegerOptional $idle_client_timeout;
  public boolean $require_tls;
  public string $role_arn;
  public TagList $tags;
  public StringList $vpc_security_group_ids;
  public StringList $vpc_subnet_ids;
}

class CreateDBProxyResponse {
  public DBProxy $db_proxy;
}

class CreateDBSecurityGroupMessage {
  public string $db_security_group_description;
  public string $db_security_group_name;
  public TagList $tags;
}

class CreateDBSecurityGroupResult {
  public DBSecurityGroup $db_security_group;
}

class CreateDBSnapshotMessage {
  public string $db_instance_identifier;
  public string $db_snapshot_identifier;
  public TagList $tags;
}

class CreateDBSnapshotResult {
  public DBSnapshot $db_snapshot;
}

class CreateDBSubnetGroupMessage {
  public string $db_subnet_group_description;
  public string $db_subnet_group_name;
  public SubnetIdentifierList $subnet_ids;
  public TagList $tags;
}

class CreateDBSubnetGroupResult {
  public DBSubnetGroup $db_subnet_group;
}

class CreateEventSubscriptionMessage {
  public BooleanOptional $enabled;
  public EventCategoriesList $event_categories;
  public string $sns_topic_arn;
  public SourceIdsList $source_ids;
  public string $source_type;
  public string $subscription_name;
  public TagList $tags;
}

class CreateEventSubscriptionResult {
  public EventSubscription $event_subscription;
}

class CreateGlobalClusterMessage {
  public string $database_name;
  public BooleanOptional $deletion_protection;
  public string $engine;
  public string $engine_version;
  public string $global_cluster_identifier;
  public string $source_db_cluster_identifier;
  public BooleanOptional $storage_encrypted;
}

class CreateGlobalClusterResult {
  public GlobalCluster $global_cluster;
}

class CreateOptionGroupMessage {
  public string $engine_name;
  public string $major_engine_version;
  public string $option_group_description;
  public string $option_group_name;
  public TagList $tags;
}

class CreateOptionGroupResult {
  public OptionGroup $option_group;
}

class CustomAvailabilityZone {
  public string $custom_availability_zone_id;
  public string $custom_availability_zone_name;
  public string $custom_availability_zone_status;
  public VpnDetails $vpn_details;
}

class CustomAvailabilityZoneAlreadyExistsFault {
}

class CustomAvailabilityZoneList {
}

class CustomAvailabilityZoneMessage {
  public CustomAvailabilityZoneList $custom_availability_zones;
  public string $marker;
}

class CustomAvailabilityZoneNotFoundFault {
}

class CustomAvailabilityZoneQuotaExceededFault {
}

class DBCluster {
  public string $activity_stream_kinesis_stream_name;
  public string $activity_stream_kms_key_id;
  public ActivityStreamMode $activity_stream_mode;
  public ActivityStreamStatus $activity_stream_status;
  public IntegerOptional $allocated_storage;
  public DBClusterRoles $associated_roles;
  public AvailabilityZones $availability_zones;
  public LongOptional $backtrack_consumed_change_records;
  public LongOptional $backtrack_window;
  public IntegerOptional $backup_retention_period;
  public IntegerOptional $capacity;
  public string $character_set_name;
  public string $clone_group_id;
  public TStamp $cluster_create_time;
  public BooleanOptional $copy_tags_to_snapshot;
  public BooleanOptional $cross_account_clone;
  public StringList $custom_endpoints;
  public string $db_cluster_arn;
  public string $db_cluster_identifier;
  public DBClusterMemberList $db_cluster_members;
  public DBClusterOptionGroupMemberships $db_cluster_option_group_memberships;
  public string $db_cluster_parameter_group;
  public string $db_subnet_group;
  public string $database_name;
  public string $db_cluster_resource_id;
  public BooleanOptional $deletion_protection;
  public DomainMembershipList $domain_memberships;
  public TStamp $earliest_backtrack_time;
  public TStamp $earliest_restorable_time;
  public LogTypeList $enabled_cloudwatch_logs_exports;
  public string $endpoint;
  public string $engine;
  public string $engine_mode;
  public string $engine_version;
  public string $hosted_zone_id;
  public BooleanOptional $http_endpoint_enabled;
  public BooleanOptional $iam_database_authentication_enabled;
  public string $kms_key_id;
  public TStamp $latest_restorable_time;
  public string $master_username;
  public BooleanOptional $multi_az;
  public string $percent_progress;
  public IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ReadReplicaIdentifierList $read_replica_identifiers;
  public string $reader_endpoint;
  public string $replication_source_identifier;
  public ScalingConfigurationInfo $scaling_configuration_info;
  public string $status;
  public boolean $storage_encrypted;
  public VpcSecurityGroupMembershipList $vpc_security_groups;
}

class DBClusterAlreadyExistsFault {
}

class DBClusterBacktrack {
  public string $backtrack_identifier;
  public TStamp $backtrack_request_creation_time;
  public TStamp $backtrack_to;
  public TStamp $backtracked_from;
  public string $db_cluster_identifier;
  public string $status;
}

class DBClusterBacktrackList {
}

class DBClusterBacktrackMessage {
  public DBClusterBacktrackList $db_cluster_backtracks;
  public string $marker;
}

class DBClusterBacktrackNotFoundFault {
}

class DBClusterCapacityInfo {
  public IntegerOptional $current_capacity;
  public string $db_cluster_identifier;
  public IntegerOptional $pending_capacity;
  public IntegerOptional $seconds_before_timeout;
  public string $timeout_action;
}

class DBClusterEndpoint {
  public string $custom_endpoint_type;
  public string $db_cluster_endpoint_arn;
  public string $db_cluster_endpoint_identifier;
  public string $db_cluster_endpoint_resource_identifier;
  public string $db_cluster_identifier;
  public string $endpoint;
  public string $endpoint_type;
  public StringList $excluded_members;
  public StringList $static_members;
  public string $status;
}

class DBClusterEndpointAlreadyExistsFault {
}

class DBClusterEndpointList {
}

class DBClusterEndpointMessage {
  public DBClusterEndpointList $db_cluster_endpoints;
  public string $marker;
}

class DBClusterEndpointNotFoundFault {
}

class DBClusterEndpointQuotaExceededFault {
}

class DBClusterList {
}

class DBClusterMember {
  public string $db_cluster_parameter_group_status;
  public string $db_instance_identifier;
  public boolean $is_cluster_writer;
  public IntegerOptional $promotion_tier;
}

class DBClusterMemberList {
}

class DBClusterMessage {
  public DBClusterList $db_clusters;
  public string $marker;
}

class DBClusterNotFoundFault {
}

class DBClusterOptionGroupMemberships {
}

class DBClusterOptionGroupStatus {
  public string $db_cluster_option_group_name;
  public string $status;
}

class DBClusterParameterGroup {
  public string $db_cluster_parameter_group_arn;
  public string $db_cluster_parameter_group_name;
  public string $db_parameter_group_family;
  public string $description;
}

class DBClusterParameterGroupDetails {
  public string $marker;
  public ParametersList $parameters;
}

class DBClusterParameterGroupList {
}

class DBClusterParameterGroupNameMessage {
  public string $db_cluster_parameter_group_name;
}

class DBClusterParameterGroupNotFoundFault {
}

class DBClusterParameterGroupsMessage {
  public DBClusterParameterGroupList $db_cluster_parameter_groups;
  public string $marker;
}

class DBClusterQuotaExceededFault {
}

class DBClusterRole {
  public string $feature_name;
  public string $role_arn;
  public string $status;
}

class DBClusterRoleAlreadyExistsFault {
}

class DBClusterRoleNotFoundFault {
}

class DBClusterRoleQuotaExceededFault {
}

class DBClusterRoles {
}

class DBClusterSnapshot {
  public int $allocated_storage;
  public AvailabilityZones $availability_zones;
  public TStamp $cluster_create_time;
  public string $db_cluster_identifier;
  public string $db_cluster_snapshot_arn;
  public string $db_cluster_snapshot_identifier;
  public string $engine;
  public string $engine_version;
  public boolean $iam_database_authentication_enabled;
  public string $kms_key_id;
  public string $license_model;
  public string $master_username;
  public int $percent_progress;
  public int $port;
  public TStamp $snapshot_create_time;
  public string $snapshot_type;
  public string $source_db_cluster_snapshot_arn;
  public string $status;
  public boolean $storage_encrypted;
  public string $vpc_id;
}

class DBClusterSnapshotAlreadyExistsFault {
}

class DBClusterSnapshotAttribute {
  public string $attribute_name;
  public AttributeValueList $attribute_values;
}

class DBClusterSnapshotAttributeList {
}

class DBClusterSnapshotAttributesResult {
  public DBClusterSnapshotAttributeList $db_cluster_snapshot_attributes;
  public string $db_cluster_snapshot_identifier;
}

class DBClusterSnapshotList {
}

class DBClusterSnapshotMessage {
  public DBClusterSnapshotList $db_cluster_snapshots;
  public string $marker;
}

class DBClusterSnapshotNotFoundFault {
}

class DBEngineVersion {
  public string $db_engine_description;
  public string $db_engine_version_description;
  public string $db_parameter_group_family;
  public CharacterSet $default_character_set;
  public string $engine;
  public string $engine_version;
  public LogTypeList $exportable_log_types;
  public string $status;
  public SupportedCharacterSetsList $supported_character_sets;
  public EngineModeList $supported_engine_modes;
  public FeatureNameList $supported_feature_names;
  public SupportedTimezonesList $supported_timezones;
  public boolean $supports_log_exports_to_cloudwatch_logs;
  public boolean $supports_read_replica;
  public ValidUpgradeTargetList $valid_upgrade_target;
}

class DBEngineVersionList {
}

class DBEngineVersionMessage {
  public DBEngineVersionList $db_engine_versions;
  public string $marker;
}

class DBInstance {
  public int $allocated_storage;
  public DBInstanceRoles $associated_roles;
  public boolean $auto_minor_version_upgrade;
  public string $availability_zone;
  public int $backup_retention_period;
  public string $ca_certificate_identifier;
  public string $character_set_name;
  public boolean $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_instance_arn;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_instance_status;
  public string $db_name;
  public DBParameterGroupStatusList $db_parameter_groups;
  public DBSecurityGroupMembershipList $db_security_groups;
  public DBSubnetGroup $db_subnet_group;
  public int $db_instance_port;
  public string $dbi_resource_id;
  public boolean $deletion_protection;
  public DomainMembershipList $domain_memberships;
  public LogTypeList $enabled_cloudwatch_logs_exports;
  public Endpoint $endpoint;
  public string $engine;
  public string $engine_version;
  public string $enhanced_monitoring_resource_arn;
  public boolean $iam_database_authentication_enabled;
  public TStamp $instance_create_time;
  public IntegerOptional $iops;
  public string $kms_key_id;
  public TStamp $latest_restorable_time;
  public string $license_model;
  public Endpoint $listener_endpoint;
  public string $master_username;
  public IntegerOptional $max_allocated_storage;
  public IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public boolean $multi_az;
  public OptionGroupMembershipList $option_group_memberships;
  public PendingModifiedValues $pending_modified_values;
  public BooleanOptional $performance_insights_enabled;
  public string $performance_insights_kms_key_id;
  public IntegerOptional $performance_insights_retention_period;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ProcessorFeatureList $processor_features;
  public IntegerOptional $promotion_tier;
  public boolean $publicly_accessible;
  public ReadReplicaDBClusterIdentifierList $read_replica_db_cluster_identifiers;
  public ReadReplicaDBInstanceIdentifierList $read_replica_db_instance_identifiers;
  public string $read_replica_source_db_instance_identifier;
  public string $secondary_availability_zone;
  public DBInstanceStatusInfoList $status_infos;
  public boolean $storage_encrypted;
  public string $storage_type;
  public string $tde_credential_arn;
  public string $timezone;
  public VpcSecurityGroupMembershipList $vpc_security_groups;
}

class DBInstanceAlreadyExistsFault {
}

class DBInstanceAutomatedBackup {
  public int $allocated_storage;
  public string $availability_zone;
  public string $db_instance_arn;
  public string $db_instance_identifier;
  public string $dbi_resource_id;
  public boolean $encrypted;
  public string $engine;
  public string $engine_version;
  public boolean $iam_database_authentication_enabled;
  public TStamp $instance_create_time;
  public IntegerOptional $iops;
  public string $kms_key_id;
  public string $license_model;
  public string $master_username;
  public string $option_group_name;
  public int $port;
  public string $region;
  public RestoreWindow $restore_window;
  public string $status;
  public string $storage_type;
  public string $tde_credential_arn;
  public string $timezone;
  public string $vpc_id;
}

class DBInstanceAutomatedBackupList {
}

class DBInstanceAutomatedBackupMessage {
  public DBInstanceAutomatedBackupList $db_instance_automated_backups;
  public string $marker;
}

class DBInstanceAutomatedBackupNotFoundFault {
}

class DBInstanceAutomatedBackupQuotaExceededFault {
}

class DBInstanceList {
}

class DBInstanceMessage {
  public DBInstanceList $db_instances;
  public string $marker;
}

class DBInstanceNotFoundFault {
}

class DBInstanceRole {
  public string $feature_name;
  public string $role_arn;
  public string $status;
}

class DBInstanceRoleAlreadyExistsFault {
}

class DBInstanceRoleNotFoundFault {
}

class DBInstanceRoleQuotaExceededFault {
}

class DBInstanceRoles {
}

class DBInstanceStatusInfo {
  public string $message;
  public boolean $normal;
  public string $status;
  public string $status_type;
}

class DBInstanceStatusInfoList {
}

class DBLogFileNotFoundFault {
}

class DBParameterGroup {
  public string $db_parameter_group_arn;
  public string $db_parameter_group_family;
  public string $db_parameter_group_name;
  public string $description;
}

class DBParameterGroupAlreadyExistsFault {
}

class DBParameterGroupDetails {
  public string $marker;
  public ParametersList $parameters;
}

class DBParameterGroupList {
}

class DBParameterGroupNameMessage {
  public string $db_parameter_group_name;
}

class DBParameterGroupNotFoundFault {
}

class DBParameterGroupQuotaExceededFault {
}

class DBParameterGroupStatus {
  public string $db_parameter_group_name;
  public string $parameter_apply_status;
}

class DBParameterGroupStatusList {
}

class DBParameterGroupsMessage {
  public DBParameterGroupList $db_parameter_groups;
  public string $marker;
}

class DBProxy {
  public UserAuthConfigInfoList $auth;
  public TStamp $created_date;
  public string $db_proxy_arn;
  public string $db_proxy_name;
  public boolean $debug_logging;
  public string $endpoint;
  public string $engine_family;
  public int $idle_client_timeout;
  public boolean $require_tls;
  public string $role_arn;
  public DBProxyStatus $status;
  public TStamp $updated_date;
  public StringList $vpc_security_group_ids;
  public StringList $vpc_subnet_ids;
}

class DBProxyAlreadyExistsFault {
}

class DBProxyList {
}

class DBProxyNotFoundFault {
}

class DBProxyQuotaExceededFault {
}

class DBProxyStatus {
}

class DBProxyTarget {
  public string $endpoint;
  public int $port;
  public string $rds_resource_id;
  public string $target_arn;
  public TargetHealth $target_health;
  public string $tracked_cluster_id;
  public TargetType $type;
}

class DBProxyTargetAlreadyRegisteredFault {
}

class DBProxyTargetGroup {
  public ConnectionPoolConfigurationInfo $connection_pool_config;
  public TStamp $created_date;
  public string $db_proxy_name;
  public boolean $is_default;
  public string $status;
  public string $target_group_arn;
  public string $target_group_name;
  public TStamp $updated_date;
}

class DBProxyTargetGroupNotFoundFault {
}

class DBProxyTargetNotFoundFault {
}

class DBSecurityGroup {
  public string $db_security_group_arn;
  public string $db_security_group_description;
  public string $db_security_group_name;
  public EC2SecurityGroupList $ec_2_security_groups;
  public IPRangeList $ip_ranges;
  public string $owner_id;
  public string $vpc_id;
}

class DBSecurityGroupAlreadyExistsFault {
}

class DBSecurityGroupMembership {
  public string $db_security_group_name;
  public string $status;
}

class DBSecurityGroupMembershipList {
}

class DBSecurityGroupMessage {
  public DBSecurityGroups $db_security_groups;
  public string $marker;
}

class DBSecurityGroupNameList {
}

class DBSecurityGroupNotFoundFault {
}

class DBSecurityGroupNotSupportedFault {
}

class DBSecurityGroupQuotaExceededFault {
}

class DBSecurityGroups {
}

class DBSnapshot {
  public int $allocated_storage;
  public string $availability_zone;
  public string $db_instance_identifier;
  public string $db_snapshot_arn;
  public string $db_snapshot_identifier;
  public string $dbi_resource_id;
  public boolean $encrypted;
  public string $engine;
  public string $engine_version;
  public boolean $iam_database_authentication_enabled;
  public TStamp $instance_create_time;
  public IntegerOptional $iops;
  public string $kms_key_id;
  public string $license_model;
  public string $master_username;
  public string $option_group_name;
  public int $percent_progress;
  public int $port;
  public ProcessorFeatureList $processor_features;
  public TStamp $snapshot_create_time;
  public string $snapshot_type;
  public string $source_db_snapshot_identifier;
  public string $source_region;
  public string $status;
  public string $storage_type;
  public string $tde_credential_arn;
  public string $timezone;
  public string $vpc_id;
}

class DBSnapshotAlreadyExistsFault {
}

class DBSnapshotAttribute {
  public string $attribute_name;
  public AttributeValueList $attribute_values;
}

class DBSnapshotAttributeList {
}

class DBSnapshotAttributesResult {
  public DBSnapshotAttributeList $db_snapshot_attributes;
  public string $db_snapshot_identifier;
}

class DBSnapshotList {
}

class DBSnapshotMessage {
  public DBSnapshotList $db_snapshots;
  public string $marker;
}

class DBSnapshotNotFoundFault {
}

class DBSubnetGroup {
  public string $db_subnet_group_arn;
  public string $db_subnet_group_description;
  public string $db_subnet_group_name;
  public string $subnet_group_status;
  public SubnetList $subnets;
  public string $vpc_id;
}

class DBSubnetGroupAlreadyExistsFault {
}

class DBSubnetGroupDoesNotCoverEnoughAZs {
}

class DBSubnetGroupMessage {
  public DBSubnetGroups $db_subnet_groups;
  public string $marker;
}

class DBSubnetGroupNotAllowedFault {
}

class DBSubnetGroupNotFoundFault {
}

class DBSubnetGroupQuotaExceededFault {
}

class DBSubnetGroups {
}

class DBSubnetQuotaExceededFault {
}

class DBUpgradeDependencyFailureFault {
}

class DeleteCustomAvailabilityZoneMessage {
  public string $custom_availability_zone_id;
}

class DeleteCustomAvailabilityZoneResult {
  public CustomAvailabilityZone $custom_availability_zone;
}

class DeleteDBClusterEndpointMessage {
  public string $db_cluster_endpoint_identifier;
}

class DeleteDBClusterMessage {
  public string $db_cluster_identifier;
  public string $final_db_snapshot_identifier;
  public boolean $skip_final_snapshot;
}

class DeleteDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
}

class DeleteDBClusterResult {
  public DBCluster $db_cluster;
}

class DeleteDBClusterSnapshotMessage {
  public string $db_cluster_snapshot_identifier;
}

class DeleteDBClusterSnapshotResult {
  public DBClusterSnapshot $db_cluster_snapshot;
}

class DeleteDBInstanceAutomatedBackupMessage {
  public string $dbi_resource_id;
}

class DeleteDBInstanceAutomatedBackupResult {
  public DBInstanceAutomatedBackup $db_instance_automated_backup;
}

class DeleteDBInstanceMessage {
  public string $db_instance_identifier;
  public BooleanOptional $delete_automated_backups;
  public string $final_db_snapshot_identifier;
  public boolean $skip_final_snapshot;
}

class DeleteDBInstanceResult {
  public DBInstance $db_instance;
}

class DeleteDBParameterGroupMessage {
  public string $db_parameter_group_name;
}

class DeleteDBProxyRequest {
  public string $db_proxy_name;
}

class DeleteDBProxyResponse {
  public DBProxy $db_proxy;
}

class DeleteDBSecurityGroupMessage {
  public string $db_security_group_name;
}

class DeleteDBSnapshotMessage {
  public string $db_snapshot_identifier;
}

class DeleteDBSnapshotResult {
  public DBSnapshot $db_snapshot;
}

class DeleteDBSubnetGroupMessage {
  public string $db_subnet_group_name;
}

class DeleteEventSubscriptionMessage {
  public string $subscription_name;
}

class DeleteEventSubscriptionResult {
  public EventSubscription $event_subscription;
}

class DeleteGlobalClusterMessage {
  public string $global_cluster_identifier;
}

class DeleteGlobalClusterResult {
  public GlobalCluster $global_cluster;
}

class DeleteInstallationMediaMessage {
  public string $installation_media_id;
}

class DeleteOptionGroupMessage {
  public string $option_group_name;
}

class DeregisterDBProxyTargetsRequest {
  public StringList $db_cluster_identifiers;
  public StringList $db_instance_identifiers;
  public string $db_proxy_name;
  public string $target_group_name;
}

class DeregisterDBProxyTargetsResponse {
}

class DescribeAccountAttributesMessage {
}

class DescribeCertificatesMessage {
  public string $certificate_identifier;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeCustomAvailabilityZonesMessage {
  public string $custom_availability_zone_id;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBClusterBacktracksMessage {
  public string $backtrack_identifier;
  public string $db_cluster_identifier;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBClusterEndpointsMessage {
  public string $db_cluster_endpoint_identifier;
  public string $db_cluster_identifier;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBClusterParameterGroupsMessage {
  public string $db_cluster_parameter_group_name;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBClusterParametersMessage {
  public string $db_cluster_parameter_group_name;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $source;
}

class DescribeDBClusterSnapshotAttributesMessage {
  public string $db_cluster_snapshot_identifier;
}

class DescribeDBClusterSnapshotAttributesResult {
  public DBClusterSnapshotAttributesResult $db_cluster_snapshot_attributes_result;
}

class DescribeDBClusterSnapshotsMessage {
  public string $db_cluster_identifier;
  public string $db_cluster_snapshot_identifier;
  public FilterList $filters;
  public boolean $include_public;
  public boolean $include_shared;
  public string $marker;
  public IntegerOptional $max_records;
  public string $snapshot_type;
}

class DescribeDBClustersMessage {
  public string $db_cluster_identifier;
  public FilterList $filters;
  public boolean $include_shared;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBEngineVersionsMessage {
  public string $db_parameter_group_family;
  public boolean $default_only;
  public string $engine;
  public string $engine_version;
  public FilterList $filters;
  public BooleanOptional $include_all;
  public BooleanOptional $list_supported_character_sets;
  public BooleanOptional $list_supported_timezones;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBInstanceAutomatedBackupsMessage {
  public string $db_instance_identifier;
  public string $dbi_resource_id;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBInstancesMessage {
  public string $db_instance_identifier;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBLogFilesDetails {
  public Long $last_written;
  public string $log_file_name;
  public Long $size;
}

class DescribeDBLogFilesList {
}

class DescribeDBLogFilesMessage {
  public string $db_instance_identifier;
  public Long $file_last_written;
  public Long $file_size;
  public string $filename_contains;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBLogFilesResponse {
  public DescribeDBLogFilesList $describe_db_log_files;
  public string $marker;
}

class DescribeDBParameterGroupsMessage {
  public string $db_parameter_group_name;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBParametersMessage {
  public string $db_parameter_group_name;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $source;
}

class DescribeDBProxiesRequest {
  public string $db_proxy_name;
  public FilterList $filters;
  public string $marker;
  public MaxRecords $max_records;
}

class DescribeDBProxiesResponse {
  public DBProxyList $db_proxies;
  public string $marker;
}

class DescribeDBProxyTargetGroupsRequest {
  public string $db_proxy_name;
  public FilterList $filters;
  public string $marker;
  public MaxRecords $max_records;
  public string $target_group_name;
}

class DescribeDBProxyTargetGroupsResponse {
  public string $marker;
  public TargetGroupList $target_groups;
}

class DescribeDBProxyTargetsRequest {
  public string $db_proxy_name;
  public FilterList $filters;
  public string $marker;
  public MaxRecords $max_records;
  public string $target_group_name;
}

class DescribeDBProxyTargetsResponse {
  public string $marker;
  public TargetList $targets;
}

class DescribeDBSecurityGroupsMessage {
  public string $db_security_group_name;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeDBSnapshotAttributesMessage {
  public string $db_snapshot_identifier;
}

class DescribeDBSnapshotAttributesResult {
  public DBSnapshotAttributesResult $db_snapshot_attributes_result;
}

class DescribeDBSnapshotsMessage {
  public string $db_instance_identifier;
  public string $db_snapshot_identifier;
  public string $dbi_resource_id;
  public FilterList $filters;
  public boolean $include_public;
  public boolean $include_shared;
  public string $marker;
  public IntegerOptional $max_records;
  public string $snapshot_type;
}

class DescribeDBSubnetGroupsMessage {
  public string $db_subnet_group_name;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeEngineDefaultClusterParametersMessage {
  public string $db_parameter_group_family;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeEngineDefaultClusterParametersResult {
  public EngineDefaults $engine_defaults;
}

class DescribeEngineDefaultParametersMessage {
  public string $db_parameter_group_family;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeEngineDefaultParametersResult {
  public EngineDefaults $engine_defaults;
}

class DescribeEventCategoriesMessage {
  public FilterList $filters;
  public string $source_type;
}

class DescribeEventSubscriptionsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $subscription_name;
}

class DescribeEventsMessage {
  public IntegerOptional $duration;
  public TStamp $end_time;
  public EventCategoriesList $event_categories;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $source_identifier;
  public SourceType $source_type;
  public TStamp $start_time;
}

class DescribeExportTasksMessage {
  public string $export_task_identifier;
  public FilterList $filters;
  public string $marker;
  public MaxRecords $max_records;
  public string $source_arn;
}

class DescribeGlobalClustersMessage {
  public FilterList $filters;
  public string $global_cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeInstallationMediaMessage {
  public FilterList $filters;
  public string $installation_media_id;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeOptionGroupOptionsMessage {
  public string $engine_name;
  public FilterList $filters;
  public string $major_engine_version;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeOptionGroupsMessage {
  public string $engine_name;
  public FilterList $filters;
  public string $major_engine_version;
  public string $marker;
  public IntegerOptional $max_records;
  public string $option_group_name;
}

class DescribeOrderableDBInstanceOptionsMessage {
  public string $availability_zone_group;
  public string $db_instance_class;
  public string $engine;
  public string $engine_version;
  public FilterList $filters;
  public string $license_model;
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $vpc;
}

class DescribePendingMaintenanceActionsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $resource_identifier;
}

class DescribeReservedDBInstancesMessage {
  public string $db_instance_class;
  public string $duration;
  public FilterList $filters;
  public string $lease_id;
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $multi_az;
  public string $offering_type;
  public string $product_description;
  public string $reserved_db_instance_id;
  public string $reserved_db_instances_offering_id;
}

class DescribeReservedDBInstancesOfferingsMessage {
  public string $db_instance_class;
  public string $duration;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $multi_az;
  public string $offering_type;
  public string $product_description;
  public string $reserved_db_instances_offering_id;
}

class DescribeSourceRegionsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $region_name;
}

class DescribeValidDBInstanceModificationsMessage {
  public string $db_instance_identifier;
}

class DescribeValidDBInstanceModificationsResult {
  public ValidDBInstanceModificationsMessage $valid_db_instance_modifications_message;
}

class DomainMembership {
  public string $domain;
  public string $fqdn;
  public string $iam_role_name;
  public string $status;
}

class DomainMembershipList {
}

class DomainNotFoundFault {
}

class Double {
}

class DoubleOptional {
}

class DoubleRange {
  public Double $from;
  public Double $to;
}

class DoubleRangeList {
}

class DownloadDBLogFilePortionDetails {
  public boolean $additional_data_pending;
  public string $log_file_data;
  public string $marker;
}

class DownloadDBLogFilePortionMessage {
  public string $db_instance_identifier;
  public string $log_file_name;
  public string $marker;
  public int $number_of_lines;
}

class EC2SecurityGroup {
  public string $ec_2_security_group_id;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $status;
}

class EC2SecurityGroupList {
}

class Endpoint {
  public string $address;
  public string $hosted_zone_id;
  public int $port;
}

class EngineDefaults {
  public string $db_parameter_group_family;
  public string $marker;
  public ParametersList $parameters;
}

class EngineFamily {
}

class EngineModeList {
}

class Event {
  public TStamp $date;
  public EventCategoriesList $event_categories;
  public string $message;
  public string $source_arn;
  public string $source_identifier;
  public SourceType $source_type;
}

class EventCategoriesList {
}

class EventCategoriesMap {
  public EventCategoriesList $event_categories;
  public string $source_type;
}

class EventCategoriesMapList {
}

class EventCategoriesMessage {
  public EventCategoriesMapList $event_categories_map_list;
}

class EventList {
}

class EventSubscription {
  public string $cust_subscription_id;
  public string $customer_aws_id;
  public boolean $enabled;
  public EventCategoriesList $event_categories_list;
  public string $event_subscription_arn;
  public string $sns_topic_arn;
  public SourceIdsList $source_ids_list;
  public string $source_type;
  public string $status;
  public string $subscription_creation_time;
}

class EventSubscriptionQuotaExceededFault {
}

class EventSubscriptionsList {
}

class EventSubscriptionsMessage {
  public EventSubscriptionsList $event_subscriptions_list;
  public string $marker;
}

class EventsMessage {
  public EventList $events;
  public string $marker;
}

class ExportTask {
  public StringList $export_only;
  public string $export_task_identifier;
  public string $failure_cause;
  public string $iam_role_arn;
  public string $kms_key_id;
  public int $percent_progress;
  public string $s_3_bucket;
  public string $s_3_prefix;
  public TStamp $snapshot_time;
  public string $source_arn;
  public string $status;
  public TStamp $task_end_time;
  public TStamp $task_start_time;
  public int $total_extracted_data_in_gb;
  public string $warning_message;
}

class ExportTaskAlreadyExistsFault {
}

class ExportTaskNotFoundFault {
}

class ExportTasksList {
}

class ExportTasksMessage {
  public ExportTasksList $export_tasks;
  public string $marker;
}

class FailoverDBClusterMessage {
  public string $db_cluster_identifier;
  public string $target_db_instance_identifier;
}

class FailoverDBClusterResult {
  public DBCluster $db_cluster;
}

class FeatureNameList {
}

class Filter {
  public string $name;
  public FilterValueList $values;
}

class FilterList {
}

class FilterValueList {
}

class GlobalCluster {
  public string $database_name;
  public BooleanOptional $deletion_protection;
  public string $engine;
  public string $engine_version;
  public string $global_cluster_arn;
  public string $global_cluster_identifier;
  public GlobalClusterMemberList $global_cluster_members;
  public string $global_cluster_resource_id;
  public string $status;
  public BooleanOptional $storage_encrypted;
}

class GlobalClusterAlreadyExistsFault {
}

class GlobalClusterList {
}

class GlobalClusterMember {
  public string $db_cluster_arn;
  public boolean $is_writer;
  public ReadersArnList $readers;
}

class GlobalClusterMemberList {
}

class GlobalClusterNotFoundFault {
}

class GlobalClusterQuotaExceededFault {
}

class GlobalClustersMessage {
  public GlobalClusterList $global_clusters;
  public string $marker;
}

class IAMAuthMode {
}

class IPRange {
  public string $cidrip;
  public string $status;
}

class IPRangeList {
}

class IamRoleMissingPermissionsFault {
}

class IamRoleNotFoundFault {
}

class ImportInstallationMediaMessage {
  public string $custom_availability_zone_id;
  public string $engine;
  public string $engine_installation_media_path;
  public string $engine_version;
  public string $os_installation_media_path;
}

class InstallationMedia {
  public string $custom_availability_zone_id;
  public string $engine;
  public string $engine_installation_media_path;
  public string $engine_version;
  public InstallationMediaFailureCause $failure_cause;
  public string $installation_media_id;
  public string $os_installation_media_path;
  public string $status;
}

class InstallationMediaAlreadyExistsFault {
}

class InstallationMediaFailureCause {
  public string $message;
}

class InstallationMediaList {
}

class InstallationMediaMessage {
  public InstallationMediaList $installation_media;
  public string $marker;
}

class InstallationMediaNotFoundFault {
}

class InstanceQuotaExceededFault {
}

class InsufficientDBClusterCapacityFault {
}

class InsufficientDBInstanceCapacityFault {
}

class InsufficientStorageClusterCapacityFault {
}

class Integer {
}

class IntegerOptional {
}

class InvalidDBClusterCapacityFault {
}

class InvalidDBClusterEndpointStateFault {
}

class InvalidDBClusterSnapshotStateFault {
}

class InvalidDBClusterStateFault {
}

class InvalidDBInstanceAutomatedBackupStateFault {
}

class InvalidDBInstanceStateFault {
}

class InvalidDBParameterGroupStateFault {
}

class InvalidDBProxyStateFault {
}

class InvalidDBSecurityGroupStateFault {
}

class InvalidDBSnapshotStateFault {
}

class InvalidDBSubnetGroupFault {
}

class InvalidDBSubnetGroupStateFault {
}

class InvalidDBSubnetStateFault {
}

class InvalidEventSubscriptionStateFault {
}

class InvalidExportOnlyFault {
}

class InvalidExportSourceStateFault {
}

class InvalidExportTaskStateFault {
}

class InvalidGlobalClusterStateFault {
}

class InvalidOptionGroupStateFault {
}

class InvalidRestoreFault {
}

class InvalidS3BucketFault {
}

class InvalidSubnet {
}

class InvalidVPCNetworkStateFault {
}

class KMSKeyNotAccessibleFault {
}

class KeyList {
}

class ListTagsForResourceMessage {
  public FilterList $filters;
  public string $resource_name;
}

class LogTypeList {
}

class Long {
}

class LongOptional {
}

class MaxRecords {
}

class MinimumEngineVersionPerAllowedValue {
  public string $allowed_value;
  public string $minimum_engine_version;
}

class MinimumEngineVersionPerAllowedValueList {
}

class ModifyCertificatesMessage {
  public string $certificate_identifier;
  public BooleanOptional $remove_customer_override;
}

class ModifyCertificatesResult {
  public Certificate $certificate;
}

class ModifyCurrentDBClusterCapacityMessage {
  public IntegerOptional $capacity;
  public string $db_cluster_identifier;
  public IntegerOptional $seconds_before_timeout;
  public string $timeout_action;
}

class ModifyDBClusterEndpointMessage {
  public string $db_cluster_endpoint_identifier;
  public string $endpoint_type;
  public StringList $excluded_members;
  public StringList $static_members;
}

class ModifyDBClusterMessage {
  public boolean $allow_major_version_upgrade;
  public boolean $apply_immediately;
  public LongOptional $backtrack_window;
  public IntegerOptional $backup_retention_period;
  public CloudwatchLogsExportConfiguration $cloudwatch_logs_export_configuration;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_instance_parameter_group_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public BooleanOptional $enable_http_endpoint;
  public BooleanOptional $enable_iam_database_authentication;
  public string $engine_version;
  public string $master_user_password;
  public string $new_db_cluster_identifier;
  public string $option_group_name;
  public IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ScalingConfiguration $scaling_configuration;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class ModifyDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
  public ParametersList $parameters;
}

class ModifyDBClusterResult {
  public DBCluster $db_cluster;
}

class ModifyDBClusterSnapshotAttributeMessage {
  public string $attribute_name;
  public string $db_cluster_snapshot_identifier;
  public AttributeValueList $values_to_add;
  public AttributeValueList $values_to_remove;
}

class ModifyDBClusterSnapshotAttributeResult {
  public DBClusterSnapshotAttributesResult $db_cluster_snapshot_attributes_result;
}

class ModifyDBInstanceMessage {
  public IntegerOptional $allocated_storage;
  public boolean $allow_major_version_upgrade;
  public boolean $apply_immediately;
  public BooleanOptional $auto_minor_version_upgrade;
  public IntegerOptional $backup_retention_period;
  public string $ca_certificate_identifier;
  public BooleanOptional $certificate_rotation_restart;
  public CloudwatchLogsExportConfiguration $cloudwatch_logs_export_configuration;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_parameter_group_name;
  public IntegerOptional $db_port_number;
  public DBSecurityGroupNameList $db_security_groups;
  public string $db_subnet_group_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public BooleanOptional $enable_iam_database_authentication;
  public BooleanOptional $enable_performance_insights;
  public string $engine_version;
  public IntegerOptional $iops;
  public string $license_model;
  public string $master_user_password;
  public IntegerOptional $max_allocated_storage;
  public IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public BooleanOptional $multi_az;
  public string $new_db_instance_identifier;
  public string $option_group_name;
  public string $performance_insights_kms_key_id;
  public IntegerOptional $performance_insights_retention_period;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ProcessorFeatureList $processor_features;
  public IntegerOptional $promotion_tier;
  public BooleanOptional $publicly_accessible;
  public string $storage_type;
  public string $tde_credential_arn;
  public string $tde_credential_password;
  public BooleanOptional $use_default_processor_features;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class ModifyDBInstanceResult {
  public DBInstance $db_instance;
}

class ModifyDBParameterGroupMessage {
  public string $db_parameter_group_name;
  public ParametersList $parameters;
}

class ModifyDBProxyRequest {
  public UserAuthConfigList $auth;
  public string $db_proxy_name;
  public BooleanOptional $debug_logging;
  public IntegerOptional $idle_client_timeout;
  public string $new_db_proxy_name;
  public BooleanOptional $require_tls;
  public string $role_arn;
  public StringList $security_groups;
}

class ModifyDBProxyResponse {
  public DBProxy $db_proxy;
}

class ModifyDBProxyTargetGroupRequest {
  public ConnectionPoolConfiguration $connection_pool_config;
  public string $db_proxy_name;
  public string $new_name;
  public string $target_group_name;
}

class ModifyDBProxyTargetGroupResponse {
  public DBProxyTargetGroup $db_proxy_target_group;
}

class ModifyDBSnapshotAttributeMessage {
  public string $attribute_name;
  public string $db_snapshot_identifier;
  public AttributeValueList $values_to_add;
  public AttributeValueList $values_to_remove;
}

class ModifyDBSnapshotAttributeResult {
  public DBSnapshotAttributesResult $db_snapshot_attributes_result;
}

class ModifyDBSnapshotMessage {
  public string $db_snapshot_identifier;
  public string $engine_version;
  public string $option_group_name;
}

class ModifyDBSnapshotResult {
  public DBSnapshot $db_snapshot;
}

class ModifyDBSubnetGroupMessage {
  public string $db_subnet_group_description;
  public string $db_subnet_group_name;
  public SubnetIdentifierList $subnet_ids;
}

class ModifyDBSubnetGroupResult {
  public DBSubnetGroup $db_subnet_group;
}

class ModifyEventSubscriptionMessage {
  public BooleanOptional $enabled;
  public EventCategoriesList $event_categories;
  public string $sns_topic_arn;
  public string $source_type;
  public string $subscription_name;
}

class ModifyEventSubscriptionResult {
  public EventSubscription $event_subscription;
}

class ModifyGlobalClusterMessage {
  public BooleanOptional $deletion_protection;
  public string $global_cluster_identifier;
  public string $new_global_cluster_identifier;
}

class ModifyGlobalClusterResult {
  public GlobalCluster $global_cluster;
}

class ModifyOptionGroupMessage {
  public boolean $apply_immediately;
  public string $option_group_name;
  public OptionConfigurationList $options_to_include;
  public OptionNamesList $options_to_remove;
}

class ModifyOptionGroupResult {
  public OptionGroup $option_group;
}

class Option {
  public DBSecurityGroupMembershipList $db_security_group_memberships;
  public string $option_description;
  public string $option_name;
  public OptionSettingConfigurationList $option_settings;
  public string $option_version;
  public boolean $permanent;
  public boolean $persistent;
  public IntegerOptional $port;
  public VpcSecurityGroupMembershipList $vpc_security_group_memberships;
}

class OptionConfiguration {
  public DBSecurityGroupNameList $db_security_group_memberships;
  public string $option_name;
  public OptionSettingsList $option_settings;
  public string $option_version;
  public IntegerOptional $port;
  public VpcSecurityGroupIdList $vpc_security_group_memberships;
}

class OptionConfigurationList {
}

class OptionGroup {
  public boolean $allows_vpc_and_non_vpc_instance_memberships;
  public string $engine_name;
  public string $major_engine_version;
  public string $option_group_arn;
  public string $option_group_description;
  public string $option_group_name;
  public OptionsList $options;
  public string $vpc_id;
}

class OptionGroupAlreadyExistsFault {
}

class OptionGroupMembership {
  public string $option_group_name;
  public string $status;
}

class OptionGroupMembershipList {
}

class OptionGroupNotFoundFault {
}

class OptionGroupOption {
  public IntegerOptional $default_port;
  public string $description;
  public string $engine_name;
  public string $major_engine_version;
  public string $minimum_required_minor_engine_version;
  public string $name;
  public OptionGroupOptionSettingsList $option_group_option_settings;
  public OptionGroupOptionVersionsList $option_group_option_versions;
  public OptionsConflictsWith $options_conflicts_with;
  public OptionsDependedOn $options_depended_on;
  public boolean $permanent;
  public boolean $persistent;
  public boolean $port_required;
  public boolean $requires_auto_minor_engine_version_upgrade;
  public BooleanOptional $supports_option_version_downgrade;
  public boolean $vpc_only;
}

class OptionGroupOptionSetting {
  public string $allowed_values;
  public string $apply_type;
  public string $default_value;
  public boolean $is_modifiable;
  public boolean $is_required;
  public MinimumEngineVersionPerAllowedValueList $minimum_engine_version_per_allowed_value;
  public string $setting_description;
  public string $setting_name;
}

class OptionGroupOptionSettingsList {
}

class OptionGroupOptionVersionsList {
}

class OptionGroupOptionsList {
}

class OptionGroupOptionsMessage {
  public string $marker;
  public OptionGroupOptionsList $option_group_options;
}

class OptionGroupQuotaExceededFault {
}

class OptionGroups {
  public string $marker;
  public OptionGroupsList $option_groups_list;
}

class OptionGroupsList {
}

class OptionNamesList {
}

class OptionSetting {
  public string $allowed_values;
  public string $apply_type;
  public string $data_type;
  public string $default_value;
  public string $description;
  public boolean $is_collection;
  public boolean $is_modifiable;
  public string $name;
  public string $value;
}

class OptionSettingConfigurationList {
}

class OptionSettingsList {
}

class OptionVersion {
  public boolean $is_default;
  public string $version;
}

class OptionsConflictsWith {
}

class OptionsDependedOn {
}

class OptionsList {
}

class OrderableDBInstanceOption {
  public string $availability_zone_group;
  public AvailabilityZoneList $availability_zones;
  public AvailableProcessorFeatureList $available_processor_features;
  public string $db_instance_class;
  public string $engine;
  public string $engine_version;
  public string $license_model;
  public IntegerOptional $max_iops_per_db_instance;
  public DoubleOptional $max_iops_per_gib;
  public IntegerOptional $max_storage_size;
  public IntegerOptional $min_iops_per_db_instance;
  public DoubleOptional $min_iops_per_gib;
  public IntegerOptional $min_storage_size;
  public boolean $multi_az_capable;
  public boolean $read_replica_capable;
  public string $storage_type;
  public EngineModeList $supported_engine_modes;
  public boolean $supports_enhanced_monitoring;
  public boolean $supports_iam_database_authentication;
  public boolean $supports_iops;
  public BooleanOptional $supports_kerberos_authentication;
  public boolean $supports_performance_insights;
  public BooleanOptional $supports_storage_autoscaling;
  public boolean $supports_storage_encryption;
  public boolean $vpc;
}

class OrderableDBInstanceOptionsList {
}

class OrderableDBInstanceOptionsMessage {
  public string $marker;
  public OrderableDBInstanceOptionsList $orderable_db_instance_options;
}

class Parameter {
  public string $allowed_values;
  public ApplyMethod $apply_method;
  public string $apply_type;
  public string $data_type;
  public string $description;
  public boolean $is_modifiable;
  public string $minimum_engine_version;
  public string $parameter_name;
  public string $parameter_value;
  public string $source;
  public EngineModeList $supported_engine_modes;
}

class ParametersList {
}

class PendingCloudwatchLogsExports {
  public LogTypeList $log_types_to_disable;
  public LogTypeList $log_types_to_enable;
}

class PendingMaintenanceAction {
  public string $action;
  public TStamp $auto_applied_after_date;
  public TStamp $current_apply_date;
  public string $description;
  public TStamp $forced_apply_date;
  public string $opt_in_status;
}

class PendingMaintenanceActionDetails {
}

class PendingMaintenanceActions {
}

class PendingMaintenanceActionsMessage {
  public string $marker;
  public PendingMaintenanceActions $pending_maintenance_actions;
}

class PendingModifiedValues {
  public IntegerOptional $allocated_storage;
  public IntegerOptional $backup_retention_period;
  public string $ca_certificate_identifier;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_subnet_group_name;
  public string $engine_version;
  public IntegerOptional $iops;
  public string $license_model;
  public string $master_user_password;
  public BooleanOptional $multi_az;
  public PendingCloudwatchLogsExports $pending_cloudwatch_logs_exports;
  public IntegerOptional $port;
  public ProcessorFeatureList $processor_features;
  public string $storage_type;
}

class PointInTimeRestoreNotEnabledFault {
}

class ProcessorFeature {
  public string $name;
  public string $value;
}

class ProcessorFeatureList {
}

class PromoteReadReplicaDBClusterMessage {
  public string $db_cluster_identifier;
}

class PromoteReadReplicaDBClusterResult {
  public DBCluster $db_cluster;
}

class PromoteReadReplicaMessage {
  public IntegerOptional $backup_retention_period;
  public string $db_instance_identifier;
  public string $preferred_backup_window;
}

class PromoteReadReplicaResult {
  public DBInstance $db_instance;
}

class ProvisionedIopsNotAvailableInAZFault {
}

class PurchaseReservedDBInstancesOfferingMessage {
  public IntegerOptional $db_instance_count;
  public string $reserved_db_instance_id;
  public string $reserved_db_instances_offering_id;
  public TagList $tags;
}

class PurchaseReservedDBInstancesOfferingResult {
  public ReservedDBInstance $reserved_db_instance;
}

class Range {
  public int $from;
  public IntegerOptional $step;
  public int $to;
}

class RangeList {
}

class ReadReplicaDBClusterIdentifierList {
}

class ReadReplicaDBInstanceIdentifierList {
}

class ReadReplicaIdentifierList {
}

class ReadersArnList {
}

class RebootDBInstanceMessage {
  public string $db_instance_identifier;
  public BooleanOptional $force_failover;
}

class RebootDBInstanceResult {
  public DBInstance $db_instance;
}

class RecurringCharge {
  public Double $recurring_charge_amount;
  public string $recurring_charge_frequency;
}

class RecurringChargeList {
}

class RegisterDBProxyTargetsRequest {
  public StringList $db_cluster_identifiers;
  public StringList $db_instance_identifiers;
  public string $db_proxy_name;
  public string $target_group_name;
}

class RegisterDBProxyTargetsResponse {
  public TargetList $db_proxy_targets;
}

class RemoveFromGlobalClusterMessage {
  public string $db_cluster_identifier;
  public string $global_cluster_identifier;
}

class RemoveFromGlobalClusterResult {
  public GlobalCluster $global_cluster;
}

class RemoveRoleFromDBClusterMessage {
  public string $db_cluster_identifier;
  public string $feature_name;
  public string $role_arn;
}

class RemoveRoleFromDBInstanceMessage {
  public string $db_instance_identifier;
  public string $feature_name;
  public string $role_arn;
}

class RemoveSourceIdentifierFromSubscriptionMessage {
  public string $source_identifier;
  public string $subscription_name;
}

class RemoveSourceIdentifierFromSubscriptionResult {
  public EventSubscription $event_subscription;
}

class RemoveTagsFromResourceMessage {
  public string $resource_name;
  public KeyList $tag_keys;
}

class ReservedDBInstance {
  public string $currency_code;
  public string $db_instance_class;
  public int $db_instance_count;
  public int $duration;
  public Double $fixed_price;
  public string $lease_id;
  public boolean $multi_az;
  public string $offering_type;
  public string $product_description;
  public RecurringChargeList $recurring_charges;
  public string $reserved_db_instance_arn;
  public string $reserved_db_instance_id;
  public string $reserved_db_instances_offering_id;
  public TStamp $start_time;
  public string $state;
  public Double $usage_price;
}

class ReservedDBInstanceAlreadyExistsFault {
}

class ReservedDBInstanceList {
}

class ReservedDBInstanceMessage {
  public string $marker;
  public ReservedDBInstanceList $reserved_db_instances;
}

class ReservedDBInstanceNotFoundFault {
}

class ReservedDBInstanceQuotaExceededFault {
}

class ReservedDBInstancesOffering {
  public string $currency_code;
  public string $db_instance_class;
  public int $duration;
  public Double $fixed_price;
  public boolean $multi_az;
  public string $offering_type;
  public string $product_description;
  public RecurringChargeList $recurring_charges;
  public string $reserved_db_instances_offering_id;
  public Double $usage_price;
}

class ReservedDBInstancesOfferingList {
}

class ReservedDBInstancesOfferingMessage {
  public string $marker;
  public ReservedDBInstancesOfferingList $reserved_db_instances_offerings;
}

class ReservedDBInstancesOfferingNotFoundFault {
}

class ResetDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
  public ParametersList $parameters;
  public boolean $reset_all_parameters;
}

class ResetDBParameterGroupMessage {
  public string $db_parameter_group_name;
  public ParametersList $parameters;
  public boolean $reset_all_parameters;
}

class ResourceNotFoundFault {
}

class ResourcePendingMaintenanceActions {
  public PendingMaintenanceActionDetails $pending_maintenance_action_details;
  public string $resource_identifier;
}

class RestoreDBClusterFromS3Message {
  public AvailabilityZones $availability_zones;
  public LongOptional $backtrack_window;
  public IntegerOptional $backup_retention_period;
  public string $character_set_name;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_subnet_group_name;
  public string $database_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public string $engine_version;
  public string $kms_key_id;
  public string $master_user_password;
  public string $master_username;
  public string $option_group_name;
  public IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public string $s_3_bucket_name;
  public string $s_3_ingestion_role_arn;
  public string $s_3_prefix;
  public string $source_engine;
  public string $source_engine_version;
  public BooleanOptional $storage_encrypted;
  public TagList $tags;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class RestoreDBClusterFromS3Result {
  public DBCluster $db_cluster;
}

class RestoreDBClusterFromSnapshotMessage {
  public AvailabilityZones $availability_zones;
  public LongOptional $backtrack_window;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_subnet_group_name;
  public string $database_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public string $engine_mode;
  public string $engine_version;
  public string $kms_key_id;
  public string $option_group_name;
  public IntegerOptional $port;
  public ScalingConfiguration $scaling_configuration;
  public string $snapshot_identifier;
  public TagList $tags;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class RestoreDBClusterFromSnapshotResult {
  public DBCluster $db_cluster;
}

class RestoreDBClusterToPointInTimeMessage {
  public LongOptional $backtrack_window;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_subnet_group_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_iam_database_authentication;
  public string $kms_key_id;
  public string $option_group_name;
  public IntegerOptional $port;
  public TStamp $restore_to_time;
  public string $restore_type;
  public string $source_db_cluster_identifier;
  public TagList $tags;
  public boolean $use_latest_restorable_time;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class RestoreDBClusterToPointInTimeResult {
  public DBCluster $db_cluster;
}

class RestoreDBInstanceFromDBSnapshotMessage {
  public BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_name;
  public string $db_parameter_group_name;
  public string $db_snapshot_identifier;
  public string $db_subnet_group_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public IntegerOptional $iops;
  public string $license_model;
  public BooleanOptional $multi_az;
  public string $option_group_name;
  public IntegerOptional $port;
  public ProcessorFeatureList $processor_features;
  public BooleanOptional $publicly_accessible;
  public string $storage_type;
  public TagList $tags;
  public string $tde_credential_arn;
  public string $tde_credential_password;
  public BooleanOptional $use_default_processor_features;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class RestoreDBInstanceFromDBSnapshotResult {
  public DBInstance $db_instance;
}

class RestoreDBInstanceFromS3Message {
  public IntegerOptional $allocated_storage;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public IntegerOptional $backup_retention_period;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_name;
  public string $db_parameter_group_name;
  public DBSecurityGroupNameList $db_security_groups;
  public string $db_subnet_group_name;
  public BooleanOptional $deletion_protection;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_iam_database_authentication;
  public BooleanOptional $enable_performance_insights;
  public string $engine;
  public string $engine_version;
  public IntegerOptional $iops;
  public string $kms_key_id;
  public string $license_model;
  public string $master_user_password;
  public string $master_username;
  public IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public BooleanOptional $multi_az;
  public string $option_group_name;
  public string $performance_insights_kms_key_id;
  public IntegerOptional $performance_insights_retention_period;
  public IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ProcessorFeatureList $processor_features;
  public BooleanOptional $publicly_accessible;
  public string $s_3_bucket_name;
  public string $s_3_ingestion_role_arn;
  public string $s_3_prefix;
  public string $source_engine;
  public string $source_engine_version;
  public BooleanOptional $storage_encrypted;
  public string $storage_type;
  public TagList $tags;
  public BooleanOptional $use_default_processor_features;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class RestoreDBInstanceFromS3Result {
  public DBInstance $db_instance;
}

class RestoreDBInstanceToPointInTimeMessage {
  public BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_name;
  public string $db_parameter_group_name;
  public string $db_subnet_group_name;
  public BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public LogTypeList $enable_cloudwatch_logs_exports;
  public BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public IntegerOptional $iops;
  public string $license_model;
  public BooleanOptional $multi_az;
  public string $option_group_name;
  public IntegerOptional $port;
  public ProcessorFeatureList $processor_features;
  public BooleanOptional $publicly_accessible;
  public TStamp $restore_time;
  public string $source_db_instance_identifier;
  public string $source_dbi_resource_id;
  public string $storage_type;
  public TagList $tags;
  public string $target_db_instance_identifier;
  public string $tde_credential_arn;
  public string $tde_credential_password;
  public BooleanOptional $use_default_processor_features;
  public boolean $use_latest_restorable_time;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class RestoreDBInstanceToPointInTimeResult {
  public DBInstance $db_instance;
}

class RestoreWindow {
  public TStamp $earliest_time;
  public TStamp $latest_time;
}

class RevokeDBSecurityGroupIngressMessage {
  public string $cidrip;
  public string $db_security_group_name;
  public string $ec_2_security_group_id;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
}

class RevokeDBSecurityGroupIngressResult {
  public DBSecurityGroup $db_security_group;
}

class SNSInvalidTopicFault {
}

class SNSNoAuthorizationFault {
}

class SNSTopicArnNotFoundFault {
}

class ScalingConfiguration {
  public BooleanOptional $auto_pause;
  public IntegerOptional $max_capacity;
  public IntegerOptional $min_capacity;
  public IntegerOptional $seconds_until_auto_pause;
  public string $timeout_action;
}

class ScalingConfigurationInfo {
  public BooleanOptional $auto_pause;
  public IntegerOptional $max_capacity;
  public IntegerOptional $min_capacity;
  public IntegerOptional $seconds_until_auto_pause;
  public string $timeout_action;
}

class SharedSnapshotQuotaExceededFault {
}

class SnapshotQuotaExceededFault {
}

class SourceIdsList {
}

class SourceNotFoundFault {
}

class SourceRegion {
  public string $endpoint;
  public string $region_name;
  public string $status;
}

class SourceRegionList {
}

class SourceRegionMessage {
  public string $marker;
  public SourceRegionList $source_regions;
}

class SourceType {
}

class StartActivityStreamRequest {
  public BooleanOptional $apply_immediately;
  public string $kms_key_id;
  public ActivityStreamMode $mode;
  public string $resource_arn;
}

class StartActivityStreamResponse {
  public boolean $apply_immediately;
  public string $kinesis_stream_name;
  public string $kms_key_id;
  public ActivityStreamMode $mode;
  public ActivityStreamStatus $status;
}

class StartDBClusterMessage {
  public string $db_cluster_identifier;
}

class StartDBClusterResult {
  public DBCluster $db_cluster;
}

class StartDBInstanceMessage {
  public string $db_instance_identifier;
}

class StartDBInstanceResult {
  public DBInstance $db_instance;
}

class StartExportTaskMessage {
  public StringList $export_only;
  public string $export_task_identifier;
  public string $iam_role_arn;
  public string $kms_key_id;
  public string $s_3_bucket_name;
  public string $s_3_prefix;
  public string $source_arn;
}

class StopActivityStreamRequest {
  public BooleanOptional $apply_immediately;
  public string $resource_arn;
}

class StopActivityStreamResponse {
  public string $kinesis_stream_name;
  public string $kms_key_id;
  public ActivityStreamStatus $status;
}

class StopDBClusterMessage {
  public string $db_cluster_identifier;
}

class StopDBClusterResult {
  public DBCluster $db_cluster;
}

class StopDBInstanceMessage {
  public string $db_instance_identifier;
  public string $db_snapshot_identifier;
}

class StopDBInstanceResult {
  public DBInstance $db_instance;
}

class StorageQuotaExceededFault {
}

class StorageTypeNotSupportedFault {
}

class String {
}

class StringList {
}

class StringSensitive {
}

class Subnet {
  public AvailabilityZone $subnet_availability_zone;
  public string $subnet_identifier;
  public string $subnet_status;
}

class SubnetAlreadyInUse {
}

class SubnetIdentifierList {
}

class SubnetList {
}

class SubscriptionAlreadyExistFault {
}

class SubscriptionCategoryNotFoundFault {
}

class SubscriptionNotFoundFault {
}

class SupportedCharacterSetsList {
}

class SupportedTimezonesList {
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

class TargetGroupList {
}

class TargetHealth {
  public string $description;
  public TargetHealthReason $reason;
  public TargetState $state;
}

class TargetHealthReason {
}

class TargetList {
}

class TargetState {
}

class TargetType {
}

class Timezone {
  public string $timezone_name;
}

class UpgradeTarget {
  public boolean $auto_upgrade;
  public string $description;
  public string $engine;
  public string $engine_version;
  public boolean $is_major_version_upgrade;
}

class UserAuthConfig {
  public AuthScheme $auth_scheme;
  public string $description;
  public IAMAuthMode $iam_auth;
  public string $secret_arn;
  public string $user_name;
}

class UserAuthConfigInfo {
  public AuthScheme $auth_scheme;
  public string $description;
  public IAMAuthMode $iam_auth;
  public string $secret_arn;
  public string $user_name;
}

class UserAuthConfigInfoList {
}

class UserAuthConfigList {
}

class ValidDBInstanceModificationsMessage {
  public ValidStorageOptionsList $storage;
  public AvailableProcessorFeatureList $valid_processor_features;
}

class ValidStorageOptions {
  public DoubleRangeList $iops_to_storage_ratio;
  public RangeList $provisioned_iops;
  public RangeList $storage_size;
  public string $storage_type;
  public boolean $supports_storage_autoscaling;
}

class ValidStorageOptionsList {
}

class ValidUpgradeTargetList {
}

class VpcSecurityGroupIdList {
}

class VpcSecurityGroupMembership {
  public string $status;
  public string $vpc_security_group_id;
}

class VpcSecurityGroupMembershipList {
}

class VpnDetails {
  public string $vpn_gateway_ip;
  public string $vpn_id;
  public string $vpn_name;
  public StringSensitive $vpn_psk;
  public string $vpn_state;
  public string $vpn_tunnel_originator_ip;
}

