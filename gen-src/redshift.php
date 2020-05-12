<?hh // strict
namespace slack\aws\redshift;

interface Redshift {
  public function AcceptReservedNodeExchange(AcceptReservedNodeExchangeInputMessage $in): Awaitable<\Errors\Result<AcceptReservedNodeExchangeOutputMessage>>;
  public function AuthorizeClusterSecurityGroupIngress(AuthorizeClusterSecurityGroupIngressMessage $in): Awaitable<\Errors\Result<AuthorizeClusterSecurityGroupIngressResult>>;
  public function AuthorizeSnapshotAccess(AuthorizeSnapshotAccessMessage $in): Awaitable<\Errors\Result<AuthorizeSnapshotAccessResult>>;
  public function BatchDeleteClusterSnapshots(BatchDeleteClusterSnapshotsRequest $in): Awaitable<\Errors\Result<BatchDeleteClusterSnapshotsResult>>;
  public function BatchModifyClusterSnapshots(BatchModifyClusterSnapshotsMessage $in): Awaitable<\Errors\Result<BatchModifyClusterSnapshotsOutputMessage>>;
  public function CancelResize(CancelResizeMessage $in): Awaitable<\Errors\Result<ResizeProgressMessage>>;
  public function CopyClusterSnapshot(CopyClusterSnapshotMessage $in): Awaitable<\Errors\Result<CopyClusterSnapshotResult>>;
  public function CreateCluster(CreateClusterMessage $in): Awaitable<\Errors\Result<CreateClusterResult>>;
  public function CreateClusterParameterGroup(CreateClusterParameterGroupMessage $in): Awaitable<\Errors\Result<CreateClusterParameterGroupResult>>;
  public function CreateClusterSecurityGroup(CreateClusterSecurityGroupMessage $in): Awaitable<\Errors\Result<CreateClusterSecurityGroupResult>>;
  public function CreateClusterSnapshot(CreateClusterSnapshotMessage $in): Awaitable<\Errors\Result<CreateClusterSnapshotResult>>;
  public function CreateClusterSubnetGroup(CreateClusterSubnetGroupMessage $in): Awaitable<\Errors\Result<CreateClusterSubnetGroupResult>>;
  public function CreateEventSubscription(CreateEventSubscriptionMessage $in): Awaitable<\Errors\Result<CreateEventSubscriptionResult>>;
  public function CreateHsmClientCertificate(CreateHsmClientCertificateMessage $in): Awaitable<\Errors\Result<CreateHsmClientCertificateResult>>;
  public function CreateHsmConfiguration(CreateHsmConfigurationMessage $in): Awaitable<\Errors\Result<CreateHsmConfigurationResult>>;
  public function CreateScheduledAction(CreateScheduledActionMessage $in): Awaitable<\Errors\Result<ScheduledAction>>;
  public function CreateSnapshotCopyGrant(CreateSnapshotCopyGrantMessage $in): Awaitable<\Errors\Result<CreateSnapshotCopyGrantResult>>;
  public function CreateSnapshotSchedule(CreateSnapshotScheduleMessage $in): Awaitable<\Errors\Result<SnapshotSchedule>>;
  public function CreateTags(CreateTagsMessage $in): Awaitable<\Errors\Error>;
  public function CreateUsageLimit(CreateUsageLimitMessage $in): Awaitable<\Errors\Result<UsageLimit>>;
  public function DeleteCluster(DeleteClusterMessage $in): Awaitable<\Errors\Result<DeleteClusterResult>>;
  public function DeleteClusterParameterGroup(DeleteClusterParameterGroupMessage $in): Awaitable<\Errors\Error>;
  public function DeleteClusterSecurityGroup(DeleteClusterSecurityGroupMessage $in): Awaitable<\Errors\Error>;
  public function DeleteClusterSnapshot(DeleteClusterSnapshotMessage $in): Awaitable<\Errors\Result<DeleteClusterSnapshotResult>>;
  public function DeleteClusterSubnetGroup(DeleteClusterSubnetGroupMessage $in): Awaitable<\Errors\Error>;
  public function DeleteEventSubscription(DeleteEventSubscriptionMessage $in): Awaitable<\Errors\Error>;
  public function DeleteHsmClientCertificate(DeleteHsmClientCertificateMessage $in): Awaitable<\Errors\Error>;
  public function DeleteHsmConfiguration(DeleteHsmConfigurationMessage $in): Awaitable<\Errors\Error>;
  public function DeleteScheduledAction(DeleteScheduledActionMessage $in): Awaitable<\Errors\Error>;
  public function DeleteSnapshotCopyGrant(DeleteSnapshotCopyGrantMessage $in): Awaitable<\Errors\Error>;
  public function DeleteSnapshotSchedule(DeleteSnapshotScheduleMessage $in): Awaitable<\Errors\Error>;
  public function DeleteTags(DeleteTagsMessage $in): Awaitable<\Errors\Error>;
  public function DeleteUsageLimit(DeleteUsageLimitMessage $in): Awaitable<\Errors\Error>;
  public function DescribeAccountAttributes(DescribeAccountAttributesMessage $in): Awaitable<\Errors\Result<AccountAttributeList>>;
  public function DescribeClusterDbRevisions(DescribeClusterDbRevisionsMessage $in): Awaitable<\Errors\Result<ClusterDbRevisionsMessage>>;
  public function DescribeClusterParameterGroups(DescribeClusterParameterGroupsMessage $in): Awaitable<\Errors\Result<ClusterParameterGroupsMessage>>;
  public function DescribeClusterParameters(DescribeClusterParametersMessage $in): Awaitable<\Errors\Result<ClusterParameterGroupDetails>>;
  public function DescribeClusterSecurityGroups(DescribeClusterSecurityGroupsMessage $in): Awaitable<\Errors\Result<ClusterSecurityGroupMessage>>;
  public function DescribeClusterSnapshots(DescribeClusterSnapshotsMessage $in): Awaitable<\Errors\Result<SnapshotMessage>>;
  public function DescribeClusterSubnetGroups(DescribeClusterSubnetGroupsMessage $in): Awaitable<\Errors\Result<ClusterSubnetGroupMessage>>;
  public function DescribeClusterTracks(DescribeClusterTracksMessage $in): Awaitable<\Errors\Result<TrackListMessage>>;
  public function DescribeClusterVersions(DescribeClusterVersionsMessage $in): Awaitable<\Errors\Result<ClusterVersionsMessage>>;
  public function DescribeClusters(DescribeClustersMessage $in): Awaitable<\Errors\Result<ClustersMessage>>;
  public function DescribeDefaultClusterParameters(DescribeDefaultClusterParametersMessage $in): Awaitable<\Errors\Result<DescribeDefaultClusterParametersResult>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage $in): Awaitable<\Errors\Result<EventCategoriesMessage>>;
  public function DescribeEventSubscriptions(DescribeEventSubscriptionsMessage $in): Awaitable<\Errors\Result<EventSubscriptionsMessage>>;
  public function DescribeEvents(DescribeEventsMessage $in): Awaitable<\Errors\Result<EventsMessage>>;
  public function DescribeHsmClientCertificates(DescribeHsmClientCertificatesMessage $in): Awaitable<\Errors\Result<HsmClientCertificateMessage>>;
  public function DescribeHsmConfigurations(DescribeHsmConfigurationsMessage $in): Awaitable<\Errors\Result<HsmConfigurationMessage>>;
  public function DescribeLoggingStatus(DescribeLoggingStatusMessage $in): Awaitable<\Errors\Result<LoggingStatus>>;
  public function DescribeNodeConfigurationOptions(DescribeNodeConfigurationOptionsMessage $in): Awaitable<\Errors\Result<NodeConfigurationOptionsMessage>>;
  public function DescribeOrderableClusterOptions(DescribeOrderableClusterOptionsMessage $in): Awaitable<\Errors\Result<OrderableClusterOptionsMessage>>;
  public function DescribeReservedNodeOfferings(DescribeReservedNodeOfferingsMessage $in): Awaitable<\Errors\Result<ReservedNodeOfferingsMessage>>;
  public function DescribeReservedNodes(DescribeReservedNodesMessage $in): Awaitable<\Errors\Result<ReservedNodesMessage>>;
  public function DescribeResize(DescribeResizeMessage $in): Awaitable<\Errors\Result<ResizeProgressMessage>>;
  public function DescribeScheduledActions(DescribeScheduledActionsMessage $in): Awaitable<\Errors\Result<ScheduledActionsMessage>>;
  public function DescribeSnapshotCopyGrants(DescribeSnapshotCopyGrantsMessage $in): Awaitable<\Errors\Result<SnapshotCopyGrantMessage>>;
  public function DescribeSnapshotSchedules(DescribeSnapshotSchedulesMessage $in): Awaitable<\Errors\Result<DescribeSnapshotSchedulesOutputMessage>>;
  public function DescribeStorage( $in): Awaitable<\Errors\Result<CustomerStorageMessage>>;
  public function DescribeTableRestoreStatus(DescribeTableRestoreStatusMessage $in): Awaitable<\Errors\Result<TableRestoreStatusMessage>>;
  public function DescribeTags(DescribeTagsMessage $in): Awaitable<\Errors\Result<TaggedResourceListMessage>>;
  public function DescribeUsageLimits(DescribeUsageLimitsMessage $in): Awaitable<\Errors\Result<UsageLimitList>>;
  public function DisableLogging(DisableLoggingMessage $in): Awaitable<\Errors\Result<LoggingStatus>>;
  public function DisableSnapshotCopy(DisableSnapshotCopyMessage $in): Awaitable<\Errors\Result<DisableSnapshotCopyResult>>;
  public function EnableLogging(EnableLoggingMessage $in): Awaitable<\Errors\Result<LoggingStatus>>;
  public function EnableSnapshotCopy(EnableSnapshotCopyMessage $in): Awaitable<\Errors\Result<EnableSnapshotCopyResult>>;
  public function GetClusterCredentials(GetClusterCredentialsMessage $in): Awaitable<\Errors\Result<ClusterCredentials>>;
  public function GetReservedNodeExchangeOfferings(GetReservedNodeExchangeOfferingsInputMessage $in): Awaitable<\Errors\Result<GetReservedNodeExchangeOfferingsOutputMessage>>;
  public function ModifyCluster(ModifyClusterMessage $in): Awaitable<\Errors\Result<ModifyClusterResult>>;
  public function ModifyClusterDbRevision(ModifyClusterDbRevisionMessage $in): Awaitable<\Errors\Result<ModifyClusterDbRevisionResult>>;
  public function ModifyClusterIamRoles(ModifyClusterIamRolesMessage $in): Awaitable<\Errors\Result<ModifyClusterIamRolesResult>>;
  public function ModifyClusterMaintenance(ModifyClusterMaintenanceMessage $in): Awaitable<\Errors\Result<ModifyClusterMaintenanceResult>>;
  public function ModifyClusterParameterGroup(ModifyClusterParameterGroupMessage $in): Awaitable<\Errors\Result<ClusterParameterGroupNameMessage>>;
  public function ModifyClusterSnapshot(ModifyClusterSnapshotMessage $in): Awaitable<\Errors\Result<ModifyClusterSnapshotResult>>;
  public function ModifyClusterSnapshotSchedule(ModifyClusterSnapshotScheduleMessage $in): Awaitable<\Errors\Error>;
  public function ModifyClusterSubnetGroup(ModifyClusterSubnetGroupMessage $in): Awaitable<\Errors\Result<ModifyClusterSubnetGroupResult>>;
  public function ModifyEventSubscription(ModifyEventSubscriptionMessage $in): Awaitable<\Errors\Result<ModifyEventSubscriptionResult>>;
  public function ModifyScheduledAction(ModifyScheduledActionMessage $in): Awaitable<\Errors\Result<ScheduledAction>>;
  public function ModifySnapshotCopyRetentionPeriod(ModifySnapshotCopyRetentionPeriodMessage $in): Awaitable<\Errors\Result<ModifySnapshotCopyRetentionPeriodResult>>;
  public function ModifySnapshotSchedule(ModifySnapshotScheduleMessage $in): Awaitable<\Errors\Result<SnapshotSchedule>>;
  public function ModifyUsageLimit(ModifyUsageLimitMessage $in): Awaitable<\Errors\Result<UsageLimit>>;
  public function PauseCluster(PauseClusterMessage $in): Awaitable<\Errors\Result<PauseClusterResult>>;
  public function PurchaseReservedNodeOffering(PurchaseReservedNodeOfferingMessage $in): Awaitable<\Errors\Result<PurchaseReservedNodeOfferingResult>>;
  public function RebootCluster(RebootClusterMessage $in): Awaitable<\Errors\Result<RebootClusterResult>>;
  public function ResetClusterParameterGroup(ResetClusterParameterGroupMessage $in): Awaitable<\Errors\Result<ClusterParameterGroupNameMessage>>;
  public function ResizeCluster(ResizeClusterMessage $in): Awaitable<\Errors\Result<ResizeClusterResult>>;
  public function RestoreFromClusterSnapshot(RestoreFromClusterSnapshotMessage $in): Awaitable<\Errors\Result<RestoreFromClusterSnapshotResult>>;
  public function RestoreTableFromClusterSnapshot(RestoreTableFromClusterSnapshotMessage $in): Awaitable<\Errors\Result<RestoreTableFromClusterSnapshotResult>>;
  public function ResumeCluster(ResumeClusterMessage $in): Awaitable<\Errors\Result<ResumeClusterResult>>;
  public function RevokeClusterSecurityGroupIngress(RevokeClusterSecurityGroupIngressMessage $in): Awaitable<\Errors\Result<RevokeClusterSecurityGroupIngressResult>>;
  public function RevokeSnapshotAccess(RevokeSnapshotAccessMessage $in): Awaitable<\Errors\Result<RevokeSnapshotAccessResult>>;
  public function RotateEncryptionKey(RotateEncryptionKeyMessage $in): Awaitable<\Errors\Result<RotateEncryptionKeyResult>>;
}

class AcceptReservedNodeExchangeInputMessage {
  public string $reserved_node_id;
  public string $target_reserved_node_offering_id;

  public function __construct(shape(
    ?'reserved_node_id' => string,
    ?'target_reserved_node_offering_id' => string,
  ) $s = shape()) {
    $this->reserved_node_id = $s['reserved_node_id'] ?? '';
    $this->target_reserved_node_offering_id = $s['target_reserved_node_offering_id'] ?? '';
  }
}

class AcceptReservedNodeExchangeOutputMessage {
  public ?ReservedNode $exchanged_reserved_node;

  public function __construct(shape(
    ?'exchanged_reserved_node' => ?ReservedNode,
  ) $s = shape()) {
    $this->exchanged_reserved_node = $s['exchanged_reserved_node'] ?? null;
  }
}

class AccessToSnapshotDeniedFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AccountAttribute {
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

class AccountAttributeList {
  public ?AttributeList $account_attributes;

  public function __construct(shape(
    ?'account_attributes' => ?AttributeList,
  ) $s = shape()) {
    $this->account_attributes = $s['account_attributes'] ?? vec[];
  }
}

class AccountWithRestoreAccess {
  public string $account_alias;
  public string $account_id;

  public function __construct(shape(
    ?'account_alias' => string,
    ?'account_id' => string,
  ) $s = shape()) {
    $this->account_alias = $s['account_alias'] ?? '';
    $this->account_id = $s['account_id'] ?? '';
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
    $this->attribute_value = $s['attribute_value'] ?? '';
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
    $this->cidrip = $s['cidrip'] ?? '';
    $this->cluster_security_group_name = $s['cluster_security_group_name'] ?? '';
    $this->ec_2_security_group_name = $s['ec_2_security_group_name'] ?? '';
    $this->ec_2_security_group_owner_id = $s['ec_2_security_group_owner_id'] ?? '';
  }
}

class AuthorizeClusterSecurityGroupIngressResult {
  public ?ClusterSecurityGroup $cluster_security_group;

  public function __construct(shape(
    ?'cluster_security_group' => ?ClusterSecurityGroup,
  ) $s = shape()) {
    $this->cluster_security_group = $s['cluster_security_group'] ?? null;
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
    $this->account_with_restore_access = $s['account_with_restore_access'] ?? '';
    $this->snapshot_cluster_identifier = $s['snapshot_cluster_identifier'] ?? '';
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
  }
}

class AuthorizeSnapshotAccessResult {
  public ?Snapshot $snapshot;

  public function __construct(shape(
    ?'snapshot' => ?Snapshot,
  ) $s = shape()) {
    $this->snapshot = $s['snapshot'] ?? null;
  }
}

class AvailabilityZone {
  public string $name;
  public ?SupportedPlatformsList $supported_platforms;

  public function __construct(shape(
    ?'name' => string,
    ?'supported_platforms' => ?SupportedPlatformsList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->supported_platforms = $s['supported_platforms'] ?? vec[];
  }
}

type AvailabilityZoneList = vec<AvailabilityZone>;

class BatchDeleteClusterSnapshotsRequest {
  public ?DeleteClusterSnapshotMessageList $identifiers;

  public function __construct(shape(
    ?'identifiers' => ?DeleteClusterSnapshotMessageList,
  ) $s = shape()) {
    $this->identifiers = $s['identifiers'] ?? vec[];
  }
}

class BatchDeleteClusterSnapshotsResult {
  public ?BatchSnapshotOperationErrorList $errors;
  public ?SnapshotIdentifierList $resources;

  public function __construct(shape(
    ?'errors' => ?BatchSnapshotOperationErrorList,
    ?'resources' => ?SnapshotIdentifierList,
  ) $s = shape()) {
    $this->errors = $s['errors'] ?? vec[];
    $this->resources = $s['resources'] ?? vec[];
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
  public bool $force;
  public ?IntegerOptional $manual_snapshot_retention_period;
  public ?SnapshotIdentifierList $snapshot_identifier_list;

  public function __construct(shape(
    ?'force' => bool,
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'snapshot_identifier_list' => ?SnapshotIdentifierList,
  ) $s = shape()) {
    $this->force = $s['force'] ?? false;
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->snapshot_identifier_list = $s['snapshot_identifier_list'] ?? vec[];
  }
}

class BatchModifyClusterSnapshotsOutputMessage {
  public ?BatchSnapshotOperationErrors $errors;
  public ?SnapshotIdentifierList $resources;

  public function __construct(shape(
    ?'errors' => ?BatchSnapshotOperationErrors,
    ?'resources' => ?SnapshotIdentifierList,
  ) $s = shape()) {
    $this->errors = $s['errors'] ?? vec[];
    $this->resources = $s['resources'] ?? vec[];
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
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class Cluster {
  public bool $allow_version_upgrade;
  public int $automated_snapshot_retention_period;
  public string $availability_zone;
  public string $cluster_availability_status;
  public ?TStamp $cluster_create_time;
  public string $cluster_identifier;
  public ?ClusterNodesList $cluster_nodes;
  public ?ClusterParameterGroupStatusList $cluster_parameter_groups;
  public string $cluster_public_key;
  public string $cluster_revision_number;
  public ?ClusterSecurityGroupMembershipList $cluster_security_groups;
  public ?ClusterSnapshotCopyStatus $cluster_snapshot_copy_status;
  public string $cluster_status;
  public string $cluster_subnet_group_name;
  public string $cluster_version;
  public string $db_name;
  public ?DataTransferProgress $data_transfer_progress;
  public ?DeferredMaintenanceWindowsList $deferred_maintenance_windows;
  public ?ElasticIpStatus $elastic_ip_status;
  public string $elastic_resize_number_of_node_options;
  public bool $encrypted;
  public ?Endpoint $endpoint;
  public bool $enhanced_vpc_routing;
  public ?TStamp $expected_next_snapshot_schedule_time;
  public string $expected_next_snapshot_schedule_time_status;
  public ?HsmStatus $hsm_status;
  public ?ClusterIamRoleList $iam_roles;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public int $manual_snapshot_retention_period;
  public string $master_username;
  public string $modify_status;
  public ?TStamp $next_maintenance_window_start_time;
  public string $node_type;
  public int $number_of_nodes;
  public ?PendingActionsList $pending_actions;
  public ?PendingModifiedValues $pending_modified_values;
  public string $preferred_maintenance_window;
  public bool $publicly_accessible;
  public ?ResizeInfo $resize_info;
  public ?RestoreStatus $restore_status;
  public string $snapshot_schedule_identifier;
  public ?ScheduleState $snapshot_schedule_state;
  public ?TagList $tags;
  public string $vpc_id;
  public ?VpcSecurityGroupMembershipList $vpc_security_groups;

  public function __construct(shape(
    ?'allow_version_upgrade' => bool,
    ?'automated_snapshot_retention_period' => int,
    ?'availability_zone' => string,
    ?'cluster_availability_status' => string,
    ?'cluster_create_time' => ?TStamp,
    ?'cluster_identifier' => string,
    ?'cluster_nodes' => ?ClusterNodesList,
    ?'cluster_parameter_groups' => ?ClusterParameterGroupStatusList,
    ?'cluster_public_key' => string,
    ?'cluster_revision_number' => string,
    ?'cluster_security_groups' => ?ClusterSecurityGroupMembershipList,
    ?'cluster_snapshot_copy_status' => ?ClusterSnapshotCopyStatus,
    ?'cluster_status' => string,
    ?'cluster_subnet_group_name' => string,
    ?'cluster_version' => string,
    ?'db_name' => string,
    ?'data_transfer_progress' => ?DataTransferProgress,
    ?'deferred_maintenance_windows' => ?DeferredMaintenanceWindowsList,
    ?'elastic_ip_status' => ?ElasticIpStatus,
    ?'elastic_resize_number_of_node_options' => string,
    ?'encrypted' => bool,
    ?'endpoint' => ?Endpoint,
    ?'enhanced_vpc_routing' => bool,
    ?'expected_next_snapshot_schedule_time' => ?TStamp,
    ?'expected_next_snapshot_schedule_time_status' => string,
    ?'hsm_status' => ?HsmStatus,
    ?'iam_roles' => ?ClusterIamRoleList,
    ?'kms_key_id' => string,
    ?'maintenance_track_name' => string,
    ?'manual_snapshot_retention_period' => int,
    ?'master_username' => string,
    ?'modify_status' => string,
    ?'next_maintenance_window_start_time' => ?TStamp,
    ?'node_type' => string,
    ?'number_of_nodes' => int,
    ?'pending_actions' => ?PendingActionsList,
    ?'pending_modified_values' => ?PendingModifiedValues,
    ?'preferred_maintenance_window' => string,
    ?'publicly_accessible' => bool,
    ?'resize_info' => ?ResizeInfo,
    ?'restore_status' => ?RestoreStatus,
    ?'snapshot_schedule_identifier' => string,
    ?'snapshot_schedule_state' => ?ScheduleState,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
    ?'vpc_security_groups' => ?VpcSecurityGroupMembershipList,
  ) $s = shape()) {
    $this->allow_version_upgrade = $s['allow_version_upgrade'] ?? false;
    $this->automated_snapshot_retention_period = $s['automated_snapshot_retention_period'] ?? 0;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->cluster_availability_status = $s['cluster_availability_status'] ?? '';
    $this->cluster_create_time = $s['cluster_create_time'] ?? 0;
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->cluster_nodes = $s['cluster_nodes'] ?? vec[];
    $this->cluster_parameter_groups = $s['cluster_parameter_groups'] ?? vec[];
    $this->cluster_public_key = $s['cluster_public_key'] ?? '';
    $this->cluster_revision_number = $s['cluster_revision_number'] ?? '';
    $this->cluster_security_groups = $s['cluster_security_groups'] ?? vec[];
    $this->cluster_snapshot_copy_status = $s['cluster_snapshot_copy_status'] ?? null;
    $this->cluster_status = $s['cluster_status'] ?? '';
    $this->cluster_subnet_group_name = $s['cluster_subnet_group_name'] ?? '';
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->db_name = $s['db_name'] ?? '';
    $this->data_transfer_progress = $s['data_transfer_progress'] ?? null;
    $this->deferred_maintenance_windows = $s['deferred_maintenance_windows'] ?? vec[];
    $this->elastic_ip_status = $s['elastic_ip_status'] ?? null;
    $this->elastic_resize_number_of_node_options = $s['elastic_resize_number_of_node_options'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->endpoint = $s['endpoint'] ?? null;
    $this->enhanced_vpc_routing = $s['enhanced_vpc_routing'] ?? false;
    $this->expected_next_snapshot_schedule_time = $s['expected_next_snapshot_schedule_time'] ?? 0;
    $this->expected_next_snapshot_schedule_time_status = $s['expected_next_snapshot_schedule_time_status'] ?? '';
    $this->hsm_status = $s['hsm_status'] ?? null;
    $this->iam_roles = $s['iam_roles'] ?? vec[];
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->master_username = $s['master_username'] ?? '';
    $this->modify_status = $s['modify_status'] ?? '';
    $this->next_maintenance_window_start_time = $s['next_maintenance_window_start_time'] ?? 0;
    $this->node_type = $s['node_type'] ?? '';
    $this->number_of_nodes = $s['number_of_nodes'] ?? 0;
    $this->pending_actions = $s['pending_actions'] ?? vec[];
    $this->pending_modified_values = $s['pending_modified_values'] ?? null;
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->resize_info = $s['resize_info'] ?? null;
    $this->restore_status = $s['restore_status'] ?? null;
    $this->snapshot_schedule_identifier = $s['snapshot_schedule_identifier'] ?? '';
    $this->snapshot_schedule_state = $s['snapshot_schedule_state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpc_security_groups = $s['vpc_security_groups'] ?? vec[];
  }
}

class ClusterAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterAssociatedToSchedule {
  public string $cluster_identifier;
  public ?ScheduleState $schedule_association_state;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'schedule_association_state' => ?ScheduleState,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->schedule_association_state = $s['schedule_association_state'] ?? '';
  }
}

class ClusterCredentials {
  public ?SensitiveString $db_password;
  public string $db_user;
  public ?TStamp $expiration;

  public function __construct(shape(
    ?'db_password' => ?SensitiveString,
    ?'db_user' => string,
    ?'expiration' => ?TStamp,
  ) $s = shape()) {
    $this->db_password = $s['db_password'] ?? '';
    $this->db_user = $s['db_user'] ?? '';
    $this->expiration = $s['expiration'] ?? 0;
  }
}

class ClusterDbRevision {
  public string $cluster_identifier;
  public string $current_database_revision;
  public ?TStamp $database_revision_release_date;
  public ?RevisionTargetsList $revision_targets;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'current_database_revision' => string,
    ?'database_revision_release_date' => ?TStamp,
    ?'revision_targets' => ?RevisionTargetsList,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->current_database_revision = $s['current_database_revision'] ?? '';
    $this->database_revision_release_date = $s['database_revision_release_date'] ?? 0;
    $this->revision_targets = $s['revision_targets'] ?? vec[];
  }
}

type ClusterDbRevisionsList = vec<ClusterDbRevision>;

class ClusterDbRevisionsMessage {
  public ?ClusterDbRevisionsList $cluster_db_revisions;
  public string $marker;

  public function __construct(shape(
    ?'cluster_db_revisions' => ?ClusterDbRevisionsList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->cluster_db_revisions = $s['cluster_db_revisions'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class ClusterIamRole {
  public string $apply_status;
  public string $iam_role_arn;

  public function __construct(shape(
    ?'apply_status' => string,
    ?'iam_role_arn' => string,
  ) $s = shape()) {
    $this->apply_status = $s['apply_status'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
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
    $this->node_role = $s['node_role'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->public_ip_address = $s['public_ip_address'] ?? '';
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
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => string,
    ?'parameter_group_family' => string,
    ?'parameter_group_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->parameter_group_family = $s['parameter_group_family'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ClusterParameterGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterParameterGroupDetails {
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

class ClusterParameterGroupNameMessage {
  public string $parameter_group_name;
  public string $parameter_group_status;

  public function __construct(shape(
    ?'parameter_group_name' => string,
    ?'parameter_group_status' => string,
  ) $s = shape()) {
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->parameter_group_status = $s['parameter_group_status'] ?? '';
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
  public ?ClusterParameterStatusList $cluster_parameter_status_list;
  public string $parameter_apply_status;
  public string $parameter_group_name;

  public function __construct(shape(
    ?'cluster_parameter_status_list' => ?ClusterParameterStatusList,
    ?'parameter_apply_status' => string,
    ?'parameter_group_name' => string,
  ) $s = shape()) {
    $this->cluster_parameter_status_list = $s['cluster_parameter_status_list'] ?? vec[];
    $this->parameter_apply_status = $s['parameter_apply_status'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
  }
}

type ClusterParameterGroupStatusList = vec<ClusterParameterGroupStatus>;

class ClusterParameterGroupsMessage {
  public string $marker;
  public ?ParameterGroupList $parameter_groups;

  public function __construct(shape(
    ?'marker' => string,
    ?'parameter_groups' => ?ParameterGroupList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->parameter_groups = $s['parameter_groups'] ?? vec[];
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
    $this->parameter_apply_error_description = $s['parameter_apply_error_description'] ?? '';
    $this->parameter_apply_status = $s['parameter_apply_status'] ?? '';
    $this->parameter_name = $s['parameter_name'] ?? '';
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
  public ?EC2SecurityGroupList $ec_2_security_groups;
  public ?IPRangeList $ip_ranges;
  public ?TagList $tags;

  public function __construct(shape(
    ?'cluster_security_group_name' => string,
    ?'description' => string,
    ?'ec_2_security_groups' => ?EC2SecurityGroupList,
    ?'ip_ranges' => ?IPRangeList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->cluster_security_group_name = $s['cluster_security_group_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->ec_2_security_groups = $s['ec_2_security_groups'] ?? vec[];
    $this->ip_ranges = $s['ip_ranges'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
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
    $this->cluster_security_group_name = $s['cluster_security_group_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ClusterSecurityGroupMembershipList = vec<ClusterSecurityGroupMembership>;

class ClusterSecurityGroupMessage {
  public ?ClusterSecurityGroups $cluster_security_groups;
  public string $marker;

  public function __construct(shape(
    ?'cluster_security_groups' => ?ClusterSecurityGroups,
    ?'marker' => string,
  ) $s = shape()) {
    $this->cluster_security_groups = $s['cluster_security_groups'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
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
  public ?Long $retention_period;
  public string $snapshot_copy_grant_name;

  public function __construct(shape(
    ?'destination_region' => string,
    ?'manual_snapshot_retention_period' => int,
    ?'retention_period' => ?Long,
    ?'snapshot_copy_grant_name' => string,
  ) $s = shape()) {
    $this->destination_region = $s['destination_region'] ?? '';
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->retention_period = $s['retention_period'] ?? 0;
    $this->snapshot_copy_grant_name = $s['snapshot_copy_grant_name'] ?? '';
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
  public ?SubnetList $subnets;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'cluster_subnet_group_name' => string,
    ?'description' => string,
    ?'subnet_group_status' => string,
    ?'subnets' => ?SubnetList,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $s['cluster_subnet_group_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->subnet_group_status = $s['subnet_group_status'] ?? '';
    $this->subnets = $s['subnets'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class ClusterSubnetGroupAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ClusterSubnetGroupMessage {
  public ?ClusterSubnetGroups $cluster_subnet_groups;
  public string $marker;

  public function __construct(shape(
    ?'cluster_subnet_groups' => ?ClusterSubnetGroups,
    ?'marker' => string,
  ) $s = shape()) {
    $this->cluster_subnet_groups = $s['cluster_subnet_groups'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
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
    $this->cluster_parameter_group_family = $s['cluster_parameter_group_family'] ?? '';
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

type ClusterVersionList = vec<ClusterVersion>;

class ClusterVersionsMessage {
  public ?ClusterVersionList $cluster_versions;
  public string $marker;

  public function __construct(shape(
    ?'cluster_versions' => ?ClusterVersionList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->cluster_versions = $s['cluster_versions'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class ClustersMessage {
  public ?ClusterList $clusters;
  public string $marker;

  public function __construct(shape(
    ?'clusters' => ?ClusterList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->clusters = $s['clusters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class CopyClusterSnapshotMessage {
  public ?IntegerOptional $manual_snapshot_retention_period;
  public string $source_snapshot_cluster_identifier;
  public string $source_snapshot_identifier;
  public string $target_snapshot_identifier;

  public function __construct(shape(
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'source_snapshot_cluster_identifier' => string,
    ?'source_snapshot_identifier' => string,
    ?'target_snapshot_identifier' => string,
  ) $s = shape()) {
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->source_snapshot_cluster_identifier = $s['source_snapshot_cluster_identifier'] ?? '';
    $this->source_snapshot_identifier = $s['source_snapshot_identifier'] ?? '';
    $this->target_snapshot_identifier = $s['target_snapshot_identifier'] ?? '';
  }
}

class CopyClusterSnapshotResult {
  public ?Snapshot $snapshot;

  public function __construct(shape(
    ?'snapshot' => ?Snapshot,
  ) $s = shape()) {
    $this->snapshot = $s['snapshot'] ?? null;
  }
}

class CopyToRegionDisabledFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateClusterMessage {
  public string $additional_info;
  public ?BooleanOptional $allow_version_upgrade;
  public ?IntegerOptional $automated_snapshot_retention_period;
  public string $availability_zone;
  public string $cluster_identifier;
  public string $cluster_parameter_group_name;
  public ?ClusterSecurityGroupNameList $cluster_security_groups;
  public string $cluster_subnet_group_name;
  public string $cluster_type;
  public string $cluster_version;
  public string $db_name;
  public string $elastic_ip;
  public ?BooleanOptional $encrypted;
  public ?BooleanOptional $enhanced_vpc_routing;
  public string $hsm_client_certificate_identifier;
  public string $hsm_configuration_identifier;
  public ?IamRoleArnList $iam_roles;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public ?IntegerOptional $manual_snapshot_retention_period;
  public string $master_user_password;
  public string $master_username;
  public string $node_type;
  public ?IntegerOptional $number_of_nodes;
  public ?IntegerOptional $port;
  public string $preferred_maintenance_window;
  public ?BooleanOptional $publicly_accessible;
  public string $snapshot_schedule_identifier;
  public ?TagList $tags;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'additional_info' => string,
    ?'allow_version_upgrade' => ?BooleanOptional,
    ?'automated_snapshot_retention_period' => ?IntegerOptional,
    ?'availability_zone' => string,
    ?'cluster_identifier' => string,
    ?'cluster_parameter_group_name' => string,
    ?'cluster_security_groups' => ?ClusterSecurityGroupNameList,
    ?'cluster_subnet_group_name' => string,
    ?'cluster_type' => string,
    ?'cluster_version' => string,
    ?'db_name' => string,
    ?'elastic_ip' => string,
    ?'encrypted' => ?BooleanOptional,
    ?'enhanced_vpc_routing' => ?BooleanOptional,
    ?'hsm_client_certificate_identifier' => string,
    ?'hsm_configuration_identifier' => string,
    ?'iam_roles' => ?IamRoleArnList,
    ?'kms_key_id' => string,
    ?'maintenance_track_name' => string,
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'master_user_password' => string,
    ?'master_username' => string,
    ?'node_type' => string,
    ?'number_of_nodes' => ?IntegerOptional,
    ?'port' => ?IntegerOptional,
    ?'preferred_maintenance_window' => string,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'snapshot_schedule_identifier' => string,
    ?'tags' => ?TagList,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->additional_info = $s['additional_info'] ?? '';
    $this->allow_version_upgrade = $s['allow_version_upgrade'] ?? false;
    $this->automated_snapshot_retention_period = $s['automated_snapshot_retention_period'] ?? 0;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->cluster_parameter_group_name = $s['cluster_parameter_group_name'] ?? '';
    $this->cluster_security_groups = $s['cluster_security_groups'] ?? vec[];
    $this->cluster_subnet_group_name = $s['cluster_subnet_group_name'] ?? '';
    $this->cluster_type = $s['cluster_type'] ?? '';
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->db_name = $s['db_name'] ?? '';
    $this->elastic_ip = $s['elastic_ip'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->enhanced_vpc_routing = $s['enhanced_vpc_routing'] ?? false;
    $this->hsm_client_certificate_identifier = $s['hsm_client_certificate_identifier'] ?? '';
    $this->hsm_configuration_identifier = $s['hsm_configuration_identifier'] ?? '';
    $this->iam_roles = $s['iam_roles'] ?? vec[];
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->number_of_nodes = $s['number_of_nodes'] ?? 0;
    $this->port = $s['port'] ?? 0;
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->snapshot_schedule_identifier = $s['snapshot_schedule_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class CreateClusterParameterGroupMessage {
  public string $description;
  public string $parameter_group_family;
  public string $parameter_group_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => string,
    ?'parameter_group_family' => string,
    ?'parameter_group_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->parameter_group_family = $s['parameter_group_family'] ?? '';
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateClusterParameterGroupResult {
  public ?ClusterParameterGroup $cluster_parameter_group;

  public function __construct(shape(
    ?'cluster_parameter_group' => ?ClusterParameterGroup,
  ) $s = shape()) {
    $this->cluster_parameter_group = $s['cluster_parameter_group'] ?? null;
  }
}

class CreateClusterResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class CreateClusterSecurityGroupMessage {
  public string $cluster_security_group_name;
  public string $description;
  public ?TagList $tags;

  public function __construct(shape(
    ?'cluster_security_group_name' => string,
    ?'description' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->cluster_security_group_name = $s['cluster_security_group_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateClusterSecurityGroupResult {
  public ?ClusterSecurityGroup $cluster_security_group;

  public function __construct(shape(
    ?'cluster_security_group' => ?ClusterSecurityGroup,
  ) $s = shape()) {
    $this->cluster_security_group = $s['cluster_security_group'] ?? null;
  }
}

class CreateClusterSnapshotMessage {
  public string $cluster_identifier;
  public ?IntegerOptional $manual_snapshot_retention_period;
  public string $snapshot_identifier;
  public ?TagList $tags;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'snapshot_identifier' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateClusterSnapshotResult {
  public ?Snapshot $snapshot;

  public function __construct(shape(
    ?'snapshot' => ?Snapshot,
  ) $s = shape()) {
    $this->snapshot = $s['snapshot'] ?? null;
  }
}

class CreateClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;
  public string $description;
  public ?SubnetIdentifierList $subnet_ids;
  public ?TagList $tags;

  public function __construct(shape(
    ?'cluster_subnet_group_name' => string,
    ?'description' => string,
    ?'subnet_ids' => ?SubnetIdentifierList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $s['cluster_subnet_group_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateClusterSubnetGroupResult {
  public ?ClusterSubnetGroup $cluster_subnet_group;

  public function __construct(shape(
    ?'cluster_subnet_group' => ?ClusterSubnetGroup,
  ) $s = shape()) {
    $this->cluster_subnet_group = $s['cluster_subnet_group'] ?? null;
  }
}

class CreateEventSubscriptionMessage {
  public ?BooleanOptional $enabled;
  public ?EventCategoriesList $event_categories;
  public string $severity;
  public string $sns_topic_arn;
  public ?SourceIdsList $source_ids;
  public string $source_type;
  public string $subscription_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'enabled' => ?BooleanOptional,
    ?'event_categories' => ?EventCategoriesList,
    ?'severity' => string,
    ?'sns_topic_arn' => string,
    ?'source_ids' => ?SourceIdsList,
    ?'source_type' => string,
    ?'subscription_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->severity = $s['severity'] ?? '';
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

class CreateHsmClientCertificateMessage {
  public string $hsm_client_certificate_identifier;
  public ?TagList $tags;

  public function __construct(shape(
    ?'hsm_client_certificate_identifier' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $s['hsm_client_certificate_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateHsmClientCertificateResult {
  public ?HsmClientCertificate $hsm_client_certificate;

  public function __construct(shape(
    ?'hsm_client_certificate' => ?HsmClientCertificate,
  ) $s = shape()) {
    $this->hsm_client_certificate = $s['hsm_client_certificate'] ?? null;
  }
}

class CreateHsmConfigurationMessage {
  public string $description;
  public string $hsm_configuration_identifier;
  public string $hsm_ip_address;
  public string $hsm_partition_name;
  public string $hsm_partition_password;
  public string $hsm_server_public_certificate;
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => string,
    ?'hsm_configuration_identifier' => string,
    ?'hsm_ip_address' => string,
    ?'hsm_partition_name' => string,
    ?'hsm_partition_password' => string,
    ?'hsm_server_public_certificate' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->hsm_configuration_identifier = $s['hsm_configuration_identifier'] ?? '';
    $this->hsm_ip_address = $s['hsm_ip_address'] ?? '';
    $this->hsm_partition_name = $s['hsm_partition_name'] ?? '';
    $this->hsm_partition_password = $s['hsm_partition_password'] ?? '';
    $this->hsm_server_public_certificate = $s['hsm_server_public_certificate'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateHsmConfigurationResult {
  public ?HsmConfiguration $hsm_configuration;

  public function __construct(shape(
    ?'hsm_configuration' => ?HsmConfiguration,
  ) $s = shape()) {
    $this->hsm_configuration = $s['hsm_configuration'] ?? null;
  }
}

class CreateScheduledActionMessage {
  public ?BooleanOptional $enable;
  public ?TStamp $end_time;
  public string $iam_role;
  public string $schedule;
  public string $scheduled_action_description;
  public string $scheduled_action_name;
  public ?TStamp $start_time;
  public ?ScheduledActionType $target_action;

  public function __construct(shape(
    ?'enable' => ?BooleanOptional,
    ?'end_time' => ?TStamp,
    ?'iam_role' => string,
    ?'schedule' => string,
    ?'scheduled_action_description' => string,
    ?'scheduled_action_name' => string,
    ?'start_time' => ?TStamp,
    ?'target_action' => ?ScheduledActionType,
  ) $s = shape()) {
    $this->enable = $s['enable'] ?? false;
    $this->end_time = $s['end_time'] ?? 0;
    $this->iam_role = $s['iam_role'] ?? '';
    $this->schedule = $s['schedule'] ?? '';
    $this->scheduled_action_description = $s['scheduled_action_description'] ?? '';
    $this->scheduled_action_name = $s['scheduled_action_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->target_action = $s['target_action'] ?? null;
  }
}

class CreateSnapshotCopyGrantMessage {
  public string $kms_key_id;
  public string $snapshot_copy_grant_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'kms_key_id' => string,
    ?'snapshot_copy_grant_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->snapshot_copy_grant_name = $s['snapshot_copy_grant_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateSnapshotCopyGrantResult {
  public ?SnapshotCopyGrant $snapshot_copy_grant;

  public function __construct(shape(
    ?'snapshot_copy_grant' => ?SnapshotCopyGrant,
  ) $s = shape()) {
    $this->snapshot_copy_grant = $s['snapshot_copy_grant'] ?? null;
  }
}

class CreateSnapshotScheduleMessage {
  public ?BooleanOptional $dry_run;
  public ?IntegerOptional $next_invocations;
  public ?ScheduleDefinitionList $schedule_definitions;
  public string $schedule_description;
  public string $schedule_identifier;
  public ?TagList $tags;

  public function __construct(shape(
    ?'dry_run' => ?BooleanOptional,
    ?'next_invocations' => ?IntegerOptional,
    ?'schedule_definitions' => ?ScheduleDefinitionList,
    ?'schedule_description' => string,
    ?'schedule_identifier' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->next_invocations = $s['next_invocations'] ?? 0;
    $this->schedule_definitions = $s['schedule_definitions'] ?? vec[];
    $this->schedule_description = $s['schedule_description'] ?? '';
    $this->schedule_identifier = $s['schedule_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateTagsMessage {
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

class CreateUsageLimitMessage {
  public ?Long $amount;
  public ?UsageLimitBreachAction $breach_action;
  public string $cluster_identifier;
  public ?UsageLimitFeatureType $feature_type;
  public ?UsageLimitLimitType $limit_type;
  public ?UsageLimitPeriod $period;
  public ?TagList $tags;

  public function __construct(shape(
    ?'amount' => ?Long,
    ?'breach_action' => ?UsageLimitBreachAction,
    ?'cluster_identifier' => string,
    ?'feature_type' => ?UsageLimitFeatureType,
    ?'limit_type' => ?UsageLimitLimitType,
    ?'period' => ?UsageLimitPeriod,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->amount = $s['amount'] ?? 0;
    $this->breach_action = $s['breach_action'] ?? '';
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->feature_type = $s['feature_type'] ?? '';
    $this->limit_type = $s['limit_type'] ?? '';
    $this->period = $s['period'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CustomerStorageMessage {
  public ?Double $total_backup_size_in_mega_bytes;
  public ?Double $total_provisioned_storage_in_mega_bytes;

  public function __construct(shape(
    ?'total_backup_size_in_mega_bytes' => ?Double,
    ?'total_provisioned_storage_in_mega_bytes' => ?Double,
  ) $s = shape()) {
    $this->total_backup_size_in_mega_bytes = $s['total_backup_size_in_mega_bytes'] ?? 0.0;
    $this->total_provisioned_storage_in_mega_bytes = $s['total_provisioned_storage_in_mega_bytes'] ?? 0.0;
  }
}

class DataTransferProgress {
  public ?DoubleOptional $current_rate_in_mega_bytes_per_second;
  public ?Long $data_transferred_in_mega_bytes;
  public ?LongOptional $elapsed_time_in_seconds;
  public ?LongOptional $estimated_time_to_completion_in_seconds;
  public string $status;
  public ?Long $total_data_in_mega_bytes;

  public function __construct(shape(
    ?'current_rate_in_mega_bytes_per_second' => ?DoubleOptional,
    ?'data_transferred_in_mega_bytes' => ?Long,
    ?'elapsed_time_in_seconds' => ?LongOptional,
    ?'estimated_time_to_completion_in_seconds' => ?LongOptional,
    ?'status' => string,
    ?'total_data_in_mega_bytes' => ?Long,
  ) $s = shape()) {
    $this->current_rate_in_mega_bytes_per_second = $s['current_rate_in_mega_bytes_per_second'] ?? 0.0;
    $this->data_transferred_in_mega_bytes = $s['data_transferred_in_mega_bytes'] ?? 0;
    $this->elapsed_time_in_seconds = $s['elapsed_time_in_seconds'] ?? 0;
    $this->estimated_time_to_completion_in_seconds = $s['estimated_time_to_completion_in_seconds'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->total_data_in_mega_bytes = $s['total_data_in_mega_bytes'] ?? 0;
  }
}

type DbGroupList = vec<String>;

class DefaultClusterParameters {
  public string $marker;
  public string $parameter_group_family;
  public ?ParametersList $parameters;

  public function __construct(shape(
    ?'marker' => string,
    ?'parameter_group_family' => string,
    ?'parameters' => ?ParametersList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->parameter_group_family = $s['parameter_group_family'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

class DeferredMaintenanceWindow {
  public ?TStamp $defer_maintenance_end_time;
  public string $defer_maintenance_identifier;
  public ?TStamp $defer_maintenance_start_time;

  public function __construct(shape(
    ?'defer_maintenance_end_time' => ?TStamp,
    ?'defer_maintenance_identifier' => string,
    ?'defer_maintenance_start_time' => ?TStamp,
  ) $s = shape()) {
    $this->defer_maintenance_end_time = $s['defer_maintenance_end_time'] ?? 0;
    $this->defer_maintenance_identifier = $s['defer_maintenance_identifier'] ?? '';
    $this->defer_maintenance_start_time = $s['defer_maintenance_start_time'] ?? 0;
  }
}

type DeferredMaintenanceWindowsList = vec<DeferredMaintenanceWindow>;

class DeleteClusterMessage {
  public string $cluster_identifier;
  public string $final_cluster_snapshot_identifier;
  public ?IntegerOptional $final_cluster_snapshot_retention_period;
  public bool $skip_final_cluster_snapshot;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'final_cluster_snapshot_identifier' => string,
    ?'final_cluster_snapshot_retention_period' => ?IntegerOptional,
    ?'skip_final_cluster_snapshot' => bool,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->final_cluster_snapshot_identifier = $s['final_cluster_snapshot_identifier'] ?? '';
    $this->final_cluster_snapshot_retention_period = $s['final_cluster_snapshot_retention_period'] ?? 0;
    $this->skip_final_cluster_snapshot = $s['skip_final_cluster_snapshot'] ?? false;
  }
}

class DeleteClusterParameterGroupMessage {
  public string $parameter_group_name;

  public function __construct(shape(
    ?'parameter_group_name' => string,
  ) $s = shape()) {
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
  }
}

class DeleteClusterResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class DeleteClusterSecurityGroupMessage {
  public string $cluster_security_group_name;

  public function __construct(shape(
    ?'cluster_security_group_name' => string,
  ) $s = shape()) {
    $this->cluster_security_group_name = $s['cluster_security_group_name'] ?? '';
  }
}

class DeleteClusterSnapshotMessage {
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;

  public function __construct(shape(
    ?'snapshot_cluster_identifier' => string,
    ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->snapshot_cluster_identifier = $s['snapshot_cluster_identifier'] ?? '';
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
  }
}

type DeleteClusterSnapshotMessageList = vec<DeleteClusterSnapshotMessage>;

class DeleteClusterSnapshotResult {
  public ?Snapshot $snapshot;

  public function __construct(shape(
    ?'snapshot' => ?Snapshot,
  ) $s = shape()) {
    $this->snapshot = $s['snapshot'] ?? null;
  }
}

class DeleteClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;

  public function __construct(shape(
    ?'cluster_subnet_group_name' => string,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $s['cluster_subnet_group_name'] ?? '';
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

class DeleteHsmClientCertificateMessage {
  public string $hsm_client_certificate_identifier;

  public function __construct(shape(
    ?'hsm_client_certificate_identifier' => string,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $s['hsm_client_certificate_identifier'] ?? '';
  }
}

class DeleteHsmConfigurationMessage {
  public string $hsm_configuration_identifier;

  public function __construct(shape(
    ?'hsm_configuration_identifier' => string,
  ) $s = shape()) {
    $this->hsm_configuration_identifier = $s['hsm_configuration_identifier'] ?? '';
  }
}

class DeleteScheduledActionMessage {
  public string $scheduled_action_name;

  public function __construct(shape(
    ?'scheduled_action_name' => string,
  ) $s = shape()) {
    $this->scheduled_action_name = $s['scheduled_action_name'] ?? '';
  }
}

class DeleteSnapshotCopyGrantMessage {
  public string $snapshot_copy_grant_name;

  public function __construct(shape(
    ?'snapshot_copy_grant_name' => string,
  ) $s = shape()) {
    $this->snapshot_copy_grant_name = $s['snapshot_copy_grant_name'] ?? '';
  }
}

class DeleteSnapshotScheduleMessage {
  public string $schedule_identifier;

  public function __construct(shape(
    ?'schedule_identifier' => string,
  ) $s = shape()) {
    $this->schedule_identifier = $s['schedule_identifier'] ?? '';
  }
}

class DeleteTagsMessage {
  public string $resource_name;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_name' => string,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_name = $s['resource_name'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class DeleteUsageLimitMessage {
  public string $usage_limit_id;

  public function __construct(shape(
    ?'usage_limit_id' => string,
  ) $s = shape()) {
    $this->usage_limit_id = $s['usage_limit_id'] ?? '';
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
  public ?AttributeNameList $attribute_names;

  public function __construct(shape(
    ?'attribute_names' => ?AttributeNameList,
  ) $s = shape()) {
    $this->attribute_names = $s['attribute_names'] ?? vec[];
  }
}

class DescribeClusterDbRevisionsMessage {
  public string $cluster_identifier;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeClusterParameterGroupsMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $parameter_group_name;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'parameter_group_name' => string,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeClusterParametersMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $parameter_group_name;
  public string $source;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'parameter_group_name' => string,
    ?'source' => string,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->source = $s['source'] ?? '';
  }
}

class DescribeClusterSecurityGroupsMessage {
  public string $cluster_security_group_name;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'cluster_security_group_name' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->cluster_security_group_name = $s['cluster_security_group_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeClusterSnapshotsMessage {
  public ?BooleanOptional $cluster_exists;
  public string $cluster_identifier;
  public ?TStamp $end_time;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $owner_account;
  public string $snapshot_identifier;
  public string $snapshot_type;
  public ?SnapshotSortingEntityList $sorting_entities;
  public ?TStamp $start_time;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'cluster_exists' => ?BooleanOptional,
    ?'cluster_identifier' => string,
    ?'end_time' => ?TStamp,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'owner_account' => string,
    ?'snapshot_identifier' => string,
    ?'snapshot_type' => string,
    ?'sorting_entities' => ?SnapshotSortingEntityList,
    ?'start_time' => ?TStamp,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->cluster_exists = $s['cluster_exists'] ?? false;
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->owner_account = $s['owner_account'] ?? '';
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
    $this->snapshot_type = $s['snapshot_type'] ?? '';
    $this->sorting_entities = $s['sorting_entities'] ?? vec[];
    $this->start_time = $s['start_time'] ?? 0;
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeClusterSubnetGroupsMessage {
  public string $cluster_subnet_group_name;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'cluster_subnet_group_name' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $s['cluster_subnet_group_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeClusterTracksMessage {
  public string $maintenance_track_name;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'maintenance_track_name' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeClusterVersionsMessage {
  public string $cluster_parameter_group_family;
  public string $cluster_version;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'cluster_parameter_group_family' => string,
    ?'cluster_version' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->cluster_parameter_group_family = $s['cluster_parameter_group_family'] ?? '';
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeClustersMessage {
  public string $cluster_identifier;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeDefaultClusterParametersMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $parameter_group_family;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'parameter_group_family' => string,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->parameter_group_family = $s['parameter_group_family'] ?? '';
  }
}

class DescribeDefaultClusterParametersResult {
  public ?DefaultClusterParameters $default_cluster_parameters;

  public function __construct(shape(
    ?'default_cluster_parameters' => ?DefaultClusterParameters,
  ) $s = shape()) {
    $this->default_cluster_parameters = $s['default_cluster_parameters'] ?? null;
  }
}

class DescribeEventCategoriesMessage {
  public string $source_type;

  public function __construct(shape(
    ?'source_type' => string,
  ) $s = shape()) {
    $this->source_type = $s['source_type'] ?? '';
  }
}

class DescribeEventSubscriptionsMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $subscription_name;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'subscription_name' => string,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->subscription_name = $s['subscription_name'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeEventsMessage {
  public ?IntegerOptional $duration;
  public ?TStamp $end_time;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $source_identifier;
  public ?SourceType $source_type;
  public ?TStamp $start_time;

  public function __construct(shape(
    ?'duration' => ?IntegerOptional,
    ?'end_time' => ?TStamp,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'source_identifier' => string,
    ?'source_type' => ?SourceType,
    ?'start_time' => ?TStamp,
  ) $s = shape()) {
    $this->duration = $s['duration'] ?? 0;
    $this->end_time = $s['end_time'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeHsmClientCertificatesMessage {
  public string $hsm_client_certificate_identifier;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'hsm_client_certificate_identifier' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $s['hsm_client_certificate_identifier'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeHsmConfigurationsMessage {
  public string $hsm_configuration_identifier;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'hsm_configuration_identifier' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->hsm_configuration_identifier = $s['hsm_configuration_identifier'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeLoggingStatusMessage {
  public string $cluster_identifier;

  public function __construct(shape(
    ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class DescribeNodeConfigurationOptionsMessage {
  public ?ActionType $action_type;
  public string $cluster_identifier;
  public ?NodeConfigurationOptionsFilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $owner_account;
  public string $snapshot_identifier;

  public function __construct(shape(
    ?'action_type' => ?ActionType,
    ?'cluster_identifier' => string,
    ?'filters' => ?NodeConfigurationOptionsFilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'owner_account' => string,
    ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->action_type = $s['action_type'] ?? '';
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->owner_account = $s['owner_account'] ?? '';
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
  }
}

class DescribeOrderableClusterOptionsMessage {
  public string $cluster_version;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $node_type;

  public function __construct(shape(
    ?'cluster_version' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'node_type' => string,
  ) $s = shape()) {
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->node_type = $s['node_type'] ?? '';
  }
}

class DescribeReservedNodeOfferingsMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $reserved_node_offering_id;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'reserved_node_offering_id' => string,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->reserved_node_offering_id = $s['reserved_node_offering_id'] ?? '';
  }
}

class DescribeReservedNodesMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $reserved_node_id;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'reserved_node_id' => string,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->reserved_node_id = $s['reserved_node_id'] ?? '';
  }
}

class DescribeResizeMessage {
  public string $cluster_identifier;

  public function __construct(shape(
    ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class DescribeScheduledActionsMessage {
  public ?BooleanOptional $active;
  public ?TStamp $end_time;
  public ?ScheduledActionFilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $scheduled_action_name;
  public ?TStamp $start_time;
  public ?ScheduledActionTypeValues $target_action_type;

  public function __construct(shape(
    ?'active' => ?BooleanOptional,
    ?'end_time' => ?TStamp,
    ?'filters' => ?ScheduledActionFilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'scheduled_action_name' => string,
    ?'start_time' => ?TStamp,
    ?'target_action_type' => ?ScheduledActionTypeValues,
  ) $s = shape()) {
    $this->active = $s['active'] ?? false;
    $this->end_time = $s['end_time'] ?? 0;
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->scheduled_action_name = $s['scheduled_action_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->target_action_type = $s['target_action_type'] ?? '';
  }
}

class DescribeSnapshotCopyGrantsMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $snapshot_copy_grant_name;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'snapshot_copy_grant_name' => string,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->snapshot_copy_grant_name = $s['snapshot_copy_grant_name'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeSnapshotSchedulesMessage {
  public string $cluster_identifier;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $schedule_identifier;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'schedule_identifier' => string,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->schedule_identifier = $s['schedule_identifier'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeSnapshotSchedulesOutputMessage {
  public string $marker;
  public ?SnapshotScheduleList $snapshot_schedules;

  public function __construct(shape(
    ?'marker' => string,
    ?'snapshot_schedules' => ?SnapshotScheduleList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->snapshot_schedules = $s['snapshot_schedules'] ?? vec[];
  }
}

class DescribeTableRestoreStatusMessage {
  public string $cluster_identifier;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $table_restore_request_id;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'table_restore_request_id' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->table_restore_request_id = $s['table_restore_request_id'] ?? '';
  }
}

class DescribeTagsMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $resource_name;
  public string $resource_type;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'resource_name' => string,
    ?'resource_type' => string,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->resource_name = $s['resource_name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
  }
}

class DescribeUsageLimitsMessage {
  public string $cluster_identifier;
  public ?UsageLimitFeatureType $feature_type;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?TagKeyList $tag_keys;
  public ?TagValueList $tag_values;
  public string $usage_limit_id;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'feature_type' => ?UsageLimitFeatureType,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'tag_keys' => ?TagKeyList,
    ?'tag_values' => ?TagValueList,
    ?'usage_limit_id' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->feature_type = $s['feature_type'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->tag_values = $s['tag_values'] ?? vec[];
    $this->usage_limit_id = $s['usage_limit_id'] ?? '';
  }
}

class DisableLoggingMessage {
  public string $cluster_identifier;

  public function __construct(shape(
    ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class DisableSnapshotCopyMessage {
  public string $cluster_identifier;

  public function __construct(shape(
    ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class DisableSnapshotCopyResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

type Double = float;

type DoubleOptional = float;

class EC2SecurityGroup {
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $status;
  public ?TagList $tags;

  public function __construct(shape(
    ?'ec_2_security_group_name' => string,
    ?'ec_2_security_group_owner_id' => string,
    ?'status' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->ec_2_security_group_name = $s['ec_2_security_group_name'] ?? '';
    $this->ec_2_security_group_owner_id = $s['ec_2_security_group_owner_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
    $this->elastic_ip = $s['elastic_ip'] ?? '';
    $this->status = $s['status'] ?? '';
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
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->s_3_key_prefix = $s['s_3_key_prefix'] ?? '';
  }
}

class EnableSnapshotCopyMessage {
  public string $cluster_identifier;
  public string $destination_region;
  public ?IntegerOptional $manual_snapshot_retention_period;
  public ?IntegerOptional $retention_period;
  public string $snapshot_copy_grant_name;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'destination_region' => string,
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'retention_period' => ?IntegerOptional,
    ?'snapshot_copy_grant_name' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->destination_region = $s['destination_region'] ?? '';
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->retention_period = $s['retention_period'] ?? 0;
    $this->snapshot_copy_grant_name = $s['snapshot_copy_grant_name'] ?? '';
  }
}

class EnableSnapshotCopyResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
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
  public ?EventCategoriesList $event_categories;
  public string $event_id;
  public string $message;
  public string $severity;
  public string $source_identifier;
  public ?SourceType $source_type;

  public function __construct(shape(
    ?'date' => ?TStamp,
    ?'event_categories' => ?EventCategoriesList,
    ?'event_id' => string,
    ?'message' => string,
    ?'severity' => string,
    ?'source_identifier' => string,
    ?'source_type' => ?SourceType,
  ) $s = shape()) {
    $this->date = $s['date'] ?? 0;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->event_id = $s['event_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->severity = $s['severity'] ?? '';
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
  }
}

type EventCategoriesList = vec<String>;

class EventCategoriesMap {
  public ?EventInfoMapList $events;
  public string $source_type;

  public function __construct(shape(
    ?'events' => ?EventInfoMapList,
    ?'source_type' => string,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
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

class EventInfoMap {
  public ?EventCategoriesList $event_categories;
  public string $event_description;
  public string $event_id;
  public string $severity;

  public function __construct(shape(
    ?'event_categories' => ?EventCategoriesList,
    ?'event_description' => string,
    ?'event_id' => string,
    ?'severity' => string,
  ) $s = shape()) {
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->event_description = $s['event_description'] ?? '';
    $this->event_id = $s['event_id'] ?? '';
    $this->severity = $s['severity'] ?? '';
  }
}

type EventInfoMapList = vec<EventInfoMap>;

type EventList = vec<Event>;

class EventSubscription {
  public string $cust_subscription_id;
  public string $customer_aws_id;
  public bool $enabled;
  public ?EventCategoriesList $event_categories_list;
  public string $severity;
  public string $sns_topic_arn;
  public ?SourceIdsList $source_ids_list;
  public string $source_type;
  public string $status;
  public ?TStamp $subscription_creation_time;
  public ?TagList $tags;

  public function __construct(shape(
    ?'cust_subscription_id' => string,
    ?'customer_aws_id' => string,
    ?'enabled' => bool,
    ?'event_categories_list' => ?EventCategoriesList,
    ?'severity' => string,
    ?'sns_topic_arn' => string,
    ?'source_ids_list' => ?SourceIdsList,
    ?'source_type' => string,
    ?'status' => string,
    ?'subscription_creation_time' => ?TStamp,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->cust_subscription_id = $s['cust_subscription_id'] ?? '';
    $this->customer_aws_id = $s['customer_aws_id'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->event_categories_list = $s['event_categories_list'] ?? vec[];
    $this->severity = $s['severity'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
    $this->source_ids_list = $s['source_ids_list'] ?? vec[];
    $this->source_type = $s['source_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->subscription_creation_time = $s['subscription_creation_time'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
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

class GetClusterCredentialsMessage {
  public ?BooleanOptional $auto_create;
  public string $cluster_identifier;
  public ?DbGroupList $db_groups;
  public string $db_name;
  public string $db_user;
  public ?IntegerOptional $duration_seconds;

  public function __construct(shape(
    ?'auto_create' => ?BooleanOptional,
    ?'cluster_identifier' => string,
    ?'db_groups' => ?DbGroupList,
    ?'db_name' => string,
    ?'db_user' => string,
    ?'duration_seconds' => ?IntegerOptional,
  ) $s = shape()) {
    $this->auto_create = $s['auto_create'] ?? false;
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->db_groups = $s['db_groups'] ?? vec[];
    $this->db_name = $s['db_name'] ?? '';
    $this->db_user = $s['db_user'] ?? '';
    $this->duration_seconds = $s['duration_seconds'] ?? 0;
  }
}

class GetReservedNodeExchangeOfferingsInputMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $reserved_node_id;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'reserved_node_id' => string,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->reserved_node_id = $s['reserved_node_id'] ?? '';
  }
}

class GetReservedNodeExchangeOfferingsOutputMessage {
  public string $marker;
  public ?ReservedNodeOfferingList $reserved_node_offerings;

  public function __construct(shape(
    ?'marker' => string,
    ?'reserved_node_offerings' => ?ReservedNodeOfferingList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->reserved_node_offerings = $s['reserved_node_offerings'] ?? vec[];
  }
}

class HsmClientCertificate {
  public string $hsm_client_certificate_identifier;
  public string $hsm_client_certificate_public_key;
  public ?TagList $tags;

  public function __construct(shape(
    ?'hsm_client_certificate_identifier' => string,
    ?'hsm_client_certificate_public_key' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->hsm_client_certificate_identifier = $s['hsm_client_certificate_identifier'] ?? '';
    $this->hsm_client_certificate_public_key = $s['hsm_client_certificate_public_key'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class HsmClientCertificateAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type HsmClientCertificateList = vec<HsmClientCertificate>;

class HsmClientCertificateMessage {
  public ?HsmClientCertificateList $hsm_client_certificates;
  public string $marker;

  public function __construct(shape(
    ?'hsm_client_certificates' => ?HsmClientCertificateList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->hsm_client_certificates = $s['hsm_client_certificates'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
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
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => string,
    ?'hsm_configuration_identifier' => string,
    ?'hsm_ip_address' => string,
    ?'hsm_partition_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->hsm_configuration_identifier = $s['hsm_configuration_identifier'] ?? '';
    $this->hsm_ip_address = $s['hsm_ip_address'] ?? '';
    $this->hsm_partition_name = $s['hsm_partition_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class HsmConfigurationAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type HsmConfigurationList = vec<HsmConfiguration>;

class HsmConfigurationMessage {
  public ?HsmConfigurationList $hsm_configurations;
  public string $marker;

  public function __construct(shape(
    ?'hsm_configurations' => ?HsmConfigurationList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->hsm_configurations = $s['hsm_configurations'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
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
    $this->hsm_client_certificate_identifier = $s['hsm_client_certificate_identifier'] ?? '';
    $this->hsm_configuration_identifier = $s['hsm_configuration_identifier'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class IPRange {
  public string $cidrip;
  public string $status;
  public ?TagList $tags;

  public function __construct(shape(
    ?'cidrip' => string,
    ?'status' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->cidrip = $s['cidrip'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?TStamp $last_failure_time;
  public ?TStamp $last_successful_delivery_time;
  public bool $logging_enabled;
  public string $s_3_key_prefix;

  public function __construct(shape(
    ?'bucket_name' => string,
    ?'last_failure_message' => string,
    ?'last_failure_time' => ?TStamp,
    ?'last_successful_delivery_time' => ?TStamp,
    ?'logging_enabled' => bool,
    ?'s_3_key_prefix' => string,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->last_failure_message = $s['last_failure_message'] ?? '';
    $this->last_failure_time = $s['last_failure_time'] ?? 0;
    $this->last_successful_delivery_time = $s['last_successful_delivery_time'] ?? 0;
    $this->logging_enabled = $s['logging_enabled'] ?? false;
    $this->s_3_key_prefix = $s['s_3_key_prefix'] ?? '';
  }
}

type Long = int;

type LongOptional = int;

class MaintenanceTrack {
  public string $database_version;
  public string $maintenance_track_name;
  public ?EligibleTracksToUpdateList $update_targets;

  public function __construct(shape(
    ?'database_version' => string,
    ?'maintenance_track_name' => string,
    ?'update_targets' => ?EligibleTracksToUpdateList,
  ) $s = shape()) {
    $this->database_version = $s['database_version'] ?? '';
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->update_targets = $s['update_targets'] ?? vec[];
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
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->revision_target = $s['revision_target'] ?? '';
  }
}

class ModifyClusterDbRevisionResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class ModifyClusterIamRolesMessage {
  public ?IamRoleArnList $add_iam_roles;
  public string $cluster_identifier;
  public ?IamRoleArnList $remove_iam_roles;

  public function __construct(shape(
    ?'add_iam_roles' => ?IamRoleArnList,
    ?'cluster_identifier' => string,
    ?'remove_iam_roles' => ?IamRoleArnList,
  ) $s = shape()) {
    $this->add_iam_roles = $s['add_iam_roles'] ?? vec[];
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->remove_iam_roles = $s['remove_iam_roles'] ?? vec[];
  }
}

class ModifyClusterIamRolesResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class ModifyClusterMaintenanceMessage {
  public string $cluster_identifier;
  public ?BooleanOptional $defer_maintenance;
  public ?IntegerOptional $defer_maintenance_duration;
  public ?TStamp $defer_maintenance_end_time;
  public string $defer_maintenance_identifier;
  public ?TStamp $defer_maintenance_start_time;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'defer_maintenance' => ?BooleanOptional,
    ?'defer_maintenance_duration' => ?IntegerOptional,
    ?'defer_maintenance_end_time' => ?TStamp,
    ?'defer_maintenance_identifier' => string,
    ?'defer_maintenance_start_time' => ?TStamp,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->defer_maintenance = $s['defer_maintenance'] ?? false;
    $this->defer_maintenance_duration = $s['defer_maintenance_duration'] ?? 0;
    $this->defer_maintenance_end_time = $s['defer_maintenance_end_time'] ?? 0;
    $this->defer_maintenance_identifier = $s['defer_maintenance_identifier'] ?? '';
    $this->defer_maintenance_start_time = $s['defer_maintenance_start_time'] ?? 0;
  }
}

class ModifyClusterMaintenanceResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class ModifyClusterMessage {
  public ?BooleanOptional $allow_version_upgrade;
  public ?IntegerOptional $automated_snapshot_retention_period;
  public string $cluster_identifier;
  public string $cluster_parameter_group_name;
  public ?ClusterSecurityGroupNameList $cluster_security_groups;
  public string $cluster_type;
  public string $cluster_version;
  public string $elastic_ip;
  public ?BooleanOptional $encrypted;
  public ?BooleanOptional $enhanced_vpc_routing;
  public string $hsm_client_certificate_identifier;
  public string $hsm_configuration_identifier;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public ?IntegerOptional $manual_snapshot_retention_period;
  public string $master_user_password;
  public string $new_cluster_identifier;
  public string $node_type;
  public ?IntegerOptional $number_of_nodes;
  public string $preferred_maintenance_window;
  public ?BooleanOptional $publicly_accessible;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'allow_version_upgrade' => ?BooleanOptional,
    ?'automated_snapshot_retention_period' => ?IntegerOptional,
    ?'cluster_identifier' => string,
    ?'cluster_parameter_group_name' => string,
    ?'cluster_security_groups' => ?ClusterSecurityGroupNameList,
    ?'cluster_type' => string,
    ?'cluster_version' => string,
    ?'elastic_ip' => string,
    ?'encrypted' => ?BooleanOptional,
    ?'enhanced_vpc_routing' => ?BooleanOptional,
    ?'hsm_client_certificate_identifier' => string,
    ?'hsm_configuration_identifier' => string,
    ?'kms_key_id' => string,
    ?'maintenance_track_name' => string,
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'master_user_password' => string,
    ?'new_cluster_identifier' => string,
    ?'node_type' => string,
    ?'number_of_nodes' => ?IntegerOptional,
    ?'preferred_maintenance_window' => string,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->allow_version_upgrade = $s['allow_version_upgrade'] ?? false;
    $this->automated_snapshot_retention_period = $s['automated_snapshot_retention_period'] ?? 0;
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->cluster_parameter_group_name = $s['cluster_parameter_group_name'] ?? '';
    $this->cluster_security_groups = $s['cluster_security_groups'] ?? vec[];
    $this->cluster_type = $s['cluster_type'] ?? '';
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->elastic_ip = $s['elastic_ip'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->enhanced_vpc_routing = $s['enhanced_vpc_routing'] ?? false;
    $this->hsm_client_certificate_identifier = $s['hsm_client_certificate_identifier'] ?? '';
    $this->hsm_configuration_identifier = $s['hsm_configuration_identifier'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->new_cluster_identifier = $s['new_cluster_identifier'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->number_of_nodes = $s['number_of_nodes'] ?? 0;
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class ModifyClusterParameterGroupMessage {
  public string $parameter_group_name;
  public ?ParametersList $parameters;

  public function __construct(shape(
    ?'parameter_group_name' => string,
    ?'parameters' => ?ParametersList,
  ) $s = shape()) {
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

class ModifyClusterResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class ModifyClusterSnapshotMessage {
  public bool $force;
  public ?IntegerOptional $manual_snapshot_retention_period;
  public string $snapshot_identifier;

  public function __construct(shape(
    ?'force' => bool,
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'snapshot_identifier' => string,
  ) $s = shape()) {
    $this->force = $s['force'] ?? false;
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
  }
}

class ModifyClusterSnapshotResult {
  public ?Snapshot $snapshot;

  public function __construct(shape(
    ?'snapshot' => ?Snapshot,
  ) $s = shape()) {
    $this->snapshot = $s['snapshot'] ?? null;
  }
}

class ModifyClusterSnapshotScheduleMessage {
  public string $cluster_identifier;
  public ?BooleanOptional $disassociate_schedule;
  public string $schedule_identifier;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'disassociate_schedule' => ?BooleanOptional,
    ?'schedule_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->disassociate_schedule = $s['disassociate_schedule'] ?? false;
    $this->schedule_identifier = $s['schedule_identifier'] ?? '';
  }
}

class ModifyClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;
  public string $description;
  public ?SubnetIdentifierList $subnet_ids;

  public function __construct(shape(
    ?'cluster_subnet_group_name' => string,
    ?'description' => string,
    ?'subnet_ids' => ?SubnetIdentifierList,
  ) $s = shape()) {
    $this->cluster_subnet_group_name = $s['cluster_subnet_group_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class ModifyClusterSubnetGroupResult {
  public ?ClusterSubnetGroup $cluster_subnet_group;

  public function __construct(shape(
    ?'cluster_subnet_group' => ?ClusterSubnetGroup,
  ) $s = shape()) {
    $this->cluster_subnet_group = $s['cluster_subnet_group'] ?? null;
  }
}

class ModifyEventSubscriptionMessage {
  public ?BooleanOptional $enabled;
  public ?EventCategoriesList $event_categories;
  public string $severity;
  public string $sns_topic_arn;
  public ?SourceIdsList $source_ids;
  public string $source_type;
  public string $subscription_name;

  public function __construct(shape(
    ?'enabled' => ?BooleanOptional,
    ?'event_categories' => ?EventCategoriesList,
    ?'severity' => string,
    ?'sns_topic_arn' => string,
    ?'source_ids' => ?SourceIdsList,
    ?'source_type' => string,
    ?'subscription_name' => string,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->severity = $s['severity'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
    $this->source_ids = $s['source_ids'] ?? vec[];
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

class ModifyScheduledActionMessage {
  public ?BooleanOptional $enable;
  public ?TStamp $end_time;
  public string $iam_role;
  public string $schedule;
  public string $scheduled_action_description;
  public string $scheduled_action_name;
  public ?TStamp $start_time;
  public ?ScheduledActionType $target_action;

  public function __construct(shape(
    ?'enable' => ?BooleanOptional,
    ?'end_time' => ?TStamp,
    ?'iam_role' => string,
    ?'schedule' => string,
    ?'scheduled_action_description' => string,
    ?'scheduled_action_name' => string,
    ?'start_time' => ?TStamp,
    ?'target_action' => ?ScheduledActionType,
  ) $s = shape()) {
    $this->enable = $s['enable'] ?? false;
    $this->end_time = $s['end_time'] ?? 0;
    $this->iam_role = $s['iam_role'] ?? '';
    $this->schedule = $s['schedule'] ?? '';
    $this->scheduled_action_description = $s['scheduled_action_description'] ?? '';
    $this->scheduled_action_name = $s['scheduled_action_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->target_action = $s['target_action'] ?? null;
  }
}

class ModifySnapshotCopyRetentionPeriodMessage {
  public string $cluster_identifier;
  public bool $manual;
  public int $retention_period;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'manual' => bool,
    ?'retention_period' => int,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->manual = $s['manual'] ?? false;
    $this->retention_period = $s['retention_period'] ?? 0;
  }
}

class ModifySnapshotCopyRetentionPeriodResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class ModifySnapshotScheduleMessage {
  public ?ScheduleDefinitionList $schedule_definitions;
  public string $schedule_identifier;

  public function __construct(shape(
    ?'schedule_definitions' => ?ScheduleDefinitionList,
    ?'schedule_identifier' => string,
  ) $s = shape()) {
    $this->schedule_definitions = $s['schedule_definitions'] ?? vec[];
    $this->schedule_identifier = $s['schedule_identifier'] ?? '';
  }
}

class ModifyUsageLimitMessage {
  public ?LongOptional $amount;
  public ?UsageLimitBreachAction $breach_action;
  public string $usage_limit_id;

  public function __construct(shape(
    ?'amount' => ?LongOptional,
    ?'breach_action' => ?UsageLimitBreachAction,
    ?'usage_limit_id' => string,
  ) $s = shape()) {
    $this->amount = $s['amount'] ?? 0;
    $this->breach_action = $s['breach_action'] ?? '';
    $this->usage_limit_id = $s['usage_limit_id'] ?? '';
  }
}

class NodeConfigurationOption {
  public ?DoubleOptional $estimated_disk_utilization_percent;
  public ?Mode $mode;
  public string $node_type;
  public int $number_of_nodes;

  public function __construct(shape(
    ?'estimated_disk_utilization_percent' => ?DoubleOptional,
    ?'mode' => ?Mode,
    ?'node_type' => string,
    ?'number_of_nodes' => int,
  ) $s = shape()) {
    $this->estimated_disk_utilization_percent = $s['estimated_disk_utilization_percent'] ?? 0.0;
    $this->mode = $s['mode'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->number_of_nodes = $s['number_of_nodes'] ?? 0;
  }
}

type NodeConfigurationOptionList = vec<NodeConfigurationOption>;

class NodeConfigurationOptionsFilter {
  public ?NodeConfigurationOptionsFilterName $name;
  public ?OperatorType $operator;
  public ?ValueStringList $values;

  public function __construct(shape(
    ?'name' => ?NodeConfigurationOptionsFilterName,
    ?'operator' => ?OperatorType,
    ?'values' => ?ValueStringList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->operator = $s['operator'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type NodeConfigurationOptionsFilterList = vec<NodeConfigurationOptionsFilter>;

type NodeConfigurationOptionsFilterName = string;

class NodeConfigurationOptionsMessage {
  public string $marker;
  public ?NodeConfigurationOptionList $node_configuration_option_list;

  public function __construct(shape(
    ?'marker' => string,
    ?'node_configuration_option_list' => ?NodeConfigurationOptionList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->node_configuration_option_list = $s['node_configuration_option_list'] ?? vec[];
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
  public ?AvailabilityZoneList $availability_zones;
  public string $cluster_type;
  public string $cluster_version;
  public string $node_type;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneList,
    ?'cluster_type' => string,
    ?'cluster_version' => string,
    ?'node_type' => string,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->cluster_type = $s['cluster_type'] ?? '';
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
  }
}

type OrderableClusterOptionsList = vec<OrderableClusterOption>;

class OrderableClusterOptionsMessage {
  public string $marker;
  public ?OrderableClusterOptionsList $orderable_cluster_options;

  public function __construct(shape(
    ?'marker' => string,
    ?'orderable_cluster_options' => ?OrderableClusterOptionsList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->orderable_cluster_options = $s['orderable_cluster_options'] ?? vec[];
  }
}

class Parameter {
  public string $allowed_values;
  public ?ParameterApplyType $apply_type;
  public string $data_type;
  public string $description;
  public bool $is_modifiable;
  public string $minimum_engine_version;
  public string $parameter_name;
  public string $parameter_value;
  public string $source;

  public function __construct(shape(
    ?'allowed_values' => string,
    ?'apply_type' => ?ParameterApplyType,
    ?'data_type' => string,
    ?'description' => string,
    ?'is_modifiable' => bool,
    ?'minimum_engine_version' => string,
    ?'parameter_name' => string,
    ?'parameter_value' => string,
    ?'source' => string,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? '';
    $this->apply_type = $s['apply_type'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->is_modifiable = $s['is_modifiable'] ?? false;
    $this->minimum_engine_version = $s['minimum_engine_version'] ?? '';
    $this->parameter_name = $s['parameter_name'] ?? '';
    $this->parameter_value = $s['parameter_value'] ?? '';
    $this->source = $s['source'] ?? '';
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
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class PauseClusterResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

type PendingActionsList = vec<String>;

class PendingModifiedValues {
  public ?IntegerOptional $automated_snapshot_retention_period;
  public string $cluster_identifier;
  public string $cluster_type;
  public string $cluster_version;
  public string $encryption_type;
  public ?BooleanOptional $enhanced_vpc_routing;
  public string $maintenance_track_name;
  public string $master_user_password;
  public string $node_type;
  public ?IntegerOptional $number_of_nodes;
  public ?BooleanOptional $publicly_accessible;

  public function __construct(shape(
    ?'automated_snapshot_retention_period' => ?IntegerOptional,
    ?'cluster_identifier' => string,
    ?'cluster_type' => string,
    ?'cluster_version' => string,
    ?'encryption_type' => string,
    ?'enhanced_vpc_routing' => ?BooleanOptional,
    ?'maintenance_track_name' => string,
    ?'master_user_password' => string,
    ?'node_type' => string,
    ?'number_of_nodes' => ?IntegerOptional,
    ?'publicly_accessible' => ?BooleanOptional,
  ) $s = shape()) {
    $this->automated_snapshot_retention_period = $s['automated_snapshot_retention_period'] ?? 0;
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->cluster_type = $s['cluster_type'] ?? '';
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->encryption_type = $s['encryption_type'] ?? '';
    $this->enhanced_vpc_routing = $s['enhanced_vpc_routing'] ?? false;
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->number_of_nodes = $s['number_of_nodes'] ?? 0;
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
  }
}

class PurchaseReservedNodeOfferingMessage {
  public ?IntegerOptional $node_count;
  public string $reserved_node_offering_id;

  public function __construct(shape(
    ?'node_count' => ?IntegerOptional,
    ?'reserved_node_offering_id' => string,
  ) $s = shape()) {
    $this->node_count = $s['node_count'] ?? 0;
    $this->reserved_node_offering_id = $s['reserved_node_offering_id'] ?? '';
  }
}

class PurchaseReservedNodeOfferingResult {
  public ?ReservedNode $reserved_node;

  public function __construct(shape(
    ?'reserved_node' => ?ReservedNode,
  ) $s = shape()) {
    $this->reserved_node = $s['reserved_node'] ?? null;
  }
}

class RebootClusterMessage {
  public string $cluster_identifier;

  public function __construct(shape(
    ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class RebootClusterResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
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

class ReservedNode {
  public string $currency_code;
  public int $duration;
  public ?Double $fixed_price;
  public int $node_count;
  public string $node_type;
  public string $offering_type;
  public ?RecurringChargeList $recurring_charges;
  public string $reserved_node_id;
  public string $reserved_node_offering_id;
  public ?ReservedNodeOfferingType $reserved_node_offering_type;
  public ?TStamp $start_time;
  public string $state;
  public ?Double $usage_price;

  public function __construct(shape(
    ?'currency_code' => string,
    ?'duration' => int,
    ?'fixed_price' => ?Double,
    ?'node_count' => int,
    ?'node_type' => string,
    ?'offering_type' => string,
    ?'recurring_charges' => ?RecurringChargeList,
    ?'reserved_node_id' => string,
    ?'reserved_node_offering_id' => string,
    ?'reserved_node_offering_type' => ?ReservedNodeOfferingType,
    ?'start_time' => ?TStamp,
    ?'state' => string,
    ?'usage_price' => ?Double,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->fixed_price = $s['fixed_price'] ?? 0.0;
    $this->node_count = $s['node_count'] ?? 0;
    $this->node_type = $s['node_type'] ?? '';
    $this->offering_type = $s['offering_type'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->reserved_node_id = $s['reserved_node_id'] ?? '';
    $this->reserved_node_offering_id = $s['reserved_node_offering_id'] ?? '';
    $this->reserved_node_offering_type = $s['reserved_node_offering_type'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->usage_price = $s['usage_price'] ?? 0.0;
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
  public ?Double $fixed_price;
  public string $node_type;
  public string $offering_type;
  public ?RecurringChargeList $recurring_charges;
  public string $reserved_node_offering_id;
  public ?ReservedNodeOfferingType $reserved_node_offering_type;
  public ?Double $usage_price;

  public function __construct(shape(
    ?'currency_code' => string,
    ?'duration' => int,
    ?'fixed_price' => ?Double,
    ?'node_type' => string,
    ?'offering_type' => string,
    ?'recurring_charges' => ?RecurringChargeList,
    ?'reserved_node_offering_id' => string,
    ?'reserved_node_offering_type' => ?ReservedNodeOfferingType,
    ?'usage_price' => ?Double,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->fixed_price = $s['fixed_price'] ?? 0.0;
    $this->node_type = $s['node_type'] ?? '';
    $this->offering_type = $s['offering_type'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->reserved_node_offering_id = $s['reserved_node_offering_id'] ?? '';
    $this->reserved_node_offering_type = $s['reserved_node_offering_type'] ?? '';
    $this->usage_price = $s['usage_price'] ?? 0.0;
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
  public ?ReservedNodeOfferingList $reserved_node_offerings;

  public function __construct(shape(
    ?'marker' => string,
    ?'reserved_node_offerings' => ?ReservedNodeOfferingList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->reserved_node_offerings = $s['reserved_node_offerings'] ?? vec[];
  }
}

class ReservedNodeQuotaExceededFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedNodesMessage {
  public string $marker;
  public ?ReservedNodeList $reserved_nodes;

  public function __construct(shape(
    ?'marker' => string,
    ?'reserved_nodes' => ?ReservedNodeList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->reserved_nodes = $s['reserved_nodes'] ?? vec[];
  }
}

class ResetClusterParameterGroupMessage {
  public string $parameter_group_name;
  public ?ParametersList $parameters;
  public bool $reset_all_parameters;

  public function __construct(shape(
    ?'parameter_group_name' => string,
    ?'parameters' => ?ParametersList,
    ?'reset_all_parameters' => bool,
  ) $s = shape()) {
    $this->parameter_group_name = $s['parameter_group_name'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
    $this->reset_all_parameters = $s['reset_all_parameters'] ?? false;
  }
}

class ResizeClusterMessage {
  public ?BooleanOptional $classic;
  public string $cluster_identifier;
  public string $cluster_type;
  public string $node_type;
  public int $number_of_nodes;

  public function __construct(shape(
    ?'classic' => ?BooleanOptional,
    ?'cluster_identifier' => string,
    ?'cluster_type' => string,
    ?'node_type' => string,
    ?'number_of_nodes' => int,
  ) $s = shape()) {
    $this->classic = $s['classic'] ?? false;
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->cluster_type = $s['cluster_type'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->number_of_nodes = $s['number_of_nodes'] ?? 0;
  }
}

class ResizeClusterResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class ResizeInfo {
  public bool $allow_cancel_resize;
  public string $resize_type;

  public function __construct(shape(
    ?'allow_cancel_resize' => bool,
    ?'resize_type' => string,
  ) $s = shape()) {
    $this->allow_cancel_resize = $s['allow_cancel_resize'] ?? false;
    $this->resize_type = $s['resize_type'] ?? '';
  }
}

class ResizeNotFoundFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResizeProgressMessage {
  public ?DoubleOptional $avg_resize_rate_in_mega_bytes_per_second;
  public ?DoubleOptional $data_transfer_progress_percent;
  public ?LongOptional $elapsed_time_in_seconds;
  public ?LongOptional $estimated_time_to_completion_in_seconds;
  public ?ImportTablesCompleted $import_tables_completed;
  public ?ImportTablesInProgress $import_tables_in_progress;
  public ?ImportTablesNotStarted $import_tables_not_started;
  public string $message;
  public ?LongOptional $progress_in_mega_bytes;
  public string $resize_type;
  public string $status;
  public string $target_cluster_type;
  public string $target_encryption_type;
  public string $target_node_type;
  public ?IntegerOptional $target_number_of_nodes;
  public ?LongOptional $total_resize_data_in_mega_bytes;

  public function __construct(shape(
    ?'avg_resize_rate_in_mega_bytes_per_second' => ?DoubleOptional,
    ?'data_transfer_progress_percent' => ?DoubleOptional,
    ?'elapsed_time_in_seconds' => ?LongOptional,
    ?'estimated_time_to_completion_in_seconds' => ?LongOptional,
    ?'import_tables_completed' => ?ImportTablesCompleted,
    ?'import_tables_in_progress' => ?ImportTablesInProgress,
    ?'import_tables_not_started' => ?ImportTablesNotStarted,
    ?'message' => string,
    ?'progress_in_mega_bytes' => ?LongOptional,
    ?'resize_type' => string,
    ?'status' => string,
    ?'target_cluster_type' => string,
    ?'target_encryption_type' => string,
    ?'target_node_type' => string,
    ?'target_number_of_nodes' => ?IntegerOptional,
    ?'total_resize_data_in_mega_bytes' => ?LongOptional,
  ) $s = shape()) {
    $this->avg_resize_rate_in_mega_bytes_per_second = $s['avg_resize_rate_in_mega_bytes_per_second'] ?? 0.0;
    $this->data_transfer_progress_percent = $s['data_transfer_progress_percent'] ?? 0.0;
    $this->elapsed_time_in_seconds = $s['elapsed_time_in_seconds'] ?? 0;
    $this->estimated_time_to_completion_in_seconds = $s['estimated_time_to_completion_in_seconds'] ?? 0;
    $this->import_tables_completed = $s['import_tables_completed'] ?? vec[];
    $this->import_tables_in_progress = $s['import_tables_in_progress'] ?? vec[];
    $this->import_tables_not_started = $s['import_tables_not_started'] ?? vec[];
    $this->message = $s['message'] ?? '';
    $this->progress_in_mega_bytes = $s['progress_in_mega_bytes'] ?? 0;
    $this->resize_type = $s['resize_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->target_cluster_type = $s['target_cluster_type'] ?? '';
    $this->target_encryption_type = $s['target_encryption_type'] ?? '';
    $this->target_node_type = $s['target_node_type'] ?? '';
    $this->target_number_of_nodes = $s['target_number_of_nodes'] ?? 0;
    $this->total_resize_data_in_mega_bytes = $s['total_resize_data_in_mega_bytes'] ?? 0;
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
  public ?BooleanOptional $allow_version_upgrade;
  public ?IntegerOptional $automated_snapshot_retention_period;
  public string $availability_zone;
  public string $cluster_identifier;
  public string $cluster_parameter_group_name;
  public ?ClusterSecurityGroupNameList $cluster_security_groups;
  public string $cluster_subnet_group_name;
  public string $elastic_ip;
  public ?BooleanOptional $enhanced_vpc_routing;
  public string $hsm_client_certificate_identifier;
  public string $hsm_configuration_identifier;
  public ?IamRoleArnList $iam_roles;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public ?IntegerOptional $manual_snapshot_retention_period;
  public string $node_type;
  public ?IntegerOptional $number_of_nodes;
  public string $owner_account;
  public ?IntegerOptional $port;
  public string $preferred_maintenance_window;
  public ?BooleanOptional $publicly_accessible;
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;
  public string $snapshot_schedule_identifier;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'additional_info' => string,
    ?'allow_version_upgrade' => ?BooleanOptional,
    ?'automated_snapshot_retention_period' => ?IntegerOptional,
    ?'availability_zone' => string,
    ?'cluster_identifier' => string,
    ?'cluster_parameter_group_name' => string,
    ?'cluster_security_groups' => ?ClusterSecurityGroupNameList,
    ?'cluster_subnet_group_name' => string,
    ?'elastic_ip' => string,
    ?'enhanced_vpc_routing' => ?BooleanOptional,
    ?'hsm_client_certificate_identifier' => string,
    ?'hsm_configuration_identifier' => string,
    ?'iam_roles' => ?IamRoleArnList,
    ?'kms_key_id' => string,
    ?'maintenance_track_name' => string,
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'node_type' => string,
    ?'number_of_nodes' => ?IntegerOptional,
    ?'owner_account' => string,
    ?'port' => ?IntegerOptional,
    ?'preferred_maintenance_window' => string,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'snapshot_cluster_identifier' => string,
    ?'snapshot_identifier' => string,
    ?'snapshot_schedule_identifier' => string,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->additional_info = $s['additional_info'] ?? '';
    $this->allow_version_upgrade = $s['allow_version_upgrade'] ?? false;
    $this->automated_snapshot_retention_period = $s['automated_snapshot_retention_period'] ?? 0;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->cluster_parameter_group_name = $s['cluster_parameter_group_name'] ?? '';
    $this->cluster_security_groups = $s['cluster_security_groups'] ?? vec[];
    $this->cluster_subnet_group_name = $s['cluster_subnet_group_name'] ?? '';
    $this->elastic_ip = $s['elastic_ip'] ?? '';
    $this->enhanced_vpc_routing = $s['enhanced_vpc_routing'] ?? false;
    $this->hsm_client_certificate_identifier = $s['hsm_client_certificate_identifier'] ?? '';
    $this->hsm_configuration_identifier = $s['hsm_configuration_identifier'] ?? '';
    $this->iam_roles = $s['iam_roles'] ?? vec[];
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->node_type = $s['node_type'] ?? '';
    $this->number_of_nodes = $s['number_of_nodes'] ?? 0;
    $this->owner_account = $s['owner_account'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->snapshot_cluster_identifier = $s['snapshot_cluster_identifier'] ?? '';
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
    $this->snapshot_schedule_identifier = $s['snapshot_schedule_identifier'] ?? '';
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class RestoreFromClusterSnapshotResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class RestoreStatus {
  public ?Double $current_restore_rate_in_mega_bytes_per_second;
  public ?Long $elapsed_time_in_seconds;
  public ?Long $estimated_time_to_completion_in_seconds;
  public ?Long $progress_in_mega_bytes;
  public ?Long $snapshot_size_in_mega_bytes;
  public string $status;

  public function __construct(shape(
    ?'current_restore_rate_in_mega_bytes_per_second' => ?Double,
    ?'elapsed_time_in_seconds' => ?Long,
    ?'estimated_time_to_completion_in_seconds' => ?Long,
    ?'progress_in_mega_bytes' => ?Long,
    ?'snapshot_size_in_mega_bytes' => ?Long,
    ?'status' => string,
  ) $s = shape()) {
    $this->current_restore_rate_in_mega_bytes_per_second = $s['current_restore_rate_in_mega_bytes_per_second'] ?? 0.0;
    $this->elapsed_time_in_seconds = $s['elapsed_time_in_seconds'] ?? 0;
    $this->estimated_time_to_completion_in_seconds = $s['estimated_time_to_completion_in_seconds'] ?? 0;
    $this->progress_in_mega_bytes = $s['progress_in_mega_bytes'] ?? 0;
    $this->snapshot_size_in_mega_bytes = $s['snapshot_size_in_mega_bytes'] ?? 0;
    $this->status = $s['status'] ?? '';
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
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->new_table_name = $s['new_table_name'] ?? '';
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
    $this->source_database_name = $s['source_database_name'] ?? '';
    $this->source_schema_name = $s['source_schema_name'] ?? '';
    $this->source_table_name = $s['source_table_name'] ?? '';
    $this->target_database_name = $s['target_database_name'] ?? '';
    $this->target_schema_name = $s['target_schema_name'] ?? '';
  }
}

class RestoreTableFromClusterSnapshotResult {
  public ?TableRestoreStatus $table_restore_status;

  public function __construct(shape(
    ?'table_restore_status' => ?TableRestoreStatus,
  ) $s = shape()) {
    $this->table_restore_status = $s['table_restore_status'] ?? null;
  }
}

class ResumeClusterMessage {
  public string $cluster_identifier;

  public function __construct(shape(
    ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class ResumeClusterResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
  }
}

class RevisionTarget {
  public string $database_revision;
  public ?TStamp $database_revision_release_date;
  public string $description;

  public function __construct(shape(
    ?'database_revision' => string,
    ?'database_revision_release_date' => ?TStamp,
    ?'description' => string,
  ) $s = shape()) {
    $this->database_revision = $s['database_revision'] ?? '';
    $this->database_revision_release_date = $s['database_revision_release_date'] ?? 0;
    $this->description = $s['description'] ?? '';
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
    $this->cidrip = $s['cidrip'] ?? '';
    $this->cluster_security_group_name = $s['cluster_security_group_name'] ?? '';
    $this->ec_2_security_group_name = $s['ec_2_security_group_name'] ?? '';
    $this->ec_2_security_group_owner_id = $s['ec_2_security_group_owner_id'] ?? '';
  }
}

class RevokeClusterSecurityGroupIngressResult {
  public ?ClusterSecurityGroup $cluster_security_group;

  public function __construct(shape(
    ?'cluster_security_group' => ?ClusterSecurityGroup,
  ) $s = shape()) {
    $this->cluster_security_group = $s['cluster_security_group'] ?? null;
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
    $this->account_with_restore_access = $s['account_with_restore_access'] ?? '';
    $this->snapshot_cluster_identifier = $s['snapshot_cluster_identifier'] ?? '';
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
  }
}

class RevokeSnapshotAccessResult {
  public ?Snapshot $snapshot;

  public function __construct(shape(
    ?'snapshot' => ?Snapshot,
  ) $s = shape()) {
    $this->snapshot = $s['snapshot'] ?? null;
  }
}

class RotateEncryptionKeyMessage {
  public string $cluster_identifier;

  public function __construct(shape(
    ?'cluster_identifier' => string,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
  }
}

class RotateEncryptionKeyResult {
  public ?Cluster $cluster;

  public function __construct(shape(
    ?'cluster' => ?Cluster,
  ) $s = shape()) {
    $this->cluster = $s['cluster'] ?? null;
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
  public ?TStamp $end_time;
  public string $iam_role;
  public ?ScheduledActionTimeList $next_invocations;
  public string $schedule;
  public string $scheduled_action_description;
  public string $scheduled_action_name;
  public ?TStamp $start_time;
  public ?ScheduledActionState $state;
  public ?ScheduledActionType $target_action;

  public function __construct(shape(
    ?'end_time' => ?TStamp,
    ?'iam_role' => string,
    ?'next_invocations' => ?ScheduledActionTimeList,
    ?'schedule' => string,
    ?'scheduled_action_description' => string,
    ?'scheduled_action_name' => string,
    ?'start_time' => ?TStamp,
    ?'state' => ?ScheduledActionState,
    ?'target_action' => ?ScheduledActionType,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->iam_role = $s['iam_role'] ?? '';
    $this->next_invocations = $s['next_invocations'] ?? vec[];
    $this->schedule = $s['schedule'] ?? '';
    $this->scheduled_action_description = $s['scheduled_action_description'] ?? '';
    $this->scheduled_action_name = $s['scheduled_action_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->target_action = $s['target_action'] ?? null;
  }
}

class ScheduledActionAlreadyExistsFault {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ScheduledActionFilter {
  public ?ScheduledActionFilterName $name;
  public ?ValueStringList $values;

  public function __construct(shape(
    ?'name' => ?ScheduledActionFilterName,
    ?'values' => ?ValueStringList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
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
  public ?PauseClusterMessage $pause_cluster;
  public ?ResizeClusterMessage $resize_cluster;
  public ?ResumeClusterMessage $resume_cluster;

  public function __construct(shape(
    ?'pause_cluster' => ?PauseClusterMessage,
    ?'resize_cluster' => ?ResizeClusterMessage,
    ?'resume_cluster' => ?ResumeClusterMessage,
  ) $s = shape()) {
    $this->pause_cluster = $s['pause_cluster'] ?? null;
    $this->resize_cluster = $s['resize_cluster'] ?? null;
    $this->resume_cluster = $s['resume_cluster'] ?? null;
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
  public ?ScheduledActionList $scheduled_actions;

  public function __construct(shape(
    ?'marker' => string,
    ?'scheduled_actions' => ?ScheduledActionList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->scheduled_actions = $s['scheduled_actions'] ?? vec[];
  }
}

type ScheduledSnapshotTimeList = vec<TStamp>;

type SensitiveString = string;

class Snapshot {
  public ?AccountsWithRestoreAccessList $accounts_with_restore_access;
  public ?Double $actual_incremental_backup_size_in_mega_bytes;
  public string $availability_zone;
  public ?Double $backup_progress_in_mega_bytes;
  public ?TStamp $cluster_create_time;
  public string $cluster_identifier;
  public string $cluster_version;
  public ?Double $current_backup_rate_in_mega_bytes_per_second;
  public string $db_name;
  public ?Long $elapsed_time_in_seconds;
  public bool $encrypted;
  public bool $encrypted_with_hsm;
  public bool $enhanced_vpc_routing;
  public ?Long $estimated_seconds_to_completion;
  public string $kms_key_id;
  public string $maintenance_track_name;
  public ?IntegerOptional $manual_snapshot_remaining_days;
  public ?IntegerOptional $manual_snapshot_retention_period;
  public string $master_username;
  public string $node_type;
  public int $number_of_nodes;
  public string $owner_account;
  public int $port;
  public ?RestorableNodeTypeList $restorable_node_types;
  public ?TStamp $snapshot_create_time;
  public string $snapshot_identifier;
  public ?TStamp $snapshot_retention_start_time;
  public string $snapshot_type;
  public string $source_region;
  public string $status;
  public ?TagList $tags;
  public ?Double $total_backup_size_in_mega_bytes;
  public string $vpc_id;

  public function __construct(shape(
    ?'accounts_with_restore_access' => ?AccountsWithRestoreAccessList,
    ?'actual_incremental_backup_size_in_mega_bytes' => ?Double,
    ?'availability_zone' => string,
    ?'backup_progress_in_mega_bytes' => ?Double,
    ?'cluster_create_time' => ?TStamp,
    ?'cluster_identifier' => string,
    ?'cluster_version' => string,
    ?'current_backup_rate_in_mega_bytes_per_second' => ?Double,
    ?'db_name' => string,
    ?'elapsed_time_in_seconds' => ?Long,
    ?'encrypted' => bool,
    ?'encrypted_with_hsm' => bool,
    ?'enhanced_vpc_routing' => bool,
    ?'estimated_seconds_to_completion' => ?Long,
    ?'kms_key_id' => string,
    ?'maintenance_track_name' => string,
    ?'manual_snapshot_remaining_days' => ?IntegerOptional,
    ?'manual_snapshot_retention_period' => ?IntegerOptional,
    ?'master_username' => string,
    ?'node_type' => string,
    ?'number_of_nodes' => int,
    ?'owner_account' => string,
    ?'port' => int,
    ?'restorable_node_types' => ?RestorableNodeTypeList,
    ?'snapshot_create_time' => ?TStamp,
    ?'snapshot_identifier' => string,
    ?'snapshot_retention_start_time' => ?TStamp,
    ?'snapshot_type' => string,
    ?'source_region' => string,
    ?'status' => string,
    ?'tags' => ?TagList,
    ?'total_backup_size_in_mega_bytes' => ?Double,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->accounts_with_restore_access = $s['accounts_with_restore_access'] ?? vec[];
    $this->actual_incremental_backup_size_in_mega_bytes = $s['actual_incremental_backup_size_in_mega_bytes'] ?? 0.0;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->backup_progress_in_mega_bytes = $s['backup_progress_in_mega_bytes'] ?? 0.0;
    $this->cluster_create_time = $s['cluster_create_time'] ?? 0;
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->cluster_version = $s['cluster_version'] ?? '';
    $this->current_backup_rate_in_mega_bytes_per_second = $s['current_backup_rate_in_mega_bytes_per_second'] ?? 0.0;
    $this->db_name = $s['db_name'] ?? '';
    $this->elapsed_time_in_seconds = $s['elapsed_time_in_seconds'] ?? 0;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->encrypted_with_hsm = $s['encrypted_with_hsm'] ?? false;
    $this->enhanced_vpc_routing = $s['enhanced_vpc_routing'] ?? false;
    $this->estimated_seconds_to_completion = $s['estimated_seconds_to_completion'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->manual_snapshot_remaining_days = $s['manual_snapshot_remaining_days'] ?? 0;
    $this->manual_snapshot_retention_period = $s['manual_snapshot_retention_period'] ?? 0;
    $this->master_username = $s['master_username'] ?? '';
    $this->node_type = $s['node_type'] ?? '';
    $this->number_of_nodes = $s['number_of_nodes'] ?? 0;
    $this->owner_account = $s['owner_account'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->restorable_node_types = $s['restorable_node_types'] ?? vec[];
    $this->snapshot_create_time = $s['snapshot_create_time'] ?? 0;
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
    $this->snapshot_retention_start_time = $s['snapshot_retention_start_time'] ?? 0;
    $this->snapshot_type = $s['snapshot_type'] ?? '';
    $this->source_region = $s['source_region'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->total_backup_size_in_mega_bytes = $s['total_backup_size_in_mega_bytes'] ?? 0.0;
    $this->vpc_id = $s['vpc_id'] ?? '';
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
  public ?TagList $tags;

  public function __construct(shape(
    ?'kms_key_id' => string,
    ?'snapshot_copy_grant_name' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->snapshot_copy_grant_name = $s['snapshot_copy_grant_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?SnapshotCopyGrantList $snapshot_copy_grants;

  public function __construct(shape(
    ?'marker' => string,
    ?'snapshot_copy_grants' => ?SnapshotCopyGrantList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->snapshot_copy_grants = $s['snapshot_copy_grants'] ?? vec[];
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
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->snapshot_cluster_identifier = $s['snapshot_cluster_identifier'] ?? '';
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
  }
}

type SnapshotIdentifierList = vec<String>;

type SnapshotList = vec<Snapshot>;

class SnapshotMessage {
  public string $marker;
  public ?SnapshotList $snapshots;

  public function __construct(shape(
    ?'marker' => string,
    ?'snapshots' => ?SnapshotList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->snapshots = $s['snapshots'] ?? vec[];
  }
}

class SnapshotSchedule {
  public ?IntegerOptional $associated_cluster_count;
  public ?AssociatedClusterList $associated_clusters;
  public ?ScheduledSnapshotTimeList $next_invocations;
  public ?ScheduleDefinitionList $schedule_definitions;
  public string $schedule_description;
  public string $schedule_identifier;
  public ?TagList $tags;

  public function __construct(shape(
    ?'associated_cluster_count' => ?IntegerOptional,
    ?'associated_clusters' => ?AssociatedClusterList,
    ?'next_invocations' => ?ScheduledSnapshotTimeList,
    ?'schedule_definitions' => ?ScheduleDefinitionList,
    ?'schedule_description' => string,
    ?'schedule_identifier' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->associated_cluster_count = $s['associated_cluster_count'] ?? 0;
    $this->associated_clusters = $s['associated_clusters'] ?? vec[];
    $this->next_invocations = $s['next_invocations'] ?? vec[];
    $this->schedule_definitions = $s['schedule_definitions'] ?? vec[];
    $this->schedule_description = $s['schedule_description'] ?? '';
    $this->schedule_identifier = $s['schedule_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?SnapshotAttributeToSortBy $attribute;
  public ?SortByOrder $sort_order;

  public function __construct(shape(
    ?'attribute' => ?SnapshotAttributeToSortBy,
    ?'sort_order' => ?SortByOrder,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
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
    $this->operation_name = $s['operation_name'] ?? '';
  }
}

type SupportedOperationList = vec<SupportedOperation>;

class SupportedPlatform {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
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
  public ?LongOptional $progress_in_mega_bytes;
  public ?TStamp $request_time;
  public string $snapshot_identifier;
  public string $source_database_name;
  public string $source_schema_name;
  public string $source_table_name;
  public ?TableRestoreStatusType $status;
  public string $table_restore_request_id;
  public string $target_database_name;
  public string $target_schema_name;
  public ?LongOptional $total_data_in_mega_bytes;

  public function __construct(shape(
    ?'cluster_identifier' => string,
    ?'message' => string,
    ?'new_table_name' => string,
    ?'progress_in_mega_bytes' => ?LongOptional,
    ?'request_time' => ?TStamp,
    ?'snapshot_identifier' => string,
    ?'source_database_name' => string,
    ?'source_schema_name' => string,
    ?'source_table_name' => string,
    ?'status' => ?TableRestoreStatusType,
    ?'table_restore_request_id' => string,
    ?'target_database_name' => string,
    ?'target_schema_name' => string,
    ?'total_data_in_mega_bytes' => ?LongOptional,
  ) $s = shape()) {
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->new_table_name = $s['new_table_name'] ?? '';
    $this->progress_in_mega_bytes = $s['progress_in_mega_bytes'] ?? 0;
    $this->request_time = $s['request_time'] ?? 0;
    $this->snapshot_identifier = $s['snapshot_identifier'] ?? '';
    $this->source_database_name = $s['source_database_name'] ?? '';
    $this->source_schema_name = $s['source_schema_name'] ?? '';
    $this->source_table_name = $s['source_table_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->table_restore_request_id = $s['table_restore_request_id'] ?? '';
    $this->target_database_name = $s['target_database_name'] ?? '';
    $this->target_schema_name = $s['target_schema_name'] ?? '';
    $this->total_data_in_mega_bytes = $s['total_data_in_mega_bytes'] ?? 0;
  }
}

type TableRestoreStatusList = vec<TableRestoreStatus>;

class TableRestoreStatusMessage {
  public string $marker;
  public ?TableRestoreStatusList $table_restore_status_details;

  public function __construct(shape(
    ?'marker' => string,
    ?'table_restore_status_details' => ?TableRestoreStatusList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->table_restore_status_details = $s['table_restore_status_details'] ?? vec[];
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
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
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
  public ?Tag $tag;

  public function __construct(shape(
    ?'resource_name' => string,
    ?'resource_type' => string,
    ?'tag' => ?Tag,
  ) $s = shape()) {
    $this->resource_name = $s['resource_name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tag = $s['tag'] ?? null;
  }
}

type TaggedResourceList = vec<TaggedResource>;

class TaggedResourceListMessage {
  public string $marker;
  public ?TaggedResourceList $tagged_resources;

  public function __construct(shape(
    ?'marker' => string,
    ?'tagged_resources' => ?TaggedResourceList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->tagged_resources = $s['tagged_resources'] ?? vec[];
  }
}

type TrackList = vec<MaintenanceTrack>;

class TrackListMessage {
  public ?TrackList $maintenance_tracks;
  public string $marker;

  public function __construct(shape(
    ?'maintenance_tracks' => ?TrackList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->maintenance_tracks = $s['maintenance_tracks'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
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
  public ?SupportedOperationList $supported_operations;

  public function __construct(shape(
    ?'database_version' => string,
    ?'maintenance_track_name' => string,
    ?'supported_operations' => ?SupportedOperationList,
  ) $s = shape()) {
    $this->database_version = $s['database_version'] ?? '';
    $this->maintenance_track_name = $s['maintenance_track_name'] ?? '';
    $this->supported_operations = $s['supported_operations'] ?? vec[];
  }
}

class UsageLimit {
  public ?Long $amount;
  public ?UsageLimitBreachAction $breach_action;
  public string $cluster_identifier;
  public ?UsageLimitFeatureType $feature_type;
  public ?UsageLimitLimitType $limit_type;
  public ?UsageLimitPeriod $period;
  public ?TagList $tags;
  public string $usage_limit_id;

  public function __construct(shape(
    ?'amount' => ?Long,
    ?'breach_action' => ?UsageLimitBreachAction,
    ?'cluster_identifier' => string,
    ?'feature_type' => ?UsageLimitFeatureType,
    ?'limit_type' => ?UsageLimitLimitType,
    ?'period' => ?UsageLimitPeriod,
    ?'tags' => ?TagList,
    ?'usage_limit_id' => string,
  ) $s = shape()) {
    $this->amount = $s['amount'] ?? 0;
    $this->breach_action = $s['breach_action'] ?? '';
    $this->cluster_identifier = $s['cluster_identifier'] ?? '';
    $this->feature_type = $s['feature_type'] ?? '';
    $this->limit_type = $s['limit_type'] ?? '';
    $this->period = $s['period'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->usage_limit_id = $s['usage_limit_id'] ?? '';
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
  public ?UsageLimits $usage_limits;

  public function __construct(shape(
    ?'marker' => string,
    ?'usage_limits' => ?UsageLimits,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->usage_limits = $s['usage_limits'] ?? vec[];
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
    $this->status = $s['status'] ?? '';
    $this->vpc_security_group_id = $s['vpc_security_group_id'] ?? '';
  }
}

type VpcSecurityGroupMembershipList = vec<VpcSecurityGroupMembership>;

