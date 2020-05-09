<?hh // strict
namespace slack\aws\dynamodb;

interface DynamoDB {
  public function BatchGetItem(BatchGetItemInput): Awaitable<Errors\Result<BatchGetItemOutput>>;
  public function BatchWriteItem(BatchWriteItemInput): Awaitable<Errors\Result<BatchWriteItemOutput>>;
  public function CreateBackup(CreateBackupInput): Awaitable<Errors\Result<CreateBackupOutput>>;
  public function CreateGlobalTable(CreateGlobalTableInput): Awaitable<Errors\Result<CreateGlobalTableOutput>>;
  public function CreateTable(CreateTableInput): Awaitable<Errors\Result<CreateTableOutput>>;
  public function DeleteBackup(DeleteBackupInput): Awaitable<Errors\Result<DeleteBackupOutput>>;
  public function DeleteItem(DeleteItemInput): Awaitable<Errors\Result<DeleteItemOutput>>;
  public function DeleteTable(DeleteTableInput): Awaitable<Errors\Result<DeleteTableOutput>>;
  public function DescribeBackup(DescribeBackupInput): Awaitable<Errors\Result<DescribeBackupOutput>>;
  public function DescribeContinuousBackups(DescribeContinuousBackupsInput): Awaitable<Errors\Result<DescribeContinuousBackupsOutput>>;
  public function DescribeContributorInsights(DescribeContributorInsightsInput): Awaitable<Errors\Result<DescribeContributorInsightsOutput>>;
  public function DescribeEndpoints(DescribeEndpointsRequest): Awaitable<Errors\Result<DescribeEndpointsResponse>>;
  public function DescribeGlobalTable(DescribeGlobalTableInput): Awaitable<Errors\Result<DescribeGlobalTableOutput>>;
  public function DescribeGlobalTableSettings(DescribeGlobalTableSettingsInput): Awaitable<Errors\Result<DescribeGlobalTableSettingsOutput>>;
  public function DescribeLimits(DescribeLimitsInput): Awaitable<Errors\Result<DescribeLimitsOutput>>;
  public function DescribeTable(DescribeTableInput): Awaitable<Errors\Result<DescribeTableOutput>>;
  public function DescribeTableReplicaAutoScaling(DescribeTableReplicaAutoScalingInput): Awaitable<Errors\Result<DescribeTableReplicaAutoScalingOutput>>;
  public function DescribeTimeToLive(DescribeTimeToLiveInput): Awaitable<Errors\Result<DescribeTimeToLiveOutput>>;
  public function GetItem(GetItemInput): Awaitable<Errors\Result<GetItemOutput>>;
  public function ListBackups(ListBackupsInput): Awaitable<Errors\Result<ListBackupsOutput>>;
  public function ListContributorInsights(ListContributorInsightsInput): Awaitable<Errors\Result<ListContributorInsightsOutput>>;
  public function ListGlobalTables(ListGlobalTablesInput): Awaitable<Errors\Result<ListGlobalTablesOutput>>;
  public function ListTables(ListTablesInput): Awaitable<Errors\Result<ListTablesOutput>>;
  public function ListTagsOfResource(ListTagsOfResourceInput): Awaitable<Errors\Result<ListTagsOfResourceOutput>>;
  public function PutItem(PutItemInput): Awaitable<Errors\Result<PutItemOutput>>;
  public function Query(QueryInput): Awaitable<Errors\Result<QueryOutput>>;
  public function RestoreTableFromBackup(RestoreTableFromBackupInput): Awaitable<Errors\Result<RestoreTableFromBackupOutput>>;
  public function RestoreTableToPointInTime(RestoreTableToPointInTimeInput): Awaitable<Errors\Result<RestoreTableToPointInTimeOutput>>;
  public function Scan(ScanInput): Awaitable<Errors\Result<ScanOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Error>;
  public function TransactGetItems(TransactGetItemsInput): Awaitable<Errors\Result<TransactGetItemsOutput>>;
  public function TransactWriteItems(TransactWriteItemsInput): Awaitable<Errors\Result<TransactWriteItemsOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Error>;
  public function UpdateContinuousBackups(UpdateContinuousBackupsInput): Awaitable<Errors\Result<UpdateContinuousBackupsOutput>>;
  public function UpdateContributorInsights(UpdateContributorInsightsInput): Awaitable<Errors\Result<UpdateContributorInsightsOutput>>;
  public function UpdateGlobalTable(UpdateGlobalTableInput): Awaitable<Errors\Result<UpdateGlobalTableOutput>>;
  public function UpdateGlobalTableSettings(UpdateGlobalTableSettingsInput): Awaitable<Errors\Result<UpdateGlobalTableSettingsOutput>>;
  public function UpdateItem(UpdateItemInput): Awaitable<Errors\Result<UpdateItemOutput>>;
  public function UpdateTable(UpdateTableInput): Awaitable<Errors\Result<UpdateTableOutput>>;
  public function UpdateTableReplicaAutoScaling(UpdateTableReplicaAutoScalingInput): Awaitable<Errors\Result<UpdateTableReplicaAutoScalingOutput>>;
  public function UpdateTimeToLive(UpdateTimeToLiveInput): Awaitable<Errors\Result<UpdateTimeToLiveOutput>>;
}

class ArchivalReason {
}

class ArchivalSummary {
  public BackupArn $archival_backup_arn;
  public Date $archival_date_time;
  public ArchivalReason $archival_reason;
}

class AttributeAction {
}

class AttributeDefinition {
  public KeySchemaAttributeName $attribute_name;
  public ScalarAttributeType $attribute_type;
}

class AttributeDefinitions {
}

class AttributeMap {
}

class AttributeName {
}

class AttributeNameList {
}

class AttributeUpdates {
}

class AttributeValue {
  public BinaryAttributeValue $b;
  public BooleanAttributeValue $bool;
  public BinarySetAttributeValue $bs;
  public ListAttributeValue $l;
  public MapAttributeValue $m;
  public NumberAttributeValue $n;
  public NumberSetAttributeValue $ns;
  public NullAttributeValue $null;
  public StringAttributeValue $s;
  public StringSetAttributeValue $ss;
}

class AttributeValueList {
}

class AttributeValueUpdate {
  public AttributeAction $action;
  public AttributeValue $value;
}

class AutoScalingPolicyDescription {
  public AutoScalingPolicyName $policy_name;
  public AutoScalingTargetTrackingScalingPolicyConfigurationDescription $target_tracking_scaling_policy_configuration;
}

class AutoScalingPolicyDescriptionList {
}

class AutoScalingPolicyName {
}

class AutoScalingPolicyUpdate {
  public AutoScalingPolicyName $policy_name;
  public AutoScalingTargetTrackingScalingPolicyConfigurationUpdate $target_tracking_scaling_policy_configuration;
}

class AutoScalingRoleArn {
}

class AutoScalingSettingsDescription {
  public BooleanObject $auto_scaling_disabled;
  public string $auto_scaling_role_arn;
  public PositiveLongObject $maximum_units;
  public PositiveLongObject $minimum_units;
  public AutoScalingPolicyDescriptionList $scaling_policies;
}

class AutoScalingSettingsUpdate {
  public BooleanObject $auto_scaling_disabled;
  public AutoScalingRoleArn $auto_scaling_role_arn;
  public PositiveLongObject $maximum_units;
  public PositiveLongObject $minimum_units;
  public AutoScalingPolicyUpdate $scaling_policy_update;
}

class AutoScalingTargetTrackingScalingPolicyConfigurationDescription {
  public BooleanObject $disable_scale_in;
  public IntegerObject $scale_in_cooldown;
  public IntegerObject $scale_out_cooldown;
  public Double $target_value;
}

class AutoScalingTargetTrackingScalingPolicyConfigurationUpdate {
  public BooleanObject $disable_scale_in;
  public IntegerObject $scale_in_cooldown;
  public IntegerObject $scale_out_cooldown;
  public Double $target_value;
}

class Backfilling {
}

class BackupArn {
}

class BackupCreationDateTime {
}

class BackupDescription {
  public BackupDetails $backup_details;
  public SourceTableDetails $source_table_details;
  public SourceTableFeatureDetails $source_table_feature_details;
}

class BackupDetails {
  public BackupArn $backup_arn;
  public BackupCreationDateTime $backup_creation_date_time;
  public Date $backup_expiry_date_time;
  public BackupName $backup_name;
  public BackupSizeBytes $backup_size_bytes;
  public BackupStatus $backup_status;
  public BackupType $backup_type;
}

class BackupInUseException {
  public ErrorMessage $message;
}

class BackupName {
}

class BackupNotFoundException {
  public ErrorMessage $message;
}

class BackupSizeBytes {
}

class BackupStatus {
}

class BackupSummaries {
}

class BackupSummary {
  public BackupArn $backup_arn;
  public BackupCreationDateTime $backup_creation_date_time;
  public Date $backup_expiry_date_time;
  public BackupName $backup_name;
  public BackupSizeBytes $backup_size_bytes;
  public BackupStatus $backup_status;
  public BackupType $backup_type;
  public TableArn $table_arn;
  public TableId $table_id;
  public TableName $table_name;
}

class BackupType {
}

class BackupTypeFilter {
}

class BackupsInputLimit {
}

class BatchGetItemInput {
  public BatchGetRequestMap $request_items;
  public ReturnConsumedCapacity $return_consumed_capacity;
}

class BatchGetItemOutput {
  public ConsumedCapacityMultiple $consumed_capacity;
  public BatchGetResponseMap $responses;
  public BatchGetRequestMap $unprocessed_keys;
}

class BatchGetRequestMap {
}

class BatchGetResponseMap {
}

class BatchWriteItemInput {
  public BatchWriteItemRequestMap $request_items;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
}

class BatchWriteItemOutput {
  public ConsumedCapacityMultiple $consumed_capacity;
  public ItemCollectionMetricsPerTable $item_collection_metrics;
  public BatchWriteItemRequestMap $unprocessed_items;
}

class BatchWriteItemRequestMap {
}

class BillingMode {
}

class BillingModeSummary {
  public BillingMode $billing_mode;
  public Date $last_update_to_pay_per_request_date_time;
}

class BinaryAttributeValue {
}

class BinarySetAttributeValue {
}

class BooleanAttributeValue {
}

class BooleanObject {
}

class CancellationReason {
  public Code $code;
  public AttributeMap $item;
  public ErrorMessage $message;
}

class CancellationReasonList {
}

class Capacity {
  public ConsumedCapacityUnits $capacity_units;
  public ConsumedCapacityUnits $read_capacity_units;
  public ConsumedCapacityUnits $write_capacity_units;
}

class ClientRequestToken {
}

class Code {
}

class ComparisonOperator {
}

class Condition {
  public AttributeValueList $attribute_value_list;
  public ComparisonOperator $comparison_operator;
}

class ConditionCheck {
  public ConditionExpression $condition_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public Key $key;
  public ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public TableName $table_name;
}

class ConditionExpression {
}

class ConditionalCheckFailedException {
  public ErrorMessage $message;
}

class ConditionalOperator {
}

class ConsistentRead {
}

class ConsumedCapacity {
  public ConsumedCapacityUnits $capacity_units;
  public SecondaryIndexesCapacityMap $global_secondary_indexes;
  public SecondaryIndexesCapacityMap $local_secondary_indexes;
  public ConsumedCapacityUnits $read_capacity_units;
  public Capacity $table;
  public TableName $table_name;
  public ConsumedCapacityUnits $write_capacity_units;
}

class ConsumedCapacityMultiple {
}

class ConsumedCapacityUnits {
}

class ContinuousBackupsDescription {
  public ContinuousBackupsStatus $continuous_backups_status;
  public PointInTimeRecoveryDescription $point_in_time_recovery_description;
}

class ContinuousBackupsStatus {
}

class ContinuousBackupsUnavailableException {
  public ErrorMessage $message;
}

class ContributorInsightsAction {
}

class ContributorInsightsRule {
}

class ContributorInsightsRuleList {
}

class ContributorInsightsStatus {
}

class ContributorInsightsSummaries {
}

class ContributorInsightsSummary {
  public ContributorInsightsStatus $contributor_insights_status;
  public IndexName $index_name;
  public TableName $table_name;
}

class CreateBackupInput {
  public BackupName $backup_name;
  public TableName $table_name;
}

class CreateBackupOutput {
  public BackupDetails $backup_details;
}

class CreateGlobalSecondaryIndexAction {
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
  public ProvisionedThroughput $provisioned_throughput;
}

class CreateGlobalTableInput {
  public TableName $global_table_name;
  public ReplicaList $replication_group;
}

class CreateGlobalTableOutput {
  public GlobalTableDescription $global_table_description;
}

class CreateReplicaAction {
  public RegionName $region_name;
}

class CreateReplicationGroupMemberAction {
  public ReplicaGlobalSecondaryIndexList $global_secondary_indexes;
  public KMSMasterKeyId $kms_master_key_id;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
  public RegionName $region_name;
}

class CreateTableInput {
  public AttributeDefinitions $attribute_definitions;
  public BillingMode $billing_mode;
  public GlobalSecondaryIndexList $global_secondary_indexes;
  public KeySchema $key_schema;
  public LocalSecondaryIndexList $local_secondary_indexes;
  public ProvisionedThroughput $provisioned_throughput;
  public SSESpecification $sse_specification;
  public StreamSpecification $stream_specification;
  public TableName $table_name;
  public TagList $tags;
}

class CreateTableOutput {
  public TableDescription $table_description;
}

class Date {
}

class Delete {
  public ConditionExpression $condition_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public Key $key;
  public ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public TableName $table_name;
}

class DeleteBackupInput {
  public BackupArn $backup_arn;
}

class DeleteBackupOutput {
  public BackupDescription $backup_description;
}

class DeleteGlobalSecondaryIndexAction {
  public IndexName $index_name;
}

class DeleteItemInput {
  public ConditionExpression $condition_expression;
  public ConditionalOperator $conditional_operator;
  public ExpectedAttributeMap $expected;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public Key $key;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ReturnValue $return_values;
  public TableName $table_name;
}

class DeleteItemOutput {
  public AttributeMap $attributes;
  public ConsumedCapacity $consumed_capacity;
  public ItemCollectionMetrics $item_collection_metrics;
}

class DeleteReplicaAction {
  public RegionName $region_name;
}

class DeleteReplicationGroupMemberAction {
  public RegionName $region_name;
}

class DeleteRequest {
  public Key $key;
}

class DeleteTableInput {
  public TableName $table_name;
}

class DeleteTableOutput {
  public TableDescription $table_description;
}

class DescribeBackupInput {
  public BackupArn $backup_arn;
}

class DescribeBackupOutput {
  public BackupDescription $backup_description;
}

class DescribeContinuousBackupsInput {
  public TableName $table_name;
}

class DescribeContinuousBackupsOutput {
  public ContinuousBackupsDescription $continuous_backups_description;
}

class DescribeContributorInsightsInput {
  public IndexName $index_name;
  public TableName $table_name;
}

class DescribeContributorInsightsOutput {
  public ContributorInsightsRuleList $contributor_insights_rule_list;
  public ContributorInsightsStatus $contributor_insights_status;
  public FailureException $failure_exception;
  public IndexName $index_name;
  public LastUpdateDateTime $last_update_date_time;
  public TableName $table_name;
}

class DescribeEndpointsRequest {
}

class DescribeEndpointsResponse {
  public Endpoints $endpoints;
}

class DescribeGlobalTableInput {
  public TableName $global_table_name;
}

class DescribeGlobalTableOutput {
  public GlobalTableDescription $global_table_description;
}

class DescribeGlobalTableSettingsInput {
  public TableName $global_table_name;
}

class DescribeGlobalTableSettingsOutput {
  public TableName $global_table_name;
  public ReplicaSettingsDescriptionList $replica_settings;
}

class DescribeLimitsInput {
}

class DescribeLimitsOutput {
  public PositiveLongObject $account_max_read_capacity_units;
  public PositiveLongObject $account_max_write_capacity_units;
  public PositiveLongObject $table_max_read_capacity_units;
  public PositiveLongObject $table_max_write_capacity_units;
}

class DescribeTableInput {
  public TableName $table_name;
}

class DescribeTableOutput {
  public TableDescription $table;
}

class DescribeTableReplicaAutoScalingInput {
  public TableName $table_name;
}

class DescribeTableReplicaAutoScalingOutput {
  public TableAutoScalingDescription $table_auto_scaling_description;
}

class DescribeTimeToLiveInput {
  public TableName $table_name;
}

class DescribeTimeToLiveOutput {
  public TimeToLiveDescription $time_to_live_description;
}

class Double {
}

class Endpoint {
  public string $address;
  public Long $cache_period_in_minutes;
}

class Endpoints {
}

class ErrorMessage {
}

class ExceptionDescription {
}

class ExceptionName {
}

class ExpectedAttributeMap {
}

class ExpectedAttributeValue {
  public AttributeValueList $attribute_value_list;
  public ComparisonOperator $comparison_operator;
  public BooleanObject $exists;
  public AttributeValue $value;
}

class ExpressionAttributeNameMap {
}

class ExpressionAttributeNameVariable {
}

class ExpressionAttributeValueMap {
}

class ExpressionAttributeValueVariable {
}

class FailureException {
  public ExceptionDescription $exception_description;
  public ExceptionName $exception_name;
}

class FilterConditionMap {
}

class Get {
  public ExpressionAttributeNameMap $expression_attribute_names;
  public Key $key;
  public ProjectionExpression $projection_expression;
  public TableName $table_name;
}

class GetItemInput {
  public AttributeNameList $attributes_to_get;
  public ConsistentRead $consistent_read;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public Key $key;
  public ProjectionExpression $projection_expression;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public TableName $table_name;
}

class GetItemOutput {
  public ConsumedCapacity $consumed_capacity;
  public AttributeMap $item;
}

class GlobalSecondaryIndex {
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
  public ProvisionedThroughput $provisioned_throughput;
}

class GlobalSecondaryIndexAutoScalingUpdate {
  public IndexName $index_name;
  public AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_update;
}

class GlobalSecondaryIndexAutoScalingUpdateList {
}

class GlobalSecondaryIndexDescription {
  public Backfilling $backfilling;
  public string $index_arn;
  public IndexName $index_name;
  public Long $index_size_bytes;
  public IndexStatus $index_status;
  public Long $item_count;
  public KeySchema $key_schema;
  public Projection $projection;
  public ProvisionedThroughputDescription $provisioned_throughput;
}

class GlobalSecondaryIndexDescriptionList {
}

class GlobalSecondaryIndexInfo {
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
  public ProvisionedThroughput $provisioned_throughput;
}

class GlobalSecondaryIndexList {
}

class GlobalSecondaryIndexUpdate {
  public CreateGlobalSecondaryIndexAction $create;
  public DeleteGlobalSecondaryIndexAction $delete;
  public UpdateGlobalSecondaryIndexAction $update;
}

class GlobalSecondaryIndexUpdateList {
}

class GlobalSecondaryIndexes {
}

class GlobalTable {
  public TableName $global_table_name;
  public ReplicaList $replication_group;
}

class GlobalTableAlreadyExistsException {
  public ErrorMessage $message;
}

class GlobalTableArnString {
}

class GlobalTableDescription {
  public Date $creation_date_time;
  public GlobalTableArnString $global_table_arn;
  public TableName $global_table_name;
  public GlobalTableStatus $global_table_status;
  public ReplicaDescriptionList $replication_group;
}

class GlobalTableGlobalSecondaryIndexSettingsUpdate {
  public IndexName $index_name;
  public AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_settings_update;
  public PositiveLongObject $provisioned_write_capacity_units;
}

class GlobalTableGlobalSecondaryIndexSettingsUpdateList {
}

class GlobalTableList {
}

class GlobalTableNotFoundException {
  public ErrorMessage $message;
}

class GlobalTableStatus {
}

class IdempotentParameterMismatchException {
  public ErrorMessage $message;
}

class IndexName {
}

class IndexNotFoundException {
  public ErrorMessage $message;
}

class IndexStatus {
}

class Integer {
}

class IntegerObject {
}

class InternalServerError {
  public ErrorMessage $message;
}

class InvalidRestoreTimeException {
  public ErrorMessage $message;
}

class ItemCollectionKeyAttributeMap {
}

class ItemCollectionMetrics {
  public ItemCollectionKeyAttributeMap $item_collection_key;
  public ItemCollectionSizeEstimateRange $size_estimate_range_gb;
}

class ItemCollectionMetricsMultiple {
}

class ItemCollectionMetricsPerTable {
}

class ItemCollectionSizeEstimateBound {
}

class ItemCollectionSizeEstimateRange {
}

class ItemCollectionSizeLimitExceededException {
  public ErrorMessage $message;
}

class ItemCount {
}

class ItemList {
}

class ItemResponse {
  public AttributeMap $item;
}

class ItemResponseList {
}

class KMSMasterKeyArn {
}

class KMSMasterKeyId {
}

class Key {
}

class KeyConditions {
}

class KeyExpression {
}

class KeyList {
}

class KeySchema {
}

class KeySchemaAttributeName {
}

class KeySchemaElement {
  public KeySchemaAttributeName $attribute_name;
  public KeyType $key_type;
}

class KeyType {
}

class KeysAndAttributes {
  public AttributeNameList $attributes_to_get;
  public ConsistentRead $consistent_read;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public KeyList $keys;
  public ProjectionExpression $projection_expression;
}

class LastUpdateDateTime {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListAttributeValue {
}

class ListBackupsInput {
  public BackupTypeFilter $backup_type;
  public BackupArn $exclusive_start_backup_arn;
  public BackupsInputLimit $limit;
  public TableName $table_name;
  public TimeRangeLowerBound $time_range_lower_bound;
  public TimeRangeUpperBound $time_range_upper_bound;
}

class ListBackupsOutput {
  public BackupSummaries $backup_summaries;
  public BackupArn $last_evaluated_backup_arn;
}

class ListContributorInsightsInput {
  public ListContributorInsightsLimit $max_results;
  public NextTokenString $next_token;
  public TableName $table_name;
}

class ListContributorInsightsLimit {
}

class ListContributorInsightsOutput {
  public ContributorInsightsSummaries $contributor_insights_summaries;
  public NextTokenString $next_token;
}

class ListGlobalTablesInput {
  public TableName $exclusive_start_global_table_name;
  public PositiveIntegerObject $limit;
  public RegionName $region_name;
}

class ListGlobalTablesOutput {
  public GlobalTableList $global_tables;
  public TableName $last_evaluated_global_table_name;
}

class ListTablesInput {
  public TableName $exclusive_start_table_name;
  public ListTablesInputLimit $limit;
}

class ListTablesInputLimit {
}

class ListTablesOutput {
  public TableName $last_evaluated_table_name;
  public TableNameList $table_names;
}

class ListTagsOfResourceInput {
  public NextTokenString $next_token;
  public ResourceArnString $resource_arn;
}

class ListTagsOfResourceOutput {
  public NextTokenString $next_token;
  public TagList $tags;
}

class LocalSecondaryIndex {
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
}

class LocalSecondaryIndexDescription {
  public string $index_arn;
  public IndexName $index_name;
  public Long $index_size_bytes;
  public Long $item_count;
  public KeySchema $key_schema;
  public Projection $projection;
}

class LocalSecondaryIndexDescriptionList {
}

class LocalSecondaryIndexInfo {
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
}

class LocalSecondaryIndexList {
}

class LocalSecondaryIndexes {
}

class Long {
}

class MapAttributeValue {
}

class NextTokenString {
}

class NonKeyAttributeName {
}

class NonKeyAttributeNameList {
}

class NonNegativeLongObject {
}

class NullAttributeValue {
}

class NumberAttributeValue {
}

class NumberSetAttributeValue {
}

class PointInTimeRecoveryDescription {
  public Date $earliest_restorable_date_time;
  public Date $latest_restorable_date_time;
  public PointInTimeRecoveryStatus $point_in_time_recovery_status;
}

class PointInTimeRecoverySpecification {
  public BooleanObject $point_in_time_recovery_enabled;
}

class PointInTimeRecoveryStatus {
}

class PointInTimeRecoveryUnavailableException {
  public ErrorMessage $message;
}

class PositiveIntegerObject {
}

class PositiveLongObject {
}

class Projection {
  public NonKeyAttributeNameList $non_key_attributes;
  public ProjectionType $projection_type;
}

class ProjectionExpression {
}

class ProjectionType {
}

class ProvisionedThroughput {
  public PositiveLongObject $read_capacity_units;
  public PositiveLongObject $write_capacity_units;
}

class ProvisionedThroughputDescription {
  public Date $last_decrease_date_time;
  public Date $last_increase_date_time;
  public PositiveLongObject $number_of_decreases_today;
  public NonNegativeLongObject $read_capacity_units;
  public NonNegativeLongObject $write_capacity_units;
}

class ProvisionedThroughputExceededException {
  public ErrorMessage $message;
}

class ProvisionedThroughputOverride {
  public PositiveLongObject $read_capacity_units;
}

class Put {
  public ConditionExpression $condition_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public PutItemInputAttributeMap $item;
  public ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public TableName $table_name;
}

class PutItemInput {
  public ConditionExpression $condition_expression;
  public ConditionalOperator $conditional_operator;
  public ExpectedAttributeMap $expected;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public PutItemInputAttributeMap $item;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ReturnValue $return_values;
  public TableName $table_name;
}

class PutItemInputAttributeMap {
}

class PutItemOutput {
  public AttributeMap $attributes;
  public ConsumedCapacity $consumed_capacity;
  public ItemCollectionMetrics $item_collection_metrics;
}

class PutRequest {
  public PutItemInputAttributeMap $item;
}

class QueryInput {
  public AttributeNameList $attributes_to_get;
  public ConditionalOperator $conditional_operator;
  public ConsistentRead $consistent_read;
  public Key $exclusive_start_key;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public ConditionExpression $filter_expression;
  public IndexName $index_name;
  public KeyExpression $key_condition_expression;
  public KeyConditions $key_conditions;
  public PositiveIntegerObject $limit;
  public ProjectionExpression $projection_expression;
  public FilterConditionMap $query_filter;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public BooleanObject $scan_index_forward;
  public Select $select;
  public TableName $table_name;
}

class QueryOutput {
  public ConsumedCapacity $consumed_capacity;
  public int $count;
  public ItemList $items;
  public Key $last_evaluated_key;
  public int $scanned_count;
}

class RegionName {
}

class Replica {
  public RegionName $region_name;
}

class ReplicaAlreadyExistsException {
  public ErrorMessage $message;
}

class ReplicaAutoScalingDescription {
  public ReplicaGlobalSecondaryIndexAutoScalingDescriptionList $global_secondary_indexes;
  public RegionName $region_name;
  public AutoScalingSettingsDescription $replica_provisioned_read_capacity_auto_scaling_settings;
  public AutoScalingSettingsDescription $replica_provisioned_write_capacity_auto_scaling_settings;
  public ReplicaStatus $replica_status;
}

class ReplicaAutoScalingDescriptionList {
}

class ReplicaAutoScalingUpdate {
  public RegionName $region_name;
  public ReplicaGlobalSecondaryIndexAutoScalingUpdateList $replica_global_secondary_index_updates;
  public AutoScalingSettingsUpdate $replica_provisioned_read_capacity_auto_scaling_update;
}

class ReplicaAutoScalingUpdateList {
}

class ReplicaDescription {
  public ReplicaGlobalSecondaryIndexDescriptionList $global_secondary_indexes;
  public KMSMasterKeyId $kms_master_key_id;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
  public RegionName $region_name;
  public ReplicaStatus $replica_status;
  public ReplicaStatusDescription $replica_status_description;
  public ReplicaStatusPercentProgress $replica_status_percent_progress;
}

class ReplicaDescriptionList {
}

class ReplicaGlobalSecondaryIndex {
  public IndexName $index_name;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
}

class ReplicaGlobalSecondaryIndexAutoScalingDescription {
  public IndexName $index_name;
  public IndexStatus $index_status;
  public AutoScalingSettingsDescription $provisioned_read_capacity_auto_scaling_settings;
  public AutoScalingSettingsDescription $provisioned_write_capacity_auto_scaling_settings;
}

class ReplicaGlobalSecondaryIndexAutoScalingDescriptionList {
}

class ReplicaGlobalSecondaryIndexAutoScalingUpdate {
  public IndexName $index_name;
  public AutoScalingSettingsUpdate $provisioned_read_capacity_auto_scaling_update;
}

class ReplicaGlobalSecondaryIndexAutoScalingUpdateList {
}

class ReplicaGlobalSecondaryIndexDescription {
  public IndexName $index_name;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
}

class ReplicaGlobalSecondaryIndexDescriptionList {
}

class ReplicaGlobalSecondaryIndexList {
}

class ReplicaGlobalSecondaryIndexSettingsDescription {
  public IndexName $index_name;
  public IndexStatus $index_status;
  public AutoScalingSettingsDescription $provisioned_read_capacity_auto_scaling_settings;
  public PositiveLongObject $provisioned_read_capacity_units;
  public AutoScalingSettingsDescription $provisioned_write_capacity_auto_scaling_settings;
  public PositiveLongObject $provisioned_write_capacity_units;
}

class ReplicaGlobalSecondaryIndexSettingsDescriptionList {
}

class ReplicaGlobalSecondaryIndexSettingsUpdate {
  public IndexName $index_name;
  public AutoScalingSettingsUpdate $provisioned_read_capacity_auto_scaling_settings_update;
  public PositiveLongObject $provisioned_read_capacity_units;
}

class ReplicaGlobalSecondaryIndexSettingsUpdateList {
}

class ReplicaList {
}

class ReplicaNotFoundException {
  public ErrorMessage $message;
}

class ReplicaSettingsDescription {
  public RegionName $region_name;
  public BillingModeSummary $replica_billing_mode_summary;
  public ReplicaGlobalSecondaryIndexSettingsDescriptionList $replica_global_secondary_index_settings;
  public AutoScalingSettingsDescription $replica_provisioned_read_capacity_auto_scaling_settings;
  public NonNegativeLongObject $replica_provisioned_read_capacity_units;
  public AutoScalingSettingsDescription $replica_provisioned_write_capacity_auto_scaling_settings;
  public NonNegativeLongObject $replica_provisioned_write_capacity_units;
  public ReplicaStatus $replica_status;
}

class ReplicaSettingsDescriptionList {
}

class ReplicaSettingsUpdate {
  public RegionName $region_name;
  public ReplicaGlobalSecondaryIndexSettingsUpdateList $replica_global_secondary_index_settings_update;
  public AutoScalingSettingsUpdate $replica_provisioned_read_capacity_auto_scaling_settings_update;
  public PositiveLongObject $replica_provisioned_read_capacity_units;
}

class ReplicaSettingsUpdateList {
}

class ReplicaStatus {
}

class ReplicaStatusDescription {
}

class ReplicaStatusPercentProgress {
}

class ReplicaUpdate {
  public CreateReplicaAction $create;
  public DeleteReplicaAction $delete;
}

class ReplicaUpdateList {
}

class ReplicationGroupUpdate {
  public CreateReplicationGroupMemberAction $create;
  public DeleteReplicationGroupMemberAction $delete;
  public UpdateReplicationGroupMemberAction $update;
}

class ReplicationGroupUpdateList {
}

class RequestLimitExceeded {
  public ErrorMessage $message;
}

class ResourceArnString {
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class RestoreInProgress {
}

class RestoreSummary {
  public Date $restore_date_time;
  public RestoreInProgress $restore_in_progress;
  public BackupArn $source_backup_arn;
  public TableArn $source_table_arn;
}

class RestoreTableFromBackupInput {
  public BackupArn $backup_arn;
  public BillingMode $billing_mode_override;
  public GlobalSecondaryIndexList $global_secondary_index_override;
  public LocalSecondaryIndexList $local_secondary_index_override;
  public ProvisionedThroughput $provisioned_throughput_override;
  public SSESpecification $sse_specification_override;
  public TableName $target_table_name;
}

class RestoreTableFromBackupOutput {
  public TableDescription $table_description;
}

class RestoreTableToPointInTimeInput {
  public BillingMode $billing_mode_override;
  public GlobalSecondaryIndexList $global_secondary_index_override;
  public LocalSecondaryIndexList $local_secondary_index_override;
  public ProvisionedThroughput $provisioned_throughput_override;
  public Date $restore_date_time;
  public SSESpecification $sse_specification_override;
  public TableArn $source_table_arn;
  public TableName $source_table_name;
  public TableName $target_table_name;
  public BooleanObject $use_latest_restorable_time;
}

class RestoreTableToPointInTimeOutput {
  public TableDescription $table_description;
}

class ReturnConsumedCapacity {
}

class ReturnItemCollectionMetrics {
}

class ReturnValue {
}

class ReturnValuesOnConditionCheckFailure {
}

class SSEDescription {
  public Date $inaccessible_encryption_date_time;
  public KMSMasterKeyArn $kms_master_key_arn;
  public SSEType $sse_type;
  public SSEStatus $status;
}

class SSEEnabled {
}

class SSESpecification {
  public SSEEnabled $enabled;
  public KMSMasterKeyId $kms_master_key_id;
  public SSEType $sse_type;
}

class SSEStatus {
}

class SSEType {
}

class ScalarAttributeType {
}

class ScanInput {
  public AttributeNameList $attributes_to_get;
  public ConditionalOperator $conditional_operator;
  public ConsistentRead $consistent_read;
  public Key $exclusive_start_key;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public ConditionExpression $filter_expression;
  public IndexName $index_name;
  public PositiveIntegerObject $limit;
  public ProjectionExpression $projection_expression;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public FilterConditionMap $scan_filter;
  public ScanSegment $segment;
  public Select $select;
  public TableName $table_name;
  public ScanTotalSegments $total_segments;
}

class ScanOutput {
  public ConsumedCapacity $consumed_capacity;
  public int $count;
  public ItemList $items;
  public Key $last_evaluated_key;
  public int $scanned_count;
}

class ScanSegment {
}

class ScanTotalSegments {
}

class SecondaryIndexesCapacityMap {
}

class Select {
}

class SourceTableDetails {
  public BillingMode $billing_mode;
  public ItemCount $item_count;
  public KeySchema $key_schema;
  public ProvisionedThroughput $provisioned_throughput;
  public TableArn $table_arn;
  public TableCreationDateTime $table_creation_date_time;
  public TableId $table_id;
  public TableName $table_name;
  public Long $table_size_bytes;
}

class SourceTableFeatureDetails {
  public GlobalSecondaryIndexes $global_secondary_indexes;
  public LocalSecondaryIndexes $local_secondary_indexes;
  public SSEDescription $sse_description;
  public StreamSpecification $stream_description;
  public TimeToLiveDescription $time_to_live_description;
}

class StreamArn {
}

class StreamEnabled {
}

class StreamSpecification {
  public StreamEnabled $stream_enabled;
  public StreamViewType $stream_view_type;
}

class StreamViewType {
}

class String {
}

class StringAttributeValue {
}

class StringSetAttributeValue {
}

class TableAlreadyExistsException {
  public ErrorMessage $message;
}

class TableArn {
}

class TableAutoScalingDescription {
  public ReplicaAutoScalingDescriptionList $replicas;
  public TableName $table_name;
  public TableStatus $table_status;
}

class TableCreationDateTime {
}

class TableDescription {
  public ArchivalSummary $archival_summary;
  public AttributeDefinitions $attribute_definitions;
  public BillingModeSummary $billing_mode_summary;
  public Date $creation_date_time;
  public GlobalSecondaryIndexDescriptionList $global_secondary_indexes;
  public string $global_table_version;
  public Long $item_count;
  public KeySchema $key_schema;
  public StreamArn $latest_stream_arn;
  public string $latest_stream_label;
  public LocalSecondaryIndexDescriptionList $local_secondary_indexes;
  public ProvisionedThroughputDescription $provisioned_throughput;
  public ReplicaDescriptionList $replicas;
  public RestoreSummary $restore_summary;
  public SSEDescription $sse_description;
  public StreamSpecification $stream_specification;
  public string $table_arn;
  public TableId $table_id;
  public TableName $table_name;
  public Long $table_size_bytes;
  public TableStatus $table_status;
}

class TableId {
}

class TableInUseException {
  public ErrorMessage $message;
}

class TableName {
}

class TableNameList {
}

class TableNotFoundException {
  public ErrorMessage $message;
}

class TableStatus {
}

class Tag {
  public TagKeyString $key;
  public TagValueString $value;
}

class TagKeyList {
}

class TagKeyString {
}

class TagList {
}

class TagResourceInput {
  public ResourceArnString $resource_arn;
  public TagList $tags;
}

class TagValueString {
}

class TimeRangeLowerBound {
}

class TimeRangeUpperBound {
}

class TimeToLiveAttributeName {
}

class TimeToLiveDescription {
  public TimeToLiveAttributeName $attribute_name;
  public TimeToLiveStatus $time_to_live_status;
}

class TimeToLiveEnabled {
}

class TimeToLiveSpecification {
  public TimeToLiveAttributeName $attribute_name;
  public TimeToLiveEnabled $enabled;
}

class TimeToLiveStatus {
}

class TransactGetItem {
  public Get $get;
}

class TransactGetItemList {
}

class TransactGetItemsInput {
  public ReturnConsumedCapacity $return_consumed_capacity;
  public TransactGetItemList $transact_items;
}

class TransactGetItemsOutput {
  public ConsumedCapacityMultiple $consumed_capacity;
  public ItemResponseList $responses;
}

class TransactWriteItem {
  public ConditionCheck $condition_check;
  public Delete $delete;
  public Put $put;
  public Update $update;
}

class TransactWriteItemList {
}

class TransactWriteItemsInput {
  public ClientRequestToken $client_request_token;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
  public TransactWriteItemList $transact_items;
}

class TransactWriteItemsOutput {
  public ConsumedCapacityMultiple $consumed_capacity;
  public ItemCollectionMetricsPerTable $item_collection_metrics;
}

class TransactionCanceledException {
  public CancellationReasonList $cancellation_reasons;
  public ErrorMessage $message;
}

class TransactionConflictException {
  public ErrorMessage $message;
}

class TransactionInProgressException {
  public ErrorMessage $message;
}

class UntagResourceInput {
  public ResourceArnString $resource_arn;
  public TagKeyList $tag_keys;
}

class Update {
  public ConditionExpression $condition_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public Key $key;
  public ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public TableName $table_name;
  public UpdateExpression $update_expression;
}

class UpdateContinuousBackupsInput {
  public PointInTimeRecoverySpecification $point_in_time_recovery_specification;
  public TableName $table_name;
}

class UpdateContinuousBackupsOutput {
  public ContinuousBackupsDescription $continuous_backups_description;
}

class UpdateContributorInsightsInput {
  public ContributorInsightsAction $contributor_insights_action;
  public IndexName $index_name;
  public TableName $table_name;
}

class UpdateContributorInsightsOutput {
  public ContributorInsightsStatus $contributor_insights_status;
  public IndexName $index_name;
  public TableName $table_name;
}

class UpdateExpression {
}

class UpdateGlobalSecondaryIndexAction {
  public IndexName $index_name;
  public ProvisionedThroughput $provisioned_throughput;
}

class UpdateGlobalTableInput {
  public TableName $global_table_name;
  public ReplicaUpdateList $replica_updates;
}

class UpdateGlobalTableOutput {
  public GlobalTableDescription $global_table_description;
}

class UpdateGlobalTableSettingsInput {
  public BillingMode $global_table_billing_mode;
  public GlobalTableGlobalSecondaryIndexSettingsUpdateList $global_table_global_secondary_index_settings_update;
  public TableName $global_table_name;
  public AutoScalingSettingsUpdate $global_table_provisioned_write_capacity_auto_scaling_settings_update;
  public PositiveLongObject $global_table_provisioned_write_capacity_units;
  public ReplicaSettingsUpdateList $replica_settings_update;
}

class UpdateGlobalTableSettingsOutput {
  public TableName $global_table_name;
  public ReplicaSettingsDescriptionList $replica_settings;
}

class UpdateItemInput {
  public AttributeUpdates $attribute_updates;
  public ConditionExpression $condition_expression;
  public ConditionalOperator $conditional_operator;
  public ExpectedAttributeMap $expected;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public Key $key;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ReturnValue $return_values;
  public TableName $table_name;
  public UpdateExpression $update_expression;
}

class UpdateItemOutput {
  public AttributeMap $attributes;
  public ConsumedCapacity $consumed_capacity;
  public ItemCollectionMetrics $item_collection_metrics;
}

class UpdateReplicationGroupMemberAction {
  public ReplicaGlobalSecondaryIndexList $global_secondary_indexes;
  public KMSMasterKeyId $kms_master_key_id;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
  public RegionName $region_name;
}

class UpdateTableInput {
  public AttributeDefinitions $attribute_definitions;
  public BillingMode $billing_mode;
  public GlobalSecondaryIndexUpdateList $global_secondary_index_updates;
  public ProvisionedThroughput $provisioned_throughput;
  public ReplicationGroupUpdateList $replica_updates;
  public SSESpecification $sse_specification;
  public StreamSpecification $stream_specification;
  public TableName $table_name;
}

class UpdateTableOutput {
  public TableDescription $table_description;
}

class UpdateTableReplicaAutoScalingInput {
  public GlobalSecondaryIndexAutoScalingUpdateList $global_secondary_index_updates;
  public AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_update;
  public ReplicaAutoScalingUpdateList $replica_updates;
  public TableName $table_name;
}

class UpdateTableReplicaAutoScalingOutput {
  public TableAutoScalingDescription $table_auto_scaling_description;
}

class UpdateTimeToLiveInput {
  public TableName $table_name;
  public TimeToLiveSpecification $time_to_live_specification;
}

class UpdateTimeToLiveOutput {
  public TimeToLiveSpecification $time_to_live_specification;
}

class WriteRequest {
  public DeleteRequest $delete_request;
  public PutRequest $put_request;
}

class WriteRequests {
}

