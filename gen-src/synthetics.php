<?hh // strict
namespace slack\aws\synthetics;

interface synthetics {
  public function CreateCanary(CreateCanaryRequest $in): Awaitable<\Errors\Result<CreateCanaryResponse>>;
  public function DeleteCanary(DeleteCanaryRequest $in): Awaitable<\Errors\Result<DeleteCanaryResponse>>;
  public function DescribeCanaries(DescribeCanariesRequest $in): Awaitable<\Errors\Result<DescribeCanariesResponse>>;
  public function DescribeCanariesLastRun(DescribeCanariesLastRunRequest $in): Awaitable<\Errors\Result<DescribeCanariesLastRunResponse>>;
  public function DescribeRuntimeVersions(DescribeRuntimeVersionsRequest $in): Awaitable<\Errors\Result<DescribeRuntimeVersionsResponse>>;
  public function GetCanary(GetCanaryRequest $in): Awaitable<\Errors\Result<GetCanaryResponse>>;
  public function GetCanaryRuns(GetCanaryRunsRequest $in): Awaitable<\Errors\Result<GetCanaryRunsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function StartCanary(StartCanaryRequest $in): Awaitable<\Errors\Result<StartCanaryResponse>>;
  public function StopCanary(StopCanaryRequest $in): Awaitable<\Errors\Result<StopCanaryResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateCanary(UpdateCanaryRequest $in): Awaitable<\Errors\Result<UpdateCanaryResponse>>;
}

type Arn = string;

type Blob = string;

type Canaries = vec<Canary>;

type CanariesLastRun = vec<CanaryLastRun>;

class Canary {
  public string $artifact_s_3_location;
  public ?CanaryCodeOutput $code;
  public ?Arn $engine_arn;
  public ?Arn $execution_role_arn;
  public ?MaxSize1024 $failure_retention_period_in_days;
  public ?UUID $id;
  public ?CanaryName $name;
  public ?CanaryRunConfigOutput $run_config;
  public string $runtime_version;
  public ?CanaryScheduleOutput $schedule;
  public ?CanaryStatus $status;
  public ?MaxSize1024 $success_retention_period_in_days;
  public ?TagMap $tags;
  public ?CanaryTimeline $timeline;
  public ?VpcConfigOutput $vpc_config;

  public function __construct(shape(
    ?'artifact_s_3_location' => string,
    ?'code' => ?CanaryCodeOutput,
    ?'engine_arn' => ?Arn,
    ?'execution_role_arn' => ?Arn,
    ?'failure_retention_period_in_days' => ?MaxSize1024,
    ?'id' => ?UUID,
    ?'name' => ?CanaryName,
    ?'run_config' => ?CanaryRunConfigOutput,
    ?'runtime_version' => string,
    ?'schedule' => ?CanaryScheduleOutput,
    ?'status' => ?CanaryStatus,
    ?'success_retention_period_in_days' => ?MaxSize1024,
    ?'tags' => ?TagMap,
    ?'timeline' => ?CanaryTimeline,
    ?'vpc_config' => ?VpcConfigOutput,
  ) $s = shape()) {
    $this->artifact_s_3_location = $s['artifact_s_3_location'] ?? '';
    $this->code = $s['code'] ?? null;
    $this->engine_arn = $s['engine_arn'] ?? '';
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->failure_retention_period_in_days = $s['failure_retention_period_in_days'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->run_config = $s['run_config'] ?? null;
    $this->runtime_version = $s['runtime_version'] ?? '';
    $this->schedule = $s['schedule'] ?? null;
    $this->status = $s['status'] ?? null;
    $this->success_retention_period_in_days = $s['success_retention_period_in_days'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
    $this->timeline = $s['timeline'] ?? null;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class CanaryCodeInput {
  public string $handler;
  public string $s_3_bucket;
  public string $s_3_key;
  public string $s_3_version;
  public ?Blob $zip_file;

  public function __construct(shape(
    ?'handler' => string,
    ?'s_3_bucket' => string,
    ?'s_3_key' => string,
    ?'s_3_version' => string,
    ?'zip_file' => ?Blob,
  ) $s = shape()) {
    $this->handler = $s['handler'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
    $this->s_3_version = $s['s_3_version'] ?? '';
    $this->zip_file = $s['zip_file'] ?? '';
  }
}

class CanaryCodeOutput {
  public string $handler;
  public string $source_location_arn;

  public function __construct(shape(
    ?'handler' => string,
    ?'source_location_arn' => string,
  ) $s = shape()) {
    $this->handler = $s['handler'] ?? '';
    $this->source_location_arn = $s['source_location_arn'] ?? '';
  }
}

class CanaryLastRun {
  public ?CanaryName $canary_name;
  public ?CanaryRun $last_run;

  public function __construct(shape(
    ?'canary_name' => ?CanaryName,
    ?'last_run' => ?CanaryRun,
  ) $s = shape()) {
    $this->canary_name = $s['canary_name'] ?? '';
    $this->last_run = $s['last_run'] ?? null;
  }
}

type CanaryName = string;

class CanaryRun {
  public string $artifact_s_3_location;
  public ?CanaryName $name;
  public ?CanaryRunStatus $status;
  public ?CanaryRunTimeline $timeline;

  public function __construct(shape(
    ?'artifact_s_3_location' => string,
    ?'name' => ?CanaryName,
    ?'status' => ?CanaryRunStatus,
    ?'timeline' => ?CanaryRunTimeline,
  ) $s = shape()) {
    $this->artifact_s_3_location = $s['artifact_s_3_location'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? null;
    $this->timeline = $s['timeline'] ?? null;
  }
}

class CanaryRunConfigInput {
  public ?MaxFifteenMinutesInSeconds $timeout_in_seconds;

  public function __construct(shape(
    ?'timeout_in_seconds' => ?MaxFifteenMinutesInSeconds,
  ) $s = shape()) {
    $this->timeout_in_seconds = $s['timeout_in_seconds'] ?? 0;
  }
}

class CanaryRunConfigOutput {
  public ?MaxFifteenMinutesInSeconds $timeout_in_seconds;

  public function __construct(shape(
    ?'timeout_in_seconds' => ?MaxFifteenMinutesInSeconds,
  ) $s = shape()) {
    $this->timeout_in_seconds = $s['timeout_in_seconds'] ?? 0;
  }
}

type CanaryRunState = string;

type CanaryRunStateReasonCode = string;

class CanaryRunStatus {
  public ?CanaryRunState $state;
  public string $state_reason;
  public ?CanaryRunStateReasonCode $state_reason_code;

  public function __construct(shape(
    ?'state' => ?CanaryRunState,
    ?'state_reason' => string,
    ?'state_reason_code' => ?CanaryRunStateReasonCode,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->state_reason = $s['state_reason'] ?? '';
    $this->state_reason_code = $s['state_reason_code'] ?? '';
  }
}

class CanaryRunTimeline {
  public ?Timestamp $completed;
  public ?Timestamp $started;

  public function __construct(shape(
    ?'completed' => ?Timestamp,
    ?'started' => ?Timestamp,
  ) $s = shape()) {
    $this->completed = $s['completed'] ?? 0;
    $this->started = $s['started'] ?? 0;
  }
}

type CanaryRuns = vec<CanaryRun>;

class CanaryScheduleInput {
  public ?MaxOneYearInSeconds $duration_in_seconds;
  public string $expression;

  public function __construct(shape(
    ?'duration_in_seconds' => ?MaxOneYearInSeconds,
    ?'expression' => string,
  ) $s = shape()) {
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
    $this->expression = $s['expression'] ?? '';
  }
}

class CanaryScheduleOutput {
  public ?MaxOneYearInSeconds $duration_in_seconds;
  public string $expression;

  public function __construct(shape(
    ?'duration_in_seconds' => ?MaxOneYearInSeconds,
    ?'expression' => string,
  ) $s = shape()) {
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
    $this->expression = $s['expression'] ?? '';
  }
}

type CanaryState = string;

type CanaryStateReasonCode = string;

class CanaryStatus {
  public ?CanaryState $state;
  public string $state_reason;
  public ?CanaryStateReasonCode $state_reason_code;

  public function __construct(shape(
    ?'state' => ?CanaryState,
    ?'state_reason' => string,
    ?'state_reason_code' => ?CanaryStateReasonCode,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->state_reason = $s['state_reason'] ?? '';
    $this->state_reason_code = $s['state_reason_code'] ?? '';
  }
}

class CanaryTimeline {
  public ?Timestamp $created;
  public ?Timestamp $last_modified;
  public ?Timestamp $last_started;
  public ?Timestamp $last_stopped;

  public function __construct(shape(
    ?'created' => ?Timestamp,
    ?'last_modified' => ?Timestamp,
    ?'last_started' => ?Timestamp,
    ?'last_stopped' => ?Timestamp,
  ) $s = shape()) {
    $this->created = $s['created'] ?? 0;
    $this->last_modified = $s['last_modified'] ?? 0;
    $this->last_started = $s['last_started'] ?? 0;
    $this->last_stopped = $s['last_stopped'] ?? 0;
  }
}

class ConflictException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CreateCanaryRequest {
  public string $artifact_s_3_location;
  public ?CanaryCodeInput $code;
  public ?Arn $execution_role_arn;
  public ?MaxSize1024 $failure_retention_period_in_days;
  public ?CanaryName $name;
  public ?CanaryRunConfigInput $run_config;
  public string $runtime_version;
  public ?CanaryScheduleInput $schedule;
  public ?MaxSize1024 $success_retention_period_in_days;
  public ?TagMap $tags;
  public ?VpcConfigInput $vpc_config;

  public function __construct(shape(
    ?'artifact_s_3_location' => string,
    ?'code' => ?CanaryCodeInput,
    ?'execution_role_arn' => ?Arn,
    ?'failure_retention_period_in_days' => ?MaxSize1024,
    ?'name' => ?CanaryName,
    ?'run_config' => ?CanaryRunConfigInput,
    ?'runtime_version' => string,
    ?'schedule' => ?CanaryScheduleInput,
    ?'success_retention_period_in_days' => ?MaxSize1024,
    ?'tags' => ?TagMap,
    ?'vpc_config' => ?VpcConfigInput,
  ) $s = shape()) {
    $this->artifact_s_3_location = $s['artifact_s_3_location'] ?? '';
    $this->code = $s['code'] ?? null;
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->failure_retention_period_in_days = $s['failure_retention_period_in_days'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->run_config = $s['run_config'] ?? null;
    $this->runtime_version = $s['runtime_version'] ?? '';
    $this->schedule = $s['schedule'] ?? null;
    $this->success_retention_period_in_days = $s['success_retention_period_in_days'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class CreateCanaryResponse {
  public ?Canary $canary;

  public function __construct(shape(
    ?'canary' => ?Canary,
  ) $s = shape()) {
    $this->canary = $s['canary'] ?? null;
  }
}

class DeleteCanaryRequest {
  public ?CanaryName $name;

  public function __construct(shape(
    ?'name' => ?CanaryName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteCanaryResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeCanariesLastRunRequest {
  public ?MaxSize100 $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxSize100,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeCanariesLastRunResponse {
  public ?CanariesLastRun $canaries_last_run;
  public ?Token $next_token;

  public function __construct(shape(
    ?'canaries_last_run' => ?CanariesLastRun,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->canaries_last_run = $s['canaries_last_run'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeCanariesRequest {
  public ?MaxCanaryResults $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxCanaryResults,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeCanariesResponse {
  public ?Canaries $canaries;
  public ?Token $next_token;

  public function __construct(shape(
    ?'canaries' => ?Canaries,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->canaries = $s['canaries'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeRuntimeVersionsRequest {
  public ?MaxSize100 $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxSize100,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeRuntimeVersionsResponse {
  public ?Token $next_token;
  public ?RuntimeVersionList $runtime_versions;

  public function __construct(shape(
    ?'next_token' => ?Token,
    ?'runtime_versions' => ?RuntimeVersionList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->runtime_versions = $s['runtime_versions'] ?? vec[];
  }
}

type ErrorMessage = string;

class GetCanaryRequest {
  public ?CanaryName $name;

  public function __construct(shape(
    ?'name' => ?CanaryName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class GetCanaryResponse {
  public ?Canary $canary;

  public function __construct(shape(
    ?'canary' => ?Canary,
  ) $s = shape()) {
    $this->canary = $s['canary'] ?? null;
  }
}

class GetCanaryRunsRequest {
  public ?MaxSize100 $max_results;
  public ?CanaryName $name;
  public ?Token $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxSize100,
    ?'name' => ?CanaryName,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetCanaryRunsResponse {
  public ?CanaryRuns $canary_runs;
  public ?Token $next_token;

  public function __construct(shape(
    ?'canary_runs' => ?CanaryRuns,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->canary_runs = $s['canary_runs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class InternalServerException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

type MaxCanaryResults = int;

type MaxFifteenMinutesInSeconds = int;

type MaxOneYearInSeconds = int;

type MaxSize100 = int;

type MaxSize1024 = int;

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RuntimeVersion {
  public ?Timestamp $deprecation_date;
  public string $description;
  public ?Timestamp $release_date;
  public string $version_name;

  public function __construct(shape(
    ?'deprecation_date' => ?Timestamp,
    ?'description' => string,
    ?'release_date' => ?Timestamp,
    ?'version_name' => string,
  ) $s = shape()) {
    $this->deprecation_date = $s['deprecation_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->release_date = $s['release_date'] ?? 0;
    $this->version_name = $s['version_name'] ?? '';
  }
}

type RuntimeVersionList = vec<RuntimeVersion>;

type SecurityGroupId = string;

type SecurityGroupIds = vec<SecurityGroupId>;

class StartCanaryRequest {
  public ?CanaryName $name;

  public function __construct(shape(
    ?'name' => ?CanaryName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class StartCanaryResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopCanaryRequest {
  public ?CanaryName $name;

  public function __construct(shape(
    ?'name' => ?CanaryName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class StopCanaryResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type String = string;

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Timestamp = int;

type Token = string;

type UUID = string;

class UntagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

class UpdateCanaryRequest {
  public ?CanaryCodeInput $code;
  public ?Arn $execution_role_arn;
  public ?MaxSize1024 $failure_retention_period_in_days;
  public ?CanaryName $name;
  public ?CanaryRunConfigInput $run_config;
  public string $runtime_version;
  public ?CanaryScheduleInput $schedule;
  public ?MaxSize1024 $success_retention_period_in_days;
  public ?VpcConfigInput $vpc_config;

  public function __construct(shape(
    ?'code' => ?CanaryCodeInput,
    ?'execution_role_arn' => ?Arn,
    ?'failure_retention_period_in_days' => ?MaxSize1024,
    ?'name' => ?CanaryName,
    ?'run_config' => ?CanaryRunConfigInput,
    ?'runtime_version' => string,
    ?'schedule' => ?CanaryScheduleInput,
    ?'success_retention_period_in_days' => ?MaxSize1024,
    ?'vpc_config' => ?VpcConfigInput,
  ) $s = shape()) {
    $this->code = $s['code'] ?? null;
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->failure_retention_period_in_days = $s['failure_retention_period_in_days'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->run_config = $s['run_config'] ?? null;
    $this->runtime_version = $s['runtime_version'] ?? '';
    $this->schedule = $s['schedule'] ?? null;
    $this->success_retention_period_in_days = $s['success_retention_period_in_days'] ?? 0;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class UpdateCanaryResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ValidationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class VpcConfigInput {
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

class VpcConfigOutput {
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

