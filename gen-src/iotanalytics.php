<?hh // strict
namespace slack\aws\iotanalytics;

interface IoTAnalytics {
  public function BatchPutMessage(BatchPutMessageRequest $in): Awaitable<\Errors\Result<BatchPutMessageResponse>>;
  public function CancelPipelineReprocessing(CancelPipelineReprocessingRequest $in): Awaitable<\Errors\Result<CancelPipelineReprocessingResponse>>;
  public function CreateChannel(CreateChannelRequest $in): Awaitable<\Errors\Result<CreateChannelResponse>>;
  public function CreateDataset(CreateDatasetRequest $in): Awaitable<\Errors\Result<CreateDatasetResponse>>;
  public function CreateDatasetContent(CreateDatasetContentRequest $in): Awaitable<\Errors\Result<CreateDatasetContentResponse>>;
  public function CreateDatastore(CreateDatastoreRequest $in): Awaitable<\Errors\Result<CreateDatastoreResponse>>;
  public function CreatePipeline(CreatePipelineRequest $in): Awaitable<\Errors\Result<CreatePipelineResponse>>;
  public function DeleteChannel(DeleteChannelRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDataset(DeleteDatasetRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDatasetContent(DeleteDatasetContentRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDatastore(DeleteDatastoreRequest $in): Awaitable<\Errors\Error>;
  public function DeletePipeline(DeletePipelineRequest $in): Awaitable<\Errors\Error>;
  public function DescribeChannel(DescribeChannelRequest $in): Awaitable<\Errors\Result<DescribeChannelResponse>>;
  public function DescribeDataset(DescribeDatasetRequest $in): Awaitable<\Errors\Result<DescribeDatasetResponse>>;
  public function DescribeDatastore(DescribeDatastoreRequest $in): Awaitable<\Errors\Result<DescribeDatastoreResponse>>;
  public function DescribeLoggingOptions(DescribeLoggingOptionsRequest $in): Awaitable<\Errors\Result<DescribeLoggingOptionsResponse>>;
  public function DescribePipeline(DescribePipelineRequest $in): Awaitable<\Errors\Result<DescribePipelineResponse>>;
  public function GetDatasetContent(GetDatasetContentRequest $in): Awaitable<\Errors\Result<GetDatasetContentResponse>>;
  public function ListChannels(ListChannelsRequest $in): Awaitable<\Errors\Result<ListChannelsResponse>>;
  public function ListDatasetContents(ListDatasetContentsRequest $in): Awaitable<\Errors\Result<ListDatasetContentsResponse>>;
  public function ListDatasets(ListDatasetsRequest $in): Awaitable<\Errors\Result<ListDatasetsResponse>>;
  public function ListDatastores(ListDatastoresRequest $in): Awaitable<\Errors\Result<ListDatastoresResponse>>;
  public function ListPipelines(ListPipelinesRequest $in): Awaitable<\Errors\Result<ListPipelinesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutLoggingOptions(PutLoggingOptionsRequest $in): Awaitable<\Errors\Error>;
  public function RunPipelineActivity(RunPipelineActivityRequest $in): Awaitable<\Errors\Result<RunPipelineActivityResponse>>;
  public function SampleChannelData(SampleChannelDataRequest $in): Awaitable<\Errors\Result<SampleChannelDataResponse>>;
  public function StartPipelineReprocessing(StartPipelineReprocessingRequest $in): Awaitable<\Errors\Result<StartPipelineReprocessingResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateChannel(UpdateChannelRequest $in): Awaitable<\Errors\Error>;
  public function UpdateDataset(UpdateDatasetRequest $in): Awaitable<\Errors\Error>;
  public function UpdateDatastore(UpdateDatastoreRequest $in): Awaitable<\Errors\Error>;
  public function UpdatePipeline(UpdatePipelineRequest $in): Awaitable<\Errors\Error>;
}

type ActivityBatchSize = int;

type ActivityName = string;

class AddAttributesActivity {
  public ?AttributeNameMapping $attributes;
  public ?ActivityName $name;
  public ?ActivityName $next;

  public function __construct(shape(
    ?'attributes' => ?AttributeNameMapping,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? dict[];
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
  }
}

type AttributeName = string;

type AttributeNameMapping = dict<AttributeName, AttributeName>;

type AttributeNames = vec<AttributeName>;

type BatchPutMessageErrorEntries = vec<BatchPutMessageErrorEntry>;

class BatchPutMessageErrorEntry {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;
  public ?MessageId $message_id;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
    ?'message_id' => ?MessageId,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->message_id = $s['message_id'] ?? '';
  }
}

class BatchPutMessageRequest {
  public ?ChannelName $channel_name;
  public ?Messages $messages;

  public function __construct(shape(
    ?'channel_name' => ?ChannelName,
    ?'messages' => ?Messages,
  ) $s = shape()) {
    $this->channel_name = $s['channel_name'] ?? '';
    $this->messages = $s['messages'] ?? vec[];
  }
}

class BatchPutMessageResponse {
  public ?BatchPutMessageErrorEntries $batch_put_message_error_entries;

  public function __construct(shape(
    ?'batch_put_message_error_entries' => ?BatchPutMessageErrorEntries,
  ) $s = shape()) {
    $this->batch_put_message_error_entries = $s['batch_put_message_error_entries'] ?? vec[];
  }
}

type BucketKeyExpression = string;

type BucketName = string;

class CancelPipelineReprocessingRequest {
  public ?PipelineName $pipeline_name;
  public ?ReprocessingId $reprocessing_id;

  public function __construct(shape(
    ?'pipeline_name' => ?PipelineName,
    ?'reprocessing_id' => ?ReprocessingId,
  ) $s = shape()) {
    $this->pipeline_name = $s['pipeline_name'] ?? '';
    $this->reprocessing_id = $s['reprocessing_id'] ?? '';
  }
}

class CancelPipelineReprocessingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Channel {
  public ?ChannelArn $arn;
  public ?Timestamp $creation_time;
  public ?Timestamp $last_update_time;
  public ?ChannelName $name;
  public ?RetentionPeriod $retention_period;
  public ?ChannelStatus $status;
  public ?ChannelStorage $storage;

  public function __construct(shape(
    ?'arn' => ?ChannelArn,
    ?'creation_time' => ?Timestamp,
    ?'last_update_time' => ?Timestamp,
    ?'name' => ?ChannelName,
    ?'retention_period' => ?RetentionPeriod,
    ?'status' => ?ChannelStatus,
    ?'storage' => ?ChannelStorage,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->retention_period = $s['retention_period'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->storage = $s['storage'] ?? null;
  }
}

class ChannelActivity {
  public ?ChannelName $channel_name;
  public ?ActivityName $name;
  public ?ActivityName $next;

  public function __construct(shape(
    ?'channel_name' => ?ChannelName,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
  ) $s = shape()) {
    $this->channel_name = $s['channel_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
  }
}

type ChannelArn = string;

type ChannelName = string;

class ChannelStatistics {
  public ?EstimatedResourceSize $size;

  public function __construct(shape(
    ?'size' => ?EstimatedResourceSize,
  ) $s = shape()) {
    $this->size = $s['size'] ?? null;
  }
}

type ChannelStatus = string;

class ChannelStorage {
  public ?CustomerManagedChannelS3Storage $customer_managed_s_3;
  public ?ServiceManagedChannelS3Storage $service_managed_s_3;

  public function __construct(shape(
    ?'customer_managed_s_3' => ?CustomerManagedChannelS3Storage,
    ?'service_managed_s_3' => ?ServiceManagedChannelS3Storage,
  ) $s = shape()) {
    $this->customer_managed_s_3 = $s['customer_managed_s_3'] ?? null;
    $this->service_managed_s_3 = $s['service_managed_s_3'] ?? null;
  }
}

class ChannelStorageSummary {
  public ?CustomerManagedChannelS3StorageSummary $customer_managed_s_3;
  public ?ServiceManagedChannelS3StorageSummary $service_managed_s_3;

  public function __construct(shape(
    ?'customer_managed_s_3' => ?CustomerManagedChannelS3StorageSummary,
    ?'service_managed_s_3' => ?ServiceManagedChannelS3StorageSummary,
  ) $s = shape()) {
    $this->customer_managed_s_3 = $s['customer_managed_s_3'] ?? null;
    $this->service_managed_s_3 = $s['service_managed_s_3'] ?? null;
  }
}

type ChannelSummaries = vec<ChannelSummary>;

class ChannelSummary {
  public ?ChannelName $channel_name;
  public ?ChannelStorageSummary $channel_storage;
  public ?Timestamp $creation_time;
  public ?Timestamp $last_update_time;
  public ?ChannelStatus $status;

  public function __construct(shape(
    ?'channel_name' => ?ChannelName,
    ?'channel_storage' => ?ChannelStorageSummary,
    ?'creation_time' => ?Timestamp,
    ?'last_update_time' => ?Timestamp,
    ?'status' => ?ChannelStatus,
  ) $s = shape()) {
    $this->channel_name = $s['channel_name'] ?? '';
    $this->channel_storage = $s['channel_storage'] ?? null;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type ComputeType = string;

class ContainerDatasetAction {
  public ?RoleArn $execution_role_arn;
  public ?Image $image;
  public ?ResourceConfiguration $resource_configuration;
  public ?Variables $variables;

  public function __construct(shape(
    ?'execution_role_arn' => ?RoleArn,
    ?'image' => ?Image,
    ?'resource_configuration' => ?ResourceConfiguration,
    ?'variables' => ?Variables,
  ) $s = shape()) {
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->image = $s['image'] ?? '';
    $this->resource_configuration = $s['resource_configuration'] ?? null;
    $this->variables = $s['variables'] ?? vec[];
  }
}

class CreateChannelRequest {
  public ?ChannelName $channel_name;
  public ?ChannelStorage $channel_storage;
  public ?RetentionPeriod $retention_period;
  public ?TagList $tags;

  public function __construct(shape(
    ?'channel_name' => ?ChannelName,
    ?'channel_storage' => ?ChannelStorage,
    ?'retention_period' => ?RetentionPeriod,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->channel_name = $s['channel_name'] ?? '';
    $this->channel_storage = $s['channel_storage'] ?? null;
    $this->retention_period = $s['retention_period'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateChannelResponse {
  public ?ChannelArn $channel_arn;
  public ?ChannelName $channel_name;
  public ?RetentionPeriod $retention_period;

  public function __construct(shape(
    ?'channel_arn' => ?ChannelArn,
    ?'channel_name' => ?ChannelName,
    ?'retention_period' => ?RetentionPeriod,
  ) $s = shape()) {
    $this->channel_arn = $s['channel_arn'] ?? '';
    $this->channel_name = $s['channel_name'] ?? '';
    $this->retention_period = $s['retention_period'] ?? null;
  }
}

class CreateDatasetContentRequest {
  public ?DatasetName $dataset_name;

  public function __construct(shape(
    ?'dataset_name' => ?DatasetName,
  ) $s = shape()) {
    $this->dataset_name = $s['dataset_name'] ?? '';
  }
}

class CreateDatasetContentResponse {
  public ?DatasetContentVersion $version_id;

  public function __construct(shape(
    ?'version_id' => ?DatasetContentVersion,
  ) $s = shape()) {
    $this->version_id = $s['version_id'] ?? '';
  }
}

class CreateDatasetRequest {
  public ?DatasetActions $actions;
  public ?DatasetContentDeliveryRules $content_delivery_rules;
  public ?DatasetName $dataset_name;
  public ?RetentionPeriod $retention_period;
  public ?TagList $tags;
  public ?DatasetTriggers $triggers;
  public ?VersioningConfiguration $versioning_configuration;

  public function __construct(shape(
    ?'actions' => ?DatasetActions,
    ?'content_delivery_rules' => ?DatasetContentDeliveryRules,
    ?'dataset_name' => ?DatasetName,
    ?'retention_period' => ?RetentionPeriod,
    ?'tags' => ?TagList,
    ?'triggers' => ?DatasetTriggers,
    ?'versioning_configuration' => ?VersioningConfiguration,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->content_delivery_rules = $s['content_delivery_rules'] ?? vec[];
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->retention_period = $s['retention_period'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->triggers = $s['triggers'] ?? vec[];
    $this->versioning_configuration = $s['versioning_configuration'] ?? null;
  }
}

class CreateDatasetResponse {
  public ?DatasetArn $dataset_arn;
  public ?DatasetName $dataset_name;
  public ?RetentionPeriod $retention_period;

  public function __construct(shape(
    ?'dataset_arn' => ?DatasetArn,
    ?'dataset_name' => ?DatasetName,
    ?'retention_period' => ?RetentionPeriod,
  ) $s = shape()) {
    $this->dataset_arn = $s['dataset_arn'] ?? '';
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->retention_period = $s['retention_period'] ?? null;
  }
}

class CreateDatastoreRequest {
  public ?DatastoreName $datastore_name;
  public ?DatastoreStorage $datastore_storage;
  public ?RetentionPeriod $retention_period;
  public ?TagList $tags;

  public function __construct(shape(
    ?'datastore_name' => ?DatastoreName,
    ?'datastore_storage' => ?DatastoreStorage,
    ?'retention_period' => ?RetentionPeriod,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->datastore_name = $s['datastore_name'] ?? '';
    $this->datastore_storage = $s['datastore_storage'] ?? null;
    $this->retention_period = $s['retention_period'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDatastoreResponse {
  public ?DatastoreArn $datastore_arn;
  public ?DatastoreName $datastore_name;
  public ?RetentionPeriod $retention_period;

  public function __construct(shape(
    ?'datastore_arn' => ?DatastoreArn,
    ?'datastore_name' => ?DatastoreName,
    ?'retention_period' => ?RetentionPeriod,
  ) $s = shape()) {
    $this->datastore_arn = $s['datastore_arn'] ?? '';
    $this->datastore_name = $s['datastore_name'] ?? '';
    $this->retention_period = $s['retention_period'] ?? null;
  }
}

class CreatePipelineRequest {
  public ?PipelineActivities $pipeline_activities;
  public ?PipelineName $pipeline_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'pipeline_activities' => ?PipelineActivities,
    ?'pipeline_name' => ?PipelineName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->pipeline_activities = $s['pipeline_activities'] ?? vec[];
    $this->pipeline_name = $s['pipeline_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreatePipelineResponse {
  public ?PipelineArn $pipeline_arn;
  public ?PipelineName $pipeline_name;

  public function __construct(shape(
    ?'pipeline_arn' => ?PipelineArn,
    ?'pipeline_name' => ?PipelineName,
  ) $s = shape()) {
    $this->pipeline_arn = $s['pipeline_arn'] ?? '';
    $this->pipeline_name = $s['pipeline_name'] ?? '';
  }
}

class CustomerManagedChannelS3Storage {
  public ?BucketName $bucket;
  public ?S3KeyPrefix $key_prefix;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'bucket' => ?BucketName,
    ?'key_prefix' => ?S3KeyPrefix,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key_prefix = $s['key_prefix'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class CustomerManagedChannelS3StorageSummary {
  public ?BucketName $bucket;
  public ?S3KeyPrefix $key_prefix;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'bucket' => ?BucketName,
    ?'key_prefix' => ?S3KeyPrefix,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key_prefix = $s['key_prefix'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class CustomerManagedDatastoreS3Storage {
  public ?BucketName $bucket;
  public ?S3KeyPrefix $key_prefix;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'bucket' => ?BucketName,
    ?'key_prefix' => ?S3KeyPrefix,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key_prefix = $s['key_prefix'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class CustomerManagedDatastoreS3StorageSummary {
  public ?BucketName $bucket;
  public ?S3KeyPrefix $key_prefix;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'bucket' => ?BucketName,
    ?'key_prefix' => ?S3KeyPrefix,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key_prefix = $s['key_prefix'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class Dataset {
  public ?DatasetActions $actions;
  public ?DatasetArn $arn;
  public ?DatasetContentDeliveryRules $content_delivery_rules;
  public ?Timestamp $creation_time;
  public ?Timestamp $last_update_time;
  public ?DatasetName $name;
  public ?RetentionPeriod $retention_period;
  public ?DatasetStatus $status;
  public ?DatasetTriggers $triggers;
  public ?VersioningConfiguration $versioning_configuration;

  public function __construct(shape(
    ?'actions' => ?DatasetActions,
    ?'arn' => ?DatasetArn,
    ?'content_delivery_rules' => ?DatasetContentDeliveryRules,
    ?'creation_time' => ?Timestamp,
    ?'last_update_time' => ?Timestamp,
    ?'name' => ?DatasetName,
    ?'retention_period' => ?RetentionPeriod,
    ?'status' => ?DatasetStatus,
    ?'triggers' => ?DatasetTriggers,
    ?'versioning_configuration' => ?VersioningConfiguration,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->arn = $s['arn'] ?? '';
    $this->content_delivery_rules = $s['content_delivery_rules'] ?? vec[];
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->retention_period = $s['retention_period'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->triggers = $s['triggers'] ?? vec[];
    $this->versioning_configuration = $s['versioning_configuration'] ?? null;
  }
}

class DatasetAction {
  public ?DatasetActionName $action_name;
  public ?ContainerDatasetAction $container_action;
  public ?SqlQueryDatasetAction $query_action;

  public function __construct(shape(
    ?'action_name' => ?DatasetActionName,
    ?'container_action' => ?ContainerDatasetAction,
    ?'query_action' => ?SqlQueryDatasetAction,
  ) $s = shape()) {
    $this->action_name = $s['action_name'] ?? '';
    $this->container_action = $s['container_action'] ?? null;
    $this->query_action = $s['query_action'] ?? null;
  }
}

type DatasetActionName = string;

type DatasetActionSummaries = vec<DatasetActionSummary>;

class DatasetActionSummary {
  public ?DatasetActionName $action_name;
  public ?DatasetActionType $action_type;

  public function __construct(shape(
    ?'action_name' => ?DatasetActionName,
    ?'action_type' => ?DatasetActionType,
  ) $s = shape()) {
    $this->action_name = $s['action_name'] ?? '';
    $this->action_type = $s['action_type'] ?? '';
  }
}

type DatasetActionType = string;

type DatasetActions = vec<DatasetAction>;

type DatasetArn = string;

class DatasetContentDeliveryDestination {
  public ?IotEventsDestinationConfiguration $iot_events_destination_configuration;
  public ?S3DestinationConfiguration $s_3_destination_configuration;

  public function __construct(shape(
    ?'iot_events_destination_configuration' => ?IotEventsDestinationConfiguration,
    ?'s_3_destination_configuration' => ?S3DestinationConfiguration,
  ) $s = shape()) {
    $this->iot_events_destination_configuration = $s['iot_events_destination_configuration'] ?? null;
    $this->s_3_destination_configuration = $s['s_3_destination_configuration'] ?? null;
  }
}

class DatasetContentDeliveryRule {
  public ?DatasetContentDeliveryDestination $destination;
  public ?EntryName $entry_name;

  public function __construct(shape(
    ?'destination' => ?DatasetContentDeliveryDestination,
    ?'entry_name' => ?EntryName,
  ) $s = shape()) {
    $this->destination = $s['destination'] ?? null;
    $this->entry_name = $s['entry_name'] ?? '';
  }
}

type DatasetContentDeliveryRules = vec<DatasetContentDeliveryRule>;

type DatasetContentState = string;

class DatasetContentStatus {
  public ?Reason $reason;
  public ?DatasetContentState $state;

  public function __construct(shape(
    ?'reason' => ?Reason,
    ?'state' => ?DatasetContentState,
  ) $s = shape()) {
    $this->reason = $s['reason'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type DatasetContentSummaries = vec<DatasetContentSummary>;

class DatasetContentSummary {
  public ?Timestamp $completion_time;
  public ?Timestamp $creation_time;
  public ?Timestamp $schedule_time;
  public ?DatasetContentStatus $status;
  public ?DatasetContentVersion $version;

  public function __construct(shape(
    ?'completion_time' => ?Timestamp,
    ?'creation_time' => ?Timestamp,
    ?'schedule_time' => ?Timestamp,
    ?'status' => ?DatasetContentStatus,
    ?'version' => ?DatasetContentVersion,
  ) $s = shape()) {
    $this->completion_time = $s['completion_time'] ?? 0;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->schedule_time = $s['schedule_time'] ?? 0;
    $this->status = $s['status'] ?? null;
    $this->version = $s['version'] ?? '';
  }
}

type DatasetContentVersion = string;

class DatasetContentVersionValue {
  public ?DatasetName $dataset_name;

  public function __construct(shape(
    ?'dataset_name' => ?DatasetName,
  ) $s = shape()) {
    $this->dataset_name = $s['dataset_name'] ?? '';
  }
}

type DatasetEntries = vec<DatasetEntry>;

class DatasetEntry {
  public ?PresignedURI $data_uri;
  public ?EntryName $entry_name;

  public function __construct(shape(
    ?'data_uri' => ?PresignedURI,
    ?'entry_name' => ?EntryName,
  ) $s = shape()) {
    $this->data_uri = $s['data_uri'] ?? '';
    $this->entry_name = $s['entry_name'] ?? '';
  }
}

type DatasetName = string;

type DatasetStatus = string;

type DatasetSummaries = vec<DatasetSummary>;

class DatasetSummary {
  public ?DatasetActionSummaries $actions;
  public ?Timestamp $creation_time;
  public ?DatasetName $dataset_name;
  public ?Timestamp $last_update_time;
  public ?DatasetStatus $status;
  public ?DatasetTriggers $triggers;

  public function __construct(shape(
    ?'actions' => ?DatasetActionSummaries,
    ?'creation_time' => ?Timestamp,
    ?'dataset_name' => ?DatasetName,
    ?'last_update_time' => ?Timestamp,
    ?'status' => ?DatasetStatus,
    ?'triggers' => ?DatasetTriggers,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->triggers = $s['triggers'] ?? vec[];
  }
}

class DatasetTrigger {
  public ?TriggeringDataset $dataset;
  public ?Schedule $schedule;

  public function __construct(shape(
    ?'dataset' => ?TriggeringDataset,
    ?'schedule' => ?Schedule,
  ) $s = shape()) {
    $this->dataset = $s['dataset'] ?? null;
    $this->schedule = $s['schedule'] ?? null;
  }
}

type DatasetTriggers = vec<DatasetTrigger>;

class Datastore {
  public ?DatastoreArn $arn;
  public ?Timestamp $creation_time;
  public ?Timestamp $last_update_time;
  public ?DatastoreName $name;
  public ?RetentionPeriod $retention_period;
  public ?DatastoreStatus $status;
  public ?DatastoreStorage $storage;

  public function __construct(shape(
    ?'arn' => ?DatastoreArn,
    ?'creation_time' => ?Timestamp,
    ?'last_update_time' => ?Timestamp,
    ?'name' => ?DatastoreName,
    ?'retention_period' => ?RetentionPeriod,
    ?'status' => ?DatastoreStatus,
    ?'storage' => ?DatastoreStorage,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->retention_period = $s['retention_period'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->storage = $s['storage'] ?? null;
  }
}

class DatastoreActivity {
  public ?DatastoreName $datastore_name;
  public ?ActivityName $name;

  public function __construct(shape(
    ?'datastore_name' => ?DatastoreName,
    ?'name' => ?ActivityName,
  ) $s = shape()) {
    $this->datastore_name = $s['datastore_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type DatastoreArn = string;

type DatastoreName = string;

class DatastoreStatistics {
  public ?EstimatedResourceSize $size;

  public function __construct(shape(
    ?'size' => ?EstimatedResourceSize,
  ) $s = shape()) {
    $this->size = $s['size'] ?? null;
  }
}

type DatastoreStatus = string;

class DatastoreStorage {
  public ?CustomerManagedDatastoreS3Storage $customer_managed_s_3;
  public ?ServiceManagedDatastoreS3Storage $service_managed_s_3;

  public function __construct(shape(
    ?'customer_managed_s_3' => ?CustomerManagedDatastoreS3Storage,
    ?'service_managed_s_3' => ?ServiceManagedDatastoreS3Storage,
  ) $s = shape()) {
    $this->customer_managed_s_3 = $s['customer_managed_s_3'] ?? null;
    $this->service_managed_s_3 = $s['service_managed_s_3'] ?? null;
  }
}

class DatastoreStorageSummary {
  public ?CustomerManagedDatastoreS3StorageSummary $customer_managed_s_3;
  public ?ServiceManagedDatastoreS3StorageSummary $service_managed_s_3;

  public function __construct(shape(
    ?'customer_managed_s_3' => ?CustomerManagedDatastoreS3StorageSummary,
    ?'service_managed_s_3' => ?ServiceManagedDatastoreS3StorageSummary,
  ) $s = shape()) {
    $this->customer_managed_s_3 = $s['customer_managed_s_3'] ?? null;
    $this->service_managed_s_3 = $s['service_managed_s_3'] ?? null;
  }
}

type DatastoreSummaries = vec<DatastoreSummary>;

class DatastoreSummary {
  public ?Timestamp $creation_time;
  public ?DatastoreName $datastore_name;
  public ?DatastoreStorageSummary $datastore_storage;
  public ?Timestamp $last_update_time;
  public ?DatastoreStatus $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'datastore_name' => ?DatastoreName,
    ?'datastore_storage' => ?DatastoreStorageSummary,
    ?'last_update_time' => ?Timestamp,
    ?'status' => ?DatastoreStatus,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->datastore_name = $s['datastore_name'] ?? '';
    $this->datastore_storage = $s['datastore_storage'] ?? null;
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

class DeleteChannelRequest {
  public ?ChannelName $channel_name;

  public function __construct(shape(
    ?'channel_name' => ?ChannelName,
  ) $s = shape()) {
    $this->channel_name = $s['channel_name'] ?? '';
  }
}

class DeleteDatasetContentRequest {
  public ?DatasetName $dataset_name;
  public ?DatasetContentVersion $version_id;

  public function __construct(shape(
    ?'dataset_name' => ?DatasetName,
    ?'version_id' => ?DatasetContentVersion,
  ) $s = shape()) {
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->version_id = $s['version_id'] ?? '';
  }
}

class DeleteDatasetRequest {
  public ?DatasetName $dataset_name;

  public function __construct(shape(
    ?'dataset_name' => ?DatasetName,
  ) $s = shape()) {
    $this->dataset_name = $s['dataset_name'] ?? '';
  }
}

class DeleteDatastoreRequest {
  public ?DatastoreName $datastore_name;

  public function __construct(shape(
    ?'datastore_name' => ?DatastoreName,
  ) $s = shape()) {
    $this->datastore_name = $s['datastore_name'] ?? '';
  }
}

class DeletePipelineRequest {
  public ?PipelineName $pipeline_name;

  public function __construct(shape(
    ?'pipeline_name' => ?PipelineName,
  ) $s = shape()) {
    $this->pipeline_name = $s['pipeline_name'] ?? '';
  }
}

class DeltaTime {
  public ?OffsetSeconds $offset_seconds;
  public ?TimeExpression $time_expression;

  public function __construct(shape(
    ?'offset_seconds' => ?OffsetSeconds,
    ?'time_expression' => ?TimeExpression,
  ) $s = shape()) {
    $this->offset_seconds = $s['offset_seconds'] ?? 0;
    $this->time_expression = $s['time_expression'] ?? '';
  }
}

class DescribeChannelRequest {
  public ?ChannelName $channel_name;
  public ?IncludeStatisticsFlag $include_statistics;

  public function __construct(shape(
    ?'channel_name' => ?ChannelName,
    ?'include_statistics' => ?IncludeStatisticsFlag,
  ) $s = shape()) {
    $this->channel_name = $s['channel_name'] ?? '';
    $this->include_statistics = $s['include_statistics'] ?? false;
  }
}

class DescribeChannelResponse {
  public ?Channel $channel;
  public ?ChannelStatistics $statistics;

  public function __construct(shape(
    ?'channel' => ?Channel,
    ?'statistics' => ?ChannelStatistics,
  ) $s = shape()) {
    $this->channel = $s['channel'] ?? null;
    $this->statistics = $s['statistics'] ?? null;
  }
}

class DescribeDatasetRequest {
  public ?DatasetName $dataset_name;

  public function __construct(shape(
    ?'dataset_name' => ?DatasetName,
  ) $s = shape()) {
    $this->dataset_name = $s['dataset_name'] ?? '';
  }
}

class DescribeDatasetResponse {
  public ?Dataset $dataset;

  public function __construct(shape(
    ?'dataset' => ?Dataset,
  ) $s = shape()) {
    $this->dataset = $s['dataset'] ?? null;
  }
}

class DescribeDatastoreRequest {
  public ?DatastoreName $datastore_name;
  public ?IncludeStatisticsFlag $include_statistics;

  public function __construct(shape(
    ?'datastore_name' => ?DatastoreName,
    ?'include_statistics' => ?IncludeStatisticsFlag,
  ) $s = shape()) {
    $this->datastore_name = $s['datastore_name'] ?? '';
    $this->include_statistics = $s['include_statistics'] ?? false;
  }
}

class DescribeDatastoreResponse {
  public ?Datastore $datastore;
  public ?DatastoreStatistics $statistics;

  public function __construct(shape(
    ?'datastore' => ?Datastore,
    ?'statistics' => ?DatastoreStatistics,
  ) $s = shape()) {
    $this->datastore = $s['datastore'] ?? null;
    $this->statistics = $s['statistics'] ?? null;
  }
}

class DescribeLoggingOptionsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeLoggingOptionsResponse {
  public ?LoggingOptions $logging_options;

  public function __construct(shape(
    ?'logging_options' => ?LoggingOptions,
  ) $s = shape()) {
    $this->logging_options = $s['logging_options'] ?? null;
  }
}

class DescribePipelineRequest {
  public ?PipelineName $pipeline_name;

  public function __construct(shape(
    ?'pipeline_name' => ?PipelineName,
  ) $s = shape()) {
    $this->pipeline_name = $s['pipeline_name'] ?? '';
  }
}

class DescribePipelineResponse {
  public ?Pipeline $pipeline;

  public function __construct(shape(
    ?'pipeline' => ?Pipeline,
  ) $s = shape()) {
    $this->pipeline = $s['pipeline'] ?? null;
  }
}

class DeviceRegistryEnrichActivity {
  public ?AttributeName $attribute;
  public ?ActivityName $name;
  public ?ActivityName $next;
  public ?RoleArn $role_arn;
  public ?AttributeName $thing_name;

  public function __construct(shape(
    ?'attribute' => ?AttributeName,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
    ?'role_arn' => ?RoleArn,
    ?'thing_name' => ?AttributeName,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

class DeviceShadowEnrichActivity {
  public ?AttributeName $attribute;
  public ?ActivityName $name;
  public ?ActivityName $next;
  public ?RoleArn $role_arn;
  public ?AttributeName $thing_name;

  public function __construct(shape(
    ?'attribute' => ?AttributeName,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
    ?'role_arn' => ?RoleArn,
    ?'thing_name' => ?AttributeName,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

type DoubleValue = float;

type EndTime = int;

type EntryName = string;

type ErrorCode = string;

type ErrorMessage = string;

class EstimatedResourceSize {
  public ?Timestamp $estimated_on;
  public ?SizeInBytes $estimated_size_in_bytes;

  public function __construct(shape(
    ?'estimated_on' => ?Timestamp,
    ?'estimated_size_in_bytes' => ?SizeInBytes,
  ) $s = shape()) {
    $this->estimated_on = $s['estimated_on'] ?? 0;
    $this->estimated_size_in_bytes = $s['estimated_size_in_bytes'] ?? 0.0;
  }
}

class FilterActivity {
  public ?FilterExpression $filter;
  public ?ActivityName $name;
  public ?ActivityName $next;

  public function __construct(shape(
    ?'filter' => ?FilterExpression,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
  }
}

type FilterExpression = string;

class GetDatasetContentRequest {
  public ?DatasetName $dataset_name;
  public ?DatasetContentVersion $version_id;

  public function __construct(shape(
    ?'dataset_name' => ?DatasetName,
    ?'version_id' => ?DatasetContentVersion,
  ) $s = shape()) {
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->version_id = $s['version_id'] ?? '';
  }
}

class GetDatasetContentResponse {
  public ?DatasetEntries $entries;
  public ?DatasetContentStatus $status;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'entries' => ?DatasetEntries,
    ?'status' => ?DatasetContentStatus,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->entries = $s['entries'] ?? vec[];
    $this->status = $s['status'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

class GlueConfiguration {
  public ?GlueDatabaseName $database_name;
  public ?GlueTableName $table_name;

  public function __construct(shape(
    ?'database_name' => ?GlueDatabaseName,
    ?'table_name' => ?GlueTableName,
  ) $s = shape()) {
    $this->database_name = $s['database_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
  }
}

type GlueDatabaseName = string;

type GlueTableName = string;

type Image = string;

type IncludeStatisticsFlag = bool;

class InternalFailureException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class IotEventsDestinationConfiguration {
  public ?IotEventsInputName $input_name;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'input_name' => ?IotEventsInputName,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->input_name = $s['input_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type IotEventsInputName = string;

class LambdaActivity {
  public ?ActivityBatchSize $batch_size;
  public ?LambdaName $lambda_name;
  public ?ActivityName $name;
  public ?ActivityName $next;

  public function __construct(shape(
    ?'batch_size' => ?ActivityBatchSize,
    ?'lambda_name' => ?LambdaName,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
  ) $s = shape()) {
    $this->batch_size = $s['batch_size'] ?? 0;
    $this->lambda_name = $s['lambda_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
  }
}

type LambdaName = string;

class LimitExceededException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListChannelsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListChannelsResponse {
  public ?ChannelSummaries $channel_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'channel_summaries' => ?ChannelSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->channel_summaries = $s['channel_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetContentsRequest {
  public ?DatasetName $dataset_name;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?Timestamp $scheduled_before;
  public ?Timestamp $scheduled_on_or_after;

  public function __construct(shape(
    ?'dataset_name' => ?DatasetName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'scheduled_before' => ?Timestamp,
    ?'scheduled_on_or_after' => ?Timestamp,
  ) $s = shape()) {
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->scheduled_before = $s['scheduled_before'] ?? 0;
    $this->scheduled_on_or_after = $s['scheduled_on_or_after'] ?? 0;
  }
}

class ListDatasetContentsResponse {
  public ?DatasetContentSummaries $dataset_content_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dataset_content_summaries' => ?DatasetContentSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dataset_content_summaries = $s['dataset_content_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatasetsResponse {
  public ?DatasetSummaries $dataset_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dataset_summaries' => ?DatasetSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dataset_summaries = $s['dataset_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatastoresRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDatastoresResponse {
  public ?DatastoreSummaries $datastore_summaries;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'datastore_summaries' => ?DatastoreSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->datastore_summaries = $s['datastore_summaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPipelinesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPipelinesResponse {
  public ?NextToken $next_token;
  public ?PipelineSummaries $pipeline_summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'pipeline_summaries' => ?PipelineSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->pipeline_summaries = $s['pipeline_summaries'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LogResult = string;

type LoggingEnabled = bool;

type LoggingLevel = string;

class LoggingOptions {
  public ?LoggingEnabled $enabled;
  public ?LoggingLevel $level;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'enabled' => ?LoggingEnabled,
    ?'level' => ?LoggingLevel,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->level = $s['level'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class MathActivity {
  public ?AttributeName $attribute;
  public ?MathExpression $math;
  public ?ActivityName $name;
  public ?ActivityName $next;

  public function __construct(shape(
    ?'attribute' => ?AttributeName,
    ?'math' => ?MathExpression,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->math = $s['math'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
  }
}

type MathExpression = string;

type MaxMessages = int;

type MaxResults = int;

type MaxVersions = int;

class Message {
  public ?MessageId $message_id;
  public ?MessagePayload $payload;

  public function __construct(shape(
    ?'message_id' => ?MessageId,
    ?'payload' => ?MessagePayload,
  ) $s = shape()) {
    $this->message_id = $s['message_id'] ?? '';
    $this->payload = $s['payload'] ?? '';
  }
}

type MessageId = string;

type MessagePayload = string;

type MessagePayloads = vec<MessagePayload>;

type Messages = vec<Message>;

type NextToken = string;

type OffsetSeconds = int;

type OutputFileName = string;

class OutputFileUriValue {
  public ?OutputFileName $file_name;

  public function __construct(shape(
    ?'file_name' => ?OutputFileName,
  ) $s = shape()) {
    $this->file_name = $s['file_name'] ?? '';
  }
}

class Pipeline {
  public ?PipelineActivities $activities;
  public ?PipelineArn $arn;
  public ?Timestamp $creation_time;
  public ?Timestamp $last_update_time;
  public ?PipelineName $name;
  public ?ReprocessingSummaries $reprocessing_summaries;

  public function __construct(shape(
    ?'activities' => ?PipelineActivities,
    ?'arn' => ?PipelineArn,
    ?'creation_time' => ?Timestamp,
    ?'last_update_time' => ?Timestamp,
    ?'name' => ?PipelineName,
    ?'reprocessing_summaries' => ?ReprocessingSummaries,
  ) $s = shape()) {
    $this->activities = $s['activities'] ?? vec[];
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->reprocessing_summaries = $s['reprocessing_summaries'] ?? vec[];
  }
}

type PipelineActivities = vec<PipelineActivity>;

class PipelineActivity {
  public ?AddAttributesActivity $add_attributes;
  public ?ChannelActivity $channel;
  public ?DatastoreActivity $datastore;
  public ?DeviceRegistryEnrichActivity $device_registry_enrich;
  public ?DeviceShadowEnrichActivity $device_shadow_enrich;
  public ?FilterActivity $filter;
  public ?LambdaActivity $lambda;
  public ?MathActivity $math;
  public ?RemoveAttributesActivity $remove_attributes;
  public ?SelectAttributesActivity $select_attributes;

  public function __construct(shape(
    ?'add_attributes' => ?AddAttributesActivity,
    ?'channel' => ?ChannelActivity,
    ?'datastore' => ?DatastoreActivity,
    ?'device_registry_enrich' => ?DeviceRegistryEnrichActivity,
    ?'device_shadow_enrich' => ?DeviceShadowEnrichActivity,
    ?'filter' => ?FilterActivity,
    ?'lambda' => ?LambdaActivity,
    ?'math' => ?MathActivity,
    ?'remove_attributes' => ?RemoveAttributesActivity,
    ?'select_attributes' => ?SelectAttributesActivity,
  ) $s = shape()) {
    $this->add_attributes = $s['add_attributes'] ?? null;
    $this->channel = $s['channel'] ?? null;
    $this->datastore = $s['datastore'] ?? null;
    $this->device_registry_enrich = $s['device_registry_enrich'] ?? null;
    $this->device_shadow_enrich = $s['device_shadow_enrich'] ?? null;
    $this->filter = $s['filter'] ?? null;
    $this->lambda = $s['lambda'] ?? null;
    $this->math = $s['math'] ?? null;
    $this->remove_attributes = $s['remove_attributes'] ?? null;
    $this->select_attributes = $s['select_attributes'] ?? null;
  }
}

type PipelineArn = string;

type PipelineName = string;

type PipelineSummaries = vec<PipelineSummary>;

class PipelineSummary {
  public ?Timestamp $creation_time;
  public ?Timestamp $last_update_time;
  public ?PipelineName $pipeline_name;
  public ?ReprocessingSummaries $reprocessing_summaries;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'last_update_time' => ?Timestamp,
    ?'pipeline_name' => ?PipelineName,
    ?'reprocessing_summaries' => ?ReprocessingSummaries,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->last_update_time = $s['last_update_time'] ?? 0;
    $this->pipeline_name = $s['pipeline_name'] ?? '';
    $this->reprocessing_summaries = $s['reprocessing_summaries'] ?? vec[];
  }
}

type PresignedURI = string;

class PutLoggingOptionsRequest {
  public ?LoggingOptions $logging_options;

  public function __construct(shape(
    ?'logging_options' => ?LoggingOptions,
  ) $s = shape()) {
    $this->logging_options = $s['logging_options'] ?? null;
  }
}

class QueryFilter {
  public ?DeltaTime $delta_time;

  public function __construct(shape(
    ?'delta_time' => ?DeltaTime,
  ) $s = shape()) {
    $this->delta_time = $s['delta_time'] ?? null;
  }
}

type QueryFilters = vec<QueryFilter>;

type Reason = string;

class RemoveAttributesActivity {
  public ?AttributeNames $attributes;
  public ?ActivityName $name;
  public ?ActivityName $next;

  public function __construct(shape(
    ?'attributes' => ?AttributeNames,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
  }
}

type ReprocessingId = string;

type ReprocessingStatus = string;

type ReprocessingSummaries = vec<ReprocessingSummary>;

class ReprocessingSummary {
  public ?Timestamp $creation_time;
  public ?ReprocessingId $id;
  public ?ReprocessingStatus $status;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'id' => ?ReprocessingId,
    ?'status' => ?ReprocessingStatus,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ResourceAlreadyExistsException {
  public ?errorMessage $message;
  public ?resourceArn $resource_arn;
  public ?resourceId $resource_id;

  public function __construct(shape(
    ?'message' => ?errorMessage,
    ?'resource_arn' => ?resourceArn,
    ?'resource_id' => ?resourceId,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

type ResourceArn = string;

class ResourceConfiguration {
  public ?ComputeType $compute_type;
  public ?VolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
    ?'compute_type' => ?ComputeType,
    ?'volume_size_in_gb' => ?VolumeSizeInGB,
  ) $s = shape()) {
    $this->compute_type = $s['compute_type'] ?? '';
    $this->volume_size_in_gb = $s['volume_size_in_gb'] ?? 0;
  }
}

class ResourceNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RetentionPeriod {
  public ?RetentionPeriodInDays $number_of_days;
  public ?UnlimitedRetentionPeriod $unlimited;

  public function __construct(shape(
    ?'number_of_days' => ?RetentionPeriodInDays,
    ?'unlimited' => ?UnlimitedRetentionPeriod,
  ) $s = shape()) {
    $this->number_of_days = $s['number_of_days'] ?? 0;
    $this->unlimited = $s['unlimited'] ?? false;
  }
}

type RetentionPeriodInDays = int;

type RoleArn = string;

class RunPipelineActivityRequest {
  public ?MessagePayloads $payloads;
  public ?PipelineActivity $pipeline_activity;

  public function __construct(shape(
    ?'payloads' => ?MessagePayloads,
    ?'pipeline_activity' => ?PipelineActivity,
  ) $s = shape()) {
    $this->payloads = $s['payloads'] ?? vec[];
    $this->pipeline_activity = $s['pipeline_activity'] ?? null;
  }
}

class RunPipelineActivityResponse {
  public ?LogResult $log_result;
  public ?MessagePayloads $payloads;

  public function __construct(shape(
    ?'log_result' => ?LogResult,
    ?'payloads' => ?MessagePayloads,
  ) $s = shape()) {
    $this->log_result = $s['log_result'] ?? '';
    $this->payloads = $s['payloads'] ?? vec[];
  }
}

class S3DestinationConfiguration {
  public ?BucketName $bucket;
  public ?GlueConfiguration $glue_configuration;
  public ?BucketKeyExpression $key;
  public ?RoleArn $role_arn;

  public function __construct(shape(
    ?'bucket' => ?BucketName,
    ?'glue_configuration' => ?GlueConfiguration,
    ?'key' => ?BucketKeyExpression,
    ?'role_arn' => ?RoleArn,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->glue_configuration = $s['glue_configuration'] ?? null;
    $this->key = $s['key'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type S3KeyPrefix = string;

class SampleChannelDataRequest {
  public ?ChannelName $channel_name;
  public ?EndTime $end_time;
  public ?MaxMessages $max_messages;
  public ?StartTime $start_time;

  public function __construct(shape(
    ?'channel_name' => ?ChannelName,
    ?'end_time' => ?EndTime,
    ?'max_messages' => ?MaxMessages,
    ?'start_time' => ?StartTime,
  ) $s = shape()) {
    $this->channel_name = $s['channel_name'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->max_messages = $s['max_messages'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class SampleChannelDataResponse {
  public ?MessagePayloads $payloads;

  public function __construct(shape(
    ?'payloads' => ?MessagePayloads,
  ) $s = shape()) {
    $this->payloads = $s['payloads'] ?? vec[];
  }
}

class Schedule {
  public ?ScheduleExpression $expression;

  public function __construct(shape(
    ?'expression' => ?ScheduleExpression,
  ) $s = shape()) {
    $this->expression = $s['expression'] ?? '';
  }
}

type ScheduleExpression = string;

class SelectAttributesActivity {
  public ?AttributeNames $attributes;
  public ?ActivityName $name;
  public ?ActivityName $next;

  public function __construct(shape(
    ?'attributes' => ?AttributeNames,
    ?'name' => ?ActivityName,
    ?'next' => ?ActivityName,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->next = $s['next'] ?? '';
  }
}

class ServiceManagedChannelS3Storage {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ServiceManagedChannelS3StorageSummary {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ServiceManagedDatastoreS3Storage {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ServiceManagedDatastoreS3StorageSummary {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ServiceUnavailableException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SizeInBytes = float;

type SqlQuery = string;

class SqlQueryDatasetAction {
  public ?QueryFilters $filters;
  public ?SqlQuery $sql_query;

  public function __construct(shape(
    ?'filters' => ?QueryFilters,
    ?'sql_query' => ?SqlQuery,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->sql_query = $s['sql_query'] ?? '';
  }
}

class StartPipelineReprocessingRequest {
  public ?EndTime $end_time;
  public ?PipelineName $pipeline_name;
  public ?StartTime $start_time;

  public function __construct(shape(
    ?'end_time' => ?EndTime,
    ?'pipeline_name' => ?PipelineName,
    ?'start_time' => ?StartTime,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->pipeline_name = $s['pipeline_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class StartPipelineReprocessingResponse {
  public ?ReprocessingId $reprocessing_id;

  public function __construct(shape(
    ?'reprocessing_id' => ?ReprocessingId,
  ) $s = shape()) {
    $this->reprocessing_id = $s['reprocessing_id'] ?? '';
  }
}

type StartTime = int;

type StringValue = string;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class ThrottlingException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TimeExpression = string;

type Timestamp = int;

class TriggeringDataset {
  public ?DatasetName $name;

  public function __construct(shape(
    ?'name' => ?DatasetName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type UnlimitedRetentionPeriod = bool;

type UnlimitedVersioning = bool;

class UntagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateChannelRequest {
  public ?ChannelName $channel_name;
  public ?ChannelStorage $channel_storage;
  public ?RetentionPeriod $retention_period;

  public function __construct(shape(
    ?'channel_name' => ?ChannelName,
    ?'channel_storage' => ?ChannelStorage,
    ?'retention_period' => ?RetentionPeriod,
  ) $s = shape()) {
    $this->channel_name = $s['channel_name'] ?? '';
    $this->channel_storage = $s['channel_storage'] ?? null;
    $this->retention_period = $s['retention_period'] ?? null;
  }
}

class UpdateDatasetRequest {
  public ?DatasetActions $actions;
  public ?DatasetContentDeliveryRules $content_delivery_rules;
  public ?DatasetName $dataset_name;
  public ?RetentionPeriod $retention_period;
  public ?DatasetTriggers $triggers;
  public ?VersioningConfiguration $versioning_configuration;

  public function __construct(shape(
    ?'actions' => ?DatasetActions,
    ?'content_delivery_rules' => ?DatasetContentDeliveryRules,
    ?'dataset_name' => ?DatasetName,
    ?'retention_period' => ?RetentionPeriod,
    ?'triggers' => ?DatasetTriggers,
    ?'versioning_configuration' => ?VersioningConfiguration,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->content_delivery_rules = $s['content_delivery_rules'] ?? vec[];
    $this->dataset_name = $s['dataset_name'] ?? '';
    $this->retention_period = $s['retention_period'] ?? null;
    $this->triggers = $s['triggers'] ?? vec[];
    $this->versioning_configuration = $s['versioning_configuration'] ?? null;
  }
}

class UpdateDatastoreRequest {
  public ?DatastoreName $datastore_name;
  public ?DatastoreStorage $datastore_storage;
  public ?RetentionPeriod $retention_period;

  public function __construct(shape(
    ?'datastore_name' => ?DatastoreName,
    ?'datastore_storage' => ?DatastoreStorage,
    ?'retention_period' => ?RetentionPeriod,
  ) $s = shape()) {
    $this->datastore_name = $s['datastore_name'] ?? '';
    $this->datastore_storage = $s['datastore_storage'] ?? null;
    $this->retention_period = $s['retention_period'] ?? null;
  }
}

class UpdatePipelineRequest {
  public ?PipelineActivities $pipeline_activities;
  public ?PipelineName $pipeline_name;

  public function __construct(shape(
    ?'pipeline_activities' => ?PipelineActivities,
    ?'pipeline_name' => ?PipelineName,
  ) $s = shape()) {
    $this->pipeline_activities = $s['pipeline_activities'] ?? vec[];
    $this->pipeline_name = $s['pipeline_name'] ?? '';
  }
}

class Variable {
  public ?DatasetContentVersionValue $dataset_content_version_value;
  public ?DoubleValue $double_value;
  public ?VariableName $name;
  public ?OutputFileUriValue $output_file_uri_value;
  public ?StringValue $string_value;

  public function __construct(shape(
    ?'dataset_content_version_value' => ?DatasetContentVersionValue,
    ?'double_value' => ?DoubleValue,
    ?'name' => ?VariableName,
    ?'output_file_uri_value' => ?OutputFileUriValue,
    ?'string_value' => ?StringValue,
  ) $s = shape()) {
    $this->dataset_content_version_value = $s['dataset_content_version_value'] ?? null;
    $this->double_value = $s['double_value'] ?? 0.0;
    $this->name = $s['name'] ?? '';
    $this->output_file_uri_value = $s['output_file_uri_value'] ?? null;
    $this->string_value = $s['string_value'] ?? '';
  }
}

type VariableName = string;

type Variables = vec<Variable>;

class VersioningConfiguration {
  public ?MaxVersions $max_versions;
  public ?UnlimitedVersioning $unlimited;

  public function __construct(shape(
    ?'max_versions' => ?MaxVersions,
    ?'unlimited' => ?UnlimitedVersioning,
  ) $s = shape()) {
    $this->max_versions = $s['max_versions'] ?? 0;
    $this->unlimited = $s['unlimited'] ?? false;
  }
}

type VolumeSizeInGB = int;

type errorMessage = string;

type resourceArn = string;

type resourceId = string;

