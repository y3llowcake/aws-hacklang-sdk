<?hh // strict
namespace slack\aws\redshift;

interface Redshift {
  public function AcceptReservedNodeExchange(AcceptReservedNodeExchangeInputMessage) Awaitable<Errors\Result<AcceptReservedNodeExchangeOutputMessage>>;
  public function AuthorizeClusterSecurityGroupIngress(AuthorizeClusterSecurityGroupIngressMessage) Awaitable<Errors\Result<AuthorizeClusterSecurityGroupIngressResult>>;
  public function AuthorizeSnapshotAccess(AuthorizeSnapshotAccessMessage) Awaitable<Errors\Result<AuthorizeSnapshotAccessResult>>;
  public function BatchDeleteClusterSnapshots(BatchDeleteClusterSnapshotsRequest) Awaitable<Errors\Result<BatchDeleteClusterSnapshotsResult>>;
  public function BatchModifyClusterSnapshots(BatchModifyClusterSnapshotsMessage) Awaitable<Errors\Result<BatchModifyClusterSnapshotsOutputMessage>>;
  public function CancelResize(CancelResizeMessage) Awaitable<Errors\Result<ResizeProgressMessage>>;
  public function CopyClusterSnapshot(CopyClusterSnapshotMessage) Awaitable<Errors\Result<CopyClusterSnapshotResult>>;
  public function CreateCluster(CreateClusterMessage) Awaitable<Errors\Result<CreateClusterResult>>;
  public function CreateClusterParameterGroup(CreateClusterParameterGroupMessage) Awaitable<Errors\Result<CreateClusterParameterGroupResult>>;
  public function CreateClusterSecurityGroup(CreateClusterSecurityGroupMessage) Awaitable<Errors\Result<CreateClusterSecurityGroupResult>>;
  public function CreateClusterSnapshot(CreateClusterSnapshotMessage) Awaitable<Errors\Result<CreateClusterSnapshotResult>>;
  public function CreateClusterSubnetGroup(CreateClusterSubnetGroupMessage) Awaitable<Errors\Result<CreateClusterSubnetGroupResult>>;
  public function CreateEventSubscription(CreateEventSubscriptionMessage) Awaitable<Errors\Result<CreateEventSubscriptionResult>>;
  public function CreateHsmClientCertificate(CreateHsmClientCertificateMessage) Awaitable<Errors\Result<CreateHsmClientCertificateResult>>;
  public function CreateHsmConfiguration(CreateHsmConfigurationMessage) Awaitable<Errors\Result<CreateHsmConfigurationResult>>;
  public function CreateScheduledAction(CreateScheduledActionMessage) Awaitable<Errors\Result<ScheduledAction>>;
  public function CreateSnapshotCopyGrant(CreateSnapshotCopyGrantMessage) Awaitable<Errors\Result<CreateSnapshotCopyGrantResult>>;
  public function CreateSnapshotSchedule(CreateSnapshotScheduleMessage) Awaitable<Errors\Result<SnapshotSchedule>>;
  public function CreateTags(CreateTagsMessage) Awaitable<Errors\Error>;
  public function CreateUsageLimit(CreateUsageLimitMessage) Awaitable<Errors\Result<UsageLimit>>;
  public function DeleteCluster(DeleteClusterMessage) Awaitable<Errors\Result<DeleteClusterResult>>;
  public function DeleteClusterParameterGroup(DeleteClusterParameterGroupMessage) Awaitable<Errors\Error>;
  public function DeleteClusterSecurityGroup(DeleteClusterSecurityGroupMessage) Awaitable<Errors\Error>;
  public function DeleteClusterSnapshot(DeleteClusterSnapshotMessage) Awaitable<Errors\Result<DeleteClusterSnapshotResult>>;
  public function DeleteClusterSubnetGroup(DeleteClusterSubnetGroupMessage) Awaitable<Errors\Error>;
  public function DeleteEventSubscription(DeleteEventSubscriptionMessage) Awaitable<Errors\Error>;
  public function DeleteHsmClientCertificate(DeleteHsmClientCertificateMessage) Awaitable<Errors\Error>;
  public function DeleteHsmConfiguration(DeleteHsmConfigurationMessage) Awaitable<Errors\Error>;
  public function DeleteScheduledAction(DeleteScheduledActionMessage) Awaitable<Errors\Error>;
  public function DeleteSnapshotCopyGrant(DeleteSnapshotCopyGrantMessage) Awaitable<Errors\Error>;
  public function DeleteSnapshotSchedule(DeleteSnapshotScheduleMessage) Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsMessage) Awaitable<Errors\Error>;
  public function DeleteUsageLimit(DeleteUsageLimitMessage) Awaitable<Errors\Error>;
  public function DescribeAccountAttributes(DescribeAccountAttributesMessage) Awaitable<Errors\Result<AccountAttributeList>>;
  public function DescribeClusterDbRevisions(DescribeClusterDbRevisionsMessage) Awaitable<Errors\Result<ClusterDbRevisionsMessage>>;
  public function DescribeClusterParameterGroups(DescribeClusterParameterGroupsMessage) Awaitable<Errors\Result<ClusterParameterGroupsMessage>>;
  public function DescribeClusterParameters(DescribeClusterParametersMessage) Awaitable<Errors\Result<ClusterParameterGroupDetails>>;
  public function DescribeClusterSecurityGroups(DescribeClusterSecurityGroupsMessage) Awaitable<Errors\Result<ClusterSecurityGroupMessage>>;
  public function DescribeClusterSnapshots(DescribeClusterSnapshotsMessage) Awaitable<Errors\Result<SnapshotMessage>>;
  public function DescribeClusterSubnetGroups(DescribeClusterSubnetGroupsMessage) Awaitable<Errors\Result<ClusterSubnetGroupMessage>>;
  public function DescribeClusterTracks(DescribeClusterTracksMessage) Awaitable<Errors\Result<TrackListMessage>>;
  public function DescribeClusterVersions(DescribeClusterVersionsMessage) Awaitable<Errors\Result<ClusterVersionsMessage>>;
  public function DescribeClusters(DescribeClustersMessage) Awaitable<Errors\Result<ClustersMessage>>;
  public function DescribeDefaultClusterParameters(DescribeDefaultClusterParametersMessage) Awaitable<Errors\Result<DescribeDefaultClusterParametersResult>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage) Awaitable<Errors\Result<EventCategoriesMessage>>;
  public function DescribeEventSubscriptions(DescribeEventSubscriptionsMessage) Awaitable<Errors\Result<EventSubscriptionsMessage>>;
  public function DescribeEvents(DescribeEventsMessage) Awaitable<Errors\Result<EventsMessage>>;
  public function DescribeHsmClientCertificates(DescribeHsmClientCertificatesMessage) Awaitable<Errors\Result<HsmClientCertificateMessage>>;
  public function DescribeHsmConfigurations(DescribeHsmConfigurationsMessage) Awaitable<Errors\Result<HsmConfigurationMessage>>;
  public function DescribeLoggingStatus(DescribeLoggingStatusMessage) Awaitable<Errors\Result<LoggingStatus>>;
  public function DescribeNodeConfigurationOptions(DescribeNodeConfigurationOptionsMessage) Awaitable<Errors\Result<NodeConfigurationOptionsMessage>>;
  public function DescribeOrderableClusterOptions(DescribeOrderableClusterOptionsMessage) Awaitable<Errors\Result<OrderableClusterOptionsMessage>>;
  public function DescribeReservedNodeOfferings(DescribeReservedNodeOfferingsMessage) Awaitable<Errors\Result<ReservedNodeOfferingsMessage>>;
  public function DescribeReservedNodes(DescribeReservedNodesMessage) Awaitable<Errors\Result<ReservedNodesMessage>>;
  public function DescribeResize(DescribeResizeMessage) Awaitable<Errors\Result<ResizeProgressMessage>>;
  public function DescribeScheduledActions(DescribeScheduledActionsMessage) Awaitable<Errors\Result<ScheduledActionsMessage>>;
  public function DescribeSnapshotCopyGrants(DescribeSnapshotCopyGrantsMessage) Awaitable<Errors\Result<SnapshotCopyGrantMessage>>;
  public function DescribeSnapshotSchedules(DescribeSnapshotSchedulesMessage) Awaitable<Errors\Result<DescribeSnapshotSchedulesOutputMessage>>;
  public function DescribeStorage() Awaitable<Errors\Result<CustomerStorageMessage>>;
  public function DescribeTableRestoreStatus(DescribeTableRestoreStatusMessage) Awaitable<Errors\Result<TableRestoreStatusMessage>>;
  public function DescribeTags(DescribeTagsMessage) Awaitable<Errors\Result<TaggedResourceListMessage>>;
  public function DescribeUsageLimits(DescribeUsageLimitsMessage) Awaitable<Errors\Result<UsageLimitList>>;
  public function DisableLogging(DisableLoggingMessage) Awaitable<Errors\Result<LoggingStatus>>;
  public function DisableSnapshotCopy(DisableSnapshotCopyMessage) Awaitable<Errors\Result<DisableSnapshotCopyResult>>;
  public function EnableLogging(EnableLoggingMessage) Awaitable<Errors\Result<LoggingStatus>>;
  public function EnableSnapshotCopy(EnableSnapshotCopyMessage) Awaitable<Errors\Result<EnableSnapshotCopyResult>>;
  public function GetClusterCredentials(GetClusterCredentialsMessage) Awaitable<Errors\Result<ClusterCredentials>>;
  public function GetReservedNodeExchangeOfferings(GetReservedNodeExchangeOfferingsInputMessage) Awaitable<Errors\Result<GetReservedNodeExchangeOfferingsOutputMessage>>;
  public function ModifyCluster(ModifyClusterMessage) Awaitable<Errors\Result<ModifyClusterResult>>;
  public function ModifyClusterDbRevision(ModifyClusterDbRevisionMessage) Awaitable<Errors\Result<ModifyClusterDbRevisionResult>>;
  public function ModifyClusterIamRoles(ModifyClusterIamRolesMessage) Awaitable<Errors\Result<ModifyClusterIamRolesResult>>;
  public function ModifyClusterMaintenance(ModifyClusterMaintenanceMessage) Awaitable<Errors\Result<ModifyClusterMaintenanceResult>>;
  public function ModifyClusterParameterGroup(ModifyClusterParameterGroupMessage) Awaitable<Errors\Result<ClusterParameterGroupNameMessage>>;
  public function ModifyClusterSnapshot(ModifyClusterSnapshotMessage) Awaitable<Errors\Result<ModifyClusterSnapshotResult>>;
  public function ModifyClusterSnapshotSchedule(ModifyClusterSnapshotScheduleMessage) Awaitable<Errors\Error>;
  public function ModifyClusterSubnetGroup(ModifyClusterSubnetGroupMessage) Awaitable<Errors\Result<ModifyClusterSubnetGroupResult>>;
  public function ModifyEventSubscription(ModifyEventSubscriptionMessage) Awaitable<Errors\Result<ModifyEventSubscriptionResult>>;
  public function ModifyScheduledAction(ModifyScheduledActionMessage) Awaitable<Errors\Result<ScheduledAction>>;
  public function ModifySnapshotCopyRetentionPeriod(ModifySnapshotCopyRetentionPeriodMessage) Awaitable<Errors\Result<ModifySnapshotCopyRetentionPeriodResult>>;
  public function ModifySnapshotSchedule(ModifySnapshotScheduleMessage) Awaitable<Errors\Result<SnapshotSchedule>>;
  public function ModifyUsageLimit(ModifyUsageLimitMessage) Awaitable<Errors\Result<UsageLimit>>;
  public function PauseCluster(PauseClusterMessage) Awaitable<Errors\Result<PauseClusterResult>>;
  public function PurchaseReservedNodeOffering(PurchaseReservedNodeOfferingMessage) Awaitable<Errors\Result<PurchaseReservedNodeOfferingResult>>;
  public function RebootCluster(RebootClusterMessage) Awaitable<Errors\Result<RebootClusterResult>>;
  public function ResetClusterParameterGroup(ResetClusterParameterGroupMessage) Awaitable<Errors\Result<ClusterParameterGroupNameMessage>>;
  public function ResizeCluster(ResizeClusterMessage) Awaitable<Errors\Result<ResizeClusterResult>>;
  public function RestoreFromClusterSnapshot(RestoreFromClusterSnapshotMessage) Awaitable<Errors\Result<RestoreFromClusterSnapshotResult>>;
  public function RestoreTableFromClusterSnapshot(RestoreTableFromClusterSnapshotMessage) Awaitable<Errors\Result<RestoreTableFromClusterSnapshotResult>>;
  public function ResumeCluster(ResumeClusterMessage) Awaitable<Errors\Result<ResumeClusterResult>>;
  public function RevokeClusterSecurityGroupIngress(RevokeClusterSecurityGroupIngressMessage) Awaitable<Errors\Result<RevokeClusterSecurityGroupIngressResult>>;
  public function RevokeSnapshotAccess(RevokeSnapshotAccessMessage) Awaitable<Errors\Result<RevokeSnapshotAccessResult>>;
  public function RotateEncryptionKey(RotateEncryptionKeyMessage) Awaitable<Errors\Result<RotateEncryptionKeyResult>>;
}

class AcceptReservedNodeExchangeInputMessage {
  public string $reserved_node_id;
  public string $target_reserved_node_offering_id;
}

class AcceptReservedNodeExchangeOutputMessage {
  public ReservedNode $exchanged_reserved_node;
}

class AccessToSnapshotDeniedFault {
}

class AccountAttribute {
  public string $attribute_name;
  public AttributeValueList $attribute_values;
}

class AccountAttributeList {
  public AttributeList $account_attributes;
}

class AccountWithRestoreAccess {
  public string $account_alias;
  public string $account_id;
}

class AccountsWithRestoreAccessList {
}

class ActionType {
}

class AssociatedClusterList {
}

class AttributeList {
}

class AttributeNameList {
}

class AttributeValueList {
}

class AttributeValueTarget {
  public string $attribute_value;
}

class AuthorizationAlreadyExistsFault {
}

class AuthorizationNotFoundFault {
}

class AuthorizationQuotaExceededFault {
}

class AuthorizeClusterSecurityGroupIngressMessage {
  public string $cidrip;
  public string $cluster_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
}

class AuthorizeClusterSecurityGroupIngressResult {
  public ClusterSecurityGroup $cluster_security_group;
}

class AuthorizeSnapshotAccessMessage {
  public string $account_with_restore_access;
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;
}

class AuthorizeSnapshotAccessResult {
  public Snapshot $snapshot;
}

class AvailabilityZone {
  public string $name;
  public SupportedPlatformsList $supported_platforms;
}

class AvailabilityZoneList {
}

class BatchDeleteClusterSnapshotsRequest {
  public DeleteClusterSnapshotMessageList $identifiers;
}

class BatchDeleteClusterSnapshotsResult {
  public BatchSnapshotOperationErrorList $errors;
  public SnapshotIdentifierList $resources;
}

class BatchDeleteRequestSizeExceededFault {
}

class BatchModifyClusterSnapshotsLimitExceededFault {
}

class BatchModifyClusterSnapshotsMessage {
  public boolean $force;
  public IntegerOptional $manual_snapshot_retention_period;
  public SnapshotIdentifierList $snapshot_identifier_list;
}

class BatchModifyClusterSnapshotsOutputMessage {
  public BatchSnapshotOperationErrors $errors;
  public SnapshotIdentifierList $resources;
}

class BatchSnapshotOperationErrorList {
}

class BatchSnapshotOperationErrors {
}

class Boolean {
}

class BooleanOptional {
}

class BucketNotFoundFault {
}

class CancelResizeMessage {
  public string $cluster_identifier;
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
}

class ClusterAlreadyExistsFault {
}

class ClusterAssociatedToSchedule {
  public string $cluster_identifier;
  public ScheduleState $schedule_association_state;
}

class ClusterCredentials {
  public SensitiveString $db_password;
  public string $db_user;
  public TStamp $expiration;
}

class ClusterDbRevision {
  public string $cluster_identifier;
  public string $current_database_revision;
  public TStamp $database_revision_release_date;
  public RevisionTargetsList $revision_targets;
}

class ClusterDbRevisionsList {
}

class ClusterDbRevisionsMessage {
  public ClusterDbRevisionsList $cluster_db_revisions;
  public string $marker;
}

class ClusterIamRole {
  public string $apply_status;
  public string $iam_role_arn;
}

class ClusterIamRoleList {
}

class ClusterList {
}

class ClusterNode {
  public string $node_role;
  public string $private_ip_address;
  public string $public_ip_address;
}

class ClusterNodesList {
}

class ClusterNotFoundFault {
}

class ClusterOnLatestRevisionFault {
}

class ClusterParameterGroup {
  public string $description;
  public string $parameter_group_family;
  public string $parameter_group_name;
  public TagList $tags;
}

class ClusterParameterGroupAlreadyExistsFault {
}

class ClusterParameterGroupDetails {
  public string $marker;
  public ParametersList $parameters;
}

class ClusterParameterGroupNameMessage {
  public string $parameter_group_name;
  public string $parameter_group_status;
}

class ClusterParameterGroupNotFoundFault {
}

class ClusterParameterGroupQuotaExceededFault {
}

class ClusterParameterGroupStatus {
  public ClusterParameterStatusList $cluster_parameter_status_list;
  public string $parameter_apply_status;
  public string $parameter_group_name;
}

class ClusterParameterGroupStatusList {
}

class ClusterParameterGroupsMessage {
  public string $marker;
  public ParameterGroupList $parameter_groups;
}

class ClusterParameterStatus {
  public string $parameter_apply_error_description;
  public string $parameter_apply_status;
  public string $parameter_name;
}

class ClusterParameterStatusList {
}

class ClusterQuotaExceededFault {
}

class ClusterSecurityGroup {
  public string $cluster_security_group_name;
  public string $description;
  public EC2SecurityGroupList $ec_2_security_groups;
  public IPRangeList $ip_ranges;
  public TagList $tags;
}

class ClusterSecurityGroupAlreadyExistsFault {
}

class ClusterSecurityGroupMembership {
  public string $cluster_security_group_name;
  public string $status;
}

class ClusterSecurityGroupMembershipList {
}

class ClusterSecurityGroupMessage {
  public ClusterSecurityGroups $cluster_security_groups;
  public string $marker;
}

class ClusterSecurityGroupNameList {
}

class ClusterSecurityGroupNotFoundFault {
}

class ClusterSecurityGroupQuotaExceededFault {
}

class ClusterSecurityGroups {
}

class ClusterSnapshotAlreadyExistsFault {
}

class ClusterSnapshotCopyStatus {
  public string $destination_region;
  public int $manual_snapshot_retention_period;
  public Long $retention_period;
  public string $snapshot_copy_grant_name;
}

class ClusterSnapshotNotFoundFault {
}

class ClusterSnapshotQuotaExceededFault {
}

class ClusterSubnetGroup {
  public string $cluster_subnet_group_name;
  public string $description;
  public string $subnet_group_status;
  public SubnetList $subnets;
  public TagList $tags;
  public string $vpc_id;
}

class ClusterSubnetGroupAlreadyExistsFault {
}

class ClusterSubnetGroupMessage {
  public ClusterSubnetGroups $cluster_subnet_groups;
  public string $marker;
}

class ClusterSubnetGroupNotFoundFault {
}

class ClusterSubnetGroupQuotaExceededFault {
}

class ClusterSubnetGroups {
}

class ClusterSubnetQuotaExceededFault {
}

class ClusterVersion {
  public string $cluster_parameter_group_family;
  public string $cluster_version;
  public string $description;
}

class ClusterVersionList {
}

class ClusterVersionsMessage {
  public ClusterVersionList $cluster_versions;
  public string $marker;
}

class ClustersMessage {
  public ClusterList $clusters;
  public string $marker;
}

class CopyClusterSnapshotMessage {
  public IntegerOptional $manual_snapshot_retention_period;
  public string $source_snapshot_cluster_identifier;
  public string $source_snapshot_identifier;
  public string $target_snapshot_identifier;
}

class CopyClusterSnapshotResult {
  public Snapshot $snapshot;
}

class CopyToRegionDisabledFault {
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
}

class CreateClusterParameterGroupMessage {
  public string $description;
  public string $parameter_group_family;
  public string $parameter_group_name;
  public TagList $tags;
}

class CreateClusterParameterGroupResult {
  public ClusterParameterGroup $cluster_parameter_group;
}

class CreateClusterResult {
  public Cluster $cluster;
}

class CreateClusterSecurityGroupMessage {
  public string $cluster_security_group_name;
  public string $description;
  public TagList $tags;
}

class CreateClusterSecurityGroupResult {
  public ClusterSecurityGroup $cluster_security_group;
}

class CreateClusterSnapshotMessage {
  public string $cluster_identifier;
  public IntegerOptional $manual_snapshot_retention_period;
  public string $snapshot_identifier;
  public TagList $tags;
}

class CreateClusterSnapshotResult {
  public Snapshot $snapshot;
}

class CreateClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;
  public string $description;
  public SubnetIdentifierList $subnet_ids;
  public TagList $tags;
}

class CreateClusterSubnetGroupResult {
  public ClusterSubnetGroup $cluster_subnet_group;
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
}

class CreateEventSubscriptionResult {
  public EventSubscription $event_subscription;
}

class CreateHsmClientCertificateMessage {
  public string $hsm_client_certificate_identifier;
  public TagList $tags;
}

class CreateHsmClientCertificateResult {
  public HsmClientCertificate $hsm_client_certificate;
}

class CreateHsmConfigurationMessage {
  public string $description;
  public string $hsm_configuration_identifier;
  public string $hsm_ip_address;
  public string $hsm_partition_name;
  public string $hsm_partition_password;
  public string $hsm_server_public_certificate;
  public TagList $tags;
}

class CreateHsmConfigurationResult {
  public HsmConfiguration $hsm_configuration;
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
}

class CreateSnapshotCopyGrantMessage {
  public string $kms_key_id;
  public string $snapshot_copy_grant_name;
  public TagList $tags;
}

class CreateSnapshotCopyGrantResult {
  public SnapshotCopyGrant $snapshot_copy_grant;
}

class CreateSnapshotScheduleMessage {
  public BooleanOptional $dry_run;
  public IntegerOptional $next_invocations;
  public ScheduleDefinitionList $schedule_definitions;
  public string $schedule_description;
  public string $schedule_identifier;
  public TagList $tags;
}

class CreateTagsMessage {
  public string $resource_name;
  public TagList $tags;
}

class CreateUsageLimitMessage {
  public Long $amount;
  public UsageLimitBreachAction $breach_action;
  public string $cluster_identifier;
  public UsageLimitFeatureType $feature_type;
  public UsageLimitLimitType $limit_type;
  public UsageLimitPeriod $period;
  public TagList $tags;
}

class CustomerStorageMessage {
  public Double $total_backup_size_in_mega_bytes;
  public Double $total_provisioned_storage_in_mega_bytes;
}

class DataTransferProgress {
  public DoubleOptional $current_rate_in_mega_bytes_per_second;
  public Long $data_transferred_in_mega_bytes;
  public LongOptional $elapsed_time_in_seconds;
  public LongOptional $estimated_time_to_completion_in_seconds;
  public string $status;
  public Long $total_data_in_mega_bytes;
}

class DbGroupList {
}

class DefaultClusterParameters {
  public string $marker;
  public string $parameter_group_family;
  public ParametersList $parameters;
}

class DeferredMaintenanceWindow {
  public TStamp $defer_maintenance_end_time;
  public string $defer_maintenance_identifier;
  public TStamp $defer_maintenance_start_time;
}

class DeferredMaintenanceWindowsList {
}

class DeleteClusterMessage {
  public string $cluster_identifier;
  public string $final_cluster_snapshot_identifier;
  public IntegerOptional $final_cluster_snapshot_retention_period;
  public boolean $skip_final_cluster_snapshot;
}

class DeleteClusterParameterGroupMessage {
  public string $parameter_group_name;
}

class DeleteClusterResult {
  public Cluster $cluster;
}

class DeleteClusterSecurityGroupMessage {
  public string $cluster_security_group_name;
}

class DeleteClusterSnapshotMessage {
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;
}

class DeleteClusterSnapshotMessageList {
}

class DeleteClusterSnapshotResult {
  public Snapshot $snapshot;
}

class DeleteClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;
}

class DeleteEventSubscriptionMessage {
  public string $subscription_name;
}

class DeleteHsmClientCertificateMessage {
  public string $hsm_client_certificate_identifier;
}

class DeleteHsmConfigurationMessage {
  public string $hsm_configuration_identifier;
}

class DeleteScheduledActionMessage {
  public string $scheduled_action_name;
}

class DeleteSnapshotCopyGrantMessage {
  public string $snapshot_copy_grant_name;
}

class DeleteSnapshotScheduleMessage {
  public string $schedule_identifier;
}

class DeleteTagsMessage {
  public string $resource_name;
  public TagKeyList $tag_keys;
}

class DeleteUsageLimitMessage {
  public string $usage_limit_id;
}

class DependentServiceRequestThrottlingFault {
}

class DependentServiceUnavailableFault {
}

class DescribeAccountAttributesMessage {
  public AttributeNameList $attribute_names;
}

class DescribeClusterDbRevisionsMessage {
  public string $cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeClusterParameterGroupsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $parameter_group_name;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
}

class DescribeClusterParametersMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $parameter_group_name;
  public string $source;
}

class DescribeClusterSecurityGroupsMessage {
  public string $cluster_security_group_name;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
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
}

class DescribeClusterSubnetGroupsMessage {
  public string $cluster_subnet_group_name;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
}

class DescribeClusterTracksMessage {
  public string $maintenance_track_name;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeClusterVersionsMessage {
  public string $cluster_parameter_group_family;
  public string $cluster_version;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeClustersMessage {
  public string $cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
}

class DescribeDefaultClusterParametersMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $parameter_group_family;
}

class DescribeDefaultClusterParametersResult {
  public DefaultClusterParameters $default_cluster_parameters;
}

class DescribeEventCategoriesMessage {
  public string $source_type;
}

class DescribeEventSubscriptionsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $subscription_name;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
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

class DescribeHsmClientCertificatesMessage {
  public string $hsm_client_certificate_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
}

class DescribeHsmConfigurationsMessage {
  public string $hsm_configuration_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
}

class DescribeLoggingStatusMessage {
  public string $cluster_identifier;
}

class DescribeNodeConfigurationOptionsMessage {
  public ActionType $action_type;
  public string $cluster_identifier;
  public NodeConfigurationOptionsFilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $owner_account;
  public string $snapshot_identifier;
}

class DescribeOrderableClusterOptionsMessage {
  public string $cluster_version;
  public string $marker;
  public IntegerOptional $max_records;
  public string $node_type;
}

class DescribeReservedNodeOfferingsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $reserved_node_offering_id;
}

class DescribeReservedNodesMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $reserved_node_id;
}

class DescribeResizeMessage {
  public string $cluster_identifier;
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
}

class DescribeSnapshotCopyGrantsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $snapshot_copy_grant_name;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
}

class DescribeSnapshotSchedulesMessage {
  public string $cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public string $schedule_identifier;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
}

class DescribeSnapshotSchedulesOutputMessage {
  public string $marker;
  public SnapshotScheduleList $snapshot_schedules;
}

class DescribeTableRestoreStatusMessage {
  public string $cluster_identifier;
  public string $marker;
  public IntegerOptional $max_records;
  public string $table_restore_request_id;
}

class DescribeTagsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $resource_name;
  public string $resource_type;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
}

class DescribeUsageLimitsMessage {
  public string $cluster_identifier;
  public UsageLimitFeatureType $feature_type;
  public string $marker;
  public IntegerOptional $max_records;
  public TagKeyList $tag_keys;
  public TagValueList $tag_values;
  public string $usage_limit_id;
}

class DisableLoggingMessage {
  public string $cluster_identifier;
}

class DisableSnapshotCopyMessage {
  public string $cluster_identifier;
}

class DisableSnapshotCopyResult {
  public Cluster $cluster;
}

class Double {
}

class DoubleOptional {
}

class EC2SecurityGroup {
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
  public string $status;
  public TagList $tags;
}

class EC2SecurityGroupList {
}

class ElasticIpStatus {
  public string $elastic_ip;
  public string $status;
}

class EligibleTracksToUpdateList {
}

class EnableLoggingMessage {
  public string $bucket_name;
  public string $cluster_identifier;
  public string $s_3_key_prefix;
}

class EnableSnapshotCopyMessage {
  public string $cluster_identifier;
  public string $destination_region;
  public IntegerOptional $manual_snapshot_retention_period;
  public IntegerOptional $retention_period;
  public string $snapshot_copy_grant_name;
}

class EnableSnapshotCopyResult {
  public Cluster $cluster;
}

class Endpoint {
  public string $address;
  public int $port;
}

class Event {
  public TStamp $date;
  public EventCategoriesList $event_categories;
  public string $event_id;
  public string $message;
  public string $severity;
  public string $source_identifier;
  public SourceType $source_type;
}

class EventCategoriesList {
}

class EventCategoriesMap {
  public EventInfoMapList $events;
  public string $source_type;
}

class EventCategoriesMapList {
}

class EventCategoriesMessage {
  public EventCategoriesMapList $event_categories_map_list;
}

class EventInfoMap {
  public EventCategoriesList $event_categories;
  public string $event_description;
  public string $event_id;
  public string $severity;
}

class EventInfoMapList {
}

class EventList {
}

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

class GetClusterCredentialsMessage {
  public BooleanOptional $auto_create;
  public string $cluster_identifier;
  public DbGroupList $db_groups;
  public string $db_name;
  public string $db_user;
  public IntegerOptional $duration_seconds;
}

class GetReservedNodeExchangeOfferingsInputMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $reserved_node_id;
}

class GetReservedNodeExchangeOfferingsOutputMessage {
  public string $marker;
  public ReservedNodeOfferingList $reserved_node_offerings;
}

class HsmClientCertificate {
  public string $hsm_client_certificate_identifier;
  public string $hsm_client_certificate_public_key;
  public TagList $tags;
}

class HsmClientCertificateAlreadyExistsFault {
}

class HsmClientCertificateList {
}

class HsmClientCertificateMessage {
  public HsmClientCertificateList $hsm_client_certificates;
  public string $marker;
}

class HsmClientCertificateNotFoundFault {
}

class HsmClientCertificateQuotaExceededFault {
}

class HsmConfiguration {
  public string $description;
  public string $hsm_configuration_identifier;
  public string $hsm_ip_address;
  public string $hsm_partition_name;
  public TagList $tags;
}

class HsmConfigurationAlreadyExistsFault {
}

class HsmConfigurationList {
}

class HsmConfigurationMessage {
  public HsmConfigurationList $hsm_configurations;
  public string $marker;
}

class HsmConfigurationNotFoundFault {
}

class HsmConfigurationQuotaExceededFault {
}

class HsmStatus {
  public string $hsm_client_certificate_identifier;
  public string $hsm_configuration_identifier;
  public string $status;
}

class IPRange {
  public string $cidrip;
  public string $status;
  public TagList $tags;
}

class IPRangeList {
}

class IamRoleArnList {
}

class ImportTablesCompleted {
}

class ImportTablesInProgress {
}

class ImportTablesNotStarted {
}

class InProgressTableRestoreQuotaExceededFault {
}

class IncompatibleOrderableOptions {
}

class InsufficientClusterCapacityFault {
}

class InsufficientS3BucketPolicyFault {
}

class Integer {
}

class IntegerOptional {
}

class InvalidClusterParameterGroupStateFault {
}

class InvalidClusterSecurityGroupStateFault {
}

class InvalidClusterSnapshotScheduleStateFault {
}

class InvalidClusterSnapshotStateFault {
}

class InvalidClusterStateFault {
}

class InvalidClusterSubnetGroupStateFault {
}

class InvalidClusterSubnetStateFault {
}

class InvalidClusterTrackFault {
}

class InvalidElasticIpFault {
}

class InvalidHsmClientCertificateStateFault {
}

class InvalidHsmConfigurationStateFault {
}

class InvalidReservedNodeStateFault {
}

class InvalidRestoreFault {
}

class InvalidRetentionPeriodFault {
}

class InvalidS3BucketNameFault {
}

class InvalidS3KeyPrefixFault {
}

class InvalidScheduleFault {
}

class InvalidScheduledActionFault {
}

class InvalidSnapshotCopyGrantStateFault {
}

class InvalidSubnet {
}

class InvalidSubscriptionStateFault {
}

class InvalidTableRestoreArgumentFault {
}

class InvalidTagFault {
}

class InvalidUsageLimitFault {
}

class InvalidVPCNetworkStateFault {
}

class LimitExceededFault {
}

class LoggingStatus {
  public string $bucket_name;
  public string $last_failure_message;
  public TStamp $last_failure_time;
  public TStamp $last_successful_delivery_time;
  public boolean $logging_enabled;
  public string $s_3_key_prefix;
}

class Long {
}

class LongOptional {
}

class MaintenanceTrack {
  public string $database_version;
  public string $maintenance_track_name;
  public EligibleTracksToUpdateList $update_targets;
}

class Mode {
}

class ModifyClusterDbRevisionMessage {
  public string $cluster_identifier;
  public string $revision_target;
}

class ModifyClusterDbRevisionResult {
  public Cluster $cluster;
}

class ModifyClusterIamRolesMessage {
  public IamRoleArnList $add_iam_roles;
  public string $cluster_identifier;
  public IamRoleArnList $remove_iam_roles;
}

class ModifyClusterIamRolesResult {
  public Cluster $cluster;
}

class ModifyClusterMaintenanceMessage {
  public string $cluster_identifier;
  public BooleanOptional $defer_maintenance;
  public IntegerOptional $defer_maintenance_duration;
  public TStamp $defer_maintenance_end_time;
  public string $defer_maintenance_identifier;
  public TStamp $defer_maintenance_start_time;
}

class ModifyClusterMaintenanceResult {
  public Cluster $cluster;
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
}

class ModifyClusterParameterGroupMessage {
  public string $parameter_group_name;
  public ParametersList $parameters;
}

class ModifyClusterResult {
  public Cluster $cluster;
}

class ModifyClusterSnapshotMessage {
  public boolean $force;
  public IntegerOptional $manual_snapshot_retention_period;
  public string $snapshot_identifier;
}

class ModifyClusterSnapshotResult {
  public Snapshot $snapshot;
}

class ModifyClusterSnapshotScheduleMessage {
  public string $cluster_identifier;
  public BooleanOptional $disassociate_schedule;
  public string $schedule_identifier;
}

class ModifyClusterSubnetGroupMessage {
  public string $cluster_subnet_group_name;
  public string $description;
  public SubnetIdentifierList $subnet_ids;
}

class ModifyClusterSubnetGroupResult {
  public ClusterSubnetGroup $cluster_subnet_group;
}

class ModifyEventSubscriptionMessage {
  public BooleanOptional $enabled;
  public EventCategoriesList $event_categories;
  public string $severity;
  public string $sns_topic_arn;
  public SourceIdsList $source_ids;
  public string $source_type;
  public string $subscription_name;
}

class ModifyEventSubscriptionResult {
  public EventSubscription $event_subscription;
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
}

class ModifySnapshotCopyRetentionPeriodMessage {
  public string $cluster_identifier;
  public boolean $manual;
  public int $retention_period;
}

class ModifySnapshotCopyRetentionPeriodResult {
  public Cluster $cluster;
}

class ModifySnapshotScheduleMessage {
  public ScheduleDefinitionList $schedule_definitions;
  public string $schedule_identifier;
}

class ModifyUsageLimitMessage {
  public LongOptional $amount;
  public UsageLimitBreachAction $breach_action;
  public string $usage_limit_id;
}

class NodeConfigurationOption {
  public DoubleOptional $estimated_disk_utilization_percent;
  public Mode $mode;
  public string $node_type;
  public int $number_of_nodes;
}

class NodeConfigurationOptionList {
}

class NodeConfigurationOptionsFilter {
  public NodeConfigurationOptionsFilterName $name;
  public OperatorType $operator;
  public ValueStringList $values;
}

class NodeConfigurationOptionsFilterList {
}

class NodeConfigurationOptionsFilterName {
}

class NodeConfigurationOptionsMessage {
  public string $marker;
  public NodeConfigurationOptionList $node_configuration_option_list;
}

class NumberOfNodesPerClusterLimitExceededFault {
}

class NumberOfNodesQuotaExceededFault {
}

class OperatorType {
}

class OrderableClusterOption {
  public AvailabilityZoneList $availability_zones;
  public string $cluster_type;
  public string $cluster_version;
  public string $node_type;
}

class OrderableClusterOptionsList {
}

class OrderableClusterOptionsMessage {
  public string $marker;
  public OrderableClusterOptionsList $orderable_cluster_options;
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
}

class ParameterApplyType {
}

class ParameterGroupList {
}

class ParametersList {
}

class PauseClusterMessage {
  public string $cluster_identifier;
}

class PauseClusterResult {
  public Cluster $cluster;
}

class PendingActionsList {
}

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
}

class PurchaseReservedNodeOfferingMessage {
  public IntegerOptional $node_count;
  public string $reserved_node_offering_id;
}

class PurchaseReservedNodeOfferingResult {
  public ReservedNode $reserved_node;
}

class RebootClusterMessage {
  public string $cluster_identifier;
}

class RebootClusterResult {
  public Cluster $cluster;
}

class RecurringCharge {
  public Double $recurring_charge_amount;
  public string $recurring_charge_frequency;
}

class RecurringChargeList {
}

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
}

class ReservedNodeAlreadyExistsFault {
}

class ReservedNodeAlreadyMigratedFault {
}

class ReservedNodeList {
}

class ReservedNodeNotFoundFault {
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
}

class ReservedNodeOfferingList {
}

class ReservedNodeOfferingNotFoundFault {
}

class ReservedNodeOfferingType {
}

class ReservedNodeOfferingsMessage {
  public string $marker;
  public ReservedNodeOfferingList $reserved_node_offerings;
}

class ReservedNodeQuotaExceededFault {
}

class ReservedNodesMessage {
  public string $marker;
  public ReservedNodeList $reserved_nodes;
}

class ResetClusterParameterGroupMessage {
  public string $parameter_group_name;
  public ParametersList $parameters;
  public boolean $reset_all_parameters;
}

class ResizeClusterMessage {
  public BooleanOptional $classic;
  public string $cluster_identifier;
  public string $cluster_type;
  public string $node_type;
  public int $number_of_nodes;
}

class ResizeClusterResult {
  public Cluster $cluster;
}

class ResizeInfo {
  public boolean $allow_cancel_resize;
  public string $resize_type;
}

class ResizeNotFoundFault {
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
}

class ResourceNotFoundFault {
}

class RestorableNodeTypeList {
}

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
}

class RestoreFromClusterSnapshotResult {
  public Cluster $cluster;
}

class RestoreStatus {
  public Double $current_restore_rate_in_mega_bytes_per_second;
  public Long $elapsed_time_in_seconds;
  public Long $estimated_time_to_completion_in_seconds;
  public Long $progress_in_mega_bytes;
  public Long $snapshot_size_in_mega_bytes;
  public string $status;
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
}

class RestoreTableFromClusterSnapshotResult {
  public TableRestoreStatus $table_restore_status;
}

class ResumeClusterMessage {
  public string $cluster_identifier;
}

class ResumeClusterResult {
  public Cluster $cluster;
}

class RevisionTarget {
  public string $database_revision;
  public TStamp $database_revision_release_date;
  public string $description;
}

class RevisionTargetsList {
}

class RevokeClusterSecurityGroupIngressMessage {
  public string $cidrip;
  public string $cluster_security_group_name;
  public string $ec_2_security_group_name;
  public string $ec_2_security_group_owner_id;
}

class RevokeClusterSecurityGroupIngressResult {
  public ClusterSecurityGroup $cluster_security_group;
}

class RevokeSnapshotAccessMessage {
  public string $account_with_restore_access;
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;
}

class RevokeSnapshotAccessResult {
  public Snapshot $snapshot;
}

class RotateEncryptionKeyMessage {
  public string $cluster_identifier;
}

class RotateEncryptionKeyResult {
  public Cluster $cluster;
}

class SNSInvalidTopicFault {
}

class SNSNoAuthorizationFault {
}

class SNSTopicArnNotFoundFault {
}

class ScheduleDefinitionList {
}

class ScheduleDefinitionTypeUnsupportedFault {
}

class ScheduleState {
}

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
}

class ScheduledActionAlreadyExistsFault {
}

class ScheduledActionFilter {
  public ScheduledActionFilterName $name;
  public ValueStringList $values;
}

class ScheduledActionFilterList {
}

class ScheduledActionFilterName {
}

class ScheduledActionList {
}

class ScheduledActionNotFoundFault {
}

class ScheduledActionQuotaExceededFault {
}

class ScheduledActionState {
}

class ScheduledActionTimeList {
}

class ScheduledActionType {
  public PauseClusterMessage $pause_cluster;
  public ResizeClusterMessage $resize_cluster;
  public ResumeClusterMessage $resume_cluster;
}

class ScheduledActionTypeUnsupportedFault {
}

class ScheduledActionTypeValues {
}

class ScheduledActionsMessage {
  public string $marker;
  public ScheduledActionList $scheduled_actions;
}

class ScheduledSnapshotTimeList {
}

class SensitiveString {
}

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
}

class SnapshotAttributeToSortBy {
}

class SnapshotCopyAlreadyDisabledFault {
}

class SnapshotCopyAlreadyEnabledFault {
}

class SnapshotCopyDisabledFault {
}

class SnapshotCopyGrant {
  public string $kms_key_id;
  public string $snapshot_copy_grant_name;
  public TagList $tags;
}

class SnapshotCopyGrantAlreadyExistsFault {
}

class SnapshotCopyGrantList {
}

class SnapshotCopyGrantMessage {
  public string $marker;
  public SnapshotCopyGrantList $snapshot_copy_grants;
}

class SnapshotCopyGrantNotFoundFault {
}

class SnapshotCopyGrantQuotaExceededFault {
}

class SnapshotErrorMessage {
  public string $failure_code;
  public string $failure_reason;
  public string $snapshot_cluster_identifier;
  public string $snapshot_identifier;
}

class SnapshotIdentifierList {
}

class SnapshotList {
}

class SnapshotMessage {
  public string $marker;
  public SnapshotList $snapshots;
}

class SnapshotSchedule {
  public IntegerOptional $associated_cluster_count;
  public AssociatedClusterList $associated_clusters;
  public ScheduledSnapshotTimeList $next_invocations;
  public ScheduleDefinitionList $schedule_definitions;
  public string $schedule_description;
  public string $schedule_identifier;
  public TagList $tags;
}

class SnapshotScheduleAlreadyExistsFault {
}

class SnapshotScheduleList {
}

class SnapshotScheduleNotFoundFault {
}

class SnapshotScheduleQuotaExceededFault {
}

class SnapshotScheduleUpdateInProgressFault {
}

class SnapshotSortingEntity {
  public SnapshotAttributeToSortBy $attribute;
  public SortByOrder $sort_order;
}

class SnapshotSortingEntityList {
}

class SortByOrder {
}

class SourceIdsList {
}

class SourceNotFoundFault {
}

class SourceType {
}

class String {
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

class SubscriptionEventIdNotFoundFault {
}

class SubscriptionNotFoundFault {
}

class SubscriptionSeverityNotFoundFault {
}

class SupportedOperation {
  public string $operation_name;
}

class SupportedOperationList {
}

class SupportedPlatform {
  public string $name;
}

class SupportedPlatformsList {
}

class TStamp {
}

class TableLimitExceededFault {
}

class TableRestoreNotFoundFault {
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
}

class TableRestoreStatusList {
}

class TableRestoreStatusMessage {
  public string $marker;
  public TableRestoreStatusList $table_restore_status_details;
}

class TableRestoreStatusType {
}

class Tag {
  public string $key;
  public string $value;
}

class TagKeyList {
}

class TagLimitExceededFault {
}

class TagList {
}

class TagValueList {
}

class TaggedResource {
  public string $resource_name;
  public string $resource_type;
  public Tag $tag;
}

class TaggedResourceList {
}

class TaggedResourceListMessage {
  public string $marker;
  public TaggedResourceList $tagged_resources;
}

class TrackList {
}

class TrackListMessage {
  public TrackList $maintenance_tracks;
  public string $marker;
}

class UnauthorizedOperation {
}

class UnknownSnapshotCopyRegionFault {
}

class UnsupportedOperationFault {
}

class UnsupportedOptionFault {
}

class UpdateTarget {
  public string $database_version;
  public string $maintenance_track_name;
  public SupportedOperationList $supported_operations;
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
}

class UsageLimitAlreadyExistsFault {
}

class UsageLimitBreachAction {
}

class UsageLimitFeatureType {
}

class UsageLimitLimitType {
}

class UsageLimitList {
  public string $marker;
  public UsageLimits $usage_limits;
}

class UsageLimitNotFoundFault {
}

class UsageLimitPeriod {
}

class UsageLimits {
}

class ValueStringList {
}

class VpcSecurityGroupIdList {
}

class VpcSecurityGroupMembership {
  public string $status;
  public string $vpc_security_group_id;
}

class VpcSecurityGroupMembershipList {
}

