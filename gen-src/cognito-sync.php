<?hh // strict
namespace slack\aws\cognito-sync;

interface  {
  public function GetCognitoEvents(GetCognitoEventsRequest) Awaitable<Errors\Result<GetCognitoEventsResponse>>;
  public function GetIdentityPoolConfiguration(GetIdentityPoolConfigurationRequest) Awaitable<Errors\Result<GetIdentityPoolConfigurationResponse>>;
  public function ListDatasets(ListDatasetsRequest) Awaitable<Errors\Result<ListDatasetsResponse>>;
  public function SetCognitoEvents(SetCognitoEventsRequest) Awaitable<Errors\Error>;
  public function SubscribeToDataset(SubscribeToDatasetRequest) Awaitable<Errors\Result<SubscribeToDatasetResponse>>;
  public function BulkPublish(BulkPublishRequest) Awaitable<Errors\Result<BulkPublishResponse>>;
  public function DescribeDataset(DescribeDatasetRequest) Awaitable<Errors\Result<DescribeDatasetResponse>>;
  public function DescribeIdentityUsage(DescribeIdentityUsageRequest) Awaitable<Errors\Result<DescribeIdentityUsageResponse>>;
  public function ListRecords(ListRecordsRequest) Awaitable<Errors\Result<ListRecordsResponse>>;
  public function DescribeIdentityPoolUsage(DescribeIdentityPoolUsageRequest) Awaitable<Errors\Result<DescribeIdentityPoolUsageResponse>>;
  public function ListIdentityPoolUsage(ListIdentityPoolUsageRequest) Awaitable<Errors\Result<ListIdentityPoolUsageResponse>>;
  public function DeleteDataset(DeleteDatasetRequest) Awaitable<Errors\Result<DeleteDatasetResponse>>;
  public function GetBulkPublishDetails(GetBulkPublishDetailsRequest) Awaitable<Errors\Result<GetBulkPublishDetailsResponse>>;
  public function RegisterDevice(RegisterDeviceRequest) Awaitable<Errors\Result<RegisterDeviceResponse>>;
  public function SetIdentityPoolConfiguration(SetIdentityPoolConfigurationRequest) Awaitable<Errors\Result<SetIdentityPoolConfigurationResponse>>;
  public function UnsubscribeFromDataset(UnsubscribeFromDatasetRequest) Awaitable<Errors\Result<UnsubscribeFromDatasetResponse>>;
  public function UpdateRecords(UpdateRecordsRequest) Awaitable<Errors\Result<UpdateRecordsResponse>>;
}

class BulkPublishRequest {
  public IdentityPoolId $identity_pool_id;
}

class BulkPublishResponse {
  public IdentityPoolId $identity_pool_id;
}

class GetBulkPublishDetailsRequest {
  public IdentityPoolId $identity_pool_id;
}

class IdentityPoolId {
}

class SetCognitoEventsRequest {
  public IdentityPoolId $identity_pool_id;
  public Events $events;
}

class DatasetName {
}

class DeviceId {
}

class ExceptionMessage {
}

class InternalErrorException {
  public ExceptionMessage $message;
}

class InvalidParameterException {
  public ExceptionMessage $message;
}

class ListRecordsResponse {
  public RecordList $records;
  public string $next_token;
  public Long $dataset_sync_count;
  public MergedDatasetNameList $merged_dataset_names;
  public boolean $dataset_exists;
  public int $count;
  public string $last_modified_by;
  public boolean $dataset_deleted_after_requested_sync_count;
  public string $sync_session_token;
}

class MergedDatasetNameList {
}

class TooManyRequestsException {
  public ExceptionMessage $message;
}

class UpdateRecordsRequest {
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public RecordPatchList $record_patches;
  public SyncSessionToken $sync_session_token;
  public ClientContext $client_context;
}

class BulkPublishStatus {
}

class DescribeDatasetRequest {
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
  public DatasetName $dataset_name;
}

class IdentityPoolUsageList {
}

class LimitExceededException {
  public ExceptionMessage $message;
}

class ListDatasetsResponse {
  public DatasetList $datasets;
  public int $count;
  public string $next_token;
}

class Operation {
}

class RecordList {
}

class ApplicationArn {
}

class DatasetList {
}

class IdentityUsage {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public Date $last_modified_date;
  public int $dataset_count;
  public Long $data_storage;
}

class InvalidLambdaFunctionOutputException {
  public ExceptionMessage $message;
}

class NotAuthorizedException {
  public ExceptionMessage $message;
}

class SubscribeToDatasetResponse {
}

class LambdaFunctionArn {
}

class Platform {
}

class RecordKey {
}

class SetIdentityPoolConfigurationResponse {
  public CognitoStreams $cognito_streams;
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;
}

class String {
}

class UnsubscribeFromDatasetResponse {
}

class Boolean {
}

class CognitoEventType {
}

class RecordValue {
}

class RegisterDeviceRequest {
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
  public Platform $platform;
  public PushToken $token;
}

class UpdateRecordsResponse {
  public RecordList $records;
}

class StreamingStatus {
}

class ConcurrentModificationException {
  public string $message;
}

class DeleteDatasetRequest {
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
  public DatasetName $dataset_name;
}

class GetCognitoEventsRequest {
  public IdentityPoolId $identity_pool_id;
}

class GetCognitoEventsResponse {
  public Events $events;
}

class IntegerString {
}

class ListRecordsRequest {
  public IntegerString $max_results;
  public SyncSessionToken $sync_session_token;
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
  public DatasetName $dataset_name;
  public Long $last_sync_count;
  public string $next_token;
}

class Long {
}

class ClientContext {
}

class SyncSessionToken {
}

class DescribeDatasetResponse {
  public Dataset $dataset;
}

class ListIdentityPoolUsageRequest {
  public IntegerString $max_results;
  public string $next_token;
}

class ResourceConflictException {
  public ExceptionMessage $message;
}

class PushSync {
  public ApplicationArnList $application_arns;
  public AssumeRoleArn $role_arn;
}

class IdentityPoolUsage {
  public Long $sync_sessions_count;
  public Long $data_storage;
  public Date $last_modified_date;
  public IdentityPoolId $identity_pool_id;
}

class SubscribeToDatasetRequest {
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
}

class UnsubscribeFromDatasetRequest {
  public IdentityId $identity_id;
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public IdentityPoolId $identity_pool_id;
}

class AssumeRoleArn {
}

class Dataset {
  public Date $creation_date;
  public Date $last_modified_date;
  public string $last_modified_by;
  public Long $data_storage;
  public Long $num_records;
  public IdentityId $identity_id;
  public DatasetName $dataset_name;
}

class DescribeIdentityPoolUsageResponse {
  public IdentityPoolUsage $identity_pool_usage;
}

class DescribeIdentityUsageResponse {
  public IdentityUsage $identity_usage;
}

class ListIdentityPoolUsageResponse {
  public IdentityPoolUsageList $identity_pool_usages;
  public int $max_results;
  public int $count;
  public string $next_token;
}

class Record {
  public Date $last_modified_date;
  public string $last_modified_by;
  public Date $device_last_modified_date;
  public RecordKey $key;
  public RecordValue $value;
  public Long $sync_count;
}

class RegisterDeviceResponse {
  public DeviceId $device_id;
}

class DescribeIdentityPoolUsageRequest {
  public IdentityPoolId $identity_pool_id;
}

class DescribeIdentityUsageRequest {
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
}

class GetIdentityPoolConfigurationRequest {
  public IdentityPoolId $identity_pool_id;
}

class InvalidConfigurationException {
  public ExceptionMessage $message;
}

class RecordPatchList {
}

class StreamName {
}

class LambdaThrottledException {
  public ExceptionMessage $message;
}

class ApplicationArnList {
}

class DeleteDatasetResponse {
  public Dataset $dataset;
}

class Events {
}

class GetBulkPublishDetailsResponse {
  public IdentityPoolId $identity_pool_id;
  public Date $bulk_publish_start_time;
  public Date $bulk_publish_complete_time;
  public BulkPublishStatus $bulk_publish_status;
  public string $failure_message;
}

class GetIdentityPoolConfigurationResponse {
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;
  public CognitoStreams $cognito_streams;
}

class IdentityId {
}

class Integer {
}

class AlreadyStreamedException {
  public ExceptionMessage $message;
}

class CognitoStreams {
  public StreamName $stream_name;
  public AssumeRoleArn $role_arn;
  public StreamingStatus $streaming_status;
}

class Date {
}

class DuplicateRequestException {
  public ExceptionMessage $message;
}

class PushToken {
}

class ResourceNotFoundException {
  public ExceptionMessage $message;
}

class SetIdentityPoolConfigurationRequest {
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;
  public CognitoStreams $cognito_streams;
}

class ListDatasetsRequest {
  public string $next_token;
  public IntegerString $max_results;
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
}

class RecordPatch {
  public Operation $op;
  public RecordKey $key;
  public RecordValue $value;
  public Long $sync_count;
  public Date $device_last_modified_date;
}

