<?hh // strict
namespace slack\aws\codeguru-profiler;

interface CodeGuruProfiler {
  public function UpdateProfilingGroup(UpdateProfilingGroupRequest) Awaitable<Errors\Result<UpdateProfilingGroupResponse>>;
  public function ConfigureAgent(ConfigureAgentRequest) Awaitable<Errors\Result<ConfigureAgentResponse>>;
  public function DeleteProfilingGroup(DeleteProfilingGroupRequest) Awaitable<Errors\Result<DeleteProfilingGroupResponse>>;
  public function DescribeProfilingGroup(DescribeProfilingGroupRequest) Awaitable<Errors\Result<DescribeProfilingGroupResponse>>;
  public function GetProfile(GetProfileRequest) Awaitable<Errors\Result<GetProfileResponse>>;
  public function ListProfilingGroups(ListProfilingGroupsRequest) Awaitable<Errors\Result<ListProfilingGroupsResponse>>;
  public function PutPermission(PutPermissionRequest) Awaitable<Errors\Result<PutPermissionResponse>>;
  public function CreateProfilingGroup(CreateProfilingGroupRequest) Awaitable<Errors\Result<CreateProfilingGroupResponse>>;
  public function GetPolicy(GetPolicyRequest) Awaitable<Errors\Result<GetPolicyResponse>>;
  public function ListProfileTimes(ListProfileTimesRequest) Awaitable<Errors\Result<ListProfileTimesResponse>>;
  public function PostAgentProfile(PostAgentProfileRequest) Awaitable<Errors\Result<PostAgentProfileResponse>>;
  public function RemovePermission(RemovePermissionRequest) Awaitable<Errors\Result<RemovePermissionResponse>>;
}

class ProfilingStatus {
  public Timestamp $latest_agent_orchestrated_at;
  public Timestamp $latest_agent_profile_reported_at;
  public AggregatedProfileTime $latest_aggregated_profile;
}

class ResourceNotFoundException {
  public string $message;
}

class UpdateProfilingGroupRequest {
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ProfilingGroupName $profiling_group_name;
}

class UpdateProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;
}

class ConflictException {
  public string $message;
}

class DeleteProfilingGroupResponse {
}

class Integer {
}

class Principal {
}

class ServiceQuotaExceededException {
  public string $message;
}

class ProfilingGroupArn {
}

class RemovePermissionRequest {
  public ActionGroup $action_group;
  public ProfilingGroupName $profiling_group_name;
  public RevisionId $revision_id;
}

class ListProfilingGroupsResponse {
  public PaginationToken $next_token;
  public ProfilingGroupNames $profiling_group_names;
  public ProfilingGroupDescriptions $profiling_groups;
}

class Period {
}

class ProfilingGroupDescriptions {
}

class PutPermissionResponse {
  public string $policy;
  public RevisionId $revision_id;
}

class ConfigureAgentResponse {
  public AgentConfiguration $configuration;
}

class AggregatedProfile {
}

class ListProfileTimesResponse {
  public PaginationToken $next_token;
  public ProfileTimes $profile_times;
}

class ProfilingGroupDescription {
  public Timestamp $updated_at;
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ProfilingGroupArn $arn;
  public Timestamp $created_at;
  public ProfilingGroupName $name;
  public ProfilingStatus $profiling_status;
}

class Timestamp {
}

class ValidationException {
  public string $message;
}

class DescribeProfilingGroupRequest {
  public ProfilingGroupName $profiling_group_name;
}

class MaxDepth {
}

class RevisionId {
}

class AgentConfiguration {
  public int $period_in_seconds;
  public boolean $should_profile;
}

class Boolean {
}

class PaginationToken {
}

class PutPermissionRequest {
  public ActionGroup $action_group;
  public Principals $principals;
  public ProfilingGroupName $profiling_group_name;
  public RevisionId $revision_id;
}

class ActionGroup {
}

class AggregatedProfileTime {
  public AggregationPeriod $period;
  public Timestamp $start;
}

class PostAgentProfileRequest {
  public ProfilingGroupName $profiling_group_name;
  public AgentProfile $agent_profile;
  public string $content_type;
  public ClientToken $profile_token;
}

class ProfilingGroupName {
}

class RemovePermissionResponse {
  public string $policy;
  public RevisionId $revision_id;
}

class InternalServerException {
  public string $message;
}

class ThrottlingException {
  public string $message;
}

class AggregationPeriod {
}

class ConfigureAgentRequest {
  public FleetInstanceId $fleet_instance_id;
  public ProfilingGroupName $profiling_group_name;
}

class PostAgentProfileResponse {
}

class DeleteProfilingGroupRequest {
  public ProfilingGroupName $profiling_group_name;
}

class ProfileTimes {
}

class String {
}

class OrderBy {
}

class Principals {
}

class AgentOrchestrationConfig {
  public boolean $profiling_enabled;
}

class ClientToken {
}

class CreateProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;
}

class DescribeProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;
}

class GetPolicyRequest {
  public ProfilingGroupName $profiling_group_name;
}

class GetPolicyResponse {
  public string $policy;
  public RevisionId $revision_id;
}

class AgentProfile {
}

class ListProfileTimesRequest {
  public Timestamp $end_time;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public OrderBy $order_by;
  public AggregationPeriod $period;
  public ProfilingGroupName $profiling_group_name;
  public Timestamp $start_time;
}

class ListProfilingGroupsRequest {
  public boolean $include_description;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class MaxResults {
}

class CreateProfilingGroupRequest {
  public ProfilingGroupName $profiling_group_name;
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ClientToken $client_token;
}

class FleetInstanceId {
}

class GetProfileRequest {
  public string $accept;
  public Timestamp $end_time;
  public MaxDepth $max_depth;
  public Period $period;
  public ProfilingGroupName $profiling_group_name;
  public Timestamp $start_time;
}

class GetProfileResponse {
  public string $content_encoding;
  public string $content_type;
  public AggregatedProfile $profile;
}

class ProfileTime {
  public Timestamp $start;
}

class ProfilingGroupNames {
}

