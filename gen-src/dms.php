<?hh // strict
namespace slack\aws\dms;

interface Database Migration Service {
  public function CreateReplicationTask(CreateReplicationTaskMessage) Awaitable<Errors\Result<CreateReplicationTaskResponse>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesMessage) Awaitable<Errors\Result<DescribeAccountAttributesResponse>>;
  public function StopReplicationTask(StopReplicationTaskMessage) Awaitable<Errors\Result<StopReplicationTaskResponse>>;
  public function TestConnection(TestConnectionMessage) Awaitable<Errors\Result<TestConnectionResponse>>;
  public function DescribeReplicationTaskAssessmentResults(DescribeReplicationTaskAssessmentResultsMessage) Awaitable<Errors\Result<DescribeReplicationTaskAssessmentResultsResponse>>;
  public function ImportCertificate(ImportCertificateMessage) Awaitable<Errors\Result<ImportCertificateResponse>>;
  public function ModifyEndpoint(ModifyEndpointMessage) Awaitable<Errors\Result<ModifyEndpointResponse>>;
  public function CreateEndpoint(CreateEndpointMessage) Awaitable<Errors\Result<CreateEndpointResponse>>;
  public function DeleteConnection(DeleteConnectionMessage) Awaitable<Errors\Result<DeleteConnectionResponse>>;
  public function DescribeConnections(DescribeConnectionsMessage) Awaitable<Errors\Result<DescribeConnectionsResponse>>;
  public function DescribeReplicationInstances(DescribeReplicationInstancesMessage) Awaitable<Errors\Result<DescribeReplicationInstancesResponse>>;
  public function DescribeReplicationSubnetGroups(DescribeReplicationSubnetGroupsMessage) Awaitable<Errors\Result<DescribeReplicationSubnetGroupsResponse>>;
  public function ModifyReplicationTask(ModifyReplicationTaskMessage) Awaitable<Errors\Result<ModifyReplicationTaskResponse>>;
  public function ReloadTables(ReloadTablesMessage) Awaitable<Errors\Result<ReloadTablesResponse>>;
  public function StartReplicationTask(StartReplicationTaskMessage) Awaitable<Errors\Result<StartReplicationTaskResponse>>;
  public function AddTagsToResource(AddTagsToResourceMessage) Awaitable<Errors\Result<AddTagsToResourceResponse>>;
  public function DeleteEventSubscription(DeleteEventSubscriptionMessage) Awaitable<Errors\Result<DeleteEventSubscriptionResponse>>;
  public function RefreshSchemas(RefreshSchemasMessage) Awaitable<Errors\Result<RefreshSchemasResponse>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceMessage) Awaitable<Errors\Result<RemoveTagsFromResourceResponse>>;
  public function DescribeEndpoints(DescribeEndpointsMessage) Awaitable<Errors\Result<DescribeEndpointsResponse>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage) Awaitable<Errors\Result<DescribeEventCategoriesResponse>>;
  public function ModifyReplicationInstance(ModifyReplicationInstanceMessage) Awaitable<Errors\Result<ModifyReplicationInstanceResponse>>;
  public function ModifyReplicationSubnetGroup(ModifyReplicationSubnetGroupMessage) Awaitable<Errors\Result<ModifyReplicationSubnetGroupResponse>>;
  public function StartReplicationTaskAssessment(StartReplicationTaskAssessmentMessage) Awaitable<Errors\Result<StartReplicationTaskAssessmentResponse>>;
  public function CreateReplicationInstance(CreateReplicationInstanceMessage) Awaitable<Errors\Result<CreateReplicationInstanceResponse>>;
  public function DeleteReplicationInstance(DeleteReplicationInstanceMessage) Awaitable<Errors\Result<DeleteReplicationInstanceResponse>>;
  public function DescribeEvents(DescribeEventsMessage) Awaitable<Errors\Result<DescribeEventsResponse>>;
  public function DescribeTableStatistics(DescribeTableStatisticsMessage) Awaitable<Errors\Result<DescribeTableStatisticsResponse>>;
  public function ModifyEventSubscription(ModifyEventSubscriptionMessage) Awaitable<Errors\Result<ModifyEventSubscriptionResponse>>;
  public function CreateEventSubscription(CreateEventSubscriptionMessage) Awaitable<Errors\Result<CreateEventSubscriptionResponse>>;
  public function CreateReplicationSubnetGroup(CreateReplicationSubnetGroupMessage) Awaitable<Errors\Result<CreateReplicationSubnetGroupResponse>>;
  public function DeleteReplicationTask(DeleteReplicationTaskMessage) Awaitable<Errors\Result<DeleteReplicationTaskResponse>>;
  public function DescribeRefreshSchemasStatus(DescribeRefreshSchemasStatusMessage) Awaitable<Errors\Result<DescribeRefreshSchemasStatusResponse>>;
  public function DescribePendingMaintenanceActions(DescribePendingMaintenanceActionsMessage) Awaitable<Errors\Result<DescribePendingMaintenanceActionsResponse>>;
  public function DescribeSchemas(DescribeSchemasMessage) Awaitable<Errors\Result<DescribeSchemasResponse>>;
  public function ListTagsForResource(ListTagsForResourceMessage) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ApplyPendingMaintenanceAction(ApplyPendingMaintenanceActionMessage) Awaitable<Errors\Result<ApplyPendingMaintenanceActionResponse>>;
  public function DeleteCertificate(DeleteCertificateMessage) Awaitable<Errors\Result<DeleteCertificateResponse>>;
  public function DescribeCertificates(DescribeCertificatesMessage) Awaitable<Errors\Result<DescribeCertificatesResponse>>;
  public function DescribeEndpointTypes(DescribeEndpointTypesMessage) Awaitable<Errors\Result<DescribeEndpointTypesResponse>>;
  public function DescribeEventSubscriptions(DescribeEventSubscriptionsMessage) Awaitable<Errors\Result<DescribeEventSubscriptionsResponse>>;
  public function RebootReplicationInstance(RebootReplicationInstanceMessage) Awaitable<Errors\Result<RebootReplicationInstanceResponse>>;
  public function DeleteEndpoint(DeleteEndpointMessage) Awaitable<Errors\Result<DeleteEndpointResponse>>;
  public function DeleteReplicationSubnetGroup(DeleteReplicationSubnetGroupMessage) Awaitable<Errors\Result<DeleteReplicationSubnetGroupResponse>>;
  public function DescribeOrderableReplicationInstances(DescribeOrderableReplicationInstancesMessage) Awaitable<Errors\Result<DescribeOrderableReplicationInstancesResponse>>;
  public function DescribeReplicationInstanceTaskLogs(DescribeReplicationInstanceTaskLogsMessage) Awaitable<Errors\Result<DescribeReplicationInstanceTaskLogsResponse>>;
  public function DescribeReplicationTasks(DescribeReplicationTasksMessage) Awaitable<Errors\Result<DescribeReplicationTasksResponse>>;
}

class SNSInvalidTopicFault {
  public ExceptionMessage $message;
}

class ConnectionList {
}

class TagList {
}

class SourceIdsList {
}

class DescribeEndpointTypesResponse {
  public string $marker;
  public SupportedEndpointTypeList $supported_endpoint_types;
}

class ImportCertificateResponse {
  public Certificate $certificate;
}

class ReplicationPendingModifiedValues {
  public string $engine_version;
  public string $replication_instance_class;
  public IntegerOptional $allocated_storage;
  public BooleanOptional $multi_az;
}

class ModifyEndpointMessage {
  public string $endpoint_identifier;
  public ReplicationEndpointTypeValue $endpoint_type;
  public SecretString $password;
  public string $extra_connection_attributes;
  public DmsSslModeValue $ssl_mode;
  public DmsTransferSettings $dms_transfer_settings;
  public MongoDbSettings $mongo_db_settings;
  public KinesisSettings $kinesis_settings;
  public ElasticsearchSettings $elasticsearch_settings;
  public string $endpoint_arn;
  public string $database_name;
  public string $certificate_arn;
  public S3Settings $s_3_settings;
  public KafkaSettings $kafka_settings;
  public NeptuneSettings $neptune_settings;
  public string $username;
  public string $service_access_role_arn;
  public RedshiftSettings $redshift_settings;
  public string $engine_name;
  public string $server_name;
  public IntegerOptional $port;
  public string $external_table_definition;
  public DynamoDbSettings $dynamo_db_settings;
}

class DescribeConnectionsResponse {
  public string $marker;
  public ConnectionList $connections;
}

class FilterValueList {
}

class ModifyReplicationInstanceResponse {
  public ReplicationInstance $replication_instance;
}

class DeleteCertificateMessage {
  public string $certificate_arn;
}

class ModifyReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class ReplicationInstance {
  public string $replication_instance_private_ip_address;
  public ReplicationInstancePrivateIpAddressList $replication_instance_private_ip_addresses;
  public boolean $publicly_accessible;
  public string $replication_instance_class;
  public string $replication_instance_status;
  public string $engine_version;
  public string $replication_instance_arn;
  public string $secondary_availability_zone;
  public string $replication_instance_identifier;
  public VpcSecurityGroupMembershipList $vpc_security_groups;
  public boolean $multi_az;
  public string $kms_key_id;
  public string $replication_instance_public_ip_address;
  public ReplicationInstancePublicIpAddressList $replication_instance_public_ip_addresses;
  public TStamp $free_until;
  public int $allocated_storage;
  public TStamp $instance_create_time;
  public string $availability_zone;
  public boolean $auto_minor_version_upgrade;
  public string $dns_name_servers;
  public ReplicationSubnetGroup $replication_subnet_group;
  public string $preferred_maintenance_window;
  public ReplicationPendingModifiedValues $pending_modified_values;
}

class SupportedEndpointTypeList {
}

class DeleteReplicationSubnetGroupResponse {
}

class DescribeOrderableReplicationInstancesResponse {
  public OrderableReplicationInstanceList $orderable_replication_instances;
  public string $marker;
}

class DescribeSchemasResponse {
  public string $marker;
  public SchemaList $schemas;
}

class ReplicationSubnetGroup {
  public string $replication_subnet_group_identifier;
  public string $replication_subnet_group_description;
  public string $vpc_id;
  public string $subnet_group_status;
  public SubnetList $subnets;
}

class CreateReplicationSubnetGroupMessage {
  public TagList $tags;
  public string $replication_subnet_group_identifier;
  public string $replication_subnet_group_description;
  public SubnetIdentifierList $subnet_ids;
}

class DescribeCertificatesResponse {
  public string $marker;
  public CertificateList $certificates;
}

class KMSDisabledFault {
  public ExceptionMessage $message;
}

class KMSNotFoundFault {
  public ExceptionMessage $message;
}

class ResourceNotFoundFault {
  public ExceptionMessage $message;
}

class StopReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class AvailabilityZone {
  public string $name;
}

class DeleteEndpointResponse {
  public Endpoint $endpoint;
}

class DeleteReplicationTaskMessage {
  public string $replication_task_arn;
}

class DynamoDbSettings {
  public string $service_access_role_arn;
}

class ReloadTablesResponse {
  public string $replication_task_arn;
}

class ResourceQuotaExceededFault {
  public ExceptionMessage $message;
}

class TestConnectionMessage {
  public string $replication_instance_arn;
  public string $endpoint_arn;
}

class DescribeReplicationTaskAssessmentResultsResponse {
  public string $marker;
  public string $bucket_name;
  public ReplicationTaskAssessmentResultList $replication_task_assessment_results;
}

class ReplicationInstanceList {
}

class DeleteEndpointMessage {
  public string $endpoint_arn;
}

class DmsSslModeValue {
}

class Endpoint {
  public string $endpoint_identifier;
  public string $engine_display_name;
  public string $username;
  public string $status;
  public string $external_table_definition;
  public DynamoDbSettings $dynamo_db_settings;
  public RedshiftSettings $redshift_settings;
  public string $kms_key_id;
  public S3Settings $s_3_settings;
  public DmsTransferSettings $dms_transfer_settings;
  public KinesisSettings $kinesis_settings;
  public KafkaSettings $kafka_settings;
  public NeptuneSettings $neptune_settings;
  public IntegerOptional $port;
  public string $endpoint_arn;
  public string $certificate_arn;
  public string $service_access_role_arn;
  public ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_name;
  public string $server_name;
  public string $database_name;
  public string $extra_connection_attributes;
  public DmsSslModeValue $ssl_mode;
  public string $external_id;
  public MongoDbSettings $mongo_db_settings;
  public ElasticsearchSettings $elasticsearch_settings;
}

class EndpointList {
}

class ReplicationTaskAssessmentResult {
  public string $assessment_status;
  public string $assessment_results_file;
  public string $assessment_results;
  public string $s_3_object_url;
  public string $replication_task_identifier;
  public string $replication_task_arn;
  public TStamp $replication_task_last_assessment_date;
}

class CreateEndpointResponse {
  public Endpoint $endpoint;
}

class ReplicationTaskStats {
  public int $full_load_progress_percent;
  public Long $elapsed_time_millis;
  public int $tables_loading;
  public int $tables_queued;
  public int $tables_errored;
  public TStamp $stop_date;
  public TStamp $full_load_finish_date;
  public int $tables_loaded;
  public TStamp $fresh_start_date;
  public TStamp $start_date;
  public TStamp $full_load_start_date;
}

class ReplicationTaskAssessmentResultList {
}

class RebootReplicationInstanceResponse {
  public ReplicationInstance $replication_instance;
}

class EventCategoryGroupList {
}

class FilterList {
}

class RefreshSchemasStatusTypeValue {
}

class DescribeEventCategoriesMessage {
  public string $source_type;
  public FilterList $filters;
}

class BooleanOptional {
}

class OrderableReplicationInstanceList {
}

class DescribeReplicationTasksResponse {
  public string $marker;
  public ReplicationTaskList $replication_tasks;
}

class EventSubscriptionsList {
}

class ModifyReplicationInstanceMessage {
  public string $replication_instance_arn;
  public boolean $apply_immediately;
  public string $replication_instance_class;
  public string $preferred_maintenance_window;
  public BooleanOptional $multi_az;
  public string $engine_version;
  public IntegerOptional $allocated_storage;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
  public boolean $allow_major_version_upgrade;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $replication_instance_identifier;
}

class DescribeEndpointsResponse {
  public string $marker;
  public EndpointList $endpoints;
}

class Event {
  public string $source_identifier;
  public SourceType $source_type;
  public string $message;
  public EventCategoriesList $event_categories;
  public TStamp $date;
}

class CreateReplicationSubnetGroupResponse {
  public ReplicationSubnetGroup $replication_subnet_group;
}

class DescribeReplicationTaskAssessmentResultsMessage {
  public string $replication_task_arn;
  public IntegerOptional $max_records;
  public string $marker;
}

class CreateReplicationTaskMessage {
  public string $task_data;
  public string $replication_instance_arn;
  public MigrationTypeValue $migration_type;
  public TStamp $cdc_start_time;
  public string $cdc_stop_position;
  public string $replication_task_settings;
  public string $cdc_start_position;
  public TagList $tags;
  public string $replication_task_identifier;
  public string $source_endpoint_arn;
  public string $target_endpoint_arn;
  public string $table_mappings;
}

class DescribeReplicationTasksMessage {
  public BooleanOptional $without_settings;
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
}

class Boolean {
}

class TableListToReload {
}

class ElasticsearchSettings {
  public IntegerOptional $error_retry_duration;
  public string $service_access_role_arn;
  public string $endpoint_uri;
  public IntegerOptional $full_load_error_percentage;
}

class ImportCertificateMessage {
  public TagList $tags;
  public string $certificate_identifier;
  public string $certificate_pem;
  public CertificateWallet $certificate_wallet;
}

class SNSNoAuthorizationFault {
  public ExceptionMessage $message;
}

class TableStatistics {
  public Long $updates;
  public TStamp $full_load_end_time;
  public BooleanOptional $full_load_reloaded;
  public Long $validation_suspended_records;
  public string $validation_state;
  public string $schema_name;
  public Long $inserts;
  public Long $full_load_rows;
  public Long $full_load_condtnl_chk_failed_rows;
  public TStamp $full_load_start_time;
  public TStamp $last_update_time;
  public Long $validation_pending_records;
  public Long $full_load_error_rows;
  public Long $validation_failed_records;
  public string $validation_state_details;
  public string $table_name;
  public Long $deletes;
  public Long $ddls;
  public string $table_state;
}

class VpcSecurityGroupIdList {
}

class CertificateWallet {
}

class DeleteEventSubscriptionMessage {
  public string $subscription_name;
}

class DescribeReplicationSubnetGroupsMessage {
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
}

class KMSInvalidStateFault {
  public ExceptionMessage $message;
}

class AccessDeniedFault {
  public ExceptionMessage $message;
}

class Subnet {
  public string $subnet_identifier;
  public AvailabilityZone $subnet_availability_zone;
  public string $subnet_status;
}

class MigrationTypeValue {
}

class ModifyReplicationTaskMessage {
  public MigrationTypeValue $migration_type;
  public string $table_mappings;
  public string $replication_task_settings;
  public string $cdc_start_position;
  public string $cdc_stop_position;
  public string $replication_task_identifier;
  public TStamp $cdc_start_time;
  public string $task_data;
  public string $replication_task_arn;
}

class Tag {
  public string $key;
  public string $value;
}

class Integer {
}

class IntegerOptional {
}

class ReloadTablesMessage {
  public string $replication_task_arn;
  public TableListToReload $tables_to_reload;
  public ReloadOptionValue $reload_option;
}

class ExceptionMessage {
}

class DescribePendingMaintenanceActionsResponse {
  public PendingMaintenanceActions $pending_maintenance_actions;
  public string $marker;
}

class PendingMaintenanceActions {
}

class SubnetIdentifierList {
}

class ApplyPendingMaintenanceActionResponse {
  public ResourcePendingMaintenanceActions $resource_pending_maintenance_actions;
}

class SubnetList {
}

class ReplicationEndpointTypeValue {
}

class DescribeEventsResponse {
  public string $marker;
  public EventList $events;
}

class DescribeOrderableReplicationInstancesMessage {
  public string $marker;
  public IntegerOptional $max_records;
}

class AuthTypeValue {
}

class DescribeConnectionsMessage {
  public IntegerOptional $max_records;
  public string $marker;
  public FilterList $filters;
}

class EventList {
}

class InvalidResourceStateFault {
  public ExceptionMessage $message;
}

class ModifyEventSubscriptionMessage {
  public BooleanOptional $enabled;
  public string $subscription_name;
  public string $sns_topic_arn;
  public string $source_type;
  public EventCategoriesList $event_categories;
}

class RefreshSchemasMessage {
  public string $endpoint_arn;
  public string $replication_instance_arn;
}

class RemoveTagsFromResourceResponse {
}

class ApplyPendingMaintenanceActionMessage {
  public string $replication_instance_arn;
  public string $apply_action;
  public string $opt_in_type;
}

class RebootReplicationInstanceMessage {
  public string $replication_instance_arn;
  public BooleanOptional $force_failover;
}

class AccountQuota {
  public string $account_quota_name;
  public Long $used;
  public Long $max;
}

class ModifyReplicationSubnetGroupResponse {
  public ReplicationSubnetGroup $replication_subnet_group;
}

class CreateReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class DmsTransferSettings {
  public string $service_access_role_arn;
  public string $bucket_name;
}

class ReplicationInstanceTaskLog {
  public string $replication_task_name;
  public string $replication_task_arn;
  public Long $replication_instance_task_log_size;
}

class DescribeEventCategoriesResponse {
  public EventCategoryGroupList $event_category_group_list;
}

class DescribeTableStatisticsResponse {
  public TableStatisticsList $table_statistics;
  public string $marker;
  public string $replication_task_arn;
}

class KMSAccessDeniedFault {
  public ExceptionMessage $message;
}

class ReloadOptionValue {
}

class ResourcePendingMaintenanceActions {
  public string $resource_identifier;
  public PendingMaintenanceActionDetails $pending_maintenance_action_details;
}

class SecretString {
}

class ReplicationSubnetGroups {
}

class VpcSecurityGroupMembershipList {
}

class DeleteConnectionMessage {
  public string $endpoint_arn;
  public string $replication_instance_arn;
}

class CreateEndpointMessage {
  public S3Settings $s_3_settings;
  public string $engine_name;
  public SecretString $password;
  public string $server_name;
  public string $extra_connection_attributes;
  public TagList $tags;
  public DmsSslModeValue $ssl_mode;
  public string $external_table_definition;
  public DmsTransferSettings $dms_transfer_settings;
  public KafkaSettings $kafka_settings;
  public RedshiftSettings $redshift_settings;
  public string $endpoint_identifier;
  public string $database_name;
  public string $certificate_arn;
  public DynamoDbSettings $dynamo_db_settings;
  public string $username;
  public string $service_access_role_arn;
  public MongoDbSettings $mongo_db_settings;
  public ElasticsearchSettings $elasticsearch_settings;
  public NeptuneSettings $neptune_settings;
  public ReplicationEndpointTypeValue $endpoint_type;
  public IntegerOptional $port;
  public string $kms_key_id;
  public KinesisSettings $kinesis_settings;
}

class DataFormatValue {
}

class AddTagsToResourceResponse {
}

class DescribeReplicationInstanceTaskLogsMessage {
  public string $replication_instance_arn;
  public IntegerOptional $max_records;
  public string $marker;
}

class ReplicationTask {
  public string $status;
  public TStamp $replication_task_start_date;
  public string $target_endpoint_arn;
  public MigrationTypeValue $migration_type;
  public string $replication_task_arn;
  public string $task_data;
  public string $table_mappings;
  public string $replication_task_settings;
  public string $replication_instance_arn;
  public string $last_failure_message;
  public string $stop_reason;
  public TStamp $replication_task_creation_date;
  public string $cdc_start_position;
  public ReplicationTaskStats $replication_task_stats;
  public string $replication_task_identifier;
  public string $source_endpoint_arn;
  public string $cdc_stop_position;
  public string $recovery_checkpoint;
}

class EncodingTypeValue {
}

class KMSKeyNotAccessibleFault {
  public ExceptionMessage $message;
}

class StartReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class Certificate {
  public string $certificate_pem;
  public CertificateWallet $certificate_wallet;
  public string $certificate_arn;
  public TStamp $valid_from_date;
  public string $signing_algorithm;
  public string $certificate_identifier;
  public TStamp $certificate_creation_date;
  public string $certificate_owner;
  public TStamp $valid_to_date;
  public IntegerOptional $key_length;
}

class KafkaSettings {
  public string $broker;
  public string $topic;
}

class PendingMaintenanceAction {
  public TStamp $current_apply_date;
  public string $description;
  public string $action;
  public TStamp $auto_applied_after_date;
  public TStamp $forced_apply_date;
  public string $opt_in_status;
}

class ReplicationInstancePublicIpAddressList {
}

class ResourceArn {
}

class StorageQuotaExceededFault {
  public ExceptionMessage $message;
}

class DescribeEndpointTypesMessage {
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
}

class DeleteReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class DescribeReplicationInstancesMessage {
  public string $marker;
  public FilterList $filters;
  public IntegerOptional $max_records;
}

class ModifyEventSubscriptionResponse {
  public EventSubscription $event_subscription;
}

class AddTagsToResourceMessage {
  public string $resource_arn;
  public TagList $tags;
}

class TableStatisticsList {
}

class ReplicationSubnetGroupDoesNotCoverEnoughAZs {
  public ExceptionMessage $message;
}

class InvalidCertificateFault {
  public ExceptionMessage $message;
}

class RefreshSchemasStatus {
  public string $endpoint_arn;
  public string $replication_instance_arn;
  public RefreshSchemasStatusTypeValue $status;
  public TStamp $last_refresh_date;
  public string $last_failure_message;
}

class ReleaseStatusValues {
}

class DescribeReplicationInstancesResponse {
  public ReplicationInstanceList $replication_instances;
  public string $marker;
}

class DeleteEventSubscriptionResponse {
  public EventSubscription $event_subscription;
}

class RedshiftSettings {
  public IntegerOptional $port;
  public string $server_side_encryption_kms_key_id;
  public BooleanOptional $trim_blanks;
  public string $username;
  public IntegerOptional $write_buffer_size;
  public string $after_connect_script;
  public IntegerOptional $file_transfer_upload_streams;
  public IntegerOptional $load_timeout;
  public IntegerOptional $max_file_size;
  public string $server_name;
  public BooleanOptional $truncate_columns;
  public string $bucket_folder;
  public string $bucket_name;
  public IntegerOptional $connection_timeout;
  public SecretString $password;
  public BooleanOptional $remove_quotes;
  public string $replace_invalid_chars;
  public string $service_access_role_arn;
  public BooleanOptional $accept_any_date;
  public string $database_name;
  public string $date_format;
  public string $time_format;
  public BooleanOptional $empty_as_null;
  public EncryptionModeValue $encryption_mode;
  public string $replace_chars;
}

class OrderableReplicationInstance {
  public AvailabilityZonesList $availability_zones;
  public ReleaseStatusValues $release_status;
  public string $engine_version;
  public string $replication_instance_class;
  public int $min_allocated_storage;
  public int $included_allocated_storage;
  public string $storage_type;
  public int $max_allocated_storage;
  public int $default_allocated_storage;
}

class ReplicationInstancePrivateIpAddressList {
}

class TestConnectionResponse {
  public Connection $connection;
}

class InsufficientResourceCapacityFault {
  public ExceptionMessage $message;
}

class MongoDbSettings {
  public string $auth_source;
  public SecretString $password;
  public string $database_name;
  public AuthTypeValue $auth_type;
  public string $extract_doc_id;
  public string $docs_to_investigate;
  public string $kms_key_id;
  public string $username;
  public string $server_name;
  public IntegerOptional $port;
  public AuthMechanismValue $auth_mechanism;
  public NestingLevelValue $nesting_level;
}

class S3Settings {
  public string $bucket_folder;
  public string $server_side_encryption_kms_key_id;
  public IntegerOptional $row_group_length;
  public string $timestamp_column_name;
  public CompressionTypeValue $compression_type;
  public EncryptionModeValue $encryption_mode;
  public EncodingTypeValue $encoding_type;
  public IntegerOptional $data_page_size;
  public BooleanOptional $cdc_inserts_only;
  public BooleanOptional $cdc_inserts_and_updates;
  public string $external_table_definition;
  public string $bucket_name;
  public DataFormatValue $data_format;
  public ParquetVersionValue $parquet_version;
  public BooleanOptional $enable_statistics;
  public BooleanOptional $include_op_for_full_load;
  public BooleanOptional $parquet_timestamp_in_millisecond;
  public string $service_access_role_arn;
  public string $csv_row_delimiter;
  public string $csv_delimiter;
  public IntegerOptional $dict_page_size_limit;
}

class UpgradeDependencyFailureFault {
  public ExceptionMessage $message;
}

class CreateEventSubscriptionResponse {
  public EventSubscription $event_subscription;
}

class DescribeEndpointsMessage {
  public string $marker;
  public FilterList $filters;
  public IntegerOptional $max_records;
}

class RemoveTagsFromResourceMessage {
  public string $resource_arn;
  public KeyList $tag_keys;
}

class AccountQuotaList {
}

class PendingMaintenanceActionDetails {
}

class DescribeEventSubscriptionsMessage {
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
  public string $subscription_name;
}

class DeleteReplicationInstanceResponse {
  public ReplicationInstance $replication_instance;
}

class DescribeEventsMessage {
  public IntegerOptional $max_records;
  public string $source_identifier;
  public TStamp $start_time;
  public IntegerOptional $duration;
  public FilterList $filters;
  public SourceType $source_type;
  public TStamp $end_time;
  public EventCategoriesList $event_categories;
  public string $marker;
}

class DescribeTableStatisticsMessage {
  public string $marker;
  public FilterList $filters;
  public string $replication_task_arn;
  public IntegerOptional $max_records;
}

class Filter {
  public string $name;
  public FilterValueList $values;
}

class DeleteCertificateResponse {
  public Certificate $certificate;
}

class NestingLevelValue {
}

class DeleteConnectionResponse {
  public Connection $connection;
}

class DescribeCertificatesMessage {
  public FilterList $filters;
  public IntegerOptional $max_records;
  public string $marker;
}

class DescribeEventSubscriptionsResponse {
  public string $marker;
  public EventSubscriptionsList $event_subscriptions_list;
}

class DescribePendingMaintenanceActionsMessage {
  public string $replication_instance_arn;
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class EncryptionModeValue {
}

class Connection {
  public string $last_failure_message;
  public string $endpoint_identifier;
  public string $replication_instance_identifier;
  public string $replication_instance_arn;
  public string $endpoint_arn;
  public string $status;
}

class KMSThrottlingFault {
  public ExceptionMessage $message;
}

class Long {
}

class EventCategoriesList {
}

class ModifyReplicationSubnetGroupMessage {
  public string $replication_subnet_group_identifier;
  public string $replication_subnet_group_description;
  public SubnetIdentifierList $subnet_ids;
}

class ParquetVersionValue {
}

class SubnetAlreadyInUse {
  public ExceptionMessage $message;
}

class CreateEventSubscriptionMessage {
  public string $sns_topic_arn;
  public string $source_type;
  public EventCategoriesList $event_categories;
  public SourceIdsList $source_ids;
  public BooleanOptional $enabled;
  public TagList $tags;
  public string $subscription_name;
}

class DescribeAccountAttributesMessage {
}

class KeyList {
}

class ResourceAlreadyExistsFault {
  public ExceptionMessage $message;
  public ResourceArn $resource_arn;
}

class StartReplicationTaskTypeValue {
}

class CompressionTypeValue {
}

class InvalidSubnet {
  public ExceptionMessage $message;
}

class ListTagsForResourceResponse {
  public TagList $tag_list;
}

class NeptuneSettings {
  public IntegerOptional $max_retry_count;
  public BooleanOptional $iam_auth_enabled;
  public string $service_access_role_arn;
  public string $s_3_bucket_name;
  public string $s_3_bucket_folder;
  public IntegerOptional $error_retry_duration;
  public IntegerOptional $max_file_size;
}

class StartReplicationTaskMessage {
  public string $replication_task_arn;
  public StartReplicationTaskTypeValue $start_replication_task_type;
  public TStamp $cdc_start_time;
  public string $cdc_start_position;
  public string $cdc_stop_position;
}

class String {
}

class DescribeReplicationInstanceTaskLogsResponse {
  public string $marker;
  public string $replication_instance_arn;
  public ReplicationInstanceTaskLogsList $replication_instance_task_logs;
}

class DescribeSchemasMessage {
  public string $marker;
  public string $endpoint_arn;
  public IntegerOptional $max_records;
}

class AvailabilityZonesList {
}

class DescribeAccountAttributesResponse {
  public AccountQuotaList $account_quotas;
  public string $unique_account_identifier;
}

class TableToReload {
  public string $schema_name;
  public string $table_name;
}

class DescribeReplicationSubnetGroupsResponse {
  public string $marker;
  public ReplicationSubnetGroups $replication_subnet_groups;
}

class DescribeRefreshSchemasStatusResponse {
  public RefreshSchemasStatus $refresh_schemas_status;
}

class ReplicationInstanceTaskLogsList {
}

class EventCategoryGroup {
  public string $source_type;
  public EventCategoriesList $event_categories;
}

class KinesisSettings {
  public BooleanOptional $partition_include_schema_table;
  public BooleanOptional $include_table_alter_operations;
  public BooleanOptional $include_control_details;
  public string $stream_arn;
  public MessageFormatValue $message_format;
  public string $service_access_role_arn;
  public BooleanOptional $include_transaction_details;
  public BooleanOptional $include_partition_value;
}

class ListTagsForResourceMessage {
  public string $resource_arn;
}

class RefreshSchemasResponse {
  public RefreshSchemasStatus $refresh_schemas_status;
}

class CreateReplicationInstanceResponse {
  public ReplicationInstance $replication_instance;
}

class MessageFormatValue {
}

class StartReplicationTaskAssessmentResponse {
  public ReplicationTask $replication_task;
}

class TStamp {
}

class CreateReplicationInstanceMessage {
  public string $availability_zone;
  public string $preferred_maintenance_window;
  public BooleanOptional $multi_az;
  public string $replication_instance_identifier;
  public string $replication_instance_class;
  public string $replication_subnet_group_identifier;
  public string $engine_version;
  public BooleanOptional $auto_minor_version_upgrade;
  public TagList $tags;
  public BooleanOptional $publicly_accessible;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
  public string $kms_key_id;
  public string $dns_name_servers;
  public IntegerOptional $allocated_storage;
}

class DeleteReplicationSubnetGroupMessage {
  public string $replication_subnet_group_identifier;
}

class DescribeRefreshSchemasStatusMessage {
  public string $endpoint_arn;
}

class StartReplicationTaskAssessmentMessage {
  public string $replication_task_arn;
}

class AuthMechanismValue {
}

class DeleteReplicationInstanceMessage {
  public string $replication_instance_arn;
}

class EventSubscription {
  public string $sns_topic_arn;
  public string $status;
  public string $subscription_creation_time;
  public EventCategoriesList $event_categories_list;
  public boolean $enabled;
  public string $customer_aws_id;
  public string $cust_subscription_id;
  public string $source_type;
  public SourceIdsList $source_ids_list;
}

class ReplicationTaskList {
}

class SchemaList {
}

class StopReplicationTaskMessage {
  public string $replication_task_arn;
}

class SupportedEndpointType {
  public string $engine_name;
  public boolean $supports_cdc;
  public ReplicationEndpointTypeValue $endpoint_type;
  public string $replication_instance_engine_minimum_version;
  public string $engine_display_name;
}

class CertificateList {
}

class ModifyEndpointResponse {
  public Endpoint $endpoint;
}

class SourceType {
}

class VpcSecurityGroupMembership {
  public string $vpc_security_group_id;
  public string $status;
}

