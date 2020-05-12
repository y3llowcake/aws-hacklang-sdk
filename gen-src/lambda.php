<?hh // strict
namespace slack\aws\lambda;

interface Lambda {
  public function AddLayerVersionPermission(AddLayerVersionPermissionRequest $in): Awaitable<\Errors\Result<AddLayerVersionPermissionResponse>>;
  public function AddPermission(AddPermissionRequest $in): Awaitable<\Errors\Result<AddPermissionResponse>>;
  public function CreateAlias(CreateAliasRequest $in): Awaitable<\Errors\Result<AliasConfiguration>>;
  public function CreateEventSourceMapping(CreateEventSourceMappingRequest $in): Awaitable<\Errors\Result<EventSourceMappingConfiguration>>;
  public function CreateFunction(CreateFunctionRequest $in): Awaitable<\Errors\Result<FunctionConfiguration>>;
  public function DeleteAlias(DeleteAliasRequest $in): Awaitable<\Errors\Error>;
  public function DeleteEventSourceMapping(DeleteEventSourceMappingRequest $in): Awaitable<\Errors\Result<EventSourceMappingConfiguration>>;
  public function DeleteFunction(DeleteFunctionRequest $in): Awaitable<\Errors\Error>;
  public function DeleteFunctionConcurrency(DeleteFunctionConcurrencyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteFunctionEventInvokeConfig(DeleteFunctionEventInvokeConfigRequest $in): Awaitable<\Errors\Error>;
  public function DeleteLayerVersion(DeleteLayerVersionRequest $in): Awaitable<\Errors\Error>;
  public function DeleteProvisionedConcurrencyConfig(DeleteProvisionedConcurrencyConfigRequest $in): Awaitable<\Errors\Error>;
  public function GetAccountSettings(GetAccountSettingsRequest $in): Awaitable<\Errors\Result<GetAccountSettingsResponse>>;
  public function GetAlias(GetAliasRequest $in): Awaitable<\Errors\Result<AliasConfiguration>>;
  public function GetEventSourceMapping(GetEventSourceMappingRequest $in): Awaitable<\Errors\Result<EventSourceMappingConfiguration>>;
  public function GetFunction(GetFunctionRequest $in): Awaitable<\Errors\Result<GetFunctionResponse>>;
  public function GetFunctionConcurrency(GetFunctionConcurrencyRequest $in): Awaitable<\Errors\Result<GetFunctionConcurrencyResponse>>;
  public function GetFunctionConfiguration(GetFunctionConfigurationRequest $in): Awaitable<\Errors\Result<FunctionConfiguration>>;
  public function GetFunctionEventInvokeConfig(GetFunctionEventInvokeConfigRequest $in): Awaitable<\Errors\Result<FunctionEventInvokeConfig>>;
  public function GetLayerVersion(GetLayerVersionRequest $in): Awaitable<\Errors\Result<GetLayerVersionResponse>>;
  public function GetLayerVersionByArn(GetLayerVersionByArnRequest $in): Awaitable<\Errors\Result<GetLayerVersionResponse>>;
  public function GetLayerVersionPolicy(GetLayerVersionPolicyRequest $in): Awaitable<\Errors\Result<GetLayerVersionPolicyResponse>>;
  public function GetPolicy(GetPolicyRequest $in): Awaitable<\Errors\Result<GetPolicyResponse>>;
  public function GetProvisionedConcurrencyConfig(GetProvisionedConcurrencyConfigRequest $in): Awaitable<\Errors\Result<GetProvisionedConcurrencyConfigResponse>>;
  public function Invoke(InvocationRequest $in): Awaitable<\Errors\Result<InvocationResponse>>;
  public function InvokeAsync(InvokeAsyncRequest $in): Awaitable<\Errors\Result<InvokeAsyncResponse>>;
  public function ListAliases(ListAliasesRequest $in): Awaitable<\Errors\Result<ListAliasesResponse>>;
  public function ListEventSourceMappings(ListEventSourceMappingsRequest $in): Awaitable<\Errors\Result<ListEventSourceMappingsResponse>>;
  public function ListFunctionEventInvokeConfigs(ListFunctionEventInvokeConfigsRequest $in): Awaitable<\Errors\Result<ListFunctionEventInvokeConfigsResponse>>;
  public function ListFunctions(ListFunctionsRequest $in): Awaitable<\Errors\Result<ListFunctionsResponse>>;
  public function ListLayerVersions(ListLayerVersionsRequest $in): Awaitable<\Errors\Result<ListLayerVersionsResponse>>;
  public function ListLayers(ListLayersRequest $in): Awaitable<\Errors\Result<ListLayersResponse>>;
  public function ListProvisionedConcurrencyConfigs(ListProvisionedConcurrencyConfigsRequest $in): Awaitable<\Errors\Result<ListProvisionedConcurrencyConfigsResponse>>;
  public function ListTags(ListTagsRequest $in): Awaitable<\Errors\Result<ListTagsResponse>>;
  public function ListVersionsByFunction(ListVersionsByFunctionRequest $in): Awaitable<\Errors\Result<ListVersionsByFunctionResponse>>;
  public function PublishLayerVersion(PublishLayerVersionRequest $in): Awaitable<\Errors\Result<PublishLayerVersionResponse>>;
  public function PublishVersion(PublishVersionRequest $in): Awaitable<\Errors\Result<FunctionConfiguration>>;
  public function PutFunctionConcurrency(PutFunctionConcurrencyRequest $in): Awaitable<\Errors\Result<Concurrency>>;
  public function PutFunctionEventInvokeConfig(PutFunctionEventInvokeConfigRequest $in): Awaitable<\Errors\Result<FunctionEventInvokeConfig>>;
  public function PutProvisionedConcurrencyConfig(PutProvisionedConcurrencyConfigRequest $in): Awaitable<\Errors\Result<PutProvisionedConcurrencyConfigResponse>>;
  public function RemoveLayerVersionPermission(RemoveLayerVersionPermissionRequest $in): Awaitable<\Errors\Error>;
  public function RemovePermission(RemovePermissionRequest $in): Awaitable<\Errors\Error>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateAlias(UpdateAliasRequest $in): Awaitable<\Errors\Result<AliasConfiguration>>;
  public function UpdateEventSourceMapping(UpdateEventSourceMappingRequest $in): Awaitable<\Errors\Result<EventSourceMappingConfiguration>>;
  public function UpdateFunctionCode(UpdateFunctionCodeRequest $in): Awaitable<\Errors\Result<FunctionConfiguration>>;
  public function UpdateFunctionConfiguration(UpdateFunctionConfigurationRequest $in): Awaitable<\Errors\Result<FunctionConfiguration>>;
  public function UpdateFunctionEventInvokeConfig(UpdateFunctionEventInvokeConfigRequest $in): Awaitable<\Errors\Result<FunctionEventInvokeConfig>>;
}

class AccountLimit {
  public ?Long $code_size_unzipped;
  public ?Long $code_size_zipped;
  public int $concurrent_executions;
  public ?Long $total_code_size;
  public ?UnreservedConcurrentExecutions $unreserved_concurrent_executions;

  public function __construct(shape(
    ?'code_size_unzipped' => ?Long,
    ?'code_size_zipped' => ?Long,
    ?'concurrent_executions' => int,
    ?'total_code_size' => ?Long,
    ?'unreserved_concurrent_executions' => ?UnreservedConcurrentExecutions,
  ) $s = shape()) {
    $this->code_size_unzipped = $s['code_size_unzipped'] ?? 0;
    $this->code_size_zipped = $s['code_size_zipped'] ?? 0;
    $this->concurrent_executions = $s['concurrent_executions'] ?? 0;
    $this->total_code_size = $s['total_code_size'] ?? 0;
    $this->unreserved_concurrent_executions = $s['unreserved_concurrent_executions'] ?? 0;
  }
}

class AccountUsage {
  public ?Long $function_count;
  public ?Long $total_code_size;

  public function __construct(shape(
    ?'function_count' => ?Long,
    ?'total_code_size' => ?Long,
  ) $s = shape()) {
    $this->function_count = $s['function_count'] ?? 0;
    $this->total_code_size = $s['total_code_size'] ?? 0;
  }
}

type Action = string;

class AddLayerVersionPermissionRequest {
  public ?LayerPermissionAllowedAction $action;
  public ?LayerName $layer_name;
  public ?OrganizationId $organization_id;
  public ?LayerPermissionAllowedPrincipal $principal;
  public string $revision_id;
  public ?StatementId $statement_id;
  public ?LayerVersionNumber $version_number;

  public function __construct(shape(
    ?'action' => ?LayerPermissionAllowedAction,
    ?'layer_name' => ?LayerName,
    ?'organization_id' => ?OrganizationId,
    ?'principal' => ?LayerPermissionAllowedPrincipal,
    ?'revision_id' => string,
    ?'statement_id' => ?StatementId,
    ?'version_number' => ?LayerVersionNumber,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->layer_name = $s['layer_name'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->principal = $s['principal'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->statement_id = $s['statement_id'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class AddLayerVersionPermissionResponse {
  public string $revision_id;
  public string $statement;

  public function __construct(shape(
    ?'revision_id' => string,
    ?'statement' => string,
  ) $s = shape()) {
    $this->revision_id = $s['revision_id'] ?? '';
    $this->statement = $s['statement'] ?? '';
  }
}

class AddPermissionRequest {
  public ?Action $action;
  public ?EventSourceToken $event_source_token;
  public ?FunctionName $function_name;
  public ?Principal $principal;
  public ?Qualifier $qualifier;
  public string $revision_id;
  public ?SourceOwner $source_account;
  public ?Arn $source_arn;
  public ?StatementId $statement_id;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'event_source_token' => ?EventSourceToken,
    ?'function_name' => ?FunctionName,
    ?'principal' => ?Principal,
    ?'qualifier' => ?Qualifier,
    ?'revision_id' => string,
    ?'source_account' => ?SourceOwner,
    ?'source_arn' => ?Arn,
    ?'statement_id' => ?StatementId,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->event_source_token = $s['event_source_token'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->principal = $s['principal'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->source_account = $s['source_account'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
    $this->statement_id = $s['statement_id'] ?? '';
  }
}

class AddPermissionResponse {
  public string $statement;

  public function __construct(shape(
    ?'statement' => string,
  ) $s = shape()) {
    $this->statement = $s['statement'] ?? '';
  }
}

type AdditionalVersion = string;

type AdditionalVersionWeights = dict<AdditionalVersion, Weight>;

type Alias = string;

class AliasConfiguration {
  public ?FunctionArn $alias_arn;
  public ?Description $description;
  public ?Version $function_version;
  public ?Alias $name;
  public string $revision_id;
  public ?AliasRoutingConfiguration $routing_config;

  public function __construct(shape(
    ?'alias_arn' => ?FunctionArn,
    ?'description' => ?Description,
    ?'function_version' => ?Version,
    ?'name' => ?Alias,
    ?'revision_id' => string,
    ?'routing_config' => ?AliasRoutingConfiguration,
  ) $s = shape()) {
    $this->alias_arn = $s['alias_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->function_version = $s['function_version'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->routing_config = $s['routing_config'] ?? null;
  }
}

type AliasList = vec<AliasConfiguration>;

class AliasRoutingConfiguration {
  public ?AdditionalVersionWeights $additional_version_weights;

  public function __construct(shape(
    ?'additional_version_weights' => ?AdditionalVersionWeights,
  ) $s = shape()) {
    $this->additional_version_weights = $s['additional_version_weights'] ?? dict[];
  }
}

type Arn = string;

type BatchSize = int;

type BisectBatchOnFunctionError = bool;

type Blob = string;

type BlobStream = string;

type Boolean = bool;

class CodeStorageExceededException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type CompatibleRuntimes = vec<Runtime>;

class Concurrency {
  public ?ReservedConcurrentExecutions $reserved_concurrent_executions;

  public function __construct(shape(
    ?'reserved_concurrent_executions' => ?ReservedConcurrentExecutions,
  ) $s = shape()) {
    $this->reserved_concurrent_executions = $s['reserved_concurrent_executions'] ?? 0;
  }
}

class CreateAliasRequest {
  public ?Description $description;
  public ?FunctionName $function_name;
  public ?Version $function_version;
  public ?Alias $name;
  public ?AliasRoutingConfiguration $routing_config;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'function_name' => ?FunctionName,
    ?'function_version' => ?Version,
    ?'name' => ?Alias,
    ?'routing_config' => ?AliasRoutingConfiguration,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->function_version = $s['function_version'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->routing_config = $s['routing_config'] ?? null;
  }
}

class CreateEventSourceMappingRequest {
  public ?BatchSize $batch_size;
  public ?BisectBatchOnFunctionError $bisect_batch_on_function_error;
  public ?DestinationConfig $destination_config;
  public ?Enabled $enabled;
  public ?Arn $event_source_arn;
  public ?FunctionName $function_name;
  public ?MaximumBatchingWindowInSeconds $maximum_batching_window_in_seconds;
  public ?MaximumRecordAgeInSeconds $maximum_record_age_in_seconds;
  public ?MaximumRetryAttemptsEventSourceMapping $maximum_retry_attempts;
  public ?ParallelizationFactor $parallelization_factor;
  public ?EventSourcePosition $starting_position;
  public ?Date $starting_position_timestamp;

  public function __construct(shape(
    ?'batch_size' => ?BatchSize,
    ?'bisect_batch_on_function_error' => ?BisectBatchOnFunctionError,
    ?'destination_config' => ?DestinationConfig,
    ?'enabled' => ?Enabled,
    ?'event_source_arn' => ?Arn,
    ?'function_name' => ?FunctionName,
    ?'maximum_batching_window_in_seconds' => ?MaximumBatchingWindowInSeconds,
    ?'maximum_record_age_in_seconds' => ?MaximumRecordAgeInSeconds,
    ?'maximum_retry_attempts' => ?MaximumRetryAttemptsEventSourceMapping,
    ?'parallelization_factor' => ?ParallelizationFactor,
    ?'starting_position' => ?EventSourcePosition,
    ?'starting_position_timestamp' => ?Date,
  ) $s = shape()) {
    $this->batch_size = $s['batch_size'] ?? 0;
    $this->bisect_batch_on_function_error = $s['bisect_batch_on_function_error'] ?? false;
    $this->destination_config = $s['destination_config'] ?? null;
    $this->enabled = $s['enabled'] ?? false;
    $this->event_source_arn = $s['event_source_arn'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->maximum_batching_window_in_seconds = $s['maximum_batching_window_in_seconds'] ?? 0;
    $this->maximum_record_age_in_seconds = $s['maximum_record_age_in_seconds'] ?? 0;
    $this->maximum_retry_attempts = $s['maximum_retry_attempts'] ?? 0;
    $this->parallelization_factor = $s['parallelization_factor'] ?? 0;
    $this->starting_position = $s['starting_position'] ?? '';
    $this->starting_position_timestamp = $s['starting_position_timestamp'] ?? 0;
  }
}

class CreateFunctionRequest {
  public ?FunctionCode $code;
  public ?DeadLetterConfig $dead_letter_config;
  public ?Description $description;
  public ?Environment $environment;
  public ?FunctionName $function_name;
  public ?Handler $handler;
  public ?KMSKeyArn $kms_key_arn;
  public ?LayerList $layers;
  public ?MemorySize $memory_size;
  public bool $publish;
  public ?RoleArn $role;
  public ?Runtime $runtime;
  public ?Tags $tags;
  public ?Timeout $timeout;
  public ?TracingConfig $tracing_config;
  public ?VpcConfig $vpc_config;

  public function __construct(shape(
    ?'code' => ?FunctionCode,
    ?'dead_letter_config' => ?DeadLetterConfig,
    ?'description' => ?Description,
    ?'environment' => ?Environment,
    ?'function_name' => ?FunctionName,
    ?'handler' => ?Handler,
    ?'kms_key_arn' => ?KMSKeyArn,
    ?'layers' => ?LayerList,
    ?'memory_size' => ?MemorySize,
    ?'publish' => bool,
    ?'role' => ?RoleArn,
    ?'runtime' => ?Runtime,
    ?'tags' => ?Tags,
    ?'timeout' => ?Timeout,
    ?'tracing_config' => ?TracingConfig,
    ?'vpc_config' => ?VpcConfig,
  ) $s = shape()) {
    $this->code = $s['code'] ?? null;
    $this->dead_letter_config = $s['dead_letter_config'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->environment = $s['environment'] ?? null;
    $this->function_name = $s['function_name'] ?? '';
    $this->handler = $s['handler'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->layers = $s['layers'] ?? vec[];
    $this->memory_size = $s['memory_size'] ?? 0;
    $this->publish = $s['publish'] ?? false;
    $this->role = $s['role'] ?? '';
    $this->runtime = $s['runtime'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->timeout = $s['timeout'] ?? 0;
    $this->tracing_config = $s['tracing_config'] ?? null;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

type Date = int;

class DeadLetterConfig {
  public ?ResourceArn $target_arn;

  public function __construct(shape(
    ?'target_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class DeleteAliasRequest {
  public ?FunctionName $function_name;
  public ?Alias $name;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'name' => ?Alias,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DeleteEventSourceMappingRequest {
  public string $uuid;

  public function __construct(shape(
    ?'uuid' => string,
  ) $s = shape()) {
    $this->uuid = $s['uuid'] ?? '';
  }
}

class DeleteFunctionConcurrencyRequest {
  public ?FunctionName $function_name;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
  }
}

class DeleteFunctionEventInvokeConfigRequest {
  public ?FunctionName $function_name;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class DeleteFunctionRequest {
  public ?FunctionName $function_name;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class DeleteLayerVersionRequest {
  public ?LayerName $layer_name;
  public ?LayerVersionNumber $version_number;

  public function __construct(shape(
    ?'layer_name' => ?LayerName,
    ?'version_number' => ?LayerVersionNumber,
  ) $s = shape()) {
    $this->layer_name = $s['layer_name'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class DeleteProvisionedConcurrencyConfigRequest {
  public ?FunctionName $function_name;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

type Description = string;

type DestinationArn = string;

class DestinationConfig {
  public ?OnFailure $on_failure;
  public ?OnSuccess $on_success;

  public function __construct(shape(
    ?'on_failure' => ?OnFailure,
    ?'on_success' => ?OnSuccess,
  ) $s = shape()) {
    $this->on_failure = $s['on_failure'] ?? null;
    $this->on_success = $s['on_success'] ?? null;
  }
}

class EC2AccessDeniedException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class EC2ThrottledException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class EC2UnexpectedException {
  public string $ec_2_error_code;
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'ec_2_error_code' => string,
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->ec_2_error_code = $s['ec_2_error_code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ENILimitReachedException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type Enabled = bool;

class Environment {
  public ?EnvironmentVariables $variables;

  public function __construct(shape(
    ?'variables' => ?EnvironmentVariables,
  ) $s = shape()) {
    $this->variables = $s['variables'] ?? dict[];
  }
}

class EnvironmentError {
  public string $error_code;
  public ?SensitiveString $message;

  public function __construct(shape(
    ?'error_code' => string,
    ?'message' => ?SensitiveString,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class EnvironmentResponse {
  public ?EnvironmentError $error;
  public ?EnvironmentVariables $variables;

  public function __construct(shape(
    ?'error' => ?EnvironmentError,
    ?'variables' => ?EnvironmentVariables,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->variables = $s['variables'] ?? dict[];
  }
}

type EnvironmentVariableName = string;

type EnvironmentVariableValue = string;

type EnvironmentVariables = dict<EnvironmentVariableName, EnvironmentVariableValue>;

class EventSourceMappingConfiguration {
  public ?BatchSize $batch_size;
  public ?BisectBatchOnFunctionError $bisect_batch_on_function_error;
  public ?DestinationConfig $destination_config;
  public ?Arn $event_source_arn;
  public ?FunctionArn $function_arn;
  public ?Date $last_modified;
  public string $last_processing_result;
  public ?MaximumBatchingWindowInSeconds $maximum_batching_window_in_seconds;
  public ?MaximumRecordAgeInSeconds $maximum_record_age_in_seconds;
  public ?MaximumRetryAttemptsEventSourceMapping $maximum_retry_attempts;
  public ?ParallelizationFactor $parallelization_factor;
  public string $state;
  public string $state_transition_reason;
  public string $uuid;

  public function __construct(shape(
    ?'batch_size' => ?BatchSize,
    ?'bisect_batch_on_function_error' => ?BisectBatchOnFunctionError,
    ?'destination_config' => ?DestinationConfig,
    ?'event_source_arn' => ?Arn,
    ?'function_arn' => ?FunctionArn,
    ?'last_modified' => ?Date,
    ?'last_processing_result' => string,
    ?'maximum_batching_window_in_seconds' => ?MaximumBatchingWindowInSeconds,
    ?'maximum_record_age_in_seconds' => ?MaximumRecordAgeInSeconds,
    ?'maximum_retry_attempts' => ?MaximumRetryAttemptsEventSourceMapping,
    ?'parallelization_factor' => ?ParallelizationFactor,
    ?'state' => string,
    ?'state_transition_reason' => string,
    ?'uuid' => string,
  ) $s = shape()) {
    $this->batch_size = $s['batch_size'] ?? 0;
    $this->bisect_batch_on_function_error = $s['bisect_batch_on_function_error'] ?? false;
    $this->destination_config = $s['destination_config'] ?? null;
    $this->event_source_arn = $s['event_source_arn'] ?? '';
    $this->function_arn = $s['function_arn'] ?? '';
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->last_processing_result = $s['last_processing_result'] ?? '';
    $this->maximum_batching_window_in_seconds = $s['maximum_batching_window_in_seconds'] ?? 0;
    $this->maximum_record_age_in_seconds = $s['maximum_record_age_in_seconds'] ?? 0;
    $this->maximum_retry_attempts = $s['maximum_retry_attempts'] ?? 0;
    $this->parallelization_factor = $s['parallelization_factor'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->state_transition_reason = $s['state_transition_reason'] ?? '';
    $this->uuid = $s['uuid'] ?? '';
  }
}

type EventSourceMappingsList = vec<EventSourceMappingConfiguration>;

type EventSourcePosition = string;

type EventSourceToken = string;

type FunctionArn = string;

class FunctionCode {
  public ?S3Bucket $s_3_bucket;
  public ?S3Key $s_3_key;
  public ?S3ObjectVersion $s_3_object_version;
  public ?Blob $zip_file;

  public function __construct(shape(
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_key' => ?S3Key,
    ?'s_3_object_version' => ?S3ObjectVersion,
    ?'zip_file' => ?Blob,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
    $this->s_3_object_version = $s['s_3_object_version'] ?? '';
    $this->zip_file = $s['zip_file'] ?? '';
  }
}

class FunctionCodeLocation {
  public string $location;
  public string $repository_type;

  public function __construct(shape(
    ?'location' => string,
    ?'repository_type' => string,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
    $this->repository_type = $s['repository_type'] ?? '';
  }
}

class FunctionConfiguration {
  public string $code_sha_256;
  public ?Long $code_size;
  public ?DeadLetterConfig $dead_letter_config;
  public ?Description $description;
  public ?EnvironmentResponse $environment;
  public ?NameSpacedFunctionArn $function_arn;
  public ?NamespacedFunctionName $function_name;
  public ?Handler $handler;
  public ?KMSKeyArn $kms_key_arn;
  public ?Timestamp $last_modified;
  public ?LastUpdateStatus $last_update_status;
  public ?LastUpdateStatusReason $last_update_status_reason;
  public ?LastUpdateStatusReasonCode $last_update_status_reason_code;
  public ?LayersReferenceList $layers;
  public ?FunctionArn $master_arn;
  public ?MemorySize $memory_size;
  public string $revision_id;
  public ?RoleArn $role;
  public ?Runtime $runtime;
  public ?State $state;
  public ?StateReason $state_reason;
  public ?StateReasonCode $state_reason_code;
  public ?Timeout $timeout;
  public ?TracingConfigResponse $tracing_config;
  public ?Version $version;
  public ?VpcConfigResponse $vpc_config;

  public function __construct(shape(
    ?'code_sha_256' => string,
    ?'code_size' => ?Long,
    ?'dead_letter_config' => ?DeadLetterConfig,
    ?'description' => ?Description,
    ?'environment' => ?EnvironmentResponse,
    ?'function_arn' => ?NameSpacedFunctionArn,
    ?'function_name' => ?NamespacedFunctionName,
    ?'handler' => ?Handler,
    ?'kms_key_arn' => ?KMSKeyArn,
    ?'last_modified' => ?Timestamp,
    ?'last_update_status' => ?LastUpdateStatus,
    ?'last_update_status_reason' => ?LastUpdateStatusReason,
    ?'last_update_status_reason_code' => ?LastUpdateStatusReasonCode,
    ?'layers' => ?LayersReferenceList,
    ?'master_arn' => ?FunctionArn,
    ?'memory_size' => ?MemorySize,
    ?'revision_id' => string,
    ?'role' => ?RoleArn,
    ?'runtime' => ?Runtime,
    ?'state' => ?State,
    ?'state_reason' => ?StateReason,
    ?'state_reason_code' => ?StateReasonCode,
    ?'timeout' => ?Timeout,
    ?'tracing_config' => ?TracingConfigResponse,
    ?'version' => ?Version,
    ?'vpc_config' => ?VpcConfigResponse,
  ) $s = shape()) {
    $this->code_sha_256 = $s['code_sha_256'] ?? '';
    $this->code_size = $s['code_size'] ?? 0;
    $this->dead_letter_config = $s['dead_letter_config'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->environment = $s['environment'] ?? null;
    $this->function_arn = $s['function_arn'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->handler = $s['handler'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->last_modified = $s['last_modified'] ?? '';
    $this->last_update_status = $s['last_update_status'] ?? '';
    $this->last_update_status_reason = $s['last_update_status_reason'] ?? '';
    $this->last_update_status_reason_code = $s['last_update_status_reason_code'] ?? '';
    $this->layers = $s['layers'] ?? vec[];
    $this->master_arn = $s['master_arn'] ?? '';
    $this->memory_size = $s['memory_size'] ?? 0;
    $this->revision_id = $s['revision_id'] ?? '';
    $this->role = $s['role'] ?? '';
    $this->runtime = $s['runtime'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->state_reason = $s['state_reason'] ?? '';
    $this->state_reason_code = $s['state_reason_code'] ?? '';
    $this->timeout = $s['timeout'] ?? 0;
    $this->tracing_config = $s['tracing_config'] ?? null;
    $this->version = $s['version'] ?? '';
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class FunctionEventInvokeConfig {
  public ?DestinationConfig $destination_config;
  public ?FunctionArn $function_arn;
  public ?Date $last_modified;
  public ?MaximumEventAgeInSeconds $maximum_event_age_in_seconds;
  public ?MaximumRetryAttempts $maximum_retry_attempts;

  public function __construct(shape(
    ?'destination_config' => ?DestinationConfig,
    ?'function_arn' => ?FunctionArn,
    ?'last_modified' => ?Date,
    ?'maximum_event_age_in_seconds' => ?MaximumEventAgeInSeconds,
    ?'maximum_retry_attempts' => ?MaximumRetryAttempts,
  ) $s = shape()) {
    $this->destination_config = $s['destination_config'] ?? null;
    $this->function_arn = $s['function_arn'] ?? '';
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->maximum_event_age_in_seconds = $s['maximum_event_age_in_seconds'] ?? 0;
    $this->maximum_retry_attempts = $s['maximum_retry_attempts'] ?? 0;
  }
}

type FunctionEventInvokeConfigList = vec<FunctionEventInvokeConfig>;

type FunctionList = vec<FunctionConfiguration>;

type FunctionName = string;

type FunctionVersion = string;

class GetAccountSettingsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAccountSettingsResponse {
  public ?AccountLimit $account_limit;
  public ?AccountUsage $account_usage;

  public function __construct(shape(
    ?'account_limit' => ?AccountLimit,
    ?'account_usage' => ?AccountUsage,
  ) $s = shape()) {
    $this->account_limit = $s['account_limit'] ?? null;
    $this->account_usage = $s['account_usage'] ?? null;
  }
}

class GetAliasRequest {
  public ?FunctionName $function_name;
  public ?Alias $name;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'name' => ?Alias,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GetEventSourceMappingRequest {
  public string $uuid;

  public function __construct(shape(
    ?'uuid' => string,
  ) $s = shape()) {
    $this->uuid = $s['uuid'] ?? '';
  }
}

class GetFunctionConcurrencyRequest {
  public ?FunctionName $function_name;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
  }
}

class GetFunctionConcurrencyResponse {
  public ?ReservedConcurrentExecutions $reserved_concurrent_executions;

  public function __construct(shape(
    ?'reserved_concurrent_executions' => ?ReservedConcurrentExecutions,
  ) $s = shape()) {
    $this->reserved_concurrent_executions = $s['reserved_concurrent_executions'] ?? 0;
  }
}

class GetFunctionConfigurationRequest {
  public ?NamespacedFunctionName $function_name;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?NamespacedFunctionName,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class GetFunctionEventInvokeConfigRequest {
  public ?FunctionName $function_name;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class GetFunctionRequest {
  public ?NamespacedFunctionName $function_name;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?NamespacedFunctionName,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class GetFunctionResponse {
  public ?FunctionCodeLocation $code;
  public ?Concurrency $concurrency;
  public ?FunctionConfiguration $configuration;
  public ?Tags $tags;

  public function __construct(shape(
    ?'code' => ?FunctionCodeLocation,
    ?'concurrency' => ?Concurrency,
    ?'configuration' => ?FunctionConfiguration,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->code = $s['code'] ?? null;
    $this->concurrency = $s['concurrency'] ?? null;
    $this->configuration = $s['configuration'] ?? null;
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetLayerVersionByArnRequest {
  public ?LayerVersionArn $arn;

  public function __construct(shape(
    ?'arn' => ?LayerVersionArn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetLayerVersionPolicyRequest {
  public ?LayerName $layer_name;
  public ?LayerVersionNumber $version_number;

  public function __construct(shape(
    ?'layer_name' => ?LayerName,
    ?'version_number' => ?LayerVersionNumber,
  ) $s = shape()) {
    $this->layer_name = $s['layer_name'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class GetLayerVersionPolicyResponse {
  public string $policy;
  public string $revision_id;

  public function __construct(shape(
    ?'policy' => string,
    ?'revision_id' => string,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class GetLayerVersionRequest {
  public ?LayerName $layer_name;
  public ?LayerVersionNumber $version_number;

  public function __construct(shape(
    ?'layer_name' => ?LayerName,
    ?'version_number' => ?LayerVersionNumber,
  ) $s = shape()) {
    $this->layer_name = $s['layer_name'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class GetLayerVersionResponse {
  public ?CompatibleRuntimes $compatible_runtimes;
  public ?LayerVersionContentOutput $content;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?LayerArn $layer_arn;
  public ?LayerVersionArn $layer_version_arn;
  public ?LicenseInfo $license_info;
  public ?LayerVersionNumber $version;

  public function __construct(shape(
    ?'compatible_runtimes' => ?CompatibleRuntimes,
    ?'content' => ?LayerVersionContentOutput,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'layer_arn' => ?LayerArn,
    ?'layer_version_arn' => ?LayerVersionArn,
    ?'license_info' => ?LicenseInfo,
    ?'version' => ?LayerVersionNumber,
  ) $s = shape()) {
    $this->compatible_runtimes = $s['compatible_runtimes'] ?? vec[];
    $this->content = $s['content'] ?? null;
    $this->created_date = $s['created_date'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->layer_arn = $s['layer_arn'] ?? '';
    $this->layer_version_arn = $s['layer_version_arn'] ?? '';
    $this->license_info = $s['license_info'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class GetPolicyRequest {
  public ?NamespacedFunctionName $function_name;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?NamespacedFunctionName,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class GetPolicyResponse {
  public string $policy;
  public string $revision_id;

  public function __construct(shape(
    ?'policy' => string,
    ?'revision_id' => string,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class GetProvisionedConcurrencyConfigRequest {
  public ?FunctionName $function_name;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class GetProvisionedConcurrencyConfigResponse {
  public ?NonNegativeInteger $allocated_provisioned_concurrent_executions;
  public ?NonNegativeInteger $available_provisioned_concurrent_executions;
  public ?Timestamp $last_modified;
  public ?PositiveInteger $requested_provisioned_concurrent_executions;
  public ?ProvisionedConcurrencyStatusEnum $status;
  public string $status_reason;

  public function __construct(shape(
    ?'allocated_provisioned_concurrent_executions' => ?NonNegativeInteger,
    ?'available_provisioned_concurrent_executions' => ?NonNegativeInteger,
    ?'last_modified' => ?Timestamp,
    ?'requested_provisioned_concurrent_executions' => ?PositiveInteger,
    ?'status' => ?ProvisionedConcurrencyStatusEnum,
    ?'status_reason' => string,
  ) $s = shape()) {
    $this->allocated_provisioned_concurrent_executions = $s['allocated_provisioned_concurrent_executions'] ?? 0;
    $this->available_provisioned_concurrent_executions = $s['available_provisioned_concurrent_executions'] ?? 0;
    $this->last_modified = $s['last_modified'] ?? '';
    $this->requested_provisioned_concurrent_executions = $s['requested_provisioned_concurrent_executions'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
  }
}

type Handler = string;

type HttpStatus = int;

type Integer = int;

class InvalidParameterValueException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestContentException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRuntimeException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InvalidSecurityGroupIDException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InvalidSubnetIDException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InvalidZipFileException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InvocationRequest {
  public string $client_context;
  public ?NamespacedFunctionName $function_name;
  public ?InvocationType $invocation_type;
  public ?LogType $log_type;
  public ?Blob $payload;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'client_context' => string,
    ?'function_name' => ?NamespacedFunctionName,
    ?'invocation_type' => ?InvocationType,
    ?'log_type' => ?LogType,
    ?'payload' => ?Blob,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->client_context = $s['client_context'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->invocation_type = $s['invocation_type'] ?? '';
    $this->log_type = $s['log_type'] ?? '';
    $this->payload = $s['payload'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class InvocationResponse {
  public ?Version $executed_version;
  public string $function_error;
  public string $log_result;
  public ?Blob $payload;
  public int $status_code;

  public function __construct(shape(
    ?'executed_version' => ?Version,
    ?'function_error' => string,
    ?'log_result' => string,
    ?'payload' => ?Blob,
    ?'status_code' => int,
  ) $s = shape()) {
    $this->executed_version = $s['executed_version'] ?? '';
    $this->function_error = $s['function_error'] ?? '';
    $this->log_result = $s['log_result'] ?? '';
    $this->payload = $s['payload'] ?? '';
    $this->status_code = $s['status_code'] ?? 0;
  }
}

type InvocationType = string;

class InvokeAsyncRequest {
  public ?NamespacedFunctionName $function_name;
  public ?BlobStream $invoke_args;

  public function __construct(shape(
    ?'function_name' => ?NamespacedFunctionName,
    ?'invoke_args' => ?BlobStream,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->invoke_args = $s['invoke_args'] ?? '';
  }
}

class InvokeAsyncResponse {
  public ?HttpStatus $status;

  public function __construct(shape(
    ?'status' => ?HttpStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? 0;
  }
}

class KMSAccessDeniedException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class KMSDisabledException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class KMSInvalidStateException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type KMSKeyArn = string;

class KMSNotFoundException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type LastUpdateStatus = string;

type LastUpdateStatusReason = string;

type LastUpdateStatusReasonCode = string;

class Layer {
  public ?LayerVersionArn $arn;
  public ?Long $code_size;

  public function __construct(shape(
    ?'arn' => ?LayerVersionArn,
    ?'code_size' => ?Long,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->code_size = $s['code_size'] ?? 0;
  }
}

type LayerArn = string;

type LayerList = vec<LayerVersionArn>;

type LayerName = string;

type LayerPermissionAllowedAction = string;

type LayerPermissionAllowedPrincipal = string;

type LayerVersionArn = string;

class LayerVersionContentInput {
  public ?S3Bucket $s_3_bucket;
  public ?S3Key $s_3_key;
  public ?S3ObjectVersion $s_3_object_version;
  public ?Blob $zip_file;

  public function __construct(shape(
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_key' => ?S3Key,
    ?'s_3_object_version' => ?S3ObjectVersion,
    ?'zip_file' => ?Blob,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
    $this->s_3_object_version = $s['s_3_object_version'] ?? '';
    $this->zip_file = $s['zip_file'] ?? '';
  }
}

class LayerVersionContentOutput {
  public string $code_sha_256;
  public ?Long $code_size;
  public string $location;

  public function __construct(shape(
    ?'code_sha_256' => string,
    ?'code_size' => ?Long,
    ?'location' => string,
  ) $s = shape()) {
    $this->code_sha_256 = $s['code_sha_256'] ?? '';
    $this->code_size = $s['code_size'] ?? 0;
    $this->location = $s['location'] ?? '';
  }
}

type LayerVersionNumber = int;

type LayerVersionsList = vec<LayerVersionsListItem>;

class LayerVersionsListItem {
  public ?CompatibleRuntimes $compatible_runtimes;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?LayerVersionArn $layer_version_arn;
  public ?LicenseInfo $license_info;
  public ?LayerVersionNumber $version;

  public function __construct(shape(
    ?'compatible_runtimes' => ?CompatibleRuntimes,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'layer_version_arn' => ?LayerVersionArn,
    ?'license_info' => ?LicenseInfo,
    ?'version' => ?LayerVersionNumber,
  ) $s = shape()) {
    $this->compatible_runtimes = $s['compatible_runtimes'] ?? vec[];
    $this->created_date = $s['created_date'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->layer_version_arn = $s['layer_version_arn'] ?? '';
    $this->license_info = $s['license_info'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

type LayersList = vec<LayersListItem>;

class LayersListItem {
  public ?LayerVersionsListItem $latest_matching_version;
  public ?LayerArn $layer_arn;
  public ?LayerName $layer_name;

  public function __construct(shape(
    ?'latest_matching_version' => ?LayerVersionsListItem,
    ?'layer_arn' => ?LayerArn,
    ?'layer_name' => ?LayerName,
  ) $s = shape()) {
    $this->latest_matching_version = $s['latest_matching_version'] ?? null;
    $this->layer_arn = $s['layer_arn'] ?? '';
    $this->layer_name = $s['layer_name'] ?? '';
  }
}

type LayersReferenceList = vec<Layer>;

type LicenseInfo = string;

class ListAliasesRequest {
  public ?FunctionName $function_name;
  public ?Version $function_version;
  public string $marker;
  public ?MaxListItems $max_items;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'function_version' => ?Version,
    ?'marker' => string,
    ?'max_items' => ?MaxListItems,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->function_version = $s['function_version'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListAliasesResponse {
  public ?AliasList $aliases;
  public string $next_marker;

  public function __construct(shape(
    ?'aliases' => ?AliasList,
    ?'next_marker' => string,
  ) $s = shape()) {
    $this->aliases = $s['aliases'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListEventSourceMappingsRequest {
  public ?Arn $event_source_arn;
  public ?FunctionName $function_name;
  public string $marker;
  public ?MaxListItems $max_items;

  public function __construct(shape(
    ?'event_source_arn' => ?Arn,
    ?'function_name' => ?FunctionName,
    ?'marker' => string,
    ?'max_items' => ?MaxListItems,
  ) $s = shape()) {
    $this->event_source_arn = $s['event_source_arn'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListEventSourceMappingsResponse {
  public ?EventSourceMappingsList $event_source_mappings;
  public string $next_marker;

  public function __construct(shape(
    ?'event_source_mappings' => ?EventSourceMappingsList,
    ?'next_marker' => string,
  ) $s = shape()) {
    $this->event_source_mappings = $s['event_source_mappings'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListFunctionEventInvokeConfigsRequest {
  public ?FunctionName $function_name;
  public string $marker;
  public ?MaxFunctionEventInvokeConfigListItems $max_items;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'marker' => string,
    ?'max_items' => ?MaxFunctionEventInvokeConfigListItems,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListFunctionEventInvokeConfigsResponse {
  public ?FunctionEventInvokeConfigList $function_event_invoke_configs;
  public string $next_marker;

  public function __construct(shape(
    ?'function_event_invoke_configs' => ?FunctionEventInvokeConfigList,
    ?'next_marker' => string,
  ) $s = shape()) {
    $this->function_event_invoke_configs = $s['function_event_invoke_configs'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListFunctionsRequest {
  public ?FunctionVersion $function_version;
  public string $marker;
  public ?MasterRegion $master_region;
  public ?MaxListItems $max_items;

  public function __construct(shape(
    ?'function_version' => ?FunctionVersion,
    ?'marker' => string,
    ?'master_region' => ?MasterRegion,
    ?'max_items' => ?MaxListItems,
  ) $s = shape()) {
    $this->function_version = $s['function_version'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->master_region = $s['master_region'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListFunctionsResponse {
  public ?FunctionList $functions;
  public string $next_marker;

  public function __construct(shape(
    ?'functions' => ?FunctionList,
    ?'next_marker' => string,
  ) $s = shape()) {
    $this->functions = $s['functions'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListLayerVersionsRequest {
  public ?Runtime $compatible_runtime;
  public ?LayerName $layer_name;
  public string $marker;
  public ?MaxLayerListItems $max_items;

  public function __construct(shape(
    ?'compatible_runtime' => ?Runtime,
    ?'layer_name' => ?LayerName,
    ?'marker' => string,
    ?'max_items' => ?MaxLayerListItems,
  ) $s = shape()) {
    $this->compatible_runtime = $s['compatible_runtime'] ?? '';
    $this->layer_name = $s['layer_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListLayerVersionsResponse {
  public ?LayerVersionsList $layer_versions;
  public string $next_marker;

  public function __construct(shape(
    ?'layer_versions' => ?LayerVersionsList,
    ?'next_marker' => string,
  ) $s = shape()) {
    $this->layer_versions = $s['layer_versions'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListLayersRequest {
  public ?Runtime $compatible_runtime;
  public string $marker;
  public ?MaxLayerListItems $max_items;

  public function __construct(shape(
    ?'compatible_runtime' => ?Runtime,
    ?'marker' => string,
    ?'max_items' => ?MaxLayerListItems,
  ) $s = shape()) {
    $this->compatible_runtime = $s['compatible_runtime'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListLayersResponse {
  public ?LayersList $layers;
  public string $next_marker;

  public function __construct(shape(
    ?'layers' => ?LayersList,
    ?'next_marker' => string,
  ) $s = shape()) {
    $this->layers = $s['layers'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListProvisionedConcurrencyConfigsRequest {
  public ?FunctionName $function_name;
  public string $marker;
  public ?MaxProvisionedConcurrencyConfigListItems $max_items;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'marker' => string,
    ?'max_items' => ?MaxProvisionedConcurrencyConfigListItems,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListProvisionedConcurrencyConfigsResponse {
  public string $next_marker;
  public ?ProvisionedConcurrencyConfigList $provisioned_concurrency_configs;

  public function __construct(shape(
    ?'next_marker' => string,
    ?'provisioned_concurrency_configs' => ?ProvisionedConcurrencyConfigList,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->provisioned_concurrency_configs = $s['provisioned_concurrency_configs'] ?? vec[];
  }
}

class ListTagsRequest {
  public ?FunctionArn $resource;

  public function __construct(shape(
    ?'resource' => ?FunctionArn,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
  }
}

class ListTagsResponse {
  public ?Tags $tags;

  public function __construct(shape(
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListVersionsByFunctionRequest {
  public ?NamespacedFunctionName $function_name;
  public string $marker;
  public ?MaxListItems $max_items;

  public function __construct(shape(
    ?'function_name' => ?NamespacedFunctionName,
    ?'marker' => string,
    ?'max_items' => ?MaxListItems,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListVersionsByFunctionResponse {
  public string $next_marker;
  public ?FunctionList $versions;

  public function __construct(shape(
    ?'next_marker' => string,
    ?'versions' => ?FunctionList,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

type LogType = string;

type Long = int;

type MasterRegion = string;

type MaxFunctionEventInvokeConfigListItems = int;

type MaxLayerListItems = int;

type MaxListItems = int;

type MaxProvisionedConcurrencyConfigListItems = int;

type MaximumBatchingWindowInSeconds = int;

type MaximumEventAgeInSeconds = int;

type MaximumRecordAgeInSeconds = int;

type MaximumRetryAttempts = int;

type MaximumRetryAttemptsEventSourceMapping = int;

type MemorySize = int;

type NameSpacedFunctionArn = string;

type NamespacedFunctionName = string;

type NamespacedStatementId = string;

type NonNegativeInteger = int;

class OnFailure {
  public ?DestinationArn $destination;

  public function __construct(shape(
    ?'destination' => ?DestinationArn,
  ) $s = shape()) {
    $this->destination = $s['destination'] ?? '';
  }
}

class OnSuccess {
  public ?DestinationArn $destination;

  public function __construct(shape(
    ?'destination' => ?DestinationArn,
  ) $s = shape()) {
    $this->destination = $s['destination'] ?? '';
  }
}

type OrganizationId = string;

type ParallelizationFactor = int;

class PolicyLengthExceededException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type PositiveInteger = int;

class PreconditionFailedException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type Principal = string;

type ProvisionedConcurrencyConfigList = vec<ProvisionedConcurrencyConfigListItem>;

class ProvisionedConcurrencyConfigListItem {
  public ?NonNegativeInteger $allocated_provisioned_concurrent_executions;
  public ?NonNegativeInteger $available_provisioned_concurrent_executions;
  public ?FunctionArn $function_arn;
  public ?Timestamp $last_modified;
  public ?PositiveInteger $requested_provisioned_concurrent_executions;
  public ?ProvisionedConcurrencyStatusEnum $status;
  public string $status_reason;

  public function __construct(shape(
    ?'allocated_provisioned_concurrent_executions' => ?NonNegativeInteger,
    ?'available_provisioned_concurrent_executions' => ?NonNegativeInteger,
    ?'function_arn' => ?FunctionArn,
    ?'last_modified' => ?Timestamp,
    ?'requested_provisioned_concurrent_executions' => ?PositiveInteger,
    ?'status' => ?ProvisionedConcurrencyStatusEnum,
    ?'status_reason' => string,
  ) $s = shape()) {
    $this->allocated_provisioned_concurrent_executions = $s['allocated_provisioned_concurrent_executions'] ?? 0;
    $this->available_provisioned_concurrent_executions = $s['available_provisioned_concurrent_executions'] ?? 0;
    $this->function_arn = $s['function_arn'] ?? '';
    $this->last_modified = $s['last_modified'] ?? '';
    $this->requested_provisioned_concurrent_executions = $s['requested_provisioned_concurrent_executions'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
  }
}

class ProvisionedConcurrencyConfigNotFoundException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ProvisionedConcurrencyStatusEnum = string;

class PublishLayerVersionRequest {
  public ?CompatibleRuntimes $compatible_runtimes;
  public ?LayerVersionContentInput $content;
  public ?Description $description;
  public ?LayerName $layer_name;
  public ?LicenseInfo $license_info;

  public function __construct(shape(
    ?'compatible_runtimes' => ?CompatibleRuntimes,
    ?'content' => ?LayerVersionContentInput,
    ?'description' => ?Description,
    ?'layer_name' => ?LayerName,
    ?'license_info' => ?LicenseInfo,
  ) $s = shape()) {
    $this->compatible_runtimes = $s['compatible_runtimes'] ?? vec[];
    $this->content = $s['content'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->layer_name = $s['layer_name'] ?? '';
    $this->license_info = $s['license_info'] ?? '';
  }
}

class PublishLayerVersionResponse {
  public ?CompatibleRuntimes $compatible_runtimes;
  public ?LayerVersionContentOutput $content;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?LayerArn $layer_arn;
  public ?LayerVersionArn $layer_version_arn;
  public ?LicenseInfo $license_info;
  public ?LayerVersionNumber $version;

  public function __construct(shape(
    ?'compatible_runtimes' => ?CompatibleRuntimes,
    ?'content' => ?LayerVersionContentOutput,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'layer_arn' => ?LayerArn,
    ?'layer_version_arn' => ?LayerVersionArn,
    ?'license_info' => ?LicenseInfo,
    ?'version' => ?LayerVersionNumber,
  ) $s = shape()) {
    $this->compatible_runtimes = $s['compatible_runtimes'] ?? vec[];
    $this->content = $s['content'] ?? null;
    $this->created_date = $s['created_date'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->layer_arn = $s['layer_arn'] ?? '';
    $this->layer_version_arn = $s['layer_version_arn'] ?? '';
    $this->license_info = $s['license_info'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class PublishVersionRequest {
  public string $code_sha_256;
  public ?Description $description;
  public ?FunctionName $function_name;
  public string $revision_id;

  public function __construct(shape(
    ?'code_sha_256' => string,
    ?'description' => ?Description,
    ?'function_name' => ?FunctionName,
    ?'revision_id' => string,
  ) $s = shape()) {
    $this->code_sha_256 = $s['code_sha_256'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class PutFunctionConcurrencyRequest {
  public ?FunctionName $function_name;
  public ?ReservedConcurrentExecutions $reserved_concurrent_executions;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'reserved_concurrent_executions' => ?ReservedConcurrentExecutions,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->reserved_concurrent_executions = $s['reserved_concurrent_executions'] ?? 0;
  }
}

class PutFunctionEventInvokeConfigRequest {
  public ?DestinationConfig $destination_config;
  public ?FunctionName $function_name;
  public ?MaximumEventAgeInSeconds $maximum_event_age_in_seconds;
  public ?MaximumRetryAttempts $maximum_retry_attempts;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'destination_config' => ?DestinationConfig,
    ?'function_name' => ?FunctionName,
    ?'maximum_event_age_in_seconds' => ?MaximumEventAgeInSeconds,
    ?'maximum_retry_attempts' => ?MaximumRetryAttempts,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->destination_config = $s['destination_config'] ?? null;
    $this->function_name = $s['function_name'] ?? '';
    $this->maximum_event_age_in_seconds = $s['maximum_event_age_in_seconds'] ?? 0;
    $this->maximum_retry_attempts = $s['maximum_retry_attempts'] ?? 0;
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class PutProvisionedConcurrencyConfigRequest {
  public ?FunctionName $function_name;
  public ?PositiveInteger $provisioned_concurrent_executions;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'provisioned_concurrent_executions' => ?PositiveInteger,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->provisioned_concurrent_executions = $s['provisioned_concurrent_executions'] ?? 0;
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

class PutProvisionedConcurrencyConfigResponse {
  public ?NonNegativeInteger $allocated_provisioned_concurrent_executions;
  public ?NonNegativeInteger $available_provisioned_concurrent_executions;
  public ?Timestamp $last_modified;
  public ?PositiveInteger $requested_provisioned_concurrent_executions;
  public ?ProvisionedConcurrencyStatusEnum $status;
  public string $status_reason;

  public function __construct(shape(
    ?'allocated_provisioned_concurrent_executions' => ?NonNegativeInteger,
    ?'available_provisioned_concurrent_executions' => ?NonNegativeInteger,
    ?'last_modified' => ?Timestamp,
    ?'requested_provisioned_concurrent_executions' => ?PositiveInteger,
    ?'status' => ?ProvisionedConcurrencyStatusEnum,
    ?'status_reason' => string,
  ) $s = shape()) {
    $this->allocated_provisioned_concurrent_executions = $s['allocated_provisioned_concurrent_executions'] ?? 0;
    $this->available_provisioned_concurrent_executions = $s['available_provisioned_concurrent_executions'] ?? 0;
    $this->last_modified = $s['last_modified'] ?? '';
    $this->requested_provisioned_concurrent_executions = $s['requested_provisioned_concurrent_executions'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
  }
}

type Qualifier = string;

class RemoveLayerVersionPermissionRequest {
  public ?LayerName $layer_name;
  public string $revision_id;
  public ?StatementId $statement_id;
  public ?LayerVersionNumber $version_number;

  public function __construct(shape(
    ?'layer_name' => ?LayerName,
    ?'revision_id' => string,
    ?'statement_id' => ?StatementId,
    ?'version_number' => ?LayerVersionNumber,
  ) $s = shape()) {
    $this->layer_name = $s['layer_name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->statement_id = $s['statement_id'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

class RemovePermissionRequest {
  public ?FunctionName $function_name;
  public ?Qualifier $qualifier;
  public string $revision_id;
  public ?NamespacedStatementId $statement_id;

  public function __construct(shape(
    ?'function_name' => ?FunctionName,
    ?'qualifier' => ?Qualifier,
    ?'revision_id' => string,
    ?'statement_id' => ?NamespacedStatementId,
  ) $s = shape()) {
    $this->function_name = $s['function_name'] ?? '';
    $this->qualifier = $s['qualifier'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->statement_id = $s['statement_id'] ?? '';
  }
}

class RequestTooLargeException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ReservedConcurrentExecutions = int;

type ResourceArn = string;

class ResourceConflictException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ResourceInUseException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ResourceNotFoundException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ResourceNotReadyException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type RoleArn = string;

type Runtime = string;

type S3Bucket = string;

type S3Key = string;

type S3ObjectVersion = string;

type SecurityGroupId = string;

type SecurityGroupIds = vec<SecurityGroupId>;

type SensitiveString = string;

class ServiceException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type SourceOwner = string;

type State = string;

type StateReason = string;

type StateReasonCode = string;

type StatementId = string;

type String = string;

class SubnetIPAddressLimitReachedException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

class TagResourceRequest {
  public ?FunctionArn $resource;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource' => ?FunctionArn,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

type ThrottleReason = string;

type Timeout = int;

type Timestamp = string;

class TooManyRequestsException {
  public ?ThrottleReason $reason;
  public string $type;
  public string $message;
  public string $retry_after_seconds;

  public function __construct(shape(
    ?'reason' => ?ThrottleReason,
    ?'type' => string,
    ?'message' => string,
    ?'retry_after_seconds' => string,
  ) $s = shape()) {
    $this->reason = $s['reason'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? '';
  }
}

class TracingConfig {
  public ?TracingMode $mode;

  public function __construct(shape(
    ?'mode' => ?TracingMode,
  ) $s = shape()) {
    $this->mode = $s['mode'] ?? '';
  }
}

class TracingConfigResponse {
  public ?TracingMode $mode;

  public function __construct(shape(
    ?'mode' => ?TracingMode,
  ) $s = shape()) {
    $this->mode = $s['mode'] ?? '';
  }
}

type TracingMode = string;

type UnreservedConcurrentExecutions = int;

class UnsupportedMediaTypeException {
  public string $type;
  public string $message;

  public function __construct(shape(
    ?'type' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?FunctionArn $resource;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource' => ?FunctionArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateAliasRequest {
  public ?Description $description;
  public ?FunctionName $function_name;
  public ?Version $function_version;
  public ?Alias $name;
  public string $revision_id;
  public ?AliasRoutingConfiguration $routing_config;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'function_name' => ?FunctionName,
    ?'function_version' => ?Version,
    ?'name' => ?Alias,
    ?'revision_id' => string,
    ?'routing_config' => ?AliasRoutingConfiguration,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->function_version = $s['function_version'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->routing_config = $s['routing_config'] ?? null;
  }
}

class UpdateEventSourceMappingRequest {
  public ?BatchSize $batch_size;
  public ?BisectBatchOnFunctionError $bisect_batch_on_function_error;
  public ?DestinationConfig $destination_config;
  public ?Enabled $enabled;
  public ?FunctionName $function_name;
  public ?MaximumBatchingWindowInSeconds $maximum_batching_window_in_seconds;
  public ?MaximumRecordAgeInSeconds $maximum_record_age_in_seconds;
  public ?MaximumRetryAttemptsEventSourceMapping $maximum_retry_attempts;
  public ?ParallelizationFactor $parallelization_factor;
  public string $uuid;

  public function __construct(shape(
    ?'batch_size' => ?BatchSize,
    ?'bisect_batch_on_function_error' => ?BisectBatchOnFunctionError,
    ?'destination_config' => ?DestinationConfig,
    ?'enabled' => ?Enabled,
    ?'function_name' => ?FunctionName,
    ?'maximum_batching_window_in_seconds' => ?MaximumBatchingWindowInSeconds,
    ?'maximum_record_age_in_seconds' => ?MaximumRecordAgeInSeconds,
    ?'maximum_retry_attempts' => ?MaximumRetryAttemptsEventSourceMapping,
    ?'parallelization_factor' => ?ParallelizationFactor,
    ?'uuid' => string,
  ) $s = shape()) {
    $this->batch_size = $s['batch_size'] ?? 0;
    $this->bisect_batch_on_function_error = $s['bisect_batch_on_function_error'] ?? false;
    $this->destination_config = $s['destination_config'] ?? null;
    $this->enabled = $s['enabled'] ?? false;
    $this->function_name = $s['function_name'] ?? '';
    $this->maximum_batching_window_in_seconds = $s['maximum_batching_window_in_seconds'] ?? 0;
    $this->maximum_record_age_in_seconds = $s['maximum_record_age_in_seconds'] ?? 0;
    $this->maximum_retry_attempts = $s['maximum_retry_attempts'] ?? 0;
    $this->parallelization_factor = $s['parallelization_factor'] ?? 0;
    $this->uuid = $s['uuid'] ?? '';
  }
}

class UpdateFunctionCodeRequest {
  public bool $dry_run;
  public ?FunctionName $function_name;
  public bool $publish;
  public string $revision_id;
  public ?S3Bucket $s_3_bucket;
  public ?S3Key $s_3_key;
  public ?S3ObjectVersion $s_3_object_version;
  public ?Blob $zip_file;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'function_name' => ?FunctionName,
    ?'publish' => bool,
    ?'revision_id' => string,
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_key' => ?S3Key,
    ?'s_3_object_version' => ?S3ObjectVersion,
    ?'zip_file' => ?Blob,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->function_name = $s['function_name'] ?? '';
    $this->publish = $s['publish'] ?? false;
    $this->revision_id = $s['revision_id'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
    $this->s_3_object_version = $s['s_3_object_version'] ?? '';
    $this->zip_file = $s['zip_file'] ?? '';
  }
}

class UpdateFunctionConfigurationRequest {
  public ?DeadLetterConfig $dead_letter_config;
  public ?Description $description;
  public ?Environment $environment;
  public ?FunctionName $function_name;
  public ?Handler $handler;
  public ?KMSKeyArn $kms_key_arn;
  public ?LayerList $layers;
  public ?MemorySize $memory_size;
  public string $revision_id;
  public ?RoleArn $role;
  public ?Runtime $runtime;
  public ?Timeout $timeout;
  public ?TracingConfig $tracing_config;
  public ?VpcConfig $vpc_config;

  public function __construct(shape(
    ?'dead_letter_config' => ?DeadLetterConfig,
    ?'description' => ?Description,
    ?'environment' => ?Environment,
    ?'function_name' => ?FunctionName,
    ?'handler' => ?Handler,
    ?'kms_key_arn' => ?KMSKeyArn,
    ?'layers' => ?LayerList,
    ?'memory_size' => ?MemorySize,
    ?'revision_id' => string,
    ?'role' => ?RoleArn,
    ?'runtime' => ?Runtime,
    ?'timeout' => ?Timeout,
    ?'tracing_config' => ?TracingConfig,
    ?'vpc_config' => ?VpcConfig,
  ) $s = shape()) {
    $this->dead_letter_config = $s['dead_letter_config'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->environment = $s['environment'] ?? null;
    $this->function_name = $s['function_name'] ?? '';
    $this->handler = $s['handler'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->layers = $s['layers'] ?? vec[];
    $this->memory_size = $s['memory_size'] ?? 0;
    $this->revision_id = $s['revision_id'] ?? '';
    $this->role = $s['role'] ?? '';
    $this->runtime = $s['runtime'] ?? '';
    $this->timeout = $s['timeout'] ?? 0;
    $this->tracing_config = $s['tracing_config'] ?? null;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class UpdateFunctionEventInvokeConfigRequest {
  public ?DestinationConfig $destination_config;
  public ?FunctionName $function_name;
  public ?MaximumEventAgeInSeconds $maximum_event_age_in_seconds;
  public ?MaximumRetryAttempts $maximum_retry_attempts;
  public ?Qualifier $qualifier;

  public function __construct(shape(
    ?'destination_config' => ?DestinationConfig,
    ?'function_name' => ?FunctionName,
    ?'maximum_event_age_in_seconds' => ?MaximumEventAgeInSeconds,
    ?'maximum_retry_attempts' => ?MaximumRetryAttempts,
    ?'qualifier' => ?Qualifier,
  ) $s = shape()) {
    $this->destination_config = $s['destination_config'] ?? null;
    $this->function_name = $s['function_name'] ?? '';
    $this->maximum_event_age_in_seconds = $s['maximum_event_age_in_seconds'] ?? 0;
    $this->maximum_retry_attempts = $s['maximum_retry_attempts'] ?? 0;
    $this->qualifier = $s['qualifier'] ?? '';
  }
}

type Version = string;

class VpcConfig {
  public ?SecurityGroupIds $security_group_ids;
  public ?SubnetIds $subnet_ids;

  public function __construct(shape(
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'subnet_ids' => ?SubnetIds,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class VpcConfigResponse {
  public ?SecurityGroupIds $security_group_ids;
  public ?SubnetIds $subnet_ids;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'subnet_ids' => ?SubnetIds,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type VpcId = string;

type Weight = float;

