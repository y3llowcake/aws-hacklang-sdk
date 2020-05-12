<?hh // strict
namespace slack\aws\dms;

interface DatabaseMigrationService {
  public function AddTagsToResource(AddTagsToResourceMessage $in): Awaitable<\Errors\Result<AddTagsToResourceResponse>>;
  public function ApplyPendingMaintenanceAction(ApplyPendingMaintenanceActionMessage $in): Awaitable<\Errors\Result<ApplyPendingMaintenanceActionResponse>>;
  public function CreateEndpoint(CreateEndpointMessage $in): Awaitable<\Errors\Result<CreateEndpointResponse>>;
  public function CreateEventSubscription(CreateEventSubscriptionMessage $in): Awaitable<\Errors\Result<CreateEventSubscriptionResponse>>;
  public function CreateReplicationInstance(CreateReplicationInstanceMessage $in): Awaitable<\Errors\Result<CreateReplicationInstanceResponse>>;
  public function CreateReplicationSubnetGroup(CreateReplicationSubnetGroupMessage $in): Awaitable<\Errors\Result<CreateReplicationSubnetGroupResponse>>;
  public function CreateReplicationTask(CreateReplicationTaskMessage $in): Awaitable<\Errors\Result<CreateReplicationTaskResponse>>;
  public function DeleteCertificate(DeleteCertificateMessage $in): Awaitable<\Errors\Result<DeleteCertificateResponse>>;
  public function DeleteConnection(DeleteConnectionMessage $in): Awaitable<\Errors\Result<DeleteConnectionResponse>>;
  public function DeleteEndpoint(DeleteEndpointMessage $in): Awaitable<\Errors\Result<DeleteEndpointResponse>>;
  public function DeleteEventSubscription(DeleteEventSubscriptionMessage $in): Awaitable<\Errors\Result<DeleteEventSubscriptionResponse>>;
  public function DeleteReplicationInstance(DeleteReplicationInstanceMessage $in): Awaitable<\Errors\Result<DeleteReplicationInstanceResponse>>;
  public function DeleteReplicationSubnetGroup(DeleteReplicationSubnetGroupMessage $in): Awaitable<\Errors\Result<DeleteReplicationSubnetGroupResponse>>;
  public function DeleteReplicationTask(DeleteReplicationTaskMessage $in): Awaitable<\Errors\Result<DeleteReplicationTaskResponse>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesMessage $in): Awaitable<\Errors\Result<DescribeAccountAttributesResponse>>;
  public function DescribeCertificates(DescribeCertificatesMessage $in): Awaitable<\Errors\Result<DescribeCertificatesResponse>>;
  public function DescribeConnections(DescribeConnectionsMessage $in): Awaitable<\Errors\Result<DescribeConnectionsResponse>>;
  public function DescribeEndpointTypes(DescribeEndpointTypesMessage $in): Awaitable<\Errors\Result<DescribeEndpointTypesResponse>>;
  public function DescribeEndpoints(DescribeEndpointsMessage $in): Awaitable<\Errors\Result<DescribeEndpointsResponse>>;
  public function DescribeEventCategories(DescribeEventCategoriesMessage $in): Awaitable<\Errors\Result<DescribeEventCategoriesResponse>>;
  public function DescribeEventSubscriptions(DescribeEventSubscriptionsMessage $in): Awaitable<\Errors\Result<DescribeEventSubscriptionsResponse>>;
  public function DescribeEvents(DescribeEventsMessage $in): Awaitable<\Errors\Result<DescribeEventsResponse>>;
  public function DescribeOrderableReplicationInstances(DescribeOrderableReplicationInstancesMessage $in): Awaitable<\Errors\Result<DescribeOrderableReplicationInstancesResponse>>;
  public function DescribePendingMaintenanceActions(DescribePendingMaintenanceActionsMessage $in): Awaitable<\Errors\Result<DescribePendingMaintenanceActionsResponse>>;
  public function DescribeRefreshSchemasStatus(DescribeRefreshSchemasStatusMessage $in): Awaitable<\Errors\Result<DescribeRefreshSchemasStatusResponse>>;
  public function DescribeReplicationInstanceTaskLogs(DescribeReplicationInstanceTaskLogsMessage $in): Awaitable<\Errors\Result<DescribeReplicationInstanceTaskLogsResponse>>;
  public function DescribeReplicationInstances(DescribeReplicationInstancesMessage $in): Awaitable<\Errors\Result<DescribeReplicationInstancesResponse>>;
  public function DescribeReplicationSubnetGroups(DescribeReplicationSubnetGroupsMessage $in): Awaitable<\Errors\Result<DescribeReplicationSubnetGroupsResponse>>;
  public function DescribeReplicationTaskAssessmentResults(DescribeReplicationTaskAssessmentResultsMessage $in): Awaitable<\Errors\Result<DescribeReplicationTaskAssessmentResultsResponse>>;
  public function DescribeReplicationTasks(DescribeReplicationTasksMessage $in): Awaitable<\Errors\Result<DescribeReplicationTasksResponse>>;
  public function DescribeSchemas(DescribeSchemasMessage $in): Awaitable<\Errors\Result<DescribeSchemasResponse>>;
  public function DescribeTableStatistics(DescribeTableStatisticsMessage $in): Awaitable<\Errors\Result<DescribeTableStatisticsResponse>>;
  public function ImportCertificate(ImportCertificateMessage $in): Awaitable<\Errors\Result<ImportCertificateResponse>>;
  public function ListTagsForResource(ListTagsForResourceMessage $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ModifyEndpoint(ModifyEndpointMessage $in): Awaitable<\Errors\Result<ModifyEndpointResponse>>;
  public function ModifyEventSubscription(ModifyEventSubscriptionMessage $in): Awaitable<\Errors\Result<ModifyEventSubscriptionResponse>>;
  public function ModifyReplicationInstance(ModifyReplicationInstanceMessage $in): Awaitable<\Errors\Result<ModifyReplicationInstanceResponse>>;
  public function ModifyReplicationSubnetGroup(ModifyReplicationSubnetGroupMessage $in): Awaitable<\Errors\Result<ModifyReplicationSubnetGroupResponse>>;
  public function ModifyReplicationTask(ModifyReplicationTaskMessage $in): Awaitable<\Errors\Result<ModifyReplicationTaskResponse>>;
  public function RebootReplicationInstance(RebootReplicationInstanceMessage $in): Awaitable<\Errors\Result<RebootReplicationInstanceResponse>>;
  public function RefreshSchemas(RefreshSchemasMessage $in): Awaitable<\Errors\Result<RefreshSchemasResponse>>;
  public function ReloadTables(ReloadTablesMessage $in): Awaitable<\Errors\Result<ReloadTablesResponse>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceMessage $in): Awaitable<\Errors\Result<RemoveTagsFromResourceResponse>>;
  public function StartReplicationTask(StartReplicationTaskMessage $in): Awaitable<\Errors\Result<StartReplicationTaskResponse>>;
  public function StartReplicationTaskAssessment(StartReplicationTaskAssessmentMessage $in): Awaitable<\Errors\Result<StartReplicationTaskAssessmentResponse>>;
  public function StopReplicationTask(StopReplicationTaskMessage $in): Awaitable<\Errors\Result<StopReplicationTaskResponse>>;
  public function TestConnection(TestConnectionMessage $in): Awaitable<\Errors\Result<TestConnectionResponse>>;
}

class AccessDeniedFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
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

class AddTagsToResourceMessage {
  public string $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class AddTagsToResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApplyPendingMaintenanceActionMessage {
  public string $apply_action;
  public string $opt_in_type;
  public string $replication_instance_arn;

  public function __construct(shape(
    ?'apply_action' => string,
    ?'opt_in_type' => string,
    ?'replication_instance_arn' => string,
  ) $s = shape()) {
    $this->apply_action = $s['apply_action'] ?? '';
    $this->opt_in_type = $s['opt_in_type'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
  }
}

class ApplyPendingMaintenanceActionResponse {
  public ?ResourcePendingMaintenanceActions $resource_pending_maintenance_actions;

  public function __construct(shape(
    ?'resource_pending_maintenance_actions' => ?ResourcePendingMaintenanceActions,
  ) $s = shape()) {
    $this->resource_pending_maintenance_actions = $s['resource_pending_maintenance_actions'] ?? null;
  }
}

type AuthMechanismValue = string;

type AuthTypeValue = string;

class AvailabilityZone {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type AvailabilityZonesList = vec<String>;

type Boolean = bool;

type BooleanOptional = bool;

class Certificate {
  public string $certificate_arn;
  public ?TStamp $certificate_creation_date;
  public string $certificate_identifier;
  public string $certificate_owner;
  public string $certificate_pem;
  public ?CertificateWallet $certificate_wallet;
  public ?IntegerOptional $key_length;
  public string $signing_algorithm;
  public ?TStamp $valid_from_date;
  public ?TStamp $valid_to_date;

  public function __construct(shape(
    ?'certificate_arn' => string,
    ?'certificate_creation_date' => ?TStamp,
    ?'certificate_identifier' => string,
    ?'certificate_owner' => string,
    ?'certificate_pem' => string,
    ?'certificate_wallet' => ?CertificateWallet,
    ?'key_length' => ?IntegerOptional,
    ?'signing_algorithm' => string,
    ?'valid_from_date' => ?TStamp,
    ?'valid_to_date' => ?TStamp,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->certificate_creation_date = $s['certificate_creation_date'] ?? 0;
    $this->certificate_identifier = $s['certificate_identifier'] ?? '';
    $this->certificate_owner = $s['certificate_owner'] ?? '';
    $this->certificate_pem = $s['certificate_pem'] ?? '';
    $this->certificate_wallet = $s['certificate_wallet'] ?? '';
    $this->key_length = $s['key_length'] ?? 0;
    $this->signing_algorithm = $s['signing_algorithm'] ?? '';
    $this->valid_from_date = $s['valid_from_date'] ?? 0;
    $this->valid_to_date = $s['valid_to_date'] ?? 0;
  }
}

type CertificateList = vec<Certificate>;

type CertificateWallet = string;

type CompressionTypeValue = string;

class Connection {
  public string $endpoint_arn;
  public string $endpoint_identifier;
  public string $last_failure_message;
  public string $replication_instance_arn;
  public string $replication_instance_identifier;
  public string $status;

  public function __construct(shape(
    ?'endpoint_arn' => string,
    ?'endpoint_identifier' => string,
    ?'last_failure_message' => string,
    ?'replication_instance_arn' => string,
    ?'replication_instance_identifier' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
    $this->endpoint_identifier = $s['endpoint_identifier'] ?? '';
    $this->last_failure_message = $s['last_failure_message'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
    $this->replication_instance_identifier = $s['replication_instance_identifier'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ConnectionList = vec<Connection>;

class CreateEndpointMessage {
  public string $certificate_arn;
  public string $database_name;
  public ?DmsTransferSettings $dms_transfer_settings;
  public ?DynamoDbSettings $dynamo_db_settings;
  public ?ElasticsearchSettings $elasticsearch_settings;
  public string $endpoint_identifier;
  public ?ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_name;
  public string $external_table_definition;
  public string $extra_connection_attributes;
  public ?KafkaSettings $kafka_settings;
  public ?KinesisSettings $kinesis_settings;
  public string $kms_key_id;
  public ?MongoDbSettings $mongo_db_settings;
  public ?NeptuneSettings $neptune_settings;
  public ?SecretString $password;
  public ?IntegerOptional $port;
  public ?RedshiftSettings $redshift_settings;
  public ?S3Settings $s_3_settings;
  public string $server_name;
  public string $service_access_role_arn;
  public ?DmsSslModeValue $ssl_mode;
  public ?TagList $tags;
  public string $username;

  public function __construct(shape(
    ?'certificate_arn' => string,
    ?'database_name' => string,
    ?'dms_transfer_settings' => ?DmsTransferSettings,
    ?'dynamo_db_settings' => ?DynamoDbSettings,
    ?'elasticsearch_settings' => ?ElasticsearchSettings,
    ?'endpoint_identifier' => string,
    ?'endpoint_type' => ?ReplicationEndpointTypeValue,
    ?'engine_name' => string,
    ?'external_table_definition' => string,
    ?'extra_connection_attributes' => string,
    ?'kafka_settings' => ?KafkaSettings,
    ?'kinesis_settings' => ?KinesisSettings,
    ?'kms_key_id' => string,
    ?'mongo_db_settings' => ?MongoDbSettings,
    ?'neptune_settings' => ?NeptuneSettings,
    ?'password' => ?SecretString,
    ?'port' => ?IntegerOptional,
    ?'redshift_settings' => ?RedshiftSettings,
    ?'s_3_settings' => ?S3Settings,
    ?'server_name' => string,
    ?'service_access_role_arn' => string,
    ?'ssl_mode' => ?DmsSslModeValue,
    ?'tags' => ?TagList,
    ?'username' => string,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->dms_transfer_settings = $s['dms_transfer_settings'] ?? null;
    $this->dynamo_db_settings = $s['dynamo_db_settings'] ?? null;
    $this->elasticsearch_settings = $s['elasticsearch_settings'] ?? null;
    $this->endpoint_identifier = $s['endpoint_identifier'] ?? '';
    $this->endpoint_type = $s['endpoint_type'] ?? '';
    $this->engine_name = $s['engine_name'] ?? '';
    $this->external_table_definition = $s['external_table_definition'] ?? '';
    $this->extra_connection_attributes = $s['extra_connection_attributes'] ?? '';
    $this->kafka_settings = $s['kafka_settings'] ?? null;
    $this->kinesis_settings = $s['kinesis_settings'] ?? null;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->mongo_db_settings = $s['mongo_db_settings'] ?? null;
    $this->neptune_settings = $s['neptune_settings'] ?? null;
    $this->password = $s['password'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->redshift_settings = $s['redshift_settings'] ?? null;
    $this->s_3_settings = $s['s_3_settings'] ?? null;
    $this->server_name = $s['server_name'] ?? '';
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
    $this->ssl_mode = $s['ssl_mode'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->username = $s['username'] ?? '';
  }
}

class CreateEndpointResponse {
  public ?Endpoint $endpoint;

  public function __construct(shape(
    ?'endpoint' => ?Endpoint,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? null;
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

class CreateEventSubscriptionResponse {
  public ?EventSubscription $event_subscription;

  public function __construct(shape(
    ?'event_subscription' => ?EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $s['event_subscription'] ?? null;
  }
}

class CreateReplicationInstanceMessage {
  public ?IntegerOptional $allocated_storage;
  public ?BooleanOptional $auto_minor_version_upgrade;
  public string $availability_zone;
  public string $dns_name_servers;
  public string $engine_version;
  public string $kms_key_id;
  public ?BooleanOptional $multi_az;
  public string $preferred_maintenance_window;
  public ?BooleanOptional $publicly_accessible;
  public string $replication_instance_class;
  public string $replication_instance_identifier;
  public string $replication_subnet_group_identifier;
  public ?TagList $tags;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'allocated_storage' => ?IntegerOptional,
    ?'auto_minor_version_upgrade' => ?BooleanOptional,
    ?'availability_zone' => string,
    ?'dns_name_servers' => string,
    ?'engine_version' => string,
    ?'kms_key_id' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'preferred_maintenance_window' => string,
    ?'publicly_accessible' => ?BooleanOptional,
    ?'replication_instance_class' => string,
    ?'replication_instance_identifier' => string,
    ?'replication_subnet_group_identifier' => string,
    ?'tags' => ?TagList,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->dns_name_servers = $s['dns_name_servers'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->replication_instance_class = $s['replication_instance_class'] ?? '';
    $this->replication_instance_identifier = $s['replication_instance_identifier'] ?? '';
    $this->replication_subnet_group_identifier = $s['replication_subnet_group_identifier'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class CreateReplicationInstanceResponse {
  public ?ReplicationInstance $replication_instance;

  public function __construct(shape(
    ?'replication_instance' => ?ReplicationInstance,
  ) $s = shape()) {
    $this->replication_instance = $s['replication_instance'] ?? null;
  }
}

class CreateReplicationSubnetGroupMessage {
  public string $replication_subnet_group_description;
  public string $replication_subnet_group_identifier;
  public ?SubnetIdentifierList $subnet_ids;
  public ?TagList $tags;

  public function __construct(shape(
    ?'replication_subnet_group_description' => string,
    ?'replication_subnet_group_identifier' => string,
    ?'subnet_ids' => ?SubnetIdentifierList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->replication_subnet_group_description = $s['replication_subnet_group_description'] ?? '';
    $this->replication_subnet_group_identifier = $s['replication_subnet_group_identifier'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateReplicationSubnetGroupResponse {
  public ?ReplicationSubnetGroup $replication_subnet_group;

  public function __construct(shape(
    ?'replication_subnet_group' => ?ReplicationSubnetGroup,
  ) $s = shape()) {
    $this->replication_subnet_group = $s['replication_subnet_group'] ?? null;
  }
}

class CreateReplicationTaskMessage {
  public string $cdc_start_position;
  public ?TStamp $cdc_start_time;
  public string $cdc_stop_position;
  public ?MigrationTypeValue $migration_type;
  public string $replication_instance_arn;
  public string $replication_task_identifier;
  public string $replication_task_settings;
  public string $source_endpoint_arn;
  public string $table_mappings;
  public ?TagList $tags;
  public string $target_endpoint_arn;
  public string $task_data;

  public function __construct(shape(
    ?'cdc_start_position' => string,
    ?'cdc_start_time' => ?TStamp,
    ?'cdc_stop_position' => string,
    ?'migration_type' => ?MigrationTypeValue,
    ?'replication_instance_arn' => string,
    ?'replication_task_identifier' => string,
    ?'replication_task_settings' => string,
    ?'source_endpoint_arn' => string,
    ?'table_mappings' => string,
    ?'tags' => ?TagList,
    ?'target_endpoint_arn' => string,
    ?'task_data' => string,
  ) $s = shape()) {
    $this->cdc_start_position = $s['cdc_start_position'] ?? '';
    $this->cdc_start_time = $s['cdc_start_time'] ?? 0;
    $this->cdc_stop_position = $s['cdc_stop_position'] ?? '';
    $this->migration_type = $s['migration_type'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
    $this->replication_task_identifier = $s['replication_task_identifier'] ?? '';
    $this->replication_task_settings = $s['replication_task_settings'] ?? '';
    $this->source_endpoint_arn = $s['source_endpoint_arn'] ?? '';
    $this->table_mappings = $s['table_mappings'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_endpoint_arn = $s['target_endpoint_arn'] ?? '';
    $this->task_data = $s['task_data'] ?? '';
  }
}

class CreateReplicationTaskResponse {
  public ?ReplicationTask $replication_task;

  public function __construct(shape(
    ?'replication_task' => ?ReplicationTask,
  ) $s = shape()) {
    $this->replication_task = $s['replication_task'] ?? null;
  }
}

type DataFormatValue = string;

class DeleteCertificateMessage {
  public string $certificate_arn;

  public function __construct(shape(
    ?'certificate_arn' => string,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
  }
}

class DeleteCertificateResponse {
  public ?Certificate $certificate;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? null;
  }
}

class DeleteConnectionMessage {
  public string $endpoint_arn;
  public string $replication_instance_arn;

  public function __construct(shape(
    ?'endpoint_arn' => string,
    ?'replication_instance_arn' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
  }
}

class DeleteConnectionResponse {
  public ?Connection $connection;

  public function __construct(shape(
    ?'connection' => ?Connection,
  ) $s = shape()) {
    $this->connection = $s['connection'] ?? null;
  }
}

class DeleteEndpointMessage {
  public string $endpoint_arn;

  public function __construct(shape(
    ?'endpoint_arn' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
  }
}

class DeleteEndpointResponse {
  public ?Endpoint $endpoint;

  public function __construct(shape(
    ?'endpoint' => ?Endpoint,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? null;
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

class DeleteEventSubscriptionResponse {
  public ?EventSubscription $event_subscription;

  public function __construct(shape(
    ?'event_subscription' => ?EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $s['event_subscription'] ?? null;
  }
}

class DeleteReplicationInstanceMessage {
  public string $replication_instance_arn;

  public function __construct(shape(
    ?'replication_instance_arn' => string,
  ) $s = shape()) {
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
  }
}

class DeleteReplicationInstanceResponse {
  public ?ReplicationInstance $replication_instance;

  public function __construct(shape(
    ?'replication_instance' => ?ReplicationInstance,
  ) $s = shape()) {
    $this->replication_instance = $s['replication_instance'] ?? null;
  }
}

class DeleteReplicationSubnetGroupMessage {
  public string $replication_subnet_group_identifier;

  public function __construct(shape(
    ?'replication_subnet_group_identifier' => string,
  ) $s = shape()) {
    $this->replication_subnet_group_identifier = $s['replication_subnet_group_identifier'] ?? '';
  }
}

class DeleteReplicationSubnetGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteReplicationTaskMessage {
  public string $replication_task_arn;

  public function __construct(shape(
    ?'replication_task_arn' => string,
  ) $s = shape()) {
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
  }
}

class DeleteReplicationTaskResponse {
  public ?ReplicationTask $replication_task;

  public function __construct(shape(
    ?'replication_task' => ?ReplicationTask,
  ) $s = shape()) {
    $this->replication_task = $s['replication_task'] ?? null;
  }
}

class DescribeAccountAttributesMessage {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountAttributesResponse {
  public ?AccountQuotaList $account_quotas;
  public string $unique_account_identifier;

  public function __construct(shape(
    ?'account_quotas' => ?AccountQuotaList,
    ?'unique_account_identifier' => string,
  ) $s = shape()) {
    $this->account_quotas = $s['account_quotas'] ?? vec[];
    $this->unique_account_identifier = $s['unique_account_identifier'] ?? '';
  }
}

class DescribeCertificatesMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeCertificatesResponse {
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

class DescribeConnectionsMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeConnectionsResponse {
  public ?ConnectionList $connections;
  public string $marker;

  public function __construct(shape(
    ?'connections' => ?ConnectionList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->connections = $s['connections'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class DescribeEndpointTypesMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeEndpointTypesResponse {
  public string $marker;
  public ?SupportedEndpointTypeList $supported_endpoint_types;

  public function __construct(shape(
    ?'marker' => string,
    ?'supported_endpoint_types' => ?SupportedEndpointTypeList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->supported_endpoint_types = $s['supported_endpoint_types'] ?? vec[];
  }
}

class DescribeEndpointsMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeEndpointsResponse {
  public ?EndpointList $endpoints;
  public string $marker;

  public function __construct(shape(
    ?'endpoints' => ?EndpointList,
    ?'marker' => string,
  ) $s = shape()) {
    $this->endpoints = $s['endpoints'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
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

class DescribeEventCategoriesResponse {
  public ?EventCategoryGroupList $event_category_group_list;

  public function __construct(shape(
    ?'event_category_group_list' => ?EventCategoryGroupList,
  ) $s = shape()) {
    $this->event_category_group_list = $s['event_category_group_list'] ?? vec[];
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

class DescribeEventSubscriptionsResponse {
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

class DescribeEventsResponse {
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

class DescribeOrderableReplicationInstancesMessage {
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeOrderableReplicationInstancesResponse {
  public string $marker;
  public ?OrderableReplicationInstanceList $orderable_replication_instances;

  public function __construct(shape(
    ?'marker' => string,
    ?'orderable_replication_instances' => ?OrderableReplicationInstanceList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->orderable_replication_instances = $s['orderable_replication_instances'] ?? vec[];
  }
}

class DescribePendingMaintenanceActionsMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $replication_instance_arn;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'replication_instance_arn' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
  }
}

class DescribePendingMaintenanceActionsResponse {
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

class DescribeRefreshSchemasStatusMessage {
  public string $endpoint_arn;

  public function __construct(shape(
    ?'endpoint_arn' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
  }
}

class DescribeRefreshSchemasStatusResponse {
  public ?RefreshSchemasStatus $refresh_schemas_status;

  public function __construct(shape(
    ?'refresh_schemas_status' => ?RefreshSchemasStatus,
  ) $s = shape()) {
    $this->refresh_schemas_status = $s['refresh_schemas_status'] ?? null;
  }
}

class DescribeReplicationInstanceTaskLogsMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $replication_instance_arn;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'replication_instance_arn' => string,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
  }
}

class DescribeReplicationInstanceTaskLogsResponse {
  public string $marker;
  public string $replication_instance_arn;
  public ?ReplicationInstanceTaskLogsList $replication_instance_task_logs;

  public function __construct(shape(
    ?'marker' => string,
    ?'replication_instance_arn' => string,
    ?'replication_instance_task_logs' => ?ReplicationInstanceTaskLogsList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
    $this->replication_instance_task_logs = $s['replication_instance_task_logs'] ?? vec[];
  }
}

class DescribeReplicationInstancesMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeReplicationInstancesResponse {
  public string $marker;
  public ?ReplicationInstanceList $replication_instances;

  public function __construct(shape(
    ?'marker' => string,
    ?'replication_instances' => ?ReplicationInstanceList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->replication_instances = $s['replication_instances'] ?? vec[];
  }
}

class DescribeReplicationSubnetGroupsMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeReplicationSubnetGroupsResponse {
  public string $marker;
  public ?ReplicationSubnetGroups $replication_subnet_groups;

  public function __construct(shape(
    ?'marker' => string,
    ?'replication_subnet_groups' => ?ReplicationSubnetGroups,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->replication_subnet_groups = $s['replication_subnet_groups'] ?? vec[];
  }
}

class DescribeReplicationTaskAssessmentResultsMessage {
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $replication_task_arn;

  public function __construct(shape(
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'replication_task_arn' => string,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
  }
}

class DescribeReplicationTaskAssessmentResultsResponse {
  public string $bucket_name;
  public string $marker;
  public ?ReplicationTaskAssessmentResultList $replication_task_assessment_results;

  public function __construct(shape(
    ?'bucket_name' => string,
    ?'marker' => string,
    ?'replication_task_assessment_results' => ?ReplicationTaskAssessmentResultList,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->replication_task_assessment_results = $s['replication_task_assessment_results'] ?? vec[];
  }
}

class DescribeReplicationTasksMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public ?BooleanOptional $without_settings;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'without_settings' => ?BooleanOptional,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->without_settings = $s['without_settings'] ?? false;
  }
}

class DescribeReplicationTasksResponse {
  public string $marker;
  public ?ReplicationTaskList $replication_tasks;

  public function __construct(shape(
    ?'marker' => string,
    ?'replication_tasks' => ?ReplicationTaskList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->replication_tasks = $s['replication_tasks'] ?? vec[];
  }
}

class DescribeSchemasMessage {
  public string $endpoint_arn;
  public string $marker;
  public ?IntegerOptional $max_records;

  public function __construct(shape(
    ?'endpoint_arn' => string,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
  }
}

class DescribeSchemasResponse {
  public string $marker;
  public ?SchemaList $schemas;

  public function __construct(shape(
    ?'marker' => string,
    ?'schemas' => ?SchemaList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->schemas = $s['schemas'] ?? vec[];
  }
}

class DescribeTableStatisticsMessage {
  public ?FilterList $filters;
  public string $marker;
  public ?IntegerOptional $max_records;
  public string $replication_task_arn;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'marker' => string,
    ?'max_records' => ?IntegerOptional,
    ?'replication_task_arn' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_records = $s['max_records'] ?? 0;
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
  }
}

class DescribeTableStatisticsResponse {
  public string $marker;
  public string $replication_task_arn;
  public ?TableStatisticsList $table_statistics;

  public function __construct(shape(
    ?'marker' => string,
    ?'replication_task_arn' => string,
    ?'table_statistics' => ?TableStatisticsList,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
    $this->table_statistics = $s['table_statistics'] ?? vec[];
  }
}

type DmsSslModeValue = string;

class DmsTransferSettings {
  public string $bucket_name;
  public string $service_access_role_arn;

  public function __construct(shape(
    ?'bucket_name' => string,
    ?'service_access_role_arn' => string,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
  }
}

class DynamoDbSettings {
  public string $service_access_role_arn;

  public function __construct(shape(
    ?'service_access_role_arn' => string,
  ) $s = shape()) {
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
  }
}

class ElasticsearchSettings {
  public string $endpoint_uri;
  public ?IntegerOptional $error_retry_duration;
  public ?IntegerOptional $full_load_error_percentage;
  public string $service_access_role_arn;

  public function __construct(shape(
    ?'endpoint_uri' => string,
    ?'error_retry_duration' => ?IntegerOptional,
    ?'full_load_error_percentage' => ?IntegerOptional,
    ?'service_access_role_arn' => string,
  ) $s = shape()) {
    $this->endpoint_uri = $s['endpoint_uri'] ?? '';
    $this->error_retry_duration = $s['error_retry_duration'] ?? 0;
    $this->full_load_error_percentage = $s['full_load_error_percentage'] ?? 0;
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
  }
}

type EncodingTypeValue = string;

type EncryptionModeValue = string;

class Endpoint {
  public string $certificate_arn;
  public string $database_name;
  public ?DmsTransferSettings $dms_transfer_settings;
  public ?DynamoDbSettings $dynamo_db_settings;
  public ?ElasticsearchSettings $elasticsearch_settings;
  public string $endpoint_arn;
  public string $endpoint_identifier;
  public ?ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_display_name;
  public string $engine_name;
  public string $external_id;
  public string $external_table_definition;
  public string $extra_connection_attributes;
  public ?KafkaSettings $kafka_settings;
  public ?KinesisSettings $kinesis_settings;
  public string $kms_key_id;
  public ?MongoDbSettings $mongo_db_settings;
  public ?NeptuneSettings $neptune_settings;
  public ?IntegerOptional $port;
  public ?RedshiftSettings $redshift_settings;
  public ?S3Settings $s_3_settings;
  public string $server_name;
  public string $service_access_role_arn;
  public ?DmsSslModeValue $ssl_mode;
  public string $status;
  public string $username;

  public function __construct(shape(
    ?'certificate_arn' => string,
    ?'database_name' => string,
    ?'dms_transfer_settings' => ?DmsTransferSettings,
    ?'dynamo_db_settings' => ?DynamoDbSettings,
    ?'elasticsearch_settings' => ?ElasticsearchSettings,
    ?'endpoint_arn' => string,
    ?'endpoint_identifier' => string,
    ?'endpoint_type' => ?ReplicationEndpointTypeValue,
    ?'engine_display_name' => string,
    ?'engine_name' => string,
    ?'external_id' => string,
    ?'external_table_definition' => string,
    ?'extra_connection_attributes' => string,
    ?'kafka_settings' => ?KafkaSettings,
    ?'kinesis_settings' => ?KinesisSettings,
    ?'kms_key_id' => string,
    ?'mongo_db_settings' => ?MongoDbSettings,
    ?'neptune_settings' => ?NeptuneSettings,
    ?'port' => ?IntegerOptional,
    ?'redshift_settings' => ?RedshiftSettings,
    ?'s_3_settings' => ?S3Settings,
    ?'server_name' => string,
    ?'service_access_role_arn' => string,
    ?'ssl_mode' => ?DmsSslModeValue,
    ?'status' => string,
    ?'username' => string,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->dms_transfer_settings = $s['dms_transfer_settings'] ?? null;
    $this->dynamo_db_settings = $s['dynamo_db_settings'] ?? null;
    $this->elasticsearch_settings = $s['elasticsearch_settings'] ?? null;
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
    $this->endpoint_identifier = $s['endpoint_identifier'] ?? '';
    $this->endpoint_type = $s['endpoint_type'] ?? '';
    $this->engine_display_name = $s['engine_display_name'] ?? '';
    $this->engine_name = $s['engine_name'] ?? '';
    $this->external_id = $s['external_id'] ?? '';
    $this->external_table_definition = $s['external_table_definition'] ?? '';
    $this->extra_connection_attributes = $s['extra_connection_attributes'] ?? '';
    $this->kafka_settings = $s['kafka_settings'] ?? null;
    $this->kinesis_settings = $s['kinesis_settings'] ?? null;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->mongo_db_settings = $s['mongo_db_settings'] ?? null;
    $this->neptune_settings = $s['neptune_settings'] ?? null;
    $this->port = $s['port'] ?? 0;
    $this->redshift_settings = $s['redshift_settings'] ?? null;
    $this->s_3_settings = $s['s_3_settings'] ?? null;
    $this->server_name = $s['server_name'] ?? '';
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
    $this->ssl_mode = $s['ssl_mode'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

type EndpointList = vec<Endpoint>;

class Event {
  public ?TStamp $date;
  public ?EventCategoriesList $event_categories;
  public string $message;
  public string $source_identifier;
  public ?SourceType $source_type;

  public function __construct(shape(
    ?'date' => ?TStamp,
    ?'event_categories' => ?EventCategoriesList,
    ?'message' => string,
    ?'source_identifier' => string,
    ?'source_type' => ?SourceType,
  ) $s = shape()) {
    $this->date = $s['date'] ?? 0;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->message = $s['message'] ?? '';
    $this->source_identifier = $s['source_identifier'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
  }
}

type EventCategoriesList = vec<String>;

class EventCategoryGroup {
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

type EventCategoryGroupList = vec<EventCategoryGroup>;

type EventList = vec<Event>;

class EventSubscription {
  public string $cust_subscription_id;
  public string $customer_aws_id;
  public bool $enabled;
  public ?EventCategoriesList $event_categories_list;
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
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
    $this->source_ids_list = $s['source_ids_list'] ?? vec[];
    $this->source_type = $s['source_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->subscription_creation_time = $s['subscription_creation_time'] ?? '';
  }
}

type EventSubscriptionsList = vec<EventSubscription>;

type ExceptionMessage = string;

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

class ImportCertificateMessage {
  public string $certificate_identifier;
  public string $certificate_pem;
  public ?CertificateWallet $certificate_wallet;
  public ?TagList $tags;

  public function __construct(shape(
    ?'certificate_identifier' => string,
    ?'certificate_pem' => string,
    ?'certificate_wallet' => ?CertificateWallet,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->certificate_identifier = $s['certificate_identifier'] ?? '';
    $this->certificate_pem = $s['certificate_pem'] ?? '';
    $this->certificate_wallet = $s['certificate_wallet'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ImportCertificateResponse {
  public ?Certificate $certificate;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? null;
  }
}

class InsufficientResourceCapacityFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Integer = int;

type IntegerOptional = int;

class InvalidCertificateFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidResourceStateFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSubnet {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSAccessDeniedFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSDisabledFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSInvalidStateFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSKeyNotAccessibleFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSNotFoundFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KMSThrottlingFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KafkaSettings {
  public string $broker;
  public string $topic;

  public function __construct(shape(
    ?'broker' => string,
    ?'topic' => string,
  ) $s = shape()) {
    $this->broker = $s['broker'] ?? '';
    $this->topic = $s['topic'] ?? '';
  }
}

type KeyList = vec<String>;

class KinesisSettings {
  public ?BooleanOptional $include_control_details;
  public ?BooleanOptional $include_partition_value;
  public ?BooleanOptional $include_table_alter_operations;
  public ?BooleanOptional $include_transaction_details;
  public ?MessageFormatValue $message_format;
  public ?BooleanOptional $partition_include_schema_table;
  public string $service_access_role_arn;
  public string $stream_arn;

  public function __construct(shape(
    ?'include_control_details' => ?BooleanOptional,
    ?'include_partition_value' => ?BooleanOptional,
    ?'include_table_alter_operations' => ?BooleanOptional,
    ?'include_transaction_details' => ?BooleanOptional,
    ?'message_format' => ?MessageFormatValue,
    ?'partition_include_schema_table' => ?BooleanOptional,
    ?'service_access_role_arn' => string,
    ?'stream_arn' => string,
  ) $s = shape()) {
    $this->include_control_details = $s['include_control_details'] ?? false;
    $this->include_partition_value = $s['include_partition_value'] ?? false;
    $this->include_table_alter_operations = $s['include_table_alter_operations'] ?? false;
    $this->include_transaction_details = $s['include_transaction_details'] ?? false;
    $this->message_format = $s['message_format'] ?? '';
    $this->partition_include_schema_table = $s['partition_include_schema_table'] ?? false;
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
    $this->stream_arn = $s['stream_arn'] ?? '';
  }
}

class ListTagsForResourceMessage {
  public string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

type Long = int;

type MessageFormatValue = string;

type MigrationTypeValue = string;

class ModifyEndpointMessage {
  public string $certificate_arn;
  public string $database_name;
  public ?DmsTransferSettings $dms_transfer_settings;
  public ?DynamoDbSettings $dynamo_db_settings;
  public ?ElasticsearchSettings $elasticsearch_settings;
  public string $endpoint_arn;
  public string $endpoint_identifier;
  public ?ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_name;
  public string $external_table_definition;
  public string $extra_connection_attributes;
  public ?KafkaSettings $kafka_settings;
  public ?KinesisSettings $kinesis_settings;
  public ?MongoDbSettings $mongo_db_settings;
  public ?NeptuneSettings $neptune_settings;
  public ?SecretString $password;
  public ?IntegerOptional $port;
  public ?RedshiftSettings $redshift_settings;
  public ?S3Settings $s_3_settings;
  public string $server_name;
  public string $service_access_role_arn;
  public ?DmsSslModeValue $ssl_mode;
  public string $username;

  public function __construct(shape(
    ?'certificate_arn' => string,
    ?'database_name' => string,
    ?'dms_transfer_settings' => ?DmsTransferSettings,
    ?'dynamo_db_settings' => ?DynamoDbSettings,
    ?'elasticsearch_settings' => ?ElasticsearchSettings,
    ?'endpoint_arn' => string,
    ?'endpoint_identifier' => string,
    ?'endpoint_type' => ?ReplicationEndpointTypeValue,
    ?'engine_name' => string,
    ?'external_table_definition' => string,
    ?'extra_connection_attributes' => string,
    ?'kafka_settings' => ?KafkaSettings,
    ?'kinesis_settings' => ?KinesisSettings,
    ?'mongo_db_settings' => ?MongoDbSettings,
    ?'neptune_settings' => ?NeptuneSettings,
    ?'password' => ?SecretString,
    ?'port' => ?IntegerOptional,
    ?'redshift_settings' => ?RedshiftSettings,
    ?'s_3_settings' => ?S3Settings,
    ?'server_name' => string,
    ?'service_access_role_arn' => string,
    ?'ssl_mode' => ?DmsSslModeValue,
    ?'username' => string,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->dms_transfer_settings = $s['dms_transfer_settings'] ?? null;
    $this->dynamo_db_settings = $s['dynamo_db_settings'] ?? null;
    $this->elasticsearch_settings = $s['elasticsearch_settings'] ?? null;
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
    $this->endpoint_identifier = $s['endpoint_identifier'] ?? '';
    $this->endpoint_type = $s['endpoint_type'] ?? '';
    $this->engine_name = $s['engine_name'] ?? '';
    $this->external_table_definition = $s['external_table_definition'] ?? '';
    $this->extra_connection_attributes = $s['extra_connection_attributes'] ?? '';
    $this->kafka_settings = $s['kafka_settings'] ?? null;
    $this->kinesis_settings = $s['kinesis_settings'] ?? null;
    $this->mongo_db_settings = $s['mongo_db_settings'] ?? null;
    $this->neptune_settings = $s['neptune_settings'] ?? null;
    $this->password = $s['password'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->redshift_settings = $s['redshift_settings'] ?? null;
    $this->s_3_settings = $s['s_3_settings'] ?? null;
    $this->server_name = $s['server_name'] ?? '';
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
    $this->ssl_mode = $s['ssl_mode'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class ModifyEndpointResponse {
  public ?Endpoint $endpoint;

  public function __construct(shape(
    ?'endpoint' => ?Endpoint,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? null;
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

class ModifyEventSubscriptionResponse {
  public ?EventSubscription $event_subscription;

  public function __construct(shape(
    ?'event_subscription' => ?EventSubscription,
  ) $s = shape()) {
    $this->event_subscription = $s['event_subscription'] ?? null;
  }
}

class ModifyReplicationInstanceMessage {
  public ?IntegerOptional $allocated_storage;
  public bool $allow_major_version_upgrade;
  public bool $apply_immediately;
  public ?BooleanOptional $auto_minor_version_upgrade;
  public string $engine_version;
  public ?BooleanOptional $multi_az;
  public string $preferred_maintenance_window;
  public string $replication_instance_arn;
  public string $replication_instance_class;
  public string $replication_instance_identifier;
  public ?VpcSecurityGroupIdList $vpc_security_group_ids;

  public function __construct(shape(
    ?'allocated_storage' => ?IntegerOptional,
    ?'allow_major_version_upgrade' => bool,
    ?'apply_immediately' => bool,
    ?'auto_minor_version_upgrade' => ?BooleanOptional,
    ?'engine_version' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'preferred_maintenance_window' => string,
    ?'replication_instance_arn' => string,
    ?'replication_instance_class' => string,
    ?'replication_instance_identifier' => string,
    ?'vpc_security_group_ids' => ?VpcSecurityGroupIdList,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->allow_major_version_upgrade = $s['allow_major_version_upgrade'] ?? false;
    $this->apply_immediately = $s['apply_immediately'] ?? false;
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
    $this->replication_instance_class = $s['replication_instance_class'] ?? '';
    $this->replication_instance_identifier = $s['replication_instance_identifier'] ?? '';
    $this->vpc_security_group_ids = $s['vpc_security_group_ids'] ?? vec[];
  }
}

class ModifyReplicationInstanceResponse {
  public ?ReplicationInstance $replication_instance;

  public function __construct(shape(
    ?'replication_instance' => ?ReplicationInstance,
  ) $s = shape()) {
    $this->replication_instance = $s['replication_instance'] ?? null;
  }
}

class ModifyReplicationSubnetGroupMessage {
  public string $replication_subnet_group_description;
  public string $replication_subnet_group_identifier;
  public ?SubnetIdentifierList $subnet_ids;

  public function __construct(shape(
    ?'replication_subnet_group_description' => string,
    ?'replication_subnet_group_identifier' => string,
    ?'subnet_ids' => ?SubnetIdentifierList,
  ) $s = shape()) {
    $this->replication_subnet_group_description = $s['replication_subnet_group_description'] ?? '';
    $this->replication_subnet_group_identifier = $s['replication_subnet_group_identifier'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class ModifyReplicationSubnetGroupResponse {
  public ?ReplicationSubnetGroup $replication_subnet_group;

  public function __construct(shape(
    ?'replication_subnet_group' => ?ReplicationSubnetGroup,
  ) $s = shape()) {
    $this->replication_subnet_group = $s['replication_subnet_group'] ?? null;
  }
}

class ModifyReplicationTaskMessage {
  public string $cdc_start_position;
  public ?TStamp $cdc_start_time;
  public string $cdc_stop_position;
  public ?MigrationTypeValue $migration_type;
  public string $replication_task_arn;
  public string $replication_task_identifier;
  public string $replication_task_settings;
  public string $table_mappings;
  public string $task_data;

  public function __construct(shape(
    ?'cdc_start_position' => string,
    ?'cdc_start_time' => ?TStamp,
    ?'cdc_stop_position' => string,
    ?'migration_type' => ?MigrationTypeValue,
    ?'replication_task_arn' => string,
    ?'replication_task_identifier' => string,
    ?'replication_task_settings' => string,
    ?'table_mappings' => string,
    ?'task_data' => string,
  ) $s = shape()) {
    $this->cdc_start_position = $s['cdc_start_position'] ?? '';
    $this->cdc_start_time = $s['cdc_start_time'] ?? 0;
    $this->cdc_stop_position = $s['cdc_stop_position'] ?? '';
    $this->migration_type = $s['migration_type'] ?? '';
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
    $this->replication_task_identifier = $s['replication_task_identifier'] ?? '';
    $this->replication_task_settings = $s['replication_task_settings'] ?? '';
    $this->table_mappings = $s['table_mappings'] ?? '';
    $this->task_data = $s['task_data'] ?? '';
  }
}

class ModifyReplicationTaskResponse {
  public ?ReplicationTask $replication_task;

  public function __construct(shape(
    ?'replication_task' => ?ReplicationTask,
  ) $s = shape()) {
    $this->replication_task = $s['replication_task'] ?? null;
  }
}

class MongoDbSettings {
  public ?AuthMechanismValue $auth_mechanism;
  public string $auth_source;
  public ?AuthTypeValue $auth_type;
  public string $database_name;
  public string $docs_to_investigate;
  public string $extract_doc_id;
  public string $kms_key_id;
  public ?NestingLevelValue $nesting_level;
  public ?SecretString $password;
  public ?IntegerOptional $port;
  public string $server_name;
  public string $username;

  public function __construct(shape(
    ?'auth_mechanism' => ?AuthMechanismValue,
    ?'auth_source' => string,
    ?'auth_type' => ?AuthTypeValue,
    ?'database_name' => string,
    ?'docs_to_investigate' => string,
    ?'extract_doc_id' => string,
    ?'kms_key_id' => string,
    ?'nesting_level' => ?NestingLevelValue,
    ?'password' => ?SecretString,
    ?'port' => ?IntegerOptional,
    ?'server_name' => string,
    ?'username' => string,
  ) $s = shape()) {
    $this->auth_mechanism = $s['auth_mechanism'] ?? '';
    $this->auth_source = $s['auth_source'] ?? '';
    $this->auth_type = $s['auth_type'] ?? '';
    $this->database_name = $s['database_name'] ?? '';
    $this->docs_to_investigate = $s['docs_to_investigate'] ?? '';
    $this->extract_doc_id = $s['extract_doc_id'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->nesting_level = $s['nesting_level'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->server_name = $s['server_name'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class NeptuneSettings {
  public ?IntegerOptional $error_retry_duration;
  public ?BooleanOptional $iam_auth_enabled;
  public ?IntegerOptional $max_file_size;
  public ?IntegerOptional $max_retry_count;
  public string $s_3_bucket_folder;
  public string $s_3_bucket_name;
  public string $service_access_role_arn;

  public function __construct(shape(
    ?'error_retry_duration' => ?IntegerOptional,
    ?'iam_auth_enabled' => ?BooleanOptional,
    ?'max_file_size' => ?IntegerOptional,
    ?'max_retry_count' => ?IntegerOptional,
    ?'s_3_bucket_folder' => string,
    ?'s_3_bucket_name' => string,
    ?'service_access_role_arn' => string,
  ) $s = shape()) {
    $this->error_retry_duration = $s['error_retry_duration'] ?? 0;
    $this->iam_auth_enabled = $s['iam_auth_enabled'] ?? false;
    $this->max_file_size = $s['max_file_size'] ?? 0;
    $this->max_retry_count = $s['max_retry_count'] ?? 0;
    $this->s_3_bucket_folder = $s['s_3_bucket_folder'] ?? '';
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
  }
}

type NestingLevelValue = string;

class OrderableReplicationInstance {
  public ?AvailabilityZonesList $availability_zones;
  public int $default_allocated_storage;
  public string $engine_version;
  public int $included_allocated_storage;
  public int $max_allocated_storage;
  public int $min_allocated_storage;
  public ?ReleaseStatusValues $release_status;
  public string $replication_instance_class;
  public string $storage_type;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZonesList,
    ?'default_allocated_storage' => int,
    ?'engine_version' => string,
    ?'included_allocated_storage' => int,
    ?'max_allocated_storage' => int,
    ?'min_allocated_storage' => int,
    ?'release_status' => ?ReleaseStatusValues,
    ?'replication_instance_class' => string,
    ?'storage_type' => string,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->default_allocated_storage = $s['default_allocated_storage'] ?? 0;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->included_allocated_storage = $s['included_allocated_storage'] ?? 0;
    $this->max_allocated_storage = $s['max_allocated_storage'] ?? 0;
    $this->min_allocated_storage = $s['min_allocated_storage'] ?? 0;
    $this->release_status = $s['release_status'] ?? '';
    $this->replication_instance_class = $s['replication_instance_class'] ?? '';
    $this->storage_type = $s['storage_type'] ?? '';
  }
}

type OrderableReplicationInstanceList = vec<OrderableReplicationInstance>;

type ParquetVersionValue = string;

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

class RebootReplicationInstanceMessage {
  public ?BooleanOptional $force_failover;
  public string $replication_instance_arn;

  public function __construct(shape(
    ?'force_failover' => ?BooleanOptional,
    ?'replication_instance_arn' => string,
  ) $s = shape()) {
    $this->force_failover = $s['force_failover'] ?? false;
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
  }
}

class RebootReplicationInstanceResponse {
  public ?ReplicationInstance $replication_instance;

  public function __construct(shape(
    ?'replication_instance' => ?ReplicationInstance,
  ) $s = shape()) {
    $this->replication_instance = $s['replication_instance'] ?? null;
  }
}

class RedshiftSettings {
  public ?BooleanOptional $accept_any_date;
  public string $after_connect_script;
  public string $bucket_folder;
  public string $bucket_name;
  public ?IntegerOptional $connection_timeout;
  public string $database_name;
  public string $date_format;
  public ?BooleanOptional $empty_as_null;
  public ?EncryptionModeValue $encryption_mode;
  public ?IntegerOptional $file_transfer_upload_streams;
  public ?IntegerOptional $load_timeout;
  public ?IntegerOptional $max_file_size;
  public ?SecretString $password;
  public ?IntegerOptional $port;
  public ?BooleanOptional $remove_quotes;
  public string $replace_chars;
  public string $replace_invalid_chars;
  public string $server_name;
  public string $server_side_encryption_kms_key_id;
  public string $service_access_role_arn;
  public string $time_format;
  public ?BooleanOptional $trim_blanks;
  public ?BooleanOptional $truncate_columns;
  public string $username;
  public ?IntegerOptional $write_buffer_size;

  public function __construct(shape(
    ?'accept_any_date' => ?BooleanOptional,
    ?'after_connect_script' => string,
    ?'bucket_folder' => string,
    ?'bucket_name' => string,
    ?'connection_timeout' => ?IntegerOptional,
    ?'database_name' => string,
    ?'date_format' => string,
    ?'empty_as_null' => ?BooleanOptional,
    ?'encryption_mode' => ?EncryptionModeValue,
    ?'file_transfer_upload_streams' => ?IntegerOptional,
    ?'load_timeout' => ?IntegerOptional,
    ?'max_file_size' => ?IntegerOptional,
    ?'password' => ?SecretString,
    ?'port' => ?IntegerOptional,
    ?'remove_quotes' => ?BooleanOptional,
    ?'replace_chars' => string,
    ?'replace_invalid_chars' => string,
    ?'server_name' => string,
    ?'server_side_encryption_kms_key_id' => string,
    ?'service_access_role_arn' => string,
    ?'time_format' => string,
    ?'trim_blanks' => ?BooleanOptional,
    ?'truncate_columns' => ?BooleanOptional,
    ?'username' => string,
    ?'write_buffer_size' => ?IntegerOptional,
  ) $s = shape()) {
    $this->accept_any_date = $s['accept_any_date'] ?? false;
    $this->after_connect_script = $s['after_connect_script'] ?? '';
    $this->bucket_folder = $s['bucket_folder'] ?? '';
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->connection_timeout = $s['connection_timeout'] ?? 0;
    $this->database_name = $s['database_name'] ?? '';
    $this->date_format = $s['date_format'] ?? '';
    $this->empty_as_null = $s['empty_as_null'] ?? false;
    $this->encryption_mode = $s['encryption_mode'] ?? '';
    $this->file_transfer_upload_streams = $s['file_transfer_upload_streams'] ?? 0;
    $this->load_timeout = $s['load_timeout'] ?? 0;
    $this->max_file_size = $s['max_file_size'] ?? 0;
    $this->password = $s['password'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->remove_quotes = $s['remove_quotes'] ?? false;
    $this->replace_chars = $s['replace_chars'] ?? '';
    $this->replace_invalid_chars = $s['replace_invalid_chars'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
    $this->server_side_encryption_kms_key_id = $s['server_side_encryption_kms_key_id'] ?? '';
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
    $this->time_format = $s['time_format'] ?? '';
    $this->trim_blanks = $s['trim_blanks'] ?? false;
    $this->truncate_columns = $s['truncate_columns'] ?? false;
    $this->username = $s['username'] ?? '';
    $this->write_buffer_size = $s['write_buffer_size'] ?? 0;
  }
}

class RefreshSchemasMessage {
  public string $endpoint_arn;
  public string $replication_instance_arn;

  public function __construct(shape(
    ?'endpoint_arn' => string,
    ?'replication_instance_arn' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
  }
}

class RefreshSchemasResponse {
  public ?RefreshSchemasStatus $refresh_schemas_status;

  public function __construct(shape(
    ?'refresh_schemas_status' => ?RefreshSchemasStatus,
  ) $s = shape()) {
    $this->refresh_schemas_status = $s['refresh_schemas_status'] ?? null;
  }
}

class RefreshSchemasStatus {
  public string $endpoint_arn;
  public string $last_failure_message;
  public ?TStamp $last_refresh_date;
  public string $replication_instance_arn;
  public ?RefreshSchemasStatusTypeValue $status;

  public function __construct(shape(
    ?'endpoint_arn' => string,
    ?'last_failure_message' => string,
    ?'last_refresh_date' => ?TStamp,
    ?'replication_instance_arn' => string,
    ?'status' => ?RefreshSchemasStatusTypeValue,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
    $this->last_failure_message = $s['last_failure_message'] ?? '';
    $this->last_refresh_date = $s['last_refresh_date'] ?? 0;
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type RefreshSchemasStatusTypeValue = string;

type ReleaseStatusValues = string;

type ReloadOptionValue = string;

class ReloadTablesMessage {
  public ?ReloadOptionValue $reload_option;
  public string $replication_task_arn;
  public ?TableListToReload $tables_to_reload;

  public function __construct(shape(
    ?'reload_option' => ?ReloadOptionValue,
    ?'replication_task_arn' => string,
    ?'tables_to_reload' => ?TableListToReload,
  ) $s = shape()) {
    $this->reload_option = $s['reload_option'] ?? '';
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
    $this->tables_to_reload = $s['tables_to_reload'] ?? vec[];
  }
}

class ReloadTablesResponse {
  public string $replication_task_arn;

  public function __construct(shape(
    ?'replication_task_arn' => string,
  ) $s = shape()) {
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
  }
}

class RemoveTagsFromResourceMessage {
  public string $resource_arn;
  public ?KeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tag_keys' => ?KeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class RemoveTagsFromResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReplicationEndpointTypeValue = string;

class ReplicationInstance {
  public int $allocated_storage;
  public bool $auto_minor_version_upgrade;
  public string $availability_zone;
  public string $dns_name_servers;
  public string $engine_version;
  public ?TStamp $free_until;
  public ?TStamp $instance_create_time;
  public string $kms_key_id;
  public bool $multi_az;
  public ?ReplicationPendingModifiedValues $pending_modified_values;
  public string $preferred_maintenance_window;
  public bool $publicly_accessible;
  public string $replication_instance_arn;
  public string $replication_instance_class;
  public string $replication_instance_identifier;
  public string $replication_instance_private_ip_address;
  public ?ReplicationInstancePrivateIpAddressList $replication_instance_private_ip_addresses;
  public string $replication_instance_public_ip_address;
  public ?ReplicationInstancePublicIpAddressList $replication_instance_public_ip_addresses;
  public string $replication_instance_status;
  public ?ReplicationSubnetGroup $replication_subnet_group;
  public string $secondary_availability_zone;
  public ?VpcSecurityGroupMembershipList $vpc_security_groups;

  public function __construct(shape(
    ?'allocated_storage' => int,
    ?'auto_minor_version_upgrade' => bool,
    ?'availability_zone' => string,
    ?'dns_name_servers' => string,
    ?'engine_version' => string,
    ?'free_until' => ?TStamp,
    ?'instance_create_time' => ?TStamp,
    ?'kms_key_id' => string,
    ?'multi_az' => bool,
    ?'pending_modified_values' => ?ReplicationPendingModifiedValues,
    ?'preferred_maintenance_window' => string,
    ?'publicly_accessible' => bool,
    ?'replication_instance_arn' => string,
    ?'replication_instance_class' => string,
    ?'replication_instance_identifier' => string,
    ?'replication_instance_private_ip_address' => string,
    ?'replication_instance_private_ip_addresses' => ?ReplicationInstancePrivateIpAddressList,
    ?'replication_instance_public_ip_address' => string,
    ?'replication_instance_public_ip_addresses' => ?ReplicationInstancePublicIpAddressList,
    ?'replication_instance_status' => string,
    ?'replication_subnet_group' => ?ReplicationSubnetGroup,
    ?'secondary_availability_zone' => string,
    ?'vpc_security_groups' => ?VpcSecurityGroupMembershipList,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->auto_minor_version_upgrade = $s['auto_minor_version_upgrade'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->dns_name_servers = $s['dns_name_servers'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->free_until = $s['free_until'] ?? 0;
    $this->instance_create_time = $s['instance_create_time'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->pending_modified_values = $s['pending_modified_values'] ?? null;
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
    $this->replication_instance_class = $s['replication_instance_class'] ?? '';
    $this->replication_instance_identifier = $s['replication_instance_identifier'] ?? '';
    $this->replication_instance_private_ip_address = $s['replication_instance_private_ip_address'] ?? '';
    $this->replication_instance_private_ip_addresses = $s['replication_instance_private_ip_addresses'] ?? vec[];
    $this->replication_instance_public_ip_address = $s['replication_instance_public_ip_address'] ?? '';
    $this->replication_instance_public_ip_addresses = $s['replication_instance_public_ip_addresses'] ?? vec[];
    $this->replication_instance_status = $s['replication_instance_status'] ?? '';
    $this->replication_subnet_group = $s['replication_subnet_group'] ?? null;
    $this->secondary_availability_zone = $s['secondary_availability_zone'] ?? '';
    $this->vpc_security_groups = $s['vpc_security_groups'] ?? vec[];
  }
}

type ReplicationInstanceList = vec<ReplicationInstance>;

type ReplicationInstancePrivateIpAddressList = vec<String>;

type ReplicationInstancePublicIpAddressList = vec<String>;

class ReplicationInstanceTaskLog {
  public ?Long $replication_instance_task_log_size;
  public string $replication_task_arn;
  public string $replication_task_name;

  public function __construct(shape(
    ?'replication_instance_task_log_size' => ?Long,
    ?'replication_task_arn' => string,
    ?'replication_task_name' => string,
  ) $s = shape()) {
    $this->replication_instance_task_log_size = $s['replication_instance_task_log_size'] ?? 0;
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
    $this->replication_task_name = $s['replication_task_name'] ?? '';
  }
}

type ReplicationInstanceTaskLogsList = vec<ReplicationInstanceTaskLog>;

class ReplicationPendingModifiedValues {
  public ?IntegerOptional $allocated_storage;
  public string $engine_version;
  public ?BooleanOptional $multi_az;
  public string $replication_instance_class;

  public function __construct(shape(
    ?'allocated_storage' => ?IntegerOptional,
    ?'engine_version' => string,
    ?'multi_az' => ?BooleanOptional,
    ?'replication_instance_class' => string,
  ) $s = shape()) {
    $this->allocated_storage = $s['allocated_storage'] ?? 0;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->multi_az = $s['multi_az'] ?? false;
    $this->replication_instance_class = $s['replication_instance_class'] ?? '';
  }
}

class ReplicationSubnetGroup {
  public string $replication_subnet_group_description;
  public string $replication_subnet_group_identifier;
  public string $subnet_group_status;
  public ?SubnetList $subnets;
  public string $vpc_id;

  public function __construct(shape(
    ?'replication_subnet_group_description' => string,
    ?'replication_subnet_group_identifier' => string,
    ?'subnet_group_status' => string,
    ?'subnets' => ?SubnetList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->replication_subnet_group_description = $s['replication_subnet_group_description'] ?? '';
    $this->replication_subnet_group_identifier = $s['replication_subnet_group_identifier'] ?? '';
    $this->subnet_group_status = $s['subnet_group_status'] ?? '';
    $this->subnets = $s['subnets'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class ReplicationSubnetGroupDoesNotCoverEnoughAZs {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ReplicationSubnetGroups = vec<ReplicationSubnetGroup>;

class ReplicationTask {
  public string $cdc_start_position;
  public string $cdc_stop_position;
  public string $last_failure_message;
  public ?MigrationTypeValue $migration_type;
  public string $recovery_checkpoint;
  public string $replication_instance_arn;
  public string $replication_task_arn;
  public ?TStamp $replication_task_creation_date;
  public string $replication_task_identifier;
  public string $replication_task_settings;
  public ?TStamp $replication_task_start_date;
  public ?ReplicationTaskStats $replication_task_stats;
  public string $source_endpoint_arn;
  public string $status;
  public string $stop_reason;
  public string $table_mappings;
  public string $target_endpoint_arn;
  public string $task_data;

  public function __construct(shape(
    ?'cdc_start_position' => string,
    ?'cdc_stop_position' => string,
    ?'last_failure_message' => string,
    ?'migration_type' => ?MigrationTypeValue,
    ?'recovery_checkpoint' => string,
    ?'replication_instance_arn' => string,
    ?'replication_task_arn' => string,
    ?'replication_task_creation_date' => ?TStamp,
    ?'replication_task_identifier' => string,
    ?'replication_task_settings' => string,
    ?'replication_task_start_date' => ?TStamp,
    ?'replication_task_stats' => ?ReplicationTaskStats,
    ?'source_endpoint_arn' => string,
    ?'status' => string,
    ?'stop_reason' => string,
    ?'table_mappings' => string,
    ?'target_endpoint_arn' => string,
    ?'task_data' => string,
  ) $s = shape()) {
    $this->cdc_start_position = $s['cdc_start_position'] ?? '';
    $this->cdc_stop_position = $s['cdc_stop_position'] ?? '';
    $this->last_failure_message = $s['last_failure_message'] ?? '';
    $this->migration_type = $s['migration_type'] ?? '';
    $this->recovery_checkpoint = $s['recovery_checkpoint'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
    $this->replication_task_creation_date = $s['replication_task_creation_date'] ?? 0;
    $this->replication_task_identifier = $s['replication_task_identifier'] ?? '';
    $this->replication_task_settings = $s['replication_task_settings'] ?? '';
    $this->replication_task_start_date = $s['replication_task_start_date'] ?? 0;
    $this->replication_task_stats = $s['replication_task_stats'] ?? null;
    $this->source_endpoint_arn = $s['source_endpoint_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->stop_reason = $s['stop_reason'] ?? '';
    $this->table_mappings = $s['table_mappings'] ?? '';
    $this->target_endpoint_arn = $s['target_endpoint_arn'] ?? '';
    $this->task_data = $s['task_data'] ?? '';
  }
}

class ReplicationTaskAssessmentResult {
  public string $assessment_results;
  public string $assessment_results_file;
  public string $assessment_status;
  public string $replication_task_arn;
  public string $replication_task_identifier;
  public ?TStamp $replication_task_last_assessment_date;
  public string $s_3_object_url;

  public function __construct(shape(
    ?'assessment_results' => string,
    ?'assessment_results_file' => string,
    ?'assessment_status' => string,
    ?'replication_task_arn' => string,
    ?'replication_task_identifier' => string,
    ?'replication_task_last_assessment_date' => ?TStamp,
    ?'s_3_object_url' => string,
  ) $s = shape()) {
    $this->assessment_results = $s['assessment_results'] ?? '';
    $this->assessment_results_file = $s['assessment_results_file'] ?? '';
    $this->assessment_status = $s['assessment_status'] ?? '';
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
    $this->replication_task_identifier = $s['replication_task_identifier'] ?? '';
    $this->replication_task_last_assessment_date = $s['replication_task_last_assessment_date'] ?? 0;
    $this->s_3_object_url = $s['s_3_object_url'] ?? '';
  }
}

type ReplicationTaskAssessmentResultList = vec<ReplicationTaskAssessmentResult>;

type ReplicationTaskList = vec<ReplicationTask>;

class ReplicationTaskStats {
  public ?Long $elapsed_time_millis;
  public ?TStamp $fresh_start_date;
  public ?TStamp $full_load_finish_date;
  public int $full_load_progress_percent;
  public ?TStamp $full_load_start_date;
  public ?TStamp $start_date;
  public ?TStamp $stop_date;
  public int $tables_errored;
  public int $tables_loaded;
  public int $tables_loading;
  public int $tables_queued;

  public function __construct(shape(
    ?'elapsed_time_millis' => ?Long,
    ?'fresh_start_date' => ?TStamp,
    ?'full_load_finish_date' => ?TStamp,
    ?'full_load_progress_percent' => int,
    ?'full_load_start_date' => ?TStamp,
    ?'start_date' => ?TStamp,
    ?'stop_date' => ?TStamp,
    ?'tables_errored' => int,
    ?'tables_loaded' => int,
    ?'tables_loading' => int,
    ?'tables_queued' => int,
  ) $s = shape()) {
    $this->elapsed_time_millis = $s['elapsed_time_millis'] ?? 0;
    $this->fresh_start_date = $s['fresh_start_date'] ?? 0;
    $this->full_load_finish_date = $s['full_load_finish_date'] ?? 0;
    $this->full_load_progress_percent = $s['full_load_progress_percent'] ?? 0;
    $this->full_load_start_date = $s['full_load_start_date'] ?? 0;
    $this->start_date = $s['start_date'] ?? 0;
    $this->stop_date = $s['stop_date'] ?? 0;
    $this->tables_errored = $s['tables_errored'] ?? 0;
    $this->tables_loaded = $s['tables_loaded'] ?? 0;
    $this->tables_loading = $s['tables_loading'] ?? 0;
    $this->tables_queued = $s['tables_queued'] ?? 0;
  }
}

class ResourceAlreadyExistsFault {
  public ?ExceptionMessage $message;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

type ResourceArn = string;

class ResourceNotFoundFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
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

class ResourceQuotaExceededFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class S3Settings {
  public string $bucket_folder;
  public string $bucket_name;
  public ?BooleanOptional $cdc_inserts_and_updates;
  public ?BooleanOptional $cdc_inserts_only;
  public ?CompressionTypeValue $compression_type;
  public string $csv_delimiter;
  public string $csv_row_delimiter;
  public ?DataFormatValue $data_format;
  public ?IntegerOptional $data_page_size;
  public ?IntegerOptional $dict_page_size_limit;
  public ?BooleanOptional $enable_statistics;
  public ?EncodingTypeValue $encoding_type;
  public ?EncryptionModeValue $encryption_mode;
  public string $external_table_definition;
  public ?BooleanOptional $include_op_for_full_load;
  public ?BooleanOptional $parquet_timestamp_in_millisecond;
  public ?ParquetVersionValue $parquet_version;
  public ?IntegerOptional $row_group_length;
  public string $server_side_encryption_kms_key_id;
  public string $service_access_role_arn;
  public string $timestamp_column_name;

  public function __construct(shape(
    ?'bucket_folder' => string,
    ?'bucket_name' => string,
    ?'cdc_inserts_and_updates' => ?BooleanOptional,
    ?'cdc_inserts_only' => ?BooleanOptional,
    ?'compression_type' => ?CompressionTypeValue,
    ?'csv_delimiter' => string,
    ?'csv_row_delimiter' => string,
    ?'data_format' => ?DataFormatValue,
    ?'data_page_size' => ?IntegerOptional,
    ?'dict_page_size_limit' => ?IntegerOptional,
    ?'enable_statistics' => ?BooleanOptional,
    ?'encoding_type' => ?EncodingTypeValue,
    ?'encryption_mode' => ?EncryptionModeValue,
    ?'external_table_definition' => string,
    ?'include_op_for_full_load' => ?BooleanOptional,
    ?'parquet_timestamp_in_millisecond' => ?BooleanOptional,
    ?'parquet_version' => ?ParquetVersionValue,
    ?'row_group_length' => ?IntegerOptional,
    ?'server_side_encryption_kms_key_id' => string,
    ?'service_access_role_arn' => string,
    ?'timestamp_column_name' => string,
  ) $s = shape()) {
    $this->bucket_folder = $s['bucket_folder'] ?? '';
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->cdc_inserts_and_updates = $s['cdc_inserts_and_updates'] ?? false;
    $this->cdc_inserts_only = $s['cdc_inserts_only'] ?? false;
    $this->compression_type = $s['compression_type'] ?? '';
    $this->csv_delimiter = $s['csv_delimiter'] ?? '';
    $this->csv_row_delimiter = $s['csv_row_delimiter'] ?? '';
    $this->data_format = $s['data_format'] ?? '';
    $this->data_page_size = $s['data_page_size'] ?? 0;
    $this->dict_page_size_limit = $s['dict_page_size_limit'] ?? 0;
    $this->enable_statistics = $s['enable_statistics'] ?? false;
    $this->encoding_type = $s['encoding_type'] ?? '';
    $this->encryption_mode = $s['encryption_mode'] ?? '';
    $this->external_table_definition = $s['external_table_definition'] ?? '';
    $this->include_op_for_full_load = $s['include_op_for_full_load'] ?? false;
    $this->parquet_timestamp_in_millisecond = $s['parquet_timestamp_in_millisecond'] ?? false;
    $this->parquet_version = $s['parquet_version'] ?? '';
    $this->row_group_length = $s['row_group_length'] ?? 0;
    $this->server_side_encryption_kms_key_id = $s['server_side_encryption_kms_key_id'] ?? '';
    $this->service_access_role_arn = $s['service_access_role_arn'] ?? '';
    $this->timestamp_column_name = $s['timestamp_column_name'] ?? '';
  }
}

class SNSInvalidTopicFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SNSNoAuthorizationFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SchemaList = vec<String>;

type SecretString = string;

type SourceIdsList = vec<String>;

type SourceType = string;

class StartReplicationTaskAssessmentMessage {
  public string $replication_task_arn;

  public function __construct(shape(
    ?'replication_task_arn' => string,
  ) $s = shape()) {
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
  }
}

class StartReplicationTaskAssessmentResponse {
  public ?ReplicationTask $replication_task;

  public function __construct(shape(
    ?'replication_task' => ?ReplicationTask,
  ) $s = shape()) {
    $this->replication_task = $s['replication_task'] ?? null;
  }
}

class StartReplicationTaskMessage {
  public string $cdc_start_position;
  public ?TStamp $cdc_start_time;
  public string $cdc_stop_position;
  public string $replication_task_arn;
  public ?StartReplicationTaskTypeValue $start_replication_task_type;

  public function __construct(shape(
    ?'cdc_start_position' => string,
    ?'cdc_start_time' => ?TStamp,
    ?'cdc_stop_position' => string,
    ?'replication_task_arn' => string,
    ?'start_replication_task_type' => ?StartReplicationTaskTypeValue,
  ) $s = shape()) {
    $this->cdc_start_position = $s['cdc_start_position'] ?? '';
    $this->cdc_start_time = $s['cdc_start_time'] ?? 0;
    $this->cdc_stop_position = $s['cdc_stop_position'] ?? '';
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
    $this->start_replication_task_type = $s['start_replication_task_type'] ?? '';
  }
}

class StartReplicationTaskResponse {
  public ?ReplicationTask $replication_task;

  public function __construct(shape(
    ?'replication_task' => ?ReplicationTask,
  ) $s = shape()) {
    $this->replication_task = $s['replication_task'] ?? null;
  }
}

type StartReplicationTaskTypeValue = string;

class StopReplicationTaskMessage {
  public string $replication_task_arn;

  public function __construct(shape(
    ?'replication_task_arn' => string,
  ) $s = shape()) {
    $this->replication_task_arn = $s['replication_task_arn'] ?? '';
  }
}

class StopReplicationTaskResponse {
  public ?ReplicationTask $replication_task;

  public function __construct(shape(
    ?'replication_task' => ?ReplicationTask,
  ) $s = shape()) {
    $this->replication_task = $s['replication_task'] ?? null;
  }
}

class StorageQuotaExceededFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

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
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SubnetIdentifierList = vec<String>;

type SubnetList = vec<Subnet>;

class SupportedEndpointType {
  public ?ReplicationEndpointTypeValue $endpoint_type;
  public string $engine_display_name;
  public string $engine_name;
  public string $replication_instance_engine_minimum_version;
  public bool $supports_cdc;

  public function __construct(shape(
    ?'endpoint_type' => ?ReplicationEndpointTypeValue,
    ?'engine_display_name' => string,
    ?'engine_name' => string,
    ?'replication_instance_engine_minimum_version' => string,
    ?'supports_cdc' => bool,
  ) $s = shape()) {
    $this->endpoint_type = $s['endpoint_type'] ?? '';
    $this->engine_display_name = $s['engine_display_name'] ?? '';
    $this->engine_name = $s['engine_name'] ?? '';
    $this->replication_instance_engine_minimum_version = $s['replication_instance_engine_minimum_version'] ?? '';
    $this->supports_cdc = $s['supports_cdc'] ?? false;
  }
}

type SupportedEndpointTypeList = vec<SupportedEndpointType>;

type TStamp = int;

type TableListToReload = vec<TableToReload>;

class TableStatistics {
  public ?Long $ddls;
  public ?Long $deletes;
  public ?Long $full_load_condtnl_chk_failed_rows;
  public ?TStamp $full_load_end_time;
  public ?Long $full_load_error_rows;
  public ?BooleanOptional $full_load_reloaded;
  public ?Long $full_load_rows;
  public ?TStamp $full_load_start_time;
  public ?Long $inserts;
  public ?TStamp $last_update_time;
  public string $schema_name;
  public string $table_name;
  public string $table_state;
  public ?Long $updates;
  public ?Long $validation_failed_records;
  public ?Long $validation_pending_records;
  public string $validation_state;
  public string $validation_state_details;
  public ?Long $validation_suspended_records;

  public function __construct(shape(
    ?'ddls' => ?Long,
    ?'deletes' => ?Long,
    ?'full_load_condtnl_chk_failed_rows' => ?Long,
    ?'full_load_end_time' => ?TStamp,
    ?'full_load_error_rows' => ?Long,
    ?'full_load_reloaded' => ?BooleanOptional,
    ?'full_load_rows' => ?Long,
    ?'full_load_start_time' => ?TStamp,
    ?'inserts' => ?Long,
    ?'last_update_time' => ?TStamp,
    ?'schema_name' => string,
    ?'table_name' => string,
    ?'table_state' => string,
    ?'updates' => ?Long,
    ?'validation_failed_records' => ?Long,
    ?'validation_pending_records' => ?Long,
    ?'validation_state' => string,
    ?'validation_state_details' => string,
    ?'validation_suspended_records' => ?Long,
  ) $s = shape()) {
    $this->ddls = $s['ddls'] ?? 0;
    $this->deletes = $s['deletes'] ?? 0;
    $this->full_load_condtnl_chk_failed_rows = $s['full_load_condtnl_chk_failed_rows'] ?? 0;
    $this->full_load_end_time = $s['full_load_end_time'] ?? 0;
    $this->full_load_error_rows = $s['full_load_error_rows'] ?? 0;
    $this->full_load_reloaded = $s['full_load_reloaded'] ?? false;
    $this->full_load_rows = $s['full_load_rows'] ?? 0;
    $this->full_load_start_time = $s['full_load_start_time'] ?? 0;
    $this->inserts = $s['inserts'] ?? 0;
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->schema_name = $s['schema_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->table_state = $s['table_state'] ?? '';
    $this->updates = $s['updates'] ?? 0;
    $this->validation_failed_records = $s['validation_failed_records'] ?? 0;
    $this->validation_pending_records = $s['validation_pending_records'] ?? 0;
    $this->validation_state = $s['validation_state'] ?? '';
    $this->validation_state_details = $s['validation_state_details'] ?? '';
    $this->validation_suspended_records = $s['validation_suspended_records'] ?? 0;
  }
}

type TableStatisticsList = vec<TableStatistics>;

class TableToReload {
  public string $schema_name;
  public string $table_name;

  public function __construct(shape(
    ?'schema_name' => string,
    ?'table_name' => string,
  ) $s = shape()) {
    $this->schema_name = $s['schema_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

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

class TestConnectionMessage {
  public string $endpoint_arn;
  public string $replication_instance_arn;

  public function __construct(shape(
    ?'endpoint_arn' => string,
    ?'replication_instance_arn' => string,
  ) $s = shape()) {
    $this->endpoint_arn = $s['endpoint_arn'] ?? '';
    $this->replication_instance_arn = $s['replication_instance_arn'] ?? '';
  }
}

class TestConnectionResponse {
  public ?Connection $connection;

  public function __construct(shape(
    ?'connection' => ?Connection,
  ) $s = shape()) {
    $this->connection = $s['connection'] ?? null;
  }
}

class UpgradeDependencyFailureFault {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

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

