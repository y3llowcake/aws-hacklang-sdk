<?hh // strict
namespace slack\aws\gamelift;

interface GameLift {
  public function DeregisterGameServer(DeregisterGameServerInput) Awaitable<Errors\Error>;
  public function DescribeBuild(DescribeBuildInput) Awaitable<Errors\Result<DescribeBuildOutput>>;
  public function DescribeMatchmakingConfigurations(DescribeMatchmakingConfigurationsInput) Awaitable<Errors\Result<DescribeMatchmakingConfigurationsOutput>>;
  public function DescribeScript(DescribeScriptInput) Awaitable<Errors\Result<DescribeScriptOutput>>;
  public function ListBuilds(ListBuildsInput) Awaitable<Errors\Result<ListBuildsOutput>>;
  public function ListGameServerGroups(ListGameServerGroupsInput) Awaitable<Errors\Result<ListGameServerGroupsOutput>>;
  public function CreateMatchmakingConfiguration(CreateMatchmakingConfigurationInput) Awaitable<Errors\Result<CreateMatchmakingConfigurationOutput>>;
  public function DeleteGameServerGroup(DeleteGameServerGroupInput) Awaitable<Errors\Result<DeleteGameServerGroupOutput>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutScalingPolicy(PutScalingPolicyInput) Awaitable<Errors\Result<PutScalingPolicyOutput>>;
  public function RequestUploadCredentials(RequestUploadCredentialsInput) Awaitable<Errors\Result<RequestUploadCredentialsOutput>>;
  public function DeleteVpcPeeringAuthorization(DeleteVpcPeeringAuthorizationInput) Awaitable<Errors\Result<DeleteVpcPeeringAuthorizationOutput>>;
  public function DescribeEC2InstanceLimits(DescribeEC2InstanceLimitsInput) Awaitable<Errors\Result<DescribeEC2InstanceLimitsOutput>>;
  public function ValidateMatchmakingRuleSet(ValidateMatchmakingRuleSetInput) Awaitable<Errors\Result<ValidateMatchmakingRuleSetOutput>>;
  public function CreateFleet(CreateFleetInput) Awaitable<Errors\Result<CreateFleetOutput>>;
  public function DeleteScalingPolicy(DeleteScalingPolicyInput) Awaitable<Errors\Error>;
  public function DescribeVpcPeeringAuthorizations(DescribeVpcPeeringAuthorizationsInput) Awaitable<Errors\Result<DescribeVpcPeeringAuthorizationsOutput>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateGameServer(UpdateGameServerInput) Awaitable<Errors\Result<UpdateGameServerOutput>>;
  public function UpdateScript(UpdateScriptInput) Awaitable<Errors\Result<UpdateScriptOutput>>;
  public function CreateAlias(CreateAliasInput) Awaitable<Errors\Result<CreateAliasOutput>>;
  public function DeleteMatchmakingRuleSet(DeleteMatchmakingRuleSetInput) Awaitable<Errors\Result<DeleteMatchmakingRuleSetOutput>>;
  public function DescribeVpcPeeringConnections(DescribeVpcPeeringConnectionsInput) Awaitable<Errors\Result<DescribeVpcPeeringConnectionsOutput>>;
  public function UpdateMatchmakingConfiguration(UpdateMatchmakingConfigurationInput) Awaitable<Errors\Result<UpdateMatchmakingConfigurationOutput>>;
  public function CreateGameSessionQueue(CreateGameSessionQueueInput) Awaitable<Errors\Result<CreateGameSessionQueueOutput>>;
  public function CreatePlayerSession(CreatePlayerSessionInput) Awaitable<Errors\Result<CreatePlayerSessionOutput>>;
  public function CreateVpcPeeringAuthorization(CreateVpcPeeringAuthorizationInput) Awaitable<Errors\Result<CreateVpcPeeringAuthorizationOutput>>;
  public function DescribeFleetPortSettings(DescribeFleetPortSettingsInput) Awaitable<Errors\Result<DescribeFleetPortSettingsOutput>>;
  public function DescribeGameServer(DescribeGameServerInput) Awaitable<Errors\Result<DescribeGameServerOutput>>;
  public function SearchGameSessions(SearchGameSessionsInput) Awaitable<Errors\Result<SearchGameSessionsOutput>>;
  public function DescribeFleetCapacity(DescribeFleetCapacityInput) Awaitable<Errors\Result<DescribeFleetCapacityOutput>>;
  public function DescribeGameServerGroup(DescribeGameServerGroupInput) Awaitable<Errors\Result<DescribeGameServerGroupOutput>>;
  public function DescribeGameSessionPlacement(DescribeGameSessionPlacementInput) Awaitable<Errors\Result<DescribeGameSessionPlacementOutput>>;
  public function DescribeMatchmakingRuleSets(DescribeMatchmakingRuleSetsInput) Awaitable<Errors\Result<DescribeMatchmakingRuleSetsOutput>>;
  public function StartMatchBackfill(StartMatchBackfillInput) Awaitable<Errors\Result<StartMatchBackfillOutput>>;
  public function SuspendGameServerGroup(SuspendGameServerGroupInput) Awaitable<Errors\Result<SuspendGameServerGroupOutput>>;
  public function StopGameSessionPlacement(StopGameSessionPlacementInput) Awaitable<Errors\Result<StopGameSessionPlacementOutput>>;
  public function CreateBuild(CreateBuildInput) Awaitable<Errors\Result<CreateBuildOutput>>;
  public function CreateGameServerGroup(CreateGameServerGroupInput) Awaitable<Errors\Result<CreateGameServerGroupOutput>>;
  public function DescribeFleetAttributes(DescribeFleetAttributesInput) Awaitable<Errors\Result<DescribeFleetAttributesOutput>>;
  public function DescribeInstances(DescribeInstancesInput) Awaitable<Errors\Result<DescribeInstancesOutput>>;
  public function DescribeMatchmaking(DescribeMatchmakingInput) Awaitable<Errors\Result<DescribeMatchmakingOutput>>;
  public function GetInstanceAccess(GetInstanceAccessInput) Awaitable<Errors\Result<GetInstanceAccessOutput>>;
  public function StopFleetActions(StopFleetActionsInput) Awaitable<Errors\Result<StopFleetActionsOutput>>;
  public function UpdateBuild(UpdateBuildInput) Awaitable<Errors\Result<UpdateBuildOutput>>;
  public function CreateScript(CreateScriptInput) Awaitable<Errors\Result<CreateScriptOutput>>;
  public function DescribeAlias(DescribeAliasInput) Awaitable<Errors\Result<DescribeAliasOutput>>;
  public function DescribePlayerSessions(DescribePlayerSessionsInput) Awaitable<Errors\Result<DescribePlayerSessionsOutput>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateFleetAttributes(UpdateFleetAttributesInput) Awaitable<Errors\Result<UpdateFleetAttributesOutput>>;
  public function UpdateRuntimeConfiguration(UpdateRuntimeConfigurationInput) Awaitable<Errors\Result<UpdateRuntimeConfigurationOutput>>;
  public function CreateGameSession(CreateGameSessionInput) Awaitable<Errors\Result<CreateGameSessionOutput>>;
  public function UpdateFleetCapacity(UpdateFleetCapacityInput) Awaitable<Errors\Result<UpdateFleetCapacityOutput>>;
  public function UpdateGameServerGroup(UpdateGameServerGroupInput) Awaitable<Errors\Result<UpdateGameServerGroupOutput>>;
  public function UpdateGameSession(UpdateGameSessionInput) Awaitable<Errors\Result<UpdateGameSessionOutput>>;
  public function DescribeGameSessions(DescribeGameSessionsInput) Awaitable<Errors\Result<DescribeGameSessionsOutput>>;
  public function ResolveAlias(ResolveAliasInput) Awaitable<Errors\Result<ResolveAliasOutput>>;
  public function UpdateFleetPortSettings(UpdateFleetPortSettingsInput) Awaitable<Errors\Result<UpdateFleetPortSettingsOutput>>;
  public function CreateVpcPeeringConnection(CreateVpcPeeringConnectionInput) Awaitable<Errors\Result<CreateVpcPeeringConnectionOutput>>;
  public function DescribeFleetEvents(DescribeFleetEventsInput) Awaitable<Errors\Result<DescribeFleetEventsOutput>>;
  public function DescribeGameSessionQueues(DescribeGameSessionQueuesInput) Awaitable<Errors\Result<DescribeGameSessionQueuesOutput>>;
  public function DescribeScalingPolicies(DescribeScalingPoliciesInput) Awaitable<Errors\Result<DescribeScalingPoliciesOutput>>;
  public function ResumeGameServerGroup(ResumeGameServerGroupInput) Awaitable<Errors\Result<ResumeGameServerGroupOutput>>;
  public function StartGameSessionPlacement(StartGameSessionPlacementInput) Awaitable<Errors\Result<StartGameSessionPlacementOutput>>;
  public function DeleteFleet(DeleteFleetInput) Awaitable<Errors\Error>;
  public function DeleteMatchmakingConfiguration(DeleteMatchmakingConfigurationInput) Awaitable<Errors\Result<DeleteMatchmakingConfigurationOutput>>;
  public function DeleteVpcPeeringConnection(DeleteVpcPeeringConnectionInput) Awaitable<Errors\Result<DeleteVpcPeeringConnectionOutput>>;
  public function RegisterGameServer(RegisterGameServerInput) Awaitable<Errors\Result<RegisterGameServerOutput>>;
  public function StartMatchmaking(StartMatchmakingInput) Awaitable<Errors\Result<StartMatchmakingOutput>>;
  public function AcceptMatch(AcceptMatchInput) Awaitable<Errors\Result<AcceptMatchOutput>>;
  public function ClaimGameServer(ClaimGameServerInput) Awaitable<Errors\Result<ClaimGameServerOutput>>;
  public function DeleteAlias(DeleteAliasInput) Awaitable<Errors\Error>;
  public function StopMatchmaking(StopMatchmakingInput) Awaitable<Errors\Result<StopMatchmakingOutput>>;
  public function UpdateAlias(UpdateAliasInput) Awaitable<Errors\Result<UpdateAliasOutput>>;
  public function CreateMatchmakingRuleSet(CreateMatchmakingRuleSetInput) Awaitable<Errors\Result<CreateMatchmakingRuleSetOutput>>;
  public function DeleteScript(DeleteScriptInput) Awaitable<Errors\Error>;
  public function DescribeFleetUtilization(DescribeFleetUtilizationInput) Awaitable<Errors\Result<DescribeFleetUtilizationOutput>>;
  public function ListAliases(ListAliasesInput) Awaitable<Errors\Result<ListAliasesOutput>>;
  public function ListGameServers(ListGameServersInput) Awaitable<Errors\Result<ListGameServersOutput>>;
  public function ListScripts(ListScriptsInput) Awaitable<Errors\Result<ListScriptsOutput>>;
  public function StartFleetActions(StartFleetActionsInput) Awaitable<Errors\Result<StartFleetActionsOutput>>;
  public function CreatePlayerSessions(CreatePlayerSessionsInput) Awaitable<Errors\Result<CreatePlayerSessionsOutput>>;
  public function DeleteBuild(DeleteBuildInput) Awaitable<Errors\Error>;
  public function DeleteGameSessionQueue(DeleteGameSessionQueueInput) Awaitable<Errors\Result<DeleteGameSessionQueueOutput>>;
  public function DescribeGameSessionDetails(DescribeGameSessionDetailsInput) Awaitable<Errors\Result<DescribeGameSessionDetailsOutput>>;
  public function DescribeRuntimeConfiguration(DescribeRuntimeConfigurationInput) Awaitable<Errors\Result<DescribeRuntimeConfigurationOutput>>;
  public function GetGameSessionLogUrl(GetGameSessionLogUrlInput) Awaitable<Errors\Result<GetGameSessionLogUrlOutput>>;
  public function ListFleets(ListFleetsInput) Awaitable<Errors\Result<ListFleetsOutput>>;
  public function UpdateGameSessionQueue(UpdateGameSessionQueueInput) Awaitable<Errors\Result<UpdateGameSessionQueueOutput>>;
}

class DescribeAliasInput {
  public AliasIdOrArn $alias_id;
}

class DescribeInstancesInput {
  public FleetIdOrArn $fleet_id;
  public InstanceId $instance_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class Event {
  public NonZeroAndMaxString $event_id;
  public NonZeroAndMaxString $resource_id;
  public EventCode $event_code;
  public NonEmptyString $message;
  public Timestamp $event_time;
  public NonZeroAndMaxString $pre_signed_log_url;
}

class LatencyMap {
}

class PlacedPlayerSession {
  public NonZeroAndMaxString $player_id;
  public PlayerSessionId $player_session_id;
}

class StopFleetActionsInput {
  public FleetIdOrArn $fleet_id;
  public FleetActionList $actions;
}

class CreateAliasOutput {
  public Alias $alias;
}

class DescribeEC2InstanceLimitsOutput {
  public EC2InstanceLimitList $ec_2_instance_limits;
}

class DescribeGameSessionPlacementInput {
  public IdStringModel $placement_id;
}

class UpdateRuntimeConfigurationInput {
  public FleetIdOrArn $fleet_id;
  public RuntimeConfiguration $runtime_configuration;
}

class AliasId {
}

class AliasList {
}

class CreateVpcPeeringConnectionOutput {
}

class EC2InstanceType {
}

class Player {
  public NonZeroAndMaxString $player_id;
  public PlayerAttributeMap $player_attributes;
  public NonZeroAndMaxString $team;
  public LatencyMap $latency_in_ms;
}

class CreateGameSessionQueueOutput {
  public GameSessionQueue $game_session_queue;
}

class CreateMatchmakingRuleSetInput {
  public MatchmakingIdStringModel $name;
  public RuleSetBody $rule_set_body;
  public TagList $tags;
}

class CreateVpcPeeringAuthorizationOutput {
  public VpcPeeringAuthorization $vpc_peering_authorization;
}

class CustomEventData {
}

class InstanceCredentials {
  public NonEmptyString $user_name;
  public NonEmptyString $secret;
}

class TerminalRoutingStrategyException {
  public NonEmptyString $message;
}

class CreatePlayerSessionOutput {
  public PlayerSession $player_session;
}

class DescribeInstancesOutput {
  public InstanceList $instances;
  public NonZeroAndMaxString $next_token;
}

class RequestUploadCredentialsOutput {
  public AwsCredentials $upload_credentials;
  public S3Location $storage_location;
}

class S3Location {
  public NonEmptyString $object_version;
  public NonEmptyString $bucket;
  public NonEmptyString $key;
  public NonEmptyString $role_arn;
}

class TagKey {
}

class UpdateFleetPortSettingsInput {
  public IpPermissionsList $inbound_permission_revocations;
  public FleetIdOrArn $fleet_id;
  public IpPermissionsList $inbound_permission_authorizations;
}

class ConflictException {
  public NonEmptyString $message;
}

class DescribeFleetPortSettingsOutput {
  public IpPermissionsList $inbound_permissions;
}

class GameSessionQueueName {
}

class ListGameServersInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public SortOrder $sort_order;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class ScalingPolicyList {
}

class SuspendGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class DeleteScalingPolicyInput {
  public NonZeroAndMaxString $name;
  public FleetIdOrArn $fleet_id;
}

class DesiredPlayerSession {
  public NonZeroAndMaxString $player_id;
  public PlayerData $player_data;
}

class GameSessionList {
}

class PlayerDataMap {
}

class TagValue {
}

class CreatePlayerSessionsInput {
  public ArnStringModel $game_session_id;
  public PlayerIdList $player_ids;
  public PlayerDataMap $player_data_map;
}

class DescribeVpcPeeringAuthorizationsOutput {
  public VpcPeeringAuthorizationList $vpc_peering_authorizations;
}

class GameSessionQueueNameOrArnList {
}

class ServerProcessList {
}

class GameServerConnectionInfo {
}

class ValidateMatchmakingRuleSetInput {
  public RuleSetBody $rule_set_body;
}

class CreateBuildInput {
  public TagList $tags;
  public NonZeroAndMaxString $name;
  public NonZeroAndMaxString $version;
  public S3Location $storage_location;
  public OperatingSystem $operating_system;
}

class GameServer {
  public GameServerGroupName $game_server_group_name;
  public GameServerId $game_server_id;
  public GameServerConnectionInfo $connection_info;
  public GameServerData $game_server_data;
  public Timestamp $registration_time;
  public Timestamp $last_claim_time;
  public GameServerGroupArn $game_server_group_arn;
  public GameServerInstanceId $instance_id;
  public GameServerSortKey $custom_sort_key;
  public GameServerClaimStatus $claim_status;
  public GameServerUtilizationStatus $utilization_status;
  public Timestamp $last_health_check_time;
}

class MatchedPlayerSessionList {
}

class ScriptArn {
}

class TaggingFailedException {
  public NonEmptyString $message;
}

class TargetConfiguration {
  public Double $target_value;
}

class GameServerProtectionPolicy {
}

class VpcPeeringAuthorizationList {
}

class PlayerSessionList {
}

class AcceptMatchOutput {
}

class BuildArn {
}

class DescribeFleetPortSettingsInput {
  public FleetIdOrArn $fleet_id;
}

class EC2InstanceCounts {
  public WholeNumber $active;
  public WholeNumber $idle;
  public WholeNumber $terminating;
  public WholeNumber $desired;
  public WholeNumber $minimum;
  public WholeNumber $maximum;
  public WholeNumber $pending;
}

class FleetActionList {
}

class FleetAttributesList {
}

class UpdateScriptOutput {
  public Script $script;
}

class GameSessionQueueList {
}

class PlayerIdList {
}

class RuleSetBody {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class Timestamp {
}

class UpdateGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class CreateMatchmakingRuleSetOutput {
  public MatchmakingRuleSet $rule_set;
}

class ListGameServersOutput {
  public GameServers $game_servers;
  public NonZeroAndMaxString $next_token;
}

class TargetTrackingConfiguration {
  public NonNegativeDouble $target_value;
}

class UpdateGameServerGroupInput {
  public BalancingStrategy $balancing_strategy;
  public GameServerGroupNameOrArn $game_server_group_name;
  public IamRoleArn $role_arn;
  public InstanceDefinitions $instance_definitions;
  public GameServerProtectionPolicy $game_server_protection_policy;
}

class StartFleetActionsOutput {
}

class CreateAliasInput {
  public NonBlankAndLengthConstraintString $name;
  public NonZeroAndMaxString $description;
  public RoutingStrategy $routing_strategy;
  public TagList $tags;
}

class DeleteGameServerGroupInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerGroupDeleteOption $delete_option;
}

class DescribeGameServerOutput {
  public GameServer $game_server;
}

class DescribeGameSessionQueuesOutput {
  public GameSessionQueueList $game_session_queues;
  public NonZeroAndMaxString $next_token;
}

class DescribePlayerSessionsInput {
  public ArnStringModel $game_session_id;
  public NonZeroAndMaxString $player_id;
  public PlayerSessionId $player_session_id;
  public NonZeroAndMaxString $player_session_status_filter;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class PlayerList {
}

class Float {
}

class GetGameSessionLogUrlInput {
  public ArnStringModel $game_session_id;
}

class IpPermission {
  public PortNumber $from_port;
  public PortNumber $to_port;
  public NonBlankString $ip_range;
  public IpProtocol $protocol;
}

class MetricName {
}

class PlacedPlayerSessionList {
}

class UpdateGameSessionQueueOutput {
  public GameSessionQueue $game_session_queue;
}

class CreateGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class GameServerGroupArn {
}

class TagList {
}

class ZipBlob {
}

class DescribeRuntimeConfigurationInput {
  public FleetIdOrArn $fleet_id;
}

class LaunchTemplateId {
}

class ListBuildsInput {
  public PositiveInteger $limit;
  public NonEmptyString $next_token;
  public BuildStatus $status;
}

class ListFleetsInput {
  public BuildIdOrArn $build_id;
  public ScriptIdOrArn $script_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class ProtectionPolicy {
}

class WeightedCapacity {
}

class DeleteVpcPeeringConnectionOutput {
}

class GetInstanceAccessInput {
  public FleetIdOrArn $fleet_id;
  public InstanceId $instance_id;
}

class InstanceList {
}

class LaunchTemplateName {
}

class LimitExceededException {
  public NonEmptyString $message;
}

class TagKeyList {
}

class DescribeGameServerInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
}

class DescribeGameSessionDetailsInput {
  public NonZeroAndMaxString $next_token;
  public FleetIdOrArn $fleet_id;
  public ArnStringModel $game_session_id;
  public AliasIdOrArn $alias_id;
  public NonZeroAndMaxString $status_filter;
  public PositiveInteger $limit;
}

class MatchmakingIdList {
}

class UpdateAliasInput {
  public AliasIdOrArn $alias_id;
  public NonBlankAndLengthConstraintString $name;
  public NonZeroAndMaxString $description;
  public RoutingStrategy $routing_strategy;
}

class UpdateFleetAttributesInput {
  public FleetIdOrArn $fleet_id;
  public NonZeroAndMaxString $name;
  public NonZeroAndMaxString $description;
  public ProtectionPolicy $new_game_session_protection_policy;
  public ResourceCreationLimitPolicy $resource_creation_limit_policy;
  public MetricGroupList $metric_groups;
}

class AttributeValue {
  public StringDoubleMap $sdm;
  public NonZeroAndMaxString $s;
  public DoubleObject $n;
  public StringList $sl;
}

class CreateMatchmakingConfigurationOutput {
  public MatchmakingConfiguration $configuration;
}

class DescribeScalingPoliciesOutput {
  public ScalingPolicyList $scaling_policies;
  public NonZeroAndMaxString $next_token;
}

class GameServers {
}

class ListScriptsOutput {
  public ScriptList $scripts;
  public NonEmptyString $next_token;
}

class DescribeBuildOutput {
  public Build $build;
}

class IpPermissionsList {
}

class ListGameServerGroupsInput {
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class MatchmakingRequestTimeoutInteger {
}

class ScalingStatusType {
}

class UpdateGameSessionQueueInput {
  public GameSessionQueueNameOrArn $name;
  public WholeNumber $timeout_in_seconds;
  public PlayerLatencyPolicyList $player_latency_policies;
  public GameSessionQueueDestinationList $destinations;
}

class MatchedPlayerSession {
  public NonZeroAndMaxString $player_id;
  public PlayerSessionId $player_session_id;
}

class ResourceCreationLimitPolicy {
  public WholeNumber $new_game_sessions_per_creator;
  public WholeNumber $policy_period_in_minutes;
}

class CertificateType {
}

class ComparisonOperatorType {
}

class DeleteGameSessionQueueInput {
  public GameSessionQueueNameOrArn $name;
}

class DescribeMatchmakingConfigurationsOutput {
  public MatchmakingConfigurationList $configurations;
  public NonZeroAndMaxString $next_token;
}

class GameServerGroupActions {
}

class InternalServiceException {
  public NonEmptyString $message;
}

class StartMatchBackfillOutput {
  public MatchmakingTicket $matchmaking_ticket;
}

class DescribeAliasOutput {
  public Alias $alias;
}

class DescribeVpcPeeringConnectionsInput {
  public FleetId $fleet_id;
}

class ListAliasesOutput {
  public NonEmptyString $next_token;
  public AliasList $aliases;
}

class MatchmakingRuleSetNameList {
}

class RuleSetLimit {
}

class StopFleetActionsOutput {
}

class MetricGroup {
}

class PositiveLong {
}

class DescribeScalingPoliciesInput {
  public FleetIdOrArn $fleet_id;
  public ScalingStatusType $status_filter;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class GameServerGroups {
}

class GameSessionQueueDestination {
  public ArnStringModel $destination_arn;
}

class GetGameSessionLogUrlOutput {
  public NonZeroAndMaxString $pre_signed_url;
}

class IdStringModel {
}

class Instance {
  public InstanceStatus $status;
  public Timestamp $creation_time;
  public FleetId $fleet_id;
  public InstanceId $instance_id;
  public IpAddress $ip_address;
  public DnsName $dns_name;
  public OperatingSystem $operating_system;
  public EC2InstanceType $type;
}

class RegisterGameServerInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
  public GameServerInstanceId $instance_id;
  public GameServerConnectionInfo $connection_info;
  public GameServerData $game_server_data;
  public GameServerSortKey $custom_sort_key;
  public TagList $tags;
}

class SortOrder {
}

class StringList {
}

class AliasIdOrArn {
}

class BackfillMode {
}

class DeregisterGameServerInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
}

class DescribeScriptInput {
  public ScriptIdOrArn $script_id;
}

class GameSessionStatus {
}

class PolicyType {
}

class NonZeroAndMaxString {
}

class PlayerSessionId {
}

class GameServerGroup {
  public GameServerGroupName $game_server_group_name;
  public Timestamp $last_updated_time;
  public GameServerGroupArn $game_server_group_arn;
  public IamRoleArn $role_arn;
  public InstanceDefinitions $instance_definitions;
  public BalancingStrategy $balancing_strategy;
  public GameServerProtectionPolicy $game_server_protection_policy;
  public AutoScalingGroupArn $auto_scaling_group_arn;
  public GameServerGroupStatus $status;
  public NonZeroAndMaxString $status_reason;
  public GameServerGroupActions $suspended_actions;
  public Timestamp $creation_time;
}

class GameServerGroupInstanceType {
}

class GameSessionData {
}

class InstanceStatus {
}

class MatchmakingConfiguration {
  public MatchmakingIdStringModel $rule_set_name;
  public BackfillMode $backfill_mode;
  public MatchmakingIdStringModel $name;
  public QueueArnsList $game_session_queue_arns;
  public MatchmakingRequestTimeoutInteger $request_timeout_seconds;
  public MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public MatchmakingConfigurationArn $configuration_arn;
  public NonZeroAndMaxString $description;
  public BooleanModel $acceptance_required;
  public SnsArnStringModel $notification_target;
  public WholeNumber $additional_player_count;
  public CustomEventData $custom_event_data;
  public Timestamp $creation_time;
  public GamePropertyList $game_properties;
  public GameSessionData $game_session_data;
  public MatchmakingRuleSetArn $rule_set_arn;
}

class MatchmakingIdStringModel {
}

class StartMatchmakingInput {
  public MatchmakingIdStringModel $ticket_id;
  public MatchmakingConfigurationName $configuration_name;
  public PlayerList $players;
}

class AcceptMatchInput {
  public MatchmakingIdStringModel $ticket_id;
  public StringList $player_ids;
  public AcceptanceType $acceptance_type;
}

class FleetIdOrArnList {
}

class GameServerGroupAutoScalingPolicy {
  public PositiveInteger $estimated_instance_warmup;
  public TargetTrackingConfiguration $target_tracking_configuration;
}

class GameServerUtilizationStatus {
}

class PutScalingPolicyInput {
  public ComparisonOperatorType $comparison_operator;
  public MetricName $metric_name;
  public PolicyType $policy_type;
  public TargetConfiguration $target_configuration;
  public NonZeroAndMaxString $name;
  public FleetIdOrArn $fleet_id;
  public ScalingAdjustmentType $scaling_adjustment_type;
  public Double $threshold;
  public int $scaling_adjustment;
  public PositiveInteger $evaluation_periods;
}

class SearchGameSessionsInput {
  public NonZeroAndMaxString $next_token;
  public FleetIdOrArn $fleet_id;
  public AliasIdOrArn $alias_id;
  public NonZeroAndMaxString $filter_expression;
  public NonZeroAndMaxString $sort_expression;
  public PositiveInteger $limit;
}

class GameSessionPlacement {
  public NonZeroAndMaxString $game_session_region;
  public IdStringModel $placement_id;
  public GamePropertyList $game_properties;
  public NonZeroAndMaxString $game_session_id;
  public PlayerLatencyList $player_latencies;
  public DnsName $dns_name;
  public GameSessionData $game_session_data;
  public GameSessionQueueName $game_session_queue_name;
  public GameSessionPlacementState $status;
  public IpAddress $ip_address;
  public PlacedPlayerSessionList $placed_player_sessions;
  public WholeNumber $maximum_player_session_count;
  public NonZeroAndMaxString $game_session_name;
  public NonZeroAndMaxString $game_session_arn;
  public Timestamp $start_time;
  public Timestamp $end_time;
  public PortNumber $port;
  public MatchmakerData $matchmaker_data;
}

class GameSessionStatusReason {
}

class ArnStringModel {
}

class DescribeFleetEventsInput {
  public FleetIdOrArn $fleet_id;
  public Timestamp $start_time;
  public Timestamp $end_time;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class DescribeGameServerGroupInput {
  public GameServerGroupNameOrArn $game_server_group_name;
}

class DescribeMatchmakingRuleSetsOutput {
  public NonZeroAndMaxString $next_token;
  public MatchmakingRuleSetList $rule_sets;
}

class FleetUtilizationList {
}

class GameProperty {
  public GamePropertyKey $key;
  public GamePropertyValue $value;
}

class ServerProcess {
  public NonZeroAndMaxString $launch_path;
  public NonZeroAndMaxString $parameters;
  public PositiveInteger $concurrent_executions;
}

class StopMatchmakingInput {
  public MatchmakingIdStringModel $ticket_id;
}

class BuildStatus {
}

class CreateFleetOutput {
  public FleetAttributes $fleet_attributes;
}

class DescribeFleetAttributesOutput {
  public FleetAttributesList $fleet_attributes;
  public NonZeroAndMaxString $next_token;
}

class FleetCapacityExceededException {
  public NonEmptyString $message;
}

class MatchmakingConfigurationArn {
}

class MatchmakingRuleSet {
  public RuleSetBody $rule_set_body;
  public Timestamp $creation_time;
  public MatchmakingIdStringModel $rule_set_name;
  public MatchmakingRuleSetArn $rule_set_arn;
}

class UpdateBuildInput {
  public NonZeroAndMaxString $version;
  public BuildIdOrArn $build_id;
  public NonZeroAndMaxString $name;
}

class AwsCredentials {
  public NonEmptyString $access_key_id;
  public NonEmptyString $secret_access_key;
  public NonEmptyString $session_token;
}

class EC2InstanceLimitList {
}

class FleetType {
}

class MatchmakingTicketList {
}

class VpcPeeringConnectionList {
}

class CreatePlayerSessionInput {
  public ArnStringModel $game_session_id;
  public NonZeroAndMaxString $player_id;
  public PlayerData $player_data;
}

class GameServerInstanceId {
}

class GetInstanceAccessOutput {
  public InstanceAccess $instance_access;
}

class RegisterGameServerOutput {
  public GameServer $game_server;
}

class ResumeGameServerGroupInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerGroupActions $resume_actions;
}

class StartMatchBackfillInput {
  public MatchmakingIdStringModel $ticket_id;
  public MatchmakingConfigurationName $configuration_name;
  public ArnStringModel $game_session_arn;
  public PlayerList $players;
}

class BuildList {
}

class CreateVpcPeeringConnectionInput {
  public FleetId $fleet_id;
  public NonZeroAndMaxString $peer_vpc_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
}

class DescribeVpcPeeringConnectionsOutput {
  public VpcPeeringConnectionList $vpc_peering_connections;
}

class IamRoleArn {
}

class NonEmptyString {
}

class NotFoundException {
  public NonEmptyString $message;
}

class DescribeFleetUtilizationInput {
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public FleetIdOrArnList $fleet_ids;
}

class GamePropertyKey {
}

class ListScriptsInput {
  public PositiveInteger $limit;
  public NonEmptyString $next_token;
}

class PlayerAttributeMap {
}

class PlayerLatencyPolicy {
  public WholeNumber $maximum_individual_player_latency_milliseconds;
  public WholeNumber $policy_duration_seconds;
}

class UpdateRuntimeConfigurationOutput {
  public RuntimeConfiguration $runtime_configuration;
}

class GameServerGroupNameOrArn {
}

class Integer {
}

class ResolveAliasInput {
  public AliasIdOrArn $alias_id;
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class CreateGameServerGroupInput {
  public GameServerGroupName $game_server_group_name;
  public GameServerGroupAutoScalingPolicy $auto_scaling_policy;
  public BalancingStrategy $balancing_strategy;
  public IamRoleArn $role_arn;
  public WholeNumber $min_size;
  public PositiveInteger $max_size;
  public LaunchTemplateSpecification $launch_template;
  public InstanceDefinitions $instance_definitions;
  public GameServerProtectionPolicy $game_server_protection_policy;
  public VpcSubnets $vpc_subnets;
  public TagList $tags;
}

class DescribeGameSessionsOutput {
  public GameSessionList $game_sessions;
  public NonZeroAndMaxString $next_token;
}

class FleetAttributes {
  public NonZeroAndMaxString $server_launch_parameters;
  public ProtectionPolicy $new_game_session_protection_policy;
  public OperatingSystem $operating_system;
  public NonEmptyString $instance_role_arn;
  public EC2InstanceType $instance_type;
  public NonZeroAndMaxString $name;
  public Timestamp $termination_time;
  public StringList $log_paths;
  public CertificateConfiguration $certificate_configuration;
  public FleetArn $fleet_arn;
  public FleetType $fleet_type;
  public NonZeroAndMaxString $description;
  public BuildArn $build_arn;
  public ScriptId $script_id;
  public ResourceCreationLimitPolicy $resource_creation_limit_policy;
  public MetricGroupList $metric_groups;
  public FleetId $fleet_id;
  public FleetStatus $status;
  public BuildId $build_id;
  public ScriptArn $script_arn;
  public NonZeroAndMaxString $server_launch_path;
  public FleetActionList $stopped_actions;
  public Timestamp $creation_time;
}

class InstanceId {
}

class ListFleetsOutput {
  public NonZeroAndMaxString $next_token;
  public FleetIdList $fleet_ids;
}

class NonBlankString {
}

class GameSessionDetail {
  public GameSession $game_session;
  public ProtectionPolicy $protection_policy;
}

class PositiveInteger {
}

class CreateVpcPeeringAuthorizationInput {
  public NonZeroAndMaxString $game_lift_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
}

class DeleteMatchmakingRuleSetOutput {
}

class DescribeGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class DescribeMatchmakingOutput {
  public MatchmakingTicketList $ticket_list;
}

class FleetIdList {
}

class GameServerClaimStatus {
}

class ScalingPolicy {
  public Double $threshold;
  public PositiveInteger $evaluation_periods;
  public MetricName $metric_name;
  public FleetId $fleet_id;
  public ScalingAdjustmentType $scaling_adjustment_type;
  public ComparisonOperatorType $comparison_operator;
  public PolicyType $policy_type;
  public TargetConfiguration $target_configuration;
  public NonZeroAndMaxString $name;
  public ScalingStatusType $status;
  public int $scaling_adjustment;
}

class ScriptId {
}

class UpdateFleetCapacityInput {
  public WholeNumber $max_size;
  public FleetIdOrArn $fleet_id;
  public WholeNumber $desired_instances;
  public WholeNumber $min_size;
}

class DescribeFleetEventsOutput {
  public EventList $events;
  public NonZeroAndMaxString $next_token;
}

class InstanceDefinition {
  public GameServerGroupInstanceType $instance_type;
  public WeightedCapacity $weighted_capacity;
}

class MatchmakingRuleSetName {
}

class StartGameSessionPlacementInput {
  public IdStringModel $placement_id;
  public GameSessionQueueNameOrArn $game_session_queue_name;
  public GamePropertyList $game_properties;
  public WholeNumber $maximum_player_session_count;
  public NonZeroAndMaxString $game_session_name;
  public PlayerLatencyList $player_latencies;
  public DesiredPlayerSessionList $desired_player_sessions;
  public GameSessionData $game_session_data;
}

class SuspendGameServerGroupInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerGroupActions $suspend_actions;
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class CreateGameSessionQueueInput {
  public TagList $tags;
  public GameSessionQueueName $name;
  public WholeNumber $timeout_in_seconds;
  public PlayerLatencyPolicyList $player_latency_policies;
  public GameSessionQueueDestinationList $destinations;
}

class DeleteGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class DesiredPlayerSessionList {
}

class FleetId {
}

class MatchmakingTicket {
  public MatchmakingIdStringModel $ticket_id;
  public MatchmakingConfigurationStatus $status;
  public StringModel $status_reason;
  public PlayerList $players;
  public GameSessionConnectionInfo $game_session_connection_info;
  public MatchmakingIdStringModel $configuration_name;
  public MatchmakingConfigurationArn $configuration_arn;
  public StringModel $status_message;
  public Timestamp $start_time;
  public Timestamp $end_time;
  public WholeNumber $estimated_wait_time;
}

class StopMatchmakingOutput {
}

class CreateGameSessionInput {
  public GameSessionData $game_session_data;
  public FleetIdOrArn $fleet_id;
  public NonZeroAndMaxString $name;
  public NonZeroAndMaxString $creator_id;
  public IdStringModel $game_session_id;
  public AliasIdOrArn $alias_id;
  public WholeNumber $maximum_player_session_count;
  public GamePropertyList $game_properties;
  public IdStringModel $idempotency_token;
}

class EventList {
}

class GamePropertyValue {
}

class GameServerSortKey {
}

class GameSessionQueueDestinationList {
}

class UpdateGameSessionInput {
  public NonZeroAndMaxString $name;
  public PlayerSessionCreationPolicy $player_session_creation_policy;
  public ProtectionPolicy $protection_policy;
  public ArnStringModel $game_session_id;
  public WholeNumber $maximum_player_session_count;
}

class VpcSubnet {
}

class DescribeFleetAttributesInput {
  public FleetIdOrArnList $fleet_ids;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class FleetArn {
}

class InstanceDefinitions {
}

class IpAddress {
}

class QueueArnsList {
}

class UpdateBuildOutput {
  public Build $build;
}

class ClaimGameServerOutput {
  public GameServer $game_server;
}

class EventCode {
}

class GamePropertyList {
}

class GameServerHealthCheck {
}

class UpdateGameServerInput {
  public GameServerSortKey $custom_sort_key;
  public GameServerUtilizationStatus $utilization_status;
  public GameServerHealthCheck $health_check;
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
  public GameServerData $game_server_data;
}

class ValidateMatchmakingRuleSetOutput {
  public BooleanModel $valid;
}

class VpcPeeringAuthorization {
  public Timestamp $expiration_time;
  public NonZeroAndMaxString $game_lift_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
  public Timestamp $creation_time;
}

class AmazonResourceName {
}

class CreateBuildOutput {
  public Build $build;
  public AwsCredentials $upload_credentials;
  public S3Location $storage_location;
}

class DescribeFleetCapacityInput {
  public FleetIdOrArnList $fleet_ids;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class FleetUtilization {
  public WholeNumber $current_player_session_count;
  public WholeNumber $maximum_player_session_count;
  public FleetId $fleet_id;
  public WholeNumber $active_server_process_count;
  public WholeNumber $active_game_session_count;
}

class RuntimeConfiguration {
  public ServerProcessList $server_processes;
  public MaxConcurrentGameSessionActivations $max_concurrent_game_session_activations;
  public GameSessionActivationTimeoutSeconds $game_session_activation_timeout_seconds;
}

class UntagResourceResponse {
}

class UnsupportedRegionException {
  public NonEmptyString $message;
}

class UpdateFleetPortSettingsOutput {
  public FleetId $fleet_id;
}

class ClaimGameServerInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
  public GameServerData $game_server_data;
}

class DescribeMatchmakingRuleSetsInput {
  public MatchmakingRuleSetNameList $names;
  public RuleSetLimit $limit;
  public NonZeroAndMaxString $next_token;
}

class GameSessionQueueNameOrArn {
}

class ListAliasesInput {
  public RoutingStrategyType $routing_strategy_type;
  public NonEmptyString $name;
  public PositiveInteger $limit;
  public NonEmptyString $next_token;
}

class OutOfCapacityException {
  public NonEmptyString $message;
}

class RoutingStrategy {
  public RoutingStrategyType $type;
  public FleetId $fleet_id;
  public FreeText $message;
}

class UpdateGameSessionOutput {
  public GameSession $game_session;
}

class UpdateMatchmakingConfigurationInput {
  public SnsArnStringModel $notification_target;
  public WholeNumber $additional_player_count;
  public GameSessionData $game_session_data;
  public QueueArnsList $game_session_queue_arns;
  public MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public BooleanModel $acceptance_required;
  public MatchmakingRuleSetName $rule_set_name;
  public CustomEventData $custom_event_data;
  public GamePropertyList $game_properties;
  public BackfillMode $backfill_mode;
  public MatchmakingConfigurationName $name;
  public NonZeroAndMaxString $description;
  public MatchmakingRequestTimeoutInteger $request_timeout_seconds;
}

class VpcPeeringConnectionStatus {
  public NonZeroAndMaxString $code;
  public NonZeroAndMaxString $message;
}

class BuildIdOrArn {
}

class CreateMatchmakingConfigurationInput {
  public MatchmakingRequestTimeoutInteger $request_timeout_seconds;
  public BooleanModel $acceptance_required;
  public WholeNumber $additional_player_count;
  public MatchmakingIdStringModel $name;
  public QueueArnsList $game_session_queue_arns;
  public SnsArnStringModel $notification_target;
  public CustomEventData $custom_event_data;
  public TagList $tags;
  public BackfillMode $backfill_mode;
  public NonZeroAndMaxString $description;
  public MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public MatchmakingRuleSetName $rule_set_name;
  public GamePropertyList $game_properties;
  public GameSessionData $game_session_data;
}

class DescribeGameSessionsInput {
  public NonZeroAndMaxString $status_filter;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public FleetIdOrArn $fleet_id;
  public ArnStringModel $game_session_id;
  public AliasIdOrArn $alias_id;
}

class UpdateFleetAttributesOutput {
  public FleetId $fleet_id;
}

class WholeNumber {
}

class DescribeMatchmakingInput {
  public MatchmakingIdList $ticket_ids;
}

class DescribeScriptOutput {
  public Script $script;
}

class MatchmakingConfigurationName {
}

class MatchmakingRuleSetList {
}

class StartGameSessionPlacementOutput {
  public GameSessionPlacement $game_session_placement;
}

class StartMatchmakingOutput {
  public MatchmakingTicket $matchmaking_ticket;
}

class DeleteFleetInput {
  public FleetIdOrArn $fleet_id;
}

class DeleteMatchmakingRuleSetInput {
  public MatchmakingRuleSetName $name;
}

class DeleteVpcPeeringAuthorizationInput {
  public NonZeroAndMaxString $game_lift_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
}

class FleetIdOrArn {
}

class GameSessionQueue {
  public GameSessionQueueName $name;
  public GameSessionQueueArn $game_session_queue_arn;
  public WholeNumber $timeout_in_seconds;
  public PlayerLatencyPolicyList $player_latency_policies;
  public GameSessionQueueDestinationList $destinations;
}

class ScriptList {
}

class DeleteScriptInput {
  public ScriptIdOrArn $script_id;
}

class GameServerGroupName {
}

class GameSession {
  public GameSessionStatusReason $status_reason;
  public GamePropertyList $game_properties;
  public FleetId $fleet_id;
  public WholeNumber $current_player_session_count;
  public WholeNumber $maximum_player_session_count;
  public IpAddress $ip_address;
  public PortNumber $port;
  public MatchmakerData $matchmaker_data;
  public NonZeroAndMaxString $game_session_id;
  public Timestamp $creation_time;
  public Timestamp $termination_time;
  public GameSessionStatus $status;
  public NonZeroAndMaxString $creator_id;
  public GameSessionData $game_session_data;
  public NonZeroAndMaxString $name;
  public FleetArn $fleet_arn;
  public DnsName $dns_name;
  public PlayerSessionCreationPolicy $player_session_creation_policy;
}

class LaunchTemplateVersion {
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class MetricGroupList {
}

class BooleanModel {
}

class DeleteAliasInput {
  public AliasIdOrArn $alias_id;
}

class ScriptIdOrArn {
}

class InvalidFleetStatusException {
  public NonEmptyString $message;
}

class InvalidRequestException {
  public NonEmptyString $message;
}

class CreateScriptInput {
  public TagList $tags;
  public NonZeroAndMaxString $name;
  public NonZeroAndMaxString $version;
  public S3Location $storage_location;
  public ZipBlob $zip_file;
}

class DeleteBuildInput {
  public BuildIdOrArn $build_id;
}

class DescribeMatchmakingConfigurationsInput {
  public MatchmakingConfigurationNameList $names;
  public MatchmakingRuleSetName $rule_set_name;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class DoubleObject {
}

class GameServerGroupAction {
}

class GameSessionQueueArn {
}

class ListGameServerGroupsOutput {
  public GameServerGroups $game_server_groups;
  public NonZeroAndMaxString $next_token;
}

class MatchmakingConfigurationStatus {
}

class CreatePlayerSessionsOutput {
  public PlayerSessionList $player_sessions;
}

class GameServerGroupStatus {
}

class GameSessionPlacementState {
}

class MatchmakerData {
}

class MatchmakingAcceptanceTimeoutInteger {
}

class UnauthorizedException {
  public NonEmptyString $message;
}

class VpcPeeringConnection {
  public VpcPeeringConnectionStatus $status;
  public NonZeroAndMaxString $peer_vpc_id;
  public NonZeroAndMaxString $game_lift_vpc_id;
  public FleetId $fleet_id;
  public FleetArn $fleet_arn;
  public NonZeroAndMaxString $ip_v_4_cidr_block;
  public NonZeroAndMaxString $vpc_peering_connection_id;
}

class BalancingStrategy {
}

class CreateGameSessionOutput {
  public GameSession $game_session;
}

class CreateScriptOutput {
  public Script $script;
}

class DescribeFleetUtilizationOutput {
  public FleetUtilizationList $fleet_utilization;
  public NonZeroAndMaxString $next_token;
}

class GameSessionFullException {
  public NonEmptyString $message;
}

class ScalingAdjustmentType {
}

class DescribeBuildInput {
  public BuildIdOrArn $build_id;
}

class DnsName {
}

class Double {
}

class FleetCapacityList {
}

class ListBuildsOutput {
  public BuildList $builds;
  public NonEmptyString $next_token;
}

class NonBlankAndLengthConstraintString {
}

class AcceptanceType {
}

class CertificateConfiguration {
  public CertificateType $certificate_type;
}

class GameServerData {
}

class GameSessionDetailList {
}

class PlayerLatencyPolicyList {
}

class StopGameSessionPlacementInput {
  public IdStringModel $placement_id;
}

class MaxConcurrentGameSessionActivations {
}

class NonNegativeDouble {
}

class AutoScalingGroupArn {
}

class Build {
  public PositiveLong $size_on_disk;
  public OperatingSystem $operating_system;
  public Timestamp $creation_time;
  public BuildId $build_id;
  public BuildArn $build_arn;
  public FreeText $name;
  public FreeText $version;
  public BuildStatus $status;
}

class CreateFleetInput {
  public IpPermissionsList $ec_2_inbound_permissions;
  public RuntimeConfiguration $runtime_configuration;
  public NonZeroAndMaxString $peer_vpc_aws_account_id;
  public BuildIdOrArn $build_id;
  public ScriptIdOrArn $script_id;
  public MetricGroupList $metric_groups;
  public NonEmptyString $instance_role_arn;
  public TagList $tags;
  public EC2InstanceType $ec_2_instance_type;
  public ProtectionPolicy $new_game_session_protection_policy;
  public NonZeroAndMaxString $server_launch_path;
  public CertificateConfiguration $certificate_configuration;
  public NonZeroAndMaxString $server_launch_parameters;
  public StringList $log_paths;
  public ResourceCreationLimitPolicy $resource_creation_limit_policy;
  public NonZeroAndMaxString $peer_vpc_id;
  public FleetType $fleet_type;
  public NonZeroAndMaxString $name;
  public NonZeroAndMaxString $description;
}

class DescribeVpcPeeringAuthorizationsInput {
}

class FleetCapacity {
  public EC2InstanceType $instance_type;
  public EC2InstanceCounts $instance_counts;
  public FleetId $fleet_id;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class StartFleetActionsInput {
  public FleetIdOrArn $fleet_id;
  public FleetActionList $actions;
}

class IpProtocol {
}

class SnsArnStringModel {
}

class DeleteGameSessionQueueOutput {
}

class DescribePlayerSessionsOutput {
  public PlayerSessionList $player_sessions;
  public NonZeroAndMaxString $next_token;
}

class EC2InstanceLimit {
  public EC2InstanceType $ec_2_instance_type;
  public WholeNumber $current_instances;
  public WholeNumber $instance_limit;
}

class FleetAction {
}

class GameSessionConnectionInfo {
  public MatchedPlayerSessionList $matched_player_sessions;
  public ArnStringModel $game_session_arn;
  public StringModel $ip_address;
  public DnsName $dns_name;
  public PositiveInteger $port;
}

class InvalidGameSessionStatusException {
  public NonEmptyString $message;
}

class UpdateScriptInput {
  public ScriptIdOrArn $script_id;
  public NonZeroAndMaxString $name;
  public NonZeroAndMaxString $version;
  public S3Location $storage_location;
  public ZipBlob $zip_file;
}

class DeleteVpcPeeringAuthorizationOutput {
}

class MatchmakingConfigurationList {
}

class MatchmakingRuleSetArn {
}

class StringModel {
}

class DescribeGameSessionDetailsOutput {
  public GameSessionDetailList $game_session_details;
  public NonZeroAndMaxString $next_token;
}

class PlayerData {
}

class PlayerLatency {
  public NonZeroAndMaxString $player_id;
  public NonZeroAndMaxString $region_identifier;
  public Float $latency_in_milliseconds;
}

class RequestUploadCredentialsInput {
  public BuildIdOrArn $build_id;
}

class ResolveAliasOutput {
  public FleetId $fleet_id;
  public FleetArn $fleet_arn;
}

class StringDoubleMap {
}

class DeleteVpcPeeringConnectionInput {
  public NonZeroAndMaxString $vpc_peering_connection_id;
  public FleetId $fleet_id;
}

class MatchmakingConfigurationNameList {
}

class Script {
  public PositiveLong $size_on_disk;
  public Timestamp $creation_time;
  public S3Location $storage_location;
  public ScriptId $script_id;
  public ScriptArn $script_arn;
  public NonZeroAndMaxString $name;
  public NonZeroAndMaxString $version;
}

class StopGameSessionPlacementOutput {
  public GameSessionPlacement $game_session_placement;
}

class TagResourceResponse {
}

class VpcSubnets {
}

class GameServerId {
}

class OperatingSystem {
}

class DeleteMatchmakingConfigurationInput {
  public MatchmakingConfigurationName $name;
}

class DeleteMatchmakingConfigurationOutput {
}

class DescribeGameSessionPlacementOutput {
  public GameSessionPlacement $game_session_placement;
}

class DescribeGameSessionQueuesInput {
  public GameSessionQueueNameOrArnList $names;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class DescribeRuntimeConfigurationOutput {
  public RuntimeConfiguration $runtime_configuration;
}

class FleetStatus {
}

class PutScalingPolicyOutput {
  public NonZeroAndMaxString $name;
}

class ResumeGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class SearchGameSessionsOutput {
  public GameSessionList $game_sessions;
  public NonZeroAndMaxString $next_token;
}

class Alias {
  public AliasArn $alias_arn;
  public FreeText $description;
  public RoutingStrategy $routing_strategy;
  public Timestamp $creation_time;
  public Timestamp $last_updated_time;
  public AliasId $alias_id;
  public NonBlankAndLengthConstraintString $name;
}

class AliasArn {
}

class DescribeEC2InstanceLimitsInput {
  public EC2InstanceType $ec_2_instance_type;
}

class FreeText {
}

class PortNumber {
}

class UpdateGameServerOutput {
  public GameServer $game_server;
}

class LaunchTemplateSpecification {
  public LaunchTemplateName $launch_template_name;
  public LaunchTemplateVersion $version;
  public LaunchTemplateId $launch_template_id;
}

class UpdateAliasOutput {
  public Alias $alias;
}

class BuildId {
}

class GameSessionActivationTimeoutSeconds {
}

class IdempotentParameterMismatchException {
  public NonEmptyString $message;
}

class PlayerSession {
  public NonZeroAndMaxString $player_id;
  public NonZeroAndMaxString $game_session_id;
  public FleetArn $fleet_arn;
  public Timestamp $termination_time;
  public PlayerSessionStatus $status;
  public DnsName $dns_name;
  public PortNumber $port;
  public PlayerSessionId $player_session_id;
  public PlayerData $player_data;
  public Timestamp $creation_time;
  public IpAddress $ip_address;
  public FleetId $fleet_id;
}

class PlayerSessionCreationPolicy {
}

class PlayerSessionStatus {
}

class UpdateMatchmakingConfigurationOutput {
  public MatchmakingConfiguration $configuration;
}

class DescribeFleetCapacityOutput {
  public FleetCapacityList $fleet_capacity;
  public NonZeroAndMaxString $next_token;
}

class GameServerGroupDeleteOption {
}

class InstanceAccess {
  public FleetId $fleet_id;
  public InstanceId $instance_id;
  public IpAddress $ip_address;
  public OperatingSystem $operating_system;
  public InstanceCredentials $credentials;
}

class PlayerLatencyList {
}

class RoutingStrategyType {
}

class UpdateFleetCapacityOutput {
  public FleetId $fleet_id;
}

