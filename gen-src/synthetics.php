<?hh // strict
namespace slack\aws\synthetics;

interface synthetics {
  public function CreateCanary(CreateCanaryRequest): Awaitable<Errors\Result<CreateCanaryResponse>>;
  public function DeleteCanary(DeleteCanaryRequest): Awaitable<Errors\Result<DeleteCanaryResponse>>;
  public function DescribeCanaries(DescribeCanariesRequest): Awaitable<Errors\Result<DescribeCanariesResponse>>;
  public function DescribeCanariesLastRun(DescribeCanariesLastRunRequest): Awaitable<Errors\Result<DescribeCanariesLastRunResponse>>;
  public function DescribeRuntimeVersions(DescribeRuntimeVersionsRequest): Awaitable<Errors\Result<DescribeRuntimeVersionsResponse>>;
  public function GetCanary(GetCanaryRequest): Awaitable<Errors\Result<GetCanaryResponse>>;
  public function GetCanaryRuns(GetCanaryRunsRequest): Awaitable<Errors\Result<GetCanaryRunsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function StartCanary(StartCanaryRequest): Awaitable<Errors\Result<StartCanaryResponse>>;
  public function StopCanary(StopCanaryRequest): Awaitable<Errors\Result<StopCanaryResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateCanary(UpdateCanaryRequest): Awaitable<Errors\Result<UpdateCanaryResponse>>;
}

class Arn {
}

class Blob {
}

class Canaries {
}

class CanariesLastRun {
}

class Canary {
  public string $artifact_s_3_location;
  public CanaryCodeOutput $code;
  public Arn $engine_arn;
  public Arn $execution_role_arn;
  public MaxSize1024 $failure_retention_period_in_days;
  public UUID $id;
  public CanaryName $name;
  public CanaryRunConfigOutput $run_config;
  public string $runtime_version;
  public CanaryScheduleOutput $schedule;
  public CanaryStatus $status;
  public MaxSize1024 $success_retention_period_in_days;
  public TagMap $tags;
  public CanaryTimeline $timeline;
  public VpcConfigOutput $vpc_config;
}

class CanaryCodeInput {
  public string $handler;
  public string $s_3_bucket;
  public string $s_3_key;
  public string $s_3_version;
  public Blob $zip_file;
}

class CanaryCodeOutput {
  public string $handler;
  public string $source_location_arn;
}

class CanaryLastRun {
  public CanaryName $canary_name;
  public CanaryRun $last_run;
}

class CanaryName {
}

class CanaryRun {
  public string $artifact_s_3_location;
  public CanaryName $name;
  public CanaryRunStatus $status;
  public CanaryRunTimeline $timeline;
}

class CanaryRunConfigInput {
  public MaxFifteenMinutesInSeconds $timeout_in_seconds;
}

class CanaryRunConfigOutput {
  public MaxFifteenMinutesInSeconds $timeout_in_seconds;
}

class CanaryRunState {
}

class CanaryRunStateReasonCode {
}

class CanaryRunStatus {
  public CanaryRunState $state;
  public string $state_reason;
  public CanaryRunStateReasonCode $state_reason_code;
}

class CanaryRunTimeline {
  public Timestamp $completed;
  public Timestamp $started;
}

class CanaryRuns {
}

class CanaryScheduleInput {
  public MaxOneYearInSeconds $duration_in_seconds;
  public string $expression;
}

class CanaryScheduleOutput {
  public MaxOneYearInSeconds $duration_in_seconds;
  public string $expression;
}

class CanaryState {
}

class CanaryStateReasonCode {
}

class CanaryStatus {
  public CanaryState $state;
  public string $state_reason;
  public CanaryStateReasonCode $state_reason_code;
}

class CanaryTimeline {
  public Timestamp $created;
  public Timestamp $last_modified;
  public Timestamp $last_started;
  public Timestamp $last_stopped;
}

class ConflictException {
  public ErrorMessage $message;
}

class CreateCanaryRequest {
  public string $artifact_s_3_location;
  public CanaryCodeInput $code;
  public Arn $execution_role_arn;
  public MaxSize1024 $failure_retention_period_in_days;
  public CanaryName $name;
  public CanaryRunConfigInput $run_config;
  public string $runtime_version;
  public CanaryScheduleInput $schedule;
  public MaxSize1024 $success_retention_period_in_days;
  public TagMap $tags;
  public VpcConfigInput $vpc_config;
}

class CreateCanaryResponse {
  public Canary $canary;
}

class DeleteCanaryRequest {
  public CanaryName $name;
}

class DeleteCanaryResponse {
}

class DescribeCanariesLastRunRequest {
  public MaxSize100 $max_results;
  public Token $next_token;
}

class DescribeCanariesLastRunResponse {
  public CanariesLastRun $canaries_last_run;
  public Token $next_token;
}

class DescribeCanariesRequest {
  public MaxCanaryResults $max_results;
  public Token $next_token;
}

class DescribeCanariesResponse {
  public Canaries $canaries;
  public Token $next_token;
}

class DescribeRuntimeVersionsRequest {
  public MaxSize100 $max_results;
  public Token $next_token;
}

class DescribeRuntimeVersionsResponse {
  public Token $next_token;
  public RuntimeVersionList $runtime_versions;
}

class ErrorMessage {
}

class GetCanaryRequest {
  public CanaryName $name;
}

class GetCanaryResponse {
  public Canary $canary;
}

class GetCanaryRunsRequest {
  public MaxSize100 $max_results;
  public CanaryName $name;
  public Token $next_token;
}

class GetCanaryRunsResponse {
  public CanaryRuns $canary_runs;
  public Token $next_token;
}

class InternalServerException {
  public ErrorMessage $message;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class MaxCanaryResults {
}

class MaxFifteenMinutesInSeconds {
}

class MaxOneYearInSeconds {
}

class MaxSize100 {
}

class MaxSize1024 {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class RuntimeVersion {
  public Timestamp $deprecation_date;
  public string $description;
  public Timestamp $release_date;
  public string $version_name;
}

class RuntimeVersionList {
}

class SecurityGroupId {
}

class SecurityGroupIds {
}

class StartCanaryRequest {
  public CanaryName $name;
}

class StartCanaryResponse {
}

class StopCanaryRequest {
  public CanaryName $name;
}

class StopCanaryResponse {
}

class String {
}

class SubnetId {
}

class SubnetIds {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Timestamp {
}

class Token {
}

class UUID {
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateCanaryRequest {
  public CanaryCodeInput $code;
  public Arn $execution_role_arn;
  public MaxSize1024 $failure_retention_period_in_days;
  public CanaryName $name;
  public CanaryRunConfigInput $run_config;
  public string $runtime_version;
  public CanaryScheduleInput $schedule;
  public MaxSize1024 $success_retention_period_in_days;
  public VpcConfigInput $vpc_config;
}

class UpdateCanaryResponse {
}

class ValidationException {
  public ErrorMessage $message;
}

class VpcConfigInput {
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
}

class VpcConfigOutput {
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;
}

class VpcId {
}

