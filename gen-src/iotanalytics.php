<?hh // strict
namespace slack\aws\iotanalytics;

interface IoTAnalytics {
  public function BatchPutMessage(BatchPutMessageRequest) Awaitable<Errors\Result<BatchPutMessageResponse>>;
  public function CancelPipelineReprocessing(CancelPipelineReprocessingRequest) Awaitable<Errors\Result<CancelPipelineReprocessingResponse>>;
  public function CreateChannel(CreateChannelRequest) Awaitable<Errors\Result<CreateChannelResponse>>;
  public function CreateDataset(CreateDatasetRequest) Awaitable<Errors\Result<CreateDatasetResponse>>;
  public function CreateDatasetContent(CreateDatasetContentRequest) Awaitable<Errors\Result<CreateDatasetContentResponse>>;
  public function CreateDatastore(CreateDatastoreRequest) Awaitable<Errors\Result<CreateDatastoreResponse>>;
  public function CreatePipeline(CreatePipelineRequest) Awaitable<Errors\Result<CreatePipelineResponse>>;
  public function DeleteChannel(DeleteChannelRequest) Awaitable<Errors\Error>;
  public function DeleteDataset(DeleteDatasetRequest) Awaitable<Errors\Error>;
  public function DeleteDatasetContent(DeleteDatasetContentRequest) Awaitable<Errors\Error>;
  public function DeleteDatastore(DeleteDatastoreRequest) Awaitable<Errors\Error>;
  public function DeletePipeline(DeletePipelineRequest) Awaitable<Errors\Error>;
  public function DescribeChannel(DescribeChannelRequest) Awaitable<Errors\Result<DescribeChannelResponse>>;
  public function DescribeDataset(DescribeDatasetRequest) Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribeDatastore(DescribeDatastoreRequest) Awaitable<Errors\Result<DescribeDatastoreResponse>>;
  public function DescribeLoggingOptions(DescribeLoggingOptionsRequest) Awaitable<Errors\Result<DescribeLoggingOptionsResponse>>;
  public function DescribePipeline(DescribePipelineRequest) Awaitable<Errors\Result<DescribePipelineResponse>>;
  public function GetDatasetContent(GetDatasetContentRequest) Awaitable<Errors\Result<GetDatasetContentResponse>>;
  public function ListChannels(ListChannelsRequest) Awaitable<Errors\Result<ListChannelsResponse>>;
  public function ListDatasetContents(ListDatasetContentsRequest) Awaitable<Errors\Result<ListDatasetContentsResponse>>;
  public function ListDatasets(ListDatasetsRequest) Awaitable<Errors\Result<ListDatasetsResponse>>;
  public function ListDatastores(ListDatastoresRequest) Awaitable<Errors\Result<ListDatastoresResponse>>;
  public function ListPipelines(ListPipelinesRequest) Awaitable<Errors\Result<ListPipelinesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutLoggingOptions(PutLoggingOptionsRequest) Awaitable<Errors\Error>;
  public function RunPipelineActivity(RunPipelineActivityRequest) Awaitable<Errors\Result<RunPipelineActivityResponse>>;
  public function SampleChannelData(SampleChannelDataRequest) Awaitable<Errors\Result<SampleChannelDataResponse>>;
  public function StartPipelineReprocessing(StartPipelineReprocessingRequest) Awaitable<Errors\Result<StartPipelineReprocessingResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateChannel(UpdateChannelRequest) Awaitable<Errors\Error>;
  public function UpdateDataset(UpdateDatasetRequest) Awaitable<Errors\Error>;
  public function UpdateDatastore(UpdateDatastoreRequest) Awaitable<Errors\Error>;
  public function UpdatePipeline(UpdatePipelineRequest) Awaitable<Errors\Error>;
}

class ActivityBatchSize {
}

class ActivityName {
}

class AddAttributesActivity {
  public AttributeNameMapping $attributes;
  public ActivityName $name;
  public ActivityName $next;
}

class AttributeName {
}

class AttributeNameMapping {
}

class AttributeNames {
}

class BatchPutMessageErrorEntries {
}

class BatchPutMessageErrorEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public MessageId $message_id;
}

class BatchPutMessageRequest {
  public ChannelName $channel_name;
  public Messages $messages;
}

class BatchPutMessageResponse {
  public BatchPutMessageErrorEntries $batch_put_message_error_entries;
}

class BucketKeyExpression {
}

class BucketName {
}

class CancelPipelineReprocessingRequest {
  public PipelineName $pipeline_name;
  public ReprocessingId $reprocessing_id;
}

class CancelPipelineReprocessingResponse {
}

class Channel {
  public ChannelArn $arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public ChannelName $name;
  public RetentionPeriod $retention_period;
  public ChannelStatus $status;
  public ChannelStorage $storage;
}

class ChannelActivity {
  public ChannelName $channel_name;
  public ActivityName $name;
  public ActivityName $next;
}

class ChannelArn {
}

class ChannelName {
}

class ChannelStatistics {
  public EstimatedResourceSize $size;
}

class ChannelStatus {
}

class ChannelStorage {
  public CustomerManagedChannelS3Storage $customer_managed_s_3;
  public ServiceManagedChannelS3Storage $service_managed_s_3;
}

class ChannelStorageSummary {
  public CustomerManagedChannelS3StorageSummary $customer_managed_s_3;
  public ServiceManagedChannelS3StorageSummary $service_managed_s_3;
}

class ChannelSummaries {
}

class ChannelSummary {
  public ChannelName $channel_name;
  public ChannelStorageSummary $channel_storage;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public ChannelStatus $status;
}

class ComputeType {
}

class ContainerDatasetAction {
  public RoleArn $execution_role_arn;
  public Image $image;
  public ResourceConfiguration $resource_configuration;
  public Variables $variables;
}

class CreateChannelRequest {
  public ChannelName $channel_name;
  public ChannelStorage $channel_storage;
  public RetentionPeriod $retention_period;
  public TagList $tags;
}

class CreateChannelResponse {
  public ChannelArn $channel_arn;
  public ChannelName $channel_name;
  public RetentionPeriod $retention_period;
}

class CreateDatasetContentRequest {
  public DatasetName $dataset_name;
}

class CreateDatasetContentResponse {
  public DatasetContentVersion $version_id;
}

class CreateDatasetRequest {
  public DatasetActions $actions;
  public DatasetContentDeliveryRules $content_delivery_rules;
  public DatasetName $dataset_name;
  public RetentionPeriod $retention_period;
  public TagList $tags;
  public DatasetTriggers $triggers;
  public VersioningConfiguration $versioning_configuration;
}

class CreateDatasetResponse {
  public DatasetArn $dataset_arn;
  public DatasetName $dataset_name;
  public RetentionPeriod $retention_period;
}

class CreateDatastoreRequest {
  public DatastoreName $datastore_name;
  public DatastoreStorage $datastore_storage;
  public RetentionPeriod $retention_period;
  public TagList $tags;
}

class CreateDatastoreResponse {
  public DatastoreArn $datastore_arn;
  public DatastoreName $datastore_name;
  public RetentionPeriod $retention_period;
}

class CreatePipelineRequest {
  public PipelineActivities $pipeline_activities;
  public PipelineName $pipeline_name;
  public TagList $tags;
}

class CreatePipelineResponse {
  public PipelineArn $pipeline_arn;
  public PipelineName $pipeline_name;
}

class CustomerManagedChannelS3Storage {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;
}

class CustomerManagedChannelS3StorageSummary {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;
}

class CustomerManagedDatastoreS3Storage {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;
}

class CustomerManagedDatastoreS3StorageSummary {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;
}

class Dataset {
  public DatasetActions $actions;
  public DatasetArn $arn;
  public DatasetContentDeliveryRules $content_delivery_rules;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public DatasetName $name;
  public RetentionPeriod $retention_period;
  public DatasetStatus $status;
  public DatasetTriggers $triggers;
  public VersioningConfiguration $versioning_configuration;
}

class DatasetAction {
  public DatasetActionName $action_name;
  public ContainerDatasetAction $container_action;
  public SqlQueryDatasetAction $query_action;
}

class DatasetActionName {
}

class DatasetActionSummaries {
}

class DatasetActionSummary {
  public DatasetActionName $action_name;
  public DatasetActionType $action_type;
}

class DatasetActionType {
}

class DatasetActions {
}

class DatasetArn {
}

class DatasetContentDeliveryDestination {
  public IotEventsDestinationConfiguration $iot_events_destination_configuration;
  public S3DestinationConfiguration $s_3_destination_configuration;
}

class DatasetContentDeliveryRule {
  public DatasetContentDeliveryDestination $destination;
  public EntryName $entry_name;
}

class DatasetContentDeliveryRules {
}

class DatasetContentState {
}

class DatasetContentStatus {
  public Reason $reason;
  public DatasetContentState $state;
}

class DatasetContentSummaries {
}

class DatasetContentSummary {
  public Timestamp $completion_time;
  public Timestamp $creation_time;
  public Timestamp $schedule_time;
  public DatasetContentStatus $status;
  public DatasetContentVersion $version;
}

class DatasetContentVersion {
}

class DatasetContentVersionValue {
  public DatasetName $dataset_name;
}

class DatasetEntries {
}

class DatasetEntry {
  public PresignedURI $data_uri;
  public EntryName $entry_name;
}

class DatasetName {
}

class DatasetStatus {
}

class DatasetSummaries {
}

class DatasetSummary {
  public DatasetActionSummaries $actions;
  public Timestamp $creation_time;
  public DatasetName $dataset_name;
  public Timestamp $last_update_time;
  public DatasetStatus $status;
  public DatasetTriggers $triggers;
}

class DatasetTrigger {
  public TriggeringDataset $dataset;
  public Schedule $schedule;
}

class DatasetTriggers {
}

class Datastore {
  public DatastoreArn $arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public DatastoreName $name;
  public RetentionPeriod $retention_period;
  public DatastoreStatus $status;
  public DatastoreStorage $storage;
}

class DatastoreActivity {
  public DatastoreName $datastore_name;
  public ActivityName $name;
}

class DatastoreArn {
}

class DatastoreName {
}

class DatastoreStatistics {
  public EstimatedResourceSize $size;
}

class DatastoreStatus {
}

class DatastoreStorage {
  public CustomerManagedDatastoreS3Storage $customer_managed_s_3;
  public ServiceManagedDatastoreS3Storage $service_managed_s_3;
}

class DatastoreStorageSummary {
  public CustomerManagedDatastoreS3StorageSummary $customer_managed_s_3;
  public ServiceManagedDatastoreS3StorageSummary $service_managed_s_3;
}

class DatastoreSummaries {
}

class DatastoreSummary {
  public Timestamp $creation_time;
  public DatastoreName $datastore_name;
  public DatastoreStorageSummary $datastore_storage;
  public Timestamp $last_update_time;
  public DatastoreStatus $status;
}

class DeleteChannelRequest {
  public ChannelName $channel_name;
}

class DeleteDatasetContentRequest {
  public DatasetName $dataset_name;
  public DatasetContentVersion $version_id;
}

class DeleteDatasetRequest {
  public DatasetName $dataset_name;
}

class DeleteDatastoreRequest {
  public DatastoreName $datastore_name;
}

class DeletePipelineRequest {
  public PipelineName $pipeline_name;
}

class DeltaTime {
  public OffsetSeconds $offset_seconds;
  public TimeExpression $time_expression;
}

class DescribeChannelRequest {
  public ChannelName $channel_name;
  public IncludeStatisticsFlag $include_statistics;
}

class DescribeChannelResponse {
  public Channel $channel;
  public ChannelStatistics $statistics;
}

class DescribeDatasetRequest {
  public DatasetName $dataset_name;
}

class DescribeDatasetResponse {
  public Dataset $dataset;
}

class DescribeDatastoreRequest {
  public DatastoreName $datastore_name;
  public IncludeStatisticsFlag $include_statistics;
}

class DescribeDatastoreResponse {
  public Datastore $datastore;
  public DatastoreStatistics $statistics;
}

class DescribeLoggingOptionsRequest {
}

class DescribeLoggingOptionsResponse {
  public LoggingOptions $logging_options;
}

class DescribePipelineRequest {
  public PipelineName $pipeline_name;
}

class DescribePipelineResponse {
  public Pipeline $pipeline;
}

class DeviceRegistryEnrichActivity {
  public AttributeName $attribute;
  public ActivityName $name;
  public ActivityName $next;
  public RoleArn $role_arn;
  public AttributeName $thing_name;
}

class DeviceShadowEnrichActivity {
  public AttributeName $attribute;
  public ActivityName $name;
  public ActivityName $next;
  public RoleArn $role_arn;
  public AttributeName $thing_name;
}

class DoubleValue {
}

class EndTime {
}

class EntryName {
}

class ErrorCode {
}

class ErrorMessage {
}

class EstimatedResourceSize {
  public Timestamp $estimated_on;
  public SizeInBytes $estimated_size_in_bytes;
}

class FilterActivity {
  public FilterExpression $filter;
  public ActivityName $name;
  public ActivityName $next;
}

class FilterExpression {
}

class GetDatasetContentRequest {
  public DatasetName $dataset_name;
  public DatasetContentVersion $version_id;
}

class GetDatasetContentResponse {
  public DatasetEntries $entries;
  public DatasetContentStatus $status;
  public Timestamp $timestamp;
}

class GlueConfiguration {
  public GlueDatabaseName $database_name;
  public GlueTableName $table_name;
}

class GlueDatabaseName {
}

class GlueTableName {
}

class Image {
}

class IncludeStatisticsFlag {
}

class InternalFailureException {
  public errorMessage $message;
}

class InvalidRequestException {
  public errorMessage $message;
}

class IotEventsDestinationConfiguration {
  public IotEventsInputName $input_name;
  public RoleArn $role_arn;
}

class IotEventsInputName {
}

class LambdaActivity {
  public ActivityBatchSize $batch_size;
  public LambdaName $lambda_name;
  public ActivityName $name;
  public ActivityName $next;
}

class LambdaName {
}

class LimitExceededException {
  public errorMessage $message;
}

class ListChannelsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListChannelsResponse {
  public ChannelSummaries $channel_summaries;
  public NextToken $next_token;
}

class ListDatasetContentsRequest {
  public DatasetName $dataset_name;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $scheduled_before;
  public Timestamp $scheduled_on_or_after;
}

class ListDatasetContentsResponse {
  public DatasetContentSummaries $dataset_content_summaries;
  public NextToken $next_token;
}

class ListDatasetsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDatasetsResponse {
  public DatasetSummaries $dataset_summaries;
  public NextToken $next_token;
}

class ListDatastoresRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDatastoresResponse {
  public DatastoreSummaries $datastore_summaries;
  public NextToken $next_token;
}

class ListPipelinesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListPipelinesResponse {
  public NextToken $next_token;
  public PipelineSummaries $pipeline_summaries;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class LogResult {
}

class LoggingEnabled {
}

class LoggingLevel {
}

class LoggingOptions {
  public LoggingEnabled $enabled;
  public LoggingLevel $level;
  public RoleArn $role_arn;
}

class MathActivity {
  public AttributeName $attribute;
  public MathExpression $math;
  public ActivityName $name;
  public ActivityName $next;
}

class MathExpression {
}

class MaxMessages {
}

class MaxResults {
}

class MaxVersions {
}

class Message {
  public MessageId $message_id;
  public MessagePayload $payload;
}

class MessageId {
}

class MessagePayload {
}

class MessagePayloads {
}

class Messages {
}

class NextToken {
}

class OffsetSeconds {
}

class OutputFileName {
}

class OutputFileUriValue {
  public OutputFileName $file_name;
}

class Pipeline {
  public PipelineActivities $activities;
  public PipelineArn $arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public PipelineName $name;
  public ReprocessingSummaries $reprocessing_summaries;
}

class PipelineActivities {
}

class PipelineActivity {
  public AddAttributesActivity $add_attributes;
  public ChannelActivity $channel;
  public DatastoreActivity $datastore;
  public DeviceRegistryEnrichActivity $device_registry_enrich;
  public DeviceShadowEnrichActivity $device_shadow_enrich;
  public FilterActivity $filter;
  public LambdaActivity $lambda;
  public MathActivity $math;
  public RemoveAttributesActivity $remove_attributes;
  public SelectAttributesActivity $select_attributes;
}

class PipelineArn {
}

class PipelineName {
}

class PipelineSummaries {
}

class PipelineSummary {
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public PipelineName $pipeline_name;
  public ReprocessingSummaries $reprocessing_summaries;
}

class PresignedURI {
}

class PutLoggingOptionsRequest {
  public LoggingOptions $logging_options;
}

class QueryFilter {
  public DeltaTime $delta_time;
}

class QueryFilters {
}

class Reason {
}

class RemoveAttributesActivity {
  public AttributeNames $attributes;
  public ActivityName $name;
  public ActivityName $next;
}

class ReprocessingId {
}

class ReprocessingStatus {
}

class ReprocessingSummaries {
}

class ReprocessingSummary {
  public Timestamp $creation_time;
  public ReprocessingId $id;
  public ReprocessingStatus $status;
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceArn $resource_arn;
  public resourceId $resource_id;
}

class ResourceArn {
}

class ResourceConfiguration {
  public ComputeType $compute_type;
  public VolumeSizeInGB $volume_size_in_gb;
}

class ResourceNotFoundException {
  public errorMessage $message;
}

class RetentionPeriod {
  public RetentionPeriodInDays $number_of_days;
  public UnlimitedRetentionPeriod $unlimited;
}

class RetentionPeriodInDays {
}

class RoleArn {
}

class RunPipelineActivityRequest {
  public MessagePayloads $payloads;
  public PipelineActivity $pipeline_activity;
}

class RunPipelineActivityResponse {
  public LogResult $log_result;
  public MessagePayloads $payloads;
}

class S3DestinationConfiguration {
  public BucketName $bucket;
  public GlueConfiguration $glue_configuration;
  public BucketKeyExpression $key;
  public RoleArn $role_arn;
}

class S3KeyPrefix {
}

class SampleChannelDataRequest {
  public ChannelName $channel_name;
  public EndTime $end_time;
  public MaxMessages $max_messages;
  public StartTime $start_time;
}

class SampleChannelDataResponse {
  public MessagePayloads $payloads;
}

class Schedule {
  public ScheduleExpression $expression;
}

class ScheduleExpression {
}

class SelectAttributesActivity {
  public AttributeNames $attributes;
  public ActivityName $name;
  public ActivityName $next;
}

class ServiceManagedChannelS3Storage {
}

class ServiceManagedChannelS3StorageSummary {
}

class ServiceManagedDatastoreS3Storage {
}

class ServiceManagedDatastoreS3StorageSummary {
}

class ServiceUnavailableException {
  public errorMessage $message;
}

class SizeInBytes {
}

class SqlQuery {
}

class SqlQueryDatasetAction {
  public QueryFilters $filters;
  public SqlQuery $sql_query;
}

class StartPipelineReprocessingRequest {
  public EndTime $end_time;
  public PipelineName $pipeline_name;
  public StartTime $start_time;
}

class StartPipelineReprocessingResponse {
  public ReprocessingId $reprocessing_id;
}

class StartTime {
}

class StringValue {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class ThrottlingException {
  public errorMessage $message;
}

class TimeExpression {
}

class Timestamp {
}

class TriggeringDataset {
  public DatasetName $name;
}

class UnlimitedRetentionPeriod {
}

class UnlimitedVersioning {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateChannelRequest {
  public ChannelName $channel_name;
  public ChannelStorage $channel_storage;
  public RetentionPeriod $retention_period;
}

class UpdateDatasetRequest {
  public DatasetActions $actions;
  public DatasetContentDeliveryRules $content_delivery_rules;
  public DatasetName $dataset_name;
  public RetentionPeriod $retention_period;
  public DatasetTriggers $triggers;
  public VersioningConfiguration $versioning_configuration;
}

class UpdateDatastoreRequest {
  public DatastoreName $datastore_name;
  public DatastoreStorage $datastore_storage;
  public RetentionPeriod $retention_period;
}

class UpdatePipelineRequest {
  public PipelineActivities $pipeline_activities;
  public PipelineName $pipeline_name;
}

class Variable {
  public DatasetContentVersionValue $dataset_content_version_value;
  public DoubleValue $double_value;
  public VariableName $name;
  public OutputFileUriValue $output_file_uri_value;
  public StringValue $string_value;
}

class VariableName {
}

class Variables {
}

class VersioningConfiguration {
  public MaxVersions $max_versions;
  public UnlimitedVersioning $unlimited;
}

class VolumeSizeInGB {
}

class errorMessage {
}

class resourceArn {
}

class resourceId {
}

