<?hh // strict
namespace slack\aws\rds;

interface RDS {
  public function AddRoleToDBCluster(AddRoleToDBClusterMessage $in): Awaitable<\Errors\Error>;
  public function AddRoleToDBInstance(AddRoleToDBInstanceMessage $in): Awaitable<\Errors\Error>;
  public function AddSourceIdentifierToSubscription(AddSourceIdentifierToSubscriptionMessage $in): Awaitable<\Errors\Result<AddSourceIdentifierToSubscriptionResult>>;
  public function AddTagsToResource(AddTagsToResourceMessage $in): Awaitable<\Errors\Error>;
  public function ApplyPendingMaintenanceAction(ApplyPendingMaintenanceActionMessage $in): Awaitable<\Errors\Result<ApplyPendingMaintenanceActionResult>>;
  public function AuthorizeDBSecurityGroupIngress(AuthorizeDBSecurityGroupIngressMessage $in): Awaitable<\Errors\Result<AuthorizeDBSecurityGroupIngressResult>>;
  public function BacktrackDBCluster(BacktrackDBClusterMessage $in): Awaitable<\Errors\Result<DBClusterBacktrack>>;
  public function CancelExportTask(CancelExportTaskMessage $in): Awaitable<\Errors\Result<ExportTask>>;
  public function CopyDBClusterParameterGroup(CopyDBClusterParameterGroupMessage $in): Awaitable<\Errors\Result<CopyDBClusterParameterGroupResult>>;
  public function CopyDBClusterSnapshot(CopyDBClusterSnapshotMessage $in): Awaitable<\Errors\Result<CopyDBClusterSnapshotResult>>;
  public function CopyDBParameterGroup(CopyDBParameterGroupMessage $in): Awaitable<\Errors\Result<CopyDBParameterGroupResult>>;
  public function CopyDBSnapshot(CopyDBSnapshotMessage $in): Awaitable<\Errors\Result<CopyDBSnapshotResult>>;
  public function CopyOptionGroup(CopyOptionGroupMessage $in): Awaitable<\Errors\Result<CopyOptionGroupResult>>;
  public function CreateCustomAvailabilityZone(CreateCustomAvailabilityZoneMessage $in): Awaitable<\Errors\Result<CreateCustomAvailabilityZoneResult>>;
  public function CreateDBCluster(CreateDBClusterMessage $in): Awaitable<\Errors\Result<CreateDBClusterResult>>;
  public function CreateDBClusterEndpoint(CreateDBClusterEndpointMessage $in): Awaitable<\Errors\Result<DBClusterEndpoint>>;
  public function CreateDBClusterParameterGroup(CreateDBClusterParameterGroupMessage $in): Awaitable<\Errors\Result<CreateDBClusterParameterGroupResult>>;
  public function CreateDBClusterSnapshot(CreateDBClusterSnapshotMessage $in): Awaitable<\Errors\Result<CreateDBClusterSnapshotResult>>;
  public function CreateDBInstance(CreateDBInstanceMessage $in): Awaitable<\Errors\Result<CreateDBInstanceResult>>;
  public function CreateDBInstanceReadReplica(CreateDBInstanceReadReplicaMessage $in): Awaitable<\Errors\Result<CreateDBInstanceReadReplicaResult>>;
  public function CreateDBParameterGroup(CreateDBParameterGroupMessage $in): Awaitable<\Errors\Result<CreateDBParameterGroupResult>>;
  public function CreateDBProxy(CreateDBProxyRequest $in): Awaitable<\Errors\Result<CreateDBProxyResponse>>;
  public function CreateDBSecurityGroup(CreateDBSecurityGroupMessage $in): Awaitable<\Errors\Result<CreateDBSecurityGroupResult>>;
  public function CreateDBSnapshot(CreateDBSnapshotMessage $in): Awaitable<\Errors\Result<CreateDBSnapshotResult>>;
  public function CreateDBSubnetGroup(CreateDBSubnetGroupMessage $in): Awaitable<\Errors\Result<CreateDBSubnetGroupResult>>;
  public function CreateEventSubscription(CreateEventSubscriptionMessage $in): Awaitable<\Errors\Result<CreateEventSubscriptionResult>>;
  public function CreateGlobalCluster(CreateGlobalClusterMessage $in): Awaitable<\Errors\Result<CreateGlobalClusterResult>>;
  public function CreateOptionGroup(CreateOptionGroupMessage $in): Awaitable<\Errors\Result<CreateOptionGroupResult>>;
  public function DeleteCustomAvailabilityZone(DeleteCustomAvailabilityZoneMessage $in): Awaitable<\Errors\Result<DeleteCustomAvailabilityZoneResult>>;
  public function DeleteDBCluster(DeleteDBClusterMessage $in): Awaitable<\Errors\Result<DeleteDBClusterResult>>;
  public function DeleteDBClusterEndpoint(DeleteDBClusterEndpointMessage $in): Awaitable<\Errors\Result<DBClusterEndpoint>>;
  public function DeleteDBClusterParameterGroup(DeleteDBClusterParameterGroupMessage $in): Awaitable<\Errors\Error>;
  public function DeleteDBClusterSnapshot(DeleteDBClusterSnapshotMessage $in): Awaitable<\Errors\Result<DeleteDBClusterSnapshotResult>>;
  public function DeleteDBInstance(DeleteDBInstanceMessage $in): Awaitable<\Errors\Result<DeleteDBInstanceResult>>;
  public function DeleteDBInstanceAutomatedBackup(DeleteDBInstanceAutomatedBackupMessage $in): Awaitable<\Errors\Result<DeleteDBInstanceAutomatedBackupResult>>;
  public function DeleteDBParameterGroup(DeleteDBParameterGroupMessage $in): Awaitable<\Errors\Error>;
  public function DeleteDBProxy(DeleteDBProxyRequest $in): Awaitable<\Errors\Result<DeleteDBProxyResponse>>;
  public function DeleteDBSecurityGroup(DeleteDBSecurityGroupMessage $in): Awaitable<\Errors\Error>;
  public function DeleteDBSnapshot(DeleteDBSnapshotMessage $in): Awaitable<\Errors\Result<DeleteDBSnapshotResult>>;
  public function DeleteDBSubnetGroup(DeleteDBSubnetGroupMessage $in): Awaitable<\Errors\Error>;
  public function DeleteEventSubscription(DeleteEventSubscriptionMessage $in): Awaitable<\Errors\Result<DeleteEventSubscriptionResult>>;
  public function DeleteGlobalCluster(DeleteGlobalClusterMessage $in): Awaitable<\Errors\Result<DeleteGlobalClusterResult>>;
  public function DeleteInstallationMedia(DeleteInstallationMediaMessage $in): Awaitable<\Errors\Result<InstallationMedia>>;
  public function DeleteOptionGroup(DeleteOptionGroupMessage $in): Awaitable<\Errors\Error>;
  public function DeregisterDBProxyTargets(DeregisterDBProxyTargetsRequest $in): Awaitable<\Errors\Result<DeregisterDBProxyTargetsResponse>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesMessage $in): Awaitable<\Errors\Result<AccountAttributesMessage>>;
  public function DescribeCertificates(DescribeCertificatesMessage $in): Awaitable<\Errors\Result<CertificateMessage>>;
  public function DescribeCustomAvailabilityZones(DescribeCustomAvailabilityZonesMessage $in): Awaitable<\Errors\Result<CustomAvailabilityZoneMessage>>;
  public function DescribeDBClusterBacktracks(DescribeDBClusterBacktracksMessage $in): Awaitable<\Errors\Result<DBClusterBacktrackMessage>>;
  public function DescribeDBClusterEndpoints(DescribeDBClusterEndpointsMessage $in): Awaitable<\Errors\Result<DBClusterEndpointMessage>>;
  public function DescribeDBClusterParameterGroups(DescribeDBClusterParameterGroupsMessage $in): Awaitable<\Errors\Result<DBClusterParameterGroupsMessage>>;
  public function DescribeDBClusterParameters(DescribeDBClusterParametersMessage $in): Awaitable<\Errors\Result<DBClusterParameterGroupDetails>>;
  public function DescribeDBClusterSnapshotAttributes(DescribeDBClusterSnapshotAttributesMessage $in): Awaitable<\Errors\Result<DescribeDBClusterSnapshotAttributesResult>>;
  public function DescribeDBClusterSnapshots(DescribeDBClusterSnapshotsMessage $in): Awaitable<\Errors\Result<DBClusterSnapshotMessage>>;
  public function DescribeDBClusters(DescribeDBClustersMessage $in): Awaitable<\Errors\Result<DBClusterMessage>>;
  public function DescribeDBEngineVersions(DescribeDBEngineVersionsMessage $in): Awaitable<\Errors\Result<DBEngineVersionMessage>>;
  public function DescribeDBInstanceAutomatedBackups(DescribeDBInstanceAutomatedBackupsMessage $in): Awaitable<\Errors\Result<DBInstanceAutomatedBackupMessage>>;
  public function DescribeDBInstances(DescribeDBInstancesMessage $in): Awaitable<\Errors\Result<DBInstanceMessage>>;
  public function DescribeDBLogFiles(DescribeDBLogFilesMessage $in): Awaitable<\Errors\Result<DescribeDBLogFilesResponse>>;
  public function DescribeDBParameterGroups(DescribeDBParameterGroupsMessage $in): Awaitable<\Errors\Result<DBParameterGroupsMessage>>;
  public function DescribeDBParameters(DescribeDBParametersMessage $in): Awaitable<\Errors\Result<DBParameterGroupDetails>>;
  public function DescribeDBProxies(DescribeDBProxiesRequest $in): Awaitable<\Errors\Result<DescribeDBProxiesResponse>>;
  public function DescribeDBProxyTargetGroups(DescribeDBProxyTargetGroupsRequest $in): Awaitable<\Errors\Result<DescribeDBProxyTargetGroupsResponse>>;
  public function DescribeDBProxyTargets(DescribeDBProxyTargetsRequest $in): Awaitable<\Errors\Result<DescribeDBProxyTargetsResponse>>;
  public function DescribeDBSecurityGroups(DescribeDBSecurityGroupsMessage $in): Awaitable<\Errors\Result<DBSecurityGroupMessage>>;
  public function DescribeDBSnapshotAttributes(DescribeDBSnapshotAttributesMessage $in): Awaitable<\Errors\Result<DescribeDBSnapshotAttributesResult>>;
  public function DescribeDBSnapshots(DescribeDBSnapshotsMessage $in): Awaitable<\Errors\Result<DBSnapshotMessage>>;
  public function DescribeDBSubnetGroups(DescribeDBSubnetGroupsMessage $in): Awaitable<\Errors\Result<DBSubnetGroupMessage>>;
  public function DescribeEngineDefaultClusterParameters(DescribeEngineDefaultClusterParametersMessage $in): Awaitable<\Errors\Result<DescribeEngineDefaultClusterParametersResult>>;
  public function DescribeEngineDefaultParameters(DescribeEngineDefaultParametersMessage $in): Awaitable<\Errors\Result<DescribeEngineDefaultParametersResult>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage $in): Awaitable<\Errors\Result<EventCategoriesMessage>>;
  public function DescribeEventSubscriptions(DescribeEventSubscriptionsMessage $in): Awaitable<\Errors\Result<EventSubscriptionsMessage>>;
  public function DescribeEvents(DescribeEventsMessage $in): Awaitable<\Errors\Result<EventsMessage>>;
  public function DescribeExportTasks(DescribeExportTasksMessage $in): Awaitable<\Errors\Result<ExportTasksMessage>>;
  public function DescribeGlobalClusters(DescribeGlobalClustersMessage $in): Awaitable<\Errors\Result<GlobalClustersMessage>>;
  public function DescribeInstallationMedia(DescribeInstallationMediaMessage $in): Awaitable<\Errors\Result<InstallationMediaMessage>>;
  public function DescribeOptionGroupOptions(DescribeOptionGroupOptionsMessage $in): Awaitable<\Errors\Result<OptionGroupOptionsMessage>>;
  public function DescribeOptionGroups(DescribeOptionGroupsMessage $in): Awaitable<\Errors\Result<OptionGroups>>;
  public function DescribeOrderableDBInstanceOptions(DescribeOrderableDBInstanceOptionsMessage $in): Awaitable<\Errors\Result<OrderableDBInstanceOptionsMessage>>;
  public function DescribePendingMaintenanceActions(DescribePendingMaintenanceActionsMessage $in): Awaitable<\Errors\Result<PendingMaintenanceActionsMessage>>;
  public function DescribeReservedDBInstances(DescribeReservedDBInstancesMessage $in): Awaitable<\Errors\Result<ReservedDBInstanceMessage>>;
  public function DescribeReservedDBInstancesOfferings(DescribeReservedDBInstancesOfferingsMessage $in): Awaitable<\Errors\Result<ReservedDBInstancesOfferingMessage>>;
  public function DescribeSourceRegions(DescribeSourceRegionsMessage $in): Awaitable<\Errors\Result<SourceRegionMessage>>;
  public function DescribeValidDBInstanceModifications(DescribeValidDBInstanceModificationsMessage $in): Awaitable<\Errors\Result<DescribeValidDBInstanceModificationsResult>>;
  public function DownloadDBLogFilePortion(DownloadDBLogFilePortionMessage $in): Awaitable<\Errors\Result<DownloadDBLogFilePortionDetails>>;
  public function FailoverDBCluster(FailoverDBClusterMessage $in): Awaitable<\Errors\Result<FailoverDBClusterResult>>;
  public function ImportInstallationMedia(ImportInstallationMediaMessage $in): Awaitable<\Errors\Result<InstallationMedia>>;
  public function ListTagsForResource(ListTagsForResourceMessage $in): Awaitable<\Errors\Result<TagListMessage>>;
  public function ModifyCertificates(ModifyCertificatesMessage $in): Awaitable<\Errors\Result<ModifyCertificatesResult>>;
  public function ModifyCurrentDBClusterCapacity(ModifyCurrentDBClusterCapacityMessage $in): Awaitable<\Errors\Result<DBClusterCapacityInfo>>;
  public function ModifyDBCluster(ModifyDBClusterMessage $in): Awaitable<\Errors\Result<ModifyDBClusterResult>>;
  public function ModifyDBClusterEndpoint(ModifyDBClusterEndpointMessage $in): Awaitable<\Errors\Result<DBClusterEndpoint>>;
  public function ModifyDBClusterParameterGroup(ModifyDBClusterParameterGroupMessage $in): Awaitable<\Errors\Result<DBClusterParameterGroupNameMessage>>;
  public function ModifyDBClusterSnapshotAttribute(ModifyDBClusterSnapshotAttributeMessage $in): Awaitable<\Errors\Result<ModifyDBClusterSnapshotAttributeResult>>;
  public function ModifyDBInstance(ModifyDBInstanceMessage $in): Awaitable<\Errors\Result<ModifyDBInstanceResult>>;
  public function ModifyDBParameterGroup(ModifyDBParameterGroupMessage $in): Awaitable<\Errors\Result<DBParameterGroupNameMessage>>;
  public function ModifyDBProxy(ModifyDBProxyRequest $in): Awaitable<\Errors\Result<ModifyDBProxyResponse>>;
  public function ModifyDBProxyTargetGroup(ModifyDBProxyTargetGroupRequest $in): Awaitable<\Errors\Result<ModifyDBProxyTargetGroupResponse>>;
  public function ModifyDBSnapshot(ModifyDBSnapshotMessage $in): Awaitable<\Errors\Result<ModifyDBSnapshotResult>>;
  public function ModifyDBSnapshotAttribute(ModifyDBSnapshotAttributeMessage $in): Awaitable<\Errors\Result<ModifyDBSnapshotAttributeResult>>;
  public function ModifyDBSubnetGroup(ModifyDBSubnetGroupMessage $in): Awaitable<\Errors\Result<ModifyDBSubnetGroupResult>>;
  public function ModifyEventSubscription(ModifyEventSubscriptionMessage $in): Awaitable<\Errors\Result<ModifyEventSubscriptionResult>>;
  public function ModifyGlobalCluster(ModifyGlobalClusterMessage $in): Awaitable<\Errors\Result<ModifyGlobalClusterResult>>;
  public function ModifyOptionGroup(ModifyOptionGroupMessage $in): Awaitable<\Errors\Result<ModifyOptionGroupResult>>;
  public function PromoteReadReplica(PromoteReadReplicaMessage $in): Awaitable<\Errors\Result<PromoteReadReplicaResult>>;
  public function PromoteReadReplicaDBCluster(PromoteReadReplicaDBClusterMessage $in): Awaitable<\Errors\Result<PromoteReadReplicaDBClusterResult>>;
  public function PurchaseReservedDBInstancesOffering(PurchaseReservedDBInstancesOfferingMessage $in): Awaitable<\Errors\Result<PurchaseReservedDBInstancesOfferingResult>>;
  public function RebootDBInstance(RebootDBInstanceMessage $in): Awaitable<\Errors\Result<RebootDBInstanceResult>>;
  public function RegisterDBProxyTargets(RegisterDBProxyTargetsRequest $in): Awaitable<\Errors\Result<RegisterDBProxyTargetsResponse>>;
  public function RemoveFromGlobalCluster(RemoveFromGlobalClusterMessage $in): Awaitable<\Errors\Result<RemoveFromGlobalClusterResult>>;
  public function RemoveRoleFromDBCluster(RemoveRoleFromDBClusterMessage $in): Awaitable<\Errors\Error>;
  public function RemoveRoleFromDBInstance(RemoveRoleFromDBInstanceMessage $in): Awaitable<\Errors\Error>;
  public function RemoveSourceIdentifierFromSubscription(RemoveSourceIdentifierFromSubscriptionMessage $in): Awaitable<\Errors\Result<RemoveSourceIdentifierFromSubscriptionResult>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceMessage $in): Awaitable<\Errors\Error>;
  public function ResetDBClusterParameterGroup(ResetDBClusterParameterGroupMessage $in): Awaitable<\Errors\Result<DBClusterParameterGroupNameMessage>>;
  public function ResetDBParameterGroup(ResetDBParameterGroupMessage $in): Awaitable<\Errors\Result<DBParameterGroupNameMessage>>;
  public function RestoreDBClusterFromS3(RestoreDBClusterFromS3Message $in): Awaitable<\Errors\Result<RestoreDBClusterFromS3Result>>;
  public function RestoreDBClusterFromSnapshot(RestoreDBClusterFromSnapshotMessage $in): Awaitable<\Errors\Result<RestoreDBClusterFromSnapshotResult>>;
  public function RestoreDBClusterToPointInTime(RestoreDBClusterToPointInTimeMessage $in): Awaitable<\Errors\Result<RestoreDBClusterToPointInTimeResult>>;
  public function RestoreDBInstanceFromDBSnapshot(RestoreDBInstanceFromDBSnapshotMessage $in): Awaitable<\Errors\Result<RestoreDBInstanceFromDBSnapshotResult>>;
  public function RestoreDBInstanceFromS3(RestoreDBInstanceFromS3Message $in): Awaitable<\Errors\Result<RestoreDBInstanceFromS3Result>>;
  public function RestoreDBInstanceToPointInTime(RestoreDBInstanceToPointInTimeMessage $in): Awaitable<\Errors\Result<RestoreDBInstanceToPointInTimeResult>>;
  public function RevokeDBSecurityGroupIngress(RevokeDBSecurityGroupIngressMessage $in): Awaitable<\Errors\Result<RevokeDBSecurityGroupIngressResult>>;
  public function StartActivityStream(StartActivityStreamRequest $in): Awaitable<\Errors\Result<StartActivityStreamResponse>>;
  public function StartDBCluster(StartDBClusterMessage $in): Awaitable<\Errors\Result<StartDBClusterResult>>;
  public function StartDBInstance(StartDBInstanceMessage $in): Awaitable<\Errors\Result<StartDBInstanceResult>>;
  public function StartExportTask(StartExportTaskMessage $in): Awaitable<\Errors\Result<ExportTask>>;
  public function StopActivityStream(StopActivityStreamRequest $in): Awaitable<\Errors\Result<StopActivityStreamResponse>>;
  public function StopDBCluster(StopDBClusterMessage $in): Awaitable<\Errors\Result<StopDBClusterResult>>;
  public function StopDBInstance(StopDBInstanceMessage $in): Awaitable<\Errors\Result<StopDBInstanceResult>>;
}

class AccountAttributesMessage {
  public ?AccountQuotaList $account_quotas;

  public function __construct(shape(
    ?'account_quotas' => ?AccountQuotaList,
  ) $s = shape()) {
    $this->account_quotas = $s['account_quotas'] ?? vec[];
  }
}

class AccountQuota {
  public string $account_quota_name;
  public ?Long $max;
  public ?Long $used;

  public function __construct(shape(
    ?'account_quota_name' => string,
    ?'max' => ?Long,
    ?'used' => ?Long,
  ) $s = shape()) {
    $this->account_quota_name = $s['account_quota_name'] ?? '';
    $this->max = $s['max'] ?? 0;
    $this->used = $s['used'] ?? 0;
  }
}

type AccountQuotaList = vec<AccountQuota>;

type ActivityStreamMode = string;

type ActivityStreamStatus = string;

class AddRoleToDBClusterMessage {
  public string $db_cluster_identifier;
  public string $feature_name;
  public string $role_arn;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
    ?'feature_name' => string,
    ?'role_arn' => string,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->feature_name = $s['feature_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class AddRoleToDBInstanceMessage {
  public string $db_instance_identifier;
  public string $feature_name;
  public string $role_arn;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'feature_name' => string,
    ?'role_arn' => string,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->feature_name = $s['feature_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class AddSourceIdentifierToSubscriptionMessage {
  public string $source_identifier;
  public string $subscription_name;

  public function __construct(shape(
    ?'source_identifier' => string,
    ?'subscription_name' => string,
  ) $s = shape()) {
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->subscription_name = $s['subscription_name'] ?? '';
  }
}

class AddSourceIdentifierToSubscriptionResult {
  public ?EventSubscription $event_subscription;

  public function __construct(shape(
    ?'event_subscription' => ?EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $s['event_subscription'] ?? null;
  }
}

class AddTagsToResourceMessage {
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

type ApplyMethod = string;

class ApplyPendingMaintenanceActionMessage {
  public string $apply_action;
  public string $opt_in_type;
  public string $resource_identifier;

  public function __construct(shape(
    ?'apply_action' => string,
    ?'opt_in_type' => string,
    ?'resource_identifier' => string,
  ) $s = shape()) {
    $this->apply_action = $s['apply_action'] ?? '';
    $this->opt_in_type = $s['opt_in_type'] ?? '';
    $this->resource_identifier = $s['resource_identifier'] ?? '';
  }
}

class ApplyPendingMaintenanceActionResult {
  public ?ResourcePendingMaintenanceActions $resource_pending_maintenance_actions;

  public function __construct(shape(
    ?'resource_pending_maintenance_actions' => ?ResourcePendingMaintenanceActions,
  ) $s = shape()) {
    $this->resource_pending_maintenance_actions = $s['resource_pending_maintenance_actions'] ?? null;
  }
}

type AttributeValueList = vec<String>;

type AuthScheme = string;

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

class AuthorizationQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AuthorizeDBSecurityGroupIngressMessage {
  public string $cidrip;
  public string $db_security_group_name;
  public string $ec_2_security_group_id;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;

  public function __construct(shape(
    ?'cidrip' => string,
    ?'db_security_group_name' => string,
    ?'ec_2_security_group_id' => string,
    ?'ec_2_security_group_name' => string,
    ?'ec_2_security_group_owner_id' => string,
  ) $s = shape()) {
    $this->cidrip = $s['cidrip'] ?? '';
    $this->db_security_group_name = $s['db_security_group_name'] ?? '';
    $this->ec_2_security_group_id = $s['ec_2_security_group_id'] ?? '';
    $this->ec_2_security_group_name = $s['ec_2_security_group_name'] ?? '';
    $this->ec_2_security_group_owner_id = $s['ec_2_security_group_owner_id'] ?? '';
  }
}

class AuthorizeDBSecurityGroupIngressResult {
  public ?DBSecurityGroup $db_security_group;

  public function __construct(shape(
    ?'db_security_group' => ?DBSecurityGroup,
  ) $s = shape()) {
    $this->db_security_group = $s['db_security_group'] ?? null;
  }
}

class AvailabilityZone {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type AvailabilityZoneList = vec<AvailabilityZone>;

type AvailabilityZones = vec<String>;

class AvailableProcessorFeature {
  public string $allowed_values;
  public string $default_value;
  public string $name;

  public function __construct(shape(
    ?'allowed_values' => string,
    ?'default_value' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? '';
    $this->default_value = $s['default_value'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type AvailableProcessorFeatureList = vec<AvailableProcessorFeature>;

class BacktrackDBClusterMessage {
  public ?TStamp $backtrack_to;
  public string $db_cluster_identifier;
  public ?BooleanOptional $force;
  public ?BooleanOptional $use_earliest_time_on_point_in_time_unavailable;

  public function __construct(shape(
    ?'backtrack_to' => ?TStamp,
    ?'db_cluster_identifier' => string,
    ?'force' => ?BooleanOptional,
    ?'use_earliest_time_on_point_in_time_unavailable' => ?BooleanOptional,
  ) $s = shape()) {
    $this->backtrack_to = $s['backtrack_to'] ?? 0;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->force = $s['force'] ?? false;
    $this->use_earliest_time_on_point_in_time_unavailable = $s['use_earliest_time_on_point_in_time_unavailable'] ?? false;
  }
}

class BackupPolicyNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Boolean = bool;

type BooleanOptional = bool;

class CancelExportTaskMessage {
  public string $export_task_identifier;

  public function __construct(shape(
    ?'export_task_identifier' => string,
  ) $s = shape()) {
    $this->export_task_identifier = $s['export_task_identifier'] ?? '';
  }
}

class Certificate {
  public string $certificate_arn;
  public string $certificate_identifier;
  public string $certificate_type;
  public ?BooleanOptional $customer_override;
  public ?TStamp $customer_override_valid_till;
  public string $thumbprint;
  public ?TStamp $valid_from;
  public ?TStamp $valid_till;

  public function __construct(shape(
    ?'certificate_arn' => string,
    ?'certificate_identifier' => string,
    ?'certificate_type' => string,
    ?'customer_override' => ?BooleanOptional,
    ?'customer_override_valid_till' => ?TStamp,
    ?'thumbprint' => string,
    ?'valid_from' => ?TStamp,
    ?'valid_till' => ?TStamp,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->certificate_identifier = $s['certificate_identifier'] ?? '';
    $this->certificate_type = $s['certificate_type'] ?? '';
    $this->customer_override = $s['customer_override'] ?? false;
    $this->customer_override_valid_till = $s['customer_override_valid_till'] ?? 0;
    $this->thumbprint = $s['thumbprint'] ?? '';
    $this->valid_from = $s['valid_from'] ?? 0;
    $this->valid_till = $s['valid_till'] ?? 0;
  }
}

type CertificateList = vec<Certificate>;

class CertificateMessage {
  public ?CertificateList $certificates;
  public string $marker;

  public function __construct(shape(
    ?'certificates' => ?CertificateList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class CertificateNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CharacterSet {
  public string $character_set_description;
  public string $character_set_name;

  public function __construct(shape(
    ?'character_set_description' => string,
    ?'character_set_name' => string,
  ) $s = shape()) {
    $this->character_set_description = $s['character_set_description'] ?? '';
    $this->character_set_name = $s['character_set_name'] ?? '';
  }
}

class CloudwatchLogsExportConfiguration {
  public ?LogTypeList $disable_log_types;
  public ?LogTypeList $enable_log_types;

  public function __construct(shape(
    ?'disable_log_types' => ?LogTypeList,
    ?'enable_log_types' => ?LogTypeList,
  ) $s = shape()) {
    $this->disable_log_types = $s['disable_log_types'] ?? vec[];
    $this->enable_log_types = $s['enable_log_types'] ?? vec[];
  }
}

class ConnectionPoolConfiguration {
  public ?IntegerOptional $connection_borrow_timeout;
  public string $init_query;
  public ?IntegerOptional $max_connections_percent;
  public ?IntegerOptional $max_idle_connections_percent;
  public ?StringList $session_pinning_filters;

  public function __construct(shape(
    ?'connection_borrow_timeout' => ?IntegerOptional,
    ?'init_query' => string,
    ?'max_connections_percent' => ?IntegerOptional,
    ?'max_idle_connections_percent' => ?IntegerOptional,
    ?'session_pinning_filters' => ?StringList,
  ) $s = shape()) {
    $this->connection_borrow_timeout = $s['connection_borrow_timeout'] ?? 0;
    $this->init_query = $s['init_query'] ?? '';
    $this->max_connections_percent = $s['max_connections_percent'] ?? 0;
    $this->max_idle_connections_percent = $s['max_idle_connections_percent'] ?? 0;
    $this->session_pinning_filters = $s['session_pinning_filters'] ?? vec[];
  }
}

class ConnectionPoolConfigurationInfo {
  public int $connection_borrow_timeout;
  public string $init_query;
  public int $max_connections_percent;
  public int $max_idle_connections_percent;
  public ?StringList $session_pinning_filters;

  public function __construct(shape(
    ?'connection_borrow_timeout' => int,
    ?'init_query' => string,
    ?'max_connections_percent' => int,
    ?'max_idle_connections_percent' => int,
    ?'session_pinning_filters' => ?StringList,
  ) $s = shape()) {
    $this->connection_borrow_timeout = $s['connection_borrow_timeout'] ?? 0;
    $this->init_query = $s['init_query'] ?? '';
    $this->max_connections_percent = $s['max_connections_percent'] ?? 0;
    $this->max_idle_connections_percent = $s['max_idle_connections_percent'] ?? 0;
    $this->session_pinning_filters = $s['session_pinning_filters'] ?? vec[];
  }
}

class CopyDBClusterParameterGroupMessage {
  public string $source_db_cluster_parameter_group_identifier;
  public ?TagList $tags;
  public string $target_db_cluster_parameter_group_description;
  public string $target_db_cluster_parameter_group_identifier;

  public function __construct(shape(
    ?'source_db_cluster_parameter_group_identifier' => string,
    ?'tags' => ?TagList,
    ?'target_db_cluster_parameter_group_description' => string,
    ?'target_db_cluster_parameter_group_identifier' => string,
  ) $s = shape()) {
    $this->source_db_cluster_parameter_group_identifier = $s['source_db_cluster_parameter_group_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_db_cluster_parameter_group_description = $s['target_db_cluster_parameter_group_description'] ?? '';
    $this->target_db_cluster_parameter_group_identifier = $s['target_db_cluster_parameter_group_identifier'] ?? '';
  }
}

class CopyDBClusterParameterGroupResult {
  public ?DBClusterParameterGroup $db_cluster_parameter_group;

  public function __construct(shape(
    ?'db_cluster_parameter_group' => ?DBClusterParameterGroup,
  ) $s = shape()) {
    $this->db_cluster_parameter_group = $s['db_cluster_parameter_group'] ?? null;
  }
}

class CopyDBClusterSnapshotMessage {
  public ?BooleanOptional $copy_tags;
  public string $kms_key_id;
  public string $pre_signed_url;
  public string $source_db_cluster_snapshot_identifier;
  public ?TagList $tags;
  public string $target_db_cluster_snapshot_identifier;

  public function __construct(shape(
    ?'copy_tags' => ?BooleanOptional,
    ?'kms_key_id' => string,
    ?'pre_signed_url' => string,
    ?'source_db_cluster_snapshot_identifier' => string,
    ?'tags' => ?TagList,
    ?'target_db_cluster_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->copy_tags = $s['copy_tags'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->pre_signed_url = $s['pre_signed_url'] ?? '';
    $this->source_db_cluster_snapshot_identifier = $s['source_db_cluster_snapshot_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_db_cluster_snapshot_identifier = $s['target_db_cluster_snapshot_identifier'] ?? '';
  }
}

class CopyDBClusterSnapshotResult {
  public ?DBClusterSnapshot $db_cluster_snapshot;

  public function __construct(shape(
    ?'db_cluster_snapshot' => ?DBClusterSnapshot,
  ) $s = shape()) {
    $this->db_cluster_snapshot = $s['db_cluster_snapshot'] ?? null;
  }
}

class CopyDBParameterGroupMessage {
  public string $source_db_parameter_group_identifier;
  public ?TagList $tags;
  public string $target_db_parameter_group_description;
  public string $target_db_parameter_group_identifier;

  public function __construct(shape(
    ?'source_db_parameter_group_identifier' => string,
    ?'tags' => ?TagList,
    ?'target_db_parameter_group_description' => string,
    ?'target_db_parameter_group_identifier' => string,
  ) $s = shape()) {
    $this->source_db_parameter_group_identifier = $s['source_db_parameter_group_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_db_parameter_group_description = $s['target_db_parameter_group_description'] ?? '';
    $this->target_db_parameter_group_identifier = $s['target_db_parameter_group_identifier'] ?? '';
  }
}

class CopyDBParameterGroupResult {
  public ?DBParameterGroup $db_parameter_group;

  public function __construct(shape(
    ?'db_parameter_group' => ?DBParameterGroup,
  ) $s = shape()) {
    $this->db_parameter_group = $s['db_parameter_group'] ?? null;
  }
}

class CopyDBSnapshotMessage {
  public ?BooleanOptional $copy_tags;
  public string $kms_key_id;
  public string $option_group_name;
  public string $pre_signed_url;
  public string $source_db_snapshot_identifier;
  public ?TagList $tags;
  public string $target_db_snapshot_identifier;

  public function __construct(shape(
    ?'copy_tags' => ?BooleanOptional,
    ?'kms_key_id' => string,
    ?'option_group_name' => string,
    ?'pre_signed_url' => string,
    ?'source_db_snapshot_identifier' => string,
    ?'tags' => ?TagList,
    ?'target_db_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->copy_tags = $s['copy_tags'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->pre_signed_url = $s['pre_signed_url'] ?? '';
    $this->source_db_snapshot_identifier = $s['source_db_snapshot_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_db_snapshot_identifier = $s['target_db_snapshot_identifier'] ?? '';
  }
}

class CopyDBSnapshotResult {
  public ?DBSnapshot $db_snapshot;

  public function __construct(shape(
    ?'db_snapshot' => ?DBSnapshot,
  ) $s = shape()) {
    $this->db_snapshot = $s['db_snapshot'] ?? null;
  }
}

class CopyOptionGroupMessage {
  public string $source_option_group_identifier;
  public ?TagList $tags;
  public string $target_option_group_description;
  public string $target_option_group_identifier;

  public function __construct(shape(
    ?'source_option_group_identifier' => string,
    ?'tags' => ?TagList,
    ?'target_option_group_description' => string,
    ?'target_option_group_identifier' => string,
  ) $s = shape()) {
    $this->source_option_group_identifier = $s['source_option_group_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_option_group_description = $s['target_option_group_description'] ?? '';
    $this->target_option_group_identifier = $s['target_option_group_identifier'] ?? '';
  }
}

class CopyOptionGroupResult {
  public ?OptionGroup $option_group;

  public function __construct(shape(
    ?'option_group' => ?OptionGroup,
  ) $s = shape()) {
    $this->option_group = $s['option_group'] ?? null;
  }
}

class CreateCustomAvailabilityZoneMessage {
  public string $custom_availability_zone_name;
  public string $existing_vpn_id;
  public string $new_vpn_tunnel_name;
  public string $vpn_tunnel_originator_ip;

  public function __construct(shape(
    ?'custom_availability_zone_name' => string,
    ?'existing_vpn_id' => string,
    ?'new_vpn_tunnel_name' => string,
    ?'vpn_tunnel_originator_ip' => string,
  ) $s = shape()) {
    $this->custom_availability_zone_name = $s['custom_availability_zone_name'] ?? '';
    $this->existing_vpn_id = $s['existing_vpn_id'] ?? '';
    $this->new_vpn_tunnel_name = $s['new_vpn_tunnel_name'] ?? '';
    $this->vpn_tunnel_originator_ip = $s['vpn_tunnel_originator_ip'] ?? '';
  }
}

class CreateCustomAvailabilityZoneResult {
  public ?CustomAvailabilityZone $custom_availability_zone;

  public function __construct(shape(
    ?'custom_availability_zone' => ?CustomAvailabilityZone,
  ) $s = shape()) {
    $this->custom_availability_zone = $s['custom_availability_zone'] ?? null;
  }
}

class CreateDBClusterEndpointMessage {
  public string $db_cluster_endpoint_identifier;
  public string $db_cluster_identifier;
  public string $endpoint_type;
  public ?StringList $excluded_members;
  public ?StringList $static_members;
  public ?TagList $tags;

  public function __construct(shape(
    ?'db_cluster_endpoint_identifier' => string,
    ?'db_cluster_identifier' => string,
    ?'endpoint_type' => string,
    ?'excluded_members' => ?StringList,
    ?'static_members' => ?StringList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->db_cluster_endpoint_identifier = $s['db_cluster_endpoint_identifier'] ?? '';
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->endpoint_type = $s['endpoint_type'] ?? '';
    $this->excluded_members = $s['excluded_members'] ?? vec[];
    $this->static_members = $s['static_members'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDBClusterMessage {
  public ?AvailabilityZones $availability_zones;
  public ?LongOptional $backtrack_window;
  public ?IntegerOptional $backup_retention_period;
  public string $character_set_name;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_subnet_group_name;
  public string $database_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_http_endpoint;
  public ?BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public string $engine_mode;
  public string $engine_version;
  public string $global_cluster_identifier;
  public string $kms_key_id;
  public string $master_user_password;
  public string $master_username;
  public string $option_group_name;
  public ?IntegerOptional $port;
  public string $pre_signed_url;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public string $replication_source_identifier;
  public ?ScalingConfiguration $scaling_configuration;
  public ?BooleanOptional $storage_encrypted;
  public ?TagList $tags;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZones,
    ?'backtrack_window' => ?LongOptional,
    ?'backup_retention_period' => ?IntegerOptional,
    ?'character_set_name' => string,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_cluster_identifier' => string,
    ?'db_cluster_parameter_group_name' => string,
    ?'db_subnet_group_name' => string,
    ?'database_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_http_endpoint' => ?BooleanOptional,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'engine' => string,
    ?'engine_mode' => string,
    ?'engine_version' => string,
    ?'global_cluster_identifier' => string,
    ?'kms_key_id' => string,
    ?'master_user_password' => string,
    ?'master_username' => string,
    ?'option_group_name' => string,
    ?'port' => ?IntegerOptional,
    ?'pre_signed_url' => string,
    ?'preferred_backup_window' => string,
    ?'preferred_maintenance_window' => string,
    ?'replication_source_identifier' => string,
    ?'scaling_configuration' => ?ScalingConfiguration,
    ?'storage_encrypted' => ?BooleanOptional,
    ?'tags' => ?TagList,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->backtrack_window = $s['backtrack_window'] ?? 0;
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->character_set_name = $s['character_set_name'] ?? '';
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_http_endpoint = $s['enable_http_endpoint'] ?? false;
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_mode = $s['engine_mode'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->global_cluster_identifier = $s['global_cluster_identifier'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->pre_signed_url = $s['pre_signed_url'] ?? '';
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->replication_source_identifier = $s['replication_source_identifier'] ?? '';
    $this->scaling_configuration = $s['scaling_configuration'] ?? null;
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class CreateDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
  public string $db_parameter_group_family;
  public string $description;
  public ?TagList $tags;

  public function __construct(shape(
    ?'db_cluster_parameter_group_name' => string,
    ?'db_parameter_group_family' => string,
    ?'description' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDBClusterParameterGroupResult {
  public ?DBClusterParameterGroup $db_cluster_parameter_group;

  public function __construct(shape(
    ?'db_cluster_parameter_group' => ?DBClusterParameterGroup,
  ) $s = shape()) {
    $this->db_cluster_parameter_group = $s['db_cluster_parameter_group'] ?? null;
  }
}

class CreateDBClusterResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class CreateDBClusterSnapshotMessage {
  public string $db_cluster_identifier;
  public string $db_cluster_snapshot_identifier;
  public ?TagList $tags;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
    ?'db_cluster_snapshot_identifier' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_snapshot_identifier = $s['db_cluster_snapshot_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDBClusterSnapshotResult {
  public ?DBClusterSnapshot $db_cluster_snapshot;

  public function __construct(shape(
    ?'db_cluster_snapshot' => ?DBClusterSnapshot,
  ) $s = shape()) {
    $this->db_cluster_snapshot = $s['db_cluster_snapshot'] ?? null;
  }
}

class CreateDBInstanceMessage {
  public ?IntegerOptional $allocated_storage;
  public ?BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public ?IntegerOptional $backup_retention_period;
  public string $character_set_name;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_name;
  public string $db_parameter_group_name;
  public ?DBSecurityGroupNameList $db_security_groups;
  public string $db_subnet_group_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_iam_database_authentication;
  public ?BooleanOptional $enable_performance_insights;
  public string $engine;
  public string $engine_version;
  public ?IntegerOptional $iops;
  public string $kms_key_id;
  public string $license_model;
  public string $master_user_password;
  public string $master_username;
  public ?IntegerOptional $max_allocated_storage;
  public ?IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public ?BooleanOptional $multi_az;
  public string $option_group_name;
  public string $performance_insights_kms_key_id;
  public ?IntegerOptional $performance_insights_retention_period;
  public ?IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ?ProcessorFeatureList $processor_features;
  public ?IntegerOptional $promotion_tier;
  public ?BooleanOptional $publicly_accessible;
  public ?BooleanOptional $storage_encrypted;
  public string $storage_type;
  public ?TagList $tags;
  public string $tde_credential_arn;
  public string $tde_credential_password;
  public string $timezone;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'allocated_storage' => ?IntegerOptional,
    ?'auto_minor_version_upgrade' => ?BooleanOptional,
    ?'availability_zone' => string,
    ?'backup_retention_period' => ?IntegerOptional,
    ?'character_set_name' => string,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_cluster_identifier' => string,
    ?'db_instance_class' => string,
    ?'db_instance_identifier' => string,
    ?'db_name' => string,
    ?'db_parameter_group_name' => string,
    ?'db_security_groups' => ?DBSecurityGroupNameList,
    ?'db_subnet_group_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'enable_performance_insights' => ?BooleanOptional,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'iops' => ?IntegerOptional,
    ?'kms_key_id' => string,
    ?'license_model' => string,
    ?'master_user_password' => string,
    ?'master_username' => string,
    ?'max_allocated_storage' => ?IntegerOptional,
    ?'monitoring_interval' => ?IntegerOptional,
    ?'monitoring_role_arn' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'option_group_name' => string,
    ?'performance_insights_kms_key_id' => string,
    ?'performance_insights_retention_period' => ?IntegerOptional,
    ?'port' => ?IntegerOptional,
    ?'preferred_backup_window' => string,
    ?'preferred_maintenance_window' => string,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'promotion_tier' => ?IntegerOptional,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'storage_encrypted' => ?BooleanOptional,
    ?'storage_type' => string,
    ?'tags' => ?TagList,
    ?'tde_credential_arn' => string,
    ?'tde_credential_password' => string,
    ?'timezone' => string,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->character_set_name = $s['character_set_name'] ?? '';
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_name = $s['db_name'] ?? '';
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->db_security_groups = $s['db_security_groups'] ?? vec[];
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->enable_performance_insights = $s['enable_performance_insights'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_model = $s['license_model'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->max_allocated_storage = $s['max_allocated_storage'] ?? 0;
    $this->monitoring_interval = $s['monitoring_interval'] ?? 0;
    $this->monitoring_role_arn = $s['monitoring_role_arn'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->performance_insights_kms_key_id = $s['performance_insights_kms_key_id'] ?? '';
    $this->performance_insights_retention_period = $s['performance_insights_retention_period'] ?? 0;
    $this->port = $s['port'] ?? 0;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->promotion_tier = $s['promotion_tier'] ?? 0;
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->tde_credential_arn = $s['tde_credential_arn'] ?? '';
    $this->tde_credential_password = $s['tde_credential_password'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class CreateDBInstanceReadReplicaMessage {
  public ?BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_parameter_group_name;
  public string $db_subnet_group_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_iam_database_authentication;
  public ?BooleanOptional $enable_performance_insights;
  public ?IntegerOptional $iops;
  public string $kms_key_id;
  public ?IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public ?BooleanOptional $multi_az;
  public string $option_group_name;
  public string $performance_insights_kms_key_id;
  public ?IntegerOptional $performance_insights_retention_period;
  public ?IntegerOptional $port;
  public string $pre_signed_url;
  public ?ProcessorFeatureList $processor_features;
  public ?BooleanOptional $publicly_accessible;
  public string $source_db_instance_identifier;
  public string $storage_type;
  public ?TagList $tags;
  public ?BooleanOptional $use_default_processor_features;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?BooleanOptional,
    ?'availability_zone' => string,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_instance_class' => string,
    ?'db_instance_identifier' => string,
    ?'db_parameter_group_name' => string,
    ?'db_subnet_group_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'enable_performance_insights' => ?BooleanOptional,
    ?'iops' => ?IntegerOptional,
    ?'kms_key_id' => string,
    ?'monitoring_interval' => ?IntegerOptional,
    ?'monitoring_role_arn' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'option_group_name' => string,
    ?'performance_insights_kms_key_id' => string,
    ?'performance_insights_retention_period' => ?IntegerOptional,
    ?'port' => ?IntegerOptional,
    ?'pre_signed_url' => string,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'source_db_instance_identifier' => string,
    ?'storage_type' => string,
    ?'tags' => ?TagList,
    ?'use_default_processor_features' => ?BooleanOptional,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->enable_performance_insights = $s['enable_performance_insights'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->monitoring_interval = $s['monitoring_interval'] ?? 0;
    $this->monitoring_role_arn = $s['monitoring_role_arn'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->performance_insights_kms_key_id = $s['performance_insights_kms_key_id'] ?? '';
    $this->performance_insights_retention_period = $s['performance_insights_retention_period'] ?? 0;
    $this->port = $s['port'] ?? 0;
    $this->pre_signed_url = $s['pre_signed_url'] ?? '';
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->source_db_instance_identifier = $s['source_db_instance_identifier'] ?? '';
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->use_default_processor_features = $s['use_default_processor_features'] ?? false;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class CreateDBInstanceReadReplicaResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class CreateDBInstanceResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class CreateDBParameterGroupMessage {
  public string $db_parameter_group_family;
  public string $db_parameter_group_name;
  public string $description;
  public ?TagList $tags;

  public function __construct(shape(
    ?'db_parameter_group_family' => string,
    ?'db_parameter_group_name' => string,
    ?'description' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDBParameterGroupResult {
  public ?DBParameterGroup $db_parameter_group;

  public function __construct(shape(
    ?'db_parameter_group' => ?DBParameterGroup,
  ) $s = shape()) {
    $this->db_parameter_group = $s['db_parameter_group'] ?? null;
  }
}

class CreateDBProxyRequest {
  public ?UserAuthConfigList $auth;
  public string $db_proxy_name;
  public bool $debug_logging;
  public ?EngineFamily $engine_family;
  public ?IntegerOptional $idle_client_timeout;
  public bool $require_tls;
  public string $role_arn;
  public ?TagList $tags;
  public ?StringList $vpc_security_group_ids;
  public ?StringList $vpc_subnet_ids;

  public function __construct(shape(
    ?'auth' => ?UserAuthConfigList,
    ?'db_proxy_name' => string,
    ?'debug_logging' => bool,
    ?'engine_family' => ?EngineFamily,
    ?'idle_client_timeout' => ?IntegerOptional,
    ?'require_tls' => bool,
    ?'role_arn' => string,
    ?'tags' => ?TagList,
    ?'vpc_security_group_ids' => ?StringList,
    ?'vpc_subnet_ids' => ?StringList,
  ) $s = shape()) {
    $this->auth = $s['auth'] ?? vec[];
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->debug_logging = $s['debug_logging'] ?? false;
    $this->engine_family = $s['engine_family'] ?? '';
    $this->idle_client_timeout = $s['idle_client_timeout'] ?? 0;
    $this->require_tls = $s['require_tls'] ?? false;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
    $this->vpc_subnet_ids = $s['vpc_subnet_ids'] ?? vec[];
  }
}

class CreateDBProxyResponse {
  public ?DBProxy $db_proxy;

  public function __construct(shape(
    ?'db_proxy' => ?DBProxy,
  ) $s = shape()) {
    $this->db_proxy = $s['db_proxy'] ?? null;
  }
}

class CreateDBSecurityGroupMessage {
  public string $db_security_group_description;
  public string $db_security_group_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'db_security_group_description' => string,
    ?'db_security_group_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->db_security_group_description = $s['db_security_group_description'] ?? '';
    $this->db_security_group_name = $s['db_security_group_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDBSecurityGroupResult {
  public ?DBSecurityGroup $db_security_group;

  public function __construct(shape(
    ?'db_security_group' => ?DBSecurityGroup,
  ) $s = shape()) {
    $this->db_security_group = $s['db_security_group'] ?? null;
  }
}

class CreateDBSnapshotMessage {
  public string $db_instance_identifier;
  public string $db_snapshot_identifier;
  public ?TagList $tags;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'db_snapshot_identifier' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDBSnapshotResult {
  public ?DBSnapshot $db_snapshot;

  public function __construct(shape(
    ?'db_snapshot' => ?DBSnapshot,
  ) $s = shape()) {
    $this->db_snapshot = $s['db_snapshot'] ?? null;
  }
}

class CreateDBSubnetGroupMessage {
  public string $db_subnet_group_description;
  public string $db_subnet_group_name;
  public ?SubnetIdentifierList $subnet_ids;
  public ?TagList $tags;

  public function __construct(shape(
    ?'db_subnet_group_description' => string,
    ?'db_subnet_group_name' => string,
    ?'subnet_ids' => ?SubnetIdentifierList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->db_subnet_group_description = $s['db_subnet_group_description'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDBSubnetGroupResult {
  public ?DBSubnetGroup $db_subnet_group;

  public function __construct(shape(
    ?'db_subnet_group' => ?DBSubnetGroup,
  ) $s = shape()) {
    $this->db_subnet_group = $s['db_subnet_group'] ?? null;
  }
}

class CreateEventSubscriptionMessage {
  public ?BooleanOptional $enabled;
  public ?EventCategoriesList $event_categories;
  public string $sns_topic_arn;
  public ?SourceIdsList $source_ids;
  public string $source_type;
  public string $subscription_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'enabled' => ?BooleanOptional,
    ?'event_categories' => ?EventCategoriesList,
    ?'sns_topic_arn' => string,
    ?'source_ids' => ?SourceIdsList,
    ?'source_type' => string,
    ?'subscription_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
    $this->source_ids = $s['source_ids'] ?? vec[];
    $this->source_type = $s['source_type'] ?? '';
    $this->subscription_name = $s['subscription_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateEventSubscriptionResult {
  public ?EventSubscription $event_subscription;

  public function __construct(shape(
    ?'event_subscription' => ?EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $s['event_subscription'] ?? null;
  }
}

class CreateGlobalClusterMessage {
  public string $database_name;
  public ?BooleanOptional $deletion_protection;
  public string $engine;
  public string $engine_version;
  public string $global_cluster_identifier;
  public string $source_db_cluster_identifier;
  public ?BooleanOptional $storage_encrypted;

  public function __construct(shape(
    ?'database_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'global_cluster_identifier' => string,
    ?'source_db_cluster_identifier' => string,
    ?'storage_encrypted' => ?BooleanOptional,
  ) $s = shape()) {
    $this->database_name = $s['database_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->global_cluster_identifier = $s['global_cluster_identifier'] ?? '';
    $this->source_db_cluster_identifier = $s['source_db_cluster_identifier'] ?? '';
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
  }
}

class CreateGlobalClusterResult {
  public ?GlobalCluster $global_cluster;

  public function __construct(shape(
    ?'global_cluster' => ?GlobalCluster,
  ) $s = shape()) {
    $this->global_cluster = $s['global_cluster'] ?? null;
  }
}

class CreateOptionGroupMessage {
  public string $engine_name;
  public string $major_engine_version;
  public string $option_group_description;
  public string $option_group_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'engine_name' => string,
    ?'major_engine_version' => string,
    ?'option_group_description' => string,
    ?'option_group_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->engine_name = $s['engine_name'] ?? '';
    $this->major_engine_version = $s['major_engine_version'] ?? '';
    $this->option_group_description = $s['option_group_description'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateOptionGroupResult {
  public ?OptionGroup $option_group;

  public function __construct(shape(
    ?'option_group' => ?OptionGroup,
  ) $s = shape()) {
    $this->option_group = $s['option_group'] ?? null;
  }
}

class CustomAvailabilityZone {
  public string $custom_availability_zone_id;
  public string $custom_availability_zone_name;
  public string $custom_availability_zone_status;
  public ?VpnDetails $vpn_details;

  public function __construct(shape(
    ?'custom_availability_zone_id' => string,
    ?'custom_availability_zone_name' => string,
    ?'custom_availability_zone_status' => string,
    ?'vpn_details' => ?VpnDetails,
  ) $s = shape()) {
    $this->custom_availability_zone_id = $s['custom_availability_zone_id'] ?? '';
    $this->custom_availability_zone_name = $s['custom_availability_zone_name'] ?? '';
    $this->custom_availability_zone_status = $s['custom_availability_zone_status'] ?? '';
    $this->vpn_details = $s['vpn_details'] ?? null;
  }
}

class CustomAvailabilityZoneAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CustomAvailabilityZoneList = vec<CustomAvailabilityZone>;

class CustomAvailabilityZoneMessage {
  public ?CustomAvailabilityZoneList $custom_availability_zones;
  public string $marker;

  public function __construct(shape(
    ?'custom_availability_zones' => ?CustomAvailabilityZoneList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->custom_availability_zones = $s['custom_availability_zones'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class CustomAvailabilityZoneNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CustomAvailabilityZoneQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBCluster {
  public string $activity_stream_kinesis_stream_name;
  public string $activity_stream_kms_key_id;
  public ?ActivityStreamMode $activity_stream_mode;
  public ?ActivityStreamStatus $activity_stream_status;
  public ?IntegerOptional $allocated_storage;
  public ?DBClusterRoles $associated_roles;
  public ?AvailabilityZones $availability_zones;
  public ?LongOptional $backtrack_consumed_change_records;
  public ?LongOptional $backtrack_window;
  public ?IntegerOptional $backup_retention_period;
  public ?IntegerOptional $capacity;
  public string $character_set_name;
  public string $clone_group_id;
  public ?TStamp $cluster_create_time;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public ?BooleanOptional $cross_account_clone;
  public ?StringList $custom_endpoints;
  public string $db_cluster_arn;
  public string $db_cluster_identifier;
  public ?DBClusterMemberList $db_cluster_members;
  public ?DBClusterOptionGroupMemberships $db_cluster_option_group_memberships;
  public string $db_cluster_parameter_group;
  public string $db_subnet_group;
  public string $database_name;
  public string $db_cluster_resource_id;
  public ?BooleanOptional $deletion_protection;
  public ?DomainMembershipList $domain_memberships;
  public ?TStamp $earliest_backtrack_time;
  public ?TStamp $earliest_restorable_time;
  public ?LogTypeList $enabled_cloudwatch_logs_exports;
  public string $endpoint;
  public string $engine;
  public string $engine_mode;
  public string $engine_version;
  public string $hosted_zone_id;
  public ?BooleanOptional $http_endpoint_enabled;
  public ?BooleanOptional $iam_database_authentication_enabled;
  public string $kms_key_id;
  public ?TStamp $latest_restorable_time;
  public string $master_username;
  public ?BooleanOptional $multi_az;
  public string $percent_progress;
  public ?IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ?ReadReplicaIdentifierList $read_replica_identifiers;
  public string $reader_endpoint;
  public string $replication_source_identifier;
  public ?ScalingConfigurationInfo $scaling_configuration_info;
  public string $status;
  public bool $storage_encrypted;
  public ?VpcSecurityGroupMembershipList $vpc_security_groups;

  public function __construct(shape(
    ?'activity_stream_kinesis_stream_name' => string,
    ?'activity_stream_kms_key_id' => string,
    ?'activity_stream_mode' => ?ActivityStreamMode,
    ?'activity_stream_status' => ?ActivityStreamStatus,
    ?'allocated_storage' => ?IntegerOptional,
    ?'associated_roles' => ?DBClusterRoles,
    ?'availability_zones' => ?AvailabilityZones,
    ?'backtrack_consumed_change_records' => ?LongOptional,
    ?'backtrack_window' => ?LongOptional,
    ?'backup_retention_period' => ?IntegerOptional,
    ?'capacity' => ?IntegerOptional,
    ?'character_set_name' => string,
    ?'clone_group_id' => string,
    ?'cluster_create_time' => ?TStamp,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'cross_account_clone' => ?BooleanOptional,
    ?'custom_endpoints' => ?StringList,
    ?'db_cluster_arn' => string,
    ?'db_cluster_identifier' => string,
    ?'db_cluster_members' => ?DBClusterMemberList,
    ?'db_cluster_option_group_memberships' => ?DBClusterOptionGroupMemberships,
    ?'db_cluster_parameter_group' => string,
    ?'db_subnet_group' => string,
    ?'database_name' => string,
    ?'db_cluster_resource_id' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain_memberships' => ?DomainMembershipList,
    ?'earliest_backtrack_time' => ?TStamp,
    ?'earliest_restorable_time' => ?TStamp,
    ?'enabled_cloudwatch_logs_exports' => ?LogTypeList,
    ?'endpoint' => string,
    ?'engine' => string,
    ?'engine_mode' => string,
    ?'engine_version' => string,
    ?'hosted_zone_id' => string,
    ?'http_endpoint_enabled' => ?BooleanOptional,
    ?'iam_database_authentication_enabled' => ?BooleanOptional,
    ?'kms_key_id' => string,
    ?'latest_restorable_time' => ?TStamp,
    ?'master_username' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'percent_progress' => string,
    ?'port' => ?IntegerOptional,
    ?'preferred_backup_window' => string,
    ?'preferred_maintenance_window' => string,
    ?'read_replica_identifiers' => ?ReadReplicaIdentifierList,
    ?'reader_endpoint' => string,
    ?'replication_source_identifier' => string,
    ?'scaling_configuration_info' => ?ScalingConfigurationInfo,
    ?'status' => string,
    ?'storage_encrypted' => bool,
    ?'vpc_security_groups' => ?VpcSecurityGroupMembershipList,
  ) $s = shape()) {
    $this->activity_stream_kinesis_stream_name = $s['activity_stream_kinesis_stream_name'] ?? '';
    $this->activity_stream_kms_key_id = $s['activity_stream_kms_key_id'] ?? '';
    $this->activity_stream_mode = $s['activity_stream_mode'] ?? '';
    $this->activity_stream_status = $s['activity_stream_status'] ?? '';
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->associated_roles = $s['associated_roles'] ?? vec[];
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->backtrack_consumed_change_records = $s['backtrack_consumed_change_records'] ?? 0;
    $this->backtrack_window = $s['backtrack_window'] ?? 0;
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->capacity = $s['capacity'] ?? 0;
    $this->character_set_name = $s['character_set_name'] ?? '';
    $this->clone_group_id = $s['clone_group_id'] ?? '';
    $this->cluster_create_time = $s['cluster_create_time'] ?? 0;
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->cross_account_clone = $s['cross_account_clone'] ?? false;
    $this->custom_endpoints = $s['custom_endpoints'] ?? vec[];
    $this->db_cluster_arn = $s['db_cluster_arn'] ?? '';
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_members = $s['db_cluster_members'] ?? vec[];
    $this->db_cluster_option_group_memberships = $s['db_cluster_option_group_memberships'] ?? vec[];
    $this->db_cluster_parameter_group = $s['db_cluster_parameter_group'] ?? '';
    $this->db_subnet_group = $s['db_subnet_group'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->db_cluster_resource_id = $s['db_cluster_resource_id'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain_memberships = $s['domain_memberships'] ?? vec[];
    $this->earliest_backtrack_time = $s['earliest_backtrack_time'] ?? 0;
    $this->earliest_restorable_time = $s['earliest_restorable_time'] ?? 0;
    $this->enabled_cloudwatch_logs_exports = $s['enabled_cloudwatch_logs_exports'] ?? vec[];
    $this->endpoint = $s['endpoint'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_mode = $s['engine_mode'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->http_endpoint_enabled = $s['http_endpoint_enabled'] ?? false;
    $this->iam_database_authentication_enabled = $s['iam_database_authentication_enabled'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->latest_restorable_time = $s['latest_restorable_time'] ?? 0;
    $this->master_username = $s['master_username'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->percent_progress = $s['percent_progress'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->read_replica_identifiers = $s['read_replica_identifiers'] ?? vec[];
    $this->reader_endpoint = $s['reader_endpoint'] ?? '';
    $this->replication_source_identifier = $s['replication_source_identifier'] ?? '';
    $this->scaling_configuration_info = $s['scaling_configuration_info'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
    $this->vpc_security_groups = $s['vpc_security_groups'] ?? vec[];
  }
}

class DBClusterAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBClusterBacktrack {
  public string $backtrack_identifier;
  public ?TStamp $backtrack_request_creation_time;
  public ?TStamp $backtrack_to;
  public ?TStamp $backtracked_from;
  public string $db_cluster_identifier;
  public string $status;

  public function __construct(shape(
    ?'backtrack_identifier' => string,
    ?'backtrack_request_creation_time' => ?TStamp,
    ?'backtrack_to' => ?TStamp,
    ?'backtracked_from' => ?TStamp,
    ?'db_cluster_identifier' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->backtrack_identifier = $s['backtrack_identifier'] ?? '';
    $this->backtrack_request_creation_time = $s['backtrack_request_creation_time'] ?? 0;
    $this->backtrack_to = $s['backtrack_to'] ?? 0;
    $this->backtracked_from = $s['backtracked_from'] ?? 0;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DBClusterBacktrackList = vec<DBClusterBacktrack>;

class DBClusterBacktrackMessage {
  public ?DBClusterBacktrackList $db_cluster_backtracks;
  public string $marker;

  public function __construct(shape(
    ?'db_cluster_backtracks' => ?DBClusterBacktrackList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_cluster_backtracks = $s['db_cluster_backtracks'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBClusterBacktrackNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBClusterCapacityInfo {
  public ?IntegerOptional $current_capacity;
  public string $db_cluster_identifier;
  public ?IntegerOptional $pending_capacity;
  public ?IntegerOptional $seconds_before_timeout;
  public string $timeout_action;

  public function __construct(shape(
    ?'current_capacity' => ?IntegerOptional,
    ?'db_cluster_identifier' => string,
    ?'pending_capacity' => ?IntegerOptional,
    ?'seconds_before_timeout' => ?IntegerOptional,
    ?'timeout_action' => string,
  ) $s = shape()) {
    $this->current_capacity = $s['current_capacity'] ?? 0;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->pending_capacity = $s['pending_capacity'] ?? 0;
    $this->seconds_before_timeout = $s['seconds_before_timeout'] ?? 0;
    $this->timeout_action = $s['timeout_action'] ?? '';
  }
}

class DBClusterEndpoint {
  public string $custom_endpoint_type;
  public string $db_cluster_endpoint_arn;
  public string $db_cluster_endpoint_identifier;
  public string $db_cluster_endpoint_resource_identifier;
  public string $db_cluster_identifier;
  public string $endpoint;
  public string $endpoint_type;
  public ?StringList $excluded_members;
  public ?StringList $static_members;
  public string $status;

  public function __construct(shape(
    ?'custom_endpoint_type' => string,
    ?'db_cluster_endpoint_arn' => string,
    ?'db_cluster_endpoint_identifier' => string,
    ?'db_cluster_endpoint_resource_identifier' => string,
    ?'db_cluster_identifier' => string,
    ?'endpoint' => string,
    ?'endpoint_type' => string,
    ?'excluded_members' => ?StringList,
    ?'static_members' => ?StringList,
    ?'status' => string,
  ) $s = shape()) {
    $this->custom_endpoint_type = $s['custom_endpoint_type'] ?? '';
    $this->db_cluster_endpoint_arn = $s['db_cluster_endpoint_arn'] ?? '';
    $this->db_cluster_endpoint_identifier = $s['db_cluster_endpoint_identifier'] ?? '';
    $this->db_cluster_endpoint_resource_identifier = $s['db_cluster_endpoint_resource_identifier'] ?? '';
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->endpoint = $s['endpoint'] ?? '';
    $this->endpoint_type = $s['endpoint_type'] ?? '';
    $this->excluded_members = $s['excluded_members'] ?? vec[];
    $this->static_members = $s['static_members'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

class DBClusterEndpointAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBClusterEndpointList = vec<DBClusterEndpoint>;

class DBClusterEndpointMessage {
  public ?DBClusterEndpointList $db_cluster_endpoints;
  public string $marker;

  public function __construct(shape(
    ?'db_cluster_endpoints' => ?DBClusterEndpointList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_cluster_endpoints = $s['db_cluster_endpoints'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBClusterEndpointNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBClusterEndpointQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBClusterList = vec<DBCluster>;

class DBClusterMember {
  public string $db_cluster_parameter_group_status;
  public string $db_instance_identifier;
  public bool $is_cluster_writer;
  public ?IntegerOptional $promotion_tier;

  public function __construct(shape(
    ?'db_cluster_parameter_group_status' => string,
    ?'db_instance_identifier' => string,
    ?'is_cluster_writer' => bool,
    ?'promotion_tier' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_status = $s['db_cluster_parameter_group_status'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->is_cluster_writer = $s['is_cluster_writer'] ?? false;
    $this->promotion_tier = $s['promotion_tier'] ?? 0;
  }
}

type DBClusterMemberList = vec<DBClusterMember>;

class DBClusterMessage {
  public ?DBClusterList $db_clusters;
  public string $marker;

  public function __construct(shape(
    ?'db_clusters' => ?DBClusterList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_clusters = $s['db_clusters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBClusterNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBClusterOptionGroupMemberships = vec<DBClusterOptionGroupStatus>;

class DBClusterOptionGroupStatus {
  public string $db_cluster_option_group_name;
  public string $status;

  public function __construct(shape(
    ?'db_cluster_option_group_name' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->db_cluster_option_group_name = $s['db_cluster_option_group_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DBClusterParameterGroup {
  public string $db_cluster_parameter_group_arn;
  public string $db_cluster_parameter_group_name;
  public string $db_parameter_group_family;
  public string $description;

  public function __construct(shape(
    ?'db_cluster_parameter_group_arn' => string,
    ?'db_cluster_parameter_group_name' => string,
    ?'db_parameter_group_family' => string,
    ?'description' => string,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_arn = $s['db_cluster_parameter_group_arn'] ?? '';
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class DBClusterParameterGroupDetails {
  public string $marker;
  public ?ParametersList $parameters;

  public function __construct(shape(
    ?'marker' => string,
    ?'parameters' => ?ParametersList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

type DBClusterParameterGroupList = vec<DBClusterParameterGroup>;

class DBClusterParameterGroupNameMessage {
  public string $db_cluster_parameter_group_name;

  public function __construct(shape(
    ?'db_cluster_parameter_group_name' => string,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
  }
}

class DBClusterParameterGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBClusterParameterGroupsMessage {
  public ?DBClusterParameterGroupList $db_cluster_parameter_groups;
  public string $marker;

  public function __construct(shape(
    ?'db_cluster_parameter_groups' => ?DBClusterParameterGroupList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_cluster_parameter_groups = $s['db_cluster_parameter_groups'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBClusterQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBClusterRole {
  public string $feature_name;
  public string $role_arn;
  public string $status;

  public function __construct(shape(
    ?'feature_name' => string,
    ?'role_arn' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->feature_name = $s['feature_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DBClusterRoleAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBClusterRoleNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBClusterRoleQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBClusterRoles = vec<DBClusterRole>;

class DBClusterSnapshot {
  public int $allocated_storage;
  public ?AvailabilityZones $availability_zones;
  public ?TStamp $cluster_create_time;
  public string $db_cluster_identifier;
  public string $db_cluster_snapshot_arn;
  public string $db_cluster_snapshot_identifier;
  public string $engine;
  public string $engine_version;
  public bool $iam_database_authentication_enabled;
  public string $kms_key_id;
  public string $license_model;
  public string $master_username;
  public int $percent_progress;
  public int $port;
  public ?TStamp $snapshot_create_time;
  public string $snapshot_type;
  public string $source_db_cluster_snapshot_arn;
  public string $status;
  public bool $storage_encrypted;
  public string $vpc_id;

  public function __construct(shape(
    ?'allocated_storage' => int,
    ?'availability_zones' => ?AvailabilityZones,
    ?'cluster_create_time' => ?TStamp,
    ?'db_cluster_identifier' => string,
    ?'db_cluster_snapshot_arn' => string,
    ?'db_cluster_snapshot_identifier' => string,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'iam_database_authentication_enabled' => bool,
    ?'kms_key_id' => string,
    ?'license_model' => string,
    ?'master_username' => string,
    ?'percent_progress' => int,
    ?'port' => int,
    ?'snapshot_create_time' => ?TStamp,
    ?'snapshot_type' => string,
    ?'source_db_cluster_snapshot_arn' => string,
    ?'status' => string,
    ?'storage_encrypted' => bool,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->cluster_create_time = $s['cluster_create_time'] ?? 0;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_snapshot_arn = $s['db_cluster_snapshot_arn'] ?? '';
    $this->db_cluster_snapshot_identifier = $s['db_cluster_snapshot_identifier'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->iam_database_authentication_enabled = $s['iam_database_authentication_enabled'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_model = $s['license_model'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->percent_progress = $s['percent_progress'] ?? 0;
    $this->port = $s['port'] ?? 0;
    $this->snapshot_create_time = $s['snapshot_create_time'] ?? 0;
    $this->snapshot_type = $s['snapshot_type'] ?? '';
    $this->source_db_cluster_snapshot_arn = $s['source_db_cluster_snapshot_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DBClusterSnapshotAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBClusterSnapshotAttribute {
  public string $attribute_name;
  public ?AttributeValueList $attribute_values;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'attribute_values' => ?AttributeValueList,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_values = $s['attribute_values'] ?? vec[];
  }
}

type DBClusterSnapshotAttributeList = vec<DBClusterSnapshotAttribute>;

class DBClusterSnapshotAttributesResult {
  public ?DBClusterSnapshotAttributeList $db_cluster_snapshot_attributes;
  public string $db_cluster_snapshot_identifier;

  public function __construct(shape(
    ?'db_cluster_snapshot_attributes' => ?DBClusterSnapshotAttributeList,
    ?'db_cluster_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_snapshot_attributes = $s['db_cluster_snapshot_attributes'] ?? vec[];
    $this->db_cluster_snapshot_identifier = $s['db_cluster_snapshot_identifier'] ?? '';
  }
}

type DBClusterSnapshotList = vec<DBClusterSnapshot>;

class DBClusterSnapshotMessage {
  public ?DBClusterSnapshotList $db_cluster_snapshots;
  public string $marker;

  public function __construct(shape(
    ?'db_cluster_snapshots' => ?DBClusterSnapshotList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_cluster_snapshots = $s['db_cluster_snapshots'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBClusterSnapshotNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBEngineVersion {
  public string $db_engine_description;
  public string $db_engine_version_description;
  public string $db_parameter_group_family;
  public ?CharacterSet $default_character_set;
  public string $engine;
  public string $engine_version;
  public ?LogTypeList $exportable_log_types;
  public string $status;
  public ?SupportedCharacterSetsList $supported_character_sets;
  public ?EngineModeList $supported_engine_modes;
  public ?FeatureNameList $supported_feature_names;
  public ?SupportedTimezonesList $supported_timezones;
  public bool $supports_log_exports_to_cloudwatch_logs;
  public bool $supports_read_replica;
  public ?ValidUpgradeTargetList $valid_upgrade_target;

  public function __construct(shape(
    ?'db_engine_description' => string,
    ?'db_engine_version_description' => string,
    ?'db_parameter_group_family' => string,
    ?'default_character_set' => ?CharacterSet,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'exportable_log_types' => ?LogTypeList,
    ?'status' => string,
    ?'supported_character_sets' => ?SupportedCharacterSetsList,
    ?'supported_engine_modes' => ?EngineModeList,
    ?'supported_feature_names' => ?FeatureNameList,
    ?'supported_timezones' => ?SupportedTimezonesList,
    ?'supports_log_exports_to_cloudwatch_logs' => bool,
    ?'supports_read_replica' => bool,
    ?'valid_upgrade_target' => ?ValidUpgradeTargetList,
  ) $s = shape()) {
    $this->db_engine_description = $s['db_engine_description'] ?? '';
    $this->db_engine_version_description = $s['db_engine_version_description'] ?? '';
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->default_character_set = $s['default_character_set'] ?? null;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->exportable_log_types = $s['exportable_log_types'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->supported_character_sets = $s['supported_character_sets'] ?? vec[];
    $this->supported_engine_modes = $s['supported_engine_modes'] ?? vec[];
    $this->supported_feature_names = $s['supported_feature_names'] ?? vec[];
    $this->supported_timezones = $s['supported_timezones'] ?? vec[];
    $this->supports_log_exports_to_cloudwatch_logs = $s['supports_log_exports_to_cloudwatch_logs'] ?? false;
    $this->supports_read_replica = $s['supports_read_replica'] ?? false;
    $this->valid_upgrade_target = $s['valid_upgrade_target'] ?? vec[];
  }
}

type DBEngineVersionList = vec<DBEngineVersion>;

class DBEngineVersionMessage {
  public ?DBEngineVersionList $db_engine_versions;
  public string $marker;

  public function __construct(shape(
    ?'db_engine_versions' => ?DBEngineVersionList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_engine_versions = $s['db_engine_versions'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBInstance {
  public int $allocated_storage;
  public ?DBInstanceRoles $associated_roles;
  public bool $auto_minor_version_upgrade;
  public string $availability_zone;
  public int $backup_retention_period;
  public string $ca_certificate_identifier;
  public string $character_set_name;
  public bool $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_instance_arn;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_instance_status;
  public string $db_name;
  public ?DBParameterGroupStatusList $db_parameter_groups;
  public ?DBSecurityGroupMembershipList $db_security_groups;
  public ?DBSubnetGroup $db_subnet_group;
  public int $db_instance_port;
  public string $dbi_resource_id;
  public bool $deletion_protection;
  public ?DomainMembershipList $domain_memberships;
  public ?LogTypeList $enabled_cloudwatch_logs_exports;
  public ?Endpoint $endpoint;
  public string $engine;
  public string $engine_version;
  public string $enhanced_monitoring_resource_arn;
  public bool $iam_database_authentication_enabled;
  public ?TStamp $instance_create_time;
  public ?IntegerOptional $iops;
  public string $kms_key_id;
  public ?TStamp $latest_restorable_time;
  public string $license_model;
  public ?Endpoint $listener_endpoint;
  public string $master_username;
  public ?IntegerOptional $max_allocated_storage;
  public ?IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public bool $multi_az;
  public ?OptionGroupMembershipList $option_group_memberships;
  public ?PendingModifiedValues $pending_modified_values;
  public ?BooleanOptional $performance_insights_enabled;
  public string $performance_insights_kms_key_id;
  public ?IntegerOptional $performance_insights_retention_period;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ?ProcessorFeatureList $processor_features;
  public ?IntegerOptional $promotion_tier;
  public bool $publicly_accessible;
  public ?ReadReplicaDBClusterIdentifierList $read_replica_db_cluster_identifiers;
  public ?ReadReplicaDBInstanceIdentifierList $read_replica_db_instance_identifiers;
  public string $read_replica_source_db_instance_identifier;
  public string $secondary_availability_zone;
  public ?DBInstanceStatusInfoList $status_infos;
  public bool $storage_encrypted;
  public string $storage_type;
  public string $tde_credential_arn;
  public string $timezone;
  public ?VpcSecurityGroupMembershipList $vpc_security_groups;

  public function __construct(shape(
    ?'allocated_storage' => int,
    ?'associated_roles' => ?DBInstanceRoles,
    ?'auto_minor_version_upgrade' => bool,
    ?'availability_zone' => string,
    ?'backup_retention_period' => int,
    ?'ca_certificate_identifier' => string,
    ?'character_set_name' => string,
    ?'copy_tags_to_snapshot' => bool,
    ?'db_cluster_identifier' => string,
    ?'db_instance_arn' => string,
    ?'db_instance_class' => string,
    ?'db_instance_identifier' => string,
    ?'db_instance_status' => string,
    ?'db_name' => string,
    ?'db_parameter_groups' => ?DBParameterGroupStatusList,
    ?'db_security_groups' => ?DBSecurityGroupMembershipList,
    ?'db_subnet_group' => ?DBSubnetGroup,
    ?'db_instance_port' => int,
    ?'dbi_resource_id' => string,
    ?'deletion_protection' => bool,
    ?'domain_memberships' => ?DomainMembershipList,
    ?'enabled_cloudwatch_logs_exports' => ?LogTypeList,
    ?'endpoint' => ?Endpoint,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'enhanced_monitoring_resource_arn' => string,
    ?'iam_database_authentication_enabled' => bool,
    ?'instance_create_time' => ?TStamp,
    ?'iops' => ?IntegerOptional,
    ?'kms_key_id' => string,
    ?'latest_restorable_time' => ?TStamp,
    ?'license_model' => string,
    ?'listener_endpoint' => ?Endpoint,
    ?'master_username' => string,
    ?'max_allocated_storage' => ?IntegerOptional,
    ?'monitoring_interval' => ?IntegerOptional,
    ?'monitoring_role_arn' => string,
    ?'multi_az' => bool,
    ?'option_group_memberships' => ?OptionGroupMembershipList,
    ?'pending_modified_values' => ?PendingModifiedValues,
    ?'performance_insights_enabled' => ?BooleanOptional,
    ?'performance_insights_kms_key_id' => string,
    ?'performance_insights_retention_period' => ?IntegerOptional,
    ?'preferred_backup_window' => string,
    ?'preferred_maintenance_window' => string,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'promotion_tier' => ?IntegerOptional,
    ?'publicly_accessible' => bool,
    ?'read_replica_db_cluster_identifiers' => ?ReadReplicaDBClusterIdentifierList,
    ?'read_replica_db_instance_identifiers' => ?ReadReplicaDBInstanceIdentifierList,
    ?'read_replica_source_db_instance_identifier' => string,
    ?'secondary_availability_zone' => string,
    ?'status_infos' => ?DBInstanceStatusInfoList,
    ?'storage_encrypted' => bool,
    ?'storage_type' => string,
    ?'tde_credential_arn' => string,
    ?'timezone' => string,
    ?'vpc_security_groups' => ?VpcSecurityGroupMembershipList,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->associated_roles = $s['associated_roles'] ?? vec[];
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->ca_certificate_identifier = $s['ca_certificate_identifier'] ?? '';
    $this->character_set_name = $s['character_set_name'] ?? '';
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_instance_arn = $s['db_instance_arn'] ?? '';
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_instance_status = $s['db_instance_status'] ?? '';
    $this->db_name = $s['db_name'] ?? '';
    $this->db_parameter_groups = $s['db_parameter_groups'] ?? vec[];
    $this->db_security_groups = $s['db_security_groups'] ?? vec[];
    $this->db_subnet_group = $s['db_subnet_group'] ?? null;
    $this->db_instance_port = $s['db_instance_port'] ?? 0;
    $this->dbi_resource_id = $s['dbi_resource_id'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain_memberships = $s['domain_memberships'] ?? vec[];
    $this->enabled_cloudwatch_logs_exports = $s['enabled_cloudwatch_logs_exports'] ?? vec[];
    $this->endpoint = $s['endpoint'] ?? null;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->enhanced_monitoring_resource_arn = $s['enhanced_monitoring_resource_arn'] ?? '';
    $this->iam_database_authentication_enabled = $s['iam_database_authentication_enabled'] ?? false;
    $this->instance_create_time = $s['instance_create_time'] ?? 0;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->latest_restorable_time = $s['latest_restorable_time'] ?? 0;
    $this->license_model = $s['license_model'] ?? '';
    $this->listener_endpoint = $s['listener_endpoint'] ?? null;
    $this->master_username = $s['master_username'] ?? '';
    $this->max_allocated_storage = $s['max_allocated_storage'] ?? 0;
    $this->monitoring_interval = $s['monitoring_interval'] ?? 0;
    $this->monitoring_role_arn = $s['monitoring_role_arn'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->option_group_memberships = $s['option_group_memberships'] ?? vec[];
    $this->pending_modified_values = $s['pending_modified_values'] ?? null;
    $this->performance_insights_enabled = $s['performance_insights_enabled'] ?? false;
    $this->performance_insights_kms_key_id = $s['performance_insights_kms_key_id'] ?? '';
    $this->performance_insights_retention_period = $s['performance_insights_retention_period'] ?? 0;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->promotion_tier = $s['promotion_tier'] ?? 0;
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->read_replica_db_cluster_identifiers = $s['read_replica_db_cluster_identifiers'] ?? vec[];
    $this->read_replica_db_instance_identifiers = $s['read_replica_db_instance_identifiers'] ?? vec[];
    $this->read_replica_source_db_instance_identifier = $s['read_replica_source_db_instance_identifier'] ?? '';
    $this->secondary_availability_zone = $s['secondary_availability_zone'] ?? '';
    $this->status_infos = $s['status_infos'] ?? vec[];
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tde_credential_arn = $s['tde_credential_arn'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
    $this->vpc_security_groups = $s['vpc_security_groups'] ?? vec[];
  }
}

class DBInstanceAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBInstanceAutomatedBackup {
  public int $allocated_storage;
  public string $availability_zone;
  public string $db_instance_arn;
  public string $db_instance_identifier;
  public string $dbi_resource_id;
  public bool $encrypted;
  public string $engine;
  public string $engine_version;
  public bool $iam_database_authentication_enabled;
  public ?TStamp $instance_create_time;
  public ?IntegerOptional $iops;
  public string $kms_key_id;
  public string $license_model;
  public string $master_username;
  public string $option_group_name;
  public int $port;
  public string $region;
  public ?RestoreWindow $restore_window;
  public string $status;
  public string $storage_type;
  public string $tde_credential_arn;
  public string $timezone;
  public string $vpc_id;

  public function __construct(shape(
    ?'allocated_storage' => int,
    ?'availability_zone' => string,
    ?'db_instance_arn' => string,
    ?'db_instance_identifier' => string,
    ?'dbi_resource_id' => string,
    ?'encrypted' => bool,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'iam_database_authentication_enabled' => bool,
    ?'instance_create_time' => ?TStamp,
    ?'iops' => ?IntegerOptional,
    ?'kms_key_id' => string,
    ?'license_model' => string,
    ?'master_username' => string,
    ?'option_group_name' => string,
    ?'port' => int,
    ?'region' => string,
    ?'restore_window' => ?RestoreWindow,
    ?'status' => string,
    ?'storage_type' => string,
    ?'tde_credential_arn' => string,
    ?'timezone' => string,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->db_instance_arn = $s['db_instance_arn'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->dbi_resource_id = $s['dbi_resource_id'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->iam_database_authentication_enabled = $s['iam_database_authentication_enabled'] ?? false;
    $this->instance_create_time = $s['instance_create_time'] ?? 0;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_model = $s['license_model'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->region = $s['region'] ?? '';
    $this->restore_window = $s['restore_window'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tde_credential_arn = $s['tde_credential_arn'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type DBInstanceAutomatedBackupList = vec<DBInstanceAutomatedBackup>;

class DBInstanceAutomatedBackupMessage {
  public ?DBInstanceAutomatedBackupList $db_instance_automated_backups;
  public string $marker;

  public function __construct(shape(
    ?'db_instance_automated_backups' => ?DBInstanceAutomatedBackupList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_instance_automated_backups = $s['db_instance_automated_backups'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBInstanceAutomatedBackupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBInstanceAutomatedBackupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBInstanceList = vec<DBInstance>;

class DBInstanceMessage {
  public ?DBInstanceList $db_instances;
  public string $marker;

  public function __construct(shape(
    ?'db_instances' => ?DBInstanceList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_instances = $s['db_instances'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBInstanceNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBInstanceRole {
  public string $feature_name;
  public string $role_arn;
  public string $status;

  public function __construct(shape(
    ?'feature_name' => string,
    ?'role_arn' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->feature_name = $s['feature_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DBInstanceRoleAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBInstanceRoleNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBInstanceRoleQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBInstanceRoles = vec<DBInstanceRole>;

class DBInstanceStatusInfo {
  public string $message;
  public bool $normal;
  public string $status;
  public string $status_type;

  public function __construct(shape(
    ?'message' => string,
    ?'normal' => bool,
    ?'status' => string,
    ?'status_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->normal = $s['normal'] ?? false;
    $this->status = $s['status'] ?? '';
    $this->status_type = $s['status_type'] ?? '';
  }
}

type DBInstanceStatusInfoList = vec<DBInstanceStatusInfo>;

class DBLogFileNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBParameterGroup {
  public string $db_parameter_group_arn;
  public string $db_parameter_group_family;
  public string $db_parameter_group_name;
  public string $description;

  public function __construct(shape(
    ?'db_parameter_group_arn' => string,
    ?'db_parameter_group_family' => string,
    ?'db_parameter_group_name' => string,
    ?'description' => string,
  ) $s = shape()) {
    $this->db_parameter_group_arn = $s['db_parameter_group_arn'] ?? '';
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class DBParameterGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBParameterGroupDetails {
  public string $marker;
  public ?ParametersList $parameters;

  public function __construct(shape(
    ?'marker' => string,
    ?'parameters' => ?ParametersList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

type DBParameterGroupList = vec<DBParameterGroup>;

class DBParameterGroupNameMessage {
  public string $db_parameter_group_name;

  public function __construct(shape(
    ?'db_parameter_group_name' => string,
  ) $s = shape()) {
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
  }
}

class DBParameterGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBParameterGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBParameterGroupStatus {
  public string $db_parameter_group_name;
  public string $parameter_apply_status;

  public function __construct(shape(
    ?'db_parameter_group_name' => string,
    ?'parameter_apply_status' => string,
  ) $s = shape()) {
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->parameter_apply_status = $s['parameter_apply_status'] ?? '';
  }
}

type DBParameterGroupStatusList = vec<DBParameterGroupStatus>;

class DBParameterGroupsMessage {
  public ?DBParameterGroupList $db_parameter_groups;
  public string $marker;

  public function __construct(shape(
    ?'db_parameter_groups' => ?DBParameterGroupList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_parameter_groups = $s['db_parameter_groups'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBProxy {
  public ?UserAuthConfigInfoList $auth;
  public ?TStamp $created_date;
  public string $db_proxy_arn;
  public string $db_proxy_name;
  public bool $debug_logging;
  public string $endpoint;
  public string $engine_family;
  public int $idle_client_timeout;
  public bool $require_tls;
  public string $role_arn;
  public ?DBProxyStatus $status;
  public ?TStamp $updated_date;
  public ?StringList $vpc_security_group_ids;
  public ?StringList $vpc_subnet_ids;

  public function __construct(shape(
    ?'auth' => ?UserAuthConfigInfoList,
    ?'created_date' => ?TStamp,
    ?'db_proxy_arn' => string,
    ?'db_proxy_name' => string,
    ?'debug_logging' => bool,
    ?'endpoint' => string,
    ?'engine_family' => string,
    ?'idle_client_timeout' => int,
    ?'require_tls' => bool,
    ?'role_arn' => string,
    ?'status' => ?DBProxyStatus,
    ?'updated_date' => ?TStamp,
    ?'vpc_security_group_ids' => ?StringList,
    ?'vpc_subnet_ids' => ?StringList,
  ) $s = shape()) {
    $this->auth = $s['auth'] ?? vec[];
    $this->created_date = $s['created_date'] ?? 0;
    $this->db_proxy_arn = $s['db_proxy_arn'] ?? '';
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->debug_logging = $s['debug_logging'] ?? false;
    $this->endpoint = $s['endpoint'] ?? '';
    $this->engine_family = $s['engine_family'] ?? '';
    $this->idle_client_timeout = $s['idle_client_timeout'] ?? 0;
    $this->require_tls = $s['require_tls'] ?? false;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->updated_date = $s['updated_date'] ?? 0;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
    $this->vpc_subnet_ids = $s['vpc_subnet_ids'] ?? vec[];
  }
}

class DBProxyAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBProxyList = vec<DBProxy>;

class DBProxyNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBProxyQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBProxyStatus = string;

class DBProxyTarget {
  public string $endpoint;
  public int $port;
  public string $rds_resource_id;
  public string $target_arn;
  public ?TargetHealth $target_health;
  public string $tracked_cluster_id;
  public ?TargetType $type;

  public function __construct(shape(
    ?'endpoint' => string,
    ?'port' => int,
    ?'rds_resource_id' => string,
    ?'target_arn' => string,
    ?'target_health' => ?TargetHealth,
    ?'tracked_cluster_id' => string,
    ?'type' => ?TargetType,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->rds_resource_id = $s['rds_resource_id'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
    $this->target_health = $s['target_health'] ?? null;
    $this->tracked_cluster_id = $s['tracked_cluster_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class DBProxyTargetAlreadyRegisteredFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBProxyTargetGroup {
  public ?ConnectionPoolConfigurationInfo $connection_pool_config;
  public ?TStamp $created_date;
  public string $db_proxy_name;
  public bool $is_default;
  public string $status;
  public string $target_group_arn;
  public string $target_group_name;
  public ?TStamp $updated_date;

  public function __construct(shape(
    ?'connection_pool_config' => ?ConnectionPoolConfigurationInfo,
    ?'created_date' => ?TStamp,
    ?'db_proxy_name' => string,
    ?'is_default' => bool,
    ?'status' => string,
    ?'target_group_arn' => string,
    ?'target_group_name' => string,
    ?'updated_date' => ?TStamp,
  ) $s = shape()) {
    $this->connection_pool_config = $s['connection_pool_config'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->is_default = $s['is_default'] ?? false;
    $this->status = $s['status'] ?? '';
    $this->target_group_arn = $s['target_group_arn'] ?? '';
    $this->target_group_name = $s['target_group_name'] ?? '';
    $this->updated_date = $s['updated_date'] ?? 0;
  }
}

class DBProxyTargetGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBProxyTargetNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSecurityGroup {
  public string $db_security_group_arn;
  public string $db_security_group_description;
  public string $db_security_group_name;
  public ?EC2SecurityGroupList $ec_2_security_groups;
  public ?IPRangeList $ip_ranges;
  public string $owner_id;
  public string $vpc_id;

  public function __construct(shape(
    ?'db_security_group_arn' => string,
    ?'db_security_group_description' => string,
    ?'db_security_group_name' => string,
    ?'ec_2_security_groups' => ?EC2SecurityGroupList,
    ?'ip_ranges' => ?IPRangeList,
    ?'owner_id' => string,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->db_security_group_arn = $s['db_security_group_arn'] ?? '';
    $this->db_security_group_description = $s['db_security_group_description'] ?? '';
    $this->db_security_group_name = $s['db_security_group_name'] ?? '';
    $this->ec_2_security_groups = $s['ec_2_security_groups'] ?? vec[];
    $this->ip_ranges = $s['ip_ranges'] ?? vec[];
    $this->owner_id = $s['owner_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DBSecurityGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSecurityGroupMembership {
  public string $db_security_group_name;
  public string $status;

  public function __construct(shape(
    ?'db_security_group_name' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->db_security_group_name = $s['db_security_group_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DBSecurityGroupMembershipList = vec<DBSecurityGroupMembership>;

class DBSecurityGroupMessage {
  public ?DBSecurityGroups $db_security_groups;
  public string $marker;

  public function __construct(shape(
    ?'db_security_groups' => ?DBSecurityGroups,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_security_groups = $s['db_security_groups'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

type DBSecurityGroupNameList = vec<String>;

class DBSecurityGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSecurityGroupNotSupportedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSecurityGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBSecurityGroups = vec<DBSecurityGroup>;

class DBSnapshot {
  public int $allocated_storage;
  public string $availability_zone;
  public string $db_instance_identifier;
  public string $db_snapshot_arn;
  public string $db_snapshot_identifier;
  public string $dbi_resource_id;
  public bool $encrypted;
  public string $engine;
  public string $engine_version;
  public bool $iam_database_authentication_enabled;
  public ?TStamp $instance_create_time;
  public ?IntegerOptional $iops;
  public string $kms_key_id;
  public string $license_model;
  public string $master_username;
  public string $option_group_name;
  public int $percent_progress;
  public int $port;
  public ?ProcessorFeatureList $processor_features;
  public ?TStamp $snapshot_create_time;
  public string $snapshot_type;
  public string $source_db_snapshot_identifier;
  public string $source_region;
  public string $status;
  public string $storage_type;
  public string $tde_credential_arn;
  public string $timezone;
  public string $vpc_id;

  public function __construct(shape(
    ?'allocated_storage' => int,
    ?'availability_zone' => string,
    ?'db_instance_identifier' => string,
    ?'db_snapshot_arn' => string,
    ?'db_snapshot_identifier' => string,
    ?'dbi_resource_id' => string,
    ?'encrypted' => bool,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'iam_database_authentication_enabled' => bool,
    ?'instance_create_time' => ?TStamp,
    ?'iops' => ?IntegerOptional,
    ?'kms_key_id' => string,
    ?'license_model' => string,
    ?'master_username' => string,
    ?'option_group_name' => string,
    ?'percent_progress' => int,
    ?'port' => int,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'snapshot_create_time' => ?TStamp,
    ?'snapshot_type' => string,
    ?'source_db_snapshot_identifier' => string,
    ?'source_region' => string,
    ?'status' => string,
    ?'storage_type' => string,
    ?'tde_credential_arn' => string,
    ?'timezone' => string,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_snapshot_arn = $s['db_snapshot_arn'] ?? '';
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
    $this->dbi_resource_id = $s['dbi_resource_id'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->iam_database_authentication_enabled = $s['iam_database_authentication_enabled'] ?? false;
    $this->instance_create_time = $s['instance_create_time'] ?? 0;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_model = $s['license_model'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->percent_progress = $s['percent_progress'] ?? 0;
    $this->port = $s['port'] ?? 0;
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->snapshot_create_time = $s['snapshot_create_time'] ?? 0;
    $this->snapshot_type = $s['snapshot_type'] ?? '';
    $this->source_db_snapshot_identifier = $s['source_db_snapshot_identifier'] ?? '';
    $this->source_region = $s['source_region'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tde_credential_arn = $s['tde_credential_arn'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DBSnapshotAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSnapshotAttribute {
  public string $attribute_name;
  public ?AttributeValueList $attribute_values;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'attribute_values' => ?AttributeValueList,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_values = $s['attribute_values'] ?? vec[];
  }
}

type DBSnapshotAttributeList = vec<DBSnapshotAttribute>;

class DBSnapshotAttributesResult {
  public ?DBSnapshotAttributeList $db_snapshot_attributes;
  public string $db_snapshot_identifier;

  public function __construct(shape(
    ?'db_snapshot_attributes' => ?DBSnapshotAttributeList,
    ?'db_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->db_snapshot_attributes = $s['db_snapshot_attributes'] ?? vec[];
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
  }
}

type DBSnapshotList = vec<DBSnapshot>;

class DBSnapshotMessage {
  public ?DBSnapshotList $db_snapshots;
  public string $marker;

  public function __construct(shape(
    ?'db_snapshots' => ?DBSnapshotList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_snapshots = $s['db_snapshots'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBSnapshotNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSubnetGroup {
  public string $db_subnet_group_arn;
  public string $db_subnet_group_description;
  public string $db_subnet_group_name;
  public string $subnet_group_status;
  public ?SubnetList $subnets;
  public string $vpc_id;

  public function __construct(shape(
    ?'db_subnet_group_arn' => string,
    ?'db_subnet_group_description' => string,
    ?'db_subnet_group_name' => string,
    ?'subnet_group_status' => string,
    ?'subnets' => ?SubnetList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->db_subnet_group_arn = $s['db_subnet_group_arn'] ?? '';
    $this->db_subnet_group_description = $s['db_subnet_group_description'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->subnet_group_status = $s['subnet_group_status'] ?? '';
    $this->subnets = $s['subnets'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DBSubnetGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSubnetGroupDoesNotCoverEnoughAZs {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSubnetGroupMessage {
  public ?DBSubnetGroups $db_subnet_groups;
  public string $marker;

  public function __construct(shape(
    ?'db_subnet_groups' => ?DBSubnetGroups,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_subnet_groups = $s['db_subnet_groups'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DBSubnetGroupNotAllowedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSubnetGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBSubnetGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DBSubnetGroups = vec<DBSubnetGroup>;

class DBSubnetQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DBUpgradeDependencyFailureFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteCustomAvailabilityZoneMessage {
  public string $custom_availability_zone_id;

  public function __construct(shape(
    ?'custom_availability_zone_id' => string,
  ) $s = shape()) {
    $this->custom_availability_zone_id = $s['custom_availability_zone_id'] ?? '';
  }
}

class DeleteCustomAvailabilityZoneResult {
  public ?CustomAvailabilityZone $custom_availability_zone;

  public function __construct(shape(
    ?'custom_availability_zone' => ?CustomAvailabilityZone,
  ) $s = shape()) {
    $this->custom_availability_zone = $s['custom_availability_zone'] ?? null;
  }
}

class DeleteDBClusterEndpointMessage {
  public string $db_cluster_endpoint_identifier;

  public function __construct(shape(
    ?'db_cluster_endpoint_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_endpoint_identifier = $s['db_cluster_endpoint_identifier'] ?? '';
  }
}

class DeleteDBClusterMessage {
  public string $db_cluster_identifier;
  public string $final_db_snapshot_identifier;
  public bool $skip_final_snapshot;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
    ?'final_db_snapshot_identifier' => string,
    ?'skip_final_snapshot' => bool,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->final_db_snapshot_identifier = $s['final_db_snapshot_identifier'] ?? '';
    $this->skip_final_snapshot = $s['skip_final_snapshot'] ?? false;
  }
}

class DeleteDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;

  public function __construct(shape(
    ?'db_cluster_parameter_group_name' => string,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
  }
}

class DeleteDBClusterResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class DeleteDBClusterSnapshotMessage {
  public string $db_cluster_snapshot_identifier;

  public function __construct(shape(
    ?'db_cluster_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_snapshot_identifier = $s['db_cluster_snapshot_identifier'] ?? '';
  }
}

class DeleteDBClusterSnapshotResult {
  public ?DBClusterSnapshot $db_cluster_snapshot;

  public function __construct(shape(
    ?'db_cluster_snapshot' => ?DBClusterSnapshot,
  ) $s = shape()) {
    $this->db_cluster_snapshot = $s['db_cluster_snapshot'] ?? null;
  }
}

class DeleteDBInstanceAutomatedBackupMessage {
  public string $dbi_resource_id;

  public function __construct(shape(
    ?'dbi_resource_id' => string,
  ) $s = shape()) {
    $this->dbi_resource_id = $s['dbi_resource_id'] ?? '';
  }
}

class DeleteDBInstanceAutomatedBackupResult {
  public ?DBInstanceAutomatedBackup $db_instance_automated_backup;

  public function __construct(shape(
    ?'db_instance_automated_backup' => ?DBInstanceAutomatedBackup,
  ) $s = shape()) {
    $this->db_instance_automated_backup = $s['db_instance_automated_backup'] ?? null;
  }
}

class DeleteDBInstanceMessage {
  public string $db_instance_identifier;
  public ?BooleanOptional $delete_automated_backups;
  public string $final_db_snapshot_identifier;
  public bool $skip_final_snapshot;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'delete_automated_backups' => ?BooleanOptional,
    ?'final_db_snapshot_identifier' => string,
    ?'skip_final_snapshot' => bool,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->delete_automated_backups = $s['delete_automated_backups'] ?? false;
    $this->final_db_snapshot_identifier = $s['final_db_snapshot_identifier'] ?? '';
    $this->skip_final_snapshot = $s['skip_final_snapshot'] ?? false;
  }
}

class DeleteDBInstanceResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class DeleteDBParameterGroupMessage {
  public string $db_parameter_group_name;

  public function __construct(shape(
    ?'db_parameter_group_name' => string,
  ) $s = shape()) {
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
  }
}

class DeleteDBProxyRequest {
  public string $db_proxy_name;

  public function __construct(shape(
    ?'db_proxy_name' => string,
  ) $s = shape()) {
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
  }
}

class DeleteDBProxyResponse {
  public ?DBProxy $db_proxy;

  public function __construct(shape(
    ?'db_proxy' => ?DBProxy,
  ) $s = shape()) {
    $this->db_proxy = $s['db_proxy'] ?? null;
  }
}

class DeleteDBSecurityGroupMessage {
  public string $db_security_group_name;

  public function __construct(shape(
    ?'db_security_group_name' => string,
  ) $s = shape()) {
    $this->db_security_group_name = $s['db_security_group_name'] ?? '';
  }
}

class DeleteDBSnapshotMessage {
  public string $db_snapshot_identifier;

  public function __construct(shape(
    ?'db_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
  }
}

class DeleteDBSnapshotResult {
  public ?DBSnapshot $db_snapshot;

  public function __construct(shape(
    ?'db_snapshot' => ?DBSnapshot,
  ) $s = shape()) {
    $this->db_snapshot = $s['db_snapshot'] ?? null;
  }
}

class DeleteDBSubnetGroupMessage {
  public string $db_subnet_group_name;

  public function __construct(shape(
    ?'db_subnet_group_name' => string,
  ) $s = shape()) {
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
  }
}

class DeleteEventSubscriptionMessage {
  public string $subscription_name;

  public function __construct(shape(
    ?'subscription_name' => string,
  ) $s = shape()) {
    $this->subscription_name = $s['subscription_name'] ?? '';
  }
}

class DeleteEventSubscriptionResult {
  public ?EventSubscription $event_subscription;

  public function __construct(shape(
    ?'event_subscription' => ?EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $s['event_subscription'] ?? null;
  }
}

class DeleteGlobalClusterMessage {
  public string $global_cluster_identifier;

  public function __construct(shape(
    ?'global_cluster_identifier' => string,
  ) $s = shape()) {
    $this->global_cluster_identifier = $s['global_cluster_identifier'] ?? '';
  }
}

class DeleteGlobalClusterResult {
  public ?GlobalCluster $global_cluster;

  public function __construct(shape(
    ?'global_cluster' => ?GlobalCluster,
  ) $s = shape()) {
    $this->global_cluster = $s['global_cluster'] ?? null;
  }
}

class DeleteInstallationMediaMessage {
  public string $installation_media_id;

  public function __construct(shape(
    ?'installation_media_id' => string,
  ) $s = shape()) {
    $this->installation_media_id = $s['installation_media_id'] ?? '';
  }
}

class DeleteOptionGroupMessage {
  public string $option_group_name;

  public function __construct(shape(
    ?'option_group_name' => string,
  ) $s = shape()) {
    $this->option_group_name = $s['option_group_name'] ?? '';
  }
}

class DeregisterDBProxyTargetsRequest {
  public ?StringList $db_cluster_identifiers;
  public ?StringList $db_instance_identifiers;
  public string $db_proxy_name;
  public string $target_group_name;

  public function __construct(shape(
    ?'db_cluster_identifiers' => ?StringList,
    ?'db_instance_identifiers' => ?StringList,
    ?'db_proxy_name' => string,
    ?'target_group_name' => string,
  ) $s = shape()) {
    $this->db_cluster_identifiers = $s['db_cluster_identifiers'] ?? vec[];
    $this->db_instance_identifiers = $s['db_instance_identifiers'] ?? vec[];
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->target_group_name = $s['target_group_name'] ?? '';
  }
}

class DeregisterDBProxyTargetsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountAttributesMessage {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeCertificatesMessage {
  public string $certificate_identifier;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'certificate_identifier' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->certificate_identifier = $s['certificate_identifier'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeCustomAvailabilityZonesMessage {
  public string $custom_availability_zone_id;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'custom_availability_zone_id' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->custom_availability_zone_id = $s['custom_availability_zone_id'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBClusterBacktracksMessage {
  public string $backtrack_identifier;
  public string $db_cluster_identifier;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'backtrack_identifier' => string,
    ?'db_cluster_identifier' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->backtrack_identifier = $s['backtrack_identifier'] ?? '';
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBClusterEndpointsMessage {
  public string $db_cluster_endpoint_identifier;
  public string $db_cluster_identifier;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_cluster_endpoint_identifier' => string,
    ?'db_cluster_identifier' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_cluster_endpoint_identifier = $s['db_cluster_endpoint_identifier'] ?? '';
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBClusterParameterGroupsMessage {
  public string $db_cluster_parameter_group_name;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_cluster_parameter_group_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBClusterParametersMessage {
  public string $db_cluster_parameter_group_name;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $source;

  public function __construct(shape(
    ?'db_cluster_parameter_group_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'source' => string,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->source = $s['source'] ?? '';
  }
}

class DescribeDBClusterSnapshotAttributesMessage {
  public string $db_cluster_snapshot_identifier;

  public function __construct(shape(
    ?'db_cluster_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_snapshot_identifier = $s['db_cluster_snapshot_identifier'] ?? '';
  }
}

class DescribeDBClusterSnapshotAttributesResult {
  public ?DBClusterSnapshotAttributesResult $db_cluster_snapshot_attributes_result;

  public function __construct(shape(
    ?'db_cluster_snapshot_attributes_result' => ?DBClusterSnapshotAttributesResult,
  ) $s = shape()) {
    $this->db_cluster_snapshot_attributes_result = $s['db_cluster_snapshot_attributes_result'] ?? null;
  }
}

class DescribeDBClusterSnapshotsMessage {
  public string $db_cluster_identifier;
  public string $db_cluster_snapshot_identifier;
  public ?FilterList $filters;
  public bool $include_public;
  public bool $include_shared;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $snapshot_type;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
    ?'db_cluster_snapshot_identifier' => string,
    ?'filters' => ?FilterList,
    ?'include_public' => bool,
    ?'include_shared' => bool,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'snapshot_type' => string,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_snapshot_identifier = $s['db_cluster_snapshot_identifier'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->include_public = $s['include_public'] ?? false;
    $this->include_shared = $s['include_shared'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->snapshot_type = $s['snapshot_type'] ?? '';
  }
}

class DescribeDBClustersMessage {
  public string $db_cluster_identifier;
  public ?FilterList $filters;
  public bool $include_shared;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
    ?'filters' => ?FilterList,
    ?'include_shared' => bool,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->include_shared = $s['include_shared'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBEngineVersionsMessage {
  public string $db_parameter_group_family;
  public bool $default_only;
  public string $engine;
  public string $engine_version;
  public ?FilterList $filters;
  public ?BooleanOptional $include_all;
  public ?BooleanOptional $list_supported_character_sets;
  public ?BooleanOptional $list_supported_timezones;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_parameter_group_family' => string,
    ?'default_only' => bool,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'filters' => ?FilterList,
    ?'include_all' => ?BooleanOptional,
    ?'list_supported_character_sets' => ?BooleanOptional,
    ?'list_supported_timezones' => ?BooleanOptional,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->default_only = $s['default_only'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->include_all = $s['include_all'] ?? false;
    $this->list_supported_character_sets = $s['list_supported_character_sets'] ?? false;
    $this->list_supported_timezones = $s['list_supported_timezones'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBInstanceAutomatedBackupsMessage {
  public string $db_instance_identifier;
  public string $dbi_resource_id;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'dbi_resource_id' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->dbi_resource_id = $s['dbi_resource_id'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBInstancesMessage {
  public string $db_instance_identifier;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBLogFilesDetails {
  public ?Long $last_written;
  public string $log_file_name;
  public ?Long $size;

  public function __construct(shape(
    ?'last_written' => ?Long,
    ?'log_file_name' => string,
    ?'size' => ?Long,
  ) $s = shape()) {
    $this->last_written = $s['last_written'] ?? 0;
    $this->log_file_name = $s['log_file_name'] ?? '';
    $this->size = $s['size'] ?? 0;
  }
}

type DescribeDBLogFilesList = vec<DescribeDBLogFilesDetails>;

class DescribeDBLogFilesMessage {
  public string $db_instance_identifier;
  public ?Long $file_last_written;
  public ?Long $file_size;
  public string $filename_contains;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'file_last_written' => ?Long,
    ?'file_size' => ?Long,
    ?'filename_contains' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->file_last_written = $s['file_last_written'] ?? 0;
    $this->file_size = $s['file_size'] ?? 0;
    $this->filename_contains = $s['filename_contains'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBLogFilesResponse {
  public ?DescribeDBLogFilesList $describe_db_log_files;
  public string $marker;

  public function __construct(shape(
    ?'describe_db_log_files' => ?DescribeDBLogFilesList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->describe_db_log_files = $s['describe_db_log_files'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DescribeDBParameterGroupsMessage {
  public string $db_parameter_group_name;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_parameter_group_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBParametersMessage {
  public string $db_parameter_group_name;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $source;

  public function __construct(shape(
    ?'db_parameter_group_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'source' => string,
  ) $s = shape()) {
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->source = $s['source'] ?? '';
  }
}

class DescribeDBProxiesRequest {
  public string $db_proxy_name;
  public ?FilterList $filters;
  public string $marker;
  public ?MaxRecords $max_records;

  public function __construct(shape(
    ?'db_proxy_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?MaxRecords,
  ) $s = shape()) {
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBProxiesResponse {
  public ?DBProxyList $db_proxies;
  public string $marker;

  public function __construct(shape(
    ?'db_proxies' => ?DBProxyList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->db_proxies = $s['db_proxies'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DescribeDBProxyTargetGroupsRequest {
  public string $db_proxy_name;
  public ?FilterList $filters;
  public string $marker;
  public ?MaxRecords $max_records;
  public string $target_group_name;

  public function __construct(shape(
    ?'db_proxy_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?MaxRecords,
    ?'target_group_name' => string,
  ) $s = shape()) {
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->target_group_name = $s['target_group_name'] ?? '';
  }
}

class DescribeDBProxyTargetGroupsResponse {
  public string $marker;
  public ?TargetGroupList $target_groups;

  public function __construct(shape(
    ?'marker' => string,
    ?'target_groups' => ?TargetGroupList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->target_groups = $s['target_groups'] ?? vec[];
  }
}

class DescribeDBProxyTargetsRequest {
  public string $db_proxy_name;
  public ?FilterList $filters;
  public string $marker;
  public ?MaxRecords $max_records;
  public string $target_group_name;

  public function __construct(shape(
    ?'db_proxy_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?MaxRecords,
    ?'target_group_name' => string,
  ) $s = shape()) {
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->target_group_name = $s['target_group_name'] ?? '';
  }
}

class DescribeDBProxyTargetsResponse {
  public string $marker;
  public ?TargetList $targets;

  public function __construct(shape(
    ?'marker' => string,
    ?'targets' => ?TargetList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->targets = $s['targets'] ?? vec[];
  }
}

class DescribeDBSecurityGroupsMessage {
  public string $db_security_group_name;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_security_group_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_security_group_name = $s['db_security_group_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeDBSnapshotAttributesMessage {
  public string $db_snapshot_identifier;

  public function __construct(shape(
    ?'db_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
  }
}

class DescribeDBSnapshotAttributesResult {
  public ?DBSnapshotAttributesResult $db_snapshot_attributes_result;

  public function __construct(shape(
    ?'db_snapshot_attributes_result' => ?DBSnapshotAttributesResult,
  ) $s = shape()) {
    $this->db_snapshot_attributes_result = $s['db_snapshot_attributes_result'] ?? null;
  }
}

class DescribeDBSnapshotsMessage {
  public string $db_instance_identifier;
  public string $db_snapshot_identifier;
  public string $dbi_resource_id;
  public ?FilterList $filters;
  public bool $include_public;
  public bool $include_shared;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $snapshot_type;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'db_snapshot_identifier' => string,
    ?'dbi_resource_id' => string,
    ?'filters' => ?FilterList,
    ?'include_public' => bool,
    ?'include_shared' => bool,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'snapshot_type' => string,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
    $this->dbi_resource_id = $s['dbi_resource_id'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->include_public = $s['include_public'] ?? false;
    $this->include_shared = $s['include_shared'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->snapshot_type = $s['snapshot_type'] ?? '';
  }
}

class DescribeDBSubnetGroupsMessage {
  public string $db_subnet_group_name;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_subnet_group_name' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeEngineDefaultClusterParametersMessage {
  public string $db_parameter_group_family;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_parameter_group_family' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeEngineDefaultClusterParametersResult {
  public ?EngineDefaults $engine_defaults;

  public function __construct(shape(
    ?'engine_defaults' => ?EngineDefaults,
  ) $s = shape()) {
    $this->engine_defaults = $s['engine_defaults'] ?? null;
  }
}

class DescribeEngineDefaultParametersMessage {
  public string $db_parameter_group_family;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'db_parameter_group_family' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeEngineDefaultParametersResult {
  public ?EngineDefaults $engine_defaults;

  public function __construct(shape(
    ?'engine_defaults' => ?EngineDefaults,
  ) $s = shape()) {
    $this->engine_defaults = $s['engine_defaults'] ?? null;
  }
}

class DescribeEventCategoriesMessage {
  public ?FilterList $filters;
  public string $source_type;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'source_type' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->source_type = $s['source_type'] ?? '';
  }
}

class DescribeEventSubscriptionsMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $subscription_name;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'subscription_name' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->subscription_name = $s['subscription_name'] ?? '';
  }
}

class DescribeEventsMessage {
  public ?IntegerOptional $duration;
  public ?TStamp $end_time;
  public ?EventCategoriesList $event_categories;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $source_identifier;
  public ?SourceType $source_type;
  public ?TStamp $start_time;

  public function __construct(shape(
    ?'duration' => ?IntegerOptional,
    ?'end_time' => ?TStamp,
    ?'event_categories' => ?EventCategoriesList,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'source_identifier' => string,
    ?'source_type' => ?SourceType,
    ?'start_time' => ?TStamp,
  ) $s = shape()) {
    $this->duration = $s['duration'] ?? 0;
    $this->end_time = $s['end_time'] ?? 0;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeExportTasksMessage {
  public string $export_task_identifier;
  public ?FilterList $filters;
  public string $marker;
  public ?MaxRecords $max_records;
  public string $source_arn;

  public function __construct(shape(
    ?'export_task_identifier' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?MaxRecords,
    ?'source_arn' => string,
  ) $s = shape()) {
    $this->export_task_identifier = $s['export_task_identifier'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->source_arn = $s['source_arn'] ?? '';
  }
}

class DescribeGlobalClustersMessage {
  public ?FilterList $filters;
  public string $global_cluster_identifier;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'global_cluster_identifier' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->global_cluster_identifier = $s['global_cluster_identifier'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeInstallationMediaMessage {
  public ?FilterList $filters;
  public string $installation_media_id;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'installation_media_id' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->installation_media_id = $s['installation_media_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeOptionGroupOptionsMessage {
  public string $engine_name;
  public ?FilterList $filters;
  public string $major_engine_version;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'engine_name' => string,
    ?'filters' => ?FilterList,
    ?'major_engine_version' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->engine_name = $s['engine_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->major_engine_version = $s['major_engine_version'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeOptionGroupsMessage {
  public string $engine_name;
  public ?FilterList $filters;
  public string $major_engine_version;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $option_group_name;

  public function __construct(shape(
    ?'engine_name' => string,
    ?'filters' => ?FilterList,
    ?'major_engine_version' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'option_group_name' => string,
  ) $s = shape()) {
    $this->engine_name = $s['engine_name'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->major_engine_version = $s['major_engine_version'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->option_group_name = $s['option_group_name'] ?? '';
  }
}

class DescribeOrderableDBInstanceOptionsMessage {
  public string $availability_zone_group;
  public string $db_instance_class;
  public string $engine;
  public string $engine_version;
  public ?FilterList $filters;
  public string $license_model;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?BooleanOptional $vpc;

  public function __construct(shape(
    ?'availability_zone_group' => string,
    ?'db_instance_class' => string,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'filters' => ?FilterList,
    ?'license_model' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'vpc' => ?BooleanOptional,
  ) $s = shape()) {
    $this->availability_zone_group = $s['availability_zone_group'] ?? '';
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->license_model = $s['license_model'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->vpc = $s['vpc'] ?? false;
  }
}

class DescribePendingMaintenanceActionsMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $resource_identifier;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'resource_identifier' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->resource_identifier = $s['resource_identifier'] ?? '';
  }
}

class DescribeReservedDBInstancesMessage {
  public string $db_instance_class;
  public string $duration;
  public ?FilterList $filters;
  public string $lease_id;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?BooleanOptional $multi_az;
  public string $offering_type;
  public string $product_description;
  public string $reserved_db_instance_id;
  public string $reserved_db_instances_offering_id;

  public function __construct(shape(
    ?'db_instance_class' => string,
    ?'duration' => string,
    ?'filters' => ?FilterList,
    ?'lease_id' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'multi_az' => ?BooleanOptional,
    ?'offering_type' => string,
    ?'product_description' => string,
    ?'reserved_db_instance_id' => string,
    ?'reserved_db_instances_offering_id' => string,
  ) $s = shape()) {
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->duration = $s['duration'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->lease_id = $s['lease_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->multi_az = $s['multi_az'] ?? false;
    $this->offering_type = $s['offering_type'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->reserved_db_instance_id = $s['reserved_db_instance_id'] ?? '';
    $this->reserved_db_instances_offering_id = $s['reserved_db_instances_offering_id'] ?? '';
  }
}

class DescribeReservedDBInstancesOfferingsMessage {
  public string $db_instance_class;
  public string $duration;
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?BooleanOptional $multi_az;
  public string $offering_type;
  public string $product_description;
  public string $reserved_db_instances_offering_id;

  public function __construct(shape(
    ?'db_instance_class' => string,
    ?'duration' => string,
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'multi_az' => ?BooleanOptional,
    ?'offering_type' => string,
    ?'product_description' => string,
    ?'reserved_db_instances_offering_id' => string,
  ) $s = shape()) {
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->duration = $s['duration'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->multi_az = $s['multi_az'] ?? false;
    $this->offering_type = $s['offering_type'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->reserved_db_instances_offering_id = $s['reserved_db_instances_offering_id'] ?? '';
  }
}

class DescribeSourceRegionsMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $region_name;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'region_name' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->region_name = $s['region_name'] ?? '';
  }
}

class DescribeValidDBInstanceModificationsMessage {
  public string $db_instance_identifier;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
  }
}

class DescribeValidDBInstanceModificationsResult {
  public ?ValidDBInstanceModificationsMessage $valid_db_instance_modifications_message;

  public function __construct(shape(
    ?'valid_db_instance_modifications_message' => ?ValidDBInstanceModificationsMessage,
  ) $s = shape()) {
    $this->valid_db_instance_modifications_message = $s['valid_db_instance_modifications_message'] ?? null;
  }
}

class DomainMembership {
  public string $domain;
  public string $fqdn;
  public string $iam_role_name;
  public string $status;

  public function __construct(shape(
    ?'domain' => string,
    ?'fqdn' => string,
    ?'iam_role_name' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->fqdn = $s['fqdn'] ?? '';
    $this->iam_role_name = $s['iam_role_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DomainMembershipList = vec<DomainMembership>;

class DomainNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Double = float;

type DoubleOptional = float;

class DoubleRange {
  public ?Double $from;
  public ?Double $to;

  public function __construct(shape(
    ?'from' => ?Double,
    ?'to' => ?Double,
  ) $s = shape()) {
    $this->from = $s['from'] ?? 0.0;
    $this->to = $s['to'] ?? 0.0;
  }
}

type DoubleRangeList = vec<DoubleRange>;

class DownloadDBLogFilePortionDetails {
  public bool $additional_data_pending;
  public string $log_file_data;
  public string $marker;

  public function __construct(shape(
    ?'additional_data_pending' => bool,
    ?'log_file_data' => string,
    ?'marker' => string,
  ) $s = shape()) {
    $this->additional_data_pending = $s['additional_data_pending'] ?? false;
    $this->log_file_data = $s['log_file_data'] ?? '';
    $this->marker = $s['marker'] ?? '';
  }
}

class DownloadDBLogFilePortionMessage {
  public string $db_instance_identifier;
  public string $log_file_name;
  public string $marker;
  public int $number_of_lines;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'log_file_name' => string,
    ?'marker' => string,
    ?'number_of_lines' => int,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->log_file_name = $s['log_file_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->number_of_lines = $s['number_of_lines'] ?? 0;
  }
}

class EC2SecurityGroup {
  public string $ec_2_security_group_id;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $status;

  public function __construct(shape(
    ?'ec_2_security_group_id' => string,
    ?'ec_2_security_group_name' => string,
    ?'ec_2_security_group_owner_id' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->ec_2_security_group_id = $s['ec_2_security_group_id'] ?? '';
    $this->ec_2_security_group_name = $s['ec_2_security_group_name'] ?? '';
    $this->ec_2_security_group_owner_id = $s['ec_2_security_group_owner_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type EC2SecurityGroupList = vec<EC2SecurityGroup>;

class Endpoint {
  public string $address;
  public string $hosted_zone_id;
  public int $port;

  public function __construct(shape(
    ?'address' => string,
    ?'hosted_zone_id' => string,
    ?'port' => int,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

class EngineDefaults {
  public string $db_parameter_group_family;
  public string $marker;
  public ?ParametersList $parameters;

  public function __construct(shape(
    ?'db_parameter_group_family' => string,
    ?'marker' => string,
    ?'parameters' => ?ParametersList,
  ) $s = shape()) {
    $this->db_parameter_group_family = $s['db_parameter_group_family'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

type EngineFamily = string;

type EngineModeList = vec<String>;

class Event {
  public ?TStamp $date;
  public ?EventCategoriesList $event_categories;
  public string $message;
  public string $source_arn;
  public string $source_identifier;
  public ?SourceType $source_type;

  public function __construct(shape(
    ?'date' => ?TStamp,
    ?'event_categories' => ?EventCategoriesList,
    ?'message' => string,
    ?'source_arn' => string,
    ?'source_identifier' => string,
    ?'source_type' => ?SourceType,
  ) $s = shape()) {
    $this->date = $s['date'] ?? 0;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->message = $s['message'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
  }
}

type EventCategoriesList = vec<String>;

class EventCategoriesMap {
  public ?EventCategoriesList $event_categories;
  public string $source_type;

  public function __construct(shape(
    ?'event_categories' => ?EventCategoriesList,
    ?'source_type' => string,
  ) $s = shape()) {
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->source_type = $s['source_type'] ?? '';
  }
}

type EventCategoriesMapList = vec<EventCategoriesMap>;

class EventCategoriesMessage {
  public ?EventCategoriesMapList $event_categories_map_list;

  public function __construct(shape(
    ?'event_categories_map_list' => ?EventCategoriesMapList,
  ) $s = shape()) {
    $this->event_categories_map_list = $s['event_categories_map_list'] ?? vec[];
  }
}

type EventList = vec<Event>;

class EventSubscription {
  public string $cust_subscription_id;
  public string $customer_aws_id;
  public bool $enabled;
  public ?EventCategoriesList $event_categories_list;
  public string $event_subscription_arn;
  public string $sns_topic_arn;
  public ?SourceIdsList $source_ids_list;
  public string $source_type;
  public string $status;
  public string $subscription_creation_time;

  public function __construct(shape(
    ?'cust_subscription_id' => string,
    ?'customer_aws_id' => string,
    ?'enabled' => bool,
    ?'event_categories_list' => ?EventCategoriesList,
    ?'event_subscription_arn' => string,
    ?'sns_topic_arn' => string,
    ?'source_ids_list' => ?SourceIdsList,
    ?'source_type' => string,
    ?'status' => string,
    ?'subscription_creation_time' => string,
  ) $s = shape()) {
    $this->cust_subscription_id = $s['cust_subscription_id'] ?? '';
    $this->customer_aws_id = $s['customer_aws_id'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->event_categories_list = $s['event_categories_list'] ?? vec[];
    $this->event_subscription_arn = $s['event_subscription_arn'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
    $this->source_ids_list = $s['source_ids_list'] ?? vec[];
    $this->source_type = $s['source_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->subscription_creation_time = $s['subscription_creation_time'] ?? '';
  }
}

class EventSubscriptionQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EventSubscriptionsList = vec<EventSubscription>;

class EventSubscriptionsMessage {
  public ?EventSubscriptionsList $event_subscriptions_list;
  public string $marker;

  public function __construct(shape(
    ?'event_subscriptions_list' => ?EventSubscriptionsList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->event_subscriptions_list = $s['event_subscriptions_list'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class EventsMessage {
  public ?EventList $events;
  public string $marker;

  public function __construct(shape(
    ?'events' => ?EventList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class ExportTask {
  public ?StringList $export_only;
  public string $export_task_identifier;
  public string $failure_cause;
  public string $iam_role_arn;
  public string $kms_key_id;
  public int $percent_progress;
  public string $s_3_bucket;
  public string $s_3_prefix;
  public ?TStamp $snapshot_time;
  public string $source_arn;
  public string $status;
  public ?TStamp $task_end_time;
  public ?TStamp $task_start_time;
  public int $total_extracted_data_in_gb;
  public string $warning_message;

  public function __construct(shape(
    ?'export_only' => ?StringList,
    ?'export_task_identifier' => string,
    ?'failure_cause' => string,
    ?'iam_role_arn' => string,
    ?'kms_key_id' => string,
    ?'percent_progress' => int,
    ?'s_3_bucket' => string,
    ?'s_3_prefix' => string,
    ?'snapshot_time' => ?TStamp,
    ?'source_arn' => string,
    ?'status' => string,
    ?'task_end_time' => ?TStamp,
    ?'task_start_time' => ?TStamp,
    ?'total_extracted_data_in_gb' => int,
    ?'warning_message' => string,
  ) $s = shape()) {
    $this->export_only = $s['export_only'] ?? vec[];
    $this->export_task_identifier = $s['export_task_identifier'] ?? '';
    $this->failure_cause = $s['failure_cause'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->percent_progress = $s['percent_progress'] ?? 0;
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
    $this->snapshot_time = $s['snapshot_time'] ?? 0;
    $this->source_arn = $s['source_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->task_end_time = $s['task_end_time'] ?? 0;
    $this->task_start_time = $s['task_start_time'] ?? 0;
    $this->total_extracted_data_in_gb = $s['total_extracted_data_in_gb'] ?? 0;
    $this->warning_message = $s['warning_message'] ?? '';
  }
}

class ExportTaskAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ExportTaskNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ExportTasksList = vec<ExportTask>;

class ExportTasksMessage {
  public ?ExportTasksList $export_tasks;
  public string $marker;

  public function __construct(shape(
    ?'export_tasks' => ?ExportTasksList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->export_tasks = $s['export_tasks'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class FailoverDBClusterMessage {
  public string $db_cluster_identifier;
  public string $target_db_instance_identifier;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
    ?'target_db_instance_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->target_db_instance_identifier = $s['target_db_instance_identifier'] ?? '';
  }
}

class FailoverDBClusterResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

type FeatureNameList = vec<String>;

class Filter {
  public string $name;
  public ?FilterValueList $values;

  public function __construct(shape(
    ?'name' => string,
    ?'values' => ?FilterValueList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type FilterList = vec<Filter>;

type FilterValueList = vec<String>;

class GlobalCluster {
  public string $database_name;
  public ?BooleanOptional $deletion_protection;
  public string $engine;
  public string $engine_version;
  public string $global_cluster_arn;
  public string $global_cluster_identifier;
  public ?GlobalClusterMemberList $global_cluster_members;
  public string $global_cluster_resource_id;
  public string $status;
  public ?BooleanOptional $storage_encrypted;

  public function __construct(shape(
    ?'database_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'global_cluster_arn' => string,
    ?'global_cluster_identifier' => string,
    ?'global_cluster_members' => ?GlobalClusterMemberList,
    ?'global_cluster_resource_id' => string,
    ?'status' => string,
    ?'storage_encrypted' => ?BooleanOptional,
  ) $s = shape()) {
    $this->database_name = $s['database_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->global_cluster_arn = $s['global_cluster_arn'] ?? '';
    $this->global_cluster_identifier = $s['global_cluster_identifier'] ?? '';
    $this->global_cluster_members = $s['global_cluster_members'] ?? vec[];
    $this->global_cluster_resource_id = $s['global_cluster_resource_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
  }
}

class GlobalClusterAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type GlobalClusterList = vec<GlobalCluster>;

class GlobalClusterMember {
  public string $db_cluster_arn;
  public bool $is_writer;
  public ?ReadersArnList $readers;

  public function __construct(shape(
    ?'db_cluster_arn' => string,
    ?'is_writer' => bool,
    ?'readers' => ?ReadersArnList,
  ) $s = shape()) {
    $this->db_cluster_arn = $s['db_cluster_arn'] ?? '';
    $this->is_writer = $s['is_writer'] ?? false;
    $this->readers = $s['readers'] ?? vec[];
  }
}

type GlobalClusterMemberList = vec<GlobalClusterMember>;

class GlobalClusterNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GlobalClusterQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GlobalClustersMessage {
  public ?GlobalClusterList $global_clusters;
  public string $marker;

  public function __construct(shape(
    ?'global_clusters' => ?GlobalClusterList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->global_clusters = $s['global_clusters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

type IAMAuthMode = string;

class IPRange {
  public string $cidrip;
  public string $status;

  public function __construct(shape(
    ?'cidrip' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->cidrip = $s['cidrip'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type IPRangeList = vec<IPRange>;

class IamRoleMissingPermissionsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IamRoleNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ImportInstallationMediaMessage {
  public string $custom_availability_zone_id;
  public string $engine;
  public string $engine_installation_media_path;
  public string $engine_version;
  public string $os_installation_media_path;

  public function __construct(shape(
    ?'custom_availability_zone_id' => string,
    ?'engine' => string,
    ?'engine_installation_media_path' => string,
    ?'engine_version' => string,
    ?'os_installation_media_path' => string,
  ) $s = shape()) {
    $this->custom_availability_zone_id = $s['custom_availability_zone_id'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_installation_media_path = $s['engine_installation_media_path'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->os_installation_media_path = $s['os_installation_media_path'] ?? '';
  }
}

class InstallationMedia {
  public string $custom_availability_zone_id;
  public string $engine;
  public string $engine_installation_media_path;
  public string $engine_version;
  public ?InstallationMediaFailureCause $failure_cause;
  public string $installation_media_id;
  public string $os_installation_media_path;
  public string $status;

  public function __construct(shape(
    ?'custom_availability_zone_id' => string,
    ?'engine' => string,
    ?'engine_installation_media_path' => string,
    ?'engine_version' => string,
    ?'failure_cause' => ?InstallationMediaFailureCause,
    ?'installation_media_id' => string,
    ?'os_installation_media_path' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->custom_availability_zone_id = $s['custom_availability_zone_id'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_installation_media_path = $s['engine_installation_media_path'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->failure_cause = $s['failure_cause'] ?? null;
    $this->installation_media_id = $s['installation_media_id'] ?? '';
    $this->os_installation_media_path = $s['os_installation_media_path'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class InstallationMediaAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InstallationMediaFailureCause {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type InstallationMediaList = vec<InstallationMedia>;

class InstallationMediaMessage {
  public ?InstallationMediaList $installation_media;
  public string $marker;

  public function __construct(shape(
    ?'installation_media' => ?InstallationMediaList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->installation_media = $s['installation_media'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class InstallationMediaNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InstanceQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientDBClusterCapacityFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientDBInstanceCapacityFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientStorageClusterCapacityFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Integer = int;

type IntegerOptional = int;

class InvalidDBClusterCapacityFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBClusterEndpointStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBClusterSnapshotStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBClusterStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBInstanceAutomatedBackupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBInstanceStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBParameterGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBProxyStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBSecurityGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBSnapshotStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBSubnetGroupFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBSubnetGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDBSubnetStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidEventSubscriptionStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidExportOnlyFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidExportSourceStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidExportTaskStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidGlobalClusterStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidOptionGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRestoreFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidS3BucketFault {

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

class KMSKeyNotAccessibleFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type KeyList = vec<String>;

class ListTagsForResourceMessage {
  public ?FilterList $filters;
  public string $resource_name;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'resource_name' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

type LogTypeList = vec<String>;

type Long = int;

type LongOptional = int;

type MaxRecords = int;

class MinimumEngineVersionPerAllowedValue {
  public string $allowed_value;
  public string $minimum_engine_version;

  public function __construct(shape(
    ?'allowed_value' => string,
    ?'minimum_engine_version' => string,
  ) $s = shape()) {
    $this->allowed_value = $s['allowed_value'] ?? '';
    $this->minimum_engine_version = $s['minimum_engine_version'] ?? '';
  }
}

type MinimumEngineVersionPerAllowedValueList = vec<MinimumEngineVersionPerAllowedValue>;

class ModifyCertificatesMessage {
  public string $certificate_identifier;
  public ?BooleanOptional $remove_customer_override;

  public function __construct(shape(
    ?'certificate_identifier' => string,
    ?'remove_customer_override' => ?BooleanOptional,
  ) $s = shape()) {
    $this->certificate_identifier = $s['certificate_identifier'] ?? '';
    $this->remove_customer_override = $s['remove_customer_override'] ?? false;
  }
}

class ModifyCertificatesResult {
  public ?Certificate $certificate;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? null;
  }
}

class ModifyCurrentDBClusterCapacityMessage {
  public ?IntegerOptional $capacity;
  public string $db_cluster_identifier;
  public ?IntegerOptional $seconds_before_timeout;
  public string $timeout_action;

  public function __construct(shape(
    ?'capacity' => ?IntegerOptional,
    ?'db_cluster_identifier' => string,
    ?'seconds_before_timeout' => ?IntegerOptional,
    ?'timeout_action' => string,
  ) $s = shape()) {
    $this->capacity = $s['capacity'] ?? 0;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->seconds_before_timeout = $s['seconds_before_timeout'] ?? 0;
    $this->timeout_action = $s['timeout_action'] ?? '';
  }
}

class ModifyDBClusterEndpointMessage {
  public string $db_cluster_endpoint_identifier;
  public string $endpoint_type;
  public ?StringList $excluded_members;
  public ?StringList $static_members;

  public function __construct(shape(
    ?'db_cluster_endpoint_identifier' => string,
    ?'endpoint_type' => string,
    ?'excluded_members' => ?StringList,
    ?'static_members' => ?StringList,
  ) $s = shape()) {
    $this->db_cluster_endpoint_identifier = $s['db_cluster_endpoint_identifier'] ?? '';
    $this->endpoint_type = $s['endpoint_type'] ?? '';
    $this->excluded_members = $s['excluded_members'] ?? vec[];
    $this->static_members = $s['static_members'] ?? vec[];
  }
}

class ModifyDBClusterMessage {
  public bool $allow_major_version_upgrade;
  public bool $apply_immediately;
  public ?LongOptional $backtrack_window;
  public ?IntegerOptional $backup_retention_period;
  public ?CloudwatchLogsExportConfiguration $cloudwatch_logs_export_configuration;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_instance_parameter_group_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?BooleanOptional $enable_http_endpoint;
  public ?BooleanOptional $enable_iam_database_authentication;
  public string $engine_version;
  public string $master_user_password;
  public string $new_db_cluster_identifier;
  public string $option_group_name;
  public ?IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ?ScalingConfiguration $scaling_configuration;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'allow_major_version_upgrade' => bool,
    ?'apply_immediately' => bool,
    ?'backtrack_window' => ?LongOptional,
    ?'backup_retention_period' => ?IntegerOptional,
    ?'cloudwatch_logs_export_configuration' => ?CloudwatchLogsExportConfiguration,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_cluster_identifier' => string,
    ?'db_cluster_parameter_group_name' => string,
    ?'db_instance_parameter_group_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_http_endpoint' => ?BooleanOptional,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'engine_version' => string,
    ?'master_user_password' => string,
    ?'new_db_cluster_identifier' => string,
    ?'option_group_name' => string,
    ?'port' => ?IntegerOptional,
    ?'preferred_backup_window' => string,
    ?'preferred_maintenance_window' => string,
    ?'scaling_configuration' => ?ScalingConfiguration,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->allow_major_version_upgrade = $s['allow_major_version_upgrade'] ?? false;
    $this->apply_immediately = $s['apply_immediately'] ?? false;
    $this->backtrack_window = $s['backtrack_window'] ?? 0;
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->cloudwatch_logs_export_configuration = $s['cloudwatch_logs_export_configuration'] ?? null;
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->db_instance_parameter_group_name = $s['db_instance_parameter_group_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_http_endpoint = $s['enable_http_endpoint'] ?? false;
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->new_db_cluster_identifier = $s['new_db_cluster_identifier'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->scaling_configuration = $s['scaling_configuration'] ?? null;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class ModifyDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
  public ?ParametersList $parameters;

  public function __construct(shape(
    ?'db_cluster_parameter_group_name' => string,
    ?'parameters' => ?ParametersList,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

class ModifyDBClusterResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class ModifyDBClusterSnapshotAttributeMessage {
  public string $attribute_name;
  public string $db_cluster_snapshot_identifier;
  public ?AttributeValueList $values_to_add;
  public ?AttributeValueList $values_to_remove;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'db_cluster_snapshot_identifier' => string,
    ?'values_to_add' => ?AttributeValueList,
    ?'values_to_remove' => ?AttributeValueList,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->db_cluster_snapshot_identifier = $s['db_cluster_snapshot_identifier'] ?? '';
    $this->values_to_add = $s['values_to_add'] ?? vec[];
    $this->values_to_remove = $s['values_to_remove'] ?? vec[];
  }
}

class ModifyDBClusterSnapshotAttributeResult {
  public ?DBClusterSnapshotAttributesResult $db_cluster_snapshot_attributes_result;

  public function __construct(shape(
    ?'db_cluster_snapshot_attributes_result' => ?DBClusterSnapshotAttributesResult,
  ) $s = shape()) {
    $this->db_cluster_snapshot_attributes_result = $s['db_cluster_snapshot_attributes_result'] ?? null;
  }
}

class ModifyDBInstanceMessage {
  public ?IntegerOptional $allocated_storage;
  public bool $allow_major_version_upgrade;
  public bool $apply_immediately;
  public ?BooleanOptional $auto_minor_version_upgrade;
  public ?IntegerOptional $backup_retention_period;
  public string $ca_certificate_identifier;
  public ?BooleanOptional $certificate_rotation_restart;
  public ?CloudwatchLogsExportConfiguration $cloudwatch_logs_export_configuration;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_parameter_group_name;
  public ?IntegerOptional $db_port_number;
  public ?DBSecurityGroupNameList $db_security_groups;
  public string $db_subnet_group_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?BooleanOptional $enable_iam_database_authentication;
  public ?BooleanOptional $enable_performance_insights;
  public string $engine_version;
  public ?IntegerOptional $iops;
  public string $license_model;
  public string $master_user_password;
  public ?IntegerOptional $max_allocated_storage;
  public ?IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public ?BooleanOptional $multi_az;
  public string $new_db_instance_identifier;
  public string $option_group_name;
  public string $performance_insights_kms_key_id;
  public ?IntegerOptional $performance_insights_retention_period;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ?ProcessorFeatureList $processor_features;
  public ?IntegerOptional $promotion_tier;
  public ?BooleanOptional $publicly_accessible;
  public string $storage_type;
  public string $tde_credential_arn;
  public string $tde_credential_password;
  public ?BooleanOptional $use_default_processor_features;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'allocated_storage' => ?IntegerOptional,
    ?'allow_major_version_upgrade' => bool,
    ?'apply_immediately' => bool,
    ?'auto_minor_version_upgrade' => ?BooleanOptional,
    ?'backup_retention_period' => ?IntegerOptional,
    ?'ca_certificate_identifier' => string,
    ?'certificate_rotation_restart' => ?BooleanOptional,
    ?'cloudwatch_logs_export_configuration' => ?CloudwatchLogsExportConfiguration,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_instance_class' => string,
    ?'db_instance_identifier' => string,
    ?'db_parameter_group_name' => string,
    ?'db_port_number' => ?IntegerOptional,
    ?'db_security_groups' => ?DBSecurityGroupNameList,
    ?'db_subnet_group_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'enable_performance_insights' => ?BooleanOptional,
    ?'engine_version' => string,
    ?'iops' => ?IntegerOptional,
    ?'license_model' => string,
    ?'master_user_password' => string,
    ?'max_allocated_storage' => ?IntegerOptional,
    ?'monitoring_interval' => ?IntegerOptional,
    ?'monitoring_role_arn' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'new_db_instance_identifier' => string,
    ?'option_group_name' => string,
    ?'performance_insights_kms_key_id' => string,
    ?'performance_insights_retention_period' => ?IntegerOptional,
    ?'preferred_backup_window' => string,
    ?'preferred_maintenance_window' => string,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'promotion_tier' => ?IntegerOptional,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'storage_type' => string,
    ?'tde_credential_arn' => string,
    ?'tde_credential_password' => string,
    ?'use_default_processor_features' => ?BooleanOptional,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->allow_major_version_upgrade = $s['allow_major_version_upgrade'] ?? false;
    $this->apply_immediately = $s['apply_immediately'] ?? false;
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->ca_certificate_identifier = $s['ca_certificate_identifier'] ?? '';
    $this->certificate_rotation_restart = $s['certificate_rotation_restart'] ?? false;
    $this->cloudwatch_logs_export_configuration = $s['cloudwatch_logs_export_configuration'] ?? null;
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->db_port_number = $s['db_port_number'] ?? 0;
    $this->db_security_groups = $s['db_security_groups'] ?? vec[];
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->enable_performance_insights = $s['enable_performance_insights'] ?? false;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->iops = $s['iops'] ?? 0;
    $this->license_model = $s['license_model'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->max_allocated_storage = $s['max_allocated_storage'] ?? 0;
    $this->monitoring_interval = $s['monitoring_interval'] ?? 0;
    $this->monitoring_role_arn = $s['monitoring_role_arn'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->new_db_instance_identifier = $s['new_db_instance_identifier'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->performance_insights_kms_key_id = $s['performance_insights_kms_key_id'] ?? '';
    $this->performance_insights_retention_period = $s['performance_insights_retention_period'] ?? 0;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->promotion_tier = $s['promotion_tier'] ?? 0;
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tde_credential_arn = $s['tde_credential_arn'] ?? '';
    $this->tde_credential_password = $s['tde_credential_password'] ?? '';
    $this->use_default_processor_features = $s['use_default_processor_features'] ?? false;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class ModifyDBInstanceResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class ModifyDBParameterGroupMessage {
  public string $db_parameter_group_name;
  public ?ParametersList $parameters;

  public function __construct(shape(
    ?'db_parameter_group_name' => string,
    ?'parameters' => ?ParametersList,
  ) $s = shape()) {
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

class ModifyDBProxyRequest {
  public ?UserAuthConfigList $auth;
  public string $db_proxy_name;
  public ?BooleanOptional $debug_logging;
  public ?IntegerOptional $idle_client_timeout;
  public string $new_db_proxy_name;
  public ?BooleanOptional $require_tls;
  public string $role_arn;
  public ?StringList $security_groups;

  public function __construct(shape(
    ?'auth' => ?UserAuthConfigList,
    ?'db_proxy_name' => string,
    ?'debug_logging' => ?BooleanOptional,
    ?'idle_client_timeout' => ?IntegerOptional,
    ?'new_db_proxy_name' => string,
    ?'require_tls' => ?BooleanOptional,
    ?'role_arn' => string,
    ?'security_groups' => ?StringList,
  ) $s = shape()) {
    $this->auth = $s['auth'] ?? vec[];
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->debug_logging = $s['debug_logging'] ?? false;
    $this->idle_client_timeout = $s['idle_client_timeout'] ?? 0;
    $this->new_db_proxy_name = $s['new_db_proxy_name'] ?? '';
    $this->require_tls = $s['require_tls'] ?? false;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class ModifyDBProxyResponse {
  public ?DBProxy $db_proxy;

  public function __construct(shape(
    ?'db_proxy' => ?DBProxy,
  ) $s = shape()) {
    $this->db_proxy = $s['db_proxy'] ?? null;
  }
}

class ModifyDBProxyTargetGroupRequest {
  public ?ConnectionPoolConfiguration $connection_pool_config;
  public string $db_proxy_name;
  public string $new_name;
  public string $target_group_name;

  public function __construct(shape(
    ?'connection_pool_config' => ?ConnectionPoolConfiguration,
    ?'db_proxy_name' => string,
    ?'new_name' => string,
    ?'target_group_name' => string,
  ) $s = shape()) {
    $this->connection_pool_config = $s['connection_pool_config'] ?? null;
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->new_name = $s['new_name'] ?? '';
    $this->target_group_name = $s['target_group_name'] ?? '';
  }
}

class ModifyDBProxyTargetGroupResponse {
  public ?DBProxyTargetGroup $db_proxy_target_group;

  public function __construct(shape(
    ?'db_proxy_target_group' => ?DBProxyTargetGroup,
  ) $s = shape()) {
    $this->db_proxy_target_group = $s['db_proxy_target_group'] ?? null;
  }
}

class ModifyDBSnapshotAttributeMessage {
  public string $attribute_name;
  public string $db_snapshot_identifier;
  public ?AttributeValueList $values_to_add;
  public ?AttributeValueList $values_to_remove;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'db_snapshot_identifier' => string,
    ?'values_to_add' => ?AttributeValueList,
    ?'values_to_remove' => ?AttributeValueList,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
    $this->values_to_add = $s['values_to_add'] ?? vec[];
    $this->values_to_remove = $s['values_to_remove'] ?? vec[];
  }
}

class ModifyDBSnapshotAttributeResult {
  public ?DBSnapshotAttributesResult $db_snapshot_attributes_result;

  public function __construct(shape(
    ?'db_snapshot_attributes_result' => ?DBSnapshotAttributesResult,
  ) $s = shape()) {
    $this->db_snapshot_attributes_result = $s['db_snapshot_attributes_result'] ?? null;
  }
}

class ModifyDBSnapshotMessage {
  public string $db_snapshot_identifier;
  public string $engine_version;
  public string $option_group_name;

  public function __construct(shape(
    ?'db_snapshot_identifier' => string,
    ?'engine_version' => string,
    ?'option_group_name' => string,
  ) $s = shape()) {
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
  }
}

class ModifyDBSnapshotResult {
  public ?DBSnapshot $db_snapshot;

  public function __construct(shape(
    ?'db_snapshot' => ?DBSnapshot,
  ) $s = shape()) {
    $this->db_snapshot = $s['db_snapshot'] ?? null;
  }
}

class ModifyDBSubnetGroupMessage {
  public string $db_subnet_group_description;
  public string $db_subnet_group_name;
  public ?SubnetIdentifierList $subnet_ids;

  public function __construct(shape(
    ?'db_subnet_group_description' => string,
    ?'db_subnet_group_name' => string,
    ?'subnet_ids' => ?SubnetIdentifierList,
  ) $s = shape()) {
    $this->db_subnet_group_description = $s['db_subnet_group_description'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class ModifyDBSubnetGroupResult {
  public ?DBSubnetGroup $db_subnet_group;

  public function __construct(shape(
    ?'db_subnet_group' => ?DBSubnetGroup,
  ) $s = shape()) {
    $this->db_subnet_group = $s['db_subnet_group'] ?? null;
  }
}

class ModifyEventSubscriptionMessage {
  public ?BooleanOptional $enabled;
  public ?EventCategoriesList $event_categories;
  public string $sns_topic_arn;
  public string $source_type;
  public string $subscription_name;

  public function __construct(shape(
    ?'enabled' => ?BooleanOptional,
    ?'event_categories' => ?EventCategoriesList,
    ?'sns_topic_arn' => string,
    ?'source_type' => string,
    ?'subscription_name' => string,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
    $this->subscription_name = $s['subscription_name'] ?? '';
  }
}

class ModifyEventSubscriptionResult {
  public ?EventSubscription $event_subscription;

  public function __construct(shape(
    ?'event_subscription' => ?EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $s['event_subscription'] ?? null;
  }
}

class ModifyGlobalClusterMessage {
  public ?BooleanOptional $deletion_protection;
  public string $global_cluster_identifier;
  public string $new_global_cluster_identifier;

  public function __construct(shape(
    ?'deletion_protection' => ?BooleanOptional,
    ?'global_cluster_identifier' => string,
    ?'new_global_cluster_identifier' => string,
  ) $s = shape()) {
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->global_cluster_identifier = $s['global_cluster_identifier'] ?? '';
    $this->new_global_cluster_identifier = $s['new_global_cluster_identifier'] ?? '';
  }
}

class ModifyGlobalClusterResult {
  public ?GlobalCluster $global_cluster;

  public function __construct(shape(
    ?'global_cluster' => ?GlobalCluster,
  ) $s = shape()) {
    $this->global_cluster = $s['global_cluster'] ?? null;
  }
}

class ModifyOptionGroupMessage {
  public bool $apply_immediately;
  public string $option_group_name;
  public ?OptionConfigurationList $options_to_include;
  public ?OptionNamesList $options_to_remove;

  public function __construct(shape(
    ?'apply_immediately' => bool,
    ?'option_group_name' => string,
    ?'options_to_include' => ?OptionConfigurationList,
    ?'options_to_remove' => ?OptionNamesList,
  ) $s = shape()) {
    $this->apply_immediately = $s['apply_immediately'] ?? false;
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->options_to_include = $s['options_to_include'] ?? vec[];
    $this->options_to_remove = $s['options_to_remove'] ?? vec[];
  }
}

class ModifyOptionGroupResult {
  public ?OptionGroup $option_group;

  public function __construct(shape(
    ?'option_group' => ?OptionGroup,
  ) $s = shape()) {
    $this->option_group = $s['option_group'] ?? null;
  }
}

class Option {
  public ?DBSecurityGroupMembershipList $db_security_group_memberships;
  public string $option_description;
  public string $option_name;
  public ?OptionSettingConfigurationList $option_settings;
  public string $option_version;
  public bool $permanent;
  public bool $persistent;
  public ?IntegerOptional $port;
  public ?VpcSecurityGroupMembershipList $vpc_security_group_memberships;

  public function __construct(shape(
    ?'db_security_group_memberships' => ?DBSecurityGroupMembershipList,
    ?'option_description' => string,
    ?'option_name' => string,
    ?'option_settings' => ?OptionSettingConfigurationList,
    ?'option_version' => string,
    ?'permanent' => bool,
    ?'persistent' => bool,
    ?'port' => ?IntegerOptional,
    ?'vpc_security_group_memberships' => ?VpcSecurityGroupMembershipList,
  ) $s = shape()) {
    $this->db_security_group_memberships = $s['db_security_group_memberships'] ?? vec[];
    $this->option_description = $s['option_description'] ?? '';
    $this->option_name = $s['option_name'] ?? '';
    $this->option_settings = $s['option_settings'] ?? vec[];
    $this->option_version = $s['option_version'] ?? '';
    $this->permanent = $s['permanent'] ?? false;
    $this->persistent = $s['persistent'] ?? false;
    $this->port = $s['port'] ?? 0;
    $this->vpc_security_group_memberships = $s['vpc_security_group_memberships'] ?? vec[];
  }
}

class OptionConfiguration {
  public ?DBSecurityGroupNameList $db_security_group_memberships;
  public string $option_name;
  public ?OptionSettingsList $option_settings;
  public string $option_version;
  public ?IntegerOptional $port;
  public ?VpcSecurityGroupIdList $vpc_security_group_memberships;

  public function __construct(shape(
    ?'db_security_group_memberships' => ?DBSecurityGroupNameList,
    ?'option_name' => string,
    ?'option_settings' => ?OptionSettingsList,
    ?'option_version' => string,
    ?'port' => ?IntegerOptional,
    ?'vpc_security_group_memberships' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->db_security_group_memberships = $s['db_security_group_memberships'] ?? vec[];
    $this->option_name = $s['option_name'] ?? '';
    $this->option_settings = $s['option_settings'] ?? vec[];
    $this->option_version = $s['option_version'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->vpc_security_group_memberships = $s['vpc_security_group_memberships'] ?? vec[];
  }
}

type OptionConfigurationList = vec<OptionConfiguration>;

class OptionGroup {
  public bool $allows_vpc_and_non_vpc_instance_memberships;
  public string $engine_name;
  public string $major_engine_version;
  public string $option_group_arn;
  public string $option_group_description;
  public string $option_group_name;
  public ?OptionsList $options;
  public string $vpc_id;

  public function __construct(shape(
    ?'allows_vpc_and_non_vpc_instance_memberships' => bool,
    ?'engine_name' => string,
    ?'major_engine_version' => string,
    ?'option_group_arn' => string,
    ?'option_group_description' => string,
    ?'option_group_name' => string,
    ?'options' => ?OptionsList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->allows_vpc_and_non_vpc_instance_memberships = $s['allows_vpc_and_non_vpc_instance_memberships'] ?? false;
    $this->engine_name = $s['engine_name'] ?? '';
    $this->major_engine_version = $s['major_engine_version'] ?? '';
    $this->option_group_arn = $s['option_group_arn'] ?? '';
    $this->option_group_description = $s['option_group_description'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->options = $s['options'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class OptionGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OptionGroupMembership {
  public string $option_group_name;
  public string $status;

  public function __construct(shape(
    ?'option_group_name' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type OptionGroupMembershipList = vec<OptionGroupMembership>;

class OptionGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OptionGroupOption {
  public ?IntegerOptional $default_port;
  public string $description;
  public string $engine_name;
  public string $major_engine_version;
  public string $minimum_required_minor_engine_version;
  public string $name;
  public ?OptionGroupOptionSettingsList $option_group_option_settings;
  public ?OptionGroupOptionVersionsList $option_group_option_versions;
  public ?OptionsConflictsWith $options_conflicts_with;
  public ?OptionsDependedOn $options_depended_on;
  public bool $permanent;
  public bool $persistent;
  public bool $port_required;
  public bool $requires_auto_minor_engine_version_upgrade;
  public ?BooleanOptional $supports_option_version_downgrade;
  public bool $vpc_only;

  public function __construct(shape(
    ?'default_port' => ?IntegerOptional,
    ?'description' => string,
    ?'engine_name' => string,
    ?'major_engine_version' => string,
    ?'minimum_required_minor_engine_version' => string,
    ?'name' => string,
    ?'option_group_option_settings' => ?OptionGroupOptionSettingsList,
    ?'option_group_option_versions' => ?OptionGroupOptionVersionsList,
    ?'options_conflicts_with' => ?OptionsConflictsWith,
    ?'options_depended_on' => ?OptionsDependedOn,
    ?'permanent' => bool,
    ?'persistent' => bool,
    ?'port_required' => bool,
    ?'requires_auto_minor_engine_version_upgrade' => bool,
    ?'supports_option_version_downgrade' => ?BooleanOptional,
    ?'vpc_only' => bool,
  ) $s = shape()) {
    $this->default_port = $s['default_port'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->engine_name = $s['engine_name'] ?? '';
    $this->major_engine_version = $s['major_engine_version'] ?? '';
    $this->minimum_required_minor_engine_version = $s['minimum_required_minor_engine_version'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->option_group_option_settings = $s['option_group_option_settings'] ?? vec[];
    $this->option_group_option_versions = $s['option_group_option_versions'] ?? vec[];
    $this->options_conflicts_with = $s['options_conflicts_with'] ?? vec[];
    $this->options_depended_on = $s['options_depended_on'] ?? vec[];
    $this->permanent = $s['permanent'] ?? false;
    $this->persistent = $s['persistent'] ?? false;
    $this->port_required = $s['port_required'] ?? false;
    $this->requires_auto_minor_engine_version_upgrade = $s['requires_auto_minor_engine_version_upgrade'] ?? false;
    $this->supports_option_version_downgrade = $s['supports_option_version_downgrade'] ?? false;
    $this->vpc_only = $s['vpc_only'] ?? false;
  }
}

class OptionGroupOptionSetting {
  public string $allowed_values;
  public string $apply_type;
  public string $default_value;
  public bool $is_modifiable;
  public bool $is_required;
  public ?MinimumEngineVersionPerAllowedValueList $minimum_engine_version_per_allowed_value;
  public string $setting_description;
  public string $setting_name;

  public function __construct(shape(
    ?'allowed_values' => string,
    ?'apply_type' => string,
    ?'default_value' => string,
    ?'is_modifiable' => bool,
    ?'is_required' => bool,
    ?'minimum_engine_version_per_allowed_value' => ?MinimumEngineVersionPerAllowedValueList,
    ?'setting_description' => string,
    ?'setting_name' => string,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? '';
    $this->apply_type = $s['apply_type'] ?? '';
    $this->default_value = $s['default_value'] ?? '';
    $this->is_modifiable = $s['is_modifiable'] ?? false;
    $this->is_required = $s['is_required'] ?? false;
    $this->minimum_engine_version_per_allowed_value = $s['minimum_engine_version_per_allowed_value'] ?? vec[];
    $this->setting_description = $s['setting_description'] ?? '';
    $this->setting_name = $s['setting_name'] ?? '';
  }
}

type OptionGroupOptionSettingsList = vec<OptionGroupOptionSetting>;

type OptionGroupOptionVersionsList = vec<OptionVersion>;

type OptionGroupOptionsList = vec<OptionGroupOption>;

class OptionGroupOptionsMessage {
  public string $marker;
  public ?OptionGroupOptionsList $option_group_options;

  public function __construct(shape(
    ?'marker' => string,
    ?'option_group_options' => ?OptionGroupOptionsList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->option_group_options = $s['option_group_options'] ?? vec[];
  }
}

class OptionGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OptionGroups {
  public string $marker;
  public ?OptionGroupsList $option_groups_list;

  public function __construct(shape(
    ?'marker' => string,
    ?'option_groups_list' => ?OptionGroupsList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->option_groups_list = $s['option_groups_list'] ?? vec[];
  }
}

type OptionGroupsList = vec<OptionGroup>;

type OptionNamesList = vec<String>;

class OptionSetting {
  public string $allowed_values;
  public string $apply_type;
  public string $data_type;
  public string $default_value;
  public string $description;
  public bool $is_collection;
  public bool $is_modifiable;
  public string $name;
  public string $value;

  public function __construct(shape(
    ?'allowed_values' => string,
    ?'apply_type' => string,
    ?'data_type' => string,
    ?'default_value' => string,
    ?'description' => string,
    ?'is_collection' => bool,
    ?'is_modifiable' => bool,
    ?'name' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? '';
    $this->apply_type = $s['apply_type'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->default_value = $s['default_value'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->is_collection = $s['is_collection'] ?? false;
    $this->is_modifiable = $s['is_modifiable'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type OptionSettingConfigurationList = vec<OptionSetting>;

type OptionSettingsList = vec<OptionSetting>;

class OptionVersion {
  public bool $is_default;
  public string $version;

  public function __construct(shape(
    ?'is_default' => bool,
    ?'version' => string,
  ) $s = shape()) {
    $this->is_default = $s['is_default'] ?? false;
    $this->version = $s['version'] ?? '';
  }
}

type OptionsConflictsWith = vec<String>;

type OptionsDependedOn = vec<String>;

type OptionsList = vec<Option>;

class OrderableDBInstanceOption {
  public string $availability_zone_group;
  public ?AvailabilityZoneList $availability_zones;
  public ?AvailableProcessorFeatureList $available_processor_features;
  public string $db_instance_class;
  public string $engine;
  public string $engine_version;
  public string $license_model;
  public ?IntegerOptional $max_iops_per_db_instance;
  public ?DoubleOptional $max_iops_per_gib;
  public ?IntegerOptional $max_storage_size;
  public ?IntegerOptional $min_iops_per_db_instance;
  public ?DoubleOptional $min_iops_per_gib;
  public ?IntegerOptional $min_storage_size;
  public bool $multi_az_capable;
  public bool $read_replica_capable;
  public string $storage_type;
  public ?EngineModeList $supported_engine_modes;
  public bool $supports_enhanced_monitoring;
  public bool $supports_iam_database_authentication;
  public bool $supports_iops;
  public ?BooleanOptional $supports_kerberos_authentication;
  public bool $supports_performance_insights;
  public ?BooleanOptional $supports_storage_autoscaling;
  public bool $supports_storage_encryption;
  public bool $vpc;

  public function __construct(shape(
    ?'availability_zone_group' => string,
    ?'availability_zones' => ?AvailabilityZoneList,
    ?'available_processor_features' => ?AvailableProcessorFeatureList,
    ?'db_instance_class' => string,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'license_model' => string,
    ?'max_iops_per_db_instance' => ?IntegerOptional,
    ?'max_iops_per_gib' => ?DoubleOptional,
    ?'max_storage_size' => ?IntegerOptional,
    ?'min_iops_per_db_instance' => ?IntegerOptional,
    ?'min_iops_per_gib' => ?DoubleOptional,
    ?'min_storage_size' => ?IntegerOptional,
    ?'multi_az_capable' => bool,
    ?'read_replica_capable' => bool,
    ?'storage_type' => string,
    ?'supported_engine_modes' => ?EngineModeList,
    ?'supports_enhanced_monitoring' => bool,
    ?'supports_iam_database_authentication' => bool,
    ?'supports_iops' => bool,
    ?'supports_kerberos_authentication' => ?BooleanOptional,
    ?'supports_performance_insights' => bool,
    ?'supports_storage_autoscaling' => ?BooleanOptional,
    ?'supports_storage_encryption' => bool,
    ?'vpc' => bool,
  ) $s = shape()) {
    $this->availability_zone_group = $s['availability_zone_group'] ?? '';
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->available_processor_features = $s['available_processor_features'] ?? vec[];
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->license_model = $s['license_model'] ?? '';
    $this->max_iops_per_db_instance = $s['max_iops_per_db_instance'] ?? 0;
    $this->max_iops_per_gib = $s['max_iops_per_gib'] ?? 0.0;
    $this->max_storage_size = $s['max_storage_size'] ?? 0;
    $this->min_iops_per_db_instance = $s['min_iops_per_db_instance'] ?? 0;
    $this->min_iops_per_gib = $s['min_iops_per_gib'] ?? 0.0;
    $this->min_storage_size = $s['min_storage_size'] ?? 0;
    $this->multi_az_capable = $s['multi_az_capable'] ?? false;
    $this->read_replica_capable = $s['read_replica_capable'] ?? false;
    $this->storage_type = $s['storage_type'] ?? '';
    $this->supported_engine_modes = $s['supported_engine_modes'] ?? vec[];
    $this->supports_enhanced_monitoring = $s['supports_enhanced_monitoring'] ?? false;
    $this->supports_iam_database_authentication = $s['supports_iam_database_authentication'] ?? false;
    $this->supports_iops = $s['supports_iops'] ?? false;
    $this->supports_kerberos_authentication = $s['supports_kerberos_authentication'] ?? false;
    $this->supports_performance_insights = $s['supports_performance_insights'] ?? false;
    $this->supports_storage_autoscaling = $s['supports_storage_autoscaling'] ?? false;
    $this->supports_storage_encryption = $s['supports_storage_encryption'] ?? false;
    $this->vpc = $s['vpc'] ?? false;
  }
}

type OrderableDBInstanceOptionsList = vec<OrderableDBInstanceOption>;

class OrderableDBInstanceOptionsMessage {
  public string $marker;
  public ?OrderableDBInstanceOptionsList $orderable_db_instance_options;

  public function __construct(shape(
    ?'marker' => string,
    ?'orderable_db_instance_options' => ?OrderableDBInstanceOptionsList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->orderable_db_instance_options = $s['orderable_db_instance_options'] ?? vec[];
  }
}

class Parameter {
  public string $allowed_values;
  public ?ApplyMethod $apply_method;
  public string $apply_type;
  public string $data_type;
  public string $description;
  public bool $is_modifiable;
  public string $minimum_engine_version;
  public string $parameter_name;
  public string $parameter_value;
  public string $source;
  public ?EngineModeList $supported_engine_modes;

  public function __construct(shape(
    ?'allowed_values' => string,
    ?'apply_method' => ?ApplyMethod,
    ?'apply_type' => string,
    ?'data_type' => string,
    ?'description' => string,
    ?'is_modifiable' => bool,
    ?'minimum_engine_version' => string,
    ?'parameter_name' => string,
    ?'parameter_value' => string,
    ?'source' => string,
    ?'supported_engine_modes' => ?EngineModeList,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? '';
    $this->apply_method = $s['apply_method'] ?? '';
    $this->apply_type = $s['apply_type'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->is_modifiable = $s['is_modifiable'] ?? false;
    $this->minimum_engine_version = $s['minimum_engine_version'] ?? '';
    $this->parameter_name = $s['parameter_name'] ?? '';
    $this->parameter_value = $s['parameter_value'] ?? '';
    $this->source = $s['source'] ?? '';
    $this->supported_engine_modes = $s['supported_engine_modes'] ?? vec[];
  }
}

type ParametersList = vec<Parameter>;

class PendingCloudwatchLogsExports {
  public ?LogTypeList $log_types_to_disable;
  public ?LogTypeList $log_types_to_enable;

  public function __construct(shape(
    ?'log_types_to_disable' => ?LogTypeList,
    ?'log_types_to_enable' => ?LogTypeList,
  ) $s = shape()) {
    $this->log_types_to_disable = $s['log_types_to_disable'] ?? vec[];
    $this->log_types_to_enable = $s['log_types_to_enable'] ?? vec[];
  }
}

class PendingMaintenanceAction {
  public string $action;
  public ?TStamp $auto_applied_after_date;
  public ?TStamp $current_apply_date;
  public string $description;
  public ?TStamp $forced_apply_date;
  public string $opt_in_status;

  public function __construct(shape(
    ?'action' => string,
    ?'auto_applied_after_date' => ?TStamp,
    ?'current_apply_date' => ?TStamp,
    ?'description' => string,
    ?'forced_apply_date' => ?TStamp,
    ?'opt_in_status' => string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->auto_applied_after_date = $s['auto_applied_after_date'] ?? 0;
    $this->current_apply_date = $s['current_apply_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->forced_apply_date = $s['forced_apply_date'] ?? 0;
    $this->opt_in_status = $s['opt_in_status'] ?? '';
  }
}

type PendingMaintenanceActionDetails = vec<PendingMaintenanceAction>;

type PendingMaintenanceActions = vec<ResourcePendingMaintenanceActions>;

class PendingMaintenanceActionsMessage {
  public string $marker;
  public ?PendingMaintenanceActions $pending_maintenance_actions;

  public function __construct(shape(
    ?'marker' => string,
    ?'pending_maintenance_actions' => ?PendingMaintenanceActions,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->pending_maintenance_actions = $s['pending_maintenance_actions'] ?? vec[];
  }
}

class PendingModifiedValues {
  public ?IntegerOptional $allocated_storage;
  public ?IntegerOptional $backup_retention_period;
  public string $ca_certificate_identifier;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_subnet_group_name;
  public string $engine_version;
  public ?IntegerOptional $iops;
  public string $license_model;
  public string $master_user_password;
  public ?BooleanOptional $multi_az;
  public ?PendingCloudwatchLogsExports $pending_cloudwatch_logs_exports;
  public ?IntegerOptional $port;
  public ?ProcessorFeatureList $processor_features;
  public string $storage_type;

  public function __construct(shape(
    ?'allocated_storage' => ?IntegerOptional,
    ?'backup_retention_period' => ?IntegerOptional,
    ?'ca_certificate_identifier' => string,
    ?'db_instance_class' => string,
    ?'db_instance_identifier' => string,
    ?'db_subnet_group_name' => string,
    ?'engine_version' => string,
    ?'iops' => ?IntegerOptional,
    ?'license_model' => string,
    ?'master_user_password' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'pending_cloudwatch_logs_exports' => ?PendingCloudwatchLogsExports,
    ?'port' => ?IntegerOptional,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'storage_type' => string,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->ca_certificate_identifier = $s['ca_certificate_identifier'] ?? '';
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->iops = $s['iops'] ?? 0;
    $this->license_model = $s['license_model'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->pending_cloudwatch_logs_exports = $s['pending_cloudwatch_logs_exports'] ?? null;
    $this->port = $s['port'] ?? 0;
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->storage_type = $s['storage_type'] ?? '';
  }
}

class PointInTimeRestoreNotEnabledFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ProcessorFeature {
  public string $name;
  public string $value;

  public function __construct(shape(
    ?'name' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ProcessorFeatureList = vec<ProcessorFeature>;

class PromoteReadReplicaDBClusterMessage {
  public string $db_cluster_identifier;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
  }
}

class PromoteReadReplicaDBClusterResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class PromoteReadReplicaMessage {
  public ?IntegerOptional $backup_retention_period;
  public string $db_instance_identifier;
  public string $preferred_backup_window;

  public function __construct(shape(
    ?'backup_retention_period' => ?IntegerOptional,
    ?'db_instance_identifier' => string,
    ?'preferred_backup_window' => string,
  ) $s = shape()) {
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
  }
}

class PromoteReadReplicaResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class ProvisionedIopsNotAvailableInAZFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PurchaseReservedDBInstancesOfferingMessage {
  public ?IntegerOptional $db_instance_count;
  public string $reserved_db_instance_id;
  public string $reserved_db_instances_offering_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'db_instance_count' => ?IntegerOptional,
    ?'reserved_db_instance_id' => string,
    ?'reserved_db_instances_offering_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->db_instance_count = $s['db_instance_count'] ?? 0;
    $this->reserved_db_instance_id = $s['reserved_db_instance_id'] ?? '';
    $this->reserved_db_instances_offering_id = $s['reserved_db_instances_offering_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class PurchaseReservedDBInstancesOfferingResult {
  public ?ReservedDBInstance $reserved_db_instance;

  public function __construct(shape(
    ?'reserved_db_instance' => ?ReservedDBInstance,
  ) $s = shape()) {
    $this->reserved_db_instance = $s['reserved_db_instance'] ?? null;
  }
}

class Range {
  public int $from;
  public ?IntegerOptional $step;
  public int $to;

  public function __construct(shape(
    ?'from' => int,
    ?'step' => ?IntegerOptional,
    ?'to' => int,
  ) $s = shape()) {
    $this->from = $s['from'] ?? 0;
    $this->step = $s['step'] ?? 0;
    $this->to = $s['to'] ?? 0;
  }
}

type RangeList = vec<Range>;

type ReadReplicaDBClusterIdentifierList = vec<String>;

type ReadReplicaDBInstanceIdentifierList = vec<String>;

type ReadReplicaIdentifierList = vec<String>;

type ReadersArnList = vec<String>;

class RebootDBInstanceMessage {
  public string $db_instance_identifier;
  public ?BooleanOptional $force_failover;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'force_failover' => ?BooleanOptional,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->force_failover = $s['force_failover'] ?? false;
  }
}

class RebootDBInstanceResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class RecurringCharge {
  public ?Double $recurring_charge_amount;
  public string $recurring_charge_frequency;

  public function __construct(shape(
    ?'recurring_charge_amount' => ?Double,
    ?'recurring_charge_frequency' => string,
  ) $s = shape()) {
    $this->recurring_charge_amount = $s['recurring_charge_amount'] ?? 0.0;
    $this->recurring_charge_frequency = $s['recurring_charge_frequency'] ?? '';
  }
}

type RecurringChargeList = vec<RecurringCharge>;

class RegisterDBProxyTargetsRequest {
  public ?StringList $db_cluster_identifiers;
  public ?StringList $db_instance_identifiers;
  public string $db_proxy_name;
  public string $target_group_name;

  public function __construct(shape(
    ?'db_cluster_identifiers' => ?StringList,
    ?'db_instance_identifiers' => ?StringList,
    ?'db_proxy_name' => string,
    ?'target_group_name' => string,
  ) $s = shape()) {
    $this->db_cluster_identifiers = $s['db_cluster_identifiers'] ?? vec[];
    $this->db_instance_identifiers = $s['db_instance_identifiers'] ?? vec[];
    $this->db_proxy_name = $s['db_proxy_name'] ?? '';
    $this->target_group_name = $s['target_group_name'] ?? '';
  }
}

class RegisterDBProxyTargetsResponse {
  public ?TargetList $db_proxy_targets;

  public function __construct(shape(
    ?'db_proxy_targets' => ?TargetList,
  ) $s = shape()) {
    $this->db_proxy_targets = $s['db_proxy_targets'] ?? vec[];
  }
}

class RemoveFromGlobalClusterMessage {
  public string $db_cluster_identifier;
  public string $global_cluster_identifier;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
    ?'global_cluster_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->global_cluster_identifier = $s['global_cluster_identifier'] ?? '';
  }
}

class RemoveFromGlobalClusterResult {
  public ?GlobalCluster $global_cluster;

  public function __construct(shape(
    ?'global_cluster' => ?GlobalCluster,
  ) $s = shape()) {
    $this->global_cluster = $s['global_cluster'] ?? null;
  }
}

class RemoveRoleFromDBClusterMessage {
  public string $db_cluster_identifier;
  public string $feature_name;
  public string $role_arn;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
    ?'feature_name' => string,
    ?'role_arn' => string,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->feature_name = $s['feature_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class RemoveRoleFromDBInstanceMessage {
  public string $db_instance_identifier;
  public string $feature_name;
  public string $role_arn;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'feature_name' => string,
    ?'role_arn' => string,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->feature_name = $s['feature_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class RemoveSourceIdentifierFromSubscriptionMessage {
  public string $source_identifier;
  public string $subscription_name;

  public function __construct(shape(
    ?'source_identifier' => string,
    ?'subscription_name' => string,
  ) $s = shape()) {
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->subscription_name = $s['subscription_name'] ?? '';
  }
}

class RemoveSourceIdentifierFromSubscriptionResult {
  public ?EventSubscription $event_subscription;

  public function __construct(shape(
    ?'event_subscription' => ?EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $s['event_subscription'] ?? null;
  }
}

class RemoveTagsFromResourceMessage {
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

class ReservedDBInstance {
  public string $currency_code;
  public string $db_instance_class;
  public int $db_instance_count;
  public int $duration;
  public ?Double $fixed_price;
  public string $lease_id;
  public bool $multi_az;
  public string $offering_type;
  public string $product_description;
  public ?RecurringChargeList $recurring_charges;
  public string $reserved_db_instance_arn;
  public string $reserved_db_instance_id;
  public string $reserved_db_instances_offering_id;
  public ?TStamp $start_time;
  public string $state;
  public ?Double $usage_price;

  public function __construct(shape(
    ?'currency_code' => string,
    ?'db_instance_class' => string,
    ?'db_instance_count' => int,
    ?'duration' => int,
    ?'fixed_price' => ?Double,
    ?'lease_id' => string,
    ?'multi_az' => bool,
    ?'offering_type' => string,
    ?'product_description' => string,
    ?'recurring_charges' => ?RecurringChargeList,
    ?'reserved_db_instance_arn' => string,
    ?'reserved_db_instance_id' => string,
    ?'reserved_db_instances_offering_id' => string,
    ?'start_time' => ?TStamp,
    ?'state' => string,
    ?'usage_price' => ?Double,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_count = $s['db_instance_count'] ?? 0;
    $this->duration = $s['duration'] ?? 0;
    $this->fixed_price = $s['fixed_price'] ?? 0.0;
    $this->lease_id = $s['lease_id'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->offering_type = $s['offering_type'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->reserved_db_instance_arn = $s['reserved_db_instance_arn'] ?? '';
    $this->reserved_db_instance_id = $s['reserved_db_instance_id'] ?? '';
    $this->reserved_db_instances_offering_id = $s['reserved_db_instances_offering_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->usage_price = $s['usage_price'] ?? 0.0;
  }
}

class ReservedDBInstanceAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReservedDBInstanceList = vec<ReservedDBInstance>;

class ReservedDBInstanceMessage {
  public string $marker;
  public ?ReservedDBInstanceList $reserved_db_instances;

  public function __construct(shape(
    ?'marker' => string,
    ?'reserved_db_instances' => ?ReservedDBInstanceList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->reserved_db_instances = $s['reserved_db_instances'] ?? vec[];
  }
}

class ReservedDBInstanceNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedDBInstanceQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedDBInstancesOffering {
  public string $currency_code;
  public string $db_instance_class;
  public int $duration;
  public ?Double $fixed_price;
  public bool $multi_az;
  public string $offering_type;
  public string $product_description;
  public ?RecurringChargeList $recurring_charges;
  public string $reserved_db_instances_offering_id;
  public ?Double $usage_price;

  public function __construct(shape(
    ?'currency_code' => string,
    ?'db_instance_class' => string,
    ?'duration' => int,
    ?'fixed_price' => ?Double,
    ?'multi_az' => bool,
    ?'offering_type' => string,
    ?'product_description' => string,
    ?'recurring_charges' => ?RecurringChargeList,
    ?'reserved_db_instances_offering_id' => string,
    ?'usage_price' => ?Double,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->fixed_price = $s['fixed_price'] ?? 0.0;
    $this->multi_az = $s['multi_az'] ?? false;
    $this->offering_type = $s['offering_type'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->reserved_db_instances_offering_id = $s['reserved_db_instances_offering_id'] ?? '';
    $this->usage_price = $s['usage_price'] ?? 0.0;
  }
}

type ReservedDBInstancesOfferingList = vec<ReservedDBInstancesOffering>;

class ReservedDBInstancesOfferingMessage {
  public string $marker;
  public ?ReservedDBInstancesOfferingList $reserved_db_instances_offerings;

  public function __construct(shape(
    ?'marker' => string,
    ?'reserved_db_instances_offerings' => ?ReservedDBInstancesOfferingList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->reserved_db_instances_offerings = $s['reserved_db_instances_offerings'] ?? vec[];
  }
}

class ReservedDBInstancesOfferingNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResetDBClusterParameterGroupMessage {
  public string $db_cluster_parameter_group_name;
  public ?ParametersList $parameters;
  public bool $reset_all_parameters;

  public function __construct(shape(
    ?'db_cluster_parameter_group_name' => string,
    ?'parameters' => ?ParametersList,
    ?'reset_all_parameters' => bool,
  ) $s = shape()) {
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
    $this->reset_all_parameters = $s['reset_all_parameters'] ?? false;
  }
}

class ResetDBParameterGroupMessage {
  public string $db_parameter_group_name;
  public ?ParametersList $parameters;
  public bool $reset_all_parameters;

  public function __construct(shape(
    ?'db_parameter_group_name' => string,
    ?'parameters' => ?ParametersList,
    ?'reset_all_parameters' => bool,
  ) $s = shape()) {
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
    $this->reset_all_parameters = $s['reset_all_parameters'] ?? false;
  }
}

class ResourceNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourcePendingMaintenanceActions {
  public ?PendingMaintenanceActionDetails $pending_maintenance_action_details;
  public string $resource_identifier;

  public function __construct(shape(
    ?'pending_maintenance_action_details' => ?PendingMaintenanceActionDetails,
    ?'resource_identifier' => string,
  ) $s = shape()) {
    $this->pending_maintenance_action_details = $s['pending_maintenance_action_details'] ?? vec[];
    $this->resource_identifier = $s['resource_identifier'] ?? '';
  }
}

class RestoreDBClusterFromS3Message {
  public ?AvailabilityZones $availability_zones;
  public ?LongOptional $backtrack_window;
  public ?IntegerOptional $backup_retention_period;
  public string $character_set_name;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_subnet_group_name;
  public string $database_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public string $engine_version;
  public string $kms_key_id;
  public string $master_user_password;
  public string $master_username;
  public string $option_group_name;
  public ?IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public string $s_3_bucket_name;
  public string $s_3_ingestion_role_arn;
  public string $s_3_prefix;
  public string $source_engine;
  public string $source_engine_version;
  public ?BooleanOptional $storage_encrypted;
  public ?TagList $tags;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZones,
    ?'backtrack_window' => ?LongOptional,
    ?'backup_retention_period' => ?IntegerOptional,
    ?'character_set_name' => string,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_cluster_identifier' => string,
    ?'db_cluster_parameter_group_name' => string,
    ?'db_subnet_group_name' => string,
    ?'database_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'kms_key_id' => string,
    ?'master_user_password' => string,
    ?'master_username' => string,
    ?'option_group_name' => string,
    ?'port' => ?IntegerOptional,
    ?'preferred_backup_window' => string,
    ?'preferred_maintenance_window' => string,
    ?'s_3_bucket_name' => string,
    ?'s_3_ingestion_role_arn' => string,
    ?'s_3_prefix' => string,
    ?'source_engine' => string,
    ?'source_engine_version' => string,
    ?'storage_encrypted' => ?BooleanOptional,
    ?'tags' => ?TagList,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->backtrack_window = $s['backtrack_window'] ?? 0;
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->character_set_name = $s['character_set_name'] ?? '';
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->s_3_ingestion_role_arn = $s['s_3_ingestion_role_arn'] ?? '';
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
    $this->source_engine = $s['source_engine'] ?? '';
    $this->source_engine_version = $s['source_engine_version'] ?? '';
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class RestoreDBClusterFromS3Result {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class RestoreDBClusterFromSnapshotMessage {
  public ?AvailabilityZones $availability_zones;
  public ?LongOptional $backtrack_window;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_subnet_group_name;
  public string $database_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public string $engine_mode;
  public string $engine_version;
  public string $kms_key_id;
  public string $option_group_name;
  public ?IntegerOptional $port;
  public ?ScalingConfiguration $scaling_configuration;
  public string $snapshot_identifier;
  public ?TagList $tags;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZones,
    ?'backtrack_window' => ?LongOptional,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_cluster_identifier' => string,
    ?'db_cluster_parameter_group_name' => string,
    ?'db_subnet_group_name' => string,
    ?'database_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'engine' => string,
    ?'engine_mode' => string,
    ?'engine_version' => string,
    ?'kms_key_id' => string,
    ?'option_group_name' => string,
    ?'port' => ?IntegerOptional,
    ?'scaling_configuration' => ?ScalingConfiguration,
    ?'snapshot_identifier' => string,
    ?'tags' => ?TagList,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->backtrack_window = $s['backtrack_window'] ?? 0;
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_mode = $s['engine_mode'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->scaling_configuration = $s['scaling_configuration'] ?? null;
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class RestoreDBClusterFromSnapshotResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class RestoreDBClusterToPointInTimeMessage {
  public ?LongOptional $backtrack_window;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_cluster_identifier;
  public string $db_cluster_parameter_group_name;
  public string $db_subnet_group_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_iam_database_authentication;
  public string $kms_key_id;
  public string $option_group_name;
  public ?IntegerOptional $port;
  public ?TStamp $restore_to_time;
  public string $restore_type;
  public string $source_db_cluster_identifier;
  public ?TagList $tags;
  public bool $use_latest_restorable_time;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'backtrack_window' => ?LongOptional,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_cluster_identifier' => string,
    ?'db_cluster_parameter_group_name' => string,
    ?'db_subnet_group_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'kms_key_id' => string,
    ?'option_group_name' => string,
    ?'port' => ?IntegerOptional,
    ?'restore_to_time' => ?TStamp,
    ?'restore_type' => string,
    ?'source_db_cluster_identifier' => string,
    ?'tags' => ?TagList,
    ?'use_latest_restorable_time' => bool,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->backtrack_window = $s['backtrack_window'] ?? 0;
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_cluster_parameter_group_name = $s['db_cluster_parameter_group_name'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->restore_to_time = $s['restore_to_time'] ?? 0;
    $this->restore_type = $s['restore_type'] ?? '';
    $this->source_db_cluster_identifier = $s['source_db_cluster_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->use_latest_restorable_time = $s['use_latest_restorable_time'] ?? false;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class RestoreDBClusterToPointInTimeResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class RestoreDBInstanceFromDBSnapshotMessage {
  public ?BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_name;
  public string $db_parameter_group_name;
  public string $db_snapshot_identifier;
  public string $db_subnet_group_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public ?IntegerOptional $iops;
  public string $license_model;
  public ?BooleanOptional $multi_az;
  public string $option_group_name;
  public ?IntegerOptional $port;
  public ?ProcessorFeatureList $processor_features;
  public ?BooleanOptional $publicly_accessible;
  public string $storage_type;
  public ?TagList $tags;
  public string $tde_credential_arn;
  public string $tde_credential_password;
  public ?BooleanOptional $use_default_processor_features;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?BooleanOptional,
    ?'availability_zone' => string,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_instance_class' => string,
    ?'db_instance_identifier' => string,
    ?'db_name' => string,
    ?'db_parameter_group_name' => string,
    ?'db_snapshot_identifier' => string,
    ?'db_subnet_group_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'engine' => string,
    ?'iops' => ?IntegerOptional,
    ?'license_model' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'option_group_name' => string,
    ?'port' => ?IntegerOptional,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'storage_type' => string,
    ?'tags' => ?TagList,
    ?'tde_credential_arn' => string,
    ?'tde_credential_password' => string,
    ?'use_default_processor_features' => ?BooleanOptional,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_name = $s['db_name'] ?? '';
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->iops = $s['iops'] ?? 0;
    $this->license_model = $s['license_model'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->tde_credential_arn = $s['tde_credential_arn'] ?? '';
    $this->tde_credential_password = $s['tde_credential_password'] ?? '';
    $this->use_default_processor_features = $s['use_default_processor_features'] ?? false;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class RestoreDBInstanceFromDBSnapshotResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class RestoreDBInstanceFromS3Message {
  public ?IntegerOptional $allocated_storage;
  public ?BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public ?IntegerOptional $backup_retention_period;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_instance_identifier;
  public string $db_name;
  public string $db_parameter_group_name;
  public ?DBSecurityGroupNameList $db_security_groups;
  public string $db_subnet_group_name;
  public ?BooleanOptional $deletion_protection;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_iam_database_authentication;
  public ?BooleanOptional $enable_performance_insights;
  public string $engine;
  public string $engine_version;
  public ?IntegerOptional $iops;
  public string $kms_key_id;
  public string $license_model;
  public string $master_user_password;
  public string $master_username;
  public ?IntegerOptional $monitoring_interval;
  public string $monitoring_role_arn;
  public ?BooleanOptional $multi_az;
  public string $option_group_name;
  public string $performance_insights_kms_key_id;
  public ?IntegerOptional $performance_insights_retention_period;
  public ?IntegerOptional $port;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public ?ProcessorFeatureList $processor_features;
  public ?BooleanOptional $publicly_accessible;
  public string $s_3_bucket_name;
  public string $s_3_ingestion_role_arn;
  public string $s_3_prefix;
  public string $source_engine;
  public string $source_engine_version;
  public ?BooleanOptional $storage_encrypted;
  public string $storage_type;
  public ?TagList $tags;
  public ?BooleanOptional $use_default_processor_features;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'allocated_storage' => ?IntegerOptional,
    ?'auto_minor_version_upgrade' => ?BooleanOptional,
    ?'availability_zone' => string,
    ?'backup_retention_period' => ?IntegerOptional,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_instance_class' => string,
    ?'db_instance_identifier' => string,
    ?'db_name' => string,
    ?'db_parameter_group_name' => string,
    ?'db_security_groups' => ?DBSecurityGroupNameList,
    ?'db_subnet_group_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'enable_performance_insights' => ?BooleanOptional,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'iops' => ?IntegerOptional,
    ?'kms_key_id' => string,
    ?'license_model' => string,
    ?'master_user_password' => string,
    ?'master_username' => string,
    ?'monitoring_interval' => ?IntegerOptional,
    ?'monitoring_role_arn' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'option_group_name' => string,
    ?'performance_insights_kms_key_id' => string,
    ?'performance_insights_retention_period' => ?IntegerOptional,
    ?'port' => ?IntegerOptional,
    ?'preferred_backup_window' => string,
    ?'preferred_maintenance_window' => string,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'s_3_bucket_name' => string,
    ?'s_3_ingestion_role_arn' => string,
    ?'s_3_prefix' => string,
    ?'source_engine' => string,
    ?'source_engine_version' => string,
    ?'storage_encrypted' => ?BooleanOptional,
    ?'storage_type' => string,
    ?'tags' => ?TagList,
    ?'use_default_processor_features' => ?BooleanOptional,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->backup_retention_period = $s['backup_retention_period'] ?? 0;
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_name = $s['db_name'] ?? '';
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->db_security_groups = $s['db_security_groups'] ?? vec[];
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->enable_performance_insights = $s['enable_performance_insights'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_model = $s['license_model'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->monitoring_interval = $s['monitoring_interval'] ?? 0;
    $this->monitoring_role_arn = $s['monitoring_role_arn'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->performance_insights_kms_key_id = $s['performance_insights_kms_key_id'] ?? '';
    $this->performance_insights_retention_period = $s['performance_insights_retention_period'] ?? 0;
    $this->port = $s['port'] ?? 0;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->s_3_ingestion_role_arn = $s['s_3_ingestion_role_arn'] ?? '';
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
    $this->source_engine = $s['source_engine'] ?? '';
    $this->source_engine_version = $s['source_engine_version'] ?? '';
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->use_default_processor_features = $s['use_default_processor_features'] ?? false;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class RestoreDBInstanceFromS3Result {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class RestoreDBInstanceToPointInTimeMessage {
  public ?BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public ?BooleanOptional $copy_tags_to_snapshot;
  public string $db_instance_class;
  public string $db_name;
  public string $db_parameter_group_name;
  public string $db_subnet_group_name;
  public ?BooleanOptional $deletion_protection;
  public string $domain;
  public string $domain_iam_role_name;
  public ?LogTypeList $enable_cloudwatch_logs_exports;
  public ?BooleanOptional $enable_iam_database_authentication;
  public string $engine;
  public ?IntegerOptional $iops;
  public string $license_model;
  public ?BooleanOptional $multi_az;
  public string $option_group_name;
  public ?IntegerOptional $port;
  public ?ProcessorFeatureList $processor_features;
  public ?BooleanOptional $publicly_accessible;
  public ?TStamp $restore_time;
  public string $source_db_instance_identifier;
  public string $source_dbi_resource_id;
  public string $storage_type;
  public ?TagList $tags;
  public string $target_db_instance_identifier;
  public string $tde_credential_arn;
  public string $tde_credential_password;
  public ?BooleanOptional $use_default_processor_features;
  public bool $use_latest_restorable_time;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'auto_minor_version_upgrade' => ?BooleanOptional,
    ?'availability_zone' => string,
    ?'copy_tags_to_snapshot' => ?BooleanOptional,
    ?'db_instance_class' => string,
    ?'db_name' => string,
    ?'db_parameter_group_name' => string,
    ?'db_subnet_group_name' => string,
    ?'deletion_protection' => ?BooleanOptional,
    ?'domain' => string,
    ?'domain_iam_role_name' => string,
    ?'enable_cloudwatch_logs_exports' => ?LogTypeList,
    ?'enable_iam_database_authentication' => ?BooleanOptional,
    ?'engine' => string,
    ?'iops' => ?IntegerOptional,
    ?'license_model' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'option_group_name' => string,
    ?'port' => ?IntegerOptional,
    ?'processor_features' => ?ProcessorFeatureList,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'restore_time' => ?TStamp,
    ?'source_db_instance_identifier' => string,
    ?'source_dbi_resource_id' => string,
    ?'storage_type' => string,
    ?'tags' => ?TagList,
    ?'target_db_instance_identifier' => string,
    ?'tde_credential_arn' => string,
    ?'tde_credential_password' => string,
    ?'use_default_processor_features' => ?BooleanOptional,
    ?'use_latest_restorable_time' => bool,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->copy_tags_to_snapshot = $s['copy_tags_to_snapshot'] ?? false;
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_name = $s['db_name'] ?? '';
    $this->db_parameter_group_name = $s['db_parameter_group_name'] ?? '';
    $this->db_subnet_group_name = $s['db_subnet_group_name'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->domain = $s['domain'] ?? '';
    $this->domain_iam_role_name = $s['domain_iam_role_name'] ?? '';
    $this->enable_cloudwatch_logs_exports = $s['enable_cloudwatch_logs_exports'] ?? vec[];
    $this->enable_iam_database_authentication = $s['enable_iam_database_authentication'] ?? false;
    $this->engine = $s['engine'] ?? '';
    $this->iops = $s['iops'] ?? 0;
    $this->license_model = $s['license_model'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->option_group_name = $s['option_group_name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->processor_features = $s['processor_features'] ?? vec[];
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->restore_time = $s['restore_time'] ?? 0;
    $this->source_db_instance_identifier = $s['source_db_instance_identifier'] ?? '';
    $this->source_dbi_resource_id = $s['source_dbi_resource_id'] ?? '';
    $this->storage_type = $s['storage_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_db_instance_identifier = $s['target_db_instance_identifier'] ?? '';
    $this->tde_credential_arn = $s['tde_credential_arn'] ?? '';
    $this->tde_credential_password = $s['tde_credential_password'] ?? '';
    $this->use_default_processor_features = $s['use_default_processor_features'] ?? false;
    $this->use_latest_restorable_time = $s['use_latest_restorable_time'] ?? false;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class RestoreDBInstanceToPointInTimeResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class RestoreWindow {
  public ?TStamp $earliest_time;
  public ?TStamp $latest_time;

  public function __construct(shape(
    ?'earliest_time' => ?TStamp,
    ?'latest_time' => ?TStamp,
  ) $s = shape()) {
    $this->earliest_time = $s['earliest_time'] ?? 0;
    $this->latest_time = $s['latest_time'] ?? 0;
  }
}

class RevokeDBSecurityGroupIngressMessage {
  public string $cidrip;
  public string $db_security_group_name;
  public string $ec_2_security_group_id;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;

  public function __construct(shape(
    ?'cidrip' => string,
    ?'db_security_group_name' => string,
    ?'ec_2_security_group_id' => string,
    ?'ec_2_security_group_name' => string,
    ?'ec_2_security_group_owner_id' => string,
  ) $s = shape()) {
    $this->cidrip = $s['cidrip'] ?? '';
    $this->db_security_group_name = $s['db_security_group_name'] ?? '';
    $this->ec_2_security_group_id = $s['ec_2_security_group_id'] ?? '';
    $this->ec_2_security_group_name = $s['ec_2_security_group_name'] ?? '';
    $this->ec_2_security_group_owner_id = $s['ec_2_security_group_owner_id'] ?? '';
  }
}

class RevokeDBSecurityGroupIngressResult {
  public ?DBSecurityGroup $db_security_group;

  public function __construct(shape(
    ?'db_security_group' => ?DBSecurityGroup,
  ) $s = shape()) {
    $this->db_security_group = $s['db_security_group'] ?? null;
  }
}

class SNSInvalidTopicFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SNSNoAuthorizationFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SNSTopicArnNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ScalingConfiguration {
  public ?BooleanOptional $auto_pause;
  public ?IntegerOptional $max_capacity;
  public ?IntegerOptional $min_capacity;
  public ?IntegerOptional $seconds_until_auto_pause;
  public string $timeout_action;

  public function __construct(shape(
    ?'auto_pause' => ?BooleanOptional,
    ?'max_capacity' => ?IntegerOptional,
    ?'min_capacity' => ?IntegerOptional,
    ?'seconds_until_auto_pause' => ?IntegerOptional,
    ?'timeout_action' => string,
  ) $s = shape()) {
    $this->auto_pause = $s['auto_pause'] ?? false;
    $this->max_capacity = $s['max_capacity'] ?? 0;
    $this->min_capacity = $s['min_capacity'] ?? 0;
    $this->seconds_until_auto_pause = $s['seconds_until_auto_pause'] ?? 0;
    $this->timeout_action = $s['timeout_action'] ?? '';
  }
}

class ScalingConfigurationInfo {
  public ?BooleanOptional $auto_pause;
  public ?IntegerOptional $max_capacity;
  public ?IntegerOptional $min_capacity;
  public ?IntegerOptional $seconds_until_auto_pause;
  public string $timeout_action;

  public function __construct(shape(
    ?'auto_pause' => ?BooleanOptional,
    ?'max_capacity' => ?IntegerOptional,
    ?'min_capacity' => ?IntegerOptional,
    ?'seconds_until_auto_pause' => ?IntegerOptional,
    ?'timeout_action' => string,
  ) $s = shape()) {
    $this->auto_pause = $s['auto_pause'] ?? false;
    $this->max_capacity = $s['max_capacity'] ?? 0;
    $this->min_capacity = $s['min_capacity'] ?? 0;
    $this->seconds_until_auto_pause = $s['seconds_until_auto_pause'] ?? 0;
    $this->timeout_action = $s['timeout_action'] ?? '';
  }
}

class SharedSnapshotQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SourceIdsList = vec<String>;

class SourceNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SourceRegion {
  public string $endpoint;
  public string $region_name;
  public string $status;

  public function __construct(shape(
    ?'endpoint' => string,
    ?'region_name' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? '';
    $this->region_name = $s['region_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type SourceRegionList = vec<SourceRegion>;

class SourceRegionMessage {
  public string $marker;
  public ?SourceRegionList $source_regions;

  public function __construct(shape(
    ?'marker' => string,
    ?'source_regions' => ?SourceRegionList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->source_regions = $s['source_regions'] ?? vec[];
  }
}

type SourceType = string;

class StartActivityStreamRequest {
  public ?BooleanOptional $apply_immediately;
  public string $kms_key_id;
  public ?ActivityStreamMode $mode;
  public string $resource_arn;

  public function __construct(shape(
    ?'apply_immediately' => ?BooleanOptional,
    ?'kms_key_id' => string,
    ?'mode' => ?ActivityStreamMode,
    ?'resource_arn' => string,
  ) $s = shape()) {
    $this->apply_immediately = $s['apply_immediately'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->mode = $s['mode'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class StartActivityStreamResponse {
  public bool $apply_immediately;
  public string $kinesis_stream_name;
  public string $kms_key_id;
  public ?ActivityStreamMode $mode;
  public ?ActivityStreamStatus $status;

  public function __construct(shape(
    ?'apply_immediately' => bool,
    ?'kinesis_stream_name' => string,
    ?'kms_key_id' => string,
    ?'mode' => ?ActivityStreamMode,
    ?'status' => ?ActivityStreamStatus,
  ) $s = shape()) {
    $this->apply_immediately = $s['apply_immediately'] ?? false;
    $this->kinesis_stream_name = $s['kinesis_stream_name'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->mode = $s['mode'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class StartDBClusterMessage {
  public string $db_cluster_identifier;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
  }
}

class StartDBClusterResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class StartDBInstanceMessage {
  public string $db_instance_identifier;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
  }
}

class StartDBInstanceResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class StartExportTaskMessage {
  public ?StringList $export_only;
  public string $export_task_identifier;
  public string $iam_role_arn;
  public string $kms_key_id;
  public string $s_3_bucket_name;
  public string $s_3_prefix;
  public string $source_arn;

  public function __construct(shape(
    ?'export_only' => ?StringList,
    ?'export_task_identifier' => string,
    ?'iam_role_arn' => string,
    ?'kms_key_id' => string,
    ?'s_3_bucket_name' => string,
    ?'s_3_prefix' => string,
    ?'source_arn' => string,
  ) $s = shape()) {
    $this->export_only = $s['export_only'] ?? vec[];
    $this->export_task_identifier = $s['export_task_identifier'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
  }
}

class StopActivityStreamRequest {
  public ?BooleanOptional $apply_immediately;
  public string $resource_arn;

  public function __construct(shape(
    ?'apply_immediately' => ?BooleanOptional,
    ?'resource_arn' => string,
  ) $s = shape()) {
    $this->apply_immediately = $s['apply_immediately'] ?? false;
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class StopActivityStreamResponse {
  public string $kinesis_stream_name;
  public string $kms_key_id;
  public ?ActivityStreamStatus $status;

  public function __construct(shape(
    ?'kinesis_stream_name' => string,
    ?'kms_key_id' => string,
    ?'status' => ?ActivityStreamStatus,
  ) $s = shape()) {
    $this->kinesis_stream_name = $s['kinesis_stream_name'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class StopDBClusterMessage {
  public string $db_cluster_identifier;

  public function __construct(shape(
    ?'db_cluster_identifier' => string,
  ) $s = shape()) {
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
  }
}

class StopDBClusterResult {
  public ?DBCluster $db_cluster;

  public function __construct(shape(
    ?'db_cluster' => ?DBCluster,
  ) $s = shape()) {
    $this->db_cluster = $s['db_cluster'] ?? null;
  }
}

class StopDBInstanceMessage {
  public string $db_instance_identifier;
  public string $db_snapshot_identifier;

  public function __construct(shape(
    ?'db_instance_identifier' => string,
    ?'db_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_snapshot_identifier = $s['db_snapshot_identifier'] ?? '';
  }
}

class StopDBInstanceResult {
  public ?DBInstance $db_instance;

  public function __construct(shape(
    ?'db_instance' => ?DBInstance,
  ) $s = shape()) {
    $this->db_instance = $s['db_instance'] ?? null;
  }
}

class StorageQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StorageTypeNotSupportedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type String = string;

type StringList = vec<String>;

type StringSensitive = string;

class Subnet {
  public ?AvailabilityZone $subnet_availability_zone;
  public string $subnet_identifier;
  public string $subnet_status;

  public function __construct(shape(
    ?'subnet_availability_zone' => ?AvailabilityZone,
    ?'subnet_identifier' => string,
    ?'subnet_status' => string,
  ) $s = shape()) {
    $this->subnet_availability_zone = $s['subnet_availability_zone'] ?? null;
    $this->subnet_identifier = $s['subnet_identifier'] ?? '';
    $this->subnet_status = $s['subnet_status'] ?? '';
  }
}

class SubnetAlreadyInUse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SubnetIdentifierList = vec<String>;

type SubnetList = vec<Subnet>;

class SubscriptionAlreadyExistFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SubscriptionCategoryNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SubscriptionNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SupportedCharacterSetsList = vec<CharacterSet>;

type SupportedTimezonesList = vec<Timezone>;

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

class TagListMessage {
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

type TargetGroupList = vec<DBProxyTargetGroup>;

class TargetHealth {
  public string $description;
  public ?TargetHealthReason $reason;
  public ?TargetState $state;

  public function __construct(shape(
    ?'description' => string,
    ?'reason' => ?TargetHealthReason,
    ?'state' => ?TargetState,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type TargetHealthReason = string;

type TargetList = vec<DBProxyTarget>;

type TargetState = string;

type TargetType = string;

class Timezone {
  public string $timezone_name;

  public function __construct(shape(
    ?'timezone_name' => string,
  ) $s = shape()) {
    $this->timezone_name = $s['timezone_name'] ?? '';
  }
}

class UpgradeTarget {
  public bool $auto_upgrade;
  public string $description;
  public string $engine;
  public string $engine_version;
  public bool $is_major_version_upgrade;

  public function __construct(shape(
    ?'auto_upgrade' => bool,
    ?'description' => string,
    ?'engine' => string,
    ?'engine_version' => string,
    ?'is_major_version_upgrade' => bool,
  ) $s = shape()) {
    $this->auto_upgrade = $s['auto_upgrade'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->is_major_version_upgrade = $s['is_major_version_upgrade'] ?? false;
  }
}

class UserAuthConfig {
  public ?AuthScheme $auth_scheme;
  public string $description;
  public ?IAMAuthMode $iam_auth;
  public string $secret_arn;
  public string $user_name;

  public function __construct(shape(
    ?'auth_scheme' => ?AuthScheme,
    ?'description' => string,
    ?'iam_auth' => ?IAMAuthMode,
    ?'secret_arn' => string,
    ?'user_name' => string,
  ) $s = shape()) {
    $this->auth_scheme = $s['auth_scheme'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->iam_auth = $s['iam_auth'] ?? '';
    $this->secret_arn = $s['secret_arn'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UserAuthConfigInfo {
  public ?AuthScheme $auth_scheme;
  public string $description;
  public ?IAMAuthMode $iam_auth;
  public string $secret_arn;
  public string $user_name;

  public function __construct(shape(
    ?'auth_scheme' => ?AuthScheme,
    ?'description' => string,
    ?'iam_auth' => ?IAMAuthMode,
    ?'secret_arn' => string,
    ?'user_name' => string,
  ) $s = shape()) {
    $this->auth_scheme = $s['auth_scheme'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->iam_auth = $s['iam_auth'] ?? '';
    $this->secret_arn = $s['secret_arn'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type UserAuthConfigInfoList = vec<UserAuthConfigInfo>;

type UserAuthConfigList = vec<UserAuthConfig>;

class ValidDBInstanceModificationsMessage {
  public ?ValidStorageOptionsList $storage;
  public ?AvailableProcessorFeatureList $valid_processor_features;

  public function __construct(shape(
    ?'storage' => ?ValidStorageOptionsList,
    ?'valid_processor_features' => ?AvailableProcessorFeatureList,
  ) $s = shape()) {
    $this->storage = $s['storage'] ?? vec[];
    $this->valid_processor_features = $s['valid_processor_features'] ?? vec[];
  }
}

class ValidStorageOptions {
  public ?DoubleRangeList $iops_to_storage_ratio;
  public ?RangeList $provisioned_iops;
  public ?RangeList $storage_size;
  public string $storage_type;
  public bool $supports_storage_autoscaling;

  public function __construct(shape(
    ?'iops_to_storage_ratio' => ?DoubleRangeList,
    ?'provisioned_iops' => ?RangeList,
    ?'storage_size' => ?RangeList,
    ?'storage_type' => string,
    ?'supports_storage_autoscaling' => bool,
  ) $s = shape()) {
    $this->iops_to_storage_ratio = $s['iops_to_storage_ratio'] ?? vec[];
    $this->provisioned_iops = $s['provisioned_iops'] ?? vec[];
    $this->storage_size = $s['storage_size'] ?? vec[];
    $this->storage_type = $s['storage_type'] ?? '';
    $this->supports_storage_autoscaling = $s['supports_storage_autoscaling'] ?? false;
  }
}

type ValidStorageOptionsList = vec<ValidStorageOptions>;

type ValidUpgradeTargetList = vec<UpgradeTarget>;

type VpcSecurityGroupIdList = vec<String>;

class VpcSecurityGroupMembership {
  public string $status;
  public string $vpc_security_group_id;

  public function __construct(shape(
    ?'status' => string,
    ?'vpc_security_group_id' => string,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
    $this->vpc_security_group_id = $s['vpc_security_group_id'] ?? '';
  }
}

type VpcSecurityGroupMembershipList = vec<VpcSecurityGroupMembership>;

class VpnDetails {
  public string $vpn_gateway_ip;
  public string $vpn_id;
  public string $vpn_name;
  public ?StringSensitive $vpn_psk;
  public string $vpn_state;
  public string $vpn_tunnel_originator_ip;

  public function __construct(shape(
    ?'vpn_gateway_ip' => string,
    ?'vpn_id' => string,
    ?'vpn_name' => string,
    ?'vpn_psk' => ?StringSensitive,
    ?'vpn_state' => string,
    ?'vpn_tunnel_originator_ip' => string,
  ) $s = shape()) {
    $this->vpn_gateway_ip = $s['vpn_gateway_ip'] ?? '';
    $this->vpn_id = $s['vpn_id'] ?? '';
    $this->vpn_name = $s['vpn_name'] ?? '';
    $this->vpn_psk = $s['vpn_psk'] ?? '';
    $this->vpn_state = $s['vpn_state'] ?? '';
    $this->vpn_tunnel_originator_ip = $s['vpn_tunnel_originator_ip'] ?? '';
  }
}

