<?hh // strict
namespace slack\aws\codeguru-profiler;

interface CodeGuruProfiler {
  public function ConfigureAgent(ConfigureAgentRequest $in): Awaitable<\Errors\Result<ConfigureAgentResponse>>;
  public function CreateProfilingGroup(CreateProfilingGroupRequest $in): Awaitable<\Errors\Result<CreateProfilingGroupResponse>>;
  public function DeleteProfilingGroup(DeleteProfilingGroupRequest $in): Awaitable<\Errors\Result<DeleteProfilingGroupResponse>>;
  public function DescribeProfilingGroup(DescribeProfilingGroupRequest $in): Awaitable<\Errors\Result<DescribeProfilingGroupResponse>>;
  public function GetPolicy(GetPolicyRequest $in): Awaitable<\Errors\Result<GetPolicyResponse>>;
  public function GetProfile(GetProfileRequest $in): Awaitable<\Errors\Result<GetProfileResponse>>;
  public function ListProfileTimes(ListProfileTimesRequest $in): Awaitable<\Errors\Result<ListProfileTimesResponse>>;
  public function ListProfilingGroups(ListProfilingGroupsRequest $in): Awaitable<\Errors\Result<ListProfilingGroupsResponse>>;
  public function PostAgentProfile(PostAgentProfileRequest $in): Awaitable<\Errors\Result<PostAgentProfileResponse>>;
  public function PutPermission(PutPermissionRequest $in): Awaitable<\Errors\Result<PutPermissionResponse>>;
  public function RemovePermission(RemovePermissionRequest $in): Awaitable<\Errors\Result<RemovePermissionResponse>>;
  public function UpdateProfilingGroup(UpdateProfilingGroupRequest $in): Awaitable<\Errors\Result<UpdateProfilingGroupResponse>>;
}

type ActionGroup = string;

class AgentConfiguration {
  public int $period_in_seconds;
  public bool $should_profile;

  public function __construct(shape(
    ?'period_in_seconds' => int,
    ?'should_profile' => bool,
  ) $s = shape()) {
    $this->period_in_seconds = $s['period_in_seconds'] ?? 0;
    $this->should_profile = $s['should_profile'] ?? false;
  }
}

class AgentOrchestrationConfig {
  public bool $profiling_enabled;

  public function __construct(shape(
    ?'profiling_enabled' => bool,
  ) $s = shape()) {
    $this->profiling_enabled = $s['profiling_enabled'] ?? false;
  }
}

type AgentProfile = string;

type AggregatedProfile = string;

class AggregatedProfileTime {
  public ?AggregationPeriod $period;
  public ?Timestamp $start;

  public function __construct(shape(
    ?'period' => ?AggregationPeriod,
    ?'start' => ?Timestamp,
  ) $s = shape()) {
    $this->period = $s['period'] ?? '';
    $this->start = $s['start'] ?? 0;
  }
}

type AggregationPeriod = string;

type Boolean = bool;

type ClientToken = string;

class ConfigureAgentRequest {
  public ?FleetInstanceId $fleet_instance_id;
  public ?ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
    ?'fleet_instance_id' => ?FleetInstanceId,
    ?'profiling_group_name' => ?ProfilingGroupName,
  ) $s = shape()) {
    $this->fleet_instance_id = $s['fleet_instance_id'] ?? '';
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
  }
}

class ConfigureAgentResponse {
  public ?AgentConfiguration $configuration;

  public function __construct(shape(
    ?'configuration' => ?AgentConfiguration,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
  }
}

class ConflictException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CreateProfilingGroupRequest {
  public ?AgentOrchestrationConfig $agent_orchestration_config;
  public ?ClientToken $client_token;
  public ?ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
    ?'agent_orchestration_config' => ?AgentOrchestrationConfig,
    ?'client_token' => ?ClientToken,
    ?'profiling_group_name' => ?ProfilingGroupName,
  ) $s = shape()) {
    $this->agent_orchestration_config = $s['agent_orchestration_config'] ?? null;
    $this->client_token = $s['client_token'] ?? '';
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
  }
}

class CreateProfilingGroupResponse {
  public ?ProfilingGroupDescription $profiling_group;

  public function __construct(shape(
    ?'profiling_group' => ?ProfilingGroupDescription,
  ) $s = shape()) {
    $this->profiling_group = $s['profiling_group'] ?? null;
  }
}

class DeleteProfilingGroupRequest {
  public ?ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
    ?'profiling_group_name' => ?ProfilingGroupName,
  ) $s = shape()) {
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
  }
}

class DeleteProfilingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeProfilingGroupRequest {
  public ?ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
    ?'profiling_group_name' => ?ProfilingGroupName,
  ) $s = shape()) {
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
  }
}

class DescribeProfilingGroupResponse {
  public ?ProfilingGroupDescription $profiling_group;

  public function __construct(shape(
    ?'profiling_group' => ?ProfilingGroupDescription,
  ) $s = shape()) {
    $this->profiling_group = $s['profiling_group'] ?? null;
  }
}

type FleetInstanceId = string;

class GetPolicyRequest {
  public ?ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
    ?'profiling_group_name' => ?ProfilingGroupName,
  ) $s = shape()) {
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
  }
}

class GetPolicyResponse {
  public string $policy;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'policy' => string,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class GetProfileRequest {
  public string $accept;
  public ?Timestamp $end_time;
  public ?MaxDepth $max_depth;
  public ?Period $period;
  public ?ProfilingGroupName $profiling_group_name;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'accept' => string,
    ?'end_time' => ?Timestamp,
    ?'max_depth' => ?MaxDepth,
    ?'period' => ?Period,
    ?'profiling_group_name' => ?ProfilingGroupName,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->accept = $s['accept'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->max_depth = $s['max_depth'] ?? 0;
    $this->period = $s['period'] ?? '';
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetProfileResponse {
  public string $content_encoding;
  public string $content_type;
  public ?AggregatedProfile $profile;

  public function __construct(shape(
    ?'content_encoding' => string,
    ?'content_type' => string,
    ?'profile' => ?AggregatedProfile,
  ) $s = shape()) {
    $this->content_encoding = $s['content_encoding'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->profile = $s['profile'] ?? '';
  }
}

type Integer = int;

class InternalServerException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListProfileTimesRequest {
  public ?Timestamp $end_time;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?OrderBy $order_by;
  public ?AggregationPeriod $period;
  public ?ProfilingGroupName $profiling_group_name;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
    ?'order_by' => ?OrderBy,
    ?'period' => ?AggregationPeriod,
    ?'profiling_group_name' => ?ProfilingGroupName,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->order_by = $s['order_by'] ?? '';
    $this->period = $s['period'] ?? '';
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class ListProfileTimesResponse {
  public ?PaginationToken $next_token;
  public ?ProfileTimes $profile_times;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'profile_times' => ?ProfileTimes,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->profile_times = $s['profile_times'] ?? vec[];
  }
}

class ListProfilingGroupsRequest {
  public bool $include_description;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'include_description' => bool,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->include_description = $s['include_description'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProfilingGroupsResponse {
  public ?PaginationToken $next_token;
  public ?ProfilingGroupNames $profiling_group_names;
  public ?ProfilingGroupDescriptions $profiling_groups;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'profiling_group_names' => ?ProfilingGroupNames,
    ?'profiling_groups' => ?ProfilingGroupDescriptions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->profiling_group_names = $s['profiling_group_names'] ?? vec[];
    $this->profiling_groups = $s['profiling_groups'] ?? vec[];
  }
}

type MaxDepth = int;

type MaxResults = int;

type OrderBy = string;

type PaginationToken = string;

type Period = string;

class PostAgentProfileRequest {
  public ?AgentProfile $agent_profile;
  public string $content_type;
  public ?ClientToken $profile_token;
  public ?ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
    ?'agent_profile' => ?AgentProfile,
    ?'content_type' => string,
    ?'profile_token' => ?ClientToken,
    ?'profiling_group_name' => ?ProfilingGroupName,
  ) $s = shape()) {
    $this->agent_profile = $s['agent_profile'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->profile_token = $s['profile_token'] ?? '';
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
  }
}

class PostAgentProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Principal = string;

type Principals = vec<Principal>;

class ProfileTime {
  public ?Timestamp $start;

  public function __construct(shape(
    ?'start' => ?Timestamp,
  ) $s = shape()) {
    $this->start = $s['start'] ?? 0;
  }
}

type ProfileTimes = vec<ProfileTime>;

type ProfilingGroupArn = string;

class ProfilingGroupDescription {
  public ?AgentOrchestrationConfig $agent_orchestration_config;
  public ?ProfilingGroupArn $arn;
  public ?Timestamp $created_at;
  public ?ProfilingGroupName $name;
  public ?ProfilingStatus $profiling_status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'agent_orchestration_config' => ?AgentOrchestrationConfig,
    ?'arn' => ?ProfilingGroupArn,
    ?'created_at' => ?Timestamp,
    ?'name' => ?ProfilingGroupName,
    ?'profiling_status' => ?ProfilingStatus,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->agent_orchestration_config = $s['agent_orchestration_config'] ?? null;
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->profiling_status = $s['profiling_status'] ?? null;
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type ProfilingGroupDescriptions = vec<ProfilingGroupDescription>;

type ProfilingGroupName = string;

type ProfilingGroupNames = vec<ProfilingGroupName>;

class ProfilingStatus {
  public ?Timestamp $latest_agent_orchestrated_at;
  public ?Timestamp $latest_agent_profile_reported_at;
  public ?AggregatedProfileTime $latest_aggregated_profile;

  public function __construct(shape(
    ?'latest_agent_orchestrated_at' => ?Timestamp,
    ?'latest_agent_profile_reported_at' => ?Timestamp,
    ?'latest_aggregated_profile' => ?AggregatedProfileTime,
  ) $s = shape()) {
    $this->latest_agent_orchestrated_at = $s['latest_agent_orchestrated_at'] ?? 0;
    $this->latest_agent_profile_reported_at = $s['latest_agent_profile_reported_at'] ?? 0;
    $this->latest_aggregated_profile = $s['latest_aggregated_profile'] ?? null;
  }
}

class PutPermissionRequest {
  public ?ActionGroup $action_group;
  public ?Principals $principals;
  public ?ProfilingGroupName $profiling_group_name;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'action_group' => ?ActionGroup,
    ?'principals' => ?Principals,
    ?'profiling_group_name' => ?ProfilingGroupName,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->action_group = $s['action_group'] ?? '';
    $this->principals = $s['principals'] ?? vec[];
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class PutPermissionResponse {
  public string $policy;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'policy' => string,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class RemovePermissionRequest {
  public ?ActionGroup $action_group;
  public ?ProfilingGroupName $profiling_group_name;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'action_group' => ?ActionGroup,
    ?'profiling_group_name' => ?ProfilingGroupName,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->action_group = $s['action_group'] ?? '';
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class RemovePermissionResponse {
  public string $policy;
  public ?RevisionId $revision_id;

  public function __construct(shape(
    ?'policy' => string,
    ?'revision_id' => ?RevisionId,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type RevisionId = string;

class ServiceQuotaExceededException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type String = string;

class ThrottlingException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Timestamp = int;

class UpdateProfilingGroupRequest {
  public ?AgentOrchestrationConfig $agent_orchestration_config;
  public ?ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
    ?'agent_orchestration_config' => ?AgentOrchestrationConfig,
    ?'profiling_group_name' => ?ProfilingGroupName,
  ) $s = shape()) {
    $this->agent_orchestration_config = $s['agent_orchestration_config'] ?? null;
    $this->profiling_group_name = $s['profiling_group_name'] ?? '';
  }
}

class UpdateProfilingGroupResponse {
  public ?ProfilingGroupDescription $profiling_group;

  public function __construct(shape(
    ?'profiling_group' => ?ProfilingGroupDescription,
  ) $s = shape()) {
    $this->profiling_group = $s['profiling_group'] ?? null;
  }
}

class ValidationException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

