<?hh // strict
namespace slack\aws\dynamodb;

interface dynamodb {
  public function BatchGetItem(BatchGetItemInput $in): BatchGetItemOutput;
  public function BatchWriteItem(BatchWriteItemInput $in): BatchWriteItemOutput;
  public function CreateBackup(CreateBackupInput $in): CreateBackupOutput;
  public function CreateGlobalTable(CreateGlobalTableInput $in): CreateGlobalTableOutput;
  public function CreateTable(CreateTableInput $in): CreateTableOutput;
  public function DeleteBackup(DeleteBackupInput $in): DeleteBackupOutput;
  public function DeleteItem(DeleteItemInput $in): DeleteItemOutput;
  public function DeleteTable(DeleteTableInput $in): DeleteTableOutput;
  public function DescribeBackup(DescribeBackupInput $in): DescribeBackupOutput;
  public function DescribeContinuousBackups(DescribeContinuousBackupsInput $in): DescribeContinuousBackupsOutput;
  public function DescribeContributorInsights(DescribeContributorInsightsInput $in): DescribeContributorInsightsOutput;
  public function DescribeEndpoints(DescribeEndpointsInput $in): DescribeEndpointsOutput;
  public function DescribeGlobalTable(DescribeGlobalTableInput $in): DescribeGlobalTableOutput;
  public function DescribeGlobalTableSettings(DescribeGlobalTableSettingsInput $in): DescribeGlobalTableSettingsOutput;
  public function DescribeLimits(DescribeLimitsInput $in): DescribeLimitsOutput;
  public function DescribeTable(DescribeTableInput $in): DescribeTableOutput;
  public function DescribeTableReplicaAutoScaling(DescribeTableReplicaAutoScalingInput $in): DescribeTableReplicaAutoScalingOutput;
  public function DescribeTimeToLive(DescribeTimeToLiveInput $in): DescribeTimeToLiveOutput;
  public function GetItem(GetItemInput $in): GetItemOutput;
  public function ListBackups(ListBackupsInput $in): ListBackupsOutput;
  public function ListContributorInsights(ListContributorInsightsInput $in): ListContributorInsightsOutput;
  public function ListGlobalTables(ListGlobalTablesInput $in): ListGlobalTablesOutput;
  public function ListTables(ListTablesInput $in): ListTablesOutput;
  public function ListTagsOfResource(ListTagsOfResourceInput $in): ListTagsOfResourceOutput;
  public function PutItem(PutItemInput $in): PutItemOutput;
  public function Query(QueryInput $in): QueryOutput;
  public function RestoreTableFromBackup(RestoreTableFromBackupInput $in): RestoreTableFromBackupOutput;
  public function RestoreTableToPointInTime(RestoreTableToPointInTimeInput $in): RestoreTableToPointInTimeOutput;
  public function Scan(ScanInput $in): ScanOutput;
  public function TagResource(TagResourceInput $in): TagResourceOutput;
  public function TransactGetItems(TransactGetItemsInput $in): TransactGetItemsOutput;
  public function TransactWriteItems(TransactWriteItemsInput $in): TransactWriteItemsOutput;
  public function UntagResource(UntagResourceInput $in): UntagResourceOutput;
  public function UpdateContinuousBackups(UpdateContinuousBackupsInput $in): UpdateContinuousBackupsOutput;
  public function UpdateContributorInsights(UpdateContributorInsightsInput $in): UpdateContributorInsightsOutput;
  public function UpdateGlobalTable(UpdateGlobalTableInput $in): UpdateGlobalTableOutput;
  public function UpdateGlobalTableSettings(UpdateGlobalTableSettingsInput $in): UpdateGlobalTableSettingsOutput;
  public function UpdateItem(UpdateItemInput $in): UpdateItemOutput;
  public function UpdateTable(UpdateTableInput $in): UpdateTableOutput;
  public function UpdateTableReplicaAutoScaling(UpdateTableReplicaAutoScalingInput $in): UpdateTableReplicaAutoScalingOutput;
  public function UpdateTimeToLive(UpdateTimeToLiveInput $in): UpdateTimeToLiveOutput;
}

class ArchivalSummary {
  public ?string $archival_backup_arn;
  public ?int $archival_date_time;
  public ?string $archival_reason;
  public function __construct(shape(
    ?'archival_backup_arn' => string,
    ?'archival_date_time' => int,
    ?'archival_reason' => string,
  ) $s = shape()) {
    $this->archival_backup_arn = $s['archival_backup_arn'] ?? null;
    $this->archival_date_time = $s['archival_date_time'] ?? null;
    $this->archival_reason = $s['archival_reason'] ?? null;
  }
}

class AttributeDefinition {
  public string $attribute_name;
  public string $attribute_type;
  public function __construct(shape(
    'attribute_name' => string,
    'attribute_type' => string,
  ) $s) {
    $this->attribute_name = $s['attribute_name'];
    $this->attribute_type = $s['attribute_type'];
  }
}

class AttributeValue {
  public ?string $b;
  public ?bool $bool;
  public ?vec<string> $bs;
  public ?vec<AttributeValue> $l;
  public ?dict<string, AttributeValue> $m;
  public ?string $n;
  public ?vec<string> $ns;
  public ?bool $null;
  public ?string $s;
  public ?vec<string> $ss;
  public function __construct(shape(
    ?'b' => string,
    ?'bool' => bool,
    ?'bs' => vec<string>,
    ?'l' => vec<AttributeValue>,
    ?'m' => dict<string, AttributeValue>,
    ?'n' => string,
    ?'ns' => vec<string>,
    ?'null' => bool,
    ?'s' => string,
    ?'ss' => vec<string>,
  ) $s = shape()) {
    $this->b = $s['b'] ?? null;
    $this->bool = $s['bool'] ?? null;
    $this->bs = $s['bs'] ?? null;
    $this->l = $s['l'] ?? null;
    $this->m = $s['m'] ?? null;
    $this->n = $s['n'] ?? null;
    $this->ns = $s['ns'] ?? null;
    $this->null = $s['null'] ?? null;
    $this->s = $s['s'] ?? null;
    $this->ss = $s['ss'] ?? null;
  }
}

class AttributeValueUpdate {
  public ?string $action;
  public ?AttributeValue $value;
  public function __construct(shape(
    ?'action' => string,
    ?'value' => AttributeValue,
  ) $s = shape()) {
    $this->action = $s['action'] ?? null;
    $this->value = $s['value'] ?? null;
  }
}

class AutoScalingPolicyDescription {
  public ?string $policy_name;
  public ?AutoScalingTargetTrackingScalingPolicyConfigurationDescription $target_tracking_scaling_policy_configuration;
  public function __construct(shape(
    ?'policy_name' => string,
    ?'target_tracking_scaling_policy_configuration' => AutoScalingTargetTrackingScalingPolicyConfigurationDescription,
  ) $s = shape()) {
    $this->policy_name = $s['policy_name'] ?? null;
    $this->target_tracking_scaling_policy_configuration = $s['target_tracking_scaling_policy_configuration'] ?? null;
  }
}

class AutoScalingPolicyUpdate {
  public ?string $policy_name;
  public AutoScalingTargetTrackingScalingPolicyConfigurationUpdate $target_tracking_scaling_policy_configuration;
  public function __construct(shape(
    ?'policy_name' => string,
    'target_tracking_scaling_policy_configuration' => AutoScalingTargetTrackingScalingPolicyConfigurationUpdate,
  ) $s) {
    $this->policy_name = $s['policy_name'] ?? null;
    $this->target_tracking_scaling_policy_configuration = $s['target_tracking_scaling_policy_configuration'];
  }
}

class AutoScalingSettingsDescription {
  public ?bool $auto_scaling_disabled;
  public ?string $auto_scaling_role_arn;
  public ?int $maximum_units;
  public ?int $minimum_units;
  public ?vec<AutoScalingPolicyDescription> $scaling_policies;
  public function __construct(shape(
    ?'auto_scaling_disabled' => bool,
    ?'auto_scaling_role_arn' => string,
    ?'maximum_units' => int,
    ?'minimum_units' => int,
    ?'scaling_policies' => vec<AutoScalingPolicyDescription>,
  ) $s = shape()) {
    $this->auto_scaling_disabled = $s['auto_scaling_disabled'] ?? null;
    $this->auto_scaling_role_arn = $s['auto_scaling_role_arn'] ?? null;
    $this->maximum_units = $s['maximum_units'] ?? null;
    $this->minimum_units = $s['minimum_units'] ?? null;
    $this->scaling_policies = $s['scaling_policies'] ?? null;
  }
}

class AutoScalingSettingsUpdate {
  public ?bool $auto_scaling_disabled;
  public ?string $auto_scaling_role_arn;
  public ?int $maximum_units;
  public ?int $minimum_units;
  public ?AutoScalingPolicyUpdate $scaling_policy_update;
  public function __construct(shape(
    ?'auto_scaling_disabled' => bool,
    ?'auto_scaling_role_arn' => string,
    ?'maximum_units' => int,
    ?'minimum_units' => int,
    ?'scaling_policy_update' => AutoScalingPolicyUpdate,
  ) $s = shape()) {
    $this->auto_scaling_disabled = $s['auto_scaling_disabled'] ?? null;
    $this->auto_scaling_role_arn = $s['auto_scaling_role_arn'] ?? null;
    $this->maximum_units = $s['maximum_units'] ?? null;
    $this->minimum_units = $s['minimum_units'] ?? null;
    $this->scaling_policy_update = $s['scaling_policy_update'] ?? null;
  }
}

class AutoScalingTargetTrackingScalingPolicyConfigurationDescription {
  public ?bool $disable_scale_in;
  public ?int $scale_in_cooldown;
  public ?int $scale_out_cooldown;
  public float $target_value;
  public function __construct(shape(
    ?'disable_scale_in' => bool,
    ?'scale_in_cooldown' => int,
    ?'scale_out_cooldown' => int,
    'target_value' => float,
  ) $s) {
    $this->disable_scale_in = $s['disable_scale_in'] ?? null;
    $this->scale_in_cooldown = $s['scale_in_cooldown'] ?? null;
    $this->scale_out_cooldown = $s['scale_out_cooldown'] ?? null;
    $this->target_value = $s['target_value'];
  }
}

class AutoScalingTargetTrackingScalingPolicyConfigurationUpdate {
  public ?bool $disable_scale_in;
  public ?int $scale_in_cooldown;
  public ?int $scale_out_cooldown;
  public float $target_value;
  public function __construct(shape(
    ?'disable_scale_in' => bool,
    ?'scale_in_cooldown' => int,
    ?'scale_out_cooldown' => int,
    'target_value' => float,
  ) $s) {
    $this->disable_scale_in = $s['disable_scale_in'] ?? null;
    $this->scale_in_cooldown = $s['scale_in_cooldown'] ?? null;
    $this->scale_out_cooldown = $s['scale_out_cooldown'] ?? null;
    $this->target_value = $s['target_value'];
  }
}

class BackupDescription {
  public ?BackupDetails $backup_details;
  public ?SourceTableDetails $source_table_details;
  public ?SourceTableFeatureDetails $source_table_feature_details;
  public function __construct(shape(
    ?'backup_details' => BackupDetails,
    ?'source_table_details' => SourceTableDetails,
    ?'source_table_feature_details' => SourceTableFeatureDetails,
  ) $s = shape()) {
    $this->backup_details = $s['backup_details'] ?? null;
    $this->source_table_details = $s['source_table_details'] ?? null;
    $this->source_table_feature_details = $s['source_table_feature_details'] ?? null;
  }
}

class BackupDetails {
  public string $backup_arn;
  public int $backup_creation_date_time;
  public ?int $backup_expiry_date_time;
  public string $backup_name;
  public ?int $backup_size_bytes;
  public string $backup_status;
  public string $backup_type;
  public function __construct(shape(
    'backup_arn' => string,
    'backup_creation_date_time' => int,
    ?'backup_expiry_date_time' => int,
    'backup_name' => string,
    ?'backup_size_bytes' => int,
    'backup_status' => string,
    'backup_type' => string,
  ) $s) {
    $this->backup_arn = $s['backup_arn'];
    $this->backup_creation_date_time = $s['backup_creation_date_time'];
    $this->backup_expiry_date_time = $s['backup_expiry_date_time'] ?? null;
    $this->backup_name = $s['backup_name'];
    $this->backup_size_bytes = $s['backup_size_bytes'] ?? null;
    $this->backup_status = $s['backup_status'];
    $this->backup_type = $s['backup_type'];
  }
}

class BackupSummary {
  public ?string $backup_arn;
  public ?int $backup_creation_date_time;
  public ?int $backup_expiry_date_time;
  public ?string $backup_name;
  public ?int $backup_size_bytes;
  public ?string $backup_status;
  public ?string $backup_type;
  public ?string $table_arn;
  public ?string $table_id;
  public ?string $table_name;
  public function __construct(shape(
    ?'backup_arn' => string,
    ?'backup_creation_date_time' => int,
    ?'backup_expiry_date_time' => int,
    ?'backup_name' => string,
    ?'backup_size_bytes' => int,
    ?'backup_status' => string,
    ?'backup_type' => string,
    ?'table_arn' => string,
    ?'table_id' => string,
    ?'table_name' => string,
  ) $s = shape()) {
    $this->backup_arn = $s['backup_arn'] ?? null;
    $this->backup_creation_date_time = $s['backup_creation_date_time'] ?? null;
    $this->backup_expiry_date_time = $s['backup_expiry_date_time'] ?? null;
    $this->backup_name = $s['backup_name'] ?? null;
    $this->backup_size_bytes = $s['backup_size_bytes'] ?? null;
    $this->backup_status = $s['backup_status'] ?? null;
    $this->backup_type = $s['backup_type'] ?? null;
    $this->table_arn = $s['table_arn'] ?? null;
    $this->table_id = $s['table_id'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
  }
}

class BatchGetItemInput {
  public dict<string, KeysAndAttributes> $request_items;
  public ?string $return_consumed_capacity;
  public function __construct(shape(
    'request_items' => dict<string, KeysAndAttributes>,
    ?'return_consumed_capacity' => string,
  ) $s) {
    $this->request_items = $s['request_items'];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
  }
}

class BatchGetItemOutput {
  public ?vec<ConsumedCapacity> $consumed_capacity;
  public ?dict<string, vec<dict<string, AttributeValue>>> $responses;
  public ?dict<string, KeysAndAttributes> $unprocessed_keys;
  public function __construct(shape(
    ?'consumed_capacity' => vec<ConsumedCapacity>,
    ?'responses' => dict<string, vec<dict<string, AttributeValue>>>,
    ?'unprocessed_keys' => dict<string, KeysAndAttributes>,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->responses = $s['responses'] ?? null;
    $this->unprocessed_keys = $s['unprocessed_keys'] ?? null;
  }
}

class BatchWriteItemInput {
  public dict<string, vec<WriteRequest>> $request_items;
  public ?string $return_consumed_capacity;
  public ?string $return_item_collection_metrics;
  public function __construct(shape(
    'request_items' => dict<string, vec<WriteRequest>>,
    ?'return_consumed_capacity' => string,
    ?'return_item_collection_metrics' => string,
  ) $s) {
    $this->request_items = $s['request_items'];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? null;
  }
}

class BatchWriteItemOutput {
  public ?vec<ConsumedCapacity> $consumed_capacity;
  public ?dict<string, vec<ItemCollectionMetrics>> $item_collection_metrics;
  public ?dict<string, vec<WriteRequest>> $unprocessed_items;
  public function __construct(shape(
    ?'consumed_capacity' => vec<ConsumedCapacity>,
    ?'item_collection_metrics' => dict<string, vec<ItemCollectionMetrics>>,
    ?'unprocessed_items' => dict<string, vec<WriteRequest>>,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? null;
    $this->unprocessed_items = $s['unprocessed_items'] ?? null;
  }
}

class BillingModeSummary {
  public ?string $billing_mode;
  public ?int $last_update_to_pay_per_request_date_time;
  public function __construct(shape(
    ?'billing_mode' => string,
    ?'last_update_to_pay_per_request_date_time' => int,
  ) $s = shape()) {
    $this->billing_mode = $s['billing_mode'] ?? null;
    $this->last_update_to_pay_per_request_date_time = $s['last_update_to_pay_per_request_date_time'] ?? null;
  }
}

class CancellationReason {
  public ?string $code;
  public ?dict<string, AttributeValue> $item;
  public ?string $message;
  public function __construct(shape(
    ?'code' => string,
    ?'item' => dict<string, AttributeValue>,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? null;
    $this->item = $s['item'] ?? null;
    $this->message = $s['message'] ?? null;
  }
}

class Capacity {
  public ?float $capacity_units;
  public ?float $read_capacity_units;
  public ?float $write_capacity_units;
  public function __construct(shape(
    ?'capacity_units' => float,
    ?'read_capacity_units' => float,
    ?'write_capacity_units' => float,
  ) $s = shape()) {
    $this->capacity_units = $s['capacity_units'] ?? null;
    $this->read_capacity_units = $s['read_capacity_units'] ?? null;
    $this->write_capacity_units = $s['write_capacity_units'] ?? null;
  }
}

class Condition {
  public ?vec<AttributeValue> $attribute_value_list;
  public string $comparison_operator;
  public function __construct(shape(
    ?'attribute_value_list' => vec<AttributeValue>,
    'comparison_operator' => string,
  ) $s) {
    $this->attribute_value_list = $s['attribute_value_list'] ?? null;
    $this->comparison_operator = $s['comparison_operator'];
  }
}

class ConditionCheck {
  public string $condition_expression;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public dict<string, AttributeValue> $key;
  public ?string $return_values_on_condition_check_failure;
  public string $table_name;
  public function __construct(shape(
    'condition_expression' => string,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    'key' => dict<string, AttributeValue>,
    ?'return_values_on_condition_check_failure' => string,
    'table_name' => string,
  ) $s) {
    $this->condition_expression = $s['condition_expression'];
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->key = $s['key'];
    $this->return_values_on_condition_check_failure = $s['return_values_on_condition_check_failure'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class ConsumedCapacity {
  public ?float $capacity_units;
  public ?dict<string, Capacity> $global_secondary_indexes;
  public ?dict<string, Capacity> $local_secondary_indexes;
  public ?float $read_capacity_units;
  public ?Capacity $table;
  public ?string $table_name;
  public ?float $write_capacity_units;
  public function __construct(shape(
    ?'capacity_units' => float,
    ?'global_secondary_indexes' => dict<string, Capacity>,
    ?'local_secondary_indexes' => dict<string, Capacity>,
    ?'read_capacity_units' => float,
    ?'table' => Capacity,
    ?'table_name' => string,
    ?'write_capacity_units' => float,
  ) $s = shape()) {
    $this->capacity_units = $s['capacity_units'] ?? null;
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? null;
    $this->local_secondary_indexes = $s['local_secondary_indexes'] ?? null;
    $this->read_capacity_units = $s['read_capacity_units'] ?? null;
    $this->table = $s['table'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
    $this->write_capacity_units = $s['write_capacity_units'] ?? null;
  }
}

class ContinuousBackupsDescription {
  public string $continuous_backups_status;
  public ?PointInTimeRecoveryDescription $point_in_time_recovery_description;
  public function __construct(shape(
    'continuous_backups_status' => string,
    ?'point_in_time_recovery_description' => PointInTimeRecoveryDescription,
  ) $s) {
    $this->continuous_backups_status = $s['continuous_backups_status'];
    $this->point_in_time_recovery_description = $s['point_in_time_recovery_description'] ?? null;
  }
}

class ContributorInsightsSummary {
  public ?string $contributor_insights_status;
  public ?string $index_name;
  public ?string $table_name;
  public function __construct(shape(
    ?'contributor_insights_status' => string,
    ?'index_name' => string,
    ?'table_name' => string,
  ) $s = shape()) {
    $this->contributor_insights_status = $s['contributor_insights_status'] ?? null;
    $this->index_name = $s['index_name'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
  }
}

class CreateBackupInput {
  public string $backup_name;
  public string $table_name;
  public function __construct(shape(
    'backup_name' => string,
    'table_name' => string,
  ) $s) {
    $this->backup_name = $s['backup_name'];
    $this->table_name = $s['table_name'];
  }
}

class CreateBackupOutput {
  public ?BackupDetails $backup_details;
  public function __construct(shape(
    ?'backup_details' => BackupDetails,
  ) $s = shape()) {
    $this->backup_details = $s['backup_details'] ?? null;
  }
}

class CreateGlobalSecondaryIndexAction {
  public string $index_name;
  public vec<KeySchemaElement> $key_schema;
  public Projection $projection;
  public ?ProvisionedThroughput $provisioned_throughput;
  public function __construct(shape(
    'index_name' => string,
    'key_schema' => vec<KeySchemaElement>,
    'projection' => Projection,
    ?'provisioned_throughput' => ProvisionedThroughput,
  ) $s) {
    $this->index_name = $s['index_name'];
    $this->key_schema = $s['key_schema'];
    $this->projection = $s['projection'];
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

class CreateGlobalTableInput {
  public string $global_table_name;
  public vec<Replica> $replication_group;
  public function __construct(shape(
    'global_table_name' => string,
    'replication_group' => vec<Replica>,
  ) $s) {
    $this->global_table_name = $s['global_table_name'];
    $this->replication_group = $s['replication_group'];
  }
}

class CreateGlobalTableOutput {
  public ?GlobalTableDescription $global_table_description;
  public function __construct(shape(
    ?'global_table_description' => GlobalTableDescription,
  ) $s = shape()) {
    $this->global_table_description = $s['global_table_description'] ?? null;
  }
}

class CreateReplicaAction {
  public string $region_name;
  public function __construct(shape(
    'region_name' => string,
  ) $s) {
    $this->region_name = $s['region_name'];
  }
}

class CreateReplicationGroupMemberAction {
  public ?vec<ReplicaGlobalSecondaryIndex> $global_secondary_indexes;
  public ?string $kms_master_key_id;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;
  public string $region_name;
  public function __construct(shape(
    ?'global_secondary_indexes' => vec<ReplicaGlobalSecondaryIndex>,
    ?'kms_master_key_id' => string,
    ?'provisioned_throughput_override' => ProvisionedThroughputOverride,
    'region_name' => string,
  ) $s) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? null;
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? null;
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->region_name = $s['region_name'];
  }
}

class CreateTableInput {
  public vec<AttributeDefinition> $attribute_definitions;
  public ?string $billing_mode;
  public ?vec<GlobalSecondaryIndex> $global_secondary_indexes;
  public vec<KeySchemaElement> $key_schema;
  public ?vec<LocalSecondaryIndex> $local_secondary_indexes;
  public ?ProvisionedThroughput $provisioned_throughput;
  public ?SSESpecification $sse_specification;
  public ?StreamSpecification $stream_specification;
  public string $table_name;
  public ?vec<Tag> $tags;
  public function __construct(shape(
    'attribute_definitions' => vec<AttributeDefinition>,
    ?'billing_mode' => string,
    ?'global_secondary_indexes' => vec<GlobalSecondaryIndex>,
    'key_schema' => vec<KeySchemaElement>,
    ?'local_secondary_indexes' => vec<LocalSecondaryIndex>,
    ?'provisioned_throughput' => ProvisionedThroughput,
    ?'sse_specification' => SSESpecification,
    ?'stream_specification' => StreamSpecification,
    'table_name' => string,
    ?'tags' => vec<Tag>,
  ) $s) {
    $this->attribute_definitions = $s['attribute_definitions'];
    $this->billing_mode = $s['billing_mode'] ?? null;
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? null;
    $this->key_schema = $s['key_schema'];
    $this->local_secondary_indexes = $s['local_secondary_indexes'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
    $this->sse_specification = $s['sse_specification'] ?? null;
    $this->stream_specification = $s['stream_specification'] ?? null;
    $this->table_name = $s['table_name'];
    $this->tags = $s['tags'] ?? null;
  }
}

class CreateTableOutput {
  public ?TableDescription $table_description;
  public function __construct(shape(
    ?'table_description' => TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

class Delete {
  public ?string $condition_expression;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public dict<string, AttributeValue> $key;
  public ?string $return_values_on_condition_check_failure;
  public string $table_name;
  public function __construct(shape(
    ?'condition_expression' => string,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    'key' => dict<string, AttributeValue>,
    ?'return_values_on_condition_check_failure' => string,
    'table_name' => string,
  ) $s) {
    $this->condition_expression = $s['condition_expression'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->key = $s['key'];
    $this->return_values_on_condition_check_failure = $s['return_values_on_condition_check_failure'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class DeleteBackupInput {
  public string $backup_arn;
  public function __construct(shape(
    'backup_arn' => string,
  ) $s) {
    $this->backup_arn = $s['backup_arn'];
  }
}

class DeleteBackupOutput {
  public ?BackupDescription $backup_description;
  public function __construct(shape(
    ?'backup_description' => BackupDescription,
  ) $s = shape()) {
    $this->backup_description = $s['backup_description'] ?? null;
  }
}

class DeleteGlobalSecondaryIndexAction {
  public string $index_name;
  public function __construct(shape(
    'index_name' => string,
  ) $s) {
    $this->index_name = $s['index_name'];
  }
}

class DeleteItemInput {
  public ?string $condition_expression;
  public ?string $conditional_operator;
  public ?dict<string, ExpectedAttributeValue> $expected;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public dict<string, AttributeValue> $key;
  public ?string $return_consumed_capacity;
  public ?string $return_item_collection_metrics;
  public ?string $return_values;
  public string $table_name;
  public function __construct(shape(
    ?'condition_expression' => string,
    ?'conditional_operator' => string,
    ?'expected' => dict<string, ExpectedAttributeValue>,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    'key' => dict<string, AttributeValue>,
    ?'return_consumed_capacity' => string,
    ?'return_item_collection_metrics' => string,
    ?'return_values' => string,
    'table_name' => string,
  ) $s) {
    $this->condition_expression = $s['condition_expression'] ?? null;
    $this->conditional_operator = $s['conditional_operator'] ?? null;
    $this->expected = $s['expected'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->key = $s['key'];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? null;
    $this->return_values = $s['return_values'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class DeleteItemOutput {
  public ?dict<string, AttributeValue> $attributes;
  public ?ConsumedCapacity $consumed_capacity;
  public ?ItemCollectionMetrics $item_collection_metrics;
  public function __construct(shape(
    ?'attributes' => dict<string, AttributeValue>,
    ?'consumed_capacity' => ConsumedCapacity,
    ?'item_collection_metrics' => ItemCollectionMetrics,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? null;
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? null;
  }
}

class DeleteReplicaAction {
  public string $region_name;
  public function __construct(shape(
    'region_name' => string,
  ) $s) {
    $this->region_name = $s['region_name'];
  }
}

class DeleteReplicationGroupMemberAction {
  public string $region_name;
  public function __construct(shape(
    'region_name' => string,
  ) $s) {
    $this->region_name = $s['region_name'];
  }
}

class DeleteRequest {
  public dict<string, AttributeValue> $key;
  public function __construct(shape(
    'key' => dict<string, AttributeValue>,
  ) $s) {
    $this->key = $s['key'];
  }
}

class DeleteTableInput {
  public string $table_name;
  public function __construct(shape(
    'table_name' => string,
  ) $s) {
    $this->table_name = $s['table_name'];
  }
}

class DeleteTableOutput {
  public ?TableDescription $table_description;
  public function __construct(shape(
    ?'table_description' => TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

class DescribeBackupInput {
  public string $backup_arn;
  public function __construct(shape(
    'backup_arn' => string,
  ) $s) {
    $this->backup_arn = $s['backup_arn'];
  }
}

class DescribeBackupOutput {
  public ?BackupDescription $backup_description;
  public function __construct(shape(
    ?'backup_description' => BackupDescription,
  ) $s = shape()) {
    $this->backup_description = $s['backup_description'] ?? null;
  }
}

class DescribeContinuousBackupsInput {
  public string $table_name;
  public function __construct(shape(
    'table_name' => string,
  ) $s) {
    $this->table_name = $s['table_name'];
  }
}

class DescribeContinuousBackupsOutput {
  public ?ContinuousBackupsDescription $continuous_backups_description;
  public function __construct(shape(
    ?'continuous_backups_description' => ContinuousBackupsDescription,
  ) $s = shape()) {
    $this->continuous_backups_description = $s['continuous_backups_description'] ?? null;
  }
}

class DescribeContributorInsightsInput {
  public ?string $index_name;
  public string $table_name;
  public function __construct(shape(
    ?'index_name' => string,
    'table_name' => string,
  ) $s) {
    $this->index_name = $s['index_name'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class DescribeContributorInsightsOutput {
  public ?vec<string> $contributor_insights_rule_list;
  public ?string $contributor_insights_status;
  public ?FailureException $failure_exception;
  public ?string $index_name;
  public ?int $last_update_date_time;
  public ?string $table_name;
  public function __construct(shape(
    ?'contributor_insights_rule_list' => vec<string>,
    ?'contributor_insights_status' => string,
    ?'failure_exception' => FailureException,
    ?'index_name' => string,
    ?'last_update_date_time' => int,
    ?'table_name' => string,
  ) $s = shape()) {
    $this->contributor_insights_rule_list = $s['contributor_insights_rule_list'] ?? null;
    $this->contributor_insights_status = $s['contributor_insights_status'] ?? null;
    $this->failure_exception = $s['failure_exception'] ?? null;
    $this->index_name = $s['index_name'] ?? null;
    $this->last_update_date_time = $s['last_update_date_time'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
  }
}

class DescribeEndpointsInput {
  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeEndpointsOutput {
  public vec<Endpoint> $endpoints;
  public function __construct(shape(
    'endpoints' => vec<Endpoint>,
  ) $s) {
    $this->endpoints = $s['endpoints'];
  }
}

class DescribeGlobalTableInput {
  public string $global_table_name;
  public function __construct(shape(
    'global_table_name' => string,
  ) $s) {
    $this->global_table_name = $s['global_table_name'];
  }
}

class DescribeGlobalTableOutput {
  public ?GlobalTableDescription $global_table_description;
  public function __construct(shape(
    ?'global_table_description' => GlobalTableDescription,
  ) $s = shape()) {
    $this->global_table_description = $s['global_table_description'] ?? null;
  }
}

class DescribeGlobalTableSettingsInput {
  public string $global_table_name;
  public function __construct(shape(
    'global_table_name' => string,
  ) $s) {
    $this->global_table_name = $s['global_table_name'];
  }
}

class DescribeGlobalTableSettingsOutput {
  public ?string $global_table_name;
  public ?vec<ReplicaSettingsDescription> $replica_settings;
  public function __construct(shape(
    ?'global_table_name' => string,
    ?'replica_settings' => vec<ReplicaSettingsDescription>,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? null;
    $this->replica_settings = $s['replica_settings'] ?? null;
  }
}

class DescribeLimitsInput {
  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeLimitsOutput {
  public ?int $account_max_read_capacity_units;
  public ?int $account_max_write_capacity_units;
  public ?int $table_max_read_capacity_units;
  public ?int $table_max_write_capacity_units;
  public function __construct(shape(
    ?'account_max_read_capacity_units' => int,
    ?'account_max_write_capacity_units' => int,
    ?'table_max_read_capacity_units' => int,
    ?'table_max_write_capacity_units' => int,
  ) $s = shape()) {
    $this->account_max_read_capacity_units = $s['account_max_read_capacity_units'] ?? null;
    $this->account_max_write_capacity_units = $s['account_max_write_capacity_units'] ?? null;
    $this->table_max_read_capacity_units = $s['table_max_read_capacity_units'] ?? null;
    $this->table_max_write_capacity_units = $s['table_max_write_capacity_units'] ?? null;
  }
}

class DescribeTableInput {
  public string $table_name;
  public function __construct(shape(
    'table_name' => string,
  ) $s) {
    $this->table_name = $s['table_name'];
  }
}

class DescribeTableOutput {
  public ?TableDescription $table;
  public function __construct(shape(
    ?'table' => TableDescription,
  ) $s = shape()) {
    $this->table = $s['table'] ?? null;
  }
}

class DescribeTableReplicaAutoScalingInput {
  public string $table_name;
  public function __construct(shape(
    'table_name' => string,
  ) $s) {
    $this->table_name = $s['table_name'];
  }
}

class DescribeTableReplicaAutoScalingOutput {
  public ?TableAutoScalingDescription $table_auto_scaling_description;
  public function __construct(shape(
    ?'table_auto_scaling_description' => TableAutoScalingDescription,
  ) $s = shape()) {
    $this->table_auto_scaling_description = $s['table_auto_scaling_description'] ?? null;
  }
}

class DescribeTimeToLiveInput {
  public string $table_name;
  public function __construct(shape(
    'table_name' => string,
  ) $s) {
    $this->table_name = $s['table_name'];
  }
}

class DescribeTimeToLiveOutput {
  public ?TimeToLiveDescription $time_to_live_description;
  public function __construct(shape(
    ?'time_to_live_description' => TimeToLiveDescription,
  ) $s = shape()) {
    $this->time_to_live_description = $s['time_to_live_description'] ?? null;
  }
}

class Endpoint {
  public string $address;
  public int $cache_period_in_minutes;
  public function __construct(shape(
    'address' => string,
    'cache_period_in_minutes' => int,
  ) $s) {
    $this->address = $s['address'];
    $this->cache_period_in_minutes = $s['cache_period_in_minutes'];
  }
}

class ExpectedAttributeValue {
  public ?vec<AttributeValue> $attribute_value_list;
  public ?string $comparison_operator;
  public ?bool $exists;
  public ?AttributeValue $value;
  public function __construct(shape(
    ?'attribute_value_list' => vec<AttributeValue>,
    ?'comparison_operator' => string,
    ?'exists' => bool,
    ?'value' => AttributeValue,
  ) $s = shape()) {
    $this->attribute_value_list = $s['attribute_value_list'] ?? null;
    $this->comparison_operator = $s['comparison_operator'] ?? null;
    $this->exists = $s['exists'] ?? null;
    $this->value = $s['value'] ?? null;
  }
}

class FailureException {
  public ?string $exception_description;
  public ?string $exception_name;
  public function __construct(shape(
    ?'exception_description' => string,
    ?'exception_name' => string,
  ) $s = shape()) {
    $this->exception_description = $s['exception_description'] ?? null;
    $this->exception_name = $s['exception_name'] ?? null;
  }
}

class Get {
  public ?dict<string, string> $expression_attribute_names;
  public dict<string, AttributeValue> $key;
  public ?string $projection_expression;
  public string $table_name;
  public function __construct(shape(
    ?'expression_attribute_names' => dict<string, string>,
    'key' => dict<string, AttributeValue>,
    ?'projection_expression' => string,
    'table_name' => string,
  ) $s) {
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->key = $s['key'];
    $this->projection_expression = $s['projection_expression'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class GetItemInput {
  public ?vec<string> $attributes_to_get;
  public ?bool $consistent_read;
  public ?dict<string, string> $expression_attribute_names;
  public dict<string, AttributeValue> $key;
  public ?string $projection_expression;
  public ?string $return_consumed_capacity;
  public string $table_name;
  public function __construct(shape(
    ?'attributes_to_get' => vec<string>,
    ?'consistent_read' => bool,
    ?'expression_attribute_names' => dict<string, string>,
    'key' => dict<string, AttributeValue>,
    ?'projection_expression' => string,
    ?'return_consumed_capacity' => string,
    'table_name' => string,
  ) $s) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? null;
    $this->consistent_read = $s['consistent_read'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->key = $s['key'];
    $this->projection_expression = $s['projection_expression'] ?? null;
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class GetItemOutput {
  public ?ConsumedCapacity $consumed_capacity;
  public ?dict<string, AttributeValue> $item;
  public function __construct(shape(
    ?'consumed_capacity' => ConsumedCapacity,
    ?'item' => dict<string, AttributeValue>,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item = $s['item'] ?? null;
  }
}

class GlobalSecondaryIndex {
  public string $index_name;
  public vec<KeySchemaElement> $key_schema;
  public Projection $projection;
  public ?ProvisionedThroughput $provisioned_throughput;
  public function __construct(shape(
    'index_name' => string,
    'key_schema' => vec<KeySchemaElement>,
    'projection' => Projection,
    ?'provisioned_throughput' => ProvisionedThroughput,
  ) $s) {
    $this->index_name = $s['index_name'];
    $this->key_schema = $s['key_schema'];
    $this->projection = $s['projection'];
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

class GlobalSecondaryIndexAutoScalingUpdate {
  public ?string $index_name;
  public ?AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_update;
  public function __construct(shape(
    ?'index_name' => string,
    ?'provisioned_write_capacity_auto_scaling_update' => AutoScalingSettingsUpdate,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? null;
    $this->provisioned_write_capacity_auto_scaling_update = $s['provisioned_write_capacity_auto_scaling_update'] ?? null;
  }
}

class GlobalSecondaryIndexDescription {
  public ?bool $backfilling;
  public ?string $index_arn;
  public ?string $index_name;
  public ?int $index_size_bytes;
  public ?string $index_status;
  public ?int $item_count;
  public ?vec<KeySchemaElement> $key_schema;
  public ?Projection $projection;
  public ?ProvisionedThroughputDescription $provisioned_throughput;
  public function __construct(shape(
    ?'backfilling' => bool,
    ?'index_arn' => string,
    ?'index_name' => string,
    ?'index_size_bytes' => int,
    ?'index_status' => string,
    ?'item_count' => int,
    ?'key_schema' => vec<KeySchemaElement>,
    ?'projection' => Projection,
    ?'provisioned_throughput' => ProvisionedThroughputDescription,
  ) $s = shape()) {
    $this->backfilling = $s['backfilling'] ?? null;
    $this->index_arn = $s['index_arn'] ?? null;
    $this->index_name = $s['index_name'] ?? null;
    $this->index_size_bytes = $s['index_size_bytes'] ?? null;
    $this->index_status = $s['index_status'] ?? null;
    $this->item_count = $s['item_count'] ?? null;
    $this->key_schema = $s['key_schema'] ?? null;
    $this->projection = $s['projection'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

class GlobalSecondaryIndexInfo {
  public ?string $index_name;
  public ?vec<KeySchemaElement> $key_schema;
  public ?Projection $projection;
  public ?ProvisionedThroughput $provisioned_throughput;
  public function __construct(shape(
    ?'index_name' => string,
    ?'key_schema' => vec<KeySchemaElement>,
    ?'projection' => Projection,
    ?'provisioned_throughput' => ProvisionedThroughput,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? null;
    $this->key_schema = $s['key_schema'] ?? null;
    $this->projection = $s['projection'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

class GlobalSecondaryIndexUpdate {
  public ?CreateGlobalSecondaryIndexAction $create;
  public ?DeleteGlobalSecondaryIndexAction $delete;
  public ?UpdateGlobalSecondaryIndexAction $update;
  public function __construct(shape(
    ?'create' => CreateGlobalSecondaryIndexAction,
    ?'delete' => DeleteGlobalSecondaryIndexAction,
    ?'update' => UpdateGlobalSecondaryIndexAction,
  ) $s = shape()) {
    $this->create = $s['create'] ?? null;
    $this->delete = $s['delete'] ?? null;
    $this->update = $s['update'] ?? null;
  }
}

class GlobalTable {
  public ?string $global_table_name;
  public ?vec<Replica> $replication_group;
  public function __construct(shape(
    ?'global_table_name' => string,
    ?'replication_group' => vec<Replica>,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? null;
    $this->replication_group = $s['replication_group'] ?? null;
  }
}

class GlobalTableDescription {
  public ?int $creation_date_time;
  public ?string $global_table_arn;
  public ?string $global_table_name;
  public ?string $global_table_status;
  public ?vec<ReplicaDescription> $replication_group;
  public function __construct(shape(
    ?'creation_date_time' => int,
    ?'global_table_arn' => string,
    ?'global_table_name' => string,
    ?'global_table_status' => string,
    ?'replication_group' => vec<ReplicaDescription>,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? null;
    $this->global_table_arn = $s['global_table_arn'] ?? null;
    $this->global_table_name = $s['global_table_name'] ?? null;
    $this->global_table_status = $s['global_table_status'] ?? null;
    $this->replication_group = $s['replication_group'] ?? null;
  }
}

class GlobalTableGlobalSecondaryIndexSettingsUpdate {
  public string $index_name;
  public ?AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_settings_update;
  public ?int $provisioned_write_capacity_units;
  public function __construct(shape(
    'index_name' => string,
    ?'provisioned_write_capacity_auto_scaling_settings_update' => AutoScalingSettingsUpdate,
    ?'provisioned_write_capacity_units' => int,
  ) $s) {
    $this->index_name = $s['index_name'];
    $this->provisioned_write_capacity_auto_scaling_settings_update = $s['provisioned_write_capacity_auto_scaling_settings_update'] ?? null;
    $this->provisioned_write_capacity_units = $s['provisioned_write_capacity_units'] ?? null;
  }
}

class ItemCollectionMetrics {
  public ?dict<string, AttributeValue> $item_collection_key;
  public ?vec<float> $size_estimate_range_gb;
  public function __construct(shape(
    ?'item_collection_key' => dict<string, AttributeValue>,
    ?'size_estimate_range_gb' => vec<float>,
  ) $s = shape()) {
    $this->item_collection_key = $s['item_collection_key'] ?? null;
    $this->size_estimate_range_gb = $s['size_estimate_range_gb'] ?? null;
  }
}

class ItemResponse {
  public ?dict<string, AttributeValue> $item;
  public function __construct(shape(
    ?'item' => dict<string, AttributeValue>,
  ) $s = shape()) {
    $this->item = $s['item'] ?? null;
  }
}

class KeySchemaElement {
  public string $attribute_name;
  public string $key_type;
  public function __construct(shape(
    'attribute_name' => string,
    'key_type' => string,
  ) $s) {
    $this->attribute_name = $s['attribute_name'];
    $this->key_type = $s['key_type'];
  }
}

class KeysAndAttributes {
  public ?vec<string> $attributes_to_get;
  public ?bool $consistent_read;
  public ?dict<string, string> $expression_attribute_names;
  public vec<dict<string, AttributeValue>> $keys;
  public ?string $projection_expression;
  public function __construct(shape(
    ?'attributes_to_get' => vec<string>,
    ?'consistent_read' => bool,
    ?'expression_attribute_names' => dict<string, string>,
    'keys' => vec<dict<string, AttributeValue>>,
    ?'projection_expression' => string,
  ) $s) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? null;
    $this->consistent_read = $s['consistent_read'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->keys = $s['keys'];
    $this->projection_expression = $s['projection_expression'] ?? null;
  }
}

class ListBackupsInput {
  public ?string $backup_type;
  public ?string $exclusive_start_backup_arn;
  public ?int $limit;
  public ?string $table_name;
  public ?int $time_range_lower_bound;
  public ?int $time_range_upper_bound;
  public function __construct(shape(
    ?'backup_type' => string,
    ?'exclusive_start_backup_arn' => string,
    ?'limit' => int,
    ?'table_name' => string,
    ?'time_range_lower_bound' => int,
    ?'time_range_upper_bound' => int,
  ) $s = shape()) {
    $this->backup_type = $s['backup_type'] ?? null;
    $this->exclusive_start_backup_arn = $s['exclusive_start_backup_arn'] ?? null;
    $this->limit = $s['limit'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
    $this->time_range_lower_bound = $s['time_range_lower_bound'] ?? null;
    $this->time_range_upper_bound = $s['time_range_upper_bound'] ?? null;
  }
}

class ListBackupsOutput {
  public ?vec<BackupSummary> $backup_summaries;
  public ?string $last_evaluated_backup_arn;
  public function __construct(shape(
    ?'backup_summaries' => vec<BackupSummary>,
    ?'last_evaluated_backup_arn' => string,
  ) $s = shape()) {
    $this->backup_summaries = $s['backup_summaries'] ?? null;
    $this->last_evaluated_backup_arn = $s['last_evaluated_backup_arn'] ?? null;
  }
}

class ListContributorInsightsInput {
  public ?int $max_results;
  public ?string $next_token;
  public ?string $table_name;
  public function __construct(shape(
    ?'max_results' => int,
    ?'next_token' => string,
    ?'table_name' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? null;
    $this->next_token = $s['next_token'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
  }
}

class ListContributorInsightsOutput {
  public ?vec<ContributorInsightsSummary> $contributor_insights_summaries;
  public ?string $next_token;
  public function __construct(shape(
    ?'contributor_insights_summaries' => vec<ContributorInsightsSummary>,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->contributor_insights_summaries = $s['contributor_insights_summaries'] ?? null;
    $this->next_token = $s['next_token'] ?? null;
  }
}

class ListGlobalTablesInput {
  public ?string $exclusive_start_global_table_name;
  public ?int $limit;
  public ?string $region_name;
  public function __construct(shape(
    ?'exclusive_start_global_table_name' => string,
    ?'limit' => int,
    ?'region_name' => string,
  ) $s = shape()) {
    $this->exclusive_start_global_table_name = $s['exclusive_start_global_table_name'] ?? null;
    $this->limit = $s['limit'] ?? null;
    $this->region_name = $s['region_name'] ?? null;
  }
}

class ListGlobalTablesOutput {
  public ?vec<GlobalTable> $global_tables;
  public ?string $last_evaluated_global_table_name;
  public function __construct(shape(
    ?'global_tables' => vec<GlobalTable>,
    ?'last_evaluated_global_table_name' => string,
  ) $s = shape()) {
    $this->global_tables = $s['global_tables'] ?? null;
    $this->last_evaluated_global_table_name = $s['last_evaluated_global_table_name'] ?? null;
  }
}

class ListTablesInput {
  public ?string $exclusive_start_table_name;
  public ?int $limit;
  public function __construct(shape(
    ?'exclusive_start_table_name' => string,
    ?'limit' => int,
  ) $s = shape()) {
    $this->exclusive_start_table_name = $s['exclusive_start_table_name'] ?? null;
    $this->limit = $s['limit'] ?? null;
  }
}

class ListTablesOutput {
  public ?string $last_evaluated_table_name;
  public ?vec<string> $table_names;
  public function __construct(shape(
    ?'last_evaluated_table_name' => string,
    ?'table_names' => vec<string>,
  ) $s = shape()) {
    $this->last_evaluated_table_name = $s['last_evaluated_table_name'] ?? null;
    $this->table_names = $s['table_names'] ?? null;
  }
}

class ListTagsOfResourceInput {
  public ?string $next_token;
  public string $resource_arn;
  public function __construct(shape(
    ?'next_token' => string,
    'resource_arn' => string,
  ) $s) {
    $this->next_token = $s['next_token'] ?? null;
    $this->resource_arn = $s['resource_arn'];
  }
}

class ListTagsOfResourceOutput {
  public ?string $next_token;
  public ?vec<Tag> $tags;
  public function __construct(shape(
    ?'next_token' => string,
    ?'tags' => vec<Tag>,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? null;
    $this->tags = $s['tags'] ?? null;
  }
}

class LocalSecondaryIndex {
  public string $index_name;
  public vec<KeySchemaElement> $key_schema;
  public Projection $projection;
  public function __construct(shape(
    'index_name' => string,
    'key_schema' => vec<KeySchemaElement>,
    'projection' => Projection,
  ) $s) {
    $this->index_name = $s['index_name'];
    $this->key_schema = $s['key_schema'];
    $this->projection = $s['projection'];
  }
}

class LocalSecondaryIndexDescription {
  public ?string $index_arn;
  public ?string $index_name;
  public ?int $index_size_bytes;
  public ?int $item_count;
  public ?vec<KeySchemaElement> $key_schema;
  public ?Projection $projection;
  public function __construct(shape(
    ?'index_arn' => string,
    ?'index_name' => string,
    ?'index_size_bytes' => int,
    ?'item_count' => int,
    ?'key_schema' => vec<KeySchemaElement>,
    ?'projection' => Projection,
  ) $s = shape()) {
    $this->index_arn = $s['index_arn'] ?? null;
    $this->index_name = $s['index_name'] ?? null;
    $this->index_size_bytes = $s['index_size_bytes'] ?? null;
    $this->item_count = $s['item_count'] ?? null;
    $this->key_schema = $s['key_schema'] ?? null;
    $this->projection = $s['projection'] ?? null;
  }
}

class LocalSecondaryIndexInfo {
  public ?string $index_name;
  public ?vec<KeySchemaElement> $key_schema;
  public ?Projection $projection;
  public function __construct(shape(
    ?'index_name' => string,
    ?'key_schema' => vec<KeySchemaElement>,
    ?'projection' => Projection,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? null;
    $this->key_schema = $s['key_schema'] ?? null;
    $this->projection = $s['projection'] ?? null;
  }
}

class PointInTimeRecoveryDescription {
  public ?int $earliest_restorable_date_time;
  public ?int $latest_restorable_date_time;
  public ?string $point_in_time_recovery_status;
  public function __construct(shape(
    ?'earliest_restorable_date_time' => int,
    ?'latest_restorable_date_time' => int,
    ?'point_in_time_recovery_status' => string,
  ) $s = shape()) {
    $this->earliest_restorable_date_time = $s['earliest_restorable_date_time'] ?? null;
    $this->latest_restorable_date_time = $s['latest_restorable_date_time'] ?? null;
    $this->point_in_time_recovery_status = $s['point_in_time_recovery_status'] ?? null;
  }
}

class PointInTimeRecoverySpecification {
  public bool $point_in_time_recovery_enabled;
  public function __construct(shape(
    'point_in_time_recovery_enabled' => bool,
  ) $s) {
    $this->point_in_time_recovery_enabled = $s['point_in_time_recovery_enabled'];
  }
}

class Projection {
  public ?vec<string> $non_key_attributes;
  public ?string $projection_type;
  public function __construct(shape(
    ?'non_key_attributes' => vec<string>,
    ?'projection_type' => string,
  ) $s = shape()) {
    $this->non_key_attributes = $s['non_key_attributes'] ?? null;
    $this->projection_type = $s['projection_type'] ?? null;
  }
}

class ProvisionedThroughput {
  public int $read_capacity_units;
  public int $write_capacity_units;
  public function __construct(shape(
    'read_capacity_units' => int,
    'write_capacity_units' => int,
  ) $s) {
    $this->read_capacity_units = $s['read_capacity_units'];
    $this->write_capacity_units = $s['write_capacity_units'];
  }
}

class ProvisionedThroughputDescription {
  public ?int $last_decrease_date_time;
  public ?int $last_increase_date_time;
  public ?int $number_of_decreases_today;
  public ?int $read_capacity_units;
  public ?int $write_capacity_units;
  public function __construct(shape(
    ?'last_decrease_date_time' => int,
    ?'last_increase_date_time' => int,
    ?'number_of_decreases_today' => int,
    ?'read_capacity_units' => int,
    ?'write_capacity_units' => int,
  ) $s = shape()) {
    $this->last_decrease_date_time = $s['last_decrease_date_time'] ?? null;
    $this->last_increase_date_time = $s['last_increase_date_time'] ?? null;
    $this->number_of_decreases_today = $s['number_of_decreases_today'] ?? null;
    $this->read_capacity_units = $s['read_capacity_units'] ?? null;
    $this->write_capacity_units = $s['write_capacity_units'] ?? null;
  }
}

class ProvisionedThroughputOverride {
  public ?int $read_capacity_units;
  public function __construct(shape(
    ?'read_capacity_units' => int,
  ) $s = shape()) {
    $this->read_capacity_units = $s['read_capacity_units'] ?? null;
  }
}

class Put {
  public ?string $condition_expression;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public dict<string, AttributeValue> $item;
  public ?string $return_values_on_condition_check_failure;
  public string $table_name;
  public function __construct(shape(
    ?'condition_expression' => string,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    'item' => dict<string, AttributeValue>,
    ?'return_values_on_condition_check_failure' => string,
    'table_name' => string,
  ) $s) {
    $this->condition_expression = $s['condition_expression'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->item = $s['item'];
    $this->return_values_on_condition_check_failure = $s['return_values_on_condition_check_failure'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class PutItemInput {
  public ?string $condition_expression;
  public ?string $conditional_operator;
  public ?dict<string, ExpectedAttributeValue> $expected;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public dict<string, AttributeValue> $item;
  public ?string $return_consumed_capacity;
  public ?string $return_item_collection_metrics;
  public ?string $return_values;
  public string $table_name;
  public function __construct(shape(
    ?'condition_expression' => string,
    ?'conditional_operator' => string,
    ?'expected' => dict<string, ExpectedAttributeValue>,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    'item' => dict<string, AttributeValue>,
    ?'return_consumed_capacity' => string,
    ?'return_item_collection_metrics' => string,
    ?'return_values' => string,
    'table_name' => string,
  ) $s) {
    $this->condition_expression = $s['condition_expression'] ?? null;
    $this->conditional_operator = $s['conditional_operator'] ?? null;
    $this->expected = $s['expected'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->item = $s['item'];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? null;
    $this->return_values = $s['return_values'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class PutItemOutput {
  public ?dict<string, AttributeValue> $attributes;
  public ?ConsumedCapacity $consumed_capacity;
  public ?ItemCollectionMetrics $item_collection_metrics;
  public function __construct(shape(
    ?'attributes' => dict<string, AttributeValue>,
    ?'consumed_capacity' => ConsumedCapacity,
    ?'item_collection_metrics' => ItemCollectionMetrics,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? null;
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? null;
  }
}

class PutRequest {
  public dict<string, AttributeValue> $item;
  public function __construct(shape(
    'item' => dict<string, AttributeValue>,
  ) $s) {
    $this->item = $s['item'];
  }
}

class QueryInput {
  public ?vec<string> $attributes_to_get;
  public ?string $conditional_operator;
  public ?bool $consistent_read;
  public ?dict<string, AttributeValue> $exclusive_start_key;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public ?string $filter_expression;
  public ?string $index_name;
  public ?string $key_condition_expression;
  public ?dict<string, Condition> $key_conditions;
  public ?int $limit;
  public ?string $projection_expression;
  public ?dict<string, Condition> $query_filter;
  public ?string $return_consumed_capacity;
  public ?bool $scan_index_forward;
  public ?string $select;
  public string $table_name;
  public function __construct(shape(
    ?'attributes_to_get' => vec<string>,
    ?'conditional_operator' => string,
    ?'consistent_read' => bool,
    ?'exclusive_start_key' => dict<string, AttributeValue>,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    ?'filter_expression' => string,
    ?'index_name' => string,
    ?'key_condition_expression' => string,
    ?'key_conditions' => dict<string, Condition>,
    ?'limit' => int,
    ?'projection_expression' => string,
    ?'query_filter' => dict<string, Condition>,
    ?'return_consumed_capacity' => string,
    ?'scan_index_forward' => bool,
    ?'select' => string,
    'table_name' => string,
  ) $s) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? null;
    $this->conditional_operator = $s['conditional_operator'] ?? null;
    $this->consistent_read = $s['consistent_read'] ?? null;
    $this->exclusive_start_key = $s['exclusive_start_key'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->filter_expression = $s['filter_expression'] ?? null;
    $this->index_name = $s['index_name'] ?? null;
    $this->key_condition_expression = $s['key_condition_expression'] ?? null;
    $this->key_conditions = $s['key_conditions'] ?? null;
    $this->limit = $s['limit'] ?? null;
    $this->projection_expression = $s['projection_expression'] ?? null;
    $this->query_filter = $s['query_filter'] ?? null;
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->scan_index_forward = $s['scan_index_forward'] ?? null;
    $this->select = $s['select'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class QueryOutput {
  public ?ConsumedCapacity $consumed_capacity;
  public ?int $count;
  public ?vec<dict<string, AttributeValue>> $items;
  public ?dict<string, AttributeValue> $last_evaluated_key;
  public ?int $scanned_count;
  public function __construct(shape(
    ?'consumed_capacity' => ConsumedCapacity,
    ?'count' => int,
    ?'items' => vec<dict<string, AttributeValue>>,
    ?'last_evaluated_key' => dict<string, AttributeValue>,
    ?'scanned_count' => int,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->count = $s['count'] ?? null;
    $this->items = $s['items'] ?? null;
    $this->last_evaluated_key = $s['last_evaluated_key'] ?? null;
    $this->scanned_count = $s['scanned_count'] ?? null;
  }
}

class Replica {
  public ?string $region_name;
  public function __construct(shape(
    ?'region_name' => string,
  ) $s = shape()) {
    $this->region_name = $s['region_name'] ?? null;
  }
}

class ReplicaAutoScalingDescription {
  public ?vec<ReplicaGlobalSecondaryIndexAutoScalingDescription> $global_secondary_indexes;
  public ?string $region_name;
  public ?AutoScalingSettingsDescription $replica_provisioned_read_capacity_auto_scaling_settings;
  public ?AutoScalingSettingsDescription $replica_provisioned_write_capacity_auto_scaling_settings;
  public ?string $replica_status;
  public function __construct(shape(
    ?'global_secondary_indexes' => vec<ReplicaGlobalSecondaryIndexAutoScalingDescription>,
    ?'region_name' => string,
    ?'replica_provisioned_read_capacity_auto_scaling_settings' => AutoScalingSettingsDescription,
    ?'replica_provisioned_write_capacity_auto_scaling_settings' => AutoScalingSettingsDescription,
    ?'replica_status' => string,
  ) $s = shape()) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? null;
    $this->region_name = $s['region_name'] ?? null;
    $this->replica_provisioned_read_capacity_auto_scaling_settings = $s['replica_provisioned_read_capacity_auto_scaling_settings'] ?? null;
    $this->replica_provisioned_write_capacity_auto_scaling_settings = $s['replica_provisioned_write_capacity_auto_scaling_settings'] ?? null;
    $this->replica_status = $s['replica_status'] ?? null;
  }
}

class ReplicaAutoScalingUpdate {
  public string $region_name;
  public ?vec<ReplicaGlobalSecondaryIndexAutoScalingUpdate> $replica_global_secondary_index_updates;
  public ?AutoScalingSettingsUpdate $replica_provisioned_read_capacity_auto_scaling_update;
  public function __construct(shape(
    'region_name' => string,
    ?'replica_global_secondary_index_updates' => vec<ReplicaGlobalSecondaryIndexAutoScalingUpdate>,
    ?'replica_provisioned_read_capacity_auto_scaling_update' => AutoScalingSettingsUpdate,
  ) $s) {
    $this->region_name = $s['region_name'];
    $this->replica_global_secondary_index_updates = $s['replica_global_secondary_index_updates'] ?? null;
    $this->replica_provisioned_read_capacity_auto_scaling_update = $s['replica_provisioned_read_capacity_auto_scaling_update'] ?? null;
  }
}

class ReplicaDescription {
  public ?vec<ReplicaGlobalSecondaryIndexDescription> $global_secondary_indexes;
  public ?string $kms_master_key_id;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;
  public ?string $region_name;
  public ?string $replica_status;
  public ?string $replica_status_description;
  public ?string $replica_status_percent_progress;
  public function __construct(shape(
    ?'global_secondary_indexes' => vec<ReplicaGlobalSecondaryIndexDescription>,
    ?'kms_master_key_id' => string,
    ?'provisioned_throughput_override' => ProvisionedThroughputOverride,
    ?'region_name' => string,
    ?'replica_status' => string,
    ?'replica_status_description' => string,
    ?'replica_status_percent_progress' => string,
  ) $s = shape()) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? null;
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? null;
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->region_name = $s['region_name'] ?? null;
    $this->replica_status = $s['replica_status'] ?? null;
    $this->replica_status_description = $s['replica_status_description'] ?? null;
    $this->replica_status_percent_progress = $s['replica_status_percent_progress'] ?? null;
  }
}

class ReplicaGlobalSecondaryIndex {
  public string $index_name;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;
  public function __construct(shape(
    'index_name' => string,
    ?'provisioned_throughput_override' => ProvisionedThroughputOverride,
  ) $s) {
    $this->index_name = $s['index_name'];
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
  }
}

class ReplicaGlobalSecondaryIndexAutoScalingDescription {
  public ?string $index_name;
  public ?string $index_status;
  public ?AutoScalingSettingsDescription $provisioned_read_capacity_auto_scaling_settings;
  public ?AutoScalingSettingsDescription $provisioned_write_capacity_auto_scaling_settings;
  public function __construct(shape(
    ?'index_name' => string,
    ?'index_status' => string,
    ?'provisioned_read_capacity_auto_scaling_settings' => AutoScalingSettingsDescription,
    ?'provisioned_write_capacity_auto_scaling_settings' => AutoScalingSettingsDescription,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? null;
    $this->index_status = $s['index_status'] ?? null;
    $this->provisioned_read_capacity_auto_scaling_settings = $s['provisioned_read_capacity_auto_scaling_settings'] ?? null;
    $this->provisioned_write_capacity_auto_scaling_settings = $s['provisioned_write_capacity_auto_scaling_settings'] ?? null;
  }
}

class ReplicaGlobalSecondaryIndexAutoScalingUpdate {
  public ?string $index_name;
  public ?AutoScalingSettingsUpdate $provisioned_read_capacity_auto_scaling_update;
  public function __construct(shape(
    ?'index_name' => string,
    ?'provisioned_read_capacity_auto_scaling_update' => AutoScalingSettingsUpdate,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? null;
    $this->provisioned_read_capacity_auto_scaling_update = $s['provisioned_read_capacity_auto_scaling_update'] ?? null;
  }
}

class ReplicaGlobalSecondaryIndexDescription {
  public ?string $index_name;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;
  public function __construct(shape(
    ?'index_name' => string,
    ?'provisioned_throughput_override' => ProvisionedThroughputOverride,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? null;
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
  }
}

class ReplicaGlobalSecondaryIndexSettingsDescription {
  public string $index_name;
  public ?string $index_status;
  public ?AutoScalingSettingsDescription $provisioned_read_capacity_auto_scaling_settings;
  public ?int $provisioned_read_capacity_units;
  public ?AutoScalingSettingsDescription $provisioned_write_capacity_auto_scaling_settings;
  public ?int $provisioned_write_capacity_units;
  public function __construct(shape(
    'index_name' => string,
    ?'index_status' => string,
    ?'provisioned_read_capacity_auto_scaling_settings' => AutoScalingSettingsDescription,
    ?'provisioned_read_capacity_units' => int,
    ?'provisioned_write_capacity_auto_scaling_settings' => AutoScalingSettingsDescription,
    ?'provisioned_write_capacity_units' => int,
  ) $s) {
    $this->index_name = $s['index_name'];
    $this->index_status = $s['index_status'] ?? null;
    $this->provisioned_read_capacity_auto_scaling_settings = $s['provisioned_read_capacity_auto_scaling_settings'] ?? null;
    $this->provisioned_read_capacity_units = $s['provisioned_read_capacity_units'] ?? null;
    $this->provisioned_write_capacity_auto_scaling_settings = $s['provisioned_write_capacity_auto_scaling_settings'] ?? null;
    $this->provisioned_write_capacity_units = $s['provisioned_write_capacity_units'] ?? null;
  }
}

class ReplicaGlobalSecondaryIndexSettingsUpdate {
  public string $index_name;
  public ?AutoScalingSettingsUpdate $provisioned_read_capacity_auto_scaling_settings_update;
  public ?int $provisioned_read_capacity_units;
  public function __construct(shape(
    'index_name' => string,
    ?'provisioned_read_capacity_auto_scaling_settings_update' => AutoScalingSettingsUpdate,
    ?'provisioned_read_capacity_units' => int,
  ) $s) {
    $this->index_name = $s['index_name'];
    $this->provisioned_read_capacity_auto_scaling_settings_update = $s['provisioned_read_capacity_auto_scaling_settings_update'] ?? null;
    $this->provisioned_read_capacity_units = $s['provisioned_read_capacity_units'] ?? null;
  }
}

class ReplicaSettingsDescription {
  public string $region_name;
  public ?BillingModeSummary $replica_billing_mode_summary;
  public ?vec<ReplicaGlobalSecondaryIndexSettingsDescription> $replica_global_secondary_index_settings;
  public ?AutoScalingSettingsDescription $replica_provisioned_read_capacity_auto_scaling_settings;
  public ?int $replica_provisioned_read_capacity_units;
  public ?AutoScalingSettingsDescription $replica_provisioned_write_capacity_auto_scaling_settings;
  public ?int $replica_provisioned_write_capacity_units;
  public ?string $replica_status;
  public function __construct(shape(
    'region_name' => string,
    ?'replica_billing_mode_summary' => BillingModeSummary,
    ?'replica_global_secondary_index_settings' => vec<ReplicaGlobalSecondaryIndexSettingsDescription>,
    ?'replica_provisioned_read_capacity_auto_scaling_settings' => AutoScalingSettingsDescription,
    ?'replica_provisioned_read_capacity_units' => int,
    ?'replica_provisioned_write_capacity_auto_scaling_settings' => AutoScalingSettingsDescription,
    ?'replica_provisioned_write_capacity_units' => int,
    ?'replica_status' => string,
  ) $s) {
    $this->region_name = $s['region_name'];
    $this->replica_billing_mode_summary = $s['replica_billing_mode_summary'] ?? null;
    $this->replica_global_secondary_index_settings = $s['replica_global_secondary_index_settings'] ?? null;
    $this->replica_provisioned_read_capacity_auto_scaling_settings = $s['replica_provisioned_read_capacity_auto_scaling_settings'] ?? null;
    $this->replica_provisioned_read_capacity_units = $s['replica_provisioned_read_capacity_units'] ?? null;
    $this->replica_provisioned_write_capacity_auto_scaling_settings = $s['replica_provisioned_write_capacity_auto_scaling_settings'] ?? null;
    $this->replica_provisioned_write_capacity_units = $s['replica_provisioned_write_capacity_units'] ?? null;
    $this->replica_status = $s['replica_status'] ?? null;
  }
}

class ReplicaSettingsUpdate {
  public string $region_name;
  public ?vec<ReplicaGlobalSecondaryIndexSettingsUpdate> $replica_global_secondary_index_settings_update;
  public ?AutoScalingSettingsUpdate $replica_provisioned_read_capacity_auto_scaling_settings_update;
  public ?int $replica_provisioned_read_capacity_units;
  public function __construct(shape(
    'region_name' => string,
    ?'replica_global_secondary_index_settings_update' => vec<ReplicaGlobalSecondaryIndexSettingsUpdate>,
    ?'replica_provisioned_read_capacity_auto_scaling_settings_update' => AutoScalingSettingsUpdate,
    ?'replica_provisioned_read_capacity_units' => int,
  ) $s) {
    $this->region_name = $s['region_name'];
    $this->replica_global_secondary_index_settings_update = $s['replica_global_secondary_index_settings_update'] ?? null;
    $this->replica_provisioned_read_capacity_auto_scaling_settings_update = $s['replica_provisioned_read_capacity_auto_scaling_settings_update'] ?? null;
    $this->replica_provisioned_read_capacity_units = $s['replica_provisioned_read_capacity_units'] ?? null;
  }
}

class ReplicaUpdate {
  public ?CreateReplicaAction $create;
  public ?DeleteReplicaAction $delete;
  public function __construct(shape(
    ?'create' => CreateReplicaAction,
    ?'delete' => DeleteReplicaAction,
  ) $s = shape()) {
    $this->create = $s['create'] ?? null;
    $this->delete = $s['delete'] ?? null;
  }
}

class ReplicationGroupUpdate {
  public ?CreateReplicationGroupMemberAction $create;
  public ?DeleteReplicationGroupMemberAction $delete;
  public ?UpdateReplicationGroupMemberAction $update;
  public function __construct(shape(
    ?'create' => CreateReplicationGroupMemberAction,
    ?'delete' => DeleteReplicationGroupMemberAction,
    ?'update' => UpdateReplicationGroupMemberAction,
  ) $s = shape()) {
    $this->create = $s['create'] ?? null;
    $this->delete = $s['delete'] ?? null;
    $this->update = $s['update'] ?? null;
  }
}

class RestoreSummary {
  public int $restore_date_time;
  public bool $restore_in_progress;
  public ?string $source_backup_arn;
  public ?string $source_table_arn;
  public function __construct(shape(
    'restore_date_time' => int,
    'restore_in_progress' => bool,
    ?'source_backup_arn' => string,
    ?'source_table_arn' => string,
  ) $s) {
    $this->restore_date_time = $s['restore_date_time'];
    $this->restore_in_progress = $s['restore_in_progress'];
    $this->source_backup_arn = $s['source_backup_arn'] ?? null;
    $this->source_table_arn = $s['source_table_arn'] ?? null;
  }
}

class RestoreTableFromBackupInput {
  public string $backup_arn;
  public ?string $billing_mode_override;
  public ?vec<GlobalSecondaryIndex> $global_secondary_index_override;
  public ?vec<LocalSecondaryIndex> $local_secondary_index_override;
  public ?ProvisionedThroughput $provisioned_throughput_override;
  public ?SSESpecification $sse_specification_override;
  public string $target_table_name;
  public function __construct(shape(
    'backup_arn' => string,
    ?'billing_mode_override' => string,
    ?'global_secondary_index_override' => vec<GlobalSecondaryIndex>,
    ?'local_secondary_index_override' => vec<LocalSecondaryIndex>,
    ?'provisioned_throughput_override' => ProvisionedThroughput,
    ?'sse_specification_override' => SSESpecification,
    'target_table_name' => string,
  ) $s) {
    $this->backup_arn = $s['backup_arn'];
    $this->billing_mode_override = $s['billing_mode_override'] ?? null;
    $this->global_secondary_index_override = $s['global_secondary_index_override'] ?? null;
    $this->local_secondary_index_override = $s['local_secondary_index_override'] ?? null;
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->sse_specification_override = $s['sse_specification_override'] ?? null;
    $this->target_table_name = $s['target_table_name'];
  }
}

class RestoreTableFromBackupOutput {
  public ?TableDescription $table_description;
  public function __construct(shape(
    ?'table_description' => TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

class RestoreTableToPointInTimeInput {
  public ?string $billing_mode_override;
  public ?vec<GlobalSecondaryIndex> $global_secondary_index_override;
  public ?vec<LocalSecondaryIndex> $local_secondary_index_override;
  public ?ProvisionedThroughput $provisioned_throughput_override;
  public ?int $restore_date_time;
  public ?SSESpecification $sse_specification_override;
  public ?string $source_table_arn;
  public ?string $source_table_name;
  public string $target_table_name;
  public ?bool $use_latest_restorable_time;
  public function __construct(shape(
    ?'billing_mode_override' => string,
    ?'global_secondary_index_override' => vec<GlobalSecondaryIndex>,
    ?'local_secondary_index_override' => vec<LocalSecondaryIndex>,
    ?'provisioned_throughput_override' => ProvisionedThroughput,
    ?'restore_date_time' => int,
    ?'sse_specification_override' => SSESpecification,
    ?'source_table_arn' => string,
    ?'source_table_name' => string,
    'target_table_name' => string,
    ?'use_latest_restorable_time' => bool,
  ) $s) {
    $this->billing_mode_override = $s['billing_mode_override'] ?? null;
    $this->global_secondary_index_override = $s['global_secondary_index_override'] ?? null;
    $this->local_secondary_index_override = $s['local_secondary_index_override'] ?? null;
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->restore_date_time = $s['restore_date_time'] ?? null;
    $this->sse_specification_override = $s['sse_specification_override'] ?? null;
    $this->source_table_arn = $s['source_table_arn'] ?? null;
    $this->source_table_name = $s['source_table_name'] ?? null;
    $this->target_table_name = $s['target_table_name'];
    $this->use_latest_restorable_time = $s['use_latest_restorable_time'] ?? null;
  }
}

class RestoreTableToPointInTimeOutput {
  public ?TableDescription $table_description;
  public function __construct(shape(
    ?'table_description' => TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

class SSEDescription {
  public ?int $inaccessible_encryption_date_time;
  public ?string $kms_master_key_arn;
  public ?string $sse_type;
  public ?string $status;
  public function __construct(shape(
    ?'inaccessible_encryption_date_time' => int,
    ?'kms_master_key_arn' => string,
    ?'sse_type' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->inaccessible_encryption_date_time = $s['inaccessible_encryption_date_time'] ?? null;
    $this->kms_master_key_arn = $s['kms_master_key_arn'] ?? null;
    $this->sse_type = $s['sse_type'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

class SSESpecification {
  public ?bool $enabled;
  public ?string $kms_master_key_id;
  public ?string $sse_type;
  public function __construct(shape(
    ?'enabled' => bool,
    ?'kms_master_key_id' => string,
    ?'sse_type' => string,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? null;
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? null;
    $this->sse_type = $s['sse_type'] ?? null;
  }
}

class ScanInput {
  public ?vec<string> $attributes_to_get;
  public ?string $conditional_operator;
  public ?bool $consistent_read;
  public ?dict<string, AttributeValue> $exclusive_start_key;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public ?string $filter_expression;
  public ?string $index_name;
  public ?int $limit;
  public ?string $projection_expression;
  public ?string $return_consumed_capacity;
  public ?dict<string, Condition> $scan_filter;
  public ?int $segment;
  public ?string $select;
  public string $table_name;
  public ?int $total_segments;
  public function __construct(shape(
    ?'attributes_to_get' => vec<string>,
    ?'conditional_operator' => string,
    ?'consistent_read' => bool,
    ?'exclusive_start_key' => dict<string, AttributeValue>,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    ?'filter_expression' => string,
    ?'index_name' => string,
    ?'limit' => int,
    ?'projection_expression' => string,
    ?'return_consumed_capacity' => string,
    ?'scan_filter' => dict<string, Condition>,
    ?'segment' => int,
    ?'select' => string,
    'table_name' => string,
    ?'total_segments' => int,
  ) $s) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? null;
    $this->conditional_operator = $s['conditional_operator'] ?? null;
    $this->consistent_read = $s['consistent_read'] ?? null;
    $this->exclusive_start_key = $s['exclusive_start_key'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->filter_expression = $s['filter_expression'] ?? null;
    $this->index_name = $s['index_name'] ?? null;
    $this->limit = $s['limit'] ?? null;
    $this->projection_expression = $s['projection_expression'] ?? null;
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->scan_filter = $s['scan_filter'] ?? null;
    $this->segment = $s['segment'] ?? null;
    $this->select = $s['select'] ?? null;
    $this->table_name = $s['table_name'];
    $this->total_segments = $s['total_segments'] ?? null;
  }
}

class ScanOutput {
  public ?ConsumedCapacity $consumed_capacity;
  public ?int $count;
  public ?vec<dict<string, AttributeValue>> $items;
  public ?dict<string, AttributeValue> $last_evaluated_key;
  public ?int $scanned_count;
  public function __construct(shape(
    ?'consumed_capacity' => ConsumedCapacity,
    ?'count' => int,
    ?'items' => vec<dict<string, AttributeValue>>,
    ?'last_evaluated_key' => dict<string, AttributeValue>,
    ?'scanned_count' => int,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->count = $s['count'] ?? null;
    $this->items = $s['items'] ?? null;
    $this->last_evaluated_key = $s['last_evaluated_key'] ?? null;
    $this->scanned_count = $s['scanned_count'] ?? null;
  }
}

class SourceTableDetails {
  public ?string $billing_mode;
  public ?int $item_count;
  public vec<KeySchemaElement> $key_schema;
  public ProvisionedThroughput $provisioned_throughput;
  public ?string $table_arn;
  public int $table_creation_date_time;
  public string $table_id;
  public string $table_name;
  public ?int $table_size_bytes;
  public function __construct(shape(
    ?'billing_mode' => string,
    ?'item_count' => int,
    'key_schema' => vec<KeySchemaElement>,
    'provisioned_throughput' => ProvisionedThroughput,
    ?'table_arn' => string,
    'table_creation_date_time' => int,
    'table_id' => string,
    'table_name' => string,
    ?'table_size_bytes' => int,
  ) $s) {
    $this->billing_mode = $s['billing_mode'] ?? null;
    $this->item_count = $s['item_count'] ?? null;
    $this->key_schema = $s['key_schema'];
    $this->provisioned_throughput = $s['provisioned_throughput'];
    $this->table_arn = $s['table_arn'] ?? null;
    $this->table_creation_date_time = $s['table_creation_date_time'];
    $this->table_id = $s['table_id'];
    $this->table_name = $s['table_name'];
    $this->table_size_bytes = $s['table_size_bytes'] ?? null;
  }
}

class SourceTableFeatureDetails {
  public ?vec<GlobalSecondaryIndexInfo> $global_secondary_indexes;
  public ?vec<LocalSecondaryIndexInfo> $local_secondary_indexes;
  public ?SSEDescription $sse_description;
  public ?StreamSpecification $stream_description;
  public ?TimeToLiveDescription $time_to_live_description;
  public function __construct(shape(
    ?'global_secondary_indexes' => vec<GlobalSecondaryIndexInfo>,
    ?'local_secondary_indexes' => vec<LocalSecondaryIndexInfo>,
    ?'sse_description' => SSEDescription,
    ?'stream_description' => StreamSpecification,
    ?'time_to_live_description' => TimeToLiveDescription,
  ) $s = shape()) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? null;
    $this->local_secondary_indexes = $s['local_secondary_indexes'] ?? null;
    $this->sse_description = $s['sse_description'] ?? null;
    $this->stream_description = $s['stream_description'] ?? null;
    $this->time_to_live_description = $s['time_to_live_description'] ?? null;
  }
}

class StreamSpecification {
  public bool $stream_enabled;
  public ?string $stream_view_type;
  public function __construct(shape(
    'stream_enabled' => bool,
    ?'stream_view_type' => string,
  ) $s) {
    $this->stream_enabled = $s['stream_enabled'];
    $this->stream_view_type = $s['stream_view_type'] ?? null;
  }
}

class TableAutoScalingDescription {
  public ?vec<ReplicaAutoScalingDescription> $replicas;
  public ?string $table_name;
  public ?string $table_status;
  public function __construct(shape(
    ?'replicas' => vec<ReplicaAutoScalingDescription>,
    ?'table_name' => string,
    ?'table_status' => string,
  ) $s = shape()) {
    $this->replicas = $s['replicas'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
    $this->table_status = $s['table_status'] ?? null;
  }
}

class TableDescription {
  public ?ArchivalSummary $archival_summary;
  public ?vec<AttributeDefinition> $attribute_definitions;
  public ?BillingModeSummary $billing_mode_summary;
  public ?int $creation_date_time;
  public ?vec<GlobalSecondaryIndexDescription> $global_secondary_indexes;
  public ?string $global_table_version;
  public ?int $item_count;
  public ?vec<KeySchemaElement> $key_schema;
  public ?string $latest_stream_arn;
  public ?string $latest_stream_label;
  public ?vec<LocalSecondaryIndexDescription> $local_secondary_indexes;
  public ?ProvisionedThroughputDescription $provisioned_throughput;
  public ?vec<ReplicaDescription> $replicas;
  public ?RestoreSummary $restore_summary;
  public ?SSEDescription $sse_description;
  public ?StreamSpecification $stream_specification;
  public ?string $table_arn;
  public ?string $table_id;
  public ?string $table_name;
  public ?int $table_size_bytes;
  public ?string $table_status;
  public function __construct(shape(
    ?'archival_summary' => ArchivalSummary,
    ?'attribute_definitions' => vec<AttributeDefinition>,
    ?'billing_mode_summary' => BillingModeSummary,
    ?'creation_date_time' => int,
    ?'global_secondary_indexes' => vec<GlobalSecondaryIndexDescription>,
    ?'global_table_version' => string,
    ?'item_count' => int,
    ?'key_schema' => vec<KeySchemaElement>,
    ?'latest_stream_arn' => string,
    ?'latest_stream_label' => string,
    ?'local_secondary_indexes' => vec<LocalSecondaryIndexDescription>,
    ?'provisioned_throughput' => ProvisionedThroughputDescription,
    ?'replicas' => vec<ReplicaDescription>,
    ?'restore_summary' => RestoreSummary,
    ?'sse_description' => SSEDescription,
    ?'stream_specification' => StreamSpecification,
    ?'table_arn' => string,
    ?'table_id' => string,
    ?'table_name' => string,
    ?'table_size_bytes' => int,
    ?'table_status' => string,
  ) $s = shape()) {
    $this->archival_summary = $s['archival_summary'] ?? null;
    $this->attribute_definitions = $s['attribute_definitions'] ?? null;
    $this->billing_mode_summary = $s['billing_mode_summary'] ?? null;
    $this->creation_date_time = $s['creation_date_time'] ?? null;
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? null;
    $this->global_table_version = $s['global_table_version'] ?? null;
    $this->item_count = $s['item_count'] ?? null;
    $this->key_schema = $s['key_schema'] ?? null;
    $this->latest_stream_arn = $s['latest_stream_arn'] ?? null;
    $this->latest_stream_label = $s['latest_stream_label'] ?? null;
    $this->local_secondary_indexes = $s['local_secondary_indexes'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
    $this->replicas = $s['replicas'] ?? null;
    $this->restore_summary = $s['restore_summary'] ?? null;
    $this->sse_description = $s['sse_description'] ?? null;
    $this->stream_specification = $s['stream_specification'] ?? null;
    $this->table_arn = $s['table_arn'] ?? null;
    $this->table_id = $s['table_id'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
    $this->table_size_bytes = $s['table_size_bytes'] ?? null;
    $this->table_status = $s['table_status'] ?? null;
  }
}

class Tag {
  public string $key;
  public string $value;
  public function __construct(shape(
    'key' => string,
    'value' => string,
  ) $s) {
    $this->key = $s['key'];
    $this->value = $s['value'];
  }
}

class TagResourceInput {
  public string $resource_arn;
  public vec<Tag> $tags;
  public function __construct(shape(
    'resource_arn' => string,
    'tags' => vec<Tag>,
  ) $s) {
    $this->resource_arn = $s['resource_arn'];
    $this->tags = $s['tags'];
  }
}

class TagResourceOutput {
  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TimeToLiveDescription {
  public ?string $attribute_name;
  public ?string $time_to_live_status;
  public function __construct(shape(
    ?'attribute_name' => string,
    ?'time_to_live_status' => string,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? null;
    $this->time_to_live_status = $s['time_to_live_status'] ?? null;
  }
}

class TimeToLiveSpecification {
  public string $attribute_name;
  public bool $enabled;
  public function __construct(shape(
    'attribute_name' => string,
    'enabled' => bool,
  ) $s) {
    $this->attribute_name = $s['attribute_name'];
    $this->enabled = $s['enabled'];
  }
}

class TransactGetItem {
  public Get $get;
  public function __construct(shape(
    'get' => Get,
  ) $s) {
    $this->get = $s['get'];
  }
}

class TransactGetItemsInput {
  public ?string $return_consumed_capacity;
  public vec<TransactGetItem> $transact_items;
  public function __construct(shape(
    ?'return_consumed_capacity' => string,
    'transact_items' => vec<TransactGetItem>,
  ) $s) {
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->transact_items = $s['transact_items'];
  }
}

class TransactGetItemsOutput {
  public ?vec<ConsumedCapacity> $consumed_capacity;
  public ?vec<ItemResponse> $responses;
  public function __construct(shape(
    ?'consumed_capacity' => vec<ConsumedCapacity>,
    ?'responses' => vec<ItemResponse>,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->responses = $s['responses'] ?? null;
  }
}

class TransactWriteItem {
  public ?ConditionCheck $condition_check;
  public ?Delete $delete;
  public ?Put $put;
  public ?Update $update;
  public function __construct(shape(
    ?'condition_check' => ConditionCheck,
    ?'delete' => Delete,
    ?'put' => Put,
    ?'update' => Update,
  ) $s = shape()) {
    $this->condition_check = $s['condition_check'] ?? null;
    $this->delete = $s['delete'] ?? null;
    $this->put = $s['put'] ?? null;
    $this->update = $s['update'] ?? null;
  }
}

class TransactWriteItemsInput {
  public ?string $client_request_token;
  public ?string $return_consumed_capacity;
  public ?string $return_item_collection_metrics;
  public vec<TransactWriteItem> $transact_items;
  public function __construct(shape(
    ?'client_request_token' => string,
    ?'return_consumed_capacity' => string,
    ?'return_item_collection_metrics' => string,
    'transact_items' => vec<TransactWriteItem>,
  ) $s) {
    $this->client_request_token = $s['client_request_token'] ?? null;
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? null;
    $this->transact_items = $s['transact_items'];
  }
}

class TransactWriteItemsOutput {
  public ?vec<ConsumedCapacity> $consumed_capacity;
  public ?dict<string, vec<ItemCollectionMetrics>> $item_collection_metrics;
  public function __construct(shape(
    ?'consumed_capacity' => vec<ConsumedCapacity>,
    ?'item_collection_metrics' => dict<string, vec<ItemCollectionMetrics>>,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? null;
  }
}

class UntagResourceInput {
  public string $resource_arn;
  public vec<string> $tag_keys;
  public function __construct(shape(
    'resource_arn' => string,
    'tag_keys' => vec<string>,
  ) $s) {
    $this->resource_arn = $s['resource_arn'];
    $this->tag_keys = $s['tag_keys'];
  }
}

class UntagResourceOutput {
  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Update {
  public ?string $condition_expression;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public dict<string, AttributeValue> $key;
  public ?string $return_values_on_condition_check_failure;
  public string $table_name;
  public string $update_expression;
  public function __construct(shape(
    ?'condition_expression' => string,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    'key' => dict<string, AttributeValue>,
    ?'return_values_on_condition_check_failure' => string,
    'table_name' => string,
    'update_expression' => string,
  ) $s) {
    $this->condition_expression = $s['condition_expression'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->key = $s['key'];
    $this->return_values_on_condition_check_failure = $s['return_values_on_condition_check_failure'] ?? null;
    $this->table_name = $s['table_name'];
    $this->update_expression = $s['update_expression'];
  }
}

class UpdateContinuousBackupsInput {
  public PointInTimeRecoverySpecification $point_in_time_recovery_specification;
  public string $table_name;
  public function __construct(shape(
    'point_in_time_recovery_specification' => PointInTimeRecoverySpecification,
    'table_name' => string,
  ) $s) {
    $this->point_in_time_recovery_specification = $s['point_in_time_recovery_specification'];
    $this->table_name = $s['table_name'];
  }
}

class UpdateContinuousBackupsOutput {
  public ?ContinuousBackupsDescription $continuous_backups_description;
  public function __construct(shape(
    ?'continuous_backups_description' => ContinuousBackupsDescription,
  ) $s = shape()) {
    $this->continuous_backups_description = $s['continuous_backups_description'] ?? null;
  }
}

class UpdateContributorInsightsInput {
  public string $contributor_insights_action;
  public ?string $index_name;
  public string $table_name;
  public function __construct(shape(
    'contributor_insights_action' => string,
    ?'index_name' => string,
    'table_name' => string,
  ) $s) {
    $this->contributor_insights_action = $s['contributor_insights_action'];
    $this->index_name = $s['index_name'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class UpdateContributorInsightsOutput {
  public ?string $contributor_insights_status;
  public ?string $index_name;
  public ?string $table_name;
  public function __construct(shape(
    ?'contributor_insights_status' => string,
    ?'index_name' => string,
    ?'table_name' => string,
  ) $s = shape()) {
    $this->contributor_insights_status = $s['contributor_insights_status'] ?? null;
    $this->index_name = $s['index_name'] ?? null;
    $this->table_name = $s['table_name'] ?? null;
  }
}

class UpdateGlobalSecondaryIndexAction {
  public string $index_name;
  public ProvisionedThroughput $provisioned_throughput;
  public function __construct(shape(
    'index_name' => string,
    'provisioned_throughput' => ProvisionedThroughput,
  ) $s) {
    $this->index_name = $s['index_name'];
    $this->provisioned_throughput = $s['provisioned_throughput'];
  }
}

class UpdateGlobalTableInput {
  public string $global_table_name;
  public vec<ReplicaUpdate> $replica_updates;
  public function __construct(shape(
    'global_table_name' => string,
    'replica_updates' => vec<ReplicaUpdate>,
  ) $s) {
    $this->global_table_name = $s['global_table_name'];
    $this->replica_updates = $s['replica_updates'];
  }
}

class UpdateGlobalTableOutput {
  public ?GlobalTableDescription $global_table_description;
  public function __construct(shape(
    ?'global_table_description' => GlobalTableDescription,
  ) $s = shape()) {
    $this->global_table_description = $s['global_table_description'] ?? null;
  }
}

class UpdateGlobalTableSettingsInput {
  public ?string $global_table_billing_mode;
  public ?vec<GlobalTableGlobalSecondaryIndexSettingsUpdate> $global_table_global_secondary_index_settings_update;
  public string $global_table_name;
  public ?AutoScalingSettingsUpdate $global_table_provisioned_write_capacity_auto_scaling_settings_update;
  public ?int $global_table_provisioned_write_capacity_units;
  public ?vec<ReplicaSettingsUpdate> $replica_settings_update;
  public function __construct(shape(
    ?'global_table_billing_mode' => string,
    ?'global_table_global_secondary_index_settings_update' => vec<GlobalTableGlobalSecondaryIndexSettingsUpdate>,
    'global_table_name' => string,
    ?'global_table_provisioned_write_capacity_auto_scaling_settings_update' => AutoScalingSettingsUpdate,
    ?'global_table_provisioned_write_capacity_units' => int,
    ?'replica_settings_update' => vec<ReplicaSettingsUpdate>,
  ) $s) {
    $this->global_table_billing_mode = $s['global_table_billing_mode'] ?? null;
    $this->global_table_global_secondary_index_settings_update = $s['global_table_global_secondary_index_settings_update'] ?? null;
    $this->global_table_name = $s['global_table_name'];
    $this->global_table_provisioned_write_capacity_auto_scaling_settings_update = $s['global_table_provisioned_write_capacity_auto_scaling_settings_update'] ?? null;
    $this->global_table_provisioned_write_capacity_units = $s['global_table_provisioned_write_capacity_units'] ?? null;
    $this->replica_settings_update = $s['replica_settings_update'] ?? null;
  }
}

class UpdateGlobalTableSettingsOutput {
  public ?string $global_table_name;
  public ?vec<ReplicaSettingsDescription> $replica_settings;
  public function __construct(shape(
    ?'global_table_name' => string,
    ?'replica_settings' => vec<ReplicaSettingsDescription>,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? null;
    $this->replica_settings = $s['replica_settings'] ?? null;
  }
}

class UpdateItemInput {
  public ?dict<string, AttributeValueUpdate> $attribute_updates;
  public ?string $condition_expression;
  public ?string $conditional_operator;
  public ?dict<string, ExpectedAttributeValue> $expected;
  public ?dict<string, string> $expression_attribute_names;
  public ?dict<string, AttributeValue> $expression_attribute_values;
  public dict<string, AttributeValue> $key;
  public ?string $return_consumed_capacity;
  public ?string $return_item_collection_metrics;
  public ?string $return_values;
  public string $table_name;
  public ?string $update_expression;
  public function __construct(shape(
    ?'attribute_updates' => dict<string, AttributeValueUpdate>,
    ?'condition_expression' => string,
    ?'conditional_operator' => string,
    ?'expected' => dict<string, ExpectedAttributeValue>,
    ?'expression_attribute_names' => dict<string, string>,
    ?'expression_attribute_values' => dict<string, AttributeValue>,
    'key' => dict<string, AttributeValue>,
    ?'return_consumed_capacity' => string,
    ?'return_item_collection_metrics' => string,
    ?'return_values' => string,
    'table_name' => string,
    ?'update_expression' => string,
  ) $s) {
    $this->attribute_updates = $s['attribute_updates'] ?? null;
    $this->condition_expression = $s['condition_expression'] ?? null;
    $this->conditional_operator = $s['conditional_operator'] ?? null;
    $this->expected = $s['expected'] ?? null;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? null;
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? null;
    $this->key = $s['key'];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? null;
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? null;
    $this->return_values = $s['return_values'] ?? null;
    $this->table_name = $s['table_name'];
    $this->update_expression = $s['update_expression'] ?? null;
  }
}

class UpdateItemOutput {
  public ?dict<string, AttributeValue> $attributes;
  public ?ConsumedCapacity $consumed_capacity;
  public ?ItemCollectionMetrics $item_collection_metrics;
  public function __construct(shape(
    ?'attributes' => dict<string, AttributeValue>,
    ?'consumed_capacity' => ConsumedCapacity,
    ?'item_collection_metrics' => ItemCollectionMetrics,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? null;
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? null;
  }
}

class UpdateReplicationGroupMemberAction {
  public ?vec<ReplicaGlobalSecondaryIndex> $global_secondary_indexes;
  public ?string $kms_master_key_id;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;
  public string $region_name;
  public function __construct(shape(
    ?'global_secondary_indexes' => vec<ReplicaGlobalSecondaryIndex>,
    ?'kms_master_key_id' => string,
    ?'provisioned_throughput_override' => ProvisionedThroughputOverride,
    'region_name' => string,
  ) $s) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? null;
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? null;
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->region_name = $s['region_name'];
  }
}

class UpdateTableInput {
  public ?vec<AttributeDefinition> $attribute_definitions;
  public ?string $billing_mode;
  public ?vec<GlobalSecondaryIndexUpdate> $global_secondary_index_updates;
  public ?ProvisionedThroughput $provisioned_throughput;
  public ?vec<ReplicationGroupUpdate> $replica_updates;
  public ?SSESpecification $sse_specification;
  public ?StreamSpecification $stream_specification;
  public string $table_name;
  public function __construct(shape(
    ?'attribute_definitions' => vec<AttributeDefinition>,
    ?'billing_mode' => string,
    ?'global_secondary_index_updates' => vec<GlobalSecondaryIndexUpdate>,
    ?'provisioned_throughput' => ProvisionedThroughput,
    ?'replica_updates' => vec<ReplicationGroupUpdate>,
    ?'sse_specification' => SSESpecification,
    ?'stream_specification' => StreamSpecification,
    'table_name' => string,
  ) $s) {
    $this->attribute_definitions = $s['attribute_definitions'] ?? null;
    $this->billing_mode = $s['billing_mode'] ?? null;
    $this->global_secondary_index_updates = $s['global_secondary_index_updates'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
    $this->replica_updates = $s['replica_updates'] ?? null;
    $this->sse_specification = $s['sse_specification'] ?? null;
    $this->stream_specification = $s['stream_specification'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class UpdateTableOutput {
  public ?TableDescription $table_description;
  public function __construct(shape(
    ?'table_description' => TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

class UpdateTableReplicaAutoScalingInput {
  public ?vec<GlobalSecondaryIndexAutoScalingUpdate> $global_secondary_index_updates;
  public ?AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_update;
  public ?vec<ReplicaAutoScalingUpdate> $replica_updates;
  public string $table_name;
  public function __construct(shape(
    ?'global_secondary_index_updates' => vec<GlobalSecondaryIndexAutoScalingUpdate>,
    ?'provisioned_write_capacity_auto_scaling_update' => AutoScalingSettingsUpdate,
    ?'replica_updates' => vec<ReplicaAutoScalingUpdate>,
    'table_name' => string,
  ) $s) {
    $this->global_secondary_index_updates = $s['global_secondary_index_updates'] ?? null;
    $this->provisioned_write_capacity_auto_scaling_update = $s['provisioned_write_capacity_auto_scaling_update'] ?? null;
    $this->replica_updates = $s['replica_updates'] ?? null;
    $this->table_name = $s['table_name'];
  }
}

class UpdateTableReplicaAutoScalingOutput {
  public ?TableAutoScalingDescription $table_auto_scaling_description;
  public function __construct(shape(
    ?'table_auto_scaling_description' => TableAutoScalingDescription,
  ) $s = shape()) {
    $this->table_auto_scaling_description = $s['table_auto_scaling_description'] ?? null;
  }
}

class UpdateTimeToLiveInput {
  public string $table_name;
  public TimeToLiveSpecification $time_to_live_specification;
  public function __construct(shape(
    'table_name' => string,
    'time_to_live_specification' => TimeToLiveSpecification,
  ) $s) {
    $this->table_name = $s['table_name'];
    $this->time_to_live_specification = $s['time_to_live_specification'];
  }
}

class UpdateTimeToLiveOutput {
  public ?TimeToLiveSpecification $time_to_live_specification;
  public function __construct(shape(
    ?'time_to_live_specification' => TimeToLiveSpecification,
  ) $s = shape()) {
    $this->time_to_live_specification = $s['time_to_live_specification'] ?? null;
  }
}

class WriteRequest {
  public ?DeleteRequest $delete_request;
  public ?PutRequest $put_request;
  public function __construct(shape(
    ?'delete_request' => DeleteRequest,
    ?'put_request' => PutRequest,
  ) $s = shape()) {
    $this->delete_request = $s['delete_request'] ?? null;
    $this->put_request = $s['put_request'] ?? null;
  }
}

