<?hh // strict
namespace slack\aws\iotanalytics;

interface IoTAnalytics {
  public function BatchPutMessage(BatchPutMessageRequest): Awaitable<Errors\Result<BatchPutMessageResponse>>;
  public function CancelPipelineReprocessing(CancelPipelineReprocessingRequest): Awaitable<Errors\Result<CancelPipelineReprocessingResponse>>;
  public function CreateChannel(CreateChannelRequest): Awaitable<Errors\Result<CreateChannelResponse>>;
  public function CreateDataset(CreateDatasetRequest): Awaitable<Errors\Result<CreateDatasetResponse>>;
  public function CreateDatasetContent(CreateDatasetContentRequest): Awaitable<Errors\Result<CreateDatasetContentResponse>>;
  public function CreateDatastore(CreateDatastoreRequest): Awaitable<Errors\Result<CreateDatastoreResponse>>;
  public function CreatePipeline(CreatePipelineRequest): Awaitable<Errors\Result<CreatePipelineResponse>>;
  public function DeleteChannel(DeleteChannelRequest): Awaitable<Errors\Error>;
  public function DeleteDataset(DeleteDatasetRequest): Awaitable<Errors\Error>;
  public function DeleteDatasetContent(DeleteDatasetContentRequest): Awaitable<Errors\Error>;
  public function DeleteDatastore(DeleteDatastoreRequest): Awaitable<Errors\Error>;
  public function DeletePipeline(DeletePipelineRequest): Awaitable<Errors\Error>;
  public function DescribeChannel(DescribeChannelRequest): Awaitable<Errors\Result<DescribeChannelResponse>>;
  public function DescribeDataset(DescribeDatasetRequest): Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribeDatastore(DescribeDatastoreRequest): Awaitable<Errors\Result<DescribeDatastoreResponse>>;
  public function DescribeLoggingOptions(DescribeLoggingOptionsRequest): Awaitable<Errors\Result<DescribeLoggingOptionsResponse>>;
  public function DescribePipeline(DescribePipelineRequest): Awaitable<Errors\Result<DescribePipelineResponse>>;
  public function GetDatasetContent(GetDatasetContentRequest): Awaitable<Errors\Result<GetDatasetContentResponse>>;
  public function ListChannels(ListChannelsRequest): Awaitable<Errors\Result<ListChannelsResponse>>;
  public function ListDatasetContents(ListDatasetContentsRequest): Awaitable<Errors\Result<ListDatasetContentsResponse>>;
  public function ListDatasets(ListDatasetsRequest): Awaitable<Errors\Result<ListDatasetsResponse>>;
  public function ListDatastores(ListDatastoresRequest): Awaitable<Errors\Result<ListDatastoresResponse>>;
  public function ListPipelines(ListPipelinesRequest): Awaitable<Errors\Result<ListPipelinesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutLoggingOptions(PutLoggingOptionsRequest): Awaitable<Errors\Error>;
  public function RunPipelineActivity(RunPipelineActivityRequest): Awaitable<Errors\Result<RunPipelineActivityResponse>>;
  public function SampleChannelData(SampleChannelDataRequest): Awaitable<Errors\Result<SampleChannelDataResponse>>;
  public function StartPipelineReprocessing(StartPipelineReprocessingRequest): Awaitable<Errors\Result<StartPipelineReprocessingResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateChannel(UpdateChannelRequest): Awaitable<Errors\Error>;
  public function UpdateDataset(UpdateDatasetRequest): Awaitable<Errors\Error>;
  public function UpdateDatastore(UpdateDatastoreRequest): Awaitable<Errors\Error>;
  public function UpdatePipeline(UpdatePipelineRequest): Awaitable<Errors\Error>;
}

type ActivityBatchSize = int;

type ActivityName = string;

class AddAttributesActivity {
  public AttributeNameMapping $attributes;
  public ActivityName $name;
  public ActivityName $next;

  public function __construct(shape(
  ?'attributes' => AttributeNameMapping,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
  }
}

type AttributeName = string;

type AttributeNameMapping = dict<AttributeName, AttributeName>;

type AttributeNames = vec<AttributeName>;

type BatchPutMessageErrorEntries = vec<BatchPutMessageErrorEntry>;

class BatchPutMessageErrorEntry {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public MessageId $message_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'message_id' => MessageId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->error_message = $error_message ?? "";
    $this->message_id = $message_id ?? ;
  }
}

class BatchPutMessageRequest {
  public ChannelName $channel_name;
  public Messages $messages;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'messages' => Messages,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? ;
    $this->messages = $messages ?? ;
  }
}

class BatchPutMessageResponse {
  public BatchPutMessageErrorEntries $batch_put_message_error_entries;

  public function __construct(shape(
  ?'batch_put_message_error_entries' => BatchPutMessageErrorEntries,
  ) $s = shape()) {
    $this->batch_put_message_error_entries = $batch_put_message_error_entries ?? ;
  }
}

type BucketKeyExpression = string;

type BucketName = string;

class CancelPipelineReprocessingRequest {
  public PipelineName $pipeline_name;
  public ReprocessingId $reprocessing_id;

  public function __construct(shape(
  ?'pipeline_name' => PipelineName,
  ?'reprocessing_id' => ReprocessingId,
  ) $s = shape()) {
    $this->pipeline_name = $pipeline_name ?? ;
    $this->reprocessing_id = $reprocessing_id ?? ;
  }
}

class CancelPipelineReprocessingResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Channel {
  public ChannelArn $arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public ChannelName $name;
  public RetentionPeriod $retention_period;
  public ChannelStatus $status;
  public ChannelStorage $storage;

  public function __construct(shape(
  ?'arn' => ChannelArn,
  ?'creation_time' => Timestamp,
  ?'last_update_time' => Timestamp,
  ?'name' => ChannelName,
  ?'retention_period' => RetentionPeriod,
  ?'status' => ChannelStatus,
  ?'storage' => ChannelStorage,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->name = $name ?? ;
    $this->retention_period = $retention_period ?? ;
    $this->status = $status ?? ;
    $this->storage = $storage ?? ;
  }
}

class ChannelActivity {
  public ChannelName $channel_name;
  public ActivityName $name;
  public ActivityName $next;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
  }
}

type ChannelArn = string;

type ChannelName = string;

class ChannelStatistics {
  public EstimatedResourceSize $size;

  public function __construct(shape(
  ?'size' => EstimatedResourceSize,
  ) $s = shape()) {
    $this->size = $size ?? ;
  }
}

type ChannelStatus = string;

class ChannelStorage {
  public CustomerManagedChannelS3Storage $customer_managed_s_3;
  public ServiceManagedChannelS3Storage $service_managed_s_3;

  public function __construct(shape(
  ?'customer_managed_s_3' => CustomerManagedChannelS3Storage,
  ?'service_managed_s_3' => ServiceManagedChannelS3Storage,
  ) $s = shape()) {
    $this->customer_managed_s_3 = $customer_managed_s_3 ?? ;
    $this->service_managed_s_3 = $service_managed_s_3 ?? ;
  }
}

class ChannelStorageSummary {
  public CustomerManagedChannelS3StorageSummary $customer_managed_s_3;
  public ServiceManagedChannelS3StorageSummary $service_managed_s_3;

  public function __construct(shape(
  ?'customer_managed_s_3' => CustomerManagedChannelS3StorageSummary,
  ?'service_managed_s_3' => ServiceManagedChannelS3StorageSummary,
  ) $s = shape()) {
    $this->customer_managed_s_3 = $customer_managed_s_3 ?? ;
    $this->service_managed_s_3 = $service_managed_s_3 ?? ;
  }
}

type ChannelSummaries = vec<ChannelSummary>;

class ChannelSummary {
  public ChannelName $channel_name;
  public ChannelStorageSummary $channel_storage;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public ChannelStatus $status;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'channel_storage' => ChannelStorageSummary,
  ?'creation_time' => Timestamp,
  ?'last_update_time' => Timestamp,
  ?'status' => ChannelStatus,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? ;
    $this->channel_storage = $channel_storage ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->status = $status ?? ;
  }
}

type ComputeType = string;

class ContainerDatasetAction {
  public RoleArn $execution_role_arn;
  public Image $image;
  public ResourceConfiguration $resource_configuration;
  public Variables $variables;

  public function __construct(shape(
  ?'execution_role_arn' => RoleArn,
  ?'image' => Image,
  ?'resource_configuration' => ResourceConfiguration,
  ?'variables' => Variables,
  ) $s = shape()) {
    $this->execution_role_arn = $execution_role_arn ?? ;
    $this->image = $image ?? ;
    $this->resource_configuration = $resource_configuration ?? ;
    $this->variables = $variables ?? ;
  }
}

class CreateChannelRequest {
  public ChannelName $channel_name;
  public ChannelStorage $channel_storage;
  public RetentionPeriod $retention_period;
  public TagList $tags;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'channel_storage' => ChannelStorage,
  ?'retention_period' => RetentionPeriod,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? ;
    $this->channel_storage = $channel_storage ?? ;
    $this->retention_period = $retention_period ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateChannelResponse {
  public ChannelArn $channel_arn;
  public ChannelName $channel_name;
  public RetentionPeriod $retention_period;

  public function __construct(shape(
  ?'channel_arn' => ChannelArn,
  ?'channel_name' => ChannelName,
  ?'retention_period' => RetentionPeriod,
  ) $s = shape()) {
    $this->channel_arn = $channel_arn ?? ;
    $this->channel_name = $channel_name ?? ;
    $this->retention_period = $retention_period ?? ;
  }
}

class CreateDatasetContentRequest {
  public DatasetName $dataset_name;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? ;
  }
}

class CreateDatasetContentResponse {
  public DatasetContentVersion $version_id;

  public function __construct(shape(
  ?'version_id' => DatasetContentVersion,
  ) $s = shape()) {
    $this->version_id = $version_id ?? ;
  }
}

class CreateDatasetRequest {
  public DatasetActions $actions;
  public DatasetContentDeliveryRules $content_delivery_rules;
  public DatasetName $dataset_name;
  public RetentionPeriod $retention_period;
  public TagList $tags;
  public DatasetTriggers $triggers;
  public VersioningConfiguration $versioning_configuration;

  public function __construct(shape(
  ?'actions' => DatasetActions,
  ?'content_delivery_rules' => DatasetContentDeliveryRules,
  ?'dataset_name' => DatasetName,
  ?'retention_period' => RetentionPeriod,
  ?'tags' => TagList,
  ?'triggers' => DatasetTriggers,
  ?'versioning_configuration' => VersioningConfiguration,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->content_delivery_rules = $content_delivery_rules ?? ;
    $this->dataset_name = $dataset_name ?? ;
    $this->retention_period = $retention_period ?? ;
    $this->tags = $tags ?? ;
    $this->triggers = $triggers ?? ;
    $this->versioning_configuration = $versioning_configuration ?? ;
  }
}

class CreateDatasetResponse {
  public DatasetArn $dataset_arn;
  public DatasetName $dataset_name;
  public RetentionPeriod $retention_period;

  public function __construct(shape(
  ?'dataset_arn' => DatasetArn,
  ?'dataset_name' => DatasetName,
  ?'retention_period' => RetentionPeriod,
  ) $s = shape()) {
    $this->dataset_arn = $dataset_arn ?? ;
    $this->dataset_name = $dataset_name ?? ;
    $this->retention_period = $retention_period ?? ;
  }
}

class CreateDatastoreRequest {
  public DatastoreName $datastore_name;
  public DatastoreStorage $datastore_storage;
  public RetentionPeriod $retention_period;
  public TagList $tags;

  public function __construct(shape(
  ?'datastore_name' => DatastoreName,
  ?'datastore_storage' => DatastoreStorage,
  ?'retention_period' => RetentionPeriod,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->datastore_name = $datastore_name ?? ;
    $this->datastore_storage = $datastore_storage ?? ;
    $this->retention_period = $retention_period ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateDatastoreResponse {
  public DatastoreArn $datastore_arn;
  public DatastoreName $datastore_name;
  public RetentionPeriod $retention_period;

  public function __construct(shape(
  ?'datastore_arn' => DatastoreArn,
  ?'datastore_name' => DatastoreName,
  ?'retention_period' => RetentionPeriod,
  ) $s = shape()) {
    $this->datastore_arn = $datastore_arn ?? ;
    $this->datastore_name = $datastore_name ?? ;
    $this->retention_period = $retention_period ?? ;
  }
}

class CreatePipelineRequest {
  public PipelineActivities $pipeline_activities;
  public PipelineName $pipeline_name;
  public TagList $tags;

  public function __construct(shape(
  ?'pipeline_activities' => PipelineActivities,
  ?'pipeline_name' => PipelineName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->pipeline_activities = $pipeline_activities ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreatePipelineResponse {
  public PipelineArn $pipeline_arn;
  public PipelineName $pipeline_name;

  public function __construct(shape(
  ?'pipeline_arn' => PipelineArn,
  ?'pipeline_name' => PipelineName,
  ) $s = shape()) {
    $this->pipeline_arn = $pipeline_arn ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
  }
}

class CustomerManagedChannelS3Storage {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key_prefix' => S3KeyPrefix,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->key_prefix = $key_prefix ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class CustomerManagedChannelS3StorageSummary {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key_prefix' => S3KeyPrefix,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->key_prefix = $key_prefix ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class CustomerManagedDatastoreS3Storage {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key_prefix' => S3KeyPrefix,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->key_prefix = $key_prefix ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class CustomerManagedDatastoreS3StorageSummary {
  public BucketName $bucket;
  public S3KeyPrefix $key_prefix;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'key_prefix' => S3KeyPrefix,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->key_prefix = $key_prefix ?? ;
    $this->role_arn = $role_arn ?? ;
  }
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

  public function __construct(shape(
  ?'actions' => DatasetActions,
  ?'arn' => DatasetArn,
  ?'content_delivery_rules' => DatasetContentDeliveryRules,
  ?'creation_time' => Timestamp,
  ?'last_update_time' => Timestamp,
  ?'name' => DatasetName,
  ?'retention_period' => RetentionPeriod,
  ?'status' => DatasetStatus,
  ?'triggers' => DatasetTriggers,
  ?'versioning_configuration' => VersioningConfiguration,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->arn = $arn ?? ;
    $this->content_delivery_rules = $content_delivery_rules ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->name = $name ?? ;
    $this->retention_period = $retention_period ?? ;
    $this->status = $status ?? ;
    $this->triggers = $triggers ?? ;
    $this->versioning_configuration = $versioning_configuration ?? ;
  }
}

class DatasetAction {
  public DatasetActionName $action_name;
  public ContainerDatasetAction $container_action;
  public SqlQueryDatasetAction $query_action;

  public function __construct(shape(
  ?'action_name' => DatasetActionName,
  ?'container_action' => ContainerDatasetAction,
  ?'query_action' => SqlQueryDatasetAction,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->container_action = $container_action ?? ;
    $this->query_action = $query_action ?? ;
  }
}

type DatasetActionName = string;

type DatasetActionSummaries = vec<DatasetActionSummary>;

class DatasetActionSummary {
  public DatasetActionName $action_name;
  public DatasetActionType $action_type;

  public function __construct(shape(
  ?'action_name' => DatasetActionName,
  ?'action_type' => DatasetActionType,
  ) $s = shape()) {
    $this->action_name = $action_name ?? ;
    $this->action_type = $action_type ?? ;
  }
}

type DatasetActionType = string;

type DatasetActions = vec<DatasetAction>;

type DatasetArn = string;

class DatasetContentDeliveryDestination {
  public IotEventsDestinationConfiguration $iot_events_destination_configuration;
  public S3DestinationConfiguration $s_3_destination_configuration;

  public function __construct(shape(
  ?'iot_events_destination_configuration' => IotEventsDestinationConfiguration,
  ?'s_3_destination_configuration' => S3DestinationConfiguration,
  ) $s = shape()) {
    $this->iot_events_destination_configuration = $iot_events_destination_configuration ?? ;
    $this->s_3_destination_configuration = $s_3_destination_configuration ?? ;
  }
}

class DatasetContentDeliveryRule {
  public DatasetContentDeliveryDestination $destination;
  public EntryName $entry_name;

  public function __construct(shape(
  ?'destination' => DatasetContentDeliveryDestination,
  ?'entry_name' => EntryName,
  ) $s = shape()) {
    $this->destination = $destination ?? ;
    $this->entry_name = $entry_name ?? ;
  }
}

type DatasetContentDeliveryRules = vec<DatasetContentDeliveryRule>;

type DatasetContentState = string;

class DatasetContentStatus {
  public Reason $reason;
  public DatasetContentState $state;

  public function __construct(shape(
  ?'reason' => Reason,
  ?'state' => DatasetContentState,
  ) $s = shape()) {
    $this->reason = $reason ?? ;
    $this->state = $state ?? ;
  }
}

type DatasetContentSummaries = vec<DatasetContentSummary>;

class DatasetContentSummary {
  public Timestamp $completion_time;
  public Timestamp $creation_time;
  public Timestamp $schedule_time;
  public DatasetContentStatus $status;
  public DatasetContentVersion $version;

  public function __construct(shape(
  ?'completion_time' => Timestamp,
  ?'creation_time' => Timestamp,
  ?'schedule_time' => Timestamp,
  ?'status' => DatasetContentStatus,
  ?'version' => DatasetContentVersion,
  ) $s = shape()) {
    $this->completion_time = $completion_time ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->schedule_time = $schedule_time ?? ;
    $this->status = $status ?? ;
    $this->version = $version ?? ;
  }
}

type DatasetContentVersion = string;

class DatasetContentVersionValue {
  public DatasetName $dataset_name;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? ;
  }
}

type DatasetEntries = vec<DatasetEntry>;

class DatasetEntry {
  public PresignedURI $data_uri;
  public EntryName $entry_name;

  public function __construct(shape(
  ?'data_uri' => PresignedURI,
  ?'entry_name' => EntryName,
  ) $s = shape()) {
    $this->data_uri = $data_uri ?? ;
    $this->entry_name = $entry_name ?? ;
  }
}

type DatasetName = string;

type DatasetStatus = string;

type DatasetSummaries = vec<DatasetSummary>;

class DatasetSummary {
  public DatasetActionSummaries $actions;
  public Timestamp $creation_time;
  public DatasetName $dataset_name;
  public Timestamp $last_update_time;
  public DatasetStatus $status;
  public DatasetTriggers $triggers;

  public function __construct(shape(
  ?'actions' => DatasetActionSummaries,
  ?'creation_time' => Timestamp,
  ?'dataset_name' => DatasetName,
  ?'last_update_time' => Timestamp,
  ?'status' => DatasetStatus,
  ?'triggers' => DatasetTriggers,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->dataset_name = $dataset_name ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->status = $status ?? ;
    $this->triggers = $triggers ?? ;
  }
}

class DatasetTrigger {
  public TriggeringDataset $dataset;
  public Schedule $schedule;

  public function __construct(shape(
  ?'dataset' => TriggeringDataset,
  ?'schedule' => Schedule,
  ) $s = shape()) {
    $this->dataset = $dataset ?? ;
    $this->schedule = $schedule ?? ;
  }
}

type DatasetTriggers = vec<DatasetTrigger>;

class Datastore {
  public DatastoreArn $arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public DatastoreName $name;
  public RetentionPeriod $retention_period;
  public DatastoreStatus $status;
  public DatastoreStorage $storage;

  public function __construct(shape(
  ?'arn' => DatastoreArn,
  ?'creation_time' => Timestamp,
  ?'last_update_time' => Timestamp,
  ?'name' => DatastoreName,
  ?'retention_period' => RetentionPeriod,
  ?'status' => DatastoreStatus,
  ?'storage' => DatastoreStorage,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->name = $name ?? ;
    $this->retention_period = $retention_period ?? ;
    $this->status = $status ?? ;
    $this->storage = $storage ?? ;
  }
}

class DatastoreActivity {
  public DatastoreName $datastore_name;
  public ActivityName $name;

  public function __construct(shape(
  ?'datastore_name' => DatastoreName,
  ?'name' => ActivityName,
  ) $s = shape()) {
    $this->datastore_name = $datastore_name ?? ;
    $this->name = $name ?? ;
  }
}

type DatastoreArn = string;

type DatastoreName = string;

class DatastoreStatistics {
  public EstimatedResourceSize $size;

  public function __construct(shape(
  ?'size' => EstimatedResourceSize,
  ) $s = shape()) {
    $this->size = $size ?? ;
  }
}

type DatastoreStatus = string;

class DatastoreStorage {
  public CustomerManagedDatastoreS3Storage $customer_managed_s_3;
  public ServiceManagedDatastoreS3Storage $service_managed_s_3;

  public function __construct(shape(
  ?'customer_managed_s_3' => CustomerManagedDatastoreS3Storage,
  ?'service_managed_s_3' => ServiceManagedDatastoreS3Storage,
  ) $s = shape()) {
    $this->customer_managed_s_3 = $customer_managed_s_3 ?? ;
    $this->service_managed_s_3 = $service_managed_s_3 ?? ;
  }
}

class DatastoreStorageSummary {
  public CustomerManagedDatastoreS3StorageSummary $customer_managed_s_3;
  public ServiceManagedDatastoreS3StorageSummary $service_managed_s_3;

  public function __construct(shape(
  ?'customer_managed_s_3' => CustomerManagedDatastoreS3StorageSummary,
  ?'service_managed_s_3' => ServiceManagedDatastoreS3StorageSummary,
  ) $s = shape()) {
    $this->customer_managed_s_3 = $customer_managed_s_3 ?? ;
    $this->service_managed_s_3 = $service_managed_s_3 ?? ;
  }
}

type DatastoreSummaries = vec<DatastoreSummary>;

class DatastoreSummary {
  public Timestamp $creation_time;
  public DatastoreName $datastore_name;
  public DatastoreStorageSummary $datastore_storage;
  public Timestamp $last_update_time;
  public DatastoreStatus $status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'datastore_name' => DatastoreName,
  ?'datastore_storage' => DatastoreStorageSummary,
  ?'last_update_time' => Timestamp,
  ?'status' => DatastoreStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->datastore_name = $datastore_name ?? ;
    $this->datastore_storage = $datastore_storage ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->status = $status ?? ;
  }
}

class DeleteChannelRequest {
  public ChannelName $channel_name;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? ;
  }
}

class DeleteDatasetContentRequest {
  public DatasetName $dataset_name;
  public DatasetContentVersion $version_id;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ?'version_id' => DatasetContentVersion,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? ;
    $this->version_id = $version_id ?? ;
  }
}

class DeleteDatasetRequest {
  public DatasetName $dataset_name;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? ;
  }
}

class DeleteDatastoreRequest {
  public DatastoreName $datastore_name;

  public function __construct(shape(
  ?'datastore_name' => DatastoreName,
  ) $s = shape()) {
    $this->datastore_name = $datastore_name ?? ;
  }
}

class DeletePipelineRequest {
  public PipelineName $pipeline_name;

  public function __construct(shape(
  ?'pipeline_name' => PipelineName,
  ) $s = shape()) {
    $this->pipeline_name = $pipeline_name ?? ;
  }
}

class DeltaTime {
  public OffsetSeconds $offset_seconds;
  public TimeExpression $time_expression;

  public function __construct(shape(
  ?'offset_seconds' => OffsetSeconds,
  ?'time_expression' => TimeExpression,
  ) $s = shape()) {
    $this->offset_seconds = $offset_seconds ?? ;
    $this->time_expression = $time_expression ?? ;
  }
}

class DescribeChannelRequest {
  public ChannelName $channel_name;
  public IncludeStatisticsFlag $include_statistics;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'include_statistics' => IncludeStatisticsFlag,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? ;
    $this->include_statistics = $include_statistics ?? ;
  }
}

class DescribeChannelResponse {
  public Channel $channel;
  public ChannelStatistics $statistics;

  public function __construct(shape(
  ?'channel' => Channel,
  ?'statistics' => ChannelStatistics,
  ) $s = shape()) {
    $this->channel = $channel ?? ;
    $this->statistics = $statistics ?? ;
  }
}

class DescribeDatasetRequest {
  public DatasetName $dataset_name;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? ;
  }
}

class DescribeDatasetResponse {
  public Dataset $dataset;

  public function __construct(shape(
  ?'dataset' => Dataset,
  ) $s = shape()) {
    $this->dataset = $dataset ?? ;
  }
}

class DescribeDatastoreRequest {
  public DatastoreName $datastore_name;
  public IncludeStatisticsFlag $include_statistics;

  public function __construct(shape(
  ?'datastore_name' => DatastoreName,
  ?'include_statistics' => IncludeStatisticsFlag,
  ) $s = shape()) {
    $this->datastore_name = $datastore_name ?? ;
    $this->include_statistics = $include_statistics ?? ;
  }
}

class DescribeDatastoreResponse {
  public Datastore $datastore;
  public DatastoreStatistics $statistics;

  public function __construct(shape(
  ?'datastore' => Datastore,
  ?'statistics' => DatastoreStatistics,
  ) $s = shape()) {
    $this->datastore = $datastore ?? ;
    $this->statistics = $statistics ?? ;
  }
}

class DescribeLoggingOptionsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeLoggingOptionsResponse {
  public LoggingOptions $logging_options;

  public function __construct(shape(
  ?'logging_options' => LoggingOptions,
  ) $s = shape()) {
    $this->logging_options = $logging_options ?? ;
  }
}

class DescribePipelineRequest {
  public PipelineName $pipeline_name;

  public function __construct(shape(
  ?'pipeline_name' => PipelineName,
  ) $s = shape()) {
    $this->pipeline_name = $pipeline_name ?? ;
  }
}

class DescribePipelineResponse {
  public Pipeline $pipeline;

  public function __construct(shape(
  ?'pipeline' => Pipeline,
  ) $s = shape()) {
    $this->pipeline = $pipeline ?? ;
  }
}

class DeviceRegistryEnrichActivity {
  public AttributeName $attribute;
  public ActivityName $name;
  public ActivityName $next;
  public RoleArn $role_arn;
  public AttributeName $thing_name;

  public function __construct(shape(
  ?'attribute' => AttributeName,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ?'role_arn' => RoleArn,
  ?'thing_name' => AttributeName,
  ) $s = shape()) {
    $this->attribute = $attribute ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

class DeviceShadowEnrichActivity {
  public AttributeName $attribute;
  public ActivityName $name;
  public ActivityName $next;
  public RoleArn $role_arn;
  public AttributeName $thing_name;

  public function __construct(shape(
  ?'attribute' => AttributeName,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ?'role_arn' => RoleArn,
  ?'thing_name' => AttributeName,
  ) $s = shape()) {
    $this->attribute = $attribute ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->thing_name = $thing_name ?? ;
  }
}

type DoubleValue = float;

type EndTime = int;

type EntryName = string;

type ErrorCode = string;

type ErrorMessage = string;

class EstimatedResourceSize {
  public Timestamp $estimated_on;
  public SizeInBytes $estimated_size_in_bytes;

  public function __construct(shape(
  ?'estimated_on' => Timestamp,
  ?'estimated_size_in_bytes' => SizeInBytes,
  ) $s = shape()) {
    $this->estimated_on = $estimated_on ?? ;
    $this->estimated_size_in_bytes = $estimated_size_in_bytes ?? ;
  }
}

class FilterActivity {
  public FilterExpression $filter;
  public ActivityName $name;
  public ActivityName $next;

  public function __construct(shape(
  ?'filter' => FilterExpression,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ) $s = shape()) {
    $this->filter = $filter ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
  }
}

type FilterExpression = string;

class GetDatasetContentRequest {
  public DatasetName $dataset_name;
  public DatasetContentVersion $version_id;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ?'version_id' => DatasetContentVersion,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? ;
    $this->version_id = $version_id ?? ;
  }
}

class GetDatasetContentResponse {
  public DatasetEntries $entries;
  public DatasetContentStatus $status;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'entries' => DatasetEntries,
  ?'status' => DatasetContentStatus,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->entries = $entries ?? ;
    $this->status = $status ?? ;
    $this->timestamp = $timestamp ?? ;
  }
}

class GlueConfiguration {
  public GlueDatabaseName $database_name;
  public GlueTableName $table_name;

  public function __construct(shape(
  ?'database_name' => GlueDatabaseName,
  ?'table_name' => GlueTableName,
  ) $s = shape()) {
    $this->database_name = $database_name ?? ;
    $this->table_name = $table_name ?? ;
  }
}

type GlueDatabaseName = string;

type GlueTableName = string;

type Image = string;

type IncludeStatisticsFlag = bool;

class InternalFailureException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class IotEventsDestinationConfiguration {
  public IotEventsInputName $input_name;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'input_name' => IotEventsInputName,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->input_name = $input_name ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type IotEventsInputName = string;

class LambdaActivity {
  public ActivityBatchSize $batch_size;
  public LambdaName $lambda_name;
  public ActivityName $name;
  public ActivityName $next;

  public function __construct(shape(
  ?'batch_size' => ActivityBatchSize,
  ?'lambda_name' => LambdaName,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ) $s = shape()) {
    $this->batch_size = $batch_size ?? ;
    $this->lambda_name = $lambda_name ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
  }
}

type LambdaName = string;

class LimitExceededException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListChannelsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListChannelsResponse {
  public ChannelSummaries $channel_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'channel_summaries' => ChannelSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->channel_summaries = $channel_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetContentsRequest {
  public DatasetName $dataset_name;
  public MaxResults $max_results;
  public NextToken $next_token;
  public Timestamp $scheduled_before;
  public Timestamp $scheduled_on_or_after;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'scheduled_before' => Timestamp,
  ?'scheduled_on_or_after' => Timestamp,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->scheduled_before = $scheduled_before ?? ;
    $this->scheduled_on_or_after = $scheduled_on_or_after ?? ;
  }
}

class ListDatasetContentsResponse {
  public DatasetContentSummaries $dataset_content_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dataset_content_summaries' => DatasetContentSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dataset_content_summaries = $dataset_content_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatasetsResponse {
  public DatasetSummaries $dataset_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'dataset_summaries' => DatasetSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->dataset_summaries = $dataset_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatastoresRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDatastoresResponse {
  public DatastoreSummaries $datastore_summaries;
  public NextToken $next_token;

  public function __construct(shape(
  ?'datastore_summaries' => DatastoreSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->datastore_summaries = $datastore_summaries ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListPipelinesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListPipelinesResponse {
  public NextToken $next_token;
  public PipelineSummaries $pipeline_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'pipeline_summaries' => PipelineSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->pipeline_summaries = $pipeline_summaries ?? ;
  }
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

type LogResult = string;

type LoggingEnabled = bool;

type LoggingLevel = string;

class LoggingOptions {
  public LoggingEnabled $enabled;
  public LoggingLevel $level;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'enabled' => LoggingEnabled,
  ?'level' => LoggingLevel,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->level = $level ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

class MathActivity {
  public AttributeName $attribute;
  public MathExpression $math;
  public ActivityName $name;
  public ActivityName $next;

  public function __construct(shape(
  ?'attribute' => AttributeName,
  ?'math' => MathExpression,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ) $s = shape()) {
    $this->attribute = $attribute ?? ;
    $this->math = $math ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
  }
}

type MathExpression = string;

type MaxMessages = int;

type MaxResults = int;

type MaxVersions = int;

class Message {
  public MessageId $message_id;
  public MessagePayload $payload;

  public function __construct(shape(
  ?'message_id' => MessageId,
  ?'payload' => MessagePayload,
  ) $s = shape()) {
    $this->message_id = $message_id ?? ;
    $this->payload = $payload ?? ;
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
  public OutputFileName $file_name;

  public function __construct(shape(
  ?'file_name' => OutputFileName,
  ) $s = shape()) {
    $this->file_name = $file_name ?? ;
  }
}

class Pipeline {
  public PipelineActivities $activities;
  public PipelineArn $arn;
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public PipelineName $name;
  public ReprocessingSummaries $reprocessing_summaries;

  public function __construct(shape(
  ?'activities' => PipelineActivities,
  ?'arn' => PipelineArn,
  ?'creation_time' => Timestamp,
  ?'last_update_time' => Timestamp,
  ?'name' => PipelineName,
  ?'reprocessing_summaries' => ReprocessingSummaries,
  ) $s = shape()) {
    $this->activities = $activities ?? ;
    $this->arn = $arn ?? ;
    $this->creation_time = $creation_time ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->name = $name ?? ;
    $this->reprocessing_summaries = $reprocessing_summaries ?? ;
  }
}

type PipelineActivities = vec<PipelineActivity>;

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

  public function __construct(shape(
  ?'add_attributes' => AddAttributesActivity,
  ?'channel' => ChannelActivity,
  ?'datastore' => DatastoreActivity,
  ?'device_registry_enrich' => DeviceRegistryEnrichActivity,
  ?'device_shadow_enrich' => DeviceShadowEnrichActivity,
  ?'filter' => FilterActivity,
  ?'lambda' => LambdaActivity,
  ?'math' => MathActivity,
  ?'remove_attributes' => RemoveAttributesActivity,
  ?'select_attributes' => SelectAttributesActivity,
  ) $s = shape()) {
    $this->add_attributes = $add_attributes ?? ;
    $this->channel = $channel ?? ;
    $this->datastore = $datastore ?? ;
    $this->device_registry_enrich = $device_registry_enrich ?? ;
    $this->device_shadow_enrich = $device_shadow_enrich ?? ;
    $this->filter = $filter ?? ;
    $this->lambda = $lambda ?? ;
    $this->math = $math ?? ;
    $this->remove_attributes = $remove_attributes ?? ;
    $this->select_attributes = $select_attributes ?? ;
  }
}

type PipelineArn = string;

type PipelineName = string;

type PipelineSummaries = vec<PipelineSummary>;

class PipelineSummary {
  public Timestamp $creation_time;
  public Timestamp $last_update_time;
  public PipelineName $pipeline_name;
  public ReprocessingSummaries $reprocessing_summaries;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'last_update_time' => Timestamp,
  ?'pipeline_name' => PipelineName,
  ?'reprocessing_summaries' => ReprocessingSummaries,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->last_update_time = $last_update_time ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->reprocessing_summaries = $reprocessing_summaries ?? ;
  }
}

type PresignedURI = string;

class PutLoggingOptionsRequest {
  public LoggingOptions $logging_options;

  public function __construct(shape(
  ?'logging_options' => LoggingOptions,
  ) $s = shape()) {
    $this->logging_options = $logging_options ?? ;
  }
}

class QueryFilter {
  public DeltaTime $delta_time;

  public function __construct(shape(
  ?'delta_time' => DeltaTime,
  ) $s = shape()) {
    $this->delta_time = $delta_time ?? ;
  }
}

type QueryFilters = vec<QueryFilter>;

type Reason = string;

class RemoveAttributesActivity {
  public AttributeNames $attributes;
  public ActivityName $name;
  public ActivityName $next;

  public function __construct(shape(
  ?'attributes' => AttributeNames,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
  }
}

type ReprocessingId = string;

type ReprocessingStatus = string;

type ReprocessingSummaries = vec<ReprocessingSummary>;

class ReprocessingSummary {
  public Timestamp $creation_time;
  public ReprocessingId $id;
  public ReprocessingStatus $status;

  public function __construct(shape(
  ?'creation_time' => Timestamp,
  ?'id' => ReprocessingId,
  ?'status' => ReprocessingStatus,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? ;
    $this->id = $id ?? ;
    $this->status = $status ?? ;
  }
}

class ResourceAlreadyExistsException {
  public errorMessage $message;
  public resourceArn $resource_arn;
  public resourceId $resource_id;

  public function __construct(shape(
  ?'message' => errorMessage,
  ?'resource_arn' => resourceArn,
  ?'resource_id' => resourceId,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

type ResourceArn = string;

class ResourceConfiguration {
  public ComputeType $compute_type;
  public VolumeSizeInGB $volume_size_in_gb;

  public function __construct(shape(
  ?'compute_type' => ComputeType,
  ?'volume_size_in_gb' => VolumeSizeInGB,
  ) $s = shape()) {
    $this->compute_type = $compute_type ?? ;
    $this->volume_size_in_gb = $volume_size_in_gb ?? ;
  }
}

class ResourceNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class RetentionPeriod {
  public RetentionPeriodInDays $number_of_days;
  public UnlimitedRetentionPeriod $unlimited;

  public function __construct(shape(
  ?'number_of_days' => RetentionPeriodInDays,
  ?'unlimited' => UnlimitedRetentionPeriod,
  ) $s = shape()) {
    $this->number_of_days = $number_of_days ?? ;
    $this->unlimited = $unlimited ?? ;
  }
}

type RetentionPeriodInDays = int;

type RoleArn = string;

class RunPipelineActivityRequest {
  public MessagePayloads $payloads;
  public PipelineActivity $pipeline_activity;

  public function __construct(shape(
  ?'payloads' => MessagePayloads,
  ?'pipeline_activity' => PipelineActivity,
  ) $s = shape()) {
    $this->payloads = $payloads ?? ;
    $this->pipeline_activity = $pipeline_activity ?? ;
  }
}

class RunPipelineActivityResponse {
  public LogResult $log_result;
  public MessagePayloads $payloads;

  public function __construct(shape(
  ?'log_result' => LogResult,
  ?'payloads' => MessagePayloads,
  ) $s = shape()) {
    $this->log_result = $log_result ?? ;
    $this->payloads = $payloads ?? ;
  }
}

class S3DestinationConfiguration {
  public BucketName $bucket;
  public GlueConfiguration $glue_configuration;
  public BucketKeyExpression $key;
  public RoleArn $role_arn;

  public function __construct(shape(
  ?'bucket' => BucketName,
  ?'glue_configuration' => GlueConfiguration,
  ?'key' => BucketKeyExpression,
  ?'role_arn' => RoleArn,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->glue_configuration = $glue_configuration ?? ;
    $this->key = $key ?? ;
    $this->role_arn = $role_arn ?? ;
  }
}

type S3KeyPrefix = string;

class SampleChannelDataRequest {
  public ChannelName $channel_name;
  public EndTime $end_time;
  public MaxMessages $max_messages;
  public StartTime $start_time;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'end_time' => EndTime,
  ?'max_messages' => MaxMessages,
  ?'start_time' => StartTime,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? ;
    $this->end_time = $end_time ?? ;
    $this->max_messages = $max_messages ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class SampleChannelDataResponse {
  public MessagePayloads $payloads;

  public function __construct(shape(
  ?'payloads' => MessagePayloads,
  ) $s = shape()) {
    $this->payloads = $payloads ?? ;
  }
}

class Schedule {
  public ScheduleExpression $expression;

  public function __construct(shape(
  ?'expression' => ScheduleExpression,
  ) $s = shape()) {
    $this->expression = $expression ?? ;
  }
}

type ScheduleExpression = string;

class SelectAttributesActivity {
  public AttributeNames $attributes;
  public ActivityName $name;
  public ActivityName $next;

  public function __construct(shape(
  ?'attributes' => AttributeNames,
  ?'name' => ActivityName,
  ?'next' => ActivityName,
  ) $s = shape()) {
    $this->attributes = $attributes ?? ;
    $this->name = $name ?? ;
    $this->next = $next ?? ;
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
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type SizeInBytes = float;

type SqlQuery = string;

class SqlQueryDatasetAction {
  public QueryFilters $filters;
  public SqlQuery $sql_query;

  public function __construct(shape(
  ?'filters' => QueryFilters,
  ?'sql_query' => SqlQuery,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->sql_query = $sql_query ?? ;
  }
}

class StartPipelineReprocessingRequest {
  public EndTime $end_time;
  public PipelineName $pipeline_name;
  public StartTime $start_time;

  public function __construct(shape(
  ?'end_time' => EndTime,
  ?'pipeline_name' => PipelineName,
  ?'start_time' => StartTime,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class StartPipelineReprocessingResponse {
  public ReprocessingId $reprocessing_id;

  public function __construct(shape(
  ?'reprocessing_id' => ReprocessingId,
  ) $s = shape()) {
    $this->reprocessing_id = $reprocessing_id ?? ;
  }
}

type StartTime = int;

type StringValue = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class ThrottlingException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type TimeExpression = string;

type Timestamp = int;

class TriggeringDataset {
  public DatasetName $name;

  public function __construct(shape(
  ?'name' => DatasetName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type UnlimitedRetentionPeriod = bool;

type UnlimitedVersioning = bool;

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateChannelRequest {
  public ChannelName $channel_name;
  public ChannelStorage $channel_storage;
  public RetentionPeriod $retention_period;

  public function __construct(shape(
  ?'channel_name' => ChannelName,
  ?'channel_storage' => ChannelStorage,
  ?'retention_period' => RetentionPeriod,
  ) $s = shape()) {
    $this->channel_name = $channel_name ?? ;
    $this->channel_storage = $channel_storage ?? ;
    $this->retention_period = $retention_period ?? ;
  }
}

class UpdateDatasetRequest {
  public DatasetActions $actions;
  public DatasetContentDeliveryRules $content_delivery_rules;
  public DatasetName $dataset_name;
  public RetentionPeriod $retention_period;
  public DatasetTriggers $triggers;
  public VersioningConfiguration $versioning_configuration;

  public function __construct(shape(
  ?'actions' => DatasetActions,
  ?'content_delivery_rules' => DatasetContentDeliveryRules,
  ?'dataset_name' => DatasetName,
  ?'retention_period' => RetentionPeriod,
  ?'triggers' => DatasetTriggers,
  ?'versioning_configuration' => VersioningConfiguration,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->content_delivery_rules = $content_delivery_rules ?? ;
    $this->dataset_name = $dataset_name ?? ;
    $this->retention_period = $retention_period ?? ;
    $this->triggers = $triggers ?? ;
    $this->versioning_configuration = $versioning_configuration ?? ;
  }
}

class UpdateDatastoreRequest {
  public DatastoreName $datastore_name;
  public DatastoreStorage $datastore_storage;
  public RetentionPeriod $retention_period;

  public function __construct(shape(
  ?'datastore_name' => DatastoreName,
  ?'datastore_storage' => DatastoreStorage,
  ?'retention_period' => RetentionPeriod,
  ) $s = shape()) {
    $this->datastore_name = $datastore_name ?? ;
    $this->datastore_storage = $datastore_storage ?? ;
    $this->retention_period = $retention_period ?? ;
  }
}

class UpdatePipelineRequest {
  public PipelineActivities $pipeline_activities;
  public PipelineName $pipeline_name;

  public function __construct(shape(
  ?'pipeline_activities' => PipelineActivities,
  ?'pipeline_name' => PipelineName,
  ) $s = shape()) {
    $this->pipeline_activities = $pipeline_activities ?? ;
    $this->pipeline_name = $pipeline_name ?? ;
  }
}

class Variable {
  public DatasetContentVersionValue $dataset_content_version_value;
  public DoubleValue $double_value;
  public VariableName $name;
  public OutputFileUriValue $output_file_uri_value;
  public StringValue $string_value;

  public function __construct(shape(
  ?'dataset_content_version_value' => DatasetContentVersionValue,
  ?'double_value' => DoubleValue,
  ?'name' => VariableName,
  ?'output_file_uri_value' => OutputFileUriValue,
  ?'string_value' => StringValue,
  ) $s = shape()) {
    $this->dataset_content_version_value = $dataset_content_version_value ?? ;
    $this->double_value = $double_value ?? ;
    $this->name = $name ?? ;
    $this->output_file_uri_value = $output_file_uri_value ?? ;
    $this->string_value = $string_value ?? ;
  }
}

type VariableName = string;

type Variables = vec<Variable>;

class VersioningConfiguration {
  public MaxVersions $max_versions;
  public UnlimitedVersioning $unlimited;

  public function __construct(shape(
  ?'max_versions' => MaxVersions,
  ?'unlimited' => UnlimitedVersioning,
  ) $s = shape()) {
    $this->max_versions = $max_versions ?? ;
    $this->unlimited = $unlimited ?? ;
  }
}

type VolumeSizeInGB = int;

type errorMessage = string;

type resourceArn = string;

type resourceId = string;

