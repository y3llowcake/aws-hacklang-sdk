<?hh // strict
namespace slack\aws\gamelift;

interface GameLift {
  public function AcceptMatch(AcceptMatchInput): Awaitable<Errors\Result<AcceptMatchOutput>>;
  public function ClaimGameServer(ClaimGameServerInput): Awaitable<Errors\Result<ClaimGameServerOutput>>;
  public function CreateAlias(CreateAliasInput): Awaitable<Errors\Result<CreateAliasOutput>>;
  public function CreateBuild(CreateBuildInput): Awaitable<Errors\Result<CreateBuildOutput>>;
  public function CreateFleet(CreateFleetInput): Awaitable<Errors\Result<CreateFleetOutput>>;
  public function CreateGameServerGroup(CreateGameServerGroupInput): Awaitable<Errors\Result<CreateGameServerGroupOutput>>;
  public function CreateGameSession(CreateGameSessionInput): Awaitable<Errors\Result<CreateGameSessionOutput>>;
  public function CreateGameSessionQueue(CreateGameSessionQueueInput): Awaitable<Errors\Result<CreateGameSessionQueueOutput>>;
  public function CreateMatchmakingConfiguration(CreateMatchmakingConfigurationInput): Awaitable<Errors\Result<CreateMatchmakingConfigurationOutput>>;
  public function CreateMatchmakingRuleSet(CreateMatchmakingRuleSetInput): Awaitable<Errors\Result<CreateMatchmakingRuleSetOutput>>;
  public function CreatePlayerSession(CreatePlayerSessionInput): Awaitable<Errors\Result<CreatePlayerSessionOutput>>;
  public function CreatePlayerSessions(CreatePlayerSessionsInput): Awaitable<Errors\Result<CreatePlayerSessionsOutput>>;
  public function CreateScript(CreateScriptInput): Awaitable<Errors\Result<CreateScriptOutput>>;
  public function CreateVpcPeeringAuthorization(CreateVpcPeeringAuthorizationInput): Awaitable<Errors\Result<CreateVpcPeeringAuthorizationOutput>>;
  public function CreateVpcPeeringConnection(CreateVpcPeeringConnectionInput): Awaitable<Errors\Result<CreateVpcPeeringConnectionOutput>>;
  public function DeleteAlias(DeleteAliasInput): Awaitable<Errors\Error>;
  public function DeleteBuild(DeleteBuildInput): Awaitable<Errors\Error>;
  public function DeleteFleet(DeleteFleetInput): Awaitable<Errors\Error>;
  public function DeleteGameServerGroup(DeleteGameServerGroupInput): Awaitable<Errors\Result<DeleteGameServerGroupOutput>>;
  public function DeleteGameSessionQueue(DeleteGameSessionQueueInput): Awaitable<Errors\Result<DeleteGameSessionQueueOutput>>;
  public function DeleteMatchmakingConfiguration(DeleteMatchmakingConfigurationInput): Awaitable<Errors\Result<DeleteMatchmakingConfigurationOutput>>;
  public function DeleteMatchmakingRuleSet(DeleteMatchmakingRuleSetInput): Awaitable<Errors\Result<DeleteMatchmakingRuleSetOutput>>;
  public function DeleteScalingPolicy(DeleteScalingPolicyInput): Awaitable<Errors\Error>;
  public function DeleteScript(DeleteScriptInput): Awaitable<Errors\Error>;
  public function DeleteVpcPeeringAuthorization(DeleteVpcPeeringAuthorizationInput): Awaitable<Errors\Result<DeleteVpcPeeringAuthorizationOutput>>;
  public function DeleteVpcPeeringConnection(DeleteVpcPeeringConnectionInput): Awaitable<Errors\Result<DeleteVpcPeeringConnectionOutput>>;
  public function DeregisterGameServer(DeregisterGameServerInput): Awaitable<Errors\Error>;
  public function DescribeAlias(DescribeAliasInput): Awaitable<Errors\Result<DescribeAliasOutput>>;
  public function DescribeBuild(DescribeBuildInput): Awaitable<Errors\Result<DescribeBuildOutput>>;
  public function DescribeEC2InstanceLimits(DescribeEC2InstanceLimitsInput): Awaitable<Errors\Result<DescribeEC2InstanceLimitsOutput>>;
  public function DescribeFleetAttributes(DescribeFleetAttributesInput): Awaitable<Errors\Result<DescribeFleetAttributesOutput>>;
  public function DescribeFleetCapacity(DescribeFleetCapacityInput): Awaitable<Errors\Result<DescribeFleetCapacityOutput>>;
  public function DescribeFleetEvents(DescribeFleetEventsInput): Awaitable<Errors\Result<DescribeFleetEventsOutput>>;
  public function DescribeFleetPortSettings(DescribeFleetPortSettingsInput): Awaitable<Errors\Result<DescribeFleetPortSettingsOutput>>;
  public function DescribeFleetUtilization(DescribeFleetUtilizationInput): Awaitable<Errors\Result<DescribeFleetUtilizationOutput>>;
  public function DescribeGameServer(DescribeGameServerInput): Awaitable<Errors\Result<DescribeGameServerOutput>>;
  public function DescribeGameServerGroup(DescribeGameServerGroupInput): Awaitable<Errors\Result<DescribeGameServerGroupOutput>>;
  public function DescribeGameSessionDetails(DescribeGameSessionDetailsInput): Awaitable<Errors\Result<DescribeGameSessionDetailsOutput>>;
  public function DescribeGameSessionPlacement(DescribeGameSessionPlacementInput): Awaitable<Errors\Result<DescribeGameSessionPlacementOutput>>;
  public function DescribeGameSessionQueues(DescribeGameSessionQueuesInput): Awaitable<Errors\Result<DescribeGameSessionQueuesOutput>>;
  public function DescribeGameSessions(DescribeGameSessionsInput): Awaitable<Errors\Result<DescribeGameSessionsOutput>>;
  public function DescribeInstances(DescribeInstancesInput): Awaitable<Errors\Result<DescribeInstancesOutput>>;
  public function DescribeMatchmaking(DescribeMatchmakingInput): Awaitable<Errors\Result<DescribeMatchmakingOutput>>;
  public function DescribeMatchmakingConfigurations(DescribeMatchmakingConfigurationsInput): Awaitable<Errors\Result<DescribeMatchmakingConfigurationsOutput>>;
  public function DescribeMatchmakingRuleSets(DescribeMatchmakingRuleSetsInput): Awaitable<Errors\Result<DescribeMatchmakingRuleSetsOutput>>;
  public function DescribePlayerSessions(DescribePlayerSessionsInput): Awaitable<Errors\Result<DescribePlayerSessionsOutput>>;
  public function DescribeRuntimeConfiguration(DescribeRuntimeConfigurationInput): Awaitable<Errors\Result<DescribeRuntimeConfigurationOutput>>;
  public function DescribeScalingPolicies(DescribeScalingPoliciesInput): Awaitable<Errors\Result<DescribeScalingPoliciesOutput>>;
  public function DescribeScript(DescribeScriptInput): Awaitable<Errors\Result<DescribeScriptOutput>>;
  public function DescribeVpcPeeringAuthorizations(DescribeVpcPeeringAuthorizationsInput): Awaitable<Errors\Result<DescribeVpcPeeringAuthorizationsOutput>>;
  public function DescribeVpcPeeringConnections(DescribeVpcPeeringConnectionsInput): Awaitable<Errors\Result<DescribeVpcPeeringConnectionsOutput>>;
  public function GetGameSessionLogUrl(GetGameSessionLogUrlInput): Awaitable<Errors\Result<GetGameSessionLogUrlOutput>>;
  public function GetInstanceAccess(GetInstanceAccessInput): Awaitable<Errors\Result<GetInstanceAccessOutput>>;
  public function ListAliases(ListAliasesInput): Awaitable<Errors\Result<ListAliasesOutput>>;
  public function ListBuilds(ListBuildsInput): Awaitable<Errors\Result<ListBuildsOutput>>;
  public function ListFleets(ListFleetsInput): Awaitable<Errors\Result<ListFleetsOutput>>;
  public function ListGameServerGroups(ListGameServerGroupsInput): Awaitable<Errors\Result<ListGameServerGroupsOutput>>;
  public function ListGameServers(ListGameServersInput): Awaitable<Errors\Result<ListGameServersOutput>>;
  public function ListScripts(ListScriptsInput): Awaitable<Errors\Result<ListScriptsOutput>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutScalingPolicy(PutScalingPolicyInput): Awaitable<Errors\Result<PutScalingPolicyOutput>>;
  public function RegisterGameServer(RegisterGameServerInput): Awaitable<Errors\Result<RegisterGameServerOutput>>;
  public function RequestUploadCredentials(RequestUploadCredentialsInput): Awaitable<Errors\Result<RequestUploadCredentialsOutput>>;
  public function ResolveAlias(ResolveAliasInput): Awaitable<Errors\Result<ResolveAliasOutput>>;
  public function ResumeGameServerGroup(ResumeGameServerGroupInput): Awaitable<Errors\Result<ResumeGameServerGroupOutput>>;
  public function SearchGameSessions(SearchGameSessionsInput): Awaitable<Errors\Result<SearchGameSessionsOutput>>;
  public function StartFleetActions(StartFleetActionsInput): Awaitable<Errors\Result<StartFleetActionsOutput>>;
  public function StartGameSessionPlacement(StartGameSessionPlacementInput): Awaitable<Errors\Result<StartGameSessionPlacementOutput>>;
  public function StartMatchBackfill(StartMatchBackfillInput): Awaitable<Errors\Result<StartMatchBackfillOutput>>;
  public function StartMatchmaking(StartMatchmakingInput): Awaitable<Errors\Result<StartMatchmakingOutput>>;
  public function StopFleetActions(StopFleetActionsInput): Awaitable<Errors\Result<StopFleetActionsOutput>>;
  public function StopGameSessionPlacement(StopGameSessionPlacementInput): Awaitable<Errors\Result<StopGameSessionPlacementOutput>>;
  public function StopMatchmaking(StopMatchmakingInput): Awaitable<Errors\Result<StopMatchmakingOutput>>;
  public function SuspendGameServerGroup(SuspendGameServerGroupInput): Awaitable<Errors\Result<SuspendGameServerGroupOutput>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateAlias(UpdateAliasInput): Awaitable<Errors\Result<UpdateAliasOutput>>;
  public function UpdateBuild(UpdateBuildInput): Awaitable<Errors\Result<UpdateBuildOutput>>;
  public function UpdateFleetAttributes(UpdateFleetAttributesInput): Awaitable<Errors\Result<UpdateFleetAttributesOutput>>;
  public function UpdateFleetCapacity(UpdateFleetCapacityInput): Awaitable<Errors\Result<UpdateFleetCapacityOutput>>;
  public function UpdateFleetPortSettings(UpdateFleetPortSettingsInput): Awaitable<Errors\Result<UpdateFleetPortSettingsOutput>>;
  public function UpdateGameServer(UpdateGameServerInput): Awaitable<Errors\Result<UpdateGameServerOutput>>;
  public function UpdateGameServerGroup(UpdateGameServerGroupInput): Awaitable<Errors\Result<UpdateGameServerGroupOutput>>;
  public function UpdateGameSession(UpdateGameSessionInput): Awaitable<Errors\Result<UpdateGameSessionOutput>>;
  public function UpdateGameSessionQueue(UpdateGameSessionQueueInput): Awaitable<Errors\Result<UpdateGameSessionQueueOutput>>;
  public function UpdateMatchmakingConfiguration(UpdateMatchmakingConfigurationInput): Awaitable<Errors\Result<UpdateMatchmakingConfigurationOutput>>;
  public function UpdateRuntimeConfiguration(UpdateRuntimeConfigurationInput): Awaitable<Errors\Result<UpdateRuntimeConfigurationOutput>>;
  public function UpdateScript(UpdateScriptInput): Awaitable<Errors\Result<UpdateScriptOutput>>;
  public function ValidateMatchmakingRuleSet(ValidateMatchmakingRuleSetInput): Awaitable<Errors\Result<ValidateMatchmakingRuleSetOutput>>;
}

class AcceptMatchInput {
  public AcceptanceType $acceptance_type;
  public StringList $player_ids;
  public MatchmakingIdStringModel $ticket_id;
}

class AcceptMatchOutput {
}

class AcceptanceType {
}

class Alias {
  public AliasArn $alias_arn;
  public AliasId $alias_id;
  public Timestamp $creation_time;
  public FreeText $description;
  public Timestamp $last_updated_time;
  public NonBlankAndLengthConstraintString $name;
  public RoutingStrategy $routing_strategy;
}

class AliasArn {
}

class AliasId {
}

class AliasIdOrArn {
}

class AliasList {
}

class AmazonResourceName {
}

class ArnStringModel {
}

class AttributeValue {
  public DoubleObject $n;
  public NonZeroAndMaxString $s;
  public StringDoubleMap $sdm;
  public StringList $sl;
}

class AutoScalingGroupArn {
}

class AwsCredentials {
  public NonEmptyString $access_key_id;
  public NonEmptyString $secret_access_key;
  public NonEmptyString $session_token;
}

class BackfillMode {
}

class BalancingStrategy {
}

class BooleanModel {
}

class Build {
  public BuildArn $build_arn;
  public BuildId $build_id;
  public Timestamp $creation_time;
  public FreeText $name;
  public OperatingSystem $operating_system;
  public PositiveLong $size_on_disk;
  public BuildStatus $status;
  public FreeText $version;
}

class BuildArn {
}

class BuildId {
}

class BuildIdOrArn {
}

class BuildList {
}

class BuildStatus {
}

class CertificateConfiguration {
  public CertificateType $certificate_type;
}

class CertificateType {
}

class ClaimGameServerInput {
  public GameServerData $game_server_data;
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
}

class ClaimGameServerOutput {
  public GameServer $game_server;
}

class ComparisonOperatorType {
}

class ConflictException {
  public NonEmptyString $message;
}

class CreateAliasInput {
  public NonZeroAndMaxString $description;
  public NonBlankAndLengthConstraintString $name;
  public RoutingStrategy $routing_strategy;
  public TagList $tags;
}

class CreateAliasOutput {
  public Alias $alias;
}

class CreateBuildInput {
  public NonZeroAndMaxString $name;
  public OperatingSystem $operating_system;
  public S3Location $storage_location;
  public TagList $tags;
  public NonZeroAndMaxString $version;
}

class CreateBuildOutput {
  public Build $build;
  public S3Location $storage_location;
  public AwsCredentials $upload_credentials;
}

class CreateFleetInput {
  public BuildIdOrArn $build_id;
  public CertificateConfiguration $certificate_configuration;
  public NonZeroAndMaxString $description;
  public IpPermissionsList $ec_2_inbound_permissions;
  public EC2InstanceType $ec_2_instance_type;
  public FleetType $fleet_type;
  public NonEmptyString $instance_role_arn;
  public StringList $log_paths;
  public MetricGroupList $metric_groups;
  public NonZeroAndMaxString $name;
  public ProtectionPolicy $new_game_session_protection_policy;
  public NonZeroAndMaxString $peer_vpc_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
  public ResourceCreationLimitPolicy $resource_creation_limit_policy;
  public RuntimeConfiguration $runtime_configuration;
  public ScriptIdOrArn $script_id;
  public NonZeroAndMaxString $server_launch_parameters;
  public NonZeroAndMaxString $server_launch_path;
  public TagList $tags;
}

class CreateFleetOutput {
  public FleetAttributes $fleet_attributes;
}

class CreateGameServerGroupInput {
  public GameServerGroupAutoScalingPolicy $auto_scaling_policy;
  public BalancingStrategy $balancing_strategy;
  public GameServerGroupName $game_server_group_name;
  public GameServerProtectionPolicy $game_server_protection_policy;
  public InstanceDefinitions $instance_definitions;
  public LaunchTemplateSpecification $launch_template;
  public PositiveInteger $max_size;
  public WholeNumber $min_size;
  public IamRoleArn $role_arn;
  public TagList $tags;
  public VpcSubnets $vpc_subnets;
}

class CreateGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class CreateGameSessionInput {
  public AliasIdOrArn $alias_id;
  public NonZeroAndMaxString $creator_id;
  public FleetIdOrArn $fleet_id;
  public GamePropertyList $game_properties;
  public GameSessionData $game_session_data;
  public IdStringModel $game_session_id;
  public IdStringModel $idempotency_token;
  public WholeNumber $maximum_player_session_count;
  public NonZeroAndMaxString $name;
}

class CreateGameSessionOutput {
  public GameSession $game_session;
}

class CreateGameSessionQueueInput {
  public GameSessionQueueDestinationList $destinations;
  public GameSessionQueueName $name;
  public PlayerLatencyPolicyList $player_latency_policies;
  public TagList $tags;
  public WholeNumber $timeout_in_seconds;
}

class CreateGameSessionQueueOutput {
  public GameSessionQueue $game_session_queue;
}

class CreateMatchmakingConfigurationInput {
  public BooleanModel $acceptance_required;
  public MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public WholeNumber $additional_player_count;
  public BackfillMode $backfill_mode;
  public CustomEventData $custom_event_data;
  public NonZeroAndMaxString $description;
  public GamePropertyList $game_properties;
  public GameSessionData $game_session_data;
  public QueueArnsList $game_session_queue_arns;
  public MatchmakingIdStringModel $name;
  public SnsArnStringModel $notification_target;
  public MatchmakingRequestTimeoutInteger $request_timeout_seconds;
  public MatchmakingRuleSetName $rule_set_name;
  public TagList $tags;
}

class CreateMatchmakingConfigurationOutput {
  public MatchmakingConfiguration $configuration;
}

class CreateMatchmakingRuleSetInput {
  public MatchmakingIdStringModel $name;
  public RuleSetBody $rule_set_body;
  public TagList $tags;
}

class CreateMatchmakingRuleSetOutput {
  public MatchmakingRuleSet $rule_set;
}

class CreatePlayerSessionInput {
  public ArnStringModel $game_session_id;
  public PlayerData $player_data;
  public NonZeroAndMaxString $player_id;
}

class CreatePlayerSessionOutput {
  public PlayerSession $player_session;
}

class CreatePlayerSessionsInput {
  public ArnStringModel $game_session_id;
  public PlayerDataMap $player_data_map;
  public PlayerIdList $player_ids;
}

class CreatePlayerSessionsOutput {
  public PlayerSessionList $player_sessions;
}

class CreateScriptInput {
  public NonZeroAndMaxString $name;
  public S3Location $storage_location;
  public TagList $tags;
  public NonZeroAndMaxString $version;
  public ZipBlob $zip_file;
}

class CreateScriptOutput {
  public Script $script;
}

class CreateVpcPeeringAuthorizationInput {
  public NonZeroAndMaxString $game_lift_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
}

class CreateVpcPeeringAuthorizationOutput {
  public VpcPeeringAuthorization $vpc_peering_authorization;
}

class CreateVpcPeeringConnectionInput {
  public FleetId $fleet_id;
  public NonZeroAndMaxString $peer_vpc_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
}

class CreateVpcPeeringConnectionOutput {
}

class CustomEventData {
}

class DeleteAliasInput {
  public AliasIdOrArn $alias_id;
}

class DeleteBuildInput {
  public BuildIdOrArn $build_id;
}

class DeleteFleetInput {
  public FleetIdOrArn $fleet_id;
}

class DeleteGameServerGroupInput {
  public GameServerGroupDeleteOption $delete_option;
  public GameServerGroupNameOrArn $game_server_group_name;
}

class DeleteGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class DeleteGameSessionQueueInput {
  public GameSessionQueueNameOrArn $name;
}

class DeleteGameSessionQueueOutput {
}

class DeleteMatchmakingConfigurationInput {
  public MatchmakingConfigurationName $name;
}

class DeleteMatchmakingConfigurationOutput {
}

class DeleteMatchmakingRuleSetInput {
  public MatchmakingRuleSetName $name;
}

class DeleteMatchmakingRuleSetOutput {
}

class DeleteScalingPolicyInput {
  public FleetIdOrArn $fleet_id;
  public NonZeroAndMaxString $name;
}

class DeleteScriptInput {
  public ScriptIdOrArn $script_id;
}

class DeleteVpcPeeringAuthorizationInput {
  public NonZeroAndMaxString $game_lift_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
}

class DeleteVpcPeeringAuthorizationOutput {
}

class DeleteVpcPeeringConnectionInput {
  public FleetId $fleet_id;
  public NonZeroAndMaxString $vpc_peering_connection_id;
}

class DeleteVpcPeeringConnectionOutput {
}

class DeregisterGameServerInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
}

class DescribeAliasInput {
  public AliasIdOrArn $alias_id;
}

class DescribeAliasOutput {
  public Alias $alias;
}

class DescribeBuildInput {
  public BuildIdOrArn $build_id;
}

class DescribeBuildOutput {
  public Build $build;
}

class DescribeEC2InstanceLimitsInput {
  public EC2InstanceType $ec_2_instance_type;
}

class DescribeEC2InstanceLimitsOutput {
  public EC2InstanceLimitList $ec_2_instance_limits;
}

class DescribeFleetAttributesInput {
  public FleetIdOrArnList $fleet_ids;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class DescribeFleetAttributesOutput {
  public FleetAttributesList $fleet_attributes;
  public NonZeroAndMaxString $next_token;
}

class DescribeFleetCapacityInput {
  public FleetIdOrArnList $fleet_ids;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class DescribeFleetCapacityOutput {
  public FleetCapacityList $fleet_capacity;
  public NonZeroAndMaxString $next_token;
}

class DescribeFleetEventsInput {
  public Timestamp $end_time;
  public FleetIdOrArn $fleet_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public Timestamp $start_time;
}

class DescribeFleetEventsOutput {
  public EventList $events;
  public NonZeroAndMaxString $next_token;
}

class DescribeFleetPortSettingsInput {
  public FleetIdOrArn $fleet_id;
}

class DescribeFleetPortSettingsOutput {
  public IpPermissionsList $inbound_permissions;
}

class DescribeFleetUtilizationInput {
  public FleetIdOrArnList $fleet_ids;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class DescribeFleetUtilizationOutput {
  public FleetUtilizationList $fleet_utilization;
  public NonZeroAndMaxString $next_token;
}

class DescribeGameServerGroupInput {
  public GameServerGroupNameOrArn $game_server_group_name;
}

class DescribeGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class DescribeGameServerInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
}

class DescribeGameServerOutput {
  public GameServer $game_server;
}

class DescribeGameSessionDetailsInput {
  public AliasIdOrArn $alias_id;
  public FleetIdOrArn $fleet_id;
  public ArnStringModel $game_session_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public NonZeroAndMaxString $status_filter;
}

class DescribeGameSessionDetailsOutput {
  public GameSessionDetailList $game_session_details;
  public NonZeroAndMaxString $next_token;
}

class DescribeGameSessionPlacementInput {
  public IdStringModel $placement_id;
}

class DescribeGameSessionPlacementOutput {
  public GameSessionPlacement $game_session_placement;
}

class DescribeGameSessionQueuesInput {
  public PositiveInteger $limit;
  public GameSessionQueueNameOrArnList $names;
  public NonZeroAndMaxString $next_token;
}

class DescribeGameSessionQueuesOutput {
  public GameSessionQueueList $game_session_queues;
  public NonZeroAndMaxString $next_token;
}

class DescribeGameSessionsInput {
  public AliasIdOrArn $alias_id;
  public FleetIdOrArn $fleet_id;
  public ArnStringModel $game_session_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public NonZeroAndMaxString $status_filter;
}

class DescribeGameSessionsOutput {
  public GameSessionList $game_sessions;
  public NonZeroAndMaxString $next_token;
}

class DescribeInstancesInput {
  public FleetIdOrArn $fleet_id;
  public InstanceId $instance_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class DescribeInstancesOutput {
  public InstanceList $instances;
  public NonZeroAndMaxString $next_token;
}

class DescribeMatchmakingConfigurationsInput {
  public PositiveInteger $limit;
  public MatchmakingConfigurationNameList $names;
  public NonZeroAndMaxString $next_token;
  public MatchmakingRuleSetName $rule_set_name;
}

class DescribeMatchmakingConfigurationsOutput {
  public MatchmakingConfigurationList $configurations;
  public NonZeroAndMaxString $next_token;
}

class DescribeMatchmakingInput {
  public MatchmakingIdList $ticket_ids;
}

class DescribeMatchmakingOutput {
  public MatchmakingTicketList $ticket_list;
}

class DescribeMatchmakingRuleSetsInput {
  public RuleSetLimit $limit;
  public MatchmakingRuleSetNameList $names;
  public NonZeroAndMaxString $next_token;
}

class DescribeMatchmakingRuleSetsOutput {
  public NonZeroAndMaxString $next_token;
  public MatchmakingRuleSetList $rule_sets;
}

class DescribePlayerSessionsInput {
  public ArnStringModel $game_session_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public NonZeroAndMaxString $player_id;
  public PlayerSessionId $player_session_id;
  public NonZeroAndMaxString $player_session_status_filter;
}

class DescribePlayerSessionsOutput {
  public NonZeroAndMaxString $next_token;
  public PlayerSessionList $player_sessions;
}

class DescribeRuntimeConfigurationInput {
  public FleetIdOrArn $fleet_id;
}

class DescribeRuntimeConfigurationOutput {
  public RuntimeConfiguration $runtime_configuration;
}

class DescribeScalingPoliciesInput {
  public FleetIdOrArn $fleet_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public ScalingStatusType $status_filter;
}

class DescribeScalingPoliciesOutput {
  public NonZeroAndMaxString $next_token;
  public ScalingPolicyList $scaling_policies;
}

class DescribeScriptInput {
  public ScriptIdOrArn $script_id;
}

class DescribeScriptOutput {
  public Script $script;
}

class DescribeVpcPeeringAuthorizationsInput {
}

class DescribeVpcPeeringAuthorizationsOutput {
  public VpcPeeringAuthorizationList $vpc_peering_authorizations;
}

class DescribeVpcPeeringConnectionsInput {
  public FleetId $fleet_id;
}

class DescribeVpcPeeringConnectionsOutput {
  public VpcPeeringConnectionList $vpc_peering_connections;
}

class DesiredPlayerSession {
  public PlayerData $player_data;
  public NonZeroAndMaxString $player_id;
}

class DesiredPlayerSessionList {
}

class DnsName {
}

class Double {
}

class DoubleObject {
}

class EC2InstanceCounts {
  public WholeNumber $active;
  public WholeNumber $desired;
  public WholeNumber $idle;
  public WholeNumber $maximum;
  public WholeNumber $minimum;
  public WholeNumber $pending;
  public WholeNumber $terminating;
}

class EC2InstanceLimit {
  public WholeNumber $current_instances;
  public EC2InstanceType $ec_2_instance_type;
  public WholeNumber $instance_limit;
}

class EC2InstanceLimitList {
}

class EC2InstanceType {
}

class Event {
  public EventCode $event_code;
  public NonZeroAndMaxString $event_id;
  public Timestamp $event_time;
  public NonEmptyString $message;
  public NonZeroAndMaxString $pre_signed_log_url;
  public NonZeroAndMaxString $resource_id;
}

class EventCode {
}

class EventList {
}

class FleetAction {
}

class FleetActionList {
}

class FleetArn {
}

class FleetAttributes {
  public BuildArn $build_arn;
  public BuildId $build_id;
  public CertificateConfiguration $certificate_configuration;
  public Timestamp $creation_time;
  public NonZeroAndMaxString $description;
  public FleetArn $fleet_arn;
  public FleetId $fleet_id;
  public FleetType $fleet_type;
  public NonEmptyString $instance_role_arn;
  public EC2InstanceType $instance_type;
  public StringList $log_paths;
  public MetricGroupList $metric_groups;
  public NonZeroAndMaxString $name;
  public ProtectionPolicy $new_game_session_protection_policy;
  public OperatingSystem $operating_system;
  public ResourceCreationLimitPolicy $resource_creation_limit_policy;
  public ScriptArn $script_arn;
  public ScriptId $script_id;
  public NonZeroAndMaxString $server_launch_parameters;
  public NonZeroAndMaxString $server_launch_path;
  public FleetStatus $status;
  public FleetActionList $stopped_actions;
  public Timestamp $termination_time;
}

class FleetAttributesList {
}

class FleetCapacity {
  public FleetId $fleet_id;
  public EC2InstanceCounts $instance_counts;
  public EC2InstanceType $instance_type;
}

class FleetCapacityExceededException {
  public NonEmptyString $message;
}

class FleetCapacityList {
}

class FleetId {
}

class FleetIdList {
}

class FleetIdOrArn {
}

class FleetIdOrArnList {
}

class FleetStatus {
}

class FleetType {
}

class FleetUtilization {
  public WholeNumber $active_game_session_count;
  public WholeNumber $active_server_process_count;
  public WholeNumber $current_player_session_count;
  public FleetId $fleet_id;
  public WholeNumber $maximum_player_session_count;
}

class FleetUtilizationList {
}

class Float {
}

class FreeText {
}

class GameProperty {
  public GamePropertyKey $key;
  public GamePropertyValue $value;
}

class GamePropertyKey {
}

class GamePropertyList {
}

class GamePropertyValue {
}

class GameServer {
  public GameServerClaimStatus $claim_status;
  public GameServerConnectionInfo $connection_info;
  public GameServerSortKey $custom_sort_key;
  public GameServerData $game_server_data;
  public GameServerGroupArn $game_server_group_arn;
  public GameServerGroupName $game_server_group_name;
  public GameServerId $game_server_id;
  public GameServerInstanceId $instance_id;
  public Timestamp $last_claim_time;
  public Timestamp $last_health_check_time;
  public Timestamp $registration_time;
  public GameServerUtilizationStatus $utilization_status;
}

class GameServerClaimStatus {
}

class GameServerConnectionInfo {
}

class GameServerData {
}

class GameServerGroup {
  public AutoScalingGroupArn $auto_scaling_group_arn;
  public BalancingStrategy $balancing_strategy;
  public Timestamp $creation_time;
  public GameServerGroupArn $game_server_group_arn;
  public GameServerGroupName $game_server_group_name;
  public GameServerProtectionPolicy $game_server_protection_policy;
  public InstanceDefinitions $instance_definitions;
  public Timestamp $last_updated_time;
  public IamRoleArn $role_arn;
  public GameServerGroupStatus $status;
  public NonZeroAndMaxString $status_reason;
  public GameServerGroupActions $suspended_actions;
}

class GameServerGroupAction {
}

class GameServerGroupActions {
}

class GameServerGroupArn {
}

class GameServerGroupAutoScalingPolicy {
  public PositiveInteger $estimated_instance_warmup;
  public TargetTrackingConfiguration $target_tracking_configuration;
}

class GameServerGroupDeleteOption {
}

class GameServerGroupInstanceType {
}

class GameServerGroupName {
}

class GameServerGroupNameOrArn {
}

class GameServerGroupStatus {
}

class GameServerGroups {
}

class GameServerHealthCheck {
}

class GameServerId {
}

class GameServerInstanceId {
}

class GameServerProtectionPolicy {
}

class GameServerSortKey {
}

class GameServerUtilizationStatus {
}

class GameServers {
}

class GameSession {
  public Timestamp $creation_time;
  public NonZeroAndMaxString $creator_id;
  public WholeNumber $current_player_session_count;
  public DnsName $dns_name;
  public FleetArn $fleet_arn;
  public FleetId $fleet_id;
  public GamePropertyList $game_properties;
  public GameSessionData $game_session_data;
  public NonZeroAndMaxString $game_session_id;
  public IpAddress $ip_address;
  public MatchmakerData $matchmaker_data;
  public WholeNumber $maximum_player_session_count;
  public NonZeroAndMaxString $name;
  public PlayerSessionCreationPolicy $player_session_creation_policy;
  public PortNumber $port;
  public GameSessionStatus $status;
  public GameSessionStatusReason $status_reason;
  public Timestamp $termination_time;
}

class GameSessionActivationTimeoutSeconds {
}

class GameSessionConnectionInfo {
  public DnsName $dns_name;
  public ArnStringModel $game_session_arn;
  public StringModel $ip_address;
  public MatchedPlayerSessionList $matched_player_sessions;
  public PositiveInteger $port;
}

class GameSessionData {
}

class GameSessionDetail {
  public GameSession $game_session;
  public ProtectionPolicy $protection_policy;
}

class GameSessionDetailList {
}

class GameSessionFullException {
  public NonEmptyString $message;
}

class GameSessionList {
}

class GameSessionPlacement {
  public DnsName $dns_name;
  public Timestamp $end_time;
  public GamePropertyList $game_properties;
  public NonZeroAndMaxString $game_session_arn;
  public GameSessionData $game_session_data;
  public NonZeroAndMaxString $game_session_id;
  public NonZeroAndMaxString $game_session_name;
  public GameSessionQueueName $game_session_queue_name;
  public NonZeroAndMaxString $game_session_region;
  public IpAddress $ip_address;
  public MatchmakerData $matchmaker_data;
  public WholeNumber $maximum_player_session_count;
  public PlacedPlayerSessionList $placed_player_sessions;
  public IdStringModel $placement_id;
  public PlayerLatencyList $player_latencies;
  public PortNumber $port;
  public Timestamp $start_time;
  public GameSessionPlacementState $status;
}

class GameSessionPlacementState {
}

class GameSessionQueue {
  public GameSessionQueueDestinationList $destinations;
  public GameSessionQueueArn $game_session_queue_arn;
  public GameSessionQueueName $name;
  public PlayerLatencyPolicyList $player_latency_policies;
  public WholeNumber $timeout_in_seconds;
}

class GameSessionQueueArn {
}

class GameSessionQueueDestination {
  public ArnStringModel $destination_arn;
}

class GameSessionQueueDestinationList {
}

class GameSessionQueueList {
}

class GameSessionQueueName {
}

class GameSessionQueueNameOrArn {
}

class GameSessionQueueNameOrArnList {
}

class GameSessionStatus {
}

class GameSessionStatusReason {
}

class GetGameSessionLogUrlInput {
  public ArnStringModel $game_session_id;
}

class GetGameSessionLogUrlOutput {
  public NonZeroAndMaxString $pre_signed_url;
}

class GetInstanceAccessInput {
  public FleetIdOrArn $fleet_id;
  public InstanceId $instance_id;
}

class GetInstanceAccessOutput {
  public InstanceAccess $instance_access;
}

class IamRoleArn {
}

class IdStringModel {
}

class IdempotentParameterMismatchException {
  public NonEmptyString $message;
}

class Instance {
  public Timestamp $creation_time;
  public DnsName $dns_name;
  public FleetId $fleet_id;
  public InstanceId $instance_id;
  public IpAddress $ip_address;
  public OperatingSystem $operating_system;
  public InstanceStatus $status;
  public EC2InstanceType $type;
}

class InstanceAccess {
  public InstanceCredentials $credentials;
  public FleetId $fleet_id;
  public InstanceId $instance_id;
  public IpAddress $ip_address;
  public OperatingSystem $operating_system;
}

class InstanceCredentials {
  public NonEmptyString $secret;
  public NonEmptyString $user_name;
}

class InstanceDefinition {
  public GameServerGroupInstanceType $instance_type;
  public WeightedCapacity $weighted_capacity;
}

class InstanceDefinitions {
}

class InstanceId {
}

class InstanceList {
}

class InstanceStatus {
}

class Integer {
}

class InternalServiceException {
  public NonEmptyString $message;
}

class InvalidFleetStatusException {
  public NonEmptyString $message;
}

class InvalidGameSessionStatusException {
  public NonEmptyString $message;
}

class InvalidRequestException {
  public NonEmptyString $message;
}

class IpAddress {
}

class IpPermission {
  public PortNumber $from_port;
  public NonBlankString $ip_range;
  public IpProtocol $protocol;
  public PortNumber $to_port;
}

class IpPermissionsList {
}

class IpProtocol {
}

class LatencyMap {
}

class LaunchTemplateId {
}

class LaunchTemplateName {
}

class LaunchTemplateSpecification {
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public LaunchTemplateVersion $version;
}

class LaunchTemplateVersion {
}

class LimitExceededException {
  public NonEmptyString $message;
}

class ListAliasesInput {
  public PositiveInteger $limit;
  public NonEmptyString $name;
  public NonEmptyString $next_token;
  public RoutingStrategyType $routing_strategy_type;
}

class ListAliasesOutput {
  public AliasList $aliases;
  public NonEmptyString $next_token;
}

class ListBuildsInput {
  public PositiveInteger $limit;
  public NonEmptyString $next_token;
  public BuildStatus $status;
}

class ListBuildsOutput {
  public BuildList $builds;
  public NonEmptyString $next_token;
}

class ListFleetsInput {
  public BuildIdOrArn $build_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public ScriptIdOrArn $script_id;
}

class ListFleetsOutput {
  public FleetIdList $fleet_ids;
  public NonZeroAndMaxString $next_token;
}

class ListGameServerGroupsInput {
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
}

class ListGameServerGroupsOutput {
  public GameServerGroups $game_server_groups;
  public NonZeroAndMaxString $next_token;
}

class ListGameServersInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public SortOrder $sort_order;
}

class ListGameServersOutput {
  public GameServers $game_servers;
  public NonZeroAndMaxString $next_token;
}

class ListScriptsInput {
  public PositiveInteger $limit;
  public NonEmptyString $next_token;
}

class ListScriptsOutput {
  public NonEmptyString $next_token;
  public ScriptList $scripts;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class MatchedPlayerSession {
  public NonZeroAndMaxString $player_id;
  public PlayerSessionId $player_session_id;
}

class MatchedPlayerSessionList {
}

class MatchmakerData {
}

class MatchmakingAcceptanceTimeoutInteger {
}

class MatchmakingConfiguration {
  public BooleanModel $acceptance_required;
  public MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public WholeNumber $additional_player_count;
  public BackfillMode $backfill_mode;
  public MatchmakingConfigurationArn $configuration_arn;
  public Timestamp $creation_time;
  public CustomEventData $custom_event_data;
  public NonZeroAndMaxString $description;
  public GamePropertyList $game_properties;
  public GameSessionData $game_session_data;
  public QueueArnsList $game_session_queue_arns;
  public MatchmakingIdStringModel $name;
  public SnsArnStringModel $notification_target;
  public MatchmakingRequestTimeoutInteger $request_timeout_seconds;
  public MatchmakingRuleSetArn $rule_set_arn;
  public MatchmakingIdStringModel $rule_set_name;
}

class MatchmakingConfigurationArn {
}

class MatchmakingConfigurationList {
}

class MatchmakingConfigurationName {
}

class MatchmakingConfigurationNameList {
}

class MatchmakingConfigurationStatus {
}

class MatchmakingIdList {
}

class MatchmakingIdStringModel {
}

class MatchmakingRequestTimeoutInteger {
}

class MatchmakingRuleSet {
  public Timestamp $creation_time;
  public MatchmakingRuleSetArn $rule_set_arn;
  public RuleSetBody $rule_set_body;
  public MatchmakingIdStringModel $rule_set_name;
}

class MatchmakingRuleSetArn {
}

class MatchmakingRuleSetList {
}

class MatchmakingRuleSetName {
}

class MatchmakingRuleSetNameList {
}

class MatchmakingTicket {
  public MatchmakingConfigurationArn $configuration_arn;
  public MatchmakingIdStringModel $configuration_name;
  public Timestamp $end_time;
  public WholeNumber $estimated_wait_time;
  public GameSessionConnectionInfo $game_session_connection_info;
  public PlayerList $players;
  public Timestamp $start_time;
  public MatchmakingConfigurationStatus $status;
  public StringModel $status_message;
  public StringModel $status_reason;
  public MatchmakingIdStringModel $ticket_id;
}

class MatchmakingTicketList {
}

class MaxConcurrentGameSessionActivations {
}

class MetricGroup {
}

class MetricGroupList {
}

class MetricName {
}

class NonBlankAndLengthConstraintString {
}

class NonBlankString {
}

class NonEmptyString {
}

class NonNegativeDouble {
}

class NonZeroAndMaxString {
}

class NotFoundException {
  public NonEmptyString $message;
}

class OperatingSystem {
}

class OutOfCapacityException {
  public NonEmptyString $message;
}

class PlacedPlayerSession {
  public NonZeroAndMaxString $player_id;
  public PlayerSessionId $player_session_id;
}

class PlacedPlayerSessionList {
}

class Player {
  public LatencyMap $latency_in_ms;
  public PlayerAttributeMap $player_attributes;
  public NonZeroAndMaxString $player_id;
  public NonZeroAndMaxString $team;
}

class PlayerAttributeMap {
}

class PlayerData {
}

class PlayerDataMap {
}

class PlayerIdList {
}

class PlayerLatency {
  public Float $latency_in_milliseconds;
  public NonZeroAndMaxString $player_id;
  public NonZeroAndMaxString $region_identifier;
}

class PlayerLatencyList {
}

class PlayerLatencyPolicy {
  public WholeNumber $maximum_individual_player_latency_milliseconds;
  public WholeNumber $policy_duration_seconds;
}

class PlayerLatencyPolicyList {
}

class PlayerList {
}

class PlayerSession {
  public Timestamp $creation_time;
  public DnsName $dns_name;
  public FleetArn $fleet_arn;
  public FleetId $fleet_id;
  public NonZeroAndMaxString $game_session_id;
  public IpAddress $ip_address;
  public PlayerData $player_data;
  public NonZeroAndMaxString $player_id;
  public PlayerSessionId $player_session_id;
  public PortNumber $port;
  public PlayerSessionStatus $status;
  public Timestamp $termination_time;
}

class PlayerSessionCreationPolicy {
}

class PlayerSessionId {
}

class PlayerSessionList {
}

class PlayerSessionStatus {
}

class PolicyType {
}

class PortNumber {
}

class PositiveInteger {
}

class PositiveLong {
}

class ProtectionPolicy {
}

class PutScalingPolicyInput {
  public ComparisonOperatorType $comparison_operator;
  public PositiveInteger $evaluation_periods;
  public FleetIdOrArn $fleet_id;
  public MetricName $metric_name;
  public NonZeroAndMaxString $name;
  public PolicyType $policy_type;
  public int $scaling_adjustment;
  public ScalingAdjustmentType $scaling_adjustment_type;
  public TargetConfiguration $target_configuration;
  public Double $threshold;
}

class PutScalingPolicyOutput {
  public NonZeroAndMaxString $name;
}

class QueueArnsList {
}

class RegisterGameServerInput {
  public GameServerConnectionInfo $connection_info;
  public GameServerSortKey $custom_sort_key;
  public GameServerData $game_server_data;
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
  public GameServerInstanceId $instance_id;
  public TagList $tags;
}

class RegisterGameServerOutput {
  public GameServer $game_server;
}

class RequestUploadCredentialsInput {
  public BuildIdOrArn $build_id;
}

class RequestUploadCredentialsOutput {
  public S3Location $storage_location;
  public AwsCredentials $upload_credentials;
}

class ResolveAliasInput {
  public AliasIdOrArn $alias_id;
}

class ResolveAliasOutput {
  public FleetArn $fleet_arn;
  public FleetId $fleet_id;
}

class ResourceCreationLimitPolicy {
  public WholeNumber $new_game_sessions_per_creator;
  public WholeNumber $policy_period_in_minutes;
}

class ResumeGameServerGroupInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerGroupActions $resume_actions;
}

class ResumeGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class RoutingStrategy {
  public FleetId $fleet_id;
  public FreeText $message;
  public RoutingStrategyType $type;
}

class RoutingStrategyType {
}

class RuleSetBody {
}

class RuleSetLimit {
}

class RuntimeConfiguration {
  public GameSessionActivationTimeoutSeconds $game_session_activation_timeout_seconds;
  public MaxConcurrentGameSessionActivations $max_concurrent_game_session_activations;
  public ServerProcessList $server_processes;
}

class S3Location {
  public NonEmptyString $bucket;
  public NonEmptyString $key;
  public NonEmptyString $object_version;
  public NonEmptyString $role_arn;
}

class ScalingAdjustmentType {
}

class ScalingPolicy {
  public ComparisonOperatorType $comparison_operator;
  public PositiveInteger $evaluation_periods;
  public FleetId $fleet_id;
  public MetricName $metric_name;
  public NonZeroAndMaxString $name;
  public PolicyType $policy_type;
  public int $scaling_adjustment;
  public ScalingAdjustmentType $scaling_adjustment_type;
  public ScalingStatusType $status;
  public TargetConfiguration $target_configuration;
  public Double $threshold;
}

class ScalingPolicyList {
}

class ScalingStatusType {
}

class Script {
  public Timestamp $creation_time;
  public NonZeroAndMaxString $name;
  public ScriptArn $script_arn;
  public ScriptId $script_id;
  public PositiveLong $size_on_disk;
  public S3Location $storage_location;
  public NonZeroAndMaxString $version;
}

class ScriptArn {
}

class ScriptId {
}

class ScriptIdOrArn {
}

class ScriptList {
}

class SearchGameSessionsInput {
  public AliasIdOrArn $alias_id;
  public NonZeroAndMaxString $filter_expression;
  public FleetIdOrArn $fleet_id;
  public PositiveInteger $limit;
  public NonZeroAndMaxString $next_token;
  public NonZeroAndMaxString $sort_expression;
}

class SearchGameSessionsOutput {
  public GameSessionList $game_sessions;
  public NonZeroAndMaxString $next_token;
}

class ServerProcess {
  public PositiveInteger $concurrent_executions;
  public NonZeroAndMaxString $launch_path;
  public NonZeroAndMaxString $parameters;
}

class ServerProcessList {
}

class SnsArnStringModel {
}

class SortOrder {
}

class StartFleetActionsInput {
  public FleetActionList $actions;
  public FleetIdOrArn $fleet_id;
}

class StartFleetActionsOutput {
}

class StartGameSessionPlacementInput {
  public DesiredPlayerSessionList $desired_player_sessions;
  public GamePropertyList $game_properties;
  public GameSessionData $game_session_data;
  public NonZeroAndMaxString $game_session_name;
  public GameSessionQueueNameOrArn $game_session_queue_name;
  public WholeNumber $maximum_player_session_count;
  public IdStringModel $placement_id;
  public PlayerLatencyList $player_latencies;
}

class StartGameSessionPlacementOutput {
  public GameSessionPlacement $game_session_placement;
}

class StartMatchBackfillInput {
  public MatchmakingConfigurationName $configuration_name;
  public ArnStringModel $game_session_arn;
  public PlayerList $players;
  public MatchmakingIdStringModel $ticket_id;
}

class StartMatchBackfillOutput {
  public MatchmakingTicket $matchmaking_ticket;
}

class StartMatchmakingInput {
  public MatchmakingConfigurationName $configuration_name;
  public PlayerList $players;
  public MatchmakingIdStringModel $ticket_id;
}

class StartMatchmakingOutput {
  public MatchmakingTicket $matchmaking_ticket;
}

class StopFleetActionsInput {
  public FleetActionList $actions;
  public FleetIdOrArn $fleet_id;
}

class StopFleetActionsOutput {
}

class StopGameSessionPlacementInput {
  public IdStringModel $placement_id;
}

class StopGameSessionPlacementOutput {
  public GameSessionPlacement $game_session_placement;
}

class StopMatchmakingInput {
  public MatchmakingIdStringModel $ticket_id;
}

class StopMatchmakingOutput {
}

class StringDoubleMap {
}

class StringList {
}

class StringModel {
}

class SuspendGameServerGroupInput {
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerGroupActions $suspend_actions;
}

class SuspendGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TaggingFailedException {
  public NonEmptyString $message;
}

class TargetConfiguration {
  public Double $target_value;
}

class TargetTrackingConfiguration {
  public NonNegativeDouble $target_value;
}

class TerminalRoutingStrategyException {
  public NonEmptyString $message;
}

class Timestamp {
}

class UnauthorizedException {
  public NonEmptyString $message;
}

class UnsupportedRegionException {
  public NonEmptyString $message;
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateAliasInput {
  public AliasIdOrArn $alias_id;
  public NonZeroAndMaxString $description;
  public NonBlankAndLengthConstraintString $name;
  public RoutingStrategy $routing_strategy;
}

class UpdateAliasOutput {
  public Alias $alias;
}

class UpdateBuildInput {
  public BuildIdOrArn $build_id;
  public NonZeroAndMaxString $name;
  public NonZeroAndMaxString $version;
}

class UpdateBuildOutput {
  public Build $build;
}

class UpdateFleetAttributesInput {
  public NonZeroAndMaxString $description;
  public FleetIdOrArn $fleet_id;
  public MetricGroupList $metric_groups;
  public NonZeroAndMaxString $name;
  public ProtectionPolicy $new_game_session_protection_policy;
  public ResourceCreationLimitPolicy $resource_creation_limit_policy;
}

class UpdateFleetAttributesOutput {
  public FleetId $fleet_id;
}

class UpdateFleetCapacityInput {
  public WholeNumber $desired_instances;
  public FleetIdOrArn $fleet_id;
  public WholeNumber $max_size;
  public WholeNumber $min_size;
}

class UpdateFleetCapacityOutput {
  public FleetId $fleet_id;
}

class UpdateFleetPortSettingsInput {
  public FleetIdOrArn $fleet_id;
  public IpPermissionsList $inbound_permission_authorizations;
  public IpPermissionsList $inbound_permission_revocations;
}

class UpdateFleetPortSettingsOutput {
  public FleetId $fleet_id;
}

class UpdateGameServerGroupInput {
  public BalancingStrategy $balancing_strategy;
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerProtectionPolicy $game_server_protection_policy;
  public InstanceDefinitions $instance_definitions;
  public IamRoleArn $role_arn;
}

class UpdateGameServerGroupOutput {
  public GameServerGroup $game_server_group;
}

class UpdateGameServerInput {
  public GameServerSortKey $custom_sort_key;
  public GameServerData $game_server_data;
  public GameServerGroupNameOrArn $game_server_group_name;
  public GameServerId $game_server_id;
  public GameServerHealthCheck $health_check;
  public GameServerUtilizationStatus $utilization_status;
}

class UpdateGameServerOutput {
  public GameServer $game_server;
}

class UpdateGameSessionInput {
  public ArnStringModel $game_session_id;
  public WholeNumber $maximum_player_session_count;
  public NonZeroAndMaxString $name;
  public PlayerSessionCreationPolicy $player_session_creation_policy;
  public ProtectionPolicy $protection_policy;
}

class UpdateGameSessionOutput {
  public GameSession $game_session;
}

class UpdateGameSessionQueueInput {
  public GameSessionQueueDestinationList $destinations;
  public GameSessionQueueNameOrArn $name;
  public PlayerLatencyPolicyList $player_latency_policies;
  public WholeNumber $timeout_in_seconds;
}

class UpdateGameSessionQueueOutput {
  public GameSessionQueue $game_session_queue;
}

class UpdateMatchmakingConfigurationInput {
  public BooleanModel $acceptance_required;
  public MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public WholeNumber $additional_player_count;
  public BackfillMode $backfill_mode;
  public CustomEventData $custom_event_data;
  public NonZeroAndMaxString $description;
  public GamePropertyList $game_properties;
  public GameSessionData $game_session_data;
  public QueueArnsList $game_session_queue_arns;
  public MatchmakingConfigurationName $name;
  public SnsArnStringModel $notification_target;
  public MatchmakingRequestTimeoutInteger $request_timeout_seconds;
  public MatchmakingRuleSetName $rule_set_name;
}

class UpdateMatchmakingConfigurationOutput {
  public MatchmakingConfiguration $configuration;
}

class UpdateRuntimeConfigurationInput {
  public FleetIdOrArn $fleet_id;
  public RuntimeConfiguration $runtime_configuration;
}

class UpdateRuntimeConfigurationOutput {
  public RuntimeConfiguration $runtime_configuration;
}

class UpdateScriptInput {
  public NonZeroAndMaxString $name;
  public ScriptIdOrArn $script_id;
  public S3Location $storage_location;
  public NonZeroAndMaxString $version;
  public ZipBlob $zip_file;
}

class UpdateScriptOutput {
  public Script $script;
}

class ValidateMatchmakingRuleSetInput {
  public RuleSetBody $rule_set_body;
}

class ValidateMatchmakingRuleSetOutput {
  public BooleanModel $valid;
}

class VpcPeeringAuthorization {
  public Timestamp $creation_time;
  public Timestamp $expiration_time;
  public NonZeroAndMaxString $game_lift_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_aws_account_id;
  public NonZeroAndMaxString $peer_vpc_id;
}

class VpcPeeringAuthorizationList {
}

class VpcPeeringConnection {
  public FleetArn $fleet_arn;
  public FleetId $fleet_id;
  public NonZeroAndMaxString $game_lift_vpc_id;
  public NonZeroAndMaxString $ip_v_4_cidr_block;
  public NonZeroAndMaxString $peer_vpc_id;
  public VpcPeeringConnectionStatus $status;
  public NonZeroAndMaxString $vpc_peering_connection_id;
}

class VpcPeeringConnectionList {
}

class VpcPeeringConnectionStatus {
  public NonZeroAndMaxString $code;
  public NonZeroAndMaxString $message;
}

class VpcSubnet {
}

class VpcSubnets {
}

class WeightedCapacity {
}

class WholeNumber {
}

class ZipBlob {
}

