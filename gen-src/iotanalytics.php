<?hh // strict
namespace slack\aws\iotanalytics;

interface IoTAnalytics {
  public function CreateDatasetContent(CreateDatasetContentRequest) Awaitable<Errors\Result<CreateDatasetContentResponse>>;
  public function CreateDatastore(CreateDatastoreRequest) Awaitable<Errors\Result<CreateDatastoreResponse>>;
  public function DeleteChannel(DeleteChannelRequest) Awaitable<Errors\Error>;
  public function ListPipelines(ListPipelinesRequest) Awaitable<Errors\Result<ListPipelinesResponse>>;
  public function DescribeDatastore(DescribeDatastoreRequest) Awaitable<Errors\Result<DescribeDatastoreResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function UpdateDatastore(UpdateDatastoreRequest) Awaitable<Errors\Error>;
  public function DescribeDataset(DescribeDatasetRequest) Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribePipeline(DescribePipelineRequest) Awaitable<Errors\Result<DescribePipelineResponse>>;
  public function SampleChannelData(SampleChannelDataRequest) Awaitable<Errors\Result<SampleChannelDataResponse>>;
  public function DeleteDatasetContent(DeleteDatasetContentRequest) Awaitable<Errors\Error>;
  public function ListDatasetContents(ListDatasetContentsRequest) Awaitable<Errors\Result<ListDatasetContentsResponse>>;
  public function StartPipelineReprocessing(StartPipelineReprocessingRequest) Awaitable<Errors\Result<StartPipelineReprocessingResponse>>;
  public function CreateDataset(CreateDatasetRequest) Awaitable<Errors\Result<CreateDatasetResponse>>;
  public function DescribeLoggingOptions(DescribeLoggingOptionsRequest) Awaitable<Errors\Result<DescribeLoggingOptionsResponse>>;
  public function ListChannels(ListChannelsRequest) Awaitable<Errors\Result<ListChannelsResponse>>;
  public function PutLoggingOptions(PutLoggingOptionsRequest) Awaitable<Errors\Error>;
  public function UpdateDataset(UpdateDatasetRequest) Awaitable<Errors\Error>;
  public function CreateChannel(CreateChannelRequest) Awaitable<Errors\Result<CreateChannelResponse>>;
  public function CreatePipeline(CreatePipelineRequest) Awaitable<Errors\Result<CreatePipelineResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function DescribeChannel(DescribeChannelRequest) Awaitable<Errors\Result<DescribeChannelResponse>>;
  public function GetDatasetContent(GetDatasetContentRequest) Awaitable<Errors\Result<GetDatasetContentResponse>>;
  public function ListDatasets(ListDatasetsRequest) Awaitable<Errors\Result<ListDatasetsResponse>>;
  public function ListDatastores(ListDatastoresRequest) Awaitable<Errors\Result<ListDatastoresResponse>>;
  public function RunPipelineActivity(RunPipelineActivityRequest) Awaitable<Errors\Result<RunPipelineActivityResponse>>;
  public function BatchPutMessage(BatchPutMessageRequest) Awaitable<Errors\Result<BatchPutMessageResponse>>;
  public function CancelPipelineReprocessing(CancelPipelineReprocessingRequest) Awaitable<Errors\Result<CancelPipelineReprocessingResponse>>;
  public function DeleteDataset(DeleteDatasetRequest) Awaitable<Errors\Error>;
  public function DeleteDatastore(DeleteDatastoreRequest) Awaitable<Errors\Error>;
  public function DeletePipeline(DeletePipelineRequest) Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateChannel(UpdateChannelRequest) Awaitable<Errors\Error>;
  public function UpdatePipeline(UpdatePipelineRequest) Awaitable<Errors\Error>;
}

class ChannelStorageSummary {
  public ServiceManagedChannelS3StorageSummary $service_managed_s_3;
  public CustomerManagedChannelS3StorageSummary $customer_managed_s_3;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class MathExpression {
}

class SampleChannelDataResponse {
  public MessagePayloads $payloads;
}

class DatasetContentDeliveryRule {
  public EntryName $entry_name;
  public DatasetContentDeliveryDestination $destination;
}

class DescribeLoggingOptionsResponse {
  public LoggingOptions $logging_options;
}

class QueryFilter {
  public DeltaTime $delta_time;
}

class InternalFailureException {
  public errorMessage $message;
}

class VolumeSizeInGB {
}

class CreatePipelineRequest {
  public PipelineName $pipeline_name;
  public PipelineActivities $pipeline_activities;
  public TagList $tags;
}

class DatasetActionSummary {
  public DatasetActionName $action_name;
  public DatasetActionType $action_type;
}

class DescribeLoggingOptionsRequest {
}

class ErrorCode {
}

class ListDatasetContentsRequest {
  public DatasetName $dataset_name;
  public NextToken $next_token;
  public MaxResults $max_results;
  public Timestamp $scheduled_on_or_after;
  public Timestamp $scheduled_before;
}

class MaxVersions {
}

class ActivityBatchSize {
}

class DatasetContentState {
}

class StartPipelineReprocessingResponse {
  public ReprocessingId $reprocessing_id;
}

class Dataset {
  public DatasetName $name;
  public DatasetArn $arn;
  public DatasetTriggers $triggers;
  public DatasetContentDeliveryRules $content_delivery_rules;
  public DatasetStatus $status;
  public Timestamp $last_update_time;
  public RetentionPeriod $retention_period;
  public DatasetActions $actions;
  public Timestamp $creation_time;
  public VersioningConfiguration $versioning_configuration;
}

class InvalidRequestException {
  public errorMessage $message;
}

class LoggingLevel {
}

class UntagResourceResponse {
}

class CustomerManagedDatastoreS3Storage {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;
}

class DatasetContentVersion {
}

class RemoveAttributesActivity {
  public ActivityName $name;
  public AttributeNames $attributes;
  public ActivityName $next;
}

class DatastoreStorage {
  public ServiceManagedDatastoreS3Storage $service_managed_s_3;
  public CustomerManagedDatastoreS3Storage $customer_managed_s_3;
}

class RoleArn {
}

class PutLoggingOptionsRequest {
  public LoggingOptions $logging_options;
}

class CreateChannelResponse {
  public ChannelName $channel_name;
  public ChannelArn $channel_arn;
  public RetentionPeriod $retention_period;
}

class TagValue {
}

class ActivityName {
}

class ErrorMessage {
}

class DatasetActionName {
}

class DatasetActionType {
}

class S3DestinationConfiguration {
  public GlueConfiguration $glue_configuration;
  public RoleArn $role_arn;
  public BucketName $bucket;
  public BucketKeyExpression $key;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UnlimitedVersioning {
}

class StringValue {
}

class TimeExpression {
}

class BatchPutMessageResponse {
  public BatchPutMessageErrorEntries $batch_put_message_error_entries;
}

class CreateDatasetResponse {
  public DatasetName $dataset_name;
  public DatasetArn $dataset_arn;
  public RetentionPeriod $retention_period;
}

class Reason {
}

class ScheduleExpression {
}

class DeltaTime {
  public OffsetSeconds $offset_seconds;
  public TimeExpression $time_expression;
}

class LoggingOptions {
  public LoggingEnabled $enabled;
  public RoleArn $role_arn;
  public LoggingLevel $level;
}

class PipelineName {
}

class TagKeyList {
}

class Channel {
  public ChannelName $name;
  public ChannelStorage $storage;
  public ChannelArn $arn;
  public ChannelStatus $status;
  public RetentionPeriod $retention_period;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
}

class ListChannelsResponse {
  public ChannelSummaries $channel_summaries;
  public NextToken $next_token;
}

class StartTime {
}

class GlueDatabaseName {
}

class DatasetActionSummaries {
}

class Image {
}

class LambdaActivity {
  public LambdaName $lambda_name;
  public ActivityBatchSize $batch_size;
  public ActivityName $next;
  public ActivityName $name;
}

class ResourceConfiguration {
  public ComputeType $compute_type;
  public VolumeSizeInGB $volume_size_in_gb;
}

class BatchPutMessageErrorEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public MessageId $message_id;
}

class CreateDatasetContentRequest {
  public DatasetName $dataset_name;
}

class DatasetSummary {
  public DatasetActionSummaries $actions;
  public DatasetName $dataset_name;
  public DatasetStatus $status;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public DatasetTriggers $triggers;
}

class BucketKeyExpression {
}

class LimitExceededException {
  public errorMessage $message;
}

class PipelineSummary {
  public PipelineName $pipeline_name;
  public ReprocessingSummaries $reprocessing_summaries;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
}

class RetentionPeriodInDays {
}

class ThrottlingException {
  public errorMessage $message;
}

class UpdatePipelineRequest {
  public PipelineName $pipeline_name;
  public PipelineActivities $pipeline_activities;
}

class TagResourceResponse {
}

class CustomerManagedChannelS3StorageSummary {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;
}

class CancelPipelineReprocessingRequest {
  public PipelineName $pipeline_name;
  public ReprocessingId $reprocessing_id;
}

class CreateDatasetContentResponse {
  public DatasetContentVersion $version_id;
}

class ListDatasetContentsResponse {
  public DatasetContentSummaries $dataset_content_summaries;
  public NextToken $next_token;
}

class LogResult {
}

class DatasetAction {
  public DatasetActionName $action_name;
  public SqlQueryDatasetAction $query_action;
  public ContainerDatasetAction $container_action;
}

class MessagePayload {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class VariableName {
}

class DescribeChannelResponse {
  public Channel $channel;
  public ChannelStatistics $statistics;
}

class S3KeyPrefix {
}

class CreateDatasetRequest {
  public DatasetName $dataset_name;
  public DatasetActions $actions;
  public DatasetTriggers $triggers;
  public DatasetContentDeliveryRules $content_delivery_rules;
  public RetentionPeriod $retention_period;
  public VersioningConfiguration $versioning_configuration;
  public TagList $tags;
}

class DeviceShadowEnrichActivity {
  public RoleArn $role_arn;
  public ActivityName $next;
  public ActivityName $name;
  public AttributeName $attribute;
  public AttributeName $thing_name;
}

class ServiceManagedChannelS3Storage {
}

class TagList {
}

class ChannelSummaries {
}

class DatastoreArn {
}

class DescribePipelineResponse {
  public Pipeline $pipeline;
}

class Schedule {
  public ScheduleExpression $expression;
}

class NextToken {
}

class ServiceManagedDatastoreS3StorageSummary {
}

class UpdateDatasetRequest {
  public RetentionPeriod $retention_period;
  public VersioningConfiguration $versioning_configuration;
  public DatasetName $dataset_name;
  public DatasetActions $actions;
  public DatasetTriggers $triggers;
  public DatasetContentDeliveryRules $content_delivery_rules;
}

class CreatePipelineResponse {
  public PipelineName $pipeline_name;
  public PipelineArn $pipeline_arn;
}

class DatasetArn {
}

class DatasetName {
}

class IotEventsDestinationConfiguration {
  public IotEventsInputName $input_name;
  public RoleArn $role_arn;
}

class IncludeStatisticsFlag {
}

class MessageId {
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class ServiceManagedChannelS3StorageSummary {
}

class SizeInBytes {
}

class AttributeNames {
}

class BucketName {
}

class ComputeType {
}

class GetDatasetContentResponse {
  public DatasetEntries $entries;
  public Timestamp $timestamp;
  public DatasetContentStatus $status;
}

class ContainerDatasetAction {
  public ResourceConfiguration $resource_configuration;
  public Variables $variables;
  public Image $image;
  public RoleArn $execution_role_arn;
}

class CreateDatastoreResponse {
  public DatastoreName $datastore_name;
  public DatastoreArn $datastore_arn;
  public RetentionPeriod $retention_period;
}

class DatastoreSummaries {
}

class resourceArn {
}

class ListPipelinesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ReprocessingSummary {
  public ReprocessingId $id;
  public ReprocessingStatus $status;
  public Timestamp $creation_time;
}

class CreateChannelRequest {
  public ChannelName $channel_name;
  public ChannelStorage $channel_storage;
  public RetentionPeriod $retention_period;
  public TagList $tags;
}

class EstimatedResourceSize {
  public Timestamp $estimated_on;
  public SizeInBytes $estimated_size_in_bytes;
}

class RunPipelineActivityRequest {
  public PipelineActivity $pipeline_activity;
  public MessagePayloads $payloads;
}

class SelectAttributesActivity {
  public ActivityName $next;
  public ActivityName $name;
  public AttributeNames $attributes;
}

class SqlQuery {
}

class DescribeDatastoreResponse {
  public Datastore $datastore;
  public DatastoreStatistics $statistics;
}

class errorMessage {
}

class DeleteDatasetRequest {
  public DatasetName $dataset_name;
}

class ListDatasetsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class OutputFileName {
}

class PipelineActivity {
  public SelectAttributesActivity $select_attributes;
  public FilterActivity $filter;
  public DeviceRegistryEnrichActivity $device_registry_enrich;
  public DeviceShadowEnrichActivity $device_shadow_enrich;
  public ChannelActivity $channel;
  public DatastoreActivity $datastore;
  public RemoveAttributesActivity $remove_attributes;
  public LambdaActivity $lambda;
  public AddAttributesActivity $add_attributes;
  public MathActivity $math;
}

class ReprocessingSummaries {
}

class AttributeNameMapping {
}

class DatastoreStatus {
}

class DatastoreSummary {
  public DatastoreName $datastore_name;
  public DatastoreStorageSummary $datastore_storage;
  public DatastoreStatus $status;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
}

class SampleChannelDataRequest {
  public ChannelName $channel_name;
  public MaxMessages $max_messages;
  public StartTime $start_time;
  public EndTime $end_time;
}

class UpdateChannelRequest {
  public ChannelName $channel_name;
  public ChannelStorage $channel_storage;
  public RetentionPeriod $retention_period;
}

class MathActivity {
  public ActivityName $name;
  public AttributeName $attribute;
  public MathExpression $math;
  public ActivityName $next;
}

class MaxResults {
}

class MessagePayloads {
}

class DatasetContentStatus {
  public DatasetContentState $state;
  public Reason $reason;
}

class DatastoreActivity {
  public ActivityName $name;
  public DatastoreName $datastore_name;
}

class GetDatasetContentRequest {
  public DatasetName $dataset_name;
  public DatasetContentVersion $version_id;
}

class ResourceArn {
}

class ChannelStorage {
  public ServiceManagedChannelS3Storage $service_managed_s_3;
  public CustomerManagedChannelS3Storage $customer_managed_s_3;
}

class DatasetActions {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class resourceId {
}

class DatastoreName {
}

class DeleteChannelRequest {
  public ChannelName $channel_name;
}

class GlueConfiguration {
  public GlueTableName $table_name;
  public GlueDatabaseName $database_name;
}

class ChannelStatistics {
  public EstimatedResourceSize $size;
}

class DatasetSummaries {
}

class ListDatastoresResponse {
  public DatastoreSummaries $datastore_summaries;
  public NextToken $next_token;
}

class AttributeName {
}

class FilterActivity {
  public ActivityName $name;
  public FilterExpression $filter;
  public ActivityName $next;
}

class Datastore {
  public DatastoreArn $arn;
  public DatastoreStatus $status;
  public RetentionPeriod $retention_period;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public DatastoreName $name;
  public DatastoreStorage $storage;
}

class DatastoreStatistics {
  public EstimatedResourceSize $size;
}

class DeleteDatasetContentRequest {
  public DatasetName $dataset_name;
  public DatasetContentVersion $version_id;
}

class Message {
  public MessageId $message_id;
  public MessagePayload $payload;
}

class DatasetStatus {
}

class DatasetTriggers {
}

class OffsetSeconds {
}

class FilterExpression {
}

class Timestamp {
}

class TriggeringDataset {
  public DatasetName $name;
}

class VersioningConfiguration {
  public UnlimitedVersioning $unlimited;
  public MaxVersions $max_versions;
}

class BatchPutMessageRequest {
  public ChannelName $channel_name;
  public Messages $messages;
}

class DeleteDatastoreRequest {
  public DatastoreName $datastore_name;
}

class PresignedURI {
}

class ListPipelinesResponse {
  public PipelineSummaries $pipeline_summaries;
  public NextToken $next_token;
}

class CustomerManagedChannelS3Storage {
  public RoleArn $role_arn;
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
}

class DatasetContentDeliveryRules {
}

class DescribeChannelRequest {
  public ChannelName $channel_name;
  public IncludeStatisticsFlag $include_statistics;
}

class DatasetEntries {
}

class DatasetEntry {
  public EntryName $entry_name;
  public PresignedURI $data_uri;
}

class DoubleValue {
}

class OutputFileUriValue {
  public OutputFileName $file_name;
}

class UnlimitedRetentionPeriod {
}

class ReprocessingId {
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceId $resource_id;
  public resourceArn $resource_arn;
}

class ChannelActivity {
  public ActivityName $name;
  public ChannelName $channel_name;
  public ActivityName $next;
}

class RetentionPeriod {
  public UnlimitedRetentionPeriod $unlimited;
  public RetentionPeriodInDays $number_of_days;
}

class DatasetContentVersionValue {
  public DatasetName $dataset_name;
}

class DescribeDatasetRequest {
  public DatasetName $dataset_name;
}

class DatasetContentDeliveryDestination {
  public IotEventsDestinationConfiguration $iot_events_destination_configuration;
  public S3DestinationConfiguration $s_3_destination_configuration;
}

class DescribePipelineRequest {
  public PipelineName $pipeline_name;
}

class TagKey {
}

class UpdateDatastoreRequest {
  public DatastoreName $datastore_name;
  public RetentionPeriod $retention_period;
  public DatastoreStorage $datastore_storage;
}

class LoggingEnabled {
}

class Messages {
}

class QueryFilters {
}

class AddAttributesActivity {
  public ActivityName $name;
  public AttributeNameMapping $attributes;
  public ActivityName $next;
}

class DatasetContentSummary {
  public DatasetContentVersion $version;
  public DatasetContentStatus $status;
  public Timestamp $creation_time;
  public Timestamp $schedule_time;
  public Timestamp $completion_time;
}

class DeletePipelineRequest {
  public PipelineName $pipeline_name;
}

class Variable {
  public VariableName $name;
  public StringValue $string_value;
  public DoubleValue $double_value;
  public DatasetContentVersionValue $dataset_content_version_value;
  public OutputFileUriValue $output_file_uri_value;
}

class ChannelArn {
}

class ChannelSummary {
  public ChannelName $channel_name;
  public ChannelStorageSummary $channel_storage;
  public ChannelStatus $status;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
}

class IotEventsInputName {
}

class ListDatastoresRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ReprocessingStatus {
}

class StartPipelineReprocessingRequest {
  public PipelineName $pipeline_name;
  public StartTime $start_time;
  public EndTime $end_time;
}

class CreateDatastoreRequest {
  public DatastoreName $datastore_name;
  public DatastoreStorage $datastore_storage;
  public RetentionPeriod $retention_period;
  public TagList $tags;
}

class EndTime {
}

class ListChannelsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class SqlQueryDatasetAction {
  public SqlQuery $sql_query;
  public QueryFilters $filters;
}

class MaxMessages {
}

class PipelineActivities {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class CancelPipelineReprocessingResponse {
}

class CustomerManagedDatastoreS3StorageSummary {
  public RoleArn $role_arn;
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
}

class GlueTableName {
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class RunPipelineActivityResponse {
  public MessagePayloads $payloads;
  public LogResult $log_result;
}

class ServiceManagedDatastoreS3Storage {
}

class EntryName {
}

class Variables {
}

class BatchPutMessageErrorEntries {
}

class DatasetTrigger {
  public Schedule $schedule;
  public TriggeringDataset $dataset;
}

class DescribeDatasetResponse {
  public Dataset $dataset;
}

class DescribeDatastoreRequest {
  public DatastoreName $datastore_name;
  public IncludeStatisticsFlag $include_statistics;
}

class Pipeline {
  public PipelineName $name;
  public PipelineArn $arn;
  public PipelineActivities $activities;
  public ReprocessingSummaries $reprocessing_summaries;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
}

class DatastoreStorageSummary {
  public ServiceManagedDatastoreS3StorageSummary $service_managed_s_3;
  public CustomerManagedDatastoreS3StorageSummary $customer_managed_s_3;
}

class PipelineArn {
}

class PipelineSummaries {
}

class ChannelStatus {
}

class DatasetContentSummaries {
}

class LambdaName {
}

class ListDatasetsResponse {
  public NextToken $next_token;
  public DatasetSummaries $dataset_summaries;
}

class ChannelName {
}

class DeviceRegistryEnrichActivity {
  public ActivityName $name;
  public AttributeName $attribute;
  public AttributeName $thing_name;
  public RoleArn $role_arn;
  public ActivityName $next;
}

