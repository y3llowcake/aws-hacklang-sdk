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
}

class ApplicationArn {
}

class ApplicationArnList {
}

class AssumeRoleArn {
}

class Boolean {
}

class BulkPublishRequest {
  public IdentityPoolId $identity_pool_id;
}

class BulkPublishResponse {
  public IdentityPoolId $identity_pool_id;
}

class BulkPublishStatus {
}

class ClientContext {
}

class CognitoEventType {
}

class CognitoStreams {
  public AssumeRoleArn $role_arn;
  public StreamName $stream_name;
  public StreamingStatus $streaming_status;
}

class ConcurrentModificationException {
  public string $message;
}

class Dataset {
  public Date $creation_date;
  public Long $data_storage;
  public DatasetName $dataset_name;
  public IdentityId $identity_id;
  public string $last_modified_by;
  public Date $last_modified_date;
  public Long $num_records;
}

class DatasetList {
}

class DatasetName {
}

class Date {
}

class DeleteDatasetRequest {
  public DatasetName $dataset_name;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
}

class DeleteDatasetResponse {
  public Dataset $dataset;
}

class DescribeDatasetRequest {
  public DatasetName $dataset_name;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
}

class DescribeDatasetResponse {
  public Dataset $dataset;
}

class DescribeIdentityPoolUsageRequest {
  public IdentityPoolId $identity_pool_id;
}

class DescribeIdentityPoolUsageResponse {
  public IdentityPoolUsage $identity_pool_usage;
}

class DescribeIdentityUsageRequest {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
}

class DescribeIdentityUsageResponse {
  public IdentityUsage $identity_usage;
}

class DeviceId {
}

class DuplicateRequestException {
  public ExceptionMessage $message;
}

class Events {
}

class ExceptionMessage {
}

class GetBulkPublishDetailsRequest {
  public IdentityPoolId $identity_pool_id;
}

class GetBulkPublishDetailsResponse {
  public Date $bulk_publish_complete_time;
  public Date $bulk_publish_start_time;
  public BulkPublishStatus $bulk_publish_status;
  public string $failure_message;
  public IdentityPoolId $identity_pool_id;
}

class GetCognitoEventsRequest {
  public IdentityPoolId $identity_pool_id;
}

class GetCognitoEventsResponse {
  public Events $events;
}

class GetIdentityPoolConfigurationRequest {
  public IdentityPoolId $identity_pool_id;
}

class GetIdentityPoolConfigurationResponse {
  public CognitoStreams $cognito_streams;
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;
}

class IdentityId {
}

class IdentityPoolId {
}

class IdentityPoolUsage {
  public Long $data_storage;
  public IdentityPoolId $identity_pool_id;
  public Date $last_modified_date;
  public Long $sync_sessions_count;
}

class IdentityPoolUsageList {
}

class IdentityUsage {
  public Long $data_storage;
  public int $dataset_count;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public Date $last_modified_date;
}

class Integer {
}

class IntegerString {
}

class InternalErrorException {
  public ExceptionMessage $message;
}

class InvalidConfigurationException {
  public ExceptionMessage $message;
}

class InvalidLambdaFunctionOutputException {
  public ExceptionMessage $message;
}

class InvalidParameterException {
  public ExceptionMessage $message;
}

class LambdaFunctionArn {
}

class LambdaThrottledException {
  public ExceptionMessage $message;
}

class LimitExceededException {
  public ExceptionMessage $message;
}

class ListDatasetsRequest {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public IntegerString $max_results;
  public string $next_token;
}

class ListDatasetsResponse {
  public int $count;
  public DatasetList $datasets;
  public string $next_token;
}

class ListIdentityPoolUsageRequest {
  public IntegerString $max_results;
  public string $next_token;
}

class ListIdentityPoolUsageResponse {
  public int $count;
  public IdentityPoolUsageList $identity_pool_usages;
  public int $max_results;
  public string $next_token;
}

class ListRecordsRequest {
  public DatasetName $dataset_name;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public Long $last_sync_count;
  public IntegerString $max_results;
  public string $next_token;
  public SyncSessionToken $sync_session_token;
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
}

class Long {
}

class MergedDatasetNameList {
}

class NotAuthorizedException {
  public ExceptionMessage $message;
}

class Operation {
}

class Platform {
}

class PushSync {
  public ApplicationArnList $application_arns;
  public AssumeRoleArn $role_arn;
}

class PushToken {
}

class Record {
  public Date $device_last_modified_date;
  public RecordKey $key;
  public string $last_modified_by;
  public Date $last_modified_date;
  public Long $sync_count;
  public RecordValue $value;
}

class RecordKey {
}

class RecordList {
}

class RecordPatch {
  public Date $device_last_modified_date;
  public RecordKey $key;
  public Operation $op;
  public Long $sync_count;
  public RecordValue $value;
}

class RecordPatchList {
}

class RecordValue {
}

class RegisterDeviceRequest {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public Platform $platform;
  public PushToken $token;
}

class RegisterDeviceResponse {
  public DeviceId $device_id;
}

class ResourceConflictException {
  public ExceptionMessage $message;
}

class ResourceNotFoundException {
  public ExceptionMessage $message;
}

class SetCognitoEventsRequest {
  public Events $events;
  public IdentityPoolId $identity_pool_id;
}

class SetIdentityPoolConfigurationRequest {
  public CognitoStreams $cognito_streams;
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;
}

class SetIdentityPoolConfigurationResponse {
  public CognitoStreams $cognito_streams;
  public IdentityPoolId $identity_pool_id;
  public PushSync $push_sync;
}

class StreamName {
}

class StreamingStatus {
}

class String {
}

class SubscribeToDatasetRequest {
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
}

class SubscribeToDatasetResponse {
}

class SyncSessionToken {
}

class TooManyRequestsException {
  public ExceptionMessage $message;
}

class UnsubscribeFromDatasetRequest {
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
}

class UnsubscribeFromDatasetResponse {
}

class UpdateRecordsRequest {
  public ClientContext $client_context;
  public DatasetName $dataset_name;
  public DeviceId $device_id;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public RecordPatchList $record_patches;
  public SyncSessionToken $sync_session_token;
}

class UpdateRecordsResponse {
  public RecordList $records;
}

