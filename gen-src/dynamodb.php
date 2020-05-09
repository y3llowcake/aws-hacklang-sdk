<?hh // strict
namespace slack\aws\dynamodb;

interface DynamoDB {
  public function DescribeTableReplicaAutoScaling(DescribeTableReplicaAutoScalingInput) Awaitable<Errors\Result<DescribeTableReplicaAutoScalingOutput>>;
  public function DescribeGlobalTable(DescribeGlobalTableInput) Awaitable<Errors\Result<DescribeGlobalTableOutput>>;
  public function ListBackups(ListBackupsInput) Awaitable<Errors\Result<ListBackupsOutput>>;
  public function ListGlobalTables(ListGlobalTablesInput) Awaitable<Errors\Result<ListGlobalTablesOutput>>;
  public function ListTables(ListTablesInput) Awaitable<Errors\Result<ListTablesOutput>>;
  public function UpdateItem(UpdateItemInput) Awaitable<Errors\Result<UpdateItemOutput>>;
  public function BatchWriteItem(BatchWriteItemInput) Awaitable<Errors\Result<BatchWriteItemOutput>>;
  public function DeleteItem(DeleteItemInput) Awaitable<Errors\Result<DeleteItemOutput>>;
  public function DeleteTable(DeleteTableInput) Awaitable<Errors\Result<DeleteTableOutput>>;
  public function UpdateTableReplicaAutoScaling(UpdateTableReplicaAutoScalingInput) Awaitable<Errors\Result<UpdateTableReplicaAutoScalingOutput>>;
  public function DescribeEndpoints(DescribeEndpointsRequest) Awaitable<Errors\Result<DescribeEndpointsResponse>>;
  public function DescribeLimits(DescribeLimitsInput) Awaitable<Errors\Result<DescribeLimitsOutput>>;
  public function ListTagsOfResource(ListTagsOfResourceInput) Awaitable<Errors\Result<ListTagsOfResourceOutput>>;
  public function RestoreTableToPointInTime(RestoreTableToPointInTimeInput) Awaitable<Errors\Result<RestoreTableToPointInTimeOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Error>;
  public function CreateBackup(CreateBackupInput) Awaitable<Errors\Result<CreateBackupOutput>>;
  public function CreateGlobalTable(CreateGlobalTableInput) Awaitable<Errors\Result<CreateGlobalTableOutput>>;
  public function CreateTable(CreateTableInput) Awaitable<Errors\Result<CreateTableOutput>>;
  public function UpdateTable(UpdateTableInput) Awaitable<Errors\Result<UpdateTableOutput>>;
  public function Query(QueryInput) Awaitable<Errors\Result<QueryOutput>>;
  public function TransactWriteItems(TransactWriteItemsInput) Awaitable<Errors\Result<TransactWriteItemsOutput>>;
  public function UpdateGlobalTable(UpdateGlobalTableInput) Awaitable<Errors\Result<UpdateGlobalTableOutput>>;
  public function UpdateGlobalTableSettings(UpdateGlobalTableSettingsInput) Awaitable<Errors\Result<UpdateGlobalTableSettingsOutput>>;
  public function UpdateTimeToLive(UpdateTimeToLiveInput) Awaitable<Errors\Result<UpdateTimeToLiveOutput>>;
  public function DescribeBackup(DescribeBackupInput) Awaitable<Errors\Result<DescribeBackupOutput>>;
  public function DescribeContinuousBackups(DescribeContinuousBackupsInput) Awaitable<Errors\Result<DescribeContinuousBackupsOutput>>;
  public function PutItem(PutItemInput) Awaitable<Errors\Result<PutItemOutput>>;
  public function Scan(ScanInput) Awaitable<Errors\Result<ScanOutput>>;
  public function UpdateContinuousBackups(UpdateContinuousBackupsInput) Awaitable<Errors\Result<UpdateContinuousBackupsOutput>>;
  public function BatchGetItem(BatchGetItemInput) Awaitable<Errors\Result<BatchGetItemOutput>>;
  public function DeleteBackup(DeleteBackupInput) Awaitable<Errors\Result<DeleteBackupOutput>>;
  public function DescribeGlobalTableSettings(DescribeGlobalTableSettingsInput) Awaitable<Errors\Result<DescribeGlobalTableSettingsOutput>>;
  public function UpdateContributorInsights(UpdateContributorInsightsInput) Awaitable<Errors\Result<UpdateContributorInsightsOutput>>;
  public function DescribeTimeToLive(DescribeTimeToLiveInput) Awaitable<Errors\Result<DescribeTimeToLiveOutput>>;
  public function GetItem(GetItemInput) Awaitable<Errors\Result<GetItemOutput>>;
  public function RestoreTableFromBackup(RestoreTableFromBackupInput) Awaitable<Errors\Result<RestoreTableFromBackupOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Error>;
  public function TransactGetItems(TransactGetItemsInput) Awaitable<Errors\Result<TransactGetItemsOutput>>;
  public function DescribeContributorInsights(DescribeContributorInsightsInput) Awaitable<Errors\Result<DescribeContributorInsightsOutput>>;
  public function DescribeTable(DescribeTableInput) Awaitable<Errors\Result<DescribeTableOutput>>;
  public function ListContributorInsights(ListContributorInsightsInput) Awaitable<Errors\Result<ListContributorInsightsOutput>>;
}

class BackupNotFoundException {
  public ErrorMessage $message;
}

class BatchGetResponseMap {
}

class DescribeTableOutput {
  public TableDescription $table;
}

class Put {
  public ConditionExpression $condition_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public PutItemInputAttributeMap $item;
  public TableName $table_name;
}

class ReplicaGlobalSecondaryIndexAutoScalingDescription {
  public AutoScalingSettingsDescription $provisioned_write_capacity_auto_scaling_settings;
  public IndexName $index_name;
  public IndexStatus $index_status;
  public AutoScalingSettingsDescription $provisioned_read_capacity_auto_scaling_settings;
}

class TagKeyString {
}

class TimeToLiveEnabled {
}

class UpdateTimeToLiveInput {
  public TableName $table_name;
  public TimeToLiveSpecification $time_to_live_specification;
}

class DeleteBackupOutput {
  public BackupDescription $backup_description;
}

class DescribeTableReplicaAutoScalingOutput {
  public TableAutoScalingDescription $table_auto_scaling_description;
}

class ErrorMessage {
}

class ReplicaDescription {
  public RegionName $region_name;
  public ReplicaStatus $replica_status;
  public ReplicaStatusDescription $replica_status_description;
  public ReplicaStatusPercentProgress $replica_status_percent_progress;
  public KMSMasterKeyId $kms_master_key_id;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
  public ReplicaGlobalSecondaryIndexDescriptionList $global_secondary_indexes;
}

class TransactionInProgressException {
  public ErrorMessage $message;
}

class UpdateContributorInsightsInput {
  public TableName $table_name;
  public IndexName $index_name;
  public ContributorInsightsAction $contributor_insights_action;
}

class ContributorInsightsStatus {
}

class CreateReplicationGroupMemberAction {
  public ProvisionedThroughputOverride $provisioned_throughput_override;
  public ReplicaGlobalSecondaryIndexList $global_secondary_indexes;
  public RegionName $region_name;
  public KMSMasterKeyId $kms_master_key_id;
}

class ListBackupsOutput {
  public BackupSummaries $backup_summaries;
  public BackupArn $last_evaluated_backup_arn;
}

class TimeRangeLowerBound {
}

class PositiveLongObject {
}

class ReturnItemCollectionMetrics {
}

class ContributorInsightsRule {
}

class DeleteGlobalSecondaryIndexAction {
  public IndexName $index_name;
}

class DeleteTableInput {
  public TableName $table_name;
}

class FilterConditionMap {
}

class DescribeContributorInsightsInput {
  public TableName $table_name;
  public IndexName $index_name;
}

class ExpressionAttributeNameVariable {
}

class GlobalSecondaryIndexList {
}

class TableAlreadyExistsException {
  public ErrorMessage $message;
}

class UpdateTableReplicaAutoScalingOutput {
  public TableAutoScalingDescription $table_auto_scaling_description;
}

class WriteRequests {
}

class CreateBackupInput {
  public TableName $table_name;
  public BackupName $backup_name;
}

class DescribeTableInput {
  public TableName $table_name;
}

class LocalSecondaryIndexInfo {
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
}

class ReplicaGlobalSecondaryIndexAutoScalingDescriptionList {
}

class GlobalSecondaryIndexDescription {
  public ProvisionedThroughputDescription $provisioned_throughput;
  public Long $item_count;
  public IndexStatus $index_status;
  public Backfilling $backfilling;
  public Projection $projection;
  public Long $index_size_bytes;
  public string $index_arn;
  public IndexName $index_name;
  public KeySchema $key_schema;
}

class GlobalTable {
  public TableName $global_table_name;
  public ReplicaList $replication_group;
}

class PointInTimeRecoveryUnavailableException {
  public ErrorMessage $message;
}

class TableNotFoundException {
  public ErrorMessage $message;
}

class RequestLimitExceeded {
  public ErrorMessage $message;
}

class TimeToLiveAttributeName {
}

class BackupDetails {
  public BackupType $backup_type;
  public BackupCreationDateTime $backup_creation_date_time;
  public Date $backup_expiry_date_time;
  public BackupArn $backup_arn;
  public BackupName $backup_name;
  public BackupSizeBytes $backup_size_bytes;
  public BackupStatus $backup_status;
}

class Code {
}

class DescribeTimeToLiveInput {
  public TableName $table_name;
}

class NumberSetAttributeValue {
}

class StreamEnabled {
}

class ConsumedCapacityUnits {
}

class IntegerObject {
}

class ItemCollectionSizeLimitExceededException {
  public ErrorMessage $message;
}

class ReplicaAutoScalingDescription {
  public RegionName $region_name;
  public ReplicaGlobalSecondaryIndexAutoScalingDescriptionList $global_secondary_indexes;
  public AutoScalingSettingsDescription $replica_provisioned_read_capacity_auto_scaling_settings;
  public AutoScalingSettingsDescription $replica_provisioned_write_capacity_auto_scaling_settings;
  public ReplicaStatus $replica_status;
}

class ReplicaGlobalSecondaryIndexAutoScalingUpdateList {
}

class ReplicaStatusPercentProgress {
}

class ScanSegment {
}

class AttributeValueList {
}

class AutoScalingPolicyDescriptionList {
}

class ContinuousBackupsStatus {
}

class ReplicaAutoScalingUpdateList {
}

class GlobalTableNotFoundException {
  public ErrorMessage $message;
}

class ResourceInUseException {
  public ErrorMessage $message;
}

class UpdateExpression {
}

class ConditionalOperator {
}

class ContributorInsightsSummaries {
}

class DeleteBackupInput {
  public BackupArn $backup_arn;
}

class DeleteItemOutput {
  public AttributeMap $attributes;
  public ConsumedCapacity $consumed_capacity;
  public ItemCollectionMetrics $item_collection_metrics;
}

class TimeToLiveStatus {
}

class BatchGetItemInput {
  public BatchGetRequestMap $request_items;
  public ReturnConsumedCapacity $return_consumed_capacity;
}

class BatchWriteItemRequestMap {
}

class DescribeGlobalTableSettingsOutput {
  public TableName $global_table_name;
  public ReplicaSettingsDescriptionList $replica_settings;
}

class ReplicaGlobalSecondaryIndexSettingsDescription {
  public PositiveLongObject $provisioned_read_capacity_units;
  public AutoScalingSettingsDescription $provisioned_read_capacity_auto_scaling_settings;
  public PositiveLongObject $provisioned_write_capacity_units;
  public AutoScalingSettingsDescription $provisioned_write_capacity_auto_scaling_settings;
  public IndexName $index_name;
  public IndexStatus $index_status;
}

class StringSetAttributeValue {
}

class UpdateGlobalTableSettingsOutput {
  public TableName $global_table_name;
  public ReplicaSettingsDescriptionList $replica_settings;
}

class DescribeContinuousBackupsInput {
  public TableName $table_name;
}

class IndexStatus {
}

class KMSMasterKeyArn {
}

class ProvisionedThroughputExceededException {
  public ErrorMessage $message;
}

class ComparisonOperator {
}

class Condition {
  public AttributeValueList $attribute_value_list;
  public ComparisonOperator $comparison_operator;
}

class ProvisionedThroughputOverride {
  public PositiveLongObject $read_capacity_units;
}

class TransactionCanceledException {
  public ErrorMessage $message;
  public CancellationReasonList $cancellation_reasons;
}

class Select {
}

class TagList {
}

class UpdateTableInput {
  public TableName $table_name;
  public BillingMode $billing_mode;
  public ProvisionedThroughput $provisioned_throughput;
  public GlobalSecondaryIndexUpdateList $global_secondary_index_updates;
  public StreamSpecification $stream_specification;
  public SSESpecification $sse_specification;
  public ReplicationGroupUpdateList $replica_updates;
  public AttributeDefinitions $attribute_definitions;
}

class UpdateTableReplicaAutoScalingInput {
  public GlobalSecondaryIndexAutoScalingUpdateList $global_secondary_index_updates;
  public TableName $table_name;
  public AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_update;
  public ReplicaAutoScalingUpdateList $replica_updates;
}

class ListContributorInsightsOutput {
  public ContributorInsightsSummaries $contributor_insights_summaries;
  public NextTokenString $next_token;
}

class ReplicaNotFoundException {
  public ErrorMessage $message;
}

class ReplicaUpdate {
  public CreateReplicaAction $create;
  public DeleteReplicaAction $delete;
}

class BooleanObject {
}

class ConsumedCapacityMultiple {
}

class CreateTableInput {
  public StreamSpecification $stream_specification;
  public TagList $tags;
  public AttributeDefinitions $attribute_definitions;
  public TableName $table_name;
  public GlobalSecondaryIndexList $global_secondary_indexes;
  public BillingMode $billing_mode;
  public KeySchema $key_schema;
  public LocalSecondaryIndexList $local_secondary_indexes;
  public ProvisionedThroughput $provisioned_throughput;
  public SSESpecification $sse_specification;
}

class Get {
  public Key $key;
  public TableName $table_name;
  public ProjectionExpression $projection_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
}

class StreamSpecification {
  public StreamViewType $stream_view_type;
  public StreamEnabled $stream_enabled;
}

class StringAttributeValue {
}

class TransactGetItemsInput {
  public TransactGetItemList $transact_items;
  public ReturnConsumedCapacity $return_consumed_capacity;
}

class DeleteReplicaAction {
  public RegionName $region_name;
}

class LocalSecondaryIndexDescriptionList {
}

class ReplicaSettingsUpdate {
  public RegionName $region_name;
  public PositiveLongObject $replica_provisioned_read_capacity_units;
  public AutoScalingSettingsUpdate $replica_provisioned_read_capacity_auto_scaling_settings_update;
  public ReplicaGlobalSecondaryIndexSettingsUpdateList $replica_global_secondary_index_settings_update;
}

class ScanOutput {
  public int $scanned_count;
  public Key $last_evaluated_key;
  public ConsumedCapacity $consumed_capacity;
  public ItemList $items;
  public int $count;
}

class ConsistentRead {
}

class ReplicaAutoScalingUpdate {
  public RegionName $region_name;
  public ReplicaGlobalSecondaryIndexAutoScalingUpdateList $replica_global_secondary_index_updates;
  public AutoScalingSettingsUpdate $replica_provisioned_read_capacity_auto_scaling_update;
}

class BackupArn {
}

class BillingMode {
}

class BillingModeSummary {
  public BillingMode $billing_mode;
  public Date $last_update_to_pay_per_request_date_time;
}

class ClientRequestToken {
}

class BackupSummaries {
}

class IndexNotFoundException {
  public ErrorMessage $message;
}

class RestoreTableFromBackupInput {
  public TableName $target_table_name;
  public BackupArn $backup_arn;
  public BillingMode $billing_mode_override;
  public GlobalSecondaryIndexList $global_secondary_index_override;
  public LocalSecondaryIndexList $local_secondary_index_override;
  public ProvisionedThroughput $provisioned_throughput_override;
  public SSESpecification $sse_specification_override;
}

class BooleanAttributeValue {
}

class ItemCollectionMetrics {
  public ItemCollectionKeyAttributeMap $item_collection_key;
  public ItemCollectionSizeEstimateRange $size_estimate_range_gb;
}

class ReplicaAutoScalingDescriptionList {
}

class UpdateTimeToLiveOutput {
  public TimeToLiveSpecification $time_to_live_specification;
}

class ListAttributeValue {
}

class TableDescription {
  public AttributeDefinitions $attribute_definitions;
  public TableId $table_id;
  public BillingModeSummary $billing_mode_summary;
  public string $latest_stream_label;
  public ArchivalSummary $archival_summary;
  public TableName $table_name;
  public ProvisionedThroughputDescription $provisioned_throughput;
  public Long $item_count;
  public LocalSecondaryIndexDescriptionList $local_secondary_indexes;
  public GlobalSecondaryIndexDescriptionList $global_secondary_indexes;
  public RestoreSummary $restore_summary;
  public TableStatus $table_status;
  public StreamSpecification $stream_specification;
  public SSEDescription $sse_description;
  public ReplicaDescriptionList $replicas;
  public KeySchema $key_schema;
  public Date $creation_date_time;
  public Long $table_size_bytes;
  public string $table_arn;
  public StreamArn $latest_stream_arn;
  public string $global_table_version;
}

class TimeToLiveDescription {
  public TimeToLiveStatus $time_to_live_status;
  public TimeToLiveAttributeName $attribute_name;
}

class Update {
  public UpdateExpression $update_expression;
  public TableName $table_name;
  public ConditionExpression $condition_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public Key $key;
}

class GlobalTableAlreadyExistsException {
  public ErrorMessage $message;
}

class KeysAndAttributes {
  public KeyList $keys;
  public AttributeNameList $attributes_to_get;
  public ConsistentRead $consistent_read;
  public ProjectionExpression $projection_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
}

class NextTokenString {
}

class ReplicaStatusDescription {
}

class ItemCollectionSizeEstimateRange {
}

class ListBackupsInput {
  public TimeRangeUpperBound $time_range_upper_bound;
  public BackupArn $exclusive_start_backup_arn;
  public BackupTypeFilter $backup_type;
  public TableName $table_name;
  public BackupsInputLimit $limit;
  public TimeRangeLowerBound $time_range_lower_bound;
}

class PositiveIntegerObject {
}

class ReplicaList {
}

class ContributorInsightsSummary {
  public TableName $table_name;
  public IndexName $index_name;
  public ContributorInsightsStatus $contributor_insights_status;
}

class DescribeBackupInput {
  public BackupArn $backup_arn;
}

class DescribeLimitsOutput {
  public PositiveLongObject $account_max_write_capacity_units;
  public PositiveLongObject $table_max_read_capacity_units;
  public PositiveLongObject $table_max_write_capacity_units;
  public PositiveLongObject $account_max_read_capacity_units;
}

class ItemCollectionMetricsMultiple {
}

class ReplicaSettingsDescriptionList {
}

class SourceTableDetails {
  public TableName $table_name;
  public KeySchema $key_schema;
  public TableCreationDateTime $table_creation_date_time;
  public BillingMode $billing_mode;
  public TableId $table_id;
  public TableArn $table_arn;
  public Long $table_size_bytes;
  public ProvisionedThroughput $provisioned_throughput;
  public ItemCount $item_count;
}

class RestoreTableToPointInTimeInput {
  public Date $restore_date_time;
  public GlobalSecondaryIndexList $global_secondary_index_override;
  public SSESpecification $sse_specification_override;
  public TableName $source_table_name;
  public TableName $target_table_name;
  public BooleanObject $use_latest_restorable_time;
  public BillingMode $billing_mode_override;
  public LocalSecondaryIndexList $local_secondary_index_override;
  public ProvisionedThroughput $provisioned_throughput_override;
  public TableArn $source_table_arn;
}

class UpdateItemOutput {
  public AttributeMap $attributes;
  public ConsumedCapacity $consumed_capacity;
  public ItemCollectionMetrics $item_collection_metrics;
}

class BackupName {
}

class DeleteReplicationGroupMemberAction {
  public RegionName $region_name;
}

class GlobalTableList {
}

class InvalidRestoreTimeException {
  public ErrorMessage $message;
}

class KeySchemaAttributeName {
}

class ReplicaStatus {
}

class ReturnConsumedCapacity {
}

class SSESpecification {
  public SSEEnabled $enabled;
  public SSEType $sse_type;
  public KMSMasterKeyId $kms_master_key_id;
}

class CreateReplicaAction {
  public RegionName $region_name;
}

class GlobalTableGlobalSecondaryIndexSettingsUpdate {
  public IndexName $index_name;
  public PositiveLongObject $provisioned_write_capacity_units;
  public AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_settings_update;
}

class IndexName {
}

class ItemCollectionMetricsPerTable {
}

class ScanTotalSegments {
}

class UpdateItemInput {
  public ExpressionAttributeNameMap $expression_attribute_names;
  public TableName $table_name;
  public AttributeUpdates $attribute_updates;
  public ExpectedAttributeMap $expected;
  public ConditionalOperator $conditional_operator;
  public ReturnValue $return_values;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ConditionExpression $condition_expression;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public Key $key;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
  public UpdateExpression $update_expression;
}

class LastUpdateDateTime {
}

class ListTagsOfResourceOutput {
  public TagList $tags;
  public NextTokenString $next_token;
}

class TagResourceInput {
  public ResourceArnString $resource_arn;
  public TagList $tags;
}

class AttributeDefinitions {
}

class AutoScalingPolicyDescription {
  public AutoScalingTargetTrackingScalingPolicyConfigurationDescription $target_tracking_scaling_policy_configuration;
  public AutoScalingPolicyName $policy_name;
}

class AutoScalingTargetTrackingScalingPolicyConfigurationDescription {
  public IntegerObject $scale_out_cooldown;
  public Double $target_value;
  public BooleanObject $disable_scale_in;
  public IntegerObject $scale_in_cooldown;
}

class GlobalSecondaryIndexAutoScalingUpdateList {
}

class ReplicaGlobalSecondaryIndexAutoScalingUpdate {
  public IndexName $index_name;
  public AutoScalingSettingsUpdate $provisioned_read_capacity_auto_scaling_update;
}

class ReplicaGlobalSecondaryIndexSettingsUpdate {
  public IndexName $index_name;
  public PositiveLongObject $provisioned_read_capacity_units;
  public AutoScalingSettingsUpdate $provisioned_read_capacity_auto_scaling_settings_update;
}

class ReplicaSettingsDescription {
  public ReplicaGlobalSecondaryIndexSettingsDescriptionList $replica_global_secondary_index_settings;
  public RegionName $region_name;
  public ReplicaStatus $replica_status;
  public BillingModeSummary $replica_billing_mode_summary;
  public NonNegativeLongObject $replica_provisioned_read_capacity_units;
  public AutoScalingSettingsDescription $replica_provisioned_read_capacity_auto_scaling_settings;
  public NonNegativeLongObject $replica_provisioned_write_capacity_units;
  public AutoScalingSettingsDescription $replica_provisioned_write_capacity_auto_scaling_settings;
}

class BackupTypeFilter {
}

class DescribeContinuousBackupsOutput {
  public ContinuousBackupsDescription $continuous_backups_description;
}

class ExpressionAttributeValueMap {
}

class ProvisionedThroughput {
  public PositiveLongObject $write_capacity_units;
  public PositiveLongObject $read_capacity_units;
}

class GlobalSecondaryIndexUpdateList {
}

class ItemList {
}

class ListTablesInputLimit {
}

class Endpoints {
}

class ListTablesOutput {
  public TableNameList $table_names;
  public TableName $last_evaluated_table_name;
}

class TransactWriteItemsOutput {
  public ConsumedCapacityMultiple $consumed_capacity;
  public ItemCollectionMetricsPerTable $item_collection_metrics;
}

class TimeToLiveSpecification {
  public TimeToLiveEnabled $enabled;
  public TimeToLiveAttributeName $attribute_name;
}

class ContributorInsightsRuleList {
}

class GetItemOutput {
  public AttributeMap $item;
  public ConsumedCapacity $consumed_capacity;
}

class KeyExpression {
}

class PutRequest {
  public PutItemInputAttributeMap $item;
}

class AutoScalingPolicyUpdate {
  public AutoScalingPolicyName $policy_name;
  public AutoScalingTargetTrackingScalingPolicyConfigurationUpdate $target_tracking_scaling_policy_configuration;
}

class DescribeBackupOutput {
  public BackupDescription $backup_description;
}

class ExpectedAttributeValue {
  public AttributeValueList $attribute_value_list;
  public AttributeValue $value;
  public BooleanObject $exists;
  public ComparisonOperator $comparison_operator;
}

class ProjectionExpression {
}

class ListGlobalTablesInput {
  public TableName $exclusive_start_global_table_name;
  public PositiveIntegerObject $limit;
  public RegionName $region_name;
}

class PointInTimeRecoveryStatus {
}

class TableArn {
}

class Tag {
  public TagKeyString $key;
  public TagValueString $value;
}

class BinarySetAttributeValue {
}

class ConditionCheck {
  public ExpressionAttributeValueMap $expression_attribute_values;
  public ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public Key $key;
  public TableName $table_name;
  public ConditionExpression $condition_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
}

class ContributorInsightsAction {
}

class CreateGlobalTableInput {
  public ReplicaList $replication_group;
  public TableName $global_table_name;
}

class TransactWriteItemList {
}

class ArchivalSummary {
  public Date $archival_date_time;
  public ArchivalReason $archival_reason;
  public BackupArn $archival_backup_arn;
}

class BackupSummary {
  public BackupSizeBytes $backup_size_bytes;
  public BackupArn $backup_arn;
  public BackupStatus $backup_status;
  public TableArn $table_arn;
  public BackupName $backup_name;
  public BackupCreationDateTime $backup_creation_date_time;
  public Date $backup_expiry_date_time;
  public BackupType $backup_type;
  public TableName $table_name;
  public TableId $table_id;
}

class RegionName {
}

class MapAttributeValue {
}

class PointInTimeRecoverySpecification {
  public BooleanObject $point_in_time_recovery_enabled;
}

class BackupDescription {
  public BackupDetails $backup_details;
  public SourceTableDetails $source_table_details;
  public SourceTableFeatureDetails $source_table_feature_details;
}

class BackupsInputLimit {
}

class CreateGlobalSecondaryIndexAction {
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
  public ProvisionedThroughput $provisioned_throughput;
}

class ListGlobalTablesOutput {
  public GlobalTableList $global_tables;
  public TableName $last_evaluated_global_table_name;
}

class KeyList {
}

class ReplicaGlobalSecondaryIndexSettingsDescriptionList {
}

class ReplicaUpdateList {
}

class LocalSecondaryIndexDescription {
  public Long $index_size_bytes;
  public Long $item_count;
  public string $index_arn;
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
}

class WriteRequest {
  public PutRequest $put_request;
  public DeleteRequest $delete_request;
}

class Backfilling {
}

class BackupSizeBytes {
}

class GlobalSecondaryIndex {
  public ProvisionedThroughput $provisioned_throughput;
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
}

class ListContributorInsightsInput {
  public ListContributorInsightsLimit $max_results;
  public TableName $table_name;
  public NextTokenString $next_token;
}

class PointInTimeRecoveryDescription {
  public PointInTimeRecoveryStatus $point_in_time_recovery_status;
  public Date $earliest_restorable_date_time;
  public Date $latest_restorable_date_time;
}

class ReplicaGlobalSecondaryIndexDescription {
  public IndexName $index_name;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
}

class ReplicaGlobalSecondaryIndexDescriptionList {
}

class TableCreationDateTime {
}

class FailureException {
  public ExceptionName $exception_name;
  public ExceptionDescription $exception_description;
}

class GlobalTableArnString {
}

class NonKeyAttributeNameList {
}

class NonNegativeLongObject {
}

class UpdateContinuousBackupsOutput {
  public ContinuousBackupsDescription $continuous_backups_description;
}

class UpdateGlobalSecondaryIndexAction {
  public IndexName $index_name;
  public ProvisionedThroughput $provisioned_throughput;
}

class UpdateGlobalTableSettingsInput {
  public PositiveLongObject $global_table_provisioned_write_capacity_units;
  public AutoScalingSettingsUpdate $global_table_provisioned_write_capacity_auto_scaling_settings_update;
  public GlobalTableGlobalSecondaryIndexSettingsUpdateList $global_table_global_secondary_index_settings_update;
  public ReplicaSettingsUpdateList $replica_settings_update;
  public TableName $global_table_name;
  public BillingMode $global_table_billing_mode;
}

class ListTagsOfResourceInput {
  public ResourceArnString $resource_arn;
  public NextTokenString $next_token;
}

class ReplicationGroupUpdateList {
}

class SSEType {
}

class UpdateContinuousBackupsInput {
  public PointInTimeRecoverySpecification $point_in_time_recovery_specification;
  public TableName $table_name;
}

class ArchivalReason {
}

class Delete {
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public ReturnValuesOnConditionCheckFailure $return_values_on_condition_check_failure;
  public Key $key;
  public TableName $table_name;
  public ConditionExpression $condition_expression;
}

class IdempotentParameterMismatchException {
  public ErrorMessage $message;
}

class ItemResponseList {
}

class UpdateGlobalTableOutput {
  public GlobalTableDescription $global_table_description;
}

class TableInUseException {
  public ErrorMessage $message;
}

class TagValueString {
}

class UpdateContributorInsightsOutput {
  public TableName $table_name;
  public IndexName $index_name;
  public ContributorInsightsStatus $contributor_insights_status;
}

class AutoScalingRoleArn {
}

class BackupCreationDateTime {
}

class GlobalSecondaryIndexInfo {
  public ProvisionedThroughput $provisioned_throughput;
  public IndexName $index_name;
  public KeySchema $key_schema;
  public Projection $projection;
}

class InternalServerError {
  public ErrorMessage $message;
}

class NonKeyAttributeName {
}

class ReplicaGlobalSecondaryIndex {
  public IndexName $index_name;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
}

class SSEDescription {
  public SSEStatus $status;
  public SSEType $sse_type;
  public KMSMasterKeyArn $kms_master_key_arn;
  public Date $inaccessible_encryption_date_time;
}

class TableName {
}

class ListTablesInput {
  public TableName $exclusive_start_table_name;
  public ListTablesInputLimit $limit;
}

class LocalSecondaryIndexList {
}

class SourceTableFeatureDetails {
  public GlobalSecondaryIndexes $global_secondary_indexes;
  public StreamSpecification $stream_description;
  public TimeToLiveDescription $time_to_live_description;
  public SSEDescription $sse_description;
  public LocalSecondaryIndexes $local_secondary_indexes;
}

class StreamArn {
}

class AttributeNameList {
}

class BatchGetItemOutput {
  public BatchGetResponseMap $responses;
  public BatchGetRequestMap $unprocessed_keys;
  public ConsumedCapacityMultiple $consumed_capacity;
}

class CancellationReason {
  public AttributeMap $item;
  public Code $code;
  public ErrorMessage $message;
}

class DeleteRequest {
  public Key $key;
}

class AttributeAction {
}

class ConditionExpression {
}

class GlobalSecondaryIndexUpdate {
  public UpdateGlobalSecondaryIndexAction $update;
  public CreateGlobalSecondaryIndexAction $create;
  public DeleteGlobalSecondaryIndexAction $delete;
}

class GlobalTableDescription {
  public ReplicaDescriptionList $replication_group;
  public GlobalTableArnString $global_table_arn;
  public Date $creation_date_time;
  public GlobalTableStatus $global_table_status;
  public TableName $global_table_name;
}

class Integer {
}

class ItemCollectionSizeEstimateBound {
}

class BackupType {
}

class BatchGetRequestMap {
}

class DescribeTimeToLiveOutput {
  public TimeToLiveDescription $time_to_live_description;
}

class ExceptionDescription {
}

class ReplicaSettingsUpdateList {
}

class RestoreSummary {
  public RestoreInProgress $restore_in_progress;
  public BackupArn $source_backup_arn;
  public TableArn $source_table_arn;
  public Date $restore_date_time;
}

class TagKeyList {
}

class GetItemInput {
  public TableName $table_name;
  public Key $key;
  public AttributeNameList $attributes_to_get;
  public ConsistentRead $consistent_read;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ProjectionExpression $projection_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
}

class GlobalSecondaryIndexes {
}

class KeyType {
}

class ReplicationGroupUpdate {
  public CreateReplicationGroupMemberAction $create;
  public UpdateReplicationGroupMemberAction $update;
  public DeleteReplicationGroupMemberAction $delete;
}

class ReplicaDescriptionList {
}

class ReplicaGlobalSecondaryIndexSettingsUpdateList {
}

class UpdateTableOutput {
  public TableDescription $table_description;
}

class AttributeDefinition {
  public KeySchemaAttributeName $attribute_name;
  public ScalarAttributeType $attribute_type;
}

class AttributeValueUpdate {
  public AttributeValue $value;
  public AttributeAction $action;
}

class ContinuousBackupsDescription {
  public ContinuousBackupsStatus $continuous_backups_status;
  public PointInTimeRecoveryDescription $point_in_time_recovery_description;
}

class QueryOutput {
  public int $count;
  public int $scanned_count;
  public Key $last_evaluated_key;
  public ConsumedCapacity $consumed_capacity;
  public ItemList $items;
}

class NumberAttributeValue {
}

class PutItemOutput {
  public AttributeMap $attributes;
  public ConsumedCapacity $consumed_capacity;
  public ItemCollectionMetrics $item_collection_metrics;
}

class ReplicaAlreadyExistsException {
  public ErrorMessage $message;
}

class RestoreInProgress {
}

class AutoScalingTargetTrackingScalingPolicyConfigurationUpdate {
  public BooleanObject $disable_scale_in;
  public IntegerObject $scale_in_cooldown;
  public IntegerObject $scale_out_cooldown;
  public Double $target_value;
}

class GlobalTableStatus {
}

class KeySchemaElement {
  public KeySchemaAttributeName $attribute_name;
  public KeyType $key_type;
}

class NullAttributeValue {
}

class RestoreTableToPointInTimeOutput {
  public TableDescription $table_description;
}

class ScanInput {
  public AttributeNameList $attributes_to_get;
  public PositiveIntegerObject $limit;
  public Key $exclusive_start_key;
  public ScanTotalSegments $total_segments;
  public ConditionExpression $filter_expression;
  public TableName $table_name;
  public FilterConditionMap $scan_filter;
  public ScanSegment $segment;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public Select $select;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ProjectionExpression $projection_expression;
  public ConsistentRead $consistent_read;
  public IndexName $index_name;
  public ConditionalOperator $conditional_operator;
  public ExpressionAttributeValueMap $expression_attribute_values;
}

class Projection {
  public ProjectionType $projection_type;
  public NonKeyAttributeNameList $non_key_attributes;
}

class SecondaryIndexesCapacityMap {
}

class TransactGetItemList {
}

class BackupInUseException {
  public ErrorMessage $message;
}

class DescribeTableReplicaAutoScalingInput {
  public TableName $table_name;
}

class ExpressionAttributeNameMap {
}

class GlobalSecondaryIndexAutoScalingUpdate {
  public AutoScalingSettingsUpdate $provisioned_write_capacity_auto_scaling_update;
  public IndexName $index_name;
}

class KMSMasterKeyId {
}

class ReturnValue {
}

class ReturnValuesOnConditionCheckFailure {
}

class ProvisionedThroughputDescription {
  public PositiveLongObject $number_of_decreases_today;
  public NonNegativeLongObject $read_capacity_units;
  public NonNegativeLongObject $write_capacity_units;
  public Date $last_increase_date_time;
  public Date $last_decrease_date_time;
}

class TransactWriteItem {
  public ConditionCheck $condition_check;
  public Put $put;
  public Delete $delete;
  public Update $update;
}

class AttributeValue {
  public NumberAttributeValue $n;
  public BinaryAttributeValue $b;
  public BinarySetAttributeValue $bs;
  public BooleanAttributeValue $bool;
  public StringAttributeValue $s;
  public StringSetAttributeValue $ss;
  public NumberSetAttributeValue $ns;
  public MapAttributeValue $m;
  public ListAttributeValue $l;
  public NullAttributeValue $null;
}

class ConditionalCheckFailedException {
  public ErrorMessage $message;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ProjectionType {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class SSEStatus {
}

class TableId {
}

class TimeRangeUpperBound {
}

class Date {
}

class ExpectedAttributeMap {
}

class ItemCount {
}

class LocalSecondaryIndexes {
}

class TransactWriteItemsInput {
  public TransactWriteItemList $transact_items;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ClientRequestToken $client_request_token;
}

class TransactionConflictException {
  public ErrorMessage $message;
}

class PutItemInput {
  public TableName $table_name;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ConditionExpression $condition_expression;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public PutItemInputAttributeMap $item;
  public ExpectedAttributeMap $expected;
  public ReturnValue $return_values;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ConditionalOperator $conditional_operator;
  public ExpressionAttributeNameMap $expression_attribute_names;
}

class Replica {
  public RegionName $region_name;
}

class AutoScalingSettingsDescription {
  public PositiveLongObject $minimum_units;
  public PositiveLongObject $maximum_units;
  public BooleanObject $auto_scaling_disabled;
  public string $auto_scaling_role_arn;
  public AutoScalingPolicyDescriptionList $scaling_policies;
}

class CreateBackupOutput {
  public BackupDetails $backup_details;
}

class DescribeEndpointsResponse {
  public Endpoints $endpoints;
}

class GlobalTableGlobalSecondaryIndexSettingsUpdateList {
}

class Key {
}

class TableAutoScalingDescription {
  public ReplicaAutoScalingDescriptionList $replicas;
  public TableName $table_name;
  public TableStatus $table_status;
}

class AttributeName {
}

class BatchWriteItemOutput {
  public BatchWriteItemRequestMap $unprocessed_items;
  public ItemCollectionMetricsPerTable $item_collection_metrics;
  public ConsumedCapacityMultiple $consumed_capacity;
}

class DescribeEndpointsRequest {
}

class ItemResponse {
  public AttributeMap $item;
}

class String {
}

class ConsumedCapacity {
  public ConsumedCapacityUnits $read_capacity_units;
  public ConsumedCapacityUnits $write_capacity_units;
  public Capacity $table;
  public SecondaryIndexesCapacityMap $local_secondary_indexes;
  public SecondaryIndexesCapacityMap $global_secondary_indexes;
  public TableName $table_name;
  public ConsumedCapacityUnits $capacity_units;
}

class CreateGlobalTableOutput {
  public GlobalTableDescription $global_table_description;
}

class DescribeContributorInsightsOutput {
  public TableName $table_name;
  public IndexName $index_name;
  public ContributorInsightsRuleList $contributor_insights_rule_list;
  public ContributorInsightsStatus $contributor_insights_status;
  public LastUpdateDateTime $last_update_date_time;
  public FailureException $failure_exception;
}

class PutItemInputAttributeMap {
}

class TransactGetItem {
  public Get $get;
}

class TransactGetItemsOutput {
  public ConsumedCapacityMultiple $consumed_capacity;
  public ItemResponseList $responses;
}

class BackupStatus {
}

class ItemCollectionKeyAttributeMap {
}

class ScalarAttributeType {
}

class StreamViewType {
}

class AttributeMap {
}

class AttributeUpdates {
}

class Endpoint {
  public Long $cache_period_in_minutes;
  public string $address;
}

class GlobalSecondaryIndexDescriptionList {
}

class DeleteTableOutput {
  public TableDescription $table_description;
}

class Capacity {
  public ConsumedCapacityUnits $read_capacity_units;
  public ConsumedCapacityUnits $write_capacity_units;
  public ConsumedCapacityUnits $capacity_units;
}

class DeleteItemInput {
  public ConditionalOperator $conditional_operator;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public ExpressionAttributeValueMap $expression_attribute_values;
  public TableName $table_name;
  public ExpectedAttributeMap $expected;
  public ReturnValue $return_values;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
  public ConditionExpression $condition_expression;
  public Key $key;
}

class DescribeGlobalTableOutput {
  public GlobalTableDescription $global_table_description;
}

class ReplicaGlobalSecondaryIndexList {
}

class UntagResourceInput {
  public ResourceArnString $resource_arn;
  public TagKeyList $tag_keys;
}

class UpdateReplicationGroupMemberAction {
  public RegionName $region_name;
  public KMSMasterKeyId $kms_master_key_id;
  public ProvisionedThroughputOverride $provisioned_throughput_override;
  public ReplicaGlobalSecondaryIndexList $global_secondary_indexes;
}

class AutoScalingPolicyName {
}

class DescribeGlobalTableInput {
  public TableName $global_table_name;
}

class ExceptionName {
}

class ExpressionAttributeValueVariable {
}

class ResourceArnString {
}

class BatchWriteItemInput {
  public BatchWriteItemRequestMap $request_items;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ReturnItemCollectionMetrics $return_item_collection_metrics;
}

class DescribeLimitsInput {
}

class Double {
}

class KeyConditions {
}

class DescribeGlobalTableSettingsInput {
  public TableName $global_table_name;
}

class ListContributorInsightsLimit {
}

class LocalSecondaryIndex {
  public KeySchema $key_schema;
  public Projection $projection;
  public IndexName $index_name;
}

class Long {
}

class AutoScalingSettingsUpdate {
  public AutoScalingPolicyUpdate $scaling_policy_update;
  public PositiveLongObject $minimum_units;
  public PositiveLongObject $maximum_units;
  public BooleanObject $auto_scaling_disabled;
  public AutoScalingRoleArn $auto_scaling_role_arn;
}

class CancellationReasonList {
}

class ContinuousBackupsUnavailableException {
  public ErrorMessage $message;
}

class CreateTableOutput {
  public TableDescription $table_description;
}

class QueryInput {
  public ExpressionAttributeValueMap $expression_attribute_values;
  public TableName $table_name;
  public ConsistentRead $consistent_read;
  public FilterConditionMap $query_filter;
  public ProjectionExpression $projection_expression;
  public ExpressionAttributeNameMap $expression_attribute_names;
  public IndexName $index_name;
  public Select $select;
  public AttributeNameList $attributes_to_get;
  public KeyConditions $key_conditions;
  public PositiveIntegerObject $limit;
  public ConditionalOperator $conditional_operator;
  public BooleanObject $scan_index_forward;
  public ReturnConsumedCapacity $return_consumed_capacity;
  public ConditionExpression $filter_expression;
  public Key $exclusive_start_key;
  public KeyExpression $key_condition_expression;
}

class SSEEnabled {
}

class TableStatus {
}

class UpdateGlobalTableInput {
  public TableName $global_table_name;
  public ReplicaUpdateList $replica_updates;
}

class KeySchema {
}

class TableNameList {
}

class BinaryAttributeValue {
}

class RestoreTableFromBackupOutput {
  public TableDescription $table_description;
}

