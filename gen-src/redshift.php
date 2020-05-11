<?hh // strict
namespace slack\aws\redshift;

interface Redshift {
  public function AcceptReservedNodeExchange(AcceptReservedNodeExchangeInputMessage): Awaitable<Errors\Result<AcceptReservedNodeExchangeOutputMessage>>;
  public function AuthorizeClusterSecurityGroupIngress(AuthorizeClusterSecurityGroupIngressMessage): Awaitable<Errors\Result<AuthorizeClusterSecurityGroupIngressResult>>;
  public function AuthorizeSnapshotAccess(AuthorizeSnapshotAccessMessage): Awaitable<Errors\Result<AuthorizeSnapshotAccessResult>>;
  public function BatchDeleteClusterSnapshots(BatchDeleteClusterSnapshotsRequest): Awaitable<Errors\Result<BatchDeleteClusterSnapshotsResult>>;
  public function BatchModifyClusterSnapshots(BatchModifyClusterSnapshotsMessage): Awaitable<Errors\Result<BatchModifyClusterSnapshotsOutputMessage>>;
  public function CancelResize(CancelResizeMessage): Awaitable<Errors\Result<ResizeProgressMessage>>;
  public function CopyClusterSnapshot(CopyClusterSnapshotMessage): Awaitable<Errors\Result<CopyClusterSnapshotResult>>;
  public function CreateCluster(CreateClusterMessage): Awaitable<Errors\Result<CreateClusterResult>>;
  public function CreateClusterParameterGroup(CreateClusterParameterGroupMessage): Awaitable<Errors\Result<CreateClusterParameterGroupResult>>;
  public function CreateClusterSecurityGroup(CreateClusterSecurityGroupMessage): Awaitable<Errors\Result<CreateClusterSecurityGroupResult>>;
  public function CreateClusterSnapshot(CreateClusterSnapshotMessage): Awaitable<Errors\Result<CreateClusterSnapshotResult>>;
  public function CreateClusterSubnetGroup(CreateClusterSubnetGroupMessage): Awaitable<Errors\Result<CreateClusterSubnetGroupResult>>;
  public function CreateEventSubscription(CreateEventSubscriptionMessage): Awaitable<Errors\Result<CreateEventSubscriptionResult>>;
  public function CreateHsmClientCertificate(CreateHsmClientCertificateMessage): Awaitable<Errors\Result<CreateHsmClientCertificateResult>>;
  public function CreateHsmConfiguration(CreateHsmConfigurationMessage): Awaitable<Errors\Result<CreateHsmConfigurationResult>>;
  public function CreateScheduledAction(CreateScheduledActionMessage): Awaitable<Errors\Result<ScheduledAction>>;
  public function CreateSnapshotCopyGrant(CreateSnapshotCopyGrantMessage): Awaitable<Errors\Result<CreateSnapshotCopyGrantResult>>;
  public function CreateSnapshotSchedule(CreateSnapshotScheduleMessage): Awaitable<Errors\Result<SnapshotSchedule>>;
  public function CreateTags(CreateTagsMessage): Awaitable<Errors\Error>;
  public function CreateUsageLimit(CreateUsageLimitMessage): Awaitable<Errors\Result<UsageLimit>>;
  public function DeleteCluster(DeleteClusterMessage): Awaitable<Errors\Result<DeleteClusterResult>>;
  public function DeleteClusterParameterGroup(DeleteClusterParameterGroupMessage): Awaitable<Errors\Error>;
  public function DeleteClusterSecurityGroup(DeleteClusterSecurityGroupMessage): Awaitable<Errors\Error>;
  public function DeleteClusterSnapshot(DeleteClusterSnapshotMessage): Awaitable<Errors\Result<DeleteClusterSnapshotResult>>;
  public function DeleteClusterSubnetGroup(DeleteClusterSubnetGroupMessage): Awaitable<Errors\Error>;
  public function DeleteEventSubscription(DeleteEventSubscriptionMessage): Awaitable<Errors\Error>;
  public function DeleteHsmClientCertificate(DeleteHsmClientCertificateMessage): Awaitable<Errors\Error>;
  public function DeleteHsmConfiguration(DeleteHsmConfigurationMessage): Awaitable<Errors\Error>;
  public function DeleteScheduledAction(DeleteScheduledActionMessage): Awaitable<Errors\Error>;
  public function DeleteSnapshotCopyGrant(DeleteSnapshotCopyGrantMessage): Awaitable<Errors\Error>;
  public function DeleteSnapshotSchedule(DeleteSnapshotScheduleMessage): Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsMessage): Awaitable<Errors\Error>;
  public function DeleteUsageLimit(DeleteUsageLimitMessage): Awaitable<Errors\Error>;
  public function DescribeAccountAttributes(DescribeAccountAttributesMessage): Awaitable<Errors\Result<AccountAttributeList>>;
  public function DescribeClusterDbRevisions(DescribeClusterDbRevisionsMessage): Awaitable<Errors\Result<ClusterDbRevisionsMessage>>;
  public function DescribeClusterParameterGroups(DescribeClusterParameterGroupsMessage): Awaitable<Errors\Result<ClusterParameterGroupsMessage>>;
  public function DescribeClusterParameters(DescribeClusterParametersMessage): Awaitable<Errors\Result<ClusterParameterGroupDetails>>;
  public function DescribeClusterSecurityGroups(DescribeClusterSecurityGroupsMessage): Awaitable<Errors\Result<ClusterSecurityGroupMessage>>;
  public function DescribeClusterSnapshots(DescribeClusterSnapshotsMessage): Awaitable<Errors\Result<SnapshotMessage>>;
  public function DescribeClusterSubnetGroups(DescribeClusterSubnetGroupsMessage): Awaitable<Errors\Result<ClusterSubnetGroupMessage>>;
  public function DescribeClusterTracks(DescribeClusterTracksMessage): Awaitable<Errors\Result<TrackListMessage>>;
  public function DescribeClusterVersions(DescribeClusterVersionsMessage): Awaitable<Errors\Result<ClusterVersionsMessage>>;
  public function DescribeClusters(DescribeClustersMessage): Awaitable<Errors\Result<ClustersMessage>>;
  public function DescribeDefaultClusterParameters(DescribeDefaultClusterParametersMessage): Awaitable<Errors\Result<DescribeDefaultClusterParametersResult>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage): Awaitable<Errors\Result<EventCategoriesMessage>>;
  public function DescribeEventSubscriptions(DescribeEventSubscriptionsMessage): Awaitable<Errors\Result<EventSubscriptionsMessage>>;
  public function DescribeEvents(DescribeEventsMessage): Awaitable<Errors\Result<EventsMessage>>;
  public function DescribeHsmClientCertificates(DescribeHsmClientCertificatesMessage): Awaitable<Errors\Result<HsmClientCertificateMessage>>;
  public function DescribeHsmConfigurations(DescribeHsmConfigurationsMessage): Awaitable<Errors\Result<HsmConfigurationMessage>>;
  public function DescribeLoggingStatus(DescribeLoggingStatusMessage): Awaitable<Errors\Result<LoggingStatus>>;
  public function DescribeNodeConfigurationOptions(DescribeNodeConfigurationOptionsMessage): Awaitable<Errors\Result<NodeConfigurationOptionsMessage>>;
  public function DescribeOrderableClusterOptions(DescribeOrderableClusterOptionsMessage): Awaitable<Errors\Result<OrderableClusterOptionsMessage>>;
  public function DescribeReservedNodeOfferings(DescribeReservedNodeOfferingsMessage): Awaitable<Errors\Result<ReservedNodeOfferingsMessage>>;
  public function DescribeReservedNodes(DescribeReservedNodesMessage): Awaitable<Errors\Result<ReservedNodesMessage>>;
  public function DescribeResize(DescribeResizeMessage): Awaitable<Errors\Result<ResizeProgressMessage>>;
  public function DescribeScheduledActions(DescribeScheduledActionsMessage): Awaitable<Errors\Result<ScheduledActionsMessage>>;
  public function DescribeSnapshotCopyGrants(DescribeSnapshotCopyGrantsMessage): Awaitable<Errors\Result<SnapshotCopyGrantMessage>>;
  public function DescribeSnapshotSchedules(DescribeSnapshotSchedulesMessage): Awaitable<Errors\Result<DescribeSnapshotSchedulesOutputMessage>>;
  public function DescribeStorage(): Awaitable<Errors\Result<CustomerStorageMessage>>;
  public function DescribeTableRestoreStatus(DescribeTableRestoreStatusMessage): Awaitable<Errors\Result<TableRestoreStatusMessage>>;
  public function DescribeTags(DescribeTagsMessage): Awaitable<Errors\Result<TaggedResourceListMessage>>;
  public function DescribeUsageLimits(DescribeUsageLimitsMessage): Awaitable<Errors\Result<UsageLimitList>>;
  public function DisableLogging(DisableLoggingMessage): Awaitable<Errors\Result<LoggingStatus>>;
  public function DisableSnapshotCopy(DisableSnapshotCopyMessage): Awaitable<Errors\Result<DisableSnapshotCopyResult>>;
  public function EnableLogging(EnableLoggingMessage): Awaitable<Errors\Result<LoggingStatus>>;
  public function EnableSnapshotCopy(EnableSnapshotCopyMessage): Awaitable<Errors\Result<EnableSnapshotCopyResult>>;
  public function GetClusterCredentials(GetClusterCredentialsMessage): Awaitable<Errors\Result<ClusterCredentials>>;
  public function GetReservedNodeExchangeOfferings(GetReservedNodeExchangeOfferingsInputMessage): Awaitable<Errors\Result<GetReservedNodeExchangeOfferingsOutputMessage>>;
  public function ModifyCluster(ModifyClusterMessage): Awaitable<Errors\Result<ModifyClusterResult>>;
  public function ModifyClusterDbRevision(ModifyClusterDbRevisionMessage): Awaitable<Errors\Result<ModifyClusterDbRevisionResult>>;
  public function ModifyClusterIamRoles(ModifyClusterIamRolesMessage): Awaitable<Errors\Result<ModifyClusterIamRolesResult>>;
  public function ModifyClusterMaintenance(ModifyClusterMaintenanceMessage): Awaitable<Errors\Result<ModifyClusterMaintenanceResult>>;
  public function ModifyClusterParameterGroup(ModifyClusterParameterGroupMessage): Awaitable<Errors\Result<ClusterParameterGroupNameMessage>>;
  public function ModifyClusterSnapshot(ModifyClusterSnapshotMessage): Awaitable<Errors\Result<ModifyClusterSnapshotResult>>;
  public function ModifyClusterSnapshotSchedule(ModifyClusterSnapshotScheduleMessage): Awaitable<Errors\Error>;
  public function ModifyClusterSubnetGroup(ModifyClusterSubnetGroupMessage): Awaitable<Errors\Result<ModifyClusterSubnetGroupResult>>;
  public function ModifyEventSubscription(ModifyEventSubscriptionMessage): Awaitable<Errors\Result<ModifyEventSubscriptionResult>>;
  public function ModifyScheduledAction(ModifyScheduledActionMessage): Awaitable<Errors\Result<ScheduledAction>>;
  public function ModifySnapshotCopyRetentionPeriod(ModifySnapshotCopyRetentionPeriodMessage): Awaitable<Errors\Result<ModifySnapshotCopyRetentionPeriodResult>>;
  public function ModifySnapshotSchedule(ModifySnapshotScheduleMessage): Awaitable<Errors\Result<SnapshotSchedule>>;
  public function ModifyUsageLimit(ModifyUsageLimitMessage): Awaitable<Errors\Result<UsageLimit>>;
  public function PauseCluster(PauseClusterMessage): Awaitable<Errors\Result<PauseClusterResult>>;
  public function PurchaseReservedNodeOffering(PurchaseReservedNodeOfferingMessage): Awaitable<Errors\Result<PurchaseReservedNodeOfferingResult>>;
  public function RebootCluster(RebootClusterMessage): Awaitable<Errors\Result<RebootClusterResult>>;
  public function ResetClusterParameterGroup(ResetClusterParameterGroupMessage): Awaitable<Errors\Result<ClusterParameterGroupNameMessage>>;
  public function ResizeCluster(ResizeClusterMessage): Awaitable<Errors\Result<ResizeClusterResult>>;
  public function RestoreFromClusterSnapshot(RestoreFromClusterSnapshotMessage): Awaitable<Errors\Result<RestoreFromClusterSnapshotResult>>;
  public function RestoreTableFromClusterSnapshot(RestoreTableFromClusterSnapshotMessage): Awaitable<Errors\Result<RestoreTableFromClusterSnapshotResult>>;
  public function ResumeCluster(ResumeClusterMessage): Awaitable<Errors\Result<ResumeClusterResult>>;
  public function RevokeClusterSecurityGroupIngress(RevokeClusterSecurityGroupIngressMessage): Awaitable<Errors\Result<RevokeClusterSecurityGroupIngressResult>>;
  public function RevokeSnapshotAccess(RevokeSnapshotAccessMessage): Awaitable<Errors\Result<RevokeSnapshotAccessResult>>;
  public function RotateEncryptionKey(RotateEncryptionKeyMessage): Awaitable<Errors\Result<RotateEncryptionKeyResult>>;
}

class AcceptReservedNodeExchangeInputMessage {
  public string $reserved_node_id;
  public string $target_reserved_node_offering_id;

  public function __construct(shape(
  ?'reserved_node_id' => string,
  ?'target_reserved_node_offering_id' => string,
  ) $s = shape()) {
    $this->reserved_node_id = $reserved_node_id ?? "";
    $this->target_reserved_node_offering_id = $target_reserved_node_offering_id ?? "";
  }
}

class AcceptReservedNodeExchangeOutputMessage {
  public ReservedNode $exchanged_reserved_node;

  public function __construct(shape(
  ?'exchanged_reserved_node' => ReservedNode,
  ) $s = shape()) {
    $this->exchanged_reserved_node = $exchanged_reserved_node ?? null;
  }
}

class AccessToSnapshotDeniedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AccountAttribute {
  public string $attribute_name;
  public AttributeValueList $attribute_values;

  public function __construct(shape(
  ?'attribute_name' => string,
  ?'attribute_values' => AttributeValueList,
  ) $s = shape()) {
    $this->attribute_name = $attribute_name ?? "";
    $this->attribute_values = $attribute_values ?? [];
  }
}

class AccountAttributeList {
  public AttributeList $account_attributes;

  public function __construct(shape(
  ?'account_attributes' => AttributeList,
  ) $s = shape()) {
    $this->account_attributes = $account_attributes ?? [];
  }
}

class AccountWithRestoreAccess {
  public string $account_alias;
  public string $account_id;

  public function __construct(shape(
  ?'account_alias' => string,
  ?'account_id' => string,
  ) $s = shape()) {
    $this->account_alias = $account_alias ?? "";
    $this->account_id = $account_id ?? "";
  }
}

type AccountsWithRestoreAccessList = vec<AccountWithRestoreAccess>;

type ActionType = string;

type AssociatedClusterList = vec<ClusterAssociatedToSchedule>;

type AttributeList = vec<AccountAttribute>;

type AttributeNameList = vec<String>;

type AttributeValueList = vec<AttributeValueTarget>;

class AttributeValueTarget {
  public string $attribute_value;

  public function __construct(shape(
  ?'attribute_value' => string,
  ) $s = shape()) {
    $this->attribute_value = $attribute_value ?? "";
  }
}

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

class AuthorizeClusterSecurityGroupIngressMessage {
  public string $cidrip;
  public string $cluster_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;

  public function __construct(shape(
  ?'cidrip' => string,
  ?'cluster_security_group_name' => string,
  ?'ec_2_security_group_name' => string,
  ?'ec_2_security_group_owner_id' => string,
  ) $s = shape()) {
    $this->cidrip = $cidrip ?? "";
    $this->cluster_security_group_name = $cluster_security_group_name ?? "";
    $this->ec_2_security_group_name = $ec_2_security_group_name ?? "";
    $this->ec_2_security_group_owner_id = $ec_2_security_group_owner_id ?? "";
  }
}

class AuthorizeClusterSecurityGroupIngressResult {
  public ClusterSecurityGroup $cluster_security_group;

  public function __construct(shape(
  ?'cluster_security_group' => ClusterSecurityGroup,
  ) $s = shape()) {
    $this->cluster_security_group = $cluster_security_group ?? null;
  }
}

class AuthorizeSnapshotAccessMessage {
  public string $account_with_restore_access;
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;

  public function __construct(shape(
  ?'account_with_restore_access' => string,
  ?'snapshot_cluster_identifier' => string,
  ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->account_with_restore_access = $account_with_restore_access ?? "";
    $this->snapshot_cluster_identifier = $snapshot_cluster_identifier ?? "";
    $this->snapshot_identifier = $snapshot_identifier ?? "";
  }
}

class AuthorizeSnapshotAccessResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class AvailabilityZone {
  public string $name;
  public SupportedPlatformsList $supported_platforms;

  public function __construct(shape(
  ?'name' => string,
  ?'supported_platforms' => SupportedPlatformsList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->supported_platforms = $supported_platforms ?? [];
  }
}

type AvailabilityZoneList = vec<AvailabilityZone>;

class BatchDeleteClusterSnapshotsRequest {
  public DeleteClusterSnapshotMessageList $identifiers;

  public function __construct(shape(
  ?'identifiers' => DeleteClusterSnapshotMessageList,
  ) $s = shape()) {
    $this->identifiers = $identifiers ?? [];
  }
}

class BatchDeleteClusterSnapshotsResult {
  public BatchSnapshotOperationErrorList $errors;
  public SnapshotIdentifierList $resources;

  public function __construct(shape(
  ?'errors' => BatchSnapshotOperationErrorList,
  ?'resources' => SnapshotIdentifierList,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
    $this->resources = $resources ?? [];
  }
}

class BatchDeleteRequestSizeExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchModifyClusterSnapshotsLimitExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BatchModifyClusterSnapshotsMessage {
  public boolean $force;
  public IntegerOptional $manual_snapshot_retention_period;
  public SnapshotIdentifierList $snapshot_identifier_list;

  public function __construct(shape(
  ?'force' => boolean,
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'snapshot_identifier_list' => SnapshotIdentifierList,
  ) $s = shape()) {
    $this->force = $force ?? false;
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->snapshot_identifier_list = $snapshot_identifier_list ?? [];
  }
}

class BatchModifyClusterSnapshotsOutputMessage {
  public BatchSnapshotOperationErrors $errors;
  public SnapshotIdentifierList $resources;

  public function __construct(shape(
  ?'errors' => BatchSnapshotOperationErrors,
  ?'resources' => SnapshotIdentifierList,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
    $this->resources = $resources ?? [];
  }
}

type BatchSnapshotOperationErrorList = vec<SnapshotErrorMessage>;

type BatchSnapshotOperationErrors = vec<SnapshotErrorMessage>;

type Boolean = bool;

type BooleanOptional = bool;

class BucketNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CancelResizeMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class Cluster {
  public boolean $allow_version_upgrade;
  public int $automated_snapshot_retention_period;
  public string $availability_zone;
  public string $cluster_availability_status;
  public TStamp $cluster_create_time;
  public string $cluster_identifier;
  public ClusterNodesList $cluster_nodes;
  public ClusterParameterGroupStatusList $cluster_parameter_groups;
  public string $cluster_public_key;
  public string $cluster_revision_number;
  public ClusterSecurityGroupMembershipList $cluster_security_groups;
  public ClusterSnapshotCopyStatus $cluster_snapshot_copy_status;
  public string $cluster_status;
  public string $cluster_subnet_group_name;
  public string $cluster_version;
  public string $db_name;
  public DataTransferProgress $data_transfer_progress;
  public DeferredMaintenanceWindowsList $deferred_maintenance_windows;
  public ElasticIpStatus $elastic_ip_status;
  public string $elastic_resize_number_of_node_options;
  public boolean $encrypted;
  public Endpoint $endpoint;
  public boolean $enhanced_vpc_routing;
  public TStamp $expected_next_snapshot_schedule_time;
  public string $expected_next_snapshot_schedule_time_status;
  public HsmStatus $hsm_status;
  public ClusterIamRoleList $iam_roles;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public int $manual_snapshot_retention_period;
  public string $master_username;
  public string $modify_status;
  public TStamp $next_maintenance_window_start_time;
  public string $node_type;
  public int $number_of_nodes;
  public PendingActionsList $pending_actions;
  public PendingModifiedValues $pending_modified_values;
  public string $preferred_maintenance_window;
  public boolean $publicly_accessible;
  public ResizeInfo $resize_info;
  public RestoreStatus $restore_status;
  public string $snapshot_schedule_identifier;
  public ScheduleState $snapshot_schedule_state;
  public TagList $tags;
  public string $vpc_id;
  public VpcSecurityGroupMembershipList $vpc_security_groups;

  public function __construct(shape(
  ?'allow_version_upgrade' => boolean,
  ?'automated_snapshot_retention_period' => int,
  ?'availability_zone' => string,
  ?'cluster_availability_status' => string,
  ?'cluster_create_time' => TStamp,
  ?'cluster_identifier' => string,
  ?'cluster_nodes' => ClusterNodesList,
  ?'cluster_parameter_groups' => ClusterParameterGroupStatusList,
  ?'cluster_public_key' => string,
  ?'cluster_revision_number' => string,
  ?'cluster_security_groups' => ClusterSecurityGroupMembershipList,
  ?'cluster_snapshot_copy_status' => ClusterSnapshotCopyStatus,
  ?'cluster_status' => string,
  ?'cluster_subnet_group_name' => string,
  ?'cluster_version' => string,
  ?'db_name' => string,
  ?'data_transfer_progress' => DataTransferProgress,
  ?'deferred_maintenance_windows' => DeferredMaintenanceWindowsList,
  ?'elastic_ip_status' => ElasticIpStatus,
  ?'elastic_resize_number_of_node_options' => string,
  ?'encrypted' => boolean,
  ?'endpoint' => Endpoint,
  ?'enhanced_vpc_routing' => boolean,
  ?'expected_next_snapshot_schedule_time' => TStamp,
  ?'expected_next_snapshot_schedule_time_status' => string,
  ?'hsm_status' => HsmStatus,
  ?'iam_roles' => ClusterIamRoleList,
  ?'kms_key_id' => string,
  ?'maintenance_track_name' => string,
  ?'manual_snapshot_retention_period' => int,
  ?'master_username' => string,
  ?'modify_status' => string,
  ?'next_maintenance_window_start_time' => TStamp,
  ?'node_type' => string,
  ?'number_of_nodes' => int,
  ?'pending_actions' => PendingActionsList,
  ?'pending_modified_values' => PendingModifiedValues,
  ?'preferred_maintenance_window' => string,
  ?'publicly_accessible' => boolean,
  ?'resize_info' => ResizeInfo,
  ?'restore_status' => RestoreStatus,
  ?'snapshot_schedule_identifier' => string,
  ?'snapshot_schedule_state' => ScheduleState,
  ?'tags' => TagList,
  ?'vpc_id' => string,
  ?'vpc_security_groups' => VpcSecurityGroupMembershipList,
  ) $s = shape()) {
    $this->allow_version_upgrade = $allow_version_upgrade ?? false;
    $this->automated_snapshot_retention_period = $automated_snapshot_retention_period ?? 0;
    $this->availability_zone = $availability_zone ?? "";
    $this->cluster_availability_status = $cluster_availability_status ?? "";
    $this->cluster_create_time = $cluster_create_time ?? 0;
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->cluster_nodes = $cluster_nodes ?? [];
    $this->cluster_parameter_groups = $cluster_parameter_groups ?? [];
    $this->cluster_public_key = $cluster_public_key ?? "";
    $this->cluster_revision_number = $cluster_revision_number ?? "";
    $this->cluster_security_groups = $cluster_security_groups ?? [];
    $this->cluster_snapshot_copy_status = $cluster_snapshot_copy_status ?? null;
    $this->cluster_status = $cluster_status ?? "";
    $this->cluster_subnet_group_name = $cluster_subnet_group_name ?? "";
    $this->cluster_version = $cluster_version ?? "";
    $this->db_name = $db_name ?? "";
    $this->data_transfer_progress = $data_transfer_progress ?? null;
    $this->deferred_maintenance_windows = $deferred_maintenance_windows ?? [];
    $this->elastic_ip_status = $elastic_ip_status ?? null;
    $this->elastic_resize_number_of_node_options = $elastic_resize_number_of_node_options ?? "";
    $this->encrypted = $encrypted ?? false;
    $this->endpoint = $endpoint ?? null;
    $this->enhanced_vpc_routing = $enhanced_vpc_routing ?? false;
    $this->expected_next_snapshot_schedule_time = $expected_next_snapshot_schedule_time ?? 0;
    $this->expected_next_snapshot_schedule_time_status = $expected_next_snapshot_schedule_time_status ?? "";
    $this->hsm_status = $hsm_status ?? null;
    $this->iam_roles = $iam_roles ?? [];
    $this->kms_key_id = $kms_key_id ?? "";
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->master_username = $master_username ?? "";
    $this->modify_status = $modify_status ?? "";
    $this->next_maintenance_window_start_time = $next_maintenance_window_start_time ?? 0;
    $this->node_type = $node_type ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->pending_actions = $pending_actions ?? [];
    $this->pending_modified_values = $pending_modified_values ?? null;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? "";
    $this->publicly_accessible = $publicly_accessible ?? false;
    $this->resize_info = $resize_info ?? null;
    $this->restore_status = $restore_status ?? null;
    $this->snapshot_schedule_identifier = $snapshot_schedule_identifier ?? "";
    $this->snapshot_schedule_state = $snapshot_schedule_state ?? "";
    $this->tags = $tags ?? [];
    $this->vpc_id = $vpc_id ?? "";
    $this->vpc_security_groups = $vpc_security_groups ?? [];
  }
}

class ClusterAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterAssociatedToSchedule {
  public string $cluster_identifier;
  public ScheduleState $schedule_association_state;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'schedule_association_state' => ScheduleState,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->schedule_association_state = $schedule_association_state ?? "";
  }
}

class ClusterCredentials {
  public SensitiveString $db_password;
  public string $db_user;
  public TStamp $expiration;

  public function __construct(shape(
  ?'db_password' => SensitiveString,
  ?'db_user' => string,
  ?'expiration' => TStamp,
  ) $s = shape()) {
    $this->db_password = $db_password ?? "";
    $this->db_user = $db_user ?? "";
    $this->expiration = $expiration ?? 0;
  }
}

class ClusterDbRevision {
  public string $cluster_identifier;
  public string $current_database_revision;
  public TStamp $database_revision_release_date;
  public RevisionTargetsList $revision_targets;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'current_database_revision' => string,
  ?'database_revision_release_date' => TStamp,
  ?'revision_targets' => RevisionTargetsList,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->current_database_revision = $current_database_revision ?? "";
    $this->database_revision_release_date = $database_revision_release_date ?? 0;
    $this->revision_targets = $revision_targets ?? [];
  }
}

type ClusterDbRevisionsList = vec<ClusterDbRevision>;

class ClusterDbRevisionsMessage {
  public ClusterDbRevisionsList $cluster_db_revisions;
  public string $marker;

  public function __construct(shape(
  ?'cluster_db_revisions' => ClusterDbRevisionsList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cluster_db_revisions = $cluster_db_revisions ?? [];
    $this->marker = $marker ?? "";
  }
}

class ClusterIamRole {
  public string $apply_status;
  public string $iam_role_arn;

  public function __construct(shape(
  ?'apply_status' => string,
  ?'iam_role_arn' => string,
  ) $s = shape()) {
    $this->apply_status = $apply_status ?? "";
    $this->iam_role_arn = $iam_role_arn ?? "";
  }
}

type ClusterIamRoleList = vec<ClusterIamRole>;

type ClusterList = vec<Cluster>;

class ClusterNode {
  public string $node_role;
  public string $private_ip_address;
  public string $public_ip_address;

  public function __construct(shape(
  ?'node_role' => string,
  ?'private_ip_address' => string,
  ?'public_ip_address' => string,
  ) $s = shape()) {
    $this->node_role = $node_role ?? "";
    $this->private_ip_address = $private_ip_address ?? "";
    $this->public_ip_address = $public_ip_address ?? "";
  }
}

type ClusterNodesList = vec<ClusterNode>;

class ClusterNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterOnLatestRevisionFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterParameterGroup {
  public string $description;
  public string $parameter_group_family;
  public string $parameter_group_name;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => string,
  ?'parameter_group_family' => string,
  ?'parameter_group_name' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->parameter_group_family = $parameter_group_family ?? "";
    $this->parameter_group_name = $parameter_group_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class ClusterParameterGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterParameterGroupDetails {
  public string $marker;
  public ParametersList $parameters;

  public function __construct(shape(
  ?'marker' => string,
  ?'parameters' => ParametersList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->parameters = $parameters ?? [];
  }
}

class ClusterParameterGroupNameMessage {
  public string $parameter_group_name;
  public string $parameter_group_status;

  public function __construct(shape(
  ?'parameter_group_name' => string,
  ?'parameter_group_status' => string,
  ) $s = shape()) {
    $this->parameter_group_name = $parameter_group_name ?? "";
    $this->parameter_group_status = $parameter_group_status ?? "";
  }
}

class ClusterParameterGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterParameterGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterParameterGroupStatus {
  public ClusterParameterStatusList $cluster_parameter_status_list;
  public string $parameter_apply_status;
  public string $parameter_group_name;

  public function __construct(shape(
  ?'cluster_parameter_status_list' => ClusterParameterStatusList,
  ?'parameter_apply_status' => string,
  ?'parameter_group_name' => string,
  ) $s = shape()) {
    $this->cluster_parameter_status_list = $cluster_parameter_status_list ?? [];
    $this->parameter_apply_status = $parameter_apply_status ?? "";
    $this->parameter_group_name = $parameter_group_name ?? "";
  }
}

type ClusterParameterGroupStatusList = vec<ClusterParameterGroupStatus>;

class ClusterParameterGroupsMessage {
  public string $marker;
  public ParameterGroupList $parameter_groups;

  public function __construct(shape(
  ?'marker' => string,
  ?'parameter_groups' => ParameterGroupList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->parameter_groups = $parameter_groups ?? [];
  }
}

class ClusterParameterStatus {
  public string $parameter_apply_error_description;
  public string $parameter_apply_status;
  public string $parameter_name;

  public function __construct(shape(
  ?'parameter_apply_error_description' => string,
  ?'parameter_apply_status' => string,
  ?'parameter_name' => string,
  ) $s = shape()) {
    $this->parameter_apply_error_description = $parameter_apply_error_description ?? "";
    $this->parameter_apply_status = $parameter_apply_status ?? "";
    $this->parameter_name = $parameter_name ?? "";
  }
}

type ClusterParameterStatusList = vec<ClusterParameterStatus>;

class ClusterQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSecurityGroup {
  public string $cluster_security_group_name;
  public string $description;
  public EC2SecurityGroupList $ec_2_security_groups;
  public IPRangeList $ip_ranges;
  public TagList $tags;

  public function __construct(shape(
  ?'cluster_security_group_name' => string,
  ?'description' => string,
  ?'ec_2_security_groups' => EC2SecurityGroupList,
  ?'ip_ranges' => IPRangeList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->cluster_security_group_name = $cluster_security_group_name ?? "";
    $this->description = $description ?? "";
    $this->ec_2_security_groups = $ec_2_security_groups ?? [];
    $this->ip_ranges = $ip_ranges ?? [];
    $this->tags = $tags ?? [];
  }
}

class ClusterSecurityGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSecurityGroupMembership {
  public string $cluster_security_group_name;
  public string $status;

  public function __construct(shape(
  ?'cluster_security_group_name' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->cluster_security_group_name = $cluster_security_group_name ?? "";
    $this->status = $status ?? "";
  }
}

type ClusterSecurityGroupMembershipList = vec<ClusterSecurityGroupMembership>;

class ClusterSecurityGroupMessage {
  public ClusterSecurityGroups $cluster_security_groups;
  public string $marker;

  public function __construct(shape(
  ?'cluster_security_groups' => ClusterSecurityGroups,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cluster_security_groups = $cluster_security_groups ?? [];
    $this->marker = $marker ?? "";
  }
}

type ClusterSecurityGroupNameList = vec<String>;

class ClusterSecurityGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSecurityGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ClusterSecurityGroups = vec<ClusterSecurityGroup>;

class ClusterSnapshotAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSnapshotCopyStatus {
  public string $destination_region;
  public int $manual_snapshot_retention_period;
  public Long $retention_period;
  public string $snapshot_copy_grant_name;

  public function __construct(shape(
  ?'destination_region' => string,
  ?'manual_snapshot_retention_period' => int,
  ?'retention_period' => Long,
  ?'snapshot_copy_grant_name' => string,
  ) $s = shape()) {
    $this->destination_region = $destination_region ?? "";
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->retention_period = $retention_period ?? 0;
    $this->snapshot_copy_grant_name = $snapshot_copy_grant_name ?? "";
  }
}

class ClusterSnapshotNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSnapshotQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSubnetGroup {
  public string $cluster_subnet_group_name;
  public string $description;
  public string $subnet_group_status;
  public SubnetList $subnets;
  public TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
  ?'cluster_subnet_group_name' => string,
  ?'description' => string,
  ?'subnet_group_status' => string,
  ?'subnets' => SubnetList,
  ?'tags' => TagList,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $cluster_subnet_group_name ?? "";
    $this->description = $description ?? "";
    $this->subnet_group_status = $subnet_group_status ?? "";
    $this->subnets = $subnets ?? [];
    $this->tags = $tags ?? [];
    $this->vpc_id = $vpc_id ?? "";
  }
}

class ClusterSubnetGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSubnetGroupMessage {
  public ClusterSubnetGroups $cluster_subnet_groups;
  public string $marker;

  public function __construct(shape(
  ?'cluster_subnet_groups' => ClusterSubnetGroups,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cluster_subnet_groups = $cluster_subnet_groups ?? [];
    $this->marker = $marker ?? "";
  }
}

class ClusterSubnetGroupNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSubnetGroupQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ClusterSubnetGroups = vec<ClusterSubnetGroup>;

class ClusterSubnetQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterVersion {
  public string $cluster_parameter_group_family;
  public string $cluster_version;
  public string $description;

  public function __construct(shape(
  ?'cluster_parameter_group_family' => string,
  ?'cluster_version' => string,
  ?'description' => string,
  ) $s = shape()) {
    $this->cluster_parameter_group_family = $cluster_parameter_group_family ?? "";
    $this->cluster_version = $cluster_version ?? "";
    $this->description = $description ?? "";
  }
}

type ClusterVersionList = vec<ClusterVersion>;

class ClusterVersionsMessage {
  public ClusterVersionList $cluster_versions;
  public string $marker;

  public function __construct(shape(
  ?'cluster_versions' => ClusterVersionList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->cluster_versions = $cluster_versions ?? [];
    $this->marker = $marker ?? "";
  }
}

class ClustersMessage {
  public ClusterList $clusters;
  public string $marker;

  public function __construct(shape(
  ?'clusters' => ClusterList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->clusters = $clusters ?? [];
    $this->marker = $marker ?? "";
  }
}

class CopyClusterSnapshotMessage {
  public IntegerOptional $manual_snapshot_retention_period;
  public string $source_snapshot_cluster_identifier;
  public string $source_snapshot_identifier;
  public string $target_snapshot_identifier;

  public function __construct(shape(
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'source_snapshot_cluster_identifier' => string,
  ?'source_snapshot_identifier' => string,
  ?'target_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->source_snapshot_cluster_identifier = $source_snapshot_cluster_identifier ?? "";
    $this->source_snapshot_identifier = $source_snapshot_identifier ?? "";
    $this->target_snapshot_identifier = $target_snapshot_identifier ?? "";
  }
}

class CopyClusterSnapshotResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class CopyToRegionDisabledFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateClusterMessage {
  public string $additional_info;
  public BooleanOptional $allow_version_upgrade;
  public IntegerOptional $automated_snapshot_retention_period;
  public string $availability_zone;
  public string $cluster_identifier;
  public string $cluster_parameter_group_name;
  public ClusterSecurityGroupNameList $cluster_security_groups;
  public string $cluster_subnet_group_name;
  public string $cluster_type;
  public string $cluster_version;
  public string $db_name;
  public string $elastic_ip;
  public BooleanOptional $encrypted;
  public BooleanOptional $enhanced_vpc_routing;
  public string $hsm_client_certificate_identifier;
  public string $hsm_configuration_identifier;
  public IamRoleArnList $iam_roles;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public IntegerOptional $manual_snapshot_retention_period;
  public string $master_user_password;
  public string $master_username;
  public string $node_type;
  public IntegerOptional $number_of_nodes;
  public IntegerOptional $port;
  public string $preferred_maintenance_window;
  public BooleanOptional $publicly_accessible;
  public string $snapshot_schedule_identifier;
  public TagList $tags;
  public VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
  ?'additional_info' => string,
  ?'allow_version_upgrade' => BooleanOptional,
  ?'automated_snapshot_retention_period' => IntegerOptional,
  ?'availability_zone' => string,
  ?'cluster_identifier' => string,
  ?'cluster_parameter_group_name' => string,
  ?'cluster_security_groups' => ClusterSecurityGroupNameList,
  ?'cluster_subnet_group_name' => string,
  ?'cluster_type' => string,
  ?'cluster_version' => string,
  ?'db_name' => string,
  ?'elastic_ip' => string,
  ?'encrypted' => BooleanOptional,
  ?'enhanced_vpc_routing' => BooleanOptional,
  ?'hsm_client_certificate_identifier' => string,
  ?'hsm_configuration_identifier' => string,
  ?'iam_roles' => IamRoleArnList,
  ?'kms_key_id' => string,
  ?'maintenance_track_name' => string,
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'master_user_password' => string,
  ?'master_username' => string,
  ?'node_type' => string,
  ?'number_of_nodes' => IntegerOptional,
  ?'port' => IntegerOptional,
  ?'preferred_maintenance_window' => string,
  ?'publicly_accessible' => BooleanOptional,
  ?'snapshot_schedule_identifier' => string,
  ?'tags' => TagList,
  ?'vpc_security_group_ids' => VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->additional_info = $additional_info ?? "";
    $this->allow_version_upgrade = $allow_version_upgrade ?? false;
    $this->automated_snapshot_retention_period = $automated_snapshot_retention_period ?? 0;
    $this->availability_zone = $availability_zone ?? "";
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->cluster_parameter_group_name = $cluster_parameter_group_name ?? "";
    $this->cluster_security_groups = $cluster_security_groups ?? [];
    $this->cluster_subnet_group_name = $cluster_subnet_group_name ?? "";
    $this->cluster_type = $cluster_type ?? "";
    $this->cluster_version = $cluster_version ?? "";
    $this->db_name = $db_name ?? "";
    $this->elastic_ip = $elastic_ip ?? "";
    $this->encrypted = $encrypted ?? false;
    $this->enhanced_vpc_routing = $enhanced_vpc_routing ?? false;
    $this->hsm_client_certificate_identifier = $hsm_client_certificate_identifier ?? "";
    $this->hsm_configuration_identifier = $hsm_configuration_identifier ?? "";
    $this->iam_roles = $iam_roles ?? [];
    $this->kms_key_id = $kms_key_id ?? "";
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->master_user_password = $master_user_password ?? "";
    $this->master_username = $master_username ?? "";
    $this->node_type = $node_type ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->port = $port ?? 0;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? "";
    $this->publicly_accessible = $publicly_accessible ?? false;
    $this->snapshot_schedule_identifier = $snapshot_schedule_identifier ?? "";
    $this->tags = $tags ?? [];
    $this->vpc_security_group_ids = $vpc_security_group_ids ?? [];
  }
}

class CreateClusterParameterGroupMessage {
  public string $description;
  public string $parameter_group_family;
  public string $parameter_group_name;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => string,
  ?'parameter_group_family' => string,
  ?'parameter_group_name' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->parameter_group_family = $parameter_group_family ?? "";
    $this->parameter_group_name = $parameter_group_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateClusterParameterGroupResult {
  public ClusterParameterGroup $cluster_parameter_group;

  public function __construct(shape(
  ?'cluster_parameter_group' => ClusterParameterGroup,
  ) $s = shape()) {
    $this->cluster_parameter_group = $cluster_parameter_group ?? null;
  }
}

class CreateClusterResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class CreateClusterSecurityGroupMessage {
  public string $cluster_security_group_name;
  public string $description;
  public TagList $tags;

  public function __construct(shape(
  ?'cluster_security_group_name' => string,
  ?'description' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->cluster_security_group_name = $cluster_security_group_name ?? "";
    $this->description = $description ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateClusterSecurityGroupResult {
  public ClusterSecurityGroup $cluster_security_group;

  public function __construct(shape(
  ?'cluster_security_group' => ClusterSecurityGroup,
  ) $s = shape()) {
    $this->cluster_security_group = $cluster_security_group ?? null;
  }
}

class CreateClusterSnapshotMessage {
  public string $cluster_identifier;
  public IntegerOptional $manual_snapshot_retention_period;
  public string $snapshot_identifier;
  public TagList $tags;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'snapshot_identifier' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->snapshot_identifier = $snapshot_identifier ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateClusterSnapshotResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class CreateClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;
  public string $description;
  public SubnetIdentifierList $subnet_ids;
  public TagList $tags;

  public function __construct(shape(
  ?'cluster_subnet_group_name' => string,
  ?'description' => string,
  ?'subnet_ids' => SubnetIdentifierList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $cluster_subnet_group_name ?? "";
    $this->description = $description ?? "";
    $this->subnet_ids = $subnet_ids ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateClusterSubnetGroupResult {
  public ClusterSubnetGroup $cluster_subnet_group;

  public function __construct(shape(
  ?'cluster_subnet_group' => ClusterSubnetGroup,
  ) $s = shape()) {
    $this->cluster_subnet_group = $cluster_subnet_group ?? null;
  }
}

class CreateEventSubscriptionMessage {
  public BooleanOptional $enabled;
  public EventCategoriesList $event_categories;
  public string $severity;
  public string $sns_topic_arn;
  public SourceIdsList $source_ids;
  public string $source_type;
  public string $subscription_name;
  public TagList $tags;

  public function __construct(shape(
  ?'enabled' => BooleanOptional,
  ?'event_categories' => EventCategoriesList,
  ?'severity' => string,
  ?'sns_topic_arn' => string,
  ?'source_ids' => SourceIdsList,
  ?'source_type' => string,
  ?'subscription_name' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
    $this->event_categories = $event_categories ?? [];
    $this->severity = $severity ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
    $this->source_ids = $source_ids ?? [];
    $this->source_type = $source_type ?? "";
    $this->subscription_name = $subscription_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateEventSubscriptionResult {
  public EventSubscription $event_subscription;

  public function __construct(shape(
  ?'event_subscription' => EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $event_subscription ?? null;
  }
}

class CreateHsmClientCertificateMessage {
  public string $hsm_client_certificate_identifier;
  public TagList $tags;

  public function __construct(shape(
  ?'hsm_client_certificate_identifier' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $hsm_client_certificate_identifier ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateHsmClientCertificateResult {
  public HsmClientCertificate $hsm_client_certificate;

  public function __construct(shape(
  ?'hsm_client_certificate' => HsmClientCertificate,
  ) $s = shape()) {
    $this->hsm_client_certificate = $hsm_client_certificate ?? null;
  }
}

class CreateHsmConfigurationMessage {
  public string $description;
  public string $hsm_configuration_identifier;
  public string $hsm_ip_address;
  public string $hsm_partition_name;
  public string $hsm_partition_password;
  public string $hsm_server_public_certificate;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => string,
  ?'hsm_configuration_identifier' => string,
  ?'hsm_ip_address' => string,
  ?'hsm_partition_name' => string,
  ?'hsm_partition_password' => string,
  ?'hsm_server_public_certificate' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->hsm_configuration_identifier = $hsm_configuration_identifier ?? "";
    $this->hsm_ip_address = $hsm_ip_address ?? "";
    $this->hsm_partition_name = $hsm_partition_name ?? "";
    $this->hsm_partition_password = $hsm_partition_password ?? "";
    $this->hsm_server_public_certificate = $hsm_server_public_certificate ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateHsmConfigurationResult {
  public HsmConfiguration $hsm_configuration;

  public function __construct(shape(
  ?'hsm_configuration' => HsmConfiguration,
  ) $s = shape()) {
    $this->hsm_configuration = $hsm_configuration ?? null;
  }
}

class CreateScheduledActionMessage {
  public BooleanOptional $enable;
  public TStamp $end_time;
  public string $iam_role;
  public string $schedule;
  public string $scheduled_action_description;
  public string $scheduled_action_name;
  public TStamp $start_time;
  public ScheduledActionType $target_action;

  public function __construct(shape(
  ?'enable' => BooleanOptional,
  ?'end_time' => TStamp,
  ?'iam_role' => string,
  ?'schedule' => string,
  ?'scheduled_action_description' => string,
  ?'scheduled_action_name' => string,
  ?'start_time' => TStamp,
  ?'target_action' => ScheduledActionType,
  ) $s = shape()) {
    $this->enable = $enable ?? false;
    $this->end_time = $end_time ?? 0;
    $this->iam_role = $iam_role ?? "";
    $this->schedule = $schedule ?? "";
    $this->scheduled_action_description = $scheduled_action_description ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->start_time = $start_time ?? 0;
    $this->target_action = $target_action ?? null;
  }
}

class CreateSnapshotCopyGrantMessage {
  public string $kms_key_id;
  public string $snapshot_copy_grant_name;
  public TagList $tags;

  public function __construct(shape(
  ?'kms_key_id' => string,
  ?'snapshot_copy_grant_name' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->snapshot_copy_grant_name = $snapshot_copy_grant_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateSnapshotCopyGrantResult {
  public SnapshotCopyGrant $snapshot_copy_grant;

  public function __construct(shape(
  ?'snapshot_copy_grant' => SnapshotCopyGrant,
  ) $s = shape()) {
    $this->snapshot_copy_grant = $snapshot_copy_grant ?? null;
  }
}

class CreateSnapshotScheduleMessage {
  public BooleanOptional $dry_run;
  public IntegerOptional $next_invocations;
  public ScheduleDefinitionList $schedule_definitions;
  public string $schedule_description;
  public string $schedule_identifier;
  public TagList $tags;

  public function __construct(shape(
  ?'dry_run' => BooleanOptional,
  ?'next_invocations' => IntegerOptional,
  ?'schedule_definitions' => ScheduleDefinitionList,
  ?'schedule_description' => string,
  ?'schedule_identifier' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->dry_run = $dry_run ?? false;
    $this->next_invocations = $next_invocations ?? 0;
    $this->schedule_definitions = $schedule_definitions ?? [];
    $this->schedule_description = $schedule_description ?? "";
    $this->schedule_identifier = $schedule_identifier ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateTagsMessage {
  public string $resource_name;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_name' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_name = $resource_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateUsageLimitMessage {
  public Long $amount;
  public UsageLimitBreachAction $breach_action;
  public string $cluster_identifier;
  public UsageLimitFeatureType $feature_type;
  public UsageLimitLimitType $limit_type;
  public UsageLimitPeriod $period;
  public TagList $tags;

  public function __construct(shape(
  ?'amount' => Long,
  ?'breach_action' => UsageLimitBreachAction,
  ?'cluster_identifier' => string,
  ?'feature_type' => UsageLimitFeatureType,
  ?'limit_type' => UsageLimitLimitType,
  ?'period' => UsageLimitPeriod,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->amount = $amount ?? 0;
    $this->breach_action = $breach_action ?? "";
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->feature_type = $feature_type ?? "";
    $this->limit_type = $limit_type ?? "";
    $this->period = $period ?? "";
    $this->tags = $tags ?? [];
  }
}

class CustomerStorageMessage {
  public Double $total_backup_size_in_mega_bytes;
  public Double $total_provisioned_storage_in_mega_bytes;

  public function __construct(shape(
  ?'total_backup_size_in_mega_bytes' => Double,
  ?'total_provisioned_storage_in_mega_bytes' => Double,
  ) $s = shape()) {
    $this->total_backup_size_in_mega_bytes = $total_backup_size_in_mega_bytes ?? 0.0;
    $this->total_provisioned_storage_in_mega_bytes = $total_provisioned_storage_in_mega_bytes ?? 0.0;
  }
}

class DataTransferProgress {
  public DoubleOptional $current_rate_in_mega_bytes_per_second;
  public Long $data_transferred_in_mega_bytes;
  public LongOptional $elapsed_time_in_seconds;
  public LongOptional $estimated_time_to_completion_in_seconds;
  public string $status;
  public Long $total_data_in_mega_bytes;

  public function __construct(shape(
  ?'current_rate_in_mega_bytes_per_second' => DoubleOptional,
  ?'data_transferred_in_mega_bytes' => Long,
  ?'elapsed_time_in_seconds' => LongOptional,
  ?'estimated_time_to_completion_in_seconds' => LongOptional,
  ?'status' => string,
  ?'total_data_in_mega_bytes' => Long,
  ) $s = shape()) {
    $this->current_rate_in_mega_bytes_per_second = $current_rate_in_mega_bytes_per_second ?? 0.0;
    $this->data_transferred_in_mega_bytes = $data_transferred_in_mega_bytes ?? 0;
    $this->elapsed_time_in_seconds = $elapsed_time_in_seconds ?? 0;
    $this->estimated_time_to_completion_in_seconds = $estimated_time_to_completion_in_seconds ?? 0;
    $this->status = $status ?? "";
    $this->total_data_in_mega_bytes = $total_data_in_mega_bytes ?? 0;
  }
}

type DbGroupList = vec<String>;

class DefaultClusterParameters {
  public string $marker;
  public string $parameter_group_family;
  public ParametersList $parameters;

  public function __construct(shape(
  ?'marker' => string,
  ?'parameter_group_family' => string,
  ?'parameters' => ParametersList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->parameter_group_family = $parameter_group_family ?? "";
    $this->parameters = $parameters ?? [];
  }
}

class DeferredMaintenanceWindow {
  public TStamp $defer_maintenance_end_time;
  public string $defer_maintenance_identifier;
  public TStamp $defer_maintenance_start_time;

  public function __construct(shape(
  ?'defer_maintenance_end_time' => TStamp,
  ?'defer_maintenance_identifier' => string,
  ?'defer_maintenance_start_time' => TStamp,
  ) $s = shape()) {
    $this->defer_maintenance_end_time = $defer_maintenance_end_time ?? 0;
    $this->defer_maintenance_identifier = $defer_maintenance_identifier ?? "";
    $this->defer_maintenance_start_time = $defer_maintenance_start_time ?? 0;
  }
}

type DeferredMaintenanceWindowsList = vec<DeferredMaintenanceWindow>;

class DeleteClusterMessage {
  public string $cluster_identifier;
  public string $final_cluster_snapshot_identifier;
  public IntegerOptional $final_cluster_snapshot_retention_period;
  public boolean $skip_final_cluster_snapshot;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'final_cluster_snapshot_identifier' => string,
  ?'final_cluster_snapshot_retention_period' => IntegerOptional,
  ?'skip_final_cluster_snapshot' => boolean,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->final_cluster_snapshot_identifier = $final_cluster_snapshot_identifier ?? "";
    $this->final_cluster_snapshot_retention_period = $final_cluster_snapshot_retention_period ?? 0;
    $this->skip_final_cluster_snapshot = $skip_final_cluster_snapshot ?? false;
  }
}

class DeleteClusterParameterGroupMessage {
  public string $parameter_group_name;

  public function __construct(shape(
  ?'parameter_group_name' => string,
  ) $s = shape()) {
    $this->parameter_group_name = $parameter_group_name ?? "";
  }
}

class DeleteClusterResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class DeleteClusterSecurityGroupMessage {
  public string $cluster_security_group_name;

  public function __construct(shape(
  ?'cluster_security_group_name' => string,
  ) $s = shape()) {
    $this->cluster_security_group_name = $cluster_security_group_name ?? "";
  }
}

class DeleteClusterSnapshotMessage {
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;

  public function __construct(shape(
  ?'snapshot_cluster_identifier' => string,
  ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->snapshot_cluster_identifier = $snapshot_cluster_identifier ?? "";
    $this->snapshot_identifier = $snapshot_identifier ?? "";
  }
}

type DeleteClusterSnapshotMessageList = vec<DeleteClusterSnapshotMessage>;

class DeleteClusterSnapshotResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class DeleteClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;

  public function __construct(shape(
  ?'cluster_subnet_group_name' => string,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $cluster_subnet_group_name ?? "";
  }
}

class DeleteEventSubscriptionMessage {
  public string $subscription_name;

  public function __construct(shape(
  ?'subscription_name' => string,
  ) $s = shape()) {
    $this->subscription_name = $subscription_name ?? "";
  }
}

class DeleteHsmClientCertificateMessage {
  public string $hsm_client_certificate_identifier;

  public function __construct(shape(
  ?'hsm_client_certificate_identifier' => string,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $hsm_client_certificate_identifier ?? "";
  }
}

class DeleteHsmConfigurationMessage {
  public string $hsm_configuration_identifier;

  public function __construct(shape(
  ?'hsm_configuration_identifier' => string,
  ) $s = shape()) {
    $this->hsm_configuration_identifier = $hsm_configuration_identifier ?? "";
  }
}

class DeleteScheduledActionMessage {
  public string $scheduled_action_name;

  public function __construct(shape(
  ?'scheduled_action_name' => string,
  ) $s = shape()) {
    $this->scheduled_action_name = $scheduled_action_name ?? "";
  }
}

class DeleteSnapshotCopyGrantMessage {
  public string $snapshot_copy_grant_name;

  public function __construct(shape(
  ?'snapshot_copy_grant_name' => string,
  ) $s = shape()) {
    $this->snapshot_copy_grant_name = $snapshot_copy_grant_name ?? "";
  }
}

class DeleteSnapshotScheduleMessage {
  public string $schedule_identifier;

  public function __construct(shape(
  ?'schedule_identifier' => string,
  ) $s = shape()) {
    $this->schedule_identifier = $schedule_identifier ?? "";
  }
}

class DeleteTagsMessage {
  public string $resource_name;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_name' => string,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_name = $resource_name ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class DeleteUsageLimitMessage {
  public string $usage_limit_id;

  public function __construct(shape(
  ?'usage_limit_id' => string,
  ) $s = shape()) {
    $this->usage_limit_id = $usage_limit_id ?? "";
  }
}

class DependentServiceRequestThrottlingFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DependentServiceUnavailableFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountAttributesMessage {
  public AttributeNameList $attribute_names;

  public function __construct(shape(
  ?'attribute_names' => AttributeNameList,
  ) $s = shape()) {
    $this->attribute_names = $attribute_names ?? [];
  }
}

class DescribeClusterDbRevisionsMessage {
  public string $cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
  }
}

class DescribeClusterParameterGroupsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $parameter_group_name;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'parameter_group_name' => string,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->parameter_group_name = $parameter_group_name ?? "";
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeClusterParametersMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $parameter_group_name;
  public string $source;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'parameter_group_name' => string,
  ?'source' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->parameter_group_name = $parameter_group_name ?? "";
    $this->source = $source ?? "";
  }
}

class DescribeClusterSecurityGroupsMessage {
  public string $cluster_security_group_name;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'cluster_security_group_name' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->cluster_security_group_name = $cluster_security_group_name ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeClusterSnapshotsMessage {
  public BooleanOptional $cluster_exists;
  public string $cluster_identifier;
  public TStamp $end_time;
  public string $marker;
  public IntegerOptional $max_records;
  public string $owner_account;
  public string $snapshot_identifier;
  public string $snapshot_type;
  public SnapshotSortingEntityList $sorting_entities;
  public TStamp $start_time;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'cluster_exists' => BooleanOptional,
  ?'cluster_identifier' => string,
  ?'end_time' => TStamp,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'owner_account' => string,
  ?'snapshot_identifier' => string,
  ?'snapshot_type' => string,
  ?'sorting_entities' => SnapshotSortingEntityList,
  ?'start_time' => TStamp,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->cluster_exists = $cluster_exists ?? false;
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->end_time = $end_time ?? 0;
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->owner_account = $owner_account ?? "";
    $this->snapshot_identifier = $snapshot_identifier ?? "";
    $this->snapshot_type = $snapshot_type ?? "";
    $this->sorting_entities = $sorting_entities ?? [];
    $this->start_time = $start_time ?? 0;
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeClusterSubnetGroupsMessage {
  public string $cluster_subnet_group_name;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'cluster_subnet_group_name' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $cluster_subnet_group_name ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeClusterTracksMessage {
  public string $maintenance_track_name;
  public string $marker;
  public IntegerOptional $max_records;

  public function __construct(shape(
  ?'maintenance_track_name' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ) $s = shape()) {
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
  }
}

class DescribeClusterVersionsMessage {
  public string $cluster_parameter_group_family;
  public string $cluster_version;
  public string $marker;
  public IntegerOptional $max_records;

  public function __construct(shape(
  ?'cluster_parameter_group_family' => string,
  ?'cluster_version' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ) $s = shape()) {
    $this->cluster_parameter_group_family = $cluster_parameter_group_family ?? "";
    $this->cluster_version = $cluster_version ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
  }
}

class DescribeClustersMessage {
  public string $cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeDefaultClusterParametersMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $parameter_group_family;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'parameter_group_family' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->parameter_group_family = $parameter_group_family ?? "";
  }
}

class DescribeDefaultClusterParametersResult {
  public DefaultClusterParameters $default_cluster_parameters;

  public function __construct(shape(
  ?'default_cluster_parameters' => DefaultClusterParameters,
  ) $s = shape()) {
    $this->default_cluster_parameters = $default_cluster_parameters ?? null;
  }
}

class DescribeEventCategoriesMessage {
  public string $source_type;

  public function __construct(shape(
  ?'source_type' => string,
  ) $s = shape()) {
    $this->source_type = $source_type ?? "";
  }
}

class DescribeEventSubscriptionsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $subscription_name;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'subscription_name' => string,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->subscription_name = $subscription_name ?? "";
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
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
    $this->duration = $duration ?? 0;
    $this->end_time = $end_time ?? 0;
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->source_identifier = $source_identifier ?? "";
    $this->source_type = $source_type ?? "";
    $this->start_time = $start_time ?? 0;
  }
}

class DescribeHsmClientCertificatesMessage {
  public string $hsm_client_certificate_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'hsm_client_certificate_identifier' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $hsm_client_certificate_identifier ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeHsmConfigurationsMessage {
  public string $hsm_configuration_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'hsm_configuration_identifier' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->hsm_configuration_identifier = $hsm_configuration_identifier ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeLoggingStatusMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class DescribeNodeConfigurationOptionsMessage {
  public ActionType $action_type;
  public string $cluster_identifier;
  public NodeConfigurationOptionsFilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $owner_account;
  public string $snapshot_identifier;

  public function __construct(shape(
  ?'action_type' => ActionType,
  ?'cluster_identifier' => string,
  ?'filters' => NodeConfigurationOptionsFilterList,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'owner_account' => string,
  ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->action_type = $action_type ?? "";
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->filters = $filters ?? [];
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->owner_account = $owner_account ?? "";
    $this->snapshot_identifier = $snapshot_identifier ?? "";
  }
}

class DescribeOrderableClusterOptionsMessage {
  public string $cluster_version;
  public string $marker;
  public IntegerOptional $max_records;
  public string $node_type;

  public function __construct(shape(
  ?'cluster_version' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'node_type' => string,
  ) $s = shape()) {
    $this->cluster_version = $cluster_version ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->node_type = $node_type ?? "";
  }
}

class DescribeReservedNodeOfferingsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $reserved_node_offering_id;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'reserved_node_offering_id' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->reserved_node_offering_id = $reserved_node_offering_id ?? "";
  }
}

class DescribeReservedNodesMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $reserved_node_id;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'reserved_node_id' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->reserved_node_id = $reserved_node_id ?? "";
  }
}

class DescribeResizeMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class DescribeScheduledActionsMessage {
  public BooleanOptional $active;
  public TStamp $end_time;
  public ScheduledActionFilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $scheduled_action_name;
  public TStamp $start_time;
  public ScheduledActionTypeValues $target_action_type;

  public function __construct(shape(
  ?'active' => BooleanOptional,
  ?'end_time' => TStamp,
  ?'filters' => ScheduledActionFilterList,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'scheduled_action_name' => string,
  ?'start_time' => TStamp,
  ?'target_action_type' => ScheduledActionTypeValues,
  ) $s = shape()) {
    $this->active = $active ?? false;
    $this->end_time = $end_time ?? 0;
    $this->filters = $filters ?? [];
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->start_time = $start_time ?? 0;
    $this->target_action_type = $target_action_type ?? "";
  }
}

class DescribeSnapshotCopyGrantsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $snapshot_copy_grant_name;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'snapshot_copy_grant_name' => string,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->snapshot_copy_grant_name = $snapshot_copy_grant_name ?? "";
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeSnapshotSchedulesMessage {
  public string $cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public string $schedule_identifier;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'schedule_identifier' => string,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->schedule_identifier = $schedule_identifier ?? "";
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeSnapshotSchedulesOutputMessage {
  public string $marker;
  public SnapshotScheduleList $snapshot_schedules;

  public function __construct(shape(
  ?'marker' => string,
  ?'snapshot_schedules' => SnapshotScheduleList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->snapshot_schedules = $snapshot_schedules ?? [];
  }
}

class DescribeTableRestoreStatusMessage {
  public string $cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public string $table_restore_request_id;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'table_restore_request_id' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->table_restore_request_id = $table_restore_request_id ?? "";
  }
}

class DescribeTagsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $resource_name;
  public string $resource_type;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'resource_name' => string,
  ?'resource_type' => string,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->resource_name = $resource_name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
  }
}

class DescribeUsageLimitsMessage {
  public string $cluster_identifier;
  public UsageLimitFeatureType $feature_type;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
  public string $usage_limit_id;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'feature_type' => UsageLimitFeatureType,
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'tag_keys' => TagKeyList,
  ?'tag_values' => TagValueList,
  ?'usage_limit_id' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->feature_type = $feature_type ?? "";
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->tag_keys = $tag_keys ?? [];
    $this->tag_values = $tag_values ?? [];
    $this->usage_limit_id = $usage_limit_id ?? "";
  }
}

class DisableLoggingMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class DisableSnapshotCopyMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class DisableSnapshotCopyResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

type Double = float;

type DoubleOptional = float;

class EC2SecurityGroup {
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $status;
  public TagList $tags;

  public function __construct(shape(
  ?'ec_2_security_group_name' => string,
  ?'ec_2_security_group_owner_id' => string,
  ?'status' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->ec_2_security_group_name = $ec_2_security_group_name ?? "";
    $this->ec_2_security_group_owner_id = $ec_2_security_group_owner_id ?? "";
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
  }
}

type EC2SecurityGroupList = vec<EC2SecurityGroup>;

class ElasticIpStatus {
  public string $elastic_ip;
  public string $status;

  public function __construct(shape(
  ?'elastic_ip' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->elastic_ip = $elastic_ip ?? "";
    $this->status = $status ?? "";
  }
}

type EligibleTracksToUpdateList = vec<UpdateTarget>;

class EnableLoggingMessage {
  public string $bucket_name;
  public string $cluster_identifier;
  public string $s_3_key_prefix;

  public function __construct(shape(
  ?'bucket_name' => string,
  ?'cluster_identifier' => string,
  ?'s_3_key_prefix' => string,
  ) $s = shape()) {
    $this->bucket_name = $bucket_name ?? "";
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->s_3_key_prefix = $s_3_key_prefix ?? "";
  }
}

class EnableSnapshotCopyMessage {
  public string $cluster_identifier;
  public string $destination_region;
  public IntegerOptional $manual_snapshot_retention_period;
  public IntegerOptional $retention_period;
  public string $snapshot_copy_grant_name;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'destination_region' => string,
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'retention_period' => IntegerOptional,
  ?'snapshot_copy_grant_name' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->destination_region = $destination_region ?? "";
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->retention_period = $retention_period ?? 0;
    $this->snapshot_copy_grant_name = $snapshot_copy_grant_name ?? "";
  }
}

class EnableSnapshotCopyResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class Endpoint {
  public string $address;
  public int $port;

  public function __construct(shape(
  ?'address' => string,
  ?'port' => int,
  ) $s = shape()) {
    $this->address = $address ?? "";
    $this->port = $port ?? 0;
  }
}

class Event {
  public TStamp $date;
  public EventCategoriesList $event_categories;
  public string $event_id;
  public string $message;
  public string $severity;
  public string $source_identifier;
  public SourceType $source_type;

  public function __construct(shape(
  ?'date' => TStamp,
  ?'event_categories' => EventCategoriesList,
  ?'event_id' => string,
  ?'message' => string,
  ?'severity' => string,
  ?'source_identifier' => string,
  ?'source_type' => SourceType,
  ) $s = shape()) {
    $this->date = $date ?? 0;
    $this->event_categories = $event_categories ?? [];
    $this->event_id = $event_id ?? "";
    $this->message = $message ?? "";
    $this->severity = $severity ?? "";
    $this->source_identifier = $source_identifier ?? "";
    $this->source_type = $source_type ?? "";
  }
}

type EventCategoriesList = vec<String>;

class EventCategoriesMap {
  public EventInfoMapList $events;
  public string $source_type;

  public function __construct(shape(
  ?'events' => EventInfoMapList,
  ?'source_type' => string,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->source_type = $source_type ?? "";
  }
}

type EventCategoriesMapList = vec<EventCategoriesMap>;

class EventCategoriesMessage {
  public EventCategoriesMapList $event_categories_map_list;

  public function __construct(shape(
  ?'event_categories_map_list' => EventCategoriesMapList,
  ) $s = shape()) {
    $this->event_categories_map_list = $event_categories_map_list ?? [];
  }
}

class EventInfoMap {
  public EventCategoriesList $event_categories;
  public string $event_description;
  public string $event_id;
  public string $severity;

  public function __construct(shape(
  ?'event_categories' => EventCategoriesList,
  ?'event_description' => string,
  ?'event_id' => string,
  ?'severity' => string,
  ) $s = shape()) {
    $this->event_categories = $event_categories ?? [];
    $this->event_description = $event_description ?? "";
    $this->event_id = $event_id ?? "";
    $this->severity = $severity ?? "";
  }
}

type EventInfoMapList = vec<EventInfoMap>;

type EventList = vec<Event>;

class EventSubscription {
  public string $cust_subscription_id;
  public string $customer_aws_id;
  public boolean $enabled;
  public EventCategoriesList $event_categories_list;
  public string $severity;
  public string $sns_topic_arn;
  public SourceIdsList $source_ids_list;
  public string $source_type;
  public string $status;
  public TStamp $subscription_creation_time;
  public TagList $tags;

  public function __construct(shape(
  ?'cust_subscription_id' => string,
  ?'customer_aws_id' => string,
  ?'enabled' => boolean,
  ?'event_categories_list' => EventCategoriesList,
  ?'severity' => string,
  ?'sns_topic_arn' => string,
  ?'source_ids_list' => SourceIdsList,
  ?'source_type' => string,
  ?'status' => string,
  ?'subscription_creation_time' => TStamp,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->cust_subscription_id = $cust_subscription_id ?? "";
    $this->customer_aws_id = $customer_aws_id ?? "";
    $this->enabled = $enabled ?? false;
    $this->event_categories_list = $event_categories_list ?? [];
    $this->severity = $severity ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
    $this->source_ids_list = $source_ids_list ?? [];
    $this->source_type = $source_type ?? "";
    $this->status = $status ?? "";
    $this->subscription_creation_time = $subscription_creation_time ?? 0;
    $this->tags = $tags ?? [];
  }
}

class EventSubscriptionQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EventSubscriptionsList = vec<EventSubscription>;

class EventSubscriptionsMessage {
  public EventSubscriptionsList $event_subscriptions_list;
  public string $marker;

  public function __construct(shape(
  ?'event_subscriptions_list' => EventSubscriptionsList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->event_subscriptions_list = $event_subscriptions_list ?? [];
    $this->marker = $marker ?? "";
  }
}

class EventsMessage {
  public EventList $events;
  public string $marker;

  public function __construct(shape(
  ?'events' => EventList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->marker = $marker ?? "";
  }
}

class GetClusterCredentialsMessage {
  public BooleanOptional $auto_create;
  public string $cluster_identifier;
  public DbGroupList $db_groups;
  public string $db_name;
  public string $db_user;
  public IntegerOptional $duration_seconds;

  public function __construct(shape(
  ?'auto_create' => BooleanOptional,
  ?'cluster_identifier' => string,
  ?'db_groups' => DbGroupList,
  ?'db_name' => string,
  ?'db_user' => string,
  ?'duration_seconds' => IntegerOptional,
  ) $s = shape()) {
    $this->auto_create = $auto_create ?? false;
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->db_groups = $db_groups ?? [];
    $this->db_name = $db_name ?? "";
    $this->db_user = $db_user ?? "";
    $this->duration_seconds = $duration_seconds ?? 0;
  }
}

class GetReservedNodeExchangeOfferingsInputMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $reserved_node_id;

  public function __construct(shape(
  ?'marker' => string,
  ?'max_records' => IntegerOptional,
  ?'reserved_node_id' => string,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_records = $max_records ?? 0;
    $this->reserved_node_id = $reserved_node_id ?? "";
  }
}

class GetReservedNodeExchangeOfferingsOutputMessage {
  public string $marker;
  public ReservedNodeOfferingList $reserved_node_offerings;

  public function __construct(shape(
  ?'marker' => string,
  ?'reserved_node_offerings' => ReservedNodeOfferingList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->reserved_node_offerings = $reserved_node_offerings ?? [];
  }
}

class HsmClientCertificate {
  public string $hsm_client_certificate_identifier;
  public string $hsm_client_certificate_public_key;
  public TagList $tags;

  public function __construct(shape(
  ?'hsm_client_certificate_identifier' => string,
  ?'hsm_client_certificate_public_key' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $hsm_client_certificate_identifier ?? "";
    $this->hsm_client_certificate_public_key = $hsm_client_certificate_public_key ?? "";
    $this->tags = $tags ?? [];
  }
}

class HsmClientCertificateAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type HsmClientCertificateList = vec<HsmClientCertificate>;

class HsmClientCertificateMessage {
  public HsmClientCertificateList $hsm_client_certificates;
  public string $marker;

  public function __construct(shape(
  ?'hsm_client_certificates' => HsmClientCertificateList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->hsm_client_certificates = $hsm_client_certificates ?? [];
    $this->marker = $marker ?? "";
  }
}

class HsmClientCertificateNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class HsmClientCertificateQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class HsmConfiguration {
  public string $description;
  public string $hsm_configuration_identifier;
  public string $hsm_ip_address;
  public string $hsm_partition_name;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => string,
  ?'hsm_configuration_identifier' => string,
  ?'hsm_ip_address' => string,
  ?'hsm_partition_name' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->hsm_configuration_identifier = $hsm_configuration_identifier ?? "";
    $this->hsm_ip_address = $hsm_ip_address ?? "";
    $this->hsm_partition_name = $hsm_partition_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class HsmConfigurationAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type HsmConfigurationList = vec<HsmConfiguration>;

class HsmConfigurationMessage {
  public HsmConfigurationList $hsm_configurations;
  public string $marker;

  public function __construct(shape(
  ?'hsm_configurations' => HsmConfigurationList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->hsm_configurations = $hsm_configurations ?? [];
    $this->marker = $marker ?? "";
  }
}

class HsmConfigurationNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class HsmConfigurationQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class HsmStatus {
  public string $hsm_client_certificate_identifier;
  public string $hsm_configuration_identifier;
  public string $status;

  public function __construct(shape(
  ?'hsm_client_certificate_identifier' => string,
  ?'hsm_configuration_identifier' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $hsm_client_certificate_identifier ?? "";
    $this->hsm_configuration_identifier = $hsm_configuration_identifier ?? "";
    $this->status = $status ?? "";
  }
}

class IPRange {
  public string $cidrip;
  public string $status;
  public TagList $tags;

  public function __construct(shape(
  ?'cidrip' => string,
  ?'status' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->cidrip = $cidrip ?? "";
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
  }
}

type IPRangeList = vec<IPRange>;

type IamRoleArnList = vec<String>;

type ImportTablesCompleted = vec<String>;

type ImportTablesInProgress = vec<String>;

type ImportTablesNotStarted = vec<String>;

class InProgressTableRestoreQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IncompatibleOrderableOptions {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientClusterCapacityFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InsufficientS3BucketPolicyFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Integer = int;

type IntegerOptional = int;

class InvalidClusterParameterGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClusterSecurityGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClusterSnapshotScheduleStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClusterSnapshotStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClusterStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClusterSubnetGroupStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClusterSubnetStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidClusterTrackFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidElasticIpFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidHsmClientCertificateStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidHsmConfigurationStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidReservedNodeStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRestoreFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRetentionPeriodFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidS3BucketNameFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidS3KeyPrefixFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidScheduleFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidScheduledActionFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSnapshotCopyGrantStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSubnet {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSubscriptionStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTableRestoreArgumentFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTagFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidUsageLimitFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidVPCNetworkStateFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LimitExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LoggingStatus {
  public string $bucket_name;
  public string $last_failure_message;
  public TStamp $last_failure_time;
  public TStamp $last_successful_delivery_time;
  public boolean $logging_enabled;
  public string $s_3_key_prefix;

  public function __construct(shape(
  ?'bucket_name' => string,
  ?'last_failure_message' => string,
  ?'last_failure_time' => TStamp,
  ?'last_successful_delivery_time' => TStamp,
  ?'logging_enabled' => boolean,
  ?'s_3_key_prefix' => string,
  ) $s = shape()) {
    $this->bucket_name = $bucket_name ?? "";
    $this->last_failure_message = $last_failure_message ?? "";
    $this->last_failure_time = $last_failure_time ?? 0;
    $this->last_successful_delivery_time = $last_successful_delivery_time ?? 0;
    $this->logging_enabled = $logging_enabled ?? false;
    $this->s_3_key_prefix = $s_3_key_prefix ?? "";
  }
}

type Long = int;

type LongOptional = int;

class MaintenanceTrack {
  public string $database_version;
  public string $maintenance_track_name;
  public EligibleTracksToUpdateList $update_targets;

  public function __construct(shape(
  ?'database_version' => string,
  ?'maintenance_track_name' => string,
  ?'update_targets' => EligibleTracksToUpdateList,
  ) $s = shape()) {
    $this->database_version = $database_version ?? "";
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->update_targets = $update_targets ?? [];
  }
}

type Mode = string;

class ModifyClusterDbRevisionMessage {
  public string $cluster_identifier;
  public string $revision_target;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'revision_target' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->revision_target = $revision_target ?? "";
  }
}

class ModifyClusterDbRevisionResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class ModifyClusterIamRolesMessage {
  public IamRoleArnList $add_iam_roles;
  public string $cluster_identifier;
  public IamRoleArnList $remove_iam_roles;

  public function __construct(shape(
  ?'add_iam_roles' => IamRoleArnList,
  ?'cluster_identifier' => string,
  ?'remove_iam_roles' => IamRoleArnList,
  ) $s = shape()) {
    $this->add_iam_roles = $add_iam_roles ?? [];
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->remove_iam_roles = $remove_iam_roles ?? [];
  }
}

class ModifyClusterIamRolesResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class ModifyClusterMaintenanceMessage {
  public string $cluster_identifier;
  public BooleanOptional $defer_maintenance;
  public IntegerOptional $defer_maintenance_duration;
  public TStamp $defer_maintenance_end_time;
  public string $defer_maintenance_identifier;
  public TStamp $defer_maintenance_start_time;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'defer_maintenance' => BooleanOptional,
  ?'defer_maintenance_duration' => IntegerOptional,
  ?'defer_maintenance_end_time' => TStamp,
  ?'defer_maintenance_identifier' => string,
  ?'defer_maintenance_start_time' => TStamp,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->defer_maintenance = $defer_maintenance ?? false;
    $this->defer_maintenance_duration = $defer_maintenance_duration ?? 0;
    $this->defer_maintenance_end_time = $defer_maintenance_end_time ?? 0;
    $this->defer_maintenance_identifier = $defer_maintenance_identifier ?? "";
    $this->defer_maintenance_start_time = $defer_maintenance_start_time ?? 0;
  }
}

class ModifyClusterMaintenanceResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class ModifyClusterMessage {
  public BooleanOptional $allow_version_upgrade;
  public IntegerOptional $automated_snapshot_retention_period;
  public string $cluster_identifier;
  public string $cluster_parameter_group_name;
  public ClusterSecurityGroupNameList $cluster_security_groups;
  public string $cluster_type;
  public string $cluster_version;
  public string $elastic_ip;
  public BooleanOptional $encrypted;
  public BooleanOptional $enhanced_vpc_routing;
  public string $hsm_client_certificate_identifier;
  public string $hsm_configuration_identifier;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public IntegerOptional $manual_snapshot_retention_period;
  public string $master_user_password;
  public string $new_cluster_identifier;
  public string $node_type;
  public IntegerOptional $number_of_nodes;
  public string $preferred_maintenance_window;
  public BooleanOptional $publicly_accessible;
  public VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
  ?'allow_version_upgrade' => BooleanOptional,
  ?'automated_snapshot_retention_period' => IntegerOptional,
  ?'cluster_identifier' => string,
  ?'cluster_parameter_group_name' => string,
  ?'cluster_security_groups' => ClusterSecurityGroupNameList,
  ?'cluster_type' => string,
  ?'cluster_version' => string,
  ?'elastic_ip' => string,
  ?'encrypted' => BooleanOptional,
  ?'enhanced_vpc_routing' => BooleanOptional,
  ?'hsm_client_certificate_identifier' => string,
  ?'hsm_configuration_identifier' => string,
  ?'kms_key_id' => string,
  ?'maintenance_track_name' => string,
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'master_user_password' => string,
  ?'new_cluster_identifier' => string,
  ?'node_type' => string,
  ?'number_of_nodes' => IntegerOptional,
  ?'preferred_maintenance_window' => string,
  ?'publicly_accessible' => BooleanOptional,
  ?'vpc_security_group_ids' => VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->allow_version_upgrade = $allow_version_upgrade ?? false;
    $this->automated_snapshot_retention_period = $automated_snapshot_retention_period ?? 0;
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->cluster_parameter_group_name = $cluster_parameter_group_name ?? "";
    $this->cluster_security_groups = $cluster_security_groups ?? [];
    $this->cluster_type = $cluster_type ?? "";
    $this->cluster_version = $cluster_version ?? "";
    $this->elastic_ip = $elastic_ip ?? "";
    $this->encrypted = $encrypted ?? false;
    $this->enhanced_vpc_routing = $enhanced_vpc_routing ?? false;
    $this->hsm_client_certificate_identifier = $hsm_client_certificate_identifier ?? "";
    $this->hsm_configuration_identifier = $hsm_configuration_identifier ?? "";
    $this->kms_key_id = $kms_key_id ?? "";
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->master_user_password = $master_user_password ?? "";
    $this->new_cluster_identifier = $new_cluster_identifier ?? "";
    $this->node_type = $node_type ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? "";
    $this->publicly_accessible = $publicly_accessible ?? false;
    $this->vpc_security_group_ids = $vpc_security_group_ids ?? [];
  }
}

class ModifyClusterParameterGroupMessage {
  public string $parameter_group_name;
  public ParametersList $parameters;

  public function __construct(shape(
  ?'parameter_group_name' => string,
  ?'parameters' => ParametersList,
  ) $s = shape()) {
    $this->parameter_group_name = $parameter_group_name ?? "";
    $this->parameters = $parameters ?? [];
  }
}

class ModifyClusterResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class ModifyClusterSnapshotMessage {
  public boolean $force;
  public IntegerOptional $manual_snapshot_retention_period;
  public string $snapshot_identifier;

  public function __construct(shape(
  ?'force' => boolean,
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->force = $force ?? false;
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->snapshot_identifier = $snapshot_identifier ?? "";
  }
}

class ModifyClusterSnapshotResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class ModifyClusterSnapshotScheduleMessage {
  public string $cluster_identifier;
  public BooleanOptional $disassociate_schedule;
  public string $schedule_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'disassociate_schedule' => BooleanOptional,
  ?'schedule_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->disassociate_schedule = $disassociate_schedule ?? false;
    $this->schedule_identifier = $schedule_identifier ?? "";
  }
}

class ModifyClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;
  public string $description;
  public SubnetIdentifierList $subnet_ids;

  public function __construct(shape(
  ?'cluster_subnet_group_name' => string,
  ?'description' => string,
  ?'subnet_ids' => SubnetIdentifierList,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $cluster_subnet_group_name ?? "";
    $this->description = $description ?? "";
    $this->subnet_ids = $subnet_ids ?? [];
  }
}

class ModifyClusterSubnetGroupResult {
  public ClusterSubnetGroup $cluster_subnet_group;

  public function __construct(shape(
  ?'cluster_subnet_group' => ClusterSubnetGroup,
  ) $s = shape()) {
    $this->cluster_subnet_group = $cluster_subnet_group ?? null;
  }
}

class ModifyEventSubscriptionMessage {
  public BooleanOptional $enabled;
  public EventCategoriesList $event_categories;
  public string $severity;
  public string $sns_topic_arn;
  public SourceIdsList $source_ids;
  public string $source_type;
  public string $subscription_name;

  public function __construct(shape(
  ?'enabled' => BooleanOptional,
  ?'event_categories' => EventCategoriesList,
  ?'severity' => string,
  ?'sns_topic_arn' => string,
  ?'source_ids' => SourceIdsList,
  ?'source_type' => string,
  ?'subscription_name' => string,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
    $this->event_categories = $event_categories ?? [];
    $this->severity = $severity ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
    $this->source_ids = $source_ids ?? [];
    $this->source_type = $source_type ?? "";
    $this->subscription_name = $subscription_name ?? "";
  }
}

class ModifyEventSubscriptionResult {
  public EventSubscription $event_subscription;

  public function __construct(shape(
  ?'event_subscription' => EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $event_subscription ?? null;
  }
}

class ModifyScheduledActionMessage {
  public BooleanOptional $enable;
  public TStamp $end_time;
  public string $iam_role;
  public string $schedule;
  public string $scheduled_action_description;
  public string $scheduled_action_name;
  public TStamp $start_time;
  public ScheduledActionType $target_action;

  public function __construct(shape(
  ?'enable' => BooleanOptional,
  ?'end_time' => TStamp,
  ?'iam_role' => string,
  ?'schedule' => string,
  ?'scheduled_action_description' => string,
  ?'scheduled_action_name' => string,
  ?'start_time' => TStamp,
  ?'target_action' => ScheduledActionType,
  ) $s = shape()) {
    $this->enable = $enable ?? false;
    $this->end_time = $end_time ?? 0;
    $this->iam_role = $iam_role ?? "";
    $this->schedule = $schedule ?? "";
    $this->scheduled_action_description = $scheduled_action_description ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->start_time = $start_time ?? 0;
    $this->target_action = $target_action ?? null;
  }
}

class ModifySnapshotCopyRetentionPeriodMessage {
  public string $cluster_identifier;
  public boolean $manual;
  public int $retention_period;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'manual' => boolean,
  ?'retention_period' => int,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->manual = $manual ?? false;
    $this->retention_period = $retention_period ?? 0;
  }
}

class ModifySnapshotCopyRetentionPeriodResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class ModifySnapshotScheduleMessage {
  public ScheduleDefinitionList $schedule_definitions;
  public string $schedule_identifier;

  public function __construct(shape(
  ?'schedule_definitions' => ScheduleDefinitionList,
  ?'schedule_identifier' => string,
  ) $s = shape()) {
    $this->schedule_definitions = $schedule_definitions ?? [];
    $this->schedule_identifier = $schedule_identifier ?? "";
  }
}

class ModifyUsageLimitMessage {
  public LongOptional $amount;
  public UsageLimitBreachAction $breach_action;
  public string $usage_limit_id;

  public function __construct(shape(
  ?'amount' => LongOptional,
  ?'breach_action' => UsageLimitBreachAction,
  ?'usage_limit_id' => string,
  ) $s = shape()) {
    $this->amount = $amount ?? 0;
    $this->breach_action = $breach_action ?? "";
    $this->usage_limit_id = $usage_limit_id ?? "";
  }
}

class NodeConfigurationOption {
  public DoubleOptional $estimated_disk_utilization_percent;
  public Mode $mode;
  public string $node_type;
  public int $number_of_nodes;

  public function __construct(shape(
  ?'estimated_disk_utilization_percent' => DoubleOptional,
  ?'mode' => Mode,
  ?'node_type' => string,
  ?'number_of_nodes' => int,
  ) $s = shape()) {
    $this->estimated_disk_utilization_percent = $estimated_disk_utilization_percent ?? 0.0;
    $this->mode = $mode ?? "";
    $this->node_type = $node_type ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
  }
}

type NodeConfigurationOptionList = vec<NodeConfigurationOption>;

class NodeConfigurationOptionsFilter {
  public NodeConfigurationOptionsFilterName $name;
  public OperatorType $operator;
  public ValueStringList $values;

  public function __construct(shape(
  ?'name' => NodeConfigurationOptionsFilterName,
  ?'operator' => OperatorType,
  ?'values' => ValueStringList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->operator = $operator ?? "";
    $this->values = $values ?? [];
  }
}

type NodeConfigurationOptionsFilterList = vec<NodeConfigurationOptionsFilter>;

type NodeConfigurationOptionsFilterName = string;

class NodeConfigurationOptionsMessage {
  public string $marker;
  public NodeConfigurationOptionList $node_configuration_option_list;

  public function __construct(shape(
  ?'marker' => string,
  ?'node_configuration_option_list' => NodeConfigurationOptionList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->node_configuration_option_list = $node_configuration_option_list ?? [];
  }
}

class NumberOfNodesPerClusterLimitExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NumberOfNodesQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type OperatorType = string;

class OrderableClusterOption {
  public AvailabilityZoneList $availability_zones;
  public string $cluster_type;
  public string $cluster_version;
  public string $node_type;

  public function __construct(shape(
  ?'availability_zones' => AvailabilityZoneList,
  ?'cluster_type' => string,
  ?'cluster_version' => string,
  ?'node_type' => string,
  ) $s = shape()) {
    $this->availability_zones = $availability_zones ?? [];
    $this->cluster_type = $cluster_type ?? "";
    $this->cluster_version = $cluster_version ?? "";
    $this->node_type = $node_type ?? "";
  }
}

type OrderableClusterOptionsList = vec<OrderableClusterOption>;

class OrderableClusterOptionsMessage {
  public string $marker;
  public OrderableClusterOptionsList $orderable_cluster_options;

  public function __construct(shape(
  ?'marker' => string,
  ?'orderable_cluster_options' => OrderableClusterOptionsList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->orderable_cluster_options = $orderable_cluster_options ?? [];
  }
}

class Parameter {
  public string $allowed_values;
  public ParameterApplyType $apply_type;
  public string $data_type;
  public string $description;
  public boolean $is_modifiable;
  public string $minimum_engine_version;
  public string $parameter_name;
  public string $parameter_value;
  public string $source;

  public function __construct(shape(
  ?'allowed_values' => string,
  ?'apply_type' => ParameterApplyType,
  ?'data_type' => string,
  ?'description' => string,
  ?'is_modifiable' => boolean,
  ?'minimum_engine_version' => string,
  ?'parameter_name' => string,
  ?'parameter_value' => string,
  ?'source' => string,
  ) $s = shape()) {
    $this->allowed_values = $allowed_values ?? "";
    $this->apply_type = $apply_type ?? "";
    $this->data_type = $data_type ?? "";
    $this->description = $description ?? "";
    $this->is_modifiable = $is_modifiable ?? false;
    $this->minimum_engine_version = $minimum_engine_version ?? "";
    $this->parameter_name = $parameter_name ?? "";
    $this->parameter_value = $parameter_value ?? "";
    $this->source = $source ?? "";
  }
}

type ParameterApplyType = string;

type ParameterGroupList = vec<ClusterParameterGroup>;

type ParametersList = vec<Parameter>;

class PauseClusterMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class PauseClusterResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

type PendingActionsList = vec<String>;

class PendingModifiedValues {
  public IntegerOptional $automated_snapshot_retention_period;
  public string $cluster_identifier;
  public string $cluster_type;
  public string $cluster_version;
  public string $encryption_type;
  public BooleanOptional $enhanced_vpc_routing;
  public string $maintenance_track_name;
  public string $master_user_password;
  public string $node_type;
  public IntegerOptional $number_of_nodes;
  public BooleanOptional $publicly_accessible;

  public function __construct(shape(
  ?'automated_snapshot_retention_period' => IntegerOptional,
  ?'cluster_identifier' => string,
  ?'cluster_type' => string,
  ?'cluster_version' => string,
  ?'encryption_type' => string,
  ?'enhanced_vpc_routing' => BooleanOptional,
  ?'maintenance_track_name' => string,
  ?'master_user_password' => string,
  ?'node_type' => string,
  ?'number_of_nodes' => IntegerOptional,
  ?'publicly_accessible' => BooleanOptional,
  ) $s = shape()) {
    $this->automated_snapshot_retention_period = $automated_snapshot_retention_period ?? 0;
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->cluster_type = $cluster_type ?? "";
    $this->cluster_version = $cluster_version ?? "";
    $this->encryption_type = $encryption_type ?? "";
    $this->enhanced_vpc_routing = $enhanced_vpc_routing ?? false;
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->master_user_password = $master_user_password ?? "";
    $this->node_type = $node_type ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->publicly_accessible = $publicly_accessible ?? false;
  }
}

class PurchaseReservedNodeOfferingMessage {
  public IntegerOptional $node_count;
  public string $reserved_node_offering_id;

  public function __construct(shape(
  ?'node_count' => IntegerOptional,
  ?'reserved_node_offering_id' => string,
  ) $s = shape()) {
    $this->node_count = $node_count ?? 0;
    $this->reserved_node_offering_id = $reserved_node_offering_id ?? "";
  }
}

class PurchaseReservedNodeOfferingResult {
  public ReservedNode $reserved_node;

  public function __construct(shape(
  ?'reserved_node' => ReservedNode,
  ) $s = shape()) {
    $this->reserved_node = $reserved_node ?? null;
  }
}

class RebootClusterMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class RebootClusterResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class RecurringCharge {
  public Double $recurring_charge_amount;
  public string $recurring_charge_frequency;

  public function __construct(shape(
  ?'recurring_charge_amount' => Double,
  ?'recurring_charge_frequency' => string,
  ) $s = shape()) {
    $this->recurring_charge_amount = $recurring_charge_amount ?? 0.0;
    $this->recurring_charge_frequency = $recurring_charge_frequency ?? "";
  }
}

type RecurringChargeList = vec<RecurringCharge>;

class ReservedNode {
  public string $currency_code;
  public int $duration;
  public Double $fixed_price;
  public int $node_count;
  public string $node_type;
  public string $offering_type;
  public RecurringChargeList $recurring_charges;
  public string $reserved_node_id;
  public string $reserved_node_offering_id;
  public ReservedNodeOfferingType $reserved_node_offering_type;
  public TStamp $start_time;
  public string $state;
  public Double $usage_price;

  public function __construct(shape(
  ?'currency_code' => string,
  ?'duration' => int,
  ?'fixed_price' => Double,
  ?'node_count' => int,
  ?'node_type' => string,
  ?'offering_type' => string,
  ?'recurring_charges' => RecurringChargeList,
  ?'reserved_node_id' => string,
  ?'reserved_node_offering_id' => string,
  ?'reserved_node_offering_type' => ReservedNodeOfferingType,
  ?'start_time' => TStamp,
  ?'state' => string,
  ?'usage_price' => Double,
  ) $s = shape()) {
    $this->currency_code = $currency_code ?? "";
    $this->duration = $duration ?? 0;
    $this->fixed_price = $fixed_price ?? 0.0;
    $this->node_count = $node_count ?? 0;
    $this->node_type = $node_type ?? "";
    $this->offering_type = $offering_type ?? "";
    $this->recurring_charges = $recurring_charges ?? [];
    $this->reserved_node_id = $reserved_node_id ?? "";
    $this->reserved_node_offering_id = $reserved_node_offering_id ?? "";
    $this->reserved_node_offering_type = $reserved_node_offering_type ?? "";
    $this->start_time = $start_time ?? 0;
    $this->state = $state ?? "";
    $this->usage_price = $usage_price ?? 0.0;
  }
}

class ReservedNodeAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedNodeAlreadyMigratedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReservedNodeList = vec<ReservedNode>;

class ReservedNodeNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedNodeOffering {
  public string $currency_code;
  public int $duration;
  public Double $fixed_price;
  public string $node_type;
  public string $offering_type;
  public RecurringChargeList $recurring_charges;
  public string $reserved_node_offering_id;
  public ReservedNodeOfferingType $reserved_node_offering_type;
  public Double $usage_price;

  public function __construct(shape(
  ?'currency_code' => string,
  ?'duration' => int,
  ?'fixed_price' => Double,
  ?'node_type' => string,
  ?'offering_type' => string,
  ?'recurring_charges' => RecurringChargeList,
  ?'reserved_node_offering_id' => string,
  ?'reserved_node_offering_type' => ReservedNodeOfferingType,
  ?'usage_price' => Double,
  ) $s = shape()) {
    $this->currency_code = $currency_code ?? "";
    $this->duration = $duration ?? 0;
    $this->fixed_price = $fixed_price ?? 0.0;
    $this->node_type = $node_type ?? "";
    $this->offering_type = $offering_type ?? "";
    $this->recurring_charges = $recurring_charges ?? [];
    $this->reserved_node_offering_id = $reserved_node_offering_id ?? "";
    $this->reserved_node_offering_type = $reserved_node_offering_type ?? "";
    $this->usage_price = $usage_price ?? 0.0;
  }
}

type ReservedNodeOfferingList = vec<ReservedNodeOffering>;

class ReservedNodeOfferingNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReservedNodeOfferingType = string;

class ReservedNodeOfferingsMessage {
  public string $marker;
  public ReservedNodeOfferingList $reserved_node_offerings;

  public function __construct(shape(
  ?'marker' => string,
  ?'reserved_node_offerings' => ReservedNodeOfferingList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->reserved_node_offerings = $reserved_node_offerings ?? [];
  }
}

class ReservedNodeQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedNodesMessage {
  public string $marker;
  public ReservedNodeList $reserved_nodes;

  public function __construct(shape(
  ?'marker' => string,
  ?'reserved_nodes' => ReservedNodeList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->reserved_nodes = $reserved_nodes ?? [];
  }
}

class ResetClusterParameterGroupMessage {
  public string $parameter_group_name;
  public ParametersList $parameters;
  public boolean $reset_all_parameters;

  public function __construct(shape(
  ?'parameter_group_name' => string,
  ?'parameters' => ParametersList,
  ?'reset_all_parameters' => boolean,
  ) $s = shape()) {
    $this->parameter_group_name = $parameter_group_name ?? "";
    $this->parameters = $parameters ?? [];
    $this->reset_all_parameters = $reset_all_parameters ?? false;
  }
}

class ResizeClusterMessage {
  public BooleanOptional $classic;
  public string $cluster_identifier;
  public string $cluster_type;
  public string $node_type;
  public int $number_of_nodes;

  public function __construct(shape(
  ?'classic' => BooleanOptional,
  ?'cluster_identifier' => string,
  ?'cluster_type' => string,
  ?'node_type' => string,
  ?'number_of_nodes' => int,
  ) $s = shape()) {
    $this->classic = $classic ?? false;
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->cluster_type = $cluster_type ?? "";
    $this->node_type = $node_type ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
  }
}

class ResizeClusterResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class ResizeInfo {
  public boolean $allow_cancel_resize;
  public string $resize_type;

  public function __construct(shape(
  ?'allow_cancel_resize' => boolean,
  ?'resize_type' => string,
  ) $s = shape()) {
    $this->allow_cancel_resize = $allow_cancel_resize ?? false;
    $this->resize_type = $resize_type ?? "";
  }
}

class ResizeNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResizeProgressMessage {
  public DoubleOptional $avg_resize_rate_in_mega_bytes_per_second;
  public DoubleOptional $data_transfer_progress_percent;
  public LongOptional $elapsed_time_in_seconds;
  public LongOptional $estimated_time_to_completion_in_seconds;
  public ImportTablesCompleted $import_tables_completed;
  public ImportTablesInProgress $import_tables_in_progress;
  public ImportTablesNotStarted $import_tables_not_started;
  public string $message;
  public LongOptional $progress_in_mega_bytes;
  public string $resize_type;
  public string $status;
  public string $target_cluster_type;
  public string $target_encryption_type;
  public string $target_node_type;
  public IntegerOptional $target_number_of_nodes;
  public LongOptional $total_resize_data_in_mega_bytes;

  public function __construct(shape(
  ?'avg_resize_rate_in_mega_bytes_per_second' => DoubleOptional,
  ?'data_transfer_progress_percent' => DoubleOptional,
  ?'elapsed_time_in_seconds' => LongOptional,
  ?'estimated_time_to_completion_in_seconds' => LongOptional,
  ?'import_tables_completed' => ImportTablesCompleted,
  ?'import_tables_in_progress' => ImportTablesInProgress,
  ?'import_tables_not_started' => ImportTablesNotStarted,
  ?'message' => string,
  ?'progress_in_mega_bytes' => LongOptional,
  ?'resize_type' => string,
  ?'status' => string,
  ?'target_cluster_type' => string,
  ?'target_encryption_type' => string,
  ?'target_node_type' => string,
  ?'target_number_of_nodes' => IntegerOptional,
  ?'total_resize_data_in_mega_bytes' => LongOptional,
  ) $s = shape()) {
    $this->avg_resize_rate_in_mega_bytes_per_second = $avg_resize_rate_in_mega_bytes_per_second ?? 0.0;
    $this->data_transfer_progress_percent = $data_transfer_progress_percent ?? 0.0;
    $this->elapsed_time_in_seconds = $elapsed_time_in_seconds ?? 0;
    $this->estimated_time_to_completion_in_seconds = $estimated_time_to_completion_in_seconds ?? 0;
    $this->import_tables_completed = $import_tables_completed ?? [];
    $this->import_tables_in_progress = $import_tables_in_progress ?? [];
    $this->import_tables_not_started = $import_tables_not_started ?? [];
    $this->message = $message ?? "";
    $this->progress_in_mega_bytes = $progress_in_mega_bytes ?? 0;
    $this->resize_type = $resize_type ?? "";
    $this->status = $status ?? "";
    $this->target_cluster_type = $target_cluster_type ?? "";
    $this->target_encryption_type = $target_encryption_type ?? "";
    $this->target_node_type = $target_node_type ?? "";
    $this->target_number_of_nodes = $target_number_of_nodes ?? 0;
    $this->total_resize_data_in_mega_bytes = $total_resize_data_in_mega_bytes ?? 0;
  }
}

class ResourceNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RestorableNodeTypeList = vec<String>;

class RestoreFromClusterSnapshotMessage {
  public string $additional_info;
  public BooleanOptional $allow_version_upgrade;
  public IntegerOptional $automated_snapshot_retention_period;
  public string $availability_zone;
  public string $cluster_identifier;
  public string $cluster_parameter_group_name;
  public ClusterSecurityGroupNameList $cluster_security_groups;
  public string $cluster_subnet_group_name;
  public string $elastic_ip;
  public BooleanOptional $enhanced_vpc_routing;
  public string $hsm_client_certificate_identifier;
  public string $hsm_configuration_identifier;
  public IamRoleArnList $iam_roles;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public IntegerOptional $manual_snapshot_retention_period;
  public string $node_type;
  public IntegerOptional $number_of_nodes;
  public string $owner_account;
  public IntegerOptional $port;
  public string $preferred_maintenance_window;
  public BooleanOptional $publicly_accessible;
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;
  public string $snapshot_schedule_identifier;
  public VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
  ?'additional_info' => string,
  ?'allow_version_upgrade' => BooleanOptional,
  ?'automated_snapshot_retention_period' => IntegerOptional,
  ?'availability_zone' => string,
  ?'cluster_identifier' => string,
  ?'cluster_parameter_group_name' => string,
  ?'cluster_security_groups' => ClusterSecurityGroupNameList,
  ?'cluster_subnet_group_name' => string,
  ?'elastic_ip' => string,
  ?'enhanced_vpc_routing' => BooleanOptional,
  ?'hsm_client_certificate_identifier' => string,
  ?'hsm_configuration_identifier' => string,
  ?'iam_roles' => IamRoleArnList,
  ?'kms_key_id' => string,
  ?'maintenance_track_name' => string,
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'node_type' => string,
  ?'number_of_nodes' => IntegerOptional,
  ?'owner_account' => string,
  ?'port' => IntegerOptional,
  ?'preferred_maintenance_window' => string,
  ?'publicly_accessible' => BooleanOptional,
  ?'snapshot_cluster_identifier' => string,
  ?'snapshot_identifier' => string,
  ?'snapshot_schedule_identifier' => string,
  ?'vpc_security_group_ids' => VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->additional_info = $additional_info ?? "";
    $this->allow_version_upgrade = $allow_version_upgrade ?? false;
    $this->automated_snapshot_retention_period = $automated_snapshot_retention_period ?? 0;
    $this->availability_zone = $availability_zone ?? "";
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->cluster_parameter_group_name = $cluster_parameter_group_name ?? "";
    $this->cluster_security_groups = $cluster_security_groups ?? [];
    $this->cluster_subnet_group_name = $cluster_subnet_group_name ?? "";
    $this->elastic_ip = $elastic_ip ?? "";
    $this->enhanced_vpc_routing = $enhanced_vpc_routing ?? false;
    $this->hsm_client_certificate_identifier = $hsm_client_certificate_identifier ?? "";
    $this->hsm_configuration_identifier = $hsm_configuration_identifier ?? "";
    $this->iam_roles = $iam_roles ?? [];
    $this->kms_key_id = $kms_key_id ?? "";
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->node_type = $node_type ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->owner_account = $owner_account ?? "";
    $this->port = $port ?? 0;
    $this->preferred_maintenance_window = $preferred_maintenance_window ?? "";
    $this->publicly_accessible = $publicly_accessible ?? false;
    $this->snapshot_cluster_identifier = $snapshot_cluster_identifier ?? "";
    $this->snapshot_identifier = $snapshot_identifier ?? "";
    $this->snapshot_schedule_identifier = $snapshot_schedule_identifier ?? "";
    $this->vpc_security_group_ids = $vpc_security_group_ids ?? [];
  }
}

class RestoreFromClusterSnapshotResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class RestoreStatus {
  public Double $current_restore_rate_in_mega_bytes_per_second;
  public Long $elapsed_time_in_seconds;
  public Long $estimated_time_to_completion_in_seconds;
  public Long $progress_in_mega_bytes;
  public Long $snapshot_size_in_mega_bytes;
  public string $status;

  public function __construct(shape(
  ?'current_restore_rate_in_mega_bytes_per_second' => Double,
  ?'elapsed_time_in_seconds' => Long,
  ?'estimated_time_to_completion_in_seconds' => Long,
  ?'progress_in_mega_bytes' => Long,
  ?'snapshot_size_in_mega_bytes' => Long,
  ?'status' => string,
  ) $s = shape()) {
    $this->current_restore_rate_in_mega_bytes_per_second = $current_restore_rate_in_mega_bytes_per_second ?? 0.0;
    $this->elapsed_time_in_seconds = $elapsed_time_in_seconds ?? 0;
    $this->estimated_time_to_completion_in_seconds = $estimated_time_to_completion_in_seconds ?? 0;
    $this->progress_in_mega_bytes = $progress_in_mega_bytes ?? 0;
    $this->snapshot_size_in_mega_bytes = $snapshot_size_in_mega_bytes ?? 0;
    $this->status = $status ?? "";
  }
}

class RestoreTableFromClusterSnapshotMessage {
  public string $cluster_identifier;
  public string $new_table_name;
  public string $snapshot_identifier;
  public string $source_database_name;
  public string $source_schema_name;
  public string $source_table_name;
  public string $target_database_name;
  public string $target_schema_name;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'new_table_name' => string,
  ?'snapshot_identifier' => string,
  ?'source_database_name' => string,
  ?'source_schema_name' => string,
  ?'source_table_name' => string,
  ?'target_database_name' => string,
  ?'target_schema_name' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->new_table_name = $new_table_name ?? "";
    $this->snapshot_identifier = $snapshot_identifier ?? "";
    $this->source_database_name = $source_database_name ?? "";
    $this->source_schema_name = $source_schema_name ?? "";
    $this->source_table_name = $source_table_name ?? "";
    $this->target_database_name = $target_database_name ?? "";
    $this->target_schema_name = $target_schema_name ?? "";
  }
}

class RestoreTableFromClusterSnapshotResult {
  public TableRestoreStatus $table_restore_status;

  public function __construct(shape(
  ?'table_restore_status' => TableRestoreStatus,
  ) $s = shape()) {
    $this->table_restore_status = $table_restore_status ?? null;
  }
}

class ResumeClusterMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class ResumeClusterResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
  }
}

class RevisionTarget {
  public string $database_revision;
  public TStamp $database_revision_release_date;
  public string $description;

  public function __construct(shape(
  ?'database_revision' => string,
  ?'database_revision_release_date' => TStamp,
  ?'description' => string,
  ) $s = shape()) {
    $this->database_revision = $database_revision ?? "";
    $this->database_revision_release_date = $database_revision_release_date ?? 0;
    $this->description = $description ?? "";
  }
}

type RevisionTargetsList = vec<RevisionTarget>;

class RevokeClusterSecurityGroupIngressMessage {
  public string $cidrip;
  public string $cluster_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;

  public function __construct(shape(
  ?'cidrip' => string,
  ?'cluster_security_group_name' => string,
  ?'ec_2_security_group_name' => string,
  ?'ec_2_security_group_owner_id' => string,
  ) $s = shape()) {
    $this->cidrip = $cidrip ?? "";
    $this->cluster_security_group_name = $cluster_security_group_name ?? "";
    $this->ec_2_security_group_name = $ec_2_security_group_name ?? "";
    $this->ec_2_security_group_owner_id = $ec_2_security_group_owner_id ?? "";
  }
}

class RevokeClusterSecurityGroupIngressResult {
  public ClusterSecurityGroup $cluster_security_group;

  public function __construct(shape(
  ?'cluster_security_group' => ClusterSecurityGroup,
  ) $s = shape()) {
    $this->cluster_security_group = $cluster_security_group ?? null;
  }
}

class RevokeSnapshotAccessMessage {
  public string $account_with_restore_access;
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;

  public function __construct(shape(
  ?'account_with_restore_access' => string,
  ?'snapshot_cluster_identifier' => string,
  ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->account_with_restore_access = $account_with_restore_access ?? "";
    $this->snapshot_cluster_identifier = $snapshot_cluster_identifier ?? "";
    $this->snapshot_identifier = $snapshot_identifier ?? "";
  }
}

class RevokeSnapshotAccessResult {
  public Snapshot $snapshot;

  public function __construct(shape(
  ?'snapshot' => Snapshot,
  ) $s = shape()) {
    $this->snapshot = $snapshot ?? null;
  }
}

class RotateEncryptionKeyMessage {
  public string $cluster_identifier;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
  }
}

class RotateEncryptionKeyResult {
  public Cluster $cluster;

  public function __construct(shape(
  ?'cluster' => Cluster,
  ) $s = shape()) {
    $this->cluster = $cluster ?? null;
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

type ScheduleDefinitionList = vec<String>;

class ScheduleDefinitionTypeUnsupportedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ScheduleState = string;

class ScheduledAction {
  public TStamp $end_time;
  public string $iam_role;
  public ScheduledActionTimeList $next_invocations;
  public string $schedule;
  public string $scheduled_action_description;
  public string $scheduled_action_name;
  public TStamp $start_time;
  public ScheduledActionState $state;
  public ScheduledActionType $target_action;

  public function __construct(shape(
  ?'end_time' => TStamp,
  ?'iam_role' => string,
  ?'next_invocations' => ScheduledActionTimeList,
  ?'schedule' => string,
  ?'scheduled_action_description' => string,
  ?'scheduled_action_name' => string,
  ?'start_time' => TStamp,
  ?'state' => ScheduledActionState,
  ?'target_action' => ScheduledActionType,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->iam_role = $iam_role ?? "";
    $this->next_invocations = $next_invocations ?? [];
    $this->schedule = $schedule ?? "";
    $this->scheduled_action_description = $scheduled_action_description ?? "";
    $this->scheduled_action_name = $scheduled_action_name ?? "";
    $this->start_time = $start_time ?? 0;
    $this->state = $state ?? "";
    $this->target_action = $target_action ?? null;
  }
}

class ScheduledActionAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ScheduledActionFilter {
  public ScheduledActionFilterName $name;
  public ValueStringList $values;

  public function __construct(shape(
  ?'name' => ScheduledActionFilterName,
  ?'values' => ValueStringList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type ScheduledActionFilterList = vec<ScheduledActionFilter>;

type ScheduledActionFilterName = string;

type ScheduledActionList = vec<ScheduledAction>;

class ScheduledActionNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ScheduledActionQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ScheduledActionState = string;

type ScheduledActionTimeList = vec<TStamp>;

class ScheduledActionType {
  public PauseClusterMessage $pause_cluster;
  public ResizeClusterMessage $resize_cluster;
  public ResumeClusterMessage $resume_cluster;

  public function __construct(shape(
  ?'pause_cluster' => PauseClusterMessage,
  ?'resize_cluster' => ResizeClusterMessage,
  ?'resume_cluster' => ResumeClusterMessage,
  ) $s = shape()) {
    $this->pause_cluster = $pause_cluster ?? null;
    $this->resize_cluster = $resize_cluster ?? null;
    $this->resume_cluster = $resume_cluster ?? null;
  }
}

class ScheduledActionTypeUnsupportedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ScheduledActionTypeValues = string;

class ScheduledActionsMessage {
  public string $marker;
  public ScheduledActionList $scheduled_actions;

  public function __construct(shape(
  ?'marker' => string,
  ?'scheduled_actions' => ScheduledActionList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->scheduled_actions = $scheduled_actions ?? [];
  }
}

type ScheduledSnapshotTimeList = vec<TStamp>;

type SensitiveString = string;

class Snapshot {
  public AccountsWithRestoreAccessList $accounts_with_restore_access;
  public Double $actual_incremental_backup_size_in_mega_bytes;
  public string $availability_zone;
  public Double $backup_progress_in_mega_bytes;
  public TStamp $cluster_create_time;
  public string $cluster_identifier;
  public string $cluster_version;
  public Double $current_backup_rate_in_mega_bytes_per_second;
  public string $db_name;
  public Long $elapsed_time_in_seconds;
  public boolean $encrypted;
  public boolean $encrypted_with_hsm;
  public boolean $enhanced_vpc_routing;
  public Long $estimated_seconds_to_completion;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public IntegerOptional $manual_snapshot_remaining_days;
  public IntegerOptional $manual_snapshot_retention_period;
  public string $master_username;
  public string $node_type;
  public int $number_of_nodes;
  public string $owner_account;
  public int $port;
  public RestorableNodeTypeList $restorable_node_types;
  public TStamp $snapshot_create_time;
  public string $snapshot_identifier;
  public TStamp $snapshot_retention_start_time;
  public string $snapshot_type;
  public string $source_region;
  public string $status;
  public TagList $tags;
  public Double $total_backup_size_in_mega_bytes;
  public string $vpc_id;

  public function __construct(shape(
  ?'accounts_with_restore_access' => AccountsWithRestoreAccessList,
  ?'actual_incremental_backup_size_in_mega_bytes' => Double,
  ?'availability_zone' => string,
  ?'backup_progress_in_mega_bytes' => Double,
  ?'cluster_create_time' => TStamp,
  ?'cluster_identifier' => string,
  ?'cluster_version' => string,
  ?'current_backup_rate_in_mega_bytes_per_second' => Double,
  ?'db_name' => string,
  ?'elapsed_time_in_seconds' => Long,
  ?'encrypted' => boolean,
  ?'encrypted_with_hsm' => boolean,
  ?'enhanced_vpc_routing' => boolean,
  ?'estimated_seconds_to_completion' => Long,
  ?'kms_key_id' => string,
  ?'maintenance_track_name' => string,
  ?'manual_snapshot_remaining_days' => IntegerOptional,
  ?'manual_snapshot_retention_period' => IntegerOptional,
  ?'master_username' => string,
  ?'node_type' => string,
  ?'number_of_nodes' => int,
  ?'owner_account' => string,
  ?'port' => int,
  ?'restorable_node_types' => RestorableNodeTypeList,
  ?'snapshot_create_time' => TStamp,
  ?'snapshot_identifier' => string,
  ?'snapshot_retention_start_time' => TStamp,
  ?'snapshot_type' => string,
  ?'source_region' => string,
  ?'status' => string,
  ?'tags' => TagList,
  ?'total_backup_size_in_mega_bytes' => Double,
  ?'vpc_id' => string,
  ) $s = shape()) {
    $this->accounts_with_restore_access = $accounts_with_restore_access ?? [];
    $this->actual_incremental_backup_size_in_mega_bytes = $actual_incremental_backup_size_in_mega_bytes ?? 0.0;
    $this->availability_zone = $availability_zone ?? "";
    $this->backup_progress_in_mega_bytes = $backup_progress_in_mega_bytes ?? 0.0;
    $this->cluster_create_time = $cluster_create_time ?? 0;
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->cluster_version = $cluster_version ?? "";
    $this->current_backup_rate_in_mega_bytes_per_second = $current_backup_rate_in_mega_bytes_per_second ?? 0.0;
    $this->db_name = $db_name ?? "";
    $this->elapsed_time_in_seconds = $elapsed_time_in_seconds ?? 0;
    $this->encrypted = $encrypted ?? false;
    $this->encrypted_with_hsm = $encrypted_with_hsm ?? false;
    $this->enhanced_vpc_routing = $enhanced_vpc_routing ?? false;
    $this->estimated_seconds_to_completion = $estimated_seconds_to_completion ?? 0;
    $this->kms_key_id = $kms_key_id ?? "";
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->manual_snapshot_remaining_days = $manual_snapshot_remaining_days ?? 0;
    $this->manual_snapshot_retention_period = $manual_snapshot_retention_period ?? 0;
    $this->master_username = $master_username ?? "";
    $this->node_type = $node_type ?? "";
    $this->number_of_nodes = $number_of_nodes ?? 0;
    $this->owner_account = $owner_account ?? "";
    $this->port = $port ?? 0;
    $this->restorable_node_types = $restorable_node_types ?? [];
    $this->snapshot_create_time = $snapshot_create_time ?? 0;
    $this->snapshot_identifier = $snapshot_identifier ?? "";
    $this->snapshot_retention_start_time = $snapshot_retention_start_time ?? 0;
    $this->snapshot_type = $snapshot_type ?? "";
    $this->source_region = $source_region ?? "";
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
    $this->total_backup_size_in_mega_bytes = $total_backup_size_in_mega_bytes ?? 0.0;
    $this->vpc_id = $vpc_id ?? "";
  }
}

type SnapshotAttributeToSortBy = string;

class SnapshotCopyAlreadyDisabledFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotCopyAlreadyEnabledFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotCopyDisabledFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotCopyGrant {
  public string $kms_key_id;
  public string $snapshot_copy_grant_name;
  public TagList $tags;

  public function __construct(shape(
  ?'kms_key_id' => string,
  ?'snapshot_copy_grant_name' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->kms_key_id = $kms_key_id ?? "";
    $this->snapshot_copy_grant_name = $snapshot_copy_grant_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class SnapshotCopyGrantAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SnapshotCopyGrantList = vec<SnapshotCopyGrant>;

class SnapshotCopyGrantMessage {
  public string $marker;
  public SnapshotCopyGrantList $snapshot_copy_grants;

  public function __construct(shape(
  ?'marker' => string,
  ?'snapshot_copy_grants' => SnapshotCopyGrantList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->snapshot_copy_grants = $snapshot_copy_grants ?? [];
  }
}

class SnapshotCopyGrantNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotCopyGrantQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotErrorMessage {
  public string $failure_code;
  public string $failure_reason;
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;

  public function __construct(shape(
  ?'failure_code' => string,
  ?'failure_reason' => string,
  ?'snapshot_cluster_identifier' => string,
  ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->failure_code = $failure_code ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->snapshot_cluster_identifier = $snapshot_cluster_identifier ?? "";
    $this->snapshot_identifier = $snapshot_identifier ?? "";
  }
}

type SnapshotIdentifierList = vec<String>;

type SnapshotList = vec<Snapshot>;

class SnapshotMessage {
  public string $marker;
  public SnapshotList $snapshots;

  public function __construct(shape(
  ?'marker' => string,
  ?'snapshots' => SnapshotList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->snapshots = $snapshots ?? [];
  }
}

class SnapshotSchedule {
  public IntegerOptional $associated_cluster_count;
  public AssociatedClusterList $associated_clusters;
  public ScheduledSnapshotTimeList $next_invocations;
  public ScheduleDefinitionList $schedule_definitions;
  public string $schedule_description;
  public string $schedule_identifier;
  public TagList $tags;

  public function __construct(shape(
  ?'associated_cluster_count' => IntegerOptional,
  ?'associated_clusters' => AssociatedClusterList,
  ?'next_invocations' => ScheduledSnapshotTimeList,
  ?'schedule_definitions' => ScheduleDefinitionList,
  ?'schedule_description' => string,
  ?'schedule_identifier' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->associated_cluster_count = $associated_cluster_count ?? 0;
    $this->associated_clusters = $associated_clusters ?? [];
    $this->next_invocations = $next_invocations ?? [];
    $this->schedule_definitions = $schedule_definitions ?? [];
    $this->schedule_description = $schedule_description ?? "";
    $this->schedule_identifier = $schedule_identifier ?? "";
    $this->tags = $tags ?? [];
  }
}

class SnapshotScheduleAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SnapshotScheduleList = vec<SnapshotSchedule>;

class SnapshotScheduleNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotScheduleQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotScheduleUpdateInProgressFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SnapshotSortingEntity {
  public SnapshotAttributeToSortBy $attribute;
  public SortByOrder $sort_order;

  public function __construct(shape(
  ?'attribute' => SnapshotAttributeToSortBy,
  ?'sort_order' => SortByOrder,
  ) $s = shape()) {
    $this->attribute = $attribute ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

type SnapshotSortingEntityList = vec<SnapshotSortingEntity>;

type SortByOrder = string;

type SourceIdsList = vec<String>;

class SourceNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SourceType = string;

type String = string;

class Subnet {
  public AvailabilityZone $subnet_availability_zone;
  public string $subnet_identifier;
  public string $subnet_status;

  public function __construct(shape(
  ?'subnet_availability_zone' => AvailabilityZone,
  ?'subnet_identifier' => string,
  ?'subnet_status' => string,
  ) $s = shape()) {
    $this->subnet_availability_zone = $subnet_availability_zone ?? null;
    $this->subnet_identifier = $subnet_identifier ?? "";
    $this->subnet_status = $subnet_status ?? "";
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

class SubscriptionEventIdNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SubscriptionNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SubscriptionSeverityNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SupportedOperation {
  public string $operation_name;

  public function __construct(shape(
  ?'operation_name' => string,
  ) $s = shape()) {
    $this->operation_name = $operation_name ?? "";
  }
}

type SupportedOperationList = vec<SupportedOperation>;

class SupportedPlatform {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type SupportedPlatformsList = vec<SupportedPlatform>;

type TStamp = int;

class TableLimitExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TableRestoreNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TableRestoreStatus {
  public string $cluster_identifier;
  public string $message;
  public string $new_table_name;
  public LongOptional $progress_in_mega_bytes;
  public TStamp $request_time;
  public string $snapshot_identifier;
  public string $source_database_name;
  public string $source_schema_name;
  public string $source_table_name;
  public TableRestoreStatusType $status;
  public string $table_restore_request_id;
  public string $target_database_name;
  public string $target_schema_name;
  public LongOptional $total_data_in_mega_bytes;

  public function __construct(shape(
  ?'cluster_identifier' => string,
  ?'message' => string,
  ?'new_table_name' => string,
  ?'progress_in_mega_bytes' => LongOptional,
  ?'request_time' => TStamp,
  ?'snapshot_identifier' => string,
  ?'source_database_name' => string,
  ?'source_schema_name' => string,
  ?'source_table_name' => string,
  ?'status' => TableRestoreStatusType,
  ?'table_restore_request_id' => string,
  ?'target_database_name' => string,
  ?'target_schema_name' => string,
  ?'total_data_in_mega_bytes' => LongOptional,
  ) $s = shape()) {
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->message = $message ?? "";
    $this->new_table_name = $new_table_name ?? "";
    $this->progress_in_mega_bytes = $progress_in_mega_bytes ?? 0;
    $this->request_time = $request_time ?? 0;
    $this->snapshot_identifier = $snapshot_identifier ?? "";
    $this->source_database_name = $source_database_name ?? "";
    $this->source_schema_name = $source_schema_name ?? "";
    $this->source_table_name = $source_table_name ?? "";
    $this->status = $status ?? "";
    $this->table_restore_request_id = $table_restore_request_id ?? "";
    $this->target_database_name = $target_database_name ?? "";
    $this->target_schema_name = $target_schema_name ?? "";
    $this->total_data_in_mega_bytes = $total_data_in_mega_bytes ?? 0;
  }
}

type TableRestoreStatusList = vec<TableRestoreStatus>;

class TableRestoreStatusMessage {
  public string $marker;
  public TableRestoreStatusList $table_restore_status_details;

  public function __construct(shape(
  ?'marker' => string,
  ?'table_restore_status_details' => TableRestoreStatusList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->table_restore_status_details = $table_restore_status_details ?? [];
  }
}

type TableRestoreStatusType = string;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
  ?'key' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKeyList = vec<String>;

class TagLimitExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagList = vec<Tag>;

type TagValueList = vec<String>;

class TaggedResource {
  public string $resource_name;
  public string $resource_type;
  public Tag $tag;

  public function __construct(shape(
  ?'resource_name' => string,
  ?'resource_type' => string,
  ?'tag' => Tag,
  ) $s = shape()) {
    $this->resource_name = $resource_name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->tag = $tag ?? null;
  }
}

type TaggedResourceList = vec<TaggedResource>;

class TaggedResourceListMessage {
  public string $marker;
  public TaggedResourceList $tagged_resources;

  public function __construct(shape(
  ?'marker' => string,
  ?'tagged_resources' => TaggedResourceList,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->tagged_resources = $tagged_resources ?? [];
  }
}

type TrackList = vec<MaintenanceTrack>;

class TrackListMessage {
  public TrackList $maintenance_tracks;
  public string $marker;

  public function __construct(shape(
  ?'maintenance_tracks' => TrackList,
  ?'marker' => string,
  ) $s = shape()) {
    $this->maintenance_tracks = $maintenance_tracks ?? [];
    $this->marker = $marker ?? "";
  }
}

class UnauthorizedOperation {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnknownSnapshotCopyRegionFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnsupportedOperationFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnsupportedOptionFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateTarget {
  public string $database_version;
  public string $maintenance_track_name;
  public SupportedOperationList $supported_operations;

  public function __construct(shape(
  ?'database_version' => string,
  ?'maintenance_track_name' => string,
  ?'supported_operations' => SupportedOperationList,
  ) $s = shape()) {
    $this->database_version = $database_version ?? "";
    $this->maintenance_track_name = $maintenance_track_name ?? "";
    $this->supported_operations = $supported_operations ?? [];
  }
}

class UsageLimit {
  public Long $amount;
  public UsageLimitBreachAction $breach_action;
  public string $cluster_identifier;
  public UsageLimitFeatureType $feature_type;
  public UsageLimitLimitType $limit_type;
  public UsageLimitPeriod $period;
  public TagList $tags;
  public string $usage_limit_id;

  public function __construct(shape(
  ?'amount' => Long,
  ?'breach_action' => UsageLimitBreachAction,
  ?'cluster_identifier' => string,
  ?'feature_type' => UsageLimitFeatureType,
  ?'limit_type' => UsageLimitLimitType,
  ?'period' => UsageLimitPeriod,
  ?'tags' => TagList,
  ?'usage_limit_id' => string,
  ) $s = shape()) {
    $this->amount = $amount ?? 0;
    $this->breach_action = $breach_action ?? "";
    $this->cluster_identifier = $cluster_identifier ?? "";
    $this->feature_type = $feature_type ?? "";
    $this->limit_type = $limit_type ?? "";
    $this->period = $period ?? "";
    $this->tags = $tags ?? [];
    $this->usage_limit_id = $usage_limit_id ?? "";
  }
}

class UsageLimitAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UsageLimitBreachAction = string;

type UsageLimitFeatureType = string;

type UsageLimitLimitType = string;

class UsageLimitList {
  public string $marker;
  public UsageLimits $usage_limits;

  public function __construct(shape(
  ?'marker' => string,
  ?'usage_limits' => UsageLimits,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->usage_limits = $usage_limits ?? [];
  }
}

class UsageLimitNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UsageLimitPeriod = string;

type UsageLimits = vec<UsageLimit>;

type ValueStringList = vec<String>;

type VpcSecurityGroupIdList = vec<String>;

class VpcSecurityGroupMembership {
  public string $status;
  public string $vpc_security_group_id;

  public function __construct(shape(
  ?'status' => string,
  ?'vpc_security_group_id' => string,
  ) $s = shape()) {
    $this->status = $status ?? "";
    $this->vpc_security_group_id = $vpc_security_group_id ?? "";
  }
}

type VpcSecurityGroupMembershipList = vec<VpcSecurityGroupMembership>;

