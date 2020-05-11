<?hh // strict
namespace slack\aws\codeguru-profiler;

interface CodeGuruProfiler {
  public function ConfigureAgent(ConfigureAgentRequest): Awaitable<Errors\Result<ConfigureAgentResponse>>;
  public function CreateProfilingGroup(CreateProfilingGroupRequest): Awaitable<Errors\Result<CreateProfilingGroupResponse>>;
  public function DeleteProfilingGroup(DeleteProfilingGroupRequest): Awaitable<Errors\Result<DeleteProfilingGroupResponse>>;
  public function DescribeProfilingGroup(DescribeProfilingGroupRequest): Awaitable<Errors\Result<DescribeProfilingGroupResponse>>;
  public function GetPolicy(GetPolicyRequest): Awaitable<Errors\Result<GetPolicyResponse>>;
  public function GetProfile(GetProfileRequest): Awaitable<Errors\Result<GetProfileResponse>>;
  public function ListProfileTimes(ListProfileTimesRequest): Awaitable<Errors\Result<ListProfileTimesResponse>>;
  public function ListProfilingGroups(ListProfilingGroupsRequest): Awaitable<Errors\Result<ListProfilingGroupsResponse>>;
  public function PostAgentProfile(PostAgentProfileRequest): Awaitable<Errors\Result<PostAgentProfileResponse>>;
  public function PutPermission(PutPermissionRequest): Awaitable<Errors\Result<PutPermissionResponse>>;
  public function RemovePermission(RemovePermissionRequest): Awaitable<Errors\Result<RemovePermissionResponse>>;
  public function UpdateProfilingGroup(UpdateProfilingGroupRequest): Awaitable<Errors\Result<UpdateProfilingGroupResponse>>;
}

type ActionGroup = string;

class AgentConfiguration {
  public int $period_in_seconds;
  public boolean $should_profile;

  public function __construct(shape(
  ?'period_in_seconds' => int,
  ?'should_profile' => boolean,
  ) $s = shape()) {
    $this->period_in_seconds = $period_in_seconds ?? ;
    $this->should_profile = $should_profile ?? ;
  }
}

class AgentOrchestrationConfig {
  public boolean $profiling_enabled;

  public function __construct(shape(
  ?'profiling_enabled' => boolean,
  ) $s = shape()) {
    $this->profiling_enabled = $profiling_enabled ?? ;
  }
}

type AgentProfile = string;

type AggregatedProfile = string;

class AggregatedProfileTime {
  public AggregationPeriod $period;
  public Timestamp $start;

  public function __construct(shape(
  ?'period' => AggregationPeriod,
  ?'start' => Timestamp,
  ) $s = shape()) {
    $this->period = $period ?? ;
    $this->start = $start ?? ;
  }
}

type AggregationPeriod = string;

type Boolean = bool;

type ClientToken = string;

class ConfigureAgentRequest {
  public FleetInstanceId $fleet_instance_id;
  public ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
  ?'fleet_instance_id' => FleetInstanceId,
  ?'profiling_group_name' => ProfilingGroupName,
  ) $s = shape()) {
    $this->fleet_instance_id = $fleet_instance_id ?? ;
    $this->profiling_group_name = $profiling_group_name ?? ;
  }
}

class ConfigureAgentResponse {
  public AgentConfiguration $configuration;

  public function __construct(shape(
  ?'configuration' => AgentConfiguration,
  ) $s = shape()) {
    $this->configuration = $configuration ?? ;
  }
}

class ConflictException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CreateProfilingGroupRequest {
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ClientToken $client_token;
  public ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
  ?'agent_orchestration_config' => AgentOrchestrationConfig,
  ?'client_token' => ClientToken,
  ?'profiling_group_name' => ProfilingGroupName,
  ) $s = shape()) {
    $this->agent_orchestration_config = $agent_orchestration_config ?? ;
    $this->client_token = $client_token ?? ;
    $this->profiling_group_name = $profiling_group_name ?? ;
  }
}

class CreateProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;

  public function __construct(shape(
  ?'profiling_group' => ProfilingGroupDescription,
  ) $s = shape()) {
    $this->profiling_group = $profiling_group ?? ;
  }
}

class DeleteProfilingGroupRequest {
  public ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
  ?'profiling_group_name' => ProfilingGroupName,
  ) $s = shape()) {
    $this->profiling_group_name = $profiling_group_name ?? ;
  }
}

class DeleteProfilingGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeProfilingGroupRequest {
  public ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
  ?'profiling_group_name' => ProfilingGroupName,
  ) $s = shape()) {
    $this->profiling_group_name = $profiling_group_name ?? ;
  }
}

class DescribeProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;

  public function __construct(shape(
  ?'profiling_group' => ProfilingGroupDescription,
  ) $s = shape()) {
    $this->profiling_group = $profiling_group ?? ;
  }
}

type FleetInstanceId = string;

class GetPolicyRequest {
  public ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
  ?'profiling_group_name' => ProfilingGroupName,
  ) $s = shape()) {
    $this->profiling_group_name = $profiling_group_name ?? ;
  }
}

class GetPolicyResponse {
  public string $policy;
  public RevisionId $revision_id;

  public function __construct(shape(
  ?'policy' => string,
  ?'revision_id' => RevisionId,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
    $this->revision_id = $revision_id ?? ;
  }
}

class GetProfileRequest {
  public string $accept;
  public Timestamp $end_time;
  public MaxDepth $max_depth;
  public Period $period;
  public ProfilingGroupName $profiling_group_name;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'accept' => string,
  ?'end_time' => Timestamp,
  ?'max_depth' => MaxDepth,
  ?'period' => Period,
  ?'profiling_group_name' => ProfilingGroupName,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->accept = $accept ?? ;
    $this->end_time = $end_time ?? ;
    $this->max_depth = $max_depth ?? ;
    $this->period = $period ?? ;
    $this->profiling_group_name = $profiling_group_name ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class GetProfileResponse {
  public string $content_encoding;
  public string $content_type;
  public AggregatedProfile $profile;

  public function __construct(shape(
  ?'content_encoding' => string,
  ?'content_type' => string,
  ?'profile' => AggregatedProfile,
  ) $s = shape()) {
    $this->content_encoding = $content_encoding ?? ;
    $this->content_type = $content_type ?? ;
    $this->profile = $profile ?? ;
  }
}

type Integer = int;

class InternalServerException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListProfileTimesRequest {
  public Timestamp $end_time;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public OrderBy $order_by;
  public AggregationPeriod $period;
  public ProfilingGroupName $profiling_group_name;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'order_by' => OrderBy,
  ?'period' => AggregationPeriod,
  ?'profiling_group_name' => ProfilingGroupName,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->order_by = $order_by ?? ;
    $this->period = $period ?? ;
    $this->profiling_group_name = $profiling_group_name ?? ;
    $this->start_time = $start_time ?? ;
  }
}

class ListProfileTimesResponse {
  public PaginationToken $next_token;
  public ProfileTimes $profile_times;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'profile_times' => ProfileTimes,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->profile_times = $profile_times ?? ;
  }
}

class ListProfilingGroupsRequest {
  public boolean $include_description;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'include_description' => boolean,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->include_description = $include_description ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListProfilingGroupsResponse {
  public PaginationToken $next_token;
  public ProfilingGroupNames $profiling_group_names;
  public ProfilingGroupDescriptions $profiling_groups;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'profiling_group_names' => ProfilingGroupNames,
  ?'profiling_groups' => ProfilingGroupDescriptions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->profiling_group_names = $profiling_group_names ?? ;
    $this->profiling_groups = $profiling_groups ?? ;
  }
}

type MaxDepth = int;

type MaxResults = int;

type OrderBy = string;

type PaginationToken = string;

type Period = string;

class PostAgentProfileRequest {
  public AgentProfile $agent_profile;
  public string $content_type;
  public ClientToken $profile_token;
  public ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
  ?'agent_profile' => AgentProfile,
  ?'content_type' => string,
  ?'profile_token' => ClientToken,
  ?'profiling_group_name' => ProfilingGroupName,
  ) $s = shape()) {
    $this->agent_profile = $agent_profile ?? ;
    $this->content_type = $content_type ?? ;
    $this->profile_token = $profile_token ?? ;
    $this->profiling_group_name = $profiling_group_name ?? ;
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
  public Timestamp $start;

  public function __construct(shape(
  ?'start' => Timestamp,
  ) $s = shape()) {
    $this->start = $start ?? ;
  }
}

type ProfileTimes = vec<ProfileTime>;

type ProfilingGroupArn = string;

class ProfilingGroupDescription {
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ProfilingGroupArn $arn;
  public Timestamp $created_at;
  public ProfilingGroupName $name;
  public ProfilingStatus $profiling_status;
  public Timestamp $updated_at;

  public function __construct(shape(
  ?'agent_orchestration_config' => AgentOrchestrationConfig,
  ?'arn' => ProfilingGroupArn,
  ?'created_at' => Timestamp,
  ?'name' => ProfilingGroupName,
  ?'profiling_status' => ProfilingStatus,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->agent_orchestration_config = $agent_orchestration_config ?? ;
    $this->arn = $arn ?? ;
    $this->created_at = $created_at ?? ;
    $this->name = $name ?? ;
    $this->profiling_status = $profiling_status ?? ;
    $this->updated_at = $updated_at ?? ;
  }
}

type ProfilingGroupDescriptions = vec<ProfilingGroupDescription>;

type ProfilingGroupName = string;

type ProfilingGroupNames = vec<ProfilingGroupName>;

class ProfilingStatus {
  public Timestamp $latest_agent_orchestrated_at;
  public Timestamp $latest_agent_profile_reported_at;
  public AggregatedProfileTime $latest_aggregated_profile;

  public function __construct(shape(
  ?'latest_agent_orchestrated_at' => Timestamp,
  ?'latest_agent_profile_reported_at' => Timestamp,
  ?'latest_aggregated_profile' => AggregatedProfileTime,
  ) $s = shape()) {
    $this->latest_agent_orchestrated_at = $latest_agent_orchestrated_at ?? ;
    $this->latest_agent_profile_reported_at = $latest_agent_profile_reported_at ?? ;
    $this->latest_aggregated_profile = $latest_aggregated_profile ?? ;
  }
}

class PutPermissionRequest {
  public ActionGroup $action_group;
  public Principals $principals;
  public ProfilingGroupName $profiling_group_name;
  public RevisionId $revision_id;

  public function __construct(shape(
  ?'action_group' => ActionGroup,
  ?'principals' => Principals,
  ?'profiling_group_name' => ProfilingGroupName,
  ?'revision_id' => RevisionId,
  ) $s = shape()) {
    $this->action_group = $action_group ?? ;
    $this->principals = $principals ?? ;
    $this->profiling_group_name = $profiling_group_name ?? ;
    $this->revision_id = $revision_id ?? ;
  }
}

class PutPermissionResponse {
  public string $policy;
  public RevisionId $revision_id;

  public function __construct(shape(
  ?'policy' => string,
  ?'revision_id' => RevisionId,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
    $this->revision_id = $revision_id ?? ;
  }
}

class RemovePermissionRequest {
  public ActionGroup $action_group;
  public ProfilingGroupName $profiling_group_name;
  public RevisionId $revision_id;

  public function __construct(shape(
  ?'action_group' => ActionGroup,
  ?'profiling_group_name' => ProfilingGroupName,
  ?'revision_id' => RevisionId,
  ) $s = shape()) {
    $this->action_group = $action_group ?? ;
    $this->profiling_group_name = $profiling_group_name ?? ;
    $this->revision_id = $revision_id ?? ;
  }
}

class RemovePermissionResponse {
  public string $policy;
  public RevisionId $revision_id;

  public function __construct(shape(
  ?'policy' => string,
  ?'revision_id' => RevisionId,
  ) $s = shape()) {
    $this->policy = $policy ?? ;
    $this->revision_id = $revision_id ?? ;
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type RevisionId = string;

class ServiceQuotaExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type String = string;

class ThrottlingException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Timestamp = int;

class UpdateProfilingGroupRequest {
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ProfilingGroupName $profiling_group_name;

  public function __construct(shape(
  ?'agent_orchestration_config' => AgentOrchestrationConfig,
  ?'profiling_group_name' => ProfilingGroupName,
  ) $s = shape()) {
    $this->agent_orchestration_config = $agent_orchestration_config ?? ;
    $this->profiling_group_name = $profiling_group_name ?? ;
  }
}

class UpdateProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;

  public function __construct(shape(
  ?'profiling_group' => ProfilingGroupDescription,
  ) $s = shape()) {
    $this->profiling_group = $profiling_group ?? ;
  }
}

class ValidationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

