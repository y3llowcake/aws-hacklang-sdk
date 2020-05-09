<?hh // strict
namespace slack\aws\lambda;

interface Lambda {
  public function AddLayerVersionPermission(AddLayerVersionPermissionRequest): Awaitable<Errors\Result<AddLayerVersionPermissionResponse>>;
  public function AddPermission(AddPermissionRequest): Awaitable<Errors\Result<AddPermissionResponse>>;
  public function CreateAlias(CreateAliasRequest): Awaitable<Errors\Result<AliasConfiguration>>;
  public function CreateEventSourceMapping(CreateEventSourceMappingRequest): Awaitable<Errors\Result<EventSourceMappingConfiguration>>;
  public function CreateFunction(CreateFunctionRequest): Awaitable<Errors\Result<FunctionConfiguration>>;
  public function DeleteAlias(DeleteAliasRequest): Awaitable<Errors\Error>;
  public function DeleteEventSourceMapping(DeleteEventSourceMappingRequest): Awaitable<Errors\Result<EventSourceMappingConfiguration>>;
  public function DeleteFunction(DeleteFunctionRequest): Awaitable<Errors\Error>;
  public function DeleteFunctionConcurrency(DeleteFunctionConcurrencyRequest): Awaitable<Errors\Error>;
  public function DeleteFunctionEventInvokeConfig(DeleteFunctionEventInvokeConfigRequest): Awaitable<Errors\Error>;
  public function DeleteLayerVersion(DeleteLayerVersionRequest): Awaitable<Errors\Error>;
  public function DeleteProvisionedConcurrencyConfig(DeleteProvisionedConcurrencyConfigRequest): Awaitable<Errors\Error>;
  public function GetAccountSettings(GetAccountSettingsRequest): Awaitable<Errors\Result<GetAccountSettingsResponse>>;
  public function GetAlias(GetAliasRequest): Awaitable<Errors\Result<AliasConfiguration>>;
  public function GetEventSourceMapping(GetEventSourceMappingRequest): Awaitable<Errors\Result<EventSourceMappingConfiguration>>;
  public function GetFunction(GetFunctionRequest): Awaitable<Errors\Result<GetFunctionResponse>>;
  public function GetFunctionConcurrency(GetFunctionConcurrencyRequest): Awaitable<Errors\Result<GetFunctionConcurrencyResponse>>;
  public function GetFunctionConfiguration(GetFunctionConfigurationRequest): Awaitable<Errors\Result<FunctionConfiguration>>;
  public function GetFunctionEventInvokeConfig(GetFunctionEventInvokeConfigRequest): Awaitable<Errors\Result<FunctionEventInvokeConfig>>;
  public function GetLayerVersion(GetLayerVersionRequest): Awaitable<Errors\Result<GetLayerVersionResponse>>;
  public function GetLayerVersionByArn(GetLayerVersionByArnRequest): Awaitable<Errors\Result<GetLayerVersionResponse>>;
  public function GetLayerVersionPolicy(GetLayerVersionPolicyRequest): Awaitable<Errors\Result<GetLayerVersionPolicyResponse>>;
  public function GetPolicy(GetPolicyRequest): Awaitable<Errors\Result<GetPolicyResponse>>;
  public function GetProvisionedConcurrencyConfig(GetProvisionedConcurrencyConfigRequest): Awaitable<Errors\Result<GetProvisionedConcurrencyConfigResponse>>;
  public function Invoke(InvocationRequest): Awaitable<Errors\Result<InvocationResponse>>;
  public function InvokeAsync(InvokeAsyncRequest): Awaitable<Errors\Result<InvokeAsyncResponse>>;
  public function ListAliases(ListAliasesRequest): Awaitable<Errors\Result<ListAliasesResponse>>;
  public function ListEventSourceMappings(ListEventSourceMappingsRequest): Awaitable<Errors\Result<ListEventSourceMappingsResponse>>;
  public function ListFunctionEventInvokeConfigs(ListFunctionEventInvokeConfigsRequest): Awaitable<Errors\Result<ListFunctionEventInvokeConfigsResponse>>;
  public function ListFunctions(ListFunctionsRequest): Awaitable<Errors\Result<ListFunctionsResponse>>;
  public function ListLayerVersions(ListLayerVersionsRequest): Awaitable<Errors\Result<ListLayerVersionsResponse>>;
  public function ListLayers(ListLayersRequest): Awaitable<Errors\Result<ListLayersResponse>>;
  public function ListProvisionedConcurrencyConfigs(ListProvisionedConcurrencyConfigsRequest): Awaitable<Errors\Result<ListProvisionedConcurrencyConfigsResponse>>;
  public function ListTags(ListTagsRequest): Awaitable<Errors\Result<ListTagsResponse>>;
  public function ListVersionsByFunction(ListVersionsByFunctionRequest): Awaitable<Errors\Result<ListVersionsByFunctionResponse>>;
  public function PublishLayerVersion(PublishLayerVersionRequest): Awaitable<Errors\Result<PublishLayerVersionResponse>>;
  public function PublishVersion(PublishVersionRequest): Awaitable<Errors\Result<FunctionConfiguration>>;
  public function PutFunctionConcurrency(PutFunctionConcurrencyRequest): Awaitable<Errors\Result<Concurrency>>;
  public function PutFunctionEventInvokeConfig(PutFunctionEventInvokeConfigRequest): Awaitable<Errors\Result<FunctionEventInvokeConfig>>;
  public function PutProvisionedConcurrencyConfig(PutProvisionedConcurrencyConfigRequest): Awaitable<Errors\Result<PutProvisionedConcurrencyConfigResponse>>;
  public function RemoveLayerVersionPermission(RemoveLayerVersionPermissionRequest): Awaitable<Errors\Error>;
  public function RemovePermission(RemovePermissionRequest): Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateAlias(UpdateAliasRequest): Awaitable<Errors\Result<AliasConfiguration>>;
  public function UpdateEventSourceMapping(UpdateEventSourceMappingRequest): Awaitable<Errors\Result<EventSourceMappingConfiguration>>;
  public function UpdateFunctionCode(UpdateFunctionCodeRequest): Awaitable<Errors\Result<FunctionConfiguration>>;
  public function UpdateFunctionConfiguration(UpdateFunctionConfigurationRequest): Awaitable<Errors\Result<FunctionConfiguration>>;
  public function UpdateFunctionEventInvokeConfig(UpdateFunctionEventInvokeConfigRequest): Awaitable<Errors\Result<FunctionEventInvokeConfig>>;
}

class AccountLimit {
  public Long $code_size_unzipped;
  public Long $code_size_zipped;
  public int $concurrent_executions;
  public Long $total_code_size;
  public UnreservedConcurrentExecutions $unreserved_concurrent_executions;
}

class AccountUsage {
  public Long $function_count;
  public Long $total_code_size;
}

class Action {
}

class AddLayerVersionPermissionRequest {
  public LayerPermissionAllowedAction $action;
  public LayerName $layer_name;
  public OrganizationId $organization_id;
  public LayerPermissionAllowedPrincipal $principal;
  public string $revision_id;
  public StatementId $statement_id;
  public LayerVersionNumber $version_number;
}

class AddLayerVersionPermissionResponse {
  public string $revision_id;
  public string $statement;
}

class AddPermissionRequest {
  public Action $action;
  public EventSourceToken $event_source_token;
  public FunctionName $function_name;
  public Principal $principal;
  public Qualifier $qualifier;
  public string $revision_id;
  public SourceOwner $source_account;
  public Arn $source_arn;
  public StatementId $statement_id;
}

class AddPermissionResponse {
  public string $statement;
}

class AdditionalVersion {
}

class AdditionalVersionWeights {
}

class Alias {
}

class AliasConfiguration {
  public FunctionArn $alias_arn;
  public Description $description;
  public Version $function_version;
  public Alias $name;
  public string $revision_id;
  public AliasRoutingConfiguration $routing_config;
}

class AliasList {
}

class AliasRoutingConfiguration {
  public AdditionalVersionWeights $additional_version_weights;
}

class Arn {
}

class BatchSize {
}

class BisectBatchOnFunctionError {
}

class Blob {
}

class BlobStream {
}

class Boolean {
}

class CodeStorageExceededException {
  public string $type;
  public string $message;
}

class CompatibleRuntimes {
}

class Concurrency {
  public ReservedConcurrentExecutions $reserved_concurrent_executions;
}

class CreateAliasRequest {
  public Description $description;
  public FunctionName $function_name;
  public Version $function_version;
  public Alias $name;
  public AliasRoutingConfiguration $routing_config;
}

class CreateEventSourceMappingRequest {
  public BatchSize $batch_size;
  public BisectBatchOnFunctionError $bisect_batch_on_function_error;
  public DestinationConfig $destination_config;
  public Enabled $enabled;
  public Arn $event_source_arn;
  public FunctionName $function_name;
  public MaximumBatchingWindowInSeconds $maximum_batching_window_in_seconds;
  public MaximumRecordAgeInSeconds $maximum_record_age_in_seconds;
  public MaximumRetryAttemptsEventSourceMapping $maximum_retry_attempts;
  public ParallelizationFactor $parallelization_factor;
  public EventSourcePosition $starting_position;
  public Date $starting_position_timestamp;
}

class CreateFunctionRequest {
  public FunctionCode $code;
  public DeadLetterConfig $dead_letter_config;
  public Description $description;
  public Environment $environment;
  public FunctionName $function_name;
  public Handler $handler;
  public KMSKeyArn $kms_key_arn;
  public LayerList $layers;
  public MemorySize $memory_size;
  public boolean $publish;
  public RoleArn $role;
  public Runtime $runtime;
  public Tags $tags;
  public Timeout $timeout;
  public TracingConfig $tracing_config;
  public VpcConfig $vpc_config;
}

class Date {
}

class DeadLetterConfig {
  public ResourceArn $target_arn;
}

class DeleteAliasRequest {
  public FunctionName $function_name;
  public Alias $name;
}

class DeleteEventSourceMappingRequest {
  public string $uuid;
}

class DeleteFunctionConcurrencyRequest {
  public FunctionName $function_name;
}

class DeleteFunctionEventInvokeConfigRequest {
  public FunctionName $function_name;
  public Qualifier $qualifier;
}

class DeleteFunctionRequest {
  public FunctionName $function_name;
  public Qualifier $qualifier;
}

class DeleteLayerVersionRequest {
  public LayerName $layer_name;
  public LayerVersionNumber $version_number;
}

class DeleteProvisionedConcurrencyConfigRequest {
  public FunctionName $function_name;
  public Qualifier $qualifier;
}

class Description {
}

class DestinationArn {
}

class DestinationConfig {
  public OnFailure $on_failure;
  public OnSuccess $on_success;
}

class EC2AccessDeniedException {
  public string $message;
  public string $type;
}

class EC2ThrottledException {
  public string $message;
  public string $type;
}

class EC2UnexpectedException {
  public string $ec_2_error_code;
  public string $message;
  public string $type;
}

class ENILimitReachedException {
  public string $message;
  public string $type;
}

class Enabled {
}

class Environment {
  public EnvironmentVariables $variables;
}

class EnvironmentError {
  public string $error_code;
  public SensitiveString $message;
}

class EnvironmentResponse {
  public EnvironmentError $error;
  public EnvironmentVariables $variables;
}

class EnvironmentVariableName {
}

class EnvironmentVariableValue {
}

class EnvironmentVariables {
}

class EventSourceMappingConfiguration {
  public BatchSize $batch_size;
  public BisectBatchOnFunctionError $bisect_batch_on_function_error;
  public DestinationConfig $destination_config;
  public Arn $event_source_arn;
  public FunctionArn $function_arn;
  public Date $last_modified;
  public string $last_processing_result;
  public MaximumBatchingWindowInSeconds $maximum_batching_window_in_seconds;
  public MaximumRecordAgeInSeconds $maximum_record_age_in_seconds;
  public MaximumRetryAttemptsEventSourceMapping $maximum_retry_attempts;
  public ParallelizationFactor $parallelization_factor;
  public string $state;
  public string $state_transition_reason;
  public string $uuid;
}

class EventSourceMappingsList {
}

class EventSourcePosition {
}

class EventSourceToken {
}

class FunctionArn {
}

class FunctionCode {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
  public S3ObjectVersion $s_3_object_version;
  public Blob $zip_file;
}

class FunctionCodeLocation {
  public string $location;
  public string $repository_type;
}

class FunctionConfiguration {
  public string $code_sha_256;
  public Long $code_size;
  public DeadLetterConfig $dead_letter_config;
  public Description $description;
  public EnvironmentResponse $environment;
  public NameSpacedFunctionArn $function_arn;
  public NamespacedFunctionName $function_name;
  public Handler $handler;
  public KMSKeyArn $kms_key_arn;
  public Timestamp $last_modified;
  public LastUpdateStatus $last_update_status;
  public LastUpdateStatusReason $last_update_status_reason;
  public LastUpdateStatusReasonCode $last_update_status_reason_code;
  public LayersReferenceList $layers;
  public FunctionArn $master_arn;
  public MemorySize $memory_size;
  public string $revision_id;
  public RoleArn $role;
  public Runtime $runtime;
  public State $state;
  public StateReason $state_reason;
  public StateReasonCode $state_reason_code;
  public Timeout $timeout;
  public TracingConfigResponse $tracing_config;
  public Version $version;
  public VpcConfigResponse $vpc_config;
}

class FunctionEventInvokeConfig {
  public DestinationConfig $destination_config;
  public FunctionArn $function_arn;
  public Date $last_modified;
  public MaximumEventAgeInSeconds $maximum_event_age_in_seconds;
  public MaximumRetryAttempts $maximum_retry_attempts;
}

class FunctionEventInvokeConfigList {
}

class FunctionList {
}

class FunctionName {
}

class FunctionVersion {
}

class GetAccountSettingsRequest {
}

class GetAccountSettingsResponse {
  public AccountLimit $account_limit;
  public AccountUsage $account_usage;
}

class GetAliasRequest {
  public FunctionName $function_name;
  public Alias $name;
}

class GetEventSourceMappingRequest {
  public string $uuid;
}

class GetFunctionConcurrencyRequest {
  public FunctionName $function_name;
}

class GetFunctionConcurrencyResponse {
  public ReservedConcurrentExecutions $reserved_concurrent_executions;
}

class GetFunctionConfigurationRequest {
  public NamespacedFunctionName $function_name;
  public Qualifier $qualifier;
}

class GetFunctionEventInvokeConfigRequest {
  public FunctionName $function_name;
  public Qualifier $qualifier;
}

class GetFunctionRequest {
  public NamespacedFunctionName $function_name;
  public Qualifier $qualifier;
}

class GetFunctionResponse {
  public FunctionCodeLocation $code;
  public Concurrency $concurrency;
  public FunctionConfiguration $configuration;
  public Tags $tags;
}

class GetLayerVersionByArnRequest {
  public LayerVersionArn $arn;
}

class GetLayerVersionPolicyRequest {
  public LayerName $layer_name;
  public LayerVersionNumber $version_number;
}

class GetLayerVersionPolicyResponse {
  public string $policy;
  public string $revision_id;
}

class GetLayerVersionRequest {
  public LayerName $layer_name;
  public LayerVersionNumber $version_number;
}

class GetLayerVersionResponse {
  public CompatibleRuntimes $compatible_runtimes;
  public LayerVersionContentOutput $content;
  public Timestamp $created_date;
  public Description $description;
  public LayerArn $layer_arn;
  public LayerVersionArn $layer_version_arn;
  public LicenseInfo $license_info;
  public LayerVersionNumber $version;
}

class GetPolicyRequest {
  public NamespacedFunctionName $function_name;
  public Qualifier $qualifier;
}

class GetPolicyResponse {
  public string $policy;
  public string $revision_id;
}

class GetProvisionedConcurrencyConfigRequest {
  public FunctionName $function_name;
  public Qualifier $qualifier;
}

class GetProvisionedConcurrencyConfigResponse {
  public NonNegativeInteger $allocated_provisioned_concurrent_executions;
  public NonNegativeInteger $available_provisioned_concurrent_executions;
  public Timestamp $last_modified;
  public PositiveInteger $requested_provisioned_concurrent_executions;
  public ProvisionedConcurrencyStatusEnum $status;
  public string $status_reason;
}

class Handler {
}

class HttpStatus {
}

class Integer {
}

class InvalidParameterValueException {
  public string $type;
  public string $message;
}

class InvalidRequestContentException {
  public string $type;
  public string $message;
}

class InvalidRuntimeException {
  public string $message;
  public string $type;
}

class InvalidSecurityGroupIDException {
  public string $message;
  public string $type;
}

class InvalidSubnetIDException {
  public string $message;
  public string $type;
}

class InvalidZipFileException {
  public string $message;
  public string $type;
}

class InvocationRequest {
  public string $client_context;
  public NamespacedFunctionName $function_name;
  public InvocationType $invocation_type;
  public LogType $log_type;
  public Blob $payload;
  public Qualifier $qualifier;
}

class InvocationResponse {
  public Version $executed_version;
  public string $function_error;
  public string $log_result;
  public Blob $payload;
  public int $status_code;
}

class InvocationType {
}

class InvokeAsyncRequest {
  public NamespacedFunctionName $function_name;
  public BlobStream $invoke_args;
}

class InvokeAsyncResponse {
  public HttpStatus $status;
}

class KMSAccessDeniedException {
  public string $message;
  public string $type;
}

class KMSDisabledException {
  public string $message;
  public string $type;
}

class KMSInvalidStateException {
  public string $message;
  public string $type;
}

class KMSKeyArn {
}

class KMSNotFoundException {
  public string $message;
  public string $type;
}

class LastUpdateStatus {
}

class LastUpdateStatusReason {
}

class LastUpdateStatusReasonCode {
}

class Layer {
  public LayerVersionArn $arn;
  public Long $code_size;
}

class LayerArn {
}

class LayerList {
}

class LayerName {
}

class LayerPermissionAllowedAction {
}

class LayerPermissionAllowedPrincipal {
}

class LayerVersionArn {
}

class LayerVersionContentInput {
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
  public S3ObjectVersion $s_3_object_version;
  public Blob $zip_file;
}

class LayerVersionContentOutput {
  public string $code_sha_256;
  public Long $code_size;
  public string $location;
}

class LayerVersionNumber {
}

class LayerVersionsList {
}

class LayerVersionsListItem {
  public CompatibleRuntimes $compatible_runtimes;
  public Timestamp $created_date;
  public Description $description;
  public LayerVersionArn $layer_version_arn;
  public LicenseInfo $license_info;
  public LayerVersionNumber $version;
}

class LayersList {
}

class LayersListItem {
  public LayerVersionsListItem $latest_matching_version;
  public LayerArn $layer_arn;
  public LayerName $layer_name;
}

class LayersReferenceList {
}

class LicenseInfo {
}

class ListAliasesRequest {
  public FunctionName $function_name;
  public Version $function_version;
  public string $marker;
  public MaxListItems $max_items;
}

class ListAliasesResponse {
  public AliasList $aliases;
  public string $next_marker;
}

class ListEventSourceMappingsRequest {
  public Arn $event_source_arn;
  public FunctionName $function_name;
  public string $marker;
  public MaxListItems $max_items;
}

class ListEventSourceMappingsResponse {
  public EventSourceMappingsList $event_source_mappings;
  public string $next_marker;
}

class ListFunctionEventInvokeConfigsRequest {
  public FunctionName $function_name;
  public string $marker;
  public MaxFunctionEventInvokeConfigListItems $max_items;
}

class ListFunctionEventInvokeConfigsResponse {
  public FunctionEventInvokeConfigList $function_event_invoke_configs;
  public string $next_marker;
}

class ListFunctionsRequest {
  public FunctionVersion $function_version;
  public string $marker;
  public MasterRegion $master_region;
  public MaxListItems $max_items;
}

class ListFunctionsResponse {
  public FunctionList $functions;
  public string $next_marker;
}

class ListLayerVersionsRequest {
  public Runtime $compatible_runtime;
  public LayerName $layer_name;
  public string $marker;
  public MaxLayerListItems $max_items;
}

class ListLayerVersionsResponse {
  public LayerVersionsList $layer_versions;
  public string $next_marker;
}

class ListLayersRequest {
  public Runtime $compatible_runtime;
  public string $marker;
  public MaxLayerListItems $max_items;
}

class ListLayersResponse {
  public LayersList $layers;
  public string $next_marker;
}

class ListProvisionedConcurrencyConfigsRequest {
  public FunctionName $function_name;
  public string $marker;
  public MaxProvisionedConcurrencyConfigListItems $max_items;
}

class ListProvisionedConcurrencyConfigsResponse {
  public string $next_marker;
  public ProvisionedConcurrencyConfigList $provisioned_concurrency_configs;
}

class ListTagsRequest {
  public FunctionArn $resource;
}

class ListTagsResponse {
  public Tags $tags;
}

class ListVersionsByFunctionRequest {
  public NamespacedFunctionName $function_name;
  public string $marker;
  public MaxListItems $max_items;
}

class ListVersionsByFunctionResponse {
  public string $next_marker;
  public FunctionList $versions;
}

class LogType {
}

class Long {
}

class MasterRegion {
}

class MaxFunctionEventInvokeConfigListItems {
}

class MaxLayerListItems {
}

class MaxListItems {
}

class MaxProvisionedConcurrencyConfigListItems {
}

class MaximumBatchingWindowInSeconds {
}

class MaximumEventAgeInSeconds {
}

class MaximumRecordAgeInSeconds {
}

class MaximumRetryAttempts {
}

class MaximumRetryAttemptsEventSourceMapping {
}

class MemorySize {
}

class NameSpacedFunctionArn {
}

class NamespacedFunctionName {
}

class NamespacedStatementId {
}

class NonNegativeInteger {
}

class OnFailure {
  public DestinationArn $destination;
}

class OnSuccess {
  public DestinationArn $destination;
}

class OrganizationId {
}

class ParallelizationFactor {
}

class PolicyLengthExceededException {
  public string $type;
  public string $message;
}

class PositiveInteger {
}

class PreconditionFailedException {
  public string $type;
  public string $message;
}

class Principal {
}

class ProvisionedConcurrencyConfigList {
}

class ProvisionedConcurrencyConfigListItem {
  public NonNegativeInteger $allocated_provisioned_concurrent_executions;
  public NonNegativeInteger $available_provisioned_concurrent_executions;
  public FunctionArn $function_arn;
  public Timestamp $last_modified;
  public PositiveInteger $requested_provisioned_concurrent_executions;
  public ProvisionedConcurrencyStatusEnum $status;
  public string $status_reason;
}

class ProvisionedConcurrencyConfigNotFoundException {
  public string $type;
  public string $message;
}

class ProvisionedConcurrencyStatusEnum {
}

class PublishLayerVersionRequest {
  public CompatibleRuntimes $compatible_runtimes;
  public LayerVersionContentInput $content;
  public Description $description;
  public LayerName $layer_name;
  public LicenseInfo $license_info;
}

class PublishLayerVersionResponse {
  public CompatibleRuntimes $compatible_runtimes;
  public LayerVersionContentOutput $content;
  public Timestamp $created_date;
  public Description $description;
  public LayerArn $layer_arn;
  public LayerVersionArn $layer_version_arn;
  public LicenseInfo $license_info;
  public LayerVersionNumber $version;
}

class PublishVersionRequest {
  public string $code_sha_256;
  public Description $description;
  public FunctionName $function_name;
  public string $revision_id;
}

class PutFunctionConcurrencyRequest {
  public FunctionName $function_name;
  public ReservedConcurrentExecutions $reserved_concurrent_executions;
}

class PutFunctionEventInvokeConfigRequest {
  public DestinationConfig $destination_config;
  public FunctionName $function_name;
  public MaximumEventAgeInSeconds $maximum_event_age_in_seconds;
  public MaximumRetryAttempts $maximum_retry_attempts;
  public Qualifier $qualifier;
}

class PutProvisionedConcurrencyConfigRequest {
  public FunctionName $function_name;
  public PositiveInteger $provisioned_concurrent_executions;
  public Qualifier $qualifier;
}

class PutProvisionedConcurrencyConfigResponse {
  public NonNegativeInteger $allocated_provisioned_concurrent_executions;
  public NonNegativeInteger $available_provisioned_concurrent_executions;
  public Timestamp $last_modified;
  public PositiveInteger $requested_provisioned_concurrent_executions;
  public ProvisionedConcurrencyStatusEnum $status;
  public string $status_reason;
}

class Qualifier {
}

class RemoveLayerVersionPermissionRequest {
  public LayerName $layer_name;
  public string $revision_id;
  public StatementId $statement_id;
  public LayerVersionNumber $version_number;
}

class RemovePermissionRequest {
  public FunctionName $function_name;
  public Qualifier $qualifier;
  public string $revision_id;
  public NamespacedStatementId $statement_id;
}

class RequestTooLargeException {
  public string $type;
  public string $message;
}

class ReservedConcurrentExecutions {
}

class ResourceArn {
}

class ResourceConflictException {
  public string $type;
  public string $message;
}

class ResourceInUseException {
  public string $message;
  public string $type;
}

class ResourceNotFoundException {
  public string $message;
  public string $type;
}

class ResourceNotReadyException {
  public string $type;
  public string $message;
}

class RoleArn {
}

class Runtime {
}

class S3Bucket {
}

class S3Key {
}

class S3ObjectVersion {
}

class SecurityGroupId {
}

class SecurityGroupIds {
}

class SensitiveString {
}

class ServiceException {
  public string $message;
  public string $type;
}

class SourceOwner {
}

class State {
}

class StateReason {
}

class StateReasonCode {
}

class StatementId {
}

class String {
}

class SubnetIPAddressLimitReachedException {
  public string $message;
  public string $type;
}

class SubnetId {
}

class SubnetIds {
}

class TagKey {
}

class TagKeyList {
}

class TagResourceRequest {
  public FunctionArn $resource;
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class ThrottleReason {
}

class Timeout {
}

class Timestamp {
}

class TooManyRequestsException {
  public ThrottleReason $reason;
  public string $type;
  public string $message;
  public string $retry_after_seconds;
}

class TracingConfig {
  public TracingMode $mode;
}

class TracingConfigResponse {
  public TracingMode $mode;
}

class TracingMode {
}

class UnreservedConcurrentExecutions {
}

class UnsupportedMediaTypeException {
  public string $type;
  public string $message;
}

class UntagResourceRequest {
  public FunctionArn $resource;
  public TagKeyList $tag_keys;
}

class UpdateAliasRequest {
  public Description $description;
  public FunctionName $function_name;
  public Version $function_version;
  public Alias $name;
  public string $revision_id;
  public AliasRoutingConfiguration $routing_config;
}

class UpdateEventSourceMappingRequest {
  public BatchSize $batch_size;
  public BisectBatchOnFunctionError $bisect_batch_on_function_error;
  public DestinationConfig $destination_config;
  public Enabled $enabled;
  public FunctionName $function_name;
  public MaximumBatchingWindowInSeconds $maximum_batching_window_in_seconds;
  public MaximumRecordAgeInSeconds $maximum_record_age_in_seconds;
  public MaximumRetryAttemptsEventSourceMapping $maximum_retry_attempts;
  public ParallelizationFactor $parallelization_factor;
  public string $uuid;
}

class UpdateFunctionCodeRequest {
  public boolean $dry_run;
  public FunctionName $function_name;
  public boolean $publish;
  public string $revision_id;
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key;
  public S3ObjectVersion $s_3_object_version;
  public Blob $zip_file;
}

class UpdateFunctionConfigurationRequest {
  public DeadLetterConfig $dead_letter_config;
  public Description $description;
  public Environment $environment;
  public FunctionName $function_name;
  public Handler $handler;
  public KMSKeyArn $kms_key_arn;
  public LayerList $layers;
  public MemorySize $memory_size;
  public string $revision_id;
  public RoleArn $role;
  public Runtime $runtime;
  public Timeout $timeout;
  public TracingConfig $tracing_config;
  public VpcConfig $vpc_config;
}

class UpdateFunctionEventInvokeConfigRequest {
  public DestinationConfig $destination_config;
  public FunctionName $function_name;
  public MaximumEventAgeInSeconds $maximum_event_age_in_seconds;
  public MaximumRetryAttempts $maximum_retry_attempts;
  public Qualifier $qualifier;
}

class Version {
}

class VpcConfig {
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
}

class VpcConfigResponse {
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;
}

class VpcId {
}

class Weight {
}

