<?hh // strict
namespace slack\aws\dms;

interface Database Migration Service {
  public function AddTagsToResource(AddTagsToResourceMessage) Awaitable<Errors\Result<AddTagsToResourceResponse>>;
  public function ApplyPendingMaintenanceAction(ApplyPendingMaintenanceActionMessage) Awaitable<Errors\Result<ApplyPendingMaintenanceActionResponse>>;
  public function CreateEndpoint(CreateEndpointMessage) Awaitable<Errors\Result<CreateEndpointResponse>>;
  public function CreateEventSubscription(CreateEventSubscriptionMessage) Awaitable<Errors\Result<CreateEventSubscriptionResponse>>;
  public function CreateReplicationInstance(CreateReplicationInstanceMessage) Awaitable<Errors\Result<CreateReplicationInstanceResponse>>;
  public function CreateReplicationSubnetGroup(CreateReplicationSubnetGroupMessage) Awaitable<Errors\Result<CreateReplicationSubnetGroupResponse>>;
  public function CreateReplicationTask(CreateReplicationTaskMessage) Awaitable<Errors\Result<CreateReplicationTaskResponse>>;
  public function DeleteCertificate(DeleteCertificateMessage) Awaitable<Errors\Result<DeleteCertificateResponse>>;
  public function DeleteConnection(DeleteConnectionMessage) Awaitable<Errors\Result<DeleteConnectionResponse>>;
  public function DeleteEndpoint(DeleteEndpointMessage) Awaitable<Errors\Result<DeleteEndpointResponse>>;
  public function DeleteEventSubscription(DeleteEventSubscriptionMessage) Awaitable<Errors\Result<DeleteEventSubscriptionResponse>>;
  public function DeleteReplicationInstance(DeleteReplicationInstanceMessage) Awaitable<Errors\Result<DeleteReplicationInstanceResponse>>;
  public function DeleteReplicationSubnetGroup(DeleteReplicationSubnetGroupMessage) Awaitable<Errors\Result<DeleteReplicationSubnetGroupResponse>>;
  public function DeleteReplicationTask(DeleteReplicationTaskMessage) Awaitable<Errors\Result<DeleteReplicationTaskResponse>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesMessage) Awaitable<Errors\Result<DescribeAccountAttributesResponse>>;
  public function DescribeCertificates(DescribeCertificatesMessage) Awaitable<Errors\Result<DescribeCertificatesResponse>>;
  public function DescribeConnections(DescribeConnectionsMessage) Awaitable<Errors\Result<DescribeConnectionsResponse>>;
  public function DescribeEndpointTypes(DescribeEndpointTypesMessage) Awaitable<Errors\Result<DescribeEndpointTypesResponse>>;
  public function DescribeEndpoints(DescribeEndpointsMessage) Awaitable<Errors\Result<DescribeEndpointsResponse>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage) Awaitable<Errors\Result<DescribeEventCategoriesResponse>>;
  public function DescribeEventSubscriptions(DescribeEventSubscriptionsMessage) Awaitable<Errors\Result<DescribeEventSubscriptionsResponse>>;
  public function DescribeEvents(DescribeEventsMessage) Awaitable<Errors\Result<DescribeEventsResponse>>;
  public function DescribeOrderableReplicationInstances(DescribeOrderableReplicationInstancesMessage) Awaitable<Errors\Result<DescribeOrderableReplicationInstancesResponse>>;
  public function DescribePendingMaintenanceActions(DescribePendingMaintenanceActionsMessage) Awaitable<Errors\Result<DescribePendingMaintenanceActionsResponse>>;
  public function DescribeRefreshSchemasStatus(DescribeRefreshSchemasStatusMessage) Awaitable<Errors\Result<DescribeRefreshSchemasStatusResponse>>;
  public function DescribeReplicationInstanceTaskLogs(DescribeReplicationInstanceTaskLogsMessage) Awaitable<Errors\Result<DescribeReplicationInstanceTaskLogsResponse>>;
  public function DescribeReplicationInstances(DescribeReplicationInstancesMessage) Awaitable<Errors\Result<DescribeReplicationInstancesResponse>>;
  public function DescribeReplicationSubnetGroups(DescribeReplicationSubnetGroupsMessage) Awaitable<Errors\Result<DescribeReplicationSubnetGroupsResponse>>;
  public function DescribeReplicationTaskAssessmentResults(DescribeReplicationTaskAssessmentResultsMessage) Awaitable<Errors\Result<DescribeReplicationTaskAssessmentResultsResponse>>;
  public function DescribeReplicationTasks(DescribeReplicationTasksMessage) Awaitable<Errors\Result<DescribeReplicationTasksResponse>>;
  public function DescribeSchemas(DescribeSchemasMessage) Awaitable<Errors\Result<DescribeSchemasResponse>>;
  public function DescribeTableStatistics(DescribeTableStatisticsMessage) Awaitable<Errors\Result<DescribeTableStatisticsResponse>>;
  public function ImportCertificate(ImportCertificateMessage) Awaitable<Errors\Result<ImportCertificateResponse>>;
  public function ListTagsForResource(ListTagsForResourceMessage) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyEndpoint(ModifyEndpointMessage) Awaitable<Errors\Result<ModifyEndpointResponse>>;
  public function ModifyEventSubscription(ModifyEventSubscriptionMessage) Awaitable<Errors\Result<ModifyEventSubscriptionResponse>>;
  public function ModifyReplicationInstance(ModifyReplicationInstanceMessage) Awaitable<Errors\Result<ModifyReplicationInstanceResponse>>;
  public function ModifyReplicationSubnetGroup(ModifyReplicationSubnetGroupMessage) Awaitable<Errors\Result<ModifyReplicationSubnetGroupResponse>>;
  public function ModifyReplicationTask(ModifyReplicationTaskMessage) Awaitable<Errors\Result<ModifyReplicationTaskResponse>>;
  public function RebootReplicationInstance(RebootReplicationInstanceMessage) Awaitable<Errors\Result<RebootReplicationInstanceResponse>>;
  public function RefreshSchemas(RefreshSchemasMessage) Awaitable<Errors\Result<RefreshSchemasResponse>>;
  public function ReloadTables(ReloadTablesMessage) Awaitable<Errors\Result<ReloadTablesResponse>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceMessage) Awaitable<Errors\Result<RemoveTagsFromResourceResponse>>;
  public function StartReplicationTask(StartReplicationTaskMessage) Awaitable<Errors\Result<StartReplicationTaskResponse>>;
  public function StartReplicationTaskAssessment(StartReplicationTaskAssessmentMessage) Awaitable<Errors\Result<StartReplicationTaskAssessmentResponse>>;
  public function StopReplicationTask(StopReplicationTaskMessage) Awaitable<Errors\Result<StopReplicationTaskResponse>>;
  public function TestConnection(TestConnectionMessage) Awaitable<Errors\Result<TestConnectionResponse>>;
}

class AccessDeniedFault {
  public ExceptionMessage $message;
}

class AccountQuota {
  public string $account_quota_name;
  public Long $max;
  public Long $used;
}

class AccountQuotaList {
}

class AddTagsToResourceMessage {
  public string $resource_arn;
  public TagList $tags;
}

class AddTagsToResourceResponse {
}

class ApplyPendingMaintenanceActionMessage {
  public string $apply_action;
  public string $opt_in_type;
  public string $replication_instance_arn;
}

class ApplyPendingMaintenanceActionResponse {
  public ResourcePendingMaintenanceActions $resource_pending_maintenance_actions;
}

class AuthMechanismValue {
}

class AuthTypeValue {
}

class AvailabilityZone {
  public string $name;
}

class AvailabilityZonesList {
}

class Boolean {
}

class BooleanOptional {
}

class Certificate {
  public string $certificate_arn;
  public TStamp $certificate_creation_date;
  public string $certificate_identifier;
  public string $certificate_owner;
  public string $certificate_pem;
  public CertificateWallet $certificate_wallet;
  public IntegerOptional $key_length;
  public string $signing_algorithm;
  public TStamp $valid_from_date;
  public TStamp $valid_to_date;
}

class CertificateList {
}

class CertificateWallet {
}

class CompressionTypeValue {
}

class Connection {
  public string $endpoint_arn;
  public string $endpoint_identifier;
  public string $last_failure_message;
  public string $replication_instance_arn;
  public string $replication_instance_identifier;
  public string $status;
}

class ConnectionList {
}

class CreateEndpointMessage {
  public string $certificate_arn;
  public string $database_name;
  public DmsTransferSettings $dms_transfer_settings;
  public DynamoDbSettings $dynamo_db_settings;
  public ElasticsearchSettings $elasticsearch_settings;
  public string $endpoint_identifier;
  public ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_name;
  public string $external_table_definition;
  public string $extra_connection_attributes;
  public KafkaSettings $kafka_settings;
  public KinesisSettings $kinesis_settings;
  public string $kms_key_id;
  public MongoDbSettings $mongo_db_settings;
  public NeptuneSettings $neptune_settings;
  public SecretString $password;
  public IntegerOptional $port;
  public RedshiftSettings $redshift_settings;
  public S3Settings $s_3_settings;
  public string $server_name;
  public string $service_access_role_arn;
  public DmsSslModeValue $ssl_mode;
  public TagList $tags;
  public string $username;
}

class CreateEndpointResponse {
  public Endpoint $endpoint;
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

class CreateEventSubscriptionResponse {
  public EventSubscription $event_subscription;
}

class CreateReplicationInstanceMessage {
  public IntegerOptional $allocated_storage;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public string $dns_name_servers;
  public string $engine_version;
  public string $kms_key_id;
  public BooleanOptional $multi_az;
  public string $preferred_maintenance_window;
  public BooleanOptional $publicly_accessible;
  public string $replication_instance_class;
  public string $replication_instance_identifier;
  public string $replication_subnet_group_identifier;
  public TagList $tags;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class CreateReplicationInstanceResponse {
  public ReplicationInstance $replication_instance;
}

class CreateReplicationSubnetGroupMessage {
  public string $replication_subnet_group_description;
  public string $replication_subnet_group_identifier;
  public SubnetIdentifierList $subnet_ids;
  public TagList $tags;
}

class CreateReplicationSubnetGroupResponse {
  public ReplicationSubnetGroup $replication_subnet_group;
}

class CreateReplicationTaskMessage {
  public string $cdc_start_position;
  public TStamp $cdc_start_time;
  public string $cdc_stop_position;
  public MigrationTypeValue $migration_type;
  public string $replication_instance_arn;
  public string $replication_task_identifier;
  public string $replication_task_settings;
  public string $source_endpoint_arn;
  public string $table_mappings;
  public TagList $tags;
  public string $target_endpoint_arn;
  public string $task_data;
}

class CreateReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class DataFormatValue {
}

class DeleteCertificateMessage {
  public string $certificate_arn;
}

class DeleteCertificateResponse {
  public Certificate $certificate;
}

class DeleteConnectionMessage {
  public string $endpoint_arn;
  public string $replication_instance_arn;
}

class DeleteConnectionResponse {
  public Connection $connection;
}

class DeleteEndpointMessage {
  public string $endpoint_arn;
}

class DeleteEndpointResponse {
  public Endpoint $endpoint;
}

class DeleteEventSubscriptionMessage {
  public string $subscription_name;
}

class DeleteEventSubscriptionResponse {
  public EventSubscription $event_subscription;
}

class DeleteReplicationInstanceMessage {
  public string $replication_instance_arn;
}

class DeleteReplicationInstanceResponse {
  public ReplicationInstance $replication_instance;
}

class DeleteReplicationSubnetGroupMessage {
  public string $replication_subnet_group_identifier;
}

class DeleteReplicationSubnetGroupResponse {
}

class DeleteReplicationTaskMessage {
  public string $replication_task_arn;
}

class DeleteReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class DescribeAccountAttributesMessage {
}

class DescribeAccountAttributesResponse {
  public AccountQuotaList $account_quotas;
  public string $unique_account_identifier;
}

class DescribeCertificatesMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeCertificatesResponse {
  public CertificateList $certificates;
  public string $marker;
}

class DescribeConnectionsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeConnectionsResponse {
  public ConnectionList $connections;
  public string $marker;
}

class DescribeEndpointTypesMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeEndpointTypesResponse {
  public string $marker;
  public SupportedEndpointTypeList $supported_endpoint_types;
}

class DescribeEndpointsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeEndpointsResponse {
  public EndpointList $endpoints;
  public string $marker;
}

class DescribeEventCategoriesMessage {
  public FilterList $filters;
  public string $source_type;
}

class DescribeEventCategoriesResponse {
  public EventCategoryGroupList $event_category_group_list;
}

class DescribeEventSubscriptionsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $subscription_name;
}

class DescribeEventSubscriptionsResponse {
  public EventSubscriptionsList $event_subscriptions_list;
  public string $marker;
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

class DescribeEventsResponse {
  public EventList $events;
  public string $marker;
}

class DescribeOrderableReplicationInstancesMessage {
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeOrderableReplicationInstancesResponse {
  public string $marker;
  public OrderableReplicationInstanceList $orderable_replication_instances;
}

class DescribePendingMaintenanceActionsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $replication_instance_arn;
}

class DescribePendingMaintenanceActionsResponse {
  public string $marker;
  public PendingMaintenanceActions $pending_maintenance_actions;
}

class DescribeRefreshSchemasStatusMessage {
  public string $endpoint_arn;
}

class DescribeRefreshSchemasStatusResponse {
  public RefreshSchemasStatus $refresh_schemas_status;
}

class DescribeReplicationInstanceTaskLogsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $replication_instance_arn;
}

class DescribeReplicationInstanceTaskLogsResponse {
  public string $marker;
  public string $replication_instance_arn;
  public ReplicationInstanceTaskLogsList $replication_instance_task_logs;
}

class DescribeReplicationInstancesMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeReplicationInstancesResponse {
  public string $marker;
  public ReplicationInstanceList $replication_instances;
}

class DescribeReplicationSubnetGroupsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeReplicationSubnetGroupsResponse {
  public string $marker;
  public ReplicationSubnetGroups $replication_subnet_groups;
}

class DescribeReplicationTaskAssessmentResultsMessage {
  public string $marker;
  public IntegerOptional $max_records;
  public string $replication_task_arn;
}

class DescribeReplicationTaskAssessmentResultsResponse {
  public string $bucket_name;
  public string $marker;
  public ReplicationTaskAssessmentResultList $replication_task_assessment_results;
}

class DescribeReplicationTasksMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public BooleanOptional $without_settings;
}

class DescribeReplicationTasksResponse {
  public string $marker;
  public ReplicationTaskList $replication_tasks;
}

class DescribeSchemasMessage {
  public string $endpoint_arn;
  public string $marker;
  public IntegerOptional $max_records;
}

class DescribeSchemasResponse {
  public string $marker;
  public SchemaList $schemas;
}

class DescribeTableStatisticsMessage {
  public FilterList $filters;
  public string $marker;
  public IntegerOptional $max_records;
  public string $replication_task_arn;
}

class DescribeTableStatisticsResponse {
  public string $marker;
  public string $replication_task_arn;
  public TableStatisticsList $table_statistics;
}

class DmsSslModeValue {
}

class DmsTransferSettings {
  public string $bucket_name;
  public string $service_access_role_arn;
}

class DynamoDbSettings {
  public string $service_access_role_arn;
}

class ElasticsearchSettings {
  public string $endpoint_uri;
  public IntegerOptional $error_retry_duration;
  public IntegerOptional $full_load_error_percentage;
  public string $service_access_role_arn;
}

class EncodingTypeValue {
}

class EncryptionModeValue {
}

class Endpoint {
  public string $certificate_arn;
  public string $database_name;
  public DmsTransferSettings $dms_transfer_settings;
  public DynamoDbSettings $dynamo_db_settings;
  public ElasticsearchSettings $elasticsearch_settings;
  public string $endpoint_arn;
  public string $endpoint_identifier;
  public ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_display_name;
  public string $engine_name;
  public string $external_id;
  public string $external_table_definition;
  public string $extra_connection_attributes;
  public KafkaSettings $kafka_settings;
  public KinesisSettings $kinesis_settings;
  public string $kms_key_id;
  public MongoDbSettings $mongo_db_settings;
  public NeptuneSettings $neptune_settings;
  public IntegerOptional $port;
  public RedshiftSettings $redshift_settings;
  public S3Settings $s_3_settings;
  public string $server_name;
  public string $service_access_role_arn;
  public DmsSslModeValue $ssl_mode;
  public string $status;
  public string $username;
}

class EndpointList {
}

class Event {
  public TStamp $date;
  public EventCategoriesList $event_categories;
  public string $message;
  public string $source_identifier;
  public SourceType $source_type;
}

class EventCategoriesList {
}

class EventCategoryGroup {
  public EventCategoriesList $event_categories;
  public string $source_type;
}

class EventCategoryGroupList {
}

class EventList {
}

class EventSubscription {
  public string $cust_subscription_id;
  public string $customer_aws_id;
  public boolean $enabled;
  public EventCategoriesList $event_categories_list;
  public string $sns_topic_arn;
  public SourceIdsList $source_ids_list;
  public string $source_type;
  public string $status;
  public string $subscription_creation_time;
}

class EventSubscriptionsList {
}

class ExceptionMessage {
}

class Filter {
  public string $name;
  public FilterValueList $values;
}

class FilterList {
}

class FilterValueList {
}

class ImportCertificateMessage {
  public string $certificate_identifier;
  public string $certificate_pem;
  public CertificateWallet $certificate_wallet;
  public TagList $tags;
}

class ImportCertificateResponse {
  public Certificate $certificate;
}

class InsufficientResourceCapacityFault {
  public ExceptionMessage $message;
}

class Integer {
}

class IntegerOptional {
}

class InvalidCertificateFault {
  public ExceptionMessage $message;
}

class InvalidResourceStateFault {
  public ExceptionMessage $message;
}

class InvalidSubnet {
  public ExceptionMessage $message;
}

class KMSAccessDeniedFault {
  public ExceptionMessage $message;
}

class KMSDisabledFault {
  public ExceptionMessage $message;
}

class KMSInvalidStateFault {
  public ExceptionMessage $message;
}

class KMSKeyNotAccessibleFault {
  public ExceptionMessage $message;
}

class KMSNotFoundFault {
  public ExceptionMessage $message;
}

class KMSThrottlingFault {
  public ExceptionMessage $message;
}

class KafkaSettings {
  public string $broker;
  public string $topic;
}

class KeyList {
}

class KinesisSettings {
  public BooleanOptional $include_control_details;
  public BooleanOptional $include_partition_value;
  public BooleanOptional $include_table_alter_operations;
  public BooleanOptional $include_transaction_details;
  public MessageFormatValue $message_format;
  public BooleanOptional $partition_include_schema_table;
  public string $service_access_role_arn;
  public string $stream_arn;
}

class ListTagsForResourceMessage {
  public string $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tag_list;
}

class Long {
}

class MessageFormatValue {
}

class MigrationTypeValue {
}

class ModifyEndpointMessage {
  public string $certificate_arn;
  public string $database_name;
  public DmsTransferSettings $dms_transfer_settings;
  public DynamoDbSettings $dynamo_db_settings;
  public ElasticsearchSettings $elasticsearch_settings;
  public string $endpoint_arn;
  public string $endpoint_identifier;
  public ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_name;
  public string $external_table_definition;
  public string $extra_connection_attributes;
  public KafkaSettings $kafka_settings;
  public KinesisSettings $kinesis_settings;
  public MongoDbSettings $mongo_db_settings;
  public NeptuneSettings $neptune_settings;
  public SecretString $password;
  public IntegerOptional $port;
  public RedshiftSettings $redshift_settings;
  public S3Settings $s_3_settings;
  public string $server_name;
  public string $service_access_role_arn;
  public DmsSslModeValue $ssl_mode;
  public string $username;
}

class ModifyEndpointResponse {
  public Endpoint $endpoint;
}

class ModifyEventSubscriptionMessage {
  public BooleanOptional $enabled;
  public EventCategoriesList $event_categories;
  public string $sns_topic_arn;
  public string $source_type;
  public string $subscription_name;
}

class ModifyEventSubscriptionResponse {
  public EventSubscription $event_subscription;
}

class ModifyReplicationInstanceMessage {
  public IntegerOptional $allocated_storage;
  public boolean $allow_major_version_upgrade;
  public boolean $apply_immediately;
  public BooleanOptional $auto_minor_version_upgrade;
  public string $engine_version;
  public BooleanOptional $multi_az;
  public string $preferred_maintenance_window;
  public string $replication_instance_arn;
  public string $replication_instance_class;
  public string $replication_instance_identifier;
  public VpcSecurityGroupIdList $vpc_security_group_ids;
}

class ModifyReplicationInstanceResponse {
  public ReplicationInstance $replication_instance;
}

class ModifyReplicationSubnetGroupMessage {
  public string $replication_subnet_group_description;
  public string $replication_subnet_group_identifier;
  public SubnetIdentifierList $subnet_ids;
}

class ModifyReplicationSubnetGroupResponse {
  public ReplicationSubnetGroup $replication_subnet_group;
}

class ModifyReplicationTaskMessage {
  public string $cdc_start_position;
  public TStamp $cdc_start_time;
  public string $cdc_stop_position;
  public MigrationTypeValue $migration_type;
  public string $replication_task_arn;
  public string $replication_task_identifier;
  public string $replication_task_settings;
  public string $table_mappings;
  public string $task_data;
}

class ModifyReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class MongoDbSettings {
  public AuthMechanismValue $auth_mechanism;
  public string $auth_source;
  public AuthTypeValue $auth_type;
  public string $database_name;
  public string $docs_to_investigate;
  public string $extract_doc_id;
  public string $kms_key_id;
  public NestingLevelValue $nesting_level;
  public SecretString $password;
  public IntegerOptional $port;
  public string $server_name;
  public string $username;
}

class NeptuneSettings {
  public IntegerOptional $error_retry_duration;
  public BooleanOptional $iam_auth_enabled;
  public IntegerOptional $max_file_size;
  public IntegerOptional $max_retry_count;
  public string $s_3_bucket_folder;
  public string $s_3_bucket_name;
  public string $service_access_role_arn;
}

class NestingLevelValue {
}

class OrderableReplicationInstance {
  public AvailabilityZonesList $availability_zones;
  public int $default_allocated_storage;
  public string $engine_version;
  public int $included_allocated_storage;
  public int $max_allocated_storage;
  public int $min_allocated_storage;
  public ReleaseStatusValues $release_status;
  public string $replication_instance_class;
  public string $storage_type;
}

class OrderableReplicationInstanceList {
}

class ParquetVersionValue {
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

class RebootReplicationInstanceMessage {
  public BooleanOptional $force_failover;
  public string $replication_instance_arn;
}

class RebootReplicationInstanceResponse {
  public ReplicationInstance $replication_instance;
}

class RedshiftSettings {
  public BooleanOptional $accept_any_date;
  public string $after_connect_script;
  public string $bucket_folder;
  public string $bucket_name;
  public IntegerOptional $connection_timeout;
  public string $database_name;
  public string $date_format;
  public BooleanOptional $empty_as_null;
  public EncryptionModeValue $encryption_mode;
  public IntegerOptional $file_transfer_upload_streams;
  public IntegerOptional $load_timeout;
  public IntegerOptional $max_file_size;
  public SecretString $password;
  public IntegerOptional $port;
  public BooleanOptional $remove_quotes;
  public string $replace_chars;
  public string $replace_invalid_chars;
  public string $server_name;
  public string $server_side_encryption_kms_key_id;
  public string $service_access_role_arn;
  public string $time_format;
  public BooleanOptional $trim_blanks;
  public BooleanOptional $truncate_columns;
  public string $username;
  public IntegerOptional $write_buffer_size;
}

class RefreshSchemasMessage {
  public string $endpoint_arn;
  public string $replication_instance_arn;
}

class RefreshSchemasResponse {
  public RefreshSchemasStatus $refresh_schemas_status;
}

class RefreshSchemasStatus {
  public string $endpoint_arn;
  public string $last_failure_message;
  public TStamp $last_refresh_date;
  public string $replication_instance_arn;
  public RefreshSchemasStatusTypeValue $status;
}

class RefreshSchemasStatusTypeValue {
}

class ReleaseStatusValues {
}

class ReloadOptionValue {
}

class ReloadTablesMessage {
  public ReloadOptionValue $reload_option;
  public string $replication_task_arn;
  public TableListToReload $tables_to_reload;
}

class ReloadTablesResponse {
  public string $replication_task_arn;
}

class RemoveTagsFromResourceMessage {
  public string $resource_arn;
  public KeyList $tag_keys;
}

class RemoveTagsFromResourceResponse {
}

class ReplicationEndpointTypeValue {
}

class ReplicationInstance {
  public int $allocated_storage;
  public boolean $auto_minor_version_upgrade;
  public string $availability_zone;
  public string $dns_name_servers;
  public string $engine_version;
  public TStamp $free_until;
  public TStamp $instance_create_time;
  public string $kms_key_id;
  public boolean $multi_az;
  public ReplicationPendingModifiedValues $pending_modified_values;
  public string $preferred_maintenance_window;
  public boolean $publicly_accessible;
  public string $replication_instance_arn;
  public string $replication_instance_class;
  public string $replication_instance_identifier;
  public string $replication_instance_private_ip_address;
  public ReplicationInstancePrivateIpAddressList $replication_instance_private_ip_addresses;
  public string $replication_instance_public_ip_address;
  public ReplicationInstancePublicIpAddressList $replication_instance_public_ip_addresses;
  public string $replication_instance_status;
  public ReplicationSubnetGroup $replication_subnet_group;
  public string $secondary_availability_zone;
  public VpcSecurityGroupMembershipList $vpc_security_groups;
}

class ReplicationInstanceList {
}

class ReplicationInstancePrivateIpAddressList {
}

class ReplicationInstancePublicIpAddressList {
}

class ReplicationInstanceTaskLog {
  public Long $replication_instance_task_log_size;
  public string $replication_task_arn;
  public string $replication_task_name;
}

class ReplicationInstanceTaskLogsList {
}

class ReplicationPendingModifiedValues {
  public IntegerOptional $allocated_storage;
  public string $engine_version;
  public BooleanOptional $multi_az;
  public string $replication_instance_class;
}

class ReplicationSubnetGroup {
  public string $replication_subnet_group_description;
  public string $replication_subnet_group_identifier;
  public string $subnet_group_status;
  public SubnetList $subnets;
  public string $vpc_id;
}

class ReplicationSubnetGroupDoesNotCoverEnoughAZs {
  public ExceptionMessage $message;
}

class ReplicationSubnetGroups {
}

class ReplicationTask {
  public string $cdc_start_position;
  public string $cdc_stop_position;
  public string $last_failure_message;
  public MigrationTypeValue $migration_type;
  public string $recovery_checkpoint;
  public string $replication_instance_arn;
  public string $replication_task_arn;
  public TStamp $replication_task_creation_date;
  public string $replication_task_identifier;
  public string $replication_task_settings;
  public TStamp $replication_task_start_date;
  public ReplicationTaskStats $replication_task_stats;
  public string $source_endpoint_arn;
  public string $status;
  public string $stop_reason;
  public string $table_mappings;
  public string $target_endpoint_arn;
  public string $task_data;
}

class ReplicationTaskAssessmentResult {
  public string $assessment_results;
  public string $assessment_results_file;
  public string $assessment_status;
  public string $replication_task_arn;
  public string $replication_task_identifier;
  public TStamp $replication_task_last_assessment_date;
  public string $s_3_object_url;
}

class ReplicationTaskAssessmentResultList {
}

class ReplicationTaskList {
}

class ReplicationTaskStats {
  public Long $elapsed_time_millis;
  public TStamp $fresh_start_date;
  public TStamp $full_load_finish_date;
  public int $full_load_progress_percent;
  public TStamp $full_load_start_date;
  public TStamp $start_date;
  public TStamp $stop_date;
  public int $tables_errored;
  public int $tables_loaded;
  public int $tables_loading;
  public int $tables_queued;
}

class ResourceAlreadyExistsFault {
  public ExceptionMessage $message;
  public ResourceArn $resource_arn;
}

class ResourceArn {
}

class ResourceNotFoundFault {
  public ExceptionMessage $message;
}

class ResourcePendingMaintenanceActions {
  public PendingMaintenanceActionDetails $pending_maintenance_action_details;
  public string $resource_identifier;
}

class ResourceQuotaExceededFault {
  public ExceptionMessage $message;
}

class S3Settings {
  public string $bucket_folder;
  public string $bucket_name;
  public BooleanOptional $cdc_inserts_and_updates;
  public BooleanOptional $cdc_inserts_only;
  public CompressionTypeValue $compression_type;
  public string $csv_delimiter;
  public string $csv_row_delimiter;
  public DataFormatValue $data_format;
  public IntegerOptional $data_page_size;
  public IntegerOptional $dict_page_size_limit;
  public BooleanOptional $enable_statistics;
  public EncodingTypeValue $encoding_type;
  public EncryptionModeValue $encryption_mode;
  public string $external_table_definition;
  public BooleanOptional $include_op_for_full_load;
  public BooleanOptional $parquet_timestamp_in_millisecond;
  public ParquetVersionValue $parquet_version;
  public IntegerOptional $row_group_length;
  public string $server_side_encryption_kms_key_id;
  public string $service_access_role_arn;
  public string $timestamp_column_name;
}

class SNSInvalidTopicFault {
  public ExceptionMessage $message;
}

class SNSNoAuthorizationFault {
  public ExceptionMessage $message;
}

class SchemaList {
}

class SecretString {
}

class SourceIdsList {
}

class SourceType {
}

class StartReplicationTaskAssessmentMessage {
  public string $replication_task_arn;
}

class StartReplicationTaskAssessmentResponse {
  public ReplicationTask $replication_task;
}

class StartReplicationTaskMessage {
  public string $cdc_start_position;
  public TStamp $cdc_start_time;
  public string $cdc_stop_position;
  public string $replication_task_arn;
  public StartReplicationTaskTypeValue $start_replication_task_type;
}

class StartReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class StartReplicationTaskTypeValue {
}

class StopReplicationTaskMessage {
  public string $replication_task_arn;
}

class StopReplicationTaskResponse {
  public ReplicationTask $replication_task;
}

class StorageQuotaExceededFault {
  public ExceptionMessage $message;
}

class String {
}

class Subnet {
  public AvailabilityZone $subnet_availability_zone;
  public string $subnet_identifier;
  public string $subnet_status;
}

class SubnetAlreadyInUse {
  public ExceptionMessage $message;
}

class SubnetIdentifierList {
}

class SubnetList {
}

class SupportedEndpointType {
  public ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_display_name;
  public string $engine_name;
  public string $replication_instance_engine_minimum_version;
  public boolean $supports_cdc;
}

class SupportedEndpointTypeList {
}

class TStamp {
}

class TableListToReload {
}

class TableStatistics {
  public Long $ddls;
  public Long $deletes;
  public Long $full_load_condtnl_chk_failed_rows;
  public TStamp $full_load_end_time;
  public Long $full_load_error_rows;
  public BooleanOptional $full_load_reloaded;
  public Long $full_load_rows;
  public TStamp $full_load_start_time;
  public Long $inserts;
  public TStamp $last_update_time;
  public string $schema_name;
  public string $table_name;
  public string $table_state;
  public Long $updates;
  public Long $validation_failed_records;
  public Long $validation_pending_records;
  public string $validation_state;
  public string $validation_state_details;
  public Long $validation_suspended_records;
}

class TableStatisticsList {
}

class TableToReload {
  public string $schema_name;
  public string $table_name;
}

class Tag {
  public string $key;
  public string $value;
}

class TagList {
}

class TestConnectionMessage {
  public string $endpoint_arn;
  public string $replication_instance_arn;
}

class TestConnectionResponse {
  public Connection $connection;
}

class UpgradeDependencyFailureFault {
  public ExceptionMessage $message;
}

class VpcSecurityGroupIdList {
}

class VpcSecurityGroupMembership {
  public string $status;
  public string $vpc_security_group_id;
}

class VpcSecurityGroupMembershipList {
}

