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

class ActionGroup {
}

class AgentConfiguration {
  public int $period_in_seconds;
  public boolean $should_profile;
}

class AgentOrchestrationConfig {
  public boolean $profiling_enabled;
}

class AgentProfile {
}

class AggregatedProfile {
}

class AggregatedProfileTime {
  public AggregationPeriod $period;
  public Timestamp $start;
}

class AggregationPeriod {
}

class Boolean {
}

class ClientToken {
}

class ConfigureAgentRequest {
  public FleetInstanceId $fleet_instance_id;
  public ProfilingGroupName $profiling_group_name;
}

class ConfigureAgentResponse {
  public AgentConfiguration $configuration;
}

class ConflictException {
  public string $message;
}

class CreateProfilingGroupRequest {
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ClientToken $client_token;
  public ProfilingGroupName $profiling_group_name;
}

class CreateProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;
}

class DeleteProfilingGroupRequest {
  public ProfilingGroupName $profiling_group_name;
}

class DeleteProfilingGroupResponse {
}

class DescribeProfilingGroupRequest {
  public ProfilingGroupName $profiling_group_name;
}

class DescribeProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;
}

class FleetInstanceId {
}

class GetPolicyRequest {
  public ProfilingGroupName $profiling_group_name;
}

class GetPolicyResponse {
  public string $policy;
  public RevisionId $revision_id;
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

class Integer {
}

class InternalServerException {
  public string $message;
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

class ListProfileTimesResponse {
  public PaginationToken $next_token;
  public ProfileTimes $profile_times;
}

class ListProfilingGroupsRequest {
  public boolean $include_description;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListProfilingGroupsResponse {
  public PaginationToken $next_token;
  public ProfilingGroupNames $profiling_group_names;
  public ProfilingGroupDescriptions $profiling_groups;
}

class MaxDepth {
}

class MaxResults {
}

class OrderBy {
}

class PaginationToken {
}

class Period {
}

class PostAgentProfileRequest {
  public AgentProfile $agent_profile;
  public string $content_type;
  public ClientToken $profile_token;
  public ProfilingGroupName $profiling_group_name;
}

class PostAgentProfileResponse {
}

class Principal {
}

class Principals {
}

class ProfileTime {
  public Timestamp $start;
}

class ProfileTimes {
}

class ProfilingGroupArn {
}

class ProfilingGroupDescription {
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ProfilingGroupArn $arn;
  public Timestamp $created_at;
  public ProfilingGroupName $name;
  public ProfilingStatus $profiling_status;
  public Timestamp $updated_at;
}

class ProfilingGroupDescriptions {
}

class ProfilingGroupName {
}

class ProfilingGroupNames {
}

class ProfilingStatus {
  public Timestamp $latest_agent_orchestrated_at;
  public Timestamp $latest_agent_profile_reported_at;
  public AggregatedProfileTime $latest_aggregated_profile;
}

class PutPermissionRequest {
  public ActionGroup $action_group;
  public Principals $principals;
  public ProfilingGroupName $profiling_group_name;
  public RevisionId $revision_id;
}

class PutPermissionResponse {
  public string $policy;
  public RevisionId $revision_id;
}

class RemovePermissionRequest {
  public ActionGroup $action_group;
  public ProfilingGroupName $profiling_group_name;
  public RevisionId $revision_id;
}

class RemovePermissionResponse {
  public string $policy;
  public RevisionId $revision_id;
}

class ResourceNotFoundException {
  public string $message;
}

class RevisionId {
}

class ServiceQuotaExceededException {
  public string $message;
}

class String {
}

class ThrottlingException {
  public string $message;
}

class Timestamp {
}

class UpdateProfilingGroupRequest {
  public AgentOrchestrationConfig $agent_orchestration_config;
  public ProfilingGroupName $profiling_group_name;
}

class UpdateProfilingGroupResponse {
  public ProfilingGroupDescription $profiling_group;
}

class ValidationException {
  public string $message;
}

