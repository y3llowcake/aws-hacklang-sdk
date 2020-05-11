<?hh // strict
namespace slack\aws\cognito-sync;

interface  {
  public function BulkPublish(BulkPublishRequest): Awaitable<Errors\Result<BulkPublishResponse>>;
  public function DeleteDataset(DeleteDatasetRequest): Awaitable<Errors\Result<DeleteDatasetResponse>>;
  public function DescribeDataset(DescribeDatasetRequest): Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribeIdentityPoolUsage(DescribeIdentityPoolUsageRequest): Awaitable<Errors\Result<DescribeIdentityPoolUsageResponse>>;
  public function DescribeIdentityUsage(DescribeIdentityUsageRequest): Awaitable<Errors\Result<DescribeIdentityUsageResponse>>;
  public function GetBulkPublishDetails(GetBulkPublishDetailsRequest): Awaitable<Errors\Result<GetBulkPublishDetailsResponse>>;
  public function GetCognitoEvents(GetCognitoEventsRequest): Awaitable<Errors\Result<GetCognitoEventsResponse>>;
  public function GetIdentityPoolConfiguration(GetIdentityPoolConfigurationRequest): Awaitable<Errors\Result<GetIdentityPoolConfigurationResponse>>;
  public function ListDatasets(ListDatasetsRequest): Awaitable<Errors\Result<ListDatasetsResponse>>;
  public function ListIdentityPoolUsage(ListIdentityPoolUsageRequest): Awaitable<Errors\Result<ListIdentityPoolUsageResponse>>;
  public function ListRecords(ListRecordsRequest): Awaitable<Errors\Result<ListRecordsResponse>>;
  public function RegisterDevice(RegisterDeviceRequest): Awaitable<Errors\Result<RegisterDeviceResponse>>;
  public function SetCognitoEvents(SetCognitoEventsRequest): Awaitable<Errors\Error>;
  public function SetIdentityPoolConfiguration(SetIdentityPoolConfigurationRequest): Awaitable<Errors\Result<SetIdentityPoolConfigurationResponse>>;
  public function SubscribeToDataset(SubscribeToDatasetRequest): Awaitable<Errors\Result<SubscribeToDatasetResponse>>;
  public function UnsubscribeFromDataset(UnsubscribeFromDatasetRequest): Awaitable<Errors\Result<UnsubscribeFromDatasetResponse>>;
  public function UpdateRecords(UpdateRecordsRequest): Awaitable<Errors\Result<UpdateRecordsResponse>>;
}

class AlreadyStreamedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ApplicationArn = string;

type ApplicationArnList = vec<ApplicationArn>;

type AssumeRoleArn = string;

type Boolean = bool;

class BulkPublishRequest {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class BulkPublishResponse {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

type BulkPublishStatus = string;

type ClientContext = string;

type CognitoEventType = string;

class CognitoStreams {
  public AssumeRoleArn $role_arn;
  public StreamName $stream_name;
  public StreamingStatus $streaming_status;

  public function __construct(shape(
  ?'role_arn' => AssumeRoleArn,
  ?'stream_name' => StreamName,
  ?'streaming_status' => StreamingStatus,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? "";
    $this->stream_name = $stream_name ?? "";
    $this->streaming_status = $streaming_status ?? "";
  }
}

class ConcurrentModificationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Dataset {
  public Date $creation_date;
  public Long $data_storage;
  public DatasetName $dataset_name;
  public IdentityId $identity_id;
  public string $last_modified_by;
  public Date $last_modified_date;
  public Long $num_records;

  public function __construct(shape(
  ?'creation_date' => Date,
  ?'data_storage' => Long,
  ?'dataset_name' => DatasetName,
  ?'identity_id' => IdentityId,
  ?'last_modified_by' => string,
  ?'last_modified_date' => Date,
  ?'num_records' => Long,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? 0;
    $this->data_storage = $data_storage ?? 0;
    $this->dataset_name = $dataset_name ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->last_modified_by = $last_modified_by ?? "";
    $this->last_modified_date = $last_modified_date ?? 0;
    $this->num_records = $num_records ?? 0;
  }
}

type DatasetList = vec<Dataset>;

type DatasetName = string;

type Date = int;

class DeleteDatasetRequest {
  public DatasetName $dataset_name;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class DeleteDatasetResponse {
  public Dataset $dataset;

  public function __construct(shape(
  ?'dataset' => Dataset,
  ) $s = shape()) {
    $this->dataset = $dataset ?? null;
  }
}

class DescribeDatasetRequest {
  public DatasetName $dataset_name;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class DescribeDatasetResponse {
  public Dataset $dataset;

  public function __construct(shape(
  ?'dataset' => Dataset,
  ) $s = shape()) {
    $this->dataset = $dataset ?? null;
  }
}

class DescribeIdentityPoolUsageRequest {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class DescribeIdentityPoolUsageResponse {
  public IdentityPoolUsage $identity_pool_usage;

  public function __construct(shape(
  ?'identity_pool_usage' => IdentityPoolUsage,
  ) $s = shape()) {
    $this->identity_pool_usage = $identity_pool_usage ?? null;
  }
}

class DescribeIdentityUsageRequest {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class DescribeIdentityUsageResponse {
  public IdentityUsage $identity_usage;

  public function __construct(shape(
  ?'identity_usage' => IdentityUsage,
  ) $s = shape()) {
    $this->identity_usage = $identity_usage ?? null;
  }
}

type DeviceId = string;

class DuplicateRequestException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Events = dict<CognitoEventType, LambdaFunctionArn>;

type ExceptionMessage = string;

class GetBulkPublishDetailsRequest {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class GetBulkPublishDetailsResponse {
  public Date $bulk_publish_complete_time;
  public Date $bulk_publish_start_time;
  public BulkPublishStatus $bulk_publish_status;
  public string $failure_message;
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'bulk_publish_complete_time' => Date,
  ?'bulk_publish_start_time' => Date,
  ?'bulk_publish_status' => BulkPublishStatus,
  ?'failure_message' => string,
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->bulk_publish_complete_time = $bulk_publish_complete_time ?? 0;
    $this->bulk_publish_start_time = $bulk_publish_start_time ?? 0;
    $this->bulk_publish_status = $bulk_publish_status ?? "";
    $this->failure_message = $failure_message ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class GetCognitoEventsRequest {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class GetCognitoEventsResponse {
  public Events $events;

  public function __construct(shape(
  ?'events' => Events,
  ) $s = shape()) {
    $this->events = $events ?? [];
  }
}

class GetIdentityPoolConfigurationRequest {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class GetIdentityPoolConfigurationResponse {
  public CognitoStreams $cognito_streams;
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;

  public function __construct(shape(
  ?'cognito_streams' => CognitoStreams,
  ?'identity_pool_id' => IdentityPoolId,
  ?'push_sync' => PushSync,
  ) $s = shape()) {
    $this->cognito_streams = $cognito_streams ?? null;
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->push_sync = $push_sync ?? null;
  }
}

type IdentityId = string;

type IdentityPoolId = string;

class IdentityPoolUsage {
  public Long $data_storage;
  public IdentityPoolId $identity_pool_id;
  public Date $last_modified_date;
  public Long $sync_sessions_count;

  public function __construct(shape(
  ?'data_storage' => Long,
  ?'identity_pool_id' => IdentityPoolId,
  ?'last_modified_date' => Date,
  ?'sync_sessions_count' => Long,
  ) $s = shape()) {
    $this->data_storage = $data_storage ?? 0;
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->last_modified_date = $last_modified_date ?? 0;
    $this->sync_sessions_count = $sync_sessions_count ?? 0;
  }
}

type IdentityPoolUsageList = vec<IdentityPoolUsage>;

class IdentityUsage {
  public Long $data_storage;
  public int $dataset_count;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public Date $last_modified_date;

  public function __construct(shape(
  ?'data_storage' => Long,
  ?'dataset_count' => int,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ?'last_modified_date' => Date,
  ) $s = shape()) {
    $this->data_storage = $data_storage ?? 0;
    $this->dataset_count = $dataset_count ?? 0;
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->last_modified_date = $last_modified_date ?? 0;
  }
}

type Integer = int;

type IntegerString = int;

class InternalErrorException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidConfigurationException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidLambdaFunctionOutputException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LambdaFunctionArn = string;

class LambdaThrottledException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LimitExceededException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListDatasetsRequest {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public IntegerString $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ?'max_results' => IntegerString,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDatasetsResponse {
  public int $count;
  public DatasetList $datasets;
  public string $next_token;

  public function __construct(shape(
  ?'count' => int,
  ?'datasets' => DatasetList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->datasets = $datasets ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListIdentityPoolUsageRequest {
  public IntegerString $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => IntegerString,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListIdentityPoolUsageResponse {
  public int $count;
  public IdentityPoolUsageList $identity_pool_usages;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'count' => int,
  ?'identity_pool_usages' => IdentityPoolUsageList,
  ?'max_results' => int,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->identity_pool_usages = $identity_pool_usages ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListRecordsRequest {
  public DatasetName $dataset_name;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public Long $last_sync_count;
  public IntegerString $max_results;
  public string $next_token;
  public SyncSessionToken $sync_session_token;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ?'last_sync_count' => Long,
  ?'max_results' => IntegerString,
  ?'next_token' => string,
  ?'sync_session_token' => SyncSessionToken,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->last_sync_count = $last_sync_count ?? 0;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sync_session_token = $sync_session_token ?? "";
  }
}

class ListRecordsResponse {
  public int $count;
  public boolean $dataset_deleted_after_requested_sync_count;
  public boolean $dataset_exists;
  public Long $dataset_sync_count;
  public string $last_modified_by;
  public MergedDatasetNameList $merged_dataset_names;
  public string $next_token;
  public RecordList $records;
  public string $sync_session_token;

  public function __construct(shape(
  ?'count' => int,
  ?'dataset_deleted_after_requested_sync_count' => boolean,
  ?'dataset_exists' => boolean,
  ?'dataset_sync_count' => Long,
  ?'last_modified_by' => string,
  ?'merged_dataset_names' => MergedDatasetNameList,
  ?'next_token' => string,
  ?'records' => RecordList,
  ?'sync_session_token' => string,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->dataset_deleted_after_requested_sync_count = $dataset_deleted_after_requested_sync_count ?? false;
    $this->dataset_exists = $dataset_exists ?? false;
    $this->dataset_sync_count = $dataset_sync_count ?? 0;
    $this->last_modified_by = $last_modified_by ?? "";
    $this->merged_dataset_names = $merged_dataset_names ?? [];
    $this->next_token = $next_token ?? "";
    $this->records = $records ?? [];
    $this->sync_session_token = $sync_session_token ?? "";
  }
}

type Long = int;

type MergedDatasetNameList = vec<String>;

class NotAuthorizedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Operation = string;

type Platform = string;

class PushSync {
  public ApplicationArnList $application_arns;
  public AssumeRoleArn $role_arn;

  public function __construct(shape(
  ?'application_arns' => ApplicationArnList,
  ?'role_arn' => AssumeRoleArn,
  ) $s = shape()) {
    $this->application_arns = $application_arns ?? [];
    $this->role_arn = $role_arn ?? "";
  }
}

type PushToken = string;

class Record {
  public Date $device_last_modified_date;
  public RecordKey $key;
  public string $last_modified_by;
  public Date $last_modified_date;
  public Long $sync_count;
  public RecordValue $value;

  public function __construct(shape(
  ?'device_last_modified_date' => Date,
  ?'key' => RecordKey,
  ?'last_modified_by' => string,
  ?'last_modified_date' => Date,
  ?'sync_count' => Long,
  ?'value' => RecordValue,
  ) $s = shape()) {
    $this->device_last_modified_date = $device_last_modified_date ?? 0;
    $this->key = $key ?? "";
    $this->last_modified_by = $last_modified_by ?? "";
    $this->last_modified_date = $last_modified_date ?? 0;
    $this->sync_count = $sync_count ?? 0;
    $this->value = $value ?? "";
  }
}

type RecordKey = string;

type RecordList = vec<Record>;

class RecordPatch {
  public Date $device_last_modified_date;
  public RecordKey $key;
  public Operation $op;
  public Long $sync_count;
  public RecordValue $value;

  public function __construct(shape(
  ?'device_last_modified_date' => Date,
  ?'key' => RecordKey,
  ?'op' => Operation,
  ?'sync_count' => Long,
  ?'value' => RecordValue,
  ) $s = shape()) {
    $this->device_last_modified_date = $device_last_modified_date ?? 0;
    $this->key = $key ?? "";
    $this->op = $op ?? "";
    $this->sync_count = $sync_count ?? 0;
    $this->value = $value ?? "";
  }
}

type RecordPatchList = vec<RecordPatch>;

type RecordValue = string;

class RegisterDeviceRequest {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public Platform $platform;
  public PushToken $token;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ?'platform' => Platform,
  ?'token' => PushToken,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->platform = $platform ?? "";
    $this->token = $token ?? "";
  }
}

class RegisterDeviceResponse {
  public DeviceId $device_id;

  public function __construct(shape(
  ?'device_id' => DeviceId,
  ) $s = shape()) {
    $this->device_id = $device_id ?? "";
  }
}

class ResourceConflictException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class SetCognitoEventsRequest {
  public Events $events;
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'events' => Events,
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class SetIdentityPoolConfigurationRequest {
  public CognitoStreams $cognito_streams;
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;

  public function __construct(shape(
  ?'cognito_streams' => CognitoStreams,
  ?'identity_pool_id' => IdentityPoolId,
  ?'push_sync' => PushSync,
  ) $s = shape()) {
    $this->cognito_streams = $cognito_streams ?? null;
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->push_sync = $push_sync ?? null;
  }
}

class SetIdentityPoolConfigurationResponse {
  public CognitoStreams $cognito_streams;
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;

  public function __construct(shape(
  ?'cognito_streams' => CognitoStreams,
  ?'identity_pool_id' => IdentityPoolId,
  ?'push_sync' => PushSync,
  ) $s = shape()) {
    $this->cognito_streams = $cognito_streams ?? null;
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->push_sync = $push_sync ?? null;
  }
}

type StreamName = string;

type StreamingStatus = string;

type String = string;

class SubscribeToDatasetRequest {
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ?'device_id' => DeviceId,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? "";
    $this->device_id = $device_id ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class SubscribeToDatasetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SyncSessionToken = string;

class TooManyRequestsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnsubscribeFromDatasetRequest {
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'dataset_name' => DatasetName,
  ?'device_id' => DeviceId,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->dataset_name = $dataset_name ?? "";
    $this->device_id = $device_id ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class UnsubscribeFromDatasetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateRecordsRequest {
  public ClientContext $client_context;
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public RecordPatchList $record_patches;
  public SyncSessionToken $sync_session_token;

  public function __construct(shape(
  ?'client_context' => ClientContext,
  ?'dataset_name' => DatasetName,
  ?'device_id' => DeviceId,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ?'record_patches' => RecordPatchList,
  ?'sync_session_token' => SyncSessionToken,
  ) $s = shape()) {
    $this->client_context = $client_context ?? "";
    $this->dataset_name = $dataset_name ?? "";
    $this->device_id = $device_id ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->record_patches = $record_patches ?? [];
    $this->sync_session_token = $sync_session_token ?? "";
  }
}

class UpdateRecordsResponse {
  public RecordList $records;

  public function __construct(shape(
  ?'records' => RecordList,
  ) $s = shape()) {
    $this->records = $records ?? [];
  }
}

