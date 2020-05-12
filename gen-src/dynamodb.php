<?hh // strict
namespace slack\aws\dynamodb;

interface DynamoDB {
  public function BatchGetItem(BatchGetItemInput $in): Awaitable<\Errors\Result<BatchGetItemOutput>>;
  public function BatchWriteItem(BatchWriteItemInput $in): Awaitable<\Errors\Result<BatchWriteItemOutput>>;
  public function CreateBackup(CreateBackupInput $in): Awaitable<\Errors\Result<CreateBackupOutput>>;
  public function CreateGlobalTable(CreateGlobalTableInput $in): Awaitable<\Errors\Result<CreateGlobalTableOutput>>;
  public function CreateTable(CreateTableInput $in): Awaitable<\Errors\Result<CreateTableOutput>>;
  public function DeleteBackup(DeleteBackupInput $in): Awaitable<\Errors\Result<DeleteBackupOutput>>;
  public function DeleteItem(DeleteItemInput $in): Awaitable<\Errors\Result<DeleteItemOutput>>;
  public function DeleteTable(DeleteTableInput $in): Awaitable<\Errors\Result<DeleteTableOutput>>;
  public function DescribeBackup(DescribeBackupInput $in): Awaitable<\Errors\Result<DescribeBackupOutput>>;
  public function DescribeContinuousBackups(DescribeContinuousBackupsInput $in): Awaitable<\Errors\Result<DescribeContinuousBackupsOutput>>;
  public function DescribeContributorInsights(DescribeContributorInsightsInput $in): Awaitable<\Errors\Result<DescribeContributorInsightsOutput>>;
  public function DescribeEndpoints(DescribeEndpointsRequest $in): Awaitable<\Errors\Result<DescribeEndpointsResponse>>;
  public function DescribeGlobalTable(DescribeGlobalTableInput $in): Awaitable<\Errors\Result<DescribeGlobalTableOutput>>;
  public function DescribeGlobalTableSettings(DescribeGlobalTableSettingsInput $in): Awaitable<\Errors\Result<DescribeGlobalTableSettingsOutput>>;
  public function DescribeLimits(DescribeLimitsInput $in): Awaitable<\Errors\Result<DescribeLimitsOutput>>;
  public function DescribeTable(DescribeTableInput $in): Awaitable<\Errors\Result<DescribeTableOutput>>;
  public function DescribeTableReplicaAutoScaling(DescribeTableReplicaAutoScalingInput $in): Awaitable<\Errors\Result<DescribeTableReplicaAutoScalingOutput>>;
  public function DescribeTimeToLive(DescribeTimeToLiveInput $in): Awaitable<\Errors\Result<DescribeTimeToLiveOutput>>;
  public function GetItem(GetItemInput $in): Awaitable<\Errors\Result<GetItemOutput>>;
  public function ListBackups(ListBackupsInput $in): Awaitable<\Errors\Result<ListBackupsOutput>>;
  public function ListContributorInsights(ListContributorInsightsInput $in): Awaitable<\Errors\Result<ListContributorInsightsOutput>>;
  public function ListGlobalTables(ListGlobalTablesInput $in): Awaitable<\Errors\Result<ListGlobalTablesOutput>>;
  public function ListTables(ListTablesInput $in): Awaitable<\Errors\Result<ListTablesOutput>>;
  public function ListTagsOfResource(ListTagsOfResourceInput $in): Awaitable<\Errors\Result<ListTagsOfResourceOutput>>;
  public function PutItem(PutItemInput $in): Awaitable<\Errors\Result<PutItemOutput>>;
  public function Query(QueryInput $in): Awaitable<\Errors\Result<QueryOutput>>;
  public function RestoreTableFromBackup(RestoreTableFromBackupInput $in): Awaitable<\Errors\Result<RestoreTableFromBackupOutput>>;
  public function RestoreTableToPointInTime(RestoreTableToPointInTimeInput $in): Awaitable<\Errors\Result<RestoreTableToPointInTimeOutput>>;
  public function Scan(ScanInput $in): Awaitable<\Errors\Result<ScanOutput>>;
  public function TagResource(TagResourceInput $in): Awaitable<\Errors\Error>;
  public function TransactGetItems(TransactGetItemsInput $in): Awaitable<\Errors\Result<TransactGetItemsOutput>>;
  public function TransactWriteItems(TransactWriteItemsInput $in): Awaitable<\Errors\Result<TransactWriteItemsOutput>>;
  public function UntagResource(UntagResourceInput $in): Awaitable<\Errors\Error>;
  public function UpdateContinuousBackups(UpdateContinuousBackupsInput $in): Awaitable<\Errors\Result<UpdateContinuousBackupsOutput>>;
  public function UpdateContributorInsights(UpdateContributorInsightsInput $in): Awaitable<\Errors\Result<UpdateContributorInsightsOutput>>;
  public function UpdateGlobalTable(UpdateGlobalTableInput $in): Awaitable<\Errors\Result<UpdateGlobalTableOutput>>;
  public function UpdateGlobalTableSettings(UpdateGlobalTableSettingsInput $in): Awaitable<\Errors\Result<UpdateGlobalTableSettingsOutput>>;
  public function UpdateItem(UpdateItemInput $in): Awaitable<\Errors\Result<UpdateItemOutput>>;
  public function UpdateTable(UpdateTableInput $in): Awaitable<\Errors\Result<UpdateTableOutput>>;
  public function UpdateTableReplicaAutoScaling(UpdateTableReplicaAutoScalingInput $in): Awaitable<\Errors\Result<UpdateTableReplicaAutoScalingOutput>>;
  public function UpdateTimeToLive(UpdateTimeToLiveInput $in): Awaitable<\Errors\Result<UpdateTimeToLiveOutput>>;
}

type ArchivalReason = string;

class ArchivalSummary {
  public ?BackupArn $archival_backup_arn;
  public ?Date $archival_date_time;
  public ?ArchivalReason $archival_reason;

  public function __construct(shape(
    ?'archival_backup_arn' => ?BackupArn,
    ?'archival_date_time' => ?Date,
    ?'archival_reason' => ?ArchivalReason,
  ) $s = shape()) {
    $this->archival_backup_arn = $s['archival_backup_arn'] ?? '';
    $this->archival_date_time = $s['archival_date_time'] ?? 0;
    $this->archival_reason = $s['archival_reason'] ?? '';
  }
}

type AttributeAction = string;

class AttributeDefinition {
  public ?KeySchemaAttributeName $attribute_name;
  public ?ScalarAttributeType $attribute_type;

  public function __construct(shape(
    ?'attribute_name' => ?KeySchemaAttributeName,
    ?'attribute_type' => ?ScalarAttributeType,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_type = $s['attribute_type'] ?? '';
  }
}

type AttributeDefinitions = vec<AttributeDefinition>;

type AttributeMap = dict<AttributeName, AttributeValue>;

type AttributeName = string;

type AttributeNameList = vec<AttributeName>;

type AttributeUpdates = dict<AttributeName, AttributeValueUpdate>;

class AttributeValue {
  public ?BinaryAttributeValue $b;
  public ?BooleanAttributeValue $bool;
  public ?BinarySetAttributeValue $bs;
  public ?ListAttributeValue $l;
  public ?MapAttributeValue $m;
  public ?NumberAttributeValue $n;
  public ?NumberSetAttributeValue $ns;
  public ?NullAttributeValue $null;
  public ?StringAttributeValue $s;
  public ?StringSetAttributeValue $ss;

  public function __construct(shape(
    ?'b' => ?BinaryAttributeValue,
    ?'bool' => ?BooleanAttributeValue,
    ?'bs' => ?BinarySetAttributeValue,
    ?'l' => ?ListAttributeValue,
    ?'m' => ?MapAttributeValue,
    ?'n' => ?NumberAttributeValue,
    ?'ns' => ?NumberSetAttributeValue,
    ?'null' => ?NullAttributeValue,
    ?'s' => ?StringAttributeValue,
    ?'ss' => ?StringSetAttributeValue,
  ) $s = shape()) {
    $this->b = $s['b'] ?? '';
    $this->bool = $s['bool'] ?? false;
    $this->bs = $s['bs'] ?? vec[];
    $this->l = $s['l'] ?? vec[];
    $this->m = $s['m'] ?? dict[];
    $this->n = $s['n'] ?? '';
    $this->ns = $s['ns'] ?? vec[];
    $this->null = $s['null'] ?? false;
    $this->s = $s['s'] ?? '';
    $this->ss = $s['ss'] ?? vec[];
  }
}

type AttributeValueList = vec<AttributeValue>;

class AttributeValueUpdate {
  public ?AttributeAction $action;
  public ?AttributeValue $value;

  public function __construct(shape(
    ?'action' => ?AttributeAction,
    ?'value' => ?AttributeValue,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->value = $s['value'] ?? null;
  }
}

class AutoScalingPolicyDescription {
  public ?AutoScalingPolicyName $policy_name;
  public ?AutoScalingTargetTrackingScalingPolicyConfigurationDescription $target_tracking_scaling_policy_configuration;

  public function __construct(shape(
    ?'policy_name' => ?AutoScalingPolicyName,
    ?'target_tracking_scaling_policy_configuration' => ?AutoScalingTargetTrackingScalingPolicyConfigurationDescription,
  ) $s = shape()) {
    $this->policy_name = $s['policy_name'] ?? '';
    $this->target_tracking_scaling_policy_configuration = $s['target_tracking_scaling_policy_configuration'] ?? null;
  }
}

type AutoScalingPolicyDescriptionList = vec<AutoScalingPolicyDescription>;

type AutoScalingPolicyName = string;

class AutoScalingPolicyUpdate {
  public ?AutoScalingPolicyName $policy_name;
  public ?AutoScalingTargetTrackingScalingPolicyConfigurationUpdate $target_tracking_scaling_policy_configuration;

  public function __construct(shape(
    ?'policy_name' => ?AutoScalingPolicyName,
    ?'target_tracking_scaling_policy_configuration' => ?AutoScalingTargetTrackingScalingPolicyConfigurationUpdate,
  ) $s = shape()) {
    $this->policy_name = $s['policy_name'] ?? '';
    $this->target_tracking_scaling_policy_configuration = $s['target_tracking_scaling_policy_configuration'] ?? null;
  }
}

type AutoScalingRoleArn = string;

class AutoScalingSettingsDescription {
  public ?BooleanObject $auto_scaling_disabled;
  public string $auto_scaling_role_arn;
  public ?PositiveLongObject $maximum_units;
  public ?PositiveLongObject $minimum_units;
  public ?AutoScalingPolicyDescriptionList $scaling_policies;

  public function __construct(shape(
    ?'auto_scaling_disabled' => ?BooleanObject,
    ?'auto_scaling_role_arn' => string,
    ?'maximum_units' => ?PositiveLongObject,
    ?'minimum_units' => ?PositiveLongObject,
    ?'scaling_policies' => ?AutoScalingPolicyDescriptionList,
  ) $s = shape()) {
    $this->auto_scaling_disabled = $s['auto_scaling_disabled'] ?? false;
    $this->auto_scaling_role_arn = $s['auto_scaling_role_arn'] ?? '';
    $this->maximum_units = $s['maximum_units'] ?? 0;
    $this->minimum_units = $s['minimum_units'] ?? 0;
    $this->scaling_policies = $s['scaling_policies'] ?? vec[];
  }
}

class AutoScalingSettingsUpdate {
  public ?BooleanObject $auto_scaling_disabled;
  public ?AutoScalingRoleArn $auto_scaling_role_arn;
  public ?PositiveLongObject $maximum_units;
  public ?PositiveLongObject $minimum_units;
  public ?AutoScalingPolicyUpdate $scaling_policy_update;

  public function __construct(shape(
    ?'auto_scaling_disabled' => ?BooleanObject,
    ?'auto_scaling_role_arn' => ?AutoScalingRoleArn,
    ?'maximum_units' => ?PositiveLongObject,
    ?'minimum_units' => ?PositiveLongObject,
    ?'scaling_policy_update' => ?AutoScalingPolicyUpdate,
  ) $s = shape()) {
    $this->auto_scaling_disabled = $s['auto_scaling_disabled'] ?? false;
    $this->auto_scaling_role_arn = $s['auto_scaling_role_arn'] ?? '';
    $this->maximum_units = $s['maximum_units'] ?? 0;
    $this->minimum_units = $s['minimum_units'] ?? 0;
    $this->scaling_policy_update = $s['scaling_policy_update'] ?? null;
  }
}

class AutoScalingTargetTrackingScalingPolicyConfigurationDescription {
  public ?BooleanObject $disable_scale_in;
  public ?IntegerObject $scale_in_cooldown;
  public ?IntegerObject $scale_out_cooldown;
  public ?Double $target_value;

  public function __construct(shape(
    ?'disable_scale_in' => ?BooleanObject,
    ?'scale_in_cooldown' => ?IntegerObject,
    ?'scale_out_cooldown' => ?IntegerObject,
    ?'target_value' => ?Double,
  ) $s = shape()) {
    $this->disable_scale_in = $s['disable_scale_in'] ?? false;
    $this->scale_in_cooldown = $s['scale_in_cooldown'] ?? 0;
    $this->scale_out_cooldown = $s['scale_out_cooldown'] ?? 0;
    $this->target_value = $s['target_value'] ?? 0.0;
  }
}

class AutoScalingTargetTrackingScalingPolicyConfigurationUpdate {
  public ?BooleanObject $disable_scale_in;
  public ?IntegerObject $scale_in_cooldown;
  public ?IntegerObject $scale_out_cooldown;
  public ?Double $target_value;

  public function __construct(shape(
    ?'disable_scale_in' => ?BooleanObject,
    ?'scale_in_cooldown' => ?IntegerObject,
    ?'scale_out_cooldown' => ?IntegerObject,
    ?'target_value' => ?Double,
  ) $s = shape()) {
    $this->disable_scale_in = $s['disable_scale_in'] ?? false;
    $this->scale_in_cooldown = $s['scale_in_cooldown'] ?? 0;
    $this->scale_out_cooldown = $s['scale_out_cooldown'] ?? 0;
    $this->target_value = $s['target_value'] ?? 0.0;
  }
}

type Backfilling = bool;

type BackupArn = string;

type BackupCreationDateTime = int;

class BackupDescription {
  public ?BackupDetails $backup_details;
  public ?SourceTableDetails $source_table_details;
  public ?SourceTableFeatureDetails $source_table_feature_details;

  public function __construct(shape(
    ?'backup_details' => ?BackupDetails,
    ?'source_table_details' => ?SourceTableDetails,
    ?'source_table_feature_details' => ?SourceTableFeatureDetails,
  ) $s = shape()) {
    $this->backup_details = $s['backup_details'] ?? null;
    $this->source_table_details = $s['source_table_details'] ?? null;
    $this->source_table_feature_details = $s['source_table_feature_details'] ?? null;
  }
}

class BackupDetails {
  public ?BackupArn $backup_arn;
  public ?BackupCreationDateTime $backup_creation_date_time;
  public ?Date $backup_expiry_date_time;
  public ?BackupName $backup_name;
  public ?BackupSizeBytes $backup_size_bytes;
  public ?BackupStatus $backup_status;
  public ?BackupType $backup_type;

  public function __construct(shape(
    ?'backup_arn' => ?BackupArn,
    ?'backup_creation_date_time' => ?BackupCreationDateTime,
    ?'backup_expiry_date_time' => ?Date,
    ?'backup_name' => ?BackupName,
    ?'backup_size_bytes' => ?BackupSizeBytes,
    ?'backup_status' => ?BackupStatus,
    ?'backup_type' => ?BackupType,
  ) $s = shape()) {
    $this->backup_arn = $s['backup_arn'] ?? '';
    $this->backup_creation_date_time = $s['backup_creation_date_time'] ?? 0;
    $this->backup_expiry_date_time = $s['backup_expiry_date_time'] ?? 0;
    $this->backup_name = $s['backup_name'] ?? '';
    $this->backup_size_bytes = $s['backup_size_bytes'] ?? 0;
    $this->backup_status = $s['backup_status'] ?? '';
    $this->backup_type = $s['backup_type'] ?? '';
  }
}

class BackupInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type BackupName = string;

class BackupNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type BackupSizeBytes = int;

type BackupStatus = string;

type BackupSummaries = vec<BackupSummary>;

class BackupSummary {
  public ?BackupArn $backup_arn;
  public ?BackupCreationDateTime $backup_creation_date_time;
  public ?Date $backup_expiry_date_time;
  public ?BackupName $backup_name;
  public ?BackupSizeBytes $backup_size_bytes;
  public ?BackupStatus $backup_status;
  public ?BackupType $backup_type;
  public ?TableArn $table_arn;
  public ?TableId $table_id;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'backup_arn' => ?BackupArn,
    ?'backup_creation_date_time' => ?BackupCreationDateTime,
    ?'backup_expiry_date_time' => ?Date,
    ?'backup_name' => ?BackupName,
    ?'backup_size_bytes' => ?BackupSizeBytes,
    ?'backup_status' => ?BackupStatus,
    ?'backup_type' => ?BackupType,
    ?'table_arn' => ?TableArn,
    ?'table_id' => ?TableId,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->backup_arn = $s['backup_arn'] ?? '';
    $this->backup_creation_date_time = $s['backup_creation_date_time'] ?? 0;
    $this->backup_expiry_date_time = $s['backup_expiry_date_time'] ?? 0;
    $this->backup_name = $s['backup_name'] ?? '';
    $this->backup_size_bytes = $s['backup_size_bytes'] ?? 0;
    $this->backup_status = $s['backup_status'] ?? '';
    $this->backup_type = $s['backup_type'] ?? '';
    $this->table_arn = $s['table_arn'] ?? '';
    $this->table_id = $s['table_id'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type BackupType = string;

type BackupTypeFilter = string;

type BackupsInputLimit = int;

class BatchGetItemInput {
  public ?BatchGetRequestMap $request_items;
  public ?ReturnConsumedCapacity $return_consumed_capacity;

  public function __construct(shape(
    ?'request_items' => ?BatchGetRequestMap,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
  ) $s = shape()) {
    $this->request_items = $s['request_items'] ?? dict[];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
  }
}

class BatchGetItemOutput {
  public ?ConsumedCapacityMultiple $consumed_capacity;
  public ?BatchGetResponseMap $responses;
  public ?BatchGetRequestMap $unprocessed_keys;

  public function __construct(shape(
    ?'consumed_capacity' => ?ConsumedCapacityMultiple,
    ?'responses' => ?BatchGetResponseMap,
    ?'unprocessed_keys' => ?BatchGetRequestMap,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? vec[];
    $this->responses = $s['responses'] ?? dict[];
    $this->unprocessed_keys = $s['unprocessed_keys'] ?? dict[];
  }
}

type BatchGetRequestMap = dict<TableName, KeysAndAttributes>;

type BatchGetResponseMap = dict<TableName, ItemList>;

class BatchWriteItemInput {
  public ?BatchWriteItemRequestMap $request_items;
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?ReturnItemCollectionMetrics $return_item_collection_metrics;

  public function __construct(shape(
    ?'request_items' => ?BatchWriteItemRequestMap,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'return_item_collection_metrics' => ?ReturnItemCollectionMetrics,
  ) $s = shape()) {
    $this->request_items = $s['request_items'] ?? dict[];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? '';
  }
}

class BatchWriteItemOutput {
  public ?ConsumedCapacityMultiple $consumed_capacity;
  public ?ItemCollectionMetricsPerTable $item_collection_metrics;
  public ?BatchWriteItemRequestMap $unprocessed_items;

  public function __construct(shape(
    ?'consumed_capacity' => ?ConsumedCapacityMultiple,
    ?'item_collection_metrics' => ?ItemCollectionMetricsPerTable,
    ?'unprocessed_items' => ?BatchWriteItemRequestMap,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? vec[];
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? dict[];
    $this->unprocessed_items = $s['unprocessed_items'] ?? dict[];
  }
}

type BatchWriteItemRequestMap = dict<TableName, WriteRequests>;

type BillingMode = string;

class BillingModeSummary {
  public ?BillingMode $billing_mode;
  public ?Date $last_update_to_pay_per_request_date_time;

  public function __construct(shape(
    ?'billing_mode' => ?BillingMode,
    ?'last_update_to_pay_per_request_date_time' => ?Date,
  ) $s = shape()) {
    $this->billing_mode = $s['billing_mode'] ?? '';
    $this->last_update_to_pay_per_request_date_time = $s['last_update_to_pay_per_request_date_time'] ?? 0;
  }
}

type BinaryAttributeValue = string;

type BinarySetAttributeValue = vec<BinaryAttributeValue>;

type BooleanAttributeValue = bool;

type BooleanObject = bool;

class CancellationReason {
  public ?Code $code;
  public ?AttributeMap $item;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?Code,
    ?'item' => ?AttributeMap,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->item = $s['item'] ?? dict[];
    $this->message = $s['message'] ?? '';
  }
}

type CancellationReasonList = vec<CancellationReason>;

class Capacity {
  public ?ConsumedCapacityUnits $capacity_units;
  public ?ConsumedCapacityUnits $read_capacity_units;
  public ?ConsumedCapacityUnits $write_capacity_units;

  public function __construct(shape(
    ?'capacity_units' => ?ConsumedCapacityUnits,
    ?'read_capacity_units' => ?ConsumedCapacityUnits,
    ?'write_capacity_units' => ?ConsumedCapacityUnits,
  ) $s = shape()) {
    $this->capacity_units = $s['capacity_units'] ?? 0.0;
    $this->read_capacity_units = $s['read_capacity_units'] ?? 0.0;
    $this->write_capacity_units = $s['write_capacity_units'] ?? 0.0;
  }
}

type ClientRequestToken = string;

type Code = string;

type ComparisonOperator = string;

class Condition {
  public ?AttributeValueList $attribute_value_list;
  public ?ComparisonOperator $comparison_operator;

  public function __construct(shape(
    ?'attribute_value_list' => ?AttributeValueList,
    ?'comparison_operator' => ?ComparisonOperator,
  ) $s = shape()) {
    $this->attribute_value_list = $s['attribute_value_list'] ?? vec[];
    $this->comparison_operator = $s['comparison_operator'] ?? '';
  }
}

class ConditionCheck {
  public ?ConditionExpression $condition_expression;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?Key $key;
  public ?ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'condition_expression' => ?ConditionExpression,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'key' => ?Key,
    ?'return_values_on_condition_check_failure' => ?ReturnValuesOnConditionCheckFailure,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->condition_expression = $s['condition_expression'] ?? '';
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->key = $s['key'] ?? dict[];
    $this->return_values_on_condition_check_failure = $s['return_values_on_condition_check_failure'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type ConditionExpression = string;

class ConditionalCheckFailedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ConditionalOperator = string;

type ConsistentRead = bool;

class ConsumedCapacity {
  public ?ConsumedCapacityUnits $capacity_units;
  public ?SecondaryIndexesCapacityMap $global_secondary_indexes;
  public ?SecondaryIndexesCapacityMap $local_secondary_indexes;
  public ?ConsumedCapacityUnits $read_capacity_units;
  public ?Capacity $table;
  public ?TableName $table_name;
  public ?ConsumedCapacityUnits $write_capacity_units;

  public function __construct(shape(
    ?'capacity_units' => ?ConsumedCapacityUnits,
    ?'global_secondary_indexes' => ?SecondaryIndexesCapacityMap,
    ?'local_secondary_indexes' => ?SecondaryIndexesCapacityMap,
    ?'read_capacity_units' => ?ConsumedCapacityUnits,
    ?'table' => ?Capacity,
    ?'table_name' => ?TableName,
    ?'write_capacity_units' => ?ConsumedCapacityUnits,
  ) $s = shape()) {
    $this->capacity_units = $s['capacity_units'] ?? 0.0;
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? dict[];
    $this->local_secondary_indexes = $s['local_secondary_indexes'] ?? dict[];
    $this->read_capacity_units = $s['read_capacity_units'] ?? 0.0;
    $this->table = $s['table'] ?? null;
    $this->table_name = $s['table_name'] ?? '';
    $this->write_capacity_units = $s['write_capacity_units'] ?? 0.0;
  }
}

type ConsumedCapacityMultiple = vec<ConsumedCapacity>;

type ConsumedCapacityUnits = float;

class ContinuousBackupsDescription {
  public ?ContinuousBackupsStatus $continuous_backups_status;
  public ?PointInTimeRecoveryDescription $point_in_time_recovery_description;

  public function __construct(shape(
    ?'continuous_backups_status' => ?ContinuousBackupsStatus,
    ?'point_in_time_recovery_description' => ?PointInTimeRecoveryDescription,
  ) $s = shape()) {
    $this->continuous_backups_status = $s['continuous_backups_status'] ?? '';
    $this->point_in_time_recovery_description = $s['point_in_time_recovery_description'] ?? null;
  }
}

type ContinuousBackupsStatus = string;

class ContinuousBackupsUnavailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ContributorInsightsAction = string;

type ContributorInsightsRule = string;

type ContributorInsightsRuleList = vec<ContributorInsightsRule>;

type ContributorInsightsStatus = string;

type ContributorInsightsSummaries = vec<ContributorInsightsSummary>;

class ContributorInsightsSummary {
  public ?ContributorInsightsStatus $contributor_insights_status;
  public ?IndexName $index_name;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'contributor_insights_status' => ?ContributorInsightsStatus,
    ?'index_name' => ?IndexName,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->contributor_insights_status = $s['contributor_insights_status'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class CreateBackupInput {
  public ?BackupName $backup_name;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'backup_name' => ?BackupName,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->backup_name = $s['backup_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class CreateBackupOutput {
  public ?BackupDetails $backup_details;

  public function __construct(shape(
    ?'backup_details' => ?BackupDetails,
  ) $s = shape()) {
    $this->backup_details = $s['backup_details'] ?? null;
  }
}

class CreateGlobalSecondaryIndexAction {
  public ?IndexName $index_name;
  public ?KeySchema $key_schema;
  public ?Projection $projection;
  public ?ProvisionedThroughput $provisioned_throughput;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'key_schema' => ?KeySchema,
    ?'projection' => ?Projection,
    ?'provisioned_throughput' => ?ProvisionedThroughput,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->projection = $s['projection'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

class CreateGlobalTableInput {
  public ?TableName $global_table_name;
  public ?ReplicaList $replication_group;

  public function __construct(shape(
    ?'global_table_name' => ?TableName,
    ?'replication_group' => ?ReplicaList,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? '';
    $this->replication_group = $s['replication_group'] ?? vec[];
  }
}

class CreateGlobalTableOutput {
  public ?GlobalTableDescription $global_table_description;

  public function __construct(shape(
    ?'global_table_description' => ?GlobalTableDescription,
  ) $s = shape()) {
    $this->global_table_description = $s['global_table_description'] ?? null;
  }
}

class CreateReplicaAction {
  public ?RegionName $region_name;

  public function __construct(shape(
    ?'region_name' => ?RegionName,
  ) $s = shape()) {
    $this->region_name = $s['region_name'] ?? '';
  }
}

class CreateReplicationGroupMemberAction {
  public ?ReplicaGlobalSecondaryIndexList $global_secondary_indexes;
  public ?KMSMasterKeyId $kms_master_key_id;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;
  public ?RegionName $region_name;

  public function __construct(shape(
    ?'global_secondary_indexes' => ?ReplicaGlobalSecondaryIndexList,
    ?'kms_master_key_id' => ?KMSMasterKeyId,
    ?'provisioned_throughput_override' => ?ProvisionedThroughputOverride,
    ?'region_name' => ?RegionName,
  ) $s = shape()) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? vec[];
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? '';
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->region_name = $s['region_name'] ?? '';
  }
}

class CreateTableInput {
  public ?AttributeDefinitions $attribute_definitions;
  public ?BillingMode $billing_mode;
  public ?GlobalSecondaryIndexList $global_secondary_indexes;
  public ?KeySchema $key_schema;
  public ?LocalSecondaryIndexList $local_secondary_indexes;
  public ?ProvisionedThroughput $provisioned_throughput;
  public ?SSESpecification $sse_specification;
  public ?StreamSpecification $stream_specification;
  public ?TableName $table_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'attribute_definitions' => ?AttributeDefinitions,
    ?'billing_mode' => ?BillingMode,
    ?'global_secondary_indexes' => ?GlobalSecondaryIndexList,
    ?'key_schema' => ?KeySchema,
    ?'local_secondary_indexes' => ?LocalSecondaryIndexList,
    ?'provisioned_throughput' => ?ProvisionedThroughput,
    ?'sse_specification' => ?SSESpecification,
    ?'stream_specification' => ?StreamSpecification,
    ?'table_name' => ?TableName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->attribute_definitions = $s['attribute_definitions'] ?? vec[];
    $this->billing_mode = $s['billing_mode'] ?? '';
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? vec[];
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->local_secondary_indexes = $s['local_secondary_indexes'] ?? vec[];
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
    $this->sse_specification = $s['sse_specification'] ?? null;
    $this->stream_specification = $s['stream_specification'] ?? null;
    $this->table_name = $s['table_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateTableOutput {
  public ?TableDescription $table_description;

  public function __construct(shape(
    ?'table_description' => ?TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

type Date = int;

class Delete {
  public ?ConditionExpression $condition_expression;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?Key $key;
  public ?ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'condition_expression' => ?ConditionExpression,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'key' => ?Key,
    ?'return_values_on_condition_check_failure' => ?ReturnValuesOnConditionCheckFailure,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->condition_expression = $s['condition_expression'] ?? '';
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->key = $s['key'] ?? dict[];
    $this->return_values_on_condition_check_failure = $s['return_values_on_condition_check_failure'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DeleteBackupInput {
  public ?BackupArn $backup_arn;

  public function __construct(shape(
    ?'backup_arn' => ?BackupArn,
  ) $s = shape()) {
    $this->backup_arn = $s['backup_arn'] ?? '';
  }
}

class DeleteBackupOutput {
  public ?BackupDescription $backup_description;

  public function __construct(shape(
    ?'backup_description' => ?BackupDescription,
  ) $s = shape()) {
    $this->backup_description = $s['backup_description'] ?? null;
  }
}

class DeleteGlobalSecondaryIndexAction {
  public ?IndexName $index_name;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
  }
}

class DeleteItemInput {
  public ?ConditionExpression $condition_expression;
  public ?ConditionalOperator $conditional_operator;
  public ?ExpectedAttributeMap $expected;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?Key $key;
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ?ReturnValue $return_values;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'condition_expression' => ?ConditionExpression,
    ?'conditional_operator' => ?ConditionalOperator,
    ?'expected' => ?ExpectedAttributeMap,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'key' => ?Key,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'return_item_collection_metrics' => ?ReturnItemCollectionMetrics,
    ?'return_values' => ?ReturnValue,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->condition_expression = $s['condition_expression'] ?? '';
    $this->conditional_operator = $s['conditional_operator'] ?? '';
    $this->expected = $s['expected'] ?? dict[];
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->key = $s['key'] ?? dict[];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? '';
    $this->return_values = $s['return_values'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DeleteItemOutput {
  public ?AttributeMap $attributes;
  public ?ConsumedCapacity $consumed_capacity;
  public ?ItemCollectionMetrics $item_collection_metrics;

  public function __construct(shape(
    ?'attributes' => ?AttributeMap,
    ?'consumed_capacity' => ?ConsumedCapacity,
    ?'item_collection_metrics' => ?ItemCollectionMetrics,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? null;
  }
}

class DeleteReplicaAction {
  public ?RegionName $region_name;

  public function __construct(shape(
    ?'region_name' => ?RegionName,
  ) $s = shape()) {
    $this->region_name = $s['region_name'] ?? '';
  }
}

class DeleteReplicationGroupMemberAction {
  public ?RegionName $region_name;

  public function __construct(shape(
    ?'region_name' => ?RegionName,
  ) $s = shape()) {
    $this->region_name = $s['region_name'] ?? '';
  }
}

class DeleteRequest {
  public ?Key $key;

  public function __construct(shape(
    ?'key' => ?Key,
  ) $s = shape()) {
    $this->key = $s['key'] ?? dict[];
  }
}

class DeleteTableInput {
  public ?TableName $table_name;

  public function __construct(shape(
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DeleteTableOutput {
  public ?TableDescription $table_description;

  public function __construct(shape(
    ?'table_description' => ?TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

class DescribeBackupInput {
  public ?BackupArn $backup_arn;

  public function __construct(shape(
    ?'backup_arn' => ?BackupArn,
  ) $s = shape()) {
    $this->backup_arn = $s['backup_arn'] ?? '';
  }
}

class DescribeBackupOutput {
  public ?BackupDescription $backup_description;

  public function __construct(shape(
    ?'backup_description' => ?BackupDescription,
  ) $s = shape()) {
    $this->backup_description = $s['backup_description'] ?? null;
  }
}

class DescribeContinuousBackupsInput {
  public ?TableName $table_name;

  public function __construct(shape(
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DescribeContinuousBackupsOutput {
  public ?ContinuousBackupsDescription $continuous_backups_description;

  public function __construct(shape(
    ?'continuous_backups_description' => ?ContinuousBackupsDescription,
  ) $s = shape()) {
    $this->continuous_backups_description = $s['continuous_backups_description'] ?? null;
  }
}

class DescribeContributorInsightsInput {
  public ?IndexName $index_name;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DescribeContributorInsightsOutput {
  public ?ContributorInsightsRuleList $contributor_insights_rule_list;
  public ?ContributorInsightsStatus $contributor_insights_status;
  public ?FailureException $failure_exception;
  public ?IndexName $index_name;
  public ?LastUpdateDateTime $last_update_date_time;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'contributor_insights_rule_list' => ?ContributorInsightsRuleList,
    ?'contributor_insights_status' => ?ContributorInsightsStatus,
    ?'failure_exception' => ?FailureException,
    ?'index_name' => ?IndexName,
    ?'last_update_date_time' => ?LastUpdateDateTime,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->contributor_insights_rule_list = $s['contributor_insights_rule_list'] ?? vec[];
    $this->contributor_insights_status = $s['contributor_insights_status'] ?? '';
    $this->failure_exception = $s['failure_exception'] ?? null;
    $this->index_name = $s['index_name'] ?? '';
    $this->last_update_date_time = $s['last_update_date_time'] ?? 0;
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DescribeEndpointsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeEndpointsResponse {
  public ?Endpoints $endpoints;

  public function __construct(shape(
    ?'endpoints' => ?Endpoints,
  ) $s = shape()) {
    $this->endpoints = $s['endpoints'] ?? vec[];
  }
}

class DescribeGlobalTableInput {
  public ?TableName $global_table_name;

  public function __construct(shape(
    ?'global_table_name' => ?TableName,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? '';
  }
}

class DescribeGlobalTableOutput {
  public ?GlobalTableDescription $global_table_description;

  public function __construct(shape(
    ?'global_table_description' => ?GlobalTableDescription,
  ) $s = shape()) {
    $this->global_table_description = $s['global_table_description'] ?? null;
  }
}

class DescribeGlobalTableSettingsInput {
  public ?TableName $global_table_name;

  public function __construct(shape(
    ?'global_table_name' => ?TableName,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? '';
  }
}

class DescribeGlobalTableSettingsOutput {
  public ?TableName $global_table_name;
  public ?ReplicaSettingsDescriptionList $replica_settings;

  public function __construct(shape(
    ?'global_table_name' => ?TableName,
    ?'replica_settings' => ?ReplicaSettingsDescriptionList,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? '';
    $this->replica_settings = $s['replica_settings'] ?? vec[];
  }
}

class DescribeLimitsInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeLimitsOutput {
  public ?PositiveLongObject $account_max_read_capacity_units;
  public ?PositiveLongObject $account_max_write_capacity_units;
  public ?PositiveLongObject $table_max_read_capacity_units;
  public ?PositiveLongObject $table_max_write_capacity_units;

  public function __construct(shape(
    ?'account_max_read_capacity_units' => ?PositiveLongObject,
    ?'account_max_write_capacity_units' => ?PositiveLongObject,
    ?'table_max_read_capacity_units' => ?PositiveLongObject,
    ?'table_max_write_capacity_units' => ?PositiveLongObject,
  ) $s = shape()) {
    $this->account_max_read_capacity_units = $s['account_max_read_capacity_units'] ?? 0;
    $this->account_max_write_capacity_units = $s['account_max_write_capacity_units'] ?? 0;
    $this->table_max_read_capacity_units = $s['table_max_read_capacity_units'] ?? 0;
    $this->table_max_write_capacity_units = $s['table_max_write_capacity_units'] ?? 0;
  }
}

class DescribeTableInput {
  public ?TableName $table_name;

  public function __construct(shape(
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DescribeTableOutput {
  public ?TableDescription $table;

  public function __construct(shape(
    ?'table' => ?TableDescription,
  ) $s = shape()) {
    $this->table = $s['table'] ?? null;
  }
}

class DescribeTableReplicaAutoScalingInput {
  public ?TableName $table_name;

  public function __construct(shape(
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DescribeTableReplicaAutoScalingOutput {
  public ?TableAutoScalingDescription $table_auto_scaling_description;

  public function __construct(shape(
    ?'table_auto_scaling_description' => ?TableAutoScalingDescription,
  ) $s = shape()) {
    $this->table_auto_scaling_description = $s['table_auto_scaling_description'] ?? null;
  }
}

class DescribeTimeToLiveInput {
  public ?TableName $table_name;

  public function __construct(shape(
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->table_name = $s['table_name'] ?? '';
  }
}

class DescribeTimeToLiveOutput {
  public ?TimeToLiveDescription $time_to_live_description;

  public function __construct(shape(
    ?'time_to_live_description' => ?TimeToLiveDescription,
  ) $s = shape()) {
    $this->time_to_live_description = $s['time_to_live_description'] ?? null;
  }
}

type Double = float;

class Endpoint {
  public string $address;
  public ?Long $cache_period_in_minutes;

  public function __construct(shape(
    ?'address' => string,
    ?'cache_period_in_minutes' => ?Long,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->cache_period_in_minutes = $s['cache_period_in_minutes'] ?? 0;
  }
}

type Endpoints = vec<Endpoint>;

type ErrorMessage = string;

type ExceptionDescription = string;

type ExceptionName = string;

type ExpectedAttributeMap = dict<AttributeName, ExpectedAttributeValue>;

class ExpectedAttributeValue {
  public ?AttributeValueList $attribute_value_list;
  public ?ComparisonOperator $comparison_operator;
  public ?BooleanObject $exists;
  public ?AttributeValue $value;

  public function __construct(shape(
    ?'attribute_value_list' => ?AttributeValueList,
    ?'comparison_operator' => ?ComparisonOperator,
    ?'exists' => ?BooleanObject,
    ?'value' => ?AttributeValue,
  ) $s = shape()) {
    $this->attribute_value_list = $s['attribute_value_list'] ?? vec[];
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->exists = $s['exists'] ?? false;
    $this->value = $s['value'] ?? null;
  }
}

type ExpressionAttributeNameMap = dict<ExpressionAttributeNameVariable, AttributeName>;

type ExpressionAttributeNameVariable = string;

type ExpressionAttributeValueMap = dict<ExpressionAttributeValueVariable, AttributeValue>;

type ExpressionAttributeValueVariable = string;

class FailureException {
  public ?ExceptionDescription $exception_description;
  public ?ExceptionName $exception_name;

  public function __construct(shape(
    ?'exception_description' => ?ExceptionDescription,
    ?'exception_name' => ?ExceptionName,
  ) $s = shape()) {
    $this->exception_description = $s['exception_description'] ?? '';
    $this->exception_name = $s['exception_name'] ?? '';
  }
}

type FilterConditionMap = dict<AttributeName, Condition>;

class Get {
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?Key $key;
  public ?ProjectionExpression $projection_expression;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'key' => ?Key,
    ?'projection_expression' => ?ProjectionExpression,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->key = $s['key'] ?? dict[];
    $this->projection_expression = $s['projection_expression'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class GetItemInput {
  public ?AttributeNameList $attributes_to_get;
  public ?ConsistentRead $consistent_read;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?Key $key;
  public ?ProjectionExpression $projection_expression;
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'attributes_to_get' => ?AttributeNameList,
    ?'consistent_read' => ?ConsistentRead,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'key' => ?Key,
    ?'projection_expression' => ?ProjectionExpression,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? vec[];
    $this->consistent_read = $s['consistent_read'] ?? false;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->key = $s['key'] ?? dict[];
    $this->projection_expression = $s['projection_expression'] ?? '';
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class GetItemOutput {
  public ?ConsumedCapacity $consumed_capacity;
  public ?AttributeMap $item;

  public function __construct(shape(
    ?'consumed_capacity' => ?ConsumedCapacity,
    ?'item' => ?AttributeMap,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item = $s['item'] ?? dict[];
  }
}

class GlobalSecondaryIndex {
  public ?IndexName $index_name;
  public ?KeySchema $key_schema;
  public ?Projection $projection;
  public ?ProvisionedThroughput $provisioned_throughput;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'key_schema' => ?KeySchema,
    ?'projection' => ?Projection,
    ?'provisioned_throughput' => ?ProvisionedThroughput,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->projection = $s['projection'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

class GlobalSecondaryIndexAutoScalingUpdate {
  public ?IndexName $index_name;
  public ?AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_update;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'provisioned_write_capacity_auto_scaling_update' => ?AutoScalingSettingsUpdate,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->provisioned_write_capacity_auto_scaling_update = $s['provisioned_write_capacity_auto_scaling_update'] ?? null;
  }
}

type GlobalSecondaryIndexAutoScalingUpdateList = vec<GlobalSecondaryIndexAutoScalingUpdate>;

class GlobalSecondaryIndexDescription {
  public ?Backfilling $backfilling;
  public string $index_arn;
  public ?IndexName $index_name;
  public ?Long $index_size_bytes;
  public ?IndexStatus $index_status;
  public ?Long $item_count;
  public ?KeySchema $key_schema;
  public ?Projection $projection;
  public ?ProvisionedThroughputDescription $provisioned_throughput;

  public function __construct(shape(
    ?'backfilling' => ?Backfilling,
    ?'index_arn' => string,
    ?'index_name' => ?IndexName,
    ?'index_size_bytes' => ?Long,
    ?'index_status' => ?IndexStatus,
    ?'item_count' => ?Long,
    ?'key_schema' => ?KeySchema,
    ?'projection' => ?Projection,
    ?'provisioned_throughput' => ?ProvisionedThroughputDescription,
  ) $s = shape()) {
    $this->backfilling = $s['backfilling'] ?? false;
    $this->index_arn = $s['index_arn'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->index_size_bytes = $s['index_size_bytes'] ?? 0;
    $this->index_status = $s['index_status'] ?? '';
    $this->item_count = $s['item_count'] ?? 0;
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->projection = $s['projection'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

type GlobalSecondaryIndexDescriptionList = vec<GlobalSecondaryIndexDescription>;

class GlobalSecondaryIndexInfo {
  public ?IndexName $index_name;
  public ?KeySchema $key_schema;
  public ?Projection $projection;
  public ?ProvisionedThroughput $provisioned_throughput;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'key_schema' => ?KeySchema,
    ?'projection' => ?Projection,
    ?'provisioned_throughput' => ?ProvisionedThroughput,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->projection = $s['projection'] ?? null;
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

type GlobalSecondaryIndexList = vec<GlobalSecondaryIndex>;

class GlobalSecondaryIndexUpdate {
  public ?CreateGlobalSecondaryIndexAction $create;
  public ?DeleteGlobalSecondaryIndexAction $delete;
  public ?UpdateGlobalSecondaryIndexAction $update;

  public function __construct(shape(
    ?'create' => ?CreateGlobalSecondaryIndexAction,
    ?'delete' => ?DeleteGlobalSecondaryIndexAction,
    ?'update' => ?UpdateGlobalSecondaryIndexAction,
  ) $s = shape()) {
    $this->create = $s['create'] ?? null;
    $this->delete = $s['delete'] ?? null;
    $this->update = $s['update'] ?? null;
  }
}

type GlobalSecondaryIndexUpdateList = vec<GlobalSecondaryIndexUpdate>;

type GlobalSecondaryIndexes = vec<GlobalSecondaryIndexInfo>;

class GlobalTable {
  public ?TableName $global_table_name;
  public ?ReplicaList $replication_group;

  public function __construct(shape(
    ?'global_table_name' => ?TableName,
    ?'replication_group' => ?ReplicaList,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? '';
    $this->replication_group = $s['replication_group'] ?? vec[];
  }
}

class GlobalTableAlreadyExistsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type GlobalTableArnString = string;

class GlobalTableDescription {
  public ?Date $creation_date_time;
  public ?GlobalTableArnString $global_table_arn;
  public ?TableName $global_table_name;
  public ?GlobalTableStatus $global_table_status;
  public ?ReplicaDescriptionList $replication_group;

  public function __construct(shape(
    ?'creation_date_time' => ?Date,
    ?'global_table_arn' => ?GlobalTableArnString,
    ?'global_table_name' => ?TableName,
    ?'global_table_status' => ?GlobalTableStatus,
    ?'replication_group' => ?ReplicaDescriptionList,
  ) $s = shape()) {
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->global_table_arn = $s['global_table_arn'] ?? '';
    $this->global_table_name = $s['global_table_name'] ?? '';
    $this->global_table_status = $s['global_table_status'] ?? '';
    $this->replication_group = $s['replication_group'] ?? vec[];
  }
}

class GlobalTableGlobalSecondaryIndexSettingsUpdate {
  public ?IndexName $index_name;
  public ?AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_settings_update;
  public ?PositiveLongObject $provisioned_write_capacity_units;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'provisioned_write_capacity_auto_scaling_settings_update' => ?AutoScalingSettingsUpdate,
    ?'provisioned_write_capacity_units' => ?PositiveLongObject,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->provisioned_write_capacity_auto_scaling_settings_update = $s['provisioned_write_capacity_auto_scaling_settings_update'] ?? null;
    $this->provisioned_write_capacity_units = $s['provisioned_write_capacity_units'] ?? 0;
  }
}

type GlobalTableGlobalSecondaryIndexSettingsUpdateList = vec<GlobalTableGlobalSecondaryIndexSettingsUpdate>;

type GlobalTableList = vec<GlobalTable>;

class GlobalTableNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type GlobalTableStatus = string;

class IdempotentParameterMismatchException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IndexName = string;

class IndexNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IndexStatus = string;

type Integer = int;

type IntegerObject = int;

class InternalServerError {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRestoreTimeException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ItemCollectionKeyAttributeMap = dict<AttributeName, AttributeValue>;

class ItemCollectionMetrics {
  public ?ItemCollectionKeyAttributeMap $item_collection_key;
  public ?ItemCollectionSizeEstimateRange $size_estimate_range_gb;

  public function __construct(shape(
    ?'item_collection_key' => ?ItemCollectionKeyAttributeMap,
    ?'size_estimate_range_gb' => ?ItemCollectionSizeEstimateRange,
  ) $s = shape()) {
    $this->item_collection_key = $s['item_collection_key'] ?? dict[];
    $this->size_estimate_range_gb = $s['size_estimate_range_gb'] ?? vec[];
  }
}

type ItemCollectionMetricsMultiple = vec<ItemCollectionMetrics>;

type ItemCollectionMetricsPerTable = dict<TableName, ItemCollectionMetricsMultiple>;

type ItemCollectionSizeEstimateBound = float;

type ItemCollectionSizeEstimateRange = vec<ItemCollectionSizeEstimateBound>;

class ItemCollectionSizeLimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ItemCount = int;

type ItemList = vec<AttributeMap>;

class ItemResponse {
  public ?AttributeMap $item;

  public function __construct(shape(
    ?'item' => ?AttributeMap,
  ) $s = shape()) {
    $this->item = $s['item'] ?? dict[];
  }
}

type ItemResponseList = vec<ItemResponse>;

type KMSMasterKeyArn = string;

type KMSMasterKeyId = string;

type Key = dict<AttributeName, AttributeValue>;

type KeyConditions = dict<AttributeName, Condition>;

type KeyExpression = string;

type KeyList = vec<Key>;

type KeySchema = vec<KeySchemaElement>;

type KeySchemaAttributeName = string;

class KeySchemaElement {
  public ?KeySchemaAttributeName $attribute_name;
  public ?KeyType $key_type;

  public function __construct(shape(
    ?'attribute_name' => ?KeySchemaAttributeName,
    ?'key_type' => ?KeyType,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->key_type = $s['key_type'] ?? '';
  }
}

type KeyType = string;

class KeysAndAttributes {
  public ?AttributeNameList $attributes_to_get;
  public ?ConsistentRead $consistent_read;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?KeyList $keys;
  public ?ProjectionExpression $projection_expression;

  public function __construct(shape(
    ?'attributes_to_get' => ?AttributeNameList,
    ?'consistent_read' => ?ConsistentRead,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'keys' => ?KeyList,
    ?'projection_expression' => ?ProjectionExpression,
  ) $s = shape()) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? vec[];
    $this->consistent_read = $s['consistent_read'] ?? false;
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->keys = $s['keys'] ?? vec[];
    $this->projection_expression = $s['projection_expression'] ?? '';
  }
}

type LastUpdateDateTime = int;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ListAttributeValue = vec<AttributeValue>;

class ListBackupsInput {
  public ?BackupTypeFilter $backup_type;
  public ?BackupArn $exclusive_start_backup_arn;
  public ?BackupsInputLimit $limit;
  public ?TableName $table_name;
  public ?TimeRangeLowerBound $time_range_lower_bound;
  public ?TimeRangeUpperBound $time_range_upper_bound;

  public function __construct(shape(
    ?'backup_type' => ?BackupTypeFilter,
    ?'exclusive_start_backup_arn' => ?BackupArn,
    ?'limit' => ?BackupsInputLimit,
    ?'table_name' => ?TableName,
    ?'time_range_lower_bound' => ?TimeRangeLowerBound,
    ?'time_range_upper_bound' => ?TimeRangeUpperBound,
  ) $s = shape()) {
    $this->backup_type = $s['backup_type'] ?? '';
    $this->exclusive_start_backup_arn = $s['exclusive_start_backup_arn'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->table_name = $s['table_name'] ?? '';
    $this->time_range_lower_bound = $s['time_range_lower_bound'] ?? 0;
    $this->time_range_upper_bound = $s['time_range_upper_bound'] ?? 0;
  }
}

class ListBackupsOutput {
  public ?BackupSummaries $backup_summaries;
  public ?BackupArn $last_evaluated_backup_arn;

  public function __construct(shape(
    ?'backup_summaries' => ?BackupSummaries,
    ?'last_evaluated_backup_arn' => ?BackupArn,
  ) $s = shape()) {
    $this->backup_summaries = $s['backup_summaries'] ?? vec[];
    $this->last_evaluated_backup_arn = $s['last_evaluated_backup_arn'] ?? '';
  }
}

class ListContributorInsightsInput {
  public ?ListContributorInsightsLimit $max_results;
  public ?NextTokenString $next_token;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'max_results' => ?ListContributorInsightsLimit,
    ?'next_token' => ?NextTokenString,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type ListContributorInsightsLimit = int;

class ListContributorInsightsOutput {
  public ?ContributorInsightsSummaries $contributor_insights_summaries;
  public ?NextTokenString $next_token;

  public function __construct(shape(
    ?'contributor_insights_summaries' => ?ContributorInsightsSummaries,
    ?'next_token' => ?NextTokenString,
  ) $s = shape()) {
    $this->contributor_insights_summaries = $s['contributor_insights_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGlobalTablesInput {
  public ?TableName $exclusive_start_global_table_name;
  public ?PositiveIntegerObject $limit;
  public ?RegionName $region_name;

  public function __construct(shape(
    ?'exclusive_start_global_table_name' => ?TableName,
    ?'limit' => ?PositiveIntegerObject,
    ?'region_name' => ?RegionName,
  ) $s = shape()) {
    $this->exclusive_start_global_table_name = $s['exclusive_start_global_table_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->region_name = $s['region_name'] ?? '';
  }
}

class ListGlobalTablesOutput {
  public ?GlobalTableList $global_tables;
  public ?TableName $last_evaluated_global_table_name;

  public function __construct(shape(
    ?'global_tables' => ?GlobalTableList,
    ?'last_evaluated_global_table_name' => ?TableName,
  ) $s = shape()) {
    $this->global_tables = $s['global_tables'] ?? vec[];
    $this->last_evaluated_global_table_name = $s['last_evaluated_global_table_name'] ?? '';
  }
}

class ListTablesInput {
  public ?TableName $exclusive_start_table_name;
  public ?ListTablesInputLimit $limit;

  public function __construct(shape(
    ?'exclusive_start_table_name' => ?TableName,
    ?'limit' => ?ListTablesInputLimit,
  ) $s = shape()) {
    $this->exclusive_start_table_name = $s['exclusive_start_table_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
  }
}

type ListTablesInputLimit = int;

class ListTablesOutput {
  public ?TableName $last_evaluated_table_name;
  public ?TableNameList $table_names;

  public function __construct(shape(
    ?'last_evaluated_table_name' => ?TableName,
    ?'table_names' => ?TableNameList,
  ) $s = shape()) {
    $this->last_evaluated_table_name = $s['last_evaluated_table_name'] ?? '';
    $this->table_names = $s['table_names'] ?? vec[];
  }
}

class ListTagsOfResourceInput {
  public ?NextTokenString $next_token;
  public ?ResourceArnString $resource_arn;

  public function __construct(shape(
    ?'next_token' => ?NextTokenString,
    ?'resource_arn' => ?ResourceArnString,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsOfResourceOutput {
  public ?NextTokenString $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => ?NextTokenString,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class LocalSecondaryIndex {
  public ?IndexName $index_name;
  public ?KeySchema $key_schema;
  public ?Projection $projection;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'key_schema' => ?KeySchema,
    ?'projection' => ?Projection,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->projection = $s['projection'] ?? null;
  }
}

class LocalSecondaryIndexDescription {
  public string $index_arn;
  public ?IndexName $index_name;
  public ?Long $index_size_bytes;
  public ?Long $item_count;
  public ?KeySchema $key_schema;
  public ?Projection $projection;

  public function __construct(shape(
    ?'index_arn' => string,
    ?'index_name' => ?IndexName,
    ?'index_size_bytes' => ?Long,
    ?'item_count' => ?Long,
    ?'key_schema' => ?KeySchema,
    ?'projection' => ?Projection,
  ) $s = shape()) {
    $this->index_arn = $s['index_arn'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->index_size_bytes = $s['index_size_bytes'] ?? 0;
    $this->item_count = $s['item_count'] ?? 0;
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->projection = $s['projection'] ?? null;
  }
}

type LocalSecondaryIndexDescriptionList = vec<LocalSecondaryIndexDescription>;

class LocalSecondaryIndexInfo {
  public ?IndexName $index_name;
  public ?KeySchema $key_schema;
  public ?Projection $projection;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'key_schema' => ?KeySchema,
    ?'projection' => ?Projection,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->projection = $s['projection'] ?? null;
  }
}

type LocalSecondaryIndexList = vec<LocalSecondaryIndex>;

type LocalSecondaryIndexes = vec<LocalSecondaryIndexInfo>;

type Long = int;

type MapAttributeValue = dict<AttributeName, AttributeValue>;

type NextTokenString = string;

type NonKeyAttributeName = string;

type NonKeyAttributeNameList = vec<NonKeyAttributeName>;

type NonNegativeLongObject = int;

type NullAttributeValue = bool;

type NumberAttributeValue = string;

type NumberSetAttributeValue = vec<NumberAttributeValue>;

class PointInTimeRecoveryDescription {
  public ?Date $earliest_restorable_date_time;
  public ?Date $latest_restorable_date_time;
  public ?PointInTimeRecoveryStatus $point_in_time_recovery_status;

  public function __construct(shape(
    ?'earliest_restorable_date_time' => ?Date,
    ?'latest_restorable_date_time' => ?Date,
    ?'point_in_time_recovery_status' => ?PointInTimeRecoveryStatus,
  ) $s = shape()) {
    $this->earliest_restorable_date_time = $s['earliest_restorable_date_time'] ?? 0;
    $this->latest_restorable_date_time = $s['latest_restorable_date_time'] ?? 0;
    $this->point_in_time_recovery_status = $s['point_in_time_recovery_status'] ?? '';
  }
}

class PointInTimeRecoverySpecification {
  public ?BooleanObject $point_in_time_recovery_enabled;

  public function __construct(shape(
    ?'point_in_time_recovery_enabled' => ?BooleanObject,
  ) $s = shape()) {
    $this->point_in_time_recovery_enabled = $s['point_in_time_recovery_enabled'] ?? false;
  }
}

type PointInTimeRecoveryStatus = string;

class PointInTimeRecoveryUnavailableException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PositiveIntegerObject = int;

type PositiveLongObject = int;

class Projection {
  public ?NonKeyAttributeNameList $non_key_attributes;
  public ?ProjectionType $projection_type;

  public function __construct(shape(
    ?'non_key_attributes' => ?NonKeyAttributeNameList,
    ?'projection_type' => ?ProjectionType,
  ) $s = shape()) {
    $this->non_key_attributes = $s['non_key_attributes'] ?? vec[];
    $this->projection_type = $s['projection_type'] ?? '';
  }
}

type ProjectionExpression = string;

type ProjectionType = string;

class ProvisionedThroughput {
  public ?PositiveLongObject $read_capacity_units;
  public ?PositiveLongObject $write_capacity_units;

  public function __construct(shape(
    ?'read_capacity_units' => ?PositiveLongObject,
    ?'write_capacity_units' => ?PositiveLongObject,
  ) $s = shape()) {
    $this->read_capacity_units = $s['read_capacity_units'] ?? 0;
    $this->write_capacity_units = $s['write_capacity_units'] ?? 0;
  }
}

class ProvisionedThroughputDescription {
  public ?Date $last_decrease_date_time;
  public ?Date $last_increase_date_time;
  public ?PositiveLongObject $number_of_decreases_today;
  public ?NonNegativeLongObject $read_capacity_units;
  public ?NonNegativeLongObject $write_capacity_units;

  public function __construct(shape(
    ?'last_decrease_date_time' => ?Date,
    ?'last_increase_date_time' => ?Date,
    ?'number_of_decreases_today' => ?PositiveLongObject,
    ?'read_capacity_units' => ?NonNegativeLongObject,
    ?'write_capacity_units' => ?NonNegativeLongObject,
  ) $s = shape()) {
    $this->last_decrease_date_time = $s['last_decrease_date_time'] ?? 0;
    $this->last_increase_date_time = $s['last_increase_date_time'] ?? 0;
    $this->number_of_decreases_today = $s['number_of_decreases_today'] ?? 0;
    $this->read_capacity_units = $s['read_capacity_units'] ?? 0;
    $this->write_capacity_units = $s['write_capacity_units'] ?? 0;
  }
}

class ProvisionedThroughputExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ProvisionedThroughputOverride {
  public ?PositiveLongObject $read_capacity_units;

  public function __construct(shape(
    ?'read_capacity_units' => ?PositiveLongObject,
  ) $s = shape()) {
    $this->read_capacity_units = $s['read_capacity_units'] ?? 0;
  }
}

class Put {
  public ?ConditionExpression $condition_expression;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?PutItemInputAttributeMap $item;
  public ?ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'condition_expression' => ?ConditionExpression,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'item' => ?PutItemInputAttributeMap,
    ?'return_values_on_condition_check_failure' => ?ReturnValuesOnConditionCheckFailure,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->condition_expression = $s['condition_expression'] ?? '';
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->item = $s['item'] ?? dict[];
    $this->return_values_on_condition_check_failure = $s['return_values_on_condition_check_failure'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class PutItemInput {
  public ?ConditionExpression $condition_expression;
  public ?ConditionalOperator $conditional_operator;
  public ?ExpectedAttributeMap $expected;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?PutItemInputAttributeMap $item;
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ?ReturnValue $return_values;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'condition_expression' => ?ConditionExpression,
    ?'conditional_operator' => ?ConditionalOperator,
    ?'expected' => ?ExpectedAttributeMap,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'item' => ?PutItemInputAttributeMap,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'return_item_collection_metrics' => ?ReturnItemCollectionMetrics,
    ?'return_values' => ?ReturnValue,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->condition_expression = $s['condition_expression'] ?? '';
    $this->conditional_operator = $s['conditional_operator'] ?? '';
    $this->expected = $s['expected'] ?? dict[];
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->item = $s['item'] ?? dict[];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? '';
    $this->return_values = $s['return_values'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type PutItemInputAttributeMap = dict<AttributeName, AttributeValue>;

class PutItemOutput {
  public ?AttributeMap $attributes;
  public ?ConsumedCapacity $consumed_capacity;
  public ?ItemCollectionMetrics $item_collection_metrics;

  public function __construct(shape(
    ?'attributes' => ?AttributeMap,
    ?'consumed_capacity' => ?ConsumedCapacity,
    ?'item_collection_metrics' => ?ItemCollectionMetrics,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? null;
  }
}

class PutRequest {
  public ?PutItemInputAttributeMap $item;

  public function __construct(shape(
    ?'item' => ?PutItemInputAttributeMap,
  ) $s = shape()) {
    $this->item = $s['item'] ?? dict[];
  }
}

class QueryInput {
  public ?AttributeNameList $attributes_to_get;
  public ?ConditionalOperator $conditional_operator;
  public ?ConsistentRead $consistent_read;
  public ?Key $exclusive_start_key;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?ConditionExpression $filter_expression;
  public ?IndexName $index_name;
  public ?KeyExpression $key_condition_expression;
  public ?KeyConditions $key_conditions;
  public ?PositiveIntegerObject $limit;
  public ?ProjectionExpression $projection_expression;
  public ?FilterConditionMap $query_filter;
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?BooleanObject $scan_index_forward;
  public ?Select $select;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'attributes_to_get' => ?AttributeNameList,
    ?'conditional_operator' => ?ConditionalOperator,
    ?'consistent_read' => ?ConsistentRead,
    ?'exclusive_start_key' => ?Key,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'filter_expression' => ?ConditionExpression,
    ?'index_name' => ?IndexName,
    ?'key_condition_expression' => ?KeyExpression,
    ?'key_conditions' => ?KeyConditions,
    ?'limit' => ?PositiveIntegerObject,
    ?'projection_expression' => ?ProjectionExpression,
    ?'query_filter' => ?FilterConditionMap,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'scan_index_forward' => ?BooleanObject,
    ?'select' => ?Select,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? vec[];
    $this->conditional_operator = $s['conditional_operator'] ?? '';
    $this->consistent_read = $s['consistent_read'] ?? false;
    $this->exclusive_start_key = $s['exclusive_start_key'] ?? dict[];
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->filter_expression = $s['filter_expression'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->key_condition_expression = $s['key_condition_expression'] ?? '';
    $this->key_conditions = $s['key_conditions'] ?? dict[];
    $this->limit = $s['limit'] ?? 0;
    $this->projection_expression = $s['projection_expression'] ?? '';
    $this->query_filter = $s['query_filter'] ?? dict[];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->scan_index_forward = $s['scan_index_forward'] ?? false;
    $this->select = $s['select'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class QueryOutput {
  public ?ConsumedCapacity $consumed_capacity;
  public int $count;
  public ?ItemList $items;
  public ?Key $last_evaluated_key;
  public int $scanned_count;

  public function __construct(shape(
    ?'consumed_capacity' => ?ConsumedCapacity,
    ?'count' => int,
    ?'items' => ?ItemList,
    ?'last_evaluated_key' => ?Key,
    ?'scanned_count' => int,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->count = $s['count'] ?? 0;
    $this->items = $s['items'] ?? vec[];
    $this->last_evaluated_key = $s['last_evaluated_key'] ?? dict[];
    $this->scanned_count = $s['scanned_count'] ?? 0;
  }
}

type RegionName = string;

class Replica {
  public ?RegionName $region_name;

  public function __construct(shape(
    ?'region_name' => ?RegionName,
  ) $s = shape()) {
    $this->region_name = $s['region_name'] ?? '';
  }
}

class ReplicaAlreadyExistsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ReplicaAutoScalingDescription {
  public ?ReplicaGlobalSecondaryIndexAutoScalingDescriptionList $global_secondary_indexes;
  public ?RegionName $region_name;
  public ?AutoScalingSettingsDescription $replica_provisioned_read_capacity_auto_scaling_settings;
  public ?AutoScalingSettingsDescription $replica_provisioned_write_capacity_auto_scaling_settings;
  public ?ReplicaStatus $replica_status;

  public function __construct(shape(
    ?'global_secondary_indexes' => ?ReplicaGlobalSecondaryIndexAutoScalingDescriptionList,
    ?'region_name' => ?RegionName,
    ?'replica_provisioned_read_capacity_auto_scaling_settings' => ?AutoScalingSettingsDescription,
    ?'replica_provisioned_write_capacity_auto_scaling_settings' => ?AutoScalingSettingsDescription,
    ?'replica_status' => ?ReplicaStatus,
  ) $s = shape()) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? vec[];
    $this->region_name = $s['region_name'] ?? '';
    $this->replica_provisioned_read_capacity_auto_scaling_settings = $s['replica_provisioned_read_capacity_auto_scaling_settings'] ?? null;
    $this->replica_provisioned_write_capacity_auto_scaling_settings = $s['replica_provisioned_write_capacity_auto_scaling_settings'] ?? null;
    $this->replica_status = $s['replica_status'] ?? '';
  }
}

type ReplicaAutoScalingDescriptionList = vec<ReplicaAutoScalingDescription>;

class ReplicaAutoScalingUpdate {
  public ?RegionName $region_name;
  public ?ReplicaGlobalSecondaryIndexAutoScalingUpdateList $replica_global_secondary_index_updates;
  public ?AutoScalingSettingsUpdate $replica_provisioned_read_capacity_auto_scaling_update;

  public function __construct(shape(
    ?'region_name' => ?RegionName,
    ?'replica_global_secondary_index_updates' => ?ReplicaGlobalSecondaryIndexAutoScalingUpdateList,
    ?'replica_provisioned_read_capacity_auto_scaling_update' => ?AutoScalingSettingsUpdate,
  ) $s = shape()) {
    $this->region_name = $s['region_name'] ?? '';
    $this->replica_global_secondary_index_updates = $s['replica_global_secondary_index_updates'] ?? vec[];
    $this->replica_provisioned_read_capacity_auto_scaling_update = $s['replica_provisioned_read_capacity_auto_scaling_update'] ?? null;
  }
}

type ReplicaAutoScalingUpdateList = vec<ReplicaAutoScalingUpdate>;

class ReplicaDescription {
  public ?ReplicaGlobalSecondaryIndexDescriptionList $global_secondary_indexes;
  public ?KMSMasterKeyId $kms_master_key_id;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;
  public ?RegionName $region_name;
  public ?ReplicaStatus $replica_status;
  public ?ReplicaStatusDescription $replica_status_description;
  public ?ReplicaStatusPercentProgress $replica_status_percent_progress;

  public function __construct(shape(
    ?'global_secondary_indexes' => ?ReplicaGlobalSecondaryIndexDescriptionList,
    ?'kms_master_key_id' => ?KMSMasterKeyId,
    ?'provisioned_throughput_override' => ?ProvisionedThroughputOverride,
    ?'region_name' => ?RegionName,
    ?'replica_status' => ?ReplicaStatus,
    ?'replica_status_description' => ?ReplicaStatusDescription,
    ?'replica_status_percent_progress' => ?ReplicaStatusPercentProgress,
  ) $s = shape()) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? vec[];
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? '';
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->region_name = $s['region_name'] ?? '';
    $this->replica_status = $s['replica_status'] ?? '';
    $this->replica_status_description = $s['replica_status_description'] ?? '';
    $this->replica_status_percent_progress = $s['replica_status_percent_progress'] ?? '';
  }
}

type ReplicaDescriptionList = vec<ReplicaDescription>;

class ReplicaGlobalSecondaryIndex {
  public ?IndexName $index_name;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'provisioned_throughput_override' => ?ProvisionedThroughputOverride,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
  }
}

class ReplicaGlobalSecondaryIndexAutoScalingDescription {
  public ?IndexName $index_name;
  public ?IndexStatus $index_status;
  public ?AutoScalingSettingsDescription $provisioned_read_capacity_auto_scaling_settings;
  public ?AutoScalingSettingsDescription $provisioned_write_capacity_auto_scaling_settings;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'index_status' => ?IndexStatus,
    ?'provisioned_read_capacity_auto_scaling_settings' => ?AutoScalingSettingsDescription,
    ?'provisioned_write_capacity_auto_scaling_settings' => ?AutoScalingSettingsDescription,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->index_status = $s['index_status'] ?? '';
    $this->provisioned_read_capacity_auto_scaling_settings = $s['provisioned_read_capacity_auto_scaling_settings'] ?? null;
    $this->provisioned_write_capacity_auto_scaling_settings = $s['provisioned_write_capacity_auto_scaling_settings'] ?? null;
  }
}

type ReplicaGlobalSecondaryIndexAutoScalingDescriptionList = vec<ReplicaGlobalSecondaryIndexAutoScalingDescription>;

class ReplicaGlobalSecondaryIndexAutoScalingUpdate {
  public ?IndexName $index_name;
  public ?AutoScalingSettingsUpdate $provisioned_read_capacity_auto_scaling_update;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'provisioned_read_capacity_auto_scaling_update' => ?AutoScalingSettingsUpdate,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->provisioned_read_capacity_auto_scaling_update = $s['provisioned_read_capacity_auto_scaling_update'] ?? null;
  }
}

type ReplicaGlobalSecondaryIndexAutoScalingUpdateList = vec<ReplicaGlobalSecondaryIndexAutoScalingUpdate>;

class ReplicaGlobalSecondaryIndexDescription {
  public ?IndexName $index_name;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'provisioned_throughput_override' => ?ProvisionedThroughputOverride,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
  }
}

type ReplicaGlobalSecondaryIndexDescriptionList = vec<ReplicaGlobalSecondaryIndexDescription>;

type ReplicaGlobalSecondaryIndexList = vec<ReplicaGlobalSecondaryIndex>;

class ReplicaGlobalSecondaryIndexSettingsDescription {
  public ?IndexName $index_name;
  public ?IndexStatus $index_status;
  public ?AutoScalingSettingsDescription $provisioned_read_capacity_auto_scaling_settings;
  public ?PositiveLongObject $provisioned_read_capacity_units;
  public ?AutoScalingSettingsDescription $provisioned_write_capacity_auto_scaling_settings;
  public ?PositiveLongObject $provisioned_write_capacity_units;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'index_status' => ?IndexStatus,
    ?'provisioned_read_capacity_auto_scaling_settings' => ?AutoScalingSettingsDescription,
    ?'provisioned_read_capacity_units' => ?PositiveLongObject,
    ?'provisioned_write_capacity_auto_scaling_settings' => ?AutoScalingSettingsDescription,
    ?'provisioned_write_capacity_units' => ?PositiveLongObject,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->index_status = $s['index_status'] ?? '';
    $this->provisioned_read_capacity_auto_scaling_settings = $s['provisioned_read_capacity_auto_scaling_settings'] ?? null;
    $this->provisioned_read_capacity_units = $s['provisioned_read_capacity_units'] ?? 0;
    $this->provisioned_write_capacity_auto_scaling_settings = $s['provisioned_write_capacity_auto_scaling_settings'] ?? null;
    $this->provisioned_write_capacity_units = $s['provisioned_write_capacity_units'] ?? 0;
  }
}

type ReplicaGlobalSecondaryIndexSettingsDescriptionList = vec<ReplicaGlobalSecondaryIndexSettingsDescription>;

class ReplicaGlobalSecondaryIndexSettingsUpdate {
  public ?IndexName $index_name;
  public ?AutoScalingSettingsUpdate $provisioned_read_capacity_auto_scaling_settings_update;
  public ?PositiveLongObject $provisioned_read_capacity_units;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'provisioned_read_capacity_auto_scaling_settings_update' => ?AutoScalingSettingsUpdate,
    ?'provisioned_read_capacity_units' => ?PositiveLongObject,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->provisioned_read_capacity_auto_scaling_settings_update = $s['provisioned_read_capacity_auto_scaling_settings_update'] ?? null;
    $this->provisioned_read_capacity_units = $s['provisioned_read_capacity_units'] ?? 0;
  }
}

type ReplicaGlobalSecondaryIndexSettingsUpdateList = vec<ReplicaGlobalSecondaryIndexSettingsUpdate>;

type ReplicaList = vec<Replica>;

class ReplicaNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ReplicaSettingsDescription {
  public ?RegionName $region_name;
  public ?BillingModeSummary $replica_billing_mode_summary;
  public ?ReplicaGlobalSecondaryIndexSettingsDescriptionList $replica_global_secondary_index_settings;
  public ?AutoScalingSettingsDescription $replica_provisioned_read_capacity_auto_scaling_settings;
  public ?NonNegativeLongObject $replica_provisioned_read_capacity_units;
  public ?AutoScalingSettingsDescription $replica_provisioned_write_capacity_auto_scaling_settings;
  public ?NonNegativeLongObject $replica_provisioned_write_capacity_units;
  public ?ReplicaStatus $replica_status;

  public function __construct(shape(
    ?'region_name' => ?RegionName,
    ?'replica_billing_mode_summary' => ?BillingModeSummary,
    ?'replica_global_secondary_index_settings' => ?ReplicaGlobalSecondaryIndexSettingsDescriptionList,
    ?'replica_provisioned_read_capacity_auto_scaling_settings' => ?AutoScalingSettingsDescription,
    ?'replica_provisioned_read_capacity_units' => ?NonNegativeLongObject,
    ?'replica_provisioned_write_capacity_auto_scaling_settings' => ?AutoScalingSettingsDescription,
    ?'replica_provisioned_write_capacity_units' => ?NonNegativeLongObject,
    ?'replica_status' => ?ReplicaStatus,
  ) $s = shape()) {
    $this->region_name = $s['region_name'] ?? '';
    $this->replica_billing_mode_summary = $s['replica_billing_mode_summary'] ?? null;
    $this->replica_global_secondary_index_settings = $s['replica_global_secondary_index_settings'] ?? vec[];
    $this->replica_provisioned_read_capacity_auto_scaling_settings = $s['replica_provisioned_read_capacity_auto_scaling_settings'] ?? null;
    $this->replica_provisioned_read_capacity_units = $s['replica_provisioned_read_capacity_units'] ?? 0;
    $this->replica_provisioned_write_capacity_auto_scaling_settings = $s['replica_provisioned_write_capacity_auto_scaling_settings'] ?? null;
    $this->replica_provisioned_write_capacity_units = $s['replica_provisioned_write_capacity_units'] ?? 0;
    $this->replica_status = $s['replica_status'] ?? '';
  }
}

type ReplicaSettingsDescriptionList = vec<ReplicaSettingsDescription>;

class ReplicaSettingsUpdate {
  public ?RegionName $region_name;
  public ?ReplicaGlobalSecondaryIndexSettingsUpdateList $replica_global_secondary_index_settings_update;
  public ?AutoScalingSettingsUpdate $replica_provisioned_read_capacity_auto_scaling_settings_update;
  public ?PositiveLongObject $replica_provisioned_read_capacity_units;

  public function __construct(shape(
    ?'region_name' => ?RegionName,
    ?'replica_global_secondary_index_settings_update' => ?ReplicaGlobalSecondaryIndexSettingsUpdateList,
    ?'replica_provisioned_read_capacity_auto_scaling_settings_update' => ?AutoScalingSettingsUpdate,
    ?'replica_provisioned_read_capacity_units' => ?PositiveLongObject,
  ) $s = shape()) {
    $this->region_name = $s['region_name'] ?? '';
    $this->replica_global_secondary_index_settings_update = $s['replica_global_secondary_index_settings_update'] ?? vec[];
    $this->replica_provisioned_read_capacity_auto_scaling_settings_update = $s['replica_provisioned_read_capacity_auto_scaling_settings_update'] ?? null;
    $this->replica_provisioned_read_capacity_units = $s['replica_provisioned_read_capacity_units'] ?? 0;
  }
}

type ReplicaSettingsUpdateList = vec<ReplicaSettingsUpdate>;

type ReplicaStatus = string;

type ReplicaStatusDescription = string;

type ReplicaStatusPercentProgress = string;

class ReplicaUpdate {
  public ?CreateReplicaAction $create;
  public ?DeleteReplicaAction $delete;

  public function __construct(shape(
    ?'create' => ?CreateReplicaAction,
    ?'delete' => ?DeleteReplicaAction,
  ) $s = shape()) {
    $this->create = $s['create'] ?? null;
    $this->delete = $s['delete'] ?? null;
  }
}

type ReplicaUpdateList = vec<ReplicaUpdate>;

class ReplicationGroupUpdate {
  public ?CreateReplicationGroupMemberAction $create;
  public ?DeleteReplicationGroupMemberAction $delete;
  public ?UpdateReplicationGroupMemberAction $update;

  public function __construct(shape(
    ?'create' => ?CreateReplicationGroupMemberAction,
    ?'delete' => ?DeleteReplicationGroupMemberAction,
    ?'update' => ?UpdateReplicationGroupMemberAction,
  ) $s = shape()) {
    $this->create = $s['create'] ?? null;
    $this->delete = $s['delete'] ?? null;
    $this->update = $s['update'] ?? null;
  }
}

type ReplicationGroupUpdateList = vec<ReplicationGroupUpdate>;

class RequestLimitExceeded {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceArnString = string;

class ResourceInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RestoreInProgress = bool;

class RestoreSummary {
  public ?Date $restore_date_time;
  public ?RestoreInProgress $restore_in_progress;
  public ?BackupArn $source_backup_arn;
  public ?TableArn $source_table_arn;

  public function __construct(shape(
    ?'restore_date_time' => ?Date,
    ?'restore_in_progress' => ?RestoreInProgress,
    ?'source_backup_arn' => ?BackupArn,
    ?'source_table_arn' => ?TableArn,
  ) $s = shape()) {
    $this->restore_date_time = $s['restore_date_time'] ?? 0;
    $this->restore_in_progress = $s['restore_in_progress'] ?? false;
    $this->source_backup_arn = $s['source_backup_arn'] ?? '';
    $this->source_table_arn = $s['source_table_arn'] ?? '';
  }
}

class RestoreTableFromBackupInput {
  public ?BackupArn $backup_arn;
  public ?BillingMode $billing_mode_override;
  public ?GlobalSecondaryIndexList $global_secondary_index_override;
  public ?LocalSecondaryIndexList $local_secondary_index_override;
  public ?ProvisionedThroughput $provisioned_throughput_override;
  public ?SSESpecification $sse_specification_override;
  public ?TableName $target_table_name;

  public function __construct(shape(
    ?'backup_arn' => ?BackupArn,
    ?'billing_mode_override' => ?BillingMode,
    ?'global_secondary_index_override' => ?GlobalSecondaryIndexList,
    ?'local_secondary_index_override' => ?LocalSecondaryIndexList,
    ?'provisioned_throughput_override' => ?ProvisionedThroughput,
    ?'sse_specification_override' => ?SSESpecification,
    ?'target_table_name' => ?TableName,
  ) $s = shape()) {
    $this->backup_arn = $s['backup_arn'] ?? '';
    $this->billing_mode_override = $s['billing_mode_override'] ?? '';
    $this->global_secondary_index_override = $s['global_secondary_index_override'] ?? vec[];
    $this->local_secondary_index_override = $s['local_secondary_index_override'] ?? vec[];
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->sse_specification_override = $s['sse_specification_override'] ?? null;
    $this->target_table_name = $s['target_table_name'] ?? '';
  }
}

class RestoreTableFromBackupOutput {
  public ?TableDescription $table_description;

  public function __construct(shape(
    ?'table_description' => ?TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

class RestoreTableToPointInTimeInput {
  public ?BillingMode $billing_mode_override;
  public ?GlobalSecondaryIndexList $global_secondary_index_override;
  public ?LocalSecondaryIndexList $local_secondary_index_override;
  public ?ProvisionedThroughput $provisioned_throughput_override;
  public ?Date $restore_date_time;
  public ?SSESpecification $sse_specification_override;
  public ?TableArn $source_table_arn;
  public ?TableName $source_table_name;
  public ?TableName $target_table_name;
  public ?BooleanObject $use_latest_restorable_time;

  public function __construct(shape(
    ?'billing_mode_override' => ?BillingMode,
    ?'global_secondary_index_override' => ?GlobalSecondaryIndexList,
    ?'local_secondary_index_override' => ?LocalSecondaryIndexList,
    ?'provisioned_throughput_override' => ?ProvisionedThroughput,
    ?'restore_date_time' => ?Date,
    ?'sse_specification_override' => ?SSESpecification,
    ?'source_table_arn' => ?TableArn,
    ?'source_table_name' => ?TableName,
    ?'target_table_name' => ?TableName,
    ?'use_latest_restorable_time' => ?BooleanObject,
  ) $s = shape()) {
    $this->billing_mode_override = $s['billing_mode_override'] ?? '';
    $this->global_secondary_index_override = $s['global_secondary_index_override'] ?? vec[];
    $this->local_secondary_index_override = $s['local_secondary_index_override'] ?? vec[];
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->restore_date_time = $s['restore_date_time'] ?? 0;
    $this->sse_specification_override = $s['sse_specification_override'] ?? null;
    $this->source_table_arn = $s['source_table_arn'] ?? '';
    $this->source_table_name = $s['source_table_name'] ?? '';
    $this->target_table_name = $s['target_table_name'] ?? '';
    $this->use_latest_restorable_time = $s['use_latest_restorable_time'] ?? false;
  }
}

class RestoreTableToPointInTimeOutput {
  public ?TableDescription $table_description;

  public function __construct(shape(
    ?'table_description' => ?TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

type ReturnConsumedCapacity = string;

type ReturnItemCollectionMetrics = string;

type ReturnValue = string;

type ReturnValuesOnConditionCheckFailure = string;

class SSEDescription {
  public ?Date $inaccessible_encryption_date_time;
  public ?KMSMasterKeyArn $kms_master_key_arn;
  public ?SSEType $sse_type;
  public ?SSEStatus $status;

  public function __construct(shape(
    ?'inaccessible_encryption_date_time' => ?Date,
    ?'kms_master_key_arn' => ?KMSMasterKeyArn,
    ?'sse_type' => ?SSEType,
    ?'status' => ?SSEStatus,
  ) $s = shape()) {
    $this->inaccessible_encryption_date_time = $s['inaccessible_encryption_date_time'] ?? 0;
    $this->kms_master_key_arn = $s['kms_master_key_arn'] ?? '';
    $this->sse_type = $s['sse_type'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type SSEEnabled = bool;

class SSESpecification {
  public ?SSEEnabled $enabled;
  public ?KMSMasterKeyId $kms_master_key_id;
  public ?SSEType $sse_type;

  public function __construct(shape(
    ?'enabled' => ?SSEEnabled,
    ?'kms_master_key_id' => ?KMSMasterKeyId,
    ?'sse_type' => ?SSEType,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? '';
    $this->sse_type = $s['sse_type'] ?? '';
  }
}

type SSEStatus = string;

type SSEType = string;

type ScalarAttributeType = string;

class ScanInput {
  public ?AttributeNameList $attributes_to_get;
  public ?ConditionalOperator $conditional_operator;
  public ?ConsistentRead $consistent_read;
  public ?Key $exclusive_start_key;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?ConditionExpression $filter_expression;
  public ?IndexName $index_name;
  public ?PositiveIntegerObject $limit;
  public ?ProjectionExpression $projection_expression;
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?FilterConditionMap $scan_filter;
  public ?ScanSegment $segment;
  public ?Select $select;
  public ?TableName $table_name;
  public ?ScanTotalSegments $total_segments;

  public function __construct(shape(
    ?'attributes_to_get' => ?AttributeNameList,
    ?'conditional_operator' => ?ConditionalOperator,
    ?'consistent_read' => ?ConsistentRead,
    ?'exclusive_start_key' => ?Key,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'filter_expression' => ?ConditionExpression,
    ?'index_name' => ?IndexName,
    ?'limit' => ?PositiveIntegerObject,
    ?'projection_expression' => ?ProjectionExpression,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'scan_filter' => ?FilterConditionMap,
    ?'segment' => ?ScanSegment,
    ?'select' => ?Select,
    ?'table_name' => ?TableName,
    ?'total_segments' => ?ScanTotalSegments,
  ) $s = shape()) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? vec[];
    $this->conditional_operator = $s['conditional_operator'] ?? '';
    $this->consistent_read = $s['consistent_read'] ?? false;
    $this->exclusive_start_key = $s['exclusive_start_key'] ?? dict[];
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->filter_expression = $s['filter_expression'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->projection_expression = $s['projection_expression'] ?? '';
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->scan_filter = $s['scan_filter'] ?? dict[];
    $this->segment = $s['segment'] ?? 0;
    $this->select = $s['select'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->total_segments = $s['total_segments'] ?? 0;
  }
}

class ScanOutput {
  public ?ConsumedCapacity $consumed_capacity;
  public int $count;
  public ?ItemList $items;
  public ?Key $last_evaluated_key;
  public int $scanned_count;

  public function __construct(shape(
    ?'consumed_capacity' => ?ConsumedCapacity,
    ?'count' => int,
    ?'items' => ?ItemList,
    ?'last_evaluated_key' => ?Key,
    ?'scanned_count' => int,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->count = $s['count'] ?? 0;
    $this->items = $s['items'] ?? vec[];
    $this->last_evaluated_key = $s['last_evaluated_key'] ?? dict[];
    $this->scanned_count = $s['scanned_count'] ?? 0;
  }
}

type ScanSegment = int;

type ScanTotalSegments = int;

type SecondaryIndexesCapacityMap = dict<IndexName, Capacity>;

type Select = string;

class SourceTableDetails {
  public ?BillingMode $billing_mode;
  public ?ItemCount $item_count;
  public ?KeySchema $key_schema;
  public ?ProvisionedThroughput $provisioned_throughput;
  public ?TableArn $table_arn;
  public ?TableCreationDateTime $table_creation_date_time;
  public ?TableId $table_id;
  public ?TableName $table_name;
  public ?Long $table_size_bytes;

  public function __construct(shape(
    ?'billing_mode' => ?BillingMode,
    ?'item_count' => ?ItemCount,
    ?'key_schema' => ?KeySchema,
    ?'provisioned_throughput' => ?ProvisionedThroughput,
    ?'table_arn' => ?TableArn,
    ?'table_creation_date_time' => ?TableCreationDateTime,
    ?'table_id' => ?TableId,
    ?'table_name' => ?TableName,
    ?'table_size_bytes' => ?Long,
  ) $s = shape()) {
    $this->billing_mode = $s['billing_mode'] ?? '';
    $this->item_count = $s['item_count'] ?? 0;
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
    $this->table_arn = $s['table_arn'] ?? '';
    $this->table_creation_date_time = $s['table_creation_date_time'] ?? 0;
    $this->table_id = $s['table_id'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->table_size_bytes = $s['table_size_bytes'] ?? 0;
  }
}

class SourceTableFeatureDetails {
  public ?GlobalSecondaryIndexes $global_secondary_indexes;
  public ?LocalSecondaryIndexes $local_secondary_indexes;
  public ?SSEDescription $sse_description;
  public ?StreamSpecification $stream_description;
  public ?TimeToLiveDescription $time_to_live_description;

  public function __construct(shape(
    ?'global_secondary_indexes' => ?GlobalSecondaryIndexes,
    ?'local_secondary_indexes' => ?LocalSecondaryIndexes,
    ?'sse_description' => ?SSEDescription,
    ?'stream_description' => ?StreamSpecification,
    ?'time_to_live_description' => ?TimeToLiveDescription,
  ) $s = shape()) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? vec[];
    $this->local_secondary_indexes = $s['local_secondary_indexes'] ?? vec[];
    $this->sse_description = $s['sse_description'] ?? null;
    $this->stream_description = $s['stream_description'] ?? null;
    $this->time_to_live_description = $s['time_to_live_description'] ?? null;
  }
}

type StreamArn = string;

type StreamEnabled = bool;

class StreamSpecification {
  public ?StreamEnabled $stream_enabled;
  public ?StreamViewType $stream_view_type;

  public function __construct(shape(
    ?'stream_enabled' => ?StreamEnabled,
    ?'stream_view_type' => ?StreamViewType,
  ) $s = shape()) {
    $this->stream_enabled = $s['stream_enabled'] ?? false;
    $this->stream_view_type = $s['stream_view_type'] ?? '';
  }
}

type StreamViewType = string;

type String = string;

type StringAttributeValue = string;

type StringSetAttributeValue = vec<StringAttributeValue>;

class TableAlreadyExistsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TableArn = string;

class TableAutoScalingDescription {
  public ?ReplicaAutoScalingDescriptionList $replicas;
  public ?TableName $table_name;
  public ?TableStatus $table_status;

  public function __construct(shape(
    ?'replicas' => ?ReplicaAutoScalingDescriptionList,
    ?'table_name' => ?TableName,
    ?'table_status' => ?TableStatus,
  ) $s = shape()) {
    $this->replicas = $s['replicas'] ?? vec[];
    $this->table_name = $s['table_name'] ?? '';
    $this->table_status = $s['table_status'] ?? '';
  }
}

type TableCreationDateTime = int;

class TableDescription {
  public ?ArchivalSummary $archival_summary;
  public ?AttributeDefinitions $attribute_definitions;
  public ?BillingModeSummary $billing_mode_summary;
  public ?Date $creation_date_time;
  public ?GlobalSecondaryIndexDescriptionList $global_secondary_indexes;
  public string $global_table_version;
  public ?Long $item_count;
  public ?KeySchema $key_schema;
  public ?StreamArn $latest_stream_arn;
  public string $latest_stream_label;
  public ?LocalSecondaryIndexDescriptionList $local_secondary_indexes;
  public ?ProvisionedThroughputDescription $provisioned_throughput;
  public ?ReplicaDescriptionList $replicas;
  public ?RestoreSummary $restore_summary;
  public ?SSEDescription $sse_description;
  public ?StreamSpecification $stream_specification;
  public string $table_arn;
  public ?TableId $table_id;
  public ?TableName $table_name;
  public ?Long $table_size_bytes;
  public ?TableStatus $table_status;

  public function __construct(shape(
    ?'archival_summary' => ?ArchivalSummary,
    ?'attribute_definitions' => ?AttributeDefinitions,
    ?'billing_mode_summary' => ?BillingModeSummary,
    ?'creation_date_time' => ?Date,
    ?'global_secondary_indexes' => ?GlobalSecondaryIndexDescriptionList,
    ?'global_table_version' => string,
    ?'item_count' => ?Long,
    ?'key_schema' => ?KeySchema,
    ?'latest_stream_arn' => ?StreamArn,
    ?'latest_stream_label' => string,
    ?'local_secondary_indexes' => ?LocalSecondaryIndexDescriptionList,
    ?'provisioned_throughput' => ?ProvisionedThroughputDescription,
    ?'replicas' => ?ReplicaDescriptionList,
    ?'restore_summary' => ?RestoreSummary,
    ?'sse_description' => ?SSEDescription,
    ?'stream_specification' => ?StreamSpecification,
    ?'table_arn' => string,
    ?'table_id' => ?TableId,
    ?'table_name' => ?TableName,
    ?'table_size_bytes' => ?Long,
    ?'table_status' => ?TableStatus,
  ) $s = shape()) {
    $this->archival_summary = $s['archival_summary'] ?? null;
    $this->attribute_definitions = $s['attribute_definitions'] ?? vec[];
    $this->billing_mode_summary = $s['billing_mode_summary'] ?? null;
    $this->creation_date_time = $s['creation_date_time'] ?? 0;
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? vec[];
    $this->global_table_version = $s['global_table_version'] ?? '';
    $this->item_count = $s['item_count'] ?? 0;
    $this->key_schema = $s['key_schema'] ?? vec[];
    $this->latest_stream_arn = $s['latest_stream_arn'] ?? '';
    $this->latest_stream_label = $s['latest_stream_label'] ?? '';
    $this->local_secondary_indexes = $s['local_secondary_indexes'] ?? vec[];
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
    $this->replicas = $s['replicas'] ?? vec[];
    $this->restore_summary = $s['restore_summary'] ?? null;
    $this->sse_description = $s['sse_description'] ?? null;
    $this->stream_specification = $s['stream_specification'] ?? null;
    $this->table_arn = $s['table_arn'] ?? '';
    $this->table_id = $s['table_id'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->table_size_bytes = $s['table_size_bytes'] ?? 0;
    $this->table_status = $s['table_status'] ?? '';
  }
}

type TableId = string;

class TableInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TableName = string;

type TableNameList = vec<TableName>;

class TableNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TableStatus = string;

class Tag {
  public ?TagKeyString $key;
  public ?TagValueString $value;

  public function __construct(shape(
    ?'key' => ?TagKeyString,
    ?'value' => ?TagValueString,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKeyList = vec<TagKeyString>;

type TagKeyString = string;

type TagList = vec<Tag>;

class TagResourceInput {
  public ?ResourceArnString $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArnString,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type TagValueString = string;

type TimeRangeLowerBound = int;

type TimeRangeUpperBound = int;

type TimeToLiveAttributeName = string;

class TimeToLiveDescription {
  public ?TimeToLiveAttributeName $attribute_name;
  public ?TimeToLiveStatus $time_to_live_status;

  public function __construct(shape(
    ?'attribute_name' => ?TimeToLiveAttributeName,
    ?'time_to_live_status' => ?TimeToLiveStatus,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->time_to_live_status = $s['time_to_live_status'] ?? '';
  }
}

type TimeToLiveEnabled = bool;

class TimeToLiveSpecification {
  public ?TimeToLiveAttributeName $attribute_name;
  public ?TimeToLiveEnabled $enabled;

  public function __construct(shape(
    ?'attribute_name' => ?TimeToLiveAttributeName,
    ?'enabled' => ?TimeToLiveEnabled,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
  }
}

type TimeToLiveStatus = string;

class TransactGetItem {
  public ?Get $get;

  public function __construct(shape(
    ?'get' => ?Get,
  ) $s = shape()) {
    $this->get = $s['get'] ?? null;
  }
}

type TransactGetItemList = vec<TransactGetItem>;

class TransactGetItemsInput {
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?TransactGetItemList $transact_items;

  public function __construct(shape(
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'transact_items' => ?TransactGetItemList,
  ) $s = shape()) {
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->transact_items = $s['transact_items'] ?? vec[];
  }
}

class TransactGetItemsOutput {
  public ?ConsumedCapacityMultiple $consumed_capacity;
  public ?ItemResponseList $responses;

  public function __construct(shape(
    ?'consumed_capacity' => ?ConsumedCapacityMultiple,
    ?'responses' => ?ItemResponseList,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? vec[];
    $this->responses = $s['responses'] ?? vec[];
  }
}

class TransactWriteItem {
  public ?ConditionCheck $condition_check;
  public ?Delete $delete;
  public ?Put $put;
  public ?Update $update;

  public function __construct(shape(
    ?'condition_check' => ?ConditionCheck,
    ?'delete' => ?Delete,
    ?'put' => ?Put,
    ?'update' => ?Update,
  ) $s = shape()) {
    $this->condition_check = $s['condition_check'] ?? null;
    $this->delete = $s['delete'] ?? null;
    $this->put = $s['put'] ?? null;
    $this->update = $s['update'] ?? null;
  }
}

type TransactWriteItemList = vec<TransactWriteItem>;

class TransactWriteItemsInput {
  public ?ClientRequestToken $client_request_token;
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ?TransactWriteItemList $transact_items;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'return_item_collection_metrics' => ?ReturnItemCollectionMetrics,
    ?'transact_items' => ?TransactWriteItemList,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? '';
    $this->transact_items = $s['transact_items'] ?? vec[];
  }
}

class TransactWriteItemsOutput {
  public ?ConsumedCapacityMultiple $consumed_capacity;
  public ?ItemCollectionMetricsPerTable $item_collection_metrics;

  public function __construct(shape(
    ?'consumed_capacity' => ?ConsumedCapacityMultiple,
    ?'item_collection_metrics' => ?ItemCollectionMetricsPerTable,
  ) $s = shape()) {
    $this->consumed_capacity = $s['consumed_capacity'] ?? vec[];
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? dict[];
  }
}

class TransactionCanceledException {
  public ?CancellationReasonList $cancellation_reasons;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'cancellation_reasons' => ?CancellationReasonList,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->cancellation_reasons = $s['cancellation_reasons'] ?? vec[];
    $this->message = $s['message'] ?? '';
  }
}

class TransactionConflictException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TransactionInProgressException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceInput {
  public ?ResourceArnString $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArnString,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class Update {
  public ?ConditionExpression $condition_expression;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?Key $key;
  public ?ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public ?TableName $table_name;
  public ?UpdateExpression $update_expression;

  public function __construct(shape(
    ?'condition_expression' => ?ConditionExpression,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'key' => ?Key,
    ?'return_values_on_condition_check_failure' => ?ReturnValuesOnConditionCheckFailure,
    ?'table_name' => ?TableName,
    ?'update_expression' => ?UpdateExpression,
  ) $s = shape()) {
    $this->condition_expression = $s['condition_expression'] ?? '';
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->key = $s['key'] ?? dict[];
    $this->return_values_on_condition_check_failure = $s['return_values_on_condition_check_failure'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->update_expression = $s['update_expression'] ?? '';
  }
}

class UpdateContinuousBackupsInput {
  public ?PointInTimeRecoverySpecification $point_in_time_recovery_specification;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'point_in_time_recovery_specification' => ?PointInTimeRecoverySpecification,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->point_in_time_recovery_specification = $s['point_in_time_recovery_specification'] ?? null;
    $this->table_name = $s['table_name'] ?? '';
  }
}

class UpdateContinuousBackupsOutput {
  public ?ContinuousBackupsDescription $continuous_backups_description;

  public function __construct(shape(
    ?'continuous_backups_description' => ?ContinuousBackupsDescription,
  ) $s = shape()) {
    $this->continuous_backups_description = $s['continuous_backups_description'] ?? null;
  }
}

class UpdateContributorInsightsInput {
  public ?ContributorInsightsAction $contributor_insights_action;
  public ?IndexName $index_name;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'contributor_insights_action' => ?ContributorInsightsAction,
    ?'index_name' => ?IndexName,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->contributor_insights_action = $s['contributor_insights_action'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

class UpdateContributorInsightsOutput {
  public ?ContributorInsightsStatus $contributor_insights_status;
  public ?IndexName $index_name;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'contributor_insights_status' => ?ContributorInsightsStatus,
    ?'index_name' => ?IndexName,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->contributor_insights_status = $s['contributor_insights_status'] ?? '';
    $this->index_name = $s['index_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type UpdateExpression = string;

class UpdateGlobalSecondaryIndexAction {
  public ?IndexName $index_name;
  public ?ProvisionedThroughput $provisioned_throughput;

  public function __construct(shape(
    ?'index_name' => ?IndexName,
    ?'provisioned_throughput' => ?ProvisionedThroughput,
  ) $s = shape()) {
    $this->index_name = $s['index_name'] ?? '';
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
  }
}

class UpdateGlobalTableInput {
  public ?TableName $global_table_name;
  public ?ReplicaUpdateList $replica_updates;

  public function __construct(shape(
    ?'global_table_name' => ?TableName,
    ?'replica_updates' => ?ReplicaUpdateList,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? '';
    $this->replica_updates = $s['replica_updates'] ?? vec[];
  }
}

class UpdateGlobalTableOutput {
  public ?GlobalTableDescription $global_table_description;

  public function __construct(shape(
    ?'global_table_description' => ?GlobalTableDescription,
  ) $s = shape()) {
    $this->global_table_description = $s['global_table_description'] ?? null;
  }
}

class UpdateGlobalTableSettingsInput {
  public ?BillingMode $global_table_billing_mode;
  public ?GlobalTableGlobalSecondaryIndexSettingsUpdateList $global_table_global_secondary_index_settings_update;
  public ?TableName $global_table_name;
  public ?AutoScalingSettingsUpdate $global_table_provisioned_write_capacity_auto_scaling_settings_update;
  public ?PositiveLongObject $global_table_provisioned_write_capacity_units;
  public ?ReplicaSettingsUpdateList $replica_settings_update;

  public function __construct(shape(
    ?'global_table_billing_mode' => ?BillingMode,
    ?'global_table_global_secondary_index_settings_update' => ?GlobalTableGlobalSecondaryIndexSettingsUpdateList,
    ?'global_table_name' => ?TableName,
    ?'global_table_provisioned_write_capacity_auto_scaling_settings_update' => ?AutoScalingSettingsUpdate,
    ?'global_table_provisioned_write_capacity_units' => ?PositiveLongObject,
    ?'replica_settings_update' => ?ReplicaSettingsUpdateList,
  ) $s = shape()) {
    $this->global_table_billing_mode = $s['global_table_billing_mode'] ?? '';
    $this->global_table_global_secondary_index_settings_update = $s['global_table_global_secondary_index_settings_update'] ?? vec[];
    $this->global_table_name = $s['global_table_name'] ?? '';
    $this->global_table_provisioned_write_capacity_auto_scaling_settings_update = $s['global_table_provisioned_write_capacity_auto_scaling_settings_update'] ?? null;
    $this->global_table_provisioned_write_capacity_units = $s['global_table_provisioned_write_capacity_units'] ?? 0;
    $this->replica_settings_update = $s['replica_settings_update'] ?? vec[];
  }
}

class UpdateGlobalTableSettingsOutput {
  public ?TableName $global_table_name;
  public ?ReplicaSettingsDescriptionList $replica_settings;

  public function __construct(shape(
    ?'global_table_name' => ?TableName,
    ?'replica_settings' => ?ReplicaSettingsDescriptionList,
  ) $s = shape()) {
    $this->global_table_name = $s['global_table_name'] ?? '';
    $this->replica_settings = $s['replica_settings'] ?? vec[];
  }
}

class UpdateItemInput {
  public ?AttributeUpdates $attribute_updates;
  public ?ConditionExpression $condition_expression;
  public ?ConditionalOperator $conditional_operator;
  public ?ExpectedAttributeMap $expected;
  public ?ExpressionAttributeNameMap $expression_attribute_names;
  public ?ExpressionAttributeValueMap $expression_attribute_values;
  public ?Key $key;
  public ?ReturnConsumedCapacity $return_consumed_capacity;
  public ?ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ?ReturnValue $return_values;
  public ?TableName $table_name;
  public ?UpdateExpression $update_expression;

  public function __construct(shape(
    ?'attribute_updates' => ?AttributeUpdates,
    ?'condition_expression' => ?ConditionExpression,
    ?'conditional_operator' => ?ConditionalOperator,
    ?'expected' => ?ExpectedAttributeMap,
    ?'expression_attribute_names' => ?ExpressionAttributeNameMap,
    ?'expression_attribute_values' => ?ExpressionAttributeValueMap,
    ?'key' => ?Key,
    ?'return_consumed_capacity' => ?ReturnConsumedCapacity,
    ?'return_item_collection_metrics' => ?ReturnItemCollectionMetrics,
    ?'return_values' => ?ReturnValue,
    ?'table_name' => ?TableName,
    ?'update_expression' => ?UpdateExpression,
  ) $s = shape()) {
    $this->attribute_updates = $s['attribute_updates'] ?? dict[];
    $this->condition_expression = $s['condition_expression'] ?? '';
    $this->conditional_operator = $s['conditional_operator'] ?? '';
    $this->expected = $s['expected'] ?? dict[];
    $this->expression_attribute_names = $s['expression_attribute_names'] ?? dict[];
    $this->expression_attribute_values = $s['expression_attribute_values'] ?? dict[];
    $this->key = $s['key'] ?? dict[];
    $this->return_consumed_capacity = $s['return_consumed_capacity'] ?? '';
    $this->return_item_collection_metrics = $s['return_item_collection_metrics'] ?? '';
    $this->return_values = $s['return_values'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->update_expression = $s['update_expression'] ?? '';
  }
}

class UpdateItemOutput {
  public ?AttributeMap $attributes;
  public ?ConsumedCapacity $consumed_capacity;
  public ?ItemCollectionMetrics $item_collection_metrics;

  public function __construct(shape(
    ?'attributes' => ?AttributeMap,
    ?'consumed_capacity' => ?ConsumedCapacity,
    ?'item_collection_metrics' => ?ItemCollectionMetrics,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->consumed_capacity = $s['consumed_capacity'] ?? null;
    $this->item_collection_metrics = $s['item_collection_metrics'] ?? null;
  }
}

class UpdateReplicationGroupMemberAction {
  public ?ReplicaGlobalSecondaryIndexList $global_secondary_indexes;
  public ?KMSMasterKeyId $kms_master_key_id;
  public ?ProvisionedThroughputOverride $provisioned_throughput_override;
  public ?RegionName $region_name;

  public function __construct(shape(
    ?'global_secondary_indexes' => ?ReplicaGlobalSecondaryIndexList,
    ?'kms_master_key_id' => ?KMSMasterKeyId,
    ?'provisioned_throughput_override' => ?ProvisionedThroughputOverride,
    ?'region_name' => ?RegionName,
  ) $s = shape()) {
    $this->global_secondary_indexes = $s['global_secondary_indexes'] ?? vec[];
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? '';
    $this->provisioned_throughput_override = $s['provisioned_throughput_override'] ?? null;
    $this->region_name = $s['region_name'] ?? '';
  }
}

class UpdateTableInput {
  public ?AttributeDefinitions $attribute_definitions;
  public ?BillingMode $billing_mode;
  public ?GlobalSecondaryIndexUpdateList $global_secondary_index_updates;
  public ?ProvisionedThroughput $provisioned_throughput;
  public ?ReplicationGroupUpdateList $replica_updates;
  public ?SSESpecification $sse_specification;
  public ?StreamSpecification $stream_specification;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'attribute_definitions' => ?AttributeDefinitions,
    ?'billing_mode' => ?BillingMode,
    ?'global_secondary_index_updates' => ?GlobalSecondaryIndexUpdateList,
    ?'provisioned_throughput' => ?ProvisionedThroughput,
    ?'replica_updates' => ?ReplicationGroupUpdateList,
    ?'sse_specification' => ?SSESpecification,
    ?'stream_specification' => ?StreamSpecification,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->attribute_definitions = $s['attribute_definitions'] ?? vec[];
    $this->billing_mode = $s['billing_mode'] ?? '';
    $this->global_secondary_index_updates = $s['global_secondary_index_updates'] ?? vec[];
    $this->provisioned_throughput = $s['provisioned_throughput'] ?? null;
    $this->replica_updates = $s['replica_updates'] ?? vec[];
    $this->sse_specification = $s['sse_specification'] ?? null;
    $this->stream_specification = $s['stream_specification'] ?? null;
    $this->table_name = $s['table_name'] ?? '';
  }
}

class UpdateTableOutput {
  public ?TableDescription $table_description;

  public function __construct(shape(
    ?'table_description' => ?TableDescription,
  ) $s = shape()) {
    $this->table_description = $s['table_description'] ?? null;
  }
}

class UpdateTableReplicaAutoScalingInput {
  public ?GlobalSecondaryIndexAutoScalingUpdateList $global_secondary_index_updates;
  public ?AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_update;
  public ?ReplicaAutoScalingUpdateList $replica_updates;
  public ?TableName $table_name;

  public function __construct(shape(
    ?'global_secondary_index_updates' => ?GlobalSecondaryIndexAutoScalingUpdateList,
    ?'provisioned_write_capacity_auto_scaling_update' => ?AutoScalingSettingsUpdate,
    ?'replica_updates' => ?ReplicaAutoScalingUpdateList,
    ?'table_name' => ?TableName,
  ) $s = shape()) {
    $this->global_secondary_index_updates = $s['global_secondary_index_updates'] ?? vec[];
    $this->provisioned_write_capacity_auto_scaling_update = $s['provisioned_write_capacity_auto_scaling_update'] ?? null;
    $this->replica_updates = $s['replica_updates'] ?? vec[];
    $this->table_name = $s['table_name'] ?? '';
  }
}

class UpdateTableReplicaAutoScalingOutput {
  public ?TableAutoScalingDescription $table_auto_scaling_description;

  public function __construct(shape(
    ?'table_auto_scaling_description' => ?TableAutoScalingDescription,
  ) $s = shape()) {
    $this->table_auto_scaling_description = $s['table_auto_scaling_description'] ?? null;
  }
}

class UpdateTimeToLiveInput {
  public ?TableName $table_name;
  public ?TimeToLiveSpecification $time_to_live_specification;

  public function __construct(shape(
    ?'table_name' => ?TableName,
    ?'time_to_live_specification' => ?TimeToLiveSpecification,
  ) $s = shape()) {
    $this->table_name = $s['table_name'] ?? '';
    $this->time_to_live_specification = $s['time_to_live_specification'] ?? null;
  }
}

class UpdateTimeToLiveOutput {
  public ?TimeToLiveSpecification $time_to_live_specification;

  public function __construct(shape(
    ?'time_to_live_specification' => ?TimeToLiveSpecification,
  ) $s = shape()) {
    $this->time_to_live_specification = $s['time_to_live_specification'] ?? null;
  }
}

class WriteRequest {
  public ?DeleteRequest $delete_request;
  public ?PutRequest $put_request;

  public function __construct(shape(
    ?'delete_request' => ?DeleteRequest,
    ?'put_request' => ?PutRequest,
  ) $s = shape()) {
    $this->delete_request = $s['delete_request'] ?? null;
    $this->put_request = $s['put_request'] ?? null;
  }
}

type WriteRequests = vec<WriteRequest>;

